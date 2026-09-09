# Report Design Standard (All Reports — Non-Negotiable)

**Every HTML report generated for this project must use the ads-audit dark mode design system.** This applies to Google Ads reports, GSC reports, GA4 reports, SEO audits, weekly reports, competitor analysis, keyword reports, solutions reports — everything, no exceptions.

**Canonical reference file:** `05-google-ads/reports/ads-audit-2026-04-16-dark.html`

## Full CSS Variable Block (copy exactly into every report)

```css
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');
:root {
  --bg:       #0c0e14;   /* body background */
  --bg2:      #111318;   /* card background */
  --bg3:      #161920;   /* table header / step box */
  --bg4:      #1c1f28;   /* stat chips / QS circles */
  --bg5:      #222633;
  --border:   rgba(255,255,255,.07);
  --border2:  rgba(255,255,255,.12);
  --blue:     #4f8ef7;   --blue-glow:  rgba(79,142,247,.18);
  --orange:   #f97316;   --orange-glow:rgba(249,115,22,.15);
  --red:      #f43f5e;   --red-dim:    rgba(244,63,94,.12);
  --green:    #22c55e;   --green-dim:  rgba(34,197,94,.12);
  --yellow:   #eab308;   --yellow-dim: rgba(234,179,8,.12);
  --purple:   #a855f7;   --purple-dim: rgba(168,85,247,.12);
  --cyan:     #06b6d4;   --cyan-dim:   rgba(6,182,212,.12);
  --t1: #f1f5f9;  /* primary text */
  --t2: #94a3b8;  /* secondary text */
  --t3: #64748b;  /* muted text */
  --t4: #475569;  /* very muted */
  --r: 14px;  --rs: 8px;
}
body { font-family: 'Inter', -apple-system, sans-serif; background: var(--bg); color: var(--t1); font-size: 13px; line-height: 1.6; }
```

## Component Rules (non-negotiable)

### Header

- `background: var(--bg2)`, `border-bottom: 1px solid var(--border)`
- Two radial glow divs: blue glow top-left, orange glow top-right
- h1: `font-weight:900`, gradient text clip `#f1f5f9 → #94a3b8`, accent word in orange gradient
- Badge pills: `badge-seo` (blue), `badge-date` (yellow), `badge-live` (green with animated pulse dot)
- Meta row: orange dot separators, `color: var(--t3)`

### KPI Cards (most important — match ads-audit exactly)

- `background: var(--bg2)`, `border: 1px solid var(--border)`, `border-radius: 14px`
- Color identity via **diagonal tint only**: `linear-gradient(145deg, var(--bg2) 55%, rgba(COLOR,.06) 100%)`
- **NO left border accent bar** — color shows on hover glow only
- Top row: 32px icon chip (color-matched bg + border) left, status badge right
- Status badge classes: `.miss` (red), `.watch` (orange), `.hit` (green), `.info` (blue)
- Value: `font-size:30px`, `font-weight:900`, `letter-spacing:-1.5px`, colored per type
- Label: `9px uppercase`, `letter-spacing:.8px`, `color: var(--t4)`
- Sub: `10px`, `color: var(--t3)`
- Progress bar: 3px track at bottom, gradient fill matching color, target label below
- Hover: `translateY(-2px)` + colored glow shadow

### Section Labels

```html
<div class="sec">
  <div class="sec-label"><span class="ic ic-blue">🔍</span>Section Title</div>
  <div class="sec-line"></div>
</div>
```

- Icon chip: 22px, `border-radius:6px`, color-dimmed bg (`ic-blue`, `ic-orange`, `ic-red`, `ic-green`, `ic-yellow`, `ic-purple`)
- Text: `10px uppercase`, `letter-spacing:1.2px`, `color: var(--t3)`
- Line: `flex:1`, `height:1px`, `background: linear-gradient(90deg, var(--border2) 0%, transparent 100%)`

### Cards

- `background: var(--bg2)`, `border: 1px solid var(--border)`, `border-radius: 14px`
- Hover: `border-color: var(--border2)`, `box-shadow: 0 0 30px rgba(0,0,0,.4)`
- Card header: `.card-hd` — `12px`, `font-weight:700`, `color: var(--t2)`

### Tables

- Wrap in `.tbl-wrap` (`border: 1px solid var(--border)`, `border-radius: var(--rs)`)
- `th`: `9px uppercase`, `letter-spacing:.7px`, `color: var(--t4)`, `background: var(--bg3)`
- `td`: `12px`, `color: var(--t2)`, `border-bottom: 1px solid var(--border)`
- Row hover: `background: var(--bg3)`

### Charts (Chart.js)

```js
Chart.defaults.color = '#64748b';
Chart.defaults.borderColor = 'rgba(255,255,255,.07)';
// Tooltip config for every chart:
tooltip: {
  backgroundColor: '#1c1f28',
  borderColor: 'rgba(255,255,255,.1)',
  borderWidth: 1,
  titleColor: '#f1f5f9',
  bodyColor: '#94a3b8'
}
// Grid lines: color: 'rgba(255,255,255,.06)'
// Ticks: color: '#64748b', font: { family: 'Inter' }
```

### Alerts / Issue Banners

- `.alert.red` → `background: var(--red-dim)`, `border: 1px solid rgba(244,63,94,.2)`
- `.alert.orange` → `background: var(--orange-glow)`, `border: 1px solid rgba(249,115,22,.2)`
- `.alert.green` → `background: var(--green-dim)`, `border: 1px solid rgba(34,197,94,.2)`
- `.alert.yellow` → `background: var(--yellow-dim)`, `border: 1px solid rgba(234,179,8,.2)`

### Step Boxes

- `background: var(--bg3)`, `border: 1px solid var(--border)`
- Counter circles: `background: rgba(79,142,247,.2)`, `border: 1px solid rgba(79,142,247,.3)`, `color: var(--blue)`
- `code` inline: `background: rgba(79,142,247,.1)`, `color: var(--blue)`, `border: 1px solid rgba(79,142,247,.15)`

### Code Blocks

- `background: var(--bg)`, `color: #93c5fd`, `border: 1px solid var(--border)`

### Footer

- `background: var(--bg2)`, `border: 1px solid var(--border)`, `border-radius: 14px`
- No script names, no property IDs, no sensitive data

## Always After Generating

- `open "/path/to/report.html"` — open in browser automatically
- Save to the relevant `reports/` subfolder for the data source
