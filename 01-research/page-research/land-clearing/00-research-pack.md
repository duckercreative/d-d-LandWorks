# Research Pack — D&D Land Works Land Clearing (`/land-clearing/`)

**Prepared:** 2026-09-08 · **Prepared by:** Ducker Creative (deep-research methodology, adapted from HVAC → excavation/site-prep per CLAUDE.md; fifth page through this pipeline after the homepage, Site Preparation, Excavation & Grading, and Grading & Leveling)
**Page targeted:** Land Clearing (`/land-clearing/`) — per the topical map (`../../topical-map-2026-09-03.md` §6.4, §5 P0 row), a core P0 service page rolling up to the homepage.
**Built on, not duplicating:** the homepage, site-preparation, excavation, and grading-leveling packs. All canonical business/location/certification entities (D&D Land Works, David Deggelman, Oregon CCB #261742, Eugene, Springfield, Willamette Valley, the `GeneralContractor`/`Service` schema decisions) are reused verbatim from those packs' entity inventories, not re-derived.
**Status of underlying business:** Same zero-baseline greenfield status as all four prior packs, with one important difference: **the site is no longer purely greenfield at the page level** — `/land-clearing/` and `/brush-clearing/` are already live, built Astro pages (94 and 82 lines respectively), unlike the still-hypothetical pages the first four packs researched. This pack treats both live pages as real, close-reading subjects, not as `[RECOMMENDED]` targets.

This file is the master synthesis. The future content brief should read only this file; the other 8 files in this folder are the supporting evidence and can be drilled into on demand.

---

## 0. SCOPE BOUNDARY FINDING — Land Clearing vs. Brush Clearing (read this first)

**The question:** the topical map (`../../topical-map-2026-09-03.md` §6.4, §16) planned a single page — "Land Clearing (incl. brush clearing)" at `/land-clearing/` — with brush clearing folded in as a section that would "graduate to standalone later when it earns demand." The live Astro codebase has already built **two separate, standalone pages**: `/services/land-clearing.astro` (94 lines) and `/services/brush-clearing.astro` (82 lines), each with its own hero, service list, equipment section, and cross-links to the other.

**Recommendation: KEEP SEPARATE.** The live site's split is correct and should be ratified going forward, superseding the topical map's original conservative "section at launch" plan. This is not a close call — four independent lines of evidence converge on the same conclusion:

1. **A direct, already-deep-dived competitor already publishes the identical split.** Danco Excavation — one of the 8 core competitors used across every pack in this pipeline — maintains fully separate `/land-clearing/` and `/brush-clearing/` pages, each with its own FAQ. Danco's own FAQ states verbatim: *"Brush clearing focuses on vegetation, overgrowth, and smaller plant material, while land clearing is a larger process that may include tree removal, stump removal, and site preparation for construction or development."* This is the single strongest piece of evidence in this pack — a real competitor in this exact market has already validated this exact scope line as genuine and search-worthy, not an invented content-marketing distinction.

2. **The distinction is industry-standard, not D&D-specific.** Independent industry sources (ProFence LLC, OWNR OPS) describe the same split D&D's live pages already use: brush clearing targets undergrowth — shrubs, vines, saplings, small trees typically under 4-8 inches in diameter — without removing every tree, aimed at reclaiming pasture, clearing fence lines, or defensible space; land clearing is the more comprehensive service removing all vegetation to bare soil, including large trees, stumps, and root systems, typically for construction. The two services carry **different cost tiers** in every cost-guide source checked (brush clearing meaningfully cheaper) and **different primary equipment** (mulching/brush-hog-led vs. excavator-with-grapple-led) — real operational differences, not just marketing framing.

3. **D&D's own live pages already articulate this split correctly and without overlap.** `/land-clearing/`'s hero and body copy describe wooded lots, felling trees, and grubbing stumps and root balls. `/brush-clearing/`'s hero and body copy explicitly state the inverse: *"There's no standing timber to fell, no stumps to grub"* — framing brush clearing as "a step below full land clearing." Each page already cross-links to the other in its "Related Services" module. This is a clean, functioning, non-duplicative split already in production — not a hypothetical to design from scratch.

4. **Other competitors show real alternative models exist, but none beat the evidence above.** All Dirt Inc takes the opposite structural approach — one `/services/land-clearing` page covering both "light brush clearing" and "heavy timber and stump removal" as two tiers within a single page. This is a legitimate alternative model, but it is weaker evidence for a *merge* recommendation than Danco's split is for *keeping separate*, because (a) Danco is the more directly comparable Eugene/Springfield-market peer already used throughout this pipeline, and (b) merging now would mean un-building two already-live, already-indexed, already-cross-linked pages for no material SEO or user-experience gain — the topical map's own cannibalization framework (§16) explicitly favors keeping tightly-related-but-distinct-intent pages separate and cross-linked (see the Excavation-vs-Grading-Leveling precedent at `../excavation/00-research-pack.md` §6/§9, which resolved an analogous close call the same way).

**Where the line falls (do not duplicate across the two pages):**

| Owns this on `/land-clearing/` (this page) | Owns this on `/brush-clearing/` (sibling — do not repeat in full here) |
|---|---|
| Felling and removing standing trees within a clearing footprint | Explicitly states no standing timber is felled |
| Grubbing stumps and root balls | Explicitly states no stumps are grubbed |
| Full-parcel, bare-to-buildable-ground clearing scope | Lighter overgrowth/scrub/sapling removal, ground stays graded-but-not-bare |
| Wooded-lot and pre-construction/pre-development project types | Fence-line, defensible-space, and general acreage-upkeep project types |
| Higher cost tier (construction-grade clearing) | Lower cost tier (brush/overgrowth removal) |
| Excavator-with-thumb/grapple as the primary tool | Brush hog/mulching head as the primary tool (shared attachment entity, different role) |
| Cross-links down to `/site-preparation/` and `/grading-leveling/` as the "what comes next" step | Cross-links to wildfire/defensible-space framing (ties to Oregon SB 762) |

**What this pack does NOT do:** merge the pages, rewrite either live page, or resolve the tree/stump-removal-as-standalone-service nuance (see §4 below and `08-gap-analysis.md`'s dedicated section) — those are content-brief and David-confirmation tasks. This finding is scoped to documenting the evidence and the recommended split clearly enough that the brief stage can act on it without re-litigating the question.

**Action item flagged for the topical map itself (not performed here):** the topical map's §6.4/§16 language ("Brush Clearing = section of Land Clearing at launch → graduate to standalone later") is now out of date relative to the live build and should be revised in a future topical-map update to reflect the two-page structure as the confirmed-correct architecture, not a "graduate later" placeholder.

---

## 1. Top 5 Keyword Targets

| # | Keyword | Intent | Why |
|---|---|---|---|
| 1 | **land clearing eugene or** / **land clearing eugene oregon** | Commercial, decision-stage | Primary page target per topical map §5 P0 row |
| 2 | **land clearing lane county or** | Commercial, decision-stage | County-wide framing matching this page's scope |
| 3 | **acreage clearing cost oregon** / **lot clearing cost per acre oregon** | Commercial investigation, consideration-stage | Task-brief seed terms; zero competitors publish any pricing at all (see `08-gap-analysis.md` gaps #4-5) |
| 4 | **clearing land for pasture** | Commercial investigation, consideration-stage | Task-brief seed term; a genuinely distinct, cheaper cost tier no competitor separates from construction-grade clearing |
| 5 | **land clearing vs brush clearing** | Informational, consideration-stage | Directly answers this pack's central Scope Boundary Finding; also relevant to `/brush-clearing/` |

Full 141-row universe in `01-keyword-universe.csv`, including a labeled subset of brush-clearing-adjacent terms routed to the sibling page and a labeled subset of scope-caution terms (standalone tree removal, stump grinding, forestry mulching) that should NOT be targeted as page keywords per the scope fence.

---

## 2. Top 10 Questions to Answer

Full list of 47 in `02-question-mine.md`. The 10 most load-bearing for this page specifically:

1. What's the difference between land clearing and brush clearing? *(this page's central scope-boundary question — see §0 above)*
2. Does land clearing include stump removal or stump grinding? *(scope-nuance — see §4 below)*
3. How much does land clearing cost per acre?
4. What's the difference between clearing land for building versus clearing land for pasture?
5. What happens to the trees and brush after land clearing?
6. Do I need a permit to clear trees in Lane County? *(critical nuance: depends on in-city vs. rural — see §10)*
7. Do I need a burn permit to burn slash piles after clearing land in Oregon? *(three-agency structure — see §10)*
8. Can I clear land near a stream or wetland in Oregon without a permit?
9. Does the Oregon Forest Practices Act apply to clearing my house lot or acreage?
10. Can a contractor preserve specific trees or features I want to keep while clearing the rest of the lot?

---

## 3. Top 10 Entities to Integrate

Full inventory in `03-entity-map.md` / `entity-inventory.csv`. Priority placement:

| Entity | Where to place |
|---|---|
| D&D Land Works, David Deggelman, Oregon CCB #261742 (reused canonical forms) | H1/first paragraph, schema, trust section |
| Land Clearing (primary entity) | H1, schema `name` |
| Tree Felling / Stump Grubbing (within a clearing job) | "What's Included" section — with the scope-nuance framing from §4 |
| Debris Disposal (chip/haul/burn) | Dedicated "What Happens to the Debris" section |
| City of Eugene Tree Preservation Standards (EC 9.6885) / City of Springfield Tree Felling Permit | Dedicated permit-awareness section |
| Oregon Department of Forestry / Lane Regional Air Protection Agency / Oregon DEQ (burning) | Same permit-awareness section, clearly separated by which agency governs what |
| Oregon Department of State Lands (Removal-Fill Law) | Brief "clearing near water" caution, cross-linked to the excavation pack's fuller pond-permitting content |
| Pasture/Acreage Reclamation Clearing (project type) | Its own short section with its own cost tier |
| Brush Clearing (sibling, not this page) | "Related Services" cross-link, already implemented on the live page |
| `Service` schema type (nested under D&D's `GeneralContractor` entity) | Primary `@type` for this page — reused decision from prior packs |

---

## 4. The Tree/Stump Scope Nuance (flag for David — resolve before the brief locks it in)

The current live `/land-clearing/` page describes felling trees and grubbing stumps as line items within the land-clearing service. Business-info.md's verified service list does not list "Tree Removal" or "Stump Grinding" as their own standalone offerings, and the topical map's own scope fence (§4, §6.4) explicitly excludes tree removal, stump grinding, forestry mulching, and hauling "unless verified." **This is not a contradiction once framed precisely, but it does need explicit confirmation, not silent resolution:**

D&D appears to remove trees and grub stumps *as part of a whole-parcel clearing job's footprint* — this is standard practice for general excavation/land-clearing contractors industry-wide (and is exactly the split Danco's own FAQ draws: land clearing "may include tree removal, stump removal"). What D&D does not appear to offer, and should not imply, is a **standalone** "Tree Removal" service (removing one problem tree from an already-landscaped yard, independent of a broader clearing project — the kind of job an arborist like Highland Tree Service LLC specializes in) or a standalone "Stump Grinding" service marketed on its own. **Recommended content-brief framing:** state plainly that tree and stump work is part of a land-clearing job's scope, and that D&D does not offer single-tree removal or stump grinding as an isolated service separate from a clearing project — but confirm this exact framing with David before publishing it as a definitive statement, since it is inferred from the shipped page copy rather than independently confirmed in business-info.md. Full detail in `03-entity-map.md` §3 and `08-gap-analysis.md`'s dedicated closing section.

---

## 5. Top 5 Content Gaps to Fill

Full 20-point scoring in `08-gap-analysis.md`. Highest-priority-score gaps:

1. **Construction-grade vs. pasture/acreage-reclamation cost tiers** (score 50.0) — zero competitors separate these genuinely different-cost project types
2. **Real cost-per-acre ranges at all** (score 50.0, tied) — zero of the 10 competitors examined publish any land-clearing pricing
3. **Multi-agency permit/burn clarity** (score 40.0) — the Eugene/Springfield tree ordinance vs. ODF/LRAPA/DEQ burning-rule structure is genuinely confusing and unaddressed by any competitor
4. **Tree-ordinance awareness** (score 40.0, tied) — Eugene's 8" DBH significant-tree threshold and Springfield's ~6"/heritage-24" threshold, zero-competitor-covered
5. **Land-clearing-vs-brush-clearing scope clarity + debris-disposal-method transparency** (score 36.0, tied) — both nearly free to fill given D&D's own existing page copy already contains the raw material

---

## 6. Biggest Structural Opportunity (confirmed, not assumed)

**No competitor in the 10-business set examined combines a clear scope line against brush clearing, an explanation of what happens to debris, a plain-language walk-through of which government agency's rule applies to which situation, and real differentiated pricing for construction-grade versus pasture/acreage-reclamation clearing — on one page.** D&D's current live page already leads the set on selective-clearing/tree-preservation framing (matched only by All Dirt) and is the only page that names all three debris-disposal methods, even briefly. The highest-leverage brief work is adding the regulatory-clarity and pricing-differentiation layers that not even Danco or All Dirt — the two strongest competitors in this specific niche — currently provide. See `04-competitor-matrix.md` for full detail.

---

## 7. Recommended H1 / H2 Heading Map

**H1:** Land Clearing in Lane County, Oregon *(current live page's H1 is simply "Land Clearing" — recommend expanding to include the geo-modifier per this pipeline's established pattern on the homepage/excavation/grading-leveling pages)*

**H2s (in order):**

1. From Overgrown to Buildable *(current live page's own intro heading — retain; answers "what does land clearing include?")*
2. What's the Difference Between Land Clearing and Brush Clearing? *(NEW — this page's core scope-boundary job, per §0 above)*
3. What Happens to the Trees, Stumps, and Debris? *(NEW — debris-disposal-method transparency, gap #3/#5)*
4. How Much Does Land Clearing Cost? *(NEW — cost transparency + construction-grade vs. pasture tiers, gaps #4/#5)*
5. Do I Need a Permit to Clear Trees or Burn Debris in Lane County? *(NEW — multi-agency permit/burn clarity, gaps #2/#6)*
6. Equipment on the Job *(current live page's own heading — retain)*
7. Residential and Commercial *(current live page's own heading — retain)*
8. Often Paired With *(current live page's own heading — retain, links to site prep/grading)*
9. Frequently Asked Questions *(NEW — current live page has none)*
10. Get Your Land Opened Up *(current live page's own CTA — retain)*

---

## 8. Content Format Plan (per H2)

| H2 | Format | Why | Schema unlock |
|---|---|---|---|
| 1. From overgrown to buildable | Bulleted list (current live page's existing 6-item list) | Parallel items, already shipped | `ItemList` |
| 2. Land clearing vs. brush clearing | Answer-first, 50-70 words | The single most citable passage on the page — direct definitional contrast | `Speakable` |
| 3. What happens to debris | Mixed — short answer-first + bulleted list of the three disposal paths | Explains a process with parallel options | none required |
| 4. Cost | Comparison table — columns: Project Type / Typical Range / What Drives It (construction-grade vs. pasture/acreage) | Multi-attribute cost data, addresses two gaps in one format | none required |
| 5. Permits/burning | Comparison table — columns: Situation / Governing Agency / What It Requires (Eugene tree / Springfield tree / ODF slash burn / DEQ backyard burn / DSL wetlands) | Multi-attribute regulatory data — the single most differentiated content block on the page | none required |
| 6. Equipment | Short answer-first (current live page's existing copy) | Directly answers an equipment-transparency question | `Speakable` |
| 7. Residential and commercial | Answer-first (current live page's existing copy) | Audience-transparency | none required |
| 8. Often paired with | Short answer-first + cross-links (current live page's existing copy) | Sequencing transparency | none required |
| 9. FAQ | FAQPage-formatted Q&A, 9 questions | Standard | `FAQPage` |
| 10. CTA | Short answer-first + CTA block (current live page's existing copy) | Conversion-focused | none required |

At least one comparison table (#4 and #5), one bulleted list (#1/#3), and format diversity across answer-first/table/list are included, per the parent methodology's format-diversity requirement.

---

## 9. FAQ Shortlist (9 questions for FAQPage schema)

Validated against `02-question-mine.md` and the confirmed 0-2/10 competitor-coverage findings in `04-competitor-matrix.md`:

1. What's the difference between land clearing and brush clearing?
2. Does land clearing include stump removal?
3. How much does land clearing cost per acre?
4. What's the difference between clearing land for building versus for pasture?
5. What happens to the trees and brush after land clearing?
6. Do I need a permit to clear trees in Lane County?
7. Do I need a burn permit to burn slash piles after clearing land?
8. Can I clear land near a stream or wetland in Oregon?
9. Can a contractor preserve specific trees I want to keep?

---

## 10. Required Schema

Verification note: this pack reuses the homepage pack's confirmed schema.org research (`GeneralContractor` is real and correct) and the site-preparation/excavation packs' `Service` type confirmation rather than re-verifying.

- **`Service`** (primary `@type`) with `name: "Land Clearing"`, `provider` → D&D Land Works `GeneralContractor` entity, `areaServed` (Lane County + Eugene/Springfield at minimum), `serviceType`
- `FAQPage` — for the 9-question shortlist above
- `BreadcrumbList` — Home → Services → Land Clearing (already implemented via the current live page's `Breadcrumbs` component)
- `Speakable` — on the land-clearing-vs-brush-clearing and equipment answer-first passages
- Do **not** implement `AggregateRating`/`Review` until real reviews exist — same rule as all four prior packs

---

## 11. Required Authority Signals

From `07-oregon-authority.md`, each with source + verification date:

1. **City of Eugene Tree Preservation and Removal Standards (EC 9.6885)** — verified directly 2026-09-08; 8" DBH significant-tree threshold; in-city only
2. **City of Springfield Tree Felling Permit** — verified directly 2026-09-08; ~6" DBH / heritage 24" threshold; in-city only
3. **Oregon Department of Forestry / Lane Regional Air Protection Agency / Oregon DEQ** (three-agency burning structure) — verified directly 2026-09-08; genuinely confusing, zero-competitor-covered
4. **Oregon Department of State Lands (Removal-Fill Law)** — reused/extended from the excavation pack's pond-permitting research; 50-cubic-yard threshold near wetlands/waters
5. **Oregon Forest Practices Act** — verified 2026-09-08 as generally inapplicable to typical residential/small-acreage clearing, flagged for direct ODF confirmation rather than stated as absolute

Density target per the parent methodology: roughly 1 statistic per 300-500 words of body copy, at least one external authority link per major section (especially the permits/burning section).

---

## 12. AI-Citation-Ready Summary Block (140-165 words)

Drafted in full in `06-ai-citation-audit.md` §4; reproduced here for brief convenience:

> Land clearing removes trees, stumps, brush, and debris from a property to open it up for construction, pasture, or general use. It's a heavier-scope, more expensive service than brush clearing, which targets only smaller vegetation — blackberry, scotch broom, saplings — without felling standing timber or grubbing stumps. D&D Land Works provides land clearing for residential and commercial properties throughout Eugene, Springfield, and Lane County, Oregon, including wooded lots being prepared for a new build, and overgrown or neglected acreage being reclaimed for pasture or general use. Work typically includes felling and removing trees within the clearing footprint, grubbing stumps and root balls, cutting and hauling brush, chipping or burning debris where permitted, and rough grading the cleared area. Trees and features a customer wants kept can be flagged and preserved during the walk-through. D&D Land Works is licensed and bonded under Oregon Construction Contractors Board license CCB #261742, serving Eugene, Springfield, and the rest of Lane County. Free estimates are available.

Place in the first 30% of the page's body content, immediately after the hero.

---

## 13. Trust-Killer Rebuttals

From `05-intent-triangulation.md` Table 3:

| Trust killer | Rebuttal to build into the page |
|---|---|
| No pricing signal anywhere for land clearing | Publish real, sourced cost ranges for both construction-grade and pasture tiers, clearly labeled as general estimates |
| "Land clearing" and "brush clearing" used interchangeably | State the real scope line plainly and cross-link to the sibling page for lighter-scope jobs |
| Permit/regulatory silence | Add the permit-awareness section naming which specific agency governs which situation |
| Fear of hidden debris-disposal costs | Explain the three disposal paths and their rough cost implications upfront |
| Worry a valued tree will be removed without being asked | State plainly that trees/features can be flagged and preserved at the walk-through, before the quote |
| Small residential jobs feeling like an afterthought | State plainly that a small clearing job and a larger commercial parcel are scoped and quoted the same way |

---

## 14. E-E-A-T Signal Plan

- **Experience:** Real project photos tied to specific clearing project types (a wooded lot, a pasture reclamation) as they become available — do not fabricate a portfolio.
- **Expertise:** The multi-agency permit/burn structure and the construction-grade-vs-pasture cost-tier distinction demonstrate genuine working knowledge zero competitors currently show.
- **Authority:** Direct links to eugene.municipal.codes, springfield-or.gov, oregon.gov/odf, lrapa-or.gov, oregon.gov/deq, and oregon.gov/dsl — free authority-borrowing, unclaimed by any competitor in this niche.
- **Trust:** Honest scope-boundary framing against brush clearing; explicit tree/stump-as-part-of-a-job (not standalone-service) disclosure; real cost ranges, clearly labeled as general; no fabricated reviews, permits penalties, or Lane-County-exact pricing.

---

## 15. Freshness Plan

- Re-verify Eugene's and Springfield's tree-permit fee amounts directly before publish if this brief is built more than 90 days after 2026-09-08.
- Re-verify the LRAPA/ODF/DEQ three-agency burning structure against live source pages before publish.
- Re-verify the Lane County unincorporated tree-ordinance absence-finding directly with Lane County Planning & Development before stating it as settled.
- Re-run this entire research pack if the content brief/build happens more than 90 days after 2026-09-08, consistent with all four prior packs.

---

## Flags (per parent methodology, adapted)

- **Flag A — Listicle-dominated SERP: PARTIALLY CONFIRMED**, cost-intent queries only (national cost-guide sites dominate "how much does land clearing cost"-style queries; local-commercial-intent queries stay contractor-dominated) — see `06-ai-citation-audit.md` §1.
- **Flag B — Anti-doorway gate:** not directly applicable to this service page; future city×land-clearing pages must satisfy the topical map's 6-point anti-doorway checklist before publishing.
- **Flag C — Scope-boundary specificity gap: this pack's central, distinguishing finding.** Unlike the general FAQ/pricing-absence gap found in the homepage and site-prep packs, this page's sharpest gap is the combination of (1) an already-correct but under-explained scope split against the sibling brush-clearing page, and (2) a genuinely confusing multi-agency regulatory structure that costs nothing to explain clearly and that no competitor — including the two strongest players in this specific niche — currently attempts.

---

## Quality Checklist

- [x] 100-150+ keywords captured (141 rows in `01-keyword-universe.csv`, including labeled brush-clearing-adjacent and scope-caution subsets)
- [x] 40+ questions mined (47 in `02-question-mine.md`); 14 Oregon-specific; 9 objection-tagged; 8 Reddit/Quora-sourced (proxy, same methodology limitation as all four prior packs); 7 scope-boundary-tagged
- [x] 10 competitors examined specifically for land-clearing/brush-clearing content (the original 8 re-checked, plus Rotex Excavation and two adjacent-category players for competitive-landscape context) — `04-competitor-matrix.md`
- [ ] 12-point AI citation filter scored per-competitor — **not run** in this pass, same limitation as all four prior packs (no reliably detectable schema markup via available tooling)
- [x] Validated AI citation channel spot-check complete — `06-ai-citation-audit.md` §6
- [x] 20-point gap framework scored — `08-gap-analysis.md`
- [x] Flags A/B/C evaluated
- [x] 5 Oregon/Lane County authority signals with source + verification date — `07-oregon-authority.md`
- [ ] AI citation audit across 6 live AI chat systems — **not directly queryable** this session, same limitation as all four prior packs; reasoned from SERP composition instead
- [x] Heading map composed, retaining the current live page's own headings where sound and adding new ones only where a genuine gap exists
- [x] Content Format Plan completed for every H2, including two comparison tables and bulleted lists
- [x] FAQ shortlist composed (9 questions) — current live page has zero FAQ content today
- [x] AI citation block drafted (~155 words, first-30%-placement)
- [x] Entity map cross-references all four prior packs' canonical entities rather than re-deriving them — `03-entity-map.md`, `entity-inventory.csv`
- [x] **Scope-boundary finding against the live `/brush-clearing/` sibling page explicitly documented with real, sourced evidence (Danco's own FAQ, independent industry sourcing, D&D's own shipped copy) — not an arbitrary keyword split** — §0 above, `00-research-pack.md` central deliverable per the task brief
- [x] Tree/stump-as-part-of-a-job scope nuance documented explicitly, flagged for confirmation with David rather than silently resolved either way — §4 above

## Honest Limitations of This Pack (disclose to the content-brief author and to David)

1. No direct AI chat-interface querying was possible, same as all four prior packs — this audit is reasoned from SERP composition.
2. No scraped review text (Google/Yelp 1-3 star) was retrievable for any competitor — intent triangulation relies on industry-pattern literature and forum-thread proxies (TractorByNet) rather than quoted complaints.
3. The Lane County unincorporated tree-ordinance absence-finding (`07-oregon-authority.md` §3) is provisional — this pass's search was not exhaustive of every Lane County code chapter, and it should be directly confirmed with Lane County Planning & Development before being stated as settled in published content.
4. No specific penalty dollar figure was found for unpermitted burning under ODF, LRAPA, or DEQ jurisdiction — none is stated anywhere in this pack; do not invent one at the brief stage either.
5. The tree/stump-removal-as-part-of-a-job (not standalone-service) framing in §4 is this pack's own inference from the live page's shipped copy, cross-validated against Danco's FAQ and general industry practice — it is not independently confirmed against business-info.md and should be checked with David before the content brief states it as a definitive operational fact.
6. No Lane-County-specific per-acre land-clearing price was found; all cost ranges in this pack are national or Oregon-climate/terrain-adjusted, not a genuine Lane County dataset.
7. Whether D&D's actual field process includes forestry mulching as an available method (versus only chip/haul/burn, as the current live page states) is unconfirmed — flagged in `03-entity-map.md` and `08-gap-analysis.md` as a question for David before the content brief states it either way.
