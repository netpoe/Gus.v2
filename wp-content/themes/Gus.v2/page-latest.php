<?php 
/*
	Template Name: Latest posts
*/
?>

<?php get_header(); ?>
	
		<main role="main" class="site-content">
			<div class="site-content-row">
				<div class="site-content-left"></div>
				<div class="site-content-right">
					<div class="excerpt-wrap">
						<?php while( have_posts() ) : the_post(); ?>
							<?php the_excerpt(); ?>
						<?php endwhile; ?>
					</div>
					<div class="section-title">
						<div class="section-title-left">
							<h5>Posts by category</h5>
						</div>
						<nav class="section-title-right">
							<?php 
				        $defaults = array(
				          'container' => false,
				          'theme_location' => 'post-categories',
				          'menu_class' => 'nav-post-categories'
				          );
				        wp_nav_menu ($defaults);
				      ?>
						</nav>
					</div>
					<section class="posts-list">
						<?php $query = new WP_Query('showposts=14'); ?>
						<?php while( $query->have_posts() ) : $query->the_post(); ?>
							<article class="posts-list-item">
								<div class="posts-list-item-left">
									<div class="post-title"><h2><?php the_title(); ?></h2></div>
									<nav class="post-meta"><?php the_category(' '); ?></nav>
								</div>
								<div class="posts-list-item-right">
									<?php the_excerpt(); ?><br><small><a href="<?php the_permalink(); ?>">read</a></small>
								</div>
							</article>
						<?php endwhile; ?>
						<?php wp_reset_query(); ?>
					</section>
				</div>
			</div>
		</main>
		
<?php get_footer(); ?>