---
description: Meta Ads campaign + creative generation under Andromeda — 5-campaign master / 3-campaign Andromeda mode, Entity ID-aware creative briefs, Advantage+ audience design, MER reporting
argument-hint: [task: full|campaigns|creative|audiences|retargeting|report|andromeda-audit]
---

Generate Meta Ads assets for 75 Degree AC. **All outputs must be Andromeda + GEM aware** (Meta's retrieval engine, global rollout Oct 2025). Read the Andromeda Operating Principles below before producing anything.

Task: $ARGUMENTS (default: `full`)

---

## Andromeda Operating Principles (apply to ALL tasks)

Meta's Andromeda retrieval engine and GEM (Generative Ads Model) fundamentally changed Meta Ads in late 2025. Output that ignores these will underperform by 20-35%.

1. **Creative is the new audience.** Andromeda assigns each ad an Entity ID by visual + audio + textual signal. Similar ads collapse into one Entity ID and get suppressed. Diversity is the lever.
2. **Creative Similarity Score must stay <40%.** Above 60% triggers retrieval suppression — ads literally stop being shown.
3. **Consolidate ad sets.** 1 ad set with 15-25 diverse ads beats 5 ad sets with 5 each (+17% conversions, -16% cost in Andromeda controlled tests).
4. **Advantage+ Audience over manual interest stacks.** Andromeda treats targeting as a soft hint — let creative signals find the audience.
5. **Format diversity per concept.** Every concept ships in 9:16 + 1:1 + 4:5 (not just one ratio).
6. **Fatigue compressed to 2-3 weeks** (was 6+). Refresh 8-12 NEW concepts per month minimum.
7. **MER over ROAS.** Pixel-based ROAS unreliable post-iOS — Marketing Efficiency Ratio (total revenue ÷ total spend across all channels) is the new top-line metric.
8. **First 1.5 seconds determine video distribution.** Hook in frame 1, verbal hook by 0.8s, captions burned in.
9. **Cost Per Closed Install / Closed Job > CPL.** A $20 lead that doesn't close is worse than an $80 lead that books $9K.
10. **Offline conversion uploads weekly** to feed GEM the real revenue signal — without this Meta optimizes for cheap leads, not closed jobs.

---

## Campaign structure (from CLAUDE.md — 5-campaign master plan)

1. Retargeting — 20% budget — year-round
2. Pre-Summer AC (Mar-May) — 30%
3. Pre-Winter Heating (Oct-Nov) — 20%
4. Ductless/Install Awareness — 15%
5. Lookalike Expansion — 15%

**Andromeda consolidation note:** When operating scope is narrowed (e.g., Installation-only), consolidate into 3 campaigns: Lead Gen Advantage+ / Manual Retargeting / Creative Testing. See `06-meta-ads/meta-ads-installation-andromeda-strategy.md` for the consolidated playbook.

---

## KPI targets (Andromeda-updated)

| Metric | Month 1 | Month 3 | Month 6 |
|---|---|---|---|
| CPL (cold prospecting) | <$50 | <$32 | <$22 |
| CPL (retargeting) | <$25 | <$14 | <$9 |
| Hook Rate (3s view / impressions) | >25% | >35% | >50% |
| Hold Rate (75% view / impressions) | >5% | >10% | >18% |
| Link CTR | >0.9% | >1.4% | >2.2% |
| Frequency cap | 3.0 prospecting / 5.0 retargeting |
| Cost Per Closed Job (Install) | <$650 | <$380 | <$280 |
| MER (blended) | >4x | >6x | >9x |
| Live ad count | 20 | 30 | 50+ |
| Creative Similarity Score | <50% | <40% | <30% |

---

## Read first (context inputs)

- `06-meta-ads/` — existing strategy, setup guide, creative briefs, Andromeda playbook
- `06-meta-ads/meta-ads-installation-andromeda-strategy.md` — current scope playbook (Installation-only)
- `06-meta-ads/meta-ads-creative-2026-05-02.md` — current creative pack (12 concepts + 3 retargeting)
- `business-info.md` — USPs (TACLA72152E, 2016 founded, 24/7, financing, all major brands)
- `01-research/keywords-research.md` — demand themes
- Master sheet tabs `📱 Meta Ads – Campaigns` and `🎨 Meta Ads – Creative`
- `market-research` skill — 4 personas (Emergency Emily, Planned Pete, Replacement Rita, Commercial Carlos)
- `.claude/skills/meta-ads/SKILL.md` — full Andromeda methodology

Verify scope before producing: ask if scope is full (all 5 campaigns) or narrowed (e.g., Installation-only). Default to full unless scope is documented in MEMORY.md or stated in this turn.

---

## Task: `campaigns`

For each campaign in scope, output:

- Campaign name + budget % + monthly $ at scale
- Objective (Sales / Leads / Engagement / Awareness — prefer Sales objective with Lead conversion event for Andromeda data density)
- **Advantage+ vs Manual decision** with rationale (Advantage+ = data density wins under Andromeda; Manual = where sequencing or restricted audiences are essential, e.g., retargeting)
- Bid strategy (Lowest Cost during learning → Cost Cap once 50+ conv/wk → tROAS only with offline conversion feedback live)
- Conversion event (Lead / Schedule / Call → standardize on `Lead` with offline `InstallScheduled` + `InstallClosed` for value optimization)
- **Optimization window:** 7-day click + 1-day view default; high-ticket campaigns can extend to 7d-click + 7d-view
- **Ad set count:** 1 consolidated ad set per campaign minimum — only split if there's a hard segmentation reason (e.g., creative tone shift, audience temperature change)
- **Ads per ad set:** 15-25 (Andromeda volume floor)
- **Daily budget floor:** $50/day per ad set minimum (data density rule — under this, learning phase never exits)

Flag any campaign that violates Andromeda principles (e.g., 5 ad sets × 5 ads). Recommend the consolidation.

---

## Task: `audiences`

Define each audience as a ready-to-paste Ads Manager targeting brief. **Default to Advantage+ Audience suggestions; only specify hard constraints when truly required.**

Output per audience:
- **Geo:** city/metro + radius (default 15-25mi for residential service)
- **Age + gender:** broad unless hard reason to narrow
- **Advantage+ suggestions** (NOT constraints): up to 5 hint signals
- **Hard exclusions:** renters, employees of competitors, existing customers (CRM upload)
- **Estimated reach:** range
- **Andromeda fit:** explain why this audience structure works under the retrieval engine

Audience templates (apply Andromeda spirit, don't blindly follow legacy interest stacks):
- **Retargeting (Hot):** Pixel 30d phone tappers + lead form openers (no submit) + financing/pricing page visitors
- **Retargeting (Warm):** Pixel 180d site visitors + IG/FB engagers 90d
- **Retargeting (Cool):** Video viewers ≥50% 180d
- **Pre-Summer AC:** Houston metro + 25mi, 30-65, homeowners, life event "recently moved" 180d, Advantage+ hints (home improvement, smart home, energy efficiency)
- **Pre-Winter Heating:** same geo, homeowners, Advantage+ hints (HVAC, energy, weatherization)
- **Ductless:** Houston metro + 25mi, 30-55, homeowners in pre-1980 home zips OR no-central-air ZIP overlay, Advantage+ hints (mini-split, energy efficiency, smart home, IG-active)
- **Lookalike:** 1% LAL of past install customers (CSV upload, 500+ rows minimum) — only after 100+ closed installs accumulated; otherwise skip LAL and let Advantage+ Audience build it natively

---

## Task: `creative`

**Andromeda mandate:** Generate **12 distinct concepts** (Entity IDs), each shipped in **3 aspect ratios** (9:16 + 1:1 + 4:5) = **36 final ad files minimum**. Plus 3 retargeting-only concepts × 3 ratios = 9 more. Launch pack total: 45 files.

**Concepts must differ on hook AND format AND tone AND visual treatment** — not just headline copy. Variations of the same image with new text = 1 Entity ID = wasted slot.

For each concept output:

- **Concept ID:** `INST-AND-NN-LABEL` style
- **Format:** UGC video / motion graphic / static / carousel / time-lapse / talking-head — vary across the 12
- **Persona match:** which of the 4 (Replacement Rita / Planned Pete / New Homeowner / Aspirational Anna for installation; reuse Emergency Emily / Commercial Carlos for full scope)
- **Funnel stage:** Top / Mid / Bottom
- **Testing hypothesis:** what this concept tests vs. the others
- **3 hook variants** with explicit first-1.5-second guidance for video
- **Visual direction:** specific (location, lighting, talent, palette) — vary 2-3 distinct visual systems across the 12 concepts to avoid Similarity Score collapse
- **Copy:**
  - Primary text: full text + flag the first 125 chars (visible before "See more")
  - Headline: ≤27 chars
  - Description: ≤27 chars
- **CTA button** + landing page URL + WHY this LP fits this concept's funnel stage
- **Format/aspect ratio adaptations** for 9:16, 1:1, 4:5

**Cardinal rules to enforce:**
- No "Free Estimate" as primary headline — beaten to death; system reads as low-quality
- No stock-photo families in living rooms — instant Entity ID collapse with 10K other HVAC ads
- No repeat brand frames across all 12 — vary 2-3 visual systems (e.g., 4 concepts on navy, 4 on warm slate, 4 photo-led)
- Captions burned in for video, pattern interrupt by second 3, CTA by second 15

**Production output:** save brief pack to `06-meta-ads/meta-ads-creative-[date].md`. Reference the existing `meta-ads-creative-2026-05-02.md` as the canonical template structure.

---

## Task: `retargeting`

Deep-dive on retargeting only. Andromeda permits more structure here because sequencing is a real value driver.

Output:
- **3 ad sets** (NOT 5) split by audience temperature, each with **8-12 ads**:
  - **Hot:** phone tappers, lead form openers no-submit, financing/pricing page visitors → close-driven creative (urgency, financing close, "you almost called")
  - **Warm:** 180d site visitors, IG/FB engagers 90d → trust-driven creative (testimonials, social proof, education)
  - **Cool:** video viewers ≥50% 180d → re-engagement creative (new angle, customer win, category education)
- **Frequency cap:** 5.0 (retargeting tolerates higher than prospecting's 3.0)
- **Bidding:** Cost Cap if conversion volume justifies; otherwise Lowest Cost
- **Exclusions:** existing customers (always), all converters last 30d (cycle separation)
- **Sequenced messaging logic:** map which concepts go to which audience temperature AND why
- **Refresh cadence:** retargeting fatigues slower than prospecting (4-5 weeks vs 2-3) — but still refresh on 15%+ CPL rise WoW

Save to `06-meta-ads/meta-ads-retargeting-[date].md`.

---

## Task: `report`

Performance report from CSV export from Ads Manager.

**Required columns to pull (Ads Manager → Customize Columns → Export):**
- Ad name, Ad Set name, Campaign name
- Amount spent
- Impressions, Reach, Frequency
- Link clicks, Link CTR
- 3-second video plays (for Hook Rate)
- ThruPlays / Video views to 75% (for Hold Rate)
- Leads, Cost per Lead
- Custom conversions: `EstimateBooked`, `InstallScheduled`, `InstallClosed` (if offline upload is live)
- Quality ranking, Engagement rate ranking, Conversion rate ranking

**Report structure (Andromeda-aware):**
- **CPL by campaign vs target** — flag misses
- **Hook Rate per creative** (target >35%) — flag <25% as kill candidates
- **Hold Rate per creative** (target >10%)
- **Link CTR per creative** (target >1.4%)
- **Frequency alerts** (>3.0 prospecting OR >5.0 retargeting = creative fatigue)
- **Creative Similarity audit** — visual scan of top 10 ads, flag if 3+ share visual template/background/typography
- **Top 5 / Bottom 5 creatives** by CPL AND by Hook Rate (separate lists — they often disagree, both signals matter)
- **Quality / Engagement / Conversion rankings** — flag any "Below Average" creative for kill
- **MER (blended)** if revenue data is available
- **Cost Per Closed Job** if offline conversion data is live
- **Recommendations:** 5 specific actions with priority (kill X, refresh Y, scale Z, test angle W, fix tracking V)

**Output:** dark HTML to `06-meta-ads/reports/meta-report-[date].html` per the report design system in CLAUDE.md.

`open` the HTML when generated.

---

## Task: `andromeda-audit`

NEW — audit existing Meta account for Andromeda compliance and produce a fix queue.

**What to check:**
1. **Campaign count:** Is the account fragmented into 5+ campaigns when scope could consolidate to 3? Each campaign needs 50+ conversions/week — count actuals.
2. **Ad set fragmentation:** Any campaign with 3+ ad sets running similar audiences? Recommend consolidation.
3. **Ads per ad set:** Any ad set with <10 ads? Flag as creative-starved.
4. **Creative similarity:** Visual audit of all live creatives — flag template/background/typography clusters that could trigger Entity ID collapse.
5. **Format diversity:** Any concept missing one of 9:16 / 1:1 / 4:5?
6. **Audience constraints:** Any ad set running narrow interest stacks vs Advantage+ Audience?
7. **Frequency:** Any ad with frequency >3.0 prospecting or >5.0 retargeting?
8. **Fatigue window:** Any creative live >3 weeks without performance check?
9. **CAPI status:** Pixel-only or CAPI verified?
10. **Offline conversion uploads:** Live or missing? (Without this, Meta optimizes for cheap leads)
11. **Refresh cadence:** Has the account had 8+ NEW concepts launched in the last 30 days?
12. **Manual lookalikes:** Any active LAL audiences that could be retired in favor of Advantage+ Audience?

**Output:** dark HTML report to `06-meta-ads/reports/andromeda-audit-[date].html` with:
- Pass/Watch/Fail status per check
- Fix queue with priority (P0/P1/P2) and estimated impact
- Recommended next actions

---

## Output rules (apply to all tasks)

- Save markdown to `06-meta-ads/meta-ads-[task]-[YYYY-MM-DD].md`
- Save HTML reports to `06-meta-ads/reports/meta-report-[YYYY-MM-DD].html` using the dark mode design system from CLAUDE.md (non-negotiable)
- Update master sheet tabs `📱 Meta Ads – Campaigns` and `🎨 Meta Ads – Creative` when generating campaigns/creative
- `open` any HTML report after generation
- Reference existing files (`meta-ads-installation-andromeda-strategy.md`, `meta-ads-creative-2026-05-02.md`) — don't duplicate, extend
- If scope = Installation only, follow the 3-campaign Andromeda playbook, not the 5-campaign master plan

---

## Anti-patterns to refuse

If asked to produce any of the following, push back and propose the Andromeda-aligned alternative:

- 5 ad sets × 5 ads structure → recommend 1 ad set × 25 ads
- 3 ads per ad set → recommend 15-25 ads per ad set
- "Free Estimate" as primary headline → recommend a concrete anchor ("20-min estimate, no pressure")
- Stock-photo creative pack → recommend custom shoot + UGC technician pack
- Manual interest stacks of 8+ interests → recommend Advantage+ Audience with 3-5 hints
- Manual 1% LAL with <500 customer seed → recommend skipping LAL, use Advantage+ Audience instead
- Frequency cap >3.5 prospecting → recommend 3.0 with refresh trigger
- "Refresh ads every 6-8 weeks" → recommend 2-3 weeks per Andromeda fatigue window
- ROAS-only KPI → recommend MER + Cost Per Closed Job
- Pixel-only tracking → flag as P0 fix, require CAPI

---

End of skill.
