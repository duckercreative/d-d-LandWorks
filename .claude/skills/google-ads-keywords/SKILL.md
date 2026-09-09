---
name: google-ads-keywords
description: >
  Google Ads keyword methodology for 75 Degree AC (Houston HVAC) and HVAC
  contractors. Covers the 6-bucket intent taxonomy (emergency / symptom /
  repair / install / maintenance / commercial), 2026 match-type strategy
  (Phrase as workhorse, Exact as precision, Broad Phase-3-only), brand
  bidding, three-layer negative architecture (account / campaign / ad-group),
  search-terms triage, Houston-suburb sets (Katy / Sugar Land / Cypress /
  Richmond TX) with Richmond-VA-vs-TX defense, day-one starter pack for 5
  campaigns + brand, and Quality Score diagnosis. Use whenever the user
  mentions keywords, match types, exact / phrase / broad match, bracketed
  keywords, negative keywords, search terms report, wasted clicks, keyword
  cannibalization, brand bidding, Richmond TX vs VA, building a keyword list,
  picking the right campaign / ad group for a keyword, or pastes search-term
  data — even without naming Google Ads. Pair with `google-ads-strategy` for
  campaigns and `google-ads-copy` for ad headlines.
version: 3.0.0
client: 75 Degree AC
last_updated: 2026-05-11
---

# Google Ads Keywords — HVAC, 2026 Texas Edition

## Why This Skill Was Rewritten in May 2026

Three platform changes from 2024–2025 invalidated the older keyword playbook:

1. **Close variants now eat exact match share.** Google's match-type expansion means `[emergency ac repair houston]` matches "ac emergency repair near me in houston tx", "fix my ac houston now", and dozens more. Exact is no longer exact. Phrase has effectively become the workhorse match type for HVAC accounts.
2. **Auto-applied recommendations silently mutate keyword lists.** If you don't actively turn off "Add new keywords" in Account-level recommendations, Google will add keywords you never intended (often broad-match versions of your phrase keywords).
3. **Bot/scraper traffic on broad-match HVAC keywords** has gotten bad enough that Broad is now a Phase-3-only tool, and only with very tight negatives.

**One-paragraph summary:** Phrase is the default match type for HVAC in 2026. Use Exact only for proven converters and brand defense. Use Broad only after you have 60+ conversions per ad group AND a dialed-in negative-keyword list. Every other rule below flows from this.

---

## Core Principles

1. **Intent first, geography second.** Every keyword belongs to one of 6 intent buckets. Bucket determines campaign + ad group. Geography is a modifier, not a category.
2. **Match type is a control mechanism, not a quality marker.** Phrase controls *intent breadth*, Exact controls *query specificity*, Broad controls *discovery*. Use the right one for the job.
3. **Negatives are as important as positives.** A keyword without a negative-keyword shield is an open wallet. Build in three layers: account / campaign / ad-group.
4. **Search Terms drive the next iteration.** The keyword list you launch with is a hypothesis. Triage the Search Terms report weekly, no exceptions.

---

## Decision Matrix: Keyword → Campaign → Ad Group

This is the load-bearing decision table. Memorize this; everything else is detail.

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

## Quick Reference: Match Type by Phase

| Phase | Per-campaign conversions/30d | Match types |
|---|---|---|
| Launch | 0–14 | Phrase + Exact |
| Growth | 15–59 | Phrase (primary) + Exact (proven) |
| Scale | 60+ | Phrase + Exact + selective Broad |

Broad without Smart Bidding (Maximize Conversions or tCPA) = guaranteed budget bonfire. See [references/match-types.md](references/match-types.md) for the full rules and 2026 close-variant behavior.

---

## Quick Reference: Quality Score Targets

| Intent | QS target |
|---|---|
| Emergency | 7+ |
| General repair | 7+ |
| Installation | 6+ |
| Brand | 10/10 — if not, LP is misconfigured |

**QS ≤4 after 100+ impressions → diagnose:**
- QS 1–3: landing page experience (slow, irrelevant, not mobile-friendly)
- QS 4–5: ad relevance — keyword not in any RSA headline in this ad group
- QS 6: expected CTR — copy not compelling; test urgency / social proof / specific price

**Weekly QS audit:** Keywords tab → Columns → add `Qual. score`, `Landing page exp.`, `Ad relevance`, `Exp. CTR`. Sort QS asc, fix worst first.

---

## Non-Negotiable Inline Rules

### Always negative at account level
- `virginia`, `va`, `richmond va` — Google occasionally matches Richmond TX targeting to Richmond VA queries
- `youtube`, `how to`, `diy`, `tutorial` — DIY intent
- `jobs`, `career`, `hiring`, `salary`, `school`, `training` — employment / education
- `warranty`, `home warranty` — won't pay
- `free`, `coupon` — price-only traffic
- Full Layer-1 shared list → [references/negatives.md](references/negatives.md)

### Always bid on your own brand
- `[75 degree ac]`, `[75degreeac]`, `[75 degree ac houston]` — Exact + Phrase, separate campaign, $20-30/day cap
- If you don't, competitors will take your branded traffic at $1-2 CPC instead of your $0.10-0.30
- Full brand + competitor rules → [references/brand-bidding.md](references/brand-bidding.md)

### Houston geographic quirks (don't break these)
- **"Houston Heights"** — neighborhood, not a city. Keyword variation, not a geo target.
- **"Memorial"** — area within Houston, not a separate city.
- **Richmond TX vs Richmond VA** — always add `virginia` and `va` to account negatives when running Richmond TX keywords.

---

## Where to Go for Detail

Read the reference file only when the task actually needs it. Each file is self-contained.

| Reference | When to read |
|---|---|
| [references/intent-categories.md](references/intent-categories.md) | Classifying a new keyword, or asked "which bucket does X go in?" |
| [references/match-types.md](references/match-types.md) | Choosing Exact vs Phrase vs Broad, or explaining 2026 close-variant behavior |
| [references/brand-bidding.md](references/brand-bidding.md) | Setting up the brand campaign, or asked about bidding on competitors |
| [references/negatives.md](references/negatives.md) | Building the negative list, triaging Search Terms, or auditing blocked queries |
| [references/houston-keywords.md](references/houston-keywords.md) | Building Houston / Texas keyword sets, suburb expansion, heating season |
| [references/search-terms-triage.md](references/search-terms-triage.md) | Running the Monday Search Terms triage on a fresh report |
| [references/starter-pack.md](references/starter-pack.md) | Day-one launch — full copy-paste keyword + match-type pack for all 5 campaigns + brand |

---

## When to Defer to Other Skills

- **Campaign architecture, budget split, bidding phases** → `google-ads-strategy`
- **Writing the ad copy that mirrors these keywords** → `google-ads-copy`
- **Landing-page audit and CRO fixes** → `cro-strategy`
- **Reviewing competitor keyword bids** → `competitor-analysis`
