---
description: Site-wide health check — HTTP status across all known URLs, noindex state, canonical, sitemap sync, page-tracker truth
argument-hint: [mode: full|quick|sitemap-only|broken]
---

Run site-wide health check on 75degreeac.com — the deterministic-data version of `/seo-audit`.

Mode: $ARGUMENTS (default: `quick`)

**Non-negotiables (from memory `feedback_audit_status_codes.md`):**
- Don't equate "URL not in sitemap" with "broken". Curl every flagged URL. 2xx = noindexed duplicate, 4xx = true broken.
- Don't trust WebFetch summaries. Use curl + WP-CLI for all status checks.

**Source URLs to check:**
1. Live sitemap: `curl -s https://75degreeac.com/sitemap_index.xml` → all child sitemaps → all URLs
2. `02-site-architecture/page-tracker.csv` — all tracked pages
3. `03-gsc/data/url-inspection.csv` — GSC's known URLs
4. `05-wordpress/` WP-CLI: `wp post list --post_type=page,post --format=csv --fields=ID,post_status,post_name` (via SSH)
5. Internal link graph (output of `/internal-links`)

**Phase 1 — Parallel curl every URL**
For each unique URL across all sources (dedupe):
- `curl -sI` → status code
- If 3xx → follow + record final URL
- If 2xx → fetch full HTML, check:
  - `<meta name="robots">` (noindex? nofollow?)
  - `<link rel="canonical">` (self? different?)
  - Title, H1, word count
- If 4xx or 5xx → flag as critical

Save: `03-gsc/data/site-health-[date].csv` with columns:
`url | source | status | final-url | robots | canonical | title | h1 | words | in-sitemap | in-tracker | issues`

**Phase 2 — Diff**
- URLs in sitemap but NOT in tracker → missing from plan
- URLs in tracker but NOT in sitemap → may be noindexed or missing
- URLs in WP but NOT in sitemap → sitemap generation issue
- URLs with canonical pointing elsewhere → cannibalization risk
- Noindex pages that shouldn't be (per `/fix-noindex` Action A list)

**Phase 3 — Output**
- `quick` mode: markdown summary with counts + top 10 critical issues
- `full` mode: full dark HTML report at `08-reporting/monthly/[YYYY-MM]/site-health-[date].html` (YYYY-MM is the month of [date])
- `sitemap-only`: just sitemap vs. WP diff
- `broken`: just 4xx/5xx list with referring pages (from link graph)

**KPI cards for dark HTML:**
- Total URLs, % 2xx, % 3xx, % 4xx, noindex count, canonical-conflict count, orphan count

**Update:**
- `02-site-architecture/page-tracker.csv` — sync status column with real HTTP state
- `open` the HTML (full mode only)
