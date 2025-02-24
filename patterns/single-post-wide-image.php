<?php
/**
 * Title: Single Post - Wide Image
 * Slug: bh-studio/single-post-wide-image
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"metadata":{"name":"Post"},"style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Narrow Container"},"layout":{"type":"constrained","contentSize":"65ch"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Post Header"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Post Meta"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"fontSize":"small","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group has-small-font-size"><!-- wp:post-terms {"term":"category","separator":" · ","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","textDecoration":"none"},"elements":{"link":{"color":{"text":"var:preset|color|accent-5"}}}},"textColor":"accent-5"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":1,"fontSize":"x-large"} /-->

<!-- wp:post-excerpt {"moreText":"","excerptLength":30,"fontSize":"medium"} /-->

<!-- wp:group {"metadata":{"name":"Post Meta"},"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-author {"showBio":false,"isLink":true,"linkTarget":"_blank","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-midtone"}}}},"textColor":"contrast-midtone"} /-->

<!-- wp:paragraph -->
<p>—</p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-midtone"}}}},"textColor":"contrast-midtone"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Featured Image"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"aspectRatio":"auto"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Narrow Container"},"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained","contentSize":"65ch"}} -->
<div class="wp-block-group" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:post-content {"layout":{"type":"constrained"}} /-->

<!-- wp:pattern {"slug":"bh-studio/post-comments"} /-->

</div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"bh-studio/blog-posts-horizontal"} /-->
 
<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->