# AI Citation Audit — Drainage Installation Eugene Oregon (`/drainage-installation-eugene-oregon`)

**Research date:** 2026-09-25  
**Inherits from:** `../drainage-excavation/06-ai-citation-audit.md` (service hub, 2026-09-09)  
**Note on live AI querying:** Direct querying of AI chat interfaces was not performed this session, consistent with the documented methodology limitation across all prior packs. This audit is reasoned from SERP composition, validated citation-channel research, and the parent pack's findings, applied to the Eugene-specific city-page query.

---

## 1. AI Overview / Search Generative Experience — Query Analysis

**Query: "French drain installation Eugene Oregon"**

Based on SERP composition patterns observed across Lane County service-query research (all prior packs):
- Local service queries with high transactional intent and a specific city modifier ("Eugene Oregon") are less likely to trigger AI Overviews than broad informational queries. However, AI Overviews for local contractor queries have been increasing through 2025-2026.
- The highest probability AI Overview trigger for this page's keyword set is the **informational** variant: "how much does French drain installation cost in Eugene Oregon" and "do I need a permit to connect a drain to Eugene's storm system" — both of which have clear answer-first content targets on this page.
- If an AI Overview fires for a query about this topic, it will most likely cite: a cost aggregator (HomeGuide, Angi, or similar), a local contractor blog (Cojo Asphalt is the closest known match), and/or the Eugene municipal code for the permit question.

**Implication for this page:** Format the cost section and the EC §6.610 permit section as answer-first, 40–75 word answer blocks followed by supporting detail. These are the most citeable formats for AI Overviews. Mark with Speakable schema.

---

## 2. Citation Domain Analysis (Adapted from Parent Pack)

Based on the validated citation channels from `../home/06-ai-citation-audit.md` and `../excavation/06-ai-citation-audit.md`, the following domains are most likely to be cited by AI systems for Lane County excavation/drainage queries:

| Domain type | Examples | AI citation likelihood | D&D's current presence |
|---|---|---|---|
| Cost aggregators | HomeGuide, Angi, HomeAdvisor, Thumbtack | High (for cost queries) | None |
| Local contractor blogs | Cojo Asphalt (cojoasphalt.com) | Medium (for technical queries) | None |
| Wikipedia | French drain article | Medium (for definitional queries) | None needed |
| Municipal code | Eugene Code §6.610 | High (for permit queries) | We cite this directly → builds our citability |
| Local contractor sites | All Dirt, Heavy D, M4 Landworks | Low (for Eugene-specific queries — thin content) | None |
| Wikidata | Lane County, Eugene OR | Medium (for local business queries) | None |
| BBB / Yelp | Local business directories | Low-Medium | None |

**Key insight:** Because zero local competitor produces structured, citable content on French drain installation in Eugene (no schema, no answer-first blocks, no FAQ), D&D's content — if properly formatted with FAQPage schema, Speakable, and structured answer-first blocks — would be the only locally-structured content available for AI systems to cite for Eugene-specific drainage queries.

---

## 3. Validated AI Citation Channel Audit

Based on `../home/06-ai-citation-audit.md`'s validated channel analysis, applied to this Eugene location page:

**Reddit** (~40% of AI citations):
- No competitor in this market has documented Reddit presence for drainage/French drain content in Eugene, Oregon — consistent with every prior pack's finding of zero D&D competitors on Reddit.
- Eugene/Willamette Valley homeowner questions do appear on Reddit (r/oregon, r/pnw, r/HomeImprovement) about yard drainage and wet soil. These are the question sources used in `02-question-mine.md`.
- **Opportunity:** D&D's review-pipeline and social-presence buildout (future phase) should include Reddit when appropriate. Not directly actionable for this content pack.

**Wikipedia / Wikidata** (26-48% of ChatGPT top-10 citations):
- French drain has a Wikipedia article (en.wikipedia.org/wiki/French_drain). No competitor in this market has a Wikidata entry. D&D has no Wikidata entry (zero digital footprint as of 2026-09-25).
- **Opportunity:** This page can link to the Wikipedia French drain article as a sameAs signal in schema, borrowing some of Wikipedia's authority as a citation signal.

**YouTube** (#1 most-cited AI domain):
- No D&D competitor in this market has a YouTube presence for drainage content. D&D has no YouTube presence.
- **Not actionable for this pack.** Note for future social/video content strategy.

**Foursquare / ThreeBestRated / Listicle directories:**
- D&D has no listings in any directory as of 2026-09-25. This is a Phase 2 buildout priority (per business-info.md and the broader GBP/citation strategy).
- **Not actionable for this content pack.**

**Primary implication for this pack:** D&D's schema quality and content structure are the primary AI-citation-readiness vectors available right now, given the zero digital footprint. This page's FAQPage schema, Speakable blocks, and the EC §6.610 permit citation are the highest-leverage moves for AI citability from a content standpoint.

---

## 4. AI Citation-Ready Block (~135 Words — Place in First 30% of Page)

This block is the page's primary AI Overview / featured-snippet target. It is Speakable-eligible and must be placed before the first H2.

> Drainage installation in Eugene, Oregon typically means installing a buried French drain, curtain drain, or catch-basin-and-pipe system to move water away from a wet yard, a foundation perimeter, or a chronically saturated area that surface regrading alone can't fix. Eugene receives approximately 46.6 inches of rain per year — nearly 9 inches more than the U.S. average — almost all of it falling between October and May. In Willamette Valley clay, which doesn't drain naturally, a buried drainage system is often the only permanent solution. In Eugene, connecting a French drain discharge to the city's stormwater system requires a permit under Municipal Code §6.610, which can be pulled only by the property owner (for their own residence) or a licensed plumber or licensed septic installer. D&D Land Works provides drainage installation for residential and commercial properties throughout Eugene, Springfield, and Lane County under Oregon CCB license #261742. Free estimates: 541-401-8726.

**Word count:** ~145 words (within the 134–167 word target range).  
**Speakable CSS selector:** `.ai-citation-block` or the first `<div class="lead">` block on the page.  
**Eugene-specific elements:** Eugene rainfall figure, wet-season window, Willamette Valley clay mention, EC §6.610 citation with its "who can pull it" restriction.

---

## 5. 7 Specific, Citable Claims (AI-Friendly Formatting)

These are statements an AI system would cite if they are structured and attributable. Each becomes either an answer-first block, a FAQ answer, or a schema-structured fact.

| # | Claim | Source | Schema treatment |
|---|---|---|---|
| 1 | In Eugene, connecting a private drain to the public stormwater system requires a permit under Eugene Code §6.610 | Eugene municipal code | Speakable; FAQPage |
| 2 | Only a property owner (for their own residence) or a licensed plumber/licensed septic installer can pull the EC §6.610 storm connection permit | Eugene Code §6.610 | Speakable; FAQPage |
| 3 | Eugene receives approximately 46.6 inches of rain per year, concentrated October through May | NOAA climate data | Speakable |
| 4 | French drain depth ranges from 18–24 inches for standard yard drainage to 4–6 feet when tied to a footing | Industry standard (HomeGuide, Angi) | FAQPage |
| 5 | A French drain in Willamette Valley clay requires geotextile filter fabric — without it, fine clay particles migrate into the gravel and pipe over time, clogging the system | Cojo Asphalt Oregon guide + drainage industry standard | Speakable; FAQPage |
| 6 | Drainage installation costs in Eugene range from $10–$35 per linear foot for shallow exterior drains and $45–$85 per linear foot for deep footing-level French drains (national estimates; Willamette Valley clay can push costs 2–3× higher) | HomeGuide; Cojo Asphalt Oregon notes | Speakable (with disclosure); FAQPage |
| 7 | D&D Land Works (CCB #261742) provides drainage excavation and installation throughout Eugene, Springfield, and Lane County, Oregon | Business-verified | GeneralContractor schema |

---

## 6. Cojo Asphalt Displacement Plan

Cojo Asphalt (cojoasphalt.com) is the best-sourced drainage content in the Lane County-adjacent SERP right now. It:
- Is not a local Lane County excavation contractor (appears to be a paving/asphalt contractor content marketing operation)
- Has no Oregon CCB license visible for Lane County/Eugene drainage work
- Has no schema, no FAQPage, no Speakable, no local contact info for Eugene

**Displacement strategy for D&D:**
- Match Cojo Asphalt's technical depth (depth, slope, pipe type, Oregon-specific permit context)
- Exceed it on: Eugene-specific soil context (Malpass clay), Eugene-specific permit detail (EC §6.610 with who-can-pull-it restriction), Eugene-specific pricing context, FAQPage schema, Speakable schema, CCB license verification
- Cojo Asphalt's content reads like an informational blog post; D&D's page should read like a local contractor's technical guide with a clear conversion path

---

## 7. 12-Point AI Citation Filter — Target Score

The 12-point AI citation filter from `../home/06-ai-citation-audit.md` applied to this Eugene drainage page:

| # | Filter point | D&D's plan | Status |
|---|---|---|---|
| 1 | `GeneralContractor` schema | Yes — reused from home schema | ✅ Plan |
| 2 | `AggregateRating` schema | NO — no reviews yet; do not fabricate | ❌ Gated (GBP launch) |
| 3 | `Service` schema with `areaServed` + offers | Yes — Service named "French Drain Installation / Drainage Installation", areaServed: Eugene + Lane County | ✅ Plan |
| 4 | `Person` schema with `sameAs` | LinkedIn/Wikidata not available; named owner (David Deggelman) in body | ⚠️ Partial |
| 5 | License number visible in HTML body | CCB #261742 in paragraph 1 | ✅ Plan |
| 6 | Founding year + `foundingDate` in schema | Unknown — open item in business-info.md | ❌ Pending David confirmation |
| 7 | Direct-question H2s (≥3) | All H2s are questions (per heading map in 00-research-pack.md) | ✅ Plan |
| 8 | `FAQPage` schema attached | Yes — 10 questions | ✅ Plan |
| 9 | ≥3 verifiable trust badges | CCB #261742, DEQ Certified, Oregon 811 | ⚠️ Limited (no BBB, no GBP) |
| 10 | `dateModified` + `datePublished` | Yes — required in Astro schema | ✅ Plan |
| 11 | `sameAs` links ≥5 platforms | GBP (not live), BBB (not listed), Yelp (not listed) — currently 0 live platforms | ❌ Zero (GBP launch phase) |
| 12 | Eugene-specific content (climate, neighborhoods, code) | Yes — Malpass clay, EC §6.610, Eugene rainfall | ✅ Plan |

**Target score for this page at launch: 7/12** (limited by no GBP/reviews/directories at launch). Upgrade path: 10/12 once GBP is live and reviews accumulate.

**Note:** This is the same realistic launch target as the foundation-excavation-eugene-oregon page, which was also rated 7/12 at launch due to zero digital footprint.
