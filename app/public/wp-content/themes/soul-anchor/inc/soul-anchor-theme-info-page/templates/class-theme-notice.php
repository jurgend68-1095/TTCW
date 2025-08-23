<?php
/**
 * Theme Info Page
 *
 * @package Soul Anchor
 */

namespace Soul_Anchor;

use const DAY_IN_SECONDS;

/**
 * Exit if accessed directly.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

new Soul_Anchor_Theme_Notice();

class Soul_Anchor_Theme_Notice {

	/** @var \WP_Theme */
	private $soul_anchor_theme;

	private $soul_anchor_url = 'https://www.themescarts.com/';

	/**
	 * Class construct.
	 */
	public function __construct() {
		$this->soul_anchor_theme = wp_get_theme();

		add_action( 'init', array( $this, 'handle_dismiss_notice' ) );

		if ( ! \get_transient( 'soul_anchor_notice_dismissed' ) ) {
			add_action( 'admin_notices', array( $this, 'soul_anchor_render_notice' ) );
		}

		add_action( 'switch_theme', array( $this, 'show_notice' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'soul_anchor_enqueue_notice_assets' ) );
	}

	/**
	 * Delete notice on theme switch.
	 *
	 * @return void
	 */
	public function show_notice() {
		\delete_transient( 'soul_anchor_notice_dismissed' );
	}

	/**
	 * Enqueue admin styles and scripts.
	 */
	public function soul_anchor_enqueue_notice_assets() {
		wp_enqueue_style(
			'soul-anchor-theme-notice-css',
			get_template_directory_uri() . '/inc/soul-anchor-theme-info-page/css/theme-details.css',
			array(),
			'1.0.0'
		);

		wp_enqueue_script(
			'soul-anchor-theme-notice-js',
			get_template_directory_uri() . '/inc/soul-anchor-theme-info-page/js/theme-details.js',
			array( 'jquery' ),
			'1.0.0',
			true
		);

		// Pass dynamic URL to JS
		wp_localize_script( 'soul-anchor-theme-notice-js', 'SoulAnchorTheme', array(
			'admin_url' => esc_url( admin_url( 'admin.php?page=themescarts' ) ),
		));
	}

	/**
	 * Render the admin notice.
	 */
	public function soul_anchor_render_notice() {
		?>
		<div id="soul-anchor-theme-notice" class="notice notice-info is-dismissible">
			<div class="soul-anchor-content-wrap">
				<div class="soul-anchor-notice-left">
					<?php
					$this->soul_anchor_render_title();
					$this->soul_anchor_render_content();
					$this->soul_anchor_render_actions();
					?>
				</div>
				<div class="soul-anchor-notice-right">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/screenshot.png' ); ?>" alt="<?php esc_attr_e( 'Theme Notice Image', 'soul-anchor' ); ?>">
				</div>
			</div>
		</div>
		<?php
	}

	/**
	 * Render title.
	 */
	protected function soul_anchor_render_title() {
		?>
		<h2>
			<?php
			printf(
				// translators: %s is the theme name
				esc_html__( 'Thank you for installing %s!', 'soul-anchor' ),
				'<span>' . esc_html( $this->soul_anchor_theme->get( 'Name' ) ) . '</span>'
			);
			?>
		</h2>
		<?php
	}

	/**
	 * Render content.
	 */
	protected function soul_anchor_render_content() {
		$soul_anchor_link = '<a href="' . esc_url( $this->soul_anchor_url ) . '" target="_blank">' . esc_html__( 'ThemesCarts', 'soul-anchor' ) . '</a>';

		$soul_anchor_text = sprintf(
			/* translators: %1$s: Author Name, %2$s: Link */
			esc_html__( 'Unlock the full potential of your new store with %1$s! Get started today by visiting %2$s to explore a wide range of ready-to-use patterns and demo templates, designed to enhance your online shopping experience.', 'soul-anchor' ),
			esc_html__( 'ThemesCarts', 'soul-anchor' ),
			$soul_anchor_link
		);

		echo wp_kses_post( wpautop( $soul_anchor_text ) );
	}

	/**
	 * Render action buttons.
	 */
	protected function soul_anchor_render_actions() {
		$soul_anchor_more_info_url = admin_url( 'themes.php?page=soul-anchor-theme-info-page' );
		?>
		<div class="notice-actions">
			<a href="<?php echo esc_url( $soul_anchor_more_info_url ); ?>" id="btn-install-activate">
				<?php esc_html_e( 'Click Here For Theme Info', 'soul-anchor' ); ?>
			</a>
			<form class="soul-anchor-notice-dismiss-form" method="post">
				<button type="submit" name="notice-dismiss" value="true" id="btn-dismiss">
					<?php esc_html_e( 'Dismiss', 'soul-anchor' ); ?>
				</button>
			</form>
		</div>
		<?php
	}

	/**
	 * Handle dismiss action.
	 */
	public function handle_dismiss_notice() {
		if ( isset( $_POST['notice-dismiss'] ) ) {
			set_transient( 'soul_anchor_notice_dismissed', true, DAY_IN_SECONDS * 3 );
			wp_safe_redirect( esc_url_raw( $_SERVER['REQUEST_URI'] ) );
			exit;
		}
	}
}
?>