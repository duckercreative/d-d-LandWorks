---
description: Publish a Pinterest pin to the live board — either the oldest queued pin or a specific one. Calls publisher.publish_pin via the pipeline.
argument-hint: [optional pin_id; omit to publish the oldest queued pin]
---

Publish a Pinterest pin from the queue.

Argument: $ARGUMENTS

**Pre-flight:**
1. Verify auth: `python3 09-social-media/platforms/pinterest/publisher.py --whoami` — should print username, board_name, board_id, expires_at
2. Inspect queue: `python3 09-social-media/scripts/pinterest_pipeline.py --list-queue` — confirm the pin you want to publish has its image ready (IMG=YES)

**Publish:**
- If `$ARGUMENTS` looks like a pin_id: `python3 09-social-media/scripts/pinterest_pipeline.py --post-id <pin-id>`
- If blank: `python3 09-social-media/scripts/pinterest_pipeline.py --post-next` (oldest queued brief whose image exists)

**What happens under the hood:**
- Loads the brief JSON from `pins/queue/`
- Calls `publisher.publish_pin(image_path, title, description, alt_text, link, board_id)`
- On success: moves brief to `pins/archive/YYYY-MM/`, appends to `data/publish_log.csv`, prints the `pin_url`
- On failure: leaves brief in queue, prints the error, does NOT mark posted

**Verification:**
- Visit the returned `pin_url` in a browser — pin should be live on the configured board with correct title/description/destination link
- Confirm the brief file moved from `pins/queue/` to `pins/archive/YYYY-MM/`

**If something went wrong with a live pin (wrong copy, etc.):**
- `python3 09-social-media/scripts/pinterest_pipeline.py --delete <pinterest_pin_id>` (the numeric id from the Pinterest URL, not our local `pin_id`)
