# Entity Map — D&D Land Works Grading & Leveling (`/grading-leveling/`)

Adapted from the Koray 14-source entity method, same adaptation as the three prior packs (home, site-preparation, excavation). Every entity carries a validation status: `VALIDATED` (confirmed via Wikipedia/Wikidata/official source), `VALIDATED_LOCAL` (confirmed real, no Knowledge Graph entry), `NOT_FOUND` (no canonical record), or role tags marking whether an entity is owned by a **sibling page** rather than this one. Full machine-readable version in `entity-inventory.csv`.

**Reuse discipline:** canonical business/location/certification entities (D&D Land Works, David Deggelman, Oregon CCB #261742, Lane County, Eugene, Springfield, Willamette Valley) are reused verbatim from `../home/entity-inventory.csv`, not re-derived. The competitor set (Danco, All Dirt, Heavy D, Emerald, McKenzie, Braun, Strasheim, A&D) is re-checked specifically for standalone grading/leveling content, not rediscovered from scratch.

---

## 1. Business Entity

Unchanged from the home/site-preparation/excavation packs — see those files for the full validation notes. D&D Land Works and David Deggelman remain `NOT_FOUND` externally (pre-launch, zero digital footprint); Oregon CCB #261742 remains `VALIDATED_LOCAL` (real numbering scheme/lookup tool, exact record not independently re-pulled this pass).

## 2. This Page's Primary Entity vs. Three Sibling Entities (the scope-boundary set)

This is the most important entity table in this pack — it is the machine-readable form of the Scope Boundary section in `00-research-pack.md`.

| Entity | Owns | Role here |
|---|---|---|
| **Grading & Leveling (standalone)** | Re-sloping, yard leveling, or drainage-grading for an **existing** surface problem where nothing new is being dug | **THIS PAGE** |
| Excavation & Grading (`/excavation/`) | Grading that happens *because* something is being dug — cut/fill to design elevation, backfill/compaction after a trench or footing, rough grading that finishes an excavation project | Sibling — already shipped, already states this exact boundary in its own H2 (quoted in full in `00-research-pack.md`) |
| Site Preparation (`/site-preparation/`) | Grading a **raw, undeveloped lot** ahead of new construction (clearing → strip topsoil → cut/fill to grade → compact → stake) | Sibling — the umbrella hub; this page's territory is an already-developed lot/yard, not a raw one |
| Drainage Excavation (future `/drainage-excavation/`, not yet built) | The **water-management intent** — a dug trench, swale-as-excavated-feature, or drainage channel as its own construction item, per topical map §16 | Future sibling — this page owns the **surface/slope intent** (regrading the ground itself); cross-link once that page exists, don't duplicate its content now |

**Two more pages this page must not encroach on**, per the topical map's cannibalization table (§16):

| Entity | Rule | Implication for this page |
|---|---|---|
| Driveway Repair (`/driveway-repair/`) | "Driveway Repair vs Driveway Grading: **No** — one page; driveway grading is a section within Driveway Repair" | Mention driveway regrading only as a cross-link, don't build depth here |
| Slope Stabilization (`/slope-stabilization/`) | Support page for hillside erosion control with structural/engineering framing | This page covers ordinary surface-slope correction only — no retaining-wall or structural-engineering claims |

## 3. Core Technical Concept Entities (this page's actual content)

| Entity | Validation | Notes |
|---|---|---|
| Positive Drainage Slope | VALIDATED | The central concept — grading the ground so water moves away from a structure. Defined precisely by code, not folklore (see next row) |
| **Oregon Residential Specialty Code (ORSC) §R401.3 — Drainage** | VALIDATED, verified directly 2026-09-08 | Fetched ICC's published Oregon code text directly (2017/2021/2023 editions all carry identical substantive language): grade must fall a minimum of **6 inches within the first 10 feet** from the foundation (~5% slope); where a lot line, wall, or other physical barrier prohibits that, a minimum 5% slope plus a drain or swale is required instead; impervious surfaces within 10 feet of the foundation must slope not less than **2%** away from the building. This is Oregon's actual adopted code language, not an approximation — the commonly-quoted "6 inches over 10 feet" and "2% minimum" figures both check out exactly as stated, and Oregon has carried this language across at least three code cycles (2017 → 2023) |
| International Residential Code (IRC) §R401.3 | VALIDATED (model code) | The national model code Oregon's ORSC is based on; identical substantive language. Cite the Oregon-specific ORSC as the primary authority, IRC only as background |
| Swale | VALIDATED | A shallow, graded surface channel that moves water by shaping the land itself — the grading-level fix. This page's territory |
| French Drain | VALIDATED — but flagged adjacent, not this page's default scope | A buried, perforated-pipe-in-gravel subsurface system — a genuinely different remedy from grading/swale work. The topical map already flags "french drain installation" as scope-caution pending confirmation with David (home pack keyword row 70); this page should explain the distinction for reader education, not claim installation as a service unless confirmed |
| Low Spot / Depression | VALIDATED_LOCAL | Homeowner-language term for a negative-grade area that collects water |
| Negative Grade / Negative Slope | VALIDATED | The inverse of positive drainage slope; the specific failure mode this page's service corrects |
| Surface Erosion | VALIDATED_LOCAL | Existing-yard-scale erosion from uncorrected slope/runoff — smaller-scale and non-permit-triggering, distinct from the site-preparation pack's construction-phase "erosion control"/DEQ 1200-C entity |
| Finish/Fine Grading (standalone) | VALIDATED_LOCAL | Smoothing an *existing* lawn/lot surface ahead of landscaping or hardscape — not tied to a new dig, distinct from the site-prep pack's "rough grading" |
| Cut-and-Fill Balancing (yard-scale) | VALIDATED_LOCAL | Small-scale material balancing within an existing yard (moving a high spot to fill a low spot) — the current live page already names this; distinct from the larger, dig-driven cut/fill on the Excavation & Grading page |
| Berm | VALIDATED | Raised earth feature shaped by grading to redirect surface water — a grading-level solution, no dug drainage feature involved |
| Turf / Lawn Regrading | VALIDATED_LOCAL | The homeowner-facing term for standalone yard grading |
| Lawn Topdressing (sand/soil leveling) | VALIDATED, but flagged **adjacent/not verified for D&D** | A thin sand or soil layer spread over turf to fix *minor* unevenness — a lawn-care/landscaping technique, not earthwork. Cost-guide sources (HomeGuide) are explicit that topdressing and full regrading are different remedies for different severities. Do not imply D&D performs topdressing as a lawn-care service; the verified, defensible claim is that D&D does the earthwork/regrading tier, not the cosmetic lawn-care tier — flag for confirmation with David if this distinction should be stated explicitly on-page |

## 4. Corroborating Market Evidence for the Scope Split

- **HomeAdvisor's own service taxonomy** independently splits **"Landscape Minor Grading or Resloping"** (a dedicated Eugene, OR category page exists: `homeadvisor.com/tloc/Eugene-OR/Landscape-Minor-Grading-or-Resloping`) from **"Excavation Major Grading or Resloping"** (Eugene/Oregon City category pages exist; the latter is already cited in the topical map's own source list). This is real, third-party, pre-existing market corroboration — not an arbitrary split invented for this project — that the exact distinction this page relies on (small-scale existing-yard regrading vs. major excavation-scale grading) is one the market itself already recognizes well enough to build separate lead-gen categories around.

## 5. Equipment Entities (reused categories, page-specific application)

| Entity | Validation | Application on this page |
|---|---|---|
| Excavator | VALIDATED | Fine grading near a foundation or hardscape edge, smooth bucket, per the current live page |
| Skid steer loader | VALIDATED | Bulk shaping with a grading attachment, per the current live page |
| Bulldozer/dozer | VALIDATED | Bulk shaping on larger yards |
| Laser grading level | VALIDATED_LOCAL | Holds a consistent slope across a run — ties directly to the positive-drainage-slope concept as the precision tool that achieves it |

No equipment brand names are confirmed for D&D's fleet — same caveat as all three prior packs; do not fabricate.

## 6. Permit/Authority Entities (reused, applied to this page's smaller-job context)

| Entity | Validation | Application here |
|---|---|---|
| Lane County Grading and Fill Permit | VALIDATED_LOCAL (reused verbatim from site-preparation pack) | Triggered by moving >50 cubic yards of earth OR a cut/fill slope steeper than 2:1. Applied honestly to this page's typical job size: a 1,000-3,000 sq ft yard regraded a few inches deep generally stays well under 50 cubic yards; a large, deep full-property regrade could approach or exceed it. State the general rule, not a blanket "never needs a permit" claim |
| Lane County Land Management Division | VALIDATED (reused) | The authority to confirm permit status with, same "confirm directly" caveat pattern as all three prior packs |

## 7. Co-occurrence Findings (competitor re-check specific to standalone grading, 2026-09-08)

| Entity | Found across competitors | Status |
|---|---|---|
| "Grading" mentioned generically within excavation/site-prep service lists | 6/8 (per home pack Matrix A) | Table stakes at the term level |
| Standalone yard-leveling/regrading service, explained or listed as distinct from construction grading | **0/8, directly re-checked** (All Dirt fetched directly 2026-09-08: "precision grading" appears only "within their broader excavation offerings," contextualized to foundation work/new construction, not as an independent yard-regrading service; Danco, Heavy D, Braun, McKenzie show the same pattern via search) | **The single clearest gap for this page** |
| Any explanation of the positive-drainage-slope/code standard | 0/8 | Uncontested ground |
| Any distinction between "is this a landscaping job or an excavation job" | 0/8 | Uncontested ground |
| Permit guidance specific to a small yard-regrade job | 0/8 | Uncontested ground |

## 8. Validation Gate Summary

All entities above are either `VALIDATED` (confirmed via a live, citable source in this research pass — including a direct fetch of Oregon's actual ORSC §R401.3 text, not an assumed figure) or explicitly flagged `VALIDATED_LOCAL` / adjacent-not-verified where the connection to D&D's actual service scope is unconfirmed (topdressing, French drain installation). No code figures, license numbers, or years-in-business claims were invented. See `entity-inventory.csv` for the structured version.
