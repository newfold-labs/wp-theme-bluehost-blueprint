<?php
/**
 * Title: single-post
 * Slug: nextgen-theme/single-post
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-group"><!-- wp:post-title /-->

<!-- wp:post-content /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"x-small","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group has-x-small-font-size" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:paragraph -->
<p><?php esc_html_e('Posted by', 'nextgen-theme');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-author {"showAvatar":false,"byline":"","isLink":true} /-->

<!-- wp:paragraph -->
<p><?php esc_html_e('in', 'nextgen-theme');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->