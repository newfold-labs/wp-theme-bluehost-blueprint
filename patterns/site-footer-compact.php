<?php
/**
 * Title: Site footer copact
 * Slug: bluehost-blueprint/site-footer-compact
 * Categories: bluehost-blueprint-footer
 * Block Types: core/paragraph, core/social-links, core/group, core/stack
 * Keywords: site footer
 * Description: A single row compact footer.
 *
 * @package Bluehost\Blueprint
 * @since 1.0.0
 */

?>
<!-- wp:group {"tagName":"footer","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast-midtone"}}}},"backgroundColor":"base-midtone","textColor":"contrast-midtone","layout":{"type":"constrained"}} -->
<footer class="wp-block-group alignfull has-contrast-midtone-color has-base-midtone-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"33.34%"} -->
<div class="wp-block-column" style="flex-basis:33.34%"><!-- wp:paragraph -->
<p class=""><?php echo esc_html__( '&copy; Copyright ', 'bluehost-blueprint' ) . esc_html( gmdate( 'Y' ) ); ?>. <?php esc_html_e( 'All rights reserved.', 'bluehost-blueprint' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.34%"} -->
<div class="wp-block-column" style="flex-basis:33.34%"><!-- wp:social-links {"iconColor":"contrast-midtone","iconColorValue":"var:preset|color|contrast-midtone","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="is-style-logos-only wp-block-social-links has-small-icon-size has-icon-color"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p class=""><a href="#"><?php esc_html_e( 'Privacy Policy', 'bluehost-blueprint' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>•</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p class=""><a href="#"><?php esc_html_e( 'Terms and Conditions', 'bluehost-blueprint' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></footer>
<!-- /wp:group -->