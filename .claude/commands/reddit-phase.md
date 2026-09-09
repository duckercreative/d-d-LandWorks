---
description: Show or advance the Reddit account phase. Phase gating is code-enforced — you cannot post outside the current phase's allowed actions.
argument-hint: [optional: "advance" to attempt promotion to the next phase]
---

Inspect or advance the Reddit account's rollout phase for 75 Degree AC.

Argument: $ARGUMENTS
- blank → show current phase + thresholds for the next one
- `advance` → attempt to promote to the next phase (validates thresholds first)

**Phases (from skill):**

| Phase | Duration | Allows | Forbids |
|---|---|---|---|
| 0 — Identity | Day 0 | Setup: bio, avatar, subscribe to 20 subs, verify email | Posting, commenting, voting |
| 1 — Pure Consumption | 14d | `--warmup` only: read, save, upvote in unrelated subs | All writes |
| 2 — Low-Friction Comments | 14d | Comments in r/HomeMaintenance, r/DIY, r/HVAC_actual (educational, NO brand) | Brand mentions, posts, comments elsewhere |
| 3 — Strategic Comments | 28d | All target subs; disclosed brand mentions ≤ 1/10; first posts in low-friction subs | First posts in r/houston |
| 4 — Full Engagement | — | All target subs, all action types, 9:1 ratio | Vote manipulation, URL promo |

**Run it:**
```
python3 09-social-media/scripts/reddit_pipeline.py --phase
```

For advancement:
```
python3 09-social-media/scripts/reddit_pipeline.py --advance-phase
```

**On output:**
- Current phase + days-in-phase
- Next phase + thresholds (min days, min karma)
- If advancing: validates both thresholds met AND no quarantine; refuses with a clear error if not

**Manual override:**
For testing or recovery only — DO NOT use to skip warm-up:
```
python3 09-social-media/platforms/reddit/reddit_client.py --set-phase phase_2
```

**Why phase gating exists:**
New Reddit accounts hitting the platform with HVAC self-promo writes get shadow-banned within days. The phase system enforces a slow warm-up that gives the account legitimate karma + age signals before any brand-adjacent write. Phase 2's "low-friction subs only + no brand mentions" rule is what protects the account through its first month.
