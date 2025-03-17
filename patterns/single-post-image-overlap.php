<?php
/**
 * Title: Single Post Image Overlap
 * Slug: bluehost-blueprint/single-post-image-overlap
 * Inserter: no
 *
 * @package Bluehost\Blueprint
 */

?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"metadata":{"name":"Featured Image"},"style":{"dimensions":{"minHeight":"150px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="min-height:150px"><!-- wp:post-featured-image {"aspectRatio":"auto","align":"wide"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Post"},"style":{"spacing":{"margin":{"top":"-150px"}},"dimensions":{"minHeight":""}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:-150px"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|70","left":"var:preset|spacing|70","top":"var:preset|spacing|70","bottom":"0"}},"dimensions":{"minHeight":"150px"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"backgroundColor":"base","textColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-contrast-color has-base-background-color has-text-color has-background has-link-color" style="min-height:150px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--70);padding-bottom:0;padding-left:var(--wp--preset--spacing--70)"><!-- wp:group {"metadata":{"name":"Narrow Container"},"layout":{"type":"constrained","contentSize":"650px","wideSize":"900px"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Post Header"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:post-title {"textAlign":"center","level":1,"fontSize":"x-large"} /-->

<!-- wp:group {"metadata":{"name":"Post Meta"},"style":{"spacing":{"blockGap":"8px"}},"fontSize":"small","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group has-small-font-size"><!-- wp:group {"metadata":{"name":"Author"},"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php esc_html_e( 'Posted By', 'bluehost-blueprint' ); ?>: </p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true,"linkTarget":"_blank"} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><strong>·</strong></p>
<!-- /wp:paragraph -->

<!-- wp:group {"metadata":{"name":"Date"},"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php esc_html_e( 'On', 'bluehost-blueprint' ); ?>: </p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-midtone"}}}},"textColor":"contrast-midtone"} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><strong>·</strong> </p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-1"}}}},"textColor":"accent-1"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:post-content {"metadata":{"name":"Narrow Content"},"layout":{"type":"constrained","contentSize":"650px","wideSize":"900px"}} /-->

<!-- wp:group {"metadata":{"name":"Comments"},"layout":{"type":"constrained","contentSize":"650px","wideSize":"900px"}} -->
<div class="wp-block-group">
<!-- wp:pattern {"slug":"bluehost-blueprint/post-comments"} /-->
</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"bluehost-blueprint/blog-posts-horizontal"} /-->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->