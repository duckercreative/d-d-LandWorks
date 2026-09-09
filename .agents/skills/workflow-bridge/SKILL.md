---
name: workflow-bridge
description: >
  Use when working in repositories that contain a repo-local `.codex/commands/` or `.codex/agents/`
  workflow mirror. Routes Codex to local command runbooks and specialist agent definitions so it can
  follow the repository's established operating model without touching Claude-specific files.
---

# Workflow Bridge

Use this skill when the current repository contains `.codex/commands/`, `.codex/agents/`, or both.

## Purpose

This skill makes Codex treat repo-local workflow files as the operating contract for that repository:
- `.codex/commands/*.md` are task runbooks
- `.codex/agents/*.md` are specialist role definitions
- `.codex/skills/*/SKILL.md` are repo-specific methodologies

## Command Routing

If the user request matches a command name or intent, read the corresponding file under `.codex/commands/` before acting.

Examples:
- audit request -> `.codex/commands/seo-audit.md` or `.codex/commands/audit.md`
- GSC/reporting request -> `.codex/commands/gsc-report.md` or `.codex/commands/weekly-report.md`
- GBP request -> `.codex/commands/gbp-post.md`, `.codex/commands/gbp-edit.md`, or `.codex/commands/gbp-optimize.md`
- content request -> `.codex/commands/content-brief.md` or `.codex/commands/content-create.md`

Treat frontmatter as routing hints and the markdown body as the workflow to follow.

## Agent Routing

If the task benefits from delegation, read the relevant role file in `.codex/agents/` first and use it as the delegation brief.

Common mappings:
- technical SEO -> `.codex/agents/technical-analyst.md`
- keyword/on-page -> `.codex/agents/keyword-analyst.md`
- content -> `.codex/agents/content-analyst.md`
- local/GBP/citations/reviews -> `.codex/agents/local-seo-analyst.md`
- off-page/social/CRO -> `.codex/agents/offpage-analyst.md`
- AI visibility/crawlers -> `.codex/agents/ai-visibility-analyst.md`

## No-Conflict Rules

- Never treat `.claude/` as Codex's working directory for commands or agents.
- Prefer `.codex/` mirrors when they exist.
- If a required file exists only in `.claude/`, read it for reference but write Codex-facing updates into `.codex/`.
- Do not auto-sync `.codex/` back into `.claude/`.

## Output Discipline

Keep outputs in the same project paths expected by the mirrored runbooks. Do not invent parallel output folders for Codex-only runs unless the user asks for that separation.
