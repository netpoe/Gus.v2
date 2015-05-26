<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/app/assets/img/favicon.png">
		<?php if ( is_single() ) : ?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/app/assets/css/zoom.css">
		<?php endif; ?>
		<!-- GMaps -->
		<?php if ( in_category( '7' ) ) : ?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/app/assets/css/map-canvas.css">
		<script src="<?php echo get_template_directory_uri(); ?>/app/assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
		<?php endif; ?>
		
		<?php wp_head(); ?>
	</head>
	<body>
		<?php get_template_part('include', 'googletagmanager'); ?>
		<?php if ( is_page('home') ) : ?>
		<section class="site-wrapper home-layout">
		<?php else : ?>
		<section class="site-wrapper">
		<?php endif; ?>
			<?php if ( !in_category( '7' ) ) : ?>
				<?php get_template_part('include', 'header'); ?>
			<?php endif; ?>
			<div class="content-wrap">
			
		