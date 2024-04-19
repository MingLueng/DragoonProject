<?php
add_action('after_setup_theme', 'wp2024_theme_support');
function wp2024_theme_support() {
    //Đăng ký menu
    register_nav_menus([
		'primary' => 'Primary Menu',
		'vertical'  => 'Vertical Menu',
        'mobile' => 'Mobile Menu',
	]);
    //Đăng ký hình ảnh cho bài viết
    
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats');
    //Đăng ký 
    

}
?>