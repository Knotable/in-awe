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