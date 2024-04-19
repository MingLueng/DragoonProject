<?php
/**
 * Title: Footer CTA
 * Slug: calmly/footer-cta
 * Categories: call-to-action, calmly
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"50px","bottom":"50px"}}},"layout":{"type":"constrained","contentSize":"1300px"}} -->
<div class="wp-block-group" style="padding-top:50px;padding-bottom:50px"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|70","right":"var:preset|spacing|70"}},"border":{"radius":"30px"}},"backgroundColor":"primary","layout":{"type":"constrained","wideSize":"100%","contentSize":"100%"}} -->
<div class="wp-block-group alignwide has-primary-background-color has-background" style="border-radius:30px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"45%"} -->
<div class="wp-block-column" style="flex-basis:45%"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<h2 class="wp-block-heading has-white-color has-text-color has-link-color"><?php echo esc_html_x( 'Ready to order your', 'CTA Title', 'calmly' ); ?><br><?php echo esc_html_x( 'favorite Chair?', 'CTA Title', 'calmly' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<p class="has-white-color has-text-color has-link-color"><?php echo esc_html_x( 'Browse our online catalog and embark on a journey of inspiration.', 'CTA Subtitle', 'calmly' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"white","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-white-color has-text-color has-link-color wp-element-button"><?php echo esc_html_x( 'Order Now', 'CTA First Button', 'calmly' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"white","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-white-color has-text-color has-link-color wp-element-button"><?php echo esc_html_x( 'Learn More', 'CTA second Button', 'calmly' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
