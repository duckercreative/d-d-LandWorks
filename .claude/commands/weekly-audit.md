---
description: Weekly in-depth audit across ALL platforms — Website, GBP, Google Ads, GSC, GA4 — unified dark HTML report
argument-hint: [optional: end-date YYYY-MM-DD, defaults to yesterday]
---

Run the unified weekly deep audit covering every live platform 75 Degree AC operates on.

Period: last 7 days ending $ARGUMENTS (default: yesterday). Always align to Mon-Sun for consistency.

**Non-negotiables:**
- Real data only — no WebFetch summaries (per memory `feedback_audit_real_data.md`)
- Single dark HTML report (no separate per-platform files) using the canonical ads-audit dark design system
- Every finding must reference specific URLs, campaigns, keywords, or review IDs — never generic

---

## Phase 1 — Parallel data pulls

Spawn these simultaneously (independent data sources):

**1. Website (technical + on-page)**
- Sitemap: `curl -s https://75degreeac.com/sitemap_index.xml`
- Robots: `curl -s https://75degreeac.com/robots.txt`
- Homepage HTML: `curl -s https://75degreeac.com/` — title/meta/H1/schema
- Status check every URL in `02-site-architecture/page-tracker.csv` (parallel, 20 at a time)
- WP-CLI via SSH: last 7 days of post/page changes
- WPCode #8140 schema (source of truth)
- Core Web Vitals: CrUX API for homepage + top 5 landing pages

**2. Google Business Profile**
- `python3 04-gmb/scripts/gbp_browser.py --check` (session live?)
- `python3 04-gmb/scripts/gmb_reviews.py --pull-latest`
- Pull insights (searches / views / direction requests / calls) — last 7 days via `gmb_core.py` or Playwright
- Pull posts published last 7 days
- Pull unreplied-review count + reply rate (no Q&A pull — Google removed the feature in late 2025)
- Profile completeness score

**3. Google Search Console**
- Read `03-gsc/data/queries-*.csv` latest export (or trigger fresh pull if `03-gsc/scripts/` supports it)
- Last 7 days: clicks, impressions, CTR, avg position (site-wide + per-page)
- Coverage status (indexed / excluded / errors)
- Rich result eligibility changes
- Top 20 queries with position, CTR, delta WoW

**4. Google Analytics 4**
- Pull via GA4 API (`project_ga4.md` has property ID + auth)
- Last 7 days: sessions, users, engagement rate, avg engagement time
- Traffic by channel (Organic / Direct / Paid / Referral / Social)
- Top 10 landing pages by sessions + conversions
- Conversion events: `phone_click`, `form_submit`, `lead`
- Device mix, top cities

**5. Google Ads**
- Read `05-google-ads/75degreeacads.csv` (fresh export)
- Last 7 days per campaign: spend, conv, CPL, CTR, avg CPC, impression share, IS lost (budget/rank)
- Quality Score weighted average per campaign
- Top 10 search terms (gains) + top 10 wasted-spend terms (adds to negatives)
- Ad strength per RSA
- Lost conversion opportunities (paused kw, budget caps hit)

**6. Cross-platform (quick)**
- Citation Tier 1 spot-check (5 directories — full audit is `/citations`)
- AI visibility spot-check: single query in ChatGPT or Perplexity for "best HVAC Houston"
- Backlink delta vs. last week (via Ahrefs/SEMrush if API wired, else skip)

---

## Phase 2 — Scoring + synthesis

**Platform health scores /100** (used as KPI cards in the report):

| Platform | Score basis |
|---|---|
| Website | indexable pages %, schema validity %, CWV pass %, 4xx count, noindex leakage |
| GBP | profile completeness %, post cadence met, unreplied reviews count, review reply rate, photo adds |
| GSC | total clicks trend, position-11-20 opportunity count, coverage error count |
| GA4 | sessions trend, conversion trend, bounce/engagement health, channel diversity |
| Google Ads | CPL vs. target, Quality Score avg, IS lost, wasted spend ratio, conv rate |

**Overall 75 Degree AC Score /100** = weighted average (Website 25, GBP 25, GSC 15, GA4 15, Ads 20).

---

## Phase 3 — Unified dark HTML report

Save: `08-reporting/weekly-audit/weekly-audit-[ISO-week].html`

Use the full ads-audit dark design system (CLAUDE.md → Report Design Standard). Required layout:

**Header**
- h1: "Weekly All-Platform Audit" (orange accent)
- Badges: `badge-date` (week range), `badge-live` (with pulse dot)
- Meta row: client name, dates covered, report version

**Section 1 — Executive KPI strip (top of page)**
Six KPI cards in one row:
1. Overall Score /100 (color-coded status chip)
2. Website Score
3. GBP Score
4. GSC Score
5. GA4 Score
6. Ads Score

Each with value, status chip (`.hit` / `.watch` / `.miss`), progress bar vs. target.

**Section 2 — Alerts (red/orange banners, only if triggered)**
Show only fired alerts per thresholds:
- Ranking drop ≥ 5 positions
- Unreplied 1-2★ review > 6h
- Ads CPL > 130% target
- Sitemap 4xx/5xx
- Indexed pages drop > 5%
- GA4 conversions drop > 20% WoW

**Section 3 — Website (`🌐 Website`)**
- Sub-KPIs: indexed count, 4xx count, noindex count, schema pass %, avg CWV
- Table: pages changed this week (published / updated / deleted) with status + notable issues
- Schema audit: failures vs. WPCode #8140
- Redirect chain check

**Section 4 — Google Business Profile (`📍 GBP`)**
- Sub-KPIs: reviews total, avg rating, unreplied count, posts published (target: 3/wk per Tue/Thu/Sat cadence), searches, views, calls
- Table: reviews received this week (rating, excerpt, reply status)
- Post performance: each post with views/clicks
- Profile deltas (anything changed)

**Section 5 — Google Search Console (`🔍 GSC`)**
- Sub-KPIs: total clicks, impressions, CTR, avg position (with WoW delta arrows)
- Chart: daily clicks + impressions dual-axis
- Top 20 query table: query, clicks, imp, CTR, pos, WoW delta
- Page-level winners/losers (5 each)
- Coverage status changes

**Section 6 — Google Analytics 4 (`📊 GA4`)**
- Sub-KPIs: sessions, users, engagement rate, avg time, conversions, conv rate
- Chart: daily sessions by channel (stacked bar)
- Top landing pages table with sessions + conv
- Conversion event breakdown (phone_click / form_submit / lead)
- Device mix pie

**Section 7 — Google Ads (`📣 Ads`)**
- Sub-KPIs: spend, conv, CPL, CTR, QS avg, IS
- Chart: daily spend + conversions (dual-axis line)
- Campaign table (all 5) — spend, conv, CPL vs. target, IS lost
- Top 5 converting keywords
- Top 5 wasted-spend search terms (add-to-negatives queue)
- Ad strength breakdown

**Section 8 — This week's action queue (prioritized)**
Single table, ranked Critical → High → Medium → Low:
- Issue / Opportunity
- Platform
- Estimated impact ($ or %)
- Fix owner (Claude command or manual)
- Target: e.g., "Run `/fix-noindex A` on 3 pages", "Reply to review ID X", "Negative ‘free ac repair’ in Emergency campaign"

**Section 9 — Wins this week**
Brief list of what moved positively. Morale + client-facing use.

**Footer**
- No script names, no account IDs — per CLAUDE.md rule

---

## Phase 4 — Also emit
- `08-reporting/weekly-audit/weekly-audit-[ISO-week].md` — markdown version for conversational reference
- Append row to `08-reporting/weekly-audit/history.csv` with the 5 platform scores + overall score (this is the **bi-weekly comparison data source** — `/biweekly-compare` reads this)

Columns:
`date-end | overall | website | gbp | gsc | ga4 | ads | clicks | impressions | sessions | conversions | spend | cpl | reviews-total | avg-rating`

---

## Phase 5 — Deliver
- `open "08-reporting/weekly-audit/weekly-audit-[ISO-week].html"`
- Print one-line summary: overall score, biggest win, biggest risk, top 3 action items
