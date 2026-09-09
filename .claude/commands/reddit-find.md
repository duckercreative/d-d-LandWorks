---
description: Refresh Reddit candidates.json — scan target subs for HVAC + Houston questions worth engaging
argument-hint: [optional: cluster filter — houston, home, hvac, adjacent]
---

Refresh the Reddit candidate queue for 75 Degree AC.

Argument: $ARGUMENTS
- `houston` → scan only houston_local cluster subs
- `home` → scan only home_improvement cluster subs
- `hvac` → scan only hvac_industry cluster subs
- `adjacent` → scan only adjacent cluster subs
- blank → scan all clusters (default)

**Read first:**
- `.claude/skills/reddit-engagement/SKILL.md` — intent taxonomy + sub tone overrides
- `09-social-media/platforms/reddit/subreddits/targets.json` — current target sub list + karma floors

**Run the scan:**
```
python3 09-social-media/scripts/reddit_pipeline.py --find --max-per-sub 15 --lookback-hours 72
```

This calls `subreddit_finder.find_candidates()` which:
1. Iterates every sub in `targets.json` (or just the cluster passed via $ARGUMENTS)
2. Pulls `new` posts from the last 72h
3. Filters by HVAC intent patterns (6 clusters) + exclusion patterns (car AC, RV, fridge, homework, window unit, portable)
4. Scores each candidate by recency + intent confidence + Houston signal + cluster bonus + engagement
5. Writes ranked output to `09-social-media/platforms/reddit/posts/candidates.json`

**After running:**
- Show the top 10 candidates from the new candidates.json
- For each, output `score · r/sub · cluster · title (first 80 chars)`
- Flag any that scored ≥ 60 (high-priority — draft immediately)
- Note if any expected sub returned 0 candidates (might be misnamed or banned)

**Next step suggestion:**
- If queue looks good → `/reddit-draft` to start a brief
- If queue is thin (< 5) → broaden lookback to 168h: `--lookback-hours 168`
- If many candidates in subs that ban self-promo → these become educational-only writes (`is_promo: no`); plan accordingly
