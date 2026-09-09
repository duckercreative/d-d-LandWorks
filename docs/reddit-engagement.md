# Reddit Engagement (separate pipeline, not part of social_pipeline.py)

Reddit is the highest-leverage AI-citation surface we run. Since Google's 2024 Reddit deal, Reddit threads dominate as a source for AI Overviews — and ChatGPT/Perplexity/Gemini/Copilot all cite Reddit at scale. Long-form structured answers naming "75 Degree AC" with TACLA72152E + Houston + specific SEER2 / R-454B / Manual J get extracted by AI search engines for years. Lives at `09-social-media/platforms/reddit/` and runs a *separate* orchestrator (`scripts/reddit_pipeline.py`) because Reddit answers are long-form content with platform-specific compliance rules (9:1 self-promo, per-sub bans, shadowban detection) not present on other surfaces.

## Architecture (PRAW-only, not Playwright)

Reddit officially supports OAuth API posting via PRAW. Quora uses Playwright because Quora has no API. Reddit's ban risk is dominated by *content + cadence*, not transport — so PRAW (with all 13 behavioral guards layered on top) is both safer and more reliable than browser automation.

## Slash Commands

- `/reddit-find [cluster?]` — refresh candidates from target subs (houston / home / hvac / adjacent)
- `/reddit-draft [slug | URL | post:<sub>:<intent>]` — draft a comment or self-post per the reddit-engagement skill
- `/reddit-post [slug?]` — Discord-gated submit with all 13 guards
- `/reddit-warmup [minutes?]` — daily browse + upvote routine (required within 24h of any write)
- `/reddit-monitor [mode?]` — weekly karma + scores + comment scan + shadowban probe → dark HTML report
- `/reddit-shadowcheck [limit?]` — one-off authed-vs-unauthed visibility diff
- `/reddit-phase [advance?]` — show / advance the 5-phase account rollout

## Schedule (installed via `install_reddit.sh`)

- **Warmup** — daily 13:00 → `--warmup`
- **Find** — Mon/Wed/Fri 08:30 → `--find`
- **Posting** — Tue/Thu/Sat 10:00 → `--post-pending --max-per-run 1`
- **Weekly sweep** — Sun 19:30 → `--monitor && --comments && --shadowcheck`

## 13 Hard Guards in `publisher.py` (code-enforced)

1. Quarantine flag → refuse if `activity_log.quarantined: true`
2. Suspension check → `/api/v1/me`; auto-quarantine if `is_suspended`
3. Account age → < 14d restricted to low-friction subs (r/HomeMaintenance, r/DIY, r/HVAC_actual)
4. Phase guard → `phase_allows()` enforces phase 0–4 rules
5. Karma floor per sub → per-sub `min_karma` in `subreddits/targets.json`
6. Velocity cap → ≤ 5 comments/day, ≤ 1 post/day, ≤ 3 posts/7d
7. Time between writes → ≥ 45 min
8. Same-sub cooldown → ≥ 6h between writes in same sub
9. Warm-up freshness → warm-up within last 24h required
10. Post-warm-up gap → ≥ 30 min between warm-up and write
11. 9:1 self-promo ratio → max 10% promo over 30-day rolling window
12. Per-sub no-promo override → if sub disallows promo, refuse promo writes regardless of ratio
13. URL guard → no `75degreeac.com` link in any promo write (text-only brand mention)

Plus: vote-manipulation block (never upvote our own content), exponential backoff on 429/403/RATELIMIT, CAPTCHA-equivalent error → auto-quarantine, weekly shadowban probe with auto-quarantine on ≥ 2 flagged items.

## 5-Phase Account Rollout (code-enforced)

- **Phase 0 (Identity)** — Day 0. Bio + avatar + email verify + subscribe to 20 subs. No writes.
- **Phase 1 (Consumption)** — Weeks 1–2. Daily warmup only. No writes.
- **Phase 2 (Low-friction comments)** — Weeks 3–4. Comments in r/HomeMaintenance / r/DIY / r/HVAC_actual only, educational, NO brand mention.
- **Phase 3 (Strategic)** — Weeks 5–8. All target subs; disclosed brand mention ≤ 1 per 10; first self-posts in low-friction subs.
- **Phase 4 (Full)** — Week 9+. All target subs + all action types + 9:1 ratio enforced.

Advance via `/reddit-phase advance` — validates calendar threshold + karma threshold + no quarantine before promotion.

## Account Bio (mandatory for Phase 0)

> Houston HVAC contractor. TACLA72152E. I run 75 Degree AC. Replies are general guidance, not a service quote.

## Auth Setup (one-time)

Read `09-social-media/platforms/reddit/docs/auth_setup.md`. Create a "script" app at https://www.reddit.com/prefs/apps, copy client_id + secret into `auth/reddit_app_config.json` (template + gitignore provided), `pip3 install --user praw`, then `python3 09-social-media/platforms/reddit/oauth_setup.py` to verify.

## Methodology

Read `.claude/skills/reddit-engagement/SKILL.md` before any write. 5-Point Human Test (Houston specificity / technical specific / non-obvious tradeoff / authority citation / contractor voice), banned phrases (50+ shared with Quora + Reddit-specific moves like own-content upvoting / URL-in-promo / crossposting), per-cluster templates, 6-cluster intent taxonomy (emergency/repair/install/maintenance/iaq/commercial — same shape as Quora), 4-cluster subreddit taxonomy with per-cluster tone overrides.

## Disclosure Rule (mandatory on every brand mention)

> *(Disclosure: I run 75 Degree AC in Houston, TACLA72152E. General guidance, not a service quote.)*

## Reddit-Specific Compliance

- Federal 25C credit expired Dec 31 2025 — use CenterPoint rebates ($300–$750)
- Never link `75degreeac.com` in promo writes — text-only brand mention only
- Never upvote our own content — vote-manipulation guard refuses
- Never crosspost same content to multiple subs — Reddit spam flag
- r/HomeImprovement, r/HomeMaintenance, r/DIY, r/HVAC all ban self-promo — educational only there

## Ban-Risk Protocol

`09-social-media/platforms/reddit/docs/ban_risk_protocol.md` — read before unblocking a quarantined account. Shadowbans require r/ShadowBan appeals; suspensions require https://www.reddit.com/appeals.

## Why the Slow Rollout

Pages stuck at low rank aren't stuck because the writing was bad — they're stuck because new accounts hitting Reddit with HVAC promo get shadow-banned in days. Phase 2's "low-friction subs only + no brand mentions" rule is what protects the account through its first month. First brand-mention-capable write is ~Week 5. This is a feature.
