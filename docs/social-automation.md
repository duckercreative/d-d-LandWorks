# Social Media Automation

Multi-platform organic social pipeline at `09-social-media/` — fans GBP templates out to Facebook, Instagram, X, LinkedIn, and Pinterest with platform-specific copy/image adapters. Active scheduled platform today is LinkedIn; Meta/X are wired but still need credentials.

## Pipeline

`09-social-media/scripts/social_pipeline.py` picks an LRU template from `04-gmb/profiles/houston/posts/templates.json`, picks a photo from the shared 968-image library or topic-matched Meta Ads creatives for LinkedIn, adapts copy per platform, resizes images, posts a Discord preview, and on approval fans out to publishers.

## Platform Layout

Canonical platform-specific files live under `09-social-media/platforms/<platform>/`. Publishers, OAuth scripts, setup docs, and platform auth files should be placed there. Do not add new platform files under `09-social-media/scripts/` or root `09-social-media/docs/`.

## Schedule

- **Combined social** — Tue/Thu/Sat 09:00 via `09-social-media/scripts/scheduler/install.sh`
- **LinkedIn-only auto-approved** — Tue/Thu/Sat 09:15 via `09-social-media/scripts/scheduler/install_linkedin.sh`

## One-Time Setup (Required Before First Post)

1. **Meta/Facebook/Instagram** — read `09-social-media/platforms/meta/docs/auth_setup_facebook_instagram.md`; auth lives in `09-social-media/platforms/meta/auth/`
2. **X** — read `09-social-media/platforms/x/docs/auth_setup.md`; auth lives in `09-social-media/platforms/x/auth/`
3. **LinkedIn** — read `09-social-media/platforms/linkedin/docs/auth_setup.md`; auth lives in `09-social-media/platforms/linkedin/auth/`
4. **Verify** — `python3 09-social-media/scripts/social_pipeline.py --check-auth --platforms fb,ig,x,li`

## Common Commands

- Dry-run: `python3 09-social-media/scripts/social_pipeline.py --dry-run`
- Post once: `python3 09-social-media/scripts/social_pipeline.py --once`
- Single platform: `python3 09-social-media/scripts/social_pipeline.py --once --platforms fb`
- Specific template: `python3 09-social-media/scripts/social_pipeline.py --once --template <id>`

## Source-of-Truth Rules

- Templates and photos are owned by `04-gmb/` — `09-social-media/` reads them, never copies
- Per-platform copy/hashtag rules: `09-social-media/posts/templates/platform_overrides.json`
- LinkedIn content flow: `09-social-media/platforms/linkedin/docs/content_flow.md` (hook, field insight, checklist, soft CTA, one clean backlink, relevant Meta creative, 3-4 hashtags)
- Discord channel defaults to the GBP channel (override via `discord_approval.py --set-channel`)
- Treat all `platforms/*/auth/` folders as sensitive. Commit templates only, never live tokens or app secrets.

Full architecture and rationale: `09-social-media/PLAN.md`. Runbook for failures: `09-social-media/docs/runbook.md`.
