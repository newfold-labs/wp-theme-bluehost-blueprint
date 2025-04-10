<?php
/**
 * Title: Site footer with contacts
 * Slug: bluehost-blueprint/site-footer-with-contacts
 * Categories: bluehost-blueprint-footer
 * Block Types: core/paragraph, core/social-links, core/group, core/columns, core/sitelogo
 * Keywords: site footer
 * Description: A multi column footer with contacts.
 *
 * @package Bluehost\Blueprint
 * @since 1.0.0
 */

?>
<!-- wp:group {"tagName":"footer","align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|50"}},"backgroundColor":"accent-1","textColor":"base","layout":{"type":"constrained"}} -->
<footer class="wp-block-group alignfull has-base-color has-accent-1-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"fontSize":"medium","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-medium-font-size"><!-- wp:paragraph -->
<p><?php esc_html_e( 'Give us a call (555) 123 45678', 'bluehost-blueprint' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Monday - Friday | 7am - 5pm PST', 'bluehost-blueprint' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php
$has_logo = has_custom_logo();
if ( is_admin() || ( defined( 'REST_REQUEST' ) && REST_REQUEST && isset( $_GET['context'] ) && 'edit' === sanitize_text_field( wp_unslash( $_GET['context'] ) ) ) ) : // phpcs:ignore WordPress.Security.NonceVerification.Recommended
	?>
	<!-- wp:site-logo {"align":"center"} /-->
<?php elseif ( $has_logo ) : ?>
	<!-- wp:site-logo {"align":"center"} /-->
<?php else : ?>
	<!-- wp:site-title {"textAlign":"center"} /-->
<?php endif; ?>

<!-- wp:group {"layout":{"type":"constrained","contentSize":"600px"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'bluehost-blueprint' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} /-->

<!-- wp:social-links {"iconColor":"base","iconColorValue":"var:preset|color|base","size":"has-normal-icon-size","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="is-style-logos-only wp-block-social-links has-normal-icon-size has-icon-color"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size"><?php esc_html_e( '&copy; Copyright 2025. All rights reserved.', 'bluehost-blueprint' ); ?></p>
<!-- /wp:paragraph --></footer>
<!-- /wp:group -->