# Research Pack — D&D Land Works Site Preparation (`/site-preparation/`)

**Prepared:** 2026-09-08 · **Prepared by:** Ducker Creative (deep-research methodology, adapted from HVAC → excavation/site-prep per CLAUDE.md; second page through this pipeline after the homepage)
**Page targeted:** Site Preparation (`/site-preparation/`) — per the topical map (`../../topical-map-2026-09-03.md` §6.1), the **umbrella hub for the excavation service group and a top commercial converter**, sitting below the homepage and feeding into Land Clearing, Grading & Leveling, Foundation Excavation, and Drainage Excavation (none of which have been researched yet — this pack does not scope-creep into their content).
**Built on, not duplicating:** the homepage pack at `../home/` — all canonical business/location/certification entities (D&D Land Works, David Deggelman, Oregon CCB #261742, Oregon DEQ, Lane County, Eugene, Springfield, Willamette Valley, the `GeneralContractor` schema decision) are reused verbatim from `../home/entity-inventory.csv`, not re-derived. The 8 competitors the homepage pack deep-dived (Danco, All Dirt, Heavy D, Emerald, McKenzie, Braun, Strasheim, A&D) were re-checked specifically for site-prep content rather than rediscovered from scratch, per the task brief; one additional competitor (BBC Excavation Inc) surfaced organically and is added as a 9th reference point.
**Status of underlying business:** Same zero-baseline greenfield status as the homepage pack — no live site, no GBP, no digital footprint. This pack's recommendations are build-from-zero targets for this specific page.

This file is the master synthesis. The future content brief should read only this file; the other 8 files in this folder are the supporting evidence.

---

## 1. Top 5 Keyword Targets

| # | Keyword | Intent | Why |
|---|---|---|---|
| 1 | **site preparation eugene or** / **site preparation eugene oregon** | Commercial, decision-stage | Primary page target; matches the exact phrasing All Dirt and BBC Excavation already rank a dedicated page for |
| 2 | **site preparation lane county or** | Commercial, decision-stage | County-wide framing, matching this page's umbrella-hub scope (not city-scoped) |
| 3 | **land prep for new construction lane county** / **lot prep for house build oregon** | Commercial, consideration-stage | Task-brief seed terms; consumer-phrasing variants that don't compete directly with the homepage's brand-level terms |
| 4 | **site prep for ADU oregon** / **ADU site prep eugene** | Commercial, consideration-stage | Zero of 9 competitors name ADU as a project type at all — a genuinely open, timely keyword given Oregon's 2025 DEQ onsite-wastewater rule changes affecting ADUs |
| 5 | **commercial site preparation eugene oregon** / **subdivision site development lane county** | Commercial, consideration-stage | Directly serves this page's stated role as the topical map's "top commercial converter" |

Full 134-row universe in `01-keyword-universe.csv`.

---

## 2. Top 10 Questions to Answer

Full list of 44 in `02-question-mine.md`. The 10 most load-bearing for this page specifically (the task brief's named new-construction-anxiety cluster dominates this list):

1. What's the difference between site preparation and excavation? *(the page's core disambiguation job)*
2. Should site prep happen before or after I hire a builder/general contractor?
3. Do I need a land survey before site prep can start?
4. Will site prep delay my building permit?
5. Do I need a permit for site prep in Lane County (grading, erosion control, or DEQ 1200-C)?
6. What happens if the crew hits rock or bad soil partway through the job?
7. How much does site preparation typically cost in Lane County?
8. How long does site preparation take?
9. Does site prep need to happen before or after my septic system's test-pit evaluation?
10. Can one contractor handle both site prep and the excavation/grading that follows?

---

## 3. Top 10 Entities to Integrate

Full inventory in `03-entity-map.md` / `entity-inventory.csv`. Priority placement:

| Entity | Where to place |
|---|---|
| D&D Land Works, David Deggelman, Oregon CCB #261742 (reused canonical forms) | H1/first paragraph, schema, trust section — same as homepage |
| Lane County Land Management Division | Permitting section — primary authority entity for this page |
| Lane County Grading and Fill Permit + Erosion Prevention Permit (Type I/II) | Dedicated "Do I need a permit?" section |
| DEQ 1200-C Construction Stormwater Permit | Same permitting section — genuinely novel content, zero competitors mention it |
| Lane County On-Site Wastewater Program (septic test-pit sequencing) | A specific "site prep and septic" callout, tying up toward the future `/septic/` page |
| Land Clearing, Grading & Leveling, Foundation Excavation, Drainage Excavation | Down-link section per topical map §6.1 (Drainage Excavation not yet linked on the current live page — add it) |
| New Home Build, ADU, Shop/Barn Pad, Subdivision, Commercial Site Development (project types) | A "what kind of project is this for" section — zero competitors name ADU or shop/barn explicitly |
| Rough Grading, Subgrade Compaction, Topsoil Stripping, Erosion Control (process entities) | The ordered-process section |
| Willamette Valley (soil/climate context) | Rock/clay cost-honesty section |
| `Service` schema type (nested under D&D's `GeneralContractor` entity) | Primary `@type` for this page — see Section 9 |

---

## 4. Top 5 Content Gaps to Fill

Full scoring in `08-gap-analysis.md`. Highest-leverage gaps:

1. **Site-prep-vs-excavation disambiguation** (score 50.0 — the highest in this pack) — zero-cost, directly serves the page's umbrella-hub role, and is the single gap the task brief itself flags as central: most homeowners don't know these are different services, and zero of 9 competitors distinguish them (several list the two terms side-by-side without explanation)
2. **Septic/drainfield sequencing** and **rock/clay cost-overrun honesty** (tied at 40.0) — both zero-cost, genuinely Oregon-specific, zero-competitor-coverage
3. **Timeline specificity** (36.0) — real ranges already sourced in this pack
4. **Ordered-process presentation** (27.0) — the current live page has the right process steps as a bulleted list; converting to a numbered, explained sequence is a low-effort upgrade
5. **Real pricing ranges** and **new-construction sequencing/anxiety content** (tied at 25.0) — direct answers to "will this delay my permit," "what if they find bad soil," "before or after my builder"

---

## 5. Biggest Structural Opportunity (confirmed, not assumed)

**The homepage pack's "0/8 structural depth" finding holds, and sharpens, for site-prep content specifically.** Across 9 competitors examined for this exact topic (the original 8 plus BBC Excavation, which surfaced organically ranking for "site preparation eugene oregon"), zero have a real FAQ, zero publish pricing, and zero mention Lane County's grading/erosion permits or Oregon DEQ's 1200-C stormwater permit anywhere near their site-prep content. Only 2 of 9 (All Dirt, BBC Excavation) even have a standalone site-prep page rather than folding it into general excavation copy. And critically — **not one of the 9 competitors explains the difference between "site preparation" and "excavation" as distinct services**, even though several use both terms in the same sentence without distinguishing them. See `04-competitor-matrix.md` for full detail.

---

## 6. Recommended H1 / H2 Heading Map

**H1:** Site Preparation in Eugene, Springfield & Lane County, Oregon

**H2s (in order):**

1. What's the Difference Between Site Preparation and Excavation? *(disambiguation — opens the page answering the task brief's central gap, citable as a standalone passage)*
2. What Does Site Preparation Include? *(process — the real ordered sequence: survey/plan → clear → strip topsoil → cut/fill to grade → compact → stake → rough-grade for drainage)*
3. Should Site Prep Happen Before or After I Hire a Builder? *(sequencing/anxiety — the task brief's named highest-value cluster)*
4. Do I Need a Permit for Site Prep in Lane County? *(Oregon-specific — grading/fill permit, erosion prevention permit, DEQ 1200-C, all by name)*
5. What Kind of Project Is This For? *(project types — new home build, ADU, shop/barn pad, subdivision, commercial site development; zero-competitor-coverage differentiator)*
6. How Much Does Site Preparation Cost in Lane County? *(cost — ranges, labeled general, not a quote)*
7. How Long Does Site Preparation Take? *(process/timeline)*
8. What Happens If the Crew Hits Rock or Bad Soil? *(objection/anxiety — honest cost-overrun explanation + geotechnical-study framing)*
9. Site Prep and Your Septic System *(Oregon-specific — the drainfield-disturbance sequencing fact, genuinely unique content)*
10. Frequently Asked Questions *(FAQ block — see Section 8)*
11. Related Services *(down-links to Land Clearing, Grading & Leveling, Foundation Excavation, Drainage Excavation)*
12. Get Your Lot Scoped *(contact/CTA — matches the current live page's existing CTA block)*

Every H2 is phrased as a real, natural question or task, matching the homepage pack's format and this page's own question-mine findings.

---

## 7. Content Format Plan (per H2)

| H2 | Format | Why | Schema unlock |
|---|---|---|---|
| 1. Site prep vs. excavation | Answer-first, 50-70 words | The single most citable passage on the page — direct definitional contrast | `Speakable` |
| 2. What's included | Numbered list (7-step ordered process) | Sequence-dependent steps; upgrades the current live page's unordered bullet list | `HowTo` |
| 3. Before/after builder | Answer-first (60-80 words) + brief sequencing note | Directly resolves the task brief's named anxiety | `Speakable` |
| 4. Permits | Table — columns: Permit / Triggered By / Who Administers It | Multiple distinct permits (grading, erosion, 1200-C) — table format aids both scannability and AI-citation eligibility per the parent methodology's format-diversity rule | none required |
| 5. Project types | Bulleted list (5 items: new home, ADU, shop/barn, subdivision, commercial) each with one scope-difference sentence | Parallel items | `ItemList` |
| 6. Cost | Comparison table — columns: Scope / Typical Range / What Affects Price | Multi-attribute cost data | none required |
| 7. Timeline | Short comparison note (residential vs. commercial ranges) | Two distinct figures, not a full table | none required |
| 8. Rock/bad soil | Answer-first + honest explanation, 80-100 words | Objection-handling passage | `Speakable` |
| 9. Septic sequencing | Answer-first, 60-80 words | Single genuinely novel regulatory fact | `Speakable` |
| 10. FAQ | FAQPage-formatted Q&A, 9 questions | Standard | `FAQPage` |
| 11. Related services | Card grid (existing `ServiceCard` component) | Matches current live-page pattern | none required |

At least one table (#4/#6), one numbered list (#2), and one bulleted list (#5) are included, per the parent methodology's format-diversity requirement.

---

## 8. FAQ Shortlist (9 questions for FAQPage schema)

Validated against `02-question-mine.md` and the confirmed 0/9 competitor FAQ-coverage finding in `04-competitor-matrix.md`:

1. What's the difference between site preparation and excavation?
2. Should site prep happen before or after I hire a builder?
3. Do I need a survey before site prep can start?
4. Will site prep delay my building permit?
5. Do I need a permit for site prep in Lane County?
6. What happens if the crew hits rock or bad soil partway through the job?
7. How much does site preparation typically cost in Lane County?
8. How long does site preparation take?
9. Does site prep need to happen before or after my septic system is evaluated?

---

## 9. Required Schema

Verification note: this pack reuses the homepage pack's confirmed schema.org research (`GeneralContractor` is real and correct; `ExcavationContractor` does not exist) rather than re-verifying — see `../home/00-research-pack.md` §9 for the original confirmation. This page adds one layer:

- **`Service`** — CONFIRMED REAL schema.org type (https://schema.org/Service), correct for a single service page nested under an organization's offer catalog. `provider` should reference the `GeneralContractor` entity defined on the homepage/organization schema, not redefine it.
- **Recommended stack for this page:**
  - `Service` (primary `@type`) with `name: "Site Preparation"`, `provider` → D&D Land Works `GeneralContractor` entity, `areaServed` (Lane County + Eugene/Springfield at minimum), `serviceType`
  - `FAQPage` — for the 9-question shortlist above
  - `BreadcrumbList` — Home → Services → Site Preparation (already implemented in the current live page's `Breadcrumbs` component)
  - `HowTo` — optional, for the ordered process section (H2 #2), if the content brief author wants the step-sequence to be independently citable
  - `Speakable` — on the disambiguation, sequencing, and rock/soil answer-first passages
  - Do **not** implement `AggregateRating`/`Review` until real reviews exist — same rule as the homepage pack

---

## 10. Required Authority Signals

From `07-oregon-authority.md`, each with source + verification date:

1. **Lane County Grading and Fill Permit** (>50 cubic yards or cut/fill slope steeper than 2:1 — sourced from a third-party guide, flag for direct Lane County LMD confirmation before publishing as an exact figure)
2. **Lane County Erosion Prevention Permit, Type I/II** (same sourcing caveat)
3. **Oregon DEQ 1200-C Construction Stormwater Permit** — CONFIRMED directly on oregon.gov: 1-acre disturbance threshold, "common plan of development" rule, ~$1,515 application + $1,558 first-year annual fee, 30-day advance application, no homeowner exemption found
4. **Lane County On-Site Wastewater Program / test-pit sequencing** — confirmed on lanecounty.org: disturbing an approved drainfield location can void septic approval
5. **Rock/clay cost-overrun data** — standard excavation $5-$15/cu yd vs. rock $50-$200/cu yd (10-40x); clay adds ~25-50% to cost; geotechnical study ($2,000-$5,000) typically prevents 20-50% of overruns; corroborated by a Pacific Northwest-specific industry source

Density target: same as the homepage pack, roughly 1 statistic per 300-500 words, at least one external authority link per major section (especially the permitting and cost sections).

---

## 11. AI-Citation-Ready Summary Block (110-150 words)

Drafted in full in `06-ai-citation-audit.md` §4; reproduced here for brief convenience:

> Site preparation is the work that gets a raw or partially-cleared lot ready for construction: clearing brush and debris, stripping and stockpiling topsoil, cutting and filling to bring the pad to design grade, compacting the subgrade, and staking corners and elevations for the build crew. It is distinct from excavation, which is the specific digging done for a foundation, utility line, or drainage feature once the site is prepped. D&D Land Works provides site preparation for residential and commercial projects throughout Eugene, Springfield, and Lane County, Oregon — including new home builds, ADUs, shop and barn pads, subdivisions, and commercial site development — as part of a licensed, bonded (Oregon CCB #261742) full-service excavation company. Site work in Lane County may require a grading permit, an erosion-control permit, or Oregon DEQ's 1200-C stormwater permit depending on project size; D&D can help confirm what applies before work begins.

Place in the first 30% of the page's body content, immediately after the hero.

---

## 12. Trust-Killer Rebuttals

From `05-intent-triangulation.md` Table 3:

| Trust killer | Rebuttal to build into the page |
|---|---|
| No competitor explains site prep vs. excavation | Open the page with the plain-language distinction (H2 #1) |
| Sequencing anxiety ("will this delay my permit?") | State the real grading-vs-building-permit distinction, with a "confirm with Lane County LMD" caveat |
| Fear of rock/clay cost overruns with no warning | Explain honestly, frame a soil check as budget protection, not an upsell |
| DEQ 1200-C / erosion permits never mentioned in this market | Name the 1-acre threshold and "common plan of development" rule plainly |
| Septic drainfield disturbance risk never mentioned | State explicitly that D&D coordinates grading around an evaluated/approved drainfield location |
| Vague process language ("we'll clear and grade it") | Publish the real, ordered process as a numbered sequence |

---

## 13. E-E-A-T Signal Plan

- **Experience:** Real project photos tied to specific project types (a wooded lot cleared for a new build, an ADU pad, a shop pad) as they become available — do not fabricate a portfolio.
- **Expertise:** The permit-specificity content (grading, erosion, 1200-C) and the septic-sequencing fact demonstrate genuine working knowledge no competitor currently shows.
- **Authority:** Direct links to oregon.gov/deq (1200-C) and lanecounty.org (grading/erosion permits, on-site wastewater) — free authority-borrowing.
- **Trust:** Honest rock/clay cost-overrun framing; explicit statement of what's NOT included (no tree removal, stump grinding, paving — per the topical map's scope fences on adjacent services); real cost ranges, clearly labeled as general.

---

## 14. Freshness Plan

- Re-verify the Lane County grading/erosion-permit cubic-yard and slope thresholds directly against Lane County LMD (not the third-party guide used in this pass) before publishing them as exact, quotable figures.
- Re-verify the DEQ 1200-C fee schedule at or before publish, and again at least every 90 days — government fee schedules change on normal cycles.
- Re-run this entire research pack if the content brief/build happens more than 90 days after 2026-09-08, consistent with the homepage pack's freshness rule.

---

## Flags (per parent methodology, adapted)

- **Flag A — Listicle-dominated SERP:** Less true for this page's geo-scoped queries than for the homepage's head term — real Lane County contractor pages (All Dirt, BBC Excavation, Emerald) rank directly for "site preparation eugene oregon," while national cost-guide sites (Angi, HomeGuide) dominate the bare cost-modified query. See `06-ai-citation-audit.md` §1.
- **Flag B — Anti-doorway gate:** Not directly applicable — this is a service page, not a location page. Future city×service pages (e.g., `/services/springfield/site-preparation/`, noted as P1/P2 targets in `01-keyword-universe.csv`) must satisfy the topical map's 6-point anti-doorway checklist before publishing.
- **Flag C — Umbrella-hub confirmation:** The topical map's framing of this page as the "natural umbrella hub for the excavation service group" is independently confirmed by this pack's competitor research — no competitor performs the disambiguation/hub function, and the internal-linking plan (down to Land Clearing, Grading & Leveling, Foundation Excavation, Drainage Excavation) is the correct structural response, not yet fully implemented on the current live page (Drainage Excavation isn't linked yet).

---

## Quality Checklist

- [x] 100-150+ keywords captured (134 rows in `01-keyword-universe.csv`)
- [x] 40+ questions mined (44 in `02-question-mine.md`); 11 Oregon-specific; 6 objection-type; 8 Reddit/Quora-sourced (proxy, same methodology limitation as the homepage pack — direct thread fetching unreliable)
- [x] 8 homepage-pack competitors re-checked for site-prep-specific content (not re-discovered from scratch) + 1 supplemental competitor (BBC Excavation) added — `04-competitor-matrix.md`
- [x] Validated AI citation channel audit reused from homepage pack where unchanged, with new site-prep-specific SERP-composition findings — `06-ai-citation-audit.md`
- [x] 20-point-equivalent gap framework scored (12 gaps + 1 structural note) — `08-gap-analysis.md`
- [x] Flags A/B/C evaluated
- [x] 5+ Oregon/Lane-County authority signals with source + verification date, 3 of them new/site-prep-specific (grading permit, erosion permit, DEQ 1200-C, septic sequencing) — `07-oregon-authority.md`
- [ ] AI citation audit across 6 live AI chat systems — **not directly queryable** this session, same limitation as the homepage pack; reasoned from SERP composition instead
- [x] Heading map composed, every H2 a natural question/task
- [x] Content Format Plan completed for every H2, including at least one table, one numbered list, one bulleted list
- [x] FAQ shortlist composed (9 questions)
- [x] AI citation block drafted (~130 words, first-30%-placement)
- [x] Entity map cross-references homepage's canonical entities rather than re-deriving them — `03-entity-map.md`, `entity-inventory.csv`
- [x] Umbrella-hub content gap (site prep vs. excavation disambiguation) identified, scored highest, and built into the heading map — the task brief's central ask

## Honest Limitations of This Pack (disclose to the content-brief author and to David)

1. No direct AI chat-interface querying was possible, same as the homepage pack — this audit is reasoned from SERP composition.
2. The Lane County grading/erosion-permit cubic-yard and slope-percentage thresholds are sourced from a third-party permitting guide (Willamette Craftworks), not fetched directly from Lane Code or the LMD's own permit page in this pass — flagged explicitly in `07-oregon-authority.md` and `03-entity-map.md` for direct confirmation before publishing as exact figures. The DEQ 1200-C facts, by contrast, were confirmed directly against oregon.gov.
3. No Lane-County-specific "site prep cost per acre" figure exists in any source found — all cost ranges in this pack are statewide/national and should be presented as general ranges, not local pricing.
4. Whether D&D itself coordinates with septic test-pit evaluators, or expects the customer to have that done independently, is unconfirmed — flagged in `08-gap-analysis.md` as a question for David before the sequencing claim is finalized in content.
5. Whether D&D offers or refers geotechnical/soil-testing services, or only reacts to conditions found mid-job, is unconfirmed — same flag.
