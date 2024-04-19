<?php
//Đăng ký loại bài viết sản phẩm

add_action('init','wp2025_custom_post_type');

function wp2025_custom_post_type(){
    //post: Bài viết
    //page: Trang
    //product: sản phẩm

    register_post_type('recruitment',
    array(
        'labels'      => array(
            'name'          => __('Tin tuyển dụng', 'wp2025-recruitment'),
            'singular_name' => __('Tuyển dụng', 'wp2025-recruitment'),
        ),
            'public'      => true,
            'has_archive' => true,
            'rewrite' => array('slug'=>'recruitments'),
            'supports' => array('title','editor','thumbnail','excerpt'),  
    )
);
}

//Đăng ký loại taxonomy
add_action( 'init', 'wp2025_register_taxonomy_recruitment' );
function wp2025_register_taxonomy_recruitment() {
    $labels = array(
        'name'              => _x( 'Danh mục', 'taxonomy general name' ),//
        'singular_name'     => _x( 'Danh mục', 'taxonomy singular name' ),//
        'search_items'      => __( 'Search Danh mục' ),//
        'all_items'         => __( 'All Danh mục' ),
        'parent_item'       => __( 'Parent Danh mục' ),//
        'parent_item_colon' => __( 'Parent Danh mục:' ),//
        'edit_item'         => __( 'Edit Danh mục' ),//
        'update_item'       => __( 'Update Danh mục' ),//
        'add_new_item'      => __( 'Add New Danh mục' ),//
        'new_item_name'     => __( 'New Danh mục Name' ),
        'menu_name'         => __( 'Danh mục' ),
        
    );
    $args   = array(
        'hierarchical'      => true, // make it hierarchical (like categories)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => [ 'slug' => 'course' ],
    );
    register_taxonomy( 'recruitment_category', [ 'recruitment' ], $args );
}


