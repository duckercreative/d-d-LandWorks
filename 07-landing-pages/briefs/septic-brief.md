# Content Brief — D&D Land Works Septic Install & Repair (`/services/septic-install-repairs/`)

**Prepared:** 2026-09-08 · **Prepared by:** Ducker Creative
**Built from:** `01-research/page-research/septic/` full research pack (files 00, 02, 03, 04, 05, 07, 08 + `entity-inventory.csv`), cross-checked against `01-research/page-research/home/entity-inventory.csv`, `01-research/page-research/site-preparation/entity-inventory.csv`, `01-research/page-research/excavation/entity-inventory.csv`, `01-research/page-research/grading-leveling/entity-inventory.csv`, and `01-research/page-research/land-clearing/entity-inventory.csv` for canonical entity reuse, `business-info.md`, `docs/design-system.md`, `07-landing-pages/content/home-content.md` (the already-shipped "What Does DEQ Certified Mean for Septic Work?" section this brief must extend, not contradict), `07-landing-pages/content/land-clearing-content.md` (voice/tone reference and the exact `Service.provider` `@id` pattern), and the current live pages at `site/src/pages/services/septic-install-repairs.astro`, `site/src/pages/resources/septic-installation-cost-oregon.astro`, `site/src/pages/resources/oregon-septic-basics.astro`, `site/src/pages/locations/eugene/septic.astro`, and `site/src/pages/locations/springfield/septic.astro`.
**Methodology note:** Same adaptation as the five prior briefs — this project's `content-briefs` skill was written for a prior HVAC client and references files that don't exist here. Dropped/substituted with the real D&D Land Works research files throughout.
**Pipeline position:** Sixth page through this project's content pipeline, and the **first page in this pipeline that is a genuinely distinct discipline from general earthwork** — state-regulated by Oregon DEQ (not just Oregon CCB), health/safety-critical, and frequently a distressed/urgent purchase rather than a planned project. **This is a content-expansion brief, not a greenfield brief** — a real page already exists and is live in the Astro codebase with a correct, if shallow, foundation (an accurate CCB-vs-DEQ distinction already in its FAQ, an accurate signs-of-failure list, correct residential/commercial framing, and links out to two already-live resource pages and two already-live city×service pages). It has none of this page's highest-value gap content — see §1.
**URL note (settled, not an open item):** Per the task instruction, this brief targets `/services/septic-install-repairs/` — the file already lives at `site/src/pages/services/septic-install-repairs.astro`, matching the nested `/services/` pattern already confirmed for all five prior pages. No URL move is needed.
**Related live pages found during research (not this brief's subject, noted for internal-linking accuracy — see §9):** `site/src/pages/resources/septic-installation-cost-oregon.astro` and `site/src/pages/resources/oregon-septic-basics.astro` (already-live cost/education resource pages) and `site/src/pages/locations/eugene/septic.astro` / `site/src/pages/locations/springfield/septic.astro` (already-live city × service pages). **A real inconsistency was found and must be flagged, not silently repeated:** `oregon-septic-basics.astro` currently states "Oregon requires a septic evaluation report in most property sales where the system predates certain regulatory changes" — this is a stronger, more absolute claim than this pack's directly-verified finding (`07-oregon-authority.md` §5: no state-statute mandate; ORS 105.465 disclosure duty + common lender/buyer practice). This brief's H2 #9 states the accurate, hedged version and should **not** be softened to match the resource page's overstated claim — instead, flag the resource page for a follow-up correction pass so the two pages agree (see Open Items).
**Entity reuse:** All canonical business/location/certification entities (D&D Land Works, David Deggelman, Oregon CCB #261742, Oregon DEQ, Lane County, Eugene, Springfield, Willamette Valley, the `GeneralContractor` organization schema and the `Service` schema pattern) are reused verbatim from the five prior briefs — not renamed or re-derived. The `Service.provider` reference uses the exact `@id` already shipped in `site-preparation-content.md`, `excavation-content.md`, `grading-leveling-content.md`, and `land-clearing-content.md`'s JSON-LD (`https://www.ddlandworks.com/#business`).

---

## 1. Page Metadata

| Field | Value |
|---|---|
| **Canonical URL** | `/services/septic-install-repairs/` |
| **Current live URL** | `/services/septic-install-repairs/` (file: `site/src/pages/services/septic-install-repairs.astro`) — already matches; no URL move needed |
| **Slug** | `septic-install-repairs` |
| **Page type** | Core service page — P0 priority, the first page in this pipeline governed by a second, separate regulatory body (Oregon DEQ, alongside Oregon CCB), and the first with two live sibling city pages already shipped (`/locations/eugene/septic/`, `/locations/springfield/septic/`) and two live resource pages already shipped (`/resources/septic-installation-cost-oregon/`, `/resources/oregon-septic-basics/`) |
| **Primary keyword** | `septic installation eugene or` / `septic system installation eugene oregon` |
| **Co-primary keyword** | `septic repair eugene oregon` / `septic system repair lane county` — carries the distressed-buyer intent this page specifically has to serve |
| **Secondary keywords** | `deq certified septic installer oregon`; `conventional vs alternative treatment system oregon` (this page's single biggest whitespace, per the gap analysis); `signs of a failing septic system` / `drainfield failure signs`; `septic inspection before selling house oregon` |
| **Semantic terms** (must appear at least once) | septic tank, drainfield, distribution box, conventional septic system, alternative treatment technology (ATT), sand filter, aerobic treatment unit (ATU), site evaluation, test pits, Sewage Disposal Service license, Installer Certification, Maintenance Provider Certification, OAR 340-071, Lane County Subsurface Sanitation Program, ORS 105.465, repair-vs-replace, DEQ Certified, Oregon CCB #261742, free estimate |
| **Search intent** | Mixed and psychologically bimodal in a way no prior page in this pipeline is: the primary/co-primary keywords are commercial decision-stage for a **planned** buyer, but a meaningful share of "septic repair," "signs of failing septic system," and "septic inspection before selling" traffic is decision-stage for a **distressed** buyer in genuine crisis — see §2 |
| **Current state / baseline** | A real, live page exists today with a correct foundation: an accurate CCB-vs-DEQ distinction already stated in its own FAQ ("They're separate credentials... A crew without that certification can't legally do septic work"), an accurate signs-of-failure list (slow drains, soggy/green drainfield patches, sewage odor), a correct residential/commercial section, and outbound links to the two already-live resource pages. It has **zero** of: the conventional-vs-alternative system explanation and cost split (the single biggest content gap this pack found), any real cost range on the page itself, the DEQ-vs-Lane-County regulatory structure explanation, a repair-vs-replace decision framework, any distressed-buyer reassurance framing, the home-sale-inspection myth-correction, pumping-frequency education, or a deeper CCB-vs-DEQ credential-category explanation beyond the existing one-paragraph FAQ answer. This is a **content-expansion brief**, not a rewrite-from-nothing brief — the existing FAQ answers, signs-of-failure list, and residential/commercial framing should be preserved and folded into the new structure below, not discarded. |

---

## 2. Intent & Audience

**This page's audience splits into two groups with genuinely different psychological needs, and content that serves only one will alienate the other — this is the single most important audience finding in this pack, and it does not apply to any of the five prior pages in this pipeline.**

- **Group 1 — Planned buyers (the "default" buyer profile every prior page in this pipeline was written for):** a landowner building new construction, an ADU, or a property with no existing septic system; timeline-flexible, cost-sensitive, comparison-shopping. Behaves like the buyer on the site-preparation, excavation, grading, and land-clearing pages.
- **Group 2 — Distressed buyers (a genuinely new intent state for this pipeline, and the one the task explicitly requires flagging):** an existing system has just failed — backing up, alarm sounding, sewage surfacing in the yard — or a home sale is contingent on a septic inspection that just failed or is pending. This buyer is time-pressured, often facing an unplanned five-figure expense, and — per the research's own trust-killer findings — genuinely vulnerable to being taken advantage of while already in crisis. **Content written only in the calm, comparison-shopping register of the prior five pages will read as tone-deaf to this buyer; content written only in an urgent, crisis-response register will feel alarmist to Group 1.** The page must serve both without collapsing into a single voice for the whole page — see §3.
- **Primary ICP:** A Lane County landowner whose property is outside city sewer service (a common condition in rural Eugene, Veneta, and Creswell per the current live page's own copy) — either building new (Group 1) or dealing with an existing system in decline (Group 2). Secondary ICP: a home seller or buyer whose transaction has a septic contingency attached; a builder/GC needing a DEQ-certified subcontractor for a new-build lot.
- **State of mind:**
  1. (Group 2, highest emotional stakes) A system is actively failing and they don't know if it's a few-hundred-dollar fix or a $20,000+ replacement — and they're afraid a contractor will push them toward the more expensive answer while they're not in a position to push back.
  2. (Both groups) They don't understand why one septic quote might be 3-4x another, and no one has explained that soil and water-table conditions — not preference or upselling — decide which system type a property needs.
  3. (Group 2, real-estate-triggered) A home sale is on the line and they don't know whether a septic inspection is a legal requirement they can't skip or a lender preference they might be able to negotiate around.
  4. (Both groups) They don't know whether Lane County or the State of Oregon actually issues the permit, or how long the process realistically takes.
  5. (Planned buyers, ADU-specific) They don't know whether a new ADU can share an existing septic system's capacity or needs its own.
  6. (Both groups) They want to verify "DEQ Certified" is a real, checkable credential and not just marketing language — the same self-verification instinct the homepage's CCB link already serves for general contracting.
- **What they need to believe before calling:**
  1. This contractor understands that a failing system is often a crisis, not a shopping decision, and won't use that crisis as leverage.
  2. If a more expensive system type is recommended, that recommendation follows the site evaluation's soil and water-table findings — a documented, third-party (Lane County) process — not a sales judgment call.
  3. There's a real, honest, checkable credential behind the "DEQ Certified" claim, the same way the CCB license is checkable.
  4. A repair-vs-replace decision can be made calmly, with a real framework, rather than being steered toward whichever option costs more.
  5. The actual legal picture around a home-sale inspection is stated plainly, not oversimplified into a false "yes, required" or "no, skip it."

---

## 3. Voice & Angle

- **Writing voice:** Per `docs/design-system.md` v1.2 (Outfit for display/headings, Poppins for body). Same plain-spoken, no-fluff Lane County contractor voice as the five prior pages, with one deliberate adjustment specific to this page: **the register must stay calm and reassuring throughout, never urgency-driven or pressuring, even where the content addresses a genuine emergency** (per `05-intent-triangulation.md`'s explicit finding that a septic page written in an alarmist or scarcity-driven register will read as exploitative to a buyer already in crisis). Practically: state facts plainly and let the reader draw their own urgency from them, rather than manufacturing urgency in the copy itself ("a failing drainfield is a real problem" rather than "act now before it's too late"). This is a stricter version of the no-fabricated-urgency rule already in effect on every prior page's CTA section (§12) — here it extends to body copy tone, not just CTA language.
- **Required Lane County / Oregon-specific detail (minimum 5, per `07-oregon-authority.md`):**
  1. **Lane County as a DEQ contract/agent county (OAR 340-071-0120) — verified directly against oregon.gov/deq this session, though the specific county-roster page could not be fully rendered.** DEQ directly manages septic permitting in only three counties (Curry, Jackson, Josephine); Lane County is one of the other 33 counties administering permitting locally as DEQ's authorized agent, through its own Subsurface Sanitation Program (within the Land Management Division, Public Works). State this as "Lane County administers septic permitting locally, as an authorized agent of Oregon DEQ" — well-supported, but recommend one final direct confirmation against DEQ's county-agent contacts page before treating it as a bare, unattributed absolute (see Open Items).
  2. **The real Oregon DEQ credential structure — verified directly, no invented tiers.** Sewage Disposal Service (SDS) business licenses come in three types (Installer / Pumper / Combined Pumper-Installer, bonded at $15,000 for Installer/Combined and $5,000 for Pumper-only); individual certifications come in two separate types (Installer Certification, required before a business can hold an Installer/Combined license; and Maintenance Provider Certification, a separate credential required for servicing alternative/sand-filter/recirculating-gravel-filter systems). **There is no "Installer II" tier in Oregon's actual system — do not use that or any similar invented tier name anywhere on this page.**
  3. **Willamette Valley clay soil and high water table (reused from the homepage/site-preparation packs, applied here as the reason alternative systems are common in this specific region)** — ties an already-established regional entity to this page's core system-type decision in a way no competitor currently does.
  4. **ORS 105.465 (Seller's Property Disclosure Statement) — verified directly, the page's most sensitive hedge.** Oregon does not appear to mandate a septic-specific inspection by state statute at time of sale. Sellers must disclose known septic defects under ORS 105.465's actual-knowledge standard; industry practice (an On-Site Sewage Addendum, and lender/buyer-required inspections) commonly makes an inspection feel mandatory even though it is a transactional practice, not a legal one.
  5. **DEQ's own pumping-frequency guidance** — pump every 3-5 years by household size/tank capacity, or inspect every 5-7 years and pump once solids exceed roughly 40% of tank volume. DEQ publishes both framings; present both rather than picking one.
- **Insider/practitioner detail that signals real local expertise (use at least 2):**
  - The drainfield-protection/sequencing rule, extended one level deeper than the site-preparation page already states it: once a drainfield location is approved through the test-pit evaluation, disturbing it doesn't just risk voiding the approval in the abstract — it means a second round of test pits and fees, real schedule delay, and on a tight or difficult lot, the genuine possibility that no equally good alternative drainfield location exists, since suitable soil area on a given parcel is finite.
  - The Maintenance Provider Certification distinction: an alternative/ATT system doesn't just cost more to install — it typically carries an ongoing monthly service-contract requirement under DEQ rules that a conventional system never needs, a genuine total-cost-of-ownership fact most homeowners don't learn until after they've already chosen a system.

---

## 4. E-E-A-T Requirements

**This section must stay deliberately conservative on credentials, per the task's explicit instruction — every prior page in this pipeline could lean on David's general contracting experience; this page carries a second, state-regulated credential system where overstating a specific claim is a materially bigger risk than overstating "years in business."**

- **Experience (minimum 2 signals):** The current live page's already-accurate process description (site evaluation → permit → install/repair → cleanup, folded into the new §6 structure); David Deggelman referenced and linked to `/about/`. **Do not** add a septic-specific years-of-experience figure or a systems-installed count — both are explicitly unconfirmed (see Open Items).
- **Expertise (minimum 3 signals):** The real DEQ credential-category structure (SDS license types, Installer vs. Maintenance Provider certification) explained accurately as **general Oregon regulatory education**, never as a specific description of which category David holds; the conventional-vs-alternative system decision explained in plain, accurate technical terms; the Lane County permit sequence (site evaluation → permit application → planning clearance → construction) stated precisely.
- **Authority (minimum 3 signals):** The already-shipped "DEQ Certified" claim (reused verbatim from `home-content.md`, not restated with more specificity) in visible body copy; a direct outbound link to Oregon DEQ's Sewage Disposal Service business license search tool (`oregon.gov/deq/residential/pages/onsite-search.aspx`) — the DEQ-side equivalent of the CCB lookup already used on the homepage, and a link zero competitors in either competitive set currently provide; a direct outbound link to Lane County's Subsurface Sanitation Program page; the OAR 340-071 and OAR 340-071-0120 citations.
- **Trust (minimum 4 signals):** Explicit distressed-buyer reassurance stated early and calmly, not as an afterthought; the repair-vs-replace decision framework presented before any sales framing; an honest scope-boundary statement (D&D handles installation and repair, not routine pumping — extending, not contradicting, `home-content.md`'s existing "does not perform... septic pumping" disclosure); the home-sale-inspection myth-correction stated as fact, not softened toward either a false "required" or false "optional" extreme; **no invented DEQ credential type/number, no fabricated years of septic-specific experience, no invented systems-installed count, and no claimed installed-brand/system-type beyond what the site evaluation would actually determine** (see §1's confirmed-vs-unconfirmed framing, carried through from the research pack).

---

## 5. AI Citation Target

Reused verbatim from `00-research-pack.md` §13 — already drafted at the correct length (deliberately longer than the homepage's block, since it carries page-specific regulatory nuance the homepage's brief summary doesn't attempt) and placement rule, no changes needed for this brief:

> D&D Land Works provides DEQ-certified septic system installation and repair throughout Eugene, Springfield, and Lane County, Oregon, as part of a full-service excavation company licensed and bonded under Oregon CCB #261742. In Oregon, general contracting authority (CCB) and septic system authority (Oregon DEQ certification, under Oregon Administrative Rules Chapter 340, Division 71) are separate credentials, and D&D holds both. Septic permitting in Lane County is administered locally by Lane County's Subsurface Sanitation Program, acting as an authorized agent of Oregon DEQ. Oregon septic systems fall into two broad categories: conventional (gravity-fed) systems, typically the lower-cost option where soil and site conditions allow, and DEQ-approved alternative treatment technologies (sand filters, aerobic treatment units, and similar systems), required on sites with more challenging soil, water table, or lot conditions and typically costing several times more than a conventional system. D&D Land Works handles both installation and repair, though not routine pumping. Free estimates are available; call 541-401-8726.

**Placement:** first 30% of the page's body content, immediately after the opening paragraph — same placement rule as all five prior briefs. Note: this block correctly hedges the credential claim ("Oregon DEQ certification, which qualifies it to...") without asserting a specific license/certification category — match this exact phrasing pattern anywhere else on the page a credential is mentioned.

---

## 6. Content Structure

**Word count target: 2,300–2,900 words.** Justification: per `04-competitor-matrix.md`, this page must clear a bar set by **two separate competitive sets simultaneously** — the 4 septic-capable excavation generalists (All Dirt, Emerald, McKenzie, Braun) and the 4 dedicated septic specialists (Oregon Septic, Best Septic, Westco Services, Royal Flush) — a structural situation no prior page in this pipeline faced. Both sets score 0/8 on every one of the highest-value gaps (conventional-vs-alternative explanation, real cost ranges, permit-process walkthrough, repair-vs-replace guidance, distressed-buyer framing, FAQ depth), so matching either set's depth would mean matching structural shallowness twice over. The research pack's own Content Format Plan (`00-research-pack.md` §9) specifies two comparison tables, one numbered list, and one bulleted list across a 12-section H2 map — comparable in structural density to Site Preparation (2,300–2,900 words, itself justified by a dual-permit-table structure) rather than the narrower Grading & Leveling page. Arithmetic: a 100–150 word opening + the ~160-word AI citation block + a 90–110 word DEQ-matters answer (H2 #1, extended from the live page) + a 100–130 word CCB-vs-DEQ deepened answer (H2 #2) + a 180–220 word conventional-vs-alternative comparison table with intro (H2 #3, this page's highest-value block) + a 150–190 word cost comparison table (H2 #4) + a 100–130 word signs-of-failure bulleted list (H2 #5) + a 90–120 word repair-vs-replace answer (H2 #6) + a 90–110 word DEQ-vs-Lane-County answer (H2 #7) + a 130–160 word numbered site-evaluation process list (H2 #8) + a 90–120 word home-sale-inspection myth-correction (H2 #9) + a 90–120 word pumping-frequency answer (H2 #10) + a 10-question FAQ block (40–90 words per answer, roughly 450–700 words) + a 40–60 word closing CTA lands at roughly 2,300–2,900 words.

**H1:** Septic Install & Repair in Eugene, Springfield & Lane County, Oregon
*(source: `00-research-pack.md` §8 — matches the "[Service] in Eugene, Springfield & Lane County, Oregon" pattern already shipped on all five prior pages. The current live page's H1 is simply "Septic Install & Repairs"; flag for David/dev before build, same pattern as every prior H1-change flag in this pipeline — the URL/slug does not change.)*

**Opening paragraph guidance (first 100–150 words):** Open by stating plainly that septic installation and repair in Oregon requires a separate, state-issued credential (DEQ certification) beyond general contracting licensure, and that D&D Land Works holds both — this sets up the CCB-vs-DEQ distinction (H2 #2) without repeating it verbatim, and immediately establishes the credential-verifiability trust signal this page leans on throughout. Do not open with crisis language ("is your septic system failing?") — per §3, the calm register should be established from the first sentence, serving both buyer groups rather than leading with Group 2's urgency. Follow immediately with the AI citation block from §5.

**H2 sections, in order** (every H2 traces to a competitor-matrix finding or a scored gap — cited inline):

| # | H2 (exact text) | Traces to | Format |
|---|---|---|---|
| 1 | Why DEQ Certification Matters for Septic Work | Reused/extended from the live page's own "Why DEQ Certification Matters" section and `home-content.md`'s shipped framing — table-stakes trust content, strengthened rather than replaced | Answer-first, 90–110 words; `Speakable` |
| 2 | What's the Difference Between a CCB License and DEQ Certification? | Gap #5, DEQ-vs-CCB credential distinction (score 32.0) — the live page already has a one-paragraph FAQ answer on this; this section deepens it into a full explanation of the real license/certification categories, framed as general Oregon education, never as a specific claim about David's exact credential | Answer-first/definition format, 100–130 words; `EducationalOccupationalCredential` schema pattern reused from `home-content.md` |
| 3 | Conventional vs. Alternative Septic Systems: What's the Real Difference? | Gap #1, conventional-vs-alternative explanation (score 25.0) — **the single biggest content-gap opportunity this pack found; 0/8 competitors in either competitive set address it** | Comparison table — columns: System Type / Typical Installed Cost / When It's Required — plus a short answer-first lead-in stating that soil and water-table conditions, not preference, decide which system a property needs; `Speakable` on the lead-in |
| 4 | How Much Does Septic Installation or Repair Cost in Lane County? | Gap #4, real cost-range gap (score 25.0) — 0/8 competitors in either set publish any pricing | Comparison table: Service / Typical Range / Notes — covering installation (by system type, cross-referencing H2 #3), tank repair, leach field repair, and pump repair; labeled as general estimates, not quotes |
| 5 | Is My Septic System Failing? Signs to Watch For | Reused/extended from the live page's existing signs-of-failure paragraph — upgraded to a scannable list per the format-diversity requirement; this is Group 2's primary entry point, so tone must stay factual and non-alarmist per §3 | Bulleted list, 5–7 symptoms; `ItemList` |
| 6 | Should You Repair or Replace a Failing System? | Gap #2/#3, distressed-buyer reassurance + repair-vs-replace decision (tied top score 50.0 each) — **the two highest-leverage, zero-cost content decisions on this page**, and the ones most directly tied to the task's own framing of septic as health/safety-critical and often urgent | Answer-first (50–70 words) stating the real industry rule of thumb (replace if repair cost exceeds roughly half of full replacement cost), plus a short, calm decision-factor list; `Speakable` |
| 7 | Does Lane County or Oregon DEQ Issue My Septic Permit? | Gap #7, DEQ-vs-Lane-County regulatory-structure gap (score 30.0) — directly answers the task's core regulatory question, genuinely unclaimed by any competitor | Answer-first, 90–110 words; `Speakable` |
| 8 | What Happens During a Septic Site Evaluation? | Gap #6, Lane County permit-process gap (score 20.0) — cross-linked to, not duplicated from, the site-preparation page's own site-evaluation content | Numbered list, 4 sequential steps (site evaluation/test pits → septic permit application → planning clearance → construction); `HowTo` |
| 9 | Do I Need a Septic Inspection to Sell My House in Oregon? | Gap #8, home-sale septic-inspection clarity (score 40.0) — resolves a genuinely confusing, high-anxiety question with a factual, sourced, hedged answer; **the page's dedicated myth-correction section, per the task's explicit instruction** | Answer-first, 90–120 words, stating the ORS 105.465 disclosure-duty distinction plainly (not state-mandated inspection; disclosure duty + common lender/buyer practice); `Speakable` |
| 10 | How Often Should You Pump Your Septic Tank? | Gap #9, pumping-frequency education gap (score 24.0) — cheap, accurate, positions D&D as informative despite not offering pumping itself; also carries Gap #12, scope-honesty (score 30.0) | Mixed — short answer-first + two-option list (schedule-based 3–5 years vs. condition-based 5–7 year inspection/40%-solids threshold), plus one explicit sentence that D&D handles installation and repair, not routine pumping |
| 11 | Frequently Asked Questions | Gap #18, FAQ-content gap (score 13.5) — near-total gap across both competitive sets | `FAQPage`-formatted Q&A, 10 questions (see §8 below) |
| 12 | Get Your Septic System Checked | Reused CTA pattern from all five prior briefs, calm/non-pressuring framing per §3 and §12 | Short answer-first + CTA block |

Format minimums are satisfied: ≥2 comparison tables (H2 #3 and #4), ≥1 numbered list (H2 #8), ≥1 bulleted list (H2 #5) — per the parent methodology's format-diversity rule and `00-research-pack.md` §9's own Content Format Plan.

### Critical Framing Instruction — Distressed-Buyer Tone Discipline (read before writing H2 #5, #6, and #9)

This is the single most important non-credential instruction in this brief. `05-intent-triangulation.md` establishes that this page's content must serve two buyer groups with genuinely different needs (§2 above) without collapsing into a single voice. Practically, for the content writer:

- **Never manufacture urgency.** Stating that a symptom (sewage odor, standing water, gurgling drains) is a real problem worth addressing is factual; adding scarcity or pressure language ("call today before it gets worse and more expensive" beyond the live page's own existing, mild version of this line) tips into exploiting the exact vulnerability the research flagged.
- **Never imply a specific recommendation is a sales judgment call.** Every mention of system type, repair-vs-replace, or cost must trace the recommendation back to a third-party, documented process (the site evaluation, DEQ's own guidance) rather than reading as D&D's own preference.
- **State the repair-vs-replace rule of thumb plainly and let it stand on its own** — do not follow it with language that nudges toward the more expensive option.
- **The home-sale-inspection answer (H2 #9) must not be softened toward a simple "yes, required" or "no, don't worry about it."** Both oversimplifications actively harm a Group 2 buyer navigating a real transaction; the accurate, hedged answer is the trust-building answer here, not a hedge to work around.

---

## 7. Unique Angle

Pulled directly from the top gaps in `08-gap-analysis.md` — every entry is a specific, evidence-based differentiator, not a slogan:

1. **Explains the conventional-vs-alternative system cost decision in plain language, tied to real numbers** — conventional systems typically $3,000–$10,000 installed vs. alternative treatment technologies (sand filters, ATUs) typically $12,000–$30,000+ — where zero of 8 competitors in either competitive set address this at all (`08-gap-analysis.md` Gap #1, and the pack's own "single biggest content-gap opportunity"). This is the differentiator that should be the page's most substantial single section.
2. **Offers a calm, explicit repair-vs-replace decision framework** (the industry rule of thumb: replace if repair cost exceeds roughly half of full replacement) presented before any sales framing — the two highest-scored gaps in this pack (tied at 50.0), and the content decision most directly responsive to the task's explicit distressed-buyer concern.
3. **Corrects a genuine, citable myth about home-sale septic inspections**: Oregon does not mandate a septic-specific inspection by state statute at time of sale — sellers must disclose known defects under ORS 105.465, and lenders/buyers commonly require an inspection anyway as a matter of practice, not law. Zero competitors in either competitive set address the home-sale scenario at all (`08-gap-analysis.md` Gap #8, score 40.0).
4. **Links directly to Oregon DEQ's own Sewage Disposal Service business license search tool** — the exact self-verification pattern the homepage already uses for the CCB license, and one zero competitors in either competitive set currently provide (`08-gap-analysis.md` Gap #11, score 40.0).
5. **States plainly that D&D's septic certification lives inside the same company that does the excavation** — a genuine, evidence-based contrast with Danco Excavation's own confirmed positioning (site-prep support for other septic contractors, despite holding a DEQ number), stated without naming Danco, as "one contractor, one credential set, start to finish" (`08-gap-analysis.md` Gap #19, score 32.0).

These five must surface in the opening paragraph or immediately after (at minimum the dual-credential framing, introduced early), in their dedicated H2 sections (#3, #6, #9, #2/#7, #1 respectively), and echoed briefly in the closing CTA copy.

---

## 8. FAQ Section

10 questions, sourced verbatim from `02-question-mine.md`'s FAQ Shortlist, cross-checked against `04-competitor-matrix.md` Matrix B: no competitor in either competitive set runs a real, substantive septic-specific FAQ covering system-type selection, permitting, or repair-vs-replace guidance, so nearly every question below is uncontested ground.

| # | Question | Source in question-mine | Answer guidance (40–90 words, direct answer first) |
|---|---|---|---|
| 1 | What's the difference between a conventional and an alternative (ATT) septic system, and how do I know which one I need? | Q37/Q64 (decision/cost — zero-competitor-coverage) | Lead with: a conventional (gravity-fed) system is Oregon's baseline and the lower-cost option; an alternative treatment system (sand filter, aerobic treatment unit) is required where soil, water table, slope, or lot size don't support a conventional design. Which one a property needs is decided by the site evaluation's soil and water-table findings, not preference. |
| 2 | Does Lane County or Oregon DEQ directly issue my septic permit? | Q26/Q55 (oregon_specific — directly answers the task's core regulatory question) | Lead with: Lane County administers septic permitting locally, as an authorized agent of Oregon DEQ. DEQ directly manages permitting in only three Oregon counties (Curry, Jackson, Josephine); Lane County is one of the other 33 counties handling it locally through its Subsurface Sanitation Program. |
| 3 | Should I repair or replace my failing septic system? | Q34/Q35 (decision, distressed_buyer) | Lead with the industry rule of thumb: if repairing costs more than roughly half of a full replacement, replacement is usually the smarter long-term call. Frame it as a calm, real decision, not an automatic push toward the bigger job. |
| 4 | What are the signs my septic system or drainfield is failing? | Q45/Q46 (failure_mode, distressed_buyer) | Lead with the core symptom list: slow drains throughout the house, soggy or unusually green patches over the drainfield, sewage odor near the tank or drainfield, gurgling drains. Note that standing sewage or a black slimy substance on the ground is a more advanced sign worth addressing right away. |
| 5 | How much does septic installation or repair typically cost in Lane County? | Q9/Q16/Q17 (cost) | Lead with the range split by system type (roughly $3,000–$10,000 conventional, $12,000–$30,000+ for an alternative system), plus tank repair (average around $1,828) and leach field repair ($2,000–$20,000) — clearly labeled as general ranges, not quotes; a site evaluation is what determines the real number for a specific property. |
| 6 | How often should I have my septic tank pumped? | Q43 (post_service) | Lead with DEQ's own guidance: roughly every 3–5 years depending on household size and tank capacity, or inspect every 5–7 years and pump once solids exceed about 40% of tank volume. Note D&D handles installation and repair, not routine pumping, so a pumping-specific need may call for a separate provider. |
| 7 | Do I need a septic inspection before selling my house in Oregon? | Q56 (oregon_specific, distressed_buyer — the page's dedicated myth-correction) | Lead with the accurate, hedged answer: Oregon doesn't require a septic-specific inspection by state law before a home sale, but sellers must disclose known septic problems under Oregon's Seller's Property Disclosure Statement law, and most lenders and buyers ask for an independent inspection anyway before closing. |
| 8 | Can I build, pave, or grade over my drainfield? | Q29/Q30 (process — cross-references the site-preparation pack's already-established sequencing finding) | Lead with "no" — once a drainfield location is proposed or approved through the site evaluation, it can't be cut, filled, paved, or otherwise disturbed without risking voiding the county's septic approval, which can mean a second round of test pits, added cost, and real delay. |
| 9 | What's the difference between a general contractor's CCB license and DEQ septic certification? | Q1/Q2 (pre_call — reused/deepened from the shipped astro page's existing FAQ, do not contradict) | Lead with: they're separate credentials. Oregon's CCB license covers general contracting and excavation; DEQ certification is the separate state credential specifically required to legally install or repair a septic system. D&D Land Works holds both. |
| 10 | How do I verify a septic contractor is actually DEQ licensed? | Q60 (objection/trust) | Lead with the direct answer: search Oregon DEQ's own Sewage Disposal Service business license search tool — the same kind of public, self-checkable record as the CCB license lookup — rather than taking a contractor's word for it. |

No FAQ answer should invent a specific DEQ credential number or type for David, a septic-specific years-of-experience figure, a systems-installed count, or a specific installed-brand/system-type (e.g., AdvanTex) — see Open Items. No FAQ answer should state the Lane County site-evaluation fee (~$866–$998) as an exact, confirmed figure without the hedge specified in §14, and no answer should overstate the home-sale-inspection answer (Q7) toward either a flat "yes, required" or "no, not needed."

---

## 9. Internal Links

**IN (what will link to this page):**

| From | Anchor text example | Placement |
|---|---|---|
| Homepage (`/`) | "septic installation and repair" | Services list of `home-content.md`, already implemented (also linked from H2 #4, DEQ section) |
| `/services/site-preparation/` | "septic" (down-link, per that page's existing "Site Prep and Your Septic System" section) | Already implemented per `site-preparation-content.md` |
| `/locations/eugene/septic/`, `/locations/springfield/septic/` (already live) | "septic install & repair" | Already implemented in both city×service pages' body copy |
| `/resources/septic-installation-cost-oregon/`, `/resources/oregon-septic-basics/` (already live) | "septic installation cost in Oregon" / "Oregon septic basics" | Already implemented as outbound links from the current live service page; this brief's job is to make the service page itself the deeper, more authoritative version these two resource pages currently point to |
| `/about/` | Breadcrumb | Breadcrumb |
| Global header/footer | "Services" nav item | Every page |

**OUT (this page → other pages)**, with the sideways sequencing link to Site Preparation carrying the explicit framing the task requires:

| To | Anchor text | Placement |
|---|---|---|
| `/services/site-preparation/` | "site preparation" — with **explicit "if grading or clearing needs to happen on the same property, the area evaluated for your drainfield can't be disturbed first — see site preparation for how D&D sequences that" framing**, not a bare anchor | H2 #8 (site evaluation process) and H2 #6/§6's drainfield-protection detail |
| `/` (homepage) | "D&D Land Works" or "our full range of excavation services" | Breadcrumb + body-late (up-link to hub) |
| `/locations/eugene/septic/`, `/locations/springfield/septic/` | "septic work in Eugene" / "septic work in Springfield" | Body, near the geo-modifier in the opening paragraph or H1 area |
| `/resources/septic-installation-cost-oregon/` | "our full septic cost breakdown" | H2 #4 (cost section) — link out for the fuller national-range context rather than duplicating it in full |
| `/resources/oregon-septic-basics/` | "Oregon septic basics" | H2 #2 or H2 #7 (regulatory sections) — **flag to David/dev: this resource page's current home-sale-inspection line should be corrected to match this page's H2 #9 before both pages are cross-linked as agreeing sources; see Open Items** |
| `/about/` | "David Deggelman" | Trust/CCB mention |
| `/contact/` | "get a free estimate" / "call 541-401-8726" | H2 #12 CTA + hero |

No "click here" / "learn more" anchors — every anchor is descriptive, matching the pattern already used on the current live page.

---

## 10. Schema Requirements

This page follows the exact pattern `site-preparation-content.md`, `excavation-content.md`, `grading-leveling-content.md`, and `land-clearing-content.md` shipped with, with one explicit exclusion this task requires stating plainly:

- **Primary `@type`: `Service`** — CONFIRMED REAL schema.org type, reused from the prior packs' confirmed schema.org research rather than re-checking from scratch (`00-research-pack.md` §11).
- **`provider`**: `{"@id": "https://www.ddlandworks.com/#business"}` — the exact `@id` already shipped in all four prior sibling pages' JSON-LD. Do not redefine the organization inline and do not use a different placeholder.
- **`Service` required fields:** `name` ("Septic Installation and Repair"), `provider` (the `@id` reference above), `areaServed` (Lane County + Eugene/Springfield at minimum, matching the full city list already used in the four prior shipped pages' schema), `serviceType` ("Septic Installation and Repair"), `description` (can reuse a trimmed version of the AI citation block from §5).
- **`FAQPage`** — for the 10-question set in §8; FAQ schema answers must match the visible FAQ text exactly.
- **`HowTo`** — for the 4-step site-evaluation-to-construction sequence in H2 #8.
- **`ItemList`** — for the signs-of-failure bulleted list in H2 #5.
- **`BreadcrumbList`** — Home → Services → Septic Install & Repairs, matching the current live page's already-implemented `Breadcrumbs` component.
- **`Speakable`** — flag the answer-first passages in H2s #1, #3 (lead-in), #6, #7, and #9 as speakable-eligible, per `00-research-pack.md` §9's Content Format Plan.
- **`hasCredential` (`EducationalOccupationalCredential`)** — reuse the exact structure already shipped in `home-content.md`'s JSON-LD (`credentialCategory: "certification"`, `name: "DEQ Certified"`, `recognizedBy: Oregon Department of Environmental Quality`). **Do NOT add a more specific `hasCredential` claim than what's already shipped** — no specific license type (Installer/Pumper/Combined), no certification number, and no invented tier name.
- **Do NOT add a `MedicalBusiness` type or any other health/safety-adjacent schema type.** Septic work touches wastewater and public health, but D&D's own schema-relevant identity is `GeneralContractor`/`Service`, not a medical or health-services entity — using `MedicalBusiness` or a similar type here would be a category error schema.org does not support for this kind of business, and would misrepresent what D&D actually is.
- **Do NOT implement `AggregateRating`/`Review` schema** — same rule as all five prior briefs; D&D has zero reviews at launch.

---

## 11. Entity Profile

Pulled from `01-research/page-research/septic/entity-inventory.csv`, cross-checked against the home, site-preparation, excavation, grading-leveling, and land-clearing packs' inventories for reused canonical forms. Business/location/certification entities are **not re-derived** — see the five prior briefs' §11 for their original validation notes.

**Primary entity (salience 10, reused unchanged):**
- **D&D Land Works** (Organization → schema `GeneralContractor`) — `NOT_FOUND` externally. Must appear in the first sentence of body copy and in the `Service.provider` reference.

**Page-defining entity (salience 9, new for this page):**
- **Septic Installation and Repair** (Service) — `VALIDATED_LOCAL`. 4 of 8 tracked excavation competitors offer it (a genuinely split field, unlike every prior page's near-universal service overlap); 4 dedicated septic specialists compete here directly.

**Credential entities (salience 6-9, handle per §1 and §4's conservative-claims rule):**
- **Oregon CCB #261742** (7) — `VALIDATED_LOCAL`, reused verbatim. Covers general contracting authority only; does not by itself authorize septic work.
- **DEQ Certified** (8) — `VALIDATED` at the general level already shipped in `home-content.md`; the ceiling of what this page can assert about D&D's own credential.
- **Sewage Disposal Service (SDS) License** (9) — `VALIDATED`, new. Three real types (Installer / Pumper / Combined Pumper-Installer); do not assert which type D&D holds.
- **Installer Certification** (9) — `VALIDATED`, new. The individual credential likely underlying D&D's "DEQ Certified" status; do not state a specific number or assert this specific category with certainty.
- **Maintenance Provider Certification** (7) — `VALIDATED`, new, a **separate** credential from Installer Certification, relevant only to ongoing ATT/sand-filter service; not confirmed whether D&D holds it — do not assume.
- **DEQ Onsite Septic Business License Search** (6) — `VALIDATED`, new. The direct-link authority signal, DEQ-side equivalent of the CCB lookup.

**Regulatory authority entities (salience 6-9, all verified directly this session):**
- **Oregon Department of Environmental Quality** (10) — `VALIDATED`, reused verbatim.
- **Oregon Administrative Rules 340-071** (9) — `VALIDATED`, reused/re-confirmed, this page's most load-bearing regulatory citation.
- **OAR 340-071-0120 (Contract County Structure)** (9) — `VALIDATED`, new — directly answers the task's core regulatory question.
- **Lane County Subsurface Sanitation Program** (9) — `VALIDATED`, new — the specific administering office.
- **ePASS (Lane County permitting portal)** (4) — `VALIDATED_LOCAL`, new.

**System-type entities (salience 4-9, this page's real content backbone):**
- **Septic Tank** (8), **Drainfield/Leach Field** (8), **Distribution Box** (5) — `VALIDATED`/`VALIDATED_LOCAL`, standard components.
- **Conventional (Standard) Septic System** (9) — `VALIDATED`, Oregon's baseline, $3,000-$10,000.
- **Alternative Treatment Technology (ATT)** (9) — `VALIDATED`, DEQ's own umbrella term, $12,000-$30,000+.
- **Aerobic Treatment Unit (ATU)** (7) — `VALIDATED`, ATT subtype, $10,000-$20,000 + ongoing service contract.
- **Sand Filter System (intermittent/recirculating)** (7) — `VALIDATED`, ATT subtype.
- **Recirculating Gravel Filter** (4), **Capping Fill System** (5), **Pressure Distribution** (4) — `VALIDATED_LOCAL`, Oregon-specific system/distribution terms.
- **AdvanTex (Orenco)** (3) — `VALIDATED_LOCAL` as a real product, `NOT_FOUND_FOR_DD` as a D&D-installed brand — named by competitor Braun only; do not imply D&D installs it without confirmation.
- **Mound System** (4) — `VALIDATED_LOCAL`, general industry term.

**Process/decision entities (salience 6-8):**
- **Site Evaluation (Septic)** (8) — `VALIDATED`, reused verbatim from the site-preparation pack's test-pit research.
- **Drainfield Protection/Sequencing Rule** (8) — `VALIDATED_LOCAL`, reused verbatim, extended here with septic-side consequences.
- **Repair-vs-Replace Threshold** (6) — `VALIDATED_LOCAL`, reused from the homepage pack.
- **Pumping Frequency Guidance** (7) — `VALIDATED`, new, DEQ's own published guidance.
- **Home-Sale Septic Disclosure (ORS 105.465)** (7) — `VALIDATED`, new — the page's dedicated myth-correction entity.

**Competitor entities (see `04-competitor-matrix.md` — two distinct sets, do not conflate):**
- Septic-capable excavation generalists: **All Dirt, Inc.** (7), **Emerald Excavating** (7), **McKenzie Excavating** (6), **Braun Excavating** (6) — all `VALIDATED_LOCAL`.
- Confirmed non-installer/absent: **Danco Excavation** (5, supports-but-doesn't-install — useful contrast, do not name in copy per §7), **Heavy D Excavation** (3, no septic), **Strasheim Contracting** (3, no septic), **A&D Excavation** (3, unresolved).
- Dedicated septic specialists (a genuinely new competitive category for this pipeline): **Oregon Septic** (6), **Best Septic** (5), **Westco Services** (5), **Royal Flush Environmental Services** (4) — all `VALIDATED_LOCAL`. Note per `04-competitor-matrix.md`: several of these lead with **pumping**, a service D&D does not offer — D&D's actual overlap with this set is narrower than it first appears and should be stated honestly (H2 #10), not implied as full head-to-head competition.

**Reused geo/business entities (unchanged from prior packs):** David Deggelman, Oregon CCB #261742, Willamette Valley, Eugene, Springfield, Veneta, Creswell — same validation status and do-not-fabricate rules as the five prior briefs.

**Equipment entities:** no new septic-specific equipment category — septic installation is fundamentally an excavation task with a regulatory/design layer on top, not a distinct equipment category (per `03-entity-map.md` §9). Do not fabricate a vacuum-truck/pumping-equipment brand, since D&D does not offer pumping.

**Co-occurrence requirements specific to this page** (per `03-entity-map.md` and `04-competitor-matrix.md` Matrix A):
- DEQ license/certification number or claim shown — 6/8 (both competitive sets combined) — table stakes to maintain the already-shipped "DEQ Certified" claim, not to escalate it
- Conventional vs. alternative system explained in plain language — 0/8 — mandatory to fill
- Real cost ranges published — 0/8 — mandatory to fill
- Step-by-step permit/process explanation — 0/8 — mandatory to fill
- Repair-vs-replace decision guidance — 0/8 — mandatory to fill
- Distressed-buyer/failing-system reassurance framing — 0/8 — mandatory to fill

---

## 12. CTA Requirements

Per §3 and §6's tone discipline, every CTA on this page must read as an offer, never as pressure — this is a stricter version of the no-fabricated-urgency rule already in effect on all five prior pages.

| Placement | Copy | Type/link |
|---|---|---|
| Above the fold (hero, already live) | "Call 541-401-8726" / "Free Estimate" | `tel:5414018726` and `/contact/` — **keep the existing Hero component copy unchanged** |
| Mid-page (after H2 #4, cost section) | "Want a real number instead of a range? A site evaluation is what actually determines it — request a free estimate." | `/contact/` |
| After H2 #6 (repair vs. replace) | "Not sure which side of that line your system is on? We'll walk it with you, no pressure." | `/contact/` |
| H2 #12 (closing CTA) | "Get Your Septic System Checked" + a calm, non-urgent restatement that D&D handles both planned installs and repair calls + phone/estimate link | `tel:5414018726`, `/contact/` — reuse the existing `CTABlock` copy verbatim where it already fits |

No fabricated urgency/scarcity language ("act now," "before it's too late," "limited availability") anywhere on this page — consistent with all five prior briefs' rule, and enforced more strictly here given the distressed-buyer research in §2/§3.

---

## 13. Images Required

**Current state: the live page has zero real project photos**, same gap as all five prior pages — the `Hero` component is text-only, and no `<img>` beyond shared components appears in `septic-install-repairs.astro`. This is a genuine, unaddressed gap, not something to paper over with unbranded stock presented as D&D's own work (same rule as all five prior briefs' §13). **A specific caution for this page:** any photography depicting an open excavation, exposed tank, or drainfield should avoid implying identifiable details about a real customer's property without consent, once real jobsite photography exists.

| # | Description | Alt text guidance | Type | Status |
|---|---|---|---|---|
| 1 | Hero image — a septic tank or drainfield installation in progress on a Lane County site | "Septic system installation, DEQ-certified work in Lane County, Oregon" | Hero | **Gap — no real photo yet** |
| 2 | A simple illustrated diagram of a conventional system (tank + gravity drainfield) vs. an alternative system (tank + treatment unit + engineered dispersal) | "Conventional vs. alternative septic system diagram, Oregon" | Supporting graphic, near H2 #3 (the page's highest-value section) | Can launch as an illustrated diagram — genuinely high-value given this is the page's single biggest content differentiator |
| 3 | Excavator exposing a tank or drainfield for repair | "Septic repair and drainfield work, Lane County, Oregon" | Evidence, near H2 #5/#6 | **Gap — needs a real jobsite photo** |
| 4 | Test pits dug during a site evaluation | "Septic site evaluation test pits, Lane County, Oregon" | Evidence, near H2 #8 (site evaluation process) | **Gap — genuinely absent; ties directly to the process-transparency section** |
| 5 | Simple illustrated map/graphic showing DEQ-direct counties (Curry, Jackson, Josephine) vs. DEQ contract/agent counties (including Lane County) | "Oregon DEQ direct vs. contract county septic permitting map" | Supporting graphic, near H2 #7 | Lower priority than the photo gaps, but a genuinely differentiated asset given this is a real, unclaimed regulatory-clarity point |

Flag to David: same as all five prior briefs — launching with limited or no photography is an acceptable temporary measure, but should be tracked as a launch gap to close with real jobsite photography within the first few months. A documented test-pit/site-evaluation photo would be especially valuable here given how central the process-transparency claim is to this page.

---

## 14. Authority Signals to Cite

Pulled from `07-oregon-authority.md`, with the verification/hedging status made explicit per this project's central sourcing rule:

1. **Lane County as a DEQ contract/agent county (OAR 340-071-0120) — CONFIRMED with one final-check caveat, cite normally with the caveat noted.** "Under Oregon Administrative Rules 340-071-0120, DEQ has authorized local jurisdictions to act as its agent for permitting onsite wastewater systems. DEQ directly manages septic permitting in only three Oregon counties — Curry, Jackson, and Josephine. Lane County is one of the other 33 counties that administers septic permitting locally, through its own Subsurface Sanitation Program, as an authorized DEQ agent." *(Source: OAR 340-071-0120; Lane County — On-Site Wastewater and Subsurface Sanitation Permits General Information pages; verified 2026-09-08 — well-supported by convergent evidence, though DEQ's specific county-agent roster page could not be fully rendered to see Lane County named on a literal list in this pass. Recommend one final direct confirmation before publishing as a bare, unattributed absolute; safe to state as currently worded, which is already appropriately attributed.)*
2. **Real DEQ credential categories — CONFIRMED, cite normally, no invented tiers.** "Oregon's Sewage Disposal Service business license comes in three types — Installer, Pumper, and Combined Pumper/Installer — bonded at $15,000 for Installer or Combined licenses and $5,000 for Pumper-only. Separately, an individual Installer Certification is required before a business can hold an Installer or Combined license, and a separate Maintenance Provider Certification is required to service alternative treatment, sand filter, or recirculating gravel filter systems. Oregon does not use a tiered 'Installer II'-style system." *(Source: oregon.gov/deq/residential/pages/onsite-licensing.aspx; oregon.gov/deq/Residential/Pages/Onsite-Certification.aspx; verified directly 2026-09-08. State this as general Oregon regulatory education — do not assert which specific license type or certification David personally holds.)*
3. **OAR Chapter 340, Division 71 — CONFIRMED, cite normally, reused/re-verified.** "Septic system installation and repair in Oregon is governed statewide by Oregon Administrative Rules Chapter 340, Division 71, covering permitting, site evaluation, design and construction standards, and installer/maintenance-provider certification." *(Source: oregon.public.law/rules/oar_chapter_340_division_71; independently re-verified 2026-09-08, consistent with the citation already shipped in `home-content.md`.)*
4. **Conventional vs. alternative system cost data — present as general industry ranges, not Lane-County-guaranteed pricing.** "A conventional septic system typically installs for $3,000–$10,000 in Oregon; an alternative treatment system (sand filter, aerobic treatment unit) typically runs $12,000–$30,000 or more, because it actively treats wastewater to a higher standard before it reaches the drainfield — which takes more equipment, more engineering, and for an aerobic treatment unit specifically, an ongoing service contract a conventional system doesn't need." *(Source: SepticTankHub — Engineered Septic System Cost Guide, Sand Filter Septic Systems, Aerobic Septic System Cost; Angi — How Much Does a Septic System Cost (2026); Homeyou — Septic Tank Installation in Eugene, OR; verified 2026-09-08. Only a site evaluation and estimate determine the real number for a specific property — state this explicitly alongside any range.)*
5. **Home-sale septic inspection — CONFIRMED, this page's dedicated myth-correction, cite normally with the hedge built into the statement itself.** "Oregon does not appear to require a septic-specific inspection by state statute at the time of a home sale. Sellers must provide a Seller's Property Disclosure Statement under ORS 105.465, covering known material defects including known septic problems — but the legal standard is actual knowledge, not an obligation to investigate. In practice, an On-Site Sewage Addendum and an independent septic inspection are common parts of a real estate transaction, commonly required by lenders or buyers as a condition of the deal, not by Oregon law." *(Source: ORS 105.465; Oregon Realtors — Oregon Property Seller Advisory; verified 2026-09-08. This is a genuinely nuanced fact — do not compress it into a flat "yes" or "no.")*
6. **DEQ pumping-frequency guidance — CONFIRMED, cite normally.** "Oregon DEQ recommends pumping a septic tank every 3–5 years depending on household size and tank capacity, or inspecting every 5–7 years and pumping once solids exceed roughly 40% of tank volume." *(Source: oregon.gov/deq/Residential/Pages/Onsite-about.aspx; verified 2026-09-08.)*
7. **Lane County septic permit/site-evaluation fee — HEDGE REQUIRED, do not state as an exact confirmed figure.** "A secondary source places Lane County's septic site-evaluation fee at roughly $866–$998, with combined structural, trade, and septic permit fees on a typical new home estimated at $3,000–$6,000 — confirm current fees directly with Lane County's Subsurface Sanitation Program before quoting an exact figure." *(Source: Willamette Craftworks — Lane County Building Permits: 2026 Homeowner's Guide, reused from the site-preparation pack's sourcing pattern; not independently confirmed against Lane County's own current fee schedule in this pass; verified 2026-09-08.)*

**Explicit hedging instruction for the content writer:** signal #7 above must use hedged, attributed language in both body copy and any FAQ answer that touches permit cost — never state the $866–$998 figure as Lane County's own directly-confirmed current fee. Signal #1 is well-supported and may be stated substantially as worded above, with the "recommend one final confirmation" caveat treated as an internal note for David/dev, not language that needs to appear on the page itself. Signals #2, #3, #5, and #6 were verified directly against primary government sources and may be stated as fact without further hedging. Signal #4 should be labeled as general industry cost data, not Lane-County-guaranteed or D&D-specific pricing.

Density target: same as all five prior briefs, roughly 1 statistic per 300–500 words of body copy, at least one external authority link per major H2 section — this page should exceed that target given how regulation-dense the topic is, per `00-research-pack.md` §12's own instruction.

---

## Open Items Requiring David's Input Before Content-Create

Carried forward from `00-research-pack.md`'s "Honest Limitations" section and `08-gap-analysis.md`'s "Gaps that require David's input" — do not invent values for these:

1. **David's exact DEQ credential type and number** (Installer Certification vs. Combined Pumper/Installer license vs. Maintenance Provider Certification) — this brief's single highest-priority open item, consistent with the task's explicit instruction. The page can and should explain Oregon's real credential categories as general education, but must not assert which one David holds beyond the already-shipped, general "DEQ Certified" claim until confirmed.
2. **Years of septic-specific experience**, distinct from general excavation experience — do not invent a figure; the DEQ credential itself is the experience proxy until a real number is confirmed.
3. **Number of septic systems installed** — do not invent a count.
4. **Which specific system types D&D actually installs** — conventional only, or also specific ATT types/brands (e.g., AdvanTex, a specific sand-filter product)? Competitor Braun names brands directly; D&D should only do the same once confirmed with David. Until then, H2 #3 and #10 stay at the category level (conventional, ATT, sand filter, ATU as general Oregon system types), not a D&D-specific installed-brand claim.
5. **Whether D&D's DEQ standing covers Maintenance Provider certification**, relevant only if D&D services ATT/sand-filter systems on an ongoing basis rather than only installing them — affects whether H2 #10's pumping/maintenance section can say anything about D&D's own ongoing-service role beyond the general DEQ-guidance framing it currently uses.
6. **Real response-time capability for an "emergency" septic call** — no urgency-based service language (e.g., "24-hour emergency septic service") should be added anywhere on this page without this confirmation; the calm-tone discipline in §3 already limits this, but a confirmed real capability could still be stated factually and calmly if David wants it included.
7. **The `oregon-septic-basics.astro` resource page's overstated home-sale-inspection claim** (flagged at the top of this brief and in §9) — "Oregon requires a septic evaluation report in most property sales where the system predates certain regulatory changes" should be corrected to match this page's accurate, hedged H2 #9 language before the two pages are treated as agreeing sources. This is a same-site consistency fix, not new research, but it is a real, live inaccuracy this pack surfaced and should not be left unaddressed once this page ships the corrected version.
8. **Final direct confirmation of Lane County's status on DEQ's own county-agent contacts page** (`oregon.gov/deq/residential/pages/onsite-contacts.aspx`), which could not be fully rendered in this research pass — the finding is well-supported by convergent evidence and safe to publish as currently hedged, but a direct roster confirmation would remove the last caveat on this page's most load-bearing regulatory claim.
9. **Lane County's current exact septic permit/site-evaluation fee**, to replace the secondary-sourced $866–$998 estimate with a number confirmed directly against Lane County's own fee schedule.

**The single most important item before this brief moves to `content-create`:** item #1 above (David's exact DEQ credential type/number). This page makes a second, independently regulated credential claim on top of the CCB license every prior page relies on, and the task's own framing is explicit that overstating a specific septic credential carries materially higher legal and trust risk than overstating "years in business" ever did on the five prior pages. Publishing beyond the already-confirmed, general "DEQ Certified" claim without this confirmation would be the highest-risk error this brief could otherwise introduce.
