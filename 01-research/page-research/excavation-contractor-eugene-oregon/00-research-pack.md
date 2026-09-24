# Research Pack — D&D Land Works Excavation Contractor Eugene Oregon (`/excavation-contractor-eugene-oregon`)

**Prepared:** 2026-09-24 · **Prepared by:** Ducker Creative (adapted from the base excavation pack at `../excavation/00-research-pack.md`, dated 2026-09-08, which targets this exact primary keyword as its Keyword #1)
**Page targeted:** `/excavation-contractor-eugene-oregon` — a standalone location-service landing page, distinct from the main `/excavation/` service hub. The distinction matters: this page targets a searcher already scoping the Eugene/Lane County location signal, while `/excavation/` is the service authority hub across the full topical hierarchy. Both pages can coexist without cannibalization because they serve different searcher states (local-intent decision vs. service exploration).
**Base pack location:** `../excavation/` — full 9-file pack including keyword universe (133 rows), question mine (49 questions), entity map, competitor matrix, intent triangulation, AI citation audit, Oregon authority signals, and gap analysis. This file does not duplicate that research; it adapts and extends it for the location-page use case.
**Page already built:** `site/src/pages/excavation-contractor-eugene-oregon.astro` — page structure exists; this brief guides content improvement/rewrite of the page copy.
**Anti-doorway gate (Flag B):** This page must NOT be a template clone of the base excavation page. Required differentiators: Eugene-specific soil/drainage context, local permit references, unique H1/meta framing, and at least 2 unique sections not present on the main excavation hub (see §5 and §6 below).

---

## 1. Top 5 Keyword Targets

| # | Keyword | Intent | Why |
|---|---|---|---|
| 1 | **excavation contractor eugene or** / **excavation contractor eugene oregon** | Commercial, decision-stage | Primary target — the highest-volume head term in the base excavation pack (Keyword #1 there), explicitly location-scoped. This page is the natural landing destination for this query. |
| 2 | **excavation company eugene oregon** | Commercial, decision-stage | Near-synonym phrasing; "company" vs "contractor" distinction captures broader searcher vocabulary |
| 3 | **excavating contractor lane county** | Commercial, decision-stage | County-level expansion; Lane County is the permit/regulatory unit that actually matters for homeowners and builders |
| 4 | **residential excavation eugene or** | Commercial, consideration-stage | Project-type modifier; residential jobs are the primary audience for this page's service area |
| 5 | **small excavation contractor eugene** | Commercial, decision-stage | Long-tail trust-modifier; addresses the "will a small residential job get attention" anxiety identified as a top trust killer in the base pack |

Full 133-row universe in `../excavation/01-keyword-universe.csv`.

---

## 2. Top 10 Questions to Answer

Full list of 49 in `../excavation/02-question-mine.md`. The 10 most load-bearing for this location page specifically:

1. What's the difference between excavation and grading? *(core disambiguation — unique value this page delivers)*
2. How much does excavation cost in Eugene, Oregon? *(cost/local — "Eugene" modifier matters for local searchers)*
3. What happens if the crew hits rock during excavation — what does that do to cost? *(objection/anxiety — rock is genuinely common in parts of Lane County)*
4. Do I need to call 811 before digging in Oregon, and what is Oregon811? *(zero competitors address this — highest-trust-value section)*
5. Do I need a permit to excavate in Lane County? *(local authority signal — Lane County Grading and Fill Permit)*
6. Does D&D work on small residential jobs, or only large commercial projects? *(small-job reassurance — top trust killer in the base pack)*
7. What's the difference between residential and commercial excavation? *(directly named in topical map §6.2)*
8. What types of excavation projects does D&D handle in Eugene? *(scope-clarity for local searchers)*
9. How long does excavation take once permits/site prep are done? *(process/timeline)*
10. Why hire a licensed, bonded excavation contractor versus a lower-cost option? *(CCB license signal, trust/decision)*

---

## 3. Top 10 Entities to Integrate

Full inventory in `../excavation/03-entity-map.md` / `../excavation/entity-inventory.csv`. Priority placement for this location page:

| Entity | Where to place |
|---|---|
| D&D Land Works, David Deggelman, Oregon CCB #261742 | H1/hero, first paragraph, schema, trust section |
| Eugene, Oregon / Lane County (location entities) | H1, meta, opening paragraph, areaServed schema, service-area section |
| Oregon Utility Notification Center / Oregon811 | Dedicated "Do we call before we dig?" trust section |
| Lane County Grading and Fill Permit | Permit-awareness section, cross-link to site-prep page |
| Cut and Fill, Backfill and Compaction, Rock Removal (process entities) | What excavation covers section |
| Foundation Dig, Building Pad, Driveway, Utility Run, Septic (project types) | Project types section |
| Malpass clay soils / Lane County soil context | Eugene-specific soil/season section (unique to this location page — anti-doorway differentiator) |
| Oregon Water Resources Department / DSL (pond permitting) | Pond project-type sub-mention |
| Excavator, Dozer, Skid Steer, Compactor (equipment categories) | Equipment mention within process section |
| `Service` schema type (nested under `GeneralContractor`) | Schema block |

---

## 4. Top 5 Content Gaps to Fill

Full scoring in `../excavation/08-gap-analysis.md`. Adapted for this location page:

1. **Oregon811/utility-locate competence signal** (score 50.0) — zero-competitor-claimed, directly answers the utility-strike liability fear; especially powerful on a location page where a Eugene homeowner is evaluating a specific contractor
2. **Excavation-vs-grading disambiguation** (score 50.0) — helps Eugene searchers who land on this page after a broad query understand exactly what they're buying
3. **Eugene-specific soil/terrain context** *(location-page-specific gap)* — Malpass clay soils dominate much of Lane County's valley floor; wet-season timing matters for residential digging; zero competitors mention local soil conditions
4. **Rock/cost-overrun honesty** and **cost-structure explanation** (both 40.0) — especially high-leverage on a local page where a homeowner is actively evaluating whether to call for an estimate
5. **Small-job/residential-attention reassurance** (30.0) — "Will a small residential job in Eugene get the same attention as a large commercial contract?" is the exact trust-gap this location page must address

---

## 5. Location-Page Unique Angle (anti-doorway requirement)

This page must contain content that genuinely cannot appear unchanged on a template clone. Minimum two unique angles:

**Angle A — Eugene Soil & Season Context:**
Lane County's valley floor sits on Malpass silty clay loam (USDA Web Soil Survey, Willamette Valley unit). This soil holds water through Oregon's wet season (Oct–April) and can significantly affect excavation timing, depth-feasibility, and compaction performance. A local excavation contractor who knows Lane County soil conditions can advise on timing and material behavior in ways that a contractor unfamiliar with the area cannot. This is genuine local expertise content with zero competitor coverage.

**Angle B — Lane County Permit Context (location-specific):**
Lane County's Grading and Fill Permit triggers at >50 cubic yards or slopes steeper than 2:1 (verified against Willamette Craftworks source, flagged for direct Lane County LMD confirmation). The Lane County Land Management Division (LMD) issues these permits. This is specific to Lane County — a location signal that generic excavation pages cannot claim. Cross-link to the site-preparation page for fuller permit guidance.

**Angle C — Local Project Type Specificity:**
Eugene and surrounding Lane County areas (Springfield, Junction City, Veneta, Cottage Grove, Creswell) each have different soil profiles, topography, and development patterns. Foundation excavations in Springfield's flatter areas differ from slope-cut access roads serving rural properties near the McKenzie River corridor. Mention specific local service contexts rather than generic "Eugene area" language.

---

## 6. Recommended H1 / H2 Heading Map (location-page version)

**H1:** Excavation Contractor in Eugene, Oregon
*(City + service explicitly in H1; shorter and cleaner than the base pack's "Excavation & Earthmoving Contractor in Lane County, Oregon" — this page owns the Eugene-specific query, the base page owns the broader county framing)*

**H2s (in order):**

1. Excavation Services in Eugene, OR — What's Included *(scope overview with the All Dirt-validated process list)*
2. What's the Difference Between Excavation and Grading? *(disambiguation — this page's core disambiguation job)*
3. Types of Excavation Projects We Handle in Eugene *(project types — foundation, pond, pad, driveway, utility, septic)*
4. Why Eugene's Soil and Seasons Matter for Excavation Timing *(location-page-specific, anti-doorway differentiator — Malpass clay, wet season)*
5. How Much Does Excavation Cost in Eugene, Oregon? *(cost with local framing — national ranges + Oregon labor premium)*
6. Do We Call Before We Dig? Yes — Oregon811 on Every Job *(trust section — genuinely novel, zero competitors)*
7. Permits for Excavation in Lane County *(brief — cross-link to site-prep page for fuller guidance)*
8. Small Jobs Welcome — Residential Excavation in Eugene *(small-job reassurance — named trust killer from the base pack)*
9. Frequently Asked Questions *(FAQPage block)*
10. Get Your Excavation Scoped *(CTA)*

Every H2 is phrased as either a natural statement or question under 10 words, matching the base pack's methodology.

---

## 7. Content Format Plan (per H2)

| H2 | Format | Why |
|---|---|---|
| 1. Services included | Bulleted list (6-8 process items from the All Dirt-validated list) | Parallel items, scannability |
| 2. Excavation vs. grading | Answer-first, 60-80 words | Most citable passage on page; Speakable eligible |
| 3. Project types | Short card-format or bulleted list (6 types) each with one concrete Eugene-context sentence | Parallel; pond/septic are the standout project types |
| 4. Eugene soil/season | 2-paragraph narrative with soil name, wet-season timing, and what it means for homeowners | Unique local content — the anti-doorway section |
| 5. Cost | Comparison table — Pricing Model / Typical Range / What Drives It (including rock premium) | Addresses cost-structure gap + rock-overrun honesty |
| 6. Oregon811 | Answer-first, 60-80 words + link to digsafelyoregon.com | High-trust, Speakable eligible |
| 7. Permits | Short answer-first + cross-link to site-prep page | Avoids full duplication; local signal maintained |
| 8. Small jobs | Short narrative, 60-80 words | Objection-handling, trust-builder |
| 9. FAQ | FAQPage-formatted Q&A, 8-9 questions | Standard |
| 10. CTA | CTA block with phone + estimate call-to-action | Conversion |

---

## 8. FAQ Shortlist (8 questions for FAQPage schema)

1. What's the difference between excavation and grading?
2. How much does excavation cost in Eugene, Oregon?
3. What happens if the crew hits rock during excavation?
4. Do you handle small residential excavation jobs in Eugene?
5. Do I need to call 811 before digging in Oregon?
6. Do I need a permit to excavate in Lane County?
7. What types of excavation projects do you handle?
8. How long does excavation take?

---

## 9. Required Schema

- **`Service`** — `name: "Excavation Contractor Services"`, `provider` → D&D Land Works `GeneralContractor`, `areaServed` Eugene + Lane County, `serviceType: "Excavation"`
- **`FAQPage`** — for the 8-question shortlist above
- **`BreadcrumbList`** — Home → /services/excavation → this page (or Home → this page if no /services/excavation parent exists)
- **`Speakable`** — on the excavation-vs-grading and Oregon811 answer-first passages
- Do NOT implement `AggregateRating`/`Review` until real reviews are collected

Schema type note: `GeneralContractor` is the correct `@type` for the business entity (confirmed in the homepage pack). `ExcavationContractor` does NOT exist on schema.org. This page's primary page-level schema is `Service` nested within the business `GeneralContractor`.

---

## 10. Required Authority Signals

1. **Oregon811 / Oregon Utility Notification Center** — free locate requests, 2-business-day advance notice required (verified: digsafelyoregon.com, oregon.gov/puc)
2. **Lane County Grading and Fill Permit** — >50 cu yd or slope steeper than 2:1 trigger; Lane County Land Management Division (LMD) issues; third-party-source caveat — flag for direct LMD confirmation before publishing as exact figures
3. **OSHA 29 CFR 1926 Subpart P** — trench safety standard; mention near foundation/utility content
4. **Oregon CCB #261742** — mandatory in hero or first paragraph, consistent with all D&D pages
5. **Oregon construction labor cost** — ~20% above national average (BLS OEWS 2025 via CostFlowAI) — use to explain why Eugene pricing sits toward the higher end of national ranges

---

## 11. AI-Citation-Ready Summary Block (~150 words)

> Excavation and earthmoving work in Eugene, Oregon typically involves cutting for foundations, building pads, driveways, and utility trenches; backfilling and compacting material after utility lines or footings are set; and removing rock or excess soil from a site. D&D Land Works provides excavation services for residential and commercial projects throughout Eugene, Springfield, and Lane County, including foundation digs, pond excavation, driveway and access-road cutting, utility-run trenching, and septic system excavation. D&D is licensed and bonded under Oregon Construction Contractors Board license CCB #261742 and calls Oregon 811 at least two business days before digging on every project, as required by Oregon law. Lane County's Malpass clay soils affect excavation timing — wet-season work (October through April) requires careful scheduling and soil management to achieve proper compaction. Free estimates are available for both residential and commercial excavation work in the Eugene area.

Place in the first 30% of the page's body content, immediately after the hero.

---

## 12. Trust-Killer Rebuttals

| Trust killer | Rebuttal to build into the page |
|---|---|
| No competitor mentions Oregon811 or utility locates | State plainly that D&D calls Oregon 811 at least 2 business days before any dig, as Oregon law requires |
| Rock/clay cost overruns discovered mid-job | Name the real cost jump ($2.50–$15/cu yd standard vs. $50–$200/cu yd rock) honestly upfront, framed as budget protection |
| "Will a small residential job in Eugene get attention?" | State explicitly that small residential excavation jobs are quoted and scoped the same way as commercial work |
| No pricing signal anywhere for Eugene excavation | Publish real ranges, clearly labeled as general/national with Oregon labor premium noted, not Eugene-exact |
| Utility-strike liability fear | Explain Oregon811 as the concrete, legally-required step D&D takes on every job |
| Is the contractor licensed? | CCB #261742 in the first paragraph and the hero — not buried |
| Generic "we serve Lane County" language | Name specific Eugene-area contexts: Springfield, Junction City, Veneta, Cottage Grove — show the map |

---

## 13. E-E-A-T Signal Plan

- **Experience:** Project photos tied to Eugene/Lane County jobs (foundation, driveway cut, septic excavation) as they become available — do not fabricate
- **Expertise:** Oregon811 process, OSHA Subpart P citation, Malpass clay soil knowledge, Lane County permit context demonstrate genuine local working knowledge
- **Authority:** Direct links to digsafelyoregon.com (Oregon811) and the Lane County LMD website
- **Trust:** Honest cost range with rock-premium disclosure; explicit small-job reassurance; real ranges clearly labeled as general; CCB number in the first paragraph

---

## 14. Freshness Plan

- Re-verify Oregon811 2-business-day advance-notice requirement at digsafelyoregon.com before publish
- Re-verify Lane County Grading and Fill Permit thresholds directly with Lane County LMD before publishing as exact figures
- Re-run this pack if content build happens more than 90 days after 2026-09-24

---

## Flags

- **Flag A — Listicle-dominated SERP:** Directory/aggregator sites occupy a significant share of results for "excavation contractor eugene or" — same finding as the base pack. A local service page with specific project-type content, Oregon811, and cost honesty is the differentiator.
- **Flag B — Anti-doorway gate:** This page's Eugene soil/season context (§5 Angle A), Eugene-specific permit LMD reference (§5 Angle B), and local project context (§5 Angle C) collectively satisfy the anti-doorway requirement. Content brief must preserve these unique sections and not compress them into generic boilerplate.
- **Flag C — Cannibalization risk with /excavation/ page:** Both pages target "excavation contractor eugene or." Mitigation: this page's H1 is "Excavation Contractor in Eugene, Oregon" (location-specific); the base page's H1 is "Excavation & Earthmoving Contractor in Lane County, Oregon" (service-hub framing). Internally link both pages to each other using "excavation services" and "Eugene excavation contractor" as cross-link anchors.
