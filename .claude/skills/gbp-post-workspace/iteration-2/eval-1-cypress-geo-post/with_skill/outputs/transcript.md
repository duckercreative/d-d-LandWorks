# Eval Transcript — GBP Post: Cypress TX Geo Post
**Skill:** gbp-post v1.0.0
**Date:** 2026-05-03
**Prompt:** "Write a GBP post targeted at the Cypress TX service area. Focus on something a Cypress homeowner would care about right now — use real data to pick the angle, not a generic template."

---

## Step 1: Read skill file
Read `/Users/mac/Digital Marketing/Local SEO/Clients/75 Degree AC/.claude/skills/gbp-post/SKILL.md` (full, 299 lines).

Skill enforces 5-phase workflow: Research > Analyze > Brief > Draft > Output. Key constraints noted:
- No phone number in body
- 1200-1450 chars
- First line must contain primary keyword + Houston/suburb
- CTA URL must be a live 200 page
- No em dashes, no semicolons, no AI-slop phrases

---

## Step 2: Read all reference files (parallel)
Read in parallel:
- `.claude/skills/gbp-post/references/research-inputs.md`
- `.claude/skills/gbp-post/references/post-formulas.md`
- `.claude/skills/gbp-post/references/seasonal-houston.md`

Key extractions:
- May = pre_summer season, "last-chance tune-up" is the correct monthly theme
- 6-block long-form structure: hook, context, breakdown, trust, local, soft CTA
- 70-85F shoulder weather = tune-up / thermostat upgrade angle
- Cold front incoming = "before peak hits" urgency

---

## Step 3: Read all data sources (parallel)
Read in parallel:
- `04-gmb/posts/scheduled/queue.json`
- `04-gmb/gbp-posts-calendar.md` (lines 1-50)
- Grepped `03-gsc/data/queries-202604.csv` for Cypress queries
- `04-gmb/posts/templates/post_templates.json`

### Queue findings
Last 40 days all used: pre_summer_tune_up, pre_summer_filter, pre_summer_refrigerant, pre_summer_thermostat, pre_summer_inspection, pre_summer_duct_check, brands_we_service, signs_ac_failing, commercial_pre_summer_readiness, tune_up_offer.
All 10 recently-used templates excluded.
All history entries show location "hq" or "houston" — Cypress is OVERDUE in geo rotation.

### GSC Cypress query findings
- "professional ac tune-up cypress tx": 23 imp, pos 53.3 (not striking distance, confirms demand)
- "ac repair near me cypress tx": 19 imp, pos 1.0 (already #1)
- "cooling system tune-up cypress": 19 imp, pos 56.4
- "24 hour ac repair cypress": 8 imp, pos 64.8
- All Cypress queries are low-volume but the market has 1800-2000 mo searches (service-areas.md)
- No Cypress-specific page exists on 75degreeac.com

### Template findings
Pre-summer templates all excluded from queue. No existing template targets Cypress geo. Decision: write new template "pre_summer_cypress_tune_up".

---

## Step 4: Fetch weather data
WebFetch: `https://www.weather.gov/hgx/`
Result: Today 77F, light drizzle. Cold front approaching Wednesday with storms. After front clears, heat builds.
Angle: 70-85F shoulder = tune-up / "before the heat locks in" per seasonal-houston.md weather-to-angle map.

---

## Step 5: Check competitor GBP signals
WebSearch: "ac repair Cypress TX Houston HVAC May 2026"
Results: Air Depot (Cypress-local, since 1977), Mr. Cool AC (Cypress + NW Houston), Cy-Fair Heating & Air, Blue Label, Houston HVAC Repair.
Competitor gap: None of these competitors are posting neighborhood-specific content (Bridgeland, Fairfield, Blackhorse Ranch) in GBP posts. Air Depot has Cypress pages but no visible GBP post strategy. Angle opportunity owned by nobody.

---

## Step 6: Verify CTA URL
WebFetch: `https://75degreeac.com/ac-repair-cypress-tx/` → 404 (no Cypress page)
WebFetch: `https://75degreeac.com/hvac-contractor-cypress-tx/` → 404
WebSearch: site:75degreeac.com cypress → no dedicated Cypress page found
WebFetch: `https://75degreeac.com/` → 200 confirmed
WebFetch: `https://75degreeac.com/services/ac-tune-up-and-maintenance/` → 200 confirmed
Bash curl: `https://75degreeac.com/services/ac-tune-up-and-maintenance/` → 200 confirmed
Decision: Use tune-up page as CTA URL (matches seasonal angle, confirmed live).

---

## Step 7: Read Cypress geo data
Grepped `service-areas.md` for Cypress data:
- Zips: 77429, 77433, 77410
- Cy-Fair ISD school district (largest in TX)
- Key subdivisions: Bridgeland, Fairfield, Blackhorse Ranch, Towne Lake, Marvida, Cypress Creek Lakes
- SEO opportunity: High (1800-2000 mo searches)

Grepped `01-research/competitor-analysis.md`:
- Abacus: no Cypress location page (only 3 of 32 service areas have pages)
- John Moore: has /cypress-ac-repair/ page — most extensive competitor
- All other competitors: no Cypress-specific content
- Confirmed competitor gap for Cy-Fair pollen + subdivision naming

---

## Phase 2: Analysis decisions

1. **Primary keyword**: "ac tune up cypress tx" — best Cypress intent match for pre-summer season. GSC shows very low volume for all Cypress queries (site likely invisible for Cypress right now — post geo-signal is needed before the dedicated page is built).

2. **Post type**: What's New — Monday cadence (May 3 is Sunday, post for Monday May 4). Education + trust format fits "what we're seeing on service calls" angle.

3. **Template path**: NEW template "pre_summer_cypress_tune_up" — no existing template hits Cypress geo. Added to post_templates.json.

4. **Geo target**: Cypress, TX — overdue in rotation. Named subdivisions: Bridgeland, Fairfield, Blackhorse Ranch, Towne Lake. Zip codes: 77429, 77433. Cy-Fair ISD pollen angle is locally specific.

---

## Phase 3: Brief (filled before writing)

```yaml
date: 2026-05-03
post_type: What's New
template_id: pre_summer_cypress_tune_up
primary_keyword: "ac tune up cypress tx"
secondary_keywords: ["ac repair cypress tx", "hvac contractor cypress tx"]
geo_target: Cypress, TX
cta_button: BOOK
cta_url: https://75degreeac.com/services/ac-tune-up-and-maintenance/
hook_angle: "Last-chance pre-summer tune-up for Cypress homeowners, cold front clearing mid-week, then heat locks in"
weather_trigger: "77F with light drizzle today, cold front Wed, then dry heat building into the weekend"
char_target: 1422
photo_hint: "Technician checking refrigerant gauges on outdoor condenser unit in Cypress TX subdivision"
```

---

## Phase 4: Draft

First draft body had em dashes (— in "Blackhorse Ranch, Towne Lake — the homes" and "haven't failed yet — they will in July"). Caught by pre-write check.

Rewritten: em dashes replaced with periods. Capacitor bullet rewritten to use parentheses instead of em dash.

First char count check: 1469 (19 over). Tightened Block 2 context sentences.

Final char count: 1422. All checks passed.

---

## Phase 5: Pre-write checklist results

| Check | Result |
|---|---|
| Phone in body | 0 matches — PASS |
| Em dashes | 0 — PASS |
| En dashes | 0 — PASS |
| Semicolons | 0 — PASS |
| AI slop phrases | 0 matches — PASS |
| Char count | 1422 (within 1200-1450) — PASS |
| First line contains "Cypress" | YES — PASS |
| CTA URL returns 200 | Confirmed via curl — PASS |

---

## Output files

1. Draft: `04-gmb/posts/drafts/2026-05-03_ac-tune-up-cypress-tx-pre-summer.md`
2. New template appended: `04-gmb/posts/templates/post_templates.json` (id: pre_summer_cypress_tune_up, season: pre_summer)

---

## What to run next

```
Draft ready: 04-gmb/posts/drafts/2026-05-03_ac-tune-up-cypress-tx-pre-summer.md
To publish:  cd 04-gmb/scripts && python3 post_pipeline.py --template pre_summer_cypress_tune_up
Dry run:     python3 post_pipeline.py --template pre_summer_cypress_tune_up --dry-run
```

---

## Key decisions and rationale

- **No dedicated Cypress page → used tune-up page as CTA**: Homepage and service pages are the only 200-returning options. Tune-up page matches the seasonal call to action exactly.
- **New template rather than adapting existing**: All pre_summer templates are on the exclusion list (used in last 40 days). The Cypress geo angle required a new template anyway — no existing template names Cypress.
- **Cy-Fair pollen in breakdown**: Locally specific, seasonal (spring pollen), and completely absent from all competitor content. This is what makes the post non-generic.
- **Cold front angle**: Real, date-grounded urgency. Not "summer is coming" (generic). "Cold front clearing Wednesday, then the heat doesn't go back down" — specific to this week.
- **Subdivision naming**: Bridgeland, Fairfield, Blackhorse Ranch, Towne Lake — these are the four highest-recognition subdivisions in 77429/77433. A Cypress homeowner reading this would recognize their neighborhood immediately.
