<?php
/**
 * About page site settings output.
 *
 * Uses the universal slug partial for admin pages. Set this
 * slug in the core plugin file.
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
<h3><?php _e( 'Website settings', 'amcd-plugin' ); ?></h3>
<?php echo sprintf(
	'<p>%1s <a href="%2s">%3s</a> %4s</p>',
	__( 'The plugin is equipped with', 'amcd-plugin' ),
	esc_url( admin_url( '?page=' . AMCD_ADMIN_SLUG . '-settings' ) ),
	__( 'an admin page', 'amcd-plugin' ),
	__( 'for customizing the user interface of WordPress, as well as other useful features.', 'amcd-plugin' )
 ); ?>
<h3><?php _e( 'Clean Up the Admin', 'amcd-plugin' ); ?></h3>
<ul>
	<li><?php _e( 'Remove dashboard widgets: WordPress news, quick press', 'amcd-plugin' ); ?></li>
	<li><?php _e( 'Make Menus and Widgets top level menu items', 'amcd-plugin' ); ?></li>
	<li><?php _e( 'Remove select admin menu items', 'amcd-plugin' ); ?></li>
	<li><?php _e( 'Remove WordPress logo from admin bar', 'amcd-plugin' ); ?></li>
	<li><?php _e( 'Remove access to theme and plugin editors', 'amcd-plugin' ); ?></li>
</ul>
<h3><?php _e( 'Enchance the Admin', 'amcd-plugin' ); ?></h3>
<ul>
	<li><?php _e( 'Add three admin bar menus', 'amcd-plugin' ); ?></li>
	<li><?php _e( 'Add custom post types to the At a Glance widget', 'amcd-plugin' ); ?></li>
	<li><?php _e( 'Custom admin footer message', 'amcd-plugin' ); ?></li>
</ul>