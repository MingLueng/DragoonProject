<?php
 $order_id = isset($_GET['order_id']) ? $_GET['order_id'] : 0;
if($order_id){
    $objwp2024orders = new wp2024orders();
	$order = $objwp2024orders->find($order_id);
    $order_items = $objwp2024orders->order_item($order_id);

   if(isset($_POST['wp2024_save_order'])){
    //Người dùng đang lưu order
    $order_status = isset($_REQUEST['order_status'] )? $_REQUEST['order_status']:'';
    $notes = isset($_REQUEST['note'] )? $_REQUEST['note']:'';
    
    $objwp2024orders->update($order_id,[
        'status'-> $order_status,
        'note'-> $notes,
        
    ]);
    wp_redirect('admin.php?page=wp2024-orders&order_id='.$order_id);
	exit();
   }

}
?>
<style>
    table.form-table.bordered th, table.form-table.bordered td {
        border: 1px solid #ccc;
        text-align: center;
    }
</style>
<div class="wrap">
    <h1 class="wp-heading-inline">Chi tiết đơn hàng:<?= $order-> id ?></h1>
    <form id="posts-filter" method="post">
        <div id="poststuff">
            <div id="post-body" class="metabox-holder columns-2">
                <!-- Left columns -->
                <div id="post-body-content">
                    <!-- Thông tin đơn hàng -->
                    <div class="postbox ">
                        <div class="postbox-header">
                            <h2 class="hndle ui-sortable-handle">Thông tin đơn hàng</h2>
                        </div>
                        <div class="inside">
                            <table class="form-table  ">
                                <tr>
                                    <td>Mã đơn hàng</td>
                                    <td>
                                    <?= $order-> id ?></td>
                                </tr>
                                <tr>
                                    <td>Ngày đặt hàng</td>
                                    <td><?= date('d-m-Y',strtotime($order->created_date)) ?></td>
                                </tr>
                                <tr>
                                    <td>Tên khách hàng</td>
                                    <td><?= $order-> custommer_name ?></td>
                                </tr>
                                <tr>
                                    <td>Số điện thoại</td>
                                    <td><?= $order-> custommer_phone ?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><?= $order-> custommer_email ?></td>
                                </tr>
                                <tr>
                                    <td>Địa chỉ</td>
                                    <td><?= $order-> custommer_address ?></td>
                                </tr>
                                <tr>
                                    <td>Ghi chú</td>
                                    <td>
                                        <textarea rows="5" name="note" class="large-text"><?= $order-> note ?></textarea>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <!-- Chi tiết đơn hàng -->
                    <div class="postbox ">
                        <div class="postbox-header">
                            <h2 class="hndle">Chi tiết đơn hàng</h2>
                        </div>
                        <div class="inside">
                            <table class="form-table bordered">
                                <tr>
                                    <th>Mã sản phẩm</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Giá</th>
                                </tr>
                                <?php foreach($order_items as $order_item): ?>
                                <tr>
                                    <td><?= $order_item-> product_id ?></td>
                                    <td><?= $order_item-> post_title ?></td>
                                    <td><?= $order_item-> quantity ?></td>
                                    <td><?= number_format($order_item->price) ?></td>
                                </tr>
                                <?php endforeach;?>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Right columns -->
                <div id="postbox-container-1">
                    <div class="postbox">
                        <div class="postbox-header">
                            <h2 class="hndle">Hành động</h2>
                        </div>
                        <div class="inside">
                            <div class="submitbox">
                                <p>
                                    <select name="order_status" class="large-text ">
                                    <option <?= $order ->status == 'pending' ? 'selected' : '' ; ?> value='pending'>Đơn hàng mới</option>
                                    <option <?= $order ->status == 'completed' ? 'selected' : '' ; ?> value='completed'>Đơn hàng đã hoàn thành</option>
                                    <option <?= $order ->status == 'canceled' ? 'selected' : '' ; ?> value='canceled'>Đơn hàng đã hủy</option>
                                    </select>
                                </p>
                                <p>
                                    <input type="submit" name="wp2024_save_order" id="submit" class="button button-primary"
                                        value="Lưu thay đổi">
                                </p>
                            </div>
                        </div>
                    </div>
                </div> 

            </div>
        </div>
    </form>
</div>