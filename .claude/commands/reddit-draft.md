---
description: Draft a Reddit comment or self-post per the reddit-engagement skill — pulls top candidate, writes brief, fills body
argument-hint: [optional: candidate slug OR Reddit thread URL OR "post:<sub>:<intent>" for original post]
---

Draft a Reddit response for 75 Degree AC using the `reddit-engagement` skill methodology.

Argument: $ARGUMENTS
- A candidate slug (e.g. `houston-abc123`) → draft that specific candidate
- A Reddit thread URL → finalize that thread (locate in candidates.json or pull manually)
- `post:<sub>:<intent>` (e.g. `post:diy:maintenance`) → create a new self-post draft (no candidate needed)
- blank → use top candidate from candidates.json (refresh first if stale > 24h)

**Non-negotiables:**
- Read `.claude/skills/reddit-engagement/SKILL.md` BEFORE drafting — 5-Point Human Test, banned phrases, per-cluster requirements, phase rules
- Read `09-social-media/platforms/reddit/posts/templates.json` — banned phrases, cluster templates, link targets, disclosure text
- Read `09-social-media/platforms/reddit/subreddits/targets.json` — verify target sub's `allow_promo` setting before deciding `is_promo`
- Check `09-social-media/platforms/reddit/auth/activity_log.json` — what phase are we in? when was last warm-up? when was last write in this sub?
- NO `75degreeac.com` link in the body — text-only brand mention only
- If mentioning the business, include disclosure inline: `(Disclosure: I run 75 Degree AC in Houston, TACLA72152E.)`
- Velocity caps + phase guards are publisher-enforced; don't try to bypass

**Research first (parallel where possible):**
1. Check `09-social-media/platforms/reddit/auth/activity_log.json` — current phase, last warmup, recent writes
2. Refresh candidates if stale: `python3 09-social-media/scripts/reddit_pipeline.py --find`
3. For the target sub, check `subreddits/targets.json` for `allow_promo` + `min_karma`. If `allow_promo: false` → write must be `is_promo: no`
4. Classify intent (emergency/repair/install/maintenance/iaq/commercial) from question text
5. Locate matching deep-research pack (`01-research/page-research/<slug>/`) for entities + competitor headings
6. Read `business-info.md` + `services-list.md` for current USPs + TACLA license + Houston specifics
7. Read memory `project_hvac_incentives_2026.md` — 25C credit expired; use CenterPoint rebates ($300–$750)

**Draft the body (200–2,500 chars depending on kind):**
- Generate brief skeleton: `python3 09-social-media/platforms/reddit/post_drafter.py --slug <slug>` OR `--next` OR `--new-post --post-slug <s> --post-subreddit <sub> --post-intent <intent>`
- Open `09-social-media/platforms/reddit/posts/drafts/<slug>.md`
- Replace `{COMMENT_BODY_PLACEHOLDER}` (or `{POST_BODY_PLACEHOLDER}`) with the actual answer
- Voice: working Houston HVAC contractor, opinionated, technical, no marketing register
- Pass all 5 of the 5-Point Human Test (skill has full list)
- No banned phrases (list in templates.json)
- 1 inline authority citation (TDLR / EPA / ENERGY STAR / ACCA / CenterPoint / manufacturer)
- Hook (no link, no question repetition, no "Great question!") → BLUF → field insight → optional step list → optional disclosed brand mention
- If `is_promo: yes` → include disclosure text inline + signature line at end
- If `is_promo: no` → can still be a strong technical answer with NO brand mention at all

**Sub-tone overrides (from skill):**
- **houston_local subs** (r/houston, r/AskHouston): neighbor-to-neighbor, name suburbs, mention CenterPoint, disclosed brand mention OK if location-relevant
- **home_improvement subs** (r/HomeImprovement, r/HomeMaintenance, r/DIY): pro-to-homeowner, **NO brand mentions** (sub bans self-promo), educational only
- **hvac_industry subs** (r/HVAC, r/AirConditioning): pro-to-pro, codes + manufacturers + real numbers, **NEVER name the brand here** (pro subs treat self-promo as bot-tell)
- **adjacent subs** (r/Texas, r/SmartThermostats): tangential expertise only when overlap is real, no brand mentions

**Pre-flight before posting:**
- Update `is_promo:` field in draft front matter to match the actual content
- Run `python3 09-social-media/platforms/reddit/reddit_client.py --whoami` — confirm karma + phase
- If warmup > 24h old: run `python3 09-social-media/scripts/reddit_pipeline.py --warmup` first
- Confirm Discord channel ready (see `09-social-media/auth/discord_channel.json`)

**Next step:**
- Once draft body is filled and front matter is correct → `/reddit-post` to submit via Discord-gated flow
