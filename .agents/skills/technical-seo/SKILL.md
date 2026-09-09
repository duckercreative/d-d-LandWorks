---
name: technical-seo
description: >
  Technical SEO methodology for 75 Degree AC — crawlability, indexing, noindex fixes,
  sitemap, redirects, schema validation, Core Web Vitals, and AI crawler access.
  Activates when auditing technical issues, verifying fixes, or checking site health.
version: 1.0.0
client: 75 Degree AC
---

# Technical SEO — 75 Degree AC

## Critical Context

75 Degree AC has **86 pages blocked by noindex** (CRITICAL). Google can only index 21 of 140 sitemap URLs. This is the single highest-impact fix in the entire SEO plan. Until these are resolved, no amount of content or link building will unlock the site's true potential.

**Current State:**
- Indexed: 21 pages (target: 50+ within 60 days)
- Noindex blocked: 86 pages
- Crawled but not indexed: 30 pages
- Sitemap URLs: 140 (contains noindex + redirect pages — needs cleanup)

---

## Input Files

- `03-gsc/data/coverage_summary.json` — current index coverage
- `03-gsc/data/url-inspection.csv` — per-URL GSC inspection results
- `03-gsc/data/full_coverage.csv` — full coverage data
- `03-gsc/data/seo-solutions.md` — Issues 1, 7 (noindex + sitemap)
- `02-site-architecture/page-tracker.csv` — page status tracker

---

## Section 1: Crawlability & Indexing

### robots.txt Checklist

Fetch https://75degreeac.com/robots.txt and verify:

```
Required entries:
User-agent: *
Allow: /

Sitemap: https://75degreeac.com/sitemap_index.xml
```

**AI Crawlers to explicitly ALLOW (CRITICAL for AI visibility):**
```
User-agent: GPTBot
Allow: /

User-agent: OAI-SearchBot
Allow: /

User-agent: ChatGPT-User
Allow: /

User-agent: ClaudeBot
Allow: /

User-agent: PerplexityBot
Allow: /

User-agent: Applebot
Allow: /
```

If any of these are in a `Disallow` block — that is CRITICAL — fix immediately.

### Sitemap Standards

Current sitemap: https://75degreeac.com/sitemap_index.xml

**Problem:** Contains 86 noindex pages and pages being deleted. Must be cleaned.

**Target sitemap contents (21 currently indexed pages + new pages as they're indexed):**
Only include pages with status = PASS (indexed) in GSC Coverage report.
Use Rank Math: Sitemap Settings → Exclude individual pages as they're deleted/redirected.

**After cleanup, resubmit:**
GSC → Indexing → Sitemaps → Delete old → Add: https://75degreeac.com/sitemap_index.xml

### Redirect Quality

52 redirects being set up (37 + 15). All must be:
- 301 Permanent (not 302 temporary)
- Direct (not chained: A→B→C should be A→C)
- No redirect loops

**Verify with:** Check each redirect URL returns HTTP 301 status.
Tool: httpstatus.io (free) or Screaming Frog

### Canonical Tags

- Every page should have a self-referencing canonical (Rank Math adds automatically)
- Canonical must NOT point to a different page unless intentional
- Canonical must NOT conflict with noindex (if noindexed AND canonical = bad)
- Cannibalization clusters: set canonical on secondary pages pointing to primary

---

## Section 2: HTTPS & Security

| Check | Expected | Fix if Failing |
|-------|---------|----------------|
| HTTPS valid | SSL cert valid, no mixed content | Renew cert, fix mixed content URLs |
| HTTP → HTTPS redirect | HTTP URLs 301 to HTTPS | Fix in .htaccess or hosting settings |
| HSTS header | `Strict-Transport-Security` present | Add via hosting/CDN |
| Security headers | X-Frame-Options, X-Content-Type | Add via hosting/CDN/Cloudflare |

**Check:** WebFetch https://75degreeac.com and inspect response headers.

---

## Section 3: Core Web Vitals

**Targets (2025 Google thresholds):**
| Metric | Good | Needs Improvement | Poor |
|--------|------|-------------------|------|
| LCP (Largest Contentful Paint) | ≤2.5s | 2.5–4.0s | >4.0s |
| INP (Interaction to Next Paint) | ≤200ms | 200–500ms | >500ms |
| CLS (Cumulative Layout Shift) | ≤0.1 | 0.1–0.25 | >0.25 |

**Check:** Google PageSpeed Insights → https://pagespeed.web.dev → enter 75degreeac.com

**Common HVAC site CWV issues:**
- LCP: large hero image not lazy loaded, no WebP format
- CLS: Elementor widgets loading without reserved space
- INP: heavy third-party scripts (chat widgets, tracking pixels)

**WordPress/Elementor optimizations:**
1. Use Elementor + image lazy loading enabled
2. Use WebP images (Rank Math or ShortPixel for conversion)
3. Defer non-critical JS (WP Rocket or LiteSpeed Cache)
4. Set image dimensions in HTML to prevent CLS
5. Move chat/analytics scripts to footer

---

## Section 4: Schema Markup Validation

### Required Schema per Page Type

**Homepage:**
- Organization (with sameAs array to all social/directory profiles)
- WebSite with SearchAction
- BreadcrumbList (Home)

**Service Pages:**
- LocalBusiness > **HVACContractor** (not generic LocalBusiness)
- Service (with name, provider, areaServed)
- FAQPage (from FAQ section)
- BreadcrumbList
- AggregateRating (when reviews are available)

**Location Pages:**
- LocalBusiness > HVACContractor (with location-specific area)
- Service
- BreadcrumbList
- FAQPage

**Blog/Guide Pages:**
- Article (datePublished, dateModified, author)
- BreadcrumbList
- FAQPage (if FAQ section)

### Schema Validation

After adding schema: validate at https://validator.schema.org or Google Rich Results Test.
Flag any errors (red) — fix before publishing.
Warnings (yellow) — fix when possible but not blocking.

### HVACContractor @type (Important)

NEVER use generic `"@type": "LocalBusiness"` for this client.
Always use: `"@type": ["HVACContractor", "LocalBusiness"]`

This specific @type is a known entity in Google's Knowledge Graph for HVAC businesses.

---

## Section 5: llms.txt

Check: https://75degreeac.com/llms.txt

If missing, create at site root. Draft:
```
# 75 Degree AC
> HVAC contractor in Houston, TX — AC repair, installation, maintenance, and emergency service.

## Services
- AC Repair: Same-day repair for all major brands in Houston, TX
- Emergency HVAC: 24/7 emergency AC and heating repair
- AC Installation: New HVAC systems for Houston homes and businesses
- AC Maintenance: Tune-ups and preventative maintenance
- Heating Repair: Furnace and heat pump repair
- Commercial HVAC: Commercial AC and HVAC service

## Service Area
- Houston, TX and Greater Houston including Katy, Sugar Land, The Woodlands, Cypress, Spring

## Contact
- Phone: (713) 598-2737
- Address: 4800 W 34th St, Ste C50F, Houston, TX 77092
- Website: https://75degreeac.com

## License
- TACLA licensed, fully insured
```

Place at: https://75degreeac.com/llms.txt (upload via FTP or file manager in hosting)

---

## Section 6: IndexNow

IndexNow allows instant URL submission to Bing/Copilot.
Check: https://75degreeac.com/.well-known/indexnow-key.txt

If missing, implement:
1. Get key from Bing Webmaster Tools (bingwebmaster.com)
2. Upload key file to site root
3. Submit URLs via IndexNow API after publishing/updating pages

---

## Noindex Fix Verification Process

After removing noindex from any page:
1. Rank Math → Advanced → Robots Meta → confirm "No Index" is unchecked
2. View page source → confirm `<meta name="robots" content="noindex">` is gone
3. GSC → URL Inspection → [URL] → check "Coverage" section
4. Request Indexing
5. Check back in 3–7 days — should appear in Coverage as "Indexed"

**Track progress in:** `02-site-architecture/page-tracker.csv` — update "Status" column

---

## Output Files

Technical findings: `03-gsc/data/technical-findings-[date].md`
CWV report: `03-gsc/data/cwv-report-[date].md`
Schema files: `02-site-architecture/schema/[slug]-schema.md`
llms.txt: `02-site-architecture/llms-txt-draft.md`
