---
description: Generate a detailed SEO content brief — REQUIRES research pack from /deep-research first.
argument-hint: [page-url-or-slug]
---

Generate a complete content brief for: $ARGUMENTS

## Hard Prerequisite — Research Pack

**This command refuses to run without a complete research pack.**

Before writing anything, check that this file exists and is current:

```
01-research/page-research/[slug]/00-research-pack.md
```

If the pack is **missing** OR **older than 90 days** OR **fails the quality checklist** (see deep-research skill), STOP and tell the user:

> "No research pack found for [slug]. Run `/deep-research $ARGUMENTS` first, then re-run this command. The deep-research phase typically produces 9 files including the master research-pack.md that this command consumes."

Do NOT attempt to research from scratch inside this command — the research methodology lives in `.claude/skills/deep-research/SKILL.md` and `/deep-research`. Mixing the two phases is how briefs end up shallow.

## Inputs (read in this exact order)

1. `01-research/page-research/[slug]/00-research-pack.md` — primary source (REQUIRED)
2. `01-research/page-research/[slug]/02-question-mine.md` — for FAQ shortlist (REQUIRED)
3. `01-research/page-research/[slug]/03-entity-map.md` — for entity inventory + co-occurrence requirements (REQUIRED)
4. `01-research/page-research/[slug]/entity-inventory.csv` — per-page entity inventory from `entity-extraction` (REQUIRED if exists; falls back to entity-map if missing)
5. `01-research/page-research/[slug]/04-competitor-matrix.md` — for heading map (REQUIRED)
6. `01-research/page-research/[slug]/08-gap-analysis.md` — for differentiators (REQUIRED)
7. `01-research/entities-mapping.csv` + `entity-id-registry.md` — for cross-site entity assignment + canonical `@id` values (used in schema section)
8. `01-research/competitors/top-players.md` — relevant cluster section
9. `business-info.md`, `services-list.md`, `service-areas.md`
10. Existing brief at `07-landing-pages/briefs/[slug]-brief.md` if rebrief

**Entity validation gate:** every entity name appearing in H1/H2/H3 of the brief must have a `VALIDATED` status in the inventory (run `entity-validate` if not already done). The brief refuses to specify schema fields with unvalidated entity references.

## Output

Write the complete brief to: `07-landing-pages/briefs/[slug]-brief.md`

Follow the **complete brief template** from `.claude/skills/content-briefs/SKILL.md` — every section must be filled, no placeholders.

## Brief Structure (every section required)

1. **Page Metadata** — URL, primary keyword, secondary keywords, semantic terms, search intent, current GSC position
2. **Intent & Audience** — which ICP, state of mind, what they need to believe before calling
3. **Voice & Angle** — writing voice, required Houston specifics, insider detail
4. **E-E-A-T Requirements** — specific signal counts from the research pack
5. **AI Citation Target** — copy the citation block draft from pack section 10
6. **Content Structure** — H1, opening paragraph, H2 sections (derived from competitor matrix + gap analysis, NOT invented)
7. **Unique Angle** — pulled directly from top 5 gaps in `08-gap-analysis.md`
8. **FAQ Section** — 6-10 questions sourced from `02-question-mine.md`, validated against Matrix B in `04-competitor-matrix.md`
9. **Internal Links** — IN and OUT with anchor text + placement
10. **Schema Requirements** — union of top 3 competitors + any evidence-grade additions (license #, AggregateRating). Reference canonical `@id` values from `01-research/entity-id-registry.md`. Every Location entity referenced via `areaServed` must use the structured `City` object with `@id` → Wikidata URL (no bare strings). Person blocks must use the canonical `@id` from `entities-mapping`.
11. **Entity Profile** — primary entity (0.8+ salience) + 2-4 major supporting (0.5-0.79) + 3-6 supporting (0.3-0.49). From `entities-mapping.csv` per-page row. Includes co-occurrence requirements (entities present on ≥7/10 competitor pages that MUST appear).
11. **CTA Requirements** — placement, copy, type
12. **Images Required** — with alt text and EXIF requirements
13. **Authority Signals to Cite** — pulled from `07-houston-authority.md`, with exact wording

## Quality Bar

The brief is only "done" when:

- [ ] Every H2 traces to either Matrix A (≥4/10 competitors use it) or a top-5 gap
- [ ] Every FAQ traces to a real question from `02-question-mine.md`
- [ ] Unique Angle is a specific differentiator (e.g., "Names specific Mitsubishi MSZ-FH09NA model — Cluster 9 competitor gap"), not a slogan
- [ ] At least 3 Houston-specific authority citations with exact wording proposed
- [ ] Trust-killer rebuttals from `05-intent-triangulation.md` are placed in specific sections
- [ ] AI citation block (40-60 words) is included verbatim, ready for the writer to paste
- [ ] Word count target is justified (≥ word count of 7th-ranking competitor + 15%)

## On Completion

- Print: `Brief complete: 07-landing-pages/briefs/[slug]-brief.md`
- Print: "Next: `/content-create $ARGUMENTS`"
- Do NOT auto-invoke `/content-create` — user reviews the brief first

## Anti-Patterns

- ❌ Inventing H2s that aren't in Matrix A or the gap list
- ❌ Writing FAQs not sourced from question-mine
- ❌ "Best in class", "industry-leading", "comprehensive" — banned per content-generation skill
- ❌ Recommending word counts without referencing competitor benchmarks
- ❌ Skipping any of the 13 brief sections — even if "the page doesn't need it"
