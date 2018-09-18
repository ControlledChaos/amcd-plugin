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

        /**
         * Taxonomy: Sample taxonomy (Taxonomy).
         *
         * Renaming:
         * Search case "Taxonomy" and replace with your post type singular name.
         * Search case "Taxonomies" and replace with your post type plural name.
         * Search case "amcd_taxonomy" and replace with your taxonomy database name.
         * Search case "taxonomies" and replace with your taxonomy permalink slug.
         */

        $labels = [
            'name'                       => __( 'Taxonomies', 'amcd-plugin' ),
            'singular_name'              => __( 'Taxonomy', 'amcd-plugin' ),
            'menu_name'                  => __( 'Taxonomy', 'amcd-plugin' ),
            'all_items'                  => __( 'All Taxonomies', 'amcd-plugin' ),
            'edit_item'                  => __( 'Edit Taxonomy', 'amcd-plugin' ),
            'view_item'                  => __( 'View Taxonomy', 'amcd-plugin' ),
            'update_item'                => __( 'Update Taxonomy', 'amcd-plugin' ),
            'add_new_item'               => __( 'Add New Taxonomy', 'amcd-plugin' ),
            'new_item_name'              => __( 'New Taxonomy', 'amcd-plugin' ),
            'parent_item'                => __( 'Parent Taxonomy', 'amcd-plugin' ),
            'parent_item_colon'          => __( 'Parent Taxonomy', 'amcd-plugin' ),
            'popular_items'              => __( 'Popular Taxonomies', 'amcd-plugin' ),
            'separate_items_with_commas' => __( 'Separate Taxonomies with commas', 'amcd-plugin' ),
            'add_or_remove_items'        => __( 'Add or Remove Taxonomies', 'amcd-plugin' ),
            'choose_from_most_used'      => __( 'Choose from the most used Taxonomies', 'amcd-plugin' ),
            'not_found'                  => __( 'No Taxonomies Found', 'amcd-plugin' ),
            'no_terms'                   => __( 'No Taxonomies', 'amcd-plugin' ),
            'items_list_navigation'      => __( 'Taxonomies List Navigation', 'amcd-plugin' ),
            'items_list'                 => __( 'Taxonomies List', 'amcd-plugin' )
        ];

        $args = [
            'label'              => __( 'Taxonomies', 'amcd-plugin' ),
            'labels'             => $labels,
            'public'             => true,
            'hierarchical'       => false,
            'label'              => 'Taxonomies',
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
                'amcd_post_type'
            ],
            $args
        );

    }

}

// Run the class.
new Taxonomies_Register;