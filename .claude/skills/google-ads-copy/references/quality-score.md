# Quality Score Optimization

QS directly affects CPC. The math:

| Quality Score | CPC vs. average | Real-dollar example |
|---|---|---|
| 10 | -50% | $25 click instead of $50 |
| 8 | -20% | $40 click instead of $50 |
| 6 | 0% (average) | $50 click |
| 4 | +25% | $62.50 click |
| 2 | +67% | $83.50 click |

A competitor at QS 4 paying $80/click can be outranked by you at QS 8 paying $40/click.

## The 3 QS Components — Diagnose by Score

**1. Expected CTR**
- Headlines that match query verbatim + emotional triggers + urgency words
- Audit: Is the keyword in at least 3 of your 15 headlines?

**2. Ad Relevance**
- Keyword appears in 2+ headlines AND mentioned in 1+ description
- Audit: Search the keyword in your RSA preview — is it visible in the rendered ad?

**3. Landing Page Experience**
- Match LP H1 to ad headline, fast load (<2.5s LCP), mobile-friendly, clear service confirmation
- Audit: Run PageSpeed Insights on the LP. Defer to `cro-strategy` for the full LP playbook.

## QS Diagnostic Tree

```
QS = 1–3 → Landing page problem
  → Check LCP <2.5s, mobile responsive, no popup blocking content
  → Check H1 matches ad headline keyword theme
  → Check page is relevant to keyword (not just homepage)

QS = 4–5 → Ad relevance problem
  → Confirm keyword appears in 2+ headlines
  → Confirm keyword appears in 1+ description
  → Confirm ad group is themed (not 30 unrelated keywords mashed together)

QS = 6 → CTR problem
  → Test stronger headline angles (urgency, social proof, specific price)
  → Add more headline variety so RSA can find higher-CTR combinations

QS ≤ 4 after 100+ impressions → pause + fix
```
