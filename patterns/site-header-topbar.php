<?php
/**
 * Title: Site header with topbar
 * Slug: bluehost-blueprint/site-header-topbar
 * Categories: bluehost-blueprint-header
 * Block Types: core/site-logo, core/navigation, core/group, core/stack
 * Keywords: site header
 * Description: A two rows site header with a topbar.
 *
 * @package Bluehost\Blueprint
 * @since 1.0.0
 */

?>
<!-- wp:group {"tagName":"header","align":"full","layout":{"type":"constrained"}} -->
<header class="wp-block-group alignfull"><!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"backgroundColor":"accent-1","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-accent-1-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><strong><?php esc_html_e( 'Last chance!', 'bluehost-blueprint' ); ?></strong> <?php esc_html_e( 'Get 25% off sitewide with code', 'bluehost-blueprint' ); ?> <strong><?php esc_html_e( 'FINAL25', 'bluehost-blueprint' ); ?></strong> <?php esc_html_e( 'before it expires.', 'bluehost-blueprint' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group">

<?php
$has_logo = has_custom_logo();
if ( is_admin() || ( defined( 'REST_REQUEST' ) && REST_REQUEST && isset( $_GET['context'] ) && 'edit' === sanitize_text_field( wp_unslash( $_GET['context'] ) ) ) ) : // phpcs:ignore WordPress.Security.NonceVerification.Recommended
	?>
	<!-- wp:site-logo /-->
<?php elseif ( $has_logo ) : ?>
	<!-- wp:site-logo /-->
<?php else : ?>
	<!-- wp:site-title /-->
<?php endif; ?>

<!-- wp:navigation {} /--></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="is-style-outline wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Purchase Now', 'bluehost-blueprint' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></header>
<!-- /wp:group -->