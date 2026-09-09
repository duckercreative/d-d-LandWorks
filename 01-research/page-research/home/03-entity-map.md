# Entity Map — D&D Land Works Homepage

Adapted from the Koray 14-source entity method, substituted for excavation/Oregon context (no refrigerant/SEER/manufacturer-model entities — those are HVAC-specific and do not apply). Every entity below carries a validation status: `VALIDATED` (confirmed via Wikipedia/Wikidata/official government source), `VALIDATED_LOCAL` (confirmed real but no Knowledge Graph entry — e.g. a small city or a specific competitor business), or `NOT_FOUND` (searched, no canonical record located — do not imply one exists). Full machine-readable version in `entity-inventory.csv` in this folder.

---

## 1. Business Entity

- **D&D Land Works** — the business itself. `NOT_FOUND` in any external knowledge base (zero digital footprint per business-info.md). No Wikidata, no GBP, no directory listings found. This is expected for a pre-launch business and is the single biggest entity gap to close post-launch (GBP, Wikidata is not realistic at this stage, but Foursquare/Apple Maps/Bing Places/BBB are near-term realistic).
- **David Deggelman** — owner/operator. `NOT_FOUND` externally. Should appear on `/about/` with a real bio once details are confirmed (do not fabricate years of experience or founding date — both are open items in business-info.md).
- **Oregon CCB #261742** — the business's specific license number. `VALIDATED` as a real identifier format issued by the Oregon Construction Contractors Board (the numbering scheme and lookup tool are confirmed real at search.ccb.state.or.us); the license record itself could not be pulled directly through this research (ccblookup.com returned a 404 for this specific number during this research pass — verify directly at the official CCB portal before publishing the number in schema `identifier` fields).

## 2. Service Entities (D&D's verified scope only)

| Entity | Validation | Notes |
|---|---|---|
| Site Preparation | VALIDATED_LOCAL | Generic construction-industry service category; well-documented concept (multiple industry sources define scope consistently: clearing → grading → drainage → access) |
| Land Clearing | VALIDATED_LOCAL | Same — standard industry term |
| Brush Clearing | VALIDATED_LOCAL | Sub-service of land clearing per topical map |
| Grading & Leveling | VALIDATED_LOCAL | Standard term; "rough grading" vs "finish grading" is a recognized industry distinction |
| Foundation Excavation | VALIDATED_LOCAL | Standard term |
| Drainage Excavation | VALIDATED_LOCAL | Standard term — scope note: excavation/grading FOR drainage, not manufactured drainage-product installation, per topical map fencing |
| Utility Excavation / Trenching & Backfill | VALIDATED_LOCAL | Standard term — scope note: excavation FOR utility installation, not the utility installation itself |
| Septic Install & Repair | VALIDATED_LOCAL | Regulated activity under Oregon DEQ (see Certification Entities below) |
| Driveway Repair (gravel/grading only) | VALIDATED_LOCAL | Scope note: no asphalt paving or concrete — earthwork only |
| Slope Stabilization | VALIDATED_LOCAL | Standard term — scope note: earthwork/grading framing, no structural/retaining-wall engineering claims |

**Explicitly excluded (fenced out per topical map — do NOT integrate as offered services):** tree removal, stump grinding/removal, forestry mulching, debris/dirt hauling as a standalone service, asphalt paving, concrete work, retaining-wall engineering, septic pumping, septic inspection/certification beyond DEQ install authority.

## 3. Equipment Entities

Unlike the HVAC methodology's manufacturer/model layer (Carrier, Trane, etc.), excavation equipment entities are the closest analog. No verified information exists about which specific equipment brands D&D owns or operates — **do not fabricate a fleet list.** The entities below are validated as real, common industry equipment categories that a future asset/photo inventory should confirm against D&D's actual fleet before naming any brand on-site.

| Entity | Type | Validation |
|---|---|---|
| Excavator (mini / standard / long-reach) | Equipment category | VALIDATED — standard industry term |
| Skid steer | Equipment category | VALIDATED |
| Dozer / bulldozer | Equipment category | VALIDATED |
| Dump truck | Equipment category | VALIDATED |
| Compactor / plate compactor | Equipment category | VALIDATED |
| Caterpillar (Cat) | Brand — NOT CONFIRMED for D&D's fleet | NOT_FOUND (as it relates to D&D specifically) — real, Wikidata-validated brand (Q173395) but must not be named as "our equipment" without confirmation from David |
| John Deere | Brand — NOT CONFIRMED for D&D's fleet | Same caveat — real brand (Wikidata Q671631), unconfirmed for D&D |
| Kubota | Brand — NOT CONFIRMED for D&D's fleet | Same caveat — real brand (Wikidata Q1424071), unconfirmed for D&D |
| Komatsu | Brand — NOT CONFIRMED for D&D's fleet | Same caveat — real brand (Wikidata Q1063765), unconfirmed for D&D |

**Recommendation:** ask David which equipment/brands D&D actually runs. This is a straightforward, high-value E-E-A-T fix (Gap #1 in `08-gap-analysis.md`) — competitors currently name zero specific equipment on their homepages, so even a short, accurate list ("we run a [X]-class excavator and skid steer") would be a genuine differentiator. Until confirmed, the homepage should reference equipment categories generically, not brand names.

## 4. Certification / Authority Entities

| Entity | Validation | Detail |
|---|---|---|
| Oregon Construction Contractors Board (CCB) | VALIDATED | State agency; official site oregon.gov/ccb; license lookup at search.ccb.state.or.us; no dedicated Wikipedia article found, but it is a documented state agency listed in the Oregon Blue Book (sos.oregon.gov) |
| Oregon Department of Environmental Quality (DEQ) | VALIDATED | State agency; regulates onsite wastewater (septic) under OAR Chapter 340, Division 071; has a Wikipedia article (search confirms "Oregon Department of Environmental Quality" as an established state agency entity) |
| DEQ Onsite Wastewater Management Program | VALIDATED | Specific program within DEQ; oregon.gov/deq/residential/pages/onsite.aspx |
| DEQ Installer Certification | VALIDATED | Specific credential type required to legally construct/install/repair septic systems in Oregon — this is almost certainly the specific certification D&D holds (confirm exact certification name/number with David; "DEQ Certified" alone is directionally correct but the precise credential title should be verified) |
| OSHA 29 CFR 1926 Subpart P (Excavations) | VALIDATED | Federal safety standard governing trenching/excavation; official text at osha.gov/laws-regs/regulations/standardnumber/1926/1926SubpartP |
| Oregon OSHA | VALIDATED | State-plan OSHA equivalent administering federal trenching standards in Oregon |
| Lane County Land Management Division (LMD) / Public Works | VALIDATED | Confirmed as the permitting authority for grading, driveway access, and right-of-way excavation work in Lane County |

## 5. Location Entities

| Entity | Wikidata/Wikipedia | Notes |
|---|---|---|
| Lane County, Oregon | VALIDATED — Wikidata Q495409, Wikipedia "Lane County, Oregon" | Population 382,971 (2020 census), 4th-most-populous county in Oregon, established 1851, county seat Eugene |
| Eugene, Oregon | VALIDATED | Oregon's 2nd most populous city; county seat of Lane County |
| Springfield, Oregon | VALIDATED | Adjacent to Eugene; standard Wikipedia entry exists |
| Cottage Grove, Oregon | VALIDATED | Wikipedia entry exists |
| Junction City, Oregon | VALIDATED | Wikipedia entry exists |
| Creswell, Oregon | VALIDATED | Wikipedia entry exists |
| Veneta, Oregon | VALIDATED | Wikipedia entry exists |
| Florence, Oregon | VALIDATED | Wikipedia entry exists — coastal, ~1hr from Eugene |
| Oakridge, Oregon | VALIDATED | Wikipedia entry exists — mountain community |
| Coburg, Oregon | VALIDATED | Wikipedia entry exists |
| Lowell, Oregon | VALIDATED | Wikipedia entry exists |
| Willamette Valley | VALIDATED | Well-documented geographic/agricultural region; relevant here for its clay-heavy soil profile, which is a genuine construction-relevant entity (see Gap Analysis) |

## 6. Co-occurrence Findings (from the 8 competitor homepages fetched in Phase 5)

Entities appearing across the 8 fetched competitor sites (Danco, All Dirt, Heavy D, Emerald, McKenzie, Braun, Strasheim, plus directory listings for Pacific Excavation/Tectonic/A&D):

| Entity | Frequency (of 8) | Status |
|---|---|---|
| "Licensed, bonded, insured" (or equivalent) | 8/8 | Mandatory — table stakes |
| CCB license number displayed | 7/8 | Mandatory |
| "Free estimate(s)" | 8/8 | Mandatory |
| Phone number in header/hero | 8/8 | Mandatory |
| Years-in-business claim | 6/8 | Recommended — must be a REAL number for D&D, confirm with David (open item) |
| Septic systems as a listed service | 5/8 | Recommended for D&D given DEQ cert |
| "Family-owned/operated" | 4/8 | Recommended only if true — verify with David before claiming |
| Named testimonials/reviews on homepage | 4/8 | Recommended, but D&D has zero reviews yet — this is a genuine current gap, not a copy problem |
| BBB rating displayed | 1/8 (McKenzie, A+ rating) | Differentiator opportunity — D&D should register with BBB post-launch |
| Tree/stump/forestry mulching/hauling services | 3/8 (Danco, All Dirt, Braun) | NOT applicable to D&D — fenced out |
| FAQ section | 0/8 | **Zero competitors have one — the single clearest structural content gap** |
| Dedicated city landing pages | 0/8 | **Confirmed — matches topical map's finding exactly** |
| Schema markup (visible in fetched content) | 0/8 detected | No competitor showed evidence of structured data in the fetched page content |

Any entity at 7-8/8 is mandatory for D&D's homepage. FAQ content and dedicated city pages are 0/8 — the biggest structural opportunities, consistent with the existing topical map's conclusion.

## 7. Person / Named-Crew Entities

No named crew members, technicians, or estimators were found for any competitor except general owner names (e.g., Ken at McKenzie, Jerid Strasheim at S4/Strasheim). D&D currently has one named entity: **David Deggelman**. Naming him specifically on the homepage/About page (with a real, unembellished bio) is a low-difficulty, high-trust E-E-A-T move that most competitors also skip.

## 8. Concept / Problem Entities (for FAQ + body integration)

- Standing water / yard flooding (ties to Eugene's Nov-Jan rainfall peak, 40.83"/year average — NOAA 1991-2020 normals)
- Willamette Valley clay soil (poor drainage, hardens dry / sticky wet, complicates wet-season digging)
- Rainy season scheduling (Oct/Nov-April difficult window; May-October preferred dry window)
- Septic system failure signs (pooling water, odor, slow drains, green drainfield patches)
- Trench safety / "competent person" (OSHA term of art under Subpart P)
- Repair-vs-replace threshold (septic industry rule of thumb: replace if repair cost exceeds ~50% of new-system cost)

---

## Validation Gate Summary

All entities above are either `VALIDATED` (confirmed via a live, citable source in this research pass) or explicitly flagged `NOT_FOUND` / `NOT CONFIRMED FOR D&D` where no record exists or the connection to D&D specifically is unverified. No Q-IDs, license numbers, or years-in-business figures were invented. See `entity-inventory.csv` for the structured version consumed by `/content-brief` and future schema generation.
