<?php
//Chèn dữ liệu mẫu vào
global $wpdb;
$tbl_order = $wpdb->prefix.'wp2024_orders';//wp_wp2024_orders;
$tbl_order_detail = $wpdb->prefix.'wp2024_orders_detail';//wp_wp2024_orders_detail;
$orders =[
    [
        'created_date' => '2024-02-08',
        'total' => '20000',
        'status' => 'pending',
        'payment_method' => 'cod',
        'custommer_name' => 'Lê Văn An',
        'custommer_phone' => '0923543567',
        'custommer_email' => 'hoangthanhtung@gmail.com',
        'custommer_address' => 'Hoàng Đạo Thúy',
        'note' => 'Giao hàng nhanh',
        
    ],
    [
        'created_date' => '2024-02-08',
        'total' => '50000',
        'status' => 'pending',
        'payment_method' => 'cod',
        'custommer_name' => 'Thanh Bình',
        'custommer_phone' => '0927685644',
        'custommer_email' => 'thanhbinh@gmail.com',
        'custommer_address' => 'Thái Hà',
        'note' => 'Giao hàng nhanh',
      
    ],
    [
        'created_date' => '2024-02-08',
        'total' => '67000',
        'status' => 'pending',
        'payment_method' => 'cod',
        'custommer_name' => 'Phạm Hoàng Trung',
        'custommer_phone' => '0908766433',
        'custommer_email' => 'hoangtrung@gmail.com',
        'custommer_address' => 'Thái Thịnh',
        'note' => 'Giao hàng nhanh',
       
    ],
    [
        'created_date' => '2024-02-08',
        'total' => '51000',
        'status' => 'pending',
        'payment_method' => 'cod',
        'custommer_name' => 'Lương Ngọc Quyến',
        'custommer_phone' => '0904579623',
        'custommer_email' => 'ngocquyen@gmail.com',
        'custommer_address' => 'Tây Sơn',
        'note' => 'Giao hàng nhanh',
       
    ]
];
global $wpdb;
foreach($orders as $order){
    $wpdb-> insert($tbl_order,$order);
}
$order_details =[
    [     
        'product_id' => '1',
        'order_id' => '1',
        'quantity' => '3',
        'price' => '20000',
    ],
    [      
        'product_id' => '2',
        'order_id' => '2',
        'quantity' => '10',
        'price' => '50000',
    ],
    [
        'product_id' => '3',
        'order_id' => '3',
        'quantity' => '9',
        'price' => '67000',
    ],
    [
        'product_id' => '3',
        'order_id' => '4',
        'quantity' => '9',
        'price' => '67000',
    ],
];
global $wpdb;
foreach($order_details as $order_detail){
    $wpdb-> insert($tbl_order_detail,$order_detail);
}
