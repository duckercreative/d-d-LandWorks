---
description: Audit NAP consistency across the 35-directory citation list and generate the fix queue
argument-hint: [mode: audit|fix|new-citations]
---

Run the citation audit using the `local-seo` skill's 35-directory checklist.

Mode: $ARGUMENTS (default: `audit`)

**Canonical NAP (from business-info.md — must match exactly):**
- Name: `75 Degree AC`
- Address: `4800 W 34th St, Ste C50F, Houston, TX 77092`
- Phone: `(713) 598-2737`
- Website: `https://75degreeac.com`

**Phase 1 — Read the tracker**
- `01-research/citation-tracker.csv` or master sheet tab "📌 Citation Tracker"
- Expected: 35 directories with columns `directory | url | status | last-checked | NAP-match | issues`

**Phase 2 — Audit (mode: `audit` or `fix`)**
For each of the 35 directories, fetch the live listing and compare to canonical NAP:
- Tier 1 (must-have): GBP, Bing Places, Apple Maps, Facebook, Yelp, BBB, Angi, HomeAdvisor, Thumbtack, Nextdoor
- Tier 2 (HVAC/home-services): Houzz, Porch, Networx, FurnaceCompare, ModernizeHome, ServiceMagic
- Tier 3 (local Houston): HoustonChronicle.com directory, GreaterHouston Partnership, Houston BBB, Chamber of Commerce
- Tier 4 (general): YellowPages, Superpages, Citysearch, Foursquare, MapQuest, Bing Local, DuckDuckGo, Yandex, Hotfrog, Brownbook, eLocal, MerchantCircle, LocalEdge, ShowMeLocal, Manta

For each mismatch: log `directory | field | current | canonical | fix-action`

**Phase 3 — Fix queue (mode: `fix`)**
Generate the exact fix queue:
- Directories needing login → credentials location + claim flow steps
- Directories auto-fixable via API (Facebook, etc.) → generate the API call
- Directories requiring support ticket → draft the email with business verification docs

**Phase 4 — New citation opportunities (mode: `new-citations`)**
Cross-reference with competitor citation profiles (see `competitor-analysis` skill) and propose 10+ net-new citation targets ordered by:
1. Domain Authority
2. HVAC/home-services relevance
3. Houston local relevance
4. Ease of claim

**Output:**
- Dark HTML report: `08-reporting/monthly/[YYYY-MM]/citations-audit-[date].html` (YYYY-MM is the month of [date]; ads-audit dark style, KPI cards: total citations, NAP-match %, Tier 1 completion, missing high-value)
- Fix queue markdown: `01-research/citation-fix-queue-[date].md`
- Update tracker CSV with `last-checked` timestamp + status

Always `open` the HTML after writing.
