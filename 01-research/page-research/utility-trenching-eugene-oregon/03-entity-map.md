# Entity Map — Utility Trenching Eugene Oregon (`/utility-trenching-eugene-oregon`)

**Prepared:** 2026-09-25
**Parent pack:** `../utility-excavation/03-entity-map.md`

All canonical business/location/certification entities (D&D Land Works, David Deggelman, Oregon CCB #261742, Oregon DEQ, Lane County, Eugene, Springfield, Willamette Valley, GeneralContractor/Service schema decisions) reused verbatim from prior packs. Core utility entities (Water Service Line, Sewer Lateral, Underground Gas Piping, Underground Electrical Conduit, Joint Trench, Tracer Wire) reused from the parent utility-excavation pack with verification status confirmed by live research this session.

This file adds the location-page-specific entity extensions: Eugene/Lane County authority entities, ADU demand entities, utility company entities, and the co-occurrence frequency table from the 5 competitor pages directly fetched this session.

---

## Layer A — Reused Canonical Entities (do not re-derive)

D&D Land Works, David Deggelman, Oregon CCB #261742, Oregon DEQ certification, Lane County, Eugene, Springfield, Willamette Valley — reused verbatim from `../home/entity-inventory.csv`. Oregon811/Oregon Utility Notification Center and OSHA 1926 Subpart P reused from `../excavation/entity-inventory.csv`.

---

## Layer B — Core Utility Service Entities (reused from parent pack, verified this session)

| Entity | Depth/spec figure | Code Citation | Verification |
|---|---|---|---|
| Water Service Line | 24" below grade | OPSC 609.1 | VERIFIED — Lane County official page, fetched this session |
| Sewer Lateral | 12" minimum cover, ¼"/ft slope | OPSC 718.1 | VERIFIED — Lane County official page |
| Underground Gas Piping | 18" standard, 8" outdoor appliance lines | ORSC G2415.12 / G2415.12.1 | VERIFIED — Lane County official page |
| Underground Electrical Conduit | 24" direct-burial / 18" PVC / 6" RMC | NEC Table 300.5 | VERIFIED — Oregon OESC adopts NEC with no depth amendments |
| Communications/Fiber Conduit | No Oregon state-code minimum found | ISP-specific | NOT_FOUND — honest gap, same as parent pack |
| Joint Trench | Multiple utilities, code-permitted | OPSC 720.1 (water/sewer separation) | VERIFIED — Lane County official page |
| Tracer Wire | Blue 14AWG water / Green 14AWG sewer / Yellow 18AWG gas | Lane County standard | VERIFIED — Lane County official page |

---

## Layer C — New Location-Page Entities (extensions for this page)

| Entity | Type | Why it belongs on this page | Placement |
|---|---|---|---|
| Eugene Water & Electric Board (EWEB) | Local utility provider | Water/electric service coordination; Wikipedia entity (appears organically) | Coordination section — "who contacts the utility company" |
| Springfield Utility Board (SUB) | Local utility provider | SUB serves Springfield and eastern Eugene metro | Coordination section alongside EWEB |
| NW Natural | Regional gas utility | Gas line activation process; confirmed statewide presence | Gas line section; coordination role |
| Oregon Utility Notification Center (OUNC) | Authority entity | Governing body behind OR811; ORS Chapter 757 | OR811 section — full name for schema/citation credibility |
| ORS Chapter 757 | Legal authority | Oregon law requiring 811 notification | OR811 section (one inline reference) |
| OAR 952-001-0010(23) | Regulatory amendment | The 2025/2026 rule that reduced ticket life to 30 days | OR811 section — current, differentiating |
| Lane County Public Works | Issuing agency | Issues ROW Facility Permits; 3050 N. Delta Hwy, Eugene | Permit section |
| Oregon ADU Law (SB 1051 + HB 2001) | Legislative entity | Demand driver for utility trenching; well-documented | Project types section — "ADU utility connections" |
| Malpass Silty Clay Loam | Soil entity | Lane County valley-floor soil; affects timing and cost | Seasonal/Eugene-specific section |
| Willamette Valley Wet Season | Climate entity | Oct–Apr rain; affects scheduling; zero-competitor coverage | Scheduling section — timing guidance |
| Lane County Frost Depth (12") | Local specification | Drives the 24" water line minimum; confirmed OPSC 609.1 | Depth table header/footnote |
| Oregon Plumbing Specialty Code (OPSC) | Code authority | OPSC 609.1 (water), 718.1 (sewer), 720.1 (separation) | Depth table citations |
| Oregon Residential Specialty Code (ORSC) | Code authority | ORSC G2415.12 (gas) | Depth table citations |
| National Electrical Code (NEC) Table 300.5 | Code authority | Underground burial depths; Oregon OESC-adopted | Depth table citations |
| Oregon Electrical Specialty Code (OESC) | Code authority | Oregon adopts NEC with no depth amendments (confirmed) | Depth table footnote |
| Oregon Construction Contractors Board (CCB) | Licensing authority | CCB #261742; verification at ccblookup.com | Hero/first paragraph |
| Oregon DEQ | Certification authority | DEQ cert relevant for sewer lateral → septic connections | Trust section |

---

## Layer D — Co-occurrence Frequency Table

From the 5 competitor pages directly fetched this session (McKenzie Excavating, Eugene Dirt Works, Oregon Drain Cleaning, Buzz Trenching, Cojo Asphalt) plus the 4 named local competitors checked:

| Entity | Frequency (of 9 checked) | Status for D&D page |
|---|---|---|
| "Utility trenching" (generic mention) | 7/9 | Table stakes |
| Water line / sewer line (named specifically) | 5/9 | Table stakes |
| Electrical conduit named | 3/9 | Competitive parity |
| Gas line named | 2/9 | Differentiator |
| Burial depth figures (any utility) | 1/9 (cojoasphalt only) | **Zero-local-competitor differentiator** |
| Oregon811 / utility locate (substantive) | 2/9 | Differentiator |
| Joint trenching (named, explained) | 0/9 | **Absolute zero — first-mover** |
| Tracer wire requirements | 0/9 | **Absolute zero — first-mover** |
| ADU utility connections | 0/9 | **Absolute zero — first-mover** |
| Oregon811 ticket life (30 days) | 0/9 | **Absolute zero — regulatory update** |
| Lane County frost depth | 0/9 | **Absolute zero** |
| Lane County permit scenarios | 0/9 | **Absolute zero** |
| Permit by scenario (ROW vs. private) | 0/9 | **Absolute zero** |
| Willamette Valley seasonal timing | 0/9 | **Absolute zero** |
| Schema markup (any type) | 0/9 | **Absolute zero — complete first-mover** |
| EWEB / SUB named specifically | 1/9 (cojoasphalt.com Oregon context) | Differentiator |
| CCB number on page | 2/9 (Eugene Dirt Works, Cojo) | Competitive parity |
| DEQ certification mentioned | 0/9 | **Absolute zero — D&D differentiator** |

Any entity at 7+/9 is table stakes — we must cover it. The 0/9 entities are this page's genuine differentiators.

---

## Validation Gate

All Layer B entities carry VERIFIED status from the Lane County LMD official page (fetched this session). The Communications/Fiber Conduit depth figure carries NOT_FOUND status — same as parent pack, explicitly flagged rather than filled with an invented number. All Layer C entities are either verifiable government/authority entities or well-documented legal references — no ambiguous or low-confidence entities added.

**Entity requiring David confirmation before publishing:**
- Whether D&D has performed gas-line trenching jobs — flag for David before stating gas trenching as a current demonstrated service (same caveat as parent utility-excavation pack §6)
- Whether D&D has performed joint trenching jobs — same flag
