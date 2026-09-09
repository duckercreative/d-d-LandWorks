# Team Setup — 75 Degree AC

Everything in this repo is committed **except live credentials and generated media**.
Git history is permanent, so no token, password, or session cookie is ever committed.
Instead, every credential file has a `*.template.*` sibling checked in next to it.

This guide gets you from `git clone` to a fully working workflow.

**Ask Shahid (`mwaqas@duckercreative.com`) for the credential bundle** — sent via
password manager or DM, never over email or in a GitHub issue.

---

## 1. Clone + baseline tools

```bash
git clone https://github.com/mshahiddigital/75-degree-ac.git
cd 75-degree-ac
```

You need:

| Tool | Why | Check |
|---|---|---|
| Python 3.11+ | every automation script | `python3 --version` |
| Node 18+ / npm | portal dashboard + reporting site | `node --version` |
| Claude Code | the 52 slash commands + 43 skills | `claude --version` |
| `gh` CLI | repo access, PRs | `gh auth status` |
| `expect` | WP-CLI over SSH transport | `which expect` |

---

## 2. Restore the credential files

For each row: copy the template to the real filename, then fill in the values from
the bundle Shahid sends. **Never rename or commit the filled copy** — `.gitignore`
already excludes all of them.

```bash
# Run from the repo root — creates every real file from its template.
cp .mcp.template.json                                               .mcp.json
cp 05-wordpress/auth/wp_config.template.json                        05-wordpress/auth/wp_config.json
cp 03-gsc/auth/credentials.template.json                            03-gsc/auth/credentials.json
cp 05-google-ads/ads-toolkit/ads-credentials.template.json          05-google-ads/ads-toolkit/ads-credentials.json
cp 05-google-ads/ads-toolkit/auth/client_secrets.template.json      05-google-ads/ads-toolkit/auth/client_secrets.json
cp 05-google-ads/ads-toolkit/google-ads.template.yaml               05-google-ads/ads-toolkit/google-ads.yaml
cp 04-gmb/auth/discord_channel.template.json                        04-gmb/auth/discord_channel.json
cp 04-gmb/auth/discord_approvers.template.json                      04-gmb/auth/discord_approvers.json
cp 04-gmb/auth/drive_config.template.json                            04-gmb/auth/drive_config.json
cp 09-social-media/auth/discord_channel.template.json               09-social-media/auth/discord_channel.json
cp 06-meta-ads/ads-cli/.env.template                                06-meta-ads/ads-cli/.env
cp portal/config/portal-secrets.env.template                        portal/secrets/.env
cp portal/app/env.local.template                                    portal/app/.env.local
```

Social platform configs (only the ones you'll actually use):

```bash
cd 09-social-media/platforms
cp linkedin/auth/linkedin_app_config.template.json   linkedin/auth/linkedin_app_config.json
cp pinterest/auth/pinterest_app_config.template.json pinterest/auth/pinterest_app_config.json
cp quora/auth/quora_app_config.template.json         quora/auth/quora_app_config.json
cp reddit/auth/reddit_app_config.template.json       reddit/auth/reddit_app_config.json
cp x/auth/x_app_config.template.json                 x/auth/x_app_config.json
cp meta/auth/meta_app_config.template.json           meta/auth/meta_app_config.json
cd ../../..
```

### Where each value comes from

| File | Values needed | Source |
|---|---|---|
| `.mcp.json` | `Authorization: Basic <base64>` | base64 of `wp_user:wp_app_password` — see note below |
| `05-wordpress/auth/wp_config.json` | `ssh_password`, `rest_user`, `rest_app_password` | Hostinger hPanel → Advanced → SSH Access; WP Admin → Users → Application Passwords. Host/port/path are pre-filled — leave them. |
| `03-gsc/auth/credentials.json` | OAuth client id + secret | Google Cloud Console → APIs & Services → Credentials (Desktop app) |
| `05-google-ads/ads-toolkit/google-ads.yaml` | `client_secret`, `developer_token`, `refresh_token` | Google Ads API Center + the OAuth client. Customer IDs pre-filled. |
| `06-meta-ads/ads-cli/.env` | Meta system-user token, KIE + Gemini API keys, DataForSEO login | Meta Business Suite → System Users; kie.ai dashboard; DataForSEO account |
| `portal/secrets/.env` | Supabase keys, DataForSEO, Bing, Clarity, GHL | Supabase project settings + each vendor dashboard |
| Social `*_app_config.json` | client id/secret per platform | Each platform's developer portal — see `09-social-media/platforms/<name>/docs/auth_setup.md` |

**Building the `.mcp.json` Basic header:**

```bash
printf '%s' 'WP_USERNAME:wp app password with spaces' | base64
```

Paste the result after `Basic ` in all three `mcpServers` entries.

---

## 3. Generate the OAuth tokens

Client secrets alone aren't enough — the Google integrations need a browser consent
flow to mint tokens. Run each once; it writes the `token_*.json` files (all gitignored).

```bash
python3 03-gsc/scripts/gsc_auth.py            # Search Console + GA4
python3 04-gmb/scripts/gmb_auth.py            # Google Business Profile
python3 05-google-ads/ads-toolkit/auth_setup.py   # Google Ads
```

> **Known trap:** the Google OAuth client is in **Testing** mode, so refresh tokens
> expire about every 7 days. When any script fails with `invalid_grant`, delete the
> relevant `token_*.json` and re-run its auth script. This is expected, not a bug.

Social platforms, as needed:

```bash
python3 09-social-media/platforms/linkedin/oauth_setup.py
python3 09-social-media/platforms/pinterest/oauth_setup.py
python3 09-social-media/platforms/x/oauth_setup.py
python3 09-social-media/platforms/meta/oauth_setup.py
```

Playwright-driven platforms (Quora, GBP UI fallback) need a real logged-in browser
session. These write `browser_state.json` — gitignored, and **personal to you**:

```bash
python3 04-gmb/scripts/gbp_browser.py --check     # prompts login if no session
```

---

## 4. Install dependencies

```bash
# Python — per toolkit
pip3 install -r 03-gsc/scripts/requirements.txt
pip3 install -r 05-google-ads/ads-toolkit/requirements.txt
pip3 install -r 05-wordpress/mcp-server/requirements.txt
pip3 install -r portal/etl/requirements.txt

# Meta Ads CLI — isolated venv (gitignored)
cd 06-meta-ads/ads-cli && python3 -m venv .venv \
  && .venv/bin/pip install -r requirements.lock.txt && cd ../..

# Portal dashboard
cd portal/app && npm install && cd ../..
```

---

## 5. Media that isn't in the repo

Generated media was excluded to keep the clone at ~90 MB instead of ~1.4 GB.

| Missing | How to get it |
|---|---|
| `04-gmb/photos/` (200 MB GBP photo library) | Mirrored in Google Drive — ask Shahid for the folder, or re-sync via the GMB photo scripts |
| `06-meta-ads/creatives/**/*.png` | Regenerate from the committed manifests + briefs: `python3 06-meta-ads/.../generate_creatives.py` (KIE AI) |
| `11-site-images/`, page screenshots | Re-pull from the live site / WP media library |
| Root PDFs (playbooks, audits) | Google Drive |
| `04-gmb/logs/`, `portal/data/*.sqlite` | Runtime artifacts — regenerate by running the pipelines |

Manifests, briefs, prompts and all the scripts that produce this media **are** committed,
so nothing is unrecoverable.

---

## 6. Verify the setup

```bash
# WordPress SSH + WP-CLI
python3 05-wordpress/scripts/wp_auth.py

# Google Business Profile API (should list locations)
python3 04-gmb/scripts/gmb_core.py --check

# Search Console
python3 03-gsc/scripts/gsc_auth.py --check

# MCP server (from Claude Code)
claude mcp list
```

---

## 7. Read these before touching anything

Order matters:

1. **[CLAUDE.md](CLAUDE.md)** — the operating rules. Non-negotiable content workflow,
   critical overrides, priority queue. Read it fully.
2. **[02-site-architecture/BUILD-PROGRESS.md](02-site-architecture/BUILD-PROGRESS.md)** —
   what's done, what's next. **First thing to open every session.**
3. **[business-voice.md](business-voice.md)** — canonical tone; every content skill reads it.
4. **[docs/commands.md](docs/commands.md)** — all 52 slash commands.
5. **[01-research/competitors/top-players.md](01-research/competitors/top-players.md)** —
   mandatory consultation before any research/brief/content task.

---

## 8. House rules that will bite you

These are enforced conventions, not suggestions:

- **WordPress writes default to draft.** Never flip draft → publish without Shahid
  saying so explicitly.
- **Production writes are opt-in.** `WP_TARGET=staging` by default; prod needs
  `ALLOW_PROD_WRITE=1` set deliberately.
- **The humanizer pass is mandatory** on any AI-drafted prose before it ships —
  page copy, blog, GBP post, review reply, ad copy, social caption.
- **Richmond pages use (346) 681-2625.** Never the Houston (713) number.
- **Never commit a filled credential file.** Run `git status` before every commit; if
  you see an `auth/*.json`, `.env`, or `.mcp.json` staged, stop and fix `.gitignore`.
- **Never hardcode Google review counts** — the live TrustIndex widget shows the real number.
- Schema type is **`HVACBusiness`**, not `HVACContractor` (the latter doesn't exist on schema.org).

---

## 9. If a credential leaks

Treat it as compromised immediately — assume it's public the moment it's pushed.

1. Rotate the credential at its source (Hostinger password, WP application password,
   revoke the OAuth token, regenerate the API key).
2. Tell Shahid.
3. Removing it from git history requires a rewrite (`git filter-repo`) **and** a
   force-push — rotation comes first, cleanup second.
