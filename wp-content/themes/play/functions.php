<?php

//Enqueue Styles & Scripts

function theme_styles() {
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/css/normalize.css' );
  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css');
}

add_action( 'wp_enqueue_scripts', 'theme_styles' );

function theme_js() {
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/jquery.js', '', true);
  wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true );
}

add_action( 'wp_enqueue_scripts', 'theme_js' );


//Register Navigations

function my_custom_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __( 'Primary Menu' ),
            'secondary-menu' => __( 'Secondary Menu' )
        )
    );
}
add_action( 'init', 'my_custom_menus' );



//Enable Thumbnails for Featured Images use the_post_thumbnail in template files

add_theme_support( 'post-thumbnails' );

//Custom Excerpt Length

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 ); //999 ensures this function is called later in process


//widget

function wpt_create_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => __( $name ),
		'id' => $id,
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="module-heading">',
		'after_title' => '</h2>'
	));

}

wpt_create_widget( 'Page Sidebar', 'page', 'Displays on the side of pages with a sidebar' );
wpt_create_widget( 'Blog Sidebar', 'blog', 'Displays on the side of pages in the blog section' );


add_theme_support( 'featured-content', array(
    'featured_content_filter' => 'mytheme_get_featured_content',
));
