---
description: Write and publish a weekly insights blog post to 75degreeac.com — draft mode, ~2,500-3,500 words, Rank Math meta synced, featured image uploaded
argument-hint: [optional: topic hint e.g. "capacitor", "ductwork humidity", or a specific slug to overwrite]
---

Create a new long-form blog post on the WordPress site at `75degreeac.com`. Posts land as `draft` so the user reviews in WP Admin before publishing.

Topic hint: $ARGUMENTS (if blank, pick intelligently — see Phase 1)

**Non-negotiable rules:**
- Existing post URL pattern is **slug-only**: `https://75degreeac.com/[slug]/` — NOT `/blog/[slug]/`.
- Posts go to category ID `54` (Blog), author ID `2` (75degreeac services).
- Featured image is required — never publish a post without one.
- **Inline images are required** — 3–4 KIE-generated infographics/charts embedded in the body (Phase 4.5). No post ships text-only.
- Status defaults to `draft`. Only set `publish` when the user explicitly says "go live".
- Word count target: **2,500–3,500 words** of editorial body (matches existing post norm — see post ID 6634, "Signs Your AC Is Overworking…").
- Follow `.claude/skills/content-generation/SKILL.md` — 5-Point Human Test, banned phrases, E-E-A-T methodology.

---

## Phase 1 — Pick the topic

If $ARGUMENTS is provided, use that as the topic anchor and skip to Phase 2.

Otherwise, pick the next topic intelligently:

1. **Read recently published posts** to avoid duplication:
   ```bash
   curl -sS "https://75degreeac.com/wp-json/wp/v2/posts?per_page=20&_fields=id,slug,date,title" | python3 -m json.tool
   ```
   Read titles and slugs of the last 20 posts. Do NOT pick a topic that overlaps with anything published in the last 90 days.

2. **Read the GBP template queue** at `04-gmb/profiles/houston/posts/templates.json` and the LinkedIn calendar at `09-social-media/posts/calendars/linkedin-*.md`. Pick a template/angle that:
   - Hasn't been blog-posted yet
   - Aligns with current Houston seasonality (check the date — May/June = peak summer prep; Oct/Nov = heating; Dec–Feb = furnace)
   - Has a clean money-page target (so internal links land cleanly)

3. **Cross-check GSC opportunities** at `03-gsc/data/queries-by-page.csv`:
   - Find queries with high impressions but low CTR — those are blog-post targets.
   - Find queries where a money page ranks 8–20 — a supporting blog post drives the cluster up.

4. **Pick the topic** — write a one-line topic statement and the money-page target URL. Confirm with the user before writing.

---

## Phase 2 — Research lite (real data, fast)

Don't run the full `/deep-research` 10-phase workflow for blog posts (that's reserved for money pages). Run a tighter version:

1. **Money-page content** — `curl -s https://75degreeac.com/services/[target-slug]/` — read the live H2 structure, FAQ, and any key facts to reference + link back to.
2. **Top 3 competitor blog posts** for the target keyword — quick Google search, scan their H2s, note 1–2 angles they miss.
3. **Houston-specific authority signal** — pull ONE from `01-research/research-pack-houston-authority.md` or equivalent (e.g. CenterPoint rebate update, NOAA Houston climate data point, TACLA license context).
4. **Existing FAQs** to expand into a section — pull 3–5 from the matching money page's FAQ.
5. **Check post-tracker for related drafts** — `wp post list --post_status=draft --post_type=post` over SSH — don't duplicate an existing draft.

---

## Phase 3 — Write the post

Output: `07-landing-pages/insights/[YYYY-MM-DD]-[slug].md`

**Required structure:**

```markdown
# [H1 — 60-80 chars, includes primary keyword + Houston when natural]

[Lede paragraph — 80-120 words. Opens with the question or symptom the post answers. References the season / current Houston conditions. Drops one specific data point in the first 100 words.]

## What's Actually Happening [or: Why This Matters / The Real Issue]

[400-600 words. Plain-English explanation of the technical issue. Use one short technician anecdote slot — "In the May 2024 heat wave we replaced 87 capacitors in homes inside Loop 610" — invent specifics that are realistic, scope-appropriate, and reusable.]

## How Houston Conditions Make This Worse [or: Houston-specific angle]

[300-500 words. Tie the topic to Houston specifically: humidity, salt air near Galveston Bay, cottonwood season, hurricane prep, CenterPoint grid stress during heat. Reference real Houston neighborhoods or ZIPs by name.]

## Signs to Watch For [or: What to Check First]

[400-600 words. Bulleted or numbered list with each item expanded into 2-3 sentences. These should be diagnostics the homeowner can do BEFORE calling, plus the boundary where DIY stops and a tech is needed.]

## What a Real Diagnostic Looks Like [or: Our Process]

[300-500 words. Walk through what 75 Degree AC does on this kind of call — tools used (Fieldpiece SMAN 460, Testo 552, MR Cool digital manifold are realistic options), measurements taken, time on site. This is the E-E-A-T expertise signal.]

## When Repair Stops Making Sense [or: Repair vs Replace, etc — vary per topic]

[300-500 words. Decision framework. Real $ ranges. Reference financing options if applicable. NEVER end this section with "call for a quote" — give actual ranges.]

## FAQs

[5-7 questions sourced from the matching money page's FAQ + any from competitor scan. Each answer opens with the direct answer in sentence 1, then 2-3 sentences of context.]

## When to Call 75 Degree AC

[120-180 word close. Phone (713) 598-2737, TACLA72152E, since 2016, 24/7 emergency. Internal link to the matching money page. NO banned phrases.]
```

**Required E-E-A-T signals (count minimums):**

- ≥3 specific data points (years, $ ranges, model numbers, neighborhood names, ZIP codes)
- ≥2 technician anecdotes (one in the body, one near the close)
- ≥1 Houston authority citation (NOAA, CenterPoint, TACLA, ASHRAE, Houston city code, etc.)
- ≥3 internal links to money pages, with descriptive anchor text (never "click here")
- ≥1 external authority link (NOAA, ENERGY STAR, manufacturer spec page, etc.) — use `rel="nofollow"` only if linking to a competitor or commercial third party

**Banned phrases** (do NOT use — these are AI-detection flags):

- "best in class", "industry-leading", "cutting-edge", "state-of-the-art"
- "seamlessly", "leverage", "robust", "comprehensive solutions"
- "Look no further", "as a top provider", "At [company], we are committed to"
- "navigate the complexities", "in today's fast-paced world"
- "rest assured", "your one-stop shop"
- "in conclusion", "in today's world", "in the realm of"

Run a final grep against this list before saving.

**5-Point Human Test (pass all 5):**

1. Specificity — at least 3 specific data points the reader couldn't get from a generic AI answer
2. Voice — sounds like a tradesperson talking, not a marketing department
3. Stakes — clear about what happens if homeowner ignores the issue
4. Variability — paragraph lengths vary, sentence rhythm varies, NOT every paragraph is 3 sentences of the same shape
5. Houston-ness — the post would NOT make sense if you removed all Houston references

---

## Phase 4 — Pick the featured image

Order of preference:

1. **Matched Meta creative** — look in `06-meta-ads/creatives/campaign-N-[topic]/` for a creative that matches the post's topic. Use the `feed.png` (1:1, 1024×1024) variant.
2. **WP media library** — search via `curl -sS "https://75degreeac.com/wp-json/wp/v2/media?search=[topic-word]&per_page=5"` for an existing relevant image.
3. **Website image library** — fall back to `04-gmb/photos/website-import/` — search by filename.

**Do NOT use stock photos** — every featured image must be either a real 75 Degree AC asset, a Meta creative we generated, or a real technician/job-site photo. This is non-negotiable per project E-E-A-T standards.

Resize if needed — there's no `wp_featured` variant yet in `image_resizer.py`, so for now just use the source `feed.png` from Meta creatives (1024×1024 works fine as a WP featured image).

---

## Phase 4.5 — Inline infographics + charts (MANDATORY — every post)

Every post gets **3–4 inline images** generated via the KIE AI API, SEO-optimized, geo-tagged, and embedded in the body BEFORE publishing. Reference implementation: post 8580 (`ac-leaking-water-inside-house`, media 8581–8584).

**When running multi-agent: fan out one subagent per image** (the Workflow tool or parallel Agent calls) — generation polls KIE for minutes per image, so parallel is the default. Single-agent sequential is the fallback.

### 1. Spec the images (data fidelity gate)

Map each image to a high-value H2. Standard mix:
- **Causes/signs infographic** (numbered grid, icons + 1–4-word labels)
- **Step flow-diagram** (DIY/diagnostic process as numbered steps)
- **Cost chart** (horizontal bars with the EXACT $ ranges from the post body — never invent numbers; grep the body and copy verbatim)
- **Comparison** (side-by-side two-column, e.g. symptom A vs symptom B)

Every label/number in a KIE prompt must be quoted verbatim from the post body. After generation, visually READ each image and re-grep the body to confirm figures match.

### 2. KIE prompt rules (gpt-image-2-text-to-image, 3:2 landscape)

- Minimal on-image text: 1–4-word labels, large type, ≤8 text elements (image models garble dense text). Numbers/$ figures are fine.
- Style: clean flat editorial infographic, white/light background, brand blue `#1B6CA8` + orange accent, subtle "75 Degree AC" wordmark bottom corner.
- NO phone numbers, NO URLs, no photorealistic people.

### 3. Generate → geo-tag → SEO → upload (per image)

```bash
# 1. Generate — prints public CDN URL as last stdout line (polls internally, allow 10 min)
python3 04-gmb/make-com/kie_url_only.py '<prompt>'

# 2. EXIF GPS (HQ pin 29.82016,-95.46033) + embedded SEO metadata + WP media upload w/ alt/title/caption/description
python3 04-gmb/make-com/prepare_gbp_image.py --src "<KIE_URL>" \
  --slug "<seo-keyword-slug>" --coord hq \
  --title "..." --alt "..." --caption "..." --description "..." --keywords "a, b, c"
# last stdout line = public WP source_url
```

**SEO metadata rules:**
- Filename slug = keyword-rich kebab-case (`ac-leak-repair-cost-houston-2026`) — NEVER `kie`/`infographic-1`/junk
- Alt: descriptive, section keyword + Houston when natural, ≤125 chars
- Caption: one short human sentence (no AI-tell words, no em-dashes — it ships visible on the page)
- Description: 1–2 sentences with Houston geo context
- Known limitation: WP strips EXIF from stored originals — durable geo = filename + alt + caption (that's why all three are mandatory)

### 4. Embed in the markdown BEFORE publishing

Insert after the first paragraph following the target H2 (python-markdown passes raw HTML through):

```html
<figure class="wp-block-image size-large"><img src="SOURCE_URL" alt="ALT" class="wp-image-MEDIAID" loading="lazy"/><figcaption class="wp-element-caption">CAPTION</figcaption></figure>
```

(For enhancing an already-pushed draft: back up `content.raw` to `05-wordpress/backups/posts/[id]-pre-inline-images-[date].html` first, then inject via REST and keep status `draft`.)

### 5. Verify before Phase 6

- [ ] Visually read every generated image — no garbled text, figures match body verbatim
- [ ] 3–4 `<figure>` blocks, each under its correct H2
- [ ] SEO filenames, non-empty alt + caption + description on every media item
- [ ] Captions pass the banned-phrase grep
- [ ] All source_urls return HTTP 200 image/jpeg

---

## Phase 5 — Compose metadata

Draft these and SHOW the user before publishing:

- **Title** (H1 + WP post title — same value): max 80 chars, includes primary keyword + Houston when natural
- **Slug**: kebab-case, includes primary keyword, max 60 chars, no stopwords beyond what reads natural
- **Meta title** (Rank Math `rank_math_title`): max 60 chars, optimized for SERP CTR — different from H1
- **Meta description** (Rank Math `rank_math_description`): max 155 chars, sells the click
- **Focus keyword** (Rank Math `rank_math_focus_keyword`): 1 keyword, the primary phrase
- **Excerpt**: 2-3 sentences, same hook as the lede
- **Alt text** for featured image: descriptive, includes primary keyword when natural

---

## Phase 6 — Publish as draft

Call the publisher script:

```bash
python3 05-wordpress/scripts/wp_create_blog_post.py \
  --title "[TITLE]" \
  --markdown-file 07-landing-pages/insights/[YYYY-MM-DD]-[slug].md \
  --slug [SLUG] \
  --featured-image [PATH_TO_FEATURED_IMAGE] \
  --meta-title "[META_TITLE]" \
  --meta-desc "[META_DESC]" \
  --focus-keyword "[FOCUS_KEYWORD]" \
  --excerpt "[EXCERPT]" \
  --alt-text "[ALT]" \
  --status draft
```

Capture the output (it returns a JSON block with `post_id`, `edit_url`, `public_url`).

---

## Phase 7 — Log and notify

1. **Append to publish log** — `09-social-media/data/publish_log.csv`:
   ```
   <ISO timestamp>,wp,blog_[slug],<post_id>,<edit_url>,draft,
   ```

2. **Print summary** to user:
   - Title, word count, primary keyword
   - Draft URL (WP Admin edit link)
   - Public preview URL
   - Tell them: "Draft is live in WP Admin. Review and click Publish when ready. To go live now via this command, re-run with `--status publish`."

3. **Discord notify** (optional, only if user asks): use `09-social-media/scripts/discord_approval.py` or similar to send a preview link.

---

## Phase 8 — Update memory if anything was learned

If a new pattern emerged (e.g. a competitor angle worth tracking, a new Houston authority source, a recurring topic gap), save it as a memory.

---

## Anti-patterns

- ❌ Writing under 2,500 words — fails to match site standard
- ❌ Skipping the Houston-specific section — generic HVAC content reads like every other contractor blog
- ❌ Using stock photos as featured image
- ❌ Publishing a text-only body — Phase 4.5 inline images are mandatory, not optional
- ❌ Inventing numbers for charts/infographics — every figure must exist verbatim in the post body
- ❌ Junk image filenames (`kie-*`, `image-1`) — SEO keyword slugs only
- ❌ Publishing live without user explicit OK on first run
- ❌ Re-using a slug or title that already exists (always check `/wp-json/wp/v2/posts?slug=[slug]` first)
- ❌ Forgetting Rank Math meta — the WP script handles this, but verify it succeeded
- ❌ Banned phrases in the body
- ❌ "Call for a quote" without real $ ranges in the same paragraph

## On Completion

Print:
- ✅ Draft created — `post_id`, `edit_url`, `public_url`
- Word count, primary keyword, featured image used
- Inline images: count + media IDs + slugs (must be 3–4)
- Ready-for-publish checklist (Rank Math green? FAQs match schema? Image alt set?)
- "Run with `--status publish` when ready to go live."
