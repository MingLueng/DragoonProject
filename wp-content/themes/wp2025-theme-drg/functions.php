<?php
global $theme_prefix,$theme_uri,$theme_version;
$theme_prefix  = 'wp2025_theme_drg';
$theme_uri     = get_template_directory_uri().'/assets';
$theme_dir     = get_template_directory();
$theme_version = '1.3';

// Đăng ký các thành phần hỗ trợ cho theme: menu, post_thubnail...
include_once $theme_dir.'/inc/theme-supports.php';

// Đăng ký style,scripts cho theme: css, js
include_once $theme_dir.'/inc/scripts.php';

//làm việc với cơ sở dữ liệu trong wordpress
include_once $theme_dir.'/inc/wp2025products.php';


?>