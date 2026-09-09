---
description: Review management — pull latest GBP reviews, draft responses, generate new review-request templates
argument-hint: [mode: respond|request|audit|report]
---

Run the review management workflow using the `review-strategy` skill.

Mode: $ARGUMENTS (default: `audit`)

**KPI targets (from CLAUDE.md):**
- Month 3: 60+ reviews, avg 4.8+
- Month 6: 120+ reviews, avg 4.9+

**Mode: `audit` (default)**
- `python3 04-gmb/scripts/gmb_reviews.py --pull-latest` — fetch live reviews
- Summarize: total count, avg rating, new since last pull, unreplied count, 1–3★ count
- Flag any unreplied review > 24h old as **critical**
- Print the AggregateRating snippet (value, count) to paste into homepage schema
- Save to `04-gmb/data/reviews-[date].json` + summary markdown

**Mode: `respond`**
For every unreplied review in the pull:
- Read the review text, rating, reviewer name
- Draft a response following the `review-strategy` skill framework:
  - 5★ → thank by name, mention specific service/neighborhood from their text, 1-line reinforcement, no phone
  - 4★ → thank + acknowledge improvement note + offer to follow up offline
  - 1–3★ → empathy first, take ownership, offer direct contact (713-598-2737 + manager name), keep public-facing reply brief, move detail offline
- Output each response as: `review-id | rating | suggested-reply | ready-to-paste`
- Save to `04-gmb/data/review-responses-[date].md`
- Optional: `--auto-post` will push responses via the GMB API after user approves each

**Mode: `request`**
Generate review-request assets:
1. SMS template (160 chars, direct GBP review link)
2. Email template (subject + body, with GBP review link)
3. Post-service printable card (QR code to GBP review, tagline)
4. Technician ask script (what the tech says before leaving the job)
5. Drip sequence: Day 0 (SMS), Day 2 (email), Day 5 (final SMS)

All use the short GBP review link from `project_gbp_identifiers.md`.

**Mode: `report`**
Generate full review health report at `08-reporting/monthly/[YYYY-MM]/reviews-[date].html` (YYYY-MM is the month of [date]; ads-audit dark style):
- KPI cards: total, avg rating, unreplied, this-month-new, negative-ratio, reply-rate
- Rating distribution chart (Chart.js)
- Time-series of review velocity (last 90 days)
- Top keywords appearing in reviews (what customers value)
- Recent 5 reviews preview
- Action items ordered by urgency

`open` the HTML after writing.
