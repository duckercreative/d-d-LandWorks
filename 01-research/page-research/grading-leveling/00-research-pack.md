# Research Pack — D&D Land Works Grading & Leveling (`/grading-leveling/`)

**Prepared:** 2026-09-08 · **Prepared by:** Ducker Creative (deep-research methodology, adapted from HVAC → excavation/site-prep per CLAUDE.md; fourth page through this pipeline after the homepage, Site Preparation, and Excavation & Grading)
**Page targeted:** Grading & Leveling (`/grading-leveling/`) — per the topical map (`../../topical-map-2026-09-03.md` §6.3), a P0 core service page sitting below Excavation & Grading in the site hierarchy and cross-linked heavily with it, Drainage Excavation, Driveway Repair, and Slope Stabilization.
**Built on, not duplicating:** the homepage, site-preparation, and excavation packs. All canonical business/location/certification entities (D&D Land Works, David Deggelman, Oregon CCB #261742, Oregon DEQ, Lane County, Eugene, Springfield, Willamette Valley, the `GeneralContractor`/`Service` schema decisions) are reused verbatim from those packs' entity inventories, not re-derived. The 8-competitor set (Danco, All Dirt, Heavy D, Emerald, McKenzie, Braun, Strasheim, A&D) was re-checked specifically for standalone grading/leveling content rather than rediscovered from scratch — see `04-competitor-matrix.md`.
**Status of underlying business:** Same zero-baseline greenfield status as all three prior packs — no live indexed site, no GBP, no digital footprint. This pack's recommendations are build-from-zero targets, with one exception: a live page already exists at `site/src/pages/services/grading-leveling.astro`, built before this research pipeline existed. That page is read and evaluated against this pack's findings throughout (see §4 and `08-gap-analysis.md`).

This file is the master synthesis. The future content brief should read only this file; the other 8 files in this folder are the supporting evidence and can be drilled into on demand.

---

## 0. Scope Boundary (read this before writing or editing any content for this page)

This page sits at the center of **two separate cannibalization risks** the topical map explicitly flags (§16), and its content must respect both boundaries precisely to avoid contradicting sibling pages that have already shipped.

### Boundary 1 — vs. Excavation & Grading (`/excavation/`), already shipped

The excavation page's own content (`07-landing-pages/content/excavation-content.md`) already states this exact boundary under its H2 **"What's the Difference Between Excavation and Grading?"** — quoted here verbatim so there is no ambiguity or risk of contradiction:

> "Excavation removes earth to create space: a foundation footing, a pond basin, a utility trench. Grading shapes the surface once material is in place, setting the finish elevation and drainage slope. On a real job the two usually happen as one continuous operation, excavation opens the space and grading finishes the surface, rather than two rigidly separate phases handled by different crews.
>
> This page covers grading that happens *because* something is being dug: cut-and-fill to design grade, backfill and compaction after a trench or footing goes in, and rough grading that finishes an excavation project. Standalone re-sloping, yard leveling, or drainage-grading on ground where nothing new is being dug is a different job, covered on the [grading and leveling](/services/grading-leveling/) page instead. If your project doesn't involve a new dig, that's the page to start on."

**Rule for this page, derived directly from that language:** THIS page (`/grading-leveling/`) owns standalone re-sloping, yard leveling, and drainage-grading for an **existing** surface — where nothing new is being dug. It does **not** own: cut-and-fill to design grade during a dig, backfill/compaction after a trench or footing, or rough grading that finishes an excavation project. Any of those belong on `/excavation/`, which already covers them.

### Boundary 2 — vs. Site Preparation (`/site-preparation/`), already shipped

Site Preparation's role, confirmed in `../site-preparation/00-research-pack.md`, is grading a **raw or partially-cleared lot** ahead of new construction — clearing → strip topsoil → cut/fill to grade → compact → stake → rough-grade for drainage, all in service of getting an undeveloped lot ready to build on. **This page's territory is the opposite case: an already-developed lot or yard with a surface problem, with no new construction necessarily involved at all.** A homeowner whose yard floods every winter in a house built ten years ago is this page's buyer; a homeowner who just closed on raw acreage and needs it build-ready is Site Preparation's buyer. Neither page should claim the other's buyer moment.

### Boundary 3 — vs. Drainage Excavation (future page, not yet built) and two smaller boundaries

Per the topical map's cannibalization table (§16): *"Drainage Excavation vs Grading: Yes [separate pages justified] — Overlap on 'standing water'; drainage page owns the water-management intent, grading page owns the surface/slope intent. Cross-link, don't duplicate."* Applied here: this page owns **regrading the ground itself** so water moves the right direction (re-sloping, correcting a low spot, shaping a swale as part of the yard's own contour). A **dug drainage trench, channel, or buried system as its own constructed feature** is the future Drainage Excavation page's territory. Since that page doesn't exist yet, this page should mention swales and positive slope as grading-level solutions, explain the swale-vs-French-drain distinction for reader education, and note that a dedicated drainage-excavation write-up is coming — not build out full drainage-system-installation content here.

Two smaller boundaries, both already resolved by the topical map without needing a new decision: **Driveway Repair vs. Driveway Grading** — one page, driveway grading is a section of `/driveway-repair/`, not this page (§16). **Slope Stabilization** — hillside erosion control involving structural/engineering framing (retaining walls, slope-stability claims) belongs there; this page covers ordinary surface-slope correction only, no structural guarantees.

### Net effect

If a draft of this page's content starts describing cut/fill during a new dig, backfill after a trench, rough grading finishing an excavation project, or grading a raw lot before a build — stop. That content belongs on `/excavation/` or `/site-preparation/`, both already shipped, and duplicating it here would create exactly the cannibalization risk the topical map warns against. This page's job is narrower and, per `04-competitor-matrix.md`, genuinely uncontested: standalone grading for an existing surface problem, with nothing new being dug.

---

## 1. Top 5 Keyword Targets

| # | Keyword | Intent | Why |
|---|---|---|---|
| 1 | **land grading eugene or** / **land grading eugene oregon** | Commercial, decision-stage | Primary page target per topical map §6.3 |
| 2 | **yard leveling eugene or** / **grading contractor lane county oregon** | Commercial, decision-stage | Homeowner-language and contractor-language variants of the same head intent; both genuinely uncontested per `04-competitor-matrix.md` |
| 3 | **fix drainage slope yard** / **regrade yard for drainage** | Problem-solution, consideration-stage | Task-brief seed terms; captures the "existing problem, not new construction" buyer directly |
| 4 | **is this a landscaping job or an excavation job** | Informational, consideration-stage | Task-brief-named disambiguation query; zero competitors answer this anywhere, the page's single clearest content opportunity |
| 5 | **lawn leveling cost oregon** / **cost to level a yard oregon** | Commercial, consideration-stage | Cost queries with real, sourced ranges available ($500-$5,000 depending on scope — see `07-oregon-authority.md`/`02-question-mine.md`) that zero Lane County competitors currently publish for yard-scale jobs |

Full 118-row universe in `01-keyword-universe.csv`.

---

## 2. Top 10 Questions to Answer

Full list of 46 in `02-question-mine.md`. The 10 most load-bearing for this page specifically:

1. Is this a landscaping job or an excavation job? *(this page's own core disambiguation, task-brief-named)*
2. What is a positive drainage slope, and how much slope does my yard actually need?
3. How much does it cost to level or regrade a yard in Lane County?
4. Do I need a permit just to regrade my lawn in Lane County?
5. How do I know if my yard needs a full regrade versus just topdressing?
6. What's the difference between a swale and a French drain?
7. Does D&D take on small residential yard-grading jobs, or mostly bigger projects?
8. Why does my yard slope toward my house instead of away from it?
9. Will regrading damage my existing lawn or landscaping?
10. What's the best time of year to regrade a yard in Oregon's rainy climate?

---

## 3. Top 10 Entities to Integrate

Full inventory in `03-entity-map.md` / `entity-inventory.csv`. Priority placement:

| Entity | Where to place |
|---|---|
| D&D Land Works, David Deggelman, Oregon CCB #261742 (reused canonical forms) | H1/first paragraph, schema, trust section — same as all three prior packs |
| Positive Drainage Slope + **Oregon Residential Specialty Code §R401.3** | A dedicated section explaining the actual code standard in plain language — this page's single strongest authority citation |
| Swale vs. French Drain | A short education section, honest about which one is (and isn't confirmed as) a D&D service |
| Low Spot / Negative Grade | Problem-framing language throughout, matching homeowner search behavior |
| Excavation & Grading, Site Preparation (siblings, NOT this page) | An explicit "Often Paired With" / scope-boundary section, stating the difference rather than leaving it implicit |
| Drainage Excavation (future sibling) | Brief cross-link/mention only, not built out in depth |
| Driveway Repair, Slope Stabilization (siblings) | Cross-link only |
| Lane County Grading and Fill Permit (reused, applied to a smaller job size) | A permit-reassurance FAQ entry |
| Willamette Valley clay soil (reused) | Brief context paragraph on why drainage problems are common here |
| `Service` schema type (nested under D&D's `GeneralContractor` entity) | Primary `@type` for this page — reused decision from site-prep/excavation packs |

---

## 4. Top 5 Content Gaps to Fill

Full scoring in `08-gap-analysis.md`. Highest-leverage gaps:

1. **Standalone-service naming gap** (score 50.0, tied #1) — presenting grading/leveling as its own real service for an existing yard; confirmed zero of 8 competitors do this at all
2. **"Landscaping job vs. excavation job" disambiguation** (score 50.0, tied #1) — the task brief's own named central gap
3. **Positive-drainage-slope / code-standard explanation** (score 50.0, tied #1) — this page's most citable passage, backed by a directly-verified Oregon code citation
4. **Permit-simplicity reassurance**, **topdressing-vs-regrade honesty**, **small-job reassurance**, **foundation-damage-risk education** (all 40.0) — zero-cost, directly answer sourced homeowner pain points
5. **Current-live-page scope issue** — the live page's "cutting building pads level and to design elevation" bullet falls outside this page's confirmed scope boundary (that's Excavation & Grading/Site Preparation territory) and should be revisited during the content brief, not carried forward as-is

---

## 5. Biggest Structural Opportunity (confirmed, not assumed)

**Zero of the 8 competitor sites re-checked for this page — including All Dirt, directly fetched and confirmed on 2026-09-08 — offer, name, or explain standalone yard leveling/regrading as a service distinct from grading tied to a new dig or new construction.** Every mention of "grading" anywhere across the 8-competitor set sits inside a general excavation or site-prep service list, always framed around foundations, subdivisions, or new-construction pads. This is independently corroborated by a genuinely new finding for this pack: **HomeAdvisor's own lead-generation taxonomy already splits "Landscape Minor Grading or Resloping" from "Excavation Major Grading or Resloping" as separate categories, with a dedicated Eugene, OR page for each.** The market already recognizes this buyer as distinct; no Lane County excavation contractor's own content currently speaks to them. See `04-competitor-matrix.md` for full detail.

---

## 6. Recommended H1 / H2 Heading Map

**H1:** Grading & Leveling in Eugene, Springfield & Lane County, Oregon
*(the current live page's H1 is simply "Grading & Leveling" — consider whether the fuller, geo-scoped form used on the sibling pages should replace it for consistency, a content-brief decision, not re-litigated here)*

**H2s (in order):**

1. Is This a Landscaping Job or an Excavation Job? *(disambiguation — opens the page answering the task brief's central gap, the single most citable passage available)*
2. What Does Grading & Leveling Actually Fix? *(intro/positioning — low spots, negative slope toward the house, uneven lawns, erosion — problem-framed, not process-framed)*
3. What Is a Positive Drainage Slope? *(the ORSC §R401.3 standard explained in plain language — this page's strongest authority citation)*
4. How Do I Know If I Need a Full Regrade or Just Topdressing? *(decision — severity threshold, pre-qualifies leads honestly)*
5. Swale or French Drain — What's the Difference? *(education — honest scope note on which is confirmed as a D&D service)*
6. Do I Need a Permit to Regrade My Yard in Lane County? *(oregon-specific/permit — removes a perceived barrier to calling)*
7. How Much Does Yard Grading or Leveling Cost? *(cost — real ranges, labeled general, not a quote)*
8. What Equipment Shows Up for a Grading Job? *(equipment — fine grading near a foundation vs. bulk shaping a larger yard)*
9. Will Regrading Damage My Lawn or Landscaping? *(objection/practical concern)*
10. What's the Best Time of Year to Regrade a Yard in Oregon? *(seasonal — scaled proportionally to this page's smaller typical job size, not imported wholesale from the excavation page's urgency)*
11. Frequently Asked Questions *(FAQ block — see §8)*
12. Get Your Yard Scoped *(contact/CTA)*

Every H2 is phrased as a real, natural question or task under 10 words, matching all three prior packs' format and this page's own question-mine findings.

---

## 7. Content Format Plan (per H2)

| H2 | Format | Why | Schema unlock |
|---|---|---|---|
| 1. Landscaping vs. excavation job | Answer-first, 50-70 words | The single most citable passage on the page | `Speakable` |
| 2. What grading & leveling fixes | Bulleted list (low spots, negative slope, uneven lawn, erosion, drainage-grading) | Parallel problem items, scannable | `ItemList` |
| 3. Positive drainage slope | Answer-first (60-90 words), citing ORSC §R401.3 by name | A precise, quotable code standard — this page's strongest AI-citation asset | `Speakable` |
| 4. Regrade vs. topdressing | Short comparison note (two remedies, when each applies) | Decision-stage, two-option contrast | none required |
| 5. Swale vs. French drain | Comparison table — columns: Swale / French Drain (what it is, how it works, whether D&D offers it) | Multi-attribute comparison, directly differentiating format | none required |
| 6. Permits | Answer-first (60-80 words) + honest scaling note (small job vs. large job) | Objection-handling, removes a perceived barrier | `Speakable` |
| 7. Cost | Comparison table — columns: Job Type / Typical Range / What Affects Price | Multi-attribute cost data, format-diversity requirement | none required |
| 8. Equipment | Short answer-first (60-80 words) | Directly answers a named FAQ | `Speakable` |
| 9. Lawn/landscaping impact | Answer-first + honest explanation, 60-80 words | Objection-handling | none required |
| 10. Seasonal timing | Short comparison note (dry season vs. wet season, scaled to job size) | Two distinct conditions, not a full table | none required |
| 11. FAQ | FAQPage-formatted Q&A, 9 questions | Standard | `FAQPage` |
| 12. CTA | Short answer-first + CTA block | Conversion-focused | none required |

At least one comparison table (#5 and #7), one bulleted list (#2), and format diversity across answer-first/table/list are included, per the parent methodology's format-diversity requirement.

---

## 8. FAQ Shortlist (9 questions for FAQPage schema)

Validated against `02-question-mine.md` and the confirmed 0/8 competitor-coverage findings in `04-competitor-matrix.md`:

1. Is this a landscaping job or an excavation job?
2. What is a positive drainage slope, and how much slope does my yard actually need?
3. How much does it cost to level or regrade a yard in Lane County?
4. Do I need a permit just to regrade my lawn in Lane County?
5. How do I know if my yard needs a full regrade versus just topdressing?
6. What's the difference between a swale and a French drain?
7. Does D&D take on small residential yard-grading jobs, or mostly bigger projects?
8. Will regrading damage my existing lawn or landscaping?
9. What's the best time of year to regrade a yard in Oregon's rainy climate?

---

## 9. Required Schema

Verification note: this pack reuses the homepage pack's confirmed schema.org research (`GeneralContractor` is real and correct; `ExcavationContractor` does not exist) and the site-preparation/excavation packs' `Service` type confirmation rather than re-verifying.

- **`Service`** (primary `@type`) with `name: "Grading and Leveling"`, `provider` → D&D Land Works `GeneralContractor` entity, `areaServed` (Lane County + Eugene/Springfield at minimum), `serviceType`
- `FAQPage` — for the 9-question shortlist above
- `BreadcrumbList` — Home → Services → Grading & Leveling (already implemented via the current live page's `Breadcrumbs` component)
- `Speakable` — on the disambiguation, drainage-slope-standard, and permit answer-first passages
- Do **not** implement `AggregateRating`/`Review` until real reviews exist — same rule as all three prior packs

---

## 10. Required Authority Signals

From `07-oregon-authority.md`, each with source + verification date:

1. **Oregon Residential Specialty Code §R401.3 (Drainage)** — VERIFIED DIRECTLY against ICC's published Oregon code text (2017/2021/2023 editions): 6-inch minimum fall over the first 10 feet near a foundation (~5% slope), 2% minimum for impervious surfaces within that zone and generally beyond it. The single most load-bearing citation on this page.
2. **Lane County Grading and Fill Permit** (reused from site-preparation pack: >50 cu yd or slope steeper than 2:1) — applied honestly to this page's smaller typical job size, not overstated into a blanket no-permit claim
3. **Willamette Valley clay soil** (reused from homepage pack) — explains why drainage problems recur in this specific region
4. **NOAA Eugene climate normals** (reused from homepage pack) — seasonal timing, scaled proportionally to this page's smaller job size
5. **HomeAdvisor service-taxonomy corroboration** (new for this pack) — independent, third-party evidence that the market already distinguishes "minor" yard grading from "major" excavation-scale grading

Explicitly **not** carried over from sibling pages: Oregon811/utility locates and OSHA Subpart P trench safety (both genuinely scoped to digging/trenching, not surface regrading — see `07-oregon-authority.md` §5 for the reasoning) and DEQ 1200-C stormwater (a construction-project-scale, 1-acre-disturbance trigger, not relevant at yard scale).

Density target: same as all three prior packs, roughly 1 statistic per 300-500 words, at least one external authority link per major section (especially the drainage-standard and permit sections).

---

## 11. AI-Citation-Ready Summary Block (~140 words)

Drafted in full in `06-ai-citation-audit.md` §4; reproduced here for brief convenience:

> Grading and leveling corrects an existing yard's surface — re-sloping a lawn, fixing a low spot that collects water, or restoring a positive drainage slope away from a foundation — without digging a new excavation. D&D Land Works provides grading and leveling for residential and commercial properties throughout Eugene, Springfield, and Lane County, Oregon, cutting building pads level, grading yards for positive drainage, correcting low spots, and shaping swales and berms to redirect surface water. The work follows Oregon's adopted residential drainage standard (ORSC §R401.3), which calls for a minimum 6-inch fall over the first 10 feet near a foundation and a 2% minimum slope beyond that. D&D is licensed and bonded under Oregon CCB #261742. Most yard-sized grading jobs fall well under Lane County's grading-permit threshold. Free estimates are available.

Place in the first 30% of the page's body content, immediately after the hero.

*(Note: this block currently repeats the current live page's "cutting building pads level" phrasing for continuity, but per §0's scope boundary that specific example is arguably better replaced with a purely existing-yard example — e.g., "correcting a yard that slopes toward the house" — during the content brief. Flagged here rather than silently changed.)*

---

## 12. Trust-Killer Rebuttals

From `05-intent-triangulation.md` Table 3:

| Trust killer | Rebuttal to build into the page |
|---|---|
| No competitor explains what a "positive drainage slope" actually is | Cite ORSC §R401.3 in plain language — a real, verifiable number |
| Fear this job is too small to matter to an excavation-focused company | State plainly that a yard-sized job gets the same scoping attention as a larger project |
| Permit anxiety turning a simple fix into a perceived ordeal | State clearly that most yard jobs stay well under the 50-cubic-yard threshold, honestly noting exceptions |
| Confusion about whether to call a landscaper or an excavation contractor | Answer "is this a landscaping job or an excavation job" directly, as its own FAQ entry |
| Worry a "cheap fix" is a bandage, not a real solution | Explain the topdressing-vs-regrade threshold honestly, including when the cheaper option is genuinely right |
| No acknowledgment that yard drainage problems can damage the house | Cite the documented connection without scare-tactic exaggeration |
| Zero reviews / zero online presence at launch | Do not fabricate — same rule as all three prior packs |

---

## 13. E-E-A-T Signal Plan

- **Experience:** Real project photos tied to a yard-regrade project (before/after showing a corrected slope) as they become available — do not fabricate a portfolio, consistent with all three prior packs.
- **Expertise:** The ORSC §R401.3 citation and the topdressing-vs-regrade severity distinction demonstrate genuine working knowledge zero competitors currently show for this specific job type.
- **Authority:** Direct link to the ICC-hosted Oregon code text — free authority-borrowing, unclaimed by any competitor in this niche for this specific standard.
- **Trust:** Honest topdressing-vs-regrade framing (including cases where the cheaper fix is the right call); explicit small-job welcome statement; real cost ranges, clearly labeled as general; no fabricated reviews or Lane-County-exact pricing; the scope-boundary discipline in §0 itself functions as a trust signal — a company that clearly explains what job goes on which page reads as more competent, not less.

---

## 14. Freshness Plan

- Re-verify the ORSC §R401.3 language against the then-current Oregon code edition if the content brief/build happens more than 90 days after 2026-09-08 (low-risk but not zero-risk given Oregon's multi-year code-adoption cycle).
- Re-verify the Lane County 50-cubic-yard/2:1-slope permit threshold directly against Lane County LMD (not the third-party guide used here and in the site-preparation pack) before publishing it as an exact, quotable figure.
- Re-run this entire research pack if the content brief/build happens more than 90 days after 2026-09-08, consistent with all three prior packs' freshness rule.

---

## Flags (per parent methodology, adapted)

- **Flag A — Listicle-dominated SERP: NOT confirmed for this page, a genuinely different finding than all three prior packs.** This page's target queries surface a **content-site-dominated SERP** (national cost guides, generic landscaping blogs, HomeAdvisor category pages) rather than a directory/listicle-dominated one, and no single Lane County competitor is entrenched for these exact terms — see `06-ai-citation-audit.md` §1. This is a more open competitive lane than the homepage's, site-prep's, or excavation's own head terms.
- **Flag B — Anti-doorway gate:** Not directly applicable to this service page; future city×service pages (e.g., `/service-areas/springfield/grading/`, named in the topical map §9) must satisfy the topical map's 6-point anti-doorway checklist before publishing, same as noted in all three prior packs.
- **Flag C — Standalone-service-naming gap: NEW FINDING for this page, distinct from Flags A/B and from the excavation pack's own "process-specificity" Flag C.** The sharpest and largest gap here isn't depth of process explanation (the excavation pack's finding) or general FAQ/pricing/permit absence (the homepage and site-prep packs' finding) — it's that no competitor treats standalone yard grading as a distinct service or buyer need *at all*. Independently corroborated by HomeAdvisor's own "Landscape Minor Grading or Resloping" vs. "Excavation Major Grading or Resloping" category split.

---

## Quality Checklist

- [x] 100-150+ keywords captured (118 rows in `01-keyword-universe.csv`)
- [x] 40+ questions mined (46 in `02-question-mine.md`); 9 Oregon-specific; 6 objection-tagged; 8 Reddit/forum-sourced (proxy, same methodology limitation as all three prior packs)
- [x] 8 competitors re-checked specifically for standalone grading/leveling content (1 direct fetch — All Dirt — plus 7 via targeted search, not re-discovered from scratch) — `04-competitor-matrix.md`
- [x] New third-party corroboration source found and validated (HomeAdvisor's own service-taxonomy split) — `03-entity-map.md` §4, `04-competitor-matrix.md` Matrix B
- [x] Explicit Scope Boundary section against both Excavation & Grading and Site Preparation, quoting the shipped excavation content verbatim, plus the Drainage Excavation/Driveway Repair/Slope Stabilization boundaries — §0 above
- [x] 13-gap scoring framework completed, three gaps explicitly tied to the task brief's named dimensions (drainage-slope standard, permit simplicity, landscaping-vs-excavation confusion) — `08-gap-analysis.md`
- [x] Flags A/B/C evaluated, Flag A found NOT to hold (a genuinely different finding from all three prior packs) and Flag C identified as a new, distinct finding
- [x] 5 Oregon/Lane-County authority signals with source + verification date, including one figure verified by direct fetch of the actual code text rather than assumed (ORSC §R401.3) — `07-oregon-authority.md`
- [ ] AI citation audit across 6 live AI chat systems — **not directly queryable** this session, same limitation as all three prior packs; reasoned from SERP composition instead
- [x] Heading map composed, every H2 a natural question/task under 10 words
- [x] Content Format Plan completed for every H2, including two comparison tables and one bulleted list
- [x] FAQ shortlist composed (9 questions)
- [x] AI citation block drafted (~140 words, first-30%-placement)
- [x] Entity map cross-references home/site-prep/excavation packs' canonical entities rather than re-deriving them, and explicitly marks sibling-page entities as NOT this page's territory — `03-entity-map.md`, `entity-inventory.csv`
- [x] Current live page (`site/src/pages/services/grading-leveling.astro`) read and evaluated against the confirmed scope boundary; one scope issue flagged (building-pad-to-design-elevation bullet) — `08-gap-analysis.md`

## Honest Limitations of This Pack (disclose to the content-brief author and to David)

1. No direct AI chat-interface querying was possible, same as all three prior packs — this audit is reasoned from SERP composition.
2. No Lane-County-specific cost data was found for yard-scale grading/leveling specifically (distinct from the excavation/septic pages, where at least some Eugene-specific figures existed) — all cost ranges in this pack are national/statewide, clearly labeled as general.
3. No authoritative timeline (day-count) figure was found for a yard-scale (not lot-scale) grading job — flagged in `08-gap-analysis.md` as a question for David rather than invented.
4. Whether D&D's actual yard-grading depth ever approaches utility-strike risk, and whether Oregon811 guidance belongs on this page at all, is unconfirmed — flagged in `07-oregon-authority.md` §5.
5. Whether D&D performs any lawn-care-adjacent topdressing/sand-leveling work itself is unconfirmed — flagged in `08-gap-analysis.md`, affects how that section should be framed.
6. Real pricing specific to D&D's own yard-grading jobs, years in business, and other standard open items already tracked in `business-info.md` remain unconfirmed and are not fabricated here.
