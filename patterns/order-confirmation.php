<?php
/**
 * Title: order-confirmation
 * Slug: nextgen-theme/order-confirmation
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header"} /-->

<!-- wp:group {"tagName":"main","layout":{"inherit":true,"type":"constrained"}} -->
<main class="wp-block-group"><!-- wp:woocommerce/order-confirmation-status {"align":"","fontSize":"large"} /-->

<!-- wp:woocommerce/order-confirmation-summary {"align":""} /-->

<!-- wp:woocommerce/order-confirmation-totals-wrapper -->
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"24px"}}} -->
<h3 class="wp-block-heading" style="font-size:24px"><?php esc_html_e('Order details', 'nextgen-theme');?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/order-confirmation-totals {"lock":{"remove":true}} /-->
<!-- /wp:woocommerce/order-confirmation-totals-wrapper -->

<!-- wp:woocommerce/order-confirmation-downloads-wrapper -->
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"24px"}}} -->
<h3 class="wp-block-heading" style="font-size:24px"><?php esc_html_e('Downloads', 'nextgen-theme');?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/order-confirmation-downloads {"lock":{"remove":true}} /-->
<!-- /wp:woocommerce/order-confirmation-downloads-wrapper -->

<!-- wp:columns {"className":"wc-block-order-confirmation-address-wrapper"} -->
<div class="wp-block-columns wc-block-order-confirmation-address-wrapper"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:woocommerce/order-confirmation-shipping-wrapper {"align":"wide"} -->
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"24px"}}} -->
<h3 class="wp-block-heading" style="font-size:24px"><?php esc_html_e('Shipping address', 'nextgen-theme');?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/order-confirmation-shipping-address {"lock":{"remove":true}} /-->
<!-- /wp:woocommerce/order-confirmation-shipping-wrapper --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:woocommerce/order-confirmation-billing-wrapper {"align":"wide"} -->
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"24px"}}} -->
<h3 class="wp-block-heading" style="font-size:24px"><?php esc_html_e('Billing address', 'nextgen-theme');?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/order-confirmation-billing-address {"lock":{"remove":true}} /-->
<!-- /wp:woocommerce/order-confirmation-billing-wrapper --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:woocommerce/order-confirmation-additional-fields-wrapper {"align":"wide"} -->
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"24px"}}} -->
<h3 class="wp-block-heading" style="font-size:24px"><?php esc_html_e('Additional information', 'nextgen-theme');?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/order-confirmation-additional-fields /-->
<!-- /wp:woocommerce/order-confirmation-additional-fields-wrapper -->

<!-- wp:woocommerce/order-confirmation-additional-information {"align":""} /--></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer"} /-->