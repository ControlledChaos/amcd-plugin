<?php
/**
 * Callbacks for the Admin Menu tab on the Site Settings page.
 *
 * @package    Alana_Morshead
 * @subpackage Admin\Partials\Field_Callbacks
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace AMCD_Plugin\Admin\Partials\Field_Callbacks;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Callbacks for the Admin Menu tab.
 *
 * @since  1.0.0
 * @access public
 */
class Admin_Menu_Callbacks {

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
	public function __construct() {}

	/**
	 * Site Settings page position.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  array $args Extra arguments passed into the callback function.
	 * @return string
	 */
	public function site_settings_position( $args ) {

		$option = get_option( 'amcd_site_settings_position' );

		$html = '<p><input type="checkbox" id="amcd_site_settings_position" name="amcd_site_settings_position" value="1" ' . checked( 1, $option, false ) . '/>';

		$html .= '<label for="amcd_site_settings_position"> '  . $args[0] . '</label></p>';

		echo $html;

	}

	/**
	 * Site Settings page link label.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  array $args Extra arguments passed into the callback function.
	 * @return string
	 */
	public function site_settings_link_label( $args ) {

		$option = get_option( 'amcd_site_settings_link_label' );

		$html = '<p><input type="text" size="50" id="amcd_site_settings_link_label" name="amcd_site_settings_link_label" value="' . esc_attr( $option ) . '" placeholder="' . esc_attr( __( 'Site Settings', 'amcd-plugin' ) ) . '" /><br />';

		$html .= '<label for="amcd_site_settings_link_label"> ' . $args[0] . '</label></p>';

		echo $html;

	}

	/**
	 * Site Settings page link icon.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  array $args Extra arguments passed into the callback function.
	 * @return string
	 */
	public function site_settings_link_icon( $args ) {

		$option = get_option( 'amcd_site_settings_link_icon' );

		$html = '<p><input type="text" size="50" id="amcd_site_settings_link_icon" name="amcd_site_settings_link_icon" value="' . esc_attr( $option ) . '" placeholder="' . esc_attr( __( 'dashicons-admin-settings', 'amcd-plugin' ) ) . '" /><br />';

		$html .= '<label for="amcd_site_settings_link_icon"> ' . $args[0] . '</label>';

		$html .= '<br /><span class="description">' . esc_html( 'Takes affect in the admin menu only if the page is top level. Always takes affect on the plugin page tab for Site Settings.' ) . '</span></p>';

		echo $html;

	}

	/**
	 * Site Plugin page position.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  array $args Extra arguments passed into the callback function.
	 * @return string
	 */
	public function site_plugin_position( $args ) {

		$option = get_option( 'amcd_site_plugin_link_position' );

		$html = '<p><input type="checkbox" id="amcd_site_plugin_link_position" name="amcd_site_plugin_link_position" value="1" ' . checked( 1, $option, false ) . '/>';

		$html .= '<label for="amcd_site_plugin_link_position"> '  . $args[0] . '</label></p>';

		echo $html;

	}

	/**
	 * Site Plugin page link label.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  array $args Extra arguments passed into the callback function.
	 * @return string
	 */
	public function site_plugin_link_label( $args ) {

		$option = get_option( 'amcd_site_plugin_link_label' );

		$html = '<p><input type="text" size="50" id="amcd_site_plugin_link_label" name="amcd_site_plugin_link_label" value="' . esc_attr( $option ) . '" placeholder="' . esc_attr( __( 'Site Plugin', 'amcd-plugin' ) ) . '" /><br />';

		$html .= '<label for="amcd_site_plugin_link_label"> ' . $args[0] . '</label></p>';

		echo $html;

	}

	/**
	 * Site Plugin page link icon.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  array $args Extra arguments passed into the callback function.
	 * @return string
	 */
	public function site_plugin_link_icon( $args ) {

		$option = get_option( 'amcd_site_plugin_link_icon' );

		$html = '<p><input type="text" size="50" id="amcd_site_settings_link_icon" name="amcd_site_plugin_link_icon" value="' . esc_attr( $option ) . '" placeholder="' . esc_attr( __( 'dashicons-welcome-learn-more', 'amcd-plugin' ) ) . '" /><br />';

		$html .= '<label for="amcd_site_plugin_link_icon"> ' . $args[0] . '</label>';

		$html .= '<br /><span class="description">' . esc_html( 'Takes affect in the admin menu only if the page is top level. Always takes affect on the plugin page tab for Site Settings.' ) . '</span></p>';

		echo $html;

	}

	/**
	 * Menus link position.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  array $args Extra arguments passed into the callback function.
	 * @return string
	 */
	public function menus_position( $args ) {

		$option = get_option( 'amcd_menus_position' );

		$html = '<p><input type="checkbox" id="amcd_menus_position" name="amcd_menus_position" value="1" ' . checked( 1, $option, false ) . '/>';

		$html .= '<label for="amcd_menus_position"> '  . $args[0] . '</label></p>';

		echo $html;

	}

	/**
	 * Widgets link position.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  array $args Extra arguments passed into the callback function.
	 * @return string
	 */
	public function widgets_position( $args ) {

		$option = get_option( 'amcd_widgets_position' );

		$html = '<p><input type="checkbox" id="amcd_widgets_position" name="amcd_widgets_position" value="1" ' . checked( 1, $option, false ) . '/>';

		$html .= '<label for="amcd_widgets_position"> '  . $args[0] . '</label></p>';

		echo $html;

	}

	/**
	 * Hide Appearance link.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  array $args Extra arguments passed into the callback function.
	 * @return string
	 */
	public function hide_appearance( $args ) {

		$option = get_option( 'amcd_hide_appearance' );

		$html = '<p><input type="checkbox" id="amcd_hide_appearance" name="amcd_hide_appearance" value="1" ' . checked( 1, $option, false ) . '/>';

		$html .= '<label for="amcd_hide_appearance"> '  . $args[0] . '</label></p>';

		echo $html;

	}

	/**
	 * Hide Plugins link.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  array $args Extra arguments passed into the callback function.
	 * @return string
	 */
	public function hide_plugins( $args ) {

		$option = get_option( 'amcd_hide_plugins' );

		$html = '<p><input type="checkbox" id="amcd_hide_plugins" name="amcd_hide_plugins" value="1" ' . checked( 1, $option, false ) . '/>';

		$html .= '<label for="amcd_hide_plugins"> '  . $args[0] . '</label></p>';

		echo $html;

	}

	/**
	 * Hide Users link.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  array $args Extra arguments passed into the callback function.
	 * @return string
	 */
	public function hide_users( $args ) {

		$option = get_option( 'amcd_hide_users' );

		$html = '<p><input type="checkbox" id="amcd_hide_users" name="amcd_hide_users" value="1" ' . checked( 1, $option, false ) . '/>';

		$html .= '<label for="amcd_hide_users"> '  . $args[0] . '</label></p>';

		echo $html;

	}

	/**
	 * Hide Tools link.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  array $args Extra arguments passed into the callback function.
	 * @return string
	 */
	public function hide_tools( $args ) {

		$option = get_option( 'amcd_hide_tools' );

		$html = '<p><input type="checkbox" id="amcd_hide_tools" name="amcd_hide_tools" value="1" ' . checked( 1, $option, false ) . '/>';

		$html .= '<label for="amcd_hide_tools"> ' . $args[0] . '</label></p>';

		echo $html;

	}

	/**
	 * Show/Hide Links Manager link.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  array $args Extra arguments passed into the callback function.
	 * @return string
	 */
	public function hide_links( $args ) {

		$option = get_option( 'amcd_hide_links' );

		$html = '<p><input type="checkbox" id="amcd_hide_links" name="amcd_hide_links" value="1" ' . checked( 1, $option, false ) . '/>';

		$html .= '<label for="amcd_hide_links"> ' . $args[0] . '</label></p>';

		echo $html;

	}

}

/**
 * Put an instance of the class into a function.
 *
 * @since  1.0.0
 * @access public
 * @return object Returns an instance of the class.
 */
function amcd_admin_menu_callbacks() {

	return Admin_Menu_Callbacks::instance();

}

// Run an instance of the class.
amcd_admin_menu_callbacks();