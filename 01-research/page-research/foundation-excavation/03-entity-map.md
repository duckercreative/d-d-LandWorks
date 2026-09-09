# Entity Map — Foundation Excavation (`/foundation-excavation/`)

Adapted from the Koray 14-source entity method, same approach as the six prior packs. Canonical business/location/certification entities are **reused verbatim** from `../home/entity-inventory.csv`; process/equipment entities already owned by `../excavation/` and `../site-preparation/` are cross-referenced, not re-derived. This file focuses on what's genuinely new for foundation excavation specifically: footing/frost-depth code entities, foundation-type distinctions, over-dig/working-space rules, and the footing-inspection sequencing fact — per the task's explicit scoping instruction.

---

## 1. Business Entity (reused, unchanged)

- **D&D Land Works**, **David Deggelman**, **Oregon CCB #261742** — reused verbatim from `../home/entity-inventory.csv` rows 2-4. Do not re-derive or rename.

## 2. Service Entities (this page's scope + sibling boundaries)

| Entity | Validation | This page's scope note |
|---|---|---|
| Foundation Excavation | VALIDATED_LOCAL | Primary entity for this page per topical map §6.5. Six of the ten competitors examined across the excavation pack name it generically as a project type; zero go deeper than a one-line mention. This page becomes its canonical home — sibling pages down-link here instead of duplicating depth |
| Excavation & Grading | VALIDATED_LOCAL | **Upstream sibling, not this page's scope for general mechanics.** Cut/fill, backfill/compaction as a general process, rock removal, and the excavation-vs-grading disambiguation are already owned by `../excavation/`. This page cross-links up rather than repeating that content — see `00-research-pack.md`'s Scope Boundary section for the exact line |
| Site Preparation | VALIDATED_LOCAL | **Upstream parent, not this page's scope.** Site prep clears and grades the raw lot first; foundation excavation follows once the pad is ready (sequencing already documented in `../site-preparation/00-research-pack.md`) |
| Drainage Excavation | VALIDATED_LOCAL | **Downstream/adjacent sibling.** The *foundation* drain (ORSC R405, this page's scope) is a code-required perimeter footing drain tied to a specific wall; a dug drainage trench, swale, or channel as its own standalone yard feature belongs to the future Drainage Excavation page or the Grading & Leveling page. Cross-link, don't duplicate |
| Septic Install & Repair | VALIDATED_LOCAL | **Unrelated, cross-reference only.** The septic pack's drainfield is a wastewater-dispersal feature. It shares the word "drain" with this page's foundation footing drain but is otherwise unconnected — state the distinction explicitly if both are ever mentioned in the same section, to head off homeowner confusion |

**Scope fence carried forward (do not integrate as offered services):** structural engineering, foundation design/stamped plans, waterproofing membrane installation (unless confirmed with David), concrete forming/pouring, framing — per the topical map's own §6.5 fence: "no structural/engineering guarantees; excavation + backfill only."

## 3. Footing & Frost-Depth Code Entities (NEW — the page's single most load-bearing set)

| Entity | Type | Validation | Detail |
|---|---|---|---|
| Footing | Concept | VALIDATED | The concrete base transferring structural load to bearing soil — what this page's excavation creates space for |
| Frost Line / Frost Depth | Concept | VALIDATED | The depth below which soil doesn't freeze in a normal winter; footings must sit below it or a structure risks frost heave |
| ORSC R403.1.4 (Minimum Depth) | Legislation | VALIDATED | "Exterior footings shall be placed not less than 12 inches (305 mm) below finished grade on the undisturbed ground surface" — statewide baseline, verified directly against up.codes' mirror of the 2023 Oregon Residential Specialty Code |
| ORSC R403.1.4.1 (Frost Protection) | Legislation | VALIDATED | Footings/piers/permanent supports must be frost-protected by (1) extending below the Table R301.2 frost line, (2) R403.3 construction, (3) ASCE 32 construction, or (4) erection on solid rock |
| ORSC Table R301.2 (Frost Depth by Elevation) | Legislation | VALIDATED (secondary-source corroborated) | Below 2,500 ft elevation: **12 inches**. 2,500–4,000 ft: 18 inches. At/above 4,000 ft: 24 inches. Eugene sits at roughly 430 ft — all of populated Lane County is well under the 2,500 ft threshold, so **12 inches governs** |

**The headline fact:** for Lane County, the general minimum-footing-depth rule (R403.1.4) and the frost-protection depth (R403.1.4.1 + Table R301.2) land on the *same number* — 12 inches below undisturbed grade. That's a simple, quotable, genuinely verified fact that zero of the ten Lane County excavation competitors state, and that even the best national content competitor found for this topic (Cojo Asphalt, see `04-competitor-matrix.md`) explicitly declines to state, deferring instead to "confirm with your local building department." This page can be more specific than the best existing content on the exact query.

**Caveat carried into every citation of this figure (per this project's no-fabrication rule):** the raw ICC-published Table R301.2 could not be directly fetched this session (codes.iccsafe.org returned a 403); the 12/18/24-inch figures are corroborated by two independent secondary sources that agree with each other, not by a direct read of the primary table. Flag for confirmation against a purchased/library copy of the current ORSC, or a direct call to Eugene/Lane County/Springfield building officials, before publishing as a litigation-proof number — the same hedging pattern the excavation and site-prep packs already applied to their own third-party-sourced permit thresholds.

## 4. Foundation Drain & Moisture-Management Entities (NEW)

| Entity | Type | Validation | Detail |
|---|---|---|---|
| ORSC R405 (Foundation Drain) | Legislation | VALIDATED | Required around concrete/masonry foundations retaining earth and enclosing habitable/usable space, unless the foundation sits on well-drained or sand-gravel soil. Gravel/crushed-stone footing drains extend ≥1 ft beyond the footing's outside edge and ≥6 in above its top, covered with filter membrane; drain tile/perforated pipe sits on 2 in of washed gravel, covered with 6 in more |
| ORSC R406 (Waterproofing) | Legislation | VALIDATED_LOCAL | Any wall requiring an R405 drain also requires waterproofing/dampproofing — mentioned as a fact, not a D&D service claim, unless confirmed with David |
| ORSC R408.1 / R408.3 (Crawlspace Vapor Retarder) | Legislation | VALIDATED | Vented crawlspaces: Class I vapor retarder over exposed ground, 12 in lap at joints, 12 in up perimeter walls. Unvented: continuous Class I vapor retarder, 6 in sealed/taped or 12 in unsealed joint overlap, 12 in up the stem wall, sealed to it |
| Dewatering | ProcessEntity | VALIDATED_LOCAL | Pumping groundwater from an open excavation — a real, named requirement for basement-depth digs in the Willamette Valley's high winter water table (single direct source, corroborated by the already-established regional wet-season entity from the homepage/site-prep packs) |

**Why this matters:** zero of the ten Lane County competitors mention a code-mandated foundation drain, waterproofing requirement, or crawlspace vapor retarder anywhere. This is genuinely new content, not a restatement of the grading-leveling pack's swale/French-drain entities or the septic pack's drainfield entity — all three "drain" concepts are real but describe different physical things, and this page is the one place they should be explicitly distinguished if mentioned together.

## 5. Foundation-Type Entities (NEW — the core of the "goes deeper" mandate)

| Entity | Type | Validation | Excavation-scope difference |
|---|---|---|---|
| Slab-on-Grade Foundation | Concept | VALIDATED | Shallowest dig: strip topsoil to roughly 2–3 ft, no perimeter stem-wall trench. National cost context: $6–$16/sq ft |
| Crawlspace Foundation | Concept | VALIDATED | Mid-depth: perimeter trench cut to footing depth (frost-line-driven) plus stem-wall height; typical finished clearance 18–48 in. National cost context: $8–$18/sq ft |
| Full Basement Foundation | Concept | VALIDATED | Deepest: typically 8–10 ft, requires OSHA shoring/sloping/benching, hundreds of cubic yards hauled off-site, commonly requires dewatering in this region. National cost context: $75–$150/cu yd removed |
| Monolithic Slab (pour method) | Concept | VALIDATED_LOCAL (single source) | One combined footing-and-floor pour; favored for garages, shops, ADUs, additions, flat sites |
| Stem Wall (pour method) | Concept | VALIDATED_LOCAL (single source) | Sequential footing → wall → floor pour; required for crawlspaces, basements, deeper frost protection, sloped sites |

All cost figures above are cited as general/national ranges per this project's no-fabrication rule — no Lane-County-specific per-foundation-type dollar figure was found in this pass, consistent with the same limitation the excavation and site-preparation packs already disclosed for their own cost sections.

## 6. Over-Dig / Working Space & Adjacent-Structure Safety Entities (NEW)

| Entity | Type | Validation | Detail |
|---|---|---|---|
| Over-Dig / Working Space | Concept | VALIDATED | Governed by OSHA's 1995 interpretation letter suspending the general 1926.652 protective-system rule for house foundation/basement excavations when: depth is under 7.5 ft OR benched ≥2 ft horizontal per 5 ft vertical; minimum working width at the bottom (excavation face to formwork) is as wide as practicable but not less than 2 ft; and no water/crack/vibration/surcharge condition undermines stability |
| Excavation Below an Existing Footing / Underpinning | Concept | VALIDATED | OSHA 1926.652(b): excavating below an existing foundation or retaining wall's base is prohibited unless underpinning is installed, or a registered professional engineer confirms the structure is unaffected or the work is safe — directly relevant to an ADU or addition dug near an existing house |

**Why this matters:** this is a different, more specific citation than the general Subpart P trench-depth figures already reused from the Excavation & Grading page's entity map (5 ft protective-system threshold, 4 ft/25 ft access threshold). The house-foundation/basement carve-out is its own real standard with its own numbers (7.5 ft, 2 ft, 5 ft) — using it here rather than the generic trench figures is what makes this page's authority content genuinely foundation-specific rather than a re-skin of the excavation page's citations.

## 7. Footing Inspection Sequencing Entities (NEW — the trust/competence signal the task calls out)

| Entity | Type | Validation | Detail |
|---|---|---|---|
| Foundation / Footing Inspection | Concept | VALIDATED | Happens after trenches/pad areas are excavated and cleared of loose material or mud, forms are erected and secured, and reinforcing is placed and secured — and *before* concrete is poured. Verified directly against the City of Eugene's own Inspections page and corroborated by a Lane-County-specific inspection-sequence source |
| Eugene eBuild Permitting Portal | GovernmentService | VALIDATED | Eugene's own online system for scheduling inspections in construction order; phone backup at 541-682-5283 |
| Lane County Building Safety Program | GovernmentOrganization | VALIDATED | The parallel county-level program for unincorporated Lane County jobs, sitting within the same Land Management Division as the septic Subsurface Sanitation Program already reused from `../septic/entity-inventory.csv` |

**Why this matters:** this is the task's named "footing-inspection sequencing" trust signal. Zero of the ten Lane County competitors explain that the correct order is excavate → inspect → pour, never excavate → pour. Stating this plainly, and stating that D&D coordinates the open excavation to be ready and held for that inspection, is a genuine, zero-cost competence signal — directly parallel to the Oregon811 finding already used on the Excavation & Grading page, but new to this page.

## 8. Geotechnical / Soils Entity (reused, extended)

- **Geotechnical / Soils Report** — reused from `../site-preparation/07-oregon-authority.md` §5 ($2,000–$5,000 typical cost, prevents 20–50% of overruns), applied here specifically to bearing-soil verification, since ORSC R403.1 requires footings to bear on undisturbed natural soil or properly engineered fill.

## 9. Co-occurrence Findings (from the competitor pages checked for THIS page specifically)

Content specifically about foundation excavation (not general excavation) found across the ten Lane County competitors already tracked in the excavation pack, plus three newly-surfaced sources genuinely on-topic for this query:

| Entity / claim | Coverage found | Status |
|---|---|---|
| "Foundation excavation" named as a project type/heading | 6/10 Lane County competitors (All Dirt, Heavy D, A&D, Braun, Tectonic, BBC) | Table stakes — already true per the excavation pack |
| Foundation TYPE distinguished (slab / crawlspace / basement) with a scope or cost difference | 0/10 Lane County competitors | **Zero — the core gap this page fills** |
| Frost line / frost depth number stated | 0/10 Lane County competitors; Cojo Asphalt's dedicated article on the exact topic explicitly declines to give one | **Zero, even among the best available content** |
| Over-dig / working-space figure given | 0/10 Lane County competitors; Cojo Asphalt mentions the concept generically with no number | **Zero** |
| Footing-inspection sequencing (excavate → inspect → pour) explained | 0/10 Lane County competitors; Cojo Asphalt's own basement-excavation article states inspection happens but doesn't detail the sequence or cite a building department directly | Partial elsewhere, zero locally |
| Dewatering / high water table mentioned for a foundation dig | 0/10 Lane County competitors; Cojo Asphalt mentions it | Partial elsewhere, zero locally |
| ADU-specific foundation excavation content | 0/10 | **Zero** |

## 10. Concept / Problem Entities (for FAQ + body integration)

- Cost-anxiety specific to hitting rock or water *under a foundation* (higher stakes than a driveway or pond, since the structure above depends on it) — reused framing from the excavation pack's rock/cost-overrun entity, sharpened for this page's higher-stakes context
- Builder/GC schedule-coordination anxiety (foundation excavation is almost always tied to a construction timeline and another trade's schedule, not a standalone homeowner project) — new to this page, see `05-intent-triangulation.md`
- "Will the inspector make us redo it" fear — ties directly to the footing-inspection sequencing entity above

---

## Validation Gate Summary

All entities above are either `VALIDATED` (confirmed via a live, directly-fetched or independently-corroborated source this session — the ORSC sections, OSHA interpretation letter, and Eugene inspection process were all verified directly per the task's explicit instruction not to assume), `VALIDATED_LOCAL` (standard industry term or single-source-but-plausible fact, flagged where corroboration is thin), or explicitly reused/cross-referenced from the home, excavation, site-preparation, grading-leveling, and septic packs' canonical inventories. No Lane-County-specific frost-depth exception, D&D-specific foundation-type pricing, or fabricated inspection fee was invented — see `entity-inventory.csv` for the structured version and `07-oregon-authority.md` for full source citations.
