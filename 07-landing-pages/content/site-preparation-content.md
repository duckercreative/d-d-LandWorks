# D&D Land Works — Site Preparation Page Content (Draft)

**Prepared:** 2026-09-08 · **For:** Ducker Creative / D&D Land Works
**Built from:** `07-landing-pages/briefs/site-preparation-brief.md` + full `01-research/page-research/site-preparation/` pack + `business-info.md` + `07-landing-pages/content/home-content.md` (voice/schema pattern reference)
**Status:** Humanizer pass complete (2026-09-08). See note at end of file.

**Corrections applied on top of the brief (per task instruction):**
1. Canonical URL is `/services/site-preparation/`, not the flat `/site-preparation/` the brief and topical map proposed — the live Astro codebase (22 references, including `site/src/pages/services/index.astro` and the file's own existing location at `site/src/pages/services/site-preparation.astro`) already uses the nested form. Used consistently below in metadata, breadcrumbs, and schema.
2. The `Service` schema's `provider` references `"@id": "https://www.ddlandworks.com/#business"` — the exact `@id` already shipped in `home-content.md`'s JSON-LD, not the `#organization` placeholder the brief guessed at before this was confirmed.

---

## Metadata

| Field | Value |
|---|---|
| **Title tag** | Site Preparation in Eugene & Lane County, OR \| D&D (57 chars) |
| **Meta description** | Site preparation vs. excavation, explained. Clearing, grading & permits for Lane County, OR lots. Licensed, bonded. Free estimate: 541-401-8726. (154 chars) |
| **H1** | Site Preparation in Eugene, Springfield & Lane County, Oregon |
| **Canonical URL** | `/services/site-preparation/` |
| **Schema types** | `Service` (primary, `provider` → `{"@id": "https://www.ddlandworks.com/#business"}`), `FAQPage`, `BreadcrumbList`, `HowTo` (7-step process), `Speakable` (H2 #1, #3, #8, #9) — no `AggregateRating`/`Review` (zero reviews at launch) |
| **Internal links (out)** | `/` (homepage), `/services/land-clearing/`, `/services/grading-leveling/`, `/services/foundation-excavation/`, `/services/drainage-excavation/`, `/services/septic-install-repairs/`, `/locations/eugene/`, `/locations/springfield/`, `/about/`, `/contact/` |
| **Primary keyword** | site preparation eugene or |
| **Co-primary keyword** | site preparation lane county or |
| **Word count** | ~2,770 words (body copy, H1 through closing CTA; excludes this metadata table and the JSON-LD block) — within the brief's 2,300–2,900 target |

---

<!-- HERO BLOCK (above H1 / above the fold) -->
<!-- IMAGE GAP: Hero image — a lot mid-clearing or mid-grading, ideally showing visible topsoil stripping or a compacted pad. Alt: "Site preparation and grading for a new home build in Lane County, Oregon." No real jobsite photo exists yet — keep the existing text-only Hero component until real photography is available; do not substitute unbranded stock presented as D&D's own work. -->

**Call 541-401-8726** → [tel:5414018726](tel:5414018726)
**Free Estimate** → [/contact/](/contact/)

# Site Preparation in Eugene, Springfield & Lane County, Oregon

"Site preparation" and "excavation" get used like they mean the same thing, and on most job listings and competitor websites, they are treated that way. They're not. Site preparation is what happens first: clearing a lot, stripping the topsoil, cutting and filling it to grade, and compacting it into something a builder can actually build on. Excavation is what happens next: the specific digging for a foundation, a utility line, or a drainage feature once the site is ready for it. D&D Land Works handles both, under one Oregon CCB license, so you're not trying to figure out which company to call for which phase.

<!-- AI CITATION BLOCK — verbatim from 00-research-pack.md §11, placed in first 30% of body per brief §5 -->
> Site preparation is the work that gets a raw or partially-cleared lot ready for construction: clearing brush and debris, stripping and stockpiling topsoil, cutting and filling to bring the pad to design grade, compacting the subgrade, and staking corners and elevations for the build crew. It is distinct from excavation, which is the specific digging done for a foundation, utility line, or drainage feature once the site is prepped. D&D Land Works provides site preparation for residential and commercial projects throughout Eugene, Springfield, and Lane County, Oregon — including new home builds, ADUs, shop and barn pads, subdivisions, and commercial site development — as part of a licensed, bonded (Oregon CCB #261742) full-service excavation company. Site work in Lane County may require a grading permit, an erosion-control permit, or Oregon DEQ's 1200-C stormwater permit depending on project size; D&D can help confirm what applies before work begins.

## What's the Difference Between Site Preparation and Excavation?

Site preparation gets a raw or partially-cleared lot ready to build on: clearing brush and trees, stripping and stockpiling topsoil, cutting and filling to bring the pad to grade, and compacting the subgrade so it holds weight. Excavation is the specific digging that follows once the pad is already prepped: a foundation footing, a utility trench, or a drainage line. Think of site prep as getting the whole canvas ready, and excavation as the targeted cuts made on that canvas afterward. D&D Land Works is licensed and bonded (Oregon CCB #261742) to handle both phases under one contract, so the transition between them doesn't require a second contractor or a second bid.

## What Does Site Preparation Include?

The scope changes lot to lot (a wooded parcel outside Veneta needs more upfront clearing than an already-open lot in a Eugene subdivision), but the sequence itself is consistent. Here's the order site prep typically follows:

1. **Survey and plan.** A topographic survey establishes the lot's existing grades, slopes, drainage patterns, and property lines before any equipment moves. This is what a grading plan gets built on.
2. **Clear.** Brush, trees, and debris come out of the build envelope. See [land clearing](/services/land-clearing/) for full-clearing and lighter brush-clearing scopes.
3. **Strip topsoil.** Topsoil gets stripped and stockpiled separately from the rest of the material, rather than mixed into the fill, so it's available to reuse for landscaping later. This step gets skipped over on a lot of competitor sites. It's a real, distinct part of the job, not an afterthought.
4. **Cut and fill to grade.** Material gets cut from high spots and filled into low spots to bring the pad to the design elevation. This is also the step that determines whether the job crosses Lane County's grading-permit threshold (see below).
5. **Compact the subgrade.** The pad gets compacted to the density a foundation, driveway, or slab actually needs. This is what separates a pad that holds up from one that settles later. See [grading and leveling](/services/grading-leveling/) for the broader grading service this overlaps with.
6. **Stake corners and elevations.** Reference points go in so the build crew, surveyor, or inspector can verify the pad matches the plan.
7. **Rough-grade for drainage.** The pad gets a final rough shape so water moves away from where the structure will sit, not toward it. That's the lead-in to [drainage excavation](/services/drainage-excavation/) if the lot needs more dedicated drainage work.

<!-- IMAGE GAP: Before/after — raw or wooded lot next to the same lot cleared and graded to a pad. Alt: "Before and after site preparation, Lane County, Oregon." No real project photo exists yet; flagged as a genuine gap, not filled with stock. -->
<!-- IMAGE GAP: Subgrade compaction or staking in progress. Alt: "Subgrade compaction during site preparation, Lane County, Oregon." Real jobsite photo needed. -->

## Should Site Prep Happen Before or After I Hire a Builder?

In most cases, site prep starts once a builder is hired and the project's permitting and design work is underway. It's one of the first things that happens on the ground, ahead of vertical construction. It's not unusual for a homeowner to close on a lot, sign with a builder, and only then get a call asking them to line up site work, which can feel like a step nobody warned them about. The exact sequence depends on your builder's process and your specific permit situation, so it's worth confirming timing directly with your builder or general contractor before scheduling. As a rule, though, site prep comes early, and [foundation excavation](/services/foundation-excavation/) follows once the pad is ready.

## Do I Need a Permit for Site Prep in Lane County?

It depends on how much earth moves and how the project is scoped. There isn't one universal answer, but three specific permits are the ones to know about.

| Permit | Triggered By | Who Administers It |
|---|---|---|
| Lane County Grading and Fill Permit | A Lane County permitting guide indicates this is generally required when a project moves more than roughly 50 cubic yards of earth, or creates a cut/fill slope steeper than roughly 2:1. Confirm the exact threshold for your project directly with Lane County's Land Management Division before assuming either way. | Lane County Land Management Division |
| Erosion Prevention Permit (Type I / Type II) | Same sourcing caveat as above: Type I generally covers single-family homes or minor grading under 1 acre; Type II generally covers larger developments, steeper slopes, or more erodible sites, within the county's regulated stormwater area. Confirm which tier (if any) applies with Lane County LMD. | Lane County Land Management Division |
| Oregon DEQ 1200-C Construction Stormwater Permit | Confirmed directly on oregon.gov: required when a project disturbs 1 acre or more, or is part of a larger common plan of development totaling 1 acre or more, even if your individual lot is smaller. Clearing, grading, and excavation all count as "disturbance." A complete application is due at least 30 days before soil disturbance starts. No homeowner exemption was found in this permit's own published rules. | [Oregon Department of Environmental Quality](https://www.oregon.gov/deq/housing/Pages/housing-1200c.aspx) |

A few things worth knowing that most site-prep pages don't mention: foundation excavation done under an active building permit is generally exempt from a separate grading permit, but driveway and landscape grading usually aren't. And a project under 1 acre can still need a local Type I erosion permit even when it's too small to trigger the state-level DEQ 1200-C. The two permit tiers don't always turn on at the same size. If your project is anywhere near either threshold, confirming with [Lane County LMD](https://www.lanecounty.org/government/county_departments/public_works/land_management_division) before work starts is worth the phone call.

## What Kind of Project Is This For?

Site prep isn't just for new single-family homes, even though that's the project type most competitor sites default to describing.

- **New home build.** The standard case: a raw or partially-cleared residential lot gets prepped for a foundation crew.
- **ADU (accessory dwelling unit).** A second, smaller residence on an existing lot has its own site-prep needs, and depending on the lot's size and existing septic or sewer situation, its own permit questions worth confirming early.
- **Shop or barn pad.** Rural and acreage properties often need a level, compacted pad before a metal-building crew arrives. It's a different scope than a house pad, usually simpler, but still needs real compaction.
- **Subdivision.** Multi-lot residential development brings the DEQ 1200-C "common plan of development" rule into play even if any single lot is under an acre. Worth flagging to a developer early, not after the fact.
- **Commercial site development.** Larger commercial pads typically involve more grading volume, more drainage planning, and a higher likelihood of crossing the 1-acre DEQ threshold outright.

Whether your project is a single lot in Eugene or a multi-lot development anywhere else in Lane County, the estimate process is the same: a real site visit, not a guess from a satellite photo.

<!-- IMAGE GAP: A rural shop/barn pad or ADU pad specifically. Alt: "Shop pad site preparation in Lane County, Oregon." Genuinely absent — even a generic equivalent from a different project type would be more honest than stock here. -->

**Not sure which project type you're planning for? [Get a free estimate](/contact/) and we'll walk the lot.**

## How Much Does Site Preparation Cost in Lane County?

There's no Lane-County-specific figure to point to here, and any site-prep contractor who quotes one sight-unseen is guessing. The ranges below are general industry figures, not a quote for your project:

| Scope | Typical Range | What Affects Price |
|---|---|---|
| Site preparation overall | Roughly $8,000–$50,000+ depending on complexity | Lot size, vegetation density, access, soil, and how much cut/fill grading is needed |
| Cut and fill grading | Roughly $0.11–$1.50+ per square foot, or a few dollars per cubic yard for standard soil | Volume of material moved, haul distance, slope |
| Standard excavation | Roughly $5–$15 per cubic yard | Baseline soil conditions, no rock or heavy clay encountered |

These are general, national/statewide ranges, not Lane County-specific pricing, and not a substitute for an actual site visit. The only honest way to price a specific lot is to see it.

**Want a real number for your specific lot? [Request a free estimate](/contact/).**

## How Long Does Site Preparation Take?

A well-kept, already-open lot with easy access can sometimes be cleared and graded in about a week. Overall residential site preparation more commonly runs one to two months from start to a builder-ready pad, once vegetation, soil conditions, weather, and permitting are factored in. Commercial or subdivision site work is a wider range: commonly one to three-plus weeks depending on scope, though larger multi-lot developments can extend well beyond that. Scheduling around Oregon's dry season (roughly May through October) also affects timeline, since wet-season grading in Willamette Valley clay soil generally moves slower.

## What Happens If the Crew Hits Rock or Bad Soil?

It happens, and it's not a sign of a bad contractor or a bait-and-switch quote. It's a real cost driver that a site-prep contractor should explain honestly rather than bury in a change order. Standard excavation typically runs $5–$15 per cubic yard; hitting solid rock can push that to $50–$200 per cubic yard, and clay soil commonly adds another 25–50% on top of baseline cost. A geotechnical soil study, usually in the $2,000–$5,000 range, is documented to typically prevent a real share of cost overruns on a difficult site by catching rock or bad soil before equipment is already committed. If your lot has any history of rock outcrops or notably heavy clay, asking about a soil check before quoting is a reasonable, budget-protecting question to raise, not an upsell.

## Site Prep and Your Septic System

If your project includes a septic system, sequencing matters more than it might seem. Lane County requires that once a drainfield location is proposed or approved through a test-pit evaluation, it can't be cut, filled, paved, or otherwise disturbed. Doing so can void the site's septic approval outright. In practice, that means the area evaluated for your drainfield needs to be confirmed and flagged before general grading starts on the rest of the lot, not treated as part of one undifferentiated grading job. If you're planning septic work alongside site prep, confirm with your septic evaluator or [Lane County's On-Site Wastewater Program](https://www.lanecounty.org/government/county_departments/public_works/land_management_division/on-_site_wastewater) that the drainfield area has been evaluated and marked before grading equipment moves near it. For the installation and repair work itself, see [septic installation and repair](/services/septic-install-repairs/).

## Frequently Asked Questions

**What's the difference between site preparation and excavation?**
Site prep is everything that gets a raw lot build-ready: clearing, stripping topsoil, cutting and filling to grade, compacting, and staking. Excavation is the specific digging that follows for a foundation, utility line, or drainage feature, once the site is already prepped. They're two phases of the same project, not interchangeable terms for the same task.

**Should site prep happen before or after I hire a builder?**
Site work typically starts once a builder is hired and permitting and design are already underway, ahead of vertical construction. The exact order depends on your specific project, so it's worth confirming the sequence directly with your builder or general contractor.

**Do I need a survey before site prep can start?**
Yes, typically. A topographic survey establishing grades, slopes, drainage, and property lines is standard before a grading plan can be finalized. Confirm the exact requirement for your specific parcel with Lane County, since some smaller or simpler projects may have different expectations.

**Will site prep delay my building permit?**
Not necessarily, but the two permit tracks aren't automatically the same thing. Foundation excavation done under an active building permit is generally exempt from a separate grading permit, but driveway or landscape grading usually isn't. Confirm the specifics of your project with Lane County's Land Management Division so nothing catches you off guard mid-project.

**Do I need a permit for site prep in Lane County?**
It depends on scope. A Lane County permitting guide puts the Grading and Fill Permit threshold at roughly 50 cubic yards moved or a cut/fill slope steeper than roughly 2:1 — confirm the exact figure for your project with Lane County LMD rather than treating that as an exact, guaranteed number. Larger projects may also need an Erosion Prevention Permit or Oregon DEQ's 1200-C stormwater permit.

**What happens if the crew hits rock or bad soil partway through the job?**
It's an honest, explainable cost driver, not a bait-and-switch. Standard excavation runs roughly $5–$15 per cubic yard; rock can push that to $50–$200 per cubic yard. A soil check before quoting is one real way to protect your budget against that kind of surprise.

**How much does site preparation typically cost in Lane County?**
General ranges run roughly $8,000–$50,000+ depending on complexity, or roughly $0.11–$1.50+ per square foot for grading specifically — but there's no Lane-County-specific figure that applies to every lot, since scope, access, and soil vary too much. A free on-site estimate is the only accurate way to price a specific project.

**How long does site preparation take?**
A well-kept, already-open lot can sometimes be cleared in about a week. Overall residential site prep more commonly runs one to two months depending on vegetation, soil, and weather, with commercial or subdivision work following its own timeline based on scope.

**Does site prep need to happen before or after my septic system is evaluated?**
Before grading disturbs that specific area. The drainfield location needs to be evaluated and confirmed first, since cutting, filling, or otherwise disturbing an approved drainfield area afterward can void the county's septic approval.

## Related Services

Site preparation is rarely the only thing a project needs. Most jobs roll straight into one or more of these:

- **[Land Clearing](/services/land-clearing/)** — removing brush, trees, and debris to open up usable land
- **[Grading & Leveling](/services/grading-leveling/)** — shaping land to the right slope for drainage and building
- **[Foundation Excavation](/services/foundation-excavation/)** — digging and leveling for footings and foundations
- **[Drainage Excavation](/services/drainage-excavation/)** — excavation and grading to correct standing water and poor drainage

<!-- IMAGE GAP: Simple illustrated permit/process diagram for the permit table above. Alt: "Lane County site-prep permit overview." Can launch as a simple illustrated table/diagram — lower priority than the photo gaps above. -->

D&D Land Works covers all of this under one Oregon CCB license (#261742), for both residential and commercial properties throughout [Eugene](/locations/eugene/), [Springfield](/locations/springfield/), and the rest of Lane County. To see the full range of excavation services D&D Land Works offers, visit the [homepage](/) or [David Deggelman's about page](/about/).

## Get Your Lot Scoped

Free estimate for site prep anywhere in Lane County.

**Call 541-401-8726** → [tel:5414018726](tel:5414018726)
**Or [get a free estimate](/contact/)**

---

## Schema (JSON-LD)

Note on `Speakable`: `cssSelector` values below assume heading `id` attributes are added when this content is placed into the Astro template, matching the pattern used in `home-content.md` — add these ids during the Astro build step; they don't exist in this markdown draft.

```json
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://www.ddlandworks.com/services/site-preparation/#service",
      "name": "Site Preparation",
      "serviceType": "Site Preparation",
      "description": "Site preparation is the work that gets a raw or partially-cleared lot ready for construction: clearing brush and debris, stripping and stockpiling topsoil, cutting and filling to bring the pad to design grade, compacting the subgrade, and staking corners and elevations for the build crew. It is distinct from excavation, which is the specific digging done for a foundation, utility line, or drainage feature once the site is prepped.",
      "url": "https://www.ddlandworks.com/services/site-preparation/",
      "provider": {
        "@id": "https://www.ddlandworks.com/#business"
      },
      "areaServed": [
        "Lane County, Oregon",
        "Eugene, Oregon",
        "Springfield, Oregon",
        "Cottage Grove, Oregon",
        "Junction City, Oregon",
        "Creswell, Oregon",
        "Veneta, Oregon",
        "Florence, Oregon",
        "Oakridge, Oregon",
        "Coburg, Oregon",
        "Lowell, Oregon"
      ]
    },
    {
      "@type": "HowTo",
      "name": "What Does Site Preparation Include?",
      "description": "The typical, ordered sequence a site-preparation project follows before construction can start.",
      "step": [
        { "@type": "HowToStep", "position": 1, "name": "Survey and plan", "text": "A topographic survey establishes the lot's existing grades, slopes, drainage patterns, and property lines before any equipment moves." },
        { "@type": "HowToStep", "position": 2, "name": "Clear", "text": "Brush, trees, and debris come out of the build envelope." },
        { "@type": "HowToStep", "position": 3, "name": "Strip topsoil", "text": "Topsoil gets stripped and stockpiled separately from the rest of the material, so it's available to reuse for landscaping later." },
        { "@type": "HowToStep", "position": 4, "name": "Cut and fill to grade", "text": "Material gets cut from high spots and filled into low spots to bring the pad to the design elevation." },
        { "@type": "HowToStep", "position": 5, "name": "Compact the subgrade", "text": "The pad gets compacted to the density a foundation, driveway, or slab actually needs." },
        { "@type": "HowToStep", "position": 6, "name": "Stake corners and elevations", "text": "Reference points go in so the build crew, surveyor, or inspector can verify the pad matches the plan." },
        { "@type": "HowToStep", "position": 7, "name": "Rough-grade for drainage", "text": "The pad gets a final rough shape so water moves away from where the structure will sit, not toward it." }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What's the difference between site preparation and excavation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Site prep is everything that gets a raw lot build-ready: clearing, stripping topsoil, cutting and filling to grade, compacting, and staking. Excavation is the specific digging that follows for a foundation, utility line, or drainage feature, once the site is already prepped. They're two phases of the same project, not interchangeable terms for the same task."
          }
        },
        {
          "@type": "Question",
          "name": "Should site prep happen before or after I hire a builder?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Site work typically starts once a builder is hired and permitting and design are already underway, ahead of vertical construction. The exact order depends on your specific project, so it's worth confirming the sequence directly with your builder or general contractor."
          }
        },
        {
          "@type": "Question",
          "name": "Do I need a survey before site prep can start?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, typically. A topographic survey establishing grades, slopes, drainage, and property lines is standard before a grading plan can be finalized. Confirm the exact requirement for your specific parcel with Lane County, since some smaller or simpler projects may have different expectations."
          }
        },
        {
          "@type": "Question",
          "name": "Will site prep delay my building permit?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Not necessarily, but the two permit tracks aren't automatically the same thing. Foundation excavation done under an active building permit is generally exempt from a separate grading permit, but driveway or landscape grading usually isn't. Confirm the specifics of your project with Lane County's Land Management Division so nothing catches you off guard mid-project."
          }
        },
        {
          "@type": "Question",
          "name": "Do I need a permit for site prep in Lane County?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "It depends on scope. A Lane County permitting guide puts the Grading and Fill Permit threshold at roughly 50 cubic yards moved or a cut/fill slope steeper than roughly 2:1 — confirm the exact figure for your project with Lane County LMD rather than treating that as an exact, guaranteed number. Larger projects may also need an Erosion Prevention Permit or Oregon DEQ's 1200-C stormwater permit."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if the crew hits rock or bad soil partway through the job?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "It's an honest, explainable cost driver, not a bait-and-switch. Standard excavation runs roughly $5-$15 per cubic yard; rock can push that to $50-$200 per cubic yard. A soil check before quoting is one real way to protect your budget against that kind of surprise."
          }
        },
        {
          "@type": "Question",
          "name": "How much does site preparation typically cost in Lane County?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "General ranges run roughly $8,000-$50,000+ depending on complexity, or roughly $0.11-$1.50+ per square foot for grading specifically — but there's no Lane-County-specific figure that applies to every lot, since scope, access, and soil vary too much. A free on-site estimate is the only accurate way to price a specific project."
          }
        },
        {
          "@type": "Question",
          "name": "How long does site preparation take?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A well-kept, already-open lot can sometimes be cleared in about a week. Overall residential site prep more commonly runs one to two months depending on vegetation, soil, and weather, with commercial or subdivision work following its own timeline based on scope."
          }
        },
        {
          "@type": "Question",
          "name": "Does site prep need to happen before or after my septic system is evaluated?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Before grading disturbs that specific area. The drainfield location needs to be evaluated and confirmed first, since cutting, filling, or otherwise disturbing an approved drainfield area afterward can void the county's septic approval."
          }
        }
      ]
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://www.ddlandworks.com/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Services",
          "item": "https://www.ddlandworks.com/services/"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Site Preparation",
          "item": "https://www.ddlandworks.com/services/site-preparation/"
        }
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://www.ddlandworks.com/services/site-preparation/#webpage",
      "speakable": {
        "@type": "SpeakableSpecification",
        "cssSelector": [
          "#whats-the-difference-between-site-preparation-and-excavation",
          "#should-site-prep-happen-before-or-after-i-hire-a-builder",
          "#what-happens-if-the-crew-hits-rock-or-bad-soil",
          "#site-prep-and-your-septic-system"
        ]
      }
    }
  ]
}
```

---

**Note:** The mandatory humanizer pass is complete — the editable prose sections (everything outside the FAQ block, which mirrors the JSON-LD schema verbatim and was left untouched, and the AI citation block, which is preserved verbatim per the brief) had 16 repeated em-dash constructions cleaned up into periods, commas, or colons for natural variation, plus one small grammar fix ("a already-open lot" → "an already-open lot"). No facts, numbers, hedged permit language, links, headings, FAQ content, or schema were changed. Placing this into `site/src/pages/services/site-preparation.astro` is a separate, later step and is not part of this task. No pricing, founding year, address, hours, or review counts were invented; the two Lane County permit thresholds (Grading and Fill Permit, Erosion Prevention Permit) are hedged and attributed to a third-party permitting guide throughout, per `07-oregon-authority.md`'s sourcing caveat, while the DEQ 1200-C and septic test-pit facts are stated as confirmed since they were verified directly against oregon.gov and lanecounty.org. D&D's specific role in septic test-pit coordination and any geotechnical-referral service were left as open items per the brief (§ "Open Items"), so H2 #9 and #8 use the more generic, unconfirmed-safe framing rather than claiming an active coordination role that hasn't been confirmed with David.
