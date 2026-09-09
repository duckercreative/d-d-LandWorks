# Entity Map — Site Preparation (`/site-preparation/`)

Adapted from the same Koray-derived method used in the homepage pack, scoped to the entities that matter specifically for site preparation rather than re-deriving the whole-business entity set. **Canonical business/location/certification entities are reused verbatim from `../home/entity-inventory.csv`** (D&D Land Works, David Deggelman, Oregon CCB #261742, Oregon DEQ, Lane County, Eugene, Springfield, Willamette Valley, `GeneralContractor` schema type) — see that file for their original validation notes. This file only re-lists them where placement differs for this page; full detail lives in `entity-inventory.csv` in this folder.

---

## 1. Business Entity (reused, not re-derived)

- **D&D Land Works**, **David Deggelman**, **Oregon CCB #261742** — same validation status as the homepage (`NOT_FOUND` externally / `VALIDATED_LOCAL` for the license format). No new findings for this page; do not re-verify or rename.

## 2. Process Entities (the real substance of this page)

Unlike the homepage, which names services at the category level, a site-prep page needs to name the *steps inside* the service — this is where the homepage pack's competitor research found the least depth (see `04-competitor-matrix.md`).

| Entity | Validation | Notes |
|---|---|---|
| Land Clearing | VALIDATED_LOCAL | Down-link target; standard first step on a wooded lot |
| Topsoil Stripping/Stockpiling | VALIDATED_LOCAL | Standard industry step; **zero of the 9 competitors examined name this explicitly** — a specificity opportunity |
| Cut and Fill | VALIDATED_LOCAL | Standard term; directly relevant because Lane County's grading-permit trigger (see below) is measured in cubic yards moved |
| Rough Grading | VALIDATED_LOCAL | Distinct from "finish grading" (industry-standard distinction); down-link target: `/grading-leveling/` |
| Subgrade Compaction | VALIDATED_LOCAL | The step that determines whether a foundation crew can build on the pad; named by 1/9 competitors (All Dirt: "soil compaction and stabilization") |
| Access Road / Driveway Cut | VALIDATED_LOCAL | Relevant to rural acreage and subdivision project types; overlaps `/driveway-repair/` |
| Erosion Control / Silt Fencing | VALIDATED_LOCAL | Directly tied to DEQ 1200-C compliance (see §4) — named by only 1/9 competitors, in passing |
| Site Staking (corners/elevations) | VALIDATED_LOCAL | Already present in the current live page copy (`site/src/pages/services/site-preparation.astro`); real industry step, keep |

## 3. Oregon Permitting Entities (new for this page — not covered at this depth in the homepage pack)

| Entity | Validation | Detail |
|---|---|---|
| Lane County Land Management Division (LMD) | VALIDATED | Reused canonical form from home pack; primary permitting authority for everything below |
| Lane County Grading and Fill Permit | VALIDATED_LOCAL | Triggered by moving **more than 50 cubic yards** of earth or creating a cut/fill slope **steeper than 2:1**, per a third-party permitting guide (willamettecraftworks.com) summarizing Lane County code — **the exact cubic-yard/slope figures are not yet cross-verified against Lane Code Chapter 16 directly; confirm before publishing as a precise, quotable threshold.** Foundation excavation under an active building permit is generally exempt; driveway/landscape grading is not. |
| Lane County Erosion Prevention Permit (Type I / Type II) | VALIDATED_LOCAL | Type I = single-family homes/minor grading under 1 acre; Type II = larger developments, slopes over 15%, or highly erodible soils; applies within the County MS4 area (roughly the Eugene/Springfield urban fringe) — same third-party sourcing caveat as above |
| Lane County Driveway/Access (Facility) Permit | VALIDATED_LOCAL | Required for a new driveway or a modified connection to a county road; sight-distance and culvert-sizing review |
| DEQ 1200-C Construction Stormwater Permit | **VALIDATED directly on oregon.gov** | Confirmed live at oregon.gov/deq: required when a project disturbs **1 acre or more**, or is part of a larger common plan of development totaling 1 acre or more. "Disturbance" explicitly includes clearing, grading, and excavation. No homeowner/single-lot exemption was found. See `07-oregon-authority.md` for full fee/timing detail |
| Lane County On-Site Wastewater Program (septic/perc test) | VALIDATED | Confirmed on lanecounty.org; governs the test-pit evaluation that must happen **before** the drainfield area is graded, filled, paved, or otherwise disturbed — a genuine sequencing fact relevant to any site-prep job that precedes a septic install |
| Test Pit (septic site evaluation) | VALIDATED | Minimum 2 pits (3 preferred), spaced 50-100 ft apart, each 2 ft wide × 4 ft long × 5 ft deep |

## 4. Project-Type Entities (per topical map §6.1)

| Entity | Validation | Notes |
|---|---|---|
| New Home Build | VALIDATED_LOCAL | Universal project type across the competitive set |
| ADU (Accessory Dwelling Unit) | VALIDATED (Wikidata Q1339291) | **Not named as a project type by any of the 9 competitors examined** — genuine gap; also ties to the 2025 DEQ onsite-wastewater rule update addressing ADU/sewer-availability issues (see homepage pack `07-oregon-authority.md` §2) |
| Shop/Barn Pad | VALIDATED_LOCAL | Rural/acreage-relevant; not named explicitly by any competitor as a distinct project type |
| Subdivision Site Development | VALIDATED_LOCAL | Implied by general "residential and commercial development" language at several competitors, never named as its own project type |
| Commercial Site Development | VALIDATED_LOCAL | Ties directly to this page's role as the topical map's "top commercial converter" |

## 5. Equipment Entities

No new findings beyond the homepage pack's equipment-category list (excavator, skid steer, dozer, dump truck, compactor) — reuse those categories; **do not name brands** (Caterpillar, John Deere, Kubota, Komatsu) without confirmation from David, same rule as the homepage.

## 6. Co-occurrence Findings — Site-Prep-Specific Competitor Set

Expanded from the homepage's 8 to include **BBC Excavation Inc** (bbcexcavation.com), which surfaced organically ranking for "site preparation eugene oregon" with a dedicated page — not in the homepage's original competitor list, added here as a 9th reference point because it is directly on-topic for this page specifically. Full detail in `04-competitor-matrix.md`.

| Entity/Element | Frequency (of 9) | Status |
|---|---:|---|
| "Site preparation" or "site prep" named as a service | 9/9 (all mention it somewhere) | Table stakes |
| **Dedicated, standalone site-prep page/URL** | 2/9 (All Dirt, BBC Excavation) | Differentiator — most competitors fold it into a general services or "excavating" page |
| Named process steps beyond "clearing and grading" (compaction, topsoil stripping, staking) | 2/9 (All Dirt names compaction/erosion control; BBC names soil testing/geotech) | Differentiator opportunity |
| FAQ specific to site prep | 0/9 | **Zero — matches and extends the homepage's 0/8 finding to this narrower topic** |
| Real pricing/cost range for site prep specifically | 0/9 | **Zero** |
| Permit/code guidance on the site-prep page itself | 0/9 | **Zero** |
| Explicit distinction between "site prep" and "excavation" as separate services | 0/9 | **Zero — the core content-gap finding for this page, see `08-gap-analysis.md`** |
| Project-type framing (new build vs. ADU vs. shop/barn vs. subdivision vs. commercial) | 0/9 named ADU or shop/barn explicitly; ~3/9 imply residential/commercial split generically | Differentiator opportunity |

## 7. Concept / Problem Entities (for FAQ + body integration)

- Raw/unbuildable lot (topical map's stated "problem solved" for this page)
- No access (driveway/road not yet cut)
- Needs grading + drainage before permits can be finalized
- Rock or heavy clay encountered mid-job (cost-overrun trigger — see `05-intent-triangulation.md` and `07-oregon-authority.md`)
- Survey/topographic-plan prerequisite confusion ("do I need a survey before site prep starts?")
- Septic drainfield test-pit area accidentally disturbed by grading (voids DEQ approval)
- Confusion between "site preparation" and "excavation" as the same vs. different services (the umbrella-hub content gap)

---

## Validation Gate Summary

All new entities in this file are either `VALIDATED` (confirmed live during this research pass, with source URLs in `07-oregon-authority.md`) or `VALIDATED_LOCAL` (industry-standard term or a figure sourced from a secondary/third-party guide, flagged explicitly where a figure needs cross-checking against primary Lane County code before it is published as an exact, quotable number). No cubic-yard threshold, permit fee, or project-type claim was invented. See `entity-inventory.csv` for the machine-readable version.
