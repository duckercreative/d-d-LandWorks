---
name: pinterest-engagement
description: >
  Pinterest pin creation, publishing, and analytics methodology for 75 Degree AC.
  Covers the 7-cluster intent taxonomy (emergency / repair / install / maintenance
  / iaq / commercial / seasonal), the 5-Point Pin Test, title + description
  formulas, alt text rules, UTM destination link convention, KIE AI visual style
  brief, board strategy, banned phrases, and weekly analytics signals.
  Activates whenever the user mentions Pinterest, creating a pin, posting a pin,
  Pinterest analytics, Pinterest boards, or anything about the Pinterest pipeline.
version: 1.0.0
client: 75 Degree AC
---

# Pinterest Engagement — 75 Degree AC

## Why This Skill Exists

Pinterest is the only major social platform that behaves like a *visual search engine*. Pins surface for months to years after publication on saved boards and in Pinterest's own search results — unlike Facebook/Instagram/X where reach decays in hours. That changes the brief: a pin is closer to a service page than to a status update. Title + description must front-load keywords that homeowners actually search; the image has to scan in under three seconds; the destination link has to land on a page that converts.

This skill is the methodology layer for the Pinterest platform at `09-social-media/platforms/pinterest/`. It governs:

- Pin title + description + alt text formulas
- Image visual style (Pinterest favours editorial/infographic, **not** ad-creative)
- Destination link UTM conventions
- 5-Point Pin Test (every pin must clear before publish)
- 7-cluster intent taxonomy
- Board strategy (single board → 4-board expansion)
- Banned phrases + 2026 compliance (no expired federal incentives)

---

## Hard Constraints (from `pins/templates.json`)

- **Title:** ≤ 100 chars, sweet spot 60–80, front-load keywords, no clickbait
- **Description:** ≤ 500 chars, sweet 200–400, declarative, ≤ 5 hashtags (Pinterest treats hashtags as keywords, not tags)
- **Alt text:** ≤ 500 chars, written for Pinterest's visual search (describe what's IN the image, including text overlays)
- **Image:** exactly 1000×1500 (2:3 aspect ratio), generated via `06-meta-ads/ads-cli/scripts/generate_pin.py`
- **One link only** per pin, on the *pin metadata*, not in the image
- **No phone number, address, or URL ON the image** — brand mark only ("75 Degree AC · Houston")
- **No CTA button on the image** — no "Book Now", "Call Today", trust-strip pill, etc.
- **Destination link UTM (required):** `utm_source=pinterest&utm_medium=social_organic&utm_campaign=<topic-slug>`

---

## The 5-Point Pin Test

Every pin must pass all five before `/pin-post`:

1. **Houston specificity** — pin references Houston, Harris County, or a named suburb (Katy, Sugar Land, Cypress, etc.)
2. **Technical specific** — at least one concrete metric, part name, code, or standard (SEER2 14.3, Manual J, MERV-13, R-454B, TACLA, etc.)
3. **Visual hierarchy** — headline scans in < 3 seconds; no wall of text on the image
4. **Light background** — no aggressive brand-color fill (cream / off-white / pale neutral)
5. **Brand mark only** — image has no phone number, address, URL, or CTA button. Only "75 Degree AC · Houston" + logo bottom-right.

A pin that fails any single point gets rewritten. Binary, not gradient.

---

## 7-Cluster Intent Taxonomy

| Cluster | When to use | Link target |
|---|---|---|
| **emergency** | Same-day AC failure, no cooling in heat | `/services/emergency-ac-repair/` |
| **repair** | Specific failure mode, diagnostics, common causes | `/services/ac-repair/` |
| **install** | New unit, replacement, brand selection, SEER2, sizing | `/services/ac-installation/` |
| **maintenance** | Spring/fall tune-up, filters, prevention | `/services/ac-maintenance/` |
| **iaq** | Air ducts, UV, purifier, humidity, mold | `/services/indoor-air-quality/` |
| **commercial** | Office, restaurant, rooftop, multi-zone | `/services/commercial-hvac/` |
| **seasonal** | Pre-summer May-June, hurricane Aug-Sept, freeze Dec-Feb | matches the topic (often maintenance or install) |

`pins/templates.json` has hook formulas, design-brief templates, must-mentions, and hashtag pools per cluster.

---

## Pin Title Formulas (front-load keywords, no clickbait)

✅ **Do**
- "Houston Pre-Summer AC Tune-Up: 4 Things to Check in May"
- "Why Your AC Is Blowing Warm Air in Houston (5 Causes)"
- "Manual J Sizing for Houston Homes — Why It Matters"
- "Hurricane Season HVAC Prep for Texas Homeowners"

❌ **Don't**
- "You Won't Believe What's Killing Your AC" → banned (clickbait)
- "This One Weird Trick Fixes AC Forever" → banned (clickbait)
- "🔥🔥🔥 EMERGENCY AC REPAIR 🔥🔥🔥" → emoji-spam, no specificity
- "75 Degree AC" → brand-only title — gives Pinterest no surface signal

Pinterest's algorithm ranks pins by *keyword match* + *engagement velocity in first 7 days*. Front-loaded specific keywords in the title earn long-tail surface impressions for months.

---

## Description Formula

```
[Sentence 1 — declarative statement of what the pin solves or explains, with the primary keyword]
[Sentence 2 — Houston-specific qualifier or technical detail that proves expertise]
[Sentence 3 — soft CTA describing what they get on the destination link]
[3–5 hashtags as keywords — #HoustonHVAC #ACRepair #HVACTips style — NOT #Pinterest #pin #love]
```

Total: 200–400 chars sweet spot. Pinterest descriptions are searched, indexed, and shown in expanded pin views.

---

## Alt Text Rules

Pinterest's *visual search* uses alt text as a primary signal. Write alt text that describes:
1. What the image visually contains (composition, dominant elements)
2. The text overlay verbatim
3. The brand mark

Template (in `templates.json → alt_text_template`):
> "Vertical Pinterest pin titled '{title}'. Illustration showing {visual_summary}. Brand mark at bottom right: 75 Degree AC, Houston HVAC contractor."

---

## Banned Phrases

Inherits from `.claude/skills/content-generation/SKILL.md` PLUS Pinterest-specific:

- "DIY hack" / "secret trick" / "you won't believe" / "this one weird trick"
- "what they don't want you to know" / "shocking" / "must-see"
- "click here" / "tap to learn" / "swipe up" / "limited time only" / "act now"
- All standard banned: "Great question", "leverage", "robust", "synergy", "game-changer", "world-class", "cutting-edge", "elevate", "unlock", etc. (see `pins/templates.json → banned_phrases` for the full list)

Read the full list before drafting; the publisher does NOT auto-check banned phrases — Claude does, during `/pin-create`.

---

## Visual Style Brief (the KIE AI prompt)

Pinterest pins succeed when they look **editorial / infographic**, NOT like Facebook/Instagram ads. Every KIE prompt must specify:

1. **Background:** light cream, soft off-white, or pale neutral. **No bold brand-color fills.**
2. **Composition:** vertical hierarchy — top third headline, middle third visual, bottom third supporting detail.
3. **Typography:** clean modern sans-serif. Headline 60–80pt, body 24–32pt.
4. **Brand mark:** bottom-right corner — small logo + "75 Degree AC · Houston" text. Nothing else.
5. **Forbidden on the image:** CTA buttons, trust-strip pills with TACLA badge, stock-ad photos of "happy family + thermostat", aggressive red/orange burst graphics, any phone number, any URL.

The `generate_pin.py` script bakes this into every KIE prompt via `PIN_SIZE_CONFIG["layout_note"]`. Don't replace it — append to it.

---

## Board Strategy

**Start (Month 1–2):** ONE board.
- Suggested name: "Houston HVAC Tips & Tricks" or "Houston AC & Heating Guide"
- Use natural keyword in name + description for board-level SEO

**Scale (Month 3+):** Add boards only after the first one shows meaningful saves + outbound clicks. Target structure:
1. Houston HVAC Tips & Tricks (general)
2. Houston Home Maintenance (broader audience — Pinterest favours adjacent-topic boards)
3. AC & Heating Repair Guides (technical / diagnostic content)
4. Houston Seasonal Home Prep (pre-summer / hurricane / freeze)

Don't make 6+ boards on Day 1 — empty boards hurt the profile. Pinterest's algorithm rewards consistent posting depth per board.

---

## 2026 Houston HVAC Reality (from memory: `project_hvac_incentives_2026.md`)

- **Federal 25C tax credit EXPIRED Dec 31 2025.** Do not reference in install pins. Use CenterPoint rebates ($300–$750) instead.
- **Texas HEEHRA not yet launched** as of 2026-05.
- **SEER2 Houston minimum:** 14.3. Recommend 16+ for new installs. Don't push past 18.
- **Refrigerant:** R-410A on existing systems; R-454B for new installs post-2025 phase-out.

A pin that cites the federal 25C credit is wrong on its face and gets caught by the 5-Point Pin Test (fails specificity + accuracy).

---

## Worked Example

### ❌ Bad

Title: "🔥 Unlock the Secret to AC Savings This Summer 🔥"
Description: "You won't believe how much money you can save! In today's fast-paced world, leveraging cutting-edge HVAC tech is a game-changer. Call now! #HVAC #ac #summer #hot #save"
Image: vibrant red background with giant phone number + "FREE ESTIMATE" pill + happy family thermostat photo.

Fails: clickbait title, emoji spam, banned phrases (unlock, leverage, cutting-edge, game-changer, Call now), generic hashtags, red background, phone number on image.

### ✅ Good

Title: "Pre-Summer AC Tune-Up Checklist for Houston Homes — 4 Things to Check in May"

Description: "Two HVAC visits a year cuts breakdown risk by about 95%, and for Houston specifically the spring tune-up is what catches condensate-drain problems before they show up as an attic ceiling stain in July. This checklist covers thermostat, vents, system sounds, and filter — plus what to ask your contractor about Manual J sizing. #HoustonHVAC #ACMaintenance #HVACTips #HomeMaintenance #SpringCleaning"

Alt text: "Vertical Pinterest pin titled 'Pre-Summer AC Tune-Up Checklist for Houston Homes'. Illustration shows a 4-item checklist with simple line icons for thermostat, vent, AC unit, and air filter, on a cream background. Brand mark at bottom right: 75 Degree AC, Houston HVAC contractor."

Image: cream background, headline top, 4-item checklist with line icons middle, small "75 Degree AC · Houston" + logo bottom-right. No phone number, no CTA button.

Destination link: `https://75degreeac.com/services/ac-maintenance/?utm_source=pinterest&utm_medium=social_organic&utm_campaign=pre-summer-ac-tune-up-houston`

Passes: Houston specificity ✓, technical specific (Manual J + condensate drain + 95% stat) ✓, scannable headline ✓, light background ✓, brand mark only ✓.

---

## Pipeline Workflow (operator's mental model)

1. **Brief:** `/pin-create [topic]` or `python3 09-social-media/scripts/pinterest_pipeline.py --create "<topic>"` — drafts brief + generates 1000×1500 image, writes to `pins/queue/`
2. **Review:** Open the generated PNG. Run the 5-Point Pin Test by eye. Tweak title/description/alt in the JSON if needed.
3. **Publish:** `/pin-post` (or `--post-next`) — calls `publisher.publish_pin`, archives the brief on success
4. **Schedule fills itself:** Tue/Thu/Sat 09:45 auto-publishes the oldest queued pin whose image is ready. No Discord gate — quality is enforced upstream at brief time
5. **Weekly:** `/pin-report` (or Sun 19:00 scheduled) — analytics dark HTML report sorted by saves

---

## Compliance — Houston / Texas / Federal

- TACLA license = TACLA72152E (every pin's brand mark; never expand into "License #TACLA…" on the image)
- Service area mentioned in description: Houston, Katy, Sugar Land, Cypress, Richmond TX, Spring, Tomball, Missouri City
- **Richmond TX-specific pins** use the (346) 681-2625 number in description ONLY — never on image. Other Houston-area pins use (713) 598-2737 if a phone number must appear in description (commercial pins only, where lead intent is direct).

---

## Cross-references

- `.claude/skills/content-generation/SKILL.md` — banned-phrase inheritance + 5-Point Human Test parallels
- `project_pinterest_automation.md` — Pinterest pipeline location + cadence + board IDs
- `project_hvac_incentives_2026.md` — incentive reality (25C expired)
- `project_richmond_location.md` — second physical location, separate phone for Richmond pins
- `feedback_creative_generation.md` — KIE AI is the only creative path; never HTML mockups
- `feedback_linkedin_no_credential_strip.md` — adjacent principle (LinkedIn strips the ad-style trust strip; Pinterest similarly forbids it entirely)
