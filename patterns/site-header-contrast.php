<?php
/**
 * Title: Site header contrast
 * Slug: bluehost-blueprint/site-header-contrast
 * Categories: bluehost-blueprint-header
 * Block Types: core/site-logo, core/navigation, core/group, core/stack
 * Keywords: site header
 * Description: A single row site header with contrast colors.
 *
 * @package Bluehost\Blueprint
 * @since 1.0.0
 */

?>
<!-- wp:group {"tagName":"header","align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<header class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
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

<!-- wp:navigation {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"}},"fontSize":"small"} /-->

<!-- wp:social-links {"iconColor":"base-midtone","iconColorValue":"var:preset|color|base-midtone","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"right"}} -->
<ul class="is-style-logos-only wp-block-social-links has-small-icon-size has-icon-color"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></header>
<!-- /wp:group -->