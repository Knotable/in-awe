<?php

function partners_categories($title, $id){ ?>
  <h2><?php echo $title; ?></h2>
  <div class="partners">
    <?php
    $partners_logo = get_posts(array(
          'post_type'   => 'partners',
          'numberposts' => -1,
          'category' => $id
        ));


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

partners_categories('', 0); 

?>