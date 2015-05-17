<?php get_header(); ?>
	
		<main role="main" class="site-content">
			<div class="site-content-left"></div>
			<div class="site-content-right">
				<div class="excerpt-wrap">
					<h1 class="lead"><strong>I'm a design-oriented fullstack JavaScript developer.</strong> I like to focus on: digital innovation, education, linguistics, AI, IoT and audio interfaces. If I don't know the tools you need for your project, <strong>I'm an excellent learner</strong><small> <span class="icon-chevron-right"></span> <a href="<?php echo site_url(); ?>/?p=44">About me</a></small></h1>
				</div>
				<div class="section-title">
					<div class="section-title-left">
						<h5>Latest posts</h5>
					</div>
					<nav class="section-title-right">
						<a href="<?php echo site_url(); ?>/posts-index">See more</a>
					</nav>
				</div>
				<section class="posts-list">
					<?php $query = new WP_Query('showposts=2') ?>
					<?php while( $query->have_posts() ) : $query->the_post(); ?>
						<article class="posts-list-item">
							<div class="posts-list-item-left">
								<div class="post-title"><h2><?php the_title(); ?></h2></div>
								<nav class="post-meta"><?php the_category(' '); ?></nav>
							</div>
							<div class="posts-list-item-right">
								<?php the_excerpt(); ?> <small class="icon-chevron-right"></small> <a href="<?php the_permalink(); ?>">more</a>
							</div>
						</article>
					<?php endwhile; ?>
					<?php wp_reset_query(); ?>
				</section>
			</div>
		</main>
		
<?php get_footer(); ?>