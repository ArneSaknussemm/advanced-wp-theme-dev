<?php
/**
 * Enqueue theme assets
 * 
 * @package Sagitario
 */

namespace SAGITARIO\Inc;

use SAGITARIO\Inc\Traits\Singleton;

class Assets {
	use Singleton;

	protected function __construct() {
		// Load class.
		$this->setup_hooks();
		error_log( 'ASSETS LOADED' );
	}

	protected function setup_hooks() {
		/**
		 * Actions
		 */
		add_action( 'wp_enqueue_scripts', array( $this, 'register_styles' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'register_scripts' ) );
		//remove_action('wp_body_open', 'wp_global_styles_render_svg_filters');
		error_log('ACTIONS DONE');
	}

	public function register_styles() {
		// Register styles.
		wp_register_style( 'style-css', SAGITARIO_DIR_URI . '/style.css', array(), filemtime( SAGITARIO_DIR_PATH . '/style.css' ), 'all' );
		wp_register_style( 'bootstrap-css', SAGITARIO_ASSETS_URI . '/bootstrap/css/bootstrap.min.css', array(), false, 'all' );
		wp_enqueue_style( 'bootstrap-css' );

		wp_enqueue_style( 'style-css' );
		error_log( 'STYLES LOADED: ');
		error_log( print_r(SAGITARIO_DIR_PATH . '/style.css', true));
		error_log( print_r(SAGITARIO_DIR_URI . '/style.css', true));
	}
	
	public function register_scripts() {
		
		wp_register_script( 'bootstrap-js', SAGITARIO_ASSETS_URI . '/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), false, false );
		wp_enqueue_script( 'bootstrap-js' );
		error_log( 'SCRIPTS LOADED: ');
	}

}