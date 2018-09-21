<?php
/**
 * Gallery page fields.
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
 * Gallery page fields.
 */
class Alana_Gallery_Page_Fields {

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

			$message = sprintf(
				'<p>%1s</p>
				<p>%2s</p>
				<ul style="list-style: disc; margin: 0 1em;">
					<li>%3s</li>
					<li>%4s</li>
					<li>%5s</li>
					<li>%6s</li>
					<li>%7s</li>
				</ul>',
				__( 'The best practice is to first upload images via the Media Library, add project information to each image, and crop various sizes via the Post Thumbnail Editor link on the "Attachment Details" screen.', 'amcd-plugin' ),
				__( 'Galleries with images in multiples of six (6, 12, 18, 24...) will fit best across all device sizes.', 'amcd-plugin' ),
				__( 'Toggle galleries open & closed by clicking on the arrow at top left corner of each gallery; must first hover to see the arrow.', 'amcd-plugin' ),
				__( 'Grab galleries on the left side to drag and drop the order.', 'amcd-plugin' ),
				__( 'Hover right side of each gallery to add or remove galleries.', 'amcd-plugin' ),
				__( 'Click on thumbnails to edit project information.', 'amcd-plugin' ),
				__( 'Drag & drop thumbnails to sort the order of presentation.', 'amcd-plugin' )
			);

			acf_add_local_field_group( [
				'key'    => 'group_5a3bf04d3ad46',
				'title'  => __( 'Gallery Page', 'amcd-plugin' ),
				'fields' => [
					[
						'key'               => 'field_5a4254b67b686',
						'label'             => __( 'Instructions', 'amcd-plugin' ),
						'name'              => '',
						'type'              => 'message',
						'instructions'      => __( '', 'amcd-plugin' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => 'admin-gallery-page-edit-message',
							'id'    => '',
						],
						'message'           => $message,
						'new_lines'         => 'wpautop',
						'esc_html'          => 0,
					],
					[
						'key'               => 'field_5a3bf27d15c3d',
						'label'             => __( 'Galleries', 'amcd-plugin' ),
						'name'              => 'amcd_image_galleries',
						'type'              => 'repeater',
						'instructions'      => __( '', 'amcd-plugin' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => 'admin-gallery-page-edit-galleries',
							'id'    => '',
						],
						'collapsed'         => 'field_5a3bf2b715c3e',
						'min'               => 0,
						'max'               => 0,
						'layout'            => 'block',
						'button_label'      => __( 'Add Gallery', 'amcd-plugin' ),
						'sub_fields'        => [
							[
								'key'               => 'field_5a3bf2b715c3e',
								'label'             => __( 'Gallery Title', 'amcd-plugin' ),
								'name'              => 'amcd_image_gallery_title',
								'type'              => 'text',
								'instructions'      => __( '', 'amcd-plugin' ),
								'required'          => 0,
								'conditional_logic' => 0,
								'wrapper'           => [
									'width' => '',
									'class' => 'admin-gallery-page-edit-gallery-title',
									'id'    => '',
								],
								'default_value'     => '',
								'placeholder'       => '',
								'prepend'           => '',
								'append'            => '',
								'maxlength'         => '',
							],
							[
								'key'               => 'field_5a3bf2d015c3f',
								'label'             => __( 'Gallery Images', 'amcd-plugin' ),
								'name'              => 'amcd_image_gallery',
								'type'              => 'gallery',
								'instructions'      => __( 'Minimum of 960 pixels wide by 720 pixels high.', 'amcd-plugin' ),
								'required'          => 0,
								'conditional_logic' => 0,
								'wrapper'           => [
									'width' => '',
									'class' => 'admin-gallery-page-edit-gallery',
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
						],
					],
				],
				'location' => [
					[
						[
							'param'    => 'page_template',
							'operator' => '==',
							'value'    => 'page-templates/page-gallery.php',
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
					1  => 'custom_fields',
					2  => 'discussion',
					3  => 'comments',
					4  => 'revisions',
					5  => 'slug',
					6  => 'author',
					7  => 'format',
					8  => 'categories',
					9  => 'tags',
					10 => 'send-trackbacks',
				],
				'active'                => 1,
				'description'           => __( 'For the Gallery page.', 'amcd-plugin' ),
			] );

		endif;

	}

}

$amcd_plugin_gallery_page_fields = new Alana_Gallery_Page_Fields;
