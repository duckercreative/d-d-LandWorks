# Oregon / Lane County Authority Signals — Utility Excavation (`/utility-excavation/`)

Per the task instruction: this file does **not** re-verify OSHA trench safety (29 CFR 1926 Subpart P) or the core Oregon811 call-before-you-dig mechanics (2-business-day advance notice, free locate requests) — both are already fully sourced in `../excavation/07-oregon-authority.md` §1-2 and cited/reused below rather than re-derived. New sourcing was run only for facts genuinely specific to utility trenching: **minimum burial depth by utility type** (the page's strongest potential differentiator), **joint trenching / utility separation rules**, and **who calls for a new utility tap/service** (utility company vs. contractor coordination).

---

## 1. Minimum Burial Depth by Utility Type — VERIFIED, Lane County's own government source (the single most important finding for this page)

**Source: Lane County Land Management Division, Building Safety Division — "Trenching for Utilities"** ([lanecountyor.gov](https://www.lanecountyor.gov/government/county_departments/public_works/land_management_division/building_safety/common_building_topics/trenching_for_utilities)), verified 2026-09-09. This is a direct Lane County government page, not a third-party contractor blog — the strongest possible sourcing tier for this project, and a genuinely rare find: it exists specifically to answer this page's core question, with exact code citations.

| Utility | Minimum depth | Code citation | Notes |
|---|---|---|---|
| **Water service line** | **12" below the frost depth.** In Lane County, frost depth is 12", so total minimum trench depth is **24" below grade**. | OPSC 609.1 (Oregon Plumbing Specialty Code) | Frost depth varies by Oregon county — Lane County's own page states its local figure directly; do not apply this 24" figure to other counties without checking their frost depth. |
| **Sanitary sewer line** | **12" minimum ground cover** (measured to top of pipe). | OPSC 718.1 | Lane County's page also notes a 1/4"-per-foot minimum slope toward the discharge point. |
| **Underground gas piping** | **18" minimum cover**, standard installation. Individual lines to outdoor appliances (grills, lights) may be as shallow as **8"** if not subject to damage and approved by the authority having jurisdiction. | ORSC G2415.12 (main); ORSC G2415.12.1 (appliance-line exception) | A yellow-insulated tracer wire (or other approved conductor) is required alongside underground non-metallic gas piping so it can be located later without excavation. |
| **Underground electrical conduit/cable** | **24" for direct-buried cable**; **18" for PVC or other listed nonmetallic conduit**; **6" for rigid or intermediate metal conduit**, per NEC Table 300.5 (the base national standard the Oregon Electrical Specialty Code (OESC) builds from, with Oregon-specific amendment tables — e.g., OESC Table 1-E — layered on top). A 120V branch circuit protected by GFCI can sometimes go as shallow as 12". Depth requirements increase under driveways and public streets (18" and 24" respectively, regardless of method, for one- and two-family dwelling driveways/public streets). | NEC Table 300.5, as adopted/amended by OESC | **Flag for direct confirmation:** this pack could not directly fetch the current OESC's own amendment table (iccsafe.org returned a 403 on this pass) — the NEC 300.5 baseline figures above are correct as the national standard Oregon adopts, but any Oregon-specific amendment to the base table should be confirmed against the current OESC edition before being published as an exact, litigation-proof figure. |

**Why this matters for the page:** every burial-depth figure above is different from every other utility. That's not a coincidence — it's the real, code-driven reason a "one trench depth fits all utilities" answer is wrong, and it's the single cleanest, most concrete, most differentiating fact this page can own. Zero of the competitor pages checked in this pack's research (`04-competitor-matrix.md`) state any of these figures, let alone all four side by side.

## 2. Joint Trenching — Multiple Utilities in One Trench (VERIFIED — a real, named practice)

Per the same Lane County source: **multiple utilities can legally share one trench in Lane County, with minimal restriction.** The page states plainly that electrical and gas can be installed alongside water and sewer lines "without prohibition" — meaning a joint trench carrying water, sewer, electrical, and gas together to a new structure is a real, legal, code-permitted practice here, not a workaround or a code violation waiting to happen.

**What IS regulated — separation between specific utility pairs:**

- **Water-to-sewer separation:** the bottom of the water pipe must be **at least 12" above the top of the sewer pipe** where the two cross (OPSC 720.1). This is the one separation rule Lane County's own page calls out specifically.
- **No blanket code-mandated separation exists** between gas, water, sewer, electrical, and communications lines sharing one trench under the adopted state codes — but **individual utility companies frequently impose their own separation standards** (a widely cited example: PG&E-style joint-trench specs commonly used across the West Coast call for roughly 12" horizontal separation between gas and electrical conductors, and comparable clearances from water/sewer). **This is a genuine "confirm with the specific utility" nuance** — Lane County's code silence does not override EWEB's, NW Natural's, or Springfield Utility Board's own joint-trench specifications, which should be confirmed for a specific job rather than assumed identical to a neighboring jurisdiction's utility.
- **Tracer wire is required** for locating buried non-metallic lines later: **blue, 14 AWG for water; green, 14 AWG for sanitary sewer; yellow, 18 AWG for gas** (per the same Lane County source). This is a specific, checkable, quotable detail zero competitors mention.
- **Foundation proximity:** a trench near an existing foundation must maintain a horizontal distance proportional to its depth, to avoid undermining the footing — Lane County's page notes this as a general principle without giving an exact ratio; cross-link to `../excavation/07-oregon-authority.md` for the OSHA trench-safety figures that govern the trench itself, rather than re-deriving them here.

**Why this matters for the page:** joint trenching is a real, legitimate cost-saving option (one trench, one mobilization, one restoration pass, instead of four separate digs) that zero competitors mention by name. It directly answers a real buyer question — "can I run water, power, and gas in the same trench to save money?" — with a genuine, code-grounded yes, plus the one real caveat (utility-company-specific separation specs) that keeps the answer honest rather than oversimplified.

## 3. Who Calls for a New Utility Tap or Service — Coordination Roles (new, general research — not Oregon-specific)

No Lane-County-specific or Oregon-specific source was found stating exactly which party (property owner, excavation contractor, or plumber) initiates a new water-service tap application with a given Lane County utility (EWEB in Eugene, Springfield Utility Board in Springfield, or a rural water district). General industry pattern, sourced from multiple municipal water utilities' own published processes:

- The **property owner (or their developer/builder)** typically initiates the tap request directly with the utility company's own customer service or construction/development-services department.
- The **actual excavation and trenching from the main or meter to the structure** is commonly done by a licensed excavation contractor or plumber, separate from the utility's own tap/connection work at the main itself.
- Some utilities accept the tap application from either the property owner or their contractor — this varies by utility, and **should be confirmed directly with EWEB, Springfield Utility Board, or the relevant water district for a specific project** rather than assumed uniform across Lane County.
- **This project's own no-fabrication rule applies directly here:** whether D&D Land Works itself places the call to the utility company, coordinates on the customer's behalf, or leaves that step entirely to the property owner/plumber is an **unconfirmed operational practice** — flag for David, do not state as settled fact on the page. This is distinct from the Oregon811 locate call (already confirmed D&D makes that call per `../excavation/07-oregon-authority.md` §1) — the utility-company tap application is a different call to a different party for a different reason, and the two should not be conflated on the page.

## 4. OSHA Trench & Excavation Safety and Oregon811 (reused verbatim, unchanged)

Fully reused from `../excavation/07-oregon-authority.md` §1-2 — no new verification needed, applies identically here since utility trenching is squarely within OSHA's excavation standard's scope:

- Governing standard: 29 CFR 1926, Subpart P ("Excavations"), enforced in Oregon through Oregon OSHA. Trenches 5 feet deep or more require a protective system; safe access is required within 25 feet of lateral travel for excavations 4 feet deep or more.
- Oregon811 (the Oregon Utility Notification Center): at least 2 business days' advance notice required before any dig, free locate requests, enforced by the Oregon PUC.
- Cross-link to `../excavation/` for the fuller trench-safety and Oregon811 write-up — do not re-explain the mechanics here, only apply them to the utility-specific depths above (e.g., noting that a 24" water-line trench or an 18" gas trench typically stays under OSHA's 4-5 foot thresholds, while a deep sewer lateral to a distant main or a footing-level tie-in can approach or cross them).

## 5. What was checked and found NOT applicable, or unconfirmed (do not cite as settled fact)

- **Exact current OESC (Oregon Electrical Specialty Code) amendment table for underground conduit depth** — the NEC Table 300.5 baseline is correct and citable; a direct fetch of the current OESC's own Oregon-specific amendment page returned a 403 in this pass. Flag for direct confirmation against the current adopted OESC edition before publishing Oregon-specific (as opposed to NEC-baseline) electrical depth figures as exact.
- **A specific per-utility-company joint-trench separation spec for EWEB, Springfield Utility Board, NW Natural, or any named Lane County utility** — not found in this pass; state the general PG&E-style precedent as an industry example, not as EWEB's or SUB's own confirmed rule.
- **Which party (owner, contractor, or utility) initiates a new tap application in Lane County specifically** — general industry pattern only, not Lane-County-verified; do not state as a fixed local process.
- **Communications/fiber conduit minimum burial depth under Oregon code** — no Oregon-specific code citation was found in this pass (communications conduit is typically governed by the utility/ISP's own construction standards rather than the state building code in the way water/sewer/gas/electrical are) — flagged as a genuine open question rather than answered with an invented figure; see `08-gap-analysis.md`.

---

## Freshness Note

The OESC's own amendment tables update on Oregon's regular code-adoption cycle — re-verify directly against the current edition before publishing an Oregon-specific (not NEC-baseline) electrical burial-depth figure as exact, and re-check if this pack is used more than 90 days after 2026-09-09. The Lane County frost-depth figure (12") is specific to Lane County and should not be reused for other counties without checking their own figure. Re-run this entire research pack if the content brief/build happens more than 90 days after 2026-09-09, consistent with all prior packs' freshness rule.
