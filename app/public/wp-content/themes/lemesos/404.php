<?php get_header(); ?>

<?php get_template_part( 'menu'); ?>

   <div id="content-broad">
	
	<div class="post">

     <h1><?php esc_html_e( '404 Error - Page not found', 'lemesos' )?></h1>

		<p><?php esc_html_e( 'Please check your URL, or use the page navigation', 'lemesos' )?></p>

	 </div>

   </div>

<?php get_footer(); ?>