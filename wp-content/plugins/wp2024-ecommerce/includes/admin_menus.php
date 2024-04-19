<?php
add_action('admin_menu','wp2024_admin_menu');
function wp2024_admin_menu()
{
    //Thêm menu cha
    add_menu_page(
        'WordPress 2024',
        'WordPress 2024',
        'manage_options',
        'wp2024', //menu_slug
        'wp2024_admin_page_dashboard',
        'dasboard_admin_page',
        '25',
    );
    add_submenu_page(
        'wp2024',
        'Đơn hàng',
        'Đơn hàng',
        'manage_options',
        'wp2024-orders', //menu_slug
        'wp2024_admin_page_orders',
        'orders_admin_page',
        '26',
    );

    add_submenu_page(
        'wp2024',
        'Cấu hình',
        'Cấu hình',
        'manage_options',
        'wp2024_settings', //menu_slug
        'wp2024_admin_page_settings',
        'settings_admin_page',
        '27',
    );
}

function wp2024_admin_page_dashboard()
{
    include_once WP2024_PATH.'includes/admin_pages/dashboard.php';
}
function wp2024_admin_page_orders()
{
    include_once WP2024_PATH.'includes/admin_pages/orders.php';
}
function wp2024_admin_page_settings()
{
    include_once WP2024_PATH.'includes/admin_pages/settings.php';
}

