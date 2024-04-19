<?php
global $theme_uri;
?> 
<?php get_header(); ?>
<?php while(have_posts()) : the_post();?>
<?php get_template_part('template-parts/post/post-title');?>

    <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row">
               <?php get_sidebar(); ?>
                <div class="col-lg-8 col-md-7 order-md-1 order-1">     
                <?php get_template_part('template-parts/post/content-single');?>            
                </div>
            </div>
        </div>
    </section>
<?php get_template_part('template-parts/post/post-related');?> 
<?php endwhile;?>

<?php get_footer(); ?>
