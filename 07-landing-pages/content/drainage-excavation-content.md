# D&D Land Works — Drainage Excavation Page Content (Draft)

**Prepared:** 2026-09-09 · **For:** Ducker Creative / D&D Land Works
**Built from:** `07-landing-pages/briefs/drainage-excavation-brief.md` + full `01-research/page-research/drainage-excavation/` pack + `business-info.md` + `docs/design-system.md` + `07-landing-pages/content/excavation-content.md` (voice/tone reference, JSON-LD `@id` pattern, and the exact OSHA/Oregon811 figures already shipped there) + `07-landing-pages/content/grading-leveling-content.md`'s "Swale or French Drain" section (referenced, not rebuilt) + `07-landing-pages/content/foundation-excavation-content.md`'s "What Does Oregon Require for Foundation Drainage?" section (referenced, not re-cited) + the current live page at `site/src/pages/services/drainage-excavation.astro` (existing opening hook and high-level "what this covers" framing preserved and corrected, not discarded).
**Status:** Humanizer pass complete (2026-09-09). See note at end of file.

**#1 OPEN ITEM — MUST BE CONFIRMED WITH DAVID BEFORE THIS PAGE PUBLISHES (do not resolve silently in either direction):**

**Whether D&D Land Works installs French drains, curtain drains, dry wells, or catch basins as a confirmed, standalone service is NOT confirmed fact.** `business-info.md` does not list buried-drainage-product installation among D&D's services or USPs. The shipped `grading-leveling-content.md` states directly that a French drain is "not confirmed as a current D&D service." The shipped `foundation-excavation-content.md` handles the physically identical technique (the ORSC R405 foundation drain) by leaving install scope "confirmed per job." The current live `drainage-excavation.astro` page, written before this project's research pipeline existed, already claims "Installing French drains along foundations and retaining walls" — but per this project's own established discipline (the same pattern applied to `land-clearing-content.md`'s tree-felling/stump-grubbing framing), an unverified claim already being live is not a confirmed fact.

**This draft ships using the conservative framing throughout:** D&D Land Works excavates and trenches for buried drainage systems — cutting the trench to depth and slope, backfilling with drain rock, pipe, and filter fabric. Whether the specific drainage product (French drain, catch basin, dry well) installation is D&D's own scope or coordinated with another trade is confirmed per job. **No sentence anywhere below states "D&D installs French drains" as a flat, standalone claim.** If David confirms the fuller installation claim before publish, the AI citation block, several FAQ answers, and the service-schema description can all be strengthened in a straightforward upgrade — see the brief's Open Items list for the full resolution path.

**Additional flags / open items carried forward from the brief (do not resolve silently):**

1. **Whether D&D installs or merely trenches for a sump pump** (likely a plumbing/electrical trade's scope) is unconfirmed — handled below with one honest disambiguating sentence, no claimed service.
2. **No Lane-County-specific per-linear-foot drainage pricing exists** in any research source — all cost data below is national/general, clearly labeled as such.
3. **Eugene's EC §6.610 exact current fee amounts** should be re-confirmed directly with Eugene's Engineering Department before quoting a specific dollar figure to a customer (direct fetch returned a 403 during research; the permit-required and who-can-pull-it facts are corroborated clearly enough to cite with confidence).
4. **Related Services grid links:** the current live page links to `/services/utility-excavation/` and `/services/slope-stabilization/`; this draft swaps those for confirmed live sibling routes (`/services/grading-leveling/`, `/services/foundation-excavation/`, `/services/septic/`, `/services/excavation/`) per the brief's flag — confirm with dev whether the original two routes are live before treating this swap as final.
5. **H1 change flag:** this draft uses "Drainage Excavation in Eugene, Springfield & Lane County, Oregon," matching every sibling page's H1 pattern. The current live page's H1 is the shorter "Drainage Excavation." The URL/slug does not change — confirm the on-page headline change with David/dev before build.
6. **Hero subheadline light edit:** the current live subheadline ("Willamette Valley winters mean months of rain on ground that doesn't always shed it well. D&D Land Works cuts the swales, trenches, and culvert lines that get water moving away from where it's causing problems.") uses the word "swales," which is Grading & Leveling's territory per the scope boundary applied throughout this draft. This draft applies the brief's suggested minor wording tweak (dropping "swales," keeping "trenches, and culvert lines") rather than a full rewrite — confirm with David before build.
7. **Real pricing specific to D&D's own drainage jobs**, if David is willing to share even rough figures, would strengthen the cost section beyond the generic national ranges currently available.

---

## Metadata

| Field | Value |
|---|---|
| **Title tag** | Drainage Excavation in Eugene & Lane County, OR \| D&D (53 chars) |
| **Meta description** | French drain & drainage trenching in Eugene, Springfield & Lane County, OR. Licensed, bonded, free estimates: 541-401-8726. (123 chars) |
| **H1** | Drainage Excavation in Eugene, Springfield & Lane County, Oregon |
| **Canonical URL** | `/services/drainage-excavation/` |
| **Schema types** | `Service` (primary, `provider` → `{"@id": "https://www.ddlandworks.com/#business"}`), `FAQPage`, `BreadcrumbList`, `Speakable` (H2 #1, #2, #4, #5, #6, #7, #10), `ItemList` (H2 #5, #8) — no `AggregateRating`/`Review` (zero reviews at launch) |
| **Internal links (out)** | `/` (homepage), `/services/grading-leveling/`, `/services/foundation-excavation/`, `/services/septic/`, `/services/excavation/`, `/locations/eugene/`, `/locations/springfield/`, `/about/`, `/contact/` |
| **Primary keyword** | drainage excavation eugene or |
| **Co-primary keyword** | french drain installation eugene or (framed per the #1 Open Item above — not an unhedged installation claim) |
| **Word count** | ~2,625 words (body copy, H1 through closing CTA; excludes this metadata table, HTML image-gap comments, and the JSON-LD block) — at the top edge of the brief's 2,100–2,600 target, consistent with this page defining ten previously-unexplained entities from zero |

---

<!-- HERO BLOCK (above H1 / above the fold) -->
<!-- IMAGE GAP: Hero image — an open drainage trench on a Lane County site, showing pipe and drain rock before backfill. Alt: "Drainage trench excavation for a French drain, Lane County, Oregon." No real jobsite photo exists yet — keep the existing text-only Hero component until real photography is available; do not substitute unbranded stock presented as D&D's own work. -->

**Call 541-401-8726** → [tel:5414018726](tel:5414018726)
**Free Estimate** → [/contact/](/contact/)

**Hero subheadline (light edit applied per Flag #6 above — confirm with David before build):** "Willamette Valley winters mean months of rain on ground that doesn't always shed it well. D&D Land Works cuts the trenches and culvert lines that get water moving away from where it's causing problems."

# Drainage Excavation in Eugene, Springfield & Lane County, Oregon

Water that's already sitting below or at grade doesn't get fixed by reshaping the surface. It needs somewhere to go underground. That's the job this page covers: buried, dug drainage systems, a different remedy than the surface swales and re-sloping covered on [Grading & Leveling](/services/grading-leveling/), and a different, if physically similar, system than the foundation drain a new build is required to have (see [Foundation Excavation](/services/foundation-excavation/)). If a previous regrade didn't solve a wet yard, this is usually why: the water needed to go underground, not redirected across the surface. D&D Land Works excavates and trenches for buried drainage systems throughout Eugene, Springfield, and Lane County, Oregon.

<!-- AI CITATION BLOCK — verbatim from drainage-excavation-brief.md §5, conservative service-claim wording applied per the #1 Open Item above, placed in first 30% of body -->
> Drainage excavation is the digging and trenching that installs a buried drainage system — a French drain, curtain drain, or catch-basin-and-pipe network — to move water away from a wet yard, a foundation, or a low spot that surface grading alone can't fix. It's a different remedy than grading: grading reshapes the ground's own contour with a swale or a corrected slope, while drainage excavation buries a perforated pipe, wrapped in gravel and filter fabric, that collects and carries water to a discharge point — daylight at a lower elevation, a dry well, or a permitted tie-in to a public storm system. In Eugene, connecting a private drain to the city's stormwater system requires a permit under Municipal Code §6.610, issued only to the property owner or a licensed plumber or septic-tank-installation contractor. D&D Land Works excavates and trenches for buried drainage systems for residential and commercial properties throughout Eugene, Springfield, and Lane County, Oregon, under Oregon CCB license #261742. Free estimates are available.

## Buried Drainage, Not Surface Grading — What This Page Covers

This page covers the buried, constructed side of drainage: French drains, curtain drains, catch basins, dry wells, and culverts (pipes set under a driveway or access road to carry a ditch underneath it). These systems carry water underground to a discharge point. [Grading & Leveling](/services/grading-leveling/) covers the surface side: swales, berms, and re-sloping that move water by reshaping the ground itself. Its [swale-vs-French-drain comparison](/services/grading-leveling/) is the place to start if you're unsure which your yard needs. A septic drainfield is a separate, DEQ-regulated wastewater system unrelated to yard or stormwater drainage. See [Septic Install & Repair](/services/septic/) for that.

## What Is a French Drain, and How Deep Does It Need to Be?

A French drain is a buried trench: a perforated pipe surrounded by washed gravel that collects groundwater or surface water along its length and carries it to a discharge point. Standard yard-drainage depth runs 18-24 inches, as shallow as 8-12 inches for surface-water-only work, and 4-6 feet where a drain runs to a footing's own depth. Pipe slopes roughly 1%, about an inch of drop every 8-10 feet, to keep water moving. Oregon811 requires two business days' notice before any digging, and OSHA requires a protective system at 5 feet deep; most yard-drainage trenches fall well under that, but a footing-level drain (4-6 feet) can approach it. See [Excavation & Earthmoving](/services/excavation/) for the fuller trench-safety picture. D&D Land Works excavates and trenches to that depth and slope; the specific product installed (pipe, fabric, and gravel backfill) is confirmed per job.

## French Drain vs. Curtain Drain — Which Do You Need?

Both are buried, perforated-pipe systems, but they're sized for different problems. A French drain runs deeper and is built to intercept water at one consistent depth, often deep groundwater. A curtain drain is shallower, less expensive, and built to catch near-surface water spreading across a wider area, a genuinely useful, lower-cost alternative for a shallower problem.

| | French Drain | Curtain Drain |
|---|---|---|
| Depth | 18-24 in. standard (4-6 ft near a footing) | About 2 ft |
| Purpose | Intercepts water along its length at one consistent depth, often deep groundwater | Intercepts near-surface water spreading across a broader area |
| Typical cost | Roughly $40-$100+/linear ft (national range) | Roughly $10-$25/linear ft (national range) |
| Best use | A persistent wet spot or groundwater problem | A shallower, lower-cost fix for surface-level wetness |

<!-- IMAGE GAP: Materials close-up — perforated pipe, drain rock, and filter fabric laid out before backfill. Alt: "Drainage trench materials: perforated pipe, drain rock, filter fabric." Needs a real jobsite photo; directly ties to the material-specificity differentiator. -->

## Swale or French Drain — Which One Actually Fixes Your Yard?

If water sits on top of the ground and a simple reshape would carry it away, that's a surface problem: a swale or a regrade; see [Grading & Leveling's swale-vs-French-drain comparison](/services/grading-leveling/) for that side of the decision. If water is already below or at grade, saturating the soil rather than pooling on top of it, reshaping the surface won't fix it. That needs a buried pipe to carry it away instead. A regrade that didn't solve a wet yard often means the ground needed underground conveyance, not a different slope, and that's not a sign the earlier grading work was done badly. It's a different remedy for a different situation.

## Where Does the Water From a French Drain Actually Go?

A drain has to end somewhere, or it isn't solving anything. There are three real destinations:

- **Daylight** — the pipe exits above ground at a lower point on the property, letting gravity carry the water the rest of the way by surface flow. It's the most common option on a sloped Lane County lot, sometimes fitted with a pop-up emitter, a spring-loaded cap that keeps the open end from becoming a hazard, a rodent entry point, or a mower obstruction.
- **A dry well** — an underground chamber that collects water and slowly releases it back into the surrounding soil. A dry well and a French drain are usually paired, not substitutes: the drain conveys water to the dry well rather than the two being alternate fixes for the same problem.
- **A permitted storm-system tie-in** — a connection to the city's public stormwater system, which requires a permit in both Eugene and Springfield (see below).

A drain with none of these three destinations doesn't actually drain anywhere. It just relocates standing water to another spot underground, a known failure mode of a poorly designed system, not an inherent flaw in a properly built one. A discharge into a mapped wetland or stream can trigger Oregon's DSL Removal-Fill Law. Most yard-to-daylight or yard-to-dry-well discharges don't touch DSL-jurisdictional water, but it's worth confirming near a waterway (see [Excavation & Earthmoving](/services/excavation/) for the fuller pond-permitting framework). And if a lot is too flat for gravity to reach any of these three destinations, a sump pump is sometimes the fix instead: generally a plumbing or electrical trade's scope, not ours, and we'll say so honestly rather than claim it.

<!-- IMAGE GAP: A daylight discharge point or dry well, finished, at a lower point on a property. Alt: "French drain daylight discharge point, Lane County, Oregon." Genuinely valuable given this is the page's clearest unclaimed differentiator. -->
<!-- IMAGE GAP: Simple illustrated diagram showing the three discharge destinations (daylight / dry well / storm-tie-in). Alt: "French drain discharge destinations: daylight, dry well, storm-drain tie-in." Can launch as a simple illustrated 3-option graphic. -->

**Not sure where your yard's water should actually go? [Get a free on-site estimate.](/contact/)**

## Do I Need a Permit to Tie Into the Storm Drain in Eugene or Springfield?

Yes, in both cities. In Eugene, connecting a drain, downspout, or other conduit carrying stormwater to the city's public storm system requires a permit under [Eugene Code §6.610](https://eugene.municipal.codes/EC/6.610), issued only to a property owner (for their own residence) or to a licensed plumber or licensed septic-tank-installation contractor. That's a real, specific restriction on who can even pull it, not just a box to check. Springfield requires a similar connection permit under its [Development Code](https://springfield-or.gov/city/development-public-works/clean-water-and-stormwater/) (Ordinance 6464, effective January 2024). Confirm exact fees and process directly with each city's engineering or public works department before a project starts. Outside city limits, [Lane County's Stormwater Management Program](https://www.lanecounty.org/government/county_departments/public_works/engineering_and_construction_services/stormwater_management_program) is the authority to confirm rules for unincorporated property.

**Tying into the city storm system? [We'll walk you through what's required before anything's quoted.](/contact/)**

## Is This the Same Drain My New Foundation Is Required to Have?

Physically similar, legally different. Oregon's code requires a foundation drain (ORSC R405) around most new foundations that retain earth and enclose habitable space, the same basic technique, a perforated pipe in gravel, but a code-triggered requirement tied to a building permit; see [Foundation Excavation](/services/foundation-excavation/) for that code education. A perimeter drain run around a structure, retaining wall, or general yard problem that isn't tied to a new foundation's own code requirement is this page's territory instead. When the two overlap on the same project, the code detail lives on the foundation excavation page, not here.

## What Materials Go Into a Properly Built Drain?

Three materials do the actual work inside the trench:

- **Perforated pipe** — rigid PVC resists crushing and holds its shape longer; flexible corrugated pipe costs less and bends more easily around obstacles, but collapses and clogs sooner.
- **Drain rock** — clean, washed, angular gravel packed around the pipe so water moves through it freely instead of getting trapped in fine soil.
- **Filter fabric** — geotextile fabric wrapped around the gravel and pipe, keeping Willamette Valley's silty clay from migrating in and clogging the system. This matters more here than in sandier soils; a drain built without it silts up years sooner.

D&D Land Works excavates and trenches to hold these materials at the right depth and slope. Which specific pipe, fabric, and gravel combination goes in is confirmed per job.

## How Much Does Drainage Excavation Cost?

| System Type | Typical Range | What Affects Price |
|---|---|---|
| French drain | $40-$100+/linear ft | Depth (footing-level runs deeper and costs more), pipe material, soil conditions |
| Curtain drain | $10-$25/linear ft | Shallower depth, less material, simpler trench |
| Dry well | $1,165-$4,420 installed (avg. roughly $3,030-$3,110) | Chamber size, depth, hand-dug vs. machine-dug |
| Catch basin | $1,000-$4,000 installed | Basin size, pipe run length, tie-in complexity |

These are general national ranges, not a Lane County quote. No Lane-County-specific per-linear-foot pricing exists yet for this work, and none is invented here. A free on-site estimate is the only way to price a specific yard, factoring in depth, soil, access, and discharge point.

**Want a real number instead of a range? [Request a free estimate.](/contact/)**

<!-- IMAGE GAP: A catch basin set at a low point, grated inlet visible. Alt: "Catch basin installation for surface drainage, Lane County, Oregon." Genuinely absent. -->

## Can a French Drain Make Drainage Worse?

A poorly built one can. A French drain with no real discharge destination (no daylight point, no dry well, no permitted tie-in) doesn't solve a wet yard. It just moves standing water to a different spot, often underground where it's harder to diagnose than the original problem. That's a known mistake with unlicensed or DIY installs, not an inherent flaw in a properly designed system with a real destination for the water it collects.

## Frequently Asked Questions

**What's the difference between a French drain and a curtain drain?**
A French drain runs deeper — 18-24 inches standard, deeper still near a footing — and intercepts water along its length at a consistent depth. A curtain drain is shallower, about 2 feet, and less expensive, built to intercept near-surface water spreading across a broader area rather than deep groundwater at one point. Both are buried, perforated-pipe systems; which one fits depends on how deep the water problem actually sits.

**How deep does a French drain need to be?**
It depends on what it's solving. Standard yard-drainage depth runs 18-24 inches. A drain handling only surface water can run as shallow as 8-12 inches. A drain tied to a footing's own depth runs 4-6 feet. Depth is a real design decision made on-site, not a fixed number, based on where the water problem actually sits.

**How much does a French drain or yard drainage system cost?**
General national ranges run roughly $10-$100+ per linear foot depending on depth and type: shallow exterior drains around $10-$35/ft, deep footing-level drains around $45-$85/ft, curtain drains around $10-$25/ft. These aren't Lane County numbers — no Lane-County-specific pricing exists yet. A free on-site estimate is the only way to price a specific yard.

**Where does the water from a French drain actually go?**
To one of three real destinations: daylight at a lower point on the property, a dry well that slowly infiltrates it back into the soil, or a permitted tie-in to the city storm system. A drain with none of these just relocates standing water to another spot underground, a known failure mode of a poorly designed system.

**Do I need a permit to tie a drain into the storm system in Eugene or Springfield?**
Yes, in both cities. Eugene requires a permit under Municipal Code §6.610, issued only to the property owner or a licensed plumber or septic-tank-installation contractor. Springfield requires a similar connection permit under its Development Code. Confirm the exact process and fees directly with each city's engineering or public works department before a project starts.

**What's the difference between a French drain and a dry well?**
They're usually paired, not substitutes. A French drain conveys water continuously along a trench to an exit point; a dry well collects a volume of water and slowly releases it back into the surrounding soil. A French drain often discharges into a dry well rather than the two being alternative fixes for the same problem.

**My yard was already regraded and it's still wet — what's next?**
Not every water problem is a surface problem. Grading corrects the ground's own slope; if water is collecting below or at grade, it needs a buried drain to carry it away instead. That's not a sign the earlier grading work was done badly — it's a different remedy for a different situation. See [Grading & Leveling](/services/grading-leveling/) for the surface side of this comparison.

**Is a French drain the same as the drain required around my new foundation?**
Physically similar, legally different. The code-required foundation drain (see [Foundation Excavation](/services/foundation-excavation/)) is the same basic technique, a perforated pipe in gravel, but it's tied to a building permit and Oregon's ORSC R405 requirement. A general yard or retaining-wall French drain not tied to a new foundation's own code requirement is this page's territory.

**Can a French drain make my drainage problem worse?**
A poorly built one can. A French drain with no real discharge destination doesn't solve the problem — it just moves standing water to another spot, often underground where it's harder to diagnose. That's a known mistake with unlicensed or DIY installs, not an inherent flaw in a properly designed system.

**How long does a properly installed French drain last?**
15-25 years or more for a properly built system with the right pipe, gravel, and filter fabric — a general industry figure, not a D&D-specific claim. What shortens that lifespan: no filter fabric (letting Willamette Valley clay silt up the system), the wrong pipe type, or no real discharge point.

## Related Services

Drainage excavation is one piece of the water-management picture, not the only piece. [Grading & Leveling](/services/grading-leveling/) covers the surface side — swales, berms, re-sloping — where nothing new is being buried. [Foundation Excavation](/services/foundation-excavation/) covers the code-required foundation drain tied to a new build. A septic drainfield is a completely separate, DEQ-regulated wastewater system; see [Septic Install & Repair](/services/septic/) for that.

- **[Grading & Leveling](/services/grading-leveling/)** — surface swales, berms, and re-sloping an existing yard, no buried system involved
- **[Foundation Excavation](/services/foundation-excavation/)** — the code-required ORSC R405 foundation drain tied to a new build
- **[Septic Install & Repair](/services/septic/)** — a separate, DEQ-regulated wastewater-dispersal system
- **[Excavation & Earthmoving](/services/excavation/)** — general cut-and-fill, trenching, and earthmoving mechanics

D&D Land Works covers all of this under one Oregon CCB license (#261742), for both residential and commercial properties throughout [Eugene](/locations/eugene/), [Springfield](/locations/springfield/), and the rest of Lane County. To see the full range of excavation services D&D Land Works offers, visit the [homepage](/) or [David Deggelman's about page](/about/).

## Get Your Drainage Problem Scoped

A chronic wet yard, a damp crawlspace, or a low spot that won't dry out is exactly what this page is for. D&D Land Works will walk the site, explain honestly where the water needs to go, and scope the trenching the fix actually needs. Free estimate for drainage excavation anywhere in Lane County.

**Call 541-401-8726** → [tel:5414018726](tel:5414018726)
**Or [get a free estimate](/contact/)**

---

## Schema (JSON-LD)

Note on `Speakable`: `cssSelector` values below assume heading `id` attributes are added when this content is placed into the Astro template, matching the pattern used in `excavation-content.md` — add these ids during the Astro build step; they don't exist in this markdown draft.

```json
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://www.ddlandworks.com/services/drainage-excavation/#service",
      "name": "Drainage Excavation",
      "serviceType": "Drainage Excavation",
      "description": "Drainage excavation is the digging and trenching that installs a buried drainage system — a French drain, curtain drain, or catch-basin-and-pipe network — to move water away from a wet yard, a foundation, or a low spot that surface grading alone can't fix. D&D Land Works excavates and trenches for buried drainage systems for residential and commercial properties throughout Eugene, Springfield, and Lane County, Oregon, cutting the trench to depth and slope and backfilling with drain rock, pipe, and filter fabric. Specific drainage product installation is confirmed per job.",
      "url": "https://www.ddlandworks.com/services/drainage-excavation/",
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
          "name": "What's the difference between a French drain and a curtain drain?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A French drain runs deeper, 18-24 inches standard, deeper still near a footing, and intercepts water along its length at a consistent depth. A curtain drain is shallower, about 2 feet, and less expensive, built to intercept near-surface water spreading across a broader area rather than deep groundwater at one point. Both are buried, perforated-pipe systems; which one fits depends on how deep the water problem actually sits."
          }
        },
        {
          "@type": "Question",
          "name": "How deep does a French drain need to be?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "It depends on what it's solving. Standard yard-drainage depth runs 18-24 inches. A drain handling only surface water can run as shallow as 8-12 inches. A drain tied to a footing's own depth runs 4-6 feet. Depth is a real design decision made on-site, not a fixed number, based on where the water problem actually sits."
          }
        },
        {
          "@type": "Question",
          "name": "How much does a French drain or yard drainage system cost?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "General national ranges run roughly $10-$100+ per linear foot depending on depth and type: shallow exterior drains around $10-$35/ft, deep footing-level drains around $45-$85/ft, curtain drains around $10-$25/ft. These aren't Lane County numbers or a quote, no Lane-County-specific pricing exists yet for this work. A free on-site estimate is the only way to price a specific yard."
          }
        },
        {
          "@type": "Question",
          "name": "Where does the water from a French drain actually go?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "To one of three real destinations: daylight at a lower point on the property, a dry well that slowly infiltrates it back into the soil, or a permitted tie-in to the city storm system. A drain with none of these just relocates standing water to another spot underground, a known failure mode of a poorly designed system."
          }
        },
        {
          "@type": "Question",
          "name": "Do I need a permit to tie a drain into the storm system in Eugene or Springfield?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, in both cities. Eugene requires a permit under Municipal Code §6.610, issued only to the property owner or a licensed plumber or septic-tank-installation contractor. Springfield requires a similar connection permit under its Development Code. Confirm the exact process and fees directly with each city's engineering or public works department before a project starts."
          }
        },
        {
          "@type": "Question",
          "name": "What's the difference between a French drain and a dry well?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "They're usually paired, not substitutes. A French drain conveys water continuously along a trench to an exit point; a dry well collects a volume of water and slowly releases it back into the surrounding soil. A French drain often discharges into a dry well rather than the two being alternative fixes for the same problem."
          }
        },
        {
          "@type": "Question",
          "name": "My yard was already regraded and it's still wet — what's next?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Not every water problem is a surface problem. Grading corrects the ground's own slope; if water is collecting below or at grade, it needs a buried drain to carry it away instead. That's not a sign the earlier grading work was done badly, it's a different remedy for a different situation."
          }
        },
        {
          "@type": "Question",
          "name": "Is a French drain the same as the drain required around my new foundation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Physically similar, legally different. The code-required foundation drain is the same basic technique, a perforated pipe in gravel, but it's tied to a building permit and Oregon's ORSC R405 requirement. A general yard or retaining-wall French drain not tied to a new foundation's own code requirement is this page's territory."
          }
        },
        {
          "@type": "Question",
          "name": "Can a French drain make my drainage problem worse?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A poorly built one can. A French drain with no real discharge destination, no daylight, no dry well, no permitted tie-in, doesn't solve the problem. It just moves standing water to another spot, often underground where it's harder to diagnose. That's a known mistake with unlicensed or DIY installs, not an inherent flaw in a properly designed system."
          }
        },
        {
          "@type": "Question",
          "name": "How long does a properly installed French drain last?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "15-25 years or more for a properly built system with the right pipe, gravel, and filter fabric, a general industry figure, not a D&D-specific claim. What shortens that lifespan: no filter fabric, letting Willamette Valley clay silt up the system, the wrong pipe type, or no real discharge point."
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
          "name": "Drainage Excavation",
          "item": "https://www.ddlandworks.com/services/drainage-excavation/"
        }
      ]
    },
    {
      "@type": "ItemList",
      "name": "French Drain Discharge Destinations",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Daylight discharge point" },
        { "@type": "ListItem", "position": 2, "name": "Dry well" },
        { "@type": "ListItem", "position": 3, "name": "Permitted storm-system tie-in" }
      ]
    },
    {
      "@type": "ItemList",
      "name": "Drainage Trench Materials",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Perforated pipe (corrugated or PVC)" },
        { "@type": "ListItem", "position": 2, "name": "Drain rock (washed gravel backfill)" },
        { "@type": "ListItem", "position": 3, "name": "Filter fabric" }
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://www.ddlandworks.com/services/drainage-excavation/#webpage",
      "speakable": {
        "@type": "SpeakableSpecification",
        "cssSelector": [
          "#buried-drainage-not-surface-grading-what-this-page-covers",
          "#what-is-a-french-drain-and-how-deep-does-it-need-to-be",
          "#swale-or-french-drain-which-one-actually-fixes-your-yard",
          "#where-does-the-water-from-a-french-drain-actually-go",
          "#do-i-need-a-permit-to-tie-into-the-storm-drain-in-eugene-or-springfield",
          "#is-this-the-same-drain-my-new-foundation-is-required-to-have",
          "#can-a-french-drain-make-drainage-worse"
        ]
      }
    }
  ]
}
```

---

**Note:** The mandatory humanizer pass is complete, consistent with this project's carried-forward working rule that humanizer review is mandatory on any AI-drafted prose before it ships. The editable prose sections (everything outside the FAQ block and AI citation block, both preserved verbatim since the FAQ mirrors the JSON-LD schema) had 12 em-dash constructions converted to periods, colons, or parentheses. The conservative French-drain framing (excavates/trenches, product installation confirmed per job) was touched only for punctuation, never wording, everywhere it appears. No pricing, founding year, address, hours, or review counts were invented; all cost ranges are general national figures, explicitly labeled as such, not Lane County-exact numbers or a quote. The Eugene EC §6.610 and Springfield Ordinance 6464 permit facts, the French-drain/curtain-drain depth-slope-material-cost figures, the Willamette Valley clay context, the Oregon DSL Removal-Fill reference, and the OSHA/Oregon811 trench-safety figures are all reused from `07-oregon-authority.md` and cross-linked to `excavation-content.md` rather than re-derived with different numbers. Per the #1 Open Item, no sentence in this file states "D&D installs French drains," "D&D offers French drain installation," or any equivalent unhedged product-installation claim — every instance uses the conservative "excavates and trenches for buried drainage systems, product installation confirmed per job" framing, including inside the AI citation block, the FAQ, and the JSON-LD `Service.description`. The scope boundary against Grading & Leveling (surface swales/berms/ORSC R401.3) and Foundation Excavation (ORSC R405/R406/R408 code education) is maintained throughout — neither sibling page's owned content is re-derived here, only cross-linked. No WordPress reference appears anywhere in this file. Placing this into the Astro site (live or test route) is a separate, later step and is not part of this task.
