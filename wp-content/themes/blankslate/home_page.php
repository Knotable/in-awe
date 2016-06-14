<?php
/*
	Template Name: Home
*/
include('header_blog.php');
	extract((array)json_decode(get_option('awesome_settings') ) );
 ?>
<div class="container">
	<div class="bg-main"></div>
	<div class="fade-layer"></div>
	<section id="home">
		<div class="table_cell">
			<img src="<?php echo get_template_directory_uri (); ?>/img/logo.png" alt="workawesome" style="">
			<div class="description">

	<?php extract((array)json_decode(get_option('awesome_settings') ) ); ?>
				<p class="subtitle">
					<?php echo stripslashes($Home->date); ?>
					</p>
				<h1>Work Awesome</h1>
				<div class="h1"><img src="<?php echo get_template_directory_uri(); ?>/img/title.png"></div>
				<p class="subtitle">
					<?php echo stripslashes($Home->description); ?></p>
			</div>
			<a class="book_now" href="https://www.eventbrite.com/e/work-awesome-tickets-21453749743">BOOK NOW</a>
		</div>

	</section>
</div>
<div class="container scheduler_container grey">
	<section id="schedule">
		<h2><?php echo stripslashes($Scheduler->title); ?></h2>
		<?php include('schedule.php'); ?>
	</section>
</div>
<div class="container white">
	<section id="speakers" class="">
		<h2><?php echo stripslashes($Speakers->title); ?></h2>
			<?php echo stripslashes($Speakers->description); ?>
		<?php include('speakers.php'); ?>
	</section>
</div>
<div class="container grey">
	<section id="contact">
		<?php echo stripslashes($Subscribe->text_above); ?>
		<div class="arrow_down"></div>
		<div class="subscribe_form">
			<?php echo do_shortcode("[contact-form-7 id='64' title='Subscribe']"); ?>
		</div>
		<?php echo stripslashes($Subscribe->text_below); ?>
	</section>
</div>
<div class="container white">
	<section id="slider" class="">
		<div class="experience">
			<ul class="bxslider">
			<?php
				$testimonials = get_posts(array(
						'post_type'   => 'testimonials',
						'numberposts' => -1
					));

				foreach($testimonials as $testimonial){ ?>
					<li>
						<h3><?php echo $testimonial->post_title; ?></h3>
						<span><?php echo get_post_meta($testimonial->ID, 'Company', true); ?></span>
						<p class="comment"><?php echo $testimonial->post_content; ?></p>
					</li>
				<?php } ?>
			</ul>
		</div>
	</section>
</div>
<div class="container grey">
	<section id="features">
		<h2><?php echo stripslashes($Features->title); ?></h2>
		<div class="features">
			<?php include('features.php'); ?>
		</div>
		<div class="subscribe_form_button">
			<a href="https://www.eventbrite.com/e/work-awesome-tickets-21453749743" target="_blank" class="subscribe">Sign up here</a>
		</div>
	</section>
</div>
<div class="container white">
	<section id="partnering" class="">
		<h2><?php echo stripslashes($Partners->title); ?></h2>
		<div class="partners">
			<?php

			$partners_logo = get_posts(array(
						'post_type'   => 'partners',
						'numberposts' => -1
					));

			$partner_group = 1;
			$count = 0;
			foreach($partners_logo as $key => $partner){
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
	</section>
</div>
<div class="container grey">
	<img class="venue_image" src="<?php echo get_template_directory_uri(); ?>/img/venue.jpg" />
	<section id="venue">
		<div class="venue">
			<h2><?php echo stripslashes($Venue->title); ?></h2>
			<p><?php echo stripslashes($Venue->description); ?></p>
		</div>
	</section>
</div>
<div class="container white blank_space"></div>
<div class="container inboxing white">
	<div class="inbox cator">
		<a href="<?php echo stripslashes($Footer->inbox1); ?>" target="_blank">
		  <h2> <?php echo stripslashes($Footer->text1); ?></h2>
		</a>
	</div>
	<div class="inbox tres">
		<a href="<?php echo stripslashes($Footer->inbox2); ?>" target="_blank">
			<h2><?php echo stripslashes($Footer->text2); ?></h2>
		</a>
	</div>
</div>
<?php include('footer_blog.php');