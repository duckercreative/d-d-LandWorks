---
description: CRO audit of landing / money pages — phone prominence, trust signals, mobile UX, form friction, A/B test ideas
argument-hint: [url or slug, or blank for all money pages]
---

Run the CRO audit using the `cro-strategy` skill.

Target: $ARGUMENTS (if blank, audit all pages in the "money pages" set)

**Money pages (default set):**
- Homepage `/`
- `/ac-repair-houston-tx/`
- `/emergency-ac-repair-houston/`
- `/hvac-service-and-repair/`
- `/ac-installation-houston-tx/`
- All `/landing-page-*` files in `07-landing-pages/pages/*/`

**Primary conversion goal:** Phone calls to (713) 598-2737.

**Audit checklist per page (score /10 each, total /100):**

1. **Phone prominence (desktop + mobile)**
   - Phone in header? Clickable `tel:` link?
   - Sticky mobile call bar?
   - Phone in hero section (above fold)?
   - Phone in every H2 section CTA?
   - Phone in footer?

2. **Trust signals (count them)**
   - TACLA72152E license visible (per memory)?
   - AggregateRating schema + star display?
   - BBB logo + link?
   - Year-founded ("Since 2016")?
   - Review count / testimonial in hero?
   - Insurance + bonded mention?
   - Brand certifications (Carrier, Trane, Lennox)?

3. **Mobile UX (curl + user-agent = mobile)**
   - LCP < 2.5s?
   - Tap targets ≥ 48px?
   - No horizontal scroll?
   - Hero CTA thumb-reachable?
   - Sticky CTA bar?

4. **Form friction (if form present)**
   - ≤ 4 fields?
   - No required email if phone is captured?
   - Inline validation?
   - Trust text near submit ("We'll call in 15 min — no spam")?
   - Mobile keyboard type correct per field?

5. **Urgency / scarcity (ethical)**
   - "Same-day available" messaging?
   - Current availability indicator?
   - 24/7 emergency badge?

6. **Social proof placement**
   - Review snippet above fold?
   - Full testimonials block?
   - Case-study / job count ("5,000+ Houston homes served")?

7. **Message match (for paid landing pages)**
   - H1 = ad headline theme?
   - Keyword density aligned with campaign?

8. **Friction audit**
   - Any modals / popups within 10s?
   - Any autoplay video?
   - Any chat widget that hides the phone?

9. **Exit intent / secondary capture**
   - Exit-intent offer?
   - Alternative CTA (financing, free estimate)?

10. **A/B test ideas** (propose 3+ per page)

**Output:**
- Dark HTML report: `08-reporting/monthly/[YYYY-MM]/cro-audit-[date].html` (YYYY-MM is the month of [date])
- KPI cards: page score, call prominence, trust count, mobile UX, form friction
- Side-by-side mobile screenshot (via Playwright) before/after recommendations
- Fix queue grouped: "Ship this week" / "Test this month" / "Longer A/B"
- `open` the HTML

Use the Playwright browser tools to capture actual mobile screenshots (resize to 375×812).
