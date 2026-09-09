# Intent Triangulation — Septic Install & Repair (`/services/septic-install-repairs/`)

**Sourcing note:** consistent with every prior pack in this project, named-competitor 1-3 star review text was not directly retrievable this session. This file triangulates intent from: (1) genuine Quora question titles (verbatim, high-signal real-user questions — see `02-question-mine.md`), (2) septic-industry education/cost literature reflecting aggregated real complaint and decision patterns, (3) Oregon-specific regulatory facts that predictably create pain points, and (4) the distinct psychological framing this task explicitly asked for: septic is frequently a distressed/urgent purchase, not a planned home-improvement decision, and that changes what "good" content looks like here versus the prior four pages in this pipeline.

---

## What's structurally different about septic buyer psychology (read before using Table 1-3)

The four prior pages in this pipeline (site prep, excavation/grading, grading/leveling, land clearing) are almost entirely **planned-project** purchases: someone bought land, is building something, and is shopping on their own timeline. Septic buyers split into two very different groups, and content that only serves one of them will alienate the other:

1. **Planned buyers** — new construction, an ADU, or a property without existing septic. Timeline-flexible, cost-sensitive, comparison-shopping. This group behaves like the buyers on the other four pages.
2. **Distressed buyers** — an existing system just failed (backing up, alarm going off, sewage surfacing in the yard), or a home sale is contingent on a septic inspection passing and one just failed. This group is time-pressured, often financially stressed by an unplanned five-figure expense, and — per the task's explicit framing — vulnerable to being taken advantage of. Content written only for group 1 (calm, comparison-shopping tone) will read as tone-deaf to group 2; content written only for group 2 (urgent, crisis-response tone) will feel alarmist to group 1. The page needs to serve both without picking a single voice for the whole page.

---

## Table 1 — Pain Points

| Pain point | Source | Severity | Buyer group | Addressed in current competitor content? |
|---|---|---|---|---|
| Existing system is actively failing (backing up, odor, alarm) and the buyer doesn't know if it's a $600 fix or a $20,000 replacement | Quora question titles ("How much does it cost to fix a failed septic system?", "Is it possible to repair an old failing septic system...?") | Very High | Distressed | No — zero competitors publish repair-vs-replace guidance (see `04-competitor-matrix.md`) |
| Fear of being taken advantage of while already in crisis | Reddit/Nextdoor-style phrasing pattern ("is my septic guy trying to rip me off"), consistent with the general home-services trust-killer pattern already documented in the homepage pack | High | Distressed | No — no competitor explicitly addresses this fear |
| Sticker shock at the gap between a conventional system quote and an alternative-system quote, with no explanation of why | septictankhub cost data ($3,000-$10,000 conventional vs. $12,000-$30,000+ ATT) | High | Both | No — zero competitors explain the conventional-vs-alternative decision in plain language (confirmed 0/8 in `04-competitor-matrix.md`) |
| Not knowing whether Lane County or DEQ directly issues the permit, or how long the process takes | Lane County/DEQ permitting research (`07-oregon-authority.md`) | Medium-High | Planned | No — no competitor explains the actual permit process step by step |
| Home sale is contingent on a septic inspection that just failed, and the buyer doesn't know if this is a legal requirement or a lender preference | Oregon Realtors Seller Advisory research (`07-oregon-authority.md` §5) | High | Distressed (real-estate-triggered) | No — zero competitors address the home-sale-timing scenario at all |
| Confusion about whether the drainfield area can still be used for other purposes (parking, a shed, landscaping) once installed | `03-entity-map.md` §6 — drainfield protection/sequencing rule | Medium | Planned | No — reused finding from the site-preparation pack, still unaddressed on any septic-specific page |
| Uncertainty about whether "DEQ Certified" on a business card/website is a real, verifiable credential or just marketing language | DEQ's own business license search tool existing as a public verification mechanism | Medium | Both | No — no competitor links to or explains the DEQ verification tool, mirroring the same CCB-verification gap found on the homepage |
| Not knowing how often to pump a tank, or waiting too long and causing a preventable failure | DEQ's own published pumping guidance | Medium | Planned (preventive) | Partial — Oregon Septic and Best Septic mention pumping as a service but don't explain the DEQ guidance itself |

## Table 2 — Decision Triggers

| Trigger | Context | Buyer group | Maps to |
|---|---|---|---|
| Toilets/drains backing up or a septic alarm sounding | Acute, same-day-to-same-week urgency | Distressed | Septic page → repair-focused messaging, reassurance-first tone |
| Home sale falling through or being delayed because a septic inspection failed | Real-estate-triggered, time-boxed by a closing date | Distressed | Septic page → repair-vs-replace guidance, realistic timeline expectations |
| Closed on raw/rural land with no existing sewer or septic system | New-property-owner moment, same trigger pattern as the homepage's site-prep trigger | Planned | Site Preparation page → Septic page (cross-link both directions) |
| Planning an ADU on a property with an existing septic system | Oregon-specific planning trigger (ADU capacity question) | Planned | Septic page, ADU-capacity FAQ |
| Routine 5-7 year inspection reveals high solids/pending failure before it becomes an emergency | Preventive, not yet urgent | Planned (transitioning toward distressed if ignored) | Septic page → maintenance/pumping-frequency content |
| General contractor or builder needs a subcontractor with active DEQ credentials for a new-build lot | B2B/developer trigger | Planned | Septic page → Commercial Excavation cross-link |

## Table 3 — Trust Killers & Rebuttals

| Trust killer | Why it matters here specifically | D&D rebuttal (explicit, evidence-based — no invented stats) |
|---|---|---|
| Fear of being upsold to an expensive alternative system when a conventional one would work | Alternative systems cost 2-4x a conventional system; a distressed buyer has no way to verify the recommendation is soil-driven, not margin-driven | Explain plainly, before any sales conversation, that system type is determined by the site evaluation and soil/water-table conditions, not preference — and that the site evaluation is a documented, third-party (Lane County) process, not D&D's own judgment call |
| "DEQ Certified" as an unverifiable badge | Every septic-capable competitor makes a similar claim with no way to check it | Point directly to DEQ's own Sewage Disposal Service business license search tool (`07-oregon-authority.md` §2), the same pattern already used for the CCB license on the homepage |
| Pressure-selling during a genuine emergency (sewage backing up, home sale on the line) | This is THE distinguishing risk of septic versus every other service page in this pipeline — a homeowner in crisis is a worse-informed, more vulnerable customer than one calmly comparison-shopping a grading job | State plainly and early in the content that a failing system doesn't automatically mean full replacement, walk through the real repair-vs-replace decision factors, and avoid any content pattern that implies urgency-based pricing or scare-based upselling |
| No real cost signal anywhere in the category | Every competitor hides behind "call for pricing"; for a five-figure decision this is worse than for a driveway regrade | Publish real ranges for both conventional and alternative systems, sourced and labeled as general ranges (see `07-oregon-authority.md` §4) |
| Confusion about whether a septic inspection is legally required to sell a house, which can feel like being told conflicting things by different parties (agent, lender, contractor) | Directly ties to the distressed-buyer real-estate trigger in Table 2 | State the actual legal picture plainly: Oregon does not appear to mandate a septic-specific inspection by statute at time of sale, but sellers must disclose known defects (ORS 105.465) and lenders/buyers commonly require one anyway — give the buyer the real distinction rather than letting them assume it's either "required by law" or "optional and skippable" |
| Not knowing whether the septic evaluation the buyer already has is still valid, or needs to be redone | Site evaluations can predate a sale by years; validity isn't obvious to a layperson | Address directly in FAQ content: confirm evaluation validity/expiration with Lane County's Subsurface Sanitation Program rather than assuming an old evaluation still applies |
| Fear that "free estimate" for septic work doesn't actually apply once a site evaluation fee is involved | Site evaluation is a real, separate government fee (~$866-$998 per secondary sourcing, see `07-oregon-authority.md`), unlike a grading job where the estimate itself is genuinely free | Be explicit that the estimate visit is free, but the county's own site-evaluation fee is a separate, real government cost D&D doesn't control or profit from — transparency about this distinction is itself a trust signal |

---

## Sources
- `02-question-mine.md` (this pack) — verbatim Quora question titles used as the primary distressed-buyer intent signal
- [SepticTankHub — Engineered Septic System Cost Guide](https://www.septictankhub.com/blog/engineered-septic-systems/)
- [Oregon DEQ — About Septic Systems](https://www.oregon.gov/deq/Residential/Pages/Onsite-about.aspx)
- [Oregon Realtors — Oregon Property Seller Advisory](https://oregonrealtors.org/sites/default/files/Oregon%20Property%20Seller%20Advisory_11.05.18_MVD%5B1%5D.pdf)
- `../home/05-intent-triangulation.md` — cross-referenced for the shared CCB-verification and free-estimate trust-killer patterns, extended (not duplicated) here for the septic-specific variants

**Explicit limitation to disclose:** as with the homepage pack, this triangulation does not include scraped 1-3 star review text from named competitors, BBB complaint filings, or Nextdoor threads, because none were retrievable through this session's tools. The `distressed_buyer` framing is grounded in verbatim Quora question titles (genuine user-authored text) and documented Oregon regulatory/industry facts, not invented anecdotes.
