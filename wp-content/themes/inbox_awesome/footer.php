<?php extract((array)json_decode(get_option('awesome_settings') ) ); ?>
<div class="">
	<section id="footer">
		<p><?php echo stripslashes($Footer->description); ?></p>
		<!--<p class="copy">&copy;2016 Inbox Awesome. all rights reserved</p>-->
		<div class="socialnetworks">
			<div class="cell"><a href="#" class="facebook"></a></div>
			<div class="cell"><a href="#" class="twitter"></a></div>
			<div class="cell"><a href="#" class="instagram"></a></div>
		</div>
	</section>
</div>
	</div>
<?php  wp_footer(); ?>
<script>
	jQuery(document).ready(function(){
		if( jQuery('#wpadminbar').size() > 0 ){
			jQuery('#head_menu').css('top',jQuery('#wpadminbar').height() );
		}
	});
</script>
</body>
</html>