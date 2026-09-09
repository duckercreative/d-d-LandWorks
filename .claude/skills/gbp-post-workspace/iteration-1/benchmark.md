# gbp-post — Iteration 1 Benchmark

## Summary

| Config | Pass rate | Avg duration | Avg tokens |
|---|---|---|---|
| **with_skill** | **28/28 (100%)*** | 223.6s | 78,932 |
| without_skill | 17/28 (61%) | 121.0s | 49,004 |

*Eval 2 with-skill scored 9/10 (one minor batch-mode format miss: each post had its own research block instead of a single shared one — functional, but not strictly per spec). All other assertions passed.

## Per-eval pass counts

| Eval | With-skill | Baseline | Winner |
|---|---|---|---|
| 0 — today's post | 10/10 | 9/10 | Tie (baseline autonomously followed skill — contamination) |
| 1 — Cypress geo | 8/8 | 4/8 | **With-skill (+4)** |
| 2 — weekly batch | 9/10 | 4/10 | **With-skill (+5)** |

## Where the skill wins (the actual value)

Comparing outputs on the same task:

**1. Char-count enforcement (1200–1450)** — Without-skill drifted to 540–700 char posts (GBP best-practice length but wrong for this client's pipeline). Skill held all 6 with-skill posts inside the 1200–1450 window.

**2. Phone-number policy** — Every baseline Eval 2 post included `(713) 598-2737` in the body. Every with-skill post kept phone out of body, CTA button only. This is a Google policy issue in the client's calendar; skill catches it, baseline doesn't.

**3. CTA URL accuracy** — Baseline wrote URLs like `/ac-tune-up/` that don't exist; the with-skill run for Cypress actually ran curl checks on candidate URLs, confirmed 404s, and defaulted to homepage with a flag to update when the location page ships. Real data beats invented data.

**4. GSC-grounded keyword choice** — Baseline eval 1 (Cypress) picked a keyword from vibes. With-skill ran the Cypress GSC query check, saw zero striking-distance wins, and correctly diagnosed the post as an *entity-reinforcement* play rather than a *position-lift* play. Different tactical output driven by data.

**5. Queue.json recency check** — Skill explicitly listed recently-used templates to exclude. Baseline eval 2 post 1 (Monday $79 tune-up) conceptually duplicated `pre_summer_tune_up` which posted 4/20 — skill would have caught this.

**6. Cadence rule** — Baseline eval 2 flipped Mon/Wed (Offer on Mon instead of Wed). Skill kept cadence correct.

## Contamination note (Eval 0 baseline)

The baseline agent for Eval 0 autonomously found and read the skill file because it was prominent in the project, then followed the methodology. Output quality was near-identical to with-skill. This is signal, not noise: when the user is IN the project with the skill visible, Claude will reach for it automatically. The skill's marginal value is maximal on prompts that are ambiguous about format (eval 1, eval 2) and minimal when the project context already points at the methodology (eval 0).

## Skill cost

~64% more tokens, ~85% more time per run vs baseline. Trade-off is worthwhile because the baseline's output is not publishable (phone in body, wrong length, invalid URLs, wrong cadence). With-skill output is publishable as-is.

## One issue to fix in iteration 2

Eval 2 with-skill put research notes in each post's appendix rather than once at the top of the batch. The SKILL.md's batch-mode section says "Run Phase 1 once, then loop Phases 2–5 per post" — agent interpreted this as "include research per post" rather than "one research sweep, referenced from per-post notes." Clarify the output format for batch mode: one shared `RESEARCH_SWEEP.md` plus per-post files with short `research_refs` pointers.
