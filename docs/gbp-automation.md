# GBP Automation — API First, Playwright Second

Two independent paths into the live profile. **Try the API first** — it's faster, headless, and doesn't depend on a Chrome session.

## Path 1 — Business Profile API (LIVE since 2026-07-27)

Google approved basic API access. Verified working end-to-end on 2026-07-27.

**GCP project:** `grand-practice-491209-j5` (client `494556052123-…`) · **OAuth scope:** `business.manage`
**GBP account:** `accounts/110501416051559620214` (Muhammad Shahid, PERSONAL)
**Token:** `04-gmb/auth/token_gmb.json` (refresh token, self-renewing — mode 600)
**Shared client:** `04-gmb/scripts/gmb_core.py` → `get_creds()`, `get_profile(profile)`, `api()`, `fetch_metrics()`

| API | Endpoint const | Status |
|---|---|---|
| Account Management v1 | `ACCOUNT_MGMT` | ✅ working |
| Business Information v1 (locations, hours, categories, description) | `BIZ_INFO` | ✅ working |
| Google My Business v4 (reviews + replies) | `REVIEWS_V4` | ✅ working |
| Google My Business v4 (local posts) | `POSTS_V4` | ✅ working |
| Business Profile Performance v1 (calls / clicks / impressions) | `PERF_API` | ✅ working |
| My Business Q&A v1 | — | ⛔ **DEAD — do not chase.** Google discontinued the Q&A API 2025-11-03 and phased the public Q&A section out of profiles from 2025-12-03. The 403 you get is Google's generic "not enabled" message, not a fixable config. No replacement API exists. See "Q&A is gone" below. |

```python
import sys; sys.path.insert(0, "04-gmb/scripts")
import gmb_core as C
creds = C.get_creds()
acct, loc, lid = C.get_profile("richmond")      # or "houston"
print(C.fetch_metrics(creds, lid, days=30))
```

Reference implementation with a full CLI (reads + dry-run writes) lives outside this project at
`/Users/mac/Digital Marketing/Personal Branding/MSAIOS/tools/gbp.py` — same account, same scope.
Re-mint the token with `MSAIOS/tools/gbp-auth.py` if it ever returns `invalid_grant`.

**Both location IDs:** Houston `13024988940176460319` · Richmond `8861175947047769334`. Cached with
addresses + phones + CIDs in `04-gmb/data/gmb_location.json`.

## Q&A is gone — replaced by Gemini "Ask about this place"

**Confirmed removed from the 75 Degree AC profile (2026-07-28).** Timeline:

| Date | What happened |
|---|---|
| 2025-09-15 | Google announced the Q&A API discontinuation |
| **2025-11-03** | Q&A API shut off — no read, no write, no replacement API |
| **2025-12-03** | Public Q&A section began being phased out of Business Profiles |
| 2026 | Replaced by **"Ask about this place"** — Gemini generates answers on the fly |

**Never again:** write Q&A seeds, count Q&A entries in an audit, report "Q&A added" as a
deliverable, or recommend seeding questions. There is no Q&A surface to seed.

**Where that effort goes instead.** "Ask about this place" synthesizes its answers from the
profile fields, reviews, posts, and the website — so the questions customers used to ask in Q&A
now get answered from those four inputs. To influence it:

1. **On-site FAQ + `FAQPage` schema** — the strongest lever, and already mandatory on every money page. Questions come from the `faq-source-mix` rule (PAA + Reddit + Quora).
2. **GBP post bodies** — answer one high-intent question per post, in plain language, per the GBP post policy (no phone/URL in body).
3. **Structured profile fields** — services + descriptions + attributes + hours are what Gemini reads first for factual answers.
4. **Review replies** — a natural place to state facts (response time, pricing floor, service area) that then feed the model.

## Path 2 — Playwright direct editing

Use when the API has no endpoint for the field (products, some service attributes, UI-only settings).
Full setup, DOM patterns, and auth quirks are in the memory file `project_gbp_editor_automation.md`.

**Owner account:** `seoexecutive4500@gmail.com` · **Location ID:** `13024988940176460319`

## Direct Editor URLs (require live session)

- **Info:** `https://business.google.com/local/business/13024988940176460319/editprofile/info?hl=en`
- **Services:** `https://business.google.com/local/business/13024988940176460319/editprofile/services?hl=en`
- **Products:** `https://business.google.com/local/business/13024988940176460319/editprofile/products?hl=en`

## Workflow When User Asks to Fix or Audit GBP

1. `python3 04-gmb/scripts/gbp_browser.py --check` — verify session live
2. If expired: `python3 04-gmb/scripts/gbp_autologin.py` (user signs in once, auto-saves)
3. Navigate directly to `/editprofile/*`, screenshot, read DOM, flag issues against project policy
4. Build fix plan, then push via `gmb_push_description.py` / `gmb_push_services.py` (and a products script when built)
5. Always headed mode with `slow_mo=150+` for bulk ops, snapshot every step

## Second Physical Location (Confirmed Real, 2026-04-26)

75 Degree AC at **20926 Bright Lake Bend Ct, Richmond, TX 77407** — separate phone **(346) 681-2625**. Same GBP owner account. Maps to dedicated page at `/hvac-contractor-richmond-tx/`. **Always use the (346) phone for Richmond NAP, schema, and CTAs — never the main (713) phone on Richmond pages.**
