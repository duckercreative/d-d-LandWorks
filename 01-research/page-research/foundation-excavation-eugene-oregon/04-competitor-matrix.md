# Competitor Matrix — Foundation Excavation Eugene OR (`/foundation-excavation-eugene-oregon`)

**Research date:** 2026-09-24  
**Data sources:** DataForSEO SERP live query (Oregon,United States), direct page fetches, research agent SERP analysis  
**Base:** inherits generic competitor data from `../foundation-excavation/04-competitor-matrix.md` (2026-09-09); this file adds Eugene-specific SERP analysis for the location page.

---

## SERP Composition — "foundation excavation Eugene OR" (DataForSEO, 2026-09-24)

| Rank | Domain | Page Type | Title |
|---|---|---|---|
| 1 (AI) | Google AI Overview | AI-generated | Fires async — confirms AI Overview active for this query |
| 2 | braunexcavating.net | Contractor homepage | "Braun Excavating Inc.: Excavating \| Eugene, OR" |
| 3 | yelp.com | Directory | "THE BEST 10 EXCAVATION SERVICES IN EUGENE, OR" |
| 4 | heavydexcavation.net | Contractor homepage | "Heavy D Excavation: Excavation Services Lane County OR" |
| 5 | ebe.org | Directory (Eugene Builders Exchange) | "D2 Excavation" listing |
| 6 | facebook.com/3DExcavation | Social profile | "3D Excavation & Construction \| Eugene OR" |
| 7 | emeraldexc.com | Contractor service page | "Excavation Services – Eugene, OR" |
| 8 | lanecountyhomes.net | Realtor blog | "Exploring Home Foundation Types in Eugene Oregon" (Oct 2024) |
| 9 | bbb.org | Directory | "Foundation Contractors near Eugene, OR" |
| 10 | mckenzieexcavatingor.com | Contractor homepage | "McKenzie Excavating, Inc.: Expert Excavating Contractor In..." |

**SERP type breakdown:** 4 contractor pages · 3 directories · 1 social profile · 1 informational realtor blog · 1 AI Overview  
**Listicle-dominated?** No — directories present but not majority. Flag A (listicle SERP) = NOT triggered.  
**Key finding:** A realtor blog about foundation types in Eugene ranks at #8 — confirms Google will rank educational foundation content for this query even from non-contractor sources. D&D's service page, combining both local authority AND educational content, should displace it.

Also ranking for "foundation excavation Eugene OR" (research agent fetch):
- alldirtinc.com/services/excavation (#4 in agent pass)
- cojoasphalt.com/blog/shop-foundation-excavation-oregon (#3 in agent pass — out-of-area blog)
- 3dexcavationandconstruction.com / local-excavation.com (aggregator)
- sandmrockloamandsoil.com

*Note: DataForSEO and the research agent fetched at different times; SERP positions vary within a single-page range. Both sets documented above.*

---

## Related Searches (Google — from DataForSEO)

- "Foundation excavation eugene oregon reviews"
- "Best foundation excavation eugene oregon"
- "Foundation excavation eugene oregon address"
- "Emerald Excavating"

---

## Matrix A — Eugene SERP Competitors: Foundation-Specific Content Depth

| Competitor | CCB # | Foundation-Specific Page | Distinguishes Slab/Crawl/Basement | States Frost Depth | States Pricing | FAQ Section | Eugene Soil/Season Context | Schema |
|---|---|---|---|---|---|---|---|---|
| **Braun Excavating** | 101388 | No (homepage general) | No | No | No | No | None | LocalBusiness likely |
| **Heavy D Excavation** | 258673 | H2 section on homepage | No | No | No | No | None | None |
| **All Dirt, Inc** | — | Service page (~350 words) | No | No | No | No | None | None |
| **Emerald Excavating** | 14173 | Service page (~850 words) | No | No | No | No | None | None |
| **McKenzie Excavating** | — | Folded into general | No | No | No | No | None | Unknown |
| **Danco Excavation** | 89490 | None | No | No | No | No | None | None |
| **Eugene Dirt Works** | 260425 | No dedicated page | No | No | Equipment rental only | Yes (6 generic Qs) | "Eugene gets 50+ in/yr rain" only | None |
| **3D Excavation** | — | General concrete/foundation | No | No | No | No | None | Unknown |
| **Cojo Asphalt blog** | 241656 (Portland) | Dedicated blog posts (2) | Yes (slab vs stem wall) | Declines to give # | Yes ($150–$350+/hr; $4–$20+/sqft) | No | Mentions clay; no Eugene-specific | Unknown |
| **LaneCountyHomes.net** | (realtor, not contractor) | Blog post on foundation types | Yes — crawl space most common | No | No | No | Yes — Eugene-specific | No |

**Absolute finding: 0/9 local contractors state a frost depth figure, publish a FAQ, or provide Eugene-specific soil context on their foundation content. The only pricing data in the Eugene SERP comes from a Portland-area out-of-area blogger (Cojo Asphalt).**

---

## Matrix B — FAQ Frequency

Only Eugene Dirt Works has a FAQ section among all local competitors — and its 6 questions are generic (how do I get a quote, what areas do you serve) with zero foundation-specific questions.

Zero competitors have a FAQPage schema implementation.

Zero competitors answer any of the high-priority questions identified in `02-question-mine.md` (frost depth, foundation type comparison, footing inspection sequencing, Willamette Valley clay, wet season impact, ADU foundation).

**Every question in D&D's FAQ shortlist is uncontested on any Eugene excavation contractor's website.**

---

## Matrix C — Schema Deployment

| Competitor | Known Schema Types |
|---|---|
| Braun Excavating | LocalBusiness (possible — has KG entry) |
| Heavy D Excavation | None identified |
| All Dirt, Inc | None identified |
| Emerald Excavating | None identified |
| Danco Excavation | None identified |
| Eugene Dirt Works | None identified |
| McKenzie Excavating | None identified |

**D&D target schema (union of what's needed + what competitors are missing):** `GeneralContractor` + `Service` + `FAQPage` + `BreadcrumbList` + `Speakable`

---

## Key Competitor Profiles

### Braun Excavating Inc (braunexcavating.net)
- **SERP position:** #1 organic (also holds Knowledge Graph for this query); Open 24 hours
- **CCB:** #101388 | 50+ years in Oregon | Western Oregon Builders Association member
- **H1:** "Excavation & Demolition Contractor in Eugene, Oregon"
- **H2s:** Braun Excavating Inc. / What We Do / Who Are We? / Our Services / Our Work
- **Foundation content:** Generic mention in tagline ("deep excavation, earthmoving, and site development")
- **Word count:** ~1,100
- **Trust signals:** CCB #; 50+ year longevity; WOBA membership; slogan "IF IT'S DONE RIGHT, IT WAS DONE BY BRAUN"
- **Phone:** (541) 935-5940
- **Gap:** No pricing, no FAQ, no soil/frost data, no foundation-type distinction, no inspection sequencing

### Heavy D Excavation (heavydexcavation.net)
- **SERP position:** #2–4 (fluctuates); explicitly uses "Precision foundation excavation in Eugene OR" in meta snippet
- **CCB:** #258673
- **H1:** "Expert Excavation Services Lane County Oregon"
- **H2s include:** Foundation Excavation, Road Clearing & Site Prep, Brush Clearing & Land Development, Trenching & Drainage, Stump Pulling, Skid Steer & Equipment Services, Defensible Space / Firebreak Creation
- **Foundation content:** One H2 heading; no detail beyond the heading
- **Word count:** ~1,100
- **Trust signals:** CCB #; Licensed, Bonded, Insured; 3 customer testimonials; locally owned; Facebook
- **Phone:** (541) 556-9303
- **Gap:** Uses "foundation excavation Eugene OR" in metadata but no foundation-specific content behind that heading

### Emerald Excavating (emeraldexc.com)
- **SERP position:** #5–7 across foundation queries
- **CCB:** #14173 | DEQ: #33500 | 60+ years in Eugene | Address: 4250 W 5th Ave, Eugene
- **H1:** "Excavation Services in Lane County, OR"
- **H2s:** Site Preparation / Earthwork / Exterior Improvements / Underground Utilities
- **Foundation content:** "Foundation & Footing Excavation" listed as a sub-line item under Earthwork
- **Word count:** ~850
- **Trust signals:** CCB # + DEQ #; 60+ years; multi-platform listings (LinkedIn, Yelp, Google Maps, Facebook)
- **Phone:** 541-345-1505
- **Gap:** Longest-established local competitor but thinnest relevant content; no educational depth

### Cojo Asphalt Blog (cojoasphalt.com — out-of-area, ranks #3)
- **CCB:** #241656 (Portland contractor, not Lane County)
- **Two posts ranking for Eugene foundation queries:**
  1. "Shop and Outbuilding Foundation Excavation (Oregon)" — ~1,800 words; prices $4–$20+/sqft; distinguishes slab types; Willamette Valley clay mention; NO frost depth number
  2. "Basement Excavation: What the Dig Actually Involves (Oregon)" — ~1,850 words; mentions 811 + permits; describes over-dig concept; NO Eugene-specific inspection details
- **Why it ranks:** Oregon-specific content with educational depth that no local contractor provides
- **Why D&D will displace it:** D&D page will be a local contractor (geographic authority), with more specific Eugene-targeted content (frost depth, Lane County permit contacts, Malpass clay specifics, pricing ranges with Eugene data), and a local phone number / CCB number

### Eugene Dirt Works (eugenedirtworks.com)
- **SERP position:** #2 for "footings excavation Eugene OR" (notable — only shows for footings query)
- **CCB:** #260425 | 10+ years | "fully insured"
- **Only competitor with a FAQ section** — 6 generic questions (not foundation-specific)
- **Notable:** Only mentions "Eugene gets 50+ inches of rain a year" as local context — closest to location-specific content, but still very thin
- **Equipment rental rates published:** Half-day $200 / Full day $250 / Weekend $400 — only pricing on any local excavation page
- **Gap:** Still no foundation-specific FAQ, no frost depth, no pricing for actual excavation work (only rentals)

### What Has Zero SERP Presence — Danco Excavation
- **CCB:** #89490 | DEQ: #39637 — established, credentialed competitor
- **Zero ranking** for any foundation excavation query tested (7 queries)
- Service pages do not include foundation excavation
- Gap D&D can take from them with a dedicated, ranked page

---

## 12-Point AI Citation Filter — Eugene SERP Competitors

Adapted from `../foundation-excavation/04-competitor-matrix.md` — the 12-point filter from `01-research/competitors/ai-citation-filter.md`:

| Filter Point | Braun | Heavy D | Emerald | Eugene Dirt Works | Cojo Asphalt blog | D&D Target |
|---|:---:|:---:|:---:|:---:|:---:|:---:|
| 1. GeneralContractor/Service schema | 1 | 0 | 0 | 0 | 0 | **1** |
| 2. AggregateRating schema | 0 | 0 | 0 | 0 | 0 | **0** (no reviews yet) |
| 3. Service schema with areaServed | 0 | 0 | 0 | 0 | 0 | **1** |
| 4. License number visible in HTML body | 1 | 1 | 1 | 1 | 1 | **1** |
| 5. Founding year / foundingDate | 0 | 0 | 1 (60+ yrs) | 0 | 0 | **0** (unconfirmed) |
| 6. Direct-question H2s (≥3) | 0 | 0 | 0 | 1 | 1 | **1** |
| 7. FAQPage schema | 0 | 0 | 0 | 0 | 0 | **1** |
| 8. Trust badges visible (≥3 verifiable) | 1 | 1 | 1 | 0 | 0 | **1** |
| 9. dateModified + datePublished | 0 | 0 | 0 | 0 | 1 | **1** |
| 10. sameAs links (≥5) | 1 | 0 | 1 | 0 | 0 | **1** (GBP pending) |
| 11. Eugene-specific content | 0 | 0 | 0 | 1 | 0 | **1** |
| 12. Oregon code citation | 0 | 0 | 0 | 0 | 0 | **1** |
| **Total** | **3/12** | **2/12** | **3/12** | **2/12** | **3/12** | **10/12** |

**Strategic interpretation:** Top competitors average 2–3/12. D&D targets 10/12 (Year 1 without GBP reviews or founding year). The gap is wide and achievable. The two missing points (AggregateRating, foundingDate) unlock when: (1) real reviews are collected, (2) David confirms year founded.

---

## The Cojo Asphalt Displacement Opportunity

Cojo Asphalt ranks #3 for "foundation excavation Eugene OR" as an out-of-area Portland contractor with educational blog content. Their content:
- ✓ Covers slab vs. stem wall distinction
- ✓ Mentions Oregon's wet conditions
- ✓ Provides price ranges ($150–$350+/hr, $4–$20+/sqft)
- ✗ Does NOT give the Lane County frost depth figure (12 inches — declines explicitly)
- ✗ Does NOT name Eugene or Lane County building department contacts
- ✗ Does NOT have a local CCB number or service area claim for Eugene
- ✗ Does NOT address Malpass clay specifically
- ✗ Is a blog post, not a structured service page with schema

D&D's page, as a licensed Lane County contractor with Eugene-specific code citations, inspection contacts, and soil context, will be more geographically authoritative and more specifically useful to the Eugene searcher on every dimension Cojo Asphalt misses.
