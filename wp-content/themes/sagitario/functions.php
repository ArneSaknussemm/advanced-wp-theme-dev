<?php
/**
 * Sagitario theme functions
 * 
 * @package Sagitario
 */

if ( ! defined( 'SAGITARIO_DIR_PATH' ) ) {
	define ( 'SAGITARIO_DIR_PATH', untrailingslashit( get_template_directory() ) );
}
if ( ! defined( 'SAGITARIO_DIR_URI' ) ) {
	define ( 'SAGITARIO_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}
if ( ! defined( 'SAGITARIO_ASSETS_URI' ) ) {
	define ( 'SAGITARIO_ASSETS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/src' );
}
if ( ! defined( 'SAGITARIO_ASSETS_BUILD_URI' ) ) {
	define ( 'SAGITARIO_ASSETS_BUILD_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build' );
}
if ( ! defined( 'SAGITARIO_ASSETS_BUILD_PATH' ) ) {
	define ( 'SAGITARIO_ASSETS_BUILD_PATH', untrailingslashit( get_template_directory() ) . '/assets/build' );
}

require_once SAGITARIO_DIR_PATH . '/inc/helpers/autoloader.php';

function sagitario_get_theme_instance() {

	\SAGITARIO\Inc\SAGITARIO::get_instance();

}
sagitario_get_theme_instance();

remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );