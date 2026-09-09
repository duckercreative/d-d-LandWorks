---
name: google-ads-keywords
description: >
  Google Ads keyword methodology for 75 Degree AC and HVAC contractors. Covers
  HVAC intent buckets, campaign/ad-group mapping, phrase vs exact vs broad
  usage, brand bidding, layered negative-keyword architecture, search-terms
  triage, Houston-suburb keyword sets, and keyword-level Quality Score
  diagnosis. Use when the user asks about keywords, match types, negatives,
  search terms reports, junk traffic, brand defense, ad-group keyword
  structure, or where a keyword belongs in an HVAC account. Pair with
  `google-ads-strategy` for campaign architecture and `google-ads-copy` for ad
  messaging aligned to these keywords.
version: 2.1.0
client: 75 Degree AC
last_updated: 2026-05-03
---

# Google Ads Keywords — HVAC, 2026 Texas Edition

## Why This Skill Was Rewritten in May 2026

Three platform changes from 2024–2025 invalidated the older keyword playbook:

1. **Close variants now eat exact match share.** Google's match-type expansion means `[emergency ac repair houston]` matches "ac emergency repair near me in houston tx", "fix my ac houston now", and dozens more. Exact is no longer exact. Phrase has effectively become the workhorse match type for HVAC accounts.
2. **Auto-applied recommendations silently mutate keyword lists.** If you don't actively turn off "Add new keywords" in Account-level recommendations, Google will add keywords you never intended (often broad-match versions of your phrase keywords).
3. **Bot/scraper traffic on broad-match HVAC keywords** has gotten bad enough that Broad is now a Phase-3-only tool, and only with very tight negatives.

If you read just one paragraph: **Phrase is the default match type for HVAC in 2026.** Use Exact only for proven converters and brand defense. Use Broad only after you have 60+ conversions per ad group AND a dialed-in negative-keyword list. Every other rule below flows from this.

---

## Core Principles

### 1. Intent first, geography second
Every keyword belongs to one of 6 intent buckets (below). Bucket determines campaign + ad group. Geography is a modifier, not a category.

### 2. Match type is a control mechanism, not a quality marker
Phrase isn't "less aggressive than exact" — it's a different control. Phrase controls *intent breadth*, Exact controls *query specificity*, Broad controls *discovery*. Use the right one for the job.

### 3. Negatives are as important as positives
A keyword without a negative-keyword shield is an open wallet. Build negatives in three layers: account-level (apply to all campaigns), campaign-level (apply to all ad groups in that campaign), ad-group-level (cross-contamination prevention).

### 4. Search Terms drive the next iteration
The keyword list you launch with is a hypothesis. The Search Terms report tells you if you were right. Triage weekly, no exceptions.

---

## The 6 HVAC Keyword Intent Categories

Every keyword must be classified before campaign assignment. Wrong placement = wasted spend and bid compromise.

### 1. Emergency Intent → Campaign 1, AGs 1/3/4
Person is in crisis right now. Highest bids — they convert in minutes.
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
ac repair tonight
```
**Why a separate bucket:** Emergency converts at 12-18% with $45-80 CPL. General repair converts at 8-14% with $40-70 CPL. Mixing them forces a bid compromise; the bid that's right for emergency overpays for general repair.

### 2. Symptom Intent → Campaign 1, AG2 (separate ad group)
AC is running but malfunctioning. Converts same day. Slightly lower bids than emergency (the urgency is "today," not "now").
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
ac freezing up
ac smells musty
ac trips breaker
ac short cycling
```
**Houston-specific symptoms** — these convert exceptionally well in summer:
- `ac freezing up houston` (humidity → coil ice)
- `ac smells musty houston` (mold growth in ducts)
- `ac unit leaking water houston` (drain pan overflow)

### 3. General Repair Intent → Campaign 2
Need repair, not necessarily today, may shop around.
```
ac repair houston
hvac repair near me
air conditioning repair katy tx
ac repair service houston
ac repair cypress tx
hvac contractor houston
ac technician houston
furnace repair houston
heater repair houston
heating repair houston
```

### 4. Installation/Replacement Intent → Campaign 3
Major purchase decision. Longer cycle. Landing page must support consultation/financing.
```
ac installation houston
new ac unit houston
ac replacement cost
central ac installation
ductless mini split installation
best ac unit for houston
hvac replacement houston
ac installation cost houston
new central ac houston
heat pump installation houston
ac unit replacement
how much new ac houston
```

### 5. Maintenance Intent → Campaign 4
Planned, proactive. Seasonal timing matters. Lowest urgency, lowest CPL.
```
ac tune up houston
ac maintenance service
hvac maintenance plan
ac inspection houston
pre-season ac service
ac service houston
hvac tune up
annual ac service
ac cleaning houston
furnace tune up houston
```

### 6. Commercial Intent → Campaign 5
High ticket, longer sales cycle, B2B decision-maker.
```
commercial ac repair houston
commercial hvac contractor
office building ac repair
commercial hvac maintenance contract
commercial rooftop unit repair
commercial ac installation houston
restaurant hvac repair houston
warehouse ac repair houston
```

---

## Match Type Strategy — 2026 Reality

### Match Type Progression by Phase (gated on per-campaign conversion volume)

| Phase | Per-campaign conversions/30d | Match types | Why |
|---|---|---|---|
| Launch | 0–14 | Phrase + Exact | Control spend, build clean signal |
| Growth | 15–59 | Phrase (primary) + Exact (proven) | Phrase carries reach as exact's close-variant matching expands |
| Scale | 60+ | Phrase + Exact + selective Broad | Broad mines discovery, gated by mature negatives |

### Exact Match `[keyword]` — narrower than the name suggests in 2026
**Use for:** Proven best converters, brand defense, must-not-miss queries.
```
[emergency ac repair houston]
[ac not cooling houston]
[24 hour ac repair katy tx]
[75 degree ac]
[75degreeac]
```
**Reality check:** Exact now matches close variants. `[emergency ac repair houston]` will match "emergency ac repair near houston tx" without your input. This is mostly fine for HVAC, but check Search Terms weekly — if a close variant is converting at half the rate, add it as a separate keyword to control its bid.

### Phrase Match `"keyword"` — the workhorse
**Use for:** Variations around a core intent theme. This is your default.
```
"emergency ac repair"
"ac not cooling"
"24 hour ac repair houston"
"ac repair near me"
"ac installation houston"
```
Phrase matches the meaning of your phrase, not exact words. It's now the closest thing to "old exact match" — tight enough to control intent, broad enough for variation.

### Broad Match — Phase 3 only
**Use ONLY after 60+ conversions per ad group AND a dialed negative list.**
- Risk: Will match irrelevant queries. Burns budget fast on a new campaign.
- When: Phase 3 scaling, where you want to discover new converting query patterns.
- Pair with: Smart Bidding (Maximize Conversions or tCPA). Broad without Smart Bidding = guaranteed budget bonfire.

---

## Brand & Competitor Bidding Strategy

### Bid on your own brand: YES
```
[75 degree ac]
[75degreeac]
[75 degree ac houston]
"75 degree ac"
"75degreeac"
```
**Why:** Competitors will bid on your brand. If you don't show, they take your traffic at $1-2 CPC while you'd have got it at $0.10-0.30. Brand keyword QS is typically 10/10 because the LP-headline-keyword match is perfect, so the cost is trivial.

**Brand campaign settings:**
- Separate campaign (so you can see brand conversions distinct from generic)
- $20-30/day budget cap (rarely exhausts but sets a ceiling)
- Phrase + Exact only — never Broad on brand (would cannibalize generic searches)

### Bid on competitor brands: SELECTIVELY
**Don't:** Run a generic "competitor brand" campaign. CPLs are 2-3× generic, conversion rates are low because the searcher already has a brand in mind.

**Do:** Bid on competitors only when you have a clear, defensible angle ("Same-day, no overtime fees" beats a competitor known for after-hours surcharges).

If running competitor bidding:
- Separate campaign, capped budget
- Use ad copy that does NOT mention the competitor by name (Google Ads policy violation if you do)
- Headlines lead with your differentiator, not "Better than [competitor]"

---

## Negative Keyword Architecture — Three Layers

### Layer 1 — Account-Level / Shared Negative List (apply to ALL campaigns)

Build this list as a Shared Library negative list and attach it to every Search campaign. Saves you from duplicating across campaigns.

```
# DIY / Informational
how to, diy, tutorial, youtube, guide, manual, diagram, video,
repair yourself, do it yourself, fix it yourself, fix my own

# Jobs / Hiring / Education
jobs, career, hiring, salary, employment, hvac jobs, technician jobs,
work for, internship, apprenticeship, school, training, certification,
classes, course, certificate, license course, license class

# Wrong product
window ac, portable ac, car ac, auto ac, automotive, rv ac, boat ac,
camper ac, marine, vehicle ac, swamp cooler, evaporative cooler

# Parts only
ac parts, hvac parts, refrigerant only, freon only, ac filter,
parts store, supply house, part number, replacement parts only,
buy parts, parts dealer

# Out of geography (Texas cities you don't serve)
dallas, austin, san antonio, fort worth, el paso, lubbock, amarillo,
corpus christi, beaumont, plano, mckinney, frisco, irving

# Out of state (cities named "Richmond", "Houston", etc. that aren't TX)
richmond va, richmond virginia, richmond california,
houston ms, houston mississippi, houston bc

# Warranty / no-pay
warranty, under warranty, manufacturer warranty, free repair,
home warranty, american home shield, choice home warranty

# Coupon / discount hunting (low-value traffic)
coupon, free, cheap, free estimate only, price only, just price,
free quote only, just looking, browsing
```

### Layer 2 — Campaign-Level Negatives

Each campaign gets cross-contamination negatives that match what *other* campaigns own.

**Emergency Campaign — exclude:**
```
tune up, maintenance, inspection, annual service, service plan,
service contract, install, installation, replacement, new ac, new system,
new unit, commercial
```

**Maintenance Campaign — exclude:**
```
emergency, broken, not working, not cooling, blowing warm,
24 hour, same day, today, tonight, weekend, leaking, install, replacement
```

**Installation Campaign — exclude:**
```
repair, fix, broken, not working, not cooling, emergency, same day repair,
service, tune up, maintenance, parts, refrigerant
```

**Commercial Campaign — exclude:**
```
home, residential, house, apartment, condo, my house, my home
```

### Layer 3 — Ad-Group-Level Negatives (within campaigns)
Within a campaign, prevent ad groups from poaching each other's queries.

**Within Campaign 1 (Emergency):**
- AG1 (24-Hour) excludes: "not cooling", "blowing warm" (those go to AG2)
- AG2 (Symptom) excludes: "emergency", "24 hour", "same day" (those go to AG1/4)
- AG3 (Broken) excludes: tune up, maintenance keywords
- AG4 (Same-Day) excludes: "scheduled", "appointment", "next week"

### The 5 Negatives Most HVAC Managers Miss
1. **`school` / `training` / `certification`** — "hvac school near me", "ac repair training" waste budget
2. **`warranty`** — "ac still under warranty" = they won't pay you
3. **`richmond virginia` / `richmond va`** — Google occasionally matches Richmond TX targeting to Richmond VA queries
4. **`free`** — "free ac repair", "free estimate only" attracts price-only traffic that won't book
5. **`amazon`** — "ac unit on amazon", "ac on amazon delivery" — comparison-shopping intent

### Negative-Keyword Lifecycle (when to REMOVE a negative)

Negatives can become outdated. Review the negative list quarterly.

**Remove when:**
- The negative is blocking a query that's now relevant (e.g., you previously excluded "free" but you now run a "free estimate" promotion)
- The negative is a substring of a high-value brand term (e.g., excluding "service" blocks "75 degree ac service")
- A campaign-level negative is in conflict with that campaign's own keywords (Google won't serve the ad)

**Audit method:** Filter Search Terms → "Did not show" reasons → "Blocked by negative". Spot-check whether each block was intended.

---

## Texas-Specific High-Value Keywords (Houston Market, May 2026)

### Emergency — bid aggressively (highest LTV)
```
emergency ac repair houston
emergency ac repair katy tx
emergency ac repair sugar land tx
emergency ac repair richmond tx
24 hour ac repair houston
24 hour ac repair katy tx
ac not working houston
ac repair today houston
ac broke down houston
emergency hvac repair near me
same day ac repair houston
weekend ac repair houston
ac repair tonight houston
```

### Symptom — great CPL, lower competition
```
ac not cooling houston
ac not blowing cold air houston
ac running but not cooling houston
ac blowing warm air houston
ac stopped working houston
ac making loud noise houston
ac leaking water inside houston
ac unit not turning on houston
ac freezing up houston
ac smells musty houston
ac short cycling houston
ac trips breaker houston
```

### High-ticket installation
```
new ac unit houston
ac replacement cost houston
central ac installation houston
best ac unit for houston
hvac replacement houston
ductless mini split installation houston
heat pump installation houston
ac installation financing houston
new ac unit cost houston
```

### Heating (October–February peak)
```
furnace repair houston
heater not working houston
emergency heater repair houston
furnace installation houston
heat pump repair houston
no heat houston
heater blowing cold air houston
furnace replacement houston
gas furnace repair houston
```

### Suburb modifiers — append to core keywords
- Katy TX / Katy Texas
- Sugar Land TX
- Cypress TX
- The Woodlands TX
- Spring TX
- Tomball TX
- Missouri City TX
- Richmond TX
- Pearland TX
- Pasadena TX
- Memorial / River Oaks / Heights / Montrose (named neighborhoods in Houston)

### Houston Geographic Quirks
- **"Houston Heights"** — neighborhood, not a separate city. Add as keyword variation, not a geo target.
- **"Memorial"** — area within Houston, not a city. Same.
- **Richmond TX vs Richmond VA** — always negative `virginia`, `va` at account level when running Richmond TX keywords.

---

## Search Terms Triage — Decision Tree

Run this every Monday. Filter Search Terms report by Last 7 Days.

```
For each search term:
│
├── Did it convert? (1+ conversion in period)
│     YES → Is it already a keyword?
│            YES → leave it alone (already counted)
│            NO  → ADD as new Exact match keyword (or Phrase if Phase 1)
│     NO  → continue
│
├── Did it spend > $30 with 0 conversions AND >5 clicks?
│     YES → Is it relevant to your service?
│            YES → ad/LP problem, don't negative yet — fix the creative
│            NO  → ADD as negative
│     NO  → continue
│
├── Is it junk traffic? (jobs, parts, DIY, out-of-area, warranty, school)
│     YES → ADD as negative (use Account-level shared list if applicable across campaigns)
│     NO  → continue
│
└── Any clicks but <$30 spend, 0 conversions?
      → Leave it. Insufficient data — re-evaluate next week.
```

### Search-Terms Triage Worked Example

Search term: `how to fix my ac youtube`
- Converted? No
- Spent > $30 with >5 clicks? Likely yes by week 2
- Junk? Yes (DIY/YouTube intent)
- **Action:** Add `youtube` and `how to fix` as account-level negatives

Search term: `ac repair richmond va`
- Converted? No
- Junk? Yes (out-of-state)
- **Action:** Add `virginia`, `va`, `richmond va` as account-level negatives

Search term: `commercial ac repair downtown houston`
- Converted? Yes ($68 CPL, 1 conv from 4 clicks)
- Already a keyword? Probably not, since it's specific
- **Action:** Add as Exact-match keyword in Campaign 5 Commercial

---

## Keyword-to-Ad-Group Mapping Rules

| Search query type | Campaign | Ad Group | Match Type |
|---|---|---|---|
| emergency + [city] | Campaign 1 | AG1 (24-Hour) | Exact + Phrase |
| 24 hour / 24/7 / same day | Campaign 1 | AG4 (Same-Day) | Exact + Phrase |
| symptom (not cooling, blowing warm) | Campaign 1 | AG2 (Symptom) | Phrase first |
| ac not working / broken | Campaign 1 | AG3 (Broken) | Exact + Phrase |
| ac repair + [city] (no urgency) | Campaign 2 | AG1/AG2 by geo | Phrase |
| heating / furnace / heater repair | Campaign 2 | AG4 (Heating) | Phrase |
| ac installation / replacement | Campaign 3 | by service line | Phrase |
| tune-up / maintenance / inspection | Campaign 4 | by service line | Phrase |
| commercial + any service | Campaign 5 | by service line | Phrase |
| 75 degree ac (brand) | Brand campaign | n/a | Exact + Phrase |

**Critical rule:** Heating keywords go in **Campaign 2 AG4**, NOT in the Emergency AC Repair campaign. Mixing dilutes ad relevance, hurts QS, creates ad-to-keyword mismatch.

**Critical rule:** Commercial keywords get their own campaign — never an ad group inside a residential campaign. B2B intent and B2C intent need different ad copy and landing pages entirely.

---

## Quality Score Diagnostic by Keyword

Target QS:
- Emergency keywords: **7+**
- General repair: **7+**
- Installation: **6+**
- Brand: should be 10/10 — if not, your brand LP is misconfigured

QS ≤4 after 100+ impressions → pause and fix:
- **QS 1–3:** Landing page experience — page is slow, irrelevant, or not mobile-friendly
- **QS 4–5:** Ad relevance — keyword not in any headline of any RSA in this ad group
- **QS 6:** Expected CTR — ad copy not compelling enough; test a stronger angle (urgency, social proof, specific price)

**Weekly QS audit:** Google Ads → Keywords tab → Columns → Add: `Qual. score`, `Landing page exp.`, `Ad relevance`, `Exp. CTR`. Sort by QS asc. Fix the worst first.

---

## Complete Starter Pack — 75 Degree AC Houston

This is the copy-paste-ready keyword + match-type + negative pack for the 5-campaign architecture defined in `google-ads-strategy`. Use as the day-one launch list.

### Campaign 1: Emergency AC Repair

**AG1 — 24-Hour / Emergency**
```
Phrase:
"emergency ac repair"
"emergency hvac repair"
"24 hour ac repair"
"24/7 ac repair"
"24 hour hvac near me"
"weekend ac repair"
"after hours ac repair"
Exact:
[emergency ac repair houston]
[emergency ac repair katy tx]
[24 hour ac repair houston]
[emergency hvac repair near me]
```

**AG2 — Symptom**
```
Phrase:
"ac not cooling"
"ac blowing warm air"
"ac running but not cooling"
"ac making loud noise"
"ac leaking water"
"ac freezing up"
"ac unit not turning on"
"ac short cycling"
Exact:
[ac not cooling houston]
[ac blowing warm air houston]
[ac freezing up houston]
```

**AG3 — Broken / Not Working**
```
Phrase:
"ac broke down"
"ac stopped working"
"ac not working"
"no ac in house"
"ac unit broken"
Exact:
[ac broke down houston]
[ac not working houston]
```

**AG4 — Same-Day / Today**
```
Phrase:
"same day ac repair"
"ac repair today"
"ac repair tonight"
"ac repair now"
"fix ac today"
Exact:
[same day ac repair houston]
[ac repair today houston]
```

### Campaign 2: AC & HVAC Repair General

**AG1 — Houston Metro**
```
Phrase: "ac repair houston", "hvac repair houston", "ac technician houston", "hvac contractor houston"
Exact: [ac repair houston], [hvac repair houston]
```

**AG2 — Suburbs**
```
Phrase: "ac repair katy", "ac repair sugar land", "ac repair cypress", "ac repair richmond tx", "ac repair the woodlands", "ac repair spring tx", "ac repair tomball"
Exact: [ac repair katy tx], [ac repair sugar land tx], [ac repair richmond tx]
```

**AG3 — General HVAC**
```
Phrase: "hvac repair near me", "air conditioning repair houston", "ac repair service"
```

**AG4 — Heating / Furnace**
```
Phrase: "furnace repair houston", "heater repair houston", "heating repair houston", "no heat houston", "furnace not working houston", "heat pump repair houston", "gas furnace repair"
Exact: [furnace repair houston], [emergency heater repair houston]
```

### Campaign 3: AC Installation/Replacement

```
Phrase: "ac installation houston", "new ac unit houston", "ac replacement houston", "central ac installation", "ductless mini split installation houston", "heat pump installation houston", "ac replacement cost houston"
Exact: [ac installation houston], [new ac unit houston]
```

### Campaign 4: Maintenance / Tune-Up

```
Phrase: "ac tune up houston", "ac maintenance houston", "hvac maintenance plan", "ac inspection houston", "annual ac service houston"
Exact: [ac tune up houston]
```

### Campaign 5: Commercial HVAC

```
Phrase: "commercial ac repair houston", "commercial hvac contractor houston", "commercial hvac maintenance contract", "office ac repair houston", "commercial rooftop unit repair"
Exact: [commercial ac repair houston]
```

### Brand Campaign

```
Exact: [75 degree ac], [75degreeac], [75 degree ac houston]
Phrase: "75 degree ac"
```

---

## When to Defer to Other Skills

- **Campaign architecture, budget split, bidding phases** → `google-ads-strategy`
- **Writing the ad copy that mirrors these keywords** → `google-ads-copy`
- **Landing-page audit and CRO fixes** → `cro-strategy`
- **Reviewing competitor keyword bids** → `competitor-analysis`
