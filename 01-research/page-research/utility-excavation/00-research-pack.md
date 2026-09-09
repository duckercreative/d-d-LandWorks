# Research Pack — D&D Land Works Utility Excavation (`/utility-excavation/`)

**Prepared:** 2026-09-09 · **Prepared by:** Ducker Creative (deep-research methodology, adapted from HVAC → excavation/site-prep per CLAUDE.md; ninth page through this pipeline after the homepage, Site Preparation, Excavation & Grading, Grading & Leveling, Land Clearing, Septic, Foundation Excavation, and Drainage Excavation)
**Page targeted:** Utility Excavation (`/utility-excavation/`) — a P1 core service page per the topical map (`../../topical-map-2026-09-03.md` §6.7), sitting below Excavation & Grading in the site hierarchy, and the page excavation-content.md's own shipped copy explicitly promises will cover "trenching-specific depth" for a utility run.
**Built on, not duplicating:** all eight prior packs. Canonical business/location/certification entities (D&D Land Works, David Deggelman, Oregon CCB #261742, Oregon DEQ, Lane County, Eugene, Springfield, Willamette Valley, the `GeneralContractor`/`Service` schema decisions) are reused verbatim, not re-derived. Oregon811 and OSHA 1926 Subpart P are reused verbatim from `../excavation/07-oregon-authority.md` rather than re-verified. The competitor set (Danco, All Dirt, Heavy D, Emerald, McKenzie, Braun, Strasheim, A&D) was re-checked specifically for utility-trenching content rather than rediscovered from scratch — six directly re-fetched for this pass; see `04-competitor-matrix.md`.
**Status of underlying business:** same zero-baseline greenfield status as all eight prior packs — no live indexed site, no GBP, no digital footprint. Two live pages already exist in the Astro codebase (`site/src/pages/services/utility-excavation.astro` and `site/src/pages/services/trenching-backfill.astro`), built before this research pipeline existed; both were read in full and are evaluated against this pack's findings throughout, especially in §0 below.

This file is the master synthesis. The future content brief should read only this file; the other eight files in this folder are the supporting evidence and can be drilled into on demand.

---

## 0. Scope Boundary (read this before writing or editing any content for this page)

This page sits inside a genuine **three-way boundary**, more tangled than any prior page in this pipeline resolved. It touches: (1) what excavation-content.md already promised, (2) what drainage-excavation-content.md already shipped, and (3) a live, separately-built sibling page — `trenching-backfill.astro` — whose scope was never independently researched. Each is addressed below.

### Boundary 1 — What this page must deliver on: excavation-content.md's own promise

The already-shipped `07-landing-pages/content/excavation-content.md` states, under its "What Kind of Project Is This For?" section: *"**Utility run.** Trenching for a water, sewer, or utility line to a new structure. See [utility excavation](/services/utility-excavation/) for trenching-specific depth."* This page owes that promise a real answer — specifically, the per-utility-type burial-depth figures verified in `07-oregon-authority.md` §1. Not delivering a genuine depth answer here would leave a dangling, unfulfilled cross-link on an already-published sibling page.

### Boundary 2 — What NOT to repeat: drainage-excavation-content.md and excavation-content.md's already-owned mechanics

`drainage-excavation-content.md` (shipped 2026-09-09) already covers buried trenching mechanics for **water-management purposes** — French drains, curtain drains, catch basins — including its own depth/slope/material content (French drain: 18-24 in. standard, 4-6 ft near a footing; 1% pipe slope) and its own cross-link to `excavation-content.md` for "the fuller trench-safety picture" (OSHA 1926 Subpart P, Oregon811). `excavation-content.md` itself owns the general cut/fill/OSHA/Oregon811 mechanics already. **This page must not re-explain any of that.** What makes THIS page distinct is not the trenching mechanics (opening a hole, calling 811, following OSHA) — every trenching page in this pipeline shares those — it's the **purpose**: this page is trenching to deliver a utility SERVICE (water supply, sewer, electrical power, gas, communications) to a structure, not to manage water (drainage's job) or to create space for a foundation (excavation's job). Where general trench-safety or Oregon811 content is needed, cross-link to `../excavation/` rather than duplicating it, exactly as drainage-excavation-content.md already does.

### Boundary 3 — The real, tangled question: is Utility Excavation genuinely distinct from Trenching & Backfill?

This is the boundary the task named as unresolved, and it required actual research rather than assumption — both live pages were read in full, and real search behavior was checked.

**What each live page actually says, read directly:**

- `utility-excavation.astro`: organized entirely around **which utility** is being trenched for — water service lines, sewer laterals, electrical conduit, gas lines, irrigation/lighting circuits — plus locating existing lines before other work. Its own "Locates First, Always" framing and its bulleted list are all keyed to **utility type and purpose**.
- `trenching-backfill.astro`: organized entirely around **the mechanics of closing a trench properly** — "Backfill Is Where Most Trenches Fail Later," explaining compaction in lifts vs. dumping and walking away. Its own bulleted list explicitly states the trench being opened and closed could be "for utility lines, drainage pipe, and footings" — i.e., it already frames itself as a **cross-cutting technique**, applicable regardless of why the trench was dug in the first place, not a third purpose alongside utility and drainage.

**What business-info.md says:** "Utility Excavation" and "Trenching & Backfill" appear as two separate line items in D&D's verified service list — a real signal the business itself thinks of them as distinct enough to name separately, which this pack weighs seriously rather than dismissing as an artifact of an early business-card listing.

**What the topical map (2026-09-03) originally planned, which is now superseded:** the topical map's own §4 and §6.7 treated Trenching & Backfill as "a section within Utility Excavation at launch," graduating to a standalone page only later, once it earned independent demand (P2 priority). **That plan has already been overtaken by the actual build** — both pages already exist as separate, parallel, fully-built Astro routes, and the homepage's own shipped copy (`home-content.md`) already links to `/utility-excavation/` as one bullet ("including trenching and backfill for water, sewer, and utility lines") while the site's actual navigation and `ServiceCard` components on both live pages cross-link them as full siblings, not parent/section. The original graduate-later plan and the current shipped reality disagree, and the shipped reality is what a customer or search engine will actually encounter.

**What real search behavior shows (checked directly via search, not assumed):** "utility trenching cost" queries return results organized **by utility type** — cost broken down separately for water, sewer, gas, and electrical trenching, each with a different price band tied to what's being buried and its required depth. "Trenching and backfill" queries return results organized **by technique/mechanics** — "trenching cost" vs. "backfill cost" as two components of a job, broken down by trench depth, soil condition, and whether backfill/compaction is included, regardless of what the trench is for. This is a real, distinguishable difference in how people search, not the same query phrased two ways — it directly parallels the excavation-vs-grading-leveling resolution earlier in this pipeline (excavation = the WHY/WHAT — creating space for a purpose; grading = the HOW — shaping the surface once material is in place).

**Recommendation (evidence-based, not resolved as content in this task): keep both pages separate, but redraw the scope line explicitly along the WHY-vs-HOW axis already implicit in the two live pages' actual shipped copy.**

- **Utility Excavation owns the WHY**: which utility (water, sewer, electrical, gas, communications), why it's being run, the per-utility burial-depth figures, joint trenching (multiple utilities in one trench), utility-company coordination (who calls for the tap vs. who calls Oregon811), and utility-specific cost drivers.
- **Trenching & Backfill owns the HOW**: the general mechanics of opening a trench to the right width/depth and closing it properly — backfill in compacted lifts, bedding material selection generically, compaction testing, surface restoration — applicable across utility, drainage, AND foundation-backfill contexts alike, exactly as its own shipped copy already frames it.
- This mirrors the excavation-vs-grading-leveling precedent (two pages, cross-linked, one owns the purpose-driven "what/why," the other owns the cross-cutting "how/technique") rather than the land-clearing-vs-brush-clearing precedent (one page with the second folded in as a section). **Do not fold Trenching & Backfill into this page** — business-info.md's own separate listing, the already-shipped separate Astro routes, and the real search-behavior split all argue against a merge.
- **This page should NOT re-explain general backfill/compaction-in-lifts mechanics** — that content correctly belongs on `/trenching-backfill/` per its own existing shipped framing. This page should name what materials go INTO a utility trench (bedding sand, the specific pipe/conduit for that utility) without rebuilding the compaction-technique explanation, cross-linking to `/trenching-backfill/` for that piece the same way drainage-excavation-content.md cross-links to `/excavation/` for trench-safety mechanics.

**This is a recommendation for a future brief/content decision on `/trenching-backfill/`, not a resolved fact.** No content or research for `/trenching-backfill/` itself was produced in this task — only this scope-boundary finding, so a future pass on that page (or a decision to formally redraw its scope per this recommendation) can act on it with evidence already in hand.

### Boundary 4 — Overlap with Septic and Foundation Excavation (minor, already resolved elsewhere)

A sewer lateral running to a septic tank touches the septic page's territory (the tank/drainfield itself, DEQ-regulated) — one-line disambiguation only, cross-link to `/septic/`. A utility stub-in during a foundation dig touches Foundation Excavation's territory — cross-link, don't duplicate its ORSC R405 foundation-drain content (unrelated to utility service lines in any case).

---

## 1. Top 5 Keyword Targets

| # | Keyword | Intent | Why |
|---|---|---|---|
| 1 | **utility excavation eugene or** / **utility trenching eugene oregon** | Commercial, decision-stage | Primary page target; matches the topical map's own primary keyword and the live page's existing title tag framing |
| 2 | **water line trenching cost oregon** / **sewer lateral installation cost** | Commercial, consideration-stage | Task-brief-named seed terms; zero competitors publish per-utility cost figures — see `04-competitor-matrix.md` |
| 3 | **how deep does a water/sewer/gas/electrical line need to be buried oregon** | Informational, awareness-stage | The page's single strongest content asset — a genuine, code-verified, per-utility-type answer nobody else gives |
| 4 | **can water sewer electrical gas go in same trench** (joint trenching) | Informational/commercial, consideration-stage | A real, code-permitted, cost-saving option named by zero competitors |
| 5 | **who calls 811 utility company or contractor** / **do I need a permit to run a new utility line** | Informational, pre-call-stage | Coordination-role and permit-anxiety questions that directly gate a call, task-brief-named |

Full 129-row universe in `01-keyword-universe.csv`.

---

## 2. Top 10 Questions to Answer

Full list of 43 in `02-question-mine.md`. The 10 most load-bearing for this page specifically:

1. How deep does a water line need to be buried in Oregon? *(the page's central, most citable question)*
2. How deep does a sewer lateral need to be buried?
3. How deep does electrical conduit need to be buried?
4. How deep does a gas line need to be buried?
5. Can water, sewer, electrical, and gas all go in the same trench? *(joint trenching — genuinely zero-competitor-claimed)*
6. Who calls Oregon811 before utility trenching starts?
7. Who calls the utility company for a new tap — me or the contractor? *(coordination-role, task-brief-named)*
8. What's the difference between utility excavation and trenching and backfill? *(this page's own scope-boundary question — see §0)*
9. Does trenching under a driveway or patio cost more than trenching through open ground? *(task-brief-named cost-anxiety question)*
10. Do I need a permit to run a new utility line to my house? *(task-brief-named)*

---

## 3. Top 10 Entities to Integrate

Full inventory in `03-entity-map.md` / `entity-inventory.csv`. Priority placement:

| Entity | Where to place |
|---|---|
| D&D Land Works, David Deggelman, Oregon CCB #261742 (reused canonical forms) | H1/first paragraph, schema, trust section — same as all eight prior packs |
| Water Service Line, Sewer Lateral, Electrical Conduit, Gas Line (each with its own verified depth figure) | A dedicated per-utility depth table/section — this page's central asset |
| Joint Trench | A named, explained section — the single biggest unclaimed content opportunity alongside the depth table |
| Oregon811 (reused) | Applied specifically to utility-adjacent trenching, cross-linked to `../excavation/` rather than re-derived |
| OSHA 1926 Subpart P (reused) | Applied to utility-service-trench depths specifically (most stay under the 4-5 ft thresholds; some deep sewer laterals can approach them) |
| Tracer Wire (blue/water, green/sewer, yellow/gas) | A small, concrete differentiator detail in the materials/joint-trench section |
| Communications/Fiber Conduit | Named honestly as a genuine gap — no Oregon state-code depth figure found; do not invent one |
| Trenching & Backfill (sibling, NOT this page) | An explicit "Related Services" cross-link plus the scope-boundary framing from §0, not silently ignored |
| EWEB, Springfield Utility Board, NW Natural (utility-coordination context, new) | Brief, generic mention in the coordination-role section — not a claimed partnership |
| `Service` schema type (nested under D&D's `GeneralContractor` entity) | Primary `@type` for this page — reused decision from all prior packs |

---

## 4. Top 5 Content Gaps to Fill

Full scoring in `08-gap-analysis.md`. Highest-leverage gaps:

1. **Burial-depth-by-utility-type figures** (score 50.0) — zero-cost, zero-competitor-claimed, code-verified via a direct Lane County government source, the strongest single asset in this pack
2. **Joint trenching as a named, explained option** (40.0) — a real, code-permitted, cost-saving practice zero competitors mention
3. **Utility-excavation-vs-trenching-backfill scope clarity** (40.0) — this page's own internal boundary, resolved with evidence in §0
4. **Who calls for the utility tap vs. who calls Oregon811** (40.0) — two different calls to two different parties, currently conflated or ignored everywhere
5. **Hardscape-vs-open-ground cost differential** (40.0) — a real, honest cost driver (trenching under a driveway costs meaningfully more than open ground) that nobody in this market currently states

---

## 5. Biggest Structural Opportunity (confirmed, not assumed)

**Of the nine competitor pages checked specifically for utility-trenching content (six directly re-fetched for this pass, three reused from prior packs' findings, one out-of-market structural reference), not one states a single burial-depth figure for any utility, names joint trenching as a practice, or publishes a utility-trenching cost figure.** This is a more absolute, uncontested gap than any prior page in this nine-page pipeline found — even the excavation pack's own well-known 0/10 findings (Oregon811, OSHA) had competitors showing at least generic utility-work awareness to build from. Here, the actual subject-matter depth is completely open. A direct Lane County government source (`lanecountyor.gov`'s own "Trenching for Utilities" page) exists specifically to answer this page's core question, with exact code citations by utility type — a genuinely rare, high-authority source this pack was able to verify directly. See `07-oregon-authority.md` §1 and `04-competitor-matrix.md` for full detail.

---

## 6. Recommended H1 / H2 Heading Map

**H1:** Utility Excavation in Eugene, Springfield & Lane County, Oregon
*(matches the geo-scoped H1 pattern used on all shipped sibling pages; the current live page's H1 is the shorter "Utility Excavation" — a content-brief decision to revisit, not resolved here)*

**H2s (in order):**

1. What Does Utility Excavation Cover? *(intro/positioning — water, sewer, electrical, gas, communications, per the scope boundary in §0)*
2. How Deep Does a Utility Line Need to Be Buried in Oregon? *(the page's central asset — per-utility depth table)*
3. Can Multiple Utilities Go in the Same Trench? *(joint trenching — genuinely novel, zero-competitor-claimed)*
4. Who Calls Before Digging — and Who Calls the Utility Company? *(disambiguating Oregon811 from the utility-tap-application call)*
5. What Happens If You Hit an Existing Line? *(failure-mode/trust content, task-brief-named)*
6. How Much Does Utility Trenching Cost? *(cost — by utility type, plus the hardscape-vs-open-ground differential)*
7. Do I Need a Permit for a New Utility Line? *(brief permit-awareness note, cross-linked to sibling pages' fuller permit sections)*
8. What's the Difference Between Utility Excavation and Trenching & Backfill? *(this page's own scope-boundary FAQ, directly answering the task's named confusion)*
9. What Equipment Shows Up on the Job? *(reused/extended from the current live page — trencher, mini excavator)*
10. Frequently Asked Questions *(FAQ block — see §8)*
11. Get Your Utility Line In *(contact/CTA — matches the current live page's existing CTA block)*

Every H2 is phrased as a real, natural question or task under 10 words, matching all eight prior packs' format.

---

## 7. Content Format Plan (per H2)

| H2 | Format | Why | Schema unlock |
|---|---|---|---|
| 1. What utility excavation covers | Bulleted list (5 utility types + locating existing lines) | Parallel items, matches the current live page's existing pattern | `ItemList` |
| 2. Burial depth by utility type | Comparison table — columns: Utility / Minimum Depth / Code Citation | This page's single most citable passage — 4 different figures, 4 different code sections | `Speakable` on the intro sentence |
| 3. Joint trenching | Answer-first, 60-90 words, plus the one real separation caveat | A precise, quotable, code-grounded yes/no-with-nuance answer | `Speakable` |
| 4. Who calls before digging | Short comparison note (Oregon811 vs. utility-company tap application — two different calls) | Two-option contrast, disambiguation-focused | none required |
| 5. Hitting an existing line | Answer-first, 60-80 words | Objection-handling, task-brief-named | `Speakable` |
| 6. Cost | Comparison table — columns: Utility Type / Typical Range / What Drives It (including the hardscape differential) | Multi-attribute cost data | none required |
| 7. Permits | Short answer-first + cross-link to sibling pages' fuller permit sections | Avoids duplicating content already owned elsewhere | none required |
| 8. Utility excavation vs. trenching & backfill | Answer-first, 50-70 words | Directly answers the page's own scope-boundary confusion; a genuinely differentiating, honest disambiguation | `Speakable` |
| 9. Equipment | Short answer-first (50-70 words) | Reused/extended pattern from the current live page | none required |
| 10. FAQ | FAQPage-formatted Q&A, 9 questions | Standard | `FAQPage` |
| 11. CTA | Short answer-first + CTA block | Conversion-focused | none required |

At least one comparison table (#2 and #6), one bulleted list (#1), and format diversity across answer-first/table/list are included, per the parent methodology's format-diversity requirement.

---

## 8. FAQ Shortlist (9 questions for FAQPage schema)

Validated against `02-question-mine.md` and the confirmed 0/9 competitor-coverage findings in `04-competitor-matrix.md`:

1. How deep does a water line need to be buried in Oregon?
2. How deep does a sewer lateral need to be buried?
3. How deep does electrical conduit need to be buried?
4. How deep does a gas line need to be buried?
5. Can water, sewer, electrical, and gas all go in the same trench?
6. Who calls Oregon811 before utility trenching starts?
7. Who calls the utility company for a new tap — me or the contractor?
8. What's the difference between utility excavation and trenching and backfill?
9. Does trenching under a driveway or patio cost more than trenching through open ground?

---

## 9. Required Schema

Verification note: this pack reuses the homepage pack's confirmed schema.org research (`GeneralContractor` is real and correct; `ExcavationContractor` does not exist) and every prior pack's `Service` type confirmation rather than re-verifying.

- **`Service`** (primary `@type`) with `name: "Utility Excavation"`, `provider` → D&D Land Works `GeneralContractor` entity, `areaServed` (Lane County + Eugene/Springfield at minimum), `serviceType`
- `FAQPage` — for the 9-question shortlist above
- `BreadcrumbList` — Home → Services → Utility Excavation (already implemented via the current live page's `Breadcrumbs` component)
- `Speakable` — on the depth-table intro, joint-trenching, hit-a-line, and scope-boundary answer-first passages
- Do **not** implement `AggregateRating`/`Review` until real reviews exist — same rule as all eight prior packs

---

## 10. Required Authority Signals

From `07-oregon-authority.md`, each with source + verification date:

1. **Minimum burial depth by utility type** — VERIFIED directly via Lane County Land Management Division's own "Trenching for Utilities" page: water 12 in. below frost depth (24 in. total in Lane County, OPSC 609.1), sewer 12 in. cover (OPSC 718.1), gas 18 in. (ORSC G2415.12, 8 in. for appliance lines under G2415.12.1), electrical 6-24 in. depending on method (NEC Table 300.5). The single strongest, most differentiating citation available anywhere in this nine-page pipeline.
2. **Joint trenching** — VERIFIED via the same Lane County source: multiple utilities may share one trench without prohibition; water must stay 12 in. above sewer where they cross (OPSC 720.1); tracer wire color/gauge standard (blue/water, green/sewer, yellow/gas) also verified.
3. **Oregon811** (reused verbatim from the excavation pack) — 2-business-day advance notice, free, applies to every utility trench.
4. **OSHA 29 CFR 1926 Subpart P** (reused verbatim) — applied here to note utility-service depths generally stay under its 4-5 ft thresholds, with the honest exception of deep sewer laterals.
5. **Who calls for the utility tap** — general industry pattern only (property owner or contractor, varies by utility), NOT Lane-County-verified; the OESC's own Oregon-specific amendment table also carries a confirmation flag (403 error on direct fetch this pass) — both explicitly flagged rather than stated as settled fact.

Density target: same as all eight prior packs, roughly 1 statistic per 300-500 words, at least one external authority link per major section (especially the depth-table and joint-trenching sections).

---

## 11. AI-Citation-Ready Summary Block (~145 words)

Drafted in full in `06-ai-citation-audit.md` §4; expanded here for brief convenience:

> Utility excavation is trenching to bring a new water service line, sewer lateral, electrical conduit, or gas line to a structure — a different job than general excavation (creating space for a foundation) or drainage excavation (managing water). Required burial depth in Lane County, Oregon depends on the utility: water service lines need at least 12 inches below the local 12-inch frost depth (24 inches total, per Oregon Plumbing Specialty Code 609.1), sewer laterals need 12 inches of cover (OPSC 718.1), gas lines need 18 inches (Oregon Residential Specialty Code G2415.12), and electrical conduit needs 6 to 24 inches depending on the wiring method (NEC Table 300.5). Multiple utilities can share one trench in Lane County, as long as the water line stays at least 12 inches above the sewer line where they cross. D&D Land Works calls Oregon 811 before every dig and provides utility excavation for residential and commercial properties throughout Eugene, Springfield, and Lane County under Oregon CCB license #261742. Free estimates are available.

Place in the first 30% of the page's body content, immediately after the hero.

---

## 12. Trust-Killer Rebuttals

From `05-intent-triangulation.md` Table 3:

| Trust killer | Rebuttal to build into the page |
|---|---|
| No competitor states a single depth figure, so buyers can't verify who actually knows the code | Publish the full per-utility depth table with exact code citations, sourced and dated |
| Fear of hidden costs when hitting hardscape mid-trench | Name the real cost differential between dirt, asphalt, and concrete trenching honestly upfront |
| Utility-strike liability fear, sharpened for utility-adjacent trenching | Restate D&D's Oregon811 practice, applied directly to the utility-trenching context |
| Confusion about who's responsible for what in a new hookup | State plainly and honestly what D&D scopes (the trench itself) vs. what the utility company handles (the tap/connection), properly hedged |
| No visible acknowledgment that joint trenching is even an option | Name it explicitly as a real, code-permitted, cost-saving option, with the honest utility-company-spec caveat intact |
| Confusion between this page and Trenching & Backfill | Answer the scope-boundary question directly as its own FAQ entry, per §0 |

---

## 13. E-E-A-T Signal Plan

- **Experience:** Real project photos of an open utility trench (pipe/conduit visible before backfill) as they become available — do not fabricate a portfolio, consistent with all eight prior packs.
- **Expertise:** The per-utility depth table and joint-trenching content demonstrate genuine working knowledge zero of the nine competitors checked currently show, individually or together.
- **Authority:** Direct link to Lane County's own "Trenching for Utilities" government page — free authority-borrowing, unclaimed by any competitor in this niche, and a rare local (not just state-level) government source.
- **Trust:** Honest hardscape-cost differential; explicit utility-tap-vs-Oregon811 coordination disambiguation; real cost ranges, clearly labeled as general; no fabricated reviews, utility-company partnerships, or Lane-County-exact pricing; the scope-boundary discipline in §0 functions as its own trust signal, same pattern as the grading-leveling pack's own finding.

---

## 14. Freshness Plan

- Re-verify the Oregon Electrical Specialty Code's own amendment table directly (blocked by a 403 on this pass) before publishing an Oregon-specific, as opposed to NEC-baseline, electrical depth figure as exact.
- Re-verify the Lane County frost-depth figure (12 in.) if this pack is used for a different Oregon county.
- Re-run this entire research pack if the content brief/build happens more than 90 days after 2026-09-09, consistent with all eight prior packs' freshness rule.

---

## Flags (per parent methodology, adapted)

- **Flag A — Listicle-dominated SERP: NOT confirmed for this page**, similar to the grading-leveling pack's own finding — see `06-ai-citation-audit.md` §1.
- **Flag B — Anti-doorway gate:** Not directly applicable to this service page.
- **Flag C — Three-way scope-boundary tangle: this pack's central and most structurally significant finding, distinct from every prior page's boundary resolution.** Unlike any two-way sibling overlap resolved earlier in this pipeline, this page sits at the intersection of an already-shipped promise (excavation-content.md), an already-shipped sibling's owned mechanics (drainage-excavation-content.md), and a live, never-independently-researched sibling page (`trenching-backfill.astro`) whose own shipped copy already implies a cross-cutting-technique framing at odds with the original topical map's "graduate later" plan. Resolved with real search-behavior evidence in §0 — recommend keeping both pages separate along a WHY-vs-HOW axis, not merging.

---

## Quality Checklist

- [x] 100-150+ keywords captured (129 rows in `01-keyword-universe.csv`)
- [x] 40+ questions mined (43 in `02-question-mine.md`); 10 Oregon-specific; 6 objection-tagged
- [x] 9 competitor pages checked specifically for utility-trenching content (6 directly re-fetched, 3 reused, 1 out-of-market reference) — `04-competitor-matrix.md`
- [x] Burial-depth-by-utility-type figures verified against real Oregon code sections via a direct Lane County government source — `07-oregon-authority.md`
- [x] Joint trenching verified as a real, code-permitted, named practice — `07-oregon-authority.md` §2
- [x] Explicit three-way Scope Boundary section (excavation-content.md's promise, drainage-excavation-content.md's owned mechanics, and the Trenching & Backfill tangle) drawn and evidenced with real search-behavior research — §0 above
- [x] 20-gap scoring framework completed, five gaps explicitly tied to the task's named dimensions (depth-by-utility-type, joint trenching, scope boundary, coordination roles, hardscape cost) — `08-gap-analysis.md`
- [x] Flags A/B/C evaluated, Flag C identified as this pack's central, most structurally significant finding
- [x] 5 Oregon/Lane-County authority signals with source + verification date, including the strongest single citation found anywhere in this nine-page pipeline (the per-utility depth table) — `07-oregon-authority.md`
- [ ] AI citation audit across 6 live AI chat systems — **not directly queryable** this session, same limitation as all eight prior packs; reasoned from SERP composition instead
- [x] Heading map composed, every H2 a natural question/task under 10 words
- [x] Content Format Plan completed for every H2, including two comparison tables and one bulleted list
- [x] FAQ shortlist composed (9 questions)
- [x] AI citation block drafted (~145 words, first-30%-placement)
- [x] Entity map cross-references all eight prior packs' canonical entities rather than re-deriving them — `03-entity-map.md`, `entity-inventory.csv`

## Honest Limitations of This Pack (disclose to the content-brief author and to David)

1. No direct AI chat-interface querying was possible, same as all eight prior packs — this audit is reasoned from SERP composition.
2. The Oregon Electrical Specialty Code's own amendment table (as distinct from the NEC 300.5 baseline it adopts) could not be directly fetched in this pass (403 error) — flagged in `07-oregon-authority.md` §1 for direct confirmation before publishing an Oregon-specific electrical depth figure as exact.
3. No Oregon state-code minimum burial depth was found for communications/fiber conduit specifically — disclosed as a genuine, honestly-stated gap rather than an invented figure.
4. Which specific party initiates a new utility-tap application with EWEB, Springfield Utility Board, or a rural water district is an unconfirmed general-industry pattern, not Lane-County-verified — flagged in `07-oregon-authority.md` §3.
5. No Lane-County-specific per-foot utility-trenching cost figure was found; all cost ranges available are national, clearly labeled as general.
6. Whether D&D has previously performed joint trenching, gas-line trenching, or communications/fiber trenching, or would be scoping any of these as new-but-capable offerings, is unconfirmed — flag for David before the content brief states any of them as a demonstrated capability.
7. **The utility-excavation-vs-trenching-backfill scope-boundary recommendation in §0 is this pack's own evidence-based recommendation, not a resolved fact.** It requires a future brief/content decision (or direct confirmation from David) before `/trenching-backfill/`'s own content is touched. This task explicitly did not research or write content for that page — only this scope-boundary finding, logged here and in `08-gap-analysis.md` so a future pass can act on it.
