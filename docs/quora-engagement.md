# Quora Engagement (separate pipeline, not part of social_pipeline.py)

Quora is built differently from the other social platforms because (a) it has no public posting API and (b) its bot detection is aggressive enough that account bans are a real cost. Lives at `09-social-media/platforms/quora/` and runs a *separate* orchestrator (`scripts/quora_pipeline.py`) because Quora answers are 1,500–3,000-char long-form content, not adaptations of a GBP template.

## Architecture (Mirrors GBP, not LinkedIn)

Playwright + real Chrome (`channel="chrome"`) with persistent `auth/browser_state.json`. Same model as `04-gmb/scripts/gbp_browser.py`. Humanized keyboard typing (never `page.fill()` on the answer body) with 30–80 ms per-char delay.

## Slash Commands

- `/quora-post [topic?]` — research-first answer (find or accept question → draft brief → fill body per quora-engagement skill → Discord approval → post)
- `/quora-warmup [minutes?]` — daily organic engagement (6–10 topics, scrolls, 2–4 upvotes)
- `/quora-monitor [mode?]` — weekly performance + comment scan + dark HTML report

## Schedule (installed via `install_quora.sh`)

- **Posting** — Tue/Thu/Sat 09:30 → `--post-pending --max-per-run 1`
- **Warm-up** — daily 14:00 → `--warmup`
- **Weekly sweep** — Sun 18:00 → `--monitor && --comments`

## Hard Guards in `publisher.py` (code-enforced)

1. Quarantine flag in `activity_log.json` → refuse all writes
2. ≤ 3 answers / 7-day rolling window
3. ≥ 12 hours between posts
4. Warm-up freshness: required within last 48h
5. Post-warmup gap: 90 min in either direction
6. CAPTCHA detected → auto-quarantine + Discord alert + refuse further posts until human clears

## Auth Setup (one-time)

`python3 09-social-media/platforms/quora/oauth_setup.py` — log in once manually, Playwright persists state. Verify with `python3 09-social-media/platforms/quora/browser.py --check`.

## Methodology

Read `.claude/skills/quora-engagement/SKILL.md` before any answer. 5-Point Human Test, banned phrases (50+), per-cluster templates, 6-cluster intent taxonomy (emergency/repair/install/maintenance/iaq/commercial), Houston-specific signals (TACLA, CenterPoint rebates, SEER2, Manual J, Gulf humidity). **Do NOT cite the federal 25C tax credit — it expired Dec 31 2025.**

## Ban-Risk Protocol

`09-social-media/platforms/quora/docs/ban_risk_protocol.md` — read before unblocking a quarantined account.
