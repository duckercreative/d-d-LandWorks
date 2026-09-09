---
name: keyword-clustering
description: >
  Take the full keyword universe from `keyword-research` and group every keyword into
  intent-based clusters mapped to specific page intents. Enforces cannibalization prevention
  (one cluster per keyword), GSC same-query multi-URL detection, semantic similarity merging,
  SERP overlap testing, hub-spoke pattern detection, intent migration rules, doorway-page
  risk filtering, cluster validation thresholds (min keywords + min volume to justify a page),
  orphan keyword handling, cluster priority formula, and the Architecture Boundary (clustering
  proposes URLs, doesn't lock them — Phase 9 review owns final URLs). Activates on "keyword
  clustering", "cluster keywords", "keyword mapping", "keyword grouping", "assign keywords to
  pages", "keyword-to-page mapping", "detect cannibalization", or as Phase 3 of `/deep-research`.
  Project-agnostic.
version: 2.0.0
---

# Keyword Clustering

Take the full keyword universe (from `keyword-research`) and produce a clean keyword-to-page-intent map with zero cannibalization before the site architecture phase decides final URLs. Every keyword has exactly one home; every cluster has one primary keyword; every cluster maps to a page intent. Missing-page opportunities, orphan keywords, and merge candidates surface as part of the output.

This skill is **project-agnostic**. Reads keyword data from the project's `01-research/keywords-research.csv` (or `01-research/page-research/[slug]/01-keyword-universe.csv`). Site architecture state from `02-site-architecture/page-tracker.csv`. GSC data from `03-gsc/data/*.csv`. No client services / locations / clusters hardcoded.

---

## What Keyword Clustering Solves

Raw keyword lists have overlap, redundancy, and ambiguity. Clustering resolves:

- **Cannibalization risk** — two pages competing for the same keyword
- **Intent confusion** — similar keywords with different intents incorrectly grouped to one page
- **Missing-page identification** — clusters with no assigned page reveal content gaps
- **Page priority clarity** — cluster volume + intent + feasibility drives which pages to build first
- **Hub-spoke architecture** — long-tail clusters that should collapse into a hub, or hubs that should split into spokes
- **Doorway-page risk** — clusters that would create near-duplicate templated pages (Google March-2024 doorway penalty)

---

## Clustering Logic

**Same topic + same intent = same cluster = same page.**
**Same topic + different intent = different clusters = potentially different pages.**

| Example pair | Decision |
|---|---|
| "gutter cleaning Birmingham" + "gutter cleaners Birmingham" | Same cluster (same topic, transactional intent) |
| "how much does gutter cleaning cost Birmingham" | Different cluster (commercial investigation intent — likely belongs on a pricing page or FAQ section, not the service page) |
| "how to clean gutters yourself" | Different cluster (informational intent — blog post; not for a service-selling page) |
| "gutter cleaning Birmingham [neighborhood]" | Different cluster (local + combo intent — neighborhood page IF SERP justifies; otherwise FAQ on city page) |
| "ac repair houston" + "houston ac repair" | Same cluster (word-order variants — same intent, same SERP, same page) |
| "ac repair houston" + "ac repair near me [Houston-area zip]" | Same cluster IF the page can serve both via local schema; otherwise differentiate |

---

## Architecture Boundary

This skill **does not** decide final URLs.

Clustering proposes:
- Page type hints (service / location / combo / hub / spoke / blog / utility)
- Provisional slug/path hints
- Whether a query likely needs a dedicated page (per cluster validation thresholds)

Clustering must **not** lock:
- Final `target_page_url`
- Final URL pattern for service × location pages
- Whether a query deserves a dedicated combo page, neighborhood page, or stays as a FAQ section on a broader page

Final URLs are decided in Phase 9 (site architecture) AFTER live SERP review, competitor URL pattern review, doorway-risk review, and page-type validation. This skill provides the input.

---

## Clustering Process — 7 Steps

### Step 1: Sort by intent

Bucket every keyword by primary intent (from `keyword-research` CSV):
- `transactional`
- `commercial`
- `informational`
- `problem`
- `local`
- `navigational`

Within each intent bucket, group by topical proximity. Cross-intent grouping is forbidden at this step — if a "how to" version of a query exists alongside the buying version, they go to different intent buckets.

### Step 2: Group by topic within each intent bucket

Within `transactional`, group:
- Variants of the same core service (word-order swaps, synonym swaps, plural/singular, "[service]" vs "[service] company" vs "[service] service")
- Variants of the same service × location combination
- "near me" variants of the same service

Within `commercial`, group:
- "best", "top", "compare" variants of the same service
- "cost", "price" variants of the same service
- "[service] vs [alternative]" comparison variants

Within `informational`, group:
- "how to" variants of the same procedure
- "what is" variants of the same concept
- "why does X" variants of the same problem

And so on for each intent bucket.

### Step 3: Assign a primary keyword per cluster

Pick the highest-volume + best-fit keyword as the cluster's primary. Tiebreakers:
1. Higher GSC impressions (if available)
2. More natural phrasing (the variant a copywriter would naturally write as the H1)
3. Better match to the page-type intent (transactional service pages prefer "[service] [city]" pattern)
4. Single-word vs multi-word — prefer the version that gets used most often in competitor H1s

The primary keyword is the H1 keyword and the canonical phrase the page is "about". Secondary keywords (2-4) become H2 / sub-heading keywords + body keyword references. Long-tail and question variants become FAQ keys + H3 keywords.

### Step 4: Validate cluster size (thresholds)

A cluster needs enough underlying demand to justify a dedicated page. If a cluster doesn't meet thresholds, it folds into a parent cluster or becomes an FAQ section, not a page.

**Default thresholds (adjustable per vertical/market):**

| Cluster type | Minimum keywords | Minimum total volume (estimated) | Minimum GSC impressions (if data exists) |
|---|---|---|---|
| Dedicated transactional service page | 5 keywords | 50/mo | 100/mo |
| Dedicated location page | 4 keywords | 30/mo | 50/mo |
| Service × location combo page | 6 keywords | 40/mo | 80/mo |
| Dedicated informational blog post | 3 keywords | 100/mo | 200/mo |
| Pricing / commercial page | 4 keywords | 30/mo | 50/mo |
| Dedicated brand page | 5 keywords | 20/mo | 30/mo |

Clusters below threshold → fold into the parent service / location / hub.

### Step 5: Assign target page type + provisional URL hint

Per cluster, assign:

| Page type hint | Used for |
|---|---|
| `homepage` | Brand + umbrella service umbrella |
| `service_hub` | Top-level service umbrella |
| `service_spoke` | Specific sub-service under a hub |
| `location_hub` | Top-level location (primary city) |
| `location_spoke` | Neighborhood / suburb under a hub |
| `combo` | Service × location combination |
| `pricing` | Cost / price-focused page |
| `comparison` | "Best of", listicle, comparison |
| `blog_problem` | Problem-solving blog |
| `blog_info` | Informational / how-to blog |
| `faq` | Stays as an FAQ section on a broader page |
| `about` / `contact` | Brand pages |
| `utility` | Locations index, services index, sitemap, etc. |

Provisional URL hint follows naming conventions but is NOT final.

### Step 6: Run conflict and merge detection (5 passes)

#### Pass 6a — Cannibalization detection (GSC-grounded)

For every primary keyword, grep `03-gsc/data/queries-by-page.csv` (if available). If two or more URLs return impressions for the same query, that's confirmed cannibalization.

Score each URL by `impressions × (1/position) × content_depth_weight`. The highest-scoring URL becomes the canonical cluster home; the others either differentiate to a different cluster, redirect, or are flagged for noindex.

If GSC data is unavailable, run the cannibalization check against current H1 / title tags of existing pages — match any two pages whose H1 targets the same primary keyword.

#### Pass 6b — Semantic similarity merging

If two clusters share ≥70% of their semantic terms (the supporting keywords + co-occurring entities) → these are the same page intent split into two clusters. Merge into one cluster.

Example: a `transactional` cluster for "ac repair Houston" and a `commercial` cluster for "ac repair Houston cost" — if the latter only has 2 keywords and they all overlap semantically with the former, the cost question becomes a FAQ on the transactional page, not a separate cluster.

#### Pass 6c — SERP overlap test

Run the primary keyword of cluster A and cluster B in incognito search. If the top-5 organic URLs are ≥60% identical → Google treats these as the same query intent → the clusters should merge OR clearly differentiate (different page type, different intent).

This catches cases where two keywords look different (different surface forms) but SERPs agree they're the same query.

#### Pass 6d — Intent migration rules

When a keyword shows both transactional + commercial signal (e.g., "ac repair cost houston" — transactional AND commercial), branch into two clusters if BOTH have enough underlying demand. Otherwise pick the dominant intent and stick to one cluster.

The "ac repair cost" question is informational/commercial — it doesn't replace the transactional service page; it likely belongs as an FAQ on that page OR as a `/pricing/` page if there's enough demand.

#### Pass 6e — Hub-spoke pattern detection

For each cluster, ask:
- Is this a sub-topic of a broader cluster? (folds into hub as a spoke)
- Is this a broad topic with multiple sub-topics in other clusters? (this is a hub for those spokes)
- Does this cluster's primary keyword include modifier words that suggest a long-tail of a hub? (e.g., "emergency ac repair" is a spoke of "ac repair")

Build the hub-spoke tree explicitly — see § Output Files.

### Step 7: Doorway-page risk filter (March 2024 Google penalty)

For combo clusters (service × location, service × neighborhood), apply the **doorway risk filter** before promoting them to dedicated pages.

A cluster fails the filter if:
- The proposed page would have <90% unique content vs the parent service page (templated copy with city-name swap)
- There are no real differentiators (testimonials specific to that area, neighborhood-specific photos, named adjacent service areas, local landmarks, neighborhood-specific FAQs)
- The local SERP for the proposed query is dominated by aggregators or by the broader service page anyway

**Failing the filter:** the cluster stays as a section / FAQ on the broader service page or location hub, NOT a dedicated combo page.

**Passing the filter:** the cluster justifies a dedicated combo page. Brief must specify the differentiators that must appear (testimonials, photos, neighborhood-specific content).

---

## Cluster Priority Formula

For each cluster, score:

`priority = (cluster_volume × intent_score × feasibility × strategic_fit)^0.25`

Each input 1–10:
- **cluster_volume** — sum of estimated monthly volume across all keywords in cluster (10 = 1000+/mo total, 5 = 100-1000/mo, 1 = <10/mo)
- **intent_score** — transactional & emergency = 10, commercial = 7, problem = 5, informational = 3, navigational = handled separately
- **feasibility** — already-ranking page exists at position 1-10 = 10; page exists at 11-30 = 6; page doesn't exist but no domain-authority gap = 4; no page + competitive SERP = 2
- **strategic_fit** — primary service = 10, secondary service = 7, edge service = 4, off-topic = 1

Action tiers:
- Priority 1 (score >6) — launch / first 30 days
- Priority 2 (score 4-6) — first 90 days
- Priority 3 (score 2-4) — expansion / month 4+
- Priority 4 (score <2) — backlog

---

## Cluster Output Card (per cluster)

Each cluster gets a full card in the `.md` output:

```markdown
## Cluster: [Cluster Name]
- **Intent:** transactional / commercial / informational / problem / local / navigational
- **Page Type Hint:** service_hub / service_spoke / location / combo / pricing / blog_info / blog_problem / faq
- **Provisional URL Hint:** /[slug]/ (NOT FINAL — Phase 9 review)
- **Primary Keyword:** [exact phrase — H1 keyword]
- **Secondary Keywords (2-4):** [H2 / sub-heading keywords]
- **Semantic Terms (5-8):** [co-occurring terms for topical depth]
- **Long-tail Variants:** [longer + question variants — FAQ + H3 keywords]
- **Local Modifiers:** [city / neighborhood / ZIP / near-me variants]
- **SERP Features Observed:** local_pack / featured_snippet_paragraph / featured_snippet_list / paa / image_pack / ai_overview / none
- **Volume Notes:** total cluster volume estimate + GSC imp sum (if data)
- **Hub-Spoke Role:** hub / spoke under [parent cluster] / standalone
- **Doorway Risk Status:** N/A (not a combo) / PASS / FAIL — keep as FAQ section
- **Cannibalization Check:** clear / suspected cannibalization with [URL] — see resolution
- **Architecture Note:** brief note for Phase 9 — what the page must cover, what it competes with, why this cluster needs its own page (or doesn't)
- **Content Implication:** specific note for the brief writer — what makes a winning page for this cluster
- **Priority:** 1 / 2 / 3 / 4 (per § Cluster Priority Formula)
```

---

## Orphan Keywords

Some keywords from research don't fit any planned cluster — either because the page doesn't exist yet, the keyword is too thin to warrant its own page, or the intent doesn't match any cluster.

Per orphan, decide:

| Disposition | Criterion | Action |
|---|---|---|
| Add to FAQ on an existing cluster | Topically related, thin demand | Note which cluster's FAQ section |
| Create a new cluster | Sufficient demand + clear intent | Spin into new cluster, run validation gates |
| Drop | Off-topic, garbage demand, broken intent | Document the reason and drop |
| Park for review | Borderline — needs more research | Move to a "review later" list |

The orphan list is itself a useful artifact — re-process every 90 days.

---

## Missing Pages

Clusters that pass the validation threshold + doorway-risk filter but don't have a matching page in `page-tracker.csv` are **missing-page opportunities**. Each becomes a Phase-9 architecture decision input:

| Cluster | Page Type | Provisional URL | Intent | Priority |
|---|---|---|---|---|

These feed directly into site architecture review.

---

## Output Files

### File 1: `01-research/keywords-clustering.md`

Required sections:

1. **Cluster Summary Table** — every cluster with name, intent, primary keyword, page type hint, URL hint, KW count, priority
2. **Cluster Details (per cluster)** — full cards per the template above
3. **Hub-Spoke Map** — visual tree showing each hub + its spokes
4. **Cannibalization Audit** — every detected cluster + canonical-URL recommendation
5. **Merge Decisions Log** — every pair of clusters considered for merge (6b-6c-6d), the decision, and the rationale
6. **Doorway Risk Audit** — every combo cluster + PASS/FAIL + rationale
7. **Orphan Keywords** — keywords that didn't fit + disposition
8. **Missing Pages** — clusters needing a page that doesn't exist
9. **GSC Quick-Win Cluster List** — clusters where existing pages are at position 4-20 (high impressions, low position) — these are content refresh / on-page rewrite priorities
10. **Priority 1 Cluster List** — the launch wave

### File 2: `01-research/keywords-clustering.csv`

One row per keyword. Joins to keyword-research CSV via `keyword`.

```
keyword,cluster_name,role,intent,target_page_type_hint,target_page_slug_hint,target_page_url,url_status,hub_parent,volume_tier,gsc_imps,gsc_position,serp_features,priority,merge_decision_log,notes
```

| Column | Allowed values |
|---|---|
| `role` | `primary` (one per cluster) / `secondary` / `semantic` / `longtail` / `local_modifier` / `question` |
| `target_page_type_hint` | from § Step 5 |
| `url_status` | `provisional` (until Phase 9) / `finalized` |
| `hub_parent` | parent cluster name (empty for hub clusters / standalone) |
| `volume_tier` | `high` (1k+/mo) / `medium` (100-1k) / `low` (10-100) / `micro` (<10) |
| `merge_decision_log` | e.g., `merged_from:cluster-X` / `kept_separate_vs:cluster-Y` |

**Rules:**
- During clustering phase, `target_page_url` is empty + `url_status` = `provisional`
- Phase 9 writes the final `target_page_url` and flips `url_status` = `finalized`
- Every keyword must have a `target_page_type_hint` and `target_page_slug_hint` even when provisional
- One `primary` role per cluster, hard rule

---

## Quality Standards

- [ ] Every keyword from `keywords-research.csv` is in exactly one cluster (no orphans without dispositions)
- [ ] Every cluster has exactly one `primary` keyword
- [ ] Every cluster passes the size validation threshold OR is documented as a folded sub-cluster
- [ ] Every combo cluster has run the doorway-risk filter
- [ ] Every cluster has gone through Pass 6a (cannibalization) — flagged clusters have a resolution
- [ ] Hub-spoke relationships are explicit
- [ ] Priority tier assigned per cluster
- [ ] Missing-page opportunities listed for Phase 9
- [ ] Orphan keywords have explicit dispositions
- [ ] GSC Quick-Win cluster list extracted (if GSC data available)
- [ ] No two clusters share a primary keyword
- [ ] Merge decisions documented in the log (so the next person can audit why two clusters stayed separate)

---

## Anti-Patterns

- ❌ Locking final URLs in the clustering phase (URLs are Phase 9; clustering proposes hints)
- ❌ Auto-creating a combo page for every service × location pair (most fail doorway risk; let demand justify the page)
- ❌ Treating word-order variants ("ac repair houston" vs "houston ac repair") as separate clusters (same SERP = same cluster)
- ❌ Skipping the doorway-risk filter on combo clusters — Google penalized 80% of templated location pages in March 2024
- ❌ Splitting one query across multiple clusters because it has secondary intent (pick the dominant; note secondary in `notes`)
- ❌ Promoting a 3-keyword micro-cluster to a dedicated page (use FAQ section instead)
- ❌ Ignoring GSC cannibalization signals (existing URL data is the strongest cannibalization indicator)
- ❌ Skipping the merge decision log (without it, future audits can't tell intentional from accidental splits)
- ❌ Hardcoding industry-specific clusters into this skill — all clusters come from real keyword data, not templates

---

## How Other Skills Consume This

- **`/deep-research`** — Phase 3 runs this skill on the keyword universe from Phase 2
- **`content-briefs`** — every brief references one cluster card; brief title = cluster primary keyword
- **`content-generation`** — uses the cluster's primary + secondary + semantic + long-tail keywords as the keyword targets
- **`site-architecture`** — Phase 9 reads cluster cards + missing-page list to decide final URLs and page-tracker rows
- **`internal-linking`** — uses hub-spoke relationships to compute internal link priorities (spokes link up to hub, hub links down to spokes)
- **`entities-mapping`** — references cluster's primary keyword to determine the page's primary entity
- **`schema-generate`** — uses cluster's SERP features to choose schema types (featured_snippet → FAQ + HowTo; ai_overview → speakable; local_pack → LocalBusiness/Service)
- **`/quick-wins`** — pulls from the GSC Quick-Win Cluster List for title/meta + on-page rewrites

The cluster CSV is the contract. Every page in `page-tracker.csv` should map to exactly one cluster's primary keyword. If a page doesn't map, either the cluster is missing (run clustering again) or the page shouldn't exist.
