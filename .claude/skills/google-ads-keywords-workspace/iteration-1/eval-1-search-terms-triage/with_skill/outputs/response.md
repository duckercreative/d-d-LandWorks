# Search Terms Triage — Campaign 1 Emergency, Last 7 Days

**Account context:** 75 Degree AC · Campaign 1 (Emergency) · Spend $1,840 · 22 conversions · blended CPL ≈ $83.6

**Method:** Each term run through the skill's Search-Terms Triage decision tree (SKILL.md §"Search Terms Triage — Decision Tree"). Action choice obeys the layered negative architecture (Account / Campaign / Ad Group) and the 6-bucket intent taxonomy. Match types follow the 2026 reality: Phrase = workhorse, Exact = proven converters and brand defense.

---

## Quick Action Table

| # | Search term | Clicks | Conv | CPL | Verdict | Where it goes |
|---|---|---|---|---|---|---|
| 1 | emergency ac repair houston | 18 | 4 | $32 | **ADD as Exact (already core)** | C1 / AG1 — `[emergency ac repair houston]` |
| 2 | ac repair near me | 31 | 3 | $58 | **ADD as Exact in Campaign 2 + AG-level neg in C1 AG1** | C2 / AG1 — `[ac repair near me]`; C1 AG1 add `-near me` only if cannibalizing |
| 3 | how to fix my ac youtube | 6 | 0 | — | **NEGATIVE — Account level (shared list)** | Add `youtube`, `how to fix`, `how to` |
| 4 | 24 hour ac repair katy tx | 12 | 3 | $24 | **ADD as Exact (top performer)** | C1 / AG1 — `[24 hour ac repair katy tx]` |
| 5 | hvac jobs houston | 4 | 0 | — | **NEGATIVE — Account level** | Confirm `jobs` is on shared list (it is) |
| 6 | ac not cooling | 22 | 2 | $71 | **ADD as Phrase, AND fix ad group** | C1 / AG2 — `"ac not cooling"`; ad/LP fix, not negative |
| 7 | window ac repair | 8 | 0 | — | **NEGATIVE — Account level** | Confirm `window ac` is on shared list (it is) |
| 8 | ac repair richmond va | 3 | 0 | — | **NEGATIVE — Account level** | Add `richmond va`, `virginia`, `va` |
| 9 | emergency hvac dallas | 5 | 0 | — | **NEGATIVE — Account level** | Confirm `dallas` is on shared list (it is) |
| 10 | ac repair school | 2 | 0 | — | **NEGATIVE — Account level** | Confirm `school` is on shared list (it is) |
| 11 | ac tune up coupon | 7 | 0 | — | **NEGATIVE — Campaign-level (Campaign 1)** + Account `coupon` | C1 add `tune up`, `maintenance`; Account add `coupon` |
| 12 | commercial ac repair downtown houston | 4 | 1 | $68 | **ADD as Exact in Campaign 5 + Campaign-level neg in C1** | C5 — `[commercial ac repair downtown houston]`; C1 add `-commercial` |
| 13 | 75 degree ac houston | 2 | 1 | $14 | **ADD as Exact in Brand Campaign + Account-level neg `[75 degree ac]` in C1** | Brand — `[75 degree ac houston]`; C1 add brand as exact-match negative |

---

## Per-Term Rationale

### 1. `emergency ac repair houston` — 18 clicks, 4 conv, $32 CPL → **ADD as Exact**
- **Tree path:** Converted? Yes → Already a keyword? It's the #1 starter-pack exact in C1/AG1. Most likely it already exists, in which case: **leave alone**. If audit shows it's missing somehow, **add as `[emergency ac repair houston]`**.
- **Rationale:** This is exactly the bucket-1 (Emergency Intent) flagship query. CPL of $32 is well under the $45–80 emergency benchmark in the skill. This is what "right" looks like — protect the bid.
- **Action:** Verify presence in C1/AG1 as `[emergency ac repair houston]`. If missing, add today.

### 2. `ac repair near me` — 31 clicks, 3 conv, $58 CPL → **ADD as Exact in Campaign 2**
- **Tree path:** Converted? Yes (3) → Already a keyword? Probably matched into C1 via close-variant on `[emergency ac repair houston]`. But intent is **General Repair** (bucket 3), not Emergency.
- **Rationale:** Per the keyword-to-ad-group mapping table, "ac repair + [city] (no urgency)" → Campaign 2. The query has no urgency word — it's been hitting C1 only because of close-variant expansion. CPL is acceptable for general repair (skill cites $40–70), but that bid in C1 is overpaying because Emergency keywords carry a higher max-CPC than this query justifies.
- **Action:**
  - Add `[ac repair near me]` to **Campaign 2 / AG1 (Houston Metro)** as Exact.
  - Add `"ac repair near me"` Phrase to C2/AG1 as well.
  - Add `near me` as an **ad-group-level negative inside C1 / AG1** ONLY if the cannibalization continues after the C2 keyword is live (don't pre-empt; the skill says match-type controls intent, and `[emergency ac repair houston]` exact won't keep matching `ac repair near me` once a more specific exact exists in another campaign).

### 3. `how to fix my ac youtube` — 6 clicks, 0 conv → **NEGATIVE (Account-level shared list)**
- **Tree path:** Converted? No → Spend > $30 with >5 clicks? Borderline (6 clicks, but DIY queries average ~$5 CPC → ≈$30). Junk traffic? **Yes** — DIY/Informational bucket per skill §"Account-Level / Shared Negative List".
- **Rationale:** Skill's worked example (line 432) calls out this exact pattern. DIY intent will never convert.
- **Action:** Add to **Account-level shared negative list**:
  - `youtube` (phrase match negative)
  - `how to fix` (phrase match negative)
  - `how to` (phrase match negative — should already be on the starter list)

### 4. `24 hour ac repair katy tx` — 12 clicks, 3 conv, $24 CPL → **ADD as Exact**
- **Tree path:** Converted? Yes → Already a keyword? Likely not at this exact specificity (starter pack has `[24 hour ac repair houston]`, not Katy variant).
- **Rationale:** $24 CPL is the **best in the report** — well below emergency benchmark. Suburb modifier (Katy) is on the skill's approved list (§"Suburb modifiers"). This is a textbook "ADD as Exact" — give it its own bid so close-variant matching doesn't undercut it.
- **Action:** Add `[24 hour ac repair katy tx]` to **C1 / AG1 (24-Hour)** as Exact. Optionally also add `[emergency ac repair katy tx]` as Exact, since the skill's "Texas-Specific High-Value Keywords" lists it.

### 5. `hvac jobs houston` — 4 clicks, 0 conv → **NEGATIVE (Account-level)**
- **Tree path:** Converted? No → Junk? Yes (Jobs/Hiring bucket).
- **Rationale:** `jobs` and `hvac jobs` are already on the skill's account-level starter negative list.
- **Action:** **Verify** `jobs` and `hvac jobs` are present on the shared negative list. If they are, no action is needed and the skill says: "Leave it. Insufficient data" — but since junk is unambiguous, confirming the shield is up is the right move. If somehow missing, add `jobs`, `hiring`, `career`, `hvac jobs`, `salary`, `employment`.

### 6. `ac not cooling` — 22 clicks, 2 conv, $71 CPL → **ADD as Phrase + fix ad/LP** (do NOT negative)
- **Tree path:** Converted? Yes → already a keyword? Starter pack has `"ac not cooling"` Phrase and `[ac not cooling houston]` Exact in C1/AG2 (Symptom). It IS likely already there but the search term shows the un-geo-modified version is matching, suggesting Phrase is doing its job.
- **Decision-tree caveat:** $71 CPL is over the symptom benchmark, but **it converted**. The tree's rule is: "Did it convert? Yes → leave alone (already counted) or ADD." Don't negative a converter.
- **Rationale:** The CPL is high because (a) no geo modifier means broader match → some non-Houston clicks, and (b) symptom intent typically converts at 8–14% — 2/22 = 9% is in range. The fix is creative + LP, not pause.
- **Action:**
  - Confirm `"ac not cooling"` Phrase exists in **C1 / AG2 (Symptom)**. Confirm `[ac not cooling houston]` Exact also.
  - If CPL stays elevated, the skill says (Decision tree branch 2): "ad/LP problem, don't negative yet — fix the creative." Defer to `google-ads-copy` and `cro-strategy`.

### 7. `window ac repair` — 8 clicks, 0 conv → **NEGATIVE (Account-level)**
- **Tree path:** Converted? No → Junk? Yes — "Wrong product" bucket per skill account-level negatives.
- **Rationale:** 75 Degree AC services central AC, mini-split, heat pump — not window units. Skill's wrong-product list explicitly includes `window ac`.
- **Action:** Verify `window ac` and `portable ac` are on the shared list. They should be — if not, add them.

### 8. `ac repair richmond va` — 3 clicks, 0 conv → **NEGATIVE (Account-level)**
- **Tree path:** Converted? No → Junk? Yes — out-of-state.
- **Rationale:** Skill calls this out specifically (worked example line 441 + §"Houston Geographic Quirks"): "Always negative `virginia`, `va` at account level when running Richmond TX keywords."
- **Action:** Add to shared negative list:
  - `virginia` (phrase neg)
  - `va` (exact neg — phrase would block legit terms like "valid")
  - `richmond va` (phrase neg)
  - `richmond virginia` (phrase neg)

### 9. `emergency hvac dallas` — 5 clicks, 0 conv → **NEGATIVE (Account-level)**
- **Tree path:** Converted? No → Junk? Yes — out-of-geography (Texas city we don't serve).
- **Rationale:** `dallas` is on the skill's starter account-level negatives ("Out of geography" bucket).
- **Action:** Verify `dallas` is on the shared list. If missing, add it along with the rest of the OOG bucket: `austin`, `san antonio`, `fort worth`, `el paso`, etc.

### 10. `ac repair school` — 2 clicks, 0 conv → **NEGATIVE (Account-level)**
- **Tree path:** Converted? No → Junk? Yes — Education bucket.
- **Rationale:** Skill explicitly flags this as one of "The 5 Negatives Most HVAC Managers Miss" (#1: school/training/certification).
- **Action:** Verify `school`, `training`, `certification`, `classes`, `course` are on the shared list.

### 11. `ac tune up coupon` — 7 clicks, 0 conv → **NEGATIVE — both layers**
- **Tree path:** Converted? No → Junk? Yes — but **two** problems:
  1. **Wrong intent for Campaign 1** — `tune up` is Maintenance (bucket 5), should be in Campaign 4. The skill's Campaign 1 (Emergency) campaign-level negatives list `tune up`, `maintenance` explicitly.
  2. **Coupon-hunting** — low-intent traffic. Skill's account-level list includes `coupon`, `free`, `cheap`.
- **Action:**
  - **Campaign-level negative on Campaign 1**: add `tune up`, `maintenance`, `inspection` (if not already there per starter pack).
  - **Account-level**: add `coupon` to the shared list.
  - Do NOT add `tune up` as account-level — Campaign 4 needs it.

### 12. `commercial ac repair downtown houston` — 4 clicks, 1 conv, $68 CPL → **ADD as Exact in Campaign 5 + Campaign-level neg in C1**
- **Tree path:** Converted? Yes → Already a keyword? Specific (downtown geo modifier) — probably not. This matches the skill's worked example (line 444) almost word-for-word.
- **Rationale:** Two simultaneous problems being fixed:
  1. Commercial intent (bucket 6) running in residential Campaign 1 = wrong campaign per skill ("Critical rule: Commercial keywords get their own campaign — never an ad group inside a residential campaign"). B2B intent needs B2B copy and B2B LP.
  2. The query proved it converts → don't kill it, **redirect** it.
- **Action:**
  - Add `[commercial ac repair downtown houston]` to **Campaign 5 / appropriate AG** as Exact.
  - Add `"commercial ac repair"` Phrase to C5 if not present.
  - Add `commercial`, `office`, `commercial ac`, `commercial hvac` as **campaign-level negatives on Campaign 1** (skill's starter pack lists `commercial` in C1's exclusion list).

### 13. `75 degree ac houston` — 2 clicks, 1 conv, $14 CPL → **ADD to Brand Campaign + brand neg on C1**
- **Tree path:** Converted? Yes → Already a keyword? Should be in the Brand campaign (skill's starter pack has `[75 degree ac houston]` Exact).
- **Rationale:** $14 CPL is what brand traffic should look like — but it's currently being served by Campaign 1, which means C1 is **paying generic-keyword CPCs to convert brand traffic that the dedicated Brand campaign would convert at $0.10–0.30**. This is a bid-economics fix, not a negative-the-term fix.
- **Action:**
  - Verify `[75 degree ac houston]` exists in the **Brand campaign** as Exact. Add if missing alongside `[75 degree ac]`, `[75degreeac]`.
  - Add **`[75 degree ac]`, `[75degreeac]`, `[75 degree ac houston]` as exact-match negative keywords on Campaign 1** (and on every non-brand campaign) to force this query into the Brand campaign where bids and QS are right.
  - Per skill: "Brand keyword QS is typically 10/10 because the LP-headline-keyword match is perfect, so the cost is trivial." Don't keep paying C1 prices for brand clicks.

---

## Summary by Action Type

### ADD as keywords (4 terms)
| Keyword | Match | Campaign / AG |
|---|---|---|
| `[emergency ac repair houston]` | Exact | C1 / AG1 — verify exists |
| `[ac repair near me]` + `"ac repair near me"` | Exact + Phrase | C2 / AG1 (Houston Metro) |
| `[24 hour ac repair katy tx]` | Exact | C1 / AG1 |
| `[commercial ac repair downtown houston]` | Exact | C5 |
| `[75 degree ac houston]` | Exact | Brand campaign — verify exists |

### ADD as negatives — Account-level (Shared List) (5 terms drive these)
- `youtube`, `how to fix` (and confirm `how to`)
- `virginia`, `va`, `richmond va`, `richmond virginia`
- `coupon` (already in starter pack — verify)
- Verify these starter-pack negatives are live: `jobs`, `hvac jobs`, `window ac`, `dallas`, `school`, `training`, `certification`

### ADD as negatives — Campaign-level (Campaign 1 only)
- `tune up`, `maintenance`, `inspection` (verify against starter pack)
- `commercial`, `office`, `commercial ac`, `commercial hvac`
- Brand block: `[75 degree ac]`, `[75degreeac]`, `[75 degree ac houston]` as exact negatives

### ADD as negatives — Ad-Group-level
- Hold off on `near me` in C1/AG1 until you confirm cannibalization persists after C2 keyword is live. Per skill: "Phrase isn't 'less aggressive than exact' — it's a different control." Let the new C2 keyword absorb the query first.

### LEAVE ALONE
- `ac not cooling` — converter, already in starter pack, fix is creative/LP not keywords. Re-evaluate next week if CPL stays >$70.

---

## Notes on Account Health (from this batch)

1. **Cannibalization is happening**: `ac repair near me`, `commercial...`, `75 degree ac houston`, and `ac tune up coupon` are all hitting Campaign 1 when they belong elsewhere. This is the top symptom in the report and points to incomplete campaign-level negatives. After applying the fixes above, expect C1 CPL to drop because the spend mix purifies to actual emergency intent.
2. **Close-variant expansion is doing its job AND its damage**: same root cause behind #1. Phrase is the workhorse but Campaign-level negatives are the brake — without them, C1 absorbs every "ac repair" query Google can plausibly map to it.
3. **Brand traffic is leaking into generic spend**: $14 CPL for `75 degree ac houston` is great, but it should be coming through the Brand campaign at a fraction of that cost. Verify the Brand campaign exists and is funded ($20–30/day cap per skill).
4. **One real winner to study**: `24 hour ac repair katy tx` at $24 CPL. Add the Katy exact, then check whether you have RSAs in C1/AG1 with "Katy" in a headline. If not, that's a `google-ads-copy` follow-up to tighten ad relevance and squeeze QS up further.

---

## Defer-to-Other-Skills Flags

- **`ac not cooling` $71 CPL** → If CPL doesn't drop after geo-tightening, hand off to `google-ads-copy` (RSA review) and `cro-strategy` (LP audit on the symptom landing page).
- **Brand campaign verification + Quality Score on brand keywords** → If brand QS is not 10/10, see `google-ads-copy` for LP/headline mismatch diagnosis.
- **Campaign 5 (Commercial) RSA build** if `commercial ac repair downtown houston` is the first commercial converter → `google-ads-copy` for B2B headline formulas, then `cro-strategy` for a commercial-specific landing page.
