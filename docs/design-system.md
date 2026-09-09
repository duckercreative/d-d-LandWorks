# D&D Land Works — Design System

**Status:** v1.2, updated 2026-09-05. Logo file is saved at `logo.png` (project root) and `site/public/logo.png`. Colors below are color-picked directly from the actual file's pixel data (via PIL dominant-color extraction), not estimated — `--color-brand-blue` was corrected from an earlier estimate (`#1D4ED8`, too indigo) to the real `#1F7DC3` (more cyan/sky), which is a meaningfully different blue, so don't reuse the old value anywhere it may have been copied.

**v1.2 change:** typography swapped from Barlow Condensed/Barlow to **Outfit/Poppins** after reviewing competitor [brynionex.com](https://brynionex.com/) (Brynion Excavation, Kelso WA) — see "Competitor reference" below. Colors were deliberately **not** changed to match the competitor; D&D's brand-blue/safety-orange palette stays as-is, sourced from our own logo, not theirs.

Tokens live in [site/src/styles/global.css](../site/src/styles/global.css) as a Tailwind v4 `@theme` block — this doc is the *why*, that file is the *source of truth* for values.

---

## How this was chosen

Queried against this repo's `ui-ux-pro-max` design database (colors.csv + typography.csv) for "industrial / rugged / trade contractor" — not guessed freehand. Two results anchored the decision:

- **Colors:** the database's dedicated **Construction/Architecture** entry pairs an industrial neutral with a **safety-orange accent** — validates adding orange as a 4th color beyond the logo's black/white/blue, scoped to CTAs only. Still current in v1.2 — colors were not revisited by the competitor pass below.
- **Typography (superseded in v1.2):** **Barlow Condensed + Barlow** was the original v1.1 pick — top match for a "rugged industrial contractor" query, with a Caltrans highway-signage lineage that read as a strong fit for an excavation/civil-adjacent brand. Replaced in v1.2 with **Outfit + Poppins** after direct competitor review (see "Competitor reference" under Typography) traded some of that industrial-signage feel for a more modern, approachable geometric-sans look that matches what's actually winning in this niche's SERP right now.

## Colors

| Token | Hex | Use |
|---|---|---|
| `--color-ink` | `#0A0A0A` | Primary text, dark surfaces — matches the logo's black (sampled: `#000101`, effectively pure black) |
| `--color-ink-soft` | `#1C1C1C` | Secondary dark surface (cards on dark, footer bg) |
| `--color-brand-blue` | `#1F7DC3` | Primary brand color — links, primary buttons, headings that need emphasis. Color-picked directly from the logo's "WORKS" text |
| `--color-brand-blue-dark` | `#19649C` | Hover/active state for brand-blue elements |
| `--color-brand-blue-light` | `#DDECF6` | Light tint — badges, subtle backgrounds |
| `--color-safety-orange` | `#EA580C` | **CTA accent only** — "Call Now", "Free Estimate" buttons. Not in the logo; added deliberately for urgency/contrast, per the Construction/Architecture pattern match. Don't let it creep into general UI — it stays scarce so it keeps its urgency signal |
| `--color-safety-orange-dark` | `#C2410C` | Hover/active for orange CTAs |

White (`#FFFFFF`) and Tailwind's default `slate-*` scale (already available, not overridden) round out backgrounds, borders, and muted text — no need to hand-roll a full neutral ramp.

**Usage rule:** blue is the everyday brand color (nav, links, section accents). Orange is reserved for the handful of elements that should get the eye first — the phone number, the primary CTA button. If more than ~2 things per screen are orange, that's a signal something's wrong.

## Typography

| Token | Font | Role |
|---|---|---|
| `--font-display` | Outfit (500/600/700/900) | Headings, hero text, CTA button labels, nav, stat/counter numbers — modern geometric sans, reads clean at large display sizes |
| `--font-body` | Poppins (400/500/600/700) | Paragraphs, form fields, body UI, badges/eyebrow labels — geometric companion to Outfit, highly legible at small sizes |

Self-hosted via `@fontsource/outfit` and `@fontsource/poppins` (installed in `site/`) rather than loaded from Google Fonts' CDN — one less external request, no render-blocking third-party font fetch, works offline in dev.

**Weight usage:**
- 900 (Black) — hero headlines only, sparingly
- 700 (Bold) — H1-H3, button labels, stat numbers
- 600 (Semibold) — H4-H5, nav, emphasis
- 500 (Medium) — body-font emphasis (eyebrow labels, tags, accent text)
- 400 (Regular) — all body copy

### Competitor reference (brynionex.com, checked 2026-09-05)

Brynion Excavation (Kelso, WA) is a direct competitor — same trade, WordPress/Elementor site. Their production CSS (Elementor global typography vars) shows:

- **Primary/display:** Outfit, weight 600-900, sized 36-100px across headings/hero/stat counters
- **Body/text:** Poppins, weight 400-500, 14-17px
- **Secondary:** Roboto Slab (used sparingly, not adopted here — two families is enough)

We adopted their font pairing (Outfit/Poppins reads more modern and approachable than our prior Barlow Condensed/Barlow, without losing legibility) but **kept our own color palette** — their scheme runs teal/cyan (`#007197` secondary, `#0286B2` accent, `#1D1D1D` text) with soft pink tints (`#FDEFF0`, `#FFEAEB`), which is a different brand direction entirely. D&D's brand-blue (`#1F7DC3`) + safety-orange (`#EA580C`) come from our own logo and stay unchanged — do not pull Brynion's colors into this system.

Structural/component patterns worth reusing from their layout (documented here so future page-building pulls from this list instead of re-discovering it):
- **Stat/achievement counters** — large Outfit numerals (years in business, jobs completed, satisfaction %) as a trust-building strip, usually just below the hero
- **Testimonial cards with star ratings** — 5-star iconography + short quote + client name, carouseled
- **FAQ accordion** — expandable Q&A block, good fit for service pages (site prep, grading, drainage, septic) to absorb long-tail questions without bloating page length
- **Service grid** — icon + title + short description + "Read more" link, consistent card treatment across all services
- **Persistent phone number in header** — phone stays visible/clickable across scroll, not just in a footer

## Radius

Kept deliberately tight — the logo's letterforms are hard-edged and blocky, and a soft, pill-shaped UI would fight that.

| Token | Value | Use |
|---|---|---|
| `--radius-brand` | `0.25rem` (4px) | Buttons, badges, inputs |
| `--radius-brand-card` | `0.5rem` (8px) | Cards — slightly softer since they hold content, not just a label |

## Components

Defined in `site/src/styles/global.css` under `@layer components`. Always combine the base class with exactly one variant:

| Classes | Result |
|---|---|
| `btn btn-primary` | Brand-blue button — default action |
| `btn btn-cta` | Safety-orange button — phone number, "Free Estimate". Scarce by design (see Colors usage rule above) |
| `btn btn-outline` | Ink-outlined, transparent — secondary/tertiary actions |
| `btn btn-primary btn-sm` / `btn-lg` | Size modifiers, stack with any variant |
| `card` | White, bordered, `shadow-sm`, `radius-brand-card` — default content container |

**Tailwind v4 gotcha hit while building this:** referencing a custom `@theme` property from a utility needs **parentheses**, not brackets — `rounded-(--radius-brand)` resolves to `border-radius: var(--radius-brand)`; `rounded-[--radius-brand]` silently emits the literal string `--radius-brand` as the CSS value (invalid, no `var()` wrapper, so the browser drops it and the corner just renders square). Caught this via `grep`ing the compiled CSS output, not by looking at the file — always check compiled output when using arbitrary-value syntax against a custom token, not just that the build exits 0.

Also: `@apply` in Tailwind v4 only accepts real Tailwind utilities — it can't reference another custom class you defined yourself (e.g. `.btn-primary { @apply btn bg-brand-blue; }` fails with "Cannot apply unknown utility class `btn`"). That's why base (`.btn`) and variants (`.btn-primary`, etc.) are separate classes meant to be combined in markup, not chained through `@apply`.

## Applying it

Wired into `site/src/styles/global.css`, proven in `site/src/pages/index.astro` (uses the real logo image, `btn`/`btn-primary`/`btn-cta`/`btn-outline`, and `card` — confirmed compiling to real, non-empty CSS rules via `npm run build`, not just a clean exit code). New markup should reach for the component classes above first; drop to raw utilities (`font-display`, `text-brand-blue`, `bg-ink`, etc.) only for one-off layout, not to re-invent a button or card.

## Scoped exception: Hero CTA row

`Hero.astro`'s CTA row (used on every page) doesn't use the standard `.btn` classes. Per a direct request (2026-09-06), it uses a pill-shaped secondary button (`.btn-pill`, fully rounded, trailing circular icon badge) plus a phone-icon "Call us any time" badge for the primary CTA, styled with brand-blue/safety-orange rather than copying a competitor's colors. This deliberately breaks the "tight radius" rule above, scoped only to the Hero — service cards, `CTABlock`, header, and footer all keep the standard `.btn` system untouched.

## Open

- Favicon: the logo is a wide horizontal lockup ("D&D" + mountain + excavator + "LAND WORKS" bar), not a square icon mark — needs a deliberate square crop (likely just the "D&D" + mountain portion) rather than a naive resize, which would make it illegible at 16-32px. Not done yet.
- Spacing scale: no brand-specific override — Tailwind v4's default spacing scale is used as-is (4px base unit), which is standard and doesn't need reinventing for this site.
