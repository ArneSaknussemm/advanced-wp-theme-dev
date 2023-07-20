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
		wp_register_style( 'main', SAGITARIO_ASSETS_BUILD_URI . '/css/main.css', array('bootstrap'), filemtime( SAGITARIO_ASSETS_BUILD_URI . '/css/main.css' ), 'all' );
		wp_register_style( 'bootstrap', SAGITARIO_ASSETS_BUILD_URI . '/bootstrap/css/bootstrap.min.css', array(), false, 'all' );
		wp_register_style( 'fonts', SAGITARIO_ASSETS_URI . '/css/fonts.css', array(), false, 'all' );

		wp_enqueue_style( 'main' );
		wp_enqueue_style( 'bootstrap' );
		wp_enqueue_style( 'fonts' );
		error_log( 'STYLES LOADED: ');
	}
	
	public function register_scripts() {
		
		wp_register_script( 'main', SAGITARIO_ASSETS_BUILD_URI . '/js/main.js', array('jquery'), false, false );
		error_log( print_r('COCO: ' . SAGITARIO_ASSETS_BUILD_URI . '/js/clock-widget.js', true));
		wp_register_script( 'bootstrap', SAGITARIO_ASSETS_URI . '/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), false, false );
		
		wp_enqueue_script( 'main' );
		wp_enqueue_script( 'bootstrap' );
		error_log( 'SCRIPTS LOADED: ');
	}

}