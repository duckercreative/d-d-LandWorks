---
name: entities-research
description: >
  Entity research methodology using the Koray Gubur 14-source + Source 14a (local PR/news
  6.5× AI Overview multiplier) approach. Maps business, service, location, person, brand,
  product, certification, event, and concept entities; identifies sameAs network gaps with
  2026 AI citation correlation data (YouTube 0.737, Facebook 0.512, Yelp 0.489, BBB 0.401);
  prioritizes Wikidata as the Truth Node for Google Knowledge Panel + OpenAI training data;
  validates Foursquare (60–70% of ChatGPT local recs), Apple Maps Connect (Siri pipeline),
  Bing Places (Alexa pipeline), ThreeBestRated (24% AI citation), Birdeye (aggregated review
  signal); builds the Wikidata property depth table; runs the AI engine direct recognition
  test across ChatGPT/Perplexity/Gemini/Copilot/Claude; produces an entity inventory with
  validation status + a prioritized sameAs action plan with realistic Knowledge Panel
  timeline (3–6 months). Activates on "entity research", "research entities", "map entity
  signals", "check Knowledge Graph", "analyse sameAs network", "entity SEO", "Knowledge
  Panel audit", "AI entity recognition", or as Phase 1/4 of `/deep-research`. Project-agnostic.
version: 2.0.0
---

# Entity Research — Koray Methodology + 2026 AI Citation Stack

Map the business entity, every service entity, every location entity, every person entity, every brand the business interacts with, and the relationships between them. Identify Knowledge Graph gaps and the sameAs network gaps that block Knowledge Panel emergence and AI citation. Pair this with `entity-extraction` (per-page) and `entities-mapping` (entity-to-page distribution).

See `references/entity-signals.md` for the full 5-layer entity establishment stack.

This skill is **project-agnostic**. Business identity, services, areas, license, and existing sameAs network are read from the project's own files (`business-info.md`, `services-list.md`, `service-areas.md`, `CLAUDE.md`) at run-time. Never hardcode client-specific entities into this skill.

> **Koray GUBUR principle**: *"AI models build entity understanding through entities and their relationships. The website must build a clear entity in Google's Knowledge Graph. Every entity added must be validated and properly attributed."* See `entity-validate` skill — validation is a gate, not an option.

---

## Inputs (read BEFORE any source query)

| Input | Where it lives | Why |
|---|---|---|
| Business identity (name, NAP, license, founded year, owner) | `business-info.md` + `CLAUDE.md` | The canonical entity profile |
| Services | `services-list.md` | Each service is its own sub-entity |
| Service areas | `service-areas.md` | Location entities + areaServed mapping |
| Brands serviced/sold | competitor pages + business about page + GBP | Product/brand entities |
| Existing sameAs URLs | Organization schema on homepage + manually-tracked list | Avoid re-discovering |
| Competitor list | `01-research/competitors/top-players.md` (or equivalent) | Source 1, 2, 11 |
| Existing entity research | prior runs of this skill | Build on, don't duplicate |

If a file is missing, skip the input gracefully and log the gap in the output notes — never invent attributes.

---

## What Is an Entity (11 types)

Use the same 11-type taxonomy as `entity-extraction` for consistency across the pipeline:

1. **Organization** — companies, government bodies, NGOs, trade associations
2. **LocalBusiness** — specific local establishments (competitors, partners, customer venues, suppliers)
3. **Place / Location** — countries, states, cities, neighborhoods, named landmarks
4. **Service** — each service offered, with parent/child hierarchy
5. **Product / Equipment** — products sold or installed, equipment used
6. **Brand** — manufacturer / product-line brands serviced or installed
7. **Event** — events that create demand (seasonal weather, conferences, regional events)
8. **Person** — owners, founders, named technicians, authors, public figures
9. **Certification / License** — industry credentials, professional licenses, accreditations
10. **Quantitative** — pricing, ratings, response times, business metrics
11. **Concept** — industry problems, methods, conditions, technical terms

---

## Research Process — 14 Sources + Source 14a

Run **ALL 14 sources + 14a**. Never fabricate. Every entity must be found through real research. Every entity must pass `entity-validate` before being added to the inventory.

**Source 1 — Competitor entities (on-page).** Visit top 5 organic competitors for each core query. Run `entity-extraction` on their homepage + key service pages. List every entity they reinforce. Common patterns: their service taxonomy, brands they highlight, location entities, certifications referenced.

**Source 2 — Competitor entity gaps.** Same 5 competitors: what entities do they NOT cover that clearly belong in the niche? Often: missing brand mentions, missing certification, missing problem entities, missing community/event entities. Gaps = opportunities.

**Source 3 — SERP entities.** For every core query, capture entities visible in: organic titles + meta descriptions, local pack title row + category labels, Knowledge Panel + sitelinks, image pack labels, video carousel titles, ad headlines. Every entity Google surfaces in the SERP for this query is part of the topical entity set.

**Source 4 — PAA entities.** For every core query, expand the PAA box to 8+ questions (re-expand to load more). Extract entities from each question. PAA questions are Google's distilled view of related entities; entities appearing in PAA have high topical authority weight.

**Source 5 — Rich-snippet / featured-snippet entities.** What entities populate featured snippets for queries in this niche? Featured snippets are the entities Google trusts most for a query — these are entities your content must reference if you want to compete for the snippet.

**Source 6 — Forum entities.** Reddit + Quora + niche industry forums (search via Google `site:reddit.com [niche] [city]`). What product names, problem names, brand names, technique names come up in thread titles + top answers? Forum entities reveal how customers actually name things vs how the industry names them.

**Source 7 — Social platform entities.** YouTube + Pinterest + TikTok + relevant Facebook Groups + LinkedIn (where applicable). Search core service queries. Extract entities from video titles, hashtags, board names, group discussion topics. YouTube has highest AI-citation correlation (0.737) — what your industry talks about on YouTube is what AI engines have learned to repeat.

**Source 8 — Ad entities.** Run core queries in incognito, observe Google Ads + Local Services Ads + Performance Max. Capture entities from ad headlines + descriptions + extensions (callouts, sitelinks, structured snippets). Advertisers spend money to use the *converting* entity language — these are the trust + intent entities.

**Source 9 — AI Overview entities.** Which queries trigger AI Overview? For each AIO that appears, capture: (a) the entities the AIO answer surfaces, (b) the source domains cited, (c) the question framing used. These are the highest-leverage entities — winning AIO citation depends on matching this entity set.

**Source 10 — AI tool / direct AI engine recognition test.** Ask each major AI engine — ChatGPT, Perplexity, Gemini, Claude, Copilot — three questions:

| # | Prompt template |
|---|---|
| 1 | "What do you know about [business name] in [city]?" |
| 2 | "Who are the best [primary service] companies in [city]?" |
| 3 | "Tell me about [primary service] in [city] — what should I know?" |

For each engine, document: (a) is the client named? (b) what competitors are named? (c) what entities (brands, certifications, neighborhoods, problems) does the engine attach to the niche? (d) what sources does it cite? Repeat after every major sameAs network change to measure delta.

**Source 11 — GBP profile entities.** Open the GBP listings of the top 3-5 local pack winners. Capture: primary category, all secondary categories, every named service in the services list, attributes (year established, ownership, accessibility, payment options), recent posts, and the "Ask about this place" AI answers where shown (Gemini replaced the Q&A section, which Google removed in late 2025 — don't go looking for a Q&A block). GBP categories are Google's canonical entity taxonomy for local — every category on a competing GBP is a confirmed entity in Google's local entity model.

**Source 12 — Review platform entities.** Read 20-30 Google + Yelp + BBB + Nextdoor reviews of competitors AND of the client (if reviews exist). Extract: (a) product / equipment entities customers name ("they fixed the capacitor", "installed a 4-ton Carrier"), (b) problem entities ("AC was leaking", "freezing up"), (c) place entities (named neighborhoods, landmarks), (d) person entities (owners + technicians customers name), (e) outcome entities ("same-day service", "fair pricing"). Reviews are the highest-fidelity entity source for natural language — these are the words customers use *before* they find the business.

**Source 13 — Knowledge Graph + Knowledge Panel state.** For the client business name, search Google `"[business name] [city]"` and document:
- Knowledge Panel present? Yes / Partial (limited fields) / No
- If yes: what fields populate (description, founded date, hours, phone, address, reviews summary)?
- Sitelinks present?
- Knowledge Panel image source?
- "Suggested edits" pending?

Then search Wikidata `wikidata.org/w/index.php?search=[business name]`. Entity exists? If yes, what properties are filled? See `references/entity-signals.md` § Wikidata Property Depth.

**Source 14 — Co-occurrence method (Koray).** What entities ALWAYS appear alongside the business type + city in authoritative content? Across competitors + AI Overview citations + Wikipedia (if the industry has an article) + trade publications. These are the associative entity connections that signal topical authority. List entities present on ≥7 of 10 competitor pages.

**Source 14a — Local PR / news co-occurrence (6.5× AI Overview multiplier).** Onely 2025 finding: AI Overviews are **6.5× more likely to cite content via external sources** (third-party press) than self-published content. Search for the business name in:

- Major regional newspaper (e.g., Houston Chronicle, LA Times) — `site:[paper].com "[business name]"`
- Regional alt-weekly (Houston Press, etc.)
- Regional business journal (bizjournals.com or equivalent)
- Community / hyperlocal news (e.g., Community Impact, Patch.com, neighborhood newsletters)
- Industry trade publications (vertical-specific — e.g., ACHR News for HVAC, Lawn & Landscape for landscaping)
- Local Chamber of Commerce member pages
- HOA / neighborhood newsletter mentions
- Podcast guest appearances (with show-notes transcripts)

For each mention found, capture: source URL, date, context, link-or-mention status. **A business with zero third-party mentions has a critical entity authority gap** — building local PR coverage becomes a CRITICAL action item, not nice-to-have.

---

## Validation Gate

Every entity discovered through Sources 1–14a runs through the `entity-validate` skill before being added to the inventory. Acceptance criteria:

| Status | Action |
|---|---|
| `VALIDATED` / `VALIDATED_NO_KG` / `VALIDATED_LOCAL` | Add to inventory with QID + KG ID + canonical name |
| `AMBIGUOUS` / `AMBIGUOUS_BUSINESS` | Add to inventory but flag — require disambiguation before any schema work |
| `AI_AMBIGUOUS` | Add to inventory; note the AI delta for tracking |
| `NOT_FOUND` / `LOW_CONFIDENCE_*` | Add to inventory with fallback (per `entity-validate` § NOT FOUND Fallback) |
| `WRONG_TYPE` / `UNRECOGNIZED_TYPE` | Do NOT add — re-extract from source |

---

## sameAs Network Priority (2026 — AI citation data)

The classic NAP-consistency framing is incomplete for 2026. AI citation data reorders priorities. Use this priority table; treat **Wikidata + Foursquare** as CRITICAL (they were "HIGH" in earlier methodologies — both are now load-bearing):

| Platform | Priority | Why (2026 evidence) | URL pattern |
|---|---|---|---|
| **Wikidata** | **CRITICAL — Truth Node** | Google Knowledge Panel + OpenAI training data both treat Wikidata as authoritative. 26–48% of ChatGPT top-10 citations route through Wikipedia (which Wikidata feeds). Validated: ClickRank 2026, 5W AI Platform Citation Source Index 2026. | wikidata.org/wiki/Q… |
| **Foursquare** | **CRITICAL — claim immediately** | 60–70% of ChatGPT local recommendations source from Foursquare's POI database (validated 2026-05). Highest-leverage action most local businesses skip. | foursquare.com/v/… |
| **Google Business Profile** | **CRITICAL** | Local pack + Gemini direct citation. The cornerstone of local entity identity. | maps.google.com/place/… |
| **YouTube channel** | **CRITICAL (0.737 AI citation correlation)** | #1 most-cited domain across AI engines. 34% growth in 6 months. Even 6 video uploads with consistent name + description + link beat zero. | youtube.com/@[handle] |
| **Apple Maps Connect** | **HIGH (Siri / Apple Intelligence pipeline)** | 58% of voice queries are local; Siri routes through Apple Maps not Google. Free to claim, often overlooked. | maps.apple.com/place?… |
| **Bing Places** | **HIGH (Alexa pipeline)** | Alexa indexes Bing, not Google. Microsoft Copilot pulls from Bing's index. | bingplaces.com |
| **ThreeBestRated** | **HIGH (apply for inclusion)** | 24% of ChatGPT local-business-directory citations. Inclusion is editorial, takes 4–8 weeks. | threebestrated.com/… |
| **Birdeye aggregator hub** | **HIGH** | Cross-platform review aggregation (Google + Yelp + FB) creates a unified review entity signal that AI engines parse cleanly. | reviews.birdeye.com/… |
| **Facebook Business Page** | **HIGH (0.512 AI citation correlation)** | Entity sameAs + social signal + Meta's increasing entity-graph integration. | facebook.com/[handle] |
| **LinkedIn Company Page** | **HIGH** | Microsoft Copilot entity resolution; B2B / commercial-vertical citation source. | linkedin.com/company/[slug] |
| **Yelp** | **HIGH (0.489 AI citation correlation)** | Still the dominant aggregator for local services AI citation. | yelp.com/biz/[slug] |
| **Best Pick Reports** (or regional equivalent) | MEDIUM | City-specific editorial aggregator. Apply for inclusion (paid in some markets). | bestpickreports.com/… |
| **BBB** | **MEDIUM (0.401 AI citation correlation)** | Trust signal + accreditation — important for older AI training data. | bbb.org/us/[state]/… |
| **Industry-specific directories** | MEDIUM (varies) | HomeAdvisor / Angi / Houzz / Thumbtack for home services; Avvo / Justia / FindLaw for legal; HealthGrades / Vitals for medical; Foursquare-derived TripAdvisor for hospitality. Research the niche's specific top 5. | varies |
| **Instagram Business Profile** | MEDIUM | Visual sameAs + cross-platform identity. Modest direct citation but reinforces entity recognition. | instagram.com/[handle] |
| **Nextdoor Business Page** | MEDIUM | Neighborhood trust signal; verifies hyperlocal entity presence. | nextdoor.com/pages/… |
| **Pinterest Business Profile** | LOW | Visual entity reference; modest citation weight but free + cheap. | pinterest.com/[handle] |
| **Twitter / X** | LOW | Lowest citation weight in 2026 AI engine data. Maintain only if active. | twitter.com/[handle] |

**Minimum viable sameAs network for 2026 AI citation parity:** 14+ verified profiles. Target list: Wikidata + Foursquare + GBP + YouTube + Apple Maps + Bing Places + Facebook + LinkedIn + Yelp + BBB + ThreeBestRated + Birdeye + 2 industry-specific directories = 14.

---

## Wikidata: The Truth Node

A populated Wikidata entry feeds Google Knowledge Graph + Wikipedia + OpenAI training data + every AI engine's entity layer. Empty or shallow Wikidata entries don't move the needle. **Aim for ≥8 filled properties.**

### Property depth table (LocalBusiness target)

| Wikidata Property | P-code | Required Value | Notes |
|---|---|---|---|
| Instance of | P31 | The industry term Q-ID (e.g., HVAC contractor Q-ID; landscaping company Q-ID) | If no industry Q-ID exists, use "business" Q4830453 + "industry" property |
| Country | P17 | United States (Q30) | Or country Q-ID |
| Located in administrative territorial entity | P131 | City Q-ID → County Q-ID → State Q-ID | Chain to top-level admin entity |
| Inception | P571 | Founded year (e.g., 2016) | |
| Official website | P856 | https://[domain] | Canonical URL |
| Phone number | P1329 | E.164 format (e.g., +1-713-598-2737) | |
| Industry | P452 | Industry Q-ID | |
| Coordinate location | P625 | Lat/long of primary business address | |
| License (official authorization) | P506 | License # | If industry licensed (HVAC, plumbing, electrical, legal, medical, etc.) |
| Owner / operator | P127 | Owner Person Q-ID OR plain string if Person not in Wikidata | Establish person entity link |
| Logo image | P154 | Commons file link | Upload logo to Wikimedia Commons first |
| Sister Wikipedia article | (sitelinks) | Link to enwiki article | Requires Wikipedia article — pursue after notability gate met (third-party press coverage, awards) |

**Knowledge Panel emergence timeline:** Even with all signals deployed, expect 3–6 months for Google to consolidate signals and emit a Knowledge Panel. Local PR / news mentions (Source 14a) accelerate this materially. Do not promise the client a Knowledge Panel inside the first 90 days.

---

## NAP Harmonization — 5-Field Checklist

For every platform in the sameAs network, validate these 5 fields match EXACTLY:

| # | Field | Rule |
|---|---|---|
| 1 | **Business name** | Identical character-for-character. Beware: ampersand vs "and", apostrophe vs nothing, LLC/Inc suffixes, "&" vs the word "and" |
| 2 | **Address** | Identical format (street type abbreviation, suite syntax, comma placement, ZIP+4 vs 5-digit) |
| 3 | **Phone** | Identical format (parentheses vs dashes, space placement) — must match website + GBP + schema exactly |
| 4 | **Hours** | Same hours wording across platforms (e.g., "24/7 emergency" must say that consistently — don't say "open 24 hours" on one and "24/7 service" on another) |
| 5 | **Description** | Same opening paragraph (or close variant). Same license number cited. Same services list (order can vary; substance must match) |

Inconsistency across any of these = entity-resolution failure. AI engines downgrade trust score when the same business shows conflicting facts across platforms. Single source of truth: `business-info.md` + the validated entity inventory from this skill.

---

## Service Entity Mapping

For each service the business offers, document:

| Field | Example |
|---|---|
| Canonical entity name | The GBP category label (preferred) or schema.org closest match |
| Parent entity | Broader category (e.g., "AC Repair" → "HVAC Service") |
| Child entities | Sub-services (e.g., "Compressor Repair", "Refrigerant Recharge") |
| Related entities | Tools, materials, certifications, problems solved, seasonal triggers |
| Semantic field | Terms that co-occur with this entity in authoritative content (from Source 1, 14) |
| Schema type | `Service` (always); `Offer` for priced packages |
| GBP category match | The exact GBP category label this maps to |
| Wikidata QID (if any) | For generic service types, often exists |
| Validation status | from `entity-validate` |

Build the service taxonomy as a tree, not a flat list — Google understands hierarchy.

---

## Location Entity Mapping

For each city / neighborhood / region the business serves, document:

| Field | Example |
|---|---|
| Canonical name | "Houston, TX" (full state qualifier) |
| Wikidata QID | Q16555 |
| Wikipedia URL | https://en.wikipedia.org/wiki/Houston |
| Schema type | `City`, `Place`, `AdministrativeArea` |
| Parent admin entity | County Q-ID → State Q-ID |
| Coordinate | lat/long |
| ZIP codes covered | from USPS ZCTA |
| Notable landmarks (in service area) | for content + image alt |
| Adjacent service-area entities | for internal linking + areaServed array |

For every location, the `areaServed` schema entry should be a `City`/`Place` object with `@id` pointing to the Wikidata URL — not a plain string. This is the easiest 2026 schema upgrade and dramatically improves AI engine geographic relevance recognition.

---

## Person Entity Mapping

For the business's primary public-facing person (owner, founder, named lead technician):

| Field | Required |
|---|---|
| Full name | yes |
| Role / title | yes |
| Affiliation (worksFor → Business) | yes |
| LinkedIn profile URL | strongly preferred — Microsoft Copilot anchor |
| Other social profiles (FB, IG) | recommended |
| Author bio on website (with @id anchor) | required if Person is referenced in any service-page schema |
| Public industry presence (board memberships, association affiliations, podcast guest appearances, published articles) | gathered |
| Credentials (license number, professional certifications, awards) | yes |
| Photo (in schema imageObject) | yes |

**`@id` consistency rule** — every Person schema block on every page must resolve to the same `@id` (e.g., `[domain]/#owner` or `[domain]/about/#person-name`). Inconsistent `@id` = AI engines treat the person as multiple distinct people.

---

## AI Engine Recognition Test (run BEFORE and AFTER entity work)

Establish baseline → make changes → re-test → measure delta.

**Test prompts** (run all 5 across all 5 engines = 25 prompts total):

1. "What do you know about [business name] in [city]?"
2. "Tell me about [business name]."
3. "Who are the best [primary service] companies in [city]?" *(does the client appear in the list?)*
4. "Tell me about [primary service] in [city]."
5. "I need [primary service] in [city]. Who should I call?"

**Engines:**
- ChatGPT (latest model)
- Perplexity (no follow-ups, fresh thread)
- Gemini
- Microsoft Copilot
- Claude

**For each engine × prompt cell, record:**
- Client mentioned? Y/N
- Client URL cited? Y/N (capture the URL form — root vs page)
- Information accuracy if mentioned (correct phone? correct address? correct services?)
- What competitors appear?
- What sources / URLs does the engine cite?
- Date of test (entity work has lag)

If client recognition < 2 of 5 engines on prompts 1–2 → entity establishment work is urgent. If < 1 of 5 on prompt 3 → Foursquare claim + GBP optimization + local PR (Source 14a) are the highest-leverage interventions.

---

## Output Files

### File 1: `01-research/entities-research.md`

Required sections:

1. **Business Entity Audit** — current Knowledge Panel state, Wikidata state, entity attributes inventory, gaps
2. **sameAs Network State** — every platform with status (verified / claimed-not-verified / missing / inconsistent NAP), URL, NAP delta if any
3. **Service Entity Taxonomy** — every service with canonical name, parent, children, schema type, validation status
4. **Location Entity Map** — every service area with Wikidata Q-ID, ZIP codes, adjacent entities
5. **Person Entity Map** — owner / named technicians with role + sameAs URLs + @id anchor
6. **Brand & Product Entities** — every brand the business interacts with (services / installs / sells)
7. **Certification & License Entities** — every credential with issuing body and verification URL
8. **Source 14a Audit — Local PR/News** — every third-party mention found with date + source URL; if zero, escalate to a critical action item
9. **AI Engine Recognition Test — Baseline** — the 25-cell matrix
10. **Entity Relationship Map** — visual graph of entity connections
11. **Wikidata Property Depth Audit** — which properties are filled, which are gaps
12. **Entity Optimization Action Plan** — Critical / High / Medium / Low prioritization with realistic timeline (3–6 months for Knowledge Panel)

### File 2: `01-research/entities-inventory.csv`

Master entity inventory across the entire business. Used by `entities-mapping`, `schema-generate`, `content-briefs`.

```
entity_name,entity_type,canonical_name,qid,kg_id,wikipedia_url,schema_type,sameAs_url,validation_status,role,parent_entity,gbp_category_match,is_in_organization_schema,is_in_areaServed,is_in_knowsAbout,competitor_co_occurrence_rate,ai_engine_recognition,notes
```

### File 3: `01-research/sameAs-network.csv`

The tactical sameAs network state.

```
platform,priority,url,status,nap_consistency,last_verified,ai_citation_correlation,claim_action_owner,target_date,notes
```

| Status values | Meaning |
|---|---|
| `verified` | Profile exists, owned by client, NAP matches |
| `claimed_unverified` | Account created but not verified by platform |
| `inconsistent` | Profile exists but NAP differs from canonical |
| `missing` | No profile claimed |
| `duplicate` | Multiple unverified profiles exist (claim/merge required) |

### File 4: `01-research/ai-recognition-baseline.md`

The 25-cell engine × prompt matrix from § AI Engine Recognition Test. Re-run quarterly, append new tables to track delta.

---

## Quality Standards

- [ ] All 14 sources + 14a have been touched. Sources with 0 contribution have a logged reason.
- [ ] Every entity in the inventory has passed `entity-validate` with a recorded status
- [ ] Service entity taxonomy is hierarchical (parent → children), not flat
- [ ] Every Location entity has a Wikidata Q-ID + canonical Wikipedia URL
- [ ] sameAs network state captured for ALL 18 platforms in the priority table (verified / claimed / missing / inconsistent)
- [ ] Source 14a (local PR) has been searched on at least 5 publication types; zero mentions = critical action item generated
- [ ] AI Engine Recognition Test baseline is filled (25 cells minimum)
- [ ] Wikidata property depth audit covers ≥8 properties
- [ ] NAP harmonization checklist applied across the top 7 platforms (GBP, FB, Yelp, BBB, Apple Maps, Bing Places, LinkedIn)
- [ ] Entity Optimization Action Plan has timeline + owner per action

---

## Anti-Patterns

- ❌ Skipping `entity-validate` and just adding "found" entities to the inventory — many won't survive disambiguation
- ❌ Treating Wikidata as "nice-to-have" — it's the Truth Node; skipping it is the #1 reason Knowledge Panels don't appear
- ❌ Skipping Source 14a because "we don't have any press" — that's the diagnosis; the absence IS the data point that justifies the action item
- ❌ Promising a Knowledge Panel inside 90 days
- ❌ Hardcoding the client's services, areas, or sameAs URLs into this skill — they're inputs, not constants
- ❌ Building a flat entity list when the relationships are the value (hierarchy + co-occurrence + relationship verbs)
- ❌ Listing 50 sameAs URLs without verifying they actually exist and resolve (one 404 in the array hurts the whole graph)
- ❌ Skipping the AI engine baseline test — without a baseline, you can't prove the work worked
- ❌ Treating sameAs platforms as equally weighted — 2026 AI citation data has dramatic differential (YouTube 0.737 vs Twitter ~0.05)
- ❌ Not running the validation gate before content uses an entity name (broken downstream — schema with the wrong @type or wrong sameAs URL)

---

## How Other Skills Consume This

- **`entities-mapping`** — consumes the entity inventory + canonical names; produces the per-page entity assignment map
- **`entity-extraction`** — uses the inventory as the lookup table when extracting entities from a page (so the extraction recognizes the entity rather than treating it as a novel string)
- **`schema-generate`** — uses canonical names + Wikidata QIDs + sameAs URLs to populate `Organization`, `sameAs`, `areaServed`, `knowsAbout`, `brand`, `provider`, `founder` schema fields
- **`content-briefs`** — uses the entity inventory to specify which entities every brief must reference (especially the competitor-co-occurrence-rate entities)
- **`content-generation`** — uses canonical names verbatim; does not paraphrase entity references
- **`humanizer`** — must preserve canonical entity names; humanization can vary surrounding sentence structure but not the entity strings
- **`/deep-research`** — Phase 4 runs this skill end-to-end as part of the research pack
- **`local-seo`** — sameAs network state feeds the citation work queue

The inventory CSV is the contract — downstream skills assume entity names are canonical and validated. If validation didn't run, downstream skills should refuse to consume the inventory.
