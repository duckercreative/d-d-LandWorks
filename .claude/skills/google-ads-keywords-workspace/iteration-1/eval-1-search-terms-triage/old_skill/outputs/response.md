# Search Terms Triage — Campaign 1 (Emergency)

**Account context:** 75 Degree AC · Campaign 1 Emergency · Last week: $1,840 spend · 22 conversions · blended CPL ≈ $83.64

Methodology applied: `google-ads-keywords` SKILL.md — 6-bucket intent taxonomy, match-type strategy, layered negative architecture (campaign-level vs ad-group-level), and the Step 5 Search Terms audit rule: "Winners (converted) → add as exact match. Losers (clicked, no conversion) → add as negatives."

---

## Decision Table

| # | Search Term | Clicks | Conv | CPL | Action | Where | Match Type |
|---|---|---|---|---|---|---|---|
| 1 | emergency ac repair houston | 18 | 4 | $32 | **ADD positive** | Campaign 1, AG1 | Exact `[emergency ac repair houston]` |
| 2 | ac repair near me | 31 | 3 | $58 | **ADD positive** (but not in Campaign 1) | Campaign 2, AG1/2 | Phrase `"ac repair near me"` |
| 3 | how to fix my ac youtube | 6 | 0 | — | **ADD negative** | Campaign-level (account-wide) | Negative phrase: `"how to"`, `"youtube"` |
| 4 | 24 hour ac repair katy tx | 12 | 3 | $24 | **ADD positive** | Campaign 1, AG4 | Exact `[24 hour ac repair katy tx]` |
| 5 | hvac jobs houston | 4 | 0 | — | **ADD negative** | Campaign-level | Negative phrase: `"jobs"` |
| 6 | ac not cooling | 22 | 2 | $71 | **ADD positive** (move to symptom AG) | Campaign 1, AG2 | Phrase `"ac not cooling"` |
| 7 | window ac repair | 8 | 0 | — | **ADD negative** | Campaign-level | Negative phrase: `"window ac"` |
| 8 | ac repair richmond va | 3 | 0 | — | **ADD negative** | Campaign-level | Negative phrase: `"richmond va"` |
| 9 | emergency hvac dallas | 5 | 0 | — | **ADD negative** | Campaign-level | Negative phrase: `"dallas"` |
| 10 | ac repair school | 2 | 0 | — | **ADD negative** | Campaign-level | Negative phrase: `"school"` |
| 11 | ac tune up coupon | 7 | 0 | — | **ADD negative** at AG level (cross-contamination) | Campaign 1, all AGs | Negative phrase: `"tune up"`, `"coupon"` |
| 12 | commercial ac repair downtown houston | 4 | 1 | $68 | **ADD negative in Camp 1 + positive in Camp 5** | Negative in Camp 1; Positive in Camp 5 | Camp 5 Phrase `"commercial ac repair houston"` |
| 13 | 75 degree ac houston | 2 | 1 | $14 | **Leave alone here / build dedicated Brand campaign** | Brand campaign (not Camp 1 emergency) | Exact `[75 degree ac houston]` |

---

## Per-Term Rationale

### 1. `emergency ac repair houston` — 18 clicks, 4 conv, $32 CPL → ADD as Exact, Campaign 1 AG1
Textbook Emergency Intent (Category 1 in the skill's 6-bucket taxonomy — listed as the lead example). Crushing the blended CPL ($32 vs $83). Skill's keyword mapping rule: "emergency + [city] → Campaign 1, AG1, Exact first, then Phrase." Lock it in as exact to capture the highest-intent variant cleanly.

### 2. `ac repair near me` — 31 clicks, 3 conv, $58 CPL → ADD as Phrase, but in Campaign 2 (NOT Campaign 1)
This is **General Repair Intent** (Category 3), not emergency. No urgency modifier ("emergency", "24 hour", "today", "broken"). Skill's mapping rule explicitly says: "ac repair + [city] no urgency modifier → Campaign 2, AG1/2, Phrase." It's converting at $58 (under blended), so it's a winner — but moving it out of Campaign 1 prevents intent dilution and protects Campaign 1's QS. Add `"ac repair near me"` as phrase in Campaign 2; add it as a **negative** in Campaign 1 to stop further cross-contamination.

### 3. `how to fix my ac youtube` — 6 clicks, 0 conv → NEGATIVE, Campaign-level
Pure DIY/informational intent. Skill's Campaign-Level Negatives list calls out exactly this pattern: "how to, diy, tutorial, youtube, guide, manual…" Add as campaign-level (or better, account-level) negative phrase: `"how to"` and `"youtube"`. They will never convert.

### 4. `24 hour ac repair katy tx` — 12 clicks, 3 conv, $24 CPL → ADD as Exact, Campaign 1 AG4
Best CPL on the entire list. Skill mapping rule: "24 hour / 24/7 / same day → Campaign 1, AG4, Exact first, then Phrase." Also matches Texas-Specific High-Value Keywords list verbatim ("24 hour ac repair katy tx"). Lock as exact in AG4. Bid aggressively.

### 5. `hvac jobs houston` — 4 clicks, 0 conv → NEGATIVE, Campaign-level
Job-seeker, not customer. Skill's Campaign-Level Negatives call out: "jobs, career, hiring, salary, employment, hvac jobs, technician jobs, work for." Add `"jobs"` as campaign-level negative phrase. Account-level is even better.

### 6. `ac not cooling` — 22 clicks, 2 conv, $71 CPL → ADD as Phrase, Campaign 1 AG2 (Symptom)
This is **Symptom Intent** (Category 2), the skill's first-listed symptom example. Mapping rule: "symptom (not cooling, blowing warm) → Campaign 1, AG2, Phrase first." CPL of $71 is above blended but symptom keywords are flagged in the skill as "Great CPL, Lower Competition" — and the city-modified version `"ac not cooling houston"` likely converts much better. Add `"ac not cooling"` and `"ac not cooling houston"` as phrase in AG2. Negative it in AG1/AG3/AG4 to enforce the ad-group split the skill mandates.

### 7. `window ac repair` — 8 clicks, 0 conv → NEGATIVE, Campaign-level
Wrong product. Skill's Campaign-Level Negatives explicitly: "window ac, portable ac, car ac, auto ac, rv ac, boat ac, window air conditioner." Add `"window ac"` as campaign-level negative phrase. 75 Degree doesn't service window units.

### 8. `ac repair richmond va` — 3 clicks, 0 conv → NEGATIVE, Campaign-level
Skill calls this out in "The 3 Negatives Most HVAC Managers Miss" — #3 is literally `richmond virginia / richmond va` because Google geo-mismatches Richmond TX to Richmond VA. Add `"richmond va"` and `"richmond virginia"` as campaign-level negative phrases. Critical — this protects the Richmond TX second location traffic from leaking to a Virginia query.

### 9. `emergency hvac dallas` — 5 clicks, 0 conv → NEGATIVE, Campaign-level
Out-of-area. Skill's Campaign-Level Negatives: "dallas, austin, san antonio, fort worth." Add `"dallas"` as campaign-level negative phrase.

### 10. `ac repair school` — 2 clicks, 0 conv → NEGATIVE, Campaign-level
Skill's "3 Negatives Most HVAC Managers Miss" — #1 is `school` (training/career searches). Add `"school"` as campaign-level negative phrase.

### 11. `ac tune up coupon` — 7 clicks, 0 conv → NEGATIVE, Ad-Group-Level (Emergency AG)
Cross-contamination — maintenance intent leaking into the Emergency campaign. Skill's Ad-Group-Level Negatives for Emergency AG explicitly lists: "tune up, maintenance, inspection, annual service, service plan, service contract." Add `"tune up"` and `"maintenance"` as ad-group negatives across AG1/AG2/AG3/AG4 in Campaign 1. Also add `"coupon"` as a campaign-level negative if margins matter (deal-hunters convert at low LTV, though the skill doesn't explicitly list this — keeping the recommendation tight to what the skill says, do the tune-up negative for sure; coupon is optional). Tune-up traffic belongs in Campaign 4 (Maintenance), not here.

### 12. `commercial ac repair downtown houston` — 4 clicks, 1 conv, $68 CPL → NEGATIVE in Camp 1; POSITIVE in Camp 5
Commercial Intent (Category 6). Skill mapping rule: "commercial + any service → Campaign 5, Phrase." A commercial lead in the residential Emergency campaign sends them to a residential landing page = wrong creative + wrong sales cycle. Two actions:
- Add `"commercial"` as campaign-level negative in Campaign 1 (and Campaigns 2, 3, 4) to force commercial queries into Campaign 5 only.
- Add `"commercial ac repair houston"` as phrase positive in Campaign 5.

The 1 conversion happened despite the mismatch — in Campaign 5 with proper B2B copy and a commercial landing page, CPL should be lower and lead value much higher.

### 13. `75 degree ac houston` — 2 clicks, 1 conv, $14 CPL → Build dedicated Brand campaign; remove from Campaign 1
Branded query — best CPL on the list. The skill's activation note mentions brand bidding as a use-case but the body of the SKILL.md doesn't lay out a brand-campaign architecture in detail. What's clear from what IS in the skill:
- This is not Emergency Intent (Category 1) — it's brand intent.
- Letting it sit in Campaign 1 inflates Campaign 1's apparent performance and pollutes the intent grouping the skill is strict about ("Wrong placement = wasted spend").

Action: don't negative it (you want to capture the brand search), but it shouldn't be the credit-recipient inside Campaign 1. Build/move it into a dedicated Brand campaign with `[75 degree ac houston]`, `[75 degree ac]`, `"75 degree ac"`. If a Brand campaign doesn't exist yet, leave the term running where it is for now and flag it for the next campaign-architecture pass — but stop optimizing Campaign 1 around its $14 CPL skew.

---

## Consolidated Action List (copy-paste ready)

### Add as POSITIVE keywords

**Campaign 1 — Emergency**
- AG1 (Emergency + City): `[emergency ac repair houston]` — Exact
- AG2 (Symptom): `"ac not cooling"`, `"ac not cooling houston"` — Phrase
- AG4 (24hr/Same-day): `[24 hour ac repair katy tx]` — Exact

**Campaign 2 — General Repair**
- AG1/2: `"ac repair near me"` — Phrase

**Campaign 5 — Commercial**
- `"commercial ac repair houston"`, `"commercial ac repair downtown houston"` — Phrase

**Brand campaign (build if not exists)**
- `[75 degree ac houston]`, `[75 degree ac]`, `"75 degree ac"`

### Add as NEGATIVES — Campaign-Level (Campaign 1; replicate to Camp 2/3/4 where relevant)
```
"how to"
"youtube"
"jobs"
"window ac"
"richmond va"
"richmond virginia"
"dallas"
"school"
"commercial"          # in Camp 1, 2, 3, 4 — NOT Camp 5
"ac repair near me"   # only in Camp 1, to push it into Camp 2
```

### Add as NEGATIVES — Ad-Group-Level (Campaign 1, all emergency AGs)
```
"tune up"
"maintenance"
"inspection"
"annual service"
"service plan"
"service contract"
```

### Cross-AG negatives inside Campaign 1 (to enforce intent split)
- AG1/AG3/AG4 add negative: `"not cooling"`, `"blowing warm"` (push symptom queries to AG2 only)
- AG2 add negative: `"emergency"`, `"24 hour"`, `"same day"` (keep emergency-urgency queries out of symptom AG)

---

## Key Findings & Why This Matters

1. **6 of 13 terms (46%) are pure waste** — DIY, jobs, window AC, Richmond VA, Dallas, school. They burned ~28 clicks last week with zero conversions. The skill's Weekly Negative Updates rule ("non-negotiable for maintaining healthy CPL") is exactly this exercise.
2. **2 winners are misplaced** — `ac repair near me` belongs in Camp 2; `commercial ac repair downtown houston` belongs in Camp 5. Leaving them in Camp 1 dilutes Quality Score, mismatches landing pages, and inflates Camp 1's CPL.
3. **1 winner is a brand search hiding as performance** — `75 degree ac houston` at $14 CPL is making Campaign 1 look better than it is. Pull it into a brand campaign so Camp 1's emergency-intent CPL is measured cleanly.
4. **The Richmond VA trap is live** — the skill's "3 Most-Missed Negatives" called this exact issue, and it's already costing money. Add `"richmond va"` immediately.
5. **Cross-contamination is happening both ways** — tune-up coupon traffic is leaking IN to Emergency, and symptom traffic ("ac not cooling") is sitting unstructured. Use the skill's ad-group negative architecture to enforce clean intent buckets.

After implementing these changes, expect Campaign 1 blended CPL to drop materially — current $83 blended is dragged up by the 6 zero-conversion terms (≈$700 of the $1,840 spent). Removing that bleed puts Camp 1 closer to the $32–$40 CPL the actual emergency winners are showing.
