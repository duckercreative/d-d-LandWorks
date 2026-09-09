---
description: Internal linking audit — link equity distribution, orphan detection, anchor diversity, hub-spoke validation, fix queue
argument-hint: [mode: audit|fix|map|orphans]
---

Run the internal linking audit using the `internal-linking` skill.

Mode: $ARGUMENTS (default: `audit`)

**Rules (from the skill):**
- Hub-and-spoke: every cluster page → links to hub; hub → links to all spokes
- Max 30% exact-match anchor text; rest partial/branded/generic
- No orphan pages (every indexable URL must have ≥ 1 internal link in)
- Location pages link to neighbouring location pages (geographic clusters)
- Service pages link to related service + relevant location pages

**Phase 1 — Crawl internal link graph**
- Pull sitemap: `curl -s https://75degreeac.com/sitemap_index.xml`
- For each URL, curl the page and extract `<a href>` pointing to own domain
- Build `01-research/link-graph-[date].csv`: `source | target | anchor | context`

**Phase 2 — Metrics**
- Total indexable pages
- Pages with 0 inbound links (orphans)
- Pages with 1-2 inbound links (under-linked)
- Pages with 20+ outbound links (over-linked)
- Anchor text distribution per target URL (exact% / partial% / branded% / generic%)
- Cluster validation: hub → spoke coverage per topical cluster

**Phase 3 — Fix queue (mode: `fix` or `audit`)**
For every issue, output:
- Action: `add-link` / `remove-link` / `change-anchor`
- Source URL / Target URL / Anchor text
- Natural sentence to insert it in (write the actual sentence, not a placeholder)
- Plus a WP-CLI / Elementor instruction

Prioritize by:
1. Orphan fixes (highest impact)
2. Under-linked money pages (homepage, ac-repair-houston, emergency pages)
3. Hub-spoke gaps in active clusters
4. Anchor text over-optimization (> 30% exact)

**Phase 4 — Link map (mode: `map`)**
Generate the visual link map (D3.js in HTML) of current state + proposed state at `08-reporting/monthly/[YYYY-MM]/internal-linking-[date].html` (YYYY-MM is the month of [date]; dark design).

**Phase 5 — Orphans only (mode: `orphans`)**
Short-circuit output: list orphaned URLs + the exact page to add a link from + the exact sentence.

**Output:**
- Fix queue: `01-research/internal-link-fix-queue-[date].md`
- HTML map: `08-reporting/monthly/[YYYY-MM]/internal-linking-[date].html`
- `open` the HTML

Update `02-site-architecture/page-tracker.csv` with inbound-link counts per page.
