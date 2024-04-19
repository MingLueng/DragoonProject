<?php
//Định nghĩa về hành động khi plugin bị xóa
if(! defined('WP_UNINSTALL_PLUGIN') ){
    die;
}
 //Xóa CSDL
 include_once WP2024_PATH.'includes/db/migration_rollback.php';
 //Xóa option
 delete_option('wp2024_settings_options');

?>