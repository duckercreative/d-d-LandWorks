# Entity Map — Utility Excavation (`/utility-excavation/`)

Full per-entity detail lives in `entity-inventory.csv`. This file summarizes the Koray-method layers and the frequency table, adapted from the HVAC-original methodology per CLAUDE.md, cross-referencing all eight prior packs rather than re-deriving canonical business/location/certification entities.

---

## Layer A — Reused Canonical Entities (do not re-derive)

D&D Land Works, David Deggelman, Oregon CCB #261742, Eugene, Springfield, Willamette Valley — all reused verbatim from `../home/entity-inventory.csv`. Oregon811/Oregon Utility Notification Center and OSHA 1926 Subpart P reused verbatim from `../excavation/entity-inventory.csv`.

## Layer B — Core Concept Entities (new for this page)

The page's own subject matter, organized by utility type — this is the structural spine of the page:

| Entity | Type | Depth/spec figure | Source |
|---|---|---|---|
| Water Service Line | Utility service | 12 in. below frost depth (24 in. total in Lane County) | OPSC 609.1, verified via Lane County |
| Sewer Lateral | Utility service | 12 in. minimum cover, 1/4 in./ft slope | OPSC 718.1, verified via Lane County |
| Underground Gas Piping | Utility service | 18 in. standard, 8 in. for outdoor-appliance lines | ORSC G2415.12 / G2415.12.1 |
| Underground Electrical Conduit | Utility service | 24 in. direct-buried / 18 in. PVC / 6 in. rigid metal (NEC 300.5 baseline) | NEC Table 300.5, OESC-adopted |
| Communications/Fiber Conduit | Utility service | No Oregon state-code figure found — ISP/utility-specific | Genuine gap, see `08-gap-analysis.md` |
| Joint Trench | Practice/concept | Multiple utilities in one trench, code-permitted | Verified via Lane County |
| Tracer Wire | Supporting material | Blue/water, green/sewer, yellow/gas, specific AWG | Verified via Lane County |

## Layer C — Process/Material Entities

Bedding sand/pea gravel, trench width/depth matched to pipe/conduit spec, water-to-sewer vertical separation (OPSC 720.1). General backfill-in-lifts compaction technique is explicitly NOT this page's territory — see Scope Boundary in `00-research-pack.md` §0 and the `Trenching & Backfill` row in `entity-inventory.csv`.

## Layer D — Authority/Government Entities

Oregon Utility Notification Center (Oregon811, reused), OSHA 1926 Subpart P (reused), OPSC 609.1/718.1/720.1 (new), ORSC G2415.12/G2415.12.1 (new), NEC Table 300.5 / OESC (new, partial-confirmation flag), Lane County Land Management Division — Building Safety Division (new, the direct source of the depth table), EWEB, Springfield Utility Board, NW Natural (new — utility-coordination context, not confirmed D&D partnerships).

## Layer E — Sibling/Boundary Entities (NOT this page)

Excavation & Grading (parent — general cut/fill, OSHA, Oregon811 mechanics), Drainage Excavation (sibling — buried drainage FOR water management, not utility service delivery), Trenching & Backfill (sibling, scope-boundary-flagged — general backfill/compaction mechanics), Septic Install & Repair (sibling — the septic tank/drainfield itself), Foundation Excavation (sibling — the ORSC R405 foundation drain).

## Layer F — Co-occurrence Frequency (from the 6 competitor pages checked for this pack, plus the 2 sibling packs' 10-competitor sets re-referenced)

| Entity | Frequency across checked competitor pages | Status |
|---|---|---|
| "Utility trenching" (generic mention) | 3/6 (All Dirt, Emerald, McKenzie) | Table stakes — mention the category |
| Water line / sewer line (named specifically) | 2/6 (Emerald, Hydro-Con [out-of-market reference]) | Recommended |
| Electrical conduit / gas line (named specifically) | 0/6 | Differentiator |
| Any burial-depth figure, any utility | 0/6 | Zero-competitor differentiator — mandatory for this page |
| Joint trenching named as a concept | 0/6 | Zero-competitor differentiator |
| Oregon811/utility locate | 0/6 (reused finding from excavation pack, 0/10 there too) | Zero-competitor differentiator, reused |

**Any entity at 0/6 is a genuine content-gap opportunity, not table stakes to skip** — per the parent methodology, 7+/10 would be mandatory table stakes; nothing in this niche clears even 3/6, meaning this page can establish itself as the category's most complete source with modest effort.

## Validation Gate

Every entity in `entity-inventory.csv` carries a `validation_status`. `VALIDATED` / `VALIDATED_LOCAL` entities are ready for content use. The one `NOT_FOUND` entity (Communications/Fiber Conduit's depth figure) is explicitly flagged as an honest gap rather than filled with an invented number — see `08-gap-analysis.md`. The Oregon Electrical Specialty Code's own amendment table (as distinct from the NEC 300.5 baseline it adopts) carries a confirmation flag in `07-oregon-authority.md` §1 rather than a hard validation failure, since the NEC baseline itself is fully validated and citable.
