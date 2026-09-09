---
name: seo-monitoring
description: >
  SEO monitoring plan for 75 Degree AC — weekly, monthly, and quarterly audit cadences for
  rankings, traffic, GBP, technical health, AI visibility, reviews, and competitors.
  Activates when planning post-launch monitoring, tracking rankings, or running SEO reports.
version: 1.0.0
client: 75 Degree AC
---

# SEO Monitoring Plan — 75 Degree AC

Complete operational playbook for ongoing SEO monitoring. What to check, when, what's normal, and what triggers action.

---

## Business Context

**Website**: https://75degreeac.com
**Phone**: (713) 598-2737
**Current baseline (April 2026)**: 178K monthly impressions, 159 clicks, 0.09% CTR
**21 indexed pages, 86 noindex pages (fix in progress)**
**Primary KPIs**: GBP calls, organic traffic, Google reviews, organic rankings

**KPI Targets:**
- Month 3: 1,000+ organic sessions/month, 80+ GBP calls/month, 60+ reviews
- Month 6: 5,000+ organic sessions/month, 250+ GBP calls/month, 120+ reviews

---

## Week 1 Post-Noindex-Fix Checks (One-Time)

These run immediately after the noindex fix workflow is complete.

### Indexing Verification

| Check | Tool | Expected Result | Action if Failed |
|-------|------|-----------------|------------------|
| Previously noindex pages now crawlable | GSC > Pages | Moved from "noindex" to indexed or "discovered" | Re-verify noindex tags removed, resubmit sitemap |
| All Priority 1 service pages indexed | `site:75degreeac.com/ac-repair` etc. | Service hubs appearing in Google | Submit via URL Inspection in GSC |
| Sitemap submitted | GSC > Sitemaps | Status: Success | Fix sitemap errors, resubmit |
| No new errors | GSC > Pages > Not indexed | Only intentionally excluded pages | Fix any accidental noindex/404s |

### Analytics Verification

| Check | Tool | Expected Result | Action if Failed |
|-------|------|-----------------|------------------|
| GA4 receiving data | GA4 Realtime report | Live users showing | Check GTM/GA4 tag installation |
| phone_click events firing | GA4 > Events | phone_click appearing | Debug with GTM Preview |
| Conversion events marked | GA4 > Admin > Conversions | phone_click + form_submit = conversions | Mark manually in GA4 |
| CallRail tracking numbers active | CallRail dashboard | Calls attributed by source | Verify tracking code on site |

---

## Weekly Monitoring (Every Monday — 15 minutes)

### Traffic & Conversions

| Metric | Source | Healthy | Alert Trigger |
|--------|--------|---------|---------------|
| Organic sessions (7-day) | GA4 | Week-over-week growth | >20% drop |
| Phone clicks (7-day) | GA4 phone_click event | 2-4% of mobile sessions | >50% drop from previous week |
| Form submissions (7-day) | GA4 form_submit | Growing toward weekly target | Zero submissions in a week |
| Emergency page views | GA4 | Consistent; spikes in summer | Sudden drop in summer = check indexing |
| Top 5 landing pages | GA4 | Stable or growing | Any page drops >30% |

### Technical Health

| Check | Source | Expected | Alert Trigger |
|-------|--------|----------|---------------|
| GSC coverage errors | GSC > Pages | Zero new "Error" status pages | Any new Error |
| Manual actions | GSC > Security & Manual Actions | Always empty | Any manual action = respond same day |
| 404 spikes | GSC > Pages > Not found | Stable or decreasing | >5 new 404s in a week |

### Reviews

| Check | Source | Expected | Alert Trigger |
|-------|--------|----------|---------------|
| New Google reviews | GBP dashboard | 2-4 per week (on target weeks) | Zero reviews in 2 weeks |
| New negative reviews | GBP dashboard | Rare | Any 1-2 star review → respond within 24 hours |
| Review rating | GBP dashboard | Trending toward 4.8+ | Drops below 4.5 |

---

## Monthly Monitoring (1st of Each Month — 60 minutes)

### Keyword Rankings

Track these primary keywords monthly via GSC Performance:

| Keyword | Target Position | Month 1 Baseline | Month 3 Target | Month 6 Target |
|---------|----------------|-----------------|----------------|----------------|
| AC repair Houston TX | Top 5 | [GSC avg position] | Top 10 | Top 5 |
| emergency AC repair Houston | Top 5 | [GSC avg position] | Top 10 | Top 5 |
| HVAC contractor Houston | Top 10 | [GSC avg position] | Top 10 | Top 5 |
| AC installation Houston | Top 10 | [GSC avg position] | Top 20 | Top 10 |
| AC tune up Houston | Top 10 | [GSC avg position] | Top 20 | Top 10 |
| furnace repair Houston | Top 10 | [GSC avg position] | Top 20 | Top 10 |
| AC repair [top suburb] | Top 5 | [GSC avg position] | Top 10 | Top 5 |

**Alert**: Any top-10 keyword drops to page 2 → investigate immediately.

### Content Performance

| Metric | Source | Analysis | Action |
|--------|--------|----------|--------|
| Traffic per service page | GA4 | Which services drive traffic? | Double down on performing topics |
| Blog post traffic | GA4 | Which topics get clicks? | Expand winning topic clusters |
| Service page conversion rate | GA4 | Target: 3-5% form submit or call | Below 2% → review CTA placement, mobile UX |
| Emergency page performance | GA4 | Should be top converting page | If underperforming → check mobile load speed |
| Location page traffic | GA4 | Which cities drive most traffic? | Prioritize location page optimization |

### Technical Deep Check

| Check | Source | Expected | Action |
|-------|--------|----------|--------|
| Core Web Vitals (field data) | GSC > Core Web Vitals | All URLs "Good" | Optimize failing URLs |
| PageSpeed score | PageSpeed Insights on 3 pages | 90+ | Address PSI recommendations |
| Mobile usability | GSC > Mobile Usability | No errors | Fix any mobile issues |
| Internal broken links | Manual check or Screaming Frog | Zero | Fix or redirect |
| Schema validation | Google Rich Results Test | All schemas valid | Fix schema errors |
| New referring domains | GSC > Links | Growing month-over-month | If stagnant → increase link building |

### GBP Performance

| Metric | Source | Analysis | Action |
|--------|--------|----------|--------|
| Profile views | GBP Insights | Trending up | If flat → add photos, post weekly |
| Discovery searches | GBP Insights | Growing = more people finding via category | Optimize GBP categories |
| Calls from GBP | GBP Insights + CallRail | Target: 80/month by M3 | If below → post more, add Q&A |
| Direction requests | GBP Insights | Trending up | Note locations driving directions |
| New GBP posts | GBP dashboard | 2+ posts this month | Schedule via gbp-posting skill |
| Q&A additions | GBP dashboard | Add 2-3 new Q&A seeds monthly | Use 20 pre-written Q&A seeds |
| Photos added | GBP dashboard | 4+ new photos per month | Follow photo calendar in gbp-posting skill |

### AI Visibility Check

| Platform | Query | What to Look For | Action |
|---------|-------|-----------------|--------|
| ChatGPT | "What are the best HVAC companies in Houston TX?" | Is 75 Degree AC mentioned? | Note vs baseline; build entity signals |
| Perplexity | "AC repair Houston Texas" | Is site cited? What sources? | If competitors cited but not us → fix content format |
| Google AI Overview | "AC repair Houston" | Does AI Overview appear? Are we cited? | If in overview → identify what page triggered it |
| Google | "75 Degree AC" | Knowledge Panel showing? | Note changes |

---

## Quarterly Monitoring (Every 3 Months — 3 hours)

### Competitor Re-Analysis

| Task | Method | Output |
|------|--------|--------|
| Re-run competitor rankings | Search top 20 target keywords | Who's moved up/down? New competitors? |
| New competitor pages | Check top competitors for new service/location pages | New gaps to fill? |
| Competitor review growth | Check review count for top 5 competitors | Are we keeping pace with velocity? |
| Competitor backlinks | Ahrefs Webmaster Tools (free) | New link opportunities from their profile? |
| Competitor GBP activity | Check photos, posts, Q&A | What are they doing that's working? |

### Topical Map Expansion

| Task | Method | Output |
|------|--------|--------|
| New keyword opportunities | GSC Performance → queries with growing impressions | New keywords to target |
| New PAA questions | Re-search top 20 queries, document new PAA | New FAQ content or blog posts |
| Seasonal content planning | Review next quarter's seasonal needs | Content calendar updates |
| New services or areas | Business feedback | New pages to add |

### Technical Re-Audit

| Task | Source | Expected |
|------|--------|----------|
| Full Lighthouse audit on key pages | Lighthouse | 90+ all categories |
| Schema re-validation | Rich Results Test | All valid, no new warnings |
| Sitemap completeness | Compare sitemap.xml to live pages | All live pages in sitemap |
| Redirect audit | Check for chains | No chains >1 hop |
| Citation consistency audit | Manual check top 10 citations | NAP matches exactly on all |

---

## Alert Playbooks

### Critical Alerts (Respond Same Day)

| Alert | Detection | Response |
|-------|-----------|----------|
| Google manual action | GSC notification email | Read action, fix immediately, submit reconsideration |
| Site goes down | GA4 zero realtime users | Check hosting, DNS, SSL — contact host |
| Major ranking drop (primary keyword > 10 positions) | Weekly keyword check | Check for algorithm update, technical issues, content changes |
| 1-2 star review posted | GBP notification | Respond within 24 hours per review-strategy templates |
| Phone call volume drops >50% in a day | CallRail | Check phone number, tracking code, GBP listing |

### Warning Alerts (Respond Within 1 Week)

| Alert | Detection | Response |
|-------|-----------|----------|
| Organic traffic down >20% week-over-week | Weekly traffic check | Check GSC for crawl errors, algorithm updates |
| Conversion rate drops below 2% | Weekly conversion check | Check form functionality, CTA visibility on mobile |
| New 404 errors | Weekly GSC check | Identify broken URLs, add 301 redirects |
| Core Web Vitals regression | Monthly technical check | Fix failing metric per technical-seo skill |
| Review rating drops below 4.5 | Weekly review check | Increase review generation, investigate service issues |

### Information Alerts (Note for Next Monthly Review)

| Alert | Detection | Response |
|-------|-----------|----------|
| New competitor enters top 10 | Monthly keyword check | Analyze their content, GBP, and strategy |
| New PAA questions appear | Monthly check | Plan content to answer them |
| AI tool starts citing competitor | Monthly AI check | Analyze their content format, update ours |
| New referring domain | Monthly link check | Verify quality, note for link building strategy |

---

## Reporting Output Files

Monthly report: `08-reporting/monthly/[YYYY-MM]/monthly-report-[YYYY-MM].md`
Quarterly report: `08-reporting/monthly/[YYYY-MM]/quarterly-report-[YYYY-Q#].md` (use the closing month of the quarter)
Keyword tracker: `08-reporting/trackers/keyword-tracker.md` (rolling)
Review tracker: `08-reporting/trackers/review-tracker.md` (rolling)

---

## Tools Stack

### Free (Required)

| Tool | Purpose |
|------|---------|
| Google Search Console | Rankings, indexing, technical health, links |
| Google Analytics 4 | Traffic, conversions, user behavior |
| Google Business Profile Insights | GBP calls, views, searches, actions |
| Google PageSpeed Insights | Core Web Vitals lab testing |
| Google Rich Results Test | Schema validation |
| ChatGPT / Perplexity (free tier) | AI visibility monitoring |

### Current Project Tools (Already Listed)

| Tool | Purpose |
|------|---------|
| SEMrush | Keyword rankings, competitor analysis |
| Ahrefs | Backlink monitoring, site audit |
| BrightLocal | Local rank tracking, citation monitoring |
| CallRail | Phone call tracking with source attribution |

---

## Quality Checklist

- [ ] Week 1 post-fix checks cover indexing, analytics, and GBP
- [ ] Weekly monitoring takes <15 minutes with checklist
- [ ] Monthly monitoring covers rankings, content, technical, GBP, and AI visibility
- [ ] Quarterly monitoring includes full competitor re-analysis
- [ ] Every check has: metric, source, expected result, alert trigger
- [ ] Alert playbooks cover critical (same-day), warning (1-week), and informational responses
- [ ] AI visibility monitoring included monthly
- [ ] Houston HVAC seasonality factored into expected performance (summer = high, winter = low AC)
