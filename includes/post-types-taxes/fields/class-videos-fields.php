<?php
/**
 * Videos post type fields.
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
 * Videos post type fields.
 */
class Alana_Videos_Fields {

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

		if ( function_exists( 'acf_add_local_field_group' ) ) :

			acf_add_local_field_group( [
				'key'    => 'group_5e8c9786220fb',
				'title'  => __( 'Music Videos', 'amcd-plugin' ),
				'fields' => [
					[
						'key'               => 'field_5e8c978640dfe',
						'label'             => __( 'Info', 'amcd-plugin' ),
						'name'              => '',
						'type'              => 'tab',
						'instructions'      => __( '', 'amcd-plugin' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'placement'         => 'top',
						'endpoint'          => 0,
					],
					[
						'key'               => 'field_5e8c978645b62',
						'label'             => __( 'Line One/Client', 'amcd-plugin' ),
						'name'              => 'amcd_video_client',
						'type'              => 'text',
						'instructions'      => __( '', 'amcd-plugin' ),
						'required'          => 1,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'acfe_permissions'  => '',
						'default_value'     => '',
						'placeholder'       => __( '', 'amcd-plugin' ),
						'prepend'           => '',
						'append'            => '',
						'maxlength'         => 32,
					],
					[
						'key'               => 'field_5e8c97864a97f',
						'label'             => __( 'Line Two/Title', 'amcd-plugin' ),
						'name'              => 'amcd_video_title',
						'type'              => 'text',
						'instructions'      => __( '', 'amcd-plugin' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'acfe_permissions'  => '',
						'default_value'     => '',
						'placeholder'       => __( '', 'amcd-plugin' ),
						'prepend'           => '',
						'append'            => '',
						'maxlength'         => 32,
					],
					[
						'key'               => 'field_5e8c97864f82f',
						'label'             => __( 'Director', 'amcd-plugin' ),
						'name'              => 'amcd_video_director',
						'type'              => 'text',
						'instructions'      => __( 'Enter only the name of the director.', 'amcd-plugin' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'acfe_permissions'  => '',
						'default_value'     => '',
						'placeholder'       => __( '', 'amcd-plugin' ),
						'prepend'           => '',
						'append'            => '',
						'maxlength'         => 24,
					],
					[
						'key'               => 'field_5e8c9786546d7',
						'label'             => __( 'Video', 'amcd-plugin' ),
						'name'              => '',
						'type'              => 'tab',
						'instructions'      => __( '', 'amcd-plugin' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'placement'         => 'top',
						'endpoint'          => 0,
					],
					[
						'key'               => 'field_5e8c97865948a',
						'label'             => __( 'Vimeo URL', 'amcd-plugin' ),
						'name'              => 'amcd_video_vimeo_id',
						'type'              => 'url',
						'instructions'      => __( 'Enter the basic URL for the Vimeo video.', 'amcd-plugin' ),
						'required'          => 1,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'acfe_permissions'  => '',
						'default_value'     => '',
						'placeholder'       => __( 'https://vimeo.com/123456789', 'amcd-plugin' ),
					],
					[
						'key'               => 'field_5e8c97865e2b3',
						'label'             => __( 'Images', 'amcd-plugin' ),
						'name'              => '',
						'type'              => 'tab',
						'instructions'      => __( '', 'amcd-plugin' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'placement'         => 'top',
						'endpoint'          => 0,
					],
					[
						'key'               => 'field_5e8c978663081',
						'label'             => __( 'Screenshot', 'amcd-plugin' ),
						'name'              => 'amcd_video_thumbnail',
						'type'              => 'image',
						'instructions'      => __( 'If no image is uploaded then the screenshot from Vimeo will be used.', 'amcd-plugin' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'acfe_permissions'  => '',
						'acfe_uploader'     => 'wp',
						'acfe_thumbnail'    => 0,
						'return_format'     => 'array',
						'preview_size'      => 'thumbnail',
						'library'           => 'all',
						'min_width'         => '',
						'min_height'        => '',
						'min_size'          => '',
						'max_width'         => '',
						'max_height'        => '',
						'max_size'          => '',
						'mime_types'        => '',
					],
				],
				'location' => [
					[
						[
							'param'    => 'post_type',
							'operator' => '==',
							'value'    => 'amcd_videos',
						],
					],
				],
				'menu_order'            => 1,
				'position'              => 'acf_after_title',
				'style'                 => 'seamless',
				'label_placement'       => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen'        => [
					0  => 'permalink',
					1  => 'block_editor',
					2  => 'the_content',
					3  => 'excerpt',
					4  => 'discussion',
					5  => 'comments',
					6  => 'revisions',
					7  => 'slug',
					8  => 'author',
					9  => 'format',
					10 => 'page_attributes',
					11 => 'featured_image',
					12 => 'categories',
					13 => 'tags',
					14 => 'send-trackbacks',
				],
				'active'             => true,
				'description'        => __( 'For the Commercials post type.', 'amcd-plugin' ),
				'acfe_display_title' => '',
				'acfe_autosync'      => '',
				'acfe_permissions'   => '',
				'acfe_form'          => 0,
				'acfe_meta'          => '',
				'acfe_note'          => '',
			] );

		endif;

	}

}

$amcd_plugin_videos_fields = new Alana_Videos_Fields;