<?php
/**
 * Autoloader file for the Bluehost Blueprint.
 *
 * This file registers an autoloader function to load theme classes automatically.
 *
 * @author Bluehost
 * @package Bluehost\Blueprint
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Prevent direct access.
}

/**
 * Autoloader for automatically loading theme classes
 */
spl_autoload_register(
	function ( $class_name ) {
		// Only handle classes that start with 'Bluehost\Blueprint'.
		if ( strpos( $class_name, 'Bluehost\Blueprint' ) !== 0 ) {
				return;
		}

		// Convert the class name to a relative file path (e.g., 'Bluehost\Blueprint\Utility' -> 'class-utility.php').
		$class_file = strtolower( str_replace( 'Bluehost\Blueprint\\', '', $class_name ) );
		$class_file = strtolower( str_replace( '_', '-', $class_file ) ) . '.php';
		$file       = get_template_directory() . '/inc/classes/class-' . $class_file;

		// If the file exists, include it.
		if ( file_exists( $file ) ) {
			require_once $file;
		}
	}
);
