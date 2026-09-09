---
name: entity-seo
description: >
  Entity SEO methodology for 75 Degree AC — building entity authority, sameAs connections,
  Knowledge Panel optimization, Wikidata, and entity-based schema for AI recognition.
  Activates when working on entity building, Knowledge Panel, or AI entity recognition.
version: 1.0.0
client: 75 Degree AC
---

# Entity SEO — 75 Degree AC

> **This skill is the 75°AC-specific strategy doc.** Methodology lives in the project-agnostic skill chain. Always pair with:
> - `entities-research` v2.0 — Koray 14+14a sources, AI citation correlation data, Wikidata Truth Node, sameAs priority by AI citation correlation
> - `entities-mapping` v2.0 — entity-to-page assignment, salience math, `@id` registry, drift detection
> - `entity-extraction` v2.0 — per-page entity audit with salience scoring formula
> - `entity-validate` v2.0 — Wikidata + Google KG + AI engine cross-check (gate before any entity ships in schema or content)
>
> This skill contains the 75°AC-specific actions (Foursquare claim queue, Kenny Ho Person ecosystem, Wikidata property table for the actual business, etc.). The methodology skills contain the project-agnostic process. Don't duplicate; cross-reference.

## Why Entity SEO Matters

Google has shifted from keyword matching to entity understanding. The question Google asks:
"Do I know what entity this business is? Can I trust information about it?"

**Entity SEO benefits:**
- Knowledge Panel presence → branded SERP dominance
- AI system recognition → ChatGPT/Perplexity can cite the business
- sameAs connections → entity reconciliation across Google's Knowledge Graph
- knowsAbout schema → topical authority signal for ranking

**Whitespark 2024:** Entity signals correlate with local pack at ~9% weighting.
**AI citation data:** YouTube presence has 0.737 correlation with AI citation (strongest signal).

---

## Entity Profile for 75 Degree AC

### Core Entity Properties

```
Entity Name: 75 Degree AC
Entity Type: HVACBusiness (schema.org/HVACBusiness)
Location: Houston, TX, United States
Founded: 2016
Phone: (713) 598-2737
Website: https://75degreeac.com
```

### sameAs Targets (priority order by AI citation impact — updated 2026-05-22)

**Wikidata is the primary "Truth Node"** for both Google Knowledge Panel and OpenAI entity recognition (validated against ClickRank 2026 + 5W AI Platform Citation Source Index 2026). Elevate from "HIGH" to **CRITICAL**.

**Foursquare is the second highest leverage point** — 60-70% of ChatGPT local recommendations source from Foursquare's database (validated 2026-05-22). Single biggest action item we haven't completed.

| Platform | Priority | URL Pattern | Status | AI citation rationale |
|---|---|---|---|---|
| **Wikidata** | **CRITICAL** (Truth Node — Google KP + OpenAI training data) | wikidata.org/wiki/Q... | Check/Create | 26-48% of ChatGPT top-10 citations via Wikipedia connection |
| **Foursquare** | **CRITICAL** (claim immediately) | foursquare.com/v/... | Claim | 60-70% of ChatGPT local recommendations |
| YouTube | CRITICAL (0.737 AI citation) | youtube.com/@75degreeac | Check/Create | #1 most-cited AI domain, 34% growth in 6 months |
| Google Business Profile | CRITICAL | maps.google.com/... | Verify live | Gemini direct citation + local pack |
| **Apple Maps Connect** | **HIGH** (Siri/Apple Intelligence pipeline) | maps.apple.com/place?... | Claim/Create | 58% of voice queries local — Siri routes through Maps |
| **ThreeBestRated** | **HIGH** (apply for inclusion) | threebestrated.com/... | Apply | 24% of ChatGPT local business directory citations |
| **Birdeye aggregator hub** | **HIGH** | reviews.birdeye.com/... | Verify | Cross-platform review signal (Google + Yelp + FB aggregated) |
| Facebook | HIGH (0.512) | facebook.com/75degreeac | Verify complete | Entity sameAs + social signal |
| LinkedIn | HIGH | linkedin.com/company/75-degree-ac | Check/Create | Microsoft Copilot entity resolution |
| Yelp | HIGH (0.489) | yelp.com/biz/75-degree-ac | Verify complete | Local services AI citation |
| Bing Places | HIGH (Alexa pipeline) | bingplaces.com/... | Verify | Alexa indexes Bing, not Google |
| **Best Pick Reports** | **MEDIUM** (apply) | bestpickreports.com/... | Apply | Houston-specific aggregator |
| BBB | MEDIUM (0.401) | bbb.org/us/tx/... | Check/Create | Trust signal + accreditation |
| HomeAdvisor / Angi | MEDIUM | homeadvisor.com/... + angi.com/... | Claim free listing | Local services aggregator |
| Houzz | MEDIUM | houzz.com/pro/... | Claim | Home services AI source |
| Instagram | MEDIUM | instagram.com/75degreeac | Verify | Visual cross-platform sameAs |
| Nextdoor Business | MEDIUM | nextdoor.com/pages/... | Claim | Neighborhood trust signal |
| Twitter/X | LOW | twitter.com/... | Optional | Lowest citation weight in 2026 |

**Target: 14+ sameAs connections.** Minimum viable for 2026 AI citation parity:
Wikidata + **Foursquare** + GBP + YouTube + Apple Maps + Bing Places + Facebook + LinkedIn + Yelp + BBB + **ThreeBestRated** + **Birdeye** + HomeAdvisor + Houzz = 14.

The Foursquare and ThreeBestRated claims are the two highest-leverage actions we haven't taken. Foursquare drives 60-70% of ChatGPT local recs.

### Knowledge Panel Timeline (Set Realistic Expectations)

Knowledge Panel creation is a 3-6 month process even with all signals in place. Sequence:

1. Wikidata entry created and approved (1-2 weeks if notable)
2. Organization schema with full sameAs deployed (immediate)
3. Consistent NAP across 7+ authoritative platforms (2-4 weeks of citation work)
4. GBP fully verified and optimized (immediate if not already done)
5. **Wait 3-6 months** for Google to consolidate signals and emit Knowledge Panel
6. Local PR/news mentions accelerate this — see entities-research Source 14.

Do not promise the client a Knowledge Panel within the first 90 days. Tell them the work is being deployed; KP appearance follows once Google's confidence threshold is reached.

### AI Citation Multiplier — Local PR/News (6.5x)

AI Overviews are **6.5x more likely to cite content via external sources** (Onely 2025). Third-party local press coverage (Houston Chronicle, Houston Press, Houston Business Journal, neighborhood papers) directly increases AI citation probability for 75 Degree AC. Treat local PR as an entity-authority lever, not just a backlink.

**Pursue:**
- Houston Chronicle home & garden columns (seasonal AC tips)
- Houston Business Journal "small business spotlight" features
- Local nextdoor neighborhood newsletters
- HVAC trade publications (ACHR News, ACCA local chapter newsletter)
- Apartment / property management publications (multifamily HVAC tips)

### knowsAbout Entities (add to Organization schema)

```json
"knowsAbout": [
  "Air conditioning repair",
  "HVAC installation",
  "Furnace repair",
  "Heat pump systems",
  "Ductless mini-split air conditioners",
  "AC maintenance and tune-up",
  "Commercial HVAC systems",
  "Carrier HVAC systems",
  "Trane HVAC systems",
  "Lennox HVAC systems",
  "Goodman HVAC systems",
  "Refrigerant charging",
  "Indoor air quality",
  "TACLA certification",
  "Houston climate and HVAC needs"
]
```

---

## Entity Audit Process

### Step 1: Knowledge Panel Check

Search Google for: "75 Degree AC" (with and without "houston")

**Document:**
- Knowledge Panel present? (Yes / Partial / No)
- If yes: What information shows? Is it accurate?
- What appears in Position 1: GBP listing / website / directory?
- Are sitelinks showing?
- Any People Also Ask boxes for brand queries?

### Step 2: AI Entity Recognition Test

Test these prompts across AI platforms:
- ChatGPT: "What do you know about 75 Degree AC in Houston, TX?"
- Perplexity: "75 Degree AC houston hvac"
- Gemini: "Tell me about 75 Degree AC"

**Document:**
- Is the business mentioned by name?
- Is the website cited as a source?
- Is the information accurate?
- What sources does the AI reference?

If AI platforms don't recognize the entity → entity building is urgent.

### Step 3: Wikidata Entity Check

Search: https://www.wikidata.org/w/index.php?search=75+Degree+AC

If no entity exists:
- Create a Wikidata item for the business (must meet notability criteria)
- Required properties: instance of (business), located in (Houston TX), website, phone, industry (HVAC)
- Add sameAs links to GBP, Facebook, Yelp

### Step 4: NAP Entity Consistency

For AI entity recognition, the name must be **identical** across all platforms:
- `75 Degree AC` (not "75 Degree A/C", not "75° AC", not "Seventy-Five Degree AC")

Check the top 10 citation sources for name consistency.

---

## Entity Building Strategy

### Priority 1: YouTube Channel (0.737 AI citation correlation)

If no YouTube channel exists or it's inactive, this is the HIGHEST PRIORITY entity action.

**Channel setup:**
- Name: 75 Degree AC
- Handle: @75DegreeAC
- Description: "Houston's trusted HVAC contractor since 2016. AC repair, installation, and maintenance videos for Houston homeowners."
- Link: https://75degreeac.com

**Content to start with (6 videos):**
1. "How to Know When Your AC Needs Repair — Houston Guide"
2. "What to Expect From a 75 Degree AC Service Call"
3. "AC Maintenance Checklist for Houston Homeowners"
4. "Emergency AC Repair — What Happens When You Call 75 Degree AC"
5. "Carrier vs Trane vs Lennox — Which HVAC Brand is Best for Houston?"
6. "How Houston Humidity Affects Your AC System"

Each video: add to homepage page + relevant service page as embedded YouTube video.

### Priority 2: Complete sameAs Connections

For each platform in the sameAs table:
1. Find/create the profile
2. Ensure NAP is exact match
3. Add the URL to Organization schema's sameAs array
4. Link back to website from profile

### Priority 3: Speakable Schema on Key Pages

```json
{
  "@type": "WebPage",
  "speakable": {
    "@type": "SpeakableSpecification",
    "cssSelector": [".answer-block", ".speakable", "#business-description"]
  },
  "url": "https://75degreeac.com/[slug]/"
}
```

### Priority 4: Person Schema for Named Technician (Kenny Ho) — UPDATED 2026-05-22

Named-technician Person schema is now a 2026 AI citation requirement (Microsoft Copilot entity resolution + 38% median citation lift in 90 days per 40-site study). The full template lives in `schema-markup/SKILL.md` § "Person Schema — Kenny Ho" — entity-seo's job is to ensure the multi-sameAs entity ecosystem exists.

**Kenny Ho sameAs ecosystem (minimum viable):**
- LinkedIn profile (`linkedin.com/in/kenny-ho-hvac/`) — Microsoft Copilot anchor
- Facebook profile (`facebook.com/kennyho.75degreeac/`)
- About Us page bio (`75degreeac.com/about-us/#kenny-ho`)

**Planned (add when profiles exist):**
- Instagram tech-bio (`instagram.com/kennyho75degree/`)
- YouTube creator page (when channel launches)

The `@id` in Person schema must match the anchor target on every service page (`75degreeac.com/#kenny-ho`) so AI engines resolve all service-page Person blocks to the same entity. Inconsistency = entity-resolution failure.

### Priority 5: Wikidata Property Depth (added 2026-05-22)

When creating the Wikidata entry for 75 Degree AC, fill these properties at minimum (P-codes are Wikidata's required identifiers):

| Property | Wikidata code | Value example |
|---|---|---|
| Instance of | P31 | air conditioning contractor (Q-ID for the industry term) |
| Country | P17 | United States (Q30) |
| Located in administrative territorial entity | P131 | Houston (Q16555) → Harris County (Q488297) → Texas (Q1439) |
| Inception | P571 | 2016 |
| Official website | P856 | https://75degreeac.com |
| Phone number | P1329 | +1-713-598-2737 |
| Industry | P452 | HVAC services (Q-ID) |
| Coordinate location | P625 | 29.82016, -95.46033 |
| License (official authorization) | P506 | TACLA72152E (TDLR) |
| Owner / operator | P127 | (Kenny Ho or owner name) |
| Sister Wikipedia article | — | None yet (notability gated; pursue local PR first) |

Wikidata entries with ≥8 filled properties are dramatically more likely to feed Google Knowledge Graph + ChatGPT training than thinly-populated entries. Fully populate before promoting Wikidata Q-ID in schema sameAs.

### Priority 6: Location Entity Linking (added 2026-05-22)

Treat Houston, Richmond TX, Katy TX, Sugar Land, etc. as separate entities in schema:

```json
{
  "@type": "Service",
  "areaServed": [
    {
      "@type": "City",
      "name": "Houston",
      "@id": "https://www.wikidata.org/wiki/Q16555",
      "sameAs": "https://en.wikipedia.org/wiki/Houston"
    },
    {
      "@type": "City",
      "name": "Richmond",
      "@id": "https://www.wikidata.org/wiki/Q985552",
      "sameAs": "https://en.wikipedia.org/wiki/Richmond,_Texas"
    },
    {
      "@type": "City",
      "name": "Katy",
      "@id": "https://www.wikidata.org/wiki/Q985568",
      "sameAs": "https://en.wikipedia.org/wiki/Katy,_Texas"
    }
  ]
}
```

Linking `areaServed` to Wikidata City entities (not just bare string names) gives AI engines verifiable entity anchors for geographic relevance. This is one of the easiest schema upgrades to ship and pairs directly with the multi-location BusinessLocation schema in `schema-markup`.

### Priority 7: Cross-Platform Entity Harmonization Checklist (added 2026-05-22)

For EVERY platform in the sameAs list above, verify these 5 fields match exactly:

1. **Business name** — "75 Degree AC" (not "75 Degree A/C", not "75degreeac", not "75 Degree Air Conditioning")
2. **Address** — "4800 W 34th St, Ste C50F, Houston, TX 77092" (exact format, including suite syntax)
3. **Phone** — "(713) 598-2737" Houston primary; "(346) 681-2625" Richmond TX (never mix — Richmond pages must always show (346))
4. **Hours of operation** — 24/7 emergency wording consistent across platforms
5. **Description** — same opening paragraph (or close variant) on every platform; same TACL license number

Inconsistency across any of these is an entity-resolution failure — AI engines downgrade trust scores when the same business shows conflicting facts across platforms. Single source of truth: `business-info.md` + this skill.

---

## Entity Monitoring

**Monthly checks:**
1. Google "75 Degree AC" — Knowledge Panel changes?
2. Test AI platforms — entity recognition improving?
3. sameAs links working? (no 404s)
4. New citations acquired → add to sameAs array

---

## Output Files

Entity audit: `01-research/entity-audit-[date].md`
sameAs inventory: `01-research/sameAs-links.md`
Schema updates: `02-site-architecture/schema/organization-schema.jsonld`
YouTube plan: `04-gmb/youtube-plan.md`
