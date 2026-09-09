---
name: keyword-research
description: >
  Build a complete, multi-source keyword universe for any local-service business.
  Covers 15 discovery sources — competitors (on-page + gaps + GBP), SERP signals,
  PAA + People Also Search For (deep expansion), rich/featured snippets, forums
  (Reddit/Quora/niche), social platforms, paid ad headlines, AI Overviews + AIO
  citation reverse-engineering, AI engines (ChatGPT/Perplexity/Gemini/Copilot/Claude),
  customer reviews, GSC query history, autocomplete alphabet-soup mining, and
  Google Trends seasonality — plus 3 conditional enrichment sources: Google Keyword
  Planner API (real geo-targeted volume + CPC + seasonality, via ads-toolkit),
  Semrush MCP (keyword difficulty + SERP landscape + related/questions), and
  DataForSEO API (city-level volume/CPC, live SERP w/ PAA + AI Overview + local pack,
  Maps rankings). All degrade gracefully — research never blocks on their
  availability. Adds intent classification,
  voice search variant generation, speakable opportunity flagging, cannibalization
  detection, GSC-grounded opportunity scoring, topical relevance scoring, commercial
  value $ tier (real CPC when available, proxy otherwise), and priority formula.
  Activates on "keyword research", "find keywords", "build a keyword list", "keyword
  strategy", "keyword mapping", "keyword intent analysis", or as Phase 2 of
  `/deep-research`. Project-agnostic: works for any client.
version: 2.3.0
---

# Keyword Research

Build the complete keyword universe for a local-service business. Every keyword gets an intent classification, a SERP-feature flag, a page-assignment hint, and a priority tier. See `references/intent-classification.md` for the full intent framework.

This skill is **project-agnostic**. Client-specific data (services list, locations, GSC account, competitor URLs) is read from the project's own files at run-time — never hardcoded in the skill.

---

## Inputs (read these BEFORE any source query)

| Input | Where it lives | Why |
|---|---|---|
| Primary services | `services-list.md` or equivalent (project root) | Seed terms for every cluster |
| Service areas | `service-areas.md` or equivalent | Location modifiers for every cluster |
| Business identity | `business-info.md`, `CLAUDE.md` | Brand, NAP, license, USPs |
| GSC queries | `03-gsc/data/queries-*.csv` (whole-site) or `03-gsc/data/queries-by-page.csv` (per-page) | Real impressions + positions = ground truth |
| Existing keyword work | `01-research/keywords-research.csv` (whole-site) and any per-page CSVs | Avoid duplication; build on prior work |
| Competitor list | `01-research/competitors/top-players.md` or equivalent | Source 1, 2, 4 below |

If a file is missing, **skip the input gracefully** and document the gap in the output notes — never invent data.

---

## Research Process — 15 Core Sources (ALL required) + 3 Conditional (16–18)

Run every core source. Document each finding with the source tag so the CSV can be filtered. If a source returns no useful keywords, log it as "checked, no signal" — never silently skip. Sources 16 (Google Keyword Planner API), 17 (Semrush MCP), and 18 (DataForSEO API) run when available and enrich the universe with real volume/CPC/KD — but the research must complete fully on Sources 1–15 alone when they're not.

**Source 1 — Competitor on-page targets.** Open the top 5 organic results for each core query (`[service] [city]`, `[service] near me`, head terms). Extract H1, H2s, title tag, meta description, body keyword density. Every exact phrase a competitor optimizes for is a target candidate. Tools: WebFetch (raw HTML), WebSearch (SERP discovery).

**Source 2 — Competitor coverage gaps.** Same 5 competitors: which services are thin or missing? Which locations? Which question topics have no dedicated page? Gaps with proven demand (Source 3, 4, 6) are the highest-leverage targets.

**Source 3 — SERP signals (full SERP scan).** For every core query, observe the entire SERP — organic titles + descriptions, the local pack title row, knowledge panel, image pack labels, video carousels. Every label is a keyword signal. Note which SERP features appear (`local_pack`, `featured_snippet`, `paa`, `image_pack`, `video`, `knowledge_panel`).

**Source 4 — PAA + "People Also Search For".** For every core query, expand the People Also Ask box to at least 8 questions (re-expand to keep loading more) and collect every "People Also Search For" suggestion. These are real questions Google has clustered as related. Capture each verbatim — they map directly to H2/H3 and FAQ targets.

**Source 5 — Rich snippets and featured snippets.** Which queries return a featured snippet? Note format (paragraph / list / table / definition) and the source URL. These are direct content-format opportunities — match the format on your page to compete.

**Source 6 — Forums (Reddit + Quora + niche).** Use Google site-search rather than direct site queries (Reddit blocks most automated WebFetch, Quora is unreliable):
- `WebSearch "site:reddit.com [service] [city]"`
- `WebSearch "site:quora.com [service] [city]"`
- `WebSearch "site:[niche-forum.com] [service]"` (e.g., hvac-talk.com, gardenweb.com, contractortalk.com — pick by niche)
Capture thread titles verbatim. Reddit/Quora question titles surface trust-killer language, real-world phrasing, and long-tail variants that PAA misses.

**Source 7 — Social platforms.** Discovery search across:
- YouTube: `WebSearch "site:youtube.com [service] [city]"` — video titles reveal what real customers search to learn
- Pinterest: `WebSearch "site:pinterest.com [service]"` — pin titles and board names
- TikTok: `WebSearch "site:tiktok.com [service]"` — hashtags and video titles
- Facebook Groups (if relevant): `WebSearch "[city] [service] facebook group"` — discussion topics
Tag each finding `social_[platform]` in the CSV.

**Source 8 — Paid ad headlines.** Run the core queries in an incognito Google search and observe the Google Ads (or use a SERP screenshot tool). Headlines from active advertisers are keyword-optimized by people spending money — they reveal high-commercial-intent variants. Also check `WebSearch "[service] [city] ads"` to surface any ad-copy snippets in cached results.

**Source 9 — Google AI Overviews.** Which queries trigger an AI Overview? Capture the questions the AIO answers and the citations it pulls. AIO-triggering queries have high informational intent and demand AEO/GEO-optimized content. If WebSearch surfaces the AIO block, copy its question framing verbatim.

**Source 10 — AI engines (ChatGPT, Perplexity, Gemini, Copilot, Claude).** Ask each: *"What questions do people ask about [service] in [city]? What are the most common search phrases for this service?"* Capture the language each engine uses — it reveals the semantic/entity model the LLM has built. These phrases are the queries the LLM will surface when users ask similar questions. If direct API access isn't available, query via the web interfaces and screenshot.

**Source 11 — Competitor GBP profiles.** Open the GBP listings of the top 3-5 local-pack winners for the core query. Capture:
- Primary category (exact label)
- Secondary categories
- Service list (every named service)
- Recent post titles and topics
- The **"Ask about this place"** AI answers, where shown — Gemini replaced the Q&A section (API off 2025-11-03, public Q&A phased out from 2025-12-03), and the prompts it surfaces reveal which questions Google treats as salient for that business
GBP categories map to known Google query taxonomies — every category is a high-intent keyword target.

> Do not look for a GBP Q&A section — it no longer exists on any profile. Frozen legacy Q&A may still render on some older listings; treat it as stale, not as current demand signal.

**Source 12 — Customer reviews.** Read 20-30 Google + Yelp + BBB + Nextdoor reviews of competitors AND of the client (if reviews exist). Note:
- Exact phrases customers use to describe the service ("my AC was leaking", "they showed up same day")
- Outcomes customers describe (problem → resolution language)
- Pricing language ("affordable", "fair quote", "too expensive")
Customer phrasing is what people type into Google before they find a business. This is the highest-fidelity long-tail source — it does not get suggested by autocomplete but it ranks.

**Source 13 — GSC query history (proven demand).** Pull the project's `03-gsc/data/queries-*.csv` (whole-site or per-page). Every query with ≥10 impressions in the last 90 days is a **proven** demand signal — Google has already decided to surface the site for this query at least sometimes. Capture:
- Every query verbatim (no paraphrasing)
- Impressions, clicks, CTR, average position
- The current landing URL (if per-page CSV is available)
- Branded vs unbranded split (filter out brand-name queries unless the page is a brand page)

Queries with high impressions + low position (5-30) + no dedicated page = missing-page opportunities. Queries with high impressions + low CTR + good position (1-5) = title/meta rewrite opportunities. This source is the most reliable demand evidence available — it's measured impressions, not estimated volume.

**Source 14 — Autocomplete alphabet-soup mining.** Run autocomplete on Google, Bing, and YouTube for every core seed term. Mine the suggestions exhaustively:

| Suffix probe | Prefix probe |
|---|---|
| `[seed] a`, `[seed] b`, … `[seed] z` (alphabet soup) | `a [seed]`, `b [seed]`, … `z [seed]` |
| `[seed] in [city] a`, `b`, … `z` (location-modified soup) | `[city] a [seed]`, … (less effective but worth one pass) |
| `[seed] [preposition]` — `for`, `with`, `near`, `vs`, `or`, `and`, `under`, `over`, `before`, `after` | — |
| `[seed] [question word]` — `how`, `why`, `when`, `what`, `which`, `where`, `who` | `how [seed]`, `why [seed]`, etc. |
| `best [seed]`, `cheap [seed]`, `affordable [seed]`, `top [seed]`, `local [seed]`, `emergency [seed]`, `same day [seed]`, `24 hour [seed]` | — |

Tools: AnswerThePublic, AlsoAsked, KeywordTool.io free tier, or a manual script that hits `https://suggestqueries.google.com/complete/search?client=chrome&q=[seed]` for each variant. Capture every unique suggestion. Autocomplete reflects real search behavior over the last ~90 days — these are the queries actively being typed.

**Source 15 — Google Trends + seasonality.** For every core service query, pull Google Trends (last 12 months) to determine:
- Seasonal peaks (which months index above 75 vs annual mean)
- YoY trajectory (is interest growing or shrinking?)
- Related rising queries (Google Trends surfaces these directly — they're queries with disproportionate growth in the last 90 days; these are early-trend opportunities)
- Related top queries (the historical top correlated queries)
- Geographic distribution (where the demand is concentrated — confirms / disconfirms the target market)

Rising queries from Trends are the highest-leverage early-mover targets — fewer competitors have optimized for them yet. Capture them with the `gtrends_rising` source tag.

**Source 16 — Google Keyword Planner API (real Google volume + CPC + seasonality).** *Conditional — use when the ads-toolkit is wired for the project.* For this project: `05-google-ads/ads-toolkit/keywords/keyword_planner.py` (see `/keyword-planner`).

- **Ideas mode** — feed the core seeds (and/or money-page URLs) to expand the universe with real-volume variants: `python3 keywords/keyword_planner.py -k "[seed1]" "[seed2]" --csv`
- **Exact mode (validation pass)** — after the universe is assembled from Sources 1–15, batch-validate the top candidates: `--exact --monthly --file seeds.txt --csv`. This replaces estimated volume with real Google volume, fills real CPC (low/high top-of-page bid), and gives per-month seasonality (cross-check Source 15).
- Geo-target the actual market (`--geo "Houston, TX"`, `--geo "Richmond, TX"`) — geo-cut volume beats national numbers for local-service intent.
- Source tag: `gkp`.

**Availability check:** run a 1-keyword `--exact` probe first. If it fails with `invalid_grant`, flag that re-auth is needed (`python3 auth_setup.py`) and **continue without it** — do not block the research. If the toolkit doesn't exist for the client, log "Source 16: not wired" and move on.

**Source 17 — Semrush MCP (keyword difficulty + SERP landscape + related/questions).** *Conditional — use when the Semrush MCP server is connected to the session.* Tools: `mcp__semrush__keyword_research` → `get_report_schema` → `execute_report`.

- `phrase_these` (10 units/line) — batch volume/CPC/competition/KD for the assembled universe (semicolon-separated, `database: us`)
- `phrase_related` (40 units/line) — semantically adjacent expansion beyond exact-phrase variants
- `phrase_questions` (40 units/line) — question-format mining (cross-feeds Source 4)
- `phrase_organic` (10 units/line) — who actually ranks per core query (cross-feeds Source 1)
- **KD (Keyword Difficulty)** is the unique value here — neither Google Keyword Planner nor GSC provides organic ranking difficulty. Feed KD into the Feasibility input of §Prioritization.
- Source tag: `semrush`.

**Availability check:** attempt one cheap `phrase_this` call. If the MCP server is absent, errors, or quota is exhausted, log "Source 17: unavailable — [reason]" and **continue with Sources 1–16**. Semrush enriches but never gates.

**Source 18 — DataForSEO API (live SERP + city-level volume + Maps local pack).** *Conditional — use when credentials are configured.* For this project: `01-research/dataforseo/dfs.py` (see `/dataforseo`); credentials in `06-meta-ads/ads-cli/.env`.

- `volume` — Google Ads volume/CPC at **city level** (Houston, Richmond TX) — second opinion on Source 16, same underlying data
- `ideas` — phrase-match keyword suggestions with volume + KD (Labs; country-level only)
- `kd` — bulk keyword difficulty (0–100, **different scale than Semrush KD** — never mix; tag the tool)
- `serp` — live mobile SERP scrape: organic ranks, PAA verbatim (cross-feeds Source 4), AI Overview presence (cross-feeds Source 9), local pack (cross-feeds Source 11)
- `local` — Google Maps top-20 with the client's position (cross-feeds Source 11 + local pack tracking)
- Source tag: `dfs`. Pay-as-you-go — batch keywords into single calls (up to 1,000/request).

**Availability check:** run `python3 dfs.py balance` (free). If credentials are missing or balance is $0, log "Source 18: unavailable — [reason]" and **continue without it**.

> **Degradation rule (Sources 16–18):** these are *enrichment + validation* sources, not discovery prerequisites. The 15 core sources alone must always produce a complete, usable keyword universe. When 16/17/18 are available, their real volume/CPC/KD numbers **override** estimates from proxies; when unavailable, fall back to the §Commercial Value CPC proxy and the §Prioritization volume estimation exactly as before. Volume precedence when multiple report: Source 16 (first-party Google, geo-cut) → 18 → 17.

---

## Source Coverage Quality Gate

Before writing the CSV, verify every source has been touched:

| Source | Minimum keyword contribution |
|---|---:|
| 1 — Competitor pages | 20 |
| 2 — Competitor gaps | 5 |
| 3 — SERP signals | 10 |
| 4 — PAA + People Also Search | 25 |
| 5 — Rich snippets | 5 |
| 6 — Forums (Reddit/Quora/niche) | 15 |
| 7 — Social platforms | 10 |
| 8 — Paid ad headlines | 10 |
| 9 — AI Overviews | 5 |
| 10 — AI engines (ChatGPT/Perplexity/Gemini) | 15 |
| 11 — Competitor GBP | 15 |
| 12 — Reviews | 15 |
| 13 — GSC query history | 25 (or all queries ≥10 imps) |
| 14 — Autocomplete alphabet soup | 40 |
| 15 — Google Trends rising + top queries | 10 |
| 16 — Google Keyword Planner API (conditional) | 30 ideas-mode keywords when wired; 0 with logged reason otherwise |
| 17 — Semrush MCP (conditional) | 20 related/question keywords when connected; 0 with logged reason otherwise |
| 18 — DataForSEO API (conditional) | 20 suggestion keywords + SERP cross-checks when configured; 0 with logged reason otherwise |
| **Total minimum** | **225** (Sources 1–15 alone — 16/17/18 don't count toward the gate) |

**Minimum output: 400 unique keywords** for a business with 5+ services and 3+ locations (250 if smaller scope). If a source returns less than its minimum, document why in the notes column of the CSV. A source returning 0 must have a reason logged — never just "skipped".

---

## Intent Classification

Every keyword gets exactly one primary intent. See `references/intent-classification.md` for the full framework. Allowed values:

- **transactional** — ready to hire / buy / book ("ac repair Houston near me")
- **commercial** — comparing options before buying ("best HVAC company Houston", "AC repair cost")
- **informational** — learning, not ready to buy ("how does a capacitor work")
- **problem** — problem-aware, diagnostic-seeking ("AC blowing warm air")
- **local** — geographically-qualified umbrella ("HVAC contractor 77407")
- **navigational** — searching for a specific business ("75 Degree AC reviews")

Multiple intents may apply — pick the dominant one for page assignment and note the secondary in the `notes` column.

---

## SERP Feature Tagging

For every keyword that has been verified on a live SERP (any source 1-9), tag the SERP features observed:

`local_pack`, `featured_snippet_paragraph`, `featured_snippet_list`, `featured_snippet_table`, `paa`, `image_pack`, `video_carousel`, `knowledge_panel`, `ai_overview`, `none`, or `multiple`

The SERP-feature tag drives content format decisions downstream (list snippet → numbered list on page; table snippet → comparison table; paragraph → answer-first 40-60 words).

---

## GSC-Grounded Opportunity Analysis

If GSC data is available (`03-gsc/data/queries-*.csv`):

**Opportunity Score formula:** `score = impressions × (1 / position)`
- Position 10 query with 500 impressions → score 50
- Position 30 query with 1,000 impressions → score 33
- Higher score = higher quick-win potential

**Quick-win identification:**
- Position 5-15 with >100 impressions, page already exists → **on-page optimization** (re-write title, expand content, add FAQ, improve schema)
- Position 16-50 with >200 impressions, page exists → **content refresh or rewrite**
- Position >50 with >100 impressions, no page exists → **create new page**
- Position 1-4 with high impressions and low CTR → **title/meta tag CTR fix**

Pull these into a Quick-Win Priority list (top 10-20) in the output `.md` file.

---

## Cannibalization Detection

Two pages should never share the same primary keyword.

**Detection process:**
1. For every keyword in the CSV, grep `03-gsc/data/queries-by-page.csv` (if available) for that exact query
2. If two or more URLs return impressions for the same query, flag as **suspected cannibalization**
3. Score each candidate URL by impressions × inverse position × content depth
4. Designate the highest-scoring URL as **canonical for that keyword**
5. For each non-canonical URL: either differentiate to a sub-keyword, redirect to canonical, or noindex

**Cannibalization output:** Add a `cannibalization-[date].md` file alongside the keyword CSV with:
- Detected clusters (keyword + URLs)
- Recommended canonical URL per cluster
- Per-non-canonical fix (differentiate / redirect / noindex)
- Internal-linking corrections needed

If GSC data is unavailable, run cannibalization detection on the client's sitemap + visible H1 tags — match URLs whose H1/title target the same primary keyword.

---

## Voice Search Variant Generation

For every transactional or commercial keyword in the universe, generate the voice-search conversational variant. Voice queries are ~30% longer than typed queries and use natural phrasing.

**Variant rules:**

| Typed form | Voice form |
|---|---|
| `[service] [city]` | `Where can I find [service] near me?` |
| `[service] cost` | `How much does [service] cost?` |
| `emergency [service]` | `Who can I call for emergency [service] right now?` |
| `[service] open now` | `What [service] places are open right now?` |
| `[service] reviews` | `What's the best [service] in [city]?` |
| `[problem]` | `Why is my [thing] [problem state]?` |

Tag voice variants with `voice_variant: yes` in the CSV. Pages targeting voice variants should structure content with conversational H2s + speakable schema sections.

---

## Speakable Opportunity Flag

For each keyword, determine if its target page should include `speakable` schema (Google Assistant voice answer pipeline). Speakable opportunities:

- Featured-snippet-targeting paragraph content
- FAQ-format Q&A (40-60 word answers)
- Definition queries (the page's intro defines the term)
- Voice variants (per above)
- Local information queries ("[service] hours", "[business] phone number")
- "How long does [process] take" style queries

Tag eligible keywords with `speakable_eligible: yes` in the CSV. The brief writer uses this to know where to add `<div class="speakable">` sections + Speakable schema.

---

## AI Overview Citation Reverse-Engineering

For every query that triggers an AI Overview (Source 9), capture not just the question framing but the **citation sources** — which domains/URLs Google's AIO surfaces as evidence.

**Process:**

1. Trigger the AIO for the query (fresh incognito search)
2. Click "Show more" / expand citation links
3. List every cited URL + domain
4. Note position in the citation list (top 3 carry highest authority signal)
5. Categorize each domain: competitor / authority site (Wikipedia, gov, edu) / aggregator (Yelp, Foursquare) / forum (Reddit, Quora) / news / video (YouTube) / other

**Output:**
- A `aio-citations.csv` capturing query → cited URLs → domain → category
- A ranked "AIO citation magnet" list — domains cited across multiple queries are the entities to compete with at the AI layer
- Reddit threads cited by AIO are gold — engagement opportunity for `/reddit-draft`
- YouTube videos cited by AIO suggest topics for the client's YouTube channel (Source 7 + entity-research 0.737 correlation)

This source materially improves the keyword universe because each AIO-cited URL is a topical heading-matrix candidate — replicate the structure on the client's page to compete for the same citation slot.

---

## Topical Relevance Score

For every keyword, score 0–10 how topically relevant it is to the business's core service entity. Use entity similarity (from `entity-extraction` Step 6 relationship map) + semantic field overlap.

| Score | Meaning |
|---|---|
| 9–10 | Core service exact match |
| 7–8 | Same service category, different angle (e.g., "ac repair" vs "ac maintenance" for an HVAC company) |
| 5–6 | Adjacent service the business offers but doesn't lead with |
| 3–4 | Industry-related but tangential |
| 1–2 | Off-topic for this business |

Keywords scoring <5 are de-prioritized regardless of volume — chasing off-topic keywords dilutes topical authority. Tag every keyword with `topical_relevance` 1–10 in the CSV.

---

## Commercial Value $ Tier

Estimate commercial value beyond intent classification. **Preference order for the CPC number:** (1) real Google Keyword Planner API high-top-of-page bid (Source 16), (2) DataForSEO city-level CPC (Source 18), (3) Semrush CPC (Source 17), (4) competitor ad copy + manual estimation as proxy. When 16/17 ran, the tier must be based on their real numbers — never keep a proxy estimate that real data contradicts.

| Tier | CPC range (US local service avg) | Use case |
|---|---|---|
| `cv_tier_1` | $20+ CPC | Emergency + transactional keywords with high LTV (HVAC emergency repair, plumbing emergency, legal personal injury) |
| `cv_tier_2` | $8-20 CPC | Standard transactional service keywords |
| `cv_tier_3` | $3-8 CPC | Commercial investigation, comparison, pricing queries |
| `cv_tier_4` | $1-3 CPC | Informational, top-of-funnel, light commercial |
| `cv_tier_5` | <$1 CPC | Pure informational, broad informational |

The CV tier informs cluster priority — a `cv_tier_1` keyword at position 11-30 has much higher quick-win ROI than a `cv_tier_4` keyword at position 5. Tag every keyword with the tier in the CSV.

---

## Prioritization Formula

`Priority = (Relevance × Intent × Feasibility × Volume)^0.25`

Each input scored 1-10:
- **Relevance** — 10 = exact match to a core service, 1 = adjacent or off-topic
- **Intent** — 10 = transactional ready-to-hire, 5 = commercial investigation, 1 = pure informational
- **Feasibility** — 10 = already ranking 1-10, 5 = page exists at position 11-30, 1 = no page yet. When Semrush KD is available (Source 17), blend it in: KD <30 nudges feasibility up 1-2 points, KD >70 nudges down 1-2 points
- **Volume** — 10 = 1,000+/mo, 5 = 100-1,000/mo, 1 = <10/mo. Use real geo-targeted volume from Google Keyword Planner (Source 16) when available, else Semrush volume (Source 17), else estimate by GSC impressions, autocomplete frequency, and forum thread count

**Action tiers:**
- Score >6 → priority 1 (launch / first 30 days)
- Score 4-6 → priority 2 (first 90 days)
- Score 2-4 → priority 3 (expansion / month 4+)
- Score <2 → priority 4 (backlog)

---

## Output Files

### Whole-site keyword research

**Path:** `01-research/keywords-research.md` + `01-research/keywords-research.csv`

### Per-page keyword universe (when invoked from `/deep-research`)

**Path:** `01-research/page-research/[slug]/01-keyword-universe.csv`

### CSV schema (canonical — used by `/deep-research`, `/content-brief`, page-tracker)

```
query,source,intent,funnel_stage,local_modifier,urgency,head_or_long_tail,commercial_value,cv_dollar_tier,gsc_imps,gsc_position,gtrends_signal,serp_features,topical_relevance,voice_variant,speakable_eligible,aio_cited_domains,target_page_slug,priority,notes,gkp_volume,gkp_cpc_high,semrush_kd
```

The last three columns are enrichment from Sources 16–17 — leave empty when those sources are unavailable (downstream consumers must tolerate empty values).

| Column | Allowed values |
|---|---|
| `query` | The keyword phrase, lowercased, no quotes |
| `source` | Source tag(s) from §Research Process. Pipe-separated if multi-sourced: `gsc\|paa\|reddit\|autocomplete\|gtrends_rising\|gkp\|semrush` |
| `intent` | `transactional` / `commercial` / `informational` / `problem` / `local` / `navigational` |
| `funnel_stage` | `awareness` / `consideration` / `decision` / `retention` |
| `local_modifier` | `yes` / `no` (is a city/neighborhood/ZIP attached?) |
| `urgency` | `emergency` / `same_day` / `scheduled` / `none` |
| `head_or_long_tail` | `head` (1-2 words) / `mid` (3-4 words) / `long_tail` (5+ words) |
| `commercial_value` | `high` / `medium` / `low` (qualitative) |
| `cv_dollar_tier` | `cv_tier_1` / `cv_tier_2` / `cv_tier_3` / `cv_tier_4` / `cv_tier_5` (CPC proxy) |
| `gsc_imps` | Integer (empty if no GSC data for this query) |
| `gsc_position` | Float (empty if no GSC data) |
| `gtrends_signal` | `rising` / `stable` / `declining` / `seasonal_peak_[months]` / empty |
| `serp_features` | From §SERP Feature Tagging |
| `topical_relevance` | Integer 1–10 per §Topical Relevance Score |
| `voice_variant` | `yes` / `no` (is this a voice-conversational phrasing?) OR the corresponding voice variant text |
| `speakable_eligible` | `yes` / `no` per §Speakable Opportunity Flag |
| `aio_cited_domains` | Pipe-separated domains AIO cites for this query (when AIO triggers); empty otherwise |
| `target_page_slug` | Suggested page slug for this keyword (e.g., `/ac-repair-houston/`) |
| `priority` | `1` / `2` / `3` / `4` per §Prioritization |
| `notes` | Free text — secondary intent, source caveats, cannibalization flags |
| `gkp_volume` | Integer — real geo-targeted avg monthly searches from Google Keyword Planner (Source 16); empty if unavailable |
| `gkp_cpc_high` | Float USD — high top-of-page bid from Keyword Planner (Source 16); empty if unavailable |
| `semrush_kd` | Integer 0–100 — Semrush Keyword Difficulty (Source 17); empty if unavailable |

### Markdown narrative (`.md` companion)

The `.md` file is the strategy document. Required sections:

1. **Source coverage report** — table of all 15 sources with keyword counts and any "checked, no signal" notes
2. **Primary keyword targets (top 10-15)** — with intent, SERP features, opportunity score, target page
3. **Long-tail keyword clusters by service hub** — group all long-tails under each service H2
4. **Local keyword strategy** — city + service combos, neighborhood-level, "near me" strategy, ZIP targeting
5. **Question-keyword shortlist** — every PAA / Reddit / Quora question pulled, mapped to FAQ or H3 targets
6. **Voice search variants** — voice-conversational phrasings + which target pages they belong on
7. **Speakable opportunity list** — keywords flagged `speakable_eligible` + where speakable schema sections should go
8. **Seasonal keyword calendar** — from Source 15: which keywords peak in which months, YoY trajectory, rising queries
9. **Quick-win priority list (GSC-grounded)** — top 10-20 from the Opportunity Score formula
10. **Cannibalization map** — every detected cluster + canonical-URL recommendation
11. **Competitor gap shortlist** — keywords competitors rank for that the client should target
12. **AIO citation reverse-engineering report** — every AIO query + citation sources + competitive analysis of which domains compete for AIO real estate
13. **AEO/GEO-priority keywords** — every keyword tagged with `featured_snippet` or `ai_overview` SERP feature (these need answer-first content + schema)
14. **Rising queries from Google Trends** — early-mover opportunities
15. **Commercial value tier breakdown** — count of keywords per `cv_tier_*`; ROI prioritization recommendation

---

## Quality Standards (pre-finalization checklist)

- [ ] All 15 core sources have been touched. Sources with 0 contribution have a logged reason.
- [ ] Sources 16 (Google Keyword Planner) + 17 (Semrush MCP) + 18 (DataForSEO) availability-checked; if available, top transactional/commercial keywords have real volume + CPC (+KD) filled; if not, unavailability reason logged — research proceeds regardless.
- [ ] Minimum 400 unique keywords (250 if scope is small).
- [ ] Every keyword has a `source` tag — no blanks.
- [ ] Every keyword has an `intent` classification.
- [ ] Every keyword has a `target_page_slug` (no orphaned keywords).
- [ ] No two pages share the same primary keyword (cannibalization gate).
- [ ] Every high-priority transactional keyword has a verified SERP-feature tag from a live web check.
- [ ] Every PAA / Reddit / Quora question is captured verbatim (these become FAQ + H3 targets).
- [ ] GSC quick-win list has at least the top 10 entries scored.
- [ ] Autocomplete alphabet-soup mining run for every core seed term (Source 14)
- [ ] Google Trends signals captured: at least the seasonal peak months + any rising queries (Source 15)
- [ ] AIO citation reverse-engineering performed for every AIO-triggering query
- [ ] Voice search variants generated for every transactional + commercial keyword
- [ ] `speakable_eligible` flag set for every keyword on the spec
- [ ] `topical_relevance` 1-10 scored for every keyword; any <5 has a justification or is dropped
- [ ] `cv_dollar_tier` set for every transactional + commercial keyword
- [ ] Source coverage report is filled in at the top of the `.md` file.
- [ ] If invoked from `/deep-research`, output is at `01-research/page-research/[slug]/01-keyword-universe.csv`.

---

## Anti-Patterns

- ❌ Skipping any of the 15 core sources without logging a reason
- ❌ Blocking or failing the research because Source 16 (Keyword Planner), 17 (Semrush), or 18 (DataForSEO) is unavailable — they enrich, never gate
- ❌ Keeping proxy CPC/volume estimates when real Source 16/17/18 data contradicts them
- ❌ Mixing DataForSEO KD and Semrush KD as if they share a scale — they don't; always tag the tool
- ❌ Using only autocomplete + GSC (this is the most common failure mode — produces shallow, repetitive lists)
- ❌ Inventing keywords or paraphrasing PAA/Reddit/Quora questions (capture verbatim or skip)
- ❌ Assigning a target_page_slug that doesn't exist and isn't planned (every assignment is a real or planned URL)
- ❌ Hardcoding client-specific data (service lists, competitor URLs, GSC numbers) into this skill — read from project files at run-time
- ❌ Producing the CSV before the `.md` strategy document — they're written together, not sequentially
- ❌ Treating the keyword list as final without the cannibalization sweep

---

## How `/deep-research` consumes this skill

When invoked from `/deep-research` as Phase 2, this skill outputs:
- `01-research/page-research/[slug]/01-keyword-universe.csv` (the per-page CSV)
- The 12-source breakdown gets summarized into `00-research-pack.md` §2 "Top 5 Keyword Targets" and §3 "Top 10 Questions to Answer"
- Questions from Source 4 (PAA), 6 (forums), 10 (AI engines), and 12 (reviews) feed `02-question-mine.md` in the same research-pack folder

The keyword CSV is the source of truth for the page brief's keyword targets and the page-tracker spreadsheet — everything downstream depends on this skill's output being complete.
