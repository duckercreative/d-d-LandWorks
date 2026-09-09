# Negative Keyword Architecture — Three Layers

A keyword without a negative-keyword shield is an open wallet. Build negatives in three layers.

## Contents
- Layer 1: Account-Level / Shared Negative List
- Layer 2: Campaign-Level Negatives
- Layer 3: Ad-Group-Level Negatives
- The 5 Negatives Most HVAC Managers Miss
- Negative-Keyword Lifecycle (when to REMOVE a negative)

---

## Layer 1 — Account-Level / Shared Negative List (apply to ALL campaigns)

Build this list as a Shared Library negative list and attach it to every Search campaign. Saves you from duplicating across campaigns.

```
# DIY / Informational
how to, diy, tutorial, youtube, guide, manual, diagram, video,
repair yourself, do it yourself, fix it yourself, fix my own

# Jobs / Hiring / Education
jobs, career, hiring, salary, employment, hvac jobs, technician jobs,
work for, internship, apprenticeship, school, training, certification,
classes, course, certificate, license course, license class

# Wrong product
window ac, portable ac, car ac, auto ac, automotive, rv ac, boat ac,
camper ac, marine, vehicle ac, swamp cooler, evaporative cooler

# Parts only
ac parts, hvac parts, refrigerant only, freon only, ac filter,
parts store, supply house, part number, replacement parts only,
buy parts, parts dealer

# Out of geography (Texas cities you don't serve)
dallas, austin, san antonio, fort worth, el paso, lubbock, amarillo,
corpus christi, beaumont, plano, mckinney, frisco, irving

# Out of state (cities named "Richmond", "Houston", etc. that aren't TX)
richmond va, richmond virginia, richmond california,
houston ms, houston mississippi, houston bc

# Warranty / no-pay
warranty, under warranty, manufacturer warranty, free repair,
home warranty, american home shield, choice home warranty

# Coupon / discount hunting (low-value traffic)
coupon, free, cheap, free estimate only, price only, just price,
free quote only, just looking, browsing
```

## Layer 2 — Campaign-Level Negatives

Each campaign gets cross-contamination negatives that match what *other* campaigns own.

**Emergency Campaign — exclude:**
```
tune up, maintenance, inspection, annual service, service plan,
service contract, install, installation, replacement, new ac, new system,
new unit, commercial
```

**Maintenance Campaign — exclude:**
```
emergency, broken, not working, not cooling, blowing warm,
24 hour, same day, today, tonight, weekend, leaking, install, replacement
```

**Installation Campaign — exclude:**
```
repair, fix, broken, not working, not cooling, emergency, same day repair,
service, tune up, maintenance, parts, refrigerant
```

**Commercial Campaign — exclude:**
```
home, residential, house, apartment, condo, my house, my home
```

## Layer 3 — Ad-Group-Level Negatives (within campaigns)
Within a campaign, prevent ad groups from poaching each other's queries.

**Within Campaign 1 (Emergency):**
- AG1 (24-Hour) excludes: "not cooling", "blowing warm" (those go to AG2)
- AG2 (Symptom) excludes: "emergency", "24 hour", "same day" (those go to AG1/4)
- AG3 (Broken) excludes: tune up, maintenance keywords
- AG4 (Same-Day) excludes: "scheduled", "appointment", "next week"

## The 5 Negatives Most HVAC Managers Miss
1. **`school` / `training` / `certification`** — "hvac school near me", "ac repair training" waste budget
2. **`warranty`** — "ac still under warranty" = they won't pay you
3. **`richmond virginia` / `richmond va`** — Google occasionally matches Richmond TX targeting to Richmond VA queries
4. **`free`** — "free ac repair", "free estimate only" attracts price-only traffic that won't book
5. **`amazon`** — "ac unit on amazon", "ac on amazon delivery" — comparison-shopping intent

## Negative-Keyword Lifecycle (when to REMOVE a negative)

Negatives can become outdated. Review the negative list quarterly.

**Remove when:**
- The negative is blocking a query that's now relevant (e.g., you previously excluded "free" but you now run a "free estimate" promotion)
- The negative is a substring of a high-value brand term (e.g., excluding "service" blocks "75 degree ac service")
- A campaign-level negative is in conflict with that campaign's own keywords (Google won't serve the ad)

**Audit method:** Filter Search Terms → "Did not show" reasons → "Blocked by negative". Spot-check whether each block was intended.
