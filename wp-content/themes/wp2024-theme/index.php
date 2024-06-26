<?php
global $theme_uri;
?> 
<?php get_header(); ?>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->

    <!-- Breadcrumb Section End -->
    <?php
    get_template_part('template-parts/page/breadcrumb');
    ?>

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
              <?php get_sidebar();?>
           <div class="col-lg-8 col-md-7">
                    <div class="row">
                    <?php while(have_posts()) : the_post();?>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                
                    <?php get_template_part('template-parts/post/content',null,['post_id'=>get_the_id()]);?>
                    
                    </div>
                    <?php endwhile;?>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product__pagination blog__pagination">
                                <?= get_the_posts_pagination(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>