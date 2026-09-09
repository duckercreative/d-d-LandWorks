---
description: Run AI visibility audit — check AI citations, crawler access, GEO optimization, and brand SERP
argument-hint: [platform: all|chatgpt|perplexity|google|gemini|copilot]
---

Run AI visibility audit for 75 Degree AC. Platform focus: $ARGUMENTS

Read first:
- `business-info.md` — business details
- `01-research/keywords-research.md` — target keywords
- `02-site-architecture/site-architecture.md` — page structure
- `03-gsc/data/seo-solutions.md` — current on-page state

**1. AI Platform Citation Tests**

For each platform, search these queries and document what appears:
- "best HVAC contractor Houston TX"
- "AC repair Houston emergency"
- "75 Degree AC Houston" (brand search)
- "how much does AC repair cost in Houston"

Document: Is 75 Degree AC cited? Is the website linked? What position?

**2. AI Crawler Access**

Fetch https://75degreeac.com/robots.txt
Check each crawler:

| Crawler | AI System | Must Allow? | Status |
|---------|-----------|-------------|--------|
| GPTBot | ChatGPT | YES (Critical) | |
| OAI-SearchBot | ChatGPT | YES (Critical) | |
| ClaudeBot | Claude | YES (Critical) | |
| PerplexityBot | Perplexity | YES (Critical) | |
| GoogleBot | Google AIO | YES (Critical) | |
| Applebot | Siri | HIGH | |
| Bingbot | Copilot | HIGH | |

If any Tier 1 crawler is blocked: generate exact robots.txt fix.

**3. llms.txt Assessment**

Fetch https://75degreeac.com/llms.txt
If missing, generate the full llms.txt content to create at site root.

**4. AI Citability Audit**

For the top 10 pages, score (0-100):
- Homepage
- /ac-repair-houston-tx/
- /emergency-ac-repair-houston-tx/
- /ac-maintenance-checklist-houston/
- /commercial-ac-service-houston/
- Top 5 indexed location pages

Score each dimension:
1. Answer Block (30%): Does first paragraph answer the query directly?
2. Self-Containment (25%): Can AI extract a passage without context?
3. Structure (20%): Clean headings, lists, tables?
4. Stats (15%): Specific numbers, costs, timeframes?
5. Uniqueness (10%): Houston-specific, original data?

**5. Content Blocks for AI Extraction**

Write 5 optimized AI-citation passages (134-167 words each):
- "How much does AC repair cost in Houston?" — cost answer block
- "How fast does 75 Degree AC respond?" — speed/urgency answer block
- "Is 75 Degree AC licensed in Texas?" — credibility answer block
- "What HVAC brands does 75 Degree AC service?" — brands answer block
- "What neighborhoods does 75 Degree AC serve?" — coverage answer block

Format for each:
```
QUESTION: [query it answers]
BLOCK: [134-167 word answer-first passage]
PLACEMENT: [which page to add this to]
```

**6. Brand SERP Analysis**

Search "75 Degree AC" and document:
- Position 1 result: GBP / website / directory?
- Knowledge Panel: present / partial / missing
- Sitelinks appearing?
- Reviews in SERP?
- Social profiles ranking?
- Negative results?

**7. Voice Search Optimization**

Generate FAQ schema blocks for voice queries:
- "OK Google, find HVAC repair near me Houston"
- "Alexa, is 75 Degree AC open right now?"
- "Hey Siri, AC repair emergency Houston"

**Output:**

Findings: `01-research/ai-visibility-audit-[date].md`
llms.txt draft: `02-site-architecture/llms-txt-draft.md`
AI content blocks: `07-landing-pages/content/ai-answer-blocks.md`
