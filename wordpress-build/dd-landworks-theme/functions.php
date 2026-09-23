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

define( 'DDLW_VERSION', '1.0.0' );
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

/**
 * Disable the admin bar's frontend CSS shove when logged in as a low-impact
 * default; site owners can re-enable via user profile screen as normal.
 */
add_filter( 'show_admin_bar', '__return_false' );

require DDLW_DIR . '/inc/template-tags.php';
require DDLW_DIR . '/inc/shortcodes.php';
require DDLW_DIR . '/inc/customizer.php';
require DDLW_DIR . '/inc/meta-site-preparation.php';
