<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }

/**
 * Content data for the eight additional service pages ported from
 * site/src/pages/ in the Astro build. Consumed by the service-page
 * template (page-service.php) via ddlw_render_service_sections().
 *
 * Section types mirror the shortcode / component library:
 *   intro      — heading + body (HTML string)
 *   cards      — heading + intro text + items[]  (light bg)
 *   cards_dark — same structure, dark bg
 *   steps      — numbered step cards (dark bg)
 *   why        — icon-list section (white bg)
 *   faq        — accordion Q&A
 *   related    — link-card grid
 */
function ddlw_service_content_additional( $slug ) {
	$pages = array(

		/* ------------------------------------------------------------------ */
		/* 1. Foundation Excavation                                            */
		/* ------------------------------------------------------------------ */
		'foundation-excavation-eugene-or' => array(
			'hero' => array(
				'eyebrow'  => 'Eugene, Oregon',
				'title'    => 'Foundation Excavation Services in Eugene, Oregon',
				'subtitle' => 'Building a home starts with getting the ground ready. In Eugene and around Lane County, every property can be a little different. David looks at the plans, access, slope, and ground conditions before digging so the foundation excavation fits your property.',
			),
			'sections' => array(

				array(
					'type'    => 'intro',
					'heading' => 'What Is Foundation Excavation?',
					'body'    => '<p>Foundation excavation means digging the ground where a new home or other building foundation will go. The plans show where the foundation needs to go and how deep the excavation needs to be.</p><p>In Eugene and Lane County, every lot is a little different. The slope, soil, and access can change how the excavation is approached. A crawl-space foundation may need a different depth and footprint than a slab or basement.</p><p>David looks at the plans, the ground conditions, and site access before anything is quoted. The goal is to leave the foundation area ready for the next step of your build.</p>',
				),

				array(
					'type'    => 'cards_dark',
					'heading' => 'What Needs to Happen Before the Foundation Is Dug?',
					'intro'   => 'Every Eugene property is different. Soil, slope, wet ground, and site access can change how the work is planned. Before digging, we look at the plans and the actual property so the excavation fits the job.',
					'items'   => array(
						array( 'title' => 'Foundation Layout',     'desc' => 'David uses the building plans to understand where the foundation will sit, how deep it needs to be, and where the excavation area will be.' ),
						array( 'title' => 'Excavation Depth',      'desc' => 'The plans tell us how deep the foundation needs to go. David follows the project requirements for your property instead of using one standard depth.' ),
						array( 'title' => 'Site Access',           'desc' => 'Equipment needs a clear path to reach the foundation area. David looks at driveways, lot width, slope, and nearby structures before the work is planned.' ),
						array( 'title' => 'Existing Ground',       'desc' => 'The shape of the land affects how the excavation is approached. David looks at slope and elevation before the dig so the work fits what your property allows.' ),
						array( 'title' => 'Underground Utilities', 'desc' => 'Underground utility lines need to be located before digging starts. Oregon law requires an 811 locate at least two business days before excavation begins.' ),
						array( 'title' => 'Site Boundaries',       'desc' => 'The excavation needs to stay within the planned foundation footprint. David marks the area before digging so the work stays focused on the space your foundation requires.' ),
					),
				),

				array(
					'type'    => 'cards',
					'heading' => 'How Do Soil, Slope, and Wet Ground Affect Foundation Excavation?',
					'intro'   => 'Eugene-area properties can look very different from one lot to the next. David looks at the slope, soil, access, and wet ground conditions before digging because those details can change how your excavation needs to be done.',
					'items'   => array(
						array( 'title' => 'Soil',                'desc' => 'In the Willamette Valley, clay-heavy soils behave differently than looser or drier ground. The soil on your lot can affect how equipment works and how the excavation is approached.' ),
						array( 'title' => 'Slope',               'desc' => 'A sloped lot can have different elevations across the foundation area. David looks at the existing grade to understand how the excavation needs to follow your foundation plans.' ),
						array( 'title' => 'Elevation',           'desc' => 'An uneven lot may require more soil to be removed in some areas than others. The plans and existing grade guide where the excavation goes and how much needs to come out.' ),
						array( 'title' => 'Wet Ground',          'desc' => 'Wet weather can saturate the ground and affect equipment access and excavation timing. David checks the site conditions before the work begins.' ),
						array( 'title' => 'Site Access',         'desc' => 'Equipment needs a clear path to the foundation area. Tight driveways, fencing, neighboring structures, or a narrow lot can all affect how the work is planned.' ),
						array( 'title' => 'Existing Structures', 'desc' => 'Excavating near a building already on the property requires extra care. David looks at where the new foundation sits relative to any existing structures before work begins.' ),
					),
				),

				array(
					'type'    => 'steps',
					'heading' => 'How Does Foundation Excavation Work?',
					'intro'   => 'Every foundation dig is a little different. In Eugene and Lane County, the plans tell us what needs to be built, while the actual ground conditions on your lot tell us what the excavation will be like.',
					'items'   => array(
						array( 'title' => 'Marking the Foundation Area',   'desc' => 'The foundation area is marked before digging starts. This shows where the excavation needs to go and keeps the work in line with the plans.' ),
						array( 'title' => 'Digging to the Required Depth', 'desc' => 'Soil is removed until the planned depth is reached. The depth depends on the foundation plans and the conditions found on the property.' ),
						array( 'title' => 'Moving the Excavated Soil',     'desc' => 'Digging leaves soil that needs to be managed. Depending on the property and project, some soil may stay on site or need to be moved elsewhere.' ),
						array( 'title' => 'Checking the Finished Grade',   'desc' => 'The excavation is checked against the planned depth and ground levels. This helps leave the foundation area ready for the next stage of construction.' ),
					),
				),

				array(
					'type'    => 'why',
					'heading' => 'What Can Make Foundation Excavation More Difficult?',
					'intro'   => 'Every foundation dig is different. Rain, soil, slope, access, nearby buildings, and excavation depth can change how the work is planned and carried out.',
					'items'   => array(
						array( 'title' => 'Rain and Wet Ground',                   'desc' => 'Wet ground can make equipment access harder and may affect when excavation can safely move forward. Weather can also change the work schedule.' ),
						array( 'title' => 'Clay and Soft Soil',                    'desc' => 'Soil conditions can vary from one property to another. Clay or soft ground may affect digging conditions and how equipment moves around the site.' ),
						array( 'title' => 'Sloped Lots',                           'desc' => 'A sloped lot can have different elevations across the foundation area. The plans and existing grade guide how the excavation is approached.' ),
						array( 'title' => 'Tight Lots and Hard-to-Reach Spots',    'desc' => 'Limited access can make it harder to bring equipment into the foundation area. Nearby fences, driveways, or structures may also limit working space.' ),
						array( 'title' => 'Digging Close to an Existing Building', 'desc' => 'Excavation near an existing building requires careful planning. The available space, ground conditions, and location of the new foundation all matter.' ),
						array( 'title' => 'Deeper Digs Need Extra Care',           'desc' => 'Deeper excavations require more planning than a shallow foundation dig. The depth, soil, access, and site conditions all affect how the work is handled.' ),
					),
				),

				array(
					'type'    => 'faq',
					'heading' => 'Foundation Excavation FAQs in Eugene, Oregon',
					'items'   => array(
						array(
							'q' => 'How deep do footings need to be in Eugene, Oregon?',
							'a' => 'In Lane County, exterior footings must be placed at least 12 inches below finished grade on undisturbed soil, per Oregon Residential Specialty Code R403.1.4. Lane County\'s elevation sits in the 12-inch frost protection band per ORSC Table R301.2(1). This makes 12 inches the number that governs both the code minimum and the frost protection requirement for most Eugene-area projects. Saturated Willamette Valley clay at the 12-inch depth may require over-excavation to reach firm bearing soil; a site assessment before work begins accounts for this.',
						),
						array(
							'q' => 'What type of foundation is most common in Eugene?',
							'a' => 'Crawl space foundations are the most common type in Eugene and Lane County, particularly in homes built before 2000, based on local Lane County real estate data. Slab-on-grade has become standard for newer construction and ADU projects. Full basements are the least common: Oregon\'s mild winters reduce the seasonal demand for basement space, and west Eugene\'s high winter water table complicates deep excavation and foundation drainage requirements.',
						),
						array(
							'q' => 'How much does foundation excavation cost in Eugene, Oregon?',
							'a' => 'Foundation excavation in Eugene typically ranges from $2,300 to $4,100 for a standard residential job (crawl space or slab, approximately 1 to 1.5 days of work) and $3,900 to $6,800 for full basement excavation. Hourly rates with excavator and operator run $190 to $340 per hour in Lane County. These are general market estimates based on HomeBlue data for the Eugene area. Call D&D Land Works at 541-401-8726 for a free on-site estimate.',
						),
						array(
							'q' => 'Is there bedrock in Eugene, Oregon?',
							'a' => 'No. The Willamette Valley floor has no significant bedrock. Unlike Central Oregon, where volcanic basalt sits near the surface and rock ripping or blasting is a real cost line, Lane County\'s subsurface is Willamette Valley clay and alluvial soils deposited by the Missoula Floods. The primary excavation challenge in Eugene is clay behavior during wet season, not rock. National content that includes rock cost premiums does not reflect Lane County conditions.',
						),
						array(
							'q' => 'What is Malpass clay and does it affect foundation excavation?',
							'a' => 'Malpass clay is a soil series found throughout west Eugene, documented in BLM Technical Note 447. It has high shrink-swell properties and very low permeability. In wet season (October through May), saturated Malpass clay at the 12-inch code-minimum footing depth can be too soft to support footing loads adequately, requiring over-excavation to reach firm bearing soil. D&D assesses site soil conditions before finalizing any foundation excavation quote.',
						),
					),
				),

				array(
					'type'    => 'related',
					'heading' => 'Related Services',
					'items'   => array(
						array( 'title' => 'Site Preparation',   'desc' => 'Clearing, grading, and compaction to ready a property for the next stage of work.',     'href' => '/site-preparation-contractor-eugene-or' ),
						array( 'title' => 'Land Clearing',      'desc' => 'Removing brush, trees, and debris to open usable land before site work begins.',        'href' => '/land-clearing-services-eugene-or' ),
						array( 'title' => 'Grading & Leveling', 'desc' => 'Shaping land to the right slope for drainage and a level build pad.',                   'href' => '/land-grading-services-eugene-or' ),
						array( 'title' => 'Utility Excavation', 'desc' => 'Trenching for water, sewer, electrical conduit, and irrigation lines.',                 'href' => '/utility-trenching-eugene-or' ),
					),
				),

			),
		),

		/* ------------------------------------------------------------------ */
		/* 2. Drainage Installation                                            */
		/* ------------------------------------------------------------------ */
		'drainage-installation-eugene-or' => array(
			'hero' => array(
				'eyebrow'  => 'When Water Won\'t Go Where You Want It',
				'title'    => 'Drainage Installation Services in Eugene, Oregon',
				'subtitle' => 'If rain leaves your yard soggy, water pools near your house, or runoff crosses your driveway, the problem may be with how water moves across your property. In Eugene, wet ground and changing site conditions can make each property different. D&D Land Works looks at the slope, soil, access, and existing drainage before planning the work.',
			),
			'sections' => array(

				array(
					'type'    => 'intro',
					'heading' => 'Why Is Water Collecting on Your Property?',
					'body'    => '<p>Water can collect because the ground slopes the wrong way, a low area holds rain, or an old drainage path is no longer working. Before adding a drain, we look at where the water starts and where it needs to go.</p><p>Soil plays a part too. Some properties have soil that holds water near the surface instead of letting it drain. Old ditches or pipes that are partly blocked can also change where water ends up.</p><p>When David walks your property, he looks at the slope, the soil, and where the water is actually coming from, not just where it\'s sitting. That gives you a clearer picture of what kind of drainage work, if any, might help.</p>',
				),

				array(
					'type'    => 'cards_dark',
					'heading' => 'What Can Cause a Drainage Problem?',
					'intro'   => 'Every property moves water in its own way. Slope, soil, low spots, existing drainage, and access can all affect where water collects and how it can be moved.',
					'items'   => array(
						array( 'title' => 'Slope',             'desc' => 'A yard that slopes toward the house sends rain straight toward the foundation. David checks the grade to understand where water is coming from and where it naturally wants to go.' ),
						array( 'title' => 'Soil',              'desc' => 'Parts of Eugene have heavy clay that holds water instead of letting it drain. When David digs into the ground, he can tell pretty quickly whether the soil is part of the problem.' ),
						array( 'title' => 'Low Spots',         'desc' => 'Low spots tend to collect water after rain and stay wet for days. David notes where the low areas are and whether water is pooling or just draining slowly.' ),
						array( 'title' => 'Yard Layout',       'desc' => 'Driveways, patios, and walkways all change how water moves across a property. David looks at the full layout, not just the wet spot, to figure out where the water is coming from.' ),
						array( 'title' => 'Existing Drainage', 'desc' => 'If your property already has ditches, pipes, or culverts, David checks whether they\'re still doing their job. Old or blocked drainage can push water in the wrong direction.' ),
						array( 'title' => 'Site Access',       'desc' => 'Some drainage work needs equipment to get in. David checks how the machine can reach the work area and whether a tight driveway or nearby structures will affect the job.' ),
					),
				),

				array(
					'type'    => 'cards',
					'heading' => 'Which Drainage System Might Fit Your Property?',
					'intro'   => 'The right drainage approach depends on where water starts, where it collects, and where it needs to go. Your slope, soil, yard layout, and existing drainage all matter.',
					'items'   => array(
						array( 'title' => 'French Drain',        'desc' => 'A French drain is a buried drain that gives water a path to move away. It may help with wet areas where water needs to be collected below the surface.' ),
						array( 'title' => 'Catch Basin',         'desc' => 'A catch basin collects water at the surface, such as water pooling in a low part of a yard. It can help when surface runoff needs a clear place to enter.' ),
						array( 'title' => 'Swale',               'desc' => 'A swale is a shallow, shaped area that helps guide surface water. It may work well when the land has enough space to direct runoff along a planned path.' ),
						array( 'title' => 'Culvert',             'desc' => 'A culvert carries water under a driveway or access area. On some rural properties, it may help keep a ditch or drainage path open where vehicles need to cross.' ),
						array( 'title' => 'Surface Grading',     'desc' => 'Changing the surface grade can help guide water away from areas where it collects. This may be useful when the shape of the ground is part of the drainage problem.' ),
						array( 'title' => 'Stormwater Drainage', 'desc' => 'Stormwater drainage helps collect and move rainwater across a property. The right approach depends on the amount of runoff, property layout, and where the water can safely go.' ),
					),
				),

				array(
					'type'    => 'steps',
					'heading' => 'What Makes Drainage Installation Different in Eugene\'s Soil?',
					'intro'   => 'Eugene-area properties can have different soil, slopes, and wet-season conditions. These local factors can affect how water moves and what type of drainage work may fit your property.',
					'items'   => array(
						array( 'title' => 'Clay Soil',                 'desc' => 'Some areas of Eugene have clay soil that does not let water move through quickly. This can leave parts of a yard wet after rain.' ),
						array( 'title' => 'Wet Low Areas',             'desc' => 'Low parts of a property may stay wet during the rainy season. In these areas, changing the surface grade may not solve the whole drainage problem.' ),
						array( 'title' => 'Hillside Runoff',           'desc' => 'Sloped properties can send water downhill toward a house, driveway, or other part of the yard. The slope helps show where that water is coming from.' ),
						array( 'title' => 'Seasonal Ground Conditions','desc' => 'Wet weather can change how the ground handles drainage work. Very wet soil can also make excavation harder, so the timing and site conditions matter.' ),
					),
				),

				array(
					'type'    => 'why',
					'heading' => 'Where Does the Water From a French Drain Go?',
					'intro'   => 'A French drain needs somewhere for the collected water to go. The right outlet depends on the property\'s slope, soil, drainage layout, and any requirements that apply.',
					'items'   => array(
						array( 'title' => 'Daylight Discharge',    'desc' => 'Water can sometimes leave the pipe at a lower point on the property. This only works when the site has enough slope to let water flow away from the drainage area.' ),
						array( 'title' => 'Dry Well',              'desc' => 'A dry well can give collected water a place to soak into the surrounding ground. Whether this approach fits depends on the soil and conditions at your property.' ),
						array( 'title' => 'Stormwater Connection', 'desc' => 'Some projects may connect to a public stormwater system when allowed. Any required local approval or permit should be confirmed before making that connection.' ),
					),
				),

				array(
					'type'    => 'faq',
					'heading' => 'Drainage Installation FAQs in Eugene, Oregon',
					'items'   => array(
						array(
							'q' => 'How much does French drain installation cost in Eugene, Oregon?',
							'a' => 'French drain installation in Eugene averages $3,081 to $4,439 per project, based on aggregated quote data for the Eugene area (Homeyou, April 2026, 455 completed projects). The full range runs from $1,043 to $6,989 depending on system type, depth, length, and site conditions. In Willamette Valley clay, real project costs often run 2 to 3 times above national per-linear-foot baselines. Contact D&D for a free on-site estimate: 541-401-8726.',
						),
						array(
							'q' => 'Do I need a permit to install a French drain in Eugene?',
							'a' => 'For a standard residential French drain discharging to daylight or a dry well on your own property, no permit is typically required. French drains are exempt from Oregon\'s Underground Injection Control regulations per Oregon DEQ. If you want to connect the discharge to Eugene\'s city stormwater system, that tie-in requires a permit under Eugene Municipal Code Section 6.610, issued only to a property owner for their own residence, a licensed plumber, or a licensed septic installer.',
						),
						array(
							'q' => 'What is the difference between a French drain and a curtain drain?',
							'a' => 'A French drain is a buried perforated pipe in gravel, installed at 18 to 24 inches depth or deeper at a footing, designed to collect and carry groundwater to a discharge point. A curtain drain is a shallower variant, typically around 2 feet deep, that intercepts near-surface lateral water moving across the soil before it reaches a structure. Curtain drains cost less, roughly $10 to $25 per linear foot versus $45 to $85 or more per foot for a deeper French drain, and work well for lighter near-surface water problems.',
						),
						array(
							'q' => 'Where does the water from a French drain actually go?',
							'a' => 'Water from a French drain exits in one of three ways: a daylight discharge point where the pipe exits above ground at a lower elevation, a dry well that slowly infiltrates water back into the soil, or a permitted tie-in to the city\'s public stormwater system. In Eugene, the storm-system tie-in requires a permit under Municipal Code Section 6.610. The right option depends on your site\'s slope, soil conditions, and proximity to the city system.',
						),
						array(
							'q' => 'Does soil type affect how a French drain is installed?',
							'a' => 'Yes. Some Eugene-area properties have soil that holds water or becomes difficult to work when wet. Soil conditions can affect how drainage is excavated, which materials are used, and which approach fits the property. David looks at the soil and site conditions before recommending a drainage approach.',
						),
					),
				),

				array(
					'type'    => 'related',
					'heading' => 'Related Services',
					'items'   => array(
						array( 'title' => 'Site Preparation',    'desc' => 'Clearing, grading, and compaction to ready a property for the next stage of work.',    'href' => '/site-preparation-contractor-eugene-or' ),
						array( 'title' => 'Land Clearing',       'desc' => 'Removing brush, trees, and debris to open usable land before site work begins.',       'href' => '/land-clearing-services-eugene-or' ),
						array( 'title' => 'Grading & Leveling',  'desc' => 'Shaping land to the right slope for drainage and a level build pad.',                  'href' => '/land-grading-services-eugene-or' ),
						array( 'title' => 'Foundation Excavation','desc' => 'Digging and leveling for footings, crawl spaces, and foundations.',                   'href' => '/foundation-excavation-eugene-or' ),
					),
				),

			),
		),

		/* ------------------------------------------------------------------ */
		/* 3. Utility Trenching                                                */
		/* ------------------------------------------------------------------ */
		'utility-trenching-eugene-or' => array(
			'hero' => array(
				'eyebrow'  => 'Utility Trenching in Eugene, Oregon',
				'title'    => 'Utility Trenching Services in Eugene, Oregon',
				'subtitle' => 'Water, sewer, or power lines may need to cross your property before a new home or building can be used. D&D Land Works digs the utility trenches needed for these projects, based on your plans, site conditions, and access.',
			),
			'sections' => array(

				array(
					'type'    => 'intro',
					'heading' => 'What Is Utility Trenching?',
					'body'    => '<p>Adding a water line, sewer line, or electrical conduit means creating a safe underground path for the utility. On Eugene-area properties, slope, wet ground, long utility runs, and site access can affect how that trench is approached. We look at the property and planned route before excavation begins.</p><p>The trench follows a planned <strong>trench route</strong> based on the project requirements. Its depth and location can change with the utility type, soil, slope, wet ground, and site access. The excavation needs to follow the plans for the project.</p><p>Once the utility work is ready, <strong>backfill</strong> may be used to fill the trench as part of the project. D&D Land Works handles the excavation side, while utility design, connections, and other specialized work may be handled by the proper utility professional.</p><p>Trenching time depends on the length and depth of the excavation, soil, access, existing utilities, weather, and the overall project. Wet ground or difficult access can make the work take longer.</p><p>Utility and water-line trenching may also include irrigation lines on residential and rural properties, depending on the project. See our <a href="/trenching-services-eugene-or">trenching services page</a> for a broader look at the trenching work we handle.</p>',
				),

				array(
					'type'    => 'cards_dark',
					'heading' => 'What Kind of Utility Needs a Trench?',
					'intro'   => 'Water, sewer, and electrical lines each have their own depth and route requirements. If your new water or power line needs a trench, the utility type and property conditions both affect how the excavation is planned.',
					'items'   => array(
						array( 'title' => 'Water Lines',                   'desc' => 'A water line may need a trench from the water source to a home or building. A new home or rural property may need a longer water-line trench from the service point to the building.' ),
						array( 'title' => 'Sewer Lines',                   'desc' => 'A sewer line may cross part of the property. The route can depend on the building location, required grade, and where the sewer or septic system is located.' ),
						array( 'title' => 'Electrical and Power Conduit',  'desc' => 'Underground electrical service may require a trench from the service point to the building. The route, depth, and conduit requirements depend on the project and applicable electrical requirements.' ),
						array( 'title' => 'Underground Utility Routes',    'desc' => 'A utility route may cross yards, driveways, or other parts of a property. Existing structures and underground lines can affect where excavation takes place.' ),
						array( 'title' => 'Utility Excavation',            'desc' => 'D&D Land Works focuses on the excavation needed to create the utility trench. The utility provider or qualified professional handles work outside the excavation scope.' ),
					),
				),

				array(
					'type'    => 'cards',
					'heading' => 'What Can Make Utility Trenching Harder?',
					'intro'   => 'A utility trench can be simple on an open lot, but every property is different. Around Eugene and Lane County, rain, wet ground, slopes, driveways, and existing underground lines can change how the work is planned.',
					'items'   => array(
						array( 'title' => 'Wet Ground',                  'desc' => 'After heavy rain, some Eugene-area properties can have wet ground that makes equipment access harder. We look at the ground and site conditions before trenching so the work fits the actual property.' ),
						array( 'title' => 'Sloped Property',             'desc' => 'A sloped lot can make the utility route more involved. The trench still needs to follow the project requirements while working with the shape of the property.' ),
						array( 'title' => 'Driveway Crossings',          'desc' => 'If a utility line needs to cross a driveway, the excavation has to account for the existing surface and access to the property.' ),
						array( 'title' => 'Existing Utilities',          'desc' => 'Water, sewer, electric, or other underground lines may already be on the property. Their location needs to be considered before excavation begins.' ),
						array( 'title' => 'Long Utility Runs',           'desc' => 'On some rural Lane County properties, a new building may sit farther from existing services. A longer trench means more excavation, soil movement, and site access to consider.' ),
						array( 'title' => 'How D&D Approaches the Site', 'desc' => 'David looks at the property and the planned utility route before the digging starts. The goal is to understand the ground, access, and work area so the excavation fits the actual site.' ),
					),
				),

				array(
					'type'    => 'steps',
					'heading' => 'What About Sewer Line Trenching in Eugene?',
					'intro'   => 'Sewer trenching can be part of a new home or property project. The route, grade, soil, and final connection all affect how the excavation is planned.',
					'items'   => array(
						array( 'title' => 'Why a Sewer Trench Needs a Steady Slope', 'desc' => 'A sewer line may need a planned slope so wastewater can move as intended. The required grade comes from the project plans and applicable requirements.' ),
						array( 'title' => 'Sewer Lines to a Septic System',          'desc' => 'On some Lane County properties, a sewer trench may run to a septic system rather than a public sewer connection. The route and depth depend on the system location and approved project requirements.' ),
						array( 'title' => 'Sewer Trenching on Sloped Property',      'desc' => 'A sloped property can change the trench route and excavation depth. Existing grades and project plans help determine how the trench is laid out.' ),
						array( 'title' => 'What D&D Handles',                        'desc' => 'D&D Land Works handles the excavation for the planned sewer route. Plumbing, septic design, connections, and other specialized work may be handled separately.' ),
					),
				),

				array(
					'type'    => 'why',
					'heading' => 'What Happens After the Utility Trench Is Dug?',
					'intro'   => 'Digging a utility trench leaves soil beside the work area. What happens next depends on the trench, the soil, the project plans, and whether the material can be used again.',
					'items'   => array(
						array( 'title' => 'Excavated Soil',           'desc' => 'Digging creates soil that has to be managed during the project. The amount depends on the trench length, depth, and property.' ),
						array( 'title' => 'Backfilling',              'desc' => 'Once the trench work is ready for the next stage, the excavated area can be backfilled as required by the project.' ),
						array( 'title' => 'Restoring the Work Area',  'desc' => 'A yard, driveway, or access area may be disturbed during trenching. The amount of restoration work depends on what was excavated.' ),
					),
				),

				array(
					'type'    => 'faq',
					'heading' => 'Frequently Asked Questions',
					'items'   => array(
						array(
							'q' => 'How deep does a water service line need to be buried in Lane County, Oregon?',
							'a' => 'Water service lines must be buried at least 24 inches below grade in Lane County \xe2\x80\x93 12 inches below the local 12-inch frost depth, as required by Oregon Plumbing Specialty Code 609.1. Deeper burial may be required under driveways, parking areas, or where the inspector specifies additional depth.',
						),
						array(
							'q' => 'How deep does a sewer lateral need to be buried?',
							'a' => 'Sanitary sewer laterals need at least 12 inches of cover above the pipe in Lane County (OPSC 718.1). The pipe must also slope at least 1/4 inch per foot toward the sewer main or septic tank to ensure gravity drainage. Inadequate slope is the most common cause of sewer lateral failure.',
						),
						array(
							'q' => 'How deep does electrical conduit need to be buried in Oregon?',
							'a' => 'In Oregon, PVC electrical conduit must be at least 18 inches deep in open ground and 24 inches deep under driveways or parking areas, per NEC Table 300.5 (adopted by Oregon\'s Electrical Specialty Code). Rigid metal conduit can be as shallow as 6 inches in both conditions. Direct-burial cable requires 24 inches.',
						),
						array(
							'q' => 'How deep does a gas line need to be buried in Oregon?',
							'a' => 'Standard residential gas piping must be at least 18 inches below grade in Oregon (Oregon Residential Specialty Code G2415.12). Lines feeding portable outdoor appliances \xe2\x80\x93 generators, outdoor heaters, BBQ drops \xe2\x80\x93 can be as shallow as 8 inches under ORSC G2415.12.1.',
						),
						array(
							'q' => 'Can water, sewer, electrical, and gas go in the same trench?',
							'a' => 'Yes \xe2\x80\x93 joint trenching is code-permitted in Lane County with modern pipe materials. The one key separation rule: where a water line crosses above a sewer line, the bottom of the water pipe must be at least 12 inches above the top of the sewer pipe (OPSC 720.1). Individual utility companies may have additional separation specifications beyond code minimums \xe2\x80\x93 confirm these when you initiate the service application.',
						),
					),
				),

				array(
					'type'    => 'related',
					'heading' => 'Related Services',
					'items'   => array(
						array( 'title' => 'Site Preparation',      'desc' => 'Clearing, grading, and compaction to ready a property for the next stage of work.',  'href' => '/site-preparation-contractor-eugene-or' ),
						array( 'title' => 'Land Clearing',         'desc' => 'Removing brush, trees, and debris to open usable land before site work begins.',     'href' => '/land-clearing-services-eugene-or' ),
						array( 'title' => 'Grading & Leveling',    'desc' => 'Shaping land to the right slope for drainage and a level build pad.',                'href' => '/land-grading-services-eugene-or' ),
						array( 'title' => 'Drainage Installation', 'desc' => 'Excavation and grading to correct standing water and poor drainage.',                'href' => '/drainage-installation-eugene-or' ),
					),
				),

			),
		),

		/* ------------------------------------------------------------------ */
		/* 4. Driveway Excavation & Grading                                   */
		/* ------------------------------------------------------------------ */
		'driveway-excavation-grading-eugene-or' => array(
			'hero' => array(
				'eyebrow'  => 'Driveway Excavation & Grading in Eugene, Oregon',
				'title'    => 'Driveway Excavation & Grading Services in Eugene, Oregon',
				'subtitle' => 'On some Eugene-area driveways, rain can leave the ground wet and move gravel downhill. When David looks at the driveway, he checks the slope, low spots, water flow, and condition of the existing surface before deciding what work may be needed.',
			),
			'sections' => array(

				array(
					'type'    => 'intro',
					'heading' => 'What Is Wrong With Your Driveway?',
					'body'    => '<p>A driveway can change over time. Potholes and ruts may form from traffic, while gravel can move when rainwater runs across the surface. Low spots may also hold water and leave the driveway muddy.</p><p>If water keeps running down the driveway, it can move gravel and wear away the surface. Washouts can become worse when water follows the same path again and again. The slope and shape of the driveway matter.</p><p>The right repair depends on what is happening on your property. Some driveways may need grading or leveling. Others may need excavation, gravel work, or changes to how water moves across the area.</p>',
				),

				array(
					'type'    => 'cards_dark',
					'heading' => 'What Is Causing the Driveway Problem?',
					'intro'   => 'Rain, runoff, slope, soil, and repeated traffic can all affect a driveway. Understanding what is happening helps show whether grading, excavation, gravel work, or drainage may be needed.',
					'items'   => array(
						array( 'title' => 'Rain and Runoff',            'desc' => 'Rain can create runoff across the driveway. When water follows the same path, it may move gravel, create low spots, or wear away the surface.' ),
						array( 'title' => 'Slope and Grade',            'desc' => 'The driveway\'s slope affects where water goes. A driveway that is shaped poorly may let water collect in one area or run along the surface.' ),
						array( 'title' => 'Soil and Ground Conditions', 'desc' => 'The ground under a driveway affects how it holds water and supports the surface. Wet or soft ground can make some driveway problems harder to fix.' ),
						array( 'title' => 'Traffic and Repeated Use',   'desc' => 'Cars and trucks place repeated pressure on the driveway. Over time, this can contribute to ruts, potholes, and an uneven surface.' ),
						array( 'title' => 'Low Spots and Standing Water','desc' => 'A low area can collect water after rain. When water stays in the same place, it can leave the driveway muddy and affect the gravel surface.' ),
						array( 'title' => 'Existing Drainage',          'desc' => 'Ditches, slopes, and other drainage features can affect how water reaches the driveway. If water is a major part of the problem, related drainage work may need to be considered.' ),
					),
				),

				array(
					'type'    => 'cards',
					'heading' => 'When Does a Driveway Need Excavation?',
					'intro'   => 'Excavation may be needed when the ground under a driveway is damaged, uneven, or needs to be prepared for a new surface. The amount of work depends on the property.',
					'items'   => array(
						array( 'title' => 'Deeply Damaged Areas',              'desc' => 'Some damaged areas may need more than surface grading. Excavation can help remove or reshape problem areas before the driveway is rebuilt.' ),
						array( 'title' => 'Preparing a New Driveway',          'desc' => 'A new driveway may need ground preparation before the surface is added. Excavation can help prepare the area and establish the planned driveway shape.' ),
						array( 'title' => 'When Grading Alone May Not Be Enough','desc' => 'Grading can reshape the surface, but it may not fix deeper ground problems. If the issue is below the surface, more excavation may be needed.' ),
						array( 'title' => 'Removing Problem Areas',            'desc' => 'Some parts of an existing driveway may be badly damaged or uneven. Those areas may need to be removed and reshaped before further driveway work.' ),
						array( 'title' => 'Working With the Existing Ground',  'desc' => 'The existing soil and ground conditions can affect how much excavation is needed. We look at the property before deciding what work makes sense.' ),
						array( 'title' => 'Access to the Driveway',            'desc' => 'Equipment access can affect how excavation work is done. A long driveway, narrow access, or nearby structures may change how the work is approached.' ),
					),
				),

				array(
					'type'    => 'steps',
					'heading' => 'What Happens During Driveway Grading and Excavation?',
					'intro'   => 'The work starts by looking at the driveway, ground, water flow, and access. From there, the needed excavation and grading can be planned around the actual condition of your property.',
					'items'   => array(
						array( 'title' => 'Looking at the Driveway',       'desc' => 'We look at the surface, low spots, ruts, slope, gravel, and areas where water may be causing problems.' ),
						array( 'title' => 'Preparing the Ground',          'desc' => 'Where needed, problem areas can be excavated or reshaped. The amount of work depends on the driveway and existing ground conditions.' ),
						array( 'title' => 'Grading and Reshaping',         'desc' => 'Grading shapes the driveway surface and helps establish the needed slope. The goal is to create a better surface and improve how water moves.' ),
						array( 'title' => 'Working With Existing Gravel',  'desc' => 'If the driveway already has gravel, the existing material may be reshaped or worked with where appropriate. Additional gravel may be needed depending on the condition.' ),
					),
				),

				array(
					'type'    => 'why',
					'heading' => 'Why Hire D&D Land Works in Eugene?',
					'intro'   => 'When David looks at your driveway, the goal is to understand the problem before deciding what work is needed. D&D Land Works focuses on the ground, gravel, slope, and water affecting your driveway.',
					'items'   => array(
						array( 'title' => 'Licensed and Bonded in Oregon', 'desc' => 'D&D Land Works is licensed and bonded in Oregon under CCB #261742. You can verify the current license through the Oregon Construction Contractors Board.' ),
						array( 'title' => 'Drainage Is Part of the Look',  'desc' => 'Water can be a big reason a driveway develops ruts, washouts, or soft spots. We look at how water moves across the driveway so grading or repair addresses the actual problem.' ),
						array( 'title' => 'DEQ Septic Certification',      'desc' => 'D&D Land Works also carries Oregon DEQ certification for septic system installation and repair. When driveway work connects with septic or related excavation, that experience can be useful when planning the work.' ),
						array( 'title' => 'Free Estimates in Lane County', 'desc' => 'We provide free estimates throughout Lane County. We can look at your driveway, talk through what you are seeing, and explain what the work may involve.' ),
						array( 'title' => 'Other Excavation Work',         'desc' => 'When a driveway project connects with drainage, septic, or other excavation work, the site may involve more than the driveway surface itself. D&D can explain which excavation work falls within its scope and what may need another contractor.' ),
					),
				),

				array(
					'type'    => 'faq',
					'heading' => 'Frequently Asked Questions',
					'items'   => array(
						array(
							'q' => 'How much does gravel driveway grading cost in Eugene or Lane County, Oregon?',
							'a' => 'Gravel driveway grading costs vary by driveway size, condition, slope, drainage, and the work required. Existing driveway regrading may cost less than new driveway excavation and preparation. D&D can inspect your driveway and provide a free estimate based on the actual work needed.',
						),
						array(
							'q' => 'Why does my gravel driveway keep washing out every winter?',
							'a' => 'Your gravel driveway may wash out because rainwater is flowing across the driveway instead of away from it. Poor slope, low spots, missing drainage, or blocked culverts can contribute. Fixing the water flow may require grading, reshaping, drainage work, or additional gravel.',
						),
						array(
							'q' => 'How deep should a gravel driveway base be in Oregon?',
							'a' => 'A gravel driveway does not have one required base depth for every property. The needed depth depends on soil, drainage, driveway use, ground conditions, and the project. D&D can assess the existing ground and determine what preparation the driveway may need.',
						),
						array(
							'q' => 'What kind of gravel is best for driveways in the Eugene area?',
							'a' => 'Crushed gravel with a mix of larger stone and smaller material is commonly used for driveway surfaces because it can compact into a firm layer. The right material depends on your ground, drainage, driveway use, and the condition of the existing surface.',
						),
						array(
							'q' => 'Do I need a permit to install a gravel driveway in Oregon?',
							'a' => 'You may need a permit if the work changes how your driveway connects to a public road. Work entirely on private property may have different requirements. Permit needs depend on the location and project, so confirm requirements before excavation or construction begins.',
						),
					),
				),

				array(
					'type'    => 'related',
					'heading' => 'Related Services',
					'items'   => array(
						array( 'title' => 'Site Preparation',   'desc' => 'Clearing, grading, and compaction to ready a property for the next stage of work.',     'href' => '/site-preparation-contractor-eugene-or' ),
						array( 'title' => 'Land Clearing',      'desc' => 'Removing brush, trees, and debris to open usable land before site work begins.',        'href' => '/land-clearing-services-eugene-or' ),
						array( 'title' => 'Grading & Leveling', 'desc' => 'Shaping land to the right slope for drainage and a level build pad.',                   'href' => '/land-grading-services-eugene-or' ),
						array( 'title' => 'Utility Excavation', 'desc' => 'Trenching for water, sewer, electrical conduit, and irrigation lines.',                 'href' => '/utility-trenching-eugene-or' ),
					),
				),

			),
		),

		/* ------------------------------------------------------------------ */
		/* 5. Trenching Services                                               */
		/* ------------------------------------------------------------------ */
		'trenching-services-eugene-or' => array(
			'hero' => array(
				'eyebrow'  => 'Trenching Services in Eugene, Oregon',
				'title'    => 'Trenching Services in Eugene, Oregon',
				'subtitle' => 'Need a trench for a water line, utility, irrigation, drainage, or another project? We dig trenches for Eugene-area properties and work around the ground, slope, access, and existing site conditions. We\'ll look at what you need dug and explain the work before it starts.',
			),
			'sections' => array(

				array(
					'type'    => 'intro',
					'heading' => 'What Is Trenching?',
					'body'    => '<p>Trenching means digging a narrow path into the ground. The trench gives a pipe, conduit, drainage line, or other underground service a place to go.</p><p>The work starts with the ground and soil on your property. The trench route, size, and depth depend on what the trench is for and the conditions around it.</p><p>For larger digging needs, trenching may be part of a wider excavation project. Contact D&D Land Works to discuss what needs to be dug and how your property may affect the work.</p>',
				),

				array(
					'type'    => 'cards_dark',
					'heading' => 'What Kind of Project Needs a Trench?',
					'intro'   => 'A trench can be used for many types of work. The purpose of the trench depends on what needs to go underground and where it needs to run on your property.',
					'items'   => array(
						array( 'title' => 'Utility and Water Lines',    'desc' => 'Water lines and other underground utilities may need a trench to reach the right location. The digging is separate from the plumbing or utility work that follows.' ),
						array( 'title' => 'Electrical Conduit',         'desc' => 'Electrical conduit can run underground inside a trench. D&D can handle the excavation, while the electrical work is handled by the proper electrical professional.' ),
						array( 'title' => 'Irrigation Lines',           'desc' => 'Irrigation lines may need a narrow trench across part of a property. The route can depend on the layout of the yard, ground conditions, and access.' ),
						array( 'title' => 'Drainage and Ditches',       'desc' => 'Water problems may call for a trench or ditch to give runoff a path. The right approach depends on the slope, ground, and where the water needs to go.' ),
						array( 'title' => 'Septic-Related Excavation',  'desc' => 'Some septic projects require excavation for tanks, lines, or other parts of the system. D&D\'s role is the digging; septic design and related work are separate.' ),
						array( 'title' => 'Residential Trenching',      'desc' => 'Homeowners may need trenching for several types of property work. If you\'re not sure what kind of trench you need, we can look at the project and explain the excavation involved.' ),
					),
				),

				array(
					'type'    => 'cards',
					'heading' => 'What Is the Difference Between a Trench and a Ditch?',
					'intro'   => 'A trench and a ditch are both dug into the ground, but they serve different purposes. A trench is often made for something that needs to run underground, while a ditch is often used to move water.',
					'items'   => array(
						array( 'title' => 'Underground Lines',   'desc' => 'A trench can give a water line, conduit, or other underground service a place to run. Its route depends on the project and property.' ),
						array( 'title' => 'Moving Water',        'desc' => 'A ditch can give rain and runoff a path to move away from an area. The slope and ground conditions help determine where the water can go.' ),
						array( 'title' => 'Shape and Size',      'desc' => 'Trenches and ditches can vary in width, depth, and shape. The work depends on what the digging needs to accomplish.' ),
						array( 'title' => 'Ground Conditions',   'desc' => 'Soil, wet ground, slope, and access can affect the digging. These conditions can also affect where the trench or ditch can go.' ),
						array( 'title' => 'Utility Routes',      'desc' => 'A utility trench follows the planned route for an underground line. Existing utilities should be located before excavation begins.' ),
						array( 'title' => 'Choosing the Right One','desc' => 'Not sure whether your project needs a trench or ditch? We can look at the property and explain what type of excavation may fit your project.' ),
					),
				),

				array(
					'type'    => 'steps',
					'heading' => 'What Happens Before the Trench Is Dug?',
					'intro'   => 'Before digging starts, we look at what the trench is for, where it needs to go, and what is around it. This helps avoid problems during the work.',
					'items'   => array(
						array( 'title' => 'Confirm the Trench Route',      'desc' => 'First, decide where the trench needs to run. The route should match the project and leave room around existing structures and other site features.' ),
						array( 'title' => 'Locate Underground Utilities',  'desc' => 'Before digging, existing underground utilities should be located. This helps identify lines that may be near the planned trench.' ),
						array( 'title' => 'Check the Ground',              'desc' => 'Look at the soil, slope, wet areas, and ground conditions. These can affect how the excavation is done and where equipment can work.' ),
						array( 'title' => 'Check Access',                  'desc' => 'Make sure there is a workable path to the digging area. Driveways, buildings, fences, and tight spaces can affect equipment access.' ),
					),
				),

				array(
					'type'    => 'why',
					'heading' => 'What Kind of Trenching Can D&D Land Works Handle?',
					'intro'   => 'On Eugene-area properties, trenching can mean different things. You may need a line across a yard, a ditch for water, or excavation for a rural property project. D&D Land Works can help with the digging and ground work needed for these projects.',
					'items'   => array(
						array( 'title' => 'Utility Trenching',           'desc' => 'A water line, sewer line, or electrical conduit may need a trench. We handle the digging while the proper utility or trade contractor handles installation and connections.' ),
						array( 'title' => 'Irrigation Trenching',        'desc' => 'Irrigation lines may need trenches across a yard or property. We can prepare the trench based on the planned route, ground conditions, and access.' ),
						array( 'title' => 'Drainage and Ditch Digging',  'desc' => 'Some water problems may need a trench or ditch to give runoff a path. The right approach depends on the slope, ground, and where the water needs to go.' ),
						array( 'title' => 'Residential Trenching',       'desc' => 'Home projects can need trenches for water, irrigation, drainage, or other underground work. We can look at the area and explain what the excavation may involve.' ),
						array( 'title' => 'Septic-Related Excavation',   'desc' => 'Some septic projects require digging for tanks, lines, or other parts of the system. D&D handles the excavation, while septic design and related system work remain separate.' ),
						array( 'title' => 'Other Excavation Work',       'desc' => 'Some trenching jobs are part of a larger excavation project. If your project needs more than trench digging, we can look at the site and explain what excavation may be needed.' ),
					),
				),

				array(
					'type'    => 'faq',
					'heading' => 'Frequently Asked Questions',
					'items'   => array(
						array(
							'q' => 'How deep do irrigation lines need to be buried in Lane County, Oregon?',
							'a' => 'Irrigation depth depends on the line, property, and project requirements. Mainlines and lateral lines may need different depths. The site conditions and planned irrigation system should guide the trench depth.',
						),
						array(
							'q' => 'What\'s the difference between a sprinkler mainline trench and a lateral trench?',
							'a' => 'A mainline carries water to different parts of the irrigation system. Lateral lines branch off to serve sprinkler areas. Because they have different jobs, their trench requirements can also differ.',
						),
						array(
							'q' => 'How much does trenching cost in Eugene, Oregon?',
							'a' => 'Trenching cost depends on the length, depth, soil, access, slope, and site conditions. Hard ground or difficult access can add work. D&D Land Works can look at your property and provide a free estimate.',
						),
						array(
							'q' => 'How much does it cost to trench 100 feet for irrigation?',
							'a' => 'There is no single price for 100 feet of irrigation trenching. Soil, access, depth, and whether the trench crosses an existing surface can change the work. A site estimate gives you a more useful number.',
						),
						array(
							'q' => 'Do I need to call Oregon 811 before digging an irrigation trench?',
							'a' => 'Underground utilities should be located before excavation begins. Oregon 811 can help identify marked utility lines before digging. Check the current requirements for your project before work starts.',
						),
					),
				),

				array(
					'type'    => 'related',
					'heading' => 'Related Services',
					'items'   => array(
						array( 'title' => 'Site Preparation',   'desc' => 'Clearing, grading, and compaction to ready a property for the next stage of work.',     'href' => '/site-preparation-contractor-eugene-or' ),
						array( 'title' => 'Land Clearing',      'desc' => 'Removing brush, trees, and debris to open usable land before site work begins.',        'href' => '/land-clearing-services-eugene-or' ),
						array( 'title' => 'Grading & Leveling', 'desc' => 'Shaping land to the right slope for drainage and a level build pad.',                   'href' => '/land-grading-services-eugene-or' ),
						array( 'title' => 'Utility Excavation', 'desc' => 'Trenching for water, sewer, electrical conduit, and irrigation lines.',                 'href' => '/utility-trenching-eugene-or' ),
					),
				),

			),
		),

		/* ------------------------------------------------------------------ */
		/* 6. Brush Clearing                                                   */
		/* ------------------------------------------------------------------ */
		'brush-clearing-eugene-or' => array(
			'hero' => array(
				'eyebrow'  => 'Brush Clearing in Eugene, Oregon',
				'title'    => 'Brush Clearing Services in Eugene, Oregon',
				'subtitle' => 'Overgrown brush, blackberries, and dense undergrowth can make a property difficult to use or develop. We look at the site, what needs to be cleared, and the ground conditions before the work begins.',
			),
			'sections' => array(

				array(
					'type'    => 'intro',
					'heading' => 'What Is Brush Clearing?',
					'body'    => '<p>Brush clearing means removing overgrown vegetation from a property. This can include shrubs, blackberry vines, saplings, tall grass, and other undergrowth that has taken over an area.</p><p>In the Eugene area, wet winters and mild summers mean brush can grow quickly. A property that was open a few years ago may now be heavily overgrown and difficult to access.</p><p>The right approach depends on how dense the growth is, what the land needs to be used for afterward, and what the ground looks like underneath. We look at the site before deciding what the work involves.</p>',
				),

				array(
					'type'    => 'cards_dark',
					'heading' => 'What Kind of Growth Needs Clearing?',
					'intro'   => 'Brush clearing covers many types of overgrowth. The right equipment and approach depend on what is growing, how dense it is, and what the property needs after clearing.',
					'items'   => array(
						array( 'title' => 'Overgrown Brush',              'desc' => 'Brush and shrubs can take over a property over time. Heavy growth may make areas difficult to access or use.' ),
						array( 'title' => 'Blackberries and Invasive Plants','desc' => 'Blackberry vines and other invasive plants spread quickly and can be difficult to remove. They can also hide ground conditions underneath.' ),
						array( 'title' => 'Wooded and Overgrown Lots',    'desc' => 'Lots with heavy brush, saplings, and undergrowth may need clearing before grading, building, or other site work can begin.' ),
						array( 'title' => 'Fence Lines and Property Edges','desc' => 'Brush growing along fence lines or property edges can be difficult to manage. Clearing these areas can improve access and visibility.' ),
						array( 'title' => 'Slope and Hillside Growth',    'desc' => 'Brush on slopes can hide erosion or unstable ground. Clearing the vegetation can help assess the condition of the slope below.' ),
						array( 'title' => 'Pre-Construction Clearing',    'desc' => 'Before grading, excavation, or construction can begin, overgrown areas may need to be cleared. The extent of clearing depends on the property and project.' ),
					),
				),

				array(
					'type'    => 'cards',
					'heading' => 'When Does a Property Need Brush Clearing?',
					'intro'   => 'Brush clearing may be needed before construction, grading, or other site work, or simply to reclaim land that has become too overgrown to use. The reason depends on the property and project.',
					'items'   => array(
						array( 'title' => 'Before Grading or Excavation',   'desc' => 'Overgrown areas often need to be cleared before grading or excavation equipment can access the site. Clearing first makes the rest of the work easier.' ),
						array( 'title' => 'Before Construction',            'desc' => 'New construction may require clearing brush and undergrowth from the building area and surrounding site before work can begin.' ),
						array( 'title' => 'Reclaiming Unused Land',         'desc' => 'Land that has not been maintained can become overgrown over time. Clearing opens up the area and makes it usable again.' ),
						array( 'title' => 'Improving Property Access',      'desc' => 'Heavy brush along driveways, paths, or property edges can limit access. Clearing can open up routes and make the property easier to move around.' ),
						array( 'title' => 'Assessing Ground Conditions',    'desc' => 'Dense brush can hide what the ground underneath looks like. Clearing the vegetation makes it possible to see and assess the soil and slope.' ),
						array( 'title' => 'General Property Cleanup',       'desc' => 'Some properties simply need a cleanup, removing years of overgrowth to get the land back to a manageable state.' ),
					),
				),

				array(
					'type'    => 'steps',
					'heading' => 'What Happens During Brush Clearing?',
					'intro'   => 'The work starts with a look at the property, what is growing, how dense it is, and what the cleared area needs to be used for. From there, the clearing can be planned around the actual site.',
					'items'   => array(
						array( 'title' => 'Looking at the Site',        'desc' => 'We look at the brush type, density, slope, access, and ground conditions. This helps determine what equipment and approach the clearing will need.' ),
						array( 'title' => 'Clearing the Vegetation',    'desc' => 'Brush, shrubs, vines, and undergrowth are removed from the area. The method depends on the size of the growth and how thoroughly the area needs to be cleared.' ),
						array( 'title' => 'Managing What Is Removed',   'desc' => 'Cleared brush can be chipped, piled, or hauled depending on the project. We can discuss what makes sense for your property when we look at the site.' ),
						array( 'title' => 'Preparing for the Next Step','desc' => 'After clearing, the area may be ready for grading, excavation, construction, or simply left as open ground. The next step depends on the project.' ),
					),
				),

				array(
					'type'    => 'why',
					'heading' => 'What Can D&D Land Works Help With?',
					'intro'   => 'D&D Land Works can help with brush clearing as a standalone project or as part of a larger site preparation job. We look at the property first and explain what the clearing work may involve.',
					'items'   => array(
						array( 'title' => 'Brush and Shrub Removal',            'desc' => 'We can clear overgrown brush, shrubs, and dense undergrowth from yards, lots, and rural properties throughout Lane County.' ),
						array( 'title' => 'Blackberry and Invasive Plant Clearing','desc' => 'Blackberry vines and invasive plants can spread across a property quickly. We can clear these areas as part of a brush removal project.' ),
						array( 'title' => 'Pre-Construction Site Clearing',     'desc' => 'Before grading or excavation can begin, overgrown areas may need to be cleared. We can handle the clearing to prepare the site for the next step.' ),
						array( 'title' => 'Licensed and Bonded in Oregon',      'desc' => 'D&D Land Works is licensed and bonded in Oregon under CCB #261742. You can verify the license through the Oregon Construction Contractors Board.' ),
						array( 'title' => 'Free Estimates in Lane County',      'desc' => 'We provide free estimates throughout Lane County. We can look at the overgrown area, talk through what you need cleared, and explain what the work may involve.' ),
					),
				),

				array(
					'type'    => 'faq',
					'heading' => 'Frequently Asked Questions',
					'items'   => array(
						array(
							'q' => 'How much does brush clearing cost in Eugene or Lane County, Oregon?',
							'a' => 'Brush clearing cost depends on the size of the area, density of growth, access, and what the property requires. D&D Land Works can look at the property and provide a free estimate based on the actual work needed.',
						),
						array(
							'q' => 'Can D&D Land Works clear blackberry vines?',
							'a' => 'Blackberry vines are common on Oregon properties and can be cleared as part of a brush clearing project. The extent of the work depends on how dense the growth is and what the cleared area needs to be used for.',
						),
						array(
							'q' => 'Do I need a permit to clear brush on my property in Lane County?',
							'a' => 'Permit requirements can depend on the location, amount of clearing, and how the land will be used after. Properties near waterways or protected areas may have additional requirements. Check with Lane County before beginning work.',
						),
						array(
							'q' => 'What happens to the brush after it is cleared?',
							'a' => 'Cleared brush can be chipped, piled, or hauled off depending on the project and property. We can discuss disposal options when we look at the site.',
						),
						array(
							'q' => 'Can brush clearing be done before grading or excavation?',
							'a' => 'Yes, brush clearing is often one of the first steps before site grading or excavation can begin. Removing overgrowth gives equipment room to work and lets us assess the ground conditions underneath.',
						),
					),
				),

				array(
					'type'    => 'related',
					'heading' => 'Related Services',
					'items'   => array(
						array( 'title' => 'Land Clearing',        'desc' => 'Removing brush, trees, and debris to open usable land before site work begins.',      'href' => '/land-clearing-services-eugene-or' ),
						array( 'title' => 'Grading & Leveling',   'desc' => 'Shaping land to the right slope for drainage and a level build pad.',                 'href' => '/land-grading-services-eugene-or' ),
						array( 'title' => 'Site Preparation',     'desc' => 'Clearing, grading, and compaction to ready a property for the next stage of work.',   'href' => '/site-preparation-contractor-eugene-or' ),
						array( 'title' => 'Slope Stabilization',  'desc' => 'Erosion control and hillside grading for unstable or sloped sites.',                  'href' => '/slope-stabilization-eugene-or' ),
					),
				),

			),
		),

		/* ------------------------------------------------------------------ */
		/* 7. Slope Stabilization                                              */
		/* ------------------------------------------------------------------ */
		'slope-stabilization-eugene-or' => array(
			'hero' => array(
				'eyebrow'  => 'Slope Stabilization in Eugene, Oregon',
				'title'    => 'Slope Stabilization Services in Eugene, Oregon',
				'subtitle' => 'Eugene-area slopes deal with heavy rain, wet soil, and runoff that can cause erosion and ground movement. We look at the slope, soil, and water flow before discussing what grading or excavation work may help.',
			),
			'sections' => array(

				array(
					'type'    => 'intro',
					'heading' => 'What Is Slope Stabilization?',
					'body'    => '<p>Slope stabilization refers to work done to reduce erosion, limit soil movement, and improve the condition of a sloped area. The goal is to address what is causing the slope to erode or become unstable.</p><p>On sloped properties in Lane County, heavy rain is often a factor. Water running down a slope can carry away soil and cut channels into the ground over time. The shape of the slope, soil type, and existing drainage all affect how serious the problem becomes.</p><p>The right approach depends on what is causing the erosion and what the slope needs to be used for. We look at the site before discussing what grading, drainage, or excavation work may help.</p>',
				),

				array(
					'type'    => 'cards_dark',
					'heading' => 'What Causes Slope Erosion and Instability?',
					'intro'   => 'Several factors affect how a slope holds up under rain and repeated wet seasons. Understanding what is happening on the slope helps determine what work may address the problem.',
					'items'   => array(
						array( 'title' => 'Erosion and Soil Loss',      'desc' => 'Rain can carry soil off a slope over time. When the same areas erode year after year, the ground can become unstable or develop gullies.' ),
						array( 'title' => 'Runoff and Water Flow',      'desc' => 'Water running down a slope can concentrate and cut channels into the ground. Where runoff goes and how fast it moves affects how much erosion occurs.' ),
						array( 'title' => 'Slope Angle and Shape',      'desc' => 'Steeper slopes tend to erode faster. The shape of a slope \xe2\x80\x93 whether it curves, has flat spots, or funnels water \xe2\x80\x93 affects where problems develop.' ),
						array( 'title' => 'Soil Type and Stability',    'desc' => 'Some soils hold together better than others when wet. Clay soils can slide when saturated, while loose sandy soils may erode more easily under rain.' ),
						array( 'title' => 'Vegetation and Ground Cover', 'desc' => 'Plant roots help hold soil in place. A slope that has been cleared or has lost its vegetation may be more vulnerable to erosion and movement.' ),
						array( 'title' => 'Cuts and Fill Areas',        'desc' => 'Grading that cuts into a hillside or builds up a slope with fill material can create unstable conditions if the ground is not properly prepared and supported.' ),
					),
				),

				array(
					'type'    => 'cards',
					'heading' => 'When Does a Slope Need Stabilization Work?',
					'intro'   => 'Slope problems do not always look serious at first. Some signs appear gradually over several wet seasons. Others become visible quickly after heavy rain.',
					'items'   => array(
						array( 'title' => 'Visible Erosion Channels',      'desc' => 'Channels or gullies cut into a slope by running water are a sign that erosion is removing soil. The problem can grow larger each wet season.' ),
						array( 'title' => 'Soil Moving After Rain',        'desc' => 'If soil is moving downhill after rainstorms, the slope may need help redirecting water or stabilizing the ground surface.' ),
						array( 'title' => 'Exposed Roots or Bare Ground',  'desc' => 'Exposed tree roots or bare patches on a slope can be a sign that the soil above has washed away. These areas may be more vulnerable to further erosion.' ),
						array( 'title' => 'Runoff Reaching Structures',    'desc' => 'Water carrying soil off a slope and reaching a driveway, building, or other structure can indicate that the slope needs drainage attention.' ),
						array( 'title' => 'After Clearing or Grading',     'desc' => 'Slopes that have been recently cleared of vegetation or regraded may be more vulnerable to erosion until the ground is stabilized.' ),
						array( 'title' => 'Unstable-Feeling Ground',       'desc' => 'Ground that shifts or feels soft on a slope can be a sign of deeper soil movement. The area may need assessment before further work is done nearby.' ),
					),
				),

				array(
					'type'    => 'steps',
					'heading' => 'What Happens When We Look at a Slope Problem?',
					'intro'   => 'Before any work is done, we look at the slope, soil, water flow, and surrounding conditions. This helps determine what excavation or grading work may address the problem.',
					'items'   => array(
						array( 'title' => 'Assess the Slope',           'desc' => 'We look at the slope angle, soil type, erosion areas, and how water is moving across the surface. This shapes what work may be needed.' ),
						array( 'title' => 'Check the Drainage',         'desc' => 'Where water goes on and around the slope affects how erosion develops. We look at existing drainage and where runoff is concentrating.' ),
						array( 'title' => 'Discuss the Options',        'desc' => 'After looking at the site, we can discuss what grading, drainage, or excavation work may help and what the work would involve.' ),
						array( 'title' => 'Plan Around the Property',   'desc' => 'Slope work needs to account for access, nearby structures, and what the property will be used for. We plan around the actual conditions on site.' ),
					),
				),

				array(
					'type'    => 'why',
					'heading' => 'Why Hire D&D Land Works for Slope Work?',
					'intro'   => 'When David looks at a slope problem, the goal is to understand what is causing the erosion or instability before deciding what excavation or grading work may help.',
					'items'   => array(
						array( 'title' => 'Licensed and Bonded in Oregon',      'desc' => 'D&D Land Works is licensed and bonded in Oregon under CCB #261742. You can verify the license through the Oregon Construction Contractors Board.' ),
						array( 'title' => 'Drainage Is Part of the Assessment', 'desc' => 'Slope erosion and drainage are often connected. We look at how water moves across the slope to understand whether drainage changes may be part of the solution.' ),
						array( 'title' => 'Grading and Excavation Experience',  'desc' => 'Slope stabilization may involve regrading, excavation, or both. We have experience with grading and excavation work on sloped properties throughout Lane County.' ),
						array( 'title' => 'Free Estimates in Lane County',      'desc' => 'We provide free estimates throughout Lane County. We can look at the slope, discuss what you are seeing, and explain what the work may involve.' ),
						array( 'title' => 'DEQ Septic Certification',           'desc' => 'D&D Land Works carries Oregon DEQ certification for septic work. When slope projects intersect with septic system areas, that experience can be relevant to planning the work.' ),
					),
				),

				array(
					'type'    => 'faq',
					'heading' => 'Frequently Asked Questions',
					'items'   => array(
						array(
							'q' => 'How do you stabilize a slope in Oregon?',
							'a' => 'Slope stabilization depends on the cause of the problem. It may involve regrading, improving drainage, adding retaining features, or addressing how water moves across the slope. We look at the site before recommending an approach.',
						),
						array(
							'q' => 'What causes slope erosion in the Eugene area?',
							'a' => 'Eugene and Lane County receive heavy rain through the wet season. Rain that runs off a slope can carry soil with it, especially on steeper grades or where vegetation has been removed. Soil type and how water is directed across the slope also play a role.',
						),
						array(
							'q' => 'Can grading help with slope erosion?',
							'a' => 'Regrading can help by changing the slope angle or redirecting how water flows across the surface. Whether grading is the right solution depends on the cause of the erosion and the condition of the ground.',
						),
						array(
							'q' => 'Do I need a permit for slope work in Lane County?',
							'a' => 'Permit requirements depend on the scope of the work, where the slope is located, and how much grading or soil disturbance is involved. Larger projects or work near waterways may require permits. Confirm requirements before work begins.',
						),
						array(
							'q' => 'How much does slope stabilization cost in Eugene?',
							'a' => 'Cost depends on the size of the slope, the cause of the problem, the ground conditions, and what work is needed. We can look at the property and provide a free estimate based on the actual site.',
						),
					),
				),

				array(
					'type'    => 'related',
					'heading' => 'Related Services',
					'items'   => array(
						array( 'title' => 'Grading & Leveling',    'desc' => 'Shaping land to the right slope for drainage and a level build pad.',                'href' => '/land-grading-services-eugene-or' ),
						array( 'title' => 'Drainage Installation', 'desc' => 'Excavation and grading to correct standing water and poor drainage.',               'href' => '/drainage-installation-eugene-or' ),
						array( 'title' => 'Land Clearing',         'desc' => 'Removing brush, trees, and debris to open usable land before site work begins.',    'href' => '/land-clearing-services-eugene-or' ),
						array( 'title' => 'Site Preparation',      'desc' => 'Clearing, grading, and compaction to ready a property for the next stage of work.', 'href' => '/site-preparation-contractor-eugene-or' ),
					),
				),

			),
		),

		/* ------------------------------------------------------------------ */
		/* 8. Site Preparation Contractor – Springfield, Oregon               */
		/* ------------------------------------------------------------------ */
		'site-preparation-contractor-springfield-or' => array(
			'hero' => array(
				'eyebrow'  => 'Springfield, Oregon',
				'title'    => 'Site Preparation Contractor in Springfield, Oregon',
				'subtitle' => 'Land clearing, grading, and compaction from one licensed, bonded contractor. Springfield\'s valley-floor soils and short dry season make the sequence matter more here than people expect.',
			),
			'sections' => array(

				array(
					'type'    => 'intro',
					'heading' => 'Site Prep for Springfield Lots, Done by the Same Crew That Scoped It',
					'body'    => '<p>D&amp;D Land Works provides site preparation for residential and commercial lots throughout Springfield and Lane County, Oregon, including new home builds, ADUs, commercial pads, and shop or barn pad construction. Site prep is the work that gets a raw or partially-cleared lot to a builder-ready state: brush removal and lot clearing, topsoil stripping and stockpiling, cut-and-fill grading to design elevation, subgrade compaction, corner staking, and rough drainage grading so water moves away from the structure&rsquo;s footprint.</p><p>Springfield-specific conditions shape how that work runs. The Willamette Valley&rsquo;s clay-heavy soils are slower to move and hold water differently than sandy loam, which affects both cost and timeline. Rural parcels east of Springfield and along the McKenzie River corridor require more upfront clearing before grading can start. The rainy season from October through May triggers stricter Lane County erosion-control permit requirements and limits dry-ground grading windows. D&amp;D Land Works is licensed and bonded under Oregon CCB #261742 and DEQ certified for septic work.</p>',
				),

				array(
					'type'    => 'intro',
					'heading' => 'What Does Site Preparation Include for a Springfield Lot?',
					'body'    => '<p>Site prep covers everything that happens before a foundation crew shows up: clearing the build envelope, stripping and stockpiling topsoil, cutting and filling to the design grade, compacting the subgrade, staking corners and elevations, and pitching the finished pad for drainage. The scope changes lot to lot, but the order is consistent.</p><p>In Springfield, the drainage grade is often the most critical step because many lots on the valley floor have high winter water tables and flat natural grades that don&rsquo;t naturally move water away from a structure. Getting that drainage pitch right during grading prevents costly foundation issues down the road.</p>',
				),

				array(
					'type'    => 'steps',
					'heading' => 'The Site Preparation Sequence for Springfield Lots',
					'intro'   => 'The scope changes lot to lot, but the sequence is consistent, from the initial site walk through the final drainage grade.',
					'items'   => array(
						array( 'title' => 'Utility locate (call 811)',       'desc' => 'Required before any digging. Oregon law requires calling 811 and waiting for all underground utilities to be marked before equipment breaks ground. Allow several business days.' ),
						array( 'title' => 'Site walk and survey',            'desc' => 'David walks the lot in person, establishes existing grades, drainage patterns, access constraints, and property lines before anything moves.' ),
						array( 'title' => 'Clear the build envelope',        'desc' => 'Brush, volunteer trees, blackberry, and debris come out of the build zone. On Springfield\'s wooded infill lots and rural parcels, this is often the most time-intensive phase.' ),
						array( 'title' => 'Install erosion controls',        'desc' => 'Silt fence, inlet protection, and other erosion controls go in before grading starts. Required by Lane County\'s EPSC permit and Oregon DEQ rules.' ),
						array( 'title' => 'Strip and stockpile topsoil',     'desc' => 'Topsoil is separated from subgrade material and stockpiled on-site, available for landscaping later.' ),
						array( 'title' => 'Cut and fill to grade',           'desc' => 'Material from high spots gets cut and moved into low spots to bring the pad to the design elevation.' ),
						array( 'title' => 'Compact the subgrade',            'desc' => 'The exposed subgrade gets proof rolled and compacted to the bearing density a foundation, slab, or driveway actually needs. Clay-heavy subgrades sometimes need undercutting and base rock before this step holds.' ),
						array( 'title' => 'Stake corners and elevations',    'desc' => 'Reference stakes go in so the foundation crew, surveyor, or county inspector can verify the pad matches the approved plan.' ),
						array( 'title' => 'Rough-grade for drainage',        'desc' => 'The pad gets a final pitch so water moves away from the structure. Springfield\'s flat valley floor and high winter water tables make this step load-bearing, not cosmetic.' ),
					),
				),

				array(
					'type'    => 'cards',
					'heading' => 'Why Springfield Soil and Season Affect Site Prep Cost and Timeline',
					'intro'   => 'Springfield-specific ground conditions and the Lane County wet season shape how site prep runs, how long it takes, and what it costs.',
					'items'   => array(
						array(
							'title' => 'Willamette Valley Clay Soils',
							'desc'  => 'Springfield sits on the Willamette Valley floor, where deep silty loam and clay soils deposited by Ice Age Missoula Floods create high winter water tables and slow drainage. These soils swell when wet and contract when dry, making compaction harder and sometimes requiring undercutting soft spots and replacing them with structural fill before a subgrade will compact properly. Springfield lots in low-lying areas can add 25\xe2\x80\x9350% to grading cost compared to a well-drained site.',
						),
						array(
							'title' => 'Oregon\'s Wet Season (Oct\xe2\x80\x93May)',
							'desc'  => 'Lane County\'s rainy season runs roughly October through May. Grading in heavy clay soil during wet weather is slower, harder on equipment, and requires tighter erosion-control measures under Lane County\'s EPSC permit requirements. Scheduling site prep for Springfield\'s dry season, roughly May through October, shortens the job window and typically reduces cost.',
						),
						array(
							'title' => 'East Springfield and Rural Parcels',
							'desc'  => 'Rural lots east of Springfield and into the Thurston and Jasper areas often have more tree cover and brush than valley-floor lots, requiring substantial clearing before grading can start. These lots frequently add time and cost that a flat, already-open lot wouldn\'t require. A site walk before quoting is how that scope gets priced accurately rather than estimated over the phone.',
						),
						array(
							'title' => 'Valley Floor Drainage Considerations',
							'desc'  => 'Flat lots on Springfield\'s valley floor have fewer clearing challenges but more drainage considerations. Poor lot-to-lot drainage and high water tables mean that grading for proper drainage away from a structure\'s footprint matters more, not less, on these sites. A drainage plan built into the grading scope from the start avoids the common problem of fixing drainage issues after a foundation is already in.',
						),
					),
				),

				array(
					'type'    => 'cards',
					'heading' => 'Do I Need a Permit for Site Prep in Springfield or Lane County?',
					'intro'   => 'There isn\'t one universal answer, but three specific permits are the ones to know about for Lane County grading and site-prep work.',
					'items'   => array(
						array(
							'title' => 'Lane County Grading and Fill Permit',
							'desc'  => 'Generally required when a project moves more than roughly 50 cubic yards of earth or creates a cut or fill slope steeper than approximately 2:1. Confirm the exact threshold with Lane County LMD (541-682-4651) or apply through the ePASS portal before assuming either way. Administered by: Lane County Land Management Division \xe2\x80\x93 3050 N. Delta Hwy, Eugene, OR 97408.',
						),
						array(
							'title' => 'Erosion Prevention and Sediment Control (EPSC) Permit',
							'desc'  => 'Lane County typically requires an EPSC permit for residential grading and soil disturbance, with Type I generally covering single-family scopes and Type II covering larger or more sensitive sites. Wet-season work (October through May) triggers additional erosion-control obligations. Administered by: Lane County Land Management Division.',
						),
						array(
							'title' => 'Oregon DEQ 1200-C Construction Stormwater Permit',
							'desc'  => 'Required when a project disturbs 1 or more acres, or is part of a common plan of development totaling 1+ acres even if your individual lot is smaller. Application fee: $1,515 plus a $1,558 first-year annual fee. Must be submitted at least 30 days before breaking ground. Projects over 5 acres require a 14-day public notice period. Administered by: Oregon DEQ \xe2\x80\x93 apply at oregon.gov/deq.',
						),
					),
				),

				array(
					'type'    => 'cards',
					'heading' => 'What Kind of Project Is This For?',
					'intro'   => 'Site preparation in Springfield covers more than new single-family home builds, even though that\'s the default most contractor websites describe.',
					'items'   => array(
						array( 'title' => 'New Home Build',                   'desc' => 'The most common call: a raw Springfield lot that needs to go from vegetation to a compacted, builder-ready pad.' ),
						array( 'title' => 'ADU (Accessory Dwelling Unit)',     'desc' => 'ADU construction in Springfield requires its own site-prep scope and its own permit questions, separate from the primary residence, worth sorting out before grading starts.' ),
						array( 'title' => 'Shop or Barn Pad',                 'desc' => 'Rural lots east of Springfield and along the McKenzie River corridor often need a level, compacted gravel pad before a metal building crew shows up.' ),
						array( 'title' => 'Subdivision or Multi-Lot Development','desc' => 'Multi-lot development triggers the DEQ 1200-C \'common plan of development\' rule even when individual lots are under an acre.' ),
						array( 'title' => 'Commercial Pad',                   'desc' => 'Commercial grading volumes are larger and more likely to cross both the Lane County permit threshold and the Oregon DEQ 1-acre mark.' ),
						array( 'title' => 'Lot Purchase \xe2\x80\x93 Pre-Construction Prep','desc' => 'Some buyers close on a lot and immediately schedule a site walk before a builder is selected, to understand what the clearing and grading scope will cost before finalizing a build budget.' ),
					),
				),

				array(
					'type'    => 'intro',
					'heading' => 'How Much Does Site Preparation Cost in Springfield, Oregon?',
					'body'    => '<p>There\'s no Springfield-specific published figure because scope, soil, and access vary too much lot to lot. The ranges below are general industry benchmarks, not a quote for your project.</p><ul><li><strong>Flat, cleared lot:</strong> $10,000&ndash;$20,000 &mdash; Easiest scenario: minimal clearing, good access, well-drained soil.</li><li><strong>Typical residential lot:</strong> $15,000&ndash;$35,000 &mdash; Standard scope with some clearing, cut-and-fill grading, and compaction.</li><li><strong>Wooded or sloped lot:</strong> $40,000&ndash;$70,000+ &mdash; Rural Springfield parcels, steep approaches, or heavy blackberry and tree cover.</li><li><strong>Land clearing (Oregon):</strong> $1,000&ndash;$40,000+ per acre &mdash; Light brush on the low end; old growth timber on the high end.</li><li><strong>Clay soil surcharge:</strong> +25&ndash;50% above baseline &mdash; Willamette Valley clay subgrades are slower to work and may need undercutting and base rock.</li></ul><p>A free on-site estimate is the only accurate way to price a specific Springfield lot.</p>',
				),

				array(
					'type'    => 'intro',
					'heading' => 'Site Prep Timing and Septic Systems on Springfield-Area Lots',
					'body'    => '<p>Many lots east of Springfield &mdash; places like Thurston, Jasper, and rural unincorporated Lane County &mdash; rely on on-site septic rather than municipal sewer. On those lots, sequencing matters more than people expect: once a drainfield location has been proposed or approved through a Lane County test-pit evaluation, that area can\'t be cut, filled, compacted, or paved without voiding the county\'s septic approval.</p><p>That means the drainfield area needs to be evaluated, approved, and flagged before site-prep grading starts on the rest of the lot, not after. D&amp;D Land Works is DEQ certified for septic install and repair, so the same contractor who preps the site can also handle the septic work, and the sequencing between the two scopes doesn\'t require coordinating a second company. If your Lane County lot needs both, confirm with your septic evaluator or Lane County\'s On-Site Wastewater Program that the drainfield is staked before grading equipment moves near it.</p>',
				),

				array(
					'type'    => 'intro',
					'heading' => 'Why Springfield Homeowners and Builders Choose D&D Land Works for Site Prep',
					'body'    => '<p>D&amp;D Land Works is licensed and bonded under Oregon CCB #261742 and DEQ certified for septic install and repair &mdash; credentials you can verify yourself at the CCB license lookup before you call. David Deggelman owns the company, walks every site in person before quoting, and runs the equipment, so the person who scopes the job is the one who shows up to do it. No subcontracted crew, no call-center handoff, no estimate built from satellite imagery instead of boots on the ground.</p><p>Springfield\'s grading season, soil conditions, and permit requirements are ones David works with all the time, not a regional generality. If you\'re in Thurston, Hayden Bridge, east Springfield, or anywhere else in Lane County and need a construction-ready lot, contact D&amp;D Land Works for your free, on-site estimate.</p>',
				),

				array(
					'type'    => 'faq',
					'heading' => 'Frequently Asked Questions',
					'items'   => array(
						array(
							'q' => 'What does a site preparation contractor actually do in Springfield?',
							'a' => 'Site prep is the work that turns a raw or partially-cleared lot into a pad a foundation crew can actually build on. The 9-step sequence for Lane County lots: (1) call 811 for utility locates, (2) site walk and survey, (3) clear brush and trees, (4) install erosion controls, (5) strip and stockpile topsoil, (6) cut and fill to grade, (7) compact and proof-roll the subgrade, (8) stake corners and elevations, (9) rough-grade for drainage. In Springfield, the drainage grade gets particular attention because the flat valley floor and Willamette Valley soils hold water in ways sandy loam does not.',
						),
						array(
							'q' => 'How much does site preparation cost in Springfield, Oregon?',
							'a' => 'Cost ranges in the Springfield area: flat, already-cleared lots typically run $10,000\xe2\x80\x93$20,000; a standard residential build lot runs $15,000\xe2\x80\x93$35,000; wooded or rural lots frequently run $40,000\xe2\x80\x93$70,000 or more. Land clearing alone in Oregon ranges from $1,000\xe2\x80\x93$5,000 per acre for light brush up to $10,000\xe2\x80\x93$40,000+ per acre for heavily forested ground. Clay-heavy soils can add 25\xe2\x80\x9350% to grading cost compared to a well-drained site. A free on-site estimate is the only accurate number for your specific lot.',
						),
						array(
							'q' => 'Do I need a permit for site prep in Springfield or Lane County?',
							'a' => 'Almost certainly yes, depending on scope. Lane County\'s Grading and Fill Permit is generally required when a project moves roughly 50+ cubic yards of earth or creates cut/fill slopes steeper than about 2:1. An Erosion Prevention and Sediment Control (EPSC) permit is typically required for residential grading work. Oregon DEQ\'s 1200-C stormwater permit is required when a project disturbs 1 acre or more \xe2\x80\x93 the application fee is $1,515 plus a $1,558 first-year annual fee, and it must be submitted at least 30 days before breaking ground. Projects within Springfield city limits may also need City of Springfield Development & Public Works approval separately from Lane County. Contact Lane County LMD at 541-682-4651 or apply through the ePASS portal to confirm what applies to your project.',
						),
						array(
							'q' => 'When is the best time to do site prep in the Springfield area?',
							'a' => 'May through October is the optimal window. Lane County\'s wet season runs roughly October through May, during which Willamette Valley clay saturates quickly and becomes slow and expensive to work. Wet-season grading is possible but requires tighter erosion controls, moves more slowly, and carries a higher risk of soft-ground delays. Scheduling for the dry season typically shortens the job and lowers cost. If your timeline puts site prep in winter, factor in extra schedule and erosion-control budget.',
						),
						array(
							'q' => 'Do you handle site prep for ADUs in Springfield?',
							'a' => 'Yes. ADU (accessory dwelling unit) construction in Springfield has its own site prep scope and its own permit track \xe2\x80\x93 the ADU grading plan is separate from the primary residence, and the Lane County or City of Springfield permit thresholds apply to the ADU construction footprint independently. If you\'re building a backyard ADU or a detached garage conversion in Springfield, the site prep question is worth asking early, before design is finalized, since the pad location, driveway access, and any septic implications all affect the grading scope.',
						),
						array(
							'q' => 'Should I get site prep done before or after hiring a builder?',
							'a' => 'Site work typically starts once a builder is hired and the design and permitting process is already underway \xe2\x80\x93 the grading plan, foundation type, septic layout, and driveway alignment all shape what site prep needs to accomplish. That said, a lot owner in Springfield can schedule a free site walk from a contractor before selecting a builder to understand the rough clearing and grading scope for budgeting purposes.',
						),
						array(
							'q' => 'Does the septic system placement affect when site prep can start?',
							'a' => 'Yes, and this is one of the most common sequencing mistakes on rural Springfield-area lots. Lane County\'s On-Site Wastewater Program requires that a proposed drainfield area be evaluated and approved before any grading disturbs it. Cutting, filling, compacting, or paving over an approved drainfield area can void the county\'s septic approval outright. If your lot needs a septic system, confirm the drainfield is staked and approved before site-prep grading moves near it.',
						),
						array(
							'q' => 'What areas of Springfield does D&D Land Works serve for site prep?',
							'a' => 'D&D Land Works serves Springfield and the surrounding Lane County area, including Thurston, Hayden Bridge, Jasper, and east Springfield, as well as Eugene, Cottage Grove, Junction City, Creswell, Veneta, Florence, Oakridge, Coburg, and Lowell. Call 541-401-8726 to confirm coverage for a specific address.',
						),
					),
				),

				array(
					'type'    => 'related',
					'heading' => 'Related Services',
					'items'   => array(
						array( 'title' => 'Land Clearing',        'desc' => 'Removing brush, trees, and debris to open usable land before site work begins.',      'href' => '/land-clearing-services-eugene-or' ),
						array( 'title' => 'Grading & Leveling',   'desc' => 'Shaping land to the right slope for drainage and a level build pad.',                 'href' => '/land-grading-services-eugene-or' ),
						array( 'title' => 'Foundation Excavation','desc' => 'Digging and leveling for footings, crawl spaces, and foundations.',                   'href' => '/foundation-excavation-eugene-or' ),
						array( 'title' => 'Drainage Excavation',  'desc' => 'Excavation and grading to correct standing water and poor drainage.',                 'href' => '/drainage-installation-eugene-or' ),
					),
				),

			),
		),

	);

	return $pages[ $slug ] ?? null;
}
