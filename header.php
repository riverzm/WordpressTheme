<!DOCTYPE HTML>
<html>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<div class="loading"></div> <!-- .loading -->
<body>
<header class="main-header">

	<div class="logo">
		<a class="logo-link" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
	</div> <!-- .logo -->
	
	<div class="primary-navigation">
		<?php wp_nav_menu(array('theme_location' => 'primary')); ?>
	</div> <!-- .primary-navigation -->
	
	<?php get_template_part('template-parts/header/menu','button'); ?>

	
</header> <!-- .main-header -->
