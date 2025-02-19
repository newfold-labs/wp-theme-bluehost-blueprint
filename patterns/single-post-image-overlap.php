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
<p class="">Posted By: </p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true,"linkTarget":"_blank"} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p class=""><strong>·</strong></p>
<!-- /wp:paragraph -->

<!-- wp:group {"metadata":{"name":"Date"},"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p class="">On: </p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-midtone"}}}},"textColor":"contrast-midtone"} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p class=""><strong>·</strong> </p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-1"}}}},"textColor":"accent-1"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:post-content {"layout":{"type":"constrained"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Blog"},"style":{"border":{"top":{"color":"var:preset|color|base-midtone","width":"1px"}},"spacing":{"margin":{"top":"var:preset|spacing|80","bottom":"0"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--base-midtone);border-top-width:1px;margin-top:var(--wp--preset--spacing--80);margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:query {"queryId":14,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"grid","columnCount":4}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","height":"","style":{"spacing":{"margin":{"bottom":"24px"}}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-title {"level":3,"isLink":true,"linkTarget":"_blank","style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.3"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"medium"} /-->

<!-- wp:post-excerpt {"excerptLength":10} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"fontSize":"small","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-small-font-size"><!-- wp:paragraph -->
<p class="">By</p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true,"linkTarget":"_blank","style":{"typography":{"textDecoration":"none"}}} /-->

<!-- wp:paragraph -->
<p class="">—</p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"format":"d M Y","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-midtone"}}}},"textColor":"contrast-midtone","fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
 
<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->