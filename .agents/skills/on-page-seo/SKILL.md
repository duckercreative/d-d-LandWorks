---
name: on-page-seo
description: >
  On-page SEO methodology for 75 Degree AC — title tags, meta descriptions, 
  heading hierarchy, keyword placement, internal linking, and content structure.
  Activates when optimizing page elements, rewriting titles/metas, or auditing on-page factors.
version: 1.0.0
client: 75 Degree AC
---

# On-Page SEO — 75 Degree AC

## Context

75 Degree AC has 178K monthly impressions but only 159 clicks (0.09% CTR vs 3–5% industry avg). The primary on-page opportunity is: existing pages that Google already shows, but visitors don't click because titles/metas are not compelling. Fix the titles + metas = immediate CTR lift without waiting for new rankings.

**Current Quick-Win Pages (from GSC data):**
| Page | Keyword | Impressions | Avg Position | CTR |
|------|---------|-------------|--------------|-----|
| /ac-repair-houston-tx/ | ac repair houston | 4,317 | 12.3 | Low |
| /hvac-service-and-repair/ | hvac repair houston | 867 | 31.9 | Low |
| / (homepage) | ac repair near me | 1,259 | 3.9 | Low |
| /ac-maintenance-checklist-houston/ | ac maintenance | 23,795 | 55 | Low |

---

## Input Files

- `03-gsc/data/queries-202604.csv` — real GSC query data (ground truth)
- `03-gsc/data/queries-by-page.csv` — which queries each page ranks for
- `03-gsc/data/seo-solutions.md` — Issues 4+5 (quick-win rewrites)
- `02-site-architecture/page-tracker.csv` — page inventory
- `business-info.md` — USPs, phone, brand details

---

## Title Tag Formulas

**Formula by page type:**

| Page Type | Formula | Max Chars |
|-----------|---------|-----------|
| Homepage | `[Business Name] \| [Service] [City] TX \| [USP]` | 60 |
| Service Hub | `[Service] [City] TX \| [USP] \| 75 Degree AC` | 60 |
| Emergency Page | `[Service] [City] TX \| [USP: 24/7] \| (713) 598-2737 \| 75 Degree AC` | 65 (phone adds urgency) |
| Location Page | `[Service] in [Neighborhood], TX \| [USP] \| 75 Degree AC` | 60 |
| Cost/Pricing Page | `[Service] Cost [City] TX [Year] \| Free Estimates \| 75 Degree AC` | 60 |
| Blog/Guide | `[Question or Topic] — [City] Expert Guide \| 75 Degree AC` | 60 |
| FAQ | `[Service] FAQs — Houston HVAC \| 75 Degree AC` | 55 |

**Title Tag Rules:**
- Primary keyword MUST appear (ideally first or second word)
- City (`Houston TX` or `Houston, TX`) MUST appear on all local pages
- Business name always last, after pipe separator
- No duplication across pages
- USP rotation: Same-Day | 24/7 | Licensed | Free Estimate | (713) 598-2737

**Pre-Written Title Tags for Key Pages:**

```
Homepage:
75 Degree AC | AC Repair & HVAC Service Houston TX | 24/7 (713) 598-2737

/ac-repair-houston-tx/:
AC Repair Houston TX | Same-Day Service | (713) 598-2737 | 75 Degree AC

/emergency-ac-repair-houston-tx/:
Emergency AC Repair Houston TX | 24/7 | (713) 598-2737 | 75 Degree AC

/ac-maintenance-checklist-houston/:
AC Maintenance Houston TX | Checklist + Professional Tune-Up | 75 Degree AC

/hvac-service-and-repair/:
HVAC Repair Houston TX | Licensed & Insured | 75 Degree AC

/commercial-ac-service-houston/:
Commercial AC Service Houston TX | Licensed Contractor | 75 Degree AC

/ac-repair-cost-houston-tx/:
AC Repair Cost Houston TX 2026 | Free Estimates | 75 Degree AC
```

---

## Meta Description Formula

**Structure:** [Keyword mention] + [USP/differentiator] + [Social proof] + [CTA + phone]

**Rules:**
- 130–155 characters (never exceed 160)
- Primary keyword in first 60 characters
- Must include (713) 598-2737 on high-commercial-intent pages
- CTA verb: "Call", "Get", "Book", "Find out" — never "Contact us"
- Social proof: "since 2016", "licensed TACLA", "all major brands"
- Urgency where applicable: "same-day", "out in hours", "24/7"

**Pre-Written Meta Descriptions for Key Pages:**

```
Homepage (161 chars — trim to 155):
Houston's trusted HVAC contractor since 2016. AC repair, installation & 
maintenance — same-day, 24/7 emergency, free estimates. Licensed (TACLA). 
Call (713) 598-2737.

/ac-repair-houston-tx/ (152 chars):
AC broke down in Houston? We repair all brands same-day. Licensed (TACLA), 
most repairs on first visit. Free estimate — call (713) 598-2737.

/emergency-ac-repair-houston-tx/ (148 chars):
AC emergency in Houston? 75 Degree AC responds 24/7 — nights, weekends, 
holidays. Licensed, same-day fix. Call now: (713) 598-2737. Free estimate.

/ac-maintenance-checklist-houston/ (155 chars):
Houston AC maintenance checklist + professional tune-up service. Same-day 
appointments, licensed techs, from $89. Free estimate. Call (713) 598-2737.
```

---

## H1 Tag Standards

- One H1 per page (never zero, never two)
- Include: primary keyword + city modifier
- Question or statement format (not identical to title tag)
- H1 examples:

```
Homepage: 
Houston HVAC Contractor — AC Repair, Installation & Service

/ac-repair-houston-tx/:
AC Repair in Houston, TX — Same-Day Service, Licensed Technicians

/emergency-ac-repair-houston-tx/:
Emergency AC Repair in Houston, TX — 24/7 Same-Day Service

/commercial-ac-service-houston/:
Commercial AC Service Houston, TX — For Offices, Retail & More
```

---

## Heading Hierarchy (H2/H3 Strategy)

**H2 purposes:**
1. Primary keyword variant (first H2 usually)
2. "Why Choose 75 Degree AC for [Service]"
3. "Our [Service] Process"
4. "Service Areas"
5. Question format for AIO: "How Much Does [Service] Cost in Houston?"
6. FAQ section: "Frequently Asked Questions"

**Question H2s for AI Overview targeting (write these for high-impression pages):**
- "How much does AC repair cost in Houston, TX?"
- "How fast can 75 Degree AC respond for emergency AC repair?"
- "What HVAC brands does 75 Degree AC repair in Houston?"
- "Is 75 Degree AC licensed and insured in Texas?"
- "What neighborhoods in Houston does 75 Degree AC serve?"

---

## Keyword Placement Checklist

For every optimized page, verify:

| Element | Requirement | Priority |
|---------|-------------|----------|
| Title tag | Primary keyword in first 50 chars | Critical |
| H1 | Primary keyword exact or close variant | Critical |
| First paragraph | Keyword in first 100 words | Critical |
| H2 (first) | Primary keyword variant | High |
| URL slug | Keyword-based, hyphens, no stop words | High |
| Image alt text | Descriptive: "[service] in [city], Houston TX" | Medium |
| Meta description | Keyword in first 60 chars | High |
| Body text | Keyword density: 1–2% (natural, not stuffed) | Medium |
| Last paragraph | Keyword + CTA + phone | Medium |
| Internal link anchor | Exact keyword anchor in 1+ internal link | High |

---

## Internal Linking Standards

Every service page must link to:
1. Emergency AC page (/emergency-ac-repair-houston-tx/)
2. Main AC repair hub (/ac-repair-houston-tx/)
3. One related service (contextual)
4. Homepage (from breadcrumb)

**Anchor text rules:**
- Use keyword-rich anchors: "AC repair Houston" not "click here"
- Vary anchors across pages to avoid over-optimization
- Service pages link DOWN (to sub-services) and ACROSS (to related services)

**High-priority internal links to add (from seo-solutions.md Issue 8):**
```
Homepage → /ac-repair-houston-tx/ with anchor "AC Repair Houston"
Homepage → /emergency-ac-repair-houston-tx/ with anchor "Emergency AC Repair"
/ac-maintenance-checklist-houston/ → /ac-tune-up-houston/ with anchor "schedule a professional tune-up"
/houston-ac-maintenance-guide/ → /ac-repair-houston-tx/ with anchor "AC repair Houston"
Every service page → Related services footer block
```

---

## Content Structure for AI Extraction

Every key service page must contain:

**Answer Block (write one per page — 134–167 words):**
Starts with a direct answer to the primary query. Self-contained. Fact-rich.

Example for /ac-repair-houston-tx/:
```
AC repair in Houston, TX costs between $150 and $900 depending on the issue.
75 Degree AC provides same-day AC repair for all major brands — Carrier, Trane,
Lennox, Goodman, Rheem, American Standard, and Daikin. We're licensed by the
Texas Department of Licensing and Regulation (TACLA), fully insured, and
dispatch technicians within hours of your call. Most repairs are completed on
the first visit because our trucks are fully stocked with common parts. For
AC emergencies, we're available 24/7 including nights, weekends, and holidays.
Free estimates on all repairs. Call (713) 598-2737 and a dispatcher will confirm
your appointment time and estimated arrival window.
```

---

## How to Implement in WordPress + Rank Math

**To update title tag and meta:**
1. WordPress Admin → find the page → Edit
2. Scroll to Rank Math SEO box → Edit Snippet
3. Paste new title → paste new meta description
4. Click Update

**To update H1:**
1. Open page in Elementor
2. Find the heading block at top of page
3. Change to new H1 text → Save

**After every change:**
GSC → URL Inspection → enter URL → Request Indexing

---

## Output Files

On-page audit: `03-gsc/data/onpage-audit-[date].md`
Page-by-page rewrites: `03-gsc/data/onpage-rewrites-[date].md` (ready to paste)
