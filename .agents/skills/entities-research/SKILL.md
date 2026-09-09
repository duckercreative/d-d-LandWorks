---
name: entities-research
description: >
  Entity research methodology for 75 Degree AC using the Koray Gubur 14-source approach —
  maps business, service, location, and person entities, identifies sameAs gaps, and
  builds entity relationship map for Knowledge Graph optimization.
  Activates when researching entities, checking Knowledge Panel, or analyzing entity signals.
version: 1.0.0
client: 75 Degree AC
---

# Entity Research — Koray Methodology (75 Degree AC)

Map the 75 Degree AC entity, service entities, location entities, and all entity relationships. Identify Knowledge Graph gaps and sameAs network gaps.

> **Core principle (Koray Gubur)**: AI models build entity understanding through entities and their relationships. The website must build a clear entity in Google's Knowledge Graph. Every entity added must be validated and properly attributed.

---

## Pre-Loaded Entity Profile

### Business Entity (75 Degree AC)

```
Entity Name: 75 Degree AC
Entity Type: HVACContractor (schema.org/HVACContractor)
Location: Houston, TX, United States
Address: 4800 W 34th St, Ste C50F, Houston, TX 77092
Founded: 2016
Phone: (713) 598-2737
Website: https://75degreeac.com
Industry: HVAC / Air Conditioning and Heating
License: TACLA (Texas Department of Licensing and Regulation)
```

### Service Entities

| Service Entity | Schema Type | Parent Entity | Child Entities |
|---------------|-------------|---------------|----------------|
| Air Conditioning Repair | Service | HVAC Service | Compressor Repair, Refrigerant Recharge, Capacitor Replacement |
| AC Installation | Service | HVAC Service | Central AC Installation, Ductless AC Installation |
| AC Maintenance | Service | HVAC Service | AC Tune-Up, Filter Replacement, Coil Cleaning |
| Emergency AC Repair | Service | Air Conditioning Repair | 24/7 Emergency, Same-Day Service |
| Furnace Repair | Service | Heating Service | Gas Furnace, Electric Furnace |
| Heat Pump Service | Service | HVAC Service | Heat Pump Repair, Heat Pump Installation |
| Ductless Mini-Split | Service | HVAC Service | Mini-Split Installation, Mini-Split Repair |
| Commercial HVAC | Service | HVAC Service | Commercial AC Repair, RTU Service |
| Air Duct Cleaning | Service | Indoor Air Quality | Duct Cleaning, Duct Repair |
| Indoor Air Quality | Service | HVAC Service | Air Purifier, UV Light, HEPA Filtration |

### Location Entities

**Primary**: Houston, TX (City entity — highest salience)
**Secondary**: Katy, Sugar Land, The Woodlands, Cypress, Spring, Tomball, Missouri City, Richmond, Pasadena, Baytown (City/suburb entities)
**Neighborhood entities**: Heights, Midtown, Montrose, River Oaks, Memorial, Meyerland, etc.

### Certification/Brand Entities

| Entity | Type | Relationship |
|--------|------|--------------|
| TACLA | Certification | Licensed by |
| Carrier | Brand | Services and installs |
| Trane | Brand | Services and installs |
| Lennox | Brand | Services and installs |
| Goodman | Brand | Services and installs |
| Rheem | Brand | Services and installs |
| American Standard | Brand | Services and installs |
| Daikin | Brand | Services and installs |

---

## Research Process — 14 Sources

Run ALL 14 sources. Never fabricate entities — every entity must be found through real research.

**Source 1 — Competitor entities**: Visit top 5 Houston HVAC competitors (Abacus Plumbing, Air & Plumbing Today, etc.). Run entity extraction on their homepage and key service pages. What entities do they build topical context around?

**Source 2 — Competitor entity gaps**: What entities do competitors NOT cover that clearly belong in Houston HVAC? These are entity opportunities.

**Source 3 — SERP entities**: Search "AC repair Houston TX", "HVAC contractor Houston". What entities appear in organic titles, snippets, and descriptions?

**Source 4 — PAA entities**: Document all PAA questions for Houston HVAC queries. What entities appear in PAA questions? ("How much does AC repair cost in Houston?" → AC Repair Cost, Houston, Service Fee)

**Source 5 — Rich snippet entities**: What entities appear in featured snippets for HVAC queries?

**Source 6 — Forum entities**: Search "AC repair Houston reddit", "HVAC Houston quora". What specific product names, problem names, company names come up?

**Source 7 — Social platform entities**: Search on YouTube for "Houston AC repair". What entities appear in video titles and descriptions?

**Source 8 — Ad entities**: What entities appear in Google Ads for "AC repair Houston"?

**Source 9 — AI Overview entities**: Search "AC repair Houston" in Google. If AI Overview appears, what entities does it surface?

**Source 10 — AI tool entities**: Ask ChatGPT and Perplexity: "Who are the best HVAC companies in Houston TX?" What entities do they reference?

**Source 11 — GBP profile entities**: Open GBP profiles of top 3-5 local pack winners for "AC repair Houston". What categories, service names, and attributes appear?

**Source 12 — Review platform entities**: Read Google and Yelp reviews for Houston HVAC competitors. What specific entities do customers reference?

**Source 13 — Knowledge Graph**: Search Google for "75 Degree AC Houston". Does a Knowledge Panel appear? What attributes does it show?

**Source 14 — Co-occurrence method (Koray)**: What entities ALWAYS appear alongside "HVAC contractor Houston" in authoritative content? These are associative connections.

---

## Output: `01-research/entities-research.md`

### Section 1: Business Entity Audit

**Current Entity Status:**
- Google Knowledge Panel: does it exist? What does it show?
- Wikidata listing: exists or not?
- Entity description consistency across GBP, website, Yelp, Facebook

**Entity Attributes to Establish:**
- Legal name: 75 Degree AC
- Business type: HVACContractor
- Founded: 2016
- Address: 4800 W 34th St, Ste C50F, Houston, TX 77092
- Phone: (713) 598-2737
- Website: https://75degreeac.com
- Logo: [URL when available]
- Social profiles: [document all active URLs]
- License: TACLA
- Services: [list each service sub-entity]
- Service areas: [list all locations]

### Section 2: sameAs Network Gaps

Check each source and record: exists / missing / inconsistent NAP

| Platform | Priority | Status | URL | Issues |
|---------|---------|--------|-----|--------|
| Google Business Profile | CRITICAL | [check] | | |
| Facebook | HIGH | [check] | | |
| Yelp | HIGH | [check] | | |
| LinkedIn | HIGH | [check] | | |
| BBB | MEDIUM | [check] | | |
| HomeAdvisor/Angi | MEDIUM | [check] | | |
| YouTube | HIGH (0.737 AI citation) | [check] | | |
| Apple Maps | MEDIUM | [check] | | |
| Bing Places | MEDIUM | [check] | | |
| Wikidata | HIGH (0.654 AI citation) | [check] | | |
| Thumbtack | LOW | [check] | | |
| Houzz | LOW | [check] | | |

**NAP consistency standard:**
- Name: must be exactly "75 Degree AC" everywhere (not "75 Degree A/C", not "75° AC")
- Address: "4800 W 34th St, Ste C50F, Houston, TX 77092" — exact match
- Phone: "(713) 598-2737" — consistent format

### Section 3: Service Entities

For each service entity:
- **Entity Name**: exact name Google uses
- **Parent Entity**: broader category
- **Child Entities**: specific sub-services
- **Related Entities**: tools, materials, certifications, seasonal triggers
- **Semantic Field**: terms that co-occur with this entity
- **Schema Type**: schema.org type

### Section 4: Person Entity (Owner/Founder)

Research and document:
- Owner/founder name (if public-facing)
- LinkedIn profile
- Industry association memberships
- Published content or interviews
- Social profiles

Gaps to fill:
- Author bio on website
- LinkedIn profile (if missing)
- Local press coverage

### Section 5: Entity Relationship Map

```
75 Degree AC [HVACContractor]
    ├── serves → Houston, TX [City]
    │   ├── includes → Katy, TX [City]
    │   ├── includes → Sugar Land, TX [City]
    │   ├── includes → The Woodlands, TX [City]
    │   └── includes → [all service cities]
    ├── offers → Air Conditioning Repair [Service]
    │   ├── includes → Emergency AC Repair [Service]
    │   ├── includes → AC Tune-Up [Service]
    │   └── uses → Carrier, Trane, Lennox [Brands]
    ├── offers → Heating Repair [Service]
    │   └── includes → Furnace Repair [Service]
    ├── offers → HVAC Installation [Service]
    ├── certified by → TACLA [Certification]
    ├── services → Carrier, Trane, Lennox, Goodman, Rheem [Brands]
    └── founded: 2016
```

### Section 6: Entity Optimization Action Plan

**Critical** (missing fundamental signals):
1. Verify Knowledge Panel exists for "75 Degree AC Houston"
2. Complete all sameAs profiles with exact NAP match
3. Add Organization schema with full sameAs array to homepage

**High**:
1. Create/complete YouTube channel (0.737 AI citation correlation)
2. Ensure Wikidata entry if business meets notability criteria
3. Add knowsAbout schema for all service entities

**Medium**:
1. Complete LinkedIn company page
2. Verify Apple Maps and Bing Places
3. Add Person schema for owner/founder

**Low**:
1. Nextdoor business profile
2. Twitter/X profile (if business is active there)
