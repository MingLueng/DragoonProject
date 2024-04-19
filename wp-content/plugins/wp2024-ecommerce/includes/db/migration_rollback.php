<?php
Xóa CSDL
global $wpdb;
$tbl_order = $wpdb->prefix.'wp2024_orders';//wp_wp2024_orders;
$tbl_order_detail = $wpdb->prefix.'wp2024_orders_detail';//wp_wp2024_orders_detail;
$sql = "DROP TABLE IF EXISTS $tbl_order";
$wpdb->query( $sql );
$sql ="DROP TABLE IF EXISTS $tbl_order_detail";
$wpdb->query( $sql );
?>