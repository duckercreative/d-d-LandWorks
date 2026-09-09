---
name: ai-visibility
description: >
  GEO (Generative Engine Optimization) and AI visibility methodology for
  75 Degree AC (Houston HVAC) and HVAC contractors. Covers the 2026 AI bot
  taxonomy (training / retrieval / agentic / preview / stealth), robots.txt
  rules for GPTBot / ClaudeBot / PerplexityBot / OAI-SearchBot, llms.txt +
  llms-full.txt build specs, AI Overview (AIO) targeting, AI citation
  correlation data, per-platform optimization (ChatGPT / Perplexity / Gemini
  / Copilot), brand SERP and Knowledge Panel building, 3-pipeline voice
  search (Google / Siri / Alexa), agentic browser (Atlas, Comet, Mariner)
  accessibility-tree requirements, and emerging standards (RSL, MCP,
  Cloudflare). Use whenever the user mentions AI visibility, AI Overviews,
  AIO, ChatGPT citations, Perplexity, Gemini, Copilot, GEO, llms.txt,
  robots.txt for AI bots, agentic browser, voice search, Knowledge Panel,
  brand SERP, or AI crawler audit — even without naming a platform. Pair
  with `technical-seo` for crawler implementation and `entity-seo` for
  Knowledge Panel work.
version: 2.0.0
client: 75 Degree AC
last_updated: 2026-05-11
---

# AI Visibility — 75 Degree AC

## Why AI Visibility Matters Now

AI Overviews appear in **20–35% of local service queries** (2025). ChatGPT, Perplexity, Gemini, and Copilot are rapidly becoming "first port of call" for purchase decisions. For HVAC in Houston:
- "best ac repair houston" — may trigger AI Overview or AI assistant response
- "emergency hvac repair houston tx" — high AI response probability
- "how much does ac repair cost in houston" — extremely high AI Overview probability

If 75 Degree AC isn't cited in these AI answers, competitors who ARE cited will capture a growing share of searches before the user even reaches Google's organic results.

### AI Citation Correlation Data (2025)

| Platform Signal | AI Citation Correlation |
|---|---|
| YouTube channel with relevant content | **0.737** (highest) |
| Wikipedia/Wikidata entity | 0.654 |
| Answer-first content structure | 0.580 |
| FAQPage schema | 0.551 |
| Social media presence (Facebook, LinkedIn) | 0.512 |
| Yelp listing with reviews | 0.489 |
| BBB listing | 0.401 |

---

## The 12-Point AI Citation Filter (validated 2026-05-22)

**Mandatory consultation:** `01-research/competitors/ai-citation-filter.md` §1. Every money page must score ≥10/12. The filter is the unifying gate across `content-briefs`, `content-generation`, `schema-markup`, `on-page-seo`, and this skill.

| # | Requirement | Source |
|---|---|---|
| 1 | HVACBusiness or Plumber schema (not generic LocalBusiness) | Top 3 schemas for local AEO (2026) |
| 2 | AggregateRating with ratingValue + reviewCount | AI engines extract as verbatim facts |
| 3 | Service schema with areaServed + offers | Top 3 local AEO schemas |
| 4 | Person schema (Kenny Ho) with sameAs → LinkedIn | Microsoft Copilot entity resolution; 38% citation lift in 90 days (40-site study) |
| 5 | License (TACLA72152E) visible in HTML body | E-E-A-T + Houston/Texas regulator trust signal |
| 6 | Founding year + foundingDate in schema | Tenure as verifiable entity fact |
| 7 | Direct-question H2s with answer-first 40-90w blocks | 4.2× citation rate (Authoritas) |
| 8 | FAQPage schema attached | 30-40% lift in ChatGPT source selection (Authoritas) |
| 9 | ≥3 verifiable trust badges (BBB, awards, manufacturer auth) | Cross-platform EEAT (Perplexity) |
| 10 | dateModified + datePublished visible + in schema | Freshness signal AI engines weight |
| 11 | sameAs links (GBP, BBB, Yelp, FB, LinkedIn, Wikidata) | Entity resolution |
| 12 | Houston-specific content (climate, neighborhoods, CenterPoint, NOAA) | Topical authority |

**Bonus signals (above the 12):** Original research / proprietary data block → 3.7× Perplexity citation multiplier · Comprehensive schema rollout → 38% median citation lift in 90 days · Comparison tables with verifiable data → significantly higher citation rate.

---

## Validated AI Citation Channels 2026 (5W Citation Source Index — 680M citations analyzed)

The top-10 organic → AI citation overlap dropped from 76% → 17-38% in 18 months (Ahrefs). Google now uses query fan-out and draws from a much wider pool. The validated channels and our action items:

| Channel | Citation share | 75 Degree AC action |
|---|---|---|
| **Reddit** | ~40% of all AI citations | Largest single leverage point. Prioritize r/HVAC + r/houston + r/HomeImprovement contributions per the `reddit-engagement` skill — every brand-mention citation is harvestable. |
| **Wikipedia** | 26-48% of ChatGPT top-10 | Wikipedia entry creation is gated on notability (unlikely for HVAC contractor in 2026); pursue **Wikidata entry** (lower bar — validated as Truth Node for Google KG + ChatGPT training) |
| **YouTube** | #1 most-cited AI domain (34% growth in 6 months) | Build YouTube channel — per-service explainers, per-suburb walkthroughs, technician intros. Videos rank for sub-queries via fan-out even when not in organic top 100. |
| **Forbes / Business Insider** | High ChatGPT weight | PR placement target (long-term) |
| **Foursquare** | 60-70% of ChatGPT local recs | **Claim Foursquare listing immediately** — single highest-leverage local-business action we haven't done |
| **ThreeBestRated** | 24% of ChatGPT local business directory citations | Apply for ThreeBestRated Houston inclusion |
| **Listicle/ranking pages** | 21.9% of AI Mode citations (largest format) | Build own listicle hub at `/blog/best-ac-repair-houston/` per `topical-map` skill — **with transparent-methodology gate** (see Listicle Content Route below) |

### Platform-specific citation preferences

| Engine | Prefers |
|---|---|
| ChatGPT | Wikipedia · Reddit · Forbes · Business Insider · listicles |
| Perplexity | Primary research portals · niche B2B authorities · original data · expert quotes |
| Gemini | Official brand websites · Google Business Profile · structured local pages |
| Claude | Legacy journalism (NYT, Atlantic, New Yorker, Economist) |
| Microsoft Copilot | LinkedIn entity resolution · structured professional data |

### Retrieval mechanism per engine (where pages are actually pulled from)

Sourcing preferences are downstream of retrieval. Optimizing for all six surfaces means covering every retrieval path below — not just chasing the source list above.

| Engine | Primary retrieval index | What this means in practice |
|---|---|---|
| Google AI Overviews / AI Mode | Top-10 organic + passage indexing | Must rank top-10 for the primary keyword + 40–60w citation paragraph after H1 + schema |
| ChatGPT / SearchGPT | Bing index + frequently-cited sources | Page must be indexed in Bing Webmaster Tools + structured + authoritative |
| Perplexity | Citation-first multi-source | Inline citations + recent dates + original data + structured passages |
| Gemini | Google index + Knowledge Graph | Entity stitching via sameAs network + schema + GBP coupling |
| Microsoft Copilot | Bing index | Bing Webmaster signals + structured data |
| Claude | Brave search index | Standard SEO + depth + specificity (Brave indexes from Common Crawl + open web) |

**Practical six-surface coverage checklist:** rank Google top-10 · indexed in Bing Webmaster · verified in Brave Search Console · ≥10/12 on AI citation filter · Person + Organization schema with full sameAs network · `dateModified` within last 90 days. Hit all six and the page is reachable across every major AI surface.

---

## Listicle Content as AI Citation Route

**Where this fits:** when `/deep-research` Phase 9 Flag A surfaces a listicle-dominated SERP (≥6 of top 10 are ranking listicles), the response is to publish OUR OWN listicle alongside any service page — not in place of.

**URL pattern:** `/blog/best-[service]-houston/` — matches the exact URL pattern AI engines already cite from Malek (`/ac-repair-houston-texas/`) and Chill Brothers (`/5-best-hvac-contractors-near-you-in-houston-tx/`).

### Transparent-methodology gate (MANDATORY — Google January 2026 enforcement)

Google's January 2026 enforcement against self-promotional listicles caused 29-49% visibility drops on affected sites. What survives:

1. **Transparent methodology block** at the top of the listicle (criteria + weighting + sources audited — Google, Yelp, BBB, Angi, ProFindr)
2. **Real competitor inclusion** — Abacus, Chill Brothers, Mission AC, Champion & Nash, Spring Branch, etc. with verifiable data per company
3. **Comparison table** side-by-side specs (years founded, license, certifications, review counts, financing terms)
4. **75 Degree AC entry** with the same data structure — not preferentially positioned
5. **External validation sources cited** (Houston Chronicle, BBB, NATE registry, manufacturer dealer locators)
6. **Author byline** with credentials + datePublished + dateModified
7. **Schema:** `Article` + `BlogPosting` + `FAQPage` + `BreadcrumbList` + `ItemList`

Full listicle anatomy: `01-research/competitors/ai-citation-filter.md` §4c + §8.

---

## llms.txt — Set-and-Forget, NOT a Priority

**Validation 2026-05-22:** Multiple independent studies show llms.txt has no measurable impact on AI citations:
- **SE Ranking** (300,000 domains analyzed) — no statistically significant correlation with citation frequency
- **ALLMO** (94,000+ cited URLs) — no measurable uplift
- **0.1% of AI crawler traffic** targets llms.txt directly
- No major AI platform (OpenAI, Google, Anthropic, Meta, Mistral) publicly commits to reading llms.txt as of Q1 2026

**Action:** Ship a minimal llms.txt as a hygiene-level setup (it's listed in our AI Visibility Baseline 2026-05-21 audit as a noted gap), but do NOT prioritize it. The real channels — Reddit, Wikipedia/Wikidata, YouTube, Foursquare, listicles — deliver the citation lift. Spend optimization cycles there first.

Reference file `references/llms-txt.md` retained for the minimal-spec walkthrough but no longer treated as a high-leverage action.

---

## Input / Output Files

**Inputs:**
- `business-info.md` — all social/directory links, phone, address
- `01-research/keywords-research.md` — target keywords
- `02-site-architecture/site-architecture.md` — page list
- `03-gsc/data/seo-solutions.md` — current on-page state

**Outputs:**
- `01-research/ai-visibility-[date].md` — full audit
- `02-site-architecture/llms-txt-draft.md` — llms.txt draft
- `02-site-architecture/robots-txt-fix.md` — robots.txt fix
- `07-landing-pages/content/ai-answer-blocks.md` — AI passage blocks

---

## Quick Reference: 5 Bot Categories

AI crawlers are not all the same kind of bot — decisions to allow/block must be made per-category.

| Category | What They Do | Default Action |
|---|---|---|
| Training crawlers | Harvest data for future models | Allow (we want exposure) |
| Retrieval / citation crawlers | Fetch pages to cite in live AI answers | **MUST ALWAYS ALLOW** |
| Agentic browsers | Atlas, Comet, Mariner — act on user's behalf | Cannot be blocked via robots.txt |
| Preview / social crawlers | Generate link previews | Allow |
| Stealth crawlers | Documented to circumvent robots.txt | Robots.txt doesn't stop them |

Full 28-bot table + robots.txt block → [references/bot-taxonomy.md](references/bot-taxonomy.md).

---

## Quick Reference: 3 Voice Pipelines

Voice searches do not all go through Google. Each assistant has its own pipeline:

| Assistant | Primary Source | Must Have |
|---|---|---|
| Google Assistant | Featured snippets + GBP + Knowledge Graph | Complete GBP, FAQ schema, answer-first content |
| Siri (Apple Intelligence) | Apple Maps Connect + Apple Intelligence | **Apple Maps Connect listing** (currently missing — flag) |
| Alexa | **Bing index**, not Google | Verified Bing Places + Bingbot allowed |

58% of voice queries are local — route through the maps platform, not web search. Full pipeline detail → [references/voice-search.md](references/voice-search.md).

---

## Quick Reference: 6-Point Agentic Browser Checklist

Agentic browser traffic grew **6,900% YoY in 2025** (HUMAN Security). They use the accessibility tree, not the rendered page. Every key page must pass:

1. **Native HTML elements over custom divs** — `<button>` not `<div onclick>`, `<select>` not custom dropdown
2. **Landmark elements present** — `<header>`, `<nav>`, `<main>`, `<aside>`, `<footer>`
3. **All form inputs labeled** — `<label for="...">` or `aria-label` on every `<input>`
4. **Autocomplete attributes on contact forms** — `autocomplete="tel" / name / street-address`
5. **Phone visible in HTML text** — `<a href="tel:7135982737">(713) 598-2737</a>`, not background-image
6. **Logical heading hierarchy** — H1 → H2 → H3, no skipped levels

Testing methods + WordPress/Elementor failure patterns → [references/agentic-browsers.md](references/agentic-browsers.md).

---

## Where to Go for Detail

Read the reference file only when the task actually needs it. Each file is self-contained.

| Reference | When to read |
|---|---|
| [references/ai-content-formatting.md](references/ai-content-formatting.md) | **Loaded by every content workflow.** Tables, lists, answer-first paragraphs, schema unlocks, statistics density, freshness rules. Format gate for pages + blogs |
| [references/bot-taxonomy.md](references/bot-taxonomy.md) | Auditing or fixing robots.txt for AI bots — full 28-bot table + allow/block defaults |
| [references/llms-txt.md](references/llms-txt.md) | Creating or updating the llms.txt index file |
| [references/llms-full-txt.md](references/llms-full-txt.md) | Building the comprehensive llms-full.txt companion |
| [references/ai-citability.md](references/ai-citability.md) | Writing the 134–167-word AI passage block on any service page |
| [references/ai-overviews.md](references/ai-overviews.md) | Targeting AI Overviews on specific high-AIO queries |
| [references/platforms.md](references/platforms.md) | Optimizing for ChatGPT / Perplexity / Gemini / Copilot individually |
| [references/brand-serp.md](references/brand-serp.md) | Auditing the brand SERP and Knowledge Panel state |
| [references/voice-search.md](references/voice-search.md) | Voice optimization across Google / Siri / Alexa, with Tier 1/2 checklist |
| [references/agentic-browsers.md](references/agentic-browsers.md) | Auditing accessibility-tree compatibility, Atlas/Comet testing, WP/Elementor fixes |
| [references/emerging-standards.md](references/emerging-standards.md) | RSL, Cloudflare AI Crawl Control, MCP, ai.txt, robots.json — what to monitor |

---

## When to Defer to Other Skills

- **Robots.txt implementation, sitemap, indexing, schema validation** → `technical-seo`
- **Knowledge Panel building, sameAs connections, Wikidata, entity authority** → `entity-seo`
- **Schema markup (FAQPage, Speakable, LocalBusiness, Person, award)** → `schema-markup`
- **GBP completeness, NAP consistency, local pack ranking** → `local-seo`
- **Content writing (AI passage blocks, answer-first paragraphs, 12-point filter validation)** → `content-generation`
- **Reddit brand-mention engagement (40% of AI citations)** → `reddit-engagement`
- **YouTube channel buildout** → `topical-map` (Listicle/Aggregator cluster)
- **Backlink prioritization for AI citation domains (Wikipedia, Reddit, YouTube, Forbes, Houston Chronicle, manufacturer dealer locators)** → `backlink-strategy`

---

## Mandatory References

Read once per session before any AI visibility task:
- `01-research/competitors/top-players.md` — cluster card + cross-cluster synthesis
- `01-research/competitors/ai-citation-filter.md` — 12-point filter + validated channels + page anatomies + competitor benchmark scores

The skill no longer treats llms.txt as a leverage point; the 12-point filter + validated channels (Reddit, Wikipedia, YouTube, Foursquare, listicles) are the operative levers.
