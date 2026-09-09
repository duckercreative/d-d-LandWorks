# AI Crawler Access Audit — Full 2026 Bot Taxonomy

## Contents
- The 5 Bot Categories (Critical Distinction)
- Full 2026 AI Bot Reference Table
- Default robots.txt Block for 75 Degree AC
- Important Notes on Enforcement

---

## The 5 Bot Categories (Critical Distinction)

AI crawlers are **not all the same kind of bot**. Decisions to allow or block must be made per-category, not as a single robots.txt allow-all rule. Source: HUMAN Security 2026 bot list, OpenAI bots docs.

| Category | What They Do | Default Action |
|---|---|---|
| **1. Training crawlers** | Harvest data to train future models | Allow if you want exposure; block if you want to withhold training rights |
| **2. Retrieval / citation crawlers** | Fetch pages to cite in live AI answers (this drives ChatGPT/Perplexity/Claude citations) | **MUST ALWAYS ALLOW** |
| **3. Agentic browsers** | Full browsers (Atlas, Comet, Mariner) that act on a user's behalf | **Cannot be blocked via robots.txt** — they use real Chrome UA strings. See agentic-browsers.md. |
| **4. Preview / social crawlers** | Generate link previews on social platforms | Allow |
| **5. Stealth crawlers** | Documented to circumvent robots.txt (Cloudflare Aug 2025 report flagged Perplexity-User) | Robots.txt does not stop them |

## Full 2026 AI Bot Reference Table

| User-Agent | Company | Category | Action for 75 Degree AC |
|---|---|---|---|
| **GPTBot** | OpenAI | Training | Allow (we want training exposure) |
| **OAI-SearchBot** | OpenAI | Retrieval (ChatGPT Search) | MUST allow — drives ChatGPT citations |
| **ChatGPT-User** | OpenAI | Retrieval (browsing) | MUST allow |
| **ChatGPT-User/2.0** | OpenAI | Retrieval (updated UA) | MUST allow |
| **anthropic-ai** | Anthropic | Training | Allow |
| **ClaudeBot** | Anthropic | Retrieval/citation | MUST allow — drives Claude citations |
| **claude-web** | Anthropic | Retrieval | MUST allow |
| **Claude-User** | Anthropic | User-triggered fetch | MUST allow |
| **Claude-SearchBot** | Anthropic | Search retrieval | MUST allow |
| **PerplexityBot** | Perplexity | Retrieval/citation | MUST allow |
| **Perplexity-User** | Perplexity | Retrieval (stealth risk) | Allow (note compliance risk) |
| **Google-Extended** | Google | Training (Gemini) | Allow |
| **GoogleAgent-Mariner** | Google | Agentic browser | Cannot block — see agentic-browsers.md |
| **Googlebot** | Google | Indexing + AIO | MUST allow |
| **GoogleOther** | Google | Misc fetchers | Allow |
| **Bingbot** | Microsoft | Indexing + Copilot | MUST allow |
| **Applebot** | Apple | Siri/Spotlight | MUST allow |
| **Applebot-Extended** | Apple | Apple AI training | Allow |
| **Amazonbot** | Amazon | Alexa | Allow |
| **FacebookBot** | Meta | Social preview | Allow |
| **meta-externalagent** | Meta | Backup fetcher | Allow |
| **MistralAI-User** | Mistral | Retrieval | Allow |
| **cohere-ai** | Cohere | Training | Allow |
| **DuckAssistBot** | DuckDuckGo | AI answers | Allow |
| **AI2Bot** | Allen Institute | Research | Allow |
| **YouBot** | You.com | AI search | Allow |
| **Bytespider** | ByteDance | Training/TikTok | Decision needed (no clear US benefit) |
| **CCBot** | Common Crawl | Training data feed | Block (third-party redistribution) |

## Default robots.txt Block for 75 Degree AC

For a local service business, default to **allow all retrieval/citation bots, allow training bots for exposure, block CCBot only**:

```
User-agent: OAI-SearchBot
Allow: /

User-agent: ChatGPT-User
Allow: /

User-agent: ClaudeBot
Allow: /

User-agent: Claude-User
Allow: /

User-agent: Claude-SearchBot
Allow: /

User-agent: PerplexityBot
Allow: /

User-agent: Applebot
Allow: /

User-agent: GPTBot
Allow: /

User-agent: anthropic-ai
Allow: /

User-agent: Google-Extended
Allow: /

User-agent: Applebot-Extended
Allow: /

User-agent: MistralAI-User
Allow: /

User-agent: CCBot
Disallow: /
```

## Important Notes on Enforcement
- Fetch live robots.txt to audit: https://75degreeac.com/robots.txt
- Robots.txt has no enforcement on agentic browsers (Atlas, Comet, Mariner). For those, see `agentic-browsers.md`.
- Stealth crawlers (Perplexity-User flagged by Cloudflare Aug 2025) ignore robots.txt entirely.
