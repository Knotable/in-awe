<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
<symbol id="linkedin" viewBox="0 0 32 32">
    <path d="M26.625 0h-21.25c-2.956 0-5.375 2.419-5.375 5.375v21.25c0 2.956 2.419 5.375 5.375 5.375h21.25c2.956 0 5.375-2.419 5.375-5.375v-21.25c0-2.956-2.419-5.375-5.375-5.375zM12 26h-4v-14h4v14zM10 10c-1.105 0-2-0.895-2-2s0.895-2 2-2 2 0.895 2 2-0.895 2-2 2zM26 26h-4v-8c0-1.105-0.895-2-2-2s-2 0.895-2 2v8h-4v-14h4v2.483c0.825-1.133 2.086-2.483 3.5-2.483 2.485 0 4.5 2.239 4.5 5v9z" fill="#005188"></path>
  </symbol>
</svg>
<div class="speakers_content">
  <?php
  $speakers = get_posts(array(
      'post_type'   => 'inbox_speakers',
      'numberposts' => -1
    ));

  foreach($speakers as $speaker){ ?>
    <div class="cell">

    <div class="radius_image">
      <img src="<?php echo get_the_post_thumbnail_url($speaker->ID); ?>">
    </div>
      <p class="name"><?php echo $speaker->post_title; ?></p>
      <p class="description"><?php
        echo get_post_meta($speaker->ID, 'Description', true);
      ?></p>
      <p class="company"><?php
        echo get_post_meta($speaker->ID, 'Company', true);
      ?></p>


      <p class="speaker-links">
        <?php
          $twitterLink  = get_post_meta($speaker->ID, 'twitterLink', true);
          $linkedinLink = get_post_meta($speaker->ID, 'linkedinLink', true);

          if($twitterLink != ''){
            echo '
              <a href="'.$twitterLink.'" target="_blank">
                <svg style="width:24px;height:24px" viewBox="0 0 24 24"> <path fill="#1da1f2" d="M22.46,6C21.69,6.35 20.86,6.58 20,6.69C20.88,6.16 21.56,5.32 21.88,4.31C21.05,4.81 20.13,5.16 19.16,5.36C18.37,4.5 17.26,4 16,4C13.65,4 11.73,5.92 11.73,8.29C11.73,8.63 11.77,8.96 11.84,9.27C8.28,9.09 5.11,7.38 3,4.79C2.63,5.42 2.42,6.16 2.42,6.94C2.42,8.43 3.17,9.75 4.33,10.5C3.62,10.5 2.96,10.3 2.38,10C2.38,10 2.38,10 2.38,10.03C2.38,12.11 3.86,13.85 5.82,14.24C5.46,14.34 5.08,14.39 4.69,14.39C4.42,14.39 4.15,14.36 3.89,14.31C4.43,16 6,17.26 7.89,17.29C6.43,18.45 4.58,19.13 2.56,19.13C2.22,19.13 1.88,19.11 1.54,19.07C3.44,20.29 5.7,21 8.12,21C16,21 20.33,14.46 20.33,8.79C20.33,8.6 20.33,8.42 20.32,8.23C21.16,7.63 21.88,6.87 22.46,6Z" /> </svg>
              </a>';
          }

          if($linkedinLink != ''){
            echo '
              <a href="'.$linkedinLink.'" target="_blank" style="margin-left:8px">
                <svg class="icon"><use xlink:href="#linkedin" /></svg>
              </a>';
          }
        ?>
      </p>



    </div>
  <?php } ?>
</div>