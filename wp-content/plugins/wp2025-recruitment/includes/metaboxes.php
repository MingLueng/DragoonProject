<?php
//Đăng ký meta box cho sản phẩm
add_action('add_meta_boxes', 'wp2025_meta_box_recruitment');
//Can thiệp vào hành dộng lưu bài viết
add_action('save_post','wp2025_save_post_recruitment',10,2);

function wp2025_save_post_recruitment($post_id){
    if( $_REQUEST['post_type'] == 'recruitment')
    {
        if(isset($_REQUEST['occupation']) ){
            $occupation = $_REQUEST['occupation'];
            update_post_meta ($post_id,'occupation',$occupation);
        }
        if(isset($_REQUEST['business_content'])){
            $business_content = $_REQUEST['business_content'];
            update_post_meta ($post_id,'business_content',$business_content);
        }
        if(isset($_REQUEST['skills_qualifications'])){
            $skills_qualifications = $_REQUEST['skills_qualifications'];
            update_post_meta ($post_id,'skills_qualifications',$skills_qualifications);
        }
        if(isset($_REQUEST['employment_status'])){
            $employment_status = $_REQUEST['employment_status'];
            update_post_meta ($post_id,'employment_status',$employment_status);
        }
        if(isset($_REQUEST['working_time'])){
            $working_time = $_REQUEST['working_time'];
            update_post_meta ($post_id,'working_time',$working_time);
        }
        if(isset($_REQUEST['treatment'])){
            $treatment = $_REQUEST['treatment'];
            update_post_meta ($post_id,'treatment',$treatment);
        }
        if(isset($_REQUEST['application_method'])){
            $application_method = $_REQUEST['application_method'];
            update_post_meta ($post_id,'application_method',$application_method);
        }

    }
}
//màn hình chỉnh sửa thêm mới sản phẩm


function wp2025_meta_box_recruitment() {
		add_meta_box(
			'wp2025_recruitment_info',                
			'Thông tin về tuyển dụng',     
			'wp2025_meta_box_recruitment_html',  
			'recruitment'                       
		);
}

function wp2025_meta_box_recruitment_html(){
    include_once WP2025_PATH.'includes/templates/meta_boxe_recruitment.php';
}

//Đăng ký thêm trường cho taxonomy
add_action('recruitment_category_add_form_fields','wp2025_meta_boxe_recruitment_category_add');

function wp2025_meta_boxe_recruitment_category_add()
{
    include_once WP2025_PATH.'includes/templates/meta_boxe_recruitment_category_add.php';
}
//Form lúc chỉnh sửa
add_action('recruitment_category_edit_form_fields','wp2025_meta_boxe_recruitment_category_edit',10,2);
function wp2025_meta_boxe_recruitment_category_edit($tag, $taxonomy)
{
    include_once WP2025_PATH.'includes/templates/meta_boxe_recruitment_category_edit.php';
}

//Xử lý khi lưu term

/*
do_action('edit_<taxonomy_name>');
do_action('add_<taxonomy_name>');
*/


add_action('create_recruitment_category','wp2024_meta_boxe_recruitment_category_save',10,2);
add_action('edit_recruitment_category','wp2024_meta_boxe_recruitment_category_save',10,2);


function wp2025_meta_boxe_recruitment_category_save($term_id){
    $image = $_POST['image'];
    update_term_meta($term_id,'image',$image);
}



