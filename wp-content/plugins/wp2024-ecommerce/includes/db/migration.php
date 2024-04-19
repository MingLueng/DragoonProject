<?php
//Tạo bảng
require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
//dbDelta($sql);
global $wpdb;
$charset_collate =$wpdb->get_charset_collate();
$tbl_order = $wpdb->prefix.'wp2024_orders';//wp_wp2024_orders;
$tbl_order_detail = $wpdb->prefix.'wp2024_orders_detail';//wp_wp2024_orders_detail;
$sql= "
CREATE TABLE `$tbl_order` (
	`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`created_date` DATETIME NULL DEFAULT NULL,
	`total` DOUBLE NULL DEFAULT NULL,
	`status` VARCHAR(255) NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`payment_method` VARCHAR(255) NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`custommer_name` VARCHAR(255) NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`custommer_phone` VARCHAR(255) NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`custommer_email` VARCHAR(255) NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
    `custommer_address` text COLLATE utf8mb4_unicode_520_ci,
	`note` TEXT NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`deleted` TINYINT(4) NULL DEFAULT '0',
	PRIMARY KEY (id) 
) ". $charset_collate .";";

dbDelta( $sql );

$sql="
CREATE TABLE `$tbl_order_detail` (
	`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`product_id` INT(10) NOT NULL,
	`order_id` INT(10) NOT NULL,
    `quantity` INT(10) NOT NULL,
	`price` double NOT NULL,
	PRIMARY KEY (id) 
) ". $charset_collate .";" ;

dbDelta( $sql );
