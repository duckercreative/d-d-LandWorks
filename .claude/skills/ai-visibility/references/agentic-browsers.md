# Agentic Browser Optimization

## Contents
- Why This Matters
- The 6-Point Checklist
- 3 Testing Methods
- WordPress + Elementor Failure Modes

---

## Why This Matters (And Why It's New)

Agentic browsers are a categorically new traffic class. ChatGPT Atlas (launched October 21, 2025) and Perplexity Comet (launched July 2025) are real Chrome-based browsers controlled by an AI agent. A user types "find a licensed 24/7 AC repair company in Houston and book me an appointment" — the agent navigates 75degreeac.com on their behalf, reads the page, and tries to fill the contact form.

**Market data (HUMAN Security, April 2026):**
- Agentic browser traffic grew **6,900% YoY in 2025**
- Comet: 48.12% share of agentic traffic
- Atlas: 21% share
- Claude Chrome Extension: 17.33%
- Mariner (Google): emerging

**Critical fact:** These browsers do NOT render the visual page first. They use the **accessibility tree** (ARIA roles, landmark elements, labeled form inputs) as their primary interface. If the site is not screen-reader-compatible, it is not Atlas-compatible. Robots.txt cannot block them — they use standard Chrome user agents.

## The 6-Point Agentic Browser Checklist

Every page (especially homepage, service pages, contact page) must pass:

1. **Native HTML elements over custom divs.** Replace `<div onclick="...">` with `<button>`. Replace custom dropdowns with `<select>`. Replace fake links with `<a href>`.
2. **Landmark elements present.** Page must have `<header>`, `<nav>`, `<main>`, `<aside>`, `<footer>`. Atlas uses these to orient.
3. **All form inputs labeled.** Every `<input>` requires `<label for="...">` or `aria-label`. Unlabeled inputs are agent-invisible.
4. **Autocomplete attributes on contact forms.** `<input type="tel" autocomplete="tel">`, `<input autocomplete="name">`, `<input autocomplete="street-address">`. Atlas uses these to fill the form correctly.
5. **Phone number visible in HTML text, not only in JS click-to-call.** `<a href="tel:7135982737">(713) 598-2737</a>` — visible text, not background-image or icon-only button.
6. **Logical heading hierarchy.** H1 → H2 → H3, no skipped levels. Agents use heading structure to summarize the page back to the user.

## How to Test (3 Methods)

### Method 1 — Playwright MCP accessibility snapshot (preferred)
```
mcp__plugin_playwright_playwright__browser_navigate → https://75degreeac.com
mcp__plugin_playwright_playwright__browser_snapshot
```
The snapshot output IS the accessibility tree. If you can read the page from this output, an agent can.

### Method 2 — macOS VoiceOver (Cmd+F5)
Tab through the page. If you can complete the contact form using only the keyboard + audio prompts, the form passes.

### Method 3 — axe DevTools / Lighthouse Accessibility
Score must be 95+. Anything under 90 is high agentic-browser risk.

## Specific WordPress + Elementor Failure Modes to Audit

Elementor introduces several patterns that break agent compatibility — flag each on every audit:

- **Elementor popups** with custom div triggers → replace trigger with `<button aria-label="...">` or kill the popup for critical content
- **Click-to-call icons** without text labels → add `aria-label="Call 75 Degree AC at 713-598-2737"`
- **Form widgets that don't expose `<label>` per input** → switch to a form plugin that emits semantic HTML (Gravity Forms, WPForms in accessible mode)
- **Hero images with phone number burned into the image** → must also have phone in HTML text below
- **AJAX-loaded service descriptions** → move to initial HTML
