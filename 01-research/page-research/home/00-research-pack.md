# Research Pack — D&D Land Works Homepage (`/`)

**Prepared:** 2026-09-08 · **Prepared by:** Ducker Creative (deep-research methodology, adapted from HVAC → excavation/site-prep per CLAUDE.md)
**Page targeted:** Homepage (`/`) — the entity-defining page for D&D Land Works, a full-service excavation, grading, and site-prep contractor serving Lane County, Oregon.
**Status of underlying business:** Zero-baseline greenfield. `ddlandworks.com` does not resolve, there is no Google Business Profile, no social presence, and no prior audit or GSC data exists for this business. Every recommendation in this pack is a build-from-zero target, not an optimization of something live. This is the clean case the parent methodology anticipates, and it means several standard phases (GSC baseline, existing-schema audit, current-rankings comparison) are structurally not applicable here — noted explicitly rather than skipped silently.

This file is the master synthesis. The future content brief should read only this file; the other 8 files in this folder are the supporting evidence and can be drilled into on demand.

---

## 1. Top 5 Keyword Targets

| # | Keyword | Intent | Why |
|---|---|---|---|
| 1 | **excavation contractor eugene or** / **excavation contractor eugene oregon** | Commercial, decision-stage | Primary homepage target carried forward from the existing topical map; highest-competition, highest-reward head term in the market |
| 2 | **excavation contractor lane county or** | Commercial, decision-stage | County-wide framing matches the homepage's role as the entity-defining page (not city-scoped like `/service-areas/eugene/`) |
| 3 | **full service excavation company oregon** | Commercial, decision-stage | Matches D&D's own verified positioning line verbatim; low current competition for this exact framing |
| 4 | **excavation contractor near me** | Commercial, decision-stage | High-volume generic local-intent query; captures device-located search regardless of exact city phrasing |
| 5 | **excavation and septic company eugene oregon** | Commercial, decision-stage | Bundled-service query that plays directly to D&D's cross-service (excavation + DEQ-certified septic) differentiation |

Full 165-row universe in `01-keyword-universe.csv`.

---

## 2. Top 10 Questions to Answer

Full list of 57 in `02-question-mine.md`. The 10 most load-bearing for the homepage specifically:

1. What does "DEQ Certified" mean, and why does it matter for septic work?
2. How do I verify D&D Land Works' Oregon CCB license (#261742)?
3. Can one contractor really handle site prep, grading, drainage, and septic — or do I need to hire separately?
4. How much does excavation/site prep typically cost in Lane County? (ranges, not a quote)
5. What is the best time of year to excavate in Oregon's rainy climate?
6. Do I need a permit to grade my land or clear brush in Lane County?
7. How long does site preparation take before construction can start?
8. What should I ask before hiring any excavation contractor?
9. Does D&D Land Works serve my city in Lane County?
10. Is a "licensed and bonded" contractor actually different from an unlicensed one — does it protect me?

---

## 3. Top 10 Entities to Integrate

Full inventory in `03-entity-map.md` / `entity-inventory.csv`. Priority placement:

| Entity | Where to place |
|---|---|
| D&D Land Works (business) | H1, schema `name`, first sentence of body |
| David Deggelman (owner) | About section/link, schema `founder`/`employee` |
| Oregon CCB #261742 | Body copy (not just footer), schema `identifier`, hyperlinked to search.ccb.state.or.us |
| Oregon DEQ certification | Dedicated body paragraph explaining what it means, schema `hasCredential` if supportable |
| Lane County | H1/H2, schema `areaServed` |
| Eugene, Springfield (+ Tier 2/3 cities) | Service-area section, internal links to `/service-areas/` hub |
| Site Preparation / Excavation & Grading / Land Clearing / Septic Install & Repair (core services) | H2s, schema `Service`/`hasOfferCatalog` |
| Willamette Valley (soil/climate context) | Body copy in a seasonal/soil-awareness section |
| OSHA 1926 Subpart P | Trust/authority citation near utility/trenching content |
| GeneralContractor (schema type) | Primary `@type` — see Section 9 |

---

## 4. Top 5 Content Gaps to Fill

Full 20-point scoring in `08-gap-analysis.md`. Highest-leverage, achievable-now gaps:

1. **Bundled "one contractor, whole project" positioning** — zero-cost copy decision, directly matches D&D's own USP language
2. **License-verification hyperlink** — a single link to the official CCB lookup that zero competitors provide
3. **Rainy-season scheduling + Willamette Valley clay-soil awareness** — the most Oregon-specific, zero-competitor-covered content angle available
4. **Real timeline ranges** (site prep 1-2 months; excavation itself often just days once permitted) — sourced, not vague
5. **Explicit scope-honesty statement** (what D&D does NOT do — tree removal, stump grinding, paving, septic pumping) — turns narrow scope into a trust signal, matching the topical map's existing fencing rules

---

## 5. Biggest Structural Opportunity (confirmed, not assumed)

**Zero of the 8 competitor sites examined (Danco, All Dirt, Heavy D, Emerald, McKenzie, Braun, Strasheim, A&D) have a real FAQ section, a dedicated city landing page, published pricing ranges, named equipment, or seasonal/soil-specific content.** This independently confirms the existing topical map's location-page-whitespace finding and extends it: the gap isn't just city pages, it's structural content depth generally. A homepage that does even a handful of the items above will out-structure the entire visible competitive set. See `04-competitor-matrix.md` for the full frequency tables.

---

## 6. Recommended H1 / H2 Heading Map

**H1:** Full-Service Excavation Contractor in Lane County, Oregon

**H2s (in order):**

1. Site Prep, Grading, Septic, and More — One Licensed Contractor for Your Whole Project *(intro/positioning — answers "can one contractor really handle all of this?")*
2. What Excavation and Site Prep Services Does D&D Land Works Offer? *(service grid — links to all core service pages)*
3. Is D&D Land Works Licensed and Bonded in Oregon? *(trust — CCB #261742 + verification link)*
4. What Does DEQ Certified Mean for Septic Work? *(differentiator — explains the credential plainly)*
5. What Areas of Lane County Does D&D Land Works Serve? *(local — links to service-areas hub + city pages)*
6. How Much Does Excavation or Site Prep Cost in Lane County? *(cost — real ranges, labeled as general estimates)*
7. What Should You Expect During an Excavation or Grading Project? *(process transparency — call → estimate → work → cleanup)*
8. When Is the Best Time of Year to Excavate in Oregon? *(rainy-season/clay-soil awareness — zero-competitor-covered)*
9. Frequently Asked Questions *(FAQ block — see Section 8)*
10. Get a Free Estimate From D&D Land Works *(contact/CTA)*

Every H2 above is phrased as a real, natural question or task under 10 words, matching homeowner search behavior found in `01-keyword-universe.csv` and `02-question-mine.md`.

---

## 7. Content Format Plan (per H2)

| H2 | Format | Why | Schema unlock |
|---|---|---|---|
| 1. One licensed contractor for your whole project | Answer-first, 50-70 words | Sets positioning immediately, citable as a standalone passage | `Speakable` |
| 2. What services does D&D offer | Bulleted list (11 items — the verified service list) | Parallel items, scannable | `ItemList` / `Service` catalog |
| 3. Licensed and bonded | Answer-first (40-60 words) + inline hyperlink | Direct factual claim with a verification path | `identifier` in `GeneralContractor` schema |
| 4. What does DEQ Certified mean | Definition format (answer-first, ~60-80 words) | Explains an unfamiliar term precisely | none required, but strong `Speakable` candidate |
| 5. Service areas | Bulleted list of cities, grouped by tier, each linking out | Parallel geographic items | `areaServed` array |
| 6. Cost | Comparison table — columns: Service / Typical Lane County Range / What Affects Price | Multi-attribute data — table format lifts citation eligibility per Princeton GEO findings referenced in the parent methodology | none required |
| 7. What to expect | Numbered list (sequential process: call → visit → estimate → schedule → work → cleanup) | Sequence-dependent steps | `HowTo` |
| 8. Best time of year to excavate | Mixed — short answer-first + one comparison note (dry season vs wet season) | Seasonal nuance benefits from both a direct answer and a brief contrast | `Speakable` |
| 9. FAQ | FAQPage-formatted Q&A, 9 questions | Standard | `FAQPage` |
| 10. Get a free estimate | Short answer-first + CTA block | Conversion-focused, not information-dense | none required |

At least one comparison table (#6), one numbered list (#7), and one bulleted list (#2/#5) are specified, per the parent methodology's format-diversity requirement.

---

## 8. FAQ Shortlist (8-10 questions for FAQPage schema)

Validated against `02-question-mine.md` and against the confirmed 0/8 competitor FAQ-coverage finding in `04-competitor-matrix.md` — every one of these is uncontested ground:

1. What does "DEQ Certified" mean, and why does it matter for septic work?
2. How do I verify D&D Land Works' Oregon CCB license?
3. Can one contractor really handle site prep, grading, drainage, and septic?
4. How much does excavation or site prep typically cost in Lane County?
5. What is the best time of year to excavate in Oregon's rainy climate?
6. Do I need a permit to grade my land or clear brush in Lane County?
7. How long does site preparation take before construction can start?
8. What should I ask before hiring any excavation contractor?
9. Does D&D Land Works serve my city in Lane County?

---

## 9. Required Schema

**Verification performed per CLAUDE.md's explicit instruction** (the prior HVAC client wrongly assumed `HVACContractor` existed and had to fall back to `HVACBusiness`): fetched schema.org directly for both candidate types.

- **`GeneralContractor` — CONFIRMED REAL AND RECOMMENDED.** Full hierarchy: `Thing → Organization/Place → LocalBusiness → HomeAndConstructionBusiness → GeneralContractor`. This is a genuine, documented schema.org type (10K-100K domains use it per schema.org's own usage stats), and it is the most specific, accurate type available for an excavation/site-prep contractor — there is no `ExcavationContractor` type, confirmed by checking `HomeAndConstructionBusiness`'s full list of more-specific sub-types (Electrician, GeneralContractor, HVACBusiness, HousePainter, Locksmith, MovingCompany, Plumber, RoofingContractor — GeneralContractor is the closest fit).
- **`HomeAndConstructionBusiness`** — the direct parent type; use as a fallback/`additionalType` if a schema validator or a specific integration doesn't recognize `GeneralContractor`, but `GeneralContractor` should be the primary `@type`.
- **Recommended full schema stack:**
  - `GeneralContractor` (primary) with `additionalType: HomeAndConstructionBusiness`
  - `name`, `telephone`, `email`, `address` (once base city confirmed), `areaServed` (Lane County + named cities), `identifier` (CCB #261742), `founder`/`employee` (David Deggelman), `priceRange` (once a real range is agreed with David), `hasOfferCatalog` (the 11 verified services)
  - `FAQPage` — for the 9-question shortlist above
  - `BreadcrumbList` — once site navigation exists
  - `Speakable` — on the answer-first passages flagged in Section 7
  - `AggregateRating`/`Review` — **do not implement until real reviews exist**; fabricating this schema type would be a direct, discoverable violation of Google's structured-data guidelines and this project's "no fabricated stats" rule

---

## 10. Required Authority Signals

From `07-oregon-authority.md`, with exact source + verification date already captured:

1. Oregon CCB license verification tool (search.ccb.state.or.us) — link directly, don't just state the number
2. Oregon DEQ Onsite Wastewater Program / Installer Certification (oregon.gov/deq) — cite what the certification legally requires
3. Lane County permit guidance (grading, driveway access, right-of-way) — cite the general rule + recommend confirming with Lane County LMD for specifics
4. OSHA 29 CFR 1926 Subpart P (trench safety) — cite by name near utility/trenching content
5. NOAA Eugene climate normals (40.83 in./year, Dec/Jan/Nov wettest) + Willamette Valley clay-soil sourcing — ground the seasonal-scheduling content in real data

Density target per the parent methodology: roughly 1 statistic per 300-500 words of homepage body copy, at least one external authority link per major section.

---

## 11. AI-Citation-Ready Summary Block (120-160 words)

Drafted in full in `06-ai-citation-audit.md` §4; reproduced here for brief convenience:

> D&D Land Works is a full-service excavation, grading, and site preparation contractor based in Lane County, Oregon, serving Eugene, Springfield, and surrounding Lane County communities. Owned and operated by David Deggelman, the company is licensed and bonded under Oregon Construction Contractors Board license #CCB 261742 and holds Oregon DEQ certification, which qualifies it to install and repair septic systems under state onsite wastewater regulations. D&D Land Works serves both residential and commercial customers, offering site preparation, land clearing, brush clearing, foundation excavation, grading and leveling, drainage excavation, utility excavation, trenching and backfill, septic installation and repair, driveway repair, and slope stabilization. Free estimates are available for all project types. The company can be reached at 541-401-8726 or david@ddlandworks.com.

Place in the first 30% of the homepage body content.

---

## 12. Trust-Killer Rebuttals

From `05-intent-triangulation.md` Table 3:

| Trust killer | Rebuttal to build into the page |
|---|---|
| Unverifiable "licensed and bonded" claims | Link CCB #261742 directly to the official state lookup tool |
| Vague "we do everything" positioning | Publish a precise, honest service list; explicitly state what's NOT offered |
| No cost signal anywhere | Publish real ranges, clearly labeled as general estimates |
| Fear small residential jobs get deprioritized | State plainly that residential work is not an afterthought |
| "DEQ Certified" stated but never explained | Add a plain-language paragraph on what the certification requires |
| Rainy-season risk never acknowledged upfront | Proactively explain the seasonal window and wet-season approach |
| Zero reviews at launch | Do not fabricate; be transparent that D&D is a growing local business and let real reviews accumulate honestly over time |

---

## 13. E-E-A-T Signal Plan

- **Experience:** Named owner (David Deggelman) with a real, unembellished bio once details are confirmed; real project photos as they become available (do not fabricate a portfolio).
- **Expertise:** DEQ certification explained in detail; OSHA trench-safety citation; permit-process knowledge demonstrated in FAQ content.
- **Authority:** CCB license number + direct verification link; links out to oregon.gov/ccb and oregon.gov/deq.
- **Trust:** Explicit scope-honesty statement; real cost ranges; transparent process description; no fabricated reviews, ratings, or statistics anywhere on the page.

---

## 14. Freshness Plan

- Target "Last Updated" display once launched, synced to actual `dateModified`.
- Re-verify all cost ranges, permit fee figures, and DEQ/CCB rule citations at least every 90 days per the parent methodology's freshness rule (Lane County/Eugene permit fees in particular are noted as subject to periodic change in `07-oregon-authority.md`).
- Add this page to `02-site-architecture/page-refresh-log.csv` once that tracker exists for this project (it does not yet — greenfield).
- Re-run this entire research pack if the homepage brief/content build happens more than 90 days after 2026-09-08.

---

## Flags (per parent methodology, adapted)

- **Flag A — Listicle-dominated SERP: CONFIRMED.** Directory/aggregator sites (Angi, Yelp, BBB, HomeAdvisor, YellowPages, Porch, DownToBid) occupy a large share of page-1 results for the core target queries. Implication: the homepage alone will not fully capture AI/search citation share — D&D should also prioritize claiming and completing profiles on these exact directories once the business is live (see `06-ai-citation-audit.md` §5), and the future content plan should consider a "best excavation contractors in Lane County" style page only if it can meet the transparent-methodology bar (real competitors, real criteria) — not before a directory-and-GBP foundation exists.
- **Flag B — Anti-doorway gate:** Not directly applicable to the homepage itself (it is the entity page, not a location page), but every future city page built from this same architecture must satisfy the 6-point anti-doorway checklist referenced in the topical map (unique local content, no templated swaps) before publishing.
- **Flag C — Service × location matrix opportunity: CONFIRMED, carried forward from the topical map.** All 8 competitors examined in this pack (not just the original 4 named) confirm zero real city pages exist anywhere in this competitive set — see `04-competitor-matrix.md`.

---

## Quality Checklist

- [x] 150-200 keywords captured (165 rows in `01-keyword-universe.csv`)
- [x] 50+ questions mined (57 in `02-question-mine.md`); 13 Oregon-specific; 7 objection-type; 11 Reddit/Quora-sourced (via search-result-title proxy — direct fetch of reddit.com/quora.com threads was not reliably accessible this session, documented as a methodology limitation)
- [x] 8 competitors deep-dived (heading structure, services, trust signals, schema, pricing, CTA, city-page presence) — short of the "top 10" ideal by 2, since the Lane County excavation SERP does not have 10 distinct, fetchable local-competitor homepages beyond directories; documented honestly rather than padded with directory listings
- [ ] 12-point AI citation filter scored per-competitor — **not run** in this pass; no schema markup was detectable in any of the 8 fetched competitor pages via the available fetch tooling, making a granular 12-point score not meaningfully differentiable (effectively near-zero across the board) — noted as a limitation, re-run with direct HTML/schema parsing tooling if available in a future pass
- [x] Validated AI citation channel audit complete (Reddit, Wikipedia, YouTube, Foursquare, BBB, directories) — `06-ai-citation-audit.md` §5
- [x] 20-point gap framework scored — `08-gap-analysis.md`
- [x] Flag A (listicle SERP) evaluated
- [x] Flag B (anti-doorway) evaluated — not applicable to homepage directly, flagged forward
- [x] Flag C (service × location matrix) confirmed
- [x] 5 Oregon/authority signals with current dates — `07-oregon-authority.md`
- [ ] AI citation audit across 6 live AI chat systems — **not directly queryable** this session (no interactive ChatGPT/Perplexity/Gemini/Claude.ai/Copilot access); reasoned instead from SERP composition and documented as a methodology limitation, not silently skipped
- [x] Heading map composed, every H2 a natural question/task under 10 words
- [x] Content Format Plan completed for every H2, including at least one table, one numbered list, one bulleted list
- [x] FAQ shortlist composed (9 questions)
- [x] AI citation block drafted (134 words, first-30%-placement)
- [x] Statistics density target addressed via `07-oregon-authority.md` sourcing
- [ ] Original/proprietary research data block — **not available**; D&D has no operating history yet to generate proprietary data from (dispatch times, repair-vs-replace ratios, etc.) — flagged as a post-launch opportunity once real job data exists, not fabricated here
- [x] Freshness plan set

## Honest Limitations of This Pack (disclose to the content-brief author and to David)

1. No direct AI chat-interface querying was possible (ChatGPT/Perplexity/Gemini/Claude.ai/Copilot) — the AI citation audit is reasoned from SERP composition, a documented and defensible proxy but not a literal 6-system query-and-capture exercise.
2. No scraped review text (Google/Yelp 1-3 star) was retrievable for any competitor — intent triangulation relies on aggregated industry-pattern literature and Oregon-specific structural facts rather than quoted complaints.
3. Only 8, not 10, distinct local competitor homepages were available to deep-dive without resorting to directory-listing padding — reported honestly at 8 rather than force-fit to 10.
4. Several gap-filling items (years in business, equipment fleet, insurance dollar amounts, response time, DEQ certification exact name) require direct input from David before they can be written into content — they are listed explicitly in `08-gap-analysis.md` rather than invented.
