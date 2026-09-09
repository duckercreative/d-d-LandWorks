---
description: Write full SEO-optimized content — REQUIRES /deep-research pack AND /content-brief output first.
argument-hint: [page-url-or-slug]
---

Write complete, publish-ready SEO content for: $ARGUMENTS

## Hard Prerequisites

**This command refuses to run without both files in place:**

1. Research pack: `01-research/page-research/[slug]/00-research-pack.md`
2. Content brief: `07-landing-pages/briefs/[slug]-brief.md`

If either is missing, STOP and tell the user:

> "Missing prerequisite for /content-create [slug]:
>   - Research pack: [present/missing]
>   - Brief: [present/missing]
>
> The content workflow is `/deep-research → /content-brief → /content-create`. Run the missing step(s) first."

Do NOT write content from scratch without the brief. Do NOT skip the research pack. The chain exists so the resulting content is informed by every data point the upstream phases surfaced.

## Inputs (read in this exact order)

1. `07-landing-pages/briefs/[slug]-brief.md` — the spec
2. `01-research/page-research/[slug]/00-research-pack.md` — the data behind the spec
3. `01-research/page-research/[slug]/03-entity-map.md` — entity profile + co-occurrence requirements (entities mandatory on this page)
4. `01-research/page-research/[slug]/entity-inventory.csv` — per-page validated entity inventory (canonical names — use verbatim, never paraphrase)
5. `01-research/entities-inventory.csv` — site-wide entity registry (consult when referencing brands, certifications, locations)
6. `01-research/page-research/[slug]/05-intent-triangulation.md` — trust killers + pain points to weave in
7. `01-research/page-research/[slug]/07-houston-authority.md` — exact authority citations + wording
8. `01-research/page-research/[slug]/08-gap-analysis.md` — the differentiators
9. `business-info.md`, `services-list.md`, `service-areas.md`
10. `.claude/skills/content-generation/SKILL.md` — 5-Point Human Test, banned phrases, E-E-A-T methodology

**Entity-name fidelity rule:** Every entity name (business, service, brand, location, certification, person) must appear in H1/H2/H3/first-paragraph EXACTLY as the `canonical_name` column in the entity inventory. Body prose can use natural variants for readability, but load-bearing positions use the canonical. This is what `entities-mapping` calls the "no entity drift" rule. The humanizer pass must preserve canonical entity strings — vary the surrounding sentence structure, not the entity names.

## Output

Write the finished content to: `07-landing-pages/content/[slug]-content.md`

## Content Standards (non-negotiable)

**Word count:** match the brief's target (typically ≥ 7th-ranking competitor + 15%). Brief specifies the exact range.

**Required Metadata block at top of file:**
```
Title: [exact title tag from brief — max 60 chars]
Meta: [exact meta description from brief — max 155 chars]
H1: [exact H1 from brief]
Schema: [list of @types from brief]
Internal links: [3-5 with anchor text]
Primary keyword: [from brief]
Word count: [actual count after writing]
```

**Required Sections (service page — service pages must follow this in order):**

1. **Intro paragraph** — primary keyword + Houston + key urgency framing + phone number in first 100 words. Pull urgency from `05-intent-triangulation.md` Table 2 (Decision Triggers).

2. **Why Choose 75 Degree AC** — USPs with specifics, not slogans. Each USP must have a concrete proof point (TACLA72152E number, founded 2016, 24/7 dispatch, $X liability coverage).

3. **Our [Service] Process** — step-by-step. Use Phase 9 gap #10 (process transparency) — name diagnostic equipment if relevant (Fieldpiece SMAN 460, Testo 552).

4. **Signs You Need [Service]** — triggers/symptoms from `02-question-mine.md` `failure_mode` tagged questions.

5. **Service Areas** — Houston neighborhoods + suburbs with ZIP codes from `service-areas.md`. Where relevant, add response-time data per Phase 9 gap #16.

6. **Pricing & What to Expect** — REAL $ ranges per Phase 9 gap #2. Reference financing if applicable. NEVER "call for a quote" only.

7. **FAQ** — 6-10 questions from brief, sourced from `02-question-mine.md`. Each answer opens with the direct answer (first sentence), then 2-4 sentences of context. FAQPage schema markup must match visible text exactly.

8. **AI Citation Block** — paste the 40-60 word block from brief verbatim. This is the AI-extractable answer (place after H2 #1 or in intro per brief instructions).

9. **CTA** — strong close with (713) 598-2737 + urgency context. Match the page intent (emergency = "24/7 — call now"; install = "free estimate"; etc.).

## Brand Voice Rules

- Specific over generic ("we've answered 4,300+ Houston emergency calls since 2016" not "experienced")
- Houston-specific always (neighborhoods, climate facts from `07-houston-authority.md`, real ZIP codes)
- Phone number `(713) 598-2737` in at least 3 places + click-to-call format (`tel:7135982737`)
- Mention TACLA72152E, founded 2016, same-day, 24/7 emergency
- For Richmond TX pages: use (346) 681-2625 instead — separate location per memory

## Banned Phrases (do NOT use)

From `.claude/skills/content-generation/SKILL.md` — these are AI-detection flags:

- "best in class", "industry-leading", "cutting-edge", "state-of-the-art"
- "seamlessly", "leverage", "robust", "comprehensive solutions"
- "Look no further", "as a top provider", "At [company], we are committed to"
- "navigate the complexities", "in today's fast-paced world"
- "rest assured", "look no further", "your one-stop shop"

If the brief allows a phrase that appears banned here, the brief is wrong — flag it.

## E-E-A-T Signal Counts (per brief)

The brief specifies minimum counts. Hit them all. Each signal must be specific:

- **Experience**: "In 2024, we replaced 87 capacitors in homes inside Loop 610 during the May heat wave" — concrete, not "years of experience"
- **Expertise**: "TACLA72152E technicians hold EPA 608 Universal certification" — license + cert + scope
- **Authority**: "Houston Chronicle named us in [if true and citable]" or "[X] Google reviews averaging 4.9/5"
- **Trust**: "$1M general liability through [carrier], $500K workers comp, all permits pulled by us"

## AI Citability Block (mandatory)

Include the 40-60 word self-contained passage from the brief. It must:
- Open with a direct answer to the page's primary question
- Be standalone (readable without surrounding context)
- Contain ≥2 specific data points (price, time, brand, license)
- Match the citation block draft in `00-research-pack.md` section 10

## Gap-Driven Differentiators

The brief lists the top 5 gaps from `08-gap-analysis.md`. Each must appear in the content:

- Brand + model gap → name specific models we service (Carrier Infinity 24ANB7, Mitsubishi MSZ-FH09NA, etc.)
- Specific pricing gap → real $ ranges with line items
- Component parts gap → capacitor, contactor, TXV, ECM blower, etc.
- Houston-specific failure modes → humidity → coil corrosion, etc.
- Whatever else the gap analysis flagged top-5

## Trust-Killer Rebuttals (from intent triangulation)

The brief lists trust killers from `05-intent-triangulation.md` Table 3. Each must be explicitly addressed:
- "Hidden fees" → "Flat diagnostic fee disclosed before any work. No upcharges between quote and invoice."
- "Late arrivals" → "We text 30 min before arrival with the tech's name and EPA608 cert #."
- "Parts not stocked" → "Vans carry common Carrier/Trane/Lennox capacitors + contactors — 80% of repairs same-visit."

Use real, specific rebuttals — never slogans.

## Schema Block (append to file)

Append the complete JSON-LD schema block at the end of the content file in a fenced ```json code block. Types per brief (typically Service, FAQPage, BreadcrumbList, LocalBusiness/HVACContractor). Pull HVACContractor identifier (`TACLA72152E`) into the `identifier` field.

## Final QA Checklist

Before saving, verify:

- [ ] Word count within brief's target range
- [ ] Primary keyword in H1, first 100 words, ≥1 H2
- [ ] Phone number in ≥3 places + click-to-call format
- [ ] All E-E-A-T minimum signal counts met
- [ ] AI citation block included verbatim
- [ ] Every FAQ matches a `02-question-mine.md` question
- [ ] All top-5 gaps from `08-gap-analysis.md` addressed
- [ ] All trust-killer rebuttals included
- [ ] Zero banned phrases (run grep against the banned list)
- [ ] Houston-specific data points ≥3 (location pages: ≥5)
- [ ] Internal links: 3-5 with descriptive anchor text
- [ ] Schema JSON-LD appended
- [ ] 5-Point Human Test passes (from content-generation SKILL)

## On Completion

- Save to: `07-landing-pages/content/[slug]-content.md`
- Print: word count, sections written, citations included
- Print: "Ready for review. Next step: paste into WordPress via WP-CLI when approved."
- Do NOT push to WordPress automatically — user reviews first

## Anti-Patterns

- ❌ Writing without the brief
- ❌ Inventing FAQs not in question-mine
- ❌ Using "free estimates" without specific $ ranges nearby
- ❌ Recycling intro paragraphs from other pages
- ❌ Skipping the schema block
- ❌ Stock photos in content (image references must be job-site originals per CLAUDE.md)
