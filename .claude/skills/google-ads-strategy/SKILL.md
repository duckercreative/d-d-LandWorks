---
name: google-ads-strategy
description: >
  Google Ads strategy methodology for 75 Degree AC (Houston HVAC) and HVAC
  contractors. Covers the 5-campaign Search architecture (40/25/20/10/5 budget
  split), Performance Max + Local Services Ads as separate channels, 3-phase
  bidding progression (Max Conversions → tCPA → tROAS), Houston suburb
  targeting + Texas seasonality + summer burn protocol, account launch
  checklist, CPL-rising audit tree, weekly Monday workflow, and Houston KPI
  benchmarks. Use whenever the user mentions Google Ads, Search campaigns,
  Performance Max, PMax, LSA, Local Services Ads, tCPA, Max Conversions, Max
  Clicks, impression share, lost IS, scaling budget, summer prep, heat-wave
  traffic, account audit, launching a campaign, rising CPL, exhausted daily
  budget, stuck in learning phase, weekly optimization, or any HVAC Google
  Ads symptom or diagnostic — even without naming Google Ads. Pair with
  `google-ads-keywords` for keywords and `google-ads-copy` for ad copy +
  tracking.
version: 3.0.0
client: 75 Degree AC
last_updated: 2026-05-11
---

# Google Ads Strategy — HVAC, 2026 Texas Edition

## Why This Skill Was Rewritten in May 2026

The 2024-2025 platform changes broke a lot of "best practices" people were still teaching:

1. **Close variants now eat exact match share.** Exact is not exact anymore. Phrase has effectively become the workhorse.
2. **Performance Max went from "experimental" to a primary HVAC channel.** Agency benchmarks show PMax delivering leads at ~$72 vs. ~$149 for non-branded Search.
3. **LSA Direct Booking and the 2025 ranking-factor update.** Google now weighs review responsiveness, profile completeness, and Direct Booking adoption far more than raw review count.
4. **AI Max for Search.** Google's auto-applied recommendations now default to ON. If you don't actively manage them, the platform will silently switch your match types.
5. **Bot/scraper traffic on Maximize Clicks** has gotten bad enough that it's now actively harmful for HVAC.

**One-paragraph summary:** Google Ads is no longer a single-channel decision. A complete HVAC account in 2026 is **Search + Performance Max + LSA running in concert**, each tuned to the part of the funnel it owns. Single-channel accounts are leaving 30-40% of bookable demand on the table.

---

## Core Principles

1. **Emergency Comes First, Always.** HVAC is emergency-driven. People in distress click the first credible result and convert in minutes; tune-up researchers shop for days. The 40/25/20/10/5 budget split is roughly proportional to LTV-weighted intent value.
2. **Three Channels, One Strategy.** Search owns urgent named-need queries. PMax owns discovery and installation. LSA owns lowest-CPL repair calls in covered zips. Run all three by Month 3.
3. **Conversion Quality > Conversion Volume.** **Cost per booked job** and **cost per closed install** are the real KPIs. CPL is only a proxy. Wire offline conversion uploads by Month 2.
4. **Don't Trust Auto-Applied Recommendations.** Turn OFF every auto-recommendation that changes match types, adds keywords, or adjusts bidding. Google's auto-recommendations optimize for *Google's revenue*.
5. **Explain the Why.** When you tell the user "do X", tell them *why* in one short sentence. They make better calls under pressure when they understand the mechanism.

---

## Three-Channel Map

| Channel | Best at | Worst at | Owns |
|---|---|---|---|
| **Search** | High-intent, urgent, named-need queries | Discovery / new audiences | Emergency repair, named symptoms |
| **Performance Max** | Discovery + retargeting + cross-format reach | Tight intent control | Installation/replacement, brand-adjacent traffic |
| **LSA** | Lowest CPL, top-of-page, trust badge | Anything beyond core service queries | Repair calls in covered zips |

---

## Account Architecture — 5-Campaign Search + PMax + LSA

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

### Naming convention (makes reports parseable)
```
[75AC] [Channel] [Service] [Geo Cluster] | [Month YYYY]
[75AC] Search · Emergency AC Repair · Houston·Katy·SugarLand·Richmond | May 2026
[75AC] PMax · Repair Residential · Greater Houston | May 2026
```

### Ad Group Rules (Search)
- **1 theme per ad group** — shared theme = better Quality Score
- **10–20 keywords per ad group max** — beyond 20, Google can't match the right ad
- **2–3 RSAs per ad group** — start with 2, add a third after 90 days
- **Match type at launch:** Phrase + Exact only. Broad enters in Phase 3.

---

## Quick Reference: Bidding Phase Diagnostic

Phase depends on **per-campaign conversions in last 30 days**, not weeks live.

| Per-campaign conv/30d | Phase | Strategy |
|---|---|---|
| < 15 | Phase 1 | Maximize Conversions (NO tCPA) |
| 15–29 | Phase 1→2 transition | Hold, prepare tCPA |
| 30–59 | Phase 2 | Max Conv + tCPA at Phase 1 avg + $10 |
| 60+ | Phase 3 | tCPA tuned per campaign, or tROAS if revenue attribution live |

Full bidding rules + tCPA targets per campaign → [references/bidding-phases.md](references/bidding-phases.md).

---

## Quick Reference: Account-Level KPI Red Flags

Trip a red flag → stop scaling, run the audit tree.

| KPI | Red flag threshold |
|---|---|
| Blended CPL | >$100 |
| Cost per booked job | >$150 |
| CTR (Search) | <3% |
| Conversion Rate | <5% |
| Quality Score (avg) | <5 |
| Search Impression Share | <25% |
| Avg CPC | >$65 |
| Lost IS (Budget) | >35% |
| Lost IS (Rank) | >40% |

Full per-campaign + per-month benchmarks → [references/kpi-benchmarks.md](references/kpi-benchmarks.md).

---

## 12 Common HVAC Google Ads Mistakes (with fix)

1. **tCPA too low at launch** → perpetual learning mode, no spend. Fix: Maximize Conversions for first 30 days, no tCPA.
2. **Search + Display mixed** → dilutes conversion data. Fix: Display always OFF for Search; use PMax for cross-format reach.
3. **Homepage as landing page** → poor QS, high CPC, low CVR. Fix: dedicated landing page per campaign (see `google-ads-copy`).
4. **No negatives at launch** → budget wasted on DIY/jobs/out-of-area. Fix: load full negative list before launch (see `google-ads-keywords`).
5. **Broad match on a new campaign** → ads serve for unrelated queries. Fix: Phrase + Exact only for the first 60 days.
6. **Phone calls not tracked** → tCPA flying blind (HVAC customers call 70%+). Fix: CallRail + GTM, 60-sec min duration.
7. **Equal budget across campaigns** → emergency starves. Fix: 40/25/20/10/5 split.
8. **Ignoring Quality Score** → paying 25–50% more per click than a competitor with QS 8. Fix: weekly QS audit; intervene on any keyword <6.
9. **Emergency and general repair in same campaign** → bid compromise, ad copy can't be specific. Fix: always separate.
10. **Stopping optimization after setup** → CPL rises slowly, competitors take impression share. Fix: non-negotiable weekly 60-min session.
11. **Running PMax before Search has 30 conversions** → algorithm flying blind, burns 25-40% on the learning tax. Fix: gate PMax launch on Search seed data.
12. **Treating LSA as "extension of Search"** → missing Direct Booking, ignoring review responsiveness, undermanaging disputes. Fix: LSA gets its own weekly playbook.

---

## Where to Go for Detail

Read the reference file only when the task actually needs it. Each file is self-contained.

| Reference | When to read |
|---|---|
| [references/bidding-phases.md](references/bidding-phases.md) | Picking a bidding strategy, transitioning phases, setting tCPA targets per campaign |
| [references/performance-max.md](references/performance-max.md) | Standing up or auditing PMax — setup rules, KPI floors, when not to run |
| [references/local-services-ads.md](references/local-services-ads.md) | LSA setup, 2025 ranking factors, when to pause LSA |
| [references/campaign-settings.md](references/campaign-settings.md) | Configuring networks, location targeting, schedule, bid adjustments (location/time/device) |
| [references/budget-scaling.md](references/budget-scaling.md) | Picking a budget tier, splitting the $6K starter pack, scaling rules, launch sequence |
| [references/launch-checklist.md](references/launch-checklist.md) | Day-zero account setup through Month 2 milestones |
| [references/seasonality.md](references/seasonality.md) | Month-by-month Texas calendar, July/August burn protocol |
| [references/kpi-benchmarks.md](references/kpi-benchmarks.md) | Per-campaign + account-level targets at Month 1 / 3 / 6 |
| [references/weekly-workflow.md](references/weekly-workflow.md) | Running the Monday 60-min optimization session |
| [references/audit-tree.md](references/audit-tree.md) | Diagnosing rising CPL — work through the 7-step decision tree |

---

## When to Defer to Other Skills

- **Building keyword lists, match types, negatives, search-term triage, intent buckets** → `google-ads-keywords`
- **Writing RSA headlines/descriptions, extensions, conversion tracking setup** → `google-ads-copy`
- **Landing page CRO, phone prominence, trust strip, mobile UX** → `cro-strategy`
- **Reviewing competitor ad copy, GBP, content** → `competitor-analysis`
- **Generating an audit HTML report** → use this skill for findings, then defer to `/ads-audit` for the report shell
