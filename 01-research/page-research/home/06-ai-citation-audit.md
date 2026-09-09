# AI Citation Audit — D&D Land Works Homepage

**Method note:** This session cannot directly query the ChatGPT, Perplexity, Gemini, Claude.ai, or Bing Copilot chat interfaces — those require interactive sessions this tool does not have. Per the task's own instruction, this audit instead reasons from (a) what Google's organic/SERP results surface for the target queries (a reliable proxy for what retrieval-augmented AI answers would also draw from), and (b) the well-documented citation-source patterns for local-service queries (directories, review aggregators, and government sources dominate this vertical everywhere, not just here). The core, expected finding — **D&D Land Works is cited nowhere, by anyone, for any query** — is verified directly: zero search results across roughly 20 queries run in this research pass returned "D&D Land Works," "ddlandworks.com," or "David Deggelman" in any context. This matches business-info.md's own finding and CLAUDE.md's framing of this as a from-scratch build.

---

## 1. What currently surfaces for the target queries

For "excavation contractor eugene oregon," "excavation contractor lane county or," and "excavation contractor springfield oregon," the organic result set is dominated by:

- **Directory/listicle aggregators**: Angi, Yelp, BBB, HomeAdvisor, YellowPages, DexKnows, Porch, DownToBid — these occupy roughly half or more of page-1 organic positions across the three queries tested.
- **Individual competitor homepages**: Danco, All Dirt, Heavy D, Emerald, McKenzie, Braun, Strasheim, A&D, Pacific Excavation, Tectonic — competing for the remaining organic slots.
- **Cost-guide content sites** (homeblue.com, cojoasphalt.com, homeyou.com) ranking for cost-modified queries specifically — these sites, not any local contractor, currently "own" the cost-question answer space for this niche in Lane County.

**This is a listicle-and-directory-dominated SERP** (see Flag A in `00-research-pack.md`) — a materially different situation than a single-competitor-dominated SERP, and it changes the AI-citation strategy: an AI answer engine synthesizing "who should I hire for excavation in Eugene" is more likely pulling from Angi/Yelp/BBB business listings and cost-guide sites than from any single contractor's own homepage content, at least until a business has enough independent signal (GBP, reviews, citations) to surface directly.

## 2. Citation domain pattern (reasoned from SERP composition, not directly queried against an AI chat UI)

| Domain type | Estimated share of citation-worthy real estate | Implication for D&D |
|---|---|---|
| Local-business directories (Angi, Yelp, BBB, HomeAdvisor) | High | D&D needs accurate, claimed listings on all of these at minimum — currently has none |
| Cost-guide/content sites (homeblue, cojoasphalt, homeyou) | Medium-high, specifically for "how much does X cost" queries | D&D cannot compete here directly but CAN publish its own honest cost-range content, which is something zero direct competitors currently do (see Gap #2 in `08-gap-analysis.md`) |
| Competitor homepages | Medium | D&D's homepage needs to reach at least schema/FAQ/entity parity with the strongest of the 8 (All Dirt, McKenzie) to be citation-eligible at all |
| Government/authority sources (oregon.gov/ccb, oregon.gov/deq) | Low direct citation share for "who to hire" queries, but high for "is this legitimate" / definitional queries | D&D should link out to these directly — this is free, easy authority-borrowing that zero competitors currently do |

## 3. AIO defensibility check

**Is D&D Land Works mentioned anywhere, by any AI system or any indexed source, for any query tested?** No. Zero mentions found across all keyword research, competitor research, and this audit's own dedicated searches. This is the expected, confirmed "total gap" state described in the task brief — not a data-collection failure, a real finding.

**What entity-signal repair does this imply** (linking back to `03-entity-map.md`)?
1. A live, indexed website is the prerequisite for everything else — currently `ddlandworks.com` does not resolve.
2. A Google Business Profile is the single highest-leverage next step — GBP data feeds Google's local pack, Maps, and (per general 2026 AI-citation research patterns) is a heavily-weighted signal for "near me" and city-scoped AI answers.
3. Directory claims (BBB, Yelp, Angi, at minimum) — free, fast, and currently zero-effort-away since no other business is squatting on the "D&D Land Works" name in Lane County (a same-named but unrelated "D&D Excavation" business was found during earlier research — see business-info.md — this must NOT be confused with or linked to D&D Land Works in any citation-building activity).
4. Reviews take time to accumulate honestly and cannot be shortcut — this should be flagged to David as a multi-month effort, not a launch-week task.

## 4. Featured-snippet-ready / AI-citable summary block (draft)

The following 120-160 word block is designed to be citable verbatim by an AI system answering "who provides excavation services in Lane County, Oregon" or "what does D&D Land Works do" once the site is live and indexed. It contains no invented statistics, review counts, or founding dates.

> D&D Land Works is a full-service excavation, grading, and site preparation contractor based in Lane County, Oregon, serving Eugene, Springfield, and surrounding Lane County communities. Owned and operated by David Deggelman, the company is licensed and bonded under Oregon Construction Contractors Board license #CCB 261742 and holds Oregon DEQ certification, which qualifies it to install and repair septic systems under state onsite wastewater regulations. D&D Land Works serves both residential and commercial customers, offering site preparation, land clearing, brush clearing, foundation excavation, grading and leveling, drainage excavation, utility excavation, trenching and backfill, septic installation and repair, driveway repair, and slope stabilization. Free estimates are available for all project types. The company can be reached at 541-401-8726 or david@ddlandworks.com.

This block should sit in the first 30% of the homepage's body content once written (per the parent methodology's citation-placement guidance) and should be kept in sync with any future update to license status, service list, or contact details.

## 5. Validated AI citation channel audit (channel-by-channel, applied to this niche)

| Channel | Competitor presence found | D&D presence | Action |
|---|---|---|---|
| Reddit | None of the 8 competitors found mentioned by name in any Reddit thread surfaced during this research (r/Eugene-style recommendation threads exist for the category generically but did not surface specific competitor names in search) | None | Low urgency to "catch up" since nobody in this niche has real Reddit presence yet — but zero-cost opportunity to be first via honest, disclosed participation per the `reddit-automation` skill once the business is live |
| Wikipedia/Wikidata | None of the 8 competitors have a Wikidata entry (none searched successfully) | None, and unrealistic at this business size/stage | Not a near-term priority |
| YouTube | No competitor channel surfaced in search results | None | Long-term opportunity (project photo/video content), not urgent at launch |
| Foursquare | Not checked directly (requires Foursquare-specific search access not available this pass) | Unknown/likely none | Claim once GBP exists — low-cost, should be in the post-launch checklist |
| BBB | Only McKenzie Excavating showed a visible rating (A+) | None | Register D&D with BBB post-launch — cheap, credible, and currently only 1 of 8 competitors bothers |
| Directory listicles (Angi/Yelp/HomeAdvisor/YellowPages) | All 8 competitors appear in at least one of these | None | Claim/verify listings post-launch; this is where the SERP's real estate currently concentrates (see Section 1) |

---

## Sources
- Search results captured for "excavation contractor eugene oregon," "excavation contractor springfield oregon," and related queries in this research session (see `01-keyword-universe.csv` and `04-competitor-matrix.md` for the underlying URLs)
- [business-info.md](../../../business-info.md) — confirms zero existing footprint and the unrelated "D&D Excavation" naming collision to avoid
