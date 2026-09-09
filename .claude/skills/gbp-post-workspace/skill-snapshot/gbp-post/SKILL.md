---
name: gbp-post
description: >
  Research-first Google Business Profile post creator for 75 Degree AC. Pulls real data
  (GSC queries, post queue history, Houston weather, competitor GBPs, existing calendar)
  BEFORE drafting, then outputs a template-format post ready for post_pipeline.py.
  Activates when the user asks to "write a GBP post", "draft a GBP update", "create
  today's GBP post", "generate a new GBP template", "GBP post for [season/topic]",
  or anywhere a single post or small batch needs to be created with current context.
  Use this skill instead of gbp-posting methodology whenever the task is to actually
  create the post (not plan or strategize).
version: 1.0.0
client: 75 Degree AC
---

# GBP Post — Research-First Creator for 75 Degree AC

## Why research-first

Most GBP posts fail because they recycle generic HVAC copy. The ones that drive calls, CTR, and local pack visibility are grounded in **what's happening right now** — a keyword the site ranks #8 for and could push to #5, a suburb that hasn't been geo-targeted in 6 weeks, a heat advisory hitting Houston tomorrow, or a hook no competitor is using. Skipping research produces filler. Doing it produces posts that earn their slot.

This skill enforces a 5-phase workflow: **Research → Analyze → Brief → Draft → Output**. Do not skip to Draft. The research phase is the skill's whole value.

## When this skill runs

- "Write a GBP post for [this week / today / May / emergency repair]"
- "Draft a new GBP template"
- "Create a post for [suburb / service]"
- "GBP post about [topic]"
- User is working through `04-gmb/` and wants a single post, not the whole calendar

For full calendar planning or methodology questions, defer to the `gbp-posting` skill instead.

---

## Critical rules (fail-fast — check before finalizing any post)

These rules are hard constraints. If a draft violates any of them, it is not publishable. Verify all four before writing the output file.

1. **NO phone number in the post body.** The number `(713) 598-2737` must NEVER appear anywhere in the post body text. Not in the hook, not in the CTA line, not in trust signals, not as "call us at" or "tel:" or any variant. Google's policy flags phone numbers in post text; the CTA button handles the call. The phone exists only in the canonical business facts, not in any piece of copy you write.
2. **Character count must be 1200–1450.** Below 1200 or above 1450 = reject and rewrite.
3. **First line must contain the primary keyword + "Houston" or a named suburb.** This is what Google indexes.
4. **CTA URL must be a real, live 75degreeac.com page.** If unsure, verify with curl or WebFetch before writing. A CTA pointing at a 404 is worse than no CTA.

If the user asks for a variant that breaks these rules, push back, explain why, and propose a compliant version. Do not silently relax the rules.

---

## Humanization (the post must not read like AI)

GBP post bodies are customer-facing. If a post reads like ChatGPT wrote it, customers tune out and Google's spam signals increase. Write like a Houston HVAC tech who types fast, knows the city, and hasn't been to a marketing seminar.

### Punctuation bans (hard — will fail a pre-write grep)

- **No em dashes (—).** Use a period, a comma, or parentheses. Em dashes are the #1 AI fingerprint.
- **No en dashes (–)** in body copy either. Exception: numeric ranges like `1–3 months` are fine.
- **No semicolons** in the post body. Break into two sentences.
- **No ellipses (...)** for dramatic effect.
- **No hashtags.**

### Phrase and pattern bans (AI-slop detector)

If your draft contains any of these, rewrite. They are the exact phrases and shapes LLMs over-produce:

- "In today's [anything] world"
- "Look no further"
- "Whether you're [X] or [Y]"
- "Navigate / navigate the complexities of"
- "Delve into / deep dive into"
- "Seamlessly / seamless"
- "Elevate / unlock / transform / leverage / robust / cutting-edge"
- "Rest assured"
- "Top-notch / one-stop shop"
- "Game-changer / revolutionize"
- "At its core / at the end of the day"
- "When it comes to [X]"
- "Stand out from the crowd"
- "Truly / essentially / fundamentally" (remove; they add nothing)
- "Ensure" (say "make sure" or drop it)
- "That said,"
- "Plus," starting a sentence
- Tricolons / rule-of-three lists where every item has the same length ("fast, reliable, affordable")
- "Not X. Not Y. Z." parallel cadence
- Starting consecutive sentences with the same word
- Every sentence roughly the same length (AI defaults to 15–20 words; mix it up — 4 words, then 22, then 11)

### Positive voice markers (what human Houston HVAC copy sounds like)

- Contractions are fine and preferred (it's, won't, you'll, we'll)
- Sentence fragments are fine when they punch. ("Same-day. Free estimate.")
- Specific numbers beat round numbers ("21-point inspection" > "comprehensive inspection")
- Specific local nouns beat generic ones ("Cinco Ranch" > "the suburb")
- One concrete, non-stock observation (attic temps, pollen clogging drain lines, compressor soft-starts on 86°F afternoons) is worth more than three generic lines of trust copy
- Ask a direct question occasionally. "Know when your filter was last changed?" Don't stack multiple rhetorical questions.

### The human test (apply before writing the output file)

Read your draft out loud. If any of these is true, rewrite:
- You used the word "ensure", "seamless", "solutions", or "needs" anywhere
- Two consecutive sentences have the same number of commas
- A list has three items of similar length and balanced grammar
- You can't imagine a Houston homeowner actually saying the sentence
- You used an em dash
- The post could be about any HVAC company in any US city

## The workflow

### Phase 1 — Research (mandatory, never skip)

Read **all** of these sources in parallel. Each feeds a different decision downstream.

| Source | File / URL | What you extract |
|---|---|---|
| Business facts | `business-info.md`, `services-list.md`, `service-areas.md` | Phone, address, USPs, service list, geo list, current offers |
| Post copy rules | `04-gmb/gbp-posts-calendar.md` (standards section only, ~lines 1–40) | Char count target, keyword placement, phone-in-body rule, trust signals, emoji cap |
| Post queue | `04-gmb/posts/scheduled/queue.json` | `posted` map = templates used in last ~40 days (exclude these); `history` = recency and cadence |
| Template library | `04-gmb/posts/templates/post_templates.json` | 41 existing templates grouped by season; use as starting point or write a new one |
| GSC keyword gaps | `03-gsc/data/queries-202604.csv` | Queries with >100 impressions and position 5–20 — biggest ranking-lift targets |
| GSC page performance | `03-gsc/data/pages-202604.csv` (if needed) | Which landing pages convert — align CTA URL to one of these |
| GA4 geography | `03-gsc/data/ga4_geography.csv` (if present) | Which suburbs drive traffic — rotate these into posts |
| Competitor signals | `01-research/competitor-analysis.md` | Angle gaps (e.g., Abacus has no neighborhood pages — exploit it in post copy) |
| Weather / seasonal trigger | WebFetch `https://www.weather.gov/hgx/` or WebSearch "Houston heat index [today's date]" | Current heat index, advisory, rain event — gives the post a *timely* hook |
| Top GBPs in SERP | WebSearch "ac repair houston" → scan top 3 GBP panels | What angles competitors ARE posting this week — find your differentiator |

See `references/research-inputs.md` for the full column-level map of each file, what to grep for, and how to shortlist candidates.

**Research output** — before moving to Phase 2, write a short inline research brief like this (keeps your reasoning auditable):

```
RESEARCH NOTES
- Today: 2026-04-21 · Houston forecast: high 86°F, sunny (pre-summer shoulder)
- GSC gap target: "ac tune up houston" — 180 impressions, position 14, ctr 0.5%
- GSC gap target: "ac repair cypress tx" — 64 impressions, position 22, ctr 0%
- Recent posts (last 40d): pre_summer_tune_up (4/20) — skip
- Templates eligible this season: pre_summer_filter, pre_summer_inspection, pre_summer_refrigerant, pre_summer_thermostat, pre_summer_duct_check
- Competitor gap: none of the top 3 Houston GBPs have posted about refrigerant leaks this week → angle opportunity
- Geo rotation: last geo post was "Houston" → next suburb due (rotate: Katy → Sugar Land → Woodlands → Cypress → Spring → Tomball)
```

### Phase 2 — Analyze

Make four decisions, each with a one-line justification. If you cannot justify a choice from the research, redo Phase 1.

1. **Primary keyword** — one GSC query, ideally position 5–20 with 50+ impressions. First line of the post body MUST contain this keyword + "Houston" or a suburb.
2. **Post type** — `What's New` (education/trust), `Offer` (with expiry, for conversion), or `Event` (dated campaign). Follow the calendar cadence: Mon=What's New, Wed=Offer, Fri=What's New or Event. If you don't know today's weekday, infer from context or ask.
3. **Template path** — reuse an eligible template from the library (recommended if one fits) OR author a new template entry. New templates must be added to `post_templates.json` with a unique `id`.
4. **Geo target** — name a specific neighborhood or suburb in the body if the rotation calls for it (every 3rd post). Default rotation order: Houston → Katy → Sugar Land → The Woodlands → Cypress → Spring → Tomball → Missouri City → Richmond → Pasadena → Baytown.

### Phase 3 — Brief

Before writing a single word of copy, fill in this brief. It goes in the output file as frontmatter so future-you can see what drove the decision.

```yaml
date: 2026-04-21
post_type: What's New        # or Offer, Event
template_id: pre_summer_refrigerant   # existing OR new slug
primary_keyword: "ac repair cypress tx"
secondary_keywords: ["refrigerant leak", "ac leak repair"]
geo_target: Cypress, TX
cta_button: CALL              # one of CALL, BOOK, LEARN_MORE, SIGN_UP, BUY, ORDER
cta_url: https://75degreeac.com/ac-repair-cypress-tx/
hook_angle: "Refrigerant leak detection — underserved by competitors this week"
weather_trigger: "86°F today, pre-summer — systems under first real load"
char_target: 1250   # must be 1200–1450
photo_hint: "Refrigerant gauges on AC service kit"
```

### Phase 4 — Draft

Write the post body to the frontmatter spec above. Follow these copy rules (from `04-gmb/gbp-posts-calendar.md`, non-negotiable for this client):

| Rule | Detail |
|---|---|
| First line | Primary keyword + "Houston" or named suburb. This is what Google indexes and shows in search previews. |
| Phone numbers | **Do NOT** put the phone number `(713) 598-2737` anywhere in the post body. Against current Google policy per the client calendar. The CTA button handles the call. Re-read Critical Rule #1 if tempted. |
| Trust signals | Include 2–3 of: "Licensed TACLA", "Fully insured", "Since 2016", "Same-day service", "24/7 emergency", "All major brands (Carrier, Trane, Lennox, Goodman, Rheem)". |
| Emojis | 1–3 decorative/leading emojis max per post (🌡️ for temp, 🚨 for emergency, etc.). List-anchor glyphs (✅, —, •) used as bullet formatting are NOT counted against this cap, but keep lists ≤6 items regardless. Never use emojis decoratively (🎉✨🙌 etc.). |
| Char count | 1200–1450. Use the 6-block long-form structure (see `references/post-formulas.md`): hook → context → breakdown → brands/trust → local → soft CTA. |
| Forbidden | No hashtags. No all-caps sentences (all-caps words in a list are fine). No external URLs (the CTA URL is separate). No stock-photo language. |
| Voice | Direct, confident, Houston-local. Write like a technician who knows the city's climate and housing stock, not a marketing team. |

If writing under 1200 chars or over 1450, expand/tighten the context + breakdown blocks — never pad the CTA.

### Phase 5 — Output

**Pre-write checklist — run these four greps against your draft body before saving. If any fail, rewrite.**

- `grep -E '\(?713\)?.?598.?2737|tel:'` → zero matches (no phone anywhere in body)
- `grep -cE '[—–;]'` → em dash/en dash/semicolon count must be zero in body (numeric ranges `1-3 months` use a hyphen, not en dash)
- `grep -iwE 'ensure|seamless|unlock|leverage|robust|delve|elevate|navigate|top-notch|one-stop|game-changer|rest assured|look no further|in today'` → zero matches (AI slop detector)
- Body character count → must be 1200–1450
- First non-emoji word sequence of line 1 → must contain the primary keyword + "Houston" or the named suburb
- CTA URL → must resolve 200 (verify with curl or WebFetch; if unsure, default to homepage and flag)

**Single-post output** — write two files:

**1. Draft file** → `04-gmb/posts/drafts/YYYY-MM-DD_<slug>.md`

```markdown
---
{frontmatter from Phase 3}
---

## Post Title
<Title, 58 chars max, keyword-rich>

## Post Body
<1200–1450 char body — NO phone number anywhere>

## Research Notes
<Paste the Phase 1 research notes block here — audit trail>
```

**2. Template entry** (if Phase 2 chose "new template") → append to `04-gmb/posts/templates/post_templates.json` under the right season key. Use the 300–600 char `summary` field (the pipeline's `copy_builder.py` will expand it to 1200–1450 at publish time). Full template schema in `references/post-formulas.md`.

**Batch output format** (see Batch mode section for rules) — write ONE shared research file + N post files:

```
04-gmb/posts/drafts/YYYY-MM-DD_batch/
├── RESEARCH_SWEEP.md      ← single shared research notes (the Phase 1 output, once)
├── YYYY-MM-DD_post-1-<slug>.md   ← post body + frontmatter + short research_refs pointer
├── YYYY-MM-DD_post-2-<slug>.md
└── YYYY-MM-DD_post-3-<slug>.md
```

Individual post files in batch mode omit the full research appendix — they include only a `research_refs:` field in frontmatter pointing to the shared RESEARCH_SWEEP.md + the specific data rows that drove this particular post (e.g., `research_refs: "RESEARCH_SWEEP.md § GSC gap target #2 + Competitor gap bullet"`). This is the efficiency win of batch mode — research once, reference many times.

Tell the user what to run next:
```
Draft ready: 04-gmb/posts/drafts/2026-04-21_ac-repair-cypress-refrigerant-leak.md
To publish:  cd 04-gmb/scripts && python3 post_pipeline.py --template pre_summer_refrigerant
Dry run:     python3 post_pipeline.py --template pre_summer_refrigerant --dry-run
```

## Reference files

Load these only when the workflow points to them:

- **`references/research-inputs.md`** — column-level map of every data source, grep patterns for GSC gap-finding, competitor-scan checklist, weather-source fallback chain. Read when starting Phase 1 if unsure what to pull from a file.
- **`references/post-formulas.md`** — 6-block long-form structure template, trust-signal bank, CTA matrix, hook formulas by post type, full template JSON schema, title rules. Read before writing Phase 4 copy.
- **`references/seasonal-houston.md`** — month-by-month Houston HVAC demand context, keyword seasonality, weather triggers, campaign themes. Read in Phase 2 to pick the right seasonal angle.

## Guardrails

- **Never post a template used in the last 40 days.** Check `queue.json` first. If the user explicitly overrides, ask them to confirm.
- **Never invent keywords.** If GSC shows no data for the keyword you want to target, say so and pick a keyword that has GSC signal. Posting about "ac repair spring tx" when there are zero impressions for that phrase is wasted effort.
- **Never copy competitor phrasing verbatim.** Read their posts for angle and topic inspiration only.
- **Never skip the weather/date check.** A pre-summer tune-up post on June 15 is off-season and feels tone-deaf. The date anchor is what makes the post feel current.
- **If any Phase 1 source is missing,** state it explicitly in the research notes (e.g., "GA4 geography CSV not found, skipping suburb-by-traffic rotation") and proceed with what you have. Do not fabricate data.

## Batch mode

If the user asks for multiple posts at once (e.g., "draft this week's 3 posts"):

1. **Run Phase 1 ONCE.** Write the full research notes block to a single shared file: `04-gmb/posts/drafts/YYYY-MM-DD_batch/RESEARCH_SWEEP.md`. This file is the audit trail for the whole batch.
2. **Loop Phases 2–5 per post.** Each per-post file is lean — frontmatter + title + body + a `research_refs:` line pointing back to the sections of RESEARCH_SWEEP.md that drove that specific post. Do NOT repeat the full research block in each post file.
3. **Rotate across the batch** — this is what makes batch mode valuable vs. 3 single-post calls:
   - Post type: What's New / Offer / What's New-or-Event (matching Mon/Wed/Fri)
   - Geo target: no suburb repeated within the batch
   - Primary keyword: spread across different service categories (repair, install, tune-up, IAQ, emergency)
   - Trust signal mix: rotate which 2–3 signals appear per post
4. **Append new templates to `post_templates.json` in a single write** at the end, not per-post.

Why this matters: the research-once-reference-many structure is the whole efficiency argument for batch mode. Repeating the research block in each post file wastes tokens and makes drift harder to spot. The `research_refs:` pointer gives any reviewer a fast path from post back to source.

## Quick reference — canonical business facts

Use these *exactly*. Do not paraphrase or substitute.

- Business: 75 Degree AC
- Phone (CTA only, not post body): (713) 598-2737
- Address: 4800 W 34th St, Ste C50F, Houston, TX 77092
- Since: 2016
- License: TACLA (Texas)
- Hours: Mon–Sun 8am–8pm · Emergency 24/7
- Brands serviced: Carrier, Trane, Lennox, Goodman, Rheem, American Standard, Daikin
- USPs: Same-day service · 24/7 emergency · Free estimates · Licensed (TACLA) · Insured · Financing available · Fully-stocked vehicles
