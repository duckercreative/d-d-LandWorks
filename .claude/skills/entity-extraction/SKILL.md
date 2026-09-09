---
name: entity-extraction
description: >
  Extract, audit, score, and map every entity on a page using NLP principles and a salience
  scoring formula. Identifies the primary entity, supporting entities, contextual entities,
  Knowledge Graph alignment, schema-vs-content gaps, entity-attribute completeness, co-occurrence
  patterns, and disambiguation issues. Foundational entity-first SEO audit.
  Activates on "entity extraction", "entity audit", "extract entities", "page entities",
  "entity salience", "extract concepts", "named entity recognition", "NER audit", or as a
  per-page gate inside `entities-mapping` and `/deep-research`. Project-agnostic.
version: 2.0.0
user-invokable: true
argument-hint: URL | file path | raw text
---

# Entity Extraction & Salience Audit

Extract every entity from a page, score its salience, map its type and relationships, verify Knowledge Graph alignment, and surface the gaps (missing entities, missing attributes, missing schema, missing co-occurrence). This is the foundational entity-first SEO audit — runs once per page, feeds `entities-mapping`, `schema-generate`, and content briefs.

This skill is **project-agnostic**. Works for HVAC, landscaping, plumbing, dental, legal, restaurants, retail, or any local-service vertical. Industry-specific entity taxonomy is read from project files at run-time (`services-list.md`, `business-info.md`), never hardcoded into this skill.

> **Koray GUBUR principle**: *"Once you're able to extract entities and concepts, you will start to realise there is a user behaviour pattern... it will start to be about actual entities, concepts, interest areas, more than keywords."*

---

## When to Use

- Auditing an existing page before rewriting it (what's the current entity profile?)
- Per-page Phase 3 of `/deep-research` (extract entities from competitor top-10 pages)
- Validating that a published page actually contains the entities the brief specified
- Pre-flight check before generating schema (every entity in schema should be in body, every primary body entity should be in schema)
- Diagnosing why a page isn't ranking when keywords look right (often: missing primary entity reinforcement, or competing primary entities)
- Diagnosing why AI engines don't cite a page (often: the entity the page is "about" isn't clearly identified)

---

## Inputs

1. **URL** — `entity-extraction https://example.com/services/ac-repair/`
2. **Local file path** — `entity-extraction 07-landing-pages/content/ac-repair-houston-content.md`
3. **Raw text block** — for ad-hoc analysis of a paragraph
4. **HTML snippet** — for analyzing a specific section

For URL inputs, fetch raw HTML (do not rely on rendered text only — schema markup lives in `<script type="application/ld+json">` tags). Parse:
- `<title>` + meta description
- All headings `<h1>` through `<h6>`
- All paragraphs
- All `<a>` anchor text and `href` (links are entity references)
- All `<img alt>` (entity references in alt text)
- All `<script type="application/ld+json">` blocks (schema entities)

---

## Workflow — 8 Steps

### Step 1: Full Entity Extraction

Read the page (or file) and extract EVERY entity mentioned. Apply Named Entity Recognition (NER) — either via:

**Production-grade NER** (preferred when available):
- **spaCy `en_core_web_trf`** — transformer-based, best accuracy
- **Google Cloud Natural Language API** — `analyzeEntities` endpoint returns entities + salience scores + Wikipedia URLs (no need to build salience math from scratch)
- **HuggingFace Inference API** — `dslim/bert-base-NER` or `Davlan/xlm-roberta-base-ner-hrl`
- **AWS Comprehend** — `DetectEntities` endpoint

**Manual extraction** (when no tooling): read systematically, list every proper noun + named concept + measured quantity + date. The 11-type taxonomy below ensures coverage.

### Step 2: Entity Type Classification

Classify every extracted entity into one of these 11 types:

| Type | What It Is | Schema @type Mapping |
|---|---|---|
| **Organization** | Companies, government bodies, NGOs, agencies, trade associations | `Organization`, `LocalBusiness` + specific subtype |
| **LocalBusiness** | Specific local establishments (venues, restaurants, schools, partners, competitors) | Specific schema subtype (`Restaurant`, `Plumber`, `HVACBusiness`, etc.) |
| **Place / Location** | Geographic areas — countries, states, cities, neighborhoods, named landmarks, infrastructure | `Place`, `City`, `AdministrativeArea`, `LandmarksOrHistoricalBuildings` |
| **Service** | The services offered or referenced | `Service` |
| **Product / Equipment** | Physical products, tools, equipment, systems referenced | `Product`, `IndividualProduct` |
| **Brand** | Manufacturer / product-line brands (often parents of Products) | `Brand` |
| **Event** | Conferences, festivals, sporting events, seasonal occurrences, weather events | `Event` |
| **Person** | Authors, owners, technicians, founders, public figures | `Person` |
| **Certification / License** | Industry certifications, professional licenses, accreditations | `EducationalOccupationalCredential` |
| **Quantitative** | Prices, distances, durations, capacities, ratings, percentages, dates | `QuantitativeValue`, `MonetaryAmount`, `Duration` |
| **Concept** | Industry concepts, problems, methods, conditions | `Thing` or `DefinedTerm` |

For each entity, record:

```
Entity name: [exact form used in text]
Type: [one of 11 above]
First mention position: [title / meta / h1 / h2 / first-paragraph / body / footer / schema / alt-text]
Mention count: [total occurrences across all positions]
Positional inventory: { title: N, h1: N, h2: N, first_para: N, body: N, alt: N, schema: N }
Naming consistency: [Y/N — does the page use the same form every time?]
Variant forms used: [list all alternate forms]
```

### Step 3: Salience Scoring

Score every entity 0.0–1.0 using this formula. Each factor contributes additively; cap at 1.0.

**Positional weights** (highest leverage):

| Position | Weight |
|---|---|
| In `<title>` / meta title | +0.30 |
| In H1 | +0.25 |
| In first paragraph (first ~100 words) | +0.20 |
| In any H2 | +0.15 |
| In first sentence of any H2 section | +0.10 (additional) |
| In schema `@id` / `name` of primary entity | +0.15 |
| In schema as supporting entity (provider, areaServed, etc.) | +0.05 |
| In image `alt` text | +0.10 |
| In `<a>` anchor text (internal link target) | +0.05 |
| In footer / nav (boilerplate position) | -0.10 (negative — discount boilerplate) |

**Frequency & distribution** (reinforces but does not replace position):

| Signal | Weight |
|---|---|
| Mentioned 5+ times total | +0.20 |
| Mentioned across 3+ section types (h1+body+alt, etc.) | +0.15 |
| Mentioned in at least one FAQ answer | +0.10 |
| Mention concentration (clustered in one paragraph) | -0.10 (penalty — not distributed) |

**Contextual richness** (relationships and attributes):

| Signal | Weight |
|---|---|
| Has attributes described nearby (price, capacity, distance, date) | +0.20 |
| Surrounded by related entities (co-occurrence with 2+ semantically related entities) | +0.15 |
| Connected via verb to another entity ("provides", "located in", "uses") | +0.10 |
| Has internal link pointing to its own page | +0.10 |

**Salience score interpretation:**

| Range | Role | Page Implication |
|---|---|---|
| 0.80–1.00 | Primary entity | This is what the page is ABOUT |
| 0.50–0.79 | Major supporting | Important to the page's topic |
| 0.30–0.49 | Supporting | Adds context and depth |
| 0.10–0.29 | Contextual | Referenced but not central |
| 0.00–0.09 | Incidental | Barely relevant; may be boilerplate |

**Target salience profile per page:**
- **1** primary entity at 0.80+
- **2–4** major supporting at 0.50–0.79
- **3–6** supporting at 0.30–0.49
- Remaining as contextual / incidental

**Red flags** (the page has a focus problem):

| Symptom | Diagnosis |
|---|---|
| No entity scores above 0.70 | Page lacks focus — not clear what it's about |
| Multiple entities score 0.80+ | Competing macro contexts — dilution; reader and Google both confused |
| Primary entity mentioned only 1-2 times | Insufficient reinforcement; Google may not lock onto it |
| Primary entity absent from schema | Schema and content disagree — Google trusts schema less |
| Primary entity in title but not in body, or vice versa | Title-body mismatch — feels like clickbait to Google |
| Mention concentrated in one section only | Lacks distribution — looks keyword-stuffed |

### Step 4: Knowledge Graph Alignment

For every Tier 1 entity (primary + major supporting), validate against Knowledge Graph via the `entity-validate` skill. Record:

| Field | Value |
|---|---|
| Wikidata QID | from `entity-validate` |
| Google KG @id | from `entity-validate` |
| Wikipedia URL | from `entity-validate` |
| Recommended schema @type | from `entity-validate` |
| sameAs URL | Wikidata URL or KG-resolvable URL |

**Schema sameAs / @id integration check:**

For every entity with a Wikidata or KG match, the page's schema should reference it:

```json
{
  "@type": "City",
  "name": "Houston",
  "@id": "https://www.wikidata.org/wiki/Q16555",
  "sameAs": "https://en.wikipedia.org/wiki/Houston"
}
```

```json
{
  "@type": "Brand",
  "name": "Carrier",
  "@id": "https://www.wikidata.org/wiki/Q5044477",
  "sameAs": "https://en.wikipedia.org/wiki/Carrier_Global"
}
```

If the entity has a KG match but isn't referenced in schema → flag as a missing schema link.

### Step 5: Disambiguation Audit

Check every entity for ambiguity. Common patterns:

| Pattern | Resolution |
|---|---|
| City name without state | Add state qualifier (e.g., "Richmond" → "Richmond, TX") |
| Brand name that matches multiple businesses | Add disambiguator (e.g., "Carrier" → "Carrier HVAC", or "Carrier Global Corporation" for the parent) |
| Person name (common name) | Add role qualifier ("Kenny Ho, lead technician at [Business]") |
| Industry acronym | First mention spells out the term: "Heating, Ventilation, and Air Conditioning (HVAC)" |
| Service name that's also a generic noun | Quote or capitalize as a proper service: "Tune-Up" not "tune-up" |
| Place name shared with other countries (Manchester, Cambridge, etc.) | Add country/state context |

For every ambiguous entity, run `entity-validate` and use the canonical name.

### Step 6: Entity Relationship Mapping

Map how entities relate to each other on the page. Use the schema.org verb vocabulary:

```
[Business] --provider of--> [Service]
[Service] --availableAt--> [Place]
[Service] --offers--> [Product]
[Product] --brand--> [Brand]
[Place] --containedInPlace--> [Parent Place]
[Person] --worksFor--> [Business]
[Business] --memberOf--> [Trade Association]
[Service] --uses--> [Equipment]
[Service] --solves--> [Problem]
[Service] --certifiedBy--> [Certification]
```

**Missing relationships to add** — for each major entity pair, ask: is the relationship explicit in the body? If implicit only, that's a content improvement opportunity:

- Are services linked to the equipment/products they use?
- Are places linked to their parent (Houston → contains → Heights neighborhood)?
- Are services linked to the problems they solve?
- Are certifications linked to their issuing body?
- Are brands linked to their parent organizations?

### Step 7: Entity-Attribute Completeness

For each major entity, check whether the attributes a reader (and Google) would expect are present:

**Place entity attributes** (per major Place entity on the page):
- [ ] Official name
- [ ] ZIP / postcode
- [ ] Parent administrative area (county, region)
- [ ] Distance from a known reference (downtown, airport, business location)
- [ ] Notable landmarks
- [ ] Adjacent places
- [ ] Coordinate location (if it appears in schema)

**Service entity attributes:**
- [ ] Name
- [ ] Starting price or price range (or explicit "free estimate")
- [ ] Service area
- [ ] Duration / typical turnaround
- [ ] Inclusions (what's covered)
- [ ] Exclusions (what's not)
- [ ] Booking / call-to-action path
- [ ] Warranty / guarantee (if applicable)

**Business entity attributes:**
- [ ] Legal/trading name
- [ ] Address
- [ ] Phone
- [ ] Hours
- [ ] License # (industry-dependent)
- [ ] Years in business / founded year
- [ ] Service areas (named, not just "nearby")
- [ ] Primary social profiles (in sameAs)

**Person entity attributes** (if a Person is referenced):
- [ ] Full name
- [ ] Role/title
- [ ] Affiliation (worksFor)
- [ ] Credentials (if relevant)
- [ ] Photo (in schema imageObject)

**Product / Equipment entity attributes:**
- [ ] Name / model
- [ ] Brand
- [ ] Capacity / specs (if relevant)
- [ ] Use cases / applications

**Certification entity attributes:**
- [ ] Issuing body
- [ ] Credential ID / license number (if applicable)
- [ ] Date issued / expiration
- [ ] Public verification URL

Missing attributes = direct content improvement targets.

### Step 8: Schema-vs-Content Gap Detection

Cross-reference the entity inventory against the page's schema markup. Three gap types:

**Gap A — Schema has entities not in content body**:
- Schema mentions a `provider` Organization, but the body never names it
- Schema lists `areaServed` cities the body doesn't mention
- → Either expand body or trim schema; schema lying about content quality fails Google rich-result validation

**Gap B — Content body has entities not in schema**:
- Body mentions a brand 5 times but schema has no `brand` reference
- Body covers a service comprehensively but schema has no `Service` block
- → Add schema to match — every primary/major-supporting body entity should have a schema representation

**Gap C — Naming inconsistency between schema and body**:
- Schema: `"name": "Air Conditioning Repair"`, body: "AC fix" — different surface forms confuse Google
- → Standardize to one canonical name; use schema's `alternateName` for variants

---

## Co-Occurrence Pattern Detection

Beyond individual entities, audit which entities **co-occur**. The Koray method: in authoritative content for any topic, certain entities always appear together. Their absence weakens topical authority.

For the page's primary entity, list the entities that authoritative competitors mention alongside it:

1. Pull top 10 competitor pages for the page's primary keyword (use `keyword-research` / `/deep-research` output)
2. Run entity extraction on each
3. Count entity co-occurrences across competitors
4. For any entity that appears on ≥7 of 10 competitor pages but NOT on the audited page → that's a co-occurrence gap

**Output:** a ranked list of "missing co-occurring entities" — entities Google expects on a page about this topic.

---

## Output Format

### Per-page CSV: `entity-inventory-[slug].csv`

```
entity_name,entity_type,canonical_name,qid,kg_id,schema_type,salience_score,role,first_position,mention_count,positions,disambiguation_status,sameAs_url,attributes_missing,co_occurrence_status,notes
"Air Conditioning Repair",Service,"Air Conditioning Repair",,,Service,0.92,primary,h1,18,"title|h1|h2|first_para|body|alt|schema",VALIDATED,,"price_range,warranty",,
"Houston, TX",Place,"Houston",Q16555,/m/03qq3,City,0.74,major_supporting,first_para,12,"first_para|h2|body|schema",VALIDATED,"https://www.wikidata.org/wiki/Q16555","zip_codes",,
"Carrier",Brand,"Carrier Global Corporation",Q5044477,/m/01n4w2,Brand,0.41,supporting,body,5,"body|alt",VALIDATED,"https://www.wikidata.org/wiki/Q5044477",,present-on-8-of-10-competitors,
"75 Degree AC",LocalBusiness,"75 Degree AC",,,HVACBusiness,0.68,major_supporting,first_para,9,"first_para|h2|body|footer|schema",VALIDATED_LOCAL,,"founded_year",,
```

### Per-page markdown report: `entity-extraction-[slug].md`

```markdown
# Entity Extraction Report — [Page Name / URL] — [Date]

## Salience Profile
- Primary entity: [name] (score X.XX) — [VALIDATED / status]
- Major supporting: [N entities]
- Supporting: [N entities]
- Contextual: [N entities]

**Profile health:** Focused / Diluted / Unfocused
**Diagnosis:** [one line — what's wrong if anything]

## Primary Entity Audit
[Detailed audit of the primary entity: salience math, positions, KG alignment, attributes, schema presence]

## Major Supporting Entities Audit
[Per-entity audit for each major supporting]

## Missing Entities (Co-Occurrence Gaps)
Entities present on ≥7 of 10 competitor pages but absent here:
| Entity | Type | Present on N competitors | Recommended placement |

## Disambiguation Issues
| Entity | Issue | Resolution |

## Knowledge Graph Gaps
| Entity | KG match exists? | In schema sameAs? | Action |

## Attribute Completeness Gaps
| Entity | Missing attributes |

## Schema-vs-Content Gaps
| Gap type | Entity | Recommended fix |

## Entity Relationship Map
[The relationship graph for this page's entities]

## Top 5 Action Items (Prioritized)
1. [Highest-leverage entity fix]
2. ...
```

---

## Quality Standards (pre-finalization)

Before emitting an entity inventory:

- [ ] Every entity has a type from the 11-type taxonomy
- [ ] Every entity has a salience score with traceable factor math
- [ ] One entity scores 0.80+ (primary); not more than one
- [ ] Knowledge Graph alignment run for all primary + major supporting entities
- [ ] Every ambiguous entity has been resolved or flagged
- [ ] Co-occurrence comparison against ≥3 competitor pages (≥7 preferred)
- [ ] Schema-vs-content gap detection has run
- [ ] Attribute completeness checklist applied to every Tier 1 entity
- [ ] Output CSV has all entities with required columns
- [ ] Markdown report includes the prioritized top-5 actions

---

## Anti-Patterns

- ❌ Treating every named noun as an "entity" without type classification — without types, downstream skills can't use the inventory
- ❌ Scoring salience by frequency alone — position is the strongest signal; a single mention in the H1 beats five mentions in the footer
- ❌ Skipping schema markup during extraction — schema JSON-LD entities count for salience too
- ❌ Skipping disambiguation for entities that "obviously" mean the local version (Richmond, Springfield, Cambridge — name a few times you've been wrong)
- ❌ Marking two entities as primary because you can't decide — that's the diagnosis, not a non-decision
- ❌ Counting boilerplate (footer NAP, nav anchors) toward primary-entity salience — boilerplate gets a positional penalty
- ❌ Hardcoding industry-specific entity lists inside this skill — the taxonomy is generic; industry specifics come from the project's services-list, business-info, and competitor pages
- ❌ Running this skill once and never re-running after content edits — re-extract whenever the body changes meaningfully

---

## How Other Skills Consume This

- **`entities-mapping`** — consumes per-page entity inventories to build the cross-site entity-to-page map; ensures the right entity has the right salience on the right page
- **`schema-generate`** — uses the inventory's KG QIDs and recommended @types to build clean JSON-LD with proper `@id` references and `sameAs` arrays
- **`content-briefs`** — uses the co-occurrence gap list to populate "entities the page must include" in briefs
- **`/deep-research`** — Phase 3 runs this skill on top-10 competitor pages to build the cross-competitor entity matrix
- **`entity-validate`** — called per-entity inside Steps 4 and 5 (the validation gate)
- **`humanizer`** — the salience profile informs which entities must be retained verbatim during humanization (don't paraphrase the primary entity name)

Re-run this skill whenever:
- The page content is edited
- The page's primary keyword target changes
- New competitors enter the top 10 for the target query
- Schema markup is updated
