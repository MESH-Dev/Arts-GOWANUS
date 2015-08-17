<?php

//enqueue scripts and styles *use production assets. Dev assets are located in assets/css and assets/js
function loadup_scripts() {
    wp_enqueue_style('fa' , '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css');

    wp_enqueue_script( 'masonry', get_template_directory_uri().'/js/masonry.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'scrollto', get_template_directory_uri().'/js/jquery.scrollTo-1.4.2-min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'localscroll', get_template_directory_uri().'/js/jquery.localscroll-1.2.7-min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'parallax', get_template_directory_uri().'/js/jquery.parallax-1.1.3.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'theme-js', get_template_directory_uri().'/js/mesh.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'loadup_scripts' );

// Add Thumbnail Theme Support
add_theme_support('post-thumbnails');
add_image_size('background-fullscreen', 1800, 1200, true);
add_image_size('short-banner', 1800, 800, true);

add_image_size('large', 700, '', true); // Large Thumbnail
add_image_size('medium', 250, '', true); // Medium Thumbnail
add_image_size('small', 120, '', true); // Small Thumbnail
add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');



//Register WP Menus
register_nav_menus(
    array(
        'main_nav' => 'Header and breadcrumb trail heirarchy',
        'social_nav' => 'Social menu used throughout'
    )
);

// Register Widget Area for the Sidebar
register_sidebar( array(
    'name' => __( 'Primary Widget Area', 'Sidebar' ),
    'id' => 'primary-widget-area',
    'description' => __( 'The primary widget area', 'Sidebar' ),
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
) );

// add category nicenames in body and post class
function category_id_class( $classes ) {
    global $post;
    foreach ( get_the_category( $post->ID ) as $category ) {
        $classes[] = $category->category_nicename;
    }
    return $classes;
}

add_filter( 'post_class', 'category_id_class' );
add_filter( 'body_class', 'category_id_class' );

//disable code editors
add_theme_support('html5');
add_theme_support('automatic-feed-links');

//Security and header clean-ups
remove_action( 'wp_head', 'wlwmanifest_link');
remove_action( 'wp_head', 'rsd_link');
remove_action( 'wp_head', 'index_rel_link' ); // index link
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); // prev link
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 ); // start link
remove_action( 'wp_head', 'wp_generator'); // remove WP version from header
remove_action( 'wp_head','wp_shortlink_wp_head');


?>
