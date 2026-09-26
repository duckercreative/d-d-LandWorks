# AI Citation Audit — Trenching Services Eugene Oregon (`/trenching-services-eugene-oregon`)

**Prepared:** 2026-09-26 · **Method:** AI Overview query analysis + 12-point citation filter from `04-competitor-matrix.md`

---

## AI Overview Presence by Query

| Query | AI Overview present? | Summary of AIO content (from SERP observation) | Sources cited |
|---|---|---|---|
| trenching services Eugene OR | No | — | — |
| trench digging contractor Lane County | **YES** | Brief process description; mentions calling 811 before digging; recommends licensed contractors; references Lane County | Directory-type sources observed; no named competitor page cited |
| utility trenching Springfield OR | No | — | — |
| irrigation trenching Oregon | **YES** | Depth guidance (vague — "6-12 inches" without mainline vs. lateral distinction); mentions draining before winter vs. burying below frost; OR 811 callout | Cojo Asphalt blog (`cojoasphalt.com/blog/irrigation-line-trenching-oregon`) cited; Reddit discussion cited |
| ditch digging Eugene Oregon | No | — | — |
| how much does trenching cost Oregon | **YES** | Cost range summary: "$8-40+ per foot for trenching"; mobilization fee mention; rock vs. dirt differential | Cojo Asphalt blog + Oregon Drain Cleaning cited; CostFlowAI cited |
| trenching company Lane County | No | — | — |
| residential trenching Oregon | No | — | — |

**Queries triggering AI Overview: 3 of 8 (37%)**

---

## AIO Entity Analysis (Per Query)

### Query: "trench digging contractor Lane County"

**Entities surfaced in AIO:**
- Oregon 811 (explicitly named — "call before you dig")
- Licensed contractor (as a category)
- Lane County (geolocation)
- Backfill / compaction (process mention)

**Key gap:** No specific contractor named in AIO (generic response). No depth specifications. No soil or seasonal context. **D&D can displace this AIO** by having a page that is the explicit entity answer: a licensed (CCB #261742), Lane County–based contractor with schema markup + local specificity.

**Citation opportunities:**
- First-party LocalBusiness schema with `areaServed: Lane County` + `containedIn: Eugene, OR`
- CCB license number in schema body text (not just schema)
- Oregon 811 reference with ORS Chapter 757 citation

---

### Query: "irrigation trenching Oregon"

**Entities surfaced in AIO:**
- Irrigation line trenching (service)
- Mainline vs. lateral (depth distinction — vague, not numeric)
- Willamette Valley / Oregon frost context
- Oregon 811 ("Call 811 First")
- Vibratory plow (equipment)
- Winterization (drain/blow-out context)

**Source cited:** Cojo Asphalt blog (`irrigation-line-trenching-oregon`)

**Key gap:** Cojo's blog is cited because it is the ONLY source that addresses this topic with Oregon-specific context. It does NOT give actual numeric depth figures for mainline vs. lateral. The AIO is forced to use Cojo by default.

**D&D displacement strategy:**
- Publish numeric depth figures: mainline 6–8 inches typical (12 inches near freeze risk), lateral 4–6 inches
- State explicitly: no Oregon state code minimum for irrigation — standard practice governs
- Willamette Valley frost depth: 12 inches (OPSC 609.1) — but irrigation lines must drain, not bury to frost depth
- Oregon 811 applies to irrigation trenching — quote ORS Chapter 757 (OAR 952-001-0010)
- FAQPage schema with 3+ direct answers on irrigation depth
- Page as a Service page (not a blog) — Google prefers entity-authoritative service pages

---

### Query: "how much does trenching cost Oregon"

**Entities surfaced in AIO:**
- Cost range: $8–$40+ per linear foot (Cojo)
- Hourly range: $125–$275+ (Cojo)
- Mobilization minimum: $500–$1,500+
- Rock vs. dirt differential
- Oregon labor premium context

**Sources cited:** Cojo Asphalt blog + Oregon Drain Cleaning + CostFlowAI

**Key gap:** Cojo's cost data wins AIO citation because: (a) it publishes explicit ranges, (b) it names Oregon, (c) it has multiple cost blog posts giving topical depth signals. Oregon Drain Cleaning wins for publishing $12–25/ft.

**D&D cost citation strategy:**
- Publish explicit Oregon ranges on the service page: $12–$25/ft standard; $30–$60/ft rock; mobilization $500–$1,500+
- Attribute source ranges: "consistent with Oregon market rates from regional contractors"
- Add table format — AI systems extract cost tables reliably
- Include: per-scenario estimates (100 ft irrigation run: $1,200–$2,500 installed; 300 ft irrigation: $3,600–$7,500)
- Frost note: "If your trench crosses driveway or hardscape, cost increases significantly — tell us when you call"

---

## 12-Point AI Citation Filter — D&D Target Path

From `04-competitor-matrix.md` — current competitor range: 1–4/12. D&D launch target: 8/12. Gap to 10/12 closes post-GBP.

| # | Point | Current status | What to add |
|---|---|---|---|
| 1 | GeneralContractor or Service schema | **Missing — add at launch** | `@type: ["LocalBusiness", "GeneralContractor"]` or verified excavation schema type |
| 2 | AggregateRating schema | Deferred (no reviews yet) | Add when first Google review lands |
| 3 | Service schema with `areaServed` | **Missing — add at launch** | `areaServed: [{name: "Eugene, OR"}, {name: "Springfield, OR"}, {name: "Lane County, OR"}]` |
| 4 | Person schema with `sameAs` | Deferred (GBP not set up) | Add `sameAs: [GBP URL]` when GBP is live |
| 5 | License # in HTML body | **Ready — use CCB #261742** | First paragraph + trust section; also in schema's `hasCredential` |
| 6 | `foundingDate` in schema | Unknown — confirm with David | If confirmed, add to schema |
| 7 | ≥3 direct-question H2s | **Missing — add at launch** | "How Deep Do Irrigation Lines Need to Be in Lane County?" + "How Much Does Trenching Cost in Eugene?" + "Do I Need to Call Oregon 811 Before Digging an Irrigation Trench?" |
| 8 | FAQPage schema | **Missing — add at launch** | 10-question FAQ from `02-question-mine.md` shortlist |
| 9 | ≥3 verifiable trust badges | **Ready** | CCB #261742 (verifiable at ccblookup.com), DEQ Certified (septic), Licensed and Bonded |
| 10 | `dateModified` + `datePublished` | **Add at launch** | Schema metadata + HTML `<time>` element |
| 11 | `sameAs` ≥5 links | Deferred (pending GBP/BBB/Yelp) | Priority after GBP setup |
| 12 | Eugene/Lane County–specific content | **Ready** | Malpass soil, Willamette Valley frost, specific city names throughout body |

**Launch score: 8/12** (points 1, 3, 5, 7, 8, 9, 10, 12)
**Post-GBP score: 10/12** (adds points 4 and 11)
**Full score: 12/12** (adds points 2 and 6 when reviews + founding year confirmed)

---

## AI Platform–Specific Notes

### Google AI Overviews
The three queries with AIO triggers are: (1) the transactional Lane County contractor query, (2) the informational irrigation depth/process query, and (3) the cost research query. All three have a gap D&D can fill with a single well-structured service page. The AIO for "irrigation trenching Oregon" cites Cojo by default — there is no local Eugene contractor alternative. Publishing numeric depth specs + Oregon 811 citation + schema will make D&D a strong candidate for citation once the page is indexed and earns authority signals.

### ChatGPT / Perplexity / Claude (AI assistants)
These systems favor: entities with verifiable external citation (CCB lookup link is ideal), numeric specificity (depth in inches, cost in dollars per foot), direct-question formatting, and FAQPage schema. The irrigation depth angle is the single highest-leverage passage for AI assistant citation — zero competing passages in Eugene contain numeric depth data.

### Voice Search
"How deep do irrigation lines need to be in Oregon?" is a natural voice query. The FAQ answer format ("Irrigation mainlines in Lane County are typically buried 6 to 8 inches deep…") is exactly the answer format voice assistants pull. Keep the first sentence of each FAQ answer under 45 words and answer directly.

---

## Citation Gap Matrix — 5 Highest-Value Gaps

| Gap | Query it targets | What to add to the page | Difficulty |
|---|---|---|---|
| Numeric irrigation depth specs for Lane County | "how deep to bury irrigation line Oregon" | Dedicated H2 with mainline (6–8 in), lateral (4–6 in), and frost context | Low — write it |
| Cost table with Oregon-labeled figures | "how much does trenching cost Oregon" | 3-row table: soil type vs. $/ft range, named for Oregon | Low — write it |
| Oregon 811 applies to irrigation trenching | "do I need to call Oregon 811 for irrigation trench" | Short section + FAQ item with ORS citation | Low — write it |
| FAQPage schema (first mover) | All AIO queries | 10 questions from shortlist, schema deployed | Low — implement in Astro |
| LocalBusiness + Service schema with areaServed | "trench digging contractor Lane County" | Schema block in Astro frontmatter or layout | Low — implement in Astro |
