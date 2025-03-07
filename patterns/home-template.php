<?php
/**
 * Title: Home
 * Slug: bluehost-blueprint/home-template
 * Categories: bluehost-blueprint
 * Block Types: core/site-logo, core/navigation, core/group, core/stack
 * Keywords: home
 * Description: Displays the latest posts
 *
 * @package Bluehost\Blueprint
 * @since 1.0.0
 */

?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-group"><!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"layout":{"contentSize":null,"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"18rem"}} -->
<!-- wp:group {"className":"is-style-default","style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-default" style="margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"border":{"radius":"5px"}},"backgroundColor":"base-midtone","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-midtone-background-color has-background" style="border-radius:5px"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"customOverlayColor":"#FFF","isUserOverlayColor":false,"minHeight":220,"isDark":false,"style":{"border":{"radius":"5px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light" style="border-radius:5px;min-height:220px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#FFF"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","style":{"spacing":{"padding":{"top":"0.3em","bottom":"0.3em","left":"0.5em","right":"0.5em"}},"border":{"radius":"5px"},"typography":{"textTransform":"uppercase"}},"backgroundColor":"base-midtone","fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"large"} /-->

<!-- wp:post-date {"style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|contrast-midtone"}}}},"textColor":"contrast-midtone","fontSize":"small"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:query-pagination {"paginationArrow":"arrow","showLabel":false,"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->