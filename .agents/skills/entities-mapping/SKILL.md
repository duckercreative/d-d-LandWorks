---
name: entities-mapping
description: >
  Entity-to-page mapping for 75 Degree AC — assigns the right entities to the right pages
  at the right salience level for Knowledge Graph optimization and topical authority.
  Activates when mapping entities to pages, planning entity distribution, or optimizing schema.
version: 1.0.0
client: 75 Degree AC
---

# Entities Mapping — 75 Degree AC

Take entity research output and create a precise entity-to-page map. Every entity gets assigned to the pages where its presence strengthens semantic relevance.

---

## Why Entity Mapping Matters

Google uses entity co-occurrence, entity salience, and entity relationship patterns to understand what each page is about. The right entity must appear at the right salience on the right page.

**Entity salience targets per page:**
- 1 primary entity (salience 0.8+): what the page is primarily about
- 2-4 major supporting entities (0.5–0.79): directly related to the topic
- 3-6 supporting entities (0.3–0.49): contextually relevant
- Contextual entities (<0.3): incidentally referenced

---

## Mapping Logic

**Primary entity by page type:**

| Page Type | Primary Entity |
|-----------|---------------|
| Homepage | 75 Degree AC (business entity) |
| Service page | The specific service entity |
| Location page | The specific location/place entity |
| Emergency page | Emergency AC Repair + Houston (co-primary) |
| Blog post | The topic entity |
| About page | Owner/Person entity + 75 Degree AC |
| Contact page | 75 Degree AC business entity |

---

## Per-Page Entity Specifications

### Homepage (/)

**Primary Entity**: 75 Degree AC — HVACContractor
- Salience target: 0.9+
- Must appear in: page title, H1, first paragraph, schema markup, footer
- Key attributes: name, Houston TX, phone (713) 598-2737, TACLA license, founded 2016

**Supporting Entities** (salience 0.5–0.79):
- Air Conditioning Repair — primary service
- Houston, TX — primary market
- Emergency AC Repair — key differentiator
- HVAC Installation — secondary service
- Heating Repair — secondary service

**Contextual Entities** (salience 0.3–0.49):
- Katy, Sugar Land, The Woodlands, Cypress (service areas)
- Carrier, Trane, Lennox, Goodman (brands serviced)
- TACLA certification
- Same-day service (operational entity)

**sameAs network to reference in schema**:
- GBP URL, Facebook URL, Yelp URL, LinkedIn URL, YouTube URL

---

### Emergency AC Repair Page (/emergency-ac-repair-houston/)

**Primary Entity**: Emergency AC Repair Service
- Salience target: 0.9+
- Must appear in: H1 ("Emergency AC Repair Houston — 24/7"), first sentence, every H2 section, schema

**Supporting Entities**:
- Houston, TX — location
- 75 Degree AC — provider
- 24/7 availability — operational attribute
- Same-day service — operational attribute

**Contextual Entities**:
- Heat index (Houston climate context)
- Carrier, Trane, Lennox (brands repaired)
- TACLA license (trust signal)

---

### AC Repair Houston (/ac-repair-houston-tx/)

**Primary Entity**: Air Conditioning Repair Service
- Salience target: 0.85+
- Must appear in: H1, first paragraph, H2 headings, schema, image alt text

**Supporting Entities**:
- Houston, TX — areaServed
- 75 Degree AC — provider
- AC Compressor Repair — child entity (mention)
- Refrigerant Recharge — child entity
- Capacitor Replacement — child entity

**Contextual Entities**:
- Carrier, Trane, Lennox, Goodman (brands)
- TACLA (certification)
- Katy, Sugar Land (nearby service areas)

---

### AC Installation Houston (/ac-installation-houston-tx/)

**Primary Entity**: Air Conditioning Installation Service
- Supporting: HVAC brands (Carrier, Trane, Lennox), Houston TX, financing available
- Contextual: ductless mini-split, heat pump, energy efficiency

---

### AC Tune-Up Houston (/ac-tune-up-houston/)

**Primary Entity**: AC Maintenance/Tune-Up Service
- Supporting: Houston TX, pre-summer preparation, 15-point inspection
- Contextual: filter replacement, coil cleaning, refrigerant check

---

### Location Pages (/ac-repair-[city]-tx/)

**Primary Entity**: The specific city/neighborhood entity (e.g., Katy TX)
**Co-Primary Entity**: Air Conditioning Repair Service
- Both must appear in H1: "AC Repair in Katy TX"
- Location entity attributes: city name, zip codes, landmarks, adjacent areas
- Service entity: all services offered in that location

**Supporting Entities**:
- 75 Degree AC (provider)
- Houston metro context (parent entity)
- Specific neighborhoods within the city

---

### Blog Posts

**Primary Entity**: The topic entity (what the post answers)
- Example: /blog/ac-not-cooling-houston/ → Primary entity = "AC Warm Air Problem" or "Air Conditioning Malfunction"
- Supporting: Houston TX, 75 Degree AC, relevant service entity (links to service page)

---

## Master Entity-Page Map (Summary)

| Entity | Entity Type | Primary Pages | Supporting Pages | Contextual Pages |
|--------|-------------|---------------|-----------------|-----------------|
| 75 Degree AC | HVACContractor | Homepage, About, Contact | All service pages | All location pages |
| Air Conditioning Repair | Service | /ac-repair-houston-tx/ | Homepage, Location pages | Blog posts |
| Emergency AC Repair | Service | /emergency-ac-repair-houston/ | Homepage | All service pages (CTA) |
| AC Installation | Service | /ac-installation-houston-tx/ | Homepage | Location pages |
| AC Maintenance | Service | /ac-tune-up-houston/ | Homepage | Blog posts |
| Heating Repair | Service | /heating-repair-houston-tx/ | Homepage | Location pages |
| Furnace Repair | Service | /furnace-repair-houston-tx/ | Heating Repair page | Location pages |
| Heat Pump | Service | /heat-pump-repair-houston/ | Heating page | Location pages |
| Commercial HVAC | Service | /commercial-hvac-houston/ | Homepage | Location pages |
| Mini-Split | Service | /mini-split-ac-houston/ | Installation page | Location pages |
| Houston, TX | City/Place | Homepage, /hvac-contractor-houston/ | All service pages | Blog posts |
| Katy, TX | City/Suburb | /ac-repair-katy-tx/ | Service areas | Homepage |
| Sugar Land, TX | City/Suburb | /ac-repair-sugar-land-tx/ | Service areas | Homepage |
| The Woodlands | City/Suburb | /ac-repair-woodlands-tx/ | Service areas | Homepage |
| TACLA Certification | Certification | About, Homepage | All service pages | Footer |
| Carrier | Brand | Service pages (where mentioned) | Homepage | All pages (footer) |
| Trane | Brand | Service pages | Homepage | All pages |
| Lennox | Brand | Service pages | Homepage | All pages |
| Goodman | Brand | Service pages | Homepage | All pages |

---

## Entity Gaps to Fill

| Entity | Current Status | Action Required | Which Pages |
|--------|---------------|-----------------|-------------|
| YouTube entity | Missing | Create channel, link in schema | Homepage schema |
| Wikidata QID | Missing | Create entry if eligible | sameAs array |
| Owner/Person entity | Unknown | Add to About page + schema | About page |
| TACLA license number | Possibly inconsistent | Verify and standardize | All pages + schema |
| Service area entities | Partial | Add areaServed to schema for each location | Each location page |

---

## Output Files

### File 1: `01-research/entities-mapping.md`

Sections:
1. Master entity-page map (summary table)
2. Per-page entity specifications for all Priority 1 pages
3. Entity relationship map
4. Entity gaps to fill in content

### File 2: `01-research/entities-mapping.csv`

```
entity_name, entity_type, wikidata_qid, schema_type, page_url, page_type, entity_role, salience_target, mention_in, schema_field, notes
```

**entity_role values**: primary, supporting, contextual, schema-only
**salience_target values**: 0.8+, 0.5-0.79, 0.3-0.49, under-0.3
**mention_in values**: h1, h2, h3, first-para, body, alt-text, schema, footer, all
**schema_field values**: name, provider, areaServed, sameAs, founder, memberOf, etc.
