<?php
/**
 * Title: Site header contrast
 * Slug: bh-studio/site-header-contrast
 * Categories: bh-studio-header
 * Block Types: core/site-logo, core/navigation, core/group, core/stack
 * Keywords: site header
 * Description: A single row site header with contrast colors.
 *
 * @package bh-studio
 * @since 1.0.0
 */

?>
<!-- wp:group {"tagName":"header","align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<header class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:site-logo /-->

<!-- wp:navigation {"ref":4,"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"}},"fontSize":"small"} /-->

<!-- wp:social-links {"iconColor":"base-midtone","iconColorValue":"var:preset|color|base-midtone","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"right"}} -->
<ul class="is-style-logos-only wp-block-social-links has-small-icon-size has-icon-color"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></header>
<!-- /wp:group -->