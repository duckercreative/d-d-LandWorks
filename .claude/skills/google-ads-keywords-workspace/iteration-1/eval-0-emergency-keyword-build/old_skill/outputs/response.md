# Emergency AC Repair — Campaign 1 Keyword Build (75 Degree AC, Houston)

Built strictly from the `google-ads-keywords` SKILL.md methodology (6 intent categories, match-type progression, layered negatives, Texas-specific high-value list, keyword mapping rules).

Markets covered: **Houston, Katy TX, Sugar Land TX, Cypress TX, Richmond TX**.

---

## 1. Ad Group Architecture

Per the SKILL Keyword Mapping table, Emergency intent (Category 1) and Symptom intent (Category 2) both belong inside Campaign 1 but in **separate ad groups**, with distinct match-type defaults. Emergency itself is split across AG1, AG3, AG4 in the skill — they share a campaign but carry different query patterns and copy angles.

| AG # | Ad Group Name | Intent Bucket | Query Pattern | Match-Type Default (Launch) |
|---|---|---|---|---|
| AG1 | Emergency + City | Emergency Intent (Cat 1) | `emergency + [city]` | Exact first, then Phrase |
| AG2 | Symptom — AC Not Cooling / Warm Air | Symptom Intent (Cat 2) | symptom phrases (not cooling, blowing warm, leaking, noise) | Phrase first |
| AG3 | AC Broken / Not Working | Emergency Intent (Cat 1) | `ac not working`, `broken ac`, `ac stopped` | Exact first |
| AG4 | 24/7 / Same-Day / Today | Emergency Intent (Cat 1) | `24 hour`, `24/7`, `same day`, `today`, `weekend` | Exact first, then Phrase |

Reason for splitting AG1/AG3/AG4 instead of one big "emergency" group: the SKILL maps `24 hour / 24/7 / same day` and `ac not working / broken` as separate rows in the Keyword Mapping table, each with their own match-type default. Splitting also lets ad copy mirror the exact query (Quality Score lever — see SKILL "Quality Score by Keyword", target 7+).

**Critical rule from SKILL:** Heating/furnace/heater emergency keywords do **NOT** go in this campaign. They belong in Campaign 2 AG4. Mixing them here dilutes ad relevance and tanks Quality Score.

---

## 2. Keywords by Ad Group (Launch Set — Phase 1)

Phase 1 = Launch (Month 1) → **Exact + Phrase only**, no Broad. Broad gets unlocked at 60+ conversions per the SKILL Match Type Progression.

### AG1 — Emergency + City

**Exact match (priority — highest intent):**
```
[emergency ac repair houston]
[emergency ac repair katy tx]
[emergency ac repair sugar land tx]
[emergency ac repair cypress tx]
[emergency ac repair richmond tx]
[emergency hvac repair houston]
[emergency hvac repair near me]
[emergency air conditioning repair houston]
```

**Phrase match (variation coverage):**
```
"emergency ac repair"
"emergency hvac repair"
"emergency air conditioning repair"
"emergency ac service"
"emergency ac repair houston"
"emergency ac repair katy"
"emergency ac repair sugar land"
"emergency ac repair cypress"
"emergency ac repair richmond tx"
```

### AG2 — Symptom (AC Not Cooling / Warm Air / Leaking / Noise)

Per SKILL: "Phrase first" for symptom keywords — symptoms are described many ways, so phrase captures variation while staying tight.

**Phrase match (priority):**
```
"ac not cooling"
"ac not blowing cold air"
"ac running but not cooling"
"ac blowing warm air"
"ac making noise"
"ac making loud noise"
"ac leaking water"
"ac leaking water inside"
"ac unit not turning on"
"ac stopped working"
```

**Exact match (proven Texas-specific from SKILL "Symptom — Great CPL"):**
```
[ac not cooling houston]
[ac not blowing cold air houston]
[ac running but not cooling houston]
[ac blowing warm air houston]
[ac stopped working houston]
[ac making loud noise houston]
[ac leaking water inside houston]
[ac unit not turning on houston]
```

### AG3 — AC Broken / Not Working

**Exact match (priority — SKILL maps these as "Exact first"):**
```
[ac not working houston]
[ac not working katy tx]
[ac not working sugar land tx]
[ac not working cypress tx]
[ac not working richmond tx]
[ac broke down houston]
[ac broke down katy tx]
[ac broke down sugar land tx]
[no ac in house houston]
[broken ac houston]
```

**Phrase match:**
```
"ac not working"
"ac broke down"
"broken ac"
"no ac in house"
"ac wont turn on"
"ac unit broken"
```

### AG4 — 24/7 / Same-Day / Today / Weekend

**Exact match (priority — SKILL: "Exact first, then Phrase"):**
```
[24 hour ac repair]
[24 hour ac repair houston]
[24 hour ac repair katy tx]
[24 hour ac repair sugar land tx]
[24 hour ac repair cypress tx]
[24 hour ac repair richmond tx]
[24/7 hvac near me]
[24hr ac repair]
[same day ac repair near me]
[same day ac repair houston]
[ac repair today houston]
[weekend ac repair houston]
```

**Phrase match:**
```
"24 hour ac repair"
"24/7 ac repair"
"24/7 hvac"
"same day ac repair"
"ac repair today"
"weekend ac repair"
"ac repair tonight"
"ac repair right now"
```

**Total launch keywords:** ~60 (heavy Exact, supplemented Phrase). Phase 2 (Month 2–3) adds selective Broad on AG1's proven city + emergency combinations once they hit conversion threshold.

---

## 3. Campaign-Level Negative List

Applied to Campaign 1 globally — every ad group inherits these. Built directly from SKILL "Campaign-Level Negatives" + "The 3 Negatives Most HVAC Managers Miss."

### DIY / Informational
```
how to
diy
tutorial
youtube
guide
manual
diagram
video
repair yourself
do it yourself
```

### Jobs / Hiring / Training
```
jobs
career
hiring
salary
employment
hvac jobs
technician jobs
work for
school
hvac school
ac repair training
```
(`school` is one of the SKILL's "3 Negatives Most HVAC Managers Miss.")

### Wrong Product
```
window ac
window air conditioner
portable ac
car ac
auto ac
vehicle ac
rv ac
boat ac
```

### Parts Only
```
ac parts
hvac parts
refrigerant only
freon only
ac filter
parts store
supply house
```

### Out-of-Area / Wrong-Geo Defense
```
dallas
austin
san antonio
fort worth
richmond virginia
richmond va
```
**Critical** — `richmond virginia` and `richmond va` are explicitly called out in the SKILL because Google match-extends "richmond tx" queries to Richmond VA. These two negatives are mandatory the day this campaign goes live.

### Won't-Pay / Won't-Convert
```
warranty
ac still under warranty
under warranty
free ac repair
free hvac
```
(`warranty` is one of the SKILL's "3 Negatives Most HVAC Managers Miss" — they won't pay you.)

---

## 4. Ad-Group-Level Negatives (Cross-Contamination Prevention)

These layer on TOP of campaign negatives. Architecture is from the SKILL "Ad Group-Level Negatives" section — Emergency AG must exclude maintenance, and Maintenance/Installation campaigns must exclude emergency. Below is the full cross-contamination matrix.

### Applied to ALL emergency ad groups in this campaign (AG1, AG3, AG4) — exclude maintenance terms

```
tune up
tune-up
tuneup
maintenance
inspection
annual service
service plan
service contract
maintenance plan
maintenance agreement
preventive maintenance
pre-season
pre season
seasonal service
```

### Also exclude install/replacement intent from emergency ad groups

(SKILL's Installation AG excludes repair terms — by symmetry, repair/emergency AGs should exclude install/replacement to keep search query → ad → landing page tight.)
```
installation
install cost
new ac unit
ac replacement
ac replacement cost
replace ac
replace hvac
new hvac
new system
new central ac
ductless installation
mini split installation
ac installation cost
```

### AG2 (Symptom) — additional exclusions

Symptom queries can drift into "how do I diagnose my AC" territory — already covered by campaign DIY negatives, but tighten further:
```
sound like
what does it mean
why is my ac
why does my ac
reset
how to fix
recharge
```

### AG4 (24/7 / Same-Day) — extra exclusion

Avoid hotel/Airbnb noise:
```
hotel
airbnb
apartment complex
property manager
```
(Property manager queries are commercial intent — they belong in Campaign 5 per SKILL.)

---

## 5. Negatives to Add to OTHER Campaigns (so they don't steal Emergency traffic)

Per SKILL "Ad Group-Level Negatives" — symmetric protection so Maintenance and Installation campaigns don't cannibalize Emergency:

### Add to Campaign 4 (Maintenance) — exclude emergency terms
```
emergency
broken
not working
not cooling
24 hour
24/7
24hr
same day
today
tonight
weekend
right now
broke down
```

### Add to Campaign 3 (Installation/Replacement) — exclude repair terms
```
repair
fix
broken
not working
not cooling
emergency
same day repair
24 hour repair
broke down
ac wont turn on
```

This is the SKILL's stated cross-contamination architecture and is **non-negotiable** for keeping CPL healthy.

---

## 6. Brand Bidding Strategy — "75 degree ac"

The provided SKILL.md does **not** include a dedicated section on brand bidding (no "brand keyword" guidance, no competitor-conquesting playbook). The skill's scope is the 6 intent categories, match types, negatives, Texas keyword list, research process, mapping rules, and Quality Score targets. Brand bidding is silent in this skill version.

**What the skill DOES support directly:**

The Emergency campaign keyword set above intentionally excludes brand terms — none of the 6 intent categories in the SKILL are "brand intent." Brand queries (`75 degree ac`, `75degreeac`, `75 degree ac houston`, `75 degree ac reviews`, `75 degree ac phone number`) are a different intent category not covered by Campaign 1. They should not be added to AG1/AG3/AG4 — doing so would mismatch the campaign's emergency-intent ad copy and dilute Quality Score (SKILL: "QS 4–5: Ad relevance issue — keyword not in headlines").

**Recommendation given the skill is silent:** Do NOT add brand keywords to the Emergency campaign. Park the brand-bidding decision until a future spec covers it, OR run brand in a dedicated brand campaign (separate from these 5) where ad copy is brand-specific. Adding `75 degree ac` to this Emergency campaign would violate the SKILL's keyword-to-ad-group mapping discipline.

If the user wants a defensive call now, the conservative option that doesn't break SKILL methodology is: add `75 degree ac` and brand variants as **negatives** to all five SKILL-defined campaigns (1–5) so non-brand intent traffic stays clean, then handle brand separately outside this build. This preserves intent purity inside Campaign 1 and matches the SKILL's heavy emphasis on layered negatives and clean ad-group-to-query mapping.

---

## 7. Phase Plan & Match-Type Progression (per SKILL)

| Phase | Timing | Match Types Live | Action |
|---|---|---|---|
| 1 — Launch | Month 1 | Exact + Phrase only (above set) | Build conversion baseline, weekly search-terms audit |
| 2 — Growth | Month 2–3 | Add selective Broad on AG1 city+emergency winners | Only after city-level Exact has converted; tight negatives required |
| 3 — Scale | Month 4+ | All three match types | Maximum reach; negatives lists must be mature |

Broad match is **never** added before Phase 2. The SKILL is explicit: "Use ONLY after 60+ conversions AND solid negative keyword lists. Risk: Will match to irrelevant queries, burns budget fast on new campaigns."

---

## 8. Weekly Maintenance Cadence (per SKILL)

Every Monday — non-negotiable:

1. **Download Search Terms report** (last 7 days, Campaign 1 only).
2. **Triage every term:**
   - Converted → add as `[exact match]` to its proper ad group (AG1/AG2/AG3/AG4).
   - Clicked, no conversion, irrelevant → add as **negative** at the right level (campaign vs ad group — use the cross-contamination matrix above to decide).
   - Clicked, no conversion, relevant → leave; reassess at 30 clicks.
3. **Quality Score audit:** Add columns Qual. score, Landing page exp., Ad relevance, Exp. CTR. Pause any keyword at QS ≤ 4 after 100+ impressions and fix per SKILL diagnostic table:
   - QS 1–3 → landing page issue
   - QS 4–5 → keyword not in headlines (ad relevance)
   - QS 6 → CTR issue, test stronger headlines
4. **Target QS for Emergency campaign keywords: 7+** (SKILL benchmark).

---

## 9. Quick-Deploy Checklist

- [ ] Create Campaign 1 "Emergency AC Repair"
- [ ] Build 4 ad groups: AG1 Emergency+City, AG2 Symptom, AG3 Broken/Not Working, AG4 24/7/Same-Day
- [ ] Paste keyword sets above into each ad group (Exact + Phrase, no Broad)
- [ ] Apply campaign-level negative list (Section 3) at campaign scope
- [ ] Apply ad-group-level negatives (Section 4) per AG
- [ ] Confirm `richmond virginia` and `richmond va` are in campaign negatives (mandatory)
- [ ] Confirm `school`, `warranty`, `free` are in campaign negatives (the 3 most-missed)
- [ ] Add cross-protection negatives to Campaign 3 (Install) and Campaign 4 (Maintenance) — Section 5
- [ ] Set Monday recurring task: search-terms triage + QS column audit
- [ ] Brand keyword decision parked (skill is silent); recommend brand-as-negative on Campaign 1 to preserve intent purity

---

**Methodology source:** `.claude/skills/google-ads-keywords-workspace/skill-snapshot/google-ads-keywords/SKILL.md` (v1.0.0). All keyword classifications, match-type defaults, negative architecture, cross-contamination rules, Texas keyword list, and Quality Score targets are pulled directly from that file. Brand-bidding strategy flagged as out-of-scope for this skill version.
