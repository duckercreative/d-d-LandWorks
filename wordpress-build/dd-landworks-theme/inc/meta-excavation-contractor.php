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
		'ec_svc_1_title'  => 'Foundation Excavation',
		'ec_svc_1_desc'   => 'Digging the footprint for a foundation, crawl space, or basement to the depth and grade your footing plan requires. We cut clean and leave the box square for the concrete crew.',
		'ec_svc_2_title'  => 'Trenching & Backfill',
		'ec_svc_2_desc'   => 'Trench digging for water lines, sewer laterals, electrical conduit, and drainage pipe. We dig to grade, bed the pipe, and backfill in lifts so the trench doesn\'t settle under a driveway or pad.',
		'ec_svc_3_title'  => 'Utility Excavation',
		'ec_svc_3_desc'   => 'Water service, sewer, storm drain, and conduit runs from the street or meter to the structure. We work around existing utilities and coordinate with 811 locates before anything moves.',
		'ec_svc_4_title'  => 'Site Preparation',
		'ec_svc_4_desc'   => 'Clearing, grading, and compaction before a foundation crew arrives. Most Eugene-area lots need clearing before excavation can start — we handle both in sequence.',
		'ec_svc_5_title'  => 'Drainage Excavation',
		'ec_svc_5_desc'   => 'French drains, swales, curtain drains, and catch-basin installations to move water away from a structure or correct a standing-water problem on a Lane County property.',
		'ec_svc_6_title'  => 'Septic Excavation',
		'ec_svc_6_desc'   => 'Tank placement, distribution box, and drainfield trenching for on-site septic systems. D&D Land Works is DEQ certified for septic install and repair throughout Lane County.',

		/* Project types — section labels + 6 cards */
		'ec_proj_eyebrow' => 'Who We Work For',
		'ec_proj_heading' => 'Excavation Projects We Handle in Eugene',
		'ec_proj_intro'   => 'No two excavation jobs in Lane County are the same. The scope, soil, and access change every time. Here are the most common project types we handle across Eugene and the surrounding area.',
		'ec_proj_1_title' => 'New Home Build',
		'ec_proj_1_desc'  => "The most common call: a raw Eugene or Springfield lot that needs clearing, grading, foundation dig, and utility trenching before a builder's crew shows up.",
		'ec_proj_2_title' => 'ADU or Detached Shop',
		'ec_proj_2_desc'  => 'ADU and outbuilding footprints require their own foundation excavation. On lots that already have a primary structure, utility connections and access constraints get tighter.',
		'ec_proj_3_title' => 'Driveway and Access',
		'ec_proj_3_desc'  => "Driveway cuts through berms, culvert placement, and access road grading for rural Lane County properties that need a machine to reach the job site.",
		'ec_proj_4_title' => 'Utility Runs',
		'ec_proj_4_desc'  => 'Water service, sewer lateral, septic, and conduit runs from the street or meter to the structure. Common on infill lots and rural properties with new structures going in.',
		'ec_proj_5_title' => 'Drainage Correction',
		'ec_proj_5_desc'  => "Standing water, wet crawl spaces, and soggy grades across Eugene's valley floor and clay-heavy soils. French drains, curtain drains, and swales move the water somewhere it belongs.",
		'ec_proj_6_title' => 'Septic Install or Repair',
		'ec_proj_6_desc'  => 'On-site septic for rural and unincorporated Lane County properties. D&D Land Works is DEQ certified and handles tank, distribution box, and drainfield excavation through one crew.',

		/* Process — section labels + 6 steps */
		'ec_proc_eyebrow' => 'How It Works',
		'ec_proc_heading' => 'How the Excavation Process Works in Eugene',
		'ec_proc_intro'   => 'Every excavation job follows a sequence. The specific steps depend on the scope, but the order is consistent — from utility locates through final cleanup.',
		'ec_proc_1_title' => 'Call 811 — utility locate',
		'ec_proc_1_desc'  => 'Required before any digging in Oregon. All underground utilities must be marked before equipment breaks ground. Allow several business days and verify all marks are on site.',
		'ec_proc_2_title' => 'Site walk and scope',
		'ec_proc_2_desc'  => 'David walks the property, confirms existing grades and underground conditions, reviews plan dimensions, and identifies access or soil conditions that will affect the job.',
		'ec_proc_3_title' => 'Permits (if required)',
		'ec_proc_3_desc'  => "Lane County and Oregon DEQ permits may apply depending on scope. Foundation excavation under an active building permit is generally exempt; driveway and utility work may not be.",
		'ec_proc_4_title' => 'Equipment mobilization',
		'ec_proc_4_desc'  => 'Machine selection and access planning happen before the crew arrives. Tight lots, narrow gates, and buried utilities all affect how equipment enters and sets up on site.',
		'ec_proc_5_title' => 'Excavation and grading',
		'ec_proc_5_desc'  => 'Digging, trenching, or cut-and-fill proceeds to the plan dimensions and elevations. Spoils are stockpiled on-site or hauled depending on what the job requires.',
		'ec_proc_6_title' => 'Backfill, compact, and cleanup',
		'ec_proc_6_desc'  => 'After inspections, trenches and disturbed areas are backfilled in lifts and compacted. The site is cleaned before the crew leaves so the next trade can start without clearing excavation debris.',

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
		'ec_cta_title'    => 'Get Your Eugene Excavation Project Scoped',
		'ec_cta_subtitle' => 'Free estimate for excavation, trenching, foundation digging, or site prep anywhere in Eugene or Lane County. David walks the site first and gives you a real number based on the actual job.',
	);
}

/* ── Helper: get value (meta → default) ───────────────────────────────────── */

function ec_get( $post_id, $key ) {
	$stored   = get_post_meta( $post_id, $key, true );
	$defaults = ec_defaults();
	return ( $stored !== '' && $stored !== false ) ? $stored : ( $defaults[ $key ] ?? '' );
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
