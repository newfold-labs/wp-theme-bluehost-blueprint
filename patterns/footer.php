<?php
/**
 * Title: footer
 * Slug: bluehost-blueprint/footer
 * Inserter: no
 *
 * @package Bluehost\Blueprint
 */

?>
<!-- wp:group {"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"top":{"width":"1px"}}}} -->
<div class="wp-block-group" style="border-top-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">
	<?php
	/* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */
	printf( esc_html__( 'Proudly Powered by %1$sBluehost%2$s', 'bluehost-blueprint' ), '<a href="' . esc_url( 'https://bluehost.com' ) . '" rel="nofollow">', '</a>' );
	?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->