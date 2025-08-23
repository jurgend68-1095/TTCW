<?php
/**
 * Defaults for Theme Customizer repeater.
 *
 * @package avantex
 */

$data_current_avantex_theme = wp_get_theme();
$name_current_avantex_theme = $data_current_avantex_theme->name;


if ( $name_current_avantex_theme == 'Avantex Construction' ) {
	/** SLIDER CUSTOMIZER REPEATER DEFAULT VALUES */
	define(
		'SLIDER_DEFAULTS',
		wp_json_encode(
			array(
				/*Repeater's first item*/
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/slider/cons-slide1.jpg',
					'title'     => 'Construction',
					'subtitle'  => 'Workshop',
					'text'      => 'Looking for a quality work for your next project?',
					'btntitle'  => 'Explore',
					'link'      => '#',
					'id'        => 'cr_slider_cons_slide_2',
				), // every item in default string should have an unique id, it helps for translation.
			/*Repeater's second item*/
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/slider/cons-slide2.jpg',
					'title'     => 'Construction',
					'subtitle'  => 'Building at Its Best',
					'text'      => 'Looking for a quality work for your next project?',
					'btntitle'  => 'Explore',
					'link'      => '#',
					'id'        => 'cr_slider_cons_slide_1',
				),
			)
		)
	);
	/** ABOUT DEFAULT VARIABLES */
	define( 'ABOUT_IMAGE', AVANTEX_COMPANION_PLUGIN_URL . 'inc/avantex/img/cons-about.jpg' );
	define( 'ABOUT_TITLE_TAG', 'Welcome to Avantex Construction' );
	define( 'ABOUT_TITLE', 'Company History' );
	define(
		'ABOUT_TEXT',
		'<p class="has-black-color has-text-color"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at accumsan metus viverra. Integer neque lectus, pellentesque sitesit au dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at accumsan metus viverra. Integer neque lectus, pellentesque sitesit au dolor. </p>
		<p class="has-black-color has-text-color"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at accumsan metus viverra. Integer neque lectus, pellentesque sitesit au dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at accumsan metus viverra. Integer neque lectus, pellentesque sitesit au dolor. </p>
		<p class="has-black-color has-text-color"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at accumsan metus viverra. Integer neque lectus, pellentesque sitesit au dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at accumsan metus viverra. Integer neque lectus, pellentesque sitesit au dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at accumsan metus viverra. Integer neque lectus, pellentesque sitesit au dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at accumsan metus viverra. Integer neque lectus, pellentesque sitesit au dolor.</p>'
	);
	/** SERVICES CUSTOMIZER REPEATER DEFAULT VALUES */
	define(
		'SERVICES_DEFAULTS',
		wp_json_encode(
			array(
				/*Repeater's first Service*/
				array(
					'choice'     => 'customizer_repeater_image',
					'icon_value' => 'fas fa-square-poll-vertical',
					'image_url'  => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/service/service-construction-3.jpg',
					'title'      => 'Constructions',
					'subtitle'   => 'Lorem ipsum dolor sit amet consectetur elit adipiscing praesent pellentesque varius ligula sit eleifend diam cursus nec.',
					'btntitle'   => 'Read More',
					'link'       => '#',
					'id'         => 'cr_serv_cons_1',
				), // every Service in default string should have an unique id, it helps for translation.
				/*Repeater's second Service*/
				array(
					'choice'     => 'customizer_repeater_image',
					'icon_value' => 'fas fa-file-code',
					'image_url'  => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/service/service-construction-2.jpg',
					'title'      => 'Interior Design',
					'subtitle'   => 'Lorem ipsum dolor sit amet consectetur elit adipiscing praesent pellentesque varius ligula sit eleifend diam cursus nec.',
					'btntitle'   => 'Read More',
					'link'       => '#',
					'id'         => 'cr_serv_cons_2',
				),
				/*Repeater's Third Service*/
				array(
					'choice'     => 'customizer_repeater_image',
					'icon_value' => 'fas fa-window-restore',
					'image_url'  => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/service/service-construction-1.jpg',
					'title'      => 'Renovation',
					'subtitle'   => 'Lorem ipsum dolor sit amet consectetur elit adipiscing praesent pellentesque varius ligula sit eleifend diam cursus nec.',
					'btntitle'   => 'Read More',
					'link'       => '#',
					'id'         => 'cr_serv_cons_3',
				),
			)
		)
	);
	/** PORTFOLIO_DEFAULTS CUSTOMIZER REPEATER DEFAULT VALUES */
	define(
		'PORTFOLIO_DEFAULTS',
		wp_json_encode(
			array(
				/* Repeater's first portfolio */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/portfolio/portfolio-construction-1.jpg',
					'title'     => '',
					'subtitle'  => 'GLOSS CREAM',
					'link'      => '#',
					'link2'     => '#',
					'id'        => 'cr_portfolio_cons_1',
				), // every portfolio in default string should have an unique id, it helps for translation.
			/* Repeater's second portfolio */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/portfolio/portfolio-construction-2.jpg',
					'title'     => '',
					'subtitle'  => 'SHAKER CLASSIC',
					'link'      => '#',
					'link2'     => '#',
					'id'        => 'cr_portfolio_cons_2',
				),
				/* Repeater's Third portfolio */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/portfolio/portfolio-construction-3.jpg',
					'title'     => '',
					'subtitle'  => 'SAVANAH WALNUT',
					'link'      => '#',
					'link2'     => '#',
					'id'        => 'cr_portfolio_cons_3',
				),
			)
		)
	);
	/** TEAM_DEFAULTS CUSTOMIZER REPEATER DEFAULT VALUES */

	define(
		'TEAM_SR_DEFAULTS',
		'[{&quot;icon&quot;:&quot;fa-brands fa-facebook&quot;,&quot;link&quot;:&quot;#&quot;,&quot;id&quot;:&quot;customizer-repeater-social-repeater-6317390b67c40&quot;},{&quot;icon&quot;:&quot;fa-brands fa-twitter&quot;,&quot;link&quot;:&quot;#&quot;,&quot;id&quot;:&quot;customizer-repeater-social-repeater-63173a9132e14&quot;},{&quot;icon&quot;:&quot;fa-brands fa-linkedin-in&quot;,&quot;link&quot;:&quot;#&quot;,&quot;id&quot;:&quot;customizer-repeater-social-repeater-6317422a80a22&quot;},{&quot;icon&quot;:&quot;fa-brands fa-instagram&quot;,&quot;link&quot;:&quot;#&quot;,&quot;id&quot;:&quot;customizer-repeater-social-repeater-6317422a80a22&quot;}]'
	);

	define(
		'TEAM_DEFAULTS',
		wp_json_encode(
			array(
				/* Repeater's first team */
				array(
					'image_url'       => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/team/team-construction-1.jpg',
					'title'           => 'Project Manager',
					'subtitle'        => 'George Big',
					'social_repeater' => TEAM_SR_DEFAULTS,
					'id'              => 'cr_team_cons_1',
				), // every team in default string should have an unique id, it helps for translation.
			/* Repeater's second team */
				array(
					'image_url'       => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/team/team-construction-2.jpg',
					'title'           => 'Quality Manager',
					'subtitle'        => 'John Doe',
					'social_repeater' => TEAM_SR_DEFAULTS,
					'id'              => 'cr_team_cons_2',
				),
				/* Repeater's Third team */
				array(
					'image_url'       => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/team/team-construction-3.jpg',
					'title'           => 'CEO',
					'subtitle'        => 'Steve Boss',
					'social_repeater' => TEAM_SR_DEFAULTS,
					'id'              => 'cr_team_cons_3',
				),
				/* Repeater's fourth team */
				array(
					'image_url'       => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/team/team-construction-4.jpg',
					'title'           => 'Sales',
					'subtitle'        => 'Paul Sold',
					'social_repeater' => TEAM_SR_DEFAULTS,
					'id'              => 'cr_team_cons_4',
				),
			)
		)
	);
	/** TESTIMONIAL DEFAULTS FOR CUSTOMIZER REPEATER */
	define(
		'TESTIMONIAL_DEFAULTS',
		wp_json_encode(
			array(
				/* Repeater's first Testimonial */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/testimonial/author-1.jpg',
					'title'     => 'Creative & Professional',
					'subtitle'  => 'It is a long established fact that a reader ill be distracted by the readable content of a page when looking at its layout.',
					'btntitle'  => 'Annah Montana',
					'shortcode' => 'Ceo xyz',
					'id'        => 'cr_Testimonial_cons_1',
				), // every Testimonial in default string should have an unique id, it helps for translation.
			/* Repeater's second Testimonial */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/testimonial/author-2.jpg',
					'title'     => 'I highly recommend',
					'subtitle'  => 'It is a long established fact that a reader ill be distracted by the readable content of a page when looking at its layout.',
					'btntitle'  => 'Jenifer Albert',
					'shortcode' => 'Founder abc firm ',
					'id'        => 'cr_Testimonial_cons_2',
				),
				/* Repeater's third Testimonial */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/testimonial/author-2.jpg',
					'title'     => 'Must consult',
					'subtitle'  => 'It is a long established fact that a reader ill be distracted by the readable content of a page when looking at its layout.',
					'btntitle'  => 'Sonya Smith',
					'shortcode' => 'Founder',
					'id'        => 'cr_Testimonial_cons_3',
				),
			)
		)
	);
	/** FUNFACT_DEFAULTS DEFAULTS FOR CUSTOMIZER REPEATER */
	define(
		'FUNFACT_DEFAULTS',
		wp_json_encode(
			array(
				/* Repeater's first Funfact */
				array(
					'icon_value' => 'fa-regular fa-circle',
					'title'      => 'Satisfied Customers',
					'subtitle'   => '965',
					'id'         => 'cr_Funfact_cons_1',
				), // every Funfact in default string should have an unique id, it helps for translation.
			/* Repeater's second Funfact */
				array(
					'icon_value' => 'fas fa-duotone fa-diagram-project',
					'title'      => 'Project Planning',
					'subtitle'   => '365',
					'id'         => 'cr_Funfact_cons_2',
				),
				/* Repeater's third Funfact */
				array(
					'icon_value' => 'fa-regular fa-object-group',
					'title'      => 'Interior Design',
					'subtitle'   => '450',
					'id'         => 'cr_Funfact_cons_3',
				),
				/** Repeater's fourth funfact */
				array(
					'icon_value' => 'fa fa-beer-mug-empty',
					'title'      => 'Cups of Coffee',
					'subtitle'   => '585',
					'id'         => 'cr_Funfact_cons_3',
				),
			)
		)
	);
	/** SPONSORS_DEFAULT DEFAULTS FOR CUSTOMIZER REPEATER */
	define(
		'SPONSORS_DEFAULT',
		wp_json_encode(
			array(
				/* Repeater's first sponsors */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/clients/client-construction-1.png',
					'title'     => 'Qatar',
					'link'      => '#',
					'id'        => 'cr_sponsors_1',
				), // every sponsors in default string should have an unique id, it helps for translation.
			/* Repeater's second sponsors */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/clients/client-construction-2.png',
					'title'     => 'Car Sport',
					'link'      => '#',
					'id'        => 'cr_sponsors_2',
				),
				/* Repeater's Third sponsors */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/clients/client-construction-3.png',
					'title'     => 'Genshin',
					'link'      => '#',
					'id'        => 'cr_sponsors_3',
				),
			)
		)
	);
	// DEFAULT THEME DATA PARENT.
} elseif ( $name_current_avantex_theme == 'Avantex Automobile' ) {
	/** AUTOMOBILE : SLIDER CUSTOMIZER REPEATER DEFAULT VALUES */
	define(
		'SLIDER_DEFAULTS',
		wp_json_encode(
			array(
				/*Repeater's first item*/
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/slider/auto-slide1.png',
					'title'     => 'Welcome to powerful theme',
					'subtitle'  => 'The Avantex Creative Business',
					'text'      => 'Take Your Business To New Heights & Build The Business Of Your Dreams',
					'btntitle'  => 'Discover More',
					'link'      => '#',
					'id'        => 'cr_slider_auto_slide_1',
				), // every item in default string should have an unique id, it helps for translation.
			/*Repeater's second item*/
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/slider/auto-slide2.png',
					'title'     => 'The Avantex Creative Business',
					'subtitle'  => 'AI Automotive Industry',
					'text'      => 'Stay ahead of the game with the newest cars on the market. ',
					'btntitle'  => 'Discover More',
					'link'      => '#',
					'id'        => 'cr_slider_auto_slide_2',
				),
			)
		)
	);
	/** AUTOMOBILE : ABOUT DEFAULT VARIABLES */
	define( 'ABOUT_IMAGE', AVANTEX_COMPANION_PLUGIN_URL . 'inc/avantex/img/auto-about.png' );
	define( 'ABOUT_TITLE_TAG', 'About Us' );
	define( 'ABOUT_TITLE', 'SMART CAR DRIVING TECHNOLOGY' );
	define(
		'ABOUT_TEXT',
		'<p class="has-black-color has-text-color"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at accumsan metus viverra. Integer neque lectus, pellentesque sitesit au dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at accumsan metus viverra. Integer neque lectus, pellentesque sitesit au dolor. </p>
		<p class="has-black-color has-text-color"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at accumsan metus viverra. Integer neque lectus, pellentesque sitesit au dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at accumsan metus viverra. Integer neque lectus, pellentesque sitesit au dolor. </p>'
	);
	/** AUTOMOBILE : SERVICES CUSTOMIZER REPEATER DEFAULT VALUES */
	define(
		'SERVICES_DEFAULTS',
		wp_json_encode(
			array(
				/*Repeater's first Service*/
				array(
					'choice'     => 'customizer_repeater_image',
					'icon_value' => 'fas fa-square-poll-vertical',
					'image_url'  => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/service/service-auto1.jpg',
					'title'      => 'Mod',
					'subtitle'   => 'Lorem ipsum dolor sit amet consectetur elit.',
					'btntitle'   => 'Read More',
					'link'       => '#',
					'id'         => 'cr_serv_auto_1',
				), // every Service in default string should have an unique id, it helps for translation.
				/*Repeater's second Service*/
				array(
					'choice'     => 'customizer_repeater_image',
					'icon_value' => 'fas fa-file-code',
					'image_url'  => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/service/service-auto2.jpg',
					'title'      => 'Design',
					'subtitle'   => 'Lorem ipsum dolor sit amet consectetur elit.',
					'btntitle'   => 'Read More',
					'link'       => '#',
					'id'         => 'cr_serv_auto_2',
				),
				/*Repeater's Third Service*/
				array(
					'choice'     => 'customizer_repeater_image',
					'icon_value' => 'fas fa-window-restore',
					'image_url'  => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/service/service-auto3.jpg',
					'title'      => 'Renovate',
					'subtitle'   => 'Lorem ipsum dolor sit amet consectetur elit.',
					'btntitle'   => 'Read More',
					'link'       => '#',
					'id'         => 'cr_serv_auto_3',
				),
			)
		)
	);
	/** AUTOMOBILE : PORTFOLIO_DEFAULTS CUSTOMIZER REPEATER DEFAULT VALUES */
	define(
		'PORTFOLIO_DEFAULTS',
		wp_json_encode(
			array(
				/* Repeater's first portfolio */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/portfolio/portfolio-auto1.jpg',
					'title'     => 'Factory',
					'subtitle'  => 'Refining OIL',
					'link'      => '#',
					'link2'     => '#',
					'id'        => 'cr_portfolio_auto_1',
				), // every portfolio in default string should have an unique id, it helps for translation.
			/* Repeater's second portfolio */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/portfolio/portfolio-auto2.jpg',
					'title'     => 'Chemical',
					'subtitle'  => 'Rock Material',
					'link'      => '#',
					'link2'     => '#',
					'id'        => 'cr_portfolio_auto_2',
				),
				/* Repeater's Third portfolio */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/portfolio/portfolio-auto3.jpg',
					'title'     => 'Construction Machinery',
					'subtitle'  => 'Rock Mechenics',
					'link'      => '#',
					'link2'     => '#',
					'id'        => 'cr_portfolio_auto_3',
				),
			)
		)
	);
	/** AUTOMOBILE : TEAM_DEFAULTS CUSTOMIZER REPEATER DEFAULT VALUES */

	define(
		'TEAM_SR_DEFAULTS',
		'[{&quot;icon&quot;:&quot;fa-brands fa-facebook&quot;,&quot;link&quot;:&quot;#&quot;,&quot;id&quot;:&quot;customizer-repeater-social-repeater-6317390b67c40&quot;},{&quot;icon&quot;:&quot;fa-brands fa-twitter&quot;,&quot;link&quot;:&quot;#&quot;,&quot;id&quot;:&quot;customizer-repeater-social-repeater-63173a9132e14&quot;},{&quot;icon&quot;:&quot;fa-brands fa-linkedin-in&quot;,&quot;link&quot;:&quot;#&quot;,&quot;id&quot;:&quot;customizer-repeater-social-repeater-6317422a80a22&quot;},{&quot;icon&quot;:&quot;fa-brands fa-instagram&quot;,&quot;link&quot;:&quot;#&quot;,&quot;id&quot;:&quot;customizer-repeater-social-repeater-6317422a80a22&quot;}]'
	);

	define(
		'TEAM_DEFAULTS',
		wp_json_encode(
			array(
				/* Repeater's first team */
				array(
					'image_url'       => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/team/team-auto-1.jpg',
					'title'           => 'Business Analysis',
					'subtitle'        => 'Rene B.CRUZ',
					'social_repeater' => TEAM_SR_DEFAULTS,
					'id'              => 'cr_team_auto_1',
				), // every team in default string should have an unique id, it helps for translation.
			/* Repeater's second team */
				array(
					'image_url'       => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/team/team-auto-2.jpg',
					'title'           => 'Creative Expert',
					'subtitle'        => 'LILI ALBERT',
					'social_repeater' => TEAM_SR_DEFAULTS,
					'id'              => 'cr_team_auto_2',
				),
				/* Repeater's Third team */
				array(
					'image_url'       => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/team/team-auto-3.jpg',
					'title'           => 'UI Developper',
					'subtitle'        => 'Olivia Travis',
					'social_repeater' => TEAM_SR_DEFAULTS,
					'id'              => 'cr_team_auto_3',
				),
				/* Repeater's fourth team */
				array(
					'image_url'       => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/team/team-auto-4.jpg',
					'title'           => 'Designer',
					'subtitle'        => 'Bela Alaxander',
					'social_repeater' => TEAM_SR_DEFAULTS,
					'id'              => 'cr_team_auto_4',
				),
			)
		)
	);
	/** AUTOMOBILE : TESTIMONIAL DEFAULTS FOR CUSTOMIZER REPEATER */
	define(
		'TESTIMONIAL_DEFAULTS',
		wp_json_encode(
			array(
				/* Repeater's first Testimonial */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/testimonial/author-1.jpg',
					'title'     => 'Creative & Professional',
					'subtitle'  => 'It is a long established fact that a reader ill be distracted by the readable content of a page when looking at its layout.',
					'btntitle'  => 'Annah Montana',
					'shortcode' => 'Ceo xyz',
					'id'        => 'cr_Testimonial_auto_1',
				), // every Testimonial in default string should have an unique id, it helps for translation.
			/* Repeater's second Testimonial */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/testimonial/author-2.jpg',
					'title'     => 'I highly recommend',
					'subtitle'  => 'It is a long established fact that a reader ill be distracted by the readable content of a page when looking at its layout.',
					'btntitle'  => 'Jenifer Albert',
					'shortcode' => 'Founder abc firm ',
					'id'        => 'cr_Testimonial_auto_2',
				),
				/* Repeater's third Testimonial */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/testimonial/author-2.jpg',
					'title'     => 'Must consult',
					'subtitle'  => 'It is a long established fact that a reader ill be distracted by the readable content of a page when looking at its layout.',
					'btntitle'  => 'Sonya Smith',
					'shortcode' => 'Founder',
					'id'        => 'cr_Testimonial_auto_3',
				),
			)
		)
	);
	/**AUTOMOBILE : FUNFACT_DEFAULTS DEFAULTS FOR CUSTOMIZER REPEATER */
	define(
		'FUNFACT_DEFAULTS',
		wp_json_encode(
			array(
				/* Repeater's first Funfact */
				array(
					'icon_value' => 'fas fa-thin fa-bolt',
					'title'      => 'Automotive',
					'subtitle'   => '1530',
					'id'         => 'cr_Funfact_auto_1',
				), // every Funfact in default string should have an unique id, it helps for translation.
			/* Repeater's second Funfact */
				array(
					'icon_value' => 'fas fa-thin fa-location-dot',
					'title'      => 'GPS Tracking',
					'subtitle'   => '365',
					'id'         => 'cr_Funfact_auto_2',
				),
				/* Repeater's third Funfact */
				array(
					'icon_value' => 'fas fa-thin fa-language',
					'title'      => 'Languages',
					'subtitle'   => '20',
					'id'         => 'cr_Funfact_auto_3',
				),
				/** Repeater's fourth funfact */
				array(
					'icon_value' => 'fas fa-thin fa-mobile-screen-button',
					'title'      => 'Mobile App',
					'subtitle'   => '1120',
					'id'         => 'cr_Funfact_auto_3',
				),
			)
		)
	);
	/** AUTOMOBILE : SPONSORS_DEFAULT DEFAULTS FOR CUSTOMIZER REPEATER  */
	define(
		'SPONSORS_DEFAULT',
		wp_json_encode(
			array(
				/* Repeater's first sponsors */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/clients/client-auto1.png',
					'title'     => 'BMW',
					'link'      => '#',
					'id'        => 'cr_sponsors_1',
				), // every sponsors in default string should have an unique id, it helps for translation.
			/* Repeater's second sponsors */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/clients/client-auto2.png',
					'title'     => 'SKODA',
					'link'      => '#',
					'id'        => 'cr_sponsors_2',
				),
				/* Repeater's Third sponsors */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/clients/client-auto3.png',
					'title'     => 'MG',
					'link'      => '#',
					'id'        => 'cr_sponsors_3',
				),
				/* Repeater's Fourth sponsors */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/clients/client-auto4.png',
					'title'     => 'VW',
					'link'      => '#',
					'id'        => 'cr_sponsors_4',
				),
			)
		)
	);
	// DEFAULT THEME DATA AUTOMOBILE.
} elseif ( $name_current_avantex_theme == 'Avantex Education' ) {
	/** Education : SLIDER CUSTOMIZER REPEATER DEFAULT VALUES */
	define(
		'SLIDER_DEFAULTS',
		wp_json_encode(
			array(
				/*Repeater's first item*/
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/slider/edu-slide1.jpg',
					'title'     => 'Education is the',
					'subtitle'  => 'Foundation for a better tomorrow',
					'text'      => '',
					'btntitle'  => 'Learn More',
					'link'      => '#',
					'id'        => 'cr_slider_slide_1',
				), // every item in default string should have an unique id, it helps for translation.
			)
		)
	);
	/** Education : ABOUT DEFAULT VARIABLES */
	define( 'ABOUT_IMAGE', AVANTEX_COMPANION_PLUGIN_URL . 'inc/avantex/img/edu-about.jpg' );
	define( 'ABOUT_TITLE_TAG', '19 Years Experience' );
	define( 'ABOUT_TITLE', 'JANE HERBERT' );
	define(
		'ABOUT_TEXT',
		'<p>Whether you work in machine learning or finance or are pursuing a career in web development or data science, Python is one of the most important skills you can learn. <strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>'
	);
	/** EDUCATION : SERVICES CUSTOMIZER REPEATER DEFAULT VALUES */
	define(
		'SERVICES_DEFAULTS',
		wp_json_encode(
			array(
				/*Repeater's first Service*/
				array(
					'choice'     => 'customizer_repeater_icon',
					'icon_value' => '',
					'image_url'  => '',
					'title'      => 'Latest Skills',
					'subtitle'   => 'Create your free account now and get immediate access to 100s of courses.',
					'btntitle'   => 'Read More',
					'link'       => '#',
					'id'         => 'cr_serv_edu_1',
				), // every Service in default string should have an unique id, it helps for translation.
				/*Repeater's second Service*/
				array(
					'choice'     => 'customizer_repeater_icon',
					'icon_value' => '',
					'image_url'  => '',
					'title'      => 'Learn Online',
					'subtitle'   => 'Create your free account now and get immediate access to 100s of courses.',
					'btntitle'   => 'Read More',
					'link'       => '#',
					'id'         => 'cr_serv_edu_2',
				),
				/*Repeater's Third Service*/
				array(
					'choice'     => 'customizer_repeater_icon',
					'icon_value' => '',
					'image_url'  => '',
					'title'      => 'Industry Experts',
					'subtitle'   => 'Create your free account now and get immediate access to 100s of courses.',
					'btntitle'   => 'Read More',
					'link'       => '#',
					'id'         => 'cr_serv_edu_3',
				),
			)
		)
	);
	/** Education : PORTFOLIO_DEFAULTS CUSTOMIZER REPEATER DEFAULT VALUES */
	define(
		'PORTFOLIO_DEFAULTS',
		wp_json_encode(
			array(
				/* Repeater's first portfolio */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/portfolio/portfolio-edu1.jpg',
					'title'     => 'The Magic Number ',
					'subtitle'  => 'Business Course',
					'link'      => '#',
					'link2'     => '#',
					'id'        => 'cr_portfolio_edu_1',
				), // every portfolio in default string should have an unique id, it helps for translation.
				/* Repeater's second portfolio */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/portfolio/portfolio-edu2.jpg',
					'title'     => 'E-commerce Course',
					'subtitle'  => 'E-commerce',
					'link'      => '#',
					'link2'     => '#',
					'id'        => 'cr_portfolio_edu_2',
				),
				/* Repeater's Third portfolio */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/portfolio/portfolio-edu3.jpg',
					'title'     => 'Blog Content course',
					'subtitle'  => 'Web Creation',
					'link'      => '#',
					'link2'     => '#',
					'id'        => 'cr_portfolio_edu_3',
				),
				/* Repeater's Fourth portfolio */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/portfolio/portfolio-edu4.jpg',
					'title'     => 'Optimization of Content site',
					'subtitle'  => 'Content Service',
					'link'      => '#',
					'link2'     => '#',
					'id'        => 'cr_portfolio_edu_4',
				),
			)
		)
	);
	/** Education : TEAM_DEFAULTS CUSTOMIZER REPEATER DEFAULT VALUES */
	define(
		'TEAM_SR_DEFAULTS',
		'[{&quot;icon&quot;:&quot;fa-brands fa-facebook&quot;,&quot;link&quot;:&quot;#&quot;,&quot;id&quot;:&quot;customizer-repeater-social-repeater-6317390b67c40&quot;},{&quot;icon&quot;:&quot;fa-brands fa-twitter&quot;,&quot;link&quot;:&quot;#&quot;,&quot;id&quot;:&quot;customizer-repeater-social-repeater-63173a9132e14&quot;},{&quot;icon&quot;:&quot;fa-brands fa-linkedin-in&quot;,&quot;link&quot;:&quot;#&quot;,&quot;id&quot;:&quot;customizer-repeater-social-repeater-6317422a80a22&quot;},{&quot;icon&quot;:&quot;fa-brands fa-instagram&quot;,&quot;link&quot;:&quot;#&quot;,&quot;id&quot;:&quot;customizer-repeater-social-repeater-6317422a80a22&quot;}]'
	);
	define(
		'TEAM_DEFAULTS',
		wp_json_encode(
			array(
				/* Repeater's first team */
				array(
					'image_url'       => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/team/team-edu-1.jpg',
					'title'           => 'Teacher',
					'subtitle'        => 'Thorsten Sträter',
					'social_repeater' => TEAM_SR_DEFAULTS,
					'id'              => 'cr_team_edu_1',
				), // every team in default string should have an unique id, it helps for translation.
			/* Repeater's second team */
				array(
					'image_url'       => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/team/team-edu-2.jpg',
					'title'           => 'Teacher',
					'subtitle'        => 'Susanne Herbst',
					'social_repeater' => TEAM_SR_DEFAULTS,
					'id'              => 'cr_team_edu_2',
				),
				/* Repeater's Third team */
				array(
					'image_url'       => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/team/team-edu-3.jpg',
					'title'           => 'Teacher',
					'subtitle'        => 'Jane Herbert',
					'social_repeater' => TEAM_SR_DEFAULTS,
					'id'              => 'cr_team_edu_3',
				),
				/* Repeater's fourth team */
				array(
					'image_url'       => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/team/team-edu-4.jpg',
					'title'           => 'Teacher',
					'subtitle'        => 'Ben Worthy',
					'social_repeater' => TEAM_SR_DEFAULTS,
					'id'              => 'cr_team_edu_4',
				),
			)
		)
	);
	/** Education : TESTIMONIAL DEFAULTS FOR CUSTOMIZER REPEATER */
	define(
		'TESTIMONIAL_DEFAULTS',
		wp_json_encode(
			array(
				/* Repeater's first Testimonial */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/testimonial/author-1.jpg',
					'title'     => 'Creative & Professional',
					'subtitle'  => 'It is a long established fact that a reader ill be distracted by the readable content of a page when looking at its layout.',
					'btntitle'  => 'Annah Montana',
					'shortcode' => 'Ceo xyz',
					'id'        => 'cr_Testimonial_auto_1',
				), // every Testimonial in default string should have an unique id, it helps for translation.
			/* Repeater's second Testimonial */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/testimonial/author-2.jpg',
					'title'     => 'I highly recommend',
					'subtitle'  => 'It is a long established fact that a reader ill be distracted by the readable content of a page when looking at its layout.',
					'btntitle'  => 'Jenifer Albert',
					'shortcode' => 'Founder abc firm ',
					'id'        => 'cr_Testimonial_auto_2',
				),
				/* Repeater's third Testimonial */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/testimonial/author-2.jpg',
					'title'     => 'Must consult',
					'subtitle'  => 'It is a long established fact that a reader ill be distracted by the readable content of a page when looking at its layout.',
					'btntitle'  => 'Sonya Smith',
					'shortcode' => 'Founder',
					'id'        => 'cr_Testimonial_auto_3',
				),
			)
		)
	);
	/**Education : FUNFACT_DEFAULTS DEFAULTS FOR CUSTOMIZER REPEATER */
	define(
		'FUNFACT_DEFAULTS',
		wp_json_encode(
			array(
				/* Repeater's first Funfact */
				array(
					'icon_value' => 'fas fa-square-poll-vertical',
					'title'      => 'Satisfied Customers',
					'subtitle'   => '965',
					'id'         => 'cr_Funfact_edu_1',
				), // every Funfact in default string should have an unique id, it helps for translation.
			/* Repeater's second Funfact */
				array(
					'icon_value' => 'fa fa-passport',
					'title'      => 'Finish Projects',
					'subtitle'   => '365',
					'id'         => 'cr_Funfact_edu_2',
				),
				/* Repeater's third Funfact */
				array(
					'icon_value' => 'fa fa-file-code',
					'title'      => 'Working Days',
					'subtitle'   => '450',
					'id'         => 'cr_Funfact_edu_3',
				),
				/** Repeater's fourth funfact */
				array(
					'icon_value' => 'fa fa-beer-mug-empty',
					'title'      => 'Cups of coffee',
					'subtitle'   => '585',
					'id'         => 'cr_Funfact_edu_4',
				),
			)
		)
	);
	/** Education : SPONSORS_DEFAULT DEFAULTS FOR CUSTOMIZER REPEATER  */
	define(
		'SPONSORS_DEFAULT',
		wp_json_encode(
			array(
				/* Repeater's first sponsors */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/clients/client-edu1.png',
					'title'     => 'Canvas',
					'link'      => '#',
					'id'        => 'cr_sponsors_1',
				), // every sponsors in default string should have an unique id, it helps for translation.
			/* Repeater's second sponsors */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/clients/client-edu2.png',
					'title'     => 'Learner',
					'link'      => '#',
					'id'        => 'cr_sponsors_2',
				),
				/* Repeater's Third sponsors */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/clients/client-edu3.png',
					'title'     => 'IT SOLUTIONS',
					'link'      => '#',
					'id'        => 'cr_sponsors_3',
				),
			)
		)
	);
} elseif ( $name_current_avantex_theme == 'Avantex Medical' ) {
	/** Medical : SLIDER CUSTOMIZER REPEATER DEFAULT VALUES */
	define(
		'SLIDER_DEFAULTS',
		wp_json_encode(
			array(
				/*Repeater's first item*/
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/slider/medi-slide1.jpg',
					'title'     => 'Genuine Commitment',
					'subtitle'  => 'Passion for caring',
					'text'      => 'It is a long established fact that a reader will be distracted by the readable content  of a page when looking at its layout.',
					'btntitle'  => 'Learn More',
					'link'      => '#',
					'id'        => 'cr_slider_slide_1',
				), // every item in default string should have an unique id, it helps for translation.
			)
		)
	);
	/** Medical : ABOUT DEFAULT VARIABLES */
	define( 'ABOUT_IMAGE', AVANTEX_COMPANION_PLUGIN_URL . 'inc/avantex/img/medi-about.jpg' );
	define( 'ABOUT_TITLE_TAG', 'WHAT ABOUT US' );
	define( 'ABOUT_TITLE', 'A GREAT PLACE OF MEDICAL HEALTH CARE' );
	define(
		'ABOUT_TEXT',
		'<p>There are many variations Lorem Ipsum availab.There are many of pas ofb.There are many variations of by injected humour or randomised pas of Lorem Ipsum availab.There are many variations Effective Medical Treatment Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>'
	);
	/** Medical : SERVICES CUSTOMIZER REPEATER DEFAULT VALUES */
	define(
		'SERVICES_DEFAULTS',
		wp_json_encode(
			array(
				/*Repeater's first Service*/
				array(
					'choice'     => 'customizer_repeater_image',
					'icon_value' => '',
					'image_url'  => AVANTEX_COMPANION_PLUGIN_URL . 'inc/avantex/img/service/medi_newborn.png',
					'title'      => 'Endocrinology',
					'subtitle'   => 'Strategies to improve your online presence, increase traffic to your website, and boost your search engine rankings.',
					'btntitle'   => 'Read More',
					'link'       => '#',
					'id'         => 'cr_serv_medi_1',
				), // every Service in default string should have an unique id, it helps for translation.
				/*Repeater's second Service*/
				array(
					'choice'     => 'customizer_repeater_image',
					'icon_value' => '',
					'image_url'  => AVANTEX_COMPANION_PLUGIN_URL . 'inc/avantex/img/service/medi_footprints.png',
					'title'      => 'Cardiac Clinic',
					'subtitle'   => 'Professional design and development services to create a stunning and effective website that meets your business needs.',
					'btntitle'   => 'Read More',
					'link'       => '#',
					'id'         => 'cr_serv_medi_2',
				),
				/*Repeater's Third Service*/
				array(
					'choice'     => 'customizer_repeater_image',
					'icon_value' => '',
					'image_url'  => AVANTEX_COMPANION_PLUGIN_URL . 'inc/avantex/img/service/medi_chemistry.png',
					'title'      => 'Orthopedics',
					'subtitle'   => 'Eye-catching design and branding services to make your business stand out and leave an ever lasting impression.',
					'btntitle'   => 'Read More',
					'link'       => '#',
					'id'         => 'cr_serv_medi_3',
				),
			)
		)
	);
	/** Medical : PORTFOLIO_DEFAULTS CUSTOMIZER REPEATER DEFAULT VALUES */
	define(
		'PORTFOLIO_DEFAULTS',
		wp_json_encode(
			array(
				/* Repeater's first portfolio */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/portfolio/medi-1.jpg',
					'title'     => '',
					'subtitle'  => 'Cardiology',
					'link'      => '#',
					'link2'     => '#',
					'id'        => 'cr_portfolio_medi_1',
				), // every portfolio in default string should have an unique id, it helps for translation.
				/* Repeater's second portfolio */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/portfolio/medi-2.jpg',
					'title'     => '',
					'subtitle'  => 'EYE CARE',
					'link'      => '#',
					'link2'     => '#',
					'id'        => 'cr_portfolio_medi_2',
				),
				/* Repeater's Third portfolio */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/portfolio/medi-3.jpg',
					'title'     => '',
					'subtitle'  => 'DENTAL CARE',
					'link'      => '#',
					'link2'     => '#',
					'id'        => 'cr_portfolio_medi_3',
				),
			)
		)
	);
	/** Medical : TEAM_DEFAULTS CUSTOMIZER REPEATER DEFAULT VALUES */
	define(
		'TEAM_SR_DEFAULTS',
		'[{&quot;icon&quot;:&quot;fa-brands fa-facebook&quot;,&quot;link&quot;:&quot;#&quot;,&quot;id&quot;:&quot;customizer-repeater-social-repeater-6317390b67c40&quot;},{&quot;icon&quot;:&quot;fa-brands fa-twitter&quot;,&quot;link&quot;:&quot;#&quot;,&quot;id&quot;:&quot;customizer-repeater-social-repeater-63173a9132e14&quot;},{&quot;icon&quot;:&quot;fa-brands fa-linkedin-in&quot;,&quot;link&quot;:&quot;#&quot;,&quot;id&quot;:&quot;customizer-repeater-social-repeater-6317422a80a22&quot;},{&quot;icon&quot;:&quot;fa-brands fa-instagram&quot;,&quot;link&quot;:&quot;#&quot;,&quot;id&quot;:&quot;customizer-repeater-social-repeater-6317422a80a22&quot;}]'
	);
	define(
		'TEAM_DEFAULTS',
		wp_json_encode(
			array(
				/* Repeater's first team */
				array(
					'image_url'       => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/team/medi_1.jpg',
					'title'           => 'OUTPATIENT SURGERY',
					'subtitle'        => 'ALEX',
					'social_repeater' => TEAM_SR_DEFAULTS,
					'id'              => 'cr_team_medi_1',
				), // every team in default string should have an unique id, it helps for translation.
			/* Repeater's second team */
				array(
					'image_url'       => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/team/medi_2.jpg',
					'title'           => 'FOUNDER & CEO',
					'subtitle'        => 'Susanne Herbst',
					'social_repeater' => TEAM_SR_DEFAULTS,
					'id'              => 'cr_team_medi_2',
				),
				/* Repeater's Third team */
				array(
					'image_url'       => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/team/medi_3.jpg',
					'title'           => 'DIRECTOR',
					'subtitle'        => 'OWEN',
					'social_repeater' => TEAM_SR_DEFAULTS,
					'id'              => 'cr_team_medi_3',
				),
				/* Repeater's fourth team */
				array(
					'image_url'       => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/team/medi_4.jpg',
					'title'           => 'CATARACT',
					'subtitle'        => 'JOHN',
					'social_repeater' => TEAM_SR_DEFAULTS,
					'id'              => 'cr_team_medi_4',
				),
			)
		)
	);
	/** Medical : TESTIMONIAL DEFAULTS FOR CUSTOMIZER REPEATER */
	define(
		'TESTIMONIAL_DEFAULTS',
		wp_json_encode(
			array(
				/* Repeater's first Testimonial */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/testimonial/medi-1.png',
					'title'     => 'Creative & Professional',
					'subtitle'  => 'It is a long established fact that a reader ill be distracted by the readable content of a page when looking at its layout.',
					'btntitle'  => 'Rihana Roy',
					'shortcode' => 'patient',
					'id'        => 'cr_Testimonial_auto_1',
				), // every Testimonial in default string should have an unique id, it helps for translation.
			/* Repeater's second Testimonial */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/testimonial/medi-2.png',
					'title'     => 'I highly recommend',
					'subtitle'  => 'It is a long established fact that a reader ill be distracted by the readable content of a page when looking at its layout.',
					'btntitle'  => 'Jenifer Albert',
					'shortcode' => 'patient',
					'id'        => 'cr_Testimonial_auto_2',
				),
				/* Repeater's third Testimonial */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/testimonial/author-2.jpg',
					'title'     => 'Must consult',
					'subtitle'  => 'It is a long established fact that a reader ill be distracted by the readable content of a page when looking at its layout.',
					'btntitle'  => 'Sonya Smith',
					'shortcode' => 'patient',
					'id'        => 'cr_Testimonial_auto_3',
				),
			)
		)
	);
	/** Medical : FUNFACT_DEFAULTS DEFAULTS FOR CUSTOMIZER REPEATER */
	define(
		'FUNFACT_DEFAULTS',
		wp_json_encode(
			array(
				/* Repeater's first Funfact */
				array(
					'icon_value' => 'fas fa-user-md',
					'title'      => 'Doctors',
					'subtitle'   => '56',
					'id'         => 'cr_Funfact_medi_1',
				), // every Funfact in default string should have an unique id, it helps for translation.
			/* Repeater's second Funfact */
				array(
					'icon_value' => 'fa fa-heartbeat',
					'title'      => 'Health Care',
					'subtitle'   => '365',
					'id'         => 'cr_Funfact_medi_2',
				),
				/* Repeater's third Funfact */
				array(
					'icon_value' => 'fa fa-ambulance',
					'title'      => 'Emergencies',
					'subtitle'   => '450',
					'id'         => 'cr_Funfact_medi_3',
				),
				/** Repeater's fourth funfact */
				array(
					'icon_value' => 'fa fa-medkit',
					'title'      => 'First Aids',
					'subtitle'   => '585',
					'id'         => 'cr_Funfact_medi_4',
				),
			)
		)
	);
	/** Medical : SPONSORS_DEFAULT DEFAULTS FOR CUSTOMIZER REPEATER  */
	define(
		'SPONSORS_DEFAULT',
		wp_json_encode(
			array(
				/* Repeater's first sponsors */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/clients/client-medi1.png',
					'title'     => 'Canvas',
					'link'      => '#',
					'id'        => 'cr_sponsors_1',
				), // every sponsors in default string should have an unique id, it helps for translation.
			/* Repeater's second sponsors */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/clients/client-medi2.png',
					'title'     => 'Learner',
					'link'      => '#',
					'id'        => 'cr_sponsors_2',
				),
				/* Repeater's Third sponsors */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/clients/client-medi3.png',
					'title'     => 'IT SOLUTIONS',
					'link'      => '#',
					'id'        => 'cr_sponsors_3',
				),
			)
		)
	);
} elseif ( $name_current_avantex_theme == 'Avantex Yoga' ) {
	/** Yoga : SLIDER CUSTOMIZER REPEATER DEFAULT VALUES */
	define(
		'SLIDER_DEFAULTS',
		wp_json_encode(
			array(
				/*Repeater's first item*/
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/slider/Yoga-slide1.png',
					'title'     => 'ANUSARA',
					'subtitle'  => 'YOGA STUDIO',
					'text'      => 'It is a long established fact that a reader will be distracted by the readable content  of a page when looking at its layout.',
					'btntitle'  => 'Join Class Today',
					'link'      => '#',
					'id'        => 'cr_slider_slide_1',
				), // every item in default string should have an unique id, it helps for translation.
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/slider/Yoga-slide2.png',
					'title'     => 'ANUSARA',
					'subtitle'  => 'YOGA STUDIO',
					'text'      => 'It is a long established fact that a reader will be distracted by the readable content  of a page when looking at its layout.',
					'btntitle'  => 'Join Class Today',
					'link'      => '#',
					'id'        => 'cr_slider_slide_2',
				), // every item in default string should have an unique id, it helps for translation.
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/slider/Yoga-slide3.png',
					'title'     => 'ANUSARA',
					'subtitle'  => 'YOGA STUDIO',
					'text'      => 'It is a long established fact that a reader will be distracted by the readable content  of a page when looking at its layout.',
					'btntitle'  => 'Join Class Today',
					'link'      => '#',
					'id'        => 'cr_slider_slide_3',
				), // every item in default string should have an unique id, it helps for translation.
			)
		)
	);
	/** Yoga : ABOUT DEFAULT VARIABLES */
	define( 'ABOUT_IMAGE', AVANTEX_COMPANION_PLUGIN_URL . 'inc/avantex/img/Yoga-about.jpg' );
	define( 'ABOUT_TITLE_TAG', 'WELCOME TO YOGA AVANTEX' );
	define( 'ABOUT_TITLE', 'YOGA AVANTEX IN THE CITY OF NEW YORK' );
	define(
		'ABOUT_TEXT',
		'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.Sed ut perspiciatis unde omnis iste natus error sit volup tatem accusan tium dolor emque totam rem.</p>'
	);
	/** Yoga : SERVICES CUSTOMIZER REPEATER DEFAULT VALUES */
	define(
		'SERVICES_DEFAULTS',
		wp_json_encode(
			array(
				/*Repeater's first Service*/
				array(
					'choice'     => 'customizer_repeater_image',
					'icon_value' => '',
					'image_url'  => AVANTEX_COMPANION_PLUGIN_URL . 'inc/avantex/img/service/yoga-basic.webp',
					'title'      => 'BASIC YOGA',
					'subtitle'   => 'Lorem ipsum dolor sit amet consectetur adipiscing elit.',
					'btntitle'   => 'Learn More',
					'link'       => '#',
					'id'         => 'cr_serv_yoga_1',
				), // every Service in default string should have an unique id, it helps for translation.
				/*Repeater's second Service*/
				array(
					'choice'     => 'customizer_repeater_image',
					'icon_value' => '',
					'image_url'  => AVANTEX_COMPANION_PLUGIN_URL . 'inc/avantex/img/service/yoga-normal.webp',
					'title'      => 'NORMAL YOGA',
					'subtitle'   => 'Lorem ipsum dolor sit amet consectetur adipiscing elit.',
					'btntitle'   => 'Learn More',
					'link'       => '#',
					'id'         => 'cr_serv_yoga_2',
				),
				/*Repeater's Third Service*/
				array(
					'choice'     => 'customizer_repeater_image',
					'icon_value' => '',
					'image_url'  => AVANTEX_COMPANION_PLUGIN_URL . 'inc/avantex/img/service/yoga-breath.webp',
					'title'      => 'Orthopedics',
					'subtitle'   => 'Lorem ipsum dolor sit amet consectetur adipiscing elit.',
					'btntitle'   => 'Learn More',
					'link'       => '#',
					'id'         => 'cr_serv_yoga_3',
				),
			)
		)
	);
	/** Yoga : PORTFOLIO_DEFAULTS CUSTOMIZER REPEATER DEFAULT VALUES */
	define(
		'PORTFOLIO_DEFAULTS',
		wp_json_encode(
			array(
				/* Repeater's first portfolio */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/portfolio/yoga-port1.jpg',
					'title'     => 'Flexible',
					'subtitle'  => 'YOGA MAT',
					'link'      => '#',
					'link2'     => '#',
					'id'        => 'cr_portfolio_yoga_1',
				), // every portfolio in default string should have an unique id, it helps for translation.
				/* Repeater's second portfolio */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/portfolio/yoga-port2.jpg',
					'title'     => 'Bend & Stretch',
					'subtitle'  => 'Meditation',
					'link'      => '#',
					'link2'     => '#',
					'id'        => 'cr_portfolio_yoga_2',
				),
				/* Repeater's Third portfolio */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/portfolio/yoga-port3.jpg',
					'title'     => 'Foundation in flow',
					'subtitle'  => 'Stressless',
					'link'      => '#',
					'link2'     => '#',
					'id'        => 'cr_portfolio_yoga_3',
				),
			)
		)
	);
	/** Yoga : TEAM_DEFAULTS CUSTOMIZER REPEATER DEFAULT VALUES */
	define(
		'TEAM_SR_DEFAULTS',
		'[{&quot;icon&quot;:&quot;fa-brands fa-facebook&quot;,&quot;link&quot;:&quot;#&quot;,&quot;id&quot;:&quot;customizer-repeater-social-repeater-6317390b67c40&quot;},{&quot;icon&quot;:&quot;fa-brands fa-twitter&quot;,&quot;link&quot;:&quot;#&quot;,&quot;id&quot;:&quot;customizer-repeater-social-repeater-63173a9132e14&quot;},{&quot;icon&quot;:&quot;fa-brands fa-linkedin-in&quot;,&quot;link&quot;:&quot;#&quot;,&quot;id&quot;:&quot;customizer-repeater-social-repeater-6317422a80a22&quot;},{&quot;icon&quot;:&quot;fa-brands fa-instagram&quot;,&quot;link&quot;:&quot;#&quot;,&quot;id&quot;:&quot;customizer-repeater-social-repeater-6317422a80a22&quot;}]'
	);
	define(
		'TEAM_DEFAULTS',
		wp_json_encode(
			array(
				/* Repeater's first team */
				array(
					'image_url'       => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/team/yoga-team1.jpg',
					'title'           => 'INSTRUCTOR',
					'subtitle'        => 'MARIA',
					'social_repeater' => TEAM_SR_DEFAULTS,
					'id'              => 'cr_team_yoga_1',
				), // every team in default string should have an unique id, it helps for translation.
			/* Repeater's second team */
				array(
					'image_url'       => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/team/yoga-team2.jpg',
					'title'           => 'FOUNDER',
					'subtitle'        => 'JANE SMITH',
					'social_repeater' => TEAM_SR_DEFAULTS,
					'id'              => 'cr_team_yoga_2',
				),
				/* Repeater's Third team */
				array(
					'image_url'       => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/team/yoga-team3.jpg',
					'title'           => 'DIRECTOR',
					'subtitle'        => 'OLIVIA',
					'social_repeater' => TEAM_SR_DEFAULTS,
					'id'              => 'cr_team_yoga_3',
				),
				/* Repeater's fourth team */
				array(
					'image_url'       => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/team/yoga-team4.jpg',
					'title'           => 'CELEB',
					'subtitle'        => 'KENZEE',
					'social_repeater' => TEAM_SR_DEFAULTS,
					'id'              => 'cr_team_yoga_4',
				),
			)
		)
	);
	/** Yoga : TESTIMONIAL DEFAULTS FOR CUSTOMIZER REPEATER */
	define(
		'TESTIMONIAL_DEFAULTS',
		wp_json_encode(
			array(
				/* Repeater's first Testimonial */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/testimonial/yoga-testimon1.jpg',
					'title'     => 'Creative & Professional',
					'subtitle'  => 'It is a long established fact that a reader ill be distracted by the readable content of a page when looking at its layout.',
					'btntitle'  => 'Rihana Roy',
					'shortcode' => 'batchmate',
					'id'        => 'cr_Testimonial_yoga_1',
				), // every Testimonial in default string should have an unique id, it helps for translation.
			/* Repeater's second Testimonial */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/testimonial/yoga-testimon2.jpg',
					'title'     => 'I highly recommend',
					'subtitle'  => 'It is a long established fact that a reader ill be distracted by the readable content of a page when looking at its layout.',
					'btntitle'  => 'Jenifer Albert',
					'shortcode' => 'batchmate',
					'id'        => 'cr_Testimonial_yoga_2',
				),
				/* Repeater's third Testimonial */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/testimonial/yoga-testimon3.jpg',
					'title'     => 'Must consult',
					'subtitle'  => 'It is a long established fact that a reader ill be distracted by the readable content of a page when looking at its layout.',
					'btntitle'  => 'Sonya Smith',
					'shortcode' => 'batchmate',
					'id'        => 'cr_Testimonial_yoga_3',
				),
			)
		)
	);
	/** Yoga : FUNFACT_DEFAULTS DEFAULTS FOR CUSTOMIZER REPEATER */
	define(
		'FUNFACT_DEFAULTS',
		wp_json_encode(
			array(
				/* Repeater's first Funfact */
				array(
					'icon_value' => 'fas fa-user-md',
					'title'      => 'Total Members+',
					'subtitle'   => '1430',
					'id'         => 'cr_Funfact_yoga_1',
				), // every Funfact in default string should have an unique id, it helps for translation.
			/* Repeater's second Funfact */
				array(
					'icon_value' => 'fa fa-passport',
					'title'      => 'Years Experience',
					'subtitle'   => '10',
					'id'         => 'cr_Funfact_yoga_2',
				),
				/* Repeater's third Funfact */
				array(
					'icon_value' => 'fa fa-location-dot',
					'title'      => 'Branches',
					'subtitle'   => '12',
					'id'         => 'cr_Funfact_yoga_3',
				),
				/** Repeater's fourth funfact */
				array(
					'icon_value' => 'fa fa-users',
					'title'      => 'Club Staff',
					'subtitle'   => '20',
					'id'         => 'cr_Funfact_yoga_4',
				),
			)
		)
	);
	/** Yoga : SPONSORS_DEFAULT DEFAULTS FOR CUSTOMIZER REPEATER  */
	define(
		'SPONSORS_DEFAULT',
		wp_json_encode(
			array(
				/* Repeater's first sponsors */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/clients/yoga-client1.png',
					'title'     => 'yoga1',
					'link'      => '#',
					'id'        => 'cr_sponsors_1',
				), // every sponsors in default string should have an unique id, it helps for translation.
			/* Repeater's second sponsors */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/clients/yoga-client2.png',
					'title'     => 'yoga2',
					'link'      => '#',
					'id'        => 'cr_sponsors_2',
				),
				/* Repeater's Third sponsors */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/clients/yoga-client3.png',
					'title'     => 'yoga3',
					'link'      => '#',
					'id'        => 'cr_sponsors_3',
				),
				/* Repeater's Third sponsors */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/clients/yoga-client4.png',
					'title'     => 'yoga4',
					'link'      => '#',
					'id'        => 'cr_sponsors_3',
				),
				/* Repeater's Third sponsors */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/clients/yoga-client5.png',
					'title'     => 'yoga5',
					'link'      => '#',
					'id'        => 'cr_sponsors_3',
				),
			)
		)
	);
} else {
	/** SLIDER CUSTOMIZER REPEATER DEFAULT VALUES - PARENT THEME */
	define(
		'SLIDER_DEFAULTS',
		wp_json_encode(
			array(
				/*Repeater's first item*/
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/slider/slide2.jpg',
					'title'     => 'Changes overtime',
					'subtitle'  => 'Ideas into reality',
					'text'      => 'From mere thoughts to tangible achievements',
					'btntitle'  => 'Lets Bring it',
					'link'      => '#',
					'id'        => 'cr_slider_slide_2',
				), // every item in default string should have an unique id, it helps for translation.
			/*Repeater's second item*/
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/slider/slide1.jpg',
					'title'     => 'Service on demand',
					'subtitle'  => 'Noticing Consumer Needs',
					'text'      => 'Improvements based on feedbacks',
					'btntitle'  => 'Be Our Guest',
					'link'      => '#',
					'id'        => 'cr_slider_slide_1',
				),
			)
		)
	);
	/** ABOUT DEFAULT VALUES */
	define( 'ABOUT_IMAGE', AVANTEX_COMPANION_PLUGIN_URL . 'inc/avantex/img/about.jpg' );
	define( 'ABOUT_TITLE_TAG', 'WELCOME TO AVANTEX' );
	define( 'ABOUT_TITLE', 'BUSINESS SERVICES YOUR FUTURE SUCCESS' );
	define(
		'ABOUT_TEXT',
		'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.Sed ut perspiciatis unde omnis iste natus error sit volup tatem accusan tium dolor emque totam rem.'
	);
	/** SERVICES CUSTOMIZER REPEATER DEFAULT VALUES */
	define(
		'SERVICES_DEFAULTS',
		wp_json_encode(
			array(
				/*Repeater's first Service*/
				array(
					'choice'     => 'customizer_repeater_icon',
					'icon_value' => 'fas fa-square-poll-vertical',
					'title'      => 'Marketing &amp; SEO services',
					'subtitle'   => 'Strategies to improve your online presence, increase traffic to your website, and boost your search engine rankings.',
					'btntitle'   => 'Read More',
					'link'       => '#',
					'id'         => 'cr_serv_1',
				), // every Service in default string should have an unique id, it helps for translation.
				/*Repeater's second Service*/
				array(
					'choice'     => 'customizer_repeater_icon',
					'icon_value' => 'fas fa-file-code',
					'title'      => 'Web design &amp; development',
					'subtitle'   => 'Professional design and development services to create a stunning and effective website that meets your business needs.',
					'btntitle'   => 'Read More',
					'link'       => '#',
					'id'         => 'cr_serv_2',
				),
				/*Repeater's Third Service*/
				array(
					'choice'     => 'customizer_repeater_icon',
					'icon_value' => 'fas fa-window-restore',
					'title'      => 'Graphic design &amp; branding',
					'subtitle'   => 'Eye-catching design and branding services to make your business stand out and leave an ever lasting impression.',
					'btntitle'   => 'Read More',
					'link'       => '#',
					'id'         => 'cr_serv_3',
				),
			)
		)
	);
	/** PORTFOLIO_DEFAULTS CUSTOMIZER REPEATER DEFAULT VALUES */
	define(
		'PORTFOLIO_DEFAULTS',
		wp_json_encode(
			array(
				/* Repeater's first portfolio */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/portfolio/project-1.jpg',
					'title'     => 'Financial Services Website',
					'subtitle'  => 'UI & UX Design',
					'link'      => '#',
					'link2'     => '#',
					'id'        => 'cr_portfolio_1',
				), // every portfolio in default string should have an unique id, it helps for translation.
			/* Repeater's second portfolio */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/portfolio/project-2.jpg',
					'title'     => 'E-commerce site Supply Retailer',
					'subtitle'  => 'E-commerce',
					'link'      => '#',
					'link2'     => '#',
					'id'        => 'cr_portfolio_2',
				),
				/* Repeater's Third portfolio */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/portfolio/project-3.jpg',
					'title'     => 'Blog Content Lifestyle Brand',
					'subtitle'  => 'Web Creation',
					'link'      => '#',
					'link2'     => '#',
					'id'        => 'cr_portfolio_3',
				),
			)
		)
	);
	/** TEAM_DEFAULTS CUSTOMIZER REPEATER DEFAULT VALUES */

	define(
		'TEAM_SR_DEFAULTS',
		'[{&quot;icon&quot;:&quot;fa-brands fa-facebook&quot;,&quot;link&quot;:&quot;#&quot;,&quot;id&quot;:&quot;customizer-repeater-social-repeater-6317390b67c40&quot;},{&quot;icon&quot;:&quot;fa-brands fa-twitter&quot;,&quot;link&quot;:&quot;#&quot;,&quot;id&quot;:&quot;customizer-repeater-social-repeater-63173a9132e14&quot;},{&quot;icon&quot;:&quot;fa-brands fa-linkedin-in&quot;,&quot;link&quot;:&quot;#&quot;,&quot;id&quot;:&quot;customizer-repeater-social-repeater-6317422a80a22&quot;},{&quot;icon&quot;:&quot;fa-brands fa-instagram&quot;,&quot;link&quot;:&quot;#&quot;,&quot;id&quot;:&quot;customizer-repeater-social-repeater-6317422a80a22&quot;}]'
	);

	define(
		'TEAM_DEFAULTS',
		wp_json_encode(
			array(
				/* Repeater's first team */
				array(
					'image_url'       => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/team/team1.jpg',
					'title'           => 'UI Designer',
					'subtitle'        => 'David Wilson',
					'social_repeater' => TEAM_SR_DEFAULTS,
					'id'              => 'cr_team_1',
				), // every team in default string should have an unique id, it helps for translation.
			/* Repeater's second team */
				array(
					'image_url'       => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/team/team2.jpg',
					'title'           => 'Founder & CEO',
					'subtitle'        => 'Jane Smith',
					'social_repeater' => TEAM_SR_DEFAULTS,
					'id'              => 'cr_team_2',
				),
				/* Repeater's Third team */
				array(
					'image_url'       => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/team/team3.jpg',
					'title'           => 'Director',
					'subtitle'        => 'Owen Robert',
					'social_repeater' => TEAM_SR_DEFAULTS,
					'id'              => 'cr_team_3',
				),
				/* Repeater's fourth team */
				array(
					'image_url'       => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/team/team4.jpg',
					'title'           => 'UI Developper',
					'subtitle'        => 'Olivia Travis',
					'social_repeater' => TEAM_SR_DEFAULTS,
					'id'              => 'cr_team_4',
				),
			)
		)
	);
	/** TESTIMONIAL DEFAULTS FOR CUSTOMIZER REPEATER */
	define(
		'TESTIMONIAL_DEFAULTS',
		wp_json_encode(
			array(
				/* Repeater's first Testimonial */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/testimonial/author-1.jpg',
					'title'     => 'Creative & Professional',
					'subtitle'  => 'It is a long established fact that a reader ill be distracted by the readable content of a page when looking at its layout.',
					'btntitle'  => 'Annah Montana',
					'shortcode' => 'Ceo xyz',
					'id'        => 'cr_Testimonial_1',
				), // every Testimonial in default string should have an unique id, it helps for translation.
			/* Repeater's second Testimonial */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/testimonial/author-2.jpg',
					'title'     => 'I highly recommend',
					'subtitle'  => 'It is a long established fact that a reader ill be distracted by the readable content of a page when looking at its layout.',
					'btntitle'  => 'Jenifer Albert',
					'shortcode' => 'Founder abc firm ',
					'id'        => 'cr_Testimonial_2',
				),
				/* Repeater's third Testimonial */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/testimonial/author-2.jpg',
					'title'     => 'Must consult',
					'subtitle'  => 'It is a long established fact that a reader ill be distracted by the readable content of a page when looking at its layout.',
					'btntitle'  => 'Sonya Smith',
					'shortcode' => 'Founder',
					'id'        => 'cr_Testimonial_3',
				),
			)
		)
	);
	/** FUNFACT_DEFAULTS DEFAULTS FOR CUSTOMIZER REPEATER */
	define(
		'FUNFACT_DEFAULTS',
		wp_json_encode(
			array(
				/* Repeater's first Funfact */
				array(
					'icon_value' => 'fas fa-square-poll-vertical',
					'title'      => 'Satisfied Customers',
					'subtitle'   => '965',
					'id'         => 'cr_Funfact_1',
				), // every Funfact in default string should have an unique id, it helps for translation.
			/* Repeater's second Funfact */
				array(
					'icon_value' => 'fa fa-passport',
					'title'      => 'Finish Projects',
					'subtitle'   => '365',
					'id'         => 'cr_Funfact_2',
				),
				/* Repeater's third Funfact */
				array(
					'icon_value' => 'fa fa-file-code',
					'title'      => 'Working Days',
					'subtitle'   => '450',
					'id'         => 'cr_Funfact_3',
				),
				/** Repeater's fourth funfact */
				array(
					'icon_value' => 'fa fa-beer-mug-empty',
					'title'      => 'Cups of Coffee',
					'subtitle'   => '585',
					'id'         => 'cr_Funfact_3',
				),
			)
		)
	);
	/** SPONSORS_DEFAULT DEFAULTS FOR CUSTOMIZER REPEATER */
	define(
		'SPONSORS_DEFAULT',
		wp_json_encode(
			array(
				/* Repeater's first sponsors */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/clients/client-1.png',
					'title'     => 'Qatar',
					'link'      => '#',
					'id'        => 'cr_sponsors_1',
				), // every sponsors in default string should have an unique id, it helps for translation.
			/* Repeater's second sponsors */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/clients/client-2.png',
					'title'     => 'Car Sport',
					'link'      => '#',
					'id'        => 'cr_sponsors_2',
				),
				/* Repeater's Third sponsors */
				array(
					'image_url' => AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/clients/client-3.png',
					'title'     => 'Genshin',
					'link'      => '#',
					'id'        => 'cr_sponsors_3',
				),
			)
		)
	);
}
