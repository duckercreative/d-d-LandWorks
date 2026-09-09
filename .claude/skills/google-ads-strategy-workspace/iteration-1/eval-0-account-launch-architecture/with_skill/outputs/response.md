# 75 Degree AC — Google Ads Account Launch Plan
**Budget:** $6,000/mo (Recommended Starter tier) · **Phone:** (713) 598-2737 · **Market:** Houston, TX · **Conversion data on hand:** none

This is a deployable plan. Tick top-to-bottom — don't skip steps, especially in pre-launch. The plan is built around one core idea from the 2026 platform reality: **Google Ads is no longer a single-channel decision.** A complete HVAC account today is **Search + Performance Max + LSA running in concert**, each tuned to the part of the funnel it owns. Single-channel accounts leave 30-40% of bookable demand on the table.

---

## TL;DR — The 30-Second Answer

- **5 Search campaigns + 1-2 Performance Max + LSA**, but staged in over the first 90 days — not all on Day 1.
- **Day 1: Search Campaign 1 (Emergency) + LSA only.** That's it. Don't get cute.
- **Bidding starts on Maximize Conversions with NO tCPA.** You have zero data; setting a target now would force eternal learning mode.
- **PMax and LSA: stagger them.** LSA application goes in pre-launch (it can take 2-3 weeks to get verified, so file it Day 0). PMax does NOT launch until Search Campaign 1 has hit 30 conversions — typically Month 2.
- **Networks: Search ON, Search Partners OFF, Display OFF.** Always. No exceptions.
- **Location targeting: "Presence: people in or regularly in your targeted locations"** — never "Presence or interest". This single setting saves 10-20% of wasted spend.
- **At $6K/mo you're at the Recommended Starter tier:** expect 4–8 leads/day once the account is stable.

---

## 1. Account Architecture (the full 90-day target state)

```
75 Degree AC — Google Ads Account
│
├── SEARCH (40-55% of budget — highest intent)
│   ├── Campaign 1: Emergency AC Repair       (40% of Search)
│   │   ├── AG1: Emergency / 24-Hour
│   │   ├── AG2: AC Symptoms (not cooling, blowing warm)
│   │   ├── AG3: AC Broken / Not Working
│   │   └── AG4: Same-Day / Today / Now
│   ├── Campaign 2: AC & HVAC Repair General  (25%)
│   │   ├── AG1: AC Repair Houston Metro
│   │   ├── AG2: AC Repair Suburbs (Katy/Sugar Land/Cypress/Richmond)
│   │   ├── AG3: HVAC Repair General
│   │   └── AG4: Heating + Furnace Repair
│   ├── Campaign 3: AC Installation/Replacement (20%)
│   │   ├── AG1: AC Installation
│   │   ├── AG2: AC Replacement
│   │   ├── AG3: Mini-Split / Ductless
│   │   └── AG4: Heat Pump Installation
│   ├── Campaign 4: Maintenance/Tune-Up        (10%, seasonal)
│   └── Campaign 5: Commercial HVAC            (5%)
│
├── PERFORMANCE MAX (25-35% — discovery + retargeting)
│   ├── Asset Group 1: Repair (residential)
│   ├── Asset Group 2: Installation/Replacement
│   └── (Asset Group 3: Commercial — only at $20K+/mo, not for you)
│
└── LOCAL SERVICES ADS (15-25% — top-of-page lead-form)
    └── Categories: AC repair, AC install, Heating repair, Heating install
```

**Why 5 Search campaigns and not 1-2:** each campaign has its own bidding strategy, budget, ad schedule, and location adjustment. Mixing Emergency intent with Maintenance intent forces a bid compromise that hurts both. Emergency converts at 10-18% and tolerates a $30-60 CPC; Maintenance converts at 6-12% and dies above $25 CPC. They cannot share a budget.

**Why PMax is a separate channel, not "Search with images":** PMax controls its own bidding, signals, and audiences. Treating it as an additional ad group on top of Search is the most common 2026 setup mistake.

**Why LSA never lives in the Google Ads UI:** LSA is at `ads.google.com/local-services` with its own dashboard. It counts against the same total budget you're tracking, but is managed separately.

**Naming convention** (use across every campaign — makes monthly reports parseable):
```
[75AC] Search · Emergency AC Repair · Houston·Katy·SugarLand·Richmond | May 2026
[75AC] PMax · Repair Residential · Greater Houston | May 2026
[75AC] LSA · AC Repair · Houston Metro | May 2026
```

### Ad Group Rules (Search)
- **1 theme per ad group** — shared theme = better Quality Score because every keyword maps to the same headline.
- **10–20 keywords per ad group max** — beyond 20, Google can't match the right ad to the right query.
- **2–3 RSAs per ad group** — start with 2, add a third after 90 days for ad rotation testing.
- **Match types at launch: Phrase + Exact only.** Broad does not enter the picture for the first 60 days.

---

## 2. Budget Split — $6,000/mo

You are at the **Recommended Starter tier ($200/day).** Expect 4–8 leads/day once the account is stable and conversion tracking is verified.

| Allocation | Monthly | Daily | Notes |
|---|---|---|---|
| Search Campaign 1 — Emergency | $1,920 | $64 | Live Day 1 |
| Search Campaign 2 — General Repair | $1,200 | $40 | Goes live once Campaign 1 stable (Day 14–21) |
| Search Campaign 3 — Install/Replace | $480 | $16 | Paused first 30 days — re-enable Month 2 |
| LSA | $1,500 | $50 | Application filed Day 0; live as soon as Google verifies |
| Reserve / PMax seed (Month 2+) | $900 | $30 | Held back until Search has 30+ conversions |
| **Total** | **$6,000** | **$200** | |

**Important:** the Reserve line is *real budget*, not a contingency. It's pre-allocated to PMax once Search seeds it. If you're tempted to spend it on more Search keywords in Month 1, don't — that's how budgets get pulled forward and PMax launches starved.

**Daily-budget floor rule:** Maximize Conversions needs a daily budget of at least 10× expected CPL to learn at a reasonable pace. At an estimated $50-75 CPL, $64/day on Emergency is on the lean side of acceptable but workable. Anything below $500 total daily would learn 5× slower and I'd push back on the budget tier.

---

## 3. Bidding Strategy — 3-Phase Progression

**You are starting in Phase 1.** Don't skip ahead.

### Which Phase Am I In? (Diagnostic)
```
Per-campaign conversions in last 30 days:
   < 15  → Phase 1 (no signal yet)
   15-29 → Phase 1 → 2 transition
   30-59 → Phase 2 (introduce tCPA)
   60+   → Phase 3 (optimize tCPA, consider tROAS)
```

### Phase 1 — Weeks 1-4 (this is where you start)
**Strategy: Maximize Conversions, NO tCPA target.**

- ❌ Do **NOT** use Maximize Clicks. In 2026 it's actively harmful — bot/scraper click farms have gotten good enough at HVAC keywords that Max Clicks burns 15-30% of budget on non-human traffic.
- ❌ Do **NOT** set a tCPA. You don't know your CPA yet — guessing low forces eternal learning mode, guessing high wastes budget.
- ❌ Do **NOT** set max CPC bid caps. They cap reach during the exact peaks (heat waves, evenings) when conversion rates are highest.
- ✅ Daily budget floor = 10× expected CPL.

### Phase 2 — Month 2 (after 30+ conversions on a campaign)
**Strategy: Maximize Conversions + Target CPA.**

- Set tCPA at Phase 1 average + $10 buffer. (e.g. Phase 1 averaged $58 → set tCPA to $68.)
- Reduce tCPA by $5 every 2 weeks until volume drops noticeably — that's your floor.
- If volume drops by >25% on a tCPA cut, you cut too aggressively. Revert and try a $3 cut.

### Phase 3 — Month 3+ (60+ conversions/mo per campaign)
**Strategy: Target CPA (steady), or Target ROAS only if Enhanced Conversions for Leads is wired up with closed-job revenue feeding back.**

- Don't set tROAS without offline conversion uploads — you'll optimize for cheap leads regardless of close rate.

### Per-Campaign tCPA Targets (Houston market, May 2026)

| Campaign | Phase 2 starting tCPA | Phase 3 target |
|---|---|---|
| Emergency Repair | $70 | $50–60 |
| General Repair | $60 | $45–55 |
| Installation | $90 | $70–80 |
| Maintenance | $45 | $30–40 |
| Commercial | $120 | $90–100 |
| PMax (blended) | $65 | $45–55 |

These are the numbers you'll move toward — not the numbers you set on Day 1.

---

## 4. Should You Run Performance Max and LSA From Day 1?

**Performance Max: NO. Wait until Month 2.**

PMax needs Search conversion data to seed its audience model. Running PMax-first leaves the algorithm flying blind, and you'll burn 25-40% of PMax budget on the learning tax with nothing to show for it. The hard gate: **PMax does not launch until Search has hit 30 conversions.** For a $6K/mo account, that's typically Week 4-6.

When you do launch PMax:
1. **Separate asset group per service line** — Repair behaves nothing like Installation. Different intent, different audiences. One asset group per service category prevents the algorithm collapsing them into a single audience model that serves none of them well.
2. **Start at 25-30% of total monthly spend** — that's your $900 Reserve. Going larger out of the gate just amplifies the learning tax.
3. **Search themes (3-5 per asset group)** — treat them as audience hints, not match-type instructions.
4. **Audience signals:** Customer match list (past customers) + website visitors + in-market segments. Not lookalike-only — too broad for HVAC.
5. **Apply your account-level negatives at the campaign level** (PMax accepts these via the self-serve UI as of late 2025).
6. **Disable Display partner placements initially.** Review the Asset Insights report at week 2 and re-enable only if Display is producing real conversions.

PMax KPI floors once it's running:
- Cost per booked job <$95 → otherwise audit worst asset group
- Conversion volume share ≥20% of total → otherwise increase budget
- Brand search cannibalization <10% → otherwise add brand terms to PMax negatives

**Local Services Ads: YES — but file the application Day 0.**

LSA itself can take 2-3 weeks to get fully verified (background checks, insurance verification, license verification). File the application before you turn on a single Search campaign so it's live as soon as possible. LSA is the highest-ROI channel in the account when it works:

- CPL typically $25–55 in Houston (often half of Search CPL)
- Google Guarantee badge increases CTR ~40% vs. non-badged competitors
- Position above your own Search ads = two slots on page 1

LSA setup requirements (gather these on Day 0):
- Background check for technicians (each name on the account)
- TACLA72152E license verification (already on file for 75 Degree AC — confirmed)
- Business insurance verification ($1M+ general liability)
- Active Google reviews (recency matters more than count in 2026)

LSA bidding: **Maximize Leads, not manual.** Manual LSA bidding has rarely outperformed since the 2024 algorithm update.

LSA pause triggers (watch for these post-launch):
- Lead quality score <7 → service area mis-set, expanding too wide
- Dispute rate >15% → Google penalizes high-dispute accounts
- Booking-page CVR <10% → fix the booking flow before paying for more leads

**The 2025 LSA ranking factor update** matters for ongoing operations — LSA rank is now weighted toward (in order):
1. Review responsiveness (% of reviews you respond to, and how fast)
2. Profile completeness (services, hours, photos, license docs verified)
3. **Direct Booking adoption** — accounts with Direct Booking enabled get a ranking lift
4. Review velocity + recency (5 reviews this month beats 50 from 2023)
5. Dispute win rate

Build LSA review-response into the weekly workflow from Day 1.

---

## 5. Campaign Settings — The Critical Fields

These are the settings most managers miss or set wrong. Get them right at launch.

### Networks
- Search Network: **ON**
- Search Partners: **OFF** — partner inventory CVR is ~30% lower than Google.com proper. Same CPC, worse output. The math doesn't work.
- Display Network: **OFF** — never mix Display with Search. If you want Display reach, that's PMax's job.

### Location Targeting
- **Target specific cities, NOT radius:** Houston, Katy, Sugar Land, Cypress, Tomball, Spring, The Woodlands, Missouri City, Pearland, Richmond TX, Pasadena
- **Location option: "Presence: people in or regularly in your targeted locations"** — NEVER "Presence or interest." The "or interest" setting causes Dallas/Austin residents researching Houston HVAC to see your ads.
- **Excluded locations:** explicitly add Richmond VA, Houston MS, Houston BC. Google's geo-matching is occasionally weird on similarly-named cities and you'll see the bleed in search terms.

### Bid Adjustments by Location (apply after 30 days of data)
- Houston core: 0% baseline
- Katy, Sugar Land, Cypress: +10–15%
- Richmond TX (high-LTV, lower volume): +20%
- Lower-density / lower-CVR areas: -10% or removed

### Ad Schedule
| Campaign | Schedule | Rationale |
|---|---|---|
| Emergency | 24/7 | AC dies at 2am — be there |
| General Repair | 7am–9pm, all days | Most repair calls fall in business + early evening |
| Installation/Replacement | 8am–8pm, Mon–Sat | People don't book major purchases at midnight |
| Maintenance | 8am–6pm, Mon–Fri | Planned, business-hours intent |

### Time-of-Day Bid Adjustments (apply after 30 days of data)
| Time | Adjustment | Why |
|---|---|---|
| 8am–12pm | +20% | Distress calls peak — AC didn't cool overnight |
| 12pm–4pm | +10% | Hottest part of day → emergency spikes |
| 4pm–8pm | 0% | Steady volume |
| 8pm–12am | -20% | Lower CVR; calls tend to defer to morning |
| 12am–8am | -40% | Very low volume except true emergencies |

### Device Adjustments
- **Mobile: +20%** — 70%+ of emergency HVAC searches are mobile. Set this on Day 1.
- Desktop: 0%
- Tablet: -10%

---

## 6. Pre-Launch Checklist (do all of these BEFORE turning on a campaign)

- [ ] Conversion tracking wired: phone calls (CallRail + GTM, **60-second minimum call duration** as the conversion event), form submissions, booking page reach
- [ ] Enhanced Conversions for Leads turned **ON**
- [ ] **Auto-apply recommendations: turn OFF every recommendation that changes match types, adds keywords, or adjusts bidding strategy.** Leave only "fix typo" / "fix disapproved ads" type recommendations on. Google's auto-recommendations optimize for Google's revenue, not yours.
- [ ] Account-level negatives loaded (defer to `google-ads-keywords` for the full list)
- [ ] LSA application submitted (background check + insurance + license verification — TACLA72152E)
- [ ] Sitelinks, callouts, structured snippets, call asset, location asset all created (defer to `google-ads-copy`)
- [ ] Landing pages tested on mobile — LCP <2.5s, click-to-call in hero (defer to `cro-strategy`)
- [ ] CallRail dynamic number insertion verified on all PPC landing pages
- [ ] Google Business Profile linked to Google Ads account (Location asset)

### Launch Day (Search Campaign 1 only)
- [ ] Campaign 1 (Emergency) live with Maximize Conversions, no tCPA
- [ ] Geo: Houston + Katy + Sugar Land + Cypress + Richmond TX (cities, not radius)
- [ ] Location option: "Presence" only
- [ ] Schedule: 24/7
- [ ] Device: Mobile +20%
- [ ] Networks: Search ON, Partners OFF, Display OFF
- [ ] Search Terms report bookmarked for daily check (Week 1)

### Week 2
- [ ] Search Terms triage: add converters as exact, add junk as negatives
- [ ] Verify CallRail call recording is firing (listen to 5+ calls — confirm they're real, not robocalls)
- [ ] If conversions = 0 after $500 spend, check tracking before assuming a creative problem

### Month 2
- [ ] Phase 2 transition: set tCPA at Phase 1 average + $10
- [ ] Launch Search Campaign 2 (General Repair) once Campaign 1 stable
- [ ] Start PMax with Repair asset group seeded by Search conversions

---

## 7. Campaign Launch Sequence (90-day rollout)

| Trigger | Action |
|---|---|
| **Day 0** | File LSA application; wire conversion tracking; load negatives; build assets |
| **Day 1** | Campaign 1 (Emergency Search) + LSA queue only |
| **Day 14–21** | Campaign 1 stable at target CPL → Launch Campaign 2 (General Repair) |
| **Month 2** | Campaign 2 stable → Launch Campaign 3 (Install) + start PMax with Repair asset group |
| **Month 3** | Launch Campaign 4 (Maintenance) — aligns with Texas seasonality |
| **Month 4+** | Once commercial intake confirmed → Launch Campaign 5 (Commercial) |

Don't compress this. The reason it's staggered is that each launch needs the prior one to be stable so you have a baseline to detect problems against. Launching everything Day 1 means you can't tell which campaign is bleeding when CPL spikes.

---

## 8. KPI Targets — what "good" looks like

### Per-Campaign Benchmarks (Houston, 2026)

| Metric | Emergency | General Repair | Installation | Maintenance | LSA | PMax |
|---|---|---|---|---|---|---|
| Avg CPC | $30–60 | $20–45 | $15–35 | $10–25 | n/a | $8–25 |
| Avg CPL | $45–80 | $40–70 | $60–100 | $30–55 | $25–55 | $45–75 |
| Avg CVR | 10–18% | 8–14% | 5–10% | 6–12% | 12–22% | 6–12% |
| Avg CTR | 8–15% | 6–12% | 4–9% | 5–10% | n/a | n/a |

### Account-Level Targets

| KPI | Month 1 | Month 3 | Month 6 | Red flag |
|---|---|---|---|---|
| Blended CPL | <$75 | <$55 | <$45 | >$100 |
| Cost per booked job | <$110 | <$85 | <$70 | >$150 |
| CTR (Search) | >6% | >8% | >9% | <3% |
| Conversion Rate | >8% | >12% | >14% | <5% |
| Quality Score (avg) | 6+ | 7+ | 7.5+ | <5 |
| Search Impression Share | >40% | >60% | >70% | <25% |
| Avg CPC | <$45 | <$35 | <$32 | >$65 |
| Lost IS (Budget) | <30% | <15% | <10% | >35% |
| Lost IS (Rank) | <30% | <20% | <15% | >40% |

The key insight: **CPL is a proxy.** Cost per *booked job* and cost per *closed install* are the real KPIs. Set up offline conversion uploads (closed-job revenue back to Google Ads via Enhanced Conversions for Leads) by Month 2 — see `google-ads-copy` for implementation.

---

## 9. Texas Seasonality — what's coming

You're launching in May, which is one of the most expensive but also most rewarding months. Here's what to expect month-over-month:

| Month | What changes |
|---|---|
| **May (now)** | Increase 25%. Max IS on emergency. Start LSA promotion. |
| **June–August** | All-in on emergency. Daily budget may exhaust by noon — see burn protocol below. CPCs +30–50% expected. |
| **September** | Maintain summer budgets — Texas stays hot well into Sept. |
| **October** | Reduce AC 20–30%, ramp heating campaigns and tune-up promotions. |
| **November** | Heating peak prep. "Have your heater checked before the freeze." |
| **December** | Minimum AC spend, focus on emergency heating, full account audit window. |
| **Jan–Feb** | +30% heating/furnace budget, -50% maintenance. Lowest annual CPCs. |
| **March** | Ramp AC maintenance NOW — pre-summer is the cheapest CVR window of the year. |
| **April** | Increase all AC campaigns 15-20%. Confirm landing-page LCP on mobile. |

**Summer Burn Protocol** (you'll need this in July/August): when daily budget exhausts before noon for 3 consecutive days:
1. Increase daily budget 20%/week until ads run all day
2. Concentrate bid adjustments on 8am–4pm peak window
3. Pause lowest-CVR keywords during peak hours (use ad schedule, not bid -100%)
4. **Never lower bids to stretch budget.** It drops position → CTR → Quality Score → CVR. The math compounds against you.
5. If budget caps are real and you can't expand: pause Maintenance, Commercial, and the lowest-converting Install ad group entirely. Concentrate spend on Emergency.

---

## 10. Weekly Optimization Workflow (every Monday, 60 minutes — non-negotiable)

| Step | Time | What |
|---|---|---|
| 1. Search Terms Audit | 20 min | Filter `Conversions=0 AND Clicks>3` → add as negatives. Filter `Conversions≥1` → add as new exact (or phrase in Phase 1). Cross-check PMax Insights → Search categories. |
| 2. Keyword Performance | 15 min | Pause: Cost>$50 AND Conv=0. Fix CTR: CTR<2% AND Impressions>100 → rewrite ad / change match. Scale: Conv≥2 AND CPL<target → raise tCPA 10% on that campaign. |
| 3. Ad Performance | 10 min | Combinations tab → flag "Low" headlines → replace. Any ad group CTR<5% → test fresh headlines. No "Good"/"Excellent" RSA after 4 weeks → rewrite all 15 headlines. |
| 4. Budget Review | 5 min | Lost IS (Budget)>15% → increase budget OR tighten geo/schedule. Lost IS (Rank)>20% → improve QS or raise bids. |
| 5. Conversion Tracking Health | 5 min | Reasonable conversions recorded? (0 = check tracking immediately.) Cross-reference CallRail — must match within 10%. |
| 6. LSA + PMax Quick Check | 5 min | LSA: respond to all reviews from past week, dispute junk leads. PMax: Asset Insights → swap "Low" rated assets. |

---

## 11. The 3 Mistakes Most HVAC Managers Make at Launch

You asked for the top 3, so I'm pulling the launch-phase ones (the ones that bite in the first 30 days):

### Mistake #1 — Setting a tCPA on Day 1
**What they do:** Read somewhere that tCPA is the "smart" bidding strategy and set it at $50 because that "feels right."
**What happens:** With zero conversion history, the algorithm has nothing to optimize toward. It either freezes (won't spend because it can't find conversions at the target) or spikes CPL trying to satisfy a target that's wrong for the actual auction. The campaign sits in perpetual learning mode and never stabilizes.
**Fix:** Maximize Conversions for the first 30 days, **no tCPA target**. Let the algorithm find the floor. Move to Phase 2 once you've hit 30 conversions per campaign.

### Mistake #2 — Running Performance Max from Day 1 (or instead of Search)
**What they do:** A Google rep tells them PMax is "more efficient" and they launch with PMax as the primary or only channel.
**What happens:** PMax has no conversion data to seed its audience model. It burns 25-40% of budget on the "learning tax" — irrelevant placements, broad audiences, low-intent traffic — before it stabilizes (if ever). Worse: with no Search baseline, you can't tell if PMax is finding *new* demand or just cannibalizing branded/easy clicks.
**Fix:** Search Campaign 1 (Emergency) launches Day 1. PMax does not launch until Search has produced 30 conversions — typically Month 2. Then start at 25-30% of total spend with one asset group per service line.

### Mistake #3 — Leaving "Auto-apply recommendations" ON
**What they do:** Skip the Settings → Account-level → Auto-apply recommendations toggle, leaving Google's defaults in place.
**What happens:** Two weeks in, Google has silently switched some Phrase keywords to Broad, added 40 keywords you never approved, and possibly switched bidding strategies. CPL spikes, search terms get polluted, and the manager spends hours forensically untangling what Google did to their account.
**Fix:** **Day 0, before launch:** turn OFF every recommendation that changes match types, adds keywords, or adjusts bidding strategy. Leave only "fix typo" / "fix disapproved ads" type recommendations on. Audit the auto-apply settings monthly — Google sometimes re-enables them after platform updates.

### Honorable mentions (these also bite, but later than the first 30 days)
- **Search Partners ON** — silently bleeds 30% of clicks at full CPC for 30%-lower CVR.
- **"Presence or interest" location targeting** — Dallas/Austin residents researching Houston HVAC see and click your ads.
- **Homepage as landing page** — kills Quality Score, raises CPC by 25-50%, tanks CVR.
- **Equal budget across campaigns** — Emergency starves while Maintenance overspends. Use the 40/25/20/10/5 split.

---

## 12. Audit Decision Tree — when CPL starts climbing (you'll need this around Month 2)

```
CPL rising? Check in this order:
│
├── 1. Are conversions still being tracked correctly?
│     YES → continue
│     NO  → STOP. Fix tracking. CPL is meaningless until tracking is verified.
│
├── 2. Did seasonality change? (entering summer = +30-50% CPCs expected)
│     YES → expected, increase budget or tighten geo/schedule
│     NO  → continue
│
├── 3. Search Terms — is junk traffic increasing?
│     YES → add negatives, tighten match types (drop Broad if you have it)
│     NO  → continue
│
├── 4. Quality Score — has it dropped on any high-spend keyword?
│     YES → audit ad relevance (keyword in headlines?), LP experience (LCP<2.5s?), expected CTR
│     NO  → continue
│
├── 5. Lost IS (Rank) climbing? (= competitors outbidding you)
│     YES → raise tCPA 10-15%, improve QS to compete on CPC efficiency
│     NO  → continue
│
├── 6. Auto-applied recommendations turned themselves on?
│     YES → turn them OFF, undo any unintended match-type changes
│     NO  → continue
│
└── 7. PMax cannibalizing brand or branded-adjacent traffic?
      YES → add brand terms to PMax negatives
      NO  → escalate to manual creative/landing-page review
```

---

## 13. What's Not in This Document (defer to other skills)

- **Keyword lists, match types, negatives, search-term triage** → see `google-ads-keywords` (full Houston starter pack lives there)
- **RSA headlines, descriptions, extensions, conversion tracking implementation** → see `google-ads-copy`
- **Landing page CRO, phone prominence, trust strip, mobile UX** → see `cro-strategy`
- **The audit HTML report** → use this skill for findings, defer to `/ads-audit` for the report shell

---

## 14. Day 0 / Day 1 Action List (copy-paste this into your project tracker)

**Day 0 (this week, before launch)**
1. File LSA application — background checks, $1M+ insurance, TACLA72152E verification
2. Wire CallRail + GTM with 60-second min call duration as conversion
3. Turn ON Enhanced Conversions for Leads
4. Turn OFF auto-apply recommendations (match-type, keyword, bidding categories)
5. Load account-level negatives (`google-ads-keywords`)
6. Build all assets: sitelinks, callouts, structured snippets, call, location (`google-ads-copy`)
7. Verify landing page LCP <2.5s on mobile, click-to-call in hero
8. Link GBP to Google Ads account (Location asset)

**Day 1 (launch)**
1. Build Campaign 1 — Emergency AC Repair, 4 ad groups, Phrase + Exact keywords only
2. Bidding: Maximize Conversions, no tCPA
3. Geo: Houston + Katy + Sugar Land + Cypress + Richmond TX (cities, not radius); "Presence" only; exclude Richmond VA / Houston MS / Houston BC
4. Schedule: 24/7
5. Device: Mobile +20%
6. Networks: Search ON, Partners OFF, Display OFF
7. Daily budget: $64 Emergency / LSA queued at $50/day equivalent
8. Bookmark Search Terms report for daily review through Week 1

Day 1 spend should look like: $64 Emergency Search going live + LSA queued (won't spend until verified). Total daily run rate from Day 1: ~$64. From Day 14–21 once Campaign 2 launches: ~$104. From Month 2 once Campaign 3 + PMax launch: ~$200 daily target.

That's the plan. Execute top-to-bottom, run the Monday workflow weekly, and don't skip ahead on bidding phases or PMax timing — those are the two places good HVAC accounts most often unravel.
