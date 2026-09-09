---
description: One-off shadowban check — compares authed vs unauthed visibility of recent writes. Auto-quarantines on ≥ 2 flags.
argument-hint: [optional: limit — default 20]
---

Run a Reddit shadowban probe.

Argument: $ARGUMENTS — number of recent items to check (default 20).

**What it does:**
For each archived comment/post:
1. Fetch the body via PRAW (authed) — confirms truth-from-inside
2. Fetch the same permalink as `.json` over plain HTTPS (unauthed) — confirms what the world sees
3. Compare. If unauthed shows 404 / `[deleted]` / `[removed]` while authed shows real text → shadowban flag

**Run it:**
```
python3 09-social-media/scripts/reddit_pipeline.py --shadowcheck --shadowcheck-limit 20
```

**On output:**
- Counts: ok / flagged / skipped
- Each flagged item with permalink + reason
- Report file: `09-social-media/platforms/reddit/data/shadowban_report.json`

**On flags:**
- ≥ 2 items flagged → publisher auto-quarantines the account
- Verify by opening the flagged permalinks in an incognito browser
- If the account is genuinely shadowbanned: read `docs/ban_risk_protocol.md` — typically requires r/ShadowBan message + account appeal
- Do NOT clear the quarantine flag until the underlying issue is resolved

**Why shadowbans matter:**
Reddit shadowbans are silent — from inside the account, your comments look fine. From outside, they're invisible. The longer this goes undetected, the more wasted effort: every "engaging" comment is reaching nobody. Weekly probes catch this within 7 days of onset (cron Sun 19:30).
