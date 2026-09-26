# Entity Map — Drainage Installation Eugene Oregon (`/drainage-installation-eugene-oregon`)

**Pack type:** Location × Service (Eugene + Drainage Installation)  
**Research date:** 2026-09-25  
**Inherits from:** `../drainage-excavation/03-entity-map.md` (service hub, 2026-09-09); `../foundation-excavation-eugene-oregon/03-entity-map.md` (structural parallel for Eugene location page format)  
**Canonical business entities** reused verbatim from `../home/entity-inventory.csv` — not re-derived.

---

## Layer 1 — Primary Business Entities (reused, not re-derived)

| Entity | Canonical form | Placement | Validation |
|---|---|---|---|
| D&D Land Works | "D&D Land Works" | H1, first paragraph, schema `name` | VALIDATED_LOCAL |
| David Deggelman | "David Deggelman" | About/trust section, schema `founder` | VALIDATED_LOCAL |
| Oregon CCB #261742 | "CCB #261742" | First paragraph; schema `hasCredential`; hyperlinked to orccb.org | VALIDATED_LOCAL |
| DEQ Certified | "DEQ Certified" | First paragraph or trust sidebar | VALIDATED_LOCAL |
| Eugene, Oregon | "Eugene, Oregon" | H1, meta, intro, `areaServed` | VALIDATED (Q34017) |
| Lane County, Oregon | "Lane County, Oregon" | Body copy, schema `areaServed` | VALIDATED (Q485252) |
| Springfield, Oregon | "Springfield, Oregon" | Body copy, service area section | VALIDATED_LOCAL |
| Willamette Valley | "Willamette Valley" | Soil/context sections | VALIDATED |

---

## Layer 2 — This Page's Core Drainage Entity Cluster

These entities make this page distinct from both the parent service hub and all competitor pages. The city-page version **goes deeper** on Eugene-specific context than the hub does.

| Entity | Definition | Placement | Validation |
|---|---|---|---|
| **French Drain** | Buried, perforated pipe surrounded by gravel that collects and conveys groundwater/surface water to a discharge point | Dedicated H2 + AI citation block; primary service entity for this page | VALIDATED (Wikipedia: en.wikipedia.org/wiki/French_drain) |
| **Curtain Drain** | A shallower (~2 ft), less expensive variant intercepting near-surface water over a broader area; wider coverage than a French drain | Comparison H2 — genuinely new to the Eugene market, zero competitor coverage | VALIDATED_NO_KG (Wikipedia redirects; term is standard in the drainage industry) |
| **French Drain Cost Eugene Oregon** | $10–$100+/linear foot nationally; no Lane-County-exact figure found; shallow exterior $10–35/ft, deep footing-level $45–85/ft | Cost section — must cite national/industry source, not local | VALIDATED_NO_KG (pricing aggregate, not an entity per se) |
| **Catch Basin** | Grated inlet collecting surface water into a buried pipe system; $1,000–$4,000 installed (national) | Named entity; Eugene homeowners often search for this in tandem with French drains | VALIDATED_NO_KG |
| **Dry Well** | Underground chamber that collects and slowly infiltrates water back into soil, often the discharge point FOR a French drain (not a substitute) | "Where does the water go" section; $1,165–$4,420 installed (national) | VALIDATED_NO_KG (Wikipedia: "Soakaway") |
| **Daylight Discharge Point** | Where a drain pipe exits above ground at a lower elevation, letting gravity finish the job | "Where does the water go" section — this page's strongest trust/expertise signal | VALIDATED_NO_KG |
| **Pop-up Emitter** | Spring-loaded cap at a daylight discharge point, opens when water flows, closes to keep pests/debris out | Detail-level differentiator | VALIDATED_NO_KG |
| **Perforated Pipe (corrugated vs. PVC)** | Material choice for drain pipe; rigid PVC more durable, corrugated cheaper/more flexible; installed holes-down | Materials section | VALIDATED_NO_KG |
| **Drain Rock / Washed Gravel** | Clean angular 3/4-inch gravel surrounding drain pipe; enables water movement into perforated pipe | Materials section | VALIDATED_NO_KG |
| **Filter Fabric / Geotextile** | Fabric wrapping gravel/pipe to prevent Willamette Valley clay silt from migrating in and clogging the system over time | Materials section — especially important in Lane County clay context | VALIDATED_NO_KG |
| **Swale** | Shallow, graded channel shaped into the land itself (OWNED BY grading-leveling page — cross-link only) | One-line boundary reference + link to `/grading-leveling-services-eugene-oregon/` or parent grading page | VALIDATED_NO_KG |

---

## Layer 3 — Eugene-Specific Entities (NEW for this city page)

These are the entities that differentiate this Eugene location page from the parent service hub. Zero local competitor uses any of them.

| Entity | Eugene-specific fact | Placement | Source |
|---|---|---|---|
| **Malpass Clay** | Local clay series in west Eugene with high shrink-swell properties and low permeability; documented in BLM Technical Note 447. Saturated Malpass clay makes yard drainage a year-round challenge; also clogs drain pipes that lack filter fabric | Eugene soil section; also inline note in materials section (filter fabric is critical in Malpass clay context) | BLM TN447 |
| **Willamette Valley Wet Season** | Oct–May; Lane County receives 44–48 inches of annual rainfall, predominantly in this window; most drainage problems manifest in Dec–Mar when soils are already saturated | Eugene context section; FAQ ("Is Oregon's rainy season a bad time to install a French drain?") | NOAA climate data; local sources |
| **Eugene Annual Rainfall** | ~46.6 inches/year (Eugene Airport gauge); well above US average (~38 in.), concentrated Oct–May | Eugene context/authority section | NOAA |
| **City of Eugene Stormwater Connection Permit (EC §6.610)** | No one may connect a drain to Eugene's public stormwater system without a City Engineer permit; only a property owner (own residence) or a licensed plumber/licensed septic-tank installer may pull it | Permit section; FAQ; trust-killer rebuttal | Eugene Code §6.610 (verified 2026-09-09) |
| **City of Eugene Stormwater Department** | The authority that administers EC §6.610 permits and Eugene's stormwater system | Permit section + contact block | eugene-or.gov |
| **Springfield Development Code (Ordinance 6464)** | Stormwater post-construction requirements updated Jan 8, 2024; connecting to public storm system requires permit; residential submittals must show stormwater routing | Springfield-specific paragraph in the permit section | City of Springfield |
| **Lane County Stormwater Management Program** | Lane County Public Works Engineering — the authority for unincorporated property drainage outside Eugene/Springfield city limits | A brief mention for properties outside city limits | lanecounty.org |
| **Oregon DSL Removal-Fill Law** | Relevant only if drain discharge touches a mapped wetland or stream (reused from excavation pack — do not re-derive) | One sentence, cross-linked to the excavation pack for depth | Oregon DSL |
| **DEQ 1200-C Construction Stormwater Permit** | Triggered at 1+ acre disturbance — most yard drainage jobs fall far under this threshold; mention for scale only | One brief note in permit section | Oregon DEQ |

---

## Layer 4 — Sibling-Page Entities (NOT this page's territory)

These entities are explicitly flagged so content writers do not duplicate sibling pages.

| Entity | Owned by | Rule for this page |
|---|---|---|
| Surface swale, berm, positive drainage slope (ORSC R401.3 6-inch fall in 10 feet) | `/grading-leveling-services-eugene-oregon/` | Cross-link only; the comparison table is already shipped there — do not rebuild |
| ORSC R405 / R406 / R408 (foundation drain, waterproofing, crawlspace vapor retarder) | `/foundation-excavation/` and `/foundation-excavation-eugene-oregon/` | Cross-link only; acknowledge that a French drain can also satisfy R405 when triggered by a new foundation, but the code citation lives there |
| Septic drainfield / OAR 340-071 (DEQ wastewater) | `/septic-installation-lane-county-oregon/` | One-line disambiguation only |
| Sump pump | Not claimed as D&D service | One honest sentence noting it's typically a plumbing/electrical trade scope |

---

## Layer 5 — Authority / Certification Entities

| Entity | Form | Placement |
|---|---|---|
| Oregon CCB (Oregon Construction Contractors Board) | "Oregon CCB — verify at orccb.org" | First paragraph; schema `hasCredential` |
| Oregon 811 | "Oregon 811 (Dial 811 before you dig)" | Process/safety section; required mention |
| OSHA 29 CFR 1926 Subpart P | Trench 5 ft deep → protective system required; most yard drains (18–36 in.) fall well under this threshold; French drain tied to a footing (4–6 ft) can approach it | Safety note in process section |
| Oregon DEQ | DEQ Certified credential (septic); DEQ 1200-C (construction stormwater, 1+ acre) | Brief credential mention + 1-acre threshold note |

---

## Layer 6 — Equipment Entities (reused from home pack)

| Entity | Q-ID | Placement |
|---|---|---|
| Excavator / Mini Excavator | Q557056 | Process section ("what equipment does drainage installation require") |
| Trencher (walk-behind or attachment) | VALIDATED_NO_KG | Process section — narrow-trench residential drainage common tool |

---

## Layer 7 — Co-occurrence Analysis (from parent pack — reused)

Frequency table from the 5 competitors checked in the parent pack (Danco, All Dirt, Heavy D, M4 Landworks, Pacific Earthworks):

| Entity named | Frequency (5 competitors) | Status for this page |
|---|---:|---|
| "Drainage" (vague) | 5/5 | Table stakes |
| French drain (named specifically) | 2/5 | Recommended — genuinely present in this market |
| Curtain drain | 0/5 | **Differentiator** |
| Catch basin | 0/5 | **Differentiator** |
| Dry well | 0/5 | **Differentiator** |
| Pricing shown | 0/5 | **Differentiator** |
| Permit/storm-tie-in mentioned | 0/5 | **Differentiator** |
| Material specificity | 0/5 | **Differentiator** |
| Eugene-specific soil (Malpass clay) | 0/5 | **Differentiator** |
| "Where does the water go" explained | 0/5 | **Differentiator** |

---

## Layer 8 — Wikidata / Knowledge Graph Notes

| Entity | Status | Notes |
|---|---|---|
| French Drain | VALIDATED_NO_KG | Wikipedia article exists (en.wikipedia.org/wiki/French_drain); no dedicated Wikidata Q-ID found |
| Dry Well | VALIDATED_NO_KG | Wikipedia redirects to "Soakaway" — the more general engineering term |
| Culvert | VALIDATED | Wikipedia article; no ambiguity risk |
| Eugene, Oregon | VALIDATED | Q34017 |
| Lane County | VALIDATED | Q485252 |
| Malpass Clay | VALIDATED_LOCAL | BLM Technical Note 447; no Wikidata Q-ID; cite BLM as `sameAs` |
| D&D Land Works | NOT_FOUND | Zero digital footprint — no GBP, no Wikidata, no external profile as of 2026-09-25 |

---

## Validation Gate

All entities above have been assigned a status: `VALIDATED` (Wikidata/Wikipedia confirmed), `VALIDATED_NO_KG` (industry-standard term, no KG entry needed), `VALIDATED_LOCAL` (primary-source Oregon/Lane County fact), or `NOT_FOUND` (business entity with no public KG presence — consistent with every prior pack). No entity is `AMBIGUOUS` or `WRONG_TYPE`.
