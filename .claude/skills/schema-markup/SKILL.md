---
name: schema-markup
description: >
  Schema markup methodology for 75 Degree AC — JSON-LD for all page types,
  HVACBusiness entity (NOT HVACContractor — that type does not exist on schema.org),
  FAQPage, Service, AggregateRating, Person with sameAs LinkedIn, ItemList, HowTo,
  DefinedTerm, Speakable, and AI-optimized structured data with @id handshakes.
  Activates when generating or auditing schema markup for any page.
version: 1.0.0
client: 75 Degree AC
---

# Schema Markup — 75 Degree AC

> **Consume the entity layer before writing schema.** Every `@id`, `sameAs` URL, and `areaServed` Wikidata reference must come from the validated entity registry — never invented:
> - `01-research/entity-id-registry.md` (from `entities-mapping` v2.0) — canonical `@id` for Business, Owner/Founder, Hub Services, Spoke Services, Cities, Brands, Certifications
> - `01-research/entities-inventory.csv` — Wikidata QIDs + Google KG IDs + Wikipedia URLs for every entity (output of `entity-validate`)
> - `01-research/entities-mapping.csv` — which entities go in which schema fields per page (per-page entity spec)
>
> Schema generation that invents `@id` values or `sameAs` URLs breaks the entity graph. Always look up the registry first. Run `entity-validate` on any entity not yet in the inventory before referencing it.

## Why Schema Is Critical for HVAC + AI

Schema is no longer primarily for rich snippets — it is a **machine-readable data layer LLMs use to understand entity relationships and extract citations**. The 2025-2026 evidence:

- **FAQPage schema → 4.2× more AI citations** than equivalent non-schema content (Data World study)
- GPT-4 accuracy jumps from **16% to 54%** when content uses structured data (Data World)
- Microsoft Bing's Fabrice Canel confirmed (March 2025) that schema helps Microsoft LLMs understand content
- Google's official guidance (May 2025) explicitly recommends JSON-LD for AI-optimized content
- LocalBusiness schema → required for Knowledge Panel
- AggregateRating schema → enables star ratings in SERP snippets
- Service schema → feeds Google's entity understanding of service offerings

**`sameAs` is now required, not optional.** In LLM search, sameAs is the entity-resolution mechanism — it tells the AI that the GBP, Yelp, Facebook, and Wikidata entries are all the same business. Without sameAs, AI systems cannot consolidate signals.

**Current schema gap:** 75 Degree AC likely uses generic `LocalBusiness` type. Should use `HVACBusiness` which is a specific subtype Google recognizes as an entity class.

---

## Business Constants (use exactly in all schema)

```json
{
  "@type": ["HVACBusiness", "LocalBusiness"],
  "name": "75 Degree AC",
  "telephone": "(713) 598-2737",
  "url": "https://75degreeac.com",
  "foundingDate": "2016",
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
    "latitude": 29.7797,
    "longitude": -95.4069
  },
  "openingHoursSpecification": [
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
      "opens": "08:00",
      "closes": "20:00"
    }
  ],
  "priceRange": "$$"
}
```

---

## Schema Cheat Sheet — Pattern A / B / C (pick by page type)

Map of which schema types are required vs optional vs not-applicable per page pattern. Pattern definitions: `02-site-architecture/page-patterns/page-patterns.md` and `content-briefs/SKILL.md` 3-Pattern Decision Matrix.

| Schema type | Pattern A (Service hub: `/[service]-houston-tx/`) | Pattern B (Service+Loc: `/[service]-[city]-tx/`) | Pattern C (Location hub: `/hvac-contractor-[city]-tx/`) |
|---|:---:|:---:|:---:|
| `Service` | ✅ Primary | ✅ Required | — |
| `HVACBusiness` (project default) | — | ✅ Required | ✅ Primary |
| `Organization` (umbrella) | ✅ | ✅ | ✅ |
| `FAQPage` (mirrors visible FAQ exactly) | ✅ | ✅ | ✅ |
| `HowTo` (the 5-step process section) | ✅ | ✅ | — |
| `Review` (each testimonial) | optional | ✅ ×3+ with neighborhood attribution | ✅ ×3–5 with neighborhood attribution |
| `AggregateRating` | — | optional (only if location-specific rating snapshot exists) | ✅ Required |
| `OfferCatalog` (services list) | optional (offers nested in Service) | ✅ (offers nested in Service) | ✅ (full services list) |
| `BreadcrumbList` | ✅ | ✅ | ✅ |
| `WebPage` + `speakable` | ✅ | ✅ | ✅ |
| `Place` (with `GeoCoordinates`) | — | ✅ (within HVACBusiness) | ✅ Required |
| `Person` (Kenny Ho — see section below) | ✅ | ✅ | ✅ |
| `Article` / `BlogPosting` | — | — | — (these are for `/blog/[post]/` only) |

**Pattern B note (Richmond specifically):** the `HVACBusiness` node MUST use `addressRegion: "TX"` (disambiguation defense) + the Richmond `streetAddress` (20926 Bright Lake Bend Ct) + the Richmond `telephone` `(346) 681-2625` — never the Houston `(713)`. See memory `project_richmond_location.md`.

**All schema deploys via WPCode #8140**, the project source of truth (see memory `feedback_audit_real_data.md`). Do not inline JSON-LD via Elementor.

---

## Schema by Page Type

### 1. Homepage Schema

**Schema types:** Organization + LocalBusiness/HVACBusiness + WebSite + BreadcrumbList

```json
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": ["HVACBusiness", "LocalBusiness"],
      "@id": "https://75degreeac.com/#business",
      "name": "75 Degree AC",
      "url": "https://75degreeac.com",
      "telephone": "(713) 598-2737",
      "foundingDate": "2016",
      "description": "Licensed HVAC contractor in Houston, TX providing AC repair, installation, maintenance, and 24/7 emergency service for residential and commercial customers.",
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
        "latitude": 29.7797,
        "longitude": -95.4069
      },
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
          "opens": "08:00",
          "closes": "20:00"
        }
      ],
      "priceRange": "$$",
      "areaServed": [
        {"@type": "City", "name": "Houston", "containedInPlace": {"@type": "State", "name": "Texas"}},
        {"@type": "City", "name": "Katy"},
        {"@type": "City", "name": "Sugar Land"},
        {"@type": "City", "name": "The Woodlands"},
        {"@type": "City", "name": "Cypress"},
        {"@type": "City", "name": "Spring"},
        {"@type": "City", "name": "Tomball"},
        {"@type": "City", "name": "Missouri City"},
        {"@type": "City", "name": "Richmond"},
        {"@type": "City", "name": "Pasadena"},
        {"@type": "City", "name": "Baytown"}
      ],
      "knowsAbout": [
        "Air conditioning repair", "HVAC installation", "Furnace repair",
        "Heat pump repair", "AC maintenance", "Emergency HVAC service",
        "Carrier HVAC", "Trane HVAC", "Lennox HVAC", "Goodman HVAC",
        "Ductless mini-split systems", "Commercial HVAC"
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "HVAC Services",
        "itemListElement": [
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "AC Repair Houston"}},
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Emergency AC Repair 24/7"}},
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "AC Installation Houston"}},
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "AC Maintenance Houston"}},
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Furnace Repair Houston"}},
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Commercial HVAC Houston"}}
        ]
      },
      "sameAs": [
        "[GBP URL from business-info.md]",
        "[Facebook URL]",
        "[Yelp URL]",
        "[BBB URL]",
        "[YouTube URL if exists]",
        "[LinkedIn URL if exists]"
      ]
    },
    {
      "@type": "WebSite",
      "@id": "https://75degreeac.com/#website",
      "url": "https://75degreeac.com",
      "name": "75 Degree AC",
      "description": "HVAC contractor in Houston, TX",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https://75degreeac.com/?s={search_term_string}",
        "query-input": "required name=search_term_string"
      }
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://75degreeac.com"}
      ]
    }
  ]
}
```

---

### 2. Service Page Schema

**Schema types:** LocalBusiness (condensed) + Service + FAQPage + BreadcrumbList + AggregateRating (when reviews available)

```json
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "[Service Name, e.g., AC Repair Houston TX]",
      "description": "[Service description 50–100 words]",
      "provider": {"@id": "https://75degreeac.com/#business"},
      "areaServed": {"@type": "City", "name": "Houston", "containedInPlace": {"@type": "State", "name": "Texas"}},
      "url": "https://75degreeac.com/[slug]/",
      "serviceType": "[AC Repair | HVAC Installation | AC Maintenance | etc.]"
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "[Question from FAQ section]",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "[Answer text — MAXIMUM 70 words, answer-first format. The 70-word ceiling is the AI extraction sweet spot per 2025-2026 research.]"
          }
        }
      ]
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://75degreeac.com"},
        {"@type": "ListItem", "position": 2, "name": "Services", "item": "https://75degreeac.com/services/"},
        {"@type": "ListItem", "position": 3, "name": "[Service Name]", "item": "https://75degreeac.com/[slug]/"}
      ]
    }
  ]
}
```

---

### 3. Emergency Service Page

Add `OpeningHoursSpecification` with 24/7:
```json
"openingHoursSpecification": [
  {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
    "opens": "00:00",
    "closes": "23:59"
  }
]
```

---

### 4. Location Page Schema

```json
{
  "@type": "Service",
  "name": "[Service] in [City], TX",
  "provider": {"@id": "https://75degreeac.com/#business"},
  "areaServed": [
    {
      "@type": "City",
      "name": "[City]",
      "containedInPlace": {"@type": "State", "name": "Texas"}
    },
    {
      "@type": "PostalCode",
      "postalCode": "[ZIP from service-areas.md]"
    }
  ]
}
```

---

### 5. FAQPage Schema — Key Q&As for All Service Pages

**AC Repair:**
```json
{"@type": "Question", "name": "How much does AC repair cost in Houston, TX?",
 "acceptedAnswer": {"@type": "Answer", "text": "AC repair in Houston costs $150–$900 depending on the issue. Common repairs like capacitor replacement run $150–$350; refrigerant recharges cost $200–$500; compressor replacements run $800–$2,500. 75 Degree AC provides free estimates before any work begins. Call (713) 598-2737 for a same-day diagnosis."}}

{"@type": "Question", "name": "Is 75 Degree AC available 24/7 for emergency service?",
 "acceptedAnswer": {"@type": "Answer", "text": "Yes. 75 Degree AC provides 24/7 emergency AC and HVAC repair in Houston, TX — including nights, weekends, and holidays. Call (713) 598-2737 for same-day emergency service anywhere in Houston and Greater Houston suburbs."}}

{"@type": "Question", "name": "What HVAC brands does 75 Degree AC service?",
 "acceptedAnswer": {"@type": "Answer", "text": "75 Degree AC services all major HVAC brands including Carrier, Trane, Lennox, Goodman, Rheem, American Standard, and Daikin. Our technicians are trained on residential and commercial systems from all manufacturers. Call (713) 598-2737 to schedule service for your brand."}}
```

---

## Schema Implementation in WordPress + Rank Math

**Option 1 — Rank Math Schema Module (recommended):**
1. Edit page → Rank Math → Schema tab
2. Choose schema type (LocalBusiness, FAQ, Article, etc.)
3. Fill in fields using data above

**Option 2 — Custom HTML in WordPress header:**
1. Edit page → Custom HTML block
2. Paste `<script type="application/ld+json">` block

**Option 3 — Rank Math → Schema → Custom Schema:**
Paste raw JSON-LD for complex multi-type schemas

**Validation:**
After adding schema: https://validator.schema.org → enter page URL → check for errors

---

## Schema for AI Extraction (New 2026 Section)

Three under-used schema types punch far above their weight for AI citation.

### DefinedTerm — for HVAC technical glossary

When a user asks ChatGPT "what is a SEER rating?" or "what is refrigerant?", AI systems prefer to attribute definitions to sources with explicit `DefinedTerm` markup. 75 Degree AC should publish a glossary page at `/hvac-glossary/` and mark every term with this schema:

```json
{
  "@context": "https://schema.org",
  "@type": "DefinedTermSet",
  "name": "75 Degree AC HVAC Glossary",
  "url": "https://75degreeac.com/hvac-glossary/",
  "hasDefinedTerm": [
    {
      "@type": "DefinedTerm",
      "name": "SEER Rating",
      "description": "Seasonal Energy Efficiency Ratio — a measurement of an air conditioner's cooling output divided by total electrical energy input over a typical cooling season. Higher SEER = more efficient. Modern systems range from SEER 14 (entry-level) to SEER 26 (premium). The U.S. Department of Energy mandates SEER 15 minimum for new central AC units installed in the southern U.S. as of 2023.",
      "url": "https://75degreeac.com/hvac-glossary/#seer-rating",
      "inDefinedTermSet": "https://75degreeac.com/hvac-glossary/"
    },
    {
      "@type": "DefinedTerm",
      "name": "Refrigerant",
      "description": "The chemical compound (typically R-410A or R-32 in modern systems; R-22 in pre-2010 systems) that absorbs and releases heat as it cycles through an AC system. R-22 was phased out in 2020 under the Montreal Protocol.",
      "url": "https://75degreeac.com/hvac-glossary/#refrigerant",
      "inDefinedTermSet": "https://75degreeac.com/hvac-glossary/"
    },
    {
      "@type": "DefinedTerm",
      "name": "Heat Pump",
      "description": "An HVAC system that both heats and cools a building by transferring heat between indoor and outdoor air using refrigerant. Far more energy-efficient than electric resistance heating in mild climates like Houston.",
      "url": "https://75degreeac.com/hvac-glossary/#heat-pump",
      "inDefinedTermSet": "https://75degreeac.com/hvac-glossary/"
    },
    {
      "@type": "DefinedTerm",
      "name": "Evaporator Coil",
      "description": "The indoor component of an AC system where refrigerant absorbs heat from interior air. Located above the furnace or air handler. Failure causes warm air output and ice buildup.",
      "url": "https://75degreeac.com/hvac-glossary/#evaporator-coil",
      "inDefinedTermSet": "https://75degreeac.com/hvac-glossary/"
    }
  ]
}
```

**Build a complete glossary covering at minimum:** SEER, EER, BTU, AFUE, refrigerant types (R-22, R-410A, R-32), evaporator coil, condenser coil, compressor, capacitor, contactor, heat pump, mini-split, ductless system, MERV rating, ERV/HRV, plenum, return air, supply air, refrigerant leak, blower motor.

### ItemList — for "Signs of..." and step-by-step sections

Every service page has a "Signs your AC needs repair" or "How our process works" list. Mark these with `ItemList` so AI systems can extract them as structured citations.

```json
{
  "@context": "https://schema.org",
  "@type": "ItemList",
  "name": "Signs Your AC Needs Repair",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Warm air from vents",
      "description": "Likely a refrigerant leak, dirty evaporator coil, or failing compressor. Common in Houston summers when systems run continuously."
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Loud rattling, banging, or screeching",
      "description": "Indicates a loose or failing component — fan motor, blower, or compressor. Shut off the system and call for service."
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Frequent short cycling",
      "description": "AC turns on and off rapidly. Typically caused by an oversized unit, dirty filter, low refrigerant, or thermostat problem."
    },
    {
      "@type": "ListItem",
      "position": 4,
      "name": "Water pooling near the indoor unit",
      "description": "Clogged condensate drain line — common in Houston humidity. Can cause water damage if untreated."
    },
    {
      "@type": "ListItem",
      "position": 5,
      "name": "Spike in electric bill with no usage change",
      "description": "Often signals a failing capacitor, dirty coils, or refrigerant loss. A tune-up typically pays for itself."
    }
  ]
}
```

Add ItemList schema to every service page that has a list section. **This applies to:** symptoms, process steps, brand lists, tool/parts lists, before/after checklists.

### FAQPage — Answer Length Rule

Every `acceptedAnswer.text` must be **70 words or less**. Longer answers are not extracted as citations. The 4.2× citation multiplier from FAQPage schema is contingent on answers being in the AI extraction sweet spot. Audit all existing FAQPage schema for answers exceeding 70 words and rewrite.

### sameAs — Required, Not Optional

For Organization/HVACBusiness schema, `sameAs` must include all of:
- Google Business Profile URL
- Wikidata Q-ID URL (https://www.wikidata.org/wiki/Q...)
- Facebook page
- Yelp business URL
- BBB profile
- LinkedIn company page
- YouTube channel (if exists — 0.737 AI citation correlation)
- Apple Maps Connect (https://maps.apple.com/place?...)
- Bing Places listing
- **Foursquare listing** (60–70% of ChatGPT local recs source from this database — claim immediately)
- **ThreeBestRated profile** (24% of ChatGPT local business directory citations — apply for inclusion)
- Industry directories (HomeAdvisor, Angi, Thumbtack, Houzz, Best Pick Reports, Birdeye)

Missing sameAs entries are entity-resolution failures. AI systems cannot tell the GBP and the website refer to the same entity without them.

---

## Person Schema — Kenny Ho (Named Technician) — REQUIRED on every service page

Person schema with multi-sameAs is a 2026 AI citation requirement (Microsoft Copilot entity resolution + 38% median citation lift in 90 days per 40-site study). Validated 2026-05-22.

```json
{
  "@context": "https://schema.org",
  "@type": "Person",
  "@id": "https://75degreeac.com/#kenny-ho",
  "name": "Kenny Ho",
  "jobTitle": "Lead HVAC Technician",
  "worksFor": {
    "@id": "https://75degreeac.com/#organization"
  },
  "url": "https://75degreeac.com/about-us/",
  "image": "https://75degreeac.com/wp-content/uploads/kenny-ho.jpg",
  "knowsAbout": [
    "HVAC repair",
    "Air conditioning installation",
    "Heat pump systems",
    "Refrigerant transition (R-410A to R-454B)",
    "Manual J load calculations",
    "Houston climate HVAC operation"
  ],
  "hasCredential": [
    {
      "@type": "EducationalOccupationalCredential",
      "name": "EPA 608 Universal Certification",
      "credentialCategory": "certification"
    },
    {
      "@type": "EducationalOccupationalCredential",
      "name": "NATE Certified",
      "credentialCategory": "certification"
    }
  ],
  "sameAs": [
    "https://www.linkedin.com/in/kenny-ho-hvac/",
    "https://www.facebook.com/kennyho.75degreeac/"
  ]
}
```

**Placement on the page:**
- HTML body: named-technician block with photo + bio + credentials (per page anatomy in `ai-citation-filter.md` §4a)
- Schema: included on every service page in the schema script block
- Link from `provider` field of `Service` schema to this Person's `@id`

**Future sameAs placeholders (add when profiles exist):**
- Instagram (`https://www.instagram.com/kennyho75degree/`)
- YouTube channel (when launched — 0.737 AI citation correlation per `references/bot-taxonomy.md`)

These two are listed in the brief as "planned" until profiles exist; do NOT include them in schema before they are real (invalid sameAs anchors break entity resolution).

---

## award Schema — License + Manufacturer Auth + Houston Chronicle BotB

Required on Organization/HVACBusiness schema for AI engines to recognize verifiable credentials:

```json
{
  "award": [
    "Texas Air Conditioning Contractor License TACLA72152E (issued by Texas Department of Licensing and Regulation, current)",
    "EPA 608 Universal Certified Technicians",
    "NATE Certified Service Team"
  ]
}
```

**When 75 Degree AC obtains additional credentials, add each as a separate string:**
- Carrier Factory Authorized Dealer (pursuing — when granted)
- Houston Chronicle Best of the Best (when finalist or winner)
- Angi Super Service Award (annually)
- BBB Pinnacle Award (long-term aspirational)

Each new award entry must reference the issuing body + year for AI verification.

---

## foundingDate — Required on Organization Schema + Visible on Page

```json
{
  "@type": "HVACBusiness",
  "foundingDate": "2016",
  ...
}
```

**Visibility rule:** "Houston-local since 2016" must appear in HTML body text on:
- [ ] Homepage (about section)
- [ ] About page
- [ ] Footer (year)
- [ ] At least one trust strip near hero on service pages

The schema field alone is insufficient — AI engines cross-validate against visible HTML.

---

## dateModified + datePublished — Mandatory on Every Page

Every WebPage / Article / Service / FAQPage schema MUST include:

```json
{
  "datePublished": "2026-04-15",
  "dateModified": "2026-05-22"
}
```

**Visibility rule:** A visible "Last Updated: [Month Year]" timestamp must appear within the first 200 words of every page body, exactly matching `dateModified` in schema. Mismatch = AI engines treat the page as stale.

**Refresh cadence triggers a `dateModified` bump:**
- Pricing pages: 30 days
- Seasonal pages: 30 days
- Service pages: 90 days
- Location pages: 90 days
- Blog posts: 120 days
- Evergreen pages: 180 days

Track in `02-site-architecture/page-refresh-log.csv` per `content-strategy` skill.

---

## 12-Type Service-Page Schema Stack — Abacus Baseline

Top Houston competitors deploy 12 schema types per page. **Service-page baseline for 75 Degree AC** — every service page must deploy these 12 types (matches the 12-point AI citation filter in `ai-citation-filter.md` §3):

| # | @type | Purpose |
|---|---|---|
| 1 | `HVACBusiness` (top-level Organization) | Industry-specific signal |
| 2 | `AggregateRating` (with ratingValue + reviewCount + bestRating + worstRating) | Verbatim AI extraction |
| 3 | `Service` (with provider + areaServed + hasOfferCatalog + serviceType) | Service categorization |
| 4 | `Offer` (per service or financing — price, priceCurrency, validFrom) | Pricing signal |
| 5 | `OfferCatalog` (bundled services list) | Service taxonomy |
| 6 | `Person` (Kenny Ho — see above) | Named-technician entity |
| 7 | `BusinessLocation` (Houston HQ + Richmond TX office) | Multi-location |
| 8 | `geoshape` (service area polygon — rare on Houston SERPs, competitive edge) | Map-grade area signal |
| 9 | `OpeningHoursSpecification` | Availability signal |
| 10 | `City` / `AdministrativeArea` (entity-linked Houston, Harris County, Texas) | Location entity linking |
| 11 | `Map` (with GeoCoordinates) | Visual map embed |
| 12 | `PostalAddress` | NAP consistency |

**Plus mandatory adjuncts (separate from the 12):**
- `FAQPage` on every service page
- `BreadcrumbList` site-wide
- `award` for TACLA + future auths
- `Speakable` for AI + voice extraction

**Citation: 38% median AI citation lift in 90 days from comprehensive schema rollout (40-site study, validated 2026-05-22).**

---

## Speakable Schema (AI + Voice Priority)

Add to pages with key answer blocks:
```json
{
  "@type": "SpeakableSpecification",
  "cssSelector": [".answer-block", ".faq-answer", "h2.question-heading"]
}
```
Add as property on Article or WebPage schema.

---

## Output Files

Schema files: `02-site-architecture/schema/[slug]-schema.jsonld`
Schema audit: `02-site-architecture/schema/schema-audit-[date].md`

One file per page. Each file = complete `<script type="application/ld+json">` block.
