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
Entity Type: HVACContractor (schema.org/HVACContractor)
Location: Houston, TX, United States
Founded: 2016
Phone: (713) 598-2737
Website: https://75degreeac.com
```

### sameAs Targets (priority order by AI citation impact)

| Platform | Priority | URL Pattern | Status |
|---------|---------|-------------|--------|
| YouTube | CRITICAL (0.737 AI citation) | youtube.com/@75degreeac | Check/Create |
| Google Business Profile | CRITICAL | maps.google.com/... | Verify live |
| Wikidata | HIGH (0.654 AI citation) | wikidata.org/wiki/Q... | Check/Create |
| Facebook | HIGH (0.512) | facebook.com/75degreeac | Verify complete |
| LinkedIn | HIGH | linkedin.com/company/75-degree-ac | Check/Create |
| Yelp | HIGH (0.489) | yelp.com/biz/75-degree-ac | Verify complete |
| BBB | MEDIUM (0.401) | bbb.org/us/tx/... | Check/Create |
| Instagram | MEDIUM | instagram.com/75degreeac | Verify |
| Twitter/X | LOW | twitter.com/... | Optional |

**Target: 7+ sameAs connections.** Minimum viable: GBP + Facebook + Yelp + BBB + LinkedIn + YouTube = 6.

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

### Priority 4: Person Schema for Business Owner

If owner/operator is public-facing:
```json
{
  "@type": "Person",
  "name": "[Owner Name]",
  "jobTitle": "Owner",
  "worksFor": {"@id": "https://75degreeac.com/#business"},
  "url": "[LinkedIn profile if public]"
}
```

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
