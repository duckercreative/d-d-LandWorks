# Tiered AI-vocabulary blacklist with frequency multipliers

These words appear in AI-generated text at multiples of their human-corpus frequency. Tier 1 words (10×+) are near-certain AI signals; three of them in 500 words is sufficient for most detectors to flag the passage. Tier 2 (3–10×) are "smell" words that compound with other tells. Tier 3 (1.5–3×) are fine in isolation but should not cluster.

Multipliers come from corpus comparisons published by Pangram Labs, Originality.ai, and academic studies of post-2023 AI text (see sources at bottom). They're approximate but directionally accurate.

---

## TIER 1 — Eliminate completely (10×+ over human baseline)

These are the empirical bullseyes. If any of these appear in your draft, rewrite the sentence.

| Word | AI vs human freq | Human substitute |
|---|---:|---|
| delve | 48× | look at, dig into, get into, study |
| tapestry (figurative) | 35× | mix, range, set, blend |
| multifaceted | 28× | many-sided, complicated, has several parts |
| intricate / intricacies | 22× | detailed, complex, fine details |
| pivotal | 19× | key, important, central, crucial only sparingly |
| testament | 18× | proof, sign, evidence |
| underscore (as verb) | 17× | show, prove, make clear |
| leverage (as verb) | 16× | use, draw on, apply |
| harness (as verb, figurative) | 15× | use, tap, channel |
| robust (figurative) | 14× | strong, reliable, solid, well-built |
| vibrant (figurative) | 14× | lively, busy, colourful, full of energy |
| landscape (abstract) | 13× | scene, field, world, market |
| seamless | 12× | smooth, without friction, simple |
| garner | 12× | get, collect, earn, win |
| foster (figurative) | 11× | build, encourage, support |
| nestled (figurative) | 11× | sits, located, found |
| navigate (figurative) | 10× | handle, work through, manage, deal with |

---

## TIER 2 — Cap at 1 per 500 words; replace if clustered (3–10×)

| Word | AI multiplier | Substitute |
|---|---:|---|
| crucial | 9× | important, key, the one thing that matters |
| ensure | 8× | make sure, see to it, guarantee where appropriate |
| facilitate | 8× | help, make easier, allow |
| utilise / utilize | 8× | use |
| streamline | 7× | simplify, speed up, cut steps from |
| optimise / optimize (figurative) | 7× | improve, tune, dial in |
| holistic | 7× | full, all-round, complete |
| comprehensive | 6× | full, covers everything, thorough |
| innovative | 6× | new, different, fresh |
| dynamic (figurative) | 6× | changing, fast-moving, active |
| versatile | 5× | works for several uses, flexible |
| spearhead | 5× | lead, run, head up |
| empower | 5× | help, give people the tools to |
| game-changer | 5× | big shift, real improvement, the thing that changed it |
| revolutionise / revolutionize | 5× | change, overhaul, redo |
| cutting-edge | 5× | new, modern, the latest |
| state-of-the-art | 5× | new, modern, best available |
| paradigm shift | 4× | big change, new way of working |
| ecosystem (figurative) | 4× | set of tools, network, market |
| meticulous | 4× | careful, painstaking, thorough |
| profound | 4× | deep, big, real |
| transformative | 4× | changes things, big impact |
| journey (figurative) | 4× | process, path, route, work |
| unlock (figurative) | 4× | get to, open up, access |
| elevate (figurative) | 4× | raise, lift, improve |
| beacon | 4× | example, model, leader |
| catalyst (figurative) | 3.5× | trigger, push, spark |
| paramount | 3.5× | most important, top priority |
| amplify | 3.5× | grow, boost, scale |
| myriad | 3.5× | many, lots of, a wide range of |
| plethora | 3.5× | many, lots, a wide range |
| culminate | 3× | end in, finish with, lead to |
| embark | 3× | start, begin, set off |
| forge | 3× | build, create, make |
| nuanced | 3× | subtle, complicated, has shades |
| paramount | 3× | top, most important |
| robustly | 3× | strongly, well, solidly |

---

## TIER 3 — Watch when clustering (1.5–3×)

These are not bad words. Humans use them. But AI uses them in *clusters* with the words above. If a paragraph has three Tier-2 words plus a Tier-3 cluster, rewrite.

actually, additionally, align with, alongside, ensure, exemplify, foster, fundamental, indeed, indicative, inherent, integral, inherently, instrumental, manifest (as verb), notably, particularly, prevalent, profound, salient, significant, substantial, subsequently, ultimately, valuable, vital.

---

## Banned phrases (compound tells)

These multi-word patterns are AI fingerprints even more reliably than single words, because they're 3-gram and 4-gram giveaways:

- "plays a crucial role"
- "stands as a testament to"
- "serves as a [reminder/foundation/catalyst]"
- "in today's [fast-paced / digital / interconnected / evolving] [world / landscape / environment]"
- "in the realm of"
- "in the world of"
- "navigate the complexities of"
- "harness the power of"
- "leverage [the / our] expertise"
- "unlock the [potential / power / secrets] of"
- "elevate your [business / experience / brand]"
- "transform your [business / life / approach]"
- "delivers a seamless experience"
- "tailored to your needs"
- "tailored solutions"
- "at the forefront of"
- "the cornerstone of"
- "a deep dive into"
- "let's dive in"
- "as we navigate"
- "in conclusion"
- "it is important to note"
- "it's worth noting"
- "when it comes to"
- "needless to say"
- "without a doubt"
- "rest assured"
- "we pride ourselves on"
- "our commitment to"
- "second to none"
- "best-in-class"
- "industry-leading"
- "cutting-edge solutions"
- "state-of-the-art technology"
- "world-class service"
- "your trusted partner"
- "we are dedicated to"
- "passion for excellence"
- "exceptional service"
- "unparalleled quality"
- "go above and beyond"

If the input contains any of these verbatim, rewrite the surrounding sentence completely. Don't try to paraphrase — replace the idea with a concrete fact.

---

## How to use this list

1. Run a literal find on the text against Tier 1 and the banned-phrase block. Any hit = rewrite that sentence.
2. Count Tier 2 hits. If > 1 per 500 words, prune.
3. Scan for Tier 3 clustering — three or more in one paragraph = rewrite.
4. After rewriting, re-run. Make sure your substitutions didn't just swap one cliché for another.

Example substitutions in context:

- **Before:** "Our team leverages cutting-edge technology to deliver a seamless experience tailored to your unique needs, ensuring that we navigate the complexities of your industry."
- **After:** "We use [name the specific tool] because it cuts the diagnostic time roughly in half. Your job gets a written estimate before we touch anything."

The substitution isn't word-for-word. It's idea-for-fact. That's the move.

---

## Sources

- Walter Writes — *Most common ChatGPT words to avoid in 2026* — https://walterwrites.ai/most-common-chatgpt-words-to-avoid/
- ThehumanizeAI — *47 Words That Trigger AI Detection [2026 List]* — https://thehumanizeai.pro/articles/words-phrases-that-trigger-ai-detection
- OliviaCal — *17 AI writing tells + AI Words Blacklist 2026* — https://www.oliviacal.com/post/ai-writing-tells
- Alston Antony — *300+ ChatGPT Overused Words list 2026* — https://alstonantony.com/seo-strategy/chatgpt-overused/
- Wikipedia: Signs of AI writing — https://en.wikipedia.org/wiki/Wikipedia:Signs_of_AI_writing
