# AI Content Formatting — Operational Rules

Distillation of `01-research/ai-content-formatting-2026.md`. Load this from `deep-research`, `content-briefs`, and `content-generation`. Every page and blog post must pass.

---

## The 9 Citation Multipliers (the numbers driving every rule)

| Format / Tactic | Citation Lift | Use |
|---|---|---|
| Comparison tables | **2.5–4.2×** vs prose | Whenever 3+ items × 3+ attributes |
| Numbered lists (processes/rankings) | **2.7×** | Any sequence or rank |
| FAQ block + FAQPage schema | **2.6×** | Every page with 4+ Q&A |
| Statistics on page | **+41%** (Princeton) | 1 per 300-500 words |
| Citing external authorities | **+115%** (Princeton, low-ranked) | 1 per major section |
| Direct quotations | **+28%** (Princeton) | ≥1 per page |
| Schema deployed | **2.5×** AI citation chance | All required types per §5 |
| Listicle format | **21.9%** of AI Overview citations | Use for "best X / top N / signs of" |
| Freshness (<30 days) | **82%** Perplexity citation rate | Visible Last Updated + dateModified |

The first 30% of content contains **44.2%** of all LLM citations — front-load the answer block.

---

## The 9 Structural Patterns (every page must hit all 9)

1. **Answer-first paragraphs** — 40-75 word self-contained answer under every H2
2. **Question-shaped H2s** — under 10 words, matching real PAA / Reddit / Quora phrasing
3. **Standalone sections** — each readable without prior context
4. **One-idea paragraphs** — 2-4 sentences, single concept
5. **Comparison tables** — 3+ items × 3+ attributes
6. **Numbered lists** — for sequences, processes, rankings
7. **Fact-dense sentences** — specific numbers, named entities, dates, sources
8. **Explicit entity naming** — no pronouns referring across passages
9. **Clean semantic HTML** — real `<h2>` `<ol>` `<ul>` `<table>` `<th>`, not styled divs

---

## Format Decision Table (use the right format every time)

| Content Type | Format | Required Schema |
|---|---|---|
| 3+ items × 3+ attributes | Comparison table | — |
| Step-by-step process | Numbered list (`<ol>`) | HowTo |
| Ranked recommendation, "best X / top N / signs of" | Numbered list (`<ol>`) | ItemList |
| Parallel items (symptoms, ZIPs, brands, features) | Bulleted list (`<ul>`) | — |
| Direct answer to a question | Answer-first paragraph (40-60 words) at H2 start | Speakable |
| Page-level summary | 134-167 word AI passage block in first 30% of content | Speakable |
| Q&A content | FAQ block (8-10 Q&A) | FAQPage |
| Blog post | Article wrapper | Article + Author |
| Money page | Service or HVACBusiness | Service + LocalBusiness |

---

## Per-Page Format Checklist (the gate)

### Structural

- [ ] All H2s are user questions under 10 words from `02-question-mine.md`
- [ ] ≥1 comparison table (any multi-attribute content)
- [ ] ≥1 numbered list (any process or ranking)
- [ ] ≥1 bulleted list (any parallel items)
- [ ] Answer-first paragraph (40-60 words) under every H2
- [ ] 134-167 word AI passage block in first 30% of content
- [ ] FAQ block (8-10 Q&A) with FAQPage schema mirroring visible content
- [ ] Visible "Last Updated: Month Year" timestamp = `dateModified` in schema

### Density

- [ ] ≥1 statistic per 300-500 words
- [ ] ≥1 cited external authority per major section
- [ ] ≥1 direct quotation per page
- [ ] All entities named (no pronouns across passages)

### Schema

- [ ] Article (blog) OR Service/HVACBusiness (money page)
- [ ] FAQPage with verbatim-matched Q&A
- [ ] BreadcrumbList
- [ ] HowTo (if any numbered process)
- [ ] ItemList (if any ranked list)
- [ ] Speakable (on answer-first paragraphs)
- [ ] dateModified = visible Last Updated

### HTML

- [ ] Real `<h2>`, `<h3>`, `<ul>`, `<ol>`, `<li>`, `<table>` (not styled divs)
- [ ] Native form / button / link elements
- [ ] All links have descriptive anchors (no "click here")

If any gate fails: rewrite the affected section. Do not patch.

---

## Table Construction Rules

- **3-5 columns max** (LLM accuracy drops past 5)
- **5-8 rows ideal** (split if 20+)
- **First column = entity / row label**
- **Last column = the most-asked value** (price, time, lifespan)
- **Units inside cells**, not headers
- **Consistent format per column**
- **Currency / % / time explicit** ("$8,500–$14,500" not "8500-14500")

**Pre-table framing sentence** — frames what's compared + contains primary keyword.
**Post-table interpretation sentence** — names the takeaway; AI uses this to caption.

Example pair:
> "Real installed-cost ranges for an R-454B central AC in Houston in 2026, by tonnage:"
> [table]
> "A 3-ton R-454B system in a 1,500-2,000 sq ft Houston home runs $7,000-$9,500 installed in 2026."

---

## Numbered List Construction Rules

- Use for sequence, process, or rank — anything where order changes meaning
- Visible count in H2 ("7 Signs..." not "Signs...")
- Each item leads with **bold lead-in phrase** + explanation
- Lead-in is the citable unit — must be self-contained
- Steps named with action verbs
- Pair with HowTo (process) or ItemList (rank) schema

---

## Bulleted List Construction Rules

- Use for parallel items without sequence
- 3-7 items ideal; 8+ → split or convert to table
- Each bullet self-contained (extractable independently)
- Parallel grammatical structure across items
- No bullet should require the one above to make sense

---

## Question-Shaped H2 Rules

- Under 10 words
- Match real PAA / Reddit / Quora phrasing verbatim from `02-question-mine.md`
- Primary keyword in ≥1 H2 verbatim
- Location modifier in 30-50% of H2s for local pages
- Sentence case (not title case)

| Generic (avoid) | Question (use) |
|---|---|
| Our Process | How a Houston AC Diagnostic Actually Works |
| Pricing | What Does AC Repair Cost in Houston in 2026? |
| Repair vs Replace | When to Repair vs Replace Your Houston AC |

---

## Answer-First Block Template (per H2)

```
## How Long Does AC Repair Take in Houston?

Most Houston AC repairs are completed in one technician visit lasting 60 to 120 minutes. Capacitor and contactor swaps run 30-60 minutes; refrigerant leak repairs typically need 2-4 hours including pressure testing. Compressor replacement is the exception, running 4-6 hours including refrigerant recovery and recharge.

[supporting prose / table / list]
```

The bold lead-in is what AI Overviews and ChatGPT extract.

---

## 134-167 Word AI Passage Block (page-level, first 30%)

```
[Direct answer to the page's primary query — 1 sentence]
[Supporting detail with specific numbers and entities — 2-3 sentences]
[Credential / trust signal — 1 sentence]
[What to do next + phone — 1 sentence]
```

Example for /services/emergency-ac-repair/:

> 75 Degree AC provides 24/7 emergency AC repair in Houston, including nights, weekends, and holidays. When your air conditioner fails during Houston summer, where heat index regularly exceeds 105°F, we dispatch a licensed technician the same day, typically within 2-4 hours of your call. Our trucks carry parts for 95% of common AC failures, including capacitors, contactors, refrigerant, and fan motors, so most repairs are completed on the first visit. 75 Degree AC is licensed by the Texas Department of Licensing and Regulation (TACLA72152E) and fully insured. We service all major brands including Carrier, Trane, Lennox, Goodman, Rheem, American Standard, and Daikin. For emergency AC repair in Houston, call (713) 598-2737.

---

## Statistics, Quotations, and Cited Sources

Princeton GEO study highest-impact tactics:
- **Statistics: +41%** — 1 per 300-500 words
- **Quotations: +28%** — ≥1 per page
- **Citing authorities: +115%** (lower-ranked) — ≥1 per major section

Allowed authorities for HVAC Houston content:
- weather.gov, noaa.gov
- epa.gov, energy.gov, energystar.gov
- tdlr.texas.gov, tdhca.state.tx.us
- houstontx.gov, houstonpermittingcenter.org
- ahridirectory.org, accadocs.com, ashrae.org
- centerpointenergy.com
- Manufacturer support (Carrier, Trane, Lennox, Goodman, Rheem, American Standard, Daikin)

Statistics count only when:
- Specific number (not "many" / "often" / "most")
- Has a unit (°F, %, $, hrs, years)
- Verifiable / citable

---

## Freshness Signals (mandatory)

- Visible "Last Updated: Month Year" timestamp at top of body
- `dateModified` in schema matches the visible date
- 2026 references in body (current refrigerant prices, current SEER2, current rebates)
- No stale year references on a 2026 page
- Refresh cadence logged in `02-site-architecture/page-refresh-log.csv`

Refresh triggers (within 14 days):
- CenterPoint rebate change
- R-410A / R-454B pricing ≥10% shift
- DOE / EPA rule update
- Houston code or permit fee change
- TDLR licensing rule change
- Texas HEEHRA launch

---

## Schema Decision Map

| Schema | When |
|---|---|
| **FAQPage** | Every page with 4+ FAQs |
| **HowTo** | Numbered process |
| **ItemList** | Ranked list ("top N," "best X," "signs of") |
| **Speakable** | Answer-first paragraphs |
| **Article** | Blog posts |
| **Service** / **HVACBusiness** | Money pages |
| **BreadcrumbList** | All non-homepage |
| **AggregateRating** | Service pages w/ reviews |
| **Author** | Blog posts (E-E-A-T weight) |
| **dateModified** | All pages, syncs to visible Last Updated |

All schema is JSON-LD, validated through Google Rich Results Test, synced to WPCode #8140.

---

## Platform Tuning Cheat Sheet

| Platform | Decisive Lever |
|---|---|
| **ChatGPT (browsing) + OAI-SearchBot** | Bing Webmaster Tools + IndexNow + third-party brand mentions |
| **Perplexity** | <30-day freshness + cited claims + directory NAP perfect |
| **Gemini + Google AI Overviews** | Knowledge Graph + GBP completeness + 134-167w block |
| **Copilot + Claude with search** | Bing index + cited authoritative sources |

---

## Anti-Patterns (audit before shipping)

| Anti-pattern | Fix |
|---|---|
| Wall-of-prose section | Extract parallels into list/table |
| H2 as generic category | Rewrite as the question being answered |
| Pronouns across sections | Replace with explicit entity name |
| Missing or stale Last Updated | Add timestamp + sync dateModified |
| Vague statistics ("many," "often") | Replace with number + cite |
| FAQ buried at bottom as paragraphs | Real FAQ block + FAQPage schema |
| Comparison written as prose | Convert to table |
| Process written as numbered prose | Convert to `<ol>` + HowTo schema |
| Styled divs as headings | Real `<h2>` / `<h3>` |
| Schema text ≠ visible text | Sync verbatim |

---

## See Also

- Full research with sources → `01-research/ai-content-formatting-2026.md`
- Master skill → `ai-visibility/SKILL.md`
- The 134-167 word block template → `ai-citability.md`
- AIO targeting checklist → `ai-overviews.md`
- Schema deployment specifics → `.claude/skills/schema-markup/SKILL.md`
