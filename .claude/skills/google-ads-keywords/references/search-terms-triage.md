# Search Terms Triage — Decision Tree

Run this every Monday. Filter Search Terms report by Last 7 Days.

```
For each search term:
│
├── Did it convert? (1+ conversion in period)
│     YES → Is it already a keyword?
│            YES → leave it alone (already counted)
│            NO  → ADD as new Exact match keyword (or Phrase if Phase 1)
│     NO  → continue
│
├── Did it spend > $30 with 0 conversions AND >5 clicks?
│     YES → Is it relevant to your service?
│            YES → ad/LP problem, don't negative yet — fix the creative
│            NO  → ADD as negative
│     NO  → continue
│
├── Is it junk traffic? (jobs, parts, DIY, out-of-area, warranty, school)
│     YES → ADD as negative (use Account-level shared list if applicable across campaigns)
│     NO  → continue
│
└── Any clicks but <$30 spend, 0 conversions?
      → Leave it. Insufficient data — re-evaluate next week.
```

## Worked Examples

### Example 1: `how to fix my ac youtube`
- Converted? No
- Spent > $30 with >5 clicks? Likely yes by week 2
- Junk? Yes (DIY/YouTube intent)
- **Action:** Add `youtube` and `how to fix` as account-level negatives

### Example 2: `ac repair richmond va`
- Converted? No
- Junk? Yes (out-of-state)
- **Action:** Add `virginia`, `va`, `richmond va` as account-level negatives

### Example 3: `commercial ac repair downtown houston`
- Converted? Yes ($68 CPL, 1 conv from 4 clicks)
- Already a keyword? Probably not, since it's specific
- **Action:** Add as Exact-match keyword in Campaign 5 Commercial
