/**
 * D&D Land Works — Homepage Gutenberg Blocks
 *
 * Vanilla JS only. No JSX, no build step, no webpack.
 * Uses wp.blocks, wp.element.createElement, wp.blockEditor (RichText), wp.components.
 *
 * All blocks are dynamic (server-rendered): save() returns null.
 * Edit fields use wp.blockEditor.RichText for inline canvas editing —
 * click any text in the block editor canvas and type directly.
 */
( function () {
	'use strict';

	var registerBlockType = wp.blocks.registerBlockType;
	var el                = wp.element.createElement;
	var RichText          = wp.blockEditor.RichText;

	/* ── Shared style tokens ─────────────────────────────────────────────────── */

	var COLOR = {
		dark:        '#0f1923',
		darkText:    '#ffffff',
		darkMuted:   'rgba(255,255,255,0.7)',
		slate:       '#f8fafc',
		slateText:   '#0f172a',
		slateMuted:  '#64748b',
		white:       '#ffffff',
		whiteText:   '#0f172a',
		whiteMuted:  '#475569',
		blue:        '#1d6fc4',
		blueText:    '#ffffff',
		blueMuted:   'rgba(255,255,255,0.82)',
		orange:      '#f97316',
		border:      '#e2e8f0',
		cardBg:      '#f1f5f9',
		stepCircle:  '#1d6fc4',
	};

	var FONT = {
		eyebrow:  { fontSize: '11px', fontWeight: 700, letterSpacing: '0.1em', textTransform: 'uppercase' },
		h1:       { fontSize: '2rem', fontWeight: 700, lineHeight: '1.2', margin: '0 0 16px' },
		h2:       { fontSize: '1.6rem', fontWeight: 700, lineHeight: '1.25', margin: '0 0 14px' },
		h3:       { fontSize: '1rem', fontWeight: 700, margin: '0 0 6px' },
		body:     { fontSize: '0.95rem', lineHeight: '1.65', margin: '0 0 12px' },
		bodyLast: { fontSize: '0.95rem', lineHeight: '1.65', margin: 0 },
	};

	/* ── 1. ddlw/hero ────────────────────────────────────────────────────────── */
	registerBlockType( 'ddlw/hero', {
		title:       'D&D — Hero Section',
		category:    'text',
		icon:        'flag',
		description: 'Full-bleed hero with eyebrow, H1 title, and subtitle. Click text to edit inline.',
		attributes: {
			eyebrow:  { type: 'string', default: 'Lane County, OR' },
			title:    { type: 'string', default: 'Licensed Excavation Contractor in Lane County, Oregon' },
			subtitle: { type: 'string', default: 'D&D Land Works is a licensed excavation contractor serving Eugene and Lane County, Oregon. We handle site preparation, grading, land clearing, foundation excavation, drainage, utility excavation, trenching, septic work, driveway repair, and slope stabilization for residential and commercial properties.' },
		},
		edit: function ( props ) {
			var attrs = props.attributes;
			var set   = props.setAttributes;
			return el(
				'section',
				{ style: { background: COLOR.dark, padding: '64px 32px', fontFamily: 'sans-serif' } },
				el( RichText, {
					tagName:     'p',
					value:       attrs.eyebrow,
					onChange:    function ( v ) { set( { eyebrow: v } ); },
					placeholder: 'Eyebrow text...',
					style:       Object.assign( {}, FONT.eyebrow, { color: COLOR.orange, marginBottom: '12px' } ),
				} ),
				el( RichText, {
					tagName:     'h1',
					value:       attrs.title,
					onChange:    function ( v ) { set( { title: v } ); },
					placeholder: 'Hero title...',
					style:       Object.assign( {}, FONT.h1, { color: COLOR.darkText } ),
				} ),
				el( RichText, {
					tagName:     'p',
					value:       attrs.subtitle,
					onChange:    function ( v ) { set( { subtitle: v } ); },
					placeholder: 'Subtitle / intro paragraph...',
					style:       Object.assign( {}, FONT.bodyLast, { color: COLOR.darkMuted } ),
				} )
			);
		},
		save: function () { return null; },
	} );

	/* ── 2. ddlw/about ───────────────────────────────────────────────────────── */
	registerBlockType( 'ddlw/about', {
		title:       'D&D — About / Owner-Operated',
		category:    'text',
		icon:        'admin-users',
		description: 'Two-column about section. Click text to edit inline.',
		attributes: {
			eyebrow_label: { type: 'string', default: 'About D&D Land Works' },
			heading:       { type: 'string', default: 'Owner-Operated Excavation Contractor Serving Lane County, Oregon' },
			para1:         { type: 'string', default: 'David Deggelman works directly with property owners to understand what needs to be done. Every property is different. The ground, access, drainage, slope, and existing work can all change the job. We look at those conditions before deciding what work is needed.' },
			para2:         { type: 'string', default: 'D&D Land Works helps with excavation and site work across Lane County. This includes site preparation, brush clearing, grading, foundation excavation, drainage excavation, utility excavation, trenching, septic work, driveway repair, and slope stabilization.' },
			para3:         { type: 'string', default: 'We work with homeowners, property owners, builders, and commercial customers in Eugene, Springfield, Cottage Grove, Junction City, Creswell, Veneta, Florence, Oakridge, Coburg, Lowell, and nearby Lane County communities. If you are not sure what your property needs, we can look at the site and talk through the work with you.' },
		},
		edit: function ( props ) {
			var attrs = props.attributes;
			var set   = props.setAttributes;
			return el(
				'section',
				{ style: { background: COLOR.white, padding: '64px 32px', fontFamily: 'sans-serif' } },
				el( RichText, {
					tagName:     'p',
					value:       attrs.eyebrow_label,
					onChange:    function ( v ) { set( { eyebrow_label: v } ); },
					placeholder: 'Eyebrow label...',
					style:       Object.assign( {}, FONT.eyebrow, { color: COLOR.blue, marginBottom: '12px' } ),
				} ),
				el( RichText, {
					tagName:     'h2',
					value:       attrs.heading,
					onChange:    function ( v ) { set( { heading: v } ); },
					placeholder: 'Section heading...',
					style:       Object.assign( {}, FONT.h2, { color: COLOR.whiteText } ),
				} ),
				el( RichText, {
					tagName:     'p',
					value:       attrs.para1,
					onChange:    function ( v ) { set( { para1: v } ); },
					placeholder: 'Paragraph 1...',
					style:       Object.assign( {}, FONT.body, { color: COLOR.whiteMuted } ),
				} ),
				el( RichText, {
					tagName:     'p',
					value:       attrs.para2,
					onChange:    function ( v ) { set( { para2: v } ); },
					placeholder: 'Paragraph 2...',
					style:       Object.assign( {}, FONT.body, { color: COLOR.whiteMuted } ),
				} ),
				el( RichText, {
					tagName:     'p',
					value:       attrs.para3,
					onChange:    function ( v ) { set( { para3: v } ); },
					placeholder: 'Paragraph 3...',
					style:       Object.assign( {}, FONT.bodyLast, { color: COLOR.whiteMuted } ),
				} )
			);
		},
		save: function () { return null; },
	} );

	/* ── 3. ddlw/services-intro ──────────────────────────────────────────────── */
	registerBlockType( 'ddlw/services-intro', {
		title:       'D&D — Services Grid',
		category:    'text',
		icon:        'grid-view',
		description: 'Services section header + 12-card grid (cards auto-rendered from theme data). Click text to edit inline.',
		attributes: {
			eyebrow: { type: 'string', default: 'Our Services' },
			heading: { type: 'string', default: 'Complete Excavation & Site Preparation Services' },
			intro:   { type: 'string', default: 'Every property has different ground, access, drainage, and site needs. We help with the digging, clearing, grading, and other site work needed to move a project forward.' },
		},
		edit: function ( props ) {
			var attrs = props.attributes;
			var set   = props.setAttributes;
			return el(
				'section',
				{ style: { background: COLOR.slate, padding: '64px 32px', fontFamily: 'sans-serif' } },
				el( RichText, {
					tagName:     'p',
					value:       attrs.eyebrow,
					onChange:    function ( v ) { set( { eyebrow: v } ); },
					placeholder: 'Eyebrow text...',
					style:       Object.assign( {}, FONT.eyebrow, { color: COLOR.blue, marginBottom: '12px' } ),
				} ),
				el( RichText, {
					tagName:     'h2',
					value:       attrs.heading,
					onChange:    function ( v ) { set( { heading: v } ); },
					placeholder: 'Services heading...',
					style:       Object.assign( {}, FONT.h2, { color: COLOR.slateText } ),
				} ),
				el( RichText, {
					tagName:     'p',
					value:       attrs.intro,
					onChange:    function ( v ) { set( { intro: v } ); },
					placeholder: 'Intro paragraph...',
					style:       Object.assign( {}, FONT.body, { color: COLOR.slateMuted } ),
				} ),
				el(
					'div',
					{
						style: {
							background:   COLOR.cardBg,
							border:       '2px dashed ' + COLOR.border,
							borderRadius: '8px',
							padding:      '20px',
							textAlign:    'center',
							color:        COLOR.slateMuted,
							fontSize:     '13px',
							fontStyle:    'italic',
							marginTop:    '12px',
						},
					},
					'[ 12 service cards auto-rendered from theme data ]'
				)
			);
		},
		save: function () { return null; },
	} );

	/* ── 4. ddlw/project-types ───────────────────────────────────────────────── */
	registerBlockType( 'ddlw/project-types', {
		title:       'D&D — Common Property Problems',
		category:    'text',
		icon:        'hammer',
		description: 'Four-card section. Click any text to edit inline.',
		attributes: {
			eyebrow:    { type: 'string', default: 'Common Property Problems' },
			heading:    { type: 'string', default: 'Problems We Help Property Owners Solve' },
			intro:      { type: 'string', default: 'Every property has its own challenges. You may need to clear land, fix standing water, repair a driveway, or prepare an area for construction. We look at the ground and the work needed before deciding what should be done.' },
			card1_title: { type: 'string', default: 'Land That Needs Clearing or Preparation' },
			card1_desc:  { type: 'string', default: 'If your property is covered with brush or has uneven ground, it may need some work before you can build or improve it. We can clear the area, excavate where needed, and prepare the ground for the next step.' },
			card2_title: { type: 'string', default: 'Standing Water and Poor Grading' },
			card2_desc:  { type: 'string', default: 'Water that collects around your home, driveway, or yard can make the ground muddy and hard to use. We can reshape the ground and improve the way water moves across the property.' },
			card3_title: { type: 'string', default: 'Drainage, Erosion, and Slopes' },
			card3_desc:  { type: 'string', default: 'Rain and runoff can move soil, damage slopes, and create wet areas. We can excavate, reshape, and regrade problem areas based on the ground and water conditions on your property.' },
			card4_title: { type: 'string', default: 'Damaged Driveways and Site Access' },
			card4_desc:  { type: 'string', default: 'Ruts, washouts, uneven ground, or poor access can make it hard to use your property. We can repair gravel driveways, reshape access areas, and do the excavation needed to improve the site.' },
		},
		edit: function ( props ) {
			var attrs = props.attributes;
			var set   = props.setAttributes;

			var cardStyle = {
				background:   COLOR.white,
				border:       '1px solid ' + COLOR.border,
				borderRadius: '8px',
				padding:      '20px',
			};

			function card( titleKey, descKey, placeholder ) {
				return el(
					'div',
					{ style: cardStyle },
					el( RichText, {
						tagName:     'h3',
						value:       attrs[ titleKey ],
						onChange:    function ( v ) {
							var upd = {};
							upd[ titleKey ] = v;
							set( upd );
						},
						placeholder: placeholder + ' title...',
						style:       Object.assign( {}, FONT.h3, { color: COLOR.whiteText } ),
					} ),
					el( RichText, {
						tagName:     'p',
						value:       attrs[ descKey ],
						onChange:    function ( v ) {
							var upd = {};
							upd[ descKey ] = v;
							set( upd );
						},
						placeholder: placeholder + ' description...',
						style:       Object.assign( {}, FONT.bodyLast, { color: COLOR.whiteMuted } ),
					} )
				);
			}

			return el(
				'section',
				{ style: { background: COLOR.white, padding: '64px 32px', fontFamily: 'sans-serif' } },
				el( RichText, {
					tagName:     'p',
					value:       attrs.eyebrow,
					onChange:    function ( v ) { set( { eyebrow: v } ); },
					placeholder: 'Eyebrow text...',
					style:       Object.assign( {}, FONT.eyebrow, { color: COLOR.blue, marginBottom: '12px' } ),
				} ),
				el( RichText, {
					tagName:     'h2',
					value:       attrs.heading,
					onChange:    function ( v ) { set( { heading: v } ); },
					placeholder: 'Section heading...',
					style:       Object.assign( {}, FONT.h2, { color: COLOR.whiteText } ),
				} ),
				el( RichText, {
					tagName:     'p',
					value:       attrs.intro,
					onChange:    function ( v ) { set( { intro: v } ); },
					placeholder: 'Intro paragraph...',
					style:       Object.assign( {}, FONT.body, { color: COLOR.whiteMuted } ),
				} ),
				el(
					'div',
					{
						style: {
							display:             'grid',
							gridTemplateColumns: '1fr 1fr',
							gap:                 '16px',
							marginTop:           '8px',
						},
					},
					card( 'card1_title', 'card1_desc', 'Card 1' ),
					card( 'card2_title', 'card2_desc', 'Card 2' ),
					card( 'card3_title', 'card3_desc', 'Card 3' ),
					card( 'card4_title', 'card4_desc', 'Card 4' )
				)
			);
		},
		save: function () { return null; },
	} );

	/* ── 5. ddlw/process-steps ───────────────────────────────────────────────── */
	registerBlockType( 'ddlw/process-steps', {
		title:       'D&D — How It Works / Process',
		category:    'text',
		icon:        'list-view',
		description: 'Dark "How It Works" section with 4 numbered process steps. Click text to edit inline.',
		attributes: {
			eyebrow:     { type: 'string', default: 'How It Works' },
			heading:     { type: 'string', default: 'How Your Excavation Project Gets Started' },
			intro:       { type: 'string', default: 'Every property is different. We start by talking with you, looking at the site, and understanding what needs to be done. Then we plan the work around the ground, access, drainage, and other site conditions.' },
			step1_title: { type: 'string', default: 'Talk About the Project' },
			step1_desc:  { type: 'string', default: "We start by talking with you about your property and what you need done. We'll discuss the area, access, and the type of excavation or site work you have in mind." },
			step2_title: { type: 'string', default: 'Look at the Property' },
			step2_desc:  { type: 'string', default: 'We look at the ground, slope, drainage, soil, access, and nearby structures or utilities. These conditions can change how the work needs to be done.' },
			step3_title: { type: 'string', default: 'Do the Site Work' },
			step3_desc:  { type: 'string', default: 'Once we know what the property needs, we complete the planned clearing, excavation, grading, trenching, drainage, or related work.' },
			step4_title: { type: 'string', default: 'Check the Finished Work' },
			step4_desc:  { type: 'string', default: 'When the work is done, we look over the area with the planned work in mind. We make sure the completed work matches what was discussed for the project.' },
		},
		edit: function ( props ) {
			var attrs = props.attributes;
			var set   = props.setAttributes;

			function stepCard( num, titleKey, descKey ) {
				return el(
					'div',
					{
						style: {
							background:   'rgba(255,255,255,0.06)',
							border:       '1px solid rgba(255,255,255,0.12)',
							borderRadius: '8px',
							padding:      '20px',
						},
					},
					el(
						'div',
						{
							style: {
								width:        '36px',
								height:       '36px',
								borderRadius: '50%',
								background:   COLOR.stepCircle,
								color:        '#fff',
								fontSize:     '15px',
								fontWeight:   700,
								display:      'flex',
								alignItems:   'center',
								justifyContent: 'center',
								marginBottom: '12px',
								flexShrink:   0,
							},
						},
						String( num )
					),
					el( RichText, {
						tagName:     'h3',
						value:       attrs[ titleKey ],
						onChange:    function ( v ) {
							var upd = {};
							upd[ titleKey ] = v;
							set( upd );
						},
						placeholder: 'Step ' + num + ' title...',
						style:       Object.assign( {}, FONT.h3, { color: COLOR.darkText } ),
					} ),
					el( RichText, {
						tagName:     'p',
						value:       attrs[ descKey ],
						onChange:    function ( v ) {
							var upd = {};
							upd[ descKey ] = v;
							set( upd );
						},
						placeholder: 'Step ' + num + ' description...',
						style:       Object.assign( {}, FONT.bodyLast, { color: COLOR.darkMuted } ),
					} )
				);
			}

			return el(
				'section',
				{ style: { background: COLOR.dark, padding: '64px 32px', fontFamily: 'sans-serif' } },
				el( RichText, {
					tagName:     'p',
					value:       attrs.eyebrow,
					onChange:    function ( v ) { set( { eyebrow: v } ); },
					placeholder: 'Eyebrow text...',
					style:       Object.assign( {}, FONT.eyebrow, { color: COLOR.orange, marginBottom: '12px' } ),
				} ),
				el( RichText, {
					tagName:     'h2',
					value:       attrs.heading,
					onChange:    function ( v ) { set( { heading: v } ); },
					placeholder: 'Section heading...',
					style:       Object.assign( {}, FONT.h2, { color: COLOR.darkText } ),
				} ),
				el( RichText, {
					tagName:     'p',
					value:       attrs.intro,
					onChange:    function ( v ) { set( { intro: v } ); },
					placeholder: 'Intro paragraph...',
					style:       Object.assign( {}, FONT.body, { color: COLOR.darkMuted } ),
				} ),
				el(
					'div',
					{
						style: {
							display:             'grid',
							gridTemplateColumns: '1fr 1fr',
							gap:                 '16px',
							marginTop:           '8px',
						},
					},
					stepCard( 1, 'step1_title', 'step1_desc' ),
					stepCard( 2, 'step2_title', 'step2_desc' ),
					stepCard( 3, 'step3_title', 'step3_desc' ),
					stepCard( 4, 'step4_title', 'step4_desc' )
				)
			);
		},
		save: function () { return null; },
	} );

	/* ── 6. ddlw/why-choose ──────────────────────────────────────────────────── */
	registerBlockType( 'ddlw/why-choose', {
		title:       'D&D — Why Choose Us',
		category:    'text',
		icon:        'star-filled',
		description: 'Two-column section with 5 trust/credential items. Click text to edit inline.',
		attributes: {
			heading:     { type: 'string', default: 'Why Choose D&D Land Works?' },
			intro:       { type: 'string', default: 'Every excavation project has different site conditions, access requirements, and work involved. D&D Land Works keeps the scope clear and brings relevant excavation, grading, and site preparation services together for residential and commercial projects.' },
			item1_title: { type: 'string', default: 'Licensed & Bonded' },
			item1_desc:  { type: 'string', default: 'D&D Land Works is licensed and bonded in Oregon under CCB #261742. Customers can verify the license through the official Oregon Construction Contractors Board lookup.' },
			item2_title: { type: 'string', default: 'Free Estimates' },
			item2_desc:  { type: 'string', default: 'We provide free estimates for excavation and site preparation projects. The scope can be discussed around the property, access, existing conditions, and work you need completed.' },
			item3_title: { type: 'string', default: 'Residential Excavation' },
			item3_desc:  { type: 'string', default: 'We handle excavation and site preparation for homeowners and property owners throughout Eugene, Springfield, and surrounding Lane County communities.' },
			item4_title: { type: 'string', default: 'Commercial Excavation' },
			item4_desc:  { type: 'string', default: 'We also handle excavation and site preparation for commercial customers, builders, and other property projects based on the required scope and site conditions.' },
			item5_title: { type: 'string', default: 'DEQ Certified for Septic Work' },
			item5_desc:  { type: 'string', default: 'D&D Land Works is DEQ certified for relevant septic installation and repair work, including excavation associated with applicable septic projects.' },
		},
		edit: function ( props ) {
			var attrs = props.attributes;
			var set   = props.setAttributes;

			function trustItem( titleKey, descKey, num ) {
				return el(
					'div',
					{
						style: {
							display:      'flex',
							gap:          '14px',
							alignItems:   'flex-start',
							paddingBottom: '14px',
							borderBottom: '1px solid ' + COLOR.border,
							marginBottom: '14px',
						},
					},
					el(
						'div',
						{
							style: {
								width:        '32px',
								height:       '32px',
								borderRadius: '50%',
								background:   COLOR.blue,
								flexShrink:   0,
								display:      'flex',
								alignItems:   'center',
								justifyContent: 'center',
								color:        '#fff',
								fontSize:     '13px',
								fontWeight:   700,
							},
						},
						String( num )
					),
					el(
						'div',
						{ style: { flex: 1 } },
						el( RichText, {
							tagName:     'h3',
							value:       attrs[ titleKey ],
							onChange:    function ( v ) {
								var upd = {};
								upd[ titleKey ] = v;
								set( upd );
							},
							placeholder: 'Item ' + num + ' title...',
							style:       Object.assign( {}, FONT.h3, { color: COLOR.whiteText } ),
						} ),
						el( RichText, {
							tagName:     'p',
							value:       attrs[ descKey ],
							onChange:    function ( v ) {
								var upd = {};
								upd[ descKey ] = v;
								set( upd );
							},
							placeholder: 'Item ' + num + ' description...',
							style:       Object.assign( {}, FONT.bodyLast, { color: COLOR.whiteMuted } ),
						} )
					)
				);
			}

			return el(
				'section',
				{ style: { background: COLOR.white, padding: '64px 32px', fontFamily: 'sans-serif' } },
				el( RichText, {
					tagName:     'h2',
					value:       attrs.heading,
					onChange:    function ( v ) { set( { heading: v } ); },
					placeholder: 'Section heading...',
					style:       Object.assign( {}, FONT.h2, { color: COLOR.whiteText } ),
				} ),
				el( RichText, {
					tagName:     'p',
					value:       attrs.intro,
					onChange:    function ( v ) { set( { intro: v } ); },
					placeholder: 'Intro paragraph...',
					style:       Object.assign( {}, FONT.body, { color: COLOR.whiteMuted } ),
				} ),
				el(
					'div',
					{ style: { marginTop: '16px' } },
					trustItem( 'item1_title', 'item1_desc', 1 ),
					trustItem( 'item2_title', 'item2_desc', 2 ),
					trustItem( 'item3_title', 'item3_desc', 3 ),
					trustItem( 'item4_title', 'item4_desc', 4 ),
					trustItem( 'item5_title', 'item5_desc', 5 )
				)
			);
		},
		save: function () { return null; },
	} );

	/* ── 7. ddlw/reviews ─────────────────────────────────────────────────────── */
	registerBlockType( 'ddlw/reviews', {
		title:       'D&D — FAQ Section',
		category:    'text',
		icon:        'editor-help',
		description: 'FAQ accordion section. Only the heading is editable here — click it to edit inline. FAQ Q&A items are hardcoded in PHP.',
		attributes: {
			heading: { type: 'string', default: 'Common Questions About Excavation Services' },
		},
		edit: function ( props ) {
			var attrs = props.attributes;
			var set   = props.setAttributes;
			return el(
				'section',
				{ style: { background: COLOR.slate, padding: '64px 32px', fontFamily: 'sans-serif' } },
				el( RichText, {
					tagName:     'h2',
					value:       attrs.heading,
					onChange:    function ( v ) { set( { heading: v } ); },
					placeholder: 'FAQ section heading...',
					style:       Object.assign( {}, FONT.h2, { color: COLOR.slateText, marginBottom: '24px' } ),
				} ),
				el(
					'div',
					{
						style: {
							background:   COLOR.cardBg,
							border:       '2px dashed ' + COLOR.border,
							borderRadius: '8px',
							padding:      '20px',
							textAlign:    'center',
							color:        COLOR.slateMuted,
							fontSize:     '13px',
							fontStyle:    'italic',
						},
					},
					'[ FAQ accordion auto-rendered — 5 hardcoded Q&A items ]'
				)
			);
		},
		save: function () { return null; },
	} );

	/* ── 8. ddlw/service-areas-section ──────────────────────────────────────── */
	registerBlockType( 'ddlw/service-areas-section', {
		title:       'D&D — Service Areas',
		category:    'text',
		icon:        'location',
		description: 'Service area section. City links and Google Maps are auto-rendered. Click text to edit inline.',
		attributes: {
			eyebrow: { type: 'string', default: 'Our Service Area' },
			heading: { type: 'string', default: 'Excavation Services Throughout Lane County, Oregon' },
			intro:   { type: 'string', default: 'D&D Land Works provides excavation, grading, and site preparation for residential and commercial properties across Lane County, including Eugene, Springfield, Cottage Grove, Junction City, Creswell, Veneta, Florence, Oakridge, Coburg, and Lowell.' },
		},
		edit: function ( props ) {
			var attrs = props.attributes;
			var set   = props.setAttributes;
			return el(
				'section',
				{ style: { background: COLOR.dark, padding: '64px 32px', fontFamily: 'sans-serif' } },
				el( RichText, {
					tagName:     'p',
					value:       attrs.eyebrow,
					onChange:    function ( v ) { set( { eyebrow: v } ); },
					placeholder: 'Eyebrow text...',
					style:       Object.assign( {}, FONT.eyebrow, { color: COLOR.orange, marginBottom: '12px' } ),
				} ),
				el( RichText, {
					tagName:     'h2',
					value:       attrs.heading,
					onChange:    function ( v ) { set( { heading: v } ); },
					placeholder: 'Service areas heading...',
					style:       Object.assign( {}, FONT.h2, { color: COLOR.darkText } ),
				} ),
				el( RichText, {
					tagName:     'p',
					value:       attrs.intro,
					onChange:    function ( v ) { set( { intro: v } ); },
					placeholder: 'Intro paragraph...',
					style:       Object.assign( {}, FONT.body, { color: COLOR.darkMuted } ),
				} ),
				el(
					'div',
					{
						style: {
							background:   'rgba(255,255,255,0.06)',
							border:       '2px dashed rgba(255,255,255,0.18)',
							borderRadius: '8px',
							padding:      '20px',
							textAlign:    'center',
							color:        'rgba(255,255,255,0.5)',
							fontSize:     '13px',
							fontStyle:    'italic',
							marginTop:    '8px',
						},
					},
					'[ City links + Google Maps auto-rendered ]'
				)
			);
		},
		save: function () { return null; },
	} );

	/* ── 9. ddlw/cta-section ─────────────────────────────────────────────────── */
	registerBlockType( 'ddlw/cta-section', {
		title:       'D&D — Final CTA Block',
		category:    'text',
		icon:        'megaphone',
		description: 'Full-width CTA block. Phone and email auto-appended from Customizer. Click text to edit inline.',
		attributes: {
			title:    { type: 'string', default: 'Get a Free Estimate From D&D Land Works' },
			subtitle: { type: 'string', default: 'Planning excavation, site preparation, grading, land clearing, drainage, trenching, foundation excavation, driveway repair, or septic work in Lane County? Contact D&D Land Works to discuss your property and project scope.' },
		},
		edit: function ( props ) {
			var attrs = props.attributes;
			var set   = props.setAttributes;
			return el(
				'section',
				{ style: { background: COLOR.blue, padding: '64px 32px', fontFamily: 'sans-serif', textAlign: 'center' } },
				el( RichText, {
					tagName:     'h2',
					value:       attrs.title,
					onChange:    function ( v ) { set( { title: v } ); },
					placeholder: 'CTA heading...',
					style:       Object.assign( {}, FONT.h1, { color: COLOR.blueText } ),
				} ),
				el( RichText, {
					tagName:     'p',
					value:       attrs.subtitle,
					onChange:    function ( v ) { set( { subtitle: v } ); },
					placeholder: 'CTA subtitle...',
					style:       Object.assign( {}, FONT.body, { color: COLOR.blueMuted } ),
				} ),
				el(
					'p',
					{
						style: {
							fontSize:   '12px',
							color:      'rgba(255,255,255,0.45)',
							fontStyle:  'italic',
							marginTop:  '8px',
						},
					},
					'[ Estimate button + phone/email auto-appended from Customizer ]'
				)
			);
		},
		save: function () { return null; },
	} );

} )();
