				<?php get_template_part('include', 'footer'); ?>
			</div>
		</section>
	<?php wp_footer(); ?>
	<?php if ( is_single() ) : ?>
	<script src="<?php echo get_template_directory_uri(); ?>/app/assets/js/post-show-control.min.js?1.0"></script>
	<?php endif; ?>
	</body>
</html>