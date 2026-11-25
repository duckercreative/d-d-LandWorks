<?php
/**
 * Template Name: Contact Page
 * Template Post Type: page
 */
get_header();
?>
<main>

  <!-- Hero -->
  <div class="page-hero">
    <div class="page-hero__inner">
      <p class="section-label" style="color:var(--color-accent-light);margin-bottom:1.25rem;">D&amp;D Land Works</p>
      <h1 class="page-hero__h1">Get a Free Estimate</h1>
      <p class="page-hero__desc">Contact D&amp;D Land Works to discuss your excavation, grading, or site preparation project in Lane County, Oregon.</p>
    </div>
  </div>

  <!-- Contact grid -->
  <section class="contact-page">
    <div class="contact-page__inner">

      <!-- Left: contact info -->
      <div>
        <h2 class="contact-info__h1">Let's Talk About Your Project</h2>
        <p class="contact-info__desc">David Deggelman works directly with property owners. Call, text, or email — he'll get back to you and set up a time to look at the property and give you a free estimate.</p>

        <div class="contact-detail">
          <span class="contact-detail__icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
              <path d="M6.6 10.8c1.4 2.8 3.8 5.2 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.9 21 3 13.1 3 3c0-.6.4-1 1-1h3.2c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.4 0 .8-.2 1L6.6 10.8z" />
            </svg>
          </span>
          <div>
            <p class="contact-detail__label">Phone / Text</p>
            <p class="contact-detail__value"><a href="tel:5414018726">541-401-8726</a></p>
          </div>
        </div>

        <div class="contact-detail">
          <span class="contact-detail__icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
          </span>
          <div>
            <p class="contact-detail__label">Email</p>
            <p class="contact-detail__value"><a href="mailto:david@ddlandworks.com">david@ddlandworks.com</a></p>
          </div>
        </div>

        <div class="contact-detail">
          <span class="contact-detail__icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </span>
          <div>
            <p class="contact-detail__label">Hours</p>
            <p class="contact-detail__value" style="font-size:1rem;font-family:var(--font-body);">Monday–Friday, 7am–5pm</p>
          </div>
        </div>

        <div style="margin-top:2rem;padding:1.5rem;background:#fff;border-radius:var(--radius-card);border:1px solid var(--color-cream-border);">
          <p style="font-size:0.875rem;font-family:var(--font-display);font-weight:600;text-transform:uppercase;letter-spacing:0.1em;color:rgba(22,25,27,0.4);margin-bottom:0.5rem;">License &amp; Certification</p>
          <p style="font-size:0.875rem;color:var(--color-ink);">CCB #261742 &mdash; Licensed &amp; Bonded in Oregon</p>
          <p style="font-size:0.875rem;color:var(--color-brand-blue);margin-top:0.25rem;">DEQ Certified — PLC# 39996</p>
        </div>
      </div>

      <!-- Right: form -->
      <div class="contact-form-card">
        <p class="contact-form-card__title">Request a Free Estimate</p>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php
          $content = get_the_content();
          if ( $content ) {
            the_content();
          } else {
          ?>
          <form action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="POST" class="estimate-form">
            <?php wp_nonce_field( 'ddlw_contact', 'ddlw_contact_nonce' ); ?>
            <input type="hidden" name="action" value="ddlw_contact_form" />
            <div class="form-row">
              <div class="form-group">
                <label class="form-label" for="c-name">Name</label>
                <input type="text" id="c-name" name="name" placeholder="Your name" class="form-input" required />
              </div>
              <div class="form-group">
                <label class="form-label" for="c-phone">Phone</label>
                <input type="tel" id="c-phone" name="phone" placeholder="541-xxx-xxxx" class="form-input" required />
              </div>
            </div>
            <div class="form-group">
              <label class="form-label" for="c-email">Email</label>
              <input type="email" id="c-email" name="email" placeholder="you@example.com" class="form-input" />
            </div>
            <div class="form-group">
              <label class="form-label" for="c-town">Town / Area</label>
              <input type="text" id="c-town" name="town" placeholder="Eugene, Cottage Grove, etc." class="form-input" />
            </div>
            <div class="form-group">
              <label class="form-label" for="c-project">Project Type</label>
              <select id="c-project" name="project" class="form-select">
                <option value="">Select a service&hellip;</option>
                <option>Site Preparation</option>
                <option>Land Clearing</option>
                <option>Grading &amp; Drainage</option>
                <option>Foundation Excavation</option>
                <option>Septic Installation or Repair</option>
                <option>Utility Trenching</option>
                <option>Driveway Repair</option>
                <option>Slope Stabilization</option>
                <option>Not sure yet</option>
              </select>
            </div>
            <div class="form-group">
              <label class="form-label" for="c-desc">Tell us about the property</label>
              <textarea id="c-desc" name="description" rows="4" placeholder="What's going on, what you need done, any access notes&hellip;" class="form-textarea"></textarea>
            </div>
            <button type="submit" class="btn btn-cta btn-lg form-submit">Send My Request</button>
            <p class="form-note">No spam. David will call you back directly.</p>
          </form>
          <?php } ?>
        <?php endwhile; endif; ?>
      </div>

    </div>
  </section>

</main>
<?php get_footer(); ?>
