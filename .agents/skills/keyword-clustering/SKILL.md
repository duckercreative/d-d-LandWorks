---
name: keyword-clustering
description: >
  Keyword clustering and intent-based grouping for 75 Degree AC — assigns every keyword to a
  specific page, prevents cannibalization, identifies missing pages.
  Activates when grouping keywords, mapping keywords to pages, or detecting cannibalization.
version: 1.0.0
client: 75 Degree AC
---

# Keyword Clustering — 75 Degree AC

Group all researched keywords into logical clusters, each assigned to a specific page. Every keyword has exactly one home — zero cannibalization.

---

## Business Context

**Website**: https://75degreeac.com
**Services**: AC Repair, AC Installation, AC Maintenance, Heating Repair, Heating Installation, Heat Pump, Emergency HVAC, Mini-Split, Commercial HVAC, Indoor Air Quality
**Locations**: Houston + 10+ suburbs (Katy, Sugar Land, The Woodlands, Cypress, Spring, Tomball, Missouri City, Richmond, Pasadena, Baytown)
**Existing pages**: 21 indexed pages (as of April 2026 GSC data)
**GSC data**: 178K impressions, 159 clicks — massive CTR improvement opportunity

---

## Clustering Logic

Group keywords by BOTH topic AND intent. Same topic + same intent = same cluster = same page.

**Intent types:**
- **Transactional**: ready to hire ("AC repair Houston", "emergency HVAC company")
- **Commercial**: comparing options ("best HVAC contractor Houston", "AC repair cost Houston")
- **Informational**: learning ("how long does AC last", "why is my AC blowing warm air")
- **Local**: specific area ("AC repair Katy TX", "HVAC Woodlands")
- **Navigational**: brand-specific ("75 Degree AC phone number")

**HVAC-specific examples:**
- "AC repair Houston" + "air conditioner repair Houston" + "AC repair company Houston" → same cluster (transactional, same page: /ac-repair-houston/)
- "AC repair cost Houston" → different cluster (commercial, pricing page or FAQ section)
- "why is my AC not cooling" → different cluster (informational, blog post)
- "AC repair Katy TX" → different cluster (local, /ac-repair-katy-tx/)

---

## Clustering Process

**Step 1**: Sort all keywords by intent type
**Step 2**: Group by topic within each intent bucket
**Step 3**: Assign one primary keyword per cluster (highest volume, best fit)
**Step 4**: Assign a target page URL to each cluster
**Step 5**: Flag any cluster without a matching page (missing page opportunity)

---

## Pre-Built Clusters (75 Degree AC)

### Cluster Group A: AC Repair — Core Service

| Cluster | Primary Keyword | Page URL | Intent |
|---------|----------------|----------|--------|
| AC Repair Houston | "AC repair Houston TX" | /ac-repair-houston-tx/ | Transactional |
| Emergency AC Repair | "emergency AC repair Houston" | /emergency-ac-repair-houston/ | Transactional |
| AC Repair Cost | "AC repair cost Houston" | /ac-repair-cost-houston-tx/ | Commercial |
| AC Not Cooling | "AC blowing warm air Houston" | /blog/ac-not-cooling/ | Informational |
| AC Tune-Up | "AC tune up Houston" | /ac-tune-up-houston/ | Transactional |

### Cluster Group B: AC Installation

| Cluster | Primary Keyword | Page URL | Intent |
|---------|----------------|----------|--------|
| AC Installation | "AC installation Houston TX" | /ac-installation-houston-tx/ | Transactional |
| AC Replacement | "AC replacement Houston" | /ac-replacement-houston/ | Transactional |
| New AC Cost | "new AC unit cost Houston" | /blog/new-ac-cost-houston/ | Commercial |
| Mini-Split Installation | "mini split installation Houston" | /mini-split-ac-houston/ | Transactional |

### Cluster Group C: Heating

| Cluster | Primary Keyword | Page URL | Intent |
|---------|----------------|----------|--------|
| Furnace Repair | "furnace repair Houston TX" | /furnace-repair-houston-tx/ | Transactional |
| Heating Repair | "heating repair Houston" | /heating-repair-houston/ | Transactional |
| Heat Pump | "heat pump repair Houston" | /heat-pump-repair-houston/ | Transactional |
| Thermostat Repair | "thermostat repair Houston" | /thermostat-repair-houston/ | Transactional |

### Cluster Group D: HVAC General

| Cluster | Primary Keyword | Page URL | Intent |
|---------|----------------|----------|--------|
| HVAC Repair | "HVAC repair Houston TX" | /hvac-repair-houston-tx/ | Transactional |
| HVAC Contractor | "HVAC contractor Houston" | /hvac-contractor-houston/ | Transactional |
| HVAC Installation | "HVAC installation Houston" | /hvac-installation-houston/ | Transactional |
| Commercial HVAC | "commercial HVAC Houston" | /commercial-hvac-houston/ | Transactional |

### Cluster Group E: Indoor Air Quality

| Cluster | Primary Keyword | Page URL | Intent |
|---------|----------------|----------|--------|
| Air Duct Cleaning | "air duct cleaning Houston" | /air-duct-cleaning-houston/ | Transactional |
| Indoor Air Quality | "indoor air quality Houston" | /indoor-air-quality-houston/ | Transactional |

### Cluster Group F: Location Pages

One cluster per location. Pattern: "[primary service] [city/neighborhood]"

| Location | Primary Keyword | Page URL |
|----------|----------------|----------|
| Katy | "AC repair Katy TX" | /ac-repair-katy-tx/ |
| Sugar Land | "AC repair Sugar Land TX" | /ac-repair-sugar-land-tx/ |
| The Woodlands | "AC repair Woodlands TX" | /ac-repair-woodlands-tx/ |
| Cypress | "AC repair Cypress TX" | /ac-repair-cypress-tx/ |
| Spring | "AC repair Spring TX" | /ac-repair-spring-tx/ |
| Heights | "AC repair Houston Heights" | /ac-repair-houston-heights/ |
| Katy HVAC | "HVAC contractor Katy TX" | /hvac-contractor-katy-tx/ |
| [21 live pages — expand per GSC data] | | |

---

## Output Files

### File 1: `01-research/keywords-clustering.md`

#### Section 1: Cluster Summary Table

| Cluster Name | Intent | Primary Keyword | Page URL | KW Count | Priority |
|--------------|--------|----------------|----------|----------|----------|
| [from research] | | | | | 1/2/3 |

#### Section 2: Cluster Details

For each cluster:
- **Intent**: transactional / commercial / informational / local / navigational
- **Target Page**: URL
- **Primary Keyword**: exact text for H1
- **Secondary Keywords** (2-4): for H2s and body
- **Semantic Terms** (5-8): topical depth signals (not forced)
- **Long-tail Variants**: question and comparison variants for FAQs
- **Local Modifiers**: city/neighborhood/zip/near-me variants
- **SERP Features**: local pack / featured snippet / PAA / none
- **Content Implication**: what must this page cover to rank?

#### Section 3: Cannibalization Audit

Known cannibalization risks for 75 Degree AC:

| Keyword | Page 1 | Page 2 | Resolution |
|---------|--------|--------|------------|
| "AC repair Houston" | /ac-repair-houston-tx/ | homepage | Homepage targets brand; /ac-repair/ targets this keyword |
| "HVAC Houston" | /hvac-repair-houston/ | /hvac-contractor-houston/ | One page wins — consolidate if both thin |
| [identify from GSC data] | | | |

#### Section 4: Missing Pages

Clusters needing pages that don't exist yet:

| Cluster | Proposed URL | Intent | Priority |
|---------|-------------|--------|----------|
| AC Compressor Repair | /ac-compressor-repair-houston/ | Transactional | 2 |
| Refrigerant Leak Repair | /refrigerant-leak-repair-houston/ | Transactional | 2 |
| AC Not Cooling Blog | /blog/ac-not-cooling-houston/ | Informational | 2 |
| Houston AC Cost Guide | /ac-repair-cost-houston-tx/ | Commercial | 1 |

#### Section 5: GSC Quick-Win Keywords

From April 2026 GSC data — keywords with high impressions and low CTR (position 4-20):

| Keyword | Impressions | Position | Current Page | Action |
|---------|-------------|----------|--------------|--------|
| [pull from 03-gsc/data/] | | | | Optimize title/meta |

---

### File 2: `01-research/keywords-clustering.csv`

One row per keyword. Columns:
```
keyword, cluster_name, intent, target_page_url, role, volume_tier, serp_features, priority, notes
```

**Role values**: primary, secondary, semantic, longtail, local-modifier
**Volume tier**: high, medium, low, micro
**Intent**: transactional, commercial, informational, local, navigational
**SERP features**: local_pack, featured_snippet, paa, image_pack, none, multiple
**Priority**: 1, 2, 3

Every keyword from keyword research must have a row with a target_page_url assigned.
