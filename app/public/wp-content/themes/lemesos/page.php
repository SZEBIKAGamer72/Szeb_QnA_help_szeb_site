<?php get_header(); ?>

<?php get_template_part( 'menu'); ?>
 
        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
         
 <div class="post-title">
	 
	 <h1 class="entry-title"><?php the_title(); ?></h1>

 </div>
 
<div id="content">

       <div class="post">
            <div class="entry">
            <?php the_content(); ?>

		<div class="pagenumber">  
		<?php wp_link_pages(); ?> 

		</div>

       </div>
		   
        </div>
	
<?php endwhile; ?>
 
<?php endif; ?>
	
		   		<div class="comments-template">
					
			<?php
			if ( comments_open() ) :
  			comments_popup_link();
			endif;
			?>
					
			<?php comments_template(); ?>
			<?php paginate_comments_links(); ?> 
			</div>
	
</div>

<?php get_template_part( 'innersidebar'); ?>

<?php get_footer(); ?>