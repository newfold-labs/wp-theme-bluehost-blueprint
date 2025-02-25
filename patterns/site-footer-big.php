<?php
/**
 * Title: Site footer big
 * Slug: bluehost-blueprint/site-footer-big
 * Categories: bluehost-blueprint-footer
 * Block Types: core/paragraph, core/social-links, core/group, core/columns
 * Keywords: site footer
 * Description: A multi column footer.
 *
 * @package Bluehost\Blueprint
 * @since 1.0.0
 */

?>
<!-- wp:group {"tagName":"footer","align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<footer class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Create stunning and visually captivating websites powered by WordPress blocks', 'bluehost-blueprint' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"base","iconColorValue":"var:preset|color|base","size":"has-normal-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left"}} -->
<ul class="is-style-logos-only wp-block-social-links has-normal-icon-size has-icon-color"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"12px"}},"elements":{"link":{"color":{"text":"var:preset|color|base-midtone"}}}},"textColor":"base-midtone"} -->
<p class="has-base-midtone-color has-text-color has-link-color" style="padding-top:12px">
	<?php
	echo wp_kses(
		sprintf(
			/* translators: %s: year */
			__( 'Copyright &copy; %s, Company LLC<br><br>1412 Main Street<br> Suite 51 <br>New York, NY 10001', 'bluehost-blueprint' ),
			esc_html( gmdate( 'Y' ) )
		),
		array(
			'br' => array(),
		)
	);
	?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<h3 class="wp-block-heading has-base-color has-text-color has-link-color"><?php esc_html_e( 'About', 'bluehost-blueprint' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:navigation {"overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<h3 class="wp-block-heading has-base-color has-text-color has-link-color"><?php esc_html_e( 'Helpful Tools', 'bluehost-blueprint' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:navigation {"overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<h3 class="wp-block-heading has-base-color has-text-color has-link-color"><?php esc_html_e( 'Learn More', 'bluehost-blueprint' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:navigation {"overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></footer>
<!-- /wp:group -->