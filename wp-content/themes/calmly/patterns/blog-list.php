<?php
/**
 * Title: Blog List
 * Slug: calmly/blog-list
 * Categories: query, posts, calmly
 * Block Types: core/query
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"50px","bottom":"50px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:50px;padding-bottom:50px"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html_x( 'Read our blogs to learn more', 'Blog Section Headind', 'calmly' ); ?><br><?php echo esc_html_x( 'about our company', 'Blog Section Headind', 'calmly' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html_x( 'A chair blog is a website that features articles, images, and videos about chairs, chair design, and chair designers.', 'Blog Section Subtitle', 'calmly' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query {"queryId":144,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"10px","bottom":"30px","left":"10px"}}},"layout":{"inherit":false}} -->
<div class="wp-block-group" style="padding-top:30px;padding-right:10px;padding-bottom:30px;padding-left:10px"><!-- wp:post-featured-image {"width":"100%","height":"210px"} /-->

<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-excerpt {"excerptLength":15} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->


<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html_x( 'Read More', 'Button for Blog Page', 'calmly' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
