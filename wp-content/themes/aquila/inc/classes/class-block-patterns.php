<?php
/**
 * Block Patterns
 * 
 * @package Aquila
 */

namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class Block_Patterns {
	use Singleton;

	protected function __construct() {
		// load class.
		$this->setup_hooks();
	}

	protected function setup_hooks() {
		/**
		 * Actions
		 */
		add_action( 'init', array( $this, 'my_plugin_register_my_patterns' ) );
		add_action( 'init', array( $this, 'my_plugin_register_my_pattern_categories' ) );
	}

	public function my_plugin_register_my_patterns() {

		if ( function_exists( 'register_block_pattern' )) {
			
			$cover_content = $this->get_pattern_content( 'template-parts/patterns/cover' );

			register_block_pattern(
				'aquila/cover',
				array(
					'title'       => __( 'Aquila cover', 'aquila' ),
					'description' => _x( 'Aquila cover block with image and text', 'Block pattern description', 'my-plugin' ),
					'categories'	=> array( 'cover' ),
					'content'     => $cover_content,
				)
			);
		}
	}

	public function get_pattern_content($template_path) {
		ob_start();
		get_template_part( $template_path );
		return ob_get_clean();
	}

	public function my_plugin_register_my_pattern_categories() {
		$pattern_categories = array(
			'cover'		=> 'Cover',
			'carousel'	=> 'Carousel',
		);

		if ( !empty( $pattern_categories ) && is_array( $pattern_categories ) ) {
			foreach ( $pattern_categories as $pattern_category => $pattern_Category_label ) {
				register_block_pattern_category(
					$pattern_category,
					array( 'label' => __( $pattern_Category_label, 'my-plugin' ) )
				);
			}
		}
	}
}