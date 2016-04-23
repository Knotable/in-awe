<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
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
				<li><a href="#home">Home</a></li>
				<li><a href="/blog">Blog</a></li>
				<li><a href="#schedule">Schedule</a></li>
				<li><a href="#speakers">Speakers</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
		</div>
	</div>
<div id="container">