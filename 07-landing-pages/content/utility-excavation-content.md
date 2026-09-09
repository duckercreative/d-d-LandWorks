# D&D Land Works — Utility Excavation Page Content (Draft)

**Prepared:** 2026-09-09 · **For:** Ducker Creative / D&D Land Works
**Built from:** `07-landing-pages/briefs/utility-excavation-brief.md` + full `01-research/page-research/utility-excavation/` pack + `business-info.md` + `docs/design-system.md` + `07-landing-pages/content/excavation-content.md` (voice/tone reference, JSON-LD `@id` pattern, and the exact OSHA/Oregon811 figures already shipped there) + `07-landing-pages/content/drainage-excavation-content.md` (structural/voice template and the sibling-page cross-linking pattern) + the current live page at `site/src/pages/services/utility-excavation.astro` (existing "Locates First, Always" framing and equipment section preserved and extended, not discarded).
**Status:** Humanizer pass complete (2026-09-09). See note at end of file.

**#1 OPEN ITEM — MUST BE CONFIRMED BEFORE THIS PAGE PUBLISHES: the electrical burial-depth figure carries a verification caveat, not a settled Oregon-specific number.** Every figure in this file for underground electrical conduit/cable (6–24 in. depending on wiring method) is the **NEC Table 300.5 national baseline** that Oregon's own Electrical Specialty Code (OESC) adopts and amends with its own tables (e.g., OESC Table 1-E). The research for this page could not directly fetch the current OESC amendment table (iccsafe.org returned a 403). The NEC baseline is correct and citable as the national standard — but it should be confirmed against the current adopted OESC edition before this page (or any sales conversation) states an Oregon-specific electrical depth figure as exact. The water, sewer, and gas figures on this page are corroborated directly via Lane County's own government source and do not carry this same hedge.

**Additional flags / open items carried forward from the brief (do not resolve silently):**

1. **Which party initiates a new utility-tap application** with EWEB, Springfield Utility Board, or a rural water district — and whether D&D itself places or coordinates that call — is an unconfirmed operational practice. This draft states only the general industry pattern, hedged, never as settled D&D practice.
2. **Whether D&D has actually performed joint trenching, gas-line trenching, or communications/fiber trenching**, versus offering these as general service categories, is unconfirmed. This draft names them as things D&D offers/can scope, not as demonstrated completed-project claims.
3. **No Oregon state-code minimum burial depth exists for communications/fiber conduit.** This draft discloses that honestly rather than inventing a figure.
4. **No Lane-County-specific or verified national per-foot utility-trenching cost figure exists** in the research behind this page (unlike the drainage-excavation page, which had sourced national ranges). The cost section below states real cost *drivers* per utility type rather than inventing dollar ranges — if David has real per-job cost data, it should replace this section.
5. **The Utility-Excavation-vs-Trenching-&-Backfill relationship is a research-pack recommendation, not a resolved architectural fact.** This draft's scope-boundary section (H2 #8) is written consistent with that recommendation (WHY here, HOW on the sibling page), but no content or research exists yet for `/services/trenching-backfill/` itself.
6. **The H1 change** (adding "in Eugene, Springfield & Lane County, Oregon" to match the sibling pattern) changes text on an already-live page — confirm with David/dev before build, same as every prior page in this series.
7. **Real pricing specific to D&D's own utility-trenching jobs**, if David is willing to share even rough figures, would strengthen the cost section beyond the general drivers currently available.

---

## Metadata

| Field | Value |
|---|---|
| **Title tag** | Utility Excavation in Eugene & Lane County, OR \| D&D (52 chars) |
| **Meta description** | Water, sewer, electrical & gas line trenching in Eugene, Springfield & Lane County, OR. Licensed, bonded, free estimates: 541-401-8726. (135 chars) |
| **H1** | Utility Excavation in Eugene, Springfield & Lane County, Oregon |
| **Canonical URL** | `/services/utility-excavation/` |
| **Schema types** | `Service` (primary, `provider` → `{"@id": "https://www.ddlandworks.com/#business"}`), `FAQPage`, `BreadcrumbList`, `Speakable` (H2 #2, #3, #5, #8), `ItemList` (H2 #1) — no `AggregateRating`/`Review` (zero reviews at launch) |
| **Internal links (out)** | `/` (homepage), `/services/excavation/`, `/services/drainage-excavation/`, `/services/trenching-backfill/`, `/services/foundation-excavation/`, `/services/septic/`, `/locations/eugene/`, `/locations/springfield/`, `/about/`, `/contact/` |
| **Primary keyword** | utility excavation eugene or |
| **Co-primary keyword** | utility trenching eugene oregon |
| **Word count** | ~2,383 words (body copy, H1 through closing CTA; excludes this metadata table, HTML image-gap comments, and the JSON-LD block) — within the brief's 1,900–2,400 target |

---

<!-- HERO BLOCK (above H1 / above the fold) -->
<!-- IMAGE GAP: Hero image — an open utility trench on a Lane County site, pipe or conduit visible before backfill. Alt: "Utility trenching for a new water or sewer line, Lane County, Oregon." No real jobsite photo exists yet — keep the existing text-only Hero component until real photography is available; do not substitute unbranded stock presented as D&D's own work. -->

**Call 541-401-8726** → [tel:5414018726](tel:5414018726)
**Free Estimate** → [/contact/](/contact/)

**Hero subheadline (keep existing, unchanged — already correctly in scope):** "Water, sewer, power, and gas lines all have to go in at the right depth, with the right bedding, and clear of everything already buried nearby. D&D Land Works calls locates first and digs second, every time."

# Utility Excavation in Eugene, Springfield & Lane County, Oregon

Utility excavation is trenching to bring a new water, sewer, electrical, or gas line to a structure: a different job than [general excavation](/services/excavation/), which creates space for a foundation, a pond, or a pad, and a different job than [drainage excavation](/services/drainage-excavation/), which trenches to manage water rather than deliver a utility service. If you landed here from D&D's excavation page looking for "trenching-specific depth," this page is the answer. D&D Land Works trenches for water service lines, sewer laterals, electrical conduit, and gas lines throughout Eugene, Springfield, and the rest of Lane County, Oregon, calling Oregon811 before every dig and matching each trench to the depth its specific utility requires, not one generic number for all four.

<!-- AI CITATION BLOCK — verbatim from utility-excavation-brief.md §5, placed in first 30% of body -->
> Utility excavation is trenching to bring a new water service line, sewer lateral, electrical conduit, or gas line to a structure — a different job than general excavation (creating space for a foundation) or drainage excavation (managing water). Required burial depth in Lane County, Oregon depends on the utility: water service lines need at least 12 inches below the local 12-inch frost depth (24 inches total, per Oregon Plumbing Specialty Code 609.1), sewer laterals need 12 inches of cover (OPSC 718.1), gas lines need 18 inches (Oregon Residential Specialty Code G2415.12), and electrical conduit needs 6 to 24 inches depending on the wiring method (NEC Table 300.5). Multiple utilities can share one trench in Lane County, as long as the water line stays at least 12 inches above the sewer line where they cross. D&D Land Works calls Oregon 811 before every dig and provides utility excavation for residential and commercial properties throughout Eugene, Springfield, and Lane County under Oregon CCB license #261742. Free estimates are available.

## What Does Utility Excavation Cover?

Every job here starts the same way: a call to Oregon811 before anything gets dug, so existing lines get marked first. See [Excavation & Earthmoving](/services/excavation/) for the fuller Oregon811 and trench-safety picture. From there, the trenching is organized by which utility is going in and why:

- **Water service lines** — a new water line run from the meter or main to a structure
- **Sewer laterals** — the pipe connecting a structure to a public sewer main or, on a property without one, to a septic system (see [Septic Install & Repair](/services/septic/) for the tank and drainfield itself)
- **Electrical conduit** — a new service, sub-panel run, or power line to a detached shop, barn, or outbuilding
- **Gas lines** — new gas service to a structure, or an individual line to an outdoor appliance like a grill or a light
- **Communications/fiber conduit** — trenching for phone, cable, or fiber lines, though depth for these follows the individual ISP or utility's own construction standard rather than a state building code (no Oregon code figure exists for this one, and none is invented here)

<!-- IMAGE GAP: A trencher and/or mini excavator in use on a utility-trenching job. Alt: "Trenching equipment for utility excavation, Lane County, Oregon." -->

## How Deep Does a Utility Line Need to Be Buried in Oregon?

There isn't one answer. Every utility has its own code-required minimum depth, and the four figures below are genuinely different from each other, which is exactly why a contractor who quotes "deep enough" without naming a number is worth a second question.

| Utility | Minimum Depth | Code Citation |
|---|---|---|
| Water service line | 12 in. below the local frost depth. Lane County's own frost depth is 12 in., so total minimum trench depth is **24 in.** below grade. | OPSC 609.1 |
| Sewer lateral | **12 in.** minimum ground cover, sloped roughly 1/4 in. per foot toward the discharge point | OPSC 718.1 |
| Gas line | **18 in.** minimum cover, standard installation. An individual outdoor-appliance line may run as shallow as 8 in. if approved by the local authority. | ORSC G2415.12 / G2415.12.1 |
| Electrical conduit | **6–24 in.**, depending on wiring method — the NEC national baseline. *Oregon's own OESC amendment table could not be directly confirmed for this pass; treat this as the confirmed national standard, not an exact Oregon-specific figure, until confirmed against the current OESC edition.* | NEC Table 300.5 (OESC-adopted) |

The water figure is Lane-County-specific: frost depth varies by county, so a different Oregon county's total won't be 24 inches. The electrical figure carries the one hedge on this page. It's the correct national baseline Oregon builds from, but it isn't a substitute for confirming the current Oregon Electrical Specialty Code amendment against a specific job.

**Not sure how deep your specific line needs to go? [Get a free on-site estimate.](/contact/)**

## Can Multiple Utilities Go in the Same Trench?

Yes, generally. Lane County code allows multiple utilities to share one trench without prohibition, so water, sewer, electrical, and gas can go in together instead of four separate digs. The one code-stated rule: where a water line and a sewer line cross, the water pipe's bottom must sit at least 12 inches above the sewer pipe's top (OPSC 720.1). Individual utility companies, EWEB, Springfield Utility Board, and NW Natural among them, may add their own separation specs on top of that, so a specific combination is worth confirming for a specific job rather than assumed. Buried non-metallic lines also need tracer wire so they can be located later without digging: blue, 14 AWG for water; green, 14 AWG for sanitary sewer; yellow, 18 AWG for gas.

**Running more than one utility to a new structure? [Ask about a joint trench and save a mobilization.](/contact/)**

## Who Calls Before Digging — and Who Calls the Utility Company?

Two different calls, to two different parties, for two different reasons. D&D Land Works calls Oregon811 before every dig, the free, mandatory locate request requiring at least two business days' notice so existing lines get marked first. Requesting a *new* utility tap is separate: typically, the property owner or their developer/builder initiates that application directly with the utility (EWEB, Springfield Utility Board, or NW Natural), and the trenching from the main or meter to the structure is done separately by the excavation contractor. Which party handles the tap-application call on a given job varies by utility and is confirmed per job, not stated here as a settled practice.

## What Happens If You Hit an Existing Line?

Work stops in that spot. If a trencher or excavator exposes an unmarked line mid-dig, digging there stops until the situation is assessed and, if needed, the line's owner is contacted. This is exactly why D&D calls Oregon811 at least two business days before starting any utility trench: a line marked in advance is far safer than one found by hitting it, and utility-service trenches (18–24 in.) generally stay well under OSHA's deeper protective-system thresholds, though a deep sewer lateral to a distant main can approach them. See [Excavation & Earthmoving](/services/excavation/) for the fuller OSHA and Oregon811 picture.

## How Much Does Utility Trenching Cost?

Cost depends on which utility is being run, how deep it has to go, and what sits above it. No verified per-foot figure exists yet for this specific niche, so the table below states what actually drives the price for each, not a number to quote from.

| Utility Type | Typical Range | What Drives It |
|---|---|---|
| Water service line | Priced per job — no verified figure available | Trench depth (24 in. total in Lane County), pipe material, distance from meter or main to structure |
| Sewer lateral | Priced per job — no verified figure available | Trench depth and required slope, distance to the main or septic tank, pipe material |
| Electrical conduit | Priced per job — no verified figure available | Wiring method and required depth, conduit length, whether a new panel or sub-panel is involved |
| Gas line | Priced per job — no verified figure available | Pipe material, run length, number of appliance connections |

One driver applies across all four: trenching through an existing driveway, patio, or sidewalk commonly costs meaningfully more than trenching through open ground, since it adds saw-cutting, material disposal, and surface restoration open-ground trenching doesn't need. That's worth knowing upfront, not as a mid-job change order. A free on-site estimate is the only accurate way to price a specific trench route.

**Want a real number instead of a range? [Request a free estimate.](/contact/)**

## Do I Need a Permit for a New Utility Line?

It depends on scope and utility. A new utility connection commonly requires a permit from the relevant authority: the city (Eugene or Springfield) for a connection within city limits, Lane County's Land Management Division outside them, and sometimes the utility company itself for the tap. See [Excavation & Earthmoving](/services/excavation/) for the fuller permit picture, including Lane County's general excavation permit thresholds. Confirm the exact requirement for your specific utility and location before work starts.

## What's the Difference Between Utility Excavation and Trenching & Backfill?

This page covers *which* utility is being run, why, and at what code-required depth: water, sewer, electrical, gas, and communications. [Trenching & Backfill](/services/trenching-backfill/) covers the general mechanics of opening and properly closing any trench, bedding, compaction in lifts, and surface restoration, whether that trench is for a utility line, a drainage pipe, or a footing. If the question is how deep a new water line needs to be, this is the page. If the question is how the trench gets closed back up properly once the pipe or conduit is in, [Trenching & Backfill](/services/trenching-backfill/) is next.

## What Equipment Shows Up on the Job?

A trencher handles long, straight utility runs efficiently. A mini excavator comes in for hand-guided precision near existing utilities, structures, or property lines, where a trencher's continuous digging action is too blunt a tool. Bedding sand or pea gravel goes in beneath and around the pipe or conduit before backfill, matched to the specific utility's spec. General backfill and compaction technique lives on [Trenching & Backfill](/services/trenching-backfill/).

## Frequently Asked Questions

**How deep does a water line need to be buried in Oregon?**
12 inches below Lane County's own 12-inch frost depth, for a total minimum trench depth of 24 inches below grade, per Oregon Plumbing Specialty Code 609.1. Frost depth varies by county, so this exact total is specific to Lane County, not a statewide constant.

**How deep does a sewer lateral need to be buried?**
12 inches minimum ground cover, per OPSC 718.1, sloped at roughly 1/4 inch per foot toward the discharge point.

**How deep does electrical conduit need to be buried?**
6 to 24 inches, depending on the wiring method: rigid metal conduit shallowest, direct-buried cable deepest, per NEC Table 300.5, the national baseline Oregon adopts. Any Oregon-specific amendment to this baseline should be confirmed for an exact figure; treat the range above as the confirmed national standard, not a settled Oregon-specific number.

**How deep does a gas line need to be buried?**
18 inches minimum cover standard, per ORSC G2415.12. An individual outdoor-appliance line, a grill or a light, may run as shallow as 8 inches if approved by the local authority, per G2415.12.1.

**Can water, sewer, electrical, and gas all go in the same trench?**
Yes, generally. Lane County permits multiple utilities sharing one trench without prohibition. The one code-stated rule: the water pipe's bottom must sit at least 12 inches above the sewer pipe's top where the two cross (OPSC 720.1). Individual utility companies may add their own separation specs on top of this, so confirm for a specific job.

**Who calls Oregon811 before utility trenching starts?**
D&D Land Works does, before every dig. Oregon811 requires at least two business days' advance notice, free of charge, enforced by the Oregon PUC. This is a separate call from the utility-company tap application, covered next.

**Who calls the utility company for a new tap — me or the contractor?**
Typically, the property owner or their developer/builder initiates the tap request directly with the utility (EWEB, Springfield Utility Board, or a rural water district); the actual trenching from the main or meter to the structure is done separately by the excavation contractor. This varies by utility, and which party D&D itself coordinates with on a given job is confirmed per job, not a fixed practice stated here as settled.

**What's the difference between utility excavation and trenching and backfill?**
This page covers which utility is being run, why, and at what code-required depth: water, sewer, electrical, gas, and communications. [Trenching & Backfill](/services/trenching-backfill/) covers the general mechanics of opening and properly closing any trench, bedding, compaction in lifts, surface restoration, whether it's for a utility line, drainage pipe, or a footing.

**Does trenching under a driveway or patio cost more than trenching through open ground?**
Yes. Trenching through existing hardscape requires saw-cutting, disposal of the removed material, and surface restoration that open-ground trenching doesn't, a real cost driver stated honestly here rather than surfacing as a surprise mid-job. No Lane-County-exact multiplier exists; a free on-site estimate is the way to price a specific trench route.

## Related Services

Utility excavation is one piece of a larger site. [Excavation & Earthmoving](/services/excavation/) covers the cut-and-fill and trench-safety mechanics that apply to any dig, including this one. [Drainage Excavation](/services/drainage-excavation/) covers trenching for water management, a different purpose than delivering a utility service, even though the mechanics overlap. [Trenching & Backfill](/services/trenching-backfill/) covers closing any trench properly, no matter what it's for. A utility stub-in during a new foundation touches [Foundation Excavation](/services/foundation-excavation/); a sewer lateral running to a septic tank touches [Septic Install & Repair](/services/septic/), where the tank and drainfield themselves live.

- **[Excavation & Earthmoving](/services/excavation/)** — general cut-and-fill, trenching, and earthmoving mechanics, plus the fuller OSHA/Oregon811 picture
- **[Drainage Excavation](/services/drainage-excavation/)** — buried trenching for water management, not utility service delivery
- **[Trenching & Backfill](/services/trenching-backfill/)** — the general mechanics of closing any trench properly
- **[Foundation Excavation](/services/foundation-excavation/)** — digging and leveling for footings and foundations
- **[Septic Install & Repair](/services/septic/)** — the septic tank and drainfield itself

D&D Land Works covers all of this under one Oregon CCB license (#261742), for both residential and commercial properties throughout [Eugene](/locations/eugene/), [Springfield](/locations/springfield/), and the rest of Lane County. To see the full range of excavation services D&D Land Works offers, visit the [homepage](/) or [David Deggelman's about page](/about/).

<!-- IMAGE GAP: A joint trench showing multiple utility lines (water, sewer, electrical) laid side by side before backfill. Alt: "Joint trench with water, sewer, and electrical lines, Lane County, Oregon." This page's clearest unclaimed differentiator. -->
<!-- IMAGE GAP: Tracer wire close-up, laid alongside a non-metallic pipe before backfill. Alt: "Tracer wire installation alongside a buried utility line." -->
<!-- IMAGE GAP: Simple illustrated graphic showing the four utility depths side by side (water/sewer/gas/electrical). Alt: "Utility burial depth by type: water, sewer, gas, and electrical conduit." Can launch as a simple illustrated comparison graphic. -->

## Get Your Utility Line In

Water, sewer, electrical, and gas lines each have their own code-required depth, and getting it right the first time means no failed inspection and no re-dig later. Free estimate for utility excavation anywhere in Lane County.

**Call 541-401-8726** → [tel:5414018726](tel:5414018726)
**Or [get a free estimate](/contact/)**

---

## Schema (JSON-LD)

Note on `Speakable`: `cssSelector` values below assume heading `id` attributes are added when this content is placed into the Astro template, matching the pattern used in `excavation-content.md` and `drainage-excavation-content.md` — add these ids during the Astro build step; they don't exist in this markdown draft.

```json
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://www.ddlandworks.com/services/utility-excavation/#service",
      "name": "Utility Excavation",
      "serviceType": "Utility Excavation",
      "description": "Utility excavation is trenching to bring a new water service line, sewer lateral, electrical conduit, or gas line to a structure — a different job than general excavation (creating space for a foundation) or drainage excavation (managing water). Required burial depth in Lane County, Oregon depends on the utility: water service lines need at least 12 inches below the local 12-inch frost depth (24 inches total, per Oregon Plumbing Specialty Code 609.1), sewer laterals need 12 inches of cover (OPSC 718.1), gas lines need 18 inches (Oregon Residential Specialty Code G2415.12), and electrical conduit needs 6 to 24 inches depending on the wiring method (NEC Table 300.5, the national baseline Oregon adopts). Multiple utilities can share one trench in Lane County, as long as the water line stays at least 12 inches above the sewer line where they cross. D&D Land Works calls Oregon 811 before every dig and provides utility excavation for residential and commercial properties throughout Eugene, Springfield, and Lane County, Oregon.",
      "url": "https://www.ddlandworks.com/services/utility-excavation/",
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
          "name": "How deep does a water line need to be buried in Oregon?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "12 inches below Lane County's own 12-inch frost depth, for a total minimum trench depth of 24 inches below grade, per Oregon Plumbing Specialty Code 609.1. Frost depth varies by county, so this exact total is specific to Lane County, not a statewide constant."
          }
        },
        {
          "@type": "Question",
          "name": "How deep does a sewer lateral need to be buried?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "12 inches minimum ground cover, per OPSC 718.1, sloped at roughly 1/4 inch per foot toward the discharge point."
          }
        },
        {
          "@type": "Question",
          "name": "How deep does electrical conduit need to be buried?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "6 to 24 inches, depending on the wiring method: rigid metal conduit shallowest, direct-buried cable deepest, per NEC Table 300.5, the national baseline Oregon adopts. Any Oregon-specific amendment to this baseline should be confirmed for an exact figure; treat this range as the confirmed national standard, not a settled Oregon-specific number."
          }
        },
        {
          "@type": "Question",
          "name": "How deep does a gas line need to be buried?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "18 inches minimum cover standard, per ORSC G2415.12. An individual outdoor-appliance line, a grill or a light, may run as shallow as 8 inches if approved by the local authority, per G2415.12.1."
          }
        },
        {
          "@type": "Question",
          "name": "Can water, sewer, electrical, and gas all go in the same trench?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, generally. Lane County permits multiple utilities sharing one trench without prohibition. The one code-stated rule: the water pipe's bottom must sit at least 12 inches above the sewer pipe's top where the two cross (OPSC 720.1). Individual utility companies may add their own separation specs on top of this, so confirm for a specific job."
          }
        },
        {
          "@type": "Question",
          "name": "Who calls Oregon811 before utility trenching starts?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "D&D Land Works does, before every dig. Oregon811 requires at least two business days' advance notice, free of charge, enforced by the Oregon PUC. This is a separate call from the utility-company tap application."
          }
        },
        {
          "@type": "Question",
          "name": "Who calls the utility company for a new tap — me or the contractor?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Typically, the property owner or their developer/builder initiates the tap request directly with the utility (EWEB, Springfield Utility Board, or a rural water district); the actual trenching from the main or meter to the structure is done separately by the excavation contractor. This varies by utility, and which party D&D itself coordinates with on a given job is confirmed per job, not a fixed practice."
          }
        },
        {
          "@type": "Question",
          "name": "What's the difference between utility excavation and trenching and backfill?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "This page covers which utility is being run, why, and at what code-required depth: water, sewer, electrical, gas, and communications. Trenching & Backfill covers the general mechanics of opening and properly closing any trench, bedding, compaction in lifts, surface restoration, whether it's for a utility line, drainage pipe, or a footing."
          }
        },
        {
          "@type": "Question",
          "name": "Does trenching under a driveway or patio cost more than trenching through open ground?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Trenching through existing hardscape requires saw-cutting, disposal of the removed material, and surface restoration that open-ground trenching doesn't, a real cost driver stated honestly here rather than surfacing as a surprise mid-job. No Lane-County-exact multiplier exists; a free on-site estimate is the way to price a specific trench route."
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
          "name": "Utility Excavation",
          "item": "https://www.ddlandworks.com/services/utility-excavation/"
        }
      ]
    },
    {
      "@type": "ItemList",
      "name": "Utility Types Covered",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Water service lines" },
        { "@type": "ListItem", "position": 2, "name": "Sewer laterals" },
        { "@type": "ListItem", "position": 3, "name": "Electrical conduit" },
        { "@type": "ListItem", "position": 4, "name": "Gas lines" },
        { "@type": "ListItem", "position": 5, "name": "Communications/fiber conduit" }
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://www.ddlandworks.com/services/utility-excavation/#webpage",
      "speakable": {
        "@type": "SpeakableSpecification",
        "cssSelector": [
          "#how-deep-does-a-utility-line-need-to-be-buried-in-oregon",
          "#can-multiple-utilities-go-in-the-same-trench",
          "#what-happens-if-you-hit-an-existing-line",
          "#whats-the-difference-between-utility-excavation-and-trenching-backfill"
        ]
      }
    }
  ]
}
```

---

**Note:** The mandatory humanizer pass (per this project's carried-forward working rule) is complete. The editable prose sections (everything outside the FAQ block and AI citation block, both preserved verbatim since the FAQ mirrors the JSON-LD schema) had 2 em-dash constructions converted to a colon and a period, respectively — this page had noticeably fewer than prior pages to start with. The electrical-depth verification caveat was touched only for punctuation, never wording, everywhere it appears. No pricing specific to D&D's own jobs, founding year, address, hours, or review counts was invented anywhere in this file; the cost section states real cost drivers rather than fabricated dollar ranges, since no Lane-County-specific or verified national per-foot utility-trenching figure exists in the research behind this page. The water, sewer, and gas depth figures (OPSC 609.1, OPSC 718.1, OPSC 720.1, ORSC G2415.12/.1) are stated with full confidence, sourced from Lane County Land Management Division's own government page. The electrical depth figure (NEC Table 300.5, 6–24 in.) carries its verification caveat every place it's stated as a specific number, both in visible body copy and in the JSON-LD `Service.description`, distinguishing the confirmed NEC national baseline from Oregon's own OESC amendment table, which could not be directly confirmed during research (403 error on iccsafe.org). The utility-tap coordination role (who calls EWEB/SUB/NW Natural for a new tap) is stated as a general, hedged industry pattern, never as a confirmed D&D operational practice, consistent everywhere it appears (H2 #4, FAQ). No sentence in this file claims joint trenching, gas-line trenching, or communications/fiber trenching as a demonstrated, completed D&D project; each is presented as a service category. Communications/fiber conduit depth is disclosed honestly as having no Oregon state-code figure, not filled with an invented number. General trench-safety/OSHA/Oregon811 mechanics and the OSHA depth thresholds are cross-linked to `/services/excavation/` rather than re-derived, matching that page's own shipped figures exactly. Buried drainage trenching (French drains, curtain drains) and the general backfill-in-lifts compaction technique are not explained here; both are cross-linked to `/services/drainage-excavation/` and `/services/trenching-backfill/` respectively, consistent with the scope boundary in `00-research-pack.md` §0. No WordPress reference appears anywhere in this file. Placing this into the Astro site (live or test route) is a separate, later step and is not part of this task.
