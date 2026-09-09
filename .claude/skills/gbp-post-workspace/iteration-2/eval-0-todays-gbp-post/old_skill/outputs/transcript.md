# Eval Transcript — GBP Post Skill (OLD Snapshot)
**Eval:** eval-0-todays-gbp-post
**Prompt:** "Draft today's GBP post for 75 Degree AC. Today is Tuesday April 21, 2026. The pipeline is set up and we need a new post to publish Wednesday."
**Skill version:** OLD snapshot (1.0.0)
**Date run:** 2026-05-03

---

## Step 1: Read Skill File
Read `/Users/mac/Digital Marketing/Local SEO/Clients/75 Degree AC/.claude/skills/gbp-post-workspace/skill-snapshot/gbp-post/SKILL.md`

Extracted workflow: 5-phase (Research → Analyze → Brief → Draft → Output). Identified critical rules: no phone in body, 1200-1450 chars, keyword+geo in first line, real CTA URL.

## Step 2: Phase 1 — Research (parallel reads)

**Files read in parallel (batch 1):**
- `business-info.md` — NAP, USPs, service areas, pricing, live location pages
- `services-list.md` — Full service hierarchy (AC repair, installation, maintenance, etc.)
- `service-areas.md` — 11 suburbs with community breakdowns and keyword targets

**Files read in parallel (batch 2):**
- `04-gmb/gbp-posts-calendar.md` (lines 1-50) — Post copy standards: 1200-1450 chars, no phone, 3x/week schedule
- `04-gmb/posts/scheduled/queue.json` — Posted map shows 10 templates used in last ~40 days (all pre_summer templates consumed)
- `03-gsc/data/queries-202604.csv` (lines 1-140) — GSC query data

**Files read in parallel (batch 3):**
- `04-gmb/posts/templates/post_templates.json` (lines 1-200) — Template library: pre_summer, summer, pre_winter, winter, year_round arrays
- `03-gsc/data/ga4_geography.csv` — Geography data (Houston TX top local market at 22 sessions; mostly non-local traffic)

**Additional reads:**
- `01-research/competitor-analysis.md` (lines 1-60) — Abacus has no Katy page; John Moore limited; no competitor exploiting Katy geo+offer combo
- `.claude/skills/gbp-post-workspace/skill-snapshot/gbp-post/references/seasonal-houston.md` — April: mid-80s, pre-summer, tune-up conversion window
- `.claude/skills/gbp-post-workspace/skill-snapshot/gbp-post/references/post-formulas.md` — 6-block structure, trust signal bank, CTA matrix, banned phrases

**Weather:** No live WebFetch attempted (no live browser available in eval context). Used seasonal-houston.md: April 21 Houston = mid-80s, shoulder season, first consistent AC load.

**Key research findings:**
- ALL pre_summer templates already posted/scheduled in queue.json
- GSC biggest gap: "ac repair houston" (4,771 impressions, position 12.0) — but no suburb-specific keyword has GSC data
- Wednesday = Offer post type (calendar cadence)
- Geo rotation due: all history entries are "hq"/Houston. Katy is #2 priority suburb, no Katy post in history
- Competitor gap: Abacus has no Katy page; no competitor using Katy geo+Offer combo

## Step 3: Phase 2 — Analyze

**Decisions made:**
1. **Primary keyword:** "ac repair katy tx" — GSC shows no direct Katy data, but service-areas.md confirms 2,800-3,200 mo search volume. Closest GSC signal is "ac repair houston" at position 12. Using Katy aligns with geo rotation rule.
2. **Post type:** Offer — Wednesday per calendar cadence. Offer requires expiry date and conversion CTA.
3. **Template path:** New template — `pre_summer_katy_offer`. All existing pre_summer templates used or scheduled.
4. **Geo target:** Katy, TX (Cinco Ranch, Firethorne, Kelliwood mentioned for hyper-local signal)

## Step 4: Phase 3 — Brief

Frontmatter written:
```yaml
date: 2026-04-22
post_type: Offer
template_id: pre_summer_katy_offer
primary_keyword: "ac repair katy tx"
secondary_keywords: ["ac tune up katy", "hvac contractor katy tx"]
geo_target: Katy, TX
cta_button: BOOK
cta_url: https://75degreeac.com/services/ac-tune-up-and-maintenance/
hook_angle: "$89 pre-summer AC tune-up offer for Katy homeowners"
weather_trigger: "April 21: mid-80s, shoulder season, first real AC loads"
char_target: 1438
photo_hint: "Technician performing AC tune-up on outdoor condenser in Katy neighborhood"
```

## Step 5: Phase 4 — Draft

Wrote 6-block long-form post body (1438 chars). First draft had 3 em dashes and was 1494 chars. Fixed both:
- Replaced em dashes with periods or parentheses
- Tightened Block 4 (trust) and Block 3 (breakdown) to bring under 1450

## Step 6: Phase 5 — Pre-write checks

All checks run via Python script:
- Body length: 1438 chars — PASS (1200-1450 range)
- Phone number grep: 0 matches — PASS
- Em dash/semicolon grep: 0 matches — PASS (after revision)
- En dash grep: 0 matches — PASS
- AI slop phrases: 0 matches — PASS
- First line: "AC repair and tune-up in Katy, TX" — PASS (keyword + geo)
- CTA URL: /services/ac-tune-up-and-maintenance/ — confirmed live (same URL in queue.json pre_summer_inspection entry)

## Step 7: Output files

**Draft file:** `04-gmb/posts/drafts/2026-04-22_ac-repair-katy-pre-summer-offer.md`
**New template entry:** Appended to post_templates.json pre_summer array as `pre_summer_katy_offer`

**To publish:**
```
Draft ready: 04-gmb/posts/drafts/2026-04-22_ac-repair-katy-pre-summer-offer.md
To publish:  cd 04-gmb/scripts && python3 post_pipeline.py --template pre_summer_katy_offer
Dry run:     python3 post_pipeline.py --template pre_summer_katy_offer --dry-run
```

---

## Issues / Observations

1. **All pre_summer templates consumed** — The queue.json showed all 6 pre_summer templates (and 4 others) already posted/scheduled, forcing a new template to be authored. The skill handled this correctly by going to new template authoring.

2. **No live weather data** — Skill calls for WebFetch of weather.gov/hgx or WebSearch. These were not available in the eval run. Used seasonal-houston.md fallback data (April = mid-80s shoulder season). This is acceptable per the skill's guardrail: "If any Phase 1 source is missing, state it explicitly in the research notes."

3. **GSC has no suburb-level keywords** — All GSC data is for generic Houston queries, not Katy-specific. The skill says "never invent keywords" but also "pick a keyword that has GSC signal." Resolution: the Katy keyword aligns with documented search volumes in service-areas.md (2,800-3,200/mo), and the nearest GSC signal is "ac repair houston" at position 12. Noted this in research notes.

4. **First draft failed em dash check** — 3 em dashes in first draft. Caught and fixed in pre-write check phase, which is the correct workflow.

5. **Char count required iteration** — First draft was 1494 chars (44 over limit). Required one revision pass to trim to 1438. Pre-write check caught this before output was written.
