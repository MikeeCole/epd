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

<!--
<script src="https://cdnjs.cloudflare.com/ajax/libs/jarallax/1.9.0/jarallax.min.js"></script>
-->

</head>

<body class="home">
    
    <svg style="position: absolute; width: 0; height: 0; overflow: hidden" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs>
<symbol id="icon-home" viewBox="0 0 1024 1024">
	<title>home</title>
	<path class="path1" d="M512 96l-512 512 96 96 96-96v416h256v-192h128v192h256v-416l96 96 96-96-512-512zM512 512c-35.346 0-64-28.654-64-64s28.654-64 64-64c35.346 0 64 28.654 64 64s-28.654 64-64 64z"></path>
</symbol>

<symbol id="icon-mail4" viewBox="0 0 32 32">
<title>mail4</title>
<path d="M16 0c-8.837 0-16 7.163-16 16s7.163 16 16 16 16-7.163 16-16-7.163-16-16-16zM8 8h16c0.286 0 0.563 0.061 0.817 0.177l-8.817 10.286-8.817-10.287c0.254-0.116 0.531-0.177 0.817-0.177zM6 22v-12c0-0.042 0.002-0.084 0.004-0.125l5.864 6.842-5.8 5.8c-0.045-0.167-0.069-0.34-0.069-0.517zM24 24h-16c-0.177 0-0.35-0.024-0.517-0.069l5.691-5.691 2.826 3.297 2.826-3.297 5.691 5.691c-0.167 0.045-0.34 0.069-0.517 0.069zM26 22c0 0.177-0.024 0.35-0.069 0.517l-5.8-5.8 5.865-6.842c0.003 0.041 0.004 0.083 0.004 0.125v12z"></path>
</symbol>
</defs>
</svg>

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
<!-- end of header.php -->