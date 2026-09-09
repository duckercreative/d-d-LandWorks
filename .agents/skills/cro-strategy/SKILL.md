---
name: cro-strategy
description: >
  Conversion rate optimization methodology for 75 Degree AC — optimizing for phone calls,
  trust signals, mobile UX, and emergency page conversion. Primary goal: calls to (713) 598-2737.
  Activates when auditing landing pages, CTAs, or conversion elements.
version: 1.0.0
client: 75 Degree AC
---

# CRO Strategy — 75 Degree AC

## Primary Conversion Goal

**Get the phone to ring at (713) 598-2737.**

Secondary: contact form submission.
NOT: email signups, newsletter, social follows.

For HVAC emergencies, 92% of Houston homeowners call by phone (not chat, not form). Every page must be optimized for immediate phone conversion.

---

## Input Files

- `business-info.md` — USPs, phone, trust signals
- `07-landing-pages/pages/` — existing per-page workspaces and HTML mockups
- `03-gsc/data/queries-202604.csv` — which pages get traffic
- `02-site-architecture/site-architecture.md` — page types

---

## Mobile-First HVAC Conversion

**75% of HVAC emergency searches happen on mobile.** Mobile UX is the primary CRO concern.

### Mobile Checklist

| Element | Requirement | Priority |
|---------|-------------|----------|
| Click-to-call button | Visible without scrolling | Critical |
| Phone number | Tappable link `<a href="tel:7135982737">` | Critical |
| CTA button size | Minimum 44×44px tap target | Critical |
| Page load time | <3 seconds on 4G | Critical |
| Text size | Minimum 16px (no zoom needed) | High |
| Form fields | Maximum 4 fields | High |
| CTA color | High contrast — orange or red for emergency | High |

---

## Page-by-Page CRO Audit

### Homepage (Primary Conversion Page)

**Above fold must include:**
- H1 with primary keyword
- Phone number (713) 598-2737 as click-to-call
- "Request Service" or "Call Now" CTA button
- Trust signals: Google rating, years in business, TACLA license badge

**Section sequence:**
1. Hero: USP + click-to-call + trust rating
2. Services overview (6 service cards linking to service pages)
3. Why Choose Us (all USPs with icons)
4. Service Areas (with map or list)
5. Reviews / Social Proof (3–5 featured reviews)
6. Bottom CTA (phone + emergency note)

### Emergency AC Repair Page (Highest Urgency)

This page must convert at the highest rate — someone is in crisis.

**Required elements:**
- Red or orange "Call Now — 24/7" CTA button (sticky on mobile if possible)
- Phone number in first sentence
- "(713) 598-2737" in H1 or immediately below
- "Response time: Within 2 hours" stated above fold
- Green "OPEN 24/7" badge
- NO long paragraphs above fold — get to the CTA fast

**Avoid on emergency page:**
- Long service descriptions
- Pricing (emergency callers don't want to negotiate first)
- Excessive navigation links that distract

### Service Pages

**CTA placement:**
1. Above fold (top of page)
2. After "Why Choose Us" section
3. After service process section
4. After FAQ section
5. Page footer

**CTA copy rotation:**
- "Call for Same-Day Service: (713) 598-2737"
- "Get a Free Estimate: (713) 598-2737"
- "Book a Technician: (713) 598-2737"
- "Emergency? Call 24/7: (713) 598-2737"

### Contact Page

- Form: Name, Phone, Service Needed, Zip Code (4 fields max)
- Phone number displayed above form (some prefer to call)
- Map to office address
- Response time promise: "We respond within 2 hours"

---

## Trust Signal Hierarchy

Place trust signals in this order (most impactful first):

1. **Google Reviews aggregate** — star rating + count (most trusted by consumers)
2. **TACLA License number** — Texas legal credibility
3. **Year established** — "Serving Houston since 2016"
4. **BBB rating** — established authority
5. **Insurance statement** — "Fully insured"
6. **Brands serviced** — Carrier, Trane, Lennox logos (if licensed to display)
7. **Response time** — "Same-day" / "Within 2 hours"
8. **Free estimate** — reduces friction to call
9. **Financing available** — removes price objection

---

## Form Optimization

**Current field recommendation (4 fields):**
1. Your Name (required)
2. Phone Number (required — this IS the conversion)
3. What Service Do You Need? (dropdown: AC Repair, Installation, Maintenance, Emergency, Other)
4. ZIP Code (for service area confirmation)

**Remove:** Email (adds friction), Address (too much), Message (adds friction for emergencies)
**After submit:** Show phone number again "A technician will call within 2 hours. Need immediate help? Call (713) 598-2737"

---

## Pricing Transparency as CRO Tool

**The dilemma:** Show prices = reduce friction for price-shoppers. Hide prices = more calls.

**Recommendation for 75 Degree AC:**
Show cost *ranges* (not exact prices) with a strong "free estimate" call to action.

Example for /ac-repair-cost-houston-tx/:
```
AC Repair Cost in Houston, TX:
• Diagnostic fee: $0 (free with repair)  
• Capacitor replacement: $150–$350
• Refrigerant recharge: $200–$500
• Compressor replacement: $800–$2,500
• Most common repairs: $150–$500

👉 Get your FREE estimate today: Call (713) 598-2737
```

This approach: answers the cost question (good for SEO + AI citation) + drives calls (not self-serve).

---

## A/B Testing Priority Queue

| Test | Pages | Hypothesis | Metric |
|------|-------|------------|--------|
| CTA button color: Orange vs Blue | Emergency + Service pages | Orange = urgency = more clicks | Click-to-call rate |
| Phone in headline vs below headline | All service pages | Phone in headline = more calls | Call rate |
| Form vs no form (only click-to-call) | Emergency page | No form = less distraction = more calls | Call rate |
| "Free estimate" vs "Same-day service" CTA | Service pages | Free estimate = lower barrier | Click rate |

---

## Chat Widget Assessment

For HVAC emergency conversions, chat widgets often **hurt** conversion:
- Emergency customers want to talk NOW — chat feels slow
- Chat requires typing (bad on mobile under stress)
- Chat requires staffing (if not staffed, destroys trust)

**Recommendation:** If a chat widget is currently installed, test removing it on emergency pages.
Keep only on non-emergency pages (commercial inquiries, maintenance scheduling).

---

## Output Files

CRO audit: `07-landing-pages/cro/cro-audit-[date].md`
CTA copy: `07-landing-pages/cro/cta-copy-library.md`
Form recommendations: `07-landing-pages/cro/form-optimization.md`
