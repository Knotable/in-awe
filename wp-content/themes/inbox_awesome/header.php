<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri (); ?>/blog.css" />
<?php wp_head(); ?>
<link href='<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider/jquery.bxslider.css' rel='stylesheet' type='text/css'>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<header id="header" role="banner">
<!-- <nav id="menu" role="navigation">
<?php //wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
</nav>  -->
</header>
	<div id="head_menu">
		<div class="menu_contain">
			<ul id="menu">
				<li><a href="/#home">Home</a></li>
				<li><a href="http://2015.inboxawesome.org">InAwe 2015</a></li>
				<li><a href="https://inboxawesome.splashthat.com">InAwe 2014</a></li>
				<li><a href="http://2013.inboxawesome.org">InAwe 2013</a></li>
				<li><a href="mailto:​felix@workawesome.org,lars@workawesome.org?​subject=Work%20Awesome%20-%20I'd%20like%20to%20be%20involved">Contact</a></li>
			</ul>
		</div>
	</div>
<div id="container">
	<section id="home">
		<div class="description">
			<h1><?php echo bloginfo('name'); ?></h1>
		</div>
	</section>