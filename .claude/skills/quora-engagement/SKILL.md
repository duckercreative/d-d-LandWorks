---
name: quora-engagement
description: >
  Quora answer + comment-reply + warm-up methodology for 75 Degree AC.
  Human-first, anti-AI-pattern answers for HVAC/Houston questions. Covers
  the 6-cluster intent taxonomy, 5-Point Human Test, banned phrases,
  account ban-risk protocol, velocity caps, and per-cluster templates.
  Activates whenever the user mentions Quora, answering Quora questions,
  Quora topics, replying to Quora comments, or running Quora warm-up.
version: 1.0.0
client: 75 Degree AC
---

# Quora Engagement — 75 Degree AC

## Why This Skill Exists

Quora answers are *long-form* brand content surfaced in Google for HVAC + Houston intent. They're also the platform's number-one ban surface: Quora detects template patterns, instant-fill bodies, "Great question!" openers, and answer-and-run accounts within days. Every published answer must read like a working Houston contractor wrote it on a slow afternoon.

This skill is the methodology layer for the Quora platform code at `09-social-media/platforms/quora/`. It governs:

- The voice + structure of every published answer
- What to cite and what to link to
- The 5-Point Human Test
- Velocity + warm-up discipline
- Ban-risk response

---

## Hard Constraints (from `answers/templates.json`)

- **1,500–3,000 characters** per answer body (publisher refuses < 800)
- **One link total** — never two — to the relevant `75degreeac.com` service page
- **No link in the first paragraph**
- **One inline authority citation** (TDLR / EPA / ENERGY STAR / ACCA / Carrier / Trane)
- **Sign-off** must include "75 Degree AC" + "(713) 598-2737" + Houston/service area
- **Plain prose** + bullets allowed. No H2 subheads (Quora renders them awkwardly)
- **Banned phrases** in `templates.json` — checked before submission. Hard ban list:
  - "Great question!"
  - "I hope this helps"
  - "delve into" / "navigate the complexities"
  - "in today's fast-paced world"
  - "first and foremost" / "needless to say"
  - "leverage" / "robust" / "synergy" / "game-changer" / "world-class"
  - "cutting-edge" / "unlock" / "elevate" / "embark" / "tapestry"
  - "in the heart of" / "look no further"
  - Full list lives in `templates.json` — read before drafting

---

## The 5-Point Human Test (every answer must pass all 5)

1. **Houston/Texas specificity** — at least one detail no generic AI would include: a suburb (Cypress vs Katy), CenterPoint rebate program, August heat-load pattern, Gulf-Coast humidity, TACLA license number, neighbourhood reference.
2. **Technical specific** — a part name, code, ratio, temperature, or rating: SEER2 14.3, R-410A vs R-454B, capacitor µF rating, Manual J, condensate trap, MERV-13.
3. **Non-obvious tradeoff or "most techs miss this"** — the line that makes a reader trust we've done this work hundreds of times.
4. **Authority citation** — inline reference to TDLR/EPA/ENERGY STAR/ACCA/manufacturer.
5. **Voice = working contractor** — opinionated, specific, no marketing register, no banned phrases.

An answer that fails any single point gets rewritten. The 5-Point Test is binary, not gradient.

---

## 6-Cluster Intent Taxonomy

| Cluster | When | Link Target | Must Mention |
|---|---|---|---|
| **emergency** | Same-day / 24-7 / system completely down | `/services/emergency-ac-repair/` | 24/7, same-day, TACLA, Houston |
| **repair** | Diagnostic / specific failure / part replacement | `/services/ac-repair/` | TACLA, Houston, the common failure mode |
| **install** | New unit / replacement / brand selection / SEER2 | `/services/ac-installation/` | SEER2 14.3 min, Manual J, Houston humidity, TACLA |
| **maintenance** | Tune-up / annual / filter / prevention | `/services/ac-maintenance/` | spring+fall, 95% breakdown reduction, Houston climate |
| **iaq** | Air duct cleaning / UV / purifier / humidity | `/services/indoor-air-quality/` | Houston humidity, MERV rating, TACLA |
| **commercial** | Office / restaurant / rooftop / multi-zone | `/services/commercial-hvac/` | commercial, rooftop or split, Houston, TACLA |

`question_finder.py` auto-classifies questions into these clusters. `templates.json → intent_templates` has hook examples + a sample CTA phrase per cluster.

---

## Answer Anatomy

```
<HOOK — 1-3 sentences, no link, no question repetition, no "Great question!">
  ↓
<BLUF — the direct answer in 2-4 sentences>
  ↓
<FIELD INSIGHT — 1-3 paragraphs of specific Houston/Texas HVAC detail>
  ↓
<STEP LIST — when applicable, 4-7 numbered or bulleted items>
  ↓
<AUTHORITY CITATION — 1 inline reference: TDLR / EPA / ENERGY STAR / ACCA / Carrier / Trane>
  ↓
<CLOSE WITH SOFT CTA — natural mention + service area + ONE link>
  ↓
<SIGN-OFF — "75 Degree AC · Houston · (713) 598-2737">
```

---

## 2026 Houston HVAC Reality (from memory: `project_hvac_incentives_2026.md`)

- **Federal 25C tax credit EXPIRED Dec 31 2025.** Do not cite it. Any "tax credit" mention must use CenterPoint rebates ($300–$750) instead.
- **Texas HEEHRA not yet launched** as of 2026-05.
- **Houston minimum:** SEER2 14.3. Recommend 16+ for new installs. Don't push past 18 — payback math collapses for residential.
- **Refrigerant:** R-410A on existing systems; R-454B for new installs post-2025 phase-out.

---

## Velocity + Warm-up Discipline (encoded in `publisher.py`)

- **Max 3 answers / 7-day rolling window** — hard cap in code
- **Min 12 hours between posts** — hard cap in code
- **Warm-up freshness:** a `warmup` activity must exist within the last 48 hours before any post. Refused otherwise.
- **90-min gap between warm-up and posting** in either direction
- **CAPTCHA = automatic quarantine** — `quarantined: true` in `activity_log.json`. Publisher refuses all writes until human clears the flag.

To override velocity caps you must edit `auth/quora_app_config.json → velocity_caps`. Do not bypass the warm-up guard except for the first manual test post via `--skip-warmup-check`.

---

## Worked Examples

### ❌ Bad (banned-phrase opener, generic, no Houston, no citation)

> Great question! When it comes to choosing an HVAC contractor, there are many factors to consider. First and foremost, you should look for a licensed and insured company with positive customer reviews. In today's fast-paced world, it's important to find a contractor who values their customers. We at 75 Degree AC are committed to providing world-class service. Visit our website at https://75degreeac.com/ to unlock the benefits of choosing us. Call us at (713) 598-2737 for a free estimate!

Fails: "Great question!", "First and foremost", "in today's fast-paced world", "world-class", "unlock", URL in body, no Houston detail, no citation, register is marketing.

### ✅ Good (passes all 5 Test points)

> Three things matter in Houston specifically: who's actually on the truck, whether the sizing math was done on paper, and the condensate plan.
>
> Sizing first. TDLR-licensed contractors are required to perform a Manual J load calculation before quoting a new system, but maybe one in four actually does it for residential — most pull a quick rule of thumb off square footage and oversize by half a ton. Oversized units in our humidity profile short-cycle, which means they don't run long enough to wring moisture out of the air. You end up with a 72° house that still feels sticky.
>
> Condensate next. Houston coils run wet half the year. If the primary drain isn't sloped right and the secondary line doesn't actually drain *somewhere visible*, you'll find out the next time the trap clogs — usually as a stain on the ceiling under the attic unit. A float switch on the secondary pan is a $40 part most contractors skip.
>
> On who's on the truck: ask for the technician's TACLA number specifically, not the company's. Apprentices working without a master license are common at the big-call-center outfits, and an apprentice installing the txv on a heat pump is how you end up with a year-three compressor failure.
>
> If you're in Houston and want someone who walks the attic with you and runs a real Manual J, that's what we do at [75 Degree AC](https://75degreeac.com/services/ac-installation/).
>
> 75 Degree AC · Houston, TX · (713) 598-2737

Passes: Manual J + TXV + float switch (technical), condensate ceiling stain + Gulf humidity (Houston), TDLR + TACLA citation, "one in four actually does it" tradeoff, no banned phrases.

---

## Pipeline Workflow (operator's mental model)

1. **Warm-up first** (`/quora-warmup`) — if no warmup in last 48h, do this before anything else.
2. **Refresh candidates** (`question_finder.py`) — once a week or when the queue's empty.
3. **Draft a brief** (`/quora-post` or `answer_drafter.py --next`) — generates the `.md` brief skeleton.
4. **Write the body** — fill in `{ANSWER_BODY_PLACEHOLDER}` per the 5-Point Test + cluster template.
5. **Dry-run post** (`--post-pending --dry-run`) — Playwright opens the question, types into the composer, screenshots, does NOT click Post.
6. **Live post** (`--post-pending`) — Discord ✅ approval gates the click.
7. **Monitor weekly** (`/quora-monitor`) — performance + new comments → dark HTML report.
8. **Reply to comments** as they surface (Discord-approved).

---

## When NOT To Post

- The question is car AC, RV, boat, or the band AC/DC (handled by `EXCLUSION_KEYWORDS` in question_finder.py but human-check anyway).
- The question is asked by a competitor's account fishing for negative answers.
- The intent is a homework / theoretical question. Quora's algorithm penalises generic answers on technical homework questions.
- The most-upvoted existing answer is already from a Houston HVAC contractor we know is good. Don't pile on — go find a less-covered question.

---

## Cross-References

- `feedback_social_post_policy.md` — general social copy/image rules (Quora doesn't fan out from GBP templates, but voice rules carry)
- `feedback_review_reply_style.md` — gbp-review-reply skill — same human-voice methodology applies to Quora comment replies
- `project_hvac_incentives_2026.md` — 2026 incentive reality (25C expired)
- `project_top_competitors_kb.md` — `01-research/competitors/top-players.md` — competitor positioning before drafting any answer
- `feedback_creative_generation.md` — Quora answers do not use creative images; this is text-only territory
