# Entity Map — Driveway Excavation & Grading Oregon
## Page: `/driveway-excavation-grading-oregon` | D&D Land Works
**Prepared:** 2026-09-26

---

## Business Entity

| Field | Value |
|---|---|
| Name | D&D Land Works |
| Schema type | GeneralContractor |
| Owner | David Deggelman |
| CCB License | #261742 |
| DEQ Certification | Septic install/repair |
| Phone | 541-401-8726 |
| Email | david@ddlandworks.com |
| Service type | Excavation, grading, site prep |
| Wikidata | No Q-number found — VALIDATED_LOCAL |

---

## Service Entity (This Page)

| Field | Value |
|---|---|
| Service name | Driveway Excavation and Grading |
| Schema type | Service |
| serviceType | Driveway Excavation; Driveway Grading; Gravel Driveway Repair; Gravel Driveway Installation |
| areaServed | Eugene OR; Springfield OR; Lane County OR; Willamette Valley OR |
| provider | D&D Land Works |
| Parent service | /excavation-contractor-eugene-oregon |

---

## Geographic Entities

| Entity | Type | Validation | Notes |
|---|---|---|---|
| Eugene, Oregon | City | VALIDATED | Primary service area; seat of Lane County |
| Springfield, Oregon | City | VALIDATED | Adjacent to Eugene; part of Eugene metro |
| Lane County, Oregon | County | VALIDATED | Primary service jurisdiction |
| Willamette Valley | Geographic region | VALIDATED | Broader regional identifier; soil + climate context |
| Junction City, Oregon | City | VALIDATED | Lane County city; cojo cost data uses this for Lane County benchmarks |
| Cottage Grove, Oregon | City | VALIDATED | Southern Lane County |
| Creswell, Oregon | City | VALIDATED | Lane County satellite city |
| Veneta, Oregon | City | VALIDATED | Western Lane County |

---

## Material Entities

| Entity | Type | Validation | Use |
|---|---|---|---|
| 3/4 minus crushed quarry rock | Material | VALIDATED_LOCAL (Lane Forest Products) | Standard Oregon driveway surface course; use this term |
| 2-inch minus crushed rock | Material | VALIDATED_LOCAL | Base course term |
| Road base / CSBC | Material | VALIDATED_LOCAL | Interchangeable with 2-inch minus; use both terms |
| Crusher run | Material | VALIDATED | National term; used in some Oregon contractor content |
| Geotextile fabric / road fabric | Material | VALIDATED_LOCAL | Woven separator layer over clay subgrade |
| Pit run | Material | VALIDATED | Common east of Cascades; less common in Lane County — note but don't lead with |
| Pea gravel | Material | VALIDATED | Wrong material for driveways — explicitly warn against |
| River rock | Material | VALIDATED | Rounded; wrong for driveways — warn against |

---

## Regulatory Entities

| Entity | Type | Validation | Detail |
|---|---|---|---|
| Oregon CCB (Contractors Board) | Regulatory body | VALIDATED | CCB #261742 — D&D's license |
| ccblookup.com | Reference URL | VALIDATED | Public license verification tool |
| Oregon 811 | Notification service | VALIDATED | Dig Safely Oregon; 2 business days notice required |
| Oregon Utility Notification Center (OUNC) | Organization | VALIDATED | Governs Oregon 811; ORS Chapter 757 |
| digsafelyoregon.com | Reference URL | VALIDATED | Official Oregon 811 online notification |
| ORS Chapter 757 | Statute | VALIDATED | Governing authority for underground utility notification |
| ORS 374.305(1) | Statute | VALIDATED | Oregon state highway approach permit requirement |
| ODOT (Oregon Dept of Transportation) | Agency | VALIDATED | Approach permits for state highway frontage |
| Form 734-2680 | Form | VALIDATED | ODOT highway approach permit application |
| Lane County ROW Access Connections Permit | Permit type | VALIDATED | Required for new/modified approach to county road; $450 permanent |
| Lane Code Chapter 15 | Code | VALIDATED | Governing code for Lane County road approach standards |
| Lane County Public Works | Agency | VALIDATED | Administers approach permits; 3050 N. Delta Hwy, Eugene |
| OAR 952-001-0010(23) | Administrative rule | VALIDATED | Oregon 811 ticket validity; reduced to 30 days |

---

## Soil and Environmental Entities

| Entity | Type | Validation | Detail |
|---|---|---|---|
| Malpass silty clay loam | Soil type | VALIDATED (USDA Web Soil Survey) | Dominant Valley floor soil in Eugene/Lane County |
| Hydrologic Soil Group D | Soil classification | VALIDATED | Very slow water transmission; high shrink-swell |
| Willamette Valley wet season | Seasonal pattern | VALIDATED | Oct–Apr; 47" annual precipitation in Eugene |
| Lane County frost zone | Climate classification | VALIDATED | Zone 8a/8b; frost heave secondary to drainage failure |
| Mud pumping / pumping fines | Failure mode | VALIDATED_LOCAL (contractor sources) | Clay pumping into base rock when no geotextile |

---

## Process / Equipment Entities

| Entity | Type | Validation | Notes |
|---|---|---|---|
| Motor grader | Equipment | VALIDATED | Primary grading equipment |
| Box blade | Equipment | VALIDATED | DIY-accessible; referenced in DIY vs. hire guidance |
| Plate compactor | Equipment | VALIDATED | Compaction tool; referenced in DIY guidance |
| Culvert | Infrastructure | VALIDATED | Common requirement on rural Oregon driveways |
| Crown | Driveway feature | VALIDATED_LOCAL | Center-high surface profile that sheds water; use this term |
| Ditching | Process | VALIDATED_LOCAL | Roadside drainage channels; frequently missing on failed driveways |
| Compaction (lifts) | Process | VALIDATED | Layer-by-layer compaction method; mention for authority |
| Subgrade | Construction term | VALIDATED | Native soil below base course |

---

## Co-Occurrence Analysis (Frequency in Top Competitor Pages)

Entities appearing in 5+ of 8 analyzed competitor pages are **mandatory**.
Entities appearing in 3–4 are recommended. Under 3 = differentiator.

| Entity | Frequency | Status |
|---|---|---|
| Gravel driveway | 8/8 | MANDATORY |
| Eugene / Oregon location | 5/8 | MANDATORY |
| CCB license | 5/8 | MANDATORY |
| Excavation | 6/8 | MANDATORY |
| Grading | 7/8 | MANDATORY |
| Repair / regrading | 6/8 | MANDATORY |
| Free estimate / free quote | 8/8 | MANDATORY |
| Geotextile fabric | 2/8 | DIFFERENTIATOR |
| Depth specs (6–12 inch) | 1/8 | **MAJOR DIFFERENTIATOR** |
| Material specs (3/4 minus) | 2/8 | DIFFERENTIATOR |
| Oregon 811 | 0/8 | **UNCLAIMED ENTITY** |
| Permit (Lane County / ODOT) | 0/8 | **UNCLAIMED ENTITY** |
| Malpass clay | 0/8 | **UNCLAIMED ENTITY** |
| Wet season / seasonal scheduling | 0/8 | **UNCLAIMED ENTITY** |
| Culvert | 2/8 | DIFFERENTIATOR |
| Crown | 1/8 | **MAJOR DIFFERENTIATOR** |
| Mud pumping / pumping fines | 0/8 | **UNCLAIMED ENTITY** |
| Pricing ranges | 1/8 | **MAJOR DIFFERENTIATOR** |

---

## Internal Link Architecture Entities (Pages to Link To/From)

| Target Page | Relationship | Anchor Text |
|---|---|---|
| /excavation-contractor-eugene-oregon | Parent service hub | "excavation contractor in Eugene" |
| /drainage-installation-eugene-oregon | Adjacent service — drainage after grading | "driveway drainage repair" |
| /utility-trenching-eugene-oregon | Adjacent service | "utility trenching for shop or ADU" |
| /services/septic/ | Adjacent service (site prep + driveway work often paired) | "septic installation" |

---

## Wikidata Validation Notes

- **GeneralContractor** (schema.org/GeneralContractor): Valid schema.org type; appropriate for D&D Land Works. No Wikidata Q-number for D&D as a local entity — VALIDATED_LOCAL status.
- **Eugene, Oregon**: Q44189 (confirmed Wikidata) — use in sameAs if needed for local entity schema
- **Lane County, Oregon**: Q486761 (confirmed Wikidata)
- **ODOT**: Q1030060 (confirmed Wikidata)
- **3/4 minus gravel / crushed quarry rock**: No Wikidata Q-number for the specific material term — VALIDATED_LOCAL based on Lane Forest Products usage. Not a Wikidata entity; use as-is in content without sameAs claim.
