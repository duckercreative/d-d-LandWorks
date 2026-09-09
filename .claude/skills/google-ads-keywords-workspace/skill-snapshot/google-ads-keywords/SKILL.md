---
name: google-ads-keywords
description: >
  Google Ads keyword methodology for HVAC companies — 6 intent categories, match type
  progression, negative keyword architecture, Texas-specific high-value keywords,
  search term auditing, and campaign-to-keyword mapping rules.
  Activates when building keyword lists, adding keywords, reviewing search terms, or managing negatives.
version: 1.0.0
client: 75 Degree AC
---

# Google Ads Keywords — HVAC (Texas Market)

## The 6 HVAC Keyword Intent Categories

Every keyword must be classified before campaign assignment. Wrong placement = wasted spend.

### 1. Emergency Intent → Campaign 1 (AG1, AG3, AG4)
Person is in crisis right now. Highest bids. Converts within minutes.
```
emergency ac repair houston
emergency hvac repair near me
ac not working houston
24 hour ac repair
ac broke down
no ac in house
same day ac repair near me
ac repair today
weekend ac repair
24/7 hvac near me
24hr ac repair
```

### 2. Symptom Intent → Campaign 1 (AG2) — separate ad group
AC is running but something is wrong. Converts same day. Slightly lower bids than emergency.
```
ac not cooling
ac blowing warm air
ac running but not cooling
ac not blowing cold air
ac making noise
ac leaking water
ac unit not turning on
ac stopped working
ac making loud noise
ac leaking water inside
```

### 3. General Repair Intent → Campaign 2
Need repair, not necessarily urgent. May shop around.
```
ac repair houston
hvac repair near me
air conditioning repair katy tx
ac repair service houston
```

### 4. Installation/Replacement Intent → Campaign 3
Major purchase decision. Longer cycle. Landing page needs trust + consultation offer.
```
ac installation houston
new ac unit houston
ac replacement cost
central ac installation
ductless mini split installation
best ac unit for houston
hvac replacement houston
```

### 5. Maintenance Intent → Campaign 4
Planned, proactive. Seasonal timing matters.
```
ac tune up houston
ac maintenance service
hvac maintenance plan
ac inspection houston
pre-season ac service
```

### 6. Commercial Intent → Campaign 5
High ticket, longer sales cycle, B2B decision maker.
```
commercial ac repair houston
commercial hvac contractor
office building ac repair
commercial hvac maintenance contract
```

---

## Match Type Strategy

### Match Type Progression by Phase

| Phase | Match Types | Why |
|---|---|---|
| Launch (Month 1) | Exact + Phrase only | Control spend, build clean data |
| Growth (Month 2–3) | Exact + Phrase + selective Broad | Expand reach on proven themes |
| Scale (Month 4+) | All three with tight negatives | Maximize volume while protecting CPL |

### Exact Match `[keyword]`
Use for: Proven best performers, high-intent specific searches.
```
[emergency ac repair houston]
[ac not cooling houston]
[24 hour ac repair katy tx]
```
Control: Only shows for this exact query and close variants.

### Phrase Match `"keyword"`
Use for: Variations around a core intent theme.
```
"emergency ac repair"
"ac not cooling"
"24 hour ac repair houston"
```
Shows for: "emergency ac repair houston tx", "best emergency ac repair near me houston"

### Broad Match
Use ONLY after 60+ conversions AND solid negative keyword lists.
Risk: Will match to irrelevant queries, burns budget fast on new campaigns.
When to use: Phase 3 scaling to discover new converting queries.

---

## Negative Keyword Architecture

Negatives are as important as positive keywords. Build in layers.

### Campaign-Level Negatives (apply to ALL ad groups)
```
# DIY / Informational
how to, diy, tutorial, youtube, guide, manual, diagram, video
repair yourself, do it yourself

# Jobs / Hiring
jobs, career, hiring, salary, employment, hvac jobs, technician jobs, work for

# Wrong Product
window ac, portable ac, car ac, auto ac, rv ac, boat ac
window air conditioner, vehicle ac

# Parts Only
ac parts, hvac parts, refrigerant only, freon only, ac filter
parts store, supply house

# Out of Area (add any city you don't serve)
dallas, austin, san antonio, fort worth
```

### Ad Group-Level Negatives (cross-contamination prevention)

**Emergency AG → exclude maintenance terms:**
```
tune up, maintenance, inspection, annual service
service plan, service contract
```

**Maintenance AG → exclude emergency terms:**
```
emergency, broken, not working, not cooling
24 hour, same day
```

**Installation AG → exclude repair terms:**
```
repair, fix, broken, not working, not cooling
emergency, same day repair
```

### The 3 Negatives Most HVAC Managers Miss
1. `school` — "hvac school near me", "ac repair training" waste budget
2. `warranty` — "ac still under warranty" = they won't pay you
3. `richmond virginia` / `richmond va` — if targeting Richmond TX, Google matches to Richmond VA

### Weekly Negative Updates
Every Monday: Download Search Terms report → add irrelevant queries as negatives.
This is non-negotiable for maintaining healthy CPL.

---

## Texas-Specific High-Value Keywords

### Emergency — Bid Aggressively
```
emergency ac repair houston
emergency ac repair katy tx
emergency ac repair sugar land tx
24 hour ac repair houston
24 hour ac repair katy tx
ac not working houston
ac repair today houston
ac broke down houston
emergency hvac repair near me
same day ac repair houston
```

### Symptom — Great CPL, Lower Competition
```
ac not cooling houston
ac not blowing cold air houston
ac running but not cooling houston
ac blowing warm air houston
ac stopped working houston
ac making loud noise houston
ac leaking water inside houston
ac unit not turning on houston
```

### High-Ticket Installation
```
new ac unit houston
ac replacement cost houston
central ac installation houston
best ac unit for houston
hvac replacement houston
ductless mini split installation houston
```

### Suburb Modifiers to Add to Core Keywords
- Katy TX / Katy Texas
- Sugar Land TX
- Cypress TX
- The Woodlands TX
- Spring TX
- Tomball TX
- Missouri City TX
- Richmond TX
- Pearland TX

---

## Keyword Research Process

### Step 1 — Seed Keyword List
8–10 seeds per service line:
```
Emergency: emergency ac repair, ac not working, 24 hour ac repair, broken ac
Repair: ac repair houston, hvac repair, air conditioning repair
Install: ac installation, new ac unit, ac replacement
Maintenance: ac tune up, ac maintenance, hvac service plan
```

### Step 2 — Google Keyword Planner
- Enter all seeds → Discover new keywords
- Export CSV (use Apr 2025–Mar 2026 date range for seasonality)
- Filter: Remove < 10 searches/month
- Priority: 3-month trend > absolute volume for new campaigns

### Step 3 — Cluster by Intent
Group by intent + similarity:
- Volume ≥ 50/month → exact match priority
- 3-month trend ≥ 0% (declining keywords lose money)
- Competition Low/Medium = opportunity; High = need strong QS

### Step 4 — Competitor Keyword Gap (SEMrush/Ahrefs)
- Enter top 3 competitor domains → Paid Keywords report
- Find what they're bidding on that you're not
- Filter to keywords matching your service intent

### Step 5 — Search Terms Audit (ongoing, every Monday)
- After 2 weeks live: Download Search Terms report
- Winners (converted): Add as exact match
- Losers (clicked, no conversion): Add as negatives

---

## Keyword Mapping Rules

| Search Query Type | Ad Group Assignment | Match Type |
|---|---|---|
| emergency + [city] | Campaign 1, AG1 | Exact first, then Phrase |
| 24 hour / 24/7 / same day | Campaign 1, AG4 | Exact first, then Phrase |
| symptom (not cooling, blowing warm) | Campaign 1, AG2 | Phrase first |
| ac not working / broken | Campaign 1, AG3 | Exact first |
| ac repair + [city] no urgency modifier | Campaign 2, AG1/2 | Phrase |
| heating / furnace / heater repair | Campaign 2, AG4 | Phrase |
| ac installation / replacement | Campaign 3 | Phrase |
| tune-up / maintenance / inspection | Campaign 4 | Phrase |
| commercial + any service | Campaign 5 | Phrase |

**Critical Rule:** Heating keywords (heater repair, furnace repair, emergency heating) belong in Campaign 2 AG4 — NOT in the Emergency AC Repair campaign. Mixing dilutes ad relevance, hurts Quality Score, and creates ad-to-keyword mismatch.

---

## Quality Score by Keyword

Target QS:
- Emergency keywords: 7+
- General repair: 7+
- Installation: 6+

QS ≤ 4 after 100+ impressions → pause and fix:
- QS 1–3: Landing page experience issue
- QS 4–5: Ad relevance issue — keyword not in headlines
- QS 6: CTR issue — test stronger headline angles

Weekly audit: Google Ads → Keywords → Columns → Add: Qual. score, Landing page exp., Ad relevance, Exp. CTR
