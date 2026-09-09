---
name: entity-validate
description: >
  Validate entity names, types, and disambiguation against Wikidata, Google Knowledge Graph,
  Wikipedia, GBP categories, and live AI engine recognition BEFORE the entity is embedded in
  content, schema markup, or citations. Catches disambiguation errors, wrong canonical names,
  ambiguous local abbreviations, schema-type mismatches, and unrecognized entities.
  Activates on "validate entity", "wikidata lookup", "entity disambiguation",
  "canonical entity name", "knowledge graph entity check", "is this the right entity name",
  or as a gate inside `entities-research`, `entities-mapping`, `content-briefs`, and
  `schema-generate`. Project-agnostic — works for any local-service business.
version: 2.0.0
user-invokable: true
argument-hint: entity name(s) | CSV file path | content brief file path
---

# Entity Validate

Validate every key entity against authoritative sources (Wikidata → Google KG → Wikipedia → GBP categories → AI engine recognition) BEFORE that entity is used in content, schema, or sameAs networks. Content built on the wrong entity name, a local abbreviation, or an ambiguous term fails to connect to Google's Knowledge Graph — breaks entity recognition, weakens E-E-A-T, blocks Knowledge Panel association, and reduces AI citation eligibility.

This skill is **project-agnostic**. It accepts any entity name from any vertical and returns the canonical reference + schema recommendation. Reads no client-specific files except when invoked with a content brief path.

---

## When to Use

| Trigger | Use Case |
|---|---|
| Phase 1 of `/deep-research` | Validate competitor business names + service entities before they go into the research pack |
| Before writing a content brief | Validate H2/H3 entity names before briefing |
| Before generating schema markup | Wrong entity @type breaks rich results; wrong sameAs URL breaks entity resolution |
| Inside `entities-research` | Run as a gate on every entity before adding to the entity inventory |
| Inside `entities-mapping` | Validate every entity before assigning it to a page |
| Niche with many similarly-named entities | Disambiguation is critical (e.g., Richmond TX vs Richmond VA, Springfield in 30+ states) |
| After scraping competitor pages | Competitor naming conventions may include their idiosyncratic shorthand |
| Standalone audit | Validate an existing entity list (CSV) against current KG state |

---

## Inputs (any of these)

1. **Single entity name** — `entity-validate "Carrier Corporation"`
2. **Comma-separated list** — `entity-validate "Carrier, Trane, Lennox, Goodman"`
3. **CSV file path** — must have `entity_name` column; skill adds validation columns
4. **Content brief file path** — skill extracts entity names from H1/H2/H3 + body proper nouns and validates each
5. **Markdown research file** — extracts entities mentioned and validates

---

## Validation Sources (run in priority order)

### Source 1 — Wikidata (primary)

Wikidata is the canonical structured-data source. Both Google's Knowledge Graph and OpenAI's training data treat Wikidata as a Truth Node. **A Wikidata Q-ID is the strongest entity anchor available.**

**Endpoint:** `https://query.wikidata.org/sparql` (SPARQL endpoint, free, no auth, returns JSON with `Accept: application/sparql-results+json` header)

**Search by label query:**
```sparql
SELECT ?item ?itemLabel ?itemDescription ?type ?typeLabel WHERE {
  ?item rdfs:label "Carrier Corporation"@en.
  ?item wdt:P31 ?type.
  SERVICE wikibase:label { bd:serviceParam wikibase:language "en". }
}
LIMIT 10
```

**Fuzzy search via Wikidata REST API:**
```bash
curl -s "https://www.wikidata.org/w/api.php?action=wbsearchentities&search=Carrier+Corporation&language=en&format=json&limit=10"
```

**For each result, capture:**
- `id` — Q-identifier (e.g., `Q1043269`)
- `label` — canonical English label
- `description` — short disambiguation description
- `aliases` — known alternate names
- `instance of` (P31) — the entity type (used to recommend schema @type)
- `coordinate location` (P625) — for Place entities
- `inception` (P571) — for Organization entities
- `official website` (P856) — for Organization entities
- `country` (P17), `administrative entity` (P131) — for Place entities

### Source 2 — Google Knowledge Graph Search API

**Endpoint:** `https://kgsearch.googleapis.com/v1/entities:search?query=Carrier+Corporation&key=API_KEY&limit=10&indent=True`

Requires `GOOGLE_KG_API_KEY` env var. If unavailable, fall back to Wikidata-only mode and note it in the output.

**For each result, capture:**
- `@id` — Google KG identifier (e.g., `/m/01n4w2`)
- `name` — canonical name
- `description` — KG description
- `@type` — KG entity type array
- `detailedDescription.url` — Wikipedia URL if available
- `resultScore` — KG's confidence score

### Source 3 — Wikipedia (cross-reference)

For Wikidata results, follow `sitelinks.enwiki` (or `dewiki`/`eswiki`/etc.) to the Wikipedia article. The article's first sentence is the canonical natural-language description.

**Endpoint:** `https://en.wikipedia.org/api/rest_v1/page/summary/Carrier_Corporation` (returns JSON with `extract`)

Use Wikipedia's `extract` to seed the entity's description in schema `description` field.

### Source 4 — GBP Category Taxonomy

For Service-type entities (HVAC contractor, plumber, restaurant, etc.), validate against Google's GBP category list — this is the taxonomy Google uses for local pack queries.

**Reference:** `https://support.google.com/business/answer/3038177` (the official list)

If an entity maps to a GBP category, prefer the GBP label as the canonical schema `name` for `Service` type schema (e.g., "Air Conditioning Contractor" is a GBP category — use exactly that wording).

### Source 5 — Direct AI Engine Recognition Test (final cross-check)

After Wikidata + KG return a result, verify the AI engines recognize the entity correctly:

| Engine | Test Prompt |
|---|---|
| ChatGPT | `"What is [canonical name]? Give a 30-word description and one source URL."` |
| Perplexity | `"[canonical name]"` (raw query — observe sources) |
| Gemini | `"Tell me about [canonical name]"` |
| Claude | `"Identify the entity '[canonical name]'. What is it, where, and what is your evidence?"` |

**Pass criteria:** at least 3 of 4 engines return the expected entity (not a homonym, not "I don't know"). If 2+ engines fail or surface a different entity, flag as `AI_AMBIGUOUS` even if Wikidata has a clean match.

---

## Per-Entity-Type Validation Rules

| Entity Type | Wikidata `instance of` (P31) | Expected Schema @type | Required Validation |
|---|---|---|---|
| Business / Organization | Q4830453 (business), Q43229 (organization), Q891723 (public company) | `Organization`, `LocalBusiness`, or specific subtype (`HVACBusiness`, `Plumber`, `LandscapingBusiness`, etc.) | Must have website (P856) OR address; if neither, downgrade to "claimed entity" |
| Service | (varies — often Q7406919 service, Q7406759 service industry) | `Service` | Must map to a GBP category if local-service |
| Place / City | Q515 (city), Q3957 (town), Q486972 (human settlement), Q1093829 (city of the United States) | `Place`, `City`, `AdministrativeArea` | Must have P625 (coordinates) and P17 (country) |
| Neighborhood | Q123705 (neighborhood) | `Place` with `containedInPlace` → parent City | Must have parent City Q-ID |
| Person | Q5 (human) | `Person` | Must have at least one identifier beyond name (LinkedIn, social, published works) |
| Brand / Product Line | Q431289 (brand), Q1450691 (product line) | `Brand` | Must have parent Organization (P127 owner or P176 manufacturer) |
| Certification / License | Q11451 (certification), Q5099437 (professional certification) | `EducationalOccupationalCredential` | Must have issuing body |
| Event | Q1656682 (event), Q1190554 (occurrence) | `Event` | Must have date (P585) or recurring schedule |
| Product | Q2424752 (product) | `Product` | Must have manufacturer (P176) or brand (P1056) |

If the input entity matches none of the above, return `UNRECOGNIZED_TYPE` — do not invent a schema type.

---

## Disambiguation Rules

When the input name matches multiple Wikidata entries OR has known homonyms, run disambiguation:

### 1. Homonym Locations

Common multi-state US cities — never assume. Always require state context.

| Name | Common Conflicts |
|---|---|
| Richmond | VA, TX, IN, KY, CA |
| Springfield | MO, IL, MA, OR, OH (30+ states) |
| Portland | OR, ME, TX |
| Manchester | NH, UK, CT |
| Aurora | CO, IL, OH, OR, NC |
| Salem | OR, MA, NH, IN, VA |
| Lakewood | CO, OH, NJ, CA, WA |
| Franklin | TN, MA, NH, KY, OH, WI |
| Madison | WI, AL, NJ, OH, IN |
| Bristol | TN, VA, CT, RI, UK |

**Rule:** if input is `"Richmond"` alone, return `AMBIGUOUS` with all candidate Q-IDs. Require state qualifier (`"Richmond, TX"`) to disambiguate.

### 2. Homonym Businesses

When two businesses share the same name (e.g., "Smith Plumbing" — many independent locations), the disambiguator is address + phone + GBP cid.

**Rule:** for business entities, never claim a Wikidata match unless the website URL (P856) matches the input's known website. If not provided, return `AMBIGUOUS_BUSINESS`.

### 3. Industry Acronyms

Local abbreviations and industry shorthand frequently fail Wikidata match.

| Industry term | Canonical |
|---|---|
| `AC` (in HVAC context) | Air Conditioning |
| `HVAC` | Heating, Ventilation, and Air Conditioning (Q170524) |
| `LED` (lighting context) | Light-emitting diode (Q25400) |
| `RTU` (HVAC commercial) | Rooftop Unit |
| `HEPA` | High-Efficiency Particulate Air (Q903517) |
| `IAQ` | Indoor Air Quality |
| `BTU` | British thermal unit (Q205581) |
| `SEER` / `SEER2` | Seasonal Energy Efficiency Ratio (Q7445249) |

**Rule:** Expand all acronyms before Wikidata search. If both forms are widely used, set the long-form as canonical `name` and add the acronym to `alternateName` in schema.

### 4. Brand vs Parent Company

| Brand | Parent | Rule |
|---|---|---|
| Carrier (HVAC brand) | Carrier Global Corporation | Use `Carrier` as `Brand`; `provider` → `Carrier Global Corporation` Organization |
| Trane | Trane Technologies | Same pattern |
| Lennox | Lennox International | Same pattern |
| Goodman | Daikin Industries (owns Goodman) | Brand schema with `parentOrganization` |

**Rule:** Brand entities link to their parent Organization via Wikidata P127 (owned by) or P749 (parent organization). Never confuse the two.

---

## NOT FOUND Fallback (entity has no KG entry)

Most local businesses do not have a Wikidata or KG entry. This is **expected** — Wikidata notability gate excludes small businesses without third-party press coverage. When an entity returns `NOT_FOUND` from both Wikidata and Google KG:

1. **Verify it's truly not found** — search variants: with/without "LLC", "Inc", "Corporation", "Co"; with/without geographic suffix; with apostrophe variations
2. **Check Wikipedia search** — sometimes a Wikipedia article exists but isn't linked to a Wikidata item
3. **Check Google KG via business name search** — sometimes the GBP listing is the KG anchor (look for `/g/` or `/m/` prefixed `@id`)
4. **If still not found:**
   - For a Business entity → use plain `Organization` or specific `LocalBusiness` subtype; do not invent a Q-ID; structure `sameAs` from the platforms you can verify (GBP, Facebook, LinkedIn, Yelp) — these become the entity's de facto identity until Wikidata catches up
   - For a Service entity → fall back to GBP category; if no GBP match, use plain `Service` with descriptive `name`
   - For a Place entity → require at minimum US Census GEOID or USPS ZCTA reference, return `LOW_CONFIDENCE_PLACE`
   - For a Person entity → require LinkedIn URL or published-work URL as @id anchor; return `LOW_CONFIDENCE_PERSON`

**Action item generated for NOT_FOUND business entities:** Create a Wikidata entry once notability is met (third-party press coverage, industry awards, etc.). See `entities-research` § Wikidata property depth.

---

## Workflow

### Single-entity validation

```
Input: "Carrier Corporation"

Step 1: Normalize input (trim, case-normalize, expand acronyms if known)
Step 2: Wikidata wbsearchentities call
Step 3: For top 3 results, pull full item via wbgetentities
Step 4: Score each candidate (label match + alias match + type plausibility + description plausibility)
Step 5: Google KG API call (if API key present)
Step 6: Wikipedia summary call (cross-reference)
Step 7: AI engine recognition test (4 engines, 3-of-4 pass rule)
Step 8: Disambiguation pass (homonyms, brand vs parent, etc.)
Step 9: Schema @type recommendation
Step 10: Emit validation record
```

### Batch CSV validation

For a CSV of N entities:
1. De-duplicate input (lowercased, trimmed) before any API calls
2. Cache Wikidata results during the run (an entity may appear in multiple rows)
3. Rate-limit Wikidata REST API to ≤ 5 req/sec (no auth required but throttle to avoid blocks)
4. Process all entities serially through Steps 1-9; emit one row per input
5. Final CSV has `entity_name, canonical_name, qid, kg_id, wikipedia_url, schema_type, status, disambiguation_note, confidence_score, source_notes`

### Content brief validation

Given a brief markdown file path:
1. Extract every proper noun and named entity from H1/H2/H3 + first sentence of each paragraph + every list item
2. Filter out the client's own brand (covered by other skills) unless content is on the About / Contact page
3. Validate every extracted entity
4. Return a CSV of validations + a flagged list of failures (entities the brief uses that are AMBIGUOUS / NOT_FOUND / WRONG_TYPE)
5. Recommend brief edits (e.g., "change 'Richmond' to 'Richmond, TX'", "use 'Air Conditioning Contractor' not 'AC Guy'")

---

## Status Values (canonical)

| Status | Meaning | Downstream Action |
|---|---|---|
| `VALIDATED` | Wikidata Q-ID + KG match + 3-of-4 AI engines confirm | Use as-is in content + schema |
| `VALIDATED_NO_KG` | Wikidata match, no Google KG entry (still authoritative) | Use Q-ID as sameAs in schema |
| `VALIDATED_LOCAL` | No Wikidata; GBP/Yelp/LinkedIn entity confirmed | Use plain schema type; sameAs from confirmed platforms |
| `AMBIGUOUS` | Multiple plausible Wikidata matches with similar scores | Add geographic/contextual qualifier and re-run |
| `AMBIGUOUS_BUSINESS` | Business name matches multiple distinct businesses | Require website or address to disambiguate |
| `AI_AMBIGUOUS` | Wikidata match exists but AI engines surface a different entity | Flag for review; AI training data may lag |
| `WRONG_TYPE` | Input name resolves to an entity of a different type than expected | Re-check the input — possibly wrong entity entirely |
| `UNRECOGNIZED_TYPE` | Wikidata `instance of` does not map to any known schema @type | Do not invent a schema type; use plain `Thing` or skip |
| `LOW_CONFIDENCE_PLACE` | Place entity without coordinates or country | Add geographic context |
| `LOW_CONFIDENCE_PERSON` | Person entity without LinkedIn/published-work anchor | Require identifier |
| `NOT_FOUND` | No match in Wikidata, KG, or Wikipedia | Fall back per § NOT FOUND Fallback |
| `BLOCKED` | API rate limit or auth failure during validation | Retry after delay; don't proceed with unvalidated entity |

---

## Output Format

### Per-entity CSV row

```
entity_name,canonical_name,qid,kg_id,wikipedia_url,schema_type,sameAs_url,instance_of,status,disambiguation_note,confidence_score,source_notes
Carrier,Carrier Global Corporation,Q5044477,/m/01n4w2,https://en.wikipedia.org/wiki/Carrier_Global,Brand|Organization,https://www.wikidata.org/wiki/Q5044477,public company (Q891723),VALIDATED,"HVAC brand; parent of Carrier brand line. Distinguish from Carrier Corp 1915-2020 (Q1043269) which was the predecessor entity.",0.97,"wikidata+kg+wiki match; 4/4 AI engines confirm"
Richmond,(none),(none),(none),(none),(none),(none),(none),AMBIGUOUS,"Multiple matches: Richmond VA (Q43421), Richmond TX (Q985552), Richmond IN (Q985462), Richmond KY (Q985464), Richmond CA (Q487219). Require state qualifier.",0.0,"5 plausible candidates; no resolution without context"
```

### Validation report markdown

For batch validations or content-brief validation, also write a markdown report:

```markdown
# Entity Validation Report — [source] — [date]

## Summary
- Total entities validated: N
- VALIDATED: N
- AMBIGUOUS / WRONG_TYPE / NOT_FOUND: N
- Flagged for review: N

## Critical issues
[List every AMBIGUOUS / WRONG_TYPE / AI_AMBIGUOUS finding with the resolution required.]

## Validated entities (canonical references)
[Table with entity_name, canonical_name, QID, schema_type, sameAs_url.]

## NOT_FOUND fallbacks
[For each, the fallback strategy (Local business → GBP-anchored, Place → GEOID, Person → LinkedIn).]

## Recommended brief / schema edits
[Concrete edits: "Change 'Richmond' to 'Richmond, TX' on line 47", "Use schema @type='HVACBusiness' not 'LocalBusiness'", etc.]
```

---

## Quality Standards

Before emitting a validation as `VALIDATED`:

- [ ] Wikidata `wbsearchentities` returned a result AND `wbgetentities` enriched it
- [ ] The candidate's `instance of` (P31) maps to a known schema @type
- [ ] Google KG returned a match (if API key available) OR Wikipedia article exists
- [ ] At least 3 of 4 AI engines recognize the entity as expected
- [ ] If it's a Place entity, coordinates and country are present
- [ ] If it's a Business entity, website OR address is present
- [ ] If it's a Person entity, at least one identifier beyond name is present
- [ ] Disambiguation check has been run against the homonym table
- [ ] For brand-vs-parent confusion (Carrier, Trane, etc.), the relationship is correctly captured

A validation that fails any of these gates is not `VALIDATED` — downgrade to the appropriate `AMBIGUOUS` / `LOW_CONFIDENCE` / `NOT_FOUND` status.

---

## Anti-Patterns

- ❌ Returning `VALIDATED` when only Wikidata matched and AI engines disagree — that's `AI_AMBIGUOUS`
- ❌ Inventing a Q-ID — every Q-ID must come from a real Wikidata response
- ❌ Using a Wikidata match for a business when the website URL doesn't match (likely a different business with the same name)
- ❌ Assuming city name without state is unambiguous (Richmond, Springfield, Portland, Aurora all break this)
- ❌ Recommending the wrong schema type because the closest GBP category seemed adequate (use the official taxonomy match)
- ❌ Skipping AI engine cross-check for high-stakes entities (anything going into schema, sameAs, or Knowledge Panel work)
- ❌ Marking a brand as the parent company (Carrier the brand vs Carrier Global the company)
- ❌ Hardcoding client-specific entities into this skill — input always comes from the caller

---

## How Other Skills Consume This

- **`entities-research`** — validates every entity found across the 14 sources before adding to the entity inventory; status becomes a column in the entity inventory CSV
- **`entities-mapping`** — validates each entity before assigning it to a page; refuses to assign `AMBIGUOUS` / `NOT_FOUND` entities to schema fields
- **`entity-extraction`** — every extracted entity flows through validation before salience scoring (no point scoring an entity that doesn't resolve)
- **`content-briefs`** — validates H2/H3 entity references; flags brief edits when ambiguous
- **`schema-generate`** — uses validated `qid` and `kg_id` to build `sameAs` arrays and `@id` references
- **`/deep-research`** — Phase 1 (entity baseline) runs this skill on competitor names + service entities + location entities before any other research begins

The validation CSV from this skill is the contract that downstream skills assume. If validation didn't run, downstream skills should refuse to consume unvalidated entities for any schema or sameAs work.
