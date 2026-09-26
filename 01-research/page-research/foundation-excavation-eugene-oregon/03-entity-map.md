# Entity Map — Foundation Excavation Eugene OR

**Research date:** 2026-09-24  
**Inherited from:** `../foundation-excavation/03-entity-map.md` + `../home/entity-inventory.csv` (canonical business entities) + `../excavation-contractor-eugene-oregon/03-entity-map.md` (Eugene-specific entities)  
**New this pass:** Malpass clay BLM citation, no-bedrock Eugene finding, Eugene pricing entity, Cojo Asphalt as informational competitor entity, Lane County inspection contacts

---

## Layer A — Business Entity (canonical, reused verbatim)

| Entity | Type | Canonical Form | Schema @type | Role on This Page |
|---|---|---|---|---|
| D&D Land Works | LocalBusiness / GeneralContractor | "D&D Land Works" | GeneralContractor | Business providing the service |
| David Deggelman | Person | "David Deggelman" | Person | Owner/operator — named trust signal |
| Oregon CCB #261742 | Credential / License | "CCB #261742" | EducationalOccupationalCredential | Trust signal in first paragraph + schema |
| DEQ Certified | Credential | "DEQ Certified" | — | Supporting trust signal |
| 541-401-8726 | ContactPoint | — | telephone | Primary CTA phone number |
| david@ddlandworks.com | ContactPoint | — | email | Secondary contact |

---

## Layer B — Service Entity (this page)

| Entity | Type | Canonical Form | Schema @type | Placement |
|---|---|---|---|---|
| Foundation Excavation | Service | "Foundation Excavation" | Service | H1, schema |
| Basement Digging / Basement Excavation | Service (sub-type) | "Basement Excavation" | Service | Foundation types section |
| Crawl Space Excavation / Crawl Space Preparation | Service (sub-type) | "Crawl Space Excavation" | Service | Foundation types section |
| Footings Excavation | Service (sub-type) | "Footings Excavation" | Service | Footings section |
| Slab-on-Grade Excavation | Service (sub-type) | "Slab Foundation Excavation" | Service | Foundation types section |
| ADU Foundation Excavation | Service (sub-type) | "ADU Foundation Excavation" | Service | ADU section |

---

## Layer C — Geographic Entities (Eugene-specific)

| Entity | Type | Canonical Form | QID (Wikidata) | Role |
|---|---|---|---|---|
| Eugene, Oregon | City | "Eugene, Oregon" | Q34017 | Primary city target — H1, meta, areaServed schema |
| Springfield, Oregon | City | "Springfield, Oregon" | Q50740 | Second city — included in H1 or intro |
| Lane County, Oregon | County | "Lane County, Oregon" | Q108068 | County-level framing; permit authority |
| Willamette Valley | Region | "Willamette Valley" | Q188059 | Soil/season context; entity D&D borrows for local authority |
| Cottage Grove, Oregon | City | "Cottage Grove, Oregon" | — | Tier 2 service area — mention in service area section |
| Junction City, Oregon | City | "Junction City, Oregon" | — | Tier 2 service area |
| Creswell, Oregon | City | "Creswell, Oregon" | — | Tier 2 service area |
| Veneta, Oregon | City | "Veneta, Oregon" | — | Tier 2 service area |
| Florence, Oregon | City | "Florence, Oregon" | — | Tier 3 service area |

---

## Layer D — Regulatory / Code Entities (this page — foundation-specific)

| Entity | Type | Canonical Form | Source | Placement |
|---|---|---|---|---|
| Oregon Residential Specialty Code (ORSC) | Regulatory body / Code set | "Oregon Residential Specialty Code" | Oregon BCD | Frost depth section; drainage section |
| ORSC R403.1.4 | Code section | "ORSC R403.1.4" | Oregon ORSC | Frost depth answer block |
| ORSC R403.1.4.1 | Code section | "ORSC R403.1.4.1" | Oregon ORSC | Frost protection method |
| ORSC Table R301.2 | Code table | "ORSC Table R301.2(1)" | Oregon ORSC | Elevation-band frost depth figure |
| ORSC R405 | Code section | "ORSC R405" | Oregon ORSC | Foundation drainage section |
| ORSC R401.3 | Code section | "ORSC R401.3" | Oregon ORSC | Grade fall at foundation section |
| ORSC R408 | Code section | "ORSC R408" | Oregon ORSC | Crawlspace vapor retarder (brief) |
| OSHA 29 CFR 1926 Subpart P | Federal regulation | "OSHA Subpart P" | OSHA | Safety section; trench safety |
| OSHA 1926.652 | Federal regulation | "OSHA 1926.652" | OSHA | Over-dig working space; underpinning rule |
| Oregon Construction Contractors Board (Oregon CCB) | State regulatory body | "Oregon CCB" / "Oregon Construction Contractors Board" | — | License verification |
| Oregon 811 / Oregon Utility Notification Center | State organization | "Oregon 811" | — | Utility locate requirement |

---

## Layer E — Local Authority Entities (Eugene-specific, new this pass)

| Entity | Type | Canonical Form | Source | Placement |
|---|---|---|---|---|
| City of Eugene Building Inspection Services | Government agency | "City of Eugene Building Inspection Services" | eugene-or.gov | Footing inspection section |
| Eugene eBuild | System / Platform | "eBuild" | eugene-or.gov | Inspection scheduling method |
| Lane County Land Management Division (LMD) | Government agency | "Lane County Land Management Division" | lanecounty.org | Permit section; unincorporated county |
| Lane County Building Safety | Program | "Lane County Building Safety" | lanecounty.org | Inspection scheduling |

**Contact entities (high-specificity trust signals):**
- City of Eugene Inspection Phone: **541-682-5283** (7:30am–3:30pm M–F; before 7am for same-day)
- Lane County Building Safety Phone: **541-682-4651** (48-hour advance notice required)

---

## Layer F — Soil / Environmental Entities (Eugene-specific, new this pass)

| Entity | Type | Canonical Form | Source | Validation | Placement |
|---|---|---|---|---|---|
| Malpass Clay | Soil type (local) | "Malpass clay" | BLM Technical Note 447 (primary federal) | VALIDATED_LOCAL | Eugene soil section — high salience |
| Willamette Valley | Region (geology) | "Willamette Valley" | Multiple | VALIDATED (Q188059) | Soil + season context |
| West Eugene Wetlands | Local geographic area | "West Eugene Wetlands" | BLM / eugene-or.gov | VALIDATED_LOCAL | Geographic context for Malpass clay |
| Missoula Floods | Historical event (geology) | "Missoula Floods" | USGS | VALIDATED (Q855090) | Origin of valley floor clay (mention briefly) |
| Cascadia Subduction Zone | Geologic feature | "Cascadia Subduction Zone" | USGS / TerraFirma | VALIDATED | Seismic context for foundation importance (brief mention) |
| Willamette Valley Wet Season (Oct–May) | Seasonal phenomenon | — | Practitioner sources | VALIDATED_LOCAL | Seasonal framing throughout |

**Key Eugene-specific soil finding (no-bedrock):** The Willamette Valley floor has NO significant bedrock. Rock excavation cost premiums (Central Oregon basalt) do not apply in Eugene. The primary soil challenge is Willamette Valley clay — not rock.

---

## Layer G — Foundation Type Entities

| Entity | Type | Canonical Form | Placement |
|---|---|---|---|
| Slab-on-Grade Foundation | Foundation type | "Slab-on-grade" / "Slab foundation" | Comparison table (col 1) |
| Crawl Space Foundation | Foundation type | "Crawl space foundation" | Comparison table (col 2); FAQ answer; NOTE: most common in Eugene |
| Full Basement Foundation | Foundation type | "Full basement" | Comparison table (col 3) |
| Stem Wall | Foundation sub-type | "Stem wall" | Slab types sub-note (Cojo Asphalt: monolithic vs stem wall is real choice in OR) |
| Monolithic Slab | Foundation sub-type | "Monolithic slab" | Brief mention in slab section |
| Post and Pier | Foundation type | "Post and pier" | Brief mention (Eugene homes: post/pier appears in older/rural; less common) |

**Eugene foundation type prevalence (from lanecountyhomes.net — ranking realtor blog, Oct 2024):**
- Most common: **Crawl space** (with cripple walls) — the default for most Eugene residential
- Second most common: Slab-on-grade (newer construction)
- Less common: Full basement (Oregon's mild climate reduces basement demand; high water table in west Eugene complicates it)
- Older/rural: Post and pier

---

## Layer H — Process/Technical Entities (this page)

| Entity | Type | Canonical Form | Source | Placement |
|---|---|---|---|---|
| Over-Dig / Working Space | Technical concept | "Over-dig" / "working space" | OSHA 1995 interpretation | Dedicated H2 section |
| 2-foot minimum working width | Specific measurement | "2-foot minimum working width" | OSHA 1926.652 carve-out | Over-dig section |
| Footing Inspection Sequencing | Process | "excavate → inspect → pour" | Eugene/LC building depts | Inspection section |
| Foundation Drain | Construction element | "Foundation drain" / "perimeter drain" | ORSC R405 | Drainage section |
| Waterproofing | Construction element | "Foundation waterproofing" | ORSC R406 | Brief mention |
| Vapor Retarder | Construction element | "Crawlspace vapor retarder" | ORSC R408 | Crawl space section |
| Underpinning | Safety requirement | "Underpinning" | OSHA 1926.652(b) | ADU section |
| Dewatering | Construction technique | "Dewatering" / "trash pump" | Practitioner sources | Eugene wet season section |
| UFER Ground / Grounding Electrode | Electrical (co-inspection) | "UFER grounding electrode" | Lane County building dept | Inspection section (brief — not D&D's scope, but tagged at footing inspection) |
| Geotechnical Report / Soils Report | Professional service | "Soils report" / "geotechnical investigation" | ORSC R403.1 / practitioner | FAQ answer |

---

## Co-Occurrence Analysis (from SERP competitor pages)

Entities appearing across 4+ of the 6 Eugene contractor pages reviewed:
- "Foundation excavation" (6/6) — mandatory
- "Lane County" (5/6) — mandatory
- "Eugene, Oregon" / "Eugene, OR" (6/6) — mandatory
- "CCB license" / license # (5/6) — mandatory
- "residential and commercial" (4/6) — use
- "free estimate" (5/6) — mandatory CTA
- "licensed and bonded" / "licensed, bonded, insured" (5/6) — mandatory
- "site preparation" (4/6) — mention as adjacent service
- "foundation" (6/6) — mandatory

**Entities appearing in 1–3 pages (differentiators):**
- Frost depth / footing depth: 0/6 (no competitor names it) — OWN IT
- Foundation type distinction (slab/crawl/basement): 0/6 — OWN IT
- FAQPage content: 1/6 (Eugene Dirt Works only) — OWN IT
- Pricing: 1/6 (equipment rental only) — OWN IT with real ranges
- Malpass clay: 0/6 — OWN IT
- Oregon811 / utility locate: 1/6 — OWN IT
- Inspection sequencing: 0/6 — OWN IT

---

## Entity Inventory File

See `entity-inventory.csv` in this folder. Canonical entities (D&D Land Works, David Deggelman, Oregon CCB #261742, Eugene, Springfield, Lane County, GeneralContractor schema type) reused verbatim from `../home/entity-inventory.csv` — not re-derived.
