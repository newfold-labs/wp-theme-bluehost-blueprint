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

<!-- wp:comments {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50"},"margin":{"top":"var:preset|spacing|50"}},"border":{"top":{"color":"var:preset|color|base-midtone","width":"1px"}}}} -->
<div class="wp-block-comments" style="border-top-color:var(--wp--preset--color--base-midtone);border-top-width:1px;margin-top:var(--wp--preset--spacing--50);padding-top:var(--wp--preset--spacing--50)"><!-- wp:group {"metadata":{"name":"Comments Inside"},"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Comments', 'bh-studio' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:comments-title {"showPostTitle":false,"level":4} /--></div>
<!-- /wp:group -->

<!-- wp:comment-template -->
<!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"left":"16px"},"margin":{"bottom":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns is-not-stacked-on-mobile" style="margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:column {"width":"48px"} -->
<div class="wp-block-column" style="flex-basis:48px"><!-- wp:avatar {"size":48,"style":{"border":{"radius":"24px"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:comment-author-name {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"blockGap":"1rem"},"elements":{"link":{"color":{"text":"var:preset|color|contrast-midtone"}}}},"textColor":"contrast-midtone","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group has-contrast-midtone-color has-text-color has-link-color" style="margin-top:0px;margin-bottom:0px"><!-- wp:comment-date {"fontSize":"small"} /-->

<!-- wp:comment-edit-link {"fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:comment-content {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-midtone"}}}},"textColor":"contrast-midtone"} /-->

<!-- wp:comment-reply-link {"fontSize":"small"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:comment-template -->

<!-- wp:comments-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:comments-pagination-previous /-->

<!-- wp:comments-pagination-numbers /-->

<!-- wp:comments-pagination-next /-->
<!-- /wp:comments-pagination -->

<!-- wp:post-comments-form /--></div>
<!-- /wp:group --></div>
<!-- /wp:comments --></div>
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
 
<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->