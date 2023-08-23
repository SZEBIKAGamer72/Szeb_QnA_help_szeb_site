<div class="clear"></div>

</div>

<div id="footer">

		<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
		<?php dynamic_sidebar( 'footer-1' ); ?>
		<?php endif; ?>

	<div id="credits">
				
				
<?php if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
	}
	?> 
		
			<br>
				<?php bloginfo('name');?> -
				<?php bloginfo('description'); ?>
			</br>
				
				<?php _e('Powered by ','lemesos'); ?><a href="http://wordpress.org/">Wordpress</a>
				<?php _e('Lemesos by ','lemesos'); ?><a href="https://toth-illustration.com">RT</a>
	</div>

	<div class="clear"></div>

</div>

	<div class="clear"></div>

<?php wp_footer(); ?> 

</body>
</html>