<?php
/*
Template Name: WIDE
*/
?>

<?php get_header(); ?>

<?php get_template_part( 'menu'); ?>
 
        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
         
<div id="content-broad">
	
	 <div class="post-title">
        <h1><?php the_title(); ?></h1>
	</div>

	<div class="post">
		   
	<div class="entry">
		<?php the_content(); ?>
	</div>
		   
		<div class="pagenumber">  
			<?php wp_link_pages(); ?> 
		</div>

	</div>

<?php endwhile; ?>
 
<?php endif; ?>

</div>

<?php get_footer(); ?>