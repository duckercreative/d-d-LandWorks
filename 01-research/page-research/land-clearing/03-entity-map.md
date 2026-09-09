# Entity Map — Land Clearing (`/land-clearing/`)

Full machine-readable inventory in `entity-inventory.csv` (49 rows). This file is the narrative walkthrough — where each entity class comes from and how it should be placed on the page.

---

## 1. Canonical business/location/certification entities (reused verbatim — not re-derived)

Per the task's explicit instruction, these are pulled directly from the homepage, site-preparation, and excavation packs' entity inventories rather than re-derived:

- **D&D Land Works** (Organization, `GeneralContractor`) — home pack row 2
- **David Deggelman** (Person, owner) — home pack row 3
- **Oregon CCB #261742** (Identifier, trust signal, `VALIDATED_LOCAL`) — home pack row 4
- **Eugene, Oregon** and **Springfield, Oregon** (City, geo_primary/secondary) — home pack rows 12-13
- **Willamette Valley** (Place, geo_context) — home pack row 22
- **GeneralContractor** / **Service** (schema.org types) — home/site-prep pack schema decisions

None of these required re-verification for this pack; they carry the same validation status as in the prior four packs.

---

## 2. Primary service entity

**Land Clearing** is this page's primary entity (salience 10, `VALIDATED_LOCAL`), reused verbatim from the homepage pack's own inventory (row 25) where it was already established as a P0 core service with 7/8 original competitors offering some form. Re-checking specifically for this pack: all five competitors deep-dived directly for land-clearing content (Danco, All Dirt, Heavy D, McKenzie, plus supplemental Rotex Excavation) have either a dedicated land-clearing page or a clearly named land-clearing service line.

**Brush Clearing** appears in this inventory only as a `sibling_boundary_page` entity (salience 8) — it is the subject of a full cross-link, not full content ownership, on this page. See §4 below and `00-research-pack.md`'s Scope Boundary Finding for the complete reasoning.

---

## 3. The scope-defining process entities (this page's real content backbone)

These are the entities that actually distinguish "land clearing" from every adjacent category, sourced directly from the current live `/land-clearing/` page's own shipped copy, cross-validated against Danco Excavation's (a direct competitor) published FAQ:

| Entity | Source | Placement |
|---|---|---|
| Tree Felling (within a clearing job) | Live page copy: "Felling and removing trees within the clearing footprint" | Core "What's Included" list |
| Stump Grubbing (within a clearing job) | Live page copy: "Grubbing stumps and root balls out of the ground" | Core "What's Included" list |
| Debris Disposal (chip/haul/burn) | Live page copy: "Chipping or burning debris where permitted" | Dedicated "What Happens to the Debris" section — genuine content-gap opportunity (see `08-gap-analysis.md`) |
| Rough Grading (post-clearing) | Live page copy: "Rough grading the cleared area to a usable, walkable state" | End-of-process step, cross-links to `/grading-leveling/` |
| Selective Clearing / Tree & Feature Preservation | Live page copy: "Flagging and preserving trees or features you want kept"; independently corroborated by All Dirt's own copy | Trust-building section — walk-through-based practice, not marketing language |

**Critical scope nuance (flag for the content brief and for David — do not silently resolve):** the live page's inclusion of tree felling and stump grubbing as line items of land clearing sits alongside business-info.md's verified service list, which does **not** list "Tree Removal" or "Stump Grinding" as their own standalone line items, and the topical map's own scope fence (§4, §6.4), which explicitly excludes "tree removal, stump grinding, forestry mulching, hauling" **unless verified**. These are not actually contradictory readings once the distinction is made explicit: D&D appears to remove trees and grub stumps **as part of a whole-parcel clearing job's footprint**, but does not market a standalone "Tree Removal" or "Stump Grinding" service the way an arborist or stump-grinding specialist would (i.e., you cannot hire D&D to remove one problem tree from a landscaped yard independent of a broader clearing scope). This is also how the industry itself typically separates the two service categories (see Highland Tree Service LLC, an arborist competing in the same keyword space from the opposite direction). **This exact framing should be confirmed with David before the content brief locks it in** — it is inferred from the shipped page copy, not independently confirmed against business-info.md.

**Forestry Mulching** is flagged `adjacent_distinct_concept` — the live page does not claim it, and this pack does not add it as a verified D&D method. Do not introduce forestry mulching as a D&D offering without direct confirmation.

---

## 4. Sibling-page boundary entities

| Entity | Role | Where it lives |
|---|---|---|
| Brush Clearing | `sibling_boundary_page` | `/brush-clearing/` owns lighter, no-timber/no-stump scope — see `00-research-pack.md` Scope Boundary Finding |
| Site Preparation | `downlink_target` | Current live page's own "Often Paired With" section already links here — reinforced, not changed |
| Grading & Leveling | `downlink_target` | Same "Often Paired With" section |

---

## 5. Project-type entities

Five distinct project types, each with different cost/scope implications, none of which competitors currently separate with real pricing logic:

1. **Pre-Construction Lot Clearing** — universal project type, feeds directly into `/site-preparation/`
2. **Wooded/Timbered Lot Clearing** — named directly in the live page's hero copy; heaviest-scope, highest-cost tier
3. **Overgrown/Neglected Acreage Reclamation** — named directly in the live page's hero copy ("sat untouched for years")
4. **Pasture and Acreage Reclamation Clearing** — task-brief-named; genuinely cheaper cost tier ($500-$2,500/acre per Angi/HomeGuide) because full stump extraction isn't always required
5. (Cross-referenced, not owned here) **New home build / ADU / subdivision** project types reused from the site-preparation pack

---

## 6. Equipment entities

Reused base entities (Excavator, Skid Steer Loader, Bulldozer, Dump Truck) from the home/excavation packs, extended with two page-specific attachment-level entities the live page names directly:

- **Excavator with Thumb or Grapple Attachment** — "does most of the heavy lifting: pulling stumps, piling brush, loading debris"
- **Brush Hog / Mulching Head Attachment** — "handles lower growth without tearing up the topsoil"

The mulching-head attachment entity is **shared** with the Brush Clearing sibling page, where it is the *primary* tool rather than the secondary one used on heavier ground here — the content brief should differentiate its role on each page rather than presenting it identically.

---

## 7. Vegetation species entities (new for this pack)

- **Himalayan Blackberry** (*Rubus armeniacus*) — the dominant invasive nuisance species driving demand in the Willamette Valley; named by common name only ("blackberry") on both live pages, never by proper species name. Zero competitors checked in this pass name it precisely either — a small, low-cost specificity opportunity.
- **Scotch Broom** (*Cytisus scoparius*) — named on the live `/brush-clearing/` page; an Oregon state-designated noxious weed.

---

## 8. Authority/regulatory entities (new for this pack — see `07-oregon-authority.md` for full detail)

| Entity | Scope | Applies to |
|---|---|---|
| City of Eugene Tree Preservation and Removal Standards (EC 9.6885) | In-city only | 8"+ DBH "significant tree" permit requirement inside Eugene city limits |
| City of Springfield Tree Felling Permit | In-city only | ~6"+ DBH, right-of-way, or heritage-tree (24"+ DBH) trees inside Springfield city limits |
| Lane Regional Air Protection Agency (LRAPA) | Regional, burning only | Does NOT regulate slash burns directly; regulates certain outdoor burning within its own jurisdiction/fire districts; prohibits forest slash burning within the Eugene-Springfield UGB |
| Oregon Department of Forestry (ODF) | Statewide, forestland burning | Primary regulator of slash/debris burning from clearing on forestland within an ODF protection district |
| Oregon DEQ Backyard/Yard Debris Burning Rules | Statewide, residential | Domestic/backyard burning of yard debris from a residence with ≤4 dwelling units |
| Oregon Senate Bill 762 / Defensible Space | WUI-risk-rated properties only | Cross-referenced, primarily owned by the `/brush-clearing/` sibling page |
| Oregon Department of State Lands (DSL) Removal-Fill Law | Wetlands/waters only | Reused/extended from the excavation pack; relevant when clearing borders a wetland/stream |
| Oregon Forest Practices Act (FPA) | Commercial forestry only | Verified as generally NOT applicable to typical residential/small-acreage clearing jobs — flagged for direct ODF confirmation rather than stated as an absolute |
| Lane County Land Management Division | County-wide | No standalone unincorporated tree-removal ordinance found in this pass — flagged for direct confirmation |

This five/six-agency structure (Eugene, Springfield, LRAPA, ODF, DEQ, DSL, and the FPA's non-applicability) is genuinely confusing and, per the competitor matrix, **zero competitors checked in this pass explain any of it**. This is the single largest authority-signal content-gap opportunity on this page — see `08-gap-analysis.md`.

---

## 9. Competitor entities

Ten competitors examined specifically for land-clearing/brush-clearing content (the original 8 plus 2 new supplemental references): Danco Excavation, All Dirt Inc, Heavy D Excavation, McKenzie Excavating, Braun Excavating, Strasheim Contracting, A&D Excavation, Emerald Excavating, plus supplemental Rotex Excavation (new) and two adjacent-category players (Williams Land Improvement — timber/brush specialist; Highland Tree Service LLC — arborist). Full detail in `04-competitor-matrix.md`.

**Danco Excavation is the single most load-bearing competitor entity in this pack** — it independently confirms, via its own published FAQ, the exact land-clearing-vs-brush-clearing scope split that D&D's live site already uses.
