<?php
/**
 * Register taxonomies.
 *
 * @package    Alana_Morshead
 * @subpackage Includes\Post_Types_Taxes
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 *
 * @link       https://codex.wordpress.org/Function_Reference/register_taxonomy
 */

namespace AMCD_Plugin\Includes\Post_Types_Taxes;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Register taxonomies.
 *
 * @since  1.0.0
 * @access public
 */
final class Taxonomies_Register {

    /**
	 * Constructor magic method.
     *
     * @since  1.0.0
	 * @access public
	 * @return self
	 */
	public function __construct() {

        // Register custom taxonomies.
		add_action( 'init', [ $this, 'register' ] );

	}

    /**
     * Register custom taxonomies.
     *
     * @since  1.0.0
	 * @access public
	 * @return void
     */
    public function register() {

        $labels = [
            'name'                       => __( 'Media Types', 'amcd-plugin' ),
            'singular_name'              => __( 'Media Type', 'amcd-plugin' ),
            'menu_name'                  => __( 'Media Type', 'amcd-plugin' ),
            'all_items'                  => __( 'All Media Types', 'amcd-plugin' ),
            'edit_item'                  => __( 'Edit Media Type', 'amcd-plugin' ),
            'view_item'                  => __( 'View Media Type', 'amcd-plugin' ),
            'update_item'                => __( 'Update Media Type', 'amcd-plugin' ),
            'add_new_item'               => __( 'Add New Media Type', 'amcd-plugin' ),
            'new_item_name'              => __( 'New Media Type', 'amcd-plugin' ),
            'parent_item'                => __( 'Parent Media Type', 'amcd-plugin' ),
            'parent_item_colon'          => __( 'Parent Media Type', 'amcd-plugin' ),
            'popular_items'              => __( 'Popular Media Types', 'amcd-plugin' ),
            'separate_items_with_commas' => __( 'Separate Media Types with commas', 'amcd-plugin' ),
            'add_or_remove_items'        => __( 'Add or Remove Media Types', 'amcd-plugin' ),
            'choose_from_most_used'      => __( 'Choose from the most used Media Types', 'amcd-plugin' ),
            'not_found'                  => __( 'No Media Types Found', 'amcd-plugin' ),
            'no_terms'                   => __( 'No Media Types', 'amcd-plugin' ),
            'items_list_navigation'      => __( 'Media Types List Navigation', 'amcd-plugin' ),
            'items_list'                 => __( 'Media Types List', 'amcd-plugin' )
        ];

        $args = [
            'label'              => __( 'Media Types', 'amcd-plugin' ),
            'labels'             => $labels,
            'public'             => true,
            'hierarchical'       => false,
            'label'              => 'Media Types',
            'show_ui'            => true,
            'show_in_menu'       => true,
            'show_in_nav_menus'  => true,
            'query_var'          => true,
            'rewrite'            => [
                'slug'         => 'taxonomies',
                'with_front'   => true,
                'hierarchical' => false,
            ],
            'show_admin_column'  => true,
            'show_in_rest'       => true,
            'rest_base'          => 'taxonomies',
            'show_in_quick_edit' => true
        ];

        register_taxonomy(
            'amcd_taxonomy',
            [
                'attachment'
            ],
            $args
        );

    }

}

// Run the class.
new Taxonomies_Register;