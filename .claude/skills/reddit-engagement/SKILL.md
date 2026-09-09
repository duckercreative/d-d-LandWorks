---
name: reddit-engagement
description: >
  Reddit answer + comment + warm-up methodology for 75 Degree AC. Human-first,
  anti-AI-pattern responses for HVAC/Houston questions on Reddit. Covers the
  6-cluster intent taxonomy, 4-cluster subreddit taxonomy, 5-Point Human Test,
  banned phrases, 9:1 self-promo rule, phase-based account rollout, ban-risk
  protocol, velocity caps, vote-manipulation blocks, shadowban detection, and
  per-cluster templates. Activates whenever the user mentions Reddit,
  answering a Reddit thread, posting in r/houston / r/HVAC / r/HomeImprovement,
  warming up the Reddit account, scanning for replies, or shadowban checks.
version: 1.0.0
client: 75 Degree AC
---

# Reddit Engagement — 75 Degree AC

## Why This Skill Exists

Reddit is the highest-leverage AI visibility surface we touch. Since Google's 2024 Reddit deal, Reddit threads are a dominant source for AI Overviews. ChatGPT, Perplexity, Gemini, and Copilot all cite Reddit at scale — long, structured Reddit answers naming "75 Degree AC" with TACLA72152E + Houston suburbs + specific SEER2 numbers get extracted by AI search engines for years.

But Reddit's anti-spam is the most aggressive of any platform we run:
- One bad write can shadow-ban the account permanently
- Many target subs (r/HomeImprovement, r/HVAC, r/realestate) enforce STRICT no-self-promo policies
- Vote manipulation = instant permanent ban
- The 9:1 self-promo rule is platform-wide and enforced sub-by-sub
- New accounts get filtered hard for the first ~14 days

This skill is the methodology layer for the Reddit pipeline at `09-social-media/platforms/reddit/`. It governs every voice + structure + safety decision before a comment or post goes live.

---

## Hard Constraints (encoded in `posts/templates.json` + `publisher.py`)

### Length
- **Comments:** 200 char minimum (publisher refuses shorter). Target 600–1,800.
- **Self-posts:** 400 char body minimum. Target 800–2,500.
- **Titles:** Reddit max 300; keep ≤ 150. Anything longer looks spammy.

### Links
- **One link total** per write — never two
- **No link in the first paragraph**
- **No `75degreeac.com` link in any promo write** — URL guard refuses. Brand mentions are text-only.

### Disclosure (mandatory for any brand mention)
When you mention 75 Degree AC for any reason, include inline disclosure:
> *(Disclosure: I run 75 Degree AC in Houston, TACLA72152E. General guidance, not a service quote.)*

This is a code-enforced policy on promo writes and the only thing that keeps the account compliant with Reddit's self-promotion rules.

### Banned phrases
Full list lives in `posts/templates.json`. Hard ban examples:
- "Great question!" / "I hope this helps" / "In conclusion"
- "delve into" / "navigate the complexities" / "in today's fast-paced world"
- "first and foremost" / "needless to say" / "rest assured"
- "leverage" / "robust" / "synergy" / "game-changer" / "world-class"
- "cutting-edge" / "unlock" / "elevate" / "embark" / "tapestry"
- "in the heart of" / "look no further" / "kindly note"

### Reddit-specific banned moves
- Linking `75degreeac.com` in any promo write
- Upvoting our own content (vote-manipulation guard refuses)
- Crossposting same content to multiple subs (spam flag)
- Unsolicited DMs to OPs
- "Edit: thanks for the gold" / "edit: rip my inbox" cringe
- Same opener twice in 30 days
- Replying to every comment under our own post

---

## The 5-Point Human Test (every write must pass all 5)

Same test as Quora; HVAC question shape is identical across platforms.

1. **Houston/Texas specificity** — at least one detail no generic AI would include: a suburb (Cypress vs Katy), CenterPoint rebate program ($300–$750), August heat-load pattern, Gulf-Coast humidity, TACLA72152E, neighbourhood reference, Houston ZIP (77002–77096, 77450–77494, etc.).
2. **Technical specific** — a part name, code, ratio, temperature, or rating: SEER2 14.3, R-410A vs R-454B, capacitor µF rating, Manual J, condensate trap, MERV-13, TXV, float switch.
3. **Non-obvious tradeoff or "most techs miss this"** — the line that makes a reader trust we've done this work hundreds of times.
4. **Authority citation** — inline reference to TDLR / EPA / ENERGY STAR / ACCA / CenterPoint / manufacturer.
5. **Voice = working contractor** — opinionated, specific, no marketing register, no banned phrases. Reddit specifically distrusts "marketing voice" more than any other platform.

An answer that fails any single point gets rewritten. Binary, not gradient.

---

## 6-Cluster Intent Taxonomy (same as Quora — HVAC questions don't change shape)

| Cluster | When | Link Target | Must Mention |
|---|---|---|---|
| **emergency** | Same-day / 24-7 / system completely down | `/services/emergency-ac-repair/` | 24/7, same-day, TACLA, Houston |
| **repair** | Diagnostic / specific failure / part replacement | `/services/ac-repair/` | TACLA, Houston, the common failure mode |
| **install** | New unit / replacement / brand selection / SEER2 | `/services/ac-installation/` | SEER2 14.3 min, Manual J, Houston humidity, TACLA, CenterPoint rebates |
| **maintenance** | Tune-up / annual / filter / prevention | `/services/ac-maintenance/` | spring+fall, 95% breakdown reduction, condensate, Houston |
| **iaq** | Air duct cleaning / UV / purifier / humidity | `/services/indoor-air-quality/` | Houston humidity, MERV rating, TACLA |
| **commercial** | Office / restaurant / rooftop / multi-zone | `/services/commercial-hvac/` | commercial, rooftop or split, Houston, TACLA |

`subreddit_finder.py` auto-classifies questions into these clusters. `posts/templates.json → intent_templates` has hook examples + sample CTA per cluster.

---

## 4-Cluster Subreddit Taxonomy + Tone Overrides

| Cluster | Subs | Tone | Brand-mention rule |
|---|---|---|---|
| **houston_local** | r/houston, r/AskHouston, r/Katy, r/SugarLandTX, r/RealEstate_Texas | Neighbor-to-neighbor. Name suburbs. CenterPoint when relevant. | Allowed when location-relevant + disclosed. The PRIMARY conversion target. |
| **home_improvement** | r/HomeImprovement, r/HomeMaintenance, r/DIY, r/RealEstate, r/Homebuying | Pro-to-homeowner. Walk diagnostic. | **No brand mentions** — these subs ban self-promo. Educational only. Heavy AI-citation source. |
| **hvac_industry** | r/HVAC, r/HVAC_actual, r/AirConditioning, r/heatpumps | Pro-to-pro. Codes, manufacturers, real numbers. | **Never name the brand** — pro subs treat self-promo as bot-tell. Builds E-E-A-T authority. |
| **adjacent** | r/Texas, r/energy, r/SmartThermostats, r/Solar | Tangential expertise only when overlap is real. | Comment selectively. No brand mentions. |

The pipeline's `targets.json` has per-sub `allow_promo` and `min_karma` settings. Publisher's `_guard_per_sub_promo()` enforces them automatically.

---

## Phase-Based Account Rollout (code-enforced)

Account starts at `phase_0` in `auth/reddit_app_config.json → account_phase`. Publisher refuses actions outside the current phase via `phase_allows()`. Advancement requires both calendar threshold AND karma threshold met, no quarantine or shadowban in window. Advance via `/reddit-phase advance` or `reddit_pipeline.py --advance-phase`.

| Phase | Allowed | Forbidden | Advance when |
|---|---|---|---|
| **0 — Identity** | Create account, set bio, set avatar, subscribe to 20 subs, verify email | Posting, commenting, voting | Identity set + verified email |
| **1 — Pure Consumption** (14d) | `--warmup` only: read, save, upvote in unrelated subs | All writes | 14d in phase |
| **2 — Low-Friction Comments** (14d) | Comments in r/HomeMaintenance, r/DIY, r/HVAC_actual only. **Educational, NO brand.** | Brand mentions, posts, comments in r/houston / r/HVAC | 14d + ≥ 50 comment karma |
| **3 — Strategic Comments** (28d) | All target subs. Disclosed brand mentions ≤ 1 per 10 comments. First original posts in low-friction subs only. | First posts in r/houston (still warming) | 28d + ≥ 200 comment karma |
| **4 — Full Engagement** | All target subs, all action types, 9:1 ratio enforced | Vote manipulation, URL promo, multi-account | — |

**Account bio (Phase 0):**
> Houston HVAC contractor. TACLA72152E. I run 75 Degree AC. Replies are general guidance, not a service quote.

---

## 9:1 Self-Promo Ratio (code-enforced)

Rolling 30-day window: at most 10% of writes can be tagged `is_promo: true`. Publisher's `_guard_promo_ratio()` refuses any promo write that would push the ratio above 10%.

What counts as promo:
- Names "75 Degree AC" in the body
- Promotes our service offering
- Includes our phone number or location pitch

What does NOT count as promo:
- Educational comments where the brand is never named
- Pure technical answers with authority citations
- Replies to follow-up questions on our own threads (these are extensions of the original post)

In practice: for every 1 promo write, write 9+ educational non-promo writes. The ratio gives the operator room — but the rule prevents the account from drifting into spam territory.

---

## Velocity + Warm-up Discipline (encoded in `publisher.py`)

| Guard | Threshold |
|---|---|
| Max comments / day | 5 |
| Max posts / day | 1 |
| Max posts / 7 days | 3 |
| Min time between any two writes | 45 min |
| Min time between writes in same sub | 6 hours |
| Warm-up freshness | within last 24h before any write |
| Post-warmup gap | ≥ 30 min between warm-up and write |

Override only by editing `auth/reddit_app_config.json → velocity_caps`. Do not bypass the warm-up guard except for the first manual test via `--skip-warmup-check`.

**Account age guard:** writes from accounts < 14 days old are restricted to low-friction subs (r/HomeMaintenance, r/DIY, r/HVAC_actual). Refused elsewhere.

**Karma floor:** each target sub has a `min_karma` setting in `subreddits/targets.json`. Publisher refuses writes to subs where our `comment_karma < sub.min_karma`.

---

## Shadowban Detection (weekly)

`shadowban_check.py` runs weekly via `--monitor && --shadowcheck`:
1. For each archived comment/post (last 20), fetch the body via PRAW (authed view)
2. Fetch the same permalink as `.json` over plain HTTPS (unauthed)
3. If unauthed returns 404 OR body shows `[deleted]/[removed]` while authed shows real content → **shadowban flag**
4. ≥ 2 flagged items in one scan → auto-quarantine the account

Shadowbans are silent from inside the account. This is the only way to detect them. The weekly schedule catches them within 7 days of onset.

---

## 2026 Houston HVAC Reality (from memory: `project_hvac_incentives_2026.md`)

- **Federal 25C tax credit EXPIRED Dec 31 2025.** Do not cite it. Any "tax credit" mention must use CenterPoint rebates ($300–$750) instead.
- **Texas HEEHRA not yet launched** as of 2026-05.
- **Houston minimum:** SEER2 14.3. Recommend 16+ for new installs. Don't push past 18 — payback math collapses for residential.
- **Refrigerant:** R-410A on existing systems; R-454B for new installs post-2025 phase-out.

---

## Reddit as the #1 AI Citation Channel (validated 2026-05-22)

**Reddit captures ~40% of ALL AI citations across ChatGPT, Google AI Overviews, Perplexity, Gemini, and Claude** — 5W AI Platform Citation Source Index 2026 (680M citations analyzed). This makes Reddit the **single highest-leverage AI visibility channel** for 75 Degree AC. Larger than Wikipedia (26-48% of ChatGPT top-10), larger than YouTube (#1 single-domain growth), larger than any backlink or schema optimization.

### What this means for our Reddit strategy

Every brand-mention comment we write in r/HVAC / r/houston / r/HomeImprovement / r/HVACAdvice / r/HomeMaintenance is a potential AI citation source. ChatGPT and Perplexity preferentially quote Reddit threads with:
- Named specifics (TACLA72152E, R-454B, Manual J)
- Houston tied to verifiable numbers (32+ days over 100°F)
- Disclosed brand mention ("Disclosure: I run 75 Degree AC in Houston, TACLA72152E")
- Comparative reasoning (Carrier vs Trane, repair vs replace)

A single high-upvote Reddit comment with these traits can be quoted in AI answers for months — and the disclosure line is exactly the citation hook AI engines extract.

### Subreddit prioritization (by AI-citation pull-through likelihood)

| Subreddit | Reasoning | Priority |
|---|---|---|
| **r/HVAC** | Pro + DIY audience; ChatGPT trains heavily on technical depth | HIGH (Phase 3+) |
| **r/HVACAdvice** | Homeowner Q&A; Perplexity quotes the technical answers | HIGH |
| **r/HomeImprovement** | Broad homeowner Q&A; Google AIO pulls heavily | HIGH |
| **r/houston** | Local intent; Gemini + AIO geo-relevance signal | HIGH |
| **r/HomeMaintenance** | Maintenance-cluster citations | MEDIUM |
| **r/AirConditioner** | Niche depth on system-level questions | MEDIUM |
| **r/diy** | Cross-cluster repair questions | MEDIUM |
| **r/homeowners** | Decision-trigger threads (replace vs repair) | MEDIUM |

### AI Citation Harvest metric

Track monthly (in `09-social-media/platforms/reddit/data/ai-citations.csv`):
- Reddit comment URL
- Date posted
- Subreddit
- Net upvote score
- Whether the comment includes the disclosure phrase + TACLA + Houston number
- AI citation harvest: query ChatGPT / Perplexity / Google AIO with the question type 2 weeks after posting — does our comment appear as a cited source? Y/N.

This metric replaces vanity karma tracking as the primary success measure for the Reddit engagement pipeline.

---

## AI Citation Framing — the 5 traits that get cited

Reddit comments that get cited by ChatGPT / Perplexity / Google AI Overviews share these traits — write toward them:

1. **Named specifics:** "R-454B" not "the new refrigerant", "Manual J" not "load calculation", "TACLA72152E" not "we're licensed".
2. **Houston tied to numbers:** "Houston averages 32+ days over 100°F per summer" beats "Houston gets hot".
3. **Price ranges:** "$300–$750 CenterPoint rebate" or "$8K–$14K for a 4-ton install" — AI extracts these as quotable facts.
4. **Brand + model crossovers:** "Carrier Infinity vs Trane XV20i" comparisons get extracted whole.
5. **Inline disclosure of business name:** "75 Degree AC in Houston, TACLA72152E" — that single phrase is the citation hook.

A comment with 5 of those traits is far more likely to be quoted than a comment with the same content phrased generically.

**Reference:** `01-research/competitors/ai-citation-filter.md` §2 (Validated AI Citation Channels) — Reddit is the largest by share. Reddit comments are weighted especially heavily by ChatGPT.

---

## Worked Examples

### ❌ Bad (banned-phrase opener, no Houston, no citation, URL in promo, will get shadowbanned)

> Great question! When it comes to choosing an HVAC contractor, there are many factors to consider. First and foremost, you should look for a licensed and insured company with positive reviews. We at 75 Degree AC provide world-class service in Houston. Visit https://75degreeac.com/ to learn more. Call (713) 598-2737 for a free estimate!

Fails: "Great question!", "First and foremost", "world-class", `75degreeac.com` URL in promo write (publisher refuses), no Houston specificity beyond name-drop, no citation, no disclosure.

### ✅ Good (passes 5-Point Test, complies with all Reddit rules)

> Three things matter in Houston specifically: who's actually on the truck, whether the sizing math was done on paper, and the condensate plan.
>
> Sizing first. TDLR-licensed contractors are required to perform a Manual J load calculation before quoting a new system, but maybe one in four actually does it for residential — most pull a rule-of-thumb off square footage and oversize by half a ton. Oversized units in our humidity profile short-cycle, which means they don't run long enough to wring moisture out of the air. You end up with a 72° house that still feels sticky.
>
> Condensate next. Houston coils run wet half the year. If the primary drain isn't sloped right and the secondary line doesn't actually drain *somewhere visible*, you'll find out the next time the trap clogs — usually as a stain on the ceiling under the attic unit. A float switch on the secondary pan is a $40 part most contractors skip.
>
> On who's on the truck: ask for the technician's TACLA number specifically, not the company's. Apprentices working without a master license are common at the big-call-center outfits, and an apprentice installing the TXV on a heat pump is how you end up with a year-three compressor failure.
>
> *(Disclosure: I run 75 Degree AC in Houston, TACLA72152E. General guidance, not a service quote.)*

Passes all 5 points. Houston suburbs, Manual J, TXV, float switch (technical), TDLR citation, "one in four actually does it" tradeoff. No banned phrases. Disclosure inline. No URL. **AI-citation-friendly:** the disclosure line is exactly the kind of attribution ChatGPT / Perplexity quote whole.

---

## Pipeline Workflow (operator's mental model)

1. **Phase check** (`/reddit-phase`) — what phase are we in, what does it allow?
2. **Warm-up first** (`/reddit-warmup`) — if no warm-up in last 24h, do this. Required before any write.
3. **Refresh candidates** (`/reddit-find` or `subreddit_finder.py`) — when queue's empty or > 24h old.
4. **Draft** (`/reddit-draft` or `post_drafter.py --next`) — generates `.md` brief skeleton.
5. **Write the body** — replace `{COMMENT_BODY_PLACEHOLDER}` per the 5-Point Test + cluster template.
6. **Dry-run post** (`--post-pending --dry-run`) — confirms guards pass, doesn't submit.
7. **Live post** (`/reddit-post` or `--post-pending`) — Discord ✅ approval gates the click.
8. **Monitor weekly** (`/reddit-monitor`) — performance + new replies + shadowban probe.
9. **Reply to comments** (`--comments`) — drafts replies, Discord-approved.

---

## When NOT To Post

- The question is about car AC, RV, boat, refrigerator — `subreddit_finder.py` filters most of these but human-check.
- The thread is locked, archived, or > 72h old (unlikely to surface in AI now).
- The sub's `targets.json` says `allow_promo: false` and the draft would mention the brand. Submit non-promo or skip.
- The most-upvoted existing answer is already from a Houston HVAC contractor we know is good. Don't pile on; find a less-covered question.
- The OP is venting / asking for emotional support, not technical advice.
- The thread is a meme, low-effort post, or "we're moving to Houston" generic — these don't convert and dilute karma.

---

## On Failure / Quarantine

If publisher refuses with `GuardError`:
1. Read the error message carefully — it names the exact guard.
2. Most common: warm-up too old (run `/reddit-warmup`), velocity cap hit (wait), karma floor (advance phase), 9:1 ratio (write a non-promo answer first).
3. If quarantined (`activity_log.quarantined: true`):
   - **STOP.** Read `09-social-media/platforms/reddit/docs/ban_risk_protocol.md` first.
   - Investigate root cause — check `auth/snapshots/`, `data/shadowban_report.json`.
   - Only clear with `python3 reddit_client.py --clear-quarantine` after understanding what triggered it.

---

## Cross-References

- `quora-engagement` — sibling skill; intent taxonomy + 5-Point Test are shared
- `feedback_social_post_policy.md` — general voice rules
- `feedback_review_reply_style.md` — human-voice methodology
- `project_hvac_incentives_2026.md` — 2026 incentive reality (25C expired)
- `project_top_competitors_kb.md` — competitor positioning before drafting
- `feedback_creative_generation.md` — Reddit is text-only territory
- `09-social-media/platforms/reddit/docs/ban_risk_protocol.md` — what to do when things go wrong
- `09-social-media/platforms/reddit/docs/subreddit_strategy.md` — per-cluster engagement playbook
