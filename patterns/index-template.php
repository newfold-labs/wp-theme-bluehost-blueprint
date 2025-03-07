<?php
/**
 * Title: Index
 * Slug: bluehost-blueprint/index-template
 * Categories: bluehost-blueprint
 * Block Types: core/site-logo, core/navigation, core/group, core/stack
 * Keywords: index
 * Description: A fallback template for all pages/posts when a more specific template is not defined.
 *
 * @package Bluehost\Blueprint
 * @since 1.0.0
 */

?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-group"><!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"layout":{"contentSize":null,"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","style":{"layout":{"selfStretch":"fixed","flexSize":"30%"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"large"} /-->

<!-- wp:post-excerpt {"moreText":"<?php esc_html_e( 'read more', 'bluehost-blueprint' ); ?>","fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
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