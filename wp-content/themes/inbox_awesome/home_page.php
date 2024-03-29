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
			<div class="description">
	<?php extract((array)json_decode(get_option('awesome_settings') ) ); ?>
				<p class="subtitle">
					<?php echo stripslashes($Home->date); ?>
					</p>
				<h1 style="display:none;">Inbox Awesome</h1>
				<img style="width:100%;" src="<?php echo get_template_directory_uri (); ?>/img/inbox_logo2.png" alt="inboxawesome" style="">
				<div class="">
					<!--<img src="<?php echo get_template_directory_uri(); ?>/img/title.png"></div>-->
				<p class="subtitle">
					<?php echo stripslashes($Home->description); ?></p>
			</div>
			<a class="book_now" href="https://www.eventbrite.com/e/inbox-awesome-the-future-of-email-messaging-notifications-and-workflows-tickets-27225799098">BOOK NOW</a>
		</div>
	</section>
</div>
<div class="container white">
	<section id="speakers" class="">
	<div class="container white blank_space"></div>
		<h2><?php echo stripslashes($Speakers->title); ?></h2>
			<?php echo stripslashes($Speakers->description); ?>
		<?php include('speakers.php'); ?>
	</section>
</div>
<div class="container white">
	<section id="schedule" class="">
	<div class="container white blank_space"></div>
		<h2><?php echo stripslashes($Scheduler->title); ?></h2>
		<?php
		if(isset($Scheduler->times)){
			foreach($Scheduler->times as $key => $value){ ?>
				<div class="scheduler">
					<div class="hour"><?php echo $value->hour; ?></div>
					<div class="activities">
						<span><?php echo $value->title; ?></span>
						<p class="mini_blue"><?php echo stripslashes($value->description); ?></p>
					</div>
				</div>
			<?php }
		}
		?>
	</section>
</div>
<div class="container white">
	<section id="partnering" class="">
	<div class="container white blank_space"></div>
		<h2><?php echo stripslashes($Partners->title); ?></h2>
		<?php include('partners.php'); ?>
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
		<div style="clear:both;"></div>
		<div class="subscribe_form_button">
			<a href="https://www.eventbrite.com/e/inbox-awesome-the-future-of-email-messaging-notifications-and-workflows-tickets-27225799098" target="_blank" class="subscribe">Sign up here</a>
		</div>
	</section>
</div>
<div class="container white blank_space"></div>
<div class="container white">
	<section id="your_hosts" class="">
		<h2><?php echo stripslashes($YourHost->title); ?></h2>
			<?php echo stripslashes($YourHost->description); ?>
		<?php include('your_hosts.php'); ?>
	</section>
</div>
<div class="container white blank_space"></div>
<div class="container grey">
	<img class="venue_image" src="<?php echo get_template_directory_uri(); ?>/img/venue1.jpg" />
	<section id="venue">
		<div class="venue">
			<h2><?php echo stripslashes($Venue->title); ?></h2>
			<p><?php echo stripslashes($Venue->description); ?></p>
		</div>
	</section>
</div>
<div class="container white blank_space"></div>
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
<div class="container inboxing white">
	<div class="inbox cator">
		<a href="<?php echo stripslashes($Footer->inbox1); ?>" target="_blank">
		  <h2> <?php echo stripslashes($Footer->text1); ?></h2>
		</a>
	</div>
	<div class="inbox in2015">
		<a href="http://2015.inboxawesome.org" target="_blank">
		  <h2>InAwe 2015</h2>
		</a>
	</div>
	<div class="inbox in2014">
		<a href="https://inboxawesome.splashthat.com" target="_blank">
			<h2>InAwe 2014</h2>
		</a>
	</div>
	<div class="inbox in2013">
		<a href="http://2013.inboxawesome.org" target="_blank">
			<h2>InAwe 2013</h2>
		</a>
	</div>
	<div class="inbox tres">
		<a href="<?php echo stripslashes($Footer->inbox2); ?>" target="_blank">
			<h2><?php echo stripslashes($Footer->text2); ?></h2>
		</a>
	</div>
</div>
<?php include('footer_blog.php');