---
description: Optimize Google Business Profile — generate posts, answer bank, description, photo list
argument-hint: [task: full|posts|qa|description|photos|reviews]
---

Generate Google Business Profile optimization for 75 Degree AC.

Task: $ARGUMENTS (if blank, run full GBP optimization suite)

Read first:
- `business-info.md` — all business details, current GBP link, existing data
- `service-areas.md` — service areas for the answer bank
- `services-list.md` — full service list for description + answer bank
- `04-gmb/` — existing GMB scripts and any existing posts/templates

**Business Details (use exactly):**
- Name: 75 Degree AC
- Phone: (713) 598-2737
- Address: 4800 W 34th St, Ste C50F, Houston, TX 77092
- Hours: Mon–Sun 8am–8pm | Emergency: 24/7
- Primary Category: HVAC Contractor

**Full GBP Optimization Tasks:**

**1. Business Description (750 chars max)**
Write keyword-rich description covering:
- Primary services (AC repair, HVAC installation, maintenance)
- USPs (same-day, 24/7, licensed TACLA, free estimates, financing)
- Service area (Houston + suburbs)
- Year established (2016)
- Brand credibility
- End with call to action + phone

**2. GBP Posts (generate 12 post drafts)**
Mix of types (What's New, Offer, Event):
- 4 × service highlight posts (emergency, repair, maintenance, installation)
- 3 × seasonal posts (spring AC prep, summer emergency tips, fall heating)
- 2 × offer posts (financing, free estimate)
- 2 × education posts (signs AC needs repair, maintenance tips)
- 1 × review/trust post

Each post: 150-300 chars, include (713) 598-2737, relevant CTA, no hashtags

**3. Canonical Answer Bank (20 entries)**

⛔ These are **not** GBP Q&A seeds. Google killed the Q&A API on 2025-11-03 and phased the
public Q&A section out of profiles from 2025-12-03 — replaced by Gemini "Ask about this
place", which answers from profile fields, reviews, posts, and the website. Never output a
"Q&A seeds" deliverable or tell the client to add questions to their profile.

Write the answers anyway — they're the canonical phrasing for these facts, and they route to
the four surfaces Gemini actually reads. Cover:
- Hours and emergency availability
- Service areas (list key neighborhoods)
- HVAC brands serviced
- Financing availability
- License and insurance
- Same-day availability
- Pricing / free estimates
- Commercial vs. residential
- Common services (AC, heating, ductless)
- How to book / contact

Format each as:
```
Q: [question a customer would type]
A: [75–150 char answer]
→ USE ON: on-site FAQ + FAQPage schema | GBP post body (strip phone) | service description | review reply
```

**4. Photo Shot List (50+ photos)**
Categorize:
- Exterior shots (front of van with logo, service area neighborhoods)
- Team photos (technicians in uniform with equipment)
- Work in progress (AC units, ductwork, installations)
- Before/after comparisons
- Office / dispatch area
- Certifications and licenses (TACLA certificate, BBB plaque)
- Customer interactions (with permission)

**5. Category Recommendations**
Primary + up to 9 secondary categories (GBP allows 10 total)

**6. Attribute Recommendations**
List all applicable GBP attributes for HVAC contractor

Save to: `04-gmb/gbp-optimization-[date].md`
Posts save to: `04-gmb/posts/`
Answer bank saves to: `04-gmb/answer-bank.md`
