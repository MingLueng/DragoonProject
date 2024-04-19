<?php
    $objwp2024orders = new wp2024orders();
	$results = $objwp2024orders->paginate(3);

	//pr( $_REQUEST );
	extract($results);
	$action = isset( $_REQUEST['action'] ) ? $_REQUEST['action'] : '';
	if($action =='trash'){
		$orderIds = $_REQUEST['post'];
		if(count($orderIds)){
			foreach($orderIds as $orderId);
			$objwp2024orders->trash($orderId);
		}
		wp_redirect('admin.php?page=wp2024_orders');
		exit();
	}
	if(isset($_GET['order_id'] ) && $_GET['order_id'] != '' ){
		include WP2024_PATH.'includes/admin_pages/orders/edit.php';
	}
	else{
		include WP2024_PATH.'includes/admin_pages/orders/list.php';
	}
	
?>



<script>
	let ajax_url='<?= admin_url('admin-ajax.php'); ?>';
	debugger
	jQuery(document).ready(function() {
		
		jQuery('.order-status').on('change',function(){
			let orderids = jQuery(this).data('id');
			let status = jQuery(this).val();
		});	
		jQuery.ajax({
			url: 'ajax_url',
			method:'POST',
			datatype: 'json',
			action:'ajax_wp2024_order_change_status',
			data:{
				
				order_id: orderids,
				status: status,
			},
			
			success:function(res){
				alert('Cập nhật thành công!');
			},
			error:function(error){
				alert('Cập nhật thất bại.');
			}

		})
	})
</script>
