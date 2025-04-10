<?php
/**
 * Title: Site footer with CTA
 * Slug: bluehost-blueprint/site-footer-with-cta
 * Categories: bluehost-blueprint-footer
 * Block Types: core/paragraph, core/social-links, core/group, core/columns, core/buttons
 * Keywords: site footer
 * Description: A multi column footer with CTA.
 *
 * @package Bluehost\Blueprint
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"className":"is-style-block-overlap","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"radius":"16px"}},"backgroundColor":"accent-3","layout":{"type":"constrained"}} -->
<div class="is-style-block-overlap wp-block-group has-accent-3-background-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Build successful websites', 'bluehost-blueprint' ); ?> <br><?php esc_html_e( 'with Cloud Patterns.', 'bluehost-blueprint' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"fontSize":"small","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-small-font-size"><!-- wp:paragraph {"align":"left","style":{"typography":{"textTransform":"uppercase"}}} -->
<p class="has-text-align-left" style="text-transform:uppercase"><strong style="margin-right: 4px"> </strong><?php esc_html_e( 'Easy to use', 'bluehost-blueprint' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"textTransform":"uppercase"}}} -->
<p class="has-text-align-left" style="text-transform:uppercase"><strong style="margin-right: 4px">✓ </strong><?php esc_html_e( 'Beautifully designed patterns', 'bluehost-blueprint' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)">Request Consultation</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"footer","metadata":{"categories":["bluehost-blueprint-footer"],"patternName":"bluehost-blueprint/site-footer-big"},"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"margin":{"top":"0"}},"border":{"radius":{"topLeft":"16px","topRight":"16px"}}},"backgroundColor":"base-midtone","textColor":"contrast","layout":{"type":"constrained"}} -->
<footer class="wp-block-group alignwide has-contrast-color has-base-midtone-background-color has-text-color has-background has-link-color" style="border-top-left-radius:16px;border-top-right-radius:16px;margin-top:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Create stunning and visually captivating websites powered by WordPress blocks', 'bluehost-blueprint' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"var:preset|color|contrast","size":"has-normal-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left"}} -->
<ul class="is-style-logos-only wp-block-social-links has-normal-icon-size has-icon-color"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"12px"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast-midtone"}}}},"textColor":"contrast-midtone"} -->
<p class="has-contrast-midtone-color has-text-color has-link-color" style="padding-top:12px">
	<?php
	echo wp_kses_post(
		sprintf(
			/* translators: %s: year */
			__( 'Copyright &copy; %s, Company LLC<br><br>1412 Main Street<br> Suite 51 <br>New York, NY 10001', 'bluehost-blueprint' ),
			esc_html( gmdate( 'Y' ) )
		)
	);
	?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} -->
<h3 class="wp-block-heading has-contrast-color has-text-color has-link-color"><?php esc_html_e( 'About', 'bluehost-blueprint' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:navigation {"overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} -->
<h3 class="wp-block-heading has-contrast-color has-text-color has-link-color"><?php esc_html_e( 'Helpful Tools', 'bluehost-blueprint' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:navigation {"overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} -->
<h3 class="wp-block-heading has-contrast-color has-text-color has-link-color"><?php esc_html_e( 'Learn More', 'bluehost-blueprint' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:navigation {"overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-midtone"}}},"border":{"top":{"width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|40"}}},"textColor":"contrast-midtone","fontSize":"small"} -->
<p class="has-text-align-center has-contrast-midtone-color has-text-color has-link-color has-small-font-size" style="border-top-width:1px;padding-top:var(--wp--preset--spacing--40)"><?php esc_html_e( '© Copyright 2024. All rights reserved.', 'bluehost-blueprint' ); ?></p>
<!-- /wp:paragraph --></footer>
<!-- /wp:group --></div>
<!-- /wp:group -->