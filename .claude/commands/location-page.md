---
description: Create or optimize a location/service-area page for 75 Degree AC
argument-hint: [city or neighborhood name] [service: ac-repair|hvac|maintenance|installation]
---

Create or optimize a location page for 75 Degree AC. Target: $ARGUMENTS

Parse $ARGUMENTS: first part = location, second part = service (default: ac-repair if not specified)

Read first:
- `service-areas.md` — zip codes and details for the target location
- `services-list.md` — service details for the target service
- `02-site-architecture/page-tracker.csv` — does this page exist already?
- `02-site-architecture/site-architecture.md` — URL format standards

**URL Format:** /[service]-[city-slug]-tx/ or /hvac-contractor-[neighborhood]-tx/
Examples: /ac-repair-katy-tx/ | /hvac-contractor-montrose-tx/

**Location Page Template (1,000–1,500 words):**

**Metadata:**
```
Title: [Service] in [City], TX | [USP] | 75 Degree AC
Meta: [Service] in [City] TX? 75 Degree AC provides [service] for [City] residents. Same-day service, licensed, free estimates. Call (713) 598-2737.
H1: [Service] in [City], TX — Same-Day, Licensed
```

**Required Sections:**

1. **Intro (150 words)**
   - First sentence: keyword + city + same-day
   - Include: licensed TACLA, free estimates, phone (713) 598-2737
   - Houston context: "serving [City] and Greater Houston since 2016"

2. **Why [City] Residents Choose 75 Degree AC (200 words)**
   - All USPs with local angle
   - Reference [City]-specific context (e.g., "Katy's extreme summer heat")
   - Mention nearby neighborhoods we also serve

3. **Our [Service] Services in [City] (250 words)**
   - List of specific services for this page
   - Pulled from services-list.md (relevant subset)

4. **Our Service Process (150 words)**
   - Step-by-step: call → dispatch → diagnosis → repair → payment
   - Mention same-day dispatch

5. **Service Area Coverage (100 words)**
   - [City] + surrounding areas
   - Zip codes from service-areas.md
   - "We come to your home or business"

6. **Local Trust Signals (100 words)**
   - TACLA licensed, insured
   - Houston area since 2016
   - Google reviews (mention count from business-info.md)
   - Financing available

7. **FAQ Section (5-8 Q&As — optimize for local voice search)**
   - "Do you offer AC repair in [City], TX?"
   - "How quickly can you come to [City]?"
   - "Are you available 24/7 in [City]?"
   - "[Service]-specific question for [City]"
   - "What's the cost of [service] in [City]?"

8. **CTA (50 words)**
   - Strong closing with (713) 598-2737
   - Emergency note if service includes emergency

**Schema to include:**
- LocalBusiness > HVACContractor
- Service with areaServed > [City] + zip codes
- FAQPage
- BreadcrumbList: Home > Services > [City]

**Internal Links to include:**
- Link to homepage
- Link to main service page (e.g., /ac-repair-houston-tx/)
- Link to emergency page
- Link to nearest neighbor location page

Save to: `07-landing-pages/content/[slug]-content.md`
Update: `02-site-architecture/page-tracker.csv` — add new page row
