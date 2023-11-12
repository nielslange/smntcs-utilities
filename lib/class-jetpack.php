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
class SMNTCS_Jetpack implements Plugin {

	/**
	 * Initialize the class.
	 *
	 * @return void
	 * @since 1.6.0
	 */
	public function __construct() {
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
	public function is_plugin_active() {
		return class_exists( 'Jetpack' );
	}
}

new SMNTCS_Jetpack();
