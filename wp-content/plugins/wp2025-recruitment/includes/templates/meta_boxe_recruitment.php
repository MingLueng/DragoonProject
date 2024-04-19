<?php
    global $post;
    $occupation = get_post_meta($post->ID,'occupation',true);
    $business_content = get_post_meta($post->ID,'business_content',true);
    $skills_qualifications = get_post_meta($post->ID,'skills_qualifications',true);
    $employment_status = get_post_meta($post->ID,'employment_status',true);
    $working_time = get_post_meta($post->ID,'working_time',true);
    $treatment = get_post_meta($post->ID,'treatment',true);
    $application_method = get_post_meta($post->ID,'application_method',true);

?>
<table class="form-table">

<tr>
<th scope="row"><label for="blogname">Nghề nghiệp</label></th>
<td><textarea rows="5" cols="40" class="large-text" name="occupation" id="excerpt" value="<?= $occupation ?>" style="width: 100%;height:20vh"><?= $occupation ?></textarea></td>
</tr>
<tr>
<th scope="row"><label for="blogname">Nội dung công việc</label></th>
<td>
<input name="business_content" id ="title-company" type="text" size="30" value="<?= $business_content ?>" class="large-text">
</td>
</tr>
<tr>
<th scope="row"><label for="blogname">Kĩ năng và trình độ cần thiết</label></th>
<td><textarea rows="5" cols="40" class="large-text" name="skills_qualifications" id="excerpt" value="<?= $skills_qualifications ?>" style="width: 100%;height:20vh"><?= $skills_qualifications ?></textarea></td>
</tr>
<tr>
<th scope="row"><label for="blogname">Trạng thái nhân viên</label></th>
<td><input name="employment_status" id ="title-company" type="text" size="30" value="<?= $employment_status ?>" class="large-text"></td>
</tr>
<tr>
<th scope="row"><label for="blogname">Lương thưởng</label></th>
<td>
    <textarea rows= "5" cols="40" name="treatment" type="text" id="excerpt" value="<?= $treatment ?>" class="large-text" style="width: 100%;height:20vh"><?= $treatment ?></textarea></td>
</tr>
<tr>
<th scope="row"><label for="blogname">Điều kiện ứng tuyển</label></th>
<td>
    <textarea rows= "5" cols="40" name="application_method" type="text" id="excerpt" value="<?= $application_method ?>" class="large-text" style="width: 100%;height:20vh"><?= $application_method ?></textarea></td>
</tr>
<tr>
<th scope="row"><label for="blogname">Thời gian làm việc</label></th>
<td><input name="working_time" id ="title-company" type="text" size="30" value="<?= $working_time ?>" class="large-text"></td>
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