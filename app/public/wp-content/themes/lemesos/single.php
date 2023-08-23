<?php get_header(); ?>

<?php get_template_part( 'menu'); ?>
 
        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
         
	<div class="post-title">

 		<h1 class="entry-title"><?php the_title(); ?></h1>
		
		<?php get_template_part( 'postmetadata'); ?>

	</div>
        
	<div id="content">

		<div class="post">

            	<div class="entry">
            		<?php the_content(); ?>
    			</div>
			
			<div class="pagenumber">
					<?php wp_link_pages(); ?>
			</div>

	<?php endwhile; ?>

		</div>
		
	<?php endif; ?>
	
	<div class="navigation">
			<div class="navigation-item">
				<?php previous_post_link(' &larr; %link ') ?>
					&nbsp;  &nbsp; 
			</div>
		  <div class="navigation-item">
			<?php next_post_link(' %link &rarr; ') ?>
		</div>
	</div>

	<div class="comments-template">
		<?php comments_template(); ?>
		<?php paginate_comments_links(); ?> 
	</div>
			
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>