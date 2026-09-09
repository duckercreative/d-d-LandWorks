---
name: competitor-analysis
description: >
  Competitor research methodology for 75 Degree AC — identifying top HVAC competitors in
  Houston, analyzing their GBP, content, keywords, backlinks, and positioning.
  Activates when researching competitors or identifying ranking gaps.
version: 1.0.0
client: 75 Degree AC
---

# Competitor Analysis — 75 Degree AC

## How to Identify Top Competitors

Search these queries and document who ranks in positions 1–5 local pack and organic:
- "ac repair houston tx"
- "hvac contractor houston"
- "emergency ac repair houston"
- "ac maintenance houston"
- "commercial hvac houston"

The same 3–5 businesses should appear repeatedly across these searches — those are the real competitors.

**Common Houston HVAC Competitors to Check:**
- CoolPro HVAC
- All Cool AC
- Direct Energy Home Services
- Houk Air Conditioning
- One Hour Air Conditioning & Heating
- Any business appearing in local pack for target keywords

---

## Input Files

- `01-research/competitor-analysis.md` — existing competitor data
- `CLAUDE.md` — our USPs and positioning to compare against
- `03-gsc/data/queries-202604.csv` — our rankings to compare

---

## Analysis Framework (per competitor)

### 1. GBP & Local Pack Analysis

```
Competitor: [Name]
GBP URL: [URL]
Primary Category: [category]
Review Count: [number]
Rating: [X.X/5]
Review Velocity: [est. reviews/month]
Photo Count: [number]
GBP Posts: [frequency]
Service list depth: [count of named services]
Response Rate to Reviews: [%]
Local Pack Position for "ac repair houston": [X]
```

**Competitive Benchmark:**
- Reviews <60: we can overtake within 6 months
- Reviews 60–200: aggressive review generation needed
- Reviews 200+: long-term play, differentiate on other signals

### 2. Website SEO Analysis

Use WebFetch to analyze competitor pages:

**Homepage analysis:**
- Title tag (what keyword do they lead with?)
- H1 (exact text)
- Primary USPs above fold
- Schema types used
- Review count/rating displayed
- Chat widget? Phone number prominence?

**Service page analysis:**
- How many service pages total?
- URL structure (pattern)
- Word count on key service pages
- FAQ sections present?
- Schema markup present?

**Location page analysis:**
- How many location/neighborhood pages?
- URL pattern
- Is content unique per page or templated?

**Blog analysis:**
- How many blog posts?
- Topics covered (look for gaps we can fill)
- Publish frequency

### 3. Keyword Positioning

For each competitor, identify via WebFetch their page titles/H1s:
- What keywords do they target in titles that we don't?
- What service pages do they have that we're missing?
- What locations do they cover that we don't have pages for?

### 4. Content Quality

For their top 3 service pages, rate (1–5):
- Word count: 1 (<300) | 2 (300–600) | 3 (600–900) | 4 (900–1,200) | 5 (1,200+)
- E-E-A-T signals: license mentioned? Year founded? Team photos?
- FAQ section: present and comprehensive?
- AI citability: answer-first format? Stats included?
- CTA strength: phone prominent? Multiple CTAs?

**Opportunity:** Any competitor scoring <3 on content quality = we can outrank with better content.

### 5. Backlink Profile

What can be estimated via visible links:
- Directory links (which directories do they appear in?)
- Local press mentions (search "[competitor name] houston site:houstonchronicle.com")
- Industry links (ACCA, Texas HVAC Association, BBB)
- Sponsorships or community links

### 6. Positioning & Messaging

- What is their primary headline / value proposition?
- What USPs do they lead with?
- Do they show prices?
- What guarantees do they offer?
- Brand personality (corporate/formal vs. local/friendly)

**Differentiation opportunities for 75 Degree AC:**
- If competitor doesn't show prices → we lead with transparent pricing
- If competitor is a national chain → we lead with "local Houston company since 2016"
- If competitor has slow review response → we highlight our review response commitment
- If competitor has sparse content → we build comprehensive, expert guides

---

## Competitive Gap Matrix

For each major signal, compare 75 Degree AC vs top 3 competitors:

| Signal | 75 Degree AC | Competitor 1 | Competitor 2 | Competitor 3 | Our Gap |
|--------|-------------|--------------|--------------|--------------|---------|
| Google Reviews | [X] | [X] | [X] | [X] | [+/-] |
| Avg Rating | [X] | [X] | [X] | [X] | [+/-] |
| GBP Photos | [X] | [X] | [X] | [X] | [+/-] |
| Service Pages | [X] | [X] | [X] | [X] | [+/-] |
| Location Pages | [X] | [X] | [X] | [X] | [+/-] |
| Blog Posts | [X] | [X] | [X] | [X] | [+/-] |
| Pricing Transparency | ✅/❌ | ✅/❌ | ✅/❌ | ✅/❌ | |
| Schema Markup | ✅/❌ | ✅/❌ | ✅/❌ | ✅/❌ | |
| FAQ Pages | ✅/❌ | ✅/❌ | ✅/❌ | ✅/❌ | |
| Local Pack Position | [X] | [X] | [X] | [X] | |

---

## Actionable Outputs

After analysis, generate:
1. **Top 5 Competitor Advantages to Neutralize** — what they do that we don't
2. **Top 5 Opportunities Where We Can Win** — our advantages, their weaknesses
3. **10 Keyword Gaps to Target** — keywords they rank for, we don't
4. **5 Content Ideas Inspired by Their Best Pages** — what works, improve it
5. **Link Sources We're Missing** — directories/links they have, we don't

---

## Output Files

Competitor profiles: `01-research/competitor-analysis-[date].md`
Keyword gap list: `01-research/competitor-keyword-gaps-[date].md`
Link gap list: `01-research/competitor-link-gaps-[date].md`
