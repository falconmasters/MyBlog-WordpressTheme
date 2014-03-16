<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>My Blog</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url')?>">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/reset.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/responsive.css">
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,500,300,700' rel='stylesheet' type='text/css'>
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="<?php bloginfo('template_url')?>/js/jquery.slides.min.js"></script>
	<script>
    $(function(){
      $("#slideshow").slidesjs({
        height: 300,
        navigation:false
      });
    });
  </script>
</head>
<body>
	<header>
		<div id="logo"><p>My Blog</p><span>by Carlos Arturo</span></div>
		<nav>
			<?php wp_nav_menu(
			 array(
			 'container' => false,
			 'items_wrap' => '<ul id="menu-top">%3$s</ul>',
			 'theme_location' => 'menu'
			 )); ?>
		</nav>
	</header>