---
name: topical-map
description: >
  Topical authority and content clustering methodology for 75 Degree AC.
  Hub-and-spoke content architecture for HVAC covering AC, heating, installation,
  maintenance, and location clusters. Activates when planning content or identifying gaps.
version: 1.0.0
client: 75 Degree AC
---

# Topical Map — 75 Degree AC

## Why Topical Authority Matters

Google rewards sites that demonstrate **comprehensive coverage** of a topic, not just individual keyword optimization. For 75 Degree AC to dominate Houston HVAC search, every major HVAC sub-topic must have a dedicated, well-linked page. Current state: the site has many pages but they're poorly organized, cannibalizing each other, and missing key subtopics.

**Topical authority signals Google measures:**
- Breadth: number of unique sub-topics covered
- Depth: quality and length of content per topic
- Connectedness: internal links between related pages
- Entity co-occurrence: consistent mention of relevant entities across pages

---

## Input Files

- `01-research/topical-map.md` — existing topical map
- `02-site-architecture/page-tracker.csv` — all pages + status
- `services-list.md` — full service hierarchy
- `01-research/keywords-research.md` — keyword data

---

## Content Architecture

### Cluster 1: AC Repair (Primary Revenue Hub)

**Hub Page (canonical):** `/ac-repair-houston-tx/`
All AC repair pages link TO this hub.

```
Hub: /ac-repair-houston-tx/
├── /emergency-ac-repair-houston-tx/          [LIVE — noindex fix needed]
├── /same-day-ac-repair-houston/              [LIVE — noindex fix needed]
├── /residential-ac-repair-houston/           [LIVE — noindex fix needed]
├── /commercial-ac-repair-houston-tx/         [LIVE — noindex fix needed]
├── /ac-repair-cost-houston-tx/               [LIVE — noindex fix needed]
├── /after-hours-ac-repair-houston/           [LIVE — noindex fix needed]
├── /ac-repair-near-me/                       [LIVE — optimize or delete]
├── /signs-ac-needs-repair/                   [LIVE — noindex fix needed]
├── /common-ac-problems-houston-tx/           [LIVE — noindex fix needed]
├── /ac-repair-vs-replacement-houston-tx/     [LIVE — noindex fix needed]
├── /ac-repair-financing/                     [LIVE — indexed]
└── [GAP] /ac-repair-warranty-houston/        [CREATE]
```

### Cluster 2: AC Maintenance (Highest Impression Opportunity)

**Hub Page (canonical):** `/ac-maintenance-checklist-houston/`

```
Hub: /ac-maintenance-checklist-houston/        [INDEXED]
├── /houston-ac-maintenance-guide/             [INDEXED — differentiate]
├── /energy-efficient-ac-maintenance-houston/  [INDEXED — differentiate]
├── /ac-maintenance-myths-houston/             [INDEXED — differentiate]
├── /ac-tune-up-houston/                       [LIVE — noindex fix]
├── /preventative-ac-maintenance-houston/      [THIN — expand content]
├── /residential-ac-maintenance-plan/          [THIN — expand content]
├── /residential-ac-tune-up-houston/           [THIN — expand content]
├── /ac-coil-cleaning-houston/                 [LIVE — noindex fix]
├── [GAP] /ac-filter-replacement-houston/      [CREATE — blog]
├── [GAP] /ac-maintenance-cost-houston/        [CREATE — redirect to checklist?]
└── [GAP] /when-to-service-ac-houston/         [CREATE — informational]
```

### Cluster 3: AC Installation (High Revenue)

**Hub Page:** `/ac-installation-houston-tx/` (optimize or create)

```
Hub: /ac-installation-houston-tx/              [OPTIMIZE — may not exist]
├── /ac-installation-katy-tx/                  [LIVE — noindex fix]
├── [GAP] /central-ac-installation-houston/    [CREATE]
├── [GAP] /ductless-mini-split-houston/        [CREATE — high-value]
├── [GAP] /heat-pump-installation-houston/     [CREATE]
├── /ac-installation-houston-guide/            [THIN — expand]
├── [GAP] /ac-replacement-houston/             [CREATE — replacement intent]
└── [GAP] /hvac-brands-houston/               [CREATE — Carrier vs Trane blog]
```

### Cluster 4: HVAC General + Commercial

**Hub Page:** Homepage (/ for general HVAC contractor)

```
Hub: / (Homepage — HVAC Contractor Houston)
├── /hvac-service-and-repair/                  [THIN — expand]
├── /commercial-ac-service-houston/            [LIVE — noindex fix]
├── /commercial-ac-maintenance-houston/        [THIN — expand]
├── /commercial-ac-repair-houston-tx/          [REDIRECT to /commercial-ac-service-houston/]
├── [GAP] /commercial-hvac-houston/            [CREATE — dedicated commercial hub]
├── [GAP] /hvac-inspection-houston/            [CREATE]
└── /hvac-companies-houston/                   [REDIRECT to homepage]
```

### Cluster 5: Heating Repair (Seasonal)

**Hub Page:** `/heating-repair-houston-tx/` (create if doesn't exist)

```
Hub: /heating-repair-houston-tx/               [CREATE or OPTIMIZE]
├── /heating-ac-service-houston/               [INDEXED]
├── [GAP] /furnace-repair-houston/             [CREATE — key seasonal keyword]
├── [GAP] /furnace-replacement-houston/        [CREATE]
├── [GAP] /heat-pump-repair-houston/           [CREATE]
├── [GAP] /thermostat-repair-houston/          [CREATE]
└── [GAP] /emergency-furnace-repair-houston/   [CREATE]
```

### Cluster 6: Air Quality

**Hub Page:** `/indoor-air-quality-houston/` (create)

```
Hub: /indoor-air-quality-houston/              [CREATE]
├── [GAP] /air-duct-cleaning-houston/          [CREATE — high search volume]
├── [GAP] /air-purifier-installation-houston/  [CREATE]
├── [GAP] /uv-light-hvac-houston/              [CREATE]
├── [GAP] /air-quality-testing-houston/        [CREATE]
└── [GAP] /humidity-control-houston/           [CREATE — Houston-specific angle]
```

### Cluster 7: Location Pages

**Hub Pattern:** `/hvac-contractor-[neighborhood]-tx/`

```
Inner Houston Neighborhoods (21 live pages — verify unique content):
- Montrose, Heights, River Oaks, Memorial, Midtown, etc.

Priority Suburbs to Build:
- /ac-repair-katy-tx/             [LIVE — noindex fix]
- /ac-repair-sugar-land-tx/       [CREATE]
- /ac-repair-the-woodlands-tx/    [CREATE]
- /ac-repair-cypress-tx/          [CREATE]
- /ac-repair-spring-tx/           [CREATE]
- /ac-repair-tomball-tx/          [CREATE]
```

**🛑 Anti-doorway gate (MANDATORY — per `ai-citation-filter.md` §7 + Google March 2024 update):**

Every location page MUST satisfy ALL 6 before going LIVE:
- Unique neighborhood testimonials (≥2)
- Region-specific photos (≥1 with recognizable local context)
- Neighborhood-specific FAQs (≥3 different from parent service page)
- Unique opening paragraph (not a templated swap)
- Local-specific content (housing stock age, climate micro-zone, ZIP coverage, common system brands)
- Adjacent neighborhood internal links (3-5)

Google's March 2024 update killed 80% of templated location pages for a regional HVAC company (-63% organic traffic in 30 days). 30 deep pages outrank 300 thin ones.

### Cluster 8: Neighborhood-Level Cluster (Inner Houston, 21 neighborhoods)

**Hub Pattern:** `/hvac-contractor-[neighborhood]-tx/` (inner-loop)

Distinct landing intent from suburb pages — inner-loop neighborhoods carry different housing stock, climate micro-zones (urban heat island), and customer demographics:

```
Inner-loop neighborhoods (existing):
- Montrose, Heights, River Oaks, Memorial, Midtown, Museum District,
  Rice Village, Upper Kirby, Greenway Plaza, EaDo, Fourth Ward,
  Independence Heights, Lazybrook, Garden Oaks, Oak Forest,
  Spring Branch, West University, Bellaire, Southside Place,
  Hyde Park, Cottage Grove
```

Each neighborhood page follows the anti-doorway gate above AND adds:
- Inner-loop-specific content (urban heat island effect, pre-WWII housing stock, knob-and-tube wiring constraints, HOA context where applicable)
- Adjacent inner-loop neighborhood links
- Link to broader Houston service hub

### Cluster 9: Listicle / Aggregator Content Hub (added 2026-05-22 — AI citation strategy)

**Why this exists:** Listicles capture 21.9% of AI Mode citations (largest format). AI engines preferentially cite ranking-style content with transparent methodology. Top Houston HVAC competitors that AI engines already cite from internal listicles: Malek Service (`/ac-repair-houston-texas/`), Chill Brothers (`/5-best-hvac-contractors-near-you-in-houston-tx/`).

**Hub URL:** `/blog/best-ac-repair-houston/`

**Cluster URLs:**
```
- /blog/best-ac-repair-houston/                [PRIMARY HUB]
- /blog/best-ac-installation-houston/          [SUB]
- /blog/best-emergency-ac-repair-houston/      [SUB]
- /blog/best-furnace-repair-houston/           [SUB]
- /blog/best-hvac-maintenance-houston/         [SUB]
- /blog/best-ductless-installation-houston/    [SUB]
- /blog/best-air-duct-cleaning-houston/        [SUB]
```

**🛑 Transparent-methodology gate (MANDATORY — per `ai-citation-filter.md` §8):**

Google's January 2026 enforcement against self-promotional listicles caused 29-49% visibility drops. Every listicle MUST include:

1. Transparent methodology block at top (criteria + weighting + sources audited)
2. Real competitor entries (Abacus, Chill Brothers, Mission AC, Champion & Nash, Spring Branch, etc.) with verifiable data
3. Comparison table side-by-side specs
4. 75 Degree AC entry — same data structure, not preferentially positioned
5. External validation sources cited (Houston Chronicle, BBB, NATE, manufacturer dealer locators)
6. Author byline + datePublished + dateModified
7. Schema: `Article` + `BlogPosting` + `FAQPage` + `BreadcrumbList` + `ItemList`

### Cluster 10: YouTube Content Cluster (added 2026-05-22 — AI citation strategy)

**Why this exists:** YouTube is the #1 most-cited AI domain (5W Citation Source Index 2026 — 34% citation growth in 6 months). Videos rank for sub-queries via Google's query fan-out even when not in organic top 100. YouTube has 0.737 AI citation correlation (highest single signal).

**Channel:** `youtube.com/@75degreeac` (when launched — add to schema `sameAs` after creation)

**Video buildout priority:**
1. Per-service explainer videos (AC repair, AC installation, AC maintenance, emergency, heating, ductless, IAQ) — 6-9 videos, 3-7 min each
2. Per-suburb walkthrough videos (Katy, Sugar Land, Cypress, Pearland, The Woodlands) — 5-7 videos with neighborhood context
3. Technician intro videos (Kenny Ho bio + day-in-the-life) — 2-3 videos
4. Common-problem diagnostic videos ("What does a bad capacitor sound like?", "How to tell if your AC is low on refrigerant") — 8-12 videos
5. Brand comparison videos (Carrier vs Trane vs Lennox) — 3-5 videos
6. Seasonal videos (pre-summer prep, pre-winter prep) — 4 videos/year

**Each video:** description includes link back to relevant service page + transcript embedded on site for crawler indexing.

### Cluster 11: Seasonal Content Cluster

**Why this exists:** Houston seasonality drives intent spikes. Pre-summer (Mar-May) → AC tune-up + replacement intent. Mid-summer (Jun-Aug) → emergency repair surge. Pre-winter (Oct-Nov) → furnace + heat pump prep.

**URL pattern:** `/seasonal/[season]/[topic]/` or `/blog/[seasonal-topic-with-year]/`

```
Examples:
- /blog/houston-ac-prep-summer-2026/
- /blog/houston-furnace-prep-winter-2026/
- /blog/houston-heat-dome-2025-ac-survival/  [evergreen update annually]
- /blog/houston-hurricane-season-hvac-prep/
```

Refresh cadence: 30 days per `content-strategy` skill. dateModified must be current.

---

## Content Status Legend

```
[LIVE + INDEXED]  — page exists and is indexed — optimize
[NOINDEX FIX]     — page exists but blocked — remove noindex first
[THIN]            — page exists but needs content expansion (800+ words)
[REDIRECT]        — page should redirect to canonical
[DELETE]          — page should be deleted + redirected
[CREATE]          — new page needed (content gap)
[GAP]             — missing page representing keyword opportunity
```

---

## Priority Build Order

**Month 1 (fix existing — don't create new):**
1. Unlock 20 noindex pages (Action A from seo-solutions.md)
2. Expand 12 thin pages to 800–1,200 words
3. Set up redirects for 52 duplicate pages

**Month 2 (create new — high value):**
1. /furnace-repair-houston/ — seasonal, high commercial intent
2. /ductless-mini-split-houston/ — high revenue service
3. /air-duct-cleaning-houston/ — separate service, high search volume
4. /ac-repair-sugar-land-tx/ + /ac-repair-the-woodlands-tx/ — top suburb pages
5. /commercial-hvac-houston/ — dedicated commercial hub

**Month 3 (deepen clusters):**
1. Blog content for informational cluster (guides, FAQs, how-tos)
2. Brand comparison content (Carrier vs Trane, best HVAC brands Houston)
3. Cost/pricing content cluster
4. Seasonal content (pre-summer, pre-winter)

---

## Internal Linking Architecture

**Rule:** Every spoke links TO its hub. Every hub links DOWN to at least 3 spokes.

**Homepage links TO:**
- /ac-repair-houston-tx/ (anchor: "AC Repair Houston")
- /emergency-ac-repair-houston-tx/ (anchor: "Emergency AC Repair")
- /ac-tune-up-houston/ (anchor: "AC Tune-Up")
- /commercial-ac-service-houston/ (anchor: "Commercial HVAC")

**Each service page links TO:**
- Its hub page
- Emergency page
- 1 related service
- 1 location page (most relevant)

**Location pages link TO:**
- Main service hub
- Emergency page
- Adjacent location pages (north/south/east/west neighbors)
- Homepage

---

## Output Files

Topical map: `01-research/topical-map-[date].md`
Content gap list: `01-research/content-gaps-[date].md`
Build priority list: `02-site-architecture/build-queue-[date].md`
