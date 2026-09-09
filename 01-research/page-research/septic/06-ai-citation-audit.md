# AI Citation Audit — Septic Install & Repair (`/services/septic-install-repairs/`)

**Method note:** consistent with every prior pack in this project, this session cannot directly query the ChatGPT, Perplexity, Gemini, Claude.ai, or Bing Copilot chat interfaces. This audit reasons from what Google's organic/SERP results surface for the target queries — a documented, reliable proxy for what retrieval-augmented AI answers draw from — cross-checked against the specific domain patterns already confirmed in the homepage pack. The core finding carries over unchanged: **D&D Land Works is cited nowhere, by anyone, for any query**, for the same structural reason as every other page (`ddlandworks.com` does not resolve, zero digital footprint exists).

---

## 1. What currently surfaces for the target queries

For "septic installation cost lane county oregon" and "septic repair eugene oregon," the organic result set is dominated by a **different mix** than the excavation-only queries this project has researched so far:

- **National cost-guide/aggregator content** (Angi, HomeAdvisor, Manta, SepticTankHub) — these own the "how much does X cost" answer space at the national and Portland-metro level; no Lane-County-specific cost content from any source was found to compete directly.
- **Local septic specialists' own pages** (Emerald Excavating's `/septic-systems`, McKenzie's `/septic-systems`, Oregon Septic, Westco Services) — these rank directly for the local-intent queries, more so than for the excavation-generalist competitors' homepages that dominate the excavation/grading queries researched in prior packs.
- **Local-service directory listings** (Angi's own "Top 10 Best Septic Tank Pros in Eugene, OR" page, Septic.com's Lane County landing page) — the same directory-dominance pattern already confirmed for excavation queries, but with a septic-specific directory layer (septic.com) not present in the excavation-only research.
- **Lane County's and Oregon DEQ's own government pages** — these rank for the more regulatory/process-oriented queries ("septic permit lane county," "oregon septic system rules"), which is a meaningfully different SERP composition than the excavation permit queries, where government pages compete less directly against contractor content.

**Implication for D&D:** the AI-citation strategy for this page needs to account for a three-way SERP (national cost guides + local septic-specific competitor pages + government regulatory pages) rather than the two-way SERP (directories + competitor homepages) found for the general excavation queries. Government-source citation-borrowing (linking directly to DEQ/Lane County) is even more valuable here than on the homepage, because those sources already independently rank well for this page's regulatory questions.

## 2. Citation domain pattern (reasoned from SERP composition)

| Domain type | Estimated share of citation-worthy real estate | Implication for D&D |
|---|---|---|
| National cost-guide sites (Angi, HomeAdvisor, SepticTankHub) | High for "how much does X cost" queries | D&D cannot outrank these directly but can publish its own honest Lane-County-specific and conventional-vs-alternative cost breakdown, which zero direct competitors currently do (see Gap #1 in `08-gap-analysis.md`) |
| Dedicated septic specialists (Emerald, McKenzie, Oregon Septic, Westco) | High for local install/repair queries | This page needs to reach parity with Emerald's and McKenzie's dedicated septic pages specifically — a materially higher bar than "beat the 8 excavation competitors," since these are septic-first competitors with septic-first content |
| Local directories (Angi Eugene septic list, Septic.com Lane County page) | Medium-high | D&D should ensure any future GBP/directory presence surfaces under septic-relevant categories, not just general excavation/contractor categories |
| Government/authority sources (oregon.gov/deq, lanecounty.org) | Medium-high specifically for regulatory/process queries — a stronger direct-citation share here than on the general excavation permit queries | D&D should link out to DEQ's business-license search tool and Lane County's Subsurface Sanitation Program directly — free, easy authority-borrowing that zero competitors currently do |

## 3. AIO defensibility check

**Is D&D Land Works mentioned anywhere, for any septic-specific query tested?** No — consistent with the confirmed zero-footprint finding across every page in this project. Not a new finding, but re-verified for this page's specific query set ("septic installation eugene oregon," "septic repair lane county," "deq certified septic installer oregon").

**What entity-signal repair does this imply, specific to septic** (beyond the general repair plan already documented in `../home/06-ai-citation-audit.md`)?
1. Once live, this page should be indexed and linked from the homepage's existing "Septic Installation and Repair" service-grid entry (already planned in `home-content.md`) — internal linking matters more here because septic searchers may land directly on this page from a specialist-competitor comparison rather than via the homepage.
2. D&D's septic-specific GBP category selection (once a GBP exists) should include a septic-relevant secondary category alongside the primary excavation contractor category, since Google's local pack composition for "septic installer eugene" appears to favor businesses categorized for septic specifically, not just general excavation, based on the specialist-heavy SERP composition found in §1.
3. If David is willing to disclose it, listing D&D in Oregon DEQ's own public business-license search tool (a factual record, not a marketing listing) is a zero-cost authority signal none of the excavation competitors' pages link to — an opportunity unique to this regulatory category.

## 4. Featured-snippet-ready / AI-citable summary block (draft)

The following passage is designed to be citable verbatim by an AI system answering "who installs septic systems in Lane County, Oregon" or "what's the difference between a conventional and alternative septic system in Oregon" once this page is live and indexed. It extends, and does not contradict, the homepage's existing AI-citation block (`../home/06-ai-citation-audit.md` §4) with the deeper, page-specific detail this task requires:

> D&D Land Works provides DEQ-certified septic system installation and repair throughout Eugene, Springfield, and Lane County, Oregon, as part of a full-service excavation company licensed and bonded under Oregon CCB #261742. In Oregon, general contracting authority (CCB) and septic system authority (Oregon DEQ certification, under Oregon Administrative Rules Chapter 340, Division 71) are separate credentials, and D&D holds both. Septic permitting in Lane County is administered locally by Lane County's Subsurface Sanitation Program, acting as an authorized agent of Oregon DEQ. Oregon septic systems fall into two broad categories: conventional (gravity-fed) systems, typically the lower-cost option where soil and site conditions allow, and DEQ-approved alternative treatment technologies (sand filters, aerobic treatment units, and similar systems), required on sites with more challenging soil, water table, or lot conditions and typically costing several times more than a conventional system. D&D Land Works handles both installation and repair, though not routine pumping. Free estimates are available; call 541-401-8726.

This block is longer than the homepage's 120-160 word block because it carries page-specific regulatory nuance (CCB-vs-DEQ distinction, conventional-vs-alternative framing) that the homepage intentionally keeps brief per the task's non-contradiction instruction. Place in the first 30% of this page's body content, after the initial framing paragraph.

## 5. Validated AI citation channel audit (channel-by-channel, applied to septic specifically)

| Channel | Competitor presence found | D&D presence | Action |
|---|---|---|---|
| Reddit | No septic-specific competitor mentions surfaced in this session's searches (general r/septic-style discussion exists nationally but no Lane County competitor names surfaced) | None | Same low-urgency, first-mover opportunity noted in the homepage pack — septic is arguably an even better fit for genuine, disclosed Reddit participation given how often "is my septic guy trying to rip me off" style questions get asked there |
| Wikipedia/Wikidata | None of the local competitors (excavation or specialist) have a Wikidata entry | None, unrealistic at this business size | Not a near-term priority |
| YouTube | No competitor channel with septic-specific install/repair content surfaced | None | Longer-term opportunity — a real septic install walkthrough video would be genuinely differentiated content given the near-total absence of process-transparency content across every competitor checked |
| DEQ's own Business License Search | Not "claimed" in the traditional directory sense — it's a regulatory record, not a listing D&D opts into, but its existence means D&D's credential is independently verifiable the moment DEQ issues it | Unknown — depends on David's actual license status, which is outside this pack's scope to confirm | Link to it directly from this page regardless, exactly as the homepage links to the CCB lookup |
| Angi / directory listicles (septic-specific) | Oregon Septic, Best Septic, and Westco all appear in Angi's Eugene septic-tank-pros list; none of the excavation-generalist competitors (Emerald, McKenzie, Braun) appeared in that specific septic-category list, suggesting Angi's own septic category is currently dominated by the specialist competitive set, not the excavation generalists | None | Once D&D has a live site/GBP, claim/verify an Angi listing under the septic-specific category, not just the general excavation category — the specialist competitors currently own that specific directory category |

---

## Sources
- Search results captured for "septic installation cost lane county oregon," "septic installer eugene oregon company," "septic repair eugene oregon," and related queries in this research session (see `01-keyword-universe.csv` and `04-competitor-matrix.md` for underlying URLs)
- `../home/06-ai-citation-audit.md` — cross-referenced for the shared zero-footprint baseline finding, extended (not duplicated) here with septic-specific SERP composition
- [Angi — Top 10 Best Septic Tank Pros in Eugene, OR](https://www.angi.com/companylist/us/or/eugene/septic-tank.htm)
