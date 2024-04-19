<?php
//Đăng ký post_types và taxonomy
include_once WP2024_PATH.'includes/post_types.php';

// đăng ký thêm các trường cho 1 product
include_once WP2024_PATH.'includes/metaboxes.php';

// thêm các cột vào custom posttype và taxonomy
include_once WP2024_PATH.'includes/admin_columns.php';

//tạo menu cho admin
include_once WP2024_PATH.'includes/admin_menus.php';

//làm việc với cơ sở dữ liệu trong wordpress

include_once WP2024_PATH.'includes/classes/wp2024orders.php';

//sử dụng các hàm trong functions.php

include_once WP2024_PATH.'includes/functions.php';

//sử dụng ajax trong

include_once WP2024_PATH.'includes/admin_ajaxs.php'; 

//sử dụng cài đặt cấu hình

include_once WP2024_PATH.'includes/admin_setting.php';

//sử dụng api trong wordpress

include_once WP2024_PATH.'includes/apis.php';