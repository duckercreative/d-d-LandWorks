---
description: Pinterest performance report — pulls /v5/pins/{id}/analytics (last 14 days) for every archived pin, renders dark HTML report sorted by saves
argument-hint: [optional: scrape | report — defaults to both]
---

Run the Pinterest performance + reporting sweep for 75 Degree AC.

Argument: $ARGUMENTS

Modes:
- `scrape` — refresh `data/pinterest_performance.csv` only
- `report` — re-render dark HTML report from existing CSV
- (blank) — do both (default)

**Steps:**
1. Verify auth: `python3 09-social-media/platforms/pinterest/publisher.py --whoami` — confirms token still valid
2. Run report: `python3 09-social-media/scripts/pinterest_pipeline.py --report`
   - Iterates every brief in `pins/archive/` that has a `pin_id_pinterest`
   - Calls `/v5/pins/{pin_id}/analytics` for last 14 days (`IMPRESSION,SAVE,PIN_CLICK,OUTBOUND_CLICK`)
   - Appends rows to `09-social-media/platforms/pinterest/data/pinterest_performance.csv`
   - Renders `09-social-media/platforms/pinterest/reports/pinterest-performance-YYYY-MM-DD.html` using the canonical dark theme
   - `open`s the report in the browser

**Quality bar for the report:**
- Dark theme matching CLAUDE.md "Report Design Standard"
- Header: Pinterest + accent gradient, Live badge with pulse
- 4 KPI cards: pins live / impressions / saves / outbound clicks
- Pin table sorted by **saves** desc (Pinterest's strongest quality signal — saves > clicks > impressions for ranking pin quality)
- Footer notes data source `data/pinterest_performance.csv`

**Things to flag (not the same week, but for the operator to think about):**
- A pin with > 1,000 impressions and < 5 saves → image isn't compelling, redo the visual
- A pin with high saves but low outbound clicks → title/description doesn't drive next-step intent
- A pin with high outbound clicks but no GA4 conversions → check the destination URL's CRO

**Read before recommending changes:**
- `pins/templates.json → five_point_pin_test` — the bar every pin must clear
- `.claude/skills/pinterest-engagement/SKILL.md` — methodology for tuning the next batch
