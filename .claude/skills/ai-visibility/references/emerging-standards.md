# 2025-2026 Developments to Monitor

Emerging standards and shifts that did not exist when traditional SEO playbooks were written. Each is marked **Implement / Monitor / Future** based on current actionability.

## RSL — Really Simple Licensing (Monitor)

Launched September 2025 by RSS co-creator Dave Winer. XML-based standard that lets publishers declare AI licensing terms inside robots.txt. Supports free, attribution, subscription, pay-per-crawl, and pay-per-inference models. Backed by Reddit, Yahoo, Medium (844,000+ publishers). **As of May 2026, no major AI company has committed to honor RSL.** Awareness only.

Source: https://rslstandard.org/

## Cloudflare AI Crawl Control + Pay-Per-Crawl (Future)

Cloudflare's AI Audit tool moved to GA. Provides per-bot allow/block rules, pay-per-crawl beta (HTTP 402 with pricing signal), and **Content Signals Policy** — a robots.txt block that declares use intent: `search`, `ai-input`, or `ai-train`. **75 Degree AC is not on Cloudflare**, so this is future-state. If we migrate, switch on AI Crawl Control immediately.

Source: https://developers.cloudflare.com/ai-crawl-control/

## Agentic Browser Traffic Shift (Implement Now)

See `agentic-browsers.md`. This is the single highest-impact item. Agentic browsers are growing 6,900% YoY.

## Model Context Protocol (MCP) (Monitor)

Introduced by Anthropic November 2024. Lets AI models connect to structured data sources, tools, and APIs directly. Adopted by Claude Desktop, OpenAI, Google DeepMind, Cline, Cursor. **Not directly applicable to a local service site yet** — but the rapid adoption suggests the future of AI content access may be more API-based than file-based. If a customer-facing MCP server becomes available for HVAC contractors, evaluate.

## ai.txt and robots.json (Monitor)

- **ai.txt** (Spawning.ai) — separate file for declaring training-permission terms, distinct from access control. Some publishers add it alongside robots.txt.
- **robots.json** — proposed machine-readable replacement for robots.txt. Not yet adopted by major crawlers.

Both are awareness-level. Not actionable for 75 Degree AC today. See `technical-seo/SKILL.md` for implementation details if standards mature.
