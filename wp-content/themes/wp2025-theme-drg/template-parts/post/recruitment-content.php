<?php
$last_products = get_posts([
  'post_type' => 'recruitment',
  'numberposts' => '1'
]);

?>
<?php if(count($last_products) ): ?>
<div class="s-divider"></div>
<?php foreach($last_products as $last_product) :?>
    <?php
         $occupation = get_post_meta($last_product->ID,'occupation',true);
         $business_content = get_post_meta($last_product->ID,'business_content',true);
         $skills_qualifications = get_post_meta($last_product->ID,'skills_qualifications',true);
         $employment_status = get_post_meta($last_product->ID,'employment_status',true);
         $working_time = get_post_meta($last_product->ID,'working_time',true);
         $treatment = get_post_meta($last_product->ID,'treatment',true);
         $application_method = get_post_meta($last_product->ID,'application_method',true);
 
      ?>
  <header class="s-plain_header">
    <h2 class="s-plain_heading">
      <span class="--langMain">RECRUITMENT</span>
    </h2>
  
    <div class="s-plain_introduction container text">
    <?= get_post_field('post_content', $last_product->ID)?>
    </div>
  </header>
  <main class="s-plain_content container">
    <table class="__table--information table_requirement js_scrollelm anim_fadein anim_trans-bottom ">
      <tbody>
        <tr>
          <th>
            <span>Occupation</span>
          </th>
          <td>
            <ul class="list_job-category">
              <li>
                <span class="job_name"><?= $occupation;?></span>
              </li>
             
            </ul>
          </td>
        </tr>
        <tr>
          <th>
            <span>Business content</span>
          </th>
          <td>
           <?= $business_content?><br>
          </td>
        </tr>
        <tr>
          <th>
            <span>Required skills and qualifications</span>
          </th>
          <td>
            <section class="job_type">
            <?= $skills_qualifications?><br>
            </section>

          </td>
        </tr>
        <tr>
          <th>
            <span>Employment status</span>
          </th>
          <td>
          <?= $employment_status ?><br>
          </td>
        </tr>
        <tr>
          <th>
            <span>Treatment</span>
          </th>
          <td>
          <?= $treatment ?><br>
          </td>
        </tr>
        <tr>
          <th>
            <span>Working conditions</span>
          </th>
          <td>
      
          <?= $working_time ?><br>
          </td>
        </tr>
        <tr>
          <th>
            <span>Application method</span>
          </th>
          <td>
          <?= $application_method ?><br>
          </td>
        </tr>
      </tbody>
    </table>
  </main>
  <?php endforeach; ?>
    <?php endif; ?>