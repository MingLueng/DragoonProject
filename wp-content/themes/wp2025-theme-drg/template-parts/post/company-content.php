<?php
$last_products = get_posts([
  'post_type' => 'product',
  'numberposts' => '1'
]);

?>
<?php if(count($last_products) ): ?>
<header class="company_header container">
    <h2 class="company_heading">
      <span class="title_company">COMPANY</span>
    </h2>
  </header>
   <?php foreach($last_products as $last_product) :?>
    <?php
      $company_name = get_post_meta($last_product->ID,'company_name',true);
      $location = get_post_meta($last_product->ID,'location',true);
      $thoi_gian = get_post_meta($last_product->ID,'thoi_gian',true);
      $company_address = get_post_meta($last_product->ID,'company_address',true);
      $representative = get_post_meta($last_product->ID,'representative',true);
      $numberofemployees = get_post_meta($last_product->ID,'numberofemployees',true);
      $businessdescription = get_post_meta($last_product->ID,'businessdescription',true);
      $shareholders = get_post_meta($last_product->ID,'shareholders',true);
      $them_anh = get_post_meta($last_product->ID,'hinh_anh',true);
      $lay_hinh_anh = wp_get_attachment_image_url($them_anh);
      $cap_nhat_them_anh = get_post_meta($last_product->ID,'cap_nhat_anh',true);
      $chon_them_hinh_anh = wp_get_attachment_image_url($cap_nhat_them_anh);
     
      ?>
    <main class="s-plain_content">
      <div class="s-minor_wrapper">  
        <div class="s-minor" id="s-minor_concept">
          <main class="s-minor_content container">
            <div class="row __box_container">
              <div class="__box_image __box_child col-md-6">
                <figure class="radius_basic_pic">
                <?= get_the_post_thumbnail($last_product->ID,'small');?>
                </figure>
              </div>
              <div class="__box_text __box_child col-md-6">
                <h3 class="s-minor_heading">
                  <span class="--langSub">Concept</span>
                </h3>
                <p class="__leadcopy">
                  
                  <?= get_the_title($last_product->ID) ?> 
                  
                </p>
                <p class="__text">
                  <?= get_post_field('post_content', $last_product->ID)?>
                </p>
              </div>
            </div>
          </main>
        </div>
        <div class="s-minor" id="s-minor_office">
          <main class="s-minor_content container">
            <div class="row __box_container">
              <div class="__box_text __box_child col-md-6">
                <h3 class="s-minor_heading">
                  <span class="--langSub">Office</span>
                </h3>
                <p class="__leadcopy">
                <?= $company_name ?>
                </p>
                <p class="__text">
                <?= $company_address ?>
                </p>
                <figure class="__img">
                <img src="<?= $lay_hinh_anh ?>" alt="">
                
                </figure>
              </div>
              <div class="__box_image __box_child col-md-6">
                <figure class="radius_basic_pic">
                
                <img src="<?= $chon_them_hinh_anh ?>" alt="">
                </figure>
              </div>
            </div>
          </main>
        </section>
      </div>
      <div class="s-minor" id="s-minor_overview">
        <h3 class="s-minor_heading container">
          <span class="--langSub">Overview</span>
          <span class="--langMain">Overview</span>
        </h3>
        <main class="s-minor_content container">
          <table class="__table--information table_overview">
            <tbody>
              <tr>
                <th>
                  <span>Company name</span>
                </th>
                <td>
                <?= $company_name ?>
                </td>
              </tr>
              <tr>
                <th>
                  <span>Location</span>
                </th>
                <td>
                <?= $location ?>
                </td>
              </tr>
              <tr>
                <th>
                  <span>Establishment</span>
                </th>
                <td>
                <?php
                  
                  echo date('F j, Y', strtotime($thoi_gian));
                
                ?>
                </td>
              </tr>
              <tr>
                <th>
                  <span>Representative</span>
                </th>
                <td>
                <?= $representative ?>
                </td>
              </tr>
              <tr>
                <th>
                  <span>Number of employees</span>
                </th>
                <td>
                <?= $numberofemployees ?>
                </td>
              </tr>
              <tr>
                <th>
                  <span>Business description</span>
                </th>
                <td>
                <?= $businessdescription ?>
                </td>
              </tr>
              <tr>
                <th>
                  <span>Shareholders</span>
                </th>
                <td>
                  <a href="https://www.dh3d.co.jp/" target="_blank" aria-label="go to D.H Co., Ltd. website" class="--externalLink"><?= $shareholders ?><i class='bx bx-link-external'></i></a>
                </td>
              </tr>
            </tbody>
          </table>
        </main>
      </div>
    </main>
    <?php endforeach; ?>
    <?php endif; ?>