<?php
/**
 * Twitter card meta tags.
 *
 * @package    Alana_Morshead
 * @subpackage Frontend\Meta_Tags
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 *
 * @link       https://developer.twitter.com/en/docs/tweets/optimize-with-cards/overview/markup.html
 */

namespace AMCD_Plugin\Frontend\Meta_Tags;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
} ?>

<!-- Twitter Card meta -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:domain" content="<?php echo esc_attr( esc_url( home_url() ) ); ?>">
<meta name="twitter:site" content="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" />
<?php if ( ! is_404() ) : ?>
<meta name="twitter:url" content="<?php esc_attr( esc_url( do_action( 'amcd_meta_url_tag' ) ) ); ?>" />
<?php endif; ?>
<meta name="twitter:title" content="<?php esc_attr( do_action( 'amcd_meta_title_tag' ) ); ?>" />
<?php if ( is_404() ) : ?>
<meta name="twitter:description" content="404 <?php esc_attr( _e( 'Not Found' ) ); ?>" />
<?php else : ?>
<meta name="twitter:description" content="<?php esc_attr( do_action( 'amcd_meta_description_tag' ) ); ?>" />
<?php endif; ?>
<meta name="twitter:image:src" content="<?php esc_attr( do_action( 'amcd_meta_image_tag' ) ); ?>" />
