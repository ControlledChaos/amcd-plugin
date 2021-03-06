<?php
/**
 * The frontend functionality of the plugin.
 *
 * @package    Alana_Morshead
 * @subpackage Frontend
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 *
 * @link       Slick       https://github.com/kenwheeler/slick
 * @link       Tabslet     https://github.com/vdw/Tabslet
 * @link       Sticky-kit  https://github.com/leafo/sticky-kit
 * @link       Tooltipster https://github.com/iamceege/tooltipster
 * @link       Fancybox    http://fancyapps.com/fancybox/3/
 */

namespace AMCD_Plugin\Frontend;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Bail if in the admin.
if ( is_admin() ) {
	return;
}

/**
 * The frontend functionality of the plugin.
 *
 * @since  1.0.0
 * @access public
 */
class Frontend {

	/**
	 * Get an instance of the class.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object Returns the instance.
	 */
	public static function instance() {

		// Varialbe for the instance to be used outside the class.
		static $instance = null;

		if ( is_null( $instance ) ) {

			// Set variable for new instance.
			$instance = new self;

			// Frontend dependencies.
			$instance->dependencies();

		}

		// Return the instance.
		return $instance;

	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return self
	 */
	public function __construct() {

		// Deregister Dashicons for users not logged in.
		add_action( 'wp_enqueue_scripts', [ $this, 'deregister_dashicons' ] );

		// Get inline options.
		$jquery  = get_option( 'amcd_inline_jquery' );

		// Inline jQuery.
		if ( $jquery ) {
			add_action( 'wp_enqueue_scripts', [ $this, 'deregister_jquery' ] );
			add_action( 'wp_footer', [ $this, 'get_jquery' ], 1 );
		}

		// Add Fancybox attributes to attachment page image link.
		add_action( 'wp_footer', [ $this, 'attachment_fancybox' ] );

		// Remove the WordPress logo from the admin toolbar.
		add_action( 'admin_bar_menu', [ $this, 'remove_wp_logo' ], 999 );

		// Remove search from admin toolbar.
		add_action( 'wp_before_admin_bar_render', [ $this, 'adminbar_search' ] );

	}

	/**
	 * Frontend dependencies.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function dependencies() {

		// Get inline options.
		$scripts = get_option( 'amcd_inline_scripts' );
		$styles  = get_option( 'amcd_inline_styles' );

		// Add styles inline if option selected.
		if ( $styles ) {
			require_once AMCD_PATH . 'frontend/class-styles-inline.php';

		// Otherwise enqueue styles.
		} else {
			require_once AMCD_PATH . 'frontend/class-styles-enqueue.php';
		}

		// Add scripts inline if option selected.
		if ( $scripts ) {
			require_once AMCD_PATH . 'frontend/class-scripts-inline.php';

		// Otherwise enqueue scripts.
		} else {
			require_once AMCD_PATH . 'frontend/class-scripts-enqueue.php';
		}

		// Clean up some scripts in the `head` section.
		require_once AMCD_PATH . 'frontend/class-head-scripts.php';

		// Meta tags for SEO.
		include_once AMCD_PATH . 'frontend/meta-tags/class-meta-tags.php';

	}

	/**
	 * Deregister Dashicons for users not logged in.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function deregister_dashicons() {

		if ( ! is_user_logged_in() ) {
			wp_deregister_style( 'dashicons' );
		}

	}

	/**
	 * Deregister jQuery if inline is option selected.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function deregister_jquery() {

		if ( ! is_customize_preview() ) {
			wp_deregister_script( 'jquery' );
		}

	}

	/**
	 * Add jQuery inline if option selected.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function get_jquery() {

		if ( ! is_customize_preview() ) {

			$jquery = file_get_contents( AMCD_PATH . 'frontend/assets/js/jquery.min.js' );

			echo '<!-- jQuery --><script>' . $jquery . '</script>';

		}

	}

	/**
	 * Add Fancybox attributes to attachment page image link.
	 *
	 * You may want to minimize the script for production sites.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function attachment_fancybox() {

		if ( is_attachment() && get_option( 'amcd_enqueue_fancybox_script' ) ) { ?>

			<script>
			jQuery(document).ready(function() {
				jQuery( 'p.attachment > a' ).attr( 'data-fancybox', '' );
			});
			</script>

		<?php }

	}

	/**
	 * Remove the WordPress logo from the admin bar.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object $wp_admin_bar
	 * @return void
	 *
	 * @todo Make this optional on the Site Settings screen.
	 */
	public function remove_wp_logo( $wp_admin_bar ) {

		$wp_admin_bar->remove_node( 'wp-logo' );

	}

	/**
	 * Remove the search bar from the frontend admin toolbar.
	 *
	 * @since  1.0.0
	 * @access public
	 * @global object wp_admin_bar
	 * @return void
	 *
	 * @todo Make this optional on the Site Settings screen.
	 */
	public function adminbar_search() {

		global $wp_admin_bar;

		$wp_admin_bar->remove_menu( 'search' );

	}

}

/**
 * Put an instance of the class into a function.
 *
 * @since  1.0.0
 * @access public
 * @return object Returns an instance of the class.
 */
function amcd_frontend() {

	return Frontend::instance();

}

// Run an instance of the class.
amcd_frontend();