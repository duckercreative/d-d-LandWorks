<?php
/**
 * Meta box: Site Preparation Page editable content.
 *
 * Adds a panel (visible only when the page template is set to
 * "Site Preparation Page") with labeled fields for every section.
 * All fields have defaults so the page works without ever touching
 * this panel. Stored as individual post-meta keys prefixed `sp_`.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/* ── Registration ──────────────────────────────────────────────────────────── */

add_action( 'add_meta_boxes', 'sp_register_meta_box' );

function sp_register_meta_box() {
	add_meta_box(
		'sp_page_content',
		'Site Preparation — Page Content',
		'sp_render_meta_box',
		'page',
		'normal',
		'high'
	);
}

/* ── Defaults ──────────────────────────────────────────────────────────────── */

function sp_defaults() {
	return array(

		/* Hero */
		'sp_hero_eyebrow'  => 'Eugene, Oregon',
		'sp_hero_title'    => 'Site Preparation Contractor in Eugene, Oregon',
		'sp_hero_subtitle' => "D&D Land Works prepares residential and commercial properties for construction. Our site preparation work can include land clearing, grading, and leveling. We serve Eugene and Lane County and adjust the work to the site's existing conditions and construction requirements.",

		/* About / Difference */
		'sp_about_heading' => "What's the Difference Between Site Preparation and Excavation?",
		'sp_about_body'    => "Site preparation is the broader work that gets a property ready for construction. It can include land clearing, topsoil stripping, cut and fill, grading, leveling, and compaction based on existing site conditions and planned construction.\n\nExcavation is more specific digging work. It may involve preparing areas for foundations, utilities, drainage, or other construction needs.\n\nThe two can occur on the same project. Site preparation establishes suitable ground conditions, while excavation addresses specific areas that must be dug for the next construction stage. The required scope depends on the property, construction plans, elevations, access, drainage, and existing ground conditions on site.",

		/* Services grid — 4 cards */
		'sp_svc_1_title' => 'Land Clearing',
		'sp_svc_1_desc'  => 'Land clearing removes brush, vegetation, debris, and other surface obstacles from the property. This creates usable space for grading and prepares the site for planned construction work.',
		'sp_svc_2_title' => 'Topsoil Stripping',
		'sp_svc_2_desc'  => 'Topsoil stripping removes the surface soil layer before grading begins. Suitable topsoil can be stockpiled for later use while the underlying ground is prepared for construction.',
		'sp_svc_3_title' => 'Cut and Fill',
		'sp_svc_3_desc'  => 'Cut and fill moves soil to change existing ground elevations. It helps shape building areas to planned grades when the property requires significant changes in elevation.',
		'sp_svc_4_title' => 'Grading',
		'sp_svc_4_desc'  => 'Grading adjusts existing ground elevations to meet planned site requirements. It shapes the construction area and establishes suitable grades for the building and surrounding ground.',

		/* Problems — 4 cards */
		'sp_prob_1_title' => 'Raw or Undeveloped Land',
		'sp_prob_1_desc'  => 'Raw or undeveloped lots may require clearing, debris removal, topsoil work, and grading before construction can begin. Site preparation creates a workable area for the next stage of the project.',
		'sp_prob_2_title' => 'Poor Grading',
		'sp_prob_2_desc'  => 'Poor grading can leave uneven ground or unsuitable elevations across a construction area. Site preparation adjusts the existing grades to create ground conditions that match the planned construction requirements.',
		'sp_prob_3_title' => 'Drainage and Surface Water',
		'sp_prob_3_desc'  => 'Drainage problems can leave water collecting in areas of the property. Site preparation can address grading and ground conditions that affect how surface water moves across the site.',
		'sp_prob_4_title' => 'Difficult Site Access',
		'sp_prob_4_desc'  => 'Limited or damaged access can make it harder to move equipment and materials onto the property. Site preparation may include work that improves access for the planned construction activities.',

		/* Process — 4 steps */
		'sp_proc_1_title' => 'Project Assessment',
		'sp_proc_1_desc'  => 'The property and planned construction are reviewed before work begins. Existing grades, soil, access, drainage, and other site conditions help determine the preparation work required.',
		'sp_proc_2_title' => 'Site Clearing',
		'sp_proc_2_desc'  => 'The work area is cleared of vegetation, brush, debris, and other obstacles that could interfere with site preparation. This creates a workable area for the planned construction.',
		'sp_proc_3_title' => 'Site Grading',
		'sp_proc_3_desc'  => 'The prepared ground is shaped to meet planned elevations and site requirements. Cut, fill, grading, and leveling may be used where changes to existing ground levels are needed.',
		'sp_proc_4_title' => 'Ground Compaction',
		'sp_proc_4_desc'  => "Prepared ground is compacted after earthwork to create a suitable subgrade for the next construction stage. The required compaction work depends on the site's existing ground conditions.",

		/* Why choose — 5 items */
		'sp_why_heading' => 'Why Choose D&D Land Works for Site Preparation?',
		'sp_why_intro'   => 'Site preparation depends on the property, planned construction, and existing site conditions. D&D Land Works provides residential and commercial site preparation in Eugene and Lane County, with work scoped around the property and project requirements.',
		'sp_why_1_title' => 'Licensed and Bonded',
		'sp_why_1_desc'  => 'D&D Land Works is licensed and bonded in Oregon. This provides a clear contractor credential for residential and commercial site preparation work.',
		'sp_why_2_title' => 'Free Estimates',
		'sp_why_2_desc'  => 'Free estimates allow the property, access, existing conditions, and planned work to be discussed before the site preparation scope is established.',
		'sp_why_3_title' => 'Residential Projects',
		'sp_why_3_desc'  => 'D&D Land Works provides site preparation for residential construction, including properties in Eugene, Springfield, and surrounding Lane County communities.',
		'sp_why_4_title' => 'Commercial Projects',
		'sp_why_4_desc'  => "Commercial site preparation is scoped around the property's conditions, access, planned construction, and earthwork requirements for the project.",
		'sp_why_5_title' => 'DEQ Certified for Septic Work',
		'sp_why_5_desc'  => 'D&D Land Works is DEQ certified for relevant septic installation and repair work, including excavation associated with applicable septic projects.',

		/* CTA */
		'sp_cta_title'    => 'Get a Free Site Preparation Estimate',
		'sp_cta_subtitle' => 'Planning site preparation starts with understanding the property and construction requirements. D&D Land Works provides free estimates for residential and commercial projects, with the scope based on existing site conditions, earthwork, access, drainage, and the work needed before construction begins.',
	);
}

/* ── Helper: get value (meta → default) ───────────────────────────────────── */

function sp_get( $post_id, $key ) {
	$stored   = get_post_meta( $post_id, $key, true );
	$defaults = sp_defaults();
	return ( $stored !== '' && $stored !== false ) ? $stored : ( $defaults[ $key ] ?? '' );
}

/* ── Render ────────────────────────────────────────────────────────────────── */

function sp_render_meta_box( $post ) {

	if ( get_page_template_slug( $post->ID ) !== 'page-templates/template-site-preparation.php' ) {
		echo '<p style="color:#888;">This panel activates when the page template is set to <strong>Site Preparation Page</strong>.</p>';
		return;
	}

	wp_nonce_field( 'sp_meta_save_' . $post->ID, 'sp_meta_nonce' );
	$id = $post->ID;

	$s = '<style>
		.sp-section { border:1px solid #ddd; border-radius:4px; padding:1rem 1.25rem 1.25rem; margin-bottom:1.25rem; }
		.sp-section legend { font-weight:600; font-size:.85rem; text-transform:uppercase; letter-spacing:.04em; color:#1d2327; padding:0 .4rem; }
		.sp-row { margin-bottom:.9rem; }
		.sp-row label { display:block; font-size:.82rem; font-weight:600; margin-bottom:.3rem; color:#50575e; }
		.sp-row input[type=text], .sp-row textarea { width:100%; box-sizing:border-box; border:1px solid #c3c4c7; border-radius:3px; padding:.45rem .6rem; font-size:.85rem; }
		.sp-row textarea { min-height:90px; resize:vertical; }
		.sp-row .sp-hint { font-size:.75rem; color:#888; margin-top:.2rem; }
		.sp-grid { display:grid; grid-template-columns:1fr 1fr; gap:.75rem 1.25rem; }
		@media (max-width:782px) { .sp-grid { grid-template-columns:1fr; } }
	</style>';
	echo $s;

	/* ── helper closures ── */
	$txt = function( $key, $label, $hint = '' ) use ( $id ) {
		$val = sp_get( $id, $key );
		echo '<div class="sp-row">';
		echo '<label for="' . esc_attr( $key ) . '">' . esc_html( $label ) . '</label>';
		echo '<input type="text" id="' . esc_attr( $key ) . '" name="' . esc_attr( $key ) . '" value="' . esc_attr( $val ) . '" />';
		if ( $hint ) echo '<p class="sp-hint">' . esc_html( $hint ) . '</p>';
		echo '</div>';
	};
	$area = function( $key, $label, $hint = '' ) use ( $id ) {
		$val = sp_get( $id, $key );
		echo '<div class="sp-row">';
		echo '<label for="' . esc_attr( $key ) . '">' . esc_html( $label ) . '</label>';
		echo '<textarea id="' . esc_attr( $key ) . '" name="' . esc_attr( $key ) . '">' . esc_textarea( $val ) . '</textarea>';
		if ( $hint ) echo '<p class="sp-hint">' . esc_html( $hint ) . '</p>';
		echo '</div>';
	};

	/* ── Hero ── */
	echo '<fieldset class="sp-section"><legend>Hero</legend>';
	$txt( 'sp_hero_eyebrow', 'Eyebrow (small label above title)' );
	$txt( 'sp_hero_title', 'Page Title (H1)' );
	$area( 'sp_hero_subtitle', 'Subtitle (paragraph under title)' );
	echo '</fieldset>';

	/* ── About / Difference ── */
	echo '<fieldset class="sp-section"><legend>Site Prep vs. Excavation Section</legend>';
	$txt( 'sp_about_heading', 'Heading' );
	$area( 'sp_about_body', 'Body text', 'Separate paragraphs with a blank line.' );
	echo '</fieldset>';

	/* ── Services ── */
	echo '<fieldset class="sp-section"><legend>What Site Prep Includes (4 service cards)</legend>';
	echo '<div class="sp-grid">';
	for ( $i = 1; $i <= 4; $i++ ) {
		echo '<div>';
		echo '<p style="font-size:.8rem;font-weight:700;margin:0 0 .5rem;color:#1d2327;">Card ' . $i . '</p>';
		$txt( "sp_svc_{$i}_title", 'Title' );
		$area( "sp_svc_{$i}_desc", 'Description' );
		echo '</div>';
	}
	echo '</div></fieldset>';

	/* ── Problems ── */
	echo '<fieldset class="sp-section"><legend>Problems We Help Address (4 cards)</legend>';
	echo '<div class="sp-grid">';
	for ( $i = 1; $i <= 4; $i++ ) {
		echo '<div>';
		echo '<p style="font-size:.8rem;font-weight:700;margin:0 0 .5rem;color:#1d2327;">Card ' . $i . '</p>';
		$txt( "sp_prob_{$i}_title", 'Title' );
		$area( "sp_prob_{$i}_desc", 'Description' );
		echo '</div>';
	}
	echo '</div></fieldset>';

	/* ── Process ── */
	echo '<fieldset class="sp-section"><legend>How It Works (4 steps)</legend>';
	echo '<div class="sp-grid">';
	for ( $i = 1; $i <= 4; $i++ ) {
		echo '<div>';
		echo '<p style="font-size:.8rem;font-weight:700;margin:0 0 .5rem;color:#1d2327;">Step ' . $i . '</p>';
		$txt( "sp_proc_{$i}_title", 'Title' );
		$area( "sp_proc_{$i}_desc", 'Description' );
		echo '</div>';
	}
	echo '</div></fieldset>';

	/* ── Why Choose ── */
	echo '<fieldset class="sp-section"><legend>Why Choose D&amp;D Land Works (5 items)</legend>';
	$txt( 'sp_why_heading', 'Section heading' );
	$area( 'sp_why_intro', 'Intro paragraph' );
	echo '<div class="sp-grid" style="margin-top:.75rem;">';
	for ( $i = 1; $i <= 5; $i++ ) {
		echo '<div>';
		echo '<p style="font-size:.8rem;font-weight:700;margin:0 0 .5rem;color:#1d2327;">Item ' . $i . '</p>';
		$txt( "sp_why_{$i}_title", 'Title' );
		$area( "sp_why_{$i}_desc", 'Description' );
		echo '</div>';
	}
	echo '</div></fieldset>';

	/* ── CTA ── */
	echo '<fieldset class="sp-section"><legend>CTA Block (bottom of page)</legend>';
	$txt( 'sp_cta_title', 'Heading' );
	$area( 'sp_cta_subtitle', 'Body paragraph' );
	echo '</fieldset>';
}

/* ── Save ──────────────────────────────────────────────────────────────────── */

add_action( 'save_post_page', 'sp_save_meta' );

function sp_save_meta( $post_id ) {

	if ( ! isset( $_POST['sp_meta_nonce'] ) ) {
		return;
	}
	if ( ! wp_verify_nonce( $_POST['sp_meta_nonce'], 'sp_meta_save_' . $post_id ) ) {
		return;
	}
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	if ( ! current_user_can( 'edit_page', $post_id ) ) {
		return;
	}

	$text_fields = array(
		'sp_hero_eyebrow', 'sp_hero_title',
		'sp_about_heading',
		'sp_svc_1_title', 'sp_svc_2_title', 'sp_svc_3_title', 'sp_svc_4_title',
		'sp_prob_1_title', 'sp_prob_2_title', 'sp_prob_3_title', 'sp_prob_4_title',
		'sp_proc_1_title', 'sp_proc_2_title', 'sp_proc_3_title', 'sp_proc_4_title',
		'sp_why_heading',
		'sp_why_1_title', 'sp_why_2_title', 'sp_why_3_title', 'sp_why_4_title', 'sp_why_5_title',
		'sp_cta_title',
	);

	$textarea_fields = array(
		'sp_hero_subtitle', 'sp_about_body',
		'sp_svc_1_desc', 'sp_svc_2_desc', 'sp_svc_3_desc', 'sp_svc_4_desc',
		'sp_prob_1_desc', 'sp_prob_2_desc', 'sp_prob_3_desc', 'sp_prob_4_desc',
		'sp_proc_1_desc', 'sp_proc_2_desc', 'sp_proc_3_desc', 'sp_proc_4_desc',
		'sp_why_intro',
		'sp_why_1_desc', 'sp_why_2_desc', 'sp_why_3_desc', 'sp_why_4_desc', 'sp_why_5_desc',
		'sp_cta_subtitle',
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
