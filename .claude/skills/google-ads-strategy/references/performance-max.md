# Performance Max — When and How

**Run PMax once Search Campaign 1 is stable at target CPL** (typically Month 2). PMax needs Search conversion data to seed it; running PMax-first leaves the algorithm flying blind.

## Setup Rules

1. **Separate asset group per service line.** Repair behaves nothing like Installation — different intent, different audiences, different conversion paths. One asset group per service category prevents the algorithm from collapsing them into a single audience model that serves none of them well.
2. **Start at 25-30% of total monthly spend.** PMax needs 2-4 weeks of learning before performance stabilizes. Going too big too early just burns budget on the learning tax.
3. **Search themes (not generic keywords)** — treat them as audience hints, not match-type instructions. Provide 3-5 themes per asset group.
4. **Audience signals**: Customer match list (past customers), website visitors, in-market segments. NOT lookalike-only — those are too broad for HVAC.
5. **Negative-keyword list**: Apply your account-level negatives at the campaign level (PMax accepts them via support request or in the new self-serve UI as of late 2025).
6. **Disable Display partner placements** initially — review the Asset Insights report at week 2 and re-enable if Display is producing real conversions vs. last-click attribution noise.

## PMax KPI Floors

| Metric | Floor | Action if breached |
|---|---|---|
| Cost per booked job | <$95 | Audit asset group with worst CPL → tighten signals or pause |
| Conversion volume share | ≥20% of total | Increase budget; PMax is finding cheap inventory |
| Brand search cannibalization | <10% | Add brand terms to PMax negatives |

## Don't Run PMax When
- You haven't yet hit 30 Search conversions (no seed data → wasted spend)
- Total monthly spend is under $4K (PMax learning tax > value)
- Conversion tracking is unverified (PMax + bad tracking = invisible money fire)
