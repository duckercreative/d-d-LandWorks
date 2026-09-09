# Skills — Methodology Docs

Skills live at `.claude/skills/[name]/SKILL.md` — each contains benchmarks, process steps, quality standards, and client-specific data that agents read as methodology guide.

## Core SEO

| Skill | What It Contains |
|-------|-----------------|
| `local-seo` | GBP optimization, NAP consistency, citation audit, 35-directory checklist, reviews, location pages |
| `on-page-seo` | Title/meta formulas, H1 standards, keyword placement, WordPress/Rank Math steps |
| `technical-seo` | noindex fix workflow, robots.txt AI crawler list, CWV targets, schema validation, llms.txt, IndexNow |
| `schema-markup` | JSON-LD templates for all page types, HVACContractor, FAQ/Service/AggregateRating |
| `keyword-research` | **v2.1** — 15 sources (competitors, SERP, PAA, forums, social, ads, AIO, AI engines, GBP, reviews, GSC history, autocomplete alphabet-soup, Google Trends, rich snippets, competitor gaps), voice variant generation, speakable flag, AIO citation reverse-engineering, topical relevance score, CPC $ tier. **Project-agnostic.** |
| `keyword-clustering` | **v2.0 project-agnostic** — Architecture Boundary, 5-pass merge detection (cannibalization/semantic/SERP/intent/hub-spoke), doorway-page risk filter, cluster validation thresholds, cluster priority formula |
| `ai-visibility` | AI crawler access (14 bots/3 tiers), llms.txt, AI citability scoring, AIO, voice search |
| `topical-map` | Hub-and-spoke architecture for 7 clusters, content gaps, build priority |
| `entity-seo` | 75°AC-specific strategy doc — sameAs queue (YouTube 0.737 AI citation, Foursquare 60-70% ChatGPT), Knowledge Panel timeline, Wikidata property depth, knowsAbout, Kenny Ho Person ecosystem. Pairs with the generic methodology skills below. |
| `entities-research` | **v2.0 project-agnostic** — Koray 14-source + **Source 14a (local PR/news 6.5× AIO multiplier)**, AI citation correlation data, 25-cell AI engine recognition matrix, Wikidata property depth table, Apple Maps + Bing Places, 14+ sameAs target |
| `entities-mapping` | **v2.0 project-agnostic** — salience scoring math, hub-spoke entity inheritance, entity drift detection, `@id` registry, areaServed Wikidata Q-ID rule, brand placement matrix, Person `@id` consistency |
| `entity-extraction` | **v2.0 (new)** — per-page entity audit. 11-type taxonomy, salience scoring formula, KG alignment, schema-vs-content gap detection, co-occurrence pattern detection. Runs per page; feeds entities-mapping. Project-agnostic. |
| `entity-validate` | **v2.0 (new)** — Wikidata SPARQL + Google KG API + Wikipedia + GBP categories + AI engine recognition cross-check. Validation gate used by entities-research, entities-mapping, content-briefs, schema-generate. Per-entity-type rules, disambiguation tables (Richmond TX/VA), 12 status values. Project-agnostic. |
| `internal-linking` | PageRank distribution, hub-spoke rules, anchor diversity (30% exact max) |
| `site-architecture` | URL structure, page hierarchy, page-tracker CSV, schema assignments |
| `competitor-analysis` | Research framework, GBP comparison, keyword gap, positioning matrix |
| `backlink-strategy` | 3-tier targets, manufacturer directories, Houston local links, outreach templates |
| `cro-strategy` | HVAC phone conversion, mobile-first CRO, trust signals, form optimization |

## Content

| Skill | What It Contains |
|-------|-----------------|
| `deep-research` | 10-phase upstream research pack (REQUIRED before content-briefs) |
| `content-briefs` | Page-level specs: H1, H2s, keywords, FAQs, CTAs, schema, E-E-A-T |
| `content-generation` | 5-Point Human Test, E-E-A-T signal counts, banned phrases (50+), HVAC templates |
| `humanizer` | Final-pass rewrite. 29 Wikipedia AI tells, burstiness/perplexity audit, Tier-1/2/3 AI vocab swap, voice + specificity injection. MANDATORY before any prose ships. See `.claude/skills/humanizer/SKILL.md` |
| `content-strategy` | E-E-A-T framework, AI citability scoring, page templates, banned phrases |
| `content-calendar` | 4-phase publishing plan, hub-before-cluster, Houston seasonal timing |
| `market-research` | Houston HVAC market, 4 buyer personas, seasonality |

## GBP & Local

| Skill | What It Contains |
|-------|-----------------|
| `gbp-posting` | Post templates by season, 20-entry canonical answer bank, photo calendar, automation workflow |
| `gbp-review-reply` | Human-first review reply — banned AI phrases, opener rotation, length rules |
| `review-strategy` | Generation SMS/email templates, response framework, AggregateRating schema |
| `analytics-setup` | GA4 events (phone_click, form_submit), CallRail, UTM, conversion tracking |
| `seo-monitoring` | Weekly/monthly/quarterly cadence, alert playbooks, KPI targets |

## Google Ads

| Skill | What It Contains |
|-------|-----------------|
| `google-ads-strategy` | 5-campaign structure, 3-phase bidding, budget split, TX seasonality, LSA |
| `google-ads-keywords` | 6 intent categories, match types, negatives architecture, TX high-value KWs |
| `google-ads-copy` | RSA formulas, descriptions, extensions, landing page CRO, QS optimization |

## Social

| Skill | What It Contains |
|-------|-----------------|
| `quora-engagement` | 6-cluster intent taxonomy, 5-Point Human Test, banned phrases, velocity caps |
| `pinterest-engagement` | 7-cluster intent, 5-Point Pin Test, title/desc/alt formulas, UTM rules, KIE brief |
| `reddit-engagement` | 6-cluster intent, 4-cluster sub taxonomy, 9:1 self-promo, 5-phase rollout, 13 guards |
