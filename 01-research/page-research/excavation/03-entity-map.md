# Entity Map — Excavation & Grading (`/excavation/`)

Adapted from the Koray 14-source entity method, same approach as the homepage and site-preparation packs. Canonical business/location/certification entities are **reused verbatim** from `../home/entity-inventory.csv` and `../site-preparation/entity-inventory.csv` — not re-derived. This file focuses on entities genuinely new or newly specific to excavation/grading: equipment, earthmoving process entities, Oregon811, and the excavation-specific project types named in the topical map (§6.2: foundation digs, ponds, pads, driveways, utility runs — a different flavor than the site-preparation pack's building-occasion project types of new home build/ADU/shop-barn/subdivision/commercial).

---

## 1. Business Entity (reused, unchanged)

- **D&D Land Works**, **David Deggelman**, **Oregon CCB #261742** — reused verbatim from `../home/entity-inventory.csv` rows 2-4. Do not re-derive or rename.

## 2. Service Entities (this page's scope + sibling boundaries)

| Entity | Validation | This page's scope note |
|---|---|---|
| Excavation & Grading | VALIDATED_LOCAL | Primary entity for this page — the highest-volume head term per topical map §6.2 |
| General Excavation | VALIDATED_LOCAL | Core sub-scope: digging/earthmoving for a defined purpose (foundation, pond, driveway, utility run) |
| Earthmoving | VALIDATED_LOCAL | Industry-synonym term for cut/fill-scale dirt relocation |
| Cut and Fill | VALIDATED_LOCAL | Reused canonical form from `../site-preparation/entity-inventory.csv` row 17 — process entity central to THIS page's scope, not the site-prep page's |
| Backfill and Compaction | VALIDATED_LOCAL | All Dirt-validated inclusion (topical map §6.2); ties to "Compaction / Subgrade Compaction" canonical entity reused from site-prep pack row 15 |
| Rock Removal | VALIDATED_LOCAL | All Dirt-validated inclusion; genuinely under-addressed by competitors as a *named, costed* line item (see `08-gap-analysis.md`) |
| Site Access Roads | VALIDATED_LOCAL | All Dirt-validated inclusion; reuses "Access Road / Driveway Cut" canonical form from site-prep pack row 18 |
| Erosion Control | VALIDATED_LOCAL | All Dirt-validated inclusion; reuses "Erosion Control / Silt Fencing" canonical form from site-prep pack row 19 — ties to DEQ 1200-C content already sourced there |
| Grading & Leveling | VALIDATED_LOCAL | **Sibling page, not this page's scope** — reused canonical form from home pack row 27 / site-prep pack row 22. Per topical map §16 cannibalization rule: keep separate from this page, cross-link heavily, differentiate H1 framing ("excavation & earthmoving" here vs. "land grading & leveling" there). Surface re-sloping, yard leveling, and drainage-grading-for-an-existing-problem belong to that future page, not this one — see `00-research-pack.md` §5 for the exact line drawn |
| Site Preparation | VALIDATED_LOCAL | **Umbrella parent, not this page's scope** — reused from home pack row 23. That page already owns the site-prep-vs-excavation disambiguation (`../site-preparation/08-gap-analysis.md` Gap #1); this page should link up to it, not repeat the disambiguation from scratch |
| Foundation Excavation | VALIDATED_LOCAL | Reused from home/site-prep packs — down-link target; this page covers foundation digs as one of its named project types (topical map §6.2), the future dedicated page goes deeper |
| Utility Excavation | VALIDATED_LOCAL | Reused from home pack row 30 — down-link target; this page covers utility-run excavation generally, the future dedicated page owns trenching/backfill depth |
| Drainage Excavation | VALIDATED_LOCAL | Reused from home pack row 29 — down-link target |

**Scope fence carried forward (do not integrate as offered services):** tree removal, stump grinding, forestry mulching, asphalt paving, concrete work, retaining-wall engineering, septic pumping — same fences as the homepage and site-preparation packs.

## 3. Equipment Entities (reused from homepage pack, unchanged)

| Entity | Type | Validation |
|---|---|---|
| Excavator (mini / standard / long-reach) | Equipment category | VALIDATED — reused from `../home/entity-inventory.csv` row 34 |
| Skid steer loader | Equipment category | VALIDATED — reused from row 35 |
| Bulldozer / dozer | Equipment category | VALIDATED — reused from row 36 |
| Dump truck | Equipment category | VALIDATED_LOCAL — standard industry term, not previously listed in home pack's inventory but a real, common category |
| Compactor / plate compactor | Equipment category | VALIDATED_LOCAL — ties to Backfill and Compaction process entity above |
| Caterpillar, John Deere, Kubota, Komatsu | Brand — NOT CONFIRMED for D&D's fleet | Same caveat as home pack rows 37-40: real, Wikidata-validated brands, but must not be named as "our equipment" without confirmation from David |

**This page's specific equipment-content opportunity:** the topical map §6.2 FAQ list names "equipment used" directly as a question this page must answer. Per the homepage pack's Gap #1 finding (still true — zero of 10 competitors examined across all three packs name specific equipment on any page), even a generic, accurate equipment-category explanation ("an excavator handles the bulk of the digging and rock work; a dozer pushes and shapes material across larger cuts; compaction equipment runs behind the fill") is a genuine differentiator. This is already present on the current live page (`site/src/pages/services/excavation.astro`) in generic-category form and should be preserved, not fabricated further with brand names.

## 4. Oregon811 / Utility Locate Entity (NEW — verified directly, not assumed)

| Entity | Type | Validation | Detail |
|---|---|---|---|
| Oregon Utility Notification Center (OUNC) / "Oregon 811" | GovernmentService | VALIDATED — confirmed directly on digsafelyoregon.com | The official one-call center's legal name is the **Oregon Utility Notification Center**, operating publicly under the brand "Oregon 811." This is the entity behind the familiar "call 811 before you dig" instruction, verified directly rather than assumed per the task brief's explicit instruction |
| Oregon Public Utility Commission (PUC) | GovernmentOrganization | VALIDATED — oregon.gov/puc | Enforces Oregon's excavation/dig laws and takes enforcement action against excavators who skip the one-call system; exact penalty dollar amounts were not found in this pass and should not be stated as a specific figure without further confirmation |
| Oregon Administrative Rules (OAR) 952-001 | Legislation | VALIDATED_LOCAL | Governs the one-call/locate-request process; a 2026 amendment changed locate "ticket life" (how long a locate request stays valid) from 45 to 30 days — this is distinct from the 2-business-day advance-notice requirement and should not be conflated with it in content |

**Why this matters for the page:** Zero of the 10 competitor sites examined across all three research packs (the original 8, plus BBC Excavation and Tectonic Construction added in this and the prior pack) mention Oregon811, utility locates, or call-before-you-dig anywhere in their excavation content. This is a genuine, easily-verified, zero-cost trust/competence signal this page can claim first — see `08-gap-analysis.md` Gap #1.

## 5. Pond-Permitting Authority Entities (NEW — specific to the pond project type)

| Entity | Type | Validation | Detail |
|---|---|---|---|
| Oregon Water Resources Department (OWRD) | GovernmentOrganization | VALIDATED | Issues water-rights permits for ponds that divert from a flowing stream, intermittent waterway, or spring, or that exceed 9.2 acre-feet of storage |
| Oregon Department of State Lands (DSL) | GovernmentOrganization | VALIDATED | Regulates pond/excavation work affecting wetlands, streams, riparian zones, or salmon-bearing waterways |

**Scope note:** A small, rain-fed residential pond under the 9.2 acre-foot threshold and 100+ feet from a mapped waterway/wetland is generally exempt from these state-level permits — but county planning/zoning rules can still apply, and this pack found no Lane-County-specific pond ordinance during this pass. Present as a general framework and recommend the customer confirm with OWRD/DSL/Lane County for their specific parcel, consistent with this project's no-fabrication rule.

## 6. Process Entities Reused Verbatim from the Site-Preparation Pack

The following process entities were already validated in `../site-preparation/entity-inventory.csv` and are reused here with their exact canonical forms, since they apply directly to excavation as well:

- **Rough Grading** (row 14) — this page names it as one of its own process steps; the future Grading & Leveling page owns rough-vs-finish-grading depth
- **Compaction / Subgrade Compaction** (row 15)
- **Cut and Fill** (row 17) — canonical home for this entity moves to THIS page, since it's central to excavation earthmoving rather than the site-prep sequencing role it played in the sibling pack
- **Access Road / Driveway Cut** (row 18)
- **Erosion Control / Silt Fencing** (row 19)

## 7. Project-Type Entities (per topical map §6.2 — distinct flavor from the site-prep pack's project types)

| Entity | Type | Validation | Notes |
|---|---|---|---|
| Foundation Dig | ProjectType | VALIDATED_LOCAL | Named directly in topical map §6.2; down-links to future `/foundation-excavation/` |
| Pond | ProjectType | VALIDATED_LOCAL | Named directly in topical map §6.2 and the task brief; genuine competitor gap — only McKenzie ("pond excavation") and BBC Excavation ("pond digging and filling") name it at all, and neither details process, cost, or Oregon permitting |
| Pad (building/house/shop/barn) | ProjectType | VALIDATED_LOCAL | Named directly in topical map §6.2; overlaps with site-prep pack's "Shop/Barn Pad" project type (row 25) — reuse that canonical form rather than renaming |
| Driveway | ProjectType | VALIDATED_LOCAL | Named directly in topical map §6.2; ties to future `/driveway-repair/` page (this page covers the initial excavation/cut, that page owns ongoing gravel/grading maintenance per topical map §6.9) |
| Utility Run | ProjectType | VALIDATED_LOCAL | Named directly in topical map §6.2; ties to future `/utility-excavation/` page (topical map §6.7 scope fence: excavation/trenching FOR utility installation, not the installation itself — this page inherits the same fence) |

## 8. Co-occurrence Findings (from the 10 competitor pages fetched for THIS page specifically)

Entities appearing across the competitor excavation-specific pages fetched for this pack (Danco, All Dirt, Heavy D, Emerald, McKenzie, Braun, Strasheim, A&D, plus supplemental BBC Excavation and Tectonic Construction):

| Entity | Frequency (of 10) | Status |
|---|---:|---|
| "Excavation" named as a service, combined or separate from grading | 10/10 | Mandatory — table stakes |
| Foundation excavation named as a project type | 6/10 (All Dirt, Heavy D, A&D, Braun, Tectonic, BBC) | Recommended |
| Utility trenching named as a project type | 6/10 (All Dirt, Heavy D, Emerald, A&D, Tectonic, BBC) | Recommended |
| Driveway/access-road excavation named as a project type | 5/10 (All Dirt, A&D, Tectonic, BBC, Strasheim implied) | Recommended |
| Pond excavation named specifically | 2/10 (McKenzie, BBC) | **Genuine differentiator — see `08-gap-analysis.md`** |
| Cut/fill, backfill, compaction, rock removal, erosion control, or access roads named as explicit line items (All Dirt's full list) | 1/10 (All Dirt only) | **Genuine structural differentiator — matches the topical map's own note that this exact list is "[COMPETITOR]-validated inclusions from All Dirt"** |
| Oregon811 / call-before-you-dig / utility locates mentioned anywhere | **0/10** | **Zero — the single clearest new trust-signal gap for this page** |
| Excavation-vs-grading distinction explained | **0/10** | **Zero** |
| Residential-vs-commercial excavation explained as a distinct section | **0/10** (implied generically by several, explained by none) | **Zero** |
| Equipment named (even generically) | **0/10** | **Zero** |
| Real pricing/cost range for excavation | **0/10** | **Zero** |
| FAQ specific to excavation | **0/10** | **Zero** |

## 9. Concept / Problem Entities (for FAQ + body integration)

- DIY-vs-hire threshold for excavation (rental viability vs. liability/skill risk near utilities, property lines, slopes)
- Utility-strike liability fear (ties directly to Oregon811 entity above)
- Rock/clay cost-overrun risk (reused from homepage/site-prep packs' Willamette Valley clay-soil entity)
- Cost-variance confusion ("why do quotes vary so much")
- Small-job deprioritization fear (reused from homepage pack)

---

## Validation Gate Summary

All entities above are either `VALIDATED` (confirmed via a live, citable source in this research pass — Oregon811/OUNC and the OWRD/DSL pond-permit framework were verified directly per the task brief's explicit instruction, not assumed), `VALIDATED_LOCAL` (standard industry term or Lane-County-specific fact, confirmed real but without an external Knowledge Graph entry), or explicitly reused/cross-referenced from the homepage and site-preparation packs' canonical inventories. No equipment brands, penalty dollar amounts, or Lane-County-specific pond ordinances were invented — see `entity-inventory.csv` for the structured version.
