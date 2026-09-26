# Oregon & Lane County Authority Signals — Utility Trenching Eugene Oregon

**Page:** `/utility-trenching-eugene-oregon`
**Verified:** 2026-09-25
**Source:** Live research this session — all signals verified directly via WebFetch or WebSearch against official sources

This file extends `../utility-excavation/07-oregon-authority.md`. The canonical depth figures, Oregon811 data, and code citations from that pack are re-verified here with current session data and expanded with Lane County permitting detail, ADU demand context, and utility company process specifics that the parent pack flagged as unconfirmed.

---

## §1 — Burial Depth by Utility Type (Lane County, Verified)

Primary source: Lane County LMD / Building Safety Division — "Trenching for Utilities" official guidance page
URL: https://www.lanecountyor.gov/government/county_departments/public_works/land_management_division/building_safety/common_building_topics/trenching_for_utilities
**Fetched directly this session. Use as-is for all content.**

| Utility | Required Depth | Code Citation | Notes |
|---|---|---|---|
| Water service line | **24" below grade** | OPSC 609.1 | Lane County frost depth = 12"; rule = 12" below frost depth = 24" total |
| Sanitary sewer lateral | **12" minimum cover** above pipe | OPSC 718.1 | Must slope ¼" per foot toward septic/sewer main |
| Gas piping — standard residential | **18" below grade** | ORSC G2415.12 | Applies to standard gas service lines |
| Gas piping — portable outdoor appliances | **8" below grade** | ORSC G2415.12.1 | Generator feeds, BBQ drops, outdoor appliance lines |
| Gas piping — under driveways/parking | **18" minimum** | ORSC G2415.12 | Vehicle wheel load consideration; local inspector may require deeper |

**Electrical conduit — NEC Table 300.5 (Oregon OESC-adopted, no depth amendments):**

| Wiring Method | Open Ground | Under Driveways/Parking |
|---|---|---|
| Rigid Metal Conduit (RMC) / IMC | **6"** | **6"** |
| PVC / nonmetallic raceway | **18"** | **24"** |
| Direct-burial cable (UF, USE) | **24"** | **24"** |

Verification: Oregon's 2023 OESC (Table 1-E amendments, effective 2025-01) adds Electrical Metallic Tubing (EMT) to column 3 but does NOT amend the numeric depth values in Table 300.5. NEC standard depths apply in Lane County. Source: oregon.gov/bcd/codes-stand/Documents/23oesc-table1-E-2025Jan.pdf (confirmed by agent this session).

**Communications/fiber conduit:** No Oregon state-code minimum burial depth found. ISP/utility-company-specific. Do not publish a specific depth figure — acknowledge as the contractor's honest gap per parent pack.

---

## §2 — Water/Sewer Separation & Joint Trenching (OPSC 720.1)

Per Lane County's verified guidance:
- Bottom of water pipe must be at minimum **12" above** the top of the sewer line when crossing
- When running parallel, water must be on a solid shelf **12" horizontally from** the sewer line
- Modern Schedule 40 ABS/PVC sewer + PEX water **can share a single trench** — separation rule is only triggered when older sewer materials are present
- Nothing in Lane County code prohibits electrical and gas from sharing a trench with water and sewer for standard residential jobs
- **Joint trenching is explicitly code-permitted for modern materials** — the single most unclaimed content asset in this market

---

## §3 — Tracer Wire Requirements (Lane County)

Per Lane County's verified guidance:

| Utility | Wire Gauge | Color |
|---|---|---|
| Water | 14 AWG | Blue |
| Sanitary sewer | 14 AWG | Green |
| Gas | 18 AWG | Yellow |

Must run full length of pipe/conduit; one end terminated above ground for future locating.

---

## §4 — Oregon811 (Updated — Key 2025/2026 Change)

Sources: Oregon PUC (oregon.gov/puc/safety/pages/call-before-you-dig.aspx) + digsafelyoregon.com — fetched directly this session.

| Item | Verified Detail |
|---|---|
| Advance notice required | **At least 2 business days** before starting any digging |
| Maximum advance notice | No more than 10 days before project start |
| Cost | **Free** — for homeowners, contractors, and professional excavators |
| Phone | **811** (primary) or 1-800-332-2344 (toll-free) |
| Online submission | digsafelyoregon.com |
| Hours | 24/7/365 |
| Governing authority | Oregon Utility Notification Center (OUNC), ORS Chapter 757 |

**CRITICAL UPDATE (2025/2026):** Ticket life (locate validity period) was **reduced from 45 days to 30 days** under amendment to OAR 952-001-0010(23). Approved 2024, now in effect. For projects exceeding 30 days, excavators must re-notify Oregon811 when the ticket expires. This is a material, current, differentiating detail no competitor has yet incorporated.

---

## §5 — Lane County Permit Requirements for Utility Trenching

Source: Lane County Right-of-Way Permits page — fetched directly this session.
URL: https://www.lanecountyor.gov/government/county_departments/public_works/right-of-way_permits

**Three scenarios — which applies depends on where the trench runs:**

**Scenario A — Work in the public right-of-way (ROW):**
A **Facility Permit** is required from Lane County Public Works before starting.
- Covers: installation of pipes, conduits, poles, and vaults in the ROW
- Application: $0 fee at application; permit fee = actual processing costs (determined by staff, due before permit is issued)
- Processing time: **6–8 weeks** depending on project complexity (longer if environmental/riparian review required)
- Contact: Public Works Customer Service Center, 3050 N. Delta Hwy, Eugene, OR 97408 | (541) 682-6902

**Scenario B — Work entirely on private property, tied to a building permit:**
- Utility trenching covered under the associated building permit (plumbing, mechanical, or electrical)
- No separate trenching permit required for private-property utility runs tied to a permitted structure

**Scenario C — Grading-triggering scope:**
- Grading/fill permit triggered when moving **50+ cubic yards** OR cut/fill slope steeper than 2:1
- Standard residential utility trench: generally well under this threshold

**Content implication:** The page should distinguish ROW work (Facility Permit required, 6–8 weeks) from private-property work (covered under building permit) rather than giving a single blanket "you need a permit" answer.

---

## §6 — EWEB / Springfield Utility Board (Tap Application Process)

**Verified status: process details NOT available in public web content — flagged for direct confirmation before publishing.**

**EWEB (Eugene Water & Electric Board):**
- System Development Charge (SDC) confirmed for all new/expanded water connections — one-time fee based on new use
- SDC amounts: published in Appendix C of Customer Service Policy (not reproduced publicly)
- EWEB recommends contacting them **early in the development process**
- Contact: (541) 685-7000 | eweb.answers@eweb.org
- URL: eweb.org/your-public-utility/working-with-eweb/contractors-and-developers/building-and-renovations
- **Action needed before publishing tap-process content:** Call EWEB to confirm (1) who initiates the tap application, (2) whether EWEB or a contractor installs the service line from main to meter, (3) current SDC fee schedule

**Springfield Utility Board (SUB):**
- Serves Springfield and eastern Eugene metro
- Developer resources: subutil.com/business-center/water/
- **Action needed:** Call SUB (541) 746-8451 for process details

**Content implication:** Use general industry pattern only ("the property owner or contractor initiates the new service application with the utility company — typically EWEB for Eugene, Springfield Utility Board for Springfield"), properly hedged and with the utility company's contact info, rather than a step-by-step that would need direct verification.

---

## §7 — NW Natural Gas Service (Oregon)

Sources: nwnatural.com/business/builders-hvac/builder-and-developer-services + multiple contractor-sourced references.

**Who does what:**

| Party | Responsibilities |
|---|---|
| NW Natural | Pulls permits for street/sidewalk work; installs from gas main in street to meter at property line/building |
| Property owner / contractor | Hires licensed gas fitter; arranges trench from meter to point of use; obtains permit for house piping |
| Licensed gas fitter | Required for all permits, connections, pressure tests, and inspection sign-off (green tag) |

**Process (general — call NW Natural at 800-927-6123 to confirm Eugene-specific steps):**
1. Contractor or property owner contacts NW Natural to initiate new service order
2. NW Natural maps route, coordinates 811 locate
3. NW Natural gets permits for street/sidewalk crossings; contractor handles private-property trench
4. Licensed gas fitter installs house piping, pulls permit, performs pressure test
5. Inspection passes → "green tag" issued
6. NW Natural activates service after green tag is in hand + at least one appliance fully installed

**Content implication:** D&D's scope for gas = the trench itself. The tap from the street main and pressure-test/inspection is coordinated between NW Natural and the licensed gas fitter. Be explicit about this scope boundary.

---

## §8 — Oregon ADU Law — Demand Signal for Utility Trenching

Sources: Lane County LMD ADU page, gatheradu.com/adu-info/eugene-or, Oregon LCD ADU guidance.

**Legislative background:**
- **SB 1051 (2017):** Required all Oregon cities >2,500 population to allow at least one ADU per single-family lot
- **HB 2001 (2019):** Eliminated parking requirements and owner-occupancy restrictions for ADUs — two of the biggest permit barriers removed
- **Eugene implementation:** City Council updated ADU code January 21, 2020

**The utility trenching connection:**
- Every new **detached** ADU requires its own utility connections: water, sewer, gas, electrical
- Connections typically tie into the primary property's existing services — but the **trench from existing line/meter to the ADU** is new excavation work
- Typical ADU utility trench length: 30–100+ linear feet depending on lot configuration
- This is a **recurring, high-volume work category** in Eugene/Lane County driven by Oregon's ADU-friendly laws
- Oregon's ADU market is one of the most active in the West Coast

**ADU SDC context:**
- Portland eliminated SDCs for ADUs in 2017; Eugene/Springfield policy not confirmed waived
- Do not claim SDC waivers exist for Eugene without direct EWEB/SUB confirmation

**Content implication:** ADU utility trenching is a named, high-demand use case to call out explicitly in the page's "Project Types" section. Position D&D as the go-to excavation contractor for ADU site prep and utility connections in Lane County.

---

## §9 — Foundation Setback Rule (Trenching Near Buildings)

Per Lane County's verified guidance:
Trench must be set back from any footing a horizontal distance **equal to the trench depth**.
- Example: 24" deep water service trench = must be at least 24" away from any footing
- Relevant for utility lines running along building perimeters or through crawl spaces

---

## Confidence Summary

| Signal | Confidence | Use |
|---|---|---|
| Water depth 24" (OPSC 609.1, Lane County) | HIGH | Use as-is |
| Sewer 12" minimum cover (OPSC 718.1) | HIGH | Use as-is |
| Gas 18" minimum (ORSC G2415.12) | HIGH | Use as-is |
| Electrical depths NEC 300.5 (no Oregon amendments) | HIGH | Use as-is |
| Oregon811: 2 business days | HIGH | Use as-is |
| Oregon811: free service | HIGH | Use as-is |
| Oregon811: ticket life now 30 days (2025/2026 change) | HIGH | Use as-is — differentiating current detail |
| Lane County ROW Facility Permit required | HIGH | Use as-is |
| Lane County processing time 6–8 weeks | HIGH | Use as-is |
| EWEB SDC exists | MEDIUM | Note SDC exists; don't publish amounts without calling |
| EWEB tap process | LOW | Hedge; call EWEB before publishing as procedural fact |
| NW Natural process flow | MEDIUM | Use general pattern, flag for David/call to verify |
| Oregon ADU law driving demand | HIGH | Use as-is — well-documented legislative record |
| ADU SDC waivers in Eugene | NOT CONFIRMED | Do not claim |
| Tracer wire specs (Lane County) | HIGH | Use as-is |
| Foundation setback = trench depth | HIGH | Use as-is |
