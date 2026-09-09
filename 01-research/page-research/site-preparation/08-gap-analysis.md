# Content Gap Analysis — Site Preparation (`/site-preparation/`)

Same scoring model as the homepage pack: **Coverage in competitors** (0 = none of the 9 address it / 10 = all 9 address it), **Difficulty for D&D to fill** (1 = easy / 5 = requires new asset or David's direct input), **Conversion Impact** (1 = SEO/trust only / 5 = directly drives calls). Ordered by `(10 - coverage) × conversion_impact / difficulty`.

The task brief flags one gap dimension as the single most important for this specific page: **this page must function as the umbrella hub for the excavation service group, and most homeowners don't know the difference between "site prep" and "excavation" as separate services.** That confusion is scored as Gap #1 below and treated as the headline finding of this file.

| # | Gap | Coverage (0-10) | Difficulty (1-5) | Conversion Impact (1-5) | Priority Score | What "filling" looks like |
|---|---|---:|---:|---:|---:|---|
| 1 | **Site-prep-vs-excavation disambiguation gap** | 0 | 1 | 5 | **50.0** | A short, clear, quotable passage near the top of the page explaining that site prep = getting a raw lot build-ready (clearing, grading, compaction, staking) and excavation = the specific digging for a foundation/utility/drainage feature that follows — directly serves this page's umbrella-hub role and is currently claimed by zero of 9 competitors, several of whom (Danco, Braun, Strasheim) list the two terms side-by-side without distinguishing them |
| 2 | **Sequencing/new-construction-anxiety gap** | 0 | 2 | 5 | 25.0 | Answer "does site prep happen before or after I hire a builder," "will this delay my permit," and "do I need a survey first" directly — this is the task brief's named highest-value intent cluster and zero competitors address any of it |
| 3 | **Permit-specificity gap (grading/erosion/DEQ 1200-C)** | 0 | 2 | 4 | 20.0 | Name Lane County's Grading and Fill Permit, the Type I/II Erosion Prevention Permit, and Oregon DEQ's 1200-C construction stormwater permit by name and threshold — zero of 9 competitors mention any of these anywhere near their site-prep content |
| 4 | **Septic/drainfield sequencing gap** | 0 | 1 | 4 | 40.0 | State plainly that a septic test-pit evaluation must happen before the drainfield area is graded/filled/disturbed, and that D&D coordinates around this — a real regulatory fact (`07-oregon-authority.md` §5), zero-cost to add, and unclaimed by any competitor |
| 5 | **Rock/clay cost-overrun honesty gap** | 0 | 1 | 4 | 40.0 | Explain plainly that Willamette Valley clay and occasional rock can affect cost/timeline, and that a soil check protects the customer's budget — reframes a possible upsell as trust-building transparency; zero competitors mention this possibility |
| 6 | **Project-type specificity gap (ADU, shop/barn, subdivision, commercial)** | 0 for ADU/shop-barn; ~2-3/9 for subdivision/commercial generically | 2 | 4 | 20.0-40.0 (highest for ADU) | Name each project type from the topical map explicitly (new home build, ADU, shop/barn pad, subdivision, commercial site development) with a sentence of real scope difference for each — zero competitors name ADU or shop/barn as project types at all |
| 7 | **Ordered-process gap** | ~1/9 (All Dirt lists items, not as a sequence) | 2 | 3 | 27.0 | Present the real process as a numbered sequence (survey/plan → clear → strip topsoil → cut/fill to grade → compact → stake → rough-grade for drainage) rather than a bulleted feature list — the current live page (`site/src/pages/services/site-preparation.astro`) already has most of these steps as a bulleted list; converting to a numbered, explained sequence is a low-effort upgrade |
| 8 | **FAQ-content gap** | 0 | 2 | 3 | 15.0 | A real, sourced FAQ block (see shortlist in `02-question-mine.md`) with FAQPage schema — 0/9 competitors have one on a site-prep page |
| 9 | **Real pricing-range gap** | 0 | 2 | 5 | 25.0 | Publish honest ranges sourced from this pack (e.g., site prep $8,000-$50,000+ depending on complexity; cut/fill roughly $2.25-$3.00/cubic yard; rock excavation $50-$200/cubic yard vs. $5-$15 standard) clearly labeled as general, not Lane-County-specific or a quote |
| 10 | **Timeline-specificity gap** | ~1/9 (implied generically, not stated on any site-prep page) | 1 | 4 | 36.0 | Cite real ranges: a well-kept lot can be cleared in about a week; overall residential site prep commonly runs 1-2 months; commercial/subdivision site work commonly runs 1-3+ weeks |
| 11 | **Soil-testing/survey-as-a-step gap** | 1/9 (BBC Excavation mentions soil testing/geotech) | 2 | 3 | 13.5 | Name survey and soil-check as a real first step in the process, tying to Gap #5's rock/clay honesty and Gap #2's sequencing anxiety |
| 12 | **Umbrella-hub internal linking gap** | Not applicable to competitors (structural, not content) | 1 | 3 | n/a — structural | Ensure the page visibly down-links to Land Clearing, Grading & Leveling, Foundation Excavation, and Drainage Excavation (per topical map §6.1), and up-links to the homepage and out to Eugene/Springfield city pages — none of these sibling pages exist yet, so this is a forward-looking structural note, not a content-gap score |

---

## Top 5 gaps to prioritize (achievable within a first content pass)

1. **Site-prep-vs-excavation disambiguation** (score 50.0) — the highest-scoring gap in this entire pack; costs nothing, directly serves the page's stated umbrella-hub role, and is the task brief's named central content-gap opportunity
2. **Septic/drainfield sequencing** (score 40.0) and **rock/clay cost-overrun honesty** (score 40.0, tied) — both zero-cost, zero-competitor-coverage, genuinely Oregon/Lane-County-relevant
3. **Timeline specificity** (score 36.0) — cite the real ranges already sourced in this pack
4. **Ordered-process presentation** (score 27.0) — upgrade the current live page's bulleted list into a numbered, explained sequence
5. **Real pricing ranges** (score 25.0) and **sequencing/new-construction-anxiety content** (score 25.0, tied) — both directly answer the task brief's flagged anxiety cluster ("will this delay my permit," "what if they find bad soil")

## Gaps that require David's input before they can be filled (do not fabricate)

- Whether D&D coordinates directly with septic test-pit evaluators/DEQ or expects the customer to have that done first (affects how confidently the page can state the sequencing claim in `07-oregon-authority.md` §5)
- Whether D&D offers or coordinates any soil-testing/geotechnical referral, or only reacts to conditions found during the job (affects how Gap #5 and Gap #11 are worded)
- Real pricing ranges specific to D&D's own jobs, if David is willing to share even rough figures (would strengthen Gap #9 beyond the generic national/statewide ranges currently available)
- Typical response/scheduling turnaround for a site-prep estimate specifically

## What the current live page (`site/src/pages/services/site-preparation.astro`) already gets right

- Already frames site prep as "the first thing that happens on almost every job," which is directionally aligned with the umbrella-hub framing — but does not yet explicitly disambiguate site prep from excavation as a distinct service, which is this file's #1 gap
- Already lists real process steps (clearing, stripping topsoil, cut/fill, compaction, staking, rough grading for drainage) as a bulleted list — accurate content, just not yet sequenced, explained, or paired with the permit/timeline/cost context this research pack adds
- Already down-links to Land Clearing, Grading & Leveling, and Foundation Excavation in the "Related Services" section, matching the topical map's internal-linking plan — Drainage Excavation is not yet linked and should be added once that page exists
- Does **not** currently mention permits, timelines, cost ranges, FAQ content, project types (ADU/shop-barn/subdivision/commercial), or the sequencing-anxiety cluster — these are exactly the gaps this file identifies as highest-priority to add

## Non-page gaps (foundational, inherited from the homepage pack)

No live indexed site, no GBP, no schema markup, no review pipeline — same foundational dependencies documented in the homepage pack's `08-gap-analysis.md`, not specific to this page and not re-scored here.
