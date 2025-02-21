<?php
/**
 * Title: Single Post Image Overlap
 * Slug: bh-studio/single-post-image-overlap
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"metadata":{"name":"Featured Image"},"style":{"dimensions":{"minHeight":"200px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="min-height:200px"><!-- wp:post-featured-image {"aspectRatio":"auto","align":"wide"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Post"},"style":{"spacing":{"margin":{"top":"-200px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:-200px"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|70","left":"var:preset|spacing|70","top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)"><!-- wp:group {"metadata":{"name":"Narrow Container"},"layout":{"type":"constrained","contentSize":"65ch"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Post Header"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:post-title {"textAlign":"center","level":1,"fontSize":"x-large"} /-->

<!-- wp:group {"metadata":{"name":"Post Meta"},"style":{"spacing":{"blockGap":"8px"}},"fontSize":"small","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group has-small-font-size"><!-- wp:group {"metadata":{"name":"Author"},"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php esc_html_e( 'Posted By', 'bh-studio' ); ?>: </p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true,"linkTarget":"_blank"} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><strong>·</strong></p>
<!-- /wp:paragraph -->

<!-- wp:group {"metadata":{"name":"Date"},"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php esc_html_e( 'On', 'bh-studio' ); ?>: </p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-midtone"}}}},"textColor":"contrast-midtone"} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><strong>·</strong> </p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-1"}}}},"textColor":"accent-1"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:post-content {"layout":{"type":"constrained"}} /-->

<!-- wp:pattern {"slug":"bh-studio/post-comments"} /-->

</div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"bh-studio/blog-posts-horizontal"} /-->
 
<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->