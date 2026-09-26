# Research Pack — Drainage Installation Eugene Oregon
## `/drainage-installation-eugene-oregon`

**Research date:** 2026-09-25  
**Pack type:** Location × Service (Eugene + Drainage/French Drain Installation)  
**Feeds:** `/content-brief` → `content-create` → `humanizer` → Astro page  
**Inherits from:** `../drainage-excavation/00-research-pack.md` (service hub, 2026-09-09) — the parent pack is the structural foundation; this pack adds only what is genuinely different for the Eugene city page  
**Structural parallel:** `../foundation-excavation-eugene-oregon/00-research-pack.md` (Eugene city-page format model, 2026-09-24)  
**Researcher:** Ducker Creative (deep-research methodology, adapted per CLAUDE.md — ninth page in this pipeline, second Eugene city×service location page after `/foundation-excavation-eugene-oregon/`)

---

## 0. Quick Reference — The Five Things That Make This Page Uncatchable

All five are uncontested among all Eugene excavation/drainage contractors currently present in the Lane County SERP. Zero local competitor does any of them.

| # | Differentiator | Why it wins | Source |
|---|---|---|---|
| 1 | **Eugene stormwater permit specifics (EC §6.610)** — who can pull the permit, who cannot, what it covers | No competitor in this market names this code section. The "who can pull it" restriction (only property owner or licensed plumber/septic installer) is specific, verifiable, and zero competitors address it | `07-oregon-authority.md §1` |
| 2 | **"Where does the water from a French drain go" with Eugene-specific answer** — three real destinations + the permit restriction on the storm-tie-in option | Zero competitor explains discharge destinations. The combination of daylight / dry well / permitted-storm-tie-in is the page's single strongest trust/expertise signal | `07-oregon-authority.md §7`; `06-ai-citation-audit.md §5` |
| 3 | **Eugene/Lane County pricing transparency** — Eugene-specific anchor ($3,081–$4,439 avg per Homeyou 04/2026, 455 projects) + national per-linear-foot ranges + clay multiplier disclosure | Zero competitor shows pricing. Eugene-specific average from Homeyou + "Willamette Valley clay can push costs 2–3× higher" is the strongest uncatchable combination for the cost section | `07-oregon-authority.md §4`; agent pricing data 2026-09-25 |
| 4 | **Eugene clay context (Malpass clay + filter fabric)** — why filter fabric is critical in Lane County clay, and why skipping it means the system fails sooner | Zero competitor mentions local soil type. BLM Technical Note 447 citation + "no-fabric-in-clay-fails" narrative is both technically correct and locally specific | `07-oregon-authority.md §8`; `03-entity-map.md Layer 3` |
| 5 | **"My yard was regraded but still wet" — the explicit acknowledgment of a failed prior fix** | Zero competitor addresses this scenario. The grading-leveling page already defers this exact situation here. The homeowner who regraded and is still wet is a high-conversion searcher — they know they have a problem, they've tried something, and they're ready to call a professional for a different solution | `05-intent-triangulation.md Table 1 Row 2` |

---

## 1. Page Spec

| Field | Value |
|---|---|
| **URL slug** | `/drainage-installation-eugene-oregon` |
| **Page title** | Drainage Installation Services in Eugene, Oregon \| French Drains & Storm Drainage |
| **H1** | Drainage Installation Services in Eugene, Oregon |
| **Meta description** | Drainage installation in Eugene, Oregon. French drain installation, stormwater drainage, and yard drainage solutions. Licensed excavation contractor. CCB #261742. Free estimates — 541-401-8726. |
| **Priority** | High — Phase 1 |
| **Intent** | Transactional |
| **Page type** | Location × Service |
| **Anti-doorway gate** | TRIGGERED — location page; all 6 requirements evaluated in `08-gap-analysis.md` Flag B |
| **Cannibalization risk** | Low — confirmed in `08-gap-analysis.md` Cannibalization Check |
| **Parent service hub** | `/services/drainage-excavation/` — this page goes deeper on Eugene-specific content that the hub does not cover |
| **Open item (carries from parent pack)** | Whether D&D installs French drains as a confirmed service vs. excavates/trenches for them — must be resolved with David before content brief locks the central service claim (see §5 below) |

---

## 2. Top 5 Primary Keywords

| Priority | Query | Intent | Volume est. | Target placement |
|---|---|---|---|---|
| P1 | french drain installation eugene or / eugene oregon | Transactional | ~50–100/mo (low absolute volume; high commercial intent) | H1, title, meta, intro paragraph |
| P1 | drainage contractor eugene or | Transactional | ~50–100/mo | First 100 words; schema name |
| P1 | yard drainage eugene oregon | Transactional | ~30–70/mo | First 100 words; H2 scope section |
| P1 | catch basin drainage eugene / catch basin installation eugene or | Transactional | ~10–30/mo | Named in service scope section and H2 |
| P2 | french drain installation cost eugene oregon | Commercial/consideration | ~10–30/mo | Cost section H2; featured-snippet target |

**Secondary P1 keywords** (integrate naturally): "French drain contractor Eugene OR," "drainage installation Lane County OR," "yard drainage Springfield Oregon," "French drain installation near me," "drainage contractor Lane County"

**Long-tail P2 keywords** (FAQ / supporting body): "french drain permit eugene or," "stormwater drainage contractor oregon," "curtain drain eugene oregon," "where does french drain water go," "regraded yard still wet," "swale or french drain which do i need," "malpass clay drainage"

Full universe: `01-keyword-universe.csv` (100+ terms, all intent-labeled).

---

## 3. Top 10 Questions This Page Must Answer

Ordered by conversion impact + search intent. These map directly to the H2 heading plan and FAQ schema block. Full question mine in `02-question-mine.md` (60 questions, 7 categories).

| # | Question | Section | Schema |
|---|---|---|---|
| 1 | How much does French drain installation cost in Eugene, Oregon? | Cost H2 | FAQPage + Speakable |
| 2 | Do I need a permit to tie a drain into Eugene's storm system — and who can pull it? | Permit H2 | FAQPage + Speakable |
| 3 | My yard was regraded but it's still wet — what's the next step? | Scope/decision H2 | FAQPage + Speakable |
| 4 | What's the difference between a French drain and a curtain drain? | Comparison H2 | FAQPage + Speakable |
| 5 | Where does the water from a French drain actually go? | Discharge H2 | FAQPage + Speakable |
| 6 | Does Eugene's clay soil affect how a French drain is installed? | Eugene soil H2 | FAQPage |
| 7 | What is a French drain, and how deep does it need to be? | Intro/definition H2 | FAQPage |
| 8 | French drain or swale — which one actually fixes a wet yard? | Decision H2 | FAQPage |
| 9 | Is a French drain the same drain required around my new foundation? | Boundary FAQ | FAQPage |
| 10 | Can a French drain make drainage worse if installed incorrectly? | Objection FAQ | FAQPage |

---

## 4. Top 10 Entities to Integrate

Ordered by content salience. Full inventory in `03-entity-map.md` and `entity-inventory.csv` (35 entities total, all validated).

| # | Entity | Canonical form | Placement | Schema |
|---|---|---|---|---|
| 1 | D&D Land Works | "D&D Land Works" | H1, AI citation block, schema @id | GeneralContractor |
| 2 | Oregon CCB #261742 | "CCB #261742" | First paragraph; schema `hasCredential` | EducationalOccupationalCredential |
| 3 | French Drain | "French drain" | H1 context, AI citation block, dedicated H2, FAQ | Thing; sameAs: Wikipedia French drain |
| 4 | Eugene Code §6.610 | "Eugene Municipal Code §6.610" | Permit section; AI citation block | GovernmentService |
| 5 | Eugene, Oregon | "Eugene, Oregon" | H1, meta, intro, areaServed | City Q34017 |
| 6 | Malpass Clay | "Malpass clay" | Eugene soil section; filter-fabric note | Thing; sameAs: BLM TN447 |
| 7 | Daylight Discharge Point | "daylight discharge point" | "Where does the water go" section | Thing |
| 8 | Curtain Drain | "curtain drain" | French-drain-vs-curtain-drain comparison | Thing |
| 9 | Filter Fabric / Geotextile | "geotextile filter fabric" | Materials section; Eugene clay context | Thing |
| 10 | Oregon 811 | "Oregon 811" | Process/safety section | Organization; sameAs: digsafelyoregon.com |

---

## 5. Scope Boundary — This Page vs. Siblings

**Anti-cannibalization rules — the content writer must read these before drafting.**

| Topic | This Eugene drainage page | Sibling page |
|---|---|---|
| French drain installation | Full technical coverage (depth, slope, pipe, gravel, filter fabric, discharge), Eugene-specific (clay, permit, rainfall) | Parent hub `/services/drainage-excavation/` covers national framing; this page goes deeper on Eugene specifics |
| Surface swale / slope grading | Cross-link only; one boundary sentence | `/grading-leveling-services-eugene-oregon/` (or parent grading page) — owns grading, swales, ORSC R401.3 slope |
| ORSC R405 foundation drain | Brief mention that a French drain can satisfy R405 when triggered by new foundation code requirement → cross-link to `/foundation-excavation-eugene-oregon/` for code detail | `/foundation-excavation-eugene-oregon/` owns ORSC R405/R406/R408 code citations |
| Septic drainfield / DEQ wastewater | One-line disambiguation only ("a septic drainfield disperses wastewater — a completely different, DEQ-regulated system") | `/septic-installation-lane-county-oregon/` |
| Sump pump | One honest sentence noting it's typically plumbing/electrical trade scope | Not a D&D claimed service |

**The open item (Flag D from parent pack, carried here):** Whether D&D Land Works installs French drains (and curtain drains, dry wells, catch basins) as a confirmed service, or performs only the excavation/trenching with product installation "confirmed per job." This is the central unresolved question and must be answered by David before this page ships. The page can publish honestly either way — see `08-gap-analysis.md` Flag D for the full framing.

---

## 6. Top 5 Content Gaps to Fill

Full scoring in `08-gap-analysis.md`. These become the page's primary differentiators.

| # | Gap | Score | Why it wins |
|---|---|---:|---|
| 1 | **EC §6.610 storm-drain permit** — who can pull it, what it covers | 50.0 | Zero competitor covers this; the most checkable, specific, free Eugene-specific authority signal available |
| 2 | **"Where does the water go"** with EC §6.610 permit context | 50.0 | Zero competitor explains this; the page's single strongest trust signal |
| 3 | **Eugene/Lane County pricing transparency** | 50.0 | Zero competitor shows pricing; any range + disclosure beats the "call for a quote" vacuum |
| 4 | **Eugene clay context (Malpass clay + filter fabric)** | 36.0 | BLM TN447 citation; Eugene-specific failure mode; zero competitor mentions local soil |
| 5 | **"My yard was regraded and still wet"** — failed-prior-fix scenario | 36.0 | High-conversion; zero competitor addresses this; grading-leveling page promises to send these readers here |

---

## 7. H2 Heading Map (Recommended)

Every H2 is a question under 10 words. This structure hits all 10 FAQ targets, anti-doorway requirements, featured-snippet opportunities, and the five key gaps above.

```
H1: Drainage Installation Services in Eugene, Oregon

[AI Citation Block — ~145 words — first 30% of page]

H2: What Is a French Drain, and How Deep Does It Go?
  → Define French drain precisely; state real depth figures (18–24 in. standard; 4–6 ft footing-level)
  → Distinguish from swale (surface) — one boundary sentence + link to grading page

H2: Which System Do You Actually Need?
  → French drain vs. curtain drain (comparison table)
  → Swale or French drain — decision from buyer's side
  → "Regraded yard, still wet" — this is the scenario that needs a buried system

H2: Where Does the Water From a French Drain Go?
  → Bulleted list: Daylight discharge point / Dry well / Permitted storm-drain tie-in
  → CRITICAL: the storm-drain tie-in requires a permit under Eugene Code §6.610

H2: Do You Need a Permit to Tie Into Eugene's Storm System?
  → Answer-first: YES — EC §6.610
  → Who can pull it: property owner (own residence) OR licensed plumber/licensed septic installer ONLY
  → Springfield: Ordinance 6464
  → Lane County outside city limits: confirm with Lane County Public Works

H2: What Does Drainage Installation Cost in Eugene?
  → Answer-first with ranges
  → Table: System type | Typical national range | Eugene clay note
  → Required disclaimer: national estimates; Eugene clay can push 2–3× higher; free on-site estimate

H2: What About Eugene's Clay Soil?
  → Malpass clay (BLM TN447) — west Eugene; high shrink-swell; low permeability
  → Why filter fabric is non-negotiable in Lane County clay
  → Wet season (Oct–May) and year-round drainage patterns

H2: What Materials Does a Properly Built Drain Use?
  → Bulleted list: pipe type / gravel / filter fabric / slope (1% grade)
  → Why each matters in Willamette Valley clay

H2: Is This the Same Drain My Foundation Requires?
  → Answer-first: no — direct disambiguation
  → Brief: ORSC R405 foundation drain is triggered by new foundation code; general French drain is not
  → Cross-link to /foundation-excavation-eugene-oregon/ for code detail

H2: Drainage Installation FAQs
  → FAQPage schema block (10 questions — see Section 10)

H2: When Is the Best Time to Install a French Drain in Eugene?
  → May–October dry window — clay doesn't hold trench walls in wet season
  → "We work year-round, but scheduling permits a May–October start for best results"
  → FEMA 2026 flood map update callout (1-2 sentences: check if your property changed zones)

H2: My Neighbor's Drainage Is Flooding My Yard — What Can I Do?
  → Oregon civil law rule: upstream owners cannot increase water to downhill neighbors
  → ORS 105.464 seller disclosure requirement
  → "A documented French drain may be your most defensible first step"
  → Brief — 150-200 words; this is a conversion topic (high frustration = high intent to call)

H2: Drainage Installation Service Area
  → Named cities: Eugene, Springfield, Cottage Grove, Junction City, Creswell, Veneta, Florence
  → Neighborhood callout: "Serving River Road, Cal Young, Bethel, South Eugene, Fairmount, and all of Lane County"
  → "Serving all of Lane County, Oregon"

[CTA Section: Free Estimate, 541-401-8726, CCB #261742, DEQ Certified]
```

---

## 8. Content Format Plan — Per H2

| H2 Section | Primary format | Schema unlocked | Featured-snippet eligible |
|---|---|---|---|
| AI Citation Block | Answer-first prose, ~145 words | Speakable | Yes — "drainage installation Eugene Oregon" |
| What is a French drain / depth | Answer-first (60-80 words) + depth figures | FAQPage + Speakable | Yes — "how deep does a french drain need to be" |
| Which system do you need? | Answer-first intro + comparison table (French drain / Curtain drain / Swale) | FAQPage + Speakable | Yes — "french drain vs curtain drain" |
| Where does the water go? | Bulleted list (daylight / dry well / storm tie-in) + answer-first framing | FAQPage + Speakable + ItemList | Yes — "where does french drain water go" |
| Do you need a permit? | Answer-first (60-80 words) with EC §6.610 citation | FAQPage + Speakable | Yes — "do i need a permit for french drain eugene" |
| What does it cost in Eugene? | Answer-first + cost table (system type × range × Eugene clay note) | FAQPage + Speakable | Yes — "french drain cost eugene oregon" |
| Eugene's clay soil | Prose + Malpass clay callout | FAQPage | Partial |
| What materials? | Bulleted list (pipe / gravel / fabric / slope) | ItemList | No |
| Foundation drain disambiguation | Answer-first (50-60 words) + cross-link | FAQPage + Speakable | No |
| FAQs | Accordion Q&A block | FAQPage (all 10 Qs) | Partial |
| Service Area | Bulleted city list | areaServed (schema) | No |

At least **one comparison table** (French drain / Curtain drain / Swale) and **one cost table** are required. Two bulleted lists (discharge options; materials). Format diversity across answer-first / table / list is confirmed.

---

## 8.5. Cost Section Data (Confirmed Pricing — Use in "What Does It Cost" H2)

**Eugene-specific anchor (lead with this):**
> Homeyou, April 2026: average French drain project in the Eugene area = **$3,081–$4,439**; range $1,043–$6,989; based on 455 claimed completed projects. Present with caveat: methodology not independently audited.

**Per-system reference table for the cost H2:**

| System type | Typical national range | Eugene/Lane County note | Source |
|---|---|---|---|
| Shallow exterior French drain | $10–$35/linear foot | Willamette Valley clay pushes 2–3× baseline | HomeGuide / Cojo |
| Footing-level French drain | $45–$85/linear foot | Portland-area full perimeter exterior $8,000–$20,000+ in OR clay | Better Basements 2026 |
| Interior/basement perimeter drain | $50–$60/linear foot | Different trade (basement waterproofing) — note scope boundary | Homeyou / eugenedrainage snippet |
| Curtain drain (shallow interceptor) | $10–$25/linear foot | Clay fabric requirement applies equally | HomeGuide |
| Dry well (infiltration chamber) | $1,165–$4,420 | Clay may limit effectiveness; larger chamber needed in Malpass clay | Angi |
| Catch basin + pipe | $1,000–$4,000 | Variable; depends on pipe run and outlet destination | Angi |
| Sump pump installation | $995–$1,395 avg Eugene | Plumbing/electrical scope — note clearly, not D&D's primary service | Homeyou 02/2026 Eugene |

**Required cost section disclaimer:** "Figures above are general estimates from national aggregators and regional contractor data. Eugene's Willamette Valley clay can push actual project costs 2–3× above national baselines. The only reliable estimate is a free on-site assessment — 541-401-8726."

---

## 9. Required Authority Signals

**Cite every one of these in the page.** These are the specific, verifiable claims that no competitor makes.

| Citation | Claim | Placement |
|---|---|---|
| Eugene Code §6.610 | Permit required to connect private drain to Eugene's stormwater system; only property owner or licensed plumber/septic installer can pull it | Permit section; AI citation block |
| **Oregon DEQ — UIC FAQ (NEW)** | **French drains, swales, and footing drains are EXEMPT from Oregon's Underground Injection Control (UIC) regulations — the only permit trigger for a standard residential French drain is if it ties into the city storm system (EC §6.610)** | Permit section — this simplifies the "do I need a permit" answer significantly |
| Springfield Ordinance 6464 (effective Jan 8, 2024) | Springfield requires permit to connect to public storm system or discharge to waterway | Springfield paragraph in permit section |
| NOAA / weather.gov | Eugene receives ~46.6 in. of rain/year, mostly Oct–May | Context/intro section |
| BLM Technical Note 447 | Malpass clay in west Eugene — high shrink-swell, low permeability, requires filter fabric in drainage systems | Eugene soil section |
| OSU Extension Service | Willamette Valley clay formed from glacial floods 10,000–14,000 years ago; saturated clay won't hold a vertical trench wall — important for installation timing | Eugene soil section; seasonal timing section |
| Homeyou (Eugene-specific, 04/2026) | Eugene French drain average project cost $3,081–$4,439; range $1,043–$6,989; 455 claimed completed projects | Cost section — lead citation for Eugene-specific pricing |
| HomeGuide / Angi (national) | $10–$35/ft shallow drain; $45–$85/ft footing-level; $1,165–$4,420 dry well; $1,000–$4,000 catch basin | Cost section (secondary reference; Homeyou is the Eugene-specific anchor) |
| Cojo Asphalt / Better Basements Portland | 2–3× cost multiplier for Willamette Valley clay; Portland-area full perimeter exterior French drain $8,000–$20,000+ | Cost section (clay multiplier and high-end Oregon context) |
| M4 Landworks (local competitor) | French drains "can last 15–25 years or more" | Lifespan FAQ answer |
| Oregon 811 / digsafelyoregon.com | Call 811 at least 2 business days before any digging, including drainage trenches | Process/safety section |
| **FEMA Press Release, Jan 26, 2026 (NEW)** | FEMA updated flood maps for Lane County / Eugene / Springfield on Jan 22, 2026 — Amazon Creek, Fall Creek, Silk Creek, Willamette River forks affected; new SFHA zones may require floodplain development permits before drainage work | Call-out or FAQ: "The 2026 FEMA flood map update may affect your property — check before starting any drainage project" |
| **LegalClarity / ORS 105.464 (NEW)** | Oregon civil law rule: upstream owners cannot substantially increase water volume/velocity flowing to downhill neighbors; they're liable for trespass/nuisance/negligence; ORS 105.464 requires sellers to disclose drainage problems | FAQ — "My neighbor's drainage is flooding my yard — what are my rights?" |

**Density target:** ~1 verifiable citation per 300-500 words of body copy; at least one external authority link per major section.

---

## 10. 10-Question FAQ Shortlist (Schema-Ready Answers)

These go directly into the FAQPage schema block AND the visible FAQ accordion. The first 5 are Speakable candidates.

**Q1: How much does French drain installation cost in Eugene, Oregon?**
French drain installation costs vary by system type and site conditions. National estimates range from $10 to $35 per linear foot for shallow exterior drains and $45 to $85 per linear foot for deeper footing-level French drains. Willamette Valley clay — common in Eugene — can push real project costs 2 to 3 times higher than these baseline figures, due to dewatering, clay slumping, and the added time of working in saturated soil. Contact D&D Land Works for a free on-site estimate specific to your Eugene or Lane County property.

**Q2: Do I need a permit to install a French drain in Eugene?**
For a standard residential French drain that discharges to daylight or into a dry well on your own property, Oregon does not require a permit — French drains, swales, and footing drains are explicitly exempt from Oregon's Underground Injection Control (UIC) regulations. However, if you want to tie the drain into Eugene's public stormwater system, that connection requires a separate permit under Eugene Municipal Code §6.610 — and that permit can only be obtained by the property owner (for their own personal residence) or a licensed plumber or licensed septic-tank-installation contractor. D&D can assess which discharge option fits your site and whether the EC §6.610 connection permit applies.

**Q3: My yard was regraded but it's still wet — what's next?**
Regrading reshapes the ground to move surface water in a different direction. If your yard is still wet after regrading, the problem is likely subsurface water in the soil — not just surface runoff. That's the scenario a French drain addresses: it buries a perforated pipe in gravel to intercept and carry groundwater to a discharge point. A regraded yard and a French drain solve different problems; you may need both.

**Q4: What's the difference between a French drain and a curtain drain?**
A French drain is a buried perforated pipe surrounded by gravel, typically installed at 18 to 24 inches depth (or deeper near a footing), designed to collect and convey groundwater. A curtain drain is a shallower version, typically about 2 feet deep, that intercepts near-surface water moving across the soil rather than from within the ground. Curtain drains cost less ($10–$25 per linear foot vs. $40–$85+ for a full French drain) and work well for lighter near-surface drainage problems.

**Q5: Where does the water from a French drain actually go?**
Water from a French drain exits the system in one of three ways: (1) Daylight discharge — the pipe exits above ground at a lower elevation and lets gravity do the rest, (2) into a dry well — a buried chamber that slowly infiltrates water back into the soil, or (3) a permitted tie-in to the city's public stormwater system (which requires a permit under Eugene Code §6.610 and can only be pulled by the property owner or a licensed plumber/septic installer). The right discharge option depends on your lot's slope, soil conditions, and proximity to the city storm system.

**Q6: Does Eugene's clay soil affect French drain installation?**
Yes — significantly. Willamette Valley clay, including the Malpass clay series documented in west Eugene, has low permeability and high shrink-swell properties. Two key implications: First, geotextile filter fabric is not optional in Eugene clay — without it, fine clay particles migrate into the gravel and pipe over time, clogging the system within a few years. Second, saturated clay can push installation costs 2–3× above national baselines due to dewatering, slumping, and slower dig rates.

**Q7: What is a French drain, and how deep does it need to be?**
A French drain is a buried, perforated pipe surrounded by washed gravel and wrapped in filter fabric. It collects groundwater and carries it to a discharge point — a daylight outlet, a dry well, or a permitted tie-in to the stormwater system. Standard residential French drains are typically installed at 18 to 24 inches depth. Shallow surface-water-only applications can run as shallow as 8 to 12 inches. French drains tied to a footing follow that footing's depth — often 4 to 6 feet.

**Q8: French drain or swale — which one fixes a wet yard?**
It depends on the source of the water. If water is pooling because the yard's grade pushes it to a low spot — regrading and a surface swale can redirect it. If water is saturating the soil from below or moving laterally through the soil regardless of surface grade — that's what a French drain addresses. If your yard was already regraded and is still wet, you likely need a French drain rather than more grading.

**Q9: Is a French drain the same drain my new foundation requires in Oregon?**
Not exactly. Oregon's residential building code (ORSC R405) requires a perimeter drain around new foundation walls — which is physically similar to a French drain (a perforated pipe in gravel), but it's code-triggered by the building permit, not a freestanding yard drainage decision. A yard French drain installed to fix a general drainage problem is not subject to the same code requirement and does not require a building permit. See our [Foundation Excavation Eugene page](/foundation-excavation-eugene-oregon/) for more on the ORSC R405 requirement.

**Q10: Can a French drain make drainage worse if installed incorrectly?**
Yes. The most common mistake is installing a French drain that collects water and moves it to a new low point without a proper discharge destination — creating a new wet area instead of solving the existing one. This typically happens when the drain dead-ends without daylight, a dry well, or a permitted storm-drain tie-in. A properly designed and installed French drain always terminates at a real discharge point that the water can actually get to.

---

## 11. Required Schema Types

| Schema @type | Required fields | Notes |
|---|---|---|
| `GeneralContractor` | name, url, telephone, address, areaServed, hasCredential (CCB #261742), priceRange | Reused from home schema; add areaServed Eugene + Lane County |
| `Service` | name ("French Drain Installation / Drainage Installation"), provider (D&D), areaServed, description, serviceType | Nest under GeneralContractor |
| `FAQPage` + `Question` + `Answer` | All 10 FAQ pairs from Section 10 | Use all 10 |
| `BreadcrumbList` | Home → Services → Drainage Installation → Eugene | Four-level crumb |
| `Speakable` | CSS selector on: AI citation block, permit answer, cost section, "where does water go" section, clay soil section | Minimum 5 Speakable targets |
| `ItemList` | For the discharge-destinations bulleted list (daylight / dry well / storm tie-in) and the materials list (pipe / gravel / fabric / slope) | Two ItemList instances |
| `AggregateRating` | DO NOT ADD — no reviews exist yet; do not fabricate | Gated on GBP launch |

---

## 12. AI Citation-Ready Block (~145 Words — Drop Verbatim into First 30% of Page)

Placement: after the page intro (which names D&D and CCB #261742), before the first H2.

> Drainage installation in Eugene, Oregon typically means installing a buried French drain, curtain drain, or catch-basin-and-pipe system to move water away from a wet yard, a foundation perimeter, or a chronically saturated area that surface regrading alone can't fix. Eugene receives approximately 46.6 inches of rain per year — nearly 9 inches more than the U.S. average — almost all of it falling between October and May. In Willamette Valley clay, which doesn't drain naturally, a buried drainage system is often the only permanent solution. In Eugene, connecting a French drain discharge to the city's stormwater system requires a permit under Municipal Code §6.610, which can be pulled only by the property owner (for their own residence) or a licensed plumber or licensed septic installer. D&D Land Works provides drainage installation for residential and commercial properties throughout Eugene, Springfield, and Lane County under Oregon CCB license #261742. Free estimates: 541-401-8726.

**Speakable CSS selector:** `.ai-citation-block` or the page's first `<div class="lead">` block.

---

## 13. Trust-Killer Rebuttal Map

These must appear in the page body, not just a FAQ. See `05-intent-triangulation.md` Table 3 for full source analysis.

| Trust killer | Rebuttal (where to build it in) |
|---|---|
| Can't explain where the water actually goes | State the three real discharge destinations plainly + explain EC §6.610 permit restriction — "where does the water go" H2 |
| Vague "we do drainage" with no depth/material/price specifics | State real depth figures, slope, pipe type, filter fabric necessity, and cost ranges throughout |
| No mention of Eugene's stormwater permit | Name EC §6.610 plainly, with who-can-pull-it restriction — dedicated H2 |
| Silence on whether D&D installs French drains (or only excavates for them) | Resolve per §5's open item before publishing; do not overclaim |
| Cheap pipe, no filter fabric in clay soil | "In Malpass clay, a drain without geotextile filter fabric will clog over time — it's not a matter of if, but when" |
| Can't tell if problem is grading or drainage job | "Swale or French drain — which one?" H2 + "my yard was regraded and still wet" FAQ |
| Ghost contractor / zero online presence | Named owner (David Deggelman) + direct phone (541-401-8726) + CCB #261742 with verification link |
| No acknowledgment of Eugene's specific conditions | Eugene rainfall figure + Malpass clay section + wet-season competence framing ("D&D excavates year-round...") |

---

## 14. E-E-A-T Signal Plan

**Experience:**
- Reference Eugene and Lane County drainage challenges from field knowledge (Malpass clay, wet-season trenching)
- David Deggelman as named operator
- Real drainage job photos as they become available (do not fabricate)

**Expertise:**
- EC §6.610 citation with the specific "who can pull it" restriction — the page's deepest technical signal
- Real depth/slope/material specs throughout
- BLM Technical Note 447 for Malpass clay — a primary federal source no competitor cites

**Authoritativeness:**
- CCB #261742 with link to verify at orccb.org
- DEQ Certified (septic context — brief mention of cross-service capability)
- Oregon 811 mentioned in process section
- Eugene Code §6.610 cited directly (the city's own municipal code)

**Trustworthiness:**
- Pricing transparency with source attribution (national ranges, clearly labeled)
- Clay-multiplier cost disclosure (honest about Eugene conditions pushing costs higher)
- Named owner; direct phone; free estimate CTA
- Explicit scope boundary against sibling pages (no overclaiming)
- Unresolved service-scope open item (French drain install vs. excavate-only) handled honestly per §5

---

## 15. Internal Link Plan

**Links FROM this page:**

| Anchor text | Destination URL | Purpose |
|---|---|---|
| "grading and swale work" or "yard grading" | `/grading-leveling-services-eugene-oregon/` (or parent grading page) | Scope boundary — surface vs. buried drainage |
| "foundation drain required by Oregon code" | `/foundation-excavation-eugene-oregon/` | ORSC R405 disambiguation |
| "septic installation in Lane County" | `/septic-installation-lane-county-oregon/` | One-line disambiguation |
| "excavation contractor in Eugene" | `/excavation-contractor-eugene-oregon/` | Cross-service hub |
| "CCB license verification" | orccb.org (external) | Trust/authority signal |

**Links TO this page (update before or at publish):**

| Anchor text | Source page | Status |
|---|---|---|
| "drainage installation" or "French drain" | `/services/drainage-excavation/` | UPDATE parent hub to link to city page |
| "drainage" | `/excavation-contractor-eugene-oregon/` | ADD link |
| "drainage installation" | `/foundation-excavation-eugene-oregon/` | ADD cross-link (they explicitly reference it) |
| Service link | GBP (when live) | Phase 2 |

---

## 16. Anti-Doorway Gate Compliance (6 Requirements)

| Requirement | Status for this page | Notes |
|---|---|---|
| 1. Eugene-specific testimonials | NOT YET — no reviews exist | Omit testimonial slot at launch; add when reviews accumulate; do NOT fabricate |
| 2. Eugene/Lane County specific photos | AI-generated placeholder (`service-drainage-excavation.webp`) available at launch | Swap for real David Deggelman drainage job photo when available |
| 3. Eugene-specific FAQs | CONFIRMED — 5 of 10 FAQ questions are Eugene/Lane County specific (pricing in Eugene, clay soil, EC §6.610, wet season, Malpass clay filter fabric) | These do NOT appear on the parent service hub |
| 4. Unique opening paragraph | REQUIRED — must reference Eugene's rainfall, Malpass clay or wet season; do NOT copy parent hub intro with a name swap | Model on foundation-excavation-eugene-oregon intro |
| 5. Eugene-specific content (soil, climate, permit) | CONFIRMED — Malpass clay section, EC §6.610 section, 46.6-in. rainfall figure, Oct–May wet season, Eugene vs. Springfield vs. Lane County permit differences | All unique to this page |
| 6. Adjacent neighborhood/sibling internal links | REQUIRED — link out to `/grading-leveling-services-eugene-oregon/` and `/foundation-excavation-eugene-oregon/`; update siblings to link back | Not optional; part of anti-doorway compliance |

**Gate status: PASSES if requirements 3, 4, 5, and 6 are completed. Requirement 1 (testimonials) gated on review pipeline. Requirement 2 (photos) partially satisfied at launch; improve over time.**

---

## 17. Competitor Context (Summary — Full Detail in `04-competitor-matrix.md`)

**SERP reality (confirmed via live research 2026-09-25):** The top 4–5 positions for "French drain installation Eugene Oregon" are occupied by lead-gen aggregators (eugenedrainage.com × 2, frenchdrainyarddrainage.com × 2) and a cost aggregator (Homeyou). Real local contractors appear at positions 6-9. This is better than projected — D&D's ranking challenge is primarily against thin auto-generated pages, not technically strong local competitors.

| Competitor | SERP position | Key weakness D&D exploits |
|---|---|---|
| eugenedrainage.com (lead-gen) | Multiple positions 3–6 | Auto-generated thin pages; no real content, no CCB, no local contact; D&D's genuine local expertise wins by default |
| frenchdrainyarddrainage.com (lead-gen) | Positions 4, 7 | National city-page generator; same as above |
| Cutting Edge Landscape (local) | Position 6 most queries | Experience claim only; no pricing, no permits, no specs, no FAQ — **the primary local benchmark** |
| Innovative Underground (local) | Positions 7-8 | Full service suite but zero drainage content depth; CCB #197376 |
| Kaminski Construction (local) | Positions 9-10 | Foundation-centric; BBB/EPA credentials; no drainage specs |
| Rotex Excavation (local) | Unknown | 27 years experience; content inaccessible |
| Eugene Dirt Works (local) | Unknown | Explicitly lists French drains; small-equipment niche; vague "you may need permits" |
| M4 Landworks (regional) | Unknown (ranked in parent pack for drainage queries) | Names French drains but no pricing, no permits, no materials, no Eugene specificity, no schema |
| Pacific Earthworks (regional) | Unknown | Dedicated /french-drains URL but no confirmed technical depth |
| Cojo Asphalt (out-of-area blog) | Unknown | Best technical content; no Eugene CCB, no local contact, no schema, no FAQ — **primary content displacement target** |

**12-point AI citation filter scores:** All Eugene local competitors score 1–3/12. Cojo Asphalt (out-of-area) scores ~4–5/12 on technical content alone. D&D's target at launch: **9–10/12**. Upgrade path to 12/12 when GBP is live and reviews exist.

---

## 18. Freshness Plan

| Update trigger | What to update | Frequency |
|---|---|---|
| Eugene EC §6.610 fee or restriction changes | Permit section + AI citation block | Annual check; re-verify if content build is >90 days after 2026-09-25 |
| Springfield Ordinance 6464 updates | Springfield paragraph | Annual; especially first year (amendments are recent) |
| NOAA rainfall data | Eugene rainfall figure | Every 5 years (30-year climate normals updated on decadal cycle) |
| Cost-guide data (HomeGuide, Angi) | Cost section ranges | Annual |
| New D&D drainage jobs in Eugene | Add project photos, job references | After each Eugene drainage job |
| GBP live + reviews accumulate | Add AggregateRating schema | When GBP is launched and reviews exist |

---

## 19. Quality Checklist (Run Before Passing to Content Brief)

- [x] 100+ keywords captured in `01-keyword-universe.csv` (confirmed: 100 rows)
- [x] 60 questions mined in `02-question-mine.md`; 12 Oregon/Eugene-specific; 8 objection-tagged; 4 forum-sourced (proxy method consistent with all prior packs)
- [x] 5 competitors checked in parent pack; 2 new drainage-specific competitors added (M4 Landworks, Pacific Earthworks); Cojo Asphalt identified as primary displacement target — `04-competitor-matrix.md`
- [x] Flag A (listicle SERP): NOT triggered — consistent with parent pack finding; no listicle-dominated SERP for local excavation/drainage queries
- [x] Flag B (anti-doorway gate): TRIGGERED (location page) — 6 requirements evaluated; confirmed satisfiable with genuine Eugene-specific content — `08-gap-analysis.md` Flag B
- [x] Flag C (service × location matrix): BUILD LATER for other Lane County cities (Springfield, Cottage Grove, etc.) — `08-gap-analysis.md` Flag C
- [x] Flag D (open item — service confirmation): CARRIED FROM PARENT PACK — whether D&D installs French drains vs. only excavates/trenches must be confirmed with David before content brief locks
- [x] 5 Oregon/Eugene/Lane County authority signals — EC §6.610, Springfield Ord. 6464, Malpass clay (BLM TN447), NOAA rainfall, national cost ranges with clay multiplier — `07-oregon-authority.md`
- [x] Heading map composed, every H2 a real question under 10 words
- [x] Content format plan complete for every H2 (format type + schema unlock specified), including at least two tables and two bulleted lists
- [x] FAQ shortlist composed (10 questions) with schema-ready answers in Section 10
- [x] AI citation block drafted (~145 words, first-30%-placement) — Section 12
- [x] 7 specific citable claims documented — `06-ai-citation-audit.md` §5
- [x] Trust-killer rebuttal map — Section 13
- [x] E-E-A-T signal plan — Section 14
- [x] Anti-doorway gate 6-requirement check — Section 16
- [x] Scope boundary documented vs. all three sibling pages (grading-leveling, foundation-excavation, septic) — Section 5
- [x] Internal link plan in both directions — Section 15
- [x] Entity inventory in `entity-inventory.csv` (35 entities, all validated)
- [ ] AI citation audit across 6 live AI chat systems — **not directly queryable this session** (consistent limitation across all prior packs; reasoned from SERP composition and parent-pack AI citation channel analysis — see `06-ai-citation-audit.md`)
- [ ] Live SERP position data via DataForSEO — research agent was dispatched; update `04-competitor-matrix.md` SERP Composition table with confirmed position data when agent report is available

---

## 20. Honest Limitations

1. **No direct AI chat-interface querying** was performed this session — consistent with all prior packs; AI Overview and citation findings are reasoned from SERP patterns. AI Overview status for "French drain installation Eugene Oregon" must be verified with a live browser Google search before page publication.
2. **The parent pack's most consequential open item carries to this city page:** Whether D&D installs French drains (vs. excavates/trenches for them) must be resolved with David before this page's central service claim is locked. See §5 and `08-gap-analysis.md` Flag D.
3. **Eugene EC §6.610 direct-fetch returned a 403** in the parent research session. The permit-required and who-can-pull-it facts are well-corroborated (confirmed via EC text snippet in live research), but fee amounts for the permit should be confirmed directly with Eugene's Engineering Department before quoting specific dollar figures.
4. **Homeyou "455 completed projects" methodology is opaque.** The $3,081–$4,439 average appears on Homeyou, Manta, and multiple aggregator snippets — all appear to draw from the same upstream source. Use with explicit caveat: "Based on aggregated quote data for the Eugene area (Homeyou, 04/2026); actual costs vary by site conditions."
5. **Rotex Excavation drainage page content** was not accessible (DNS failure during research). Their /landscape-drainage/ content is unknown — may be a competitor with more depth than typical.
6. **No Lane-County-specific storm-drain tie-in code** equivalent to Eugene's EC §6.610 was found for Springfield or unincorporated Lane County. Both are presented as general rules pending direct verification with Springfield Public Works or Lane County.
7. **D&D's zero digital footprint** means no GBP, no reviews, no directories, and no sameAs platforms exist yet — schema points 2, 11, and potentially 9 of the 12-point AI citation filter are gated on Phase 2 buildout.
8. **FEMA 2026 flood map update:** The January 2026 Lane County flood map revision (Amazon Creek, Fall Creek, Silk Creek) may affect drainage permit requirements for some Eugene properties. The appeal period closed April 16, 2026. This is a time-sensitive callout — properties near these waterways should check their flood zone status before starting drainage work. Contact: Floodplain Administrator Jack Blackham, JBlackham@eugene-or.gov.

---

## 21. Supporting Research Files

| File | Contents | Use when |
|---|---|---|
| `01-keyword-universe.csv` | 100+ keywords, intent-labeled, funnel-staged | Keyword selection; heading and meta decisions |
| `02-question-mine.md` | 60 questions, 7 categories, 10-Q FAQ shortlist with schema answers | FAQ section; FAQPage schema; H2 heading ideas |
| `03-entity-map.md` | 8 entity layers, co-occurrence analysis, validation status | Entity integration pass; schema @type decisions |
| `04-competitor-matrix.md` | SERP data, competitor deep-dive, 12-point filter scores | Differentiation decisions; heading choices |
| `05-intent-triangulation.md` | 10 pain points, 2 decision trigger tables, trust-killer table, 6 customer scenarios | Body copy framing; CTA messaging |
| `06-ai-citation-audit.md` | AI Overview analysis; 7 citable claims; 145-word citation block; 12-point filter plan | First 30% of page; Speakable schema targets |
| `07-oregon-authority.md` | All code citations, pricing data, Eugene rainfall, Malpass clay, contacts | Any factual claim; code citations |
| `08-gap-analysis.md` | 20-point gap matrix, Flag A/B/C/D evaluations, cannibalization assessment | Priority decisions; anti-doorway compliance |
| `entity-inventory.csv` | 35 entities, validated, schema-typed | Schema generation; entity-validate pass |
