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
		<?php if ( is_home() or is_page('posts-index') or is_category() ) : ?>
			<?php $query = new WP_Query('showposts=1'); ?>
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
			<div class="quote-wrap normalize-text">
				<?php if ( get_field('quote') ) : ?>
					<h4><?php the_field('quote'); ?><?php if ( get_field('quote-author') ) : ?><small> - <?php the_field('quote-author'); ?></small><?php endif; ?></h4>
				<?php else : ?>
					<?php get_template_part('include', 'quote'); ?>
				<?php endif; ?>
			</div>
			<?php endwhile;?>
			<?php wp_reset_query(); ?>
		<?php else : ?>
		<div class="quote-wrap normalize-text">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php if ( get_field('quote') ) : ?>
					<h4><?php the_field('quote'); ?><?php if ( get_field('quote-author') ) : ?><small> - <?php the_field('quote-author'); ?></small><?php endif; ?></h4>
				<?php else : ?>
					<?php get_template_part('include', 'quote'); ?>
				<?php endif; ?>
			<?php endwhile;?>
			<?php wp_reset_query(); ?>
		</div>
		<?php endif; ?>
	</div>
</header>