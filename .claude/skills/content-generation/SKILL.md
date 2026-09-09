---
name: content-generation
description: >
  Content writing methodology for 75 Degree AC — 5-Point Human Test, E-E-A-T signal requirements,
  banned phrases, HVAC page templates, and AI detection prevention.
  Activates when writing website content, creating service pages, or drafting location pages.
version: 1.0.0
client: 75 Degree AC
---

# Content Generation — 75 Degree AC

Write full, publish-ready content for every page. Follow content briefs exactly. Output must read like a real Houston HVAC expert wrote it — someone who actually works in the business.

---

## CRITICAL: Read Before Writing

Before writing ANY content, internalize these rules completely. Content that fails any gate gets rewritten, not patched.

**Mandatory references — read once per session, refuse to write without them:**
- `01-research/competitors/top-players.md` — cluster card for this query type + cross-cluster synthesis
- `01-research/competitors/ai-citation-filter.md` — 12-point filter (gate 14), validated channels, competitor opening paragraphs (gate 16), page anatomies
- `07-landing-pages/briefs/[slug]-brief.md` — the brief is the authority; do not deviate

---

## The 5-Point Human Test (MANDATORY)

Every page must pass ALL 5 before publishing:

**1. Swap Test**: Replace "75 Degree AC" + "Houston" with a competitor's name + city. If the content still reads fine — it's too generic. Rewrite it.

**2. Read-Aloud Test**: Read the entire page aloud. Must sound like a knowledgeable Houston HVAC tech talking to a neighbor. Not a corporate brochure. Not a Wikipedia article.

**3. Specificity Test**: Count concrete Houston-specific details:
- Homepage: 8+ specific details
- Service pages: 10+ specific details
- Location pages: 12+ specific details
- Blog posts: 5+ specific details
- Specifics include: Houston neighborhoods, heat index facts, housing stock age, seasonal patterns, real price ranges, specific equipment names

**4. Pattern Test**: Zero of these patterns anywhere:
- Em dashes (—) — the #1 AI writing signature. Use commas, periods, or colons instead.
- Three or more consecutive sentences of similar length
- Generic H2 headings ("Our Services", "Why Choose Us", "About Us")
- Fact-free paragraphs (every paragraph needs at least one concrete detail)
- Banned phrases (see list below)

**5. Expert Test**: At least one insight per page that only someone who actually does HVAC work in Houston would know.

Examples of expert-level HVAC insights:
- "Most Houston AC calls in June are capacitor failures — not compressor failures. A capacitor replacement is $200-350, not $2,000+. The fear-to-reality gap is why we explain what we found before starting any work."
- "Houston's humidity means evaporator coils get dirty faster than most climates — annual coil cleaning isn't optional here, it's the difference between 75°F and 72°F at the same energy cost."
- "Heat pump systems are underused in Houston. They're perfect for our mild winters — efficient heating without a gas furnace. Most homeowners don't realize they likely already have one if their system is less than 10 years old."

---

## Citation Density Check (AI Citation Gate)

Before any service or location page is published, it must pass the Citation Density Check. AI systems extract citable passages based on density of specific, sourced, and quantified claims. Fluffy pages don't get cited.

**Per-page minimums:**

| Element | Minimum Count | Example |
|---|---|---|
| Specific numbers | 2+ | "2-hour response", "95% first-visit fix rate", "$150-$350 capacitor cost" |
| Sourced statistics | 1+ | "Houston averages 99 days per year above 90°F (NOAA)" |
| Expert-framed insights | 1+ | "Most Houston AC failures in June are capacitor issues, not compressor — a $200 fix vs $2,000 fear" |
| First-hand 75 Degree AC operational data | 1+ | "Our trucks carry parts for 95% of common AC failures, so most repairs are completed on the first visit" |

If a page does not meet these counts, do not publish — rewrite. Pages that hit these counts consistently win AI citations; pages that don't, are invisible.

---

## The 40–60 Word Citation Paragraph (placement spec — single highest-leverage AI element)

Every money page must have a 40–60 word direct-answer paragraph in a **plain `<p>`** immediately after the H1 — before the hero image, before any callout, before the trust strip. This is the single most-extracted on-page element across Google AIO, Perplexity, ChatGPT search, and voice assistants. It is NOT the same as Format Gate #5 (the 134-167w passage block in the first 30%) — they coexist; this one sits at the very top.

### Why it matters

- Google AI Overviews extract preferentially from the first `<p>` after `<h1>`
- Perplexity's passage retriever weights position-from-H1 heavily
- ChatGPT search retrieves passage-level, with H1-adjacent passages scoring highest
- Voice assistants (Siri, Alexa, Google Assistant) read this paragraph when Speakable schema selectors target it

### Required elements per page type

**Service page (e.g., `/ac-repair-houston-tx/`):** brand · exact-match primary keyword · service area scope · license number · phone.

**Service + location page (e.g., `/ac-repair-richmond-tx/`):** brand · exact-match primary keyword · city + state · ZIP triplet · dispatch location · license · 24/7 commitment · phone.

**Location hub (e.g., `/hvac-contractor-richmond-tx/`):** brand · category (HVAC contractor) · city + state · ZIP coverage · services offered · license · years in business · phone.

### Calibrated example (Richmond brief, 55 words)

> 75 Degree AC provides same-day AC repair across Richmond, TX (Fort Bend County), including ZIP codes 77406, 77407, and 77469. Our technicians are dispatched from our Richmond location at 20926 Bright Lake Bend Ct, 77407 — not from Houston. We hold Class A license TACLA72152E and offer 24/7 emergency service. Call (346) 681-2625.

### Five common mistakes (block publish if present)

1. Wrapped in `<blockquote>` — themes style it as a testimonial; extractors skip it.
2. Wrapped in a callout / accordion / image-overlay component — same problem, breaks `<p>`-after-`<h1>` adjacency.
3. Filler words eating the word budget ("At 75 Degree AC, we strive to deliver…") — banned phrases also trigger humanizer.
4. Missing the phone number, or hiding it behind a hover.
5. Placed below a hero image / banner — must be the first content node after `<h1>`.

### Operational integration

- The Elementor `hero_with_form` pattern's intro text widget is the canonical home for this paragraph. Do not split it into multiple widgets — one `text-editor` widget = one `<p>` tag.
- Speakable schema selector should target this paragraph by class or `#` ID.
- This block must pass humanizer (no em-dashes, no banned phrases — see banned list below).
- Richmond pages: the phone MUST be `(346) 681-2625`. Grep gate runs in the brief checklist.

---

## AI Format Gate (NEW — mandatory before save)

Citation density is necessary but not sufficient. Format multiplies citation chance: tables 2.5-4.2×, numbered lists 2.7×, FAQ 2.6×, schema deployed 2.5× (Princeton GEO study + 2026 follow-up research). Every page must hit the format gate below.

Full operational rules and table/list construction details: `.claude/skills/ai-visibility/references/ai-content-formatting.md`.

**The Format Gate (every page + blog post)**:

| # | Requirement | Citation Lift |
|---|---|---|
| 1 | ≥1 comparison table when any multi-attribute content exists (pricing, brands, specs, decoders, sizes) | 2.5–4.2× vs prose |
| 2 | ≥1 numbered list when any process / sequence / ranked content exists — paired with HowTo or ItemList schema | 2.7× |
| 3 | ≥1 bulleted list when parallel items exist (symptoms, ZIPs, brands, features) | 40–61% of AIOs use lists |
| 4 | Answer-first paragraph (40-75 words) under every H2 | Most-extracted unit |
| 5 | 134-167 word AI passage block in the first 30% of content (where 44.2% of citations come from) | Page-level citation target |
| 6 | All H2s are user questions under 10 words (from `02-question-mine.md`) | Maps to user prompts |
| 7 | Every section reads standalone (no pronouns referring back) — name entities explicitly | Required for passage extraction |
| 8 | ≥1 statistic per 300-500 words (Princeton +41%) | +41% AI visibility |
| 9 | ≥1 cited external authority per major section (Princeton +115%) | +115% for lower-ranked pages |
| 10 | ≥1 direct quotation per page (Princeton +28%) | +28% AI visibility |
| 11 | Visible "Last Updated: [Month Year]" + matching `dateModified` in schema | Perplexity 82% cite rate for <30d |
| 12 | FAQPage schema mirrors visible FAQ Q&A verbatim | 2.6× FAQ lift |
| 13 | Real semantic HTML — `<h2>`, `<ol>`, `<ul>`, `<table>` (not Elementor styled divs) | Required for AI extraction |
| 14 | **12-Point AI Citation Filter score ≥ 10/12** — verify against `01-research/competitors/ai-citation-filter.md` §1 every requirement: HVACBusiness schema · AggregateRating · Service schema · Person schema with sameAs to LinkedIn · license visible in body · founding year + foundingDate · direct-question H2s · FAQPage schema · ≥3 trust badges · dateModified+datePublished · ≥5 sameAs links · Houston-specific content | 38% median citation lift in 90 days (40-site study) |
| 15 | **Original Research / First-Hand Data block** — mandatory ≥1 proprietary datum (dispatch time by ZIP, repair-vs-replace ratio, parts-stocked %, common Houston failure mode statistics) with exact number + source. See "First-Hand Data Integration" section below. | 3.7× Perplexity citation multiplier · 67% of ChatGPT top citations come from first-hand data (Onely) |
| 16 | **Competitor Opening Paragraph Diff** — opening paragraph must be measurably different from top 3 competitor openings (see `ai-citation-filter.md` §10 for verbatim Abacus/Chill Brothers/Mission AC/Champion & Nash/Spring Branch openings to compare against). Must include ≥3 fact-points (founding year, license, review count) that AI engines extract. | Distinctness signal for entity recognition |
| 17 | **Richmond TX phone validation** — if page URL contains `richmond` (Richmond TX neighborhood/location), every phone reference must be `(346) 681-2625` — NEVER `(713) 598-2737`. The (713) phone is the Houston HQ only. Grep `(713)` in any Richmond page = block publish until fixed. | Brand-NAP consistency + GBP-pairing integrity |

If a page misses ANY of these 17 gates, do not save / publish — restructure the affected section. This gate runs BEFORE the 5-Point Human Test, BEFORE humanizer.

---

## Phase-Gated Generation Workflow (NEW — MANDATORY)

Every `/content-create` run executes 3 explicit phases in order. Phase N may not start until Phase N-1 outputs are complete.

### PHASE 1 — PLAN (before any prose)

1. Read the brief at `07-landing-pages/briefs/[slug]-brief.md`
2. Read the matching template at `07-landing-pages/templates/`:
   - Pattern A (service-only query) → `service-page-template.md`
   - Pattern B (service + city query) → `combo-page-template.md`
   - Pattern C (category + city query) → `location-page-template.md`
3. Read `business-voice.md` for tone + banned phrases + predicate diversity rules
4. List every section the template requires
5. Confirm every variable has a source (research pack, claims-registry, business-info, GBP data). For each missing variable: insert `{{NEEDS INPUT: source}}` placeholder. Never invent.
6. Confirm AggregateRating data is fresh (filtered to city for Pattern B/C)
7. Confirm Person schema data (Kenny Ho LinkedIn URL, credentials)
8. Output a one-paragraph PLAN summary BEFORE writing any prose

### PHASE 2 — WRITE (full draft)

Generate the full content following the matching template's section order EXACTLY. Each section must:
- Open with the question-style H2 (from `02-question-mine.md`)
- Have a 40-55 word extractive answer block as the FIRST paragraph after the H2
- Pass predicate diversity (see rule below)
- Pass salient triples (see rule below)
- Have ≥1 specific number OR named entity OR neighborhood reference

Word count per pattern:
- Pattern A: 1,500-2,500 words
- Pattern B: 2,000-3,000 words (highest)
- Pattern C: 1,500-2,500 words

### PHASE 3 — VALIDATE (before save)

Run all gates IN ORDER. Refuse to save until all pass:

1. **Section completeness:** every template section present?
2. **17-Point Format Gate:** all gates pass?
3. **Citation density:** ≥2 specific numbers, ≥1 sourced stat, ≥1 expert insight, ≥1 operational datum?
4. **Predicate diversity:** no verb repeats within 3 sentences? (see Predicate Diversity Rule below)
5. **Salient triples:** every claim is `[subject][predicate][verifiable object]`? (see Salient Triples Rule below)
6. **5-Point Human Test:** Swap · Read-aloud · Specificity · Pattern · Expert — all five pass?
7. **Banned phrases scan:** zero hits in `business-voice.md` banned list?
8. **Em dash scan:** zero em dashes (project-wide ban)?
9. **Phone number validation:** Richmond pages = `(346) 681-2625` only; all others = `(713) 598-2737`?
10. **Schema reference validation:** every `@id` reference resolves to a canonical entity in `entity-id-registry.md`?
11. **HVACBusiness, not HVACBusiness:** zero references to `HVACBusiness` anywhere in content or schema?

If any gate fails, return to Phase 2 for the failing section. Never patch past a failed gate.

---

## Predicate Diversity Rule (MANDATORY)

When describing what 75 Degree AC does, rotate active verbs. **No verb may repeat within 3 sentences.**

**Approved active verbs for HVAC work:**

| Domain | Verbs |
|---|---|
| Diagnostic | diagnose · troubleshoot · inspect · assess · evaluate · identify · pinpoint |
| Service | repair · service · maintain · clean · calibrate · test · verify · tune |
| Installation | install · replace · retrofit · upgrade · commission · swap · convert |
| Specific HVAC | charge (refrigerant) · seal (ducts) · cycle (equipment) · recover (refrigerant) · braze (lines) |
| Operational | dispatch · arrive · restore · document · invoice · schedule · stock |
| Customer-facing | explain · walk through · estimate · quote · book · confirm |
| Trust | carry (certifications) · hold (license) · operate (since 2016) · serve (city) |

**Anti-pattern check:**
- "We **provide** AC repair. We **provide** installation. We **provide** maintenance." → FAILS — same verb 3× in 3 sentences
- "We **repair, install, and maintain** AC systems across Houston" → PASSES — one sentence, three verbs

When generating prose, after writing each sentence, scan the previous 2 sentences. If the same verb appears, rewrite with an approved alternative from the table above.

---

## Salient Triples Rule (MANDATORY)

Every claim sentence must follow `[subject] [active predicate] [specific object]` with at least one verifiable element (number / named entity / location / certification / verifiable date).

### Reject pattern: weak adjective claims

| ❌ Weak (banned) | ✅ Strong (approved) |
|---|---|
| "We're reliable" | "75 Degree AC dispatches within 2 hours across Greater Houston" |
| "Quality service" | "Trucks carry parts for 95% of common AC failures; most repairs done first visit" |
| "Trusted in Houston" | "Houston-local since 2016, TACLA72152E licensed, 230+ Google reviews at 4.9 average" |
| "Expert technicians" | "EPA 608 Universal certified and NATE certified technicians" |
| "Fast response" | "Average 45-minute arrival in Fort Bend County" |
| "Years of experience" | "Operating since 2016 across Greater Houston and Fort Bend County" |
| "Top-rated company" | "4.9-star rating across 230 verified Google reviews as of [month] 2026" |

### The triple verification

For every claim sentence, ask:
1. **Who** (subject) — is it the named business / named technician / named city?
2. **What** (active predicate) — is it a measurable action verb?
3. **Where / what specific** (object) — is there at least one verifiable element?

If any answer is vague, rewrite until all three resolve to specific entities.

### Salience scoring (informal · for content review)

A salient triple has 3+ pieces of verifiable evidence:
- License number (TACLA72152E)
- Certification (EPA 608 Universal · NATE)
- Specific year (2016)
- Named neighborhood (Spring Branch · Memorial · Galleria)
- Specific number (95% · 2-hour · 230 reviews)
- Named brand serviced (Carrier · Trane · Lennox)

Each money page must have ≥10 salient triples (per the Specificity floor in `business-voice.md`).

### Format Decision Table (use when writing each section)

| Content Type | Format | Schema |
|---|---|---|
| 3+ items × 3+ attributes | Comparison table | — |
| Step-by-step process | Numbered list | HowTo |
| Ranked recommendation / "best N" / "signs of" | Numbered list | ItemList |
| Parallel items without sequence | Bulleted list | — |
| Direct answer to a question | Answer-first paragraph (40-75 words) | Speakable |
| Page-level summary | 134-167 word block, first 30% | Speakable |
| Q&A | FAQ block (8-10) | FAQPage |
| Blog wrapper | Article body | Article + Author |
| Money page wrapper | Service / HVACBusiness | LocalBusiness (HVACBusiness does NOT exist on schema.org — use HVACBusiness) |

### Table Construction (must follow)

- 3-5 columns max; 5-8 rows ideal (split if 20+)
- First column = entity / row label; last column = the most-asked value
- Units inside cells, not headers ("12-15 years" not "Years")
- Consistent format per column
- **Pre-table framing sentence** contains primary keyword
- **Post-table interpretation sentence** names the takeaway (AI uses it as the caption)

### Numbered List Construction (must follow)

- Use only when sequence or rank matters
- Visible count in H2 ("7 Signs..." not "Signs...")
- Each item: bold lead-in phrase + 1-3 sentence explanation
- Lead-in is the citable unit — must be self-contained
- Pair with HowTo (process) or ItemList (rank) schema

### Bulleted List Construction (must follow)

- 3-7 items ideal; 8+ → split or convert to table
- Each bullet self-contained
- Parallel grammatical structure (all start with same part of speech)

## First-Hand Data Integration (Required Step)

Every service page must include at least one piece of original 75 Degree AC operational data — something only this business knows. This is the single most powerful AI citation lever (67% of ChatGPT's top citations come from first-hand data per Onely 2025).

**Sources to mine:**
- Internal call logs — average dispatch time by zip, by season
- Repair frequency data — most common parts replaced by month
- Houston seasonal patterns — what fails in June vs September
- Customer testimonial patterns — what neighborhoods request what services
- Technician observations — common housing-stock issues by Houston era

**Examples of first-hand data woven into content:**

> "Our techs replaced 1,200+ capacitors during the 2024 Houston heat dome — when ambient temperatures cross 100°F for three consecutive days, capacitor failure rates roughly triple."

> "We track dispatch times by zip code. The average for 77007 (Heights) is 38 minutes; for 77024 (Memorial) it's 52 minutes; for Sugar Land it's 1 hour 12 minutes. We tell customers the actual number based on where they live, not a marketing number."

> "About 60% of homes we service in Houston neighborhoods built before 1985 still have original ductwork. Sealing that ductwork typically returns the cost in 18-24 months on Houston cooling bills."

If the writer cannot produce a real first-hand data point, ASK for one — do not invent. Pull from MEMORY.md, project files, or request the operational stat from the client.

## E-E-A-T Signal Requirements

**Minimum counts by page type:**

| Page Type | Experience | Expertise | Authority | Trust | Total |
|-----------|-----------|-----------|-----------|-------|-------|
| Homepage | 2 | 2 | 3 | 3 | 10 |
| Service page | 3 | 3 | 2 | 2 | 10 |
| Emergency page | 2 | 2 | 2 | 3 | 9 |
| Location page | 2 | 1 | 1 | 2 | 6 |
| Blog post | 1 | 3 | 1 | 1 | 6 |
| About page | 3 | 2 | 4 | 3 | 12 |

**What counts as a valid signal:**

- **Experience**: Real project example ("last August we serviced 14 homes in Katy in one day during the heat wave"), seasonal pattern observation, process description showing real-world execution
- **Expertise**: Why something happens not just what (explain the cause of AC failures), cost breakdown with context, comparison between service options (repair vs replace decision logic)
- **Authority**: TACLA license number, Google review count and rating, "serving Houston since 2016", review quote with attribution
- **Trust**: Transparent price range (not just "call for pricing"), what happens step-by-step after they call, free estimate guarantee explicitly stated, same-day availability confirmed

---

## Banned Phrases (Complete List)

**Never use these — they are instant AI detection red flags:**

Business intro phrases:
- "At 75 Degree AC, we are committed to..."
- "We pride ourselves on..."
- "We're passionate about..."
- "We treat every customer like family"
- "Your satisfaction is our priority"
- "We go above and beyond"

Hollow quality phrases:
- "quality service" / "exceptional service" / "superior service"
- "competitive prices" / "affordable rates"
- "comprehensive solution" / "cutting-edge" / "state-of-the-art"
- "world-class" / "best-in-class"
- "seamless experience"

Location description clichés:
- "Nestled in" / "Vibrant" / "Bustling" / "Thriving"
- "Heart of Houston"
- "Houston's diverse neighborhoods"

Sentence openers to ban:
- "Furthermore," / "Moreover," / "Additionally,"
- "In today's fast-paced world..."
- "As a homeowner, you know that..."
- "When it comes to..."
- "In the realm of..."
- "It's worth noting that..."
- "In conclusion," / "To summarize," / "As we've explored,"
- "Unlock the" / "Elevate your"

Em dashes — never. Replace with: a comma, a period, a colon, or parentheses.

FAQ answer openers to ban:
- "Great question!"
- "As mentioned above..."
- "Of course..." 
- Rephrasing the question back before answering

---

## HVAC Content Standards

### Opening Paragraph Rules

- NEVER open with the business name and credentials
- ALWAYS open with the reader's situation
- Good: "When your AC stops cooling on a 103°F Houston afternoon, you don't have time to read a sales pitch."
- Bad: "75 Degree AC is Houston's leading HVAC contractor, providing comprehensive air conditioning services..."
- Primary keyword must appear in the first 100 words (naturally, not forced)

### Service Page Content Structure

```
H1: [Service] in Houston, TX — 75 Degree AC
[Opening: 2-3 sentences addressing the specific problem. Primary keyword in first 100 words.]

## [What Causes [Problem] in Houston Homes]
[Explain the root cause. Houston-specific context. Show expertise.]

## How [Service] Works — Our Process
[Step-by-step. What the technician does. What equipment is used. What the customer sees.
Do NOT say "we'll diagnose and repair." Say exactly what happens.]

## [Houston-Specific Section — real local relevance]
[Why this specific problem is common in Houston. Local housing stock, humidity, extreme heat context.]

## What [Service] Costs in Houston
[Actual price ranges. What affects the price. Free estimate as CTA.
Do NOT hide all pricing — price transparency builds trust and drives calls.]

## Why Choose 75 Degree AC for [Service]
[3-4 specific differentiators — not "quality" but actual things:
"Most repairs completed on the first visit — we stock the 50 most common parts."
"TACLA licensed — not a handyman with a YouTube tutorial."]

## What Our Customers Say
[2-3 testimonials specific to this service — real quotes with neighborhood attribution]

## FAQ — [Service] in Houston
[Each FAQ question is an `### H3` heading (not bold-prefixed text — H3 is required for AI extraction + FAQPage schema text-matching). 8-10 questions total. Source mix is non-negotiable: ≥2 from Reddit threads, ≥2 from Quora titles, ≥2 from GSC PAA, ≥1 Houston-specific, ≥1 objection/trust-killer. Reddit/Quora questions surface trust-killer + voice-search phrasing that PAA doesn't. The brief's `02-question-mine.md` already labels every question by source — pull from there, never invent. Each answer 40-90 words, direct answer first, no "Great question!" preambles. Implement FAQPage schema with the same Q&A text verbatim. Markdown convention:

  ### Question text in sentence case?

  Answer paragraph.]

## Ready to Book Your [Service]?
[Final CTA. What happens after they call. Reassure about next steps. Phone number prominent.]
```

---

### Emergency Page Content Structure (Special)

This page converts at the highest rate. Keep it tight and fast-loading:

```
H1: Emergency AC Repair in Houston — Available 24/7: (713) 598-2737
[ONE sentence: "Your AC stops working in 100°F Houston heat — we'll have a technician at your door within 2 hours."]

## [Green badge: OPEN 24/7] [Red button: CALL NOW: (713) 598-2737]

## Signs You Have an AC Emergency
[Short bulleted list — 5-6 symptoms that need immediate attention]

## Why 75 Degree AC for Houston Emergencies
[3-4 bullet points ONLY — no long paragraphs above fold]
- 2-hour average response time
- TACLA licensed, fully insured
- Most repairs done in one visit — we carry parts
- Available nights, weekends, and holidays

## How Our Emergency Process Works
[Simple numbered steps: 1. Call → 2. Dispatch → 3. Diagnosis → 4. Fix]

## Areas We Serve for Emergency Calls
[List cities/neighborhoods with links to location pages]

## Emergency AC FAQ
[4-5 questions max — keep page focused]
```

---

### Blog Post Content Structure (NEW — for /insights blogs + all WP posts)

Blog posts follow the same AI Format Gate as money pages. The H2 set is question-shaped; every H2 contains an answer-first paragraph; tables and lists are mandatory wherever the content supports them.

```
H1: [Question or claim — primary keyword + Houston modifier]

[Last Updated: Month Year — visible timestamp; syncs to dateModified in Article schema]

[Intro: 2-4 sentence reader-situation hook. Primary keyword in first 100 words. NEVER "In this article..." or "Today we'll explore..."]

[134-167 word AI passage block — placed immediately after intro, in first 30% of content. Direct answer + supporting numbers + credential + CTA + phone.]

## [Question-shaped H2 #1 — under 10 words, from 02-question-mine.md]
[40-60 word answer-first paragraph — extractable as a citation]
[Supporting prose, or table, or list — chosen by format decision table]

## [Question-shaped H2 #2 — comparison-type content]
[40-60 word answer-first paragraph]
[Comparison table — 3+ items × 3+ attributes. Pre-table framing sentence. Post-table interpretation sentence.]

## [Question-shaped H2 #3 — process / step-by-step]
[40-60 word answer-first paragraph]
[Numbered list with bold lead-ins. Pair with HowTo schema.]

## [Question-shaped H2 #4 — signs / symptoms / list-of]
[40-60 word answer-first paragraph]
[Bulleted list of parallel items, OR numbered list with ItemList schema if ranked]

## [Question-shaped H2 #5 — cost / pricing / specs]
[40-60 word answer-first paragraph]
[Comparison table]

## Frequently Asked Questions
[Each question is an `### H3` heading, not bold-prefixed text. Required for AI extraction + FAQPage schema mirroring.

  ### Question text in sentence case?

  Answer paragraph — 40-90 words, direct answer first, no "Great question!" preamble.

8-10 total Q&As from `02-question-mine.md`. Mandatory source mix:
  ≥2 Reddit, ≥2 Quora, ≥2 PAA, ≥1 Houston-specific, ≥1 objection/trust-killer.
 FAQPage schema mirrors visible Q&A verbatim — question text in schema = H3 text.]

## When to Call 75 Degree AC
[CTA — phone (713) 598-2737, TACLA72152E license, response time, area served]
```

**Body word target**: 2,500-3,500 words for ranking-targeted blogs; 1,500-2,000 for awareness-tier posts.

**Required per blog post (the Format Gate, restated for blogs)**:
- ≥1 comparison table
- ≥1 numbered list (process or ranking, with HowTo or ItemList schema)
- ≥1 bulleted list (parallel items)
- ≥6 statistics with sources (for 2,500w post)
- ≥1 direct quotation
- ≥3 external authority citations (NWS, EPA, DOE, TDLR, manufacturer, etc.)
- ≥4 internal links to money pages with descriptive anchors
- ≥1 Houston-specific specificity per H2 (neighborhoods, ZIPs, climate data, code)
- Visible "Last Updated" + dateModified sync
- Article schema + FAQPage schema + Author schema + HowTo/ItemList where applicable

**Required schema for every blog post**:
- `Article` (with author, datePublished, dateModified)
- `Author` (Person with sameAs)
- `FAQPage` (visible-text-matching)
- `BreadcrumbList`
- `Speakable` (on answer-first paragraphs)
- `HowTo` (if any H2 is a numbered process)
- `ItemList` (if any H2 is a ranked list)

---

### Location Page Content Structure

```
H1: AC Repair in [City/Neighborhood], TX — 75 Degree AC
[Opening: address the reader as a [location] resident. Use a specific local detail in sentence 1.
NEVER open with "Welcome to our [city] page."]

## Serving [City] and Surrounding Areas
[Specific neighborhoods, zip codes, landmarks. Make it clear you know this area.
Real Houston example: "We cover the Heights — from 20th Street down to I-10, including Yale, Heights Blvd, and the Woodland Heights neighborhood."]

## Why [City] Homes and Businesses Need Regular HVAC Service
[Local specificity — housing stock age, neighborhood characteristics, any local AC challenges.
Real example: "Katy homes built in the 1980s-90s often have original ductwork showing its age. We see this regularly on calls west of the Grand Parkway."]

## Our HVAC Services in [City]
[All services offered — brief descriptions with links to service pages]

## What [City] Customers Say About Us
[Reviews or testimonials attributed to this specific area]

## FAQ for [City] Customers
[6 questions — mix of service questions AND location-specific: "How quickly can you come to [city]?"]

## Call 75 Degree AC in [City]: (713) 598-2737
[Simple CTA — response time, availability, free estimate]
```

---

## Output File Locations

- Service pages: `05-content/services/[service-name].md`
- Location pages: `05-content/locations/[location-name].md`
- Emergency page: `05-content/services/emergency-ac-repair-houston.md`
- Homepage: `05-content/homepage.md`
- Blog posts: `05-content/blog/[post-slug].md`
- About: `05-content/about.md`

---

## Content Quality Checklist

After writing each page, verify ALL before saving:

### SEO Fundamentals
- [ ] Primary keyword in H1
- [ ] Primary keyword in first 100 words
- [ ] Primary keyword in at least one H2
- [ ] Opening paragraph addresses reader's situation (not business credentials)
- [ ] FAQs start with the direct answer (no preamble), each 40-90 words
- [ ] FAQ source mix verified: ≥2 Reddit, ≥2 Quora, ≥2 PAA, ≥1 Houston-specific, ≥1 objection (sourced from `02-question-mine.md`)
- [ ] FAQPage schema deployed with text matching visible FAQ block exactly
- [ ] 3 CTAs present with (713) 598-2737
- [ ] 3-5 internal links with descriptive anchors
- [ ] Word count within target range (1,500+ for AI-citation pages)
- [ ] Visible "Last Updated: [Month Year]" timestamp on page
- [ ] dateModified in schema matches visible timestamp

### Citation Density Check (AI Citation Gate)
- [ ] 2+ specific numbers
- [ ] 1+ sourced statistic (named source)
- [ ] 1+ expert-framed insight
- [ ] 1+ first-hand 75 Degree AC operational data point
- [ ] Page added to `02-site-architecture/page-refresh-log.csv` with next refresh due date

### AI Format Gate (mandatory — see §AI Format Gate above) — ALL 17 gates
- [ ] ≥1 comparison table (any multi-attribute content)
- [ ] ≥1 numbered list (any process or ranking) + HowTo/ItemList schema
- [ ] ≥1 bulleted list (any parallel items)
- [ ] Answer-first paragraph (40-75 words) under every H2
- [ ] 134-167 word AI passage block in first 30% of content
- [ ] All H2s are user questions under 10 words from `02-question-mine.md`
- [ ] Every section reads standalone (no pronouns referring back)
- [ ] ≥1 statistic per 300-500 words of body content
- [ ] ≥1 cited external authority per major section
- [ ] ≥1 direct quotation
- [ ] Visible "Last Updated: Month Year" + matching `dateModified` in schema
- [ ] FAQPage schema mirrors visible FAQ Q&A verbatim
- [ ] Real semantic HTML (`<h2>`, `<ol>`, `<ul>`, `<table>` — not styled divs)
- [ ] **Gate 14 — 12-Point AI Citation Filter score ≥10/12** verified against `ai-citation-filter.md` §1
- [ ] **Gate 15 — Original Research / First-Hand Data block** present with ≥1 proprietary datum + exact number + source
- [ ] **Gate 16 — Competitor Opening Paragraph Diff** — opening measurably different from Abacus/Chill Brothers/Mission AC/Champion & Nash/Spring Branch (see `ai-citation-filter.md` §10)
- [ ] **Gate 17 — Richmond TX phone validation** — if URL contains `richmond`, every phone is `(346) 681-2625`, never `(713)`
- [ ] Schema deployed: Article OR Service/HVACBusiness + FAQPage + BreadcrumbList + Speakable + HowTo/ItemList where applicable + Person (Kenny Ho with LinkedIn sameAs) + AggregateRating + award (TACLA) where on service pages

### 5-Point Human Test
- [ ] Swap Test: content breaks if you swap business + city
- [ ] Read-Aloud Test: sounds like knowledgeable local, not corporate brochure
- [ ] Specificity Test: meets minimum concrete detail count
- [ ] Pattern Test: zero banned phrases, zero em dashes, no same-length sentence runs
- [ ] Expert Test: contains at least one insider insight

### E-E-A-T Signals
- [ ] Meets minimum signal counts for this page type

### AI Detection Prevention
- [ ] No em dashes anywhere
- [ ] Sentence length varies naturally
- [ ] No parallel triple structures ("We X, we Y, and we Z")
- [ ] No 3+ consecutive same-length sentences
- [ ] Concrete numbers instead of vague claims ("within 2 hours" not "fast response")
