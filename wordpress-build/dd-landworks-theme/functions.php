<?php
/**
 * D&D Land Works theme bootstrap.
 *
 * Dependency-free by design: no ACF, no page-builder plugin. Content blocks
 * on the homepage and service/location page templates are built from
 * shortcodes (see inc/shortcodes.php) so an editor can assemble a page in
 * the block/classic editor without a plugin. Business facts (phone, CCB
 * number, DEQ cert, email) are Customizer settings (inc/customizer.php) so
 * they can be edited from one place instead of hunting through templates.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'DDLW_VERSION', '1.0.4' );
define( 'DDLW_DIR', get_template_directory() );
define( 'DDLW_URI', get_template_directory_uri() );

/**
 * Theme setup: supports, nav menus, image sizes.
 */
function ddlw_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo', array(
		'height'      => 80,
		'width'       => 240,
		'flex-height' => true,
		'flex-width'  => true,
	) );
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'script', 'style' ) );
	add_theme_support( 'automatic-feed-links' );

	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'dd-landworks' ),
		'footer'  => __( 'Footer Navigation', 'dd-landworks' ),
	) );

	add_image_size( 'ddlw-card', 640, 480, true );
	add_image_size( 'ddlw-hero', 1920, 1080, true );

	// Load theme stylesheet in the block editor so CSS variables and fonts
	// apply to the canvas (makes RichText fields look like the front end).
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'ddlw_setup' );

/**
 * Styles and scripts. No build step — style.css is the full, hand-written
 * stylesheet (see its own header comment for the section map).
 */
function ddlw_assets() {
	wp_enqueue_style(
		'ddlw-fonts',
		'https://fonts.googleapis.com/css2?family=Outfit:wght@500;600;700;900&family=Poppins:wght@400;500;600;700&display=swap',
		array(),
		null
	);
	wp_enqueue_style( 'dd-landworks-style', get_stylesheet_uri(), array(), DDLW_VERSION );
	wp_enqueue_script( 'dd-landworks-main', DDLW_URI . '/assets/js/main.js', array(), DDLW_VERSION, true );

	if ( is_singular() ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ddlw_assets' );

/**
 * Favicon — suppress WP's default site_icon output and serve our SVG.
 */
remove_action( 'wp_head', 'wp_site_icon', 99 );
function ddlw_favicon() {
	echo '<link rel="icon" type="image/png" href="' . esc_url( DDLW_URI . '/assets/images/logo.png' ) . '">' . "\n";
}
add_action( 'wp_head', 'ddlw_favicon', 1 );

/**
 * Fallback menus so the header/footer render sensibly before an admin has
 * assigned menus in Appearance > Menus.
 */
function ddlw_nav_fallback() {
	echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Home', 'dd-landworks' ) . '</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/services' ) ) . '">' . esc_html__( 'Services', 'dd-landworks' ) . '</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/blog' ) ) . '">' . esc_html__( 'Blog', 'dd-landworks' ) . '</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/contact' ) ) . '">' . esc_html__( 'Contact', 'dd-landworks' ) . '</a></li>';
}

/**
 * Excerpt tuning to match the card copy length used across the site.
 */
add_filter( 'excerpt_length', fn() => 28 );
add_filter( 'excerpt_more', fn() => '&hellip;' );


require DDLW_DIR . '/inc/template-tags.php';
require DDLW_DIR . '/inc/shortcodes.php';
require DDLW_DIR . '/inc/customizer.php';
require DDLW_DIR . '/inc/meta-site-preparation.php';
require DDLW_DIR . '/inc/meta-excavation-contractor.php';
require DDLW_DIR . '/inc/service-content.php';
if ( file_exists( DDLW_DIR . '/inc/service-content-additional.php' ) ) {
	require DDLW_DIR . '/inc/service-content-additional.php';
}
require DDLW_DIR . '/inc/blocks.php';
require DDLW_DIR . '/inc/auto-populate-homepage.php';

/**
 * Enqueue the homepage block editor JS (edit side only, no frontend output).
 */
function ddlw_block_editor_assets() {
	wp_enqueue_script(
		'ddlw-homepage-blocks',
		DDLW_URI . '/assets/js/blocks/homepage.js',
		array( 'wp-blocks', 'wp-element', 'wp-editor', 'wp-components', 'wp-block-editor', 'wp-rich-text' ),
		DDLW_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'ddlw_block_editor_assets' );

/**
 * On theme activation: create all required pages so every URL resolves.
 * Skips any page whose slug already exists — safe to re-activate.
 */
function ddlw_create_default_pages() {

	$make = function( $title, $slug, $template = '', $excerpt = '', $meta = array() ) {
		if ( get_page_by_path( $slug ) ) {
			return null;
		}
		$id = wp_insert_post( array(
			'post_title'   => $title,
			'post_name'    => $slug,
			'post_status'  => 'publish',
			'post_type'    => 'page',
			'post_content' => '',
			'post_excerpt' => $excerpt,
		) );
		if ( $id && ! is_wp_error( $id ) ) {
			if ( $template ) {
				update_post_meta( $id, '_wp_page_template', $template );
			}
			foreach ( $meta as $key => $value ) {
				update_post_meta( $id, $key, $value );
			}
		}
		return $id;
	};

	/* ── Utility pages ────────────────────────────────────────────────────── */
	$make( 'About',        'about',        'page-templates/template-about.php' );
	$make( 'Contact',      'contact',      'page-templates/template-contact.php' );
	$blog_id = $make( 'Blog', 'blog', '' );
	$make( 'Service Area', 'service-area', 'page-templates/template-service-area.php' );
	$make( 'Services',     'services',     '' );

	/* ── Excavation contractor city pages ─────────────────────────────────── */
	$ec_tpl = 'page-templates/template-excavation-contractor.php';
	$cities = array(
		'eugene'        => 'Eugene',
		'springfield'   => 'Springfield',
		'florence'      => 'Florence',
		'cottage-grove' => 'Cottage Grove',
		'junction-city' => 'Junction City',
		'corvallis'     => 'Corvallis',
		'albany'        => 'Albany',
		'creswell'      => 'Creswell',
		'veneta'        => 'Veneta',
		'coburg'        => 'Coburg',
		'lowell'        => 'Lowell',
	);
	foreach ( $cities as $slug => $city ) {
		$make(
			'Excavation Contractor in ' . $city . ', Oregon',
			'excavation-contractor-' . $slug . '-or',
			$ec_tpl,
			'',
			array(
				'ec_hero_eyebrow'  => $city . ', Oregon',
				'ec_hero_title'    => 'Excavation Contractor in ' . $city . ', Oregon',
				'ec_about_heading' => 'Excavation Services for Homes and Businesses in ' . $city,
				'ec_proj_heading'  => 'Excavation Projects We Handle in ' . $city,
				'ec_proc_heading'  => 'How the Excavation Process Works in ' . $city,
				'ec_why_heading'   => 'Why Choose D&D Land Works for Excavation in ' . $city . '?',
				'ec_areas_heading' => 'Excavation Services in ' . $city . ' and Lane County',
				'ec_cta_title'     => 'Get a Free Excavation Estimate in ' . $city,
				'ec_cta_subtitle'  => 'D&D Land Works serves ' . $city . ' and surrounding Lane County communities. Call ' . ddlw_phone() . ' or send a message.',
			)
		);
	}

	/* ── Service pages (matching Astro site slugs) ────────────────────────── */
	$svc_tpl = 'page-templates/template-service.php';
	$service_pages = array(
		array( 'Site Preparation',         'site-preparation-contractor-eugene-or',   'Site prep, land clearing, rough grading, and access work before a builder arrives. D&D Land Works handles the full scope of site preparation for Eugene and Lane County.' ),
		array( 'Site Preparation - Springfield', 'site-preparation-contractor-springfield-or', 'Site preparation, land clearing, grading, and access work for Springfield, Oregon properties. D&D Land Works is based in Springfield.' ),
		array( 'Land Clearing',            'land-clearing-services-eugene-or',         'Full land clearing and brush clearing for Eugene and Lane County. Trees, brush, stumps, and vegetation removed so excavation or construction can begin.' ),
		array( 'Grading & Leveling',       'land-grading-services-eugene-or',          'Land grading, site leveling, and drainage slope work for residential and commercial properties in Eugene and Lane County.' ),
		array( 'Septic Install & Repairs', 'septic-installation-lane-county-or',       'DEQ-certified septic system installation and repair throughout Lane County. One contractor handles both the excavation and the septic work.' ),
		array( 'Foundation Excavation',    'foundation-excavation-eugene-or',           'Foundation digging for homes, ADUs, shops, and barns in Eugene and Lane County. Clean excavation to plan dimensions before the concrete crew arrives.' ),
		array( 'Drainage Excavation',      'drainage-installation-eugene-or',           'Drainage excavation, French drains, swales, and catch basins for standing water problems on Eugene and Lane County properties.' ),
		array( 'Utility Excavation',       'utility-trenching-eugene-or',               'Utility trenching and backfill for water, sewer, electrical conduit, and irrigation lines across Eugene and Lane County.' ),
		array( 'Driveway Repair',          'driveway-excavation-grading-eugene-or',     'Gravel driveway regrading and re-rocking for Eugene and Lane County. Rutted, washed-out, or uneven driveways excavated and reshaped.' ),
		array( 'Trenching & Backfill',     'trenching-services-eugene-or',              'Trench digging and compacted backfill for utility lines, drainage pipe, and other underground work across Lane County.' ),
		array( 'Brush Clearing',           'brush-clearing-eugene-or',                  'Brush clearing, blackberry removal, and light vegetation clearing for Eugene and Lane County properties.' ),
		array( 'Slope Stabilization',      'slope-stabilization-eugene-or',             'Slope stabilization, erosion control, and hillside grading for unstable or erosion-prone sites in Eugene and Lane County.' ),
	);
	foreach ( $service_pages as $svc ) {
		$make( $svc[0], $svc[1], $svc_tpl, $svc[2] );
	}

	/* ── Oakridge location page ───────────────────────────────────────────── */
	$make( 'Excavation Contractor in Oakridge, Oregon', 'locations/oakridge', 'page-templates/template-location.php' );

	/* ── Reading settings ─────────────────────────────────────────────────── */
	$front = get_page_by_path( 'home' );
	if ( ! $front ) {
		$front_id = wp_insert_post( array(
			'post_title'  => 'Home',
			'post_name'   => 'home',
			'post_status' => 'publish',
			'post_type'   => 'page',
		) );
	} else {
		$front_id = $front->ID;
	}
	if ( ! is_wp_error( $front_id ) ) {
		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', $front_id );
	}
	$blog_page = get_page_by_path( 'blog' );
	if ( $blog_page ) {
		update_option( 'page_for_posts', $blog_page->ID );
	}
}
add_action( 'after_switch_theme', 'ddlw_create_default_pages' );

/**
 * Force custom templates for pages that may not have _wp_page_template set.
 */
function ddlw_force_page_templates( $template ) {
	$map = array(
		'service-area' => 'page-templates/template-service-area.php',
	);
	foreach ( $map as $slug => $tpl ) {
		if ( is_page( $slug ) ) {
			$path = get_template_directory() . '/' . $tpl;
			if ( file_exists( $path ) ) {
				return $path;
			}
		}
	}
	return $template;
}
add_filter( 'template_include', 'ddlw_force_page_templates' );
