<?php
/**
 * DD Land Works v7 — functions.php
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/* ── Theme support ─────────────────────────────────────────── */
function ddlw_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'script', 'style' ] );
	add_theme_support( 'customize-selective-refresh-widgets' );

	register_nav_menus( [
		'primary'  => __( 'Primary Navigation', 'dd-landworks-v7' ),
		'footer'   => __( 'Footer Navigation',  'dd-landworks-v7' ),
	] );
}
add_action( 'after_setup_theme', 'ddlw_setup' );

/* ── Enqueue styles & scripts ──────────────────────────────── */
function ddlw_enqueue() {
	// Google Fonts — Barlow Condensed (display) + Barlow (body)
	wp_enqueue_style(
		'ddlw-fonts',
		'https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@300;400;500;600;700&family=Barlow:wght@400;500;600;700&display=swap',
		[],
		null
	);

	// Main stylesheet (style.css in theme root)
	wp_enqueue_style(
		'ddlw-style',
		get_stylesheet_uri(),
		[ 'ddlw-fonts' ],
		'7.1.0'
	);

	// Mobile-menu JS (inline — no external file needed)
	wp_enqueue_script( 'ddlw-script', get_template_directory_uri() . '/assets/js/main.js', [], '7.1.0', true );
}
add_action( 'wp_enqueue_scripts', 'ddlw_enqueue' );

/* ── Add preconnect for Google Fonts ──────────────────────── */
function ddlw_preconnect_fonts( $output ) {
	return '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n"
	     . '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n"
	     . $output;
}
add_filter( 'style_loader_tag', function( $html, $handle ) {
	return $html;
}, 10, 2 );

/* Inject preconnect directly in head */
function ddlw_head_extras() {
	echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
	echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
}
add_action( 'wp_head', 'ddlw_head_extras', 1 );

/* ── Excerpt length ─────────────────────────────────────────── */
function ddlw_excerpt_length() { return 28; }
add_filter( 'excerpt_length', 'ddlw_excerpt_length' );

function ddlw_excerpt_more() { return '&hellip;'; }
add_filter( 'excerpt_more', 'ddlw_excerpt_more' );

/* ── Contact form 7 / plain-HTML form handler ───────────────── */
// Nothing extra needed — we use HTML forms with action="/contact"

/* ── Register custom meta for REST API ─────────────────────── */
function ddlw_register_meta() {
	$page_meta_keys = [
		// Location template — base
		'loc_city', 'loc_county', 'loc_state', 'loc_hero_image',
		'loc_h1_light', 'loc_h1_bold', 'loc_sub', 'loc_breadcrumb_label',
		// Location — facts bar (JSON)
		'loc_facts_bar',
		// Location — intro section
		'loc_intro_eyebrow', 'loc_intro_h2_light', 'loc_intro_h2_bold',
		'loc_david_quote', 'loc_intro_para1', 'loc_intro_para2', 'loc_intro_image',
		// Location — services section
		'loc_services_eyebrow', 'loc_services_h2_light', 'loc_services_h2_bold', 'loc_services_desc',
		'loc_services',
		// Location — when section
		'loc_when_eyebrow', 'loc_when_h2_light', 'loc_when_h2_bold', 'loc_when_desc',
		'loc_checklist_items',
		// Location — process section
		'loc_process_eyebrow', 'loc_process_h2_light', 'loc_process_h2_bold', 'loc_process_desc',
		'loc_process_steps',
		// Location — bento / why choose section
		'loc_why_h2_light', 'loc_why_h2_bold', 'loc_bento_image', 'loc_bento_image_alt',
		'loc_bento_features',
		// Location — service area section
		'loc_area_eyebrow', 'loc_area_h2_light', 'loc_area_h2_bold', 'loc_area_desc',
		'loc_area_links',
		// Location — FAQ section
		'loc_faq_h2_light', 'loc_faq_h2_bold', 'loc_faq_items',
		// Location — related services section
		'loc_related_eyebrow', 'loc_related_services',
		// Location — CTA section
		'loc_cta_eyebrow', 'loc_cta_h2_light', 'loc_cta_h2_bold', 'loc_cta_sub', 'loc_cta_image',
		// Service template — hero
		'hero_eyebrow', 'hero_h1_light', 'hero_h1_bold', 'hero_sub', 'hero_image',
		'hero_scope_label', 'hero_scope_tags',
		// Service template — context section
		'ctx_eyebrow', 'ctx_h2_light', 'ctx_h2_bold', 'ctx_intro',
		'ctx_left_label', 'ctx_left_title', 'ctx_left_tagline', 'ctx_left_bullets',
		'ctx_right_label', 'ctx_right_title', 'ctx_right_tagline', 'ctx_right_bullets',
		'ctx_banner',
		// Service template — included section
		'incl_eyebrow', 'incl_h2_light', 'incl_h2_bold', 'incl_intro', 'incl_items',
		// Service template — problems section
		'prob_h2_light', 'prob_h2_bold', 'prob_intro', 'prob_image', 'prob_items',
		// Service template — process section
		'proc_h2_light', 'proc_h2_bold', 'proc_steps',
		// Service template — cost section
		'cost_h2_light', 'cost_h2_bold', 'cost_intro', 'cost_closing', 'cost_items',
		// Service template — timeline section
		'timeline_h2_light', 'timeline_h2_bold', 'timeline_intro', 'timeline_items',
		// Service template — FAQ + CTA
		'faq_h2_light', 'faq_h2_bold', 'faq_items',
		'cta_h2_light', 'cta_h2_bold', 'cta_sub',
	];
	foreach ( $page_meta_keys as $key ) {
		register_post_meta( 'page', $key, [
			'show_in_rest'  => true,
			'single'        => true,
			'type'          => 'string',
			'auth_callback' => function() { return current_user_can( 'edit_posts' ); },
		] );
	}
}
add_action( 'init', 'ddlw_register_meta' );

/* ── Load inc files ─────────────────────────────────────────── */
require_once get_template_directory() . '/inc/shortcodes.php';
require_once get_template_directory() . '/inc/nav-menus.php';

/* ── Business schema on front page ─────────────────────────── */
function ddlw_business_schema() {
	if ( ! is_front_page() ) return;
	$schema = [
		'@context'       => 'https://schema.org',
		'@type'          => 'GeneralContractor',
		'additionalType' => 'https://schema.org/HomeAndConstructionBusiness',
		'@id'            => 'https://www.ddlandworks.com/#business',
		'name'           => 'D&D Land Works',
		'url'            => 'https://www.ddlandworks.com/',
		'telephone'      => '+1-541-401-8726',
		'email'          => 'david@ddlandworks.com',
		'founder'        => [ '@type' => 'Person', 'name' => 'David Deggelman' ],
		'identifier'     => [ '@type' => 'PropertyValue', 'propertyID' => 'Oregon CCB License', 'value' => '261742' ],
		'address'        => [ '@type' => 'PostalAddress', 'addressRegion' => 'OR', 'addressCountry' => 'US' ],
		'areaServed'     => [ 'Lane County, Oregon', 'Eugene, Oregon', 'Springfield, Oregon', 'Cottage Grove, Oregon', 'Junction City, Oregon', 'Creswell, Oregon', 'Veneta, Oregon', 'Florence, Oregon', 'Oakridge, Oregon', 'Coburg, Oregon', 'Lowell, Oregon' ],
	];
	echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) . '</script>' . "\n";
}
add_action( 'wp_head', 'ddlw_business_schema' );
