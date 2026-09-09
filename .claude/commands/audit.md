---
description: Run the content audit workflow — pick next pending page from tracker.csv, research, dark HTML report, publish-ready content
argument-hint: [optional: specific page slug to audit instead of next-in-queue]
---

Execute the persistent content audit workflow defined in memory `project_content_audit_workflow.md`.

Target: $ARGUMENTS (if blank, auto-pick the next pending page from `02-site-architecture/page-tracker.csv`)

**Non-negotiable rules (from memory):**
- NEVER rely on WebFetch summaries. ALWAYS curl the live HTML, use WP-CLI, and read the real GBP/GSC JSON.
- WPCode snippet #8140 is the schema source of truth — verify against it.
- Check real HTTP status codes. "Not in sitemap" ≠ "broken" — curl every flagged URL (2xx = noindexed duplicate, 4xx = true broken).
- Never pipe PHP via `cat file | wp post update -` (stdin strips slashes). Use SFTP + `eval-file` + `wp_slash()`.

**Workflow:**

**Phase 0 — Deep research gate (NEW)**
Before any audit work on a money page (priority 1 or 2), check:
- Does `01-research/page-research/[slug]/00-research-pack.md` exist?
- Is it newer than 90 days?
- Does it pass the deep-research quality checklist?

If any answer is **no** AND the page is being rewritten (not just title/meta tweak), invoke `/deep-research [slug]` first and STOP — return the research-pack location to the user. Only proceed with the audit once the user confirms the pack is acceptable.

Skip Phase 0 only for technical-only fixes (noindex, schema-only, redirect-only) or thin location pages cloned from a template.

**Phase 1 — Pick the page**
- Read `02-site-architecture/page-tracker.csv`
- Find next row with status = `pending` / `queued` / `audit-next`
- If $ARGUMENTS is set, use that slug instead

**Phase 2 — Real-data research (parallel where possible)**
- `curl -sI https://75degreeac.com/[slug]/` — status code
- `curl -s https://75degreeac.com/[slug]/` — full HTML (check title, meta, H1, schema, word count)
- SSH + WP-CLI: pull the actual post content, Rank Math meta, Elementor fields
- Read WPCode snippet #8140 for schema
- Read GSC data: `03-gsc/data/queries-by-page.csv` — filter to this URL
- Read GA4 data if available: `08-reporting/` — traffic + conversions for this URL
- Check live GBP if page is location-related: `python3 04-gmb/scripts/gbp_browser.py --check`
- Read any existing brief: `07-landing-pages/briefs/[slug]-brief.md`

**Phase 3 — Audit findings**
Run through all 6 specialist-agent lenses:
- Technical: status code, indexability, canonical, schema validity, CWV hints
- On-page: title/meta/H1, keyword placement, internal links out/in, thin content
- Content: E-E-A-T signals, AI citability, banned phrases, 5-Point Human Test
- Local: NAP mentions, service-area coverage, neighborhood specificity
- Entity: sameAs, knowsAbout, entity salience
- CRO: phone prominence, trust signals, mobile UX, friction

**Phase 4 — Dark HTML audit report**
Generate `08-reporting/content-audits/audit-[slug]-[date].html` using the full ads-audit dark design system (CLAUDE.md → Report Design Standard). Must include:
- KPI cards (indexability, word count, schema score, E-E-A-T score, CRO score, AI citability)
- Issues grouped by severity (Critical / High / Medium / Low)
- Step-by-step fix instructions for each issue
- Before/after title + meta preview
- Internal link additions with anchor text

**Phase 5 — Publish-ready content**
If content rewrite is needed, chain through the proper workflow:
1. Confirm Phase 0 research pack is complete
2. Run `/content-brief [slug]` — produces `07-landing-pages/briefs/[slug]-brief.md`
3. Run `/content-create [slug]` — produces `07-landing-pages/content/[slug]-content.md` (full E-E-A-T, AI citability block, FAQ, schema, gap-driven differentiators)

Do NOT bypass the brief — content written without it lacks the gap analysis and intent triangulation that make pages competitive.

**Phase 6 — Update tracker**
Mark the page `status = audited` in `02-site-architecture/page-tracker.csv` and add timestamp.

**After completion:**
- `open "/Users/mac/Digital Marketing/Local SEO/Clients/75 Degree AC/08-reporting/content-audits/audit-[slug]-[date].html"`
- Print a one-line summary: page slug, top 3 issues, fix ETA
