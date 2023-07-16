<?php
/**
 * Bootstrap Sagitario theme
 * 
 * @package Sagitario
 */

namespace SAGITARIO\Inc;

use SAGITARIO\Inc\Traits\Singleton;

class SAGITARIO {
	use Singleton;

	protected function __construct() {
		//load class
		Assets::get_instance();
		Menus::get_instance();
		Sidebars::get_instance();
		
		$this->setup_hooks();
		error_log('MAIN CLASS LOADED');
	}

	protected function setup_hooks() {
		
		add_action( 'after_setup_theme', array( $this, 'setup_theme' ) );
	}

	public function setup_theme() {

		add_theme_support( 'title-tag' );

		add_theme_support( 'custom-logo', array(
			'header-text'          => array( 'site-title', 'site-description' ),
			'height'               => 100,
			'width'                => 400,
			'flex-height'          => true,
			'flex-width'           => true,
			'unlink-homepage-logo' => true, 
		) );

		add_image_size( 'featured-thumbnail', 416, 257, true );
	}


}