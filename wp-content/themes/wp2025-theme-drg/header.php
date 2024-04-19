<?php
global $theme_uri;
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dragoon Ltd</title>
 
    <?php wp_head(); ?>
</head>
<body class="">  
  <span class="bs_judge"></span>
  <div id="s_loading" class="">
    <div id="s_loading_content">
      <div class="logo logo_loading_main">
        <img src="<?= $theme_uri; ?>/images/logo_white.svg" alt="D.Ragoon Co.,Ltd." class="">
        <div class="js-loader-progress-number"></div>
      </div>
      <div class="__progressBar">
        <div class="js-loader-progress">
          <div class="js-loader-progress-bar"></div> 
        </div>
      </div>
    </div>
  </div>
<header class="l_header afterLoadingActiveElm">
<div class="l_header_inner">
  <div class="l_header_container">
    <div class="l_header_child l_header_logo">
      <h1>
        <a href="https://dragoon.vn/" aria-label="Go to TOP">
          <figure>
            <img src="<?= $theme_uri; ?>/images/logo_main.svg" alt="D.Ragoon Co..Ltd." class="logo_plain">
          </figure>
        </a>
      </h1>
    </div>

    <div class="l_header_child l_header_copy">
      <h2>
        <span>CG graphic company in Hanoi, Vietnam<br>D.Ragoon Co., Ltd.</span>
      </h2>
    </div>

    <?php get_template_part('template-parts/navigation/menu-main-drg') ?>
<?php get_template_part('template-parts/header/header-main') ?>
</div>  
</div>
</header>