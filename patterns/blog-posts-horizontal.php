<?php
/**
 * Title: Blog Posts with Featured Image and Excerpt
 * Slug: bluehost-blueprint/blog-posts-horizontal
 * Categories: bluehost-blueprint/posts
 * Block Types: core/paragraph, core/group, core/columns, core/post-title, core/post-excerpt, core/post-author-name, core/post-date
 * Keywords: blog posts, featured image, post excerpt, author info
 * Description: A section displaying blog posts in a multi-column layout with featured images, titles, excerpts, and author details. Ideal for showcasing content in a footer area with a call-to-action.
 *
 * @package Bluehost\Blueprint
 * @since 1.0.0
 */

?>
<!-- wp:group {"metadata":{"name":"Blog"},"style":{"border":{"top":{"color":"var:preset|color|base-midtone","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--base-midtone);border-top-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:query {"queryId":14,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":4}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","height":"","style":{"spacing":{"margin":{"bottom":"24px"}}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-title {"level":3,"isLink":true,"linkTarget":"_blank","style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.3"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"medium"} /-->

<!-- wp:post-excerpt {"excerptLength":10} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"fontSize":"small","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-small-font-size"><!-- wp:paragraph -->
<p>By</p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true,"linkTarget":"_blank","style":{"typography":{"textDecoration":"none"}}} /-->

<!-- wp:paragraph -->
<p>—</p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"format":"d M Y","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-midtone"}}}},"textColor":"contrast-midtone","fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->