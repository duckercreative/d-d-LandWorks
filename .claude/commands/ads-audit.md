---
description: Full Google Ads audit — account architecture, bidding, keywords, negatives, ad copy, landing pages, Quality Score
argument-hint: [focus: full|structure|keywords|copy|landing|negatives|bidding]
---

Run the full Google Ads audit using the `google-ads-strategy`, `google-ads-keywords`, and `google-ads-copy` skills.

Focus: $ARGUMENTS (default: `full`)

**Reference campaign structure (from CLAUDE.md, must audit against this):**
1. Emergency Repair — 40% budget — 24/7
2. AC & HVAC Repair — 25%
3. Installation & Replacement — 20%
4. Maintenance & Tune-Up — 10% (seasonal)
5. Commercial HVAC — 5%

**Read first:**
- `05-google-ads/75degreeacads.csv` — current account export
- `05-google-ads/google-ads-strategy.md`
- `05-google-ads/google-ads-campaign-1-emergency-repair.md`
- `05-google-ads/landing-page-updates.md`
- Master sheet tabs: Google Ads – Campaigns / Keywords / Ad Copy / Negative Keywords

**Audit scope per focus:**

**structure** — 5-campaign check, ad group granularity, Phase 1/2/3 bidding alignment, budget split vs. benchmarks (CLAUDE.md)

**keywords** — Using `google-ads-keywords` skill:
- Match-type progression vs. 6 intent categories
- Texas-specific high-value keywords present (Houston, Katy, Sugar Land, etc.)
- Search term report: top 50 search terms — any to add as exact? any to negative?
- Cannibalization: same keyword in multiple ad groups

**copy** — Using `google-ads-copy` skill:
- RSA: ≥ 11 headlines per ad group, ≥ 4 descriptions
- Headline formulas matched (emergency/price/trust/CTA)
- All extensions active: sitelinks ≥ 6, callouts ≥ 8, structured snippets, call extension, location extension, lead form
- Ad strength: all Good/Excellent?

**landing** — CRO check per landing page (pulls in `cro-strategy` skill):
- Phone in hero, sticky mobile bar, TACLA72152E visible, AggregateRating schema, form ≤ 4 fields, trust strip
- Page speed: run a curl + PageSpeed API check
- Message match: LP H1 must match ad headline keyword theme

**negatives** — 6-category negative architecture, missing categories, conflict with legit traffic

**bidding** — Current bid strategy vs. Phase 1 (Max Clicks, low budget) → Phase 2 (Max Conv, after 30 conv) → Phase 3 (tCPA)

**Scoring:**
Score each area /10, overall /100. Below 70 = red, 70-85 = orange, 85+ = green.

**Output:**
- Dark HTML report: `05-google-ads/reports/ads-audit-[date].html` — use the canonical ads-audit dark design (this is literally the reference file name in CLAUDE.md)
- Markdown summary: `05-google-ads/reports/ads-audit-[date].md`
- Prioritized fix queue ordered by: Wasted Spend recovery → CPL reduction → Scale unlock

`open` the HTML after writing.
