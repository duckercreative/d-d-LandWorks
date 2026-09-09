# Research Pack — D&D Land Works Foundation Excavation (`/foundation-excavation/`)

**Prepared:** 2026-09-09 · **Prepared by:** Ducker Creative (deep-research methodology, adapted from HVAC → excavation/site-prep per CLAUDE.md; seventh page through this pipeline)
**Page targeted:** Foundation Excavation (`/foundation-excavation/`) — per the topical map (§6.5), a P1 core service page. The already-shipped Excavation & Grading page (`07-landing-pages/content/excavation-content.md`) names "foundation dig" as one of its five project types with the exact sentence: *"Digging and prepping the excavation for a home, shop, barn, or ADU foundation, following site preparation on the same lot. See foundation excavation for more depth on this project type."* That sentence is a promise this pack exists to make good on — see the Scope Boundary section below for exactly what "more depth" means.
**Built on, not duplicating:** the six prior packs (`../home/`, `../excavation/`, `../site-preparation/`, `../grading-leveling/`, `../land-clearing/`, `../septic/`). All canonical business/location/certification entities (D&D Land Works, David Deggelman, Oregon CCB #261742, Lane County, Eugene, Springfield, Willamette Valley, the `GeneralContractor`/`Service` schema decisions) are reused verbatim from `../home/entity-inventory.csv`, not re-derived. Oregon811 and the general OSHA Subpart P trench-safety figures are reused verbatim from `../excavation/07-oregon-authority.md`, not re-verified. General cut/fill, backfill/compaction mechanics, equipment categories, and the excavation-vs-grading disambiguation stay owned by `../excavation/` and are cross-linked, not repeated.
**Status of underlying business:** Same zero-baseline greenfield status as all six prior packs — no live indexed site, no GBP, no review pipeline, no D&D-specific pricing or job history. Every recommendation here is a build-from-zero content target, grounded in verified Oregon code and OSHA citations rather than fabricated business specifics.

This file is the master synthesis. The future content brief should read only this file; the other 9 files in this folder are the supporting evidence and can be drilled into on demand.

---

## 1. Top 5 Keyword Targets

| # | Keyword | Intent | Why |
|---|---|---|---|
| 1 | **foundation excavation eugene or** / **foundation excavation eugene oregon** | Commercial, decision-stage | Primary page target per topical map §6.5; matches the shipped excavation page's own down-link anchor text |
| 2 | **foundation excavation lane county or** | Commercial, decision-stage | County-wide framing, matching this page's core-service (not city-scoped) role |
| 3 | **frost line depth oregon foundation** | Informational, awareness-stage | Task-brief seed term; the page's single most defensible authority citation — see Section 5 |
| 4 | **crawlspace vs slab foundation excavation cost** | Commercial, consideration-stage | Task-brief seed term; directly serves the "does foundation type change cost" mandate |
| 5 | **ADU foundation excavation** | Commercial, decision-stage | Task-brief seed term; a genuinely uncontested, Oregon-timely query (zero competitor coverage found anywhere in this research) |

Full 133-row universe in `01-keyword-universe.csv`.

---

## 2. Top 10 Questions to Answer

Full list of 47 in `02-question-mine.md`. The 10 most load-bearing for this page specifically:

1. How deep does a foundation footing need to be in Oregon?
2. What is the frost line depth in Oregon, and why doesn't every contractor just state it?
3. Does foundation type (slab, crawlspace, or basement) change the excavation cost?
4. What is "over-dig," and how much extra space does a crew need around a foundation?
5. Does the building department inspect a foundation before the concrete gets poured?
6. What happens if the excavator hits rock or water while digging a foundation?
7. Do I need a soils report or an engineer before excavating for a foundation?
8. Does an ADU need its own foundation excavation, and does it change if it's close to my existing house?
9. Does Oregon require a drain around a foundation, and how is that different from a septic drainfield?
10. Should foundation excavation happen before or after I hire a builder, and who schedules the footing inspection?

---

## 3. Top 10 Entities to Integrate

Full inventory in `03-entity-map.md` / `entity-inventory.csv`. Priority placement:

| Entity | Where to place |
|---|---|
| D&D Land Works, David Deggelman, Oregon CCB #261742 (reused canonical forms) | H1/first paragraph, schema, trust section — same as every prior page |
| ORSC R403.1.4 / R403.1.4.1 / Table R301.2 (frost depth) | Dedicated H2 answering "how deep does a footing need to be" — this page's central authority citation |
| Slab-on-Grade / Crawlspace / Full Basement Foundation (foundation types) | Comparison table — excavation depth and cost by type |
| Over-Dig / Working Space (OSHA house-foundation/basement carve-out) | Dedicated section — the 2-foot minimum working-width figure |
| Foundation / Footing Inspection (excavate → inspect → pour) | Dedicated section naming Eugene's eBuild process and Lane County's Building Safety program |
| ORSC R405 (Foundation Drain) / R408 (Crawlspace Vapor Retarder) | A "what Oregon code requires" section, explicitly distinguished from the septic drainfield and yard-drainage entities |
| Accessory Dwelling Unit (ADU) Foundation | A dedicated callout, including the OSHA underpinning rule for digging near an existing structure |
| Excavation & Grading (sibling, upstream) | Cross-link, not re-derivation — see Scope Boundary section |
| Geotechnical / Soils Report | FAQ entry, reused/extended from the site-preparation pack |
| Oregon811 / OSHA 1926 Subpart P (reused) | Reused citation, brief mention, full depth stays on `/excavation/` |

---

## 4. Scope Boundary vs. Excavation & Grading (required section)

The shipped `/excavation/` page already covers "foundation dig" as one of five project types, in one paragraph, with a single sentence promising this page will go deeper. This section documents exactly what "deeper" means, so the two pages stay genuinely differentiated rather than duplicating each other — the same discipline the excavation pack applied against the future Grading & Leveling page, and the site-preparation pack applied against the excavation page itself.

### Stays on `/excavation/` — do not re-derive here

- **General cut-and-fill and backfill/compaction mechanics as concepts.** The excavation page already explains what cut/fill and backfill/compaction mean in general terms; this page assumes that understanding and applies it specifically to a footing/foundation wall context (see below) rather than re-explaining the base concept.
- **The excavator/dozer/compaction equipment category explanation.** Already covered generally on `/excavation/`; this page only adds the foundation-specific equipment note already on the current live page (laser level/GPS grade control for elevation accuracy).
- **The general rock-removal cost jump** ($2.50-$15/cu yd standard soil vs. $50-$200/cu yd rock). This page references it but reframes it around foundation-specific stakes (see below) rather than re-deriving the underlying cost mechanics.
- **The excavation-vs-grading disambiguation.** Fully owned by `/excavation/`'s H2 "What's the Difference Between Excavation and Grading?" — this page cross-links to it rather than repeating it.
- **The general residential-vs-commercial excavation comparison table** (equipment scale, crew size, timeline, regulatory complexity). This page adds only a brief foundation-specific note (commercial foundations more often involve engineered footings and multi-phase inspections) rather than a full rebuild of that table.
- **Oregon811/call-before-you-dig and the general OSHA Subpart P trench-depth figures** (5 ft protective-system threshold, 4 ft/25 ft access threshold). Fully sourced and cited on `/excavation/`; reused here only as a brief mention, not re-verified.
- **The general "can I rent an excavator and do this myself" DIY-vs-hire content.** Already answered on `/excavation/`; this page's version of that anxiety is narrower and different (see the over-dig/underpinning content below), not a repeat of the general rental-viability discussion.

### Belongs here — genuinely new to this page

- **The actual Oregon/Lane County frost-line depth figure and its code citation.** Verified directly against the Oregon Residential Specialty Code: R403.1.4 sets a statewide 12-inch minimum footing depth below undisturbed grade; R403.1.4.1 plus Table R301.2 tie frost protection to elevation (12 in below 2,500 ft, 18 in from 2,500-4,000 ft, 24 in at/above 4,000 ft) — and Lane County's populated valley floor sits in the 12-inch band, making the two rules land on the same number locally. Full sourcing in `07-oregon-authority.md` §1.
- **The slab vs. crawlspace vs. basement foundation-type excavation-scope and cost distinction.** A slab needs only a shallow topsoil strip (2-3 ft); a crawlspace needs a perimeter trench to footing depth plus stem-wall height (18-48 in finished clearance); a full basement needs an 8-10 ft excavation with shoring/benching and hundreds of cubic yards hauled off. None of this exists on the general excavation page, which treats "foundation dig" as a single undifferentiated project type.
- **The specific OSHA house-foundation/basement over-dig/working-space figure.** A different, more specific citation than the general Subpart P figures already used on the excavation page: OSHA's 1995 interpretation letter sets a 2-foot minimum working width at the bottom of a house foundation/basement excavation (under 7.5 ft deep or properly benched), distinct from the general trench-depth protective-system rule.
- **The excavate → inspect → pour sequencing**, with Eugene's actual eBuild scheduling process and Lane County's Building Safety program named directly. This is a foundation-specific building-department interaction that a driveway cut, pond dig, or utility trench doesn't have in the same way.
- **The ORSC R405 foundation drain and R408 crawlspace vapor-retarder code requirements.** Entirely new content, explicitly distinguished from the septic drainfield (`../septic/`) and yard-scale swale/French-drain entities (`../grading-leveling/`) that happen to share the word "drain."
- **ADU-specific foundation excavation content**, including the OSHA underpinning rule (1926.652(b)) for excavating near or below an existing structure's footing — a real safety/liability wrinkle specific to building a second structure close to an existing one.
- **The higher-stakes framing of rock/water discovery specifically because a foundation dig sits on a construction critical path**, unlike a standalone driveway or pond dig where a delay mostly just delays that one project.
- **Builder/GC schedule-coordination content** — foundation excavation is almost always a dependent step inside someone else's larger project and permit, which changes what "trust" and "reliability" mean for this page's buyer relative to every sibling page's more self-contained decision.

---

## 5. Top 5 Content Gaps to Fill

Full scoring in `08-gap-analysis.md`. Highest-leverage gaps:

1. **Frost-line depth stated as a real, cited number** (score 50.0) — zero-cost, and more specific than the single best existing piece of content found anywhere on this exact topic (see Section 6 below)
2. **Footing-inspection sequencing explained as a trust signal** (score 50.0, tied) — zero-cost, directly named by the task, zero competitor coverage found anywhere
3. **Over-dig/working-space figure** (40.0) and **higher-stakes rock/water cost-anxiety framing** (40.0, tied) — both zero-cost, extend this page's authority-signal density
4. **Scope-boundary statement vs. Excavation & Grading** (30.0) — the structural fix that makes the shipped page's "see foundation excavation for more depth" sentence actually true, per Section 4 above
5. **Foundation-type excavation-scope/cost distinction** (25.0) — the task's named central content mandate

---

## 6. Biggest Structural Opportunity (confirmed, not assumed)

**Even the single best piece of Oregon-specific content found anywhere in this research — a dedicated Cojo Asphalt article titled "Frost Depth for Footings: How Deep to Dig in Oregon" — explicitly declines to state Oregon's actual frost-depth figure, deferring entirely to "your local building department."** This independently confirms and sharpens the pattern found across all six prior packs (zero competitor structural depth), but goes one step further: it isn't only that no *local* Lane County competitor covers this topic (true, and consistent with every prior finding) — it's that the best available *national* content on this exact query, from a source clearly trying to cover it well, still pulls the punch on the one number that matters most. This page can state the real, verified figure (12 inches for Lane County, per ORSC R403.1.4/R403.1.4.1/Table R301.2) with a genuine code citation, making it more specific and more citable than the current best-in-class content on the exact query. See `04-competitor-matrix.md` and `06-ai-citation-audit.md` for full detail.

---

## 7. Recommended H1 / H2 Heading Map

**H1:** Foundation Excavation in Eugene, Springfield & Lane County, Oregon

**H2s (in order):**

1. What Does Foundation Excavation Cover? *(intro/scope — cross-links up to `/excavation/` for general mechanics, states what's specific to a foundation dig)*
2. How Is Foundation Excavation Different From General Excavation? *(the page's own scope-boundary answer — see Section 4 above, phrased for the reader, not just internally)*
3. How Deep Does a Foundation Footing Need to Be in Oregon? *(frost depth — the page's central authority citation)*
4. Does Foundation Type Change the Excavation Scope or Cost? *(slab vs. crawlspace vs. basement comparison table)*
5. What Is "Over-Dig," and How Much Working Space Does a Crew Need? *(the OSHA 2-foot figure)*
6. Does the Building Department Inspect a Foundation Before It's Poured? *(excavate → inspect → pour sequencing — the page's clearest new trust signal)*
7. What Does Oregon Require for Foundation Drainage? *(ORSC R405/R408 — foundation drain, waterproofing, crawlspace vapor retarder)*
8. What About an ADU or a Foundation Near an Existing House? *(ADU-specific + underpinning content)*
9. What Happens If the Crew Hits Rock or Water Under a Foundation? *(higher-stakes cost-anxiety framing)*
10. Should Foundation Excavation Happen Before or After I Hire a Builder? *(schedule-coordination content)*
11. Frequently Asked Questions *(FAQ block — see Section 9)*
12. Get Your Foundation Excavation Scoped *(contact/CTA)*

Every H2 is phrased as a real, natural question under 10 words, matching the format already established across all six prior packs and this page's own question-mine findings.

---

## 8. Content Format Plan (per H2)

| H2 | Format | Why | Schema unlock |
|---|---|---|---|
| 1. What foundation excavation covers | Answer-first, 50-70 words | Sets scope immediately, citable standalone | `Speakable` |
| 2. Foundation excavation vs. general excavation | Answer-first (60-80 words) + cross-link | Direct scope-boundary statement, the reader-facing version of Section 4 | `Speakable` |
| 3. Frost depth | Answer-first (50-70 words) + code citation | The single most citable passage on the page | `Speakable` |
| 4. Foundation type comparison | Comparison table — columns: Foundation Type / Typical Excavation Depth / What Drives Cost | Multi-attribute data, directly serves the task's central mandate | none required |
| 5. Over-dig/working space | Answer-first, 50-70 words | Single, specific, quotable figure | `Speakable` |
| 6. Inspection sequencing | Numbered list (excavate → clear loose material → forms/rebar → inspect → pour) | Sequence-dependent steps | `HowTo` |
| 7. Foundation drainage requirements | Bulleted list (foundation drain, waterproofing, vapor retarder — 3 parallel code requirements) | Parallel items | `ItemList` |
| 8. ADU / near-existing-structure | Answer-first + brief safety note | Direct answer plus a distinct safety fact | `Speakable` |
| 9. Rock/water discovery | Answer-first, 60-80 words, cross-linking excavation page's cost mechanics | Objection-handling passage | `Speakable` |
| 10. Builder/GC scheduling | Answer-first, 60-80 words | Directly resolves the task's named schedule-coordination anxiety | `Speakable` |
| 11. FAQ | FAQPage-formatted Q&A, 9 questions | Standard | `FAQPage` |
| 12. CTA | Short answer-first + CTA block | Conversion-focused | none required |

At least one comparison table (#4), one numbered list (#6), and one bulleted list (#7) are specified, per the parent methodology's format-diversity requirement.

---

## 9. FAQ Shortlist (9 questions for FAQPage schema)

Validated against `02-question-mine.md` and the confirmed 0/10-competitor coverage finding in `04-competitor-matrix.md`:

1. How deep does a foundation footing need to be in Oregon?
2. Does foundation type (slab, crawlspace, or basement) change the excavation cost?
3. What is "over-dig," and how much extra space does a crew need around a foundation?
4. Does the building department inspect a foundation before the concrete gets poured?
5. What happens if the excavator hits rock or water while digging a foundation?
6. Do I need a soils report or an engineer before excavating for a foundation?
7. Does an ADU need its own foundation excavation?
8. Does Oregon require a drain around a foundation?
9. Should foundation excavation happen before or after I hire a builder?

---

## 10. Required Schema

Reuses the confirmed schema.org research from the homepage pack (`GeneralContractor` is real and correct; `ExcavationContractor` does not exist) rather than re-verifying.

- **`Service`** (primary `@type`) with `name: "Foundation Excavation"`, `provider` → D&D Land Works `GeneralContractor` entity (`"@id": "https://www.ddlandworks.com/#business"`, matching the pattern already shipped in `excavation-content.md`), `areaServed` (Lane County + Eugene/Springfield at minimum), `serviceType`
- `FAQPage` — for the 9-question shortlist above
- `BreadcrumbList` — Home → Services → Foundation Excavation
- `Speakable` — on the frost-depth, over-dig, scope-boundary, ADU, rock/water, and scheduling answer-first passages (Section 8)
- `HowTo` — optional, for the excavate → inspect → pour sequencing section, if the brief author wants that sequence independently citable
- Do **not** implement `AggregateRating`/`Review` until real reviews exist — same rule as every prior pack

---

## 11. Required Authority Signals

From `07-oregon-authority.md`, each with source + verification date:

1. **ORSC R403.1.4 / R403.1.4.1 / Table R301.2** (footing minimum depth + frost protection by elevation) — verified directly against up.codes' ORSC mirror; the 12/18/24-inch elevation-band figures corroborated by two independent secondary sources (raw ICC table page returned a 403 on direct fetch — flag for confirmation against a purchased/library ORSC copy before publishing as litigation-proof)
2. **ORSC R405 / R406** (foundation drain + waterproofing) and **R408.1 / R408.3** (crawlspace vapor retarder) — verified directly
3. **OSHA's 1995 interpretation letter suspending 1926.652 for house foundation/basement excavations** (7.5 ft depth / 2 ft benching / 2 ft minimum working width) and **1926.652(b)** (underpinning requirement near an existing footing) — verified directly
4. **City of Eugene's Inspections/eBuild process and Lane County's Building Safety program** (footing inspection sequencing) — verified directly, corroborated by a third-party inspection-sequence source
5. **Geotechnical/soils report cost data** ($2,000-$5,000, prevents 20-50% of overruns) — reused verbatim from the site-preparation pack, applied here to bearing-soil verification under ORSC R403.1

Density target: same as every prior pack, roughly 1 statistic per 300-500 words, at least one external authority link per major section.

---

## 12. AI-Citation-Ready Summary Block (130-160 words)

Drafted in full in `06-ai-citation-audit.md` §4; reproduced here for brief convenience:

> Foundation excavation is the precise digging that creates space for a footing and foundation wall or slab — a narrower, higher-stakes step within general excavation, since every trade that follows (forming, pouring, framing) depends on getting it right. In Lane County, Oregon, footings must be placed at least 12 inches below finished grade on undisturbed soil, per the Oregon Residential Specialty Code, which also satisfies the state's frost-protection depth for Lane County's elevation. Excavation scope differs by foundation type: a slab needs only a shallow topsoil strip, a crawlspace needs a perimeter trench to footing depth, and a full basement requires an 8-10 foot excavation with sloped or shored walls. D&D Land Works provides foundation excavation for residential and commercial projects throughout Eugene, Springfield, and Lane County, Oregon, coordinating the open excavation to be ready for the building department's footing inspection — which happens before concrete is poured, not after — under Oregon CCB license #261742. Free estimates are available.

Place in the first 30% of the page's body content.

---

## 13. Trust-Killer Rebuttals

From `05-intent-triangulation.md` Table 3:

| Trust killer | Rebuttal to build into the page |
|---|---|
| A contractor who can't or won't state an actual frost-depth number | State the real, cited 12-inch Lane County figure plainly |
| Vague "we'll dig it out" scope language with no foundation-type distinction | Explicitly separate slab, crawlspace, and basement excavation scope and cost |
| No mention of the footing inspection, implying excavate-then-pour without holding for inspection | State the excavate → inspect → pour sequence explicitly |
| "Trust us, we'll leave enough room" with no real over-dig figure | Cite the actual OSHA-derived 2-foot minimum working-width figure |
| Silence on what happens if the crew hits rock or water under a foundation specifically | Address it directly, framed around the higher stakes of a structural dig |
| No acknowledgment that a foundation dig is on someone else's (the builder's) timeline | State plainly that D&D understands and coordinates around the permit-holder's schedule and inspection process |
| Uncertainty about who's responsible for the foundation drain/vapor barrier | Name the code requirement plainly; be explicit about D&D's scope once confirmed with David |

---

## 14. E-E-A-T Signal Plan

- **Experience:** Real foundation-dig job-site photos as they become available (do not fabricate a portfolio); the current live page's existing process description (cut to grade, compact, verify, hand off) preserved and extended.
- **Expertise:** The frost-depth, over-dig, and inspection-sequencing content demonstrates genuine working knowledge of Oregon's building-department process that no competitor currently shows.
- **Authority:** Direct citations to the Oregon Residential Specialty Code, OSHA, and the City of Eugene/Lane County's own inspection pages — free authority-borrowing, consistent with every prior pack.
- **Trust:** Honest scope-boundary statement vs. the general excavation page; honest framing of what requires David's confirmation (foundation drain/vapor-retarder installation scope, basement-excavation experience) rather than overclaiming.

---

## 15. Freshness Plan

- Re-verify ORSC Sections R403, R405, R406, and R408 if this content brief/build happens more than 90 days after 2026-09-09, consistent with the freshness rule established across all six prior packs.
- Re-verify the OSHA house-foundation/basement excavation interpretation letter's continued validity at the same cadence.
- Re-confirm Eugene's eBuild scheduling process and phone number directly before publishing, since municipal contact details change more often than code sections.
- Directly confirm the Table R301.2 elevation-band figures against a purchased/library ORSC copy or a direct call to a Lane County/Eugene/Springfield building official before treating them as litigation-proof, since the raw ICC table could not be directly fetched this session (403 error) and the figures rest on secondary-source corroboration.

---

## Flags (per parent methodology, adapted)

- **Flag A — Listicle-dominated SERP: Partially true, differently than prior packs.** The bare national cost query is somewhat cost-guide-dominated, but the Lane-County-specific commercial query is not — real local contractors rank for it directly. No separate listicle page is recommended for this page; the priority is winning the informational frost-depth/foundation-type/inspection queries where a genuine content gap exists. See `06-ai-citation-audit.md` §1.
- **Flag B — Anti-doorway gate:** Not applicable — this is a service page, not a location page.
- **Flag C — Service × location matrix opportunity:** Not the primary opportunity for this page; carried forward generally from the topical map's existing roadmap, not re-scored here.

---

## Quality Checklist

- [x] 100-150+ keywords captured (133 rows in `01-keyword-universe.csv`)
- [x] 40+ questions mined (47 in `02-question-mine.md`); 15 Oregon-specific; 9 objection-type; 10 Reddit/Quora-sourced (proxy, same methodology limitation as all six prior packs — direct thread fetching unreliable)
- [x] 10 Lane County competitors re-checked for foundation-specific content (not re-discovered from scratch) + 3 supplemental sources (Cojo Asphalt, TerraFirma, Portland Oregon Excavation — the last not cited for specific claims since its page 404'd on direct fetch) — `04-competitor-matrix.md`
- [x] Validated AI citation channel audit reused from prior packs where unchanged, with new foundation-specific SERP-composition findings — `06-ai-citation-audit.md`
- [x] Gap framework scored (12 gaps) — `08-gap-analysis.md`
- [x] Flags A/B/C evaluated
- [x] 5+ Oregon/Lane-County authority signals with source + verification date, all new/foundation-specific (frost depth, foundation drain, vapor retarder, OSHA over-dig, footing inspection) — `07-oregon-authority.md`
- [ ] AI citation audit across 6 live AI chat systems — **not directly queryable** this session, same limitation as all six prior packs; reasoned from SERP composition instead
- [x] Heading map composed, every H2 a natural question under 10 words
- [x] Content Format Plan completed for every H2, including at least one table, one numbered list, one bulleted list
- [x] FAQ shortlist composed (9 questions)
- [x] AI citation block drafted (~150 words, first-30%-placement)
- [x] Entity map cross-references home/excavation/site-prep/septic/grading-leveling packs' canonical entities rather than re-deriving them — `03-entity-map.md`, `entity-inventory.csv`
- [x] Scope Boundary vs. Excavation & Grading documented explicitly (Section 4 above) — the task's central structural requirement

## Honest Limitations of This Pack (disclose to the content-brief author and to David)

1. No direct AI chat-interface querying was possible, same as all six prior packs — this audit is reasoned from SERP composition and direct-fetch competitor research.
2. The ORSC Table R301.2 elevation-band frost-depth figures (12/18/24 inches) are corroborated by two independent secondary sources that agree with each other, not by a direct read of the primary ICC-published table (codes.iccsafe.org returned a 403 to direct fetch this session, and up.codes' mirror did not reproduce the table's raw values). Flag for direct confirmation against a purchased/library ORSC copy or a call to a Lane County/Eugene/Springfield building official before publishing as a litigation-proof number.
3. The monolithic-slab-vs-stem-wall pour-method distinction and the Willamette Valley dewatering claim both rest on a single source (Cojo Asphalt) rather than being independently corroborated — flagged in `03-entity-map.md` and `07-oregon-authority.md` accordingly.
4. Whether D&D's own excavation/backfill work includes installing the ORSC R405 foundation drain, R406 waterproofing, or R408 crawlspace vapor retarder, or whether those are a separate contractor's scope, is unconfirmed — flagged in `08-gap-analysis.md` for David's input, not assumed.
5. Whether D&D has excavated for a full basement foundation before, or would scope it as a new-but-capable offering, is unconfirmed — same flag.
6. No Lane-County-specific per-foundation-type dollar figure exists in any source found — all cost ranges in this pack are national/general and should be presented as such, not local pricing, consistent with every prior pack's disclosure.
