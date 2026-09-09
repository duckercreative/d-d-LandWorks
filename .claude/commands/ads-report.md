---
description: Weekly Google Ads performance report — spend, CPL, conversions, Quality Score, search terms, recommendations
argument-hint: [period: week|month|custom-start:end]
---

Generate the weekly Google Ads performance report.

Period: $ARGUMENTS (default: `week` = last 7 days)

**KPI benchmarks (from CLAUDE.md):**
- Month 3 target CPL: < $60
- Month 6 target CPL: < $45
- CTR target: ≥ 8% for emergency, ≥ 5% for repair
- Conversion rate target: ≥ 12%
- Quality Score target: ≥ 7 for primary keywords

**Read fresh data:**
- `05-google-ads/75degreeacads.csv` — current export
- If Google Ads API wiring exists (`05-google-ads/ads-toolkit/`), pull fresh for the period
- Otherwise, prompt user for the latest CSV export with exact columns needed

**Report sections:**

1. **Top-line KPIs** (KPI cards, dark-style):
   - Spend, Conversions, CPL, Conv Rate, CTR, Avg CPC, Impression Share, Lost IS (Budget), Lost IS (Rank)
   - Status chip: Hit / Watch / Miss vs. target

2. **Campaign breakdown** (table):
   - Each of the 5 campaigns: Spend / Conv / CPL / CTR / QS vs. benchmark
   - Highlight campaigns > 20% over target CPL in red

3. **Best + worst performers**:
   - Top 5 keywords by conversions
   - Worst 5 keywords by spend/no-conv (recommend pause or negative)
   - Top 5 search terms to add as exact-match
   - Top 5 search terms to negate

4. **Ad performance**:
   - RSAs ranked by conv rate
   - Assets (headlines/descriptions) performing "Low" — flag for replacement

5. **Quality Score movers**:
   - Keywords whose QS dropped ≥ 2 points this period

6. **Charts (Chart.js, dark theme)**:
   - Daily spend + conversions (dual axis)
   - CPL trend line with target band
   - Campaign spend pie

7. **Recommendations** (prioritized, each with expected impact $):
   - Immediate (this week)
   - Short-term (next 2 weeks)
   - Medium-term (this month)

**Output:**
- `05-google-ads/reports/ads-report-[date-range].html` — full ads-audit dark design
- `open` after writing

No script names, no account IDs in the footer.
