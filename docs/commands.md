# Slash Commands — 75 Degree AC

All work in this project can be triggered via slash commands. Commands invoke skills and specialist agents under the hood — see [skills.md](skills.md) and [agents.md](agents.md).

## Core SEO

| Command | What It Does |
|---------|-------------|
| `/gsc-report` | Pull fresh GSC data + generate visual HTML SEO report |
| `/seo-audit [focus]` | Run full multi-agent SEO audit (full\|technical\|content\|local\|keywords\|offpage\|ai) |
| `/quick-wins` | Generate exact title/meta rewrites for all 13 quick-win pages |
| `/fix-noindex [A\|B\|C]` | Walk through the 86-page noindex fix workflow with exact steps |
| `/keyword-research [focus]` | Run keyword research and gap analysis |
| `/keyword-planner [seeds\|url] [geo]` | Real Google volume/CPC/competition via the Keyword Planner API — ideas expansion or `--exact` metrics, 12-mo seasonality, CSV |
| `/dataforseo [volume\|ideas\|kd\|serp\|local] [keywords]` | DataForSEO API — city-level volume/CPC, keyword difficulty, live SERP w/ PAA+AIO+local pack, Maps rankings |
| `/competitor-analysis [url]` | Deep competitor analysis (GBP, content, keywords, links) |
| `/topical-map [focus]` | Build/update topical authority map and content gaps |
| `/ai-visibility [platform]` | AI citation audit, crawler access, GEO optimization |
| `/internal-links [mode]` | Internal linking audit — orphans, anchor diversity, hub-spoke, fix queue |
| `/schema-generate [url]` | Generate complete JSON-LD schema markup for any page |
| `/schema-audit [scope]` | Validate live schema against WPCode #8140 |
| `/citations [mode]` | Audit 35-directory NAP consistency + generate fix queue |
| `/backlink-outreach [type]` | Generate 30+ backlink targets with outreach copy |
| `/entities [mode]` | Entity research + page mapping — Koray 14-source, sameAs audit |
| `/cro-audit [url?]` | CRO audit on money pages — phone, trust, mobile UX, form friction |
| `/site-health [mode]` | Site-wide URL status check — HTTP codes, noindex, canonicals, sitemap sync |

## Content Workflow (Non-Negotiable Chain)

Chain: `/deep-research` → `/content-brief` → `/content-create` → **humanizer pass (mandatory)**.

| Command | What It Does |
|---------|-------------|
| `/deep-research [url]` | Upstream 10-phase research pack (REQUIRED before brief) |
| `/content-brief [keyword]` | Detailed content brief (refuses without research pack) |
| `/content-create [slug]` | Publish-ready SEO content (refuses without brief) |
| Humanizer pass | Trigger by saying "humanize this" or invoking the `humanizer` skill on the content file. Detects 29 AI tells, audits burstiness/perplexity, rewrites with voice + specificity. Required before ship. |
| `/audit [slug?]` | Content audit workflow — next pending page → research + dark HTML report + content |
| `/location-page [city] [service]` | Create or optimize any location/service-area page |
| `/content-calendar [mode]` | Build/update 4-phase content calendar |
| `/blog-post [topic?]` | Write + publish weekly insights blog (draft, 2,500–3,500w) — runs humanizer pre-publish |

## GBP & Local

| Command | What It Does |
|---------|-------------|
| `/gbp-optimize [task]` | Generate GBP description, posts, answer bank, photo list |
| `/gbp-post [topic?]` | Research-first GBP post → post_pipeline.py format |
| `/gbp-edit [section?]` | Audit live GBP via Playwright + apply fixes directly |
| `/reviews [mode]` | Review management — pull, draft responses, request templates |

## Google Ads

| Command | What It Does |
|---------|-------------|
| `/ads-audit [focus]` | Full Google Ads audit — architecture, bidding, keywords, copy, QS |
| `/ads-report [period]` | Weekly Google Ads performance report (dark HTML) |

## Meta Ads & Social

| Command | What It Does |
|---------|-------------|
| `/meta-ads [task]` | Meta Ads campaigns + creative briefs |
| `/social-post [mode]` | Fan GBP template out to FB/IG/X/LinkedIn |

## Quora

| Command | What It Does |
|---------|-------------|
| `/quora-post [topic?]` | Research-first Quora answer (Discord approval, Playwright post) |
| `/quora-warmup [minutes?]` | Daily warmup — 6–10 topics, 2–4 upvotes (required within 48h of any post) |
| `/quora-monitor [mode?]` | Weekly performance + comment scan + dark HTML report |

## Pinterest

| Command | What It Does |
|---------|-------------|
| `/pin-create [topic]` | Draft brief + generate 1000×1500 KIE image, queue (no publish) |
| `/pin-post [pin_id?]` | Publish oldest queued pin (or specific id) |
| `/pin-report [mode?]` | Weekly Pinterest Analytics → dark HTML report |

## Reddit

| Command | What It Does |
|---------|-------------|
| `/reddit-find [cluster?]` | Refresh candidates.json from target subs |
| `/reddit-draft [arg?]` | Draft comment or self-post per reddit-engagement skill |
| `/reddit-post [slug?]` | Discord-gated submit with all 13 guards |
| `/reddit-warmup [min?]` | Daily warmup (required within 24h of any write) |
| `/reddit-monitor [mode?]` | Weekly karma + scores + shadowban probe → dark HTML |
| `/reddit-shadowcheck [limit?]` | One-off authed-vs-unauthed visibility diff |
| `/reddit-phase [advance?]` | Show or advance 5-phase account rollout |

## Reporting & Monitoring

| Command | What It Does |
|---------|-------------|
| `/monitor [cadence]` | SEO monitoring sweep (daily/weekly/monthly/quarterly) |
| `/weekly-report [date]` | Weekly SEO progress report |
| `/weekly-audit [date?]` | In-depth audit across ALL platforms (one unified dark HTML report) |
| `/biweekly-compare [date?]` | 14d vs prior 14d across platforms, deltas + significance |
