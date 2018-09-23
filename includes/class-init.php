<?php
/**
 * The core plugin class.
 *
 * @package    Alana_Morshead
 * @subpackage Includes
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace AMCD_Plugin\Includes;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Get plugins path to check for active plugins.
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

/**
 * Define the core functionality of the plugin.
 *
 * @since  1.0.0
 * @access public
 */
final class Init {

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

			// Get class dependencies.
			$instance->dependencies();
		}

		// Return the instance.
		return $instance;

	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return self
	 */
	private function __construct() {

		// Remove the Draconian capital P filter.
		remove_filter( 'the_title', 'capital_P_dangit', 11 );
		remove_filter( 'the_content', 'capital_P_dangit', 11 );
		remove_filter( 'comment_text', 'capital_P_dangit', 31 );

		// Remove contextual help tabs.
		add_filter( 'contextual_help', [ $this, 'remove_help_tabs' ], 999, 3 );
		add_filter( 'screen_options_show_screen', [ $this, 'remove_screen_options' ], 10, 2 );

	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function dependencies() {

		// Translation functionality.
		require_once AMCD_PATH . 'includes/class-i18n.php';

		// Admin/backend functionality, scripts and styles.
		require_once AMCD_PATH . 'admin/class-admin.php';

		// Frontend functionality, scripts and styles.
		require_once AMCD_PATH . 'frontend/class-frontend.php';

		// Various media and media library functionality.
		require_once AMCD_PATH . 'includes/media/class-media.php';

		// Remove the theme Customizer.
		require_once AMCD_PATH . 'includes/tools/class-remove-customizer.php';

		/**
		 * Register custom editor blocks.
		 *
		 * @todo Remove conditional statement when Gutenberg is in core?
		 */
		if ( is_plugin_active( 'gutenberg/gutenberg.php' ) ) {

			require_once AMCD_PATH . 'includes/editor-blocks/class-register-block-types.php';

		}

		// Post types and taxonomies.
		require_once AMCD_PATH . 'includes/post-types-taxes/class-post-type-tax.php';

		// Dev and maintenance tools.
		require_once AMCD_PATH . 'includes/tools/class-tools.php';

	}

	/**
	 * Removes the contextual help tab.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  array $old_help
	 * @param  int $screen_id
	 * @param  obj $screen
	 * @return array Returns the amended array of tabs.
	 */
	public function remove_help_tabs( $old_help, $screen_id, $screen ) {

		$screen->remove_help_tabs();

		return $old_help;


	}

	/**
	 * Removes screen options tab.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  boolean $display_boolean
	 * @param  object $wp_screen_object
	 * @return boolean Returns false for the screens in the array.
	 */
	public function remove_screen_options( $display_boolean, $wp_screen_object ) {

		$blacklist = [
			// 'post.php',
			// 'post-new.php',
			'index.php',
			// 'edit.php'
		];

		if ( in_array( $GLOBALS['pagenow'], $blacklist ) ) {
			$wp_screen_object->render_screen_layout();
			$wp_screen_object->render_per_page_options();

			return false;
		}

		return true;

	}

}

/**
 * Put an instance of the class into a function.
 *
 * @since  1.0.0
 * @access public
 * @return object Returns an instance of the class.
 */
function amcd_init() {

	return Init::instance();

}

// Run an instance of the class.
amcd_init();