# Project Skills

Project-local Codex skills live in `.agents/skills/`.

Rules:
- Keep reusable global skills in `~/.codex/skills/` only when they are not specific to this client.
- Keep 75 Degree AC workflow skills in this repository under `.agents/skills/`.
- Treat `.claude/skills/` as the Claude-side source material when a shared methodology needs to be ported.
- Do not recreate `.codex/commands/` or `.codex/agents/` for this project.
- Keep only production skill folders here. Do not keep `*-workspace`, `evals/`, or other experiment artifacts in `.agents/skills/`.
