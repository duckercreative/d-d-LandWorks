# D&D Land Works — Astro Site Build Plan

**Format:** Written using Google's **TCREI** prompt framework (Task → Context → References → Evaluate → Iterate), then broken into phases. Each phase is scoped to run as its own focused session — don't try to do all of them in one pass. Copy a phase's block as the prompt when you're ready to start it.

**Platform decision:** This site will be built in **Astro**, not WordPress. That supersedes the WordPress/Elementor assumptions elsewhere in this repo (`CLAUDE.md`, `.claude/skills/elementor-page-builder/`) — those stay as reference for the *content methodology* (research → brief → write → humanize), but the page-composition and publish steps below replace Elementor entirely.

---

## TASK

Build a fast, static-first marketing website for D&D Land Works (excavation, grading, and site prep contractor) in Astro, covering:
- Core pages (home, about, contact, service area)
- One page per core service
- Location pages for Lane County, OR cities (tiered rollout)
- Full local-SEO infrastructure (schema, sitemap, meta, GBP tie-in)
- A repeatable content pipeline so new location/service pages can be added without re-deriving the process each time

The end state is a deployed, indexable site that a Lane County homeowner or GC searching for excavation/grading/site prep work can find, trust, and call from.

---

## CONTEXT

**Who:** D&D Land Works, owned by David Deggelman. Licensed and Bonded (CCB #261742), DEQ Certified for septic work. Phone 541-401-8726, email david@ddlandworks.com. Full identity: [business-info.md](../business-info.md). Voice/tone rules: [business-voice.md](../business-voice.md).

**Where:** Confirmed base — Lane County, OR. Tiered service-area rollout (see business-info.md → Service Areas):
- Tier 1 (anchors): Eugene, Springfield
- Tier 2: Cottage Grove, Junction City, Creswell, Veneta
- Tier 3: Florence, Oakridge, Coburg, Lowell

**Current digital footprint:** None. No live site, no GBP, no socials found (verified 2026-09-04). This is a from-scratch build, not a redesign — no legacy URLs to preserve, no existing rankings to protect.

**Services (from business-info.md):** Site Preparation, Land Clearing, Brush Clearing, Foundation Excavation, Driveway Repair, Grading & Leveling, Drainage Excavation, Utility Excavation, Trenching & Backfill, Septic Install & Repairs, Slope Stabilization.

**Known competitors (Lane County):** Heavy D Excavation, Danco Excavation, All Dirt Inc, Emerald Excavating — use these as the competitor set when `/deep-research` runs.

**Open items that block specific phases (see business-info.md):** exact base city/address, domain ownership status for ddlandworks.com, logo file not yet saved to disk, business hours, year founded. Flag these inline in the relevant phase rather than guessing.

---

## REFERENCES

- **Content voice/quality bar:** [business-voice.md](../business-voice.md) — banned-phrase list, 5-test anti-AI gate, specificity floor per page type. Applies to every page's copy regardless of platform.
- **Content pipeline (methodology, not platform):** `/deep-research` → `/content-brief` → `content-create` → `humanizer` — see [CLAUDE.md](../CLAUDE.md). Swap the final "Elementor design/push" step for "write into the Astro content collection + build."
- **Relevant reusable skills in this repo:** `.claude/skills/site-architecture`, `.claude/skills/schema-markup`, `.claude/skills/on-page-seo`, `.claude/skills/local-seo`, `.claude/skills/technical-seo`, `.claude/skills/entities-mapping`, `.claude/skills/keyword-research`, `.claude/skills/keyword-clustering`, `.claude/skills/internal-linking`, `.claude/skills/content-generation`. All were written against the prior HVAC client — reuse the methodology, not the literal examples.
- **Design references:** `ui-ux-pro-max` skill (styles, palettes, font pairings, Tailwind stack support) and `frontend-design` skill for aesthetic direction — load before building the design system in Phase 2.
- **Schema caution:** verify the real schema.org type before generating JSON-LD (`HVACContractor` doesn't exist for the prior client and `HVACBusiness` was used instead — the excavation equivalent needs the same check; likely candidates are `GeneralContractor` or `HomeAndConstructionBusiness` under `LocalBusiness`, but confirm on schema.org, don't assume).
- **Logo:** referenced throughout for header/footer/favicon/OG image — not yet on disk (see CLAUDE.md → Logo). Blocks final visual polish, not structural build.

---

## EVALUATE

Before calling any phase "done," check it against these gates:

- **Content:** every page's copy passes the business-voice.md 5-test gate (swap test, read-aloud, burstiness, specificity, voice) after humanizer runs.
- **SEO baseline:** every page has a unique title/meta description, one H1, correct heading hierarchy, and schema that validates.
- **Performance:** Astro's static output should hit good Core Web Vitals by default — verify with Lighthouse/PageSpeed after each phase that adds real content/images, not just at the end.
- **No fabricated facts:** don't invent business hours, year founded, pricing, or review counts that aren't confirmed in business-info.md. Mark unknowns as unknowns in copy (or omit) rather than guessing plausible-sounding numbers.
- **Mobile-first:** this is a trades business — most search traffic will be mobile. Check every template on a real mobile viewport, not just resize-the-browser.

---

## ITERATE

- Update this file's Context/Open Items whenever business-info.md changes (domain ownership, exact city, hours, founding year get confirmed).
- If the platform choice changes (e.g., a page builder gets bolted on top of Astro, or a different framework is chosen later), update the Task/Platform decision line at the top — don't leave stale platform assumptions for a future session to trip over.
- Each phase below ends with its own "done when" line — re-run a phase if new facts invalidate its output (e.g., a new confirmed service area tier reshuffles Phase 5's page list).

---

## PHASES

### Phase 0 — Project Setup ✅ scaffold done (2026-09-04)
**Task:** Scaffold the Astro project: `npm create astro@latest`, choose a minimal/blog-ish starter or empty, add Tailwind CSS integration, set up the repo structure (`src/pages`, `src/components`, `src/layouts`, `src/content/` collections for services + locations), configure `astro.config.mjs` (site URL, integrations), set up `.gitignore` for `node_modules`/`dist`, and decide the deploy target (Vercel/Netlify/Cloudflare Pages — pick one, all support Astro's static/SSR output well).
**Blocked by:** domain ownership decision for ddlandworks.com (can build/deploy to a preview URL regardless, but production domain needs this resolved). Deploy target not yet chosen — needs the user's account/preference before any live deploy happens.
**Done when:** `npm run dev` serves a blank Astro+Tailwind site locally, repo is initialized, deploy target is chosen and a preview deploy succeeds.

**Status:** Project lives in `site/` (Astro 7 + Tailwind v4, minimal template, no nested git repo — it's part of this repo). `npm run build` verified working (compiles, Tailwind utilities generate correctly). Deploy target and production deploy are still open — see Phase 10.

**Windows gotcha (this machine only, worth knowing before running any Astro CLI command):** this repo's folder name is `D&D` — the unescaped `&` breaks `npx <pkg>` and `astro add` on Windows, because they shell out through `cmd.exe`, which treats `&` as a command separator and mangles the path (symptom: `Cannot find module 'D:\Duckers\astro\bin\astro.mjs'` — the `D&D\site\node_modules\` segment gets swallowed). Fix used here: never call `astro` through `npx`; invoke `node ./node_modules/astro/bin/astro.mjs <command>` directly instead. `package.json`'s `dev`/`build`/`preview`/`astro` scripts are already rewritten this way — always prefer `npm run build` / `npm run dev` over `npx astro ...`. Same care needed for any *other* package whose CLI you'd normally reach via `npx` in this repo (e.g. `astro add`, `create-*` scaffolds) — install the package directly and invoke its JS entry point via `node` instead.

### Phase 1 — Information Architecture & Content Model
**Task:** Define the site map and Astro content collections schema (via `src/content/config.ts`) for `services` and `locations` as structured collections (frontmatter: title, slug, meta description, service description, schema type, related services, related locations), so new service/location pages are data entries, not one-off hand-built pages.
**Done when:** content collection schemas are defined and validated with one placeholder entry each for a service and a location.

### Phase 2 — Design System — ⚙️ tokens done (2026-09-04), components not started
**Task:** Using the `ui-ux-pro-max` and `frontend-design` skills, establish: color palette (pull from the logo — mountain/excavator mark, black/white/blue), type pairing, spacing scale, component patterns (header/nav, footer, hero, service card, CTA block, before/after photo gallery — this trade is visual, plan for one early). Build as reusable Astro components/Tailwind config, not page-by-page CSS.
**Blocked by:** logo file not yet on disk — proceeded with a close-match estimated palette (queried from the `ui-ux-pro-max` color/typography database, not hand-guessed); swap `--color-brand-blue` once the real file lands and can be color-picked.
**Done when:** a component library (Header, Footer, Hero, ServiceCard, CTABlock, Gallery) renders consistently across at least two pages.

**Status:** Color + typography tokens finalized and wired into `site/src/styles/global.css` as a Tailwind v4 `@theme` block — full rationale in [docs/design-system.md](design-system.md). Fonts: Barlow Condensed (display) + Barlow (body), self-hosted via Fontsource. Colors: near-black ink + brand blue (from the logo) + safety-orange as a deliberate 4th accent for CTAs only. Verified compiling via `npm run build`. Reusable components (Header/Footer/Hero/etc.) not started yet — that's the remaining part of this phase.

### Phase 3 — Core Pages
**Task:** Build Home, About, Contact, Service Area (overview linking to location pages), and a Services index page. Home should establish the canonical one-sentence definition from business-voice.md and link into every service + tier-1 location.
**Done when:** all five core pages exist, link to each other correctly, and pass the Evaluate content/SEO gates.

### Phase 4 — Service Pages
**Task:** One page per service in business-info.md's service list (11 services). Each follows the content pipeline (research → brief → write → humanize) at the specificity floor for "Service page" in business-voice.md (10+ concrete specifics).
**Done when:** 11 service pages are live, each internally linking to relevant location pages and at least one other related service.

### Phase 5 — Location Pages (tiered rollout)
**Task:** Build location pages tier-by-tier, not all at once — Tier 1 (Eugene, Springfield) first, each combined with 1-2 highest-priority services per `/content-brief`'s Pattern B (combo) approach if volume supports it; otherwise one general location page per city. Tier 2 and 3 follow only after Tier 1 is live and indexed.
**Done when:** Tier 1 location pages are live; Tier 2/3 are scheduled, not blocked on Tier 1's launch.

### Phase 6 — SEO & Schema Infrastructure
**Task:** Sitemap (Astro's sitemap integration), robots.txt, canonical tags, Open Graph + Twitter Card meta, JSON-LD schema (LocalBusiness subtype — verify exact type per the Reference note above — plus Service and BreadcrumbList schema per page). Wire in the confirmed CCB license number and DEQ certification as schema properties where applicable.
**Done when:** schema validates (Google Rich Results Test), sitemap.xml is generated and submitted-ready, every page has correct OG/meta.

### Phase 7 — Content Production Pipeline (repeatable)
**Task:** Run `/deep-research` once for the excavation/site-prep core service + Eugene, OR to build the keyword/competitor/entity baseline (competitor set: Heavy D Excavation, Danco Excavation, All Dirt Inc, Emerald Excavating). Then `/content-brief` → `content-create` → humanizer per page from Phases 3-5, landing output directly into the Astro content collections from Phase 1 instead of an Elementor draft.
**Done when:** the research pack exists once, and each subsequent page's content follows brief → draft → humanize without skipping steps.

### Phase 8 — Lead Capture & GBP Tie-in
**Task:** Add a contact form (Astro + a form backend — e.g., a serverless function or a service like Formspree, pick one), click-to-call on mobile, and — once GBP exists — embed the GBP map/reviews. This phase is intentionally decoupled from GBP setup itself (that was explicitly deferred by the user); just make sure the site has a slot ready for it.
**Done when:** contact form submits successfully and phone number is a tappable `tel:` link sitewide.

### Phase 9 — Performance & QA
**Task:** Run Lighthouse/PageSpeed against the deployed preview, fix any Core Web Vitals regressions (usually image optimization — use Astro's `<Image>` component), test on a real mobile viewport, verify all internal links resolve (no orphan pages), check 404 handling.
**Done when:** Lighthouse scores are green across Performance/SEO/Accessibility/Best Practices on mobile.

### Phase 10 — Deploy & Launch
**Task:** Point the production domain (once ownership is confirmed) at the deploy target, verify SSL, submit sitemap to Google Search Console, verify indexing isn't blocked (robots.txt, meta robots).
**Blocked by:** domain ownership/registration status for ddlandworks.com.
**Done when:** the live domain serves the site over HTTPS and GSC shows the sitemap accepted.

### Phase 11 — Post-Launch
**Task:** Set up Search Console + analytics tracking, establish a cadence for adding Tier 2/3 location pages, and reconnect this to the GBP workstream once the user is ready to pick that back up.
**Done when:** analytics is receiving data and there's a written next-batch plan for Tier 2 locations.
