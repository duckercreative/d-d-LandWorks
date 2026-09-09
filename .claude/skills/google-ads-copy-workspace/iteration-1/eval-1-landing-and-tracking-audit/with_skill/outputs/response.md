# Emergency Campaign — Ad → Landing Page → Conversion Tracking Audit

**Account:** 75 Degree AC
**Campaign:** Emergency Repair (Campaign 1)
**Auditor methodology:** `google-ads-copy` skill (v2.0.0, May 2026)
**Date:** 2026-05-02

---

## Executive Verdict

This flow is leaking money in three places at once: the ad copy is *partially* doing its job (keyword echo is correct, urgency is present), but only 3 of the 15 RSA headlines are visible — that's an Ad Strength penalty before the click ever happens. The landing page is then breaking the pre-qualification promise the ad made, and finally the conversion tracking is so broken that even if everything else were fixed, Smart Bidding would still be optimizing for the wrong signal.

**Headline takeaway:** Conversion tracking is the #1 fix. Without CallRail + Enhanced Conversions for Leads, every other optimization in this account is being graded on a fake scoreboard.

The skill's core principle applies directly here:

> *"Your ad copy's job is to make the click pre-qualified and the landing page redundant."*

Right now the ad pre-qualifies the user (Houston + emergency + same-day + licensed), and then the landing page resets that work to zero with a generic "Welcome to..." H1, a buried phone number, and a 7-field form. The user paid the click, the LP wasted the intent.

---

## Section 1 — What's Broken (Inventory)

### 1A. Ad Copy Issues

Running the skill's **12-Point Copy Audit** against the 3 headlines provided:

| # | Audit Item | Pass / Fail | Notes |
|---|---|---|---|
| 1 | All 15 headlines populated | **FAIL** | Only 3 of 15 provided. Combination space crippled. |
| 2 | All 4 descriptions populated | **UNKNOWN** (not provided, presume incomplete) |
| 3 | Primary keyword in 3+ headlines | **PASS (barely)** | "Emergency AC Repair Houston" in H1, "HVAC" in H2/H3 — but only 3 headlines exist |
| 4 | All 6 categories present | **FAIL** | Have Keyword (H1), CTA (H2), Trust (H3). Missing: Symptom, USP-differentiator, Offer/Financing |
| 5 | No duplicate angles | **PASS** | The 3 are distinct |
| 6 | At most 2 pinned | **UNKNOWN** | Not specified — verify in Google Ads UI |
| 7 | Each description does ONE job | **UNKNOWN** |
| 8 | Phone in Call Asset, not headline | **FAIL** | "Call 24/7" in H2 implies ad is leaning on copy CTA instead of Call Asset — verify Call Asset is configured |
| 9 | No banned patterns | **PASS** | Clean copy |
| 10 | All extensions configured | **UNKNOWN** | Audit separately |
| 11 | Final URL = dedicated LP | **PASS** | `/emergency-ac-repair/` is dedicated, not homepage |
| 12 | Display path uses keyword + city | **UNKNOWN** | Should render as `/Emergency-AC-Repair/Houston` |

**Score: ~3/12 confirmed pass, 4 confirmed fail.** Below the 8/12 rewrite threshold.

The single biggest ad-copy failure: **only 3 headlines.** The skill is explicit — "Write all 15 headlines. Skipping headline slots cuts the combination space the algorithm has to optimize. There's no 'saving' by writing 10." With 3 headlines, Google has roughly 6 combinations to test (3×2 description pairs), not the ~3,840 the algorithm is designed for. Ad Strength will be capped at "Average" or "Poor" — that's a 15–30% CPC penalty per the skill.

### 1B. Landing Page Issues

The skill defers full LP CRO to `cro-strategy`, but the LP directly affects the **Landing Page Experience** component of Quality Score, which IS in scope here. Auditing against the QS Diagnostic Tree:

| Issue | Severity | QS Component Affected |
|---|---|---|
| **H1 mismatch:** "Welcome to 75 Degree AC – Houston's Trusted HVAC Partner" does not echo the ad keyword "Emergency AC Repair Houston" | **HIGH** | Landing Page Experience + Ad Relevance |
| **Phone in footer only** — no header phone, no sticky button | **CRITICAL** | LP Experience (HVAC = phone-driven conversion) |
| **7-field form** (name, email, phone, address, service type, preferred time, message) — friction kills emergency conversion | **CRITICAL** | LP Experience |
| **No review count above the fold** — trust signal missing where ad promised "Licensed Houston HVAC" and "Same-Day" | **HIGH** | LP Experience |
| **LCP 4.2s on mobile** — skill target is <2.5s | **CRITICAL** | LP Experience (direct QS hit per the QS Diagnostic Tree: "QS = 1–3 → Landing page problem → Check LCP <2.5s") |

Per the QS Diagnostic Tree, **LCP 4.2s + H1 mismatch + buried phone** is a textbook landing-page-driven low Quality Score pattern. Expect QS 3–5 on this LP regardless of how good the ad copy is.

### 1C. Conversion Tracking Issues

This is where the most damage is. Running every item against the skill's "Conversion Settings" table and "Common Conversion Tracking Mistakes":

| Setting Provided | Skill Standard | Status |
|---|---|---|
| Only form submission counted as conversion | Skill requires: phone call from ad + phone call from website (CallRail) + form submission + closed-job offline upload | **CRITICAL FAIL** |
| No call tracking (CallRail not installed) | Skill: "CallRail + GTM is the only stack that works" — explicitly named in skill description as part of the methodology | **CRITICAL FAIL** |
| Attribution model: last-click | Skill: "Data-driven (preferred) or Position-based. Last-click is leaving cross-keyword credit on the floor" | **HIGH FAIL** |
| Click-through window: 90 days | Skill: 30 days. "HVAC research-to-purchase tends to be days, not weeks" | **HIGH FAIL** |
| Conversion count: Every | Skill: One. "1 lead per person, not 3 form submits = 3 conversions" — listed as Common Mistake #5 | **HIGH FAIL** |
| No Enhanced Conversions for Leads | Skill: "non-negotiable in 2026... Without this, your tCPA is stuck on 'lead value' not 'closed job value'" | **CRITICAL FAIL** |

**Six of six conversion-tracking settings are wrong.** Smart Bidding has been training on garbage signal. Any tCPA / Maximize Conversions strategy currently running is optimizing toward whatever subset of leads happen to fill out a 7-field form on a slow page — which is the *least representative* slice of the actual customer base. The real money (callers, especially emergency callers who don't fill forms) is invisible to the bidding algorithm.

---

## Section 2 — Priority Order to Fix

The order is set by: (a) blast radius (does this fix unlock other fixes?) and (b) the skill's explicit hierarchy ("Conversion tracking is non-negotiable").

### Priority 1 — Conversion Tracking Foundation (do this first, this week)
**Why first:** Per the skill: "No conversion tracking = no skill output is reliable." Every downstream optimization decision (which keywords to scale, which ads to favor, what bid to set) is being made on broken data. Fix this before touching ads or LPs — otherwise you're making changes you can't measure.

### Priority 2 — Landing Page LCP + H1 + Phone Prominence (this week, parallel with P1)
**Why second:** LCP 4.2s is a direct QS suppressor on the LP component, and H1 mismatch is breaking Ad Relevance. These two together are likely costing 2–3 QS points which translates to 25–67% inflated CPC per the skill's QS table. Cheap to fix relative to impact.

### Priority 3 — Form Friction Reduction (this week)
**Why third:** Even after tracking is fixed, the form will throttle conversion volume. 7 fields is roughly 3× the friction of a 2-field emergency form. The skill's Lead Form Asset template is explicit: "Fields: Full name, Phone number (no email — friction kills conversion)."

### Priority 4 — Rebuild RSA to 15 Headlines (next week)
**Why fourth:** The 3-headline RSA is leaking 15–30% on CPC via Ad Strength penalty, but this is downstream of the tracking + LP fixes — once those are in, the real performance of new headlines becomes measurable. Use the skill's Complete Deployable RSA Pack — Emergency Campaign as the drop-in replacement.

### Priority 5 — Above-the-Fold Trust Signal (next week)
**Why fifth:** Adds trust without rebuilding the page. "500+ Five-Star Reviews" + TACLA license # + "Serving Houston Since 2016" in the hero strip. Smaller QS lever than #2 but compounds with new ad copy.

### Priority 6 — Attribution + Window + Count Settings (next week, after tracking is collecting clean data)
**Why sixth:** Has to wait for CallRail + Enhanced Conversions to be feeding the system — otherwise switching to data-driven attribution while only counting form submits gives you data-driven attribution on a broken signal.

---

## Section 3 — Expected Quality Score / CPC Impact Per Fix

Using the skill's QS-to-CPC table:

| QS | CPC vs. avg |
|---|---|
| 10 | -50% |
| 8 | -20% |
| 6 | 0% |
| 4 | +25% |
| 2 | +67% |

Best estimate: this campaign is currently sitting at **QS 4–5** based on the LP signals and 3-headline RSA. That's a 25%+ CPC penalty plus the unknown bidding error from broken conversion tracking.

| Priority | Fix | QS Component Affected | Expected QS Movement | Expected CPC Impact | Other Impact |
|---|---|---|---|---|---|
| **P1** | CallRail + GTM + Enhanced Conversions for Leads + correct settings | Indirect (via Smart Bidding accuracy) | None directly | None directly | tCPA accuracy improves dramatically — typically 20–40% CPL drop within 30 days as bidding optimizes on real signal. This is the single highest-ROI fix. |
| **P2a** | Fix LCP 4.2s → <2.5s | LP Experience | +1 to +2 | -10% to -20% CPC | Also lifts organic; cuts bounce |
| **P2b** | Rewrite LP H1 to "Emergency AC Repair in Houston — Same-Day Service" (echo ad keyword verbatim) | LP Experience + Ad Relevance | +1 | -10% CPC | Cumulative with 2a: roughly QS 4 → 6/7 |
| **P2c** | Add header phone + sticky mobile call button | LP Experience (indirect) | Marginal QS effect | None directly | Conversion rate 1.5–3× on emergency intent — this is the biggest CR mover on the list |
| **P3** | Cut form to 2 fields (Name + Phone) for emergency LP variant | LP Experience | +0 to +1 | None directly | Form CR typically 2–4× when going from 7 fields to 2 |
| **P4** | Rebuild RSA to 15 headlines using skill's Emergency pack | Expected CTR + Ad Relevance | +1 to +2 | -10% to -20% CPC | Ad Strength: Poor/Average → Good/Excellent |
| **P5** | Hero trust strip (reviews + TACLA + tenure) | LP Experience | +0 to +1 | -5% CPC | Conversion rate lift |
| **P6** | Attribution = data-driven, click-through = 30d, count = One | None directly | None | None | Unlocks correct cross-keyword credit; stops over-counting |

**Stacked best-case after all fixes:** QS 4 → QS 8. Per the skill's table, that's a CPC swing from +25% to -20%, a roughly **35–45% reduction in cost per click**. Combined with form-friction reduction and call tracking capturing currently-invisible call conversions, expect total CPL to drop **40–60%** within 60 days of full implementation.

---

## Section 4 — Exact What-To-Do Steps for the Conversion Tracking Issues

These are the steps a PPC manager can execute. Each is paired with a verification step.

### Step 1 — Install CallRail + GTM (1–2 hours)

1. Sign up for CallRail account (Pro or Premium tier — needs Google Ads integration).
2. In CallRail: create a **Tracking Number Pool** sized to ~100% of monthly PPC traffic (start with 5–10 pool numbers; CallRail will recommend based on visit volume).
3. CallRail → Integrations → Google Ads → connect the 75 Degree AC Google Ads account and authorize.
4. CallRail → Integrations → Google Analytics 4 → connect.
5. CallRail → Settings → enable "Dynamic Number Insertion" (DNI) on the 75degreeac.com domain.
6. Get the CallRail JavaScript snippet from CallRail → Integrations → JavaScript Snippet.
7. In GTM (Google Tag Manager): create a new **Custom HTML tag** containing the CallRail JS. Trigger: All Pages.
8. Publish the GTM container.
9. **Verification:** Open `75degreeac.com/emergency-ac-repair/` in incognito. Inspect the phone number in the page — it should now be a CallRail tracking number, not (713) 598-2737. Wait 30 seconds and refresh — same session = same tracking number assigned.
10. Place a test call to the tracking number from a non-office phone. Confirm it rings to the real (713) 598-2737. Wait 5 minutes, confirm it appears in the CallRail dashboard.

### Step 2 — Configure Call Tracking Conversion in Google Ads (30 minutes)

1. Google Ads → Tools → Conversions → New conversion action → Phone calls → Calls from a Google forwarding number on your website (or the CallRail-imported version, depending on integration).
2. **Conversion name:** `Phone Call from Website (CallRail)`
3. **Category:** Lead
4. **Value:** Use the same value for each conversion → **$75** (per the skill's conversion-value math: $400 avg job × 50% close × 40% haircut)
5. **Count:** **One** (NOT Every) — per skill's table
6. **Click-through conversion window:** **30 days** — per skill (NOT 90)
7. **View-through conversion window:** **1 day** — per skill
8. **Attribution model:** **Data-driven** (if account has enough conversion data) or **Position-based** as a fallback — per skill ("Last-click is leaving cross-keyword credit on the floor")
9. **Include in 'Conversions':** Yes (this is a primary action, drives Smart Bidding)
10. **Minimum call duration:** **60 seconds** — per skill ("Filters hangups, voicemail, junk")
11. **Verification:** From CallRail, push a test call (60+ sec) and check Google Ads → Tools → Conversions within 1 hour for the test event.

### Step 3 — Add Office IP / Internal Call Filtering in CallRail (15 minutes)

1. Get the office IP address(es). If office uses cell phones too, get those as known caller IDs.
2. CallRail → Settings → Spam & Filters → add office IP to **excluded IPs**.
3. CallRail → Settings → Spam & Filters → add internal phone numbers to **excluded callers** (so techs calling in don't show as leads).
4. **Verification:** From the office network, place a test call. Confirm it does NOT count toward CallRail conversion total.

### Step 4 — Fix Form Submission Conversion Settings (20 minutes)

The form-submission conversion already exists, but its settings are wrong.

1. Google Ads → Tools → Conversions → click into the existing form-submission conversion.
2. **Edit settings:**
   - Count: change from **Every** to **One** (per skill's Common Mistakes #5)
   - Click-through window: change from **90 days** to **30 days**
   - Attribution model: change from **Last-click** to **Data-driven** (or Position-based fallback)
   - Value: confirm **$75** flat (same as call value, until enough data to compute real per-lead value)
3. Verify that the form fires on `/thank-you/` page view, not on submit-button click. (Per skill: "Trigger → Page View → Page URL contains `/thank-you/`")
4. **Verification:** Submit a test form, confirm it hits `/thank-you/`, confirm conversion appears in Google Ads diagnostics within 1 hour, and confirm value reads $75.

### Step 5 — Set Up Phone Call from Ad (Call Asset) Conversion (15 minutes)

The ads currently have "Call 24/7" in headline 2, but per skill that phone CTA belongs in the Call Asset, not the headline. Either way, the Call Asset itself needs a conversion attached.

1. Google Ads → Assets → Call → confirm a Call Asset exists with phone (713) 598-2737. If not, create it.
2. Edit Call Asset → enable **Call Reporting**.
3. Edit Call Asset → **Conversion action:** select or create `Phone Call from Ad`. Configure:
   - Category: Lead
   - Value: $75
   - Count: One
   - Click-through window: 30 days
   - Attribution: Data-driven
   - Min call length: **60 seconds**
4. Schedule: 24/7 (per skill: "Emergency campaigns: All hours — emergencies happen at 2am").
5. **Verification:** Click a 75 Degree AC ad on mobile, tap the call extension, hold the call >60 sec. Confirm the conversion fires in Google Ads within 1 hour.

### Step 6 — Set Up Enhanced Conversions for Leads (1–2 hours, then ongoing)

This is the skill's "non-negotiable in 2026" item.

1. Confirm CallRail is capturing **caller name + phone** on every lead (it does by default).
2. Confirm whatever CRM 75 Degree AC uses (Service Titan, ServiceM8, HouseCall Pro, or a sheet) marks each lead with: lead source (CallRail or form), close status (booked / not booked / completed), and final job revenue.
3. Google Ads → Tools → Conversions → for each Lead conversion (call from ad, call from website, form), open Settings → enable **Enhanced Conversions for Leads**.
4. Choose data source: **Manual upload (CSV)** as a starting point; upgrade to API/Zapier later.
5. Build a weekly process:
   - Every Monday, pull all leads from the past 14–30 days where job has closed (booked + paid).
   - CSV columns required: hashed email (SHA-256), hashed phone (E.164 format then SHA-256), conversion name, conversion time, conversion value (= actual job revenue), order ID.
   - Upload to Google Ads → Tools → Conversions → Uploads → CSV.
6. **Verification (initial):** Upload one test conversion for a known closed job. Wait 24 hours, confirm "Uploads" shows it as ingested without errors. Wait 14 days, confirm Google Ads model-matched the upload back to a click (visible in conversion diagnostics).
7. **Long-term:** Set up Zapier or Make.com automation: when CRM marks a job "Closed Won", auto-fire an Enhanced Conversions for Leads upload via the Google Ads API. Eliminates manual weekly pulls.

### Step 7 — Decide Primary vs Secondary Conversions (10 minutes)

Per the skill's table:

| Conversion | Primary or Secondary | Smart Bidding includes? |
|---|---|---|
| Phone call from ad | **Primary** | Yes |
| Phone call from website (CallRail) | **Primary** | Yes |
| Form submission (`/thank-you/`) | **Primary** | Yes |
| Closed job (offline upload) | **Primary** (value-based) | Yes |
| Chat initiated | **Secondary** | No |
| Booking page reach | **Secondary** | No |

In Google Ads → Tools → Conversions, set the "Include in 'Conversions'" toggle accordingly. **Verification:** the Conversions column in reporting should sum only the four primary actions.

### Step 8 — Wait, Verify, Then Switch Bidding (Day 14–21)

Don't change bidding strategy until Steps 1–7 are confirmed working for at least 14 days of conversion data.

1. After 14 days, audit Google Ads → Tools → Conversions → Diagnostics for each conversion action. All should show "Recording conversions" (green status).
2. Confirm Smart Bidding is now seeing 5–10× more conversions per week than pre-CallRail (because calls are now counted).
3. Only then, consider migrating Emergency campaign to **tCPA** with target = current actual CPL × 0.85 (per `google-ads-strategy` skill — defer there for the bidding progression).

### Step 9 — Document and Hand Off (15 minutes)

In `MEMORY.md` add:
- CallRail account ID + admin login path
- Conversion action IDs in Google Ads (one per: phone-from-ad, phone-from-website, form, closed-job)
- Office IP exclusion list
- Weekly Enhanced Conversions upload process owner

---

## Section 5 — Quick Summary Table

| What's Broken | Severity | Priority | Expected QS Lift | Expected CPC Lift |
|---|---|---|---|---|
| Only 3 RSA headlines (vs 15 required) | High | P4 | +1 to +2 | -10% to -20% |
| Call 24/7 in headline (belongs in Call Asset) | Medium | P4 (rolled into RSA rebuild) | Marginal | Marginal |
| No CallRail / no call tracking | **Critical** | **P1** | None directly | Unlocks 20–40% CPL drop via Smart Bidding accuracy |
| Only form counted as conversion | **Critical** | **P1** | None directly | Smart Bidding can't optimize on real signal |
| No Enhanced Conversions for Leads | **Critical** | **P1** | None directly | tCPA stuck on lead value not closed-job value |
| Last-click attribution | High | P6 | None | Cross-keyword credit recovery |
| 90-day click-through window | High | P6 | None | Stops over-attribution to PPC |
| Count = Every | High | P6 | None | Stops inflating CPL with duplicate submits |
| LP H1 doesn't echo ad keyword | High | P2b | +1 | -10% |
| LCP 4.2s mobile (vs <2.5s) | **Critical** | P2a | +1 to +2 | -10% to -20% |
| Phone in footer only | **Critical** (CR not QS) | P2c | Marginal | Not a CPC issue — CR mover (1.5–3× on emergency) |
| 7-field form | Critical (CR not QS) | P3 | +0 to +1 | Marginal CPC; 2–4× form CR |
| No above-fold reviews / trust | High | P5 | +0 to +1 | -5% CPC + CR lift |

---

## Section 6 — What's Out of Scope of This Skill (Reminder)

Per the skill's "When to Defer" section, the following pieces of this audit need pairing skills if you go deeper:

- **Full landing-page CRO playbook** (sticky CTA design, mobile UX details, A/B test plan) → `cro-strategy`
- **GA4 event configuration** (mapping CallRail and form events into GA4 custom events) → `analytics-setup`
- **Bidding strategy progression after tracking is fixed** (Maximize Conversions → tCPA → tROAS phases) → `google-ads-strategy`
- **Negative keywords + match-type cleanup if CPL stays high after fixes** → `google-ads-keywords`
- **Schema markup on the LP** (LocalBusiness + Service + AggregateRating to assist QS via better LP signals) → `schema-markup`

This audit covered everything inside the `google-ads-copy` skill's scope: RSA structure, pinning, extensions, conversion tracking, and Quality Score diagnostics.

---

## File References

- Methodology: `/Users/mac/Digital Marketing/Local SEO/Clients/75 Degree AC/.claude/skills/google-ads-copy/SKILL.md`
- Landing page: `https://75degreeac.com/emergency-ac-repair/`
- Google Ads account: 75 Degree AC (per project CLAUDE.md)
