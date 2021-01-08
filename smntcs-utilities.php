<?php
/**
 * Plugin Name: SMNTCS Utilities
 * Plugin URI:
 * Description: A collection of custom snippets to unclutter the WordPress dashboard.
 * Author: Niels Lange
 * Author URI: https://nielslange.de/
 * Version: 1.4
 * Requires at least: 3.4
 * Tested up to: 5.6
 * Requires PHP: 5.6
 * Text Domain: smntcs-utilities
 * Domain Path: /languages
 * License: GPL3+
 * License URI: http://www.gnu.org/licenses/gpl.txt
 *
 * @category   Plugin
 * @package    WordPress
 * @subpackage SMNTCS Utilities
 * @author     Niels Lange <info@nielslange.de>
 * @license    http://www.gnu.org/licenses/gpl.txt GNU General Public License version 3
 */

/*******************************************************************************
 *
 * Table of contents
 *
 * All in One WP Migration
 * Jetpack
 * Yoast
 ******************************************************************************/

// Avoid direct plugin access.
if ( ! defined( 'ABSPATH' ) ) {
	die( '¯\_(ツ)_/¯' );
}

/**
 * All in One WP Migration
 *
 * @since 1.0.0
 * @return void
 */
function smntcs_remove_ai1wm_ads() { ?>
	<style>
		.ai1wm-row { margin-right: 0; }
		.ai1wm-right { display: none; }
	</style>
	<?php
}
add_action( 'admin_head', 'smntcs_remove_ai1wm_ads' );

/**
 * Jetpack
 *
 * @since 1.0.0
 */
add_filter( 'jetpack_just_in_time_msgs', '__return_false', 99 );
add_filter( 'jetpack_sharing_counts', '__return_false', 99 );
add_filter( 'jetpack_implode_frontend_css', '__return_false', 99 );

/**
 * Yoast » Remove courses
 *
 * @since 1.0.0
 * @return void
 */
function smntcs_remove_yoast_courses() {
	remove_submenu_page( 'wpseo_dashboard', 'wpseo_courses' );
}
add_action( 'wp_dashboard_setup', 'smntcs_remove_yoast_courses' );

/**
 * Yoast » Remove dashboard
 *
 * @since 1.0.0
 * @return void
 */
function smntcs_remove_yoast_dashboard() {
	remove_meta_box( 'wpseo-dashboard-overview', 'dashboard', 'advanced' );
	remove_meta_box( 'wpseo-dashboard-overview', 'dashboard', 'normal' );
	remove_meta_box( 'wpseo-dashboard-overview', 'dashboard', 'side' );
}
add_action( 'wp_dashboard_setup', 'smntcs_remove_yoast_dashboard' );

/**
 * Yoast » Remove ads
 *
 * @since 1.0.0
 * @return void
 */
function smntcs_remove_yoast_ads() {
	?>
	<style>
		.yoast_bf_sale,
		.yoast_premium_upsell,
		.yoast_premium_upsell_admin_block, 
		body.toplevel_page_wpseo_dashboard #sidebar-container,
		body.seo_page_wpseo_titles #sidebar-container,
		body.seo_page_wpseo_search_console #sidebar-container,
		body.seo_page_wpseo_social #sidebar-container,
		body.seo_page_wpseo_tools #sidebar-container { display: none; }
	</style>
	<?php
}
add_action( 'admin_head', 'smntcs_remove_yoast_ads' );
