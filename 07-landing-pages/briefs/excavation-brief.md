# Content Brief — D&D Land Works Excavation & Grading (`/services/excavation/`)

**Prepared:** 2026-09-08 · **Prepared by:** Ducker Creative
**Built from:** `01-research/page-research/excavation/` full research pack (files 00-08 + entity-inventory.csv + 01-keyword-universe.csv), cross-checked against `01-research/page-research/home/entity-inventory.csv` and `01-research/page-research/site-preparation/entity-inventory.csv` for canonical entity reuse, `business-info.md`, `docs/design-system.md`, `07-landing-pages/content/site-preparation-content.md` (schema `@id` pattern reference), and the current live page at `site/src/pages/services/excavation.astro`.
**Methodology note:** Same adaptation as `home-brief.md` and `site-preparation-brief.md` — this project's `content-briefs` skill was written for a prior HVAC client and references files that don't exist here. Dropped/substituted with the real D&D Land Works research files throughout.
**Pipeline position:** Third page through this project's content pipeline. **This is a rewrite/expansion brief, not a greenfield brief** — a real page already exists and is live in the Astro codebase, with a decent foundation (an accurate process list, generic equipment categories, a residential/commercial note, an "Often Paired With" section). Every recommendation below is scoped as "add," "expand," or "restructure" against that existing page.
**URL note (settled, not an open item):** Per the task instruction, this brief targets `/services/excavation/` — the nested pattern already confirmed for Site Preparation (`site-preparation-content.md`'s "Corrections applied" note resolved that page's brief-vs-codebase URL discrepancy in favor of the nested form, since the live Astro codebase — `site/src/pages/services/index.astro` plus 20+ other references — already uses it). This brief does not re-litigate that decision; it starts from the settled nested URL.
**Entity reuse:** All canonical business/location/certification entities (D&D Land Works, David Deggelman, Oregon CCB #261742, Oregon DEQ, Lane County, Eugene, Springfield, Willamette Valley, the `GeneralContractor` organization schema and the `Service` schema pattern) are reused verbatim from `home-brief.md` §11 and `site-preparation-brief.md` §11/§10 — not renamed or re-derived. The `Service.provider` reference uses the exact `@id` already shipped in `site-preparation-content.md`'s JSON-LD (`https://www.ddlandworks.com/#business`), not the `#organization` placeholder `home-brief.md` guessed at before that was confirmed.

---

## 1. Page Metadata

| Field | Value |
|---|---|
| **Canonical URL** | `/services/excavation/` |
| **Current live URL** | `/services/excavation/` (file: `site/src/pages/services/excavation.astro`) — already matches; no URL move needed for this page, unlike the site-preparation brief's flagged discrepancy |
| **Slug** | `excavation` |
| **Page type** | Core service page — P0 priority, the **highest-volume head term in the entire topical hierarchy** (`00-research-pack.md` §1), sibling to Site Preparation (both roll up to the homepage), tightly related to and cross-linked with the future Grading & Leveling page — see §6's boundary note |
| **Primary keyword** | `excavation contractor eugene or` / `excavation contractor eugene oregon` — the widest, most fragmented competitor field of any page researched so far (10 distinct businesses examined, vs. tighter sets for the homepage and site-prep pages) |
| **Co-primary keyword** | `excavation contractor lane county or` (county-wide framing) |
| **Secondary keywords** | `excavation and grading eugene oregon` (the exact blurred-term phrase several competitors use as their own heading); `pond excavation lane county` (only 2/10 competitors name pond work at all); `cut and fill grading oregon`; `rock removal excavation eugene` |
| **Semantic terms** (must appear at least once) | excavation vs. grading, cut and fill, backfill and compaction, rock removal, site access roads, erosion control, Oregon811, Oregon Utility Notification Center, call before you dig, OSHA 1926 Subpart P, Lane County Grading and Fill Permit, residential vs. commercial excavation, foundation dig, pond excavation, driveway/access road excavation, utility run, DIY vs. hire, licensed and bonded, Oregon CCB #261742, free estimate |
| **Search intent** | Commercial, decision-stage for the primary/co-primary terms; pond/cut-fill/rock-removal secondary terms are consideration-stage (`00-research-pack.md` §1) |
| **Current state / baseline** | A real, live page exists today with a genuinely decent foundation — better than the site-preparation page's starting point. It already covers: an accurate "What General Excavation Covers" process list (cut/fill, backfill/compaction, rock and debris removal, access roads, rough grading for erosion control, ponds/pads/lot reshaping — this closely tracks the All Dirt-validated process list and should be **preserved, not diluted**); "Equipment on the Job" in accurate generic-category form (excavator, dozer, compaction equipment — no fabricated brands, correctly); a one-paragraph "Residential and Commercial" note; and an "Often Paired With" section linking Grading & Leveling and Foundation Excavation. It has **zero** of: the excavation-vs-grading disambiguation, Oregon811/utility-locate content, a cost section of any kind, permit awareness, a DIY-vs-hire answer, pond-specific project-type depth, a real residential-vs-commercial comparison (beyond one sentence), or an FAQ. This is a **content-expansion/restructure brief**, not a rewrite-from-nothing brief — the existing accurate process list and equipment section should be kept and built around, not thrown out. |

---

## 2. Intent & Audience

- **Primary ICP:** A builder/GC who needs a subcontractor to dig footings or a foundation ahead of a scheduled framing start, and a rural/acreage landowner planning a specific dig project — a farm or decorative pond, a driveway/access cut into an undeveloped lot, a utility line run to a new structure, or a shop/barn pad. Secondary ICP: a homeowner or developer who received an excavation quote that came back higher than expected (usually rock or clay) and is shopping for a second opinion (`05-intent-triangulation.md` Table 2).
- **State of mind — cost anxiety, scope confusion, and utility-strike liability fear, the task brief's three named central clusters for this page:** they don't know if "excavation" and "grading" mean two different services or the same thing, and they're afraid of paying twice for overlapping work; they're worried the crew will hit rock partway through and the price will jump with no warning; they don't know who's liable if the crew hits a gas line, water main, or fiber cable underground; they're wondering whether renting an excavator and doing it themselves is actually a viable option for their specific project; and if their job is a small driveway fix or single pad, they worry it won't get real attention from a contractor also doing commercial-scale earthmoving (`05-intent-triangulation.md` Tables 1-3).
- **What they need to believe before calling:**
  1. Excavation and grading are genuinely different scopes, drawn along a real, useful line — not an arbitrary split designed to sell two services instead of one.
  2. If the crew hits rock or bad soil, that's an honest, explainable cost driver with real numbers behind it, not a bait-and-switch.
  3. D&D takes a concrete, checkable step (calling Oregon811 before digging) to protect them from a utility strike — not just a vague "we're careful" assurance.
  4. Their specific project — a pond, a driveway cut, a utility trench, a foundation dig — is something D&D has actually thought about and can scope, not a generic "we dig dirt" answer.
  5. A small residential job gets the same attention and process as a larger commercial one.

---

## 3. Voice & Angle

- **Writing voice:** Per `docs/design-system.md` v1.2 (Outfit for display/headings, Poppins for body — the typography was updated 2026-09-05 from the earlier Barlow Condensed/Barlow pairing after a direct competitor-CSS review; note CLAUDE.md's typography reference is now outdated, use Outfit/Poppins for any design-system cross-reference this brief triggers). Voice itself is unchanged from the homepage and site-preparation briefs: a plain-spoken, no-fluff Lane County excavation contractor talking directly to a builder or landowner who has a specific dig in mind. Short, declarative sentences for the disambiguation and Oregon811 trust claim; slightly longer only when explaining the cost-structure or pond-permitting mechanics.
- **Required Lane County / Oregon-specific detail (minimum 5, per `07-oregon-authority.md` for this page):**
  1. **Oregon811 (Oregon Utility Notification Center) — confirmed directly, cite without hedging.** Locate requests are free; at least 2 business days' advance notice is required before digging, per oregon.gov/puc's own stated language. Keep this figure clearly separate from the locate ticket's 30-day validity window (a 2026 OAR 952-001-0010(23) amendment, down from 45 days) — the two figures answer different questions and should never be conflated in copy.
  2. **OSHA 29 CFR 1926 Subpart P (trench safety)** — reused verbatim from the homepage pack: trenches 5 ft deep or more require a protective system; safe access within 25 ft of lateral travel is required for excavations 4 ft deep or more.
  3. **Lane County's Grading and Fill Permit** — reused verbatim from the site-preparation pack, hedged identically: a third-party permitting guide puts the threshold at roughly 50 cubic yards moved or a cut/fill slope steeper than 2:1, not independently confirmed against Lane Code Chapter 16 or the LMD's own permit page. This page should mention it briefly and cross-link to the site-preparation page's fuller permit section rather than repeating the full table — see §6 and §9.
  4. **Pond permitting (Oregon Water Resources Department / Department of State Lands) — new for this page, hedge required.** A water-rights permit generally applies if a pond diverts from a stream/spring or exceeds 9.2 acre-feet of storage; DSL regulates work near wetlands or salmon-bearing waterways; a small rain-fed pond under that threshold and 100+ feet from a mapped waterway is generally exempt. This relies on a single contractor-blog secondary source, not a direct fetch of oregon.gov/owrd or oregon.gov/dsl — hedge accordingly and recommend confirming with OWRD/DSL/Lane County for the specific parcel.
  5. **Oregon excavation labor-cost premium** — Oregon construction labor runs roughly 20% above the national average per BLS OEWS 2025 data; use this to explain why Lane County pricing likely sits toward the higher end of national cost ranges, not to state a fabricated Oregon-specific dollar figure.
- **Insider/practitioner detail that signals real local expertise (use at least 2):**
  - Naming rock ripping vs. blasting as genuinely distinct techniques — ripping is typically 50-65% cheaper and works on soft-to-moderately-firm fractured rock; blasting is needed above roughly 1,000 cubic yards or for harder rock. Zero competitors mention this distinction anywhere (`02-question-mine.md` Q24).
  - Naming that excavation and grading, while conceptually distinct, often happen as one continuous operation on a real job (excavation opens the space, grading finalizes the surface) rather than presenting them as two rigidly sequential phases — a nuance that signals actual field experience rather than a marketing-copy version of the distinction (`02-question-mine.md` Q28).

---

## 4. E-E-A-T Requirements

- **Experience (minimum 2 signals):** The real, accurate process list already on the live page (cut-and-fill, backfill/compaction, rock and debris removal, access roads, rough grading for erosion control, ponds/pads/lot reshaping), preserved and reorganized under the new H2 structure below; David Deggelman referenced and linked to `/about/`.
- **Expertise (minimum 3 signals):** The excavation-vs-grading disambiguation itself, drawn as a real, defensible line rather than a vague distinction (a definitional clarity zero of 10 competitors demonstrate); the Oregon811 process explained with its correct legal name (Oregon Utility Notification Center, operating as "Oregon 811") rather than a generic "call 811" reference; the three-part cost-structure explanation (hourly / per-cubic-yard / flat-rate) that directly answers why quotes vary.
- **Authority (minimum 3 signals):** Oregon CCB #261742 in visible body copy (reused from the live page, keep it); a direct outbound link to digsafelyoregon.com for the Oregon811 section; a direct outbound link to osha.gov's Subpart P standard.
- **Trust (minimum 4 signals):** Honest rock/cost-overrun framing with real numbers, not vague "costs may vary" language; an explicit small-job reassurance statement (a driveway fix and a commercial pad are scoped and quoted the same way); an honest, non-deflecting answer to the DIY-vs-hire question rather than a blanket "always hire a pro" scare tactic; no fabricated equipment brands, review counts, or years-in-business.

---

## 5. AI Citation Target

Copied verbatim from `00-research-pack.md` §11 (drafted to be citable by an AI system answering "who provides excavation services in Lane County, Oregon" once the site is live and indexed):

> Excavation and grading is general earthmoving work: cutting material from high points, filling low points, and bringing a site to the elevation a project needs — whether that's a foundation, a pond, a driveway, a building pad, or a utility line trench. D&D Land Works provides excavation and grading for residential and commercial projects throughout Eugene, Springfield, and Lane County, Oregon, including foundation digs, pond excavation, driveway and access-road cutting, and utility-run trenching, using an excavator, dozer, and compaction equipment matched to the site. D&D is licensed and bonded under Oregon Construction Contractors Board license CCB #261742, calls Oregon 811 (the Oregon Utility Notification Center) at least two business days before digging on every job as required by Oregon law, and follows OSHA's excavation and trenching safety standard (29 CFR 1926 Subpart P) on jobs involving deeper cuts or trenches. Free estimates are available for both residential and commercial excavation work.

**Placement:** first 30% of the page's body content, immediately after the opening paragraph — same placement rule as both prior briefs.

**Note on the Oregon811 operational claim:** this block states as fact that D&D "calls Oregon 811... on every job." Per `08-gap-analysis.md`'s explicit flag, this is a near-certain but *unconfirmed* operational claim for a licensed, bonded contractor — confirm the exact wording with David before publishing it as a specific, stated practice (see Open Items).

---

## 6. Content Structure

**Word count target: 2,000–2,600 words.** Justification: the 10 competitors examined specifically for excavation content in `04-competitor-matrix.md` show a *sharper* version of the shallowness found in the homepage and site-prep packs — even competitors with a dedicated excavation page describe the service in one or two vague sentences. Only All Dirt names the full validated process list as explicit line items (1/10); only 2/10 (McKenzie, BBC) name pond excavation at all, and neither explains cost or permitting; 0/10 explain excavation vs. grading; 0/10 name equipment even generically except Tectonic; 0/10 mention Oregon811; 0/10 publish pricing; 0/10 run a real FAQ. Matching that depth would mean matching the widest, most fragmented, and shallowest competitor field researched so far across all three packs. Instead, the target is built from the 12 H2 sections below plus the existing "Related Services" component, at the depth `00-research-pack.md` §7 specifies: a 100-150 word opening + the 130-160 word AI citation block + a process bulleted list (150-220 words) + an expanded disambiguation-and-boundary passage (100-140 words, longer than a bare 50-70 word answer because it must also state the Grading & Leveling boundary explicitly, see below) + a 5-item project-type list with pond given real depth (180-230 words) + an equipment answer (70-90 words) + a residential-vs-commercial comparison table (150-200 words) + a cost table plus rock/cost-structure narrative (200-260 words, combining two of the pack's highest-scored gaps into one section) + an Oregon811 answer (70-90 words) + a brief, cross-linked permit note (80-100 words) + a DIY-vs-hire answer (90-110 words) + a timeline comparison note (80-100 words) + a 9-question FAQ block (450-650 words) + a Related Services intro (50-80 words) + a closing CTA (50-80 words). That arithmetic lands at roughly 2,000–2,600 words — comparable in depth to the homepage and site-preparation pages, and meaningfully deeper than any of the 10 competitors examined for this page specifically.

**H1:** Excavation & Earthmoving in Eugene, Springfield & Lane County, Oregon
*(source: `00-research-pack.md` §6, adapted to match the H1 pattern the site-preparation page actually shipped with — "[Service] in Eugene, Springfield & Lane County, Oregon" — rather than the research pack's own plainer "...in Lane County, Oregon" suggestion, for cross-page consistency. The research pack is explicit that this should **not** be "Excavation & Grading" as a single blurred term the way the current live page's H1 reads today — see §6's own rationale: using "Earthmoving" instead of "Grading" in the H1 avoids pre-committing the page to the exact blurred terminology this page's core job is to disambiguate. **Flag for David/dev before build:** this changes the H1 of an already-live page; the URL/slug (`/services/excavation/`) does not change, only the on-page headline and `<title>` framing.)*

**Opening paragraph guidance (first 100-150 words):** Open by naming what excavation actually is in plain terms — general earthmoving for a defined purpose (a foundation, a pond, a driveway, a utility trench) — without repeating the site-preparation page's own "site prep vs. excavation" disambiguation from scratch (that page already owns that distinction; this page can reference it in one clause and move on). Follow immediately with the 130-160 word AI citation block from §5 above.

**H2 sections, in order** (every H2 traces to a competitor-matrix finding or a scored gap — cited inline):

| # | H2 (exact text) | Traces to | Format |
|---|---|---|---|
| 1 | What Does Excavation & Earthmoving Cover? | Matrix A: the All Dirt-validated process list is named as explicit line items by only 1/10 competitors — the current live page already does this well and should be preserved/strengthened, not diluted (`08-gap-analysis.md` Gap #8, score 13.5, "already gets right") | Bulleted list, 6-8 items (cut-and-fill, backfill/compaction, rock/debris removal, access roads, rough grading for erosion control, ponds/pads/reshaping); `ItemList` |
| 2 | What's the Difference Between Excavation and Grading? | Gap #2, disambiguation (tied score 50.0, highest in the pack) — 0/10 competitors distinguish the two; Danco, Strasheim, and McKenzie use the terms interchangeably | Answer-first, 50-70 words, **plus an explicit boundary statement (50-70 additional words) naming the future Grading & Leveling page and stating exactly what stays on each page — see "Boundary Note" below**; `Speakable` |
| 3 | What Kind of Project Is This For? | Gap #5, pond project-type gap (score 16.0) + entity map §7 project types (foundation dig, pond, pad, driveway, utility run) — only 2/10 competitors name pond work, none explain cost or permitting | Bulleted list, 5 items, one scope-difference sentence each; pond gets a second sentence naming the OWRD/DSL framework (hedged); `ItemList` |
| 4 | What Equipment Shows Up on the Job? | Gap #7, equipment-specificity gap (score 13.5) — 0/10 name equipment except Tectonic (mini excavators, conveyor belt); directly named in the topical map's FAQ list | Answer-first, 70-90 words; generic categories only (excavator, dozer, compactor), reused from the live page's existing accurate framing; `Speakable` |
| 5 | Residential vs. Commercial Excavation — What's Actually Different? | Gap #6, residential-vs-commercial explanation gap (score 20.0) — 0/10 competitors explain this, several claim both audiences generically | Comparison table: columns Residential / Commercial (equipment, crew size, timeline, complexity) |
| 6 | How Much Does Excavation Cost? | Gap #3 (rock/cost-overrun honesty, score 40.0) + Gap #4 (cost-structure explanation, score 40.0), both tied — 0/10 competitors publish any pricing or explain quote variance | Comparison table: Pricing Model / Typical Range / What Drives It (hourly, per-cubic-yard, rock premium), plus a short honest paragraph on the rock/clay cost jump |
| 7 | Does D&D Call Before Digging? | Gap #1, Oregon811 competence signal (tied score 50.0, highest in the pack) — 0/10 competitors mention Oregon811, utility locates, or call-before-you-dig anywhere | Answer-first, 70-90 words + direct link to digsafelyoregon.com; `Speakable` |
| 8 | Do You Need a Permit to Excavate in Lane County? | Reused/cross-linked from the site-preparation pack's fuller permit section, per `00-research-pack.md` §3's explicit instruction not to duplicate it | Short answer-first, 80-100 words, hedged per §3 above, cross-linking to `/services/site-preparation/` for the full permit table |
| 9 | Can I Rent an Excavator and Do This Myself? | Gap #10, DIY-vs-hire threshold (score 15.0) — task-brief-named objection, 0/10 competitors address it | Answer-first + honest explanation, 90-110 words; `Speakable` |
| 10 | How Long Does Excavation Take? | Process/timeline theme reused from the homepage pack, scoped to excavation-specific figures | Short comparison note: residential (days) vs. commercial (1-3+ weeks) |
| 11 | Frequently Asked Questions | Gap #11, FAQ-content gap (score 13.5) — effectively 0/10 competitors run a real FAQ | `FAQPage`-formatted Q&A, 9 questions (see §8 below) |
| 12 | Related Services *(non-H2 UI component — the existing `ServiceCard` grid)* | Structural continuity — the current live page's card grid (Site Preparation, Grading & Leveling, Foundation Excavation) is a genuine asset; per `08-gap-analysis.md`'s "already gets right" note it should be preserved, with intro copy expanded to restate the Grading & Leveling boundary plainly rather than leaving it implicit | Card grid, existing `ServiceCard` component; add a fourth card for Utility Excavation, matching the down-link entities in §9 |
| 13 | Get Your Dirt Work Scoped | Matches the current live page's existing CTA block verbatim ("Get Your Dirt Work Scoped" / "Free estimate for excavation and earthmoving anywhere in Lane County") — keep this copy, it already fits | Short answer-first + CTA block |

Format minimums are satisfied: ≥2 comparison tables (H2 #5 and #6), ≥2 bulleted lists (H2 #1 and #3) — per the parent methodology's format-diversity rule and `00-research-pack.md` §7's own Content Format Plan.

### Boundary Note — What This Page Owns vs. What the Future Grading & Leveling Brief Must NOT Duplicate

This is the single most important structural instruction in this brief, per the task's explicit requirement. Per `00-research-pack.md` §5, `08-gap-analysis.md`'s "how this page draws its line" section, and `04-competitor-matrix.md` Matrix C (which found All Dirt and Braun already use a workable version of this split):

- **THIS page (`/services/excavation/`) owns:** grading-to-elevation that happens *because* something is being dug — cut-and-fill to bring a site to design grade, backfill and compaction after a trench or footing is placed, and rough grading to finish elevation as the closing step of an excavation project. If a customer is digging a foundation, a pond, a driveway, or a utility trench, and grading is part of finishing that same job, it belongs here.
- **The future Grading & Leveling page owns:** standalone re-sloping, yard leveling, and drainage-grading for an *existing* surface problem where nothing new is being dug — a yard that floods, an uneven lawn, a driveway that needs re-sloping without a new cut. If there's no new excavation involved, it belongs there, not here.
- **Instruction to the future `/services/grading-leveling/` content brief:** do not re-describe cut-and-fill, backfill/compaction, or rough-grading-as-part-of-a-dig — those are this page's scope and are already covered in H2 #1 and #2 above. The Grading & Leveling brief should instead build its own content around re-sloping an existing yard, correcting a drainage problem on ground that isn't being newly excavated, and finish-grading/re-grading work that stands alone from any dig. Cross-link heavily in both directions rather than merging or overlapping.
- This distinction must be stated **explicitly** in H2 #2 (not left implicit the way the current live page's "Often Paired With" section leaves it) and restated briefly in the Related Services intro copy (H2 #12/non-H2 component above).

---

## 7. Unique Angle

Pulled directly from the top gaps in `08-gap-analysis.md` — every entry is a specific, evidence-based differentiator, not a slogan:

1. **States plainly that D&D calls Oregon811 (the Oregon Utility Notification Center) at least 2 business days before any dig**, as Oregon law requires — a concrete, checkable, zero-cost trust signal that zero of 10 competitors mention anywhere (`08-gap-analysis.md` Gap #1, tied top score 50.0). This is the single most novel claim across all three research packs to date.
2. **Draws a real, defensible line between excavation and grading**, rather than using the terms interchangeably the way most of this market does (Danco, Strasheim, McKenzie) — and explicitly hands off standalone re-sloping/yard-leveling work to the future Grading & Leveling page instead of leaving the boundary implicit (`08-gap-analysis.md` Gap #2, tied top score 50.0).
3. **Names the real cost jump when a crew hits rock** ($5-$15/cu yd standard vs. $50-$200/cu yd rock, a 10-40x increase) and explains the three real pricing models (hourly, per-cubic-yard, flat-rate) rather than a vague "quotes vary" non-answer (`08-gap-analysis.md` Gaps #3 and #4, both tied score 40.0 — zero competitor coverage of either).
4. **Names pond excavation as a real, costed, permitted service** — with real cost context ($5,000-$25,000/acre for farm ponds) and Oregon's OWRD/DSL permitting framework (hedged) — where only 2 of 10 competitors mention pond work at all and neither explains cost or permitting (`08-gap-analysis.md` Gap #5, score 16.0).
5. **Answers the DIY-vs-hire question honestly** rather than dodging it or using blanket scare language — rental is viable for small, shallow, obstacle-free digging, but foundation/utility/slope work near property lines carries real liability and skill requirements that favor hiring (`08-gap-analysis.md` Gap #10, score 15.0 — zero competitor coverage).

These five must surface in the opening paragraph or immediately after (at minimum the Oregon811 claim and the disambiguation, introduced early), in their dedicated H2 sections (#7, #2, #6, #3, #9 respectively), and echoed briefly in the closing CTA copy.

---

## 8. FAQ Section

9 questions, sourced verbatim from `02-question-mine.md`'s "FAQ Shortlist for This Page," cross-checked against `04-competitor-matrix.md`: **effectively 0 of the 10 competitors run a real, retrievable FAQ on their excavation content** (All Dirt links to an FAQ section but its contents weren't retrievable in this pass), so every question below is uncontested ground.

| # | Question | Source in question-mine | Answer guidance (40-90 words, direct answer first) |
|---|---|---|---|
| 1 | What's the difference between excavation and grading? | Q3/Q4 (pre_call/definitional — the page's own core disambiguation job) | Lead with the plain distinction: excavation removes earth to create space (a foundation, a pond, a trench); grading shapes the surface for drainage and elevation. Note they often happen as one continuous operation on a real job, and point to the Grading & Leveling page for standalone re-sloping work. |
| 2 | How much does excavation cost? | Q19/Q22 (cost) | Lead with the general range ($1,400-$6,000 typical residential project, or $2.50-$15/cu yd standard soil), clearly labeled as general, and name that hourly, per-cubic-yard, and flat-rate are all real pricing models depending on job type. |
| 3 | What happens if the crew hits rock during excavation? | Q23 (objection/anxiety) | Lead with the honest cost jump: standard excavation runs $5-$15/cu yd, rock can run $50-$200/cu yd; frame this as a real, explainable cost driver, not a bait-and-switch. |
| 4 | What's the difference between residential and commercial excavation? | Q36 (decision, directly named in topical map §6.2) | Lead with the real distinction: residential jobs typically use compact machines (mini excavators, skid steers) moving at most a few hundred cubic yards; commercial jobs are measured in acres with full-size equipment and multiple crews. |
| 5 | What equipment is used for excavation work? | Q6/Q7 (pre_call, directly named in topical map §6.2) | Lead with generic categories: an excavator handles digging and rock work, a dozer pushes and shapes material across larger cuts, compaction equipment runs behind the fill — no brand names. |
| 6 | Do I need to call 811 before digging in Oregon? | Q41 (oregon_specific, genuinely unique — zero competitors mention this) | Lead with "yes" — Oregon811 (the Oregon Utility Notification Center) requires at least 2 business days' notice before digging, and locate requests are free. |
| 7 | Do I need a permit to excavate in Lane County? | Q45 (oregon_specific/permitting, reused from the site-preparation pack) | Lead with "it depends on scope," then hedge the cubic-yard/slope figures identically to the site-preparation page's own FAQ answer #5 — do not state as an exact confirmed county rule; cross-link to the site-prep page's fuller permit section. |
| 8 | How long does excavation take? | Q34 (process, reused from homepage pack) | Lead with: often just a few days for a residential job once permits/site prep are done; commercial or multi-building excavation commonly runs 1-3+ weeks. |
| 9 | Can you excavate for a pond, driveway, or utility line, or just foundations? | Q9/Q12/Q14 (project_types) | Lead with "yes to all of them" and name the specific project types D&D scopes — foundation digs, ponds, driveways/access roads, and utility runs — each walked and quoted individually. |

No FAQ answer should fabricate a statistic not already present in the research pack, and no answer should state the Lane County grading/erosion permit cubic-yard or slope figures, the Oregon811 penalty amount, or the pond-permitting acre-foot threshold as an exact, confirmed rule without the hedging language specified in §3 and §14.

---

## 9. Internal Links

**IN (what will link to this page)** — per the topical map's hub-and-spoke rule:

| From | Anchor text example | Placement |
|---|---|---|
| Homepage (`/`) | "excavation and grading" | H2 #2 services list of `home-brief.md` |
| `/services/site-preparation/` | "excavation" (down-link, since site prep leads into excavation) | H2 #3 sequencing section of `site-preparation-content.md`, already present as "then excavation follows" |
| `/service-areas/eugene/`, `/service-areas/springfield/` (future city pages) | "excavation contractor in Eugene" / "excavation in Springfield" | Body, services-offered section of each city page |
| `/services/grading-leveling/`, `/services/foundation-excavation/`, `/services/utility-excavation/`, `/services/drainage-excavation/` (future sibling pages) | "back to excavation" | Each sibling page's "parent cluster" link, per the topical map's hub-and-spoke rule |
| `/about/` | Breadcrumb | Breadcrumb |
| Global header/footer | "Services" nav item | Every page |

**OUT (this page → other pages)**, matching the topical map's internal-linking plan and the entity map's down-link targets (`03-entity-map.md` §2):

| To | Anchor text | Placement |
|---|---|---|
| `/` (homepage) | "D&D Land Works" or "our full range of excavation services" | Breadcrumb + body-late (up-link to hub) |
| `/services/site-preparation/` | "site preparation" | Opening paragraph (brief cross-reference, not a re-derivation) + H2 #8 (permit cross-link) |
| `/services/grading-leveling/` | "grading and leveling" | H2 #2 (boundary statement) + Related Services card |
| `/services/foundation-excavation/` | "foundation excavation" | H2 #3 (foundation dig project type) + Related Services card |
| `/services/utility-excavation/` | "utility excavation" | H2 #3 (utility run project type) + Related Services card — **this link is currently missing from the live page's card grid; add it as the fourth card** |
| `/services/drainage-excavation/` | "drainage excavation" | H2 #1 (erosion control / rough grading step) |
| `/service-areas/eugene/`, `/service-areas/springfield/` | "Eugene" / "Springfield" | H1/opening paragraph area, and H2 #5 (residential vs. commercial, "whether your job is a small residential lot in Eugene or a larger commercial site elsewhere in Lane County") |
| `/about/` | "David Deggelman" | Trust/CCB mention |
| `/contact/` | "get a free estimate" / "call 541-401-8726" | H2 #13 CTA + hero |

No "click here" / "learn more" anchors — every anchor is descriptive, per the parent methodology's rule (already followed on the current live page).

---

## 10. Schema Requirements

This page follows the exact pattern `site-preparation-content.md` shipped with, not the earlier `#organization` placeholder `home-brief.md` guessed at before the real `@id` was confirmed:

- **Primary `@type`: `Service`** — CONFIRMED REAL schema.org type, reused from the homepage pack's and site-preparation pack's confirmed schema.org research rather than re-checking from scratch (`00-research-pack.md` §9).
- **`provider`**: `{"@id": "https://www.ddlandworks.com/#business"}` — the exact `@id` already shipped in `site-preparation-content.md`'s JSON-LD. Do not redefine the organization inline and do not use a different placeholder.
- **`Service` required fields:** `name` ("Excavation and Grading"), `provider` (the `@id` reference above), `areaServed` (Lane County + Eugene/Springfield at minimum, plain city-name strings, matching the full city list already used in `site-preparation-content.md`'s schema), `serviceType` ("Excavation and Grading"), `description` (can reuse a trimmed version of the AI citation block from §5).
- **`FAQPage`** — for the 9-question set in §8; FAQ schema answers must match the visible FAQ text exactly.
- **`BreadcrumbList`** — Home → Services → Excavation & Grading, matching the current live page's already-implemented `Breadcrumbs` component. **Naming decision for David/dev:** if the on-page H1 changes to "Excavation & Earthmoving" per §6, decide whether the breadcrumb label follows suit or stays "Excavation & Grading" for continuity with the URL slug and any existing external links — this brief recommends matching the new H1 for internal consistency, but flags it as a call to confirm before build.
- **`Speakable`** — flag the answer-first passages in H2s #2 (disambiguation), #4 (equipment), #7 (Oregon811), and #9 (DIY vs. hire) as speakable-eligible.
- **Do NOT implement `AggregateRating`/`Review` schema** — same rule as both prior briefs; D&D has zero reviews at launch.

---

## 11. Entity Profile

Pulled from this folder's `entity-inventory.csv`, cross-checked against `home/entity-inventory.csv` and `site-preparation/entity-inventory.csv` for reused canonical forms. Business/location/certification entities are **not re-derived** — see `home-brief.md` §11 and `site-preparation-brief.md` §11 for their original validation notes.

**Primary entity (salience 10, reused unchanged):**
- **D&D Land Works** (Organization → schema `GeneralContractor`) — `NOT_FOUND` externally. Must appear in the first sentence of body copy and in the `Service.provider` reference.

**Page-defining entity (salience 10, new for this page):**
- **Excavation & Grading** (Service) — the page's own subject, `VALIDATED_LOCAL`, 10/10 competitors offer some form.

**Major supporting process entities (salience 6-8, all `VALIDATED_LOCAL`):**
- Cut and Fill (8, canonical home moves to THIS page from the site-prep pack's sequencing mention), Backfill and Compaction (7), Rock Removal (7, genuine cost-honesty opportunity), Site Access Roads (6), Erosion Control (6) — all reused canonical forms per `03-entity-map.md` §6, all named as explicit line items by only 1/10 competitors (All Dirt).

**New process/technique entities (salience 3-4):**
- Rock Ripping (4, `VALIDATED`) and Controlled Rock Blasting (3, `VALIDATED`) — genuine practitioner-level specificity, per §3 above.

**Oregon811 entities (salience 5-9, all new, verified directly):**
- Oregon Utility Notification Center / "Oregon 811" (9) — `VALIDATED` directly on digsafelyoregon.com, the single most load-bearing new fact for this page.
- Oregon Public Utility Commission (7) — `VALIDATED`, enforcement body; do not invent a penalty dollar figure.
- OAR 952-001 (5) — `VALIDATED_LOCAL`; the 30-day ticket-life figure is distinct from the 2-business-day notice requirement — do not conflate.

**Pond-permitting entities (salience 5-6, all new, single-source hedge required):**
- Oregon Water Resources Department (6) — `VALIDATED`.
- Oregon Department of State Lands (5) — `VALIDATED`.

**Project-type entities (salience 6-7, distinct flavor from the site-prep pack's building-occasion project types):**
- Foundation Dig (7), Pond (7, genuine competitor gap — only 2/10 name it), Building/House/Shop/Barn Pad (6, overlaps with site-prep pack's Shop/Barn Pad — reuse that canonical form), Driveway (7), Utility Run (6) — all `VALIDATED_LOCAL`.

**Reused geo/business entities (unchanged from home pack):** David Deggelman, Oregon CCB #261742, Oregon DEQ, OSHA 1926 Subpart P, Willamette Valley, Eugene, Springfield — same validation status and do-not-fabricate rules as `home-brief.md` §11.

**Sibling/parent entities (explicitly NOT this page's scope — see §6 Boundary Note):**
- Grading & Leveling (Service, salience 7) — sibling page, not this page's scope.
- Site Preparation (Service, salience 8) — umbrella parent; that page already owns the site-prep-vs-excavation disambiguation, this page does not repeat it.

**Equipment entities:** generic categories only (excavator, skid steer, dozer, dump truck, compactor) — do not name brands (Caterpillar, John Deere, etc. are `NOT_FOUND_FOR_DD`), same rule as both prior pages.

**Co-occurrence requirements specific to this page** (per `03-entity-map.md` §8):
- "Excavation" named as a service — 10/10 competitors — **mandatory, table stakes**
- Full validated process list as explicit line items — 1/10 (All Dirt) — this page should match or exceed
- Pond excavation named specifically — 2/10 (McKenzie, BBC) — **genuine differentiator, mandatory to include with real depth**
- Excavation-vs-grading distinction explained — 0/10 — **the page's defining differentiator, mandatory**
- Oregon811/utility locates mentioned anywhere — 0/10 — **the single most novel claim across all three packs, mandatory**
- Equipment named even generically — 0/10 (except Tectonic) — mandatory to preserve from the live page
- Real pricing/cost range for excavation — 0/10 — mandatory to include (hedged where required)
- FAQ specific to excavation — effectively 0/10 — mandatory to include

---

## 12. CTA Requirements

| Placement | Copy | Type/link |
|---|---|---|
| Above the fold (hero, already live) | "Call 541-401-8726" / "Free Estimate" | `tel:5414018726` and `/contact/` — **keep the existing Hero component copy unchanged** |
| Mid-page (after H2 #3, project types) | "Not sure what your project needs? Get a free estimate and we'll walk the site." | `/contact/` |
| After H2 #6 (cost section) | "Want a real number instead of a range? Request a free estimate." | `/contact/` |
| H2 #13 (closing CTA, already live) | "Get Your Dirt Work Scoped" + "Free estimate for excavation and earthmoving anywhere in Lane County." | `tel:5414018726`, `/contact/` — **reuse the existing `CTABlock` copy verbatim, it already fits** |

No fabricated urgency/scarcity language, consistent with both prior briefs — nothing in the research pack supports it.

---

## 13. Images Required

**Current state: the live page has zero real project photos**, same gap as both prior pages — the `Hero` component is text-only, and no `<img>` beyond shared components appears in `excavation.astro`. This is a genuine, unaddressed gap, not something to paper over with unbranded stock presented as D&D's own work (same rule as `home-brief.md` §13 and `site-preparation-brief.md` §13).

| # | Description | Alt text guidance | Type | Status |
|---|---|---|---|---|
| 1 | Hero image — an excavator mid-dig on a Lane County site (foundation, trench, or pond) | "Excavation and earthmoving contractor working a job site in Lane County, Oregon" | Hero | **Gap — no real photo yet** |
| 2 | A pond excavation project, in progress or before/after | "Pond excavation in Lane County, Oregon" | Evidence, near H2 #3 (project types) — genuinely valuable given this is the page's clearest unclaimed differentiator | **Gap — flagged as a genuine absence; even a single real pond-dig photo would meaningfully strengthen this page's most unique claim** |
| 3 | A driveway or utility-trench cut in progress | "Driveway access excavation, Lane County, Oregon" | Evidence, near H2 #3 | **Gap — needs a real jobsite photo** |
| 4 | Equipment close-up (excavator or compactor actively working, not staged) | "Excavation equipment on a Lane County jobsite" | Evidence, near H2 #4 (equipment) | **Gap — genuinely absent; ties directly to the equipment-specificity differentiator** |
| 5 | Simple illustrated diagram or icon set for the Oregon811 process (call → wait 2 business days → utilities marked) | "Oregon811 call-before-you-dig process" | Supporting graphic, near H2 #7 | Can launch as a simple illustrated 3-step graphic — lower priority to fix than the photo gaps above |

Flag to David: same as both prior briefs — launching with limited or no photography is an acceptable temporary measure, but should be tracked as a launch gap to close with real jobsite photography (a pond dig or utility trench would be especially valuable given how unclaimed those project types are in this market) within the first few months.

---

## 14. Authority Signals to Cite

Pulled from `07-oregon-authority.md`, with the verification/hedging status made explicit per this project's central sourcing rule:

1. **Oregon811 / Oregon Utility Notification Center — CONFIRMED, cite normally, no hedge needed.** "Oregon811 (officially the Oregon Utility Notification Center) requires at least 2 business days' advance notice before starting any digging project, and locate requests are free." *(Source: digsafelyoregon.com; Oregon PUC — Call Before You Dig, oregon.gov/puc/safety/pages/call-before-you-dig.aspx; verified directly 2026-09-08 — this fact was fetched from the primary sources, not a secondary guide, and can be stated as confirmed. Keep the 2-business-day advance-notice figure clearly separate from the 30-day locate-ticket validity window — the two are not the same thing.)*
2. **OSHA 29 CFR 1926 Subpart P — CONFIRMED, reused verbatim, cite normally.** "Trenching and excavation work follows OSHA 29 CFR 1926 Subpart P, which requires a protective system for trenches 5 feet deep or more, and safe access within 25 feet of lateral travel for excavations 4 feet deep or more." *(Source: OSHA — 1926 Subpart P, osha.gov/laws-regs/regulations/standardnumber/1926/1926SubpartP; verified 2026-09-08 in the homepage pack, reused here without re-verification.)*
3. **Lane County Grading and Fill Permit — HEDGE REQUIRED, reused from the site-preparation pack.** "A Lane County permitting guide indicates a Grading and Fill Permit is generally required when a project moves more than 50 cubic yards of earth or creates a cut/fill slope steeper than 2:1 — for the full permit picture, see D&D's site preparation page, or confirm directly with Lane County's Land Management Division." *(Source: Willamette Craftworks — Lane County Building Permits: 2026 Homeowner's Guide; verified 2026-09-08 in the site-preparation pack, reused here as a brief cross-linked mention, not a full restatement.)*
4. **Pond permitting (OWRD/DSL) — HEDGE REQUIRED, single-source caveat.** "A pond that diverts water from a stream or spring, or exceeds roughly 9.2 acre-feet of storage, generally needs an Oregon Water Resources Department water-rights permit; ponds near wetlands or salmon-bearing waterways may also involve the Department of State Lands. A small, rain-fed pond under that threshold and set back from any mapped waterway is generally exempt — confirm with OWRD/DSL and Lane County for your specific parcel." *(Source: Iron & Earth Site Services — Pond Construction in Oregon: What You Can Build Without a Permit; verified 2026-09-08 — a single contractor-blog secondary source, not a direct fetch of oregon.gov/owrd or oregon.gov/dsl's own permit pages. Do not state the 9.2 acre-foot figure as an exact, litigation-proof number.)*
5. **Oregon excavation labor-cost data — present as general context, not a Lane-County-specific number.** "Oregon's construction labor costs run roughly 20% above the national average, which is one reason Lane County excavation pricing likely sits toward the higher end of national cost ranges." *(Source: CostFlowAI — Oregon Excavation Cost Calculator, citing BLS OEWS 2025 data directly; verified 2026-09-08. No Lane-County-specific per-cubic-yard figure exists — do not present the national ranges as D&D's own quoted pricing.)*

**Explicit hedging instruction for the content writer:** signals #3 and #4 above must use hedged, attributed language in both body copy and the relevant FAQ answers (§8, Q7) — never state the Lane County permit thresholds or the pond acre-foot figure as an exact, directly-confirmed rule. Signals #1 and #2 were verified against primary sources directly and may be stated as fact without hedging. Signal #5 should be labeled as general Oregon-wide labor-cost context, not a Lane County or D&D-specific number. Do not state a specific Oregon811 violation penalty dollar amount anywhere on the page — none was found in this research pass.

Density target: same as both prior briefs, roughly 1 statistic per 300-500 words of body copy, at least one external authority link per major H2 section (especially H2 #6 cost and H2 #7 Oregon811).

---

## Open Items Requiring David's Input Before Content-Create

Carried forward from `00-research-pack.md`'s "Honest Limitations" section and `08-gap-analysis.md`'s "Gaps that require David's input" — do not invent values for these:

1. **Whether D&D's actual field process includes calling Oregon811 before every dig.** This is a near-certain assumption for a licensed, bonded contractor, but the AI citation block in §5 and the H2 #7 section both state it as a specific, active practice — confirm the exact wording with David rather than stating it as fact if there's any uncertainty.
2. **Whether D&D has performed pond excavation before**, or would be scoping it as a new-but-capable offering — affects how confidently H2 #3's pond content can be framed (as established experience vs. a capable-but-new service).
3. **Real pricing ranges specific to D&D's own excavation jobs**, if David is willing to share even rough figures — would strengthen H2 #6 beyond the generic national/Oregon-labor-cost-adjusted ranges currently available.
4. **Whether D&D's equipment fleet matches the generic "excavator, dozer, compactor" framing** already on the live page, or whether specific sizes/classes (without brand names) should eventually be named — affects how far H2 #4 can go beyond the current generic-category framing.
5. **The H1 change from "Excavation & Grading" to "Excavation & Earthmoving"** flagged in §6 and the breadcrumb-label decision flagged in §10 — both are recommended by the research but change text on an already-live page and should be confirmed before build.

**The single most important item before this brief moves to `content-create`:** confirming item #1 above (D&D's actual Oregon811 practice) — it is the single most novel, most load-bearing claim this page makes (the AI citation block, the opening paragraph, and H2 #7 all state it), and publishing an unconfirmed operational claim as fact would be the highest-risk error this brief could otherwise introduce, consistent with this project's no-fabrication rule.
