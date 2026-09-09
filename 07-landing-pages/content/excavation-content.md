# D&D Land Works — Excavation & Grading Page Content (Draft)

**Prepared:** 2026-09-08 · **For:** Ducker Creative / D&D Land Works
**Built from:** `07-landing-pages/briefs/excavation-brief.md` + full `01-research/page-research/excavation/` pack + `business-info.md` + `07-landing-pages/content/site-preparation-content.md` (voice/schema pattern reference) + `07-landing-pages/content/home-content.md` (OSHA citation wording reference, schema `@id` origin) + the current live page at `site/src/pages/services/excavation.astro` (existing process list and equipment framing preserved and expanded, not discarded).
**Status:** Humanizer pass complete (2026-09-08). See note at end of file.

**Corrections / flags applied on top of the brief (per task instruction):**
1. City-page links use the live Astro codebase's actual route — `/locations/eugene/` and `/locations/springfield/` (confirmed via `site/src/pages/locations/eugene.astro` and `springfield.astro`) — not the brief's `/service-areas/eugene/` guess. This matches both the task instruction's explicit URLs and the pattern already shipped in `home-content.md`.
2. The `Service` schema's `provider` references `"@id": "https://www.ddlandworks.com/#business"`, the exact `@id` already shipped in `home-content.md`'s and `site-preparation-content.md`'s JSON-LD.
3. Per the brief's own flags (§6, §10): the on-page H1 changes from the current live page's "Excavation & Grading" to "Excavation & Earthmoving" (URL/slug unchanged), and the breadcrumb label follows the new H1 for internal consistency, while the `Service` schema's `name` field keeps "Excavation and Grading" per the brief's §10 required fields. Both the H1 change and the breadcrumb-label choice are flagged in the brief as calls to confirm with David/dev before build, not settled decisions — carrying that flag forward here rather than treating it as resolved.
4. The AI citation block and the "Does D&D Call Before Digging?" section state, per the brief's exact specification, that D&D calls Oregon 811 before every dig. The brief's own Open Items list this as a near-certain but **unconfirmed operational claim** — confirm the exact wording with David before this goes live, per the brief's explicit instruction.
5. Fourth "Related Services" card (Utility Excavation) added per brief §6/§9, since the brief flags it as currently missing from the live page's card grid.

---

## Metadata

| Field | Value |
|---|---|
| **Title tag** | Excavation & Grading in Eugene & Lane County, OR \| D&D (54 chars) |
| **Meta description** | Excavation vs. grading, explained. Cut/fill, ponds & utility trenching in Lane County, OR. Licensed, bonded, calls Oregon811. Free estimate: 541-401-8726. (155 chars) |
| **H1** | Excavation & Earthmoving in Eugene, Springfield & Lane County, Oregon |
| **Canonical URL** | `/services/excavation/` |
| **Schema types** | `Service` (primary, `provider` → `{"@id": "https://www.ddlandworks.com/#business"}`), `FAQPage`, `BreadcrumbList`, `Speakable` (H2 #2, #4, #7, #9) — no `AggregateRating`/`Review` (zero reviews at launch) |
| **Internal links (out)** | `/` (homepage), `/services/site-preparation/`, `/services/grading-leveling/`, `/services/foundation-excavation/`, `/services/utility-excavation/`, `/services/drainage-excavation/`, `/locations/eugene/`, `/locations/springfield/`, `/about/`, `/contact/` |
| **Primary keyword** | excavation contractor eugene or |
| **Co-primary keyword** | excavation contractor lane county or |
| **Word count** | ~2,600 words (body copy, H1 through closing CTA; excludes this metadata table, HTML image-gap comments, and the JSON-LD block) — at the top of the brief's 2,000–2,600 target |

---

<!-- HERO BLOCK (above H1 / above the fold) -->
<!-- IMAGE GAP: Hero image — an excavator mid-dig on a Lane County site (foundation, trench, or pond). Alt: "Excavation and earthmoving contractor working a job site in Lane County, Oregon." No real jobsite photo exists yet — keep the existing text-only Hero component until real photography is available; do not substitute unbranded stock presented as D&D's own work. -->

**Call 541-401-8726** → [tel:5414018726](tel:5414018726)
**Free Estimate** → [/contact/](/contact/)

# Excavation & Earthmoving in Eugene, Springfield & Lane County, Oregon

Excavation is general earthmoving for a defined purpose: cutting material from a high spot, filling a low spot, and bringing a site to the elevation a specific project needs, whether that's a foundation, a pond, a driveway, or a utility trench. It's a different phase than [site preparation](/services/site-preparation/), which clears and grades a raw lot before any of this starts, and it's a narrower scope than grading on its own, a distinction this page draws a hard line around below. D&D Land Works provides excavation and earthmoving for residential and commercial projects throughout Eugene, Springfield, and the rest of Lane County, Oregon, under one Oregon CCB license.

<!-- AI CITATION BLOCK — verbatim from 00-research-pack.md §11, placed in first 30% of body per brief §5 -->
> Excavation and grading is general earthmoving work: cutting material from high points, filling low points, and bringing a site to the elevation a project needs — whether that's a foundation, a pond, a driveway, a building pad, or a utility line trench. D&D Land Works provides excavation and grading for residential and commercial projects throughout Eugene, Springfield, and Lane County, Oregon, including foundation digs, pond excavation, driveway and access-road cutting, and utility-run trenching, using an excavator, dozer, and compaction equipment matched to the site. D&D is licensed and bonded under Oregon Construction Contractors Board license CCB #261742, calls Oregon 811 (the Oregon Utility Notification Center) at least two business days before digging on every job as required by Oregon law, and follows OSHA's excavation and trenching safety standard (29 CFR 1926 Subpart P) on jobs involving deeper cuts or trenches. Free estimates are available for both residential and commercial excavation work.

## What Does Excavation & Earthmoving Cover?

Most excavation jobs come down to the same core moves, adapted to whatever the site actually needs. D&D Land Works scopes the work by walking the site and figuring out what has to move, not by guessing off a satellite photo or a floor plan. Typical excavation and earthmoving work includes:

- **Cut-and-fill earthmoving** — cutting material from high points and filling low points to bring a site to design grade
- **Backfill and compaction** — filling around a footing, foundation, or trench and compacting it in lifts, not dumping and walking away
- **Rock and debris removal** — clearing rock, buried debris, and obstructions out of the work area
- **Site access roads and driveway cuts** — cutting a driveway or access road into a lot that doesn't have one yet
- **Rough grading for erosion control** — shaping a site so it doesn't sit exposed and eroding between phases
- **Pond, pad, and lot reshaping** — digging a pond, leveling a building pad, or reshaping a lot's overall contour

Every item on that list is grading-to-elevation that happens because something is being dug, not a standalone re-sloping job. The next section is where that line gets drawn explicitly.

## What's the Difference Between Excavation and Grading?

Excavation removes earth to create space: a foundation footing, a pond basin, a utility trench. Grading shapes the surface once material is in place, setting the finish elevation and drainage slope. On a real job the two usually happen as one continuous operation, excavation opens the space and grading finishes the surface, rather than two rigidly separate phases handled by different crews.

This page covers grading that happens *because* something is being dug: cut-and-fill to design grade, backfill and compaction after a trench or footing goes in, and rough grading that finishes an excavation project. Standalone re-sloping, yard leveling, or drainage-grading on ground where nothing new is being dug is a different job, covered on the [grading and leveling](/services/grading-leveling/) page instead. If your project doesn't involve a new dig, that's the page to start on.

<!-- IMAGE GAP: Equipment close-up (excavator or compactor actively working, not staged). Alt: "Excavation equipment on a Lane County jobsite." Genuinely absent — ties directly to the equipment-specificity differentiator. -->

## What Kind of Project Is This For?

Excavation covers a range of project types, not just foundations. Every project gets scoped individually on-site, since the same list of moves plays out differently depending on soil, access, and slope.

- **Foundation dig.** Digging and prepping the excavation for a home, shop, barn, or ADU foundation, following site preparation on the same lot. See [foundation excavation](/services/foundation-excavation/) for more depth on this project type.
- **Pond.** Farm ponds, decorative ponds, and stormwater ponds all start with an excavation cut sized to the intended depth and shape. Depending on the pond's size and location, an Oregon Water Resources Department water-rights permit can apply if it diverts from a stream or spring or exceeds roughly 9.2 acre-feet of storage, and the Department of State Lands may have a say if it's near a wetland or salmon-bearing waterway. A small, rain-fed pond well clear of any mapped waterway is generally exempt, but confirming with OWRD, DSL, and Lane County for your specific parcel is worth doing before digging starts.
- **Building, shop, or barn pad.** A level, compacted pad ahead of a metal-building or pole-barn crew.
- **Driveway or access road.** Cutting a new driveway or access road into a lot that doesn't have one, or re-cutting one that's washed out.
- **Utility run.** Trenching for a water, sewer, or utility line to a new structure. See [utility excavation](/services/utility-excavation/) for trenching-specific depth.

Whether the job is a foundation dig in a Eugene subdivision or a pond on a rural parcel outside Springfield, it gets walked and quoted the same way.

<!-- IMAGE GAP: A pond excavation project, in progress or before/after. Alt: "Pond excavation in Lane County, Oregon." Flagged as a genuine absence — even a single real pond-dig photo would meaningfully strengthen this page's clearest unclaimed differentiator. -->
<!-- IMAGE GAP: A driveway or utility-trench cut in progress. Alt: "Driveway access excavation, Lane County, Oregon." Needs a real jobsite photo. -->

**Not sure what your project needs? [Get a free estimate](/contact/) and we'll walk the site.**

## What Equipment Shows Up on the Job?

An excavator handles the bulk of the digging and rock work. A dozer pushes and shapes material across larger cuts and fills. Compaction equipment runs behind the fill so it holds once something gets built on it. What actually shows up depends on the site: a tight in-town lot needs a smaller machine and a different approach than an acreage parcel with a long haul road. No brand names here, just the equipment categories that do the work, matched to what the site needs.

## Residential vs. Commercial Excavation — What's Actually Different?

Residential and commercial excavation aren't the same job scaled up or down. They differ in equipment, crew size, timeline, and complexity, even when the underlying moves (cut, fill, compact) are identical.

| | Residential | Commercial |
|---|---|---|
| Typical equipment | Mini excavators, skid steers, smaller dozers | Full-size excavators and dozers, multiple haul trucks |
| Crew size | Often 1-2 operators | Multiple crews, sometimes phased |
| Material moved | Usually a few hundred cubic yards or less | Measured in acres of grading, often thousands of cubic yards |
| Timeline | Commonly days once permits and scheduling are settled | 1 to 3-plus weeks, longer on multi-phase sites |
| Regulatory complexity | Usually a single permit path | More likely to cross Oregon DEQ 1200-C and multi-permit thresholds |

Either way, a small driveway fix and a larger commercial pad get the same process: a real site visit, a written estimate, and a crew that shows up ready for the scope actually in front of it.

## How Much Does Excavation Cost?

| Pricing Model | Typical Range | What Drives It |
|---|---|---|
| Hourly | Roughly $100–$300/hr with equipment and operator | Machine size, job complexity, how much hands-on operator time it takes |
| Per cubic yard — standard soil | Roughly $2.50–$15/cu yd | Volume of material moved, haul distance, access |
| Per cubic yard — rock | Roughly $50–$200/cu yd | Whether the crew hits solid rock and needs ripping or blasting |
| Flat per-project | Varies by scope | Used for well-defined jobs like a single driveway cut or one pad |

These are general national and Oregon-labor-adjusted ranges, not a quote for your project. Oregon's construction labor costs run roughly 20% above the national average, which is one reason Lane County pricing likely sits toward the higher end of these ranges rather than the low end. The only honest way to price a specific job is a site visit.

Hitting rock partway through a dig isn't a bait-and-switch. It's a real, explainable cost jump, and it's worth knowing about before it happens rather than after. Soft to moderately firm fractured rock is usually handled by ripping, which typically runs 50-65% cheaper than blasting; blasting generally only comes into play above roughly 1,000 cubic yards or for harder rock. Either way, that's a specific technique with a specific, quotable cost, the kind of detail a contractor should hand you upfront instead of burying it in a change order.

**Want a real number instead of a range? [Request a free estimate](/contact/).**

## Does D&D Call Before Digging?

Yes. D&D Land Works calls Oregon 811 (the Oregon Utility Notification Center) at least two business days before starting any dig, as Oregon law requires. Locate requests are free, and once the call is made, affected utility operators have two business days to mark their underground lines with color-coded paint before equipment moves. That's a specific, checkable step you can verify yourself, and it's the same process [Oregon 811](https://digsafelyoregon.com/) recommends any homeowner or excavator confirm directly before digging on their own property, too.

## Do You Need a Permit to Excavate in Lane County?

It depends on scope. A Lane County permitting guide indicates a Grading and Fill Permit is generally required when a project moves more than roughly 50 cubic yards of earth or creates a cut/fill slope steeper than roughly 2:1. Confirm the exact figure for your project directly with [Lane County's Land Management Division](https://www.lanecounty.org/government/county_departments/public_works/land_management_division) rather than treating that as a guaranteed number. Foundation excavation done under an active building permit is generally exempt from a separate grading permit. See [site preparation](/services/site-preparation/) for the fuller permit picture, including the Erosion Prevention Permit and Oregon DEQ's 1200-C stormwater permit.

## Can I Rent an Excavator and Do This Myself?

For some jobs, yes. A small, shallow dig with clear sightlines and no buried utilities nearby, widening a garden bed or a short landscaping cut, is a reasonable candidate for a rented mini excavator if you're comfortable operating one. Foundation digs, utility trenches, and work near property lines are a different situation: trenching and excavation work follows OSHA 29 CFR 1926 Subpart P, which requires a protective system for trenches 5 feet deep or more and safe access within 25 feet of lateral travel for excavations 4 feet deep or more, and getting that wrong carries real liability, well beyond the cost of a redo. Skill with the machine matters too. A rented excavator in inexperienced hands can misjudge a cut or hit a line Oregon811 already marked. If your project involves a structure, a utility, or a property line, hiring it out is the safer call.

## How Long Does Excavation Take?

A residential excavation project, a foundation dig, a driveway cut, a single pond, often takes just a few days once permits and site prep are already handled. Commercial or multi-building excavation is a different scale: commonly 1 to 3-plus weeks, and larger or phased commercial sites can run longer depending on scope, access, and how much material has to move. Season matters too: Willamette Valley's wet months (roughly November through April) generally move slower than the May-through-October dry season, since clay soil that's easy to work dry gets sticky and harder to compact wet.

## Frequently Asked Questions

**What's the difference between excavation and grading?**
Excavation removes earth to create space, a foundation, a pond, a trench. Grading shapes the surface for drainage and elevation once material is in place. On a real job they often happen as one continuous operation rather than two separate phases. If your project involves a new dig, this page covers it; for standalone re-sloping or yard leveling with nothing new being dug, see [grading and leveling](/services/grading-leveling/) instead.

**How much does excavation cost?**
General ranges run roughly $1,400–$6,000 for a typical residential project, or $2.50–$15 per cubic yard for standard soil, clearly labeled as general and not a quote for your specific lot. Pricing comes in a few real forms, hourly, per-cubic-yard, or flat per-project, depending on how the job is scoped. A free on-site estimate is the only accurate way to price a specific project.

**What happens if the crew hits rock during excavation?**
It's a real, explainable cost driver, not a bait-and-switch. Standard excavation runs roughly $5–$15 per cubic yard; hitting solid rock can push that to $50–$200 per cubic yard depending on whether it needs ripping or blasting. Knowing that upfront is the point, not finding out mid-job with no warning.

**What's the difference between residential and commercial excavation?**
Residential jobs typically use compact machines, mini excavators and skid steers, moving at most a few hundred cubic yards. Commercial jobs are measured in acres, with full-size equipment and sometimes multiple crews working in phases. Either way, the process is the same: a real site visit and a written estimate, not a phone-quoted guess.

**What equipment is used for excavation work?**
An excavator handles digging and rock work, a dozer pushes and shapes material across larger cuts, and compaction equipment runs behind the fill. What shows up depends on the site, a tight in-town lot needs a smaller machine than an acreage parcel with a long haul road.

**Do I need to call 811 before digging in Oregon?**
Yes. Oregon811 (the Oregon Utility Notification Center) requires at least two business days' advance notice before digging, and locate requests are free. D&D Land Works makes that call before starting any dig, as Oregon law requires.

**Do I need a permit to excavate in Lane County?**
It depends on scope. A Lane County permitting guide puts the Grading and Fill Permit threshold at roughly 50 cubic yards moved or a cut/fill slope steeper than roughly 2:1 — confirm the exact figure for your project with Lane County's Land Management Division rather than treating that as an exact, guaranteed number. See [site preparation](/services/site-preparation/) for the fuller permit picture.

**How long does excavation take?**
Often just a few days for a residential job once permits and site prep are done. Commercial or multi-building excavation commonly runs 1 to 3-plus weeks depending on scope, access, and how much material has to move.

**Can you excavate for a pond, driveway, or utility line, or just foundations?**
Yes to all of them. D&D Land Works scopes foundation digs, ponds, driveways and access roads, and utility runs individually, walking each site rather than treating every job as the same generic dig.

## Related Services

Excavation is rarely the only phase a project needs. [Site preparation](/services/site-preparation/) usually comes first on a raw lot; [grading and leveling](/services/grading-leveling/) handles standalone re-sloping and yard-leveling work where nothing new is being dug (the cut-and-fill and backfill covered on this page are a different scope); [foundation excavation](/services/foundation-excavation/) and [utility excavation](/services/utility-excavation/) go deeper on those two specific project types.

- **[Site Preparation](/services/site-preparation/)** — clearing, stripping topsoil, and grading a raw lot before excavation starts
- **[Grading & Leveling](/services/grading-leveling/)** — re-sloping and finish grading for an existing surface, no new digging involved
- **[Foundation Excavation](/services/foundation-excavation/)** — digging and leveling for footings and foundations
- **[Utility Excavation](/services/utility-excavation/)** — trenching and backfill for water, sewer, and utility lines

<!-- IMAGE GAP: Simple illustrated diagram or icon set for the Oregon811 process (call → wait 2 business days → utilities marked). Alt: "Oregon811 call-before-you-dig process." Lower priority than the photo gaps above; can launch as a simple illustrated 3-step graphic. -->

D&D Land Works covers all of this under one Oregon CCB license (#261742), for both residential and commercial properties throughout [Eugene](/locations/eugene/), [Springfield](/locations/springfield/), and the rest of Lane County. To see the full range of excavation services D&D Land Works offers, visit the [homepage](/) or [David Deggelman's about page](/about/).

## Get Your Dirt Work Scoped

Free estimate for excavation and earthmoving anywhere in Lane County.

**Call 541-401-8726** → [tel:5414018726](tel:5414018726)
**Or [get a free estimate](/contact/)**

---

## Schema (JSON-LD)

Note on `Speakable`: `cssSelector` values below assume heading `id` attributes are added when this content is placed into the Astro template, matching the pattern used in `home-content.md` and `site-preparation-content.md` — add these ids during the Astro build step; they don't exist in this markdown draft.

```json
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://www.ddlandworks.com/services/excavation/#service",
      "name": "Excavation and Grading",
      "serviceType": "Excavation and Grading",
      "description": "Excavation and grading is general earthmoving work: cutting material from high points, filling low points, and bringing a site to the elevation a project needs, whether that's a foundation, a pond, a driveway, a building pad, or a utility line trench. D&D Land Works provides excavation and grading for residential and commercial projects throughout Eugene, Springfield, and Lane County, Oregon, using an excavator, dozer, and compaction equipment matched to the site.",
      "url": "https://www.ddlandworks.com/services/excavation/",
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
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What's the difference between excavation and grading?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Excavation removes earth to create space, a foundation, a pond, a trench. Grading shapes the surface for drainage and elevation once material is in place. On a real job they often happen as one continuous operation rather than two separate phases. If your project involves a new dig, this page covers it; for standalone re-sloping or yard leveling with nothing new being dug, see grading and leveling instead."
          }
        },
        {
          "@type": "Question",
          "name": "How much does excavation cost?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "General ranges run roughly $1,400-$6,000 for a typical residential project, or $2.50-$15 per cubic yard for standard soil, clearly labeled as general and not a quote for your specific lot. Pricing comes in a few real forms, hourly, per-cubic-yard, or flat per-project, depending on how the job is scoped. A free on-site estimate is the only accurate way to price a specific project."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if the crew hits rock during excavation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "It's a real, explainable cost driver, not a bait-and-switch. Standard excavation runs roughly $5-$15 per cubic yard; hitting solid rock can push that to $50-$200 per cubic yard depending on whether it needs ripping or blasting. Knowing that upfront is the point, not finding out mid-job with no warning."
          }
        },
        {
          "@type": "Question",
          "name": "What's the difference between residential and commercial excavation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Residential jobs typically use compact machines, mini excavators and skid steers, moving at most a few hundred cubic yards. Commercial jobs are measured in acres, with full-size equipment and sometimes multiple crews working in phases. Either way, the process is the same: a real site visit and a written estimate, not a phone-quoted guess."
          }
        },
        {
          "@type": "Question",
          "name": "What equipment is used for excavation work?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "An excavator handles digging and rock work, a dozer pushes and shapes material across larger cuts, and compaction equipment runs behind the fill. What shows up depends on the site, a tight in-town lot needs a smaller machine than an acreage parcel with a long haul road."
          }
        },
        {
          "@type": "Question",
          "name": "Do I need to call 811 before digging in Oregon?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Oregon811 (the Oregon Utility Notification Center) requires at least two business days' advance notice before digging, and locate requests are free. D&D Land Works makes that call before starting any dig, as Oregon law requires."
          }
        },
        {
          "@type": "Question",
          "name": "Do I need a permit to excavate in Lane County?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "It depends on scope. A Lane County permitting guide puts the Grading and Fill Permit threshold at roughly 50 cubic yards moved or a cut/fill slope steeper than roughly 2:1, confirm the exact figure for your project with Lane County's Land Management Division rather than treating that as an exact, guaranteed number. See site preparation for the fuller permit picture."
          }
        },
        {
          "@type": "Question",
          "name": "How long does excavation take?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Often just a few days for a residential job once permits and site prep are done. Commercial or multi-building excavation commonly runs 1 to 3-plus weeks depending on scope, access, and how much material has to move."
          }
        },
        {
          "@type": "Question",
          "name": "Can you excavate for a pond, driveway, or utility line, or just foundations?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes to all of them. D&D Land Works scopes foundation digs, ponds, driveways and access roads, and utility runs individually, walking each site rather than treating every job as the same generic dig."
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
          "name": "Excavation & Earthmoving",
          "item": "https://www.ddlandworks.com/services/excavation/"
        }
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://www.ddlandworks.com/services/excavation/#webpage",
      "speakable": {
        "@type": "SpeakableSpecification",
        "cssSelector": [
          "#whats-the-difference-between-excavation-and-grading",
          "#what-equipment-shows-up-on-the-job",
          "#does-dd-call-before-digging",
          "#can-i-rent-an-excavator-and-do-this-myself"
        ]
      }
    }
  ]
}
```

---

**Note:** The mandatory humanizer pass is complete — the editable prose sections (everything outside the FAQ block and AI citation block, both preserved verbatim per the brief since the FAQ mirrors the JSON-LD schema) had 3 em-dash constructions converted to periods and 5 repeated "X, not Y" tailing-negation constructions varied into different phrasing, since that pattern was starting to repeat in nearly every section. No facts, numbers, hedged permit/pond-permitting language, Oregon811 claims, links, headings, FAQ content, or schema were changed. No pricing, founding year, address, hours, or review counts were invented; all cost ranges are general national/Oregon-labor-adjusted figures, explicitly labeled as such, not Lane-County-exact numbers or a quote. The Lane County Grading and Fill Permit threshold (50 cubic yards / 2:1 slope) and the OSHA trench-safety figures (5 ft protective-system threshold, 4 ft/25 ft safe-access threshold) are cited with the same numbers and hedging already shipped in `site-preparation-content.md` and `home-content.md` respectively, not restated with different figures. The pond-permitting OWRD/DSL framework (9.2 acre-foot threshold, 100+ foot waterway setback) is hedged per `07-oregon-authority.md` §4's single-source caveat. Oregon811's 2-business-day advance-notice requirement is stated as confirmed fact per the same file's direct-verification note, kept separate from the unrelated 30-day locate-ticket validity window (not mentioned on this page, since it doesn't change any customer-facing claim here). Placing this into `site/src/pages/services/excavation.astro` (or a test route) is a separate, later step and is not part of this task. No WordPress reference appears anywhere in this file.
