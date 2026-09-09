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

### SSR vs CSR for AI Crawlers (Critical)

AI crawlers — including PerplexityBot, OAI-SearchBot, ClaudeBot, MistralAI-User — **do not render JavaScript**. They download the raw HTML response and extract whatever text is in that initial payload. SSR content is indexed ~4x faster by AI crawlers than CSR content.

**WordPress + Elementor (75 Degree AC's stack) is SSR by default** — the page HTML is rendered server-side. But specific patterns break this:

| Pattern | Risk | Fix |
|---|---|---|
| Elementor popups containing critical content | AI-invisible until trigger | Move content to inline page body |
| AJAX-loaded service descriptions | Not in initial HTML | Render server-side |
| Dynamic pricing widgets (third-party JS) | Phone/price not in HTML | Hardcode price ranges in HTML |
| Chat widget injecting phone via JS | Phone in JS only | Phone must be in static HTML too |
| React/Vue widgets embedded in Elementor | Hidden from crawlers | Replace or render to HTML |
| Tabbed content where only active tab is in HTML | Hidden tabs invisible | Render all tabs in source, hide via CSS |

**Verification command:**
```bash
curl -s https://75degreeac.com/ac-repair-houston-tx/ | grep -E "(713\) 598-2737|TACLA|same-day"
```
If the phone number, license, and key service phrases all appear in the curl output, the page is AI-readable. If grep returns empty, the content is JS-rendered and invisible to AI crawlers.

Run this curl check on every service page during the technical audit.

### Content Freshness Signals

AI systems weight recency heavily — 76.4% of ChatGPT's most-cited pages were updated within 30 days (Onely 2025). Three layers must be in sync:

1. **Schema `dateModified`** — must update on every revision
2. **HTTP `Last-Modified` header** — should match (WordPress emits this automatically; verify via `curl -I`)
3. **Visible "Last Updated: [Month Year]" timestamp** — must appear in page body

**Refresh cadence:**
- Pricing pages: 30 days max
- Service / location pages: 90 days max
- Blog / evergreen: 120-180 days

Tracked in `02-site-architecture/page-refresh-log.csv`. Owner: content-strategy skill (full protocol there).

### X-Robots-Tag (Server-Level Robots Directives)

The `X-Robots-Tag` HTTP response header is the server-level equivalent of the `<meta name="robots">` tag. Use it when:
- Indexing rules need to apply to non-HTML resources (PDFs, images)
- A meta tag would require editing every page's HTML
- You want to control indexing without giving content authors access to a meta-robots field

**Example (block PDF assets from indexing):**
```
# .htaccess
<FilesMatch "\.pdf$">
  Header set X-Robots-Tag "noindex, nofollow"
</FilesMatch>
```

**Verification:**
```bash
curl -I https://75degreeac.com/some-page/ | grep -i "x-robots"
```

Same directives as meta robots: `noindex`, `nofollow`, `noarchive`, `nosnippet`, plus AI-specific: `noai`, `noimageai` (proposed, limited adoption).

**Important:** If both meta robots and X-Robots-Tag are present, **the most restrictive wins**. Audit for accidental conflicts when fixing the 86 noindex pages — if a page is fixed at the meta level but X-Robots-Tag still says noindex, the page stays blocked.

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
- LocalBusiness > **HVACBusiness** (not generic LocalBusiness)
- Service (with name, provider, areaServed)
- FAQPage (from FAQ section)
- BreadcrumbList
- AggregateRating (when reviews are available)

**Location Pages:**
- LocalBusiness > HVACBusiness (with location-specific area)
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

### HVACBusiness @type (Important)

NEVER use generic `"@type": "LocalBusiness"` for this client.
Always use: `"@type": ["HVACBusiness", "LocalBusiness"]`

This specific @type is a known entity in Google's Knowledge Graph for HVAC businesses.

---

## Section 5: llms.txt and llms-full.txt

The llms.txt spec (Answer.AI, 2024) defines two complementary files:

| File | Purpose | Size |
|---|---|---|
| `/llms.txt` | Index — short descriptions and links to key pages | ~1-3 KB |
| `/llms-full.txt` | Comprehensive — all site content concatenated as Markdown | 100s of KB+ (Anthropic's is 481K tokens) |

Both should exist. Both should be referenced in `<head>`:
```html
<link rel="llms-txt" href="/llms.txt">
<link rel="llms-full-txt" href="/llms-full.txt">
```

**Reality check:** No major AI platform has officially confirmed llms.txt as a ranking signal as of May 2026 (per Google's John Mueller). Treat as future-proofing — costs nothing to deploy and may activate as Anthropic/Microsoft commit. Full strategic context: `ai-visibility/SKILL.md` Section 9.

### llms.txt (index file)

Check: https://75degreeac.com/llms.txt — if missing, create at site root. Draft:
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
- TACLA licensed (TACLA72152E), fully insured
```

Place at: https://75degreeac.com/llms.txt (upload via FTP or hosting file manager).

### llms-full.txt (comprehensive content file)

Check: https://75degreeac.com/llms-full.txt — likely missing. Build it from WordPress.

**Build order (concatenate as Markdown):**
1. Business overview block (NAP, license, year founded, brands serviced)
2. All service pages — full body content
3. All location pages — full body content
4. FAQ corpus — every question + answer site-wide
5. Pricing data — every published price range
6. Contact block

**Build script:** `02-site-architecture/build-llms-full.py`
- Pulls page content via WP REST API (`/wp-json/wp/v2/pages?per_page=100`)
- Strips theme chrome, navigation, sidebars
- Converts HTML to clean Markdown
- Writes to `02-site-architecture/llms-full.txt`
- Manual upload to site root (or automate via SSH per `project_wordpress.md`)

**Refresh cadence:** Regenerate after any service/location page revision. Schedule monthly even without changes.

---

## Section 6: IndexNow

IndexNow allows instant URL submission to Bing/Copilot.
Check: https://75degreeac.com/.well-known/indexnow-key.txt

If missing, implement:
1. Get key from Bing Webmaster Tools (bingwebmaster.com)
2. Upload key file to site root
3. Submit URLs via IndexNow API after publishing/updating pages

---

## Section 7: Emerging AI Control Files (2025-2026)

Three new mechanisms for declaring AI access intent have emerged. Each has different adoption status — implement, monitor, or skip accordingly.

### ai.txt (Spawning.ai) — Monitor

Separate file (proposed by Spawning.ai) for declaring **training-data permissions**, distinct from access control. Where robots.txt says "may you fetch," ai.txt says "may you train on."

Location: `/ai.txt` at site root.

Example:
```
User-Agent: *
Disallow: train
Disallow: aggregate

User-Agent: GPTBot
Allow: train
```

**Status:** Limited adoption. Not honored by major AI providers as of May 2026. Add as awareness only. Source: https://github.com/menro/ai.txt

### robots.json — Future

Proposed machine-readable JSON replacement for robots.txt. Not yet adopted by major crawlers. **Skip until adoption confirmed.**

### Cloudflare Content Signals Policy — Future (requires Cloudflare)

When a site is on Cloudflare, you can declare per-content-type intent within robots.txt:

```
# Content signals (Cloudflare-recognized)
Content-Signal: search
Content-Signal: ai-input, allow=yes
Content-Signal: ai-train, allow=no
```

Three values:
- `search` — index for traditional search results
- `ai-input` — allow live use as AI answer input (citations)
- `ai-train` — allow training data harvesting

**Status:** 75 Degree AC is **not on Cloudflare**. If we migrate, add this immediately. Source: https://developers.cloudflare.com/ai-crawl-control/

### Mapping by Status

| File | Implementation | Status |
|---|---|---|
| `/robots.txt` | ✅ Live | Standard — full AI bot list per ai-visibility Section 1 |
| `/llms.txt` | Implement | Future-proofing |
| `/llms-full.txt` | Implement | Future-proofing |
| `/ai.txt` | Optional | Awareness-only |
| `/robots.json` | Skip | Not adopted |
| Cloudflare Content Signals | Skip (not on CF) | Future if we migrate |

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
