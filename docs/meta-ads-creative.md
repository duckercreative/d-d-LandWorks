# Meta Ads Creative Generation (KIE AI — Non-Negotiable)

**Always generate real images via KIE AI. Never produce HTML mockups as creatives.**

## Script

`06-meta-ads/ads-cli/scripts/generate_sizes.py` — takes one brief JSON, generates all 3 sizes, injects logo automatically.

```bash
python3 06-meta-ads/ads-cli/scripts/generate_sizes.py \
  --brief 06-meta-ads/creatives/briefs/campaign-1-emergency/creative-1.json
```

## Three Sizes Per Creative — Always

| File | Ratio | Dimensions |
|------|-------|-----------|
| `feed.png` | 1:1 | 1024×1024 |
| `instagram.png` | 4:5 | 1024×1280 |
| `story.png` | 9:16 | 1024×1820 (safe zone y=250–1570) |

Each size is independently generated — never a crop of another.

## Folder Structure

```
06-meta-ads/creatives/
  logo.png                             ← reference image for all generations
  briefs/campaign-N-name/creative-N.json
  campaign-1-emergency/creative-N/     feed.png | instagram.png | story.png
  campaign-2-ac-repair/creative-N/
  campaign-3-installation/creative-N/
  campaign-4-maintenance/creative-N/
  campaign-5-commercial/creative-N/
  campaign-retargeting/creative-N/
```

No `generated/` or `raw/` subdirectories. All images live directly in `campaign-N/creative-N/`.

## Logo Rule

Every prompt must include:
> *"The reference image is the official 75 Degree AC logo — reproduce it exactly on the technician's uniform and in the bottom trust strip. Do not distort or alter the logo."*

Logo path: `06-meta-ads/creatives/logo.png`

## Brief JSON Key Fields

- `"campaign_slug"`: string folder name (e.g. `"campaign-1-emergency"`)
- `"campaign"`: **dict** with objective/audience/offer/cta (used by `build_prompt()`)
- `"creative_number"`: integer
- `"reference_images"`: `["/absolute/path/to/creatives/logo.png"]`

Full workflow and current creative inventory: `.claude/skills/meta-ads/SKILL.md` → Creative Generation section.
