# Burstiness & perplexity — how detectors actually work

Every modern AI-text detector (GPTZero, Originality.ai, Copyleaks, Turnitin, ZeroGPT, Pangram) is built on two metrics. If you understand them, you can move text from "almost certainly AI" to "almost certainly human" without changing meaning.

This file gives you (a) the definitions, (b) the targets, and (c) the rewriting rules that move each metric the right way.

---

## 1. Perplexity — how surprising are the word choices?

**Definition.** Perplexity measures how predictable the next word is, given the previous words, under a language model's probability distribution. Low perplexity = predictable text (every next word is the one the model would have picked) = looks AI-generated. High perplexity = some words break the model's prediction = looks human.

**Rule of thumb.** GPTZero treats perplexity above ~85 as more likely than not human. Below 65 is a strong AI signal.

**What raises perplexity (good):**
- Concrete proper nouns the model wouldn't predict (named neighbourhoods, real client names with permission, specific tool models, real dates).
- Domain-specific jargon used correctly.
- Idioms, regionalisms, mild slang.
- Surprising sentence openers ("Honestly, …", "Look, …", "The annoying part is that …").
- Asides and parentheticals that don't follow the main argument's predicted path.
- Numbers with awkward specificity (47, not 50; 11 months, not "about a year").

**What lowers perplexity (bad — these are why AI text is detected):**
- Every Tier-1 AI word from `ai-vocabulary-tiers.md` (delve, tapestry, intricate, pivotal, testament, leverage…).
- Generic openers ("In today's…", "When it comes to…", "It is important to note…").
- Rounded numbers without specificity.
- Sentences that resolve exactly the way the previous sentence set up.

### Perplexity rewrite drill

For each sentence in the draft:
1. Read the first half. Predict the second half before reading it.
2. If your prediction matches the actual second half, that sentence has low perplexity — rewrite it so the second half is genuinely different from the obvious continuation.
3. Repeat for the next sentence.

Example:
- Before (predictable): "Our team is committed to providing the highest quality service to our valued customers."
- After (unpredictable): "We pick up our own phones. If we miss you, you get a call back the same day — sometimes from me, sometimes from Dave who runs the workshop."

---

## 2. Burstiness — how much do sentence lengths vary?

**Definition.** Burstiness is the variance of sentence lengths and structures across a passage. Humans naturally mix 3-word punchy sentences with 25+ word complex ones because the *idea* dictates the length. AI tokens stream out at near-median length because the model is averaging across its training distribution.

**Rule of thumb.** Across any 10 consecutive sentences, you should see:
- At least one sentence ≤ 7 words.
- At least one sentence ≥ 22 words.
- A spread (max − min) of at least 15 words.
- A coefficient of variation (stdev / mean) ≥ 0.5.

If your draft has 8 sentences in a row between 14 and 20 words, that's the AI fingerprint. Detectors flag it.

### Burstiness rewrite drill

1. Count words per sentence in the draft. Write them in a list: `[16, 18, 17, 19, 15, 18, 17, 16]`.
2. If the spread is < 15, the passage is too smooth.
3. Break it up. Pick one sentence and shatter it into a fragment: "16 words" becomes "Done. The rest came later."
4. Pick another and merge it with the next, adding subordinate clauses and a parenthetical so it lands at 25+ words.
5. Re-check the distribution.

### What humans actually do

- A short sentence after a long one creates emphasis. ("…and that pattern repeated across every audit we ran in 2024. Every single one.")
- A long sentence after a short one creates explanation. ("It works. The trick is that you frontload the part the customer actually cares about — the price — instead of burying it three paragraphs in.")
- Single-word sentences are legal. Hard. Stop.
- Fragments are legal. Especially in transitions. (Like this.)
- One-sentence paragraphs are legal. Use them when the sentence is the point.

### What AI does (avoid)

- Same-length runs (8+ sentences within a 4-word band).
- Every paragraph 3–5 sentences long.
- Every paragraph opens with a topic sentence.
- Every list item is the same length and structure.

---

## 3. The other signals detectors use

Burstiness and perplexity are the headline. Pangram and Originality.ai have added more recently:

- **N-gram fingerprinting.** Common AI 3-grams ("plays a crucial role", "in today's fast-paced", "stands as a testament", "in the realm of") trigger flags even if perplexity/burstiness pass. Eliminate these phrases entirely.
- **Punctuation distribution.** AI uses em dashes ~3× more than humans, semicolons ~2× more, and curly quotes ~95% of the time. Use straight quotes, regular dashes/commas, and minimal semicolons.
- **Paragraph-length variance.** Like sentence burstiness but at paragraph scale. Mix one-sentence paragraphs with five-sentence ones.
- **Hyperlink and citation density.** Genuinely human writing has either lots of links/citations (informational pieces) or none (opinion). AI defaults to vague middle.
- **Topic-sentence regularity.** AI starts paragraphs with thesis sentences. Humans often start with a hook, an aside, or jump in mid-thought.
- **List uniformity.** Three-item lists with identically-shaped items are a tell. Either two items or four, or three items with different grammar shapes.

---

## 4. The target distribution

After rewriting, the passage should hit these benchmarks:

| Metric | Target | How to check |
|---|---|---|
| Sentence-length spread | ≥ 15 words (max − min) over any 10 consecutive sentences | count manually or with a script |
| Sentences ≤ 7 words | At least 1 per 10 | count |
| Sentences ≥ 22 words | At least 1 per 10 | count |
| Coefficient of variation | ≥ 0.5 | stdev / mean |
| Tier-1 AI words | 0 per 500 words | grep against `ai-vocabulary-tiers.md` |
| Tier-2 AI words | ≤ 1 per 500 words | grep |
| Em dashes | 0 (project rule) | grep |
| Curly quotes | 0 | grep `[“”‘’]` |
| Paragraph-length spread | Mix 1-sentence to 5+-sentence paragraphs in any 6-paragraph window | manual scan |
| Three-item lists per 500 words | ≤ 1 | manual scan |

If you have shell access, here's a quick burstiness check (run from the project root):

```bash
python3 -c "
import sys, re, statistics
t = sys.stdin.read()
sents = [s.strip() for s in re.split(r'(?<=[.!?])\s+', t) if s.strip()]
lens = [len(s.split()) for s in sents]
print(f'sentences: {len(lens)}')
print(f'min: {min(lens)}  max: {max(lens)}  mean: {statistics.mean(lens):.1f}  stdev: {statistics.stdev(lens):.1f}')
print(f'CV: {statistics.stdev(lens)/statistics.mean(lens):.2f}')
print(f'<=7 words: {sum(1 for l in lens if l <= 7)}')
print(f'>=22 words: {sum(1 for l in lens if l >= 22)}')
" < input.txt
```

---

## 5. Why this matters more than detector-gaming

If you write to optimise burstiness and perplexity honestly (real lived detail, varied structure, surprising specifics), you'll bypass detectors *and* the writing will actually be better. The detector outcome is a by-product of writing with voice, not the goal. Don't strip detail and call it "humanizing" — you'll fail the swap test and the read-aloud test even if a detector passes the result.

---

## Sources

- GPTZero — *What is perplexity & burstiness?* — https://gptzero.me/news/perplexity-and-burstiness-what-is-it/
- Originality.ai — *Perplexity and burstiness in writing* — https://originality.ai/blog/perplexity-and-burstiness-in-writing
- Pangram Labs — *Why perplexity and burstiness fail to detect AI* — https://www.pangram.com/blog/why-perplexity-and-burstiness-fail-to-detect-ai (good critique; useful for understanding what they catch and what they miss)
- Russell et al. 2025 — *People who frequently use ChatGPT for writing tasks are accurate and robust detectors of AI-generated text* — https://arxiv.org/abs/2501.15654
