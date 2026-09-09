# Research Inputs — Data Source Map

How to extract what you need from each source in Phase 1. Read the source fully the first time; use this as a fast lookup on later runs.

---

## 1. Business facts

| File | Keep handy |
|---|---|
| `business-info.md` | Phone, address, hours, USPs, license #, years in business, social links |
| `services-list.md` | Exact service wording (use these phrases in post bodies for entity matching) |
| `service-areas.md` | Zip codes per neighborhood — pull when a post needs geo specificity |

---

## 2. Post copy standards (client-specific, override defaults)

Source: `04-gmb/profiles/houston/calendars/master/annual-calendar-2026-2027.md` — read lines 1–40 (the "POST COPY STANDARDS" block).

Key rules the skill enforces:
- First line must contain primary keyword + "Houston" or named suburb
- No phone in body (Google policy per this client's calendar)
- 2–3 trust signals, 1–3 emojis
- 1200–1450 char target (long-form pipeline)
- No hashtags, no all-caps sentences, no external URLs

If this file is updated, the skill follows the new standard — don't hard-code copy rules.

---

## 3. Post queue (what's recently used)

File: `04-gmb/profiles/houston/posts/queue.json`

Structure:
```json
{
  "posted": { "template_id": "YYYY-MM-DD", ... },
  "history": [ { "date", "template_id", "slug", "char_count", "location" } ]
}
```

How to use:
- **Exclude** any `template_id` in `posted` that was used within the last 40 days.
- **Inspect** `history` to see location cadence — if last 3 posts all had `location: "houston"`, next post must name a specific suburb.
- **Sort** `history` desc by date, read the last 5 entries to sense the current rotation.

---

## 4. Template library

File: `04-gmb/profiles/houston/posts/templates.json`

Structure: top-level keys are seasons (`pre_summer`, `summer`, `fall`, `winter`, `year_round`). Each season contains an array of templates:

```json
{
  "id": "pre_summer_tune_up",
  "title": "Get Your AC Ready Before the Houston Heat Hits",
  "summary": "300–600 char source text that copy_builder.py expands to 1200–1450",
  "call_to_action": "BOOK",
  "cta_url": "https://75degreeac.com/ac-tune-up-houston-tx/",
  "photo_hint": "Technician performing AC tune-up outdoors"
}
```

How to use:
- Filter to the current season first (today's date → season).
- Remove IDs in `queue.json` `posted` map.
- Remaining = candidates. Pick the one that best matches your analyzed keyword + geo.
- If none fit, author a new template (append to same JSON under correct season key, unique `id`).

---

## 5. GSC keyword gaps (the biggest single research input)

File: `03-gsc/data/queries-202604.csv`
Columns: `query, clicks, impressions, ctr, position`

Shortlist rule — "striking distance" keywords that a post can lift:
- `impressions >= 50`
- `position >= 5 AND position <= 20`
- `ctr <= 3.0` (headroom to grow)
- query mentions a service or location (filter out brand-only terms like "75 degree ac")

Example from current data:
```
ac repair houston       clicks=13  impressions=4771 ctr=0.27  position=12.0   ← big target
hvac houston            clicks=9   impressions=528  ctr=1.7   position=35.8   ← too far, skip
hvac contractor houston clicks=1   impressions=269  ctr=0.37  position=18.2   ← good target
hvac installation houston impressions=461 position=22.7                       ← moderate target
```

Pick ONE primary + 2 related secondaries. The primary goes in the first line + title. Secondaries appear naturally in the context/breakdown blocks.

---

## 6. GSC page performance (align CTA URL)

File: `03-gsc/data/pages-202604.csv`

Use it to confirm the CTA URL points to a page that already has GSC signal. If the landing page has 0 impressions, Google doesn't see it as the best destination for the keyword — pick a page that does.

---

## 7. GA4 geography (optional — suburb rotation)

File: `03-gsc/data/ga4_geography.csv` (if present)

Use to prioritize which suburbs deserve a geo-targeted post this week. Higher session counts = warmer audience = better post ROI for that suburb.

---

## 8. Competitor signals (angle gaps)

File: `01-research/competitor-analysis.md`

Read the "Weaknesses" sections. Example gaps pulled from current data:
- Abacus: no neighborhood content → 75 Degree AC can dominate neighborhood-specific posts
- Abacus leads with financing → 75 Degree AC can differentiate with speed/same-day
- Multi-service competitors dilute HVAC authority → lean hard into HVAC specialist positioning

Use these gaps to pick *angles* competitors aren't covering, not to copy their language.

---

## 9. Weather / seasonal trigger (the "why today" hook)

Primary source: `WebFetch https://www.weather.gov/hgx/` → "What's the high temp, rain chance, and any active advisories for Houston today?"

Fallback: `WebSearch "Houston weather [today's date]"` or `WebSearch "Houston heat advisory [current month]"`.

What to extract:
- Today's high / heat index
- Active advisories (heat, freeze, storm)
- 7-day forecast trend (getting hotter, cold front coming)

Apply it:
- Heat index > 100 → emergency repair angle
- 80–95°F → tune-up / "before peak hits" angle
- 65–80°F → installation / maintenance / thermostat upgrade angle
- Cold front → furnace / heat pump angle
- Rain/storm event → post-storm inspection angle

If weather lookup fails, infer from date + `references/seasonal-houston.md`.

---

## 10. Top GBPs in SERP (differentiation)

Run `WebSearch "ac repair houston"` or `"hvac houston"` with today's date. Look at the top 3 local-pack businesses. Note:
- What are they currently posting about (if visible)?
- What's the angle they own (financing, speed, reviews, price)?
- What angle is *nobody* covering that fits 75 Degree AC's USPs?

Write one line in the research notes: "Competitor gap: [specific angle]". This goes into the Phase 2 hook angle.

---

## 11. GBP Performance API (optional, if available)

If the client has Business Profile Performance API access (check `04-gmb/auth/`), pull last-30d post performance to see which template angles drove the most views / CTR and lean into similar angles for the new post. If not available, skip.

---

## Fast research template (copy into your notes)

```
Date: YYYY-MM-DD  (day of week: ___)
Weather: ___°F, advisory: ___
Season: pre_summer / summer / fall / winter / year_round

GSC top 3 targets (pos 5–20, imp ≥ 50):
  1. "___" — imp ___, pos ___, ctr ___
  2. "___" — imp ___, pos ___, ctr ___
  3. "___" — imp ___, pos ___, ctr ___

Recent posts (last 40d):
  - template_id on YYYY-MM-DD → exclude
  - ...

Eligible templates this season:
  - id, id, id

Last 3 geo targets: Houston, Houston, Houston → next: Katy (due)

Competitor angle gap: ___

Hook: ___
```
