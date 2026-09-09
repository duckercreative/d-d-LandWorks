# Pinterest Engagement (separate pipeline, not part of social_pipeline.py)

Pinterest is the only social platform here with a stable official API + visual-first format + long-tail surface (months per pin). Architecture intentionally diverges from `social_pipeline.py` fan-out: separate orchestrator (`scripts/pinterest_pipeline.py`), separate corpus, **auto-publish** (no Discord gate — Pinterest doesn't punish automation the way Quora does).

## Image Source

Every pin gets a fresh 1000×1500 (2:3) image generated via KIE AI through `06-meta-ads/ads-cli/scripts/generate_pin.py`. Reuses the same KIE plumbing as Meta Ads creatives but applies Pinterest-specific visual style (editorial/infographic, NOT ad-style; light cream background; brand mark only — no phone/URL/CTA on the image).

## Slash Commands

- `/pin-create [topic]` — drafts brief (title + description + alt + UTM destination link + KIE design prompt), generates 1000×1500 image, writes to `pins/queue/`. Does NOT publish.
- `/pin-post [pin_id?]` — publishes the oldest queued pin (or a specific id). Calls `publisher.publish_pin`. Auto-archives on success.
- `/pin-report [mode?]` — Pinterest Analytics API scrape + dark HTML report sorted by saves.

## Schedule (installed via `install_pinterest.sh`)

- **Posting** — Tue/Thu/Sat 09:45 → `--post-next` (no-op if queue empty)
- **Weekly analytics** — Sun 19:00 → `--report`

## Auth Setup (one-time)

Copy `auth/pinterest_app_config.template.json` to `pinterest_app_config.json`, paste Client ID + Client Secret from developer.pinterest.com, then `python3 09-social-media/platforms/pinterest/oauth_setup.py`. Tokens persist with auto-refresh (30-day expiry, 1-day buffer in `publisher._maybe_refresh`).

## Methodology

Read `.claude/skills/pinterest-engagement/SKILL.md` before any pin. 5-Point Pin Test, banned phrases (clickbait-specific + inherited from content-generation), 7-cluster intent taxonomy (emergency/repair/install/maintenance/iaq/commercial/**seasonal**), title formula (front-loaded keywords ≤100 chars), description structure (≤500 chars, ≤5 keyword-style hashtags), alt text rules (Pinterest visual search uses this), mandatory UTM (`utm_source=pinterest&utm_medium=social_organic&utm_campaign=<topic-slug>`).

## Board Strategy

Start with ONE board ("Houston HVAC Tips & Tricks"). Expand to 4 boards only after 20+ pins + meaningful save velocity at Month 3+. Cross-posting same image to multiple boards is treated as spam by Pinterest's mid-2025 policy update — don't.

## Quality Gate Is Upstream

Pinterest auto-publishes without Discord approval because the 5-Point Pin Test runs at brief time (during `/pin-create`), not at publish time. A pin that's in the queue with a generated image has already cleared the bar.

## 2026 Compliance Reminder

Pinterest pins about installation must NOT cite the federal 25C tax credit (expired Dec 31 2025). Use CenterPoint rebates ($300–$750) instead. Read memory `project_hvac_incentives_2026.md`.
