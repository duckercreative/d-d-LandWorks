---
name: keyword-research
description: >
  Keyword research methodology for 75 Degree AC — discovery, clustering, intent mapping,
  cannibalization detection, and GSC-grounded opportunity analysis.
  Activates when discovering new keywords, mapping intents, or finding ranking gaps.
version: 1.0.0
client: 75 Degree AC
---

# Keyword Research — 75 Degree AC

## Research Hierarchy

Always start with data you have, not tools you don't:

1. **GSC data** (03-gsc/data/queries-202604.csv) — real impressions, real positions, ground truth
2. **Competitor pages** (WebFetch) — real keyword targets in their title tags, H1s, H2s
3. **Autocomplete** (WebSearch) — real query variants people type
4. **Topic clustering** — group by semantic intent, not just keyword similarity

---

## Input Files

- `03-gsc/data/queries-202604.csv` — actual ranking queries
- `03-gsc/data/queries-by-page.csv` — query-to-page mapping
- `01-research/keywords-research.md` — existing keyword data
- `01-research/keywords-research.csv` — keyword CSV
- `01-research/competitor-analysis.md` — competitor keyword data
- `services-list.md` — complete service list (keyword seeds)
- `service-areas.md` — location modifiers

---

## Keyword Framework

### Primary Service Clusters (in priority order)

**Cluster 1: AC Repair (Highest Priority — Commercial Intent)**
- Head term: "ac repair houston" (4,317 impressions, pos 12.3)
- Core variants: ac repair houston tx, houston ac repair, air conditioning repair houston, ac repair near me houston
- Emergency sub-cluster: emergency ac repair houston, 24/7 ac repair houston, ac repair after hours
- Residential: residential ac repair houston, home ac repair houston
- Commercial: commercial ac repair houston
- Cost: ac repair cost houston, how much ac repair houston, ac repair estimate houston
- Brand-specific: carrier ac repair houston, trane repair houston, lennox repair houston

**Cluster 2: AC Maintenance (Highest Impressions — 23,795)**
- Head term: "ac maintenance" (pos 55 — major opportunity)
- Local variants: ac maintenance houston, ac maintenance houston tx, ac service houston
- Tune-up: ac tune up houston, ac tune-up near me houston, ac tune up cost houston
- Seasonal: spring ac maintenance houston, summer ac check houston, fall ac service houston
- Plans: ac maintenance plan houston, ac service agreement houston

**Cluster 3: HVAC General (Authority Building)**
- Head term: "hvac repair houston" (867 impressions, pos 31.9)
- Contractor: hvac contractor houston, hvac companies houston, best hvac company houston
- Installation: hvac installation houston (462 imp, pos 22.6), new hvac system houston
- Service: hvac service houston, hvac maintenance houston

**Cluster 4: Installation (High Revenue)**
- Head term: "ac installation houston", "hvac installation houston"
- Central: central air installation houston, central ac unit installation houston
- Ductless: ductless mini split houston, mini split installation houston, ductless ac houston
- Heat pump: heat pump installation houston

**Cluster 5: Heating (Seasonal — Oct–Mar)**
- Head term: furnace repair houston, heating repair houston
- Emergency: emergency furnace repair houston, furnace not working houston
- Replacement: furnace replacement houston, new furnace houston

**Cluster 6: Location Pages**
Matrix: [service] + [city/neighborhood]:
- Services: ac repair, hvac repair, ac installation, ac maintenance
- Cities: Katy, Sugar Land, The Woodlands, Cypress, Spring, Tomball, Missouri City, Richmond, Pasadena, Baytown
- Neighborhoods: Montrose, Heights, Memorial, River Oaks, Midtown, Bellaire, Galleria, Pearland, Friendswood

---

## Search Intent Classification

| Intent | % of HVAC Searches | Page Type |
|--------|-------------------|-----------|
| Transactional (T) | ~45% | Service pages — immediate conversion |
| Commercial (C) | ~25% | Service + cost pages — comparing options |
| Informational (I) | ~20% | Blog/guide pages — research phase |
| Navigational (N) | ~10% | Brand pages — looking for us specifically |

**Transactional keywords (prioritize for service pages):**
"ac repair houston tx" | "emergency ac repair" | "ac installation houston" | "furnace repair houston"

**Commercial keywords (prioritize for cost/comparison pages):**
"ac repair cost houston" | "hvac companies houston" | "best ac company houston" | "ac repair vs replacement"

**Informational keywords (prioritize for blog/guide content):**
"how much does ac repair cost" | "signs ac needs repair" | "how often service ac houston" | "ac maintenance checklist"

---

## Cannibalization Detection

### Active Cannibalization Clusters (from seo-solutions.md Issue 6)

**Cluster: "ac maintenance houston" — 25,000+ impressions split across:**
- /ac-maintenance-checklist-houston/ ← DESIGNATE AS CANONICAL
- /houston-ac-maintenance-guide/ (differentiate to guide/informational)
- /energy-efficient-ac-maintenance-houston/ (differentiate to energy-saving angle)
- /ac-maintenance-myths-houston/ (differentiate to myths/informational)
- 30+ noindex pages targeting same keyword (being deleted)

**Cluster: "ac repair houston" — 4,317 impressions split across:**
- /ac-repair-houston-tx/ ← DESIGNATE AS CANONICAL
- /residential-ac-repair-houston/ (differentiate to residential-specific)
- /same-day-ac-repair-houston/ (differentiate to same-day angle)

**Cluster: "hvac contractor houston" — 240 impressions:**
- / (Homepage) ← DESIGNATE AS CANONICAL
- /hvac-companies-houston/ (redirect to homepage)
- /hvac-service-and-repair/ (differentiate to "hvac repair houston")

### Cannibalization Fix Process
1. Identify canonical page (best URL, most authority, most content)
2. Set canonical tag in Rank Math → Advanced → Canonical URL
3. Differentiate other pages to sub-keywords
4. Add internal links TO canonical from all related pages

---

## GSC Data Analysis Process

From `03-gsc/data/queries-202604.csv`:

**Quick-win identification formula:**
`Opportunity Score = Impressions × (1 / Position)`
- Position 10 query with 500 impressions = score 50
- Position 30 query with 1,000 impressions = score 33
- Higher score = higher quick-win opportunity

**Content gap identification:**
- Queries with >200 impressions + position >30 + no current optimized page = create new page
- Queries with >200 impressions + position 10–30 + page exists = optimize existing page

**Quick-Win Priority List (pre-built from GSC data):**

| Keyword | Impressions | Current Pos | Opportunity | Action |
|---------|------------|-------------|------------|--------|
| ac repair houston | 4,317 | 12.3 | HIGH | Optimize /ac-repair-houston-tx/ |
| ac maintenance | 23,795 | 55 | HUGE | Optimize /ac-maintenance-checklist-houston/ |
| hvac repair houston | 867 | 31.9 | HIGH | Expand /hvac-service-and-repair/ |
| hvac installation houston | 462 | 22.6 | HIGH | Create/optimize /ac-installation-houston-tx/ |
| hvac contractor houston | 240 | 18.9 | MEDIUM | Optimize Homepage |
| commercial hvac houston | 209 | 4.4 | HIGH | Optimize Homepage + /commercial-ac-service-houston/ |

---

## Autocomplete Research Process

For each primary keyword, systematically check autocomplete:
1. Go to Google.com (WebSearch or browser)
2. Type "[keyword] [a]", "[keyword] [b]", etc. through z
3. Also try: "[keyword] near me", "[keyword] cost", "[keyword] same day"
4. Document all suggestions — each is a real user query

**Seeds to run autocomplete on:**
- "ac repair houston "
- "hvac contractor houston "
- "emergency ac repair houston "
- "ac installation houston "
- "furnace repair houston "
- "ac maintenance houston "

---

## Keyword Prioritization Matrix

| Score | Criteria |
|-------|---------|
| 1–10 | Relevance (1=irrelevant, 10=exact match to service) |
| 1–10 | Commercial Intent (1=informational, 10=ready to buy) |
| 1–10 | Feasibility (10=we rank already, 5=page exists, 1=no page) |
| 1–10 | Volume (1=<10/mo, 5=100/mo, 10=1000+/mo) |

**Priority = (Relevance × Intent × Feasibility × Volume)^0.25**

Anything scoring >6 = prioritize within 30 days
Anything scoring 4–6 = plan for 60–90 days
Anything scoring <4 = backlog

---

## Output Files

Keyword research: `01-research/keywords-[date].md`
Updated CSV: `01-research/keywords-research.csv`
Cannibalization map: `01-research/cannibalization-[date].md`
