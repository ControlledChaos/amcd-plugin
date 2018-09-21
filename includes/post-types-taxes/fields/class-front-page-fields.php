<?php
/**
 * Front page fields.
 *
 * @package WordPress
 * @subpackage amcd-plugin
 * @since amcd-plugin 1.0.0
 */

namespace Alana;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Front page fields.
 */
class Alana_Front_Page_Fields {

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since	   1.0.0
	 * @param      string    $amcd-plugin
	 * @param      string    $version
	 */
    public function __construct() {

        // Register fields.
    	$this->fields();

	}
	
	/**
	 * Register fields.
	 */
	public function fields() {

		// Set up for future development possibilities.

	}

}

$amcd_plugin_front_page_fields = new Alana_Front_Page_Fields;
