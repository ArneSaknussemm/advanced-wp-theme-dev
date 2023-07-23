<?php
add_action( 'wp_enqueue_scripts', 'mis_assets');

function mis_assets() {
/* 	wp_enqueue_style( 'header', get_template_directory_uri() . '/assets/src/css/header.css', array(), 1.0, 'all' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/src/css/main.css', array(), 1.0, 'all' );
	wp_enqueue_style( 'footer', get_template_directory_uri() . '/assets/src/css/footer.css', array(), 1.0, 'all' );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/src/js/main.js', array(), 1.0, 'true' );
 */
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/build/main.js', array(), 1.0, false );
}