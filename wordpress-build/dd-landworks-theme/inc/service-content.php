<?php
/**
 * Service page content data for the four primary service pages.
 *
 * Returns the full content array for a given page slug so that the service
 * page template (template-service.php) can render each section without
 * needing to know anything about the underlying content.
 *
 * Sections use one of these type keys:
 *   intro       – two-column text block with heading + body paragraphs
 *   cards_dark  – dark-background card grid (service cards)
 *   cards       – light-background card grid
 *   steps       – numbered step cards on dark background
 *   why         – icon-list section on light background
 *   faq         – accordion FAQ block
 *   related     – four-up related-services card row
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function ddlw_service_content( $slug ) {
	$pages = array(

		/* =====================================================================
		 * SITE PREPARATION
		 * ===================================================================*/
		'site-preparation-contractor-eugene-or' => array(
			'hero' => array(
				'eyebrow'  => 'Eugene, Oregon',
				'title'    => 'Site Preparation Contractor in Eugene, Oregon',
				'subtitle' => 'Getting a property ready to build can mean clearing brush, moving soil, grading the ground, or fixing access and drainage problems. D&D Land Works looks at your property and the work you need done, then helps prepare the ground for the next step. We serve Eugene and surrounding Lane County communities.',
			),
			'sections' => array(

				array(
					'type'    => 'intro',
					'heading' => "What’s the Difference Between Site Preparation and Excavation?",
					'body'    => '<p>Site preparation is the work that gets your property ready for construction. It may include clearing brush, removing soil, grading the ground, leveling areas, or improving access.</p>'
					           . '<p>Excavation is more focused on digging. It can include digging for foundations, utilities, drainage, or other parts of a project.</p>'
					           . '<p>A project may need both. Site preparation gets the property ready, while excavation digs the areas needed for the next step. The work depends on your property, plans, ground conditions, access, and drainage.</p>',
				),

				array(
					'type'    => 'cards_dark',
					'heading' => 'What Does Site Preparation Include?',
					'intro'   => 'Site preparation is the work that gets your property ready for construction. The work may include clearing, removing soil, moving dirt, grading, and preparing the ground. What is needed depends on your property and the planned project.',
					'items'   => array(
						array( 'title' => 'Land Clearing',     'desc' => 'Land clearing removes brush, plants, debris, and other things that get in the way. This opens the work area so the ground can be graded and prepared.' ),
						array( 'title' => 'Topsoil Stripping', 'desc' => 'Topsoil stripping removes the loose soil at the surface before deeper ground work begins. Usable topsoil can sometimes be saved for later use on the property.' ),
						array( 'title' => 'Cut and Fill',      'desc' => 'Cut and fill means moving soil from one part of the property to another. This can help create the ground shape and height needed for the planned construction.' ),
						array( 'title' => 'Grading',           'desc' => 'Grading shapes the ground to the needed slope and level. It can help prepare building areas and guide water where it needs to go.' ),
						array( 'title' => 'Compaction',        'desc' => 'Compaction firms up prepared ground before the next stage of construction. The amount of work needed depends on the soil, ground conditions, and what will be built on the site.' ),
					),
				),

				array(
					'type'    => 'cards',
					'heading' => 'Site Preparation Problems We Help Address',
					'intro'   => 'Your property may need some work before construction can begin. Brush, uneven ground, standing water, or poor access can all make a site harder to use. We look at the existing conditions and help prepare the property for the next step.',
					'items'   => array(
						array( 'title' => 'Raw or Undeveloped Land',    'desc' => 'Raw land may have brush, debris, uneven ground, or loose surface soil. Clearing and grading can open the area and prepare it for construction.' ),
						array( 'title' => 'Poor Grading',               'desc' => 'Uneven or poorly shaped ground can make construction harder and affect how water moves across the property. Grading can reshape the area to match the needs of the project.' ),
						array( 'title' => 'Drainage and Surface Water',  'desc' => 'Water that collects on the property can create problems for construction and future use. Grading and excavation may help improve how surface water moves across the site.' ),
						array( 'title' => 'Difficult Site Access',       'desc' => 'A narrow, rough, or damaged access route can make it harder to bring equipment and materials onto the property. We can address site access where it is part of the planned work.' ),
					),
				),

				array(
					'type'    => 'steps',
					'heading' => 'How the Site Preparation Process Works',
					'intro'   => 'Every property is different. We first look at the site and what you plan to build. Then we clear, shape, and prepare the ground based on what the property needs.',
					'items'   => array(
						array( 'title' => 'Look at the Property', 'desc' => 'We look at the work area, ground, drainage, access, and other conditions that may affect the job. This helps us understand what preparation is needed.' ),
						array( 'title' => 'Clear the Site',        'desc' => 'We remove brush, vegetation, debris, and other obstacles from the work area so there is room to complete the planned site work.' ),
						array( 'title' => 'Shape the Ground',      'desc' => 'We move and shape soil where needed to create the grades and levels required for the project. This may include cutting, filling, grading, or leveling.' ),
						array( 'title' => 'Prepare the Ground',    'desc' => 'After the earthwork is complete, the ground may need to be compacted before the next stage of construction. The amount of work depends on the soil and project needs.' ),
					),
				),

				array(
					'type'    => 'why',
					'heading' => 'Why Choose D&amp;D Land Works for Site Preparation?',
					'intro'   => 'Site preparation can look different from one property to another. D&amp;D Land Works works with homeowners, builders, and property owners in Eugene and Lane County to prepare the ground for the next stage of their project.',
					'items'   => array(
						array( 'title' => 'Licensed and Bonded',            'desc' => 'D&amp;D Land Works is licensed and bonded in Oregon under CCB #261742. You can verify the license through the Oregon Construction Contractors Board.' ),
						array( 'title' => 'Free Estimates',                  'desc' => 'We provide free estimates for site preparation work. We can look at the property, access, ground conditions, and planned work before the scope is set.' ),
						array( 'title' => 'Residential Projects',            'desc' => 'We prepare residential properties for construction and other improvements in Eugene, Springfield, and nearby Lane County communities.' ),
						array( 'title' => 'Commercial Projects',             'desc' => 'We also handle site preparation for commercial properties and construction projects. The work depends on the property and what needs to be prepared.' ),
						array( 'title' => 'DEQ Certified for Septic Work',   'desc' => 'D&amp;D Land Works is DEQ certified for relevant septic installation and repair work, including excavation connected with applicable septic projects.' ),
					),
				),

				array(
					'type'    => 'related',
					'heading' => 'Related Services',
					'items'   => array(
						array( 'title' => 'Land Clearing',        'desc' => 'Removing brush, trees, and debris to open up usable land before site work begins.',          'href' => '/land-clearing-services-eugene-or' ),
						array( 'title' => 'Grading &amp; Leveling',   'desc' => 'Shaping land to the right slope for drainage and building.',                                   'href' => '/land-grading-services-eugene-or' ),
						array( 'title' => 'Foundation Excavation', 'desc' => 'Digging and leveling for footings and foundations.',                                             'href' => '/foundation-excavation-eugene-or' ),
						array( 'title' => 'Drainage Excavation',   'desc' => 'Excavation and grading to correct standing water and poor drainage.',                            'href' => '/drainage-installation-eugene-or' ),
					),
				),

				array(
					'type'    => 'faq',
					'heading' => 'Common Questions About Site Preparation',
					'items'   => array(
						array(
							'q' => 'Do I Need Site Preparation Before Building?',
							'a' => 'Most construction sites need some level of site preparation before building. The required work depends on existing ground conditions, vegetation, elevations, access, drainage, and the planned construction. A cleared, level property may require less preparation than a raw lot.',
						),
						array(
							'q' => 'What Does Site Preparation Include?',
							'a' => "Site preparation can include land clearing, topsoil stripping, cut and fill, grading, leveling, and subgrade compaction. The exact scope depends on the property’s existing conditions and construction requirements, including planned elevations, access, drainage, and the type of project.",
						),
						array(
							'q' => 'Does Site Preparation Require a Permit?',
							'a' => 'Permit requirements depend on the project, location, and type of site work involved. Lane County requirements may apply to grading, fill, erosion prevention, or access work, while larger disturbances may also involve Oregon DEQ stormwater requirements.',
						),
						array(
							'q' => 'How Do Soil Conditions Affect Site Preparation Cost?',
							'a' => 'Soil conditions can change the amount and type of site preparation required. Rock, heavy clay, poor ground, or buried materials may require additional excavation, equipment, hauling, or preparation. These conditions can increase project complexity and affect the overall cost.',
						),
						array(
							'q' => 'Does Rain Affect Site Preparation Work?',
							'a' => 'Rain can affect site preparation when ground becomes wet or difficult to work. Wet soil may influence grading, compaction, access, and drainage work. Project timing can therefore depend on weather, existing soil conditions, site access, and the amount of earthwork required.',
						),
					),
				),

			),
		),

		/* =====================================================================
		 * LAND CLEARING
		 * ===================================================================*/
		'land-clearing-services-eugene-or' => array(
			'hero' => array(
				'eyebrow'  => 'Eugene, Oregon',
				'title'    => 'Land Clearing Services in Eugene, Oregon',
				'subtitle' => 'D&D Land Works clears overgrown land and heavy brush across Eugene, Springfield, and Lane County. Blackberry, undergrowth, raw lots nobody has touched in years. We come look at the property first, then explain what needs to be cleared and what may need to happen next.',
			),
			'sections' => array(

				array(
					'type'    => 'intro',
					'heading' => 'Land Clearing for Homes and Businesses in Eugene',
					'body'    => '<p>Most property jobs start the same way. The brush has to come off before anything else can happen. D&amp;D Land Works clears land for homeowners and businesses in Eugene, Springfield, and all over Lane County. No two jobs look the same.</p>'
					           . '<p>A lot of calls start like this. You have a back acre you can’t walk into anymore. The blackberry took it over. Or you bought a wooded lot a few years back and never got to it. Sometimes it’s smaller than that. You want a spot for a shop or a shed, and the brush is in the way. We clear it out. You get ground you can stand on and plan around.</p>'
					           . '<p>Builders call with a date and a set of plans. The whole work area has to be open. So do the paths the trucks and machines use to get in and out. Raw land in Lane County hides things. Wet spots. Soft ground. Better to find that now than after the foundation crew shows up.</p>',
				),

				array(
					'type'    => 'cards_dark',
					'heading' => 'What Does Land Clearing Include?',
					'intro'   => 'Land clearing covers the work that gets growth off a property. What it takes depends on how thick the brush is, how the land sits, and what you plan to do with it after.',
					'items'   => array(
						array( 'title' => 'Brush Clearing',              'desc' => 'Blackberry, scrub, and thick brush take over fast around here. We cut it back and clear it off the work area, so you can walk your own land again.' ),
						array( 'title' => 'Vegetation Clearing',         'desc' => 'Grass, vines, weeds, and low growth all come off the spot you plan to use. That opens the ground up so you can finally see the dirt underneath.' ),
						array( 'title' => 'Wooded Lot Clearing',         'desc' => 'Some lots sit untouched for years and fill in on their own. We clear the heavy growth off the part you want, and leave it open for what comes next.' ),
						array( 'title' => 'Access Area Clearing',        'desc' => 'A machine has to reach the job first. We open the path in, plus room for trucks to park and drop material close to where you need it.' ),
						array( 'title' => 'Construction Area Clearing',  'desc' => 'Building something means the work area has to be clear. We take the growth off that footprint so the next crew can stake it out and get going.' ),
						array( 'title' => 'Rough Site Clearing',         'desc' => 'Once the clearing is done, the ground sits open and ready. Grading, site prep, or excavation can start from there when those are part of your project.' ),
					),
				),

				array(
					'type'    => 'cards',
					'heading' => 'Land Clearing for Different Property Conditions',
					'intro'   => 'No two lots in Eugene clear the same way. How thick the brush is, how the land sits, how wet the ground gets, and whether a machine can even reach the spot all change the job.',
					'items'   => array(
						array( 'title' => 'Overgrown Lots',    'desc' => 'Blackberry and brush spread fast around here. Give it a few seasons and a usable lot turns into a wall. We cut that growth back and open the space up again.' ),
						array( 'title' => 'Wooded Properties', 'desc' => 'Some lots fill in on their own after sitting for years. We clear the brush and low growth off the part you want to use. Standing timber is a separate job for a tree crew.' ),
						array( 'title' => 'Uneven Ground',     'desc' => 'Rutted, bumpy ground changes how a machine works a site. Dips and old fill can hide under the growth. We walk it first so the plan fits the ground instead of fighting it.' ),
						array( 'title' => 'Sloped Property',   'desc' => "Hillsides need a closer look. Slope decides where equipment can safely go, and it changes what happens to the soil once the growth comes off. Grading or stabilizing often follows the clearing." ),
						array( 'title' => 'Tight Access',      'desc' => "The work area might be fine while the way in isn’t. Narrow drives, gates, fences, nowhere to turn a truck around. We check the route in before anything gets scheduled." ),
						array( 'title' => 'Wet Ground',        'desc' => 'Wet weather can leave ground soft and harder to work. Soil and drainage conditions can affect equipment access and when clearing should be done.' ),
					),
				),

				array(
					'type'    => 'steps',
					'heading' => 'How Much Does Land Clearing Cost in Eugene?',
					'intro'   => 'Land clearing costs depend on the property. The size of the area, type of growth, site access, terrain, and ground conditions can all affect the work.',
					'items'   => array(
						array( 'title' => 'How Big the Area Is',          'desc' => "More ground takes more hours. But it’s the part you actually want cleared that counts, not the whole deed. Plenty of folks only need an acre of a five acre lot opened up." ),
						array( 'title' => "What’s Growing on It",    'desc' => 'Light brush clears quick. Ten years of blackberry is a different animal, and so is heavy growth with vines woven through it. Thickness matters more here than the size of the lot does.' ),
						array( 'title' => 'How We Get In and How It Sits','desc' => 'A machine has to reach the work. Narrow gates, tight drives, and nowhere to turn a truck all add time. Slopes and rutted ground slow things down the same way.' ),
						array( 'title' => 'Time of Year',                  'desc' => "Valley clay holds water for weeks after a wet stretch. Working soft ground takes longer and tears up the site. A summer job and a February job on the same lot don’t cost the same." ),
					),
				),

				array(
					'type'    => 'why',
					'heading' => 'What Can Affect the Timeline for Land Clearing?',
					'intro'   => "A small brush job can be done in a day. A few acres of heavy growth takes longer, and Eugene weather has a say in it. Here’s what sets the schedule on most jobs.",
					'items'   => array(
						array( 'title' => 'Property Size',                'desc' => "Bigger areas take more hours. What matters is the part you want cleared, not the whole lot, so a five acre parcel isn’t a five acre job." ),
						array( 'title' => 'Amount of Vegetation',         'desc' => 'Light brush moves fast. Ten years of blackberry with vines woven through it moves slow. Thickness usually drives the schedule more than acreage does.' ),
						array( 'title' => 'Site Access',                   'desc' => 'Easy equipment access can make the work simpler. Narrow gates, tight drives, or difficult entry may require extra preparation.' ),
						array( 'title' => 'Terrain',                       'desc' => 'Flat ground works fastest. Slopes and rutted areas slow a machine down and limit where it can safely go, which stretches the job.' ),
						array( 'title' => 'Weather and Ground Conditions', 'desc' => 'Valley clay holds water for weeks. Soft ground slows the work and tears up a site, so a wet job sometimes waits for the next dry stretch.' ),
						array( 'title' => 'Related Site Work',             'desc' => "Clearing alone is the short version. Add grading, a driveway, or excavation and you’re on site longer, though one crew doing it all beats scheduling three." ),
					),
				),

				array(
					'type'    => 'faq',
					'heading' => 'Land Clearing FAQs in Eugene, Oregon',
					'items'   => array(
						array(
							'q' => 'What Does Land Clearing Include?',
							'a' => "Brush, vegetation, vines, and low growth come off the area you plan to use. We open the way in too, if the path is grown over. Standing trees and stumps are a tree service’s job, not ours, and we’ll say so up front.",
						),
						array(
							'q' => 'Is Land Clearing the Same as Site Preparation?',
							'a' => "No. Clearing takes off what’s growing. Site preparation changes the ground itself through grading, leveling, and moving dirt. Most projects need both, in that order, since you can’t grade a pad through four feet of blackberry.",
						),
						array(
							'q' => 'Can Land Clearing Prepare a Property for Construction?',
							'a' => "Yes, it’s usually the first step. Once the growth is off you can see the ground, stake out a building spot, and start grading or digging. Raw land almost always gets cleared before a crew sets foot on it.",
						),
						array(
							'q' => 'What Affects Land Clearing Cost?',
							'a' => 'Size of the area, how thick the growth is, how hard it is to reach, and the time of year. Valley clay in winter slows everything down. David walks the property and gives you a real number instead of a phone guess.',
						),
						array(
							'q' => 'How Long Does Land Clearing Take?',
							'a' => 'A small brush job can be a day. A few acres of heavy growth runs longer, and wet ground can push the date. You get a window before work starts, and a call from us if weather moves it.',
						),
					),
				),

				array(
					'type'    => 'related',
					'heading' => 'Related Services',
					'items'   => array(
						array( 'title' => 'Site Preparation',     'desc' => 'Clearing is step one. Site prep is the grading, leveling, and dirt work that turns a cleared lot into a buildable one.',                            'href' => '/site-preparation-contractor-eugene-or' ),
						array( 'title' => 'Grading &amp; Leveling',   'desc' => 'Once the growth is off, the ground gets shaped. Slopes set for drainage, pads leveled for building.',                                              'href' => '/land-grading-services-eugene-or' ),
						array( 'title' => 'Brush Clearing',        'desc' => 'The heaviest part of most clearing jobs around here. Blackberry, scrub, and thick undergrowth taken back off your property.',                        'href' => '/brush-clearing-eugene-or' ),
						array( 'title' => 'Slope Stabilization',   'desc' => 'Clearing a hillside changes how it holds soil and sheds water. Stabilizing keeps a cleared slope where it belongs.',                                  'href' => '/slope-stabilization-eugene-or' ),
					),
				),

			),
		),

		/* =====================================================================
		 * LAND GRADING
		 * ===================================================================*/
		'land-grading-services-eugene-or' => array(
			'hero' => array(
				'eyebrow'  => 'Eugene, Oregon',
				'title'    => 'Land Grading and Leveling Services in Eugene, Oregon',
				'subtitle' => 'D&D Land Works helps homeowners and property owners shape uneven or sloped ground, improve drainage, and prepare land for yards, driveways, buildings, and other projects. David Deggelman handles estimates directly and looks at the property before deciding what grading work is needed.',
			),
			'sections' => array(

				array(
					'type'    => 'intro',
					'heading' => 'Is Your Land Uneven, Sloped, or Holding Water?',
					'body'    => '<p>Every property is different. You may have a sloped yard, low spots where water collects, or ground that is not ready for a home, driveway, shop, or other project.</p>'
					           . '<p>Before we start, we look at the ground, the slope, drainage, soil, and access to the property. We also look at what you want to do with the land.</p>'
					           . '<p>This helps us understand what needs to be moved, leveled, or shaped. We can then explain the work you may need and give you a clear estimate for your project.</p>',
				),

				array(
					'type'    => 'cards_dark',
					'heading' => 'Types of Land Grading We Provide',
					'intro'   => 'Land grading changes the shape and level of the ground for a specific use. The work depends on your property, existing slope, soil, access, drainage, and what you plan to build or use the space for.',
					'items'   => array(
						array( 'title' => 'Lot Grading and Leveling',        'desc' => 'Lot grading shapes the ground across a property or the part you plan to use. It can smooth uneven areas, adjust elevations, and create a better starting point for construction, yards, or other site work.' ),
						array( 'title' => 'Building Pad Grading',            'desc' => 'A building pad needs a suitable grade before construction can move forward. We shape the planned building area based on the existing ground, site elevations, access, and the requirements of your project.' ),
						array( 'title' => 'Yard Grading',                    'desc' => 'Low spots, uneven ground, and poor surface flow can make a yard difficult to use. Yard grading reshapes the surface where needed and can help direct runoff based on the conditions of your property.' ),
						array( 'title' => 'Drainage Grading',                'desc' => 'Grading can help control where surface water moves across a property. We shape the ground to create the needed slope and fall, while considering existing elevations, soil, drainage needs, and site conditions.' ),
						array( 'title' => 'Driveway and Access Grading',     'desc' => 'A driveway or access area needs a practical grade for its intended use. We can shape and level the ground as part of site preparation, considering slope, existing conditions, drainage, and how vehicles will use the area.' ),
						array( 'title' => 'Residential and Commercial Grading', 'desc' => "Grading needs vary between a home lot, commercial property, and larger development site. We provide grading and leveling for residential and commercial projects, with the scope based on the property’s conditions and planned use." ),
					),
				),

				array(
					'type'    => 'cards',
					'heading' => 'Eugene and Lane County Conditions That Can Affect Grading',
					'intro'   => 'Grading can look different from one property to another. In Eugene and Lane County, rain, wet ground, soil, slopes, drainage, and site access can all affect how we plan the work and shape the final grade.',
					'items'   => array(
						array( 'title' => 'Wet Weather and Ground Conditions', 'desc' => 'Rain can leave soil soft and harder to work. Wet ground may affect equipment access, material movement, and grading timing. We check the actual site conditions before deciding how the work should move forward.' ),
						array( 'title' => 'Soil Conditions',                    'desc' => 'Soil affects how easily the ground can be shaped and moved. Different soil conditions may change the grading approach, especially when the property needs leveling, filling, or material moved to another area.' ),
						array( 'title' => 'Sloped Properties',                  'desc' => 'A sloped lot may need more careful planning than a fairly even property. Existing elevations help determine where material needs to be cut, where it may be placed, and what final grade the project requires.' ),
						array( 'title' => 'Drainage and Surface Water',         'desc' => 'Water flow matters when shaping a property. Grading can help direct surface runoff, but the right approach depends on the existing drainage, low areas, slope, and other conditions around the property.' ),
						array( 'title' => 'Site Access',                        'desc' => 'Equipment needs a practical way to reach the areas being graded. Tight driveways, structures, utilities, or limited access can affect how material is moved and how the grading work is planned.' ),
						array( 'title' => 'Lane County Property Conditions',    'desc' => 'Properties across Lane County can have different terrain, drainage, soil, and access conditions. We look at the property itself rather than assuming every Eugene-area site needs the same grading approach.' ),
					),
				),

				array(
					'type'    => 'steps',
					'heading' => 'How Long Does Land Grading Take?',
					'intro'   => 'The time needed for land grading depends on the size of the property, grading scope, existing slope, soil and ground conditions, site access, weather, and the amount of material that needs to be moved. Related site preparation can also affect the schedule.',
					'items'   => array(
						array( 'title' => 'Size and Amount of Grading',     'desc' => 'A small yard grading project may involve less work than preparing a larger building area. Grading can involve cutting high areas, filling low areas, or moving soil — the amount of material and area both affect how long the work takes.' ),
						array( 'title' => 'Soil, Slope, and Ground Conditions', 'desc' => 'Soil conditions can change how easily material can be moved and shaped. Steep slopes and larger changes in elevation can require more work, and wet ground may affect when grading can be completed.' ),
						array( 'title' => 'Site Access',                        'desc' => 'Equipment needs room to reach the areas being graded. Narrow access, structures, utilities, or other site limits can affect how the work is planned and how efficiently material can be moved.' ),
						array( 'title' => 'Weather and Related Work',           'desc' => 'Rain and wet ground can affect grading conditions in Eugene and Lane County. Additional work such as drainage, excavation, or site preparation may also add time when included in the project scope.' ),
					),
				),

				array(
					'type'    => 'why',
					'heading' => 'What to Check Before Hiring a Grading Contractor',
					'intro'   => 'Before hiring a grading contractor in Eugene, ask a few practical questions. You want to know who will assess the site, what the estimate includes, how ground conditions may affect the work, and whether permits or related site work are needed.',
					'items'   => array(
						array( 'title' => 'Licensed and Bonded',    'desc' => 'Check that the contractor is licensed and bonded. D&amp;D Land Works is licensed and bonded through the Oregon Construction Contractors Board under CCB #261742.' ),
						array( 'title' => 'Site Assessment',        'desc' => "A proper estimate should consider the property’s slope, existing grade, soil, drainage, and access. These conditions help define the grading scope before work begins." ),
						array( 'title' => 'Clear Project Scope',    'desc' => 'Ask what the estimate includes. Material movement, grading, leveling, related site preparation, and other work should be clear so you know what is part of the project.' ),
						array( 'title' => 'Ground Conditions',      'desc' => 'Ask how wet ground, soil conditions, slope, and weather may affect the work. Eugene properties can have different site conditions, so the plan should fit your property.' ),
						array( 'title' => 'Permit Requirements',    'desc' => 'Ask whether your project may require permits or other local requirements. Permit needs can vary based on the property, project scope, and location.' ),
						array( 'title' => 'Related Site Work',      'desc' => 'Grading may connect with drainage, excavation, driveway preparation, or other site work. A good contractor should explain when grading is only one part of the project.' ),
					),
				),

				array(
					'type'    => 'faq',
					'heading' => 'Land Grading FAQs',
					'items'   => array(
						array(
							'q' => 'Do I need a permit to grade my property in Lane County?',
							'a' => "Yes, if your project moves more than 50 cubic yards of earth or creates a cut or fill slope steeper than 2:1. Contact Lane County Land Management Division at 3050 N. Delta Hwy, Eugene (M–F 9am–3pm). Foundation excavation under an active building permit is generally exempt; driveway and landscaping grading is not. We handle permit guidance for Lane County projects — call before you start and we’ll tell you what applies to your project.",
						),
						array(
							'q' => 'How much does land grading cost in Eugene, Oregon?',
							'a' => 'National cost ranges are $0.08–$2.00 per square foot for yard grading, $1,000–$5,125 for driveway grading, and $1,000–$6,700 for foundation prep. Eugene area projects vary based on lot size, soil type, slope, and whether fill material is needed. Malpass clay can add time on some sites, and we flag that during the site visit. Call 541-401-8726 for a free, itemized estimate.',
						),
						array(
							'q' => 'What is the difference between rough grading and finish grading?',
							'a' => 'Rough grading is the bulk earthmoving stage: we set the building pad elevation, strip topsoil, and rough in drainage falls, typically within ±0.1 foot of plan. Finish grading follows after underground utilities are installed. It brings the surface to ±0.5 inch precision and prepares the site for paving, planting, or final inspection. D&amp;D handles both stages for new construction projects in Lane County.',
						),
						array(
							'q' => 'Do you call Oregon 811 before starting grading work?',
							'a' => 'Yes, always. Oregon law requires contractors to notify Oregon 811 (the Utility Notification Center) at least two business days before any excavation or grading begins. We submit the locate request before equipment arrives on your property. Utility companies mark underground lines, and we check that all marks are present before we start. Required by Oregon OSHA; standard on every D&amp;D job.',
						),
						array(
							'q' => 'Can grading fix standing water in my Eugene yard?',
							'a' => "Usually yes. Water pooling in Willamette Valley yards is most often caused by flat or reverse-sloped grade, especially where Malpass clay slows drainage. We regrade to move water away from your home and toward proper outlets. On sites where slope correction alone won’t drain fast enough through heavy clay, we recommend combining regrading with a French drain or swale. A free site visit will tell you which approach your property needs.",
						),
					),
				),

				array(
					'type'    => 'related',
					'heading' => 'Related Services',
					'items'   => array(
						array( 'title' => 'Excavation Contractor',          'desc' => 'Foundation digging, utility trenching, drainage excavation, and septic excavation across Lane County.',             'href' => '/excavation-contractor-eugene-or' ),
						array( 'title' => 'Land Clearing',                  'desc' => 'Open up the work area before grading begins — brush clearing, tree removal, and stump grinding.',             'href' => '/land-clearing-services-eugene-or' ),
						array( 'title' => 'Septic Installation and Repair', 'desc' => 'DEQ Certified septic work — new system installation and repairs on existing systems across Lane County.',      'href' => '/septic-installation-lane-county-or' ),
						array( 'title' => 'Site Preparation',               'desc' => 'Get raw land cleared, graded, and ready for a builder or contractor to start construction.',                          'href' => '/site-preparation-contractor-eugene-or' ),
					),
				),

			),
		),

		/* =====================================================================
		 * SEPTIC INSTALLATION
		 * ===================================================================*/
		'septic-installation-lane-county-or' => array(
			'hero' => array(
				'eyebrow'  => 'Eugene, Oregon',
				'title'    => 'Septic System Installation in Lane County, Oregon',
				'subtitle' => 'If you are building a home or preparing rural land in Lane County, you may need a septic system for wastewater. We help with septic installation, tank placement, and related excavation based on your property, site conditions, and approved system requirements.',
			),
			'sections' => array(

				array(
					'type'    => 'intro',
					'heading' => 'Who Needs a Septic System?',
					'body'    => '<p>If you are building or buying property without access to a public sewer system, you may need a septic system. Rural homes and undeveloped lots often need one before construction can move forward. Your property and site conditions determine what is needed.</p>'
					           . '<p>The land matters. Soil, slope, available space, and the location of the home can all affect where the system can go. Every property is different.</p>'
					           . '<p>We can help with the excavation and installation work once the site is ready. Not sure where to start? Tell us about the property, and we can explain what part of the work we handle.</p>',
				),

				array(
					'type'    => 'cards_dark',
					'heading' => 'Your Land Helps Determine the Right Septic System',
					'intro'   => 'Your property affects where and how a septic system can be installed. Soil, slope, space, water, and access all need to be considered before the work begins.',
					'items'   => array(
						array( 'title' => 'Soil',        'desc' => 'Your soil affects how wastewater moves into the ground. Before installation starts, the site needs to be checked to understand what your property can support.' ),
						array( 'title' => 'Slope',       'desc' => "A steep or uneven lot can affect where your tank and drainfield can go. Your land’s shape and elevation help determine a layout that works for your property." ),
						array( 'title' => 'Space',       'desc' => 'You need enough suitable area on your property for the system. Where your home sits, your property lines, any wells, and other features all affect where things can go.' ),
						array( 'title' => 'Wet Ground',  'desc' => 'If your ground is wet, septic work gets harder. Seasonal moisture can affect digging, access, and how well wastewater moves through the soil around the system.' ),
						array( 'title' => 'Drainfield',  'desc' => 'The drainfield is the part of your septic system where treated wastewater moves into the soil. Where it goes depends on your property, soil, available space, and the approved system.' ),
						array( 'title' => 'Site Access', 'desc' => 'Equipment needs a clear path to the work area. A narrow driveway, steep slope, or structures on your property can change how the work is planned.' ),
					),
				),

				array(
					'type'    => 'cards',
					'heading' => 'What Does D&amp;D Land Works Handle on a Septic Project?',
					'intro'   => 'We handle the excavation, tank placement, drainfield preparation, backfill, and other physical work included in our approved project scope. Septic design, approvals, and permitting are handled separately where required.',
					'items'   => array(
						array( 'title' => 'Tank Placement',      'desc' => 'We prepare the excavation and place the septic tank according to the project plan. The tank location depends on the property layout, access, and approved system requirements.' ),
						array( 'title' => 'Drainfield Excavation','desc' => 'The drainfield needs the right space and ground conditions. We handle the excavation needed to prepare the drainfield area as part of the septic installation work.' ),
						array( 'title' => 'Septic Excavation',   'desc' => 'Septic installation often requires careful digging for the tank, pipes, and drainfield. The amount of excavation depends on the system, property, and ground conditions.' ),
						array( 'title' => 'Site Preparation',    'desc' => 'The ground may need preparation before septic components can be installed. We can handle related site work that falls within the septic installation scope.' ),
						array( 'title' => 'Backfill',            'desc' => 'After the septic components are installed and the required project steps are complete, the excavated areas can be backfilled. The work follows the approved project requirements.' ),
						array( 'title' => 'Local Septic Work',   'desc' => 'We provide septic installation work for properties in Lane County, including projects around Eugene and Springfield. We are licensed and bonded, CCB #261742.' ),
					),
				),

				array(
					'type'    => 'steps',
					'heading' => 'How Long Does Septic Installation Take?',
					'intro'   => 'Septic installation does not have one fixed timeline. The schedule can depend on the site, required system, permits, ground conditions, weather, access, and the amount of excavation and installation work involved.',
					'items'   => array(
						array( 'title' => 'Site Requirements',           'desc' => 'Before digging starts, your property may need an evaluation, a system design, and required approvals. These steps happen first and can affect when installation work can begin.' ),
						array( 'title' => 'Permits and Approvals',       'desc' => 'Some septic projects need permits before work can start. How long that takes depends on your property, what the system requires, and the agencies involved.' ),
						array( 'title' => 'Soil and Ground Conditions',  'desc' => 'Your soil affects how easily the ground can be excavated. Wet ground can slow access and affect when certain parts of the site work can happen.' ),
						array( 'title' => 'Site Access',                  'desc' => 'Equipment needs to reach the tank and drainfield areas on your property. A narrow driveway, steep slope, or structures in the way takes more planning before work begins.' ),
						array( 'title' => 'Excavation and Installation', 'desc' => 'The digging depends on your tank, drainfield, piping, and property layout. A larger or more complex system on your land can mean more excavation work.' ),
						array( 'title' => 'Weather and Project Scope',   'desc' => 'Rain and wet ground can change what is possible on your property in Lane County. Material timing, related site prep, and other requirements on your project can also shift the schedule.' ),
					),
				),

				array(
					'type'    => 'why',
					'heading' => 'What Should You Check Before Septic Work Starts?',
					'intro'   => 'Before choosing a septic contractor, ask what part of the project they handle, what the site needs, and what requirements apply. A clear conversation can help you understand the work before it starts.',
					'items'   => array(
						array( 'title' => 'Licensed and Bonded',      'desc' => 'Check that the contractor is licensed and bonded. We are licensed and bonded through the Oregon Construction Contractors Board, CCB #261742.' ),
						array( 'title' => 'DEQ Certification',        'desc' => 'Ask whether the contractor has the certification needed for the septic work. We have DEQ certification relevant to septic installation and repair in Oregon.' ),
						array( 'title' => 'Site Conditions',          'desc' => 'Soil, slope, space, wet ground, and access can affect septic work. The contractor should understand how these conditions may affect excavation and installation on your property.' ),
						array( 'title' => 'Project Scope',            'desc' => 'Ask what work is included. Septic installation may involve tank placement, drainfield excavation, and related site work. The exact scope depends on the approved project.' ),
						array( 'title' => 'Permits and Requirements', 'desc' => 'Ask which permits or approval steps apply to your property. Requirements can vary by project, and the appropriate local or state authority handles those requirements.' ),
						array( 'title' => 'Clear Estimate',           'desc' => 'Ask what affects your project cost before work begins. System needs, excavation, access, soil, drainfield work, and site conditions can all change the amount of work required.' ),
					),
				),

				array(
					'type'    => 'faq',
					'heading' => 'Questions to Ask Before Hiring a Septic Installer',
					'items'   => array(
						array(
							'q' => 'What work does the contractor handle?',
							'a' => 'Ask what parts of the project are included. We handle the excavation and installation work — tank placement, drainfield prep, and related site work that falls within our scope. We can explain what that covers for your project.',
						),
						array(
							'q' => 'Who handles the septic design and permits?',
							'a' => 'The design and permit requirements for your property are handled separately. Who is responsible depends on your project. We can explain what usually applies and point you in the right direction.',
						),
						array(
							'q' => 'What site conditions could affect the work on my property?',
							'a' => 'Your soil, slope, available space, wet ground, and access can all change what the installation involves. Ask your contractor to walk through how your specific site affects the work before anything starts.',
						),
						array(
							'q' => 'What will affect my cost?',
							'a' => 'The cost depends on your property. Your tank, drainfield, the amount of excavation, soil conditions, access, and any required approvals can all change the price. A real estimate needs to be based on your actual site.',
						),
						array(
							'q' => 'How long will the installation take?',
							'a' => 'Every property is different. Permits, your system requirements, weather, your ground conditions, site access, and how much excavation your land needs can all affect when the work gets done. There is no single answer without looking at your property.',
						),
					),
				),

				array(
					'type'    => 'related',
					'heading' => 'Related Services',
					'items'   => array(
						array( 'title' => 'Excavation Contractor', 'desc' => 'Foundation digging, utility trenching, drainage excavation, and septic excavation across Lane County.',        'href' => '/excavation-contractor-eugene-or' ),
						array( 'title' => 'Land Clearing',         'desc' => 'Open up the work area before grading begins — brush clearing, tree removal, and stump grinding.',        'href' => '/land-clearing-services-eugene-or' ),
						array( 'title' => 'Land Grading',          'desc' => 'Lot leveling, building pad grading, drainage grading, and driveway regrading across Lane County.',            'href' => '/land-grading-services-eugene-or' ),
						array( 'title' => 'Site Preparation',      'desc' => 'Get raw land cleared, graded, and ready for a builder or contractor to start construction.',                    'href' => '/site-preparation-contractor-eugene-or' ),
					),
				),

			),
		),

	);

	return isset( $pages[ $slug ] ) ? $pages[ $slug ] : null;
}
