# Content Brief — D&D Land Works Grading & Leveling (`/services/grading-leveling/`)

**Prepared:** 2026-09-08 · **Prepared by:** Ducker Creative
**Built from:** `01-research/page-research/grading-leveling/` full research pack (files 00-08 + entity-inventory.csv + 01-keyword-universe.csv), cross-checked against `01-research/page-research/home/entity-inventory.csv`, `01-research/page-research/site-preparation/entity-inventory.csv`, and `01-research/page-research/excavation/entity-inventory.csv` for canonical entity reuse, `business-info.md`, `docs/design-system.md`, `07-landing-pages/content/excavation-content.md` (voice/tone and schema `@id` pattern reference), and the current live page at `site/src/pages/services/grading-leveling.astro`.
**Methodology note:** Same adaptation as `home-brief.md`, `site-preparation-brief.md`, and `excavation-brief.md` — this project's `content-briefs` skill was written for a prior HVAC client and references files that don't exist here. Dropped/substituted with the real D&D Land Works research files throughout.
**Pipeline position:** Fourth page through this project's content pipeline. **This is a rewrite/expansion brief, not a greenfield brief** — a real page already exists and is live in the Astro codebase, with a genuinely good conceptual foundation (an evocative, accurate framing of what grading actually does, a real process list, accurate generic equipment framing) but zero of this page's highest-value gap content, and one line item that falls outside this page's confirmed scope — see §1 and §6.
**URL note (settled, not an open item):** Per the task instruction, this brief targets `/services/grading-leveling/` — the nested pattern already confirmed for Site Preparation and Excavation & Grading in the live Astro codebase (`site/src/pages/services/grading-leveling.astro` already lives at this path; no URL move is needed for this page).
**Entity reuse:** All canonical business/location/certification entities (D&D Land Works, David Deggelman, Oregon CCB #261742, Oregon DEQ, Lane County, Eugene, Springfield, Willamette Valley, the `GeneralContractor` organization schema and the `Service` schema pattern) are reused verbatim from the three prior briefs — not renamed or re-derived. The `Service.provider` reference uses the exact `@id` already shipped in `site-preparation-content.md` and `excavation-content.md`'s JSON-LD (`https://www.ddlandworks.com/#business`).

---

## 1. Page Metadata

| Field | Value |
|---|---|
| **Canonical URL** | `/services/grading-leveling/` |
| **Current live URL** | `/services/grading-leveling/` (file: `site/src/pages/services/grading-leveling.astro`) — already matches; no URL move needed |
| **Slug** | `grading-leveling` |
| **Page type** | Core service page — P0 priority, sitting below Excavation & Grading in the site hierarchy per the topical map (§6.3), cross-linked heavily with it, Site Preparation, Drainage Excavation (future), Driveway Repair, and Slope Stabilization |
| **Primary keyword** | `land grading eugene or` / `land grading eugene oregon` (per topical map §6.3 and `00-research-pack.md` §1) |
| **Co-primary keyword** | `yard leveling eugene or` / `grading contractor lane county oregon` (homeowner-language and contractor-language variants of the same head intent; both genuinely uncontested per `04-competitor-matrix.md`) |
| **Secondary keywords** | `fix drainage slope yard`; `regrade yard for drainage`; `is this a landscaping job or an excavation job` (this page's single clearest content opportunity — zero competitors answer it anywhere); `lawn leveling cost oregon` / `cost to level a yard oregon` |
| **Semantic terms** (must appear at least once) | positive drainage slope, negative grade, low spot, swale, French drain, berm, topdressing, finish/fine grading, cut-and-fill balancing (yard-scale), Oregon Residential Specialty Code §R401.3, Lane County Grading and Fill Permit, licensed and bonded, Oregon CCB #261742, free estimate |
| **Search intent** | Mixed: primary/co-primary keywords are commercial decision-stage; the disambiguation and drainage-slope-standard queries are informational/consideration-stage — a different mix than the three prior pages, which skewed harder toward decision-stage terms (`00-research-pack.md` §1) |
| **Current state / baseline** | A real, live page exists today with a genuinely strong conceptual opening ("Grading isn't just flattening dirt. It's setting a slope shallow enough to be usable but steep enough that water actually moves off it") and an accurate generic-equipment section (dozer/skid steer for bulk shaping, excavator with smooth bucket and laser level for fine grading — no fabricated brands). It has **zero** of: the landscaping-vs-excavation disambiguation, the ORSC §R401.3 drainage-slope-standard explanation, permit guidance, the topdressing-vs-regrade decision threshold, the swale-vs-French-drain distinction, or an FAQ. **It also currently contains one bullet that falls outside this page's confirmed scope: "Cutting building pads level and to design elevation" is grading tied to a new build, which belongs on Excavation & Grading / Site Preparation, not here — see §6 for the required fix.** This is a **content-expansion/restructure brief**, not a rewrite-from-nothing brief — the existing accurate framing and equipment section should be preserved, the out-of-scope bullet should be removed or replaced, and the page should be built out around the gaps above. |

---

## 2. Intent & Audience

**This page's buyer is a meaningfully different mindset than the homepage, Site Preparation, or Excavation & Grading pages' buyer** — those three pages' buyers are mid-project (new build, new dig, active site). This page's buyer already has a house and a yard, and has a problem that's been sitting there — sometimes for years — that they've just decided to finally deal with (`05-intent-triangulation.md`).

- **Primary ICP:** A Lane County homeowner with an existing, already-developed lot whose yard has a specific surface problem — water that pools after every rain, a lawn that slopes the wrong way toward the foundation, a low spot that never dries out, or a yard that "was never right" since the house was built. Secondary ICP: a homeowner planning new landscaping, a patio, or a fence who needs the yard leveled first; a seller whose home inspector or realtor flagged negative grade at the foundation.
- **State of mind — more price-sensitive, more DIY-curious, and event-triggered, a genuinely different profile than the three prior pages' buyers:**
  1. They don't know whether this is a "landscaping" problem or an "excavation" problem, and so don't know who to even call (`02-question-mine.md` Q1/Q46; `04-competitor-matrix.md` confirms 0/8 competitors — and no landscaping-company content either — answers this).
  2. They worry the job is too small to matter to a company that mostly does bigger excavation/site-prep work (`05-intent-triangulation.md` Table 1, sharper here than on any prior page since this page's typical job — a few hundred to a few thousand square feet, a few inches of cut/fill — is genuinely the smallest of the four pages researched so far).
  3. They've possibly already tried a cheap fix (a few loads of topsoil, some raking) and it didn't hold, and they don't know if that means they need a real contractor or just a bigger version of the same fix.
  4. They're worried regrading will tear up an established lawn, landscaping beds, or a sprinkler system.
  5. They don't know if a permit requirement will turn a simple yard fix into a bureaucratic ordeal.
  6. They don't know if their sloped yard is actually damaging the house (foundation, moisture) or is just an annoyance.
- **What they need to believe before calling:**
  1. This is a real, definable job — not something they have to guess whether a landscaper or an excavation contractor handles.
  2. A yard-sized job gets real, honest attention from D&D, not a "sorry, that's too small for us" response.
  3. There's a real, verifiable technical standard (not folklore) for what their yard's slope should actually be.
  4. Most jobs like theirs don't require a permit, so this isn't a bigger ordeal than it needs to be.
  5. If a cheaper fix (topdressing) is genuinely the right call for their specific problem, D&D will tell them that honestly rather than upselling a full regrade they don't need.

---

## 3. Voice & Angle

- **Writing voice:** Per `docs/design-system.md` v1.2 (Outfit for display/headings, Poppins for body). Voice is unchanged from the three prior briefs: a plain-spoken, no-fluff Lane County excavation contractor talking directly to a homeowner. This page in particular should lean into the current live page's own strongest asset — its plain, concrete framing of what grading actually does ("setting a slope shallow enough to be usable but steep enough that water actually moves") — and sharpen it with a real code citation rather than replacing the voice.
- **Required Lane County / Oregon-specific detail (minimum 5, per `07-oregon-authority.md` for this page):**
  1. **Oregon Residential Specialty Code §R401.3 (Drainage) — verified directly against ICC's published Oregon code text (2017/2021/2023 editions, identical substantive language across all three):** grade must fall a minimum of 6 inches within the first 10 feet from a foundation (roughly a 5% slope); where a lot line, wall, or other barrier prevents that, an alternate minimum 5% slope plus a drain or swale is required instead; impervious surfaces within 10 feet of the foundation must slope not less than 2% away from the building. This is the single most load-bearing, most citable fact on this page — state it as confirmed, not hedged.
  2. **Lane County's Grading and Fill Permit, applied honestly to this page's smaller job size** (reused from the site-preparation pack, hedged identically: a third-party permitting guide puts the threshold at roughly 50 cubic yards moved or a cut/fill slope steeper than 2:1, not independently confirmed against Lane Code Chapter 16 or the LMD's own permit page). New analysis for this page: a 1,000-square-foot yard regraded 6 inches deep works out to roughly 18–19 cubic yards, well under the threshold; even a large 5,000-square-foot backyard regraded 6 inches deep works out to roughly 90+ cubic yards, which could exceed it. State the honest, scaled version: most ordinary yard-leveling jobs stay well under the threshold, but a large or unusually deep full-property regrade could approach or exceed it.
  3. **Willamette Valley clay soil** (reused from the homepage pack) — a major reason existing yards develop drainage problems in the first place; a yard on clay with a slightly-off original grade ponds and stays soggy far more readily than one on well-draining soil.
  4. **NOAA Eugene seasonal timing, scaled down for a smaller job** (reused from the homepage pack, applied honestly here) — the dry-season (May–October) logic still generally applies since clay grades and compacts better dry, but a small yard job is far more schedule-flexible than a full excavation or site-prep project and should not be framed with the same urgency.
  5. **HomeAdvisor's own service-taxonomy split** (new, independent third-party corroboration for this page specifically) — HomeAdvisor's own lead-generation categories separate "Landscape Minor Grading or Resloping" from "Excavation Major Grading or Resloping," with a dedicated Eugene, OR page for each. This is genuine, pre-existing market evidence that the buyer this page targets is already recognized as distinct — not an artificial split invented for this project.
- **Insider/practitioner detail that signals real local expertise (use at least 2):**
  - The topdressing-vs-full-regrade severity threshold: a thin sand/soil topdressing layer is a lawn-care fix for minor unevenness, while depressions deeper than about an inch, or a real slope/drainage problem, call for a full regrade — naming this threshold honestly (including that the cheaper fix is sometimes genuinely the right call) is a real practitioner distinction zero competitors make.
  - The swale-vs-French-drain distinction: a swale is a shallow, graded surface channel that moves water by shaping the land itself (this page's territory); a French drain is a buried, perforated-pipe-in-gravel subsurface system — a genuinely different remedy. Explaining this precisely, rather than using "drainage solutions" as a catch-all, signals real technical fluency.

---

## 4. E-E-A-T Requirements

- **Experience (minimum 2 signals):** The current live page's already-accurate equipment framing (dozer/skid steer for bulk shaping, excavator with smooth bucket and laser level for fine grading), preserved and tied explicitly to the fine-grading-near-a-foundation vs. bulk-shaping-a-larger-yard distinction; David Deggelman referenced and linked to `/about/`.
- **Expertise (minimum 3 signals):** The ORSC §R401.3 citation explained in plain language (a definitional clarity zero competitors demonstrate); the topdressing-vs-regrade severity threshold; the swale-vs-French-drain distinction, stated precisely rather than as vague "drainage solutions" language.
- **Authority (minimum 3 signals):** Oregon CCB #261742 in visible body copy (reused from the live page, keep it); a direct outbound link to the ICC-hosted Oregon code text for §R401.3; a direct outbound link to Lane County's Land Management Division for the permit-confirmation caveat.
- **Trust (minimum 4 signals):** An explicit small-job welcome statement (a yard-sized job gets the same scoping attention as a larger project); honest topdressing-vs-regrade framing, including cases where the cheaper fix is genuinely right; a permit-simplicity reassurance that doesn't overstate into a blanket "never needs a permit" claim; no fabricated pricing specific to D&D's own jobs, review counts, or years-in-business — same rule as all three prior briefs.

---

## 5. AI Citation Target

Adapted from `00-research-pack.md` §11's drafted block, with one deliberate change: the research pack itself flags that its draft repeats the current live page's out-of-scope "cutting building pads level" phrasing "for continuity" but recommends replacing it with a purely existing-yard example during the content brief rather than silently carrying it forward. **That change is made here** — the building-pad example is replaced with an existing-yard example consistent with this page's confirmed scope boundary (see §1 and §6):

> Grading and leveling corrects an existing yard's surface — re-sloping a lawn, fixing a low spot that collects water, or restoring a positive drainage slope away from a foundation — without digging a new excavation. D&D Land Works provides grading and leveling for residential and commercial properties throughout Eugene, Springfield, and Lane County, Oregon, correcting yards that slope the wrong way, fixing low spots and standing water, and shaping swales and berms to redirect surface water. The work follows Oregon's adopted residential drainage standard (ORSC §R401.3), which calls for a minimum 6-inch fall over the first 10 feet near a foundation and a 2% minimum slope beyond that. D&D is licensed and bonded under Oregon CCB #261742. Most yard-sized grading jobs fall well under Lane County's grading-permit threshold. Free estimates are available.

**Placement:** first 30% of the page's body content, immediately after the opening paragraph — same placement rule as all three prior briefs.

---

## 6. Content Structure

**Word count target: 1,700–2,200 words.** Justification: this is a narrower, more consumer-facing page than the three prior pages, and the research supports a shorter target rather than assuming one. `04-competitor-matrix.md` found the same structural shallowness as the three prior packs (0/8 competitors even acknowledge standalone yard grading as a distinct service), but this page's own Content Format Plan (`00-research-pack.md` §7) calls for fewer heavy-format sections than Site Preparation or Excavation & Grading — one bulleted list, two comparison tables, and several short answer-first/comparison-note sections rather than a numbered multi-step process, a `HowTo`-eligible sequence, or a residential-vs-commercial matrix. The pack's own Honest Limitations section also notes this page has the smallest typical job size and the least available cost/timeline data of the four pages researched (no Lane-County-specific cost figure, no authoritative timeline range), which argues against padding the page with unsupported claims to hit a higher word count. Arithmetic: a 100–150 word opening + the ~135-word AI citation block + a 50–70 word disambiguation answer + a ~120–150 word bulleted problem list + a 60–90 word drainage-slope-standard answer + an 80–100 word regrade-vs-topdressing note + a 120–150 word swale-vs-French-drain comparison table + a 60–80 word permit answer + a ~40 word permit-scaling note + a 120–150 word cost table + a 60–80 word equipment answer + a 60–80 word lawn-impact answer + a 60–80 word seasonal-timing note + a 9-question FAQ block (40–90 words per answer, roughly 400–550 words) + a 40–60 word closing CTA lands at roughly 1,700–2,200 words — meaningfully shorter than Excavation & Grading (2,000–2,600) and Site Preparation (2,300–2,900), proportional to this page's narrower scope and smaller-ticket, more consumer-facing nature.

**H1:** Grading & Leveling in Eugene, Springfield & Lane County, Oregon
*(source: `00-research-pack.md` §6 — matches the "[Service] in Eugene, Springfield & Lane County, Oregon" pattern already shipped on Site Preparation and Excavation & Grading, for cross-page consistency. The current live page's H1 is simply "Grading & Leveling"; this brief recommends the fuller, geo-scoped form for consistency with both sibling pages — flag for David/dev before build, since it changes the H1 of an already-live page, though the URL/slug does not change.)*

**Opening paragraph guidance (first 100–150 words):** Open by naming the page's core disambiguation immediately — per the task brief's own named central gap and `08-gap-analysis.md`'s top-tied gap (score 50.0): state plainly, in the first sentence or two, that a sloped or poorly-draining yard is a real, definable job with a name (grading and leveling), not a guessing game between calling a landscaper or an excavation contractor. Follow immediately with the AI citation block from §5 above.

**H2 sections, in order** (every H2 traces to a competitor-matrix finding or a scored gap — cited inline):

| # | H2 (exact text) | Traces to | Format |
|---|---|---|---|
| 1 | Is This a Landscaping Job or an Excavation Job? | Gap #1/#2, disambiguation (tied top score 50.0, task-brief-named) — 0/8 competitors, and no landscaping-company content either, answers this anywhere | Answer-first, 50–70 words; `Speakable` |
| 2 | What Does Grading & Leveling Actually Fix? | Gap #4, standalone-service-naming gap (tied top score 50.0) — 0/8 competitors present standalone yard grading as its own service; also the section where the out-of-scope building-pad bullet is replaced | Bulleted list (low spots, negative slope toward the house, uneven lawns, erosion, drainage-grading) — problem-framed, not process-framed; `ItemList` |
| 3 | What Is a Positive Drainage Slope? | Gap #2 (tied top score 50.0) — this page's single most citable passage, backed by a directly-verified Oregon code citation (ORSC §R401.3) | Answer-first, 60–90 words, citing ORSC §R401.3 by name; `Speakable` |
| 4 | How Do I Know If I Need a Full Regrade or Just Topdressing? | Gap #5, topdressing-vs-regrade severity threshold (score 40.0) | Short comparison note — two remedies, when each applies, honestly including when the cheaper option is right |
| 5 | Swale or French Drain — What's the Difference? | Gap #7, swale-vs-French-drain education (score 30.0) | Comparison table — columns: Swale / French Drain (what it is, how it works, whether it's a grading-level fix); honest note that French drain installation is not confirmed as a current D&D scope |
| 6 | Do I Need a Permit to Regrade My Yard in Lane County? | Gap #3, permit-simplicity reassurance (score 40.0, task-brief-named) — removes a perceived barrier to calling | Answer-first, 60–80 words + a scaling note distinguishing a typical small job from a large/deep full-property regrade; `Speakable` |
| 7 | How Much Does Yard Grading or Leveling Cost? | Cost gap, real pricing — 0/8 competitors publish any cost signal for yard-scale jobs | Comparison table: Job Type / Typical Range / What Affects Price — labeled general/national, since no Lane-County-specific yard-grading figure exists in the research |
| 8 | What Equipment Shows Up for a Grading Job? | Gap #9, equipment-specificity (partial credit — the live page already does this reasonably well; strengthen the fine-grading-vs-bulk-shaping distinction) | Answer-first, 60–80 words; `Speakable` |
| 9 | Will Regrading Damage My Lawn or Landscaping? | Gap #11, practical-concern gap | Answer-first + honest explanation, 60–80 words |
| 10 | What's the Best Time of Year to Regrade a Yard in Oregon? | Gap #10, seasonal timing scaled to job size (score 30.0) — applies the homepage pack's dry-season logic proportionally, not with the same urgency as a full excavation project | Short comparison note: dry season vs. wet season, scaled to a smaller job |
| 11 | Frequently Asked Questions | Gap #12, FAQ-content gap — 0/8 competitors run a real FAQ | `FAQPage`-formatted Q&A, 9 questions (see §8 below) |
| 12 | Get Your Yard Scoped | Reused CTA pattern from all three prior briefs, small-job-welcome framing (Gap #6, score 40.0) | Short answer-first + CTA block |

Format minimums are satisfied: ≥1 comparison table (H2 #5 and #7), ≥1 bulleted list (H2 #2) — per the parent methodology's format-diversity rule and `00-research-pack.md` §7's own Content Format Plan.

### Boundary Note — What This Page Owns vs. What Excavation & Grading and Site Preparation Already Own (read before writing a single sentence)

This is the single most important structural instruction in this brief, per the task's explicit requirement, and it governs both new content and one required deletion from the current live page.

- **THIS page (`/services/grading-leveling/`) owns:** standalone re-sloping, yard leveling, and drainage-grading for an **existing** surface — where nothing new is being dug. A yard that floods, an uneven lawn, a driveway that needs re-sloping without a new cut, a low spot that's been there for years — all of it belongs here.
- **Excavation & Grading (`/services/excavation/`), already shipped, owns:** grading-to-elevation that happens *because* something is being dug — cut-and-fill to design grade, backfill and compaction after a trench or footing, and rough grading that finishes an excavation project. The excavation page's own shipped H2, "What's the Difference Between Excavation and Grading?", already states this exact boundary and links back to this page:
  > "This page covers grading that happens because something is being dug: cut-and-fill to design grade, backfill and compaction after a trench or footing goes in, and rough grading that finishes an excavation project. Standalone re-sloping, yard leveling, or drainage-grading on ground where nothing new is being dug is a different job, covered on the grading and leveling page instead. If your project doesn't involve a new dig, that's the page to start on."
- **Site Preparation (`/services/site-preparation/`), already shipped, owns:** grading a **raw or partially-cleared lot** ahead of new construction. This page's territory is the opposite case — an already-developed lot or yard with a surface problem, independent of any new build.
- **Required fix to the current live page:** the existing "Cutting building pads level and to design elevation" bullet under "Slope Is the Whole Job" is grading tied to a new build — it belongs to Excavation & Grading / Site Preparation, not here, per the boundary quoted above. **This bullet must be removed or replaced** with an on-scope item (e.g., correcting a yard sloping toward the house, or restoring a positive drainage slope after settling) — it should not be carried forward into the rewritten page as-is. This is the one required content deletion this brief specifies.
- **Instruction to the content writer:** if a draft of this page's content starts describing cut/fill during a new dig, backfill after a trench, rough grading finishing an excavation project, or grading a raw lot before a build, stop — that content belongs on a sibling page. This page's job is standalone grading for an existing surface problem, and per `04-competitor-matrix.md` it is genuinely uncontested ground: 0/8 competitors treat it as a distinct service at all.
- This distinction should surface in the opening paragraph (briefly, alongside the landscaping-vs-excavation disambiguation) and be restated in the closing CTA copy and the Internal Links section (§9) with explicit "if your project involves new digging, see excavation instead" framing.

---

## 7. Unique Angle

Pulled directly from the top gaps in `08-gap-analysis.md` — every entry is a specific, evidence-based differentiator, not a slogan:

1. **Presents grading and leveling as its own real, standalone service for an existing yard** — not a line item buried inside a general excavation or site-prep list, which is the pattern every one of the 8 competitors follows without exception (`08-gap-analysis.md` Gap #4, tied top score 50.0). This is the single largest structural finding in this pack, independently corroborated by HomeAdvisor's own lead-generation taxonomy, which already splits "Landscape Minor Grading or Resloping" from "Excavation Major Grading or Resloping" as separate categories.
2. **Answers "is this a landscaping job or an excavation job" directly**, framed around job size, equipment, and permanence rather than brand preference — the task brief's own named central disambiguation, uncontested by any competitor or any landscaping-company content found (`08-gap-analysis.md` Gap #1, tied top score 50.0).
3. **Cites Oregon's actual adopted drainage-slope standard (ORSC §R401.3) in plain language** — a minimum 6-inch fall over the first 10 feet near a foundation (~5% slope), 2% minimum beyond that — verified directly against ICC's published Oregon code text rather than assumed, where zero competitors explain any standard at all (`08-gap-analysis.md` Gap #2, tied top score 50.0). This is this page's single most citable, most differentiating passage.
4. **States plainly that most ordinary yard-leveling jobs fall well under Lane County's 50-cubic-yard grading-permit threshold**, while honestly noting a large or unusually deep full-property regrade could approach it — removing a perceived barrier to calling without overstating the claim into a blanket "never needs a permit" line (`08-gap-analysis.md` Gap #3, score 40.0).
5. **Explains the topdressing-vs-full-regrade threshold honestly**, including the cases where the cheaper fix is genuinely the right call — a scope-honesty move that also pre-qualifies leads, consistent with this project's existing trust-building pattern on the three prior pages (`08-gap-analysis.md` Gap #5, score 40.0).

These five must surface in the opening paragraph or immediately after (at minimum the standalone-service framing and the disambiguation, introduced early), in their dedicated H2 sections (#2, #1, #3, #6, #4 respectively), and echoed briefly in the closing CTA copy.

---

## 8. FAQ Section

9 questions, all sourced verbatim from `02-question-mine.md`'s FAQ Shortlist, cross-checked against `04-competitor-matrix.md` Matrix A: **0 of the 8 competitors distinguish standalone yard grading from construction-tied grading at all**, so every question below is uncontested ground.

| # | Question | Source in question-mine | Answer guidance (40–90 words, direct answer first) |
|---|---|---|---|
| 1 | Is this a landscaping job or an excavation job? | Q1 (pre_call/disambiguation — task-brief-named, zero-competitor-coverage) | Lead with: it's a real, definable job with its own name — grading and leveling — that sits between the two; frame the distinction around job size, equipment (an excavator or skid steer with a grading attachment vs. hand tools), and permanence rather than brand preference. |
| 2 | What is a positive drainage slope, and how much slope does my yard actually need? | Q36/Q37 (oregon_specific — cites ORSC §R401.3 directly) | Lead with the code figure: a minimum 6-inch fall over the first 10 feet from a foundation (roughly a 5% slope), tapering to a 2% minimum for surfaces near the building and generally beyond it. |
| 3 | How much does it cost to level or regrade a yard in Lane County? | Q8/Q10 (cost) | Lead with the general range ($500–$1,000 for a small lawn, $1,000–$5,000+ for a full backyard regrade), clearly labeled as general — no Lane-County-specific yard-grading figure exists in the research. |
| 4 | Do I need a permit just to regrade my lawn in Lane County? | Q38 (oregon_specific/permit — removes a perceived barrier to calling) | Lead with "usually not" for an ordinary small yard-regrade — Lane County's Grading and Fill Permit is triggered by moving more than 50 cubic yards or a cut/fill slope steeper than 2:1, a threshold most yard-sized jobs stay well under; a large, deep full-property regrade could approach it, so confirm for a bigger job. |
| 5 | How do I know if my yard needs a full regrade versus just topdressing? | Q22 (decision — severity threshold) | Lead with: if topdressing/sand-leveling doesn't hold, or a depression is deeper than about an inch, that's a sign the underlying grade needs correcting, not just topping off again. |
| 6 | What's the difference between a swale and a French drain? | Q6 (education — sets up an honest scope note) | Lead with the distinction: a swale is a shallow, graded surface channel that moves water by shaping the ground itself; a French drain is a buried, perforated-pipe-and-gravel subsurface system — a genuinely different remedy. Note that grading/swale work is D&D's scope; confirm French drain installation directly if that's the specific need. |
| 7 | Does D&D take on small residential yard-grading jobs, or mostly bigger projects? | Q6 (pre_call/objection — small-job reassurance) | Lead with "yes" — a yard-sized job gets the same scoping attention and process as a larger excavation or site-prep project. |
| 8 | Will regrading damage my existing lawn or landscaping? | Q17/Q20 (process/practical concern) | Lead with an honest answer: some disturbance to the lawn surface is normal and reseeding or re-sodding the regraded area is common afterward; established beds, sprinklers, and hardscape near the work area are worked around and flagged before work starts. |
| 9 | What's the best time of year to regrade a yard in Oregon's rainy climate? | Q40/Q41 (oregon_specific/seasonal) | Lead with May–October as the generally preferred dry window since clay soil grades and compacts better dry; note a yard-sized job is far more schedule-flexible than a full excavation project and can often be done outside that window if needed. |

No FAQ answer should fabricate a statistic not already present in the research pack, and no answer should state the Lane County grading-permit threshold as an exact, directly-confirmed county rule (Q4 above) — hedge per §3 and §14. No FAQ answer should claim D&D performs topdressing/lawn-care work or French drain installation as a confirmed service — see Open Items.

---

## 9. Internal Links

**IN (what will link to this page)** — per the topical map's hub-and-spoke rule:

| From | Anchor text example | Placement |
|---|---|---|
| Homepage (`/`) | "grading and leveling" | H2 #2 services list of `home-brief.md` |
| `/services/excavation/` | "grading and leveling" (already shipped, per `excavation-content.md`'s own H2 "What's the Difference Between Excavation and Grading?") | Boundary section + Related Services card |
| `/services/site-preparation/` | "grading and leveling" | Related Services card |
| `/locations/eugene/`, `/locations/springfield/` (future/existing city pages) | "yard grading in Eugene" / "yard leveling in Springfield" | Body, services-offered section of each city page |
| `/services/drainage-excavation/`, `/services/driveway-repair/`, `/services/slope-stabilization/` (sibling/future pages) | "back to grading and leveling" | Each sibling page's "parent cluster" link, per the topical map's hub-and-spoke rule |
| `/about/` | Breadcrumb | Breadcrumb |
| Global header/footer | "Services" nav item | Every page |

**OUT (this page → other pages)**, matching the topical map's cannibalization table (§16) and this page's own scope-boundary discipline:

| To | Anchor text | Placement |
|---|---|---|
| `/` (homepage) | "D&D Land Works" or "our full range of excavation services" | Breadcrumb + body-late (up-link to hub) |
| `/services/excavation/` | "excavation" — with **explicit "if your project involves new digging, see excavation instead" framing**, not a bare anchor | H2 #1 (disambiguation) and the opening paragraph, per §6's Boundary Note |
| `/services/site-preparation/` | "site preparation" — same explicit "if you're prepping a raw lot for new construction" framing | H2 #2 (problem-framed list intro) |
| `/services/drainage-excavation/` (future, not yet built) | "drainage excavation" — framed as "a dedicated write-up on dug drainage systems is coming; this page covers surface grading and swales" | H2 #5 (swale vs. French drain) |
| `/services/driveway-repair/` | "driveway repair" | Cross-link only, per the topical map's "one page" rule for driveway grading |
| `/services/slope-stabilization/` | "slope stabilization" | Cross-link only, for hillside/structural erosion control outside this page's ordinary-surface-slope scope |
| `/locations/eugene/`, `/locations/springfield/` | "Eugene" / "Springfield" | H1/opening paragraph area |
| `/about/` | "David Deggelman" | Trust/CCB mention |
| `/contact/` | "get a free estimate" / "call 541-401-8726" | H2 #12 CTA + hero |

No "click here" / "learn more" anchors — every anchor is descriptive, per the parent methodology's rule (already followed on the current live page).

---

## 10. Schema Requirements

This page follows the exact pattern `site-preparation-content.md` and `excavation-content.md` shipped with:

- **Primary `@type`: `Service`** — CONFIRMED REAL schema.org type, reused from the homepage, site-preparation, and excavation packs' confirmed schema.org research rather than re-checking from scratch (`00-research-pack.md` §9).
- **`provider`**: `{"@id": "https://www.ddlandworks.com/#business"}` — the exact `@id` already shipped in `site-preparation-content.md`'s and `excavation-content.md`'s JSON-LD. Do not redefine the organization inline and do not use a different placeholder.
- **`Service` required fields:** `name` ("Grading and Leveling"), `provider` (the `@id` reference above), `areaServed` (Lane County + Eugene/Springfield at minimum, plain city-name strings, matching the full city list already used in the two prior shipped pages' schema), `serviceType` ("Grading and Leveling"), `description` (can reuse a trimmed version of the AI citation block from §5).
- **`FAQPage`** — for the 9-question set in §8; FAQ schema answers must match the visible FAQ text exactly.
- **`BreadcrumbList`** — Home → Services → Grading & Leveling, matching the current live page's already-implemented `Breadcrumbs` component.
- **`Speakable`** — flag the answer-first passages in H2s #1 (disambiguation), #3 (drainage-slope standard), #6 (permits), and #8 (equipment) as speakable-eligible, per `00-research-pack.md` §7's Content Format Plan.
- **Do NOT implement `AggregateRating`/`Review` schema** — same rule as all three prior briefs; D&D has zero reviews at launch.

---

## 11. Entity Profile

Pulled from this folder's `entity-inventory.csv`, cross-checked against `home/entity-inventory.csv`, `site-preparation/entity-inventory.csv`, and `excavation/entity-inventory.csv` for reused canonical forms. Business/location/certification entities are **not re-derived** — see the three prior briefs' §11 for their original validation notes.

**Primary entity (salience 10, reused unchanged):**
- **D&D Land Works** (Organization → schema `GeneralContractor`) — `NOT_FOUND` externally. Must appear in the first sentence of body copy and in the `Service.provider` reference.

**Page-defining entity (salience 10, new for this page):**
- **Grading & Leveling (standalone)** (Service) — `VALIDATED_LOCAL`, the page's own subject. 6/8 competitors mention grading generically; 0/8 as a standalone existing-yard service.

**Core technical concept entities (salience 6–9, this page's actual content):**
- **Positive Drainage Slope** (9) — `VALIDATED`, the central concept.
- **Oregon Residential Specialty Code §R401.3 (Drainage)** (9) — `VALIDATED`, verified directly 2026-09-08 against ICC's published Oregon code text — the single most load-bearing authority citation on this page.
- **Swale** (7) — `VALIDATED`, the grading-level surface solution, this page's territory.
- **French Drain** (5) — `VALIDATED` but flagged `adjacent_distinct_concept` — not confirmed as a D&D service; explain for reader education only.
- **Negative Grade / Negative Slope** (7) — `VALIDATED`, the specific failure mode this page's service corrects.
- **Low Spot / Depression** (6) — `VALIDATED_LOCAL`, homeowner-language term.
- **Finish/Fine Grading (standalone)** (6) — `VALIDATED_LOCAL`, this page's process entity, distinct from the site-prep pack's construction-tied "rough grading."
- **Cut-and-Fill Balancing (yard-scale)** (4) — `VALIDATED_LOCAL`, current live page already names this; distinct from the excavation page's larger, dig-driven cut/fill.
- **Berm** (4) — `VALIDATED`, a raised earth feature shaped by grading.
- **Topdressing (sand/soil leveling)** (3) — `VALIDATED` but flagged `adjacent_not_verified` — do not imply D&D performs this as a lawn-care service; the verified claim is that D&D performs the earthwork/regrading tier, not the cosmetic lawn-care tier. Flag for confirmation with David (see Open Items).

**Sibling/parent entities (explicitly NOT this page's scope — see §6 Boundary Note):**
- Excavation & Grading (Service, salience 5) — sibling page, already shipped, already states the boundary against this page in its own H2.
- Site Preparation (Service, salience 4) — sibling page; grades a raw lot, not an existing one.
- Drainage Excavation (Service, salience 5) — future sibling page; owns the dug-drainage-feature/water-management intent, this page owns the surface/slope intent.
- Driveway Repair (Service, salience 3) — driveway regrading is a section of that page, not this one.
- Slope Stabilization (Service, salience 3) — hillside/structural erosion control belongs there, not here.

**Permit/authority entities (reused, applied to this page's smaller-job context):**
- Lane County Grading and Fill Permit (7) — `VALIDATED_LOCAL`, reused verbatim from the site-preparation pack, applied honestly to a smaller typical job size (see §3).
- Lane County Land Management Division (6) — `VALIDATED`, reused, the authority to confirm permit status with.

**New corroborating-evidence entity:**
- HomeAdvisor Service Taxonomy Split ("Landscape Minor Grading or Resloping" vs. "Excavation Major Grading or Resloping") (7) — `VALIDATED`, independent third-party corroboration that the market already recognizes this page's buyer as distinct.

**Reused geo/business entities (unchanged from prior packs):** David Deggelman, Oregon CCB #261742, Willamette Valley, Eugene, Springfield — same validation status and do-not-fabricate rules as the three prior briefs.

**Equipment entities:** generic categories only (excavator, skid steer, dozer, laser grading level) — do not name brands, same rule as all three prior pages.

**Co-occurrence requirements specific to this page** (per `03-entity-map.md` §7):
- "Grading" mentioned generically within an excavation/site-prep service list — 6/8 competitors — table stakes at the term level, not what this page targets
- Standalone yard-leveling/regrading service, explained or listed as distinct from construction grading — **0/8, directly re-checked (including All Dirt, fetched directly)** — **the single clearest gap for this page, mandatory to fill**
- Any explanation of the positive-drainage-slope/code standard — 0/8 — mandatory
- Any distinction between "landscaping job" and "excavation job" — 0/8 — mandatory
- Permit guidance specific to a small yard-regrade job — 0/8 — mandatory

---

## 12. CTA Requirements

| Placement | Copy | Type/link |
|---|---|---|
| Above the fold (hero, already live) | "Call 541-401-8726" / "Free Estimate" | `tel:5414018726` and `/contact/` — **keep the existing Hero component copy unchanged** |
| Mid-page (after H2 #4, regrade vs. topdressing) | "Not sure which fix your yard actually needs? Get a free estimate and we'll walk it." | `/contact/` |
| After H2 #7 (cost section) | "Want a real number for your yard? Request a free estimate." | `/contact/` |
| H2 #12 (closing CTA) | "Get Your Yard Scoped" + a restated small-job-welcome line + phone/estimate link | `tel:5414018726`, `/contact/` — new copy needed since the current live page's existing CTA ("Fix the Slope Before It Fixes You") can be kept or lightly adjusted, a call for David/dev, not a change this brief mandates |

No fabricated urgency/scarcity language, consistent with all three prior briefs — nothing in the research pack supports it.

---

## 13. Images Required

**Current state: the live page has zero real project photos**, same gap as all three prior pages — the `Hero` component is text-only, and no `<img>` beyond shared components appears in `grading-leveling.astro`. This is a genuine, unaddressed gap, not something to paper over with unbranded stock presented as D&D's own work (same rule as all three prior briefs' §13).

| # | Description | Alt text guidance | Type | Status |
|---|---|---|---|---|
| 1 | Hero image — a yard mid-regrade, ideally showing a visible slope correction or laser-level setup | "Yard grading and leveling for drainage correction in Lane County, Oregon" | Hero | **Gap — no real photo yet** |
| 2 | Before/after: a yard with visible negative grade or standing water → corrected positive slope | "Before and after yard regrading for drainage, Lane County, Oregon" | Evidence, near H2 #2/#3 | **Gap — flagged as a genuine absence; this page's clearest evidence opportunity given the drainage-slope-standard claim it makes** |
| 3 | A swale or berm shaped as part of a regrade | "Drainage swale shaped during yard regrading, Lane County, Oregon" | Evidence, near H2 #5 | **Gap — needs a real jobsite photo** |
| 4 | Fine-grading equipment close-up (excavator with smooth bucket, or laser level in use) | "Fine grading equipment for yard leveling, Lane County, Oregon" | Evidence, near H2 #8 (equipment) | **Gap — genuinely absent; ties directly to the equipment-specificity section** |
| 5 | Simple illustrated diagram of the ORSC §R401.3 slope standard (6 inches over 10 feet, 2% minimum) | "Oregon drainage slope standard diagram" | Supporting graphic, near H2 #3 | Can launch as a simple illustrated diagram — lower priority to fix than the photo gaps above, and a genuinely high-value asset given this is the page's strongest citable claim |

Flag to David: same as all three prior briefs — launching with limited or no photography is an acceptable temporary measure, but should be tracked as a launch gap to close with real jobsite photography (a documented before/after yard-drainage correction would be especially valuable given how central the drainage-slope claim is to this page) within the first few months.

---

## 14. Authority Signals to Cite

Pulled from `07-oregon-authority.md`, with the verification/hedging status made explicit per this project's central sourcing rule:

1. **Oregon Residential Specialty Code §R401.3 (Drainage) — CONFIRMED, cite normally, no hedge needed.** "Oregon's adopted residential code (ORSC §R401.3) requires a minimum 6-inch fall over the first 10 feet from a foundation — roughly a 5% slope — and a minimum 2% slope for impervious surfaces within that zone and generally beyond it. Where a lot line, wall, or other barrier prevents the 6-inch/10-foot fall, the code requires an alternate minimum 5% slope plus a drain or swale instead." *(Source: ICC — 2023 Oregon Residential Specialty Code, Chapter 4, R401.3 Drainage, codes.iccsafe.org/s/ORRC2023P1/chapter-4-foundations/ORRC2023P1-Pt03-Ch04-SecR401.3; ICC — 2017 Oregon Residential Specialty Code, R401.3, same URL pattern; verified directly against ICC's published Oregon code text across the 2017, 2021, and 2023 editions (identical substantive language) 2026-09-08 — fetched directly, not assumed. The single most load-bearing citation on this page.)*
2. **Lane County Grading and Fill Permit — HEDGE REQUIRED, reused from the site-preparation and excavation packs, applied honestly to a smaller job size.** "A Lane County permitting guide indicates a Grading and Fill Permit is generally required when a project moves more than 50 cubic yards of earth or creates a cut/fill slope steeper than 2:1 — most ordinary yard-leveling jobs stay well under that threshold, but a large or unusually deep full-property regrade could approach it. Confirm the exact figure for your project directly with Lane County's Land Management Division." *(Source: Willamette Craftworks — Lane County Building Permits: 2026 Homeowner's Guide; verified 2026-09-08 in the site-preparation pack, reused here — do not state the 50-cubic-yard/2:1-slope figure as Lane County's own directly-confirmed rule.)*
3. **Willamette Valley clay soil — reused, cite normally.** "Willamette Valley's clay-heavy soil holds water and drains poorly, which is a major reason existing yards develop drainage problems in the first place." *(Source: OSU Extension Service — Clay Soil Challenges and Solutions for Oregon Gardeners, extension.oregonstate.edu/news/clay-soil-challenges-solutions-oregon-gardeners; reused from the homepage pack, verified 2026-09-08.)*
4. **NOAA Eugene climate normals, scaled to a smaller job — reused, cite normally but proportionally.** "Eugene's wettest months are December, January, and November; May through October is generally the preferred dry window for grading work, though a yard-sized job is far more schedule-flexible than a full excavation project." *(Source: NOAA/National Weather Service — Eugene Climate Data, weather.gov/media/pqr/climate/ClimateBookEugene/pg61.pdf; reused from the homepage pack, verified 2026-09-08 — do not import the same urgency the excavation/site-prep pages apply to this figure.)*
5. **HomeAdvisor service-taxonomy corroboration — new for this page, cite normally as third-party market evidence, not a D&D claim.** "Even national lead-generation directories treat this as its own category — HomeAdvisor lists 'Landscape Minor Grading or Resloping' separately from 'Excavation Major Grading or Resloping' for the Eugene market." *(Source: HomeAdvisor — Landscape Minor Grading or Resloping, Eugene, OR, homeadvisor.com/tloc/Eugene-OR/Landscape-Minor-Grading-or-Resloping; HomeAdvisor — Excavation Major Grading or Resloping, Eugene, OR; verified 2026-09-08.)*

**Explicit hedging instruction for the content writer:** signal #2 above must use hedged, attributed language in both body copy and FAQ answer #4 — never state the Lane County permit threshold as an exact, directly-confirmed county rule. Signal #1 was verified against the primary code text directly and may be stated as fact without hedging — it is the strongest, most differentiated claim this page makes. Do not cite Oregon811/utility locates or OSHA Subpart P trench safety on this page — both are genuinely scoped to digging/trenching, not surface regrading, per `07-oregon-authority.md` §5, and importing them here would misapply signals that belong to the Excavation & Grading page. Do not cite DEQ 1200-C — it is a construction-project-scale, 1-acre-disturbance trigger, not relevant at yard scale.

Density target: same as all three prior briefs, roughly 1 statistic per 300–500 words of body copy, at least one external authority link per major H2 section (especially H2 #3 drainage-slope standard and H2 #6 permits).

---

## Open Items Requiring David's Input Before Content-Create

Carried forward from `00-research-pack.md`'s "Honest Limitations" section and `08-gap-analysis.md`'s "Gaps that require David's input" — do not invent values for these:

1. **A specific, real timeline range for a typical yard-scale grading/leveling job.** No reliable third-party source gave one for yard-scale (as opposed to lot-scale) work — do not invent a day-count figure; write H2 #10 in general/seasonal terms only until David confirms.
2. **Whether D&D's actual yard-grading depth ever approaches utility-strike risk**, and whether Oregon811 guidance belongs on this page at all. Current research finding: a shallow surface regrade generally does not carry the same utility-strike risk profile as a foundation dig, so Oregon811 is deliberately **not** included in this brief's authority signals — confirm with David before adding it, and only add a brief mention if some jobs genuinely do involve deeper cuts near utility laterals.
3. **Whether D&D performs any lawn-care-adjacent topdressing/sand-leveling work itself**, refers it out, or only takes on jobs that need real earthwork. This affects how H2 #4's topdressing-vs-regrade section is framed — as an explanation only (the safer, currently-supported framing used in this brief) versus a "we also do this" claim (not currently supported).
4. **Whether D&D installs French drains**, or whether that section (H2 #5) should stay strictly educational with a "confirm this specific need directly" note. The topical map already flags French drain installation as scope-caution pending confirmation — this brief keeps the educational-only framing until confirmed.
5. **Real pricing specific to D&D's own yard-grading jobs**, if David is willing to share even rough figures, to replace the generic national ranges (HomeGuide, Angi, Fixr) currently available in H2 #7 — no Lane-County-specific yard-grading cost data was found in this pass.

**The single most important item before this brief moves to `content-create`:** confirming item #3 above (D&D's actual role, if any, in topdressing/lawn-care-adjacent work) — it directly affects whether H2 #4 can make any first-person "we also handle X" claim or must stay in the safer, purely explanatory framing this brief currently specifies. Publishing an unconfirmed service-scope claim would be the highest-risk error this brief could otherwise introduce, consistent with this project's no-fabrication rule.
