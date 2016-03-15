<?php include('header.php'); ?>
<div class="container">
	<section id="home">
		<div class="table_cell">
			<div class="description">
				<p class="subtitle">
					<?php 
						$args = array(
						  'name'        => 'place-and-date',
						  'post_type'   => 'page',
						  'post_status' => 'publish',
						  'numberposts' => 1
						);

						$my_posts = get_posts($args);
					?>
					<?php
						if( $my_posts ) :
						echo get_post_field('post_content', $my_posts[0]->ID);
						endif;
					?>
					</p>
				<h1>Inbox Awesome</h1>
				<div class="h1"><img src="<?php echo get_template_directory_uri(); ?>/img/title.png"></div>
				<p class="subtitle"><?php echo html_entity_decode( get_bloginfo( 'description' ) ); ?></p>
			</div>
		</div>
	</section>
</div>
<div class="container">
	<section id="contact">
		<?php 
			$args = array(
			  'name'        => 'contact',
			  'post_type'   => 'page',
			  'post_status' => 'publish',
			  'numberposts' => 1
			);

			$my_posts = get_posts($args);
		?>
		<?php
			if( $my_posts ) :
			echo do_shortcode(get_post_field('post_content', $my_posts[0]->ID));
			endif;
		?>
	</section>
</div>
<div class="container white">
	<section id="slider" class="">
		<div class="experience">
			<h3>Stephanie Diamond</h3>
			<span>Listings Project</span>
			<p class="comment">it was an amazing experience I am teeming with inspiration and knowledge I never knew existed! I am so impressed with the community you gathered and the flow of the whole day. Everyone was interesting, passionate and informative.</p>
		</div>
	</section>
</div>
<div class="container scheduler_container">
	<section id="schedule">
		<h2>Last year schedule</h2>
		<?php include('schedule.php'); ?>
	</section>
</div>
<div class="container white">
	<section id="speakers" class="">
		<?php 
			$args = array(
			  'name'        => 'past-speakers',
			  'post_type'   => 'page',
			  'post_status' => 'publish',
			  'numberposts' => 1
			);

			$my_posts = get_posts($args);
		?>

		<h2><?php if( $my_posts ) echo $my_posts[0]->post_title; ?></h2>
		<?php
			if( $my_posts ) :
				echo $my_posts[0]->post_content;
			endif;
		?>
		<?php include('speakers.php'); ?>
	</section>
</div>
<div class="container">
	<section id="features">
		<h2>Features</h2>
		<div class="features">
			<?php include('features.php'); ?>
		</div>
		<div class="subscribe_form_button">
			<a href="#contact" class="subscribe">Subscribe</a>
		</div>
	</section>
</div>
<div class="container white">
	<section id="partnering" class="">
		<h2>We are partnering with these amazing companies</h2>
		<div class="partners">
			<?php for($i = 3;$i<=17;$i++){ if( $i==8 || $i==14 ) continue; ?>
				<div class="partner">
					<img class="" src="<?php echo get_template_directory_uri(); ?>/img/partners_<?php echo sprintf("%02d", $i); ?>.png">
				</div>
			<?php } ?>
		</div>
	</section>
</div>
<div class="container">
			<img class="venue_image" src="<?php echo get_template_directory_uri(); ?>/img/machine.jpg" />
	<section id="venue">
		<div class="venue">
				<?php
		$args = array(
		  'name'        => 'our-venue',
		  'post_type'   => 'page',
		  'post_status' => 'publish',
		  'numberposts' => 1
		);

		$my_posts = get_posts($args);
	?>
			<h2><?php if( $my_posts ) echo $my_posts[0]->post_title; ?></h2>
			<p><?php if( $my_posts ) echo $my_posts[0]->post_content; ?></p>
		</div>
	</section>
</div>
<div class="container white blank_space"></div>
<div class="container inboxing">
	<div class="inbox cator">
		<h2>Inbox 2014</h2>
	</div>
	<div class="inbox tres">
		<h2>Inbox 2013</h2>
	</div>
</div>
<div class="container white">
	<section id="footer">
		<p>We are  partnerininbox Awesome 2015 was presented by Mailchimp and Knotable.</p>
		<p>Music was curated by <span>Soundfriend</span></p>
		<p class="copy">&copy;2016 Inbox Awesome. all rights reserved</p>
		<div class="socialnetworks">
			<div class="cell"><a href="#" class="facebook"></a></div>
			<div class="cell"><a href="#" class="twitter"></a></div>
			<div class="cell"><a href="#" class="instagram"></a></div>
		</div>
	</section>
</div>
<script>
    jQuery(document).scroll(function(){
        if(jQuery('#head_menu').offset()['top'] < (jQuery('#home').height() - jQuery('#head_menu').height() ) )
            jQuery('#head_menu').css('background','none');
        else
            jQuery('#head_menu').css('background','#1b3149');
    });
</script>
	</div>
</body>
</html>