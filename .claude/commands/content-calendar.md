---
description: Build or update the content publishing calendar — 4-phase plan, hub-before-cluster, Houston seasonality
argument-hint: [mode: build|update|next-month|gaps]
---

Build or update the content calendar using the `content-calendar` + `topical-map` + `market-research` skills.

Mode: $ARGUMENTS (default: `update`)

**Rules (from skill):**
- Hub-before-cluster: publish the hub page before any of its spokes
- Houston seasonality: AC heavy Mar-Sept, Heating Oct-Feb, IAQ year-round
- 25 content pieces targeted May-Nov 2026 (per master sheet "📅 Content Calendar")
- One "money page" per week, one "supporting/informational" per week

**Mode: `build`**
Full rebuild of the calendar:
1. Read `topical-map` output — identify all clusters + hubs + spokes
2. Read `01-research/keywords-research.md` — map every keyword to a planned page
3. Check `02-site-architecture/page-tracker.csv` for what already exists
4. Apply hub-before-cluster ordering
5. Align seasonal content to Houston weather calendar:
   - Feb-Mar: "Spring AC tune-up", "Signs your AC won't survive summer"
   - Apr-May: "Emergency AC repair Houston", "AC installation costs 2026"
   - Jun-Aug: Pure emergency + repair push
   - Sep-Oct: Transition content, IAQ
   - Nov-Jan: Heating, furnace, heat-pump content

Output `02-site-architecture/content-calendar-[date].csv` with:
`publish-date | page-slug | hub-or-spoke | cluster | primary-keyword | word-count | brief-owner | status | dependencies`

**Mode: `update`**
- Read the existing calendar
- Check every "scheduled" item against the live site + tracker.csv
- Move completed items → "published"
- Re-prioritize remaining based on:
  - GSC quick-win opportunities (pos 11-20)
  - Competitor gaps (from latest competitor analysis)
  - Season vs. current date (2026-04-24 per system)
- Surface anything at risk (dependency missing, hub not built)

**Mode: `next-month`**
Focused output for just the next 30 days — ready to brief writers:
- Each item gets the `/content-brief` command pre-filled ready to run
- Publish dates + internal owner placeholder

**Mode: `gaps`**
Cross-reference planned vs. competitor content vs. keyword research to surface missing clusters.

**Output:**
- CSV: `02-site-architecture/content-calendar-[date].csv`
- Dark HTML view: `08-reporting/monthly/[YYYY-MM]/content-calendar-[date].html` (YYYY-MM is the month of [date]) — timeline Gantt + cluster grid + KPI cards (pages scheduled, pages published, pages at-risk, hub coverage %)
- Update master sheet "📅 Content Calendar" tab
- `open` the HTML
