<?php get_header(); ?>

<?php get_template_part( 'menu'); ?>

<div id="cat-description">

<!--Archive label-->

<?php $post = $posts[0]; ?>

      <?php if (is_category()) { ?>
	<h1><?php single_cat_title(); ?></h1>

      <?php } elseif( is_tag()) { ?>
	<h1><?php single_tag_title(); ?></h1>

      <?php } elseif (is_day()) { ?>
	<h1><?php the_time( get_option('date_format') ); ?></h1>

      <?php } elseif (is_month()) { ?>
	<h1><?php the_time('F, Y'); ?></h1>

      <?php } elseif (is_year()) { ?>
	<h1><?php the_time('Y'); ?></h1>

      <?php } elseif (is_author()) { ?>
	<h1><?php the_author(); ?></h1>

      <?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>

	<h1><?php esc_html_e( 'News archives:','lemesos' ); ?></h1>

    <?php } ?>

<?php echo category_description(); ?>

</div>

	<div class="clear"></div>

<div id="content-columns">
	
<!--post-->

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="post" id="post-<?php the_ID(); ?>">
		
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
		</div><!--Ends entry-->

<div class="pagenumber"><?php wp_link_pages(); ?></div>

</div><!--end post-->

	<?php endwhile; endif; ?>

		<?php get_template_part( 'content', 'none' ); ?>

	</div><!--end content-->

<div class="navigation"><?php posts_nav_link(); ?></div>

<?php get_footer(); ?>