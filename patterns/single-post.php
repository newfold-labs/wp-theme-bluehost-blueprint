<?php
/**
 * Title: Single Post
 * Slug: bh-studio/single-post
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Narrow Container"},"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"65ch"}} -->
<main class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"metadata":{"name":"Post Content"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Post Details"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"fontSize":"small","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group has-small-font-size"><!-- wp:post-terms {"term":"category","separator":" · ","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","textDecoration":"none"},"elements":{"link":{"color":{"text":"var:preset|color|accent-2"}}}},"textColor":"accent-2"} /-->

<!-- wp:post-date {"style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|contrast-midtone"}}}},"textColor":"contrast-midtone"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":1,"fontSize":"x-large"} /-->

<!-- wp:post-excerpt {"excerptLength":30} /-->

<!-- wp:post-featured-image {"aspectRatio":"auto"} /-->

<!-- wp:post-content /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->