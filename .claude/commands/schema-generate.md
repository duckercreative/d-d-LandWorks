---
description: Generate complete JSON-LD schema markup — entity-aware (consumes the validated entity registry from entities-mapping + entity-validate)
argument-hint: [page-url or slug] [page-type: homepage|service|location|blog|faq]
---

Generate complete, validated, entity-aware JSON-LD schema markup for: $ARGUMENTS

Defer to `.claude/skills/schema-markup/SKILL.md` for the methodology. This command runs the schema generation per that skill's templates **but pulls every `@id`, `sameAs`, and `areaServed` Wikidata reference from the validated entity registry — never invents them.**

## Inputs (read in this exact order)

1. `01-research/entity-id-registry.md` — canonical `@id` for Business, Owner/Founder, Hub Services, Spoke Services, Cities, Brands, Certifications (**REQUIRED**)
2. `01-research/entities-inventory.csv` — Wikidata QIDs + Google KG IDs + Wikipedia URLs for every entity (**REQUIRED**)
3. `01-research/entities-mapping.csv` — per-page entity assignment + schema field map (filter to this page; tells which entities go in which schema fields)
4. `01-research/sameAs-network.csv` — verified sameAs URLs by platform
5. `business-info.md` — NAP, hours, phone, address, geo coordinates
6. `services-list.md` — service details for Service schema
7. `service-areas.md` — geo areas for areaServed
8. For the target page: `01-research/page-research/[slug]/03-entity-map.md` + `entity-inventory.csv` (per-page validated entity inventory)

**Pre-flight validation gate:**
- If any entity referenced in the brief / entity-inventory has status `AMBIGUOUS` / `WRONG_TYPE` / `NOT_FOUND` → run `entity-validate` to resolve before generating schema
- If `entity-id-registry.md` doesn't exist yet → run `/entities map` first
- If `entities-inventory.csv` doesn't exist yet → run `/entities research` first

## Business Constants (use exactly in all schema)

```json
"name": "75 Degree AC",
"@id": "https://75degreeac.com/#business",
"telephone": "(713) 598-2737",
"address": {
  "@type": "PostalAddress",
  "streetAddress": "4800 W 34th St, Ste C50F",
  "addressLocality": "Houston",
  "addressRegion": "TX",
  "postalCode": "77092",
  "addressCountry": "US"
},
"geo": {
  "@type": "GeoCoordinates",
  "latitude": 29.82016,
  "longitude": -95.46033
},
"url": "https://75degreeac.com",
"foundingDate": "2016"
```

**Richmond TX page exception:** `/hvac-contractor-richmond-tx/` uses `"telephone": "(346) 681-2625"` — never the (713) number. The schema MUST include a separate `BusinessLocation` block per the schema-markup skill's multi-location pattern.

## Schema by Page Type (per `schema-markup/SKILL.md`)

**Homepage:**
- `Organization` (with full sameAs array from entities-research + Wikidata @id if exists)
- `LocalBusiness` > `HVACContractor` (with @id `https://75degreeac.com/#business`)
- `Person` for Owner/Founder (with @id from registry — same @id used everywhere)
- `WebSite` with `SearchAction`
- `BreadcrumbList`
- `knowsAbout` array — every primary service + every brand serviced (look up Brand `@id`s from registry)

**Service Pages:**
- `LocalBusiness` > `HVACContractor` (condensed, reference via @id)
- `Service` (with @id from registry, `name`, `description`, `provider`: @id reference to business, `areaServed`: array of `City` objects with Wikidata @id)
- `FAQPage` (from FAQ section)
- `BreadcrumbList`
- `AggregateRating` (if reviews available)
- `Person` reference (employee anchor with @id) if technician is named

**Location Pages:**
- `HVACContractor` BusinessLocation block (with location-specific area + same Person @id for owner)
- `Service` (for the location) — `areaServed` uses `City` object with Wikidata @id (NOT bare string)
- `FAQPage`
- `BreadcrumbList`
- `containedInPlace` chain for neighborhoods → city → county → state

**Blog/Guide Pages:**
- `Article` (with author Person @id from registry, datePublished, dateModified)
- `BreadcrumbList`
- `FAQPage` (if FAQ section exists)
- `HowTo` if step-by-step content

## areaServed Structured Form (mandatory — no bare strings)

❌ Wrong:
```json
"areaServed": ["Houston, TX", "Katy, TX"]
```

✅ Right (look up Wikidata Q-IDs from `entities-inventory.csv`):
```json
"areaServed": [
  {
    "@type": "City",
    "name": "Houston",
    "@id": "https://www.wikidata.org/wiki/Q16555",
    "sameAs": "https://en.wikipedia.org/wiki/Houston"
  },
  {
    "@type": "City",
    "name": "Katy",
    "@id": "https://www.wikidata.org/wiki/Q985568",
    "sameAs": "https://en.wikipedia.org/wiki/Katy,_Texas"
  }
]
```

## sameAs Array (from `01-research/sameAs-network.csv`)

Include all `verified` platforms in priority order (Wikidata first if available, then Foursquare, GBP, YouTube, Apple Maps, Bing Places, Facebook, LinkedIn, Yelp, BBB, etc.). Only include URLs with `status: verified` — `claimed_unverified` URLs should NOT appear in sameAs until verified.

## Brand Schema (where applicable)

For pages mentioning specific brands the business services (Carrier, Trane, Lennox, etc.), reference Brand schema:

```json
"knowsAbout": [
  {
    "@type": "Brand",
    "name": "Carrier",
    "@id": "https://www.wikidata.org/wiki/Q5044477",
    "sameAs": "https://en.wikipedia.org/wiki/Carrier_Global"
  }
]
```

Q-IDs come from `entities-inventory.csv`.

## Always include in HVACContractor schema:

```json
"@type": ["HVACContractor", "LocalBusiness"],
"priceRange": "$$",
"openingHoursSpecification": [
  {"@type": "OpeningHoursSpecification", "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"], "opens": "08:00", "closes": "20:00"}
],
"hasOfferCatalog": {
  "@type": "OfferCatalog",
  "name": "HVAC Services",
  "itemListElement": [...]
},
"identifier": {
  "@type": "PropertyValue",
  "propertyID": "TACLA license",
  "value": "TACLA72152E"
}
```

## Output

- Complete, valid JSON-LD blocks ready to paste into WordPress header or WPCode #8140 (schema source of truth per CLAUDE.md)
- One block per schema type, clearly labeled with where in WordPress to paste
- Implementation note + WPCode snippet ID if relevant
- Save to: `02-site-architecture/schema/[slug]-schema.md`

## Anti-patterns

- ❌ Inventing `@id` URLs that don't appear in the registry
- ❌ Using bare-string City names in `areaServed`
- ❌ Using a Person `@id` that differs from the owner's canonical @id (breaks Person entity resolution)
- ❌ Including unverified sameAs URLs (one 404 in the array hurts the whole graph)
- ❌ Hardcoding Wikidata QIDs from memory — always look them up in `entities-inventory.csv`
- ❌ Using Richmond TX schema on Houston pages, or vice versa
- ❌ Skipping the entity validation gate before generating schema
