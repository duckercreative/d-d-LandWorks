# Content Brief — D&D Land Works Site Preparation (`/site-preparation/`)

**Prepared:** 2026-09-08 · **Prepared by:** Ducker Creative
**Built from:** `01-research/page-research/site-preparation/` full research pack (files 00-08 + entity-inventory.csv + 01-keyword-universe.csv), cross-checked against `01-research/page-research/home/entity-inventory.csv` for canonical entity reuse, `business-info.md`, `01-research/topical-map-2026-09-03.md` §6.1, `docs/design-system.md`, and the current live page at `site/src/pages/services/site-preparation.astro`.
**Methodology note:** Same adaptation as `home-brief.md` — this project's `content-briefs` skill was written for a prior HVAC client and references files that don't exist here. Dropped/substituted with the real D&D Land Works research files throughout.
**Pipeline position:** Second page through this project's content pipeline. **This is a rewrite/expansion brief, not a greenfield brief** — a real, thin page already exists and is live in the Astro codebase. Every recommendation below is scoped as "add," "expand," or "restructure" against that existing page, not a from-scratch build like the homepage was.
**Entity reuse:** All canonical business/location/certification entities (D&D Land Works, David Deggelman, Oregon CCB #261742, Oregon DEQ, Lane County, Eugene, Springfield, Willamette Valley, the `GeneralContractor` schema decision) are reused verbatim from `home-brief.md` §11 and `home/entity-inventory.csv` — not renamed or re-derived.

---

## 1. Page Metadata

| Field | Value |
|---|---|
| **URL (per topical map)** | `/site-preparation/` |
| **Current live URL** | `/services/site-preparation/` (the file lives at `site/src/pages/services/site-preparation.astro`) — **flag to David/dev before build:** the topical map (`01-research/topical-map-2026-09-03.md` §5, §18) specifies flat URLs (`/site-preparation/`, not `/services/site-preparation/`). This brief targets the flat URL per the task instruction and the topical map; resolving the URL structure (move the file, or update the topical map to match the nested structure, plus a 301 if the nested URL is ever indexed) is a pre-publish decision this brief does not make unilaterally. |
| **Slug** | `site-preparation` |
| **Page type** | Core service page — P0 priority, the **umbrella hub for the excavation service group** (topical map §6.1), not a location page |
| **Primary keyword** | `site preparation eugene or` / `site preparation eugene oregon` (matches the exact phrasing All Dirt and BBC Excavation already rank dedicated pages for — `00-research-pack.md` §1) |
| **Co-primary keyword** | `site preparation lane county or` (county-wide framing, matching this page's umbrella-hub scope) |
| **Secondary keywords** | `land prep for new construction lane county`; `lot prep for house build oregon`; `site prep for ADU oregon` / `ADU site prep eugene` (zero of 9 competitors name ADU at all); `commercial site preparation eugene oregon` / `subdivision site development lane county` (serves this page's role as the topical map's "top commercial converter") |
| **Semantic terms** (must appear at least once) | site preparation vs. excavation, land clearing, grading and leveling, foundation excavation, drainage excavation, cut and fill, subgrade compaction, topsoil stripping, rough grading, erosion control, Lane County Grading and Fill Permit, Erosion Prevention Permit, DEQ 1200-C, septic test pit, ADU, shop/barn pad, subdivision site development, commercial site development, licensed and bonded, Oregon CCB #261742, free estimate |
| **Search intent** | Mixed: primary/co-primary keywords are commercial decision-stage; ADU and commercial-site-development variants are commercial consideration-stage (`00-research-pack.md` §1) |
| **Current state / baseline** | A real, live, thin page exists today. It covers "What Site Prep Covers" (an unordered bulleted process list), "Equipment on the Job," "Residential and Commercial," "Often Paired With," and a Related Services card grid (Land Clearing, Grading & Leveling, Foundation Excavation — **Drainage Excavation is missing**). It has **zero** of: the site-prep-vs-excavation disambiguation, permit content, cost content, timeline content, project-type content (ADU/shop-barn/subdivision/commercial), the septic-sequencing fact, or an FAQ. This is a **content-expansion/restructure brief**, not a rewrite-from-nothing brief — the existing accurate content (real process steps, CCB #261742 mention, service-area mention) should be preserved and re-sequenced, not discarded. |

---

## 2. Intent & Audience

- **Primary ICP:** A Lane County landowner who has just closed on a raw or partially-cleared lot, or whose builder/architect has finalized house plans and is now asking them to line up site work — the single most common trigger per the topical map's Table 2 in `05-intent-triangulation.md`. Secondary ICP: a rural landowner planning a shop/barn pad, a homeowner planning an ADU, and a developer/builder scoping a subdivision or commercial site (this page's stated role as the topical map's "top commercial converter").
- **State of mind — new-construction anxiety, the task brief's named defining cluster for this page:** they don't know if "site preparation" and "excavation" are the same thing or two different things they need to hire separately for; they're worried site prep will delay their building permit; they don't know if a survey is required first; they're afraid the crew will hit rock or bad soil and blow the budget with no warning; if they're also planning septic, they don't know that grading can accidentally void a drainfield's approval (`05-intent-triangulation.md` Tables 1-3).
- **What they need to believe before calling:**
  1. Site prep and excavation are genuinely different things, and now they understand which one they need (or that they need both, in sequence, from one contractor).
  2. Site work won't blindside their permit timeline — there's a real, honest answer about how grading permits and building permits interact in Lane County.
  3. If the crew hits rock or clay, that's not a sign of a bad contractor or a bait-and-switch — it's an honest, explainable cost driver, and a soil check can protect their budget.
  4. If they're also doing septic, D&D understands the drainfield-sequencing risk and won't create a problem the county will penalize them for.
  5. Their specific project — ADU, shop pad, subdivision lot, commercial pad — is something D&D has actually thought about, not just a generic "we clear and grade" answer.

---

## 3. Voice & Angle

- **Writing voice:** Per `docs/design-system.md` v1.2 (the current source of truth — note that CLAUDE.md's typography reference to "Barlow Condensed/Barlow" is now outdated; the design system was updated 2026-09-05 to **Outfit (display) + Poppins (body)** after a direct competitor-CSS review; use Outfit/Poppins, not Barlow, for any design-system cross-reference this brief triggers). Voice itself is unchanged from the homepage brief: a plain-spoken, no-fluff Lane County excavation contractor talking directly to a first-time landowner. Short, declarative sentences for the disambiguation and trust claims; slightly longer only when explaining permits or the rock/clay cost mechanism.
- **Required Lane County / Oregon-specific detail (minimum 5, per `07-oregon-authority.md` for this page):**
  1. Lane County's Grading and Fill Permit — **hedge this one.** Per a third-party permitting guide (Willamette Craftworks), the trigger is moving more than 50 cubic yards of earth or a cut/fill slope steeper than 2:1 — but this figure has **not** been cross-verified directly against Lane Code Chapter 16 or the LMD's own permit page. Write it as "a Lane County permitting guide puts the threshold at roughly 50 cubic yards or a 2:1 slope — confirm the exact figure for your project with Lane County LMD" or similar hedged/attributed language. **Do not** state it as Lane County's own confirmed rule.
  2. Lane County's Erosion Prevention Permit (Type I/II) — same sourcing caveat as above; hedge identically. Type I = single-family/minor grading under 1 acre; Type II = larger/steeper/more erodible sites, within the County's MS4 area.
  3. Oregon DEQ's 1200-C Construction Stormwater Permit — **this one is confirmed directly against oregon.gov and can be cited normally, without hedging:** required when a project disturbs 1 acre or more, or is part of a larger common plan of development totaling 1 acre or more; ~$1,515 application fee + $1,558 first-year annual fee; 30-day advance application; no homeowner exemption found; permit term Dec 15, 2025 – Dec 14, 2030.
  4. Lane County's septic test-pit sequencing rule — also confirmed directly on lanecounty.org: an approved drainfield location must not be cut, filled, paved, or otherwise disturbed after evaluation, or the county's approval can be voided.
  5. Rock/clay cost-overrun reality, PNW-corroborated: standard excavation runs roughly $5-$15/cubic yard; rock can push that to $50-$200/cubic yard (10-40x); clay adds roughly 25-50%; a $2,000-$5,000 geotechnical study typically prevents 20-50% of cost overruns on a difficult site.
- **Insider/practitioner detail that signals real local expertise (use at least 2):**
  - Naming topsoil stripping and stockpiling as an explicit, distinct step — zero of the 9 competitors examined name this step explicitly, even though it's industry-standard (`03-entity-map.md` §2).
  - The two-tier permit structure itself: a project under 1 acre can still need a local Type I erosion permit even when it doesn't trigger the state-level DEQ 1200-C — explaining this two-tier relationship plainly is a genuine practitioner-level distinction no competitor attempts (`07-oregon-authority.md` §2).

---

## 4. E-E-A-T Requirements

- **Experience (minimum 2 signals):** The real, accurate 7-step process already partially present on the live page (survey/plan → clear → strip topsoil → cut/fill to grade → compact → stake → rough-grade for drainage), restructured as an explained, ordered sequence rather than a bulleted list; David Deggelman referenced and linked to `/about/`.
- **Expertise (minimum 3 signals):** The site-prep-vs-excavation disambiguation itself (a definitional clarity no competitor demonstrates); the permit-specificity section naming three distinct permits by name and administering body; the septic test-pit sequencing fact, which requires genuine working knowledge of how grading and septic evaluation interact.
- **Authority (minimum 3 signals):** Oregon CCB #261742 in visible body copy (reused from the live page, keep it); a direct outbound link to `oregon.gov/deq` for the 1200-C permit; a direct outbound link to `lanecounty.org`'s on-site wastewater/test-pit page.
- **Trust (minimum 4 signals):** Honest rock/clay cost-overrun framing that reframes a geotechnical study as budget protection, not an upsell; an explicit hedge/attribution on the two Lane-County-specific permit thresholds (§3 above) rather than stating them as confirmed exact figures; a restated scope-honesty line (no tree removal, stump grinding, forestry mulching, paving, concrete, or engineering guarantees, consistent with the topical map's scope fences); no fabricated years-in-business, review count, or "family-owned" claim.

---

## 5. AI Citation Target

Copied verbatim from `00-research-pack.md` §11 (drafted to be citable by an AI system answering "what is site preparation and how is it different from excavation" once the site is live and indexed):

> Site preparation is the work that gets a raw or partially-cleared lot ready for construction: clearing brush and debris, stripping and stockpiling topsoil, cutting and filling to bring the pad to design grade, compacting the subgrade, and staking corners and elevations for the build crew. It is distinct from excavation, which is the specific digging done for a foundation, utility line, or drainage feature once the site is prepped. D&D Land Works provides site preparation for residential and commercial projects throughout Eugene, Springfield, and Lane County, Oregon — including new home builds, ADUs, shop and barn pads, subdivisions, and commercial site development — as part of a licensed, bonded (Oregon CCB #261742) full-service excavation company. Site work in Lane County may require a grading permit, an erosion-control permit, or Oregon DEQ's 1200-C stormwater permit depending on project size; D&D can help confirm what applies before work begins.

**Placement:** first 30% of the page's body content, immediately after the opening paragraph — same placement rule as the homepage brief, consistent with the pack's citation-density finding.

---

## 6. Content Structure

**Word count target: 2,300–2,900 words.** Justification: the 9 competitors examined specifically for site-prep content in `04-competitor-matrix.md` (the original 8 homepage competitors re-checked, plus BBC Excavation as a 9th) show the same structural shallowness the homepage found, sharpened: only 2/9 even have a standalone site-prep page; 0/9 run an FAQ; 0/9 publish pricing; 0/9 mention any permit near their site-prep content; 0/9 explain site prep vs. excavation as distinct services. Even All Dirt's page — confirmed "the model to beat" — is a thin features list with no FAQ, pricing, or permit content. Matching that depth would mean matching structural shallowness. Instead, the target is derived from covering the 12 required H2 sections below to the depth the research pack specifies: a disambiguation passage (50-70 words) + a numbered 7-step process (roughly 250-350 words including transitions) + a sequencing answer (60-80 words) + a 3-row permit table (150-200 words) + a 5-item project-type bulleted list (150-200 words) + a cost comparison table (150-200 words) + a timeline comparison note (80-100 words) + a rock/soil answer (80-100 words) + a septic-sequencing answer (60-80 words) + a 9-question FAQ block (40-90 words per answer, roughly 450-650 words) + a related-services intro (50-80 words) + the 130-150 word AI citation block + a 100-150 word opening. That arithmetic lands at roughly 2,300–2,900 words — deeper than any of the 9 competitors' pages, and the depth differential is itself the structural gap this page is built to close.

**H1:** Site Preparation in Eugene, Springfield & Lane County, Oregon
*(source: `00-research-pack.md` §6 — matches the same "[Service] in [City], [County], OR" pattern the homepage brief used for its H1, scoped to this service)*

**Opening paragraph guidance (first 100-150 words):** Open by naming the page's central job immediately — per the task brief and `08-gap-analysis.md`'s #1-scored gap (50.0, the highest score in the entire pack): state plainly, in the first sentence or two, that "site preparation" and "excavation" are often used interchangeably but are actually two different phases of the same project, and that D&D Land Works handles both under one license. This sets up H2 #1's formal disambiguation without duplicating it verbatim. Follow immediately with the 130-150 word AI citation block from §5 above.

**H2 sections, in order** (every H2 traces to a competitor-matrix finding or a scored gap — cited inline):

| # | H2 (exact text) | Traces to | Format |
|---|---|---|---|
| 1 | What's the Difference Between Site Preparation and Excavation? | Gap #1, disambiguation (score 50.0, highest in the pack) — 0/9 competitors distinguish the two; several (Danco, Braun, Strasheim) list both terms in the same sentence undistinguished | Answer-first, 50-70 words; `Speakable` |
| 2 | What Does Site Preparation Include? | Gap #7, ordered-process gap (score 27.0) — upgrades the current live page's bulleted list into a real, explained sequence; Matrix A: named process steps beyond "clear and grade" only 2/9 | Numbered list, 7 steps (survey/plan → clear → strip topsoil → cut/fill to grade → compact → stake → rough-grade for drainage); `HowTo` |
| 3 | Should Site Prep Happen Before or After I Hire a Builder? | Gap #2, sequencing/anxiety (score 25.0) — the task brief's named highest-value intent cluster; 0/9 competitors address sequencing at all | Answer-first, 60-80 words + a brief sequencing note; `Speakable` |
| 4 | Do I Need a Permit for Site Prep in Lane County? | Gap #3, permit specificity (score 20.0) — 0/9 competitors mention any permit near site-prep content | Table: Permit / Triggered By / Who Administers It (3 rows: Grading & Fill, Erosion Prevention, DEQ 1200-C) — **hedge rows 1-2 per §3 above; row 3 (DEQ 1200-C) is confirmed and unhedged** |
| 5 | What Kind of Project Is This For? | Gap #6, project-type specificity (score 20.0-40.0, highest for ADU) — 0/9 competitors name ADU or shop/barn as project types | Bulleted list, 5 items (new home build, ADU, shop/barn pad, subdivision, commercial site development), one scope-difference sentence each; `ItemList` |
| 6 | How Much Does Site Preparation Cost in Lane County? | Gap #9, real pricing (score 25.0) — 0/9 publish any cost figure for site prep | Comparison table: Scope / Typical Range / What Affects Price — labeled general/national-statewide ranges, explicitly **not** Lane-County-specific (per `07-oregon-authority.md` §9, no Lane-County-specific figure was found) |
| 7 | How Long Does Site Preparation Take? | Gap #10, timeline specificity (score 36.0) — real ranges already sourced in this pack; ~1/9 implied only, none stated | Short comparison note: residential (roughly 1-2 months) vs. commercial/subdivision (roughly 1-3+ weeks) |
| 8 | What Happens If the Crew Hits Rock or Bad Soil? | Gap #5, rock/clay cost-overrun honesty (score 40.0, tied) — 0/9 mention this possibility at all | Answer-first + honest explanation, 80-100 words; `Speakable` |
| 9 | Site Prep and Your Septic System | Gap #4, septic/drainfield sequencing (score 40.0, tied) — genuinely unique regulatory content, 0/9 competitors mention it | Answer-first, 60-80 words; `Speakable` |
| 10 | Frequently Asked Questions | Gap #8, FAQ-content gap (score 15.0) — 0/9 competitors run a real FAQ on a site-prep page | `FAQPage`-formatted Q&A, 9 questions (see §8 below) |
| 11 | Related Services | Structural/internal-linking gap #12 — the current live page already links Land Clearing, Grading & Leveling, and Foundation Excavation but is **missing Drainage Excavation**, per `08-gap-analysis.md`'s explicit flag | Card grid, existing `ServiceCard` component — add the fourth card |
| 12 | Get Your Lot Scoped | Matches the current live page's existing CTA block verbatim ("Get Your Lot Scoped" / "Free estimate for site prep anywhere in Lane County") — keep this copy, it already fits | Short answer-first + CTA block |

Format minimums are satisfied: ≥1 table (H2 #4 and #6), ≥1 numbered list (H2 #2), ≥1 bulleted list (H2 #5) — per the parent methodology's format-diversity rule and the research pack's own Content Format Plan (`00-research-pack.md` §7).

---

## 7. Unique Angle

Pulled directly from the top 5 gaps in `08-gap-analysis.md` — every entry is a specific, evidence-based differentiator, not a slogan:

1. **Explicitly disambiguates "site preparation" from "excavation" as two distinct services**, rather than using the terms interchangeably the way every one of the 9 competitors examined does (`08-gap-analysis.md` gap #1, the highest-scored gap in this entire pack at 50.0). This is the single differentiator that must open the page.
2. **Names Lane County's and Oregon's actual permits by name** — the Grading and Fill Permit, the Erosion Prevention Permit (Type I/II), and Oregon DEQ's 1200-C Construction Stormwater Permit — where zero of 9 competitors mention any permit anywhere near their site-prep content (`08-gap-analysis.md` gap #3, score 20.0). The two locally-sourced thresholds are hedged per §3; the DEQ 1200-C facts are stated plainly since they're independently confirmed.
3. **States the septic test-pit sequencing rule plainly**: disturbing an approved drainfield location before it's evaluated can void the county's septic approval, and D&D coordinates grading around that footprint rather than treating the whole lot as one undifferentiated job (`08-gap-analysis.md` gap #4, tied score 40.0 — zero competitor coverage).
4. **Explains the rock/clay cost-overrun mechanism honestly**, including the real cost multiplier (standard excavation $5-$15/cu yd vs. rock $50-$200/cu yd) and reframes a geotechnical soil study as budget protection rather than an upsell (`08-gap-analysis.md` gap #5, tied score 40.0 — zero competitors mention this possibility at all).
5. **Names five distinct project types by name — including ADU and shop/barn pad**, which zero of 9 competitors name explicitly, even though Oregon's 2025 DEQ onsite-wastewater rule changes make the ADU angle genuinely timely (`08-gap-analysis.md` gap #6, up to score 40.0 for the ADU angle specifically).

These five must surface in the opening paragraph (at minimum the disambiguation, introduced immediately), in their dedicated H2 sections (#1, #4, #9, #8, #5 respectively), and echoed briefly in the closing CTA copy.

---

## 8. FAQ Section

9 questions, sourced verbatim from `02-question-mine.md`'s "FAQ Shortlist for This Page," cross-checked against `04-competitor-matrix.md` Matrix A: **0 of the 9 competitors run a real FAQ on a site-prep page**, so every question below is uncontested ground.

| # | Question | Source in question-mine | Answer guidance (40-90 words, direct answer first) |
|---|---|---|---|
| 1 | What's the difference between site preparation and excavation? | Q2 (pre_call/definitional — the page's core disambiguation job) | Lead with the plain distinction: site prep = getting a raw lot build-ready (clear, strip topsoil, grade, compact, stake); excavation = the specific digging for a foundation/utility/drainage feature that follows. |
| 2 | Should site prep happen before or after I hire a builder? | Q7 (sequencing) | Lead with: site work typically starts once a builder is hired and permitting/design is underway, ahead of vertical construction — recommend confirming the specific sequence with the builder/GC. |
| 3 | Do I need a survey before site prep can start? | Q8 (sequencing) | Lead with "yes, typically" — a topographic survey establishing grades/slopes/drainage/property lines is standard before a grading plan is finalized; recommend verifying the exact requirement with Lane County for the specific parcel. |
| 4 | Will site prep delay my building permit? | Q9 (sequencing/anxiety) | Lead with the real distinction from `07-oregon-authority.md` §1 (reused from home pack): foundation excavation under an active building permit is generally exempt from a separate grading permit, but driveway/landscape grading is not — recommend confirming specifics with Lane County LMD. |
| 5 | Do I need a permit for site prep in Lane County? | Q29 (oregon_specific/permitting) | Lead with "it depends on scope," then hedge the cubic-yard/slope figures per §3 above ("a Lane County permitting guide puts the threshold at roughly 50 cubic yards or a 2:1 slope — confirm with Lane County LMD"); do not state it as an exact confirmed county rule. |
| 6 | What happens if the crew hits rock or bad soil partway through the job? | Q10 (objection/anxiety) | Lead with an honest answer: standard excavation runs $5-$15/cu yd, rock can run $50-$200/cu yd; frame a soil check as protecting the customer's budget. |
| 7 | How much does site preparation typically cost in Lane County? | Q14 (cost) | Lead with the general/national range ($8,000-$50,000+ depending on complexity, or $0.11-$1.50+/sq ft), clearly labeled as general — no Lane-County-specific figure exists in the research (`07-oregon-authority.md` §9). |
| 8 | How long does site preparation take? | Q23 (process) | Lead with: a well-kept, already-open lot can be cleared in about a week; overall residential site prep commonly runs 1-2 months depending on vegetation, soil, and weather. |
| 9 | Does site prep need to happen before or after my septic system is evaluated? | Q11/Q35 (oregon_specific) | Lead with "before" — the test-pit evaluation must happen before the proposed drainfield area is graded, filled, or otherwise disturbed, since disturbing it can void the county's approval. |

No FAQ answer should fabricate a statistic not already present in the research pack, and no answer should state the Lane County grading/erosion permit cubic-yard or slope figures as an exact, confirmed county rule (Q5 above) — hedge or attribute per §3.

---

## 9. Internal Links

**IN (what will link to this page)** — per `01-research/topical-map-2026-09-03.md` §15:

| From | Anchor text example | Placement |
|---|---|---|
| Homepage (`/`) | "site preparation" | H2 #2 services list of `home-brief.md` |
| `/service-areas/eugene/`, `/service-areas/springfield/` (future city pages, per topical map §6.1's "out to Eugene/Springfield city pages") | "site preparation in Eugene" / "site preparation in Springfield" | Body, services-offered section of each city page |
| `/land-clearing/`, `/grading-leveling/`, `/foundation-excavation/`, `/drainage-excavation/` (future sibling pages) | "back to site preparation" | Each sibling page's "parent cluster" link, per topical map §15's hub-and-spoke rule |
| `/about/` | Breadcrumb | Breadcrumb |
| Global header/footer | "Services" nav item | Every page |

**OUT (this page → other pages)**, matching the topical map's §6.1 internal-linking plan ("↓ land clearing, grading, foundation excavation, drainage; ↑ homepage; → Eugene/Springfield city pages"):

| To | Anchor text | Placement |
|---|---|---|
| `/` (homepage) | "D&D Land Works" or "our full range of excavation services" | Breadcrumb + body-late (up-link to hub) |
| `/land-clearing/` | "land clearing" | H2 #2 process step + Related Services card |
| `/grading-leveling/` | "grading and leveling" | H2 #2 process step + Related Services card |
| `/foundation-excavation/` | "foundation excavation" | H2 #3 (sequencing, "then excavation follows") + Related Services card |
| `/drainage-excavation/` | "drainage excavation" | H2 #2 (rough-grade-for-drainage step) + Related Services card — **this link is currently missing from the live page; add it** |
| `/septic/` | "septic installation and repair" | H2 #9 (septic sequencing section) |
| `/service-areas/eugene/`, `/service-areas/springfield/` | "Eugene" / "Springfield" | H1/opening paragraph area, and H2 #5 (project types, "whether your lot is in Eugene, Springfield, or elsewhere in Lane County") |
| `/about/` | "David Deggelman" | Trust/CCB mention |
| `/contact/` | "get a free estimate" / "call 541-401-8726" | H2 #12 CTA + hero |

No "click here" / "learn more" anchors — every anchor is descriptive, per the parent methodology's rule (already followed on the current live page).

---

## 10. Schema Requirements

**This is the first service-page brief in this project, and the pattern below should be the template every future service-page brief (Land Clearing, Grading & Leveling, Septic, etc.) follows** — the homepage brief established the site's canonical `GeneralContractor` organization entity; this page nests a `Service` under it rather than redefining the organization.

- **Primary `@type`: `Service`** — CONFIRMED REAL schema.org type (`https://schema.org/Service`), correct for a single service page nested under an organization's offer catalog (verified in `00-research-pack.md` §9, reusing the homepage pack's confirmed schema.org research rather than re-checking from scratch).
- **`provider`**: must reference the same `GeneralContractor` entity defined in the homepage's Organization schema **by `@id`**, not redefine the organization inline. **Action item for the dev/build phase:** the homepage's `GeneralContractor` JSON-LD needs a stable `@id` (e.g. `https://ddlandworks.com/#organization`) so every service page's `Service.provider` can reference it via `{"@id": "https://ddlandworks.com/#organization"}` rather than duplicating `name`/`telephone`/`identifier` on every page — the homepage brief (§10) did not itself assign an `@id`, so this is the first page in the pipeline that needs one specified.
- **`Service` required fields:** `name` ("Site Preparation"), `provider` (the `@id` reference above), `areaServed` (Lane County + Eugene/Springfield at minimum, plain city-name strings — same simplification the homepage brief adopted, no Wikidata `@id` linking yet), `serviceType` ("Site Preparation"), `description` (can reuse a trimmed version of the AI citation block from §5).
- **`FAQPage`** — for the 9-question set in §8; FAQ schema answers must match the visible FAQ text exactly.
- **`BreadcrumbList`** — Home → Services → Site Preparation, matching the current live page's already-implemented `Breadcrumbs` component (note: if the URL moves from `/services/site-preparation/` to `/site-preparation/` per §1's flagged discrepancy, update the breadcrumb trail accordingly — a flat URL may argue for a two-level Home → Site Preparation trail instead of three).
- **`HowTo`** — optional, for the 7-step ordered process in H2 #2, if the build wants the step sequence independently citable (per `00-research-pack.md` §9's "optional" framing).
- **`Speakable`** — flag the answer-first passages in H2s #1, #3, #8, and #9 as speakable-eligible.
- **Do NOT implement `AggregateRating`/`Review` schema** — same rule as the homepage brief; D&D has zero reviews at launch.

---

## 11. Entity Profile

Pulled from this folder's `entity-inventory.csv`, cross-checked against `home/entity-inventory.csv` for reused canonical forms. Business/location/certification entities are **not re-derived** — see `home-brief.md` §11 for their original validation notes.

**Primary entity (salience 10, reused unchanged):**
- **D&D Land Works** (Organization → schema `GeneralContractor`) — `NOT_FOUND` externally. Must appear in the first sentence of body copy and in the `Service.provider` reference.

**Page-defining entity (salience 9-10, new for this page):**
- **Site Preparation** (Service) — the page's own subject; disambiguated explicitly from Excavation & Grading, its sibling entity.
- **Lane County Land Management Division** (salience 10) — `VALIDATED`, the primary permitting authority for this page specifically.
- **DEQ 1200-C Construction Stormwater Permit** (salience 10) — `VALIDATED` directly on oregon.gov, the single most load-bearing new fact for this page.

**Major supporting entities (process steps, salience 5-9):**
- Land Clearing (8), Rough Grading (7), Compaction/Subgrade Compaction (7), Erosion Control/Silt Fencing (7), Cut and Fill (6), Topsoil Stripping/Stockpiling (5, genuine specificity opportunity — no competitor names this), Access Road/Driveway Cut (5) — all `VALIDATED_LOCAL`.

**Permitting entities (salience 7-9, all new for this page):**
- Lane County Grading and Fill Permit (9) — `VALIDATED_LOCAL`, **hedge the cubic-yard/slope figures per §3**.
- Lane County Erosion Prevention Permit Type I/II (8) — `VALIDATED_LOCAL`, same hedge.
- Lane County Driveway/Access Permit (7) — `VALIDATED_LOCAL`, reused from home pack.
- Lane County On-Site Wastewater Program / Test Pit (8/6) — `VALIDATED`, confirmed on lanecounty.org, cite normally.

**Project-type entities (salience 5-8, all new, zero-competitor-coverage):**
- New Home Build (8), ADU (7, Wikidata Q1339291), Shop/Barn Pad (5), Subdivision Site Development (6), Commercial Site Development (7) — all `VALIDATED` or `VALIDATED_LOCAL`.

**Reused geo/business entities (unchanged from home pack):** David Deggelman, Oregon CCB #261742, Oregon DEQ, Willamette Valley, Eugene, Springfield — same validation status and do-not-fabricate rules as `home-brief.md` §11.

**Equipment entities:** generic categories only (excavator, skid steer, dozer, compactor) — do not name brands, same rule as the homepage.

**Co-occurrence requirements specific to this page** (per `03-entity-map.md` §6):
- "Site preparation"/"site prep" named as a service — 9/9 competitors — **mandatory, table stakes**
- Dedicated standalone site-prep content — 2/9 (All Dirt, BBC) — this page should exceed both
- Explicit site-prep-vs-excavation distinction — 0/9 — **the page's defining differentiator, mandatory**
- FAQ specific to site prep — 0/9 — **mandatory to include, zero risk of duplicating a competitor**
- Permit/code guidance near site-prep content — 0/9 — **mandatory to include (hedged where required)**

---

## 12. CTA Requirements

| Placement | Copy | Type/link |
|---|---|---|
| Above the fold (hero, already live) | "Call 541-401-8726" / "Free Estimate" | `tel:5414018726` and `/contact/` — **keep the existing Hero component copy unchanged** |
| Mid-page (after H2 #5, project types) | "Not sure which project type you're planning for? Get a free estimate and we'll walk the lot." | `/contact/` |
| After H2 #6 (cost section) | "Want a real number for your specific lot? Request a free estimate." | `/contact/` |
| H2 #12 (closing CTA, already live) | "Get Your Lot Scoped" + "Free estimate for site prep anywhere in Lane County." | `tel:5414018726`, `/contact/` — **reuse the existing `CTABlock` copy verbatim, it already fits** |

No fabricated urgency/scarcity language, consistent with the homepage brief's rule — nothing in the research pack supports it.

---

## 13. Images Required

**Current state: the live page has zero real project photos** — the `Hero` component uses text only (headline/subheadline), and no `<img>` beyond the site's shared components appears in `site-preparation.astro`. This is a genuine, unaddressed gap, not something to paper over with unbranded stock presented as D&D's own work (same rule as `home-brief.md` §13).

| # | Description | Alt text guidance | Type | Status |
|---|---|---|---|---|
| 1 | Hero image — a lot mid-clearing or mid-grading, ideally showing visible topsoil stripping or a compacted pad | "Site preparation and grading for a new home build in Lane County, Oregon" | Hero | **Gap — no real photo yet** |
| 2 | Before/after: raw/wooded lot → cleared and graded pad | "Before and after site preparation, Lane County, Oregon" | Evidence, near H2 #2 (process) | **Gap — flagged in `08-gap-analysis.md` as a genuine absence** |
| 3 | Compaction or staking in progress | "Subgrade compaction during site preparation, Lane County, Oregon" | Evidence, near H2 #2 | **Gap — needs a real jobsite photo** |
| 4 | A rural shop/barn pad or ADU pad specifically (ties to H2 #5's project-type section) | "Shop pad site preparation in Lane County, Oregon" | Evidence, near H2 #5 | **Gap — genuinely absent; even a generic equivalent from a different project type would be more honest than stock** |
| 5 | Simple permit/process diagram (illustration, not photography) for H2 #4's permit table | "Lane County site-prep permit overview" | Supporting graphic | Can launch as a simple illustrated table/diagram — lower priority to fix than the photo gaps above |

Flag to David: same as the homepage brief — launching with limited or no photography is an acceptable temporary measure, but should be tracked as a launch gap to close with real jobsite photography (ideally shots of an actual clearing/grading job) within the first few months.

---

## 14. Authority Signals to Cite

Pulled from `07-oregon-authority.md`, with the verification/hedging status made explicit per the task's central instruction on this point:

1. **Lane County Grading and Fill Permit — HEDGE REQUIRED.** "A Lane County permitting guide indicates a Grading and Fill Permit is generally required when a project moves more than 50 cubic yards of earth or creates a cut/fill slope steeper than 2:1 — confirm the exact threshold for your project directly with Lane County's Land Management Division." *(Source: Willamette Craftworks — Lane County Building Permits: 2026 Homeowner's Guide; sourced from a third-party guide, not fetched directly from Lane Code Chapter 16 or the LMD's own permit page — do not state as an exact, litigation-proof figure; verified 2026-09-08.)*
2. **Lane County Erosion Prevention Permit (Type I/II) — HEDGE REQUIRED, same sourcing caveat as #1.** "Depending on project size and slope, Lane County's Erosion Prevention Permit may apply — Type I generally covers single-family homes or minor grading under 1 acre, Type II covers larger or steeper sites — confirm which tier applies with Lane County LMD." *(Source: same as #1; verified 2026-09-08.)*
3. **Oregon DEQ 1200-C Construction Stormwater Permit — CONFIRMED, cite normally, no hedge needed.** "Projects disturbing 1 acre or more of land — or part of a larger common plan of development totaling 1 acre or more — require Oregon DEQ's 1200-C Construction Stormwater Permit, with a complete application due at least 30 days before soil disturbance begins." *(Source: Oregon DEQ — 1200-C Construction Stormwater Permit, oregon.gov/deq/housing/Pages/housing-1200c.aspx; verified directly against oregon.gov 2026-09-08 — this fact was fetched from the primary government source, not a secondary guide, and can be stated as confirmed.)*
4. **Lane County septic test-pit sequencing — CONFIRMED, cite normally.** "Once a drainfield location is proposed or approved for a septic system, Lane County requires that it not be cut, filled, paved, or otherwise disturbed — doing so can void the site's septic approval." *(Source: Lane County — Test Pit Information, lanecounty.org; verified directly on lanecounty.org 2026-09-08.)*
5. **Rock/clay cost-overrun data — present as general industry ranges, not Lane-County-specific.** "Standard excavation typically runs $5-$15 per cubic yard; hitting solid rock can push that to $50-$200 per cubic yard, and clay soil commonly adds 25-50% to excavation costs. A geotechnical soil study, usually $2,000-$5,000, typically prevents 20-50% of cost overruns on a difficult site." *(Source: aggregated national cost-guide data cross-checked against Straight Up Excavation & Drainage's Pacific Northwest-specific guide; verified 2026-09-08. No Lane-County-specific rock/clay surcharge figure exists — do not present these as D&D's own pricing.)*

**Explicit hedging instruction for the content writer:** signals #1 and #2 above must use hedged, attributed language ("a Lane County permitting guide indicates...", "generally...", "confirm with Lane County LMD") in both body copy and FAQ answer #5 — never state the 50-cubic-yard or 2:1-slope figures as Lane County's own directly-confirmed rule. Signals #3 and #4 were verified against the primary government source directly and may be stated as fact without hedging. Signal #5 should be labeled as general industry data, not a Lane County or D&D-specific number.

Density target: same as the homepage brief, roughly 1 statistic per 300-500 words of body copy, at least one external authority link per major H2 section (especially H2 #4 permits and H2 #6 cost).

---

## Open Items Requiring David's Input Before Content-Create

Carried forward from `00-research-pack.md`'s "Honest Limitations" section — do not invent values for these:

1. **Whether D&D itself coordinates with septic test-pit evaluators/DEQ**, or expects the customer to have that done independently — affects how confidently H2 #9's sequencing claim can describe D&D's own role versus stating the rule generically.
2. **Whether D&D offers or refers geotechnical/soil-testing services**, or only reacts to conditions found mid-job — affects how H2 #8's rock/soil section frames the geotechnical-study recommendation (as something D&D coordinates vs. something the customer arranges independently).
3. **Real pricing ranges specific to D&D's own jobs**, if David is willing to share even rough figures — would strengthen H2 #6 beyond the generic national/statewide ranges currently available (per `07-oregon-authority.md` §9, no Lane-County-specific figure exists in any source found).
4. **Typical response/scheduling turnaround for a site-prep estimate specifically** — not required for this brief but would strengthen the CTA sections if confirmed.
5. **The `/site-preparation/` vs. `/services/site-preparation/` URL discrepancy flagged in §1** — needs a decision before this page is rebuilt, since it affects the breadcrumb schema, the internal-linking anchors in §9, and whether a redirect is needed.

**The single most important item before this brief moves to `content-create`:** confirming item #1 above (D&D's actual role in septic test-pit coordination) — it determines whether H2 #9 can say "D&D coordinates grading around the evaluated drainfield location" (a stronger, more specific trust signal) or must say the more generic "confirm the drainfield location has been evaluated before grading begins" (still accurate, but a weaker differentiator versus the specific claim in `00-research-pack.md`'s AI citation block, which implies D&D's active coordination).
