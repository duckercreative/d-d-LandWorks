# Question Mine — Foundation Excavation (`/foundation-excavation/`)

**Page:** `/foundation-excavation/` — per the topical map (§6.5), a P1 core service page that the already-shipped Excavation & Grading page explicitly promises will go deeper on the "foundation dig" project type it only briefly names. See `00-research-pack.md`'s Scope Boundary section for exactly what "deeper" means.
**Sourced via:** WebSearch against Google results (PAA-adjacent), `site:quora.com` / `site:reddit.com` search operators (same reliability caveat as the six prior packs — direct thread fetching is unreliable through this tool), the Oregon Residential Specialty Code (up.codes/codes.iccsafe.org mirrors), OSHA.gov, Eugene/Lane County building-department pages, and Oregon-specific contractor-blog content (Cojo Asphalt's dedicated frost-depth/basement-excavation/monolithic-slab article series) that answers the same question set a homeowner, builder, or GC would ask before or during a foundation dig.
**Cross-reference note:** Questions already fully answered in the excavation pack (excavation-vs-grading disambiguation, Oregon811, rock-cost mechanics, general trench-safety figures) or the site-preparation pack (site-prep-vs-excavation disambiguation, Lane County Grading and Fill Permit, geotechnical-report framing) are cited and reused rather than re-derived, per this project's stated methodology.
**Methodology note:** no fabricated questions — every entry below is either a verbatim search-result question title, a close paraphrase of a question a cited source directly answers, or a real Quora/Reddit-search-result title.

**Total questions:** 47
**Oregon-specific tagged:** 15
**Objection-tagged:** 9
**Reddit/Quora-sourced (proxy):** 10

---

## pre_call / scope-definition (before they understand what they're buying)

1. What's the difference between excavation and foundation excavation? *(the page's own core disambiguation job — reused framing from the sibling packs' disambiguation pattern; answered: general excavation is the umbrella term for any dig with a purpose, foundation excavation is the specific, higher-stakes subset that cuts and levels the hole a footing and foundation wall or slab will sit in, following the same excavation-vs-grading logic already shipped on `/excavation/`, just one layer more specific)*
2. What does foundation excavation actually include? *(scope-definition — answered: cutting to plan depth and elevation, verifying against the survey, compacting subgrade before footings are formed, sloping the excavation for safe access and drainage during the build, and backfilling/compacting around the finished foundation once it's poured — reused from the current live page, extended with foundation-type depth below)*
3. Does foundation type change how a foundation gets excavated? *(task-brief seed question — answered directly in the foundation-type section: yes, slab, crawlspace, and basement foundations require meaningfully different excavation depths, scopes, and costs)*
4. What's the difference between a slab, a crawlspace, and a full basement foundation? *(quora-sourced framing, reused/adapted from general home-construction forums — answered with the excavation-depth distinction: roughly 2-3 ft strip for a slab, a perimeter trench to footing depth plus stem-wall height for a crawlspace, 8-10 ft for a basement)*
5. Is a monolithic slab the same thing as a regular slab foundation? *(quora-sourced, adapted — answered: a monolithic slab pours the footing and floor together in one combined pour; a stem-wall foundation pours the footing first, then a short wall, then the floor — the method Oregon's frost-line and sloped-site conditions more often require)*

## frost_depth (oregon_specific — the page's central authority section)

6. How deep does a foundation footing need to be in Oregon? *(oregon_specific — answered: not less than 12 inches below finished grade on undisturbed ground per ORSC R403.1.4, which in Lane County also happens to be the frost-protection depth per Table R301.2's under-2,500-ft-elevation band)*
7. What is the frost line depth in Oregon? *(oregon_specific, task-brief seed question — answered with the exact ORSC Table R301.2 figures: 12 inches below 2,500 ft elevation, 18 inches from 2,500-4,000 ft, 24 inches at or above 4,000 ft — and the note that Eugene/Lane County sit in the 12-inch band)*
8. Why doesn't every Oregon foundation contractor just state the frost depth number? *(objection-adjacent — answered honestly: even the single best Oregon-specific content found on this exact topic, a dedicated Cojo Asphalt article titled "Frost Depth for Footings: How Deep to Dig in Oregon," deliberately avoids stating one, deferring to "your local building department" — this page states the real, cited figure instead)*
9. Does frost depth vary by elevation in Oregon? *(oregon_specific — answered: yes, per ORSC Table R301.2's three elevation bands; Lane County's populated valley floor sits well under the 2,500 ft threshold)*
10. What happens if a footing isn't dug deep enough for frost protection? *(failure_mode — answered: frost heave, where freezing groundwater expands roughly 9% and lifts an under-depth footing, cracking foundations and tilting structures — general engineering fact, reused framing from national foundation-authority sources)*
11. Is there a frost-protected shallow foundation option in Oregon? *(oregon_specific, code-nerd phrasing — answered: yes, ORSC R403.1.4.1 lists frost-protected shallow foundation construction per Section R403.3, ASCE 32 construction, or erection on solid rock as alternatives to simply extending below the frost line)*

## foundation_type_cost (task-brief seed cluster)

12. Does it cost more to excavate for a basement than a slab? *(answered: yes, significantly — national data puts slab excavation 40-60% cheaper than a full basement dig, since a slab only needs a shallow topsoil strip while a basement requires 8-10 ft of excavation, shoring, and hauling off hundreds of cubic yards)*
13. How much does it cost to excavate for a crawlspace versus a slab? *(answered: crawlspace excavation runs somewhat more than a slab because of the perimeter trench and stem-wall dig, though both are far cheaper than a basement — general national ranges, not a Lane County quote)*
14. How much does basement excavation cost? *(answered: national data runs roughly $75-$150 per cubic yard removed, with a 1,000 sq ft footprint requiring around 300 cu yd — $22,500-$45,000 for digging alone, before the full foundation)*
15. Why is basement excavation so much more expensive than a slab? *(objection-adjacent — answered: depth, shoring/OSHA compliance, and far more material hauled off-site, not contractor markup)*
16. What determines how deep a crawlspace needs to be excavated? *(answered: the finished crawlspace clearance target, commonly 18-48 inches, plus the footing depth the frost-line and structural requirements set)*

## adu (task-brief seed cluster)

17. Does an ADU need its own foundation excavation? *(reused/extended from the site-preparation pack's ADU project-type entity — answered: yes, an ADU built as a standalone structure needs its own footing/foundation dig, commonly a simpler slab-on-grade or monolithic-slab type)*
18. What foundation type is most common for an Oregon ADU? *(oregon_specific — answered generally: slab-on-grade and monolithic-slab foundations are common for ADUs because of their lower cost and simpler excavation scope, though the specific choice depends on the structure's design and the site)*
19. Is excavating for an ADU foundation different if it's close to my existing house? *(objection/safety-adjacent — answered: yes — per OSHA 1926.652(b), excavating below the level of an existing foundation's footing is restricted unless underpinning is installed or a registered engineer confirms the existing structure won't be affected)*

## over_dig_working_space (task-brief seed cluster)

20. What is "over-dig" in foundation excavation? *(task-brief seed question — answered: the extra excavation beyond the actual footing/wall lines needed for a crew to physically work — forming, waterproofing, backfilling — around the foundation)*
21. How much extra space does a crew need around a foundation excavation? *(answered with the real OSHA figure: for house foundation/basement excavations under 7.5 ft deep or properly benched, the minimum working width at the bottom, excavation face to formwork, must be as wide as practicable but not less than 2 feet)*
22. Is there a rule for how close excavation equipment can work to an existing foundation? *(safety/objection-adjacent — answered via the same OSHA 1926.652(b) underpinning rule as question #19, applied to any excavation near an existing structure's footing, not just ADUs)*

## inspection_sequencing (task-brief seed cluster — the trust/competence signal)

23. Does the building department inspect a foundation before the concrete gets poured? *(task-brief seed question — answered directly: yes, in both Eugene and unincorporated Lane County, the foundation/footing inspection happens after the trench or pad is excavated, forms are erected, and rebar is placed, but before any concrete is poured)*
24. What does a foundation inspector actually check? *(answered: that trenches/pad areas are excavated and cleared of loose material or mud, forms are erected and secured, and reinforcing is in place and secured — the inspector is checking the open excavation and forms, not concrete that's already down)*
25. Can you pour a foundation before it's inspected? *(objection/competence-signal — answered plainly: no, not legally — excavate, then inspect, then pour, is the required order, and skipping the inspection step is the kind of shortcut a homeowner should be wary of)*
26. How do I schedule a foundation inspection in Eugene? *(oregon_specific, process phrasing — answered: through the City of Eugene's online eBuild system, or by phone at 541-682-5283, 7:30am-3:30pm weekdays, requesting before 7am for same-day scheduling)*
27. What happens if a foundation excavation fails inspection? *(objection/failure_mode — answered generally: the crew corrects whatever didn't pass — typically loose material not cleared, forms out of position, or rebar not properly placed or secured — before the inspector will approve the pour; not addressed in any Lane County competitor's content found in this pass)*
28. Does the excavator or the general contractor schedule the footing inspection? *(process/coordination phrasing, directly named in the task's schedule-reliability framing — answered honestly: this varies by job and should be confirmed directly with whoever holds the permit, typically the GC on a builder-managed project; not something to state as an absolute D&D policy without confirming with David)*

## foundation_drain_moisture (oregon_specific)

29. Does Oregon require a drain around a foundation? *(oregon_specific — answered: yes, per ORSC R405, for concrete/masonry foundations that retain earth and enclose habitable or usable space, unless the foundation sits on well-drained or sand-gravel soil)*
30. What's the difference between a foundation drain and a septic drainfield? *(scope-clarity, directly ties to the septic pack's drainfield entity — answered: completely different systems that happen to share the word "drain" — a foundation drain moves groundwater away from a foundation wall; a septic drainfield disperses treated wastewater)*
31. Does a crawlspace need a vapor barrier in Oregon? *(oregon_specific — answered: yes, per ORSC R408.1/R408.3, a Class I vapor retarder is required over exposed ground in both vented and unvented crawlspaces, with specific lap and sealing requirements)*
32. Does D&D Land Works install foundation drains and vapor barriers? *(scope-clarity, requires David's input — flagged in `08-gap-analysis.md` rather than assumed; the honest content-scope framing is that these are typically a foundation/waterproofing contractor's install, and D&D's excavation/backfill work accommodates them)*

## water_and_soil (task-brief seed cluster — cost/liability anxiety)

33. What happens if the excavator hits water while digging a foundation? *(task-brief seed question, objection-tagged — answered: a real, explainable scenario, particularly for basement-depth digs in the Willamette Valley's high winter water table, which commonly requires dewatering — pumping groundwater out of the open excavation — rather than a surprise the crew can't handle)*
34. What happens if the excavator hits rock digging a foundation? *(objection-tagged, higher-stakes version of the excavation page's rock-cost content — answered: the same real cost jump already explained on the Excavation & Grading page applies here, but the stakes are higher because a foundation dig on a construction timeline has less schedule slack than a standalone driveway or pond dig)*
35. Do I need a soils report before excavating for a foundation? *(task-brief seed question — answered: not always required by code for a typical single-family foundation, but a $2,000-$5,000 geotechnical/soils study is credited with preventing 20-50% of cost overruns from unexpected rock or bad soil, and ORSC R403.1 requires footings to bear on undisturbed natural soil or properly engineered fill — reused/extended from the site-preparation pack's cost-overrun entity)*
36. Do I need an engineer before digging a foundation? *(task-brief seed question — answered: for a standard residential foundation under a normal building permit, the structural engineer's design work happens upstream of excavation; an engineer's direct sign-off becomes specifically relevant when excavating near or below an existing structure's footing, per the OSHA underpinning rule in question #19/#22)*
37. Why does clay soil matter for a foundation excavation in the Willamette Valley? *(oregon_specific — reused/extended from the homepage and site-preparation packs' clay-soil entity, applied here specifically to foundation-bearing-soil context rather than general cost-overrun context)*

## schedule_coordination (task-brief seed cluster — builder/GC relationship)

38. Should foundation excavation happen before or after I hire a builder? *(reused framing from the site-preparation pack's sequencing-anxiety cluster, sharpened for this page: a foundation dig is almost always tied to an active building permit and a builder's or GC's schedule, not a standalone homeowner decision made in isolation)*
39. How does foundation excavation fit into a home-build timeline? *(process/sequencing — answered: follows site preparation on the same lot, and is itself followed by the footing inspection, forming, and pour before framing can start — reused sequencing fact from the site-preparation pack, extended one step further)*
40. Will a delay in scheduling the foundation dig delay my whole build? *(objection/anxiety — answered honestly: yes, potentially, since the foundation inspection and pour are on the critical path for everything after them; a contractor's reliability on scheduling matters more here than on a standalone project)*
41. Can one contractor handle both the site prep and the foundation excavation? *(reused directly from the site-preparation pack's own FAQ shortlist, restated in this page's context)*

## general_process_reused (already answered on sibling pages — cited, not re-derived)

42. What's the difference between excavation and grading? *(fully answered on `/excavation/` — this page cross-links rather than repeating)*
43. Do you need to call 811 before digging a foundation? *(fully answered on `/excavation/` — Oregon811's 2-business-day advance notice applies identically to a foundation dig)*
44. Do I need a permit to excavate in Lane County? *(fully answered on `/excavation/` and `/site-preparation/` — this page adds the specific fact that foundation excavation under an active building permit is generally exempt from a separate grading permit, already noted on the excavation page, and cross-links there for the fuller permit picture)*
45. What equipment is used for excavation work? *(fully answered on `/excavation/` — this page notes the foundation-specific addition of laser level/GPS grade control for elevation accuracy, already present on the current live page)*

## objection / trust (Reddit/Quora-sourced proxy)

46. Reddit-adjacent: "Contractor started digging our foundation before the permit was finalized — is that normal?" *(reddit_or_quora_sourced proxy, objection-tagged — answered indirectly through the inspection-sequencing content: a properly sequenced job excavates, holds for inspection, then pours, all under an active permit; starting excavation before a permit exists is a red flag worth raising directly with a contractor, not something D&D's content should imply is normal)*
47. Quora-adjacent: "How do I know if my foundation excavation contractor is cutting corners?" *(reddit_or_quora_sourced proxy, objection-tagged — answered through the same competence signals this page surfaces: does the contractor mention frost depth, does the contractor talk about holding the excavation for inspection before backfill, does the contractor explain over-dig/working space rather than just "we'll dig it out" — the exact differentiators this page's content builds around)*

---

## FAQ Shortlist (9 questions for FAQPage schema — validated against the competitor-matrix's confirmed 0/10 coverage)

1. How deep does a foundation footing need to be in Oregon?
2. Does foundation type (slab, crawlspace, or basement) change the excavation cost?
3. What is "over-dig," and how much extra space does a crew need around a foundation?
4. Does the building department inspect a foundation before the concrete gets poured?
5. What happens if the excavator hits rock or water while digging a foundation?
6. Do I need a soils report or an engineer before excavating for a foundation?
7. Does an ADU need its own foundation excavation?
8. Does Oregon require a drain around a foundation?
9. Should foundation excavation happen before or after I hire a builder?
