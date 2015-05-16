<header class="header">
	<div class="header-left">
		<div class="logo-wrap"><a href="<?php echo site_url(); ?>" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/app/assets/img/logo_Gus.png" alt="Gus UIXDeveloper"></a></div>
		<?php if ( !is_page('home') ) : ?>
		<div class="nav-wrap">
			<?php 
        $defaults = array(
          'container' => false,
          'theme_location' => 'main-menu',
          'menu_class' => 'nav-main'
          );
        wp_nav_menu ($defaults);
      ?>
		</div>
		<?php endif; ?>
	</div>
	<div class="header-right">
		<?php if ( is_page('home') ) : ?>
			<?php $query = new WP_Query('showposts=1'); ?>
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
			<div class="quote-wrap normalize-text">
				<h4><?php the_field('quote'); ?><small> - <?php the_field('quote-author'); ?></small></h4>
			</div>
			<?php endwhile;?>
			<?php wp_reset_query(); ?>
		<?php else : ?>
		<div class="quote-wrap normalize-text">
			<?php while ( have_posts() ) : the_post(); ?>
				<h4><?php the_field('quote'); ?><small> - <?php the_field('quote-author'); ?></small></h4>
			<?php endwhile;?>
		</div>
		<?php endif; ?>
	</div>
</header>