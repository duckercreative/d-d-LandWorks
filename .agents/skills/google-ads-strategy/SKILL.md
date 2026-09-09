---
name: google-ads-strategy
description: >
  Google Ads strategy methodology for 75 Degree AC and HVAC contractors. Covers
  Search, Performance Max, and LSA account architecture, budget allocation,
  bidding progression, Houston-area geo targeting, seasonal scaling, launch
  checklists, KPI benchmarks, and CPL/lead-quality diagnostics. Use when the
  user asks about Google Ads strategy, campaign structure, budgets, bidding,
  PMax, LSA, scaling, learning-phase issues, rising CPL, impression share,
  account audits, or weekly optimization. Pair with `google-ads-keywords` for
  keyword and negatives work and `google-ads-copy` for RSA, extensions, and
  tracking.
version: 2.1.0
client: 75 Degree AC
last_updated: 2026-05-03
---

# Google Ads Strategy — HVAC, 2026 Texas Edition

## Why This Skill Was Rewritten in May 2026

The 2024-2025 platform changes broke a lot of "best practices" people were still teaching:

1. **Close variants now eat exact match share** — `[emergency ac repair houston]` matches "ac emergency repair near me in houston tx", "fix ac houston now", and dozens of other variants you didn't bid on. Exact is not exact anymore. Phrase has effectively become the workhorse.
2. **Performance Max went from "experimental" to a primary HVAC channel** — by January 2026, agency benchmarks showed PMax delivering leads at ~$72 vs. ~$149 for non-branded Search, with a slightly lower book rate but materially better cost per booked job.
3. **LSA Direct Booking and the 2025 ranking-factor update** — Google now weighs review responsiveness, profile completeness, and Direct Booking adoption far more than raw review count. Treat LSA as a separate channel with its own playbook, not an "extension" of Search.
4. **AI Max for Search** — Google's auto-applied recommendations now default to ON. If you don't actively manage them, the platform will silently switch your match types and add keywords you never asked for.
5. **Bot/scraper traffic on Maximize Clicks** has gotten bad enough that it's now actively harmful for HVAC, not just suboptimal.

If you read just one paragraph: **Google Ads is no longer a single-channel decision.** A complete HVAC account in 2026 is **Search + Performance Max + LSA running in concert**, each tuned to the part of the funnel it owns. Single-channel accounts are leaving 30-40% of bookable demand on the table. The rest of this skill is built around that reality.

---

## Core Principles (apply to every output)

These are non-negotiable. If the user asks for something that violates them, push back and propose the principled alternative — explain *why* before issuing the rule.

### 1. Emergency Comes First, Always

HVAC is an emergency-driven category. People in distress click the first credible result and convert in minutes; people researching a tune-up shop around for days. So when budget is tight, every dollar should fund emergency capacity *before* anything else. The 40/25/20/10/5 split below is not arbitrary — it's roughly proportional to LTV-weighted intent value.

### 2. Three Channels, One Strategy

| Channel | Best at | Worst at | Owns |
|---|---|---|---|
| **Search** | High-intent, urgent, named-need queries | Discovery / new audiences | Emergency repair, named symptoms |
| **Performance Max** | Discovery + retargeting + cross-format reach | Tight intent control | Installation/replacement, brand-adjacent traffic |
| **LSA** | Lowest CPL, top-of-page, trust badge | Anything beyond core service queries | Repair calls in covered zips |

You should be running all three by Month 3 unless there's a specific reason not to. They cannibalize each other less than people fear because each retrieves a different slice of the auction.

### 3. Conversion Quality > Conversion Volume

If your tCPA looks great but you're burying calls in voicemail or losing 60% of leads to no-shows, the channel is bleeding money invisibly. **Cost per booked job** and **cost per closed install** are the real KPIs. CPL is only a proxy. Set up offline conversion uploads (job-level revenue back to Google Ads via Enhanced Conversions for Leads) by Month 2 — see `google-ads-copy` for the implementation.

### 4. Don't Trust Auto-Applied Recommendations

Inside `Settings → Account-level → Auto-apply recommendations`, turn OFF every recommendation that changes match types, adds keywords, or adjusts bidding strategy. Leave only "fix typo" and "fix disapproved ads" type recommendations on. Google's auto-recommendations optimize for *Google's revenue*, not yours.

### 5. Explain the Why

When you tell the user "do X", tell them *why* in one short sentence. They make better calls under pressure when they understand the mechanism, not just the rule.

---

## Account Architecture — 5-Campaign Search + 1-2 PMax + LSA

```
Google Ads Account
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
│   ├── Campaign 4: Maintenance/Tune-Up (10%, seasonal)
│   └── Campaign 5: Commercial HVAC (5%)
│
├── PERFORMANCE MAX (25-35% — discovery + retargeting)
│   ├── Asset Group 1: Repair (residential)
│   ├── Asset Group 2: Installation/Replacement
│   └── (Optional Asset Group 3: Commercial — only at $20K+/mo)
│
└── LOCAL SERVICES ADS (15-25% — top-of-page lead-form)
    └── Service categories: AC repair, AC install, Heating repair, Heating install
```

**Naming convention** (consistent across all campaigns — makes reports parseable):
```
[75AC] [Channel] [Service] [Geo Cluster] | [Month YYYY]
[75AC] Search · Emergency AC Repair · Houston·Katy·SugarLand·Richmond | May 2026
[75AC] PMax · Repair Residential · Greater Houston | May 2026
```

### Why this structure
- **5 Search campaigns**: Each campaign has its own bidding strategy, budget, ad schedule, and location adjustment. Mixing Emergency with Maintenance forces a bid compromise that hurts both.
- **PMax as separate channel, not "additional ad group"**: PMax controls its own bidding, signals, audiences. Treating it as Search-with-images is the most common 2026 setup mistake.
- **LSA never in Google Ads UI** — it lives in `ads.google.com/local-services` and has its own dashboard, but counts against the same total budget you're tracking.

### Ad Group Rules (Search)
- **1 theme per ad group** — shared theme = better Quality Score because every keyword maps to the same headline message.
- **10–20 keywords per ad group max** — beyond 20, Google can't match the right ad to the right query.
- **2–3 RSAs per ad group** — start with 2, add a third after 90 days for ad rotation testing.
- **Match type policy at launch**: Phrase + Exact only. Broad only enters the picture in Phase 3 (see Bidding below).

---

## Bidding Strategy — 3-Phase Progression

The phase you're in depends on **conversion volume per campaign**, not how many weeks the account has been live. Use this diagnostic.

### Which Phase Am I In? (Diagnostic)

```
Per-campaign conversions in last 30 days:
   < 15 → Phase 1 (no signal yet)
   15-29 → Phase 1 → 2 transition
   30-59 → Phase 2 (introduce tCPA)
   60+   → Phase 3 (optimize tCPA, consider tROAS)
```

### Phase 1 — No Conversion Data (typically Weeks 1–4)
**Strategy: Maximize Conversions (NO tCPA target).**

- ❌ Do NOT use Maximize Clicks. In 2026 it's actively harmful — bot/scraper click farms have gotten good enough at HVAC keywords that Max Clicks burns 15-30% of budget on non-human traffic.
- ❌ Do NOT set a tCPA. You don't know your CPA yet — guessing low forces eternal learning mode, guessing high wastes budget.
- ❌ Do NOT set max CPC bid caps. They cap reach during the exact peaks (heat waves, evenings) when conversion rates are highest.
- ✅ Daily budget floor: 10× expected CPL. If you expect $50 CPL, you need $500/day. $100/day works but the algorithm learns 5× slower.

### Phase 2 — 30+ Conversions per Campaign (typically Month 2)
**Strategy: Maximize Conversions + Target CPA.**

- Set tCPA at Phase 1 average + $10 buffer. Example: Phase 1 averaged $58, set tCPA to $68.
- Reduce tCPA by $5 every 2 weeks until volume drops noticeably — that's your floor.
- If volume drops by >25% on a tCPA cut, it was too aggressive. Revert and try a $3 cut instead.

### Phase 3 — 60+ Conversions/Month per Campaign (Month 3+)
**Strategy: Target CPA (steady) or Target ROAS (if revenue attribution is wired up).**

- Adjust tCPA per campaign based on job value (table below).
- Target ROAS only works if Enhanced Conversions for Leads is sending closed-job revenue back. Don't set tROAS without that — you'll optimize for cheap leads regardless of close rate.

### tCPA Targets by Campaign (Houston market, May 2026)

| Campaign | Phase 2 starting tCPA | Phase 3 target |
|---|---|---|
| Emergency Repair | $70 | $50–60 |
| General Repair | $60 | $45–55 |
| Installation | $90 | $70–80 |
| Maintenance | $45 | $30–40 |
| Commercial | $120 | $90–100 |
| PMax (blended) | $65 | $45–55 |

---

## Performance Max — When and How

**Run PMax once Search Campaign 1 is stable at target CPL** (typically Month 2). PMax needs Search conversion data to seed it; running PMax-first leaves the algorithm flying blind.

### Setup Rules

1. **Separate asset group per service line.** Repair behaves nothing like Installation — different intent, different audiences, different conversion paths. One asset group per service category prevents the algorithm from collapsing them into a single audience model that serves none of them well.
2. **Start at 25-30% of total monthly spend.** PMax needs 2-4 weeks of learning before performance stabilizes. Going too big too early just burns budget on the learning tax.
3. **Search themes (not generic keywords)** — treat them as audience hints, not match-type instructions. Provide 3-5 themes per asset group.
4. **Audience signals**: Customer match list (past customers), website visitors, in-market segments. NOT lookalike-only — those are too broad for HVAC.
5. **Negative-keyword list**: Apply your account-level negatives at the campaign level (PMax accepts them via support request or in the new self-serve UI as of late 2025).
6. **Disable Display partner placements** initially — review the Asset Insights report at week 2 and re-enable if Display is producing real conversions vs. last-click attribution noise.

### PMax KPI Floors

| Metric | Floor | Action if breached |
|---|---|---|
| Cost per booked job | <$95 | Audit asset group with worst CPL → tighten signals or pause |
| Conversion volume share | ≥20% of total | Increase budget; PMax is finding cheap inventory |
| Brand search cannibalization | <10% | Add brand terms to PMax negatives |

### Don't Run PMax When
- You haven't yet hit 30 Search conversions (no seed data → wasted spend)
- Total monthly spend is under $4K (PMax learning tax > value)
- Conversion tracking is unverified (PMax + bad tracking = invisible money fire)

---

## Local Services Ads — Standalone Channel Playbook

LSA appears ABOVE Search ads with the Google Guarantee badge. Lead form, not click-through. Pay-per-lead, not pay-per-click.

### Why LSA wins for HVAC
- CPL: typically $25–55 in Houston, often half of Search CPL
- The Google Guarantee badge increases click-through rate ~40% vs. non-badged competitors
- Position above your own Search ads = two slots on page 1 of the SERP

### 2025 Ranking Factor Update — what changed

LSA ranking is now weighted toward (in order of importance):
1. **Review responsiveness** — % of reviews you respond to, and how fast
2. **Profile completeness** — services listed, hours, photos, license docs verified
3. **Direct Booking adoption** — accounts with Direct Booking enabled get a ranking lift
4. **Review velocity + recency** — 5 reviews this month beats 50 reviews from 2023
5. **Dispute win rate** — disputed leads that you successfully refund-request lower your rank

### Setup Requirements
- Background check for technicians (each name on the account)
- TACLA72152E license verification (already on file for 75 Degree AC)
- Business insurance verification ($1M+ general liability)
- Active Google reviews (more = better, but recency matters more in 2026)

### Bidding
**Use Maximize Leads (not manual) — manual LSA bidding has rarely outperformed since the 2024 algorithm update.**

### When to pause LSA
- Lead quality score drops below 7 — usually means your service area is mis-set, expanding too wide
- Dispute rate >15% — Google penalizes accounts with high dispute rates; pause and rebuild
- Booking-page CVR <10% — fix the booking flow before paying for more leads to abandon it

---

## Campaign Settings — Critical Fields

### Networks
- Search Network: **ON**
- Search Partners: **OFF** — partner inventory CVR is ~30% lower than Google.com proper. The CPC is the same. The math doesn't work.
- Display Network: **OFF** — never mix Display with Search. If you want Display reach, that's PMax's job.

### Location Targeting
- Target: Specific cities (Houston, Katy, Sugar Land, Cypress, Tomball, Spring, The Woodlands, Missouri City, Pearland, Richmond TX, Pasadena), NOT radius
- Location option: **"Presence: people in or regularly in your targeted locations"** — NEVER "Presence or interest". The "or interest" setting causes Dallas/Austin residents to see Houston ads when they "research Houston HVAC".
- Excluded locations: Add Richmond VA, Houston TX (Mississippi), Houston BC explicitly — Google's geo-matching is occasionally weird on similarly-named cities.

### Bid Adjustments by Location (after 30 days of data; these are starting points)
- Houston core: 0% baseline
- Katy, Sugar Land, Cypress: +10–15%
- Richmond TX (high-LTV but lower volume): +20%
- Lower-density / lower-CVR areas: -10% or removed

### Ad Schedule
- Emergency Campaign: 24/7 — emergencies happen at 2am
- General Repair: 7am–9pm, all days
- Installation/Replacement: 8am–8pm, Mon–Sat (people don't book major purchases at midnight)
- Maintenance: 8am–6pm, Mon–Fri (planned, business-hours intent)

### Time-of-Day Bid Adjustments (after 30 days of data)
| Time | Adjustment | Why |
|---|---|---|
| 8am–12pm | +20% | Distress calls peak — AC didn't cool overnight |
| 12pm–4pm | +10% | Hottest part of day → emergency spikes |
| 4pm–8pm | 0% | Steady volume |
| 8pm–12am | -20% | Lower CVR; calls tend to defer to morning |
| 12am–8am | -40% | Very low volume except true emergencies |

### Device Adjustments
- Mobile: +20% — 70%+ of emergency HVAC searches are mobile
- Desktop: 0%
- Tablet: -10%

---

## Budget Allocation & Scaling

### Houston Market Budget Tiers

| Tier | Daily | Monthly | What you get |
|---|---|---|---|
| Minimum | $100/day | $3,000 | Emergency Search only, 2–4 leads/day |
| **Recommended Starter** | **$200/day** | **$6,000** | Emergency + General Repair Search, LSA on, 4–8 leads/day |
| Growth | $400/day | $12,000 | All 5 Search campaigns + LSA + PMax learning, 12–20 leads/day |
| Competitive | $700/day | $20,000 | Full account, top IS on emergency, scaled PMax |
| Dominant | $1,000+/day | $30,000+ | Top IS across all service lines, brand defense |

### Budget Split at $6,000/mo (Recommended Starter)

| Allocation | Monthly | Daily |
|---|---|---|
| Search Campaign 1 (Emergency) | $1,920 | $64 |
| Search Campaign 2 (General Repair) | $1,200 | $40 |
| Search Campaign 3 (Install) | $480 | $16 (paused first 30 days) |
| LSA | $1,500 | $50 |
| Reserve / PMax seed (Month 2+) | $900 | $30 |

### Scaling Rules
- **Scale up when:** Impression share <60% AND CVR >10% AND CPL is below target
- **Don't scale when:** CPL above target, QS<6, landing page converting poorly, or search terms polluted with junk
- **Hard rule:** Never increase total daily budget by more than 20% per week. Going faster spikes CPL because the algorithm has to reset learning.

### Within-Month Pacing
- **Front-load May/June** — peak demand, highest CPCs, but also highest CVRs. Get money in market before competitors do.
- **Constant pacing** — set daily budget, don't accelerate; accelerated pacing exhausts before peak hours.
- **July/August "burn protocol"** — see Seasonality below.

### Campaign Launch Sequence
| Trigger | Action |
|---|---|
| Day 1 | Campaign 1 (Emergency) + LSA only |
| Campaign 1 stable at target CPL (typically Day 14–21) | Launch Campaign 2 (General Repair) |
| Campaign 2 stable | Launch Campaign 3 (Install) + start PMax with Repair asset group |
| Month 3 | Launch Campaign 4 (Maintenance) — timing aligns with Texas seasonality |
| Month 4 + commercial intake confirmed | Launch Campaign 5 (Commercial) |

---

## Account Launch Checklist

A copy-paste-ready checklist when you're setting up the account from scratch. Tick top-to-bottom; don't skip.

### Pre-Launch (do these BEFORE turning on a campaign)
- [ ] Conversion tracking wired: phone calls (CallRail + GTM, 60-sec min duration), form submissions, booking page reach
- [ ] Enhanced Conversions for Leads turned ON
- [ ] Auto-apply recommendations: turn OFF all match-type, keyword-add, and bidding-strategy recommendations
- [ ] Account-level negatives loaded (see `google-ads-keywords` for the list)
- [ ] LSA application submitted (background check + insurance + license verification)
- [ ] Sitelinks, callouts, structured snippets, call asset, location asset all created (see `google-ads-copy`)
- [ ] Landing pages tested on mobile — LCP <2.5s, click-to-call in hero (see `cro-strategy`)
- [ ] CallRail dynamic number insertion verified on all PPC landing pages
- [ ] Google Business Profile linked to Google Ads account (Location asset)

### Launch Day (Search Campaign 1 only)
- [ ] Campaign 1 (Emergency) live with Maximize Conversions, no tCPA
- [ ] Geo: Houston + Katy + Sugar Land + Cypress + Richmond TX
- [ ] Schedule: 24/7
- [ ] Device: Mobile +20%
- [ ] Networks: Search ON, Partners OFF, Display OFF
- [ ] Search Terms report bookmarked for daily check (Week 1)

### Week 2 (after 7 days live)
- [ ] Search Terms triage: add converters as exact, add junk as negatives
- [ ] Verify CallRail call recording is firing (listen to 5+ calls — confirm they're real)
- [ ] If conversions = 0 after $500 spend, check tracking before assuming a creative problem

### Month 2
- [ ] Phase 2 transition: set tCPA at Phase 1 average + $10
- [ ] Launch Search Campaign 2 (General Repair) if Campaign 1 stable
- [ ] Start PMax with Repair asset group seeded by Search conversions

---

## Texas Seasonality Calendar

Updated for 2026 — Houston's seasonal pattern is more compressed each year, with cooling demand starting in March and not fading until October.

| Month | Action |
|---|---|
| **Jan–Feb** | +30% heating/furnace budget, -50% maintenance, add heating-specific keywords. Lowest annual CPCs across the board. |
| **March** | Ramp AC maintenance NOW — pre-summer is the cheapest CVR window of the year. Push install awareness via PMax. |
| **April** | Increase all AC campaigns 15-20%. Confirm landing-page LCP on mobile (heat-wave traffic spikes). |
| **May** | Increase 25%. Max IS on emergency. Start LSA promotion budget. |
| **June–August** | All-in on emergency. Daily budget may exhaust by noon — see burn protocol. CPCs +30–50% expected. |
| **September** | Maintain summer budgets — Texas stays hot well into Sept. |
| **October** | Reduce AC 20–30%, ramp heating campaigns and tune-up promotions. |
| **November** | Heating peak prep. Push fall maintenance ("Have your heater checked before the freeze"). |
| **December** | Minimum AC spend, focus on emergency heating, full account audit window. |

### Summer Burn Protocol (July/August)

When daily budget exhausts before noon for 3 consecutive days:

1. Increase daily budget 20%/week until ads run all day
2. Concentrate bid adjustments on 8am–4pm peak window
3. Pause lowest-CVR keywords during peak hours (use ad schedule, not bid -100%)
4. **Never lower bids to stretch budget** — drops position, drops CTR, drops Quality Score, drops conversion rate. The math compounds against you.
5. If budget caps are real and you can't expand: pause Maintenance, Commercial, and the lowest-converting Install ad group entirely. Concentrate spend on Emergency.

---

## KPI Benchmarks — Houston HVAC, 2026

### Per-Campaign Benchmarks

| Metric | Emergency | General Repair | Installation | Maintenance | LSA | PMax |
|---|---|---|---|---|---|---|
| Avg CPC | $30–60 | $20–45 | $15–35 | $10–25 | n/a | $8–25 |
| Avg CPL | $45–80 | $40–70 | $60–100 | $30–55 | $25–55 | $45–75 |
| Avg CVR | 10–18% | 8–14% | 5–10% | 6–12% | 12–22% | 6–12% |
| Avg CTR | 8–15% | 6–12% | 4–9% | 5–10% | n/a | n/a |
| Avg Job Value | $300–1,200 | $200–800 | $4,000–12,000 | $150–400 | $200–600 | $300–800 |

### Account-Level Targets (cumulative)

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

---

## Weekly Optimization Workflow (Mondays — 60 min)

### Step 1 — Search Terms Audit (20 min)
- Reports → Search Terms → Last 7 days
- Filter `Conversions = 0 AND Clicks > 3` → add as negatives
- Filter `Conversions ≥ 1` → add as new exact-match keywords (Phrase if Phase 1)
- Cross-check PMax Insights → Search categories — apply same triage

### Step 2 — Keyword Performance (15 min)
- Sort keywords by Cost desc
- **Pause:** Cost > $50 AND Conv = 0
- **Fix CTR:** CTR <2% AND Impressions >100 → rewrite ad or change match type (see `google-ads-copy`)
- **Scale:** Conv ≥2 AND CPL < target → raise tCPA by 10% on that keyword's campaign

### Step 3 — Ad Performance (10 min)
- Combinations tab → flag "Low" rated headlines → replace
- Any ad group CTR <5% → test fresh headlines
- No "Good" or "Excellent" RSA after 4 weeks → rewrite all 15 headlines (see `google-ads-copy`)

### Step 4 — Budget Review (5 min)
- Lost IS (Budget) >15% → increase budget OR tighten geo/schedule
- Lost IS (Rank) >20% → improve QS (ad relevance, LP experience) or raise bids/tCPA

### Step 5 — Conversion Tracking Health (5 min)
- Reasonable conversions recorded? (0 = check tracking IMMEDIATELY)
- Cross-reference with CallRail: must match within 10%

### Step 6 — LSA + PMax Quick Check (5 min)
- LSA: respond to all reviews from past week, dispute any junk leads
- PMax: review Asset Insights → swap any "Low" rated assets

---

## Audit Decision Tree (use when CPL is rising)

When CPL spikes, work through these in order — most likely cause first:

```
CPL rising? Check in this order:
│
├── 1. Are conversions still being tracked correctly?
│     YES → continue
│     NO  → STOP. Fix tracking. CPL is meaningless until tracking is verified.
│
├── 2. Did seasonality change? (e.g., entering summer peak = +30-50% CPCs expected)
│     YES → expected, increase budget or tighten geo/schedule
│     NO  → continue
│
├── 3. Search Terms report — is junk traffic increasing?
│     YES → add negatives, tighten match types (drop Broad if you have it)
│     NO  → continue
│
├── 4. Quality Score — has it dropped on any high-spend keyword?
│     YES → Audit ad relevance (keyword in headlines?), LP experience (LCP <2.5s?), expected CTR
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

## 12 Common HVAC Google Ads Mistakes (with fix)

1. **tCPA too low at launch** → perpetual learning mode, no spend. Fix: Maximize Conversions for first 30 days, no tCPA.
2. **Search + Display mixed** → dilutes conversion data. Fix: Display always OFF for Search campaigns; use PMax for cross-format reach.
3. **Homepage as landing page** → poor QS, high CPC, low CVR. Fix: dedicated landing page per campaign (see `google-ads-copy`).
4. **No negatives at launch** → budget wasted on DIY/jobs/out-of-area. Fix: load full negative list before launch (see `google-ads-keywords`).
5. **Broad match on a new campaign** → ads serve for unrelated queries. Fix: Phrase + Exact only for the first 60 days.
6. **Phone calls not tracked** → tCPA flying blind (HVAC customers call 70%+ of the time). Fix: CallRail + GTM, 60-sec minimum call duration as the conversion event.
7. **Equal budget across campaigns** → emergency starves. Fix: 40/25/20/10/5 split.
8. **Ignoring Quality Score** → paying 25–50% more per click than a competitor with QS 8. Fix: weekly QS audit; intervene on any keyword <6.
9. **Emergency and general repair in same campaign** → bid compromise, ad copy can't be specific. Fix: always separate.
10. **Stopping optimization after setup** → CPL rises slowly, competitors take impression share. Fix: non-negotiable weekly 60-min session.
11. **Running PMax before Search has 30 conversions** → algorithm flying blind, burns 25-40% of PMax budget on the learning tax. Fix: gate PMax launch on Search seed data.
12. **Treating LSA as "extension of Search"** → missing Direct Booking, ignoring review responsiveness, undermanaging disputes. Fix: LSA gets its own weekly playbook.

---

## When to Defer to Other Skills

- **Building keyword lists, match types, negatives, search-term triage, intent buckets** → `google-ads-keywords`
- **Writing RSA headlines/descriptions, extensions, conversion tracking setup** → `google-ads-copy`
- **Landing page CRO, phone prominence, trust strip, mobile UX** → `cro-strategy`
- **Reviewing competitor ad copy, GBP, content** → `competitor-analysis`
- **Generating an audit HTML report** → use this skill for findings, then defer to `/ads-audit` for the report shell
