<?php
/**
 * Soul Anchor functions and definitions
 *
 * @package Soul Anchor
 * @since 1.0
 */

if ( ! function_exists( 'soul_anchor_support' ) ) :
	function soul_anchor_support() {
			
		load_theme_textdomain( 'soul-anchor', get_template_directory() . '/languages' );

		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_theme_support( 'custom-background', apply_filters( 'soul_anchor_custom_background', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));
		
		add_theme_support( 'wp-block-styles' );

		add_editor_style( 'style.css' );

		define('SOUL_ANCHOR_BUY_NOW',__('https://www.themescarts.com/products/tour-wordpress-theme/','soul-anchor'));
		define('SOUL_ANCHOR_FOOTER_BUY_NOW',__('https://www.themescarts.com/product/free-travel-wordpress-theme/','soul-anchor'));

	}
endif;
add_action( 'after_setup_theme', 'soul_anchor_support' );

/*-------------------------------------------------------------
 Enqueue Styles
--------------------------------------------------------------*/

if ( ! function_exists( 'soul_anchor_styles' ) ) :
	function soul_anchor_styles() {
		// Register theme stylesheet.
		wp_enqueue_style('soul-anchor-style', get_stylesheet_uri(), array(), wp_get_theme()->get('version') );
		wp_enqueue_style('soul-anchor-style-blocks', get_template_directory_uri(). '/assets/css/blocks.css');
		wp_enqueue_style('soul-anchor-style-responsive', get_template_directory_uri(). '/assets/css/responsive.css');
		wp_style_add_data( 'soul-anchor-basic-style', 'rtl', 'replace' );

		//animation
		wp_enqueue_script( 'wow-js', get_theme_file_uri( '/assets/js/wow.js' ), array( 'jquery' ), true );
		wp_enqueue_style( 'animate-css', get_template_directory_uri().'/assets/css/animate.css' );
	}

endif;
add_action( 'wp_enqueue_scripts', 'soul_anchor_styles' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

require_once get_theme_file_path( 'inc/soul-anchor-theme-info-page/templates/class-theme-notice.php' );
require_once get_theme_file_path( 'inc/soul-anchor-theme-info-page/class-theme-info.php' );

require_once get_theme_file_path( '/inc/customizer.php' );

?>