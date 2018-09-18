<?php
/**
 * Settings fields for media options.
 *
 * @package    Alana_Morshead
 * @subpackage Admin
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace AMCD_Plugin\Admin;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Settings fields for media options.
 *
 * @since  1.0.0
 * @access public
 */
class Settings_Fields_Media {

    /**
	 * Get an instance of the class.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object Returns the instance.
	 */
	public static function instance() {

		// Varialbe for the instance to be used outside the class.
		static $instance = null;

		if ( is_null( $instance ) ) {

			// Set variable for new instance.
			$instance = new self;

		}

		// Return the instance.
		return $instance;

	}

    /**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return self
	 */
    public function __construct() {

        // Media settings.
        add_action( 'admin_init', [ $this, 'settings' ] );

        // Hard crop default image sizes.
        add_action( 'after_setup_theme', [ $this, 'crop' ] );

    }

    /**
	 * Media settings.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function settings() {

        /**
         * Image crop settings.
         */
        add_settings_field( 'amcd_hard_crop_medium', __( 'Medium size crop', 'amcd-plugin' ), [ $this, 'medium_crop' ], 'media', 'default', [ __( 'Crop thumbnail to exact dimensions (normally thumbnails are proportional)', 'amcd-plugin' ) ] );

        add_settings_field( 'amcd_hard_crop_large', __( 'Large size crop', 'amcd-plugin' ), [ $this, 'large_crop' ], 'media', 'default', [ __( 'Crop thumbnail to exact dimensions (normally thumbnails are proportional)', 'amcd-plugin' ) ] );

        register_setting(
            'media',
            'amcd_hard_crop_medium'
        );

        register_setting(
            'media',
            'amcd_hard_crop_large'
        );

        /**
         * SVG options.
         */
        add_settings_section( 'amcd-svg-settings', __( 'SVG Images', 'amcd-plugin' ), [ $this, 'svg_notice' ], 'media' );

        add_settings_field( 'amcd_add_svg_support', __( 'SVG Support', 'amcd-plugin' ), [ $this, 'svg_support' ], 'media', 'amcd-svg-settings', [ __( 'Add ability to upload SVG images to the media library.', 'amcd-plugin' ) ] );

        register_setting(
            'media',
            'amcd_add_svg_support'
        );

        /**
         * Fancybox settings.
         */
        add_settings_section( 'amcd-media-settings', __( 'Fancybox', 'amcd-plugin' ), [ $this, 'fancybox_description' ], 'media' );

        add_settings_field( 'amcd_enqueue_fancybox_script', __( 'Enqueue Fancybox script', 'amcd-plugin' ), [ $this, 'fancybox_script' ], 'media', 'amcd-media-settings', [ __( 'Needed for lightbox functionality.', 'amcd-plugin' ) ] );

        if ( ! current_theme_supports( 'ccd-fancybox' ) ) {
            add_settings_field( 'amcd_enqueue_fancybox_styles', __( 'Enqueue Fancybox styles', 'amcd-plugin' ), [ $this, 'fancybox_styles' ], 'media', 'amcd-media-settings', [ __( 'Leave unchecked to use a custom stylesheet in a theme.', 'amcd-plugin' ) ] );
        }

        register_setting(
            'media',
            'amcd_enqueue_fancybox_script'
        );

        if ( ! current_theme_supports( 'ccd-fancybox' ) ) {
            register_setting(
                'media',
                'amcd_enqueue_fancybox_styles'
            );
        }

    }

    /**
     * Medium crop field.
     *
     * @since  1.0.0
	 * @access public
	 * @return string
     */
    public function medium_crop( $args ) {

        $html = '<p><input type="checkbox" id="amcd_hard_crop_medium" name="amcd_hard_crop_medium" value="1" ' . checked( 1, get_option( 'amcd_hard_crop_medium' ), false ) . '/>';

        $html .= '<label for="amcd_hard_crop_medium"> '  . $args[0] . '</label></p>';

        echo $html;

    }

    /**
     * Large crop field.
     *
     * @since  1.0.0
	 * @access public
	 * @return string
     */
    public function large_crop( $args ) {

        $html = '<p><input type="checkbox" id="amcd_hard_crop_large" name="amcd_hard_crop_large" value="1" ' . checked( 1, get_option( 'amcd_hard_crop_large' ), false ) . '/>';

        $html .= '<label for="amcd_hard_crop_large"> '  . $args[0] . '</label></p>';

        echo $html;

    }

    /**
     * Update crop options.
     *
     * @since  1.0.0
	 * @access public
	 * @return void
     */
    public function crop() {

        if ( get_option( 'amcd_hard_crop_medium' ) ) {
            update_option( 'medium_crop', 1 );
        } else {
            update_option( 'medium_crop', 0 );
        }

        if ( get_option( 'amcd_hard_crop_large' ) ) {
            update_option( 'large_crop', 1 );
        } else {
            update_option( 'large_crop', 0 );
        }

    }

    /**
     * Add warning about using SVG images.
     *
     * @since  1.0.0
	 * @access public
	 * @return string
     */
    public function svg_notice() {

        $html = sprintf( '<p>%1s</p>', esc_html__( 'Use SVG images with caution! Only add support if you trust or examine each SVG file that you upload.', 'amcd-plugin' ) );

        echo $html;

    }

    /**
     * SVG options.
     *
     * @since  1.0.0
	 * @access public
	 * @return string
     *
     * @since    1.0.0
     */
    public function svg_support( $args ) {

        $html = '<p><input type="checkbox" id="amcd_add_svg_support" name="amcd_add_svg_support" value="1" ' . checked( 1, get_option( 'amcd_add_svg_support' ), false ) . '/>';

        $html .= '<label for="amcd_add_svg_support"> '  . $args[0] . '</label></p>';

        echo $html;

    }

    /**
     * Fancybox settings description.
     *
     * @since  1.0.0
	 * @access public
	 * @return string
     */
    public function fancybox_description() {

        $url  = 'http://fancyapps.com/fancybox/3/';
        $html = sprintf( '<p>%1s <a href="%2s" target="_blank">%3s</a></p>', esc_html__( 'Documentation on the Fancybox website:', 'amcd-plugin' ), esc_url( $url ), $url );

        echo $html;

    }

    /**
     * Fancybox script field.
     *
     * @since  1.0.0
	 * @access public
	 * @return string
     */
    public function fancybox_script( $args ) {

        $html = '<p><input type="checkbox" id="amcd_enqueue_fancybox_script" name="amcd_enqueue_fancybox_script" value="1" ' . checked( 1, get_option( 'amcd_enqueue_fancybox_script' ), false ) . '/>';

        $html .= '<label for="amcd_enqueue_fancybox_script"> '  . $args[0] . '</label></p>';

        echo $html;

    }

    /**
     * Fancybox styles field.
     *
     * @since  1.0.0
	 * @access public
	 * @return string
     */
    public function fancybox_styles( $args ) {

        $html = '<p><input type="checkbox" id="amcd_enqueue_fancybox_styles" name="amcd_enqueue_fancybox_styles" value="1" ' . checked( 1, get_option( 'amcd_enqueue_fancybox_styles' ), false ) . '/>';

        $html .= '<label for="amcd_enqueue_fancybox_styles"> '  . $args[0] . '</label></p>';

        echo $html;

    }

}

/**
 * Put an instance of the class into a function.
 *
 * @since  1.0.0
 * @access public
 * @return object Returns an instance of the class.
 */
function amcd_settings_fields_media() {

	return Settings_Fields_Media::instance();

}

// Run an instance of the class.
amcd_settings_fields_media();