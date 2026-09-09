# Research Pack — D&D Land Works Drainage Excavation (`/services/drainage-excavation/`)

**Prepared:** 2026-09-09 · **Prepared by:** Ducker Creative (deep-research methodology, adapted from HVAC → excavation/site-prep per CLAUDE.md; eighth page through this pipeline, after the homepage, Site Preparation, Excavation & Grading, Grading & Leveling, Land Clearing, Septic, and Foundation Excavation)
**Page targeted:** Drainage Excavation (`/services/drainage-excavation/` in the live Astro site; `/drainage-excavation/` per the topical map's original URL notation) — per the topical map (§6.6), a P1 core service page. This page has been referenced but never built out by **four** already-shipped pages: Grading & Leveling (an entire H2 comparing swales to French drains, explicitly deferring "a dedicated write-up on dug drainage systems" here), Foundation Excavation (an H2 on ORSC-required foundation drainage, explicitly framed as code education with install scope "confirmed per job"), Septic (a fully separate wastewater-dispersal system, already well-disambiguated), and the homepage/topical map (the originally-planned scope). Resolving the scope boundary across all four is this pack's central task.
**Built on, not duplicating:** all seven prior packs. Canonical business/location/certification entities (D&D Land Works, David Deggelman, Oregon CCB #261742, Lane County, Eugene, Springfield, Willamette Valley, the `GeneralContractor`/`Service` schema decisions) are reused verbatim from `../home/entity-inventory.csv`. Oregon811 and general OSHA Subpart P trench-safety figures are reused verbatim from `../excavation/07-oregon-authority.md`, not re-verified. The swale/positive-drainage-slope content stays owned by `../grading-leveling/`; the ORSC R405/R406/R408 code citations stay owned by `../foundation-excavation/`; the septic drainfield stays owned by `../septic/`.
**Status of underlying business:** Same zero-baseline greenfield status as all seven prior packs — no live indexed site beyond the pre-pipeline draft at `site/src/pages/services/drainage-excavation.astro`, no GBP, no review pipeline, no D&D-specific pricing or job history. That live page's content predates this research pipeline (same situation the grading-leveling pack found and corrected for its own live page) and is evaluated against this pack's scope-boundary findings in Section 0 below.

This file is the master synthesis. The future content brief should read only this file; the other 8 files in this folder are the supporting evidence and can be drilled into on demand.

---

## 0. Scope Boundary (read this before writing or editing any content for this page)

This page sits at the center of the most cross-referenced boundary situation of any page in this pipeline — four shipped or planned pages all touch "drainage" in some form. Each boundary below is derived directly from the shipped pages' own language, quoted rather than paraphrased where it matters, so there is no risk of contradicting a live commitment to readers.

### What stays on Grading & Leveling — surface swales, berms, and positive-slope regrading

The shipped `07-landing-pages/content/grading-leveling-content.md` carries a full H2, **"Swale or French Drain — What's the Difference?"**, with this comparison table, quoted verbatim:

> | | Swale | French Drain |
> |---|---|---|
> | What it is | A shallow, graded channel shaped into the land itself | A buried, perforated pipe surrounded by gravel |
> | How it works | Moves surface water by shaping the ground's own contour | Collects water and carries it away underground |
> | Is it a grading job? | Yes — this is D&D's territory | No — it's a subsurface drainage system, not confirmed as a current D&D service |

And states directly: *"A dedicated write-up on dug drainage systems is coming on our future [drainage excavation](/services/drainage-excavation/) page; this page covers surface grading and swales."*

**Rule for this page:** Grading & Leveling owns reshaping the ground's own contour — swales, berms, and correcting a negative slope to a positive one (ORSC §R401.3), all without burying anything new. THIS page does not re-explain that comparison table or re-derive ORSC §R401.3. It references the swale side of the comparison only to redirect the reader who needs that page instead, and picks up exactly where that table's right-hand column ends: the buried, constructed system.

### What stays on Foundation Excavation — ORSC code education only, install scope confirmed per job

The shipped `07-landing-pages/content/foundation-excavation-content.md` carries an H2, **"What Does Oregon Require for Foundation Drainage?"**, covering ORSC R405 (foundation drain), R406 (waterproofing/dampproofing), and R408 (crawlspace vapor retarder) as **general code education**, and states directly:

> "Whether foundation-drain and vapor-retarder installation falls under D&D's excavation and backfill scope or a separate foundation contractor's work is confirmed per job."

That page also already cross-links forward: *"This is a different system from a [septic drainfield](/services/septic/), which disperses wastewater, and from a yard-scale swale or [drainage excavation](/services/drainage-excavation/) that manages surface runoff."*

**Rule for this page, and the pack's central finding (see §5 below):** the ORSC R405 foundation drain is a *specific, code-triggered instance* of the exact same physical technique this page covers generally — a perforated pipe surrounded by gravel, collecting and conveying water. **This page is where D&D's actual French-drain-as-a-service content should live**, if and when confirmed with David (see the open item in §5 and `08-gap-analysis.md` Flag D). This page should explicitly acknowledge that when a French/perimeter drain is being installed *because* a new foundation's code requirement (ORSC R405) triggers it, the code detail lives on Foundation Excavation — cross-link there rather than re-deriving R403/R405/R406/R408. When a French drain is being installed for a general yard, retaining wall, or existing-structure drainage problem *not* tied to a new foundation's own code requirement, that's squarely this page's territory with no code citation needed at all.

### What stays on Septic — a separate wastewater-dispersal system

The shipped `07-landing-pages/content/septic-content.md` already fully disambiguates the septic drainfield from yard/surface drainage everywhere the topic could plausibly overlap (its own FAQ states plainly: *"Can I build, pave, or grade over my drainfield? No..."* framed entirely around the DEQ-regulated leach field, never conflated with stormwater). **Confirmed: this page does not need to re-litigate that distinction beyond a brief one-line disambiguation** — e.g., "a septic drainfield disperses wastewater and is a completely separate, DEQ-regulated system; see [Septic Install & Repair](/services/septic-install-repairs/) for that." Nothing further is required.

### What THIS page owns

Buried and dug drainage systems as their own constructed feature — the right-hand column of the grading-leveling comparison table, generalized and built out in full:

- **French drains** (general/yard/retaining-wall applications, not tied to a new foundation's own R405 requirement)
- **Curtain drains** (a shallower, less-expensive variant — zero competitor in this market defines this term at all)
- **Perimeter drains** around existing structures or retaining walls
- **Drainage trenching** generally — depth, slope, pipe material (corrugated vs. PVC), gravel backfill, filter fabric
- **Catch basins** and **culverts**
- **Dry wells**, including the real, sourced distinction that a dry well and a French drain are usually paired (drain conveys water TO a dry well), not substitutes for each other
- **Daylight discharge points** and **pop-up emitters** — the page's central "where does the water actually go" answer
- **Storm-drain tie-in permitting** — Eugene's EC §6.610 (verified directly) and Springfield's parallel connection requirement
- **Sump pumps** — one honest, brief disambiguating mention only; likely a plumbing/electrical trade's scope, not claimed as a D&D installation

### Net effect

If a draft of this page's content starts re-explaining what a swale is, re-deriving ORSC §R401.3's slope figures, re-deriving ORSC R405/R406/R408's code language, or building out septic drainfield content — stop. That content is already shipped elsewhere and duplicating it here would recreate exactly the cannibalization risk the topical map warns against (§16). This page's job is the buried/dug system, genuinely uncontested per `04-competitor-matrix.md`, and it is the page that finally makes good on two other shipped pages' explicit promises to send readers here.

---

## 1. Top 5 Keyword Targets

| # | Keyword | Intent | Why |
|---|---|---|---|
| 1 | **french drain installation eugene or** / **eugene oregon** | Commercial, decision-stage | Primary page target; matches this page's central, newly-resolved entity |
| 2 | **drainage excavation eugene or** / **lane county oregon** | Commercial, decision-stage | Matches the topical map's original page-naming convention (§6.6) and the current live page's title |
| 3 | **yard drainage trench cost oregon** / **french drain cost per linear foot** | Commercial, consideration-stage | Real, sourced ranges available ($10-$100+/ft depending on type — see `07-oregon-authority.md`) that zero competitors in this market currently publish |
| 4 | **where does french drain water go** | Informational, awareness-stage | Task-brief-named central content gap; the single strongest trust/expertise signal found in this entire pass |
| 5 | **swale or french drain which do i need** | Informational, consideration-stage | Task-brief-named decision-from-the-buyer's-side content, explicitly required to be new, not a repeat of grading-leveling's existing comparison table |

Full 131-row universe in `01-keyword-universe.csv`.

---

## 2. Top 10 Questions to Answer

Full list of 51 in `02-question-mine.md`. The 10 most load-bearing for this page specifically:

1. What's the difference between a French drain and a curtain drain?
2. How deep does a French drain need to be?
3. Where does the water from a French drain actually go?
4. Do I need a permit to tie a drain into the storm system in Eugene or Springfield?
5. Is a French drain the same as the drain required around my new foundation?
6. My yard was already regraded and it's still wet — what's next?
7. Can a French drain make my drainage problem worse (move it to another wet spot)?
8. What's the difference between a French drain and a dry well?
9. How much does a French drain or yard drainage system cost?
10. How long does a properly installed French drain last?

---

## 3. Top 10 Entities to Integrate

Full inventory in `03-entity-map.md` / `entity-inventory.csv`. Priority placement:

| Entity | Where to place |
|---|---|
| D&D Land Works, David Deggelman, Oregon CCB #261742 (reused canonical forms) | H1/first paragraph, schema, trust section — same as every prior page |
| French Drain | Dedicated H2 defining the term precisely and stating real depth/slope figures |
| Curtain Drain | A short, genuinely new-to-this-market comparison/definition section |
| Catch Basin, Dry Well, Culvert, Daylight Discharge Point | Definitional content answering "where does the water go" |
| Perforated Pipe (corrugated vs. PVC) + Drain Rock/Filter Fabric | A materials-specificity section |
| Eugene Stormwater Connection Permit (EC §6.610) + Springfield's parallel requirement | Dedicated authority section — this page's strongest citable civic fact |
| Grading & Leveling (sibling, NOT this page) | Explicit boundary statement + reference to its existing swale-vs-French-drain table, not a rebuild |
| Foundation Excavation (sibling, NOT this page's code citation) | Explicit boundary statement distinguishing a code-triggered ORSC R405 drain from a general drain, cross-linked |
| Septic Install & Repair (sibling, NOT this page) | One-line disambiguation only |
| `Service` schema type (nested under D&D's `GeneralContractor` entity) | Primary `@type` — reused decision from every prior pack |

---

## 4. Top 5 Content Gaps to Fill

Full scoring in `08-gap-analysis.md`. Highest-leverage gaps:

1. **Storm-drain tie-in permit gap** (score 50.0, tied #1) — Eugene's EC §6.610, verified directly, zero-competitor-covered
2. **"Where does the water go" gap** (50.0, tied #1) — daylight vs. dry well vs. permitted tie-in, this page's single strongest trust signal
3. **Swale-vs-French-drain decision from the buyer's side** (50.0, tied #1) — genuinely new content, not a repeat of grading-leveling's table
4. **French-drain-relocating-the-problem amateur mistake** (40.0) and **foundation-drain disambiguation** (40.0, tied) — both zero-cost, both resolve the cross-page confusion this page exists to fix
5. **Curtain drain definition** (40.0) — a term zero competitor in this market defines at all

---

## 5. Biggest Structural Opportunity (confirmed, not assumed) — and the pack's central open item

**Even the two competitors in this market who specifically name French drains — M4 Landworks and Pacific Earthworks — say nothing about depth, materials, permits, discharge destinations, or pricing.** Combined with the core 8-competitor set's near-total silence on buried drainage terminology (confirmed by direct re-fetch of Danco, All Dirt, and Heavy D on 2026-09-09), this is a genuinely open lane: the market recognizes French drains as a real, searched-for service (Pacific Earthworks even runs a dedicated `/french-drains` URL, independent validation that this deserves its own page rather than a line item), but nobody — local or the two drainage-specific competitors found — explains it with real specificity. See `04-competitor-matrix.md` for full detail.

**The central open item this pack does not resolve:** whether D&D Land Works actually installs French drains (or other buried drainage products) as a confirmed service, versus performing only the excavation/trenching for someone else's installation. `business-info.md` does not confirm it. The topical map (§6.6) explicitly frames this page as "excavation & grading FOR drainage, not manufactured drainage-product installation (French drains, culverts) unless verified," and instructs confirming scope with David. The shipped grading-leveling page states outright that a French drain is "not confirmed as a current D&D service." The current live `drainage-excavation.astro` page, written before this research pipeline existed, already lists "Installing French drains along foundations and retaining walls" as a bullet — but per the same discipline the grading-leveling pack applied to its own live page's out-of-scope content, **an unverified claim already being live is not the same as a confirmed fact**, and this pack does not treat it as one. See `08-gap-analysis.md` Flag D for the full reasoning. **This must be confirmed with David before the content brief locks the page's central service claim** — the page can ship honestly either way (as a confirmed installation service, or as excavation/trenching for a drainage system with product installation "confirmed per job," mirroring foundation-excavation's exact framing for the same underlying ambiguity), but it should not ship without that decision being made deliberately.

---

## 6. Recommended H1 / H2 Heading Map

**H1:** Drainage Excavation in Eugene, Springfield & Lane County, Oregon

**H2s (in order):**

1. Buried Drainage, Not Surface Grading — What This Page Covers *(scope-boundary intro — opens by resolving the cross-page confusion directly, referencing but not rebuilding grading-leveling's swale table)*
2. What Is a French Drain, and How Deep Does It Need to Be? *(the page's central definitional/authority section)*
3. French Drain vs. Curtain Drain — Which Do You Need? *(genuinely new comparison, zero competitor coverage)*
4. Swale or French Drain — Which One Actually Fixes Your Yard? *(task-brief-named decision-from-the-buyer's-side content, distinct from grading-leveling's existing table)*
5. Where Does the Water From a French Drain Actually Go? *(daylight vs. dry well vs. storm-tie-in — the page's strongest trust/expertise signal)*
6. Do I Need a Permit to Tie Into the Storm Drain in Eugene or Springfield? *(EC §6.610 — this page's strongest authority citation)*
7. Is This the Same Drain My New Foundation Is Required to Have? *(direct boundary answer, cross-linked to foundation-excavation)*
8. What Materials Go Into a Properly Built Drain? *(pipe type, gravel, filter fabric — Willamette Valley clay context)*
9. How Much Does Drainage Excavation Cost? *(real, general ranges by system type)*
10. Can a French Drain Make Drainage Worse? *(the amateur-mistake trust signal)*
11. Frequently Asked Questions *(FAQ block — see §8)*
12. Get Your Drainage Problem Scoped *(contact/CTA)*

Every H2 is phrased as a real, natural question or task under 10 words, matching the format established across all seven prior packs.

---

## 7. Content Format Plan (per H2)

| H2 | Format | Why | Schema unlock |
|---|---|---|---|
| 1. Buried drainage, not surface grading | Answer-first, 50-70 words | Resolves the cross-page scope confusion immediately | `Speakable` |
| 2. What is a French drain / depth | Answer-first (60-90 words), real depth/slope figures | This page's central citable passage | `Speakable` |
| 3. French drain vs. curtain drain | Comparison table — columns: French Drain / Curtain Drain (depth, purpose, cost, best use) | Multi-attribute, genuinely new-to-market comparison | none required |
| 4. Swale or French drain | Answer-first + short decision framework (surface problem vs. underground problem) | Decision-stage, resolves the buyer's actual question | `Speakable` |
| 5. Where does the water go | Bulleted list (daylight / dry well / storm-tie-in) + answer-first framing | Parallel destination options, the page's strongest trust signal | `ItemList`, `Speakable` |
| 6. Storm-drain tie-in permit | Answer-first (60-90 words), citing EC §6.610 by name | This page's strongest authority citation | `Speakable` |
| 7. Is this the foundation drain | Answer-first (60-80 words) + cross-link | Direct boundary answer | `Speakable` |
| 8. Materials | Bulleted list (pipe type, gravel, filter fabric) | Parallel, scannable material-spec items | `ItemList` |
| 9. Cost | Comparison table — columns: System Type / Typical Range / What Affects Price | Multi-attribute cost data, format-diversity requirement | none required |
| 10. Can a French drain make it worse | Answer-first, 60-80 words | Objection-handling, trust signal | `Speakable` |
| 11. FAQ | FAQPage-formatted Q&A, 10 questions | Standard | `FAQPage` |
| 12. CTA | Short answer-first + CTA block | Conversion-focused | none required |

At least one comparison table (#3, #9), one bulleted list (#5, #8), and format diversity across answer-first/table/list are included, per the parent methodology's format-diversity requirement.

---

## 8. FAQ Shortlist (10 questions for FAQPage schema)

Validated against `02-question-mine.md` and the confirmed near-zero competitor-coverage findings in `04-competitor-matrix.md`:

1. What's the difference between a French drain and a curtain drain?
2. How deep does a French drain need to be?
3. How much does a French drain or yard drainage system cost?
4. Where does the water from a French drain actually go?
5. Do I need a permit to tie a drain into the storm system in Eugene or Springfield?
6. What's the difference between a French drain and a dry well?
7. My yard was already regraded and it's still wet — what's next?
8. Is a French drain the same as the drain required around my new foundation?
9. Can a French drain make my drainage problem worse?
10. How long does a properly installed French drain last?

---

## 9. Required Schema

Reuses the confirmed schema.org research from the homepage pack (`GeneralContractor` is real and correct; `ExcavationContractor` does not exist) rather than re-verifying.

- **`Service`** (primary `@type`) with `name: "Drainage Excavation"`, `provider` → D&D Land Works `GeneralContractor` entity (`"@id": "https://www.ddlandworks.com/#business"`, matching the pattern shipped across every sibling page), `areaServed` (Lane County + Eugene/Springfield at minimum), `serviceType`
- `FAQPage` — for the 10-question shortlist above
- `BreadcrumbList` — Home → Services → Drainage Excavation
- `Speakable` — on the definitional, "where does the water go," permit, and boundary answer-first passages (§7)
- `ItemList` — for the discharge-destinations and materials lists
- Do **not** implement `AggregateRating`/`Review` until real reviews exist — same rule as every prior pack

---

## 10. Required Authority Signals

From `07-oregon-authority.md`, each with source + verification date:

1. **Eugene Municipal Code §6.610** (stormwater connection permit; who can pull it) — verified directly, this page's single strongest citation
2. **Springfield stormwater connection requirements / Ordinance 6464** — verified directly, less granular than Eugene's
3. **French drain/curtain drain/dry well/catch basin depth, slope, material, and cost specifications** — verified via national cost-guide and Oregon-specific contractor sourcing (Cojo Asphalt)
4. **Oregon DSL Removal-Fill Law** (reused from the excavation pack's pond-permitting research) — applied narrowly, only where a discharge point touches jurisdictional water
5. **Oregon811 and OSHA 1926 Subpart P** (reused verbatim from the excavation pack) — brief mention, full depth stays on `/excavation/`

Density target: same as every prior pack, roughly 1 statistic per 300-500 words, at least one external authority link per major section.

---

## 11. AI-Citation-Ready Summary Block (~150 words)

Drafted in full in `06-ai-citation-audit.md` §4; reproduced here for brief convenience:

> Drainage excavation is the digging and trenching that installs a buried drainage system — a French drain, curtain drain, or catch-basin-and-pipe network — to move water away from a wet yard, a foundation, or a low spot that surface grading alone can't fix. It's a different remedy than grading: grading reshapes the ground's own contour with a swale or a corrected slope, while drainage excavation buries a perforated pipe, wrapped in gravel and filter fabric, that collects and carries water to a discharge point — daylight at a lower elevation, a dry well, or a permitted tie-in to a public storm system. In Eugene, connecting a private drain to the city's stormwater system requires a permit under Municipal Code §6.610, issued only to the property owner or a licensed plumber or septic-tank-installation contractor. D&D Land Works provides drainage excavation for residential and commercial properties throughout Eugene, Springfield, and Lane County, Oregon, under Oregon CCB license #261742. Free estimates are available.

**Flag (carried from §5):** if David has not confirmed French drain installation as a D&D service by content-brief time, reframe the block's service claim more narrowly (excavation/trenching for a drainage system, installation confirmed per job), consistent with how foundation-excavation's own AI citation block handles the same underlying ambiguity for the ORSC R405 drain.

---

## 12. Trust-Killer Rebuttals

From `05-intent-triangulation.md` Table 3:

| Trust killer | Rebuttal to build into the page |
|---|---|
| A contractor who can't or won't explain where the water actually goes | State the three real destinations plainly (daylight, dry well, permitted tie-in) |
| Vague "we do drainage" language with no depth/material/slope specifics | State real, sourced figures throughout |
| No mention that a storm-drain tie-in requires a permit, and who can even pull it | Cite EC §6.610 plainly, including the property-owner/licensed-plumber-or-septic-installer restriction |
| Silence on whether D&D installs French drains | Do not overclaim — resolve per §5's open item before publishing the page's central claim |
| Confusing a French drain with the code-required foundation drain, or with a septic drainfield | One clear, cross-linked disambiguation for each |
| No acknowledgment a previous regrading attempt might have been the wrong fix | Address directly and honestly — not every drainage problem is a grading problem |
| Zero reviews / zero online presence at launch | Do not fabricate — same rule as every prior pack |

---

## 13. E-E-A-T Signal Plan

- **Experience:** Real job-site photos of a drainage trench, catch basin, or daylight discharge point as they become available — do not fabricate a portfolio, consistent with every prior pack.
- **Expertise:** The depth/slope/material specificity and the "where does the water go" content demonstrate genuine working knowledge zero competitors in this market currently show.
- **Authority:** Direct citation to Eugene's own municipal code — free authority-borrowing, entirely unclaimed by any competitor for this exact permit.
- **Trust:** Honest scope-boundary discipline against three sibling pages; honest framing of the open French-drain-service-confirmation item rather than overclaiming; real cost ranges, clearly labeled as general; no fabricated reviews or Lane-County-exact pricing.

---

## 14. Freshness Plan

- Re-verify Eugene's EC §6.610 fee amounts directly (the code-language facts are corroborated but the direct fetch returned a 403 this session) if the content brief/build happens more than 90 days after 2026-09-09.
- Re-verify Springfield's Ordinance 6464 stormwater requirements at the same cadence, given how recently they took effect (January 2024).
- Re-run this entire research pack if the content brief/build happens more than 90 days after 2026-09-09, consistent with every prior pack's freshness rule.

---

## Flags (per parent methodology, adapted)

- **Flag A — Listicle-dominated SERP: NOT confirmed**, consistent with the grading-leveling pack's finding. See `06-ai-citation-audit.md` §1.
- **Flag B — Anti-doorway gate:** Not applicable to this service page directly; future city×service drainage pages (marked `BUILD LATER` in the topical map's §14 matrix) must satisfy the topical map's 6-point anti-doorway checklist before publishing.
- **Flag C — Service × location matrix opportunity:** Not the primary opportunity for this page; carried forward generally per the topical map's existing roadmap.
- **Flag D — Open item (not a listicle/doorway/matrix flag, but load-bearing):** whether D&D installs French drains as a confirmed service — see §5 and `08-gap-analysis.md` Flag D. Must be resolved with David before the content brief locks this page's central claim.

---

## Quality Checklist

- [x] 100-150+ keywords captured (131 rows in `01-keyword-universe.csv`)
- [x] 40+ questions mined (51 in `02-question-mine.md`); 10 Oregon-specific; 7 objection-tagged; 11 Reddit/forum-sourced (proxy, same methodology limitation as all seven prior packs)
- [x] Core 8-competitor set re-checked for buried-drainage-specific content (3 direct-fetched: Danco, All Dirt, Heavy D); 2 newly-discovered drainage-specific competitors added and deep-dived (M4 Landworks, Pacific Earthworks) — `04-competitor-matrix.md`
- [x] Explicit Scope Boundary section against all three sibling pages (Grading & Leveling, Foundation Excavation, Septic) plus the topical map/homepage's originally-planned scope, quoting shipped content verbatim — §0 above
- [x] 14-gap scoring framework completed, five gaps directly tied to the task brief's named dimensions (storm-drain tie-in, "where does the water go," swale-vs-French-drain decision, amateur mistake, foundation-drain disambiguation) — `08-gap-analysis.md`
- [x] Flags A/B/C/D evaluated, Flag A found NOT to hold (consistent with grading-leveling, distinct from homepage/site-prep), Flag D (French-drain-service confirmation) surfaced as the pack's central open item
- [x] 5 Oregon/Lane County authority signals with source + verification date, including one figure verified by direct code citation (Eugene EC §6.610) — `07-oregon-authority.md`
- [ ] AI citation audit across 6 live AI chat systems — **not directly queryable** this session, same limitation as all seven prior packs; reasoned from SERP composition instead
- [x] Heading map composed, every H2 a natural question/task under 10 words
- [x] Content Format Plan completed for every H2, including two comparison tables and two bulleted lists
- [x] FAQ shortlist composed (10 questions)
- [x] AI citation block drafted (~150 words, first-30%-placement)
- [x] Entity map cross-references home/grading-leveling/foundation-excavation/septic packs' canonical entities rather than re-deriving them, and explicitly marks sibling-page entities as NOT this page's territory — `03-entity-map.md`, `entity-inventory.csv`
- [x] Current live page (`site/src/pages/services/drainage-excavation.astro`) read and evaluated against the confirmed scope boundary; the "cutting surface swales to redirect sheet flow" bullet identified as belonging to Grading & Leveling, not this page, and the "installing French drains" bullet identified as an unconfirmed claim requiring David's sign-off — both flagged for the content brief, not resolved here

## Honest Limitations of This Pack (disclose to the content-brief author and to David)

1. No direct AI chat-interface querying was possible, same as all seven prior packs — this audit is reasoned from SERP composition and direct-fetch competitor/content-source research.
2. **The single most consequential open item across this entire pack:** whether D&D Land Works installs French drains, curtain drains, dry wells, or catch basins as a confirmed service, or only excavates/trenches for someone else's installation. This determines the page's central service claim and is not resolved here — see §5 and `08-gap-analysis.md` Flag D.
3. Whether D&D installs or merely trenches for a sump pump is unconfirmed.
4. No Lane-County-specific per-linear-foot drainage pricing exists in any source found — all cost data is national/general, clearly labeled as such.
5. Eugene's EC §6.610 direct fetch returned a 403 this session; core facts are corroborated via search-engine summarization of the same code text, but exact fee amounts should be re-confirmed directly with Eugene's Engineering Department before quoting a specific dollar figure.
6. No Lane-County-specific storm-drain-tie-in code section equivalent to Eugene's was found for Springfield or unincorporated Lane County; both are presented as general rules with a direct-confirmation recommendation.
7. Real pricing specific to D&D's own drainage jobs, years in business, founding year, and other standard open items already tracked in `business-info.md` remain unconfirmed and are not fabricated here.
