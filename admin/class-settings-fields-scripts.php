<?php
/**
 * Settings fields for script loading and more.
 *
 * @package    Alana_Morshead
 * @subpackage Admin
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace AMCD_Plugin\Admin;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Settings fields for script loading and more.
 *
 * @since  1.0.0
 * @access public
 */
class Settings_Fields_Scripts {

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

		// Register settings.
		add_action( 'admin_init', [ $this, 'settings' ] );

		// Include jQuery Migrate.
		$migrate = get_option( 'amcd_jquery_migrate' );
		if ( ! $migrate ) {
			add_action( 'wp_default_scripts', [ $this, 'include_jquery_migrate' ] );
		}

	}

	/**
	 * Register settings via the WordPress Settings API.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function settings() {

		/**
		 * Generl script options.
		 */
		add_settings_section( 'amcd-scripts-general', __( 'General Options', 'amcd-plugin' ), [ $this, 'scripts_general_section_callback' ], 'amcd-scripts-general' );

		// Inline scripts.
		add_settings_field( 'amcd_inline_scripts', __( 'Inline Scripts', 'amcd-plugin' ), [ $this, 'amcd_inline_scripts_callback' ], 'amcd-scripts-general', 'amcd-scripts-general', [ esc_html__( 'Add script contents to footer', 'amcd-plugin' ) ] );

		register_setting(
			'amcd-scripts-general',
			'amcd_inline_scripts'
		);

		// Inline styles.
		add_settings_field( 'amcd_inline_styles', __( 'Inline Styles', 'amcd-plugin' ), [ $this, 'amcd_inline_styles_callback' ], 'amcd-scripts-general', 'amcd-scripts-general', [ esc_html__( 'Add script-related CSS contents to head', 'amcd-plugin' ) ] );

		register_setting(
			'amcd-scripts-general',
			'amcd_inline_styles'
		);

		// Inline jQuery.
		add_settings_field( 'amcd_inline_jquery', __( 'Inline jQuery', 'amcd-plugin' ), [ $this, 'amcd_inline_jquery_callback' ], 'amcd-scripts-general', 'amcd-scripts-general', [ esc_html__( 'Deregister jQuery and add its contents to footer', 'amcd-plugin' ) ] );

		register_setting(
			'amcd-scripts-general',
			'amcd_inline_jquery'
		);

		// Include jQuery Migrate.
		add_settings_field( 'amcd_jquery_migrate', __( 'jQuery Migrate', 'amcd-plugin' ), [ $this, 'amcd_jquery_migrate_callback' ], 'amcd-scripts-general', 'amcd-scripts-general', [ esc_html__( 'Use jQuery Migrate for backwards compatibility', 'amcd-plugin' ) ] );

		register_setting(
			'amcd-scripts-general',
			'amcd_jquery_migrate'
		);

		// Remove emoji script.
		add_settings_field( 'amcd_remove_emoji_script', __( 'Emoji Script', 'amcd-plugin' ), [ $this, 'remove_emoji_script_callback' ], 'amcd-scripts-general', 'amcd-scripts-general', [ esc_html__( 'Remove emoji script from <head>', 'amcd-plugin' ) ] );

		register_setting(
			'amcd-scripts-general',
			'amcd_remove_emoji_script'
		);

		// Remove WordPress version appended to script links.
		add_settings_field( 'amcd_remove_script_version', __( 'Script Versions', 'amcd-plugin' ), [ $this, 'remove_script_version_callback' ], 'amcd-scripts-general', 'amcd-scripts-general', [ esc_html__( 'Remove WordPress version from script and stylesheet links in <head>', 'amcd-plugin' ) ] );

		register_setting(
			'amcd-scripts-general',
			'amcd_remove_script_version'
		);

		// Minify HTML.
		add_settings_field( 'amcd_html_minify', __( 'Minify HTML', 'amcd-plugin' ), [ $this, 'html_minify_callback' ], 'amcd-scripts-general', 'amcd-scripts-general', [ esc_html__( 'Minify HTML source code to increase load speed', 'amcd-plugin' ) ] );

		register_setting(
			'amcd-scripts-general',
			'amcd_html_minify'
		);

		/**
		 * Use included vendor scripts & options.
		 */
		add_settings_section( 'amcd-scripts-vendor', __( 'Included Vendor Scripts', 'amcd-plugin' ), [ $this, 'scripts_vendor_section_callback' ], 'amcd-scripts-vendor' );

		// Use Slick.
		add_settings_field( 'amcd_enqueue_slick', __( 'Slick', 'amcd-plugin' ), [ $this, 'enqueue_slick_callback' ], 'amcd-scripts-vendor', 'amcd-scripts-vendor', [ esc_html__( 'Use Slick script and stylesheets', 'amcd-plugin' ) ] );

		register_setting(
			'amcd-scripts-vendor',
			'amcd_enqueue_slick'
		);

		// Use Tabslet.
		add_settings_field( 'amcd_enqueue_tabslet', __( 'Tabslet', 'amcd-plugin' ), [ $this, 'enqueue_tabslet_callback' ], 'amcd-scripts-vendor', 'amcd-scripts-vendor', [ esc_html__( 'Use Tabslet script', 'amcd-plugin' ) ] );

		register_setting(
			'amcd-scripts-vendor',
			'amcd_enqueue_tabslet'
		);

		// Use Sticky-kit.
		add_settings_field( 'amcd_enqueue_stickykit', __( 'Sticky-kit', 'amcd-plugin' ), [ $this, 'enqueue_stickykit_callback' ], 'amcd-scripts-vendor', 'amcd-scripts-vendor', [ esc_html__( 'Use Sticky-kit script', 'amcd-plugin' ) ] );

		register_setting(
			'amcd-scripts-vendor',
			'amcd_enqueue_stickykit'
		);

		/**
		 * Use Tooltipster.
		 *
		 * @todo Add option to enqueue on the backend.
		 */
		add_settings_field( 'amcd_enqueue_tooltipster', __( 'Tooltipster', 'amcd-plugin' ), [ $this, 'enqueue_tooltipster_callback' ], 'amcd-scripts-vendor', 'amcd-scripts-vendor', [ esc_html__( 'Use Tooltipster script and stylesheet', 'amcd-plugin' ) ] );

		register_setting(
			'amcd-scripts-vendor',
			'amcd_enqueue_tooltipster'
		);

		// Site Settings section.
		if ( class_exists( 'acf_pro' ) || ( class_exists( 'acf' ) && class_exists( 'acf_options_page' ) ) ) {

			add_settings_section( 'amcd-registered-fields-activate', __( 'Registered Fields Activation', 'amcd-plugin' ), [ $this, 'registered_fields_activate' ], 'amcd-registered-fields-activate' );

			add_settings_field( 'amcd_acf_activate_settings_page', __( 'Site Settings Page', 'amcd-plugin' ), [ $this, 'registered_fields_page_callback' ], 'amcd-registered-fields-activate', 'amcd-registered-fields-activate', [ __( 'Deactive the field group for the "Site Settings" options page.', 'amcd-plugin' ) ] );

			register_setting(
				'amcd-registered-fields-activate',
				'amcd_acf_activate_settings_page'
			);

		}

	}

	/**
	 * General section callback.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function scripts_general_section_callback( $args ) {

		$html = sprintf( '<p>%1s</p>', esc_html__( 'Inline settings only apply to scripts and styles included with the plugin.' ) );

		echo $html;

	}

	/**
	 * Inline jQuery.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function amcd_inline_jquery_callback( $args ) {

		$option = get_option( 'amcd_inline_jquery' );

		$html = '<p><input type="checkbox" id="amcd_inline_jquery" name="amcd_inline_jquery" value="1" ' . checked( 1, $option, false ) . '/>';

		$html .= '<label for="amcd_inline_jquery"> '  . $args[0] . '</label></p>';

		echo $html;

	}

	/**
	 * Include jQuery Migrate.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function amcd_jquery_migrate_callback( $args ) {

		$option = get_option( 'amcd_jquery_migrate' );

		$html = '<p><input type="checkbox" id="amcd_jquery_migrate" name="amcd_jquery_migrate" value="1" ' . checked( 1, $option, false ) . '/>';

		$html .= '<label for="amcd_jquery_migrate"> '  . $args[0] . '</label><br />';

		$html .= '<small><em>Some outdated plugins and themes may be dependent on an old version of jQuery</em></small></p>';

		echo $html;

	}

	/**
	 * Inline scripts.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function amcd_inline_scripts_callback( $args ) {

		$option = get_option( 'amcd_inline_scripts' );

		$html = '<p><input type="checkbox" id="amcd_inline_scripts" name="amcd_inline_scripts" value="1" ' . checked( 1, $option, false ) . '/>';

		$html .= '<label for="amcd_inline_scripts"> '  . $args[0] . '</label></p>';

		echo $html;

	}

	/**
	 * Inline styles.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function amcd_inline_styles_callback( $args ) {

		$option = get_option( 'amcd_inline_styles' );

		$html = '<p><input type="checkbox" id="amcd_inline_styles" name="amcd_inline_styles" value="1" ' . checked( 1, $option, false ) . '/>';

		$html .= '<label for="amcd_inline_styles"> '  . $args[0] . '</label></p>';

		echo $html;

	}

	/**
	 * Remove emoji script.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function remove_emoji_script_callback( $args ) {

		$option = get_option( 'amcd_remove_emoji_script' );

		$html = '<p><input type="checkbox" id="amcd_remove_emoji_script" name="amcd_remove_emoji_script" value="1" ' . checked( 1, $option, false ) . '/>';

		$html .= '<label for="amcd_remove_emoji_script"> '  . $args[0] . '</label><br />';

		$html .= '<small><em>Emojis will still work in modern browsers</em></small></p>';

		echo $html;

	}

	/**
	 * Script options and enqueue settings.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function remove_script_version_callback( $args ) {

		$option = get_option( 'amcd_remove_script_version' );

		$html = '<p><input type="checkbox" id="amcd_remove_script_version" name="amcd_remove_script_version" value="1" ' . checked( 1, $option, false ) . '/>';

		$html .= '<label for="amcd_remove_script_version"> '  . $args[0] . '</label></p>';

		echo $html;

	}

	/**
	 * Minify HTML source code.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function html_minify_callback( $args ) {

		$option = get_option( 'amcd_html_minify' );

		$html = '<p><input type="checkbox" id="amcd_html_minify" name="amcd_html_minify" value="1" ' . checked( 1, $option, false ) . '/>';

		$html .= '<label for="amcd_html_minify"> '  . $args[0] . '</label></p>';

		echo $html;

	}

	/**
	 * Vendor section callback.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function scripts_vendor_section_callback( $args ) {

		$html = sprintf( '<p>%1s</p>', esc_html__( 'Look for Fancybox options on the Media Settings page.' ) );

		echo $html;

	}

	/**
	 * Use Slick.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function enqueue_slick_callback( $args ) {

		$option = get_option( 'amcd_enqueue_slick' );

		$html = '<p><input type="checkbox" id="amcd_enqueue_slick" name="amcd_enqueue_slick" value="1" ' . checked( 1, $option, false ) . '/>';
		$html .= sprintf(
			'<label for="amcd_enqueue_slick"> %1s</label> <a href="%2s" target="_blank" class="tooltip" title="%3s"><span class="dashicons dashicons-editor-help"></span></a>',
			$args[0],
			esc_attr( esc_url( 'http://kenwheeler.github.io/slick/' ) ),
			esc_attr( __( 'Learn more about Slick', 'amcd-plugin' ) )
		);
		$html .= '</p>';

		echo $html;

	}

	/**
	 * Use Tabslet.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function enqueue_tabslet_callback( $args ) {

		$option = get_option( 'amcd_enqueue_tabslet' );

		$html = '<p><input type="checkbox" id="amcd_enqueue_tabslet" name="amcd_enqueue_tabslet" value="1" ' . checked( 1, $option, false ) . '/>';
		$html .= sprintf(
			'<label for="amcd_enqueue_tabslet"> %1s</label> <a href="%2s" target="_blank" class="tooltip" title="%3s"><span class="dashicons dashicons-editor-help"></span></a>',
			$args[0],
			esc_attr( esc_url( 'http://vdw.github.io/Tabslet/' ) ),
			esc_attr( __( 'Learn more about Tabslet', 'amcd-plugin' ) )
		);
		$html .= '</p>';

		echo $html;

	}

	/**
	 * Use Sticky-kit.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function enqueue_stickykit_callback( $args ) {

		$option = get_option( 'amcd_enqueue_stickykit' );

		$html = '<p><input type="checkbox" id="amcd_enqueue_stickykit" name="amcd_enqueue_stickykit" value="1" ' . checked( 1, $option, false ) . '/>';
		$html .= sprintf(
			'<label for="amcd_enqueue_stickykit"> %1s</label> <a href="%2s" target="_blank" class="tooltip" title="%3s"><span class="dashicons dashicons-editor-help"></span></a>',
			$args[0],
			esc_attr( esc_url( 'http://leafo.net/sticky-kit/' ) ),
			esc_attr( __( 'Learn more about Sticky-kit', 'amcd-plugin' ) )
		);
		$html .= '</p>';

		echo $html;

	}

	/**
	 * Use Tooltipster.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function enqueue_tooltipster_callback( $args ) {

		$option = get_option( 'amcd_enqueue_tooltipster' );

		$html = '<p><input type="checkbox" id="amcd_enqueue_tooltipster" name="amcd_enqueue_tooltipster" value="1" ' . checked( 1, $option, false ) . '/>';
		$html .= sprintf(
			'<label for="amcd_enqueue_tooltipster"> %1s</label> <a href="%2s" target="_blank" class="tooltip" title="%3s"><span class="dashicons dashicons-editor-help"></span></a>',
			$args[0],
			esc_attr( esc_url( 'http://iamceege.github.io/tooltipster/' ) ),
			esc_attr( __( 'Learn more about Tooltipster', 'amcd-plugin' ) )
		);
		$html .= '</p>';

		echo $html;

	}

	/**
	 * Site Settings section.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function registered_fields_activate() {

		if ( class_exists( 'acf_pro' ) || ( class_exists( 'acf' ) && class_exists( 'acf_options_page' ) ) ) {

			echo sprintf( '<p>%1s</p>', esc_html( 'The Controlled Chaos plugin registers custom fields for Advanced Custom Fields Pro that can be imported for editing. These built-in field goups must be deactivated for the imported field groups to take effect.', 'amcd-plugin' ) );

		}

	}

	/**
	 * Site Settings section callback.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function registered_fields_page_callback( $args ) {

		if ( class_exists( 'acf_pro' ) || ( class_exists( 'acf' ) && class_exists( 'acf_options_page' ) ) ) {

			$html = '<p><input type="checkbox" id="amcd_acf_activate_settings_page" name="amcd_acf_activate_settings_page" value="1" ' . checked( 1, get_option( 'amcd_acf_activate_settings_page' ), false ) . '/>';

			$html .= '<label for="amcd_acf_activate_settings_page"> '  . $args[0] . '</label></p>';

			echo $html;

		}

	}

	/**
	 * Include jQuery Migrate.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
    public function include_jquery_migrate( $scripts ) {

		if ( ! empty( $scripts->registered['jquery'] ) ) {

			$scripts->registered['jquery']->deps = array_diff( $scripts->registered['jquery']->deps, [ 'jquery-migrate' ] );

		}

	}

}

/**
 * Put an instance of the class into a function.
 *
 * @since  1.0.0
 * @access public
 * @return object Returns an instance of the class.
 */
function amcd_settings_fields_scripts() {

	return Settings_Fields_Scripts::instance();

}

// Run an instance of the class.
amcd_settings_fields_scripts();