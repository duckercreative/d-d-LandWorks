# Emergency Campaign Audit — Ad → Landing Page → Conversion Tracking

**Client:** 75 Degree AC
**Campaign:** Emergency AC Repair
**Audit framework:** `google-ads-copy` SKILL.md v1.0.0
**Audit date:** 2026-05-02

---

## Executive Summary

This Emergency campaign has structural breakage at all three layers — the ad partially works, the landing page fails 4 of the 5 above-the-fold requirements, and conversion tracking is undercounting leads by an estimated 50–70% (calls are invisible, every-count inflation, no Enhanced Conversions). Quality Score is being suppressed primarily by the landing page mismatch and 4.2s LCP — a combined drag worth roughly +25% to +67% on CPC vs. what this account should be paying.

**The single biggest problem:** Calls are not tracked at all. For an HVAC emergency campaign — where the SKILL explicitly says "70%+ of emergency traffic is mobile" and the primary CTA must be the phone — last-click attribution against form-only conversions is telling Google to optimize for the wrong action.

---

## Issue Inventory

### Layer 1 — Ad Copy

| # | Issue | Severity |
|---|---|---|
| A1 | Only 3 headlines provided — RSA needs 15 for proper auto-optimization | High |
| A2 | Headline categories are too narrow — only Cat 1 (keyword) and Cat 3 (USP) are represented; missing Problem/Symptom (Cat 2), Trust/Social Proof (Cat 4), CTA/Urgency (Cat 5), Financing (Cat 6) | High |
| A3 | H3 "Licensed Houston HVAC" is weak — generic credential, not benefit-led | Medium |
| A4 | No verifiable trust headline (review count, TACLA #, "Since 2016") | Medium |
| A5 | No descriptions provided for review — needs all 4 slots populated per the Emergency Description Template | High |

### Layer 2 — Landing Page (`/emergency-ac-repair/`)

| # | Issue | Severity | SKILL Reference |
|---|---|---|---|
| L1 | **H1 does not match the ad.** "Welcome to 75 Degree AC – Houston's Trusted HVAC Partner" is exactly the example the SKILL forbids: *"Never use 'Welcome to 75 Degree AC' as H1."* H1 must echo "Emergency AC Repair Houston". | Critical | "Required Above the Fold" #1 |
| L2 | **Phone is in footer only.** SKILL requires "Phone number — large, click-to-call — Top right corner. Minimum 24px font on mobile." Plus "Sticky click-to-call button" for mobile CRO. | Critical | "Required Above the Fold" #2 + Mobile CRO |
| L3 | **No review count above the fold.** SKILL ranks "Google review count + rating" as the #1 trust element for conversion impact. Needs "4.9 stars · 287 reviews" style display. | Critical | "Trust Elements" #1 |
| L4 | **7-field form is wrong for emergency intent.** SKILL: "Minimal form fields — name + phone only for emergency." Address, email, service type, preferred time, message all create friction in a 2am AC failure scenario. | High | Mobile CRO |
| L5 | **LCP 4.2s on mobile.** SKILL target is <2.5s. SKILL explicitly states: "A 4s page vs 2s page = 20–30% higher CPC." | High | Page Speed Requirements |
| L6 | No TACLA license # visible (TACLA72152E) — required trust element #2 | Medium | Trust Elements |
| L7 | No service area confirmation ("Serving Houston, Katy, Sugar Land & Cypress") above the fold | Medium | Required Above the Fold #5 |
| L8 | No response-time guarantee ("Technician dispatched within 60 minutes") | Medium | Trust Elements #4 |
| L9 | Phone (when added) is not the FIRST CTA — form should be secondary for emergency | High | Mobile CRO |

### Layer 3 — Conversion Tracking

| # | Issue | Severity | SKILL Reference |
|---|---|---|---|
| C1 | **Only form submission tracked.** Calls — the highest-value action for emergency HVAC — are invisible to Google. Smart Bidding cannot optimize toward what it cannot see. | Critical | Conversion Tracking — What to Track |
| C2 | **No CallRail.** SKILL says CallRail + GTM is the recommended call-tracking method, used in combination with Google Ads Call Assets. | Critical | Call Tracking — Method 2 |
| C3 | **Click-through window 90 days** — SKILL prescribes 30 days. 90 days inflates and laggily attributes conversions, polluting the bidding signal. | High | Conversion Settings |
| C4 | **Count = "Every"** — SKILL prescribes "One (not Every) — 1 lead per person, not 3 form submits." Currently double/triple-counting the same person re-submitting. | High | Conversion Settings |
| C5 | **Last-click attribution** — SKILL prescribes "Data-driven (if available) or Position-based." Last-click underweights upper-funnel touches. | Medium | Conversion Settings |
| C6 | **No Enhanced Conversions for Leads** — major signal loss for first-party data matching, especially with iOS / cookie restrictions. | High | (Skill description references this; tracking layer requirement) |
| C7 | No 60-second minimum on calls (when call tracking is added) — SKILL explicitly requires this to filter hangups. | Medium | Conversion Settings |
| C8 | No view-through window set (SKILL prescribes 1 day) | Low | Conversion Settings |

---

## Priority Order to Fix

The order below is built on: (1) the SKILL's QS components (Landing Page Experience, Ad Relevance, Expected CTR), and (2) the SKILL's CPC table — QS 4 is +25% CPC, QS 2 is +67% CPC. Tracking comes first because broken signal makes every other optimization blind.

### TIER 1 — DO TODAY (signal + critical CRO)

**Priority 1 — Install call tracking (C1, C2, C6, C7)**
- Expected impact: +50–70% reported conversions (calls become visible). Indirectly improves QS by giving Smart Bidding accurate signal to optimize headline/landing combinations that produce calls.
- CPC impact: Indirect — better signal → better optimization → over 2–4 weeks Smart Bidding shifts spend to higher-converting auctions, lowering effective CPL even if headline CPC is unchanged.

**Priority 2 — Fix landing page H1 (L1)**
- Expected impact: Direct hit on Landing Page Experience (one of three QS components). Per SKILL, an H1 mismatch with the ad headline is one of the textbook QS killers.
- CPC impact: Moving from QS 4 → QS 6 cuts CPC by ~20% (from +25% to 0% baseline). Moving QS 6 → QS 8 cuts another 20%.

**Priority 3 — Add prominent + sticky phone (L2, L9)**
- Expected impact: Direct conversion lift. SKILL says 70%+ of emergency traffic is mobile; phone-first CTA is the biggest mobile CRO lever after H1 match.
- CPC impact: Indirect via CTR (Expected CTR is QS component). Better engagement signals from on-page click-to-call also reinforce LP Experience score.

**Priority 4 — Fix conversion-counting settings (C3, C4)**
- C3: Change click-through window 90d → 30d
- C4: Change count Every → One
- Expected impact: Conversion volume reported will *drop* short-term (good — it was inflated). Smart Bidding will retrain on cleaner signal within 2–3 weeks.
- CPC impact: Neutral on QS, but tCPA / tROAS bidding becomes accurate, which prevents overbidding on duplicate-counted leads.

### TIER 2 — DO THIS WEEK (QS + trust lifts)

**Priority 5 — Add trust block above fold (L3, L6, L7, L8)**
- "4.9 stars · 287 reviews" + "TACLA72152E Licensed in Texas" + "Serving Houston, Katy, Sugar Land, Cypress" + "Tech dispatched within 60 minutes"
- Expected impact: LP Experience component of QS lifts; conversion rate lifts (review count is #1 trust element by conversion impact per SKILL).
- CPC impact: Reinforces the QS gain from P2/P3.

**Priority 6 — Cut form fields to name + phone (L4)**
- Expected impact: Form completion rate lift (industry typical: each removed field +5–10% completion). This isn't QS — it's pure CRO.
- CPC impact: None directly. CPL down via higher conversion rate.

**Priority 7 — Rebuild RSA to 15 headlines + 4 descriptions (A1, A2, A3, A4, A5)**
- Use the SKILL's 6-category headline framework. Suggested set below.
- Expected impact: Expected CTR component of QS. More combinations = Google's optimizer has data to find winners.
- CPC impact: Bringing Ad Strength from likely "Average" to "Excellent" historically correlates with 5–15% CTR lift, which compounds into QS.

**Priority 8 — Enable Enhanced Conversions for Leads (C6)**
- Send hashed email/phone from form back to Google Ads.
- Expected impact: Recovers ~15–30% of conversions lost to ad-blockers / cross-device / iOS.
- CPC impact: Indirect — Smart Bidding signal density improves.

### TIER 3 — DO THIS MONTH (speed + attribution)

**Priority 9 — Fix LCP from 4.2s → <2.5s (L5)**
- Expected impact: Direct LP Experience QS hit. SKILL math: 4s vs 2s = 20–30% higher CPC.
- CPC impact: Estimated 15–25% CPC reduction once Google re-evaluates LP Experience (typically 2–6 weeks).

**Priority 10 — Switch attribution model last-click → data-driven (or position-based) (C5)**
- Expected impact: More accurate credit distribution; better tCPA decisions on assist-driven keywords.
- CPC impact: Neutral; affects bid efficiency, not auction price.

**Priority 11 — Set view-through window 1 day (C8)**

---

## Expected Quality Score / CPC Impact Per Fix

Per the SKILL's CPC-vs-QS table:
- QS 10 = -50% CPC
- QS 8 = -20%
- QS 6 = 0% (baseline)
- QS 4 = +25%
- QS 2 = +67%

Assuming this campaign is currently sitting at QS 4–5 (likely given H1 mismatch + 4.2s LCP + thin RSA):

| Fix | QS Component Hit | Estimated QS Movement | Estimated CPC Impact |
|---|---|---|---|
| P1 — Install CallRail + GTM | (none — tracking only) | 0 | Indirect: lower CPL via better Smart Bidding |
| P2 — Fix H1 to match ad | Landing Page Experience | +1 to +2 | -10% to -20% |
| P3 — Sticky click-to-call + header phone | LP Experience + Expected CTR (engagement) | +0.5 to +1 | -5% to -10% |
| P4 — Window 30d / Count One | (none — tracking hygiene) | 0 | Prevents overbid; no direct CPC change |
| P5 — Add trust block above fold | LP Experience | +0.5 to +1 | -5% to -10% |
| P6 — 7 fields → 2 fields | (none — CRO only) | 0 | CPL down via CVR |
| P7 — 15 headlines, 6 categories | Ad Relevance + Expected CTR | +1 to +2 | -10% to -20% |
| P8 — Enhanced Conversions for Leads | (none — tracking only) | 0 | Indirect: better Smart Bidding |
| P9 — LCP 4.2s → <2.5s | LP Experience | +1 to +2 | -15% to -25% |
| P10 — Attribution → data-driven | (none) | 0 | Bid efficiency |

**Stacked best-case:** QS 4 → QS 8, CPC reduction in the 30–50% range over 4–8 weeks.

---

## Exact What-To-Do Steps — Conversion Tracking

The user specifically asked for exact steps on the tracking issues. These follow the SKILL's "Conversion Tracking Setup" section verbatim where applicable.

### Step 1 — Install CallRail (fixes C1, C2)

1. CallRail account → create company "75 Degree AC" → buy a Houston (713) or (281) tracking number pool of at least 8 numbers (one per concurrent visitor expected at peak).
2. CallRail dashboard → Integrations → Google Ads → connect Google Ads MCC; choose "Send qualified calls as conversions."
3. CallRail → Integrations → Google Analytics 4 → connect GA4 property.
4. CallRail → Settings → Number Pool → set destination number to the real business line **(713) 598-2737** (or the (346) 681-2625 line for Richmond traffic — split pools if running geo-targeted campaigns).
5. CallRail → JavaScript snippet → copy.
6. GTM (Google Tag Manager) → Tags → New → Custom HTML → paste CallRail JS → Trigger: All Pages → Save → Submit container.
7. Verify on `/emergency-ac-repair/`: open DevTools → confirm phone numbers in the DOM are dynamically swapped to CallRail numbers when arriving via `gclid` parameter.
8. CallRail → Settings → Call Flow → set Minimum call duration filter to **60 seconds** (per SKILL — filters hangups).
9. CallRail → Settings → Block Internal → add the office IP so internal calls don't fire conversions.

### Step 2 — Create Google Ads conversion actions

In Google Ads → Tools → Conversions → +New conversion action:

**Action 2a — "Phone Call from Website (CallRail)"**
- Source: Import → CallRail
- Category: Phone call lead
- Value: $75 (per SKILL conversion-value table)
- Count: **One** (per SKILL)
- Click-through window: **30 days**
- View-through window: **1 day**
- Attribution model: **Data-driven** (if eligible) else **Position-based**
- Include in "Conversions": **Yes** (primary)

**Action 2b — "Phone Call from Ad (Call Asset)"**
- Source: Google Ads → Calls from ads
- Category: Phone call lead
- Value: $75
- Minimum call duration: **60 seconds**
- Count: One
- Same windows/attribution as above
- Include in Conversions: Yes (primary)

**Action 2c — "Form Submission" (rebuild existing)**
- Source: Google Tag Manager (existing)
- Category: Submit lead form
- Value: $75
- Count: change from **Every → One**
- Click-through window: change from **90 → 30 days**
- View-through: 1 day
- Attribution: Data-driven (or Position-based)
- Include in Conversions: Yes

### Step 3 — Set up form-submission via GTM (rebuild C3, C4 cleanly)

Per SKILL "Form Submission Tracking (via GTM)":

1. WordPress → ensure form submit redirects to a unique URL: `/thank-you/` (create the page if missing; noindex it).
2. GTM → Triggers → New → Page View → fires on Page URL contains `/thank-you/`.
3. GTM → Tags → New → Google Ads Conversion Tracking tag.
   - Conversion ID: from action 2c
   - Conversion Label: from action 2c
   - Conversion Value: 75
   - Trigger: the trigger from step 2.
4. Submit GTM container.
5. Test: submit the form on the live site → confirm `/thank-you/` loads → confirm Tag Assistant fires the conversion → confirm Google Ads shows "Recording conversions" within 24h.

### Step 4 — Enable Enhanced Conversions for Leads (fixes C6)

1. Google Ads → Tools → Conversions → click "Form Submission" action → Settings → Enhanced conversions → Turn on.
2. Method: **Google tag** (or via GTM if container manages the form).
3. In GTM → tag → set User-provided data variables:
   - Email → DLV (Data Layer Variable) `email` (push from form)
   - Phone → DLV `phone`
   - First name / Last name (optional, helps match rate)
4. Form's onSubmit handler must `dataLayer.push({ email: ..., phone: ... })` BEFORE redirect to `/thank-you/`.
5. Validate: Google Ads → Conversions → Enhanced Conversions Diagnostic shows green "Recording" within 48–72h.
6. Accept the customer-data terms in Google Ads.

### Step 5 — Apply tracking hygiene to existing form action (fixes C3, C4, C5, C8)

If keeping the existing form-submission conversion action rather than rebuilding:
- Conversions → Form Submission → Edit:
  - Click-through window: **90 → 30 days**
  - View-through window: → **1 day**
  - Count: **Every → One**
  - Attribution model: **Last-click → Data-driven** (fallback Position-based)
  - Save.

### Step 6 — Verify call asset on the ad itself

- Ads & assets → Assets → Calls → confirm:
  - Phone (713) 598-2737
  - Call reporting: **ON**
  - Schedule: **All hours** (per SKILL: "Emergency campaigns: All hours — AC emergencies happen at 2am")
  - Conversion action: **Phone Call from Ad** (action 2b)
  - Min call duration: **60 seconds**

### Step 7 — Sanity check after 7 days

- Conversions reporting should now show 3 conversion actions firing.
- Expected mix for an Emergency HVAC campaign: ~60–75% calls, ~25–40% form. If form is still >50%, the on-page phone wasn't made prominent enough (loop back to L2).
- If conversions vanish: GTM preview → confirm tags fire → confirm conversion ID/label match between GTM and Google Ads.

---

## Suggested RSA Rebuild (for Priority 7)

Following the SKILL's 6-category formula. Pin only H1 if you must echo the keyword — otherwise leave unpinned.

**Headlines (15):**
1. Emergency AC Repair Houston *(Cat 1)*
2. 24/7 Emergency HVAC Service *(Cat 1)*
3. AC Repair — Same Day Houston *(Cat 1)*
4. AC Broke Down? Call Us Now *(Cat 2)*
5. AC Not Cooling? We Fix It Fast *(Cat 2)*
6. No Cold Air? We Diagnose Today *(Cat 2)*
7. Licensed & Insured Technicians *(Cat 3)*
8. Most Repairs Done Same Visit *(Cat 3)*
9. Serving Houston Since 2016 *(Cat 3)*
10. TACLA Licensed Contractor *(Cat 4)*
11. All Major Brands Serviced *(Cat 4)*
12. 5-Star Rated HVAC Company *(Cat 4)*
13. Call (713) 598-2737 Anytime *(Cat 5)*
14. Same-Day Slots Available Now *(Cat 5)*
15. Financing Available — Apply Now *(Cat 6)*

**Descriptions (4) — Emergency Template from SKILL:**
- D1: 24/7 emergency AC repair in Greater Houston. Licensed HVAC techs dispatched fast. Free estimate.
- D2: Serving Houston, Katy, Sugar Land & Cypress. Transparent pricing, no hidden fees. TACLA licensed.
- D3: Fully stocked vehicles — most AC problems diagnosed and fixed on the first visit. Call anytime.
- D4: Most issues fixed same day. Financing available. Serving Houston since 2016. Free estimate always.

---

## Bottom Line

This is not a copy problem first — it's a **tracking + landing page** problem. The ad headlines provided are usable but underbuilt; the landing page violates 4 of 5 above-the-fold requirements; the tracking is half-blind. Fix tracking and the H1 today, sticky phone and trust block this week, RSA rebuild + speed within the month. Realistic outcome at 6–8 weeks: QS 4 → QS 7–8, CPC down 30–40%, **reported** conversions up 50–70% (because calls finally count), and CPL down by half once Smart Bidding has clean signal to optimize against.
