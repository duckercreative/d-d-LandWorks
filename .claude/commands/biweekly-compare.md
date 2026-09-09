---
description: Bi-weekly comparison report — current 2 weeks vs previous 2 weeks across Website, GBP, Google Ads, GSC, GA4
argument-hint: [optional: end-date YYYY-MM-DD, defaults to yesterday]
---

Generate the bi-weekly comparison report — last 14 days vs. the 14 days before that, across every platform.

Period A (current): 14 days ending $ARGUMENTS (default: yesterday)
Period B (previous): the 14 days before Period A
Baseline trend: 6+ additional prior periods (for sparkline context) if available

---

## Phase 1 — Read comparison-ready data

**Source of truth:** `08-reporting/weekly-audit/history.csv` (populated by `/weekly-audit`)

For each period, aggregate 2 weeks of rows. If Period B has incomplete data, note it in the report and do not fabricate deltas.

Also pull fresh data for metrics that require full range queries (GSC, GA4, Ads APIs often provide range queries faster than re-aggregating):

**Website**
- Crawl stats + status code distribution for both periods
- Schema pass rate
- CWV field data (CrUX) — LCP/INP/CLS medians
- Pages published / updated / deleted per period

**GBP**
- Reviews received (count, avg rating, reply rate, reply median time)
- Posts published (count, avg views, avg clicks)
- Insights: searches, views, calls, directions (discovery + direct + branded splits if available)
- Photo uploads

**GSC**
- Clicks, impressions, CTR, avg position — site-wide
- Top 20 queries: rank each in both periods, compute movement
- Top 20 pages by clicks: rank each, compute movement
- Coverage status changes (new errors, fixed errors)
- New page-1 entries / fallen-off-page-1

**GA4**
- Sessions, users, engaged sessions, conv events, conv rate
- By channel (Organic / Direct / Paid / Social / Referral)
- Top landing pages
- Device mix shift
- Geographic shift (top 10 cities)

**Google Ads**
- Spend, conv, CPL, CTR, CPC, QS avg, IS
- By campaign (all 5)
- Search term wins / losses
- Ad creative top performers vs. prior

---

## Phase 2 — Compute deltas with significance

For every metric, compute:
- Absolute value Period A
- Absolute value Period B
- Δ (A − B)
- Δ % ((A − B) / B × 100)
- Direction arrow: ▲ / ▼ / ▬
- Color: green if favorable, red if unfavorable, gray if flat
- Significance flag: mark **significant** if |Δ%| ≥ 15% OR if absolute delta crosses a threshold (e.g., CPL crossing target line, position crossing page-1 boundary, rating crossing 4.8)

**Favorable direction rules (not all metrics want "up"):**
- Up-good: clicks, impressions, sessions, users, conversions, reviews, avg rating, QS, IS, engagement rate, post views
- Down-good: CPL, CPC, avg position (lower = better), 4xx count, noindex count, unreplied count, LCP, INP, CLS, IS-lost-budget, IS-lost-rank, bounce-proxy

---

## Phase 3 — Generate the dark HTML comparison report

Save: `08-reporting/biweekly/biweekly-compare-[period-A-end].html`

Use the canonical ads-audit dark design system.

**Header**
- h1: "Bi-Weekly Comparison Report" (orange accent)
- Badges: Period A dates, Period B dates, `badge-live`
- Meta row: "75 Degree AC · 14-day rolling compare · YoY where available"

**Section 1 — Headline movement strip (6 KPI cards)**
Each card shows:
- Value (Period A)
- Large delta % with arrow + color
- "vs. prev 14 days" sub
- Tiny sparkline of last 8 periods from history.csv

Cards: Overall Score · Clicks · Sessions · Conversions · CPL · Avg Rating

**Section 2 — Platform score matrix**
One card row with 5 platforms. For each:
- Score A / Score B
- Δ with color
- What moved it (top 1-2 contributing metrics)

**Section 3 — Comparison tables (one per platform)**
Each table same structure:

| Metric | Period B | Period A | Δ | Δ% | Status |
|---|---|---|---|---|---|

Highlight significant rows with colored left-border (cheating left-border rule: it's OK here since it's a data flag, not a KPI card).

Required tables:
- `🌐 Website` — indexed, 4xx, noindex, schema pass %, LCP, INP, CLS
- `📍 GBP` — reviews added, avg rating, reply rate, reply median hours, posts, searches, views, calls
- `🔍 GSC` — clicks, impressions, CTR, avg position, pos-1-3 count, pos-11-20 count
- `📊 GA4` — sessions, users, engaged sessions, conv, conv rate, organic sessions, avg time
- `📣 Ads` — spend, conv, CPL, CTR, CPC, QS, IS, IS lost (budget), IS lost (rank)

**Section 4 — Query-level movement (GSC deep dive)**
Two tables side-by-side:
- **Gainers** — queries that moved up ≥ 3 positions OR gained ≥ 10 clicks
- **Losers** — queries that moved down ≥ 3 positions OR lost ≥ 10 clicks
- Each: query | pos A | pos B | clicks A | clicks B | Δ
- Tag each: "new page-1", "fell off page-1", "opportunity" (pos 11-20)

**Section 5 — Page-level movement**
Same gainers/losers structure but for top landing pages (by sessions + conv). Reveals which pages are pulling their weight and which need `/audit`.

**Section 6 — Charts (Chart.js, dark theme)**
- Line: clicks — last 8 weeks, two shaded periods
- Line: CPL — last 8 weeks with target band
- Line: conversions — last 8 weeks, organic + paid stacked
- Bar: reviews added per week (last 12 weeks)
- Line: avg position — last 8 weeks

All charts pull from `history.csv` — confirm enough rows exist before rendering; if not, note "insufficient history" instead of faking a chart.

**Section 7 — What worked / what didn't**
Two columns:
- **Wins to double down on** — top 3 positive deltas with the likely cause (e.g., "Quick-win rewrite on /ac-repair-houston-tx/ → +47% clicks")
- **Leaks to fix** — top 3 negative deltas with the likely cause + prescribed command (e.g., "Emergency campaign CPL +28% → run `/ads-audit keywords`")

**Section 8 — Next 14-day plan**
Ordered list of 5-10 actions with owner (Claude command or manual) and expected delta.

**Footer** — no account IDs, no script names.

---

## Phase 4 — Also emit
- `08-reporting/biweekly/biweekly-compare-[period-A-end].md` — markdown summary
- Append a row to `08-reporting/biweekly/biweekly-history.csv` — enables future YoY + QoQ comparisons

---

## Phase 5 — Deliver
- `open "08-reporting/biweekly/biweekly-compare-[period-A-end].html"`
- Print one-line summary: overall score delta, biggest winner metric, biggest loser metric, top action

---

## Dependency note
This command is only useful once `/weekly-audit` has run at least 2 times. If `08-reporting/weekly-audit/history.csv` has fewer than 2 rows, print a warning and suggest running `/weekly-audit` on the prior 14 days first to backfill.
