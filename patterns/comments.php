<?php
/**
 * Title: Comments
 * Slug: bluehost-blueprint/post-comments
 * Description: A list of comments for a post.
 * Categories: bluehost-blueprint/posts
 * Keywords: blog, posts, query
 *
 * @package Bluehost\Blueprint
 */

?>
<!-- wp:comments {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50"},"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"border":{"top":{"color":"var:preset|color|base-midtone","width":"1px"}}}} -->
<div class="wp-block-comments" style="border-top-color:var(--wp--preset--color--base-midtone);border-top-width:1px;margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50);padding-top:var(--wp--preset--spacing--50)"><!-- wp:group {"metadata":{"name":"Comments Inside"},"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Comments', 'bluehost-blueprint' ); ?></h2>
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
<!-- /wp:comments -->