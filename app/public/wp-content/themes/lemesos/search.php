<?php get_header(); ?>

<?php get_template_part( 'menu'); ?>

	<div id="cat-description">
		<h1>
			<?php esc_html_e('Search results:','lemesos'); ?>
		</h1>
	</div>

    <div class="searchbox">
			<?php get_template_part( 'searchform'); ?>
    </div>

<div id="content-columns">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		   <?php if(has_post_thumbnail()) :?>
				<div class="featured"> 
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail(); ?>
					</a>
				</div>
			<?php endif;?>
				
		 <div class="post-title">
			<a href="<?php the_permalink(); ?>"><h3 class="entry-title"><?php the_title(); ?></h3></a>
			<?php get_template_part( 'postmetadata'); ?>
		</div>
		
		<div class="entry">
			<?php the_excerpt(); ?>
		</div>
			
	</div><!--Ends post-->

<?php endwhile; else: ?>
	
<div class="entry"><?php esc_html_e('Try again, no articles matched your criteria.','lemesos'); ?></div>

<?php endif; ?>
	
    	<div class="navigation">
        	<?php posts_nav_link(); ?>
    	</div>

</div><!--Ends content-->

<?php get_footer(); ?>