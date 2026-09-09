# Intent Classification Framework — Local Service Keywords

This reference defines how to classify search intent for any local-service business. The classifications map to page types and content priorities downstream (briefs, on-page SEO, internal linking). Project-agnostic: works for HVAC, landscaping, dental, legal, plumbing, etc.

---

## The Intent Spectrum

Search intent is a spectrum from pure awareness to immediate purchase. For local-service businesses, the spectrum maps to the buyer's journey:

```
AWARENESS → CONSIDERATION → COMPARISON → DECISION → POST-PURCHASE
  Info         Info+Problem      Commercial      Transact      Navigational
```

Every keyword belongs primarily to one stage. Multiple intents may be detectable — pick the dominant one for page assignment and note secondary intents in the CSV `notes` column.

---

## Intent Classification Rules

### Transactional Intent (`transactional`)

**Signals:**
- City / state / ZIP modifier + service name (e.g., "lawn care Denver CO", "emergency plumber 77407")
- "near me" modifier
- "company", "contractor", "service", "hire", "book", "schedule"
- "get a quote", "estimate", "free estimate", "free consultation"
- Direct service + location combinations
- Phone or call CTA implied ("24 hour", "call now", "same day")

**Page type**: Service pages, location pages, service × location combo pages, homepage

**Content priority**: Trust signals (license, insurance, reviews), CTAs, price range, process, contact info, schema (LocalBusiness, Service, AggregateRating)

**Example queries (illustrative across verticals):**
- "lawn care company Denver CO"
- "emergency plumber Houston near me"
- "dental cleaning San Diego appointment"
- "hvac contractor 77407"
- "best lawn mowing service near me"

---

### Commercial Investigation Intent (`commercial`)

**Signals:**
- "best", "top", "reviews", "rated"
- "how much does [service] cost"
- "[service] prices [city]"
- "worth it", "is it worth"
- "[service] vs [alternative]"
- "compare", "comparison"

**Page type**: Cost / pricing pages, comparison blog posts, listicle pages (e.g., "Best [service] in [city]"), reviews-hub pages

**Content priority**: Transparent pricing data (real $ ranges, not "call for quote"), side-by-side comparisons, decision frameworks, social proof, third-party validation

**Example queries:**
- "how much does lawn aeration cost in Denver"
- "best landscaping companies Denver reviews"
- "dental implants vs bridge cost"
- "ac repair cost houston"
- "hvac contractor vs handyman"

---

### Informational Intent (`informational`)

**Signals:**
- "how to", "what is", "why does", "when should", "how often"
- "guide", "tips", "ideas", "best time"
- "what causes", "how do I know if"
- Questions beginning with who / what / where / when / why / how

**Page type**: Blog posts, guides, informational cluster pages, FAQ pages

**Content priority**: Complete answer, depth, practical value, minimal CTA (soft conversion at end only — pushing hard converts informational searchers poorly)

**Example queries:**
- "how often should I water my lawn in Colorado"
- "what is core aeration and do I need it"
- "why is my AC blowing warm air"
- "best time to overseed in Denver"
- "how to clean a condensate drain line"

---

### Problem Awareness Intent (`problem`)

**Signals:**
- Problem descriptions ("my lawn is...", "grass keeps dying", "AC won't turn on")
- Symptom queries ("brown patches lawn", "water leaking under sink")
- Diagnostic terms ("lawn disease", "ac compressor noise")
- "fix", "repair", "help with", "troubleshoot"

**Page type**: Problem-solution blog posts, service pages with problem-framing (e.g., `/services/ac-blowing-warm-air/`)

**Content priority**: Diagnosis (what causes this), explanation of cause, solution path. These readers aren't ready to hire yet — content builds awareness and trust. Soft conversion only.

**Example queries:**
- "grass dying in patches Denver"
- "AC blowing warm air Houston"
- "toilet keeps running"
- "lawn not growing after seeding"
- "why does my yard flood when it rains"

---

### Local Intent (`local`)

**Signals:**
- City + neighborhood names (without explicit service intent verb)
- ZIP codes alone or with service
- "in [specific area]"
- Combination of service + very specific local modifier

**Page type**: Location pages, neighborhood pages, service × location combo pages

**Content priority**: Local specificity (landmarks, ZIP coverage, real photos), neighborhood knowledge, local trust signals, local schema (geo coordinates, areaServed Places)

**Example queries:**
- "hvac 77407"
- "landscaper Cherry Creek CO"
- "plumber Highlands Ranch"
- "dentist Aliana"
- "lawn mowing Stapleton Denver"

---

### Navigational Intent (`navigational`)

**Signals:**
- Brand name searches
- "[brand] + [service]"
- "[brand] reviews", "[brand] phone number", "[brand] address"
- Misspellings of the brand

**Page type**: Homepage, About page, Contact page, brand-specific landing pages

**Content priority**: Brand info, NAP, primary services overview, social proof at scale, easy contact paths

**Example queries:**
- "75 degree ac reviews"
- "tru green pricing"
- "[business name] phone"
- "[business name] near me"

---

## SERP Feature → Intent Mapping

Different intents correlate with different SERP features. Use this to choose content format:

| Intent | Common SERP Features | Winning Content Format |
|---|---|---|
| Transactional | Local pack, reviews, sitelinks, ads | Service / location page with LocalBusiness schema + reviews + clear CTAs |
| Commercial | PAA, comparison featured snippets, listicles, image pack | Comparison tables, real $ ranges, decision frameworks |
| Informational | Featured snippets (paragraph / list), PAA, video carousel | Q&A format, step-by-step lists, answer-first H2s |
| Problem | Featured snippets, PAA, video, image pack | Diagnostic article with symptom → cause → fix |
| Local | Map pack, local results, image pack | Location page with geo schema, real photos, named neighborhoods |
| Navigational | Knowledge panel, sitelinks, GBP | Homepage / About — strong branded entity signals + sameAs |

---

## Featured Snippet Format Match

When targeting a featured snippet, match the format to the query type:

**Paragraph snippets (most common — ~70% of all snippets):**
- Triggered by: "what is", "what does", definition queries, single-fact queries
- Format: Direct definition in 40-60 words immediately after H2
- The H2 should be the exact question (or very close)
- First sentence answers the question directly

**List snippets:**
- Triggered by: "how to", "steps to", "ways to", "types of", "[number] reasons"
- Format: Numbered list for sequential steps, bulleted for non-sequential
- 5-8 items ideal
- Each item 8-15 words; first words load-bear the meaning

**Table snippets:**
- Triggered by: comparison queries, cost queries with variables, "best X for Y" queries
- Format: Clean 2-4 column table
- Header row with clear labels
- 5-10 rows
- Markdown tables convert to HTML tables that Google extracts cleanly

**Definition snippets:**
- Triggered by: "[term] meaning", "[term] definition", technical terms
- Format: Bold the term in the first sentence of the definition
- Keep under 50 words for the extracted block

---

## Intent → CSV Value Mapping

When populating the `intent` field in `01-keyword-universe.csv` or `keywords-research.csv`, use these exact lowercase values:

- `transactional` — ready to hire
- `commercial` — comparing options
- `informational` — learning
- `problem` — problem-aware, diagnostic-seeking
- `local` — geographically qualified umbrella (without explicit verb)
- `navigational` — looking for specific business

Multiple intents may apply. Pick the dominant one for page assignment and note secondary intents in the `notes` field (e.g., `notes: "secondary intent: informational"`).

---

## Funnel Stage → Intent Mapping

For the `funnel_stage` CSV column:

| Funnel stage | Typical intents |
|---|---|
| `awareness` | informational, problem |
| `consideration` | informational, problem, commercial |
| `decision` | commercial, transactional |
| `retention` | navigational |

A single keyword can serve multiple stages. Pick the dominant stage based on the page type the keyword should land on.

---

## Keyword Cannibalization Prevention

Two pages should NEVER share the same primary keyword.

**Signs of cannibalization risk:**
- Two service pages targeting nearly identical keywords ("ac repair houston" + "houston ac repair")
- A service page and a blog post both targeting the same query
- Location page and combo page with same primary keyword
- Hub page and spoke page targeting the same head term

**Fix patterns:**
- **Service page gets the transactional keyword** (e.g., "ac repair houston")
- **Blog post gets the informational version** (e.g., "how to know if your ac needs repair houston")
- **Combo page gets the hyper-local version** (e.g., "ac repair Aliana 77407")
- **Hub page targets the umbrella head term** (e.g., "hvac contractor houston")
- **Spoke pages target service-specific long-tails** (e.g., "emergency ac repair", "ac installation")

**Detection method:**
- For every keyword, grep `03-gsc/data/queries-by-page.csv` (if available)
- Two or more URLs returning impressions for the same query = cannibalization
- Score each by `impressions × (1/position) × content_depth_weight`
- Designate the highest-scoring URL canonical; differentiate, redirect, or noindex the others

---

## Intent → Schema Type Mapping

| Intent | Primary @types |
|---|---|
| transactional (service) | `Service`, `Offer`, `LocalBusiness`/industry subtype, `AggregateRating` |
| transactional (location) | `LocalBusiness`/industry subtype with `areaServed`, `Place`, `PostalAddress`, `GeoCoordinates` |
| commercial (cost / listicle) | `Article` + `ItemList` (if listicle), `PriceSpecification`, `Review` |
| informational | `Article` or `BlogPosting`, `FAQPage`, `HowTo` (if step-by-step) |
| problem | `Article` + `FAQPage` for sub-questions, `MedicalCondition` / `Symptom` (if applicable) |
| local | `LocalBusiness` subtype, `Place`, `areaServed` array |
| navigational | `Organization`, `WebSite` with `potentialAction: SearchAction`, brand `sameAs` |

Use this mapping when handing keywords off to `/schema-generate` or when populating the brief's schema section.
