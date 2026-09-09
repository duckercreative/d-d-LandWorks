# D&D Land Works — Land Clearing Page Content (Draft)

**Prepared:** 2026-09-08 · **For:** Ducker Creative / D&D Land Works
**Built from:** `07-landing-pages/briefs/land-clearing-brief.md` + full `01-research/page-research/land-clearing/` pack + `business-info.md` + `07-landing-pages/content/grading-leveling-content.md` (voice/tone and schema `@id` pattern reference) + `07-landing-pages/content/home-content.md` (the shipped scope-disclosure sentence this page must not contradict) + the current live page at `site/src/pages/services/land-clearing.astro` (existing "From Overgrown to Buildable" section, equipment section, and Often-Paired-With section preserved and re-anchored, not rewritten from scratch) + the current live page at `site/src/pages/resources/land-clearing-cost-per-acre-oregon.astro` (reused Angi-sourced cost figures for site-wide consistency).

**Status:** Humanizer pass complete (2026-09-08). See note at end of file.

---

## CORRECTIONS / FLAGS — READ BEFORE THIS PAGE MOVES ANYWHERE

1. **⚠️ REQUIRES DAVID'S EXPLICIT SIGN-OFF BEFORE PUBLISH — NOT RESOLVED, DO NOT TREAT AS SETTLED.** This page describes tree felling and stump grubbing **only** as steps that happen within the footprint of a whole-parcel land-clearing job — never as a standalone "tree removal" or "stump grinding" service D&D sells on its own. This framing is the brief's own inference from the already-shipped live page copy, cross-checked against a competitor's FAQ (Danco Excavation) and general industry practice. It is **not** independently confirmed against `business-info.md`, which does not list "Tree Removal" or "Stump Grinding" as their own line items, and it sits directly against `home-content.md`'s already-shipped disclosure that D&D "does not perform tree removal, stump grinding, forestry mulching..." **Before this page publishes, confirm directly with David: does D&D remove trees and grub stumps only as steps within a whole-parcel clearing job (this draft's framing), or does D&D in fact take on standalone single-tree-removal or standalone stump-grinding jobs independent of a broader clearing project?** See the brief's Open Items #1 for full detail. The sentences carrying this framing are quoted in the summary reply that accompanies this file.
2. **Forestry mulching is NOT introduced as a D&D service anywhere in this file.** The equipment section names a brush hog/mulching-head attachment, but only in its confirmed role of clearing lower growth — not as a distinct "forestry mulching" service method. This is unconfirmed per the brief's Open Items #2.
3. **The Lane County unincorporated-area "no tree ordinance found" statement is hedged, not stated as an absolute**, per the brief's Open Items #3 and `07-oregon-authority.md` §3 — the research pass was not exhaustive of every Lane County code chapter. Every mention says "confirm directly with Lane County" rather than asserting no permit applies.
4. **No penalty dollar figure for unpermitted burning is stated anywhere** (none was found under ODF, LRAPA, or DEQ) — per Open Items #4.
5. **No Lane-County-specific per-acre price is introduced.** The cost table reuses the exact Angi-sourced national/Oregon-adjusted figures already shipped on `/resources/land-clearing-cost-per-acre-oregon/` ($1,200–$8,000/acre nationally; $600–$1,300 light brush/grass; $2,100–$4,100 shrubs/small trees; $3,600–$6,100+ heavy timber), reframed by project type (construction-grade vs. pasture/acreage-reclamation) rather than introducing a third, different number — per Open Items #5.
6. **No timeline figure (days-per-acre) is stated anywhere** — per Open Items #6; cost/timeline framing stays tied to vegetation density, terrain, and disposal method instead.
7. **H1 change flag, carried forward from the brief:** the current live page's H1 is simply "Land Clearing." This draft uses the fuller, geo-scoped "Land Clearing in Eugene, Springfield & Lane County, Oregon" for cross-page consistency with the other shipped service pages. **Flag for David/dev confirmation before build** — the brief recommends it but marks it as a change to an already-live page's H1, not a settled decision. The URL/slug does not change.
8. City-page links use the live Astro codebase's actual routes: `/locations/eugene/land-clearing/` and `/locations/springfield/land-clearing/` (the already-live city × service pages named in the brief's §9 internal-linking plan), matching the pattern the research pack found already in production.
9. The `Service` schema's `provider` references `"@id": "https://www.ddlandworks.com/#business"`, the exact `@id` already shipped in `grading-leveling-content.md`, `excavation-content.md`, and `site-preparation-content.md`'s JSON-LD.
10. No WordPress references appear anywhere in this file. No pricing specific to D&D's own jobs, review counts, founding year, address, or hours is invented anywhere — see `business-info.md`'s Open Items list, unchanged.

---

## Metadata

| Field | Value |
|---|---|
| **Title tag** | Land Clearing in Eugene & Lane County, OR \| D&D (47 chars) |
| **Meta description** | Land clearing for wooded lots, pastures & overgrown acreage in Eugene, Springfield & Lane County, OR. Licensed, bonded, free estimates: 541-401-8726. (149 chars) |
| **H1** | Land Clearing in Eugene, Springfield & Lane County, Oregon |
| **Canonical URL** | `/services/land-clearing/` |
| **Schema types** | `Service` (primary, `provider` → `{"@id": "https://www.ddlandworks.com/#business"}`), `FAQPage`, `BreadcrumbList`, `Speakable` (H2 #2, #5 lead-in, #6) — no `AggregateRating`/`Review` (zero reviews at launch) |
| **Internal links (out)** | `/` (homepage), `/services/brush-clearing/` (sideways, explicit "if it's just brush/overgrowth" framing), `/services/site-preparation/`, `/services/grading-leveling/`, `/resources/land-clearing-cost-per-acre-oregon/`, `/locations/eugene/land-clearing/`, `/locations/springfield/land-clearing/`, `/about/`, `/contact/` |
| **Primary keyword** | land clearing eugene or / land clearing eugene oregon |
| **Co-primary keyword** | land clearing lane county or |
| **Word count** | ~2,448 words (body copy, H1 through closing CTA; excludes this metadata table, HTML image-gap comments, and the JSON-LD block) — within the brief's 2,000–2,500 target |

---

<!-- HERO BLOCK (above H1 / above the fold) -->
<!-- IMAGE GAP: Hero image — a wooded Lane County lot mid-clearing, or a cleared parcel showing felled trees/stumps staged for disposal. Alt: "Land clearing for a wooded lot in Lane County, Oregon." No real jobsite photo exists yet — keep the existing text-only Hero component's copy unchanged until real photography is available; do not substitute unbranded stock presented as D&D's own work. -->

**Call 541-401-8726** → [tel:5414018726](tel:5414018726)
**Free Estimate** → [/contact/](/contact/)

# Land Clearing in Eugene, Springfield & Lane County, Oregon

Land clearing is the full-parcel version of opening up a property: felling standing trees, grubbing stumps and root balls, and cutting brush down to bare, usable ground. If your property doesn't have standing timber to fell or stumps to grub (just overgrowth, scrub, and volunteer saplings), that's a lighter job with a lower cost tier, and it's called [brush clearing](/services/brush-clearing/) instead. See that page if it sounds closer to what you're actually dealing with. D&D Land Works provides land clearing throughout Eugene, Springfield, and the rest of Lane County, Oregon, for wooded lots being opened up ahead of a new build and for overgrown or neglected acreage being reclaimed for pasture or general use. Scope gets set on a walk-through, not a guess from a satellite photo.

<!-- AI CITATION BLOCK — verbatim from land-clearing-brief.md §5 / 00-research-pack.md §12, placed in first 30% of body per brief §5 -->
> Land clearing removes trees, stumps, brush, and debris from a property to open it up for construction, pasture, or general use. It's a heavier-scope, more expensive service than brush clearing, which targets only smaller vegetation — blackberry, scotch broom, saplings — without felling standing timber or grubbing stumps. D&D Land Works provides land clearing for residential and commercial properties throughout Eugene, Springfield, and Lane County, Oregon, including wooded lots being prepared for a new build, and overgrown or neglected acreage being reclaimed for pasture or general use. Work typically includes felling and removing trees within the clearing footprint, grubbing stumps and root balls, cutting and hauling brush, chipping or burning debris where permitted, and rough grading the cleared area. Trees and features a customer wants kept can be flagged and preserved during the walk-through. D&D Land Works is licensed and bonded under Oregon Construction Contractors Board license CCB #261742, serving Eugene, Springfield, and the rest of Lane County. Free estimates are available.

## From Overgrown to Buildable

Lane County has a lot of parcels that look nothing like the plat map once you're standing on them. Himalayan blackberry (*Rubus armeniacus*) has taken over the fence line, alder has grown up along a drainage, and a decade of downed limbs sits in the understory. Before a foundation, a driveway, or even a survey crew can do useful work, that ground needs to be opened up.

Land clearing covers the full range, from a couple acres of blackberry and scrub to standing timber that needs to come down and get hauled or chipped. That range only gets pinned down after David walks the property, not from a phone call or a satellite photo.

- Felling and removing trees within the clearing footprint
- Grubbing stumps and root balls within that same footprint, as part of opening up the parcel, not a standalone stump-grinding job on its own
- Cutting and hauling brush, Himalayan blackberry, and scotch broom
- Chipping or burning debris where permitted
- Rough grading the cleared area to a usable, walkable state
- Flagging and preserving trees or features you want kept, at the walk-through, before anything's cut

## What's the Difference Between Land Clearing and Brush Clearing?

Land clearing is the full-parcel service: felling standing trees, grubbing stumps and root balls, and clearing to bare, buildable ground. Brush clearing is the lighter service for overgrowth, scrub, and saplings: no standing timber to fell, no stumps to grub, and a lower cost tier to match. If it's just brush, overgrowth, or scrub on your property, with no timber and no stumps involved, see [brush clearing](/services/brush-clearing/) instead of this page.

## What Happens to the Trees, Stumps, and Debris?

Once trees are felled within the clearing footprint and stumps are grubbed, the material goes one of three ways, decided at the walk-through based on volume, site access, and what's permitted for that property:

- **Hauled off-site.** The most straightforward option where there's road access for a dump truck. It adds a haul cost but leaves nothing behind on the property.
- **Chipped or mulched on-site.** Usually cheaper than hauling when the ground can take it, but it leaves material behind and changes how that part of the site looks and drains afterward.
- **Burned where permitted.** Often the least expensive way to deal with slash piles from a clearing job, but only where a burn permit and the right conditions apply. See the permit section below for which agency actually governs that.

None of these gets decided as a surprise mid-job. It's scoped and priced up front, during the walk-through.

## How Much Does Land Clearing Cost?

Pasture reclamation and construction-grade clearing are priced differently for a reason: it's a real difference in how much stump and root work the job actually needs, not just a marketing tier.

| Project Type | Typical Range | What Drives It |
|---|---|---|
| Pasture / acreage-reclamation clearing | Toward the lower end of the vegetation-density ranges below | Stumps can be ground low rather than fully pulled, and the ground doesn't need a finish-grade pass since it's not going to be built on |
| Construction-grade clearing | Toward the higher end of the same vegetation-density ranges | Full stump and root-ball extraction plus a finish-grade pass, because the ground has to end up buildable |

Within either project type, vegetation density is the other big driver. Per [Angi's 2026 cost data](https://www.angi.com/articles/how-much-does-it-cost-clear-land.htm), land clearing nationally runs $1,200 to $8,000 per acre: roughly $600–$1,300/acre for light brush and grass, $2,100–$4,100/acre for shrubs and small trees, and $3,600–$6,100 or more per acre for heavy timber. These are general estimates, not a Lane County–specific figure or a quote for your property. See [our full land clearing cost breakdown](/resources/land-clearing-cost-per-acre-oregon/) for the complete numbers.

**Want a real number for your property? [Get a free on-site estimate.](/contact/)**

## Do I Need a Permit to Clear Trees or Burn Debris in Lane County?

It depends on where the property is and what's happening to the debris. This is genuinely the most confusing part of land clearing in Lane County, because as many as five different agencies can apply, and each one governs something different.

| Situation | Governing Agency | What It Requires |
|---|---|---|
| Removing a tree inside Eugene city limits | [City of Eugene](https://eugene.municipal.codes/EC/9.6885) (Eugene Code 9.6885) | A permit to remove a "significant tree" — a live tree at least 8 inches DBH (diameter at breast height, measured 4.5 feet up). An added tier applies to city-designated "exceptional" or landmark trees, which can require a special permit and a public hearing. |
| Removing a tree inside Springfield city limits | [City of Springfield](https://www.springfield-or.gov/) | A permit generally required over roughly 6 inches DBH, for trees in the public right-of-way, or for designated heritage/significant trees (commonly 24+ inches DBH). Springfield's own page currently notes the fee is waived — confirm current fee status before assuming that's still the case. |
| Burning slash from a clearing job on forestland | [Oregon Department of Forestry (ODF)](https://www.oregon.gov/odf/fire/pages/burn.aspx) | A burn permit, typically with about 7 days' advance registration, plus ODF sign-off on weather conditions and the volume being burned before it's approved. |
| Burning forest slash inside the Eugene-Springfield Urban Growth Boundary | [Lane Regional Air Protection Agency (LRAPA)](https://www.lrapa-or.gov/) | Prohibited outright inside the UGB; a letter permit applies in certain other LRAPA-covered fire districts elsewhere in the county. |
| Ordinary backyard yard-debris burning | [Oregon DEQ](https://www.oregon.gov/deq/aq/pages/burning-101.aspx) | Must be burned on the property of origin, attended at all times, with fire-extinguishing equipment on hand. |
| Clearing near a stream, wetland, or riparian buffer | [Oregon Department of State Lands (DSL)](https://www.oregon.gov/dsl/wetlands-waters/pages/removal-fill.aspx) | A Removal-Fill permit for moving 50 or more cubic yards of material in wetlands or waters of the state, and any amount within Essential Salmonid Habitat or a designated Scenic Waterway. |

This research did not find a standalone Lane County ordinance governing tree removal on unincorporated rural acreage, the way Eugene's and Springfield's city-limits rules do. Confirm directly with Lane County Planning & Development for a specific rural parcel before assuming no permit applies. The Oregon Forest Practices Act, which governs commercial timber-harvesting operations, generally isn't triggered by a one-time residential clearing job like a house lot or a pasture either, though that's also worth confirming directly with ODF if there's any doubt about a specific project. No specific penalty dollar figure exists for unpermitted burning under any of the agencies above. We're not going to guess at one.

**Not sure what applies to your parcel? [We'll walk it with you before anything's quoted.](/contact/)**

<!-- IMAGE GAP: Simple illustrated diagram or map graphic showing the Eugene/Springfield in-city tree-ordinance boundary vs. unincorporated Lane County. Alt: "Eugene and Springfield tree ordinance boundary, Lane County, Oregon." Lower priority than the photo gaps, but a genuinely high-value asset given how central the in-city-vs-rural distinction is to this section. -->

## Equipment on the Job

An excavator with a thumb or grapple attachment does most of the heavy lifting on a land-clearing job: pulling stumps, piling brush, loading debris. A brush hog or mulching head attachment handles lower growth without tearing up the topsoil underneath it. On a job like this it's the secondary tool for clearing under standing timber, not the primary one. Steep or wet ground changes which machine makes sense, which is part of why the walk-through happens before the quote.

<!-- IMAGE GAP: Excavator with thumb/grapple attachment pulling a stump or piling brush. Alt: "Excavator clearing stumps and brush, Lane County, Oregon." Genuinely absent from the live site; ties directly to this section. -->

## Residential and Commercial

Homeowners call for a couple acres to open up a building envelope or a garden. Builders call for full parcels ahead of a subdivision or a commercial pad. Either way, the scoping is the same: a real walk-through, not a phone-quoted guess. Licensed and bonded under CCB #261742, serving Eugene, Springfield, and the rest of Lane County.

<!-- IMAGE GAP: Before/after — an overgrown or timbered lot cleared to bare, buildable ground. Alt: "Before and after land clearing, Lane County, Oregon." This page's clearest evidence opportunity, directly supporting the "from overgrown to buildable" framing above. -->

## Often Paired With

Once a lot is cleared, most jobs move straight into [site preparation](/services/site-preparation/) or [grading and leveling](/services/grading-leveling/) to get the ground ready for what comes next. And if it turns out your project doesn't actually need full land clearing (no standing timber to fell, no stumps to grub, just overgrowth and scrub), see [brush clearing](/services/brush-clearing/) instead; it's a lighter, less expensive scope built for exactly that case.

<!-- IMAGE GAP: Debris pile staged for chipping, hauling, or burning. Alt: "Land clearing debris staged for disposal, Lane County, Oregon." Needs a real jobsite photo; ties directly to the debris-disposal section above. -->

## Frequently Asked Questions

**What's the difference between land clearing and brush clearing?**
Land clearing is the full-parcel service — felling standing trees, grubbing stumps, and clearing to bare ground. Brush clearing is the lighter service for overgrowth, scrub, and saplings, with no standing timber to fell and no stumps to grub. If your project is closer to that lighter case, see [brush clearing](/services/brush-clearing/) instead.

**Does land clearing include stump removal?**
Yes — grubbing stumps and root balls within the footprint of a clearing job is part of the service. That's different from hiring D&D for a standalone stump-grinding job on a single stump, independent of a broader clearing project. That's not a service D&D offers on its own.

**How much does land clearing cost per acre?**
Per Angi's 2026 data, land clearing nationally runs roughly $600–$1,300/acre for light brush and grass up to $3,600–$6,100 or more per acre for heavy timber. Construction-grade clearing (full stump extraction, finish grading) runs toward the higher end of any given vegetation tier compared to pasture/acreage-reclamation clearing at the same density. See [our full land clearing cost breakdown](/resources/land-clearing-cost-per-acre-oregon/) for the complete numbers.

**What's the difference between clearing land for building versus for pasture?**
Construction-grade clearing removes stumps and roots completely and finish-grades to bare, buildable ground. Pasture and acreage-reclamation clearing can leave low-ground stumps and skip the finish-grade pass, at meaningfully lower cost, because the ground doesn't need to be building-ready.

**What happens to the trees and brush after land clearing?**
Material gets hauled off-site, chipped or mulched on-site, or burned where permitted — each with different cost and site-condition implications. Which path makes sense depends on volume, site access, and what's allowed on that property, and it gets scoped during the walk-through.

**Do I need a permit to clear trees in Lane County?**
It depends on whether the property is inside Eugene or Springfield city limits, where a tree-removal permit applies above a set trunk diameter, or in unincorporated Lane County, where this research found no equivalent county-wide tree ordinance. Confirm directly with Lane County for a specific parcel before assuming no permit applies.

**Do I need a burn permit to burn slash piles after clearing land?**
Yes, if the land is forestland within an Oregon Department of Forestry protection district — ODF requires a permit and typically 7-day advance registration. That's separate from Lane Regional Air Protection Agency's rules, which prohibit forest slash burning inside the Eugene-Springfield Urban Growth Boundary, and from Oregon DEQ's backyard-burning rules for ordinary yard debris.

**Can I clear land near a stream or wetland in Oregon?**
Possibly not without a permit. Oregon Department of State Lands requires a Removal-Fill permit for moving 50 or more cubic yards of material in wetlands or waters of the state, and any amount within Essential Salmonid Habitat or a Scenic Waterway. Flag it during the walk-through if a stream, wetland, or riparian buffer is anywhere near the clearing area.

**Can a contractor preserve specific trees I want to keep?**
Yes — trees or features you want kept are flagged and preserved during the walk-through, before the quote is written, so nothing is decided or assumed on the day the crew shows up.

## Get Your Land Opened Up

A couple acres or a full parcel ahead of a subdivision, land clearing in Lane County gets scoped the same way: a real walk-through, a written estimate, and a clear line drawn between what's a land-clearing job and what's a lighter brush-clearing job instead. Free estimate for land clearing anywhere in Lane County.

**Call 541-401-8726** → [tel:5414018726](tel:5414018726)
**Or [get a free estimate](/contact/)**

To learn more about the company and the person behind it, visit [David Deggelman](/about/) on the About page. D&D Land Works also serves [Eugene](/locations/eugene/land-clearing/) and [Springfield](/locations/springfield/land-clearing/) directly for land clearing, alongside the rest of Lane County.

---

## Schema (JSON-LD)

Note on `Speakable`: `cssSelector` values below assume heading `id` attributes are added when this content is placed into the Astro template, matching the pattern used in `grading-leveling-content.md`, `excavation-content.md`, and `site-preparation-content.md` — add these ids during the Astro build step; they don't exist in this markdown draft.

```json
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://www.ddlandworks.com/services/land-clearing/#service",
      "name": "Land Clearing",
      "serviceType": "Land Clearing",
      "description": "Land clearing removes trees, stumps, brush, and debris from a property to open it up for construction, pasture, or general use. It's a heavier-scope, more expensive service than brush clearing, which targets only smaller vegetation without felling standing timber or grubbing stumps. D&D Land Works provides land clearing for residential and commercial properties throughout Eugene, Springfield, and Lane County, Oregon, including wooded lots being prepared for a new build and overgrown or neglected acreage being reclaimed for pasture or general use.",
      "url": "https://www.ddlandworks.com/services/land-clearing/",
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
          "name": "What's the difference between land clearing and brush clearing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Land clearing is the full-parcel service — felling standing trees, grubbing stumps, and clearing to bare ground. Brush clearing is the lighter service for overgrowth, scrub, and saplings, with no standing timber to fell and no stumps to grub. If your project is closer to that lighter case, see brush clearing instead."
          }
        },
        {
          "@type": "Question",
          "name": "Does land clearing include stump removal?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes — grubbing stumps and root balls within the footprint of a clearing job is part of the service. That's different from hiring D&D for a standalone stump-grinding job on a single stump, independent of a broader clearing project. That's not a service D&D offers on its own."
          }
        },
        {
          "@type": "Question",
          "name": "How much does land clearing cost per acre?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Per Angi's 2026 data, land clearing nationally runs roughly $600-$1,300/acre for light brush and grass up to $3,600-$6,100 or more per acre for heavy timber. Construction-grade clearing (full stump extraction, finish grading) runs toward the higher end of any given vegetation tier compared to pasture/acreage-reclamation clearing at the same density."
          }
        },
        {
          "@type": "Question",
          "name": "What's the difference between clearing land for building versus for pasture?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Construction-grade clearing removes stumps and roots completely and finish-grades to bare, buildable ground. Pasture and acreage-reclamation clearing can leave low-ground stumps and skip the finish-grade pass, at meaningfully lower cost, because the ground doesn't need to be building-ready."
          }
        },
        {
          "@type": "Question",
          "name": "What happens to the trees and brush after land clearing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Material gets hauled off-site, chipped or mulched on-site, or burned where permitted, each with different cost and site-condition implications. Which path makes sense depends on volume, site access, and what's allowed on that property, and it gets scoped during the walk-through."
          }
        },
        {
          "@type": "Question",
          "name": "Do I need a permit to clear trees in Lane County?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "It depends on whether the property is inside Eugene or Springfield city limits, where a tree-removal permit applies above a set trunk diameter, or in unincorporated Lane County, where this research found no equivalent county-wide tree ordinance. Confirm directly with Lane County for a specific parcel before assuming no permit applies."
          }
        },
        {
          "@type": "Question",
          "name": "Do I need a burn permit to burn slash piles after clearing land?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, if the land is forestland within an Oregon Department of Forestry protection district, ODF requires a permit and typically 7-day advance registration. That's separate from Lane Regional Air Protection Agency's rules, which prohibit forest slash burning inside the Eugene-Springfield Urban Growth Boundary, and from Oregon DEQ's backyard-burning rules for ordinary yard debris."
          }
        },
        {
          "@type": "Question",
          "name": "Can I clear land near a stream or wetland in Oregon?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Possibly not without a permit. Oregon Department of State Lands requires a Removal-Fill permit for moving 50 or more cubic yards of material in wetlands or waters of the state, and any amount within Essential Salmonid Habitat or a Scenic Waterway. Flag it during the walk-through if a stream, wetland, or riparian buffer is anywhere near the clearing area."
          }
        },
        {
          "@type": "Question",
          "name": "Can a contractor preserve specific trees I want to keep?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes — trees or features you want kept are flagged and preserved during the walk-through, before the quote is written, so nothing is decided or assumed on the day the crew shows up."
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
          "name": "Land Clearing",
          "item": "https://www.ddlandworks.com/services/land-clearing/"
        }
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://www.ddlandworks.com/services/land-clearing/#webpage",
      "speakable": {
        "@type": "SpeakableSpecification",
        "cssSelector": [
          "#whats-the-difference-between-land-clearing-and-brush-clearing",
          "#do-i-need-a-permit-to-clear-trees-or-burn-debris-in-lane-county",
          "#equipment-on-the-job"
        ]
      }
    }
  ]
}
```

---

**Note:** The mandatory humanizer pass (per CLAUDE.md's Carried-Forward Working Rules) is complete — the editable prose sections (everything outside the FAQ block and AI citation block, both preserved verbatim since the FAQ mirrors the JSON-LD schema) had 12 em-dash constructions converted to periods, colons, or parentheses, and a literal within-page duplicate sentence ("Scope gets set on a walk-through, not a guess from a satellite photo," which appeared twice almost back to back) was rewritten so it isn't repeated verbatim. The critical tree-felling/stump-grubbing scope-framing sentences were touched ONLY for punctuation (em dash to comma), never for wording, so that framing is unchanged and still requires David's sign-off per item #1 above. No WordPress references appear anywhere in this file. Placing this content into `site/src/pages/services/land-clearing.astro` (live or a test route) is a separate, later step and is not part of this task. **Item #1 in the Corrections/Flags section above — the tree-felling/stump-grubbing scope framing — must be confirmed with David before this page publishes in any form**, humanized or not.
