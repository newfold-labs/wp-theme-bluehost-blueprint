<?php
/**
 * Bluehost Blueprint functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bluehost\Blueprint
 * @since 1.0.0
 */

// Include the autoloader.
require_once get_template_directory() . '/inc/autoloader.php';

// Initialize theme assets.
Bluehost\Blueprint\Assets::init();

// Initialize theme back-compat class.
Bluehost\Blueprint\Back_Compat::init();

// Initialize the version control system.
Bluehost\Blueprint\Version::init();
