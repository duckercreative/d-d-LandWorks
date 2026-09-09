---
name: content-briefs
description: >
  Content brief methodology for 75 Degree AC — detailed page-level content specifications
  covering H1, H2 structure, keywords, E-E-A-T requirements, FAQs, CTAs, and schema.
  Activates when creating content briefs, planning page content, or briefing writers.
version: 1.0.0
client: 75 Degree AC
---

# Content Briefs — 75 Degree AC

Write a detailed content brief for every page in the site architecture. Each brief is a complete, self-contained specification — anyone should be able to produce exactly the right content from it.

---

## Brief Quality Standard

A brief is only complete when zero ambiguity remains.

**The five tests for a complete brief:**
1. A writer can produce the correct H1 without guessing
2. A writer knows exactly what every H2 section must cover
3. A writer knows what makes this page different from every competitor page
4. A writer knows which specific FAQs to write (from PAA research, not generic)
5. A writer knows which Houston-specific details and neighborhoods to include

---

## Brief Order

Write briefs in priority order:
- Priority 1 pages first (Emergency, AC Repair, Homepage)
- Then Priority 2, then Priority 3
- Service hubs before sub-pages; location hubs before individual location pages

---

## Output: `05-content/content-briefs.md`

One document with all briefs separated by clear dividers.

---

## Complete Brief Template

```
---
## BRIEF: [Page Title] — [URL]
**Priority**: [1/2/3] | **Page Type**: [type] | **Word Count**: [X–X words]
---
```

---

**Page**: [URL]
**Page Type**: [homepage / service / location / blog]
**Priority**: [1/2/3]
**Word Count Target**: [1,500–2,500 words typical for service pages]

---

**Keyword Targets**

- **Primary Keyword**: [exact keyword — drives the H1]
- **Secondary Keywords** (weave naturally, not stuffed): [2-4 keywords]
- **Semantic Terms** (must appear at least once): [5-8 terms]
- **Houston Entities to Mention**: [Houston neighborhoods, landmarks, climate context]
- **HVAC Entities to Mention**: [specific brands, equipment types, certifications]

---

**Intent & Audience**

- **Search Intent**: [transactional / commercial / informational / local]
- **Primary Reader**: [which ICP — Emergency Emily? Planned Pete? Replacement Rita?]
- **Their State of Mind**: [what triggered the search? What are they feeling? What do they already know?]
- **What They Need to Believe Before Calling**:
  1. [e.g., "75 Degree AC will actually answer and come TODAY — not next week"]
  2. [e.g., "The price will be transparent — no surprise charges after the job"]
  3. [e.g., "The technician is licensed and won't damage my system further"]

---

**Voice & Angle**

- **Writing Voice**: [e.g., "Experienced Houston HVAC technician explaining to a homeowner — direct, confident, no fluff"]
- **Required Houston Specifics** (minimum 3):
  1. [e.g., "Houston humidity accelerates AC coil deterioration — mention this"]
  2. [e.g., "Heat index regularly above 100°F June-September — real urgency context"]
  3. [e.g., "Most Houston homes built in 1980s-2000s — common equipment ages mentioned"]
- **Insider Detail** (only a real HVAC tech would know):
  [e.g., "Most Houston AC failures are capacitors — $200-350 repair that homeowners fear is $3,000. Naming this builds instant trust."]

---

**E-E-A-T Requirements**

Minimum signals for this page:
- **Experience signals** ([count]): [e.g., "Real repair scenario from Houston in summer heat", "Process description showing how the job is actually done"]
- **Expertise signals** ([count]): [e.g., "Methodology explanation with WHY, not just WHAT", "Cost transparency with real Houston price ranges"]
- **Authority signals** ([count]): [e.g., "TACLA license number", "Google review count and rating", "Years serving Houston since 2016"]
- **Trust signals** ([count]): [e.g., "Transparent pricing ranges", "What happens after you call — step by step", "Free estimate guarantee"]

---

**AI Citation Target**

- **Featured Snippet Format**: [paragraph / list / table / none]
- **Citation-Ready Paragraph**: [Yes/No — if Yes, specify after which H2, and what question it directly answers in 40-60 words]
- **PAA Target**: [which specific PAA question is the best candidate for the PAA box?]

---

**Content Structure**

- **H1**: [exact text — must include primary keyword + Houston modifier]
- **Opening Paragraph** (first 100-150 words): [address the reader's specific situation. Primary keyword in first 100 words. Key USP. No "At 75 Degree AC, we are committed to..."]
- **H2 Sections** (in order):
  1. **[H2 text]** — [what this section covers, specific points required]
  2. **[H2 text]** — [what this section covers]
  3. **[H2 text]** — [what this section covers]
  4. **FAQ** — [list the exact FAQ questions below]
  [minimum 4 H2 sections for service pages]

---

**Unique Angle**

[The one thing this page says that no competitor Houston HVAC page says. Not "we're the best" but something specific:
e.g., "The only Houston AC company that tells you the three most common repairs your unit needs BEFORE sending a tech — so you know the price before anyone shows up."]

This angle must appear in:
- Opening paragraph (introduced early)
- One dedicated H2 section
- CTA copy

---

**FAQ Section** (6 questions from PAA research)

Every question must be:
- From actual PAA boxes for this specific query
- Answered in 3-5 sentences starting with the direct answer
- Not repeated from any other page on the site

| # | Question | Answer (first sentence = direct answer) |
|---|----------|----------------------------------------|
| 1 | [PAA question] | [Direct answer first] |
| 2 | [PAA question] | [Direct answer first] |
| 3 | [PAA question] | [Direct answer first] |
| 4 | [PAA question] | [Direct answer first] |
| 5 | [PAA question] | [Direct answer first] |
| 6 | [PAA question] | [Direct answer first] |

---

**Internal Links**

| Direction | Target URL | Anchor Text | Placement |
|-----------|------------|-------------|-----------|
| OUT | /emergency-ac-repair-houston/ | "24/7 emergency AC repair Houston" | body-late or after services section |
| OUT | /contact/ | "get your free estimate today" | body-late CTA |
| OUT | [related service] | [descriptive anchor] | body-mid |
| IN (from) | /ac-repair-houston-tx/ (if sub-page) | [descriptive anchor] | — |
| IN (from) | Homepage | [anchor] | — |

No "click here" or "learn more" anchors.

---

**Schema Requirements**

- **Type**: [Service / HVACContractor / Article / FAQPage]
- **Required fields**: [name, description, areaServed, provider, telephone]
- **FAQPage Schema**: Yes — FAQ answers in schema must match visible FAQ content exactly
- **BreadcrumbList**: Yes (all pages except homepage)
- **AggregateRating**: Add to service pages once reviews are established

---

**CTA Requirements**

| Placement | CTA Text | Link |
|-----------|----------|------|
| Above fold (hero) | "Call Now: (713) 598-2737" or "Get a Free Estimate" | tel:7135982737 or /contact/ |
| Mid-page (after services section) | "Book a Same-Day Technician: (713) 598-2737" | tel:7135982737 |
| Bottom (end of content) | "Emergency? Call 24/7: (713) 598-2737" | tel:7135982737 |

CTA copy must match page intent:
- Emergency page: "Call Now — We're Available 24/7: (713) 598-2737" (red button)
- Repair pages: "Get a Free Estimate: (713) 598-2737"
- Maintenance pages: "Book Your Tune-Up: (713) 598-2737"
- Installation pages: "Get a Free Installation Quote: (713) 598-2737"

---

**Images Required**

| # | Description | Alt Text | Type |
|---|-------------|----------|------|
| 1 | [Specific Houston HVAC context image] | "[service] in Houston TX — 75 Degree AC" | hero |
| 2 | [Technician in uniform / branded van] | "75 Degree AC technician [service]" | service |
| 3 | [Before/after or equipment specific] | "[specific alt text]" | evidence |

**Never**: stock photos, non-Houston locations, generic HVAC images with no branding.

---

## Page-Specific Brief Notes

**Emergency Page** (/emergency-ac-repair-houston/):
- Phone number in H1 or immediately below H1
- "Response time: within 2 hours" above fold
- Green "OPEN 24/7" badge above fold
- Red or orange CTA button (sticky on mobile if possible)
- NO long paragraphs above fold — get to the CTA immediately
- Word count: shorter is better for emergency pages (800-1,200 words)

**Service Sub-Pages** (compressor repair, refrigerant leak, etc.):
- Must differentiate from parent hub (/ac-repair-houston-tx/)
- Focus on the specific problem: symptoms, causes, cost, what happens during the repair
- Unique angle: insider knowledge about this specific repair

**Location Pages**:
- Minimum 3 Houston-area specific details (neighborhood landmarks, local housing stock age, local climate context)
- Mention 3-5 specific neighborhoods/zip codes for that service area
- Local social proof or testimonial with area attribution
- Link to nearest 2-3 other service areas

**Blog Posts**:
- Specify exact question the post answers
- Featured snippet format to target (paragraph/list/table)
- Which 2-3 transactional service pages to link to
- PAA question to target for PAA box

---

## Content Checklist (verify before passing to writer)

- [ ] Primary keyword appears in H1
- [ ] Primary keyword appears in first 100 words
- [ ] Primary keyword appears in at least one H2
- [ ] Meta title ≤60 chars and includes primary keyword + Houston modifier
- [ ] Meta description ≤160 chars and includes soft CTA
- [ ] FAQs are sourced from PAA (not generic)
- [ ] Houston-specific details minimum 3 (location pages: minimum 5)
- [ ] Internal links out to 3-5 related pages with descriptive anchors
- [ ] Schema type specified
- [ ] Unique angle is specific (not "best service in Houston")
- [ ] E-E-A-T signals meet minimum counts for this page type
- [ ] CTA includes phone number (713) 598-2737
