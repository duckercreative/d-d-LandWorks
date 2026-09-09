---
name: google-ads-strategy
description: >
  Google Ads strategy methodology for HVAC companies — 5-campaign account architecture,
  3-phase bidding progression, budget allocation, Texas seasonality calendar,
  LSA integration, weekly optimization workflow, and KPI benchmarks.
  Activates when setting up, auditing, scaling, or reporting on Google Ads campaigns.
version: 1.0.0
client: 75 Degree AC
---

# Google Ads Strategy — HVAC (Texas Market)

## Core Principle

Google Ads for HVAC is an emergency-first, urgency-driven channel. Emergency repair campaigns deliver the fastest ROI. Every other campaign should be funded AFTER emergency campaigns are stable and profitable.

---

## Account Architecture — 5-Campaign Structure

```
Google Ads Account
│
├── Campaign 1: Emergency AC Repair (40% of budget)
│   ├── AG1: Emergency / 24-Hour Searches
│   ├── AG2: AC Not Cooling / Symptom Searches
│   ├── AG3: AC Not Working / Broken
│   └── AG4: Same Day AC Repair Near Me
│
├── Campaign 2: AC & HVAC Repair — General (25% of budget)
│   ├── AG1: AC Repair Houston + Metro
│   ├── AG2: AC Repair — Suburbs (Katy/Sugar Land/Cypress)
│   ├── AG3: HVAC Repair General
│   └── AG4: Heating + Furnace Repair
│
├── Campaign 3: AC Installation & Replacement (20% of budget)
│   ├── AG1: AC Installation
│   ├── AG2: AC Replacement
│   ├── AG3: Mini-Split / Ductless Installation
│   └── AG4: Heat Pump Installation
│
├── Campaign 4: Maintenance & Tune-Up (10% of budget)
│   ├── AG1: AC Tune-Up / Maintenance
│   ├── AG2: HVAC Service Plans
│   └── AG3: Pre-Season Maintenance
│
└── Campaign 5: Commercial HVAC (5% of budget)
    ├── AG1: Commercial AC Repair
    ├── AG2: Commercial HVAC Installation
    └── AG3: Commercial Maintenance Contracts
```

**Campaign Naming Convention:**
```
[75AC] Emergency AC Repair — Houston·Katy·Richmond·SugarLand | April 2026
[75AC] AC Repair General — Houston Metro | April 2026
```

**Ad Group Rules:**
- 1 theme per ad group — never mix emergency with maintenance
- 10–20 keywords per ad group max
- 1–3 RSAs per ad group (start with 2, add third after 90 days)
- Exact + Phrase match only on launch; Broad only in Phase 3

---

## Bidding Strategy — 3-Phase Progression

### Phase 1 — No Conversion Data (Weeks 1–4)
**Strategy: Maximize Conversions (no tCPA)**

- Do NOT use Maximize Clicks — it optimizes for irrelevant clicks
- Do NOT set a tCPA target yet — you don't know the real market CPA
- Do NOT set max CPC caps — let Google find the optimal bid
- Budget: Minimum 10× expected CPA. If $50 CPL expected → $500/day ideal; $100/day works but learns slowly

### Phase 2 — 30+ Conversions (Month 2)
**Strategy: Maximize Conversions + Target CPA**

- Set tCPA at Phase 1 average CPA + $10 buffer
- Example: Phase 1 average CPL was $58 → Set tCPA at $68
- Every 2 weeks: reduce tCPA by $5 until volume drops noticeably (that's the floor)

### Phase 3 — 60+ Conversions/Month (Month 3+)
**Strategy: Target CPA (optimized)**

- Adjust tCPA per campaign based on job value
- Consider Target ROAS if you can attribute revenue to conversions

### tCPA Targets by Campaign

| Campaign | Phase 2 Start | Phase 3 Target |
|---|---|---|
| Emergency Repair | $70 | $50–60 |
| General Repair | $60 | $45–55 |
| Installation | $90 | $70–80 |
| Maintenance | $45 | $30–40 |
| Commercial | $120 | $90–100 |

---

## Campaign Settings — Critical Fields

### Networks
- Search Network: **ON**
- Search Partners: **OFF** — lower quality traffic
- Display Network: **OFF** — never mix with Search

### Location Targeting
- Target: Specific cities, NOT radius
- Location option: "People **in or regularly in** target location" — NEVER "people searching for"
- "People searching for" causes Dallas residents to see Houston AC ads

### Bid Adjustments by Location
- Houston core: 0% baseline
- Katy, Sugar Land, Cypress: +15%
- Lower-density areas: 0% or -10%

### Ad Schedule
- Emergency Campaign: All hours, all days
- General Repair: 7am–9pm, all days
- Installation/Replacement: 8am–8pm, Mon–Sat
- Maintenance: 8am–6pm, Mon–Fri

### Time-of-Day Bid Adjustments (after 30 days of data)
| Time | Adjustment | Reason |
|---|---|---|
| 8am–12pm | +20% | Peak distress calls — AC didn't cool overnight |
| 12pm–4pm | +10% | Hottest part of day — emergency spikes |
| 4pm–8pm | 0% | Still active |
| 8pm–12am | -20% | Lower conversion rate |
| 12am–8am | -40% | Very low volume |

### Device Adjustments
- Mobile: +20% — 70% of emergency HVAC searches are mobile
- Desktop: 0%
- Tablet: -10%

---

## Budget Allocation & Scaling

### Houston Market Budget Tiers

| Tier | Daily | Monthly | What You Get |
|---|---|---|---|
| Minimum | $100/day | $3,000 | Emergency campaign only, 2–4 leads/day |
| Recommended Starter | $200/day | $6,000 | Emergency + General Repair, 4–8 leads/day |
| Competitive | $400/day | $12,000 | All 5 campaigns, competitive impression share |
| Dominant | $1,000+/day | $30,000+ | Top IS across all service lines |

### Budget by Campaign (at $200/day)
- Campaign 1 (Emergency): $80/day
- Campaign 2 (General Repair): $60/day
- Campaigns 3–5: $20/day combined or $0 until Campaign 2 is stable

### Scaling Rules
- **Scale when:** Impression share < 60%, CVR > 10%, CPL below target
- **Don't scale when:** CPL above target, QS < 6, landing page converts poorly, search terms are polluted
- **Rule:** Never increase budget by more than 20% per week

### Campaign Launch Sequence
| Trigger | Action |
|---|---|
| Launch | Campaign 1 only |
| Campaign 1 stable at target CPL | Launch Campaign 2 |
| Campaign 2 stable | Launch Campaign 3 |
| Month 3 | Launch Campaign 4 (seasonal timing) |
| Month 4 + commercial confirmed | Launch Campaign 5 |

---

## Texas Seasonality Calendar

| Month | Action |
|---|---|
| January–February | Increase heating/furnace budget 30%, reduce maintenance, add heating keywords |
| March–April | Ramp AC maintenance NOW (lowest CPCs, pre-summer), push installation awareness |
| May | Increase all AC campaigns 25%, confirm landing page load speed, max IS on emergency |
| June–August | All-in on emergency. Budget may exhaust by noon — monitor daily. Increase tCPA to compete. +30–50% CPCs expected |
| September | Maintain summer budgets — Texas stays hot |
| October–November | Reduce AC 20–30%, ramp heating campaigns |
| December | Minimum AC spend, focus on emergency heating, full account audit |

### Summer Budget Emergency Protocol (July/August spikes)
1. Increase daily budget 20%/week until ads run all day
2. Add bid adjustments to concentrate on 8am–4pm
3. Pause lowest-performing keywords during peak hours
4. **Never lower bids to stretch budget** — drops position and all metrics

---

## Local Services Ads (LSA) — Run Alongside Search Ads

LSA appears ABOVE regular Search Ads. Google Guarantee badge significantly increases trust.

**LSA advantages for HVAC:**
- Average CPL: $25–55 (often lower than Search)
- Pay per lead, not per click
- Occupies position above your Search ads = 2 spots on page 1

**Setup requirements:**
- Google background check for technicians
- TACLA license verification
- Business insurance verification
- Google reviews (more = better LSA ranking)

**Bidding:** Use Maximize Leads — manual LSA bidding rarely outperforms.

---

## KPI Benchmarks — Texas HVAC

| Metric | Emergency | General Repair | Installation | Maintenance |
|---|---|---|---|---|
| Avg CPC | $30–$60 | $20–$45 | $15–$35 | $10–$25 |
| Avg CPL | $45–$80 | $40–$70 | $60–$100 | $30–$55 |
| Avg CVR | 10–18% | 8–14% | 5–10% | 6–12% |
| Avg CTR | 8–15% | 6–12% | 4–9% | 5–10% |
| Avg Job Value | $300–$1,200 | $200–$800 | $4,000–$12,000 | $150–$400 |

### Account-Level Targets

| KPI | Month 1 | Month 3 | Red Flag |
|---|---|---|---|
| CPL | <$75 | <$55 | >$100 |
| CTR | >6% | >8% | <3% |
| Conversion Rate | >8% | >12% | <5% |
| Quality Score | 6+ | 7+ | <5 |
| Impression Share | >40% | >60% | <25% |
| Avg CPC | <$45 | <$35 | >$65 |

---

## Weekly Optimization Workflow (Every Monday — 55 min)

### Step 1 — Search Terms Audit (20 min)
- Reports → Search Terms → Last 7 days
- Filter: Conversions = 0 AND Clicks > 3 → Add as negatives
- Filter: Conversions ≥ 1 → Add as new exact match keywords

### Step 2 — Keyword Performance (15 min)
- Sort by Cost descending
- Pause: Cost > $50 AND Conversions = 0
- Fix: CTR < 2% AND Impressions > 100 → rewrite ad or change match type
- Scale: Conversions ≥ 2 AND CPL < target → increase bid/budget

### Step 3 — Ad Performance (10 min)
- Combinations tab → flag "Low" rated headlines → replace
- Any ad group CTR < 5% → test fresh headlines
- No "Good" or "Excellent" RSA after 4 weeks → rewrite all 15 headlines

### Step 4 — Budget Review (5 min)
- Impression share lost due to budget > 15% → increase budget or tighten targeting
- Impression share lost due to rank > 20% → improve QS or raise bids

### Step 5 — Conversion Tracking Health (5 min)
- Verify conversions recorded are reasonable (0 = check tracking immediately)
- Cross-reference with CallRail data — must match within 10%

---

## 10 Common Mistakes — HVAC Google Ads

1. **tCPA too low at launch** → perpetual learning mode, no spend. Fix: Maximize Conversions first 30 days.
2. **Search + Display mixed** → dilutes conversion data. Fix: Always OFF for Search campaigns.
3. **Homepage as landing page** → poor QS, high CPC, low CVR. Fix: dedicated landing page per campaign.
4. **No negatives at launch** → budget wasted on DIY, jobs, out-of-area. Fix: load full negative list before launch.
5. **Broad match on new campaign** → ads serve for unrelated queries. Fix: Exact + Phrase only for 60 days.
6. **Phone calls not tracked** → tCPA has no data (HVAC customers call, not form-fill). Fix: CallRail + GTM, 60-sec minimum.
7. **Equal budget across all campaigns** → emergency doesn't get the budget it needs. Fix: 40/25/20/10/5 split.
8. **Ignoring Quality Score** → paying 25–50% more per click. Fix: weekly QS audit, intervene on any KW below 6.
9. **Emergency and general repair in same campaign** → bid compromise, ad copy can't be specific. Fix: always separate.
10. **Stopping optimization after setup** → CPL rises slowly, competitors take impression share. Fix: non-negotiable weekly 1-hour session.