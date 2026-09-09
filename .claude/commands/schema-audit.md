---
description: Validate schema on live pages — WPCode #8140 sync, types coverage, required-field check, rich-result eligibility
argument-hint: [scope: all|homepage|services|locations|blog|[specific-url]]
---

Audit live schema markup across 75 Degree AC using the `schema-markup` skill.

Scope: $ARGUMENTS (default: `all`)

**Source of truth (from memory `feedback_audit_real_data.md`):**
- WPCode snippet **#8140** — site-wide schema injector. Everything must align with it.
- `03-schema/wpcode-snippet.php` — local mirror (verify matches live via WP-CLI)

**Required schema per page type:**

| Page Type | Required @types |
|---|---|
| Homepage | HVACBusiness, LocalBusiness, Organization, WebSite, BreadcrumbList, AggregateRating |
| Service page | Service, HVACBusiness (provider), BreadcrumbList, FAQPage (if FAQs), AggregateRating |
| Location page | Service, HVACBusiness, Place, BreadcrumbList, FAQPage |
| Blog post | BlogPosting, Person (author), Organization (publisher), BreadcrumbList, FAQPage (if FAQs) |
| Landing page | Service, HVACBusiness, BreadcrumbList, FAQPage |

**Audit per URL:**
1. `curl -s [url]` → extract all `<script type="application/ld+json">` blocks
2. Parse each JSON block, validate structure
3. Check required fields:
   - HVACBusiness: name, address, telephone, url, image, priceRange, geo, openingHours, areaServed, aggregateRating, sameAs
   - Service: serviceType, provider, areaServed, offers
   - FAQPage: mainEntity[] with Question/Answer pairs
   - AggregateRating: ratingValue, reviewCount (must match live GBP counts)
4. Rich-result eligibility per Google: required + recommended fields
5. Cross-check business facts vs. `business-info.md`, `project_tacla_license.md` (TACLA72152E), `project_gbp_identifiers.md` (correct Place ID)
6. Cross-check against WPCode #8140 content

**Common red flags to catch:**
- Multiple conflicting `@id` values for the business entity
- `aggregateRating` with stale/fake numbers (must match live GBP)
- Missing `sameAs` to YouTube (0.737 AI boost per memory)
- Wrong Place ID (see `project_gbp_identifiers.md` for canonical vs. known-wrong)
- Missing TACLA license identifier

**Output:**
- `03-schema/schema-audit-[date].md` — per-URL findings
- Dark HTML: `08-reporting/monthly/[YYYY-MM]/schema-audit-[date].html` (YYYY-MM is the month of [date])
- KPI cards: pages audited, pages passing, rich-result eligible, critical issues
- Fix queue: paste-ready JSON-LD patches keyed to WPCode #8140 lines
- Optional `--apply`: push fixes to WPCode #8140 via SFTP + `eval-file` + `wp_slash()` (per `feedback_wpcli_stdin_slash_strip.md` — NEVER pipe via stdin)
- `open` the HTML
