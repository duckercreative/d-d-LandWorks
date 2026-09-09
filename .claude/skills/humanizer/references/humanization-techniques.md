# Humanization techniques — beyond pattern removal

Removing AI tells gets you to "clean but soulless". To get to "human", you need to *add* things: voice, opinion, lived detail, structural irregularity, and the kind of mild mess that signals a person was thinking while they typed. This file is the additive half of the skill.

---

## 1. Layered paraphrasing (the method)

Don't rewrite a paragraph in one pass. Pass it through three layers in order. Each layer fixes one class of problem and leaves the next layer something to work with.

### Layer 1 — Structure

Goal: break sentence-length uniformity and paragraph-shape uniformity.

- Count sentences per paragraph in the input. If every paragraph has 3–5 sentences, split or merge so the count varies (1, 5, 2, 6, 3 is more human than 4, 4, 4, 4, 4).
- Count words per sentence in each paragraph. Identify the median; smash one sentence down to <8 words and stretch another to 22+.
- Move the strongest sentence to either the start (hook) or the end (kicker). Humans do this for emphasis. AI buries it in the middle.
- Add one paragraph that's a single sentence. Or a single word. ("Maybe.")
- Reorder where reordering helps narrative flow over logical flow. Humans don't always present in the cleanest possible order. Sometimes they start with the consequence and explain backwards.

### Layer 2 — Vocabulary

Goal: every word a human writer in this register would actually use.

- Walk the Tier 1 list in `ai-vocabulary-tiers.md`. Find any. Replace with the suggested human substitute, but in context — don't blindly swap.
- Cap Tier 2 words at one per 500 words. Cut the rest.
- Replace copula-avoidance verbs ("serves as", "stands as", "represents", "features", "boasts") with "is" or "has".
- Replace abstract words with concrete ones wherever the meaning allows. "Solutions" → "the actual thing being sold". "Stakeholders" → name them. "Reach out" → "call" or "email".
- Cut filler phrases ("in order to" → "to"; "due to the fact that" → "because"; "at this point in time" → "now"; "it is important to note that" → just say it).

### Layer 3 — Voice

Goal: a reader can tell a person wrote this.

- Inject one mild defensible opinion per ~300 words. "Most local businesses skip this step because it's annoying, and they pay for it six months later when the reviews dry up."
- Add one piece of lived specificity per paragraph: a real number, a real place, a real time, a real piece of equipment. If you can't, the paragraph is too abstract — either anchor it or cut it.
- Use first person where it fits. "We did this" / "I've seen this" / "we used to do X, now we do Y" are powerful humanizers.
- Acknowledge complexity. "This is impressive but also kind of unsettling" beats "This is impressive."
- Acknowledge uncertainty where honest. "I'm not 100% sure why this works, but it does."
- Let one tangent or aside in per piece. Humans drift.

---

## 2. Voice fingerprinting (when a sample is provided)

If the user gives you a sample of their own writing, read it before drafting. Build a fingerprint sheet, then write to match.

| Trait | What to note |
|---|---|
| Sentence-length pattern | mostly short? mostly long? mixed where (start, middle, end)? |
| Vocabulary register | casual / informal / formal / trade-specific / academic? |
| Punctuation habits | comma-heavy? lots of full stops? semicolons? parentheticals? em dashes (some humans do use them — note if they do)? |
| Paragraph entry | jump straight in? set context first? open with a question? |
| Recurring phrases | personal verbal tics ("look", "honestly", "the thing is", "fair enough") |
| Transitions | explicit connectors ("but", "so", "and") or just next sentence? |
| Hedging | high (lots of "might", "maybe", "I think") or low (declarative)? |
| First-person frequency | uses "I" / "we" / never? |
| Profanity / slang | yes / no / what level? |
| Citation behaviour | links and sources or no? |
| Humour | dry / earnest / self-deprecating / none? |

Don't generalise the sample into "human voice". Match the *specific* voice. If the sample is short and clipped, your rewrite must be short and clipped. If the sample is rambly and warm, match that.

If no sample is provided, default to: varied rhythm, mild opinionatedness, lived specificity, first-person where useful, no jargon unless the topic demands it, no profanity, no slang.

---

## 3. Experience injection

The most reliable humanizer is *real specificity*. AI generalizes because it's trained on the mean; humans drop specifics because they lived them. Adding specifics also pushes perplexity up (see `burstiness-perplexity.md` §1).

How to add specifics without inventing:
- Ask the user for the actual data when something feels generic. "How many [X] does the business actually do per month? What tool do they use? What year did they start?"
- If you're inside the Local SEO project, load `01-business-info/business-info.md` and `01-business-info/claims-registry.csv`. Only use claims listed there.
- If a claim isn't verified, *soften it* — don't invent. "We do hundreds of brake jobs a year" can become "We do brake jobs most days of the week" if the count isn't verified.
- Use *named places* over generic place words. "Crouch End" over "north London". "Bond Street tube" over "the nearest station".
- Use *named methods* over generic method words. "We torque to spec on every wheel" over "we follow best practices".

Never invent: client testimonials with names, certifications, year founded, awards, partnerships, specific projects with specific outcomes. These are legally risky and trivially falsifiable.

---

## 4. Imperfection patterns (the controlled-mess heuristic)

A small amount of mess is the strongest humanizer. Too much looks performative; the right amount looks like a real person.

Permitted imperfections:
- **One-sentence paragraphs.** Especially after a long paragraph that built up to it.
- **Conversational fragments.** "Worth it." "Most of the time, yeah." "Hard to say."
- **Non-rhetorical questions.** Actual questions you don't immediately answer. "Why doesn't every business do this? I think because it's slow."
- **Mid-paragraph pivots.** "We thought it was a battery issue. Turned out to be the alternator."
- **Parentheticals that add colour, not just info.** "(this is the bit nobody warns you about)"
- **Mild verbal tics.** "Honestly", "look", "the thing is", "fair enough", "either way".
- **Asymmetric lists.** Three items where one is a sentence and the other two are phrases.

Banned imperfections (these are AI mistakes pretending to be human):
- Random typos. Humans typo, but adding fake typos to look human is obvious.
- Random profanity in a professional-register piece.
- "Quirky" tics inserted mechanically every paragraph.
- The phrase "Look, the truth is…" — this is now itself an AI tell.

---

## 5. Anti-patterns (humanizing moves that don't work)

Common humanizer mistakes that fail audits:

- **Synonym-swapping.** Replacing "delve" with "explore in depth" replaces one AI word with two. The whole *idea* of delving has to go.
- **Adding contractions everywhere.** "Don't", "won't", "can't" used uniformly is a different AI tell. Mix them with full forms.
- **Adding "I think" before every claim.** Hedging-as-humanizer fails because the cadence becomes regular.
- **Adding emoji or exclamation marks.** These are AI tells in the other direction.
- **Stating that the writer is human.** "As a human writer…" is the single most AI-sounding sentence possible.
- **Cliché informality.** "TL;DR", "in a nutshell", "to make a long story short" are themselves overused AI phrases.
- **Aggressive negation.** "Forget what you've heard about X" / "the truth is" / "what they don't tell you" — these are AI persuasion tropes (Wikipedia pattern #27).

---

## 6. The final-pass audit (always run this)

After Layer 1+2+3, before delivering, do the audit:

1. **Read the draft aloud in your head.** Any sentence that sounds unnatural spoken? Mark it.
2. **Apply the swap test.** Replace the subject with a competitor / different topic / different city. If the piece still reads without rewrite, it's too generic.
3. **Apply the prediction test.** Cover the second half of each sentence; predict it. If you predict correctly, the sentence is too low-perplexity.
4. **Run the AI-tell question.** Literally ask: "What makes the below still sound obviously AI-generated?" Be honest. Look for residual rhythm, hidden Tier-2 words you missed, list-of-three you left, summary-style closer.
5. **Rewrite the failing spots.** Don't patch — rewrite from the failing sentence forward.

This second pass is the deliverable. Always do it. The first draft after pattern-removal alone is almost never enough.

---

## 7. The cadence cheat sheet

A quick reference for natural cadence. Across any 6 consecutive sentences, you should hit at least three of these:

- One ≤ 7 words.
- One ≥ 22 words.
- One that ends in a single-word fragment.
- One that opens with a conjunction (And, But, So) — yes, this is fine in modern writing.
- One that contains a parenthetical aside.
- One that contains a non-rhetorical question.

If you hit fewer than three, the passage is too smooth.

---

## 8. When humanizing local-business content

Within this project (Local SEO Web Architect), humanizing has stricter constraints. Load `.claude/skills/content-generation/references/quick-rules.md` and follow these alongside:

- Every section needs a concrete local detail (named neighbourhood, street, landmark, condition).
- Voice per page type is fixed (homepage = owner at networking event; service = experienced tradesperson; etc.).
- Specificity counts per page type are hard minimums (8 details for homepage, 10 for service, 12 for location).
- E-E-A-T signal counts are hard minimums.
- All factual claims must trace to `01-business-info/claims-registry.csv`.
- The 5-Point Human Test (Swap / Read-aloud / Specificity / Pattern / Expert) is the acceptance test.

The humanizer's job inside the project is: turn passing-but-flat content into voice-rich content without breaking any of the above constraints. If a humanization move would violate a project rule (e.g. adding an invented certification to look "specific"), don't make it.

---

## Sources

- Anangsha Alammyan — *I re-tested 30+ AI humanizers in 2026* — https://medium.com/freelancers-hub/i-tried-7-ai-humanizers-heres-the-best-tool-to-bypass-ai-detectors-628590da5ccf
- Surfer SEO — *How to avoid AI detection in writing (2026)* — https://surferseo.com/blog/avoid-ai-detection/
- Humanize AI Pro — *7 ways to avoid AI detection in writing* — https://www.humanizeai.pro/blog/7-ways-to-avoid-ai-detection-in-writing
- Russell et al. 2025 — *People who frequently use ChatGPT for writing tasks are accurate and robust detectors of AI-generated text* — https://arxiv.org/abs/2501.15654 (the most useful single paper here — it documents what *experienced* readers actually catch)
- Wikipedia: Signs of AI writing — https://en.wikipedia.org/wiki/Wikipedia:Signs_of_AI_writing
