---
description: Run the Reddit warm-up routine — browse target subs, save 1–3 posts, upvote 2–5 quality answers in UNRELATED subs. Required within 24h of any write.
argument-hint: [optional: max minutes — default 8]
---

Run the Reddit warm-up routine for 75 Degree AC.

Argument: $ARGUMENTS — max minutes for the session (default 8).

**What this does:**
- Reads 5–10 posts each from target subs (r/houston, r/HVAC, r/HomeMaintenance, etc.)
- Saves 1–3 posts to the saved list (organic signal)
- Upvotes 2–5 quality answers in UNRELATED subs (r/AskReddit, r/explainlikeimfive, etc.)
- Logs every action to `activity_log.warmups`

**What this does NOT do:**
- No writes (no comments, no posts)
- No upvoting our own content (vote-manipulation block in code)
- No following accounts

**Run it:**
```
python3 09-social-media/scripts/reddit_pipeline.py --warmup --warmup-minutes 8
```

**When to run:**
- **Mandatory:** within 24h before any comment or post (publisher refuses writes otherwise)
- **Phase 0–1:** this is the ONLY allowed activity
- **Phase 2+:** still required within 24h of any write
- **Recommended cadence:** daily 13:00 (installed via `install_reddit.sh`)

**On output:**
- Show the summary block from `run_warmup()` — browsed count, saved count, upvoted count, subreddits touched
- If `upvoted == 0` after a clean run, that's a soft warning: warm-up is most valuable when it includes a few upvotes of other people's content

**On quarantine:**
- Refuses to run if `activity_log.quarantined: true`
- Read `docs/ban_risk_protocol.md` before clearing
