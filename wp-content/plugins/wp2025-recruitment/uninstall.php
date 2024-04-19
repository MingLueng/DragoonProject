<?php
//Định nghĩa về hành động khi plugin bị xóa
if(! defined('WP_UNINSTALL_PLUGIN') ){
    die;
}

 //Xóa option
 delete_option('wp2025_settings_options');

?>