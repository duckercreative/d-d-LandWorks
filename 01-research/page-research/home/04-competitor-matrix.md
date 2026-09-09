# Competitor Matrix — D&D Land Works Homepage

Eight competitors extracted (the topical map's 4 named competitors plus 4 more identified by ranking for "excavation contractor eugene or" / "excavation contractor springfield or" during this research pass). Directory/listicle sites (Angi, Yelp, BBB, HomeAdvisor, YellowPages, Porch, DownToBid) were excluded from the deep-dive matrix — they are aggregators, not competitor businesses — but their SERP dominance is flagged separately below (see Flag A in `00-research-pack.md`).

**Note on method:** `WebFetch` was used against each live homepage rather than raw `curl`+regex HTML parsing (no shell/Python HTML-parsing tool was available in this environment). Fetched content was summarized by an intermediate model rather than hand-parsed from raw HTML, so treat exact heading counts as directionally reliable, not pixel-perfect. No schema markup (JSON-LD) was visibly detected in any of the 8 fetched pages' extracted content — this is reported as "not detected in fetch" rather than a hard negative, since script tags can be stripped in fetch summarization.

---

## The 8 Competitors

| # | Business | URL | Est. | License | BBB |
|---|---|---|---|---|---|
| 1 | Danco Excavation | dancoexcavation.com | n/a shown | CCB 89490, DEQ 39637 | not shown |
| 2 | All Dirt, Inc. | alldirtinc.com | 2005 | "licensed, bonded, insured" (no # shown) | not shown |
| 3 | Heavy D Excavation | heavydexcavation.net | n/a shown | CCB #258673 | not shown |
| 4 | Emerald Excavating | emeraldexc.com | 1962 | DEQ #33500, CCB #14173 | not shown |
| 5 | McKenzie Excavating | mckenzieexcavatingor.com | 1997 | CCB #126290 | **A+ rating shown** |
| 6 | Braun Excavating | braunexcavating.net | 50+ yrs (implies ~1970s) | CCB #101388 | not shown |
| 7 | Strasheim Contracting | strasheimcontracting.com | n/a shown | CCB #240927 | not shown |
| 8 | A&D Excavation and Land Improvement | adexcavationllc.com | 20+ yrs claimed | not confirmed in this pass | not shown |

**D&D Land Works context:** CCB #261742, DEQ Certified — no years-in-business figure confirmed (open item), zero reviews, zero digital footprint today. Every competitor above has an operating history of at least several years; D&D's honest positioning at launch must lean on licensing/certification/scope breadth rather than a fabricated tenure claim.

---

## Matrix A — Heading / Positioning Frequency (of 8)

| Element | Frequency | Verdict |
|---|---:|---|
| H1 states "Excavation Contractor/Company in [City], OR" pattern | 5/8 | Table stakes — homepage H1 should follow this pattern, scoped to Lane County/Eugene |
| "Why Choose Us" section | 6/8 | Table stakes |
| Services list/grid on homepage | 8/8 | Table stakes |
| Testimonials/reviews section on homepage | 4/8 (All Dirt, Heavy D, McKenzie via BBB, Braun via Google link) | Competitive parity — D&D has no reviews yet, genuine current gap |
| "Serving [cities]" service-area list (text only, no linked pages) | 8/8 | Table stakes — but see Matrix C, no one builds this into real pages |
| Septic listed as a service | 5/8 | Recommended — D&D's DEQ cert should make this a stronger cluster than any competitor's |
| Tree/stump/forestry mulching/hauling listed | 3/8 (Danco, All Dirt, Braun) | NOT applicable to D&D — explicitly fenced out |
| "Free estimate" CTA language | 8/8 | Table stakes |
| Years-in-business claim | 6/8 | Recommended, but only with a REAL number |
| "Family-owned/operated" language | 2/8 explicit (Danco, implied at others) | Optional — verify before using |
| Dedicated FAQ section with real Q&A | **0/8** | **Differentiator — nobody does this** |
| Named crew members beyond the owner | 1/8 (Strasheim names Jerid Strasheim) | Differentiator opportunity |
| Equipment specifics (brand/model/fleet) | **0/8** | **Differentiator — nobody names equipment** |
| Permit/code guidance content | **0/8** | **Differentiator — nobody explains Lane County permitting** |
| Real pricing ranges (vs. "call for quote") | **0/8** | **Differentiator — everyone hides behind "free estimate," nobody gives even a range** |
| Seasonal/rainy-season scheduling guidance | **0/8** | **Differentiator — despite this being the single most Oregon-specific pain point in the whole niche** |

## Matrix B — FAQ Frequency

Since 0/8 competitors run a real FAQ block (only All Dirt links to a separate `/faq/` page, and its content wasn't populated on the homepage fetch), there is no existing FAQ-frequency benchmark to beat — **every FAQ D&D publishes is new ground.** This validates prioritizing the FAQ shortlist in `02-question-mine.md` almost entirely off external research (Quora, cost guides, DEQ/CCB sources) rather than competitor mimicry.

## Matrix C — Schema / Technical Deployment

| Signal | Detected across 8 | Notes |
|---|---:|---|
| Structured data (JSON-LD) visible in fetch | 0/8 detected | Not conclusive (fetch summarization may have stripped `<script>` blocks) — but even directionally, none of these sites present as schema-sophisticated |
| Dedicated, unique city landing pages | **0/8 confirmed** | Matches the existing topical map's finding exactly. Every competitor lists service-area cities as plain text on the homepage or in the footer; none has a `/service-areas/eugene/` -style page with unique local content |
| BBB accreditation/rating displayed on-site | 1/8 (McKenzie, A+) | Only real third-party trust badge found across the set |
| Google review count/rating displayed on-site | 0/8 showed an embedded live rating; several linked out to Google/Facebook reviews instead | Widget-level trust signal gap |
| Licensing number visible in body copy | 7/8 | Near-universal — D&D must match this at minimum |
| Insurance specifics ($  amounts) | 0/8 | Nobody discloses actual coverage amounts — low-difficulty differentiator if David can share real figures |

---

## City-Page Gap — Explicitly Verified

Per the task brief's requirement to confirm the topical map's claim: **confirmed.** None of the 8 competitors — including all 4 named in the existing topical map (Danco, All Dirt, Heavy D, Emerald) — publish a dedicated, unique-content page for any individual city. All service-area mentions are either a plain-text list on the homepage/footer or, at most, a phrase like "serving Eugene, Springfield & Veneta" repeated across otherwise-identical service pages. This is the single largest structural opportunity identified in this research pack, consistent with the topical map's original conclusion, and is the basis for Gap #13 ("service-area specificity gap") in `08-gap-analysis.md`.

---

## Individual Competitor Notes

**Danco Excavation** — Broadest service list of the set (adds tree/stump/forestry mulching/hauling — none verified for D&D). Multiple named contact people with individual phone numbers, an unusual trust pattern worth noting but not copying without verification.

**All Dirt, Inc.** — Strongest overall production values of the set: three named client testimonials tied to specific cities (Eugene/Springfield/Veneta), a dedicated `/faq/` link (even if unpopulated on the homepage), and the most complete septic sub-cluster (installation, advanced treatment, specialized drainfields, pumping). This is the competitor the topical map already flags as "the model to beat" — confirmed still true.

**Heavy D Excavation** — Notably positions "Defensible Space" and "Firebreak Creation" (wildfire-mitigation framing) — an Oregon-relevant angle D&D does not currently claim; worth a scope conversation with David but not assumed.

**Emerald Excavating** — Longest tenure (1962, 60+ years) and lowest license number found (CCB #14173), suggesting genuine market incumbency. Positioning line "price is what you pay, but value is what you get" is a values-based pricing frame D&D could adapt honestly.

**McKenzie Excavating** — Only competitor with a visible BBB A+ rating — the strongest third-party trust signal in the set. Also the only one bundling asphalt paving and concrete alongside excavation (adjacent-trade breadth D&D does not claim).

**Braun Excavating** — Longest claimed operating history (50+ years) and the only one referencing a professional association (Western Oregon Builders Association) — a membership-based trust signal none of the others use.

**Strasheim Contracting** — Smallest, most locally-scoped site of the set; only competitor naming an actual crew member (Jerid Strasheim) by name — validates that named-person E-E-A-T is realistic and low-cost, not just a theoretical HVAC-methodology import.

**A&D Excavation and Land Improvement** — Family-owned framing, 20+ years claimed, broad "land improvement" positioning (adds "environmental restoration" language) — not deep-dived beyond directory listings in this pass; include in a future refresh if it appears in more SERP checks.

---

## Sources
- [Danco Excavation](https://dancoexcavation.com/)
- [All Dirt, Inc.](https://alldirtinc.com/)
- [Heavy D Excavation](https://www.heavydexcavation.net/)
- [Emerald Excavating](https://www.emeraldexc.com/)
- [McKenzie Excavating](https://mckenzieexcavatingor.com/)
- [Braun Excavating](https://www.braunexcavating.net/)
- [Strasheim Contracting](https://www.strasheimcontracting.com/excavation-team-eugene-or)
- [A&D Excavation and Land Improvement LLC](https://adexcavationllc.com/)
