<?php get_header(); ?>

<?php get_template_part( 'menu'); ?>

<?php get_template_part( 'banner'); ?>

<div id="content-columns">

        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
         
	
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

<?php endwhile; endif; ?>

    </div><!--Ends content-->

<div class="navigation"><?php posts_nav_link(); ?></div>

<?php get_footer(); ?>