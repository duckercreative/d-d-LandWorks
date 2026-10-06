<?php
/**
 * Auto-populate the Home page with all homepage blocks on theme activation.
 *
 * Runs on after_switch_theme at priority 20 (after ddlw_create_default_pages
 * at priority 10, so the page definitely exists by the time this runs).
 *
 * Only populates the page when its content is empty — completely safe to
 * re-activate the theme; existing block content is never overwritten.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function ddlw_populate_homepage_blocks() {

	$home = get_page_by_path( 'home' );

	// Abort if the page doesn't exist yet or already has content.
	if ( ! $home || ! empty( trim( $home->post_content ) ) ) {
		return;
	}

	// All 9 homepage blocks in page order. Using empty {} so WordPress uses
	// the default attribute values defined in register_block_type().
	$blocks = implode( "\n", array(
		'<!-- wp:ddlw/hero {} /-->',
		'<!-- wp:ddlw/about {} /-->',
		'<!-- wp:ddlw/services-intro {} /-->',
		'<!-- wp:ddlw/project-types {} /-->',
		'<!-- wp:ddlw/process-steps {} /-->',
		'<!-- wp:ddlw/why-choose {} /-->',
		'<!-- wp:ddlw/service-areas-section {} /-->',
		'<!-- wp:ddlw/reviews {} /-->',
		'<!-- wp:ddlw/cta-section {} /-->',
	) );

	wp_update_post( array(
		'ID'           => $home->ID,
		'post_content' => $blocks,
	) );
}
add_action( 'after_switch_theme', 'ddlw_populate_homepage_blocks', 20 );
