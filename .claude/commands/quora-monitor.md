---
description: Weekly Quora performance scrape — views/upvotes/comments per posted answer, dark HTML report, comment scan + draft replies
argument-hint: [optional: scrape | report | comments — defaults to all three]
---

Run the Quora weekly monitoring sweep for 75 Degree AC.

Argument: $ARGUMENTS

Modes:
- `scrape` — only refresh `data/quora_performance.csv`
- `report` — only re-render the dark HTML report from existing CSV
- `comments` — only scan for new comments + draft replies
- (blank) — do all three in sequence (default)

**Steps:**
1. Verify session: `python3 09-social-media/platforms/quora/browser.py --check`
2. Performance scrape: `python3 09-social-media/scripts/quora_pipeline.py --monitor` — this opens each archived answer URL, scrapes views/upvotes/comments, appends to `data/quora_performance.csv`, renders the dark-theme report to `09-social-media/platforms/quora/reports/quora-performance-YYYY-MM-DD.html`, and `open`s it in the browser
3. Comment scan: `python3 09-social-media/scripts/quora_pipeline.py --comments` — detects new comments on our answers, drafts brand-voice replies, surfaces them in Discord for approval, posts on ✅

**Quality bar for the report:**
- Dark theme, matches the canonical report design (see CLAUDE.md "Report Design Standard")
- KPI cards: total answers, total views, upvotes, comments
- Answer-by-answer table sorted by views desc
- Live badge with pulsing dot
- Footer notes data source (`data/quora_performance.csv`) — no scripts, no IDs

**Read before suggesting changes:**
- `templates.json` for banned phrases — comment replies follow the same rules
- The 6 intent clusters in `templates.json → intent_templates` — reply tone should match the parent answer's cluster
