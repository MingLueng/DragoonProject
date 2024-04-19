<?php
global $theme_uri;
?> 
<div class="l_header_child l_header_nav_sp" id="header_togglenav">
  
  <nav id="toggle-nav_wrapper" class="">
    
  <div id="toggle-nav_trigger">
        <div class="inner normal">
          <img src="<?= $theme_uri; ?>/images/icon_togglenav_trigger_open.png" alt="open menu">
        </div>
        <div class="inner opened">
          <img src="<?= $theme_uri; ?>/images/icon_togglenav_trigger_close.png" alt="close menu">
        </div>
      </div>
  <div id="toggle-nav_content">
    <div class="inner">
      <div class="logo">
        <figure>
          <a href="https://dragoon.vn/" aria-label="go to page top">
            <img src="<?= $theme_uri; ?>/images/logo_main.svg" alt="D.Ragoon Co..Ltd.">
          </a>
        </figure>
      </div>
  <nav id="toggleNavMenu" class="">
    <ul class="nav_page">
      <li class="company plane">
        <a href="#s_top-company" aria-label="go to Company section" class="toggle-nav_link">
          <span class="--langMain">COMPANY</span>
        </a>
      </li>
  
      <li class="menu plane">
        <a href="#s_top-recruit" aria-label="go to Recruitment section" class="toggle-nav_link">
          <span class="--langMain">RECRUITMENT</span>
        </a>
      </li>
  
    </ul>
  </nav>
      <div class="btn_entry">
        <a href="#s_top-contact" aria-label="go to Contact section" class="toggle-nav_link">
          <span class="--langSub">CONTACT US</span>
        </a>
      </div>
  </div>
  </div>
      
  </nav>
  </div>