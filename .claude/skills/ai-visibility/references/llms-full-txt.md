# llms-full.txt — The Comprehensive Companion File

## What It Is
`llms.txt` is an index. `llms-full.txt` is the **complete content** — every page concatenated into a single Markdown file for AI ingestion. Anthropic's llms-full.txt is 481,349 tokens. Vercel and Stripe also publish them. Both files are recommended together.

## Reality Check (May 2026)
No major AI platform has officially confirmed they read llms.txt or llms-full.txt as a ranking signal. Google's John Mueller stated "No AI system currently uses llms.txt." The Model Context Protocol (MCP) has more confirmed adoption. **But:** the file costs nothing to produce, Anthropic and Microsoft are expected to break ranks, and the file doubles as agent-readable context. Treat as future-proofing, not a confirmed ranking lever.

## llms-full.txt Build Spec for 75 Degree AC

Concatenate, in this order, in clean Markdown:

1. Business overview block (NAP, license, year founded, brands serviced)
2. Each service page — full body content as Markdown (~12 pages)
3. Each location page — full body content as Markdown (~21 live pages)
4. FAQ corpus — all questions and answers across the site
5. Pricing/cost data — every published price range, by service
6. Contact information block

## Deployment

Output path: `https://75degreeac.com/llms-full.txt`

Add to site root and reference in `<head>`:
```html
<link rel="llms-txt" href="/llms.txt">
<link rel="llms-full-txt" href="/llms-full.txt">
```

Build script lives at `02-site-architecture/build-llms-full.py` — pulls from WP REST API, strips chrome, emits Markdown.
