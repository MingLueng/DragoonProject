<?php
global $theme_prefix,$theme_uri,$theme_version;
$theme_prefix  = 'wp2024_theme';
$theme_uri     = get_template_directory_uri().'/assets';
$theme_dir     = get_template_directory();
$theme_version = '1.0';

// Đăng ký các thành phần hỗ trợ cho theme: menu, post_thubnail...
include_once $theme_dir.'/inc/theme-supports.php';

// Đăng ký style,scripts cho theme: css, js
include_once $theme_dir.'/inc/scripts.php';

// Đăng ký sidebar,widgets cho theme
include_once $theme_dir.'/inc/widgets.php';
?>
