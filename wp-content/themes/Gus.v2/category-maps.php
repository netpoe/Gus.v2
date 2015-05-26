<?php 
/*
	Template Name: Posts by maps category
*/
?>

<?php get_header(); ?>
	
		<main role="main" class="site-content">
			<div class="site-content-row">
				<div class="site-content-left"></div>
				<div class="site-content-right">
					<div class="excerpt-wrap blank-excerpt">
						<h1 class="lead"><strong>Maps</strong> is a collection of locations that I personally pick for purposes as: Writing, freelancing, designing, eating or have some drinks. You might want to complement my maps by inboxing me the LatLang coordinates on my <a href="https://www.facebook.com/pages/Gus-UIXDeveloper/1455231581436979?sk=timeline" rel="nofollow" target="_blank">facebook page</a>.</h1>
					</div>
					<div class="section-title">
						<div class="section-title-left">
							<h5>Featured posts: Maps</h5>
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
						<?php 
							$args = array(
								'post_type' => 'map'
								);
							$query = new WP_Query( $args );
							while( $query->have_posts() ) : $query->the_post();
							$categories = get_the_category();
						?>
							<article class="posts-list-item">
								<div class="posts-list-item-left">
									<div class="post-title"><h2><?php the_title(); ?></h2></div>
									<nav class="post-meta">
										<?php foreach($categories as $cat) : ?>
											<span><?php echo $cat->name ?></span>
										<?php endforeach; ?>
									</nav>
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