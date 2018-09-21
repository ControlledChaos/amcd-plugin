<?php
/**
 * Snippets post type fields.
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
 * Snippets post type fields.
 */
class Alana_Snippets_Fields {

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
				'key'    => 'group_5a78ad759db76',
				'title'  => 'Snippets',
				'fields' => [
					[
						'key'               => 'field_5a78af14cc76b',
						'label'             => 'Media Type',
						'name'              => 'amcd_snippet_media_type',
						'type'              => 'button_group',
						'instructions'      => '',
						'required'          => 1,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'choices'           => [
							'image' => 'Image',
							'video' => 'Video',
						],
						'allow_null'        => 0,
						'default_value'     => 'image',
						'layout'            => 'horizontal',
						'return_format'     => 'value',
					],
					[
						'key'               => 'field_5a78af6dcc76c',
						'label'             => 'Image',
						'name'              => 'amcd_snippet_image',
						'type'              => 'image',
						'instructions'      => 'Image is required for videos as well, used as a preview thumbnail.',
						'required'          => 1,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'return_format'     => 'url',
						'preview_size'      => 'Large Thumbnail',
						'library'           => 'all',
						'min_width'         => '',
						'min_height'        => '',
						'min_size'          => '',
						'max_width'         => '',
						'max_height'        => '',
						'max_size'          => '',
						'mime_types'        => '',
					],
					[
						'key'               => 'field_5a7d0718336dc',
						'label'             => 'Video Source',
						'name'              => 'amcd_snippet_video_source',
						'type'              => 'button_group',
						'instructions'      => '',
						'required'          => 1,
						'conditional_logic' => [
							[
								[
									'field'    => 'field_5a78af14cc76b',
									'operator' => '==',
									'value'    => 'video',
								],
							],
						],
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'choices'           => [
							'library' => 'Media Library',
							'vimeo'   => 'Vimeo',
							'youtube' => 'YouTube',
						],
						'allow_null'        => 0,
						'default_value'     => 'library',
						'layout'            => 'horizontal',
						'return_format'     => 'value',
					],
					[
						'key'               => 'field_5a78afd6cc76d',
						'label'             => 'Video',
						'name'              => 'amcd_snippet_video',
						'type'              => 'url',
						'instructions'      => 'Enter the URL of the video.',
						'required'          => 1,
						'conditional_logic' => [
							[
								[
									'field'    => 'field_5a78af14cc76b',
									'operator' => '==',
									'value'    => 'video',
								],
							],
						],
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'default_value' => '',
						'placeholder'   => '',
					],
				],
				'location' => [
					[
						[
							'param'    => 'post_type',
							'operator' => '==',
							'value'    => 'amcd_snippets',
						],
					],
				],
				'menu_order'            => 0,
				'position'              => 'acf_after_title',
				'style'                 => 'seamless',
				'label_placement'       => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen'        => [
					0  => 'the_content',
					1  => 'excerpt',
					2  => 'custom_fields',
					3  => 'discussion',
					4  => 'comments',
					5  => 'revisions',
					6  => 'slug',
					7  => 'author',
					8  => 'format',
					9  => 'featured_image',
					10 => 'send-trackbacks',
				],
				'active'                => 1,
				'description'           => 'For the Snippets post type.',
			] );

		endif;

	}

}

$amcd_plugin_snippets_fields = new Alana_Snippets_Fields;
