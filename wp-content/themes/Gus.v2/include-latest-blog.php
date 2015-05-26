<div class="section-title">
	<div class="section-title-left">
		<h5>More posts from <span class="text-gray-darker">blog</span></h5>
	</div>
	<nav class="section-title-right">
		<a href="<?php echo site_url(); ?>/posts-index">See more posts</a>
	</nav>
</div>
<section class="posts-list">
	<?php $currentID = get_the_ID(); ?>
	<?php $query = new WP_Query( array( 'cat' => 2, 'posts_per_page' => '1', 'post__not_in' => array( $currentID ) ) ); ?>
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