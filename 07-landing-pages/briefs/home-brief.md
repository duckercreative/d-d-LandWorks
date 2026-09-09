# Content Brief — D&D Land Works Homepage (`/`)

**Prepared:** 2026-09-08 · **Prepared by:** Ducker Creative
**Built from:** `01-research/page-research/home/` full research pack (files 00-08 + entity-inventory.csv + 01-keyword-universe.csv), `business-info.md`, `01-research/topical-map-2026-09-03.md`, `docs/design-system.md`.
**Methodology note:** This project's `content-briefs` skill was written for a prior HVAC client (75 Degree AC, Houston) and references files that do not exist here (`07-houston-authority.md`, `entity-id-registry.md`, `entities-mapping.csv`, `competitors/top-players.md`, `services-list.md`, the 12-point AI-citation filter, manufacturer-authorization fields, "Houston-specific" requirements). Those sections are dropped or substituted below with the real D&D Land Works equivalents named in the task instructions. This is the **first brief for this client** — there is no prior brief to reconcile against and no cross-page entity registry yet. **This brief establishes the canonical entity profile for D&D Land Works** (business identity, services, license, certification, service-area list) that every future service-page and city-page brief should inherit from rather than re-deriving.

---

## 1. Page Metadata

| Field | Value |
|---|---|
| **URL** | `/` |
| **Page type** | Homepage (entity-defining page, not a location or service sub-page) |
| **Primary keyword** | `excavation contractor lane county or` (county-wide framing — matches the homepage's role as the entity page, distinct from the future `/service-areas/eugene/` city page) |
| **Co-primary keyword** | `excavation contractor eugene or` / `excavation contractor eugene oregon` (highest-competition head term in the market; Eugene is the Tier-1 anchor city and CCB/DEQ association will center there) |
| **Secondary keywords** | `full service excavation company oregon` (matches D&D's own card positioning verbatim); `excavation contractor near me`; `excavation and septic company eugene oregon`; `licensed excavation contractor oregon`; `land clearing and grading eugene oregon`; `excavation contractor that does septic too eugene`; `dirt work contractor eugene oregon`; `d&d land works` / `ddlandworks` (brand terms, zero volume today but must be owned) |
| **Semantic terms** (must appear at least once) | site preparation, excavation and grading, land clearing, brush clearing, grading and leveling, foundation excavation, drainage excavation, utility excavation, trenching and backfill, septic installation and repair, driveway repair, slope stabilization, licensed and bonded, DEQ certified, Oregon CCB #261742, Willamette Valley, free estimate |
| **Search intent** | Commercial, decision-stage (per `00-research-pack.md` §1 — all top-5 targets are commercial/decision-stage, not informational) |
| **Current position / baseline** | **None — zero baseline.** `ddlandworks.com` does not resolve, there is no live site, no GSC data, no rankings, no indexed content of any kind (confirmed in `06-ai-citation-audit.md` and `business-info.md`). This brief is for a **greenfield build**, not a rewrite or optimization pass. Every recommendation below is a from-scratch target. |

---

## 2. Intent & Audience

- **Primary ICP:** A residential landowner in Lane County who has just acquired raw/rural land or is preparing an existing lot for new construction (home, shop, barn, ADU) and needs site prep before a builder can start. Secondary ICP: a general contractor/builder or small commercial developer who needs a subcontractor for excavation on a new-build lot or subdivision (`05-intent-triangulation.md` Table 2).
- **State of mind:** Task-driven and slightly anxious about being "sold" — they've likely never hired an excavation contractor before, don't know what a fair price looks like, and are worried about hidden costs, rainy-season delays, or hiring someone who won't show up (`05-intent-triangulation.md` Table 1, Table 3). A meaningful secondary trigger is an urgent-but-not-emergency home problem: a failing septic system (odor, pooling, slow drains) or a yard that floods every winter despite prior "fixes."
- **What they need to believe before calling:**
  1. This contractor is actually licensed and bonded, and I can verify that myself in one click — not just take their word for it.
  2. One call can cover my whole project (site prep, grading, drainage, septic) — I don't need to coordinate three different contractors.
  3. There's a real, honest price range I can sanity-check before I even request an estimate, and no cost surprises will show up later (permits, hauling, dewatering).
  4. They understand Oregon's rainy season and clay soil, and won't blindside me with a wet-season disaster mid-project.
  5. A small residential job won't get deprioritized behind bigger commercial work.

---

## 3. Voice & Angle

- **Writing voice:** Per `docs/design-system.md` — the brand pairs an industrial-but-modern visual system (Outfit/Poppins typography, brand-blue + safety-orange-as-CTA-only) with a straightforward, no-fluff trade-contractor register. Write as an experienced Lane County excavation contractor talking plainly to a first-time landowner: direct, confident, zero corporate throat-clearing ("At D&D Land Works, we are committed to..." is banned). Short, declarative sentences for trust claims; slightly longer sentences only when explaining a technical concept (DEQ certification, OSHA trench thresholds).
- **Required Lane County / Oregon-specific detail (minimum 5, per `07-oregon-authority.md`):**
  1. Willamette Valley clay soil — poor drainage, hardens dry / sticky-and-rutting wet, complicates wet-season digging (OSU Extension-sourced).
  2. Eugene's rainfall pattern — 40.83 in./year normal, wettest months December (7.21 in.), January (6.05 in.), November (5.98 in.) — NOAA 1991-2020 normals.
  3. May–October as the standard-recommended dry excavation window in the Willamette Valley; November–April is workable but slower and costlier.
  4. Lane County permit distinctions — foundation excavation under an active building permit is typically exempt from a separate grading permit; driveway/access-point work connecting to a county road is not (sight-distance/culvert-sizing review required).
  5. Oregon CCB (Construction Contractors Board) as the specific state licensing/enforcement body, with a direct link to `search.ccb.state.or.us`.
- **Insider/practitioner detail that signals real local expertise (use at least 2):**
  - Naming the actual mechanism of the soil problem — wet Willamette Valley clay "pumps and ruts" under equipment and won't compact reliably, which is why dry-season scheduling isn't just a sales line, it's a real engineering constraint (`07-oregon-authority.md` §5).
  - The repair-vs-replace threshold used industry-wide for failing septic systems: if repair cost exceeds roughly half the cost of a new system, replacement is the better call (`02-question-mine.md` Q29, sourced from septic-industry literature).
  - OSHA 29 CFR 1926 Subpart P specifics: trenches 5 ft deep or more require a protective system; safe access is required within 25 ft of lateral travel for excavations 4 ft deep or more; a "competent person" (an OSHA term of art) must be involved below that threshold. Citing exact thresholds, not just "we follow safety rules," is what separates a practitioner from marketing copy.

---

## 4. E-E-A-T Requirements

Signal counts below are pulled directly from the research pack — not guessed:

- **Experience (minimum 2 signals):** Named owner (David Deggelman) referenced in body copy and linked to `/about/`; a real, unembellished process description (call → site visit → estimate → schedule → work → cleanup) that only comes from having actually run these jobs. **Do not** add a fabricated years-in-business figure — that is an open item (see §14/open items below).
- **Expertise (minimum 3 signals):** A dedicated plain-language paragraph explaining what DEQ Installer Certification legally requires (per `08-gap-analysis.md` gap #5 — 0/8 competitors explain this, they only display the badge); the repair-vs-replace septic threshold; the OSHA Subpart P depth thresholds named above.
- **Authority (minimum 3 signals):** Oregon CCB #261742 stated in visible body copy (not footer-only) and hyperlinked to `search.ccb.state.or.us`; direct outbound links to `oregon.gov/ccb` and `oregon.gov/deq`; NOAA/OSU-sourced climate and soil citations.
- **Trust (minimum 4 signals):** Real cost ranges labeled as general estimates, not quotes; an explicit scope-honesty statement (what D&D does NOT do); a plain statement that residential jobs are not an afterthought; and an honest, non-fabricated acknowledgment that D&D is a new local business with no reviews yet rather than inventing testimonials or a review count (`05-intent-triangulation.md` Table 3, last row).

---

## 5. AI Citation Target

Copied verbatim from `06-ai-citation-audit.md` §4 (134 words, drafted to be citable by an AI system answering "who provides excavation services in Lane County, Oregon" once the site is live and indexed):

> D&D Land Works is a full-service excavation, grading, and site preparation contractor based in Lane County, Oregon, serving Eugene, Springfield, and surrounding Lane County communities. Owned and operated by David Deggelman, the company is licensed and bonded under Oregon Construction Contractors Board license #CCB 261742 and holds Oregon DEQ certification, which qualifies it to install and repair septic systems under state onsite wastewater regulations. D&D Land Works serves both residential and commercial customers, offering site preparation, land clearing, brush clearing, foundation excavation, grading and leveling, drainage excavation, utility excavation, trenching and backfill, septic installation and repair, driveway repair, and slope stabilization. Free estimates are available for all project types. The company can be reached at 541-401-8726 or david@ddlandworks.com.

**Placement:** first 30% of homepage body content, immediately following the opening paragraph, as a plain paragraph (no blockquote/callout styling) — this matches the pack's finding that 44.2%+ of LLM citations draw from a page's first third.

---

## 6. Content Structure

**Word count target: 2,200–2,800 words.** Justification: the 8 competitor homepages examined in `04-competitor-matrix.md` are uniformly thin brochure pages — a services grid, a short "why choose us" blurb, and a CTA, with **zero** of them running a real FAQ, cost content, process content, permit guidance, or seasonal content. Benchmarking against their word count would mean benchmarking against structural shallowness. Instead, the target is derived from what's needed to actually cover the 10 required H2 sections below to the depth the research pack specifies: 8 answer-first sections (60–100 words each) + a services list + a cost comparison table + a numbered process list + a 9-question FAQ block (40–90 words per answer) + the 134-word AI citation block. That arithmetic lands at roughly 2,200–2,800 words — meaningfully deeper than any competitor's page, which is itself part of the structural-depth differentiation identified in `00-research-pack.md` §5.

**H1:** Full-Service Excavation Contractor in Lane County, Oregon
*(source: `00-research-pack.md` §6 — matches the 5/8 competitor pattern of "Excavation Contractor/Company in [City], OR" per `04-competitor-matrix.md` Matrix A, scoped to the county since this is the entity page, not a city page)*

**Opening paragraph guidance (first 100–150 words):** Open with the primary keyword and the bundled-service positioning in the first sentence — this is gap #20/#1 from `08-gap-analysis.md` (tied top-priority gaps, score 40.0): state plainly that D&D Land Works is a full-service excavation, grading, and site-prep contractor serving Lane County, and that one licensed, bonded contractor can carry a project from site prep through septic. Follow immediately with the 134-word AI citation block from §5 above.

**H2 sections, in order** (every H2 traces to either competitor-matrix usage or a top-5 gap — cited inline):

| # | H2 (exact text) | Traces to | Format |
|---|---|---|---|
| 1 | Site Prep, Grading, Septic, and More — One Licensed Contractor for Your Whole Project | Gap #1/#20 (bundled-service positioning, tied top score 40.0) + competitor matrix "Why Choose Us" pattern (6/8) | Answer-first, 50–70 words |
| 2 | What Excavation and Site Prep Services Does D&D Land Works Offer? | Competitor matrix: services grid is 8/8 table stakes | Bulleted list — all 11 verified services, each linking to its service page |
| 3 | Is D&D Land Works Licensed and Bonded in Oregon? | Competitor matrix: license number displayed 7/8; Gap #10, License-verification link, score 36.0 — zero competitors link to the lookup tool | Answer-first (40–60 words) + inline hyperlink to search.ccb.state.or.us |
| 4 | What Does DEQ Certified Mean for Septic Work? | Gap #5, DEQ-certification specificity gap, score 22.5 — competitors state the badge but never explain it | Definition format, answer-first, 60–80 words |
| 5 | What Areas of Lane County Does D&D Land Works Serve? | Competitor matrix: "Serving [cities]" text list is 8/8 table stakes, but 0/8 link to real city pages (Gap #7 / Flag C, confirmed) | Bulleted list of cities by tier, each linking to `/service-areas/` |
| 6 | How Much Does Excavation or Site Prep Cost in Lane County? | Gap #1, real pricing-range gap, score 25.0 — 0/8 competitors publish any price signal | Comparison table: Service / Typical Lane County Range / What Affects Price |
| 7 | What Should You Expect During an Excavation or Grading Project? | Gap #3, process-transparency gap, score 20.0 | Numbered list: call → site visit → estimate → scheduling → work → cleanup |
| 8 | When Is the Best Time of Year to Excavate in Oregon? | Gap #2, Oregon rainy-season scheduling gap, tied top score 40.0, AND Gap #8, soil-type gap, score 30.0 — zero competitors address either | Short answer-first + one dry-season-vs-wet-season contrast note |
| 9 | Frequently Asked Questions | Gap #6, FAQ-content gap, score 15.0 — 0/8 competitors run a real FAQ (see §8 below) | FAQPage-formatted Q&A, 9 questions |
| 10 | Get a Free Estimate From D&D Land Works | Competitor matrix: "Free estimate" CTA language is 8/8 table stakes | Short answer-first + CTA block |

Format minimums are satisfied: ≥1 comparison table (H2 #6), ≥1 numbered list (H2 #7), ≥2 bulleted lists (H2 #2, #5).

---

## 7. Unique Angle

Pulled directly from the top-5 gaps in `08-gap-analysis.md` — every entry below is a specific, evidence-based differentiator, not a slogan:

1. **Names the exact Willamette Valley clay-soil mechanism, not just "we handle any soil."** Zero of the 8 competitors mention soil type at all (`08-gap-analysis.md` gap #8, score 30.0). D&D's page states that wet clay "pumps and ruts" under equipment and won't compact reliably, which is why work is scheduled around the May–October dry window — a real engineering reason, not a scheduling preference.
2. **Links the CCB license number directly to the state's own verification tool.** 7/8 competitors display a license number; 0/8 link to `search.ccb.state.or.us` (`08-gap-analysis.md` gap #10, score 36.0). D&D lets the visitor self-verify in one click.
3. **Publishes real, sourced cost ranges instead of "call for a free estimate."** 0/8 competitors give even a range (`08-gap-analysis.md` gap #1, score 25.0). D&D states, for example, that Lane County-area septic installation averages $4,173–$5,963 (range $1,487–$10,464 across 350 completed Eugene-area projects), clearly labeled as general estimates, not quotes.
4. **Explains what DEQ Installer Certification actually requires**, rather than displaying "DEQ Certified" as an unexplained badge — the exact gap named in `08-gap-analysis.md` #5 (score 22.5), which no competitor closes even though 5/8 list septic as a service.
5. **States explicitly what D&D does NOT do** (tree removal, stump grinding, forestry mulching, asphalt paving, concrete work, retaining-wall engineering, septic pumping, septic inspection beyond DEQ install authority) — turning narrow, honest scope into a trust signal rather than papering over it with vague "we do everything" language that 2 competitors (Danco, All Dirt) use inconsistently (`08-gap-analysis.md` gap #16, score 30.0).

These five must surface in the opening paragraph (introduced early, at least the bundled-service + license-link points), in their dedicated H2 sections (#1, #3, #6, #4, and a scope-honesty line inside #2's service list intro), and echoed briefly in the closing CTA copy.

---

## 8. FAQ Section

9 questions, all sourced verbatim from `02-question-mine.md`'s FAQ shortlist (§ "FAQ Shortlist"), cross-checked against `04-competitor-matrix.md` Matrix B: **0 of the 8 competitors run a real FAQ section at all**, so every question below is uncontested ground — there is no risk of duplicating an existing competitor FAQ because none exists.

| # | Question | Source in question-mine | Answer guidance (40–90 words, direct answer first) |
|---|---|---|---|
| 1 | What does "DEQ Certified" mean, and why does it matter for septic work? | `02-question-mine.md` Q46 (oregon_specific) | Lead with: DEQ Installer Certification is required by Oregon to legally construct, install, or repair septic systems; explain briefly what the certification requires per `07-oregon-authority.md` §2. |
| 2 | How do I verify D&D Land Works' Oregon CCB license? | Q52 (oregon_specific) | Lead with the direct answer: search CCB #261742 at search.ccb.state.or.us, link it. |
| 3 | Can one contractor really handle site prep, grading, drainage, and septic? | Q8 / Q31 (pre_call, decision) | Lead with "yes" and name the specific service breadth D&D covers under one license. |
| 4 | How much does excavation or site prep typically cost in Lane County? | Q9/Q11 (cost) | Lead with the range(s) sourced in `07-oregon-authority.md`/`02-question-mine.md`, labeled as general estimates. |
| 5 | What is the best time of year to excavate in Oregon's rainy climate? | Q18/Q50 (oregon_specific) | Lead with May–October as the standard dry window; briefly note wet-season is workable but slower/costlier. |
| 6 | Do I need a permit to grade my land or clear brush in Lane County? | Q47/Q49 (oregon_specific) | Lead with the general rule from `07-oregon-authority.md` §3, then recommend confirming specifics with Lane County LMD. |
| 7 | How long does site preparation take before construction can start? | Q21 (process) | Lead with 1–2 months typical for residential, cite the source class (multiple national excavation-timeline guides + `00-research-pack.md`). |
| 8 | What should I ask before hiring any excavation contractor? | Q8 (quora-sourced) / general objection framing | Lead with 2–3 concrete questions (license status, written estimate, timeline) — positions D&D favorably by inviting scrutiny rather than deflecting it. |
| 9 | Does D&D Land Works serve my city in Lane County? | Q — local/service-area framing from question-mine's pre_call section | Lead with "yes" for Tier 1/2 cities, link to `/service-areas/`. |

No FAQ answer should fabricate a statistic not already present in the research pack (e.g., do not invent a review count, response-time figure, or years-in-business claim inside an FAQ answer).

---

## 9. Internal Links

**IN (what will link to the homepage)** — per `01-research/topical-map-2026-09-03.md` §15 ("every spoke links to its hub"):

| From | Anchor text example | Placement |
|---|---|---|
| Every P0/P1 core service page (`/site-preparation/`, `/excavation/`, `/grading-leveling/`, `/land-clearing/`, `/septic/`, `/foundation-excavation/`, `/drainage-excavation/`, `/utility-excavation/`, `/driveway-repair/`) | Breadcrumb "Home" + a contextual "see all of D&D Land Works' excavation and site-prep services" | Breadcrumb (top) + body-late |
| `/commercial-excavation/` | Breadcrumb + "back to D&D Land Works' full service list" | Breadcrumb + body-late |
| `/service-areas/` hub and each city page | Breadcrumb + "D&D Land Works, serving all of Lane County" | Breadcrumb |
| `/about/` | Breadcrumb | Breadcrumb |
| `/contact/` | Breadcrumb | Breadcrumb |
| Global site header/footer | "D&D Land Works" logo/brand anchor | Every page, header + footer |

**OUT (homepage → other pages)**, matching the topical map's planned URL structure and its explicit rule ("Homepage → the P0 core service pages + service-areas hub + contact"):

| To | Anchor text | Placement |
|---|---|---|
| `/site-preparation/` | "site preparation" | H2 #2 services list |
| `/excavation/` | "excavation and grading" | H2 #2 services list |
| `/grading-leveling/` | "grading and leveling" | H2 #2 services list |
| `/land-clearing/` | "land clearing and brush clearing" | H2 #2 services list |
| `/foundation-excavation/` | "foundation excavation" | H2 #2 services list |
| `/drainage-excavation/` | "drainage excavation" | H2 #2 services list |
| `/utility-excavation/` | "utility excavation and trenching" | H2 #2 services list |
| `/septic/` | "septic installation and repair" | H2 #2 services list + H2 #4 (DEQ) |
| `/driveway-repair/` | "gravel driveway repair" | H2 #2 services list |
| `/commercial-excavation/` | "commercial excavation and site development" | H2 #1 (residential/commercial audience) |
| `/service-areas/` (hub) | "see every Lane County city D&D Land Works serves" | H2 #5 |
| `/service-areas/eugene/`, `/service-areas/springfield/` | "Eugene" / "Springfield" (Tier 1 city names as anchors) | H2 #5 city list |
| `/about/` | "David Deggelman" (owner name as anchor) | H2 #1 or #3 (trust section) |
| `/contact/` | "get a free estimate" / "call 541-401-8726" | H2 #10 CTA + hero + sticky CTA |

No "click here" / "learn more" anchors — every anchor is descriptive, per the parent methodology's internal-linking rule.

---

## 10. Schema Requirements

Per `00-research-pack.md` §9 (schema.org verified directly this session, per CLAUDE.md's explicit instruction to check rather than assume — the prior HVAC client wrongly assumed `HVACContractor` existed):

- **Primary `@type`: `GeneralContractor`** — confirmed real, documented schema.org type (full hierarchy: `Thing → Organization/Place → LocalBusiness → HomeAndConstructionBusiness → GeneralContractor`). There is no `ExcavationContractor` type; `GeneralContractor` is the closest, most specific fit among `HomeAndConstructionBusiness`'s named sub-types.
- **`additionalType`: `HomeAndConstructionBusiness`** — the direct parent type, included as a fallback for any validator/integration that doesn't recognize `GeneralContractor`.
- **Required fields:** `name` (D&D Land Works), `telephone` (541-401-8726), `email` (david@ddlandworks.com), `address` (hold as a placeholder — base city within Lane County is an unconfirmed open item, see §14), `areaServed` (plain city name strings: Eugene, Springfield, Cottage Grove, Junction City, Creswell, Veneta, Florence, Oakridge, Coburg, Lowell, plus "Lane County, Oregon" — **not** Wikidata `@id`-linked entities, since no entity-id-registry/Wikidata infrastructure exists yet for this client; this is a deliberate simplification versus the original HVAC methodology's registry-driven approach, to be revisited once/if that infrastructure is built), `identifier` (CCB #261742 — verify the live record at search.ccb.state.or.us before publishing), `founder` (David Deggelman, as a `Person` sub-entity), `hasOfferCatalog` (the 11 verified services from §11 below), `priceRange` (hold until a real range is agreed with David — do not fabricate a `$`–`$$$$` value).
- **`FAQPage`** — for the 9-question shortlist in §8; FAQ schema answers must match the visible FAQ text exactly.
- **`BreadcrumbList`** — once site navigation exists (homepage itself is the root breadcrumb node).
- **`Speakable`** — flag the answer-first passages in H2s #1, #3, #4, and #8 (per the Content Format Plan in `00-research-pack.md` §7) as speakable-eligible.
- **Do NOT implement `AggregateRating`/`Review` schema** — D&D has zero reviews at launch; fabricating this schema type would be a direct, discoverable violation of Google's structured-data guidelines and this project's no-fabricated-stats rule. Add only once real reviews exist.

---

## 11. Entity Profile

Pulled from `entity-inventory.csv`, with validation status carried through as-is. **This section is the canonical entity profile for D&D Land Works** — future service-page and city-page briefs should reference it rather than re-deriving entity salience from scratch.

**Primary entity (salience 10):**
- **D&D Land Works** (Organization → schema `GeneralContractor`) — `NOT_FOUND` externally (zero digital footprint; expected for a pre-launch business, not a data error). Must appear in H1, schema `name`, and the first sentence of body copy.

**Major supporting entities (core services, salience 7–10):**
- **Excavation & Grading** (salience 10) — `VALIDATED_LOCAL`, highest-volume head term, 8/8 competitors offer some form
- **Site Preparation** (salience 9) — `VALIDATED_LOCAL`, umbrella service, 8/8 competitors offer some form
- **Land Clearing** (salience 9, includes Brush Clearing sub-service) — `VALIDATED_LOCAL`, 7/8 competitors offer
- **Septic Install & Repair** (salience 9) — `VALIDATED_LOCAL`, DEQ-cert differentiator, 5/8 competitors offer
- **Oregon CCB #261742** (salience 9, identifier) — `VALIDATED_LOCAL` (numbering scheme/lookup tool confirmed real; live record must be verified before publishing)
- **Lane County, Oregon** (salience 10, geo_primary) — `VALIDATED`, Wikidata Q495409

**Supporting entities (salience 3–8):**
- **David Deggelman** (Person, owner, salience 7) — `NOT_FOUND` externally; do not fabricate bio details or years of experience
- **Oregon Department of Environmental Quality** (GovernmentOrganization, salience 9) — `VALIDATED`
- **DEQ Installer Certification** (Certification, salience 8) — `VALIDATED`; confirm exact cert name/number with David
- **Oregon Construction Contractors Board** (GovernmentOrganization, salience 8) — `VALIDATED`
- **Eugene, Oregon** (City, salience 10) — `VALIDATED`, Tier 1 anchor
- **Springfield, Oregon** (City, salience 8) — `VALIDATED`, Tier 1 anchor
- **Willamette Valley** (Place, salience 6) — `VALIDATED`, clay-soil context entity
- **OSHA 1926 Subpart P** (Legislation, salience 6) — `VALIDATED`

**Equipment entities:** reference only as generic categories (excavator, skid steer, dozer, dump truck, compactor) — all `VALIDATED` as real industry terms, but specific brands (Caterpillar, John Deere, Kubota, Komatsu) are `NOT_FOUND_FOR_DD` and must **not** be named as D&D's fleet without confirmation from David.

**Co-occurrence requirements** (entities appearing across most of the 8 competitor pages that must therefore appear here too, per `03-entity-map.md` §6 and `04-competitor-matrix.md`):
- "Licensed, bonded, insured" (or equivalent) — 8/8 — **mandatory**
- CCB license number displayed in body — 7/8 — **mandatory**
- "Free estimate(s)" — 8/8 — **mandatory**
- Phone number in header/hero — 8/8 — **mandatory**
- Septic listed as a service — 5/8 — **recommended, strengthened by DEQ cert**
- Years-in-business claim — 6/8 — **do not include** until David confirms a real figure (open item)
- "Family-owned/operated" — 4/8 — **do not include** unless David confirms it's true

---

## 12. CTA Requirements

| Placement | Copy | Type/link |
|---|---|---|
| Above the fold (hero) | "Get a Free Estimate" and "Call 541-401-8726" | `tel:5414018726` and anchor/scroll to contact form or `/contact/` |
| Mid-page (after H2 #2 services list) | "See if D&D Land Works serves your project — get a free estimate" | `/contact/` |
| After H2 #6 (cost section) | "Want a real number for your project? Request a free estimate" | `/contact/` |
| H2 #10 (closing CTA) | "Get a Free Estimate From D&D Land Works" + phone + email | `tel:5414018726`, `mailto:david@ddlandworks.com`, `/contact/` |

No fabricated urgency or scarcity language ("only 2 spots left," "limited-time," "book before it's too late") — none of that is supported by any fact in the research pack, and inventing it would violate this project's no-fabricated-claims rule. "Free estimate" is the only CTA framing the research supports (8/8 competitors use it, and it's a genuine D&D USP from business-info.md).

---

## 13. Images Required

**Current state: zero real project photos exist.** This is a genuine launch gap, not something to paper over with generic stock imagery presented as if it were D&D's own work (`08-gap-analysis.md` gap #14 flags this as a medium-term asset-creation task, not a copywriting fix). Recommended image slots, to be filled with real photography as soon as it exists:

| # | Description | Alt text guidance | Type | Status |
|---|---|---|---|---|
| 1 | Hero image — excavator/equipment actively working a Lane County site | "Excavation contractor working a job site in Lane County, Oregon" | Hero | **Gap — no real photo yet; do not use unbranded generic stock presented as D&D's own work** |
| 2 | David Deggelman on-site or with equipment | "David Deggelman, owner of D&D Land Works, Lane County excavation contractor" | Trust/about | **Gap — needs a real photo from David** |
| 3 | Service-grid icons (one per service in H2 #2) | "[Service name] icon — D&D Land Works" | Service grid | Can launch with simple icon/illustration treatment, not photography — lower priority to fix |
| 4 | Before/after land-clearing or grading photo | "Before and after land clearing, Lane County, Oregon" | Evidence | **Gap — flagged in `08-gap-analysis.md` gap #14 as a genuine current absence, not a template placeholder problem** |
| 5 | Septic/drainage work-in-progress photo | "Septic system installation, DEQ-certified work in Lane County" | Evidence | **Gap — same as above** |

Flag to David: launching with generic/stock imagery is an acceptable *temporary* measure but should be labeled internally as a launch gap to close with real jobsite photography within the first few months, not treated as a permanent solution — this matches the pack's E-E-A-T "Experience" signal plan (`00-research-pack.md` §13).

---

## 14. Authority Signals to Cite

Pulled from `07-oregon-authority.md`, with exact proposed wording and source URLs:

1. **Oregon CCB license verification** — "D&D Land Works is licensed and bonded under Oregon Construction Contractors Board license #CCB 261742. Verify this license directly at [search.ccb.state.or.us](https://search.ccb.state.or.us/search/)." *(Source: Oregon CCB — About the CCB, oregon.gov/ccb/pages/about-the-ccb.aspx; verified 2026-09-08)*
2. **Oregon DEQ Onsite Wastewater / Installer Certification** — "Septic system installation and repair in Oregon requires DEQ Installer Certification under OAR Chapter 340, Division 071." *(Source: Oregon DEQ — Rules and Regulations for Onsite Wastewater Treatment Systems, oregon.gov/deq/residential/pages/onsite-rules.aspx; Oregon DEQ — Installer and Maintenance Provider Certification, oregon.gov/deq/residential/pages/onsite-certification.aspx; verified 2026-09-08)*
3. **Lane County permit guidance** — "Grading, driveway access, and right-of-way excavation work in Lane County generally requires a permit through Lane County's Land Management Division; confirm exact requirements for your project with Lane County directly." *(Source: Lane County Code Chapter 16; Willamette Craftworks — Lane County Building Permits: 2026 Homeowner's Guide, willamettecraftworks.com/permitting/lane-county-or/; Eugene, OR — Site Development FAQ, eugene-or.gov/faq.aspx?TID=28; verified 2026-09-08)*
4. **OSHA trench safety** — "Trenching and utility excavation work follows OSHA 29 CFR 1926 Subpart P, which requires a protective system for trenches 5 feet deep or more." *(Source: OSHA — 1926 Subpart P, osha.gov/laws-regs/regulations/standardnumber/1926/1926SubpartP; verified 2026-09-08)*
5. **NOAA Eugene climate + Willamette Valley soil** — "Eugene receives an average of 40.83 inches of rain per year, with December, January, and November the wettest months — which is why D&D Land Works recommends scheduling excavation and grading work for the May–October dry window in Willamette Valley's clay-heavy soil." *(Source: NOAA/National Weather Service — Eugene Climate Data, weather.gov/media/pqr/climate/ClimateBookEugene/pg61.pdf; OSU Extension Service — Clay Soil Challenges and Solutions for Oregon Gardeners, extension.oregonstate.edu/news/clay-soil-challenges-solutions-oregon-gardeners; verified 2026-09-08)*

Density target: roughly 1 statistic per 300–500 words of body copy, at least one external authority link per major H2 section, per the parent methodology's stats-density rule.

---

## Open Items Requiring David's Input Before Content-Create

These are explicitly flagged in `business-info.md` and `08-gap-analysis.md` as unconfirmed — **do not invent values for any of these; write the brief's affected sections with honest, general language until confirmed:**

1. **Exact business base city/address within Lane County** (affects schema `address` and hero copy specificity)
2. **Year founded / years in business** (6/8 competitors claim this; D&D cannot until confirmed)
3. **Specific equipment/fleet brands** (currently must reference generic categories only)
4. **Insurance/bonding dollar amounts** (currently just the word "bonded," unsubstantiated like every competitor)
5. **Typical response/scheduling turnaround for estimate requests**
6. **Exact DEQ certification name/number** ("DEQ Certified" is directionally correct but the precise credential title should be verified)
7. **Business hours**
8. **Whether "family-owned/operated" framing is true** (before using it, since 4/8 competitors use similar language)

**The single most important item before this brief can move to `content-create`:** confirming the **exact DEQ certification name/number and the live CCB #261742 record** (the ccblookup.com third-party mirror returned a 404 for this number during research — the official portal must be checked directly). These two facts anchor the page's two strongest E-E-A-T/differentiation claims (H2 #3 and H2 #4) and the `identifier`/`hasCredential` schema fields — publishing an unverified license or certification claim is the highest-risk error this brief could otherwise introduce.
