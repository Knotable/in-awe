<div class="feature">
	<div class="feature_image clock"></div>
	<?php 
		$args = array(
		  'name'        => 'new-old-old-new',
		  'post_type'   => 'page',
		  'post_status' => 'publish',
		  'numberposts' => 1
		);

		$my_posts = get_posts($args);
	?>
	<p class="subtitle"><?php if( $my_posts ) echo $my_posts[0]->post_title; ?></p>
	<p class=""><?php if( $my_posts ) echo $my_posts[0]->post_content; ?></p>
</div>
<div class="feature">
	<div class="feature_image empire"></div>
	<?php 
		$args = array(
		  'name'        => 'the-shifting-streams',
		  'post_type'   => 'page',
		  'post_status' => 'publish',
		  'numberposts' => 1
		);

		$my_posts = get_posts($args);
	?>
	<p class="subtitle"><?php if( $my_posts ) echo $my_posts[0]->post_title; ?></p>
	<p class=""><?php if( $my_posts ) echo $my_posts[0]->post_content; ?></p>
</div>
<div class="feature">
	<div class="feature_image bulb"></div>
	<?php
		$args = array(
		  'name'        => 'startups-and-establihed-players',
		  'post_type'   => 'page',
		  'post_status' => 'publish',
		  'numberposts' => 1
		);

		$my_posts = get_posts($args);
	?>
	<p class="subtitle"><?php if( $my_posts ) echo $my_posts[0]->post_title; ?></p>
	<p class=""><?php if( $my_posts ) echo $my_posts[0]->post_content; ?></p>
</div>
<div class="feature">
	<div class="feature_image box"></div>
	<?php
		$args = array(
		  'name'        => 'sources-and-resources',
		  'post_type'   => 'page',
		  'post_status' => 'publish',
		  'numberposts' => 1
		);

		$my_posts = get_posts($args);
	?>
	<p class="subtitle"><?php if( $my_posts ) echo $my_posts[0]->post_title; ?></p>
	<p class=""><?php if( $my_posts ) echo $my_posts[0]->post_content; ?></p>
</div>