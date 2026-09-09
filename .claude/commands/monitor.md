---
description: Run SEO monitoring sweep — rankings, GBP, technical health, AI visibility, reviews, alerts
argument-hint: [cadence: daily|weekly|monthly|quarterly]
---

Run the SEO monitoring sweep using the `seo-monitoring` skill.

Cadence: $ARGUMENTS (default: `weekly`)

**Daily checks (5 min)**
- GSC: coverage errors in last 24h? curl https://75degreeac.com/ (200?) + sitemap (200?)
- GBP: any new 1-3★ review? any unreplied review? (via `gmb_reviews.py --pull-latest`) — no Q&A check, Google removed that feature
- Uptime + phone (713) 598-2737 status
- Google Ads: spend pacing vs. daily budget

**Weekly checks (30 min) — default**
- Rankings (top 30 keywords): pull via SEMrush API or `03-gsc/data/queries-*.csv` latest
  - Flag any drop ≥ 3 positions
  - Flag any new page-1 entries (wins to amplify)
- GBP insights: searches, views, actions (week-over-week)
- Citation NAP spot-check: 5 random citations from Tier 1
- Technical: Rank Math sitemap count, index status via GSC, robots.txt unchanged
- AI visibility quick-check: `/ai-visibility` single-platform sweep
- Reviews: count, avg, unreplied
- Content: pages published this week + pages scheduled
- Ads: CPL, CTR, Quality Score movers

**Monthly checks (2 hr)**
- Full `/seo-audit` multi-agent
- Full `/citations` audit (all 35)
- Full `/ads-audit`
- Full `/ai-visibility`
- Competitor delta: what did top 3 competitors do differently this month (new pages, new keywords, review velocity, GBP changes)
- Backlink delta (gained / lost)
- Core Web Vitals field data (CrUX)

**Quarterly checks (full day)**
- Strategic review vs. 6-month KPI plan (CLAUDE.md)
- Re-run competitor analysis (3 top competitors)
- Site architecture review (page-tracker vs. live sitemap)
- Topical map update
- Keyword strategy refresh (new opportunities from 3 months of GSC data)
- Plan next quarter's content calendar

**Output per cadence:**
- `08-reporting/monitoring/[cadence]-[date].md` — findings + alerts
- Dark HTML report ONLY for weekly/monthly/quarterly (daily is markdown-only, fast)
- Alert section at top: anything requiring action in < 24h
- `open` the HTML if generated

**Alert thresholds (page/Slack user per `feedback_approach.md` if set):**
- Any ranking drop ≥ 5 positions → alert
- Any 1-2★ unreplied review > 6h → alert
- Ads CPL > 130% of target → alert
- Sitemap 4xx/5xx → alert
- Indexed pages drop > 5% → alert
