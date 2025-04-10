<?php
/**
 * Title: Site header with social links
 * Slug: bluehost-blueprint/site-header-with-social
 * Categories: bluehost-blueprint-header
 * Block Types: core/site-logo, core/navigation, core/group, core/stack
 * Keywords: site header
 * Description: A two rows site header with social and contancts above.
 *
 * @package Bluehost\Blueprint
 * @since 1.0.0
 */

?>
<!-- wp:group {"tagName":"header","align":"full","layout":{"type":"constrained"}} -->
<header class="wp-block-group alignfull"><!-- wp:group {"align":"full","style":{"border":{"bottom":{"color":"var:preset|color|base-midtone","width":"1px"},"top":[],"right":[],"left":[]},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--base-midtone);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-midtone"}}}},"textColor":"contrast-midtone"} -->
<p class="has-contrast-midtone-color has-text-color has-link-color">
<strong><?php esc_html_e( 'Come See us:', 'bluehost-blueprint' ); ?></strong> <?php esc_html_e( '123 Main St', 'bluehost-blueprint' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-midtone"}}}},"textColor":"contrast-midtone"} -->
<p class="has-contrast-midtone-color has-text-color has-link-color">•</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-midtone"}}}},"textColor":"contrast-midtone"} -->
<p class="has-contrast-midtone-color has-text-color has-link-color">
<?php
printf(
	// Translators: %s is the link to social media.
	esc_html__( 'Find us on %s', 'bluehost-blueprint' ),
	'<a href="#">' . esc_html__( 'Social Media', 'bluehost-blueprint' ) . '</a>'
);
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:social-links {"iconColor":"contrast-midtone","iconColorValue":"var:preset|color|contrast-midtone","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"right"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="margin-top:0;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
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

<!-- wp:navigation {"icon":"menu","layout":{"type":"flex","justifyContent":"right"}} /--></div>
<!-- /wp:group --></header>
<!-- /wp:group -->
