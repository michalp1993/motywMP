<?php
function motywmp_scripts() {
	wp_enqueue_style( 'motywmp-style', get_template_directory_uri() . '/style.css', array(), filemtime(get_template_directory().'/style.css') );
}
add_action( 'wp_enqueue_scripts', 'motywmp_scripts' );

function motywmp_theme_setup(){
	add_theme_support('menus');
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-background' );
	add_theme_support( 'custom-logo', array(
        'height'               => 100,
        'width'                => 100,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true,
    ) );
	register_nav_menu( 'primary', 'Main header menu' );
	register_nav_menu( 'footer', 'Footer menu' );
}

add_action( 'after_setup_theme', 'motywmp_theme_setup');

function mp_custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'mp_custom_excerpt_length');