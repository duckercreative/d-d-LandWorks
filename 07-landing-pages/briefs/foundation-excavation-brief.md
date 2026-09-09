# Content Brief — D&D Land Works Foundation Excavation (`/services/foundation-excavation/`)

**Prepared:** 2026-09-09 · **Prepared by:** Ducker Creative
**Built from:** `01-research/page-research/foundation-excavation/` full research pack (files 00, 02, 03, 04, 05, 07 + entity-inventory.csv), cross-checked against `01-research/page-research/home/entity-inventory.csv` and `01-research/page-research/excavation/entity-inventory.csv` for canonical entity reuse, `business-info.md`, `docs/design-system.md`, `07-landing-pages/content/excavation-content.md` (scope-boundary framing, "What Kind of Project Is This For?" foundation-dig bullet, and the exact JSON-LD `@id` pattern), and the current live page at `site/src/pages/services/foundation-excavation.astro`.
**Methodology note:** Same adaptation as all six prior briefs (`home-brief.md`, `site-preparation-brief.md`, `excavation-brief.md`, `grading-leveling-brief.md`, `land-clearing-brief.md`, `septic-brief.md`) — this project's `content-briefs` skill was written for a prior HVAC client and references files that don't exist here. Dropped/substituted with the real D&D Land Works research files throughout.
**Pipeline position:** Seventh page through this project's content pipeline. **This is a content-expansion/restructure brief, not a greenfield brief** — a real page already exists and is live in the Astro codebase, with a genuinely strong hook and an accurate process list, but zero of the seven Oregon-specific gaps this pack identifies. Every recommendation below is scoped as "add," "expand," or "restructure" against that existing page, the same discipline `excavation-brief.md` applied.
**URL note (settled, not an open item):** Targets `/services/foundation-excavation/`, matching the file path `site/src/pages/services/foundation-excavation.astro` already live in the Astro codebase and the task instruction. No URL move needed.
**Entity reuse:** All canonical business/location/certification entities (D&D Land Works, David Deggelman, Oregon CCB #261742, Oregon DEQ, Lane County, Eugene, Springfield, Willamette Valley, the `GeneralContractor`/`Service` schema decisions) are reused verbatim from `home-brief.md` §11 and `excavation-brief.md` §11 — not renamed or re-derived. The `Service.provider` reference uses the exact `@id` already shipped in `excavation-content.md`'s JSON-LD (`https://www.ddlandworks.com/#business`).
**Scope-boundary reminder (governs every section below):** general cut/fill, backfill/compaction mechanics, equipment-category explanations, the excavation-vs-grading disambiguation, Oregon811, and the general OSHA Subpart P trench-depth figures (5 ft protective-system threshold, 4 ft/25 ft access threshold) are **already owned by the shipped `/services/excavation/` page** and must not be re-derived here. This page cross-links up to `/services/excavation/` for all of that content instead of repeating it. See §6's Boundary Note for the full, explicit list of what stays out.

---

## 1. Page Metadata

| Field | Value |
|---|---|
| **Canonical URL** | `/services/foundation-excavation/` |
| **Current live URL** | `/services/foundation-excavation/` (file: `site/src/pages/services/foundation-excavation.astro`) — already matches; no URL move needed |
| **Slug** | `foundation-excavation` |
| **Page type** | Core service page — P1 priority per the topical map (§6.5), the page the shipped `/services/excavation/` page explicitly promises to defer to ("See foundation excavation for more depth on this project type") |
| **Primary keyword** | `foundation excavation eugene or` / `foundation excavation eugene oregon` |
| **Co-primary keyword** | `foundation excavation lane county or` (county-wide framing, matching this page's core-service, not city-scoped, role) |
| **Secondary keywords** | `frost line depth oregon foundation` (this page's single most defensible authority citation); `crawlspace vs slab foundation excavation cost` (the task's central cost-differentiation mandate); `ADU foundation excavation` (a genuinely uncontested, Oregon-timely query — zero competitor coverage found anywhere in this research) |
| **Semantic terms** (must appear at least once) | footing, frost line / frost depth, ORSC R403.1.4, over-dig, working space, slab-on-grade foundation, crawlspace foundation, full basement foundation, foundation drain, crawlspace vapor retarder, footing inspection, excavate-inspect-pour, Eugene eBuild, Lane County Building Safety Program, underpinning, dewatering, geotechnical/soils report, monolithic slab, stem wall, licensed and bonded, Oregon CCB #261742, free estimate |
| **Search intent** | Commercial, decision-stage for the primary/co-primary terms; frost-depth and foundation-type-cost terms are consideration/informational-stage, the page's clearest AI-citation opportunity (`00-research-pack.md` §1) |
| **Current state / baseline** | A real, live page exists today with a genuinely strong opening hook — "Get it wrong here and every trade after you inherits the problem" — correctly framing foundation excavation as precision-critical, schedule-dependent work (`08-gap-analysis.md`'s "already gets right" note; **preserve this hook verbatim, it's a real asset**). It already covers: an accurate process list (excavating for footings/stem walls/slabs/basements, cutting to plan depth, checking elevations against survey, compacting subgrade, sloping for safe access/drainage, backfilling/compacting, coordinating with the GC's schedule); a foundation-specific equipment note (laser level/GPS grade control, plate compactor/vibratory roller — preserve, don't remove per `03-entity-map.md` §6 and `08-gap-analysis.md`); and a brief "Residential and Commercial" framing. It has **zero** of: the verified frost-depth figure, any foundation-type (slab/crawlspace/basement) scope-or-cost distinction, the over-dig/working-space figure, the excavate→inspect→pour sequencing, ORSC foundation-drain/vapor-retarder requirements, ADU-specific content, an explicit scope-boundary statement against `/services/excavation/`, or an FAQ. Notably, its current Related Services grid (Site Preparation, Trenching & Backfill, Drainage Excavation) **does not link to `/services/excavation/` at all** — a gap this brief closes, since that's the exact page whose "see foundation excavation for more depth" sentence this page exists to make good on. This is a content-expansion/restructure brief, not a rewrite-from-nothing brief — the existing hook, process list, and equipment note should be kept and built around. |

---

## 2. Intent & Audience

- **Primary ICP:** A builder or GC coordinating a subcontractor to dig footings ahead of a scheduled forming/pour date, and a homeowner who just closed on a lot and is choosing between foundation types with a builder before that builder's quote arrives. Secondary ICP: a homeowner or small developer planning an ADU who isn't sure whether it needs its own real foundation, and someone who received a prior excavation quote that named no frost depth, no over-dig figure, and no inspection timing, and it felt thin.
- **Builder/GC-coordination angle (the defining difference from every prior page in this pipeline):** every sibling page in this series — homepage, site prep, general excavation, grading-leveling, land clearing, septic — deals with a buyer making a relatively self-contained decision. Foundation excavation is structurally different: it is almost always a **dependent step inside someone else's larger project**, tied to an active building permit, a builder's or GC's schedule, and a footing inspection the buyer doesn't personally control (`05-intent-triangulation.md`, "Why this page's intent profile differs from its five siblings"). That changes what "trust" means here — less "will you show up and do good work" (still table stakes) and more "will you understand and respect the schedule and inspection process you're plugging into, and will you tell me the real numbers instead of a vague reassurance." Every H2 in §6 below is built around that distinction, not a re-skin of the excavation page's general trust content.
- **State of mind — cost anxiety about foundation type, fear of an under-dug footing, and schedule-dependency stress, all sharper here than on any sibling page:** they don't know if a slab, crawlspace, or basement changes the price meaningfully (it does, a lot); they suspect (per `05-intent-triangulation.md` Table 1) a contractor might under-dig a footing to save time or cost, and no competitor content states an actual depth number to check that against; they're worried that hitting rock or water under a foundation specifically is more catastrophic than on a driveway or pond dig, because the whole structure above depends on it; they're anxious that a delay in the foundation dig will delay their entire build, since everything after it (forming, pour, framing) sits on the same critical path; and if they're planning an ADU, they don't know whether it needs a full, separate foundation dig or something simpler.
- **What they need to believe before calling:**
  1. D&D actually knows and will state the real footing-depth requirement for Lane County, not just "check with your building department."
  2. Foundation type (slab, crawlspace, basement) genuinely changes scope and cost, and D&D can explain why in plain terms, not with a vague "we'll dig it out."
  3. D&D understands the excavation doesn't just get poured — it gets held for a footing inspection first, and D&D leaves it ready for that inspection rather than rushing toward a pour.
  4. If the crew hits rock or water under a foundation specifically, that's a real, explainable, higher-stakes cost driver D&D will talk through, not a schedule-blowing surprise.
  5. D&D understands this project sits inside someone else's (the builder's or GC's) schedule and permit, and will coordinate around it rather than treating it like a standalone homeowner job.

---

## 3. Voice & Angle

- **Writing voice:** Per `docs/design-system.md` v1.2 (Outfit for display/headings, Poppins for body) — the same voice as every prior brief in this series: a plain-spoken, no-fluff Lane County excavation contractor talking directly to a builder, GC, or homeowner who has a specific foundation dig ahead of them. Short, declarative sentences for the frost-depth citation and the inspection sequencing (these are the page's two most quotable, most citable passages); slightly longer only for the foundation-type comparison narrative and the schedule-coordination section.
- **Required Lane County / Oregon-specific detail (minimum 5, per `07-oregon-authority.md` for this page):**
  1. **ORSC R403.1.4 / R403.1.4.1 / Table R301.2 (footing minimum depth + frost protection by elevation) — VERIFIED, cite normally, with one confirmation caveat.** Footings must be placed not less than 12 inches below finished grade on undisturbed ground (R403.1.4). Frost protection (R403.1.4.1 + Table R301.2) ties to elevation: 12 inches below 2,500 ft, 18 inches from 2,500–4,000 ft, 24 inches at/above 4,000 ft. Eugene sits at roughly 430 ft, so Lane County's populated valley floor lands in the 12-inch band — meaning the general minimum-depth rule and the frost-protection rule land on the *same number* locally. **Confirmation caveat, must be stated in copy or at minimum flagged internally before publish:** the raw ICC-published Table R301.2 returned a 403 on direct fetch this session; the 12/18/24-inch figures rest on two independent secondary sources that agree with each other, not a direct read of the primary table. Present as the real, governing figure — this page should still state it plainly and with more confidence than any competing content found anywhere on this exact query — but note internally (and in the closing "confirm before publish" flag) that a purchased/library ORSC copy or a direct call to a Lane County/Eugene/Springfield building official should confirm it before it's treated as litigation-proof.
  2. **OSHA's 1995 interpretation letter on house-foundation/basement over-dig — VERIFIED, cite normally, no hedge needed.** For house foundation/basement excavations under 7.5 ft deep or properly benched (≥2 ft horizontal per 5 ft vertical), the minimum working width at the bottom (excavation face to formwork) must be as wide as practicable but not less than 2 feet. This is a **different, more specific citation** than the general Subpart P trench-depth figures already used on `/services/excavation/` (5 ft protective-system threshold, 4 ft/25 ft access threshold) — do not conflate the two or restate the excavation page's figures here.
  3. **ORSC R405 (foundation drain) and R408.1/R408.3 (crawlspace vapor retarder) — VERIFIED, cite normally.** A foundation drain is required around concrete/masonry foundations that retain earth and enclose habitable/usable space, unless the foundation sits on well-drained or sand-gravel soil. A Class I vapor retarder is required over exposed ground in both vented and unvented crawlspaces, with specific lap/seal requirements. **Explicitly distinguish this foundation drain from the septic drainfield (`/services/septic/`) and any yard-scale swale/French drain (`/services/grading-leveling/`, future `/services/drainage-excavation/`)** — all three share the word "drain" but are physically unrelated systems; state the distinction plainly if more than one is ever mentioned near the other.
  4. **Eugene's eBuild process and Lane County's Building Safety program (footing-inspection sequencing) — VERIFIED, cite normally.** The foundation/footing inspection happens after trenches/pad areas are excavated and cleared of loose material, forms are erected and secured, and rebar is placed and secured, but *before* concrete is poured. Eugene schedules through its online eBuild system or by phone at 541-682-5283 (7:30am–3:30pm weekdays, request before 7am for same-day). Lane County's Building Safety program runs the parallel process for unincorporated-county jobs.
  5. **OSHA 1926.652(b) (underpinning near an existing structure) — VERIFIED, cite normally.** Excavating below the level of an existing foundation or retaining wall's base is prohibited unless underpinning is installed or a registered professional engineer confirms the structure is unaffected — directly relevant to an ADU or addition dug close to an existing house.
- **Insider/practitioner detail that signals real local expertise (use at least 2):**
  - Naming that the general minimum-footing-depth rule and Lane County's frost-protection depth land on the exact same number (12 inches) — a small, quotable coincidence that reads as genuine code fluency, not a copy-pasted disclaimer.
  - Naming the excavate → inspect → pour order explicitly and stating that D&D leaves the open excavation ready and holds it for that inspection rather than rushing toward a pour — the single clearest, lowest-cost trust signal this page has (`08-gap-analysis.md` Gap #2, tied top score).
  - Distinguishing monolithic-slab (footing and floor poured together, favored for garages/shops/ADUs/flat sites) from stem-wall (footing, then wall, then floor — required for crawlspaces, basements, deeper frost protection, sloped sites) as two real, different pour methods, not synonyms — genuinely uncommon homeowner-facing detail, per `03-entity-map.md` §5 (single-source, from Cojo Asphalt — present as a general practitioner distinction, not an Oregon-code-mandated rule).

---

## 4. E-E-A-T Requirements

- **Experience (minimum 2 signals):** The existing live page's real process description (cutting to plan depth, checking elevations against survey, compacting subgrade, sloping for safe access/drainage, backfilling/compacting, coordinating with the GC's schedule), preserved and extended under the new H2 structure below; the existing "Get it wrong here and every trade after you inherits the problem" hook, kept verbatim as the page's opening framing.
- **Expertise (minimum 3 signals):** The verified 12-inch frost-depth figure with its exact ORSC code citation (a definitional specificity zero competitors, local or national, currently match); the slab/crawlspace/basement foundation-type comparison, explaining depth and cost differences in plain terms; the excavate→inspect→pour sequencing stated with Eugene's actual eBuild process and Lane County's Building Safety program named directly.
- **Authority (minimum 3 signals):** Oregon CCB #261742 in visible body copy (reused from the live page, keep it); a direct outbound link to the ORSC's foundations chapter (up.codes mirror) for the frost-depth section; a direct outbound link to the City of Eugene's Inspections page for the footing-inspection section.
- **Trust (minimum 4 signals):** An explicit scope-boundary statement naming `/services/excavation/` and stating plainly what stays there vs. what's new here (per §6's Boundary Note); honest hedging language on the frost-depth figure's secondary-source status (see §3.1 and §14) rather than overclaiming it as litigation-proof; an honest, non-deflecting statement that whether D&D installs the foundation drain/vapor retarder itself is confirmed with the customer per job, not asserted as a blanket policy (pending confirmation with David, see Open Items); no fabricated pricing, review counts, or years-in-business.

---

## 5. AI Citation Target

Copied verbatim from `00-research-pack.md` §12 / `06-ai-citation-audit.md` §4 (drafted to be citable by an AI system answering "how deep does a foundation footing need to be in Oregon" or "does foundation type change excavation cost" once the site is live and indexed):

> Foundation excavation is the precise digging that creates space for a footing and foundation wall or slab — a narrower, higher-stakes step within general excavation, since every trade that follows (forming, pouring, framing) depends on getting it right. In Lane County, Oregon, footings must be placed at least 12 inches below finished grade on undisturbed soil, per the Oregon Residential Specialty Code, which also satisfies the state's frost-protection depth for Lane County's elevation. Excavation scope differs by foundation type: a slab needs only a shallow topsoil strip, a crawlspace needs a perimeter trench to footing depth, and a full basement requires an 8-10 foot excavation with sloped or shored walls. D&D Land Works provides foundation excavation for residential and commercial projects throughout Eugene, Springfield, and Lane County, Oregon, coordinating the open excavation to be ready for the building department's footing inspection, which happens before concrete is poured, not after, under Oregon CCB license #261742. Free estimates are available.

**Placement:** first 30% of the page's body content, immediately after the opening paragraph — same placement rule as every prior brief.

**Note on the frost-depth figure inside this block:** the block states the 12-inch figure without hedging language, per the research pack's own drafting. Per §3.1 and §14, this figure rests on two agreeing secondary sources (the primary ICC table 403'd on direct fetch) — the AI citation block itself should stay as drafted (a hedge inside a citation-target passage would undercut its citability), but the body section that expands on frost depth (H2 #3, §6) must carry the confirmation caveat explicitly, and the flag to confirm against a purchased ORSC copy or local building official before this figure ships must be resolved with David (see Open Items) before this page goes live with the number stated this plainly.

---

## 6. Content Structure

**Word count target: 2,000–2,500 words.** Justification: `04-competitor-matrix.md` Matrix A found an even more absolute gap than any of the six prior packs — 6 of 10 Lane County competitors name "foundation excavation" as a project type or heading, but **0 of 10 do anything beyond a one-line mention** on foundation type, frost depth, over-dig, inspection sequencing, or foundation drainage. Even the single best on-topic content found anywhere in this research (Cojo Asphalt's dedicated Oregon frost-depth article) explicitly declines to state the one number that matters most, deferring to "your local building department." Matching or exceeding that bar doesn't require matching the excavation page's 2,000–2,600-word target section-for-section — this page's win is precision and specificity in tight, answer-first passages, not breadth. Summing the research pack's own per-H2 format plan (`00-research-pack.md` §8): a 100-150 word opening + the 130-160 word AI citation block + ten answer-first/table/list H2 sections averaging 60-150 words each depending on format (frost depth, over-dig, ADU, and scheduling are short 50-90 word Speakable answers; the foundation-type comparison table and its framing run 150-200 words; the inspection-sequencing numbered list and the foundation-drainage bulleted list run 100-160 words each) + a 9-question FAQ block (450-650 words, using the same per-question length as every prior pack) + a Related Services intro restating the scope boundary (50-80 words) + a closing CTA (50-80 words). That arithmetic lands at roughly 1,900–2,400 words; rounded to a clean target range of 2,000–2,500, this is narrower than the excavation page's target (appropriate, since general mechanics live there, not here) but meaningfully deeper than the field's near-universal one-sentence ceiling.

**H1:** Foundation Excavation in Eugene, Springfield & Lane County, Oregon
*(source: `00-research-pack.md` §7, matching the H1 pattern already shipped on `excavation-content.md` — "[Service] in Eugene, Springfield & Lane County, Oregon" — for cross-page consistency. **Flag for David/dev before build:** this changes the current live page's H1 from the shorter "Foundation Excavation" to add the "in Eugene, Springfield & Lane County, Oregon" suffix, matching every sibling page's pattern; the URL/slug does not change, only the on-page headline and `<title>` framing, the same kind of flag `excavation-brief.md` raised for its own H1 change.)*

**Opening paragraph guidance (first 100-150 words):** Open by naming what foundation excavation actually is — the precise, higher-stakes digging that creates space for a footing and foundation wall or slab, a narrower subset of general excavation — in a way that acknowledges and extends, rather than repeats, the shipped excavation page's own foundation-dig sentence ("Digging and prepping the excavation for a home, shop, barn, or ADU foundation, following site preparation on the same lot. See foundation excavation for more depth on this project type."). This page is the "more depth" that sentence promises — the opening paragraph should read as delivering on that promise directly, not as a generic re-introduction to excavation. Follow immediately with the 130-160 word AI citation block from §5 above.

**H2 sections, in order** (every H2 traces to a competitor-matrix finding or a top gap — cited inline; heading text and order per `00-research-pack.md` §7):

| # | H2 (exact text) | Traces to | Format |
|---|---|---|---|
| 1 | What Does Foundation Excavation Cover? | Baseline scope section, preserving the live page's existing accurate process list (`08-gap-analysis.md` "already gets right") | Answer-first, 50-70 words, cross-linking up to `/services/excavation/` for general cut/fill mechanics |
| 2 | How Is Foundation Excavation Different From General Excavation? | Gap #10, scope-boundary statement (score 30.0) — no competitor draws this line at all, and the shipped D&D excavation page only gestures at it with one sentence | Answer-first, 60-80 words, explicit boundary statement naming `/services/excavation/` directly (see Boundary Note below); `Speakable` |
| 3 | How Deep Does a Foundation Footing Need to Be in Oregon? | Gap #1, frost-line depth (score 50.0, tied top) — 0/10 local competitors state a number; even the best national content (Cojo Asphalt) declines to | Answer-first, 50-70 words + ORSC code citation + confirmation caveat (see §3.1/§14); `Speakable` |
| 4 | Does Foundation Type Change the Excavation Scope or Cost? | Gap #3, foundation-type distinction (score 25.0) — the task's central mandate; 1/10 sources (Cojo Asphalt) partially addresses this, 0/10 Lane County competitors | Comparison table — columns: Foundation Type / Typical Excavation Depth / What Drives Cost (rows: slab-on-grade, crawlspace, full basement) |
| 5 | What Is "Over-Dig," and How Much Working Space Does a Crew Need? | Gap #4, over-dig/working-space figure (score 40.0) — 0/10 competitors give a specific figure | Answer-first, 50-70 words + OSHA citation; `Speakable` |
| 6 | Does the Building Department Inspect a Foundation Before It's Poured? | Gap #2, footing-inspection sequencing (score 50.0, tied top) — 0/10 competitors explain this sequencing anywhere | Numbered list (excavate → clear loose material → forms/rebar placed → inspection → pour), naming Eugene's eBuild and Lane County's Building Safety program; `HowTo` |
| 7 | What Does Oregon Require for Foundation Drainage? | New content, zero competitor coverage — ORSC R405/R408 | Bulleted list (foundation drain, waterproofing note, crawlspace vapor retarder — 3 parallel code requirements), explicitly distinguished from the septic drainfield and yard-drain entities; `ItemList` |
| 8 | What About an ADU or a Foundation Near an Existing House? | Gap #6, ADU-specific content (score 20.0) — 0/10 competitors address this | Answer-first + brief safety note (OSHA underpinning rule), 70-90 words; `Speakable` |
| 9 | What Happens If the Crew Hits Rock or Water Under a Foundation? | Gap #7, higher-stakes rock/water framing (score 40.0, tied) — foundation-specific stakes, cross-linking rather than re-deriving the excavation page's cost mechanics | Answer-first, 60-80 words, explicit cross-link to `/services/excavation/`'s cost-structure section; `Speakable` |
| 10 | Should Foundation Excavation Happen Before or After I Hire a Builder? | Gap #8, schedule-coordination content (score 20.0) — directly named in the task, addresses the builder/GC-coordination angle from §2 | Answer-first, 60-80 words; `Speakable` |
| 11 | Frequently Asked Questions | Gap #12, FAQ content gap (score 13.5) — effectively 0/10 competitors run a real FAQ on this topic | `FAQPage`-formatted Q&A, 9 questions (see §8 below) |
| 12 | Related Services *(non-H2 UI component — the existing `ServiceCard` grid)* | Structural continuity — preserve the existing grid, but **add `/services/excavation/` as a card, currently missing** (see §1's baseline note); restate the scope boundary plainly in the intro copy | Card grid, existing `ServiceCard` component — Site Preparation, Excavation & Grading, Trenching & Backfill, Drainage Excavation |
| 13 | Get Your Foundation Excavation Scoped | Matches the current live page's existing CTA block closely ("Get Your Foundation Cut Right" / "Free estimate for foundation excavation anywhere in Lane County.") — keep this copy, it already fits | Short answer-first + CTA block |

Format minimums are satisfied: 1 comparison table (H2 #4), 1 numbered list (H2 #6, `HowTo`-eligible), 1 bulleted list (H2 #7) — per the parent methodology's format-diversity rule and `00-research-pack.md` §8's own Content Format Plan.

### Boundary Note — What This Page Owns vs. What Stays on `/services/excavation/`

This is the single most important structural instruction in this brief, per the task's explicit requirement and `00-research-pack.md` §4 / `08-gap-analysis.md`'s dedicated scope-boundary section:

- **`/services/excavation/` owns (do NOT re-derive here):** general cut-and-fill and backfill/compaction mechanics as concepts; the excavator/dozer/compaction equipment-category explanation (this page only adds the foundation-specific laser-level/GPS-grade-control note already on the current live page); the general rock-removal cost jump ($2.50-$15/cu yd standard soil vs. $50-$200/cu yd rock — this page references it but reframes around foundation-specific stakes, see H2 #9); the excavation-vs-grading disambiguation, fully owned by that page's own dedicated H2; the general residential-vs-commercial excavation comparison table (this page adds only a brief foundation-specific note if needed, not a full rebuild); Oregon811/call-before-you-dig and the general OSHA Subpart P trench-depth figures (5 ft protective-system threshold, 4 ft/25 ft access threshold); and the general "can I rent an excavator and do this myself" DIY-vs-hire content.
- **This page owns (genuinely new):** the verified Oregon/Lane County frost-line depth figure and its code citation (H2 #3); the slab vs. crawlspace vs. basement foundation-type excavation-scope and cost distinction (H2 #4); the specific OSHA house-foundation/basement over-dig/working-space figure, a different and more specific citation than the general Subpart P figures (H2 #5); the excavate → inspect → pour sequencing with Eugene/Lane County's actual building-department process (H2 #6); the ORSC foundation-drain and crawlspace-vapor-retarder code requirements (H2 #7); ADU-specific foundation excavation content including the OSHA underpinning rule (H2 #8); the higher-stakes framing of rock/water discovery specific to a structural, critical-path dig (H2 #9); and builder-GC schedule-coordination content (H2 #10).
- **Instruction to the content writer:** H2 #2 must state this boundary explicitly and by name — link directly to `/services/excavation/` with language equivalent to "for general excavation mechanics — cut-and-fill, backfill and compaction, rock-removal cost basics, and the excavation-vs-grading distinction — see [Excavation & Grading](/services/excavation/)." Do not restate any of that page's content here even briefly beyond a one-clause acknowledgment. This is the reader-facing version of the internal scope fence, and it's what makes the shipped excavation page's "see foundation excavation for more depth" sentence actually true rather than a dead-end promise.

---

## 7. Unique Angle

Pulled directly from the top gaps in `08-gap-analysis.md` — every entry is a specific, evidence-based differentiator, not a slogan:

1. **States the real, cited Oregon frost-depth figure (12 inches below finished grade, per ORSC R403.1.4/R403.1.4.1/Table R301.2) where even the single best Oregon-specific content found anywhere in this research explicitly declines to** — Cojo Asphalt's own dedicated article titled "Frost Depth for Footings: How Deep to Dig in Oregon" defers entirely to "your local building department" (`08-gap-analysis.md` Gap #1, tied top score 50.0). This is the single most novel, most citable claim on this page.
2. **States the excavate → inspect → pour sequence explicitly, naming Eugene's eBuild process and Lane County's Building Safety program by name**, where zero of the ten Lane County competitors explain this sequencing anywhere (`08-gap-analysis.md` Gap #2, tied top score 50.0) — a genuine, zero-cost competence signal directly parallel to the Oregon811 finding already used on `/services/excavation/`.
3. **Names the real OSHA-derived over-dig/working-space figure (2 feet minimum)** rather than a vague "we'll leave enough room to work," and the real 7.5 ft / 2 ft benching figures the general rule doesn't specify (`08-gap-analysis.md` Gap #4, score 40.0 — zero competitor coverage of a specific number).
4. **Explains that foundation type — slab, crawlspace, or basement — genuinely changes excavation depth and cost**, with real national ranges by type, where only one non-local source distinguishes this at all and no Lane County competitor does (`08-gap-analysis.md` Gap #3, score 25.0 — the task's named central mandate).
5. **Draws an explicit, defensible line against the shipped Excavation & Grading page**, making good on that page's own "see foundation excavation for more depth" sentence with real content instead of a one-line promise (`08-gap-analysis.md` Gap #10, score 30.0 — no competitor, including D&D's own current live page, draws this line explicitly).

These five must surface in the opening paragraph or immediately after (at minimum the frost-depth claim and the scope-boundary statement, introduced early), in their dedicated H2 sections (#3, #6, #5, #4, #2 respectively), and echoed briefly in the closing CTA copy.

---

## 8. FAQ Section

9 questions, sourced verbatim from `02-question-mine.md`'s "FAQ Shortlist for This Page," cross-checked against `04-competitor-matrix.md` Matrix C: **no FAQ content specific to foundation excavation was found on any of the ten Lane County competitor sites**, so every question below is uncontested ground.

| # | Question | Source in question-mine | Answer guidance (40-90 words, direct answer first) |
|---|---|---|---|
| 1 | How deep does a foundation footing need to be in Oregon? | Q6/Q7 (frost_depth, oregon_specific, task-brief seed question) | Lead with the number: not less than 12 inches below finished grade on undisturbed ground, per ORSC R403.1.4, which also satisfies Lane County's frost-protection depth per Table R301.2. Note this figure rests on two agreeing secondary sources and is worth confirming with your local building department for your specific project, per §3.1/§14's hedging instruction. |
| 2 | Does foundation type (slab, crawlspace, or basement) change the excavation cost? | Q12/Q13/Q14 (foundation_type_cost, task-brief seed cluster) | Lead with "yes, significantly": a slab needs only a shallow topsoil strip, a crawlspace needs a perimeter trench to footing depth, and a full basement requires an 8-10 foot excavation with far more material hauled off — national data puts a full basement dig 40-60% more expensive than a slab. |
| 3 | What is "over-dig," and how much extra space does a crew need around a foundation? | Q20/Q21 (over_dig_working_space, task-brief seed cluster) | Lead with the definition and the real figure: over-dig is the extra excavation beyond the footing/wall lines a crew needs to physically work — form, waterproof, backfill — and OSHA's house-foundation/basement rule sets a minimum working width of 2 feet at the bottom of the excavation. |
| 4 | Does the building department inspect a foundation before the concrete gets poured? | Q23/Q25 (inspection_sequencing, task-brief seed cluster) | Lead with "yes" — in both Eugene and unincorporated Lane County, the foundation/footing inspection happens after the trench or pad is excavated, forms are erected, and rebar is placed, but before any concrete is poured. Skipping that step isn't legal, and it's a red flag if a contractor implies otherwise. |
| 5 | What happens if the excavator hits rock or water while digging a foundation? | Q33/Q34 (water_and_soil, task-brief seed cluster, objection-tagged) | Lead with honesty: it's a real, explainable cost and schedule driver, not a bait-and-switch — the same rock-cost mechanics already explained on D&D's excavation page apply, but the stakes are higher on a foundation dig's tighter construction timeline; deeper digs in the Willamette Valley's high winter water table sometimes require dewatering. |
| 6 | Do I need a soils report or an engineer before excavating for a foundation? | Q35/Q36 (water_and_soil, task-brief seed question) | Lead with "not always required by code for a typical single-family foundation, but recommended": a $2,000-$5,000 geotechnical/soils study is credited with preventing 20-50% of cost overruns from unexpected rock or bad soil, and ORSC R403.1 requires footings to bear on undisturbed natural soil or engineered fill. |
| 7 | Does an ADU need its own foundation excavation? | Q17/Q18 (adu, task-brief seed cluster) | Lead with "yes" — an ADU built as a standalone structure needs its own footing/foundation dig, commonly a simpler slab-on-grade or monolithic-slab type; excavating close to an existing house's foundation triggers OSHA's underpinning rule (1926.652(b)). |
| 8 | Does Oregon require a drain around a foundation? | Q29/Q31 (foundation_drain_moisture, oregon_specific) | Lead with "yes, for most" — per ORSC R405, a foundation drain is required around concrete/masonry foundations retaining earth and enclosing habitable space, unless the foundation sits on well-drained soil; note plainly this is a different system from a septic drainfield or a yard drainage swale, which happen to share the word "drain." |
| 9 | Should foundation excavation happen before or after I hire a builder? | Q38/Q40 (schedule_coordination, task-brief seed cluster) | Lead with the honest answer: foundation excavation is almost always tied to an active building permit and a builder's or GC's schedule, not a standalone decision made in isolation — D&D coordinates around that schedule and the inspection process rather than treating the job as self-contained. |

No FAQ answer should fabricate a statistic not already present in the research pack, and no answer should state the ORSC Table R301.2 elevation-band figures, the Lane County/Eugene footing-inspection fee, or any D&D-specific foundation-type dollar figure as an exact, confirmed number without the hedging language specified in §3 and §14.

---

## 9. Internal Links

**IN (what will link to this page)** — per the topical map's hub-and-spoke rule:

| From | Anchor text example | Placement |
|---|---|---|
| `/services/excavation/` | "foundation excavation" (down-link, since the shipped excavation page already names this exact sentence) | "What Kind of Project Is This For?" section — already present in `excavation-content.md` as "See foundation excavation for more depth on this project type" |
| Homepage (`/`) | "foundation excavation" | Services list section |
| `/services/site-preparation/` | "foundation excavation" (down-link, since site prep precedes a foundation dig on the same lot) | Sequencing section, if not already present |
| `/locations/eugene/`, `/locations/springfield/` | "foundation excavation in Eugene" / "foundation excavation in Springfield" | Body, services-offered section of each city page |
| `/about/` | Breadcrumb | Breadcrumb |
| Global header/footer | "Services" nav item | Every page |

**OUT (this page → other pages)**, matching the entity map's down-link targets (`03-entity-map.md` §2, §9) and the Boundary Note in §6:

| To | Anchor text | Placement |
|---|---|---|
| `/` (homepage) | "D&D Land Works" or "our full range of excavation services" | Breadcrumb + body-late (up-link to hub) |
| `/services/excavation/` | "Excavation & Grading" (explicit "for general excavation mechanics, see" framing per §6's Boundary Note) | H2 #1 (scope intro), H2 #2 (scope-boundary statement, primary placement), H2 #9 (rock/water cost-mechanics cross-link) — **add this card to the Related Services grid, currently missing** |
| `/services/site-preparation/` | "site preparation" | Opening paragraph (brief sequencing cross-reference) + H2 #10 (schedule-coordination section) |
| `/services/drainage-excavation/` | "drainage excavation" | H2 #7 (explicit distinction from the foundation drain) |
| `/services/septic/` | "septic drainfield" | H2 #7 (explicit distinction, one clause, per the entity map's "note the distinction explicitly" instruction) |
| `/services/trenching-backfill/` | "trenching and backfill" | Related Services card (existing, preserve) |
| `/locations/eugene/`, `/locations/springfield/` | "Eugene" / "Springfield" | H1/opening paragraph area, and H2 #6 (inspection sequencing, naming Eugene's eBuild process directly) |
| `/about/` | "David Deggelman" | Trust/CCB mention |
| `/contact/` | "get a free estimate" / "call 541-401-8726" | H2 #13 CTA + hero |

No "click here" / "learn more" anchors — every anchor is descriptive, per the parent methodology's rule (already followed on the current live page).

---

## 10. Schema Requirements

This page follows the exact pattern `excavation-content.md` shipped with:

- **Primary `@type`: `Service`** — CONFIRMED REAL schema.org type, reused from the homepage/excavation packs' confirmed schema.org research (`GeneralContractor` is real and correct; `ExcavationContractor` does not exist) rather than re-checking from scratch (`00-research-pack.md` §10).
- **`provider`**: `{"@id": "https://www.ddlandworks.com/#business"}` — the exact `@id` already shipped in `excavation-content.md`'s JSON-LD. Do not redefine the organization inline and do not use a different placeholder.
- **`Service` required fields:** `name` ("Foundation Excavation"), `provider` (the `@id` reference above), `areaServed` (Lane County + Eugene/Springfield at minimum, matching the full city list already used in `excavation-content.md`'s schema), `serviceType` ("Foundation Excavation"), `description` (can reuse a trimmed version of the AI citation block from §5).
- **`FAQPage`** — for the 9-question set in §8; FAQ schema answers must match the visible FAQ text exactly.
- **`BreadcrumbList`** — Home → Services → Foundation Excavation, matching the current live page's already-implemented `Breadcrumbs` component.
- **`Speakable`** — flag the answer-first passages in H2s #2 (scope boundary), #3 (frost depth), #5 (over-dig), #8 (ADU), #9 (rock/water), and #10 (schedule coordination) as speakable-eligible, per `00-research-pack.md` §10's explicit list.
- **`HowTo`** — optional, for the excavate → inspect → pour numbered-list sequence in H2 #6, if the content-create step wants that sequence independently citable (`00-research-pack.md` §10 flags this as the brief author's call).
- **`ItemList`** — for the foundation-drainage bulleted list in H2 #7.
- **Do NOT implement `AggregateRating`/`Review` schema** — same rule as every prior brief; D&D has zero reviews at launch.

---

## 11. Entity Profile

Pulled from this folder's `entity-inventory.csv`, cross-checked against `home/entity-inventory.csv` and `excavation/entity-inventory.csv` for reused canonical forms. Business/location/certification entities are **not re-derived** — see `home-brief.md` §11 and `excavation-brief.md` §11 for their original validation notes.

**Primary entity (salience 10, reused unchanged):**
- **D&D Land Works** (Organization → schema `GeneralContractor`) — `NOT_FOUND` externally. Must appear in the first sentence of body copy and in the `Service.provider` reference.

**Page-defining entity (salience 10, new canonical home for this page):**
- **Foundation Excavation** (Service) — `VALIDATED_LOCAL`, 6/10 competitors name it generically, 0/10 go deeper. This page is now its canonical home; sibling pages (including `/services/excavation/`) down-link here rather than duplicating depth.

**Footing & frost-depth code entities (salience 10, all new, this page's single most load-bearing set):**
- Footing (10, `VALIDATED`), Frost Line / Frost Depth (10, `VALIDATED`), ORSC R403.1.4 (10, `VALIDATED`), ORSC R403.1.4.1 (10, `VALIDATED`), ORSC Table R301.2 (10, `VALIDATED` via two-source corroboration, **confirmation caveat applies — see §3.1/§14**).

**Foundation-drain and moisture-management entities (salience 6-8, all new):**
- ORSC R405 (8, `VALIDATED`), ORSC R406 (6, `VALIDATED_LOCAL`), ORSC R408.1/R408.3 (6, `VALIDATED`), Dewatering (6, `VALIDATED_LOCAL`, single-source per Cojo Asphalt, corroborated in direction by the existing wet-season entity).

**Foundation-type entities (salience 9, the core of the "goes deeper" mandate, all new):**
- Slab-on-Grade Foundation (9, `VALIDATED`), Crawlspace Foundation (9, `VALIDATED`), Full Basement Foundation (9, `VALIDATED`), Monolithic Slab pour method (5, `VALIDATED_LOCAL`, single-source), Stem Wall pour method (5, `VALIDATED_LOCAL`, single-source).

**Over-dig / adjacent-structure safety entities (salience 6-9, new):**
- Over-Dig / Working Space (9, `VALIDATED` via OSHA's 1995 interpretation letter), Excavation Below an Existing Footing / Underpinning (6, `VALIDATED` via OSHA 1926.652(b)), OSHA 1926.652 (7, `VALIDATED`, reused).

**Footing-inspection sequencing entities (salience 5-10, new — the trust/competence signal):**
- Foundation / Footing Inspection (10, `VALIDATED` directly against Eugene's Inspections page), Eugene eBuild Permitting Portal (5, `VALIDATED`), Lane County Building Safety Program (7, `VALIDATED`).

**Project-type entity (salience 7, reused/extended):**
- Accessory Dwelling Unit (ADU) Foundation (7, `VALIDATED_LOCAL`, extended from the site-preparation pack's ADU entity).

**Reused geo/business entities (unchanged from home/excavation packs):** David Deggelman, Oregon CCB #261742, Willamette Valley, Eugene, Springfield, Geotechnical/Soils Report ($2,000-$5,000, extended from site-prep pack), OSHA 1926 Subpart P — same validation status and do-not-fabricate rules as `home-brief.md` §11 and `excavation-brief.md` §11.

**Sibling/parent entities (explicitly NOT this page's scope — see §6 Boundary Note):**
- Excavation & Grading (Service, salience 6) — upstream sibling; general mechanics stay there.
- Site Preparation (Service, salience 4) — upstream parent; sequencing precedes this page.
- Drainage Excavation (Service, salience 4) — downstream/adjacent sibling; the foundation drain is a distinct system from a yard drainage trench.
- Septic Install & Repair (Service, salience 3) — unrelated except for the shared word "drain," cross-reference only.

**Equipment entities:** generic categories only, extending (not replacing) the excavation page's equipment entities — Excavator (mini/standard, 6, `VALIDATED`), Laser Level/GPS Grade Control (5, `VALIDATED_LOCAL`, already on the live page — preserve), Plate Compactor/Vibratory Roller (5, `VALIDATED`, already on the live page — preserve). Do not name brands.

**Co-occurrence requirements specific to this page** (per `03-entity-map.md` §9):
- "Foundation excavation" named as a project type/heading — 6/10 — **mandatory, table stakes**
- Foundation TYPE distinguished (slab/crawlspace/basement) with a scope or cost difference — 0/10 — **the core gap this page fills, mandatory**
- Frost line/frost depth number stated — 0/10 local, and the single best national source declines to — **mandatory, this page's defining differentiator**
- Over-dig/working-space figure given — 0/10 — **mandatory**
- Footing-inspection sequencing (excavate → inspect → pour) explained — 0/10 — **mandatory, the task's named trust signal**
- Dewatering/high water table mentioned for a foundation dig — 0/10 local — include, hedged as single-source
- ADU-specific foundation excavation content — 0/10 — **mandatory to include**
- Explicit scope-boundary statement vs. `/services/excavation/` — 0/10, including D&D's own current live page — **mandatory, structural requirement**

---

## 12. CTA Requirements

| Placement | Copy | Type/link |
|---|---|---|
| Above the fold (hero, already live) | "Call 541-401-8726" / "Free Estimate" | `tel:5414018726` and `/contact/` — **keep the existing Hero component copy and subheadline unchanged** ("Footings, slabs, and basements all start with a hole cut to the right depth and grade. Get it wrong here and every trade after you inherits the problem.") |
| Mid-page (after H2 #4, foundation-type comparison) | "Not sure which foundation type your project needs? Get a free estimate and we'll walk the site with your builder." | `/contact/` |
| After H2 #6 (inspection sequencing) | "Coordinating with a builder or GC? Get a free estimate scoped to your schedule." | `/contact/` |
| H2 #13 (closing CTA, adapted from the existing live page) | "Get Your Foundation Excavation Scoped" + "Free estimate for foundation excavation anywhere in Lane County." | `tel:5414018726`, `/contact/` — adapt the existing `CTABlock` copy ("Get Your Foundation Cut Right") slightly to match the new H1's explicit "foundation excavation" phrasing, or keep as-is if David prefers the punchier original — flag as a minor call, not a required change |

No fabricated urgency/scarcity language, consistent with every prior brief — nothing in the research pack supports it.

---

## 13. Images Required

**Current state: the live page has zero real project photos**, same gap as every prior page in this series — the `Hero` component is text-only, and no `<img>` beyond shared components appears in `foundation-excavation.astro`. This is a genuine, unaddressed gap, not something to paper over with unbranded stock presented as D&D's own work (same rule as every prior brief's §13).

| # | Description | Alt text guidance | Type | Status |
|---|---|---|---|---|
| 1 | Hero image — an open foundation excavation (footing trench or basement cut) on a Lane County site, ideally showing forms or rebar in place | "Foundation excavation for a footing on a job site in Lane County, Oregon" | Hero | **Gap — no real photo yet** |
| 2 | A foundation-type comparison visual — even a simple side-by-side diagram of slab/crawlspace/basement excavation depth | "Slab, crawlspace, and basement foundation excavation depth comparison" | Supporting graphic, near H2 #4 | **Gap — genuinely valuable given this is the page's clearest unclaimed differentiator; can launch as a simple illustrated diagram if real photography isn't available yet** |
| 3 | An open, inspection-ready excavation (cleared trench, forms erected, rebar placed, before the pour) | "Foundation excavation ready for footing inspection, Lane County, Oregon" | Evidence, near H2 #6 | **Gap — needs a real jobsite photo; directly ties to the inspection-sequencing trust signal** |
| 4 | Equipment close-up — laser level/GPS grade control or plate compactor actively working a foundation cut, not staged | "Foundation excavation equipment on a Lane County jobsite" | Evidence, near H2 #1 | **Gap — genuinely absent** |
| 5 | Simple illustrated diagram for the excavate → inspect → pour sequence | "Foundation excavation inspection sequence: excavate, inspect, pour" | Supporting graphic, near H2 #6 | Can launch as a simple illustrated 3-4 step graphic — lower priority to fix than the photo gaps above |

Flag to David: same as every prior brief — launching with limited or no photography is an acceptable temporary measure, but should be tracked as a launch gap to close with real jobsite photography (an inspection-ready open excavation would be especially valuable given how unclaimed that trust signal is in this market) within the first few months.

---

## 14. Authority Signals to Cite

Pulled from `07-oregon-authority.md`, with the verification/hedging status made explicit per this project's central sourcing rule:

1. **ORSC R403.1.4 / R403.1.4.1 / Table R301.2 (footing minimum depth + frost protection) — VERIFIED, cite with one confirmation caveat.** "Exterior footings must be placed not less than 12 inches below finished grade on undisturbed ground, per Oregon Residential Specialty Code Section R403.1.4 — which, for Lane County's elevation, also satisfies the state's frost-protection depth under Table R301.2." *(Source: up.codes' mirror of the 2023 ORSC; corroborated by footingdepth.com; verified 2026-09-09. **Confirmation caveat:** the raw ICC-published Table R301.2 could not be directly fetched this session (codes.iccsafe.org returned a 403); the 12/18/24-inch figures rest on two independent secondary sources that agree with each other, not a direct read of the primary table. State the 12-inch figure plainly and with confidence — it is still more specific and more citable than any competing content found on this exact query — but flag internally, and confirm with David before publish, that this should be checked against a purchased/library ORSC copy or a direct call to a Lane County/Eugene/Springfield building official before being treated as a litigation-proof number.)*
2. **OSHA's 1995 interpretation letter on house-foundation/basement over-dig — CONFIRMED, cite normally, no hedge needed.** "For house foundation and basement excavations under 7.5 feet deep, or properly benched, OSHA's minimum working width at the bottom of the excavation — from the excavation face to the formwork — is as wide as practicable but not less than 2 feet." *(Source: OSHA — 1995-06-30 interpretation letter suspending 29 CFR 1926.652 for house foundation/basement excavations, osha.gov/laws-regs/standardinterpretations/1995-06-30; verified 2026-09-09. Distinct from, do not conflate with, the general Subpart P trench-depth figures already used on `/services/excavation/`.)*
3. **ORSC R405 (foundation drain) and R408.1/R408.3 (crawlspace vapor retarder) — CONFIRMED, cite normally.** "Oregon code requires a foundation drain around most concrete or masonry foundations that retain earth and enclose habitable space, and a Class I vapor retarder over exposed ground in a crawlspace, whether vented or unvented." *(Source: ORSC Chapter 4, Sections R405-R406, R408.1/R408.3, per up.codes' mirror and codes.iccsafe.org's search-result text; verified 2026-09-09. Explicitly distinguish from the septic drainfield and yard-drainage entities in both body copy and FAQ answer #8.)*
4. **Eugene's eBuild process and Lane County's Building Safety program (footing-inspection sequencing) — CONFIRMED, cite normally.** "The foundation/footing inspection happens after the trench or pad is excavated and cleared of loose material, forms are erected and secured, and reinforcing steel is placed and secured — and before any concrete is poured. Eugene schedules this through its online eBuild system or by phone at 541-682-5283." *(Source: City of Eugene — Inspections, eugene-or.gov/384/Inspections; Lane County — Building Safety, lanecounty.org; corroborated by a third-party inspection-sequence source; verified 2026-09-09.)*
5. **OSHA 1926.652(b) (underpinning near an existing structure) — CONFIRMED, cite normally.** "Excavating below the level of an existing foundation or retaining wall's base is prohibited unless underpinning is installed, or a registered professional engineer confirms the structure won't be affected — a real consideration for an ADU or addition dug close to an existing house." *(Source: OSHA — 29 CFR 1926.652(b), osha.gov/laws-regs/regulations/standardnumber/1926/1926.652; verified 2026-09-09.)*
6. **Foundation-type excavation depth and national cost ranges — present as general/national context, not Lane-County-specific pricing.** "National data puts slab excavation at roughly $6-$16 per square foot, crawlspace excavation somewhat higher, and a full basement dig at $75-$150 per cubic yard removed — no Lane-County-specific per-foundation-type dollar figure exists, so these should be presented as general ranges, not a quote." *(Source: HomeGuide, Estimators.us, This Old House — foundation/basement excavation cost guides; verified 2026-09-09. Do not present these as D&D's own pricing.)*
7. **Geotechnical/soils report cost data — reused verbatim from the site-preparation pack, applied here to bearing-soil verification.** "$2,000-$5,000 typical cost, credited with preventing 20-50% of cost overruns from unexpected rock or bad soil" — applied here because ORSC R403.1 requires footings to bear on undisturbed natural soil or engineered fill. *(Source: reused from `../site-preparation/07-oregon-authority.md` §5; verified in that pack's original pass.)*

**Explicit hedging instruction for the content writer:** signal #1 must use the confirmation-caveat language above wherever the frost-depth figure is stated in body copy or FAQ answer #1 — state the number plainly and with confidence, but do not describe it as a certainty beyond dispute; a one-clause "worth confirming with your local building department" is sufficient and matches the hedging register already used across every prior pack for its own third-party-sourced figures. Signal #6 should be labeled as general national context, not a Lane County or D&D-specific number. Signals #2-#5 and #7 were verified against primary sources directly and may be stated as fact without hedging. Do not state a specific footing-inspection fee, a Lane-County-specific frost-depth exception, or D&D-specific foundation-type pricing anywhere on the page — none was found in this research pass.

Density target: same as every prior brief, roughly 1 statistic per 300-500 words of body copy, at least one external authority link per major H2 section (especially H2 #3 frost depth, H2 #5 over-dig, and H2 #6 inspection sequencing).

---

## Open Items Requiring David's Input Before Content-Create

Carried forward from `00-research-pack.md`'s "Honest Limitations" section and `08-gap-analysis.md`'s "Gaps that require David's input" — do not invent values for these:

1. **Whether the ORSC Table R301.2 frost-depth figures (12/18/24 inches by elevation) should be confirmed against a purchased/library ORSC copy or a direct call to a Lane County/Eugene/Springfield building official before this page states the 12-inch figure as plainly as this brief recommends.** This is the single most load-bearing new fact on the page (§3.1, §5, §14 #1) — the two-secondary-source corroboration is solid enough to proceed with drafting, but the hedge language in §14 should stay in place through content-create, and ideally get resolved to a fully confirmed status before this page goes live.
2. **Whether D&D's own excavation/backfill work includes installing the ORSC R405 foundation drain, R406 waterproofing, or R408 crawlspace vapor retarder**, or whether those are a separate foundation/waterproofing contractor's scope — the default framing (homeowner-education content, not a D&D install claim) should hold in H2 #7 until confirmed.
3. **Whether D&D typically coordinates directly with a GC to schedule the footing inspection**, or expects the permit-holder to manage that independently — affects how confidently H2 #10's schedule-coordination claim can be framed.
4. **Whether D&D has excavated for a full basement foundation before**, or would scope it as a new-but-capable service offering — affects how confidently H2 #4's basement-foundation content can be framed (established experience vs. capable-but-new).
5. **Real D&D-specific pricing for any foundation-type category**, if David is willing to share even rough figures — would strengthen H2 #4 beyond the generic national ranges currently available.
6. **The H1 change** flagged in §6 (adding "in Eugene, Springfield & Lane County, Oregon" to match the sibling pattern) — recommended for consistency but changes text on an already-live page and should be confirmed before build.

**The single most important item before this brief moves to `content-create`:** confirming item #1 above (the frost-depth figure's sourcing status) — it is this page's single most novel and most load-bearing claim, the entire reason this page can out-cite the best existing content found anywhere on this topic, and publishing an unconfirmed exact code figure without the hedge in place would be the highest-risk error this brief could otherwise introduce, consistent with this project's no-fabrication rule.
