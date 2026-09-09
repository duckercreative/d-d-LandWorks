---
name: local-seo
description: >
  Local SEO methodology for 75 Degree AC — Google Business Profile optimization, 
  NAP consistency, citations, local pack ranking, review strategy, and location pages.
  Activates when working on GBP, citations, local pack rankings, reviews, or local landing pages.
version: 1.0.0
client: 75 Degree AC
---

# Local SEO — 75 Degree AC

## Why Local SEO Is the #1 Priority

For a Houston HVAC contractor, the Google local pack (3-pack) captures **44% of clicks** for local service queries — more than organic position 1. At 178K monthly impressions with only 159 clicks (0.09% CTR), the biggest traffic unlock for 75 Degree AC is dominating the local pack + improving SERP presence.

**2026 Local Ranking Factor Weights (Whitespark + post-March 2026 core update):**
| Factor | Weight | 2026 Shift |
|--------|--------|------------|
| Proximity (searcher-to-business distance) | ~55% on mobile | unchanged, dominant on mobile |
| GBP Signals (category, completeness, services, hours) | ~32% | Primary category = #1 single ranking factor. Incompleteness actively penalized post-March 2026 core. |
| Review Signals (velocity, recency, response rate, keywords in reviews) | ~16–20% | Review velocity jumped from #93 to #11. 5 fresh reviews/mo beat 200 stale. 80%+ response rate = measurable ranking boost. |
| On-Page / Website Signals | ~19% | City-specific landing page linked from GBP = material lift |
| Behavioral / Engagement Signals (clicks, calls, direction requests, photo views, booking interactions) | climbing fast | "Dynamic profile" is the 2026 local ranking story |
| Link Signals (local, authority) | ~11% | stable |
| Citation Signals (NAP consistency) | ~11% | stable — NAP mismatch still suppresses |

**2026 Core Rule — "Dynamic Profile":**
Static GBPs are dying. Position 1–3 in the local pack now goes to profiles showing ongoing signal: fresh reviews, fresh photos, recent posts, updated hours, booking interactions. A fully-populated-but-stale profile is out-ranked by a less-complete but actively-updated one.

**HVAC-Specific Benchmarks (Houston market):**
- Top-ranked HVAC local pack = 200+ Google reviews, 4.8+ rating
- Review velocity: 10–20 reviews/month for top 3 pack position (with fresh reviews in last 30 days — stale counts discounted)
- Review owner response rate: 80%+ target
- GBP photo count for top HVAC: 80–150 photos (with fresh uploads in last 30 days)
- GBP post frequency for top HVAC: 2–3 posts/week (freshness signal, not ranking driver per Sterling Sky 441-keyword study — but feeds completeness)
- ~~Q&A seeded~~ — **dead metric.** Google removed GBP Q&A (API off 2025-11-03, public section phased out from 2025-12-03), replaced by Gemini "Ask about this place". The equivalent lever is now on-site FAQ + `FAQPage` schema, post bodies, profile fields, and review replies.

---

## Off-Site Action Checklist — AI Engine Pipelines (NEW 2026-05-25)

**The biggest gap most local businesses miss.** Each AI engine reads from a DIFFERENT upstream directory. Google Business Profile alone covers Gemini and Google AI Mode — not ChatGPT, Siri, Alexa, Copilot, or Claude.

| Action | AI Engine pipeline | Lever / lift | Effort | Status |
|---|---|---|---|---|
| **Foursquare listing claimed + verified** | **ChatGPT local recs (60–70% source)** | Highest-leverage missing action for most contractors | 15 min | [ ] |
| **Apple Maps Connect** listing claimed + verified | Siri / Apple Intelligence local | iPhone ~60% US share — every iPhone uses this | 30 min | [ ] |
| **Bing Places** claimed + Bing Webmaster Tools verified + sitemap submitted | Cortana + Microsoft Copilot + ChatGPT (via Bing index) | NOT Alexa — Alexa uses Yelp | 30 min | [ ] |
| **Brave Search API** site verified + sitemap submitted (Brave Webmaster) | Claude MCP integrations | Brave is Claude's external search tool | 15 min | [ ] |
| **Yelp listing** with active reviews | **Alexa pipeline** + ChatGPT reference | Critical for Alexa local discovery | already active — keep maintained | [ ] |
| **ThreeBestRated Houston** application submitted | ChatGPT local-business-directory citations (24% share) | Editorial review · 4–8 wks · once approved = ongoing citation source | 30 min apply + 4-8 wks wait | [ ] |
| **Trustpilot / G2 / BBB** profiles populated | ChatGPT (3× citation lift signal for review-site presence) | Sites with multi-platform review presence = 3× cited | 1 hr each setup | [ ] |
| **LinkedIn Company Page** complete + Person schema sameAs → LinkedIn for owner + Kenny Ho | Microsoft Copilot entity resolution | Copilot's entity layer pulls from LinkedIn | 1 hr | [ ] |
| **YouTube channel** + 6+ service explainer videos | All AI engines (0.737 single-platform citation correlation — #1 of any single signal) | Even 6 uploads beat zero. Per-service videos rank for sub-queries | 8-12 hrs | [ ] |
| **Wikidata entry** with ≥8 filled properties | Google KG + OpenAI training data (Truth Node) | Lower bar than Wikipedia; ChatGPT citations route through Wikipedia (Wikidata-fed) | 1-2 hrs | [ ] |
| **Birdeye aggregator hub** connected (Google + Yelp + FB + BBB into one URL) | Cross-platform unified review entity signal | Aggregation cleanly parsed by AI engines | 1 hr | [ ] |
| **Reddit + Quora brand mentions at volume** | All AI engines (4× citation lift) | Reddit ≈ 40% of all AI citations; Quora similar weight | Ongoing — via reddit-engagement + quora-engagement skills | [ ] |
| **Local PR / news mentions** (Houston Chronicle, Community Impact, ACHR News, Houston Chamber, HOA newsletters, podcast guest spots) | Google AI Overviews (6.5× more likely to cite via third-party press — AirOps + Yext study) | Single highest AIO multiplier | Ongoing outreach | [ ] |

### How to run this checklist

1. For every new client onboarding: run all 13 actions in week 1.
2. For 75 Degree AC specifically: audit each action's current state quarterly.
3. Track in `02-site-architecture/off-site-pipelines.csv` with status (claimed / verified / pending / blocked / done).
4. Re-verify NAP across all 13 quarterly using the 5-field rule (name · address · phone · hours · description must match GBP exactly).

### Critical pipeline corrections (2026-05-25 — verified via deep research)

- ❌ Bing Places → Alexa: WRONG. Alexa pulls from **Yelp**, not Bing.
- ✅ Bing Places → **Cortana + Copilot + ChatGPT** (via Bing index).
- ❌ "Brave Search Console" as a publisher tool — not documented.
- ✅ **Brave Search API** powers Claude MCP integrations — get site indexed in Brave.
- ❌ llms.txt as a major lever — SE Ranking 300K-domain study found NO measurable lift. Hygiene only.
- ✅ Use `HVACBusiness` schema type, NOT `HVACBusiness` (which does not exist on schema.org).

---

## Input Files — Read Before Any Local SEO Work

- `business-info.md` — NAP, hours, GBP link, current review count
- `service-areas.md` — all service areas + zip codes
- `services-list.md` — service hierarchy for GBP service menu
- `04-gmb/` — existing GMB scripts, posts, templates
- `03-gsc/data/` — GSC performance per location query

---

## Section 1: Google Business Profile Audit

### Business Constants (always use exact values)
```
Name:    75 Degree AC
Phone:   (713) 598-2737
Address: 4800 W 34th St, Ste C50F, Houston, TX 77092
Website: https://75degreeac.com
Hours:   Mon–Sun 8:00am–8:00pm | Emergency: 24/7
```

### 13-Point GBP Completeness Checklist

| Field | Target | Impact |
|-------|--------|--------|
| Primary Category | HVAC Contractor | Critical — #1 ranking factor |
| Secondary Categories (up to 9) | Air Conditioning Contractor, Heating Contractor, Air Duct Cleaning Service, Furnace Repair Service, Heat Pump Contractor | High |
| Business Description | 750 chars — keyword-rich | High |
| All 7-day hours set | Mon–Sun 8am–8pm | High |
| Holiday/special hours | Thanksgiving, Christmas, New Year | Medium |
| Services menu | All services from services-list.md | High |
| Attributes | Online estimates, Identifies as women-led (if true), 24/7 | Medium |
| Photos | 80+ (exterior, team, vans, jobs, before/after) | High |
| ~~Q&A seeded~~ | n/a — feature removed by Google late 2025 | — |
| GBP posts | 2–3/week | Medium |
| Products | High-ticket services (AC Installation, HVAC System) | Low |
| Appointment URL | Link to contact page | Low |
| Business chat | Disabled (deprecated July 2024) | N/A |

### GBP Business Description — Rules + Humanized Template

**Google's hard rules (auto-reject if violated):**
- 750 character hard limit (first 250 chars front-loaded — that's the truncation point)
- NO phone numbers anywhere in description
- NO URLs or links
- NO HTML or emoji
- NO pricing, offers, or promotional content ("free estimates", "flat-rate", "$X", "financing available", "% off")
- NO superlatives without substantiation ("best", "#1", "top-rated", "trusted")
- NO ALL CAPS shouting
- NO misspellings, gimmicky characters, gibberish

**Project humanization layer (on top of Google's rules):**
- NO em dashes (—) — use commas, periods, colons, or parentheses
- NO banned phrases from `content-generation/SKILL.md` ("committed to", "pride ourselves", "quality service", "state-of-the-art", "nestled in", "when it comes to", etc.)
- Varied sentence length (no 3+ consecutive same-length sentences)
- Must pass Swap Test: replacing "75 Degree AC" + "Houston" with another business + city should break the meaning
- At least one Houston-specific local detail (humidity, heat season, housing stock, weather, neighborhood)
- At least one expert/trust signal only a real HVAC tech would write

**Approved description (725 chars, passes all rules):**

```
Since 2016, 75 Degree AC has handled residential and commercial HVAC across the Houston area. We take 24/7 emergency calls and same-day AC repair in Houston, Katy, Sugar Land, Cypress, The Woodlands, Pearland, Pasadena, Missouri City, and Richmond. TACLA-licensed, fully insured, and stocked to finish most repairs on the first visit. We service Carrier, Trane, Lennox, Goodman, Rheem, American Standard, and Daikin. Work covers AC repair, installation, and replacement, furnace and heat pump service, mini-splits, duct cleaning, thermostat install, UV light, HEPA filtration, indoor air quality testing, and commercial HVAC maintenance. Houston humidity is hard on equipment, so our techs explain what they found before starting any work.
```

**Structure template (replicate for any future rewrite):**
1. **Sentence 1 (hook + category + location + tenure)** — "Since [year], [business] has handled [core service] across [metro]."
2. **Sentence 2 (availability + service areas)** — emergency/same-day + city list
3. **Sentence 3 (licensing + trust)** — license + insurance + a differentiator
4. **Sentence 4 (brands)** — major brands serviced
5. **Sentence 5 (services covered)** — comma list of services
6. **Sentence 6 (local expert signal)** — Houston-specific insight that builds trust

**Rejection recovery:**
If Google rejects a description, check in order: (1) phone number, (2) URL, (3) pricing/offer language, (4) superlative without proof, (5) over 750 chars, (6) emoji. Fix the single most likely trigger first, resubmit. Average approval time is 10 min; worst case 30 days.

---

## Section 2: NAP Consistency

NAP must be **character-for-character identical** across all platforms.

**Canonical NAP:**
- Name: `75 Degree AC` (not "75 Degree A/C", not "75° AC", not "75 Degrees AC")
- Address: `4800 W 34th St, Ste C50F, Houston, TX 77092`
- Phone: `(713) 598-2737` (not "713-598-2737", not "+17135982737")

### Priority Citation Directories (audit in this order)

| Tier | Directory | Impact | Check URL |
|------|-----------|--------|-----------|
| 1 | Google Business Profile | Critical | business.google.com |
| 1 | Apple Maps | Critical | mapsconnect.apple.com |
| 1 | Bing Places | Critical | bingplaces.com |
| 1 | Yelp | Critical | biz.yelp.com |
| 1 | Facebook | Critical | facebook.com/biz |
| 1 | BBB | High | bbb.org |
| 2 | HomeAdvisor/Angi | High | angi.com |
| 2 | Thumbtack | High | thumbtack.com |
| 2 | Houzz | High | houzz.com |
| 2 | Nextdoor | High | nextdoor.com |
| 2 | Yellow Pages | Medium | yellowpages.com |
| 2 | Superpages | Medium | superpages.com |
| 3 | Manta | Medium | manta.com |
| 3 | Foursquare | Medium | foursquare.com |
| 3 | Citysearch | Low | citysearch.com |
| 3 | 2FindLocal | Low | 2findlocal.com |
| Industry | ACCA directory | High | acca.com/contractor-locator |
| Industry | Texas HVAC Association | High | Search THVACA |
| Industry | Carrier dealer locator | High | carrier.com/find-a-dealer |
| Industry | Lennox dealer locator | High | lennox.com/dealer-finder |
| Industry | Goodman dealer locator | Medium | goodmanmfg.com |

**NAP Discrepancy Severity:**
- Different phone number = CRITICAL (fix immediately)
- Different address format = HIGH (fix within 7 days)
- Different name variant = HIGH (fix within 7 days)
- Missing listing = MEDIUM (create within 30 days)

---

## Section 3: Review Strategy

### Targets
- Month 3: 60+ reviews, 4.8+ rating
- Month 6: 120+ reviews, 4.9+ rating
- Velocity: 8–15 new reviews per month

### Review Generation System

**Post-Service SMS Template:**
```
Hi [Name]! Thanks for choosing 75 Degree AC for your [service] today. 
Your technician [Name] hopes everything went well! 
If you have 60 seconds, a Google review would mean the world to us: 
[short.link/75-degree-review]
— 75 Degree AC (713) 598-2737
```
Send within 2 hours of job completion. Respond to every review within 24 hours.

**Review Request Cards:**
- Leave physical card after every job
- Include QR code linking to Google review form
- Text: "How'd we do? Leave us a quick review" with QR code

### Review Response Framework

**5-star response (rotate 3 templates):**
```
Template A: "Thank you [Name]! Our technicians work hard to deliver same-day 
service that actually fixes the problem on the first visit. We appreciate you 
trusting 75 Degree AC with your [service] — and we'll be here any time you 
need us. — The 75 Degree AC Team"
```
```
Template B: "We love hearing this, [Name]! Houston summers are no joke, so 
we aim to get to you fast and get it fixed right. Thanks for the kind words 
and for choosing us. We're always a call away: (713) 598-2737"
```

**Negative review response framework:**
1. Thank them for the feedback (never defensive)
2. Acknowledge the specific issue
3. Take it offline: "Please call us at (713) 598-2737 so we can make this right"
4. Never offer refunds publicly

---

## Section 4: Local Landing Pages

### URL Structure
- Service + neighborhood: `/ac-repair-montrose-tx/`
- Service + suburb: `/ac-repair-katy-tx/`
- General: `/hvac-contractor-[neighborhood]-tx/`

### Location Page Quality Checklist

| Element | Requirement |
|---------|-------------|
| Unique content | NOT a template swap — mention local landmarks, streets, context |
| H1 | `[Service] in [City/Neighborhood], TX` |
| Zip code | In body text and LocalBusiness schema |
| Local context | Reference Houston weather, neighborhood, local context |
| Service area | List adjacent neighborhoods served |
| Schema | LocalBusiness + Service + FAQPage + BreadcrumbList |
| Internal links | Link to main service page + homepage + 1–2 neighbor location pages |

### Priority Location Pages to Build (from service-areas.md)

**Currently live (21 pages):** verify they have unique content (not template)
**To build next (high-value suburbs):**
1. /ac-repair-katy-tx/ — Katy is a top suburb, high HVAC search volume
2. /ac-repair-sugar-land-tx/
3. /ac-repair-the-woodlands-tx/
4. /ac-repair-cypress-tx/
5. /ac-repair-spring-tx/

---

## Section 5: Local Pack Ranking Signals (2026 Playbook)

Google's three pillars (official): **Relevance · Distance · Prominence**. 2026 added a fourth de facto pillar: **Engagement (dynamic profile)**.

### 1. Proximity / Distance (~55% on mobile — cannot directly control)
The GBP pin (4800 W 34th St, Houston, TX 77092) is central Houston — good radial coverage. You can indirectly widen reach by:
- Setting accurate Service Area (all Houston neighborhoods + suburbs from `service-areas.md`)
- Building city-specific landing pages that Google uses to score relevance for distant queries
- Consistent NAP + address verified (unverified addresses get proximity-penalized)

### 2. Relevance — Categories + Services (#1 controllable factor)

**Primary category rule:** "This business IS a ___" (not "HAS a ___").
- Primary: **HVAC Contractor**
- Secondary (up to 9): Air Conditioning Contractor, Heating Contractor, Air Duct Cleaning Service, Furnace Repair Service, Heat Pump Contractor, Commercial Refrigerator Supplier (if commercial), Air Filter Supplier, Mechanical Contractor, Air Conditioning Repair Service

**Selection criteria for each secondary:** (1) profitability for 75 Degree AC, (2) search volume of related query, (3) whether competitors use it. Every secondary should map to something a customer actually books.

**Services menu:** must mirror `services-list.md` exactly. Name each service the way customers search (not internal names):
- "Emergency AC Repair" ✓ (not "After-Hours HVAC Support")
- "AC Installation" ✓
- "Furnace Tune-Up" ✓
- Each service can include a 300-char description with naturally placed keywords. Use this room — services descriptions influence relevance scoring.

### 3. Prominence — Reviews, Links, Citations

**Reviews are the single largest prominence input for local HVAC.** See review-strategy skill for generation/response playbook. 2026 weighting update:
- **Velocity + recency now outweigh total count.** 5 fresh reviews in the last 30 days beats 200 stale reviews.
- **Owner response rate 80%+** triggers measurable ranking lift. Respond within 24 hours.
- **Review keywords reinforce relevance.** After every job, prompt reviewers for specific mentions ("Was this emergency AC repair?", "Which neighborhood?"). Natural mentions of "Katy", "Heights", "emergency", "same-day" in review text feed relevance scoring for those queries.
- **Never solicit biased reviews, gate reviews, or incentivize.** Google's review spam detection flags coordinated patterns.

**Links:** local authority (Houston Chronicle mentions, Houston business associations), manufacturer dealer locators (Carrier, Trane, Lennox), BBB profile.

**Citations:** see Section 2 — 35+ tier-1/2/3 directories with exact-match NAP.

### 4. Engagement / Dynamic Profile (climbing fastest in 2026)

Post-March 2026 core update, Google measures profile activity as an independent signal. "Static but complete" underperforms "active but incomplete". Drivers:

| Signal | How to activate |
|--------|----------------|
| GBP posts | 2–3/week (What's New, Offer, Event). Sterling Sky 441-keyword study found posts don't directly move rank — but they feed the completeness score and drive clicks/calls which DO move rank. |
| Photo freshness | Upload 3–5 new photos/month (jobs, team, vans, before/after). Staleness demotes. |
| ~~Q&A~~ | **Removed by Google** (API off 2025-11-03, public section phased out from 2025-12-03) — now Gemini "Ask about this place", which synthesizes from profile fields + reviews + posts + website. Nothing to seed. Route the effort to on-site FAQ + `FAQPage` schema, post bodies, service descriptions, and review replies. |
| Booking interactions | Appointment URL set + actually clicked = engagement signal. |
| Click-to-call rate | Phone is the primary 75 Degree AC conversion. High call rate = relevance confirmation. |
| Direction requests | Signal that local searchers find you. |
| Hours accuracy + special hours | Set every holiday (Thanksgiving, Christmas, July 4, etc.). Wrong hours = ranking penalty flag. |

**Photo ranking note:** Joel Headley (ex-Google) confirmed geotagging photos does NOT affect ranking — Google strips EXIF/GPS on upload. Photo *volume*, *freshness*, and *engagement* (views) matter; geotagging does not. Do not waste time on geotagging for ranking purposes (project still geo-tags per HQ Coords memory for non-ranking consistency).

### 5. On-Page Website Signals (linked from GBP)

- Website URL on GBP must point to a page that reinforces the category — the homepage needs "HVAC Contractor" + "Houston" above the fold.
- City-specific landing pages (Katy, Sugar Land, etc.) linked from services menu increase proximity-query relevance for those outlying cities.
- LocalBusiness / HVACBusiness schema on every page (see schema-markup skill).
- Fast mobile load (Core Web Vitals pass) correlates with local pack retention.

### 6. UTM Tracking on GBP Links (measurement, not ranking)

Without UTMs, GBP traffic shows as "direct" or "organic" in GA4. Add consistently:
- Website button: `?utm_source=gbp&utm_medium=organic&utm_campaign=profile-main`
- Appointment button: `?utm_source=gbp&utm_medium=organic&utm_campaign=profile-booking`
- Each post link: `?utm_source=gbp&utm_medium=post&utm_campaign=[post-topic]`
- Each service link: `?utm_source=gbp&utm_medium=service&utm_campaign=[service-name]`

This is how we'll attribute conversions back to GBP vs. organic search in monthly reports.

---

## Output Files

- GBP audit: `04-gmb/gbp-audit-[date].md`
- Citation tracker: `04-gmb/citation-tracker.md`
- GBP description + posts: `04-gmb/gbp-content-[date].md`
- Canonical answer bank: `04-gmb/answer-bank.md` (on-site FAQ + post bodies; GBP Q&A no longer exists)
- Review templates: `04-gmb/review-templates.md`
- Location page content: `07-landing-pages/content/[slug]-content.md`
