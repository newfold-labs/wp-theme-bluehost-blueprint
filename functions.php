<?php
/**
 * Bluehost Studio functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bluehost\Studio
 * @since 1.0.0
 */

// Include the autoloader.
require_once get_template_directory() . '/inc/autoloader.php';

// Initialize theme assets.
Bluehost\Studio\Assets::init();
