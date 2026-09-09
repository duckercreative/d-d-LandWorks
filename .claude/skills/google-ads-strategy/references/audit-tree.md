# Audit Decision Tree (use when CPL is rising)

When CPL spikes, work through these in order — most likely cause first.

```
CPL rising? Check in this order:
│
├── 1. Are conversions still being tracked correctly?
│     YES → continue
│     NO  → STOP. Fix tracking. CPL is meaningless until tracking is verified.
│
├── 2. Did seasonality change? (e.g., entering summer peak = +30-50% CPCs expected)
│     YES → expected, increase budget or tighten geo/schedule
│     NO  → continue
│
├── 3. Search Terms report — is junk traffic increasing?
│     YES → add negatives, tighten match types (drop Broad if you have it)
│     NO  → continue
│
├── 4. Quality Score — has it dropped on any high-spend keyword?
│     YES → Audit ad relevance (keyword in headlines?), LP experience (LCP <2.5s?), expected CTR
│     NO  → continue
│
├── 5. Lost IS (Rank) climbing? (= competitors outbidding you)
│     YES → raise tCPA 10-15%, improve QS to compete on CPC efficiency
│     NO  → continue
│
├── 6. Auto-applied recommendations turned themselves on?
│     YES → turn them OFF, undo any unintended match-type changes
│     NO  → continue
│
└── 7. PMax cannibalizing brand or branded-adjacent traffic?
      YES → add brand terms to PMax negatives
      NO  → escalate to manual creative/landing-page review
```
