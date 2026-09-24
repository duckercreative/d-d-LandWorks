# Entity Map — Septic Installation Lane County Oregon (`/septic-installation-lane-county-oregon`)

**Prepared:** 2026-09-24 · Adapted from `../septic/03-entity-map.md` with install-specific, Lane County-wide, and rural-property focus. Repair-only entities and distressed-buyer entities that belong on the general `/septic-installation-lane-county-oregon/` page are marked as cross-page entities.

---

## Priority 1 — Must Appear (business, service, location)

| Entity | Type | Placement | Notes |
|---|---|---|---|
| D&D Land Works | Organization / LocalBusiness | H1, hero, first paragraph, schema | Business entity anchor |
| David Deggelman | Person | First paragraph, E-E-A-T section | Owner name; E-E-A-T signal |
| Oregon CCB #261742 | Credential (Regulatory) | Hero or first paragraph | Mandatory on all pages |
| DEQ Certified / DEQ Certification | Credential (Regulatory) | H1, hero, credential section | Core differentiator — verified in business-info.md |
| Septic System Installation | Service | H1, schema `Service` type, throughout | Primary service entity |
| Lane County, Oregon | Place | H1, meta, opening, `areaServed` | Primary geographic entity |
| Eugene, Oregon | Place | H2 sections, `areaServed`, FAQ | Largest city; primary keyword target |
| Springfield, Oregon | Place | Opening, areaServed, body | Second-largest city; topical map secondary keyword |

---

## Priority 2 — High-Value (regulatory, system types, process)

| Entity | Type | Placement | Notes |
|---|---|---|---|
| Oregon DEQ (Oregon Department of Environmental Quality) | Government Agency | Credential section, permit section | Issues DEQ certifications; oversees onsite wastewater |
| OAR Chapter 340, Division 71 | Regulation | Credential section, permit process section | Oregon's onsite wastewater rules — confirmed correct citation |
| OAR 340-071-0120 | Specific Rule | Permit section | Establishes Lane County as DEQ's agent for septic permitting |
| Lane County Subsurface Sanitation Program | Government Program | Permit process section | The actual office that receives applications and issues permits |
| Lane County Land Management Division | Government Department | Permit section | Parent department of the Subsurface Sanitation Program |
| ePASS portal | Government Tool | Permit process section | Lane County's online permit application system |
| Conventional Septic System | System Type | System-type section, comparison table | Standard gravity-fed system; lower cost; requires suitable soil |
| Alternative Treatment Technology (ATT) | System Type | System-type section, comparison table | DEQ umbrella term for non-conventional systems |
| Sand Filter (intermittent / recirculating) | System Type | System-type comparison table | ATT subtype; $7,000–$25,000+ |
| Aerobic Treatment Unit (ATU) | System Type | System-type comparison table | ATT subtype; $10,000–$20,000; requires ongoing service contract |
| Mound System | System Type | System-type comparison table | ATT subtype; used with high water table or clay soil |
| Pressure-Dosed System | System Type | System-type comparison table | ATT variant; distribution method |
| Capping Fill System | System Type | System-type comparison table | Oregon-specific ATT listed in DEQ system types |
| Septic Tank | System Component | What's included section, process section | Physical tank — concrete or poly; size varies by bedroom count |
| Drainfield / Leach Field | System Component | What's included section, process section | The absorption area; most area-sensitive component |
| Distribution Box (D-box) | System Component | What's included section | Routes effluent from tank to drainfield laterals |
| Effluent | Technical Term | System explanation | The liquid waste leaving the septic tank |
| Subsurface Drip Irrigation | System Component | ATT section | Alternative distribution method for some ATT systems |

---

## Priority 3 — Process & Site Evaluation Entities

| Entity | Type | Placement | Notes |
|---|---|---|---|
| Site Evaluation (Test Pit Evaluation) | Process Step | Permit process section | Required first step before any septic permit |
| Test Pits | Process Component | Site evaluation sub-section | 2-3 pits required; 50-100 ft apart; 2ft x 4ft x 5ft each |
| Perc Test (Percolation Test) | Colloquial Term | FAQ / explanation | Colloquial term homeowners use; Oregon uses "site evaluation" officially |
| Soil Morphology / Soil Profile | Technical Concept | Site evaluation section | What Lane County examines in the test pits |
| High Water Table | Site Condition | System-type decision section | Common ATT trigger in Lane County valley floor |
| Willamette Valley Clay Soil | Regional Entity | System-type decision section | Forces ATT systems on many Lane County properties |
| Malpass Silty Clay Loam | Specific Soil Unit | System-type or Eugene-area specifics section | Dominant soil on Lane County valley floor (USDA Web Soil Survey) |
| Drainfield Protection / Sequencing Rule | Regulatory Requirement | Post-install / process section | Area must not be cut, filled, or paved once proposed — cross-link to site-prep page |
| Setback Requirements | Regulatory Requirement | Rural property section | Distances required between septic and wells, structures, property lines |
| Well Setback | Regulatory Requirement | Rural property FAQ | Specific to rural Lane County properties with on-site wells |
| Oregon Utility Notification Center (Oregon 811) | Regulatory Entity | Pre-installation section | D&D calls 811 on every dig — cross-mention from excavation pages |

---

## Priority 4 — Credential & Trust Entities

| Entity | Type | Placement | Notes |
|---|---|---|---|
| Oregon Construction Contractors Board (CCB) | Regulatory Body | Credential/trust section | Issues CCB #261742 — separate from DEQ |
| DEQ Sewage Disposal Service Business License | Credential Type | Credential section | The business license category (Installer / Pumper / Combined) — general Oregon fact, not specific claim about David's tier |
| Installer Certification (Individual) | Credential Type | Credential section | Individual certification required before DEQ business license; 2-day Chemeketa course; 70% pass threshold |
| Maintenance Provider Certification | Credential Type | Credential section (as footnote) | Separate credential for servicing ATT systems — relevance depends on David's actual scope |
| Chemeketa Community College | Educational Institution | Credential section | Where the DEQ Installer Certification course is commonly delivered |
| DEQ Business License Search Tool | Government Tool | Trust section | oregon.gov/deq/residential/pages/onsite-search.aspx — link directly |
| Oregon CCB License Lookup | Government Tool | Trust section | CCB license verification link — consistent with homepage pattern |
| ORS 105.465 | Statute | Cross-page only | Seller's Property Disclosure — belongs on repair/general page, not install page |
| EducationalOccupationalCredential (schema.org) | Schema Type | Schema block | Already used in home-content.md for DEQ credential — reuse pattern |

---

## Priority 5 — Location / Service-Area Entities (Lane County communities)

| Entity | Type | Placement | Notes |
|---|---|---|---|
| Cottage Grove, Oregon | Place | Service area section | Rural community south of Eugene; heavy septic dependence |
| Creswell, Oregon | Place | Service area section | Small rural community; limited sewer access |
| Veneta, Oregon | Place | Service area section | Rural west Lane County; All Dirt is based here |
| Junction City, Oregon | Place | Service area section | Farming community north of Eugene |
| Coburg, Oregon | Place | Service area section | Small community; limited sewer infrastructure |
| Lowell, Oregon | Place | Service area section | Rural lakeside community southeast of Eugene |
| Oakridge, Oregon | Place | Service area section | Mountain community; likely no city sewer at all |
| Florence, Oregon | Place | Service area section | Coastal community; unique coastal soil conditions |
| Unincorporated Lane County | Place | Opening / rural section | Framing for properties outside any city's UGB |
| Urban Growth Boundary (UGB) | Planning Entity | Sewer-vs-septic section | Properties outside UGB typically cannot connect to city sewer |

---

## Priority 6 — Cost & Project-Specific Entities

| Entity | Type | Placement | Notes |
|---|---|---|---|
| New Construction Septic System | Project Type | New construction section | Distinct from retrofit/replacement — raw land, new build |
| ADU (Accessory Dwelling Unit) | Project Type | ADU section | Oregon ADU law creates new demand for septic capacity questions |
| Septic Tank Size (1,000/1,500 gallon) | Technical Spec | Cost/scope section | Common residential sizes; bedroom count determines required size |
| Drainfield Square Footage | Technical Spec | Cost/scope section | System design determines required drainfield area |
| Building Permit (combined with septic permit) | Related Permit | New construction section | Often applied for simultaneously in Lane County new builds |
| Electrical Permit (for ATT pump systems) | Related Permit | ATT system section | Some ATT systems require an electrical permit |
| Oregon Labor Premium (~20% above national) | Cost Context | Cost section | BLS data; explains why Oregon pricing is above national averages |
| Eugene-area septic install cost data (350 projects, avg $4,173–$5,963) | Cost Data | Cost section | Homeyou-sourced; likely skewed toward conventional systems |

---

## Cross-Page Entities (belong on `/septic-installation-lane-county-oregon/`, not here)

| Entity | Reason excluded from this page |
|---|---|
| Repair vs. Replace Decision | This is the install page — distressed buyers go to the repair page |
| Signs of Septic System Failure | Distressed-buyer content belongs on repair page |
| ORS 105.465 / Home-Sale Inspection | Repair/general page topic |
| DEQ Pumping Frequency Guidance | Maintenance topic; belongs on repair page; also D&D doesn't pump |
| Septic pumping companies (Oregon Septic, Best Septic) | Competitors for pumping service D&D doesn't offer |

---

## Entity Density Target

Per this project's established methodology: roughly 1-2 entity "citations" per 200 words of body copy. The regulatory + credential entity cluster (DEQ, OAR 340-071, Lane County Subsurface Sanitation, Installer Certification, EducationalOccupationalCredential schema) is this page's heaviest single cluster — concentrate it in a dedicated credential/permit section rather than distributing thinly across the entire page.
