<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	
<?php wp_head(); ?>

	<!--[if lt IE 9]>
		<script src="/_themes/eclipse/js/html5shiv.js"></script>
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
	
	<!--[if lt IE 9]>
		<link href="/_themes/eclipse/css/ie.css" rel="stylesheet" />
	<![endif]-->



<script src="https://cdnjs.cloudflare.com/ajax/libs/jarallax/1.9.0/jarallax.min.js"></script>

</head>

<body class="home">
	<div class="page">
		<div class="stage">
			
			<header role="banner">
				<a href="/" class="logo">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/eclipse-full-color.png" alt="Eclipse Product Development" />
				</a>

				<nav>
<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
				</nav>
			</header>
			
<!-- end of header.php -->