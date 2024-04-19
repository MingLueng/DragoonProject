<?php
//Đăng ký meta box cho sản phẩm
add_action('add_meta_boxes', 'wp2024_meta_box_product');
//Can thiệp vào hành dộng lưu bài viết
add_action('save_post','wp2024_save_post_product',10,2);

function wp2024_save_post_product($post_id){
    if( $_REQUEST['post_type'] == 'product')
    {
        if(isset($_REQUEST['company_name']) ){
            $company_name = $_REQUEST['company_name'];
            update_post_meta ($post_id,'company_name',$company_name);
        }
        if(isset($_REQUEST['location'])){
            $location = $_REQUEST['location'];
            update_post_meta ($post_id,'location',$location);
        }
        if(isset($_REQUEST['company_address'])){
            $company_address = $_REQUEST['company_address'];
            update_post_meta ($post_id,'company_address',$company_address);
        }
        if(isset($_REQUEST['representative'])){
            $representative = $_REQUEST['representative'];
            update_post_meta ($post_id,'representative',$representative);
        }
        if(isset($_REQUEST['numberofemployees'])){
            $numberofemployees = $_REQUEST['numberofemployees'];
            update_post_meta ($post_id,'numberofemployees',$numberofemployees);
        }
        if(isset($_REQUEST['businessdescription'])){
            $businessdescription = $_REQUEST['businessdescription'];
            update_post_meta ($post_id,'businessdescription',$businessdescription);
        }
        if(isset($_REQUEST['shareholders'])){
            $shareholders = $_REQUEST['shareholders'];
            update_post_meta ($post_id,'shareholders',$shareholders);
        }

    }
}
//màn hình chỉnh sửa thêm mới sản phẩm


function wp2024_meta_box_product() {
		add_meta_box(
			'wp2024_product_info',                
			'Thông tin về công ty',     
			'wp2024_meta_box_product_html',  
			'product'                       
		);
}

function wp2024_meta_box_product_html(){
    include_once WP2024_PATH.'includes/templates/meta_boxe_product.php';
}

//Đăng ký thêm trường cho taxonomy
add_action('product_category_add_form_fields','wp2024_meta_boxe_product_category_add');

function wp2024_meta_boxe_product_category_add()
{
    include_once WP2024_PATH.'includes/templates/meta_boxe_product_category_add.php';
}
//Form lúc chỉnh sửa
add_action('product_category_edit_form_fields','wp2024_meta_boxe_product_category_edit',10,2);
function wp2024_meta_boxe_product_category_edit($tag, $taxonomy)
{
    include_once WP2024_PATH.'includes/templates/meta_boxe_product_category_edit.php';
}

//Xử lý khi lưu term

/*
do_action('edit_<taxonomy_name>');
do_action('add_<taxonomy_name>');
*/


add_action('create_product_category','wp2024_meta_boxe_product_category_save',10,2);
add_action('edit_product_category','wp2024_meta_boxe_product_category_save',10,2);


function wp2024_meta_boxe_product_category_save($term_id){
    $image = $_POST['image'];
    update_term_meta($term_id,'image',$image);
}



