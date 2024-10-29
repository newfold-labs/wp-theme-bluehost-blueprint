<?php
/**
 * NextGen theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package NextGen Theme
 * @since 1.0.0
 */

// Enqueues style.css on the front.
if ( ! function_exists( 'nextgen_theme_enqueue_styles' ) ) :
	/**
	 * Enqueues style.css on the front.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function nextgen_theme_enqueue_styles() {
		wp_enqueue_style(
			'nextgen_theme-style',
			get_parent_theme_file_uri( 'style.css' ),
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'nextgen_theme_enqueue_styles' );