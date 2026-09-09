---
description: Run a full multi-agent SEO audit for 75 Degree AC using all 6 specialist agents
argument-hint: [focus: full|technical|content|local|keywords|offpage|ai]
---

Launch the complete SEO audit for 75 Degree AC (https://75degreeac.com).

Focus area: $ARGUMENTS (if blank, run full audit)

**Audit Sequence:**

**Phase 1 — Data Collection (always first)**
- Read all existing data: `03-gsc/data/`, `01-research/`, `02-site-architecture/`
- Run site crawler if available: `python3 03-gsc/scripts/`
- Check https://75degreeac.com/robots.txt and sitemap

**Phase 2 — Parallel Analysis (use subagents)**
Spawn these agents in parallel based on focus:
- `technical-analyst` — crawlability, indexing, CWV, schema
- `keyword-analyst` — on-page, keyword gaps, entity audit
- `content-analyst` — content inventory, gaps, E-E-A-T, AI citability
- `local-seo-analyst` — GBP, citations, reviews, local pack
- `offpage-analyst` — backlinks, social, CRO
- `ai-visibility-analyst` — AI platforms, crawlers, voice, brand SERP

**Phase 3 — Synthesis**
- Compile all findings into `03-gsc/data/master-audit-[date].md`
- Score overall SEO health (out of 100)
- Generate prioritized action plan (Critical → High → Medium → Low)
- Generate visual HTML report at `08-reporting/monthly/[YYYY-MM]/audit-[date].html` (YYYY-MM is the month of [date])

**Output Files:**
- Master audit: `03-gsc/data/master-audit-[date].md`
- Technical: `03-gsc/data/technical-findings-[date].md`
- Content: `07-landing-pages/audits/content-audit-[date].md`
- Local: `04-gmb/local-audit-[date].md`
- Keywords: `01-research/keyword-audit-[date].md`
- Offpage: `01-research/backlink-audit-[date].md`
- AI: `01-research/ai-visibility-[date].md`

Never produce generic output. Every finding must reference specific 75 Degree AC URLs, pages, and data.
