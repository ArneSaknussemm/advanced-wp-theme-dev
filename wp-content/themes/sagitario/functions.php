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

require_once SAGITARIO_DIR_PATH . '/inc/helpers/autoloader.php';

function sagitario_get_theme_instance() {

	\SAGITARIO\Inc\SAGITARIO::get_instance();

}
sagitario_get_theme_instance();
