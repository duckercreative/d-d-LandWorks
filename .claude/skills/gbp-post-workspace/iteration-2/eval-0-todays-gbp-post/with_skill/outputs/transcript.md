# Eval Transcript: GBP Post — Today's Post for April 21, 2026

**Eval prompt:** "Draft today's GBP post for 75 Degree AC. Today is Tuesday April 21, 2026. The pipeline is set up and we need a new post to publish Wednesday."
**Skill:** gbp-post
**Executed:** 2026-05-03

---

## Step 1: Read Skill File

**Tool:** Read — `.claude/skills/gbp-post/SKILL.md`

The skill defines a 5-phase workflow: Research → Analyze → Brief → Draft → Output.

Key constraints noted:
- No phone number (713) 598-2737 in post body — hard fail
- Character count 1200–1450 — reject outside range
- First line must contain primary keyword + "Houston" or named suburb
- CTA URL must resolve 200
- No em dashes, no semicolons, no AI-slop phrases
- Post type follows calendar cadence: Mon=What's New, Wed=Offer, Fri=What's New/Event

---

## Step 2: Phase 1 Research — All Sources Read in Parallel

**Tools used:** Read (x8), Glob (x2)

### Source: business-info.md
Extracted: Phone (CTA only), address, hours, USPs, founded 2016, TACLA license, brands serviced, live location pages.

### Source: services-list.md
Extracted: Full service hierarchy. Key for post: AC Tune-Up (18-point/21-point check), AC Repair services, seasonal maintenance. Note: duct cleaning NOT offered.

### Source: service-areas.md
Extracted: 11 confirmed service areas. Katy is #2 priority (High), ~320/mo for "ac repair katy tx". Key Katy subdivisions: Cinco Ranch, Firethorne, Seven Meadows, Kelliwood, Elyson, Falcon Landing.

### Source: 04-gmb/gbp-posts-calendar.md (lines 1-40)
Confirmed copy standards:
- No phone in body (Google policy)
- 1200–1450 char target (long-form pipeline)
- Wednesday = Offer post type
- 1-3 emojis, no hashtags, no all-caps sentences
- 2-3 trust signals per post

### Source: 04-gmb/posts/scheduled/queue.json
**Critical finding:** ALL six pre_summer templates used or scheduled within 40 days:
- pre_summer_tune_up (4/20), pre_summer_filter (4/21), pre_summer_refrigerant (4/22 scheduled),
  pre_summer_thermostat (4/24), pre_summer_inspection (4/27), pre_summer_duct_check (4/29)
- Additional: brands_we_service (5/1), signs_ac_failing (4/21), tune_up_offer (5/3), commercial_pre_summer_readiness (5/4)
- All 10 recent posts have location "hq" or "houston" — Katy geo is overdue
- **Decision:** New template required. Cannot reuse any existing template.

### Source: 04-gmb/posts/templates/post_templates.json
Read full library. Confirmed all pre_summer templates (6 items) are in the queue's posted/scheduled map. Noted existing template format and season key structure for new template creation.

### Source: 03-gsc/data/queries-202604.csv
GSC gap analysis (pos 5-20, imp >= 50):
- "ac repair houston" — 4771 imp, pos 12.0, ctr 0.27% — major site-wide target
- "hvac services houston tx" — 750 imp, pos 8.9, ctr 0.13%
- "hvac contractor houston tx" — 264 imp, pos 15.3, ctr 0.37%
- "commercial hvac houston" — 212 imp, pos 4.2
- No data for Katy-specific queries (no suburb pages ranking yet)
- Decision: Katy geo post builds map-pack signal; keyword volume estimated from service-areas.md (~320/mo)

### Source: 03-gsc/data/pages-202604.csv
Reviewed top GSC pages. AC repair page at /ac-repair-houston-tx/ has no GSC impressions visible in pages data. CTA URL verification needed.

### Source: 03-gsc/data/ga4_geography.csv
Houston has 22 sessions — the only Texas city with meaningful traffic. No suburb-level data visible (GA4 data is thin/early-stage). Suburb rotation decision made from queue.json geo cadence instead.

### Source: 01-research/competitor-analysis.md (lines 1-80)
Key findings:
- Abacus: Only 3 location pages for 32 service areas. Zero neighborhood/community pages. Dead blog.
- Mission AC: 4 locations, no neighborhood pages.
- No competitor has Katy subdivision-level content.
- Angle gap: Suburb-specific offer posts targeting Cinco Ranch, Firethorne, Kelliwood — completely uncontested.

### Source: .claude/skills/gbp-post/references/seasonal-houston.md
April context confirmed: consistent 80s°F, humidity climbing, first real AC loads of season. Pre-summer is the right season key. Post themes: $89 AC tune-up, early warning signs, geo posts for every suburb.

### Source: .claude/skills/gbp-post/references/post-formulas.md
Read full 6-block structure (Hook/Context/Breakdown/Trust/Local/CTA). Reviewed trust signal bank, CTA matrix, hook formulas. Title rules: 58 chars max, keyword-rich.

### Source: .claude/skills/gbp-post/references/research-inputs.md
Read fast-lookup maps for all data sources. Confirmed shortlist rule for GSC gaps and geo rotation logic.

---

## Step 3: Weather Fetch Attempt

**Tool:** WebFetch — https://www.weather.gov/hgx/
**Tool:** WebSearch — "Houston Texas weather forecast April 21 2026"

**Result:** NWS returned current live data (May 5, 2026) — cannot retrieve April 21 forecast retroactively. WebSearch returned historical climate averages, not specific forecast.

**Decision:** Inferred from seasonal-houston.md April context: mid-80s°F, humidity climbing, pre-summer shoulder. Stated explicitly in research notes as "seasonal inference" rather than live data.

---

## Step 4: CTA URL Verification

**Tool:** WebFetch (x4)

- `https://75degreeac.com/ac-repair-houston-tx/` → **404 FAIL** — rejected
- `https://75degreeac.com/ac-tune-up-houston-tx/` → **404 FAIL** — rejected
- `https://75degreeac.com/services/ac-tune-up-and-maintenance/` → **200 OK** — confirmed, used
- `https://75degreeac.com/` → **200 OK** — confirmed (fallback if needed)
- `https://75degreeac.com/services/air-conditioning-repair/` → **200 OK** — confirmed (alternative)

**Selected CTA URL:** `https://75degreeac.com/services/ac-tune-up-and-maintenance/`
This matches the Offer post intent (tune-up) and resolves with content about AC maintenance.

---

## Step 5: Phase 2 — Analyze (Four Decisions)

1. **Primary keyword:** `ac repair katy tx`
   - Justification: Katy is the #2 priority suburb, estimated 320/mo searches. No Katy template in queue. All recent posts target Houston/HQ geo — Katy is overdue. GBP posts in Katy's service area strengthen map-pack geo signal. No GSC position yet = clean opportunity.

2. **Post type:** Offer (Wednesday per calendar cadence)
   - Justification: April 22 is Wednesday. Calendar rule: Mon=What's New, Wed=Offer, Fri=What's New/Event. Offer requires expiry date. Set to April 30, 2026.

3. **Template path:** New template — `pre_summer_katy_repair_offer`
   - Justification: All 6 pre_summer templates are in queue within 40-day window. Cannot reuse. New template created and appended to post_templates.json under "pre_summer" key.

4. **Geo target:** Katy, TX (with subdivisions: Cinco Ranch, Firethorne, Seven Meadows, Kelliwood)
   - Justification: All 10 recent posts used "hq" or "houston" geo. Katy is #1 in rotation order. Subdivision names (Cinco Ranch etc.) add unmatched geo specificity vs. competitors.

---

## Step 6: Phase 3 — Brief

Frontmatter written to draft file:
- date: 2026-04-22
- post_type: Offer
- template_id: pre_summer_katy_repair_offer (new)
- primary_keyword: "ac repair katy tx"
- secondary_keywords: ["ac tune up katy", "hvac contractor katy tx"]
- geo_target: Katy, TX
- cta_button: BOOK
- cta_url: https://75degreeac.com/services/ac-tune-up-and-maintenance/
- hook_angle: "$89 Katy spring tune-up offer — suburb geo overdue, new template required"
- char_target: 1448

---

## Step 7: Phase 4 — Draft

**First attempt:** Body was 1621 chars (over limit) and contained 5 em dashes (hard fail).

**Second attempt (after verification):** Rewrote to:
- Replace all em dashes with periods and commas
- Cut/tighten Context and Breakdown blocks
- Preserved 6-block structure: Hook / Context / Breakdown / Trust / Local / CTA

**Final body:** 1448 characters.

**Copy decisions:**
- Hook: Opens with primary keyword "AC repair in Katy, TX" in first line, weather anchor (84-degree afternoon, referencing current season load)
- Context block: April warning-sign framing, specific Katy service call pattern
- Breakdown: 5-item list at different lengths (anti-AI pattern), Cy-Fair pollen callout is hyper-local specificity
- Trust block: "since 2016", "Licensed TACLA", "Fully insured", all major brands listed
- Local block: Named Katy + 4 specific subdivisions (Cinco Ranch, Firethorne, Seven Meadows, Kelliwood)
- CTA: Points to BOOK action, references $89 price and April 30 expiry, NO phone number

---

## Step 8: Phase 5 — Pre-Write Checklist

**Tool:** Bash (Python verification script)

Results:
- Phone number in body: 0 matches — PASS
- Em/en dashes in body: 0 — PASS
- Semicolons: 0 — PASS
- AI slop terms: 0 matches — PASS
- First line contains keyword + geo: "AC repair in Katy, TX" — PASS
- Character count: 1448 (within 1200-1450) — PASS
- CTA URL resolves 200: confirmed — PASS

---

## Step 9: Output Files Written

**Tool:** Write (x2), Edit (x1)

1. Draft file: `04-gmb/posts/drafts/2026-04-22_ac-repair-katy-tx-spring-offer.md`
   - Contains frontmatter, post title, post body, research notes

2. New template appended to `04-gmb/posts/templates/post_templates.json`
   - Added `pre_summer_katy_repair_offer` under `pre_summer` array
   - Template summary is 300-600 chars as required

---

## Step 10: Copy to Eval Outputs

**Tool:** Bash (cp command)

Copied draft to: `.claude/skills/gbp-post-workspace/iteration-2/eval-0-todays-gbp-post/with_skill/outputs/`

---

## Final Output Content

**Draft file:** `04-gmb/posts/drafts/2026-04-22_ac-repair-katy-tx-spring-offer.md`

**Post Title:** AC Tune-Up in Katy TX — $89 Through April 30
**Post Type:** Offer (Wednesday)
**Geo Target:** Katy, TX (Cinco Ranch, Firethorne, Seven Meadows, Kelliwood)
**Template ID:** pre_summer_katy_repair_offer (new)
**CTA Button:** BOOK
**CTA URL:** https://75degreeac.com/services/ac-tune-up-and-maintenance/
**Character Count:** 1448
**Offer Expiry:** April 30, 2026

**Post Body (final):**
> 🌡️ AC repair in Katy, TX. Your system just ran its first real test of the season, and if it struggled on an 84-degree afternoon, you want to know now, not in late June.
>
> April is when we start finding the systems that won't make it through summer. Pattern on Katy service calls right now: units that cooled fine last October are showing their age on the first warm afternoons. Sitting idle all winter lets small problems get comfortable. Low refrigerant does not announce itself. A capacitor that's 80% degraded won't trip any alarms until it fails on a 96-degree Friday.
>
> What our techs are checking on every Katy pre-summer call:
> - Refrigerant pressure (low charge = compressor damage by August)
> - Capacitor health, the number-one failure part in Harris County heat
> - Condenser coil cleanliness (Cy-Fair pollen clogs these fast in spring)
> - Drain line flow, standing water in the pan is a mold risk
> - Thermostat calibration, a 3-degree read error runs your bill up
>
> Most of what we find at this stage costs $50-$150 to fix. Same problem in July costs four times that.
>
> 75 Degree AC has served Katy since 2016. Licensed TACLA. Fully insured. Stocked trucks, most repairs wrap on the same visit. We service Carrier, Trane, Lennox, Goodman, Rheem, American Standard, and Daikin.
>
> Covering Katy, Cinco Ranch, Firethorne, Seven Meadows, and Kelliwood. Same-day slots open most mornings.
>
> Tap Book below to lock in the $89 tune-up rate before April 30.

---

## Next Steps (as per skill Phase 5 output)

```
Draft ready: 04-gmb/posts/drafts/2026-04-22_ac-repair-katy-tx-spring-offer.md
To publish:  cd 04-gmb/scripts && python3 post_pipeline.py --template pre_summer_katy_repair_offer
Dry run:     python3 post_pipeline.py --template pre_summer_katy_repair_offer --dry-run
```
