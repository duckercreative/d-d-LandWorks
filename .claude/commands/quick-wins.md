---
description: Execute the quick-win SEO playbook — title/meta rewrites for high-impression pages
argument-hint: [keyword or page slug to target specifically, or blank for all]
---

Execute the quick-win SEO playbook from `03-gsc/data/seo-solutions.md` Issue 4 and Issue 5.

Target: $ARGUMENTS (if blank, generate rewrites for all 13 quick-win pages)

Read first:
- `03-gsc/data/seo-solutions.md` — full quick-win details (Issues 4 and 5)
- `03-gsc/data/queries-202604.csv` — actual GSC data
- `03-gsc/data/queries-by-page.csv` — which queries each page ranks for

**Quick-Win Pages (from GSC data):**

Issue 4 — Position 11-30 keywords to push to page 1:
1. "ac repair houston" — pos 12.3 → page /ac-repair-houston-tx/
2. "hvac repair houston" — pos 31.9 → page /hvac-service-and-repair/
3. "hvac installation houston" — pos 22.6 → create/optimize /ac-installation-houston-tx/
4. "hvac contractor houston" — pos 18.9 → homepage
5. "ac repair houston tx" — pos ~18 → /ac-repair-houston-tx/

Issue 5 — Low CTR pages (high impressions, low clicks):
6. Homepage — "ac repair near me" 1,259 imp, "ac repair" 969 imp
7. /ac-maintenance-checklist-houston/ — "ac maintenance" 23,795 imp
8. /residential-ac-repair-financing-houston/ — financing queries
9. /houston-ac-maintenance-guide/ — maintenance guide queries
10. /ac-leak-repair-houston-tx/ — leak/refrigerant queries
11. /energy-efficient-ac-maintenance-houston/ — energy efficiency
12. /same-day-residential-ac-repair/ — same-day queries

**For each page, generate (ready to paste into Rank Math):**
- Exact title tag (60 chars max)
- Exact meta description (155 chars max)
- Exact H1 (for Elementor)
- Top 3 internal links to add (with anchor text)
- Verification: "After updating, go to GSC → URL Inspection → Request Indexing"

**Output format:**

For each page, write a block:
```
PAGE: /[slug]/
KEYWORD: [primary keyword] — [impressions] imp, pos [X]
TITLE: [exact title — max 60 chars]
META: [exact meta — max 155 chars]
H1: [exact H1]
INTERNAL LINKS: 
  - "[anchor text]" → /[destination]/
  - "[anchor text]" → /[destination]/
  - "[anchor text]" → /[destination]/
ACTION: Rank Math → Edit Snippet → paste title + meta → Update → GSC → Request Indexing
```

Save output to: `03-gsc/data/quick-wins-rewrites-[date].md`
