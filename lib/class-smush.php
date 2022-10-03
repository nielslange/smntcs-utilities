<?php
/**
 * Handle Smush ads.
 *
 * @package Smush
 */

/**
 * Smush main class.
 *
 * @since 1.6.0
 */
class Smush implements Plugin {

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

		add_action( 'admin_init', array( __class__, 'remove_submenus' ), 999 );
		add_action( 'admin_head', array( __class__, 'remove_ads' ) );
	}

	/**
	 * Check if Smush is active.
	 *
	 * @return bool True if Smush is active, false otherwise.
	 * @since 1.6.0
	 */
	public static function is_plugin_active() {
		return class_exists( 'Smush\Core\Core' );
	}

	/**
	 * Remove upsell ads.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public static function remove_ads() {
		?>
		<style>
			body .wrap .notice.frash-notice { display: none; }
		</style>
		<?php
	}

	/**
	 * Remove submenu(s).
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public static function remove_submenus() {
		remove_submenu_page( 'smush', 'smush-upgrade' );
	}
}

Smush::init();
