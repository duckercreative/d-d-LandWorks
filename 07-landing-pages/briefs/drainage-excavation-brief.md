# Content Brief — D&D Land Works Drainage Excavation (`/services/drainage-excavation/`)

**Prepared:** 2026-09-09 · **Prepared by:** Ducker Creative
**Built from:** `01-research/page-research/drainage-excavation/` full research pack (files 00, 02, 03, 04, 05, 07 + entity-inventory.csv), cross-checked against `01-research/page-research/home/entity-inventory.csv`, `01-research/page-research/grading-leveling/entity-inventory.csv`, `01-research/page-research/foundation-excavation/entity-inventory.csv`, and `01-research/page-research/septic/entity-inventory.csv` for canonical entity reuse, `business-info.md`, `docs/design-system.md`, `07-landing-pages/content/grading-leveling-content.md` and `07-landing-pages/content/foundation-excavation-content.md` (both read closely for their exact drainage-related sections, cross-link language, and the JSON-LD `@id` pattern), and the current live page at `site/src/pages/services/drainage-excavation.astro`.
**Methodology note:** Same adaptation as all seven prior briefs (`home-brief.md`, `site-preparation-brief.md`, `excavation-brief.md`, `grading-leveling-brief.md`, `land-clearing-brief.md`, `septic-brief.md`, `foundation-excavation-brief.md`) — this project's `content-briefs` skill was written for a prior HVAC client and references files that don't exist here. Dropped/substituted with the real D&D Land Works research files throughout.
**Pipeline position:** Eighth page through this project's content pipeline. **This is a content-expansion/restructure brief, not a greenfield brief** — a real page already exists and is live in the Astro codebase, but it predates this research pipeline and carries the single largest scope-boundary and service-confirmation risk of any page in the series. See §1 and the Critical Open Item box below before anything else.
**URL note (settled, not an open item):** Targets `/services/drainage-excavation/`, matching the file path `site/src/pages/services/drainage-excavation.astro` already live in the Astro codebase and the task instruction. No URL move needed.
**Entity reuse:** All canonical business/location/certification entities (D&D Land Works, David Deggelman, Oregon CCB #261742, Oregon DEQ, Lane County, Eugene, Springfield, Willamette Valley, the `GeneralContractor`/`Service` schema decisions) are reused verbatim from `home-brief.md` §11. The `Service.provider` reference uses the exact `@id` already shipped across every sibling page's JSON-LD (`https://www.ddlandworks.com/#business`). Oregon811 and the general OSHA Subpart P trench-safety figures are reused verbatim from `excavation-content.md`, not re-derived.

---

## CRITICAL OPEN ITEM — READ BEFORE WRITING A SINGLE SENTENCE OF THIS PAGE

**This page's central service claim — whether D&D Land Works installs French drains, curtain drains, dry wells, or catch basins as a confirmed service — is NOT confirmed fact.** This is the single highest-priority open item in this brief, ranked above the storm-drain-permit citation and above the "where does the water go" content, because it determines what the entire page is allowed to claim.

- `business-info.md` does not list French-drain installation, or any buried-drainage-product installation, among D&D's services or USPs.
- The shipped `grading-leveling-content.md` states directly, in its swale-vs-French-drain table: *"Is it a grading job? ... No — it's a subsurface drainage system, not confirmed as a current D&D service."* And later: *"If a French drain is specifically what your property needs, confirm that scope with us directly rather than assuming it's included."*
- The shipped `foundation-excavation-content.md` handles the physically-identical technique (the ORSC R405 foundation drain) the same way: *"Whether foundation-drain and vapor-retarder installation falls under D&D's excavation and backfill scope or a separate foundation contractor's work is confirmed per job."*
- The **current live** `drainage-excavation.astro` page, written before this research pipeline existed, already lists "Installing French drains along foundations and retaining walls" and "Trenching for perforated pipe and drain rock" as bullets. Per the exact discipline `land-clearing-brief.md` applied to its own live page's out-of-scope tree-felling/stump-grubbing bullets, **an unverified claim already being live is not the same as a confirmed fact**, and this brief does not treat it as one.

**Instruction to the content-create step:** write this page using the **conservative default framing** below unless David confirms otherwise before drafting begins:

> D&D Land Works excavates and trenches for a buried drainage system — cutting the trench to depth and slope, setting and backfilling drain rock, pipe, and filter fabric. Whether the specific drainage product (French drain, catch basin, dry well) installation is D&D's own scope or coordinated with another trade is confirmed per job, mirroring `foundation-excavation-content.md`'s exact framing for the ORSC R405 drain.

Do **not** write this page as if French-drain installation is a flatly confirmed, standalone D&D offering. Do not remove the current live page's French-drain bullets as if they were never there (that would look like an unexplained retreat if anyone compares versions) — instead, reframe them using the conservative language above. Every section below (§5's AI citation block, §6's H2 guidance, §7's unique angle, §8's FAQ answers, §14's authority signals) is written to work correctly under this conservative framing, and to be trivially strengthened if David confirms the fuller claim. **This must be resolved with David before the page ships with confident, unhedged "D&D installs French drains" language anywhere in visible body copy.** See Open Items at the end of this document for the full resolution path.

---

## 1. Page Metadata

| Field | Value |
|---|---|
| **Canonical URL** | `/services/drainage-excavation/` |
| **Current live URL** | `/services/drainage-excavation/` (file: `site/src/pages/services/drainage-excavation.astro`) — already matches; no URL move needed |
| **Slug** | `drainage-excavation` |
| **Page type** | Core service page — P1 priority per the topical map, and the page that finally makes good on **two other shipped pages' explicit promises to send readers here**: Grading & Leveling's "a dedicated write-up on dug drainage systems is coming on our future drainage excavation page," and Foundation Excavation's cross-link naming this page for "a yard-scale swale or drainage excavation that manages surface runoff." |
| **Primary keyword** | `drainage excavation eugene or` / `drainage excavation lane county oregon` (matches the topical map's original page-naming convention and the current live page's title) |
| **Co-primary keyword** | `french drain installation eugene or` / `french drain installation eugene oregon` — **frame per the Critical Open Item above**; do not let this keyword's phrasing push the page into an unhedged installation claim |
| **Secondary keywords** | `yard drainage trench cost oregon` / `french drain cost per linear foot` (real, sourced ranges zero competitors publish); `where does french drain water go` (the page's single strongest trust/expertise content gap); `swale or french drain which do i need` (genuinely new decision-from-the-buyer's-side content, not a repeat of grading-leveling's table) |
| **Semantic terms** (must appear at least once) | French drain, curtain drain, perimeter drain, drainage trenching, catch basin, dry well, culvert, daylight discharge, pop-up emitter, perforated pipe, corrugated vs. PVC, drain rock, filter fabric, storm-drain tie-in, Eugene Municipal Code §6.610, Springfield Ordinance 6464, Oregon CCB #261742, licensed and bonded, free estimate |
| **Search intent** | Commercial, decision-stage for the primary/co-primary terms; the "where does the water go," swale-vs-French-drain, and curtain-drain terms are consideration/informational-stage — this page's clearest AI-citation opportunity, per `00-research-pack.md` §1 |
| **Current state / baseline** | A real, live page exists today with a genuinely serviceable opening hook ("Water Goes Where the Grade Sends It") and a correct high-level bulleted list (swales, French drains, trenching, culverts, daylighting, correcting bad grading). It has **zero** of: any depth/slope/material specificity, any cost content, the storm-drain tie-in permit fact, the "where does the water go" explainer, the curtain-drain/dry-well/catch-basin definitions, the swale-vs-French-drain-vs-foundation-drain scope boundaries against its three sibling pages, or an FAQ. It also contains two problems this brief must correct, not silently preserve: (1) the bullet "Cutting surface swales to redirect sheet flow" belongs to Grading & Leveling's territory, not this page's, per the confirmed scope boundary in §6 below — the same kind of cross-page leakage `land-clearing-brief.md` and `grading-leveling-brief.md` each found and corrected on their own live pages; and (2) the bullet "Installing French drains along foundations and retaining walls" is the unconfirmed service claim flagged in the Critical Open Item box above. Its Related Services grid currently points to `/services/utility-excavation/` and `/services/slope-stabilization/`, neither of which appears to be a live route in the current site architecture based on the sibling briefs' internal-link patterns — flag for dev to confirm before build (see Open Items). This is a content-expansion/restructure brief, not a rewrite-from-nothing brief — the opening hook and the high-level "what this covers" framing should be kept and built around, with the two corrections above applied. |

---

## 2. Intent & Audience

- **Primary ICP:** A Lane County homeowner with a chronic wet-yard problem — standing water that doesn't fully dry out for weeks after rain, a damp crawlspace, or a low spot near the driveway — who has often **already tried surface grading and it didn't fix the problem**, because the water needed to go underground, not just be redirected across the surface. Secondary ICP: a new homeowner who just closed on a house with a visibly damp crawlspace and doesn't know whether that's a French-drain problem or the foundation drain a builder should have installed under code; a rural Lane County property owner with a low spot near a driveway trying to decide between a French drain, a culvert, or more gravel; a commercial property owner needing a parking-lot catch-basin-and-pipe system sized correctly ahead of a site development permit.
- **The defining difference from every sibling page's intent profile:** unlike a buyer choosing site prep, excavation, or land clearing, this buyer has frequently **already spent money on a fix that didn't work** (a regrade, a DIY drain, a previous contractor's vague "we do drainage" job) and is now specifically suspicious of vague reassurance. Per `05-intent-triangulation.md`, the strongest trust signal on this page isn't "we show up and do good work" — it's "this contractor can actually explain, with real numbers, where the water goes and why the last fix didn't work."
- **State of mind — the sharpest version of this pipeline's recurring "distrust of vague answers" pattern:**
  1. They don't know if their situation is a grading problem (reshape the surface) or a drainage problem (bury a pipe) — and a previous regrade that didn't help is itself confusing evidence, not proof either way.
  2. They suspect (per Table 1, `05-intent-triangulation.md`) that a poorly built French drain just moves standing water to a different wet spot in the yard — a real, documented amateur/unlicensed-installer failure mode, not a hypothetical.
  3. They don't know where the water is even supposed to go once it's collected — daylight, a dry well, or the storm system — and a contractor who can't answer that clearly reads as someone who doesn't actually know what they're doing.
  4. If their damp crawlspace turns out to be a new-construction code issue (the ORSC R405 foundation drain) rather than a general yard problem, they don't know which of two pages, or two different contractors, they actually need.
  5. They're worried about a permit they don't know exists — tying a new drain into the city storm system — and a contractor who doesn't mention it at all is a red flag once they learn (often after the fact) that it was required.
- **What they need to believe before calling:**
  1. D&D can explain, with real depth/slope/material numbers, what a proper French drain or curtain drain actually looks like — not a vague "we do drainage."
  2. D&D knows exactly where the collected water is supposed to go (daylight, dry well, or a permitted storm-system tie-in), and won't build a drain that just relocates the problem.
  3. If a previous grading fix didn't work, D&D can explain honestly why — not every water problem is a grading problem, and that's not a sign the earlier work was done badly.
  4. D&D knows about, and will handle correctly, the Eugene/Springfield storm-drain tie-in permit most homeowners and even most contractors in this market never mention.
  5. D&D is honest about what part of a drainage job it does itself and where the line is — for the same reason `foundation-excavation-content.md` frames the R405 drain's install scope as "confirmed per job," this page must not overclaim a confirmed installation service it can't yet back up. See the Critical Open Item box above.

---

## 3. Voice & Angle

- **Writing voice:** Per `docs/design-system.md` v1.2 (Outfit for display/headings, Poppins for body) — the same voice as every prior brief in this series: a plain-spoken, no-fluff Lane County excavation contractor talking directly to a homeowner who has a genuinely frustrating, possibly already-failed drainage problem. This page in particular should lean into calm, specific honesty rather than reassurance — the buyer has often already been let down once (a regrade that didn't help, or a vague "we do drainage" quote), so vague confidence reads as another version of the same failure. Short, declarative sentences for the depth/slope figures and the storm-drain permit rule (this page's two most quotable, most citable passages); slightly longer only for the "where does the water go" explainer and the swale-vs-French-drain decision framework.
- **Required Lane County / Oregon-specific detail (minimum 5, per `07-oregon-authority.md`):**
  1. **Eugene Municipal Code §6.610 (stormwater connection permit) — VERIFIED, cite normally, this page's single strongest citation.** No person may connect a drain, downspout, or other conduit carrying stormwater to Eugene's public storm system without paying required fees and obtaining a permit from the City Engineer. Permits are issued **only** to a property owner (for their own residence) or a licensed plumber or licensed septic-tank-installation contractor — a real, specific, checkable restriction on who can even pull this permit, not just "a permit is required." Zero of the 5 drainage-specific competitors examined mention this anywhere.
  2. **Springfield's stormwater connection requirements (Development Code, Ordinance 6464, effective January 8, 2024) — VERIFIED, less granular than Eugene's, present as a general rule.** A connection permit is required to tie into the public storm system or discharge to a waterway; no single code section as specific as Eugene's EC §6.610 was found, so state this one with a "confirm exact process with Springfield's Development & Public Works Department" recommendation rather than Eugene's level of certainty.
  3. **French drain / curtain drain depth, slope, and material specifications — VERIFIED via national cost-guide and Oregon-specific contractor sourcing (Cojo Asphalt).** Standard yard-drainage depth 18-24 inches (as shallow as 8-12 inches for surface-water-only applications; 4-6 feet when tied to a footing); roughly 1% slope, about 1 inch of drop every 8-10 feet; rigid PVC vs. flexible corrugated pipe as a genuine material trade-off; washed drain rock wrapped in filter fabric.
  4. **Willamette Valley silty clay soil — reused/extended from the home and grading-leveling packs, applied to a new context here.** This clay is both why standing-water problems are so common in this market in the first place, and why filter fabric matters more here than in sandier soils — without it, silt migrates into the gravel bed and clogs the system faster.
  5. **Oregon DSL Removal-Fill Law — reused narrowly from the excavation pack's pond-permitting research.** Relevant only if a drain's discharge point is a mapped wetland, stream, or other jurisdictional water — most daylight or dry-well discharges do not trigger it; state this honestly as a narrow, situational rule, not a blanket requirement.
- **Insider/practitioner detail that signals real local expertise (use at least 2):**
  - Naming that a French drain and a dry well are usually **paired, not substitutes** — the drain conveys water TO a dry well, rather than a dry well being an alternative to a French drain. Zero competitor in this market explains this pairing.
  - Naming the specific amateur/unlicensed-installer failure mode directly: a French drain with no daylight point, no dry well, and no permitted storm-tie-in doesn't drain anywhere — it just relocates standing water underground to another wet spot. This is the page's single strongest trust signal, per the task brief's own framing and `08-gap-analysis.md` Gap #4.

---

## 4. E-E-A-T Requirements

- **Experience (minimum 2 signals):** The existing live page's real, workable opening framing (a flooded crawlspace, a soggy backyard, a driveway that turns into a creek — kept, not discarded); a materials/process-level description of how a trench actually gets cut to a consistent slope and backfilled with rock and fabric close to a structure.
- **Expertise (minimum 3 signals):** The real depth/slope/material specificity in §3.3 above, matched against zero competitor coverage; the "where does the water go" explainer (daylight vs. dry well vs. permitted tie-in) as a genuine diagnostic framework, not a definitions list; the French-drain-vs-curtain-drain-vs-dry-well-vs-catch-basin distinctions, each defined precisely where this market's competitors either don't name the term at all or name it without defining it.
- **Authority (minimum 3 signals):** Oregon CCB #261742 in visible body copy (reused from the live page, keep it); a direct outbound link to Eugene's Municipal Code §6.610 — free authority-borrowing, entirely unclaimed by any competitor for this exact permit; a direct outbound link to Springfield's stormwater/Development Code page.
- **Trust (minimum 4 signals):** The Critical Open Item's conservative service framing applied consistently everywhere the page could otherwise overclaim (no "D&D installs French drains" stated flatly as an established fact); three explicit, one-line-or-short-paragraph scope-boundary statements against Grading & Leveling, Foundation Excavation, and Septic (see §6); an honest acknowledgment that a previous regrading attempt failing doesn't mean it was done badly — some problems are underground problems, not surface ones; no fabricated pricing, review counts, or years-in-business.

---

## 5. AI Citation Target

Adapted from `00-research-pack.md` §11/§12 (`06-ai-citation-audit.md` §4), with the Critical Open Item's conservative framing applied per that section's own flag ("if David has not confirmed French drain installation as a D&D service by content-brief time, reframe the block's service claim more narrowly... consistent with how foundation-excavation's own AI citation block handles the same underlying ambiguity"). This brief resolves that flag now, since the open item remains unconfirmed at brief-writing time:

> Drainage excavation is the digging and trenching that installs a buried drainage system — a French drain, curtain drain, or catch-basin-and-pipe network — to move water away from a wet yard, a foundation, or a low spot that surface grading alone can't fix. It's a different remedy than grading: grading reshapes the ground's own contour with a swale or a corrected slope, while drainage excavation buries a perforated pipe, wrapped in gravel and filter fabric, that collects and carries water to a discharge point — daylight at a lower elevation, a dry well, or a permitted tie-in to a public storm system. In Eugene, connecting a private drain to the city's stormwater system requires a permit under Municipal Code §6.610, issued only to the property owner or a licensed plumber or septic-tank-installation contractor. D&D Land Works excavates and trenches for buried drainage systems for residential and commercial properties throughout Eugene, Springfield, and Lane County, Oregon, under Oregon CCB license #261742. Free estimates are available.

**Placement:** first 30% of the page's body content, immediately after the opening paragraph — same placement rule as every prior brief.

**Note on the service-claim wording inside this block:** "excavates and trenches for buried drainage systems" is deliberately narrower than the research pack's own draft ("D&D Land Works provides drainage excavation for residential and commercial properties..."), which read closer to a flat installation claim. This brief's version is the conservative, defensible framing per the Critical Open Item box — **if David confirms French-drain/catch-basin/dry-well installation as a genuine D&D service before content-create, this sentence should be broadened back to match the fuller claim**, and the FAQ answers in §8 that use the same hedge should be strengthened in parallel. Do not ship a version stronger than this without that confirmation.

---

## 6. Content Structure

**Word count target: 2,100–2,600 words.** Justification: `04-competitor-matrix.md` Matrix A found the most complete content vacuum of any page in this pipeline — of the 5 competitors checked with drainage-specific detail, 5/5 mention "drainage" only as an undefined line item, and even the two who specifically name French drains (M4 Landworks, Pacific Earthworks) score **0/5** on every one of: curtain drain, catch basin, dry well, pricing, permit/tie-in mention, and material specificity. That means this page is not extending a thin but present body of competitor content (as `grading-leveling` or `foundation-excavation` were) — it is defining, from zero, ten distinct entities (French drain, curtain drain, perimeter drain, catch basin, dry well, culvert, daylight discharge, pop-up emitter, perforated pipe material choice, drain rock/filter fabric) that nobody in this market currently explains at all. Arithmetic, following the research pack's own Content Format Plan (`00-research-pack.md` §7): a 100-150 word opening + the ~150-word AI citation block + ten H2 sections (three short 50-90 word `Speakable` answers for the scope-intro, foundation-drain-disambiguation, and can-it-make-it-worse sections; a 60-90 word definitional answer for the French-drain/depth section; a 150-180 word comparison table for French-drain-vs-curtain-drain; a 70-90 word decision-framework answer for swale-vs-French-drain; a 120-150 word bulleted-list section for "where does the water go"; a 70-90 word permit answer; a 100-130 word bulleted-list materials section; a 150-180 word cost comparison table) + a 10-question FAQ block (450-650 words, same per-question length as every prior pack) + a Related Services intro restating all three scope boundaries (60-90 words) + a closing CTA (50-80 words). That sums to roughly 2,050–2,600 words — narrower than Foundation Excavation's or Land Clearing's high end (this page's win is definitional precision and format diversity across ten new entities, not breadth), but meaningfully deeper than the field's near-total absence of coverage.

**H1:** Drainage Excavation in Eugene, Springfield & Lane County, Oregon
*(source: `00-research-pack.md` §6, matching the H1 pattern already shipped on every sibling page — "[Service] in Eugene, Springfield & Lane County, Oregon." The current live page's H1 is the shorter "Drainage Excavation"; flag for David/dev before build, same as every prior brief's H1-change flag. The URL/slug does not change.)*

**Opening paragraph guidance (first 100-150 words):** Open by naming the real problem this page solves — water that's already below or at grade, not fixable by reshaping the surface alone — and immediately resolve the cross-page confusion the task brief identifies as this page's defining challenge: this is the buried, dug system, different from Grading & Leveling's surface swales and different from the ORSC-required foundation drain. Reference, but do not rebuild, Grading & Leveling's existing swale-vs-French-drain table. This page is the "dedicated write-up on dug drainage systems" that page's own copy promises is coming — the opening paragraph should read as delivering on that promise directly. Follow immediately with the AI citation block from §5.

**H2 sections, in order** (every H2 traces to a competitor-matrix finding or a top gap — cited inline; heading text and order per `00-research-pack.md` §6):

| # | H2 (exact text) | Traces to | Format |
|---|---|---|---|
| 1 | Buried Drainage, Not Surface Grading — What This Page Covers | Structural requirement — resolves the cross-page scope confusion the task brief names as this page's defining challenge before anything else; references but does not rebuild Grading & Leveling's swale-vs-French-drain table | Answer-first, 50-70 words; `Speakable` |
| 2 | What Is a French Drain, and How Deep Does It Need to Be? | Matrix A: 0/5 competitors give a depth figure; the page's central definitional/authority section | Answer-first, 60-90 words, real depth/slope figures; `Speakable` |
| 3 | French Drain vs. Curtain Drain — Which Do You Need? | Gap #6 (score 40.0) — 0/5 competitors define "curtain drain" at all, or distinguish it from a French drain | Comparison table — columns: French Drain / Curtain Drain (depth, purpose, typical cost, best use) |
| 4 | Swale or French Drain — Which One Actually Fixes Your Yard? | Gap #3 (score 50.0, tied #1) — task-brief-named decision-from-the-buyer's-side content, explicitly required to be new, not a repeat of Grading & Leveling's existing table | Answer-first + short decision framework (surface problem vs. underground problem), 70-90 words; `Speakable` |
| 5 | Where Does the Water From a French Drain Actually Go? | Gap #2 (score 50.0, tied #1) — the single clearest trust/expertise signal in this entire research pass; 0/5 competitors explain this at all | Bulleted list (daylight / dry well / permitted storm-tie-in) + answer-first framing, 120-150 words; `ItemList`, `Speakable` |
| 6 | Do I Need a Permit to Tie Into the Storm Drain in Eugene or Springfield? | Gap #1 (score 50.0, tied #1) — Eugene EC §6.610, verified directly, zero-competitor-covered; this page's strongest authority citation | Answer-first, 70-90 words, citing EC §6.610 by name; `Speakable` |
| 7 | Is This the Same Drain My New Foundation Is Required to Have? | Gap #5 (score 40.0, tied) — direct boundary answer against Foundation Excavation's ORSC R405 code education | Answer-first, 60-80 words + cross-link; `Speakable` |
| 8 | What Materials Go Into a Properly Built Drain? | Matrix A: 0/5 competitors show material specificity (pipe type, gravel, filter fabric) | Bulleted list (pipe type, gravel, filter fabric — 3 parallel items), Willamette Valley clay context; `ItemList` |
| 9 | How Much Does Drainage Excavation Cost? | Matrix A: 0/5 competitors show any pricing for any drainage service — a named differentiator | Comparison table — columns: System Type / Typical Range / What Affects Price (rows: French drain, curtain drain, dry well, catch basin) |
| 10 | Can a French Drain Make Drainage Worse? | Gap #4 (score 40.0, tied) — task-brief-named amateur-mistake angle, a real trust/expertise signal | Answer-first, 60-80 words; `Speakable` |
| 11 | Frequently Asked Questions | Matrix B: 0/5 competitors run a real FAQ on buried drainage topics | `FAQPage`-formatted Q&A, 10 questions (see §8 below) |
| 12 | Related Services *(non-H2 UI component — the existing `ServiceCard` grid)* | Structural continuity — restate all three scope boundaries plainly in the intro copy; correct the current grid's links (see §1 baseline note, flag routes for dev) | Card grid, existing `ServiceCard` component |
| 13 | Get Your Drainage Problem Scoped | Matches the current live page's existing CTA block closely ("Get the Water Moving") — keep this copy, it already fits | Short answer-first + CTA block |

Format minimums are satisfied: 2 comparison tables (H2 #3, #9), 2 bulleted lists (H2 #5, #8) — exceeding the parent methodology's format-diversity rule, appropriate given this page defines ten previously-unexplained entities.

### Boundary Note — What This Page Owns vs. What Stays on Three Sibling Pages

This is the single most important structural instruction in this brief besides the Critical Open Item box above, per the task's explicit requirement and `00-research-pack.md` §0's dedicated scope-boundary section:

- **Grading & Leveling owns (do NOT re-derive here):** surface swales, berms, and correcting a negative slope to a positive one (ORSC §R401.3) — reshaping the ground's own contour without burying anything new. Its shipped swale-vs-French-drain comparison table is the canonical reference; H2 #1 and H2 #4 reference it by name and link to it, but do not rebuild it or restate its ORSC §R401.3 slope figures.
- **Foundation Excavation owns (do NOT re-derive here):** ORSC R405 (foundation drain), R406 (waterproofing/dampproofing), and R408 (crawlspace vapor retarder) as code education. That page explicitly leaves install-scope "confirmed per job" for the exact same physical technique (a perforated pipe in gravel) this page covers generally. H2 #7 states the boundary directly — where a French/perimeter drain happens to also serve a new foundation's own code requirement, the code detail lives on Foundation Excavation; cross-link there rather than citing R403/R405/R406/R408 here. When a French drain is for a general yard, retaining wall, or existing-structure problem *not* tied to a new foundation's code requirement, that's this page's territory with no code citation needed.
- **Septic Install & Repair owns (do NOT re-derive here):** the septic drainfield, a completely separate, DEQ-regulated wastewater-dispersal system (OAR 340-071). This page needs only the one-line disambiguation already modeled in `02-question-mine.md` Q30 — a brief mention that a drainage problem and a septic drainfield issue are unrelated systems that happen to share the word "drain" — not a rebuild of septic's own existing FAQ clarity.
- **This page owns (genuinely new):** French drains, curtain drains, perimeter drains not tied to a new foundation's own code requirement, drainage trenching generally (depth, slope, pipe material, gravel backfill, filter fabric), catch basins, dry wells, culverts, daylight discharge points, pop-up emitters, and storm-drain tie-in permitting (Eugene EC §6.610, Springfield's parallel requirement). A brief, honest, non-claimed disambiguating mention of sump pumps as a likely plumbing/electrical trade's scope is appropriate; do not claim D&D installs them.
- **Instruction to the content writer:** H2 #1 must state the scope boundary against Grading & Leveling explicitly and by name in the opening section, and H2 #7 must do the same against Foundation Excavation. If a draft of this page's content starts re-explaining what a swale is, re-deriving ORSC §R401.3's slope figures, re-deriving ORSC R405/R406/R408's code language, or building out septic drainfield content, stop — that content is already shipped elsewhere, and duplicating it here recreates the exact cannibalization risk `00-research-pack.md` §0 warns against.

---

## 7. Unique Angle

Pulled directly from the top gaps in `08-gap-analysis.md` — every entry is a specific, evidence-based differentiator, not a slogan:

1. **States plainly where the water actually goes** — daylight, a dry well, or a permitted storm-drain tie-in — where zero of 5 drainage-specific competitors explain this at all (`08-gap-analysis.md` Gap #2, tied top score 50.0). This is the single most novel, most trust-building claim on this page, and it directly answers a real forum question captured in `02-question-mine.md` #50 ("Where does the water that is collected by a french drain go?").
2. **Cites the real Eugene storm-drain tie-in permit (EC §6.610), including who can legally pull it** — a property owner or a licensed plumber/septic installer, not just "a permit may be required" — where zero of 5 competitors mention this permit exists at all (`08-gap-analysis.md` Gap #1, tied top score 50.0).
3. **Answers "which one do I actually need" from the buyer's own situation** (a surface problem the ground's own shape can fix, versus an underground problem that needs a buried pipe) rather than repeating the swale-vs-French-drain feature comparison already shipped on Grading & Leveling (`08-gap-analysis.md` Gap #3, tied top score 50.0 — explicitly required by the task to be genuinely new content).
4. **Names the amateur/unlicensed-installer failure mode directly** — a French drain with no real destination just relocates standing water to another wet spot — a real trust/expertise signal per the task brief's own framing, where zero competitors acknowledge this failure mode exists (`08-gap-analysis.md` Gap #4, score 40.0).
5. **Defines "curtain drain" precisely and distinguishes it from a French drain**, a term zero competitor in this market defines at all despite it being a genuinely useful, lower-cost alternative for a shallower problem (`08-gap-analysis.md` Gap #6, score 40.0).

These five must surface in the opening paragraph or immediately after (at minimum the scope-boundary statement and the "where does the water go" framing, introduced early), in their dedicated H2 sections (#1/#5, #6, #4, #10, #3 respectively), and echoed briefly in the closing CTA copy.

---

## 8. FAQ Section

10 questions, sourced verbatim from `02-question-mine.md`'s "FAQ Shortlist for This Page," cross-checked against `04-competitor-matrix.md` Matrix B: **no FAQ content specific to buried drainage was found on any of the 5 competitors examined for this page**, so every question below is uncontested ground.

| # | Question | Source in question-mine | Answer guidance (40-90 words, direct answer first) |
|---|---|---|---|
| 1 | What's the difference between a French drain and a curtain drain? | Decision Q22 | Lead with the real distinction: a French drain runs deeper (18-24 in. standard, deeper near a footing) and intercepts water along its length; a curtain drain is shallower (~2 ft) and less expensive, built to intercept near-surface water over a broader area rather than deep groundwater at one point. |
| 2 | How deep does a French drain need to be? | Process Q15 | Lead with the range: 18-24 inches is standard for yard drainage; as shallow as 8-12 inches for surface-water-only applications; 4-6 feet when tied to a footing's own depth. Depth is a real design decision, not a fixed number, based on what problem the drain is solving. |
| 3 | How much does a French drain or yard drainage system cost? | Cost Q7/Q10 | Lead with the range: roughly $10-$100+ per linear foot depending on depth and type — shallow exterior drains run $10-$35/ft, deep footing-level drains run $45-$85/ft, curtain drains run $10-$25/ft. These are general national ranges, not a Lane County quote; a free on-site estimate is the only way to price a specific yard. |
| 4 | Where does the water from a French drain actually go? | Reddit/forum Q50 (LawnSite) | Lead with the direct answer: to one of three real destinations — daylight at a lower point on the property, a dry well that slowly infiltrates it back into the soil, or a permitted tie-in to the city storm system. A drain with none of these just relocates standing water to another wet spot underground, which is a known failure mode of a poorly designed system. |
| 5 | Do I need a permit to tie a drain into the storm system in Eugene or Springfield? | Oregon-specific Q42/Q43 | Lead with "yes, in both cities" — Eugene requires a permit under Municipal Code §6.610, issued only to the property owner or a licensed plumber or septic-tank-installation contractor; Springfield requires a similar connection permit under its Development Code. Confirm exact process directly with each city's engineering or public works department. |
| 6 | What's the difference between a French drain and a dry well? | Decision Q23 | Lead with "they're usually paired, not substitutes" — a French drain conveys water continuously along a trench to an exit point, while a dry well collects a volume of water and slowly releases it back into the surrounding soil; a French drain often discharges into a dry well rather than the two being alternative choices for the same problem. |
| 7 | My yard was already regraded and it's still wet — what's next? | Decision Q26, task-brief-named | Lead with the honest answer: not every water problem is a surface problem. Grading corrects the ground's own slope, but if water is collecting below or at grade, it needs a buried drain to carry it away — that's not a sign the earlier grading work was done badly, it's a different remedy for a different situation. |
| 8 | Is a French drain the same as the drain required around my new foundation? | Decision Q27 `[boundary]` | Lead with "physically similar, legally different" — the ORSC-required foundation drain (see [Foundation Excavation](/services/foundation-excavation/)) is the same basic technique, a perforated pipe in gravel, but it's a code-triggered requirement tied to a building permit. A general yard or retaining-wall French drain not tied to a new foundation's own code requirement is this page's territory. |
| 9 | Can a French drain make my drainage problem worse? | Objection Q36, task-brief-named | Lead with "a poorly built one can" — a French drain with no real discharge destination (no daylight, no dry well, no permitted tie-in) doesn't solve the problem, it just moves standing water to another spot, often underground where it's harder to diagnose. This is a known mistake with unlicensed or DIY installs, not an inherent flaw in a properly designed system. |
| 10 | How long does a properly installed French drain last? | Post-service Q31 | Lead with "15-25 years or more" for a properly built system with the right pipe, gravel, and filter fabric — sourced from general industry claims, not a D&D-specific figure. What shortens that lifespan: no filter fabric (silt migration in Willamette Valley clay), the wrong pipe type, or no real discharge point. |

**FAQ answer service-claim discipline:** per the Critical Open Item box, none of the answers above should be written as if French-drain installation is a flatly confirmed D&D service — answers 1, 2, 3, 6, and 10 in particular describe the technique and its properties (genuinely educational, uncontested content) without stating "D&D installs this" as a settled fact. No FAQ answer should fabricate a Lane-County-exact price, a specific permit fee, or a D&D-specific completed-project claim.

---

## 9. Internal Links

**IN (what will link to this page)** — per the topical map's hub-and-spoke rule, and per the two sibling pages' own already-shipped promises to send readers here:

| From | Anchor text example | Placement |
|---|---|---|
| `/services/grading-leveling/` | "drainage excavation" | Already shipped: "A dedicated write-up on dug drainage systems is coming on our future [drainage excavation](/services/drainage-excavation/) page" — this brief's page is what makes that sentence true |
| `/services/foundation-excavation/` | "drainage excavation" | Already shipped: "a yard-scale swale or [drainage excavation](/services/drainage-excavation/) that manages surface runoff" |
| Homepage (`/`) | "drainage excavation" | Services list section |
| `/locations/eugene/`, `/locations/springfield/` | "drainage excavation in Eugene" / "drainage excavation in Springfield" | Body, services-offered section of each city page |
| `/about/` | Breadcrumb | Breadcrumb |
| Global header/footer | "Services" nav item | Every page |

**OUT (this page → other pages)**, matching the entity map's boundary logic (`03-entity-map.md` §3) and §6's Boundary Note:

| To | Anchor text | Placement |
|---|---|---|
| `/` (homepage) | "D&D Land Works" or "our full range of excavation services" | Breadcrumb + body-late (up-link to hub) |
| `/services/grading-leveling/` | "Grading & Leveling" ("for surface swales, berms, and regrading, see" framing) | H2 #1 (scope intro, primary placement), H2 #4 (swale-vs-French-drain decision) |
| `/services/foundation-excavation/` | "Foundation Excavation" ("for the code-required foundation drain, see" framing) | H2 #7 (boundary answer, primary placement) |
| `/services/septic/` | "septic drainfield" / "Septic Install & Repair" | One-line disambiguation, near H2 #1 or FAQ #8 area |
| `/services/excavation/` | "excavation" (brief cross-reference only — general trench-depth/OSHA context reused, not re-derived) | H2 #2 (depth section, brief reference to deeper-trench thresholds) |
| `/locations/eugene/`, `/locations/springfield/` | "Eugene" / "Springfield" | H1/opening paragraph area, and H2 #6 (permit section, naming each city directly) |
| `/about/` | "David Deggelman" | Trust/CCB mention |
| `/contact/` | "get a free estimate" / "call 541-401-8726" | H2 #13 CTA + hero |

**Flag for dev:** the current live page's Related Services grid links to `/services/utility-excavation/` and `/services/slope-stabilization/` — confirm these are live routes before preserving them in the rebuilt grid; if not yet built, swap for confirmed live sibling routes (`/services/grading-leveling/`, `/services/foundation-excavation/`, `/services/septic/`) per this brief's actual cross-link needs.

No "click here" / "learn more" anchors — every anchor is descriptive, per the parent methodology's rule.

---

## 10. Schema Requirements

This page follows the exact pattern every sibling page shipped with:

- **Primary `@type`: `Service`** — CONFIRMED REAL schema.org type, reused from the homepage pack's confirmed schema.org research (`GeneralContractor` is real and correct; `ExcavationContractor` does not exist) rather than re-checking from scratch.
- **`provider`**: `{"@id": "https://www.ddlandworks.com/#business"}` — the exact `@id` already shipped in every sibling page's JSON-LD. Do not redefine the organization inline and do not use a different placeholder.
- **`Service` required fields:** `name` ("Drainage Excavation"), `provider` (the `@id` reference above), `areaServed` (Lane County + Eugene/Springfield at minimum, matching the full city list already used in every sibling page's schema), `serviceType` ("Drainage Excavation"), `description` (can reuse a trimmed version of the AI citation block from §5 — using the conservative "excavates and trenches for" service-claim wording, not a stronger installation claim, per the Critical Open Item box).
- **`FAQPage`** — for the 10-question set in §8; FAQ schema answers must match the visible FAQ text exactly.
- **`BreadcrumbList`** — Home → Services → Drainage Excavation, matching every sibling page's already-implemented `Breadcrumbs` component.
- **`Speakable`** — flag the answer-first passages in H2s #1 (scope intro), #2 (French drain/depth), #4 (swale-vs-French-drain), #5 (where the water goes), #6 (storm-drain permit), #7 (foundation-drain boundary), and #10 (can it make it worse) as speakable-eligible, per `00-research-pack.md` §7's explicit Content Format Plan.
- **`ItemList`** — for the discharge-destinations list in H2 #5 and the materials list in H2 #8.
- **Do NOT implement `AggregateRating`/`Review` schema** — same rule as every prior brief; D&D has zero reviews at launch.

---

## 11. Entity Profile

Pulled from this folder's `entity-inventory.csv`, cross-checked against `home/`, `grading-leveling/`, `foundation-excavation/`, and `septic/entity-inventory.csv` for reused canonical forms. Business/location/certification entities are **not re-derived** — see `home-brief.md` §11 for their original validation notes.

**Primary entity (salience 10, reused unchanged):**
- **D&D Land Works** (Organization → schema `GeneralContractor`) — `NOT_FOUND` externally. Must appear in the first sentence of body copy and in the `Service.provider` reference.

**Page-defining entity (salience 10, new canonical home for this page):**
- **Drainage Excavation** (Service — buried/dug systems) — `VALIDATED_LOCAL`. 0/8 core competitors name buried drainage specifically; 1 newly-found local competitor (M4 Landworks) does. This page is now its canonical home; sibling pages (Grading & Leveling, Foundation Excavation) down-link here rather than duplicating depth.

**This page's core entity cluster — buried/dug drainage systems (salience 5-10, all new, load-bearing):**
- French Drain (10, `VALIDATED`, service claim per the Critical Open Item), Curtain Drain (6, `VALIDATED`, zero-competitor-defined), Perimeter Drain (5, `VALIDATED_LOCAL`), Perforated Pipe corrugated vs. PVC (7, `VALIDATED`), Drain Rock/Gravel Backfill (6, `VALIDATED_LOCAL`), Filter Fabric (4, `VALIDATED_LOCAL`), Catch Basin (6, `VALIDATED`), Dry Well (6, `VALIDATED`), Daylight Discharge Point (7, `VALIDATED_LOCAL`), Pop-up Emitter (3, `VALIDATED_LOCAL`), Culvert (5, `VALIDATED`).

**Adjacent, out-of-scope entity (salience 3, honest disambiguation only):**
- Sump Pump (3, `VALIDATED`, `adjacent_not_confirmed`) — likely a plumbing/electrical trade's scope; one honest disambiguating sentence, not a claimed D&D service.

**New authority entities (salience 5-9, all new — this page's strongest citations):**
- Storm Drain Tie-In Permit / Eugene EC §6.610 (9, `VALIDATED`), Storm Drain Tie-In Permit / Springfield (6, `VALIDATED_LOCAL`), Lane County Stormwater Management Program (5, `VALIDATED`).

**Reused geo/business/regulatory entities (unchanged from prior packs):** David Deggelman, Oregon CCB #261742, Willamette Valley (clay soil, applied in a new context), Eugene, Springfield, Oregon811, OSHA 1926 Subpart P, Oregon DSL Removal-Fill Law, DEQ NPDES 1200-C — same validation status and do-not-fabricate rules as `home-brief.md` §11 and `excavation-brief.md` §11.

**Sibling/parent entities (explicitly NOT this page's scope — see §6 Boundary Note):**
- Grading & Leveling (Service, salience 5) — owns surface swales, berms, and ORSC R401.3 positive-slope regrading.
- ORSC R401.3 — Positive Drainage Slope (Legislation, salience 3) — owned by Grading & Leveling; mention briefly for contrast only.
- Foundation Excavation (Service, salience 5) — owns ORSC R405/R406/R408 code education for the code-triggered foundation drain.
- ORSC R405 (Foundation Drain) (Legislation, salience 4) — cross-linked, not re-derived.
- Septic Install & Repair (Service, salience 3) and Septic Drainfield (Concept, salience 2) — unrelated except for the shared word "drain"; one-line disambiguation only.

**Competitor/content-source entities (for internal reference, not on-page):** M4 Landworks (5, `VALIDATED_LOCAL`, the closest direct drainage competitor found), Pacific Earthworks LLC (2, `VALIDATED_LOCAL`), Cojo Asphalt (3, `content_source_not_competitor`, used for sourcing only).

**Co-occurrence requirements specific to this page** (per `03-entity-map.md` §5):
- French drain named specifically with a real depth figure — 0/5 give a depth figure — **mandatory, the page's central differentiator**
- Curtain drain defined and distinguished from a French drain — 0/5 — **mandatory**
- Catch basin, dry well both defined — 0/5 each — **mandatory**
- Any pricing shown for any drainage service — 0/5 — **mandatory**
- Storm-drain tie-in permit mentioned — 0/5 — **mandatory, structural requirement**
- "Where does the water go" explained (daylight/dry well/tie-in) — 0/5 — **mandatory, the task's named trust signal**
- Material specificity (pipe type, gravel, filter fabric) — 0/5 — **mandatory**
- Swale-vs-French-drain decision guidance from the buyer's side — 0/5 — **mandatory, must be genuinely new vs. Grading & Leveling's table**

---

## 12. CTA Requirements

| Placement | Copy | Type/link |
|---|---|---|
| Above the fold (hero, already live) | "Call 541-401-8726" / "Free Estimate" | `tel:5414018726` and `/contact/` — **keep the existing Hero component copy and subheadline unchanged** ("Willamette Valley winters mean months of rain on ground that doesn't always shed it well. D&D Land Works cuts the swales, trenches, and culvert lines that get water moving away from where it's causing problems.") — flag the word "swales" in this subheadline for a light edit once the scope boundary in §6 is applied, since surface swales are Grading & Leveling's territory; a minor wording tweak, not a rewrite |
| Mid-page (after H2 #5, "where does the water go") | "Not sure where your yard's water should actually go? Get a free on-site estimate." | `/contact/` |
| After H2 #6 (storm-drain permit) | "Tying into the city storm system? We'll walk you through what's required before anything's quoted." | `/contact/` |
| H2 #13 (closing CTA, adapted from the existing live page) | "Get Your Drainage Problem Scoped" (or keep "Get the Water Moving" if David prefers the punchier original) + "Free estimate for drainage work anywhere in Lane County." | `tel:5414018726`, `/contact/` — flag as a minor call, not a required change |

No fabricated urgency/scarcity language, consistent with every prior brief — nothing in the research pack supports it.

---

## 13. Images Required

**Current state: the live page has zero real project photos**, same gap as every prior page in this series — the `Hero` component is text-only, and no `<img>` beyond shared components appears in `drainage-excavation.astro`. This is a genuine, unaddressed gap, not something to paper over with unbranded stock presented as D&D's own work (same rule as every prior brief's §13).

| # | Description | Alt text guidance | Type | Status |
|---|---|---|---|---|
| 1 | Hero image — an open drainage trench on a Lane County site, showing pipe and drain rock before backfill | "Drainage trench excavation for a French drain, Lane County, Oregon" | Hero | **Gap — no real photo yet** |
| 2 | A daylight discharge point or dry well, finished, at a lower point on a property | "French drain daylight discharge point, Lane County, Oregon" | Evidence, near H2 #5 ("where does the water go") | **Gap — genuinely valuable given this is the page's clearest unclaimed differentiator** |
| 3 | Materials close-up — perforated pipe, drain rock, and filter fabric laid out before backfill | "Drainage trench materials: perforated pipe, drain rock, filter fabric" | Evidence, near H2 #8 (materials section) | **Gap — needs a real jobsite photo; directly ties to the material-specificity differentiator** |
| 4 | A catch basin set at a low point, grated inlet visible | "Catch basin installation for surface drainage, Lane County, Oregon" | Evidence, near H2 #3 or H2 #9 | **Gap — genuinely absent** |
| 5 | Simple illustrated diagram showing the three discharge destinations (daylight / dry well / storm-tie-in) | "French drain discharge destinations: daylight, dry well, storm-drain tie-in" | Supporting graphic, near H2 #5 | Can launch as a simple illustrated 3-option graphic — lower priority to fix than the photo gaps above, but high value given how central this content is |

Flag to David: same as every prior brief — launching with limited or no photography is an acceptable temporary measure, but should be tracked as a launch gap to close with real jobsite photography (a finished daylight discharge point or a materials close-up would be especially valuable given how unclaimed those specific trust signals are in this market) within the first few months.

---

## 14. Authority Signals to Cite

Pulled from `07-oregon-authority.md`, with the verification/hedging status made explicit per this project's central sourcing rule:

1. **Eugene Municipal Code §6.610 (stormwater connection permit) — VERIFIED, cite with one fee-amount confirmation caveat.** "No person may connect a drain, downspout, or other conduit carrying stormwater to Eugene's public storm system without paying the required fees and obtaining a permit from the City Engineer. Permits are issued only to a property owner, for a connection serving their own residence, or to a licensed plumber or licensed septic-tank-installation contractor." *(Source: Eugene Code §6.610, eugene.municipal.codes/EC/6.610; corroborated by search-engine summarization of the same code text — direct fetch returned a 403 this session. Confirmation caveat: the core permit-required and who-can-pull-it facts are corroborated clearly enough to cite with confidence, but exact current fee amounts should be re-confirmed directly with Eugene's Engineering Department before quoting a specific dollar figure to a customer. Verified 2026-09-09.)*
2. **Springfield stormwater connection requirements (Development Code, Ordinance 6464, effective January 8, 2024) — VERIFIED, less granular, present as a general rule.** "Connecting to Springfield's public stormwater system, or discharging to a waterway, generally requires a permit and must meet local stormwater standards under the city's Development Code." *(Source: springfield-or.gov/city/development-public-works/clean-water-and-stormwater/; Springfield Development Code stormwater amendments PDF; verified 2026-09-09. No single code section as specific as Eugene's EC §6.610 was found — recommend confirming exact process directly with Springfield's Development & Public Works Department before quoting a specific process to a customer.)*
3. **Lane County (unincorporated) stormwater authority — present as a pointer to the correct authority, not a specific rule.** "Lane County's Public Works Engineering and Construction Services division runs a dedicated Stormwater Management Program, the authority to confirm connection or discharge rules for a property outside Eugene or Springfield city limits." *(Source: lanecounty.org/government/county_departments/public_works/engineering_and_construction_services/stormwater_management_program; verified 2026-09-09. No Lane-County-specific tie-in fee or threshold figure was found — do not invent one.)*
4. **French drain / curtain drain depth, slope, material, and cost specifications — CONFIRMED via national cost-guide and Oregon-specific contractor sourcing, cite normally, labeled as general.** "Standard yard-drainage depth runs 18-24 inches, shallower (8-12 inches) for surface-water-only applications, and deeper (4-6 feet) when tied to a footing. Pipe should slope roughly 1%, about 1 inch of drop every 8-10 feet, to keep water moving. Rigid PVC resists crushing better than flexible corrugated pipe, which costs less. Clean, washed gravel wrapped in filter fabric prevents Willamette Valley's silty clay from migrating into and clogging the system over time." *(Source: HomeGuide — French Drain Cost; Angi — French Drain Cost; Hunker — French Drain vs. Curtain Drain; Cojo Asphalt — French Drain Trench Excavation in Oregon; verified 2026-09-09. National/general data, not Lane-County-specific — label accordingly.)*
5. **Oregon DSL Removal-Fill Law — reused narrowly from the excavation pack, cite with the applicability caveat.** "A DSL Removal-Fill permit is required for moving 50 or more cubic yards of material in wetlands or other waters of the state, and any amount within Essential Salmonid Habitat or a Scenic Waterway. This can apply if a drain's discharge point is a mapped wetland, stream, or riparian buffer — but most yard-to-daylight or yard-to-dry-well discharges do not touch DSL-jurisdictional water at all." *(Source: reused from `../excavation/07-oregon-authority.md` §4, re-confirmed still current 2026-09-09. Do not present as a blanket requirement for a typical residential drainage job.)*
6. **Oregon811 and OSHA 1926 Subpart P trench safety — reused verbatim, brief mention only.** "Oregon811 requires at least 2 business days' advance notice before any digging project, including a drainage trench, free of charge. OSHA's trench-safety rules require a protective system at 5 feet deep and safe access at 4 feet — most yard-drainage trenches (18-36 inches) fall well under these thresholds; a French drain tied to a footing (4-6 feet) can approach or cross them." *(Source: reused verbatim from `../excavation/07-oregon-authority.md` §§1-2. Full depth stays on `/services/excavation/`; do not re-derive here beyond this brief mention.)*

**Explicit hedging instruction for the content writer:** signal #1's fee amounts and signal #2's exact process should carry a light "confirm with the city's engineering or public works department" hedge; the permit-required and who-can-pull-it facts themselves may be stated with confidence. Signal #5 must be framed as a narrow, situational rule, not a blanket requirement — most drainage jobs on this page never touch DSL jurisdiction. **Above all: no authority signal in this list authorizes stating "D&D installs French drains" as a flatly confirmed fact — that claim is governed separately by the Critical Open Item box at the top of this brief, not by any of these citations.** Do not state a specific storm-drain-tie-in fee, a Lane-County-specific per-linear-foot drainage price, or a D&D-specific completed-project claim anywhere on the page — none was found in this research pass.

Density target: same as every prior brief, roughly 1 statistic per 300-500 words of body copy, at least one external authority link per major H2 section (especially H2 #5 "where does the water go," H2 #6 storm-drain permit, and H2 #9 cost).

---

## Open Items Requiring David's Input Before Content-Create

Carried forward from `00-research-pack.md`'s "Honest Limitations" section and `08-gap-analysis.md`'s Flag D — do not invent values for these:

1. **The single most important item before this brief moves to `content-create`, ranked above every other open item in this pipeline so far:** whether D&D Land Works installs French drains, curtain drains, dry wells, or catch basins as a confirmed service, or performs only the excavation/trenching for someone else's installation. `business-info.md` does not state it either way. The current live page already claims installation ("Installing French drains along foundations and retaining walls"), but per this project's own established discipline (the same pattern `land-clearing-brief.md` applied to its live page's tree-felling/stump-grubbing bullets and `foundation-excavation-brief.md` applied to its own live page's content), an unverified claim already being live is not a confirmed fact. This brief ships using the conservative "excavates and trenches for buried drainage systems, product installation confirmed per job" framing throughout (see the Critical Open Item box, §5, §8, §14). **If David confirms the fuller installation claim before content-create, the AI citation block, several FAQ answers, and the service-schema description should all be strengthened accordingly** — this is a straightforward upgrade, not a rewrite, if and when confirmed.
2. **Whether D&D installs or merely trenches for a sump pump** (a likely plumbing/electrical trade's scope) is unconfirmed — the brief instructs one honest disambiguating sentence only, no claimed service.
3. **No Lane-County-specific per-linear-foot drainage pricing exists** in any source found in this research pass — all cost data in §8 and §14 is national/general, clearly labeled as such. If David has real per-job cost data, it should replace the generic ranges.
4. **Eugene's EC §6.610 exact current fee amounts** should be re-confirmed directly with Eugene's Engineering Department (the code-language facts are corroborated, but the direct fetch returned a 403 this session) before quoting a specific dollar figure to a customer.
5. **Whether the current live page's Related Services grid links** (`/services/utility-excavation/`, `/services/slope-stabilization/`) are live routes — confirm with dev before preserving or replacing them in the rebuilt grid (see §9's flag).
6. **The H1 change** flagged in §6 (adding "in Eugene, Springfield & Lane County, Oregon" to match the sibling pattern) — recommended for consistency but changes text on an already-live page and should be confirmed before build.
7. **Real pricing specific to D&D's own drainage jobs**, if David is willing to share even rough figures — would strengthen H2 #9 beyond the generic national ranges currently available.

**The single most important item before this brief moves to `content-create` is item #1 above.** Every other page in this pipeline has resolved its central open item as a framing nuance within an already-confirmed service (land clearing's tree-felling scope, foundation excavation's frost-depth sourcing). This page is different: item #1 determines whether the page's *entire premise* — a French drain as a namable D&D offering — can be stated with confidence at all, or must stay in the narrower "excavation and trenching for a drainage system" framing throughout. Publishing an unhedged installation claim without David's confirmation would be the highest-risk error this brief could introduce, consistent with this project's no-fabrication rule.
