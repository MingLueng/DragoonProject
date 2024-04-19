<?php 
//Đăng ký cấu hình

/*
$option_group:wp2024_settings_page
$option_name:wp2024_settings_options

wp2024_settings_section_shop_info:Thông tin công ty
wp2024_settings_field_name:Tên công ty
wp2024_settings_field_phone:Số điện thoại
wp2024_settings_field_email:Số email
wp2024_setting_section_shop_payment:Thông tin cửa hàng
wp2024_settings_field_name:Tên ngân hàng
wp2024_settings_field_number:Số tài khoản
wp2024_settings_field_user:Chủ tài khoản
*/

add_action('admin_init', 'wp2024_settings_init');
function wp2024_settings_init() {
	// register a new setting for "reading" page
	register_setting('wp2024_settings_page', 'wp2024_settings_options');
    add_settings_section(
		'wp2024_settings_section_shop_info',
		'Thông tin công ty',
        'wp2024_settings_section_shop_info_callback',
        'wp2024_settings_page',
      
	);  
    add_settings_field(
        'wp2024_settings_field_name',
        'Tên công ty',
        'wp2024_settings_field_render',
        'wp2024_settings_page',
        'wp2024_settings_section_shop_info',
        [
            'label_for'         => 'wp2024_settings_field_name',
			'class'             => 'text',
			'wporg_custom_data' => 'form-control'
        ]

    );
    add_settings_field(
        'wp2024_settings_field_phone',
        'Số điện thoại',
        'wp2024_settings_field_render',
        'wp2024_settings_page',
        'wp2024_settings_section_shop_info',
        [
            'label_for'         => 'wp2024_settings_field_phone',
			'class'             => 'text',
			'wporg_custom_data' => 'form-control'
        ]

    );
    add_settings_field(
        'wp2024_settings_field_email',
        'Email',
        'wp2024_settings_field_render',
        'wp2024_settings_page',
        'wp2024_settings_section_shop_info',
        [
            'label_for'         => 'wp2024_settings_field_email',
			'class'             => 'text',
			'wporg_custom_data' => 'form-control'
        ]

    );
    add_settings_section(
		'wp2024_settings_section_payment',
		'Thông tin tài khoản',
        'wp2024_settings_section_payment_callback',
        'wp2024_settings_page',
      
	);
    add_settings_field(
        'wp2024_settings_field_bank_name',
        'Tên ngân hàng',
        'wp2024_settings_field_render',
        'wp2024_settings_page',
        'wp2024_settings_section_payment',
        [
            'label_for'         => 'wp2024_settings_field_bank_name',
			'class'             => 'text',
			'wporg_custom_data' => 'form-control'
        ]

    );
    add_settings_field(
        'wp2024_settings_field_number',
        'Số tài khoản',
        'wp2024_settings_field_render',
        'wp2024_settings_page',
        'wp2024_settings_section_payment',
        [
            'label_for'         => 'wp2024_settings_field_number',
			'class'             => 'text',
			'wporg_custom_data' => 'form-control'
        ]

    );   
    add_settings_field(
        'wp2024_settings_field_user',
        'Chủ tài khoản',
        'wp2024_settings_field_render',
        'wp2024_settings_page',
        'wp2024_settings_section_payment',
        [
            'label_for'         => 'wp2024_settings_field_user',
			'class'             => 'text',
			'wporg_custom_data' => 'form-control'
        ]

    );  

}

function wp2024_settings_section_shop_info_callback() {
    echo '<p>Thông tin về công ty của bạn</p>'; 
}

function wp2024_settings_section_payment_callback() {
    echo '<p>Thông tin về tài khoản ngân hàng</p>'; 
}
function wp2024_settings_field_render($args){
    $type= isset( $args ['type'] ) ? $args['type'] : 'text';
    $option = get_option('wp2024_settings_options');
    // pr($option);
    // echo '<br>'.$args['label_for'];
    switch($type){
        case 'text':
        ?>
        <input type="text" name="wp2024_settings_options[<?= $args['label_for'];?>]"
        value="<?= $option[$args['label_for']]; ?>";
        >
        <?php
        break;
        case 'password':
        ?>
        <input type="password" name="wp2024_settings_options[<?= $args['label_for'];?>]"
        value="<?= $option[$args['label_for']]; ?>";
        >
        <?php
        break;
    }
}
?>
