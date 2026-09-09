---
description: Research-first GBP post — pull GSC/weather/queue context, draft per policy, ready for post_pipeline.py
argument-hint: [optional: topic or season hint e.g. "spring tune-up", "emergency repair"]
---

Create a new Google Business Profile post for 75 Degree AC using the `gbp-post` skill methodology.

Topic hint: $ARGUMENTS (if blank, pick intelligently from GSC trends + Houston weather + what's NOT recently posted)

**Non-negotiables (from memory):**
- `feedback_gbp_post_policy.md` — NO phone numbers, NO URLs, NO inline CTAs in post body (CTA button only)
- `feedback_gbp_raw_photo.md` — Skip image_renderer overlays; use raw high-res source + EXIF geo-tag only
- `project_hq_coords.md` — Geo-tag at 29.82016, -95.46033

**Research first (parallel):**
1. Read `04-gmb/profiles/houston/posts/templates.json` — existing template queue + LRU order (avoid repeats)
2. Read `04-gmb/profiles/houston/calendars/master/annual-calendar-2026-2027.md` — recent post history
3. Pull top GSC queries last 7 days: `03-gsc/data/queries-*.csv` (most recent)
4. Check Houston weather: curl `https://api.weather.gov/gridpoints/HGX/65,97/forecast` for today's forecast
5. Read competitor GBPs (quick Playwright scan) — what angles are THEY not covering
6. Read business-info.md + services-list.md — current USPs to amplify
7. Scan `04-gmb/photos/` — available images not recently used

**Draft the post (policy-compliant):**
- 150-300 chars
- Opens with a hook tied to Houston weather OR a surfacing GSC query
- Body: 1 specific benefit + 1 concrete detail (brand, neighborhood, or stat)
- NO phone numbers, NO URLs, NO inline "Call now"
- End with implicit CTA that pairs with the CTA button
- Match the LRU template type (What's New / Offer / Event)

**Select photo:**
- Pick raw high-res source from `04-gmb/photos/raw/` matching topic
- Verify 720×720+ resolution
- Geo-tag with HQ coords via `04-gmb/scripts/geo_tagger.py`

**Output (ready for post_pipeline.py):**
- Append template to `04-gmb/profiles/houston/posts/templates.json` with unique `template_id`, topic, body, CTA button type/url, image path, season tag
- Print the exact command to run: `python3 04-gmb/scripts/post_pipeline.py --template [id]`
- Print the draft body + photo path + CTA button choice for user preview

**Schedule flow (from memory):**
If user requests scheduled posting, remind them of `feedback_gbp_schedule_flow.md` — date uses calendar picker + OK; time is 24h dropdown; verify composer-close after Post.
