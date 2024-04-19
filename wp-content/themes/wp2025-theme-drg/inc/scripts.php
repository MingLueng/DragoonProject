<?php
// Đăng ký style cho theme
//wp_enqueue_scripts
add_action('wp_enqueue_scripts','wp2025_theme_register_styles');
function wp2025_theme_register_styles(){
    global $theme_prefix,$theme_uri,$theme_version;
    wp_enqueue_style($theme_prefix.'-style',$theme_uri,[],$theme_version,'all');   
    wp_enqueue_style($theme_prefix.'-style-css',$theme_uri.'/css/style.css');
    wp_enqueue_style($theme_prefix.'-switch-language-css',$theme_uri.'/css/switch-language.css');
    wp_enqueue_style($theme_prefix.'-library-css',$theme_uri.'/css/library.css');
    wp_enqueue_style($theme_prefix.'-font-awesome-css',$theme_uri.'/css/font-awesome.min.css');
    wp_enqueue_style($theme_prefix.'-jquery-ui-css',$theme_uri.'/css/jquery-ui.min.css');
    wp_enqueue_style($theme_prefix.'-google-font','https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    wp_enqueue_style($theme_prefix.'-boxicons-css','https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/css/boxicons.min.css');
   
    
}

// Đăng ký javascript cho theme
add_action('wp_enqueue_scripts','wp2025_theme_register_scripts');
function wp2025_theme_register_scripts(){
    global $theme_prefix,$theme_uri;$theme_version;   
    wp_enqueue_script($theme_prefix.'-jquery',$theme_uri.'/js/jquery-3.3.1.min.js',[]);
    wp_enqueue_script($theme_prefix.'-jquery-ui-js',$theme_uri.'/js/jquery-ui.min.js',['jquery']);
    wp_enqueue_script($theme_prefix.'-script-js',$theme_uri.'/js/script.js',['jquery']);
    wp_enqueue_script($theme_prefix.'-imagesloaded-unpkg','https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js',[]);
   
}
?>




