---
description: Build or update topical authority map for 75 Degree AC — identify content gaps and cluster strategy
argument-hint: [focus: full|ac|heating|hvac|air-quality|location]
---

Build/update the topical authority map for 75 Degree AC. Focus: $ARGUMENTS

Read first:
- `01-research/topical-map.md` — existing topical map
- `01-research/keywords-research.md` — keyword clusters
- `02-site-architecture/site-architecture.md` — current page inventory
- `02-site-architecture/page-tracker.csv` — page statuses
- `services-list.md` — full service hierarchy

**Topical Authority Framework:**

75 Degree AC needs to be recognized as an authority across 4 main topic clusters:

**Cluster 1: AC Repair (Primary — highest commercial value)**
Hub: /ac-repair-houston-tx/
Spokes needed:
- Emergency AC repair (exists: /emergency-ac-repair-houston-tx/)
- Same-day AC repair (exists: /same-day-ac-repair-houston/)
- Residential AC repair (exists: /residential-ac-repair-houston/)
- Commercial AC repair (exists: /commercial-ac-repair-houston-tx/)
- AC repair cost (exists: /ac-repair-cost-houston-tx/)
- AC repair near me (exists: /ac-repair-near-me/)
- After-hours AC repair (exists: /after-hours-ac-repair-houston/)
- [Gap] AC repair warranty Houston
- [Gap] AC repair vs DIY Houston
- Signs your AC needs repair (exists: /signs-ac-needs-repair/)
- Common AC problems Houston (exists: /common-ac-problems-houston-tx/)
- AC repair vs replacement (exists: /ac-repair-vs-replacement-houston-tx/)

**Cluster 2: AC Maintenance (High impression opportunity)**
Hub: /ac-maintenance-checklist-houston/
Spokes needed:
- Houston AC maintenance guide (exists)
- Energy-efficient AC maintenance (exists)
- AC maintenance myths Houston (exists)
- Preventative AC maintenance (expansion needed)
- Seasonal AC maintenance Houston
- [Gap] AC filter replacement guide Houston
- [Gap] AC coil cleaning guide Houston
- [Gap] When to service AC Houston
- AC tune-up Houston (exists: /ac-tune-up-houston/)
- [Gap] AC maintenance contract Houston

**Cluster 3: AC Installation**
Hub: /ac-installation-houston-tx/ (create/optimize)
Spokes needed:
- HVAC installation Houston (exists: /ac-installation-houston-guide/)
- Central AC installation
- Ductless mini-split installation
- Heat pump installation
- AC brand comparison Houston (Carrier vs Trane vs Lennox)
- [Gap] How to size AC for Houston home
- [Gap] Cost of AC installation Houston 2026
- AC installation Katy TX (exists: /ac-installation-katy-tx/)

**Cluster 4: Air Quality & HVAC General**
Hub: Create /hvac-contractor-houston-tx/ (redirect hvac-companies-houston here)
Spokes: ductwork, air quality, indoor air quality, humidifier, purifier

**Content Gap Analysis:**
Compare existing pages (page-tracker.csv) against cluster map.
Flag every spoke that is:
- [MISSING] — page doesn't exist (create)
- [THIN] — page exists but needs expansion
- [NOINDEX] — page exists but blocked (fix first — see seo-solutions.md)
- [LIVE] — page is indexed and optimized

**Output:**

Updated topical map: `01-research/topical-map-[date].md`
Content gap priority list: `01-research/content-gaps-[date].md`

Format the gap list as:
| Priority | Page to Create/Fix | Cluster | Keyword | Monthly Volume (est) | Action |
|----------|-------------------|---------|---------|---------------------|--------|
