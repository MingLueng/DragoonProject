<div class="wrap">
<h1 class="wp-heading-inline"><?= __('Manage Orders',' wp2024-ecommerce') ?></h1> 
<hr class="wp-header-end">
<ul class="subsubsub">
	<li class="all"><a href=""><?= __('All','wp2024-ecommerce') ?></a></li>|
	<li class="publish"><a href="admin.php?page=wp2024-orders&status=pending"><?= __('New Orders','wp2024-ecommerce') ?></a></li>|
    <li class="publish"><a href="admin.php?page=wp2024-orders&status=completed"><?= __('Complete Orders','wp2024-ecommerce') ?></a></li>|
    <li class="publish"><a href="admin.php?page=wp2024-orders&status=cancelced"><?= __('Canceled Orders','wp2024-ecommerce') ?></a></li>
</ul>


<form action=""id="posts-filter" method="get">
<input type="hidden" name="page" value="wp2024-orders">

<p class="search-box">
	<label class="screen-reader-text" for="post-search-input"><?= __('Search Orders','wp2024-ecommerce');?>:</label>
	<input type="search" id="post-search-input" name="s" value="">
	<input type="submit" id="search-submit" class="button" value="Tìm kiếm đơn hàng">
</p>
<div class="tablenav top">
	<div class="alignleft actions bulkactions">
		<label for="bulk-action-selector-top" class="screen-reader-text"><?= __('Select Action','wp2024-ecommerce') ?></label>

<select name="action" id="bulk-action-selector-top">
<option value="-1">Hành động</option>
	<option value="edit" class="hide-if-no-js">Chỉnh sửa</option>
	<option value="trash">Bỏ vào thùng rác</option>
</select>
<input type="submit" id="doaction" class="button action" value="Áp dụng">
		</div>
		<div class="alignleft actions">
				<label for="filter-by-date" class="screen-reader-text"><?= __('Select Menu','wp2024-ecommerce') ?></label>
		<select name="status" id="cat" class="postform">
			<option value="0">Tất cả trạng thái</option>
			<option class="level-0" value="pending"><?= __('New Orders','wp2024-ecommerce') ?></option>
			<option class="level-0" value="completed"><?= __('Complete Orders','wp2024-ecommerce') ?></option>
			<option class="level-0" value="canceled"><?= __('Canceled Orders','wp2024-ecommerce') ?></option>
		</select>
		<label class="screen-reader-text" for="cat"><?= __('Select Menu','wp2024-ecommerce') ?></label><select name="cat" id="cat" class="postform">
	<option value="0">Tất cả chuyên mục</option>
	<option class="level-0" value="1">Chưa phân loại</option>

</select>
<input type="submit" name="filter_action" id="post-query-submit" class="button" value="Lọc">
</div>

<?php 
include WP2024_PATH.'includes/templates/elements/elm_paginate.php'
?>
	<br class="clear">
	</div>
<h2 class="screen-reader-text">Danh sách bài viết</h2>
<table class="wp-list-table widefat fixed striped table-view-list posts">
	<thead>
	<tr>
	<td id="cb" class="manage-column column-cb check-column"><input id="cb-select-all-1" type="checkbox">
		<label for="cb-select-all-1"><span class="screen-reader-text">Chọn toàn bộ</span>
	</label>
	</td>
		<th scope="col">Mã đơn hàng</th>
		<th scope="col">Tổng tiền</th>
		<th scope="col">Khách hàng</th>
		<th scope="col">Điện thoại</th>
		<th scope="col">Trạng thái</th>
		<th scope="col">Thời gian</th>
	</tr>
	</thead>

	<tbody id="the-list">
		<?php foreach($items as $item ): ?>
	<tr id="post-<?= $item->id; ?>" class="edit author-self level-0 post-<?= $item->id; ?> type-post status-publish format-standard hentry category-khong-phan-loai">
	<th scope="row" class="check-column">			
		<input id="cb-select-<?= $item->id; ?>" type="checkbox" name="post[]" value="<?= $item->id; ?>">
			<label for="cb-select-<?= $item->id; ?>">
				<span class="screen-reader-text">
				Chọn Đây là ai				
			</span>
			</label>
			<div class="locked-indicator">
			<span class="locked-indicator-icon" aria-hidden="true"></span>
			<span class="screen-reader-text">
				“Đây là ai” đã bị khóa				
			</span>
			</div>
	</th>
	<td class="title column-title has-row-actions column-primary page-title" data-colname="Mã đơn hàng">
	<strong>
		<a class="row-title" href="admin.php?page=wp2024-orders&order_id=<?= $item->id;?>">#<?= $item->id;?></a>
	</strong>
	<!-- <div class="row-actions">
		<span class="edit"><a href="#" aria-label="Sửa “Đây là ai”">Chỉnh sửa</a> | </span>
		<span class="inline hide-if-no-js">
			<span class="view"><a href="#" rel="bookmark" aria-label="Xem “Đây là ai”">Xem</a></span>
    </div> -->
        </td>
	<td data-colname="Tổng tiền">
	<a href="#"><?= number_format($item->total); ?></a>
	</td>
	<td data-colname="Khách hàng">
	<a href="#"><?= $item->custommer_name; ?></a>
	</td>
	<td data-colname="Điện thoại">
	<a href="#"><?= $item->custommer_phone; ?></a>
	</td>
	<td class="author column-author" data-colname="Trạng thái">
		<select class="order-status" name="orders-status" data-id="<?= $item -> id; ?>">
			<option <?= $item ->status == 'pending' ? 'selected' : '' ; ?> value='pending'>Đơn hàng mới</option>
			<option <?= $item ->status == 'completed' ? 'selected' : '' ; ?> value='completed'>Đơn hàng đã hoàn thành</option>
			<option <?= $item ->status == 'canceled' ? 'selected' : '' ; ?> value='canceled'>Đơn hàng đã hủy</option>
		</select>
	</td>

	<td class="date column-date" data-colname="Thời gian">
	<a href="#"><?= date('d-m-Y',strtotime($item->created_date)) ?></a>
	</td>
	</tr>
	<?php endforeach;?>
		<!-- <tr class="no-items">
			<td class="colspanchange" colspan="7">Không tìm thấy bài viết nào.</td>
		</tr>-->
	</tbody>
	<tfoot>
	<tr>
	<td class="manage-column column-cb check-column"><input id="cb-select-all-2" type="checkbox">
		<label for="cb-select-all-2"><span class="screen-reader-text">Chọn toàn bộ</span></label></td>
        <th scope="col">Mã đơn hàng</th>
        <th scope="col">Tổng tiền</th>
        <th scope="col">Khách hàng</th>
        <th scope="col">Điện thoại</th>
		<th scope="col">Trạng thái</th>
        <th scope="col">Thời gian</th>
		</th>
	</tr>
	</tfoot>
</table>
<div class="tablenav bottom">
<div class="alignleft actions bulkactions">
<label for="bulk-action-selector-bottom" class="screen-reader-text">Lựa chọn thao tác hàng loạt</label>
<select name="action2" id="bulk-action-selector-bottom">
<option value="-1">Hành động</option>
	<option value="edit" class="hide-if-no-js">Chỉnh sửa</option>
	<option value="trash">Bỏ vào thùng rác</option>
</select>
<input type="submit" id="doaction2" class="button action" value="Áp dụng">
		</div>
			<div class="alignleft actions">

		</div>
		<?php 
			include WP2024_PATH.'includes/templates/elements/elm_paginate.php'
		?>
		<br class="clear">
	</div>
</form>
</div>