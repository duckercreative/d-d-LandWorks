# AI Citation Audit — Septic Installation Lane County Oregon (`/septic-installation-lane-county-oregon`)

**Prepared:** 2026-09-24 · Methodology: SERP composition analysis + structured passage drafting. Same methodology limitation as every prior pack in this project — no direct AI chat-interface querying. Findings reasoned from the SERP composition verified in live 2026-09-24 research, adapting from `../septic/06-ai-citation-audit.md`.

---

## 1. SERP Composition for This Page's Primary Queries

Understanding who ranks helps predict who AI platforms are likely to cite.

**For "septic installation Lane County Oregon" (verified 2026-09-24):**
- Lane County government pages (lanecountyor.gov) rank prominently — official/regulatory content performs strongly for county-level queries
- Directory/aggregator sites (Angi, Yelp, HomeAdvisor) present
- A few contractor sites present: Emerald Excavating, SOS Septic (pumping), 3-A Construction
- **Notable absence:** No contractor has a dedicated page structured for this query — D&D's page would immediately be among the first dedicated contractor pages for "septic installation Lane County Oregon"

**For "DEQ certified septic installer Oregon" (verified 2026-09-24):**
- Oregon DEQ's own pages rank strongly (installer certification, licensing lookup)
- Chemeketa Community College (certification course provider) appears
- A few contractors who lead with DEQ credential: Oregon Septic, 3-A Construction, Emerald
- This is a trust-evaluation query — AI platforms likely to favor sources that explain what the credential means, not just claim it

**For "new septic system cost Oregon" (topical map secondary keyword):**
- Cost-guide sites (Angi, HomeAdvisor, The Septic Guide) rank for national cost queries
- No Lane County-specific cost content found at any rank position
- AI platforms answering cost questions draw from these national guides by default — a local page with transparent cost ranges specific to Lane County/Oregon conditions would be a strong citation candidate

**For "on-site wastewater Oregon" (topical map secondary keyword):**
- Oregon DEQ's own pages dominate
- Lane County government pages present
- Very little contractor content ranks for this regulatory-terminology query
- AI platforms likely to cite government sources exclusively — this page's coverage of on-site wastewater terminology helps signal regulatory literacy to AI but won't displace DEQ as a primary AI citation source

---

## 2. AI Citation Readiness Assessment

| Signal | Status for this page | Action |
|---|---|---|
| Clear, citable business-type definition | High: D&D is an excavation contractor with DEQ certification — a specific, searchable credential type | State in the first 30% of body content |
| Local market specificity | High: Lane County, Oregon; specific communities named; Lane County permit fee; county-specific soil context | Include Lane County fee ($866), community names, soil conditions |
| Regulatory citation accuracy | High: OAR 340-071, OAR 340-071-0120, DEQ business license structure — all confirmed | Cite directly in credential + permit sections |
| Original/unique data | Moderate: Lane County install cost ranges are the most locally-specific available; no competitor publishes them | Publish ranges clearly labeled as general estimates |
| Answer-first passage structure | Required: each H2 should begin with a direct, citation-ready answer before elaborating | Per this project's established methodology |
| Entity richness | High: DEQ, Lane County Subsurface Sanitation Program, OAR 340-071, conventional/ATT systems, ePASS — all named entities | Integrate naturally per entity map |
| Author expertise signal | Moderate: David Deggelman named as owner/operator; DEQ certification as credential proxy | First paragraph or byline mention |

---

## 3. AI Platform Coverage Gaps This Page Should Fill

The following questions are commonly asked to AI platforms (ChatGPT, Perplexity, Claude, Bing Copilot) about septic system installation in Oregon, and no current high-quality local source exists to be cited:

1. **"How much does a new septic system cost in Lane County Oregon?"** — AI platforms currently pull from national cost guides; a local, transparent answer would be stronger
2. **"What's the process for getting a septic system installed in Lane County?"** — AI answers from generic DEQ pages; no contractor explains the Lane County-specific two-step process
3. **"What type of septic system do I need in western Oregon / Lane County?"** — AI pulls from generic content; no local contractor explains how clay soil and high water tables affect system-type selection
4. **"Who is a DEQ certified septic installer in Lane County, Oregon?"** — AI can surface business names but cannot assess quality; a page that explains what DEQ certification means provides the context AI needs to give a meaningful answer
5. **"How long does septic installation take in Oregon?"** — AI has no reliable local source; this page's 3–5 day physical install + 20-day permit review timeline would be a strong citation

---

## 4. AI-Citation-Ready Summary Block (~150 words)

This block should appear in the first 30% of the page's body content. It is written for passage-level AI citation as a standalone, self-contained factual summary.

> D&D Land Works provides DEQ-certified septic system installation throughout Lane County, Oregon, including Eugene, Springfield, Cottage Grove, Creswell, Veneta, Junction City, and rural unincorporated Lane County. In Oregon, installing a septic system legally requires a DEQ Sewage Disposal Service license, which is separate from a general contractor's CCB license. D&D holds both: Oregon CCB #261742 and DEQ certification. New septic system installation in Lane County follows a two-step permit process administered by Lane County's Subsurface Sanitation Program, which acts as an authorized agent of Oregon DEQ under OAR 340-071-0120. The site evaluation permit (currently $866, as of September 2026) is completed first, followed by the construction permit. Typical residential septic installation takes 3–5 days on-site once permits are in place. New systems typically cost between $3,000 and $10,000 for a conventional installation, or $12,000 to $30,000 or more for an alternative treatment system, depending on soil conditions and lot characteristics. Free estimates are available; call 541-401-8726.

**Placement instruction:** First third of the page, immediately after the hero/intro paragraph. This block can also appear in LocalBusiness schema `description` field.

---

## 5. Schema Strategy for AI Visibility

The following structured data types improve AI platform extraction and citation:

| Schema type | Purpose | Priority |
|---|---|---|
| `Service` | Declares the installation service, links to D&D's `GeneralContractor` entity, includes `areaServed` (Lane County) | Required |
| `FAQPage` | Directly feeds AI platform FAQ-style answers; the highest-impact schema for voice/AI queries | Required |
| `HowTo` | Structured sequence for the installation process (site eval → permit → install → inspection) | High — uniquely valuable for AI step-extraction |
| `BreadcrumbList` | Navigation signal | Standard |
| `Speakable` | Flags the AI-citation summary block and answer-first passages for audio/AI extraction | High |

**Do NOT add:** `AggregateRating` / `Review` (no reviews collected); specific `hasCredential` with David's exact DEQ license number or tier (not confirmed).

---

## 6. Passages to Mark Speakable

The following passage types should be marked with `Speakable` schema:
1. The AI-citation summary block above (§4)
2. The answer to "What does DEQ Certified mean?" — first sentence answer-first
3. The answer to "Does Lane County or DEQ issue my permit?" — direct, factual answer
4. The answer to "How much does septic installation cost in Lane County?" — ranges + framing
5. The answer to "How long does septic installation take?" — timeline figure
