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

		$style_uri = get_parent_theme_file_uri( 'style.css' );

		wp_enqueue_style(
			'bluehost-blueprint-style',
			$style_uri,
			array(),
			$theme_version
		);
	}

	/**
	 * Load custom block styles.
	 */
	public static function enqueue_custom_block_styles() {
		$env             = wp_get_environment_type();
		$is_debug        = defined( 'WP_DEBUG' ) && WP_DEBUG;
		$is_script_debug = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG;
		$use_minified    = ( 'production' === $env || ! $is_debug || ! $is_script_debug );

		$files = glob( get_template_directory() . '/assets/block-styles/*.css' );

		foreach ( $files as $file ) {
			$filename = basename( $file, '.css' );

			// Handle different block namespaces.
			if ( strpos( $filename, 'core-' ) === 0 ) {
				$block_name = str_replace( 'core-', 'core/', $filename );
			} elseif ( strpos( $filename, 'woocommerce-' ) === 0 ) {
				$block_name = str_replace( 'woocommerce-', 'woocommerce/', $filename );
			} else {
				$block_name = $filename;
			}

			$suffix   = $use_minified ? '.min' : '';
			$min_path = get_theme_file_path( "assets/block-styles/{$filename}{$suffix}.css" );
			$min_src  = get_theme_file_uri( "assets/block-styles/{$filename}{$suffix}.css" );

			// Fallback to non-minified version if .min.css doesn't exist.
			if ( ! file_exists( $min_path ) ) {
				$min_path = get_theme_file_path( "assets/block-styles/{$filename}.css" );
				$min_src  = get_theme_file_uri( "assets/block-styles/{$filename}.css" );
			}

			wp_enqueue_block_style(
				$block_name,
				array(
					'handle' => "nfd-block-{$filename}",
					'src'    => $min_src,
					'path'   => $min_path,
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
		$env             = wp_get_environment_type();
		$is_debug        = defined( 'WP_DEBUG' ) && WP_DEBUG;
		$is_script_debug = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG;
		$use_minified    = ( 'production' === $env || $is_debug || $is_script_debug );

		$suffix     = $use_minified ? '.min' : '';
		$style_file = "assets/editor-styles/editor-style{$suffix}.css";

		// Fallback to unminified if minified file does not exist.
		if ( ! file_exists( get_theme_file_path( $style_file ) ) ) {
			$style_file = 'assets/editor-styles/editor-style.css';
		}

		add_editor_style( "./$style_file" );
	}
}
