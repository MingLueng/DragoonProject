<?php
//Hiển thị các cột posttype của sản phẩm 
add_filter('manage_product_posts_columns','wp2024_admin_columns_product_filter_columns');
function wp2024_admin_columns_product_filter_columns($columns){
    $columns['company_name'] = "Tên công ty";
    $columns['location'] = "Địa điểm trụ sở";
    $columns['representative'] = "Mô tả";
    $columns['numberofemployees'] = "Số thành viên";
    $columns['company_address'] = "Địa chỉ công ty";
    $columns['businessdescription'] = "Mô tả hoạt động";
    $columns['shareholders'] = "Cổ đông";
    return $columns;
}
//Hiển thị giá trị của các cột ra
add_action('manage_product_posts_custom_column','wp2024_admin_columns_product_render_columns',10,2);

function wp2024_admin_columns_product_render_columns($column_name,$post_id){

    switch($column_name){
        case 'company_name':
            echo get_post_meta($post_id,'company_name',true);
              
            break;
        case 'location':
            echo get_post_meta($post_id,'location',true);
         
            break;
        case 'representative':
            echo get_post_meta($post_id,'representative',true);
            break;

        case 'numberofemployees':
            echo get_post_meta($post_id,'numberofemployees',true);
            break;
            
        case 'company_address':
            echo get_post_meta($post_id,'company_address',true);
            break;

        case 'businessdescription':
            echo get_post_meta($post_id,'businessdescription',true);
            break;

        case 'shareholders':
            echo get_post_meta($post_id,'shareholders',true);
            break;
    }
}
//Hiên thị các cột của taxonomy product_category
add_filter('manage_edit_product_category_columns','wp2024_admin_columns_taxonomy_filter_columns');
function wp2024_admin_columns_taxonomy_filter_columns($columns){
    $columns['image'] =="Ảnh";
    return $columns;
}


//Hiển thị giá trị của các cột image

add_action('manage_product_category_custom_column','wp2024_admin_columns_product_category_render_columns',10,3);
function wp2024_admin_columns_product_category_render_columns($term_id,$columns,$out)
{
    if($columns == 'image')
    {
        $image = get_post_meta($term_id,'image',true);
        echo $image;
    }
}






