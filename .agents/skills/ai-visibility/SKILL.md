---
name: ai-visibility
description: >
  GEO (Generative Engine Optimization) and AI visibility methodology for 75 Degree AC.
  Covers AI citation strategy, crawler access, llms.txt, brand SERP, AI Overviews, 
  and voice search optimization. Activates when optimizing for AI search or checking AI presence.
version: 1.0.0
client: 75 Degree AC
---



# AI Visibility — 75 Degree AC

## Why AI Visibility Matters Now

AI Overviews appear in **20–35% of local service queries** (2025). ChatGPT, Perplexity, Gemini, and Copilot are rapidly becoming "first port of call" for purchase decisions. For HVAC in Houston:
- "best ac repair houston" — may trigger AI Overview or AI assistant response
- "emergency hvac repair houston tx" — high AI response probability
- "how much does ac repair cost in houston" — extremely high AI Overview probability

If 75 Degree AC isn't cited in these AI answers, competitors who ARE cited will capture a growing share of searches before the user even reaches Google's organic results.

**AI Citation Correlation Data (2025):**
| Platform Signal | AI Citation Correlation |
|----------------|------------------------|
| YouTube channel with relevant content | 0.737 (highest) |
| Wikipedia/Wikidata entity | 0.654 |
| Social media presence (Facebook, LinkedIn) | 0.512 |
| Yelp listing with reviews | 0.489 |
| BBB listing | 0.401 |
| Answer-first content structure | 0.580 |
| FAQPage schema | 0.551 |

---

## Input Files

- `business-info.md` — all social/directory links, phone, address
- `01-research/keywords-research.md` — target keywords
- `02-site-architecture/site-architecture.md` — page list
- `03-gsc/data/seo-solutions.md` — current on-page state

---

## Section 1: AI Crawler Access Audit

### Fetch and Check robots.txt

URL: https://75degreeac.com/robots.txt

**Required Allowances:**

| Priority | User-Agent | AI System | Action if Blocked |
|----------|-----------|-----------|-------------------|
| CRITICAL | GPTBot | ChatGPT/OpenAI | Fix immediately |
| CRITICAL | OAI-SearchBot | OpenAI Search | Fix immediately |
| CRITICAL | ChatGPT-User | ChatGPT Browsing | Fix immediately |
| CRITICAL | ClaudeBot | Claude/Anthropic | Fix immediately |
| CRITICAL | PerplexityBot | Perplexity AI | Fix immediately |
| HIGH | Googlebot | Google + AIO | Should already be allowed |
| HIGH | Applebot | Siri/Apple Intelligence | Fix within 7 days |
| HIGH | Bingbot | Copilot/Bing | Fix within 7 days |
| MEDIUM | Anthropic-AI | Claude API | Fix within 30 days |
| MEDIUM | YouBot | You.com | Fix within 30 days |
| LOW | TavilyBot | Tavily research | Optional |
| LOW | DuckAssistBot | DuckDuckGo AI | Optional |

**If any CRITICAL crawlers are blocked, add to robots.txt:**
```
User-agent: GPTBot
Allow: /

User-agent: OAI-SearchBot
Allow: /

User-agent: ChatGPT-User
Allow: /

User-agent: ClaudeBot
Allow: /

User-agent: PerplexityBot
Allow: /

User-agent: Applebot
Allow: /
```

---

## Section 2: llms.txt

### Check: https://75degreeac.com/llms.txt

If missing (likely), create:

```markdown
# 75 Degree AC
> HVAC contractor in Houston, TX — AC repair, installation, maintenance, and 24/7 emergency HVAC service since 2016.

## About
75 Degree AC is a licensed (TACLA) HVAC contractor serving Houston, TX and Greater Houston suburbs. We repair, install, and maintain all major AC and heating brands for residential and commercial customers.

## Services
- **AC Repair**: Same-day repair for all major brands. Available 24/7 for emergencies.
- **AC Installation**: New HVAC system installation — Carrier, Trane, Lennox, Goodman, Daikin.
- **AC Maintenance**: Preventative tune-ups and maintenance plans.
- **Emergency HVAC**: 24/7 emergency AC and heating repair, nights, weekends, holidays.
- **Heating Repair**: Furnace repair, heat pump repair, thermostat repair.
- **Commercial HVAC**: Commercial AC service for offices, retail, warehouses.
- **Ductless Mini-Split**: Installation and repair of ductless systems.

## Service Area
Houston, TX (all zip codes) and Greater Houston suburbs: Katy, Sugar Land, The Woodlands, Cypress, Spring, Tomball, Missouri City, Richmond, Pasadena, Baytown.

## Contact
- Phone: (713) 598-2737
- Address: 4800 W 34th St, Ste C50F, Houston, TX 77092
- Website: https://75degreeac.com
- Emergency: 24/7 available

## Credentials
- TACLA Licensed (Texas Air Conditioning and Refrigeration Contractors License)
- Fully insured
- Founded: 2016
- Brands serviced: Carrier, Trane, Lennox, Goodman, Rheem, American Standard, Daikin
```

Upload to site root via FTP or cPanel File Manager.
Also add link-rel in `<head>`: `<link rel="llms-txt" href="/llms.txt">`

---

## Section 3: AI Citability — Content Optimization

### AI Passage Template (134–167 words)

Every key service page must contain one passage in this format:

```
[Direct answer to the most likely query]
[Supporting detail — specific and factual]
[Credential/trust signal]
[Action statement with phone/contact]
```

**Example for /emergency-ac-repair-houston-tx/ (152 words):**
> 75 Degree AC provides 24/7 emergency AC repair in Houston, TX, including nights, weekends, and holidays. When your air conditioner fails during a Houston summer — where heat index regularly exceeds 105°F — we dispatch a licensed technician the same day, typically within 2–4 hours of your call. Our trucks carry parts for 95% of common AC failures, including capacitors, contactors, refrigerant, and fan motors, so most repairs are completed on the first visit. 75 Degree AC is licensed by the Texas Department of Licensing and Regulation (TACLA) and fully insured. We service all major brands including Carrier, Trane, Lennox, Goodman, Rheem, American Standard, and Daikin. Free diagnostic estimates — you know the price before we start. For emergency AC repair in Houston, call (713) 598-2737.

---

## Section 4: AI Overview (AIO) Targeting

### Queries That Trigger AI Overviews for HVAC Houston

High probability AIO queries to optimize for:
- "how much does ac repair cost in houston"
- "best hvac contractor houston"
- "emergency ac repair houston tx"
- "how often should ac be serviced in houston"
- "signs ac needs repair"
- "carrier vs trane hvac"

**AIO Optimization Checklist:**
- [ ] Answer-first paragraph (not "In this article...")
- [ ] H2 as the question being answered
- [ ] 134–167 word self-contained answer block
- [ ] FAQPage schema on the page
- [ ] Speakable schema on answer sections
- [ ] Clean heading hierarchy (H1>H2>H3)
- [ ] Statistics with sources in answer block
- [ ] No fluff or preamble before answer

---

## Section 5: Platform-Specific AI Optimization

### Google AI Overviews
- Triggered by informational + commercial queries
- Prefers: FAQ schema, structured answer blocks, E-E-A-T signals, featured snippet format
- Test by searching key queries and checking if AIO box appears

### ChatGPT / OpenAI
- Citations come from Bing index (via OAI-SearchBot)
- Ensure Bing is indexing site (Bing Webmaster Tools)
- IndexNow integration helps real-time indexing
- Brand mentions on other sites amplify citation likelihood

### Perplexity
- Heavy citation of directory listings (Yelp, HomeAdvisor, BBB)
- Schema-structured content preferred
- Ensure all Tier 1 citations (Yelp, BBB) are complete and accurate

### Gemini (Google)
- Draws from Google's Knowledge Graph + indexed content
- Complete LocalBusiness schema + Knowledge Panel critical
- GBP completeness feeds Gemini responses

### Microsoft Copilot
- Uses Bing index + IndexNow
- IndexNow key at /.well-known/indexnow-key.txt
- Bing Places listing must be verified

---

## Section 6: Brand SERP Analysis

### Search: "75 Degree AC"

Document:
- Position 1: GBP / website / directory?
- Knowledge Panel: present / partial / missing?
- Sitelinks: showing?
- Reviews appearing in SERP?
- Social profiles ranking?
- Any negative results? (competitor comparison pages, complaints)

### If No Knowledge Panel

Build entity authority:
1. Complete all sameAs connections (GBP, Facebook, Yelp, BBB, LinkedIn, YouTube)
2. Consistent NAP across all platforms
3. Get mentioned in Houston local news/blogs
4. YouTube channel with branded content (0.737 citation correlation)
5. Consider Wikidata entry if business qualifies

---

## Section 7: Voice Search Optimization

### Target Voice Queries

```
"OK Google, find AC repair near me"
"Hey Siri, who does 24/7 AC repair in Houston?"
"Alexa, is 75 Degree AC open right now?"
"Hey Google, how much does AC repair cost in Houston?"
```

### Voice Optimization Checklist

- [ ] FAQ schema on all answer sections
- [ ] Speakable schema on service descriptions
- [ ] Business hours in schema (exact format)
- [ ] Short direct answer paragraphs (<30 words for voice readability)
- [ ] "near me" variants in content naturally
- [ ] GBP up to date (voice assistants pull from GBP for "is X open?" queries)

---

## Output Files

AI visibility audit: `01-research/ai-visibility-[date].md`
llms.txt draft: `02-site-architecture/llms-txt-draft.md`
AI answer blocks: `07-landing-pages/content/ai-answer-blocks.md`
robots.txt fix: `02-site-architecture/robots-txt-fix.md`
