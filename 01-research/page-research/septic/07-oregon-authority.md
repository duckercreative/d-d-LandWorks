# Oregon / Lane County Authority Signals — Septic Install & Repair (`/services/septic-install-repairs/`)

This is the regulatory core of this pack. Every fact below was pulled from live sources during this research session (2026-09-08), verified directly against `oregon.gov/deq` and `lanecounty.org` wherever possible rather than assumed or reused wholesale from the excavation-permit research on prior pages — per the task's explicit instruction that septic needs its own dedicated regulatory research, not just reused excavation permit facts. Where a fact genuinely is shared with a prior pack (the test-pit/site-evaluation process, the drainfield-protection sequencing rule), it is cited and cross-referenced rather than re-derived, also per instruction.

---

## 1. Does Lane County or Oregon DEQ Directly Issue Septic Permits? (the task's core regulatory question — answered directly)

**Lane County is a DEQ contract/agent county, not one of the small number of counties DEQ manages directly.**

- Under **OAR 340-071-0120 (Jurisdiction and Policy)**, Oregon DEQ has entered into agreements with local jurisdictions authorizing them to act as DEQ's agent for permitting onsite wastewater systems — receiving and processing applications, issuing permits, enforcing, and performing required inspections.
- Multi-source corroboration found that **DEQ directly manages residential and small-business septic permitting in only three counties: Curry, Jackson, and Josephine.** In Oregon's other 33 counties — Lane County included — DEQ has a contract with the local jurisdiction to perform these duties.
- Lane County's own On-Site Wastewater program page states its mission as regulating "the installation, repair, alteration, and maintenance of onsite wastewater disposal systems (septic systems)" for the county, and its Subsurface Sanitation Program (within the Land Management Division, Public Works) is the office that actually receives applications, conducts site evaluations, and issues permits locally.
- **Confidence level:** high, based on convergent evidence (the general 3-county-direct / 33-county-contract structure, Lane County's own published program description, and Lane County's own detailed permit-process pages describing local application, review, and issuance) — but the specific DEQ "county agent list" page (`oregon.gov/deq/residential/pages/onsite-contacts.aspx`) could not be fully rendered in this pass to see Lane County named on a literal roster. **Recommend a direct, final confirmation against that specific contacts page before this fact is published as an absolute, unattributed statement** — though for content purposes, "Lane County administers septic permitting locally, as an authorized agent of Oregon DEQ" is a safe, well-supported way to state it.
- **Source:** [OAR 340-071-0120 — Jurisdiction and Policy](https://regulations.justia.com/states/oregon/chapter-340/division-71/section-340-071-0120/) · [Oregon DEQ — Onsite Septic Staff and County Agent Contact Information](https://www.oregon.gov/deq/residential/pages/onsite-contacts.aspx) · [Lane County — On-Site Wastewater](https://www.lanecountyor.gov/government/county_departments/public_works/land_management_division/on-_site_wastewater) · [Lane County — Subsurface Sanitation Permits General Information](https://www.lanecounty.org/government/county_departments/public_works/land_management_division/on-_site_wastewater/subsurface_sanitation_permits_general_information) · verified 2026-09-08.

## 2. Real Oregon DEQ Credential Categories (verified directly — do NOT use invented tier names)

The task brief specifically asked whether Oregon uses something like a "DEQ Licensed Installer II" tier. **It does not.** The real structure, verified directly against DEQ's own licensing and certification pages:

**Business licenses (Sewage Disposal Service license) — three types:**
1. **Installer** license — for businesses constructing/installing septic systems
2. **Pumper** license — for businesses pumping and disposing of septic tank contents
3. **Combined Pumper/Installer** license — for businesses doing both

Bond requirement: **$15,000** for Installer or Combined licenses, **$5,000** for Pumper-only licenses.

**Individual certifications — two types, and they are distinct from each other:**
1. **Installer Certification** — required before a business can hold an Installer or Combined license; at least one member/employee of the licensed business must hold this. Requires DEQ's Initial Installer Certification course (2-day, commonly delivered through Chemeketa Community College, exam with a 70% pass minimum).
2. **Maintenance Provider Certification** — a **separate** credential required specifically for inspecting, maintaining, or certifying maintenance on systems using alternative treatment technologies (ATTs), recirculating gravel filters, or sand filters. Also requires manufacturer-specific certification for the exact product being serviced. 1-day course, same exam structure.

Both certifications require recertification every 3 years with 18 hours of approved continuing education.

**What this means for D&D's content:** business-info.md confirms D&D holds "DEQ Certified" status generally, which the homepage already correctly frames as qualifying D&D "to install and repair septic systems under state onsite wastewater regulations." This page can explain the real credential structure above as general Oregon regulatory education, but **should not assert which specific license type or certification David personally holds**, and should absolutely not invent an "Installer II" or similarly-tiered credential name — that terminology does not exist in Oregon's actual system.

- **Source:** [Oregon DEQ — Sewage Disposal Service Business Licensing](https://www.oregon.gov/deq/residential/pages/onsite-licensing.aspx) · [Oregon DEQ — Installer and Maintenance Provider Certification](https://www.oregon.gov/deq/Residential/Pages/Onsite-Certification.aspx) · verified 2026-09-08.

## 3. Oregon Administrative Rules Chapter 340, Division 71 (confirmed correct citation)

This is the correct statewide regulatory citation for onsite wastewater treatment systems — confirmed accurate (the homepage and prior packs already cite this correctly; this pass independently re-verified it rather than assuming it was right). OAR Chapter 340, Division 71 covers: property owner responsibilities, permitting and site evaluation, system design/construction/alteration standards, community and large systems, sewage disposal service business licensing, and installer/maintenance-provider training and certification requirements.

- **Source:** [OAR Chapter 340, Division 71 — full text](https://oregon.public.law/rules/oar_chapter_340_division_71) · verified 2026-09-08.

## 4. Conventional vs. Alternative Treatment Systems — Real Cost Data

This is the single highest-value content gap this pack identified (see `08-gap-analysis.md` Gap #1) — zero competitors explain this plainly, despite it being the biggest single cost variable a septic customer faces.

| System type | Typical installed cost | Notes |
|---|---|---|
| Conventional (standard, gravity-fed) system | **$3,000-$10,000** | Oregon's baseline system type, used where soil, water table, and lot size support it |
| Alternative Treatment Technology (ATT) — general/engineered | **$12,000-$30,000+** | DEQ's own umbrella term for any non-conventional system; required where soil, water table, slope, or lot size don't support a conventional design |
| Sand filter (intermittent) | **$7,000-$18,000** | ATT subtype |
| Sand filter (recirculating) | **$10,000-$25,000+** | ATT subtype, more complex than intermittent |
| Aerobic Treatment Unit (ATU) | **$10,000-$20,000**, roughly 2-3x a conventional system | Also carries an ongoing monthly service-contract cost a conventional system doesn't require, under DEQ's Maintenance Provider rules (§2 above) |
| National average, all types blended | **$3,593-$12,463**, national average ~**$8,017** | For general/national context only, not Lane-County-specific |
| Eugene-area actual completed projects (350 projects) | Average **$4,173-$5,963**, full range **$1,487-$10,464** | The most locally-specific figure found — reused verbatim from the homepage pack's Homeyou-sourced data; this range likely skews toward conventional systems given how far below the ATT range it sits |

**Why alternative systems cost more, in plain terms this page should use:** ATTs actively treat wastewater to a higher standard before it reaches the drainfield (mechanically, chemically, or through finer filtration media), which requires more equipment, more engineering, and — for ATUs specifically — an ongoing maintenance contract. Oregon and the broader Pacific Northwest lean on ATTs more than some other regions specifically because of environmental sensitivity around salmon streams and drinking-water aquifers, and because Willamette Valley clay soil and high water tables frequently don't meet the conditions a conventional system needs.

- **Source:** [SepticTankHub — Engineered Septic System Cost Guide (2026)](https://www.septictankhub.com/blog/engineered-septic-systems/) · [SepticTankHub — Sand Filter Septic Systems](https://www.septictankhub.com/blog/sand-filter-septic-system/) · [SepticTankHub — Aerobic Septic System (ATU) Cost](https://www.septictankhub.com/blog/aerobic-septic-system-cost/) · [Angi — How Much Does a Septic System Cost? (2026)](https://www.angi.com/articles/what-does-it-cost-install-septic-system.htm) · [Homeyou — Septic Tank Installation in Eugene, OR](https://www.homeyou.com/or/septic-tank-installation-eugene-costs) · verified 2026-09-08. **Treat these as general industry ranges, not Lane-County-specific guaranteed pricing** — consistent with this project's no-fabricated-pricing rule; the only accurate number for a specific property comes from a site evaluation and estimate.

## 5. Septic Inspection at Time of Home Sale — State Requirement or Common Practice? (verified, hedged appropriately)

**Finding: Oregon does not appear to mandate a septic-specific inspection by state statute at the time of a home sale.** What IS confirmed:

- **ORS 105.465** requires sellers of residential property to provide a completed **Seller's Property Disclosure Statement**, covering known conditions and material defects — a known septic problem falls under this disclosure duty.
- The legal standard is **actual knowledge**: sellers must disclose what they know, not conduct their own investigation to uncover unknown defects. A seller who genuinely doesn't know their system is failing has not violated the disclosure law by not knowing.
- Industry/realtor guidance (Oregon Realtors' own Property Seller Advisory) recommends that, where a property is served by septic, an inspection be completed by a qualified Onsite Wastewater Inspector, and sale agreements commonly include an **On-Site Sewage Addendum** as a standard practice — but this is a **transactional/contractual practice, not a state legal mandate**.
- In practice, **lenders and buyers frequently require an independent septic inspection anyway** as a practical condition of financing or closing, which is why this often gets described (inaccurately) as "required" — it's required by the deal, not by Oregon law.

**How this page should state it:** "Oregon doesn't require a septic-specific inspection by law before you sell your home, but sellers must disclose known septic problems, and most lenders and buyers ask for an independent inspection anyway before closing." This gives the distressed, sale-timeline-pressured buyer group (see `05-intent-triangulation.md`) an accurate answer rather than an oversimplified "yes" or "no."

- **Source:** [Oregon Realtors — Oregon Property Seller Advisory](https://oregonrealtors.org/sites/default/files/Oregon%20Property%20Seller%20Advisory_11.05.18_MVD%5B1%5D.pdf) · [Harris Sliwoski LLP — Selling a Home in Oregon: What You Need to Disclose](https://harris-sliwoski.com/blog/selling-a-home-in-oregon-what-you-need-to-disclose-and-what-you-dont/) · verified 2026-09-08.

## 6. Septic Tank Pumping Frequency Guidance (Oregon DEQ's own recommendation)

- **DEQ's general recommendation:** pump the tank every **3-5 years**, depending on household size and tank capacity. A 1,000-gallon tank serving a 4-person, 4-bedroom household may need pumping roughly every 3 years; the same tank serving 2 people may go roughly 6 years.
- **Alternative, condition-based approach DEQ also describes:** have the tank inspected every **5-7 years** for solids accumulation, and pump once solids exceed roughly **40% of tank volume**, using a DEQ-licensed pumper.
- This page should present both framings (schedule-based and condition-based) since DEQ itself publishes both, rather than picking one and implying it's the only correct approach.
- **Source:** [Oregon DEQ — About Septic Systems](https://www.oregon.gov/deq/Residential/Pages/Onsite-about.aspx) · verified 2026-09-08.

## 7. Septic Permit Process and Timeline (Lane County-specific, new for this page)

- **Sequence:** (1) submit a site evaluation application (minimum 2 test pits, 3 preferred, spaced 50-100 feet apart, each 2ft wide x 4ft long x 5ft deep — reused verbatim from `../site-preparation/07-oregon-authority.md` §5, do not re-derive); (2) once the site evaluation is approved, apply to the Subsurface Sanitation Program for the actual septic permit, commonly alongside a building permit application if applicable; (3) once planning clearance is approved, submit final septic and building permit applications, and apply for any applicable state electrical permits at the same stage.
- **Application channels:** Lane County recommends its online **ePASS** portal for homeowners and contractors; in-person/mail applications go to 3050 North Delta Hwy, Eugene, OR 97408; email is available for building and sanitation permits only.
- **Timeline:** once a permit is approved, the physical installation itself commonly takes **3-7 days**. The full process — site evaluation, system design, and permit approval — can take **several weeks to a few months** depending on scheduling and site complexity. No exact Lane-County-specific committed turnaround time (e.g., "X business days for site evaluation review") was found in this pass — present as a general range, and recommend confirming current wait times directly with Lane County's Subsurface Sanitation Program.
- **Fee:** a secondary source cites a Lane County septic site evaluation fee of approximately **$866-$998**, with a broader estimate of **$3,000-$6,000** for combined structural, trade, and septic permit fees on a typical new home. **This fee figure is not confirmed directly against Lane County's own current fee schedule in this pass — flag for direct confirmation before publishing as an exact number**, consistent with this project's established practice of hedging secondary-sourced government fee figures (see `../site-preparation/07-oregon-authority.md` §1 for the same pattern).
- **Who can do the work:** Lane County's own guidance states it is "generally advisable to have the work completed by a licensed installer," but notes a homeowner may do the work themselves on their own property — a real, if rarely advisable, option worth acknowledging honestly rather than glossing over.
- **Source:** [Lane County — Subsurface Sanitation Permits General Information](https://www.lanecounty.org/government/county_departments/public_works/land_management_division/on-_site_wastewater/subsurface_sanitation_permits_general_information) · [Lane County — Test Pit Information](https://www.lanecounty.org/government/county_departments/public_works/land_management_division/on-_site_wastewater/test_pit_information) · [Willamette Craftworks — Lane County Building Permits 2026 Guide](https://willamettecraftworks.com/permitting/lane-county-or/) · verified 2026-09-08.

## 8. The Site-Prep-and-Septic Sequencing Rule (reused verbatim per task instruction — do not re-derive)

Already fully researched and cited in `../site-preparation/07-oregon-authority.md` §5 and shipped in `../../../07-landing-pages/content/site-preparation-content.md`'s "Site Prep and Your Septic System" section: once a drainfield location is proposed or approved through the test-pit evaluation, it **must not** be cut, filled, paved, have a well dug nearby, or otherwise developed — doing so can **void the site's septic approval**. This page should cite this same finding (with a link back to the site-preparation page, matching the cross-link already built into that page's content) and can go one level deeper into the septic-side consequences: re-evaluation means a second round of test pits and fees, real schedule delay, and — on a tight or difficult lot — the real possibility that no equally good alternative drainfield location exists, since suitable soil area on a given parcel is finite.

- **Source (reused, not re-verified):** [Lane County — Test Pit Information](https://www.lanecounty.org/government/county_departments/public_works/land_management_division/on-_site_wastewater/test_pit_information) · [Lane County — On-Site Wastewater](https://www.lanecounty.org/government/county_departments/public_works/land_management_division/on-_site_wastewater).

## 9. What was checked and found NOT applicable, or not confirmable, this pass

- **DEQ's specific county-agent roster page** (`oregon.gov/deq/residential/pages/onsite-contacts.aspx`) could not be fully rendered to see Lane County named on an explicit list — the finding in §1 is well-supported by convergent evidence but not a single, directly-quoted "Lane County is listed here" screenshot-grade confirmation. Flag for a final direct check before this fact is stated as a bare, unattributed absolute in published content.
- **Lane County's current exact septic permit fee schedule** was not found on a primary Lane County fee-schedule page in this pass — the $866-$998 figure comes from a secondary source and should be confirmed directly with Lane County's Subsurface Sanitation Program before being published as an exact number, following the same hedging pattern already established in `../site-preparation/07-oregon-authority.md`.
- **Whether Oregon has a state-level requirement for periodic septic system re-inspection independent of a home sale** (i.e., a mandatory recurring inspection unrelated to pumping) was not found — DEQ's own guidance frames inspection/pumping as a homeowner-responsibility recommendation, not a mandatory recurring state inspection regime, for conventional systems. ATT/alternative systems DO have a mandatory ongoing service-contract requirement under Maintenance Provider rules (§2 above) — that is a real, confirmed distinction between the two system categories worth making explicit on-page.
- **David's specific DEQ license/certification number and exact category** — outside this pack's scope to confirm; explicitly flagged throughout this pack as an open item, not to be invented.

---

## Freshness Note

DEQ's fee schedules, Lane County's permit fee schedule, and the exact cost ranges for conventional vs. alternative systems are all subject to normal government/market-rate changes. Re-verify directly against `oregon.gov/deq` and `lanecounty.org` (not secondary cost-guide sources) before quoting exact fee figures in published content, and re-run this file's sourcing if the content brief for this page is built more than 90 days after 2026-09-08, consistent with every prior pack's freshness rule in this project.
