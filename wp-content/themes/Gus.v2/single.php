<?php get_header(); ?>
	
		<main role="main" class="site-content">
			<?php while( have_posts() ) : the_post(); ?>
			<div class="site-content-left">
				<div class="post-show-assets">
					<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail('large', array( 'data-action' => 'zoom' )); ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="site-content-right">
				<div class="excerpt-wrap">
					<?php the_excerpt(); ?>
				</div>
				<section class="post-show">
					<article class="post-show-item">
						<div class="post-show-item-left">
							<div class="post-title">
								<h1><?php the_title(); ?></h1>								
								<nav class="post-meta"><?php the_category(' '); ?></nav>
							</div>
						</div>
						<div class="post-show-item-right">
							<div class="post-info">
								<nav class="ml-ch-14">
									<span>Author: Gus</span>
									<span><?php the_date(); ?></span>
								</nav>
							</div>
							<div class="post-content">
								<?php the_content(); ?>
							</div>
						</div>
					</article>
				</section>
				<hr>
				<?php get_template_part('include', 'latest'); ?>
			</div>
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>
		</main>
		
<?php get_footer(); ?>