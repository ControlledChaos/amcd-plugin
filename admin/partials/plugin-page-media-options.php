<?php
/**
 * About page media options output.
 *
 * @package    Alana_Morshead
 * @subpackage Admin\Partials
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace AMCD_Plugin\Admin\Partials;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
} ?>
<h2><?php _e( 'Media and Upload Options', 'amcd-plugin' ); ?></h2>
<h3><?php _e( 'Image Sizes', 'amcd-plugin' ); ?></h3>
<ul>
	<li><?php _e( 'Add option to hard crop the medium and/or large image sizes', 'amcd-plugin' ); ?></li>
	<li><?php _e( 'Add option to allow SVG uploads to the Media Library', 'amcd-plugin' ); ?></li>
</ul>
<h3><?php _e( 'Fancybox Presentation', 'amcd-plugin' ); ?></h3>
<h3><?php _e( 'SVG Uploads', 'amcd-plugin' ); ?></h3>