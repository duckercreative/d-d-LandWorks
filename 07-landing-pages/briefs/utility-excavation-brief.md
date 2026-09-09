# Content Brief — D&D Land Works Utility Excavation (`/services/utility-excavation/`)

**Prepared:** 2026-09-09 · **Prepared by:** Ducker Creative
**Built from:** `01-research/page-research/utility-excavation/` full research pack (files 00, 02, 03, 04, 05, 07, 08 + `entity-inventory.csv`), cross-checked against `01-research/page-research/home/entity-inventory.csv`, `01-research/page-research/excavation/entity-inventory.csv`, and `01-research/page-research/drainage-excavation/entity-inventory.csv` for canonical entity reuse, `business-info.md`, `docs/design-system.md`, `07-landing-pages/content/excavation-content.md` (voice/tone reference, the exact Oregon811/OSHA figures already shipped there, and the exact `Service.provider` `@id` pattern) and `07-landing-pages/content/drainage-excavation-content.md` (structural template for this brief and for how a sibling page cross-links out rather than re-deriving another page's owned mechanics), and the two current live pages at `site/src/pages/services/utility-excavation.astro` and `site/src/pages/services/trenching-backfill.astro`.
**Methodology note:** Same adaptation as all eight prior briefs (`home-brief.md`, `site-preparation-brief.md`, `excavation-brief.md`, `grading-leveling-brief.md`, `land-clearing-brief.md`, `septic-brief.md`, `foundation-excavation-brief.md`, `drainage-excavation-brief.md`) — this project's `content-briefs` skill was written for a prior HVAC client and references files that don't exist here. Dropped/substituted with the real D&D Land Works research files throughout.
**Pipeline position:** Ninth page through this project's content pipeline. This is a content-expansion brief, not a greenfield brief — a real, live page already exists (`utility-excavation.astro`), has a workable opening framing ("Locates First, Always") worth keeping, but has zero depth-by-utility-type content, no joint-trenching content, no cost content, and no FAQ.
**URL note (settled, not an open item):** Targets `/services/utility-excavation/`, matching the file path `site/src/pages/services/utility-excavation.astro` already live in the Astro codebase and the task instruction. No URL move needed.
**Entity reuse:** All canonical business/location/certification entities (D&D Land Works, David Deggelman, Oregon CCB #261742, Oregon DEQ, Lane County, Eugene, Springfield, Willamette Valley, the `GeneralContractor`/`Service` schema decisions) are reused verbatim from `home-brief.md` §11. The `Service.provider` reference uses the exact `@id` already shipped across every sibling page's JSON-LD (`https://www.ddlandworks.com/#business`). Oregon811 and the general OSHA Subpart P trench-safety figures are reused verbatim from `excavation-content.md`, not re-derived.
**Note on service-confirmation status (unlike the drainage-excavation brief, no Critical Open Item box is needed here):** "Utility Excavation" and "Trenching & Backfill" both appear as separate, confirmed line items in `business-info.md`'s verified service list. Unlike drainage excavation's French-drain-installation ambiguity, this page's core service claim — that D&D trenches for water, sewer, electrical, and gas lines — is not in question. What *is* unconfirmed, and flagged throughout this brief, is narrower: (1) whether D&D has actually performed joint trenching, gas-line trenching, or communications/fiber trenching specifically, versus offering them as general capability categories; and (2) whether D&D itself places the utility-company tap-application call, versus leaving that to the property owner or another trade. Neither gates the page the way the French-drain question gated drainage-excavation's page.

---

## 1. Page Metadata

| Field | Value |
|---|---|
| **Canonical URL** | `/services/utility-excavation/` |
| **Current live URL** | `/services/utility-excavation/` (file: `site/src/pages/services/utility-excavation.astro`) — already matches; no URL move needed |
| **Slug** | `utility-excavation` |
| **Page type** | Core service page — P1 priority per the topical map, and the page `excavation-content.md`'s own shipped copy explicitly promises will cover "trenching-specific depth" for a utility run ("**Utility run.** Trenching for a water, sewer, or utility line to a new structure. See [utility excavation](/services/utility-excavation/) for trenching-specific depth.") |
| **Primary keyword** | `utility excavation eugene or` / `utility trenching eugene oregon` |
| **Secondary keywords** | `water line trenching cost oregon` / `sewer lateral installation cost` (zero competitors publish per-utility cost figures); `how deep does a water/sewer/gas/electrical line need to be buried oregon` (this page's single strongest content asset); `can water sewer electrical gas go in same trench` (joint trenching, zero-competitor-named); `who calls 811 utility company or contractor` |
| **Semantic terms** (must appear at least once) | Water service line, sewer lateral, electrical conduit, gas line, communications/fiber conduit, joint trench, tracer wire, Oregon Plumbing Specialty Code (OPSC), Oregon Residential Specialty Code (ORSC), NEC Table 300.5, Oregon811, Lane County frost depth, Oregon CCB #261742, licensed and bonded, free estimate |
| **Search intent** | Commercial, decision-stage for the primary keyword; the depth, joint-trenching, and coordination-role terms are informational/pre-call-stage — this page's clearest AI-citation opportunity, per `00-research-pack.md` §5 |
| **Current state / baseline** | A real, live page exists with a genuinely serviceable opening framing ("Locates First, Always" — Oregon811, then dig) and a correct, if generic, bulleted list of utility types (water, sewer, electrical, gas, irrigation/lighting, locating existing lines). It has an equipment section (trencher vs. mini excavator, bedding sand/pea gravel) worth keeping and extending, and a "Residential and Commercial" section worth keeping as a short closer. It has **zero** of: any burial-depth figure for any utility, any joint-trenching content, any cost content, the utility-tap-vs-Oregon811 coordination disambiguation, the utility-excavation-vs-trenching-backfill scope-boundary FAQ, or any FAQ section at all. This is a content-expansion brief — the opening hook, equipment section, and residential/commercial closer should be kept and built around, not discarded. |

---

## 2. Intent & Audience

- **Primary ICP:** A Lane County homeowner or small commercial property owner who needs a new utility line run to a structure — a new-construction water/sewer/power/gas hookup, an ADU needing fresh service, or a homeowner adding a detached shop or outbuilding that needs power (and sometimes water or gas) run to it. Secondary ICP: a property owner replacing a failed or aging existing line, a genuinely different buyer moment than new construction that this page should name explicitly rather than assume away; a property owner planning multiple new utilities at once (a new shop needing water, power, and possibly gas) who doesn't yet know joint trenching is an option.
- **What makes this buyer's intent distinct from every sibling page's:** unlike a buyer choosing excavation, grading, or drainage, this buyer's questions are sharply technical and utility-specific before they're emotional — "how deep does X need to be" has a different, code-defined answer for each of four different utilities, and per `05-intent-triangulation.md` Table 1, this is an extremely common but almost never directly answered question pattern in this niche (Quora/forum "how deep should I bury X" threads, phrased differently per utility).
- **State of mind, per `05-intent-triangulation.md`:**
  1. They don't know the depth requirement for their specific utility, and correctly suspect it's different for water vs. gas vs. electrical — a competitor giving one generic "deep enough" answer reads as not actually knowing the code.
  2. They're not sure who calls the utility company for a new tap versus who calls Oregon811 before digging — two different calls to two different parties, and per Table 1, homeowners commonly and incorrectly assume "the contractor handles everything."
  3. They have a real, sharpened version of the excavation page's own utility-strike liability fear — since a *new* utility trench runs directly parallel to existing utility corridors, the fear of hitting something already buried is more immediate here than on a general excavation job.
  4. If they're running more than one utility to the same new structure, they don't know joint trenching is even an option — a genuinely unprompted-need pain point per Table 1, since zero competitors mention it.
  5. They're anxious about a driveway or patio being torn up mid-trench, and whether that costs meaningfully more, without a clear answer anywhere in this market.
- **What they need to believe before calling:**
  1. D&D knows the actual code-required depth for their specific utility, not a generic "we dig deep enough" answer.
  2. D&D calls Oregon811 before every dig, and separately, D&D is honest about who typically initiates the utility-company tap application — not overclaiming a coordination role it hasn't confirmed it performs.
  3. Running water, power, and gas together in one trench is a real, legal option that could save them a second or third mobilization, not something they have to discover after paying for three separate digs.
  4. Trenching under an existing driveway or patio is a real, named cost driver D&D will explain honestly upfront, not a surprise mid-job change order.
  5. D&D is clear about what it owns on this page (which utility, at what depth, why) versus what the separate Trenching & Backfill page owns (closing the trench properly) — a buyer who lands on the wrong page shouldn't feel like they hit a dead end.

---

## 3. Voice & Angle

- **Writing voice:** Per `docs/design-system.md` v1.2 (Outfit for display/headings, Poppins for body) — the same plain-spoken, no-fluff Lane County excavation-contractor voice as every prior page in this series. This page in particular should lean into precision and directness: the buyer's questions are technical and code-specific, so the voice should read like someone who actually knows the numbers, not someone reassuring them vaguely. Short, declarative sentences for the depth figures, the joint-trenching yes/no-with-nuance answer, and the coordination-role disambiguation (this page's three most quotable, most citable passages); slightly longer only for the "what's the difference between utility excavation and trenching & backfill" section, since that's a genuine buyer-confusion point that needs a clear, complete answer rather than a one-liner.
- **Required Lane County / Oregon-specific detail (minimum 5, per `07-oregon-authority.md`):**
  1. **Water service line depth — VERIFIED via Lane County's own government source, cite normally.** 12 inches below frost depth; Lane County's own frost depth is 12 inches, so total minimum trench depth is 24 inches below grade (OPSC 609.1). Frost depth varies by county — this 24-inch figure is Lane-County-specific, not a statewide constant.
  2. **Sewer lateral depth — VERIFIED, cite normally.** 12 inches minimum ground cover (OPSC 718.1), with a 1/4-inch-per-foot minimum slope toward the discharge point.
  3. **Gas line depth — VERIFIED, cite normally.** 18 inches minimum cover standard (ORSC G2415.12); individual outdoor-appliance lines (a grill, a light) may run as shallow as 8 inches if approved by the authority having jurisdiction (ORSC G2415.12.1).
  4. **Electrical conduit depth — VERIFIED as a NEC baseline, but carries an explicit verification caveat this page must not paper over.** NEC Table 300.5 sets 24 inches for direct-buried cable, 18 inches for PVC/nonmetallic conduit, 6 inches for rigid/intermediate metal conduit, and as shallow as 12 inches for a GFCI-protected 120V branch circuit — Oregon adopts this baseline through the Oregon Electrical Specialty Code (OESC), which layers its own amendment tables (e.g., OESC Table 1-E) on top. **This pack could not directly fetch the current OESC amendment table (iccsafe.org returned a 403) — the NEC baseline figures are correct and citable as the national standard Oregon builds from, but any Oregon-specific amendment should be confirmed against the current OESC edition before this page states an electrical depth figure as an exact, litigation-proof number.** Content-create must carry this hedge into the visible copy, not just this brief.
  5. **Joint trenching and the one real separation rule — VERIFIED, cite normally.** Multiple utilities may share one trench in Lane County "without prohibition." The one code-stated separation rule: the water pipe's bottom must sit at least 12 inches above the sewer pipe's top where the two cross (OPSC 720.1). Individual utility companies (EWEB, Springfield Utility Board, NW Natural) may impose their own additional separation specs on top of this — a real, honest caveat, not a hedge to avoid stating the rule confidently.
- **Insider/practitioner detail that signals real local expertise (use at least 2):**
  - Tracer wire color/gauge standard, a small, concrete, checkable detail zero competitors mention: blue 14 AWG for water, green 14 AWG for sanitary sewer, yellow 18 AWG for gas, required alongside buried non-metallic lines so they can be located later without digging.
  - The honest, two-call distinction: Oregon811 is the free, mandatory, 2-business-day-notice call before any dig (already established D&D practice, reused from the excavation page); the utility-company tap application (to EWEB, Springfield Utility Board, or NW Natural) is a separate call, to a separate party, for a separate reason — and whose job that call is varies and is not conflated with the Oregon811 call anywhere on this page.

---

## 4. E-E-A-T Requirements

- **Experience (minimum 2 signals):** The existing live page's real, workable "Locates First, Always" opening framing (kept, not discarded); the equipment section's practitioner-level detail (a trencher for long runs, a mini excavator for hand-guided precision near existing utilities or structures, bedding sand/pea gravel before pipe or conduit goes in).
- **Expertise (minimum 3 signals):** The full per-utility depth table, matched against a confirmed 0/9 competitor coverage rate; the joint-trenching explanation with its one real code-stated separation rule (water 12 in. above sewer); the honest, two-call coordination disambiguation (Oregon811 vs. the utility-company tap application) that nobody else in this market states clearly.
- **Authority (minimum 3 signals):** Oregon CCB #261742 in visible body copy; a direct outbound link to Lane County Land Management Division's own "Trenching for Utilities" page — a genuinely rare, direct local-government source, unclaimed by any competitor; the exact OPSC/ORSC/NEC code citations stated by section number, not just "the code requires."
- **Trust (minimum 4 signals):** The electrical-depth verification caveat stated honestly rather than presented as settled fact; the communications/fiber conduit depth gap disclosed honestly (no Oregon state-code figure exists — governed by the individual ISP/utility's own construction standard) rather than an invented number; the utility-tap coordination role hedged as a general industry pattern, not a confirmed D&D operational practice; no fabricated pricing, review counts, utility-company partnerships, or years-in-business.

---

## 5. AI Citation Target

Adapted verbatim from `00-research-pack.md` §11 (`06-ai-citation-audit.md` §4):

> Utility excavation is trenching to bring a new water service line, sewer lateral, electrical conduit, or gas line to a structure — a different job than general excavation (creating space for a foundation) or drainage excavation (managing water). Required burial depth in Lane County, Oregon depends on the utility: water service lines need at least 12 inches below the local 12-inch frost depth (24 inches total, per Oregon Plumbing Specialty Code 609.1), sewer laterals need 12 inches of cover (OPSC 718.1), gas lines need 18 inches (Oregon Residential Specialty Code G2415.12), and electrical conduit needs 6 to 24 inches depending on the wiring method (NEC Table 300.5). Multiple utilities can share one trench in Lane County, as long as the water line stays at least 12 inches above the sewer line where they cross. D&D Land Works calls Oregon 811 before every dig and provides utility excavation for residential and commercial properties throughout Eugene, Springfield, and Lane County under Oregon CCB license #261742. Free estimates are available.

**Placement:** first 30% of the page's body content, immediately after the opening paragraph — same placement rule as every prior brief.

**Note on the electrical figure inside this block:** the block states the NEC 300.5 range as the citable national baseline Oregon adopts, without claiming an Oregon-specific amendment as exact — consistent with the hedge required throughout this brief. Do not tighten this into a single Oregon-specific number without direct OESC confirmation.

---

## 6. Content Structure

**Word count target: 1,900–2,400 words.** Justification: `04-competitor-matrix.md` calls this "the least-contested topic examined in this entire nine-page pipeline" — of the 9 competitor pages checked (6 directly re-fetched, 3 reused, 1 out-of-market reference), **zero state a single burial-depth figure for any utility, mention joint trenching, or publish any utility-trenching cost figure** — a more absolute gap than even the excavation pack's own well-known 0/10 Oregon811/OSHA findings, which at least had generic utility-work mentions to build from. Unlike drainage-excavation's page (which had to define ten entirely new entities in flowing narrative form to reach 2,100–2,600 words), this page's differentiation comes from **citation density and precision inside two data tables** (the per-utility depth table and the per-utility cost table) rather than from breadth of narrative explanation — a shorter target is appropriate and consistent with the parent methodology's rule that word count follows what the content actually needs, not a fixed floor. Arithmetic, following the research pack's own Content Format Plan (`00-research-pack.md` §7): a 100-150 word opening + the ~145-word AI citation block + a 9-H2 structure (an 80-100 word bulleted-list section; a 60-90 word answer-first intro plus a 4-row depth table with per-row code citations, roughly 200-250 words all in; a 60-90 word joint-trenching answer; a 70-100 word coordination-role comparison note; a 60-80 word hit-a-line answer; a 60-80 word cost-table intro plus a 4-row cost table, roughly 180-220 words all in; a 60-80 word permit note with cross-links; a 50-70 word scope-boundary answer against Trenching & Backfill; a 50-70 word equipment section) + a 9-question FAQ block (450-630 words, consistent with every prior pack's per-question length) + a Related Services intro restating the scope boundaries (60-90 words) + a closing CTA (50-80 words). That sums to roughly 1,900-2,400 words.

**H1:** Utility Excavation in Eugene, Springfield & Lane County, Oregon
*(source: `00-research-pack.md` §6, matching the H1 pattern already shipped on every sibling page — "[Service] in Eugene, Springfield & Lane County, Oregon." The current live page's H1 is the shorter "Utility Excavation"; flag for David/dev before build, same as every prior brief's H1-change flag. The URL/slug does not change.)*

**Opening paragraph guidance (first 100-150 words):** Open by naming what this page is actually for — bringing a new utility service (water, sewer, power, gas) to a structure — and immediately distinguish it from two adjacent things it is not: general excavation (creating space for a foundation, a pond, a pad) and drainage excavation (managing water, not delivering a utility service). Reference, but do not rebuild, `excavation-content.md`'s own promise to send readers here for "trenching-specific depth" — this page is what makes that promise true. Follow immediately with the AI citation block from §5.

**H2 sections, in order** (every H2 traces to a competitor-matrix finding or a top gap — cited inline; heading text and order per `00-research-pack.md` §6):

| # | H2 (exact text) | Traces to | Format |
|---|---|---|---|
| 1 | What Does Utility Excavation Cover? | Structural intro — positions the five utility types this page covers and distinguishes the page from excavation/drainage before anything else | Bulleted list (5 utility types + locating existing lines, reused/extended from the current live page's list); `ItemList` |
| 2 | How Deep Does a Utility Line Need to Be Buried in Oregon? | Gap #1 (score 50.0, top priority) — 0/9 competitors state any depth figure for any utility; this page's single most citable asset | Answer-first intro (60-90 words) + comparison table — columns: Utility / Minimum Depth / Code Citation, 4 rows (water, sewer, gas, electrical). Electrical row carries an explicit "NEC baseline; Oregon-specific amendment not directly confirmed this pass" caveat in its own cell or an adjacent footnote, NOT stated with the same confidence as the other three rows; `Speakable` on the intro sentence |
| 3 | Can Multiple Utilities Go in the Same Trench? | Gap #2 (score 40.0) — 0/9 competitors name joint trenching as a practice at all; the second-biggest unclaimed asset on this page | Answer-first, 60-90 words, stating the real yes-with-nuance answer plus the one code-stated separation rule (OPSC 720.1) and the utility-company-spec caveat; `Speakable` |
| 4 | Who Calls Before Digging — and Who Calls the Utility Company? | Gap #4 (score 40.0) — disambiguates two different calls to two different parties, currently conflated or ignored everywhere in this market | Short comparison note (Oregon811 vs. the utility-tap application), 70-100 words; the utility-tap-call portion properly hedged per `07-oregon-authority.md` §3 |
| 5 | What Happens If You Hit an Existing Line? | Gap #6 (score 40.0) — task-brief-named failure-mode/trust content, applying the excavation page's existing Oregon811 citation specifically to utility-adjacent trenching rather than re-deriving it | Answer-first, 60-80 words; `Speakable` |
| 6 | How Much Does Utility Trenching Cost? | Gap #5 (score 40.0) and Gap #8 — 0/9 competitors publish any utility-trenching cost figure; includes the hardscape-vs-open-ground cost differential nobody in this market states | Answer-first intro (60-80 words) + comparison table — columns: Utility Type / Typical Range / What Drives It, including a hardscape-trenching cost note |
| 7 | Do I Need a Permit for a New Utility Line? | Gap #15 — brief permit-awareness note, deliberately short since fuller permit content lives elsewhere | Short answer-first (60-80 words) + cross-link to `/services/excavation/`'s and `/services/site-preparation/`'s fuller permit sections rather than duplicating |
| 8 | What's the Difference Between Utility Excavation and Trenching & Backfill? | Gap #3 (score 40.0) — this page's own internal scope-boundary question, directly answering a real buyer confusion point (`02-question-mine.md` Q1/Q8) | Answer-first, 50-70 words; `Speakable` |
| 9 | What Equipment Shows Up on the Job? | Gap #13 — reused/extended from the current live page's existing equipment section (already covered, minor reinforcement) | Short answer-first, 50-70 words |
| 10 | Frequently Asked Questions | Matrix C: 0/9 competitors run any FAQ on utility-trenching topics, and none carry `FAQPage` schema | `FAQPage`-formatted Q&A, 9 questions (see §8 below) |
| 11 | Related Services *(non-H2 UI component — the existing `ServiceCard` grid)* | Structural continuity — restate the scope boundary against Trenching & Backfill, Drainage Excavation, and Excavation & Grading plainly in the intro copy | Card grid, existing `ServiceCard` component |
| 12 | Get Your Utility Line In | Matches the current live page's existing CTA block ("Get Your Utility Line In") — keep this copy, it already fits | Short answer-first + CTA block |

Format minimums are satisfied: 2 comparison tables (H2 #2, #6), 1 bulleted list (H2 #1) — matching the parent methodology's format-diversity rule and this pack's own Content Format Plan.

### Boundary Note — What This Page Owns vs. What Stays on Two Sibling Pages and One Parent Page

This is the single most important structural instruction in this brief, per `00-research-pack.md` §0's dedicated three-way scope-boundary section — this page sits inside a more tangled boundary than any prior page in the pipeline resolved:

- **Excavation & Grading (parent) owns (do NOT re-derive here):** general cut/fill mechanics, the fuller Oregon811 and OSHA 1926 Subpart P trench-safety write-up, and the general excavation permit process. This page applies Oregon811 and OSHA specifically to utility-adjacent trenching (H2 #4 and H2 #5) — cross-link to `/services/excavation/` for the fuller mechanics rather than re-explaining the 2-business-day notice period or the OSHA depth thresholds from scratch.
- **Drainage Excavation (sibling) owns (do NOT re-derive here):** buried trenching for water-management purposes — French drains, curtain drains, catch basins — including its own depth/slope/material content. This page and drainage-excavation share trenching mechanics but differ by **purpose**: this page is trenching to deliver a utility service (water, sewer, power, gas, communications); drainage excavation is trenching to manage water. Do not re-explain drainage's depth figures or discharge-destination content here.
- **Trenching & Backfill (sibling, the central open item — see below) owns, per this pack's own evidence-based recommendation:** the general mechanics of opening a trench to the right width/depth and closing it properly — backfill in compacted lifts, bedding material selection generically, compaction testing, surface restoration. This page should name what materials go INTO a utility trench for a specific utility (bedding sand, the pipe/conduit itself, tracer wire) without rebuilding the compaction-in-lifts technique explanation already shipped on `trenching-backfill.astro`.
- **Foundation Excavation and Septic Install & Repair (siblings) — minor, one-line disambiguation only:** a utility stub-in during a foundation dig touches Foundation Excavation's territory (cross-link, don't duplicate its ORSC R405 foundation-drain content, which is unrelated to utility service lines in any case); a sewer lateral running to a septic tank touches Septic's territory (one-line disambiguation, cross-link to `/services/septic/` for the tank/drainfield itself).
- **Instruction to the content writer:** H2 #8 must state the boundary against Trenching & Backfill explicitly and by name. If a draft of this page starts re-explaining backfill-in-lifts compaction technique, re-deriving the full Oregon811/OSHA write-up, or rebuilding drainage's discharge-destination content, stop — that content is already shipped elsewhere, and duplicating it here recreates the exact cannibalization risk `00-research-pack.md` §0 warns against.

### Open Item — Utility Excavation vs. Trenching & Backfill (flagged, NOT resolved by this brief)

**This brief does not resolve the Utility-Excavation-vs-Trenching-&-Backfill relationship as a final architectural decision — it only carries forward the research pack's own evidence-based recommendation and instructs this page's content to be written consistently with it.** Per `00-research-pack.md` §0 and Flag C: both live pages already exist as separate, parallel Astro routes; `business-info.md` lists them as two separate confirmed services; and real search behavior shows a genuine split between "utility trenching cost" queries (organized by utility type) and "trenching and backfill cost" queries (organized by technique/mechanics). The research pack's recommendation — keep both pages separate along a WHY (utility excavation) vs. HOW (trenching & backfill) axis, cross-linked both directions rather than merged — is what this brief's H2 #8 and Related Services section are written to reflect. **No content or research for `/trenching-backfill/` itself was produced by this research pass or this brief; only this scope-boundary finding exists, logged so a future brief on that page can act on it with evidence already in hand.** This item, along with the H1 change and the two operational-practice hedges (utility-tap coordination, joint/gas/fiber trenching as demonstrated capability vs. general category), is listed again in the Open Items section at the end of this brief.

---

## 7. Unique Angle

Pulled directly from the top gaps in `08-gap-analysis.md` — every entry is a specific, evidence-based differentiator, not a slogan:

1. **Publishes a real, code-cited depth figure for every major utility type — water, sewer, gas, and electrical — side by side**, where zero of 9 competitors checked state a single burial-depth figure for any utility (`08-gap-analysis.md` Gap #1, top score 50.0). This is the single most novel, most citable claim on this page, sourced directly from Lane County Land Management Division's own government page.
2. **Names joint trenching as a real, code-permitted, cost-saving option**, including the one specific separation rule that keeps it code-compliant (water 12 in. above sewer where they cross), where zero competitors mention this practice exists at all (Gap #2, score 40.0).
3. **Draws an honest, two-call distinction between Oregon811 and the utility-company tap application** — different calls, to different parties, for different reasons — where this market either ignores the distinction or implies "the contractor handles everything" (Gap #4, score 40.0).
4. **States plainly what this page covers versus what the separate Trenching & Backfill page covers**, directly answering a real buyer confusion point that zero competitors have any occasion to even address, since none of them separate the two services the way D&D's own site architecture does (Gap #3, score 40.0).
5. **Names the hardscape-vs-open-ground cost differential honestly** — trenching under a driveway or patio costs meaningfully more than trenching through open ground — where nobody in this market states this upfront (Gap #5, score 40.0).

These five must surface in the opening paragraph or immediately after (at minimum the depth-table framing and the utility-excavation-vs-trenching-backfill boundary, introduced early), in their dedicated H2 sections (#2, #3, #4, #8, #6 respectively), and echoed briefly in the closing CTA copy.

---

## 8. FAQ Section

9 questions, sourced verbatim from `02-question-mine.md`'s "FAQ Shortlist for This Page," cross-checked against `04-competitor-matrix.md` Matrix C: **no FAQ content specific to utility trenching, and no `FAQPage` schema, was found on any of the 9 competitor pages examined for this page**, so every question below is uncontested ground.

| # | Question | Source in question-mine | Answer guidance (40-90 words, direct answer first) |
|---|---|---|---|
| 1 | How deep does a water line need to be buried in Oregon? | Decision Q22 | Lead with the figure: 12 inches below Lane County's own 12-inch frost depth, for a total minimum trench depth of 24 inches below grade, per Oregon Plumbing Specialty Code 609.1. Note that frost depth varies by county, so this exact total is Lane-County-specific. |
| 2 | How deep does a sewer lateral need to be buried? | Decision Q23 | Lead with the figure: 12 inches minimum ground cover, per OPSC 718.1, sloped at roughly 1/4 inch per foot toward the discharge point. |
| 3 | How deep does electrical conduit need to be buried? | Decision Q24 | Lead with the range and the hedge: 6 to 24 inches depending on the wiring method (rigid metal conduit shallowest, direct-buried cable deepest), per NEC Table 300.5, the national baseline Oregon adopts. State plainly that any Oregon-specific amendment to this baseline should be confirmed for an exact figure — do not present a single number as settled beyond the NEC baseline range. |
| 4 | How deep does a gas line need to be buried? | Decision Q25 | Lead with the figure: 18 inches minimum cover standard, per ORSC G2415.12; an individual outdoor-appliance line (a grill, a light) may run as shallow as 8 inches if approved by the local authority, per G2415.12.1. |
| 5 | Can water, sewer, electrical, and gas all go in the same trench? | Decision Q27 | Lead with "yes, generally" — Lane County permits multiple utilities sharing one trench without prohibition. The one code-stated rule: the water pipe's bottom must sit at least 12 inches above the sewer pipe's top where the two cross (OPSC 720.1). Individual utility companies may add their own separation specs on top of this, so confirm for a specific job. |
| 6 | Who calls Oregon811 before utility trenching starts? | Process Q15 | Lead with "D&D Land Works does, before every dig" — Oregon811 requires at least 2 business days' advance notice, free of charge, enforced by the Oregon PUC. This is a separate call from the utility-company tap application (see next question). |
| 7 | Who calls the utility company for a new tap — me or the contractor? | Process Q16 | Lead with the honest, hedged answer: typically the property owner or their developer/builder initiates the tap request directly with the utility (EWEB, Springfield Utility Board, or a rural water district); the actual trenching from the main or meter to the structure is done separately by the excavation contractor. This varies by utility, and which party D&D itself coordinates with on a given job is confirmed per job, not a fixed practice stated here as settled. |
| 8 | What's the difference between utility excavation and trenching and backfill? | Pre-Call Q1 `[boundary]` | Lead with the real distinction: this page covers which utility is being run, why, and at what code-required depth (water, sewer, electrical, gas, communications); [Trenching & Backfill](/services/trenching-backfill/) covers the general mechanics of opening and properly closing any trench — bedding, compaction in lifts, surface restoration — whether it's for a utility line, drainage pipe, or a footing. |
| 9 | Does trenching under a driveway or patio cost more than trenching through open ground? | Cost Q7 | Lead with "yes" — trenching through existing hardscape requires saw-cutting, disposal of removed material, and surface restoration that open-ground trenching doesn't, a real cost driver stated honestly here rather than surfacing as a surprise mid-job. No Lane-County-exact multiplier exists; a free on-site estimate is the way to price a specific trench route. |

**FAQ answer service-claim discipline:** answers 3 and 7 in particular must carry their hedges into the visible FAQ text, not just this brief — no FAQ answer should state the OESC's Oregon-specific electrical amendment as an exact figure, and no FAQ answer should state which party places the utility-tap call as a fixed D&D operational practice. No FAQ answer should fabricate a Lane-County-exact price, a specific permit fee, a communications/fiber conduit depth figure (none exists in Oregon code — say so honestly if asked), or a D&D-specific completed-project claim (joint trenching, gas-line trenching, or fiber trenching as demonstrated work).

---

## 9. Internal Links

**IN (what will link to this page)** — per the topical map's hub-and-spoke rule, and per the sibling page's own already-shipped promise to send readers here:

| From | Anchor text example | Placement |
|---|---|---|
| `/services/excavation/` | "utility excavation" | Already shipped: "**Utility run.** Trenching for a water, sewer, or utility line to a new structure. See [utility excavation](/services/utility-excavation/) for trenching-specific depth." — this brief's page is what makes that sentence true |
| Homepage (`/`) | "utility excavation" / "trenching and backfill for water, sewer, and utility lines" | Already shipped per `00-research-pack.md`'s note on `home-content.md`'s services-list bullet |
| `/locations/eugene/`, `/locations/springfield/` | "utility excavation in Eugene" / "utility excavation in Springfield" | Body, services-offered section of each city page |
| `/about/` | Breadcrumb | Breadcrumb |
| Global header/footer | "Services" nav item | Every page |

**OUT (this page → other pages)**, matching the entity map's boundary logic (`03-entity-map.md` Layer E) and §6's Boundary Note:

| To | Anchor text | Placement |
|---|---|---|
| `/` (homepage) | "D&D Land Works" or "our full range of excavation services" | Breadcrumb + body-late (up-link to hub) |
| `/services/excavation/` | "Excavation & Earthmoving" ("for the fuller trench-safety and Oregon811 picture, see" framing) | H2 #4 (who calls before digging), H2 #5 (hit a line), H2 #7 (permits) |
| `/services/trenching-backfill/` | "Trenching & Backfill" ("for how the trench itself gets closed and compacted, see" framing) | H2 #8 (scope-boundary answer, primary placement), Related Services |
| `/services/drainage-excavation/` | "Drainage Excavation" (brief distinguishing mention: trenching for water management, not utility service delivery) | H2 #1 (scope intro) |
| `/services/foundation-excavation/` | "Foundation Excavation" (brief cross-reference for a utility stub-in during a foundation dig) | Related Services intro, brief mention only |
| `/services/septic/` | "septic tank or drainfield" / "Septic Install & Repair" | One-line disambiguation, near the sewer-lateral row of the depth table or H2 #1 |
| `/locations/eugene/`, `/locations/springfield/` | "Eugene" / "Springfield" | H1/opening paragraph area, and H2 #4 (naming EWEB/Springfield Utility Board by city) |
| `/about/` | "David Deggelman" | Trust/CCB mention |
| `/contact/` | "get a free estimate" / "call 541-401-8726" | Closing CTA + hero |

No "click here" / "learn more" anchors — every anchor is descriptive, per the parent methodology's rule.

---

## 10. Schema Requirements

This page follows the exact pattern every sibling page shipped with:

- **Primary `@type`: `Service`** — CONFIRMED REAL schema.org type, reused from the homepage pack's confirmed schema.org research (`GeneralContractor` is real and correct; `ExcavationContractor` does not exist) rather than re-checking from scratch.
- **`provider`**: `{"@id": "https://www.ddlandworks.com/#business"}` — the exact `@id` already shipped in every sibling page's JSON-LD. Do not redefine the organization inline and do not use a different placeholder.
- **`Service` required fields:** `name` ("Utility Excavation"), `provider` (the `@id` reference above), `areaServed` (Lane County + Eugene/Springfield at minimum, matching the full city list already used in every sibling page's schema), `serviceType` ("Utility Excavation"), `description` (can reuse a trimmed version of the AI citation block from §5, including its electrical-figure hedge — do not tighten the schema description into a claim stronger than the visible body copy makes).
- **`FAQPage`** — for the 9-question set in §8; FAQ schema answers must match the visible FAQ text exactly, hedges included.
- **`BreadcrumbList`** — Home → Services → Utility Excavation, matching every sibling page's already-implemented `Breadcrumbs` component.
- **`Speakable`** — flag the answer-first passages in H2 #2 (depth-table intro), H2 #3 (joint trenching), H2 #5 (hit an existing line), and H2 #8 (utility excavation vs. trenching & backfill) as speakable-eligible, per `00-research-pack.md` §9.
- **`ItemList`** — for the five-utility-type list in H2 #1.
- **Do NOT implement `AggregateRating`/`Review` schema** — same rule as every prior brief; D&D has zero reviews at launch.

---

## 11. Entity Profile

Pulled from this folder's `entity-inventory.csv`, cross-checked against `home/`, `excavation/`, and `drainage-excavation/entity-inventory.csv` for reused canonical forms. Business/location/certification entities are **not re-derived** — see `home-brief.md` §11 for their original validation notes.

**Primary entity (salience 10, reused unchanged):**
- **D&D Land Works** (Organization → schema `GeneralContractor`) — `NOT_FOUND` externally. Must appear in the first sentence of body copy and in the `Service.provider` reference.

**Page-defining entity (salience 10, canonical home for this page):**
- **Utility Excavation** (Service — trenching for a new utility service line) — `VALIDATED_LOCAL`. 6/10 excavation competitors reference the category generically; 0/10 give any per-utility depth. Scope: trenching for a NEW utility connection to a structure — water service, sewer lateral, electrical conduit, gas line, communications/fiber — organized by which utility and why. Excavation FOR utility installation, not utility installation itself (no tap, connection, or hookup claims).

**This page's core entity cluster — utility service lines (salience 5-9, all load-bearing):**
- Water Service Line (9, `VALIDATED`, 12 in. below frost depth / 24 in. total in Lane County, OPSC 609.1), Sewer Lateral (9, `VALIDATED`, 12 in. min. cover, OPSC 718.1), Underground Gas Piping (8, `VALIDATED`, 18 in. standard / 8 in. appliance lines, ORSC G2415.12/.1), Underground Electrical Conduit (8, `VALIDATED` — the one entity carrying an explicit verification caveat, NEC Table 300.5 baseline, OESC amendment not directly confirmed), Joint Trench (8, `VALIDATED`, code-permitted, 0/9 competitors name it), Tracer Wire (4, `VALIDATED_LOCAL`, blue/water, green/sewer, yellow/gas).

**Adjacent, honestly-disclosed gap entity (salience 5):**
- Communications/Fiber Conduit (5, `NOT_FOUND` for a depth figure, `core_concept_unconfirmed_depth`) — no Oregon state-code minimum burial depth exists; typically governed by the individual ISP/utility's own construction standard. State this honestly if the page addresses it at all; do not invent a figure.

**New authority entities (salience 5-9, this page's strongest citations):**
- OPSC 609.1, OPSC 718.1 (9 and 9, `VALIDATED`), ORSC G2415.12 / G2415.12.1 (8, `VALIDATED`), NEC Table 300.5 / OESC (8, `VALIDATED` for the NEC baseline, confirmation-flagged for the Oregon-specific amendment), OPSC 720.1 — Water-to-Sewer Separation (5, `VALIDATED_LOCAL`), Lane County Land Management Division — Building Safety Division (the direct source of the depth table, new).

**Reused geo/business/regulatory entities (unchanged from prior packs):** David Deggelman, Oregon CCB #261742, Willamette Valley, Eugene, Springfield, Oregon811/Oregon Utility Notification Center, OSHA 1926 Subpart P — same validation status and do-not-fabricate rules as `home-brief.md` §11 and `excavation-brief.md` §11.

**Utility-coordination context entities (salience 3-4, mention generically, not as a claimed partnership):** EWEB — Eugene Water & Electric Board (4, `VALIDATED`), Springfield Utility Board (4, `VALIDATED`), NW Natural (3, `VALIDATED`).

**Equipment entities (salience 5, reused/extended from the current live page):** Trencher, Mini Excavator.

**Sibling/parent entities (explicitly NOT this page's scope — see §6 Boundary Note):**
- Excavation & Grading (Service, salience 7) — parent page, owns general cut/fill, OSHA, and the fuller Oregon811 write-up.
- Drainage Excavation (Service, salience 6) — sibling, owns buried trenching for water-management purposes.
- Trenching & Backfill (Service, salience 6, `sibling_scope_boundary_flagged`) — sibling, owns general backfill/compaction-in-lifts mechanics per this pack's own evidence-based recommendation; the relationship is flagged, not resolved — see the Open Item in §6.
- Foundation Excavation (Service, salience 3) and Septic Install & Repair (Service, salience 4) — minor, one-line disambiguation only.

**Competitor/content-source entities (for internal reference, not on-page):** All Dirt Inc, Emerald Excavating, Heavy D Excavation, McKenzie Excavating, Danco Excavation, Braun Excavating, Strasheim Contracting (all `VALIDATED_LOCAL`, reused/re-checked from the excavation pack), Hydro-Con Excavation (`competitor_supplemental_outofmarket`, a national-pattern structural reference only, not a Lane County competitor).

**Co-occurrence requirements specific to this page** (per `03-entity-map.md` Layer F):
- All four major utility types (water, sewer, gas, electrical) each named with their own real depth figure — 0/9 give even one — **mandatory, the page's central differentiator**
- Joint trenching named and explained, including the one real separation rule — 0/9 — **mandatory**
- Oregon811 applied specifically to utility-adjacent trenching (cross-linked, not re-derived) — 0/9 — **mandatory, structural requirement**
- The utility-tap-vs-Oregon811 coordination distinction stated clearly — 0/9 — **mandatory, the task's named trust signal**
- Any utility-trenching cost figure, by utility type — 0/9 — **mandatory**
- The utility-excavation-vs-trenching-backfill scope boundary answered directly — 0/9 (no competitor draws any such line) — **mandatory, this page's own internal disambiguation**

---

## 12. CTA Requirements

| Placement | Copy | Type/link |
|---|---|---|
| Above the fold (hero, already live) | "Call 541-401-8726" / "Free Estimate" | `tel:5414018726` and `/contact/` — **keep the existing Hero component copy and subheadline unchanged** ("Water, sewer, power, and gas lines all have to go in at the right depth, with the right bedding, and clear of everything already buried nearby. D&D Land Works calls locates first and digs second, every time.") — this subheadline already correctly stays within scope, no edit needed |
| Mid-page (after H2 #2, the depth table) | "Not sure how deep your specific line needs to go? Get a free on-site estimate." | `/contact/` |
| After H2 #3 (joint trenching) | "Running more than one utility to a new structure? Ask about a joint trench and save a mobilization." | `/contact/` |
| Closing CTA (H2 #12, matches the existing live page's block) | "Get Your Utility Line In" (keep) + "Free estimate for utility excavation anywhere in Lane County." (keep) | `tel:5414018726`, `/contact/` |

No fabricated urgency/scarcity language, consistent with every prior brief — nothing in the research pack supports it.

---

## 13. Images Required

**Current state: the live page has zero real project photos**, same gap as every prior page in this series — the `Hero` component is text-only, and no `<img>` beyond shared components appears in `utility-excavation.astro`. This is a genuine, unaddressed gap, not something to paper over with unbranded stock presented as D&D's own work (same rule as every prior brief's §13).

| # | Description | Alt text guidance | Type | Status |
|---|---|---|---|---|
| 1 | Hero image — an open utility trench on a Lane County site, pipe or conduit visible before backfill | "Utility trenching for a new water or sewer line, Lane County, Oregon" | Hero | **Gap — no real photo yet** |
| 2 | A joint trench showing multiple utility lines (water, sewer, electrical) laid side by side before backfill | "Joint trench with water, sewer, and electrical lines, Lane County, Oregon" | Evidence, near H2 #3 (joint trenching) — this page's clearest unclaimed differentiator | **Gap — genuinely valuable, directly ties to the joint-trenching content** |
| 3 | Tracer wire close-up, laid alongside a non-metallic pipe before backfill | "Tracer wire installation alongside a buried utility line" | Evidence, near H2 #2 or §3's insider-detail callout | **Gap — a small, concrete, checkable detail worth showing, not just stating** |
| 4 | A trencher and/or mini excavator in use on a utility-trenching job | "Trenching equipment for utility excavation, Lane County, Oregon" | Evidence, near H2 #9 (equipment) | **Gap — reused framing from the current live page's equipment section, needs a real jobsite photo** |
| 5 | Simple illustrated graphic showing the four utility depths side by side (water/sewer/gas/electrical) | "Utility burial depth by type: water, sewer, gas, and electrical conduit" | Supporting graphic, near H2 #2 | Can launch as a simple illustrated comparison graphic — lower priority to fix than the photo gaps above, but high value given how central this content is |

Flag to David: same as every prior brief — launching with limited or no photography is an acceptable temporary measure, but should be tracked as a launch gap to close with real jobsite photography (a joint-trench photo would be especially valuable given how unclaimed that specific content is in this market) within the first few months.

---

## 14. Authority Signals to Cite

Pulled from `07-oregon-authority.md`, with the verification/hedging status made explicit per this project's central sourcing rule:

1. **Water service line depth — VERIFIED, cite with confidence.** "12 inches below the local frost depth; in Lane County, frost depth is 12 inches, so total minimum trench depth is 24 inches below grade." *(Source: OPSC 609.1, via Lane County Land Management Division's own "Trenching for Utilities" page, lanecountyor.gov; verified 2026-09-09. Note: Lane County's frost depth is county-specific — do not reuse the 24-inch total for a different Oregon county without checking its own frost-depth figure.)*
2. **Sewer lateral depth — VERIFIED, cite with confidence.** "12 inches minimum ground cover, sloped at roughly 1/4 inch per foot toward the discharge point." *(Source: OPSC 718.1, via the same Lane County source; verified 2026-09-09.)*
3. **Gas line depth — VERIFIED, cite with confidence.** "18 inches minimum cover standard; individual outdoor-appliance lines may run as shallow as 8 inches if approved by the local authority having jurisdiction." *(Source: ORSC G2415.12 (main), G2415.12.1 (appliance-line exception), via the same Lane County source; verified 2026-09-09.)*
4. **Electrical conduit depth — VERIFIED as a NEC baseline ONLY; carries the strongest hedge of any figure on this page.** "24 inches for direct-buried cable, 18 inches for PVC or other listed nonmetallic conduit, 6 inches for rigid or intermediate metal conduit, per NEC Table 300.5 — the national baseline standard Oregon's own Electrical Specialty Code (OESC) adopts and amends with its own tables (e.g., OESC Table 1-E)." *(Source: NEC Table 300.5, as referenced via the Lane County source; verified 2026-09-09. **Explicit caveat — carry into visible body copy: this pack could not directly fetch the current OESC amendment table (iccsafe.org returned a 403 on this pass). The NEC baseline figures above are correct and citable as the national standard, but any Oregon-specific amendment to this table should be confirmed against the current adopted OESC edition before this page states an electrical depth figure as an exact, litigation-proof number** — unlike the water, sewer, and gas figures above, which are corroborated directly enough to state with full confidence.)*
5. **Joint trenching and utility separation — VERIFIED, cite with confidence.** "Multiple utilities may share one trench in Lane County without prohibition. The one code-stated separation rule: the water pipe's bottom must sit at least 12 inches above the sewer pipe's top where the two cross." *(Source: OPSC 720.1, via the same Lane County source; verified 2026-09-09. Caveat: individual utility companies — EWEB, Springfield Utility Board, NW Natural — may impose their own additional separation specs beyond this code minimum; state this as a real, honest "confirm with the specific utility" nuance, not a reason to soften the code-permitted answer itself.)*
6. **Tracer wire standard — VERIFIED, cite with confidence.** "Blue, 14 AWG for water; green, 14 AWG for sanitary sewer; yellow, 18 AWG for gas." *(Source: same Lane County page; verified 2026-09-09.)*
7. **Who calls for a new utility tap — general industry pattern, NOT Lane-County-verified; hedge explicitly.** "The property owner or their developer/builder typically initiates a new tap request directly with the utility; the actual trenching from the main or meter to the structure is commonly done separately by a licensed excavation contractor or plumber." *(Source: general pattern reasoned from multiple municipal water utilities' own published processes, not a single verified Lane County source; see `07-oregon-authority.md` §3. Do not state which party D&D itself coordinates with as a fixed, settled operational practice.)*
8. **Oregon811 and OSHA 1926 Subpart P trench safety — reused verbatim, brief mention only.** "Oregon811 requires at least 2 business days' advance notice before any digging project, free of charge. OSHA's trench-safety rules require a protective system at 5 feet deep and safe access at 4 feet — most utility-service trenches (18-24 inches) fall well under these thresholds; a deep sewer lateral to a distant main can approach them." *(Source: reused verbatim from `../excavation/07-oregon-authority.md` §1-2. Full depth stays on `/services/excavation/`; do not re-derive here beyond this brief, context-specific mention.)*

**Explicit hedging instruction for the content writer:** signal #4 (electrical depth) is the one figure on this page that must carry a visible, unambiguous hedge distinguishing the confirmed NEC baseline from the unconfirmed Oregon-specific amendment — do not present all four utility depths with equal confidence. Signal #7 (utility-tap coordination) should read as a general, honestly-labeled industry pattern, not a stated D&D practice. Do not state a specific communications/fiber conduit depth figure (none exists in Oregon code — say so honestly if the topic comes up), a Lane-County-specific per-foot utility-trenching price, a specific utility-company separation spec attributed to EWEB/SUB/NW Natural by name, or a D&D-specific completed-project claim for joint trenching, gas-line trenching, or fiber trenching — none was confirmed in this research pass.

Density target: same as every prior brief, roughly 1 statistic per 300-500 words of body copy, at least one external authority link per major H2 section (especially H2 #2, the depth table, and H2 #3, joint trenching).

---

## Open Items Requiring David's Input Before Content-Create

Carried forward from `00-research-pack.md`'s "Honest Limitations" section and `08-gap-analysis.md`'s Flag C — do not invent values for these:

1. **The Utility-Excavation-vs-Trenching-&-Backfill relationship is flagged, not resolved, by this brief.** This brief's H2 #8 and Related Services section are written consistent with the research pack's own evidence-based recommendation (keep both pages separate along a WHY-vs-HOW axis, cross-linked both directions), but that recommendation has not been confirmed by David and no content or research exists yet for `/trenching-backfill/` itself. A future brief/content decision on that page should treat this recommendation as a starting point, not a settled fact.
2. **The Oregon Electrical Specialty Code's own amendment table** (as distinct from the NEC 300.5 baseline it adopts) should be directly re-confirmed before this page states an Oregon-specific, rather than NEC-baseline, electrical depth figure as exact. The direct fetch attempt in this research pass returned a 403.
3. **Which party initiates a new utility-tap application with EWEB, Springfield Utility Board, or a rural water district**, and whether D&D itself places or coordinates that call, is an unconfirmed operational practice — do not state as settled fact on the page.
4. **Whether D&D has actually performed joint trenching, gas-line trenching, or communications/fiber trenching**, versus offering these as general service categories, is unconfirmed — flag for David before content-create states any of them as a demonstrated capability rather than a general offering.
5. **No Oregon state-code minimum burial depth exists for communications/fiber conduit** — this is a genuine, honestly-disclosed gap, not something to fill with an invented figure if the page addresses it at all.
6. **No Lane-County-specific per-foot utility-trenching cost figure exists** — all cost ranges available are national, clearly labeled as such. If David has real per-job cost data, it should replace the generic ranges.
7. **The H1 change** flagged in §6 (adding "in Eugene, Springfield & Lane County, Oregon" to match the sibling pattern) — recommended for consistency but changes text on an already-live page and should be confirmed before build.
8. **Real pricing specific to D&D's own utility-trenching jobs**, if David is willing to share even rough figures, would strengthen H2 #6 beyond the generic national ranges currently available.
