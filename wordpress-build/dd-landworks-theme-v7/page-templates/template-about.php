<?php
/**
 * Template Name: About Page
 * Template Post Type: page
 */
get_header();
?>
<main>

  <section class="about-page-hero">
    <div class="about-page-hero__inner">
      <div>
        <p class="section-label" style="color:var(--color-accent-light);margin-bottom:1.25rem;">About D&amp;D Land Works</p>
        <h1 class="about-page-hero__h1">
          <span class="light">Owner-Operated</span>
          <span class="bold">Excavation Contractor</span>
        </h1>
        <p class="about-page-hero__body" style="margin-top:1.25rem;">
          D&amp;D Land Works is owned and operated by David Deggelman. We handle excavation, site preparation, grading, land clearing, drainage, septic work, and driveway repair for residential and commercial properties across Lane County, Oregon.
        </p>
        <div style="margin-top:2rem;display:flex;flex-wrap:wrap;gap:1rem;">
          <a href="/contact" class="btn btn-cta">Get a Free Estimate</a>
          <a href="tel:5414018726" class="btn btn-outline-white">Call 541-401-8726</a>
        </div>
      </div>
      <div>
        <img
          src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/project-site-excavation.webp?v=2"
          alt="David Deggelman, owner of D&amp;D Land Works"
          class="about-page-hero__img"
          loading="lazy"
        />
      </div>
    </div>
  </section>

  <!-- Trust signals -->
  <section style="background:#fff;border-bottom:1px solid #f1f5f9;">
    <div style="max-width:var(--max-w);margin-inline:auto;padding:4rem 1.5rem;">
      <div style="display:grid;gap:2rem;" class="trust-grid-3">
        <div style="text-align:center;padding:2rem;background:var(--color-cream);border-radius:var(--radius-card);">
          <p style="font-family:var(--font-display);font-weight:700;font-size:2rem;color:var(--color-ink);">CCB #261742</p>
          <p style="color:#475569;margin-top:0.5rem;">Licensed &amp; Bonded in Oregon</p>
        </div>
        <div style="text-align:center;padding:2rem;background:var(--color-cream);border-radius:var(--radius-card);">
          <p style="font-family:var(--font-display);font-weight:700;font-size:2rem;color:var(--color-brand-blue);">DEQ Certified</p>
          <p style="color:#475569;margin-top:0.5rem;">PLC# 39996</p>
        </div>
        <div style="text-align:center;padding:2rem;background:var(--color-cream);border-radius:var(--radius-card);">
          <p style="font-family:var(--font-display);font-weight:700;font-size:2rem;color:var(--color-ink);">Free Estimates</p>
          <p style="color:#475569;margin-top:0.5rem;">On-site, no obligation</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Page content (WP editor) -->
  <?php while ( have_posts() ) : the_post(); ?>
    <?php $content = get_the_content(); ?>
    <?php if ( $content ) : ?>
      <section style="background:#fff;">
        <div class="page-content">
          <?php the_content(); ?>
        </div>
      </section>
    <?php else : ?>
      <section style="background:#fff;">
        <div class="page-content">
          <h2>About David Deggelman</h2>
          <p>David Deggelman is the owner and operator of D&amp;D Land Works. He works directly with property owners, builders, and commercial customers on excavation, grading, site preparation, and related projects across Lane County, Oregon.</p>
          <p>Every property is different. Before any work starts, David looks at the ground conditions, slope, drainage, soil, access, and nearby structures. These conditions shape the scope of work needed.</p>
          <h2>What We Do</h2>
          <p>D&amp;D Land Works handles:</p>
          <ul>
            <li>Site preparation and land clearing</li>
            <li>Excavation for foundations, utilities, and drainage</li>
            <li>Grading and leveling</li>
            <li>Driveway repair and regrading</li>
            <li>Slope stabilization</li>
            <li>Septic installation and repair — DEQ Certified, PLC# 39996</li>
            <li>Trenching and backfill</li>
          </ul>
          <h2>Service Area</h2>
          <p>We serve Eugene, Springfield, Cottage Grove, Junction City, Creswell, Veneta, Florence, Oakridge, Coburg, Lowell, and the broader Lane County area.</p>
        </div>
      </section>
    <?php endif; ?>
  <?php endwhile; ?>

  <!-- CTA -->
  <section class="estimate-section" style="background:var(--color-ink);">
    <div class="estimate-section__overlay" aria-hidden="true" style="background:none;"></div>
    <div class="estimate-section__inner">
      <div>
        <p class="section-label estimate-section__eyebrow">Free Estimate</p>
        <h2 class="estimate-section__h2">
          <span class="light">Ready to discuss</span>
          <span class="bold">your project?</span>
        </h2>
        <p class="estimate-section__sub">Call or text David directly to discuss your property. Free on-site estimates for all excavation and site preparation projects across Lane County.</p>
        <div class="contact-links">
          <a href="tel:5414018726" class="contact-link">
            <span class="contact-link__icon contact-link__icon--accent">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"><path d="M6.6 10.8c1.4 2.8 3.8 5.2 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.9 21 3 13.1 3 3c0-.6.4-1 1-1h3.2c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.4 0 .8-.2 1L6.6 10.8z" /></svg>
            </span>
            <div>
              <p class="contact-link__hint">Call or text</p>
              <p class="contact-link__value contact-link__value--lg">541-401-8726</p>
            </div>
          </a>
        </div>
      </div>
      <div style="display:flex;flex-direction:column;gap:1rem;align-items:flex-start;">
        <a href="/contact" class="btn btn-cta btn-lg">Request a Free Estimate</a>
        <a href="/services" class="btn btn-outline-white">View Our Services</a>
      </div>
    </div>
  </section>

</main>
<?php get_footer(); ?>
