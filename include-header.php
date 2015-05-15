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
		<div class="quote-wrap normalize-text"><h4>Humans do what they do because they can<small> - Self Thought</small></h4></div>
	</div>
</header>