# Post Formulas — Copy Structure & Templates

The rules and blocks for writing the post body in Phase 4. Everything here is pulled from `04-gmb/gbp-posts-calendar.md` and `copy_builder.py` behavior. Always read those files too — if they disagree with this document, they win.

## Hard rule before you start writing

**The phone number `(713) 598-2737` must NEVER appear anywhere in the post body.** This includes any variant: `713.598.2737`, `713-598-2737`, `+1 713 598 2737`, `tel:+17135982737`, or text like "call us at 713...". The CTA button handles the call. Violating this rule makes the post non-publishable regardless of how good the rest of the copy is.

---

## 6-Block long-form structure (1200–1450 chars)

The pipeline's `copy_builder.py` expands a short template `summary` into this 6-block layout. When you write the post directly (not via template), use this same structure so the copy feels consistent with everything else the pipeline produces.

**Block 1 — Hook (1–2 sentences, ~120 chars)**
Primary keyword + suburb in first line. Tension or curiosity driver. Leads with an emoji anchor if it maps to the topic (🌡️ temp, 🚨 emergency, ❄️ cooling, 🔥 heat, ⚡ electrical, 💨 airflow, 🧰 repair). **No em dashes. Period or comma instead.**

> 🌡️ AC repair in Cypress, TX. If your system is already running longer than it did last April, you're not imagining it.

**Block 2 — Context (2–3 sentences, ~200 chars)**
The "why this matters now." Weather anchor, Houston housing stock, utility rates, local event. Gives the post a right-now feeling. Mix sentence lengths. Short one. Then a longer one that earns its length.

> Cypress heat indexes hit the low 90s this week. Early enough that most systems haven't failed yet. Late enough that the weak ones are starting to show warning signs on afternoon runs.

**Block 3 — Breakdown (3–5 bullets or sentences, ~350 chars)**
The educational meat. What to check, what to watch for, why it matters. This is where the secondary keywords live naturally. Use hyphens or dashes as bullets, never em dashes. Keep bullet items at *different* lengths so the list doesn't feel AI-balanced.

> What we're seeing on pre-summer calls this week:
> - Refrigerant leaks that went quiet through the winter
> - Capacitors that survived last summer but won't survive this one
> - Drain lines clogged with spring pollen (Cy-Fair is worst for this)
> - Thermostats reading 3 to 5 degrees off after six months of not being checked
> Most of it is small money now. Big money in July.

**Block 4 — Brands / trust (1–2 sentences, ~150 chars)**
2–3 trust signals. This is non-optional. It's what makes a cold reader trust calling. Do NOT stack adjectives ("reliable, fast, professional"). Pick concrete nouns.

> 75 Degree AC has been the Cypress HVAC shop locals call since 2016. Licensed TACLA. Insured. Every major brand (Carrier, Trane, Lennox, Goodman, Rheem).

**Block 5 — Local (1–2 sentences, ~150 chars)**
Name the suburb. Name a neighboring area. Reinforces geo signal for Google. Don't force a comma list of suburbs if two names fit more naturally.

> Covering Cypress, Tomball, and the rest of northwest Houston. Most same-day visits are booked within a couple hours.

**Block 6 — Soft CTA (1 sentence, ~100 chars)**
Points to the action button (tap, book, schedule). **Never writes the phone number in this block or anywhere in the body.** The CTA button handles the call. Do not write "call (713) 598-2737", "tel:", "dial", or any equivalent. Do not use an em dash here either.

> Tap Call below for same-day service, or book online if later in the week works better.

Total: ~1150–1400 chars before spacing. Add line breaks between blocks for readability.

---

## Trust signal bank (rotate, don't repeat all of them in one post)

Pick 2–3 per post. Never use all of them — it reads like a checklist.

- Licensed TACLA
- Fully insured
- Houston HVAC contractor since 2016
- Same-day service available
- 24/7 emergency response
- All major brands — Carrier, Trane, Lennox, Goodman, Rheem, American Standard, Daikin
- Fully-stocked vehicles (most repairs on first visit)
- Free estimates, no surprise charges
- Financing available through multiple lenders
- Background-checked, uniformed technicians
- Residential & commercial

---

## CTA matrix

| Post intent | CTA button | Typical cta_url |
|---|---|---|
| Emergency repair | `CALL` | `https://75degreeac.com/emergency-ac-repair-houston/` |
| Same-day repair | `CALL` | `https://75degreeac.com/ac-repair-houston-tx/` |
| Scheduled tune-up | `BOOK` | `https://75degreeac.com/ac-tune-up-houston-tx/` |
| Install quote | `LEARN_MORE` | `https://75degreeac.com/ac-installation-houston-tx/` |
| Financing / offer | `LEARN_MORE` | `https://75degreeac.com/financing/` |
| IAQ / duct / air purifier | `LEARN_MORE` | `https://75degreeac.com/services/air-quality/` |
| Neighborhood post | `CALL` | `https://75degreeac.com/ac-repair-<neighborhood>-tx/` |
| Commercial | `LEARN_MORE` | `https://75degreeac.com/commercial-hvac-houston/` |

Always verify the URL returns 200 before writing it in — a CTA pointing to a 404 is worse than no CTA.

---

## Hook formulas by post type

**What's New (Monday — trust / education)**
- "Here's why [X] matters in Houston right now"
- "What we saw on 10 service calls last week in [suburb]"
- "Most Houston homes miss this one thing about [service]"
- "If your AC is doing [symptom], here's what's probably happening"

**Offer (Wednesday — conversion, always has expiry date)**
- "[$X] [service] — good through [date]"
- "Before [month], book your [service] at [price]"
- "[Suburb] residents — [limited offer] this week only"

**Event (Friday — dated campaign, seasonal)**
- "[Season] [campaign name] — [start] to [end]"
- Use for week-long pushes, seasonal kickoffs, holiday-tied campaigns

---

## Title rules (58 chars max)

- Primary keyword appears in title
- Suburb appears if the post is geo-targeted
- Front-load the important word — mobile truncates around 40 chars in some surfaces
- No emoji in title (body only)
- Title Case

Examples:
- ✅ `AC Repair Cypress TX — Refrigerant Leak Signs`
- ✅ `$89 AC Tune-Up Houston — Before Summer Hits`
- ❌ `The ultimate guide to refrigerant problems in your Cypress home` (too long, keyword buried)
- ❌ `🌡️ Summer's Coming!` (no keyword, has emoji)

---

## Full template JSON schema (for post_templates.json)

When Phase 2 decides to write a new template, append this structure to the right season array in `04-gmb/posts/templates/post_templates.json`:

```json
{
  "id": "snake_case_unique_id",
  "title": "Max 58 Chars — Keyword + Geo",
  "summary": "300–600 character seed text — copy_builder.py expands this to 1200–1450 chars at publish time. Include primary keyword in first sentence. 2 trust signals. 1 soft CTA.",
  "call_to_action": "CALL | BOOK | LEARN_MORE | SIGN_UP | BUY | ORDER",
  "cta_url": "https://75degreeac.com/<landing-page>/",
  "photo_hint": "Plain-English description of the ideal photo for this post"
}
```

Season keys (top-level in the JSON): `pre_summer` (March–May), `summer` (June–Sept), `fall` (Oct–Nov), `winter` (Dec–Feb), `year_round` (any time).

ID naming convention: `<season>_<topic>_<optional-qualifier>` — e.g., `pre_summer_refrigerant`, `summer_emergency_night`, `fall_furnace_tuneup`. Must not collide with existing IDs.

---

## Banned phrases and patterns (AI-slop guard)

These signal generic AI copy. Don't use them, even once. If you catch yourself typing one, stop and rewrite the whole sentence.

### Phrases that flag the post as AI-written

- "In today's [fast-paced / digital / modern] world"
- "Look no further"
- "Your one-stop shop"
- "Rest assured"
- "Top-notch"
- "State-of-the-art" (unless literal, e.g., "state-of-the-art heat pump")
- "Unlock the power of / unlock savings / unlock your"
- "At the end of the day"
- "At its core"
- "When it comes to [X]"
- "Don't hesitate to"
- "Whether you're [X] or [Y]"
- "Navigate / navigate the complexities of"
- "Delve into / deep dive into"
- "Seamless / seamlessly integrate"
- "Elevate your [anything]"
- "Transform your [anything]"
- "Leverage"
- "Robust"
- "Cutting-edge"
- "Game-changer / game-changing"
- "Revolutionize"
- "Stand out from the crowd"
- "Truly / essentially / fundamentally" (filler)
- "Ensure" (use "make sure" or drop the word)
- "Solutions" (say what you actually do)
- "Needs" as a noun ("your HVAC needs") — name the actual thing
- "That said,"
- "Plus," starting a sentence

### Structural/rhythmic patterns to avoid

- Em dashes (—) anywhere. Ever.
- En dashes (–) in prose. (Numeric ranges like `3-5°F` use a hyphen.)
- Semicolons in post bodies. Split into two sentences.
- Tricolons: three items of the same grammatical shape and length ("fast, reliable, and affordable")
- "Not X. Not Y. Z." parallel cadence
- Starting consecutive sentences with the same word or same subject
- Uniform sentence length (mix 3-word fragments with 20-word full sentences)
- Three rhetorical questions in a row
- Balanced "it's not just X, it's Y" constructions

### The rewrite test

If the post reads like it could be about any HVAC company in any US city, rewrite it. A Houston homeowner should recognize something specific: a Cy-Fair pollen problem, a heat index number that matches today, a subdivision name, a specific repair symptom. Specificity is the anti-AI.

---

## Length math

Target: 1200–1450 chars including spaces and line breaks. If writing directly (not via template):

- Block 1 hook: ~120
- Block 2 context: ~200
- Block 3 breakdown: ~350
- Block 4 trust: ~150
- Block 5 local: ~150
- Block 6 CTA: ~100
- Line breaks between blocks: ~20
- **Total: ~1090, leaves 110–360 for expansion**

Use the buffer on Block 2 (context) or Block 3 (breakdown) — those are the blocks that reward depth. Never pad Block 6 (CTA) or the title.
