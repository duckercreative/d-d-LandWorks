# Wikipedia "Signs of AI Writing" — 29 patterns

Direct adaptation of the patterns documented at https://en.wikipedia.org/wiki/Wikipedia:Signs_of_AI_writing and codified by blader/humanizer. Use this as the baseline audit checklist. Each pattern has a watch-list (phrases that trigger detection) and a before/after example.

For project-specific banned phrases (local-business-specific), also load `.claude/skills/content-generation/references/quick-rules.md`. Those rules are stricter and project-scoped.

---

## CONTENT PATTERNS

### 1. Undue emphasis on significance, legacy, and broader trends

**Watch:** stands/serves as, is a testament/reminder, a vital/significant/crucial/pivotal/key role/moment, underscores/highlights its importance/significance, reflects broader, symbolizing its ongoing/enduring/lasting, contributing to the, setting the stage for, marking/shaping the, represents/marks a shift, key turning point, evolving landscape, focal point, indelible mark, deeply rooted.

**Why it's a tell:** LLMs puff up importance by adding meta-statements about how arbitrary things contribute to a broader topic.

**Before:** The Statistical Institute of Catalonia was officially established in 1989, marking a pivotal moment in the evolution of regional statistics in Spain.
**After:** The Statistical Institute of Catalonia was established in 1989 to publish regional statistics independently from Spain's national statistics office.

---

### 2. Undue emphasis on notability and media coverage

**Watch:** independent coverage, local/regional/national media outlets, written by a leading expert, active social media presence.

**Why it's a tell:** LLMs hit readers over the head with claims of notability — often listing big outlets without context.

**Before:** Her views have been cited in The New York Times, BBC, Financial Times, and The Hindu. She maintains an active social media presence with over 500,000 followers.
**After:** In a 2024 New York Times interview, she argued that AI regulation should focus on outcomes rather than methods.

---

### 3. Superficial analyses with -ing endings

**Watch:** highlighting/underscoring/emphasizing…, ensuring…, reflecting/symbolizing…, contributing to…, cultivating/fostering…, encompassing…, showcasing…

**Why it's a tell:** chatbots tack present participles onto sentences to add fake depth at the end of a clause.

**Before:** The temple's colour palette of blue, green, and gold resonates with the region's natural beauty, symbolizing Texas bluebonnets, the Gulf of Mexico, and the diverse Texan landscapes, reflecting the community's deep connection to the land.
**After:** The temple uses blue, green, and gold. The architect said these were chosen to reference local bluebonnets and the Gulf coast.

---

### 4. Promotional / advertisement-like language

**Watch:** boasts a, vibrant, rich (figurative), profound, enhancing its, showcasing, exemplifies, commitment to, natural beauty, nestled, in the heart of, groundbreaking (figurative), renowned, breathtaking, must-visit, stunning.

**Before:** Nestled within the breathtaking region of Gonder in Ethiopia, Alamata Raya Kobo stands as a vibrant town with a rich cultural heritage and stunning natural beauty.
**After:** Alamata Raya Kobo is a town in the Gonder region of Ethiopia, known for its weekly market and 18th-century church.

---

### 5. Vague attributions and weasel words

**Watch:** Industry reports, Observers have cited, Experts argue, Some critics argue, several sources/publications.

**Before:** Experts believe the Haolai River plays a crucial role in the regional ecosystem.
**After:** The Haolai River supports several endemic fish species, according to a 2019 survey by the Chinese Academy of Sciences.

---

### 6. Formulaic "Challenges and Future Prospects" sections

**Watch:** Despite its… faces several challenges…, Despite these challenges, Challenges and Legacy, Future Outlook.

**Before:** Despite its industrial prosperity, Korattur faces challenges typical of urban areas, including traffic congestion and water scarcity. Despite these challenges, with its strategic location and ongoing initiatives, Korattur continues to thrive.
**After:** Traffic congestion increased after 2015 when three new IT parks opened. The municipal corporation began a stormwater drainage project in 2022 to address recurring floods.

---

## LANGUAGE / GRAMMAR PATTERNS

### 7. Overused "AI vocabulary" words

See `ai-vocabulary-tiers.md` for the full ranked list with frequency multipliers. The Wikipedia core list: actually, additionally, align with, crucial, delve, emphasizing, enduring, enhance, fostering, garner, highlight (verb), interplay, intricate/intricacies, key (adjective), landscape (abstract), pivotal, showcase, tapestry, testament, underscore (verb), valuable, vibrant.

These words co-occur — three or more in a 500-word window is a near-certain AI signal.

---

### 8. Copula avoidance ("is/are" substitution)

**Watch:** serves as / stands as / marks / represents [a], boasts / features / offers [a].

**Why it's a tell:** LLMs substitute elaborate copulas for the plain word "is".

**Before:** Gallery 825 serves as LAAA's exhibition space for contemporary art. The gallery features four separate spaces and boasts over 3,000 square feet.
**After:** Gallery 825 is LAAA's exhibition space for contemporary art. It has four rooms totalling 3,000 square feet.

---

### 9. Negative parallelisms and tailing negations

**Watch:** "Not only X but Y", "It's not just X; it's Y", clipped tails like "no guessing", "no wasted motion".

**Before:** It's not just about the beat riding under the vocals; it's part of the aggression and atmosphere. It's not merely a song, it's a statement.
**After:** The heavy beat adds to the aggressive tone.

**Before (tailing negation):** The options come from the selected item, no guessing.
**After:** The options come from the selected item without forcing the user to guess.

---

### 10. Rule of three

**Why it's a tell:** LLMs force ideas into groups of three to appear comprehensive.

**Before:** The event features keynote sessions, panel discussions, and networking opportunities. Attendees can expect innovation, inspiration, and industry insights.
**After:** The event includes talks and panels. There's also time for informal networking between sessions.

---

### 11. Elegant variation (synonym cycling)

**Why it's a tell:** repetition-penalty code makes LLMs over-substitute synonyms for the same referent.

**Before:** The protagonist faces many challenges. The main character must overcome obstacles. The central figure eventually triumphs. The hero returns home.
**After:** The protagonist faces many challenges but eventually triumphs and returns home.

---

### 12. False ranges

**Watch:** "from X to Y" where X and Y aren't on a scale.

**Before:** Our journey through the universe has taken us from the singularity of the Big Bang to the grand cosmic web, from the birth and death of stars to the enigmatic dance of dark matter.
**After:** The book covers the Big Bang, star formation, and current theories about dark matter.

---

### 13. Passive voice / subjectless fragments

**Watch:** "No configuration file needed.", "The results are preserved automatically.", "Decisions were made."

**Before:** No configuration file needed. The results are preserved automatically.
**After:** You don't need a configuration file. The system preserves the results automatically.

---

## STYLE PATTERNS

### 14. Em dash overuse

**Why it's a tell:** LLMs use em dashes more than humans, mimicking "punched up" sales copy.

**Before:** The term is primarily promoted by Dutch institutions—not by the people themselves. You don't say "Netherlands, Europe" as an address—yet this mislabeling continues—even in official documents.
**After:** The term is mainly promoted by Dutch institutions, not by the people themselves. You don't say "Netherlands, Europe" as an address, yet this mislabelling continues in official documents.

In this project, em dashes are banned anywhere in content. Use commas, periods, colons, or parentheses.

---

### 15. Boldface overuse

**Before:** It blends **OKRs (Objectives and Key Results)**, **KPIs (Key Performance Indicators)**, and visual strategy tools such as the **Business Model Canvas (BMC)** and **Balanced Scorecard (BSC)**.
**After:** It blends OKRs, KPIs, and visual strategy tools like the Business Model Canvas and Balanced Scorecard.

---

### 16. Inline-header vertical lists

**Before:**
- **User Experience:** The user experience has been significantly improved with a new interface.
- **Performance:** Performance has been enhanced through optimised algorithms.
- **Security:** Security has been strengthened with end-to-end encryption.

**After:** The update improves the interface, speeds up load times through optimised algorithms, and adds end-to-end encryption.

---

### 17. Title case in headings

**Before:** ## Strategic Negotiations And Global Partnerships
**After:** ## Strategic negotiations and global partnerships

---

### 18. Emojis

**Before:** 🚀 **Launch Phase:** The product launches in Q3
**After:** The product launches in Q3.

---

### 19. Curly quotation marks

**Before:** He said "the project is on track" but others disagreed.
**After:** He said "the project is on track" but others disagreed. (straight quotes)

---

## COMMUNICATION PATTERNS

### 20. Collaborative chatbot artifacts

**Watch:** "I hope this helps", "Of course!", "Certainly!", "You're absolutely right!", "Would you like…", "let me know", "here is a…".

**Before:** Here is an overview of the French Revolution. I hope this helps! Let me know if you'd like me to expand on any section.
**After:** The French Revolution began in 1789 when financial crisis and food shortages led to widespread unrest.

---

### 21. Knowledge-cutoff disclaimers

**Watch:** "as of [date]", "Up to my last training update", "While specific details are limited/scarce…", "based on available information…".

**Before:** While specific details about the company's founding are not extensively documented in readily available sources, it appears to have been established sometime in the 1990s.
**After:** The company was founded in 1994, according to its registration documents.

---

### 22. Sycophantic / servile tone

**Before:** Great question! You're absolutely right that this is a complex topic. That's an excellent point about the economic factors.
**After:** The economic factors you mentioned are relevant here.

---

## FILLER AND HEDGING

### 23. Filler phrases

| Before | After |
|---|---|
| In order to achieve this goal | To achieve this |
| Due to the fact that it was raining | Because it was raining |
| At this point in time | Now |
| In the event that you need help | If you need help |
| The system has the ability to process | The system can process |
| It is important to note that the data shows | The data shows |

---

### 24. Excessive hedging

**Before:** It could potentially possibly be argued that the policy might have some effect on outcomes.
**After:** The policy may affect outcomes.

---

### 25. Generic positive conclusions

**Before:** The future looks bright for the company. Exciting times lie ahead as they continue their journey toward excellence.
**After:** The company plans to open two more locations next year.

---

### 26. Hyphenated word-pair overuse

**Watch:** third-party, cross-functional, client-facing, data-driven, decision-making, well-known, high-quality, real-time, long-term, end-to-end.

**Why it's a tell:** AI hyphenates common word pairs with perfect consistency. Humans rarely hyphenate these uniformly. Less common technical compound modifiers are fine.

**Before:** The cross-functional team delivered a high-quality, data-driven report on our client-facing tools.
**After:** The cross functional team delivered a high quality, data driven report on our client facing tools.

---

### 27. Persuasive-authority tropes

**Watch:** "The real question is…", "at its core…", "in reality…", "what really matters…", "fundamentally…", "the deeper issue…", "the heart of the matter".

**Before:** The real question is whether teams can adapt. At its core, what really matters is organisational readiness.
**After:** The question is whether teams can adapt. That mostly depends on whether the organisation is ready to change its habits.

---

### 28. Signposting / announcements

**Watch:** "Let's dive in", "let's explore", "let's break this down", "here's what you need to know", "now let's look at", "without further ado".

**Before:** Let's dive into how caching works in Next.js. Here's what you need to know.
**After:** Next.js caches data at multiple layers: request memoisation, the data cache, and the router cache.

---

### 29. Fragmented headers

**Why it's a tell:** LLMs add a generic one-line restatement under each heading before the real content begins.

**Before:**
> ## Performance
>
> Speed matters.
>
> When users hit a slow page, they leave.

**After:**
> ## Performance
>
> When users hit a slow page, they leave.

---

## How to use this file

When auditing, walk top-to-bottom and tally hits. A typical AI-generated draft hits 8–15 of these. Rewrite each one according to its before/after. Don't try to "soften" — replace fully.

If the input is local-business content (homepage, service, location, combo, blog for this project), also load `quick-rules.md` for the stricter project list, which adds local-business-specific phrases this file doesn't cover (e.g. "we pride ourselves on", "your trusted partner", "competitive prices", "peace of mind").
