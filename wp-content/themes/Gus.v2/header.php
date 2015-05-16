<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/app/assets/css/zoom.css">
		<?php wp_head(); ?>
	</head>
	<body class="minhp-100">
		<?php if ( is_page('home') ) : ?>
		<section class="site-wrapper home-layout">
		<?php else : ?>
		<section class="site-wrapper">
		<?php endif; ?>
			<?php get_template_part('include', 'header'); ?>
			<div class="content-wrap">
			
		