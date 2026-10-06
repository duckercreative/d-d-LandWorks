<?php
/**
 * Meta box: Excavation Contractor Eugene page editable content.
 *
 * Adds a panel (visible only when the page template is set to
 * "Excavation Contractor Eugene Page") with labeled fields for every section.
 * All fields have defaults so the page works without touching this panel.
 * Stored as individual post-meta keys prefixed `ec_`.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/* ── Registration ──────────────────────────────────────────────────────────── */

add_action( 'add_meta_boxes', 'ec_register_meta_box' );

function ec_register_meta_box() {
	add_meta_box(
		'ec_page_content',
		'Excavation Contractor — Page Content',
		'ec_render_meta_box',
		'page',
		'normal',
		'high'
	);
}

/* ── Defaults ──────────────────────────────────────────────────────────────── */

function ec_defaults() {
	return array(

		/* Hero */
		'ec_hero_eyebrow'  => 'Eugene, Oregon',
		'ec_hero_title'    => 'Excavation Contractor in Eugene, Oregon',
		'ec_hero_subtitle' => 'Foundation digging, trenching, utility excavation, drainage, and septic work from one licensed, bonded contractor. D&D Land Works serves Eugene, Springfield, and all of Lane County — David walks every site before quoting.',

		/* About */
		'ec_about_eyebrow' => "Eugene's Excavation Contractor",
		'ec_about_heading' => 'Excavation Services for Homes and Businesses in Eugene',
		'ec_about_body'    => "Most construction and land projects in Eugene start with a call to an excavation contractor. D&D Land Works handles the digging, trenching, and earth-moving work that comes before a foundation gets poured, a utility gets connected, or a drainage problem gets fixed. We serve homeowners and builders across Eugene, Springfield, and Lane County.\n\nThe jobs vary. Some calls are for a foundation footprint on a lot that's already cleared and graded. Others start with clearing brush off raw ground before anything can be dug. Some are smaller — a trench for a water service line, a French drain to fix the wet spot next to a crawl space, or a drainfield excavation on a rural parcel that needs a septic system before it can be built on.\n\nDavid Deggelman owns D&D Land Works and walks every site in person before quoting. Licensed and bonded under Oregon CCB #261742 and DEQ certified for septic.",

		/* Services grid — section labels + 6 cards */
		'ec_svc_eyebrow'  => 'Our Services',
		'ec_svc_heading'  => 'What Does Excavation Include?',
		'ec_svc_intro'    => 'Excavation covers the digging and earth-moving work that gets a site ready for construction. The scope depends on the project — foundation depth, utility runs, drainage needs, and what the ground requires before a structure can go on it.',
		'ec_svc_1_title'  => 'Site Preparation',
		'ec_svc_1_desc'   => 'Getting land ready for a building or project. May include clearing, excavation, and grading to create a workable area for the next stage.',
		'ec_svc_2_title'  => 'Land Grading',
		'ec_svc_2_desc'   => 'Changing the shape and level of the ground. May be needed when an area is uneven, needs a new slope, or needs to be shaped for the planned use.',
		'ec_svc_3_title'  => 'Land Clearing',
		'ec_svc_3_desc'   => 'Removing brush, trees, and debris from an area before grading or excavation can begin. Clearing opens the work area so the ground can be prepared.',
		'ec_svc_4_title'  => 'Drainage Excavation',
		'ec_svc_4_desc'   => 'Excavation to create or improve a path for water. The existing ground, slope, and drainage conditions all affect the approach.',
		'ec_svc_5_title'  => 'Septic-Related Excavation',
		'ec_svc_5_desc'   => 'D&D Land Works is DEQ certified for septic installation and repair. The excavation involved depends on the property and the septic project.',
		'ec_svc_6_title'  => 'Trenching',
		'ec_svc_6_desc'   => 'Digging a narrow path for water, sewer, electrical conduit, irrigation, drainage, or other underground work depending on the project.',

		/* Project types — section labels + 6 cards */
		'ec_proj_eyebrow' => 'Eugene Excavation',
		'ec_proj_heading' => 'When Does a Eugene Property Need Excavation?',
		'ec_proj_intro'   => 'You may need excavation when the existing ground does not fit the work you want to do. The reason depends on the property and what you are trying to build, fix, or improve.',
		'ec_proj_1_title' => 'Before Construction Begins',
		'ec_proj_1_desc'  => 'A building site may need clearing, grading, or excavation before any other work can start. The scope depends on what the property currently looks like.',
		'ec_proj_2_title' => 'When the Ground Needs Reshaping',
		'ec_proj_2_desc'  => 'If an area is uneven, too high, or too low for the planned use, grading or excavation can reshape it to fit the project.',
		'ec_proj_3_title' => 'When Water Is Collecting',
		'ec_proj_3_desc'  => 'Standing water around a home, driveway, or yard is often a drainage problem. Excavation can create a path to move water where it needs to go.',
		'ec_proj_4_title' => 'Before Underground Work',
		'ec_proj_4_desc'  => 'Utility lines, irrigation, and drainage systems need a trench. The trench is sized and placed based on what will be installed and where.',
		'ec_proj_5_title' => 'For Septic Projects',
		'ec_proj_5_desc'  => 'New septic systems and repairs may require excavation. D&D Land Works handles the digging connected with applicable septic work.',
		'ec_proj_6_title' => 'When the Driveway Needs Work',
		'ec_proj_6_desc'  => 'Gravel driveways develop ruts, washouts, and uneven areas. Grading and excavation can reshape the ground and restore the surface.',

		/* Process — section labels + 6 steps */
		'ec_proc_eyebrow' => 'Getting Started',
		'ec_proc_heading' => 'How Your Eugene Excavation Project Gets Started',
		'ec_proc_intro'   => 'You do not need to know the exact name of the excavation service before you call. Start by explaining what you are trying to do and what is happening on your property.',
		'ec_proc_1_title' => 'Tell Us What You Need',
		'ec_proc_1_desc'  => 'Tell us what you want to build, repair, clear, dig, or change on your Eugene property.',
		'ec_proc_2_title' => 'Discuss the Property',
		'ec_proc_2_desc'  => 'We can talk about where the work is, what the property looks like, access, slope, drainage, existing structures, and utilities that may affect the job.',
		'ec_proc_3_title' => 'Understand the Scope',
		'ec_proc_3_desc'  => 'Once the property and project are understood, the required excavation or related site work can be discussed in plain terms.',
		'ec_proc_4_title' => 'Get an Estimate',
		'ec_proc_4_desc'  => 'D&D Land Works provides free estimates for applicable excavation and site work projects in Eugene and Lane County.',
		'ec_proc_5_title' => '',
		'ec_proc_5_desc'  => '',
		'ec_proc_6_title' => '',
		'ec_proc_6_desc'  => '',

		/* Why choose — 5 items */
		'ec_why_heading'  => 'Why Choose D&D Land Works for Excavation in Eugene?',
		'ec_why_intro'    => 'Excavation depends on the property, planned construction, and existing site conditions. D&D Land Works provides residential and commercial excavation in Eugene and Lane County with work scoped around the actual job.',
		'ec_why_1_title'  => 'Licensed and Bonded',
		'ec_why_1_desc'   => 'D&D Land Works is licensed and bonded under Oregon CCB #261742 — a credential you can verify at the CCB license lookup before calling.',
		'ec_why_2_title'  => 'Free Estimates',
		'ec_why_2_desc'   => 'Free estimates let the property, access, soil conditions, and planned scope be reviewed before a number is given. No phone estimates built from satellite imagery.',
		'ec_why_3_title'  => 'Foundation Excavation',
		'ec_why_3_desc'   => 'Foundation digs for new homes, ADUs, and commercial structures across Eugene, Springfield, and Lane County. One crew handles clearing, grading, and the foundation box.',
		'ec_why_4_title'  => 'Utility & Trench Work',
		'ec_why_4_desc'   => 'Water service, sewer lateral, conduit, and drainage runs. 811 locates coordinated as a standard part of every trench job.',
		'ec_why_5_title'  => 'DEQ Certified for Septic',
		'ec_why_5_desc'   => 'D&D Land Works is DEQ certified for septic install and repair, covering tank, distribution box, and drainfield excavation on rural Lane County lots.',

		/* Service Areas */
		'ec_areas_eyebrow' => 'Our Service Area',
		'ec_areas_heading' => 'Excavation Services in Eugene and Lane County',
		'ec_areas_intro'   => 'D&D Land Works serves Eugene, Springfield, and surrounding Lane County communities for excavation, site preparation, and septic work. Service areas include Cottage Grove, Junction City, Creswell, Veneta, Florence, Oakridge, Coburg, and Lowell.',

		/* FAQ */
		'ec_faq_heading' => 'Excavation Contractor FAQs — Eugene, Oregon',

		/* Related Services */
		'ec_related_heading' => 'Related Services',

		/* CTA */
		'ec_cta_title'    => 'Need Excavation Work in Eugene?',
		'ec_cta_subtitle' => 'If you have a project in Eugene and are not sure what kind of excavation you need, call D&D Land Works at 541-401-8726. Tell us what you want to do, where the work is, and what problem you are trying to solve. Free estimates, no obligation.',
	);
}

/* ── Helper: detect city name from page slug ───────────────────────────────── */

function ec_city_from_slug( $post_id ) {
	$slug = get_post_field( 'post_name', $post_id );

	// Pattern: excavation-contractor-[city]-or
	if ( preg_match( '/^excavation-contractor-(.+)-or$/', $slug, $m ) ) {
		$map = array(
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
		return $map[ $m[1] ] ?? ucwords( str_replace( '-', ' ', $m[1] ) );
	}

	// Also handle /locations/[city] pages (post_name is just the city slug)
	$location_map = array(
		'oakridge'      => 'Oakridge',
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
	if ( isset( $location_map[ $slug ] ) ) {
		return $location_map[ $slug ];
	}

	return 'Eugene';
}

/* ── Helper: get value (meta → city-aware default) ────────────────────────── */

function ec_get( $post_id, $key ) {
	$stored = get_post_meta( $post_id, $key, true );
	if ( $stored !== '' && $stored !== false ) {
		return $stored;
	}
	$defaults = ec_defaults();
	$default  = $defaults[ $key ] ?? '';

	// Auto-substitute the detected city for "Eugene" in all default strings.
	$city = ec_city_from_slug( $post_id );
	if ( $city !== 'Eugene' ) {
		$default = str_replace( "Eugene's", $city . "'s", $default );
		$default = str_replace( 'Eugene', $city, $default );
	}
	return $default;
}

/* ── Render ────────────────────────────────────────────────────────────────── */

function ec_render_meta_box( $post ) {

	if ( get_page_template_slug( $post->ID ) !== 'page-templates/template-excavation-contractor.php' ) {
		echo '<p style="color:#888;">This panel activates when the page template is set to <strong>Excavation Contractor Eugene Page</strong>.</p>';
		return;
	}

	wp_nonce_field( 'ec_meta_save_' . $post->ID, 'ec_meta_nonce' );
	$id = $post->ID;

	$s = '<style>
		.ec-section { border:1px solid #ddd; border-radius:4px; padding:1rem 1.25rem 1.25rem; margin-bottom:1.25rem; }
		.ec-section legend { font-weight:600; font-size:.85rem; text-transform:uppercase; letter-spacing:.04em; color:#1d2327; padding:0 .4rem; }
		.ec-row { margin-bottom:.9rem; }
		.ec-row label { display:block; font-size:.82rem; font-weight:600; margin-bottom:.3rem; color:#50575e; }
		.ec-row input[type=text], .ec-row textarea { width:100%; box-sizing:border-box; border:1px solid #c3c4c7; border-radius:3px; padding:.45rem .6rem; font-size:.85rem; }
		.ec-row textarea { min-height:90px; resize:vertical; }
		.ec-row .ec-hint { font-size:.75rem; color:#888; margin-top:.2rem; }
		.ec-grid { display:grid; grid-template-columns:1fr 1fr; gap:.75rem 1.25rem; }
		.ec-grid--3 { grid-template-columns:1fr 1fr 1fr; }
		@media (max-width:782px) { .ec-grid, .ec-grid--3 { grid-template-columns:1fr; } }
	</style>';
	echo $s;

	$txt = function( $key, $label, $hint = '' ) use ( $id ) {
		$val = ec_get( $id, $key );
		echo '<div class="ec-row">';
		echo '<label for="' . esc_attr( $key ) . '">' . esc_html( $label ) . '</label>';
		echo '<input type="text" id="' . esc_attr( $key ) . '" name="' . esc_attr( $key ) . '" value="' . esc_attr( $val ) . '" />';
		if ( $hint ) echo '<p class="ec-hint">' . esc_html( $hint ) . '</p>';
		echo '</div>';
	};
	$area = function( $key, $label, $hint = '' ) use ( $id ) {
		$val = ec_get( $id, $key );
		echo '<div class="ec-row">';
		echo '<label for="' . esc_attr( $key ) . '">' . esc_html( $label ) . '</label>';
		echo '<textarea id="' . esc_attr( $key ) . '" name="' . esc_attr( $key ) . '">' . esc_textarea( $val ) . '</textarea>';
		if ( $hint ) echo '<p class="ec-hint">' . esc_html( $hint ) . '</p>';
		echo '</div>';
	};

	/* ── Hero ── */
	echo '<fieldset class="ec-section"><legend>Hero</legend>';
	$txt( 'ec_hero_eyebrow', 'Eyebrow (small label above title)' );
	$txt( 'ec_hero_title', 'Page Title (H1)' );
	$area( 'ec_hero_subtitle', 'Subtitle (paragraph under title)' );
	echo '</fieldset>';

	/* ── About ── */
	echo '<fieldset class="ec-section"><legend>Who We Excavate For Section</legend>';
	$txt( 'ec_about_eyebrow', 'Eyebrow label' );
	$txt( 'ec_about_heading', 'Heading' );
	$area( 'ec_about_body', 'Body text', 'Separate paragraphs with a blank line.' );
	echo '</fieldset>';

	/* ── Services ── */
	echo '<fieldset class="ec-section"><legend>What Excavation Includes (6 service cards)</legend>';
	$txt( 'ec_svc_eyebrow', 'Eyebrow label' );
	$txt( 'ec_svc_heading', 'Section heading' );
	$area( 'ec_svc_intro', 'Intro paragraph' );
	echo '<div class="ec-grid" style="margin-top:.75rem;">';
	for ( $i = 1; $i <= 6; $i++ ) {
		echo '<div>';
		echo '<p style="font-size:.8rem;font-weight:700;margin:0 0 .5rem;color:#1d2327;">Card ' . $i . '</p>';
		$txt( "ec_svc_{$i}_title", 'Title' );
		$area( "ec_svc_{$i}_desc", 'Description' );
		echo '</div>';
	}
	echo '</div></fieldset>';

	/* ── Project Types ── */
	echo '<fieldset class="ec-section"><legend>Excavation Projects We Handle (6 cards)</legend>';
	$txt( 'ec_proj_eyebrow', 'Eyebrow label' );
	$txt( 'ec_proj_heading', 'Section heading' );
	$area( 'ec_proj_intro', 'Intro paragraph' );
	echo '<div class="ec-grid" style="margin-top:.75rem;">';
	for ( $i = 1; $i <= 6; $i++ ) {
		echo '<div>';
		echo '<p style="font-size:.8rem;font-weight:700;margin:0 0 .5rem;color:#1d2327;">Card ' . $i . '</p>';
		$txt( "ec_proj_{$i}_title", 'Title' );
		$area( "ec_proj_{$i}_desc", 'Description' );
		echo '</div>';
	}
	echo '</div></fieldset>';

	/* ── Process ── */
	echo '<fieldset class="ec-section"><legend>How It Works (6 steps)</legend>';
	$txt( 'ec_proc_eyebrow', 'Eyebrow label' );
	$txt( 'ec_proc_heading', 'Section heading' );
	$area( 'ec_proc_intro', 'Intro paragraph' );
	echo '<div class="ec-grid" style="margin-top:.75rem;">';
	for ( $i = 1; $i <= 6; $i++ ) {
		echo '<div>';
		echo '<p style="font-size:.8rem;font-weight:700;margin:0 0 .5rem;color:#1d2327;">Step ' . $i . '</p>';
		$txt( "ec_proc_{$i}_title", 'Title' );
		$area( "ec_proc_{$i}_desc", 'Description' );
		echo '</div>';
	}
	echo '</div></fieldset>';

	/* ── Why Choose ── */
	echo '<fieldset class="ec-section"><legend>Why Choose D&amp;D Land Works (5 items)</legend>';
	$txt( 'ec_why_heading', 'Section heading' );
	$area( 'ec_why_intro', 'Intro paragraph' );
	echo '<div class="ec-grid" style="margin-top:.75rem;">';
	for ( $i = 1; $i <= 5; $i++ ) {
		echo '<div>';
		echo '<p style="font-size:.8rem;font-weight:700;margin:0 0 .5rem;color:#1d2327;">Item ' . $i . '</p>';
		$txt( "ec_why_{$i}_title", 'Title' );
		$area( "ec_why_{$i}_desc", 'Description' );
		echo '</div>';
	}
	echo '</div></fieldset>';

	/* ── Service Areas ── */
	echo '<fieldset class="ec-section"><legend>Service Areas</legend>';
	$txt( 'ec_areas_eyebrow', 'Eyebrow label' );
	$txt( 'ec_areas_heading', 'Section heading' );
	$area( 'ec_areas_intro', 'Intro paragraph' );
	echo '</fieldset>';

	/* ── FAQ ── */
	echo '<fieldset class="ec-section"><legend>FAQ</legend>';
	$txt( 'ec_faq_heading', 'Section heading' );
	echo '</fieldset>';

	/* ── Related Services ── */
	echo '<fieldset class="ec-section"><legend>Related Services</legend>';
	$txt( 'ec_related_heading', 'Section heading' );
	echo '</fieldset>';

	/* ── CTA ── */
	echo '<fieldset class="ec-section"><legend>CTA Block (bottom of page)</legend>';
	$txt( 'ec_cta_title', 'Heading' );
	$area( 'ec_cta_subtitle', 'Body paragraph' );
	echo '</fieldset>';
}

/* ── Save ──────────────────────────────────────────────────────────────────── */

add_action( 'save_post_page', 'ec_save_meta' );

function ec_save_meta( $post_id ) {

	if ( ! isset( $_POST['ec_meta_nonce'] ) ) {
		return;
	}
	if ( ! wp_verify_nonce( $_POST['ec_meta_nonce'], 'ec_meta_save_' . $post_id ) ) {
		return;
	}
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	if ( ! current_user_can( 'edit_page', $post_id ) ) {
		return;
	}

	$text_fields = array(
		'ec_hero_eyebrow', 'ec_hero_title',
		'ec_about_eyebrow', 'ec_about_heading',
		'ec_svc_eyebrow', 'ec_svc_heading',
		'ec_svc_1_title', 'ec_svc_2_title', 'ec_svc_3_title',
		'ec_svc_4_title', 'ec_svc_5_title', 'ec_svc_6_title',
		'ec_proj_eyebrow', 'ec_proj_heading',
		'ec_proj_1_title', 'ec_proj_2_title', 'ec_proj_3_title',
		'ec_proj_4_title', 'ec_proj_5_title', 'ec_proj_6_title',
		'ec_proc_eyebrow', 'ec_proc_heading',
		'ec_proc_1_title', 'ec_proc_2_title', 'ec_proc_3_title',
		'ec_proc_4_title', 'ec_proc_5_title', 'ec_proc_6_title',
		'ec_why_heading',
		'ec_why_1_title', 'ec_why_2_title', 'ec_why_3_title', 'ec_why_4_title', 'ec_why_5_title',
		'ec_areas_eyebrow', 'ec_areas_heading',
		'ec_faq_heading',
		'ec_related_heading',
		'ec_cta_title',
	);

	$textarea_fields = array(
		'ec_hero_subtitle', 'ec_about_body',
		'ec_svc_intro',
		'ec_svc_1_desc', 'ec_svc_2_desc', 'ec_svc_3_desc',
		'ec_svc_4_desc', 'ec_svc_5_desc', 'ec_svc_6_desc',
		'ec_proj_intro',
		'ec_proj_1_desc', 'ec_proj_2_desc', 'ec_proj_3_desc',
		'ec_proj_4_desc', 'ec_proj_5_desc', 'ec_proj_6_desc',
		'ec_proc_intro',
		'ec_proc_1_desc', 'ec_proc_2_desc', 'ec_proc_3_desc',
		'ec_proc_4_desc', 'ec_proc_5_desc', 'ec_proc_6_desc',
		'ec_why_intro',
		'ec_why_1_desc', 'ec_why_2_desc', 'ec_why_3_desc', 'ec_why_4_desc', 'ec_why_5_desc',
		'ec_areas_intro',
		'ec_cta_subtitle',
	);

	foreach ( $text_fields as $key ) {
		if ( isset( $_POST[ $key ] ) ) {
			update_post_meta( $post_id, $key, sanitize_text_field( wp_unslash( $_POST[ $key ] ) ) );
		}
	}

	foreach ( $textarea_fields as $key ) {
		if ( isset( $_POST[ $key ] ) ) {
			update_post_meta( $post_id, $key, sanitize_textarea_field( wp_unslash( $_POST[ $key ] ) ) );
		}
	}
}
