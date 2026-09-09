---
description: Deploy a previously-designed elementor_draft.json to WordPress as a draft page — snapshots existing data, validates JSON, syncs Rank Math, curls preview URL
argument-hint: <page slug, e.g. "houston-heat-pump-installation"> [--dry-run] [--post-id 1234]
---

Deploy the Elementor JSON at `07-landing-pages/pages/{slug}/elementor_draft.json` to WordPress as a **draft page** via the `wp-elementor` MCP server.

This is the **push** step. It does the WP writes. `/elementor-design` must have run first.

---

## Hard refusals

Refuse and stop if any of these are true:

1. The draft file `07-landing-pages/pages/{slug}/elementor_draft.json` does not exist. Run `/elementor-design {slug}` first.
2. The tokens file `07-landing-pages/pages/{slug}/elementor_draft.tokens.json` does not exist. Same fix.
3. The MCP server's environment is `WP_TARGET=production` and `ALLOW_PROD_WRITE` is not `1`. Per the safety gate, prod writes require explicit opt-in. Tell the user how to flip it (env var in `.mcp.json`) but do not flip it yourself.
4. The slug starts with `hvac-contractor-richmond` but the JSON references the main `(713) 598-2737` phone or `tel:+17135982737`. Richmond pages must use `(346) 681-2625`. Grep the JSON before pushing.

---

## Phase 1 — Resolve the post

Decide whether the push is **create new** or **update existing**:

- If `--post-id N` is provided, use that post ID. Confirm with `page_get_elementor(post_id)` that it exists.
- Otherwise, attempt to resolve the slug to an existing post:
  ```bash
  curl -sS "${SITE_URL}/wp-json/wp/v2/pages?slug={slug}&_fields=id,status,link"
  ```
  If exactly one match, use that post ID and treat as **update**.
  If zero matches, call MCP `page_create_draft(title=<H1 from JSON>, slug={slug})` and use the returned `post_id`. Treat as **create**.
  If multiple matches, refuse and ask the user which post ID to use.

Capture: `post_id`, `mode` (create|update), `preview_url`.

---

## Phase 2 — Validate the JSON

1. Load `elementor_draft.json`. Confirm it is a top-level JSON array.
2. Confirm every container has `elType: "container"` or `"section"`.
3. Confirm every widget has `widgetType` set and a non-empty `id`.
4. Walk the tree to collect all `id` values. Assert no duplicates. (This is a defense-in-depth check; `pattern_render` should already guarantee this.)
5. Confirm every image widget has both `settings.image.id` (non-empty integer) AND `settings.image.url` (non-empty URL pointing to `*.75degreeac.com`).
6. Run a phone-number grep — confirm correct phone for the page type.

Fail loud on any check. Do not proceed.

---

## Phase 3 — Dry-run path (if `--dry-run`)

For **update** mode:

1. `page_get_elementor(post_id)` → current `_elementor_data`
2. Diff against the new array at the container level. For each container in the new array, report: NEW | REPLACED | UNCHANGED.
3. Print widget-count delta per container.
4. Stop. No writes happen.

For **create** mode:

1. Print the planned widget tree (one line per top-level container with widget histogram).
2. Stop.

---

## Phase 4 — Snapshot + push (no `--dry-run`)

1. Call MCP `backup_snapshot(post_id, label="pre-push")` first. Verify the snapshot path was written.
2. Call MCP `page_set_elementor(post_id, elementor_data=<array>, snapshot_first=False)` — pass `snapshot_first=False` because we already snapshotted with a labeled tag. The tool will acquire the `/tmp/elementor_push.lock` mutex.
3. Capture the returned `bytes_written` and `preview_url`.

---

## Phase 5 — Rank Math meta sync

Read the brief at `07-landing-pages/briefs/{slug}-brief.md` for SEO title + meta description. If not present, derive from the content file's frontmatter or first H1/intro.

Call MCP `rankmath_set_meta(post_id, title=..., description=..., canonical=<site_url>/{slug}/)`.

---

## Phase 6 — Post-push verification

1. Curl the preview URL. Require HTTP 200. If 500, dump the snapshot path and tell the user how to roll back:
   ```
   To roll back: pass the snapshot JSON to page_set_elementor manually.
   Snapshot: 05-wordpress/backups/elementor/{post_id}/{timestamp}_pre-push.json
   ```
2. Print the Elementor editor URL: `${SITE_URL}/wp-admin/post.php?post={post_id}&action=elementor`
3. Remind the user this is **draft only**. Pages do not go live without explicit "go live" from the user (per Never Auto-Publish rule).

---

## Phase 7 — Final report

Print:

- Mode: create | update
- Post ID
- Preview URL
- Edit URL (Elementor editor)
- Snapshot path (for rollback)
- Bytes written
- Rank Math fields synced
- Reminder: open the editor and verify every section renders as a native editable widget (not an HTML block). If a section renders as one big HTML block, the pattern is broken — `pattern_render` regenerated IDs but `extract_patterns.py` may have produced an HTML-widget pattern. File a note in `05-wordpress/mcp-server/README.md` and fix the classifier.
