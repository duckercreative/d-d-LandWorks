---
description: Submit a pending Reddit draft via Discord-gated approval — all 13 hard guards enforced
argument-hint: [optional: specific draft slug — defaults to oldest pending draft]
---

Submit a pending Reddit draft for 75 Degree AC using the reddit-engagement skill.

Argument: $ARGUMENTS
- A draft slug → submit that specific draft (must be in `posts/drafts/`)
- blank → submit the oldest filled draft (one per run)

**Non-negotiables:**
- Read `.claude/skills/reddit-engagement/SKILL.md` — every guard the publisher enforces
- All 13 hard guards run BEFORE any write — don't try to bypass
- Discord approval gate is mandatory — never set auto-approve

**Pre-flight (Claude does this before running the pipeline):**
1. Run `python3 09-social-media/platforms/reddit/reddit_client.py --whoami` — confirm phase + activity status
2. Check warm-up freshness — if last warm-up > 24h ago: refuse and tell the operator to run `/reddit-warmup` first
3. List pending drafts: `ls 09-social-media/platforms/reddit/posts/drafts/*.md`
4. For the target draft, verify `is_promo` flag in front matter is correct given the body content
5. If `is_promo: yes` → confirm target sub allows promo (check `subreddits/targets.json`)

**Submit:**
```
python3 09-social-media/scripts/reddit_pipeline.py --post-pending --max-per-run 1
```

This will:
1. Pick the oldest filled draft
2. Run all 13 guards (quarantine, suspension, account age, phase, karma floor, velocity, time-between, same-sub cooldown, warm-up freshness, post-warm-up gap, 9:1 promo ratio, per-sub promo, URL guard)
3. Post a preview to Discord with the body + target sub + intent + promo flag
4. Wait up to 30 minutes for ✅ reaction
5. On approval: submit via PRAW → archive draft to `posts/archive/YYYY-MM/` → log to `data/publish_log.csv` → notify Discord with permalink
6. On rejection / timeout: move draft to `posts/rejected/YYYY-MM/`
7. On guard refusal: announce reason via Discord; draft stays in place

**For first manual test post (operator can pass `--skip-warmup-check` once):**
```
python3 09-social-media/scripts/reddit_pipeline.py --post-pending --skip-warmup-check
```
Use only when running the very first test against r/test or similar. Never bypass on real subs.

**On failure:**
- `GuardError`: read the message — it names the exact guard. Most common is warm-up too old.
- Publisher auto-quarantines on 403 / 429 / RATELIMIT / "suspended" / "verify" responses
- Check `09-social-media/platforms/reddit/auth/activity_log.json` for `quarantined: true`
- Read `09-social-media/platforms/reddit/docs/ban_risk_protocol.md` before clearing

**After successful post:**
- Confirm the permalink appears in Discord
- Verify archived JSON in `posts/archive/YYYY-MM/<slug>.json`
- Schedule shadowban check for ~24h later: this happens automatically Sunday 19:30 via cron
