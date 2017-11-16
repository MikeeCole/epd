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
			
			<header role="banner" class="banner" id="nav_bar">
				<a href="/" class="logo">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/eclipse-full-color.png" alt="Eclipse Product Development" />
				</a>

				<nav>
<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
				</nav>
			</header>
			
<script type="text/javascript">

$(document).ready(function() {
  
  $(window).scroll(function () {
      //if you hard code, then use console
      //.log to determine when you want the 
      //nav bar to stick.  
      console.log($(window).scrollTop())
      if ($(window).scrollTop() > 280) {
        $('#nav_bar').addClass('navbar-fixed');
        }
        if ($(window).scrollTop() < 281) {
        $('#nav_bar').removeClass('navbar-fixed');
        }
    });
});
</script>			
			
<!-- end of header.php -->