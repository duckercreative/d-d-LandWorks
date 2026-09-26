# Entity Map — Trenching Services Eugene Oregon (`/trenching-services-eugene-oregon`)

**Prepared:** 2026-09-26 · **Method:** Koray 14-source adapted for excavation/Lane County, reusing canonical entities from all prior packs. Validation status follows `entity-validate` SKILL.md conventions.

---

## Layer 1 — Business Entity (reused verbatim from all prior packs)

| Entity | Type | Canonical Name | Validation | Where to Place |
|---|---|---|---|---|
| D&D Land Works | Organization / LocalBusiness | D&D Land Works | VALIDATED_LOCAL | H1, first paragraph, schema |
| David Deggelman | Person | David Deggelman | VALIDATED_LOCAL | About/trust section, schema |
| Oregon CCB #261742 | License | Oregon CCB #261742 | VALIDATED (CCB lookup) | First paragraph, trust section, schema |
| Oregon DEQ Certified | Certification | Oregon DEQ Certified | VALIDATED_LOCAL | Trust section (septic context) |

## Layer 2 — Service Entities (this page)

| Entity | Type | Canonical Name | Validation | Where to Place |
|---|---|---|---|---|
| Trenching Services | Service | Trenching Services | VALIDATED_NO_KG | H1, meta, first paragraph |
| Irrigation Trenching | Service | Irrigation Trenching | VALIDATED_NO_KG | H2 (irrigation depth), FAQ |
| Ditch Digging | Service | Ditch Digging (also: trench digging) | VALIDATED_NO_KG | H1/H2, related services section |
| Trench Digging | Service | Trench Digging | VALIDATED_NO_KG | H2, meta description |
| Utility Trenching | Service | Utility Trenching | VALIDATED_NO_KG | Cross-link to /utility-trenching-eugene-oregon |
| Septic Trenching | Service | Septic Trenching | VALIDATED_NO_KG | Brief mention, cross-link to /septic/ |
| Sprinkler Mainline | Service component | Sprinkler Mainline | VALIDATED_NO_KG | Irrigation section |
| Lateral Line | Service component | Lateral Irrigation Line | VALIDATED_NO_KG | Irrigation section |
| Drip Irrigation | Service component | Drip Irrigation / Micro-Tubing | VALIDATED_NO_KG | Irrigation section (brief) |

## Layer 3 — Location Entities (reused from prior packs)

| Entity | Type | Canonical Name | Validation | Notes |
|---|---|---|---|---|
| Eugene, Oregon | Place | Eugene, Oregon | VALIDATED (Wikidata Q79674) | Primary geo — H1, meta |
| Springfield, Oregon | Place | Springfield, Oregon | VALIDATED (Wikidata Q79703) | Secondary geo — body copy, meta |
| Lane County | Place | Lane County, Oregon | VALIDATED (Wikidata Q79635) | County-level area served |
| Willamette Valley | Place | Willamette Valley | VALIDATED (Wikidata Q840463) | Soil/climate context |
| Junction City | Place | Junction City, Oregon | VALIDATED_LOCAL | Service area mention |
| Cottage Grove | Place | Cottage Grove, Oregon | VALIDATED_LOCAL | Service area mention |

## Layer 4 — Oregon Technical / Regulatory Entities

| Entity | Type | Canonical Name | Validation | Notes |
|---|---|---|---|---|
| Oregon 811 | Organization / Service | Oregon 811 (Oregon Utility Notification Center) | VALIDATED (official site: oregon811.org) | Mandatory context for any trenching |
| ORS Chapter 757 | Regulation | ORS Chapter 757 (Oregon utility notification law) | VALIDATED | Legal basis for 811 requirement |
| Oregon CCB | Organization | Oregon Construction Contractors Board | VALIDATED | Licensing context |
| Lane County Land Management Division | Organization | Lane County Land Management Division | VALIDATED_LOCAL | Permit authority for ROW work |
| Lane County Public Works | Organization | Lane County Public Works | VALIDATED_LOCAL | Facility Permit authority |

## Layer 5 — Depth / Technical Entities (irrigation-specific — this page's differentiator)

| Entity | Depth Spec | Authority | Validation | Notes |
|---|---|---|---|---|
| Irrigation mainline burial depth (Willamette Valley) | 6–8 inches typical; 12 inches near freeze risk | OSU Extension / industry standard | VALIDATED_NO_KG — no Oregon state code minimum; standard practice based on 12" frost depth and mild Willamette Valley climate | **This is the page's single strongest technical asset — zero competitors state it** |
| Irrigation lateral burial depth | 4–6 inches typical | Industry standard (no code minimum) | VALIDATED_NO_KG | Shallower than mainline; enough to protect from shovel/aerator damage |
| Drip/micro tubing burial depth | Surface or 2–4 inches | Industry standard | VALIDATED_NO_KG | Minimal depth; often under mulch rather than fully buried |
| Lane County frost depth | 12 inches | OPSC 609.1 (reused from utility-trenching-eugene-oregon pack) | VALIDATED | Willamette Valley freeze: mild; irrigation pipes typically drained for winter rather than buried below frost |
| OSHA 5-foot shoring rule | Shoring/sloping required when trench exceeds 5 feet depth | 29 CFR 1926 Subpart P | VALIDATED | Most irrigation trenches (4–12 inches deep) are entirely exempt from this rule |
| Oregon 811 notification window | 2 business days minimum before digging; ticket valid 30 days | OAR 952-001-0010(23) | VALIDATED (updated 2025/2026 from 45 days) | Applies to ALL trenching, including irrigation — not just utility work |

## Layer 6 — Equipment Entities

| Entity | Type | Canonical Name | Validation | Notes |
|---|---|---|---|---|
| Chain trencher | Equipment | Chain Trencher | VALIDATED_NO_KG | Primary trenching equipment for narrow, deep trenches |
| Walk-behind trencher | Equipment | Walk-behind Trencher | VALIDATED_NO_KG | Smaller residential irrigation jobs |
| Mini excavator | Equipment | Mini Excavator | VALIDATED_NO_KG | Used for wider trenches; less precise for irrigation but good for ditch digging |
| Vibratory plow | Equipment | Vibratory Plow | VALIDATED_NO_KG | Cojo blog names this as preferred for established lawns; minimal turf damage |
| Skid steer | Equipment | Skid Steer | VALIDATED_NO_KG | Used for ditch digging and larger trenching |

## Layer 7 — Soil / Climate Entities (Lane County specific)

| Entity | Type | Canonical Name | Validation | Notes |
|---|---|---|---|---|
| Malpass silty clay loam | Soil type | Malpass Silty Clay Loam | VALIDATED_NO_KG (OSU Extension soil classification) | Dominant soil type in Willamette Valley floor; moisture-retaining; wet season performance implications |
| Willamette Valley wet season | Climate feature | Oregon Wet Season (Oct–Apr) | VALIDATED_NO_KG | Affects open trench stability; saturated clay complicates compaction |
| Willamette Valley dry season | Climate feature | Oregon Dry Season (May–Sep) | VALIDATED_NO_KG | Optimal trenching window; clay cuts cleanly |

## Layer 8 — Cost Reference Entities (from SERP research)

| Entity | Source | Figure | Validation |
|---|---|---|---|
| Oregon construction labor premium | BLS OEWS 2025 / CostFlowAI | Operating Engineers: $38.11/hr mean hourly wage; Oregon runs ~20% above US median | VALIDATED (BLS OEWS 2025 per CostFlowAI Oregon Excavation Calculator) |
| Standard trench cost (open dirt) | Oregon Drain Cleaning + DEVCO | $12–$25/ft standard; $5–$12/ft national baseline | VALIDATED_NO_KG — two Oregon-relevant data points |
| Rock/deep trench cost premium | Oregon Drain Cleaning | $30–$60+ per foot | VALIDATED_NO_KG |
| Mobilization minimum | Cojo Asphalt blog | $500–$1,500+ minimum residential callout | VALIDATED_NO_KG — regional blog data |
| Irrigation trenching range | Cojo Asphalt blog | $8–$40+ per linear foot (trenching portion only) | VALIDATED_NO_KG |
| Hardscape cost differential | prior pack / industry pattern | Concrete and asphalt add meaningfully to base trench price; no Lane-County-specific figure | VALIDATED_NO_KG |

## Co-occurrence Layer D — Entity Frequency Analysis (from competitor pages)

Entities appearing in 4+ of the 8 competitor pages checked across this and prior packs:
- Lane County [7/8] — mandatory
- Eugene, Oregon [7/8] — mandatory
- trenching [8/8] — mandatory
- utility [6/8] — recommended (cross-link context)
- drainage [5/8] — recommended (scope disambiguation)
- Oregon 811 [1/8] — differentiator (cited by ONLY Cojo Asphalt blog; zero local Eugene contractor pages)
- irrigation [2/8] — differentiator (Braun GBP review mentions sprinklers; Cojo blog)
- cost/pricing [2/8] — differentiator (only Eugene Dirt Works for equipment rental; Cojo for trenching)

## Entity Inventory Cross-Reference

See `entity-inventory.csv` (not created for this pack — entity inventory is carried forward from the utility-trenching-eugene-oregon pack's entity-inventory.csv, extended with irrigation/ditch-digging-specific entities above).

---

## Validation Notes

- **No Oregon state code minimum depth for irrigation trenching** was found after checking OPSC (Oregon Plumbing Specialty Code) and the Lane County Land Management Division "Trenching for Utilities" page. Unlike utility lines (water, sewer, gas, electrical), irrigation lines have no mandated minimum burial depth in Oregon. Standard industry practice (6–8 inches for mainline, 4–6 for laterals) is what governs. This must be stated honestly — do not invent a code citation.
- **Willamette Valley irrigation frost rule**: In the Willamette Valley (Lane County), the practical rule is that irrigation systems must be drained or blown out before any hard freeze — not buried below the frost line (unlike water service lines, which MUST be 24 inches deep per OPSC 609.1). This distinction is a real, citable, Eugene-specific technical point.
- **OSHA shoring exemption for irrigation**: Most irrigation trenches (4–12 inches deep) fall entirely below the 5-foot shoring threshold of OSHA 29 CFR 1926 Subpart P. This is reassuring context for homeowners worried about safety; it applies to contractors, not DIYers, but is worth naming.
