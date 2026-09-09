---
description: Query the DataForSEO API — keyword volume/CPC (city-level), keyword difficulty, live SERP scrapes (PAA + AI Overview + local pack), Google Maps rankings, keyword ideas
argument-hint: [volume|ideas|kd|serp|local|balance] [keywords or query]
---

Run DataForSEO queries for: $ARGUMENTS

## Tool

`01-research/dataforseo/dfs.py` — Basic-auth credentials read from `06-meta-ads/ads-cli/.env` (`DATAFORSEO_LOGIN`/`DATAFORSEO_PASSWORD`). Pay-as-you-go: check `balance` if running anything large.

```bash
cd "01-research/dataforseo"

python3 dfs.py volume -k "ac repair houston" "hvac repair houston" --monthly --csv   # Google Ads volume/CPC, CITY-level geo
python3 dfs.py ideas -k "ac repair houston" --limit 100 --csv                        # phrase-match suggestions w/ volume+KD
python3 dfs.py kd -k "kw1" "kw2" --csv                                               # bulk keyword difficulty 0-100
python3 dfs.py serp -k "ac repair houston"                                           # live mobile SERP: organic+PAA+AIO+local pack
python3 dfs.py local -k "ac repair houston"                                          # Google Maps top-20 + our position
python3 dfs.py balance                                                               # account balance (free)
```

Flags: `--location "Richmond,Texas,United States"` (no spaces after commas) · `--file seeds.txt` · `--min-volume N` · `--limit N` · `--csv` → `01-research/dataforseo/reports/`

## Known behavior

- **Labs endpoints (`ideas`, `kd`) are country-level only** — the script auto-collapses city locations to "United States" and prints a note. `volume`, `serp`, `local` are fully city-targetable.
- DataForSEO KD runs much lower than Semrush KD (different scales — DFS "ac repair houston" = 6 vs Semrush 55). Never mix the two scales in one comparison; tag which tool produced the number.
- `serp` runs mobile by default (matches mobile-first indexing + CWV policy). It reports AI Overview presence per query — feeds the ai-visibility skill.
- `local` auto-reports 75 Degree AC's position or "NOT in top 20" — feeds GBP/local-pack work.

## Interpretation duties

1. SEO: volumes/KD feed the keyword universe (`01-research/keywords-research.csv`, source tag `dfs`); SERP scrapes feed competitor + PAA research; AIO presence feeds `/ai-visibility`.
2. Google Ads: city-level CPC bids cross-check Keyword Planner; surface negative-keyword candidates (e.g., "car ac repair houston" 880/mo = auto AC, not us).
3. Local: Maps rankings feed `/gbp-optimize` and local-pack tracking in `/monitor`.
4. Cost discipline: batch keywords into single calls (volume/kd accept up to 1,000); avoid one-keyword-per-call loops.
