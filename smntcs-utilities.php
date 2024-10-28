<?php
/**
 * Plugin Name:           SMNTCS Utilities
 * Plugin URI:            https://github.com/nielslange/smntcs-utilities
 * Description:           A collection of custom snippets to unclutter the WordPress dashboard.
 * Author:                Niels Lange
 * Author URI:            https://nielslange.de
 * Text Domain:           smntcs-utilities
 * Version:               2.1
 * Requires PHP:          5.6
 * Requires at least:     4.6
 * License:               GPL v2 or later
 * License URI:           https://www.gnu.org/licenses/gpl-2.0.html
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
	public function __construct() {
		add_action( 'admin_init', array( $this, 'remove_ai1wm_ads' ) );
		add_action( 'admin_init', array( $this, 'remove_elementor_ads' ) );
		add_action( 'admin_init', array( $this, 'remove_jetpack_ads' ) );
		add_action( 'admin_init', array( $this, 'remove_smush_ads' ) );
		add_action( 'admin_init', array( $this, 'remove_yoast_ads' ) );
	}

	/**
	 * Remove the All-in-One WP Migration ads.
	 *
	 * @link https://wordpress.org/plugins/all-in-one-wp-migration/
	 * @return void
	 * @since 1.6
	 */
	public function remove_ai1wm_ads() {
		require_once 'lib/class-all-in-one-wp-migration.php';
	}

	/**
	 * Remove the Elementor ads.
	 *
	 * @link https://wordpress.org/plugins/elementor/
	 * @return void
	 * @since 1.6
	 */
	public function remove_elementor_ads() {
		require_once 'lib/class-elementor.php';
	}

	/**
	 * Remove the Jetpack ads.
	 *
	 * @link https://wordpress.org/plugins/jetpack/
	 * @return void
	 * @since 1.6
	 */
	public function remove_jetpack_ads() {
		require_once 'lib/class-jetpack.php';
	}

	/**
	 * Remove the Smush ads.
	 *
	 * @link https://wordpress.org/plugins/wp-smushit/
	 * @return void
	 * @since 1.6
	 */
	public function remove_smush_ads() {
		require_once 'lib/class-smush.php';
	}

	/**
	 * Remove the Yoast ads.
	 *
	 * @link https://wordpress.org/plugins/wordpress-seo/
	 * @return void
	 * @since 1.6
	 */
	public function remove_yoast_ads() {
		require_once 'lib/class-yoast.php';
	}
}

new SMNTCS_Utilities();
