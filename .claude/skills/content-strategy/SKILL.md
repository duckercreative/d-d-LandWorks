---
name: content-strategy
description: >
  Content creation and audit methodology for 75 Degree AC — E-E-A-T standards,
  AI citability scoring, content structure, and Houston HVAC content playbook.
  Activates when writing, auditing, or planning content for any 75 Degree AC page.
version: 1.0.0
client: 75 Degree AC
---

# Content Strategy — 75 Degree AC

## Content Philosophy

Every piece of content for 75 Degree AC must do three things:
1. **Rank** — target a specific keyword with clear search intent
2. **Convert** — get the reader to call (713) 598-2737
3. **Get cited** — structured so AI systems (ChatGPT, Perplexity, Google AIO) can extract and cite it

Generic content = invisible. Specific Houston HVAC content = rankings + calls.

---

## Input Files

- `business-info.md` — all USPs, pricing, team, history, certifications
- `services-list.md` — complete service hierarchy
- `service-areas.md` — service areas + zip codes
- `01-research/keywords-research.md` — keyword intent mapping
- `01-research/topical-map.md` — content cluster structure
- `02-site-architecture/page-tracker.csv` — page inventory
- `03-gsc/data/seo-solutions.md` — 12 priority pages needing expansion

---

## E-E-A-T Framework for HVAC Content

Google's Quality Rater Guidelines weight E-E-A-T heavily for "Your Money or Your Life" topics (YMYL). HVAC = YMYL (affects home safety, finances). Every page needs all 4 signals.

### Experience Signals
- Reference specific jobs: "We've repaired thousands of AC units across Houston"
- Seasonal context: "Houston summers regularly hit 100°F+ — we see surge calls every June"
- Neighborhood knowledge: "Homes in Montrose often have older ductwork from the 1970s"
- Before/after examples with real details

### Expertise Signals
- TACLA license number (from business-info.md — include on every service page)
- Technician training and certifications
- Brand-specific expertise (Carrier, Trane, Lennox certified)
- Technical accuracy (refrigerant types, SEER ratings, BTU sizing)

### Authority Signals
- "Serving Houston since 2016" — longevity
- Review count and rating
- Media mentions (if any)
- Industry association memberships (ACCA, Texas HVAC Association)

### Trust Signals
- Free estimates stated explicitly
- Financing options (mention lenders if possible)
- Insurance stated
- Service guarantee / warranty terms
- BBB rating (if applicable)
- Real phone number prominent: (713) 598-2737

---

## AI Citability Scoring Rubric (0–100)

Rate every key page on these 5 dimensions:

| Dimension | Weight | Score Criteria |
|-----------|--------|---------------|
| Answer Block Quality | 30% | 0=no direct answer, 50=partial answer, 100=opens with direct factual answer |
| Self-Containment | 25% | 0=requires context, 50=mostly self-contained, 100=fully standalone passage |
| Structural Readability | 20% | 0=walls of text, 50=some structure, 100=clean H1>H2>H3, lists, tables |
| Statistical Density | 15% | 0=no stats, 50=some data, 100=specific numbers throughout |
| Uniqueness | 10% | 0=generic, 50=some unique angle, 100=Houston-specific original data |

**Score interpretation:**
- 80–100: Highly AI-citable (included in AI Overviews likely)
- 60–79: Moderately citable (may appear in AI responses)
- 40–59: Needs improvement
- <40: Unlikely to be cited by AI

**Optimal AI passage format:**
- Length: 134–167 words
- Structure: Answer → Evidence → Context → How-to or Action
- Opens with a direct answer (not "In this article...")
- Contains at least 2 specific data points
- Self-contained: can be read without surrounding paragraphs

---

## GEO Citation Optimization (Princeton Framework)

The Princeton/Georgia Tech GEO paper (KDD 2024, arXiv:2311.09735) tested optimization strategies on a 10,000-query benchmark. **Three patterns consistently lifted AI citation rates 30–40%.** Every page targeting AI citation must use all three.

### The 3 Proven Tactics

**1. Cite Sources (in-text source citations)**
Add inline references to authoritative external sources within the answer.

> ❌ "AC capacitors fail more often in hot climates."
> ✅ "AC capacitors fail more often in hot climates — the U.S. Department of Energy reports capacitor lifespan drops by ~40% when ambient temperatures regularly exceed 95°F (DOE, 2023)."

**2. Quotation Addition (expert/authority quotes)**
Add a direct quote from a credible expert, manufacturer, or authoritative body.

> ✅ "Carrier's official guidance is clear: 'A SEER 14 system replaced with a SEER 18 system can reduce cooling costs by up to 28% in hot-humid climates.' That math holds for nearly every Houston home built before 2010."

**3. Statistics Addition (specific numbers)**
Embed specific data points, percentages, measurements — not vague qualifiers.

> ❌ "Houston summers are very hot."
> ✅ "Houston averages 99 days per year above 90°F; in 2023 the heat index hit 117°F on three separate days (NOAA Houston Climate Summary)."

### HVAC-Specific Source Pool (use these consistently)

- **Federal:** U.S. Department of Energy (energy.gov), EPA (epa.gov), ENERGY STAR (energystar.gov)
- **Climate:** NOAA Houston Climate Summary, NWS Houston/Galveston
- **Industry:** ACCA Manual J/S/D, AHRI Directory, ASHRAE
- **Manufacturer:** Carrier, Trane, Lennox, Goodman, Daikin published spec sheets
- **State:** Texas Department of Licensing and Regulation (TDLR) — TACLA license registry
- **Local:** Houston Chronicle, City of Houston Permits, CenterPoint Energy

### Citation Trigger Checklist (gate before publishing) — UNIFIED with the 12-point AI citation filter (2026-05-22)

This skill's 5 gates are a subset of the canonical 12-point AI citation filter defined in `01-research/competitors/ai-citation-filter.md` §1. The 12-point filter is the authority — these 5 are the content-strategy framing. **Every page targets ≥10/12 on the canonical filter** AND passes these 5 below as a content-strategy starting point:

- [ ] **Table present** — at least one HTML table with structured data (cost ranges, brand comparison, symptoms vs. likely cause). Tables get cited 2.5x more than equivalent prose (Onely 2025).
- [ ] **Credentialed expert framing** — page references a TACLA-licensed perspective, an EPA standard, or a manufacturer spec sheet
- [ ] **First-hand 75 Degree AC data point** — original operational data: "We complete 95% of repairs on the first visit", "Our average summer dispatch time in Houston is 2–4 hours", "Our techs replaced 1,200+ capacitors during the 2024 heat dome". **Mandatory** per `content-generation` gate #15 (Perplexity 3.7× citation multiplier).
- [ ] **Sourced statistic** — at least one specific number tied to an external authoritative source
- [ ] **Quantified claim** — at least one measurable assertion, not a qualitative statement (e.g., "reduces cooling cost by up to 28%" not "saves money")

**Then verify the full 12-point filter via `content-generation` gates 14-17:**
- Gate 14: 12-point filter score ≥10/12 (`ai-citation-filter.md` §1)
- Gate 15: Original Research / First-Hand Data block (this checklist item 3 expanded)
- Gate 16: Competitor Opening Paragraph Diff (against top 3 from `top-players.md`)
- Gate 17: Richmond TX phone validation ((346) check on Richmond pages)

---

## Top Players KB Consultation (MANDATORY — added 2026-05-22)

Before assigning ANY page to writing, the strategy lead reads:

1. **`01-research/competitors/top-players.md`** — cluster card for the relevant query + cross-cluster synthesis (lines 1008–1457) if AC-related
2. **`01-research/competitors/ai-citation-filter.md`** — 12-point filter + validated channels + page anatomies + competitor benchmark scores

These two files determine: (a) what gap to exploit, (b) what page anatomy to follow, (c) which validated AI citation channels to leverage, (d) the score target.

Pages assigned to writers without this consultation produce generic content. Compete on the 12-point filter, not on word count.

---

## Listicle Content Cluster Strategy (added 2026-05-22 — AI citation route)

Per validation research, listicles capture 21.9% of AI Mode citations (largest format). Top Houston HVAC competitors that AI engines already cite from internal listicles: Malek Service (`/ac-repair-houston-texas/`) and Chill Brothers (`/5-best-hvac-contractors-near-you-in-houston-tx/`).

**Strategic decision:** Build our own listicle hub at `/blog/best-ac-repair-houston/` per `topical-map` skill Cluster 9. **6 sub-listicles** in the cluster.

**🛑 Anti-self-promotion gate (mandatory):** Google's January 2026 enforcement causes 29-49% visibility drops on self-promotional listicles. Surviving listicle structure:
- Transparent methodology at the top (criteria + weighting + sources audited)
- Real competitor inclusion (Abacus, Chill Brothers, Mission AC, Champion & Nash, Spring Branch) with verifiable data
- Comparison table side-by-side specs
- 75 Degree AC entry — same data structure, not preferentially positioned
- External validation cited (Houston Chronicle, BBB, NATE, manufacturer dealer locators)
- Author byline + datePublished + dateModified
- Schema: `Article` + `BlogPosting` + `FAQPage` + `BreadcrumbList` + `ItemList`

Full listicle anatomy: `ai-citation-filter.md` §4c + §8.

---

## Service × Location Content Inheritance Rule (added 2026-05-22)

When building a service × location page (`/locations/[city]/[service]/`), content inheritance is **REGULATED** to avoid Google's March 2024 doorway-pages penalty (which killed 80% of templated location pages for a regional HVAC company, -63% organic traffic in 30 days):

**Inherit from parent service page (acceptable):**
- ✅ Pricing methodology
- ✅ Process description (with neighborhood-specific tweaks)
- ✅ Brand list serviced
- ✅ Schema patterns
- ✅ Internal link skeleton

**Do NOT inherit (must be unique per location):**
- ❌ Customer testimonials (sources from neighborhood-specific reviews)
- ❌ Photos (region-specific imagery required)
- ❌ FAQs (≥3 must be different from parent — sourced from neighborhood-specific question-mine queries)
- ❌ Opening paragraph (write from scratch with local context)
- ❌ Houston-specific content (housing stock age, climate micro-zones, ZIP coverage, common system brands all vary by neighborhood)

If you can't substantiate the 5 "do NOT inherit" items for a given location page, skip building it. 30 deep location pages > 300 thin ones.

---

## Manufacturer Authorization Path Decision Tree (added 2026-05-22)

When to claim a manufacturer authorization in content:

```
Q: Does 75 Degree AC currently hold this authorization?
   ├─ NO → Do not claim. Say "We service [brand] equipment" (factual).
   └─ YES, written confirmation from manufacturer → Claim it.
              ↓
   Q: Is the claim verifiable on the manufacturer's contractor locator?
   ├─ NO → Add to backlog: get the manufacturer to list us before claiming on website.
   └─ YES → Add to:
       - Hero copy or trust strip
       - `award` schema (per `schema-markup` skill)
       - Internal link footer (to manufacturer's dealer-locator page)
       - sameAs in entity-seo (to the manufacturer dealer page profile if separate)
```

**Priority pursuit order for 75 Degree AC:**
1. Carrier Factory Authorized Dealer (we list Carrier first in our brand row — natural fit)
2. Trane Comfort Specialist (#2 brand by Houston competitor adoption)
3. Lennox Premier Dealer (long-term)

Until first authorization: lean on TACLA72152E + 5.0★ + named tech as differentiation. Do NOT invent authorization claims.

### Why 1,500-word minimum for AI-cited pages

Onely 2025 research: long-form (2,000+ words) is cited 3x more than short posts; 82.5% of AI citations link to deeply nested topic-specific pages, not homepages. **Service pages targeting AI citation must hit 1,500 words minimum** (raised from 900). Generic informational pages should target 2,000+.

---

## Content Freshness Protocol

**76.4% of ChatGPT's most-cited pages were updated within the last 30 days** (Onely 2025). AI systems weight recency much more heavily than traditional Google search. Every page must be on a defined refresh schedule.

### Refresh Cadence by Page Type

| Page Type | Max Age Before Refresh | Reason |
|---|---|---|
| Pricing / cost pages | **30 days** | Prices change with parts, refrigerant, labor seasonality |
| Seasonal advice (pre-summer, pre-winter) | **30 days during season** | AI demands current relevance |
| Service pages | **90 days** | Schema dates + minor refinements |
| Location pages | **90 days** | Add seasonal local angle |
| Blog/guides | **120 days** | Update stats, replace dated examples |
| Evergreen reference | **180 days** | Light review only |

### What "Refresh" Means (Not Just dateModified)

A real refresh requires **at least one** of:
1. New first-hand data point (e.g., updated repair count, current dispatch time)
2. Updated statistic with newer source year
3. Added FAQ answering a recently asked customer question
4. Refreshed price range or service detail
5. New section addressing a current Houston seasonal context

Bumping the dateModified field without changing content is **not** a refresh. AI systems detect the discrepancy via crawl diff.

### Visible "Last Updated" Timestamp (Required)

Every service, location, blog, and pricing page must display a visible timestamp, both as readable text and in schema:

```html
<p class="last-updated">Last updated: April 2026 by 75 Degree AC team</p>
```

```json
"dateModified": "2026-04-15T10:00:00-05:00"
```

The HTML `<p>` is for readers (and AI systems that scan visible text). The schema field is the machine-readable mirror. They must match.

### Refresh Tracking

Maintain in `02-site-architecture/page-refresh-log.csv`:
- URL
- Last refreshed (date)
- Next due (date based on cadence above)
- Refresh type (data / stat / FAQ / price / context)

---

## Page Structure Templates

### Service Page (1,500–2,200 words for AI citation targeting; 900–1,400 acceptable for low-priority pages)

```
[Title Tag — max 60 chars]
[Meta Description — max 155 chars]
[H1 — keyword + city]

[INTRO — 120–150 words]
Keyword in first sentence. Mention: Houston, same-day, licensed, (713) 598-2737.
Include one AI-citable answer block.

[H2: Why Choose 75 Degree AC for [Service] — 150–200 words]
- Same-day service
- Licensed TACLA + fully insured
- All major brands: Carrier, Trane, Lennox, Goodman, Rheem, American Standard, Daikin
- Free estimates
- Financing available
- Serving Houston since 2016

[H2: Our [Service] Process — 150–200 words]
Step-by-step: call → dispatch → arrive → diagnose → repair → test → invoice

[H2: Signs You Need [Service] — 150 words]
List 5–7 specific symptoms (HVAC-specific)

[H2: [Service] Cost in Houston — 100–150 words]
Cost range, what affects price, free estimate CTA

[H2: Areas We Serve — 100 words]
Houston neighborhoods + suburbs + zip codes

[H2: Frequently Asked Questions — 8–10 Q&As]
Each Q&A: question as H3, answer **40-90 words** (AI extraction sweet spot per 2025-2026 research), answer-first format. Aligns with FAQPage schema 4.2x citation multiplier.

**FAQ source mix is non-negotiable** — pull from `01-research/page-research/[slug]/02-question-mine.md`. Required source distribution:
- ≥2 questions from Reddit threads (r/HVAC, r/HVACAdvice, r/HomeImprovement, r/Houston) — surface trust-killer / scam / quote-sanity concerns
- ≥2 questions from Quora (`site:quora.com [topic]` search) — natural-language voice phrasing → AIO + voice-search candidacy
- ≥2 questions from GSC PAA, prioritizing ones with 0/10 competitor coverage (per `04-competitor-matrix.md` Matrix B)
- ≥1 Houston-specific (permit, climate, neighborhood, CenterPoint, NOAA)
- ≥1 objection / trust-killer rebuttal (cost transparency, diagnostic fee, second-opinion)

Never invent FAQs. If a question isn't in `02-question-mine.md`, it doesn't go in the FAQ. The `services-air-conditioning-repair` pack (May 2026) is the reference example — 72 source questions, 10 selected for FAQ with full source diversity.

[CTA — 50 words]
Call (713) 598-2737 for [service]. Same-day appointments available.
Emergency? We're available 24/7 including nights, weekends, and holidays.
```

### Location Page (1,000–1,500 words)

```
[H1: [Service] in [City/Neighborhood], TX]

[INTRO — 120 words] — keyword + city, mention same-day, licensed, phone
[Why 75 Degree AC in [City] — 200 words] — local context, distance, response time
[Our Services in [City] — 200 words] — service list with local angle
[Service Area Map section — 100 words] — adjacent areas, zip codes
[FAQ — 6-8 Q&As local-specific] — "Do you serve [City]?" "How fast can you come?" Source mix still applies to location pages: ≥1 Reddit-sourced, ≥1 Quora-sourced, ≥2 from PAA, ≥2 [City]-specific. Pull from `02-question-mine.md` for that page.
[CTA with phone]
```

### Blog/Guide Page (1,500–2,500 words)

```
[H1: How to / What is / Why / When format]
[INTRO — 200 words] — hook, include expert credibility signal
[H2: Quick Answer — AI extraction block]
[H2–H6: Core content in logical sections]
[H2: FAQ — 6–10 questions] — same source-mix rule: ≥2 Reddit, ≥2 Quora, ≥2 PAA, ≥1 topic-specific from `02-question-mine.md`. Blog posts especially benefit from Quora-sourced questions because they're voice-search-ready phrasing.
[H2: When to Call a Professional] — always include, links to service page
[CTA — book a consultation / call for service]
```

---

## Houston HVAC Content Angle Library

Use these angles to make content specific and differentiated:

**Weather angles:**
- "Houston summers average 95°F+ with humidity that makes it feel like 105°F"
- "Houston's heat index regularly exceeds 100°F from June through September"
- "Unlike drier climates, Houston humidity accelerates AC wear"

**Seasonal urgency:**
- Summer (May–Sep): "Your AC failure is not an option — book maintenance before summer"
- Fall (Oct–Nov): "Heating season arrives fast in Houston — test your furnace before October"
- Spring (Mar–Apr): "Pre-summer AC tune-up fills up fast — book now"

**Homeowner empathy:**
- "A broken AC in Houston summer is not just uncomfortable — it's dangerous for seniors and children"
- "Most Houston homeowners run their AC 8–10 months a year — regular maintenance saves thousands"

**Trust differentiators:**
- "Unlike national chains, we're a local Houston company since 2016"
- "Our trucks are stocked for 95% of common repairs — no second trip"
- "We bill by the repair, not by the hour — you know the price before we start"

---

## Content Expansion Methodology (for the 12 thin pages)

From seo-solutions.md Issue 2, Group A — these pages need 800–1,200 words of real content:

**For each page:**
1. Read the current page via WebFetch
2. Identify what's there (current word count, current structure)
3. Apply the service page template
4. Add all 8 required sections
5. Include 5+ FAQ entries with voice-search-friendly questions
6. Write one AI-citable answer block (134–167 words)
7. Add internal links (3 minimum)
8. After writing: request GSC indexing

**Content priority order (by commercial value):**
1. /same-day-ac-repair/ — "same day ac repair" — high transactional intent
2. /hvac-service-and-repair/ — "hvac repair houston" — 867 impressions pos 31.9
3. /commercial-ac-maintenance-houston/ — commercial clients = high value
4. /residential-ac-maintenance-plan/ — recurring revenue angle
5. /central-ac-system-repair/ — high commercial intent
6. Others in sequence

---

## Banned Words / Phrases

Never use in 75 Degree AC content:
- "we are the best" / "industry-leading" / "best-in-class"
- "cutting-edge" / "state-of-the-art" / "innovative"
- "seamlessly" / "leverage" / "utilize"
- "comprehensive solutions" / "holistic approach"
- "contact us today" (use "call us" instead — more specific)
- "click here" (use descriptive anchor text)
- Generic openers: "In today's world..." / "Are you looking for..."

---

## Quality Checklist Before Publishing

**SEO + on-page**
- [ ] Title tag ≤60 chars, keyword in first 50 chars
- [ ] Meta description ≤155 chars, phone number included
- [ ] One H1 with primary keyword + city
- [ ] Keyword in first 100 words
- [ ] Word count: **1,500+ for AI-citation targets**, 900+ for low-priority pages
- [ ] (713) 598-2737 appears 3+ times
- [ ] Internal links: 3 minimum
- [ ] Service areas section with zip codes
- [ ] E-E-A-T signals in every section
- [ ] No banned phrases

**AI citation gate (Citation Trigger Checklist — all 5 required)**
- [ ] One AI-citable answer block (134–167 words) in first 30% of content
- [ ] At least one HTML table with structured data
- [ ] Credentialed expert framing (TACLA, EPA, manufacturer spec, ACCA standard)
- [ ] One first-hand 75 Degree AC operational data point
- [ ] One sourced statistic (specific number + named source)
- [ ] One quantified claim (measurable, not qualitative)

**Schema + freshness**
- [ ] 5+ FAQ entries, each answer ≤70 words
- [ ] FAQPage schema added
- [ ] Visible "Last Updated: [Month Year]" timestamp on page
- [ ] dateModified in schema matches the visible timestamp
- [ ] Page added to `page-refresh-log.csv` with next refresh due date

---

## Output Files

Content briefs: `07-landing-pages/briefs/[slug]-brief.md`
Written content: `07-landing-pages/content/[slug]-content.md`
AI answer blocks: `07-landing-pages/content/ai-answer-blocks.md`
