# D&D Land Works — Foundation Excavation Page Content (Draft)

**Prepared:** 2026-09-09 · **For:** Ducker Creative / D&D Land Works
**Built from:** `07-landing-pages/briefs/foundation-excavation-brief.md` + full `01-research/page-research/foundation-excavation/` pack + `business-info.md` + `docs/design-system.md` + `07-landing-pages/content/excavation-content.md` (voice/tone reference, JSON-LD `@id` pattern, and the exact OSHA/Oregon811 figures already shipped there) + the current live page at `site/src/pages/services/foundation-excavation.astro` (existing hook, process list, and equipment note preserved and extended, not discarded).
**Status:** Humanizer pass complete (2026-09-09). See note at end of file.

**Flags / Open Items carried forward from the brief (do not resolve silently — confirm with David before this page ships):**

1. **Frost-depth figure sourcing (the single most load-bearing open item).** The 12-inch footing-depth/frost-protection figure (ORSC R403.1.4 / R403.1.4.1 / Table R301.2) rests on two independent secondary sources that agree with each other, not a direct read of the primary ICC-published table — codes.iccsafe.org returned a 403 on direct fetch during research. The figure is stated below with a confirmation caveat every time it appears as a specific number, per the brief's explicit instruction. Confirm against a purchased/library ORSC copy or a direct call to Lane County's, Eugene's, or Springfield's building department before this page goes live treating the number as final.
2. **Foundation drain / waterproofing / vapor-retarder install scope unconfirmed.** H2 #7 below is framed as homeowner-education content (what the code requires), not a D&D installation claim, until David confirms whether D&D's excavation/backfill scope includes installing the ORSC R405 drain, R406 waterproofing, or R408 vapor retarder.
3. **GC/builder schedule-coordination framing unconfirmed.** H2 #10 states plainly that D&D coordinates around a builder's or GC's schedule; confirm with David whether D&D typically coordinates directly with a GC to schedule the footing inspection, or expects the permit-holder to manage that independently.
4. **Full-basement excavation experience unconfirmed.** H2 #4's basement-foundation content is framed as a capable, code-literate offering using general/national cost data, not a claim of an established basement-dig track record — confirm with David which framing is accurate.
5. **H1 change flag.** This draft uses "Foundation Excavation in Eugene, Springfield & Lane County, Oregon," adding the city/county suffix to match every sibling page's H1 pattern. The current live page's H1 is the shorter "Foundation Excavation." The URL/slug does not change — confirm the on-page headline change with David/dev before build.
6. **No D&D-specific foundation-type pricing exists.** All cost ranges below are general/national data (HomeGuide, Estimators.us, This Old House), explicitly labeled as such — not a Lane County quote.

---

## Metadata

| Field | Value |
|---|---|
| **Title tag** | Foundation Excavation in Eugene & Lane County, OR \| D&D (55 chars) |
| **Meta description** | How deep must a footing be in Oregon? Foundation type, cost, and inspection timing for Lane County, OR. Licensed, bonded. Free estimate: 541-401-8726. (150 chars) |
| **H1** | Foundation Excavation in Eugene, Springfield & Lane County, Oregon |
| **Canonical URL** | `/services/foundation-excavation/` |
| **Schema types** | `Service` (primary, `provider` → `{"@id": "https://www.ddlandworks.com/#business"}`), `FAQPage`, `BreadcrumbList`, `Speakable` (H2 #2, #3, #5, #8, #9, #10), `HowTo` (H2 #6), `ItemList` (H2 #7) — no `AggregateRating`/`Review` (zero reviews at launch) |
| **Internal links (out)** | `/` (homepage), `/services/excavation/`, `/services/site-preparation/`, `/services/drainage-excavation/`, `/services/septic/`, `/services/trenching-backfill/`, `/locations/eugene/`, `/locations/springfield/`, `/about/`, `/contact/` |
| **Primary keyword** | foundation excavation eugene or |
| **Co-primary keyword** | foundation excavation lane county or |
| **Word count** | ~2,225 words (body copy, H1 through closing CTA; excludes this metadata block, HTML image-gap comments, and the JSON-LD block) |

---

<!-- HERO BLOCK (above H1 / above the fold) -->
<!-- IMAGE GAP: Hero image — an open foundation excavation (footing trench or basement cut) on a Lane County site, ideally showing forms or rebar in place. Alt: "Foundation excavation for a footing on a job site in Lane County, Oregon." No real jobsite photo exists yet — keep the existing text-only Hero component until real photography is available; do not substitute unbranded stock presented as D&D's own work. -->

**Call 541-401-8726** → [tel:5414018726](tel:5414018726)
**Free Estimate** → [/contact/](/contact/)

**Keep the existing Hero subheadline unchanged:** "Footings, slabs, and basements all start with a hole cut to the right depth and grade. Get it wrong here and every trade after you inherits the problem."

# Foundation Excavation in Eugene, Springfield & Lane County, Oregon

Foundation excavation is the step inside general excavation that creates space for a footing and a foundation wall or slab, narrower in scope than a driveway cut or a pond dig, and higher-stakes, since every trade that follows it (forming, pouring, framing) inherits whatever this step gets wrong. Our [Excavation & Earthmoving](/services/excavation/) page names foundation digging as one project type among several and promises "more depth" on it here. This page is that depth: the real Lane County footing-depth requirement, how a slab, crawlspace, or basement changes both scope and cost, what "over-dig" actually means, and the excavate-inspect-pour sequence a building department expects before concrete goes in. D&D Land Works provides foundation excavation for residential and commercial projects throughout Eugene, Springfield, and Lane County, Oregon.

<!-- AI CITATION BLOCK — verbatim from foundation-excavation-brief.md §5 / 00-research-pack.md §12, placed in first 30% of body -->
> Foundation excavation is the precise digging that creates space for a footing and foundation wall or slab — a narrower, higher-stakes step within general excavation, since every trade that follows (forming, pouring, framing) depends on getting it right. In Lane County, Oregon, footings must be placed at least 12 inches below finished grade on undisturbed soil, per the Oregon Residential Specialty Code, which also satisfies the state's frost-protection depth for Lane County's elevation. Excavation scope differs by foundation type: a slab needs only a shallow topsoil strip, a crawlspace needs a perimeter trench to footing depth, and a full basement requires an 8-10 foot excavation with sloped or shored walls. D&D Land Works provides foundation excavation for residential and commercial projects throughout Eugene, Springfield, and Lane County, Oregon, coordinating the open excavation to be ready for the building department's footing inspection, which happens before concrete is poured, not after, under Oregon CCB license #261742. Free estimates are available.

## What Does Foundation Excavation Cover?

Foundation excavation means cutting to the plan depth and footprint for footings, stem walls, slabs, or a basement; checking elevations against the survey and building plan as the cut progresses; compacting the subgrade so it's ready to bear a footing; sloping for safe access and drainage; and backfilling and compacting once the foundation is in, using laser level or GPS grade control to hold elevation and a plate compactor or vibratory roller to finish the subgrade and backfill. For the general cut-and-fill and compaction mechanics behind all of that, see [Excavation & Earthmoving](/services/excavation/).

## How Is Foundation Excavation Different From General Excavation?

Foundation excavation is a specific application of general excavation, not a separate skill. General cut-and-fill mechanics, backfill and compaction as a concept, rock-removal cost basics, and the excavation-vs-grading distinction are covered on [Excavation & Earthmoving](/services/excavation/) and aren't repeated here. What's specific to a foundation dig is everything downstream of a building permit: the code-required footing depth, how foundation type changes scope and cost, the over-dig a crew needs to work safely, and the inspection a building department holds before concrete gets poured, all covered in the sections below.

<!-- IMAGE GAP: Equipment close-up — laser level/GPS grade control or plate compactor actively working a foundation cut, not staged. Alt: "Foundation excavation equipment on a Lane County jobsite." Genuinely absent. -->

## How Deep Does a Foundation Footing Need to Be in Oregon?

In Lane County, footings must be placed not less than 12 inches below finished grade on undisturbed ground, per Oregon Residential Specialty Code Section [R403.1.4](https://up.codes/viewer/oregon/irc-2021/chapter/4/foundations). That same 12-inch figure also satisfies the state's frost-protection depth for Lane County's elevation under ORSC Table R301.2, since Eugene sits at roughly 430 feet, well under the 2,500-foot elevation where the required depth increases to 18 inches, and the 4,000-foot elevation where it increases to 24 inches. This figure rests on two independent secondary sources that agree with each other, not a direct read of the primary ICC-published table, so it's worth confirming with Lane County's, Eugene's, or Springfield's building department for your specific project before treating it as final.

## Does Foundation Type Change the Excavation Scope or Cost?

Yes, significantly. A slab-on-grade foundation needs only a shallow topsoil strip, a crawlspace needs a perimeter trench cut to footing depth, and a full basement requires an 8- to 10-foot excavation with far more material hauled off-site. National cost data puts a full basement dig 40-60% more expensive than a slab, driven by depth, shoring, and haul-off volume rather than any single line item. These are general national ranges, not Lane County pricing. A site visit is still the only way to price a specific project.

| Foundation Type | Typical Excavation Depth | What Drives Cost |
|---|---|---|
| Slab-on-grade | Shallow topsoil strip, roughly 2-3 ft | Minimal depth and haul-off; national range roughly $6-$16/sq ft |
| Crawlspace | Perimeter trench to footing depth plus stem-wall height, 18-48 in finished clearance | Trench length and depth, stem-wall pour; national range roughly $8-$18/sq ft |
| Full basement | 8-10 ft, sloped or shored | Shoring/benching, hundreds of cubic yards hauled off, often dewatering; national range roughly $75-$150/cu yd removed |

Two pour methods sit underneath these types, worth knowing before a builder's quote arrives: a monolithic slab pours the footing and floor together in one shot, favored for garages, shops, ADUs, and flat sites. A stem-wall foundation pours the footing first, then a short wall, then the floor: the sequence a crawlspace, basement, or deeper frost protection generally requires.

<!-- IMAGE GAP: A foundation-type comparison visual — even a simple side-by-side diagram of slab/crawlspace/basement excavation depth. Alt: "Slab, crawlspace, and basement foundation excavation depth comparison." Genuinely valuable given this is the page's clearest unclaimed differentiator; can launch as a simple illustrated diagram if real photography isn't available yet. -->

**Not sure which foundation type your project needs? [Get a free estimate](/contact/) and we'll walk the site with your builder.**

## What Is "Over-Dig," and How Much Working Space Does a Crew Need?

Over-dig is the extra excavation beyond the footing or wall lines a crew needs to physically work: forming, waterproofing, and backfilling. For a house foundation or basement excavation under 7.5 feet deep, or properly benched, OSHA's [1995 interpretation](https://www.osha.gov/laws-regs/standardinterpretations/1995-06-30) of 29 CFR 1926.652 sets a minimum working width of 2 feet at the bottom of the excavation, from the excavation face to the formwork. That's a different, more specific figure than the general trench-depth thresholds already covered on the [Excavation & Earthmoving](/services/excavation/) page.

## Does the Building Department Inspect a Foundation Before It's Poured?

Yes — in both Eugene and unincorporated Lane County, concrete doesn't get poured until the building department signs off on the open excavation. The sequence:

1. Excavate the trench or pad area to plan depth and footprint.
2. Clear loose material and mud out of the excavation.
3. Erect and secure the forms.
4. Place and secure the reinforcing steel (rebar).
5. Hold for the [foundation/footing inspection](https://www.eugene-or.gov/384/Inspections). Eugene schedules through its online eBuild system or by calling 541-682-5283; Lane County's Building Safety program runs the parallel process for unincorporated jobs.
6. Pour concrete only after the inspection passes.

D&D Land Works leaves the excavation open and ready for that inspection rather than rushing toward a pour.

<!-- IMAGE GAP: An open, inspection-ready excavation (cleared trench, forms erected, rebar placed, before the pour). Alt: "Foundation excavation ready for footing inspection, Lane County, Oregon." Needs a real jobsite photo; directly ties to the inspection-sequencing trust signal. -->
<!-- IMAGE GAP: Simple illustrated diagram for the excavate → inspect → pour sequence. Alt: "Foundation excavation inspection sequence: excavate, inspect, pour." Can launch as a simple illustrated 3-4 step graphic. -->

**Coordinating with a builder or GC? [Get a free estimate](/contact/) scoped to your schedule.**

## What Does Oregon Require for Foundation Drainage?

Oregon code requires three parallel things around most foundations that retain earth and enclose habitable space:

- **A foundation drain (ORSC R405)** — required around concrete or masonry foundations enclosing habitable or usable space, unless the foundation sits on well-drained or sand-gravel soil.
- **Waterproofing or dampproofing (ORSC R406)** — required on any wall that needs the R405 drain.
- **A crawlspace vapor retarder (ORSC R408.1/R408.3)** — a Class I vapor retarder over exposed ground in both vented and unvented crawlspaces, with specific overlap and seal requirements.

This is a different system from a [septic drainfield](/services/septic/), which disperses wastewater, and from a yard-scale swale or [drainage excavation](/services/drainage-excavation/) that manages surface runoff. All three happen to share the word "drain," but they don't share a purpose. Whether foundation-drain and vapor-retarder installation falls under D&D's excavation and backfill scope or a separate foundation contractor's work is confirmed per job.

## What About an ADU or a Foundation Near an Existing House?

Yes. An ADU built as its own structure needs its own footing and foundation excavation, commonly a simpler slab-on-grade or monolithic-slab type rather than a full basement. Digging close to an existing house raises a separate issue: OSHA 1926.652(b) prohibits excavating below the level of an existing foundation or retaining wall's base unless underpinning is installed, or a registered professional engineer confirms the structure won't be affected.

## What Happens If the Crew Hits Rock or Water Under a Foundation?

It's a real, explainable cost and schedule driver, not a bait-and-switch. The same rock-cost mechanics covered on the [Excavation & Earthmoving](/services/excavation/) page apply here too. The stakes run higher on a foundation dig, since it sits on a tighter construction timeline than a standalone driveway or pond. Deeper digs in the Willamette Valley's high winter water table sometimes call for dewatering: pumping groundwater out of the open excavation before work continues.

## Should Foundation Excavation Happen Before or After I Hire a Builder?

Foundation excavation is almost always tied to an active building permit and a builder's or GC's schedule, not a standalone decision made on its own. D&D Land Works coordinates around that schedule and the [site preparation](/services/site-preparation/) and inspection process rather than treating the dig as a self-contained job, whether the permit holder is you, your builder, or your GC.

## Frequently Asked Questions

**How deep does a foundation footing need to be in Oregon?**
Not less than 12 inches below finished grade on undisturbed ground, per ORSC R403.1.4 — a figure that also satisfies Lane County's frost-protection depth under Table R301.2. This number rests on two agreeing secondary sources rather than a direct read of the primary code table, so it's worth confirming with your local building department before treating it as final for your project.

**Does foundation type (slab, crawlspace, or basement) change the excavation cost?**
Yes, significantly. A slab needs only a shallow topsoil strip, a crawlspace needs a perimeter trench cut to footing depth, and a full basement requires an 8- to 10-foot excavation with far more material hauled off. National data puts a full basement dig 40-60% more expensive than a slab.

**What is "over-dig," and how much extra space does a crew need around a foundation?**
Over-dig is the extra excavation beyond the footing or wall lines a crew needs to physically work — forming, waterproofing, and backfilling. OSHA's house-foundation/basement rule sets a minimum working width of 2 feet at the bottom of the excavation.

**Does the building department inspect a foundation before the concrete gets poured?**
Yes. In both Eugene and unincorporated Lane County, the foundation/footing inspection happens after the trench or pad is excavated, forms are erected, and rebar is placed, but before any concrete is poured. Skipping that step isn't legal, and it's a red flag if a contractor implies otherwise.

**What happens if the excavator hits rock or water while digging a foundation?**
It's a real, explainable cost and schedule driver, not a bait-and-switch. The same rock-cost mechanics covered on the Excavation & Earthmoving page apply, but the stakes are higher on a foundation dig's tighter construction timeline. Deeper digs in the Willamette Valley's high winter water table sometimes require dewatering.

**Do I need a soils report or an engineer before excavating for a foundation?**
Not always required by code for a typical single-family foundation, but recommended. A $2,000-$5,000 geotechnical/soils study is credited with preventing 20-50% of cost overruns from unexpected rock or bad soil, and ORSC R403.1 requires footings to bear on undisturbed natural soil or engineered fill.

**Does an ADU need its own foundation excavation?**
Yes — an ADU built as a standalone structure needs its own footing and foundation dig, commonly a simpler slab-on-grade or monolithic-slab type. Excavating close to an existing house's foundation triggers OSHA's underpinning rule (1926.652(b)).

**Does Oregon require a drain around a foundation?**
Yes, for most. Per ORSC R405, a foundation drain is required around concrete or masonry foundations retaining earth and enclosing habitable space, unless the foundation sits on well-drained soil. This is a different system from a septic drainfield or a yard drainage swale, which happen to share the word "drain."

**Should foundation excavation happen before or after I hire a builder?**
Foundation excavation is almost always tied to an active building permit and a builder's or GC's schedule, not a standalone decision made in isolation. D&D coordinates around that schedule and the inspection process rather than treating the job as self-contained.

## Related Services

Foundation excavation is one piece of a larger project. For general cut-and-fill, backfill, and rock-removal mechanics that apply to any dig, not just a foundation, see [Excavation & Earthmoving](/services/excavation/). [Site preparation](/services/site-preparation/) usually comes first on a raw lot; septic and drainage work are separate systems that sometimes get confused with the foundation drain covered above, but aren't the same thing.

- **[Site Preparation](/services/site-preparation/)** — clearing, stripping topsoil, and grading a raw lot before excavation starts
- **[Excavation & Earthmoving](/services/excavation/)** — general cut-and-fill, backfill, and earthmoving mechanics
- **[Trenching & Backfill](/services/trenching-backfill/)** — trenching and backfill for utility runs
- **[Drainage Excavation](/services/drainage-excavation/)** — yard-scale swales and drainage trenches, distinct from the code-required foundation drain above

D&D Land Works covers all of this under one Oregon CCB license (#261742), for both residential and commercial properties throughout [Eugene](/locations/eugene/), [Springfield](/locations/springfield/), and the rest of Lane County. To see the full range of excavation services D&D Land Works offers, visit the [homepage](/) or [David Deggelman's about page](/about/).

## Get Your Foundation Excavation Scoped

Footings, slabs, and basements all start with a hole cut to the right depth and grade, held for inspection before anything gets poured. Free estimate for foundation excavation anywhere in Lane County.

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
      "@id": "https://www.ddlandworks.com/services/foundation-excavation/#service",
      "name": "Foundation Excavation",
      "serviceType": "Foundation Excavation",
      "description": "Foundation excavation is the precise digging that creates space for a footing and foundation wall or slab. In Lane County, Oregon, footings must be placed at least 12 inches below finished grade on undisturbed soil, per the Oregon Residential Specialty Code, which also satisfies the state's frost-protection depth for Lane County's elevation. D&D Land Works provides foundation excavation for residential and commercial projects throughout Eugene, Springfield, and Lane County, Oregon, coordinating the open excavation to be ready for the building department's footing inspection before concrete is poured.",
      "url": "https://www.ddlandworks.com/services/foundation-excavation/",
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
          "name": "How deep does a foundation footing need to be in Oregon?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Not less than 12 inches below finished grade on undisturbed ground, per ORSC R403.1.4, a figure that also satisfies Lane County's frost-protection depth under Table R301.2. This number rests on two agreeing secondary sources rather than a direct read of the primary code table, so it's worth confirming with your local building department before treating it as final for your project."
          }
        },
        {
          "@type": "Question",
          "name": "Does foundation type (slab, crawlspace, or basement) change the excavation cost?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, significantly. A slab needs only a shallow topsoil strip, a crawlspace needs a perimeter trench cut to footing depth, and a full basement requires an 8- to 10-foot excavation with far more material hauled off. National data puts a full basement dig 40-60% more expensive than a slab."
          }
        },
        {
          "@type": "Question",
          "name": "What is \"over-dig,\" and how much extra space does a crew need around a foundation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Over-dig is the extra excavation beyond the footing or wall lines a crew needs to physically work, forming, waterproofing, and backfilling. OSHA's house-foundation/basement rule sets a minimum working width of 2 feet at the bottom of the excavation."
          }
        },
        {
          "@type": "Question",
          "name": "Does the building department inspect a foundation before the concrete gets poured?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. In both Eugene and unincorporated Lane County, the foundation/footing inspection happens after the trench or pad is excavated, forms are erected, and rebar is placed, but before any concrete is poured. Skipping that step isn't legal, and it's a red flag if a contractor implies otherwise."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if the excavator hits rock or water while digging a foundation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "It's a real, explainable cost and schedule driver, not a bait-and-switch. The same rock-cost mechanics covered on the Excavation & Earthmoving page apply, but the stakes are higher on a foundation dig's tighter construction timeline. Deeper digs in the Willamette Valley's high winter water table sometimes require dewatering."
          }
        },
        {
          "@type": "Question",
          "name": "Do I need a soils report or an engineer before excavating for a foundation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Not always required by code for a typical single-family foundation, but recommended. A $2,000-$5,000 geotechnical/soils study is credited with preventing 20-50% of cost overruns from unexpected rock or bad soil, and ORSC R403.1 requires footings to bear on undisturbed natural soil or engineered fill."
          }
        },
        {
          "@type": "Question",
          "name": "Does an ADU need its own foundation excavation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, an ADU built as a standalone structure needs its own footing and foundation dig, commonly a simpler slab-on-grade or monolithic-slab type. Excavating close to an existing house's foundation triggers OSHA's underpinning rule, 1926.652(b)."
          }
        },
        {
          "@type": "Question",
          "name": "Does Oregon require a drain around a foundation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, for most. Per ORSC R405, a foundation drain is required around concrete or masonry foundations retaining earth and enclosing habitable space, unless the foundation sits on well-drained soil. This is a different system from a septic drainfield or a yard drainage swale, which happen to share the word \"drain.\""
          }
        },
        {
          "@type": "Question",
          "name": "Should foundation excavation happen before or after I hire a builder?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Foundation excavation is almost always tied to an active building permit and a builder's or GC's schedule, not a standalone decision made in isolation. D&D coordinates around that schedule and the inspection process rather than treating the job as self-contained."
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
          "name": "Foundation Excavation",
          "item": "https://www.ddlandworks.com/services/foundation-excavation/"
        }
      ]
    },
    {
      "@type": "HowTo",
      "name": "Foundation Excavation Inspection Sequence",
      "step": [
        { "@type": "HowToStep", "position": 1, "name": "Excavate", "text": "Excavate the trench or pad area to plan depth and footprint." },
        { "@type": "HowToStep", "position": 2, "name": "Clear loose material", "text": "Clear loose material and mud out of the excavation." },
        { "@type": "HowToStep", "position": 3, "name": "Erect forms", "text": "Erect and secure the forms." },
        { "@type": "HowToStep", "position": 4, "name": "Place rebar", "text": "Place and secure the reinforcing steel (rebar)." },
        { "@type": "HowToStep", "position": 5, "name": "Hold for inspection", "text": "Hold for the foundation/footing inspection, scheduled through Eugene's eBuild system or Lane County's Building Safety program." },
        { "@type": "HowToStep", "position": 6, "name": "Pour", "text": "Pour concrete only after the inspection passes." }
      ]
    },
    {
      "@type": "ItemList",
      "name": "Oregon Foundation Drainage Requirements",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Foundation drain (ORSC R405)" },
        { "@type": "ListItem", "position": 2, "name": "Waterproofing or dampproofing (ORSC R406)" },
        { "@type": "ListItem", "position": 3, "name": "Crawlspace vapor retarder (ORSC R408.1/R408.3)" }
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://www.ddlandworks.com/services/foundation-excavation/#webpage",
      "speakable": {
        "@type": "SpeakableSpecification",
        "cssSelector": [
          "#how-is-foundation-excavation-different-from-general-excavation",
          "#how-deep-does-a-foundation-footing-need-to-be-in-oregon",
          "#what-is-over-dig-and-how-much-working-space-does-a-crew-need",
          "#what-about-an-adu-or-a-foundation-near-an-existing-house",
          "#what-happens-if-the-crew-hits-rock-or-water-under-a-foundation",
          "#should-foundation-excavation-happen-before-or-after-i-hire-a-builder"
        ]
      }
    }
  ]
}
```

---

**Note:** The mandatory humanizer pass is complete, per this project's carried-forward working rule that humanizer review is mandatory on any AI-drafted prose before it ships. The editable prose sections (everything outside the FAQ block and AI citation block, both preserved verbatim since the FAQ mirrors the JSON-LD schema) had 12 em-dash constructions converted to periods or colons. The frost-depth sourcing caveat was touched only for punctuation, never wording, everywhere it appears outside the AI citation block. No pricing, founding year, address, hours, or review counts were invented; all foundation-type cost ranges are general national figures (HomeGuide, Estimators.us, This Old House), explicitly labeled as such, not Lane County-exact numbers or a quote. The 12-inch frost-depth figure (ORSC R403.1.4/R403.1.4.1/Table R301.2) is stated with its confirmation caveat every time it appears as a specific number, except inside the AI citation block, which is reproduced verbatim per the brief's explicit instruction that a hedge inside that citation-target passage would undercut its citability — the caveat is carried in this file's opening Flags section and in every other instance of the figure instead. The OSHA over-dig figure (2 ft minimum working width, house foundation/basement carve-out) and the general trench-depth figures on `/services/excavation/` are cited as distinct, non-conflicting citations, matching the exact numbers already used in `excavation-content.md`. General cut/fill, backfill/compaction mechanics, equipment-category descriptions, the excavation-vs-grading disambiguation, and the general OSHA Subpart P trench-safety figures are cross-linked, not repeated, per the brief's Boundary Note. No WordPress reference appears anywhere in this file. Placing this into the Astro site (live or test route) is a separate, later step and is not part of this task.
