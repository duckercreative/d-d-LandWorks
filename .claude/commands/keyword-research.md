---
description: Run keyword research for 75 Degree AC — 15-source universe + Google Keyword Planner API + Semrush MCP enrichment, with intent + voice + speakable + AIO citation reverse-engineering + topical relevance + real CPC $ tier
argument-hint: [focus: full|service|location|competitor|gaps|quick-wins] [optional: service or city]
---

Run keyword research for 75 Degree AC per the v2.2 methodology defined in `.claude/skills/keyword-research/SKILL.md`. **Project-agnostic skill — works for any local-service business.**

Focus: $ARGUMENTS (default: `full`)

---

## Methodology

Defer to `.claude/skills/keyword-research/SKILL.md` for the complete process. The skill specifies **15 core sources + 3 conditional (16: Google Keyword Planner API, 17: Semrush MCP, 18: DataForSEO API)** + **intent classification** + **SERP feature tagging** + **GSC-grounded opportunity analysis** + **cannibalization detection** + **voice variant generation** + **speakable opportunity flagging** + **AIO citation reverse-engineering** + **topical relevance scoring** + **commercial value $ tier (real CPC when 16/17 available, proxy otherwise)** + **prioritization formula**.

Do NOT shortcut the methodology. Every keyword needs full tagging or it's not usable downstream.

### Enrichment tools (Sources 16–17 — use when available, never block on them)

- **Source 16 — Google Keyword Planner API:** `05-google-ads/ads-toolkit/keywords/keyword_planner.py` (see `/keyword-planner`). Ideas mode to expand seeds; `--exact --monthly --file` to batch-validate the assembled universe with real Houston/Richmond geo volume + CPC + seasonality. On `invalid_grant` → flag re-auth (`auth_setup.py`), continue without.
- **Source 17 — Semrush MCP:** `mcp__semrush__keyword_research` → `get_report_schema` → `execute_report`. `phrase_these` for batch KD/volume/CPC, `phrase_related` + `phrase_questions` for expansion, `phrase_organic` for SERP landscape. If MCP absent or quota out → log reason, continue without.
- **Source 18 — DataForSEO API:** `01-research/dataforseo/dfs.py` (see `/dataforseo`). `volume` for city-level cross-check, `ideas`/`kd` for suggestions + difficulty, `serp` for live PAA/AIO/local-pack, `local` for Maps ranks. Probe with `dfs.py balance` (free); if creds missing or balance $0 → log reason, continue without.
- If ALL conditional sources are unavailable, the research still completes on Sources 1–15 with proxy CPC/volume estimation exactly as before — that's the required behavior, not a degraded outcome.

---

## Inputs (read in order)

1. `01-research/keywords-research.md` + `.csv` — existing keyword universe (baseline; build on, don't duplicate)
2. `services-list.md` + `service-areas.md` — seed terms
3. `business-info.md` + `CLAUDE.md` — brand + USPs + license
4. `01-research/competitors/top-players.md` — Sources 1, 2, 11
5. `03-gsc/data/queries-202605.csv` — **Source 13: GSC query history** (proven demand)
6. `03-gsc/data/queries-by-page.csv` — cannibalization detection
7. `01-research/topical-map.md` — existing cluster structure
8. `01-research/entities-inventory.csv` (from `/entities research`) — for topical relevance scoring

---

## Focus modes

**`full`** — run all 15 sources end-to-end. Minimum 400 keywords for a project with 5+ services + 3+ locations.

**`service [service-name]`** — focus the 15-source sweep on a single service cluster. Minimum 80 keywords.

**`location [city-name]`** — focus on a single city/neighborhood. Service × location combos. Minimum 60 keywords. Apply doorway-page risk filter from `keyword-clustering` § Step 7 to combo candidates.

**`competitor`** — Sources 1, 2, 11 only. Surfaces keywords competitors rank for that 75°AC doesn't.

**`gaps`** — cross-reference existing universe vs Source 13 (GSC) + Source 9 (AIO) + Source 14 (autocomplete) to find the **missing** keywords (zero impressions in GSC despite related queries having impressions; AIO-triggering queries we don't target; autocomplete suggestions we haven't researched).

**`quick-wins`** — GSC-grounded opportunity analysis only. Top 20 quick-win keywords by `impressions × (1/position)` formula. These feed `/quick-wins` slash command.

---

## Output files

### File 1: `01-research/keywords-research.md` (overwrite or merge)

15 required sections per `keyword-research/SKILL.md` § Markdown narrative:
1. Source coverage report (15 sources)
2. Primary keyword targets (top 10-15)
3. Long-tail keyword clusters by service hub
4. Local keyword strategy
5. Question-keyword shortlist (PAA + Reddit + Quora verbatim)
6. **Voice search variants** (new — conversational phrasings)
7. **Speakable opportunity list** (new — which keywords need `speakable` schema)
8. Seasonal keyword calendar (from Source 15 Google Trends)
9. Quick-win priority list (GSC-grounded)
10. Cannibalization map
11. Competitor gap shortlist
12. **AIO citation reverse-engineering report** (new — domains AIO cites + competitive analysis)
13. AEO/GEO-priority keywords (`featured_snippet` + `ai_overview` tagged)
14. Rising queries from Google Trends (early-mover targets)
15. Commercial value tier breakdown (count per `cv_tier_*`)

### File 2: `01-research/keywords-research.csv` (canonical schema — used by `/deep-research`, `/content-brief`, page-tracker)

Columns:
```
query,source,intent,funnel_stage,local_modifier,urgency,head_or_long_tail,commercial_value,cv_dollar_tier,gsc_imps,gsc_position,gtrends_signal,serp_features,topical_relevance,voice_variant,speakable_eligible,aio_cited_domains,target_page_slug,priority,notes,gkp_volume,gkp_cpc_high,semrush_kd
```

(Last 3 columns = Source 16/17/18 enrichment — empty when those sources are unavailable. `semrush_kd` may instead carry DataForSEO KD prefixed `dfs:` when Semrush is down — scales differ, never mix unlabeled.)

### File 3 (if `gaps` or `quick-wins` mode): `01-research/quick-wins-[date].md`
Top 20 keywords ranked by opportunity score with current page + recommended action (title rewrite / content expansion / new page).

### File 4 (always): `01-research/cannibalization-[date].md`
Every detected cluster + canonical URL recommendation + per-non-canonical fix (differentiate / redirect / noindex).

### File 5 (always): `01-research/aio-citations.csv`
For every AIO-triggering query: cited URLs + domains + category.

---

## Quality gates (per `keyword-research/SKILL.md` § Quality Standards)

- [ ] All 15 core sources touched; "checked, no signal" logged for any source with 0 contribution
- [ ] Sources 16 (Keyword Planner API) + 17 (Semrush MCP) + 18 (DataForSEO) availability-checked — enrichment filled when available, reason logged when not; never block on either
- [ ] Minimum 400 keywords (full mode) — 250 if smaller scope
- [ ] Every keyword has source + intent + target_page_slug + topical_relevance score
- [ ] No two pages share a primary keyword (cannibalization gate)
- [ ] Voice variants generated for every transactional + commercial keyword
- [ ] `speakable_eligible` flag set
- [ ] AIO citation reverse-engineering completed for every AIO-triggering query
- [ ] `cv_dollar_tier` set per transactional + commercial keyword
- [ ] GSC quick-win list scored (top 10 minimum)
- [ ] Output CSV passes downstream consumer checks (matches schema)

---

## Hand-off

Next steps after `/keyword-research`:
1. `/entities map` if entity inventory hasn't been mapped yet (needed for topical relevance scoring)
2. Run `keyword-clustering` (manual or future slash command) — convert universe into cluster cards
3. `/deep-research [page]` — Phase 2 reuses this output rather than re-doing keyword research
4. `/quick-wins` — picks up the top-20 GSC quick-win list
