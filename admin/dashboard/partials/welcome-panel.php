<?php
/**
 * Custom welcome panel output.
 *
 * Provided are several widget areas and hooks for adding content.
 * The `do_action` hooks are named and placed to be similar to the
 * before and after pseudoelements in CSS.
 *
 * @package    Alana_Morshead
 * @subpackage Admin\Dashboard
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace AMCD_Plugin\Admin\Dashboard;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Get the current user name for the greeting.
$current_user = wp_get_current_user();
$user_name    = $current_user->display_name;

// Add a filterable description.
$about_desc = apply_filters( 'amcd_welcome_about', __( 'Following are some handy links to help you keep your portfolio fresh.', 'amcd-plugin' ) );

$resume_page  = get_page_by_path( 'resume' );
$contact_page = get_page_by_path( 'contact' );

if ( $resume_page ) {
    $resume_link   = admin_url( 'post.php?post=' . $resume_page->ID . '&action=edit' );
} else {
    $resume_link = '';
}

if ( $contact_page ) {
    $contact_link   = admin_url( 'post.php?post=' . $contact_page->ID . '&action=edit' );
} else {
    $contact_link = '';
} ?>
<?php echo sprintf(
	'<h2>%1s %2s.</h2>',
	esc_html__( 'Welcome,', 'amcd-plugin' ),
	$user_name
); ?>
<p class="about-description"><?php echo $about_desc; ?></p>
<div class="amcd-dashboard-summary">
    <?php wp_dashboard_right_now(); ?>
</div>
<div class="amcd-dashboard-post-managment">
    <header class="amcd-dashboard-section-header">
        <h3><?php _e( 'Manage Your Portfolio', 'amcd-plugin' ); ?></h3>
    </header>
    <ul class="amcd-dashboard-post-type-actions">
        <li>
            <h4><?php _e( 'Features', 'amcd-plugin' ); ?></h4>
            <div class="amcd-dashboard-post-type-actions-icon features-icon"><span class="dashicons dashicons-format-video"></span></div>
            <p>
                <a href="<?php echo admin_url( 'post-new.php?post_type=amcd_features' ); ?>"><?php _e( 'Add New', 'amcd-plugin' ); ?></a>
                <a href="<?php echo admin_url( 'edit.php?post_type=amcd_features' ); ?>"><?php _e( 'View List', 'amcd-plugin' ); ?></a>
            </p>
        </li>
        <li>
            <h4><?php _e( 'Commercials', 'amcd-plugin' ); ?></h4>
            <div class="amcd-dashboard-post-type-actions-icon commercials-icon"><span class="dashicons dashicons-megaphone"></span></div>
            <p>
                <a href="<?php echo admin_url( 'post-new.php?post_type=amcd_commercials' ); ?>"><?php _e( 'Add New', 'amcd-plugin' ); ?></a>
                <a href="<?php echo admin_url( 'edit.php?post_type=amcd_commercials' ); ?>"><?php _e( 'View List', 'amcd-plugin' ); ?></a>
            </p>
		</li>
		<li>
            <h4><?php _e( 'Music Videos', 'amcd-plugin' ); ?></h4>
            <div class="amcd-dashboard-post-type-actions-icon videos-icon"><span class="dashicons dashicons-format-audio"></span></div>
            <p>
                <a href="<?php echo admin_url( 'post-new.php?post_type=amcd_videos' ); ?>"><?php _e( 'Add New', 'amcd-plugin' ); ?></a>
                <a href="<?php echo admin_url( 'edit.php?post_type=amcd_videos' ); ?>"><?php _e( 'View List', 'amcd-plugin' ); ?></a>
            </p>
		</li>
		<li>
            <h4><?php _e( 'Media', 'amcd-plugin' ); ?></h4>
            <div class="amcd-dashboard-content-actions-icon front-icon"><span class="dashicons dashicons-format-image"></span></div>
            <p>
                <a href="<?php echo admin_url( 'media-new.php' ); ?>"><?php _e( 'Add New', 'amcd-plugin' ); ?></a>
                <a href="<?php echo admin_url( 'upload.php' ); ?>"><?php _e( 'Manage', 'amcd-plugin' ); ?></a>
            </p>
		</li>
    </ul>
</div>