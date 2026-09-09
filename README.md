# D&D Land Works — Marketing Workflow

Private working repo for **D&D Land Works**, an excavation, grading, and site
prep contractor owned by David Deggelman (CCB #261742, DEQ certified for
septic work). Repurposed on 2026-09-03 from a prior, unrelated client's setup
— the folder structure, `.claude/` skills/agents/commands, and `docs/`
playbooks are reusable methodology; all business-specific data was deleted.

> **New here? Start with [CLAUDE.md](CLAUDE.md)** — current status is
> "greenfield": almost nothing has been built for this client yet. Then check
> [business-info.md](business-info.md) → "Open Items" for what's still
> unconfirmed (service area, live site status, logo file, GBP status).

---

## What's in here

| Folder | Contents |
|---|---|
| `docs/` | Reference docs — commands, skills, agents, per-channel playbooks (written for the prior client; process is reusable, specifics need swapping) |
| `.claude/` | Slash commands, skills, specialist agents (inherited scaffolding) |

Everything else (research, briefs, content, WordPress integration, GBP data,
reporting) was deleted along with the prior client's data and needs to be
rebuilt from scratch for D&D Land Works, following the same folder
conventions the skills expect (`01-research/`, `07-landing-pages/`, etc.) as
each phase actually gets run.

---

## The content workflow (target shape)

```
/deep-research [business/service]
  → /content-brief
    → content-create
      → humanizer            ← mandatory, no exceptions
        → Elementor design/push (once a WordPress+Elementor site is confirmed)
```

Full rules in [CLAUDE.md](CLAUDE.md).

---

## Security model

- Live credentials are never committed — see `.gitignore`.
- The prior client's WordPress credentials were cleared from `.env` on repurpose.
- Before every commit: `git status` — if a credential file is staged, stop.

---

## Hard rules (carried over, business-agnostic)

- WordPress writes **always default to draft**. Publishing requires explicit instruction.
- The **humanizer pass is mandatory** on any AI-drafted prose before it ships.
- Reports use the dark-mode design system in [docs/report-design.md](docs/report-design.md).
- Audits use real data — curl HTML, WP-CLI, GBP/GSC JSON. Never WebFetch summaries.
- Verify the correct schema.org type for an excavation contractor before generating structured data — don't assume one exists without checking.
