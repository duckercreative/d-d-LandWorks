---
description: Upstream 10-phase research pack — keywords + questions + entities + top-10 competitors + intent + AI citations + Houston signals + 20-point gap analysis. Required before /content-brief.
argument-hint: [page-url-or-slug]
---

Run the full deep-research methodology defined in `.claude/skills/deep-research/SKILL.md` for: $ARGUMENTS

**Target page**: $ARGUMENTS
**Output folder**: `01-research/page-research/[slug]/` (create if missing)

## Hard Rules (non-negotiable)

- Run **all 10 phases**. Don't skip Phase 5 (top 10 competitors) for time — the differentiators hide in positions 4-10.
- Use **real HTTP fetches** for everything. Never trust WebFetch summaries. Curl raw HTML and parse it yourself.
- For each competitor, extract the **exact** H1/H2/H3 — these become the heading-frequency matrix.
- For each question source (Reddit, Quora, HVAC-Talk, etc.), capture **real questions**, not paraphrases.
- Tag every keyword with intent + funnel-stage + local-modifier + urgency + commercial-value.
- Tag every question with category (pre-call / cost / process / decision / post-service / failure-mode / houston-specific / objection).
- Verify all Houston/TX/federal authority signals are **current as of today** (do not cite expired 25C tax credit or unlaunched HEEHRA).
- For the 20-point gap framework, score each gap on Coverage / Difficulty / Conversion impact.

## Workflow

**Phase 1 — Scope & Baseline**
- `curl -sI` and `curl -sL` the target URL — capture current state (status, word count, title, meta, H1, schema, indexability)
- Grep `03-gsc/data/queries-by-page.csv` for this URL — record current rank, impressions, CTR for every query
- Read `01-research/competitors/top-players.md` for the relevant cluster
- Read `02-site-architecture/page-tracker.csv` row for this URL
- Note any cannibalization risk (other URLs ranking for the same primary query)

**Phase 2 — Keyword Universe**
Run all 15 sources from `keyword-research/SKILL.md` v2.1 → minimum 400 keywords (per-page minimum 200) → save as `01-keyword-universe.csv` with the full v2.1 schema columns: query, source, intent, funnel_stage, local_modifier, urgency, head_or_long_tail, commercial_value, **cv_dollar_tier**, gsc_imps, gsc_position, **gtrends_signal**, serp_features, **topical_relevance**, **voice_variant**, **speakable_eligible**, **aio_cited_domains**, target_page_slug, priority, notes.

**Phase 3 — Question Mine**
Run all 15 question sources from SKILL.md → minimum 50 questions → save as `02-question-mine.md` with categorization (pre_call, cost, process, decision, post_service, failure_mode, houston_specific, objection). Quality bar: ≥8 houston_specific, ≥5 objection-type.

**Phase 4 — Entity Mapping** (uses the full upgraded entity skill chain)
- Run `entities-research` v2.0 — 14 Koray sources + **Source 14a (local PR/news 6.5× AIO multiplier)**
- Run `entity-extraction` v2.0 on every top-10 competitor page from Phase 5 to build the cross-competitor entity co-occurrence matrix
- Run `entity-validate` v2.0 on every discovered entity before adding to inventory (Wikidata SPARQL + Google KG + AI engine cross-check; flags AMBIGUOUS / WRONG_TYPE / NOT_FOUND)
- Layer A: manufacturer brand + at least 1 specific model each
- Layer B: component/parts entities
- Layer C: certification/authority entities
- Layer D: co-occurrence frequency (across Phase 5 top 10) — entities present on ≥7/10 are mandatory co-occurrence
- Layer E: Wikidata Q-numbers for sameAs schema + areaServed `City` objects (use structured form, not bare strings)
- Layer F: AI engine recognition baseline (25-cell matrix: ChatGPT/Perplexity/Gemini/Copilot/Claude × 5 prompts) — re-measured quarterly
- Layer G: NAP 5-field harmonization check (name/address/phone/hours/description) against business-info.md
Save as `03-entity-map.md`. Also export `01-research/page-research/[slug]/entity-inventory.csv` for downstream `/content-brief` and `/schema-generate`.

**Phase 5 — Competitor Deep Dive (Top 10)**
For each top-10 organic result:
- Real word count (BeautifulSoup body extraction, not raw HTML)
- Full H1/H2/H3 list (in order)
- FAQ questions (exact text)
- Schema @types deployed
- Internal/external link counts + targets
- Image count + alt patterns
- Author/byline signals
- Pricing approach
- CTA pattern
- Unique sections

Build Matrix A (heading frequency), Matrix B (FAQ frequency), Matrix C (schema deployment). Save as `04-competitor-matrix.md`.

**Phase 6 — User Intent Triangulation**
Sources: competitor Yelp/Google 1-3 star reviews, BBB complaints, Nextdoor Houston, Reddit insurance forums, TREC inspection report templates, home-warranty FAQs, Houston Chronicle/ABC13 archives, manufacturer service bulletins, YouTube negative comments.

Build 3 tables: Pain Points / Decision Triggers / Trust Killers. Save as `05-intent-triangulation.md`.

**Phase 7 — AI Citation Audit**
Query 6 AI systems: ChatGPT (browsing), Perplexity, Gemini, Claude.ai (web), Bing Copilot, Google AI Overviews. Document answer, citations, factual gaps, missing local context. Draft the 40-60 word AI-citation-ready block. Save as `06-ai-citation-audit.md`.

**Phase 8 — Houston Authority Signals**
Pull current data from: CenterPoint rebates, DOE SEER2 for Texas south region, Houston permitting, TDLR license records, NOAA Houston climate normals, ENERGY STAR rebate finder ZIP 77092, AHRI directory, EPA refrigerant transition. Document exact $ / SEER / dates. Save as `07-houston-authority.md`.

**Phase 9 — 20-Point Gap Framework**
Score each of the 20 gaps on Coverage (0-10), Difficulty (1-5), Conversion impact (1-5). Order by `(10 - coverage) × conversion_impact / difficulty`. Top 5 = the page's main differentiators. Save as `08-gap-analysis.md`.

**Phase 10 — Master Synthesis**
Compose `00-research-pack.md` with all 12 required sections from SKILL.md. End with the quality checklist (all 9 items must check ✅ before pack is "done").

## On Completion

- Print: `Research pack complete: 01-research/page-research/[slug]/00-research-pack.md`
- Print: top 5 keyword targets, top 5 gaps, top 3 differentiators
- Print: "Next: `/content-brief $ARGUMENTS`"
- Do NOT auto-invoke `/content-brief` — user reviews the pack first

## Hand-off Spec

The pack must be self-contained enough that the `/content-brief` command can produce a complete brief without re-doing any research. If `/content-brief` needs to fetch anything beyond business-info.md / services-list.md / service-areas.md, the pack is incomplete — go back and finish it.
