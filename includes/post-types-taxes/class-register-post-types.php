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
         * Post Type: Sample custom post (Custom Posts).
         *
         * Renaming:
         * Search case "Custom Post" and replace with your post type capitalized name.
         * Search case "custom post" and replace with your post type lowercase name.
         * Search case "amcd_post_type" and replace with your post type database name.
         * Search case "custom-posts" and replace with your post type archive permalink slug.
         */

        $labels = [
            'name'                  => __( 'Custom Posts', 'amcd-plugin' ),
            'singular_name'         => __( 'Custom Post', 'amcd-plugin' ),
            'menu_name'             => __( 'Custom Posts', 'amcd-plugin' ),
            'all_items'             => __( 'All Custom Posts', 'amcd-plugin' ),
            'add_new'               => __( 'Add New', 'amcd-plugin' ),
            'add_new_item'          => __( 'Add New Custom Post', 'amcd-plugin' ),
            'edit_item'             => __( 'Edit Custom Post', 'amcd-plugin' ),
            'new_item'              => __( 'New Custom Post', 'amcd-plugin' ),
            'view_item'             => __( 'View Custom Post', 'amcd-plugin' ),
            'view_items'            => __( 'View Custom Posts', 'amcd-plugin' ),
            'search_items'          => __( 'Search Custom Posts', 'amcd-plugin' ),
            'not_found'             => __( 'No Custom Posts Found', 'amcd-plugin' ),
            'not_found_in_trash'    => __( 'No Custom Posts Found in Trash', 'amcd-plugin' ),
            'parent_item_colon'     => __( 'Parent Custom Post', 'amcd-plugin' ),
            'featured_image'        => __( 'Featured image for this custom post', 'amcd-plugin' ),
            'set_featured_image'    => __( 'Set featured image for this custom post', 'amcd-plugin' ),
            'remove_featured_image' => __( 'Remove featured image for this custom post', 'amcd-plugin' ),
            'use_featured_image'    => __( 'Use as featured image for this custom post', 'amcd-plugin' ),
            'archives'              => __( 'Custom Post archives', 'amcd-plugin' ),
            'insert_into_item'      => __( 'Insert into Custom Post', 'amcd-plugin' ),
            'uploaded_to_this_item' => __( 'Uploaded to this Custom Post', 'amcd-plugin' ),
            'filter_items_list'     => __( 'Filter Custom Posts', 'amcd-plugin' ),
            'items_list_navigation' => __( 'Custom Posts list navigation', 'amcd-plugin' ),
            'items_list'            => __( 'Custom Posts List', 'amcd-plugin' ),
            'attributes'            => __( 'Custom Post Attributes', 'amcd-plugin' ),
            'parent_item_colon'     => __( 'Parent Custom Post', 'amcd-plugin' ),
        ];

        // Apply a filter to labels for customization.
        $labels = apply_filters( 'amcd_custom_posts_labels', $labels );

        $args = [
            'label'               => __( 'Custom Posts', 'amcd-plugin' ),
            'labels'              => $labels,
            'description'         => __( 'Custom post type description.', 'amcd-plugin' ),
            'public'              => true,
            'publicly_queryable'  => true,
            'show_ui'             => true,
            'show_in_rest'        => false,
            'rest_base'           => 'amcd_post_type_rest_api',
            'has_archive'         => true,
            'show_in_menu'        => true,
            'exclude_from_search' => false,
            'capability_type'     => 'post',
            'map_meta_cap'        => true,
            'hierarchical'        => false,
            'rewrite'             => [
                'slug'       => 'custom-posts',
                'with_front' => true
            ],
            'query_var'           => 'amcd_post_type',
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-admin-post',
            'supports'            => [
                'title',
                'editor',
                'thumbnail',
                'excerpt',
                'trackbacks',
                'custom-fields',
                'comments',
                'revisions',
                'author',
                'page-attributes',
                'post-formats'
            ],
            'taxonomies'          => [
                'category',
                'post_tag',
                'amcd_taxonomy' // Change to your custom taxonomy name.
            ],
        ];

        // Apply a filter to arguments for customization.
        $args = apply_filters( 'amcd_custom_posts_args', $args );

        register_post_type(
            'amcd_post_type',
            $args
        );

    }

}

// Run the class.
new Post_Types_Register;