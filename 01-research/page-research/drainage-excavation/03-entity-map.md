# Entity Map — D&D Land Works Drainage Excavation (`/services/drainage-excavation/`)

Full validated inventory in `entity-inventory.csv`. This file explains placement and the cross-sibling boundary logic behind each entity. Canonical business/location/certification entities (D&D Land Works, David Deggelman, Oregon CCB #261742, Lane County, Eugene, Springfield, Willamette Valley) are reused verbatim from `../home/entity-inventory.csv` and not re-derived.

---

## 1. Primary Business Entities (reused, not re-derived)

| Entity | Placement |
|---|---|
| D&D Land Works | H1, first paragraph, schema `name` |
| David Deggelman | About/trust link, schema `founder` |
| Oregon CCB #261742 | Body copy, schema `identifier`, hyperlinked to the CCB lookup |
| Eugene, Springfield, Lane County | H1 geo-suffix, schema `areaServed` |

---

## 2. This Page's Core Entity Cluster — Buried/Dug Drainage Systems

This is the entity set that makes this page genuinely distinct from every sibling page's drainage-adjacent content:

| Entity | Definition | Placement |
|---|---|---|
| **French Drain** | Buried, perforated pipe surrounded by gravel that collects and conveys groundwater/surface water to a discharge point | Dedicated H2 defining the term precisely, since the grading-leveling page already introduced it in contrast to a swale but did not explain it in depth |
| **Curtain Drain** | A shallower (~2 ft), less expensive variant intercepting near-surface water over a broader area | Comparison content — genuinely new to the market, zero competitor coverage |
| **Perimeter Drain** | General term for a French drain run around a structure/retaining wall's perimeter, *not* tied to a new foundation's own ORSC R405 requirement | Distinguishes this page's general-purpose drain work from the foundation-excavation page's code-triggered scope |
| **Perforated Pipe (corrugated vs. PVC)** | Material choice affecting cost and longevity | A materials-specificity section — a real differentiator per Cojo Asphalt's Oregon-specific content |
| **Drain Rock / Gravel Backfill + Filter Fabric** | Washed angular gravel wrapped in geotextile fabric to prevent Willamette Valley silty clay from clogging the system | Process/quality section |
| **Catch Basin** | Grated inlet collecting surface water into a buried pipe system | Named directly on the current live page; needs a real definition |
| **Dry Well** | Underground chamber that collects and slowly infiltrates water back into soil, often paired with (not a substitute for) a French drain | New content — zero competitor explains the French-drain-to-dry-well pairing |
| **Daylight Discharge Point** | Where a drain pipe exits above ground at a lower elevation, letting gravity finish the job | This page's single most important "where does the water go" answer |
| **Pop-up Emitter** | Spring-loaded cap at a daylight point | Small detail-level differentiator |
| **Culvert** | Pipe carrying a ditch/channel under a driveway or access road | Cross-links to Driveway Repair for the surface-repair half of a washed-out drive |
| **Sump Pump** | Mechanical pump for gravity-defeating situations — likely outside D&D's trade scope | One honest disambiguating sentence, not a claimed service |

---

## 3. Sibling-Page Entities — Explicitly NOT This Page's Territory

| Entity | Owned by | Why it's excluded here |
|---|---|---|
| Surface swale, berm, positive drainage slope (ORSC R401.3) | Grading & Leveling | That page's shipped content already states a French drain is "not confirmed as a current D&D service" and explicitly defers "a dedicated write-up on dug drainage systems" to this page. Reshaping the ground's own contour to move water is grading; a buried, constructed pipe system is this page. Reference the swale-vs-French-drain table already shipped there — do not rebuild it |
| ORSC R405/R406/R408 (foundation drain, waterproofing, vapor retarder) | Foundation Excavation | That page treats these as **code education only**, explicitly leaving install-scope "confirmed per job." This page is where D&D's actual French-drain-as-a-service content lives; cross-link back to foundation-excavation's ORSC citations rather than re-deriving them. Where a French drain happens to also serve a foundation's own code requirement, say so and point to that page for the code detail |
| Septic drainfield | Septic Install & Repair | A wastewater-dispersal system regulated under OAR 340-071 — a completely different system from stormwater/groundwater drainage. One-line disambiguation only |

---

## 4. New Authority Entities (genuinely new for this pack)

| Entity | Verified fact |
|---|---|
| **City of Eugene Stormwater Connection Permit (EC §6.610)** | No one may connect a drain, downspout, or conduit carrying stormwater to Eugene's public storm system without paying fees and obtaining a City Engineer permit. Permits issue **only** to a property owner (own residence) or a licensed plumber/licensed septic-tank-installation contractor. Zero of 8 core competitors mention this — the single strongest authority signal available to this page |
| **City of Springfield stormwater connection requirements** | A connection permit is required to tie into the public storm system or discharge to a waterway, under Springfield's Development Code (Ordinance 6464, effective Jan. 8 2024) and its NPDES MS4 obligations. Less granular public detail found than Eugene's; presented as a general rule |
| **Lane County Stormwater Management Program** | Administers stormwater permitting/code references for unincorporated county property — the authority to confirm rules outside city limits |
| **DEQ 1200-C** (reused, contextual) | 1+ acre disturbance trigger — most yard-drainage jobs fall well under it; mentioned for scale only |
| **Oregon DSL Removal-Fill Law** (reused from excavation pack) | Relevant only if a drain's discharge point is a wetland/stream/other jurisdictional water — most daylight/dry-well discharges do not trigger it |

---

## 5. Co-occurrence / Competitor Findings (Layer D)

Direct-checked 2026-09-09: **Danco Excavation, All Dirt Inc, and Heavy D Excavation** each mention "drainage" only as a vague, undefined line item — none names a French drain, curtain drain, catch basin, or dry well anywhere. Two **newly-discovered** local/regional competitors change the picture:

- **M4 Landworks** (m4excavation.com) — has a dedicated drainage-solutions page naming French drains, culvert installation/replacement, and swales/dry creek beds directly, claiming French drains "can last 15-25 years or more." No pricing or permit information anywhere.
- **Pacific Earthworks LLC** — has a dedicated `/french-drains` page (discovery-only in this pass, not deep-dived).

**Frequency table (of 5 competitors checked with drainage-specific detail: Danco, All Dirt, Heavy D, M4 Landworks, Pacific Earthworks):**

| Entity named | Frequency |
|---|---:|
| "Drainage" (vague/undefined) | 5/5 |
| French drain (named specifically) | 2/5 (M4 Landworks, Pacific Earthworks) |
| Curtain drain | 0/5 |
| Catch basin | 0/5 |
| Dry well | 0/5 |
| Culvert | 1/5 (M4 Landworks) |
| Pricing shown for any drainage service | 0/5 |
| Permit/storm-drain-tie-in mentioned | 0/5 |
| Material specificity (pipe type, gravel, fabric) | 0/5 |

Any entity at 2+/5 (French drain, culvert) is recommended coverage; the 0/5 entities (curtain drain, catch basin, dry well, pricing, permits, materials) are this page's clearest differentiation opportunities.

---

## 6. Wikidata / Knowledge Graph Notes

- French Drain — no dedicated Wikidata Q-ID found; Wikipedia article exists (`en.wikipedia.org/wiki/French_drain`), cited as `sameAs` at `VALIDATED` (not `VALIDATED` via Wikidata Q-ID).
- Dry Well — Wikipedia redirects to "Soakaway," the more general engineering term; cited accordingly.
- Culvert — has an established Wikipedia article; no need for a dedicated Q-ID given low ambiguity risk.
- Excavator/Mini Excavator — reuses the home pack's existing Q557056 validation.

---

## Validation Gate

Every entity in `entity-inventory.csv` carries a `VALIDATED`, `VALIDATED_LOCAL`, or `NOT_FOUND` (business-specific entities with no public KG presence, consistent with every prior pack) status. No entity in this file is `AMBIGUOUS` or `WRONG_TYPE`.
