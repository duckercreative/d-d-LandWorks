---
description: Run the social media pipeline — fan out GBP template to FB, IG, X with platform-specific copy/image adapters
argument-hint: [mode: once|dry-run|fb|ig|x] [optional: --template <id>]
---

Run the social media pipeline at `09-social-media/scripts/social_pipeline.py` per the `project_social_automation.md` memory and `09-social-media/PLAN.md`.

Args: $ARGUMENTS

**Source-of-truth rules (from memory):**
- Templates owned by `04-gmb/profiles/houston/posts/templates.json` — read, never copy
- Photos owned by `04-gmb/photos/` (968-image shared library)
- Per-platform copy rules: `09-social-media/posts/templates/platform_overrides.json`
- Post policy from `feedback_social_post_policy.md`: FB ≤ 240 chars; IG 4:5 aspect + ≤ 12 hashtags; X ≤ 220 chars + 1 URL max

**Pre-flight checks (auto-run):**
1. Meta token health: `python3 09-social-media/platforms/meta/token_refresh.py --check`
2. X session: `python3 09-social-media/platforms/x/publisher.py --whoami`
3. If either fails → print the setup doc path and stop:
   - FB/IG: `09-social-media/platforms/meta/docs/auth_setup_facebook_instagram.md`
   - X: `09-social-media/platforms/x/docs/auth_setup.md`

**Execute based on arg:**

| Arg | Command |
|---|---|
| `dry-run` (default) | `python3 09-social-media/scripts/social_pipeline.py --dry-run` |
| `once` | `python3 09-social-media/scripts/social_pipeline.py --once` |
| `fb` | `python3 09-social-media/scripts/social_pipeline.py --once --platforms fb` |
| `ig` | `python3 09-social-media/scripts/social_pipeline.py --once --platforms ig` |
| `x` | `python3 09-social-media/scripts/social_pipeline.py --once --platforms x` |
| `--template <id>` | append to any above |

**Discord approval flow:**
The pipeline posts a preview to the GBP Discord channel. User reacts to approve; on approval, publishers fan out. If the user is asking for an autonomous post (no preview), pass `--auto-approve` — but warn them first.

**After execution:**
- Print the published URLs per platform from `09-social-media/logs/`
- If any platform failed, read `09-social-media/docs/runbook.md` section for that platform and surface the fix

**Schedule reminder:** Regular cadence is Tue/Thu/Sat 09:00 via `09-social-media/scripts/scheduler/install.sh` — this command is for ad-hoc posts outside that schedule.
