<?php
/**
 * Register post types.
 *
 * @package    Alana_Morshead
 * @subpackage Includes\Post_Types_Taxes
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 *
 * @link       https://codex.wordpress.org/Function_Reference/register_post_type
 */

namespace AMCD_Plugin\Includes\Post_Types_Taxes;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Register post types.
 *
 * @since  1.0.0
 * @access public
 */
final class Post_Types_Register {

    /**
	 * Constructor magic method.
     *
     * @since  1.0.0
	 * @access public
	 * @return self
	 */
	public function __construct() {

        // Register custom post types.
		add_action( 'init', [ $this, 'register' ] );

	}

    /**
     * Register custom post types.
     *
     * @since  1.0.0
	 * @access public
	 * @return void
     */
    public function register() {

        /**
		 * Post Type: Film+TV.
		 */

		$labels = [
			'name'                  => __( 'Features', 'amcd-plugin' ),
			'singular_name'         => __( 'Feature Project', 'amcd-plugin' ),
			'menu_name'             => __( 'Features', 'amcd-plugin' ),
			'all_items'             => __( 'All Features', 'amcd-plugin' ),
			'add_new'               => __( 'Add New', 'amcd-plugin' ),
			'add_new_item'          => __( 'Add New Feature Project', 'amcd-plugin' ),
			'edit_item'             => __( 'Edit Project', 'amcd-plugin' ),
			'new_item'              => __( 'New Feature Project', 'amcd-plugin' ),
			'view_item'             => __( 'View Project', 'amcd-plugin' ),
			'view_items'            => __( 'View Features', 'amcd-plugin' ),
			'search_items'          => __( 'Search Features', 'amcd-plugin' ),
			'not_found'             => __( 'No Features Found', 'amcd-plugin' ),
			'not_found_in_trash'    => __( 'No Features Found in Trash', 'amcd-plugin' ),
			'featured_image'        => __( 'Featured image for this project', 'amcd-plugin' ),
			'set_featured_image'    => __( 'Set featured image for this project', 'amcd-plugin' ),
			'remove_featured_image' => __( 'Remove featured image for this project', 'amcd-plugin' ),
			'use_featured_image'    => __( 'Use as featured image for this project', 'amcd-plugin' ),
			'archives'              => __( 'Feature archives', 'amcd-plugin' ),
			'insert_into_item'      => __( 'Insert into Project', 'amcd-plugin' ),
			'uploaded_to_this_item' => __( 'Uploaded to this Project', 'amcd-plugin' ),
			'filter_items_list'     => __( 'Filter Features', 'amcd-plugin' ),
			'items_list_navigation' => __( 'Features list navigation', 'amcd-plugin' ),
			'items_list'            => __( 'Features list', 'amcd-plugin' ),
			'attributes'            => __( 'Feature Attributes', 'amcd-plugin' ),
			'parent_item_colon'     => __( 'Parent Project', 'amcd-plugin' ),
		];

		$args = [
			'label'               => __( 'Features', 'amcd-plugin' ),
			'labels'              => $labels,
			'description'         => __( '', 'amcd-plugin' ),
			'public'              => true,
			'publicly_queryable'  => true,
			'show_ui'             => true,
			'show_in_rest'        => false,
			'rest_base'           => '',
			'has_archive'         => true,
			'show_in_menu'        => true,
			'exclude_from_search' => false,
			'capability_type'     => 'post',
			'map_meta_cap'        => true,
			'hierarchical'        => false,
			'rewrite'             => [
				'slug'       => 'projects',
				'with_front' => true
			],
			'query_var'           => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-format-video',
			'supports'            => [
				'title',
				'page-attributes',
				'thumbnail'
			]
        ];

		register_post_type(
            'amcd_features',
            $args
        );

		/**
		 * Post Type: Commercials.
		 */

		$labels = [
			'name'                  => __( 'Commercials', 'amcd-plugin' ),
			'singular_name'         => __( 'Commercial', 'amcd-plugin' ),
			'menu_name'             => __( 'Commercials', 'amcd-plugin' ),
			'all_items'             => __( 'All Commercials', 'amcd-plugin' ),
			'add_new'               => __( 'Add New', 'amcd-plugin' ),
			'add_new_item'          => __( 'Add New Commercial', 'amcd-plugin' ),
			'edit_item'             => __( 'Edit Commercial', 'amcd-plugin' ),
			'new_item'              => __( 'New Commercial', 'amcd-plugin' ),
			'view_item'             => __( 'View Commercial', 'amcd-plugin' ),
			'view_items'            => __( 'View Commercials', 'amcd-plugin' ),
			'search_items'          => __( 'Search Commercials', 'amcd-plugin' ),
			'not_found'             => __( 'No Commercials Found', 'amcd-plugin' ),
			'not_found_in_trash'    => __( 'No Commercials Found in Trash', 'amcd-plugin' ),
			'featured_image'        => __( 'Featured image for this commercial', 'amcd-plugin' ),
			'set_featured_image'    => __( 'Set featured image for this commercial', 'amcd-plugin' ),
			'remove_featured_image' => __( 'Remove featured image for this commercial', 'amcd-plugin' ),
			'use_featured_image'    => __( 'Use as featured image for this commercial', 'amcd-plugin' ),
			'archives'              => __( 'Commercial archives', 'amcd-plugin' ),
			'insert_into_item'      => __( 'Insert into Commercial', 'amcd-plugin' ),
			'uploaded_to_this_item' => __( 'Uploaded to this Commercial', 'amcd-plugin' ),
			'filter_items_list'     => __( 'Filter Commercials', 'amcd-plugin' ),
			'items_list_navigation' => __( 'Commercials list navigation', 'amcd-plugin' ),
			'items_list'            => __( 'Commercials list', 'amcd-plugin' ),
			'attributes'            => __( 'Commercial Attributes', 'amcd-plugin' ),
			'parent_item_colon'     => __( 'Parent Commercial', 'amcd-plugin' ),
		];

		$args = [
			'label'               => __( 'Commercials', 'amcd-plugin' ),
			'labels'              => $labels,
			'description'         => __( '', 'amcd-plugin' ),
			'public'              => true,
			'publicly_queryable'  => true,
			'show_ui'             => true,
			'show_in_rest'        => false,
			'rest_base'           => '',
			'has_archive'         => true,
			'show_in_menu'        => true,
			'exclude_from_search' => false,
			'capability_type'     => 'post',
			'map_meta_cap'        => true,
			'hierarchical'        => false,
			'rewrite'             => [
				'slug'       => 'commercials',
				'with_front' => true
			],
			'query_var'           => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-megaphone',
			'supports'            => [
				'title',
				'page-attributes',
				'thumbnail'
			],
			'taxonomies'          => [
				'post_tag'
			],
		];
		register_post_type(
            'amcd_commercials',
            $args
        );

    }

}

// Run the class.
new Post_Types_Register;