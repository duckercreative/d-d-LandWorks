# Research Pack — Foundation Excavation Eugene OR
## `/foundation-excavation-eugene-oregon`

**Research date:** 2026-09-24  
**Researcher:** Deep Research Pipeline v2.1  
**Pack type:** Location × Service page (Eugene + Foundation Excavation)  
**Feeds:** `/content-brief` → `content-create` → `humanizer` → Astro page  
**Inherits from:** `../foundation-excavation/00-research-pack.md` (service hub, 2026-09-09)  
**Parallel sibling:** `../excavation-contractor-eugene-oregon/00-research-pack.md` (Eugene excavation hub)

---

## 0. Quick Reference — The Five Things That Make This Page Uncatchable

All five are uncontested among the six Eugene excavation contractors currently ranking for foundation-related queries. Zero local competitor does any of them.

| # | Differentiator | Why it wins | Source doc |
|---|---|---|---|
| 1 | **Frost depth stated as a cited number** — "12 inches minimum, ORSC R403.1.4" | No local competitor names the code section or the number | `07-oregon-authority.md` |
| 2 | **Eugene-specific pricing transparency** — $2,300–$4,100 standard; $3,900–$6,800 basement | No Eugene competitor quotes prices; national ranges are imprecise | `07-oregon-authority.md` §Pricing |
| 3 | **Footing inspection contacts** — City: 541-682-5283; County: 541-682-4651 | Primary source, primary-source numbers. Zero competitors name either | `07-oregon-authority.md` §Inspection |
| 4 | **Malpass clay + no-bedrock statement** — BLM TN447 cited; clay not rock is Eugene's soil challenge | Zero competitors mention soil type or soil source | `03-entity-map.md` Layer F |
| 5 | **AI Overview citation block** — 135-word self-contained block + Speakable + FAQPage schema | AI Overview fires for this query; zero local contractor is structured to be cited | `06-ai-citation-audit.md` §4 |

---

## 1. Page Spec

| Field | Value |
|---|---|
| **URL slug** | `/foundation-excavation-eugene-oregon` |
| **Page title** | Foundation Excavation and Basement Digging in Eugene, Oregon |
| **H1** | Foundation Excavation Services in Eugene, Oregon |
| **Meta description** | D&D Land Works (CCB #261742) provides foundation excavation for homes, ADUs, and commercial projects in Eugene, Springfield, and Lane County, Oregon. Free estimates — 541-401-8726. |
| **Priority** | High — Phase 1 |
| **Intent** | Transactional |
| **SERP position (DataForSEO 2026-09-24)** | Not ranked (no page exists yet) |
| **Page type** | Location × Service |
| **Anti-doorway gate** | TRIGGERED — location page; all 6 requirements documented in `08-gap-analysis.md` Flag B |
| **Cannibalization risk** | Low — see `08-gap-analysis.md` §Cannibalization |

---

## 2. Top 5 Primary Keywords

| Priority | Query | Intent | DataForSEO vol (OR) | Target placement |
|---|---|---|---|---|
| P1 | foundation excavation Eugene OR | Transactional | ~50–90/mo | H1, title, meta, intro |
| P1 | foundation excavation Eugene Oregon | Transactional | ~50–90/mo | First 100 words |
| P1 | basement excavation Eugene Oregon | Transactional | ~20–50/mo | Foundation types section H2 |
| P1 | crawl space excavation Eugene Oregon | Transactional | ~20–50/mo | Foundation types section; FAQ |
| P1 | foundation excavation cost Eugene Oregon | Commercial | ~20–40/mo | Cost section H2; featured snippet target |

**Secondary P1 keywords** (integrate naturally, not forced): "footings excavation Eugene," "house foundation excavation Springfield OR," "basement excavation Lane County," "ADU foundation excavation Oregon," "new home foundation excavation Eugene"

**Long-tail P2 keywords** (FAQ / supporting body copy): "how deep does a foundation need to be in Oregon," "crawl space vs slab foundation Eugene," "foundation excavation contractor Lane County," "foundation dig near me Eugene OR"

Full universe: `01-keyword-universe.csv` (80+ terms, all intent-labeled).

---

## 3. Top 10 Questions This Page Must Answer

Ordered by search volume + conversion impact. These 10 directly map to the H2 heading plan and the FAQ schema block. Full question mine in `02-question-mine.md` (60 questions, 6 categories).

| # | Question | Section | Schema treatment |
|---|---|---|---|
| 1 | How deep do footings need to be in Oregon? | Frost Depth H2 | FAQPage + Speakable |
| 2 | What is the difference between a slab, crawl space, and basement excavation? | Foundation Types H2 | FAQPage; comparison table |
| 3 | How much does foundation excavation cost in Eugene? | Cost H2 | FAQPage + Speakable + featured-snippet |
| 4 | What type of foundation is most common in Eugene? | Foundation Types H2 | FAQPage + Speakable |
| 5 | Does Eugene's clay soil affect the excavation depth? | Eugene Soil H2 | FAQPage |
| 6 | What does foundation excavation include for a new home in Lane County? | Scope / Process H2 | FAQPage |
| 7 | Who schedules the footing inspection in Eugene/Lane County — and when? | Inspection H2 | FAQPage + Speakable |
| 8 | How does foundation excavation work for an ADU next to an existing house? | ADU H2 | FAQPage |
| 9 | Is there bedrock in Eugene, Oregon? | Eugene Soil H2 | FAQPage |
| 10 | How far ahead do I need to schedule foundation excavation in Eugene? | CTA / Scheduling para | (inline answer) |

---

## 4. Top 10 Entities to Integrate

Ordered by content salience. Full inventory in `03-entity-map.md` and `entity-inventory.csv` (48 entities total, all validated).

| # | Entity | Canonical form | Placement | Schema treatment |
|---|---|---|---|---|
| 1 | D&D Land Works | "D&D Land Works" | H1, AI citation block, schema @id | GeneralContractor @type |
| 2 | Oregon CCB #261742 | "CCB #261742" | First paragraph; schema hasCredential | EducationalOccupationalCredential |
| 3 | ORSC R403.1.4 | "ORSC R403.1.4" | Frost depth section; AI citation block | Legislation sameAs: up.codes |
| 4 | Malpass Clay | "Malpass clay" | Eugene soil section | Thing; sameAs BLM TN447 |
| 5 | Eugene, Oregon | "Eugene, Oregon" | H1, meta, intro, areaServed | City Q34017 |
| 6 | Lane County Building Safety | "Lane County Building Safety" | Inspection section | GovernmentService; tel: 541-682-4651 |
| 7 | City of Eugene Building Inspection | "City of Eugene Building Inspection Services" | Inspection section | GovernmentOrganization; tel: 541-682-5283 |
| 8 | Crawl Space Foundation | "Crawl space foundation" | Foundation types section; FAQ Q4 | Thing; most common in Eugene |
| 9 | Oregon 811 | "Oregon 811" | Safety/process section | SafetyOrganization; sameAs digsafelyoregon.com |
| 10 | OSHA 1926.652 | "OSHA 1926.652" | Over-dig / ADU section | GovernmentService; sameAs osha.gov |

---

## 5. Scope Boundary — This Page vs. the Hub

**Critical anti-cannibalization rule:** this page and `/foundation-excavation/` (service hub) target different primary queries and contain genuinely different sections. Do not duplicate the hub's content here.

| Topic | This Eugene page answers | Hub `/foundation-excavation/` answers |
|---|---|---|
| Frost depth | "12 inches for Lane County (below 2,500 ft elevation), per ORSC R403.1.4" — Eugene-specific framing | "Oregon requires exterior footings 12 inches below grade per ORSC R403.1.4; elevation adjustments apply" — statewide framing |
| Over-dig | Brief mention only; reference to hub for detail | Full OSHA 1926.652 working-space section |
| Foundation types | Comparison table WITH Eugene-specific prevalence data (crawl space = most common) | Comparison table without local prevalence data |
| Inspection | Eugene eBuild (541-682-5283) AND Lane County Building Safety (541-682-4651) with 48-hr advance | Generic Oregon footing inspection sequencing |
| Pricing | Eugene-specific HomeBlue ranges ($2,300–$4,100 standard; $3,900–$6,800 basement) | National ranges only |
| Soil | Malpass clay section (BLM TN447); no-bedrock statement | No Eugene soil section |
| ADU | ADU section with OSHA underpinning + Lane County specific | Brief ADU mention |
| Foundation drainage | Brief ORSC R405 mention (required in Lane County clay — not Group I) | Full R405 section |

**Internal link rule:** this page links OUT to `/foundation-excavation/` (hub) for over-dig detail, foundation drain code, and cost methodology. The hub links IN to this Eugene page for Eugene-specific specifics. Correct hierarchy: hub → city page.

---

## 6. H2 Heading Map (Recommended)

Every H2 is a question under 10 words. This structure hits all 10 FAQ targets, anti-doorway requirements, and featured-snippet opportunities.

```
H1: Foundation Excavation Services in Eugene, Oregon

[AI Citation Block — 135 words — first 30% of page]

H2: What Does Foundation Excavation Cover?
  → Scope section: site prep, topsoil strip, footing excavation, material haul, site grade

H2: Which Foundation Type Requires What Excavation?
  → Comparison table: Slab | Crawl Space | Basement
  → Note: crawl space is most common in Eugene
  → Sub-line: "which is right for your Lane County lot?" → internal link to `/foundation-excavation/` for depth

H2: How Deep Do Footings Need to Be in Eugene?
  → Answer-first: 12 inches minimum, ORSC R403.1.4 (featured-snippet target)
  → Note: Lane County sits below 2,500 ft — frost depth = 12 inches
  → Note: saturated Malpass clay may require over-excavation to reach bearing soil

H2: What Does Foundation Excavation Cost in Eugene?
  → Answer-first with ranges
  → Table: job type → scope → time → estimated range
  → Call to get a free site-specific estimate

H2: What Is Eugene's Soil Like for Foundation Excavation?
  → Malpass clay — BLM Technical Note 447
  → No bedrock in Willamette Valley floor (vs. Central Oregon basalt)
  → Wet season Oct–May: dewatering, erosion control, timing guidance

H2: Who Schedules the Footing Inspection in Lane County?
  → Answer-first: depends on jurisdiction
  → City of Eugene: eBuild, 541-682-5283, call before 7am for same-day
  → Unincorporated Lane County: LMD Building Safety, 541-682-4651, 48-hour advance
  → Process: excavate → D&D coordinates inspection → pour concrete

H2: How Does Foundation Excavation Work for an ADU?
  → Oregon HB 2001 ADU context
  → Same frost depth (12 in); same ORSC R403.1.4
  → OSHA 1926.652(b) underpinning rule when excavating near existing structure
  → D&D coordinates with GC and building department

H2: Foundation Excavation FAQs
  → FAQPage schema block (10 questions, see Section 9)

H2: Foundation Excavation Service Area
  → Named cities: Eugene, Springfield, Cottage Grove, Junction City, Creswell, Veneta, Florence
  → "Serving all of Lane County, Oregon"

[CTA Section: Free Estimate, 541-401-8726, CCB #261742]
```

---

## 7. Content Format Plan — Per H2

| H2 Section | Primary format | Schema unlocked | Featured-snippet eligible |
|---|---|---|---|
| AI Citation Block | Answer-first prose, 135 words | Speakable | Yes — "foundation excavation Eugene" |
| What Does Foundation Excavation Cover? | Bulleted scope list | Service | No |
| Which Foundation Type Requires What Excavation? | 3-column comparison table (Slab / Crawl / Basement) | Service subtypes | Yes — "does foundation type change excavation" |
| How Deep Do Footings Need to Be in Eugene? | Answer-first (40-word lead) + supporting prose + ORSC R403.1.4 citation | FAQPage item; Speakable | Yes — "how deep do footings need to be in Oregon" |
| What Does Foundation Excavation Cost in Eugene? | Answer-first (ranges stated) + cost table (job type × scope × time × range) | FAQPage item; Speakable | Yes — "foundation excavation cost Eugene Oregon" |
| What Is Eugene's Soil Like? | Prose + Malpass clay callout box + no-bedrock statement | FAQPage item | Partial — "is there bedrock in Eugene" |
| Who Schedules the Footing Inspection? | Numbered list (3 steps: excavate → inspect → pour) + contact block (both jurisdictions) | FAQPage item; Speakable | Yes — "how to schedule footing inspection Lane County" |
| How Does Foundation Excavation Work for an ADU? | Prose + OSHA callout (underpinning rule, one sentence) | FAQPage item; Service subtype | No |
| Foundation Excavation FAQs | Accordion or Q&A block | FAQPage (all 10 Qs) | Partial |
| Service Area | Bulleted city list + map embed placeholder | areaServed (schema) | No |

---

## 8. Cost Section Data (Authoritative — Include Verbatim in Brief)

**Source:** HomeBlue Eugene, Oregon (accessed September 2026); validated against contractor market context  
**Use:** state ranges with source attribution in the page; do not strip the source reference.

| Job type | Scope | Typical timeline | Eugene cost range |
|---|---|---|---|
| Standard residential — crawl space or slab | Topsoil strip, perimeter trench to footing depth, haul | 1–1.5 days | **$2,300 – $4,100** |
| Full basement | 8–10 feet of excavation, shoring or benching, haul 200–400 cu yd | 2–3 days | **$3,900 – $6,800** |
| ADU foundation | Depends on type; crawl space or slab most common | 0.5–1.5 days | **$1,800 – $4,100** |
| Hourly rate (machine + operator) | Per hour, site-specific | — | **$190 – $340/hr** |

**Required disclosure:** "These are general market estimates for Lane County. Site-specific factors — access constraints, soil conditions, season, and material haul distance — affect the final scope. D&D provides free on-site estimates."

---

## 9. 10-Question FAQ Shortlist (Schema-Ready Answers)

These go directly into the FAQPage schema block AND the visible FAQ accordion. The first 5 are also Speakable candidates.

**Q1: How deep do footings need to be in Eugene, Oregon?**
In Lane County, exterior footings must bear on undisturbed soil at least 12 inches below finished grade under Oregon Residential Specialty Code R403.1.4. Lane County sits well below the 2,500-foot elevation threshold in ORSC Table R301.2(1), so the frost-protection depth is also 12 inches. If saturated Willamette Valley clay is present at the 12-inch level, the excavation goes deeper until the crew reaches firm bearing soil — the code sets the minimum, not the maximum.

**Q2: What type of foundation is most common in Eugene?**
Crawl space foundations are the most common foundation type in Eugene and the broader Lane County area, particularly in homes built before 2000. Slab-on-grade has become more common in newer construction, especially for ADUs and smaller residential projects. Full basements are the least common due to Oregon's mild climate and the high water table in parts of west Eugene.

**Q3: How much does foundation excavation cost in Eugene, Oregon?**
Foundation excavation in Eugene typically ranges from $2,300 to $4,100 for a standard residential job (crawl space or slab, approximately 1 to 1.5 days). Full basement excavation — 8 to 10 feet of depth, with hundreds of cubic yards hauled off-site — generally runs $3,900 to $6,800. Hourly rates with machine and operator run $190 to $340 per hour. Contact D&D Land Works for a free site-specific estimate.

**Q4: Is there bedrock in Eugene, Oregon?**
No. The Willamette Valley floor has no significant bedrock. Unlike Central Oregon — where volcanic basalt requires specialized equipment — Lane County's subsurface is Willamette Valley clay and alluvial soils. The primary excavation challenge in Eugene is clay behavior, not rock, particularly the Malpass clay series documented by BLM in west Eugene.

**Q5: What is Malpass clay and does it affect foundation excavation?**
Malpass clay is a local soil series found throughout west Eugene, documented in BLM Technical Note 447. It has high shrink-swell properties and low permeability. In wet season (October through May), saturated Malpass clay can be soft at the 12-inch depth specified by code, requiring over-excavation to reach firm bearing soil. D&D accounts for Eugene clay behavior in the site assessment before quoting.

**Q6: How do I schedule a footing inspection in Lane County?**
It depends on jurisdiction. For City of Eugene permits, schedule through the eBuild portal at pdd.eugene-or.gov/ebuild or call 541-682-5283 before 7 a.m. for same-day inspection. For unincorporated Lane County, call Lane County Building Safety at 541-682-4651 — at least 48 hours in advance. D&D coordinates the inspection schedule with your building department before concrete is poured.

**Q7: What does foundation excavation include for a new home?**
Foundation excavation typically includes: clearing and stripping organic topsoil from the building footprint, excavating to the required footing depth (12 inches minimum per ORSC R403.1.4 in Lane County), establishing the over-dig working space required for the foundation wall forms, haul-off of material, and rough grading of the excavation perimeter. Utility locates (Oregon 811) are completed before any digging begins.

**Q8: How does foundation excavation work for an ADU?**
ADU foundation excavation follows the same ORSC frost-depth requirements (12 inches minimum, R403.1.4). When excavating adjacent to an existing structure, OSHA 1926.652(b) requires underpinning or shoring to protect the existing foundation. D&D coordinates the ADU excavation with the general contractor and the building department's footing inspection sequence. Most ADU foundations in Eugene are crawl space or slab — the type the builder specifies determines the excavation scope.

**Q9: Does D&D Land Works excavate in wet season?**
Yes. D&D excavates year-round in Eugene and Lane County. Wet season (October through May) adds considerations: erosion control measures are required under Oregon LMD rules for sites over 500 square feet, dewatering may be needed in low-lying or west Eugene clay areas, and saturated soils may require deeper over-excavation to reach firm bearing. We factor wet-season conditions into our site assessment and schedule.

**Q10: Does D&D Land Works need to be licensed to excavate in Oregon?**
Yes. D&D Land Works holds Oregon CCB license #261742 — a Construction Contractors Board license required for all excavation and grading work on residential and commercial sites in Oregon. CCB #261742 can be verified at the Oregon CCB website. D&D is also DEQ Certified, which covers septic-related excavation.

---

## 10. Required Schema Types

All four schema types are mandatory for this page. Speakable is required because AI Overview fires for this query. Full schema spec goes in the content brief's schema section.

| Schema @type | Required fields | Notes |
|---|---|---|
| `GeneralContractor` | name, url, telephone, address, areaServed, hasCredential (CCB #261742), priceRange | Reused from home schema; add areaServed Eugene + Lane County |
| `Service` | name ("Foundation Excavation"), provider (D&D), areaServed, description, serviceType | Nest under GeneralContractor; add sub-services as nested Service entities |
| `FAQPage` + `Question` + `Answer` | All 10 FAQ pairs | Use all 10 from Section 9 |
| `BreadcrumbList` | Home → Services → Foundation Excavation → Eugene | Four-level crumb |
| `Speakable` | cssSelector targeting: AI citation block, frost-depth answer, cost section, inspection contact section | Minimum 4 speakable targets |

---

## 11. Required Authority Signals

**Cite every one of these in the page.** These are the specific, verifiable claims that no competitor makes and that AI systems can cite.

### Oregon Code

| Citation | Claim | Placement |
|---|---|---|
| ORSC R403.1.4 | 12-inch minimum footing depth, undisturbed soil | Frost depth section; AI citation block |
| ORSC Table R301.2(1) | Lane County frost depth = 12 inches (below 2,500 ft elevation) | Frost depth section |
| ORSC R403.1.4.1 | Frost protection methods: depth, insulation, or heated structure | Frost depth section (brief mention) |
| ORSC R405 | Foundation drain required — Malpass clay is NOT Group I soil | Soil section (brief); link to hub for detail |
| ORSC R401.3 | 6-inch fall in 10 feet required at foundation perimeter | Scope section (brief) |

### Federal / Safety

| Citation | Claim | Placement |
|---|---|---|
| OSHA 1926.652 | 2-foot minimum working width (over-dig); underpinning rule | Brief mention in scope section; ADU section |
| Oregon 811 / digsafelyoregon.com | D&D calls utility locate 2 business days before every dig | Scope / trust section |

### Local Authority (Primary Sources)

| Contact | Info | Placement |
|---|---|---|
| City of Eugene Building Inspection | 541-682-5283; eBuild: pdd.eugene-or.gov/ebuild; before 7am for same-day | Inspection section |
| Lane County Building Safety | 541-682-4651; 48-hour advance notice required; 3050 N Delta Hwy | Inspection section |

### Soil / Environmental

| Source | Claim | Placement |
|---|---|---|
| BLM Technical Note 447 | Malpass clay in west Eugene; high shrink-swell; low permeability | Soil section |
| lanecountyhomes.net (local realtor blog, ranking SERP) | Crawl space is most common foundation type in Eugene | Foundation types section |

### Pricing Data

| Source | Data | Placement |
|---|---|---|
| HomeBlue Eugene OR | $2,300–$4,100 standard; $3,900–$6,800 basement; $190–$340/hr | Cost section |

### D&D Credentials

| Signal | Placement |
|---|---|
| Oregon CCB #261742 — verified active | First paragraph; schema; CTA section |
| DEQ Certified | First paragraph or trust sidebar |
| Named owner: David Deggelman | CTA or About section |
| Local business — Eugene, OR service area | Throughout |

---

## 12. AI Citation-Ready Block (135 Words — Drop Verbatim into First 30% of Page)

This block is Speakable-eligible and serves as the primary featured-snippet + AI Overview citation target. Placement: immediately after the page intro, before the first H2.

> Foundation excavation in Eugene, Oregon creates the below-grade space for a footing, foundation wall, or slab — a precision step that determines the quality of every trade that follows. In Lane County, the Oregon Residential Specialty Code (R403.1.4) requires exterior footings to be placed at least 12 inches below finished grade, which is also the frost protection depth for Lane County's elevation. Foundation scope depends on type: a slab needs only a shallow topsoil strip, a crawl space requires a perimeter trench to footing depth, and a full basement requires 8–10 feet of excavation. Unlike Central Oregon, Lane County's valley floor has no significant bedrock — the primary challenge is Willamette Valley clay, which softens in wet season and may require over-excavation to reach bearing soil. D&D Land Works provides foundation excavation for residential and commercial projects throughout Eugene, Springfield, and Lane County under Oregon CCB license #261742. Free estimates: 541-401-8726.

**Speakable CSS selector target:** `.ai-citation-block` or the first `<blockquote>` in the page body.

---

## 13. Trust-Killer Rebuttal Map

These are direct rebuttals to the 12 trust killers from `05-intent-triangulation.md`. Each must appear somewhere in the page body — not just the FAQ.

| Trust Killer | Rebuttal (where to build it in) |
|---|---|
| Can't state a frost depth number | State 12 inches + ORSC R403.1.4 in the first H2 — not buried in FAQ |
| No foundation type distinction | Comparison table — mandatory, not optional |
| No inspection sequencing | Numbered list: excavate → inspect → pour; with both phone numbers |
| Vague "leave enough room" | Mention 2-foot minimum working width (OSHA-derived) in scope section |
| No soil explanation | Malpass clay section — at least one paragraph |
| No Oregon 811 mention | One sentence in scope/process section |
| Generic "Lane County" | Name Eugene, Springfield, and Tier 2 cities in service area section |
| License unverified | CCB #261742 in paragraph 1; link to orccb.org |
| No ADU awareness | Dedicated H2 with OSHA underpinning note |
| Wet season as excuse | Position as competence: "D&D excavates year-round; wet season adds dewatering and erosion-control steps, not a stop order" |
| Ghost contractor | Named owner (David Deggelman); direct phone 541-401-8726 |

---

## 14. E-E-A-T Signal Plan

**Experience signals:**
- Reference "Eugene and Lane County" jobs specifically (not generic regional references)
- Mention wet-season excavation challenges from field experience (dewatering, clay behavior)
- David Deggelman as named operator

**Expertise signals:**
- All five ORSC code citations with section numbers
- OSHA 1926.652 citation for working space and underpinning
- BLM Technical Note 447 for Malpass clay — a primary federal source no competitor cites

**Authoritativeness signals:**
- CCB #261742 with link to verify at orccb.org
- DEQ Certified credential
- Both primary-source inspection phone numbers
- Named geographic authority sources (City of Eugene; Lane County LMD)

**Trustworthiness signals:**
- Pricing transparency with source attribution
- Explicit wet-season competence disclosure (not a sales promise without substance)
- Named owner
- Free estimate CTA with real phone number

---

## 15. Freshness Plan

| Update trigger | What to update | Frequency |
|---|---|---|
| ORSC code revision | Frost depth and drainage code citations | Annual check |
| Eugene eBuild system change | Inspection contact section | Check annually or when clients report changes |
| HomeBlue pricing data refresh | Cost table ranges | Annual |
| New D&D projects in Eugene | Add project photos or job references | After each Eugene foundation job |
| ADU permit surge continues | Confirm ADU section relevance; update Oregon HB 2001 context | Annual |
| GBP live | Add AggregateRating schema | When GBP is launched and reviews accumulate |

---

## 16. Competitor Context (Summary — Full Detail in `04-competitor-matrix.md`)

**SERP composition (DataForSEO 2026-09-24, "foundation excavation Eugene Oregon"):**

| Position | Domain | Type | Key weakness D&D exploits |
|---|---|---|---|
| 1 (async) | Google AI Overview | AI Overview | No local contractor cited; D&D's citation block fills this slot |
| 2 | Braun Excavating | KG winner | No frost depth; no pricing; no FAQ; no schema |
| 3 | Cojo Asphalt blog | Out-of-area contractor | Portland-based; no Eugene CCB; no local inspection contacts — **primary displacement target** |
| 4 | Yelp | Directory | No content; D&D out-ranks on content merit |
| 5 | Heavy D Excavation | Local competitor | Foundation page exists; no code citations; no pricing; no FAQ |
| 6 | BBB listing | Directory | No content |
| 7 | Emerald Excavating | Local competitor | 60+ years; CCB + DEQ; no pricing or code citations |
| 8 | lanecountyhomes.net | Local realtor blog | Not a contractor; useful source to cite, not compete with |

**12-point AI citation filter scores:** All Eugene competitors score 2–3/12. D&D's target with this pack: **10/12**. See `04-competitor-matrix.md` for full matrix.

**Danco Excavation (CCB #272483):** Zero SERP presence for any foundation query despite being an active Eugene excavation contractor. Not a displacement target because they're not ranking.

---

## 17. Internal Link Plan

**Links FROM this page:**

| Anchor text | Destination URL | Purpose |
|---|---|---|
| "over-dig working space requirements" | `/foundation-excavation/` | Hub for OSHA detail |
| "foundation drain requirements under Oregon code" | `/foundation-excavation/` | Hub for ORSC R405 detail |
| "excavation contractor in Eugene and Lane County" | `/excavation-contractor-eugene-oregon/` | Eugene excavation hub |
| "septic installation in Lane County" | `/septic-installation-lane-county-oregon/` | Cross-service (DEQ context) |

**Links TO this page (required before or at publish):**

| Anchor text | Source page | Status |
|---|---|---|
| "foundation excavation in Eugene" | `/foundation-excavation/` | UPDATE hub to add link |
| "foundation excavation" | `/excavation-contractor-eugene-oregon/` | UPDATE Eugene hub to add link |
| Service link from GBP | GBP service URL field | When GBP is live |

---

## 18. Quality Checklist (Run Before Humanizer)

- [ ] H1 contains "Eugene, Oregon" — not "Eugene, OR" alone
- [ ] CCB #261742 appears in paragraph 1 (not buried in schema only)
- [ ] 135-word AI citation block is in first 30% of body, verbatim or near-verbatim
- [ ] ORSC R403.1.4 cited with "12 inches" — not "12 in" or "a foot"
- [ ] Both inspection phone numbers present: 541-682-5283 (City) + 541-682-4651 (County)
- [ ] Malpass clay named with BLM Technical Note 447 as source
- [ ] No-bedrock statement for Eugene / Willamette Valley floor
- [ ] Foundation type comparison table present (slab / crawl space / basement) with Eugene prevalence note
- [ ] Oregon 811 mentioned at least once in body copy
- [ ] 10-question FAQ block present, with all answers matching Section 9
- [ ] Cost section has ranges from Section 8 with HomeBlue source attribution
- [ ] Wet-season note frames competence positively (not as a limitation)
- [ ] Named cities in service area section: Eugene, Springfield, Cottage Grove, Junction City, Creswell, Veneta, Florence
- [ ] FAQPage schema on all 10 Q&A pairs
- [ ] Speakable schema on: AI citation block, frost-depth answer, cost section, inspection section
- [ ] GeneralContractor schema with areaServed: Eugene + Lane County
- [ ] BreadcrumbList schema: 4-level
- [ ] Internal link to `/foundation-excavation/` hub (anchor text matches)
- [ ] Internal link to `/excavation-contractor-eugene-oregon/`
- [ ] Anti-doorway gate: 6 requirements checked against `08-gap-analysis.md` Flag B
- [ ] No mention of Central Oregon bedrock as a factor in Eugene (it doesn't apply)
- [ ] Page is NOT a clone of the hub — at minimum these sections are Eugene-unique: inspection contacts, pricing ranges, soil section, foundation type prevalence, service area cities

---

## 19. Honest Limitations

**What this pack could not confirm in this research pass:**

- **Inspection contact accuracy:** The City of Eugene (541-682-5283) and Lane County Building Safety (541-682-4651) numbers were confirmed as current through cross-reference sources, but primary-source verification (calling the numbers) has not been done in this session. Confirm before publishing.
- **HomeBlue pricing accuracy:** The $2,300–$4,100 / $3,900–$6,800 / $190–$340/hr ranges are sourced from HomeBlue Eugene data accessed in this research pass, but pricing aggregators can lag the market. D&D should review these ranges against current job history before publication.
- **lanecountyhomes.net foundation type prevalence:** The "crawl space most common in Eugene" claim was sourced from a ranking realtor blog, not a government or research source. It is directionally correct but not formally studied. The brief should note that this can be softened to "one of the most common" if David prefers a more conservative claim.
- **Cojo Asphalt current SERP position:** SERP positions shift. The Cojo Asphalt #3 ranking was confirmed via DataForSEO on 2026-09-24. By publish time, its position may have changed. The displacement strategy is still sound regardless.
- **GBP status:** D&D Land Works does not have a live Google Business Profile as of this research date. AggregateRating schema cannot be added until GBP is live and reviews exist. This is marked as P3 gated in `08-gap-analysis.md`.

---

## 20. Supporting Research Files

| File | Contents | Use when |
|---|---|---|
| `01-keyword-universe.csv` | 80+ keywords, intent-labeled, all funnel stages | Content brief keyword selection; on-page placement decisions |
| `02-question-mine.md` | 60 questions, 6 categories, 10-Q FAQ shortlist with schema answers | FAQ section; FAQPage schema; section heading ideas |
| `03-entity-map.md` | 8 entity layers, co-occurrence analysis, validation status | Entity integration pass; schema @type decisions |
| `04-competitor-matrix.md` | Full SERP data, competitor heading maps, 12-point filter scores | Differentiation decisions; heading choices |
| `05-intent-triangulation.md` | 9 pain points, 8 customer scenarios, 6 decision triggers, 12 trust killers | Body copy framing; trust-killer rebuttals; CTA messaging |
| `06-ai-citation-audit.md` | AI Overview confirmed; 7 citable claims; 135-word citation block; Cojo displacement plan | First 30% of page; Speakable schema targets |
| `07-oregon-authority.md` | All code citations, pricing data, inspection contacts, soil sources | Any factual claim; code citations |
| `08-gap-analysis.md` | 20-point gap matrix, Flag A/B/C evaluations, cannibalization assessment | Priority decisions; anti-doorway compliance |
| `entity-inventory.csv` | 48 entities, validated, schema-typed | Schema generation; entity-validate pass |
