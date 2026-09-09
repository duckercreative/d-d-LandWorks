---
name: internal-linking
description: >
  Internal linking strategy for 75 Degree AC — link equity distribution, hub-spoke patterns,
  anchor text diversity rules, orphan page detection, and per-page link map.
  Activates when planning internal links, fixing orphan pages, or mapping link equity.
version: 1.0.0
client: 75 Degree AC
---

# Internal Linking Strategy — 75 Degree AC

Design the complete internal linking map — link equity distribution, hub-spoke architecture, anchor text diversity, contextual placement rules, and orphan page detection.

---

## Link Equity Distribution Model

**Homepage** receives 100% of external link equity (domain authority inflows). Every internal link from the homepage distributes equity (damping factor ~0.85).

**Tier system:**

| Tier | Page Types | Equity Score (relative) | Min Inbound Links |
|------|-----------|------------------------|-------------------|
| 1 | Homepage | 1.00 | N/A |
| 1 | Emergency page, Service hubs | 0.60–0.80 | 5+ |
| 2 | Service sub-pages, Location pages | 0.30–0.50 | 3+ |
| 3 | Blog posts, secondary location pages | 0.10–0.25 | 2+ |

**Priority equity targets for 75 Degree AC:**
1. Emergency AC Repair page — highest conversion, needs maximum equity
2. AC Repair Houston — primary transactional page
3. HVAC Contractor Houston — broad authority hub
4. All location pages — local pack ranking factor

---

## Hub-Spoke Architecture Rules

### Service Silo Rules

1. **Service Hub → All Service Sub-Pages**: /ac-repair-houston-tx/ links to compressor repair, refrigerant repair, capacitor replacement, etc.
2. **Service Sub-Page → Service Hub**: Every sub-page links back to its parent hub (breadcrumb or body copy)
3. **Service Page → Related Services**: AC Repair links to AC Tune-Up and Emergency AC Repair (2-3 related)
4. **Cross-Hub**: AC Installation hub links to AC Repair hub (user journey: replaced unit = need for service)

### Location Silo Rules

5. **Service Areas Hub → All Location Pages**: /service-areas/ links to every location page
6. **Location Page → Service Areas Hub**: Every location page links back
7. **Location Page → Related Services**: /ac-repair-katy-tx/ links to all services available in Katy
8. **Location Page → Nearby Locations**: Katy page links to Sugar Land and Cypress pages

### Blog Post Rules

9. **Blog Post → 2-3 Transactional Pages** (REQUIRED): Every blog post MUST link to at least 2 service or location pages
10. **Blog Post → 1 Related Blog Post** (maximum): Never link exclusively to other blog posts
11. **Service Pages → Relevant Blog Posts**: Each service page links to 1-2 supporting blog posts

### Emergency Page Rules (Special)

12. Emergency page must be linked from:
    - Homepage navigation (above fold, visible without scroll)
    - Every service page (in a "Need Emergency Help?" CTA block)
    - Footer (every page)
13. Emergency page outbound links: Contact, Homepage only — no distractions

### Service × Neighborhood Matrix Rules (added 2026-05-22 — validated against top players)

14. **Bidirectional service-neighborhood linking** — every neighborhood page links to its 6 core service pages (repair, install, maintenance, emergency, heating, ductless), and each service page lists 5-7 neighborhood landing links in a service-area block.

15. **Adjacent-neighborhood linking** — every neighborhood page links to 3-5 adjacent neighborhoods (inner-loop ↔ inner-loop; Katy ↔ Cypress ↔ Sugar Land). Adjacency is geographic, not alphabetic.

16. **🛑 Anti-doorway gate (MANDATORY per `ai-citation-filter.md` §7)** — before adding a neighborhood page to the matrix, the page must satisfy ALL 6:
    - Unique neighborhood testimonials (≥2)
    - Region-specific photos (≥1 with recognizable local context)
    - Neighborhood-specific FAQs (≥3 different from parent service-page FAQs)
    - Unique opening paragraph (not templated swap)
    - Local-specific content (housing stock age, climate micro-zone, ZIP coverage, common system brands)
    - Adjacent neighborhood internal links (3-5)

    **If a neighborhood page can't pass all 6, don't add it to the matrix.** Google's March 2024 update killed 80% of templated location pages for a regional HVAC company (-63% organic traffic in 30 days). 30 deep pages outrank 300 thin ones.

17. **Matrix template:**

```
Cities × Services baseline:
- Cities: Katy, Sugar Land, Cypress, Pearland, The Woodlands, Bellaire, Spring,
          Tomball, Missouri City, Pasadena, Baytown, Richmond TX (NOTE: (346) phone)
- Services per city: AC Repair, AC Installation, AC Maintenance, Emergency,
          Heating, Ductless
```

URL pattern: `/locations/[city-tx]/[service]/` OR `/services/[service]/[city]/` — pick one, stay consistent.

### Listicle Hub Entry Points (added 2026-05-22)

18. **Listicle hub at `/blog/best-ac-repair-houston/`** — links OUT to every relevant service page + neighborhood page mentioned in the listicle.

19. **Listicle is linked FROM:** Homepage (in a "Best of Houston" section if applicable), every service page (in a "How to choose" block), and the blog index.

20. **Listicle cluster:** `/blog/best-ac-installation-houston/`, `/blog/best-emergency-ac-repair-houston/`, `/blog/best-furnace-repair-houston/`, `/blog/best-hvac-maintenance-houston/`, `/blog/best-ductless-installation-houston/` — each links to siblings + the parent listicle hub.

21. **🛑 Transparent-methodology gate** — listicle hub pages MUST include real competitor analysis (per `ai-citation-filter.md` §8). Google's January 2026 enforcement causes 29–49% visibility drops on self-promotional listicles.

### Cross-Platform Review sameAs Anchors (added 2026-05-22)

22. **Footer or about-page sameAs anchor block** — visible HTML anchors (not just schema) to:
    - GBP profile
    - BBB profile
    - Yelp business page
    - Facebook page
    - LinkedIn company page
    - Foursquare listing (priority — 60-70% of ChatGPT local recs)
    - ThreeBestRated profile (24% of ChatGPT local business directory citations)
    - Birdeye review hub
    - Wikidata Q-ID (when claimed)
    - YouTube channel (when launched)
    
    Anchor text: brand-name + platform (e.g., "75 Degree AC on Yelp", "75 Degree AC BBB profile"). Not "Click here" or "Yelp".

### Person Schema sameAs Anchor Rules (Kenny Ho)

23. **Kenny Ho bio block** on every service page links to:
    - Kenny's LinkedIn (`https://www.linkedin.com/in/kenny-ho-hvac/`)
    - Kenny's Facebook profile (`https://www.facebook.com/kennyho.75degreeac/`)
    - The About Us page (`/about-us/`)
    
    Anchor text: descriptive (e.g., "See Kenny's LinkedIn profile", "Read Kenny Ho's bio"). These anchors PAIR with the Person schema sameAs entries — visible HTML + schema must match.

---

## Anchor Text Strategy

### Types and Distribution Per Target Page

| Anchor Type | Max % | Target Range | Example (target: /ac-repair-houston-tx/) |
|-------------|-------|-------------|------------------------------------------|
| Exact match | 30% | 20–30% | "AC repair Houston" |
| Partial match | No cap | 35–45% | "professional AC repair service", "same-day AC repairs" |
| Branded | No cap | 5–15% | "75 Degree AC repair team" |
| Natural/Descriptive | No cap | 15–25% | "fix your air conditioner", "our repair technicians" |

**Hard rules:**
- NEVER use "click here", "learn more", "read more", "here", "this page"
- NEVER use naked URLs as anchor text
- Every anchor must tell the user what page they'll land on
- No two links on the same page use identical anchor text pointing to different targets

### Key Anchor Text Library (75 Degree AC)

**Pointing to Emergency Page:**
- "24/7 emergency AC repair Houston" (exact)
- "emergency HVAC service any time" (partial)
- "our emergency repair team" (natural)

**Pointing to AC Repair Houston:**
- "AC repair Houston TX" (exact)
- "professional air conditioner repair" (partial)
- "fix your AC today" (natural)

**Pointing to Location Pages:**
- "AC repair in Katy TX" (exact/partial)
- "our Katy HVAC technicians" (branded + location)
- "serving Katy and surrounding areas" (natural)

**Pointing to Blog Posts:**
- "why your AC might be blowing warm air" (natural — descriptive)
- "signs your AC needs replacement" (natural)

---

## Contextual Link Placement Rules

### Placement Weight

| Placement | Weight | Rule |
|-----------|--------|------|
| Body — Early (first 200 words) | Highest | Place the most important outbound link here |
| Body — Mid (200-500 words) | High | 1-2 supporting contextual links |
| Body — Late (final paragraphs) | Moderate | CTA-style links to contact or conversion pages |
| FAQ answers | Moderate | Links to detailed service pages from FAQ answers |
| Sidebar | Low-Moderate | "Most Requested Services" widget — persistent |
| Footer | Low | Ensures crawlability for every critical page |
| Navigation | Low | Crawlability guarantee — not topical relevance |

### Per-Page Link Budget

- **Maximum 3-5 contextual body links per page** (excluding nav, sidebar, footer)
- Hub pages (listing all services) may exceed 5 — their purpose is navigation
- Emergency page: maximum 2 body links (Contact + Homepage) — don't distract

---

## Orphan Page Detection

Minimum inbound internal links by page type:

| Page Type | Minimum Inbound Links |
|-----------|----------------------|
| Homepage | N/A |
| Emergency Page | 5 (from nav, footer, every service page) |
| Service Hub | 5 |
| Service Sub-Page | 3 |
| Location Page | 3 |
| Blog Post | 2 |
| About | 2 |
| Contact | 3 |

**Resolution process:**
1. Does the orphan's parent hub link to it? If not, fix first.
2. Do topically related pages link to it? Add from 2-3 most relevant.
3. Still below threshold? Add sidebar or footer link from high-traffic page.

---

## Output Files

### File 1: `02-site-architecture/internal-linking-map.md`

Sections:
1. Executive summary (total links, avg per page, orphan count)
2. Link equity distribution table (every page with tier, inbound count, outbound count)
3. Hub-spoke diagrams (ASCII notation)
4. Anchor text audit (per target page — percentage of each anchor type)
5. Orphan page report (list with resolution recommendations)
6. Full link map table

### File 2: `02-site-architecture/internal-linking.csv`

```
source_url, target_url, anchor_text, anchor_type, placement, priority
```

**anchor_type values**: exact, partial, branded, natural
**placement values**: body-early, body-mid, body-late, faq, sidebar, footer, nav
**priority**: 1=launch, 2=first 3 months, 3=expansion phase

---

## Quality Checklist

- [ ] Every page in page-tracker.csv appears as a target in at least 2 CSV rows
- [ ] No page has zero inbound internal links
- [ ] Emergency page is linked from homepage navigation AND footer AND all service pages
- [ ] Every service hub links to ALL its cluster service pages
- [ ] Every service page links back to its parent hub
- [ ] Every location page links back to the service areas hub
- [ ] Every blog post links to at least 2 transactional pages (service/location)
- [ ] No blog post links exclusively to other blog posts
- [ ] No anchor text uses generic phrases ("click here", "learn more", "read more")
- [ ] No target page exceeds 30% exact-match anchor ratio across all inbound links
- [ ] No single page has more than 5 contextual body links (hubs excluded)
- [ ] Most important outbound link on each page is in the first 200 words
- [ ] Priority 1 links form a complete navigable site with no dead ends
