# Research Pack — D&D Land Works Excavation & Grading (`/excavation/`)

**Prepared:** 2026-09-08 · **Prepared by:** Ducker Creative (deep-research methodology, adapted from HVAC → excavation/site-prep per CLAUDE.md; third page through this pipeline after the homepage and Site Preparation)
**Page targeted:** Excavation & Grading (`/excavation/`) — per the topical map (`../../topical-map-2026-09-03.md` §6.2), the **highest-volume head term in the entire topical hierarchy**, commercial intent, sitting below the homepage, parallel to Site Preparation (both roll up to the homepage), and tightly related to the not-yet-researched Grading & Leveling page.
**Built on, not duplicating:** the homepage pack at `../home/` and the site-preparation pack at `../site-preparation/`. All canonical business/location/certification entities (D&D Land Works, David Deggelman, Oregon CCB #261742, Oregon DEQ, Lane County, Eugene, Springfield, Willamette Valley, the `GeneralContractor`/`Service` schema decisions) are reused verbatim from those packs' entity inventories, not re-derived. The 8 competitors both prior packs deep-dived (Danco, All Dirt, Heavy D, Emerald, McKenzie, Braun, Strasheim, A&D) were re-checked specifically for excavation/grading content rather than rediscovered from scratch, per the task brief; BBC Excavation Inc (already added in the site-preparation pack) and **Tectonic Construction** (new — surfaced organically ranking directly for "excavation contractor eugene oregon") are added as supplemental reference points, for 10 total.
**Status of underlying business:** Same zero-baseline greenfield status as both prior packs — no live site, no GBP, no digital footprint. This pack's recommendations are build-from-zero targets for this specific page.
**Sibling-page boundary (read this before writing content):** This page is the natural complement to Site Preparation (that page already owns the "site prep vs. excavation" disambiguation — see `../site-preparation/08-gap-analysis.md` Gap #1 — and this page does not repeat it) and is tightly related to the future Grading & Leveling page. Per the topical map's cannibalization analysis (§16), Excavation and Grading & Leveling stay as **separate, cross-linked pages** rather than merging — see §5 and §9 below for exactly where the line falls.

This file is the master synthesis. The future content brief should read only this file; the other 8 files in this folder are the supporting evidence and can be drilled into on demand.

---

## 1. Top 5 Keyword Targets

| # | Keyword | Intent | Why |
|---|---|---|---|
| 1 | **excavation contractor eugene or** / **excavation contractor eugene oregon** | Commercial, decision-stage | Primary page target; the highest-volume head term in the entire topical map (§6.2), with the widest and most fragmented visible competitor field of any page researched so far (10+ distinct businesses surface, vs. a tighter set for site prep) |
| 2 | **excavation contractor lane county or** | Commercial, decision-stage | County-wide framing, matching this page's scope |
| 3 | **excavation and grading eugene oregon** | Commercial, decision-stage | Exact combined-term phrase several competitors (Danco) already use as their own heading — captures the blurred-terminology search behavior confirmed in `04-competitor-matrix.md` |
| 4 | **pond excavation lane county** | Commercial, consideration-stage | Task-brief seed term; only 2 of 10 competitors (McKenzie, BBC) even name pond work, and neither explains cost or Oregon permitting — a genuinely open project-type keyword |
| 5 | **cut and fill grading oregon** / **rock removal excavation eugene** | Informational/commercial, consideration-stage | Task-brief seed terms; both process entities are validated by All Dirt's own "What's Included" list (the topical map's own `[COMPETITOR]`-flagged inclusions) but explained by zero competitors |

Full 133-row universe in `01-keyword-universe.csv`.

---

## 2. Top 10 Questions to Answer

Full list of 49 in `02-question-mine.md`. The 10 most load-bearing for this page specifically:

1. What's the difference between excavation and grading? *(this page's own disambiguation job — distinct from the site-prep pack's disambiguation)*
2. How much does excavation cost, and why do quotes vary so much?
3. What happens if the crew hits rock during excavation — what does that do to cost?
4. What's the difference between residential and commercial excavation? *(directly named in topical map §6.2)*
5. What equipment is used for excavation work? *(directly named in topical map §6.2)*
6. Do I need to call 811 before digging in Oregon, and what is Oregon811? *(zero competitors address this anywhere)*
7. Do I need a permit to excavate in Lane County?
8. How long does excavation take once permits/site prep are done?
9. Can an excavation contractor dig a pond, cut a driveway, or trench for a utility line — or just foundations?
10. Do I need an excavation contractor, or can I rent an excavator and do it myself? *(DIY-vs-hire threshold named in the task brief)*

---

## 3. Top 10 Entities to Integrate

Full inventory in `03-entity-map.md` / `entity-inventory.csv`. Priority placement:

| Entity | Where to place |
|---|---|
| D&D Land Works, David Deggelman, Oregon CCB #261742 (reused canonical forms) | H1/first paragraph, schema, trust section — same as homepage/site-prep |
| Oregon Utility Notification Center / Oregon811 | Dedicated "Do you call before you dig?" section — genuinely novel, zero-competitor-claimed |
| OSHA 1926 Subpart P (reused from homepage pack) | Trench/utility-run content, near safety/trust framing |
| Lane County Grading and Fill Permit (reused from site-prep pack) | Brief permit-awareness note, cross-linked to the site-prep page's fuller permit section rather than repeated in full |
| Cut and Fill, Backfill and Compaction, Rock Removal, Site Access Roads, Erosion Control (process entities) | The "What Excavation Covers" process section — the All Dirt-validated list from topical map §6.2 |
| Excavator, Dozer/Bulldozer, Skid Steer, Dump Truck, Compactor (equipment categories) | Equipment section — generic categories only, no fabricated brand names |
| Pond, Foundation Dig, Building Pad, Driveway, Utility Run (project types) | A "What Kind of Project Is This For" section — pond is the standout unclaimed opportunity |
| Oregon Water Resources Department / Department of State Lands (new, pond-specific) | Pond project-type sub-section only — not the main permit section |
| Grading & Leveling (sibling, not this page) | "Often Paired With" section, explicitly explaining the boundary rather than just linking |
| `Service` schema type (nested under D&D's `GeneralContractor` entity) | Primary `@type` for this page — reused decision from site-prep pack |

---

## 4. Top 5 Content Gaps to Fill

Full scoring in `08-gap-analysis.md`. Highest-leverage gaps:

1. **Oregon811/utility-locate competence signal** (score 50.0, tied #1) — zero-cost, zero-competitor-claimed, directly answers the task brief's utility-strike liability fear
2. **Excavation-vs-grading disambiguation** (score 50.0, tied #1) — zero-cost, the task brief's own named central gap for this specific page
3. **Rock/cost-overrun honesty** and **cost-structure explanation** (both 40.0, tied) — zero-cost, direct answers to "how much will hitting rock cost me"
4. **Small-job/residential-attention reassurance** (30.0) — cheap, reused pattern from the homepage pack, unaddressed for excavation specifically
5. **Residential-vs-commercial explanation** (20.0) — directly named in the topical map's own FAQ list for this page

---

## 5. Biggest Structural Opportunity (confirmed, not assumed)

**Of the 10 competitor pages examined specifically for excavation content (the original 8, plus BBC Excavation and the newly-surfaced Tectonic Construction), only All Dirt names the full topical-map-validated process list — foundation excavation, utility trenching, precision grading, backfill and compaction, drainage, erosion control, rock removal, site access roads — as explicit line items. Every other competitor, including several with dedicated excavation pages, describes the service in one or two vague sentences.** And critically: **zero of the 10 mention Oregon811, utility locates, or call-before-you-dig anywhere**, and **only 2 of 10 (McKenzie, BBC) even name pond excavation**, with neither explaining cost or permitting. This confirms and sharpens the homepage and site-preparation packs' shared finding — the gap isn't just city pages or FAQ content generally, it's genuine process- and project-type-specificity, and this page has the widest, most fragmented competitor field of any researched so far, meaning no single competitor currently "owns" the ground D&D can take. See `04-competitor-matrix.md` for the full detail.

---

## 6. Recommended H1 / H2 Heading Map

**H1:** Excavation & Earthmoving Contractor in Lane County, Oregon
*(deliberately not "Excavation & Grading" as a single blurred term — see §9 below for why, and note the current live page's H1 "Excavation & Grading" should be revisited against this framing during the content brief)*

**H2s (in order):**

1. What Does Excavation & Earthmoving Cover? *(intro/positioning — the All Dirt-validated process list: cut/fill, backfill/compaction, rock removal, site access roads, erosion control)*
2. What's the Difference Between Excavation and Grading? *(disambiguation — this page's core job, distinct from the site-prep pack's own disambiguation)*
3. What Kind of Project Is This For? *(project types — foundation digs, ponds, pads, driveways, utility runs, per topical map §6.2)*
4. What Equipment Shows Up on the Job? *(directly named in topical map §6.2 FAQ list — excavator, dozer, compaction equipment, generic categories only)*
5. Residential vs. Commercial Excavation — What's Actually Different? *(directly named in topical map §6.2 FAQ list)*
6. How Much Does Excavation Cost? *(cost — structure explanation + real ranges, including the rock-cost-overrun honesty content)*
7. Does D&D Call Before Digging? *(Oregon811 — genuinely novel, zero-competitor-claimed trust content)*
8. Do You Need a Permit to Excavate in Lane County? *(brief permit-awareness note, cross-linked to the fuller site-prep page section rather than duplicated)*
9. Can I Rent an Excavator and Do This Myself? *(DIY-vs-hire threshold — task-brief-named objection)*
10. How Long Does Excavation Take? *(process/timeline)*
11. Frequently Asked Questions *(FAQ block — see §8)*
12. Get Your Dirt Work Scoped *(contact/CTA — matches the current live page's existing CTA block)*

Every H2 is phrased as a real, natural question or task under 10 words, matching the prior two packs' format and this page's own question-mine findings.

---

## 7. Content Format Plan (per H2)

| H2 | Format | Why | Schema unlock |
|---|---|---|---|
| 1. What excavation covers | Bulleted list (the All Dirt-validated 6-8 item process list) | Parallel items, matches the current live page's existing pattern | `ItemList` |
| 2. Excavation vs. grading | Answer-first, 50-70 words | The single most citable passage on the page — direct definitional contrast, distinct from the sibling page's own disambiguation | `Speakable` |
| 3. Project types | Bulleted list (5 items: foundation dig, pond, pad, driveway, utility run) each with one scope-difference sentence | Parallel items; pond is the standout unclaimed sub-topic | `ItemList` |
| 4. Equipment | Short answer-first (60-80 words) | Directly answers a topical-map-named FAQ | `Speakable` |
| 5. Residential vs. commercial | Comparison table — columns: Residential / Commercial (equipment, crew size, timeline, complexity) | Multi-attribute comparison data — genuinely differentiating table format, directly answers a topical-map-named FAQ | none required |
| 6. Cost | Comparison table — columns: Pricing Model / Typical Range / What Drives It (hourly, per-cubic-yard, rock premium) | Multi-attribute cost data, addresses both the cost-structure gap and the rock-overrun honesty gap in one format | none required |
| 7. Oregon811 | Answer-first, 60-80 words + direct link to digsafelyoregon.com | Single, high-value, novel trust claim | `Speakable` |
| 8. Permits | Short answer-first + cross-link to the site-prep page's fuller permit section | Avoids duplicating content already owned by the sibling page | none required |
| 9. DIY vs. hire | Answer-first + honest explanation, 80-100 words | Objection-handling passage, task-brief-named | `Speakable` |
| 10. Timeline | Short comparison note (residential days vs. commercial weeks) | Two distinct figures, not a full table | none required |
| 11. FAQ | FAQPage-formatted Q&A, 9 questions | Standard | `FAQPage` |
| 12. CTA | Short answer-first + CTA block | Conversion-focused | none required |

At least one comparison table (#5 and #6), two bulleted lists (#1, #3), and format diversity across answer-first/table/list formats are included, per the parent methodology's format-diversity requirement.

---

## 8. FAQ Shortlist (9 questions for FAQPage schema)

Validated against `02-question-mine.md` and the confirmed 0/10 competitor-coverage findings in `04-competitor-matrix.md`:

1. What's the difference between excavation and grading?
2. How much does excavation cost?
3. What happens if the crew hits rock during excavation?
4. What's the difference between residential and commercial excavation?
5. What equipment is used for excavation work?
6. Do I need to call 811 before digging in Oregon? *(genuinely unique — zero competitors mention this)*
7. Do I need a permit to excavate in Lane County?
8. How long does excavation take?
9. Can you excavate for a pond, driveway, or utility line, or just foundations?

---

## 9. Required Schema

Verification note: this pack reuses the homepage pack's confirmed schema.org research (`GeneralContractor` is real and correct; `ExcavationContractor` does not exist) and the site-preparation pack's `Service` type confirmation rather than re-verifying — see `../home/00-research-pack.md` §9 and `../site-preparation/00-research-pack.md` §9.

- **`Service`** (primary `@type`) with `name: "Excavation and Grading"`, `provider` → D&D Land Works `GeneralContractor` entity, `areaServed` (Lane County + Eugene/Springfield at minimum), `serviceType`
- `FAQPage` — for the 9-question shortlist above
- `BreadcrumbList` — Home → Services → Excavation & Grading (already implemented via the current live page's `Breadcrumbs` component)
- `Speakable` — on the disambiguation, Oregon811, equipment, and DIY-vs-hire answer-first passages
- Do **not** implement `AggregateRating`/`Review` until real reviews exist — same rule as both prior packs

---

## 10. Required Authority Signals

From `07-oregon-authority.md`, each with source + verification date:

1. **Oregon811 / Oregon Utility Notification Center** — CONFIRMED directly on digsafelyoregon.com and oregon.gov/puc: free locate requests, 2-business-day advance notice required, penalty amounts not published/found
2. **OSHA 29 CFR 1926 Subpart P** (trench safety) — reused verbatim from the homepage pack, cite by name near utility-run/foundation-dig content
3. **Lane County Grading and Fill Permit** — reused verbatim from the site-preparation pack (>50 cu yd or slope steeper than 2:1, third-party-sourced, flag for direct LMD confirmation) — brief mention only, cross-link to the fuller section on the sibling page
4. **Oregon Water Resources Department / Department of State Lands** (pond permitting) — new for this page; 9.2 acre-foot threshold, wetlands/salmon-bearing-waterway trigger; single-source caveat, flag for direct OWRD/DSL confirmation
5. **Oregon excavation labor-cost data** (BLS OEWS 2025 via CostFlowAI) — Oregon construction labor runs ~20% above the national average; use to explain why Lane County pricing likely sits toward the higher end of national ranges, not to state a fabricated Oregon-specific dollar figure

Density target: same as both prior packs, roughly 1 statistic per 300-500 words, at least one external authority link per major section (especially the Oregon811 and cost sections).

---

## 11. AI-Citation-Ready Summary Block (130-160 words)

Drafted in full in `06-ai-citation-audit.md` §4; reproduced here for brief convenience:

> Excavation and grading is general earthmoving work: cutting material from high points, filling low points, and bringing a site to the elevation a project needs — whether that's a foundation, a pond, a driveway, a building pad, or a utility line trench. D&D Land Works provides excavation and grading for residential and commercial projects throughout Eugene, Springfield, and Lane County, Oregon, including foundation digs, pond excavation, driveway and access-road cutting, and utility-run trenching, using an excavator, dozer, and compaction equipment matched to the site. D&D is licensed and bonded under Oregon Construction Contractors Board license CCB #261742, calls Oregon 811 (the Oregon Utility Notification Center) at least two business days before digging on every job as required by Oregon law, and follows OSHA's excavation and trenching safety standard (29 CFR 1926 Subpart P) on jobs involving deeper cuts or trenches. Free estimates are available for both residential and commercial excavation work.

Place in the first 30% of the page's body content, immediately after the hero.

---

## 12. Trust-Killer Rebuttals

From `05-intent-triangulation.md` Table 3:

| Trust killer | Rebuttal to build into the page |
|---|---|
| No competitor mentions Oregon811 or utility locates | State plainly that D&D calls Oregon 811 at least 2 business days before any dig, as Oregon law requires |
| Rock/clay cost overruns discovered mid-job with no warning | Name the real cost jump ($2.50-$15/cu yd standard vs. $50-$200/cu yd rock) honestly upfront, framed as budget protection |
| "Excavation and grading" used as one blurry catch-all term | Draw the real, useful line between this page's earthmoving/digging scope and the future Grading & Leveling page's surface/re-sloping scope |
| No pricing signal anywhere for excavation specifically | Publish real ranges sourced from this pack, clearly labeled as general, not Lane-County-exact or a quote |
| Fear of hiring the wrong scope (excavation vs. grading vs. site prep) | State plainly that D&D scopes the job by walking the site, not by which page the customer landed on |
| Utility-strike liability fear with no visible competitor mitigation | Explain the Oregon811 process as the concrete step D&D takes on every job |
| Small residential jobs feeling like an afterthought next to commercial-scale language | State plainly that a small driveway fix and a larger commercial pad are scoped and quoted the same way |

---

## 13. E-E-A-T Signal Plan

- **Experience:** Real project photos tied to specific excavation project types (a pond dig, a driveway cut, a foundation dig) as they become available — do not fabricate a portfolio, consistent with both prior packs.
- **Expertise:** The Oregon811 process, the OSHA trench-safety citation, and the rock/cost-overrun honesty content demonstrate genuine working knowledge that zero of the 10 competitors currently show together.
- **Authority:** Direct links to digsafelyoregon.com (Oregon811) and osha.gov (Subpart P) — free authority-borrowing, unclaimed by any competitor in this niche.
- **Trust:** Honest rock/cost-overrun framing; explicit residential-vs-commercial explanation rather than a vague "we do both" claim; real cost ranges, clearly labeled as general; no fabricated reviews, equipment brands, or Lane-County-exact pricing.

---

## 14. Freshness Plan

- Re-verify the Oregon811 locate-ticket "ticket life" figure (recently changed from 45 to 30 days via a 2026 OAR amendment) and the 2-business-day advance-notice requirement directly against digsafelyoregon.com/oregon.gov/puc before publish if this brief is built more than 90 days after 2026-09-08.
- Re-verify the pond-permitting OWRD/DSL thresholds directly against oregon.gov/owrd and oregon.gov/dsl (this pass relied on a single secondary source) before publishing them as exact figures.
- Re-verify the BLS OEWS Oregon labor-cost data at its normal annual update cadence.
- Re-run this entire research pack if the content brief/build happens more than 90 days after 2026-09-08, consistent with both prior packs' freshness rule.

---

## Flags (per parent methodology, adapted)

- **Flag A — Listicle-dominated SERP: CONFIRMED, and the competitor field is wider than for either prior page.** For the bare "excavation contractor eugene oregon" head term, directory/aggregator sites (DownToBid, BBB, Angi, Yelp, YellowPages, HomeAdvisor) still occupy a large share of page-1 results, but the visible competitor set is also larger and more fragmented (10+ distinct local businesses) than either the homepage's or site-preparation's own target queries surfaced — see `06-ai-citation-audit.md` §1.
- **Flag B — Anti-doorway gate:** Not directly applicable to this service page; future city×excavation pages must satisfy the topical map's 6-point anti-doorway checklist before publishing, same as noted in both prior packs.
- **Flag C — Process/project-type specificity gap: NEW FINDING for this page, distinct from Flags A/B.** Unlike the homepage and site-prep packs' primary finding (a general lack of FAQ/pricing/permit content), this page's sharpest gap is that even competitors with dedicated excavation pages describe the service in vague, single-sentence terms — only All Dirt names the full validated process list, and only 2 of 10 name pond excavation at all. This is a genuine content-depth opportunity distinct from the structural (FAQ/pricing/permit) gaps already established.

---

## Quality Checklist

- [x] 100-150+ keywords captured (133 rows in `01-keyword-universe.csv`)
- [x] 40+ questions mined (49 in `02-question-mine.md`); 12 Oregon-specific; 8 objection-tagged; 7 Reddit/Quora-sourced (proxy, same methodology limitation as both prior packs)
- [x] 8 homepage-pack competitors re-checked for excavation-specific content (not re-discovered from scratch) + 2 supplemental competitors added (BBC Excavation reused, Tectonic Construction new) — `04-competitor-matrix.md`
- [x] Validated AI citation channel audit reused from prior packs where unchanged, with new excavation-specific SERP-composition findings — `06-ai-citation-audit.md`
- [x] 12-gap scoring framework completed, four gaps explicitly tied to the task brief's named dimensions (cost-by-cubic-yard, excavation-vs-grading, Oregon811, sibling-page boundary) — `08-gap-analysis.md`
- [x] Flags A/B/C evaluated, Flag C identified as a genuinely new finding distinct from the prior two packs
- [x] 5 Oregon/Lane-County authority signals with source + verification date, 3 of them new/excavation-specific (Oregon811 verified directly, pond permitting, Oregon labor-cost data); 2 reused verbatim from prior packs (OSHA Subpart P, Lane County Grading and Fill Permit) — `07-oregon-authority.md`
- [ ] AI citation audit across 6 live AI chat systems — **not directly queryable** this session, same limitation as both prior packs; reasoned from SERP composition instead
- [x] Heading map composed, every H2 a natural question/task under 10 words
- [x] Content Format Plan completed for every H2, including two comparison tables and two bulleted lists
- [x] FAQ shortlist composed (9 questions)
- [x] AI citation block drafted (~150 words, first-30%-placement)
- [x] Entity map cross-references homepage and site-preparation packs' canonical entities rather than re-deriving them — `03-entity-map.md`, `entity-inventory.csv`
- [x] Sibling-page boundary against the future Grading & Leveling page explicitly drawn and justified with a real, defensible distinction (not an arbitrary keyword split) — `08-gap-analysis.md` and this file §6/§9

## Honest Limitations of This Pack (disclose to the content-brief author and to David)

1. No direct AI chat-interface querying was possible, same as both prior packs — this audit is reasoned from SERP composition.
2. The Oregon811 2-business-day advance-notice figure and the "free" claim were verified directly against digsafelyoregon.com and oregon.gov/puc; however, the specific PUC penalty amount for skipping the one-call system was not found in this pass and is explicitly not stated as a dollar figure anywhere in this pack.
3. The pond-permitting OWRD/DSL thresholds (9.2 acre-feet, 100-foot setback) rely on a single contractor-blog secondary source, not a direct fetch of oregon.gov/owrd or oregon.gov/dsl's own permit pages — flagged in `07-oregon-authority.md` §4 for direct confirmation before publishing as exact figures.
4. No Lane-County-specific per-cubic-yard excavation price was found; all cost ranges in this pack are national or Oregon-labor-cost-adjusted, not a genuine Lane County dataset.
5. Whether D&D's actual field process includes an Oregon811 call before every dig is a near-certain but unconfirmed operational claim — flagged in `08-gap-analysis.md` as a question for David before the content brief states it as a specific practice.
6. Whether D&D has previously performed pond excavation, or would be scoping it as a new-but-capable offering, is unconfirmed — same flag.
