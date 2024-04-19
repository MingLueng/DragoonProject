<?php
/*
 * Plugin Name:       WordPress 2024 - Ecommerce
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
 * Text Domain:       wp2024-ecommerce
 * Domain Path:       /languages
 */

//Định nghĩa các hằng số của plugin

 define('WP2024_PATH', plugin_dir_path(__FILE__));
 define('WP2024_URL', plugin_dir_url(__FILE__));
//Tải file ngôn ngữ
add_action('init','wp2024_load_textdomain');

function wp2024_load_textdomain(){
    load_plugin_textdomain( 'wp2024-ecommerce', false, WP2024_PATH . '/languages' ); 
}
function wp2024_load_textdomain_mofile( $mofile, $domain ) {
	if ( 'wp2024-ecommerce' === $domain && false !== strpos( $mofile, WP_LANG_DIR . '/plugins/' ) ) {
		$locale = apply_filters( 'plugin_locale', determine_locale(), $domain );
		$mofile = WP2024_PATH . '/languages/' . $domain . '-' . $locale . '.mo';
	}
	return $mofile;
}
add_filter( 'load_textdomain_mofile', 'wp2024_load_textdomain_mofile', 10, 2 );
//Định nghĩa hành động khi plugin được kích hoạt
register_activation_hook(__FILE__,'wp2024_ecommerce_activation');
function wp2024_ecommerce_activation()
{
    //Tạo CSDL
    include_once WP2024_PATH.'includes/db/migration.php';
    //Tạo dữ liệu mẫu
    include_once WP2024_PATH.'includes/db/seeder.php';
    //Tạo option
    update_option('wp2024_settings_options',[]);
}

//Định nghĩa hành động khi plugin được tắt đi
register_deactivation_hook(__FILE__,'wp2024_ecommerce_deactivation');
function wp2024_ecommerce_deactivation(){
   
}
include_once WP2024_PATH.'includes/includes.php';
