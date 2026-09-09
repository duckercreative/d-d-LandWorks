# Oregon / Lane County Authority Signals — Foundation Excavation (`/foundation-excavation/`)

Per the task's explicit instruction: this file does **not** re-verify OSHA 1926 Subpart P's general trench-depth figures (already sourced in `../home/07-oregon-authority.md` §4 and reused in `../excavation/07-oregon-authority.md` §2) or Oregon811/call-before-you-dig (fully sourced in `../excavation/07-oregon-authority.md` §1) — both are cited and reused below, not re-derived. New sourcing was run only for facts genuinely specific to foundation excavation: **Oregon's footing-depth and frost-protection code sections, foundation drainage/vapor-retarder code sections, the OSHA house-foundation/basement excavation carve-out, and Eugene/Lane County's footing-inspection sequencing.**

---

## 1. Footing Minimum Depth and Frost Protection — VERIFIED DIRECTLY (the single most important fact for this page)

Fetched directly against up.codes' mirror of the 2023 Oregon Residential Specialty Code (ORSC) — codes.iccsafe.org's own page returned an HTTP 403 to direct fetch this session, so up.codes was used as the working mirror, cross-checked against a second independent source (footingdepth.com) that agreed on every figure:

- **ORSC R403.1.4 — Minimum Depth:** "Exterior footings shall be placed not less than **12 inches (305 mm)** below finished grade on the undisturbed ground surface." This is the statewide baseline rule and applies regardless of frost considerations.
- **ORSC R403.1.4.1 — Frost Protection:** Foundation walls, piers, and other permanent supports must be protected from frost by one of: (1) extension below the frost line specified in Table R301.2, (2) construction per Section R403.3, (3) construction per ASCE 32, or (4) erection on solid rock.
- **ORSC Table R301.2 — Frost Line Depth by Elevation:** below 2,500 ft elevation, **12 inches**; 2,500–4,000 ft, **18 inches**; at or above 4,000 ft, **24 inches**.
- **What this means for Lane County:** Eugene sits at roughly 430 ft elevation, and essentially all of Lane County's populated valley floor (Eugene, Springfield, and the Tier 2/3 cities) sits well under the 2,500 ft threshold. **The frost-depth figure that governs here is 12 inches** — which happens to be numerically identical to the general minimum-depth rule (R403.1.4). That coincidence is a genuinely simple, quotable fact: in Lane County, "how deep does a footing need to be" and "what's the frost line depth" have the same one-word answer.
- **Caveat (per this project's no-fabrication rule):** the primary ICC-published table itself could not be directly fetched this session (403 error). The 12/18/24-inch figures are corroborated by two independent secondary sources that agree with each other and with a general web-search synthesis of the same table, but this should still be confirmed against a purchased/library ORSC copy or directly with Eugene, Springfield, or Lane County building officials before being published as a litigation-proof exact number — the same hedging pattern already applied to the excavation and site-preparation packs' third-party-sourced permit thresholds.
- **Why this matters for the page:** zero of the ten Lane County excavation competitors examined across this pack and its siblings state a frost-depth figure anywhere. Even the single best piece of Oregon-specific content found on this exact topic — Cojo Asphalt's dedicated "Frost Depth for Footings: How Deep to Dig in Oregon" article — deliberately avoids stating a number, writing instead that "the local building department sets the binding minimum footing depth for your address." This page can be more specific, with a real citation, than the best competing content currently found for this query.
- **Source:** [up.codes — ORSC 2021/2023 Chapter 4 Foundations](https://up.codes/viewer/oregon/irc-2021/chapter/4/foundations) · [footingdepth.com — Frost Line Depth in Oregon](https://footingdepth.com/frost-line/oregon/) · verified 2026-09-09.

## 2. Foundation Drainage and Waterproofing — VERIFIED DIRECTLY (new)

- **ORSC R405 — Foundation Drain:** drains are required around concrete or masonry foundations that retain earth and enclose habitable or usable space (basements, habitable crawlspaces), **unless** the foundation sits on well-drained ground or a sand-gravel-mixture soil. Gravel or crushed-stone footing drains must extend not less than **1 foot beyond the outside edge of the footing** and **6 inches above the top of the footing**, covered with an approved filter membrane. Drain tile or perforated pipe sits on a minimum of **2 inches of washed gravel** and is covered with **6 more inches** of the same material.
- **ORSC R406 — Waterproofing:** any wall that requires an R405 drain also requires waterproofing or dampproofing.
- **Why this matters for the page:** this is a distinct, code-mandated drain from the septic drainfield (a wastewater dispersal feature, `../septic/entity-inventory.csv`) and from a yard-scale swale or French drain (`../grading-leveling/entity-inventory.csv`) — all three genuinely different physical things that happen to share the word "drain." Zero of the ten competitors examined mention a foundation drain requirement by name. Content scope note: the drain and waterproofing membrane are typically installed as part of the foundation/waterproofing contractor's scope, not the excavation contractor's — this page should explain the requirement as a fact the homeowner should know, and can state that D&D's excavation/backfill work accommodates it, without claiming installation of the drain or membrane itself unless confirmed with David.
- **Source:** ORSC Chapter 4 (Foundations), Sections R405–R406, per up.codes' mirror · verified 2026-09-09.

## 3. Crawlspace Vapor Retarder — VERIFIED DIRECTLY (new)

- **ORSC R408.1 (vented crawlspace):** the ground surface of the under-floor space must be covered by a Class I vapor retarder, lapped not less than 12 inches at joints, extending not less than 12 inches up perimeter foundation walls.
- **ORSC R408.3 (unvented crawlspace):** exposed earth needs a continuous Class I vapor retarder with joints overlapped 6 inches and sealed/taped, or 12 inches where not sealed/taped; edges extend not less than 12 inches up the stem wall and are attached and sealed to it.
- **Why this matters for the page:** relevant specifically to the Crawlspace Foundation type this page distinguishes; zero competitors mention it. Same content-scope caveat as the foundation drain above — this is homeowner-education content, not necessarily a D&D installation claim.
- **Source:** [codes.iccsafe.org — 2023 ORSC R408.3](https://codes.iccsafe.org/s/ORRC2023P1/chapter-4-foundations/ORRC2023P1-Pt03-Ch04-SecR408.3) (search-result text retrieved; direct page fetch blocked, consistent with the 403 pattern noted in §1) · verified 2026-09-09.

## 4. OSHA — House Foundation/Basement Excavation Over-Dig and Working-Space Rule — VERIFIED DIRECTLY (new, distinct from the general Subpart P figures already reused)

- Per a 1995 OSHA interpretation letter, the general protective-system requirements of **29 CFR 1926.652** are suspended specifically for **house foundation/basement excavations** when ALL of the following hold: the excavation is under **7.5 feet deep**, OR is benched at least **2 feet horizontally for every 5 feet or less of vertical height**; the minimum horizontal working width at the bottom of the excavation (excavation face to formwork/wall) is as wide as practicable but **not less than 2 feet**; there is no water, surface tension cracks, or other condition reducing stability; no heavy equipment is operating nearby causing vibration while workers are in the excavation; and all soil/equipment/material surcharge loads sit no closer to the top edge than the excavation is deep (never closer than 2 feet even with front-end loaders).
- **Excavating below an existing footing:** per 1926.652(b), excavation below the level of an existing foundation or retaining wall's base is prohibited unless a support system (underpinning) is installed, or a registered professional engineer confirms the structure is far enough removed to be unaffected or that the work poses no hazard to workers. Directly relevant to an ADU or addition dug close to an existing house's foundation.
- **Why this matters for the page:** this is a more specific, more directly applicable citation than the general Subpart P trench-depth figures (5 ft protective-system threshold, 4 ft/25 ft access threshold) already reused on the Excavation & Grading page. The house-foundation/basement carve-out has its own numbers (7.5 ft, 2 ft, 5 ft) that genuinely belong on this page rather than a re-statement of the excavation page's generic trench citation. Zero of the ten competitors examined mention a specific over-dig/working-space figure; Cojo Asphalt's content mentions the general concept of "over-digging beyond the wall lines for working room" without citing a number.
- **Source:** [OSHA — Suspension of 29 CFR 1926.652 to House Foundation/Basement Excavations (1995-06-30 interpretation letter)](https://www.osha.gov/laws-regs/standardinterpretations/1995-06-30) · [OSHA 1926.652 — Requirements for protective systems](https://www.osha.gov/laws-regs/regulations/standardnumber/1926/1926.652) · verified 2026-09-09.

## 5. OSHA Trench & Excavation Safety (reused verbatim, unchanged)

Fully reused from the homepage/excavation packs — no new verification needed, applies to any trenching that occurs alongside a foundation dig (e.g., a utility stub run into the foundation):

- Governing standard: 29 CFR 1926, Subpart P ("Excavations"), enforced in Oregon through Oregon OSHA.
- Trenches 5 feet deep or more require a protective system unless excavated entirely in stable rock.
- Safe access is required within 25 feet of lateral travel for any excavation 4 feet deep or more.
- **Source (reused):** [OSHA — 1926 Subpart P (Excavations)](https://www.osha.gov/laws-regs/regulations/standardnumber/1926/1926SubpartP) · verified 2026-09-08 (original pass, excavation pack).

## 6. Oregon811 / Call-Before-You-Dig (reused verbatim, unchanged)

Fully reused from `../excavation/07-oregon-authority.md` §1 — applies identically to a foundation excavation, since utility lines commonly run near or into a foundation area:

- Official name: the Oregon Utility Notification Center (OUNC), operating publicly as "Oregon 811." Free locate requests; at least 2 business days' advance notice required before any dig.
- **Source (reused):** [Oregon Utility Notification Center / Oregon811 — Dig Safely](https://digsafelyoregon.com/) · verified 2026-09-08 (excavation pack pass).

## 7. Eugene and Lane County Footing/Foundation Inspection Sequencing — VERIFIED DIRECTLY (new)

- **Eugene:** the foundation/footing inspection happens after trenches or pad areas are excavated and cleared of loose material or mud, forms are erected and secured in place, and reinforcing (rebar) is in place and secured — but **before** concrete is placed. Eugene schedules inspections through its online eBuild system, or by phone at 541-682-5283 (staffed 7:30am–3:30pm weekdays; request before 7am for same-day scheduling).
- **Lane County:** the same general sequence applies for unincorporated-county jobs administered by the Land Management Division's Building Safety program — trenches excavated, forms erected, steel placed, and the inspection happens before concrete is poured. A corroborating source notes the UFER grounding electrode (an electrical-code item, outside D&D's excavation scope) is commonly tagged at this same inspection, ahead of the pour — worth a passing mention as evidence D&D understands the full sequencing context, without claiming the electrical work itself.
- **Why this matters for the page:** this is the core sequencing fact the task calls out — excavate → inspect → pour, never excavate → pour. Zero of the ten Lane County competitors examined explain this sequencing anywhere in their content. Stating it plainly, and stating that D&D leaves the excavation ready and holds it for inspection rather than rushing toward a pour, is a genuine, zero-cost competence signal directly parallel to the Oregon811 finding already used on the Excavation & Grading page.
- **Source:** [City of Eugene — Inspections](https://www.eugene-or.gov/384/Inspections) · [Lane County — Building Safety](https://www.lanecounty.org/government/county_departments/public_works/land_management_division/building_safety) · a corroborating third-party inspection-sequence source (foundationauthority.com) describing the same excavate-form-steel-inspect-pour order · verified 2026-09-09.

## 8. Foundation Type / Excavation Scope and Cost Data (new — national/general, not Lane-County-exact)

- **Slab-on-grade:** shallowest excavation, topsoil strip to roughly 2–3 ft; national cost $6–$16/sq ft or $12,000–$28,000 for a 2,000 sq ft slab (HomeGuide, Estimators.us).
- **Crawlspace:** mid-depth excavation, perimeter trench to footing depth plus stem-wall height, typical finished clearance 18–48 in; national cost $8–$18/sq ft or $16,000–$36,000 for 2,000 sq ft.
- **Full basement:** deepest excavation, typically 8–10 ft, requires shoring/sloping/benching per §4-5 above and commonly hundreds of cubic yards hauled off-site; national cost $75–$150/cu yd removed, roughly 300 cu yd for a 1,000 sq ft footprint ($22,500–$45,000 for digging alone), $70,000–$100,000+ for the full foundation.
- **No single authoritative Lane-County-specific per-foundation-type dollar figure was found** in this research pass — present the above as general/national ranges, consistent with the same limitation already disclosed in the excavation and site-preparation packs' own cost sections.
- **Willamette Valley high winter water table:** a single but directly relevant source (Cojo Asphalt, an Oregon-focused content publisher — see `04-competitor-matrix.md`) states this commonly forces dewatering on basement-depth excavations in this region, corroborated in direction (not in specific numbers) by the wet-season entity already independently established in the homepage and site-preparation packs.
- **Source:** [HomeGuide — Foundation Cost](https://homeguide.com/costs/foundation-cost) · [Estimators.us — Foundation Cost Per Sq Ft](https://estimators.us/foundation-cost-per-square-foot/) · [This Old House — Cost to Dig Out a Basement](https://www.thisoldhouse.com/foundations/cost-to-dig-out-a-basement) · [Cojo Asphalt — Basement Excavation Guide (Oregon)](https://www.cojoasphalt.com/blog/basement-excavation-guide-oregon) · verified 2026-09-09.

## 9. Geotechnical / Soils Report (reused, extended from the site-preparation pack)

- Reused verbatim from `../site-preparation/07-oregon-authority.md` §5: a geotechnical/soils study typically costs $2,000–$5,000 and is credited with preventing 20–50% of cost overruns from unexpected rock or bad soil.
- Applied here specifically to bearing-soil verification, since ORSC R403.1 requires footings to bear on undisturbed natural soil or properly engineered fill — a real, code-driven reason to recommend a soils check before excavating for a foundation, not just a generic upsell framing.

## 10. What was checked and found NOT applicable, or not confirmable (do not cite)

- **An exact Lane County or City of Eugene amendment to the statewide 12-inch frost-depth figure** — none found in this pass; present as the statewide ORSC figure applicable to Lane County's elevation band, with the standard "confirm with your local building official" hedge already used throughout this pack series.
- **A specific footing-inspection fee** — not found in this pass; do not invent a dollar figure.
- **Whether D&D itself installs the R405 foundation drain, R406 waterproofing, or R408 vapor retarder**, versus leaving those to a separate foundation/waterproofing contractor — unconfirmed; flagged in `08-gap-analysis.md` for David's input, not assumed.

---

## Freshness Note

The ORSC is periodically updated (the 2023 edition is current as of this pass, per up.codes and codes.iccsafe.org's own citations) — re-verify Sections R403, R405, R406, and R408 if this content brief/build happens more than 90 days after 2026-09-09, consistent with the freshness rule established across the prior six packs. Re-verify the OSHA house-foundation/basement excavation interpretation letter's continued validity at the same cadence (interpretation letters are occasionally superseded). Re-confirm Eugene's eBuild scheduling process and phone number directly before publishing, since municipal contact details change more often than code sections.
