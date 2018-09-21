<?php
/**
 * Presentations post type fields.
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
 * Presentations post type fields.
 */
class Alana_Presentations_Fields {

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
				'key'    => 'group_5a3b538deb075',
				'title'  => __( 'Presentations', 'amcd-plugin' ),
				'fields' => [
					[
						'key'               => 'field_5a3b5bbdfb63b',
						'label'             => __( 'Presentation Video', 'amcd-plugin' ),
						'name'              => 'amcd_presentation_video',
						'type'              => 'post_object',
						'instructions'      => __( 'Select a video from the Media Library. Only files labeled with the "Videos" media type are available.', 'amcd-plugin' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'post_type'         => [
							0 => 'attachment',
						],
						'taxonomy'          => [
							0 => 'media_type:video',
						],
						'allow_null'        => 0,
						'multiple'          => 0,
						'return_format'     => 'id',
						'ui'                => 1,
					],
					[
						'key'               => 'field_5a3b6717fb1c0',
						'label'             => __( 'Presentation Description', 'amcd-plugin' ),
						'name'              => 'amcd_presentation_description',
						'type'              => 'wysiwyg',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'tabs'              => 'all',
						'toolbar'           => 'full',
						'media_upload'      => 1,
						'delay'             => 0,
					],
				],
				'location' => [
					[
						[
							'param'    => 'post_type',
							'operator' => '==',
							'value'    => 'amcd_presentations',
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
					9  => 'categories',
					10 => 'send-trackbacks',
				],
				'active'      => 1,
				'description' => __( 'For the Presentations post type.', 'amcd-plugin' ),
			] );

		endif;

	}

}

$amcd_plugin_presentations_fields = new Alana_Presentations_Fields;
