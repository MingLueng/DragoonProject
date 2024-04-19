<?php
global $theme_uri;
?> 
<?php get_header(); ?>
<main class="l_main">
  <!-- <div class="btn_swithLang">
    <a href="https://dragoon.vn/" title="Japanese" aria-label="go to Japanese page"><i class='bx bx-globe'></i>日本語</a>
  </div> -->
<?php get_template_part('template-parts/page/mv_01')?>

<div class="skills afterLoadingActiveElm" id="s_top-company">

<?php get_template_part('template-parts/post/company-content')?>
</div> 
<section class="about" id="s_top-recruit" style="padding-top: 80px;">

<?php get_template_part('template-parts/post/recruitment-content')?>

</section>
<section class="portfolio" id="s_top-contact">
<div class="__bg"></div>
  <header class="s-plain_header container">
    <h2 class="s-plain_heading">
      <span class="--langMain">CONTACT US</span>
    </h2>
  </header>
<main class="s-plain_content container">
<?php get_template_part('template-parts/page/detail-contact'); ?>

</main>

</section>
</main>
<?php get_footer(); ?>