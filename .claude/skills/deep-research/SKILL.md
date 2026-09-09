---
name: deep-research
description: >
  Upstream deep research methodology for 75 Degree AC — the comprehensive 10-phase
  research pack that runs BEFORE any content brief. Covers keyword universe, question
  mining (PAA + AlsoAsked + Reddit + Quora + HVAC-Talk + YouTube comments + forums),
  entity mapping (Koray 14-source + Wikidata + co-occurrence), top-10 competitor
  extraction with heading matrix, user intent triangulation (reviews + BBB +
  Nextdoor + inspection reports + home-warranty FAQs), AI citation audit across
  ChatGPT / Perplexity / Gemini / Claude / Copilot / AI Overviews, Houston/Texas
  authority signals, and the 20-point content gap framework. Activates whenever a
  page is being audited, briefed, or rewritten. Must run BEFORE content-briefs and
  content-generation skills. Output: 01-research/page-research/[slug]/ folder with
  9 files including the master research-pack.md.
version: 1.0.0
client: 75 Degree AC
---

# Deep Research — 75 Degree AC

The upstream research phase. Every money page goes through this BEFORE the brief is written. The goal is not "research the topic" — it is to produce a research pack that makes the resulting content uncatchable by the top 10 SERP players.

> **Core principle**: If the brief is built on data the top 10 already have, the content will look like theirs. The job of this skill is to surface intent signals, entity gaps, and citation gaps that they missed.

---

## When to Run

- ALWAYS before `/content-brief` or `/content-create` on a money page (priority 1 or 2)
- Before `/audit` on a page where content is being rewritten (not just optimized)
- When a page is stuck at position 30+ despite existing content (the gap is upstream)
- For any new page being built from scratch

Skip only for: thin location pages cloned from a parent template with no new content angle (BUT these still need the anti-doorway gate per `07-landing-pages/templates/location-page-template.md`), or pure technical fixes (noindex, schema-only, redirect-only).

> **NEW 2026-05-25 — Required additions to the pipeline (corrected 2026-05-25 evening):**
>
> **Phase 5.5: Scenario Layer Pass** — ADDITIVE to keyword research, NEVER a replacement. Both are required:
>   - Keywords = demand signal (what people actually type)
>   - Scenarios = context layer (the real situation behind the search)
>   - The brief needs BOTH. Keywords drive H1, title, meta, and which queries we target. Scenarios drive FAQ phrasing, body copy, and the customer-language layer.
>   - Example: Keyword `ac repair richmond tx` → Scenario "AC died at 9pm with kids home, outdoor temp still 95°F, in Aliana, 12-year-old Carrier unit"
>   - Output to `05-intent-triangulation.md`: 5-10 scenarios per page tied to the primary keyword cluster.
>
> **Phase 6 expanded: AIO Citation Reverse-Engineering** — for every query that triggers an AI Overview, capture the entities surfaced + source domains cited + question framing. The highest-leverage entities are the ones AIO already cites.
>
> **Phase 7 augmented: Review Entity Extraction (Koray Source 12)** — read 20-30 Google + Yelp + BBB + Nextdoor reviews of competitors AND the client. Extract customer-language entities (equipment named, problems named, places named, persons named, outcomes named). These are the words customers use BEFORE finding the business.
>
> **Phase 4 expansion: Multi-Source Entity Validation Gate (NEW)** — entity research, validation, and extraction must run across ALL these sources, not just generic Koray 14:
>   - **Top SERP competitors for this query** (mandatory) — pull entities from `01-research/competitors/top-players.md` + run `entity-extraction` on each competitor's actual ranking page. These are the entities Google already trusts in this niche.
>   - **GBP profiles of top 3-5 local pack winners** — primary category, all secondary categories, every named service, recent post entities, and "Ask about this place" AI answers where shown (Google removed the GBP Q&A section in late 2025 — don't look for one).
>   - **AI Overview citations for the query** (cross-reference Phase 6) — entities surfaced in the AIO answer + entities in cited domains.
>   - **Customer reviews** (Phase 7) — equipment, problems, places, persons, outcomes in customer voice.
>   - **PAA + Reddit + Quora + niche forums** (Phase 3) — question-frame entities (the entities customers ASK about).
>   - **Wikidata + Google KG + Wikipedia** — canonical entity validation (Q-IDs, sameAs, official names).
>   - **GSC query data** — entities buried in actual search queries the site already gets impressions for.
>   - **AdWords/Local Services Ads** for the query — entities advertisers spend money on (the converting entity language).
>
> Every entity captured must run through `entity-validate` BEFORE being added to the inventory. `VALIDATED` / `VALIDATED_NO_KG` / `VALIDATED_LOCAL` are pass states; `NOT_FOUND` / `AMBIGUOUS` / `LOW_CONFIDENCE` need fallback or disambiguation before use in content or schema.

---

## Output Structure

For every page researched, create the folder:

```
01-research/page-research/[slug]/
├── 00-research-pack.md          ← master synthesis (brief reads this)
├── 01-keyword-universe.csv      ← every keyword, intent-labeled
├── 02-question-mine.md          ← every PAA/Reddit/Quora question, categorized
├── 03-entity-map.md             ← Koray 14-source + Wikidata + co-occurrence
├── 04-competitor-matrix.md      ← top 10 heading map + FAQ frequency
├── 05-intent-triangulation.md   ← pain points, decision triggers, trust killers
├── 06-ai-citation-audit.md      ← what each AI cites + gap analysis
├── 07-houston-authority.md      ← current Houston/TX/federal signals
└── 08-gap-analysis.md           ← the 20-point "nobody else does this" framework
```

The brief reads `00-research-pack.md`. The brief author can drill into the others on demand.

---

## The 10-Phase Pipeline

### Phase 1 — Scope & Baseline

Establish what we already know before adding anything new.

**Read first (always — MANDATORY, refuse to proceed without):**
- `CLAUDE.md` — project context, USPs, NAP
- `services-list.md` and `service-areas.md`
- **`01-research/competitors/top-players.md`** — find the relevant cluster card AND read the Cross-Cluster Synthesis section (lines 1008–1457) for AC-related pages
- **`01-research/competitors/ai-citation-filter.md`** — the 12-point AI citation filter + validated channels + page anatomies + competitor benchmark scores. This is the gate every page must clear.
- `02-site-architecture/page-tracker.csv` — the planned spec for this page
- `08-reporting/content-audits/tracker.csv` — current audit status
- `03-gsc/data/queries-by-page.csv` — filter to this URL
- `03-gsc/data/queries-202605.csv` — full query universe, grep for cluster terms

**Capture page state:**
- `curl -sI` for status code, `curl -sL` for full HTML
- Current word count, title, meta, H1, schema (read WPCode #8140)
- Indexability (noindex check)
- Any cannibalization risks (find other URLs ranking for the same query)

**Output to `01-keyword-universe.csv` header row**: include current rank, impressions, CTR per query from GSC as the baseline.

---

### Phase 2 — Keyword Universe (cast the widest net)

Goal: 200+ keyword variants, every one a real query someone typed.

**Source list (run ALL — do not stop at GSC):**

| # | Source | How |
|---|---|---|
| 1 | GSC queries (this URL + cluster) | Read `03-gsc/data/queries-by-page.csv` filtered to this URL; grep `queries-202605.csv` for cluster terms |
| 2 | Google autocomplete (a-z scrape) | `WebSearch` "[seed] a", "[seed] b", ... "[seed] z" — capture suggestions |
| 3 | Google autocomplete (prefix variants) | "best [seed]", "how to [seed]", "cheapest [seed]", "near me [seed]", "houston [seed]", "tx [seed]", "24/7 [seed]" |
| 4 | Bing autocomplete | Same a-z + prefix scrape on bing.com |
| 5 | YouTube autocomplete | "[seed]" on youtube.com — captures how-to/visual intent |
| 6 | Amazon autocomplete | "[seed]" — captures product/parts intent (e.g., "ac capacitor", "air filter") |
| 7 | DuckDuckGo autocomplete | Hits a different ranking universe |
| 8 | Google "Related searches" SERP block | Scrape bottom of SERP for top 5 cluster queries |
| 9 | Google "People also search for" | Knowledge Panel for branded queries |
| 10 | Bing "Similar searches" | Different result set than Google |
| 11 | TikTok search suggestions | Surface gen-z + visual-first intent |
| 12 | Reddit autocomplete | Different vocabulary than Google |
| 13 | Pinterest autocomplete | Visual intent, "before and after", DIY |
| 14 | SEMrush / Ahrefs (if available) | Quantitative volume estimates |
| 15 | GSC pages CSV diagonal scrape | Find which existing pages rank for adjacent queries — those are also valid |

**For each captured keyword, label:**
- `intent` — informational / transactional / commercial / navigational / emergency
- `funnel_stage` — awareness / consideration / decision
- `local_modifier` — yes/no (contains "houston", "near me", "[neighborhood]", ZIP)
- `urgency` — emergency / same-day / scheduled / browse
- `head_or_long_tail` — head / mid / long
- `commercial_value` — high / med / low

**Output `01-keyword-universe.csv`** — schema matches `keyword-research/SKILL.md` v2.1: query, source, intent, funnel_stage, local_modifier, urgency, head_or_long_tail, commercial_value, **cv_dollar_tier**, gsc_imps, gsc_position, **gtrends_signal**, serp_features, **topical_relevance**, **voice_variant**, **speakable_eligible**, **aio_cited_domains**, target_page_slug, priority, notes.

Quality bar: minimum 200 keywords per page (400 for whole-site). The keyword-research skill v2.1 has expanded source coverage including GSC query history (Source 13), autocomplete alphabet-soup mining (Source 14), and Google Trends seasonality (Source 15) — if under threshold from these 15 sources, expand the seed terms and re-run.

---

### Phase 3 — Question Mine (the unfair advantage)

Goal: 50+ real user questions, sourced from where competitors don't look.

**Source list (the order matters — go from cheapest to most expensive):**

| # | Source | How |
|---|---|---|
| 1 | Google PAA (recursive 3 levels) | Search the primary keyword, expand every PAA, click each result, expand again, 3 levels deep — captures the full PAA tree (typically 30-80 questions) |
| 2 | AlsoAsked.com | `WebFetch https://alsoasked.com/search?term=[query]` — exports the PAA tree in one fetch |
| 3 | AnswerThePublic | `WebFetch https://answerthepublic.com/reports/[query]` — visualization of who/what/when/where/why/how/can/are/is/will + prepositions |
| 4 | Bing People Also Ask | Different question set than Google for same query |
| 5 | **Reddit** (`r/HVAC` · `r/HVACAdvice` · `r/HomeImprovement` · `r/HomeMaintenance` · `r/Houston` · `r/AirConditioner` · `r/diy` · `r/homeowners`) | ⚠️ **Direct `WebFetch` on reddit.com returns "unable to fetch"** (Cloudflare bot wall) and `site:reddit.com [query]` often returns "no links found" if too specific. **Working approach**: ① **broad keyword + reddit term**: `WebSearch "reddit ac repair cost capacitor scam diagnostic"` — picks up Reddit titles from Google's index. ② **secondary archives**: search for known viral threads on aggregator sites (`thecooldown.com`, `homeguide.com`, contractor blogs that quote Reddit) — these often quote exact Redditor comments. ③ **Quora-cross-pollination**: when you find a Quora thread on the same Q, its top answers cite Reddit threads. **Quality bar: minimum 10 Reddit-sourced questions per page, even via proxy.** |
| 6 | **Quora** | ⚠️ **Direct `WebFetch` on quora.com frequently times out** (60s timeout). **Working approach**: `WebSearch "site:quora.com [topic]"` returns 10+ question-page URLs per query — capture the question titles directly from the search results (they ARE the questions, in exact phrasing). Run 3-5 site: searches per page topic to surface ~20-30 Quora questions. Then `WebFetch` the 3-5 most relevant pages for sidebar "related questions" if they load (retry once after timeout). **Quality bar: minimum 10 Quora-sourced questions per page.** |
| 7 | YouTube comments | `WebFetch` top 5 YouTube videos for the keyword. Read top-comment threads — these are confusions/objections that became questions |
| 8 | HVAC-Talk forum | `WebFetch https://hvac-talk.com/vbb/search.php?q=[query]` — pro-grade questions; surfaces what DIYers escalate to pros |
| 9 | DIYers Forum (diychatroom.com) | Same as HVAC-Talk but homeowner-focused |
| 10 | City-data Houston subforum | `WebFetch http://www.city-data.com/forum/houston/` — Houston-specific questions |
| 11 | Nextdoor (Houston) | Limited public access, but search "AC repair" on nextdoor.com if available — neighborhood-level pain points |
| 12 | Houston Chronicle reader Q&A | If the topic crosses into news/heat-illness territory |
| 13 | Home warranty company FAQs | American Home Shield, Choice Home Warranty, Old Republic — they publish their top FAQs |
| 14 | Manufacturer support FAQs | Carrier, Trane, Lennox, Goodman, Rheem support sites — questions about their own equipment |
| 15 | "[brand] [model] problems" Google search | E.g., "carrier infinity 24acc6 problems" — surfaces failure-mode questions |

**Categorize each question into:**
- `pre_call` — they ask this BEFORE deciding to call us (eligibility, scope, fit)
- `cost` — pricing, financing, rebates, payment
- `process` — what happens, timeline, who shows up
- `decision` — repair vs replace, brand choice, sizing, SEER
- `post_service` — warranty, maintenance, follow-up
- `failure_mode` — symptoms, diagnostics, "why did this happen"
- `houston_specific` — code, permit, weather, neighborhood
- `objection` — "the last company...", "I called X and they said..." — trust/competence killers

**Output `02-question-mine.md`** with all questions tagged. Build the FAQ shortlist (the 6-10 questions to use in the FAQ section + FAQPage schema).

Quality bar: minimum 50 questions, minimum 8 with `houston_specific` tag, minimum 5 with `objection` tag, **minimum 10 with `reddit_or_quora_sourced` tag** (Reddit/Quora questions are the ones competitors don't see — they're the highest-leverage FAQ content).

**Reddit/Quora is non-negotiable** — these two sources catch the questions PAA can't surface because real users use different vocabulary than search-engine prompts. The `services-air-conditioning-repair` pack (May 2026) is the canonical reference example — 72 questions captured, 18 Houston-specific, 12 objection-tagged, with ~30 Reddit/Quora-sourced. Every future page, location page, and blog post follows that same depth.

---

### Phase 4 — Entity Mapping

Run the full Koray 14-source method **+ Source 14a (local PR/news 6.5× AIO multiplier)** from `.claude/skills/entities-research/SKILL.md` v2.0. Validate every discovered entity through `.claude/skills/entity-validate/SKILL.md` before adding to the inventory. For competitor pages from Phase 5, run `.claude/skills/entity-extraction/SKILL.md` to extract per-page entity inventories — the cross-competitor co-occurrence matrix comes from these.

Then extend with three new layers:

**Layer A — Manufacturer brand + MODEL entities**
The Cluster 9 audit found NO Houston player names specific models. This is the single biggest entity gap for any HVAC content.

- **Carrier** — Infinity series, Performance series, Comfort series
- **Trane** — XV20i, XR16, XL18i
- **Lennox** — Signature Collection, Elite, Merit
- **Goodman** — GSXC18, GSX16, GSX14
- **Rheem** — Prestige, Classic Plus, Classic
- **American Standard** — Platinum, Gold, Silver
- **Daikin** — Fit, 19 Series, Aurora, MXS multi-zone
- **Mitsubishi Electric** — M-Series, P-Series, Hyper-Heat
- **Fujitsu** — Halcyon
- **LG** — LMU/Multi F MAX
- **Bryant** — Evolution, Preferred, Legacy
- **Coleman** — Echelon, LX, Comfort
- **Heil** — Ion, Performance, QuietComfort
- **York** — Affinity, LX, Latitude

**Layer B — Component / parts entities**
- Capacitor (run cap, start cap), Contactor, Compressor (scroll, reciprocating, variable-speed), TXV (thermostatic expansion valve), Condenser fan motor, Blower motor (ECM vs PSC), Evaporator coil, Condenser coil, Drain pan, Float switch, Filter drier, Suction line, Liquid line
- Refrigerants: R-410A (current), R-32 (transition), R-454B (new EPA-approved 2025+), R-22 (legacy phaseout)
- Thermostats: smart (Ecobee, Nest, Honeywell T-series), conventional, line voltage

**Layer C — Certification / authority entities**
- TACL (Texas Air Conditioning License) — A / B / E classifications; reference TDLR
- EPA 608 (technician refrigerant certification)
- NATE (North American Technician Excellence)
- ENERGY STAR
- ACCA (Air Conditioning Contractors of America)
- ASHRAE
- AHRI (certification matching ratings)
- ICC (International Code Council) — Houston follows IRC for residential

**Layer D — Co-occurrence (Koray method 14)**
Pull the top 10 SERP pages from Phase 5. Extract all noun-phrases. Count entity frequency. **Any entity appearing in 7+ of 10 top-ranking pages is mandatory.** Any appearing in 3-6 is recommended. Document the count.

**Layer E — Wikidata + Knowledge Graph**
- Query Wikidata for "air conditioning" entity (Q173725) and its `instance of`, `subclass of`, `part of`, `made from material` properties — these are the canonical entity relationships
- For Houston: query Wikidata for Houston (Q16555) — neighborhoods, climate, demographics that have entities
- For brands above: check each has a Wikidata page (Q-number) and document for sameAs schema

**Output `03-entity-map.md`** with: business entity (existing), service entity for THIS page, component entities to mention, brand entities to mention with at least one specific model per brand we service, Houston-specific entities, certification entities, and a frequency table from Layer D.

**Also output `entity-inventory.csv`** in this slug's folder — per `entity-extraction/SKILL.md` schema (entity_name, entity_type, canonical_name, qid, kg_id, schema_type, salience_score, role, validation_status, sameAs_url, co_occurrence_status, notes). This CSV feeds `/content-brief` and `/schema-generate` directly.

**Validation gate:** every entity in `03-entity-map.md` AND `entity-inventory.csv` must have a `VALIDATED` / `VALIDATED_NO_KG` / `VALIDATED_LOCAL` status from `entity-validate`. Entities flagged `AMBIGUOUS` / `WRONG_TYPE` / `NOT_FOUND` either get fallback handling per `entity-validate` § NOT FOUND Fallback or are excluded.

---

### Phase 5 — Competitor Deep Dive (Top 10, not Top 3)

Goal: extract enough structure from the top 10 SERP results that we can compose the canonical heading map + identify what they ALL miss.

**For each of top 10 (organic, ignore ads):**

| Field | How to extract |
|---|---|
| URL | From SERP scrape |
| Content word count (real) | `curl -s [url]` then strip nav/footer/sidebar via Python BeautifulSoup; count only article body |
| H1 (exact) | Regex `<h1[^>]*>(.+?)</h1>` |
| All H2 (exact, in order) | Regex `<h2[^>]*>(.+?)</h2>` |
| All H3 (exact, in order) | Regex `<h3[^>]*>(.+?)</h3>` |
| Schema @types | Parse `<script type="application/ld+json">` blocks |
| FAQ questions (exact) | Look for FAQPage schema OR question-pattern headings (ending in `?`) |
| Internal link count | Count anchors pointing to same domain |
| External link count (with targets) | Anchors to other domains — note which authority sites (EPA, ENERGY STAR, manufacturer sites) |
| Image count + alt patterns | Count `<img>`, sample 5 alt attributes |
| Author/byline | Look for byline, schema Person, "About the author" block |
| Trust badges visible | License #, BBB, Google reviews count, AHRI, NATE — note which |
| Pricing approach | Free estimate / call for quote / ranges shown / specific prices |
| CTA pattern | Phone above fold? Sticky CTA? Form? Live chat? |
| Unique sections | Anything ≥1 competitor has that ≥7 of 10 don't |

**Build three matrices and output to `04-competitor-matrix.md`:**

**Matrix A — Heading frequency.** For each H2/H3 found across all 10 competitors, the frequency (how many of 10 use it). Anything ≥7/10 is "table stakes" — we must cover it. Anything 4-6/10 is "competitive parity." Anything 1-3/10 is a differentiator (use selectively).

**Matrix B — FAQ frequency.** Same approach for FAQ questions. The PAA + AlsoAsked questions from Phase 3 that ALSO appear in 4+ competitor FAQs are mandatory. PAA questions NO competitor uses = our citation opportunity.

**Matrix C — Schema deployment.** Which @types does each use? Service, FAQPage, BreadcrumbList, LocalBusiness, HVACBusiness, AggregateRating, Review, HowTo, ImageObject. We deploy the union of what the top 3 use, plus anything we have evidence-grade for (TACL license # → identifier).

**Special call-out: Adams Air (per Cluster 5 audit) is the direct rival for emergency content** — license on page + family op signals + 12 schema types. Treat their page as the benchmark to clear.

---

### Phase 5b — Score Top 10 against the 12-point AI citation filter

Goal: produce a 12-point filter score per competitor so the brief knows EXACTLY what gaps to exploit. The filter is documented in `01-research/competitors/ai-citation-filter.md` §1.

**For each of top 10, score 0 or 1 on each:**

| # | Filter point | How to verify |
|---|---|---|
| 1 | HVACBusiness or Plumber schema | Schema parse from Phase 5 |
| 2 | AggregateRating schema with rating + reviewCount | Schema parse |
| 3 | Service schema with areaServed + offers | Schema parse |
| 4 | Person schema with sameAs to LinkedIn (or equivalent) | Schema parse + check sameAs URLs |
| 5 | License number visible in HTML body | `grep -i "TACL\|TDLR\|license" page-html.html` |
| 6 | Founding year + foundingDate in schema | Body text + schema |
| 7 | Direct-question H2s (≥3) | From Phase 5 H2 extraction — count those ending in `?` |
| 8 | FAQPage schema attached | Schema parse |
| 9 | ≥3 verifiable trust badges visible | BBB rating, Houston Chronicle BotB, manufacturer auth, NATE, Angi, Best Pick |
| 10 | dateModified + datePublished visible/in schema | Body or schema |
| 11 | sameAs links to GBP + BBB + Yelp + Facebook + LinkedIn + Wikidata (≥5) | Schema parse + footer scan |
| 12 | Houston-specific content (climate, neighborhoods, CenterPoint, NOAA, etc.) | Body scan |

**Output table in `04-competitor-matrix.md` (new section "12-Point Filter Scoring"):**

| Rank | Competitor URL | Score (0–12) | Strongest points | Weakest points |
|---|---|---:|---|---|
| 1 | abacusplumbing.net | 8 | Schema, license, founding, Houston | No Person schema, no FAQPage, no dateModified |
| 2 | ... | ... | ... | ... |

**Strategic interpretation rules:**
- If top 3 average score is 4–7: we can ship a 10–12 score page and likely overtake them on AI citation
- If top 3 average is 8–10: closing remaining gaps is the only viable wedge
- If top 3 average is 10–12: we need a niche-differentiator strategy (Houston-specific original data, manufacturer authorization, named-tech depth) because schema parity alone won't move us

**Reference benchmark** (from `top-players.md` §9): Abacus 8/12, Mission AC 6/12, Chill Brothers 3/12, 75 Degree AC current 6/12, target 12/12.

---

### Phase 6 — User Intent Triangulation

Goal: surface what customers ACTUALLY want, not what competitors guess they want. Sources outside standard SEO toolkit.

| Source | What we mine |
|---|---|
| Competitor Yelp 1-3 star reviews | Specific complaints — pricing, no-show, parts not stocked, follow-up failures. These are TRUST KILLERS we explicitly address. |
| Competitor Google 1-3 star reviews | Same, plus tone/relationship issues |
| BBB complaints (Houston HVAC) | `bbb.org/us/tx/houston/category/heating-air-conditioning-hvac` — formal complaint types reveal failure modes that drive search |
| Nextdoor Houston | "Anyone know a good AC guy?" threads reveal what neighbors ask each other |
| Insurance forums | Reddit r/Insurance — claims involving AC reveal water-damage and equipment-failure angles |
| Real estate inspection report templates | `WebFetch` sample TREC inspection reports — what inspectors flag on AC. Drives "is this normal?" content |
| Home warranty FAQs | American Home Shield, Choice Home Warranty — their published failure-mode catalog |
| Houston Chronicle / ABC13 archives | Heat-related HVAC news — "Houston heat sends AC repair calls surging" — surfaces seasonal urgency framing |
| Texas Public Utility Commission complaints | If electrical/HVAC overlap |
| HVAC industry news (ACHR News, ACCA newsletter) | Trends, refrigerant transitions, code changes that customers haven't heard yet |
| Manufacturer service bulletins | Recalls, common defects — informs "what to ask before you call" content |
| YouTube negative-comment harvesting | Top videos in the niche — comments often surface "this didn't work for me because..." |

**Output `05-intent-triangulation.md` with three tables:**

**Table 1 — Pain Points** (what makes them search): symptom-level, financial, time, trust. Each row: pain point, source, severity, addressed in our content? (Y/N).

**Table 2 — Decision Triggers** (what tips them from browsing to calling): time-of-day, weather, family-context (baby, elderly, pets), house event (just bought, refi). Each trigger should map to a section/CTA in the page.

**Table 3 — Trust Killers** (what we must rebut explicitly): hidden fees, late arrivals, parts-not-stocked-second-trip, tech who doesn't know the system, pressure to upsell. Each killer → one explicit statement in the page that rebuts it with evidence (not slogan).

---

### Phase 7 — AI Citation Audit

Goal: identify what each AI surfaces for the topic, what it cites, and the citation gaps we can fill.

**Run the same query across 6 AI systems and capture:**

| System | Query approach |
|---|---|
| **ChatGPT (with browsing)** | `chatgpt.com` — query with browsing enabled. Capture answer + cited URLs |
| **Perplexity** | `perplexity.ai` — pro mode. Captures source-grade citations |
| **Gemini** | `gemini.google.com` — capture answer + linked sources |
| **Claude.ai** | with web search — answer + citations |
| **Bing Copilot** | bing.com/chat — Microsoft's citation pattern |
| **Google AI Overviews** | Live Google search for the query. Screenshot/document the AI Overview block + cited sources |

**For each system, document:**
- Question variants tried (head + 3 long-tail)
- The exact answer summary
- Sources cited (URLs + domain authority)
- What the answer GETS WRONG (factual gaps, missing local context)
- What the answer DOESN'T MENTION that we could (citation gap)

**Output `06-ai-citation-audit.md` with:**
- Citation domain table (which domains do AIs cite most for this query?)
- Citation gap list (statements an AI would CITE if we made them well)
- Featured-snippet-ready answer block draft (40-60 words, citable, factual, Houston-specific)
- AIO defensibility check — is our brand mentioned anywhere? If not, why not, and what entity-signal repair is needed (links back to `entities-research`)
- **Validated AI Citation Channel audit** (added 2026-05-22): for each of the validated channels in `ai-citation-filter.md` §2, audit competitor presence:
  - **Reddit** (~40% of all AI citations): grep r/HVAC + r/houston + r/HomeImprovement for competitor brand mentions in past 12 months. Capture URLs + Reddit thread context. **This is the single biggest leverage — if competitors hold many Reddit mentions and we hold zero, that's a citation gap we close via `reddit-engagement` skill, not via our content.**
  - **Wikipedia / Wikidata** (26–48% of ChatGPT top-10): check if competitors have Wikidata entries (`wikidata.org/wiki/Special:Search`). Note Wikidata QIDs. Note our absence as a Wikidata gap.
  - **YouTube** (#1 most-cited AI domain, 34% growth in 6 months): YouTube search per competitor brand. Capture channel URL, subscriber count, video count for AC repair / install / service. **Competitor video content frequently ranks for sub-queries via Google's query fan-out even when not in organic top 100.**
  - **Foursquare** (60–70% of ChatGPT local recs): check competitor Foursquare listings. We must claim our own if not already.
  - **ThreeBestRated** (24% of ChatGPT local business directory citations): check competitor inclusion in ThreeBestRated Houston.
  - **Listicle/ranking pages**: which 3rd-party listicle pages mention competitors? (Expertise.com, ConsumerAffairs, HomeGuide, ProFindr, Angi top-10, Yelp city). Note our position on each.

Reference data: per our `ai-visibility` skill + the validated 5W AI Platform Citation Source Index 2026 (680M citations analyzed), top 10 organic citation overlap dropped from 76% → 17–38% in 18 months. Pages with comprehensive schema get 38% median citation lift in 90 days (40-site study).

---

### Phase 8 — Houston / Texas / Federal Authority Signals

Goal: integrate real, current, citable authority data the top 10 don't have.

**Current as of 2026-05-17 — verify freshness when running:**

| Source | What to capture |
|---|---|
| **CenterPoint Energy rebates** | `centerpointenergy.com/en-us/residential/save-energy-money/rebates-incentives` — current $ amounts for AC, heat pump, smart thermostat. Updates seasonally. |
| **Federal 25C tax credit** | EXPIRED Dec 31 2025 (per memory `project_hvac_incentives_2026.md`) — do NOT cite. Use CenterPoint instead. |
| **Texas HEEHRA** | Check status at `tdhca.state.tx.us` — has not launched as of 2026-05-17. Cite only when live. |
| **SEER2 minimums for Texas (DOE south region)** | 14.3 SEER2 minimum for split systems. 8.8 HSPF2 for heat pumps. Cite DOE region map. |
| **Houston building permit requirements** | `houstonpermittingcenter.org` — Mechanical permit required for AC/heating equipment replacement when changing capacity/efficiency. Permit cost ranges. |
| **TACL license verification** | `tdlr.texas.gov/LicenseSearch/` — verify our TACLA72152E is active. Note license tiers (A/B/E). |
| **TDLR enforcement actions** | Same domain — public records of complaints/fines against TX HVAC contractors. Don't name competitors negatively, but use as "what to check before hiring." |
| **NOAA Houston climate normals** | `weather.gov/hgx/climate` — annual cooling degree days, days >95°F, peak humidity. Drives seasonal urgency content. |
| **ENERGY STAR rebate finder** | `energystar.gov/rebate-finder` — search ZIP 77092 for current product rebates |
| **AHRI directory** | `ahridirectory.org` — verify SEER ratings on specific models. Critical for "Carrier 24ACC6 36-3 = X SEER2" citations. |
| **EPA refrigerant transition** | EPA AIM Act — R-410A phase-down 2025-2036. R-454B and R-32 as primary replacements. New equipment must use these by Jan 1, 2025. |
| **City of Houston cooling centers** | `houstontx.gov` — heat-emergency context. Adds civic authority signal. |

**Output `07-houston-authority.md`** with: every signal grabbed, the source URL, the date verified, the exact dollar amount/SEER/percentage, and where it should be cited in the content.

---

### Phase 9 — Content Gap Synthesis (the 20-point framework)

This is where the pack pays off. Score each of the 20 gaps on:
- **Coverage in top 10** (0 = none / 10 = all)
- **Difficulty for us to fill** (1 = easy / 5 = requires new asset)
- **Conversion impact** (1 = SEO only / 5 = directly drives calls)

**The 20-Point Gap Framework:**

| # | Gap | What "filling" looks like |
|---|---|---|
| 1 | **Brand + model gap** | Name specific models we service per brand (e.g., "Carrier Infinity 24ANB7" not "Carrier units") |
| 2 | **Specific pricing gap** | Real $ ranges with line items ($350-$650 capacitor + diagnostic) not "free estimates" |
| 3 | **Timeline gap** | "Most repairs same-visit; full replacement 6-8 hrs" — specific hours |
| 4 | **Component parts gap** | Name capacitor, contactor, TXV, ECM blower motor, condenser fan motor — components customers' techs name |
| 5 | **Houston ZIP/neighborhood gap** | Real ZIP-list with response-time data; named neighborhoods served |
| 6 | **Houston seasonal data gap** | "108 days >95°F in 2024" — NOAA-grade specifics |
| 7 | **Permit/code gap** | "City of Houston requires Mechanical Permit for replacements >5% capacity change" — specific |
| 8 | **Real photos gap** | Job-site photos with EXIF dates, not stock |
| 9 | **Named technicians + EPA608** | "Our techs hold EPA 608 Universal — verify on EPA registry." (No PII unless they've opted in) |
| 10 | **Process transparency gap** | Step-by-step what happens from call → arrival → diagnostic → quote → repair → cleanup |
| 11 | **Tools gap** | "We diagnose with Fieldpiece SMAN 460 manifolds, Testo 552 vacuum gauges" — pro-grade specifics |
| 12 | **Energy efficiency gap** | Current SEER2 minimum (14.3 TX) + recommended (16+ Houston climate) — DOE-grade data |
| 13 | **Permit pull responsibility gap** | "We pull the Mechanical Permit on your behalf — $XX flat add-on, included in quote" |
| 14 | **Workmanship guarantee gap** | "1-year labor + 10-year parts (manufacturer)" — real terms, not "satisfaction guaranteed" |
| 15 | **Insurance specificity gap** | "$1M general liability, $1M workers comp through [carrier]" — dollar amounts shown |
| 16 | **Response time gap** | "Within 2 hours for emergencies inside Loop 610; within 4 hours suburbs" — measurable |
| 17 | **Brand exclusion gap** | Honest list of brands we DON'T service (or service with limitations) |
| 18 | **Refrigerant transition gap** | R-410A phase-down, R-454B replacement — homeowner-level explanation of what this means for cost |
| 19 | **Permit cost gap** | Actual $ — Houston Mechanical Permit ranges |
| 20 | **Houston-specific failure modes** | Houston humidity → coil corrosion accelerated; rainstorms → condenser fan motor flood; spring pollen → blower wheel buildup. Hyper-local failure patterns. |

**Output `08-gap-analysis.md`** with the scored matrix, ordered by `(10 - coverage) × conversion_impact / difficulty`. The top 5 gaps become the content's main differentiators.

**Additional flags (added 2026-05-22) — Phase 9 must surface these:**

**Flag A — Listicle SERP detection.** If ≥6 of the top 10 SERP results are listicle/ranking pages (Expertise, ConsumerAffairs, HomeGuide, ProFindr, Angi top-10, "X Best AC Repair in Houston" articles), the SERP is **listicle-dominated**. Two implications:
- (1) A service page alone won't capture the AI citation share — we also need to publish our own listicle at `/blog/best-[service]-houston/` per `topical-map` skill, following the **transparent-methodology gate** in `ai-citation-filter.md` §8 (Google January 2026 enforcement: self-promotional listicles see 29–49% visibility drops; we must include real competitors with real data).
- (2) The brief must specify both pieces (service page + listicle) — never just one.

**Flag B — Anti-doorway gate for location pages.** If this research pack is for a location page (URL contains a city/neighborhood name), the brief MUST specify how the page satisfies all 6 anti-doorway requirements per `ai-citation-filter.md` §7:
- Real neighborhood testimonials (not stock)
- Region-specific photos
- Neighborhood-specific FAQs (different from parent service-page FAQs)
- Unique opening paragraph (not templated swap)
- Local-specific content (housing stock age, climate micro-zones, ZIP coverage, common system brands)
- Adjacent neighborhood internal links

Google's March 2024 update killed 80% of templated location pages for a regional HVAC company (-63% organic traffic in 30 days). If we can't satisfy all 6, don't ship the page — focus on fewer-but-deeper.

**Flag C — Service × location matrix opportunity.** If the parent service exists and 5+ city/neighborhood pages don't, surface this as a content production roadmap — but with explicit per-page anti-doorway content requirements (not a template clone).

---

### Phase 10 — Research Pack Synthesis

The master file: `00-research-pack.md`. Reads like an executive summary; everything else is appendix.

**Required sections:**

1. **Page Targeted** — URL, primary keyword, current state, GSC delta opportunity
2. **Top 5 Keyword Targets** (from Phase 2) — head + 4 priority long-tail
3. **Top 10 Questions to Answer** (from Phase 3) — these become FAQs + body sections
4. **Top 10 Entities to Integrate** (from Phase 4) — with where to place each (heading, body, schema, alt text)
5. **Top 5 Content Gaps to Fill** (from Phase 9) — the differentiators
6. **Recommended Heading Map** — H1, H2 (in order), H3 sub-sections — derived from Matrix A (Phase 5) + Phase 9 gaps. **Every H2 must be a question under 10 words, matching real PAA/Reddit/Quora phrasing.**
7. **Content Format Plan** (per H2) — for every H2 in the heading map, specify:
   - **Format type** — `answer-first` / `numbered-list` / `bulleted-list` / `comparison-table` / `definition` / `mixed`
   - **Why this format** — citation lift rationale (e.g. "3 items × 4 attributes → table → 4.2× lift")
   - **If list**: how many items expected, sequence-dependent or parallel
   - **If table**: column headers proposed, row entities, units
   - **If answer-first**: target word count (40-75)
   - **Schema unlock**: `HowTo` for processes, `ItemList` for ranked lists, `FAQPage` for FAQs, `Speakable` on answer-firsts
   - Reference `.claude/skills/ai-visibility/references/ai-content-formatting.md` for the decision table
8. **FAQ Shortlist** — 8-10 questions sourced from Phase 3, validated against Phase 5 Matrix B
9. **Required Schema** — list of @types (from Phase 5 Matrix C union) with specific fields. Always include: `Article` (blog) OR `Service`/`HVACBusiness` (money page), `FAQPage`, `BreadcrumbList`, `Speakable`, plus `HowTo`/`ItemList` if applicable from Phase 10.7
10. **Required Authority Signals** — list specific Phase 8 citations to integrate, with exact wording proposals. **Density target: 1 statistic per 300-500 words, ≥1 external authority citation per major section, ≥1 direct quotation per page** (Princeton GEO: +41% / +115% / +28% lifts respectively)
11. **AI Citation Block Draft** — the 134-167 word self-contained passage (page-level) to be placed in the first 30% of content (where 44.2% of LLM citations come from). Format per `.claude/skills/ai-visibility/references/ai-citability.md`
12. **Trust-Killer Rebuttals** — explicit statements from Phase 6 Table 3
13. **E-E-A-T Signal Plan** — Experience, Expertise, Authority, Trust counts and placements
14. **Freshness Plan** — visible "Last Updated: Month Year" target placement, `dateModified` sync requirement, refresh cadence entry for `02-site-architecture/page-refresh-log.csv`

**Quality checklist at end of pack:**
- [ ] ≥200 keywords captured
- [ ] ≥50 questions mined; ≥8 Houston-specific; ≥5 objection-type; ≥10 Reddit/Quora-sourced
- [ ] Top 10 SERP fully extracted (heading + FAQ + schema)
- [ ] **12-point AI citation filter scored for top 10 (Phase 5b)** — table in `04-competitor-matrix.md`
- [ ] **Validated AI citation channel audit complete (Phase 7)** — Reddit + Wikipedia + YouTube + Foursquare + ThreeBestRated + listicle pages mapped
- [ ] 20-point gap framework scored
- [ ] **Flag A (listicle SERP)** evaluated — if ≥6/10 are listicles, brief specifies both service page + own listicle
- [ ] **Flag B (anti-doorway gate)** evaluated — if location page, all 6 anti-doorway requirements specified
- [ ] **Flag C (service × location matrix)** opportunity surfaced if applicable
- [ ] ≥5 Houston/TX/federal authority signals with current dates
- [ ] AI citation audit across 6 systems
- [ ] Heading map composed from gap analysis + matrix A — **every H2 is a question under 10 words**
- [ ] **Content Format Plan completed for every H2** (format type + schema unlock specified)
- [ ] **At least 1 comparison table specified** (any multi-attribute content)
- [ ] **At least 1 numbered list specified** (any process or ranking)
- [ ] **At least 1 bulleted list specified** (any parallel items: symptoms, ZIPs, brands)
- [ ] FAQ shortlist composed from question mine + matrix B
- [ ] AI citation block drafted (134-167 words, page-level, first 30% placement)
- [ ] Statistics density target met (≥1 per 300-500 words of planned body)
- [ ] **Original research / proprietary data block specified** (dispatch time, repair-vs-replace ratio, parts-stocked %, etc. — Perplexity 3.7× citation multiplier)
- [ ] Freshness plan set (Last Updated + dateModified + refresh cadence)

---

## Workflow Integration

```
/deep-research [url]    → produces 01-research/page-research/[slug]/
        ↓
/content-brief [url]    → reads 00-research-pack.md, produces 07-landing-pages/briefs/[slug]-brief.md
        ↓
/content-create [url]   → reads brief + pack, produces 07-landing-pages/content/[slug]-content.md
```

The brief command MUST refuse to run if the research pack is missing. The content command MUST refuse to run if the brief is missing.

For `/audit` on a money page: invoke `/deep-research` first if pack doesn't exist or is >90 days old, then proceed to the audit's existing phases.

---

## Anti-Patterns (don't do)

- ❌ Skip phases because "we already know this topic." The point of the pack is to surface what we DON'T know.
- ❌ Use WebFetch summaries as authoritative — capture raw HTML and parse it yourself.
- ❌ Cite federal 25C tax credit (expired Dec 31 2025) or unlaunched HEEHRA — use CenterPoint instead.
- ❌ Pull only Top 3 competitors — the differentiators hide in positions 4-10.
- ❌ Write the brief before the pack is complete. The pack IS the brief's source data.
- ❌ Reuse last year's research. Re-run anything older than 90 days.
- ❌ Treat questions and keywords as the same artifact. Questions drive structure; keywords drive optimization.

---

## Time Budget

For a single money page (e.g., `/services/emergency-ac-repair/`): expect 60-120 minutes of research compute. Split as roughly:
- Phase 1: 5 min
- Phase 2: 15 min
- Phase 3: 20 min
- Phase 4: 10 min
- Phase 5: 25 min (the heaviest — top 10 extraction)
- Phase 6: 15 min
- Phase 7: 10 min
- Phase 8: 5 min
- Phase 9: 10 min
- Phase 10: 5 min

This is upfront cost. The brief and content phases that follow are FASTER because every decision has data behind it.

---

## See Also

- `.claude/skills/keyword-research/SKILL.md` — **v2.1** — keyword discovery methodology, 15 sources (this skill consumes its CSV schema in Phase 2)
- `.claude/skills/keyword-clustering/SKILL.md` — **v2.0** — converts the keyword universe into cluster cards (used by `/content-brief` after this skill completes)
- `.claude/skills/entities-research/SKILL.md` — **v2.0** — Koray 14+14a source method (this skill runs it as Phase 4)
- `.claude/skills/entity-extraction/SKILL.md` — **v2.0** — per-page entity audit with salience scoring (this skill runs it on every Phase 5 top-10 competitor page)
- `.claude/skills/entity-validate/SKILL.md` — **v2.0** — Wikidata + Google KG + AI engine cross-check validation gate (every entity in Phase 4 passes through this)
- `.claude/skills/entities-mapping/SKILL.md` — **v2.0** — entity-to-page assignment (runs after this skill, before `/content-brief`)
- `.claude/skills/competitor-analysis/SKILL.md` — competitor research (this skill goes deeper — top 10 not top 3)
- `.claude/skills/content-briefs/SKILL.md` — the next phase in the pipeline (reads our output)
- `.claude/skills/ai-visibility/SKILL.md` — Phase 7 grounding (citation correlation data)
- `.claude/skills/ai-visibility/references/ai-content-formatting.md` — **Phase 10.7 source of truth** (format decision table + checklist + table/list rules)
- `01-research/ai-content-formatting-2026.md` — upstream research with full citation lift data and sources
- `01-research/competitors/top-players.md` — pre-audited competitor knowledge base by cluster
- **`01-research/competitors/ai-citation-filter.md`** — 12-point AI citation filter + validated channels + page anatomies (Phase 1 + 5b + 7 source of truth)
