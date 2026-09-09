---
description: Research-first Quora answer — find or accept a question, draft + finalize the body per the quora-engagement skill, queue for Discord approval, post via Playwright
argument-hint: [optional: Quora question URL OR a topic keyword like "Katy AC repair"]
---

Create a Quora answer for 75 Degree AC using the `quora-engagement` skill methodology.

Argument: $ARGUMENTS
- If it looks like a Quora URL → finalize that specific question
- If it's a keyword/topic → run the finder restricted to that query, then pick the top candidate
- If blank → use existing candidates.json (refresh first if stale > 24h) and pick the top

**Non-negotiables:**
- Read `09-social-media/platforms/quora/answers/templates.json` BEFORE drafting — banned phrases, 5-Point Human Test, intent-cluster requirements
- Read `01-research/page-research/<matched-slug>/research-pack.md` if one exists for the intent cluster
- Account uses human-in-loop posting — never bypass Discord approval
- Velocity cap: ≤ 3 answers per 7-day rolling window (publisher enforces this in code)
- Warm-up freshness required: a warmup session must exist within 48h before any post
- No phone number, address, or email in the answer body — single soft CTA + ONE link only

**Research first (parallel where possible):**
1. Check `09-social-media/platforms/quora/auth/activity_log.json` — when was the last post? last warm-up?
2. Read `09-social-media/platforms/quora/answers/candidates.json` — refresh via `python3 09-social-media/platforms/quora/question_finder.py` if older than 24h
3. Classify intent (emergency/repair/install/maintenance/iaq/commercial) from the question text
4. Locate the matching deep-research pack (`01-research/page-research/<slug>/`) — pull entities, top-10 competitor headings, intent triangulation
5. Read `business-info.md` + `services-list.md` for current USPs + TACLA license + Houston-specific claims
6. Read `project_hvac_incentives_2026.md` from memory if the question touches install/tax-credit (25C expired Dec 2025; use CenterPoint rebates instead)

**Draft the answer (1,500–3,000 chars, plain prose):**
- Run `python3 09-social-media/platforms/quora/answer_drafter.py --slug <slug>` (or `--question-url`) to scaffold the brief
- Open `09-social-media/platforms/quora/answers/drafts/<slug>.md` — replace `{ANSWER_BODY_PLACEHOLDER}` with the actual answer
- Voice: working Houston HVAC contractor, opinionated, specific, technical
- Pass all 5 of the 5-Point Human Test in templates.json
- No banned phrases (full list in templates.json — check before submitting)
- 1 inline authority citation (TDLR / EPA / ENERGY STAR / ACCA / Carrier / Trane)
- Hook (no link, no question repetition, no "Great question!") → BLUF → field insight → optional step list → soft CTA with ONE link to the relevant service page
- Sign off: "75 Degree AC, Houston · (713) 598-2737"

**Pre-flight before posting:**
- Run `python3 09-social-media/platforms/quora/browser.py --check` — session live?
- Check warm-up freshness: if `hours_since_last("warmups") > 48`, run `python3 09-social-media/scripts/quora_pipeline.py --warmup` first
- Confirm Discord channel ready (see `09-social-media/auth/discord_channel.json`)

**Post via the pipeline:**
- `python3 09-social-media/scripts/quora_pipeline.py --post-pending --dry-run` → verify composer interaction in screenshots first
- Once dry-run looks clean: `python3 09-social-media/scripts/quora_pipeline.py --post-pending`
- The pipeline posts to Discord, waits for ✅, types the answer with humanized cadence, screenshots every step, archives the draft on success

**On failure / CAPTCHA:**
- Publisher auto-flags `quarantined: true` in `activity_log.json` and refuses further posts
- Screenshots live in `09-social-media/platforms/quora/auth/snapshots/`
- Read `docs/ban_risk_protocol.md` before unblocking
