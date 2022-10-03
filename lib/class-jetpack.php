<?php
/**
 * Handle Jetpack ads.
 *
 * @package Jetpack
 */

/**
 * Jetpack main class.
 *
 * @since 1.6.0
 */
class Jetpack implements Plugin {

	/**
	 * Initialize the class.
	 *
	 * @return void
	 * @since 1.6.0
	 */
	public static function init() {
		if ( ! self::is_plugin_active() ) {
			return;
		}

		add_filter( 'jetpack_implode_frontend_css', '__return_false', 99 );
		add_filter( 'jetpack_just_in_time_msgs', '__return_false', 99 );
		add_filter( 'jetpack_sharing_counts', '__return_false', 99 );
	}

	/**
	 * Check if Jetpack is active.
	 *
	 * @return bool True if Jetpack is active, false otherwise.
	 * @since 1.6.0
	 */
	public static function is_plugin_active() {
		return class_exists( 'Jetpack' );
	}
}

Jetpack::init();
