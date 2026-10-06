<?php
/**
 * Small render helpers shared across templates and shortcodes.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Path to a bundled theme image (assets/images/*). These are the same real
 * + AI-generated jobsite photos used on the Astro build — see this theme's
 * README.md for provenance notes on which is which.
 */
function ddlw_img( $filename ) {
	return DDLW_URI . '/assets/images/' . ltrim( $filename, '/' );
}

/**
 * Renders a 5-star rating row. $filled is a 1-5 integer (rounded).
 */
function ddlw_stars( $rating, $size = '0.875rem' ) {
	$filled = (int) round( $rating );
	$star_path = 'M10 1.5l2.6 5.3 5.9.9-4.3 4.1 1 5.8L10 14.8l-5.2 2.8 1-5.8-4.3-4.1 5.9-.9L10 1.5z';
	$out = '<span class="stars">';
	for ( $i = 1; $i <= 5; $i++ ) {
		$class = $i <= $filled ? 'is-filled' : '';
		$out  .= '<svg style="height:' . esc_attr( $size ) . ';width:' . esc_attr( $size ) . ';" class="' . esc_attr( $class ) . '" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="' . $star_path . '" /></svg>';
	}
	$out .= '</span>';
	return $out;
}

/**
 * Social link list — same set/order as the Astro Header/Footer components.
 * Swap "#" for real profile URLs once those accounts exist.
 */
function ddlw_social_links() {
	return array(
		array(
			'label' => 'Facebook',
			'href'  => '#',
			'path'  => 'M9.101 23.691v-7.98H6.627v-3.667h2.474v-2.796c0-4.339 2.784-6.706 6.593-6.706 1.815 0 3.375.135 3.828.196v4.361h-2.65c-1.756 0-2.087.834-2.087 2.057v2.696h4.155l-.606 3.667h-3.549v7.98H9.101z',
		),
		array(
			'label' => 'Instagram',
			'href'  => '#',
			'path'  => 'M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.012-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z',
		),
		array(
			'label' => 'YouTube',
			'href'  => '#',
			'path'  => 'M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z',
		),
		array(
			'label' => 'Google Business Profile',
			'href'  => '#',
			'path'  => 'M12.48 10.92v3.28h7.84c-.24 1.84-.853 3.187-1.787 4.133-1.147 1.147-2.933 2.4-6.053 2.4-4.827 0-8.6-3.893-8.6-8.72s3.773-8.72 8.6-8.72c2.6 0 4.507 1.027 5.907 2.347l2.307-2.307C18.747 1.44 16.133 0 12.48 0 5.867 0 .307 5.387.307 12s5.56 12 12.173 12c3.573 0 6.267-1.173 8.373-3.36 2.16-2.16 2.84-5.213 2.84-7.667 0-.76-.053-1.467-.173-2.053H12.48z',
		),
	);
}

function ddlw_render_social_links( $class = '' ) {
	foreach ( ddlw_social_links() as $social ) {
		echo '<a href="' . esc_url( $social['href'] ) . '" aria-label="' . esc_attr( $social['label'] ) . '" class="' . esc_attr( $class ) . '"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="' . $social['path'] . '" /></svg></a>';
	}
}

/**
 * The 12 services, in the same Core/Additional grouping used by
 * Header.astro's mega-menu and index.astro's homepage grid. Centralized
 * here so the mega-menu, homepage grid, and footer list all stay in sync.
 */
function ddlw_services() {
	return array(
		array( 'title' => 'Site Preparation',       'slug' => 'site-preparation',                   'href' => '/site-preparation-contractor-eugene-or',    'group' => 'core',       'description' => 'Clearing, rough grading, and access prep before a builder or crew arrives.' ),
		array( 'title' => 'Excavation',              'slug' => 'excavation',                          'href' => '/excavation-contractor-eugene-or',           'group' => 'core',       'description' => 'General earthwork for new construction, additions, and land improvements.' ),
		array( 'title' => 'Land Clearing',             'slug' => 'land-clearing',                      'href' => '/land-clearing-services-eugene-or',          'group' => 'core',       'description' => 'Full clearing or lighter brush-clearing scopes for raw land.' ),
		array( 'title' => 'Grading & Leveling',      'slug' => 'grading-leveling',                   'href' => '/land-grading-services-eugene-or',           'group' => 'core',       'description' => 'Rough and finish grading for building pads, yards, and drainage slope.' ),
		array( 'title' => 'Septic Install & Repairs','slug' => 'septic-installation-lane-county-or','href' => '/septic-installation-lane-county-or',      'group' => 'core',       'description' => 'DEQ-certified septic system work, install and repair.' ),
		array( 'title' => 'Foundation Excavation',   'slug' => 'foundation-excavation',              'href' => '/foundation-excavation-eugene-or',           'group' => 'additional', 'description' => 'Digging and prep for home, shop, barn, and ADU foundations.' ),
		array( 'title' => 'Drainage Excavation',     'slug' => 'drainage-excavation',                'href' => '/drainage-installation-eugene-or',           'group' => 'additional', 'description' => 'Excavation and grading to correct standing water and poor yard drainage.' ),
		array( 'title' => 'Utility Excavation',      'slug' => 'utility-excavation',                 'href' => '/utility-trenching-eugene-or',               'group' => 'additional', 'description' => 'Trenching and backfill for water, sewer, and utility lines.' ),
		array( 'title' => 'Driveway Repair',          'slug' => 'driveway-repair',                    'href' => '/driveway-excavation-grading-eugene-or',     'group' => 'additional', 'description' => 'Regrading and re-rocking gravel driveways and access roads.' ),
		array( 'title' => 'Trenching & Backfill',    'slug' => 'trenching-backfill',                 'href' => '/trenching-services-eugene-or',              'group' => 'additional', 'description' => 'Trenching and compacted backfill for utility and drainage lines.' ),
		array( 'title' => 'Brush Clearing',          'slug' => 'brush-clearing',                     'href' => '/brush-clearing-eugene-or',                  'group' => 'additional', 'description' => 'Lighter clearing scopes: overgrowth, blackberry, and defensible space.' ),
		array( 'title' => 'Slope Stabilization',     'slug' => 'slope-stabilization',               'href' => '/slope-stabilization-eugene-or',             'group' => 'additional', 'description' => 'Earthwork and grading to address erosion-prone or unstable slopes.' ),
	);
}

/**
 * Returns the canonical URL for a city page.
 */
function ddlw_city_url( $slug ) {
	if ( ! $slug ) {
		return home_url( '/service-area' );
	}
	return home_url( '/excavation-contractor-' . $slug . '-or' );
}

/**
 * Per-page CTA data for service pages — mirrors CTABlock props on each
 * Astro service page. Returns array with keys: eyebrow, title, subtitle,
 * cta_label. Falls back to empty array (ddlw_cta_block uses its defaults).
 */
function ddlw_service_cta( $slug ) {
	$map = array(
		'site-preparation-contractor-eugene-or' => array(
			'title'     => 'Get a Free Site Preparation Estimate',
			'subtitle'  => 'Getting your property ready starts with looking at the ground and the work you need to do. D&D Land Works provides free estimates for residential and commercial projects in Eugene and Lane County. We can look at access, drainage, earthwork, and other site conditions before work begins.',
			'cta_label' => 'Request a Free Estimate',
		),
		'land-clearing-services-eugene-or' => array(
			'title'     => 'Ready to Clear Your Property?',
			'subtitle'  => 'Get in touch with D&D Land Works to discuss your land clearing needs in Eugene and the surrounding Lane County area.',
			'cta_label' => 'Request a Free Estimate',
		),
		'land-grading-services-eugene-or' => array(
			'title'     => 'Discuss Your Property Grading Needs',
			'subtitle'  => 'Every property has different grading needs. Tell us what you want to use the land for, and we can look at the existing slope, grade, drainage, access, and ground conditions. We provide free estimates for residential and commercial grading projects in Eugene and Lane County.',
			'cta_label' => 'Talk About Your Grading Project',
		),
		'septic-installation-lane-county-or' => array(
			'title'     => 'Talk With D&D Land Works About Your Septic Project',
			'subtitle'  => 'If you are planning a new septic system in Lane County, start with the property and what it needs. Call 541-401-8726 to discuss your project, ask questions, and request a free estimate.',
			'cta_label' => 'Request a Free Estimate',
		),
		'foundation-excavation-eugene-or' => array(
			'title'     => 'Talk With D&D Land Works About Your Foundation Excavation',
			'subtitle'  => 'If you are planning a new foundation, we can talk through the excavation, site access, and ground conditions. Call 541-401-8726 to discuss your project and request a free estimate. D&D Land Works is licensed and bonded, CCB #261742.',
			'cta_label' => 'Request a Free Estimate',
		),
		'drainage-installation-eugene-or' => array(
			'title'     => 'Have Us Look at the Water on Your Property',
			'subtitle'  => 'If water is sitting in your yard, crossing your driveway, or moving toward your house, give us a call. David can walk the property with you, look at where the water is coming from, and talk through what may help.',
			'cta_label' => 'Request a Free Estimate',
		),
		'utility-trenching-eugene-or' => array(
			'title'     => 'Need a Utility Trench?',
			'subtitle'  => 'If you need a trench for a water line, sewer line, or electrical conduit, we can look at the property and talk through the excavation needed. David can review the site, access, and project requirements with you. D&D Land Works serves Eugene, Springfield, and nearby Lane County areas.',
			'cta_label' => 'Request a Free Estimate',
		),
		'driveway-excavation-grading-eugene-or' => array(
			'eyebrow'   => 'Talk With David',
			'title'     => "Let's Talk About Your Driveway",
			'subtitle'  => "Not sure if your driveway needs grading, excavation, or gravel work? Call 541-401-8726. We can discuss what you are seeing and help you understand what may be needed.",
			'cta_label' => 'Request a Free Estimate',
		),
		'trenching-services-eugene-or' => array(
			'eyebrow'   => 'Talk With David',
			'title'     => 'Need a Trench Dug on Your Eugene-Area Property?',
			'subtitle'  => 'If you need a trench for water, utilities, irrigation, drainage, or another project, D&D Land Works can look at the digging involved. Call 541-401-8726 to discuss your project and get a free estimate.',
			'cta_label' => 'Request a Free Estimate',
		),
		'brush-clearing-eugene-or' => array(
			'eyebrow'   => 'Talk With David',
			'title'     => 'Need Brush Cleared on Your Eugene-Area Property?',
			'subtitle'  => 'If your property has overgrown brush, blackberries, or dense undergrowth, we can look at the site and discuss what the clearing work may involve. Call 541-401-8726 for a free estimate.',
			'cta_label' => 'Request a Free Estimate',
		),
		'slope-stabilization-eugene-or' => array(
			'eyebrow'   => 'Talk With David',
			'title'     => 'Dealing With a Slope or Erosion Problem?',
			'subtitle'  => 'If you have erosion, runoff, or an unstable slope on your Eugene-area property, we can look at the site and discuss what grading or excavation work may help. Call 541-401-8726 for a free estimate.',
			'cta_label' => 'Request a Free Estimate',
		),
		'site-preparation-contractor-springfield-or' => array(
			'title'     => 'Get Your Springfield Lot Scoped',
			'subtitle'  => 'Free estimate for site preparation anywhere in Springfield or Lane County.',
			'cta_label' => 'Request a Free Estimate',
		),
	);
	return isset( $map[ $slug ] ) ? $map[ $slug ] : array();
}

/**
 * Service-area city list — same grouping as Header.astro / Footer.astro /
 * service-area.astro.
 */
function ddlw_service_areas() {
	return array(
		'primary'   => array(
			array( 'label' => 'Lane County, OR (all areas)', 'slug' => '',              'href' => '/service-area' ),
			array( 'label' => 'Eugene, OR',                  'slug' => 'eugene',        'href' => '/excavation-contractor-eugene-or' ),
			array( 'label' => 'Springfield, OR',             'slug' => 'springfield',   'href' => '/excavation-contractor-springfield-or' ),
		),
		'secondary' => array(
			array( 'label' => 'Cottage Grove, OR', 'slug' => 'cottage-grove', 'href' => '/excavation-contractor-cottage-grove-or' ),
			array( 'label' => 'Junction City, OR', 'slug' => 'junction-city', 'href' => '/excavation-contractor-junction-city-or' ),
			array( 'label' => 'Creswell, OR',      'slug' => 'creswell',      'href' => '/excavation-contractor-creswell-or' ),
			array( 'label' => 'Veneta, OR',         'slug' => 'veneta',        'href' => '/excavation-contractor-veneta-or' ),
		),
		'further'   => array(
			array( 'label' => 'Florence, OR', 'slug' => 'florence', 'href' => '/excavation-contractor-florence-or' ),
			array( 'label' => 'Oakridge, OR', 'slug' => 'oakridge', 'href' => '/locations/oakridge' ),
			array( 'label' => 'Coburg, OR',   'slug' => 'coburg',   'href' => '/excavation-contractor-coburg-or' ),
			array( 'label' => 'Lowell, OR',   'slug' => 'lowell',   'href' => '/excavation-contractor-lowell-or' ),
		),
	);
}
