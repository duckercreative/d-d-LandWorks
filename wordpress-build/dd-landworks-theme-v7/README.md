# DD Land Works Theme v7

WordPress theme — exact port of the Astro site at d-d-land-works.vercel.app.

## Setup Checklist

### 1. Add the logo
Copy the logo file from the project root into:
```
assets/images/logo.png
```
The logo appears in the header (sticky nav), mobile menu (top bar), and footer.
The Astro source uses a wide horizontal lockup — the same file is used here.

### 2. Add site photos / project images
Copy these WebP files from `site/public/` into `assets/images/`:
- `project-excavation-bucket.webp` — homepage hero background
- `project-site-excavation.webp`   — about section photo
- `project-grading-driveway.webp`  — services section photo
- `before-lot.webp`, `after-lot.webp`
- `before-driveway.webp`, `after-driveway.webp`
- `project-finished-grading.webp`
- `project-finished-landscaping.webp` — estimate CTA background

### 3. Install & activate the theme
1. Zip the theme folder: `dd-landworks-theme-v7/`
2. Upload via **Appearance > Themes > Add New > Upload Theme**
3. Activate

### 4. Set the homepage
1. Create a page titled "Home" (leave editor blank — front-page.php handles all content)
2. Go to **Settings > Reading** → set "Your homepage displays" to a static page → select "Home"

### 5. Create pages with the correct templates

| Page title          | Template to select        | Notes                             |
|---------------------|---------------------------|-----------------------------------|
| Contact             | Contact Page              | Has built-in form                 |
| About               | About Page                | WP editor content optional        |
| Service Area        | Service Area Page         | Hardcoded grid                    |
| Site Preparation    | Service Page              | Fill custom fields (see below)    |
| Excavation          | Service Page              | Fill custom fields                |
| Land Clearing       | Service Page              | Fill custom fields                |
| Grading & Leveling  | Service Page              | Fill custom fields                |
| etc.                | Service Page              |                                   |
| Eugene, OR          | Location Page             | Fill loc_city = "Eugene"          |
| Springfield, OR     | Location Page             | Fill loc_city = "Springfield"     |
| etc.                |                           |                                   |

### 6. Service page custom fields

Each service page template reads custom fields (post meta). Install a simple custom fields plugin
(e.g. **Advanced Custom Fields** free, or **Custom Field Suite**) and set these keys per page:

**Hero section:**
- `hero_eyebrow` — e.g. "Eugene, Oregon"
- `hero_h1_light` — light weight part of h1, e.g. "Professional Land Clearing"
- `hero_h1_bold` — bold part, e.g. "Services in Lane County"
- `hero_sub` — subtitle paragraph
- `hero_image` — URL to hero image (defaults to site-excavation)
- `hero_scope_label` — "Typical scope" (optional)
- `hero_scope_tags` — one tag per line (optional)

**Context / Compare cards:**
- `ctx_h2_light`, `ctx_h2_bold`, `ctx_intro`
- `ctx_left_label`, `ctx_left_title`, `ctx_left_tagline`, `ctx_left_bullets` (one per line)
- `ctx_right_label`, `ctx_right_title`, `ctx_right_tagline`, `ctx_right_bullets` (one per line)
- `ctx_banner` (optional one-line callout)

**Included items (JSON array):**
`incl_h2_light`, `incl_h2_bold`, `incl_intro`
`incl_items` — JSON, e.g.:
```json
[
  {"num":"01","title":"Site Walk","desc":"We walk the site first.","href":"/contact"},
  {"num":"02","title":"Clearing","desc":"Overgrowth removed.","accent":true}
]
```

**Problems (JSON array):**
`prob_h2_light`, `prob_h2_bold`, `prob_intro`, `prob_image`
`prob_items`:
```json
[
  {"num":"01","title":"Overgrown lot","desc":"Description.","link":"Land Clearing","href":"/land-clearing-services-eugene-or"}
]
```

**Process steps (JSON array):**
`proc_h2_light`, `proc_h2_bold`
`proc_steps`:
```json
[
  {"num":"01","title":"Step title","desc":"Description."},
  {"num":"02","title":"Step 2","desc":"Description.","accent":true}
]
```

**Cost + Timeline (JSON arrays):** optional, same pattern.

**FAQ (JSON array):**
`faq_h2_light`, `faq_h2_bold`
`faq_items`:
```json
[
  {"question":"How long does clearing take?","answer":"Depends on property size."}
]
```

**CTA (optional overrides):**
`cta_h2_light`, `cta_h2_bold`, `cta_sub`

### 7. Location page custom fields
`loc_city`, `loc_county`, `loc_state`, `loc_hero_image`,
`loc_h1_light`, `loc_h1_bold`, `loc_sub`, `loc_services_intro`,
`loc_faq_items` (JSON, same format as service page FAQ)

### 8. Blog
WordPress auto-handles blog at /blog (or whatever slug is set for posts).
The `archive.php` and `single.php` templates are already in place.

---

## Design System

Colors:
- Ink (near-black): `#16191B`
- Cream background: `#F3EFE8`
- Brand blue: `#1f7dc3`
- Accent (CTA): gradient `#FFB347 → #E8650C → #C84A0A` (burnt orange)
- DEQ badge orange: `#f97316` (only for Coming Soon badges)

Fonts (loaded from Google Fonts):
- Display/headings: **Barlow Condensed** (300, 400, 500, 600, 700)
- Body: **Barlow** (400, 500, 600, 700)

---

## Available Shortcodes

| Shortcode                    | Output                                    |
|------------------------------|-------------------------------------------|
| `[ddlw_cta]`                 | Full estimate CTA section with contact    |
| `[ddlw_trust_bar]`           | 4-item trust strip                        |
| `[ddlw_review_cards]`        | 3 customer review cards (dark bg)         |
| `[ddlw_service_area_pills]`  | Area pill links                           |
| `[ddlw_contact_info]`        | Phone + email contact links               |

---

## Files

```
dd-landworks-theme-v7/
├── style.css                  ← Theme declaration + all CSS (pure, no Tailwind)
├── functions.php              ← Enqueue, theme support, shortcodes loader
├── header.php                 ← Utility bar + sticky nav + mobile menu
├── footer.php                 ← Footer grid + bottom bar
├── front-page.php             ← Homepage (all sections hardcoded)
├── index.php                  ← Fallback / archive list
├── page.php                   ← Default page
├── single.php                 ← Blog post
├── archive.php                ← Blog / taxonomy archive
├── 404.php                    ← 404 page
├── page-templates/
│   ├── template-service.php   ← Service page (data-driven via custom fields)
│   ├── template-location.php  ← Location page
│   ├── template-contact.php   ← Contact page with form
│   ├── template-about.php     ← About page
│   └── template-service-area.php ← Service area grid page
├── inc/
│   ├── shortcodes.php         ← Reusable shortcode components
│   └── nav-menus.php          ← Walker for "Coming Soon" menu badges
└── assets/
    ├── js/main.js             ← Mobile menu + dropdown JS
    └── images/                ← Place logo.png + project images here
```
