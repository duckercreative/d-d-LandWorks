---
description: Pull real Google search volume / CPC / competition from the Google Ads Keyword Planner API — for SEO research and Google Ads keyword lists
argument-hint: [seed keywords or URL] [optional: geo like "Richmond, TX"] [optional: exact|ideas]
---

Pull keyword data from the **Google Ads Keyword Planner API** for: $ARGUMENTS

## Tool

`05-google-ads/ads-toolkit/keywords/keyword_planner.py` — authenticated via `google-ads.yaml` (customer 3233094582).

```bash
cd "05-google-ads/ads-toolkit"

# Expand seeds into keyword ideas (default mode, Houston-targeted)
python3 keywords/keyword_planner.py -k "ac repair" "emergency ac repair" --csv

# Ideas from a money page URL
python3 keywords/keyword_planner.py --url https://75degreeac.com/ac-repair-houston/ --csv

# Exact volumes for a list (no expansion) + 12-month seasonality
python3 keywords/keyword_planner.py --exact --monthly -k "ac repair houston" "hvac repair houston"

# Suburb targeting (resolved by name, cached in keywords/geo_cache.json)
python3 keywords/keyword_planner.py -k "ac repair" --geo "Richmond, TX" --geo "Katy, TX"
```

Flags: `--min-volume N` · `--sort volume|cpc|competition` · `--limit N` · `--partners` · `--file seeds.txt`

CSV output → `05-google-ads/ads-toolkit/reports/keyword-planner/keyword-planner-[slug]-[date].csv` (includes per-month volume columns for seasonality).

## Workflow

1. Parse $ARGUMENTS into seeds/URL, geo (default Houston, TX), and mode (default ideas; use `--exact` when the user passes a finished list).
2. Run the script. If it fails with `invalid_grant`, the OAuth refresh token expired — tell the user to run `! cd "05-google-ads/ads-toolkit" && python3 auth_setup.py` (sign in with shahidkhan4500.s@gmail.com), then retry.
3. Always save `--csv` for anything beyond a quick check.
4. Interpret results through BOTH lenses:
   - **SEO:** volume + seasonality + low competition → page/blog targets. Feed winners into `01-research/keywords-research.csv` and the `keyword-research` skill universe (this is Source: Google Keyword Planner — real Google data, highest trust for volume).
   - **Google Ads:** high commercial intent + top-of-page bid range → campaign/ad-group fit per the `google-ads-keywords` skill 6-bucket taxonomy. Flag CPCs above the $75 lead-value math.
5. Watch for Richmond VA contamination on any Richmond keyword — geo-target "Richmond, TX" explicitly.
6. Surface: top opportunities table, seasonality callouts (Houston summer spike), CPC $ tiers, and which existing/planned page each winner maps to.
