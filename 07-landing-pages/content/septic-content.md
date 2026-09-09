# D&D Land Works — Septic Install & Repair Page Content (Draft)

**Prepared:** 2026-09-08 · **For:** Ducker Creative / D&D Land Works
**Built from:** `07-landing-pages/briefs/septic-brief.md` + full `01-research/page-research/septic/` pack + `business-info.md` + `docs/design-system.md` + `07-landing-pages/content/home-content.md` (the already-shipped "What Does DEQ Certified Mean for Septic Work?" section this page extends, not contradicts) + `07-landing-pages/content/land-clearing-content.md` (voice/tone and schema `@id` pattern reference) + `07-landing-pages/content/site-preparation-content.md` (the drainfield-sequencing rule this page cross-links to, not re-derives).

**Status:** Humanizer pass complete (2026-09-08). See note at end of file.

---

## OPEN ITEM — READ BEFORE THIS PAGE PUBLISHES

**David's exact DEQ credential type and number is unconfirmed and is NOT stated anywhere in this file beyond the general "DEQ Certified" claim already shipped on the homepage.** Oregon's real DEQ credential structure has two separate layers — a business-level Sewage Disposal Service license (Installer / Pumper / Combined Pumper-Installer) and individual certifications (Installer Certification / Maintenance Provider Certification) — and this page explains that structure as **general Oregon regulatory education only**. It does not assert which license type or certification category David holds, does not invent a credential number, does not invent years of septic-specific experience, does not invent a systems-installed count, and does not name a specific installed system brand (e.g., AdvanTex). **Confirm David's exact DEQ credential type/number, and whether it covers Maintenance Provider certification, before this page is treated as final** — same open item flagged in `07-landing-pages/briefs/septic-brief.md`'s Open Items #1 and #5.

A second, smaller flag carried from the brief: the current live page's H1 is simply "Septic Install & Repairs." This draft uses the fuller "Septic Install & Repair in Eugene, Springfield & Lane County, Oregon" for consistency with the other shipped service pages — **flag for David/dev confirmation before build**; the URL/slug does not change. A third flag, also carried from the brief: `site/src/pages/resources/oregon-septic-basics.astro` currently states a stronger, unhedged version of the home-sale-inspection claim than this page's H2 #9 — that resource page should be corrected to match this page's language before the two are cross-linked as agreeing sources.

---

## Metadata

| Field | Value |
|---|---|
| **Title tag** | Septic Install & Repair in Eugene & Lane County, OR \| D&D (57 chars) |
| **Meta description** | DEQ-certified septic installation & repair in Eugene, Springfield & Lane County, OR. Licensed, bonded, free estimates: 541-401-8726. (134 chars) |
| **H1** | Septic Install & Repair in Eugene, Springfield & Lane County, Oregon |
| **Canonical URL** | `/services/septic-install-repairs/` |
| **Schema types** | `Service` (primary, `provider` → `{"@id": "https://www.ddlandworks.com/#business"}`), `FAQPage`, `HowTo` (4-step site evaluation process), `ItemList` (signs-of-failure list), `BreadcrumbList`, `Speakable` (H2 #1, #3 lead-in, #6, #7, #9) — no `AggregateRating`/`Review` (zero reviews at launch), no `MedicalBusiness`, no `hasCredential` claim beyond what's already shipped on the homepage (not re-declared here since the business entity isn't redefined inline — see Schema section note) |
| **Internal links (out)** | `/` (homepage), `/services/site-preparation/` (sideways, drainfield-sequencing framing), `/resources/septic-installation-cost-oregon/`, `/resources/oregon-septic-basics/`, `/locations/eugene/septic/`, `/locations/springfield/septic/`, `/about/`, `/contact/` |
| **Primary keyword** | septic installation eugene or / septic system installation eugene oregon |
| **Co-primary keyword** | septic repair eugene oregon / septic system repair lane county |
| **Word count** | ~2,499 words (body copy, H1 through closing CTA; excludes this metadata table, HTML image-gap comments, and the JSON-LD block) — within the brief's 2,300–2,900 target |

---

<!-- HERO BLOCK (above H1 / above the fold) -->
<!-- IMAGE GAP: Hero image — a septic tank or drainfield installation in progress on a Lane County site. Alt: "Septic system installation, DEQ-certified work in Lane County, Oregon." No real jobsite photo exists yet — keep the existing text-only Hero component's copy unchanged; do not substitute unbranded stock presented as D&D's own work. -->

**Call 541-401-8726** → [tel:5414018726](tel:5414018726)
**Free Estimate** → [/contact/](/contact/)

# Septic Install & Repair in Eugene, Springfield & Lane County, Oregon

Septic installation and repair in Oregon requires a separate, state-issued credential beyond general contracting licensure: DEQ certification, granted under Oregon Administrative Rules Chapter 340, Division 71. D&D Land Works holds both: Oregon CCB #261742 for general contracting and excavation, and DEQ certification for septic work specifically. They're two different credential systems administered by two different state agencies, and Oregon requires both, not one standing in for the other. D&D Land Works provides septic installation and repair throughout [Eugene](/locations/eugene/septic/), [Springfield](/locations/springfield/septic/), and the rest of Lane County, Oregon, for new construction, ADUs, and existing systems that need a repair or a full replacement. The company's septic certification lives inside the same business that handles the excavation, grading, and site prep, so a project doesn't have to be split across a separate installer and a separate excavation contractor.

<!-- AI CITATION BLOCK — verbatim from septic-brief.md §5 / 00-research-pack.md §13, placed in first 30% of body per brief §5 -->
> D&D Land Works provides DEQ-certified septic system installation and repair throughout Eugene, Springfield, and Lane County, Oregon, as part of a full-service excavation company licensed and bonded under Oregon CCB #261742. In Oregon, general contracting authority (CCB) and septic system authority (Oregon DEQ certification, under Oregon Administrative Rules Chapter 340, Division 71) are separate credentials, and D&D holds both. Septic permitting in Lane County is administered locally by Lane County's Subsurface Sanitation Program, acting as an authorized agent of Oregon DEQ. Oregon septic systems fall into two broad categories: conventional (gravity-fed) systems, typically the lower-cost option where soil and site conditions allow, and DEQ-approved alternative treatment technologies (sand filters, aerobic treatment units, and similar systems), required on sites with more challenging soil, water table, or lot conditions and typically costing several times more than a conventional system. D&D Land Works handles both installation and repair, though not routine pumping. Free estimates are available; call 541-401-8726.

## Why DEQ Certification Matters for Septic Work

"DEQ Certified" means D&D Land Works holds an Oregon Department of Environmental Quality credential required to legally construct, install, or repair a septic system in this state. Septic work is governed statewide by Oregon Administrative Rules Chapter 340, Division 71, covering permitting, site evaluation, design and construction standards, and the certification required to do the work at all. Without a DEQ credential, septic construction or repair isn't legal, regardless of a contractor's general excavation experience or equipment. D&D Land Works holds this certification and can point you to the state's own verification tool rather than asking you to take that on faith. See below.

## What's the Difference Between a CCB License and DEQ Certification?

They're separate credentials, issued and enforced by two different state agencies. Oregon's Construction Contractors Board (CCB) license covers general contracting and excavation authority. That's the license D&D Land Works holds as CCB #261742. Septic work requires a separate credential from Oregon DEQ. Oregon's actual DEQ structure has two layers: a business-level Sewage Disposal Service license (Installer, Pumper, or Combined Pumper/Installer), and an individual-level certification (Installer Certification, required before a business can hold an Installer or Combined license, and a separate Maintenance Provider Certification for servicing alternative treatment, sand filter, or recirculating gravel filter systems on an ongoing basis). D&D Land Works holds DEQ certification, which qualifies it to install and repair septic systems under Oregon's onsite wastewater rules. A crew without that certification can't legally do septic work, regardless of their equipment or general license. You can verify any Oregon septic contractor's status directly through [DEQ's own Sewage Disposal Service business license search](https://www.oregon.gov/deq/residential/pages/onsite-search.aspx), the same kind of public record as the CCB lookup. For more on how Oregon's septic rules work generally, see [Oregon septic basics](/resources/oregon-septic-basics/).

## Conventional vs. Alternative Septic Systems: What's the Real Difference?

A conventional septic system and an alternative treatment system aren't different price tiers of the same product: they're different technologies required by different site conditions. Which one a property needs is decided by the site evaluation's soil and water-table findings, not by preference, and not by which one costs more or less. Willamette Valley clay soil and a high water table are common on Lane County lots, which is part of why alternative systems show up more often here than in some parts of Oregon.

| System Type | Typical Installed Cost | When It's Required |
|---|---|---|
| Conventional (gravity-fed) system | $3,000–$10,000 | Oregon's baseline system, used where soil, water table, and lot size support a standard gravity-fed design |
| Sand filter system (intermittent) | $7,000–$18,000 | An alternative treatment technology (ATT) used where soil conditions call for extra filtration before the drainfield |
| Sand filter system (recirculating) | $10,000–$25,000+ | A more complex sand-filter variant for more challenging site conditions |
| Aerobic treatment unit (ATU) | $10,000–$20,000, plus an ongoing service contract | Actively aerates wastewater to a higher treatment standard; required where a conventional or sand-filter system won't meet site conditions, and carries a required Maintenance Provider service contract a conventional system doesn't need |

These are general industry ranges, not Lane County–guaranteed pricing. A site evaluation and estimate are what determine the real number for a specific property, not a preference on either side.

## How Much Does Septic Installation or Repair Cost in Lane County?

Beyond installation cost by system type above, repair pricing varies by what's actually failing. These are general estimates, not quotes. A site evaluation or on-site diagnosis determines the real number for your property.

| Service | Typical Range | Notes |
|---|---|---|
| Conventional system installation | $3,000–$10,000 | See the system-type table above for the full cost breakdown |
| Alternative treatment system installation | $12,000–$30,000+ | Sand filter or ATU systems, required on more challenging sites |
| Tank repair | Roughly $600–$3,000, averaging around $1,828 | Severity and access to the tank drive most of the range |
| Leach field / drainfield repair | $2,000–$20,000 | The widest range of any repair type, since scope varies enormously by what actually failed and how much of the field is affected |

A septic site evaluation itself is also a separate, real Lane County government fee, not something D&D Land Works charges or profits from. Confirm current fees directly with Lane County's Subsurface Sanitation Program. See [our full septic cost breakdown](/resources/septic-installation-cost-oregon/) for broader national context alongside these ranges.

**Want a real number instead of a range? A site evaluation determines it. [Request a free estimate](/contact/).**

## Is My Septic System Failing? Signs to Watch For

None of these signs automatically mean a full replacement. See the next section for how to think through repair versus replacement calmly. Signs worth having looked at:

- Slow drains throughout the house, not just at one fixture
- Soggy, spongy, or unusually green patches over the drainfield
- Sewage odor near the tank or drainfield
- Gurgling sounds from drains or toilets
- Standing water or a sewage backup inside the house
- A black, slimy substance surfacing near the tank or drainfield, a more advanced sign worth addressing without delay

<!-- IMAGE GAP: Excavator exposing a tank or drainfield for repair. Alt: "Septic repair and drainfield work, Lane County, Oregon." Genuinely absent from the live site; ties directly to this section. -->

## Should You Repair or Replace a Failing System?

The industry rule of thumb: if repairing a failing system would cost more than roughly half of a full replacement, replacement is usually the more sensible long-term call. That's a real, calculable comparison, not an automatic push toward the bigger job. A few factors that tend to point toward one side or the other:

- **Age of the system** — a tank or drainfield already near the end of its expected life makes repair more of a short-term fix
- **What's actually failing** — a tank-side repair is usually cheaper and more contained than drainfield failure
- **Isolated vs. systemic** — a single component failing is a different situation than a system-wide capacity problem

D&D Land Works will walk through where your system falls on that line, based on what the diagnosis actually shows, not which option costs more.

**Not sure which side of that line your system is on? [We'll walk it with you, no pressure.](/contact/)**

## Does Lane County or Oregon DEQ Issue My Septic Permit?

Lane County administers septic permitting locally, as an authorized agent of Oregon DEQ. Under Oregon Administrative Rules 340-071-0120, DEQ has authorized local jurisdictions to act as its agent for permitting onsite wastewater systems, and DEQ directly manages septic permitting itself in only three Oregon counties: Curry, Jackson, and Josephine. Lane County is one of the other 33 counties handling it locally, through its own Subsurface Sanitation Program within the Land Management Division. In practice, that means your site evaluation, permit application, and inspections are handled by Lane County directly, not by a state office in Salem.

## What Happens During a Septic Site Evaluation?

A septic permit isn't issued sight unseen. It follows a defined sequence:

1. **Site evaluation.** Lane County's Subsurface Sanitation Program evaluates the property's soil and water table, typically through test pits, to determine what system type the site can support.
2. **Septic permit application.** Once the site evaluation is approved, a septic permit application goes in, commonly alongside a building permit application if the property is being built on.
3. **Planning clearance.** The application clears Lane County's planning review before final permits are issued.
4. **Construction.** Once permits are issued, installation begins. The physical construction itself typically takes a matter of days, though the full evaluation-to-permit process can run several weeks to a few months depending on scheduling and site complexity.

One sequencing detail worth knowing before any grading or clearing happens on the same property: once a drainfield location is proposed or approved through the site evaluation, it can't be cut, filled, paved, or otherwise disturbed without risking the county's approval. That means a second round of test pits, added cost, and real delay, and on a tight lot, there may not be an equally good alternative location, since suitable soil area on a given parcel is finite. See [site preparation](/services/site-preparation/) for how D&D sequences grading and clearing work around that rule.

<!-- IMAGE GAP: Test pits dug during a site evaluation. Alt: "Septic site evaluation test pits, Lane County, Oregon." Genuinely absent; ties directly to this section. -->

## Do I Need a Septic Inspection to Sell My House in Oregon?

Oregon doesn't require a septic-specific inspection by state law before you sell your home. What Oregon law does require is a Seller's Property Disclosure Statement under ORS 105.465, which covers known material defects, including a septic problem the seller actually knows about. The legal standard is actual knowledge, not an obligation to go investigate one. In practice, most lenders and buyers ask for an independent septic inspection anyway, and a sale agreement commonly includes an On-Site Sewage Addendum as standard practice. That's a real, common part of most transactions, but it's a transactional practice, not a state legal mandate. Worth knowing which is which if you're navigating a sale on a timeline.

## How Often Should You Pump Your Septic Tank?

Oregon DEQ publishes two ways to think about it, and either is reasonable:

- **Schedule-based.** Pump on a fixed 3–5 year interval, adjusted for household size and tank capacity.
- **Condition-based.** Have the tank inspected every 5–7 years and pump once solids reach roughly 40% of tank volume.

D&D Land Works handles septic installation and repair, not routine pumping. If a pumping visit is what you need, a licensed pumper is the right call for that specific job.

## Frequently Asked Questions

**What's the difference between a conventional and an alternative (ATT) septic system, and how do I know which one I need?**
A conventional (gravity-fed) system is Oregon's baseline and the lower-cost option. An alternative treatment system (sand filter, aerobic treatment unit) is required where soil, water table, slope, or lot size don't support a conventional design. Which one a property needs is decided by the site evaluation's soil and water-table findings, not preference.

**Does Lane County or Oregon DEQ directly issue my septic permit?**
Lane County administers septic permitting locally, as an authorized agent of Oregon DEQ. DEQ directly manages permitting in only three Oregon counties (Curry, Jackson, Josephine); Lane County is one of the other 33 counties handling it locally through its Subsurface Sanitation Program.

**Should I repair or replace my failing septic system?**
If repairing costs more than roughly half of a full replacement, replacement is usually the smarter long-term call. That's a calm, real decision based on the actual numbers for your system, not an automatic push toward the bigger job.

**What are the signs my septic system or drainfield is failing?**
Slow drains throughout the house, soggy or unusually green patches over the drainfield, sewage odor near the tank or drainfield, and gurgling drains are the core symptoms. Standing sewage or a black, slimy substance on the ground is a more advanced sign worth addressing without delay.

**How much does septic installation or repair typically cost in Lane County?**
Roughly $3,000–$10,000 for a conventional system, $12,000–$30,000+ for an alternative system, plus tank repair (averaging around $1,828) and leach field repair ($2,000–$20,000). These are general ranges, not quotes — a site evaluation determines the real number for a specific property.

**How often should I have my septic tank pumped?**
Oregon DEQ recommends roughly every 3–5 years depending on household size and tank capacity, or inspecting every 5–7 years and pumping once solids exceed about 40% of tank volume. D&D Land Works handles installation and repair, not routine pumping, so a pumping-specific need may call for a separate provider.

**Do I need a septic inspection before selling my house in Oregon?**
Oregon doesn't require a septic-specific inspection by state law before a home sale, but sellers must disclose known septic problems under Oregon's Seller's Property Disclosure Statement law, and most lenders and buyers ask for an independent inspection anyway before closing.

**Can I build, pave, or grade over my drainfield?**
No. Once a drainfield location is proposed or approved through the site evaluation, it can't be cut, filled, paved, or otherwise disturbed without risking the county's septic approval — which can mean a second round of test pits, added cost, and real delay.

**What's the difference between a general contractor's CCB license and DEQ septic certification?**
They're separate credentials. Oregon's CCB license covers general contracting and excavation; DEQ certification is the separate state credential specifically required to legally install or repair a septic system. D&D Land Works holds both.

**How do I verify a septic contractor is actually DEQ licensed?**
Search Oregon DEQ's own Sewage Disposal Service business license search tool — the same kind of public, self-checkable record as the CCB license lookup — rather than taking a contractor's word for it.

## Get Your Septic System Checked

Whether you're installing a new system on raw land or dealing with one that's already failing, D&D Land Works handles both installation and repair under one Oregon CCB license and DEQ certification. Free estimates are available for planned projects and repair calls alike.

**Call 541-401-8726** → [tel:5414018726](tel:5414018726)
**Or [get a free estimate](/contact/)**

To learn more about the company and the person behind it, visit [David Deggelman](/about/) on the About page. D&D Land Works also serves [Eugene](/locations/eugene/septic/) and [Springfield](/locations/springfield/septic/) directly for septic work, alongside the rest of Lane County.

---

## Schema (JSON-LD)

Note on `provider`: this page references the business entity by `@id` only (`https://www.ddlandworks.com/#business`), matching the exact pattern already shipped in `site-preparation-content.md`, `excavation-content.md`, `grading-leveling-content.md`, and `land-clearing-content.md`'s JSON-LD. The business entity itself, including its `hasCredential` (`EducationalOccupationalCredential`, "DEQ Certified") block, is defined once in `home-content.md`'s JSON-LD and is not redefined or escalated here — consistent with every sibling page in this pipeline. No `MedicalBusiness` type and no `AggregateRating`/`Review` are used, per the brief.

Note on `Speakable`: `cssSelector` values below assume heading `id` attributes are added when this content is placed into the Astro template, matching the pattern used in the sibling pages — add these ids during the Astro build step; they don't exist in this markdown draft.

```json
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://www.ddlandworks.com/services/septic-install-repairs/#service",
      "name": "Septic Installation and Repair",
      "serviceType": "Septic Installation and Repair",
      "description": "D&D Land Works provides DEQ-certified septic system installation and repair throughout Eugene, Springfield, and Lane County, Oregon, as part of a full-service excavation company licensed and bonded under Oregon CCB #261742. Oregon septic systems fall into two broad categories: conventional (gravity-fed) systems, typically the lower-cost option where soil and site conditions allow, and DEQ-approved alternative treatment technologies (sand filters, aerobic treatment units, and similar systems), required on sites with more challenging soil, water table, or lot conditions. D&D Land Works handles both installation and repair, though not routine pumping.",
      "url": "https://www.ddlandworks.com/services/septic-install-repairs/",
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
          "name": "What's the difference between a conventional and an alternative (ATT) septic system, and how do I know which one I need?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A conventional (gravity-fed) system is Oregon's baseline and the lower-cost option. An alternative treatment system (sand filter, aerobic treatment unit) is required where soil, water table, slope, or lot size don't support a conventional design. Which one a property needs is decided by the site evaluation's soil and water-table findings, not preference."
          }
        },
        {
          "@type": "Question",
          "name": "Does Lane County or Oregon DEQ directly issue my septic permit?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Lane County administers septic permitting locally, as an authorized agent of Oregon DEQ. DEQ directly manages permitting in only three Oregon counties (Curry, Jackson, Josephine); Lane County is one of the other 33 counties handling it locally through its Subsurface Sanitation Program."
          }
        },
        {
          "@type": "Question",
          "name": "Should I repair or replace my failing septic system?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "If repairing costs more than roughly half of a full replacement, replacement is usually the smarter long-term call. That's a calm, real decision based on the actual numbers for your system, not an automatic push toward the bigger job."
          }
        },
        {
          "@type": "Question",
          "name": "What are the signs my septic system or drainfield is failing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Slow drains throughout the house, soggy or unusually green patches over the drainfield, sewage odor near the tank or drainfield, and gurgling drains are the core symptoms. Standing sewage or a black, slimy substance on the ground is a more advanced sign worth addressing without delay."
          }
        },
        {
          "@type": "Question",
          "name": "How much does septic installation or repair typically cost in Lane County?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Roughly $3,000-$10,000 for a conventional system, $12,000-$30,000+ for an alternative system, plus tank repair (averaging around $1,828) and leach field repair ($2,000-$20,000). These are general ranges, not quotes — a site evaluation determines the real number for a specific property."
          }
        },
        {
          "@type": "Question",
          "name": "How often should I have my septic tank pumped?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Oregon DEQ recommends roughly every 3-5 years depending on household size and tank capacity, or inspecting every 5-7 years and pumping once solids exceed about 40% of tank volume. D&D Land Works handles installation and repair, not routine pumping, so a pumping-specific need may call for a separate provider."
          }
        },
        {
          "@type": "Question",
          "name": "Do I need a septic inspection before selling my house in Oregon?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Oregon doesn't require a septic-specific inspection by state law before a home sale, but sellers must disclose known septic problems under Oregon's Seller's Property Disclosure Statement law, and most lenders and buyers ask for an independent inspection anyway before closing."
          }
        },
        {
          "@type": "Question",
          "name": "Can I build, pave, or grade over my drainfield?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Once a drainfield location is proposed or approved through the site evaluation, it can't be cut, filled, paved, or otherwise disturbed without risking the county's septic approval, which can mean a second round of test pits, added cost, and real delay."
          }
        },
        {
          "@type": "Question",
          "name": "What's the difference between a general contractor's CCB license and DEQ septic certification?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "They're separate credentials. Oregon's CCB license covers general contracting and excavation; DEQ certification is the separate state credential specifically required to legally install or repair a septic system. D&D Land Works holds both."
          }
        },
        {
          "@type": "Question",
          "name": "How do I verify a septic contractor is actually DEQ licensed?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Search Oregon DEQ's own Sewage Disposal Service business license search tool, the same kind of public, self-checkable record as the CCB license lookup, rather than taking a contractor's word for it."
          }
        }
      ]
    },
    {
      "@type": "HowTo",
      "name": "What Happens During a Septic Site Evaluation",
      "step": [
        {
          "@type": "HowToStep",
          "position": 1,
          "name": "Site evaluation",
          "text": "Lane County's Subsurface Sanitation Program evaluates the property's soil and water table, typically through test pits, to determine what system type the site can support."
        },
        {
          "@type": "HowToStep",
          "position": 2,
          "name": "Septic permit application",
          "text": "Once the site evaluation is approved, a septic permit application goes in, commonly alongside a building permit application if the property is being built on."
        },
        {
          "@type": "HowToStep",
          "position": 3,
          "name": "Planning clearance",
          "text": "The application clears Lane County's planning review before final permits are issued."
        },
        {
          "@type": "HowToStep",
          "position": 4,
          "name": "Construction",
          "text": "Once permits are issued, installation begins. Physical construction typically takes a matter of days, though the full evaluation-to-permit process can run several weeks to a few months."
        }
      ]
    },
    {
      "@type": "ItemList",
      "name": "Signs a Septic System May Be Failing",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Slow drains throughout the house, not just at one fixture" },
        { "@type": "ListItem", "position": 2, "name": "Soggy, spongy, or unusually green patches over the drainfield" },
        { "@type": "ListItem", "position": 3, "name": "Sewage odor near the tank or drainfield" },
        { "@type": "ListItem", "position": 4, "name": "Gurgling sounds from drains or toilets" },
        { "@type": "ListItem", "position": 5, "name": "Standing water or a sewage backup inside the house" },
        { "@type": "ListItem", "position": 6, "name": "A black, slimy substance surfacing near the tank or drainfield" }
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
          "name": "Septic Install & Repairs",
          "item": "https://www.ddlandworks.com/services/septic-install-repairs/"
        }
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://www.ddlandworks.com/services/septic-install-repairs/#webpage",
      "speakable": {
        "@type": "SpeakableSpecification",
        "cssSelector": [
          "#why-deq-certification-matters-for-septic-work",
          "#conventional-vs-alternative-septic-systems-whats-the-real-difference",
          "#should-you-repair-or-replace-a-failing-system",
          "#does-lane-county-or-oregon-deq-issue-my-septic-permit",
          "#do-i-need-a-septic-inspection-to-sell-my-house-in-oregon"
        ]
      }
    }
  ]
}
```

---

**Note:** The mandatory humanizer pass (per CLAUDE.md's Carried-Forward Working Rules) is complete — the editable prose sections (everything outside the FAQ block and AI citation block, both preserved verbatim since the FAQ mirrors the JSON-LD schema) had 16 em-dash constructions converted to periods or colons. Every credential-related sentence (CCB vs. DEQ distinction, the ORS 105.465 disclosure-duty wording) was touched only for punctuation, never for wording, so the conservative credential framing and legal distinctions are unchanged. Tone was kept calm and non-alarmist throughout, including in the failing-system-signs list. No WordPress references appear anywhere in this file. Placing this content into `site/src/pages/services/septic-install-repairs.astro` (live or a test route) is a separate, later step and is not part of this task.
