---
name: google-ads-copy
description: >
  Google Ads copy, assets, and tracking methodology for 75 Degree AC and HVAC
  contractors. Covers RSA headline/description construction, pinning strategy,
  ad-strength and Quality Score alignment, call/sitelink/callout/snippet/image
  assets, display paths, lead forms, and the CallRail + GTM + Enhanced
  Conversions tracking stack. Use when the user asks about ad copy, RSA
  structure, headlines, descriptions, extensions, pinning, ad strength,
  conversion tracking, CallRail, GTM, lead values, or creative-side Quality
  Score issues. Pair with `google-ads-strategy` for campaign setup and
  `google-ads-keywords` for keyword alignment.
version: 2.1.0
client: 75 Degree AC
last_updated: 2026-05-03
---

# Google Ads Copy & Creative — HVAC, 2026 Edition

## Why This Skill Was Rewritten in May 2026

A few platform realities changed the ad-copy playbook:

1. **RSA pinning got smarter, but only if you understand position pinning.** Google now respects pin position more reliably than 2023, but most accounts still pin too much (defeating RSA optimization) or too little (letting weak headlines run in Position 1).
2. **Ad Strength = Quality Score in practice.** Hitting "Good" or "Excellent" Ad Strength now correlates strongly with QS 7+. "Average" or "Poor" is leaving money on the floor.
3. **Enhanced Conversions for Leads** is now the default for HVAC. Without it you're flying half-blind on Smart Bidding because Google can't model match the call back to a closed job.
4. **CallRail + GTM is still the right call-tracking stack** — but in 2026 it must feed Enhanced Conversions, not just count call events.

If you read just one paragraph: **Your ad copy's job is to make the click pre-qualified and the landing page redundant.** A pre-qualified click means the searcher already knows you're a Houston HVAC company, you're licensed, you're available now, and the phone number is one tap away. The landing page closes the deal — but the ad does the heavy lifting of intent matching. Every rule below flows from that.

---

## Core Principles

### 1. RSA is an auction-of-combinations, not a single ad
Google tests ~3,840 combinations from your 15 headlines × 4 descriptions. Your job: provide enough genuinely *different* angles that the algorithm can find the right combination for each query intent.

### 2. Headlines do the heavy lifting; descriptions support
Headlines are seen first and weighted most by Google's relevance scoring. Descriptions reinforce. Don't waste headline slots on what should be a description.

### 3. Pin sparingly, with intent
Pinning Position 1 to "Emergency AC Repair Houston" guarantees that headline serves first — but also collapses the algorithm's optimization space by ~40%. Pin only when there's a hard reason (legal disclosure, brand requirement, regulatory).

### 4. Match what the keyword promised
The ad must echo the keyword the user typed. "Emergency AC Repair Houston" search → ad headline must contain that phrase or a clear synonym. This is half of Ad Relevance (and therefore Quality Score).

### 5. Conversion tracking is non-negotiable
Without CallRail + GTM + Enhanced Conversions, Smart Bidding optimizes for the wrong signal. No conversion tracking = no skill output is reliable.

---

## RSA Fundamentals

Responsive Search Ads (RSA) are the only active Search ad format in 2026. You provide up to 15 headlines and 4 descriptions; Google auto-selects 3 headlines + 2 descriptions per impression and tests combinations.

### Hard rules
- **Write all 15 headlines.** Skipping headline slots cuts the combination space the algorithm has to optimize. There's no "saving" by writing 10.
- **Pin at most 2 headline slots.** Over-pinning defeats RSA's purpose.
- **Include the primary keyword in 3+ headlines.** Direct Quality Score lift via Ad Relevance.
- **Each headline must stand alone.** Google may show any 3 together; don't write headlines that only make sense in sequence.
- **Character limits:** Headlines = 30 chars max, Descriptions = 90 chars max. Soft limit is ~28 chars for mobile truncation safety.
- **Each description does ONE job.** Don't try to cram emergency + financing + reviews into a single description.

### Ad Strength target

| Ad Strength | What it means | Action |
|---|---|---|
| Excellent | All combinations relevant + diverse + keyword-rich | Leave alone, monitor for fatigue |
| Good | Most combinations strong | Acceptable; replace any "Low" rated assets |
| Average | Diversity or relevance gap | Audit headlines for keyword inclusion + angle variety |
| Poor | Major problems | Rewrite half or all of the headlines |

If you launch "Average" or "Poor", you're starting at a 15-30% CPC penalty vs. a "Good"+ ad.

---

## Headline Formula — 6 Categories (use all 6 in every RSA)

Write headlines covering every category. Variety is what makes the combination space rich enough to actually optimize.

### Category 1 — Keyword Match (3+ headlines)
Direct keyword echo. The user typed "emergency ac repair houston" — show them their words.
```
Emergency AC Repair Houston
24/7 Emergency HVAC Service
AC Repair — Same-Day Houston
Houston HVAC Repair Today
Houston AC Repair Pros
```

### Category 2 — Problem / Symptom
Mirror the user's situation. Empathy = clicks.
```
AC Not Cooling? Call Us Now
AC Broke Down? We Fix It Fast
No Cold Air? We Diagnose Today
AC Leaking Water? Fast Repair
AC Making Noise? Same-Day Fix
```

### Category 3 — USP / Differentiator
Why you, not the next guy.
```
Licensed & Insured Technicians
Free Estimates — Honest Prices
Most Repairs Done Same Visit
Fully Stocked Service Vehicles
Serving Houston Since 2016
```

### Category 4 — Trust / Social Proof
Concrete, verifiable signals.
```
500+ Five-Star Google Reviews
TACLA Licensed Contractor
A+ BBB Rated HVAC Company
All Major Brands Serviced
Trusted by 5,000+ Houstonians
```

### Category 5 — CTA / Urgency
What to do next.
```
Call (713) 598-2737 Anytime
Book Online — Instant Confirm
Schedule in Under 2 Minutes
Same-Day Slots Available Now
Get a Tech Out Today
```

### Category 6 — Financing / Offer
Open the wallet for high-ticket searches.
```
Financing Available — Apply Now
0% Interest Financing Options
Free Second Opinion — Call Now
$89 Diagnostic Special
Free In-Home Assessment
```

---

## Pinning Strategy

Pinning controls *which slot* a headline serves in. Google has 3 visible headline positions: Pos 1 (most prominent), Pos 2, Pos 3.

### When to pin
- **Pos 1 (Position 1):** Pin one headline that contains the primary keyword + city. Locks in Ad Relevance signal. Example: "Emergency AC Repair Houston" pinned to Pos 1.
- **Pos 2 (Position 2):** Optional. Pin a USP or trust headline if QS is suffering on Ad Relevance. Example: "Licensed TACLA Contractor" pinned to Pos 2.
- **Pos 3 (Position 3):** Don't pin. Let the algorithm optimize.

### When NOT to pin
- Don't pin more than 2 slots. Over-pinning drops Ad Strength and disables most of RSA's value.
- Don't pin a CTA to Pos 1 ("Call Now!") — Pos 1 should match the search query, not push the next step.
- Don't pin a low-character headline to Pos 1 — wastes the most prominent slot.

### Mobile pinning consideration
On mobile, only Pos 1 + Pos 2 typically render. Treat Pos 3 as desktop-only.

---

## Description Templates by Intent

Each description does ONE job. Use all 4 slots.

### Emergency Campaign Descriptions (template)
```
D1 (Core service + location):
24/7 emergency AC repair in Greater Houston. Licensed HVAC techs dispatched fast. Free estimate.

D2 (Geographic scope + trust):
Serving Houston, Katy, Sugar Land & Cypress. Transparent pricing, no hidden fees. TACLA licensed.

D3 (Differentiator):
Fully stocked vehicles — most AC problems diagnosed and fixed on the first visit. Call anytime.

D4 (Offer / urgency):
Most issues fixed same day. Financing available. Serving Houston since 2016. Free estimate always.
```

### General Repair Campaign Descriptions
```
D1: Houston AC repair done right. Honest pricing, all major brands, fast same-day service.
D2: Licensed TACLA contractor. Transparent diagnostic — no surprise fees. Free estimate.
D3: 500+ five-star reviews. Most repairs completed in one visit. Financing if you need it.
D4: Serving Houston, Katy, Sugar Land, Cypress, Richmond TX. Call (713) 598-2737 today.
```

### Installation Campaign Descriptions
```
D1: New AC installation in Houston. Free in-home assessment. Carrier, Trane, Lennox & more.
D2: Most homes installed in one day. Financing available with approved credit.
D3: 10-year manufacturer warranty + our workmanship guarantee. Upgrade your home comfort.
D4: Houston's trusted HVAC pros since 2016. TACLA licensed. Schedule your free assessment today.
```

### Maintenance Campaign Descriptions
```
D1: AC tune-up special — only $89. Prevent breakdowns before summer hits.
D2: 21-point inspection. Clean coils, check refrigerant, test all systems. Same-day available.
D3: Maintenance plans available — save 15% on repairs, priority scheduling, no overtime fees.
D4: Houston HVAC pros since 2016. Licensed, insured, A+ BBB rated. Call (713) 598-2737.
```

---

## Complete Deployable RSA Pack — Emergency Campaign

This is a copy-paste-ready Emergency RSA for 75 Degree AC. Use as the day-one baseline; iterate from real performance.

### Headlines (15)

| # | Headline | Chars | Category | Pin |
|---|---|---|---|---|
| 1 | Emergency AC Repair Houston | 27 | Keyword | **Pos 1** |
| 2 | 24/7 Emergency HVAC Service | 27 | Keyword | — |
| 3 | AC Broke Down? Call Now | 23 | Symptom | — |
| 4 | AC Not Cooling? Fast Fix | 24 | Symptom | — |
| 5 | Same-Day AC Repair Houston | 26 | CTA | — |
| 6 | Licensed TACLA Contractor | 25 | Trust | **Pos 2** |
| 7 | Serving Houston Since 2016 | 26 | USP | — |
| 8 | 500+ Five-Star Reviews | 22 | Trust | — |
| 9 | Free Estimates Always | 21 | Offer | — |
| 10 | Call (713) 598-2737 Today | 25 | CTA | — |
| 11 | Most Repairs — Same Visit | 25 | USP | — |
| 12 | Houston AC Repair Pros | 22 | Keyword | — |
| 13 | Fully Stocked Vehicles | 22 | USP | — |
| 14 | Financing Available | 19 | Offer | — |
| 15 | All Major AC Brands Fixed | 25 | USP | — |

### Descriptions (4)
1. `24/7 emergency AC repair in Greater Houston. Licensed HVAC techs dispatched fast. Free estimate.` (90)
2. `Serving Houston, Katy, Sugar Land & Cypress. Transparent pricing, no hidden fees. TACLA licensed.` (89)
3. `Fully stocked vehicles — most AC problems diagnosed and fixed on first visit. Call anytime.` (89)
4. `Most issues fixed same day. Financing available. Serving Houston since 2016. Free estimate always.` (90)

### Final URL
`https://75degreeac.com/emergency-ac-repair/`

### Display Path
Path 1: `Emergency-AC-Repair`
Path 2: `Houston`
(Renders as: `75degreeac.com/Emergency-AC-Repair/Houston`)

---

## RSA Packs by Intent — Skeletons

Use the Emergency pack above as the canonical example. The skeletons below give you the angle mix for the other intents.

### Symptom Intent (Campaign 1, AG2)
- Lead with: AC running but malfunctioning
- Headlines mirror the symptom verbatim
- Example H1 (Pos 1 candidate): "AC Running But Not Cooling?"
- Example H2: "We Diagnose AC Problems Fast"
- Example H3: "Refrigerant, Coil & Airflow Fixes"
- Example D1: `AC on but not producing cold air? Usually refrigerant, coils, or airflow. We find it same day.`

### Installation Intent (Campaign 3)
- Lead with: Outcome (new system, comfort, lower bills)
- Headlines emphasize trust, brand range, financing
- Example H1: "New AC Unit Installed Houston"
- Example H2: "Free In-Home Assessment"
- Example H3: "All Major Brands — Best Price"
- Example D1: `Central AC installation in Houston. Free in-home assessment. Carrier, Trane, Lennox, Goodman. Financing available.`

### Maintenance Intent (Campaign 4)
- Lead with: Value + prevention
- Headlines anchor a specific price ($89 tune-up)
- Example H1: "AC Tune-Up — Only $89"
- Example H2: "Prevent Summer Breakdowns"
- Example H3: "Same-Day Maintenance Houston"
- Example D1: `Annual AC tune-up keeps your system running efficiently. Serving Houston since 2016. TACLA licensed.`

### Commercial Intent (Campaign 5)
- Lead with: B2B credibility (uptime, contracts, fast response)
- Headlines avoid "homeowner" tone
- Example H1: "Commercial AC Repair Houston"
- Example H2: "Same-Day Service for Businesses"
- Example H3: "Restaurant, Office & Retail HVAC"
- Example D1: `Commercial HVAC repair in Houston. Maintenance contracts, fast emergency dispatch. TACLA licensed.`

---

## What NOT to Write — Banned Patterns

These patterns either get disapproved, get flagged "Low" by Google's reviewer, or simply convert poorly:

| Pattern | Example | Why it fails |
|---|---|---|
| Vague | "Quality HVAC Service" | Says nothing — every competitor could write this |
| Feature-only | "20 Years Experience" | Lead with the benefit (e.g., "Most Repairs — First Visit") |
| Duplicate angles | 8 headlines that all say "emergency repair" differently | Google's reviewer flags low diversity → Average Ad Strength |
| Unverifiable claims | "Lowest Prices in Houston" | Google may flag; competitors will dispute |
| All caps | "CALL NOW FOR EMERGENCY AC REPAIR" | Looks spammy → lowers CTR + may be auto-flagged |
| Excessive punctuation | "AC Repair!!! Call Now!!!" | Auto-flagged for over-emphasis |
| Hard-coded phone in non-call-asset slot | "Call 713-598-2737 Now" in headline | Phone belongs in Call Asset; headline phone wastes a slot |
| Trademark misuse | "Better than [competitor name]" | Google policy violation, ad disapproved |
| Promised time without basis | "Tech in 30 Min Guaranteed" | Sets a SLA you can't meet → bad reviews |

---

## Ad Assets / Extensions

Extensions show below your ad at no additional CPC. Google rewards ads with more assets via better ad rank. Set up every applicable type.

### Call Asset (most important for HVAC)
```
Phone: (713) 598-2737
Call reporting: ON
Conversion action: Phone Call from Ad (60-sec minimum)
Ad schedule: Match campaign schedule
Emergency campaigns: All hours — emergencies happen at 2am
```

### Callout Assets (8–10)
Short, snappy, no character spent on positioning ("Free" not "We offer Free").
```
Same-Day Service
Free Estimates
Licensed & Insured
24/7 Emergency Response
Financing Available
Serving Houston Since 2016
Most Repairs — First Visit
All Major Brands Serviced
TACLA Licensed Contractor
500+ Five-Star Reviews
```

### Sitelink Assets (4 minimum, 6+ ideal)

| Text | Final URL | Description 1 | Description 2 |
|---|---|---|---|
| AC Repair Services | /ac-repair/ | All AC brands repaired same-day | Licensed HVAC technicians on call |
| AC Tune-Up & Maintenance | /maintenance/ | Prevent breakdowns before summer | Reduce repair risk by 95% |
| AC Installation | /ac-installation/ | Free in-home assessment | Carrier, Trane, Lennox & more |
| About 75 Degree AC | /about/ | Serving Houston since 2016 | Licensed, insured & locally trusted |
| Service Areas | /service-areas/ | Houston + all suburbs covered | Fast dispatch to your neighborhood |
| Book Online | /booking/ | Schedule in 2 minutes | Real-time availability |

### Structured Snippet Asset
```
Header: Services
Values: AC Repair, Heating Repair, AC Installation, Emergency HVAC,
        AC Tune-Up, Duct Cleaning, Mini-Split Repair, Furnace Repair
```

### Location Asset
Link Google Business Profile → shows address under ads → builds local trust.
- Path: Assets → Location → Link GBP account
- Verify: address shows as "4800 W 34th St, Houston" (not partial)

### Image Assets (3–5)
Upload images that show real work, not stock photos.
- Technician working on a unit (action shot)
- Branded service van
- Before/after install
- Team photo
- 5-star review screenshot (only if compliant with Google policy)

### Lead Form Asset (optional, emergency campaigns)
```
Headline: Get Emergency AC Help Now
Description: Fill out and we'll call you within minutes
Fields: Full name, Phone number (no email — friction kills conversion)
CTA: Request a quote
```
Best for mobile, especially when phone calls overflow during heat waves.

### Price Asset (maintenance + installation only)
```
Type: Services
- AC Tune-Up: from $89
- AC Repair Diagnostic: from $79
- AC Installation: from $3,500
```
Only display if your prices are competitive — checking competitor LPs first. Don't display price if competitors list lower; you'll get pre-qualified out of the click.

---

## Conversion Tracking Setup

### What to Track

| Conversion event | Type | Default value | Notes |
|---|---|---|---|
| Phone call from ad (Call Asset) | Primary | $75 | 60-sec min duration |
| Phone call from website (CallRail + GTM) | Primary | $75 | 60-sec min duration |
| Form submission (booking/contact) | Primary | $75 | Fires on `/thank-you/` page view |
| Chat initiated | Secondary | $25 | Don't include in Smart Bidding |
| Booking page reach | Secondary | $15 | Don't include in Smart Bidding |
| Closed job (offline upload) | Primary, value-based | $job_revenue | Via Enhanced Conversions for Leads |

### Why $75 default value (the math)
Use this calculation for any HVAC account, not just 75 Degree AC:

```
Avg job revenue: $400 (mix of repairs at $200–800)
Close rate (lead → booked job): ~50%
Lead-to-revenue: $400 × 50% = $200
Conservative haircut for attribution noise + cancellations: $200 × 40% = $80
Round down for safety: $75
```

When you have 90+ days of real data, replace $75 with your actual computed lead value.

### Call Tracking — CallRail + GTM (the only stack that works)

**Method 1 — Google Ads Call Asset (basic, for completeness)**
- Tracks calls clicking the phone number IN the ad only
- Does NOT track calls from website visits (the majority for HVAC)

**Method 2 — CallRail + GTM (recommended, primary method)**
- CallRail assigns a dynamic tracking number to website visitors from PPC
- Caller hears your real number; system records call duration + records audio
- GTM fires Google Ads conversion when call duration ≥ 60 sec
- Setup: CallRail → number pool → JS via GTM → GA4 + Google Ads goals

**Use both methods together for full call attribution.**

### Form Submission Tracking (via GTM)
1. Create `/thank-you/` page that loads after form submission
2. GTM: Trigger → Page View → Page URL contains `/thank-you/`
3. Create Google Ads conversion tag firing on that trigger
4. Verify: submit a test form → confirm conversion fires within 1 hour in Google Ads diagnostics

### Enhanced Conversions for Leads (non-negotiable in 2026)
Without this, Smart Bidding optimizes for "lead" not "closed job".

Setup:
1. In CallRail or your CRM, capture caller name + phone (you already do — you need it for the booking)
2. When the job closes (booked + paid), upload back to Google Ads via:
   - Google Ads UI → Tools → Conversions → Conversion Action → Settings → Enhanced Conversions for Leads → CSV upload, or
   - Zapier/Make automation: CRM "job closed" event → Enhanced Conversions API
3. Send back: hashed phone, hashed email (if you have it), close date, closed-job revenue
4. Wait 14 days for Google to model-match and adjust bidding signals

Without this, your tCPA is stuck on "lead value" not "closed job value", and you'll over-pay for low-close-rate keywords.

### Conversion Settings

| Setting | Value | Why |
|---|---|---|
| Count | One (not Every) | 1 lead per person, not 3 form submits = 3 conversions |
| Click-through window | 30 days | HVAC research-to-purchase tends to be days, not weeks |
| View-through window | 1 day | View-through inflates Display attribution noise |
| Attribution model | Data-driven (preferred) or Position-based | Last-click is leaving cross-keyword credit on the floor |
| Include in Conversions | Yes for primary, No for secondary | Smart Bidding uses "Conversions" column |
| Minimum call duration | 60 seconds | Filters hangups, voicemail, junk |

### Common Conversion Tracking Mistakes
1. Tracking page visits as conversions ("Contact page view" is not a lead)
2. Counting all calls without 60-second minimum (counts hangups + spam)
3. Not filtering internal office calls (add office IP as exclusion in CallRail)
4. Setting click-through window to 90 days (over-attributes; HVAC purchase cycle is days)
5. Counting Every form submit (one customer hitting submit 3× = 3 conversions = inflated CPL)

---

## Quality Score Optimization

QS directly affects CPC. The math:

| Quality Score | CPC vs. average | Real-dollar example |
|---|---|---|
| 10 | -50% | $25 click instead of $50 |
| 8 | -20% | $40 click instead of $50 |
| 6 | 0% (average) | $50 click |
| 4 | +25% | $62.50 click |
| 2 | +67% | $83.50 click |

A competitor at QS 4 paying $80/click can be outranked by you at QS 8 paying $40/click.

### The 3 QS Components — Diagnose by Score

**1. Expected CTR**
- Headlines that match query verbatim + emotional triggers + urgency words
- Audit: Is the keyword in at least 3 of your 15 headlines?

**2. Ad Relevance**
- Keyword appears in 2+ headlines AND mentioned in 1+ description
- Audit: Search the keyword in your RSA preview — is it visible in the rendered ad?

**3. Landing Page Experience**
- Match LP H1 to ad headline, fast load (<2.5s LCP), mobile-friendly, clear service confirmation
- Audit: Run PageSpeed Insights on the LP. Defer to `cro-strategy` for the full LP playbook.

### QS Diagnostic Tree

```
QS = 1–3 → Landing page problem
  → Check LCP <2.5s, mobile responsive, no popup blocking content
  → Check H1 matches ad headline keyword theme
  → Check page is relevant to keyword (not just homepage)

QS = 4–5 → Ad relevance problem
  → Confirm keyword appears in 2+ headlines
  → Confirm keyword appears in 1+ description
  → Confirm ad group is themed (not 30 unrelated keywords mashed together)

QS = 6 → CTR problem
  → Test stronger headline angles (urgency, social proof, specific price)
  → Add more headline variety so RSA can find higher-CTR combinations

QS ≤ 4 after 100+ impressions → pause + fix
```

---

## 12-Point Copy Audit (use for ad-copy reviews)

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

## When to Defer to Other Skills

- **Campaign architecture, budget split, bidding phases, PMax/LSA strategy** → `google-ads-strategy`
- **Keyword lists, match types, negatives, search-terms triage** → `google-ads-keywords`
- **Landing-page CRO (phone prominence, trust strip, mobile UX, form friction, A/B tests)** → `cro-strategy`
- **GA4 setup, custom events, conversion event configuration in GA4** → `analytics-setup`
- **Schema markup for landing pages** → `schema-markup`
