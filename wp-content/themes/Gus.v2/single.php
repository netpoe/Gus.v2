<?php get_header(); ?>
	
		<main role="main" class="site-content">
			<?php while( have_posts() ) : the_post(); ?>
			<div class="site-content-left">
				<div class="post-show-assets">
					<?php 
						$img_id = get_post_thumbnail_id( $post->ID );
						$alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true);
					?>
					<?php if ( has_post_thumbnail() ) : ?>
						<div class="post-featured-pic">
							<?php the_post_thumbnail('large', array( 'data-action' => 'zoom' )); ?>
							<small class="help-block"><?php echo $alt_text; ?></small>
						</div>
					<?php endif; ?>
					<?php
					$images = get_field('gallery');
          if( $images ): ?>
          <?php foreach( $images as $image ): ?>
          	<div class="post-gallery-pic">
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>" data-action="zoom" />
							<small class="help-block"><?php echo $image['title']; ?></small>
          	</div>
          <?php endforeach; ?>
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
				<?php 
					foreach(get_the_category() as $category) {
						get_template_part('include', 'latest-' . $category->slug);
					} 
				?>
			</div>
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>
		</main>
		
<?php get_footer(); ?>