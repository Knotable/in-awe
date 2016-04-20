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

			<p class="name"><?php echo $speaker->post_title; ?><p>
			<p class="company"><?php
				echo get_post_meta($speaker->ID, 'Company', true);
			?></p>
		</div>

	<?php } ?>
</div>