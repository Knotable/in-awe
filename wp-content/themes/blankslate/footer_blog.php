<div class="container white">
	<section id="footer">
		<p><?php echo stripslashes($Footer->description); ?></p>
		<p class="copy">&copy;2016 Inbox Awesome. all rights reserved</p>
		<div class="socialnetworks">
			<div class="cell"><a href="http://facebook.com/awehq" target="_blank" class="facebook"></a></div>
			<div class="cell"><a href="http://twitter.com/awehq" target="_blank" class="twitter"></a></div>
			<div class="cell"><a href="http://instagram.com/awehq" target="_blank" class="instagram"></a></div>
		</div>
	</section>
</div>
<script src="<?php echo get_template_directory_uri();?>/js/jquery.bxslider/jquery.bxslider.min.js"></script>
<script>
    jQuery(document).scroll(function(){
    	var limit_bt = 1;
    	if( jQuery('#wpadminbar').size() > 0 )
    		limit_bt = jQuery('#wpadminbar').height() + 1;
        if(jQuery('#head_menu').offset()['top'] < limit_bt )
            jQuery('#head_menu').css('background','none');
        else
            jQuery('#head_menu').css('background','#1b3149');
    });

    jQuery(document).ready(function(){
    	jQuery('.bxslider').bxSlider({
    		auto:true
		});

		if( jQuery('#wpadminbar').size() > 0 ){
			jQuery('#head_menu').css('top',jQuery('#wpadminbar').height() );
		}
    });


</script>
	</div>
<?php  wp_footer(); ?>
</body>
</html>