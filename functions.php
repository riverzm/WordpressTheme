<?php

function barebones_styles() {
	wp_enqueue_style('style', get_stylesheet_uri() );
	wp_enqueue_style('reset', get_theme_file_uri('assets/css/reset.css'), array(), 1.0);
	wp_enqueue_style('grid', get_theme_file_uri('assets/css/grid.css'), array(), 1.0);
	wp_enqueue_style('main', get_theme_file_uri('assets/css/main.css'), array(), 1.0);
}

function barebones_scripts() {
	wp_enqueue_script('jquery-1.11.0', get_theme_file_uri('assets/js/jquery-1.11.0.js'), array(), 1.0);
	wp_enqueue_script('html5', get_theme_file_uri('assets/js/html5.js'), array(), 1.0);
	wp_enqueue_script('main', get_theme_file_uri('assets/js/main.js'), array(), 1.0);
}

function barebones_menus() {
	
	register_nav_menus(array(
		'primary' => __('Primary Navigation'),
		'footer' => __('Footer Navigation'),
	));
}

function barebones_widgets() {
	
	register_sidebar(array(
		'name' => 'Primary Widgets',
		'id' => 'primary_widgets',
		'description' => 'This area is designated for Primary Widgets Only!',
		'before_widget' => '<div class="col-wd-12"><section>',
		'after_widget' => '</section></div> <!-- .col- -->',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3> <!-- .widget-title -->',
	));
	
	register_sidebar(array(
		'name' => 'Footer Widgets',
		'id' => 'footer_widgets',
		'description' => 'This area is designated for Footer Widgets Only!',
		'before_widget' => '<div class="col-wd-12 col-md-6 col-sm-3"><div class="col"><section>',
		'after_widget' => '</section></div> <!-- .col --> </div> <!-- .col- -->',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3> <!-- .widget-title -->',
	));
}

function theme_excerpt_length($length) {
	return 30;
}

function theme_excerpt_more($more) {
	return ' ...(more...)';
}

add_action('wp_enqueue_scripts','barebones_styles');
add_action('wp_footer','barebones_scripts');
add_action('init','barebones_menus');
add_action('widgets_init','barebones_widgets');

add_filter('excerpt_length','theme_excerpt_length');
add_filter('excerpt_more','theme_excerpt_more');

add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('automatic-feed-links');
add_theme_support('post-formats', array(
	'aside',
	'audio',
	'image',
	'gallary',
	'link',
	'quote',
	'video',
));

function main_embedded_post() {
    $content = do_shortcode( apply_filters( 'the_content', get_the_content() ) );
    $embed = get_media_embedded_in_content( $content, $type );
    
    if( in_array( 'audio' , $type) ):
        $output = str_replace( '?visual=true', '?visual=false', $embed[0] );       
    else:
        $output = $embed[0]; 
    endif;
    
    return $output; 
}



