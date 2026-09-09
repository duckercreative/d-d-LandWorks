---
name: elementor-page-builder
description: >
  Elementor page-composition methodology for 75 Degree AC. Two pattern libraries
  available: (1) **rxhv** — the modern 2026 HTML-widget design system (V7),
  17 sections, photo-heavy, conversion-focused; preferred for new money pages.
  (2) **Legacy** — native Elementor widgets extracted from production, used for
  pages that need in-editor widget panels. Selects patterns, fills tokens from
  a humanized content brief, generates KIE imagery, and emits an
  `elementor_draft.json` ready to push via the wp-elementor MCP server.
  Activates inside `/elementor-design`. Required reading before any AI-driven
  Elementor page generation.
version: 2.0.0
client: 75 Degree AC
---

## Pattern Library Selection — Read First

There are **two pattern libraries** to choose from. Pick one per page; do not mix.

| Library | Use when… | Tradeoff |
|---|---|---|
| **rxhv** (preferred for new pages, May 2026+) | Need polish, photo storytelling, modern HVAC business look | Each section is one HTML widget — editors edit text in the HTML widget's code field, not via per-widget panels |
| **Legacy native widgets** | Page needs Fluent Form widget natively rendered, OR edits will be heavy and editors need widget-level panels (heading panel, text-editor panel, icon-list panel, etc.) | Limited to extracted patterns; visual range is narrower |

**Default to rxhv** for any new money page, service page, or location page.
Reach for legacy patterns only when a specific widget-panel editing experience
is required — typically when the page has a `fluent-form-widget` that needs to
render via the existing Fluent Form integration.

Documentation per library:
- **rxhv** — `05-wordpress/elementor-patterns/rxhv/README.md` and `manifest.json`
- **Legacy** — see "Pattern Library (9 production-extracted patterns)" below

# Elementor Page Builder — 75 Degree AC

You are composing an Elementor page from reusable patterns. Your output is a
single JSON array (`_elementor_data`) that lands as a draft page in WordPress
and opens in the Elementor editor with every section as a **native editable
widget** — not an opaque HTML block. That is the make-or-break test.

This skill activates downstream of the content workflow:

```
/deep-research → /content-brief → /content-create → humanizer → /elementor-design
```

Never invoke before the humanizer pass is complete. Refuse if the source content
file lacks the humanizer signature line.

---

## Brand Design Tokens

These are the only design tokens. Do not invent new colors or fonts.

| Token | Value |
|---|---|
| Primary brand color | `#0066CC` (75 Degree blue) |
| Accent brand color | `#FF6B35` (CTA orange) |
| Trust/license color | `#0F172A` (deep navy, used in trust strips) |
| Body text color | `#1F2937` (gray-800) |
| Muted text color | `#6B7280` (gray-500) |
| Surface light | `#F9FAFB` (gray-50) |
| Surface white | `#FFFFFF` |
| Heading font | `Inter`, fallback to `Open Sans` (already loaded by theme) |
| Body font | `Inter`, fallback to system |
| H1 size desktop | `48px` |
| H1 size mobile | `33px` |
| H2 size desktop | `36px` |
| H2 size mobile | `28px` |
| Body size | `17px` desktop / `15px` mobile |
| Container max width | `1200px` |
| Section vertical padding | `60px` desktop / `30px` mobile |

The patterns already encode most of these. You do not normally override settings
inside a pattern — you fill tokens.

---

## Pattern Library (9 production-extracted patterns)

Read the live manifest at `05-wordpress/elementor-patterns/manifest.json` for
authoritative token lists. The summary:

| Pattern | When to use | Required content slots |
|---|---|---|
| `hero_with_form` | Top of money pages with lead capture intent (emergency, install) | H1, intro paragraph, 5 trust bullets, 2 CTAs, Fluent Form ID |
| `two_column_intro` | Right under hero on long pages — pairs an explainer with a checklist | 2 H2s, 2 paragraphs, 2 icon-lists, 2 secondary CTAs |
| `service_card_grid` | Service overview (e.g., "what we fix") with 6 service tiles | 2 headings, 1 intro, 6 card title+description pairs, 1 CTA, 1 supporting image |
| `text_paragraph` | Connective tissue between sections | 1 paragraph |
| `service_button_list` | A-Z service list, suburb list, or sub-service grid (39 buttons) | 1 H2, 1 intro, 39 button labels + URLs |
| `image_text_split` | Mid-page proof section ("how we work", "what's included") | H2, paragraph, checklist, supporting image |
| `testimonial_row` | Single highlighted testimonial near the CTA | H2, testimonial body, secondary CTA |
| `feature_grid_4col` | Trust strip with 4 differentiators (24/7 dispatch, licensed, financing, etc.) | 4 differentiator titles, 4 supporting images or icons |
| `faq_accordion` | FAQ block (always sourced per the FAQ Source Mix Rule) | H1/H2, 11 Q/A pairs |

The pattern library is the **only** way to add structure. Do not generate raw
Elementor JSON from scratch — token coverage and `_id` regeneration are handled
by `pattern_render` and freelancing breaks both.

---

## rxhv Library — 17 Sections, HTML-Widget Composition

This is the **preferred** library for new pages (2026+). Source of truth:
`05-wordpress/elementor-patterns/rxhv/manifest.json`. Reference live build:
draft page 8414 (`/ac-repair-richmond-tx/` V7 redesign).

### The 17 sections (cherry-pick what the page needs)

| Section | Purpose |
|---|---|
| `hero` | Photo + H1 + lede + 2 CTAs + 4-item trust strip. **Always section 1** — carries root CSS + font @import |
| `metrics_bar` | 4-stat strip (years / reviews / homes / first-visit rate) |
| `symptoms_grid` | 6 problem cards with "likely fix" price ranges — engagement |
| `services_grid` | 6 photo-led service cards with prices |
| `offers_strip` | 3 colored gradient offer cards (orange/blue/green) |
| `process_steps` | 4 gradient-top step cards + bottom CTA strip |
| `trucks_split` | Full-bleed branded truck photo + brand list panel |
| `pricing_table` | Sticky-left intro + 7-row price table |
| `why_us_split` | Consultation photo with floating badges + 4 feature cards |
| `service_areas` | 3 city cards + 10-neighborhood response-time grid |
| `map_embed` | Google Maps iframe + info card with address/hours/license |
| `team_grid` | 3 team photos with credential pills overlay |
| `reviews_grid` | 3 testimonial cards + Google 5-star rating chip |
| `guarantee_seal` | Pulsing CSS-animated orange seal + 6 written promises |
| `faq_qa_stack` | 2-col Q+A pairs (H3 question + paragraph answer, no accordion) |
| `contact_form` | Lead form (name/phone/zip/service/time/message) + copy left |
| `final_cta` | Orange gradient with phone CTA + glass contact card |

### Pre-built defaults (`manifest.json → section_order_rules`)

- **Money page (17)** — all of the above in order
- **Service page (9)** — hero, metrics_bar, services_grid, process_steps, pricing_table, why_us_split, reviews_grid, faq_qa_stack, final_cta
- **Location page (10)** — hero, metrics_bar, services_grid, service_areas, map_embed, team_grid, reviews_grid, faq_qa_stack, contact_form, final_cta
- **Minimal landing (6)** — hero, metrics_bar, services_grid, reviews_grid, faq_qa_stack, final_cta

The catalog is **not** a fixed template. Each page picks what it actually
needs — fewer sections are fine; duplicating sections (two `offers_strip`
blocks at different points) is fine; one-off custom HTML widgets are fine
via the spec's `html` override field.

### Hard rules for rxhv pages

1. `hero` is always section 1. It loads the Inter/Poppins/JetBrains Mono font
   `@import`, the CSS custom-property tokens, and the global `!important`
   typography enforcement. Without it, every subsequent section renders
   unstyled.
2. Token IDs are `{{UPPERCASE_UNDERSCORED}}` — strict regex `\{\{[A-Z0-9_]+\}\}`.
   Unresolved tokens raise `KeyError` in the builder; do not bypass.
3. Phones are always tokenized. Richmond pages use `{{PHONE_DISPLAY}} = (346)
   681-2625` and `{{PHONE_TEL}} = +13466812625`. Houston pages use the main
   line. See `business-info.md`.
4. Every dark-section H2/H3 has `color:#FFFFFF!important`. Every light-section
   H2/H3 has `color:var(--primary)!important`. The hero block already enforces
   this globally for all `.rxhv-*` heading classes.
5. Images come in via URL only (the html-widget approach doesn't carry
   Elementor `image_id` references). KIE-generated or media-library URLs
   both work — just paste the public URL into the matching `{{IMG_*}}` token.

### Build flow (rxhv)

```
1. Create spec:    07-landing-pages/pages/{slug}/spec.json
                   (copy from 05-wordpress/elementor-patterns/rxhv/example_spec.json)
2. Fill tokens:    phone, address, license, image URLs, business name
3. Pick sections:  edit spec.sections to the page's actual mix
4. Build:          python3 05-wordpress/scripts/rxhv_build.py {spec}
                   → writes elementor_draft.json next to spec
5. Push as draft:  python3 05-wordpress/scripts/rxhv_build.py {spec} --push --slug {slug}
                   OR --page-id {existing} to update in place
6. Backup:         each --push snapshots existing _elementor_data to
                   05-wordpress/backups/elementor/{page_id}/{ts}_pre_rxhv_build.json
```

### Editable content in rxhv sections

Section HTML lives in a single Elementor HTML widget. The editor opens the
widget's "HTML" tab and edits the visible text directly — `<h1>`, `<h2>`,
`<h3>`, `<p>` text. The CSS in the same widget's `<style>` block is
prefix-scoped under `.rxhv-{section}__*` so theme rules can't leak in.

For structural changes (add a service card, rewrite the offer strip), regenerate
the spec and re-push rather than editing inline. That keeps spec.json as the
source of truth.

### Adding new rxhv sections

When a page needs a section the library doesn't have:

1. Build the section as `<section class="rxhv rxhv-yourname">` with `<style>`
   scoped under `.rxhv-yourname__*` selectors.
2. Use `!important` on every `font-size`, `color`, and `text-transform` of
   headings and buttons — theme override defense.
3. Tokenize content with `{{TOKEN_NAME}}`.
4. Save to `05-wordpress/elementor-patterns/rxhv/sections/NN_name.html`
   (next sequential number).
5. Register in `manifest.json → sections.{name}` with `file`, `purpose`,
   `tokens` list, and `editable_in_html` slot description.
6. Use it in any spec via `{"name": "yourname"}` — or skip the catalog and
   inline via `{"name": "ad_hoc", "html": "..."}`.

---

## Page Composition Rules

**Default money-page order** (deviate only with a reason recorded in the brief):

1. `hero_with_form`
2. `feature_grid_4col` (trust strip)
3. `two_column_intro` OR `image_text_split` (problem + solution framing)
4. `service_card_grid` (what we fix / what's included)
5. `text_paragraph` (transition with an internal-link anchor)
6. `image_text_split` (proof — process, equipment, or technician credentials)
7. `testimonial_row`
8. `faq_accordion` (mandatory if FAQs exist in the brief)
9. `hero_with_form` reused as bottom CTA — substitute different copy, same form ID

Constraints:

- Maximum 9 sections per page. More than that and engagement collapses on mobile.
- `service_button_list` is only for hub pages (services index, locations index). Never on a money page.
- Always end with a CTA-bearing section. If you do not use a second hero, append a `testimonial_row` with a CTA-style button.
- FAQ section is mandatory if the brief has FAQs. Skip only on dedicated pages where FAQs would be redundant (the FAQ hub itself).

---

## Content → Token Mapping

The humanized markdown brief (`07-landing-pages/content/{slug}-content.md`) has
canonical sections. Map them like this:

| Brief section | Pattern + slot |
|---|---|
| H1 + intro paragraph | `hero_with_form.HEADING_1` + `TEXT_1` |
| Trust bullets (5–7 bullets) | `hero_with_form.ICON_LIST_ITEM_1..5` |
| Primary CTA | `hero_with_form.BUTTON_TEXT_1`, `BUTTON_URL_1` (default `tel:7135982737`) |
| Secondary CTA | `hero_with_form.BUTTON_TEXT_2`, `BUTTON_URL_2` (e.g., `/contact/`) |
| Differentiators block | `feature_grid_4col` |
| "What we do / what's included" sections | `service_card_grid` cards |
| Process / proof section | `image_text_split` |
| Testimonial pulled by `/content-brief` | `testimonial_row` |
| FAQ block (PAA + Reddit + Quora mix per the FAQ Source Mix Rule) | `faq_accordion` |

For pages on `/hvac-contractor-richmond-tx/` use phone `(346) 681-2625` — never
the main `(713) 598-2737`. This rule is enforced by the slash command if the
brief targets a Richmond URL.

---

## Image Pipeline

- Hero and section illustration images → `media_generate` (KIE AI). Aspect 16:9
  for hero (`1536x1024`), 4:3 for `image_text_split`, 1:1 for `service_card_grid`
  cards.
- Technician / equipment / Houston-specific photos → reuse from the Website
  Image Library (Drive). Pass the local path through `media_upload`.
- Every image MUST have alt text. Default the alt text to the H2 of the section
  the image lives in. Do not write "image of …" prefixes.
- After `media_generate` or `media_upload`, inject **both** `id` and `url` into
  the pattern. Missing either field breaks the Elementor widget. The pattern
  templates expect `IMAGE_URL_n`, `IMAGE_ID_n`, `IMAGE_ALT_n` for each slot.

---

## Output Contract

`/elementor-design` writes to `07-landing-pages/pages/{slug}/elementor_draft.json`.
The file is a single JSON array (the `_elementor_data` shape) — top-level
elements are containers, each one a hydrated pattern.

Alongside it, write `07-landing-pages/pages/{slug}/elementor_draft.tokens.json`
recording the exact `tokens` dict passed to each `pattern_render` call. This
makes the page reproducible and diffable.

Do not call `page_set_elementor` from inside `/elementor-design`. The push step
is a separate, explicit user gate (`/elementor-push`).

---

## Validation Before Emitting

Before writing the draft file:

1. Every pattern call must include **every** required token from
   `manifest.json`. Missing tokens cause hard failure inside `pattern_render`.
2. No two sections have the same H1. Run a quick check — if a hero CTA is
   repeated at the bottom, swap the copy.
3. Phone numbers are correct for the page (Houston vs Richmond).
4. Schema markup is NOT injected here — schema lives in WPCode #8140 and is
   handled by `/schema-generate` separately.
5. No banned phrases from the content-generation skill leak through. If they
   do, route the offending field back through humanizer before emitting.

---

## What This Skill Does NOT Do

- Does not write or modify any WordPress data (that is `/elementor-push`).
- Does not generate content from scratch (that is `/content-create`).
- Does not edit existing Elementor pages (use `wp_elementor_edit.py` directly).
- Does not handle multilingual content or A/B test variants.
- Does not publish — pages always stay draft per the never-auto-publish rule.

---

## Failure Modes to Catch

- **Pattern renders as one big HTML block in Elementor editor.** Cause: pattern
  was extracted incorrectly and contains an `html` widget wrapping the whole
  thing. Re-run `extract_patterns.py` after fixing the classifier.
- **Duplicate widget IDs.** `pattern_render` regenerates IDs on every call, so
  this should never happen. If it does, two patterns shared a non-Elementor
  field with the same id — file a bug in `mcp-server/README.md`.
- **Image widget renders broken.** Cause: only `url` was set and `id` is empty.
  Always inject both.
- **Form widget shows no form.** Cause: `FLUENT_FORM_ID` not set. The default
  Fluent Form ID for 75 Degree AC inquiry forms is documented in
  `business-info.md` — use that.
