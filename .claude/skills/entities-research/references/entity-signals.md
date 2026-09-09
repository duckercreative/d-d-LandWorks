# Entity Signal Framework — Local Businesses (2026)

The entity-signal stack defines how Google + AI engines build confidence that a business is a real, identifiable entity worth surfacing. This reference is project-agnostic — applies to HVAC, landscaping, plumbing, dental, legal, restaurants, or any local-service vertical.

---

## What Google + AI Engines Mean by an Entity

An entity is any real-world thing that can be distinctly identified. Google's Knowledge Graph and modern AI engines (ChatGPT, Perplexity, Gemini, Claude, Copilot) all maintain entity layers. When the engines can confidently identify a business as a known entity — not just a website — they treat the site differently:

- Rankings stabilize (less query-by-query volatility)
- Knowledge Panel appears in branded SERPs
- Brand queries trigger rich results (sitelinks, reviews summary, knowledge box)
- Local pack presence strengthens
- AI engines describe the business accurately and cite the website as a source
- AI Overviews cite the site (when paired with the 6.5× third-party multiplier)

---

## The Entity Establishment Stack (5 layers)

Entity authority works bottom-up. Higher layers depend on the layers below being correct.

```
Layer 5 — Knowledge Panel / AI Recognition (the outcome)
Layer 4 — Wikidata / Wikipedia Presence (the truth node)
Layer 3 — Authoritative External Mentions (press, industry, podcasts)
Layer 2 — Consistent Citation Network (directories, social, GBP)
Layer 1 — Structured Data on Website (schema.org)
```

Most local businesses have only Layer 1 (incomplete schema) + scattered Layer 2. Competitive differentiation happens at Layers 3–5.

---

## Layer 1 — On-Site Structured Data

The schema markup on the website is the foundation. It tells Google explicitly what entities exist, what their attributes are, and how they connect.

**Required schema for every local business website:**

```json
{
  "@context": "https://schema.org",
  "@type": "[SpecificBusinessSubtype]",
  "@id": "https://[domain]/#business",
  "name": "[Business Name]",
  "legalName": "[Legal Business Name if different]",
  "url": "https://[domain]",
  "telephone": "+1XXXXXXXXXX",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "[street]",
    "addressLocality": "[city]",
    "addressRegion": "[state abbreviation]",
    "postalCode": "[zip]",
    "addressCountry": "US"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": [lat],
    "longitude": [lng]
  },
  "openingHoursSpecification": [...],
  "areaServed": [
    {
      "@type": "City",
      "name": "[city 1]",
      "@id": "https://www.wikidata.org/wiki/Q[QID]"
    },
    {
      "@type": "City",
      "name": "[city 2]",
      "@id": "https://www.wikidata.org/wiki/Q[QID]"
    }
  ],
  "sameAs": [
    "https://www.facebook.com/[page]",
    "https://www.linkedin.com/company/[company]",
    "https://www.yelp.com/biz/[business]",
    "https://www.bbb.org/[listing]",
    "https://foursquare.com/v/[id]",
    "https://www.wikidata.org/wiki/Q[QID]"
  ],
  "knowsAbout": [
    "[Service 1]",
    "[Service 2]",
    "[Brand 1]",
    "[Industry concept]"
  ],
  "founder": {
    "@type": "Person",
    "@id": "https://[domain]/#owner",
    "name": "[Founder Name]"
  },
  "logo": {
    "@type": "ImageObject",
    "url": "https://[domain]/images/logo.png"
  }
}
```

**Use the most specific @type possible.** More specific = stronger entity signal:

| Industry | Preferred @type | Avoid |
|---|---|---|
| HVAC | `HVACBusiness` | `LocalBusiness` (too generic) |
| Plumbing | `Plumber` | `HomeAndConstructionBusiness` |
| Electrical | `ElectricalContractor` | `LocalBusiness` |
| Landscaping | `LandscapingBusiness` | `LocalBusiness` |
| Roofing | `RoofingContractor` | `LocalBusiness` |
| Dental | `Dentist` | `MedicalBusiness` |
| Legal | `Attorney` | `ProfessionalService` |
| Restaurant | `Restaurant` (or specific cuisine subtype) | `LocalBusiness` |
| Real estate | `RealEstateAgent` | `LocalBusiness` |

**`areaServed` upgrade rule (2026):** Don't use bare string city names. Use a `City` object with `@id` → Wikidata URL. This gives AI engines a verifiable geographic anchor.

**`knowsAbout` population:** List every primary service, every brand serviced, key industry concepts. This is the topical authority signal in schema.

---

## Layer 2 — Citation Network

### NAP Consistency Rule

Name, Address, Phone must be identical across every platform. Minor variations confuse entity resolution:

- "Smith's Lawn Care" vs "Smiths Lawn Care" (apostrophe matters)
- "123 Main St" vs "123 Main Street" (abbreviation matters)
- "(303) 555-0100" vs "303-555-0100" (format matters)
- "Suite 5" vs "Ste 5" vs "#5" (suite syntax matters)

**Choose one canonical format. Use it everywhere. Document it in `business-info.md` as the source of truth.**

### Citation Tiers (2026 — reordered by AI citation correlation)

**Tier 1 — AI-citation-critical (must have):**
- Wikidata (the Truth Node — feeds Google KG + AI training)
- Google Business Profile (still the cornerstone of local entity identity)
- Foursquare (60–70% of ChatGPT local recs)
- YouTube channel (0.737 AI citation correlation — strongest)
- Apple Maps Connect (Siri pipeline)
- Bing Places (Alexa pipeline)
- Facebook Business (0.512 correlation)
- LinkedIn Company (Copilot anchor)
- Yelp (0.489 correlation)
- BBB (0.401 correlation)

**Tier 2 — Aggregator authority (high value):**
- ThreeBestRated (24% of ChatGPT directory citations) — editorial inclusion
- Birdeye (cross-platform review aggregation)
- Best Pick Reports (city-specific)
- Niche industry aggregator (varies by vertical: Angi/HomeAdvisor for home services; Avvo for legal; HealthGrades for medical; TripAdvisor for hospitality)

**Tier 3 — Local authority:**
- Local Chamber of Commerce (member directory)
- City business directory (some cities maintain)
- State contractor / license registry (HVAC, plumbing, electrical, legal, medical, real estate)
- Industry association local chapter
- Local trade school / community college (if business has alumni connection)
- Local media business directories

### Citation network gaps to watch for

- **Duplicate listings** — two Foursquare entries, two GBPs (rare but possible after rebrand or address change) — claim and merge before they fragment entity recognition
- **Outdated NAP** — old phone numbers on old listings — every NAP change requires a citation sweep
- **Unverified claims** — many platforms (Bing Places, Apple Maps) require verification by mail or phone; "claimed" ≠ "verified"
- **404 sameAs URLs in schema** — a single broken sameAs hurts the whole graph; audit quarterly

---

## Layer 3 — Authoritative External Mentions

Harder to earn, carries dramatically more entity weight. **AI Overviews are 6.5× more likely to cite content via external mentions than self-published content** (Onely 2025).

### High-value external mention types

**Local press mentions:**
- Major regional newspaper (Houston Chronicle, LA Times, etc.) — even a brief mention in an article is high-value
- Regional alt-weekly (Houston Press, LA Weekly, etc.)
- Regional business journal (bizjournals.com network or equivalent)
- City magazine (Houstonia, LA Magazine, etc.)

**Community / hyperlocal:**
- Patch.com city-specific edition
- Community Impact (or local equivalent)
- Neighborhood association newsletters
- HOA newsletters (often digital and indexed)

**Industry publications:**
- Trade press (vertical-specific — ACHR News for HVAC, Restaurant Business for restaurants, ABA Journal for legal)
- Industry association publications (local chapter newsletters often online)
- Industry awards lists ("Best of [Industry] [Year]" features)

**Podcast / video guest appearances:**
- Industry-specific podcasts with transcripts
- Local business podcasts
- YouTube interviews
- Conference panel videos

**Community involvement (with documented mentions):**
- Event sponsorships (sponsor name on event website + press)
- Charity board memberships (charity's "Our Board" page)
- School partnerships (school's "Community Partners" page)
- Local nonprofit support (recognition listings)

### Earning the mentions (high-leverage tactics)

1. **HARO / Qwoted / Featured.com** — respond to journalist queries; even one "best [service] in [city]" feature is a load-bearing mention
2. **Pitch local press direct** — seasonal angles (Houston summer AC tips, snow-belt heating tips) work; pitch in shoulder seasons
3. **Industry guest articles** — write for trade press; bio links back to website
4. **Speak at local events** — community library talks, chamber luncheons, real-estate-association events; recorded talks = lasting citation
5. **Community sponsorships** — pick events whose websites get crawled (annual recurring events have indexed history)

---

## Layer 4 — Wikidata

Wikidata is the structured, machine-readable data layer that feeds Wikipedia and most AI systems. A populated Wikidata entry is a Truth Node — Google + OpenAI both treat it as authoritative.

### Notability gate

Wikidata has a notability standard. A standalone local business typically needs at least one of:
- Coverage in regional/national press (multiple distinct mentions in independent sources)
- Industry awards
- Notable founder / owner (with their own Wikidata-eligible profile)
- Historic significance (founding date, regional pioneer status)

If notability isn't met yet, **build Layer 3 first** (third-party mentions). Once notability is met, create the entry.

### Property depth requirement

Per Wikidata research: entries with ≥8 filled properties are dramatically more likely to feed Google Knowledge Graph + ChatGPT training than thin entries. See `SKILL.md` § Wikidata Property Depth Table.

### What to do BEFORE notability is met

Even without a Wikidata entry, structure website content to be machine-parseable in the same shape Wikidata expects:
- Consistent entity description across every page
- Founder bio structured like a Wikidata description (full name, role, founded, location, prior work)
- Founding story with specific verifiable dates + sources
- Service taxonomy that maps to a known industry vocabulary
- Address that resolves to a coordinate (geocoding-friendly format)

---

## Layer 5 — Knowledge Panel / AI Recognition (the outcome)

A Knowledge Panel appears when Google has enough confidence in an entity's identity to surface a dedicated information box in branded SERPs. **It is the outcome of Layers 1–4 being correct, not an action you take directly.**

### What triggers a Knowledge Panel for a local business

- Complete + verified Google Business Profile
- Consistent citation network (Layer 2 → 7+ verified directories with matching NAP)
- Schema markup that exactly matches GBP data
- Brand searches generating clicks (signal: real users seek this business by name)
- Sufficient branded query volume
- Layer 3 third-party mentions

### Timeline (realistic)

- Layers 1-2 deployment: 2-4 weeks (depending on directory verification times)
- Wikidata entry creation + approval: 1-2 weeks if notability met
- Layer 3 first wave: 3-6 months (PR cycle)
- Knowledge Panel emergence: 3-6 months from full deployment, sometimes longer

Do not promise Knowledge Panel emergence inside 90 days. Local PR mentions (Layer 3) accelerate the timeline meaningfully.

### AI engine recognition as a parallel outcome

Knowledge Panel reflects Google's confidence. AI engines (ChatGPT, Perplexity, Gemini, Copilot, Claude) have their own entity layers — overlap with Google's but not identical:

- **ChatGPT**: heavily Wikidata-weighted + Foursquare + community content
- **Perplexity**: live-citation model — surfaces sources rather than baked-in knowledge; Reddit + Wikipedia + structured directories dominate
- **Gemini**: Google KG + GBP + YouTube (sister channel) + recent web
- **Microsoft Copilot**: Bing index + LinkedIn (sister property)
- **Claude**: training-data-time citations + structured directories; less reliant on real-time search

A business can have AI recognition before a Knowledge Panel and vice versa. Test all five engines as part of `entities-research` Source 10.

---

## Entity Relationship Modeling

Google + AI engines model relationships between entities. For a local business, the key relationships:

**Business → Services** (offers, isRelatedTo):
```json
{
  "@type": "Service",
  "@id": "https://[domain]/services/[slug]/#service",
  "name": "[Service Name]",
  "provider": {"@id": "https://[domain]/#business"},
  "areaServed": [...]
}
```

**Business → Locations** (areaServed):
Each location as a Place/City object with @id → Wikidata URL.

**Founder → Business** (founder, founderOf):
```json
"founder": {
  "@type": "Person",
  "@id": "https://[domain]/#owner",
  "name": "[Name]",
  "worksFor": {"@id": "https://[domain]/#business"}
}
```

**Business → Industry Associations** (memberOf):
```json
"memberOf": {
  "@type": "Organization",
  "name": "[Association]",
  "url": "[association website]"
}
```

**Business → Brands serviced** (knowsAbout — at the Brand level):
```json
"knowsAbout": [
  {"@type": "Brand", "name": "Carrier", "sameAs": "https://www.wikidata.org/wiki/Q5044477"},
  ...
]
```

---

## Entity Consistency Rule (the golden rule)

**Every source that mentions this business must describe it the same way.**

- Business name: identical character-for-character
- Services offered: same set (don't list 5 services on Yelp and 8 on Facebook — pick the canonical 6-8 and use everywhere)
- Location: same address format
- Description: same opening paragraph (or close variant — same key facts, same license number, same year founded)
- Hours: same wording

**Inconsistency = entity resolution confidence drops = weaker entity signals = no Knowledge Panel, no AI citation.**

When NAP changes (rare — but when it does, after a move or rebrand), the citation sweep must touch every Tier 1 + Tier 2 platform within 4 weeks. Schema sameAs array must be updated atomically with the change.
