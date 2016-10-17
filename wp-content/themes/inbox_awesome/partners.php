<?php
function partners_categories($title, $id){ ?>
  <?php 
    $partners_logo = get_posts(array(
        'post_type'   => 'partners',
        'numberposts' => -1,
        'category' => $id
      ));
    if( count($partners_logo)  == 0) return true;
  ?>

  <h2 class="partner_sub"><?php echo $title; ?> 
    <?php if($title == 'Gold – Presenting Partner'){ ?>
      <img width='32' src='<?php echo get_template_directory_uri();?>/img/gold.png' />
    <?php } ?>
    <?php if($title == 'Silver – Supporting Partner'){ ?>
      <img width='32' src='<?php echo get_template_directory_uri();?>/img/silver.png' />
    <?php } ?>
    <?php if($title == 'Bronze – Swag Partner'){ ?>
      <img width='32' src='<?php echo get_template_directory_uri();?>/img/bronze.png' />
    <?php } ?>
  </h2>
  <div class="partners">
    <?php
    $partner_group = 1;
    $count = 0;
    foreach($partners_logo as $key => $partner){
      //echo "<pre>";
      //print_r($partner);
      //echo "</pre>";
      if($partner_group == 1){
        $partner_group = 0;
        echo "<div class='partner_row'>";
      } ?>

      <div class="partner">
        <?php $link = get_post_meta($partner->ID, 'link', true);
        if($link != '')
          echo "<a href='$link' target='_blank'>";
        ?>

        <img class="" src="<?php echo get_the_post_thumbnail_url($partner->ID); ?>">
        <?php if($link != '')
          echo "</a>"; ?>
      </div>
      <?php
      $count ++;
      if($count ==3 || !isset($partners_logo[$key+1] )){
        $partner_group = 1;
        echo "</div>";
        $count = 0;
      }
    }
    ?>
  </div>
<?php }

partners_categories('Gold – Presenting Partner', 7); 
partners_categories('Silver – Supporting Partner', 8); 
partners_categories('Bronze – Swag Partner', 9); 
partners_categories('Media Partner', 10); 
partners_categories('Educational Partner', 11); 
partners_categories('Hospitality Partner', 12); 
//partners_categories('', 0); 

?>