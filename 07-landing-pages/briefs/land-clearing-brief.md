# Content Brief — D&D Land Works Land Clearing (`/services/land-clearing/`)

**Prepared:** 2026-09-08 · **Prepared by:** Ducker Creative
**Built from:** `01-research/page-research/land-clearing/` full research pack (files 00-08 + entity-inventory.csv), cross-checked against `01-research/page-research/home/entity-inventory.csv`, `01-research/page-research/site-preparation/entity-inventory.csv`, `01-research/page-research/excavation/entity-inventory.csv`, and `01-research/page-research/grading-leveling/entity-inventory.csv` for canonical entity reuse, `business-info.md`, `docs/design-system.md`, `07-landing-pages/content/grading-leveling-content.md` (voice/tone and schema `@id` pattern reference), `07-landing-pages/content/home-content.md` (the shipped scope-disclosure sentence this brief must not contradict — see §6's Critical Scope-Framing box), and the current live pages at `site/src/pages/services/land-clearing.astro` and `site/src/pages/services/brush-clearing.astro`.
**Methodology note:** Same adaptation as `home-brief.md`, `site-preparation-brief.md`, `excavation-brief.md`, and `grading-leveling-brief.md` — this project's `content-briefs` skill was written for a prior HVAC client and references files that don't exist here. Dropped/substituted with the real D&D Land Works research files throughout.
**Pipeline position:** Fifth page through this project's content pipeline. **This is a content-expansion brief, not a greenfield brief** — a real page already exists and is live in the Astro codebase with a genuinely strong conceptual foundation (accurate scope framing, a real "what's included" list, a real equipment section, correct cross-links to the sibling brush-clearing page), but zero of this page's highest-value gap content — see §1.
**URL note (settled, not an open item):** Per the task instruction, this brief targets `/services/land-clearing/` — the nested pattern already confirmed and live for Site Preparation, Excavation & Grading, and Grading & Leveling (`site/src/pages/services/land-clearing.astro` already lives at this path; no URL move is needed).
**Related live pages found during research (not this brief's subject, noted for internal-linking accuracy — see §9):** `site/src/pages/locations/eugene/land-clearing.astro` and `site/src/pages/locations/springfield/land-clearing.astro` (city × service pages, already live) and `site/src/pages/resources/land-clearing-cost-per-acre-oregon.astro` (a cost-guide resource page, already live, citing Angi's 2026 data: $1,200–$8,000/acre nationally, tiered $600–$1,300 light brush / $2,100–$4,100 shrubs and small trees / $3,600–$6,100+ heavy timber). This brief's cost section (§6, H2 #4) uses these same shipped figures for site-wide consistency rather than the research pack's own separately-sourced range, and adds the one thing neither the resource page nor any competitor currently provides: a construction-grade-vs-pasture project-type cost split (see §6, §7).
**Entity reuse:** All canonical business/location/certification entities (D&D Land Works, David Deggelman, Oregon CCB #261742, Eugene, Springfield, Willamette Valley, the `GeneralContractor`/`Service` schema decisions) are reused verbatim from the four prior briefs — not renamed or re-derived. The `Service.provider` reference uses the exact `@id` already shipped in `site-preparation-content.md`, `excavation-content.md`, and `grading-leveling-content.md`'s JSON-LD (`https://www.ddlandworks.com/#business`).

---

## 1. Page Metadata

| Field | Value |
|---|---|
| **Canonical URL** | `/services/land-clearing/` |
| **Current live URL** | `/services/land-clearing/` (file: `site/src/pages/services/land-clearing.astro`) — already matches; no URL move needed |
| **Slug** | `land-clearing` |
| **Page type** | Core service page — P0 priority, home-pack-adjacent, with a live sibling page at `/services/brush-clearing/` (see §0-equivalent Scope Boundary Finding, folded into §3 and §6 below) |
| **Primary keyword** | `land clearing eugene or` / `land clearing eugene oregon` |
| **Co-primary keyword** | `land clearing lane county or` |
| **Secondary keywords** | `acreage clearing cost oregon` / `lot clearing cost per acre oregon`; `clearing land for pasture`; `land clearing vs brush clearing` (this page's single clearest, cheapest-to-fill content opportunity, since D&D's own shipped copy already contains most of the raw material) |
| **Semantic terms** (must appear at least once) | tree felling, stump grubbing, debris disposal, chip/haul/burn, significant tree, DBH (diameter at breast height), slash burn, Oregon Department of Forestry, Lane Regional Air Protection Agency, Oregon DEQ, wetland/riparian buffer, pasture reclamation, construction-grade clearing, licensed and bonded, Oregon CCB #261742, free estimate |
| **Search intent** | Mixed, matching the research pack's own finding: the primary/co-primary keywords are commercial decision-stage; the cost, scope-disambiguation, and permit/burn queries are informational/consideration-stage (`00-research-pack.md` §1) |
| **Current state / baseline** | A real, live page exists today with an accurate, well-written "From Overgrown to Buildable" section, a correct "what's included" bulleted list (tree felling, stump grubbing, brush/scrub removal, chip/burn debris, rough grading, selective tree preservation), an accurate generic equipment section (excavator with thumb/grapple, brush hog/mulching head), a residential-and-commercial section, and a correct "Often Paired With" cross-link to Site Preparation and Grading & Leveling. It has **zero** of: an explicit land-clearing-vs-brush-clearing scope statement (the distinction is implied by the two pages' separate existence but never stated head-on), a debris-disposal-method explainer (the three methods are named but not explained), any cost content on the page itself, any permit/burn/tree-ordinance content, and an FAQ. This is a **content-expansion brief**, not a rewrite-from-nothing brief — the existing "what's included" list and equipment section should be preserved, with one required framing correction (see §6's Critical Scope-Framing box) applied to how the tree-felling/stump-grubbing bullets are presented, not removed. |

---

## 2. Intent & Audience

- **Primary ICP:** A Lane County landowner (homeowner or small builder) who has just acquired, or has owned for years without acting on, a wooded or overgrown parcel — a rural lot bought for a future build, a neglected acreage inherited or purchased as-is, or a pasture that's grown up in blackberry and scrub. Secondary ICP: a builder or developer needing a lot or multiple house pads cleared ahead of a subdivision; a hobby-farm buyer wanting acreage opened up for grazing without full construction-grade clearing cost.
- **State of mind:**
  1. They don't know whether their situation is a "land clearing" job or a lighter "brush clearing" job, and they're worried about being oversold on scope — or worse, under-scoped and surprised mid-project (`05-intent-triangulation.md` Table 1; Danco's own FAQ exists specifically because customers ask this).
  2. They have sticker shock about cost-per-acre before they even call, because zero competitors checked in the research (10/10) publish any land-clearing pricing at all (`04-competitor-matrix.md` §3).
  3. They don't know what happens to the trees, stumps, and brush once it's off the ground — hauled? burned? left as mulch? — and whether that changes the price (`02-question-mine.md` Q22).
  4. They're worried about accidentally running afoul of a tree ordinance, a burn permit requirement, or a wetland rule they didn't know existed — and don't know which of several possible government agencies would even be the one to ask (`05-intent-triangulation.md` Table 1; this is the pack's single sharpest, most differentiated finding).
  5. They're worried a tree or feature they specifically want kept will get taken out anyway, because nobody explains a walk-through/preservation step in any depth.
  6. If it's a small residential job (a couple acres, a building envelope), they worry it'll be treated as an afterthought next to "subdivision"-scale language.
- **What they need to believe before calling:**
  1. This is a well-defined, correctly-scoped service — not a guess about whether they need "land clearing" or the cheaper "brush clearing" instead.
  2. There's a real, honest cost difference between clearing raw land for construction and clearing overgrown acreage for pasture — and D&D won't quote them at the more expensive tier if the cheaper one is genuinely all they need.
  3. D&D actually knows which government body governs which situation (tree ordinance vs. burn permit vs. wetland rule) — real expertise, not a vague "we handle all necessary permits" line.
  4. Debris disposal isn't a hidden add-on sprung on them after the job starts.
  5. A tree or feature they want kept will actually get flagged and preserved, not just promised.

---

## 3. Voice & Angle

- **Writing voice:** Per `docs/design-system.md` v1.2 (Outfit for display/headings, Poppins for body). Unchanged from the four prior briefs: a plain-spoken, no-fluff Lane County excavation contractor talking directly to a landowner. This page in particular should lean into the current live page's own strongest asset — its concrete, ground-level description of what a lot actually looks like before clearing ("Blackberry has taken over the fence line, alder has grown up along a drainage, and a decade of downed limbs sits in the understory") — and add the regulatory and cost-tier clarity the live page currently lacks, without losing that voice.
- **Required Lane County / Oregon-specific detail (minimum 5, per `07-oregon-authority.md`):**
  1. **City of Eugene Tree Preservation and Removal Standards (Eugene Code 9.6885) — verified directly against eugene.municipal.codes 2026-09-08.** A permit is required to remove a "significant tree" — a live tree at least 8 inches DBH (diameter at breast height, measured 4.5 feet above ground) — inside Eugene city limits only. An additional "exceptional"/landmark-tree tier can require a special permit and a public hearing.
  2. **City of Springfield Tree Felling Permit — verified directly 2026-09-08.** Generally required for tree removal over roughly 6 inches DBH, in the public right-of-way, or for a designated heritage/significant tree (Oregon's heritage-tree standard commonly sits at 24+ inches DBH) — inside Springfield city limits only. The city's own page notes a currently-waived fee; verify before publishing an exact figure.
  3. **The three-agency burning structure (ODF / LRAPA / DEQ) — verified directly 2026-09-08, this page's single most differentiated content block.** Oregon Department of Forestry regulates slash/debris burning from clearing on forestland within an ODF protection district (permit required, ~7-day advance registration). Lane Regional Air Protection Agency does not regulate slash burns directly, but expressly prohibits forest slash burning within the Eugene-Springfield Urban Growth Boundary and requires a letter permit in certain other fire districts. Oregon DEQ separately governs ordinary backyard/domestic burning of yard debris from a residence with four or fewer dwelling units — a genuinely different rule set from ODF's forestland rules. Zero of the 10 competitors examined explain any of this.
  4. **Willamette Valley overgrowth pattern (reused from the homepage pack, applied here)** — dense blackberry and scotch broom growth in this climate is the specific reason so much Lane County acreage needs clearing in the first place; the current live page's own copy already gestures at this without naming the plants precisely.
  5. **Oregon Department of State Lands (DSL) Removal-Fill Law (reused/extended from the excavation pack's pond-permitting research)** — a permit is required for moving/removing 50+ cubic yards of material in wetlands or waters of the state, and any amount within Essential Salmonid Habitat or Scenic Waterways — relevant when a clearing job borders a stream, wetland, or riparian buffer.
- **Insider/practitioner detail that signals real local expertise (use at least 2):**
  - The construction-grade-vs-pasture cost-tier distinction: pasture/acreage-reclamation clearing is genuinely cheaper because stumps can be ground low rather than fully pulled and the ground doesn't need a finish-grade pass — a real operational difference, not a marketing tier, and one zero competitors separate.
  - The in-city-vs-rural tree-ordinance distinction: Eugene's and Springfield's tree-removal permits apply only inside city limits; this pack found no equivalent unincorporated-Lane-County tree ordinance (flagged for direct confirmation — see §14 and Open Items). Naming this precisely, rather than a blanket "check with the county" non-answer, is a real specificity signal.

---

## 4. E-E-A-T Requirements

- **Experience (minimum 2 signals):** The current live page's already-accurate ground-level description of an overgrown Lane County lot, preserved; the equipment section's fine distinction between the excavator-with-grapple's role (heavy lifting: stumps, brush piling, debris loading) and the brush hog/mulching head's role (lower growth, without tearing up topsoil); David Deggelman referenced and linked to `/about/`.
- **Expertise (minimum 3 signals):** The three-agency burning structure explained precisely and correctly (ODF vs. LRAPA vs. DEQ — a level of regulatory specificity zero competitors demonstrate); the Eugene/Springfield tree-ordinance thresholds stated by exact DBH figure; the construction-grade-vs-pasture cost-tier distinction, explained as a real scope/equipment difference, not just a price label.
- **Authority (minimum 3 signals):** Oregon CCB #261742 in visible body copy (reused from the live page, keep it); direct outbound links to eugene.municipal.codes, springfield-or.gov, oregon.gov/odf, lrapa-or.gov, and oregon.gov/deq — free authority-borrowing unclaimed by any competitor in this niche (`00-research-pack.md` §14).
- **Trust (minimum 4 signals):** An explicit statement that trees/features can be flagged and preserved at the walk-through, before the quote; honest, hedged permit/burn-agency language rather than a blanket "we handle all permits" claim; the small-job-welcome statement (a couple acres gets the same scoping attention as a subdivision-scale job); the Critical Scope-Framing box's exact discipline (§6) so this page never implies D&D sells standalone tree removal or stump grinding; no fabricated pricing specific to D&D's own jobs, review counts, or years-in-business.

---

## 5. AI Citation Target

Reused verbatim from `00-research-pack.md` §12 — already drafted to the correct length and placement rule, no changes needed for this brief:

> Land clearing removes trees, stumps, brush, and debris from a property to open it up for construction, pasture, or general use. It's a heavier-scope, more expensive service than brush clearing, which targets only smaller vegetation — blackberry, scotch broom, saplings — without felling standing timber or grubbing stumps. D&D Land Works provides land clearing for residential and commercial properties throughout Eugene, Springfield, and Lane County, Oregon, including wooded lots being prepared for a new build, and overgrown or neglected acreage being reclaimed for pasture or general use. Work typically includes felling and removing trees within the clearing footprint, grubbing stumps and root balls, cutting and hauling brush, chipping or burning debris where permitted, and rough grading the cleared area. Trees and features a customer wants kept can be flagged and preserved during the walk-through. D&D Land Works is licensed and bonded under Oregon Construction Contractors Board license CCB #261742, serving Eugene, Springfield, and the rest of Lane County. Free estimates are available.

**Placement:** first 30% of the page's body content, immediately after the opening paragraph — same placement rule as all four prior briefs. Note: this block does the tree-felling/stump-grubbing framing correctly already ("felling and removing trees **within the clearing footprint**," "grubbing stumps and root balls" as steps of one whole-parcel job, not a standalone offer) — the content writer should treat its phrasing as the template for how every other mention of tree/stump work on this page should read (see §6).

---

## 6. Content Structure

**Word count target: 2,000–2,500 words.** Justification: this page sits closer in scale to Excavation & Grading (2,000–2,600) than to the narrower, more consumer-facing Grading & Leveling page (1,700–2,200), because it carries the single densest regulatory content block across all five pages researched in this pipeline so far — a five/six-agency structure (Eugene tree ordinance, Springfield tree ordinance, ODF, LRAPA, DEQ, and DSL wetlands, plus the FPA's non-applicability) that the competitor matrix confirms zero of 10 competitors explain at all — and a genuine two-tier cost table (construction-grade vs. pasture/acreage-reclamation) that no sibling page needed. It is not as extensive as Site Preparation (2,300–2,900) because it retains a smaller, already-accurate set of existing live-page sections (equipment, residential/commercial, often-paired-with) rather than needing a multi-step `HowTo`-eligible process. Arithmetic: a 100–150 word opening + the ~155-word AI citation block + the retained ~140-word "From Overgrown to Buildable" section (existing prose + 6-item list) + a 50–70 word land-clearing-vs-brush-clearing answer + a 150–180 word debris-disposal section (answer + 3-item list) + a 150–180 word cost table + a 200–240 word permit/burn table (the page's densest section, given the multi-agency structure) + a 70–90 word equipment answer (retained) + a 70–90 word residential/commercial answer (retained) + a 60–80 word often-paired-with section (retained, with the added explicit brush-clearing cross-link) + a 9-question FAQ block (40–90 words per answer, roughly 400–550 words) + a 40–60 word closing CTA lands at roughly 2,000–2,500 words.

**H1:** Land Clearing in Eugene, Springfield & Lane County, Oregon
*(source: `00-research-pack.md` §7 recommends the shorter "Land Clearing in Lane County, Oregon"; this brief instead recommends the fuller geo-scoped form already shipped on Site Preparation, Excavation & Grading, and Grading & Leveling, for cross-page consistency — the same adjustment `grading-leveling-brief.md` made to its own page's H1 recommendation. The current live page's H1 is simply "Land Clearing"; flag for David/dev before build, since it changes the H1 of an already-live page. The URL/slug does not change.)*

**Opening paragraph guidance (first 100–150 words):** Open by stating plainly that land clearing is the full-parcel service — trees, stumps, and brush down to bare, usable ground — and that a lighter job with no standing timber and no stumps to grub is brush clearing instead, cross-linking there immediately. This gets the scope-boundary finding stated in the first few sentences rather than left implicit, per `08-gap-analysis.md` Gap #1 (score 36.0). Follow immediately with the AI citation block from §5.

### Critical Scope-Framing Instruction — Tree Felling & Stump Grubbing (read this before writing a single sentence of §6's H2 #1)

**This is the single most important nuance in this brief, and it is explicitly NOT resolved as settled fact — see Open Items at the end of this document.**

There is a real tension between two things that are both true today:

1. **`07-landing-pages/content/home-content.md`** — the already-shipped, humanized homepage content — states in plain body copy: *"D&D Land Works keeps its scope honest rather than claiming to do everything: this company does not perform tree removal, stump grinding, forestry mulching, asphalt paving, concrete work, retaining-wall engineering, septic pumping, or septic inspection beyond DEQ install authority."*
2. **The current live `/services/land-clearing.astro` page** already lists, as line items within the land-clearing service, "Felling and removing trees within the clearing footprint" and "Grubbing stumps and root balls out of the ground."

**These are not actually contradictory once the framing is made precise — but the precision is everything, and it must be handled with real care in the writing, not glossed over:**

- Tree felling and stump grubbing belong on this page **only as steps that happen within the footprint of a whole-parcel land-clearing job** — i.e., when a customer hires D&D to clear a lot, a pasture, or an acreage, felling the trees and grubbing the stumps *inside that project's boundary* is part of delivering that one job.
- **D&D does not offer, and this page must never imply, a standalone "Tree Removal" service** (an arborist-style job: removing one problem tree from an already-landscaped yard, independent of any broader clearing project) **or a standalone "Stump Grinding" service** (grinding one stump on its own, independent of a clearing project). Those are the specific line items `home-content.md` disclaims, and a landscaped-yard tree job or an isolated stump grind is a different service category than a land-clearing job, industry-wide (this is exactly the distinction an arborist like Highland Tree Service LLC — a competitor examined in this research — specializes in, from the opposite direction).
- **Required writing discipline:** every mention of tree felling or stump grubbing on this page — the "What's Included" list, the FAQ answer to "Does land clearing include stump removal?", and anywhere else it comes up — must stay anchored to language like "within the clearing footprint," "as part of opening up a parcel," or "within a whole-parcel clearing job." If a draft of any section starts to read like a menu offer ("we also offer tree removal" / "we do stump grinding" stated as an independent, bookable line item with no clearing-project context), stop and rewrite it. The AI citation block in §5 already models the correct phrasing ("felling and removing trees **within the clearing footprint**") — match that pattern everywhere else on the page.
- **This exact framing is this research pack's own inference from the shipped page copy**, cross-validated against Danco Excavation's own published FAQ (which draws the identical line: "land clearing... may include tree removal, stump removal... for construction or development") and general industry practice — **it is not independently confirmed against business-info.md or by David directly.** Per the research pack's own explicit recommendation (`00-research-pack.md` §4, `08-gap-analysis.md`'s dedicated closing section), **this framing must be confirmed with David before the page publishes** — do not let the content-create step treat it as a settled fact. See Open Items at the end of this brief.
- **Forestry mulching** is a related, separate landmine: the live page names only chipping and burning as disposal methods, not mulching, and `home-content.md` explicitly disclaims forestry mulching as a standalone service. Do not introduce forestry mulching as something D&D offers anywhere on this page without direct confirmation from David — even though D&D's own equipment list already includes a brush hog/mulching head attachment, its confirmed use here is for clearing lower growth, not for a distinct "forestry mulching" service method.

**H2 sections, in order** (every H2 traces to a competitor-matrix finding or a scored gap — cited inline):

| # | H2 (exact text) | Traces to | Format |
|---|---|---|---|
| 1 | From Overgrown to Buildable | Retained from the live page — table-stakes "what's included" content, 6/8 original competitors cover generically; this page's own copy already out-details all but one competitor on preservation framing (`04-competitor-matrix.md` §2) — **apply the Critical Scope-Framing box above when touching the tree-felling/stump-grubbing bullets** | Bulleted list (existing 6-item list, lightly re-anchored per the scope-framing box, not rewritten from scratch); `ItemList` |
| 2 | What's the Difference Between Land Clearing and Brush Clearing? | Gap #1, scope clarity (score 36.0) — 1/10 competitors (Danco only) draws this line explicitly | Answer-first, 50–70 words; `Speakable` |
| 3 | What Happens to the Trees, Stumps, and Debris? | Gap #3, debris-disposal transparency (score 36.0) — 1/10 competitors (Danco, haul-off only) even partially covers this | Answer-first + bulleted list of the three disposal paths (haul off-site / chip or mulch on-site / burn where permitted), each with a one-line cost/condition note | 
| 4 | How Much Does Land Clearing Cost? | Gap #4/#5, tied top score 50.0 — zero of 10 competitors publish any land-clearing pricing, and none separate construction-grade from pasture/acreage-reclamation pricing | Comparison table: Project Type / Typical Range / What Drives It — construction-grade vs. pasture/acreage-reclamation, using the same Angi-sourced figures already shipped on `/resources/land-clearing-cost-per-acre-oregon/` for site-wide consistency, reframed by project type rather than vegetation type (the one thing that resource page doesn't yet do) |
| 5 | Do I Need a Permit to Clear Trees or Burn Debris in Lane County? | Gap #2/#6, tied score 40.0 — the single most confusing, completely unaddressed regulatory topic in the entire competitive set | Comparison table — columns: Situation / Governing Agency / What It Requires; rows: Eugene in-city tree removal / Springfield in-city tree removal / forestland slash burn / Eugene-Springfield UGB burn prohibition / ordinary backyard debris burn / clearing near a wetland or stream; `Speakable` on the lead-in answer sentence |
| 6 | Equipment on the Job | Retained from the live page — equipment-specificity gap already largely covered (`08-gap-analysis.md` Gap #11, partial credit) | Answer-first (existing copy, minor reinforcement only); `Speakable` |
| 7 | Residential and Commercial | Retained from the live page | Answer-first (existing copy) |
| 8 | Often Paired With | Retained from the live page, **strengthened with the explicit brush-clearing cross-link framing** (see §9) | Short answer-first + cross-links (existing copy, framing added) |
| 9 | Frequently Asked Questions | Gap #17, FAQ-content gap — current live page has none; only Danco has a real FAQ among the 10 competitors examined | `FAQPage`-formatted Q&A, 9 questions (see §8 below) |
| 10 | Get Your Land Opened Up | Reused CTA pattern from all four prior briefs, small-job-welcome framing | Short answer-first + CTA block (existing copy can be kept largely as-is) |

Format minimums are satisfied: ≥1 comparison table (H2 #4 and #5), ≥1 bulleted list (H2 #1 and #3) — per the parent methodology's format-diversity rule and `00-research-pack.md` §8's own Content Format Plan.

---

## 7. Unique Angle

Pulled directly from the top gaps in `08-gap-analysis.md` and the research pack's own §6 "Biggest Structural Opportunity" — every entry is a specific, evidence-based differentiator, not a slogan:

1. **States the land-clearing-vs-brush-clearing scope line plainly and up front**, matching the exact split a real direct competitor (Danco Excavation) already publishes in its own FAQ — not an invented content-marketing distinction, but a genuine, industry-recognized, differently-priced service boundary D&D's live site already implements structurally but has never stated head-on (`08-gap-analysis.md` Gap #1).
2. **Separates construction-grade clearing from pasture/acreage-reclamation clearing with its own honest cost logic** — a real difference (full stump extraction and finish-grading vs. stumps ground low and no finish pass) that zero of 10 competitors, including D&D's own existing cost resource page, currently price differently (`08-gap-analysis.md` Gap #4/#5, tied top score).
3. **Walks through which specific government agency governs which situation** — Eugene's tree ordinance vs. Springfield's vs. ODF's forestland slash-burn rules vs. LRAPA's Eugene-Springfield UGB burn prohibition vs. Oregon DEQ's backyard-burning rules — a plain-language regulatory map that zero competitors in this niche, including the two strongest players (Danco and All Dirt), attempt at all (`00-research-pack.md` §6, `08-gap-analysis.md` Gap #2/#6).
4. **Explains the three debris-disposal paths and their real cost/condition tradeoffs** (hauled off-site, chipped/mulched on-site, burned where permitted) rather than naming the options and stopping there, which is as far as even the current live page and Danco's page go (`08-gap-analysis.md` Gap #3).
5. **States honestly, and with real specificity, that trees and features a customer wants kept get flagged and preserved during a walk-through before the quote** — a genuine practice D&D's own live page and All Dirt both already state but neither explains in FAQ depth (`08-gap-analysis.md` Gap #9).

These five must surface in the opening paragraph or immediately after (at minimum the scope-boundary line, introduced early), in their dedicated H2 sections (#2, #4, #5, #3, and the FAQ respectively), and echoed briefly in the closing CTA copy.

---

## 8. FAQ Section

9 questions, sourced verbatim from `02-question-mine.md`'s numbered list and cross-checked against the pack's own FAQ Shortlist (`00-research-pack.md` §9). Every question is drawn from real search-result phrasing, a real competitor FAQ, or a directly-answerable government-source question — none invented by this brief.

| # | Question | Source in question-mine | Answer guidance (40–90 words, direct answer first) |
|---|---|---|---|
| 1 | What's the difference between land clearing and brush clearing? | Q2 (pre_call/scope_boundary — Danco's own FAQ draws the identical line) | Lead with the real scope line: land clearing is the full-parcel service — felling standing trees, grubbing stumps, clearing to bare ground; brush clearing is the lighter service for overgrowth, scrub, and saplings with no standing timber to fell and no stumps to grub. Cross-link to `/services/brush-clearing/` for the lighter case. |
| 2 | Does land clearing include stump removal? | Q5 (scope_boundary — **apply the Critical Scope-Framing box in §6 exactly here; this is the single highest-risk answer in this brief**) | Lead with: yes, grubbing stumps and root balls within the footprint of a clearing job is part of the service. Immediately follow with the required caveat: this is different from hiring D&D for a standalone stump-grinding job on a single stump, independent of a broader clearing project — that's not a service D&D offers on its own. |
| 3 | How much does land clearing cost per acre? | Q14 (cost) | Lead with the range already shipped on `/resources/land-clearing-cost-per-acre-oregon/`: roughly $600–$1,300/acre for light brush and grass up to $3,600–$6,100+/acre for heavy timber, per Angi's 2026 data — then note construction-grade clearing (full stump extraction, finish grading) runs toward the higher end of any given vegetation tier compared to pasture/acreage-reclamation clearing at the same vegetation density. Link to the resource page for the full breakdown. |
| 4 | What's the difference between clearing land for building versus for pasture? | Q9 (project_types, task-brief-named) | Lead with: construction-grade clearing removes stumps and roots completely and finish-grades to bare, buildable ground; pasture/acreage-reclamation clearing can leave low-ground stumps and skip the finish-grade pass, at meaningfully lower cost, because the ground doesn't need to be building-ready. |
| 5 | What happens to the trees and brush after land clearing? | Q22 (debris, task-brief-named) | Lead with the three standard paths: hauled off-site, chipped/mulched on site, or burned where permitted — each with different cost and site-condition implications, scoped during the walk-through. |
| 6 | Do I need a permit to clear trees in Lane County? | Q26 (permits, oregon_specific, task-brief-named) | Lead with the critical nuance: it depends on whether the property is inside Eugene or Springfield city limits (where a tree-removal permit applies above a set trunk diameter) or in unincorporated Lane County (where this research found no equivalent county-wide tree ordinance — confirm directly with Lane County for a specific parcel). |
| 7 | Do I need a burn permit to burn slash piles after clearing land? | Q33 (permits/burning, oregon_specific, task-brief-named) | Lead with: yes, if the land is forestland within an Oregon Department of Forestry protection district — ODF requires a permit and typically 7-day advance registration. Note this is separate from Lane Regional Air Protection Agency's rules (which prohibit forest slash burning within the Eugene-Springfield Urban Growth Boundary) and from Oregon DEQ's backyard-burning rules for ordinary yard debris. |
| 8 | Can I clear land near a stream or wetland in Oregon? | Q39 (wetlands, oregon_specific, task-brief-named) | Lead with: possibly not without a permit — Oregon Department of State Lands requires a Removal-Fill permit for moving 50+ cubic yards of material in wetlands or waters of the state, and any amount within Essential Salmonid Habitat or a Scenic Waterway. Flag it during the site walk-through if a stream, wetland, or riparian buffer is anywhere near the clearing area. |
| 9 | Can a contractor preserve specific trees I want to keep? | Q46 (process/trust-building) | Lead with: yes — trees or features you want kept are flagged and preserved during the walk-through, before the quote is written, so nothing is decided or assumed on the day the crew shows up. |

No FAQ answer should fabricate a specific penalty dollar figure for unpermitted burning (none was found in the research), invent a Lane-County-exact cost figure beyond the already-shipped resource-page ranges, or claim D&D installs forestry mulching or offers standalone tree removal/stump grinding — see Open Items.

---

## 9. Internal Links

**IN (what will link to this page):**

| From | Anchor text example | Placement |
|---|---|---|
| Homepage (`/`) | "land clearing" | Services list, per `home-content.md`'s existing "Land clearing and brush clearing" line item |
| `/services/brush-clearing/` (already shipped) | "land clearing" | Existing "Related Services" card, already implemented |
| `/services/site-preparation/`, `/services/grading-leveling/` | "land clearing" | Related-service cross-links |
| `/locations/eugene/land-clearing/`, `/locations/springfield/land-clearing/` (already live city × service pages) | "land clearing" (parent-cluster link) | Each city page's own body copy, per the topical map's hub-and-spoke rule — these pages already link up to `/services/land-clearing/` |
| `/resources/land-clearing-cost-per-acre-oregon/` (already live) | "land clearing" | Existing "Related Services" card |
| `/about/` | Breadcrumb | Breadcrumb |
| Global header/footer | "Services" nav item | Every page |

**OUT (this page → other pages)**, with the sideways brush-clearing link carrying the explicit framing the task requires:

| To | Anchor text | Placement |
|---|---|---|
| `/services/brush-clearing/` | "brush clearing" — with **explicit "if it's just brush, overgrowth, or scrub — no standing timber, no stumps to grub — see brush clearing instead" framing**, not a bare anchor | Opening paragraph (immediately, per §6) and H2 #2 (the scope-difference section) and H2 #8 (Often Paired With) |
| `/services/site-preparation/` | "site preparation" | H2 #1 intro and H2 #8 (Often Paired With, existing) |
| `/services/grading-leveling/` | "grading and leveling" | H2 #8 (Often Paired With, existing) |
| `/resources/land-clearing-cost-per-acre-oregon/` | "our full land clearing cost breakdown" | H2 #4 (cost section) — link out for the fuller vegetation-tier breakdown rather than duplicating it in full |
| `/locations/eugene/land-clearing/`, `/locations/springfield/land-clearing/` | "land clearing in Eugene" / "land clearing in Springfield" | Body, near the geo-modifier in the opening paragraph or H1 area |
| `/about/` | "David Deggelman" | Trust/CCB mention |
| `/contact/` | "get a free estimate" / "call 541-401-8726" | H2 #10 CTA + hero |

No "click here" / "learn more" anchors — every anchor is descriptive, matching the pattern already used on the current live page.

---

## 10. Schema Requirements

This page follows the exact pattern `site-preparation-content.md`, `excavation-content.md`, and `grading-leveling-content.md` shipped with:

- **Primary `@type`: `Service`** — CONFIRMED REAL schema.org type, reused from the prior packs' confirmed schema.org research rather than re-checking from scratch (`00-research-pack.md` §10).
- **`provider`**: `{"@id": "https://www.ddlandworks.com/#business"}` — the exact `@id` already shipped in the three prior sibling pages' JSON-LD. Do not redefine the organization inline and do not use a different placeholder.
- **`Service` required fields:** `name` ("Land Clearing"), `provider` (the `@id` reference above), `areaServed` (Lane County + Eugene/Springfield at minimum, matching the full city list already used in the three prior shipped pages' schema), `serviceType` ("Land Clearing"), `description` (can reuse a trimmed version of the AI citation block from §5).
- **`FAQPage`** — for the 9-question set in §8; FAQ schema answers must match the visible FAQ text exactly.
- **`BreadcrumbList`** — Home → Services → Land Clearing, matching the current live page's already-implemented `Breadcrumbs` component.
- **`Speakable`** — flag the answer-first passages in H2s #2 (land-clearing-vs-brush-clearing), #5 (permits/burning lead-in), and #6 (equipment) as speakable-eligible, per `00-research-pack.md` §8's Content Format Plan.
- **Do NOT implement `AggregateRating`/`Review` schema** — same rule as all four prior briefs; D&D has zero reviews at launch.

---

## 11. Entity Profile

Pulled from `01-research/page-research/land-clearing/entity-inventory.csv`, cross-checked against the home, site-preparation, excavation, and grading-leveling packs' inventories for reused canonical forms. Business/location/certification entities are **not re-derived** — see the four prior briefs' §11 for their original validation notes.

**Primary entity (salience 10, reused unchanged):**
- **D&D Land Works** (Organization → schema `GeneralContractor`) — `NOT_FOUND` externally. Must appear in the first sentence of body copy and in the `Service.provider` reference.

**Page-defining entity (salience 10, reused from the homepage pack, re-checked for this page):**
- **Land Clearing** (Service) — `VALIDATED_LOCAL`. 7/8 original competitors offer some form; 5/5 re-checked competitors (Danco, All Dirt, Heavy D, McKenzie, plus Rotex) have a dedicated page or clearly named service line.

**Sibling-boundary entity (salience 8, cross-link only, not this page's content):**
- **Brush Clearing** (Service) — `VALIDATED_LOCAL`. Owns lighter, no-timber/no-stump scope on its own live page. This page cross-links to it; does not repeat its full scope. See §6/§9.

**Scope-defining process entities (salience 6–7, this page's real content backbone — handle per the Critical Scope-Framing box in §6):**
- **Tree Felling (within a clearing job)** — `VALIDATED_LOCAL`, salience 7. **Flagged in the inventory itself:** "D&D removes trees WITHIN a land-clearing job's footprint; D&D does NOT offer standalone single-tree removal / arborist service independent of a clearing project... flag for confirmation with David before the brief locks this framing in."
- **Stump Grubbing (within a clearing job)** — `VALIDATED_LOCAL`, salience 7. Same nuance and same confirmation flag as Tree Felling above.
- **Debris Disposal (chip/haul/burn)** — `VALIDATED_LOCAL`, salience 6. The dedicated H2 #3 content gap.
- **Rough Grading (post-clearing)** — `VALIDATED_LOCAL`, salience 6. Distinct from the Grading & Leveling page's standalone-yard scope; this is the light finish-pass ending a clearing job.
- **Selective Clearing / Tree & Feature Preservation** — `VALIDATED_LOCAL`, salience 6. Trust-building content; both D&D and All Dirt already practice this but neither explains the walk-through/flagging process in FAQ depth.
- **Forestry Mulching** — `VALIDATED` but flagged `adjacent_distinct_concept`, salience 6. Not a verified D&D method — do not introduce as a D&D offering without confirming with David (see Open Items).

**Project-type entities (salience 7–9):**
- **Pre-Construction Lot Clearing** (9) — universal project type, feeds into `/services/site-preparation/`.
- **Wooded/Timbered Lot Clearing** (8) — named directly in the live page's hero copy, heaviest-scope/highest-cost tier.
- **Overgrown/Neglected Acreage Reclamation** (7) — named directly in the live page's hero copy.
- **Pasture and Acreage Reclamation Clearing** (7) — task-brief-named; the genuinely cheaper cost tier zero competitors separate.

**Equipment entities (generic categories only, no brand names — same rule as all four prior pages):**
- **Excavator with Thumb or Grapple Attachment** (7) — `VALIDATED`, primary heavy-lifting tool.
- **Brush Hog / Mulching Head Attachment** (6) — `VALIDATED_LOCAL`, **shared entity with the sibling Brush Clearing page** — on this page it is the secondary/lower-growth tool; on the sibling page it is the primary tool. Differentiate by role, don't present identically.

**Vegetation species entities (new specificity opportunity, salience 4–5):**
- **Himalayan Blackberry** (*Rubus armeniacus*) — `VALIDATED`. Zero competitors checked name the invasive species by proper name; both D&D live pages currently say "blackberry" only.
- **Scotch Broom** (*Cytisus scoparius*) — `VALIDATED`, Oregon state-designated noxious weed, already named on the sibling brush-clearing page.

**Authority/regulatory entities (new for this pack, salience 6–9 — see §14 for full sourced detail):**
- City of Eugene Tree Preservation and Removal Standards (EC 9.6885) (7)
- City of Springfield Tree Felling Permit (6)
- Lane Regional Air Protection Agency (LRAPA) (8)
- Oregon Department of Forestry (ODF) (9)
- Oregon DEQ Backyard/Yard Debris Burning Rules (6)
- Oregon Department of State Lands (DSL) Removal-Fill Law (6) — reused/extended from the excavation pack
- Oregon Forest Practices Act (FPA) (5) — flagged `authority_mostly_inapplicable`, verify directly with ODF before stating as absolute
- Lane County Land Management Division (6) — reused; no standalone unincorporated tree ordinance found, flagged for direct confirmation

**Sibling/parent entities (explicitly NOT this page's scope):**
- Site Preparation (Service, salience 7) — downlink target, already cross-linked
- Grading & Leveling (Service, salience 6) — downlink target, already cross-linked

**Reused geo/business entities (unchanged from prior packs):** David Deggelman, Oregon CCB #261742, Willamette Valley, Eugene, Springfield — same validation status and do-not-fabricate rules as the four prior briefs.

**Co-occurrence requirements specific to this page** (per `03-entity-map.md` §9):
- Standalone land-clearing-vs-brush-clearing scope statement — 1/10 (Danco only), directly re-checked — mandatory to fill
- Multi-agency permit/burn explanation — 0/10 — mandatory
- Construction-grade vs. pasture cost-tier separation — 0/10 — mandatory
- Debris-disposal-method transparency beyond naming the options — 0/10 (Danco names haul-off only) — mandatory

---

## 12. CTA Requirements

| Placement | Copy | Type/link |
|---|---|---|
| Above the fold (hero, already live) | "Call 541-401-8726" / "Free Estimate" | `tel:5414018726` and `/contact/` — **keep the existing Hero component copy unchanged** |
| Mid-page (after H2 #4, cost section) | "Want a real number for your property? Get a free on-site estimate." | `/contact/` |
| After H2 #5 (permits/burning section) | "Not sure what applies to your parcel? We'll walk it with you before anything's quoted." | `/contact/` |
| H2 #10 (closing CTA) | "Get Your Land Opened Up" + a restated small-job-welcome line + phone/estimate link | `tel:5414018726`, `/contact/` — existing copy can largely be kept, per the current live page's own CTABlock |

No fabricated urgency/scarcity language, consistent with all four prior briefs — nothing in the research pack supports it.

---

## 13. Images Required

**Current state: the live page has zero real project photos**, same gap as all four prior pages — the `Hero` component is text-only, and no `<img>` beyond shared components appears in `land-clearing.astro`. This is a genuine, unaddressed gap, not something to paper over with unbranded stock presented as D&D's own work (same rule as all four prior briefs' §13).

| # | Description | Alt text guidance | Type | Status |
|---|---|---|---|---|
| 1 | Hero image — a wooded Lane County lot mid-clearing, or a cleared parcel showing felled trees/stumps staged for disposal | "Land clearing for a wooded lot in Lane County, Oregon" | Hero | **Gap — no real photo yet** |
| 2 | Before/after: an overgrown or timbered lot → cleared, bare, buildable ground | "Before and after land clearing, Lane County, Oregon" | Evidence, near H2 #1 | **Gap — this page's clearest evidence opportunity, directly supporting the "from overgrown to buildable" framing** |
| 3 | Debris pile staged for chipping, hauling, or burning | "Land clearing debris staged for disposal, Lane County, Oregon" | Evidence, near H2 #3 (debris disposal) | **Gap — needs a real jobsite photo, ties directly to the new debris-transparency section** |
| 4 | Excavator with thumb/grapple attachment pulling a stump or piling brush | "Excavator clearing stumps and brush, Lane County, Oregon" | Evidence, near H2 #6 (equipment) | **Gap — genuinely absent; ties directly to the equipment-specificity section** |
| 5 | Simple illustrated diagram or map graphic showing the Eugene/Springfield in-city ordinance boundary vs. unincorporated Lane County | "Eugene and Springfield tree ordinance boundary, Lane County, Oregon" | Supporting graphic, near H2 #5 (permits) | Lower priority than the photo gaps, but a genuinely high-value asset given the in-city-vs-rural distinction is this page's most differentiated claim |

Flag to David: same as all four prior briefs — launching with limited or no photography is an acceptable temporary measure, but should be tracked as a launch gap to close with real jobsite photography (a documented before/after wooded-lot clearing would be especially valuable given how central the "from overgrown to buildable" claim is to this page) within the first few months.

---

## 14. Authority Signals to Cite

Pulled from `07-oregon-authority.md`, with the verification/hedging status made explicit per this project's central sourcing rule:

1. **City of Eugene Tree Preservation and Removal Standards (Eugene Code 9.6885) — CONFIRMED, cite normally with the in-city scope limit stated plainly.** "Inside Eugene city limits, a permit is required to remove a 'significant tree' — a live tree at least 8 inches in diameter, measured 4.5 feet above ground (DBH). An additional protection tier applies to city-designated 'exceptional' or landmark trees, which can require a special permit and a public hearing. This ordinance applies inside Eugene city limits only — it does not extend to unincorporated Lane County acreage." *(Source: eugene.municipal.codes/EC/9.6885; verified directly 2026-09-08.)*
2. **City of Springfield Tree Felling Permit — CONFIRMED, cite normally with the same in-city scope limit and a fee-status hedge.** "Inside Springfield city limits, a permit is generally required for tree removal over roughly 6 inches DBH, for trees in the public right-of-way, or for designated heritage or significant trees (commonly 24+ inches DBH). As of this research, Springfield's own page notes the fee is currently waived — confirm current fee status before publishing an exact figure." *(Source: springfield-or.gov Tree Felling Permit page and PDF memo; verified directly 2026-09-08.)*
3. **Lane County (unincorporated) — HEDGE REQUIRED, do not state as an absolute.** "This research did not find a standalone Lane County ordinance governing tree removal on unincorporated rural acreage, comparable to Eugene's or Springfield's city-limits rules. Confirm directly with Lane County Planning & Development for a specific rural parcel before assuming no permit applies." *(Source: `07-oregon-authority.md` §3 — this pass's search was not exhaustive of every Lane County code chapter; treat as provisional.)*
4. **The three-agency burning structure (ODF / LRAPA / DEQ) — CONFIRMED, cite normally, this page's single most differentiated passage.** "Slash and debris burning from a land-clearing job on forestland within an Oregon Department of Forestry protection district requires an ODF burn permit, typically with about 7 days' advance registration. Lane Regional Air Protection Agency doesn't regulate slash burns directly, but it expressly prohibits forest slash burning within the Eugene-Springfield Urban Growth Boundary and requires a letter permit in certain other fire districts. Ordinary backyard burning of yard debris from a residence — a different situation than forestland slash — falls under Oregon DEQ's domestic burning rules instead, which require it to be burned on the property of origin with fire-extinguishing equipment on hand." *(Sources: oregon.gov/odf/fire/pages/burn.aspx; lrapa-or.gov; oregon.gov/deq/aq/pages/burning-101.aspx; verified directly 2026-09-08. No specific penalty dollar figure for unpermitted burning was found under any of the three agencies — do not invent one.)*
5. **Oregon Department of State Lands (DSL) Removal-Fill Law — reused/extended from the excavation pack, cite normally with the amount-threshold caveat.** "A DSL Removal-Fill permit is required for moving 50 or more cubic yards of material in wetlands or other waters of the state, and any amount within designated Essential Salmonid Habitat or Oregon Scenic Waterways. This can apply to a land-clearing job that borders or includes a wetland, stream, or riparian buffer, even if the clearing itself seems minor." *(Source: oregon.gov/dsl/wetlands-waters/pages/removal-fill.aspx; reused from `../excavation/07-oregon-authority.md` §4, verified 2026-09-08.)*
6. **Oregon Forest Practices Act (FPA) — HEDGE REQUIRED, present as "likely mostly inapplicable," not an absolute.** "The Forest Practices Act governs commercial tree-harvesting and forest-management activity on Oregon's non-federal forestland — it's generally not triggered by a one-time residential land-clearing job such as clearing a house lot, driveway, or pasture. This research did not find an explicit small-acreage residential exemption stated directly by ODF, so confirm directly with ODF if there's any doubt about a specific project." *(Source: oregon.gov/odf/working/pages/fpa.aspx; verified 2026-09-08.)*

**Explicit hedging instruction for the content writer:** signals #3 and #6 above must use hedged, attributed language in both body copy and their corresponding FAQ answers — never state the Lane County unincorporated-area exemption or the FPA's inapplicability as an absolute, directly-confirmed rule. Signals #1, #2, #4, and #5 were verified against primary source pages directly and may be stated as fact, with the scope limits (in-city-only, amount-threshold) stated precisely rather than glossed over. Do not cite Oregon SB 762/defensible space in depth on this page — per `07-oregon-authority.md` §7, it's a property-level WUI-risk-rating trigger more centrally owned by the `/services/brush-clearing/` sibling page's existing wildfire framing; at most a one-sentence cross-reference is warranted, not a dedicated section here.

Density target: same as all four prior briefs, roughly 1 statistic per 300–500 words of body copy, at least one external authority link per major H2 section (especially H2 #5, the permits/burning section, which should link to at least three of the five government sources above).

---

## Open Items Requiring David's Input Before Content-Create

Carried forward from `00-research-pack.md`'s "Honest Limitations" section and `08-gap-analysis.md`'s dedicated closing section — do not invent values for these:

1. **The tree-felling/stump-grubbing scope framing (§6's Critical Scope-Framing box) is this brief's single highest-priority open item.** Confirm with David directly: does D&D remove trees and grub stumps only as steps within a whole-parcel land-clearing job (this brief's current, safer framing), or does D&D in fact take on standalone single-tree-removal or standalone stump-grinding jobs independent of a broader clearing project? The current framing is inferred from the shipped live-page copy and cross-validated against a competitor's FAQ and general industry practice — it is not independently confirmed against `business-info.md`, which does not list either as its own line item, and it must not be treated as settled before this page publishes.
2. **Whether D&D's field process ever uses forestry mulching as an available method** (versus only chip/haul/burn, as the current live page states) — the equipment list already includes a brush hog/mulching head attachment, but its confirmed role in this research is clearing lower growth, not delivering a distinct "forestry mulching" service. Do not add forestry mulching as an offered method without this confirmation.
3. **The Lane County unincorporated-area tree-ordinance absence-finding** (§14, item 3) is provisional — this pass's search was not exhaustive of every Lane County code chapter. Confirm directly with Lane County Planning & Development before this page states, even hedged, that rural Lane County clearing is generally unrestricted by a tree ordinance.
4. **No specific penalty dollar figure exists for unpermitted burning** under ODF, LRAPA, or DEQ jurisdiction in this research — do not invent one at the content-create stage either.
5. **No Lane-County-specific per-acre land-clearing price exists** beyond the national/Angi-sourced figures already shipped on `/resources/land-clearing-cost-per-acre-oregon/` — this brief reuses those figures for consistency rather than introducing a third, different number; if David has real per-job cost data, it should replace the generic ranges in both places.
6. **Whether D&D's actual typical timeline for clearing an acre** can be stated even directionally — no authoritative figure was found in this research; H2 content should stay framed by vegetation density/terrain/disposal-method rather than a fabricated day-count.

**The single most important item before this brief moves to `content-create`:** item #1 above. Publishing the tree-felling/stump-grubbing framing without David's direct confirmation would risk either quietly contradicting the already-shipped homepage disclosure (`home-content.md`) or under-describing a service D&D actually offers — either error undermines the same scope-honesty discipline this entire project has followed on all four prior pages.
