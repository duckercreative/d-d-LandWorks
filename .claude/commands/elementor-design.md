---
description: Compose an Elementor page from a humanized content brief — emits elementor_draft.json, no WP writes. Default style = rxhv (V7 design system, preferred for new pages). Pass --style legacy for native-widget patterns.
argument-hint: <page slug, e.g. "ac-repair-sugar-land-tx"> [--style rxhv|legacy] [--patterns hero,services_grid,faq_qa_stack]
---

Compose a complete Elementor `_elementor_data` JSON array for the page identified by $ARGUMENTS, ready for `/elementor-push` to deploy as a draft.

This is the **design** step. It does NOT touch WordPress. The output is two local files:

- `07-landing-pages/pages/{slug}/elementor_draft.json` — the hydrated Elementor JSON
- `07-landing-pages/pages/{slug}/spec.json` (rxhv) or `elementor_draft.tokens.json` (legacy) — the tokens / sections spec for reproducibility

Pattern library selection (see `elementor-page-builder` skill):

| `--style` | Library | When |
|---|---|---|
| `rxhv` (default) | `05-wordpress/elementor-patterns/rxhv/` — 17 V7 HTML-widget sections | New money / service / location pages, photo-driven design |
| `legacy` | `05-wordpress/elementor-patterns/*.json` — native Elementor widgets | Pages that need Fluent Form widget or per-widget edit panels |

### rxhv flow (default)

1. Copy `05-wordpress/elementor-patterns/rxhv/example_spec.json` to `07-landing-pages/pages/{slug}/spec.json`
2. Fill tokens (phone, address, license, image URLs) from `business-info.md` and the page's content brief
3. Trim/extend `sections` list to match the page's actual need (defaults in the rxhv manifest's `section_order_rules`)
4. Run `python3 05-wordpress/scripts/rxhv_build.py 07-landing-pages/pages/{slug}/spec.json`
5. Inspect `elementor_draft.json`. To push: re-run with `--push --slug {slug}` (creates) or `--page-id {id}` (updates).

### Legacy flow

Follow the original phases in this file. Native widgets via `pattern_render` MCP tool.

---

## Hard refusals

Refuse to proceed if any of these are true. State the reason and stop.

1. No `07-landing-pages/content/{slug}-content.md` file exists.
2. The content file is missing the humanizer signature line. Grep for `<!-- humanized:` in the first 20 lines. Per the Humanizer Mandatory rule, no AI prose ships without it.
3. The slug starts with `hvac-contractor-richmond` but the brief/content uses the main `(713) 598-2737` phone — Richmond pages must use `(346) 681-2625`.
4. `05-wordpress/elementor-patterns/manifest.json` does not exist. Run `python3 05-wordpress/scripts/extract_patterns.py` first.

---

## Phase 1 — Load inputs

1. Read the content file: `07-landing-pages/content/{slug}-content.md`
2. Read the brief (if it exists): `07-landing-pages/briefs/{slug}-brief.md`
3. Read the research pack summary: `01-research/page-research/{slug}/research-pack.md`
4. Read the pattern manifest: `05-wordpress/elementor-patterns/manifest.json`

If the brief and research pack are missing, warn the user and continue with the content file alone — but flag that the chain was broken.

---

## Phase 2 — Plan the section sequence

Following the `elementor-page-builder` ordering rules, pick 5–9 patterns from the manifest. Default money-page sequence:

1. `hero_with_form` — primary lead capture
2. `feature_grid_4col` — trust strip (24/7, licensed TACLA72152E, financing, NATE-certified)
3. `two_column_intro` OR `image_text_split` — problem + solution
4. `service_card_grid` — what we fix / what's included (6 cards)
5. `text_paragraph` — transition with an internal-link anchor
6. `image_text_split` — process / equipment / technician proof
7. `testimonial_row` — single highlighted review near the CTA
8. `faq_accordion` — mandatory if the brief has FAQs
9. (optional) `hero_with_form` reused as bottom CTA with different copy

Deviate if the page type calls for it. Hub pages (services index, locations index) may include `service_button_list`. Money pages never do.

Print the planned sequence to the user. Continue without waiting (auto-flow), but the sequence is logged in `elementor_draft.tokens.json` for review.

---

## Phase 3 — Build the tokens dict for each pattern

For every chosen pattern, look up `required_tokens` in the manifest and assemble the token map from the content file.

Mapping shortcuts (from the `elementor-page-builder` skill):

| Brief section | Pattern + slot |
|---|---|
| H1 + intro paragraph | `hero_with_form.HEADING_1` + `TEXT_1` |
| 5 trust bullets | `hero_with_form.ICON_LIST_ITEM_1..5` |
| Primary CTA | `hero_with_form.BUTTON_TEXT_1` → "Call (713) 598-2737" (Richmond: "Call (346) 681-2625") |
| Primary CTA URL | `hero_with_form.BUTTON_URL_1` → `tel:+17135982737` (Richmond: `tel:+13466812625`) |
| Secondary CTA | `hero_with_form.BUTTON_TEXT_2` → "Book Service Online" |
| Secondary CTA URL | `hero_with_form.BUTTON_URL_2` → `/contact/` |
| FluentForm ID | `hero_with_form.FLUENT_FORM_ID` → read from `business-info.md` (default: site's main inquiry form id) |
| 4 differentiators | `feature_grid_4col.HEADING_1..5` + `IMAGE_*` slots |
| Service cards (6) | `service_card_grid.CARD_TITLE_1..6` + `CARD_DESCRIPTION_1..6` |
| Process steps / proof | `image_text_split.HEADING_1` + `TEXT_1` + `ICON_LIST_ITEM_1..n` |
| Testimonial | `testimonial_row.TESTIMONIAL_*` (pull from `01-research/page-research/{slug}/competitors/reviews.md` if present) |
| 11 Q/A pairs | `faq_accordion.HEADING_1` + `TEXT_1..11` |

For every image slot:

1. Decide source: KIE-generated (heroes, illustrations) or curated library (technicians, equipment, Houston photos).
2. If KIE: call the `media_generate` MCP tool with a precise prompt (style: photorealistic, HVAC technician in Houston, branded blue uniform, 75 Degree AC truck visible). Use:
   - hero: `1536x1024` (16:9)
   - image_text_split: `1200x900` (4:3)
   - service_card_grid card images: `800x800` (1:1)
3. If curated: call `media_upload` with the local path.
4. Always inject **both** `IMAGE_URL_n` and `IMAGE_ID_n`. Set `IMAGE_ALT_n` to a description tied to the section H2.

---

## Phase 4 — Hydrate patterns

For each pattern in sequence, call the `wp-elementor` MCP tool `pattern_render(pattern_name, tokens)`. The tool returns `{pattern, container}`.

Append every returned `container` to a Python list. The final list IS the `_elementor_data` array.

If `pattern_render` raises `ValueError: Unresolved tokens: [...]`, you forgot to set those tokens. Fix and retry. Do not bypass the guard.

---

## Phase 5 — Write outputs

1. Ensure `07-landing-pages/pages/{slug}/` exists.
2. Write the hydrated array to `elementor_draft.json` (pretty-printed for diffability).
3. Write `elementor_draft.tokens.json` with this shape:
   ```json
   {
     "slug": "houston-heat-pump-installation",
     "generated_at": "2026-05-21T...",
     "humanizer_signature": "<copy of the signature line from content file>",
     "patterns": [
       { "name": "hero_with_form", "tokens": { "HEADING_1": "...", ... } },
       { "name": "feature_grid_4col", "tokens": { ... } },
       ...
     ]
   }
   ```

---

## Phase 6 — Report

Print a one-screen summary:

- Slug
- Source content file path + word count
- Patterns used (in order)
- Image count (KIE-generated vs uploaded)
- Total widget count (sum of container widget histograms)
- Output paths
- Next step: `/elementor-push {slug}` (or `/elementor-push {slug} --dry-run` to diff against the existing page)

Do NOT proceed to push. Push is an explicit user gate.
