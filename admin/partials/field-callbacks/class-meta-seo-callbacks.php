<?php
/**
 * Callbacks for the Meta/SEO tab on the Site Settings page.
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
 * Callbacks for the Meta/SEO tab.
 *
 * @since  1.0.0
 * @access public
 */
class Meta_SEO_Callbacks {

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
	 * Disable meta tags.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  array $args Extra arguments passed into the callback function.
	 * @return string
	 */
	public function disable_meta( $args ) {

		$option = get_option( 'amcd_meta_disable' );

		$html = '<p><input type="checkbox" id="amcd_meta_disable" name="amcd_meta_disable" value="1" ' . checked( 1, $option, false ) . '/>';

		$html .= '<label for="amcd_meta_disable"> '  . $args[0] . '</label></p>';

		echo $html;

	}

	/**
	 * Organization Schema type callback.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  array $args
	 * @return string Returns the select box of options.
	 */
	public function  schema_org_type( $args ) {

		// Get the field file.
		include_once AMCD_PATH . 'admin/partials/field-callbacks/schema-org-type.php';

	}

}

/**
 * Put an instance of the class into a function.
 *
 * @since  1.0.0
 * @access public
 * @return object Returns an instance of the class.
 */
function amcd_meta_seo_callbacks() {

	return Meta_SEO_Callbacks::instance();

}

// Run an instance of the class.
amcd_meta_seo_callbacks();