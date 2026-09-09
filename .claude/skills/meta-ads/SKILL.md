---
name: meta-ads
description: >
  Meta Ads strategy methodology for 75 Degree AC and HVAC contractors under
  Andromeda + GEM (Oct 2025 rollout) — Entity ID-aware creative volume rules,
  Advantage+ Audience design, consolidated 3-campaign architecture for narrow
  scope and 5-campaign master plan for full scope, 12-concept HVAC creative
  bank, Hook Rate / Hold Rate / Creative Similarity Score benchmarks, MER and
  Cost Per Closed Job KPIs, CAPI + offline conversion uploads, retargeting
  funnel sequencing, and a 12-point Andromeda compliance audit. Activates
  whenever the user is planning, building, auditing, scaling, pausing,
  rebuilding, or reporting on Meta Ads — even if they only mention
  "Facebook Ads", "Instagram Ads", "Advantage+", "Andromeda", "GEM",
  "retargeting", "lookalikes", "lead forms", "Pixel", "CAPI", "creative pack",
  "ad creative", "Hook Rate", or any specific campaign symptom (rising CPL,
  creative fatigue, ads not delivering, stuck in learning phase, frequency too
  high, ROAS dropping, leads not closing, CPMs spiking).
version: 2.2.0
client: 75 Degree AC
last_updated: 2026-05-02
---

# Meta Ads Strategy — HVAC, Andromeda Era

## The One Idea That Changes Everything

Meta's Andromeda retrieval engine (global rollout Oct 2025) fundamentally changed how ads get delivered. The old playbook (5 campaigns × 3 ad sets × 5 ads, narrow interest stacks) is now actively penalized.

**The shift: creative diversity is the new audience targeting.** Andromeda assigns each ad an Entity ID by visual + audio + textual signature. Similar ads collapse into one Entity ID and get suppressed. Your job is no longer to find the audience — it's to feed the system enough genuinely different creative concepts that GEM can match the right one to the right user. Every rule below flows from this.

---

## Eight Operating Principles

These are non-negotiable. If a user asks for something that violates them, push back and propose the Andromeda-aligned alternative.

| # | Principle | Why it matters |
|---|---|---|
| 1 | Creative Similarity Score must stay <40% (above 60% triggers retrieval suppression) | Ads with similar signatures get collapsed into one Entity ID and forced to compete with each other for retrieval |
| 2 | Consolidate to 1 ad set with 15–25 ads, not 5 ad sets with 5 each | Each ad set needs 50+ conversions/week to exit learning. Fragmentation starves the algorithm. Controlled tests: +17% conversions, -16% cost when consolidated. |
| 3 | Advantage+ Audience over manual interest stacks | Andromeda treats targeting as a soft hint and expands beyond it via creative signals. Manual stacks constrain discovery. |
| 4 | Every concept ships in 9:16 + 1:1 + 4:5 | Format diversity = placement coverage (Reels, Stories, Feed). One ratio per concept loses reach. |
| 5 | Refresh 8–12 NEW concepts per month (fatigue is now 2–3 weeks, was 6+) | Andromeda burns through creative fast. Starvation = CPM spike. |
| 6 | Track MER + Cost Per Closed Job, not just CPL | Pixel ROAS lost 30–40% signal post iOS. A $20 lead that doesn't close is worse than an $80 lead that books $9K. |
| 7 | CAPI + weekly offline conversion uploads are mandatory | Without CAPI: 30–40% signal loss. Without offline uploads: GEM optimizes for cheap leads, not closed jobs. |
| 8 | Video hooks land in the first 1.5 seconds (frame 1 visual, 0.8s verbal, captions burned in) | Andromeda decides whether to feed an ad to more users in this window. No fades, no logo opens. |

---

## Account Architecture

**Default to consolidated structure based on scope.** The CLAUDE.md 5-campaign master plan is the strategic template; the 3-campaign Andromeda mode is the operational build for narrow scope.

### Scope = Narrow (Installation only — current 75 Degree AC scope, May 2026)

3 campaigns total. Companion file: `06-meta-ads/meta-ads-installation-andromeda-strategy.md`.

| # | Campaign | Budget | Type | Ad sets × ads |
|---|---|---|---|---|
| 1 | Lead Gen Advantage+ | 65% | Advantage+ Sales | 1 × 20–25 |
| 2 | Manual Retargeting | 25% | Manual / Conversions | 3 × 8–12 (by audience temp) |
| 3 | Creative Testing | 10% | Manual / Engagement → Leads | 1 × 5 (rotated weekly) |

### Scope = Full (5 campaigns per CLAUDE.md)

| Campaign | Budget | Window | Type |
|---|---|---|---|
| Retargeting | 20% | Year-round | Manual; 3 ad sets by temperature |
| Pre-Summer AC | 30% | Mar–May | Advantage+ Sales |
| Pre-Winter Heating | 20% | Oct–Nov | Advantage+ Sales |
| Ductless / Install Awareness | 15% | Year-round | Advantage+ Sales |
| Lookalike Expansion | 15% | Year-round | Advantage+ — skip if seed <500 |

---

## Audience Design

**Default: Advantage+ Audience with 3–5 hint signals + hard exclusions only.** Manual targeting only when sequencing matters (retargeting) or hard regulatory constraints exist.

### Retargeting Pools (build day 1)

| Audience | Source | Lookback | Use For |
|---|---|---|---|
| Phone tappers (no convert) | Pixel custom event | 30d | Hot — direct close |
| Lead form openers (no submit) | Meta native | 30d | Hot — financing close |
| Financing/pricing page visitors | Pixel | 60d | Hot — urgency |
| All site visitors | Pixel | 180d | Warm — testimonials |
| IG/FB engagers | Meta native | 90d | Warm — education |
| Video viewers ≥50% | Meta native | 180d | Cool — repeat exposure |
| Past customers (CRM) | Customer list | n/a | Excluded everywhere except seed |

### Cold Audience Templates

Apply Andromeda spirit: hints are loose suggestions, not constraints.

| Template | Geo | Age | Advantage+ Hints | Hard Exclusions |
|---|---|---|---|---|
| Pre-Summer / Install / Replace | Houston metro + 25mi | 30–65 | homeowners · recently moved 180d · home improvement · energy-efficient appliance · smart home | renters · competitor employees · existing customers · 30d converters |
| Pre-Winter Heating | Same | 30–65 | HVAC · energy · weatherization · heat pump | Same |
| Ductless | Same | 28–55 | mini-split · smart home · IG-active · modern home design | Same · layer pre-1980 home zip overlay |
| Commercial | Houston metro + 30mi | 30+ | facility manager · property manager · commercial real estate | Same |

**Lookalikes are now optional.** Skip LAL unless you have 500+ customer seed AND 100+ closed conversions. Below that, the seed is statistical noise — you'll waste budget and Andromeda will outperform via Advantage+ Audience.

---

## Creative Production Standard

### Volume Targets

| Metric | Floor | Target | Top-Tier |
|---|---|---|---|
| Live ads at any time | 20 | 30 | 50+ |
| New concepts/month | 8 | 12 | 20+ |
| Variations per concept | 2 | 3 | 4 |
| Creative Similarity Score | <50% | <40% | <30% |
| Refresh cadence | 3 weeks | 2 weeks | Continuous |

### Concept Architecture

**8–12 fundamentally different concepts**, then 2–3 variations of each. Concepts must differ on:
- Hook (problem / financial / social proof / urgency / education)
- Format (UGC video, motion graphic, talking-head, time-lapse, static, carousel)
- Tone (urgent / reassuring / educational / aspirational / humorous)
- Aspect ratio (every concept ships in 9:16 + 1:1 + 4:5 — this is non-negotiable)
- Music + pacing (silent vs. upbeat vs. emotional changes Entity ID)
- Visual system (vary 2–3 brand looks across the bank — e.g., navy, warm slate, photo-led)

### The HVAC 12-Concept Bank (default for 75 Degree AC)

Fill these slots when generating creative unless scope dictates otherwise:

1. Technician Spotlight (UGC video)
2. Repair Cost Stacking (motion graphic)
3. Financing Headline (bold static + carousel)
4. Before/After Ductless (photo carousel)
5. Energy Bill Reduction (static infographic)
6. Smart Thermostat Upgrade (UGC unboxing)
7. Trust Block (license + reviews + tenure)
8. Customer Testimonial (UGC long-form)
9. Same-Day / Speed (time-lapse video)
10. Replace vs Repair (educational carousel)
11. Anchored Free Estimate (static + short video)
12. Heat Pump Education (talking-head video)

Plus 3 retargeting-only: R1 "You almost called", R2 "Why now beats next year", R3 Customer Win.

Full briefs: `06-meta-ads/meta-ads-creative-2026-05-02.md`.

### Creative Brief Output Format

When the user asks for a creative pack, produce each concept in this exact structure so the designer can execute without follow-up:

```
### CONCEPT N — [Name]
- Concept ID: INST-AND-NN-LABEL
- Format: [UGC video / motion / static / carousel] · [duration if video]
- Persona: [match] · Funnel: [Top/Mid/Bottom]
- Testing hypothesis: [what this concept tests vs the rest]

**Hook variants (3):**
1. "..."
2. "..."
3. "..."

**Visual direction:** [palette · talent · location · key shots · pattern interrupt at :03]

**Copy:**
- Primary text: [125-char first line]... [full body]
- Headline (≤27): "..."
- Description (≤27): "..."

**CTA:** [button] · LP: [url] · Why this LP: [rationale]

**Ratios:** 9:16 / 1:1 / 4:5 — [note where reframing differs from cropping]
```

End every creative pack with the explicit total file count: `12 concepts × 3 ratios = 36 final files`.

### Banned Patterns (will get suppressed)

- Stock photos of generic technicians, AC units, families
- "Free Estimate" as the primary headline (low-quality signal)
- Same brand frame across all ads (similarity collapse)
- Direct copy/paste of Google Ads RSA copy
- Wall of trust badges (BBB + Google + Yelp + …) — pick one, use it well
- Phone numbers as primary creative element (use CTA button)
- Generic "happy family in living room" stock footage
- AI-generated voiceovers in service categories (Andromeda flags as low-trust)

---

## Bidding & Budget

| Phase | Trigger | Strategy | Why |
|---|---|---|---|
| Learning | Days 1–14 OR <50 conversions | Lowest Cost (no cap) | Let Andromeda explore |
| Stabilization | 50–200 conversions | tCPA | Soft guardrails |
| Scaling | 200+ conversions | Cost Cap or tROAS | Hard ceiling once creative proves |

- **Daily budget floor:** $50/day per ad set (below this, learning never exits)
- **Scaling rule:** +20% max per 24h. Above triggers learning re-entry.
- **Frequency caps:** 3.0 prospecting / 5.0 retargeting

---

## Tracking & Measurement

### Required Stack (P0 — no campaign launches without these)

- Meta Pixel + **CAPI verified** in Events Manager
- Standard events: PageView, ViewContent, Lead, Schedule, Purchase
- Custom events: `EstimateBooked`, `InstallScheduled`, `InstallClosed`
- CallRail dynamic numbers on landing pages
- GA4 + UTM discipline (`utm_source=meta` / `utm_campaign=...` / `utm_content=[ad_id]`)
- **Offline conversion upload weekly** — CSV (booked → closed → revenue) feeds GEM the real signal

### KPI Targets

| Metric | Month 1 | Month 3 | Month 6 |
|---|---|---|---|
| CPL cold | <$50 | <$32 | <$22 |
| CPL retargeting | <$25 | <$14 | <$9 |
| Hook Rate (3s) | >25% | >35% | >50% |
| Hold Rate (75%) | >5% | >10% | >18% |
| Link CTR | >0.9% | >1.4% | >2.2% |
| Lead → Booked Estimate | 35% | 50% | 60% |
| Estimate → Closed Job | 22% | 30% | 38% |
| **Cost Per Closed Install** | **<$650** | **<$380** | **<$280** |
| ROAS (Meta-attributed) | 7x+ | 12x+ | 18x+ |
| **MER (blended)** | **4x+** | **6x+** | **9x+** |

### Reporting Cadence

- Daily auto: spend, leads, CPL, CTR, frequency
- Weekly: lead → estimate → close, Cost Per Closed Job, MER, top/bottom creatives, similarity audit
- Monthly: concept performance distribution, fatigue map, MER trend, audience overlap

---

## Workflow: Andromeda Account Audit

The audit task is high-leverage. **Diagnose using both vanilla Meta knowledge AND Andromeda-specific lenses.** Most user accounts have problems from both eras layered on top of each other — the high-impact fix queue blends both.

### Audit Sequence (12 checks)

For each, output Pass / Watch / Fail + why:

1. **Campaign count vs conversion volume** — Each campaign needs 50+ conv/week. Are they hitting it?
2. **Ad set fragmentation** — Any campaign with 3+ ad sets running similar audiences? Recommend consolidation.
3. **Ads per ad set** — Anything <10 = creative-starved. Anything <15 = sub-optimal under Andromeda.
4. **Creative similarity audit** — Visual scan top 10 ads. Flag template/background/typography clusters at risk of Entity ID collapse.
5. **Format diversity** — Any concept missing 9:16 / 1:1 / 4:5?
6. **Audience constraints** — Manual interest stacks of 8+? Recommend Advantage+ Audience.
7. **Frequency caps** — Prospecting >3.0? Retargeting >5.0?
8. **Fatigue window** — Any creative live >3 weeks?
9. **CAPI status** — Verified or Pixel-only? (P0)
10. **Offline conversion uploads** — Live or missing? (P0)
11. **Refresh cadence** — 8+ NEW concepts launched in last 30d?
12. **Lookalike audiences** — Any LAL with seed <500 AND <100 closed conversions? Retire it.

### Diagnostic Framing

When explaining problems, use **both** the operational diagnosis (what specifically is broken) AND the Andromeda framing (why Andromeda makes this worse than it used to be). Example:

> "15 ad sets × 4-5 ads each means **none of your ad sets can hit 50 conversions/week** to exit learning phase. **Under Andromeda this is fatal** — the system needs concentrated conversion data to resolve which Entity IDs to retrieve. You're permanently stuck in exploration mode, paying premium CPMs without ever getting to the targeting clarity that drives down CPL."

This dual framing is what separates the new skill from generic Meta advice. **A user could get the surface diagnosis from any vendor — the Andromeda lens is what tells them *why* this is more urgent than it was 18 months ago.**

### Fix Queue Format

Always output prioritized:

- **P0 (this week):** [items] — what blocks signal flow (CAPI, offline conversions) or causes immediate budget waste
- **P1 (2 weeks):** [items] — structural fixes (consolidation, creative volume, similarity audit)
- **P2 (30 days):** [items] — optimization layer (refresh cadence, retargeting pools, KPI migration)

Per item: name the action + estimated impact (e.g., "-25% CPL within 2 weeks").

---

## Workflow: New Account Launch

1. **Foundation check (P0):** CAPI verified · standard + custom events firing · custom audiences built · customer list uploaded for exclusion
2. **Scope decision:** narrow (3-campaign mode) or full (5-campaign per CLAUDE.md)
3. **Creative brief:** 12 concepts × 3 ratios per concept bank
4. **Audience setup:** Advantage+ Audience with hints + hard exclusions
5. **Campaign build:** 1 consolidated ad set with all 12+ ads
6. **Soft launch:** $50–100/day for first 7 days, no edits
7. **Week 2:** kill bottom 3 by Hook Rate
8. **Week 3:** ship 5+ new concepts, kill bottom 5 by CPL
9. **Week 4:** scale +20%/week if CPL on target; layer retargeting once 1,000 audience-pool members exist

---

## Common Pitfalls

1. **Insufficient creative volume** → Andromeda starves, CPMs spike. Fix: 8+ concepts/month minimum.
2. **Creative similarity creep** → Designer template rut, Entity IDs collapse. Fix: weekly similarity audit, 2–3 visual systems per pack.
3. **Over-editing campaigns** → Resets learning phase. Fix: 7-day no-touch rule, 20% budget changes max.
4. **Too many campaigns** → Data fragmentation. Fix: 3 campaigns max for narrow scope.
5. **Manual interest stacking** → Constrains audience discovery. Fix: trust Advantage+ Audience.
6. **No CAPI** → 30–40% signal loss. P0.
7. **No offline conversions** → Optimizes for cheap leads. P0.
8. **Slow lead response** → 5-min window blown. Fix: instant text + 5-min call SLA.
9. **CPL panic on Day 4** → Resets learning. Fix: 7-day evaluation window.
10. **Killing retargeting at frequency 3.5** → Wrong threshold. Retargeting tolerates 5–7.

---

## Companion Files

- `.claude/commands/meta-ads.md` — slash command (task router)
- `06-meta-ads/meta-ads-strategy.md` — high-level strategy (5-campaign master plan)
- `06-meta-ads/META-ADS-SETUP-GUIDE.md` — operational setup guide
- `06-meta-ads/meta-ads-installation-andromeda-strategy.md` — Installation-only Andromeda playbook
- `06-meta-ads/meta-ads-creative-2026-05-02.md` — current 12+3 creative brief pack
- `06-meta-ads/creatives/photo-shoot-shotlist.md` — photo/video production
- `06-meta-ads/creatives/briefs/campaign-[1-5]-*/creative-N.json` — per-campaign brief JSONs (new format)

---

## Creative Generation Workflow (KIE AI — Non-Negotiable)

**Always generate real images via KIE AI. Never produce HTML mockups as creatives.**

### Script
`06-meta-ads/ads-cli/scripts/generate_sizes.py`
- Takes one brief JSON → generates all 3 sizes automatically
- Always injects `logo.png` as reference image
- Saves directly to the correct campaign folder

```bash
python3 06-meta-ads/ads-cli/scripts/generate_sizes.py \
  --brief 06-meta-ads/creatives/briefs/campaign-1-emergency/creative-1.json
```

### Three Sizes — Always Generated for Every Creative
| File | Ratio | Dimensions | Placement |
|------|-------|-----------|-----------|
| `feed.png` | 1:1 | 1024×1024 | Facebook + Instagram square feed |
| `instagram.png` | 4:5 | 1024×1280 | Instagram portrait feed |
| `story.png` | 9:16 | 1024×1820 | Stories + Reels (safe zone y=250–1570) |

Each size is independently composed — never a crop of another.

### Folder Structure
```
06-meta-ads/creatives/
  logo.png                          ← brand logo (reference image for all generations)
  briefs/
    campaign-1-emergency/
      creative-1.json               ← brief for creative 1
      creative-2.json               ← brief for creative 2
    campaign-2-ac-repair/
    campaign-3-installation/
    campaign-4-maintenance/
    campaign-5-commercial/
    campaign-retargeting/
  campaign-1-emergency/
    creative-1/  feed.png | instagram.png | story.png
    creative-2/  instagram.png (older draft)
  campaign-2-ac-repair/
    creative-1/  feed.png | instagram.png | story.png
    creative-2/  instagram.png
  campaign-3-installation/
    creative-1/  feed.png | instagram.png | story.png   (cost stacking — current)
    creative-2/  feed.png | instagram.png               (testimonial)
    creative-3/  feed.png | instagram.png | story.png   (same-day timeline)
    creative-4/  feed.png | instagram.png               (free estimate)
    creative-5/  instagram.png                          (heat pump)
    creative-6/  instagram.png                          (old draft)
  campaign-4-maintenance/
    creative-1/  feed.png | instagram.png | story.png
    creative-2/  instagram.png
  campaign-5-commercial/
    creative-1/  feed.png | instagram.png | story.png
    creative-2/  instagram.png
  campaign-retargeting/
    creative-1/  instagram.png   (almost called)
    creative-2/  instagram.png   (3 reasons not to wait)
    creative-3/  instagram.png   (customer win)
```

### Brief JSON Required Fields
```json
{
  "name": "campaign-X-name-creative-N",
  "campaign_slug": "campaign-1-emergency",
  "creative_number": 1,
  "provider": "kie",
  "model": "gpt-image-2-text-to-image",
  "reference_images": ["/absolute/path/to/06-meta-ads/creatives/logo.png"],
  "campaign": { "objective": "...", "audience": "...", "offer": "...", "cta": "..." },
  "brand": { "name": "75 Degree AC", "primary_color": "...", "logo_usage": "reproduce logo exactly..." },
  "creative_direction": { "style": "...", "copy_on_image": "...", "must_include": [], "avoid": [] },
  "prompt": "..."
}
```

**Key rule:** `"campaign"` must be a dict (used by `build_prompt()`). The output folder name goes in `"campaign_slug"` (string). Never put the folder name string in `"campaign"`.

### Logo Prompt Instruction (include in every prompt)
> "The reference image is the official 75 Degree AC logo — reproduce it exactly on the technician's uniform and in the bottom trust strip. Do not distort or alter the logo."

### Parallel Run Rate-Limit Note
Running 5 campaigns simultaneously can trigger KIE R2 rate-limit errors (code 10058) because all jobs upload the same `logo.png` concurrently. If one fails, rerun it alone — it will succeed immediately.

---

End of skill methodology.
