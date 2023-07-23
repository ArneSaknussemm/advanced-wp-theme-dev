<?php
/**
 * Enqueue theme menus
 * 
 * @package Sagitario
 */

namespace SAGITARIO\Inc;

use SAGITARIO\Inc\Traits\Singleton;

class Menus {
	use Singleton;

	protected function __construct() {
		// Load class.
		$this->setup_hooks();
	}

	protected function setup_hooks() {
		/**
		 * Actions
		 */
		add_action( 'init', array( $this, 'register_menus' ) );
		add_filter( 'nav_menu_css_class' , array( $this, 'cocoloco' ), 10, 4 );
		add_filter( 'nav_menu_link_attributes', array( $this, 'locococo' ), 10, 4 );
		add_filter( 'nav_menu_submenu_css_class', array( $this, 'polopolo' ), 10, 3 );
	
	}

	public function register_menus() {

		register_nav_menus(
			array(
				'sagitario-header-menu' => esc_html__( 'Header Menu', 'sagitario' ),
			)
		);
		
	}

	function cocoloco($classes, $menu_item, $args, $depth) {
			
		if ('sagitario-header-menu' === $args->theme_location ) {
			$classes[] = 'nav-item';
			if ( in_array('menu-item-has-children', $menu_item->classes) ) {
				$classes[] = 'dropdown';
			}
		}
		return $classes;
	}

	function locococo($atts, $menu_item, $args, $depth) {
		
		if ( 'sagitario-header-menu' === $args->theme_location ) {
			$atts['class'] = 'nav-link';
			if ( in_array('menu-item-has-children', $menu_item->classes) )
			{
				$atts['class'] = 'nav-link dropdown-toggle';
				$atts['role'] = 'button';
				$atts['data-bs-toggle'] = 'dropdown';
				$atts['aria-expanded'] = 'false';
			}
		}
		return $atts;
	}

	function polopolo($classes, $args, $depth) {
		
		if ( 'sagitario-header-menu' === $args->theme_location ) {
			$classes['class'] = 'dropdown-menu';
		}
		return $classes;
	}

}