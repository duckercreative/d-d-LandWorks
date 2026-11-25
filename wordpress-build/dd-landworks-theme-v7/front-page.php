<?php
/**
 * Homepage template — front-page.php
 * Exact port of site/src/pages/index.astro
 */
get_header();
?>

<!-- ═══════════════════════════════════════════════════════
     HERO  (full-bleed)
════════════════════════════════════════════════════════════ -->
<section class="hero-fullbleed">
  <img
    src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero-excavator-pond.webp"
    alt=""
    aria-hidden="true"
    class="hero-fullbleed__bg"
    loading="eager"
  />
  <div class="hero-fullbleed__overlay" aria-hidden="true"></div>
  <div class="hero-fullbleed__bottom-fade" aria-hidden="true"></div>

  <div class="hero-fullbleed__copy">
    <p class="section-label hero-fullbleed__eyebrow">Lane County, OR</p>
    <h1 class="hero-fullbleed__h1">
      <span class="light">Licensed Excavation Contractor</span>
      <span class="bold">in Lane County, Oregon</span>
    </h1>
    <p class="hero-fullbleed__sub">
      D&amp;D Land Works is a licensed excavation contractor serving Eugene and Lane County, Oregon. We handle site preparation, grading, land clearing, foundation excavation, drainage, utility excavation, trenching, septic work, driveway repair, and slope stabilization for residential and commercial properties.
    </p>
    <div class="hero-fullbleed__ctas">
      <a href="/contact" class="btn btn-cta btn-lg">Request a Free Estimate</a>
      <a href="#services" class="btn btn-outline-white">Our Services</a>
    </div>
  </div>

  <!-- Trust strip -->
  <div class="trust-strip">
    <div class="trust-strip__inner">
      <div class="trust-item">
        <span class="trust-item__label">CCB #261742</span>
        <span class="trust-item__sub">Licensed &amp; Bonded</span>
      </div>
      <div class="trust-item">
        <span class="trust-item__label trust-item__label--accent">DEQ Certified</span>
        <span class="trust-item__sub trust-item__sub--accent">PLC# 39996</span>
      </div>
      <div class="trust-item">
        <span class="trust-item__label">Free Estimates</span>
        <span class="trust-item__sub">On-site, no obligation</span>
      </div>
      <div class="trust-item">
        <span class="trust-item__label">Residential &amp; Commercial</span>
        <span class="trust-item__sub">Lane County, OR</span>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     ABOUT / OWNER
════════════════════════════════════════════════════════════ -->
<section class="about-section">
  <div class="about-section__inner">

    <!-- Text -->
    <div>
      <p class="section-label about-section__eyebrow">About D&amp;D Land Works</p>
      <h2 class="about-section__h2">
        <span class="light">Owner-Operated Excavation</span>
        <span class="bold">Contractor Serving Lane County</span>
      </h2>
      <div class="about-section__body">
        <p>David Deggelman works directly with property owners to understand what needs to be done. Every property is different. The ground, access, drainage, slope, and existing work can all change the job. We look at those conditions before deciding what work is needed.</p>
        <p>D&amp;D Land Works helps with excavation and site work across Lane County. This includes site preparation, brush clearing, grading, foundation excavation, drainage excavation, utility excavation, trenching, septic work, driveway repair, and slope stabilization.</p>
        <p>We work with homeowners, property owners, builders, and commercial customers in Eugene, Springfield, Cottage Grove, Junction City, Creswell, Veneta, Florence, Oakridge, Coburg, Lowell, and Lane County and surrounding areas.</p>
      </div>
      <ul class="about-section__checklist">
        <li class="check-item">
          <span class="check-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
            </svg>
          </span>
          <span>Licensed &amp; Bonded &mdash; CCB #261742</span>
        </li>
        <li class="check-item">
          <span class="check-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
            </svg>
          </span>
          <span>Septic installation &amp; repair &mdash; DEQ Certified, PLC# 39996</span>
        </li>
        <li class="check-item">
          <span class="check-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
            </svg>
          </span>
          <span>Serving Eugene, Springfield, and all of Lane County</span>
        </li>
      </ul>
      <a href="/about" class="btn btn-cta" style="margin-top:2rem;display:inline-flex;">Learn More About D&amp;D Land Works</a>
    </div>

    <!-- Image -->
    <div class="about-section__img-wrap">
      <img
        src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/project-site-excavation.webp?v=2"
        alt="David Deggelman, owner of D&amp;D Land Works, operating excavation equipment in Lane County Oregon"
        class="about-section__img"
        loading="lazy"
      />
      <div class="about-section__badge">
        <div>
          <p class="about-section__badge-label">CCB #261742</p>
          <p class="about-section__badge-sub">Licensed &amp; Bonded &middot; Oregon</p>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     SERVICES
════════════════════════════════════════════════════════════ -->
<section id="services" class="services-section">
  <div class="services-section__inner">

    <!-- Top: image + heading -->
    <div class="services-section__top">
      <img
        src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/project-grading-driveway.webp?v=2"
        alt="Excavation and grading work on a Lane County Oregon property"
        class="services-section__img"
        loading="lazy"
      />
      <div>
        <p class="section-label services-section__eyebrow">Our Services</p>
        <h2 class="services-section__h2">
          <span class="light">Complete Excavation &amp;</span>
          <span class="bold">Site Preparation Services</span>
        </h2>
        <p class="services-section__desc">
          Every property has different ground, access and drainage. D&amp;D Land Works handles excavation and site work at any scale &mdash; from a single trench to full-site clearing, grading and foundation work.
        </p>
      </div>
    </div>

    <!-- Services 2-col grid (01–10) -->
    <div class="services-grid">

      <a href="/site-preparation-contractor-eugene-or" class="service-row">
        <span class="service-row__num">01</span>
        <span>
          <span class="service-row__title">Site Preparation</span>
          <span class="service-row__desc">Clearing, cut and fill, and pad prep so your builder starts on solid, level ground.</span>
        </span>
        <svg class="service-row__icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M8 7h9v9" />
        </svg>
      </a>

      <a href="/land-clearing-services-eugene-or" class="service-row">
        <span class="service-row__num">02</span>
        <span>
          <span class="service-row__title">Land &amp; Brush Clearing</span>
          <span class="service-row__desc">Blackberry, Scotch broom, stumps and overgrowth cleared back to usable ground.</span>
        </span>
        <svg class="service-row__icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M8 7h9v9" />
        </svg>
      </a>

      <a href="/land-grading-services-eugene-or" class="service-row">
        <span class="service-row__num">03</span>
        <span>
          <span class="service-row__title">Grading &amp; Leveling</span>
          <span class="service-row__desc">Uneven ground reshaped so water drains away and the area is usable again.</span>
        </span>
        <svg class="service-row__icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M8 7h9v9" />
        </svg>
      </a>

      <a href="/foundation-excavation-eugene-or" class="service-row">
        <span class="service-row__num">04</span>
        <span>
          <span class="service-row__title">Foundation Excavation</span>
          <span class="service-row__desc">Footings, basements and shop pads dug to plan and ready for forms.</span>
        </span>
        <svg class="service-row__icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M8 7h9v9" />
        </svg>
      </a>

      <a href="/drainage-installation-eugene-or" class="service-row">
        <span class="service-row__num">05</span>
        <span>
          <span class="service-row__title">Drainage Excavation</span>
          <span class="service-row__desc">Channels and trenches that move winter water away from homes and driveways.</span>
        </span>
        <svg class="service-row__icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M8 7h9v9" />
        </svg>
      </a>

      <a href="/utility-trenching-eugene-or" class="service-row">
        <span class="service-row__num">06</span>
        <span>
          <span class="service-row__title">Utility Excavation</span>
          <span class="service-row__desc">Trenches dug for water, sewer, power and other underground lines.</span>
        </span>
        <svg class="service-row__icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M8 7h9v9" />
        </svg>
      </a>

      <a href="/utility-trenching-eugene-or" class="service-row">
        <span class="service-row__num">07</span>
        <span>
          <span class="service-row__title">Trenching &amp; Backfill</span>
          <span class="service-row__desc">Trenches dug to depth, then backfilled and compacted once the work is in.</span>
        </span>
        <svg class="service-row__icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M8 7h9v9" />
        </svg>
      </a>

      <a href="/septic-installation-lane-county-or" class="service-row">
        <span class="service-row__num">08</span>
        <span>
          <span class="service-row__title">
            Septic Installation &amp; Repair
          </span>
          <span class="service-row__desc">Excavation for new systems, repairs and drainfield work. DEQ Certified, PLC# 39996.</span>
        </span>
        <svg class="service-row__icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M8 7h9v9" />
        </svg>
      </a>

      <a href="/driveway-excavation-grading-eugene-or" class="service-row">
        <span class="service-row__num">09</span>
        <span>
          <span class="service-row__title">Driveway Repair</span>
          <span class="service-row__desc">Potholes, ruts and washouts regraded and crowned so the drive sheds water.</span>
        </span>
        <svg class="service-row__icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M8 7h9v9" />
        </svg>
      </a>

      <a href="/slope-stabilization-eugene-or" class="service-row">
        <span class="service-row__num">10</span>
        <span>
          <span class="service-row__title">Slope Stabilization</span>
          <span class="service-row__desc">Banks and hillsides reshaped and regraded where soil moves after heavy rain.</span>
        </span>
        <svg class="service-row__icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M8 7h9v9" />
        </svg>
      </a>

    </div><!-- .services-grid -->

    <div class="services-section__cta">
      <a href="/contact" class="btn btn-cta">Get a Free Estimate</a>
    </div>

  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     PROBLEMS WE FIX
════════════════════════════════════════════════════════════ -->
<section class="problems-section">
  <div class="problems-section__inner">

    <div class="problems-section__header">
      <div>
        <p class="section-label problems-section__eyebrow">Common Property Problems</p>
        <h2 class="problems-section__h2">
          <span class="light">Problems we help</span>
          <span class="bold">property owners solve.</span>
        </h2>
      </div>
      <p class="problems-section__aside">Every property is different. If your situation doesn't fit these, call David and he'll come take a look.</p>
    </div>

    <div class="problems-grid">

      <div class="problem-card">
        <span class="problem-card__tag">Clearing &amp; Prep</span>
        <h3 class="problem-card__title">Land That Needs Clearing or Preparation</h3>
        <p class="problem-card__desc">If your property is covered with brush or has uneven ground, it may need some work before you can build or improve it. We can clear the area, excavate where needed, and prepare the ground for the next step.</p>
        <a href="/site-preparation-contractor-eugene-or" class="problem-card__link">Site Preparation</a>
      </div>

      <div class="problem-card">
        <span class="problem-card__tag">Standing Water</span>
        <h3 class="problem-card__title">Standing Water and Poor Grading</h3>
        <p class="problem-card__desc">Water that collects around your home, driveway, or yard can make the ground muddy and hard to use. We can reshape the ground and improve the way water moves across the property.</p>
        <a href="/land-grading-services-eugene-or" class="problem-card__link">Grading &amp; Leveling</a>
      </div>

      <div class="problem-card">
        <span class="problem-card__tag">Slopes &amp; Runoff</span>
        <h3 class="problem-card__title">Drainage, Erosion, and Slopes</h3>
        <p class="problem-card__desc">Rain and runoff can move soil, damage slopes, and create wet areas. We can excavate, reshape, and regrade problem areas based on the ground and water conditions on your property.</p>
        <a href="/drainage-installation-eugene-or" class="problem-card__link">Drainage Excavation</a>
      </div>

      <div class="problem-card">
        <span class="problem-card__tag">Driveways</span>
        <h3 class="problem-card__title">Damaged Driveways and Site Access</h3>
        <p class="problem-card__desc">Ruts, washouts, and uneven ground make it hard to reach your property. We regrade and repair driveways and access roads so they drain properly and hold up through the wet season.</p>
        <a href="/driveway-excavation-grading-eugene-or" class="problem-card__link">Driveway Repair</a>
      </div>

    </div>

  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     RECENT WORK
════════════════════════════════════════════════════════════ -->
<section class="work-section">
  <div class="work-section__inner">

    <div class="work-section__header">
      <div>
        <p class="section-label work-section__eyebrow">Our Work</p>
        <h2 class="work-section__h2">
          <span class="light">Excavation &amp; Site Work</span>
          <span class="bold">Projects in Lane County</span>
        </h2>
      </div>
      <a href="/contact" class="btn btn-outline" style="flex-shrink:0;">Get a Free Estimate</a>
    </div>

    <div class="work-grid">
      <div class="work-item">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/after-lot.webp?v=3" alt="Cleared and graded open land — Lane County" loading="lazy" />
        <div class="work-item__overlay" aria-hidden="true"></div>
      </div>
      <div class="work-item">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/after-driveway.webp?v=3" alt="Repaired gravel driveway — Lane County" loading="lazy" />
        <div class="work-item__overlay" aria-hidden="true"></div>
      </div>
      <div class="work-item">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/project-grading-driveway.webp?v=3" alt="Finished gravel road — Lane County" loading="lazy" />
        <div class="work-item__overlay" aria-hidden="true"></div>
      </div>
    </div>

  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     PROCESS
════════════════════════════════════════════════════════════ -->
<section class="process-section">
  <div class="process-section__inner">

    <div class="process-section__heading">
      <p class="section-label process-section__eyebrow">How It Works</p>
      <h2 class="process-section__h2">
        <span class="light">How Your Excavation</span>
        <span class="bold">Project Gets Started</span>
      </h2>
    </div>

    <div class="process-grid">
      <div class="process-step">
        <span class="process-step__num">01</span>
        <hr />
        <p class="process-step__title">Talk About the Project</p>
        <p class="process-step__desc">We start by talking with you about your property and what you need done. We'll discuss the area, access, and the type of excavation or site work you have in mind.</p>
      </div>
      <div class="process-step">
        <span class="process-step__num">02</span>
        <hr />
        <p class="process-step__title">Look at the Property</p>
        <p class="process-step__desc">We look at the ground, slope, drainage, soil, access, and nearby structures or utilities. These conditions can change how the work needs to be done.</p>
      </div>
      <div class="process-step">
        <span class="process-step__num">03</span>
        <hr />
        <p class="process-step__title">Do the Site Work</p>
        <p class="process-step__desc">Once we know what the property needs, we complete the planned clearing, excavation, grading, trenching, drainage, or related work.</p>
      </div>
      <div class="process-step">
        <span class="process-step__num">04</span>
        <hr />
        <p class="process-step__title">Check the Finished Work</p>
        <p class="process-step__desc">When the work is done, we look over the area with the planned work in mind. We make sure the completed work matches what was discussed for the project.</p>
      </div>
    </div>

    <div class="process-section__cta">
      <a href="/contact" class="btn btn-cta">Start the Conversation</a>
    </div>

  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     REVIEWS
════════════════════════════════════════════════════════════ -->
<section class="reviews-section">
  <div class="reviews-section__inner">

    <div class="reviews-section__header">
      <p class="section-label reviews-section__eyebrow">What They Say</p>
      <h2 class="reviews-section__h2">
        <span class="light">What customers</span>
        <span class="bold">say about D&amp;D Land Works.</span>
      </h2>
    </div>

    <div class="reviews-grid reviews-grid--fb">

      <div class="review-card review-card--fb">
        <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fkris.hazelzimmerman%2Fposts%2Fpfbid02m1GKFzqvbS6zXQmBCkT4R4e9gDzPJztrnzm3RjKmJzxyv1m1BwhoT7F77zeFvKWl&show_text=true&width=500" width="500" height="400" style="border:none;overflow:hidden;" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
      </div>

      <div class="review-card review-card--fb">
        <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Flauren.zimmerman.9%2Fposts%2Fpfbid0sxmtPAyd9eZZ13kbPmRhahi7j2XJ4DbPTAz2dLiPYpYxz4RW8pw8aoCbGgUcjyzTl&show_text=true&width=500" width="500" height="500" style="border:none;overflow:hidden;" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
      </div>

      <div class="review-card review-card--fb">
        <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fkurt.suzuki.2025%2Fposts%2Fpfbid02LWRFAPEKJdH8BsuE2rrP5dECRUpfY5S97ftW54RbPDzo4gTJbHLytSSdwnPj17frl&show_text=true&width=500" width="500" height="380" style="border:none;overflow:hidden;" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
      </div>

    </div>

  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     SERVICE AREA
════════════════════════════════════════════════════════════ -->
<section class="area-section">
  <div class="area-section__inner">
    <div class="area-section__grid">

      <div>
        <p class="section-label area-section__eyebrow">Our Service Area</p>
        <h2 class="area-section__h2">
          <span class="light">Excavation Services</span>
          <span class="bold">Throughout Lane County, Oregon</span>
        </h2>
        <p class="area-section__desc">
          D&amp;D Land Works provides excavation, grading, and site preparation for residential and commercial properties across Lane County, including Eugene, Springfield, Cottage Grove, Junction City, Creswell, Veneta, Florence, Oakridge, Coburg, and Lowell.
        </p>
        <div class="area-pills">
          <a href="/excavation-contractor-eugene-or" class="area-pill">Eugene</a>
          <a href="/excavation-contractor-springfield-or" class="area-pill">Springfield</a>
          <a href="/excavation-contractor-cottage-grove-or" class="area-pill">Cottage Grove</a>
          <a href="/excavation-contractor-junction-city-or" class="area-pill">Junction City</a>
          <a href="/excavation-contractor-creswell-or" class="area-pill">Creswell</a>
          <a href="/excavation-contractor-veneta-or" class="area-pill">Veneta</a>
          <a href="/excavation-contractor-florence-or" class="area-pill">Florence</a>
          <a href="/locations/oakridge" class="area-pill">Oakridge</a>
          <a href="/excavation-contractor-coburg-or" class="area-pill">Coburg</a>
          <a href="/excavation-contractor-lowell-or" class="area-pill">Lowell</a>
        </div>
        <a href="/service-area" class="btn btn-cta">View Full Service Area</a>
      </div>

      <div class="area-section__map">
        <iframe
          title="D&amp;D Land Works service area &mdash; Lane County, Oregon"
          src="https://maps.google.com/maps?q=Lane+County,+Oregon&z=9&output=embed"
          width="100%"
          height="100%"
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </div>

    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     FAQ
════════════════════════════════════════════════════════════ -->
<section class="faq-section">
  <div class="faq-section__inner">
    <div class="faq-section__grid">

      <!-- Sidebar -->
      <div class="faq-section__sidebar">
        <p class="section-label faq-section__eyebrow">Common Questions</p>
        <h2 class="faq-section__h2">
          <span class="light">Common Questions About</span>
          <span class="bold">Excavation Services</span>
        </h2>
        <p class="faq-section__hint">Have a question not listed here? Call David directly &mdash; he's happy to talk through your project.</p>
        <a href="tel:5414018726" class="faq-phone-link">
          <span class="faq-phone-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
              <path d="M6.6 10.8c1.4 2.8 3.8 5.2 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.9 21 3 13.1 3 3c0-.6.4-1 1-1h3.2c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.4 0 .8-.2 1L6.6 10.8z" />
            </svg>
          </span>
          <div>
            <p class="faq-phone-hint">Call or text anytime</p>
            <p class="faq-phone-num">541-401-8726</p>
          </div>
        </a>
      </div>

      <!-- Accordion -->
      <div class="faq-accordion">

        <details>
          <summary>
            What Does an Excavation Contractor Do?
            <span class="faq-toggle">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 5v14M5 12h14" />
              </svg>
            </span>
          </summary>
          <p class="faq-answer">An excavation contractor prepares and changes ground for construction, drainage, utilities, foundations, access, septic work, and other property projects. D&amp;D Land Works handles excavation, clearing, grading, trenching, driveway repair, septic work, and related site preparation throughout Lane County.</p>
        </details>

        <details>
          <summary>
            Does D&amp;D Land Works Handle Septic Excavation?
            <span class="faq-toggle">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 5v14M5 12h14" />
              </svg>
            </span>
          </summary>
          <p class="faq-answer">Yes. D&amp;D Land Works handles septic installation and repair. D&amp;D Land Works holds DEQ certification (PLC# 39996) for septic work. Excavation is part of most septic projects, including system installation, repair, and access work.</p>
        </details>

        <details>
          <summary>
            What Should I Have Ready Before Requesting an Estimate?
            <span class="faq-toggle">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 5v14M5 12h14" />
              </svg>
            </span>
          </summary>
          <p class="faq-answer">It helps to know the property location, the type of work you need, existing access conditions, and any project timing you're working around. If you have plans or project documents, those can help clarify the scope, but you can start by telling us about the property and the work you need.</p>
        </details>

        <details>
          <summary>
            Is D&amp;D Land Works Licensed and Bonded?
            <span class="faq-toggle">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 5v14M5 12h14" />
              </svg>
            </span>
          </summary>
          <p class="faq-answer">Yes. D&amp;D Land Works is licensed and bonded in Oregon under Construction Contractors Board license #261742. Customers can verify Oregon contractor licensing through the Oregon CCB's official license lookup before hiring an excavation contractor for their project.</p>
        </details>

        <details>
          <summary>
            Does D&amp;D Land Works Provide Free Estimates?
            <span class="faq-toggle">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 5v14M5 12h14" />
              </svg>
            </span>
          </summary>
          <p class="faq-answer">Yes. D&amp;D Land Works provides free estimates for excavation and site preparation projects. The estimate can be based on the property's existing conditions, access, planned work, excavation requirements, drainage, utilities, and other factors affecting the project scope.</p>
        </details>

      </div><!-- .faq-accordion -->

    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     ESTIMATE CTA
════════════════════════════════════════════════════════════ -->
<section class="estimate-section">
  <img
    src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/project-finished-landscaping.webp?v=2"
    alt=""
    aria-hidden="true"
    class="estimate-section__bg"
    loading="lazy"
  />
  <div class="estimate-section__overlay" aria-hidden="true"></div>

  <div class="estimate-section__inner">

    <!-- Left: copy + contacts -->
    <div>
      <p class="section-label estimate-section__eyebrow">Free Estimate</p>
      <h2 class="estimate-section__h2">
        <span class="light">Get a Free Estimate</span>
        <span class="bold">From D&amp;D Land Works</span>
      </h2>
      <p class="estimate-section__sub">
        Planning excavation, site preparation, grading, land clearing, drainage, trenching, foundation excavation, driveway repair, or septic work in Lane County? Contact D&amp;D Land Works to discuss your property and project scope.
      </p>
      <div class="contact-links">
        <a href="tel:5414018726" class="contact-link">
          <span class="contact-link__icon contact-link__icon--accent">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
              <path d="M6.6 10.8c1.4 2.8 3.8 5.2 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.9 21 3 13.1 3 3c0-.6.4-1 1-1h3.2c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.4 0 .8-.2 1L6.6 10.8z" />
            </svg>
          </span>
          <div>
            <p class="contact-link__hint">Call or text</p>
            <p class="contact-link__value contact-link__value--lg">541-401-8726</p>
          </div>
        </a>
        <a href="mailto:david@ddlandworks.com" class="contact-link">
          <span class="contact-link__icon contact-link__icon--ghost">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
            </svg>
          </span>
          <div>
            <p class="contact-link__hint">Email</p>
            <p class="contact-link__value contact-link__value--sm">david@ddlandworks.com</p>
          </div>
        </a>
      </div>
    </div>

    <!-- Right: GHL form embed -->
    <div class="estimate-form-card estimate-form-card--ghl">
      <iframe
        src="https://api.leadconnectorhq.com/widget/form/T6bHSpa74GUV6Yk5ypOW"
        style="width:100%;height:650px;border:none;overflow:hidden;"
        id="inline-T6bHSpa74GUV6Yk5ypOW"
        data-layout="{'id':'INLINE'}"
        data-trigger-type="alwaysShow"
        data-trigger-value=""
        data-activation-type="alwaysActivated"
        data-activation-value=""
        data-deactivation-type="neverDeactivate"
        data-deactivation-value=""
        data-form-name="Website Form"
      ></iframe>
      <script src="https://link.msgsndr.com/js/form_embed.js" defer></script>
    </div>

  </div><!-- .estimate-section__inner -->
</section>

<?php get_footer(); ?>
