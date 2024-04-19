<?php
/**
 * Title: footer
 * Slug: calmly/footer
 * Categories: calmly
 */
?>

<!-- wp:group {"tagName":"footer","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","right":"var:preset|spacing|20","bottom":"var:preset|spacing|50","left":"var:preset|spacing|20"},"blockGap":"50px"}},"className":"wc-blocks-footer-pattern","layout":{"type":"constrained"}} -->
<footer class="wp-block-group alignfull wc-blocks-footer-pattern" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--20)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"32px","padding":{"right":"0px","left":"0px"}}}} -->
<div class="wp-block-columns alignwide" style="padding-right:0px;padding-left:0px"><!-- wp:column {"width":"30%","style":{"spacing":{"padding":{"right":"50px"}}}} -->
<div class="wp-block-column" style="padding-right:50px;flex-basis:30%"><!-- wp:group {"style":{"spacing":{"blockGap":"30px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:site-logo /-->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"0px"}},"typography":{"fontSize":"16px","lineHeight":"1.5"}}} -->
<p style="margin-bottom:0px;font-size:16px;line-height:1.5">
<?php echo esc_html_x( 'Would you like thousands of new customers to taste your amazing food? So would we!', 'Footer Subtitle', 'calmly' ); ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"size":"has-small-icon-size","style":{"spacing":{"blockGap":{"left":"16px"}}},"className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-small-icon-size is-style-logos-only"><!-- wp:social-link {"url":"https://www.facebook.com","service":"facebook"} /-->

<!-- wp:social-link {"url":"https://www.twitter.com","service":"twitter"} /-->

<!-- wp:social-link {"url":"https://www.instagram.com","service":"instagram"} /-->

<!-- wp:social-link {"url":"https://www.twitch.com","service":"twitch"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"20%","style":{"spacing":{"padding":{"top":"0px"},"blockGap":"var:preset|spacing|40"}}} -->
<div class="wp-block-column" style="padding-top:0px;flex-basis:20%"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html_x( 'Company', 'Footer LInk Title', 'calmly' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><a href="/about"><?php echo esc_html_x( 'About', 'Footer Link', 'calmly' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html_x( 'Contact', 'Footer Link', 'calmly' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html_x( 'Sample Page', 'Footer Link', 'calmly' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"20%","style":{"spacing":{"padding":{"top":"0px"},"blockGap":"var:preset|spacing|40"}}} -->
<div class="wp-block-column" style="padding-top:0px;flex-basis:20%"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html_x( 'Explore', 'Footer Link Title', 'calmly' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><a href="/shop"><?php echo esc_html_x( 'Shop', 'Footer Link', 'calmly' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html_x( 'Blog', 'Footer Link', 'calmly' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html_x( 'My account', 'Fotoer Link', 'calmly' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"20%","style":{"spacing":{"padding":{"top":"0px"},"blockGap":"var:preset|spacing|40"}}} -->
<div class="wp-block-column" style="padding-top:0px;flex-basis:20%"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html_x( 'More', 'Footer Link Title', 'calmly' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html_x( 'Documentation', 'Footer Links', 'calmly' ); ?></a> </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html_x( 'Privacy Policy', 'Footer Links', 'calmly' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html_x( 'License', 'Footer Links', 'calmly' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group alignwide" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px"}}} -->
<p class="has-text-align-center" style="font-size:14px">
<?php echo esc_html_x( '© 2024 Candid Themes - All rights reserved.', 'Copyright Text', 'calmly' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></footer>
<!-- /wp:group -->
