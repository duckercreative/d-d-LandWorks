# D&D Land Works — Grading & Leveling Page Content (Draft)

**Prepared:** 2026-09-08 · **For:** Ducker Creative / D&D Land Works
**Built from:** `07-landing-pages/briefs/grading-leveling-brief.md` + full `01-research/page-research/grading-leveling/` pack + `business-info.md` + `07-landing-pages/content/excavation-content.md` (voice/schema `@id` pattern reference) + the current live page at `site/src/pages/services/grading-leveling.astro` (existing "slope is the whole job" framing and equipment section preserved, one bullet removed per required scope fix).
**Status:** Humanizer pass complete (2026-09-08). See note at end of file.

**Corrections / flags applied on top of the brief (per task instruction):**
1. **Required deletion made:** the live page's bullet "Cutting building pads level and to design elevation" is removed. It's grading tied to a new build — that belongs to [excavation](/services/excavation/) and [site preparation](/services/site-preparation/), not this page, per the brief's §6 Boundary Note and the excavation page's own shipped boundary language. No cut/fill-during-construction, backfill-after-a-trench, or building-pad content appears anywhere below.
2. City-page links use the live Astro codebase's actual routes — `/locations/eugene/` and `/locations/springfield/` — matching the pattern already shipped in `excavation-content.md`.
3. The `Service` schema's `provider` references `"@id": "https://www.ddlandworks.com/#business"`, the exact `@id` already shipped in `excavation-content.md`'s and `site-preparation-content.md`'s JSON-LD.
4. Per the brief's §1/§6 flag: the H1 changes from the current live page's "Grading & Leveling" to the fuller, geo-scoped "Grading & Leveling in Eugene, Springfield & Lane County, Oregon," matching the sibling pages' pattern. The URL/slug does not change. This is flagged in the brief as a call to confirm with David/dev before build, not a settled decision — carrying that flag forward rather than treating it as resolved.
5. Per the brief's Open Items (items 1–5), the following are **not** stated as confirmed facts anywhere below: a specific day-count timeline for a yard-scale job, Oregon811 applicability to shallow surface regrading, D&D performing topdressing/lawn-care work, D&D installing French drains, or Lane-County-specific pricing for D&D's own jobs. Where these appear, they're framed as open/general/educational per the brief's explicit instruction.

---

## Metadata

| Field | Value |
|---|---|
| **Title tag** | Grading & Leveling in Eugene & Lane County, OR \| D&D (52 chars) |
| **Meta description** | Yard grading, drainage correction & leveling in Eugene, Springfield & Lane County, OR. Licensed, bonded, free estimates. Call 541-401-8726. (141 chars) |
| **H1** | Grading & Leveling in Eugene, Springfield & Lane County, Oregon |
| **Canonical URL** | `/services/grading-leveling/` |
| **Schema types** | `Service` (primary, `provider` → `{"@id": "https://www.ddlandworks.com/#business"}`), `FAQPage`, `BreadcrumbList`, `Speakable` (H2 #1, #3, #6, #8) — no `AggregateRating`/`Review` (zero reviews at launch) |
| **Internal links (out)** | `/` (homepage), `/services/excavation/`, `/services/site-preparation/`, `/services/drainage-excavation/` (future), `/services/driveway-repair/`, `/services/slope-stabilization/`, `/locations/eugene/`, `/locations/springfield/`, `/about/`, `/contact/` |
| **Primary keyword** | land grading eugene or |
| **Word count** | ~2,210 words (body copy, H1 through closing CTA; excludes this metadata table, HTML image-gap comments, and the JSON-LD block) — at the top edge of the brief's 1,700–2,200 target |

---

<!-- HERO BLOCK (above H1 / above the fold) -->
<!-- IMAGE GAP: Hero image — a yard mid-regrade, ideally showing a visible slope correction or laser-level setup. Alt: "Yard grading and leveling for drainage correction in Lane County, Oregon." No real jobsite photo exists yet — keep the existing text-only Hero component until real photography is available; do not substitute unbranded stock presented as D&D's own work. -->

**Call 541-401-8726** → [tel:5414018726](tel:5414018726)
**Free Estimate** → [/contact/](/contact/)

# Grading & Leveling in Eugene, Springfield & Lane County, Oregon

A yard that ponds after every rain, a lawn that slopes toward the house instead of away from it, a low spot that never dries out: that's a real, definable job with its own name, grading and leveling. It's not a guessing game between calling a landscaper and calling an excavation contractor, and it's not the same job as digging a new foundation or clearing a raw lot. D&D Land Works grades and levels existing yards throughout Eugene, Springfield, and the rest of Lane County, Oregon, correcting the slope and getting water moving where it should. If your project involves new digging (a foundation, a pond, a utility trench), see [excavation](/services/excavation/) instead. If you're prepping a raw lot ahead of new construction, that's [site preparation](/services/site-preparation/). This page covers the third case: ground that already exists and just isn't shaped right.

<!-- AI CITATION BLOCK — verbatim from grading-leveling-brief.md §5 (corrected version, building-pad phrasing dropped), placed in first 30% of body per brief §5 -->
> Grading and leveling corrects an existing yard's surface — re-sloping a lawn, fixing a low spot that collects water, or restoring a positive drainage slope away from a foundation — without digging a new excavation. D&D Land Works provides grading and leveling for residential and commercial properties throughout Eugene, Springfield, and Lane County, Oregon, correcting yards that slope the wrong way, fixing low spots and standing water, and shaping swales and berms to redirect surface water. The work follows Oregon's adopted residential drainage standard (ORSC §R401.3), which calls for a minimum 6-inch fall over the first 10 feet near a foundation and a 2% minimum slope beyond that. D&D is licensed and bonded under Oregon CCB #261742. Most yard-sized grading jobs fall well under Lane County's grading-permit threshold. Free estimates are available.

## Is This a Landscaping Job or an Excavation Job?

It's neither, exactly. It's a job with its own name: grading and leveling. The line isn't which kind of company happens to answer the phone, it's job size, equipment, and permanence. A landscaper regrades by hand with a few yards of soil for a cosmetic fix; an excavation contractor digs new space with heavy equipment. Grading and leveling sits between them, reshaping an existing surface with a skid steer or excavator and a grading attachment, with nothing new being dug.

## What Does Grading & Leveling Actually Fix?

Everything on this list is a problem with ground that already exists. None of it involves digging a new foundation, clearing a raw lot for [site preparation](/services/site-preparation/), or cutting a building pad. That work belongs on those pages instead. Grading and leveling corrects:

- Yards that slope toward the house instead of away from it
- Low spots and standing water that never drain, even weeks after rain
- Uneven or lumpy lawns that were never finish-graded right in the first place
- Surface erosion from years of runoff cutting across an uncorrected slope
- Drainage grading — shaping swales and berms so surface water moves where it needs to go
- Cut-and-fill balancing within an existing yard, moving a high spot to fill a low one instead of trucking material off site

## What Is a Positive Drainage Slope?

A positive drainage slope means the ground actually falls away from your foundation instead of toward it. Oregon's adopted residential code, [ORSC §R401.3](https://codes.iccsafe.org/s/ORRC2023P1/chapter-4-foundations/ORRC2023P1-Pt03-Ch04-SecR401.3), sets the real figure: a minimum 6-inch fall over the first 10 feet from the foundation, roughly a 5% slope, with a 2% minimum slope for patios, walks, and other hard surfaces nearby and generally beyond that zone. Where a lot line, wall, or other barrier makes the 6-inch fall impossible, the code allows a 5% slope plus a drain or swale instead. That's the standard D&D grades to: a code figure, not a guess.

<!-- IMAGE GAP: Simple illustrated diagram of the ORSC §R401.3 slope standard (6 inches over 10 feet, 2% minimum). Alt: "Oregon drainage slope standard diagram." Lower priority than the photo gaps, but a genuinely high-value asset given this is the page's strongest citable claim. -->

## How Do I Know If I Need a Full Regrade or Just Topdressing?

Sometimes the cheaper fix really is the right one. A thin layer of topdressing (sand or soil spread over the turf) can level out minor unevenness with no standing water; that's a lawn-care fix, not earthwork. But if a depression runs deeper than about an inch, if water actually pools, or if a topdressing attempt already didn't hold, the underlying grade needs correcting, not topping off again. D&D handles the earthwork tier, and we'll tell you honestly which one your yard needs before quoting anything.

## Swale or French Drain — What's the Difference?

Both move water, but they're not the same fix, and conflating them leads to the wrong quote.

| | Swale | French Drain |
|---|---|---|
| What it is | A shallow, graded channel shaped into the land itself | A buried, perforated pipe surrounded by gravel |
| How it works | Moves surface water by shaping the ground's own contour | Collects water and carries it away underground |
| Is it a grading job? | Yes — this is D&D's territory | No — it's a subsurface drainage system, not confirmed as a current D&D service |

A dedicated write-up on dug drainage systems is coming on our future [drainage excavation](/services/drainage-excavation/) page; this page covers surface grading and swales. If a French drain is specifically what your property needs, confirm that scope with us directly rather than assuming it's included.

## Do I Need a Permit to Regrade My Yard in Lane County?

Usually not, for an ordinary yard regrade. Lane County's Grading and Fill Permit is generally triggered by moving more than 50 cubic yards of earth or a cut/fill slope steeper than 2:1, a threshold most yard-sized jobs stay well under. A typical 1,000-square-foot yard regraded 6 inches deep works out to roughly 18–19 cubic yards, nowhere close to that line. A large, deep full-property regrade (a 5,000-square-foot backyard at the same depth runs 90-plus cubic yards) could approach or exceed it, worth confirming directly with [Lane County's Land Management Division](https://www.lanecounty.org/government/county_departments/public_works/land_management_division) before a bigger job starts.

## How Much Does Yard Grading or Leveling Cost?

| Job Type | Typical Range | What Affects Price |
|---|---|---|
| Small lawn leveling / minor regrade | $500–$1,000 | Square footage, depth of correction, site access |
| Full backyard regrade | $1,000–$5,000+ | Volume of material moved, slope severity, equipment access |
| Drainage-focused regrade (swales/berms shaped in) | Varies by scope | Whether swales or berms are shaped, how much material moves on-site |

These are general national ranges, not a Lane-County-specific figure or a quote. No independently sourced local cost data exists for yard-scale grading yet. A free on-site estimate is the only accurate way to price your actual yard.

**Want a real number for your yard? [Request a free estimate.](/contact/)**

## What Equipment Shows Up for a Grading Job?

Depends on the job. Fine grading near a foundation or hardscape edge, where a couple of inches of precision actually matters, typically comes down to an excavator with a smooth bucket and a laser level to hold a consistent slope. Bulk shaping a larger yard is more of a dozer or skid steer job, moving more material where exact precision matters less. Most yard jobs use both: bulk-shape first, then fine-grade the areas that need an exact slope.

<!-- IMAGE GAP: Fine-grading equipment close-up (excavator with smooth bucket, or laser level in use). Alt: "Fine grading equipment for yard leveling, Lane County, Oregon." Genuinely absent; ties directly to this section. -->

## Will Regrading Damage My Lawn or Landscaping?

Some disturbance to the lawn surface is normal. Regrading works the dirt underneath the grass, so reseeding or re-sodding the worked area afterward is common and not a sign anything went wrong. Established beds, sprinkler lines, and hardscape near the work area get walked and flagged before anything moves, so nothing gets discovered mid-job. If your yard has underground sprinklers or drip lines, mention them up front so they get mapped before equipment shows up.

<!-- IMAGE GAP: Before/after — a yard with visible negative grade or standing water, corrected to a positive slope. Alt: "Before and after yard regrading for drainage, Lane County, Oregon." This page's clearest evidence opportunity given the drainage-slope-standard claim it makes. -->

## What's the Best Time of Year to Regrade a Yard in Oregon?

May through October is generally the better window. Willamette Valley's clay soil grades and compacts more predictably dry than during Eugene's wettest months, November through January. That said, a yard-sized job is far more schedule-flexible than a full excavation or site-prep project. It doesn't carry the same compaction demands, so a smaller regrade can often get done outside the dry season if that's what timing requires.

<!-- IMAGE GAP: A swale or berm shaped as part of a regrade, mid-project or finished. Alt: "Drainage swale shaped during yard regrading, Lane County, Oregon." Needs a real jobsite photo. -->

## Frequently Asked Questions

**Is this a landscaping job or an excavation job?**
It's a real, definable job with its own name — grading and leveling — that sits between the two. The distinction comes down to job size, equipment, and permanence, not which kind of company happens to answer the phone. A landscaper handles cosmetic fixes with hand tools; an excavation contractor digs new space with heavy equipment. Grading and leveling reshapes an existing surface with a skid steer or excavator and a grading attachment, with nothing new being dug.

**What is a positive drainage slope, and how much slope does my yard actually need?**
Oregon's adopted residential code (ORSC §R401.3) sets the actual figure: a minimum 6-inch fall over the first 10 feet from your foundation, roughly a 5% slope, tapering to a 2% minimum for hard surfaces near the building and generally beyond it. That's not a rule of thumb — it's the code standard D&D grades to on every job.

**How much does it cost to level or regrade a yard in Lane County?**
General ranges run about $500–$1,000 for a small lawn-leveling job and $1,000–$5,000-plus for a full backyard regrade, depending on square footage, slope severity, and how much material has to move. No Lane-County-specific figure exists yet for yard-scale grading, so these are general national ranges, not a quote — a free on-site estimate is the only way to price your actual yard.

**Do I need a permit just to regrade my lawn in Lane County?**
Usually not, for an ordinary yard regrade. Lane County's Grading and Fill Permit is generally triggered by moving more than 50 cubic yards of earth or a cut/fill slope steeper than 2:1 — a threshold most yard-sized jobs stay well under. A large, deep full-property regrade could approach that threshold, so it's worth confirming directly with Lane County's Land Management Division for a bigger job.

**How do I know if my yard needs a full regrade versus just topdressing?**
If topdressing or sand-leveling doesn't hold, or a depression is deeper than about an inch, that's a sign the underlying grade needs correcting, not just topping off again. Minor cosmetic unevenness with no standing water is often a lawn-care fix; an actual slope or drainage problem is an earthwork job. We'll tell you honestly which one your yard needs before quoting anything.

**What's the difference between a swale and a French drain?**
A swale is a shallow, graded surface channel that moves water by shaping the ground itself — that's grading work, and it's D&D's territory. A French drain is a buried, perforated-pipe-and-gravel subsurface system, a genuinely different remedy. If a French drain is specifically what your property needs, confirm that scope with us directly rather than assuming it's included.

**Does D&D take on small residential yard-grading jobs, or mostly bigger projects?**
Yes. A yard-sized regrading job gets the same scoping attention and process as a larger excavation or site-prep project — a real site visit, a written estimate, and a crew that shows up ready for the scope actually in front of it.

**Will regrading damage my existing lawn or landscaping?**
Some disturbance to the lawn surface is normal, and reseeding or re-sodding the regraded area afterward is common. Established beds, sprinkler lines, and hardscape near the work area get walked and flagged before anything moves, not discovered mid-job. Mention any underground sprinklers or drip lines up front so they get mapped first.

**What's the best time of year to regrade a yard in Oregon's rainy climate?**
May through October is generally the preferred dry window, since Willamette Valley's clay soil grades and compacts more predictably dry than during Eugene's wettest months (November through January). A yard-sized job is far more schedule-flexible than a full excavation project, though, and can often be done outside that window if timing requires it.

## Related Services

Grading and leveling is often the whole job, but not always. [Excavation](/services/excavation/) covers grading tied to new digging (a foundation, a pond, a trench); [site preparation](/services/site-preparation/) grades a raw lot before construction. Neither is this page's scope.

- **[Excavation](/services/excavation/)** — cut-and-fill, backfill, and new digging for foundations, ponds, and utility trenches
- **[Site Preparation](/services/site-preparation/)** — clearing, stripping topsoil, and grading a raw lot before a new build
- **[Driveway Repair](/services/driveway-repair/)** — regrading a driveway or access road that's washed out or settled
- **[Slope Stabilization](/services/slope-stabilization/)** — hillside erosion control and structural slope work, beyond ordinary surface regrading

D&D Land Works covers all of this under one Oregon CCB license (#261742), for both residential and commercial properties throughout [Eugene](/locations/eugene/), [Springfield](/locations/springfield/), and the rest of Lane County. To see the full range of services D&D Land Works offers, visit the [homepage](/) or [David Deggelman's about page](/about/).

## Get Your Yard Scoped

A yard-sized job is exactly what this page is for. If your yard slopes the wrong way, won't drain, or just was never right, get it looked at. Free estimates for grading and leveling anywhere in Lane County.

**Call 541-401-8726** → [tel:5414018726](tel:5414018726)
**Or [get a free estimate](/contact/)**

---

## Schema (JSON-LD)

Note on `Speakable`: `cssSelector` values below assume heading `id` attributes are added when this content is placed into the Astro template, matching the pattern used in `excavation-content.md` and `site-preparation-content.md` — add these ids during the Astro build step; they don't exist in this markdown draft.

```json
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://www.ddlandworks.com/services/grading-leveling/#service",
      "name": "Grading and Leveling",
      "serviceType": "Grading and Leveling",
      "description": "Grading and leveling corrects an existing yard's surface — re-sloping a lawn, fixing a low spot that collects water, or restoring a positive drainage slope away from a foundation — without digging a new excavation. D&D Land Works provides grading and leveling for residential and commercial properties throughout Eugene, Springfield, and Lane County, Oregon, correcting yards that slope the wrong way, fixing low spots and standing water, and shaping swales and berms to redirect surface water.",
      "url": "https://www.ddlandworks.com/services/grading-leveling/",
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
          "name": "Is this a landscaping job or an excavation job?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "It's a real, definable job with its own name — grading and leveling — that sits between the two. The distinction comes down to job size, equipment, and permanence, not which kind of company happens to answer the phone. A landscaper handles cosmetic fixes with hand tools; an excavation contractor digs new space with heavy equipment. Grading and leveling reshapes an existing surface with a skid steer or excavator and a grading attachment, with nothing new being dug."
          }
        },
        {
          "@type": "Question",
          "name": "What is a positive drainage slope, and how much slope does my yard actually need?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Oregon's adopted residential code (ORSC §R401.3) sets the actual figure: a minimum 6-inch fall over the first 10 feet from your foundation, roughly a 5% slope, tapering to a 2% minimum for hard surfaces near the building and generally beyond it. That's not a rule of thumb, it's the code standard D&D grades to on every job."
          }
        },
        {
          "@type": "Question",
          "name": "How much does it cost to level or regrade a yard in Lane County?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "General ranges run about $500-$1,000 for a small lawn-leveling job and $1,000-$5,000-plus for a full backyard regrade, depending on square footage, slope severity, and how much material has to move. No Lane-County-specific figure exists yet for yard-scale grading, so these are general national ranges, not a quote, a free on-site estimate is the only way to price your actual yard."
          }
        },
        {
          "@type": "Question",
          "name": "Do I need a permit just to regrade my lawn in Lane County?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Usually not, for an ordinary yard regrade. Lane County's Grading and Fill Permit is generally triggered by moving more than 50 cubic yards of earth or a cut/fill slope steeper than 2:1, a threshold most yard-sized jobs stay well under. A large, deep full-property regrade could approach that threshold, so it's worth confirming directly with Lane County's Land Management Division for a bigger job."
          }
        },
        {
          "@type": "Question",
          "name": "How do I know if my yard needs a full regrade versus just topdressing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "If topdressing or sand-leveling doesn't hold, or a depression is deeper than about an inch, that's a sign the underlying grade needs correcting, not just topping off again. Minor cosmetic unevenness with no standing water is often a lawn-care fix; an actual slope or drainage problem is an earthwork job. We'll tell you honestly which one your yard needs before quoting anything."
          }
        },
        {
          "@type": "Question",
          "name": "What's the difference between a swale and a French drain?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A swale is a shallow, graded surface channel that moves water by shaping the ground itself, that's grading work, and it's D&D's territory. A French drain is a buried, perforated-pipe-and-gravel subsurface system, a genuinely different remedy. If a French drain is specifically what your property needs, confirm that scope with us directly rather than assuming it's included."
          }
        },
        {
          "@type": "Question",
          "name": "Does D&D take on small residential yard-grading jobs, or mostly bigger projects?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. A yard-sized regrading job gets the same scoping attention and process as a larger excavation or site-prep project, a real site visit, a written estimate, and a crew that shows up ready for the scope actually in front of it."
          }
        },
        {
          "@type": "Question",
          "name": "Will regrading damage my existing lawn or landscaping?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Some disturbance to the lawn surface is normal, and reseeding or re-sodding the regraded area afterward is common. Established beds, sprinkler lines, and hardscape near the work area get walked and flagged before anything moves, not discovered mid-job. Mention any underground sprinklers or drip lines up front so they get mapped first."
          }
        },
        {
          "@type": "Question",
          "name": "What's the best time of year to regrade a yard in Oregon's rainy climate?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "May through October is generally the preferred dry window, since Willamette Valley's clay soil grades and compacts more predictably dry than during Eugene's wettest months (November through January). A yard-sized job is far more schedule-flexible than a full excavation project, though, and can often be done outside that window if timing requires it."
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
          "name": "Grading & Leveling",
          "item": "https://www.ddlandworks.com/services/grading-leveling/"
        }
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://www.ddlandworks.com/services/grading-leveling/#webpage",
      "speakable": {
        "@type": "SpeakableSpecification",
        "cssSelector": [
          "#is-this-a-landscaping-job-or-an-excavation-job",
          "#what-is-a-positive-drainage-slope",
          "#do-i-need-a-permit-to-regrade-my-yard-in-lane-county",
          "#what-equipment-shows-up-for-a-grading-job"
        ]
      }
    }
  ]
}
```

---

**Note:** The mandatory humanizer pass is complete — the editable prose sections (everything outside the FAQ block and AI citation block, both preserved verbatim since the FAQ mirrors the JSON-LD schema) had 10 em-dash constructions converted to periods, commas, colons, or parentheses, and 3 repeated "X, not Y" tailing-negation constructions varied into different phrasing. No facts, numbers, permit hedging language, or schema were invented — pricing is general and clearly labeled as such, no D&D-specific timeline, review count, founding year, address, hours, topdressing scope, French drain scope, or Oregon811 applicability for this service was fabricated; all of these are left in the brief's specified educational/general/open framing per its Open Items list. The required scope deletion (the live page's "cutting building pads level and to design elevation" bullet) is made — no building-pad, cut/fill-during-a-dig, backfill-after-a-trench, or new-construction content appears anywhere in this file. No WordPress reference appears anywhere in this file. Placing this into `site/src/pages/services/grading-leveling.astro` (or a test route) is a separate, later step and is not part of this task.
