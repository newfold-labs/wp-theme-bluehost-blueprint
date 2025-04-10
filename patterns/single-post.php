<?php
/**
 * Title: Single Post
 * Slug: bluehost-blueprint/single-post
 * Inserter: no
 *
 * @package Bluehost\Blueprint
 */

?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Narrow Container"},"style":{"spacing":{"padding":{"bottom":"0"}}},"layout":{"type":"constrained","contentSize":"650px","wideSize":"900px"}} -->
<main class="wp-block-group" style="padding-bottom:0"><!-- wp:group {"metadata":{"name":"Post Details"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"fontSize":"small","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group has-small-font-size"><!-- wp:post-terms {"term":"category","separator":" · ","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","textDecoration":"none"},"elements":{"link":{"color":{"text":"var:preset|color|accent-2"}}}},"textColor":"accent-2"} /-->

<!-- wp:post-date {"style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|contrast-midtone"}}}},"textColor":"contrast-midtone"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":1,"fontSize":"x-large"} /-->

<!-- wp:post-excerpt {"excerptLength":30} /-->

<!-- wp:post-featured-image {"aspectRatio":"auto"} /--></main>
<!-- /wp:group -->

<!-- wp:post-content {"metadata":{"name":"Narrow Content"},"layout":{"type":"constrained","contentSize":"650px","wideSize":"900px"}} /-->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"650px","wideSize":"900px"}} -->
<div class="wp-block-group">
<!-- wp:pattern {"slug":"bluehost-blueprint/post-comments"} /-->
</div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->