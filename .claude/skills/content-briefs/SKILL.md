---
name: content-briefs
description: >
  Content brief methodology for 75 Degree AC — detailed page-level content specifications
  covering H1, H2 structure, keywords, E-E-A-T requirements, FAQs, CTAs, and schema.
  Activates when creating content briefs, planning page content, or briefing writers.
version: 1.0.0
client: 75 Degree AC
---

# Content Briefs — 75 Degree AC

Write a detailed content brief for every page in the site architecture. Each brief is a complete, self-contained specification — anyone should be able to produce exactly the right content from it.

---

## Prerequisite — Deep Research Pack (REQUIRED)

**A brief is never written without a research pack.** The pack is the data; the brief is the synthesis. Mixing the two phases produces shallow briefs.

Before opening this skill, verify:

```
01-research/page-research/[slug]/00-research-pack.md          ← REQUIRED
01-research/page-research/[slug]/02-question-mine.md          ← REQUIRED (drives FAQ)
01-research/page-research/[slug]/03-entity-map.md             ← REQUIRED (drives entity profile + co-occurrence requirements)
01-research/page-research/[slug]/entity-inventory.csv         ← REQUIRED (validated per-page entity inventory from entity-extraction)
01-research/page-research/[slug]/04-competitor-matrix.md      ← REQUIRED (drives heading map + 12-point filter scoring per Phase 5b)
01-research/page-research/[slug]/05-intent-triangulation.md   ← REQUIRED (drives trust-killers)
01-research/page-research/[slug]/06-ai-citation-audit.md      ← REQUIRED (drives validated channel strategy)
01-research/page-research/[slug]/07-houston-authority.md      ← REQUIRED (drives citations)
01-research/page-research/[slug]/08-gap-analysis.md           ← REQUIRED (drives unique angle + Flag A/B/C decisions)
01-research/entities-mapping.csv                              ← REQUIRED (cross-page entity assignment + salience targets)
01-research/entity-id-registry.md                             ← REQUIRED (canonical `@id` values used in schema section)
```

**Entity validation gate:** every entity name appearing in H1, H2, H3, or schema field of the brief must have a `VALIDATED` / `VALIDATED_NO_KG` / `VALIDATED_LOCAL` status in the inventory. If validation hasn't run, invoke `entity-validate` first. Briefs that specify schema with unvalidated entity references break downstream `/schema-generate`.

Also read the canonical reference once per session:
```
01-research/competitors/top-players.md                        ← cluster card + cross-cluster synthesis
01-research/competitors/ai-citation-filter.md                 ← 12-point filter + validated channels + benchmarks
```

If the pack is missing or older than 90 days, run `/deep-research [slug]` first. See `.claude/skills/deep-research/SKILL.md`.

The downstream `/content-create` command also refuses to run without the brief. The pipeline is:
```
/deep-research → /content-brief (this skill) → /content-create
```

---

## Brief Quality Standard

A brief is only complete when zero ambiguity remains.

**The five tests for a complete brief:**
1. A writer can produce the correct H1 without guessing
2. A writer knows exactly what every H2 section must cover
3. A writer knows what makes this page different from every competitor page
4. A writer knows which specific FAQs to write (from PAA research, not generic)
5. A writer knows which Houston-specific details and neighborhoods to include

---

## 3-Pattern Decision Matrix (pick BEFORE writing the brief)

> **NEW (2026-05-25):** Each pattern maps to a canonical template in `07-landing-pages/templates/`. The template defines section ORDER and required structure. The brief specifies the CONTENT to drop into each section. **Brief + Template = complete writer instruction.**
>
> - Pattern A → [service-page-template.md](../../07-landing-pages/templates/service-page-template.md)
> - Pattern B → [combo-page-template.md](../../07-landing-pages/templates/combo-page-template.md) — highest CVR
> - Pattern C → [location-page-template.md](../../07-landing-pages/templates/location-page-template.md) — anti-doorway gate enforced

Every page is one of three patterns. The brief structure depends on which one. Pick by query shape:

| Query shape | Example | Pattern | URL form (flat = canonical) |
|---|---|---|---|
| Service term only, no location | `ac repair`, `emergency ac repair`, `ac installation cost` | **A — Service hub** | `/services/[service]/` (existing hierarchical) OR `/[service]-houston-tx/` (flat — preferred for new pages) |
| Service term AND city/ZIP | `ac repair richmond tx`, `emergency ac repair katy tx` | **B — Service + Location** | `/[service]-[city]-tx/` (flat — canonical) |
| Category term + city, no specific service | `hvac contractor richmond tx`, `hvac company near me` | **C — Location hub** | `/hvac-contractor-[city]-tx/` (flat — canonical) |

**Rule of thumb:** verb-noun (service) + city/ZIP → Pattern B. Service only → Pattern A. Category + city → Pattern C.

**What changes per pattern:**

| Element | Pattern A (Service) | Pattern B (Service+Loc) | Pattern C (Location) |
|---|---|---|---|
| Word count target | 1,500–2,500 | 2,000–3,000 | 1,500–2,500 |
| Schema primary | `Service` | `Service` + `HVACBusiness` | `HVACBusiness` + `OfferCatalog` |
| Required Reviews count | optional | ≥3 with neighborhood attribution | 3–5 with neighborhood attribution |
| `AggregateRating` | optional | optional (only if Richmond-specific) | **required** |
| Conversion lean | content depth | conversion-first (5+ CTAs, sticky phone) | trust + map + reviews |
| Internal linking role | hub → all Pattern B spokes for this service | spoke → both Pattern A hub AND Pattern C hub + 2 laterals | hub → all Pattern B spokes for this city |

Schema details: `.claude/skills/schema-markup/SKILL.md`. Internal-link rules: `.claude/skills/internal-linking/SKILL.md`. URL convention details: `02-site-architecture/site-architecture.md`. Quick reference: `02-site-architecture/page-patterns/page-patterns.md`.

---

## Brief Order

Write briefs in priority order:
- Priority 1 pages first (Emergency, AC Repair, Homepage)
- Then Priority 2, then Priority 3
- Service hubs before sub-pages; location hubs before individual location pages

---

## Output: `05-content/content-briefs.md`

One document with all briefs separated by clear dividers.

---

## Complete Brief Template

```
---
## BRIEF: [Page Title] — [URL]
**Priority**: [1/2/3] | **Page Type**: [type] | **Word Count**: [X–X words]
---
```

---

**Page**: [URL]
**Page Type**: [homepage / service / location / blog]
**Pattern**: [A / B / C] · **Template**: [link to corresponding template in 07-landing-pages/templates/]
**Priority**: [1/2/3]
**Word Count Target**: [Pattern A: 1,500-2,500 · Pattern B: 2,000-3,000 · Pattern C: 1,500-2,500]
**Funnel Stage**: [TOFU / MOFU / BOFU]

---

**Keyword Targets**

- **Primary Keyword**: [exact keyword — drives the H1]
- **Secondary Keywords** (weave naturally, not stuffed): [2-4 keywords]
- **Semantic Terms** (must appear at least once): [5-8 terms]
- **Houston Entities to Mention**: [Houston neighborhoods, landmarks, climate context]
- **HVAC Entities to Mention**: [specific brands, equipment types, certifications]
- **AIO Target Queries** (from `06-ai-citation-audit.md`): [queries that trigger AI Overviews + competitor domains currently cited]

---

**Intent & Audience**

- **Search Intent**: [transactional / commercial / informational / local]
- **Funnel Stage**: [TOFU = build authority · MOFU = comparison + trust · BOFU = ready to buy]
- **Primary Reader**: [which ICP — Emergency Emily? Planned Pete? Replacement Rita?]
- **Real-life scenarios** (situations, not keywords — pull from review entity extraction):
  1. [e.g., "AC died at 9pm with kids home and outdoor temp still 95°F"]
  2. [e.g., "First-time homebuyer in Cypress, AC inspection failed at closing"]
  3. [e.g., "Senior on fixed income in Spring Branch, system 15+ years old"]
- **Their State of Mind**: [what triggered the search? What are they feeling? What do they already know?]
- **What They Need to Believe Before Calling**:
  1. [e.g., "75 Degree AC will actually answer and come TODAY — not next week"]
  2. [e.g., "The price will be transparent — no surprise charges after the job"]
  3. [e.g., "The technician is licensed and won't damage my system further"]

---

**Voice & Angle**

- **Writing Voice**: [e.g., "Experienced Houston HVAC technician explaining to a homeowner — direct, confident, no fluff"]
- **Required Houston Specifics** (minimum 3):
  1. [e.g., "Houston humidity accelerates AC coil deterioration — mention this"]
  2. [e.g., "Heat index regularly above 100°F June-September — real urgency context"]
  3. [e.g., "Most Houston homes built in 1980s-2000s — common equipment ages mentioned"]
- **Insider Detail** (only a real HVAC tech would know):
  [e.g., "Most Houston AC failures are capacitors — $200-350 repair that homeowners fear is $3,000. Naming this builds instant trust."]

---

**E-E-A-T Requirements**

Minimum signals for this page:
- **Experience signals** ([count]): [e.g., "Real repair scenario from Houston in summer heat", "Process description showing how the job is actually done"]
- **Expertise signals** ([count]): [e.g., "Methodology explanation with WHY, not just WHAT", "Cost transparency with real Houston price ranges"]
- **Authority signals** ([count]): [e.g., "TACLA license number", "Google review count and rating", "Years serving Houston since 2016"]
- **Trust signals** ([count]): [e.g., "Transparent pricing ranges", "What happens after you call — step by step", "Free estimate guarantee"]

---

**AI Citation Target**

- **40–60 Word Citation Paragraph (after H1, plain `<p>`)**: **REQUIRED on every page.** Specify the exact words. Must hit all required elements for the page's pattern (A/B/C — see `content-generation/SKILL.md` "The 40-60 Word Citation Paragraph" section for the per-pattern element list). The Elementor `hero_with_form` text widget is the canonical home — one `<p>`, no blockquote, no callout, no image above it.
- **Featured Snippet Format**: [paragraph / list / table / none]
- **134-167 Word AI Passage Block**: [Yes — required for every page; specify where it lives, default = right after the opening paragraph, in the first 30% of content where 44.2% of LLM citations come from. Format per `.claude/skills/ai-visibility/references/ai-citability.md`.]
- **PAA Target**: [which specific PAA question is the best candidate for the PAA box?]
- **AIO Defensibility**: [is the page in current AI Overview results for the primary keyword? If not, what's missing? (Phase 7 of research pack.)]

---

**Visible E-E-A-T Byline (mandatory — block publish if missing)**

Every money page must show a Reviewed-by line + Last-updated date visible in the HTML body (not just `dateModified` in schema). This is the single largest GEO weakness across the current 75degreeac.com pages — none currently carry it. AI engines (Perplexity, ChatGPT, Copilot) weight visible author signals heavily for citation decisions; controlled-study lift = 30–50% in this category.

- **Reviewed-by line** (place directly under hero, above the citation paragraph): `Reviewed by [Owner Name], Texas Master HVAC Contractor, License TACLA72152E. 75 Degree AC has served [City/Region] since 2016.`
- **Last-updated date** (visible, plain text, near top of page): `Last updated: [Month DD, YYYY]`
- **Person schema** (Kenny Ho — see `schema-markup/SKILL.md` Person section, lines 408–449): `hasCredential` + `sameAs` to LinkedIn + Facebook required. Link from `Service` schema `provider` field to this Person's `@id`.
- **About-page link**: the reviewer's name in the byline links to `/about-us/[owner-slug]/`.

For Richmond pages: the byline still references the parent business (`75 Degree AC has served Richmond, TX since [year]`) but every visible phone reference stays `(346) 681-2625`.

---

**Top Players Benchmark** (mandatory — pulled from `04-competitor-matrix.md` Phase 5b + `ai-citation-filter.md` §9)

State the 12-point AI citation filter scores of the top 3 competitors for this query and our target:

| Rank | Competitor | 12-point score | Strongest filter points | Weakest filter points (= our wedge) |
|---|---|---:|---|---|
| 1 | [URL] | X/12 | [e.g., schema + license + Houston-content] | [e.g., no Person, no FAQ, no dateModified] |
| 2 | [URL] | X/12 | ... | ... |
| 3 | [URL] | X/12 | ... | ... |
| target | **75 Degree AC** | **≥10/12** | (must specify) | (must specify how every gap will be closed) |

If top 3 average is 10+: brief must include the **niche-differentiator strategy** (Houston-specific original data + manufacturer authorization + named-tech depth) — schema parity alone won't move us.

---

**12-Point AI Citation Filter Target** (mandatory)

The page MUST be designed to hit ≥10/12 on the filter in `ai-citation-filter.md` §1. Specify HOW each point is satisfied:

| # | Filter point | How this page satisfies it |
|---|---|---|
| 1 | HVACBusiness/Plumber schema | Schema spec below — type `HVACBusiness` confirmed |
| 2 | AggregateRating with rating + reviewCount | "5.0 ★ across 230+ Google reviews" in body + schema |
| 3 | Service schema with areaServed | Service schema in spec below, areaServed includes Houston + 21 neighborhoods |
| 4 | Person schema with sameAs to LinkedIn | Kenny Ho Person block at end of body + Person schema in spec below |
| 5 | License visible in HTML body | "TACLA72152E" appears in trust strip + footer + AI extraction block |
| 6 | Founding year + foundingDate | "Houston-local since 2016" appears in opening + foundingDate in schema |
| 7 | Direct-question H2s | All H2s are user questions under 10 words (per Content Structure section below) |
| 8 | FAQPage schema attached | Spec'd in Schema Requirements |
| 9 | ≥3 verifiable trust badges visible | Trust strip spec: [list 3+ badges] |
| 10 | dateModified + datePublished visible/in schema | "Last Updated: [Month Year]" below H1 + both fields in schema |
| 11 | sameAs links to ≥5 platforms | GBP + BBB + Yelp + Facebook + LinkedIn + Wikidata listed in Schema Requirements |
| 12 | Houston-specific content | Required Houston Specifics section minimum 3 items |

---

**Brand / Manufacturer Authorization Claim** (mandatory field)

State which manufacturer authorization(s) the page can credibly claim:
- **Current authorizations** (as of brief date): [list — e.g., "Carrier Factory Authorized Dealer — pending application Aug 2026" or "none yet"]
- **Page positioning**: [e.g., "We list 7 brands but claim no authorization until Carrier program approves"]
- **If install/replacement page**: pursuing Carrier Factory Authorized Dealer is high-priority — note status here and adjust hero copy accordingly

If no authorization is claimable, the page leans on: tenure + license + named tech + Houston-specific depth. **Do not invent authorization claims.**

---

**Phone-in-Title Pattern** (mandatory field)

State whether the title tag includes the phone number:
- **Title tag**: `[Service] Houston (713) 598-2737 | 75 Degree AC` (validated 2026: phone-in-title is a high-CTR + lead-gen pattern for local services — see `on-page-seo` skill)
- **For Richmond TX page**: phone MUST be `(346) 681-2625`, never `(713) 598-2737`
- **Exception**: for blog/informational content, phone-in-title is optional (use brand + topic + year format instead)

---

**License-Visible Placement** (mandatory field)

State where `TACLA72152E` appears as visible HTML body text (not just schema):
- [ ] Trust strip above the fold
- [ ] AI extraction block (134-167w passage)
- [ ] Footer
- [ ] Schema `identifier` field

Minimum 3 of the 4 placements per page.

---

**Listicle vs Operational Decision** (mandatory if Flag A surfaced in `08-gap-analysis.md`)

If `08-gap-analysis.md` flagged the SERP as listicle-dominated (≥6/10 top results are ranking listicles):
- **This brief is for**: [service page / listicle / both]
- **If service page only**: explicitly state why the listicle isn't ALSO being produced (e.g., already in `/blog/best-ac-repair-houston/`)
- **If listicle**: this brief follows the listicle anatomy in `ai-citation-filter.md` §4c — **transparent-methodology gate is non-negotiable**. The listicle MUST include real competitor analysis (Abacus, Chill Brothers, Mission AC, etc.) with verifiable data per company, comparison table, and external validation sources. Google's January 2026 enforcement causes 29–49% visibility drops on self-promotional listicles.

---

**Original Research / Proprietary Data Block** (mandatory field)

Specify the first-party data this page publishes (Perplexity 3.7× citation multiplier per validation research):

Minimum 1 of:
- [ ] Average dispatch time by Houston ZIP
- [ ] Repair-vs-replace ratio (our last 12 months)
- [ ] Parts-stocked-on-truck % (our 6 most common parts)
- [ ] Average diagnostic-to-quote turnaround
- [ ] Common Houston-specific failure mode statistics (e.g., "of 1,200 AC repair calls in summer 2025, 38% were capacitors")
- [ ] Per-ZIP response-time histogram
- [ ] Repair-call frequency by month of year (Houston seasonal pattern)

For each datum: specify the exact number, the data source (our dispatch records / CallRail / job tickets), and where in the page it appears (heading + sentence draft).

---

**Anti-Doorway Gate** (MANDATORY for any location/neighborhood page — refuse to complete brief if not satisfied)

Per Google's March 2024 update (which killed 80% of templated location pages for a regional HVAC company) and `ai-citation-filter.md` §7, every location page MUST satisfy ALL 6:

- [ ] **Unique neighborhood testimonials** — at least 2 real customer quotes from this specific neighborhood (not stock; not same as parent service page). Source: GBP reviews mentioning the neighborhood, or new SMS-solicited reviews.
- [ ] **Region-specific photos** — at least 1 photo with recognizable local context (landmark visible in background, completed job at a neighborhood address, technician at a recognizable corner).
- [ ] **Neighborhood-specific FAQs** — at least 3 FAQs different from parent service-page FAQs. Sourced from Phase 3 question mine filtered to neighborhood-specific phrasing.
- [ ] **Unique opening paragraph** — written from scratch, not a templated swap of city name into parent page intro.
- [ ] **Local-specific content** — minimum 3 of: housing-stock age for the neighborhood, climate micro-zone (inner-loop vs suburb), common system brands serviced, ZIP coverage map, drive-time-to-this-neighborhood from our HQ, neighborhood association (HOA) context.
- [ ] **Adjacent neighborhood internal links** — link to 3-5 adjacent neighborhood pages (not just parent service hub).

**If all 6 can't be satisfied, do not ship the page.** Better to have 30 deep location pages than 300 thin ones.

---

**Content Structure**

- **H1**: [exact text — must include primary keyword + Houston modifier]
- **Last Updated Timestamp**: visible "Last Updated: [Month Year]" below H1, synced to `dateModified` in schema
- **Opening Paragraph** (first 100-150 words): [address the reader's specific situation. Primary keyword in first 100 words. Key USP. No "At 75 Degree AC, we are committed to..."]
- **134-167 Word AI Passage Block**: placed immediately after opening paragraph (first 30% of content). Direct answer + supporting detail + credential + CTA + phone. See `ai-citability.md`.
- **H2 Sections** (in order — **every H2 is a user question under 10 words from `02-question-mine.md`**):

| # | H2 (question form) | Format | Schema Unlock | Required Specifics |
|---|---|---|---|---|
| 1 | [exact H2 text] | answer-first → table | Speakable on answer | [40-60w answer + 3-col × 5-row table; columns + rows specified below] |
| 2 | [exact H2 text] | answer-first → numbered list | Speakable + HowTo | [6-step process; each step bold lead-in + 2 sentences] |
| 3 | [exact H2 text] | answer-first → bulleted list | Speakable | [5-7 parallel items; specify category] |
| 4 | [exact H2 text] | answer-first → comparison table | Speakable | [pricing table by tonnage / brand / tier — columns + rows below] |
| 5 | **FAQ** | Q&A block | FAQPage | [8-10 Q&A; see FAQ section below for exact list] |

[minimum 4 content H2s + FAQ for service pages; minimum 6 content H2s + FAQ for blog posts]

**Per-H2 format detail (specify each):**

For H2 #1 — [H2 text]:
- Answer-first paragraph: [40-75 word target; specific entities to name]
- If table: [columns proposed, rows proposed, units, pre-table framing sentence draft, post-table interpretation sentence draft]
- If numbered list: [item count, sequence-dependent (process) or rank-dependent (best-of), bold lead-in phrasing convention]
- If bulleted list: [item count, parallel grammatical structure]
- Specific statistics required: [list each stat + source]
- Houston-specific anchors: [neighborhoods, ZIPs, climate data, code references]

[Repeat for each H2.]

**Format Minimums (gate — every page must hit all four):**
- ≥1 comparison table (any multi-attribute content)
- ≥1 numbered list (any process or ranking — pair with HowTo or ItemList schema)
- ≥1 bulleted list (any parallel items)
- 134-167 word AI passage block in first 30% of content

These come from the Content Format Plan in `00-research-pack.md` Phase 10.7. If the research pack didn't produce a Format Plan, re-run deep research.

---

**Unique Angle**

[The one thing this page says that no competitor Houston HVAC page says. Not "we're the best" but something specific:
e.g., "The only Houston AC company that tells you the three most common repairs your unit needs BEFORE sending a tech — so you know the price before anyone shows up."]

This angle must appear in:
- Opening paragraph (introduced early)
- One dedicated H2 section
- CTA copy

---

**FAQ Section** (8-10 questions from PAA + Reddit + Quora research)

Every question must be:
- Sourced from `02-question-mine.md` (PAA / Reddit / Quora — NEVER invented by the brief author)
- Answered in 3-5 sentences starting with the direct answer (40-90 words — citation-ready)
- Not repeated from any other page on the site

**Mandatory source mix (non-negotiable):**
- **At least 2 questions sourced from Reddit threads** (r/HVAC, r/HVACAdvice, r/HomeImprovement, r/Houston). Reddit questions surface trust/scam/quote-sanity concerns PAA doesn't.
- **At least 2 questions sourced from Quora titles** (`site:quora.com [topic]` search). Quora question phrasing is closer to natural-language voice queries → AIO + voice-search candidacy.
- **At least 2 questions from GSC PAA** that 0/10 competitors answer (the "moonshot" gaps from `04-competitor-matrix.md` Matrix B).
- **At least 1 Houston-specific question** (permit, climate, neighborhood, CenterPoint).
- **At least 1 objection / trust-killer question** (cost transparency, diagnostic fee, second-opinion).

| # | Question | Source (PAA / Reddit / Quora) | Answer (first sentence = direct answer) |
|---|----------|---|----------------------------------------|
| 1 | [Question — exact wording from source] | [Source + URL or thread ref] | [Direct answer first] |
| 2 | ... | ... | ... |

**Why this matters**: The `services-air-conditioning-repair` pack (May 2026) found that 4 GSC PAAs ("How long does AC repair take?", "Do you charge for AC diagnostic?", "Can I repair my AC myself?", "How long does an AC last?") have 0/10 competitor coverage — these came from Reddit + Quora threads, not Google's PAA box alone. Every brief follows this question-source diversification rule.

---

**Internal Links**

| Direction | Target URL | Anchor Text | Placement |
|-----------|------------|-------------|-----------|
| OUT | /emergency-ac-repair-houston/ | "24/7 emergency AC repair Houston" | body-late or after services section |
| OUT | /contact/ | "get your free estimate today" | body-late CTA |
| OUT | [related service] | [descriptive anchor] | body-mid |
| IN (from) | /ac-repair-houston-tx/ (if sub-page) | [descriptive anchor] | — |
| IN (from) | Homepage | [anchor] | — |

No "click here" or "learn more" anchors.

---

**Schema Requirements**

- **Type**: [Service / HVACBusiness / Article / FAQPage]
- **Required fields**: [name, description, areaServed, provider, telephone]
- **FAQPage Schema**: Yes — FAQ answers in schema must match visible FAQ content exactly
- **BreadcrumbList**: Yes (all pages except homepage)
- **AggregateRating**: Add to service pages once reviews are established

---

**CTA Requirements**

| Placement | CTA Text | Link |
|-----------|----------|------|
| Above fold (hero) | "Call Now: (713) 598-2737" or "Get a Free Estimate" | tel:7135982737 or /contact/ |
| Mid-page (after services section) | "Book a Same-Day Technician: (713) 598-2737" | tel:7135982737 |
| Bottom (end of content) | "Emergency? Call 24/7: (713) 598-2737" | tel:7135982737 |

CTA copy must match page intent:
- Emergency page: "Call Now — We're Available 24/7: (713) 598-2737" (red button)
- Repair pages: "Get a Free Estimate: (713) 598-2737"
- Maintenance pages: "Book Your Tune-Up: (713) 598-2737"
- Installation pages: "Get a Free Installation Quote: (713) 598-2737"

---

**Images Required**

| # | Description | Alt Text | Type |
|---|-------------|----------|------|
| 1 | [Specific Houston HVAC context image] | "[service] in Houston TX — 75 Degree AC" | hero |
| 2 | [Technician in uniform / branded van] | "75 Degree AC technician [service]" | service |
| 3 | [Before/after or equipment specific] | "[specific alt text]" | evidence |

**Never**: stock photos, non-Houston locations, generic HVAC images with no branding.

---

## Page-Specific Brief Notes

**Emergency Page** (/emergency-ac-repair-houston/):
- Phone number in H1 or immediately below H1
- "Response time: within 2 hours" above fold
- Green "OPEN 24/7" badge above fold
- Red or orange CTA button (sticky on mobile if possible)
- NO long paragraphs above fold — get to the CTA immediately
- Word count: shorter is better for emergency pages (800-1,200 words)

**Service Sub-Pages** (compressor repair, refrigerant leak, etc.):
- Must differentiate from parent hub (/ac-repair-houston-tx/)
- Focus on the specific problem: symptoms, causes, cost, what happens during the repair
- Unique angle: insider knowledge about this specific repair

**Location Pages**:
- Minimum 3 Houston-area specific details (neighborhood landmarks, local housing stock age, local climate context)
- Mention 3-5 specific neighborhoods/zip codes for that service area
- Local social proof or testimonial with area attribution
- Link to nearest 2-3 other service areas

**Blog Posts**:
- Specify exact question the post answers
- Featured snippet format to target (paragraph/list/table)
- Which 2-3 transactional service pages to link to
- PAA question to target for PAA box

---

## Content Checklist (verify before passing to writer)

- [ ] Primary keyword appears in H1
- [ ] Primary keyword appears in first 100 words
- [ ] Primary keyword appears in at least one H2
- [ ] Meta title ≤60 chars and includes primary keyword + Houston modifier
- [ ] **Title tag includes phone number** (validated 2026 pattern) — Richmond pages use (346) 681-2625
- [ ] Meta description ≤160 chars and includes soft CTA
- [ ] FAQs are sourced from PAA + Reddit + Quora research (not generic; not invented)
- [ ] FAQ mix includes ≥2 Reddit-sourced, ≥2 Quora-sourced, ≥1 objection/trust-killer, ≥1 Houston-specific
- [ ] FAQ list includes at least one "moonshot" PAA question with 0/10 competitor coverage (per `04-competitor-matrix.md`)
- [ ] Houston-specific details minimum 3 (location pages: minimum 5)
- [ ] Internal links out to 3-5 related pages with descriptive anchors
- [ ] Schema types specified — Article OR Service/HVACBusiness + FAQPage + BreadcrumbList + Speakable + HowTo (if process) + ItemList (if ranked list)
- [ ] Unique angle is specific (not "best service in Houston")
- [ ] **Top Players Benchmark filled in** with scores from `04-competitor-matrix.md` Phase 5b
- [ ] **12-Point AI Citation Filter Target** specifies HOW each of the 12 points is satisfied (target ≥10/12)
- [ ] **Manufacturer Authorization Claim** stated (current or "none yet")
- [ ] **Phone-in-Title Pattern** specified — Richmond pages use (346) 681-2625
- [ ] **License-Visible Placement** specified (minimum 3 of 4: trust strip, AI block, footer, schema)
- [ ] **Listicle vs Operational Decision** documented if Flag A surfaced
- [ ] **Original Research / Proprietary Data Block** specified (≥1 first-party datum)
- [ ] **Anti-Doorway Gate** all 6 items satisfied (if location page — else N/A noted)
- [ ] E-E-A-T signals meet minimum counts for this page type
- [ ] CTA includes phone number (713) 598-2737
- [ ] **Content Format Plan from research pack §10.7 mapped into per-H2 table**
- [ ] **≥1 comparison table, ≥1 numbered list, ≥1 bulleted list specified**
- [ ] **134-167 word AI passage block specified for first 30% of content**
- [ ] **Statistics density target met: ≥1 stat per 300-500 words of planned body**
- [ ] **≥1 cited authority per major section + ≥1 direct quotation specified**
- [ ] **Last Updated timestamp + dateModified sync required**
