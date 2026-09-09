# D&D Land Works — Project Context

Active client folder for **D&D Land Works**, an excavation / grading / site prep contractor owned by David Deggelman. This repo was repurposed from a prior HVAC client's SEO/content workflow — the skills, agents, and slash commands under `.claude/` and `docs/` are reusable methodology; all business-specific data has been cleared and needs to be rebuilt for this client.

## Status: Greenfield

Most of what used to live here (research packs, briefs, published content, WordPress integration, GBP data) was client-specific to the previous business and has been removed. Nothing below should be treated as already done for D&D Land Works — it is the *target* workflow, not current state. See [business-info.md](business-info.md) → "Open Items / To Confirm" for what's still unknown.

## Focus & Priority Order (proposed — confirm with David)

**Primary:** Local SEO for an excavation/site-prep contractor · Google Business Profile setup or optimization · content that establishes topical authority for site prep, grading, land clearing, drainage, utility excavation, and septic install/repair.

**Secondary:** social presence, review generation, before/after project photography, service-area page buildout once the primary service area is confirmed.

## Client Identity

| Field | Detail |
|---|---|
| **Business** | D&D Land Works |
| **Owner** | David Deggelman |
| **Phone** | 541-401-8726 |
| **Email** | david@ddlandworks.com |
| **License** | Licensed and Bonded — CCB #261742 |
| **Certification** | DEQ Certified (septic) |
| **Service region** | Oregon (541 area code) — exact city/radius unconfirmed |
| **Website** | ddlandworks.com — live status unconfirmed |
| **Logo** | Not yet saved to this repo — see below |

Full service list and USPs: [business-info.md](business-info.md).

## Logo

Saved at `logo.png` (project root) and `site/public/logo.png` (2026-09-04, sourced from the user's Downloads folder). Brand-blue in [docs/design-system.md](docs/design-system.md) was color-picked directly from this file. Still needed: a square icon-only crop for favicon use (the saved file is a wide horizontal lockup, not square).

## Reference Docs (inherited scaffolding — review before reuse)

These were written for the prior HVAC client. The *process* generalizes; specific values (business name, schema type, phone numbers, page examples) do not and need to be swapped before use.

| Topic | Doc |
|---|---|
| All slash commands | [docs/commands.md](docs/commands.md) |
| Skills (methodology) | [docs/skills.md](docs/skills.md) |
| Specialist agents | [docs/agents.md](docs/agents.md) |
| GBP automation | [docs/gbp-automation.md](docs/gbp-automation.md) |
| Meta Ads creative generation | [docs/meta-ads-creative.md](docs/meta-ads-creative.md) |
| Social automation pipeline | [docs/social-automation.md](docs/social-automation.md) |
| Report design system (dark mode CSS) | [docs/report-design.md](docs/report-design.md) |

## Platform: Astro (decided 2026-09-04)

The site will be built in **Astro**, not WordPress. Full phased build plan: [docs/astro-site-build-plan.md](docs/astro-site-build-plan.md) — written as a TCREI prompt (Task/Context/References/Evaluate/Iterate), broken into 12 phases (0-11) from project setup through post-launch. Start there for anything site-build related. Project lives in `site/`.

**Design system:** finalized — [docs/design-system.md](docs/design-system.md). Barlow Condensed (display) + Barlow (body), near-black + brand-blue (from the logo) + safety-orange as a CTA-only 4th accent. Tokens live in `site/src/styles/global.css`.

## Content Workflow (methodology carries over; publish step changes)

```
/deep-research [url or business]  →  /content-brief  →  content-create  →  humanizer  →  write into Astro content collection + build (see docs/astro-site-build-plan.md Phase 7)
```

The WordPress/Elementor MCP integration (`05-wordpress/mcp-server/`) and its patterns were deleted along with the prior client's data and are **not** being rebuilt — this client is Astro, not WordPress. `/elementor-design` and `/elementor-push` don't apply here; `.claude/skills/elementor-page-builder/` is dead weight for this client.

## Carried-Forward Working Rules (business-agnostic)

- **Humanizer is mandatory** on any AI-drafted prose before it ships (page content, GBP posts, social captions, review replies, ad copy).
- **WordPress publishing (once applicable):** always default to draft; never flip draft → publish without explicit instruction.
- **Reports:** use the dark-mode design system in [docs/report-design.md](docs/report-design.md) once report work starts.
- **GBP work:** prefer the Business Profile API over Playwright automation where available.
- **Schema:** verify the correct schema.org type for an excavation/site-prep contractor before generating structured data — do not assume a type exists without checking schema.org (the prior client learned `HVACContractor` doesn't exist and had to use `HVACBusiness`; the excavation-industry equivalent needs the same check, likely under `LocalBusiness` / `HomeAndConstructionBusiness` or `GeneralContractor`).

## How to Work in This Project

1. Confirm the open items in [business-info.md](business-info.md) with David before building anything client-facing (service area, whether ddlandworks.com is live, GBP status, logo file).
2. Once confirmed, the first real task is almost certainly `/deep-research` for D&D Land Works' core service (e.g. "excavation contractor [city] OR") to establish the keyword/competitor/entity baseline — there is no existing research to build on.
3. Update this file and `business-info.md` as facts get confirmed; both are currently best-effort from a single business card photo, not verified.
