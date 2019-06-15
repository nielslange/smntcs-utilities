<?php
/**
 * Plugin Name: SMNTCS Utilities
 * Plugin URI:
 * Description: 🔧 A collection of custom snippets to unclutter the WordPress dashboard.
 * Author: Niels Lange
 * Author URI: https://nielslange.de/
 * Version: 1.0
 * Text Domain: smntcs-utilities
 * Domain Path: /languages
 *
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package SMNTCS
 */

 /*
  * Table of contents
	*
	* All in One WP Migration
	* Jetpack
	* Yoast
  */

// Avoid direct plugin access.
if ( ! defined( 'ABSPATH' ) ) {
	die( '¯\_(ツ)_/¯' );
}

// All in One WP Migration
add_action( 'admin_head', 'smntcs_remove_ai1wm_ads' );
function smntcs_remove_ai1wm_ads() { ?>
	<style>
		.ai1wm-row { margin-right: 0; }
		.ai1wm-right { display: none; }
  </style>
<?php }

// Jetpack
add_filter( 'jetpack_just_in_time_msgs', '__return_false', 99 );
add_filter( 'jetpack_sharing_counts', '__return_false', 99 );
add_filter( 'jetpack_implode_frontend_css', '__return_false', 99 );

// Yoast
remove_submenu_page( 'wpseo_dashboard', 'wpseo_courses' );
remove_meta_box( 'wpseo-dashboard-overview', 'dashboard', 'side' );
