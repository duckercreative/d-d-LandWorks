# Content Brief — D&D Land Works Excavation Contractor Eugene Oregon (`/excavation-contractor-eugene-oregon`)

**Prepared:** 2026-09-24 · **Prepared by:** Ducker Creative
**Built from:** `01-research/page-research/excavation-contractor-eugene-oregon/` (adapted research pack, 2026-09-24, built on top of the full base excavation pack at `01-research/page-research/excavation/` dated 2026-09-08), `business-info.md`, `docs/design-system.md`.
**Methodology note:** Same pipeline as all prior D&D Land Works briefs (`home-brief.md`, `site-preparation-brief.md`, `excavation-brief.md`). This is a **location-service landing page brief** — distinct from `excavation-brief.md`, which targets `/services/excavation/` as the main service hub. Both pages can rank without cannibalizing each other because they serve different searcher contexts (local-decision vs. service-exploration) — see §1 and §12 for the cannibalization mitigation details.
**Pipeline position:** Location page — sits below the main excavation service hub, targeting Eugene-scoped decision-stage queries. **The Astro page already exists** at `site/src/pages/excavation-contractor-eugene-oregon.astro` — this brief guides a content rewrite of the copy inside that page's data arrays and template sections, not a structural rebuild.
**Anti-doorway gate:** This brief is written to satisfy the location-page anti-doorway requirement. Sections §4, §6 H2 #4, §8, and §13 specifically contain Eugene-unique content that cannot appear unchanged on a cloned template.

---

## 1. Page Metadata

| Field | Value |
|---|---|
| **Canonical URL** | `/excavation-contractor-eugene-oregon` |
| **File** | `site/src/pages/excavation-contractor-eugene-oregon.astro` |
| **Slug** | `excavation-contractor-eugene-oregon` |
| **Page type** | Location-service landing page — high-priority local SEO conversion target, sitting below the `/services/excavation/` hub in the topical hierarchy |
| **Primary keyword** | `excavation contractor Eugene OR` / `excavation contractor Eugene Oregon` |
| **Co-primary keyword** | `excavation company Eugene Oregon` |
| **Secondary keywords** | `excavating contractor Lane County`, `residential excavation Eugene OR`, `small excavation contractor Eugene`, `excavation services near me`, `local excavation Eugene` |
| **Semantic terms** (must appear at least once) | excavation contractor Eugene, Lane County excavation, foundation excavation, utility trenching, septic excavation, drainage excavation, backfill and compaction, rock removal, Oregon811, Oregon Utility Notification Center, call before you dig, Lane County Grading and Fill Permit, residential excavation, CCB #261742, DEQ Certified, free estimate, Malpass clay, wet season, small job, licensed and bonded |
| **Search intent** | Commercial / transactional — decision-stage local searcher evaluating a specific contractor for an excavation job in Eugene/Lane County |
| **Current GSC position** | Not yet indexed (greenfield site) |
| **Cannibalization risk** | Low — differentiated by H1 framing ("Excavation Contractor in Eugene, Oregon" vs. the hub's "Excavation & Earthmoving Contractor in Lane County, Oregon"), by the Eugene-unique content in §4 and H2 #4, and by the location-page conversion focus vs. the hub's service-exploration purpose. Both pages should internally link to each other. |

---

## 2. Intent & Audience

- **Primary ICP:** A Eugene/Lane County homeowner, rural landowner, or small builder who has already decided they need an excavation contractor — they are not still researching whether to hire one, they are actively evaluating which local contractor to call. They typed "excavation contractor Eugene OR" and this page is their first impression of D&D Land Works.
- **Secondary ICP:** A homebuilder or GC doing a quick local vendor check before awarding a subcontract for a foundation dig, utility trench, or septic excavation in the Eugene area.
- **State of mind (3 core clusters, per `05-intent-triangulation.md`):**
  1. **Utility-strike liability fear** — "If they hit a gas line or fiber cable, who's responsible? Does a real local contractor handle locates, or is that on me?" This is the highest-anxiety concern specific to hiring an excavation contractor (distinct from hiring a site-prep or land-clearing contractor).
  2. **Cost uncertainty** — "How much does excavation actually cost in Eugene? What happens if they hit rock?" A local searcher specifically expects local pricing context, not national averages.
  3. **Small-job anxiety** — "Will a full-service excavation company take my small residential driveway or pond seriously, or will they prioritize commercial work?" Eugene-specific concern — a homeowner evaluating a local contractor wants to feel like a primary customer, not an afterthought.
- **What they need to believe before calling:**
  1. D&D is a real, local Lane County excavation contractor — not a lead-gen aggregator or out-of-area company claiming the Eugene keyword.
  2. D&D handles utility locates correctly — Oregon811 is called before every dig, as Oregon law requires.
  3. Their specific project type (foundation, pond, driveway, utility, septic) is something D&D has done and can quote.
  4. Cost honesty: rock hits are disclosed as a real budget variable upfront, not sprung on them mid-job.
  5. Small residential jobs get the same attention as commercial work.

---

## 3. Voice & Angle

- **Writing voice:** Identical to all prior D&D Land Works pages — plain-spoken Lane County contractor, direct, no fluff, short declarative sentences for the trust-critical sections (Oregon811, cost honesty, small-job reassurance). The reader is a homeowner or builder who has a specific job in mind; write as if D&D is talking to them on a job-site visit, not in a brochure.
- **Tone guard rails:** No superlatives ("best," "top-rated," "industry-leading," "comprehensive," "unparalleled"). No vague "we care" language. No fabricated client testimonials or fabricated project descriptions. When something is a general range and not a Lane County-specific figure, say so explicitly.
- **Required Eugene/Oregon-specific detail (minimum 5 — anti-doorway requirement):**
  1. **Oregon811 / Oregon Utility Notification Center** — free locate requests, 2-business-day advance notice required, per digsafelyoregon.com and oregon.gov/puc. State this as D&D's actual practice on every job. *(Confirm exact wording with David before publishing as a stated practice — see §14 Open Items.)*
  2. **Malpass silty clay loam** — the dominant soil series on Lane County's valley floor (USDA Web Soil Survey); holds water through Oregon's wet season (October–April), which affects excavation timing, compaction performance, and in some cases the feasibility of working without dewatering. This is Eugene-specific local expertise content.
  3. **Lane County Grading and Fill Permit (Lane County LMD)** — triggers at roughly 50 cubic yards moved or a cut/fill slope steeper than 2:1; issued by Lane County Land Management Division. Cross-link to the site-preparation page's fuller permit table rather than reproducing it in full. *(Third-party-sourced — hedge accordingly; flag for direct LMD confirmation before publishing as exact figures.)*
  4. **Oregon construction labor premium** — Oregon construction labor runs ~20% above the national average (BLS OEWS 2025 via CostFlowAI); use this to explain why Eugene/Lane County pricing lands toward the higher end of national cost ranges, not to state a fabricated local dollar figure.
  5. **Wet season timing** — Lane County's October–April rainy period is the constraint local homeowners actually worry about; name it explicitly in the soil/season section rather than generic "seasonal factors" language.
- **Insider detail (use at least 2 — expertise signal):**
  - Rock ripping vs. blasting distinction: ripping typically costs 50-65% less and works on soft-to-moderately fractured rock; blasting is needed above roughly 1,000 cubic yards or harder rock. Zero competitors in the market mention this distinction.
  - Excavation and grading often happen as one continuous operation on a real job (excavation opens the space, grading finalizes the surface) — not two rigidly sequential phases. Naming this nuance signals real field experience.

---

## 4. E-E-A-T Requirements

- **Experience (minimum 2 signals):**
  - David Deggelman / D&D Land Works named with CCB #261742 and DEQ Certified credentials in the first paragraph
  - Specific, named project types with Lane County context (foundation digs for Eugene-area builds, septic excavation under Oregon DEQ certification, drainage work in Lane County's clay-soil areas)
- **Expertise (minimum 3 signals):**
  - Oregon811 explained with its correct legal name (Oregon Utility Notification Center, public-facing as "Oregon 811"), not just a generic "call 811" reference
  - Malpass clay soil and wet-season timing named as concrete local expertise — not generic "experience with Oregon soils" language
  - Rock/cost-overrun disclosure with real numbers ($2.50–$15/cu yd standard vs. $50–$200/cu yd for rock) rather than vague "costs may vary" hedging
- **Authority (minimum 3 signals):**
  - CCB #261742 in visible body copy
  - Direct outbound link to digsafelyoregon.com (Oregon811 section)
  - Reference to Lane County LMD for permit context
- **Trust (minimum 4 signals):**
  - Oregon811 practice stated as D&D's concrete operating procedure, not a vague "we're careful"
  - Honest cost table with rock premium explicitly labeled
  - Explicit small-job reassurance: residential digs scoped and quoted with the same process as commercial work
  - No fabricated review counts, no vague years-in-business claims the research pack can't verify, no invented case studies

---

## 5. AI Citation Target

Drafted in `01-research/page-research/excavation-contractor-eugene-oregon/00-research-pack.md` §11. Place in the first 30% of body content, immediately after the hero section:

> Excavation and earthmoving work in Eugene, Oregon typically involves cutting for foundations, building pads, driveways, and utility trenches; backfilling and compacting material after utility lines or footings are set; and removing rock or excess soil from a site. D&D Land Works provides excavation services for residential and commercial projects throughout Eugene, Springfield, and Lane County, including foundation digs, pond excavation, driveway and access-road cutting, utility-run trenching, and septic system excavation. D&D is licensed and bonded under Oregon Construction Contractors Board license CCB #261742 and calls Oregon 811 at least two business days before digging on every project, as required by Oregon law. Lane County's Malpass clay soils affect excavation timing — wet-season work (October through April) requires careful scheduling and soil management to achieve proper compaction. Free estimates are available for both residential and commercial excavation work in the Eugene area.

*(~150 words — suitable for AI citation block placement and Speakable schema markup)*

---

## 6. Content Structure

**Word count target: 1,800–2,400 words.** Justification: The 10 competitors examined for "excavation contractor Eugene or" in `04-competitor-matrix.md` are consistently shallow — 0/10 have a FAQ, 0/10 publish pricing, 0/10 mention Oregon811, 4/10 have a dedicated excavation page at all. The 7th-ranking competitor with a dedicated excavation page (Strasheim Contracting) has approximately 300-500 words with no FAQ, no pricing, and no permit content. +15% of 500 = 575 words minimum, but the 10-section content structure below with real FAQ answers lands at 1,800-2,400 words — the correct depth for a page competing to rank on its own merits against both local competitors and directory aggregators, per the pipeline methodology.

---

**H1:** Excavation Contractor in Eugene, Oregon
*(The location + service keyword pair in exact natural-language form. Do not modify. "in Eugene, Oregon" is the location signal; "Excavation Contractor" is the service. Keep it exactly as shown — no variation like "Excavation Services" or "Excavation & Grading.")*

**Opening paragraph (under H1, before any other section):** ~100-120 words. State: D&D Land Works is a licensed excavation contractor in Eugene, Oregon (CCB #261742). Serving Eugene, Springfield, and Lane County. Services: foundation excavation, utility trenching, site prep, drainage, and septic excavation (DEQ Certified). Free estimates. Call 541-401-8726. Do not use adjectives like "premier," "trusted," or "reliable" — plain factual statement only.

**AI Citation Block:** Insert the ~150 word block from §5 here, immediately after the opening paragraph.

---

### H2 #1: What Excavation Work Covers
*(Maps to: scope overview, All Dirt-validated process list; Matrix A finding: only All Dirt names the full list — 1/10)*

**Format:** Bulleted list of 6-8 process items, 1 sentence each.

Items to include (All Dirt-validated list from `01-research/page-research/excavation/04-competitor-matrix.md`):
- Foundation excavation — digging to the required depth and dimension for a slab, crawl space, or basement
- Utility trenching — cutting for water lines, sewer lines, electrical conduit, or drain field runs
- Site preparation excavation — bulk earthmoving to bring a site to the grade a project needs
- Backfill and compaction — returning and compacting material in lifts after footings, pipes, or conduit are set
- Rock removal — breaking out and hauling off material the excavator can't move with bucket force alone
- Drainage excavation — cutting swales, French drains, retention basins, and outlet channels
- Pond and pad excavation — lake, farm, and decorative ponds; building pads for sheds, barns, and accessory structures
- Access road and driveway cutting — grading and cutting access into undeveloped parcels or repairing failed subgrade

**Avoid:** Do not present this as "our services" in marketing language. The format is a factual scope-of-work list — what excavation work physically involves, not a brochure.

---

### H2 #2: What's the Difference Between Excavation and Grading?
*(Maps to: disambiguation — tied for Gap #1 score 50.0; 0/10 competitors explain this distinction)*

**Format:** Answer-first, 60-80 words. Speakable eligible.

**The distinction to draw (required):**
- Excavation = moving material from one place to another or removing it from the site — the vertical work, the cut, the dig
- Grading = bringing a surface to a precise elevation or slope — the horizontal work, the final geometry
- On most jobs both happen together: excavation opens the hole or moves the mass, grading finishes the surface
- D&D's site-prep and grading services handle standalone re-sloping or leveling for drainage — cross-link to the site-preparation page

**Do not:** Explain site preparation vs. excavation here — that disambiguation lives on the site-preparation page. This section's only job is excavation vs. grading.

---

### H2 #3: Types of Excavation Projects in Eugene
*(Maps to: project type specificity — Gap #9; pond is named by only 2/10 competitors; septic excavation is named by 0/10)*

**Format:** Short card-format or bulleted list, 6 types, 1-2 sentences each with a Eugene/Lane County-specific concrete detail.

Project types (in order of frequency/importance for this page's audience):
1. **Foundation excavation** — digging for slabs, crawl spaces, and full basements; depth depends on frost depth and structural plans (Eugene frost depth ~12 inches)
2. **Trenching for utility lines** — water service, sewer laterals, electrical conduit, drain field runs; Oregon requires Oregon811 locates before any trench dig
3. **Septic system excavation** — excavating for tank placements, drain fields, and repair access; D&D is DEQ Certified for septic work in Oregon
4. **Drainage excavation** — French drains, swales, retention basins; Lane County's clay soils make drainage excavation one of the most common residential requests
5. **Pond and access-road excavation** — farm ponds, decorative ponds, driveway subgrade cuts into undeveloped lots
6. **Building pad excavation** — level pads for shops, barns, ADUs, carports; common in rural Lane County

---

### H2 #4: Eugene's Soil and Seasons — What It Means for Your Project
*(Maps to: Eugene-specific soil/season context — Gap #3 score 40.0; 0/10 competitors include this; primary anti-doorway differentiator)*

**Format:** 2 short paragraphs, 120-160 words total. This is the location-page-unique section — do NOT condense it to one sentence or generic language.

**Paragraph 1 — Soil:** Lane County's valley floor is dominated by Malpass silty clay loam (USDA Web Soil Survey). This clay-heavy soil holds moisture well into spring and becomes dense when dry in summer. It affects excavation in two practical ways: in wet conditions, heavy equipment leaves ruts and compaction becomes difficult; in dry summer conditions, clay can be harder than expected for a small machine. Knowing the soil before scheduling is part of scoping a job honestly.

**Paragraph 2 — Wet season:** Oregon's wet season runs October through April in Lane County. Most residential excavation projects — foundation digs, pond construction, access roads — are better scoped and started before October or after April unless the site has adequate drainage. D&D can advise on seasonal timing as part of a free estimate visit.

---

### H2 #5: How Much Does Excavation Cost in Eugene, Oregon?
*(Maps to: cost-structure gap + rock cost-overrun honesty — Gaps #4 and #5, tied at score 40.0; 0/10 competitors publish any cost data)*

**Format:** Two-part — a cost comparison table (pricing model × typical range × what drives it), followed by a short rock-overrun paragraph.

**Table data (from `01-research/page-research/excavation/02-question-mine.md` §cost):**

| Pricing Model | Typical National Range | What Drives It |
|---|---|---|
| Hourly (small/uncertain scope) | $70–$150/hr with operator | Machine size, travel time, soil difficulty |
| Per cubic yard (larger earthmoving) | $2.50–$15/cu yd standard soil | Depth, haul distance, clay vs. sandy |
| Rock removal premium | $50–$200/cu yd | Rock hardness, volume, ripping vs. hammering |
| Utility trenching | $5–$40/linear ft | Depth, soil type, pipe diameter, access |

**Required label (mandatory):** These are general national ranges adjusted for Oregon's ~20% labor premium. Lane County-specific pricing depends on site conditions, access, depth, and scope — D&D provides free on-site estimates, not phone quotes.

**Rock-overrun paragraph (~80 words):** When an excavator hits rock, the cost per cubic yard can jump 10-40x — from standard earthmoving rates to rock-removal rates. On some Lane County jobs, especially in the foothills and upland transition zones east of Eugene, this is a real possibility, not a remote one. D&D discloses this risk in the scoping conversation so a homeowner can plan for it rather than discovering it mid-job. Ripping (50-65% cheaper than blasting) handles most residential rock encounters; larger volumes may need a different approach.

---

### H2 #6: Do We Call Before Digging? Yes — Oregon811 on Every Job
*(Maps to: Oregon811 competence signal — Gap #1 score 50.0; 0/10 competitors mention this anywhere)*

**Format:** Answer-first, 60-80 words. Include direct link to digsafelyoregon.com. Speakable eligible.

**Content required:**
- Oregon law requires calling Oregon 811 (the Oregon Utility Notification Center) at least 2 business days before any excavation
- The call is free; utility locates are placed by the utility companies, not the excavator
- D&D calls Oregon 811 before every dig — it is part of D&D's standard process, not an optional extra
- The locate request is what protects a homeowner (and D&D) from a utility-strike situation

**Do not:** State a specific penalty dollar amount for skipping Oregon811 — the exact figure is not published and must not be invented. The legal obligation and D&D's practice are the message, not the penalty.

---

### H2 #7: Do You Need a Permit to Excavate in Lane County?
*(Maps to: Lane County permit context — Gap #8 score 24.0; brief, cross-linked to site-prep page)*

**Format:** Short answer-first, ~80-100 words, then a cross-link to the site-preparation page's fuller permit section.

**Content required:**
- Lane County's Grading and Fill Permit is triggered by moving roughly 50 cubic yards or more, or a cut/fill slope steeper than 2:1
- The permit is issued by Lane County Land Management Division (LMD)
- Foundation excavation under an active building permit is generally exempt from a separate grading permit
- For project-specific permit questions, cross-link: "See our full guide to Lane County excavation and site prep permits on our [Site Preparation page](/site-preparation-contractor-eugene-oregon)"

**Hedge required:** The 50 cu yd / 2:1 slope threshold is sourced from a third-party permitting guide, not directly from Lane Code Chapter 16 or the LMD's permit schedule — recommend confirming with LMD directly for the specific parcel and project scope before publishing these figures without the hedge.

---

### H2 #8: Small Residential Jobs Welcome
*(Maps to: small-job/residential-attention reassurance — Gap #6 score 27.0; only 1/10 competitors make any small-job assurance)*

**Format:** Short narrative, 70-90 words. Do not write this as a bulleted "reasons to choose us" list — that framing sounds defensive. Write it as a plain statement of how D&D actually works.

**Content required:**
- Whether the job is a single building pad, a short utility trench, or a small pond, the estimate and scoping process is the same as for a commercial-scale project
- D&D works with homeowners, rural landowners, and small builders — not only with GCs and developers
- Free on-site estimate regardless of job size

---

### H2 #9: Frequently Asked Questions
*(FAQPage schema — 8 questions validated against `02-question-mine.md` shortlist)*

**Format:** Standard FAQPage-formatted Q&A accordion, one question per block, 40-100 words per answer.

**The 8 questions (in this order — do not reorder):**

**Q1: What's the difference between excavation and grading?**
A: Excavation moves or removes material — the dig, the cut, the hole. Grading shapes a surface to a precise elevation or slope. On most jobs they happen together: excavation opens the cut, grading finalizes the surface to the design grade. D&D handles both; standalone grading and leveling for existing surfaces is covered on our [site preparation page].

**Q2: How much does excavation cost in Eugene, Oregon?**
A: General ranges run $2.50–$15 per cubic yard for standard soil, and $70–$150/hour for operator time — with Oregon's labor costs running roughly 20% above the national average. Rock removal can cost $50–$200/cu yd when rock is encountered. These are general ranges; actual cost depends on site access, depth, soil type, and haul distance. D&D provides free on-site estimates — phone quotes aren't accurate for earthmoving.

**Q3: What happens if the crew hits rock during excavation?**
A: Rock removal costs significantly more than standard soil excavation — often 10-40x more per cubic yard. Where it's possible, ripping (using the excavator's hydraulic thumb to break rock mechanically) costs roughly 50-65% less than hydraulic hammering. D&D identifies rock risk during the estimate walk and discloses it before work begins so there are no mid-job surprises.

**Q4: Do you handle small residential excavation jobs in Eugene?**
A: Yes. A small foundation dig, a short utility trench, or a single building pad is scoped and estimated the same way as a larger commercial project. Call 541-401-8726 for a free on-site estimate — job size doesn't affect whether we'll show up to take a look.

**Q5: Do I need to call 811 before digging in Oregon?**
A: Yes, Oregon law requires calling Oregon 811 (the Oregon Utility Notification Center) at least 2 business days before any excavation. The call is free — utility companies send locators to mark underground lines at no cost to you. D&D calls Oregon 811 on every job as part of its standard process. More at [digsafelyoregon.com].

**Q6: Do I need a permit to excavate in Lane County?**
A: Lane County's Grading and Fill Permit is generally triggered by moving 50 or more cubic yards, or a cut/fill slope steeper than 2:1. Foundation excavation under an active building permit is typically exempt from a separate grading permit. Permit requirements vary by parcel and project scope — confirm with Lane County's Land Management Division (LMD) for your specific project. D&D can help identify what's likely required during the estimate.

**Q7: What types of excavation projects do you handle in Eugene?**
A: Foundation excavation, utility trenching (water, sewer, electrical, drain field), septic system excavation (DEQ Certified), drainage excavation (French drains, swales, retention basins), pond excavation, building pad excavation for shops and barns, and driveway/access-road subgrade work. Call 541-401-8726 or use the form below to describe your project.

**Q8: How long does excavation take?**
A: A straightforward residential foundation dig or utility trench often wraps in 1-3 days once the site is prepped and permits are in place. Pond excavation, large pad work, and commercial-scale grading typically run a week or more. Rock, soil issues, wet-season conditions, and permit lead times affect every timeline — D&D provides a realistic timeline with the estimate, not a best-case-scenario number.

---

### H2 #10: Get Your Eugene Excavation Scoped — Free Estimate
*(CTA block — conversion section)*

**Format:** 2 sentences + CTA button/phone. Do not over-write this section.

Content: D&D Land Works provides free on-site estimates for excavation, foundation digging, utility trenching, drainage, and septic work throughout Eugene, Springfield, and Lane County. Call 541-401-8726 or submit the form below and David will follow up to schedule a site visit.

---

## 7. Unique Angle (top 5 gaps — none of these appear on any of the 10 competitors)

1. **Oregon811 named with its correct legal name and stated as D&D's practice** — not just "call 811 before you dig" but "Oregon Utility Notification Center, 2 business days, free, on every job." Zero-competitor gap, high conversion signal (addresses utility-strike liability fear directly).
2. **Malpass clay soil named explicitly** — the specific soil series that defines Lane County's valley floor and affects excavation timing, compaction, and wet-season scheduling. Zero competitors mention any soil condition. This is the anti-doorway differentiator, not a generic "we know local soils" claim.
3. **Rock-overrun honesty with real numbers** — $2.50–$15/cu yd standard vs. $50–$200/cu yd rock, ripping vs. hammering distinction. Zero competitors mention rock pricing. Frames D&D as trustworthy by disclosing the uncomfortable number proactively.
4. **Cost table with Oregon labor premium labeled** — any cost content is a differentiator (0/10 competitors publish any). Labeling national ranges + Oregon 20% premium as the honest explanation for why local quotes are higher is a trust-builder, not a deterrent.
5. **Small-job explicit welcome** — 0/10 competitors make a specific small-residential-job statement. Named as the page's primary trust-killer in the intent triangulation, especially for a homeowner in Eugene evaluating a contractor who also claims commercial capabilities.

---

## 8. Internal Links

**Links INTO this page (from other pages — required):**
- From `/services/excavation/` or the main excavation hub page: "Excavation work in Eugene, Oregon" → `/excavation-contractor-eugene-oregon`
- From the homepage service area or services section: "Eugene excavation" or "local excavation contractor" → this page
- From `/site-preparation-contractor-eugene-oregon/` (already exists): a cross-link from that page's permit section → this page

**Links OUT from this page (required):**
| Destination | Anchor text | Placement |
|---|---|---|
| `/site-preparation-contractor-eugene-oregon/` | "site preparation" or "full permit guide" | H2 #7 (permits section) |
| `/services/excavation/` (or excavation hub) | "excavation services" | H2 #1 (scope overview) |
| `https://digsafelyoregon.com` | "digsafelyoregon.com" | H2 #6 (Oregon811 section) |
| `/contact/` or the estimate form | "free estimate" | H2 #10 (CTA) |
| `/drainage-excavation-*` (if exists) | "drainage excavation" | H2 #3 (project types) |
| `/septic-*` (if exists) | "septic excavation" | H2 #3 (project types) |

---

## 9. Schema Requirements

**Block 1 — `Service`**
```json
{
  "@type": "Service",
  "name": "Excavation Contractor Services in Eugene, Oregon",
  "serviceType": "Excavation",
  "provider": {
    "@id": "https://www.ddlandworks.com/#business"
  },
  "areaServed": [
    {
      "@type": "City",
      "name": "Eugene",
      "sameAs": "https://www.wikidata.org/wiki/Q1397"
    },
    {
      "@type": "City",
      "name": "Springfield",
      "sameAs": "https://www.wikidata.org/wiki/Q976730"
    },
    {
      "@type": "AdministrativeArea",
      "name": "Lane County",
      "sameAs": "https://www.wikidata.org/wiki/Q506343"
    }
  ],
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Excavation Services",
    "itemListElement": [
      {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Foundation Excavation"}},
      {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Utility Trenching"}},
      {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Septic System Excavation"}},
      {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Drainage Excavation"}},
      {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Pond Excavation"}},
      {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Building Pad Excavation"}}
    ]
  }
}
```

**Block 2 — `FAQPage`** — 8 questions from H2 #9 above (schema standard — Question + acceptedAnswer)

**Block 3 — `BreadcrumbList`** — Home → Excavation Services → Excavation Contractor Eugene Oregon

**Block 4 — `Speakable`** — on the H2 #2 (excavation vs. grading answer) and H2 #6 (Oregon811 answer) sections

**Schema type note:** `GeneralContractor` is confirmed as the correct `@type` for the business entity (D&D Land Works). `ExcavationContractor` does NOT exist on schema.org. The `Service` type nests under the business entity's `GeneralContractor` block. No `AggregateRating` until real reviews are collected.

---

## 10. Entity Profile

**Primary entity (salience 1.0):**
- D&D Land Works (`GeneralContractor`, `@id: https://www.ddlandworks.com/#business`) — operator of every service on this page
- Excavation (the service) — the page's own `Service` entity

**Major supporting entities (salience 0.7-0.9):**
- Eugene, Oregon (City) — location entity, must appear in H1, meta, first paragraph, and areaServed schema
- Lane County, Oregon (AdministrativeArea) — jurisdiction for permits and pricing context
- Oregon CCB #261742 — license entity, first paragraph
- Oregon Utility Notification Center / Oregon811 (GovernmentOrganization) — highest-leverage trust entity on this page

**Supporting entities (salience 0.4-0.6):**
- Foundation Excavation, Utility Trenching, Septic Excavation, Drainage Excavation, Pond Excavation, Building Pad Excavation (ServiceType)
- Malpass Silty Clay Loam (SoilType) — location-page-unique
- Lane County Land Management Division (GovernmentOrganization)
- OSHA 1926 Subpart P (Regulation)
- Oregon DEQ / DEQ Certified (Certification + GovernmentOrganization)

**Co-occurrence requirements (entities present on ≥7/10 competitor pages for this query — mandatory):**
- Excavation (10/10)
- Grading (10/10)
- Foundation excavation (8/10)
- Site preparation (8/10)
- Utility trenching (7/10)

---

## 11. CTA Requirements

| Placement | CTA type | Copy |
|---|---|---|
| Hero (above fold) | Phone + "Free Estimate" button | "Call 541-401-8726 — Free On-Site Estimates" |
| After H2 #5 (cost section) | Inline text CTA | "Get an accurate estimate for your Eugene excavation project — [call or contact us]." |
| H2 #10 (CTA block) | Phone + form | "Call 541-401-8726 or submit the form below and David will follow up to schedule a site visit." |

All CTAs: plain language, no "Don't wait" urgency language, no fabricated FOMO. The CTA is a direct invitation — nothing more.

---

## 12. Images Required

| Image | Alt text required | Notes |
|---|---|---|
| Hero background | "Excavator digging a foundation in Eugene, Oregon" | Prefer real D&D jobsite photo; placeholder: `service-excavation.webp` |
| H2 #4 section image (optional) | "Excavation in Lane County Oregon clay soil" | Location-specific — use the Lane County soil/terrain context section if an image is added |
| Project type cards | Per project type: "Foundation excavation Eugene OR", "Utility trenching Lane County", etc. | 6 card images for the project types section |

**EXIF note:** Real D&D jobsite photos from Eugene/Lane County preferred for all images. Swap AI-generated placeholders for real photos as David provides them. Do not label AI-generated images as real completed jobs.

---

## 13. Authority Signals to Cite (with exact wording)

1. **Oregon811 — digsafelyoregon.com, oregon.gov/puc:**
   Exact wording: "Oregon law requires calling Oregon 811 (the Oregon Utility Notification Center) at least 2 business days before any excavation. The service is free. D&D calls Oregon 811 on every job."
   *(Confirm "on every job" with David before publishing as a stated practice.)*

2. **Oregon CCB #261742:**
   Exact wording: "Licensed and bonded in Oregon — CCB #261742"
   Must appear in: first paragraph, hero section, and/or trust block.

3. **DEQ Certified:**
   Exact wording: "DEQ Certified for septic work in Oregon"
   Placement: septic excavation section in H2 #3, plus schema.

4. **Lane County Grading and Fill Permit (Lane County LMD):**
   Exact wording: "Lane County's Grading and Fill Permit is generally triggered by moving 50 or more cubic yards or a cut/fill slope steeper than 2:1. Contact Lane County's Land Management Division (LMD) for your specific project."
   Hedge: "Based on a third-party permitting guide — confirm with LMD before treating this as an exact legal threshold."

5. **Oregon construction labor premium (BLS OEWS 2025 via CostFlowAI):**
   Exact wording: "Oregon construction labor runs roughly 20% above the national average, which is why Eugene-area excavation pricing typically lands toward the higher end of national cost ranges."

---

## 14. Open Items (confirm with David before finalizing content)

- [ ] **Oregon811 operational claim:** Does D&D call Oregon811 before every dig? "D&D calls Oregon 811 before every dig" should be stated as fact only if David confirms it as D&D's actual operating procedure.
- [ ] **Pond excavation experience:** Has D&D done pond excavation in Lane County? If yes, a real project reference (without fabricating specifics) strengthens the pond section. If no, frame it as "capability" rather than "experience."
- [ ] **Rock experience in Lane County:** Can D&D confirm having hit and managed rock in upland or foothills area jobs? This supports the rock-overrun honesty section as lived experience rather than a general disclosure.
- [ ] **Business address / base city:** Confirm exact base city within Lane County for the schema `LocalBusiness.address` field.
- [ ] **Real jobsite photos:** Any D&D Lane County excavation photos (foundation dig, pond, utility trench) should replace the `service-excavation.webp` placeholder in the hero.

---

## Quality Checklist

- [x] Every H2 traces to either Matrix A (≥4/10 competitors) or a top-5 gap
- [x] Every FAQ traces to a real question from `02-question-mine.md`
- [x] Unique angle is a specific differentiator (Oregon811, Malpass clay, rock pricing, cost table, small-job welcome) — not a slogan
- [x] 5 Eugene/Oregon-specific authority citations with exact wording proposed (§13)
- [x] Trust-killer rebuttals placed in specific sections (§2 intent cluster, H2 #6 Oregon811, H2 #5 cost honesty, H2 #8 small-job)
- [x] AI citation block (~150 words) included verbatim in §5, ready to paste
- [x] Word count target justified against competitor benchmarks (§6)
- [x] Anti-doorway requirement satisfied by H2 #4 (Malpass clay + wet season), Lane County LMD permit specifics (H2 #7), and local project type context (H2 #3)
- [x] Schema blocks specified with `@id` for areaServed cities using Wikidata URLs (§9)
- [x] Internal link plan includes both inbound and outbound links with anchor text (§8)
- [ ] Oregon811 "on every job" claim confirmed with David (Open Item)
- [ ] Pond excavation experience confirmed with David (Open Item)

---

**Brief complete: `07-landing-pages/briefs/excavation-contractor-eugene-oregon-brief.md`**

Next: `/content-create Page: Excavation Contractor in Eugene, Oregon | URL: /excavation-contractor-eugene-oregon | Primary keyword: excavation contractor Eugene OR | Business: D&D Land Works — CCB #261742, DEQ Certified | Brief: 07-landing-pages/briefs/excavation-contractor-eugene-oregon-brief.md`
