/*
  DEMO/PLACEHOLDER blog data — no real posts exist for D&D Land Works yet.
  This backs the /blog listing and /blog/[slug] template design only.
  Replace with a real Astro content collection once actual posts exist (see
  CLAUDE.md's content workflow: /deep-research → /content-brief →
  content-create → humanizer → Astro content collection, astro-site-build-
  plan Phase 7). Images reuse the site's existing job-site photos on
  rotation, same as Gallery.astro. Only the first post has a full `body` /
  `faqs`, to demonstrate the single-post template — the rest render with
  just their excerpt until real content is written.
*/
export interface BlogPost {
  slug: string;
  title: string;
  excerpt: string;
  date: string;
  category: string;
  image: string;
  body?: { heading: string; paragraphs: string[] }[];
  faqs?: { question: string; answer: string }[];
}

export const images = ['/hero-bg-1.webp', '/hero-bg-2.webp', '/hero-bg-3.webp', '/hero-bg-4.webp'];

export const posts: BlogPost[] = [
  {
    slug: 'site-prep-101-before-foundation',
    title: 'Site Prep 101: What Happens Before the Foundation Goes In',
    excerpt: 'The order site work actually happens in, from clearing through final grade, before a foundation ever gets poured.',
    date: 'September 2, 2026',
    category: 'Site Preparation',
    image: images[0],
    body: [
      {
        heading: 'Why Site Prep Comes First',
        paragraphs: [
          'A foundation crew can only build on what the ground already is. Before anyone pours concrete or frames a wall, the lot has to be cleared, cut to grade, and compacted enough to hold weight. Skip that step or rush it, and the problems show up later as cracked slabs, settling corners, or water pooling against the house.',
          'Every lot is different, so the scope changes job to job. A wooded parcel might need trees cleared and stumps grubbed before anything else can happen. A lot that\'s already open might just need topsoil stripped and the pad cut to grade. D&D Land Works walks the site first and scopes it based on what\'s actually there, not a generic checklist.',
        ],
      },
      {
        heading: 'What Site Prep Actually Covers',
        paragraphs: [
          'Typical work includes clearing brush, trees, and debris from the build envelope; stripping and stockpiling topsoil for reuse in landscaping; cutting and filling to bring the pad to design grade; compacting subgrade to the density a foundation or driveway needs; staking corners and elevations so the build crew has reference points; and rough grading for drainage so water moves away from the structure instead of toward it.',
        ],
      },
      {
        heading: 'Equipment on the Job',
        paragraphs: [
          'Excavators handle clearing, cutting, and trenching. Dozers push and shape bulk material. Compactors run the subgrade down to spec before anything gets built on top of it. Which machines show up depends on lot size and terrain, a tight urban lot in Eugene needs different equipment than an acreage parcel outside Veneta with a steep approach.',
        ],
      },
      {
        heading: 'What Usually Comes Next',
        paragraphs: [
          'Site prep rarely happens alone. Most jobs roll straight into grading and leveling, and if the build includes a foundation, foundation excavation follows right after. Planning all three as one sequence, instead of three separate hires, is usually what keeps a project on schedule.',
        ],
      },
    ],
    faqs: [
      { question: 'How long does site prep take?', answer: 'It depends on lot size, how much clearing is needed, and access. A small residential lot that\'s already mostly open can take a day or two; a wooded acreage parcel with stump removal takes longer.' },
      { question: 'Do I need a permit for site prep?', answer: 'It depends on the scope and your jurisdiction. Ask when you get your estimate, David can tell you what applies to your specific project.' },
      { question: 'Can site prep happen in the rain?', answer: 'Some of it. Clearing and rough cuts can proceed, but compaction and final grading need workable soil moisture, so wet weather can push those steps back a few days.' },
    ],
  },
  {
    slug: 'excavation-cost-lane-county-oregon',
    title: 'How Much Does Excavation Cost in Lane County, Oregon?',
    excerpt: 'What actually drives the price of an excavation job, and why a flat "per hour" rate only tells half the story.',
    date: 'August 26, 2026',
    category: 'Cost Guides',
    image: images[1],
  },
  {
    slug: 'land-clearing-vs-brush-clearing',
    title: 'Land Clearing vs. Brush Clearing: What’s the Difference',
    excerpt: 'Two services that sound similar but solve different problems, and how to tell which one your property needs.',
    date: 'August 19, 2026',
    category: 'Land Clearing',
    image: images[2],
  },
  {
    slug: 'deq-certification-septic-install',
    title: 'What DEQ Certification Means for Your Septic Install',
    excerpt: 'Why a standard excavation license isn’t enough to legally install or repair a septic system in Oregon.',
    date: 'August 12, 2026',
    category: 'Septic Systems',
    image: images[3],
  },
  {
    slug: 'signs-your-yard-needs-drainage-work',
    title: 'Signs Your Yard Needs Drainage Work',
    excerpt: 'Standing water, soggy patches, and a soaked foundation line, what they usually mean and what actually fixes them.',
    date: 'August 5, 2026',
    category: 'Drainage',
    image: images[0],
  },
  {
    slug: 'grading-101-getting-slope-right',
    title: 'Grading 101: Getting the Slope Right the First Time',
    excerpt: 'Why grade matters more than it looks like it should, and what happens down the line when it’s off.',
    date: 'July 29, 2026',
    category: 'Grading',
    image: images[1],
  },
  {
    slug: 'utility-trenching-what-to-know',
    title: 'Utility Trenching: What to Know Before You Dig',
    excerpt: 'Call-before-you-dig rules, depth requirements, and why utility trenching is rarely a DIY weekend project.',
    date: 'July 22, 2026',
    category: 'Utility Excavation',
    image: images[2],
  },
  {
    slug: 'repair-vs-replace-damaged-driveway',
    title: 'When to Repair vs. Replace a Damaged Driveway',
    excerpt: 'Cracking, potholes, and drainage issues, the signs that separate a patch job from a full regrade.',
    date: 'July 15, 2026',
    category: 'Driveway Repair',
    image: images[3],
  },
  {
    slug: 'foundation-excavation-what-contractor-checks',
    title: 'Foundation Excavation: What a Contractor Checks Before Digging',
    excerpt: 'Soil type, slope, and buried utilities, the site checks that happen before the first bucket of dirt moves.',
    date: 'July 8, 2026',
    category: 'Foundation Excavation',
    image: images[0],
  },
  {
    slug: 'slope-stabilization-stopping-erosion',
    title: 'Slope Stabilization: Stopping Erosion Before It Starts',
    excerpt: 'How an eroding slope gets identified early, and the excavation work that actually holds it in place.',
    date: 'July 1, 2026',
    category: 'Slope Stabilization',
    image: images[1],
  },
  {
    slug: 'choosing-excavation-contractor-lane-county',
    title: 'Choosing an Excavation Contractor in Lane County',
    excerpt: 'What to check before hiring: license, bonding, certifications, and the questions worth asking upfront.',
    date: 'June 24, 2026',
    category: 'Hiring Guide',
    image: images[2],
  },
  {
    slug: 'free-estimates-what-to-expect',
    title: 'Free Estimates: What to Expect During a Site Walkthrough',
    excerpt: 'What David actually looks at on-site before a number goes on paper, and why it takes longer than a phone quote.',
    date: 'June 17, 2026',
    category: 'Estimates',
    image: images[3],
  },
];
