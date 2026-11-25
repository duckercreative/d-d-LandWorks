<?php
/**
 * Template Name: Service Page
 * Template Post Type: page
 *
 * Port of ServicePageTemplate.astro — all sections driven by
 * custom fields (ACF or Simple Fields). Falls back to sensible
 * defaults so the page renders even without the plugin.
 *
 * Custom field keys used:
 *   hero_eyebrow, hero_h1_light, hero_h1_bold, hero_sub,
 *   hero_image, hero_scope_label, hero_scope_tags (textarea, one per line)
 *
 *   ctx_eyebrow, ctx_h2_light, ctx_h2_bold, ctx_intro,
 *   ctx_left_label, ctx_left_title, ctx_left_tagline, ctx_left_bullets (one per line)
 *   ctx_right_label, ctx_right_title, ctx_right_tagline, ctx_right_bullets (one per line)
 *   ctx_banner
 *
 *   incl_eyebrow, incl_h2_light, incl_h2_bold, incl_intro
 *   incl_items — JSON array: [{num,title,desc,href?,accent?}]
 *
 *   prob_h2_light, prob_h2_bold, prob_intro, prob_image
 *   prob_items — JSON array: [{num,title,desc,link,href}]
 *
 *   proc_h2_light, proc_h2_bold
 *   proc_steps — JSON array: [{num,title,desc,accent?}]
 *
 *   cost_h2_light, cost_h2_bold, cost_intro, cost_closing
 *   cost_items — JSON array: [{title,desc}]
 *
 *   timeline_h2_light, timeline_h2_bold, timeline_intro
 *   timeline_items — JSON array: [{title,desc}]
 *
 *   faq_h2_light, faq_h2_bold
 *   faq_items — JSON array: [{question,answer}]
 *
 *   cta_h2_light, cta_h2_bold, cta_sub
 *
 * Helper: ddlw_cf(key, default) reads post meta.
 */

get_header();

/* ── helper ───────────────────────────────────────────────── */
function ddlw_cf( $key, $default = '' ) {
	global $post;
	$val = get_post_meta( $post->ID, $key, true );
	return $val !== '' ? $val : $default;
}
function ddlw_cf_lines( $key ) {
	$raw = ddlw_cf( $key, '' );
	if ( ! $raw ) return [];
	return array_filter( array_map( 'trim', explode( "\n", $raw ) ) );
}
function ddlw_cf_json( $key ) {
	$raw = ddlw_cf( $key, '' );
	if ( ! $raw ) return [];
	$decoded = json_decode( $raw, true );
	return is_array( $decoded ) ? $decoded : [];
}

/* ── field values ─────────────────────────────────────────── */
$hero_eyebrow    = ddlw_cf( 'hero_eyebrow',   'Eugene, Oregon' );
$hero_h1_light   = ddlw_cf( 'hero_h1_light',  '' );
$hero_h1_bold    = ddlw_cf( 'hero_h1_bold',   get_the_title() );
$hero_sub        = ddlw_cf( 'hero_sub',        '' );
$hero_image      = ddlw_cf( 'hero_image',      get_template_directory_uri() . '/assets/images/project-site-excavation.webp?v=2' );
$hero_scope_label = ddlw_cf( 'hero_scope_label', 'Typical scope' );
$hero_scope_tags  = ddlw_cf_lines( 'hero_scope_tags' );

$ctx_eyebrow      = ddlw_cf( 'ctx_eyebrow', 'What to know' );
$ctx_h2_light     = ddlw_cf( 'ctx_h2_light', '' );
$ctx_h2_bold      = ddlw_cf( 'ctx_h2_bold', '' );
$ctx_intro        = ddlw_cf( 'ctx_intro', '' );
$ctx_left_label   = ddlw_cf( 'ctx_left_label', '' );
$ctx_left_title   = ddlw_cf( 'ctx_left_title', '' );
$ctx_left_tagline = ddlw_cf( 'ctx_left_tagline', '' );
$ctx_left_bullets = ddlw_cf_lines( 'ctx_left_bullets' );
$ctx_right_label  = ddlw_cf( 'ctx_right_label', '' );
$ctx_right_title  = ddlw_cf( 'ctx_right_title', '' );
$ctx_right_tagline= ddlw_cf( 'ctx_right_tagline', '' );
$ctx_right_bullets= ddlw_cf_lines( 'ctx_right_bullets' );
$ctx_banner       = ddlw_cf( 'ctx_banner', '' );

$incl_eyebrow = ddlw_cf( 'incl_eyebrow', 'What is included' );
$incl_h2_light= ddlw_cf( 'incl_h2_light', '' );
$incl_h2_bold = ddlw_cf( 'incl_h2_bold', '' );
$incl_intro   = ddlw_cf( 'incl_intro', '' );
$incl_items   = ddlw_cf_json( 'incl_items' );

$prob_h2_light= ddlw_cf( 'prob_h2_light', '' );
$prob_h2_bold = ddlw_cf( 'prob_h2_bold', '' );
$prob_intro   = ddlw_cf( 'prob_intro', '' );
$prob_image   = ddlw_cf( 'prob_image', get_template_directory_uri() . '/assets/images/project-site-excavation.webp?v=2' );
$prob_items   = ddlw_cf_json( 'prob_items' );

$proc_h2_light = ddlw_cf( 'proc_h2_light', '' );
$proc_h2_bold  = ddlw_cf( 'proc_h2_bold', '' );
$proc_steps    = ddlw_cf_json( 'proc_steps' );

$cost_h2_light  = ddlw_cf( 'cost_h2_light', '' );
$cost_h2_bold   = ddlw_cf( 'cost_h2_bold', '' );
$cost_intro     = ddlw_cf( 'cost_intro', '' );
$cost_closing   = ddlw_cf( 'cost_closing', '' );
$cost_items     = ddlw_cf_json( 'cost_items' );

$tl_h2_light  = ddlw_cf( 'timeline_h2_light', '' );
$tl_h2_bold   = ddlw_cf( 'timeline_h2_bold', '' );
$tl_intro     = ddlw_cf( 'timeline_intro', '' );
$tl_items     = ddlw_cf_json( 'timeline_items' );

$faq_h2_light = ddlw_cf( 'faq_h2_light', 'Common Questions About' );
$faq_h2_bold  = ddlw_cf( 'faq_h2_bold', $hero_h1_bold );
$faq_items    = ddlw_cf_json( 'faq_items' );

$cta_h2_light = ddlw_cf( 'cta_h2_light', 'Get a Free' );
$cta_h2_bold  = ddlw_cf( 'cta_h2_bold', 'Estimate From D&amp;D Land Works' );
$cta_sub      = ddlw_cf( 'cta_sub', 'Contact D&amp;D Land Works to discuss your property and project scope. We provide free on-site estimates for residential and commercial projects across Lane County, Oregon.' );
?>

<main>

<!-- ── HERO: SPLIT ────────────────────────────────────────── -->
<section class="service-hero">
  <div class="service-hero__grid">

    <div class="service-hero__copy">
      <nav aria-label="Breadcrumb" class="service-hero__breadcrumb">
        <a href="/">Home</a>
        <span>/</span>
        <a href="/services">Services</a>
        <span>/</span>
        <span style="color:#fff;"><?php echo esc_html( $hero_h1_bold ); ?></span>
      </nav>

      <div class="service-hero__eyebrow">
        <span class="service-hero__eyebrow-line" aria-hidden="true"></span>
        <?php echo esc_html( $hero_eyebrow ); ?>
      </div>

      <h1 class="service-hero__h1">
        <span class="light"><?php echo esc_html( $hero_h1_light ); ?></span>
        <span class="bold"><?php echo esc_html( $hero_h1_bold ); ?></span>
      </h1>

      <p class="service-hero__sub"><?php echo esc_html( $hero_sub ); ?></p>

      <div class="service-hero__ctas">
        <a href="/contact" class="btn btn-cta">Get a Free Estimate</a>
        <a href="tel:5414018726" class="service-hero__cta-call">Call 541-401-8726</a>
      </div>

      <div class="service-hero__trust">
        <span><strong>CCB #261742</strong> Licensed &amp; Bonded</span>
        <span><strong>DEQ</strong> Certified — PLC# 39996</span>
        <span><strong>Free</strong> On-Site Estimates</span>
      </div>
    </div>

    <div class="service-hero__image-col">
      <div class="service-hero__image-wrap">
        <img src="<?php echo esc_url( $hero_image ); ?>" alt="<?php echo esc_attr( $hero_h1_bold ); ?> in Lane County Oregon" />
        <?php if ( $hero_scope_tags ) : ?>
          <div class="service-hero__scope">
            <span class="service-hero__scope-label"><?php echo esc_html( $hero_scope_label ); ?></span>
            <div class="service-hero__scope-tags">
              <?php foreach ( $hero_scope_tags as $tag ) : ?>
                <span class="scope-tag"><?php echo esc_html( $tag ); ?></span>
              <?php endforeach; ?>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>

  </div>
</section>

<!-- ── CONTEXT / COMPARE ──────────────────────────────────── -->
<?php if ( $ctx_h2_light || $ctx_h2_bold ) : ?>
<section class="ctx-section">
  <div class="ctx-section__inner">

    <div class="ctx-section__header">
      <div>
        <div class="ctx-eyebrow">
          <span class="ctx-eyebrow-line" aria-hidden="true"></span>
          <?php echo esc_html( $ctx_eyebrow ); ?>
        </div>
        <h2 class="ctx-h2">
          <span class="light"><?php echo esc_html( $ctx_h2_light ); ?></span>
          <span class="bold"><?php echo esc_html( $ctx_h2_bold ); ?></span>
        </h2>
      </div>
      <?php if ( $ctx_intro ) : ?>
        <p class="ctx-intro"><?php echo esc_html( $ctx_intro ); ?></p>
      <?php endif; ?>
    </div>

    <?php if ( $ctx_left_title || $ctx_right_title ) : ?>
    <div class="ctx-cards">
      <div class="ctx-card ctx-card--cream">
        <span class="ctx-card__label"><?php echo esc_html( $ctx_left_label ); ?></span>
        <h3 class="ctx-card__title"><?php echo esc_html( $ctx_left_title ); ?></h3>
        <p class="ctx-card__tagline"><?php echo esc_html( $ctx_left_tagline ); ?></p>
        <?php if ( $ctx_left_bullets ) : ?>
          <ul class="ctx-card__bullets">
            <?php foreach ( $ctx_left_bullets as $b ) : ?>
              <li class="ctx-bullet">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5" /></svg>
                <span><?php echo esc_html( $b ); ?></span>
              </li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>
      </div>

      <div class="ctx-card ctx-card--dark">
        <span class="ctx-card__label"><?php echo esc_html( $ctx_right_label ); ?></span>
        <h3 class="ctx-card__title"><?php echo esc_html( $ctx_right_title ); ?></h3>
        <p class="ctx-card__tagline"><?php echo esc_html( $ctx_right_tagline ); ?></p>
        <?php if ( $ctx_right_bullets ) : ?>
          <ul class="ctx-card__bullets">
            <?php foreach ( $ctx_right_bullets as $b ) : ?>
              <li class="ctx-bullet">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5" /></svg>
                <span><?php echo esc_html( $b ); ?></span>
              </li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>
      </div>

      <div class="vs-pill" aria-hidden="true">VS</div>
    </div>
    <?php endif; ?>

    <?php if ( $ctx_banner ) : ?>
      <div class="ctx-banner">
        <span class="ctx-banner__text"><?php echo esc_html( $ctx_banner ); ?></span>
        <a href="/about" class="ctx-banner__link">About D&amp;D Land Works &rarr;</a>
      </div>
    <?php endif; ?>

  </div>
</section>
<?php endif; ?>

<!-- ── WHAT'S INCLUDED ────────────────────────────────────── -->
<?php if ( $incl_items ) : ?>
<section class="incl-section">
  <div class="incl-section__inner">

    <div class="incl-section__header">
      <div>
        <div class="ctx-eyebrow">
          <span class="ctx-eyebrow-line" aria-hidden="true"></span>
          <?php echo esc_html( $incl_eyebrow ); ?>
        </div>
        <h2 class="ctx-h2">
          <span class="light"><?php echo esc_html( $incl_h2_light ); ?></span>
          <span class="bold"><?php echo esc_html( $incl_h2_bold ); ?></span>
        </h2>
      </div>
      <?php if ( $incl_intro ) : ?>
        <p class="ctx-intro"><?php echo esc_html( $incl_intro ); ?></p>
      <?php endif; ?>
    </div>

    <div class="incl-grid">
      <?php foreach ( $incl_items as $item ) : ?>
        <div class="incl-card<?php echo ! empty( $item['accent'] ) ? ' incl-card--accent' : ''; ?>">
          <span class="incl-card__num"><?php echo esc_html( $item['num'] ?? '' ); ?></span>
          <h3 class="incl-card__title"><?php echo esc_html( $item['title'] ?? '' ); ?></h3>
          <p class="incl-card__desc"><?php echo esc_html( $item['desc'] ?? '' ); ?></p>
          <?php if ( ! empty( $item['href'] ) ) : ?>
            <a href="<?php echo esc_url( $item['href'] ); ?>" class="incl-card__link">
              Learn more
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6" /></svg>
            </a>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="incl-section__ctas">
      <a href="/contact" class="btn btn-cta">Request a Free Estimate</a>
      <a href="/services" class="btn-outline-ink">Explore all services</a>
    </div>

  </div>
</section>
<?php endif; ?>

<!-- ── PROBLEMS ────────────────────────────────────────────── -->
<?php if ( $prob_items ) : ?>
<section class="prob-section">
  <div class="prob-section__inner">
    <div class="prob-section__grid">

      <div>
        <div class="ctx-eyebrow" style="margin-bottom:1.5rem;">
          <span class="ctx-eyebrow-line" aria-hidden="true"></span>
          We can help
        </div>
        <h2 class="ctx-h2" style="margin-bottom:1.5rem;">
          <span class="light"><?php echo esc_html( $prob_h2_light ); ?></span>
          <span class="bold"><?php echo esc_html( $prob_h2_bold ); ?></span>
        </h2>
        <p class="ctx-intro" style="margin-bottom:1.5rem;"><?php echo esc_html( $prob_intro ); ?></p>
        <img src="<?php echo esc_url( $prob_image ); ?>" alt="<?php echo esc_attr( $prob_h2_bold ); ?> in Lane County Oregon" class="prob-section__img" loading="lazy" />
      </div>

      <div class="prob-items">
        <?php foreach ( $prob_items as $p ) : ?>
          <div class="prob-item">
            <span class="prob-item__num"><?php echo esc_html( $p['num'] ?? '' ); ?></span>
            <div>
              <h3 class="prob-item__title"><?php echo esc_html( $p['title'] ?? '' ); ?></h3>
              <p class="prob-item__desc"><?php echo esc_html( $p['desc'] ?? '' ); ?></p>
              <?php if ( ! empty( $p['href'] ) ) : ?>
                <a href="<?php echo esc_url( $p['href'] ); ?>" class="prob-item__link">
                  <span class="muted">Related:</span> <?php echo esc_html( $p['link'] ?? '' ); ?>
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6" /></svg>
                </a>
              <?php endif; ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</section>
<?php endif; ?>

<!-- ── PROCESS ─────────────────────────────────────────────── -->
<?php if ( $proc_steps ) : ?>
<section class="sp-process">
  <div class="sp-process__inner">

    <div class="sp-process__heading">
      <div class="sp-process__eyebrow-wrap">
        <span class="sp-process__eyebrow-line" aria-hidden="true"></span>
        How it works
        <span class="sp-process__eyebrow-line" aria-hidden="true"></span>
      </div>
      <h2 class="sp-process__h2">
        <span class="light"><?php echo esc_html( $proc_h2_light ); ?></span>
        <span class="bold"><?php echo esc_html( $proc_h2_bold ); ?></span>
      </h2>
    </div>

    <div class="sp-process__grid">
      <div class="sp-process__connector" aria-hidden="true"></div>
      <?php foreach ( $proc_steps as $step ) : ?>
        <div>
          <div class="sp-step__num<?php echo ! empty( $step['accent'] ) ? ' sp-step__num--accent' : ''; ?>">
            <?php echo esc_html( $step['num'] ?? '' ); ?>
          </div>
          <h3 class="sp-step__title"><?php echo esc_html( $step['title'] ?? '' ); ?></h3>
          <p class="sp-step__desc"><?php echo esc_html( $step['desc'] ?? '' ); ?></p>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="sp-process__cta">
      <a href="/contact" class="btn btn-cta">Discuss Your Project</a>
    </div>

  </div>
</section>
<?php endif; ?>

<!-- ── COST ───────────────────────────────────────────────── -->
<?php if ( $cost_items ) : ?>
<section class="cost-section">
  <div class="cost-section__inner">

    <div class="incl-section__header">
      <h2 class="ctx-h2">
        <span class="light"><?php echo esc_html( $cost_h2_light ); ?></span>
        <span class="bold"><?php echo esc_html( $cost_h2_bold ); ?></span>
      </h2>
      <?php if ( $cost_intro ) : ?>
        <p class="ctx-intro"><?php echo esc_html( $cost_intro ); ?></p>
      <?php endif; ?>
    </div>

    <div class="cost-grid">
      <?php foreach ( $cost_items as $c ) : ?>
        <div class="cost-card">
          <h3 class="cost-card__title"><?php echo esc_html( $c['title'] ?? '' ); ?></h3>
          <p class="cost-card__desc"><?php echo esc_html( $c['desc'] ?? '' ); ?></p>
        </div>
      <?php endforeach; ?>
    </div>

    <?php if ( $cost_closing ) : ?>
      <p style="font-size:1rem;line-height:1.7;color:#475569;max-width:40rem;"><?php echo esc_html( $cost_closing ); ?></p>
    <?php endif; ?>

  </div>
</section>
<?php endif; ?>

<!-- ── TIMELINE ───────────────────────────────────────────── -->
<?php if ( $tl_items ) : ?>
<section class="timeline-section">
  <div class="timeline-section__inner">

    <div class="incl-section__header">
      <h2 class="ctx-h2">
        <span class="light"><?php echo esc_html( $tl_h2_light ); ?></span>
        <span class="bold"><?php echo esc_html( $tl_h2_bold ); ?></span>
      </h2>
      <?php if ( $tl_intro ) : ?>
        <p class="ctx-intro"><?php echo esc_html( $tl_intro ); ?></p>
      <?php endif; ?>
    </div>

    <div class="timeline-grid">
      <?php foreach ( $tl_items as $t ) : ?>
        <div class="timeline-item">
          <h3 class="timeline-item__title"><?php echo esc_html( $t['title'] ?? '' ); ?></h3>
          <p class="timeline-item__desc"><?php echo esc_html( $t['desc'] ?? '' ); ?></p>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>
<?php endif; ?>

<!-- ── FAQ ────────────────────────────────────────────────── -->
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

<!-- ── CTA ────────────────────────────────────────────────── -->
<section class="estimate-section">
  <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/project-finished-landscaping.webp?v=2" alt="" aria-hidden="true" class="estimate-section__bg" loading="lazy" />
  <div class="estimate-section__overlay" aria-hidden="true"></div>

  <div class="estimate-section__inner">
    <div>
      <p class="section-label estimate-section__eyebrow">Free Estimate</p>
      <h2 class="estimate-section__h2">
        <span class="light"><?php echo wp_kses_post( $cta_h2_light ); ?></span>
        <span class="bold"><?php echo wp_kses_post( $cta_h2_bold ); ?></span>
      </h2>
      <p class="estimate-section__sub"><?php echo wp_kses_post( $cta_sub ); ?></p>
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
        <a href="mailto:david@ddlandworks.com" class="contact-link">
          <span class="contact-link__icon contact-link__icon--ghost">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" /></svg>
          </span>
          <div>
            <p class="contact-link__hint">Email</p>
            <p class="contact-link__value contact-link__value--sm">david@ddlandworks.com</p>
          </div>
        </a>
      </div>
    </div>

    <div class="estimate-form-card">
      <p class="estimate-form-card__title">Request a Free Estimate</p>
      <form action="/contact" method="GET" class="estimate-form">
        <div class="form-row">
          <div class="form-group">
            <label class="form-label" for="sp-name">Name</label>
            <input type="text" id="sp-name" name="name" placeholder="Your name" class="form-input" />
          </div>
          <div class="form-group">
            <label class="form-label" for="sp-phone">Phone</label>
            <input type="tel" id="sp-phone" name="phone" placeholder="541-xxx-xxxx" class="form-input" />
          </div>
        </div>
        <div class="form-group">
          <label class="form-label" for="sp-desc">Tell us about the property</label>
          <textarea id="sp-desc" name="description" rows="3" placeholder="What's going on, what you need done, any access notes&hellip;" class="form-textarea"></textarea>
        </div>
        <button type="submit" class="btn btn-cta btn-lg form-submit">Send Estimate Request</button>
      </form>
    </div>

  </div>
</section>

</main>
<?php get_footer(); ?>
