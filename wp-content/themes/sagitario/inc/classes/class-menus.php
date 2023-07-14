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

	}

	public function register_menus() {

		register_nav_menus(
			array(
				'sagitario-header-menu' => esc_html__( 'Header Menu', 'sagitario' ),
			)
		);
		
	}

}