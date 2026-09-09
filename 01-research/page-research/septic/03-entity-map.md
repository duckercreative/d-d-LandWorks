# Entity Map — Septic Install & Repair (`/services/septic-install-repairs/`)

Adapted from the Koray 14-source entity method, per this project's established excavation/Oregon substitution. This page is the first in the pipeline that requires its own dedicated regulatory-entity research rather than reusing excavation-permit facts wholesale — septic is a distinct, state-regulated environmental-health discipline (Oregon DEQ) layered on top of general earthwork (Oregon CCB), and the two credential systems must not be conflated. Full machine-readable version in `entity-inventory.csv` in this folder. Canonical forms for business/location/certification entities already established by sibling packs are reused verbatim per the task's explicit instruction — see the "Reused Verbatim" markers below.

---

## 1. Business Entity (reused verbatim — do not re-derive)

- **D&D Land Works** — `NOT_FOUND` externally, zero digital footprint, expected for a pre-launch business. Canonical form from `../home/entity-inventory.csv` row 2.
- **David Deggelman** — owner/operator, `NOT_FOUND` externally. Do not fabricate years-of-septic-specific-experience or a systems-installed count — both are explicitly unconfirmed per `business-info.md` and the task's own constraints.
- **Oregon CCB #261742** — `VALIDATED_LOCAL`, reused verbatim from `../home/entity-inventory.csv` row 4. Covers D&D's general contracting authority; **does not by itself authorize septic work** — that requires the separate DEQ credential below. This CCB-vs-DEQ distinction is the single most important entity relationship on this page and is already correctly drawn in the shipped `septic-install-repairs.astro` FAQ ("They're separate credentials... A crew without that certification can't legally do septic work, regardless of their equipment or general license").

## 2. Confirmed vs. Unconfirmed Credential Facts (read this before writing any credential claim)

**Confirmed, per business-info.md and already shipped in `home-content.md`:** D&D Land Works is "DEQ Certified," which qualifies it to install and repair septic systems under Oregon DEQ onsite wastewater rules. This is the ceiling of what can be asserted about D&D's own credential.

**Unconfirmed — do NOT invent for this page:**
- The exact DEQ credential title David holds (Installer Certification vs. a Combined Pumper/Installer business license vs. Maintenance Provider Certification — see §3 below for what these categories actually are)
- David's DEQ license/certification number
- Years of septic-specific experience (distinct from general excavation experience)
- Number of septic systems installed
- Whether D&D's DEQ standing covers alternative treatment technology (ATT) systems specifically, which require Maintenance Provider certification for ongoing service in addition to Installer certification for the initial build

This page should use the same hedge pattern the homepage already uses ("DEQ certification, which qualifies it to install and repair septic systems") without escalating to a more specific claim. Where the page explains the real DEQ credential categories (§3), it should do so as **general Oregon regulatory education**, not as a specific description of which category D&D holds.

## 3. DEQ Credential / Certification Entities (NEW — verified directly against oregon.gov this session)

| Entity | Validation | Detail |
|---|---|---|
| Sewage Disposal Service (SDS) License | VALIDATED | The actual business-license category DEQ issues. Oregon offers three license types: **Installer only**, **Pumper only**, and **Combined Pumper/Installer**. A business must hold one of these to legally advertise or perform septic construction/pumping work. Bond requirement: $15,000 for Installer or Combined licenses, $5,000 for Pumper-only. Source: [oregon.gov/deq/residential/pages/onsite-licensing.aspx](https://www.oregon.gov/deq/residential/pages/onsite-licensing.aspx) |
| Installer Certification | VALIDATED | The individual credential a person must hold before their business can get an Installer (or Combined) SDS license — "at least one member or employee of the licensed business must be a certified installer." Requires the DEQ Initial Installer Certification course (2-day, exam, 70% pass minimum), commonly delivered via Chemeketa Community College. Recertification every 3 years with 18 hours of approved continuing education. Source: [oregon.gov/deq/Residential/Pages/Onsite-Certification.aspx](https://www.oregon.gov/deq/Residential/Pages/Onsite-Certification.aspx) |
| Maintenance Provider Certification | VALIDATED | A **separate** individual credential, distinct from Installer Certification, required for anyone who "inspects, maintains, or certifies maintenance of onsite systems using alternative treatment technologies, recirculating gravel filters, or sand filters." Also requires manufacturer-specific certification for the exact ATT product being serviced. 1-day course, same exam/recert structure. This is the credential relevant to ongoing service contracts on alternative systems (see §5) — genuinely distinct from installing a new conventional system. Source: same as above. |
| Oregon DEQ Onsite Septic Business License Search | VALIDATED | DEQ's own public search tool for verifying whether a business holds an active Installer/Pumper/Combined SDS license — the direct DEQ-side equivalent of the CCB license lookup already used on the homepage. [oregon.gov/deq/residential/pages/onsite-search.aspx](https://www.oregon.gov/deq/residential/pages/onsite-search.aspx) |

**Note on "Installer I / Installer II":** the task brief asked whether Oregon uses tiered installer categories like "Licensed Installer II." Verified directly: **Oregon's actual structure does not use a numbered I/II tier system.** The real categories are the license types (Installer / Pumper / Combined) and the certification types (Installer Certification / Maintenance Provider Certification) documented above. Do not use "Installer II" or similar invented tier language anywhere in this page's content — it does not correspond to a real Oregon credential.

## 4. Regulatory Authority Entities

| Entity | Validation | Detail |
|---|---|---|
| Oregon Department of Environmental Quality (DEQ) | VALIDATED — reused verbatim from `../home/entity-inventory.csv` row 6 | State agency; regulates onsite wastewater statewide under OAR 340-071 |
| DEQ Onsite Wastewater Management Program | VALIDATED — reused verbatim from `../home/entity-inventory.csv` row 7 | The specific program within DEQ |
| Oregon Administrative Rules Chapter 340, Division 71 | VALIDATED | Confirmed correct citation — governs onsite wastewater treatment systems statewide: permitting, design, installation, operation, licensing/certification, community and large systems. [oregon.public.law/rules/oar_chapter_340_division_71](https://oregon.public.law/rules/oar_chapter_340_division_71) |
| DEQ Contract County / Agent County structure (OAR 340-071-0120) | VALIDATED — NEW | Under OAR 340-071-0120, DEQ has entered into agreements with local jurisdictions authorizing them to act as DEQ's agent for permitting onsite systems (receiving/processing applications, issuing permits, enforcing, performing required inspections). Multi-source corroboration found that **DEQ directly manages only Curry, Jackson, and Josephine counties**; **the other 33 Oregon counties, including Lane County, operate as DEQ contract/agent counties.** See `07-oregon-authority.md` §1 for full sourcing and the appropriate hedge language. |
| Lane County Land Management Division — Subsurface Sanitation Program | VALIDATED | The specific program within Lane County's Land Management Division (Public Works) that administers septic permitting locally, per its own published general-information page. Distinct from, but organizationally adjacent to, the Building Program and Land Use Planning Program — all three sit within the same Land Management Division and a septic project typically touches at least two of them. [lanecounty.org .../on-_site_wastewater/subsurface_sanitation_permits_general_information](https://www.lanecounty.org/government/county_departments/public_works/land_management_division/on-_site_wastewater/subsurface_sanitation_permits_general_information) |
| ePASS (Lane County's online permitting portal) | VALIDATED_LOCAL | Named directly on Lane County's own on-site wastewater page as the recommended application channel for homeowners and contractors. |
| Oregon Construction Contractors Board (CCB) | VALIDATED — reused verbatim from `../home/entity-inventory.csv` row 5 | Governs D&D's general excavation/construction authority; explicitly distinct from DEQ septic authority (§1-2 above) |

## 5. System-Type Entities (NEW for this page)

| Entity | Validation | Detail |
|---|---|---|
| Septic Tank | VALIDATED | Standard component; primary settling/anaerobic-digestion vessel |
| Drainfield / Leach Field | VALIDATED | Standard component; the soil-dispersal and final-treatment area downstream of the tank |
| Distribution Box (D-box) | VALIDATED_LOCAL | Standard component; splits effluent flow evenly across drainfield lines |
| Conventional (Standard) System | VALIDATED | Gravity-fed tank + gravity-fed drainfield; Oregon's baseline system type where soil/site conditions allow it. Typical installed cost $3,000-$10,000 (see `07-oregon-authority.md` §4 for full cost sourcing) |
| Alternative Treatment Technology (ATT) | VALIDATED | The umbrella term Oregon DEQ itself uses (not just an industry term) for any system beyond a conventional design — required when soil, water table, lot size, or slope don't support a conventional system. DEQ maintains its own "Approved Alternative Treatment Technology Products" list. [oregon.gov/deq/Residential/Pages/Onsite-ATT.aspx](https://www.oregon.gov/deq/Residential/Pages/Onsite-ATT.aspx) |
| Aerobic Treatment Unit (ATU) | VALIDATED | A specific ATT subtype that actively aerates wastewater; 2-3x conventional cost plus an ongoing monthly service-contract requirement under DEQ rules (Maintenance Provider involvement, see §3) |
| Sand Filter System (intermittent / recirculating) | VALIDATED | Another ATT subtype; named directly in Oregon's own regulatory list of residential system types (standard, capping fill, pressure distribution, sand filter) |
| Recirculating Gravel Filter | VALIDATED_LOCAL | Named directly in DEQ's own Maintenance Provider certification scope language, alongside sand filters and ATTs |
| Capping Fill System | VALIDATED_LOCAL | An Oregon-specific system type named directly in DEQ's own residential system-type list — used where native soil depth to a limiting layer (rock, hardpan, water table) is too shallow for a conventional system |
| Pressure Distribution | VALIDATED_LOCAL | A distribution method (as opposed to gravity) named directly in DEQ's own residential system-type list; can be paired with several system types above |
| AdvanTex (Orenco) | VALIDATED_LOCAL (brand, not confirmed as D&D's installed brand) | Named specifically by competitor Braun Excavating ("advantex, sand filters"); a real, commercially available ATT product line. Do not imply D&D installs this specific brand without confirming with David. |
| Mound System | VALIDATED_LOCAL | Common alternative-system type for high water table or shallow soil sites; general industry term, not confirmed Oregon-specific terminology in this pass |

## 6. Process Entities

| Entity | Validation | Detail |
|---|---|---|
| Site Evaluation | VALIDATED | Reused/confirmed from `../site-preparation/07-oregon-authority.md` §5 — the formal test-pit-based process (minimum 2 pits, 3 preferred, 50-100ft apart, 2ft x 4ft x 5ft each) that determines soil suitability and system type before a permit is issued |
| Percolation Test / "Perc Test" | VALIDATED_LOCAL | Common colloquial term homeowners search for; in Oregon's actual process this is folded into the broader site evaluation rather than a separately-named standalone test — worth clarifying on-page since the search term is real but the process framing differs from some other states |
| Drainfield Protection / Sequencing Rule | VALIDATED — reused verbatim from `../site-preparation/07-oregon-authority.md` §5 | Once a drainfield location is proposed/approved, it must not be cut, filled, paved, or otherwise disturbed — doing so can void the site's septic approval. This page should cite this same finding rather than re-deriving it, per the task's explicit instruction, and can go deeper into the septic-side consequences (re-evaluation cost, delay, potential loss of an already-scarce suitable drainfield location) |
| Repair-vs-Replace Threshold | VALIDATED_LOCAL — reused verbatim from `../home/entity-inventory.csv`/`08-gap-analysis.md` | Septic-industry rule of thumb: if repair cost exceeds roughly 50% of full replacement cost, replacement is the more sensible long-term choice |
| Pumping Frequency Guidance | VALIDATED | Oregon DEQ's own published guidance: pump every 3-5 years depending on household size/tank capacity, or inspect every 5-7 years and pump once solids exceed ~40% of tank volume. [oregon.gov/deq/Residential/Pages/Onsite-about.aspx](https://www.oregon.gov/deq/Residential/Pages/Onsite-about.aspx) |
| Home-Sale Septic Disclosure | VALIDATED — NEW | Oregon does not appear (per this research pass) to mandate a septic-specific inspection by state statute at time of sale. What IS confirmed: ORS 105.465 requires a Seller's Property Disclosure Statement covering known material defects (including known septic problems), and industry practice commonly adds an On-Site Sewage Addendum to the purchase agreement; lenders and buyers frequently require an independent septic inspection as a practical (not legal) condition of the transaction. See `07-oregon-authority.md` §5 for full hedge and sourcing. |

## 7. Location Entities (reused verbatim — canonical forms already established)

Lane County, Eugene, Springfield, Cottage Grove, Junction City, Creswell, Veneta, Florence, Oakridge, Coburg, Lowell, Willamette Valley — all `VALIDATED`, reused verbatim from `../home/entity-inventory.csv` rows 11-22. No new location entities for this page; septic demand skews toward the rural/unincorporated parts of these same service areas (properties outside municipal sewer service), which is worth stating explicitly in body copy rather than as a new entity.

## 8. Competitor Entities (see `04-competitor-matrix.md` for full analysis)

**Critical finding for this page:** unlike the prior four pages in this pipeline, the relevant competitive set for septic is NOT simply the same 8-10 excavation contractors — roughly half of them don't do septic at all, and a wholly separate category of dedicated septic/sewer specialty companies competes here that never showed up in the excavation/grading/land-clearing research. See `04-competitor-matrix.md` for the full breakdown.

- **All Dirt, Inc.** — VALIDATED_LOCAL, reused base entity — confirmed full septic service line (pumping, installation, ATT, specialized drainfields)
- **Emerald Excavating** — VALIDATED_LOCAL, reused base entity — confirmed DEQ# 33500, dedicated `/septic-systems` page
- **McKenzie Excavating** — VALIDATED_LOCAL, reused base entity — confirmed dedicated `/septic-systems` page
- **Braun Excavating** — VALIDATED_LOCAL, reused base entity — confirmed septic install/repair, names AdvanTex and sand filters specifically
- **Danco Excavation** — VALIDATED_LOCAL, reused base entity — confirmed they do NOT install septic themselves; they explicitly position as providing "excavation and site preparation support for septic system installations and repairs" for other septic contractors. Genuinely useful nuance: even a competitor with a real DEQ number (39637) on file draws this exact site-prep-vs-installer distinction.
- **Heavy D Excavation** — VALIDATED_LOCAL, reused base entity — confirmed NO septic service found
- **Strasheim Contracting** — VALIDATED_LOCAL, reused base entity — no septic service found in this pass
- **A&D Excavation and Land Improvement** — VALIDATED_LOCAL, reused base entity — septic status not confirmed in this pass (same status as prior packs)
- **Oregon Septic** (oregonseptic.co) — NEW, VALIDATED_LOCAL — dedicated septic specialist, self-described "Eugene's #1 Septic Service Provider," pumping/DEQ inspections/24-7 emergency repairs
- **Best Septic** — NEW, VALIDATED_LOCAL — dedicated septic specialist, 15+ years, serves Lane/Linn/Benton/Marion/Polk/Douglas counties, pumping-focused with a large vacuum-truck fleet, 24/7 emergency
- **Westco Services** — NEW, VALIDATED_LOCAL — dedicated septic specialist, full inspections including camera line-scoping and drainfield flow testing, serves Eugene/Springfield/Creswell/Cottage Grove
- **Royal Flush Environmental Services** — NEW, VALIDATED_LOCAL — combined septic + excavation specialist, Eugene-based

## 9. Equipment Entities

No new equipment entities specific to septic beyond the excavation-category equipment already documented in `../home/entity-inventory.csv` (excavator, skid steer, dump truck, compactor). Septic installation is fundamentally an excavation task with a regulatory/design layer on top, not a distinct equipment category. Do not fabricate septic-specific equipment brands (e.g., a specific vacuum truck brand for pumping) since D&D does not offer pumping per the established scope fence.

## 10. Schema Type Entities

| Entity | Validation | Detail |
|---|---|---|
| Service (schema.org type) | VALIDATED — reused from sibling packs | Primary recommended `@type` for this page, `provider` referencing the `GeneralContractor` business entity |
| GeneralContractor (schema.org type) | VALIDATED — reused from `../home/entity-inventory.csv` row 48 | Primary business-level `@type`, unchanged for this page |
| EducationalOccupationalCredential (schema.org type) | VALIDATED | Already used in `home-content.md`'s shipped JSON-LD for the `hasCredential` property — reuse the same structure here rather than inventing a new schema pattern for the deeper explanation |

---

## Validation Gate Summary

All entities above are either `VALIDATED` (confirmed via a live, citable source fetched directly in this research pass or a prior pack in this project) or explicitly flagged `NOT_FOUND` / `NOT CONFIRMED FOR D&D` where the connection to D&D specifically is unverified. The DEQ credential-category research (§3) was independently verified against `oregon.gov/deq` directly, per the task's explicit instruction not to assume Oregon uses a tiered "Installer II"-style system — it does not. See `entity-inventory.csv` for the structured version.
