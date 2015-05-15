<?php get_header(); ?>
	
		<main role="main" class="site-content">
			<?php while( have_posts() ) : the_post(); ?>
			<div class="site-content-left">
				<div class="post-show-assets">
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail(); ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="site-content-right">
				<div class="excerpt-wrap pb-28">
					<p class="lead"><?php the_excerpt(); ?></p>
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
			</div>
			<?php endwhile; ?>
		</main>
		
<?php get_footer(); ?>