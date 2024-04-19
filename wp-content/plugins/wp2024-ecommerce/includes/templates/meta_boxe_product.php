<?php
    global $post;
    $company_name = get_post_meta($post->ID,'company_name',true);
    $location = get_post_meta($post->ID,'location',true);
    $company_address = get_post_meta($post->ID,'company_address',true);
    $representative = get_post_meta($post->ID,'representative',true);
    $numberofemployees = get_post_meta($post->ID,'numberofemployees',true);
    $businessdescription = get_post_meta($post->ID,'businessdescription',true);
    $shareholders = get_post_meta($post->ID,'shareholders',true);

?>
<table class="form-table">
<tr>
<th scope="row"><label for="blogname">Tên công ty</label></th>
<td><input name="company_name" id ="title-company" type="text" size="30" value="<?= $company_name ?>" class="large-text"></td>
</tr>
<tr>
<th scope="row"><label for="blogname">Địa chỉ công ty</label></th>
<td><textarea rows="5" cols="40" class="large-text" name="company_address" id="excerpt" value="<?= $company_address ?>" style="width: 100%;height:20vh"><?= $company_address ?></textarea></td>
</tr>
<tr>
<th scope="row"><label for="blogname">Mô tả</label></th>
<td>
    <textarea rows="5" cols="40" name="representative" type="text" id="excerpt" value="<?= $representative ?>" class="large-text" style="width: 100%;height:20vh"><?= $representative ?></textarea>
</td>
</tr>
<tr>
<th scope="row"><label for="blogname">Số thành viên</label></th>
<td><input name="numberofemployees" id ="title-company" type="text" size="30" value="<?= $numberofemployees ?>" class="large-text"></td>
</tr>
<tr>
<th scope="row"><label for="blogname">Mô tả hoạt động</label></th>
<td><textarea rows= "5" cols="40" name="businessdescription" type="text" id="excerpt" value="<?= $businessdescription ?>" class="large-text" style="width: 100%;height:20vh"><?= $businessdescription ?></textarea></td>
</tr>
<tr>
<th scope="row"><label for="blogname">Cổ đông</label></th>
<td><input name="shareholders" id ="title-company" type="text" size="30" value="<?= $shareholders ?>" class="large-text"></td>
</tr>
<tr>
<th scope="row"><label for="blogname">Địa điểm trụ sở</label></th>
<td>
    <textarea rows= "5" cols="40" name="location" type="text" id="excerpt" value="<?= $location ?>" class="large-text" style="width: 100%;height:20vh"><?= $location ?></textarea></td>
</tr>
</table>
<style>
    #title-company {
    padding: 3px 8px;
    font-size: 1.7em;
    line-height: 100%;
    height: 1.7em;
    width: 100%;
    outline: 0;
    margin: 0 0 3px;
    background-color: #fff;
}
    #excerpt {
    display: block;
    margin: 12px 0 0;
    height: 4em;
    width: 100%;
}

</style>