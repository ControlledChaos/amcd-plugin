<?php
/**
 * Settings for the Admin Menu tab on the Site Settings page.
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
 * Settings for the Admin Menu tab.
 *
 * @since  1.0.0
 * @access public
 */
class Settings_Fields_Site_Admin_Menu {

	/**
	 * Holds the values to be used in the fields callbacks.
	 *
	 * @var array
	 */
	private $options;

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

			// Require the class files.
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

		// Register settings sections and fields.
		add_action( 'admin_init', [ $this, 'settings' ] );

	}

	/**
	 * Class dependency files.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function dependencies() {

		// Callbacks for the Admin Menu tab.
		require AMCD_PATH . 'admin/partials/field-callbacks/class-admin-menu-callbacks.php';

	}

	/**
	 * Plugin site settings.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 *
	 * @link  https://codex.wordpress.org/Settings_API
	 */
	public function settings() {

		// Admin menu settings section.
		add_settings_section(
			'amcd-site-admin-menu',
			__( 'Admin Menu Settings', 'amcd-plugin' ),
			[],
			'amcd-site-admin-menu'
		);

		// Site Settings page position.
		add_settings_field(
			'amcd_site_settings_position',
			__( 'Site Settings Position', 'amcd-plugin' ),
			[ Partials\Field_Callbacks\Admin_Menu_Callbacks::instance(), 'site_settings_position' ],
			'amcd-site-admin-menu',
			'amcd-site-admin-menu',
			[ esc_html__( 'Make this settings page a top-level link and hide other settings links.', 'amcd-plugin' ) ]
		);

		register_setting(
			'amcd-site-admin-menu',
			'amcd_site_settings_position'
		);

		// Site Settings page link label.
		add_settings_field(
			'amcd_site_settings_link_label',
			__( 'Site Settings Label', 'amcd-plugin' ),
			[ Partials\Field_Callbacks\Admin_Menu_Callbacks::instance(), 'site_settings_link_label' ],
			'amcd-site-admin-menu',
			'amcd-site-admin-menu',
			[ esc_html__( 'Change the label of the link to this page', 'amcd-plugin' ) ]
		);

		register_setting(
			'amcd-site-admin-menu',
			'amcd_site_settings_link_label'
		);

		// Site Settings page link icon if set to top level.
		add_settings_field(
			'amcd_site_settings_link_icon',
			__( 'Site Settings Icon', 'amcd-plugin' ),
			[ Partials\Field_Callbacks\Admin_Menu_Callbacks::instance(), 'site_settings_link_icon' ],
			'amcd-site-admin-menu',
			'amcd-site-admin-menu',
			[ esc_html__( 'Enter a Dashicons CSS class for the icon of the link to this page', 'amcd-plugin' ) ]
		);

		register_setting(
			'amcd-site-admin-menu',
			'amcd_site_settings_link_icon'
		);

		// Site Plugin page position.
		add_settings_field(
			'amcd_site_plugin_link_position',
			__( 'Site Plugin Position', 'amcd-plugin' ),
			[ Partials\Field_Callbacks\Admin_Menu_Callbacks::instance(), 'site_plugin_position' ],
			'amcd-site-admin-menu',
			'amcd-site-admin-menu',
			[ esc_html__( 'Make the site-specific plugin admin page a top-level link.', 'amcd-plugin' ) ]
		);

		register_setting(
			'amcd-site-admin-menu',
			'amcd_site_plugin_link_position'
		);

		// Site Plugin page link label.
		add_settings_field(
			'amcd_site_plugin_link_label',
			__( 'Site Plugin Label', 'amcd-plugin' ),
			[ Partials\Field_Callbacks\Admin_Menu_Callbacks::instance(), 'site_plugin_link_label' ],
			'amcd-site-admin-menu',
			'amcd-site-admin-menu',
			[ esc_html__( 'Change the label of the link to the site-specific plugin page', 'amcd-plugin' ) ]
		);

		register_setting(
			'amcd-site-admin-menu',
			'amcd_site_plugin_link_label'
		);

		// Site Plugin page link icon if set to top level.
		add_settings_field(
			'amcd_site_plugin_link_icon',
			__( 'Site Plugin Icon', 'amcd-plugin' ),
			[ Partials\Field_Callbacks\Admin_Menu_Callbacks::instance(), 'site_plugin_link_icon' ],
			'amcd-site-admin-menu',
			'amcd-site-admin-menu',
			[ esc_html__( 'Enter a Dashicons CSS class for the icon of the link to the site-specific plugin page', 'amcd-plugin' ) ]
		);

		register_setting(
			'amcd-site-admin-menu',
			'amcd_site_plugin_link_icon'
		);

		// Menus link position.
		add_settings_field(
			'amcd_menus_position',
			__( 'Menus Position', 'amcd-plugin' ),
			[ Partials\Field_Callbacks\Admin_Menu_Callbacks::instance(), 'menus_position' ],
			'amcd-site-admin-menu',
			'amcd-site-admin-menu',
			[ esc_html__( 'Make Menus a top-level link', 'amcd-plugin' ) ]
		);

		register_setting(
			'amcd-site-admin-menu',
			'amcd_menus_position'
		);

		// Widgets link position.
		add_settings_field(
			'amcd_widgets_position',
			__( 'Widgets Position', 'amcd-plugin' ),
			[ Partials\Field_Callbacks\Admin_Menu_Callbacks::instance(), 'widgets_position' ],
			'amcd-site-admin-menu',
			'amcd-site-admin-menu',
			[ esc_html__( 'Make Widgets a top-level link', 'amcd-plugin' ) ]
		);

		register_setting(
			'amcd-site-admin-menu',
			'amcd_widgets_position'
		);

		// Hide Appearance link.
		add_settings_field(
			'amcd_hide_appearance',
			__( 'Hide Appearance', 'amcd-plugin' ),
			[ Partials\Field_Callbacks\Admin_Menu_Callbacks::instance(), 'hide_appearance' ],
			'amcd-site-admin-menu',
			'amcd-site-admin-menu',
			[ esc_html__( 'Hide the Appearance link in the admin menu', 'amcd-plugin' ) ]
		);

		register_setting(
			'amcd-site-admin-menu',
			'amcd_hide_appearance'
		);

		// Hide Plugins link.
		add_settings_field(
			'amcd_hide_plugins',
			__( 'Hide Plugins', 'amcd-plugin' ),
			[ Partials\Field_Callbacks\Admin_Menu_Callbacks::instance(), 'hide_plugins' ],
			'amcd-site-admin-menu',
			'amcd-site-admin-menu',
			[ esc_html__( 'Hide the Plugins link in the admin menu', 'amcd-plugin' ) ]
		);

		register_setting(
			'amcd-site-admin-menu',
			'amcd_hide_plugins'
		);

		// Hide Users link.
		add_settings_field(
			'amcd_hide_users',
			__( 'Hide Users', 'amcd-plugin' ),
			[ Partials\Field_Callbacks\Admin_Menu_Callbacks::instance(), 'hide_users' ],
			'amcd-site-admin-menu',
			'amcd-site-admin-menu',
			[ esc_html__( 'Hide the Users link in the admin menu', 'amcd-plugin' ) ]
		);

		register_setting(
			'amcd-site-admin-menu',
			'amcd_hide_users'
		);

		// Hide Tools link.
		add_settings_field(
			'amcd_hide_tools',
			__( 'Hide Tools', 'amcd-plugin' ),
			[ Partials\Field_Callbacks\Admin_Menu_Callbacks::instance(), 'hide_tools' ],
			'amcd-site-admin-menu',
			'amcd-site-admin-menu',
			[ esc_html__( 'Hide the Tools link in the admin menu', 'amcd-plugin' ) ]
		);

		register_setting(
			'amcd-site-admin-menu',
			'amcd_hide_tools'
		);

		// Show/Hide Links Manager link.
		add_settings_field(
			'amcd_hide_links',
			__( 'Restore Links Manager', 'amcd-plugin' ),
			[ Partials\Field_Callbacks\Admin_Menu_Callbacks::instance(), 'hide_links' ],
			'amcd-site-admin-menu',
			'amcd-site-admin-menu',
			[ esc_html__( 'The old Links Manager is hidden by default in newer WordPress installations', 'amcd-plugin' ) ]
		);

		register_setting(
			'amcd-site-admin-menu',
			'amcd_hide_links'
		);

	}

}

/**
 * Put an instance of the class into a function.
 *
 * @since  1.0.0
 * @access public
 * @return object Returns an instance of the class.
 */
function amcd_settings_fields_site_admin_menu() {

	return Settings_Fields_Site_Admin_Menu::instance();

}

// Run an instance of the class.
amcd_settings_fields_site_admin_menu();