---
description: Create a Pinterest pin — drafts brief (title/desc/alt/UTM link/KIE prompt) per the pinterest-engagement skill, generates 1000×1500 image via KIE AI, writes to queue
argument-hint: [topic in plain English — e.g. "pre-summer AC tune-up Houston" or paste full instructions]
---

Create a new Pinterest pin for 75 Degree AC using the `pinterest-engagement` skill methodology.

Topic / instruction: $ARGUMENTS

**Non-negotiables (from `pins/templates.json` + `pinterest-engagement` skill):**
- Title ≤ 100 chars (sweet spot 60–80), front-loaded keywords, no clickbait
- Description ≤ 500 chars (sweet 200–400), declarative, ≤ 5 hashtags treated as keywords
- Alt text ≤ 500 chars, describes the visual (Pinterest's visual search uses it)
- Destination link MUST include UTM: `utm_source=pinterest&utm_medium=social_organic&utm_campaign=<topic-slug>`
- One image only, 1000×1500 (2:3). No phone number, address, or URL ON the image
- Brand mark only — small "75 Degree AC · Houston" + logo bottom-right
- All 5 of the 5-Point Pin Test must pass (templates.json → `five_point_pin_test`)
- Banned phrases enforced (templates.json → `banned_phrases`)
- 2026 incentive reality — no federal 25C tax credit references (expired Dec 2025); use CenterPoint rebates instead

**Workflow:**
1. Classify intent (emergency / repair / install / maintenance / iaq / commercial / seasonal) from the topic
2. Read `09-social-media/platforms/pinterest/pins/templates.json` → pick the matching `intent_templates[cluster]` for hook formulas + design brief template + default link + must-mentions + hashtag pool
3. Read the matching `01-research/page-research/<slug>/research-pack.md` if one exists for the cluster, to ground the pin in real Houston specifics
4. Read `business-info.md` for current NAP + TACLA license + service areas
5. Read memory `project_hvac_incentives_2026.md` if the topic touches install / efficiency / tax credit (25C is expired — use CenterPoint $300–$750 rebates)
6. Draft title + description + alt + supporting points + KIE design prompt — apply the 5-Point Pin Test
7. Compose the brief JSON per the pin brief schema (see templates.json)
8. Write the brief into `09-social-media/platforms/pinterest/pins/queue/<pin-id>.json`
9. Generate the 1000×1500 image: `python3 06-meta-ads/ads-cli/scripts/generate_pin.py --brief 09-social-media/platforms/pinterest/pins/queue/<pin-id>.json` (defaults to writing PNG at `pins/images/<pin-id>.png`)
10. Print the queued brief summary + image path. **Do NOT auto-publish** — that's `/pin-post`.

**Pin brief schema (write exactly this shape):**
```json
{
  "pin_id": "pi-YYYY-MM-DD-<intent>-<topic-slug>",
  "intent_cluster": "emergency|repair|install|maintenance|iaq|commercial|seasonal",
  "topic": "{user's topic line}",
  "title": "...",
  "description": "...",
  "alt_text": "...",
  "destination_link": "https://75degreeac.com/services/.../?utm_source=pinterest&utm_medium=social_organic&utm_campaign=<slug>",
  "board_id": "{from auth/pinterest_app_config.json}",
  "kie_prompt": "{full design brief for KIE AI — uses intent template's design_brief_template as a base}",
  "supporting_points": ["...", "..."],
  "image_path": "absolute path to pins/images/<pin-id>.png",
  "generated_at": "{iso8601}",
  "status": "queued",
  "posted_at": null,
  "pin_url": null
}
```

**Acceptance:**
- `pins/queue/<pin-id>.json` exists with all fields populated
- `pins/images/<pin-id>.png` exists at 1000×1500
- Brief passes the 5-Point Pin Test
- Title is under 100 chars; description under 500 chars; alt under 500 chars
- Destination link has all three UTM parameters
- No banned phrases
- Output to terminal: pin_id + image path + title + chars summary
