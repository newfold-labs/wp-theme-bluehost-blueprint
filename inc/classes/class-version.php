<?php
/**
 * Version.php
 *
 * Handles theme versioning and database migrations.
 *
 * @package Bluehost\Blueprint
 * @author  Bluehost
 * @since   1.0.0
 */

namespace Bluehost\Blueprint;

/**
 * Class Version
 *
 * Handles theme versioning and database migrations.
 *
 * @since 1.0.0
 */
class Version {
	/**
	 * Option key for storing the theme version in the database.
	 *
	 * @since 1.0.0
	 */
	const OPTION_KEY = 'bluehost_blueprint_theme_version';

	/**
	 * Initializes version checks and migrations.
	 *
	 * @since 1.0.0
	 */
	public static function init() {
		add_action( 'after_setup_theme', array( __CLASS__, 'check_version' ) );
	}

	/**
	 * Checks if the theme version has changed and runs migrations if needed.
	 *
	 * @since 1.0.0
	 */
	public static function check_version() {
		$theme_version  = wp_get_theme()->get( 'Version' );
		$stored_version = get_option( self::OPTION_KEY, '1.0.0' );

		if ( version_compare( $theme_version, $stored_version, '>' ) ) {
			self::run_migrations( $stored_version, $theme_version );
			update_option( self::OPTION_KEY, $theme_version );
		}
	}

	/**
	 * Runs necessary migrations based on the old and new theme versions.
	 *
	 * @param string $old_version The previously stored version.
	 * @param string $new_version The new theme version.
	 *
	 * @since 1.0.0
	 */
	private static function run_migrations( $old_version, $new_version ) {
		/**
		 * Array of migrations to run.
		 * key is the old version, value is the migration function.
		 *
		 * Example:
		 * $migrations = array(
		 * '1.1.0' => 'migrate_to_1_1_0',
		 * );
		 */
		$migrations = array();

		foreach ( $migrations as $version => $migration ) {
			if ( version_compare( $old_version, $version, '<' ) && version_compare( $new_version, $version, '>=' ) ) {
				// Ensure migration function exists before calling.
				if ( method_exists( __CLASS__, $migration ) ) {
					call_user_func( array( __CLASS__, $migration ) );
				} else {
					// phpcs:ignore WordPress.PHP.DevelopmentFunctions.error_log_error_log
					error_log( "Migration method {$migration} does not exist in " . __CLASS__ );
				}
			}
		}
	}

	/**
	 * Example migration function for version 1.1.0.
	 *
	 * @since 1.1.0
	 */
	private static function migrate_to_1_1_0() {
		// Example: Adding a new option to the database.
		if ( ! get_option( 'bluehost_blueprint_new_option' ) ) {
			update_option( 'bluehost_blueprint_new_option', 'value' );
		}
	}
}
