<?php
/*
 * Plugin Name:       WordPress 2025 - Recruitment
 * Plugin URI:        #
 * Description:       Plugin phục vụ khóa học WordPress 2024
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Quảng Trị Coder
 * Author URI:        #
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        #
 * Text Domain:       wp2024-recruitment
 * Domain Path:       /languages
 */

//Định nghĩa các hằng số của plugin

 define('WP2025_PATH', plugin_dir_path(__FILE__));
 define('WP2025_URL', plugin_dir_url(__FILE__));


//Định nghĩa hành động khi plugin được kích hoạt
register_activation_hook(__FILE__,'wp2025_recruitment_activation');
function wp2025_recruitment_activation()
{
    //Tạo option
    update_option('wp2025_settings_options',[]);
}

//Định nghĩa hành động khi plugin được tắt đi
register_deactivation_hook(__FILE__,'wp2025_recruitment_deactivation');
function wp2025_recruitment_deactivation(){
   
}
include_once WP2025_PATH.'includes/includes.php';
