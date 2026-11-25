<?php
/**
 * Template Name: Service Area Page
 * Template Post Type: page
 */
get_header();

$areas = [
  'Primary Coverage' => [
    [ 'city' => 'Eugene', 'href' => '/excavation-contractor-eugene-or', 'desc' => 'Excavation, grading, site prep, drainage, and land clearing in Eugene, OR.' ],
    [ 'city' => 'Springfield', 'href' => '/excavation-contractor-springfield-or', 'desc' => 'Site preparation, excavation, and grading services in Springfield, OR.' ],
    [ 'city' => 'Lane County', 'href' => '/service-area', 'desc' => 'Full service coverage throughout Lane County, Oregon.' ],
  ],
  'Also Serving' => [
    [ 'city' => 'Cottage Grove', 'href' => '/excavation-contractor-cottage-grove-or', 'desc' => 'Excavation and site prep in Cottage Grove, OR.' ],
    [ 'city' => 'Junction City', 'href' => '/excavation-contractor-junction-city-or', 'desc' => 'Grading, clearing, and excavation in Junction City, OR.' ],
    [ 'city' => 'Creswell', 'href' => '/excavation-contractor-creswell-or', 'desc' => 'Site preparation and excavation in Creswell, OR.' ],
    [ 'city' => 'Veneta', 'href' => '/excavation-contractor-veneta-or', 'desc' => 'Land clearing and grading in Veneta, OR.' ],
  ],
  'Further Out' => [
    [ 'city' => 'Florence', 'href' => '/excavation-contractor-florence-or', 'desc' => 'Excavation services in Florence, OR.' ],
    [ 'city' => 'Oakridge', 'href' => '/locations/oakridge', 'desc' => 'Site work in Oakridge, OR.' ],
    [ 'city' => 'Coburg', 'href' => '/excavation-contractor-coburg-or', 'desc' => 'Grading and excavation in Coburg, OR.' ],
    [ 'city' => 'Lowell', 'href' => '/excavation-contractor-lowell-or', 'desc' => 'Site preparation in Lowell, OR.' ],
  ],
];
?>
<main>

  <div class="page-hero">
    <div class="page-hero__inner">
      <p class="section-label" style="color:var(--color-accent-light);margin-bottom:1.25rem;">D&amp;D Land Works</p>
      <h1 class="page-hero__h1">Excavation Services Throughout Lane County, Oregon</h1>
      <p class="page-hero__desc">D&amp;D Land Works provides excavation, grading, land clearing, drainage, and site preparation for residential and commercial properties across Lane County.</p>
    </div>
  </div>

  <section class="sa-page">
    <div class="sa-page__inner">

      <div style="display:grid;gap:3.5rem;margin-bottom:4rem;" class="sa-map-grid">
        <div>
          <h2 class="sa-page__h1">Lane County, Oregon</h2>
          <p class="sa-page__intro">We serve Eugene, Springfield, and communities throughout Lane County, from Cottage Grove in the south to Coburg in the north, Florence on the coast, and Oakridge to the east.</p>
          <a href="/contact" class="btn btn-cta">Get a Free Estimate</a>
        </div>
        <div class="area-section__map">
          <iframe
            title="D&amp;D Land Works service area &mdash; Lane County, Oregon"
            src="https://maps.google.com/maps?q=Lane+County,+Oregon&z=9&output=embed"
            width="100%"
            height="400"
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
      </div>

      <?php foreach ( $areas as $group => $cities ) : ?>
        <h2 style="font-family:var(--font-display);font-weight:600;font-size:1.25rem;text-transform:uppercase;letter-spacing:0.1em;color:rgba(22,25,27,0.5);margin-bottom:1.25rem;margin-top:2.5rem;">
          <?php echo esc_html( $group ); ?>
        </h2>
        <div class="sa-grid" style="margin-bottom:0;">
          <?php foreach ( $cities as $a ) : ?>
            <div class="sa-card">
              <h3 class="sa-card__title"><?php echo esc_html( $a['city'] ); ?>, OR</h3>
              <p class="sa-card__desc"><?php echo esc_html( $a['desc'] ); ?></p>
              <a href="<?php echo esc_url( $a['href'] ); ?>" class="sa-card__link">View details &rarr;</a>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endforeach; ?>

    </div>
  </section>

  <!-- CTA -->
  <section style="background:var(--color-ink);color:#fff;padding:5rem 1.5rem;">
    <div style="max-width:var(--max-w);margin-inline:auto;text-align:center;">
      <p class="section-label" style="color:var(--color-accent-light);justify-content:center;margin-bottom:1.5rem;">Not sure if we cover your area?</p>
      <h2 style="font-family:var(--font-display);font-size:clamp(2rem,4.5vw,3rem);font-weight:600;color:#fff;margin-bottom:1.5rem;">Call David and ask.</h2>
      <p style="color:rgba(255,255,255,0.65);max-width:28rem;margin:0 auto 2rem;">If your project is in or near Lane County, chances are good we can help. Call or text 541-401-8726.</p>
      <div style="display:flex;justify-content:center;gap:1rem;flex-wrap:wrap;">
        <a href="tel:5414018726" class="btn btn-outline-white btn-lg">Call 541-401-8726</a>
        <a href="/contact" class="btn btn-cta btn-lg">Get a Free Estimate</a>
      </div>
    </div>
  </section>

</main>
<?php get_footer(); ?>
