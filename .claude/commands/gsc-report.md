---
description: Pull fresh GSC data and generate visual HTML SEO performance report
argument-hint: [optional: date-range e.g. 7d|30d|90d]
---

Run the full GSC reporting pipeline for 75 Degree AC:

1. Run `python3 03-gsc/scripts/fetch_gsc_data.py` to pull fresh GSC data (if authenticated)
2. If GSC not connected, use existing data in `03-gsc/data/`
3. Read all data files: queries-202604.csv, pages-202604.csv, coverage_summary.json, url-inspection.csv
4. Analyze: clicks, impressions, CTR, average position, indexing status, quick-win keywords
5. Generate updated visual HTML report at `03-gsc/reports/seo-report.html`
   - Match the existing design system in the current seo-report.html
   - Update all metrics with latest data
   - Highlight any improvements since last report
6. Save a copy of the new report to `08-reporting/monthly/[YYYY-MM]/gsc-report-[date].html` (YYYY-MM is the month of [date])

Date range: $ARGUMENTS (default: last 90 days)

Always compare to previous period and highlight any changes in indexed pages (currently 21).
Flag if noindex count has dropped from 86 — that's the #1 progress signal.
