---
description: Entity research + per-page extraction + entity-page mapping + entity validation — Koray 14+14a sources, AI citation channels, salience math
argument-hint: [mode: research|extract|map|sameAs|validate|audit] [optional: page-slug or entity-name]
---

Run entity work using the full upgraded entity skill chain. **All four methodology skills are project-agnostic v2.0:**

- `entities-research` — 14+14a sources, AI citation channels, Wikidata property depth, sameAs priority by AI citation correlation
- `entity-extraction` — per-page entity audit with salience scoring formula
- `entities-mapping` — entity-to-page distribution + `@id` registry + drift detection
- `entity-validate` — Wikidata + Google KG + AI engine recognition cross-check (gate)

Plus `entity-seo` — the 75°AC-specific strategy doc layered on top of the generic methodology.

Mode: $ARGUMENTS (default: `audit` = lightweight status check)

---

**Mode: `research`**
Run the full Koray 14-source + Source 14a entity research per `entities-research` v2.0:
- 14 traditional sources (competitors, SERP, PAA, rich snippets, forums, social, ads, AIO, AI tools, GBP, reviews, Knowledge Graph, co-occurrence, Wikidata)
- **Source 14a — Local PR / news co-occurrence (6.5× AIO multiplier per Onely 2025)** — Houston Chronicle, Houston Press, Houston Business Journal, Community Impact, ACHR News
- Map: Business + Service + Location + Person + Brand + Certification + Event + Concept + Quantitative entities
- Run `entity-validate` gate on every discovered entity before adding to inventory
- AI engine recognition baseline: 25-cell matrix (5 engines × 5 prompts) for ChatGPT/Perplexity/Gemini/Copilot/Claude
- Wikidata property depth audit (P31, P17, P131, P571, P856, P1329, P452, P625, P506, P127 — ≥8 properties target)

Output:
- `01-research/entities-research.md` — full report with all 12 sections from `entities-research/SKILL.md`
- `01-research/entities-inventory.csv` — validated entity master list
- `01-research/sameAs-network.csv` — 18-platform sameAs state with AI citation correlation per platform
- `01-research/ai-recognition-baseline.md` — 25-cell engine × prompt matrix

---

**Mode: `extract`** *(new — per-page audit)*
Run `entity-extraction` on a specific page (URL or local file). 8-step audit:
1. NER extraction (spaCy / HuggingFace / Google NL API / manual)
2. 11-type classification
3. Salience scoring with the additive formula (positional weights + frequency + contextual richness)
4. Knowledge Graph alignment via `entity-validate`
5. Disambiguation audit
6. Entity relationship mapping
7. Attribute completeness checklist
8. Schema-vs-content gap detection

Output:
- `01-research/page-research/[slug]/entity-inventory-[slug].csv`
- `01-research/page-research/[slug]/entity-extraction-[slug].md` (with top 5 action items)

---

**Mode: `map`**
Run `entities-mapping` v2.0 to assign entities to pages at correct salience levels:
- 1 primary entity at 0.80+ per page (exactly one)
- 2-4 major supporting at 0.50-0.79
- 3-6 supporting at 0.30-0.49
- Salience math from `entity-extraction` § Step 3
- Hub-spoke entity inheritance (spokes inherit hub's primary as major supporting)
- Brand placement matrix (per page type)
- areaServed Wikidata Q-ID rule — every location entity uses structured `City` object with `@id` → Wikidata URL
- Person `@id` consistency — every Person schema block resolves to one canonical `@id` across all pages
- Entity drift detection — flag entities named differently across pages

Output:
- `01-research/entities-mapping.md` — per-page entity specs + drift report + co-occurrence gaps
- `01-research/entities-mapping.csv` — entity × page assignment master
- `01-research/entity-id-registry.md` — canonical `@id` for every entity (used by `schema-generate`)

---

**Mode: `sameAs`**
Audit the current sameAs network against the 18-platform priority list from `entities-research` § sameAs Network Priority:

| Platform | Priority | AI Citation Correlation / Why |
|---|---|---|
| Wikidata | CRITICAL | Truth Node (Google KP + OpenAI training) |
| Foursquare | CRITICAL | 60-70% of ChatGPT local recs |
| GBP | CRITICAL | Local pack + Gemini |
| YouTube | CRITICAL | 0.737 correlation |
| Apple Maps Connect | HIGH | Siri pipeline |
| Bing Places | HIGH | Alexa pipeline |
| ThreeBestRated | HIGH | 24% ChatGPT directory citations |
| Birdeye | HIGH | Cross-platform review signal |
| Facebook | HIGH | 0.512 correlation |
| LinkedIn | HIGH | Copilot anchor |
| Yelp | HIGH | 0.489 correlation |
| BBB | MEDIUM | 0.401 correlation |

For each: existing? URL? NAP consistent (5-field check: name/address/phone/hours/description)? Reciprocal back-link to website?

Output:
- `01-research/sameAs-network.csv` — full state
- `01-research/sameAs-fix-queue.md` — prioritized action list with claim/verify/update tasks

---

**Mode: `validate`** *(new — entity validation)*
Run `entity-validate` on a specific entity name OR a CSV of entities OR a content brief / page. Returns canonical name + Wikidata QID + Google KG @id + Wikipedia URL + recommended schema @type + validation status (12 possible values).

Use cases:
- Validate competitor business names from research
- Validate service entity names before schema generation
- Validate location entity names (especially for ambiguous: Richmond TX vs VA, Springfield, Aurora, etc.)
- Validate brand vs parent corp (Carrier vs Carrier Global; Goodman vs Daikin)
- Validate a content brief's H2/H3 entities before content writing

Output: per-entity validation row in CSV + a markdown report if a brief / page was validated.

---

**Mode: `audit`**
Quick status — runs cross-skill checks:

- sameAs count per high-value page (homepage, About, top 5 service pages)
- Missing Wikidata entity for 75°AC? (if no QID, recommend creating one + reference Wikidata property depth in `entities-research` § Wikidata Property Depth Table)
- Knowledge Panel state (query `75 Degree AC Houston` — capture screenshot if appears)
- AI engine recognition delta (re-run a subset of the 25-cell baseline — has recognition improved since last quarter?)
- knowsAbout schema coverage across service pages
- Entity drift check across top 10 pages (same entity named consistently in H1/H2/schema?)
- Person `@id` consistency check (Kenny Ho — same `@id` everywhere?)

---

**Mode default behavior** (no mode passed): run `audit`.

---

**Outputs (mode-dependent):**

- `research`: `01-research/entities-research.md` + `entities-inventory.csv` + `sameAs-network.csv` + `ai-recognition-baseline.md`
- `extract`: `01-research/page-research/[slug]/entity-inventory-[slug].csv` + `entity-extraction-[slug].md`
- `map`: `01-research/entities-mapping.md` + `entities-mapping.csv` + `entity-id-registry.md`
- `sameAs`: `01-research/sameAs-network.csv` + `sameAs-fix-queue.md`
- `validate`: per-entity rows + report markdown
- `audit`: `01-research/entities-audit-[date].md` — findings + fix queue
- Dark HTML report (any mode): `08-reporting/monthly/[YYYY-MM]/entities-[date].html` with sameAs network visualization
- Update master sheet tab "🤖 GEO & AI Visibility"

---

**Workflow integration:**

```
/entities research  → produces master inventory (run quarterly)
        ↓
/entities sameAs    → tactical platform claim/fix queue
        ↓
/entities validate  → ad-hoc disambiguation (anywhere)
        ↓
/entities extract [slug]  → per-page audit (runs inside /deep-research Phase 4)
        ↓
/entities map       → page assignment (runs after extract on all priority pages)
        ↓
/entities audit     → monthly status check
```

For new client projects (project-agnostic skills): drop the four methodology skills (entities-research, entities-mapping, entity-extraction, entity-validate) into the new client's `.claude/skills/` folder. They read services-list.md, service-areas.md, business-info.md, CLAUDE.md at run-time — no edits needed.
