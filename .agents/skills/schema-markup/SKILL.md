---
name: schema-markup
description: >
  Schema markup methodology for 75 Degree AC — JSON-LD for all page types,
  HVACContractor entity, FAQPage, Service, AggregateRating, and AI-optimized structured data.
  Activates when generating or auditing schema markup for any page.
version: 1.0.0
client: 75 Degree AC
---

# Schema Markup — 75 Degree AC

## Why Schema Is Critical for HVAC + AI

- FAQPage schema → **2.3× more likely** to appear in AI Overviews (Amsive 2025)
- LocalBusiness schema → required for Knowledge Panel
- AggregateRating schema → enables star ratings in SERP snippets
- Service schema → feeds Google's entity understanding of service offerings
- Speakable schema → enables voice assistant responses

**Current schema gap:** 75 Degree AC likely uses generic `LocalBusiness` type. Should use `HVACContractor` which is a specific subtype Google recognizes as an entity class.

---

## Business Constants (use exactly in all schema)

```json
{
  "@type": ["HVACContractor", "LocalBusiness"],
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

## Schema by Page Type

### 1. Homepage Schema

**Schema types:** Organization + LocalBusiness/HVACContractor + WebSite + BreadcrumbList

```json
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": ["HVACContractor", "LocalBusiness"],
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
            "text": "[Answer text — 50–150 words, answer-first format]"
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
