		
<div class="metadata2"> 

			<span class="vcard author">	
 			<span class="fn"><?php the_author_posts_link(); ?></span>
			</span>
			
			<span class="date updated">
			<a href="<?php the_permalink(); ?>">
			<?php the_time( get_option('date_format') ); ?>
			</a>
			</span>
	
			<?php
			if ( comments_open() ) :
  			comments_popup_link();
			endif;
			?>


</div>

<div class="metadata"> 
			

			<?php the_category( ' ' ); ?>
			
			<?php
			$before = '';
			$seperator = ''; // blank instead of comma
			$after = '';

			the_tags( $before, $seperator, $after );
			?>
	
</div>
