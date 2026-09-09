# Conversion Tracking Setup

Without CallRail + GTM + Enhanced Conversions, Smart Bidding optimizes for the wrong signal. No conversion tracking = no skill output is reliable.

## Contents
- What to Track
- Why $75 default value (the math)
- Call Tracking — CallRail + GTM
- Form Submission Tracking (via GTM)
- Enhanced Conversions for Leads (non-negotiable in 2026)
- Conversion Settings
- Common Conversion Tracking Mistakes

---

## What to Track

| Conversion event | Type | Default value | Notes |
|---|---|---|---|
| Phone call from ad (Call Asset) | Primary | $75 | 60-sec min duration |
| Phone call from website (CallRail + GTM) | Primary | $75 | 60-sec min duration |
| Form submission (booking/contact) | Primary | $75 | Fires on `/thank-you/` page view |
| Chat initiated | Secondary | $25 | Don't include in Smart Bidding |
| Booking page reach | Secondary | $15 | Don't include in Smart Bidding |
| Closed job (offline upload) | Primary, value-based | $job_revenue | Via Enhanced Conversions for Leads |

## Why $75 default value (the math)
Use this calculation for any HVAC account, not just 75 Degree AC:

```
Avg job revenue: $400 (mix of repairs at $200–800)
Close rate (lead → booked job): ~50%
Lead-to-revenue: $400 × 50% = $200
Conservative haircut for attribution noise + cancellations: $200 × 40% = $80
Round down for safety: $75
```

When you have 90+ days of real data, replace $75 with your actual computed lead value.

## Call Tracking — CallRail + GTM (the only stack that works)

**Method 1 — Google Ads Call Asset (basic, for completeness)**
- Tracks calls clicking the phone number IN the ad only
- Does NOT track calls from website visits (the majority for HVAC)

**Method 2 — CallRail + GTM (recommended, primary method)**
- CallRail assigns a dynamic tracking number to website visitors from PPC
- Caller hears your real number; system records call duration + records audio
- GTM fires Google Ads conversion when call duration ≥ 60 sec
- Setup: CallRail → number pool → JS via GTM → GA4 + Google Ads goals

**Use both methods together for full call attribution.**

## Form Submission Tracking (via GTM)
1. Create `/thank-you/` page that loads after form submission
2. GTM: Trigger → Page View → Page URL contains `/thank-you/`
3. Create Google Ads conversion tag firing on that trigger
4. Verify: submit a test form → confirm conversion fires within 1 hour in Google Ads diagnostics

## Enhanced Conversions for Leads (non-negotiable in 2026)
Without this, Smart Bidding optimizes for "lead" not "closed job".

Setup:
1. In CallRail or your CRM, capture caller name + phone (you already do — you need it for the booking)
2. When the job closes (booked + paid), upload back to Google Ads via:
   - Google Ads UI → Tools → Conversions → Conversion Action → Settings → Enhanced Conversions for Leads → CSV upload, or
   - Zapier/Make automation: CRM "job closed" event → Enhanced Conversions API
3. Send back: hashed phone, hashed email (if you have it), close date, closed-job revenue
4. Wait 14 days for Google to model-match and adjust bidding signals

Without this, your tCPA is stuck on "lead value" not "closed job value", and you'll over-pay for low-close-rate keywords.

## Conversion Settings

| Setting | Value | Why |
|---|---|---|
| Count | One (not Every) | 1 lead per person, not 3 form submits = 3 conversions |
| Click-through window | 30 days | HVAC research-to-purchase tends to be days, not weeks |
| View-through window | 1 day | View-through inflates Display attribution noise |
| Attribution model | Data-driven (preferred) or Position-based | Last-click is leaving cross-keyword credit on the floor |
| Include in Conversions | Yes for primary, No for secondary | Smart Bidding uses "Conversions" column |
| Minimum call duration | 60 seconds | Filters hangups, voicemail, junk |

## Common Conversion Tracking Mistakes
1. Tracking page visits as conversions ("Contact page view" is not a lead)
2. Counting all calls without 60-second minimum (counts hangups + spam)
3. Not filtering internal office calls (add office IP as exclusion in CallRail)
4. Setting click-through window to 90 days (over-attributes; HVAC purchase cycle is days)
5. Counting Every form submit (one customer hitting submit 3× = 3 conversions = inflated CPL)
