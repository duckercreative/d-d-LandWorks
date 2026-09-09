---
name: analytics-setup
description: >
  Analytics and tracking setup specification for 75 Degree AC — GA4 configuration, custom events,
  call tracking, conversion tracking, UTM strategy, and reporting dashboard.
  Activates when setting up analytics, configuring GA4, or planning conversion tracking.
version: 1.0.0
client: 75 Degree AC
---

# Analytics & Tracking Setup — 75 Degree AC

Complete tracking specification for 75degreeac.com. A developer should be able to set up all tracking from this document alone.

---

## Business Tracking Priorities

**Primary conversion goal: Phone calls to (713) 598-2737**
**Secondary conversion goal: Contact form submission**
**NOT a goal**: email signups, newsletter, social follows

For HVAC emergencies, 92% of Houston customers call by phone. Every tracking setup must prioritize call attribution.

---

## Tools Required

| Tool | Purpose | Status |
|------|---------|--------|
| Google Analytics 4 | Traffic, conversions, user behavior | Pending setup |
| Google Search Console | Rankings, indexing, technical health | Pending setup |
| Google Tag Manager | Tag deployment | Pending setup |
| CallRail | Phone call tracking with source attribution | Listed in project tools |
| Google Business Profile Insights | GBP performance | Pending access |

---

## Section 1: GA4 Configuration

### Property Setup
- Property name: `75 Degree AC — Website`
- Data stream: Web, domain: `75degreeac.com`
- Time zone: US/Central (Houston)
- Currency: USD

### Enhanced Measurement (enable all)
- Page views (automatic)
- Scrolls (90% scroll depth)
- Outbound clicks
- File downloads

### Custom Events to Implement

| Event Name | Trigger | Parameters | Pages |
|-----------|---------|------------|-------|
| `phone_click` | Click on any `tel:` link | `phone_number`, `page_url`, `placement` (header/hero/mid/footer) | All pages |
| `form_submit` | Contact form successfully submitted | `form_id`, `page_url`, `service_selected` | Contact page, service pages with inline forms |
| `cta_click` | Click on any CTA button (non-phone) | `cta_text`, `cta_url`, `page_url`, `placement` | All pages |
| `emergency_page_view` | Page view on emergency page | `page_url`, `timestamp` | /emergency-ac-repair-houston/ |
| `service_page_view` | Page view on any service page | `service_name`, `page_url` | All service pages |
| `location_page_view` | Page view on any location page | `location_name`, `page_url` | All location pages |
| `map_click` | Click on Google Maps embed or directions | `page_url` | Contact page, location pages |
| `faq_expand` | Click to expand FAQ accordion | `question_text`, `page_url` | All FAQ sections |
| `scroll_to_cta` | User scrolls to mid-page CTA | `page_url` | Service pages |

### Event Implementation (WordPress + Elementor)

**phone_click event** (add to header/footer via GTM):
```javascript
// GTM Custom HTML Tag — fires on all page views
document.querySelectorAll('a[href^="tel:"]').forEach(function(link) {
  link.addEventListener('click', function() {
    var placement = link.getAttribute('data-placement') || 'unknown';
    gtag('event', 'phone_click', {
      phone_number: '7135982737',
      page_url: window.location.pathname,
      placement: placement
    });
  });
});
```

**Add `data-placement` to phone links in Elementor:**
- Header phone: `data-placement="header"`
- Hero CTA: `data-placement="hero"`
- Mid-page CTA: `data-placement="mid-page"`
- Footer phone: `data-placement="footer"`
- Sticky mobile bar: `data-placement="sticky-mobile"`

**form_submit event:**
```javascript
// GTM trigger: Form Submission, all forms
gtag('event', 'form_submit', {
  form_id: 'contact_form',
  page_url: window.location.pathname,
  service_selected: document.querySelector('[name="service"]') ? 
    document.querySelector('[name="service"]').value : 'unknown'
});
```

### Conversion Events (mark in GA4 as Conversions)

| Event | Estimated Lead Value | Priority |
|-------|---------------------|----------|
| `phone_click` | $50 | Primary |
| `form_submit` | $50 | Primary |
| `map_click` (Get Directions) | $25 | Secondary |
| `cta_click` on emergency page | $30 | Secondary |

---

## Section 2: Google Search Console

### Setup
- Verify domain: DNS TXT record (covers www and non-www)
- Submit sitemap: `https://75degreeac.com/sitemap.xml` (Rank Math auto-generates)
- Set preferred domain: https://75degreeac.com (non-www)

### Post-Setup Actions
1. Request indexing for all 21 indexed pages via URL Inspection
2. Submit sitemap
3. Check Coverage report — understand current 86 noindex issue
4. Check Core Web Vitals report
5. Check Mobile Usability report

### Ongoing Monitoring
- Performance: clicks, impressions, CTR, position for top 20 keywords weekly
- Coverage: check for new errors weekly (CRITICAL — 86 noindex is current blocker)
- Core Web Vitals: verify all URLs pass monthly

---

## Section 3: CallRail Call Tracking

**CallRail is listed in the tools stack — use this for granular call source attribution.**

### Setup
- Create tracking numbers:
  - GBP/Google forwarding number (tracks calls from GBP map listing)
  - Website number (dynamic number insertion — shows different number to organic vs paid visitors)
  - Google Ads number (for PPC campaigns)
- Integrate CallRail with GA4 (CallRail has native GA4 integration)
- Integrate CallRail with Google Ads (import call conversions)

### Dynamic Number Insertion (DNI) for 75degreeac.com
- Shows a unique tracking number to each traffic source
- All calls route to: (713) 598-2737 (unchanged for the caller)
- Source attribution: organic search, paid search, direct, referral, GBP

---

## Section 4: UTM Strategy

### Standard UTMs for All External Links

**Google Business Profile website link:**
```
https://75degreeac.com/?utm_source=google&utm_medium=gbp&utm_campaign=profile
```

**Citation directories** (customize [directory] for each):
```
https://75degreeac.com/?utm_source=yelp&utm_medium=citation&utm_campaign=local-seo
https://75degreeac.com/?utm_source=bbb&utm_medium=citation&utm_campaign=local-seo
https://75degreeac.com/?utm_source=angi&utm_medium=citation&utm_campaign=local-seo
```

**Social profiles:**
```
https://75degreeac.com/?utm_source=facebook&utm_medium=social&utm_campaign=profile
```

**Google Ads** (auto-tagged by Google — enable auto-tagging in Ads account)

### UTM Rules
- Always lowercase
- Use hyphens, not underscores
- Never UTM internal links (overrides session source)
- Document all UTM combinations in `08-reporting/trackers/utm-tracker.md`

---

## Section 5: GBP Analytics Setup

### Access Required
- Google Business Profile dashboard access
- Link GBP to GA4 via GA4 Admin > Product Links

### Key GBP Metrics to Track

| Metric | Source | Target |
|--------|--------|--------|
| Profile views | GBP Insights | Growing month-over-month |
| Direct searches (brand) | GBP Insights | Growing as brand awareness builds |
| Discovery searches | GBP Insights | Highest volume — people finding via category |
| Calls from GBP | GBP Insights + CallRail | 80+ per month by Month 3 |
| Direction requests | GBP Insights | Trending up |
| Website clicks from GBP | GBP Insights + GA4 UTM | Track vs CallRail phone calls |

---

## Section 6: Reporting Dashboard Specification

### Weekly Check (10 minutes)

| Metric | Source | Alert Trigger |
|--------|--------|--------------|
| Total phone clicks (7-day) | GA4 phone_click event | >50% drop from previous week |
| Total form submissions (7-day) | GA4 form_submit event | Zero in a week |
| Organic sessions (7-day) | GA4 | >20% drop |
| Emergency page views | GA4 | Spike = opportunity to check capacity |
| GSC errors | Search Console | Any new crawl errors |
| New reviews | GBP | Zero in 2 weeks |

### Monthly Review (30 minutes)

All weekly metrics PLUS:
- Top 20 keyword rankings (GSC Performance)
- GBP Insights summary (views, searches, actions)
- CallRail call summary by source
- Review count and rating trend
- Conversion rate by page type
- Blog post performance (traffic + CTA clicks)
- AI visibility spot check (ChatGPT, Perplexity)

### Quarterly Review (1 hour)

All monthly metrics PLUS:
- Competitor review growth comparison
- Full technical re-audit
- Content gap analysis
- Backlink profile growth
- Citation consistency audit

---

## Output File

Write full analytics implementation spec to: `06-analytics/analytics-setup.md`

Include:
- All GA4 custom events with implementation code (GTM-compatible)
- CallRail setup steps
- UTM master list for all external links
- Conversion event configuration
- Weekly/monthly/quarterly dashboard metrics table
- Tools access checklist (which accounts need to be connected)

---

## Quality Checklist

- [ ] All phone numbers on site are `<a href="tel:7135982737">` (clickable/trackable)
- [ ] `data-placement` attribute on all phone links for placement reporting
- [ ] GA4 property configured with correct timezone (US/Central)
- [ ] All custom events have name, trigger, parameters, and GTM implementation
- [ ] `phone_click` and `form_submit` marked as conversions in GA4
- [ ] CallRail integrated with GA4 and Google Ads
- [ ] UTMs on GBP website link and all major citation profiles
- [ ] GSC verified and sitemap submitted
- [ ] GBP linked to GA4
- [ ] Reporting cadence defined (weekly/monthly/quarterly)
