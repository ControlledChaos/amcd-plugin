<?php
/**
 * Film + TV post type fields.
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
 * Film + TV post type fields.
 */
class Alana_Features {

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
				'key'    => 'group_5948b2c4ec0dd-2',
				'title'  => __( 'Features', 'amcd-plugin' ),
				'fields' =>[
					[
						'key'               => 'field_5982561e5eb94',
						'label'             => __( 'Info', 'amcd-plugin' ),
						'name'              => '',
						'type'              => 'tab',
						'instructions'      => '',
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
						'key'               => 'field_5948b2c4f2275',
						'label'             => __( 'Director', 'amcd-plugin' ),
						'name'              => 'amcd_project_director',
						'type'              => 'text',
						'instructions'      => __( 'Enter only the name of the director.', 'amcd-plugin' ),
						'required'          => 1,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'placeholder'       => '',
						'prepend'           => '',
						'append'            => '',
						'maxlength'         => '',
					],

					[
						'key'               => 'field_59825e49192ba',
						'label'             => __( 'Client', 'amcd-plugin' ),
						'name'              => 'amcd_project_client',
						'type'              => 'text',
						'instructions'      => __( 'Enter only the name of the production company.', 'amcd-plugin' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'placeholder'       => '',
						'prepend'           => '',
						'append'            => '',
						'maxlength'         => '',
					],
					[
						'key'               => 'field_5948b4fe4177e',
						'label'             => __( 'IMDb Page', 'amcd-plugin' ),
						'name'              => 'amcd_project_imdb_page',
						'type'              => 'url',
						'instructions'      => __( 'Paste the URL (web address) of the main page on IMBd.', 'amcd-plugin' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'placeholder'       => 'http://www.imdb.com/title/tt1234567/',
					],
					[
						'key'               => 'field_5948b699882a3',
						'label'             => __( 'Description', 'amcd-plugin' ),
						'name'              => 'amcd_project_description',
						'type'              => 'textarea',
						'instructions'      => __( 'Enter a brief description.', 'amcd-plugin' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'placeholder'       => '',
						'maxlength'         => '',
						'rows'              => '',
						'new_lines'         => 'wpautop',
					],
					[
						'key'               => 'field_5982564d5eb96',
						'label'             => __( 'Images', 'amcd-plugin' ),
						'name'              => '',
						'type'              => 'tab',
						'instructions'      => '',
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
						'key'               => 'field_5a34d017a35a7',
						'label'             => __( 'Project Image', 'amcd-plugin' ),
						'name'              => 'amcd_project_image',
						'type'              => 'image',
						'instructions'      => __( 'Minimum 960 X 540 pixels.', 'amcd-plugin' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'return_format'     => 'array',
						'preview_size'      => 'video-small',
						'library'           => 'all',
						'min_width'         => 960,
						'min_height'        => 540,
						'min_size'          => '',
						'max_width'         => '',
						'max_height'        => '',
						'max_size'          => '',
						'mime_types'        => 'jpg, jpeg, png',
					],
					[
						'key'               => 'field_5948b2c4f2639',
						'label'             => __( 'Project Gallery', 'amcd-plugin' ),
						'name'              => 'amcd_project_gallery',
						'type'              => 'gallery',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'min'               => '',
						'max'               => '',
						'insert'            => 'append',
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
						'key'               => 'field_598256325eb95',
						'label'             => __( 'Video', 'amcd-plugin' ),
						'name'              => '',
						'type'              => 'tab',
						'instructions'      => '',
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
						'key'               => 'field_5ba6c04ec02a1',
						'label'             => 'Video Source',
						'name'              => 'amcd_video_source',
						'type'              => 'radio',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'choices'           => [
							'vimeo'   => 'Vimeo',
							'youtube' => 'YouTube',
							'none'    => 'None'
						],
						'allow_null'        => 0,
						'other_choice'      => 0,
						'default_value'     => '',
						'layout'            => 'horizontal',
						'return_format'     => 'value',
						'save_other_choice' => 0,
					],
					[
						'key'               => 'field_5948b2c4f2479',
						'label'             => 'Vimeo ID',
						'name'              => 'amcd_project_vimeo_id',
						'type'              => 'text',
						'instructions'      => 'Example in red: https://vimeo.com/<strong style="color: #d00;">12345678</strong>',
						'required'          => 0,
						'conditional_logic' => [
							[
								[
									'field'    => 'field_5ba6c04ec02a1',
									'operator' => '==',
									'value'    => 'vimeo',
								],
							],
						],
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'placeholder'       => '',
						'prepend'           => '',
						'append'            => '',
						'maxlength'         => '',
					],
					[
						'key'               => 'field_5ba6c0cfc02a2',
						'label'             => 'YouTube ID',
						'name'              => 'amcd_project_youtube_id',
						'type'              => 'text',
						'instructions'      => 'Example in red: https://www.youtube.com/watch?v=<strong style="color: #d00;">123abc456de</strong>',
						'required'          => 0,
						'conditional_logic' => [
							[
								[
									'field'    => 'field_5ba6c04ec02a1',
									'operator' => '==',
									'value'    => 'youtube',
								],
							],
						],
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'placeholder'       => '',
						'prepend'           => '',
						'append'            => '',
						'maxlength'         => '',
					],
				],
				'location' => [
					[
						[
							'param'    => 'post_type',
							'operator' => '==',
							'value'    => 'amcd_features',
						],
					],
				],
				'menu_order'            => 0,
				'position'              => 'acf_after_title',
				'style'                 => 'seamless',
				'label_placement'       => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen'        => [
					0  => 'permalink',
					1  => 'the_content',
					2  => 'excerpt',
					3  => 'custom_fields',
					4  => 'discussion',
					5  => 'comments',
					6  => 'revisions',
					7  => 'slug',
					8  => 'author',
					9  => 'format',
					10 => 'page_attributes',
					11 => 'categories',
					12 => 'tags',
					13 => 'send-trackbacks',
					14 => 'featured_image'
				],
				'active'                => 1,
				'description'           => __( 'For the Features post type.', 'amcd-plugin' ),
			] );

		endif;

	}

}

$amcd_plugin_features_fields = new Alana_Features;