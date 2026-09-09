---
description: Weekly Reddit performance — karma + scores + promo ratio + shadowban probe → dark HTML report. Also drafts replies to any new comments on our content.
argument-hint: [optional: report | comments | full — default full]
---

Run the weekly Reddit monitoring sweep for 75 Degree AC.

Argument: $ARGUMENTS
- `report` → performance HTML report only
- `comments` → scan for new replies + draft responses only
- `shadowcheck` → run only the shadowban probe
- blank or `full` → all three in sequence

**What this does (full mode):**

1. **Performance refresh + report:**
   ```
   python3 09-social-media/scripts/reddit_pipeline.py --monitor
   ```
   - Pulls live karma + suspension status from `/api/v1/me`
   - Refreshes score / num_comments / upvote_ratio on every archived item via PRAW
   - Computes 7d + 30d totals, 30d promo ratio
   - Renders dark-themed HTML report at `09-social-media/platforms/reddit/data/reports/reddit-perf-YYYY-MM-DD.html`
   - Opens in browser

2. **Comment scan + reply drafting:**
   ```
   python3 09-social-media/scripts/reddit_pipeline.py --comments
   ```
   - Iterates every archived item with a permalink
   - Pulls direct replies via PRAW
   - For any reply we haven't responded to → writes a draft to `posts/drafts/reply-<id>.md`
   - Operator fills body via `/reddit-draft <slug>` or directly
   - Submit via `/reddit-post`

3. **Shadowban probe:**
   ```
   python3 09-social-media/scripts/reddit_pipeline.py --shadowcheck
   ```
   - For last 20 archived items: fetch authed body via PRAW, fetch unauthed body via `.json` endpoint
   - Flag any where unauthed returns 404 or `[deleted]/[removed]` while authed shows real content
   - ≥ 2 flags → auto-quarantine the account
   - Report at `data/shadowban_report.json`

**On output:**
- Report path + opened in browser
- Number of new reply drafts written
- Shadowban summary (ok / flagged / skipped counts)
- If anything flagged → tell the operator to read `docs/ban_risk_protocol.md` and check `data/shadowban_report.json` for details
