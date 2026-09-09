---
name: site-architecture
description: >
  Site architecture design for 75 Degree AC — URL structure, page hierarchy, page-tracker CSV,
  internal linking rules, schema assignments, and content hub strategy.
  Activates when planning URL structure, page map, or site information architecture.
version: 1.0.0
client: 75 Degree AC
---

# Site Architecture — 75 Degree AC

Design every page in the site — complete URL, keyword, H1, meta title, meta description, schema type, and internal linking rules. Output the full page-tracker CSV.

---

## Architecture Principles

1. **Every page targets exactly one primary keyword.** No cannibalization.
2. **URL slugs are keyword-rich but concise.** No dates, no stop words, no IDs.
3. **Flat hierarchy.** Maximum 3 levels deep.
4. **Scalable.** Adding a service or location doesn't require restructuring.
5. **Intent-matched.** URL structure signals intent to users and search engines.

---

## 75 Degree AC URL Structure

```
/                                           ← Homepage
/ac-repair-houston-tx/                     ← Primary service hub (AC Repair)
/ac-installation-houston-tx/               ← Primary service hub (Installation)
/ac-maintenance-houston/                   ← Primary service hub (Maintenance)
/emergency-ac-repair-houston/              ← Primary service hub (Emergency)
/heating-repair-houston-tx/               ← Primary service hub (Heating)
/hvac-contractor-houston/                 ← HVAC general hub
/commercial-hvac-houston/                 ← Commercial hub
/indoor-air-quality-houston/              ← IAQ hub
/ac-repair-[city]-tx/                     ← Location pages (21 live + more)
/hvac-contractor-[neighborhood]-tx/       ← Location pages (alternative)
/blog/                                    ← Blog hub
/blog/[post-slug]/                        ← Blog posts
/about/                                   ← About page
/contact/                                 ← Contact page
/service-areas/                           ← Service areas hub
```

**URL slug rules:**
- Lowercase, hyphens only
- Keyword-first (primary keyword starts the slug)
- Include city modifier for local pages: -houston-tx, -katy-tx, etc.
- No stop words unless part of the keyword
- Maximum 6 words in the slug

---

## Page Inventory (75 Degree AC)

### Tier 1: Core Foundation Pages (Priority 1)

| Page | URL | Primary Keyword | Page Type | Schema |
|------|-----|----------------|-----------|--------|
| Homepage | / | "HVAC contractor Houston TX" | homepage | HVACBusiness + Organization |
| Emergency AC Repair | /emergency-ac-repair-houston/ | "emergency AC repair Houston" | service-hub | Service + HVACBusiness |
| AC Repair Houston | /ac-repair-houston-tx/ | "AC repair Houston TX" | service-hub | Service + FAQPage |
| AC Installation | /ac-installation-houston-tx/ | "AC installation Houston TX" | service-hub | Service + FAQPage |
| AC Tune-Up | /ac-tune-up-houston/ | "AC tune up Houston TX" | service-hub | Service + FAQPage |
| Heating Repair | /heating-repair-houston-tx/ | "heating repair Houston TX" | service-hub | Service + FAQPage |
| HVAC Contractor | /hvac-contractor-houston/ | "HVAC contractor Houston" | service-hub | Service + FAQPage |
| Commercial HVAC | /commercial-hvac-houston/ | "commercial HVAC Houston" | service-hub | Service + FAQPage |
| About | /about/ | "75 Degree AC about" | about | Person + Organization |
| Contact | /contact/ | "contact 75 Degree AC" | contact | HVACBusiness |
| Service Areas | /service-areas/ | "HVAC service areas Houston" | hub | LocalBusiness |

### Tier 2: Service Sub-Pages (Priority 1-2)

| Page | URL | Primary Keyword | Page Type |
|------|-----|----------------|-----------|
| AC Replacement | /ac-replacement-houston/ | "AC replacement Houston" | service |
| Furnace Repair | /furnace-repair-houston-tx/ | "furnace repair Houston TX" | service |
| Heat Pump Repair | /heat-pump-repair-houston/ | "heat pump repair Houston" | service |
| Mini-Split AC | /mini-split-ac-houston/ | "mini split AC installation Houston" | service |
| Thermostat Repair | /thermostat-repair-houston/ | "thermostat repair Houston" | service |
| Air Duct Cleaning | /air-duct-cleaning-houston/ | "air duct cleaning Houston" | service |
| Indoor Air Quality | /indoor-air-quality-houston/ | "indoor air quality Houston" | service |
| AC Compressor Repair | /ac-compressor-repair-houston/ | "AC compressor repair Houston" | service |
| AC Refrigerant Leak | /refrigerant-leak-repair-houston/ | "AC refrigerant leak repair Houston" | service |
| Heating Installation | /heating-installation-houston/ | "heating installation Houston" | service |

### Tier 3: Location Pages (Priority 1-2)

**Live pages (21 existing):**

| Page | URL | Primary Keyword |
|------|-----|----------------|
| AC Repair Katy | /ac-repair-katy-tx/ | "AC repair Katy TX" |
| AC Repair Sugar Land | /ac-repair-sugar-land-tx/ | "AC repair Sugar Land TX" |
| AC Repair Woodlands | /ac-repair-woodlands-tx/ | "AC repair Woodlands TX" |
| AC Repair Cypress | /ac-repair-cypress-tx/ | "AC repair Cypress TX" |
| AC Repair Spring | /ac-repair-spring-tx/ | "AC repair Spring TX" |
| AC Repair Tomball | /ac-repair-tomball-tx/ | "AC repair Tomball TX" |
| AC Repair Missouri City | /ac-repair-missouri-city-tx/ | "AC repair Missouri City TX" |
| AC Repair Richmond | /ac-repair-richmond-tx/ | "AC repair Richmond TX" |
| AC Repair Pasadena | /ac-repair-pasadena-tx/ | "AC repair Pasadena TX" |
| AC Repair Baytown | /ac-repair-baytown-tx/ | "AC repair Baytown TX" |
| [Heights, Midtown, Montrose, etc.] | /ac-repair-[neighborhood]-tx/ | "AC repair [neighborhood]" |

**To build (Priority 2):**
HVAC Contractor variants for each major suburb (Katy, Sugar Land, Woodlands, Cypress)

### Tier 4: Commercial Content (Priority 2)

| Page | URL | Primary Keyword |
|------|-----|----------------|
| Commercial AC Repair | /commercial-ac-repair-houston/ | "commercial AC repair Houston" |
| AC Maintenance Contract | /hvac-maintenance-contract-houston/ | "HVAC maintenance contract Houston" |

### Tier 5: Blog/Informational (Priority 2-3)

Pattern: `/blog/[topic-slug]/`

| Post | URL | Primary Keyword | Intent |
|------|-----|----------------|--------|
| AC Not Cooling | /blog/ac-not-cooling-houston/ | "why is my AC not cooling" | Informational |
| AC Repair Cost Guide | /blog/ac-repair-cost-houston/ | "how much does AC repair cost Houston" | Commercial |
| When to Replace AC | /blog/when-to-replace-ac-houston/ | "when to replace AC unit Houston" | Informational |
| AC Brands Comparison | /blog/carrier-vs-trane-houston/ | "Carrier vs Trane AC Houston" | Commercial |
| Houston AC Maintenance Tips | /blog/ac-maintenance-tips-houston/ | "AC maintenance tips Houston homeowners" | Informational |

---

## Internal Linking Architecture

### Rules Table

| Page Type | Links To | Links From |
|-----------|----------|------------|
| Homepage | All service hubs, top 5 location pages, emergency page, about, contact | All pages (nav/footer) |
| Service Hub | Related sub-services, top 3-5 location pages, contact, about | Homepage, nav, related blog posts |
| Service Sub-Page | Parent hub, 2-3 related services, contact | Service hub, blog posts |
| Location Page | All services for that area, nearby locations, contact | Homepage, service-areas hub, service pages |
| Blog Post | 2-3 service pages (not other blogs), 1 location page if relevant | Blog hub, service pages |
| Emergency Page | Contact, homepage | Homepage (above fold), all service pages (sticky CTA) |
| About | Homepage, contact, service hub | Homepage, nav, contact |
| Contact | Homepage, service hub | All pages (nav/footer) |

### Equity Distribution

| Tier | Page Types | Min Inbound Links |
|------|-----------|-------------------|
| 1 | Homepage | N/A (external) |
| 1 | Emergency page, Primary service hubs | 5+ |
| 2 | Service sub-pages, Location pages | 3+ |
| 3 | Blog posts, combo location-service pages | 2+ |

---

## Schema Assignment

| Page Type | Primary Schema | Secondary Schema |
|-----------|---------------|-----------------|
| Homepage | HVACBusiness | Organization, FAQPage, AggregateRating |
| Emergency Page | Service | FAQPage, BreadcrumbList |
| Service Hub | Service | HVACBusiness, FAQPage, BreadcrumbList |
| Service Page | Service | FAQPage, BreadcrumbList |
| Location Page | HVACBusiness (areaServed) | FAQPage, BreadcrumbList |
| Blog Post | Article | FAQPage (if FAQ), BreadcrumbList |
| About | Person | Organization, BreadcrumbList |
| Contact | HVACBusiness | BreadcrumbList |

---

## Output Files

### File 1: `02-site-architecture/site-architecture.md`

Sections:
1. Architecture overview (total pages, hub count, location count)
2. Full page hierarchy tree (ASCII format)
3. Internal linking rules table
4. Schema assignment table

### File 2: `02-site-architecture/page-tracker.csv`

Columns:
```
url, page_type, page_title, primary_keyword, secondary_keywords, h1, meta_title, meta_description, schema_type, content_hub_position, word_count_target, internal_links_in, internal_links_out, image_count, faq_count, priority, status
```

**Word count targets:**

| Page Type | Min Word Count |
|-----------|---------------|
| Homepage | 1,200–1,800 |
| Emergency Page | 1,000–1,500 |
| Service Hub | 1,500–2,500 |
| Service Page | 1,200–2,000 |
| Location Page | 1,000–1,800 |
| Blog Post | 1,500–2,500 |
| About | 800–1,200 |
| Contact | 400–600 |

---

## Quality Checks Before Finalizing

- [ ] No two pages share the same primary keyword
- [ ] Every location page has a unique primary keyword (not "AC repair Houston" repeated)
- [ ] All meta_title values are ≤60 characters
- [ ] All meta_description values are ≤160 characters
- [ ] Every H1 includes the primary keyword
- [ ] Emergency page is linked from homepage above fold
- [ ] No orphan pages (every page has at least 2 inbound internal links)
- [ ] page-tracker.csv includes all 21 live pages + all planned pages
- [ ] Priority 1 pages form a coherent minimum viable site
- [ ] Phone number (713) 598-2737 appears in contact schema

---

## Cluster Math (per-city build economics)

The 125-page master plan in `02-site-architecture/site-architecture.md` is the maximalist roadmap. For tactical roadmapping (which cities to fully build out first), use cluster math — 1 fully-built city = 1 Pattern C location hub + 6 Pattern B service+location spokes + shared Pattern A hubs.

| Unit | Pages | Notes |
|---|---|---|
| 1 Pattern C location hub | 1 | e.g., `/hvac-contractor-richmond-tx/` |
| 6 Pattern B service+location spokes | 6 | e.g., `/ac-repair-richmond-tx/`, `/ac-installation-richmond-tx/`, `/emergency-ac-repair-richmond-tx/`, `/ac-maintenance-richmond-tx/`, `/heating-repair-richmond-tx/`, `/hvac-repair-richmond-tx/` |
| **Per fully-built city** | **7** | one-time cost per city |
| 6 Pattern A service hubs | 6 | one-time cost across all cities — `/ac-repair-houston-tx/`, `/ac-installation-houston-tx/`, etc. |
| **4 priority cities** (Richmond + Houston + Katy + Sugar Land) | 4 × 7 + 6 = **34 pages** | Full local + service architecture |

**Practical sequencing rule:** finish one Pattern B spoke → publish → wait 30 days for indexing → next spoke. Don't build all 6 Richmond spokes in parallel; let internal-link equity from each new spoke flow up to the Pattern C hub before adding the next. The `richmond-service-pages-plan.md` Tier-1/Tier-2/Tier-3 schedule reflects this.

**When the 34 are live, the 125-page master plan's remaining ~91 pages** (more cities at thinner coverage, blog hub fill) become the secondary expansion phase.

---

## When to revisit this architecture

Revisit the URL plan, pattern assignments, and tracker.csv when ANY of the following happens:

- Google publishes a confirmed core update affecting local rankings
- Whitespark / BrightLocal publishes a new Local Search Ranking Factors survey
- A new AI engine becomes a meaningful citation source (i.e., shows up in our `/ai-visibility` audits as ≥5% of recommended-vendor traffic)
- Schema.org adds a relevant new type for HVAC / home services
- Our own audit data shows a pattern element underperforming (e.g., Pattern B spokes consistently failing to rank for service+city queries despite all 12 filter points hit — that's an architecture signal, not a content signal)
- A new physical location opens (Richmond was 2026; if a third location opens, the Pattern C hub for it triggers a new cluster build)
