---
name: entities-mapping
description: >
  Entity-to-page mapping — takes the validated entity inventory from `entities-research`
  and assigns every entity to the pages where its presence strengthens semantic relevance.
  Sets salience targets per page, validates with `entity-extraction` salience math,
  enforces `@id` consistency across pages, runs entity drift detection (same entity
  named differently across pages), enforces areaServed Wikidata Q-ID rule, applies
  hub-spoke entity inheritance, builds the brand placement matrix, and emits modern
  schema fields (knowsAbout, makesOffer, provider, areaServed, brand, founder).
  Activates on "entity mapping", "map entities to pages", "entity-page mapping",
  "entity distribution", "which entities go on which page", "salience targeting",
  or as a downstream step after `entities-research` inside `/deep-research`. Project-agnostic.
version: 2.0.0
---

# Entities Mapping

Take the validated entity inventory from `entities-research` and produce a precise entity-to-page map. Every entity gets assigned to the pages where its presence strengthens topical relevance; every page gets a salience profile that matches what authoritative competitors do. This skill is **the contract** between research and content — the brief writer and schema generator both consume the entity-page map.

This skill is **project-agnostic**. Pages, services, areas come from the project's site architecture file (`02-site-architecture/page-tracker.csv` or equivalent). Entity inventory comes from `01-research/entities-inventory.csv` (from `entities-research`).

---

## Inputs

| Input | Source | Required |
|---|---|---|
| Entity inventory | `01-research/entities-inventory.csv` (from `entities-research`) | **Required** |
| Page list / site architecture | `02-site-architecture/page-tracker.csv` (or equivalent) | **Required** |
| Per-page entity extraction (existing pages) | `01-research/page-research/[slug]/entity-inventory-[slug].csv` (from `entity-extraction`) | Optional but strongly preferred for existing pages |
| Top-10 competitor entity matrices | `01-research/page-research/[slug]/competitor-entities-[slug].csv` | Optional but used for co-occurrence gap analysis |

If the entity inventory hasn't been validated, refuse to run — re-run `entities-research` first.

---

## Why Entity Mapping Matters

Google + AI engines use entity co-occurrence + entity salience + entity relationship patterns to understand what each page is about. Random placement doesn't work — the **right entity must appear at the right salience on the right page**.

### Salience targets per page

| Salience band | Role | Per-page count |
|---|---|---|
| 0.80+ | Primary entity (what the page is ABOUT) | **Exactly 1** |
| 0.50–0.79 | Major supporting entity | 2–4 |
| 0.30–0.49 | Supporting entity | 3–6 |
| <0.30 | Contextual / incidental | unlimited |

If two entities both score 0.80+, the page has competing macro contexts → focus problem.
If no entity scores 0.70+, the page lacks focus → unranked.

---

## Primary Entity by Page Type

| Page Type | Primary Entity |
|---|---|
| Homepage | The Business entity |
| Hub Service page (umbrella service) | The umbrella Service entity |
| Spoke Service page (specific sub-service) | The specific Service entity |
| Service × Location combo page | Both Service + Location (co-primary at 0.7+ each) |
| Location / Service Area page | The Place entity |
| Neighborhood page | The Neighborhood entity (+ parent City as major supporting) |
| Blog post (problem-solving) | The Problem / Concept entity |
| Blog post (informational) | The Topic entity |
| Blog post (commercial — "best of") | The Service category entity |
| About page | Founder / Owner Person entity + Business entity |
| Contact page | Business entity |
| Team / Bio page | The specific Person entity |
| Pricing page | Service + Price/Offer entity |
| Reviews / Testimonials page | Business entity + Review entity |

For Service × Location combo pages specifically: salience target is **both** entities at 0.7+. Schema must reflect this with `Service` + `Place` both having full schema blocks linked by `provider` + `areaServed`.

---

## Salience Scoring Formula (same as entity-extraction)

When this skill specifies a salience target, it uses the same scoring math as `entity-extraction`. Recap:

**Position weights** — `+0.30` title, `+0.25` H1, `+0.20` first paragraph, `+0.15` any H2, `+0.15` schema primary @id, `+0.10` alt text, `+0.05` schema supporting, `+0.05` anchor text, `-0.10` footer/nav.

**Frequency & distribution** — `+0.20` 5+ total mentions, `+0.15` 3+ section types, `+0.10` in FAQ, `-0.10` mention concentration.

**Contextual richness** — `+0.20` attributes nearby, `+0.15` 2+ related entities co-occurring, `+0.10` connected via verb, `+0.10` internal link to entity's home page.

Sum and cap at 1.0. See `entity-extraction/SKILL.md` § Step 3 for the full formula.

---

## Hub-Spoke Entity Inheritance

When the site has hub + spoke pages for the same topic cluster, entity inheritance rules:

| Page Role | Primary Entity | Major Supporting | Contextual |
|---|---|---|---|
| **Hub page** (e.g., `/services/ac-repair/`) | Umbrella Service entity (e.g., "AC Repair") | Every spoke's primary entity as supporting | Brands serviced, locations |
| **Spoke page 1** (e.g., `/services/ac-repair/emergency-ac-repair/`) | Specific service entity (e.g., "Emergency AC Repair") | Hub's umbrella entity as major supporting (inherited) | Same brands, locations |
| **Spoke page 2** | Different specific service | Same hub entity inherited | |

**Rule:** every spoke inherits the hub's primary entity as a major supporting entity (0.5–0.7 salience). This reinforces the cluster's topical authority. The hub does NOT inherit the spokes' entities at high salience — it lists them as supporting (0.4–0.5).

---

## Location Entity Treatment (areaServed)

**Rule:** every Location entity referenced on any page must use the structured form, not a bare string.

❌ **Wrong:**
```json
"areaServed": ["Houston, TX", "Katy, TX"]
```

✅ **Right:**
```json
"areaServed": [
  {
    "@type": "City",
    "name": "Houston",
    "@id": "https://www.wikidata.org/wiki/Q16555",
    "sameAs": "https://en.wikipedia.org/wiki/Houston"
  },
  {
    "@type": "City",
    "name": "Katy",
    "@id": "https://www.wikidata.org/wiki/Q985568",
    "sameAs": "https://en.wikipedia.org/wiki/Katy,_Texas"
  }
]
```

The Wikidata Q-ID must come from the validated entity inventory (`entities-research` Source 13 + `entity-validate`). Never invent a Q-ID.

---

## Brand Entity Placement Matrix

For businesses that interact with named brands (HVAC contractors install Carrier/Trane/Lennox; landscapers may use specific equipment brands; restaurants reference supplier brands), brand placement follows rules:

| Page Type | Brand Role | Salience | Schema Field |
|---|---|---|---|
| Homepage | Supporting / contextual | 0.3–0.5 | `knowsAbout` (Brand object) |
| Specific brand page (e.g., `/carrier-ac-repair-[city]/`) | **Primary or co-primary** with Service | 0.8+ | Service `brand` + Brand schema block |
| Service hub page | Listed in "Brands we service" section | 0.4–0.5 | `knowsAbout` |
| Service spoke page | Mentioned when relevant | 0.2–0.4 | optional `knowsAbout` |
| Location page | Brief mention if locally relevant | <0.3 | optional |
| Blog post | Only when topically required | varies | varies |

**Parent vs sub-brand rule** — when a brand is owned by a parent corp (e.g., Goodman owned by Daikin), the Brand schema references both:

```json
{
  "@type": "Brand",
  "@id": "https://www.wikidata.org/wiki/Q3105776",
  "name": "Goodman",
  "parentOrganization": {
    "@type": "Organization",
    "name": "Daikin Industries",
    "sameAs": "https://www.wikidata.org/wiki/Q336262"
  }
}
```

---

## Person Entity — `@id` Consistency Rule

Every Person entity (owner, founder, named technician) gets ONE canonical `@id` used on every page that references them. Inconsistent `@id`s = AI engines treat the person as multiple distinct people.

**Canonical pattern:** `https://[domain]/#[role-slug]` (homepage anchor) OR `https://[domain]/about-us/#[name-slug]` (about-page anchor)

Pick one. Use it everywhere — homepage schema, About page schema, every service page that references the person, every blog author byline.

```json
{
  "@type": "Person",
  "@id": "https://[domain]/#owner",
  "name": "[Name]",
  "jobTitle": "Owner",
  "worksFor": {"@id": "https://[domain]/#business"},
  "image": "https://[domain]/images/owner.jpg",
  "sameAs": [
    "https://www.linkedin.com/in/[handle]/",
    "https://www.facebook.com/[handle]/"
  ]
}
```

When a service page references the person as a Service `provider`'s contact:

```json
{
  "@type": "Service",
  "name": "[Service Name]",
  "provider": {"@id": "https://[domain]/#business"},
  "employee": {"@id": "https://[domain]/#owner"}
}
```

The `@id` reference (not full re-declaration) is what binds the entity across pages.

---

## Entity Drift Detection

Run before finalizing the entity-page map. Drift = same entity named differently across pages = entity-resolution confusion.

**Detection process:**

1. For every entity in the inventory, collect every variant form found in any page's `entity-inventory-[slug].csv`
2. For each entity, list distinct surface forms across pages
3. Any entity with ≥2 distinct surface forms is **drifted**

| Entity (canonical) | Variant forms found | Pages | Fix |
|---|---|---|---|
| "Air Conditioning Repair" | "AC repair", "A/C repair", "Air Conditioner Repair", "Air Conditioning Repair" | 12 pages | Pick one canonical, alternateName the rest, edit drifting pages |
| "Houston, TX" | "Houston", "Houston Texas", "Houston, Texas", "Houston, TX" | 23 pages | Standardize to "Houston, TX" in schema; allow "Houston" in body for natural prose, but H1/H2/schema all use canonical |
| "Carrier" | "Carrier", "Carrier Corp", "Carrier AC" | 7 pages | Canonical "Carrier" (Brand); use `alternateName` for variants in schema |

**Fix rule:** the canonical name is the validated name from the entity inventory. Pages using non-canonical surface forms in H1 / H2 / schema must be edited. Body prose can use natural variants for readability, but the canonical must appear at every load-bearing position.

---

## Per-Page Entity Specification

For every Priority 1 page, produce a spec. Template:

```markdown
## Page: [URL]
**Type:** [page type]
**Primary entity:** [canonical name]
**Salience target:** [0.8+]
**Must appear in:** title, H1, first paragraph, ≥1 H2, schema @id, image alt
**Schema @type for primary entity:** [Service / Place / Organization / etc.]

**Major supporting entities (0.5–0.79):**
- [Entity A] — schema field: `areaServed`
- [Entity B] — schema field: `provider`
- [Entity C] — schema field: `knowsAbout`

**Supporting entities (0.3–0.49):**
- [Entity D] — body mention, alt text
- [Entity E] — FAQ answer
- [Entity F] — schema `relatedTo`

**Contextual entities (<0.3):**
- [Entity G] — footer / inline mention

**sameAs network to reference (in schema):**
- [GBP URL]
- [Wikidata URL]
- [other validated platform URLs]

**Knowledge Graph anchors:**
- Primary entity `@id` = [Wikidata QID URL if available]
- Connected via `containedInPlace` / `provider` / `areaServed` / `brand` to: [list]

**Co-occurrence requirements (from competitor matrix):**
- These entities present on ≥7 of 10 competitors — must appear on this page: [list]

**Internal links to render on this page:**
- Link to hub page (if spoke): [URL]
- Link to sibling spoke pages: [URLs]
- Link to relevant location pages: [URLs]
- Link to relevant blog posts: [URLs]
```

---

## Cross-Page Entity Consistency Map

In addition to per-page specs, produce a master cross-page entity-to-page assignment table:

| Entity | Type | Primary on | Major supporting on | Supporting on | Contextual on | Schema `@id` |
|---|---|---|---|---|---|---|
| Business entity | LocalBusiness/[subtype] | Homepage, About, Contact | All service pages, All location pages | Blog posts | — | `https://[domain]/#business` |
| Umbrella Service A | Service | `/services/[service-a]/` | Spoke pages under A | Homepage | Locations | `[domain]/services/[service-a]/#service` |
| Spoke Service A-1 | Service | `/services/[service-a]/[spoke-1]/` | Service hub A | Homepage | Locations | `[domain]/services/[service-a]/[spoke-1]/#service` |
| Primary City | City/Place | `/locations/[city]/` (if exists) OR Homepage | All service pages | Combo pages | Blog | Wikidata Q-ID |
| Neighborhood | Place | Neighborhood page | Combo pages | Service pages | — | Wikidata Q-ID (if exists) |
| Founder/Owner | Person | About / Bio | Homepage | All pages (in footer / about-link) | — | `[domain]/#owner` |
| Brand X | Brand | Brand-specific page (if exists) | Hub service pages | Spoke pages | Other | Wikidata Q-ID |
| Certification | EducationalOccupationalCredential | About, Homepage | All service pages | — | — | issuing-body URL |

This table is the **source of truth** for `schema-generate` — when generating schema for any page, look up which entities should appear and at what role.

---

## Entity Gaps to Fill in Content

The cross-reference between (a) the entity inventory and (b) the current per-page entity extractions reveals gaps:

| Entity | Current status | Action required | Which pages |
|---|---|---|---|
| [Entity] | Missing from content | Add naturally to body | [page list] |
| [Entity] | Present in body, missing from schema | Add to schema | [page list] |
| [Entity] | Inconsistent naming across pages (drift) | Standardize to canonical | [page list] |
| [Entity] | Primary on multiple pages (cannibalization) | Pick one canonical page; demote elsewhere | [page list] |
| [Entity] | Co-occurrence gap (competitors have it, this site doesn't) | Add to relevant pages | [page list] |

This is the punch list for content edits + schema updates.

---

## Output Files

### File 1: `01-research/entities-mapping.md`

Required sections:

1. **Master entity-page assignment table** (cross-page summary)
2. **Per-page entity specifications** for every Priority 1 page
3. **Hub-spoke inheritance map** (which spokes inherit which hub's primary entity)
4. **Entity drift report** (variants found, canonical fix per variant)
5. **Brand placement matrix** (which brands on which pages at which role)
6. **Person entity `@id` registry** (the canonical `@id` for each Person)
7. **Location entity Wikidata Q-ID registry** (every City/Place with its Q-ID)
8. **Co-occurrence gap list** (per-page entity gaps from competitor comparison)
9. **Entity gaps to fill in content** (the punch list — what to edit)
10. **Schema field map** (entity → recommended schema field per page type)

### File 2: `01-research/entities-mapping.csv`

```
entity_name,entity_type,canonical_name,qid,kg_id,schema_type,page_url,page_type,entity_role,salience_target,must_appear_in,schema_field,id_anchor,inherits_from,co_occurrence_required,validation_status,notes
```

| Column | Allowed values |
|---|---|
| `entity_role` | `primary` / `co_primary` / `major_supporting` / `supporting` / `contextual` / `schema_only` |
| `salience_target` | `0.8+` / `0.5-0.79` / `0.3-0.49` / `under_0.3` |
| `must_appear_in` | pipe-separated: `title\|h1\|h2\|first_para\|body\|alt\|schema\|footer\|all` |
| `schema_field` | `name` / `provider` / `areaServed` / `sameAs` / `founder` / `knowsAbout` / `brand` / `memberOf` / `parentOrganization` / `employee` / `relatedTo` / `containedInPlace` |
| `inherits_from` | URL of hub page (for spoke pages inheriting hub's primary) |

### File 3: `01-research/entity-id-registry.md`

The canonical `@id` registry — every entity's stable `@id` used across the site:

```
Business: https://[domain]/#business
Owner/Founder: https://[domain]/#owner
Hub Service A: https://[domain]/services/[service-a]/#service
Spoke A-1: https://[domain]/services/[service-a]/[spoke-1]/#service
City A: https://www.wikidata.org/wiki/Q[id]
Brand A: https://www.wikidata.org/wiki/Q[id]
Certification: [issuing-body URL]
```

Every schema block on every page must use these `@id` values. Schema generators that invent new `@id`s break the entity graph.

---

## Quality Standards

- [ ] Every Priority 1 page has a complete per-page entity spec
- [ ] No page has more than one entity at 0.8+ salience (or co-primary with explicit 0.7+ each)
- [ ] Every page has at least one entity at 0.8+ (focus check)
- [ ] Every Location entity uses Wikidata Q-ID in schema (not bare string)
- [ ] Person `@id` is consistent across all pages that reference the person
- [ ] Brand placement matrix has no contradictions (e.g., a brand assigned primary on two different pages)
- [ ] Entity drift report shows no remaining drift after fix actions
- [ ] Hub-spoke inheritance is correctly applied (spokes inherit hub's primary as major supporting)
- [ ] Co-occurrence gap list has been merged into per-page specs
- [ ] Schema field map covers every entity in the inventory
- [ ] Output CSV passes a sanity check: no entity assigned `primary` on more than one page (cannibalization gate)

---

## Anti-Patterns

- ❌ Assigning the same entity `primary` to two different pages (entity cannibalization — pick one canonical and demote elsewhere)
- ❌ Using bare-string City names in schema `areaServed` (use the structured `City` object with `@id` → Wikidata)
- ❌ Inventing `@id` URLs instead of using the registry
- ❌ Allowing entity drift in H1 / H2 / schema (body prose can vary; load-bearing positions cannot)
- ❌ Mapping every entity to every page (entity overload — pages with too many entities lose focus)
- ❌ Skipping hub-spoke inheritance (spokes that don't inherit lose cluster authority signal)
- ❌ Treating brand mentions as decorative — brand entities have specific schema fields (`brand`, `knowsAbout`) and specific page roles
- ❌ Producing the map without running entity drift detection — drift undetected = wasted schema work later
- ❌ Hardcoding client-specific service names or location names in this skill — input always comes from `entities-research` inventory + page-tracker

---

## How Other Skills Consume This

- **`schema-generate`** — uses the per-page entity spec + the `@id` registry + the schema field map to build complete JSON-LD with correct `@id` references, `sameAs`, `areaServed`, `provider`, `knowsAbout`, `brand`, `founder`, `employee` fields
- **`content-briefs`** — uses the per-page entity spec to populate "entities the brief must include" + "internal links to render" sections
- **`content-generation`** — uses canonical entity names; respects the salience targets (primary entity must appear in H1, first paragraph, ≥1 H2)
- **`entity-extraction`** — re-runs per-page after content edits to verify salience targets are met
- **`internal-linking`** — uses the cross-page entity assignment to compute internal-link priorities (entity X is primary on page Y → every page where X is supporting should link to Y)
- **`humanizer`** — must preserve canonical entity strings; the entity-page map is read-only input
- **`/deep-research`** — Phase 4.1 runs this skill after `entities-research` Phase 4

The cross-page entity assignment table is the contract. If a downstream skill is building schema or content that doesn't match the assignment, the mismatch is a bug — fix the table or fix the downstream output, never silently diverge.
