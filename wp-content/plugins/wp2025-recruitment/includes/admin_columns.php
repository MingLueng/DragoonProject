<?php
//Hiển thị các cột posttype của sản phẩm 
add_filter('manage_recruitment_posts_columns','wp2025_admin_columns_recruitment_filter_columns');
function wp2025_admin_columns_recruitment_filter_columns($columns){
    $columns['occupation'] = "Nghề nghiệp";
    $columns['business_content'] = "Nội dung công việc";
    $columns['skills_qualifications'] = "Kĩ năng và trình độ cần thiết";
    $columns['employment_status'] = "Trạng thái nhân viên";
    $columns['working_time'] = "Thời gian làm việc";
    $columns['treatment'] = "Lương thưởng";
    $columns['application_method'] = "Điều kiện ứng tuyển";
    return $columns;
}
//Hiển thị giá trị của các cột ra
add_action('manage_recruitment_posts_custom_column','wp2025_admin_columns_recruitment_render_columns',10,2);

function wp2025_admin_columns_recruitment_render_columns($column_name,$post_id){

    switch($column_name){
        case 'occupation':
            echo get_post_meta($post_id,'occupation',true);
              
            break;
        case 'business_content':
            echo get_post_meta($post_id,'business_content',true);
         
            break;
        case 'skills_qualifications':
            echo get_post_meta($post_id,'skills_qualifications',true);
            break;

        case 'employment_status':
            echo get_post_meta($post_id,'employment_status',true);
            break;
            
        case 'working_time':
            echo get_post_meta($post_id,'working_time',true);
            break;

        case 'treatment':
            echo get_post_meta($post_id,'treatment',true);
            break;

        case 'application_method':
            echo get_post_meta($post_id,'application_method',true);
            break;
    }
}
//Hiên thị các cột của taxonomy product_category
add_filter('manage_edit_recruitment_category_columns','wp2025_admin_columns_taxonomy_filter_columns');
function wp2025_admin_columns_taxonomy_filter_columns($columns){
    $columns['image'] =="Ảnh";
    return $columns;
}


//Hiển thị giá trị của các cột image

add_action('manage_recruitment_category_custom_column','wp2025_admin_columns_recruitment_category_render_columns',10,3);
function wp2025_admin_columns_recruitment_category_render_columns($term_id,$columns,$out)
{
    if($columns == 'image')
    {
        $image = get_post_meta($term_id,'image',true);
        echo $image;
    }
}






