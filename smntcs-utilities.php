<?php
/**
 * Plugin Name:       SMNTCS Utilities
 * Plugin URI:
 * Description:       A collection of custom snippets to unclutter the WordPress dashboard.
 * Author:            Niels Lange
 * Author URI:        https://nielslange.com/
 * Text Domain:       smntcs-utilities
 * Version:           1.5
 * Tested up to:      5.8
 * Requires at least: 3.4
 * Requires PHP:      7.0
 * License:           GPLv2
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 *
 * @package SMNTCS_Utilities
 */

defined( 'ABSPATH' ) || exit;

require_once 'lib/class-plugin.php';

/**
 * SMNTCS_Utilities main class.
 *
 * @since 1.6
 */
class SMNTCS_Utilities {

	/**
	 * Initialize the plugin.
	 *
	 * @return void
	 * @since 1.6
	 */
	public static function init() {
		add_action( 'admin_init', array( __class__, 'remove_ai1wm_ads' ) );
		add_action( 'admin_init', array( __class__, 'remove_elementor_ads' ) );
		add_action( 'admin_init', array( __class__, 'remove_jetpack_ads' ) );
		add_action( 'admin_init', array( __class__, 'remove_yoast_ads' ) );
	}

	/**
	 * Remove the All-in-One WP Migration ads.
	 *
	 * @return void
	 * @since 1.6
	 */
	public static function remove_ai1wm_ads() {
		require_once 'lib/class-all-in-one-wp-migration.php';
	}

	/**
	 * Remove the Jetpack ads.
	 *
	 * @return void
	 * @since 1.6
	 */
	public static function remove_jetpack_ads() {
		require_once 'lib/class-jetpack.php';
	}

	/**
	 * Remove the Elementor ads.
	 *
	 * @return void
	 * @since 1.6
	 */
	public static function remove_elementor_ads() {
		require_once 'lib/class-elementor.php';
	}

	/**
	 * Remove the Yoast ads.
	 *
	 * @return void
	 * @since 1.6
	 */
	public static function remove_yoast_ads() {
		require_once 'lib/class-yoast.php';
	}
}

SMNTCS_Utilities::init();
