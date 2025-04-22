<?php
/**
 * Back-compat.php
 *
 * Registers and enqueues all necessary styles and scripts to support old themes previously used by users.
 *
 * @package Bluehost\Blueprint
 * @author  Bluehost
 * @since   1.0.0
 */

namespace Bluehost\Blueprint;

/**
 * Class Back_Compat
 *
 * Registers and enqueues all necessary styles and scripts.
 *
 * @since 1.0.0
 */
class Back_Compat {
	/**
	 * Initializes the class.
	 *
	 * @since 1.0.0
	 */
	public static function init() {
		// Registers styles and scripts.
		add_action( 'wp_enqueue_scripts', array( __CLASS__, 'enqueue_frontend_assets' ) );

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
		 * Enqueues editor stylesheet.
		 *
		 * @since 1.0.0
		 */
		if ( get_option( 'theme_mods_yith-wonder' ) ) {
			$suffix = ( wp_get_environment_type() === 'production' || WP_DEBUG || SCRIPT_DEBUG ) ? '.min' : '';
			$path   = "assets/back-compat/yith-wonder{$suffix}.css";
			$file   = get_parent_theme_file_path( $path );
			$uri    = get_parent_theme_file_uri( $path );

			if ( ! file_exists( $file ) ) {
				$uri = get_parent_theme_file_uri( 'assets/back-compat/yith-wonder.css' );
			}

			wp_enqueue_style(
				'bluehost-blueprint-legacy-yith-wonder',
				$uri,
				array(),
				$theme_version
			);
		}
	}

	/**
	 * Enqueues the editor style.
	 *
	 * @since 1.0.0
	 */
	public static function enqueue_editor_style() {
		if ( get_option( 'theme_mods_yith-wonder' ) ) {
			$suffix = ( wp_get_environment_type() === 'production' || WP_DEBUG || SCRIPT_DEBUG ) ? '.min' : '';
			$path   = "assets/back-compat/yith-wonder{$suffix}.css";
			$file   = get_parent_theme_file_path( $path );

			if ( ! file_exists( $file ) ) {
				$path = 'assets/back-compat/yith-wonder.css';
			}

			add_editor_style( "./$path" );
		}
	}
}
