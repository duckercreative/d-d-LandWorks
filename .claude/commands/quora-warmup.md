---
description: Run the Quora warm-up — open 6–10 topics, scroll, upvote 2–4 quality answers. Required within 48h of any post.
argument-hint: [optional: minutes (default 18)]
---

Run the Quora account warm-up routine for 75 Degree AC.

Argument: $ARGUMENTS (default ~18 minutes)

**Why this exists:**
- Quora's bot detection is aggressive. An account that only posts and never engages gets shadowbanned.
- The publisher refuses to post if no warm-up has been recorded in the last 48 hours.

**Pre-flight:**
1. Check session: `python3 09-social-media/platforms/quora/browser.py --check`
2. Check that we did NOT post in the last 90 min — `hours_since_last("posts")` should be either `None` or `> 1.5`

**Run:**
- `python3 09-social-media/scripts/quora_pipeline.py --warmup`
- Headed Chrome with `slow_mo=160`
- Picks 6–10 random topics from `target_topics` in `quora_app_config.json`
- Scrolls each topic 2–5 times with reading-dwell jitter
- Upvotes 0–2 answers per topic, randomised

**Output:**
- Activity entries appended to `09-social-media/platforms/quora/auth/activity_log.json` under `warmups`
- Screenshots in `auth/snapshots/warmup_*`
- Console summary of topics visited + upvotes given + duration

**Failure modes:**
- If a CAPTCHA appears mid-session, publisher sets `quarantined: true`. Read `docs/ban_risk_protocol.md` before retrying.
- If the session is stale, re-run `python3 09-social-media/platforms/quora/oauth_setup.py`.
