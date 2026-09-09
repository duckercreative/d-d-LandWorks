---
description: Audit live Google Business Profile via Playwright and apply fixes directly — description, services, products, hours, categories
argument-hint: [section: full|description|services|products|info|categories|attributes]
---

Run the autonomous GBP audit-and-fix workflow from memory `feedback_gbp_autonomous_fix.md` and `project_gbp_editor_automation.md`.

Section: $ARGUMENTS (if blank, run full audit across all sections)

**Behavior (from memory):** Go straight to the live profile, audit, suggest, and apply fixes directly without waiting for step-by-step approval.

**Phase 1 — Verify session**
```bash
python3 04-gmb/scripts/gbp_browser.py --check
```
If expired → `python3 04-gmb/scripts/gbp_autologin.py` (user signs in once, auto-saves).

**Phase 2 — Audit each section** (headed Chrome, slow_mo ≥ 150)

For each requested section, navigate to the direct editor URL, screenshot, and read DOM:
- Info: `https://business.google.com/local/business/13024988940176460319/editprofile/info?hl=en`
- Services: `https://business.google.com/local/business/13024988940176460319/editprofile/services?hl=en`
- Products: `https://business.google.com/local/business/13024988940176460319/editprofile/products?hl=en`

Audit against these policies:
- `project_gbp_ranking_2026.md` — approved description text, 2026 local-pack weights, dynamic-profile rule
- `business-info.md` — NAP, hours, USPs
- `services-list.md` — full service catalog
- `project_tacla_license.md` — TACLA72152E must appear in schema/description where appropriate
- `project_gbp_identifiers.md` — correct Place ID ChIJ__-v1WjGQIYRjGmVNrXpx9U, CID 15404538014958184844

**Phase 3 — Build fix plan**
Output a concise issue list:
- Current value → Proposed value → Reason (cite policy file)
- Severity: Critical (policy violation) / High (ranking impact) / Medium (completeness)

**Phase 4 — Apply fixes directly**
Use existing push scripts where possible:
- Description → `python3 04-gmb/scripts/gmb_push_description.py`
- Services → `python3 04-gmb/scripts/gmb_push_services.py`
- Other sections → `04-gmb/scripts/gmb_edit_profile.py` or direct Playwright DOM interaction
- Always headed mode, `slow_mo=150+`, screenshot every step
- Save screenshots to `04-gmb/logs/edit-[section]-[date]/`

**Phase 5 — Verify**
Re-navigate to each edited section, re-screenshot, diff old vs. new, confirm the change persisted.

**Output:**
- `04-gmb/logs/gbp-audit-[date].md` — full findings + diff before/after
- Print a one-line summary per section: "Services: added 3, removed 1 wrong-cat; Description: updated to 2026-approved copy"

**Known exception:** Do NOT touch the phantom duplicate listing at 20926 Bright Lake Bend Ct, Richmond TX 77407 (not the real business; see CLAUDE.md).
