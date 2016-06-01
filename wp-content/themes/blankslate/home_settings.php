<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<h1>Awesome Page Setttings</h1>
<div class="wrap">
	<?php extract($options);
		function customizeEditor($in) {
		  $in['remove_linebreaks']=false;
		  $in['remove_redundant_brs'] = false;
		  $in['wpautop']=false;
		  return $in;
		}
		add_filter('tiny_mce_before_init', 'customizeEditor');

	 ?>
<form action="" method="post">
	<?php wp_nonce_field( 'homesettings', 'homesettings', false ); ?>
	<div id="tabs">
		<ul>
			<li><a href="#home">Home page</a></li>
			<!--<li><a href="/blog">Blog</a></li>-->
			<li><a href="#subscribe">Subscribe page</a></li>
			<li><a href="#features">Features page</a></li>
			<li><a href="#our_venue">Our venue page</a></li>
			<li><a href="#footer">Footer page</a></li>
			<li><a href="#past">Past speakers page</a></li>
			<li><a href="#partners">Partners page</a></li>
			<li><a href="#scheduler">Scheduler page</a></li>
		</ul>
		<div  id="home" class="element">
			<h1>Home page</h1>
				<div id="poststuff">
					<h2>Date and place</h2>
					<input type="text" value="<?php echo stripslashes($Home->date); ?>" name="AwesomeSettings[Home][date]">
					<h2>Description</h2>
					<div id="<?php echo user_can_richedit() ? 'postdivrich' : 'postdiv'; ?>" class="postarea"><?php wp_editor(stripslashes($Home->description), 'home_description', array(
							'textarea_name' => 'AwesomeSettings[Home][description]',
							'textarea_rows' => 5
						) ); ?>
					</div>
				</div>
		</div>
		<div id="subscribe"class="element">
			<h1>Subscribe page</h1>
				<div id="poststuff">
					<h2>Text above form</h2>
					<div id="<?php echo user_can_richedit() ? 'postdivrich' : 'postdiv'; ?>" class="postarea"><?php wp_editor(stripslashes($Subscribe->text_above), 'subscribe_text_above', array(
							'textarea_name' => 'AwesomeSettings[Subscribe][text_above]',
							'textarea_rows' => 5
						) ); ?>
					</div>
					[FORM CONTACT 7]
					<h2>Text below form</h2>
					<div id="<?php echo user_can_richedit() ? 'postdivrich' : 'postdiv'; ?>" class="postarea"><?php wp_editor(stripslashes($Subscribe->text_below), 'subscribe_text_below', array(
							'textarea_name' => 'AwesomeSettings[Subscribe][text_below]',
							'textarea_rows' => 5
						) ); ?>
					
					</div>
				</div>
		</div>
		<div id="features"class="element">
			<h1>Features page</h1>
				<div id="poststuff">
					<h2>Title</h2>
					<input type="text" value="<?php echo stripslashes($Features->title); ?>" name="AwesomeSettings[Features][title]">
					<h2>First text title</h2>
					<input type="text" value="<?php echo stripslashes($Features->first_title); ?>" name="AwesomeSettings[Features][first_title]">
					<h2>First text description</h2>
					<div id="<?php echo user_can_richedit() ? 'postdivrich' : 'postdiv'; ?>" class="postarea"><?php wp_editor(stripslashes($Features->first_text), 'features_first_text', array(
							'textarea_name' => 'AwesomeSettings[Features][first_text]',
							'textarea_rows' => 5
						) ); ?>
					</div>
					<h2>Second text title</h2>
					<input type="text" value="<?php echo stripslashes($Features->second_title); ?>" name="AwesomeSettings[Features][second_title]">
					<h2>Second text description</h2>
					<div id="<?php echo user_can_richedit() ? 'postdivrich' : 'postdiv'; ?>" class="postarea"><?php wp_editor(stripslashes($Features->second_text), 'features_second_text', array(
							'textarea_name' => 'AwesomeSettings[Features][second_text]',
							'textarea_rows' => 5
						) ); ?>
					</div>
					<h2>Third text title</h2>
					<input type="text" value="<?php echo stripslashes($Features->third_title); ?>" name="AwesomeSettings[Features][third_title]">
					<h2>Third text description</h2>
					<div id="<?php echo user_can_richedit() ? 'postdivrich' : 'postdiv'; ?>" class="postarea"><?php wp_editor(stripslashes($Features->third_text), 'features_third_text', array(
							'textarea_name' => 'AwesomeSettings[Features][third_text]',
							'textarea_rows' => 5
						) ); ?>

					</div>
					<h2>Fourth text title</h2>
					<input type="text" value="<?php echo stripslashes($Features->fourth_title); ?>" name="AwesomeSettings[Features][fourth_title]">
					<h2>Fourth text description</h2>
					<div id="<?php echo user_can_richedit() ? 'postdivrich' : 'postdiv'; ?>" class="postarea"><?php wp_editor(stripslashes($Features->fourth_text), 'features_fourth_text', array(
							'textarea_name' => 'AwesomeSettings[Features][fourth_text]',
							'textarea_rows' => 5
						) ); ?>
					</div>
				</div>
		</div>
		<div id="our_venue"class="element">
			<h1>Our venue page</h1>
				<div id="poststuff">
					<h2>Title</h2>
					<input type="text" value="<?php echo stripslashes($Venue->title); ?>" name="AwesomeSettings[Venue][title]">
					<h2>Description</h2>
					<div id="<?php echo user_can_richedit() ? 'postdivrich' : 'postdiv'; ?>" class="postarea"><?php wp_editor(stripslashes($Venue->description), 'venue_description', array(
							'textarea_name' => 'AwesomeSettings[Venue][description]',
							'textarea_rows' => 5
						) ); ?>
					</div>
				</div>
		</div>
		<div id="footer"class="element">
			<h1>Footer page</h1>
				<h2>Inbox 1 text</h2>
				<input type="text" value="<?php echo stripslashes($Footer->text1); ?>" name="AwesomeSettings[Footer][text1]">
				<h2>Inbox 1 link</h2>
				<input type="text" value="<?php echo stripslashes($Footer->inbox1); ?>" name="AwesomeSettings[Footer][inbox1]">
				<h2>Inbox 2 text</h2>
				<input type="text" value="<?php echo stripslashes($Footer->text2); ?>" name="AwesomeSettings[Footer][text2]">
				<h2>Inbox 2 link</h2>
				<input type="text" value="<?php echo stripslashes($Footer->inbox2); ?>" name="AwesomeSettings[Footer][inbox2]">
				<div id="poststuff">
					<h2>Text</h2>
					<div id="<?php echo user_can_richedit() ? 'postdivrich' : 'postdiv'; ?>" class="postarea"><?php wp_editor( stripslashes($Footer->description), 'footer_description', array(
							'textarea_name' => 'AwesomeSettings[Footer][description]',
							'textarea_rows' => 5
						) ); ?>
					</div>
				</div>
		</div>
		<div id="past"class="element">
			<h1>Past speakers page</h1>
				<div id="poststuff">
					<h2>Title</h2>
					<input type="text" value="<?php echo stripslashes($Speakers->title); ?>" name="AwesomeSettings[Speakers][title]">
					<h2>Description</h2>
					<div id="<?php echo user_can_richedit() ? 'postdivrich' : 'postdiv'; ?>" class="postarea"><?php wp_editor(stripslashes($Speakers->description), 'speakers_description', array(
							'textarea_name' => 'AwesomeSettings[Speakers][description]',
							'textarea_rows' => 5
						) ); ?>
					</div>
				</div>
		</div>
		<div id="partners"class="element">
			<h1>Partners page</h1>
				<div id="poststuff">
					<h2>Title</h2>
					<input type="text" value="<?php echo stripslashes($Partners->title); ?>" name="AwesomeSettings[Partners][title]">
					<!-- <h2>Description</h2>
					<div id="<?php echo user_can_richedit() ? 'postdivrich' : 'postdiv'; ?>" class="postarea"><?php /* wp_editor(stripslashes("", 'partners_description)', array(
							'textarea_name' => 'AwesomeSettings[Partners][description]',
							'textarea_rows' => 10
						) ); */ ?>
					</div> -->
				</div>
		</div>
		<div id="scheduler"class="element">
			<h1>Scheduler page</h1>
			<div id="poststuff">
				<h2>Title</h2>
				<input type="text" value="<?php echo stripslashes($Scheduler->title); ?>" name="AwesomeSettings[Scheduler][title]">
				<h2>Description</h2>
				<table id="scheduler_table">
					<thead>
						<tr>
							<th>Options</th>
							<th>Hour</th>
							<th>Title</th>
							<th>Description</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							if (isset($Scheduler->times) ) {
								$count = 0;
								foreach($Scheduler->times as $key => $value){ ?>
									<tr class="row<?php echo $count; ?>">
										<td class="options">
											<?php
												if($count > 0){ ?>
				<a href='#' onclick="removeRow('.row<?php echo $count; ?>')" class='remove'>Delete</a>
												<?php }
											?>
										</td>
										<td><input id="AwesomeSettingsSchedulerTimes<?php echo $count; ?>Hour" name="AwesomeSettings[Scheduler][times][<?php echo $count; ?>][hour]" type="text" value="<?php echo stripslashes($value->hour); ?>"></td>
										<td><input id="AwesomeSettingsSchedulerTimes<?php echo $count; ?>Title" name="AwesomeSettings[Scheduler][times][<?php echo $count; ?>][title]" type="text" value="<?php echo stripslashes($value->title); ?>"></td>
										<td><textarea id="AwesomeSettingsSchedulerTimes<?php echo $count; ?>Description"  name="AwesomeSettings[Scheduler][times][<?php echo $count; ?>][description]" ><?php echo stripslashes($value->description); ?></textarea></td>
									</tr>
								<?php $count ++; }
							}else{ ?>
								<tr class="row0">
									<td class="options"></td>
									<td><input id="AwesomeSettingsSchedulerTimes0Hour" name="AwesomeSettings[Scheduler][times][0][hour]" type="text" ></td>
									<td><input id="AwesomeSettingsSchedulerTimes0Title" name="AwesomeSettings[Scheduler][times][0][title]" type="text"></td>
									<td>
										<textarea id="AwesomeSettingsSchedulerTimes0Description"  name="AwesomeSettings[Scheduler][times][0][description]"></textarea></td>
								</tr>
							<?php }

						?>
					</tbody>
				</table>
				<a class="button" href="javascript:addRow()">Add</a>
			</div>
		</div>
	</div>
	<input type="submit" value="Save">
</form>
</div>

<style>
	input[type=text]{
		height: 1.7em;
	}
	input[type=text], textarea{
		padding: 3px 8px;
	    font-size: 1em;
	    line-height: 100%;
	    width: 100%;
	    outline: 0;
	    margin: 0 0 3px;
	    background-color: #fff;
	}
	.ui-sortable-handle:hover{
		background: #eeeeee;
		cursor: all-scroll;
	}
	.ui-sortable-helper{
		border: 1px #ccc solid;
		cursor: all-scroll;
	}
</style>
<script>
	var gastosrows=jQuery('#scheduler_table tbody tr').length;
	function addRow(){
	    var Legalizacion = gastosrows;
	    gastosrows ++;
	    var element = jQuery('.row0').clone();
	    var number  = Legalizacion;/*parseInt( re[0] ) + 1;*/
	    Legalizacion ++;

	    jQuery('input, textarea', element).each(function(){
		        var name = jQuery(this).attr('name');
		        var id   = jQuery(this).attr('id');
				jQuery(this).val('');
		        var re      = /([0-9]+)/.exec(name);
		        
		        name = name.replace(re[0], number);
		        id   = id.replace(re[0], number);

		        jQuery(this).attr('name', name);
		        jQuery(this).attr('id', id);
		    });

		    element.removeClass('row0');
		    element.addClass('row'+number);
		    jQuery('.options', element).html("<a href='#' onclick=\"removeRow('.row"+number+"')\" class='remove'>Delete</a>");
		    jQuery('#scheduler_table tbody').append(element);
		}

	function removeRow(classRow){
	  jQuery(classRow).remove();
	}

	jQuery(function() {
    	jQuery( "#tabs" ).tabs();
  	});
  jQuery(function() {
    jQuery( "#scheduler_table tbody" ).sortable();
    /*$( "#sortable" ).disableSelection();*/
  });
</script>