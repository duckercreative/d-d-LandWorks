# D&D Land Works — WordPress Theme

A custom, dependency-free WordPress theme for D&D Land Works, built as a
second platform option alongside the primary Astro build in `site/` at the
repo root. **The Astro site remains the live/primary platform** — see the
main repo's `CLAUDE.md`. This theme exists because the client asked for a
WordPress option in parallel, not as a replacement.

No page-builder plugin (Elementor, Divi, etc.) and no ACF are required.
Content blocks are built from shortcodes registered in `inc/shortcodes.php`,
usable in either the block editor (as a Shortcode/Custom HTML block) or the
classic editor. Business facts (phone, email, CCB #, DEQ cert) are
Customizer settings in **Appearance → Customize → D&D Land Works — Business
Info** instead of being hardcoded in every template.

## What's actually built vs. what needs assembling

Be precise about this with the client — don't oversell it:

- **Fully built, ready to use as-is:** the homepage (`front-page.php`,
  assigned automatically once a static front page is set in
  Settings → Reading), the header/footer/nav on every page, the blog
  single-post and listing templates, the 404 page, and all 16 shortcodes.
- **Needs content assembled in WP admin:** the other ~56 pages the Astro
  site has (12 service pages, ~19 location pages, resources, about,
  contact, etc.) are **not** pre-built as individual WordPress Pages —
  that would mean re-typing ~50 pages of already-approved copy into the
  WP admin, which wasn't in scope for "build a theme." Instead, this
  theme ships two flexible **Page Templates** (`page-templates/`) so an
  editor can create each Page in WP admin, paste in that page's copy from
  the Astro source (`site/src/pages/services/*.astro`,
  `site/src/pages/locations/*.astro`), wrap the unique sections in the
  shortcodes below, and assign the matching template from Page
  Attributes.

## Page Templates

| Template | File | Use for |
|---|---|---|
| Service Page | `page-templates/template-service.php` | The 12 `/services/*` pages |
| Location Page | `page-templates/template-location.php` | City pages and city+service sub-pages under `/locations/*` |

Both render: Hero (page title + excerpt as the subheadline) → the page's
own content (where you drop shortcodes) → a standard closing sequence
(Why Choose Us / Gallery / CTA). A plain `page.php` (no template assigned)
renders a simpler dark title band + content, for pages like About or
Contact that don't need the full service-page closer.

## Shortcode reference

All images referenced by filename come from `assets/images/` — the same
real jobsite photos and AI-generated illustrative photos used on the Astro
build (see "Image provenance" below).

| Shortcode | Purpose |
|---|---|
| `[hero eyebrow="" title="" subtitle="" images="a.webp,b.webp"]` | Full-bleed slideshow hero |
| `[trust_bar]` | 4-item credential strip (Licensed & Bonded, DEQ Certified, Free Estimates, Res. & Comm.) |
| `[about_section title="" image=""]description HTML[/about_section]` | Image + floating badge + copy, right below the hero |
| `[why_choose_us bg_image=""]optional description[/why_choose_us]` | Dark 4-card trust section |
| `[achievement]optional description[/achievement]` | Photo-collage + stat row |
| `[service_grid title="" intro=""]` | The 12-service card grid on a dark intro band |
| `[gallery_grid images="file.webp:Caption,file2.webp:Caption2"]` | Real-photo project gallery |
| `[before_after items="before.webp:after.webp:Caption,..."]` | Drag-to-reveal before/after sliders |
| `[faq title=""][faq_item question="..."]Answer[/faq_item]...[/faq]` | Accordion + FAQPage JSON-LD |
| `[testimonials business="" rating="4.83"][review name="" date="" stars="5"]Text[/review]...[/testimonials]` | Google-review-style panel |
| `[photo_block title="" image="" alt="" side="left|right" badge_value="" badge_label=""]body HTML[/photo_block]` | Reusable alternating photo+content section — the workhorse for service-page middle content |
| `[cost_factors title="" intro="" items="Label: detail\|Label2: detail2"]` | Pricing-factor card grid |
| `[process_steps title="" items="Step: detail\|..."]` | Numbered process steps on a dark band |
| `[stat_row title="" items="Value:Label,Value2:Label2"]` | Small 3-up stat strip |
| `[cta_block title="" subtitle="" cta_label="" cta_href=""]` | Closing CTA band with the excavator cutout image |
| `[contact_form]` | Visual estimate-request form (see "Contact form" caveat below) |

### Worked example: building a service page

1. WP Admin → Pages → Add New. Title: "Excavation". Assign **Page
   Attributes → Template → Service Page**.
2. Set an Excerpt (used as the Hero subheadline) — copy the `subheadline`
   string from `site/src/pages/services/excavation.astro`'s `<Hero>` call.
3. In the content area, paste in `[photo_block]` blocks for each
   alternating section from the Astro page (copy the `headline`/`bodyHtml`
   text straight out of the `.astro` file — it's already written and
   approved), plus a `[cost_factors]` and `[faq]` block using that page's
   FAQ items.
4. Publish. The template automatically appends Why Choose Us → Gallery →
   CTA.

## Image provenance

`assets/images/` mirrors `site/public/` from the Astro build as of
2026-09-12:

- `project-*.webp` — **real** D&D Land Works jobsite photos (client photo
  drop + photos already sitting in the repo).
- `service-*.webp`, `before-*.webp` / `after-*.webp` — **AI-generated**
  illustrative photos for services that don't have real photography yet
  (septic, drainage, land clearing, utility trenching, foundation
  excavation, slope stabilization, and the homepage before/after pairs).

Swap any AI-generated file for a real one by dropping a same-named file
into `assets/images/` (or uploading to the Media Library and updating the
relevant shortcode's `image`/`images` attribute) as real photos come in.
See `business-info.md` at the repo root for the full tracking list.

## Contact form

`[contact_form]` is **visual only** — submitting it shows a JS message and
does not send anything (see `assets/js/main.js`). Wire it to an actual
handler before launch: `wp_mail()` in a small form-handler snippet,
Contact Form 7, or Formspree via the form's `action` attribute. This
mirrors the same open item already flagged in the Astro build's
`contact.astro`.

## Setup checklist

1. Zip this `dd-landworks-theme/` folder and upload via
   Appearance → Themes → Add New → Upload, or copy it into
   `wp-content/themes/`.
2. Activate it.
3. Settings → Reading → set "A static page" as the homepage (any page —
   `front-page.php` takes over automatically regardless of which page is
   selected, since it doesn't read page content).
4. Appearance → Customize → **D&D Land Works — Business Info** → confirm
   phone/email/CCB/DEQ values.
5. Appearance → Menus → create a Primary menu (optional — the header's
   nav is currently hardcoded to match the Astro site's IA rather than
   reading a WP menu, since that IA is unlikely to change independently of
   the content; wire `wp_nav_menu()` here instead if the client wants
   menu items editable from wp-admin without a theme edit).
6. Build out the remaining pages per the "worked example" above.
7. Set a static front-page image / SEO meta via whatever SEO plugin the
   client prefers (Yoast, Rank Math) — this theme doesn't ship its own SEO
   fields.

## Testing done

- `php -l` syntax-checked every `.php` file in this theme — no errors.
- All 16 shortcode functions were smoke-tested against a minimal WP-API
  stub (mocking `esc_html`, `shortcode_atts`, a real nested-shortcode
  parser, etc.) to confirm they render non-empty output, including the
  nested `[faq_item]` / `[review]` buffer pattern and the FAQPage JSON-LD
  output. **Not tested against a real WordPress install** — no WP/PHP/MySQL
  environment was available in this session. Before going live: install
  on a real WP instance (local by Flywheel, LocalWP, or a staging host),
  activate, and click through every template once.
