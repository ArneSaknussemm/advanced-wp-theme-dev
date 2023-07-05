<?php
/**
 * Bootstraps the theme.
 * 
 * @package Aquila
 */

namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class AQUILA_THEME {
	use Singleton;

	protected function __construct() {
		// load class.

		Assets::get_instance();
		Menus::get_instance();
		Meta_boxes::get_instance();
		Sidebars::get_instance();

		$this->setup_hooks();
	}

	protected function setup_hooks() {
		
		/**
		 * Actions.
		 */
		add_action( 'after_setup_theme', array( $this, 'setup_theme') );

	}

	public function setup_theme() {

		// TODO Internationalization

		add_theme_support( 'title-tag' );

		add_theme_support( 'custom-logo', array(
			'header-text'          => array( 'site-title', 'site-description' ),
			'height'               => 100,
			'width'                => 400,
			'flex-height'          => true,
			'flex-width'           => true,
			'unlink-homepage-logo' => true, 
		) );
		
		add_theme_support( 'custom-background', array( 
			'default-color'		=> '0000ff',
			'default-image'		=> '',
			'default-repeat'	=> 'no-repeat',
		) );

		add_theme_support( 'post-thumbnails' );

		add_image_size( 'featured-thumbnail', 416, 257, true );
		// https://make.wordpress.org/core/2016/03/22/implementing-selective-refresh-support-for-widgets/
		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support( 'automatic-feed-links' );

		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
			)
		);

		add_editor_style();

		// https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-support/#default-block-styles
		add_theme_support( 'wp-block-styles' );

		// https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-support/#wide-alignment
		add_theme_support( 'align-wide' );

		global $content_width;
		if (! isset( $content_width ) ) {
			$content_width = 1240;
		}


	}

 }
 