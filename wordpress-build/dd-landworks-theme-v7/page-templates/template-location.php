<?php
/**
 * Template Name: Location Page
 * Template Post Type: page
 *
 * Port of LocationPageTemplate.astro — all 10 sections driven by custom fields.
 *
 * String fields:
 *   loc_city, loc_county, loc_state
 *   loc_hero_image, loc_h1_light, loc_h1_bold, loc_sub
 *   loc_breadcrumb_label
 *   loc_intro_eyebrow, loc_intro_h2_light, loc_intro_h2_bold
 *   loc_david_quote, loc_intro_para1, loc_intro_para2, loc_intro_image
 *   loc_services_eyebrow, loc_services_h2_light, loc_services_h2_bold, loc_services_desc
 *   loc_when_eyebrow, loc_when_h2_light, loc_when_h2_bold, loc_when_desc
 *   loc_process_eyebrow, loc_process_h2_light, loc_process_h2_bold, loc_process_desc
 *   loc_why_h2_light, loc_why_h2_bold, loc_bento_image, loc_bento_image_alt
 *   loc_area_eyebrow, loc_area_h2_light, loc_area_h2_bold, loc_area_desc
 *   loc_faq_h2_light, loc_faq_h2_bold
 *   loc_related_eyebrow
 *   loc_cta_eyebrow, loc_cta_h2_light, loc_cta_h2_bold, loc_cta_sub, loc_cta_image
 *
 * JSON array fields:
 *   loc_facts_bar      — [{label, value}]
 *   loc_services       — [{num, title, desc, href}]
 *   loc_checklist_items — [{title, desc, href?}]
 *   loc_process_steps  — [{num, title, desc, dark?}]
 *   loc_bento_features — [{title, desc, dark?}]
 *   loc_area_links     — [{label, href}]
 *   loc_faq_items      — [{question, answer}]
 *   loc_related_services — [{title, desc, href}]
 */

get_header();

function ddlw_loc_cf( $key, $default = '' ) {
	global $post;
	$val = get_post_meta( $post->ID, $key, true );
	return $val !== '' ? $val : $default;
}
function ddlw_loc_cf_json( $key ) {
	$raw = ddlw_loc_cf( $key, '' );
	if ( ! $raw ) return [];
	$d = json_decode( $raw, true );
	return is_array( $d ) ? $d : [];
}

/* ── field values ─────────────────────────────────────────── */
$city    = ddlw_loc_cf( 'loc_city',   'Eugene' );
$county  = ddlw_loc_cf( 'loc_county', 'Lane County' );
$state   = ddlw_loc_cf( 'loc_state',  'Oregon' );

$hero_image  = ddlw_loc_cf( 'loc_hero_image', get_template_directory_uri() . '/assets/images/service-site-preparation.webp?v=2' );
$h1_light    = ddlw_loc_cf( 'loc_h1_light',   'Excavation Contractor' );
$h1_bold     = ddlw_loc_cf( 'loc_h1_bold',    "in {$city}, {$state}" );
$sub         = ddlw_loc_cf( 'loc_sub',         "D&D Land Works provides excavation, grading, land clearing, and site preparation services in {$city}, {$state}. Licensed and bonded — CCB #261742." );
$breadcrumb  = ddlw_loc_cf( 'loc_breadcrumb_label', $city );
$facts_bar   = ddlw_loc_cf_json( 'loc_facts_bar' );

$intro_eyebrow  = ddlw_loc_cf( 'loc_intro_eyebrow',   "{$city}'s Excavation Contractor" );
$intro_h2_light = ddlw_loc_cf( 'loc_intro_h2_light',  'Excavation Services for' );
$intro_h2_bold  = ddlw_loc_cf( 'loc_intro_h2_bold',   "Homes and Businesses in {$city}" );
$david_quote    = ddlw_loc_cf( 'loc_david_quote',      'I walk every site in person before I quote it.' );
$intro_para1    = ddlw_loc_cf( 'loc_intro_para1',      '' );
$intro_para2    = ddlw_loc_cf( 'loc_intro_para2',      '' );
$intro_image    = ddlw_loc_cf( 'loc_intro_image',      get_template_directory_uri() . '/assets/images/project-excavation-bucket.webp?v=2' );

$services_eyebrow  = ddlw_loc_cf( 'loc_services_eyebrow',  'Our services' );
$services_h2_light = ddlw_loc_cf( 'loc_services_h2_light', 'What does excavation' );
$services_h2_bold  = ddlw_loc_cf( 'loc_services_h2_bold',  'include?' );
$services_desc     = ddlw_loc_cf( 'loc_services_desc',      "The scope depends on your project — foundation depth, utility runs, drainage needs, and what the ground requires before anything else can be built." );
$services          = ddlw_loc_cf_json( 'loc_services' );
if ( ! $services ) {
	$services = [
		[ 'num' => '01', 'title' => 'Site Preparation',     'desc' => 'Clearing, grading, and pad prep for any build.',               'href' => '/site-preparation-contractor-eugene-or' ],
		[ 'num' => '02', 'title' => 'Land Clearing',        'desc' => 'Brush, stumps, and overgrowth removed efficiently.',           'href' => '/land-clearing-services-eugene-or' ],
		[ 'num' => '03', 'title' => 'Grading & Leveling',   'desc' => 'Ground reshaped for drainage and proper use.',                 'href' => '/land-grading-services-eugene-or' ],
		[ 'num' => '04', 'title' => 'Foundation Excavation','desc' => 'Footings and basement pads dug to your building plan.',        'href' => '/foundation-excavation-eugene-or' ],
		[ 'num' => '05', 'title' => 'Drainage Work',        'desc' => 'French drains, channels, and trenches for water management.',  'href' => '/drainage-installation-eugene-or' ],
		[ 'num' => '06', 'title' => 'Driveway Repair',      'desc' => 'Ruts and washouts regraded and properly crowned.',             'href' => '/driveway-excavation-grading-eugene-or' ],
	];
}

$when_eyebrow  = ddlw_loc_cf( 'loc_when_eyebrow',  "{$city} excavation" );
$when_h2_light = ddlw_loc_cf( 'loc_when_h2_light', "When does a {$city}" );
$when_h2_bold  = ddlw_loc_cf( 'loc_when_h2_bold',  'property need excavation?' );
$when_desc     = ddlw_loc_cf( 'loc_when_desc',      'You may need excavation when the existing ground does not fit the work you want to do.' );
$checklist     = ddlw_loc_cf_json( 'loc_checklist_items' );

$proc_eyebrow  = ddlw_loc_cf( 'loc_process_eyebrow',  'Getting started' );
$proc_h2_light = ddlw_loc_cf( 'loc_process_h2_light', "How your {$city}" );
$proc_h2_bold  = ddlw_loc_cf( 'loc_process_h2_bold',  'excavation project gets started' );
$proc_desc     = ddlw_loc_cf( 'loc_process_desc',      "You don't need to know the exact name of the service before you call. Describe what you have and what you're trying to do." );
$proc_steps    = ddlw_loc_cf_json( 'loc_process_steps' );

$why_h2_light   = ddlw_loc_cf( 'loc_why_h2_light',   "Why choose D&D Land Works" );
$why_h2_bold    = ddlw_loc_cf( 'loc_why_h2_bold',     "for excavation in {$city}?" );
$bento_image    = ddlw_loc_cf( 'loc_bento_image',     get_template_directory_uri() . '/assets/images/project-grading-driveway.webp?v=2' );
$bento_image_alt= ddlw_loc_cf( 'loc_bento_image_alt', "Excavation and grading work in {$city}" );
$bento_features = ddlw_loc_cf_json( 'loc_bento_features' );

$area_eyebrow  = ddlw_loc_cf( 'loc_area_eyebrow',  'Our service area' );
$area_h2_light = ddlw_loc_cf( 'loc_area_h2_light', "Excavation services in {$city}" );
$area_h2_bold  = ddlw_loc_cf( 'loc_area_h2_bold',  "and {$county}" );
$area_desc     = ddlw_loc_cf( 'loc_area_desc',      "D&D Land Works serves {$city}, Springfield, and surrounding {$county} communities. Call for a free on-site estimate." );
$area_links    = ddlw_loc_cf_json( 'loc_area_links' );

$faq_h2_light  = ddlw_loc_cf( 'loc_faq_h2_light', "Excavation in {$city}:" );
$faq_h2_bold   = ddlw_loc_cf( 'loc_faq_h2_bold',  'common questions' );
$faq_items     = ddlw_loc_cf_json( 'loc_faq_items' );

$related_eyebrow  = ddlw_loc_cf( 'loc_related_eyebrow', "Related services in {$city}" );
$related_services = ddlw_loc_cf_json( 'loc_related_services' );

$cta_eyebrow  = ddlw_loc_cf( 'loc_cta_eyebrow',  'Talk With David' );
$cta_h2_light = ddlw_loc_cf( 'loc_cta_h2_light', 'Need excavation work' );
$cta_h2_bold  = ddlw_loc_cf( 'loc_cta_h2_bold',  "in {$city}?" );
$cta_sub      = ddlw_loc_cf( 'loc_cta_sub',       "Call D&D Land Works at 541-401-8726 to talk through your project. Free on-site estimates." );
$cta_image    = ddlw_loc_cf( 'loc_cta_image',     get_template_directory_uri() . '/assets/images/service-site-preparation.webp?v=2' );

$img_base = get_template_directory_uri() . '/assets/images/';
?>

<main>

<!-- ══════════════════════════════════════════════════════
     1. HERO
     ══════════════════════════════════════════════════════ -->
<section class="service-hero">
  <div class="service-hero__grid">
    <div class="service-hero__copy">
      <nav aria-label="Breadcrumb" class="service-hero__breadcrumb">
        <a href="/">Home</a>
        <span>/</span>
        <a href="/service-area">Service Area</a>
        <span>/</span>
        <span style="color:#fff;"><?php echo esc_html( $breadcrumb ); ?></span>
      </nav>
      <div class="service-hero__eyebrow">
        <span class="service-hero__eyebrow-line" aria-hidden="true"></span>
        <?php echo esc_html( "$city, $state" ); ?>
      </div>
      <h1 class="service-hero__h1">
        <span class="light"><?php echo esc_html( $h1_light ); ?></span>
        <span class="bold"><?php echo esc_html( $h1_bold ); ?></span>
      </h1>
      <p class="service-hero__sub"><?php echo esc_html( $sub ); ?></p>
      <div class="service-hero__ctas">
        <a href="/contact" class="btn btn-cta">Get a Free Estimate</a>
        <a href="tel:5414018726" class="service-hero__cta-call">Call 541-401-8726</a>
      </div>
      <div class="service-hero__trust">
        <span><strong>CCB #261742</strong> Licensed &amp; Bonded</span>
        <span><strong>Free</strong> On-Site Estimates</span>
        <span><strong><?php echo esc_html( $city ); ?></strong> &amp; <?php echo esc_html( $county ); ?></span>
      </div>
    </div>
    <div class="service-hero__image-col">
      <div class="service-hero__image-wrap">
        <img src="<?php echo esc_url( $hero_image ); ?>" alt="Excavation contractor in <?php echo esc_attr( $city ); ?>, Oregon" />
      </div>
    </div>
  </div>
</section>

<!-- FACTS BAR -->
<?php if ( $facts_bar ) : ?>
<div class="loc-facts-bar">
  <div class="loc-facts-bar__inner">
    <?php foreach ( $facts_bar as $fact ) : ?>
      <div class="loc-fact">
        <span class="loc-fact__label"><?php echo esc_html( $fact['label'] ?? '' ); ?></span>
        <span class="loc-fact__value"><?php echo esc_html( $fact['value'] ?? '' ); ?></span>
      </div>
    <?php endforeach; ?>
  </div>
</div>
<?php endif; ?>

<!-- ══════════════════════════════════════════════════════
     2. LOCAL INTRO (cream)
     ══════════════════════════════════════════════════════ -->
<section class="loc-intro">
  <div class="loc-intro__inner">
    <div class="loc-intro__copy">
      <p class="section-label loc-intro__eyebrow"><?php echo esc_html( $intro_eyebrow ); ?></p>
      <h2 class="loc-intro__h2">
        <span class="light"><?php echo esc_html( $intro_h2_light ); ?></span>
        <span class="bold"><?php echo esc_html( $intro_h2_bold ); ?></span>
      </h2>
      <?php if ( $david_quote ) : ?>
        <blockquote class="loc-intro__quote">
          <p>&ldquo;<?php echo esc_html( $david_quote ); ?>&rdquo;</p>
          <cite>— David Deggelman, Owner, D&amp;D Land Works</cite>
        </blockquote>
      <?php endif; ?>
      <?php if ( $intro_para1 ) : ?><p class="loc-intro__para"><?php echo esc_html( $intro_para1 ); ?></p><?php endif; ?>
      <?php if ( $intro_para2 ) : ?><p class="loc-intro__para"><?php echo esc_html( $intro_para2 ); ?></p><?php endif; ?>
      <a href="/contact" class="btn btn-cta">Get a Free Estimate</a>
    </div>
    <div class="loc-intro__image-col">
      <img src="<?php echo esc_url( $intro_image ); ?>" alt="D&D Land Works excavation work in <?php echo esc_attr( $city ); ?>, Oregon" loading="lazy" />
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════
     3. SERVICES GRID (dark)
     ══════════════════════════════════════════════════════ -->
<section class="loc-services">
  <div class="loc-services__inner">
    <div class="loc-services__header">
      <p class="section-label loc-services__eyebrow"><?php echo esc_html( $services_eyebrow ); ?></p>
      <h2 class="loc-services__h2">
        <span class="light"><?php echo esc_html( $services_h2_light ); ?></span>
        <span class="bold"><?php echo esc_html( $services_h2_bold ); ?></span>
      </h2>
      <?php if ( $services_desc ) : ?>
        <p class="loc-services__desc"><?php echo esc_html( $services_desc ); ?></p>
      <?php endif; ?>
    </div>
    <div class="loc-services__grid">
      <?php foreach ( $services as $svc ) : ?>
        <div class="loc-svc-card">
          <span class="loc-svc-card__num"><?php echo esc_html( $svc['num'] ?? '' ); ?></span>
          <h3 class="loc-svc-card__title"><?php echo esc_html( $svc['title'] ?? '' ); ?></h3>
          <p class="loc-svc-card__desc"><?php echo esc_html( $svc['desc'] ?? '' ); ?></p>
          <?php if ( ! empty( $svc['href'] ) ) : ?>
            <a href="<?php echo esc_url( $svc['href'] ); ?>" class="loc-svc-card__link">
              Learn more
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6" /></svg>
            </a>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════
     4. WHEN DO YOU NEED IT (white)
     ══════════════════════════════════════════════════════ -->
<?php if ( $checklist ) : ?>
<section class="loc-when">
  <div class="loc-when__inner">
    <div class="loc-when__header">
      <p class="section-label loc-when__eyebrow"><?php echo esc_html( $when_eyebrow ); ?></p>
      <h2 class="loc-when__h2">
        <span class="light"><?php echo esc_html( $when_h2_light ); ?></span>
        <span class="bold"><?php echo esc_html( $when_h2_bold ); ?></span>
      </h2>
      <?php if ( $when_desc ) : ?>
        <p class="loc-when__desc"><?php echo esc_html( $when_desc ); ?></p>
      <?php endif; ?>
    </div>
    <div class="loc-when__grid">
      <?php foreach ( $checklist as $item ) : ?>
        <div class="loc-checklist-card">
          <h3 class="loc-checklist-card__title">
            <?php if ( ! empty( $item['href'] ) ) : ?>
              <a href="<?php echo esc_url( $item['href'] ); ?>"><?php echo esc_html( $item['title'] ?? '' ); ?></a>
            <?php else : ?>
              <?php echo esc_html( $item['title'] ?? '' ); ?>
            <?php endif; ?>
          </h3>
          <?php if ( ! empty( $item['desc'] ) ) : ?>
            <p class="loc-checklist-card__desc"><?php echo esc_html( $item['desc'] ); ?></p>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- ══════════════════════════════════════════════════════
     5. PROCESS (cream)
     ══════════════════════════════════════════════════════ -->
<?php if ( $proc_steps ) : ?>
<section class="loc-process">
  <div class="loc-process__inner">
    <div class="loc-process__header">
      <p class="section-label loc-process__eyebrow"><?php echo esc_html( $proc_eyebrow ); ?></p>
      <h2 class="loc-process__h2">
        <span class="light"><?php echo esc_html( $proc_h2_light ); ?></span>
        <span class="bold"><?php echo esc_html( $proc_h2_bold ); ?></span>
      </h2>
      <?php if ( $proc_desc ) : ?>
        <p class="loc-process__desc"><?php echo esc_html( $proc_desc ); ?></p>
      <?php endif; ?>
    </div>
    <div class="loc-process__steps">
      <?php foreach ( $proc_steps as $step ) : ?>
        <?php $is_dark = isset( $step['dark'] ) && $step['dark'] === 'true'; ?>
        <div class="loc-proc-step<?php echo $is_dark ? ' loc-proc-step--dark' : ''; ?>">
          <span class="loc-proc-step__num"><?php echo esc_html( $step['num'] ?? '' ); ?></span>
          <div class="loc-proc-step__body">
            <h3 class="loc-proc-step__title"><?php echo esc_html( $step['title'] ?? '' ); ?></h3>
            <p class="loc-proc-step__desc"><?php echo esc_html( $step['desc'] ?? '' ); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- ══════════════════════════════════════════════════════
     6. WHY CHOOSE — BENTO (white)
     ══════════════════════════════════════════════════════ -->
<section class="loc-bento">
  <div class="loc-bento__inner">
    <h2 class="loc-bento__h2">
      <span class="light"><?php echo esc_html( $why_h2_light ); ?></span>
      <span class="bold"><?php echo esc_html( $why_h2_bold ); ?></span>
    </h2>
    <div class="loc-bento__grid">
      <!-- Photo card (always shown) -->
      <div class="loc-bento__photo-card">
        <img src="<?php echo esc_url( $bento_image ); ?>" alt="<?php echo esc_attr( $bento_image_alt ); ?>" loading="lazy" />
      </div>
      <!-- Features -->
      <?php if ( $bento_features ) : ?>
        <?php foreach ( $bento_features as $feat ) : ?>
          <?php $is_dark = isset( $feat['dark'] ) && $feat['dark'] === 'true'; ?>
          <div class="loc-bento-feat<?php echo $is_dark ? ' loc-bento-feat--dark' : ''; ?>">
            <h3 class="loc-bento-feat__title"><?php echo esc_html( $feat['title'] ?? '' ); ?></h3>
            <p class="loc-bento-feat__desc"><?php echo esc_html( $feat['desc'] ?? '' ); ?></p>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
      <!-- Licensed & Bonded card (always shown) -->
      <div class="loc-bento-feat loc-bento-feat--license">
        <p class="loc-bento-feat__label">Licensed &amp; Bonded</p>
        <p class="loc-bento-feat__ccb">CCB #261742</p>
        <p class="loc-bento-feat__sub">Oregon Construction Contractors Board</p>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════
     7. SERVICE AREA (cream)
     ══════════════════════════════════════════════════════ -->
<section class="loc-area">
  <div class="loc-area__inner">
    <div class="loc-area__header">
      <p class="section-label loc-area__eyebrow"><?php echo esc_html( $area_eyebrow ); ?></p>
      <h2 class="loc-area__h2">
        <span class="light"><?php echo esc_html( $area_h2_light ); ?></span>
        <span class="bold"><?php echo esc_html( $area_h2_bold ); ?></span>
      </h2>
      <?php if ( $area_desc ) : ?>
        <p class="loc-area__desc"><?php echo esc_html( $area_desc ); ?></p>
      <?php endif; ?>
    </div>
    <?php if ( $area_links ) : ?>
      <div class="loc-area__links">
        <?php foreach ( $area_links as $link ) : ?>
          <a href="<?php echo esc_url( $link['href'] ?? '#' ); ?>" class="loc-area-pill">
            <?php echo esc_html( $link['label'] ?? '' ); ?>
          </a>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
    <div class="loc-area__cta">
      <a href="/contact" class="btn btn-cta">Get a Free Estimate</a>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════
     8. FAQ (white)
     ══════════════════════════════════════════════════════ -->
<?php if ( $faq_items ) : ?>
<section class="faq-section">
  <div class="faq-section__inner">
    <div class="faq-section__grid">
      <div class="faq-section__sidebar">
        <p class="section-label faq-section__eyebrow">Common Questions</p>
        <h2 class="faq-section__h2">
          <span class="light"><?php echo esc_html( $faq_h2_light ); ?></span>
          <span class="bold"><?php echo esc_html( $faq_h2_bold ); ?></span>
        </h2>
        <p class="faq-section__hint">Call David directly for questions about your specific property.</p>
        <a href="tel:5414018726" class="faq-phone-link">
          <span class="faq-phone-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"><path d="M6.6 10.8c1.4 2.8 3.8 5.2 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.9 21 3 13.1 3 3c0-.6.4-1 1-1h3.2c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.4 0 .8-.2 1L6.6 10.8z" /></svg>
          </span>
          <div>
            <p class="faq-phone-hint">Call or text anytime</p>
            <p class="faq-phone-num">541-401-8726</p>
          </div>
        </a>
      </div>
      <div class="faq-accordion">
        <?php foreach ( $faq_items as $faq ) : ?>
          <details>
            <summary>
              <?php echo esc_html( $faq['question'] ?? '' ); ?>
              <span class="faq-toggle">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 5v14M5 12h14" />
                </svg>
              </span>
            </summary>
            <p class="faq-answer"><?php echo esc_html( $faq['answer'] ?? '' ); ?></p>
          </details>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- ══════════════════════════════════════════════════════
     9. RELATED SERVICES (dark)
     ══════════════════════════════════════════════════════ -->
<?php if ( $related_services ) : ?>
<section class="loc-related">
  <div class="loc-related__inner">
    <p class="section-label loc-related__eyebrow"><?php echo esc_html( $related_eyebrow ); ?></p>
    <div class="loc-related__grid">
      <?php foreach ( $related_services as $rel ) : ?>
        <a href="<?php echo esc_url( $rel['href'] ?? '#' ); ?>" class="loc-related-card">
          <h3 class="loc-related-card__title"><?php echo esc_html( $rel['title'] ?? '' ); ?></h3>
          <?php if ( ! empty( $rel['desc'] ) ) : ?>
            <p class="loc-related-card__desc"><?php echo esc_html( $rel['desc'] ); ?></p>
          <?php endif; ?>
          <span class="loc-related-card__arrow" aria-hidden="true">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6" /></svg>
          </span>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- ══════════════════════════════════════════════════════
     10. FINAL CTA (photo background)
     ══════════════════════════════════════════════════════ -->
<section class="estimate-section">
  <img src="<?php echo esc_url( $cta_image ); ?>" alt="" aria-hidden="true" class="estimate-section__bg" loading="lazy" />
  <div class="estimate-section__overlay" aria-hidden="true"></div>
  <div class="estimate-section__inner">
    <div>
      <p class="section-label estimate-section__eyebrow"><?php echo esc_html( $cta_eyebrow ); ?></p>
      <h2 class="estimate-section__h2">
        <span class="light"><?php echo esc_html( $cta_h2_light ); ?></span>
        <span class="bold"><?php echo esc_html( $cta_h2_bold ); ?></span>
      </h2>
      <p class="estimate-section__sub"><?php echo esc_html( $cta_sub ); ?></p>
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
    <div class="estimate-form-card">
      <p class="estimate-form-card__title">Request a Free Estimate in <?php echo esc_html( $city ); ?></p>
      <form action="/contact" method="GET" class="estimate-form">
        <div class="form-row">
          <div class="form-group">
            <label class="form-label" for="loc-name">Name</label>
            <input type="text" id="loc-name" name="name" placeholder="Your name" class="form-input" />
          </div>
          <div class="form-group">
            <label class="form-label" for="loc-phone">Phone</label>
            <input type="tel" id="loc-phone" name="phone" placeholder="541-xxx-xxxx" class="form-input" />
          </div>
        </div>
        <div class="form-group">
          <label class="form-label" for="loc-desc">Tell us about the property</label>
          <textarea id="loc-desc" name="description" rows="3" placeholder="What's going on, what you need done&hellip;" class="form-textarea"></textarea>
        </div>
        <input type="hidden" name="town" value="<?php echo esc_attr( $city ); ?>" />
        <button type="submit" class="btn btn-cta btn-lg form-submit">Send Estimate Request</button>
      </form>
    </div>
  </div>
</section>

</main>
<?php get_footer(); ?>
