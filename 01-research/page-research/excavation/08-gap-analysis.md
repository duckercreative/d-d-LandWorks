# Content Gap Analysis — Excavation & Grading (`/excavation/`)

Same scoring model as the homepage and site-preparation packs: **Coverage in competitors** (0 = none of the 10 address it / 10 = all 10 address it), **Difficulty for D&D to fill** (1 = easy / 5 = requires new asset or David's direct input), **Conversion Impact** (1 = SEO/trust only / 5 = directly drives calls). Ordered by `(10 - coverage) × conversion_impact / difficulty`.

The task brief names four gap dimensions as central to this specific page: **(1)** whether anyone explains cost by cubic yard vs. by project, **(2)** whether anyone explains the excavation-vs-grading distinction, **(3)** whether anyone mentions Oregon811/utility locates as a competence signal, and **(4)** how this page draws its own line against the future Grading & Leveling page. All four are scored explicitly below.

| # | Gap | Coverage (0-10) | Difficulty (1-5) | Conversion Impact (1-5) | Priority Score | What "filling" looks like |
|---|---|---:|---:|---:|---:|---|
| 1 | **Oregon811 / utility-locate competence-signal gap** | 0 | 1 | 5 | **50.0** | State plainly that D&D calls Oregon 811 (the Oregon Utility Notification Center) at least 2 business days before any dig, as Oregon law requires — a concrete, verifiable, zero-cost claim that directly answers the task brief's named utility-strike liability fear. Zero of 10 competitors mention this anywhere |
| 2 | **Excavation-vs-grading disambiguation gap** | 0 | 1 | 5 | **50.0** | A short, quotable passage distinguishing excavation (removing earth to create space — foundations, ponds, trenches) from grading (shaping the surface for drainage/elevation) — genuinely different from the site-preparation pack's "site prep vs. excavation" disambiguation, and the exact fence this page needs against the future Grading & Leveling page per the topical map's cannibalization note (§16) |
| 3 | **Rock/cost-overrun cost-by-cubic-yard honesty gap** | 0 | 1 | 4 | 40.0 | Publish the real cost jump (standard soil $2.50-$15/cu yd vs. rock $50-$200/cu yd, a 10-40x increase) as an explicit answer to "what does excavation cost," addressing the task brief's "how much will hitting rock cost me" cost-anxiety cluster directly. Zero of 10 competitors name rock as a cost variable |
| 4 | **Cost-structure explanation gap (per cubic yard vs. per hour vs. per project)** | 0 | 1 | 4 | 40.0 | Explain plainly that excavation pricing comes in three real forms — hourly ($100-$300/hr with equipment+operator), per-cubic-yard ($2.50-$15 standard), or flat per-project — and that soil, access, depth, and season (not contractor markup) drive the variance. Zero of 10 competitors explain pricing structure at all |
| 5 | **Pond excavation project-type gap** | 2 (McKenzie, BBC name it; neither explains it) | 2 | 4 | 16.0 | Name pond excavation as a real service with real cost context ($5,000-$25,000/acre for farm ponds; $4,000-$8,000 for a small decorative pond) and Oregon's OWRD/DSL permitting framework — a genuinely unclaimed project type named directly in the topical map §6.2 and the task brief |
| 6 | **Residential-vs-commercial excavation explanation gap** | 0 (implied generically by several; explained by none) | 2 | 4 | 20.0 | Directly named in the topical map §6.2 FAQ list — explain the real differences (equipment scale, crew size, timeline, regulatory complexity) rather than just claiming "we do both" |
| 7 | **Equipment-specificity gap** | 1/10 (Tectonic names mini excavators + conveyor belt) | 2 | 3 | 13.5 | Explain, in generic-category terms (not fabricated brand names), what equipment does what — an excavator for digging/rock work, a dozer for pushing/shaping larger cuts and fills, compaction equipment behind the fill — directly answers the topical map §6.2 FAQ "what equipment is used" |
| 8 | **Process-specificity gap (the All Dirt-validated list)** | 1/10 (All Dirt only lists cut/fill, backfill/compaction, rock removal, erosion control, and site access roads as explicit items) | 2 | 3 | 13.5 | Present the same topical-map-validated process list as explicit, explained line items rather than a vague "we handle excavation and grading" sentence — the current live page (`site/src/pages/services/excavation.astro`) already does this well and should be preserved/strengthened, not diluted |
| 9 | **Utility-run/driveway/foundation project-type depth gap** | 5-6/10 name these generically | 2 | 3 | 8.0-9.0 | Add one real scope-difference sentence per project type (foundation dig, driveway/access cut, utility run, building pad) rather than a bare list — ties to the down-link plan toward the future dedicated pages for each |
| 10 | **DIY-vs-hire threshold gap** | 0 | 2 | 3 | 15.0 | Directly answer "can I rent an excavator and do this myself" honestly — rental can work for small, shallow, obstacle-free digging, but foundation/utility/slope work near property lines carries real liability and skill requirements that favor hiring. Task-brief-named DIY-vs-hire threshold; zero competitors address it |
| 11 | **FAQ-content gap** | 0 visible in fetched content (All Dirt links to an FAQ section, contents not retrievable) | 2 | 3 | 13.5 | A real, sourced FAQ block (see shortlist in `02-question-mine.md`) with FAQPage schema |
| 12 | **Small-job/residential-attention reassurance gap** | 0 for excavation specifically | 1 | 3 | 30.0 | State plainly that a small driveway fix or single-pad job is scoped and treated the same as larger commercial earthmoving — reused theme from the homepage pack, cheap to add here too |

---

## Top 5 gaps to prioritize (achievable within a first content pass)

1. **Oregon811/utility-locate competence signal** (score 50.0) and **excavation-vs-grading disambiguation** (score 50.0, tied) — both zero-cost, directly serve this page's stated role as the highest-volume head-term page, and are the task brief's own named central content-gap opportunities
2. **Rock/cost-overrun honesty** (40.0) and **cost-structure explanation** (40.0, tied) — both zero-cost, directly answer the task brief's "how much will hitting rock cost me" cost-anxiety framing
3. **Small-job reassurance** (30.0) — cheap, reused pattern from the homepage pack, genuinely unaddressed for excavation specifically
4. **Residential-vs-commercial explanation** (20.0) — directly named in the topical map's own FAQ list for this page
5. **Pond excavation project-type ownership** (16.0) and **DIY-vs-hire threshold** (15.0) — both genuinely unclaimed, Oregon-specific-or-task-brief-named angles

## The single biggest content-gap opportunity (headline finding)

**Zero of the 10 competitor sites examined for this page — including All Dirt, the strongest of the set — mention Oregon811, utility locates, or call-before-you-dig anywhere in their excavation content.** This is a more concrete, more easily verified, and more zero-cost trust signal than almost any other finding across all three research packs to date: it is a specific, legally-required, checkable process step (call 811, wait 2 business days, get utilities marked) that directly answers the task brief's named utility-strike liability fear, and it costs nothing to state honestly if D&D's actual field process already includes it (a reasonable assumption for a licensed, bonded contractor, but confirm the exact language with David before publishing it as a specific operational claim — see "Gaps that require David's input" below).

## How this page draws its line against the future Grading & Leveling page (per the topical map's cannibalization note, §16)

The topical map is explicit that Excavation vs. Grading & Leveling should remain **separate pages, tightly cross-linked**, differentiated by H1 framing ("excavation & earthmoving" vs. "land grading & leveling"), watched for overlap, and merged only if both stay thin. This pack's competitor research (`04-competitor-matrix.md` Matrix C) found a workable real-world pattern already in use by All Dirt and Braun: **grading-to-elevation as a step inside an excavation project stays on THIS page** (cut/fill, backfill/compaction, rough grading to design elevation — i.e., grading that happens *because* something is being dug/built), while **standalone re-sloping, yard leveling, and drainage-grading for an *existing* surface problem** (a yard that floods, an uneven lawn, a driveway that needs re-sloping without new digging) is reserved for the future Grading & Leveling page. This is a real, defensible distinction — not an arbitrary keyword split — and should be stated explicitly in this page's "Often Paired With" section (already present on the current live page) rather than left implicit.

## Gaps that require David's input before they can be filled (do not fabricate)

- Whether D&D's actual field process includes calling Oregon811 before every dig (near-certain for a licensed, bonded contractor, but the specific operational claim should be confirmed with David rather than assumed, per this project's no-fabrication rule)
- Whether D&D has performed pond excavation before, or would need to scope it as a new-but-capable service offering (affects how confidently the pond project-type content can be framed)
- Real pricing ranges specific to D&D's own excavation jobs, if David is willing to share even rough figures (would strengthen Gaps #3/#4 beyond the generic national/Oregon-labor-cost ranges currently available)
- Whether D&D's equipment fleet matches the generic "excavator, dozer, compactor" framing already on the current live page, or whether specific brands/sizes should eventually be named (Gap #7)

## What the current live page (`site/src/pages/services/excavation.astro`) already gets right

- Already frames general excavation clearly as earthmoving (cut/fill, backfill/compaction, rock and debris removal, access roads, rough grading for erosion control, ponds/pads/lot reshaping) — this list closely tracks the All Dirt-validated process items from the topical map §6.2 and should be preserved
- Already names the equipment categories generically and accurately (excavator, dozer, compaction equipment) without fabricating brand names — consistent with `03-entity-map.md` §3's recommendation
- Already has a "Residential and Commercial" section stating the same process applies to both audiences, though it does not yet explain the real scale/equipment/timeline differences named in Gap #6 above
- Already has an "Often Paired With" section linking to Grading & Leveling and Foundation Excavation — the right structural instinct, but does not yet explain *why* those are separate pages (the disambiguation this file's Gap #2 and the "how this page draws its line" section above recommend adding)
- Does **not** currently mention Oregon811, permits, FAQ content, pond excavation, DIY-vs-hire guidance, cost-structure explanation, or the excavation-vs-grading distinction as a named contrast — these are exactly the gaps this file identifies as highest-priority to add

## Non-page gaps (foundational, inherited from the homepage and site-preparation packs)

No live indexed site, no GBP, no schema markup, no review pipeline — same foundational dependencies already documented in the homepage pack's `08-gap-analysis.md`, not specific to this page and not re-scored here.
