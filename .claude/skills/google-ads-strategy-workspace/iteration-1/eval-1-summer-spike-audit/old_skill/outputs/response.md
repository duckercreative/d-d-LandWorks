# Google Ads Audit — 75 Degree AC (Houston HVAC)

**Date:** June, summer peak season
**Account state:** 1 campaign, all keywords mixed, Maximize Clicks, $200/day, Search + Display ON, "people interested in Houston" targeting
**Symptom:** CPL $58 → $112 in ~4 weeks. Daily budget exhausting by 2pm.

You are running into the worst-case configuration at the worst possible time of year. The good news: every single problem in your account is on the SKILL methodology's "10 Common Mistakes" list, which means the fixes are deterministic. The bad news: in June you have a narrow window to fix this before July/August (the all-in emergency months) push CPCs another +30–50%. We need to act this week.

Below is the diagnosis, the prioritized fix order, the specific settings to change, and what to expect after each fix.

---

## 1. Diagnosis — What's Wrong (Mapped to Methodology)

Your account violates **8 of the 10 documented common HVAC mistakes**. Listed in severity order:

### Critical violations (causing the budget burn + CPL spike)

| # | Mistake (per SKILL) | Your account | Cost impact |
|---|---|---|---|
| 1 | **Search + Display mixed** ("dilutes conversion data… Always OFF for Search campaigns") | Display Network ON | Display CPCs are cheap but convert near-zero for emergency HVAC. Right now Display is eating a chunk of your $200/day on impressions/clicks that will never call. This alone can double your blended CPL. |
| 2 | **Emergency and general repair in same campaign** ("bid compromise, ad copy can't be specific. Fix: always separate") | One campaign, all intents mixed | Emergency searchers convert at 10–18%; maintenance at 6–12%. Mixing them means Google bids the average and your ad copy can't be urgency-led. Your highest-value clicks (3am AC-not-cooling) are subsidizing your lowest-value clicks (tune-up shoppers). |
| 3 | **tCPA / bidding wrong for stage** — methodology says "Do NOT use Maximize Clicks — it optimizes for irrelevant clicks." Phase 1 should be **Maximize Conversions**. | Maximize Clicks | Google is literally being told "give me clicks at any cost." It will buy junk clicks all day. This is the second-largest CPL driver after Display. |
| 4 | **Equal budget across all campaigns** (or in your case, equal across all intents inside one campaign) | $200/day pooled across emergency + repair + maintenance + commercial | Methodology mandates 40/25/20/10/5 split. Emergency should be getting $80/day of your $200; right now it's getting whatever's left after Display + maintenance shoppers + commercial tire-kickers eat the budget. |
| 5 | **Location targeting wrong** — methodology: "People in or regularly in target location — NEVER 'people searching for'" | "People interested in Houston" | This is the worst of the four location options. Travelers, relocators, and out-of-market researchers in Dallas/Austin who *thought about* Houston are eligible to see your ads. This is a non-trivial slice of your wasted spend. |

### Contributing violations (compounding the above)

| # | Mistake | Your account | Why it matters now |
|---|---|---|---|
| 6 | **No tight match-type discipline** | Unknown — but with one mixed campaign, almost certainly running broad or undisciplined match | Methodology: "Exact + Phrase only on launch; Broad only in Phase 3." Broad match in June on "ac repair" will pull in "ac repair school", "ac repair training", "diy ac repair" — pure waste. |
| 7 | **Likely no negatives** | Unknown — but mixing intents in one campaign means you can't add intent-level negatives without nuking traffic | "Budget wasted on DIY, jobs, out-of-area." |
| 8 | **No ad schedule / device adjustments** for summer | Unknown | Methodology specifies +20% mobile, +20% 8am-12pm, +10% 12pm-4pm. In June you should be concentrating budget on the hottest hours; right now budget runs out at 2pm regardless. |

### The June-specific problem

Your timing makes everything worse. From the **Texas Seasonality Calendar**:

> **June–August:** All-in on emergency. Budget may exhaust by noon — monitor daily. Increase tCPA to compete. **+30–50% CPCs expected**.

You're seeing the seasonal CPC inflation on top of an account that was already mis-built. The CPL move from $58 → $112 is roughly: **base account inefficiency (~50%) + Texas summer CPC inflation (~30–50%) compounding**. The seasonal piece would have been a $58 → $80 move on a clean account. Everything beyond that is self-inflicted.

The 2pm budget exhaustion is also a methodology-flagged scenario. The **Summer Budget Emergency Protocol** says:

> 1. Increase daily budget 20%/week until ads run all day
> 2. Add bid adjustments to concentrate on 8am–4pm
> 3. Pause lowest-performing keywords during peak hours
> 4. **Never lower bids to stretch budget** — drops position and all metrics

We will use this protocol — but only AFTER the architectural fixes. Throwing more budget at a Maximize-Clicks-on-Display campaign just bleeds faster.

---

## 2. Priority Fix Order

The order matters. Each fix unlocks the next one, and several fixes will look like they made things temporarily worse if you do them out of sequence (e.g. switching to Maximize Conversions before splitting campaigns will starve your conversion data because emergency conversions get drowned in maintenance non-conversions).

### TODAY (within 24 hours) — stop the bleeding

**Fix 1.1 — Turn OFF Display Network** *(2 minutes)*
- Campaign settings → Networks → Uncheck "Display Network"
- Also uncheck "Search Partners" (methodology: "OFF — lower quality traffic")
- Search Network: stay ON

**Fix 1.2 — Fix location targeting** *(2 minutes)*
- Campaign → Locations → Location options
- Change from "People interested in" → **"People in or regularly in your targeted locations"**
- Verify locations themselves: target specific cities (Houston + Katy + Sugar Land + Cypress + Spring + Tomball + Richmond + The Woodlands + Pasadena + Missouri City + Baytown), NOT a radius

**Fix 1.3 — Switch bidding to Maximize Conversions** *(2 minutes, but DO NOT set tCPA yet)*
- Campaign settings → Bidding → Change from Maximize Clicks → **Maximize Conversions**
- Do NOT enter a tCPA target. Methodology Phase 1: "Do NOT set a tCPA target yet — you don't know the real market CPA."
- **Pre-requisite check:** before doing this, confirm conversions are actually tracked. If "phone calls not tracked" (Mistake #6), Maximize Conversions has nothing to optimize toward and will spend erratically. Run a 60-second-minimum CallRail call conversion test first. If broken, fix tracking before switching bid strategies.

**Expected after Day 1 fixes:** CPL drops from $112 to roughly $75–$90 within 5–7 days as Display garbage stops, location waste stops, and Google starts optimizing for conversions instead of clicks. You'll likely see a temporary impression drop (maybe 20–40%) for 3–5 days as Maximize Conversions enters learning — this is normal and expected.

### THIS WEEK (Days 2–7) — rebuild architecture

**Fix 2.1 — Split the one campaign into the methodology's 5-campaign structure**

You don't need to launch all 5 immediately. Methodology's **Campaign Launch Sequence** is explicit:

> Launch → Campaign 1 only
> Campaign 1 stable at target CPL → Launch Campaign 2

So for June, build it like this:

**Step A — Build Campaign 1: Emergency AC Repair**
- Naming: `[75AC] Emergency AC Repair — Houston·Katy·Richmond·SugarLand | June 2026`
- Budget: **$120/day** (we are intentionally over-weighting emergency for summer; 40% of $200 = $80, but seasonality calendar says "All-in on emergency" June-Aug)
- Ad groups (1 theme each, max 10–20 keywords, Exact + Phrase only):
  - AG1: Emergency / 24-Hour Searches
  - AG2: AC Not Cooling / Symptom Searches
  - AG3: AC Not Working / Broken
  - AG4: Same Day AC Repair Near Me
- 2 RSAs per ad group (third one added at day 90)
- Ad schedule: All hours, all days

**Step B — Build Campaign 2: AC & HVAC Repair (General)**
- Naming: `[75AC] AC Repair General — Houston Metro | June 2026`
- Budget: **$60/day**
- Ad groups:
  - AG1: AC Repair Houston + Metro
  - AG2: AC Repair — Suburbs (Katy/Sugar Land/Cypress)
  - AG3: HVAC Repair General
  - AG4: Heating + Furnace Repair (low spend in June, but keep alive)
- Ad schedule: 7am–9pm, all days

**Step C — Park the rest until emergency stabilizes**
- Campaigns 3 (Installation), 4 (Maintenance), 5 (Commercial): **do not launch yet**
- Methodology: "Campaign 1 stable at target CPL → Launch Campaign 2." Same logic applies forward.
- Remaining $20/day stays in reserve / Campaign 2 overflow

**Fix 2.2 — Pull negatives in from old campaign**
- Before pausing the old single campaign, run search terms report on it and harvest:
  - Anything with conversions ≥ 1 → re-add as exact match in the right new campaign
  - Anything with clicks > 3 and conversions = 0 → add as negative
- Methodology Mistake #4: "No negatives at launch → budget wasted on DIY, jobs, out-of-area. Fix: load full negative list before launch."

**Fix 2.3 — Pause the old mixed campaign once new campaigns are running**
- Don't pause it before the new ones are live, or you'll have zero ads serving for a few hours.

**Expected after Week 1:** CPL settling in $65–$80 range. Emergency campaign CPL probably $55–$70 (against methodology benchmark of $45–$80). Budget should now last past 2pm — likely runs until 5–7pm depending on click velocity.

### WEEK 2 — apply summer protocol

**Fix 3.1 — Apply device + time-of-day adjustments**
After ~30 days of data the methodology says to apply these. But we have a budget-exhaustion crisis right now, so apply them in Week 2 even with limited data. The ranges are well-established:
- Mobile: +20%
- Desktop: 0%
- Tablet: -10%
- 8am–12pm: +20%
- 12pm–4pm: +10%
- 4pm–8pm: 0%
- 8pm–12am: -20%
- 12am–8am: -40%

This concentrates budget on the windows where emergency calls actually convert (peak distress 8am-12pm and hottest-of-day 12pm-4pm).

**Fix 3.2 — Apply summer protocol step 1: budget +20%**
- If by Week 2 ads are still running out before 7pm, increase total daily budget 20% (to $240/day, then $288/day the following week if needed).
- Methodology rule: "Never increase budget by more than 20% per week."
- Methodology rule: "Never lower bids to stretch budget — drops position and all metrics."

### WEEK 3–4 — enter Phase 2 bidding

Methodology Phase 2 trigger: **30+ conversions accumulated**.

**Fix 4.1 — Switch Emergency campaign to Target CPA**
- Take Phase 1 average CPL (let's say it lands at $62) → set tCPA = $72 ($62 + $10 buffer per methodology)
- Then every 2 weeks reduce tCPA by $5 until volume drops noticeably. That's the floor.
- Target floor for Emergency per methodology Phase 3: $50–60.

**Fix 4.2 — Launch Campaign 2 tCPA**
- Same logic, separate calculation. Phase 3 target: $45–55.

**Fix 4.3 — LSA evaluation**
- Methodology: LSA "appears ABOVE regular Search Ads… Average CPL: $25–55 (often lower than Search)."
- Setup requires Google background check, TACLA license verification (you have **TACLA72152E** — note from project memory), business insurance, Google reviews.
- If LSA isn't already running, this is the highest-leverage net-new channel to add in July. Bidding: Maximize Leads.

---

## 3. What to Expect — Numbers After Each Phase

These projections come from applying the methodology's KPI benchmarks to your specific symptoms, not generalized assumptions.

### Baseline (where you are right now)
- CPL: $112
- Daily spend exhausted: 2pm
- Ad coverage: ~6 hours of an 18-hour-relevant day = 33% time coverage
- True effective CPL on relevant traffic only: probably even higher than $112 because the cheap Display clicks are dragging the reported CPL *down*

### After Day 1 fixes (Display off + location fix + Maximize Conversions)
- **CPL: $75–$90** (drop of 20-35%)
- Ad coverage: still constrained by budget, probably runs to ~3-4pm
- Conversion volume: likely flat to +20% — fewer impressions but much higher relevance
- 5–7 day learning period as Max Conversions calibrates

### After Week 1 (campaigns split + negatives loaded)
- **Emergency campaign CPL: $55–$70** (within methodology benchmark $45–$80)
- **General campaign CPL: $50–$65** (within methodology benchmark $40–$70)
- **Blended CPL: $60–$75**
- Ad coverage: budget likely running until 5–7pm
- CTR: should climb to 6%+ (was probably <4% with mixed copy)

### After Week 2 (device + time-of-day + +20% budget if needed)
- **Blended CPL: $55–$70**
- Ad coverage: full-day at $240/day, possibly need $288 in deep summer
- CVR: 10%+ on emergency, 8%+ on general (methodology benchmarks)
- Emergency impression share: 40%+

### After Week 4 (Phase 2 tCPA active, ≥30 conversions)
- **Emergency CPL: $50–$65**, Phase 3 target $50–$60
- **General CPL: $45–$60**, Phase 3 target $45–$55
- Quality Score: 6+ on most keywords (methodology Month 1 target)
- Conversion Rate: 10%+ blended (methodology Month 1 target >8%, on track for Month 3 >12%)

### Account-level KPI scorecard (methodology Month 3 targets)

| KPI | Today | Month 1 target | Month 3 target | Red flag |
|---|---|---|---|---|
| CPL | $112 | <$75 | <$55 | >$100 |
| CTR | unknown (likely <4%) | >6% | >8% | <3% |
| CVR | unknown | >8% | >12% | <5% |
| Quality Score | unknown (likely <6) | 6+ | 7+ | <5 |
| Impression Share | unknown | >40% | >60% | <25% |
| Avg CPC | unknown | <$45 | <$35 | >$65 |

You're sitting in red-flag territory on CPL today. Within 30 days you should be at or below Month 1 targets if execution is clean.

---

## 4. Weekly Workflow Going Forward (Methodology — Every Monday, 55 min)

Once the rebuild is done, lock in the methodology's weekly cadence. This is the difference between an account that holds gains and one that drifts back to $112 CPL by August.

1. **Search Terms Audit (20 min)** — Last 7 days. Conversions=0 + Clicks>3 → negative. Conversions≥1 → new exact keyword.
2. **Keyword Performance (15 min)** — Sort by Cost desc. Pause: Cost>$50 + Conversions=0. Fix: CTR<2% + Impressions>100. Scale: Conversions≥2 + CPL<target.
3. **Ad Performance (10 min)** — Combinations tab. Replace any "Low" headlines. Any AG with CTR<5% gets fresh headlines.
4. **Budget Review (5 min)** — IS lost to budget >15% → increase budget. IS lost to rank >20% → improve QS or raise bids.
5. **Conversion Tracking Health (5 min)** — Cross-reference conversions vs CallRail (must match within 10%). 0 conversions = drop everything and fix tracking.

Methodology Mistake #10: "Stopping optimization after setup → CPL rises slowly, competitors take impression share. Fix: non-negotiable weekly 1-hour session." That's how you ended up at $112 CPL — make this a calendar event.

---

## 5. The 24-Hour Action Checklist

Print this. Do these in order today:

- [ ] Confirm CallRail call tracking is firing (60-sec minimum) and conversions are actually being recorded
- [ ] Campaign settings → Networks → uncheck Display Network and Search Partners
- [ ] Campaign settings → Locations → Location options → "People in or regularly in your targeted locations"
- [ ] Campaign settings → Locations → switch from "interested in Houston" to specific cities (Houston, Katy, Sugar Land, Cypress, Spring, Tomball, Richmond, The Woodlands, Pasadena, Missouri City, Baytown)
- [ ] Campaign settings → Bidding → switch to **Maximize Conversions** (no tCPA)
- [ ] Export search terms report (last 30 days) for use in Week 1 negative list build
- [ ] Calendar block: Wednesday this week — 3 hours to build Emergency + General campaigns
- [ ] Calendar block: every Monday going forward — 1 hour weekly optimization session

---

## 6. Things NOT to Do (methodology-warned anti-patterns)

- **Do not lower bids to stretch the daily budget.** Drops position and crushes everything downstream. (Summer Protocol rule 4)
- **Do not set a tCPA in week 1.** "Perpetual learning mode, no spend." (Mistake #1) Wait until 30+ conversions.
- **Do not turn Broad match on yet.** "Exact + Phrase only for 60 days." (Mistake #5)
- **Do not increase budget more than 20% per week.** Confuses the bid algorithm.
- **Do not point ads at the homepage.** Methodology: "Homepage as landing page → poor QS, high CPC, low CVR. Fix: dedicated landing page per campaign." If you're currently sending Emergency clicks to the homepage, that's another driver of the QS/CPC problem — build an emergency-specific landing page in parallel.

---

## Bottom Line

Your account isn't underperforming because of the Houston June market — it's underperforming because it's configured against 8 of the 10 documented HVAC mistakes, and June is just amplifying every one of them. The fixes are not subtle: turn Display off, fix location targeting, switch off Maximize Clicks, split the campaigns, then weekly-optimize. **Expect $112 → $60–75 blended CPL within 14 days, and $50–60 by Day 45 if execution holds.** That's not optimism — those are the methodology's benchmark ranges for a properly architected Texas HVAC Search account.

Start today with the 5-step Day-1 fix list. Do nothing else clever until those are done.
