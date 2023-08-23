	
<div id="header-wrapper">
	<div id="header">

<div id="header-text">
	<a href="<?php echo esc_url( home_url( '/' ) );?>" >
		<div class="site-title"><?php bloginfo('name');?></div></a>
		<div class="site-description"><?php bloginfo('description'); ?></div>
	
		<div id="logo">
			<?php the_custom_logo(); ?>
		</div>
	
</div>
		
<div id="menu-wrapper">
	<?php wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container_class' => 'nav', 'container_id' => 'primmenu', 'fallback_cb' => 'false' )); ?>
</div>
		
			<div class="clear"></div>
	</div>
	
		<div class="clear"></div>
</div>

<div id="wrapper">