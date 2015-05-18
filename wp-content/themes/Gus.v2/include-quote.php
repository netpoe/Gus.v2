<?php 
  $args = array(
    'post_type' => 'quote',
    'posts_per_page' => '1'
    );
  $query = new WP_Query( $args );
  while( $query->have_posts() ) : $query->the_post();
?>
	<h4><?php the_field('quote'); ?><?php if ( get_field('quote-author') ) : ?><small> - <?php the_field('quote-author'); ?></small><?php endif; ?></h4>
<?php endwhile; ?>