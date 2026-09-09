# Bidding Strategy — 3-Phase Progression

The phase you're in depends on **conversion volume per campaign**, not how many weeks the account has been live.

## Which Phase Am I In? (Diagnostic)

```
Per-campaign conversions in last 30 days:
   < 15 → Phase 1 (no signal yet)
   15-29 → Phase 1 → 2 transition
   30-59 → Phase 2 (introduce tCPA)
   60+   → Phase 3 (optimize tCPA, consider tROAS)
```

## Phase 1 — No Conversion Data (typically Weeks 1–4)
**Strategy: Maximize Conversions (NO tCPA target).**

- ❌ Do NOT use Maximize Clicks. In 2026 it's actively harmful — bot/scraper click farms have gotten good enough at HVAC keywords that Max Clicks burns 15-30% of budget on non-human traffic.
- ❌ Do NOT set a tCPA. You don't know your CPA yet — guessing low forces eternal learning mode, guessing high wastes budget.
- ❌ Do NOT set max CPC bid caps. They cap reach during the exact peaks (heat waves, evenings) when conversion rates are highest.
- ✅ Daily budget floor: 10× expected CPL. If you expect $50 CPL, you need $500/day. $100/day works but the algorithm learns 5× slower.

## Phase 2 — 30+ Conversions per Campaign (typically Month 2)
**Strategy: Maximize Conversions + Target CPA.**

- Set tCPA at Phase 1 average + $10 buffer. Example: Phase 1 averaged $58, set tCPA to $68.
- Reduce tCPA by $5 every 2 weeks until volume drops noticeably — that's your floor.
- If volume drops by >25% on a tCPA cut, it was too aggressive. Revert and try a $3 cut instead.

## Phase 3 — 60+ Conversions/Month per Campaign (Month 3+)
**Strategy: Target CPA (steady) or Target ROAS (if revenue attribution is wired up).**

- Adjust tCPA per campaign based on job value (table below).
- Target ROAS only works if Enhanced Conversions for Leads is sending closed-job revenue back. Don't set tROAS without that — you'll optimize for cheap leads regardless of close rate.

## tCPA Targets by Campaign (Houston market, May 2026)

| Campaign | Phase 2 starting tCPA | Phase 3 target |
|---|---|---|
| Emergency Repair | $70 | $50–60 |
| General Repair | $60 | $45–55 |
| Installation | $90 | $70–80 |
| Maintenance | $45 | $30–40 |
| Commercial | $120 | $90–100 |
| PMax (blended) | $65 | $45–55 |
