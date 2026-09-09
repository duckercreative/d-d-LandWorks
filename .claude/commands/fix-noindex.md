---
description: Walk through the 86-page noindex fix workflow — generate exact WordPress instructions
argument-hint: [action: A|B|C|all] [optional: page slug]
---

Execute the noindex fix workflow from `03-gsc/data/seo-solutions.md` Issue 1.

Action: $ARGUMENTS

Read first:
- `03-gsc/data/seo-solutions.md` — full Issue 1 details (Actions A, B, C)
- `03-gsc/data/coverage_summary.json` — current indexing status
- `03-gsc/data/url-inspection.csv` — per-URL inspection results

**Action A — Remove Noindex + Optimize (20 pages)**
For each of the 20 pages:
1. Generate the exact WordPress/Rank Math steps
2. Provide the exact title tag to paste
3. Provide the exact H1 to paste in Elementor
4. Provide the exact meta description
5. Generate a checklist card ready to print/use

Output a prioritized checklist for Action A pages, ordered by keyword opportunity:
- Emergency pages first (highest commercial intent)
- Repair pages second
- Informational pages last

**Action B — 301 Redirects (37 pages)**
Generate a formatted redirect table for Rank Math → Redirections:
- Source URL (slug only)
- Destination URL (slug only)
- One-line reason
- Group by destination page for batch setup efficiency

**Action C — Delete + Redirect (29 pages)**
Generate the deletion workflow:
- Pages to trash in WordPress (grouped by category: wrong-city, junk, DIY)
- Corresponding 301 redirect to set up in Rank Math for each

**Per-Page Fix Card format (Action A):**
```
═══════════════════════════════════════
PAGE #[N]: /[slug]/
KEYWORD: [keyword]
─────────────────────────────────────
STEP 1 — Rank Math > Advanced > Robots Meta > Uncheck "No Index" > Update
STEP 2 — Rank Math > Edit Snippet:
  Title: [exact title]
  Meta: [exact meta description]
STEP 3 — Elementor > H1:
  [exact H1]
STEP 4 — GSC > URL Inspection > [full URL] > Request Indexing
═══════════════════════════════════════
```

Track progress: update `02-site-architecture/page-tracker.csv` status column.
Save full output to: `03-gsc/data/noindex-fix-checklist-[date].md`
