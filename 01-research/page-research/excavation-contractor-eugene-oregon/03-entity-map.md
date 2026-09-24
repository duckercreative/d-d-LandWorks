# Entity Map — Excavation Contractor Eugene Oregon (`/excavation-contractor-eugene-oregon`)

**Adapted from:** `../excavation/03-entity-map.md` — see that file for the full Koray 14-source entity map and co-occurrence matrix. This file lists the priority entities for the location-specific landing page.

---

## Primary Business Entity (salience 1.0)

| Entity | Type | Status | Notes |
|---|---|---|---|
| D&D Land Works | LocalBusiness / GeneralContractor | VALIDATED_LOCAL | `@type: GeneralContractor` confirmed in homepage pack |
| David Deggelman | Person | VALIDATED_LOCAL | Owner — schema `Person`, license holder |
| Oregon CCB #261742 | License | VALIDATED_LOCAL | Canonical trust signal — appears in first paragraph |

---

## Location Entities (salience 0.9 — location page requirement)

| Entity | Type | Status | Notes |
|---|---|---|---|
| Eugene, Oregon | City | VALIDATED | Wikidata Q1397 — `areaServed` primary |
| Lane County, Oregon | County | VALIDATED | `areaServed` secondary |
| Springfield, Oregon | City | VALIDATED | Included in service area |
| Willamette Valley | Region | VALIDATED | Geographic context entity |

---

## Service Entities (salience 0.8)

| Entity | Type | Notes |
|---|---|---|
| Excavation | Service | Primary service entity on this page |
| Foundation Excavation | ServiceType | Named project type |
| Trenching and Backfill | ServiceType | Named project type |
| Utility Excavation | ServiceType | Named project type |
| Drainage Excavation | ServiceType | Named project type |
| Septic Excavation | ServiceType | Named project type — DEQ Certified signal |
| Pond Excavation | ServiceType | Low competitor coverage — named by only 2/10 |

---

## Process / Technical Entities (salience 0.6)

| Entity | Type | Notes |
|---|---|---|
| Cut and Fill | Process | All Dirt-validated inclusion |
| Backfill and Compaction | Process | All Dirt-validated inclusion |
| Rock Removal | Process | Cost-overrun entity — honest pricing signal |
| Erosion Control | Process | DEQ 1200-C stormwater tie-in |
| Site Access Roads | Process | All Dirt-validated inclusion |
| Malpass Silty Clay Loam | SoilType | Eugene/Lane County-specific — USDA Web Soil Survey; the location-page-unique soil entity |

---

## Authority / Regulatory Entities (salience 0.7)

| Entity | Type | Notes |
|---|---|---|
| Oregon Utility Notification Center / Oregon811 | GovernmentOrganization | digsafelyoregon.com — 0/10 competitors cite; highest-leverage trust entity |
| Oregon Construction Contractors Board (CCB) | GovernmentOrganization | Issues CCB #261742 — mandatory first-paragraph signal |
| Lane County Land Management Division (LMD) | GovernmentOrganization | Issues Grading and Fill Permit |
| OSHA 1926 Subpart P | Regulation | Trench safety — reused from homepage pack |
| Oregon DEQ | GovernmentOrganization | DEQ Certified (septic) — David Deggelman |
| Oregon Water Resources Department (OWRD) | GovernmentOrganization | Pond excavation permitting — 9.2 acre-foot threshold |

---

## Equipment Entities (salience 0.5)

| Entity | Notes |
|---|---|
| Excavator | Generic category — no fabricated brand |
| Dozer / Bulldozer | Generic category |
| Skid Steer | Generic category |
| Compactor | Generic category |

---

## Co-occurrence Requirements (mandatory — from Matrix D in base pack)

Entities that appear on ≥7 of 10 competitor pages for "excavation contractor eugene or":
- Foundation excavation ✓ (8/10)
- Utility trenching ✓ (7/10)
- Site preparation ✓ (8/10)
- Grading ✓ (10/10)

Entities that appear on 0-2 of 10 competitor pages (unique opportunity):
- Oregon811 / utility locates ✓ (0/10)
- Pond excavation ✓ (2/10)
- Rock removal cost specifics ✓ (0/10)
- Malpass clay soils ✓ (0/10 — location-page unique)

---

## Sources

See `../excavation/03-entity-map.md` for the full Koray 14-source entity inventory. USDA Web Soil Survey (websoilsurvey.sc.egov.usda.gov) for Malpass soil designation in Lane County.
