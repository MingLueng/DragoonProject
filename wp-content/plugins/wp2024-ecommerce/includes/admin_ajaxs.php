<?php
// Khi đã đăng nhập
add_action('wp_ajax_wp2024_order_change_status', 'ajax_wp2024_order_change_status' );
//Khi chưa đăng nhập
add_action('wp_ajax_nopri_wp2024_order_change_status','ajax_wp2024_order_change_status');

function ajax_wp2024_order_change_status(){
    pr( $_REQUEST );
    $order_id = $_REQUEST['order_id'];
    $status = $_REQUEST['orders-status'];
    $objwp2024orders = new wp2024orders();
    $objwp2024orders -> change_status($orderid,$status);
    $res =[
        'success'=> true
    ];
    
    echo json_encode($res);
    die();
}
?>