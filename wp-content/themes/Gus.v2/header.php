<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/app/assets/img/favicon.png">
		<?php if ( is_single() ) : ?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/app/assets/css/zoom.css">
		<?php endif; ?>
		<!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://soygus.com">
    <meta property="og:title" content="Gus | UIXDeveloper">
    <meta property="og:site_name" content="SoyGus.com">
    <meta property="og:description" content="I'm a design-oriented JavaScript fullstack developer.">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/app/assets/img/og-fb.png">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="photo">
    <meta name="twitter:title" content="Gus | UIXDeveloper">
    <meta name="twitter:url" content="http://soygus.com">
    <meta name="twitter:description" content="I'm a design-oriented JavaScript fullstack developer.">
    <meta name="twitter:site" content="@madebygus">
    <meta name="twitter:creator" content="@MadeByGus">
    <meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/app/assets/img/og-tt.png">
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
			
		