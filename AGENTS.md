# Repository Guidelines

## Project Structure & Module Organization
This repository is a working marketing operations workspace for **D&D Land Works** (excavation, grading, site prep — repurposed 2026-09-03 from a prior, unrelated client). The numbered top-level folders described below (`03-gsc/`, `04-gmb/`, `05-wordpress/`, `06-meta-ads/`, `09-social-media/`, `reporting-site/`, etc.) were deleted along with the prior client's data and do not currently exist — they describe the *convention* to recreate as each workflow phase actually runs for this client, not current state. When you recreate one, follow the same shape: search console pulls/reports under `03-gsc/`, JSON-LD under `03-schema/`, GBP data/posts/photos under `04-gmb/`, WordPress automation under `05-wordpress/`, ad creatives under `06-meta-ads/`, publishing automation under `09-social-media/` (platform-specific publishers, OAuth scripts, setup docs, auth templates under `platforms/<platform>/`, shared orchestration under `scripts/`). Keep generated outputs inside each feature folder's `data/`, `reports/`, `logs/`, or `posts/archive/` directories.

## Workflow Compatibility
This workspace is built around the Claude workflow in `.claude/`. Codex should not try to replicate Claude-only folders like `.claude/commands/` or `.claude/agents/`. For Codex, keep project-specific reusable skills in `.agents/skills/` and use `AGENTS.md` for shared repo rules. Before substantial SEO, ads, GBP, or content work, read `CLAUDE.md` and the relevant skill first. If a user request clearly maps to a Claude runbook such as `/seo-audit`, `/gsc-report`, or `/social-post`, consult the matching file in `.claude/commands/` as reference, but keep Codex-facing workflow assets in `.agents/skills/`.

## No-Conflict Rules
Keep Claude and Codex assets isolated. Update `.claude/` only when maintaining the Claude source workflow. Keep Codex project assets in `.agents/skills/`; do not create parallel `.codex/commands/` or `.codex/agents/` mirrors. When a shared methodology change is intentional, update `.claude/skills/` first, then port only the Codex-relevant skill material into `.agents/skills/` as a separate step. Keep Codex workflow assets project-local in this repository; do not install these project skills globally in `~/.codex/skills/`.

## Build, Test, and Development Commands
Most work is script-driven with `python3`.

```bash
python3 03-gsc/scripts/run_all.py --report
python3 05-wordpress/scripts/wp_content_update.py --slug ac-repair-katy-tx --dry-run
python3 09-social-media/scripts/social_pipeline.py --dry-run --platforms fb,ig,x,li
python3 06-meta-ads/ads-cli/scripts/generate_sizes.py --brief 06-meta-ads/creatives/briefs/<campaign>/<creative>.json
```

Install dependencies per tool area, not globally: `python3 -m pip install -r 03-gsc/scripts/requirements.txt` or `python3 -m pip install -r 05-google-ads/ads-toolkit/requirements.txt`.

## Coding Style & Naming Conventions
Follow existing Python conventions: 4-space indentation, `snake_case` for files/functions, `UPPER_SNAKE_CASE` for constants, and small single-purpose scripts. Keep content filenames slug-based, for example `ac-repair-katy-tx.md` or `hvac-contractor-memorial-tx.jsonld`. Preserve numbered folder prefixes and do not rename client workflow directories.

## Testing Guidelines
There is no centralized test suite in this workspace. Validate changes with safe execution paths first: use `--dry-run`, `--check`, or report-only modes whenever available. For content and schema changes, verify generated output files and spot-check representative pages or JSON-LD examples before any live push. For LinkedIn social changes, check `09-social-media/platforms/linkedin/docs/content_flow.md` and run a LinkedIn-only dry run before publishing.

## Skills, Commands & Agents
Use the existing skill taxonomy when reasoning about work: `technical-seo`, `on-page-seo`, `local-seo`, `content-generation`, `schema-markup`, `google-ads-*`, `meta-ads`, and related skills in `.claude/skills/` or `.agents/skills/`. Reuse the six specialist roles for parallel analysis when needed by reading their definitions in `.claude/agents/`: `technical-analyst`, `keyword-analyst`, `content-analyst`, `local-seo-analyst`, `offpage-analyst`, and `ai-visibility-analyst`. Outputs should land in the same folders the workflow expects, for example `03-gsc/data/`, `04-gmb/`, `07-landing-pages/`, or `08-reporting/`. Do not install these project skills globally; keep them in the repository’s `.agents/skills/` tree only.

## Commit & Pull Request Guidelines
Git history is not available in this checkout, so follow a strict convention: short imperative commits with a clear area prefix, such as `schema: add Richmond location markup` or `wordpress: dry-run content refresh`. PRs should include scope, affected folders, verification commands run, and screenshots or exported HTML when changing reports, creatives, or publishing output.

## Security & Configuration Tips
Treat `auth/`, `09-social-media/platforms/*/auth/`, token JSON files, and client credentials as sensitive. Commit only templates such as `*.template.json`; keep live tokens, browser sessions, and account IDs out of version control and out of screenshots unless the workflow explicitly requires them.
