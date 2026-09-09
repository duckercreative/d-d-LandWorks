# Question Mine — Land Clearing (`/land-clearing/`)

**Page:** `/land-clearing/` — per the topical map (§6.4/§5 P0 row), a core P0 service page, home-pack-adjacent, with a live sibling page at `/brush-clearing/` (see `00-research-pack.md` Scope Boundary Finding for how questions are routed between the two).
**Sourced via:** WebSearch against Google results (PAA-adjacent), `site:quora.com` / `site:reddit.com` search-operator proxying (same reliability caveat as all four prior packs — direct thread fetching through this tooling is unreliable), direct competitor FAQ extraction (Danco Excavation's own published land-clearing and brush-clearing FAQs), Oregon DEQ/ODF/LRAPA/DSL government pages, Eugene/Springfield municipal code, and cost-guide/industry sites (Angi, HomeGuide, OWNR OPS, LawnStarter, ProFence) that answer the same question set a Lane County homeowner, rural landowner, or builder would ask before hiring a land-clearing contractor.
**Cross-reference note:** Questions already fully answered in the homepage pack (best time of year to excavate, CCB verification, general permit-need patterns) or the excavation pack (Oregon811, cost-overrun-from-rock framing) are cited and reused rather than re-derived.
**Methodology note:** No fabricated questions — every entry is either a verbatim search-result question title, a close paraphrase of a question a cited source directly answers, or a real competitor FAQ question (Danco's own land-clearing/brush-clearing FAQ pages).

**Total questions:** 47
**Oregon-specific tagged:** 14
**Objection-tagged:** 9
**Reddit/Quora-sourced (proxy):** 8
**Scope-boundary tagged (land clearing vs. brush clearing vs. tree removal):** 7

---

## pre_call / definitional (before they understand what they're buying)

1. What does land clearing actually include? *(Danco's own FAQ answers this verbatim: "removing trees, brush, stumps, vegetation, and debris from a property to prepare it for construction")*
2. What's the difference between land clearing and brush clearing? *(this page's central scope-boundary question — see `00-research-pack.md` Scope Boundary Finding; Danco's own FAQ draws the identical line D&D's live site already draws: "Brush clearing focuses on vegetation, overgrowth, and smaller plant material, while land clearing is a larger process that may include tree removal, stump removal, and site preparation")*
3. What's the difference between land clearing and lot clearing? *(synonym-clarification — treated as the same service in industry usage)*
4. What's the difference between land clearing and tree removal? *(scope_boundary — answered: land clearing is a whole-parcel service that may include tree removal within its footprint; standalone tree removal/arborist work on an individual tree is a different, narrower service category D&D does not offer independently — see entity-inventory.csv "Tree Felling" row)*
5. Does land clearing include stump removal or stump grinding? *(scope_boundary, high-value — answered per the current live page's own copy: yes, grubbing stumps and root balls is part of a full clearing job's footprint; this is distinct from D&D marketing standalone "stump grinding" as an independent service — flagged for confirmation with David in `08-gap-analysis.md`)*
6. Does land clearing include forestry mulching? *(scope_boundary — answered: forestry mulching is a distinct method that grinds vegetation into on-site mulch in a single pass; the current live page describes chipping/hauling/burning, not mulching, as D&D's disposal methods — do not claim forestry mulching as a D&D service without confirming with David)*
7. What's the difference between land clearing and site preparation? *(reused from home pack — land clearing is one step feeding into the broader site-preparation umbrella; the current live page's own "Often Paired With" section already states this sequence)*

## project_types

8. Do I need full land clearing if I'm just clearing land for pasture? *(task-brief-named — answered: no, pasture/acreage-reclamation clearing is a genuinely lighter, cheaper tier than construction-grade clearing, because full stump extraction isn't always required — stumps can be ground low rather than fully pulled, per Angi/industry cost-guide sourcing)*
9. What's the difference between clearing land for building versus clearing land for pasture? *(task-brief-named — answered: construction-grade clearing removes stumps/roots completely and grades to bare, buildable ground; pasture clearing can leave low-ground stumps and skip the finish-grade pass, at meaningfully lower cost per acre)*
10. Can you clear a wooded lot that still has standing timber on it? *(project-type question — matches the current live page's own hero copy: "wooded lots... trees, stumps, brush")*
11. What happens if I bought a rural property that's been neglected for years — is that a normal job? *(matches current live page's own hero copy: "a parcel that's sat untouched for years")*
12. Can a contractor clear land for a subdivision or multiple house pads at once? *(commercial/developer project-type question)*
13. Does land clearing include clearing access for a driveway or septic system? *(cross-service sequencing question — ties to future `/driveway-repair/` and `/septic/` pages per topical map)*

## cost

14. How much does land clearing cost per acre? *(answered from multiple sourced ranges: nationally $500-$5,600/acre broad range; Oregon-specific guidance notes lightly forested land runs roughly $733-$2,333/acre and heavily forested land $3,395-$6,155/acre, with Oregon's wet-climate dense understory growth and steep-slope terrain both pushing costs toward the higher end — sources: Angi, OWNR OPS, Cojo Asphalt Oregon-specific guide)*
15. How much does it cost to clear an acre of land in Eugene or Lane County specifically? *(oregon_specific — no single authoritative Lane-County-only figure was found in this pass; present as a range within the broader Oregon figures above, not a fabricated county-exact number)*
16. How much does it cost to clear land for pasture versus for construction? *(cost-tier question — answered: pasture/field reclamation commonly runs $500-$2,500/acre per Angi/HomeGuide data, meaningfully below construction-grade clearing, because it's mostly brush/saplings rather than mature timber and doesn't always require full stump extraction)*
17. Why is forestry mulching cheaper than traditional land clearing? *(answered: mulching leaves material on-site instead of hauling it away, eliminating haul-off cost — commonly $400-$800/acre for average vegetation vs. $1,200-$5,600+/acre for traditional clear-and-haul, per Timberworks VA/Michigan Land Clearing sourcing; reiterate that this pack does not confirm D&D offers mulching as a standalone method)*
18. Does hauling away trees and debris cost extra, or is it included? *(objection-adjacent/scope-clarity — answered generally: haul-off commonly adds $500-$2,000+/acre on top of base clearing cost per industry sourcing; scope should be confirmed on the walk-through, consistent with the current live page's own framing)*
19. How much does stump removal cost if it's not included in land clearing? *(answered: roughly $326 for the first stump plus $40-$83 per additional stump per HomeAdvisor/industry data; note per Danco's own FAQ, some competitors bill stump removal as a related-but-separate line item even within a land-clearing job)*
20. Why do land-clearing quotes vary so much for what looks like the same lot? *(objection-adjacent, reused root-cause theme from prior packs: vegetation density, terrain/slope, disposal method chosen, and access all drive real cost variation, not contractor markup)*
21. Are there hidden costs in a land-clearing quote — permits, burn permits, hauling? *(objection, reused theme from homepage/excavation packs)*

## debris / disposal

22. What happens to the trees and brush after land clearing? *(task-brief-named, high-value — answered: three standard paths — hauled off-site, mulched/chipped on-site, or burned where permitted — each with different cost and site-condition implications; current live page names chipping and burning specifically)*
23. Do you haul away the debris, or does the property owner have to deal with it? *(scope-clarity — Danco's own FAQ answers this directly for its own service; D&D's current live page states chipping/hauling/burning as disposal options)*
24. Can cleared debris be left on-site as mulch instead of hauled away? *(disposal-method question, ties to the forestry-mulching adjacent-concept entity)*
25. What's the cheapest way to dispose of land-clearing debris? *(cost-driven disposal question — answered: on-site mulching/chipping is typically cheapest since it avoids haul-off fees, per industry sourcing)*

## permits — tree ordinances (in-city)

26. Do I need a permit to clear trees in Lane County? *(task-brief-named, high-value, oregon_specific — answered with the critical nuance: it depends on whether the property is inside Eugene/Springfield city limits or in unincorporated Lane County — see `07-oregon-authority.md` §1-2)*
27. Do I need a permit to remove a tree in Eugene? *(oregon_specific — answered: yes, if it qualifies as a "significant tree" under Eugene Code 9.6885 — minimum 8 inches DBH — verified directly against eugene.municipal.codes)*
28. What counts as a "significant tree" in Eugene? *(oregon_specific — answered: a live tree with a trunk diameter of at least 8 inches measured at 4.5 feet above ground, per Eugene Code 9.6885)*
29. Do I need a permit to remove a tree in Springfield? *(oregon_specific — answered: generally required for trees over roughly 6 inches DBH, in the public right-of-way, or designated heritage/significant trees, per Springfield's Tree Felling Permit)*
30. What is a "heritage tree" in Oregon and does it change the rules? *(oregon_specific — answered: heritage trees are typically defined around 24+ inches DBH and carry stricter removal review than an ordinary significant tree)*
31. Does the Eugene or Springfield tree ordinance apply if my property is outside the city limits? *(scope_boundary, oregon_specific, high-value — answered: no — these are city-limits ordinances; this pack did not find an equivalent unincorporated-Lane-County tree-removal ordinance, though Right-to-Farm/Right-to-Forest framing generally reduces county-level restriction on rural land — flagged for direct confirmation with Lane County Planning & Development before stating as an absolute)*
32. Can I clear trees on my own rural acreage in Lane County without asking anyone? *(objection/liability-adjacent — answered directionally per the finding above, with the same confirmation caveat)*

## permits — burning

33. Do I need a burn permit to burn slash piles after clearing land in Oregon? *(task-brief-named, high-value, oregon_specific — answered: yes, if the land is forestland within an Oregon Department of Forestry protection district; ODF requires a permit and typically 7-day advance registration before ignition — verified directly against oregon.gov/odf)*
34. Who regulates slash burning in Lane County — the county, the state, or a fire district? *(oregon_specific, high-value — answered: primarily the Oregon Department of Forestry for forestland slash; Lane Regional Air Protection Agency (LRAPA) does NOT regulate slash burns directly but does prohibit or require a letter permit for certain outdoor burning within its own jurisdiction/fire districts, including an outright prohibition within the Eugene-Springfield urban growth boundary — verified directly against lrapa-or.gov)*
35. Can I burn brush and debris in my backyard after a clearing job in Oregon? *(oregon_specific — answered: Oregon DEQ's backyard/domestic burning rules apply to yard debris from a residence with four or fewer dwelling units, must be burned on the property of origin, and must be constantly attended with extinguishing equipment on hand — a separate rule set from ODF's forestland slash-burn rules)*
36. What's the difference between a slash-burn permit and a regular backyard burn permit in Oregon? *(oregon_specific, high-value, zero-competitor-covered — answered by contrasting the ODF/DEQ/LRAPA entities above)*
37. Is open burning banned in the Eugene-Springfield area? *(oregon_specific — answered: forest slash open burning is expressly prohibited within the Eugene-Springfield Urban Growth Boundary per LRAPA's rule structure — general backyard/domestic burning rules under DEQ still separately apply/restrict elsewhere in the county)*
38. What happens if I burn debris without a permit in Oregon? *(objection/liability-fear — this pack did not find a specific published penalty dollar figure for unpermitted slash or backyard burning; do not invent one — direct the reader to confirm with ODF/LRAPA/DEQ or the local fire district)*

## wetlands / riparian

39. Can I clear land near a stream or wetland in Oregon without a permit? *(task-brief-named, oregon_specific — answered by reusing the excavation pack's Oregon Department of State Lands (DSL) Removal-Fill Law finding: a DSL permit is required for 50+ cubic yards of removal/fill in wetlands/waters of the state, and any amount within designated Essential Salmonid Habitat or Scenic Waterways — relevant when grubbing stumps or grading near such a feature during a clearing job)*
40. What is a riparian buffer and does it affect my clearing project? *(oregon_specific — answered generally per the DSL entity above; reused from the excavation pack's pond-permitting research rather than re-derived from scratch, per this task's explicit instruction)*

## forest practices act

41. Does the Oregon Forest Practices Act apply to clearing my house lot or acreage? *(task-brief-named, high-value, oregon_specific — answered: the FPA governs commercial tree-harvesting/forest-management activity on non-federal forestland; it is generally NOT triggered by a one-time residential land-clearing job such as clearing a house lot, driveway, or pasture — this pack could not find an explicit plain-language small-acreage exemption stated directly by ODF, so this is presented as "likely mostly inapplicable, verify directly with ODF" rather than an absolute claim)*
42. Do I need to replant trees after clearing my property in Oregon? *(oregon_specific — answered: replanting requirements under the FPA apply to commercial clearcuts over specific acreage thresholds on forestland, not to a typical residential clearing job — same non-absolute framing as above)*

## wildfire / defensible space (cross-reference to sibling page)

43. Does land clearing help meet Oregon's new wildfire defensible-space rules? *(oregon_specific — answered by reusing/cross-referencing the Senate Bill 762 entity: SB 762 directs minimum defensible-space vegetation-clearing standards for properties in high/extreme-risk wildland-urban interface zones; a full land-clearing job on a wooded lot can address this, but the topic is more centrally owned by the sibling `/brush-clearing/` page's existing wildfire framing — cross-link rather than duplicate)*

## process / equipment

44. What equipment is used for land clearing? *(paa-sourced — answered per the current live page's own copy: an excavator with a thumb or grapple attachment for heavy lifting — pulling stumps, piling brush, loading debris — plus a brush hog or mulching head for lower growth; equipment choice depends on ground conditions, decided at the walk-through)*
45. How long does it take to clear an acre of land? *(paa-sourced — no single authoritative Lane-County figure found; framed directionally as depending on vegetation density, terrain, and disposal method, consistent with the cost-driver findings above)*
46. Can a contractor preserve specific trees or features I want to keep while clearing the rest of the lot? *(trust-building — answered: yes, per the current live page's own copy ("Flagging and preserving trees or features you want kept") and independently corroborated by All Dirt's own service copy ("carefully preserve desired trees and vegetation while removing unwanted growth") — a genuine, walk-through-based practice, not marketing language)*

## objection / DIY

47. Do I need to hire a contractor, or can I clear land myself with a rented excavator? *(objection/DIY-vs-hire threshold, reddit/quora-sourced via TractorByNet forum threads on DIY land clearing — answered directionally: small brush/sapling work is a realistic DIY/rental project for an experienced operator, but stump grubbing, larger timber, slope work, and anything near property lines/utilities/wetlands carries real liability, equipment-damage, and permitting risk that favors hiring a licensed, bonded contractor)*
