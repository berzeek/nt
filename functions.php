<?php

require_once(get_template_directory(). '/bs4Navwalker.php');

function theme_prefix_setup() {

	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-width' => true,
	) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );

function enqueue_theme_styles() {

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'core', get_template_directory_uri() . '/style.css' );

	// Slick Slider
    wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/css/slick.css' );

}
add_action( 'wp_enqueue_scripts', 'enqueue_theme_styles');

function enqueue__theme_scripts() {

    // Bootstrap
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ) );

	// jQuery UI
    wp_enqueue_script( 'jquery-ui',  get_template_directory_uri() . '/js/jquery.ui.min.js' );

    // Slick Slider
    wp_enqueue_script( 'slick-js',  get_template_directory_uri() . '/js/slick.min.js' );

    // Slider Config
    wp_enqueue_script( 'config',  get_template_directory_uri() . '/js/slider-config.js' );
}
add_action( 'wp_enqueue_scripts', 'enqueue__theme_scripts');
