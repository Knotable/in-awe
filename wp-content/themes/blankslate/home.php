<?php include('header.php'); ?>
<div class="container">
	<section id="home">
		<div class="table_cell">
			<div class="description">
				<p>October 6th in New York City</p>
				<h1>Inbox Awesome</h1>
				<div class="h1"><img src="<?php echo get_template_directory_uri(); ?>/img/title.png"></div>
				<p>The anual conference on the future of email,<br>
				messaging and workflow</p>
			</div>
		</div>
	</section>
</div>
<div class="container">
	<section id="contact">
		<div class="table_cell">
			<p class="mini_blue">Make sure you don't miss our early bird tickets rates and major</p>
			<p class="mini_blue">announcements - use form below to subscribe.</p>
			<div class="arrow_down"></div>
			<div class="subscribe_form">
				<form>
					<div>
						<input type="text" name="" placeholder="Your Name">
					</div>
					<div>
						<input type="text" name="" placeholder="Email address">
					</div>
					<div>
						<input type="text" name="" placeholder="Company">
					</div>
					<div>
						<button>Subscribe</button>
					</div>
				</form>
			</div>
			<p>It's on! We're excited to announce the</p>
			<p>4th edition of inbox Awesome</p>
			<p class="mini_blue">Save the date! You're invited to meet key influencers from the email and</p>
			<p class="mini_blue">messaging space in the heart of New York City. Together, we will create a day full</p>
			<p class="mini_blue">of insights, fun and actual bussiness. To learn more about inAwe's previous</p>
			<p class="mini_blue"> editions, just keep reading.</p>
		</div>
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
		<h2>Past Speakers</h2>
		<p class="mini_blue">InAwe 2015 brought the most excellent thinkers on the inbox, pictures and words</p>
		<p class="mini_blue">in mail, the zero-interface app trend, the Watch UI, and other</p>
		<p class="mini_blue">places where you want to be</p>
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
			<button>Subscribe</button>
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
			<h2>Our Venue</h2>
			<p class="mini_blue">
				This year, we will host you in the heart of New Yor's Garment Disrict, just a block from Times Square. At Stollway, our Unique new venue, you will not only find room to listen and connect, but also the working facility of the world's leading knitting machine manufacturer, Stoll. Don't miss connecting digital and analog crafts and reserve your seat for July 9th here.
			</p>
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
	</div>
</body>
</html>