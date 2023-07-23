<?php
/**
 * Theme Sidebars
 * 
 * @package Sagitario
 */

 namespace SAGITARIO\Inc;

use SAGITARIO\Inc\Traits\Singleton;

 class Sidebars {
	use Singleton;

	protected function __construct() {
		//load class
		$this->setup_hooks();
		error_log('SIDEBAR CLASS LOADED');
	}

	protected function setup_hooks() {
		/**
		 * Actions
		 */
		add_action( 'widgets_init', array( $this, 'register_sidebars' ) );
		add_action( 'widgets_init', array( $this, 'register_clock_widget' ) );
	}

	public function register_sidebars() {
		
		register_sidebar( array(
			'name'			=> __( 'Sidebar-1', 'sagitario'),
			'id'			=> 'sidebar-1',
			'description'	=> __('Main Sidebar', 'sagitario' ),
			'before_widget'	=> '<div id="%1$s" class="widget widget-sidebar %2$s">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h3 class="widget-title">',
			'after_title'	=> '</h3>',
		) );
		
		register_sidebar( array(
			'name'			=> __( 'Footer', 'sagitario'),
			'id'			=> 'footer',
			'description'	=> __('Footer Sidebar', 'sagitario' ),
			'before_widget'	=> '<div id="%1$s" class="widget widget-footer cell column %2$s">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h3 class="widget-title">',
			'after_title'	=> '</h3>',
		) );
	}

	public function register_clock_widget() {
		// Name of the class with namespace
		register_widget( 'SAGITARIO\Inc\Clock_Widget' );
	}
 }