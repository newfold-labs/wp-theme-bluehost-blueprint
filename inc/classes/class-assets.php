<?php
/**
 * Assets.php
 *
 * Registers and enqueues all necessary styles and scripts.
 *
 * @package Bluehost\Blueprint
 * @author  Bluehost
 * @since   1.0.0
 */

namespace Bluehost\Blueprint;

/**
 * Class Assets
 *
 * Registers and enqueues all necessary styles and scripts.
 *
 * @since 1.0.0
 */
class Assets {
	/**
	 * Initializes the class.
	 *
	 * @since 1.0.0
	 */
	public static function init() {
		// Registers styles and scripts.
		add_action( 'wp_enqueue_scripts', array( __CLASS__, 'enqueue_frontend_assets' ) );

		add_action( 'init', array( __CLASS__, 'enqueue_custom_block_styles' ) );

		add_action( 'after_setup_theme', array( __CLASS__, 'enqueue_editor_style' ) );
	}

	/**
	 * Enqueue frontend CSS and JS
	 *
	 * Enqueues all stylesheets and scripts required for frontend functionality.
	 *
	 * @since 1.0.0
	 */
	public static function enqueue_frontend_assets() {
		$theme_version = wp_get_theme()->get( 'Version' );

		/**
		 * Enqueues main stylesheet.
		 *
		 * @since 1.0.0
		 */
		wp_enqueue_style(
			'bluehost-blueprint-style',
			get_parent_theme_file_uri( 'style.css' ),
			array(),
			$theme_version
		);

		/**
		 * Enqueues editor stylesheet.
		 *
		 * @since 1.0.0
		 */
		wp_enqueue_style(
			'bluehost-blueprint-editor-style',
			get_parent_theme_file_uri( './assets/editor-styles/editor-style.css' ),
			array(),
			$theme_version
		);
	}

	/**
	 * Load custom block styles.
	 */
	public static function enqueue_custom_block_styles() {

		$files = glob( get_template_directory() . '/assets/block-styles/*.css' );

		foreach ( $files as $file ) {

			// Get the filename and core block name.
			$filename   = basename( $file, '.css' );
			$block_name = str_replace( 'core-', 'core/', $filename );

			wp_enqueue_block_style(
				$block_name,
				array(
					'handle' => "nfd-block-{$filename}",
					'src'    => get_theme_file_uri( "assets/block-styles/{$filename}.css" ),
					'path'   => get_theme_file_path( "assets/block-styles/{$filename}.css" ),
				)
			);
		}
	}

	/**
	 * Enqueues the editor style.
	 *
	 * This is a required method for themes that wish to support the block editor.
	 *
	 * @since 1.0.0
	 */
	public static function enqueue_editor_style() {
		add_editor_style( './assets/editor-styles/editor-style.css' );
	}
}
