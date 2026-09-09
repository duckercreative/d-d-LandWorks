# 75 Degree AC — Google Ads Emergency Audit (June, Summer Spike)

**Symptom:** CPL went from $58 in May to $112 in June; daily $200 budget exhausts by ~2pm.
**Verdict:** This account is misconfigured against almost every 2026 platform reality. The good news: every single fault here has a known remediation, and the structure is simple enough that a clean rebuild beats incremental patching. We are also entering Houston's peak demand window, so getting this right in the next 7 days is worth more than getting it perfect in 30.

Below is the full audit, prioritized fix order, and what to expect.

---

## TL;DR — The Five Things Killing Your CPL

1. **Maximize Clicks bidding in 2026 is actively harmful for HVAC** — bot/scraper click farms have gotten good enough on HVAC keywords that this strategy now burns 15–30% of budget on non-human traffic. This alone could explain half the CPL spike.
2. **Display Network is ON inside a Search campaign** — diluting your conversion data and burning impressions on irrelevant inventory. Display should NEVER be mixed with Search; if you want cross-format reach that is PMax's job.
3. **Location targeting is set to "people interested in Houston"** — this is the "Presence or interest" setting, which serves your ads to Dallas, Austin, and out-of-state researchers who will never book. This is a top-3 budget waster on every audit.
4. **Single campaign mixing Emergency + Repair + Maintenance + Commercial** — forces a single bid, single ad copy, single schedule for four totally different buyer intents. Emergency starves; maintenance overpays. There is no setting that fixes this — it has to be split.
5. **It's June in Houston and you're capped at $200/day** — Houston HVAC sees +30–50% CPCs from June through August. $200/day is the *recommended starter* for May; it is structurally insufficient for peak summer if you also want emergency coverage 24/7.

The 2pm budget exhaustion is the single loudest signal here. It means you are going dark during the hottest, highest-converting window of the day (12pm–4pm peak distress calls), and you are paying premium auction prices for the morning hours that lead up to it. The math compounds — and it will keep compounding all summer until the structure changes.

---

## Full Diagnostic — Walking the Audit Decision Tree

The skill's audit decision tree says: when CPL is rising, walk these in order, most likely cause first. Here is what each step shows for your account.

### 1. Is conversion tracking still firing correctly?
**Unknown — verify this BEFORE anything else.** If tracking broke between May and June, your CPL is meaningless until it's fixed. Concrete check: open Google Ads → Tools → Conversions, confirm "Recording conversions" status is green, and cross-reference last-7-day call conversion count against CallRail's call log (must match within 10%). If you have not set up Enhanced Conversions for Leads, that's also a Month-1 hygiene gap that needs to be closed this week.

### 2. Did seasonality change?
**Yes — this is partial cause, not full cause.** Houston enters peak HVAC demand in June. Expect CPCs to climb 30–50% relative to May naturally. So some of the $58 → $112 jump is the market, not your account. But seasonality alone does not double CPL — that requires structural problems on top. The skill's expected June CPL for emergency is $45–80 and general repair $40–70; you are at $112, which is well above the *red flag* threshold of $100. Seasonality explains maybe 30% of the gap. The rest is structural.

### 3. Search Terms — is junk traffic increasing?
**Almost certainly yes** — for two compounding reasons:
- Single campaign with mixed intents means the algorithm has no clean signal about which keyword should match which query.
- Maximize Clicks bidding optimizes purely for click volume, which is exactly the signal bots/scrapers feed.
You will likely find a long tail of "ac repair jobs", "ac repair school", "diy ac repair", "ac repair parts", out-of-area cities, and informational queries eating budget. Pull the Last-30-Day Search Terms report and you will see it.

### 4. Quality Score — has it dropped on any high-spend keyword?
**Highly likely.** When Emergency, Maintenance, and Commercial keywords share an ad group with one set of RSAs, ad relevance drops because no single headline can echo every keyword in the group. This drives Quality Score down, which raises CPCs (you pay 25–50% more vs. a competitor with QS 8 on the same keyword). Quality Score gets actively worse as keyword volume per ad group goes up — yours is presumably well past the 10–20 keyword guideline.

### 5. Is Lost IS (Rank) climbing?
**Likely yes**, but partially self-inflicted: when budget exhausts at 2pm, your Lost IS (Budget) metric climbs hard for the remainder of each day. The combination of Lost IS (Budget) and Lost IS (Rank) is what's actually pushing CPL up, because the auction sees you as an inconsistent bidder.

### 6. Have auto-applied recommendations turned themselves on?
**Check today.** Go to Recommendations → "..." menu (top right) → Auto-apply. If anything other than the bottom-tier "fix typo / fix disapproved ads" type recommendations is enabled, Google has likely been broadening match types, adding keywords, or changing bidding behind your back. Turn them all off.

### 7. PMax cannibalization?
**Not applicable** — you don't run PMax yet. (But you should — see roadmap below.)

---

## What Is Wrong — Itemized

Each of these maps to a specific Core Principle or rule violation in the skill. I'm flagging the *why* in plain language because that's how this skill expects me to deliver findings.

### Architecture Faults

| # | Fault | Why it hurts |
|---|---|---|
| A1 | One "AC Repair" campaign with Emergency + Repair + Maintenance + Commercial mixed | The skill's account architecture demands 5 separate Search campaigns specifically because each of these intents has a different bid, schedule, ad copy, and landing page. Mixing them forces a bid compromise that hurts every intent. Emergency is undercapacity (you have hot traffic getting throttled by Maintenance bids), Maintenance is overpaying (it's funding emergency-grade clicks). |
| A2 | One ad group, all keywords inside | Ad groups should hold 10–20 keywords on a single theme so RSA headlines can echo the query. Lump everything in one and your Ad Strength drops, Quality Score drops, CPCs rise. |
| A3 | No PMax | At June peak demand with a Houston HVAC profile, you should have at least one PMax campaign on Repair Residential picking up cheap inventory (~$45–75 CPL benchmark vs. your $112). PMax should be running by Month 2; you're past that. Note: needs 30+ Search conversions seeded first, which is a gating step but not a long one. |
| A4 | No LSA | LSA in Houston runs $25–55 CPL and sits ABOVE your Search ads with the Google Guarantee badge. Skill explicitly calls "treating LSA as optional" a top-12 mistake. With TACLA72152E already verified, application is friction-free. |

### Settings Faults (each one is its own CPL leak)

| # | Setting | Current | Should be | Why |
|---|---|---|---|---|
| S1 | Bidding strategy | Maximize Clicks | Maximize Conversions (no tCPA yet, since you don't have a clean Phase-2 baseline post-rebuild) | Max Clicks burns 15–30% on bot traffic in 2026; Max Conversions optimizes for human conversion behavior. |
| S2 | Display Network | ON | OFF | Display inside Search dilutes conversion data, displays your ads on irrelevant inventory, and tanks Search QS. |
| S3 | Search Partners | Probably ON | OFF | Partner inventory CVR is ~30% lower at the same CPC. Turn off. |
| S4 | Location targeting | "People interested in Houston" (= Presence or interest) | "Presence: people in or regularly in your targeted locations" | "Or interest" is the single most expensive default in HVAC. Researchers in other cities click your ads and never book. |
| S5 | Geo list | Likely "Houston" only | Houston + Katy + Sugar Land + Cypress + Tomball + Spring + The Woodlands + Missouri City + Pearland + Richmond TX + Pasadena | Suburbs convert at higher rates and lower CPC; you're missing the most profitable geo. |
| S6 | Ad schedule | Likely 24/7 across all keywords | 24/7 only on Emergency campaign; General Repair 7am–9pm; Install 8am–8pm Mon–Sat; Maintenance 8am–6pm Mon–Fri | Maintenance bids at 2am are pure waste — nobody books a tune-up at midnight. |
| S7 | Daily budget | $200/day total | Re-allocated 40/25/20/10/5 across 5 campaigns; total likely needs to climb to $300–400 for June peak | $200 is the *Recommended Starter* monthly tier ($6K/mo). For peak summer with emergency coverage, you're in Growth tier ($400/day = $12K/mo). |
| S8 | Auto-apply recommendations | Almost certainly ON by default | OFF for everything except "fix typo / fix disapproved ads" | Default settings let Google silently broaden match types and add keywords. |
| S9 | Phase of bidding strategy | Phase-3 territory by date but with no clean conversion data | Reset to Phase 1 (Maximize Conversions, no tCPA) until 30+ conversions per campaign accrue post-rebuild | tCPA on top of dirty data perpetuates dirty data. |
| S10 | Conversion tracking depth | Unknown — likely just form submits, possibly call tracking | CallRail + GTM with 60-sec minimum call duration as the conversion event, plus Enhanced Conversions for Leads ON | 70%+ of HVAC customers call rather than fill a form. If calls aren't tracked, your real CPL is unknowable. |

### What's Likely Wrong But I Need You to Verify

These I can't see from your description, but they are the next things to inspect:

- **Negative keyword list.** If there isn't one, you're hemorrhaging on "diy", "jobs", "school", "near me free", "parts", competitor brand searches with informational intent, and out-of-state cities.
- **Landing page.** If your ads point at the homepage instead of a campaign-specific landing page, that alone can move CPL by 30–60%. Emergency traffic should hit a dedicated emergency LP with click-to-call hero, trust strip (TACLA72152E, 24/7 badge), and zero navigation distraction.
- **Conversion tracking sanity.** Pull the last 5 calls in CallRail and listen — confirm they're real bookings, not voicemail/silent calls/wrong numbers.

---

## Priority Fix Order (Execute in This Sequence)

The skill's bias is: emergency comes first, fix the leaks before scaling, never lower bids to stretch budget. Here is the sequence that respects all three.

### Day 0 (Today, 2 hours) — Stop the Bleeding

These are flip-a-switch fixes. Do them today, in this order:

1. **Verify conversion tracking is firing.** Tools → Conversions → confirm green status. Cross-check CallRail last-7-day calls vs. Google Ads recorded conversions. If they don't match within 10%, fix this BEFORE anything else.
2. **Turn OFF Display Network** in the campaign settings. (Networks → uncheck Display. Save.)
3. **Turn OFF Search Partners.** (Same panel.)
4. **Change location option** from "Presence or interest" to "Presence: people in or regularly in your targeted locations." This single click typically moves CPL down 15–25% on a misconfigured account.
5. **Change bidding from Maximize Clicks to Maximize Conversions.** Do not set a tCPA. The campaign needs to learn on a clean foundation post-rebuild.
6. **Turn OFF auto-apply recommendations.** Recommendations tab → top-right "..." → Auto-apply → uncheck everything except "Fix typo" and "Fix disapproved ads".
7. **Add account-level negatives** for the obvious bleeders: "jobs", "school", "training", "diy", "parts", "rental", "amazon", "free", "salary", "career", and competitor brand names with informational modifiers. The full layered negative architecture lives in the `google-ads-keywords` skill — pull the starter pack from there. This is rough but will catch 60–70% of immediate junk while you do the proper rebuild.
8. **Apply emergency burn protocol** (skill's July/August playbook, but you need it in June 2026 too): increase daily budget to $300/day TODAY (50% bump — slightly above the 20%/week scaling rule but justified because you're losing impressions during peak conversion hours). Concentrate the bump on the 8am–4pm window via ad schedule.

After Day 0 alone, expect CPL to drop 25–40% within 7 days. You won't hit benchmark yet, but the bleeding stops.

### Days 1–3 — Restructure

Don't try to fix the existing single campaign. Build the proper structure in parallel, copy what's working over, and pause the old campaign once new ones are stable.

9. **Build Search Campaign 1: Emergency AC Repair.**
   - 4 ad groups: Emergency/24-Hour, AC Symptoms (not cooling, blowing warm), AC Broken/Not Working, Same-Day/Today/Now
   - Phrase + Exact match only (close variants make Phrase the workhorse in 2026)
   - 24/7 schedule
   - Mobile bid +20%
   - Budget: $120/day (40% of new $300 daily)
   - Bidding: Maximize Conversions, no tCPA
   - Geo: Houston + Katy + Sugar Land + Cypress + Tomball + Spring + The Woodlands + Missouri City + Pearland + Richmond TX + Pasadena
   - Location option: "Presence" (not "or interest")
   - Networks: Search ON, Partners OFF, Display OFF
10. **Build Search Campaign 2: AC & HVAC Repair General.** Same settings as Emergency but schedule 7am–9pm, budget $75/day (25%), 4 ad groups: Houston Metro, Suburbs, HVAC General, Heating + Furnace.
11. **Build Search Campaign 3: AC Installation/Replacement.** Schedule 8am–8pm Mon–Sat, budget $60/day (20%), 4 ad groups: AC Installation, AC Replacement, Mini-Split/Ductless, Heat Pump Installation. **Pause this for the first 14 days** — you don't have install-specific landing pages or conversion data yet. Spend the saved budget on Emergency.
12. **Skip Maintenance and Commercial campaigns for now.** Maintenance is seasonally wrong (October ramp-up, not June). Commercial is 5% of budget and needs commercial intake confirmed before launch.
13. **Pause the old single campaign** once new campaigns are live and showing impressions.

### Days 4–7 — Conversion Hygiene & LSA

14. **Wire up Enhanced Conversions for Leads** if not already done. This is what enables real cost-per-booked-job tracking, not just CPL.
15. **Submit LSA application.** TACLA72152E is already on file; insurance and background checks are the gating items. Allocate $1,500/mo toward LSA budget once approved (typically 7–14 days). LSA Houston CPL runs $25–55, so this is the single highest-leverage channel addition.
16. **Audit landing pages.** Emergency campaign needs a dedicated emergency LP (defer to `cro-strategy` skill for the full playbook). At minimum: click-to-call (713) 598-2737 in hero, TACLA72152E badge, 24/7 trust strip, no nav distractions.
17. **Daily Search Terms triage** for the first 14 days. Filter Conversions=0 AND Clicks>3 → add as negatives. Filter Conversions≥1 → add as Exact-match keywords in the right ad group.

### Days 14–30 — Phase 2 Transition

18. Once Search Campaign 1 has 30+ conversions, transition to **Maximize Conversions + tCPA**. Set tCPA at observed CPL + $10 buffer. Reduce by $5 every 2 weeks until volume drops noticeably — that's your floor.
19. Once Search has 30+ conversions, **launch Performance Max** with a single Repair Residential asset group, seeded by your Search conversions. Start at 25–30% of total monthly spend. PMax-first is a top-12 mistake; don't skip the gate.
20. **Resume Campaign 3 (Installation)** with proper install landing page and conversion tracking.

---

## What to Expect After Each Phase

These are skill-grounded forecasts based on Houston HVAC benchmarks, not guesses.

### After Day 0 (within 7 days)
- **Blended CPL**: $112 → ~$75–85 (still elevated, but bleeding stopped)
- **Daily reach**: ads no longer dark by 2pm; full-day coverage on $300/day
- **Junk traffic**: noticeable drop in irrelevant search terms
- **Bot traffic**: significant drop from Max Clicks → Max Conversions
- **Lost IS (Budget)**: drops materially because budget reallocation matches demand curve

### After Days 1–7 (post-restructure)
- **Emergency CPL**: should converge toward $60–80 (skill benchmark $45–80 — June is at the high end of range)
- **General Repair CPL**: $50–70
- **Quality Score**: most keywords should climb to 6+ within 14 days as ad relevance improves
- **CTR**: Search CTR should rise from likely 3–5% to 7–10% as ad copy aligns with intent

### After Days 14–30 (Phase 2 + LSA + PMax seed)
- **Blended CPL** target by Month 3: <$55 (skill's account-level Month 3 target)
- **LSA leads** flowing at $25–55 each, often 30–50% of total lead volume
- **PMax** starts contributing in week 3; expect $45–75 CPL once it exits learning
- **Cost per booked job** target by Month 3: <$85

### After 60–90 Days (full account)
- Blended CPL <$45
- Cost per booked job <$70
- Search Impression Share >60%
- Lost IS (Budget) <15% even at peak
- Three-channel account (Search + PMax + LSA) running in concert, each picking up a different slice of the auction

### Red Flags If You Don't Hit These
| Metric | Red flag threshold | What to do |
|---|---|---|
| Blended CPL | >$100 after Day 30 | Re-walk audit decision tree; conversion tracking is the most likely culprit |
| Quality Score (avg) | <5 after Day 30 | Ad copy isn't echoing keywords — pull `google-ads-copy` skill, rewrite RSAs |
| Lost IS (Budget) | >35% after Day 14 with new budget | Budget genuinely inadequate for demand; expand or tighten geo/schedule further |
| Lost IS (Rank) | >40% after Day 30 | Competitors outbidding; raise tCPA 10–15%, fix QS, do not lower bids |

---

## What I'm Explicitly Not Telling You to Do (And Why)

A few things you might expect to see in an audit but the skill says don't:

- **"Lower bids to stretch the $200 budget across the day."** No. Per the burn protocol: never lower bids to stretch budget. Drops position, drops CTR, drops QS, drops CVR — math compounds against you. Increase budget OR concentrate on emergency-only.
- **"Set a tCPA target right now."** No. tCPA on dirty data perpetuates dirty data. Wait for 30+ clean conversions per campaign post-restructure.
- **"Run Broad match for more reach."** No. Phrase + Exact only for the first 60 days post-rebuild. Broad enters the picture in Phase 3, not now.
- **"Use the homepage as a landing page since it converts okay organically."** No. Dedicated landing page per campaign — homepage costs you 30–60% in CVR for paid traffic. This is mistake #3 in the skill's top-12 list.
- **"Try Performance Max as the main channel — it's cheaper."** Not yet. PMax-first with no Search seed data is mistake #11. It needs 30+ Search conversions to seed properly.
- **"Set the tCPA target to last month's $58 since that's what was working."** No — that number was contaminated by Max Clicks bot traffic, mixed-intent campaign noise, and Display dilution. It is not a real signal of Houston HVAC unit economics. Re-baseline post-rebuild.

---

## Recommended Next Skills To Pull In

This audit covers strategy/architecture/settings. To execute the rebuild, also pull:

- **`google-ads-keywords`** for the full account-level negative keyword list (the rough Day-0 list above is a stopgap), the 6-bucket intent taxonomy that maps to your new ad groups, and the search-terms triage decision tree.
- **`google-ads-copy`** for RSA headline formulas and pinning strategy per intent (Emergency vs. Repair vs. Install all need different headline structures), all extensions (call/sitelink/callout/snippet/lead form), and the conversion tracking setup (CallRail + GTM + Enhanced Conversions for Leads).
- **`cro-strategy`** for the emergency landing page build — phone prominence, trust strip, mobile UX, form friction.
- **`/ads-audit`** to generate the dark-mode HTML deliverable version of this audit if you want it client-facing.

---

## One-Sentence Summary

You're running a 2018 account architecture into 2026 platform mechanics during peak Houston summer demand — restructure into 3 clean Search campaigns + LSA + (later) PMax with the Day-0 settings flips above, and expect blended CPL to drop from $112 toward $55 over the next 60 days while reach actually expands.
