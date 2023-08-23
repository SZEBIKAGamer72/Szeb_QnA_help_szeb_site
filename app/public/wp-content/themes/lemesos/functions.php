<?php

/* lemesos, WP FUNCTIONS FILE */

add_action('after_setup_theme', 'lemesos_theme_setup');

function lemesos_theme_setup() {

load_theme_textdomain('lemesos', get_template_directory() . '/languages');

//CONTENT WIDTH
global $content_width;
if ( ! isset( $content_width ) )
$content_width = 800;

//THEME SUPPORT

add_theme_support( 'post-formats', array(
		'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video'
	) );

add_theme_support( 'title-tag' );

add_theme_support('post-thumbnails');

add_theme_support('automatic-feed-links');

add_editor_style( 'editor-style.css' );

add_theme_support( 'html5', array( 'comment-form', 'comment-list', 'gallery', 'caption'
	) );
	
add_theme_support( 'custom-logo' );
	
add_theme_support( 'wp-block-styles' );
	
add_theme_support( 'align-wide' );
	
add_theme_support( 'responsive-embeds' );
	

//CUSTOM BACKGROUND
$args = array(
	'default-color' => '#F3F3F3',
);
add_theme_support( 'custom-background', $args );

//ADD NAVIGATION
add_action( 'init', 'lemesos_register_my_menus' );

//ADD SIDEBARS
add_action( 'widgets_init', 'lemesos_register_sidebars' );

//ENQUE STYLESHEETS AND SCRIPTS
add_action( 'wp_enqueue_scripts', 'lemesos_enqueue_style' );

}


//FUNCTIONS


//ADD STYLESHEET TO PAGE
function lemesos_enqueue_style() {
    wp_enqueue_style( 'lemesos-style', get_stylesheet_uri() ); 
}


//Add a pingback url auto-discovery header for singularly identifiable articles.
function lemesos_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">' . "\n", get_bloginfo( 'pingback_url' ) );
	}
}
add_action( 'wp_head', 'lemesos_pingback_header' );


//MENU NAVIGATION
function lemesos_register_my_menus() {
  register_nav_menus(
	array(
	'primary-menu' => __( 'Primary Menu','lemesos' )
	)
	);
}


//WIDGET AREAS
function lemesos_register_sidebars() {
	
	register_sidebar( array(
		'name' => __( 'Banner', 'lemesos' ),
		'id' => __( 'banner-1', 'lemesos' ),
		'description' => __( 'Large banner widget area, suitable for header images etc', 'lemesos' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	) );

	register_sidebar( array(
		'name' => __( 'Blog sidebar', 'lemesos' ),
		'id' => __( 'sidebar-1', 'lemesos' ),
		'description' => __( 'Post sidebar widget area', 'lemesos' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Page sidebar', 'lemesos' ),
		'id' => __( 'sidebar-2', 'lemesos' ),
		'description' => __( 'Page sidebar widget area', 'lemesos' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer with 4 areas', 'lemesos' ),
		'id' => __( 'footer-1', 'lemesos' ),
		'description' => __( 'Footer widget area', 'lemesos' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	) );

}


////BLOCKS
function lemesos_register_block_style( $block_name, $style_properties ) {
    return WP_Block_Styles_Registry::get_instance()->register( $block_name, $style_properties );
}

function lemesos_register_block_pattern( $pattern_name, $pattern_properties ) {
    return WP_Block_Patterns_Registry::get_instance()->register( $pattern_name, $pattern_properties );
}

//SCRIPTS THREADED COMMENTS
function lemesos_load_scripts() {

	if ( is_singular() && get_option( 'thread_comments' ) && comments_open() )
		wp_enqueue_script( 'comment-reply' );
}

// EXCERPT - Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more) {
       global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '"> &nbsp; &rarr;</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

?>