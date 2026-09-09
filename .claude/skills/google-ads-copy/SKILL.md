---
name: google-ads-copy
description: >
  Google Ads creative + tracking methodology for 75 Degree AC (Houston HVAC)
  and HVAC contractors. Covers Responsive Search Ad construction (15 headlines
  + 4 descriptions), the 6-category headline formula, pinning strategy, all
  ad extensions (call / sitelink / callout / location / image / lead form),
  Quality Score optimization via Ad-Strength ↔ QS, $75 lead-value baseline
  math, the CallRail + GTM + Enhanced Conversions for Leads tracking stack,
  and a deployable Emergency RSA pack. Use whenever the user mentions RSA,
  responsive search ad, ad copy, ad headlines, ad descriptions, ad strength,
  headline pinning, callouts, sitelinks, structured snippets, call asset,
  location asset, lead form, callrail, GTM, conversion tracking, enhanced
  conversions, attribution model, or any HVAC Google Ads creative / extension
  / tracking question — even without naming Google Ads. Pair with
  `google-ads-strategy` for campaigns and `google-ads-keywords` for keywords.
  Defer landing-page CRO to `cro-strategy`.
version: 3.0.0
client: 75 Degree AC
last_updated: 2026-05-11
---

# Google Ads Copy & Creative — HVAC, 2026 Edition

## Why This Skill Was Rewritten in May 2026

A few platform realities changed the ad-copy playbook:

1. **RSA pinning got smarter, but only if you understand position pinning.** Google now respects pin position more reliably than 2023, but most accounts still pin too much (defeating RSA optimization) or too little (letting weak headlines run in Position 1).
2. **Ad Strength = Quality Score in practice.** Hitting "Good" or "Excellent" Ad Strength now correlates strongly with QS 7+. "Average" or "Poor" is leaving money on the floor.
3. **Enhanced Conversions for Leads** is now the default for HVAC. Without it you're flying half-blind on Smart Bidding because Google can't model-match the call back to a closed job.
4. **CallRail + GTM is still the right call-tracking stack** — but in 2026 it must feed Enhanced Conversions, not just count call events.

**One-paragraph summary:** Your ad copy's job is to make the click pre-qualified and the landing page redundant. A pre-qualified click means the searcher already knows you're a Houston HVAC company, you're licensed, you're available now, and the phone number is one tap away. The landing page closes the deal — but the ad does the heavy lifting of intent matching.

---

## Core Principles

1. **RSA is an auction-of-combinations, not a single ad.** Google tests ~3,840 combinations from your 15 headlines × 4 descriptions. Provide enough genuinely *different* angles that the algorithm can find the right combination for each query intent.
2. **Headlines do the heavy lifting; descriptions support.** Headlines are seen first and weighted most. Don't waste headline slots on what should be a description.
3. **Pin sparingly, with intent.** Pinning collapses the algorithm's optimization space by ~40%. Pin only when there's a hard reason (legal, brand, regulatory).
4. **Match what the keyword promised.** The ad must echo the keyword the user typed. Half of Ad Relevance (and therefore Quality Score) flows from this.
5. **Conversion tracking is non-negotiable.** Without CallRail + GTM + Enhanced Conversions, Smart Bidding optimizes for the wrong signal. No tracking = no skill output is reliable.

---

## RSA Hard Rules

Responsive Search Ads are the only active Search ad format in 2026. You provide up to 15 headlines and 4 descriptions; Google auto-selects 3 headlines + 2 descriptions per impression and tests combinations.

- **Write all 15 headlines.** Skipping slots cuts the optimization space. There's no "saving" by writing 10.
- **Pin at most 2 headline slots.** Over-pinning defeats RSA.
- **Include the primary keyword in 3+ headlines.** Direct Quality Score lift via Ad Relevance.
- **Each headline must stand alone.** Google may show any 3 together; don't write sequential headlines.
- **Character limits:** Headlines = 30 chars max. Descriptions = 90 chars max. Soft target ~28 chars for mobile truncation safety.
- **Each description does ONE job.** Don't cram emergency + financing + reviews into one description.

### Ad Strength Target

| Ad Strength | What it means | Action |
|---|---|---|
| Excellent | All combinations relevant + diverse + keyword-rich | Leave alone, monitor for fatigue |
| Good | Most combinations strong | Acceptable; replace any "Low" rated assets |
| Average | Diversity or relevance gap | Audit headlines for keyword inclusion + angle variety |
| Poor | Major problems | Rewrite half or all of the headlines |

Launching "Average" or "Poor" = starting at a 15-30% CPC penalty vs. a "Good"+ ad.

---

## The 6-Category Headline Framework

Every RSA needs headlines from all 6 categories. Variety is what makes the combination space rich enough to optimize.

1. **Keyword Match** (3+ headlines) — Direct keyword echo: "Emergency AC Repair Houston"
2. **Problem / Symptom** — Mirror the situation: "AC Not Cooling? Call Us Now"
3. **USP / Differentiator** — Why you: "Most Repairs Done Same Visit"
4. **Trust / Social Proof** — Verifiable signals: "TACLA Licensed Contractor"
5. **CTA / Urgency** — Next step: "Same-Day Slots Available Now"
6. **Financing / Offer** — Wallet-open: "Financing Available — Apply Now"

Full headline banks (5 examples per category) → [references/headline-formula.md](references/headline-formula.md).
Per-intent description templates → [references/description-templates.md](references/description-templates.md).

---

## Pinning Strategy

Pinning controls *which slot* a headline serves in. Google has 3 visible positions: Pos 1 (most prominent), Pos 2, Pos 3.

### When to pin
- **Pos 1:** Pin one headline that contains the primary keyword + city. Locks in Ad Relevance.
- **Pos 2:** Optional. Pin a USP or trust headline if QS is suffering on Ad Relevance.
- **Pos 3:** Don't pin. Let the algorithm optimize.

### When NOT to pin
- Don't pin more than 2 slots — drops Ad Strength.
- Don't pin a CTA to Pos 1 — Pos 1 should match the query, not push the next step.
- Don't pin a low-character headline to Pos 1 — wastes the most prominent slot.

### Mobile pinning consideration
On mobile, only Pos 1 + Pos 2 typically render. Treat Pos 3 as desktop-only.

---

## Defaults Worth Memorizing

- **Default lead value: $75** — calculated from $400 avg job × 50% close rate × 40% safety haircut. Replace with real number after 90 days. Full math → [references/conversion-tracking.md](references/conversion-tracking.md).
- **Minimum call duration: 60 seconds** — filters hangups, voicemail, junk.
- **Click-through window: 30 days** — HVAC purchase cycle is days, not weeks.
- **Attribution model: Data-driven** — last-click leaves cross-keyword credit on the floor.
- **Count: One** (not Every) — 1 lead per person, regardless of repeat submissions.
- **Phone belongs in the Call Asset**, never in a headline body.

---

## 12-Point Copy Audit

Run this against any ad/RSA you're auditing. Score 1 point per item; <8/12 = rewrite.

1. [ ] All 15 headlines populated
2. [ ] All 4 descriptions populated
3. [ ] Primary keyword in 3+ headlines
4. [ ] Headlines from all 6 categories present (keyword/symptom/USP/trust/CTA/offer)
5. [ ] No duplicate angles (no 2+ headlines saying the same thing differently)
6. [ ] At most 2 headlines pinned (typically Pos 1 keyword + optionally Pos 2 trust)
7. [ ] Each description does ONE job (not stuffing every angle)
8. [ ] Phone number in Call Asset, NOT in headline body
9. [ ] No banned patterns (all caps, "lowest prices", excessive punctuation)
10. [ ] Call Asset, 8+ Callouts, 4+ Sitelinks, Structured Snippet, Location, Image assets all configured
11. [ ] Final URL is a dedicated landing page (not the homepage)
12. [ ] Display path uses the keyword + city (e.g., `/Emergency-AC-Repair/Houston`)

---

## Where to Go for Detail

Read the reference file only when the task actually needs it. Each file is self-contained.

| Reference | When to read |
|---|---|
| [references/headline-formula.md](references/headline-formula.md) | Drafting headlines, need example bank for any of the 6 categories |
| [references/description-templates.md](references/description-templates.md) | Drafting the 4 descriptions for emergency / repair / install / maintenance |
| [references/emergency-rsa-pack.md](references/emergency-rsa-pack.md) | Day-one launch — copy-paste 15 headlines + 4 descriptions + display path |
| [references/rsa-skeletons.md](references/rsa-skeletons.md) | Building RSA for symptom / installation / maintenance / commercial intents |
| [references/extensions.md](references/extensions.md) | Setting up Call / Callout / Sitelink / Structured Snippet / Location / Image / Lead Form / Price assets |
| [references/conversion-tracking.md](references/conversion-tracking.md) | CallRail + GTM + Enhanced Conversions for Leads setup, conversion settings, common mistakes |
| [references/quality-score.md](references/quality-score.md) | Diagnosing QS 1–6, the CPC-vs-QS math, the 3-component diagnostic tree |
| [references/banned-patterns.md](references/banned-patterns.md) | Auditing or being asked "why was this ad disapproved" — full banned-patterns table |

---

## When to Defer to Other Skills

- **Campaign architecture, budget split, bidding phases, PMax/LSA strategy** → `google-ads-strategy`
- **Keyword lists, match types, negatives, search-terms triage** → `google-ads-keywords`
- **Landing-page CRO (phone prominence, trust strip, mobile UX, form friction, A/B tests)** → `cro-strategy`
- **GA4 setup, custom events, conversion event configuration in GA4** → `analytics-setup`
- **Schema markup for landing pages** → `schema-markup`
