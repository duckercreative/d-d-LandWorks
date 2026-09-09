# Research Pack — Septic Install & Repair (`/services/septic-install-repairs/`)

**Prepared:** 2026-09-08 · **Prepared by:** Ducker Creative (deep-research methodology, adapted from HVAC → excavation/site-prep per CLAUDE.md, and further adapted here from general excavation → state-regulated septic work)
**Page targeted:** Septic Installation & Repair — the sixth page through this pipeline (following homepage, Site Preparation, Excavation & Grading, Grading & Leveling, and Land Clearing), and the first page in this project that is a genuinely distinct discipline from general earthwork: state-regulated (Oregon DEQ, not just Oregon CCB), health/safety-critical, and frequently a distressed/urgent purchase rather than a planned project.
**Current state:** A page already exists at `site/src/pages/services/septic-install-repairs.astro`, built earlier and outside this research pipeline. This pack does not start from zero — it verifies, deepens, and extends what's already live, and flags anywhere the live page's framing should be preserved as-is versus where this research adds real depth. See §9 below.

This file is the master synthesis. The future content brief should read only this file; the other 8 files in this folder are supporting evidence to drill into on demand.

---

## 1. What's Confirmed vs. Unconfirmed (read this before writing anything credential-related)

This section exists because the task explicitly requires it: septic content carries legal and health/safety stakes that the prior four pages didn't, and overstating a credential here is a materially bigger risk than overstating "years in business."

**Confirmed, per `business-info.md` and already shipped in `home-content.md` and the live `septic-install-repairs.astro`:**
- D&D Land Works is licensed and bonded under Oregon CCB #261742
- D&D Land Works holds "DEQ Certified" status, which qualifies it to legally install and repair septic systems under Oregon DEQ onsite wastewater rules
- These are two separate credentials — the CCB license covers general contracting, DEQ certification separately and specifically authorizes septic work (already correctly stated in the live astro page's own FAQ)

**Unconfirmed — this pack does NOT invent any of the following, and the brief should not either:**
- The exact DEQ credential title David holds. Oregon's real credential structure (verified directly this session, see `07-oregon-authority.md` §2) has business licenses (Installer / Pumper / Combined Pumper-Installer) and individual certifications (Installer Certification / Maintenance Provider Certification) — **there is no "Installer II" tier**, and this pack does not assert which specific license or certification David holds beyond the general, already-shipped "DEQ Certified" framing.
- David's DEQ license/certification number
- Years of septic-specific experience (as distinct from general excavation experience)
- Number of septic systems installed
- Whether D&D's credential extends to Maintenance Provider certification (relevant only if D&D services alternative-treatment/sand-filter systems on an ongoing basis, not just installs them)
- Any specific system-type/brand D&D installs (e.g., whether D&D installs AdvanTex or other named ATT products) — competitor Braun Excavating names specific brands; D&D should only do the same once confirmed with David

**This page's job relative to `business-info.md`'s existing hedge:** business-info.md itself flags that D&D's exact DEQ credential type/number is unconfirmed. This pack treats that as a real, standing constraint — not a gap to paper over with confident-sounding invented specifics.

---

## 2. This Page vs. the Homepage's Existing Septic Section — Non-Contradiction Check

`home-content.md` already ships a "What Does DEQ Certified Mean for Septic Work?" section (~110 words) stating: DEQ Certified means D&D holds a DEQ credential required to legally construct/install/repair septic systems, cites OAR Chapter 340 Division 71, states that without it septic work "isn't legal, full stop," and includes the repair-vs-replace 50%-of-cost rule of thumb.

**Everything in this pack is consistent with, and extends rather than contradicts, that section.** Specifically:
- Same credential name ("DEQ Certified"), same regulation citation (OAR 340-071), same repair-vs-replace rule — reused verbatim, not restated differently
- This page goes deeper into: the real DEQ license/certification category structure (§2 of `07-oregon-authority.md`), the Lane County-as-DEQ-agent permitting structure (§1), conventional-vs-alternative system types and costs (§4), home-sale inspection rules (§5), and pumping-frequency guidance (§6) — none of which the homepage's brief summary attempts to cover
- The live `septic-install-repairs.astro` page's existing FAQ (CCB vs. DEQ distinction, signs of failure, residential/commercial, install+repair scope, rural service) is also consistent with this pack and can be extended, not replaced

**Brief instruction:** treat the homepage's septic paragraph as the "what and why" and this page as the "how, how much, and what to expect" — same true claim, deeper technical layer, per the task's explicit framing.

---

## 3. Top 5 Keyword Targets

| # | Keyword | Intent | Why |
|---|---|---|---|
| 1 | **septic installation eugene or** / **septic system installation eugene oregon** | Commercial, decision-stage | Primary page target, reused verbatim from the homepage pack's own keyword universe |
| 2 | **septic repair eugene oregon** / **septic system repair lane county** | Commercial, decision-stage | Co-primary target — repair queries carry the distressed-buyer intent this pack specifically researched |
| 3 | **deq certified septic installer oregon** | Commercial, consideration | D&D's core credential differentiator, already established on the homepage, deepened here |
| 4 | **conventional vs alternative treatment system oregon** | Informational, decision-stage | The single biggest whitespace this pack found — zero competitors explain this plainly (see `08-gap-analysis.md` Gap #1) |
| 5 | **signs of a failing septic system** / **drainfield failure signs** | Informational, consideration-to-decision | High-volume distressed-buyer entry point; this page's most emotionally load-bearing query |

Full 149-row universe in `01-keyword-universe.csv`.

---

## 4. Top 10 Questions to Answer

Full list of 52 in `02-question-mine.md`. The 10 most load-bearing for this page specifically:

1. What's the difference between a conventional and an alternative (ATT) septic system, and how do I know which one I need?
2. Does Lane County or Oregon DEQ directly issue my septic permit?
3. Should I repair or replace my failing septic system?
4. What are the signs my septic system or drainfield is failing?
5. How much does septic installation or repair typically cost in Lane County?
6. How often should I have my septic tank pumped?
7. Do I need a septic inspection before selling my house in Oregon?
8. Can I build, pave, or grade over my drainfield?
9. What's the difference between a general contractor's CCB license and DEQ septic certification? *(deepens the live astro page's existing FAQ)*
10. How do I verify a septic contractor is actually DEQ licensed?

---

## 5. Top 10 Entities to Integrate

Full inventory in `03-entity-map.md` / `entity-inventory.csv`. Priority placement:

| Entity | Where to place |
|---|---|
| Oregon DEQ / OAR 340-071 | Dedicated section explaining the regulation, reused citation from homepage |
| DEQ Sewage Disposal Service license categories (Installer/Pumper/Combined) + Installer/Maintenance Provider certifications | New regulatory-education section — general Oregon facts, not a specific claim about David |
| Lane County Subsurface Sanitation Program (DEQ contract-county agent) | New section directly answering the DEQ-vs-Lane-County question |
| Conventional system / Alternative Treatment Technology (ATT) / sand filter / ATU | Comparison table — the page's highest-value content block |
| Septic tank, drainfield, distribution box | Body copy, plain-language component definitions |
| Site evaluation / test pits | Process section, reused from site-preparation pack |
| Drainfield protection/sequencing rule | Cross-linked section, reused from site-preparation pack, extended with septic-side consequences |
| Repair-vs-replace 50% rule | Decision-stage section, reused from homepage |
| Oregon CCB #261742 vs. DEQ certification | Trust section, deepens the live astro page's existing FAQ |
| Willamette Valley clay soil / high water table | Body copy, ties conventional-vs-alternative decision to already-established regional entity |

---

## 6. Top 5 Content Gaps to Fill

Full 20-point scoring in `08-gap-analysis.md`. Highest-leverage gaps:

1. **Distressed-buyer reassurance + repair-vs-replace decision guidance** — zero-cost, highest-priority given the health/safety and trust stakes this page carries
2. **Conventional vs. alternative system cost explanation** — the single biggest whitespace found across five pages of this project's research so far
3. **Home-sale septic-inspection clarity** (legally required vs. lender/buyer practice) — resolves genuine confusion with a sourced, factual answer
4. **DEQ business-license verification link** — same pattern as the homepage's CCB link, zero competitors currently do this
5. **DEQ-vs-Lane-County regulatory clarity** — directly answers the task's core research question with a citable, sourced explanation

---

## 7. Biggest Structural/Competitive Finding (confirmed, not assumed)

**The competitive set for this page is genuinely different from every prior page in this pipeline.** Of the 8 excavation competitors this project has tracked since the homepage pack, only **4 of 8 (50%) actually offer septic installation/repair themselves** (All Dirt, Emerald, McKenzie, Braun); **1 explicitly does not** and instead prepares sites for other septic contractors (Danco, despite holding a DEQ number); and **2 have no septic service at all** (Heavy D, Strasheim), with A&D's status still unresolved. Separately, **4 dedicated septic/sewer specialty companies** were found competing directly for this page's core keywords — Oregon Septic, Best Septic, Westco Services, and Royal Flush Environmental Services — none of whom appeared anywhere in the excavation, grading, or land-clearing research, because they don't do general earthwork at all. Full breakdown, including the nuance that several specialists lead with pumping (a service D&D doesn't offer), is in `04-competitor-matrix.md`.

**What this means for the brief:** this page cannot be benchmarked against "the same 8-10 competitors" the way the prior four pages were. It needs to clear a bar set by septic-first competitors (Emerald's and McKenzie's dedicated septic pages, Oregon Septic's specialist positioning) on top of the general excavation-competitor bar, while being honest that D&D's actual overlap with the pumping-focused specialists is narrower than it first appears.

---

## 8. Recommended H1 / H2 Heading Map

**H1:** Septic Install & Repair in Eugene, Springfield & Lane County, Oregon *(reused/aligned with the live astro page's positioning, extended to match this project's URL/heading conventions)*

**H2s (in order):**

1. Why DEQ Certification Matters for Septic Work *(reused/extended from the live astro page — the "why" framing, kept intact)*
2. What's the Difference Between a CCB License and DEQ Certification? *(deepens the live astro page's existing FAQ into a full section — trust/credential clarity)*
3. Conventional vs. Alternative Septic Systems: What's the Real Difference? *(the page's highest-value new content — comparison table)*
4. How Much Does Septic Installation or Repair Cost in Lane County? *(cost — real ranges for both system types, labeled as general estimates)*
5. Is My Septic System Failing? Signs to Watch For *(distressed-buyer entry point — reassuring, not alarmist tone)*
6. Should You Repair or Replace a Failing System? *(decision-stage — the 50% rule, presented calmly)*
7. Does Lane County or Oregon DEQ Issue My Septic Permit? *(authority/process — directly answers the task's core regulatory question)*
8. What Happens During a Septic Site Evaluation? *(process — test pits, cross-linked to the site-preparation page's sequencing content)*
9. Do I Need a Septic Inspection to Sell My House in Oregon? *(distressed-buyer, real-estate-triggered — factual, sourced answer)*
10. How Often Should You Pump Your Septic Tank? *(maintenance/education — DEQ's own guidance, positions D&D as informative despite not offering pumping)*
11. Frequently Asked Questions *(FAQ block — see §10 below)*
12. Get Your Septic System Checked *(contact/CTA, matches the live astro page's existing CTABlock)*

Every H2 is phrased as a real, natural question under 10 words, matching the format-diversity and question-first heading requirements already established by every prior page in this pipeline.

---

## 9. Content Format Plan (per H2)

| H2 | Format | Why | Schema unlock |
|---|---|---|---|
| 1. Why DEQ certification matters | Answer-first, 60-80 words | Reused/extended framing, citable standalone passage | `Speakable` |
| 2. CCB vs. DEQ certification | Definition/comparison, answer-first | Direct credential distinction | `EducationalOccupationalCredential` (already used in home-content.md's schema — reuse pattern) |
| 3. Conventional vs. alternative systems | **Comparison table** — columns: System Type / Typical Cost / When It's Required | Multi-attribute cost/decision data — this page's single highest-value content block | none required, but strong `Speakable` candidate |
| 4. Cost | Comparison table — columns: Service/System / Typical Range / What Affects Price | Multi-attribute, consistent with every prior page's cost-section format | none required |
| 5. Signs of failure | Bulleted list (5-7 symptoms) | Parallel, scannable symptom list | `ItemList` |
| 6. Repair vs. replace | Answer-first (50-70 words) + short decision-factor list | Direct decision framework | `Speakable` |
| 7. DEQ vs. Lane County permitting | Answer-first, 60-80 words | Direct factual/regulatory answer | `Speakable` |
| 8. Site evaluation process | **Numbered list** (sequential: site evaluation → permit application → planning clearance → construction) | Sequence-dependent steps | `HowTo` |
| 9. Home-sale inspection | Answer-first (50-70 words) | Direct factual answer resolving a yes/no-seeming question with real nuance | `Speakable` |
| 10. Pumping frequency | Mixed — short answer-first + two-option list (schedule-based vs. condition-based) | DEQ publishes both framings; both deserve space | none required |
| 11. FAQ | FAQPage-formatted Q&A, 10 questions | Standard | `FAQPage` |
| 12. CTA | Short answer-first + CTA block | Conversion-focused | none required |

At least one comparison table (#3 and #4), one numbered list (#8), and one bulleted list (#5) are specified, per this project's established format-diversity requirement.

---

## 10. FAQ Shortlist (10 questions for FAQPage schema)

Full sourcing and validation in `02-question-mine.md`:

1. What's the difference between a conventional and an alternative (ATT) septic system, and how do I know which one I need?
2. Does Lane County or Oregon DEQ directly issue my septic permit?
3. Should I repair or replace my failing septic system?
4. What are the signs my septic system or drainfield is failing?
5. How much does septic installation or repair typically cost in Lane County?
6. How often should I have my septic tank pumped?
7. Do I need a septic inspection before selling my house in Oregon?
8. Can I build, pave, or grade over my drainfield?
9. What's the difference between a general contractor's CCB license and DEQ septic certification?
10. How do I verify a septic contractor is actually DEQ licensed?

---

## 11. Required Schema

Reuses this project's already-confirmed schema decisions (`GeneralContractor` primary business type, `Service` for individual pages) — no new schema-type research needed, since the septic-specific credential nuance fits within schema.org's existing `EducationalOccupationalCredential` type already used in `home-content.md`'s shipped JSON-LD.

- **`Service`** (primary page type) — `@id` following this project's established pattern (`https://www.ddlandworks.com/services/septic-install-repairs/#service`), `provider` referencing `{"@id": "https://www.ddlandworks.com/#business"}`
- **`FAQPage`** — for the 10-question shortlist above
- **`HowTo`** — for the site-evaluation-to-permit process sequence
- **`ItemList`** — for the signs-of-failure bulleted list
- **`BreadcrumbList`** — Home → Services → Septic Install & Repairs
- **`Speakable`** — on the answer-first passages flagged in §9
- **Do NOT add** `AggregateRating`/`Review` — zero reviews exist, consistent with every prior page's rule
- **Do NOT add** a specific `hasCredential` claim beyond what's already shipped in `home-content.md` (general "DEQ Certified" `EducationalOccupationalCredential`) — this page can explain the credential categories in body copy without asserting a more specific schema-level claim than the business currently supports

---

## 12. Required Authority Signals

From `07-oregon-authority.md`, with exact sourcing and verification date already captured:

1. Oregon DEQ Sewage Disposal Service business license search tool (oregon.gov/deq/residential/pages/onsite-search.aspx) — link directly, same pattern as the homepage's CCB link
2. Oregon Administrative Rules Chapter 340, Division 71 (confirmed correct citation, independently re-verified this session)
3. OAR 340-071-0120 — the specific rule establishing Lane County's DEQ contract-county/agent status
4. Lane County Subsurface Sanitation Program permit process (site evaluation → permit → planning clearance → construction)
5. Oregon DEQ's own pumping-frequency guidance (3-5 year schedule or 5-7 year inspection with 40%-solids threshold)
6. ORS 105.465 (Seller's Property Disclosure Statement) for the home-sale-inspection question

Density target per this project's established methodology: roughly 1 statistic per 300-500 words of body copy, at least one external authority link per major section — this page should exceed that target given how regulation-dense the topic is.

---

## 13. AI-Citation-Ready Summary Block

Drafted in full in `06-ai-citation-audit.md` §4; this block is intentionally longer than the homepage's 120-160 word block because it carries page-specific regulatory nuance the homepage's brief summary doesn't attempt:

> D&D Land Works provides DEQ-certified septic system installation and repair throughout Eugene, Springfield, and Lane County, Oregon, as part of a full-service excavation company licensed and bonded under Oregon CCB #261742. In Oregon, general contracting authority (CCB) and septic system authority (Oregon DEQ certification, under Oregon Administrative Rules Chapter 340, Division 71) are separate credentials, and D&D holds both. Septic permitting in Lane County is administered locally by Lane County's Subsurface Sanitation Program, acting as an authorized agent of Oregon DEQ. Oregon septic systems fall into two broad categories: conventional (gravity-fed) systems, typically the lower-cost option where soil and site conditions allow, and DEQ-approved alternative treatment technologies (sand filters, aerobic treatment units, and similar systems), required on sites with more challenging soil, water table, or lot conditions and typically costing several times more than a conventional system. D&D Land Works handles both installation and repair, though not routine pumping. Free estimates are available; call 541-401-8726.

Place in the first 30% of this page's body content.

---

## 14. Trust-Killer Rebuttals

From `05-intent-triangulation.md` Table 3 — the septic-specific set, extending (not duplicating) the homepage's own trust-killer table:

| Trust killer | Rebuttal to build into the page |
|---|---|
| Fear of being upsold to an expensive alternative system when a conventional one would work | State plainly that system type follows the site evaluation's soil/water-table findings, not a sales judgment call |
| "DEQ Certified" stated but not independently verifiable | Link directly to DEQ's own business license search tool |
| Pressure-selling during a genuine septic emergency | Explicit, calm repair-vs-replace guidance presented before any sales framing — the task's core distressed-buyer concern |
| Confusion about whether a septic inspection is legally required to sell a house | State the real distinction: not state-mandated, but commonly required by lenders/buyers |
| No real cost signal for a five-figure decision | Publish sourced ranges for both conventional and alternative systems |
| Uncertainty about whether an old site evaluation is still valid | Direct FAQ answer: confirm with Lane County's Subsurface Sanitation Program rather than assuming |
| "Free estimate" feels inconsistent once a real government site-evaluation fee is involved | Be explicit that the estimate visit is free, but the county's own site-evaluation fee is separate and real |

---

## 15. E-E-A-T Signal Plan

- **Experience:** Do not fabricate septic-specific years-of-experience; if David can confirm a real number, add it — otherwise lean on the DEQ credential itself as the experience proxy, consistent with business-info.md's hedge.
- **Expertise:** Detailed, accurate explanation of the real DEQ credential structure, the conventional-vs-alternative decision, and the Lane County permitting process — genuine topical depth zero competitors currently demonstrate.
- **Authority:** DEQ business-license search tool link + CCB license link (both, since this page touches both credential systems); OAR 340-071 and OAR 340-071-0120 citations.
- **Trust:** Explicit distressed-buyer reassurance, honest scope statement (installation/repair, not pumping), no fabricated reviews or credential specifics.

---

## 16. Freshness Plan

- Re-verify DEQ fee schedules, Lane County's septic permit fee, and system-type cost ranges at least every 90 days, consistent with every prior page's freshness rule — septic cost data in particular is drawn from national/industry sources with real regional variance, and the Lane County fee figure in `07-oregon-authority.md` §7 is explicitly flagged as needing direct confirmation before being treated as exact.
- Re-run this entire research pack if the content brief/build happens more than 90 days after 2026-09-08.
- Add to `02-site-architecture/page-refresh-log.csv` once that tracker exists for this project (still greenfield, per every prior pack's note).

---

## Flags (per parent methodology, adapted)

- **Flag A — Listicle/specialist-dominated SERP: CONFIRMED, with a new nuance.** Unlike the excavation-only queries (dominated by directories + excavation-generalist homepages), septic queries surface a three-way mix of national cost-guide content, dedicated septic-specialist pages, and government regulatory pages (see `06-ai-citation-audit.md` §1). This page needs to clear a higher, more topic-specific bar than the prior four pages.
- **Flag B — Anti-doorway gate:** Not applicable — this is a core service page, not a location page. Any future city-specific septic page (e.g., `/service-areas/springfield/septic/`) must satisfy the 6-point anti-doorway checklist already established in this project's topical map before publishing.
- **Flag C — Service × location matrix opportunity:** Same structural opportunity confirmed on every prior page — zero competitors in either competitive set (excavation-generalist or septic-specialist) publish real city-specific septic content.

---

## Quality Checklist

- [x] 100-150+ keywords captured (149 rows in `01-keyword-universe.csv`)
- [x] 40+ questions mined (52 in `02-question-mine.md`); 15 Oregon/Lane-County-specific; 8 objection-tagged; 9 distressed-buyer-tagged (new category for this page); 10 Reddit/Quora-sourced
- [x] Dedicated regulatory research completed — NOT reused wholesale from excavation-permit research, per task instruction (see `07-oregon-authority.md`)
- [x] Competitive-set correction completed — confirmed the competitive set differs from prior pages, both within the tracked excavation competitors (4/8 do septic) and via a newly-identified dedicated-specialist set (`04-competitor-matrix.md`)
- [x] Confirmed-vs-unconfirmed credential framing established (§1 above) — no invented DEQ credential type/number, years of experience, or systems-installed count
- [x] Non-contradiction check against `home-content.md`'s existing septic section completed (§2 above)
- [x] Site-prep-and-septic sequencing rule reused and cited, not re-derived (§8 of `07-oregon-authority.md`)
- [x] 20-point gap framework scored (`08-gap-analysis.md`)
- [x] Flag A (listicle/specialist SERP) evaluated with a new nuance specific to this page
- [x] Flag B (anti-doorway) evaluated — not applicable, flagged forward for future city pages
- [x] Flag C (service × location matrix) confirmed
- [x] 6+ Oregon/DEQ/Lane County authority signals with current dates and sourcing (`07-oregon-authority.md`)
- [x] AI citation audit completed (reasoned from SERP composition, consistent with this project's documented methodology limitation re: no direct AI chat-interface access)
- [x] Heading map composed, every H2 a natural question under 10 words
- [x] Content Format Plan completed for every H2, including two comparison tables, one numbered list, one bulleted list
- [x] FAQ shortlist composed (10 questions)
- [x] AI citation block drafted, first-30%-placement
- [x] Trust-killer rebuttals include the task's explicit distressed-buyer/crisis-pricing concern
- [x] Freshness plan set

## Honest Limitations of This Pack (disclose to the content-brief author and to David)

1. As with every prior pack in this project, no direct AI chat-interface querying was possible — the AI citation audit reasons from SERP composition.
2. No scraped review text (Google/Yelp 1-3 star) was retrievable for any competitor; distressed-buyer intent triangulation instead relies on verbatim Quora question titles (genuine user-authored text) and documented industry/regulatory literature.
3. Lane County's exact status as a DEQ "contract county" is well-supported by convergent evidence (the general 3-direct/33-contract structure, Lane County's own program description and permit-process pages) but was not confirmed via a single, directly-quoted county-roster page in this pass — flagged in `07-oregon-authority.md` §1 for a final direct check before publishing as a bare, unattributed absolute.
4. Lane County's exact current septic permit/site-evaluation fee is sourced from a secondary reference ($866-$998) and needs direct confirmation against Lane County's own fee schedule before being quoted as an exact figure.
5. Several gap-filling items (David's exact DEQ credential type, septic-specific years of experience, systems installed, specific system-type/brand offerings) require direct input from David before they can be written into content — listed explicitly in `08-gap-analysis.md` rather than invented.
