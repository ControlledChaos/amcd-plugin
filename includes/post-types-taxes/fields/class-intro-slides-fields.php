<?php
/**
 * Intro slides fields.
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
 * Intro slides fields.
 */
class Alana_Intro_Slides_Fields {

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
				'key'    => 'group_5a35ea67c1665',
				'title'  => __( 'Intro Slides', 'amcd-plugin' ),
				'fields' => [
					[
						'key'               => 'field_5a3acf07addba',
						'label'             => __( 'Slideshow Animation', 'amcd-plugin' ),
						'name'              => 'amcd_front_page_slides_animation',
						'type'              => 'button_group',
						'instructions'      => __( 'Slides will cross fade either way.', 'amcd-plugin' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'choices'           => [
							'static' => __( 'Static', 'amcd-plugin' ),
							'burns'  => __( 'Ken Burns', 'amcd-plugin' ),
						],
						'allow_null'        => 0,
						'default_value'     => 'static',
						'layout'            => 'horizontal',
						'return_format'     => 'value',
					],
					[
						'key'               => 'field_5a35efb085502',
						'label'             => __( 'Slides', 'amcd-plugin' ),
						'name'              => 'amcd_front_page_slides',
						'type'              => 'repeater',
						'instructions'      => __( '<p><em>Minimum of 2048 pixels wide by 1536 pixels high is required for decent display on large retina devices such as iPad. Try to use images with a central focal point so that the subject is visible in both landscape and portrait modes on mobile screens.</em></p><p><em>Drag and drop to set the presentation order.</em></p>', 'amcd-plugin' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'collapsed'         => 'field_5a35eaaec9234',
						'min'               => 1,
						'max'               => 5,
						'layout'            => 'block',
						'button_label'      => __( 'Add Slide', 'amcd-plugin' ),
						'sub_fields'        => [
							[
								'key'               => 'field_5a35eaaec9234',
								'label'             => __( 'Slide Image', 'amcd-plugin' ),
								'name'              => 'amcd_slide_image',
								'type'              => 'image',
								'instructions'      => __( '', 'amcd-plugin' ),
								'required'          => 0,
								'conditional_logic' => 0,
								'wrapper'           => [
									'width' => '',
									'class' => '',
									'id'    => '',
								],
								'return_format'     => 'array',
								'preview_size'      => 'medium',
								'library'           => 'all',
								'min_width'         => 2048,
								'min_height'        => 1536,
								'min_size'          => '',
								'max_width'         => '',
								'max_height'        => '',
								'max_size'          => '',
								'mime_types'        => '',
							],
							[
								'key'               => 'field_5a3977444034a',
								'label'             => 'Horizontal Alignment',
								'name'              => 'amcd_slide_horizontal_align',
								'type'              => 'button_group',
								'instructions'      => 'The focal point of the slide may be slightly left or right of center.',
								'required'          => 0,
								'conditional_logic' => 0,
								'wrapper'           => [
									'width' => '',
									'class' => '',
									'id'    => '',
								],
								'choices'           => [
									'center' => 'Center',
									'left'   => 'Left',
									'right'  => 'Right',
								],
								'allow_null'        => 0,
								'default_value'     => 'center',
								'layout'            => 'horizontal',
								'return_format'     => 'value',
							],
							[
								'key'               => 'field_5a39f59a2b67f',
								'label'             => 'Vertical Alignment',
								'name'              => 'amcd_slide_vertical_align',
								'type'              => 'button_group',
								'instructions'      => 'The focal point of the slide may be slightly above or below center.',
								'required'          => 0,
								'conditional_logic' => 0,
								'wrapper'           => [
									'width' => '',
									'class' => '',
									'id'    => '',
								],
								'choices'           => [
									'center' => 'Center',
									'top'    => 'Top',
									'below'  => 'Below',
								],
								'allow_null'        => 0,
								'default_value'     => 'center',
								'layout'            => 'horizontal',
								'return_format'     => 'value',
							],
						],
					],
				],
				'location' => [
					[
						[
							'param'    => 'page_type',
							'operator' => '==',
							'value'    => 'front_page',
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
					10 => 'tags',
					11 => 'send-trackbacks',
				],
				'active'                => 1,
				'description'           => __( 'For the Intro Slides on the front page.', 'amcd-plugin' ),
			] );

		endif;

	}

}

$amcd_plugin_intro_slides_fields = new Alana_Intro_Slides_Fields;