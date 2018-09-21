<?php

/**
 * Alana welcome panel.
 *
 * @link       http://ccdzine.com
 * @since      1.0.0
 *
 * @package    amcd-plugin
 * @subpackage amcd-plugin/admin
 */

namespace Alana;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
$gallery_page = get_page_by_path( 'gallery' );
$contact_page = get_page_by_path( 'contact' );
if ( 'gallery' == $gallery_page ) {
    $gallery_id = $gallery_page->ID;
} else {
    $gallery_id = '';
}
$contact_id   = $contact_page->ID; ?>

<div class="amcd-dashboard-summary">
    <?php wp_dashboard_right_now(); ?>
</div>
<div class="amcd-dashboard-post-managment">
    <header class="amcd-dashboard-section-header">
        <h3><?php _e( 'Manage Your Projects', 'amcd-plugin' ); ?></h3>
    </header>
    <ul class="amcd-dashboard-post-type-actions">
        <li>
            <h4><?php _e( 'Film + TV', 'amcd-plugin' ); ?></h4>
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
            <h4><?php _e( 'Presentations', 'amcd-plugin' ); ?></h4>
            <div class="amcd-dashboard-post-type-actions-icon presentations-icon"><span class="dashicons dashicons-desktop"></span></div>
            <p>
                <a href="<?php echo admin_url( 'post-new.php?post_type=amcd_presentations' ); ?>"><?php _e( 'Add New', 'amcd-plugin' ); ?></a>
                <a href="<?php echo admin_url( 'edit.php?post_type=amcd_presentations' ); ?>"><?php _e( 'View List', 'amcd-plugin' ); ?></a>
            </p>
        </li>
    </ul>
</div>
<div class="amcd-dashboard-content-managment">
    <header class="amcd-dashboard-section-header">
        <h3><?php _e( 'Manage Your Content', 'amcd-plugin' ); ?></h3>
    </header>
    <ul class="amcd-dashboard-content-actions">
        <li>
            <h4><?php _e( 'Front Page', 'amcd-plugin' ); ?></h4>
            <div class="amcd-dashboard-content-actions-icon front-icon"><span class="dashicons dashicons-admin-home"></span></div>
            <p>
                <a href="<?php echo admin_url( 'post.php?post=' . get_option( 'page_on_front' ) . '&action=edit' ); ?>"><?php _e( 'Manage Slides', 'amcd-plugin' ); ?></a>
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
        <li>
            <h4><?php _e( 'Snippets', 'amcd-plugin' ); ?></h4>
            <div class="amcd-dashboard-content-actions-icon snippets-icon"><span class="dashicons dashicons-art"></span></div>
            <p>
                <a href="<?php echo admin_url( 'post-new.php?post_type=amcd_snippets' ); ?>"><?php _e( 'Add New', 'amcd-plugin' ); ?></a>
                <a href="<?php echo admin_url( 'edit.php?post_type=amcd_snippets' ); ?>"><?php _e( 'View List', 'amcd-plugin' ); ?></a>
            </p>
        </li>
        <li>
            <h4><?php _e( 'Gallery', 'amcd-plugin' ); ?></h4>
            <div class="amcd-dashboard-content-actions-icon gallery-icon"><span class="dashicons dashicons-format-gallery"></span></div>
            <p>
                <a href="<?php echo admin_url( 'post.php?post=' . $gallery_id . '&action=edit' ); ?>"><?php _e( 'Manage Images', 'amcd-plugin' ); ?></a>
            </p>
        </li>
        <li>
            <h4><?php _e( 'Contact', 'amcd-plugin' ); ?></h4>
            <div class="amcd-dashboard-content-actions-icon contact-icon"><span class="dashicons dashicons-email"></span></div>
            <p>
                <a href="<?php echo admin_url( 'post.php?post=' . $contact_id . '&action=edit' ); ?>"><?php _e( 'Manage Info', 'amcd-plugin' ); ?></a>
            </p>
        </li>
    </ul>
</div>