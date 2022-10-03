<?php
/**
 * Handle Elementor ads.
 *
 * @package Elementor
 */

/**
 * Elementor main class.
 *
 * @since 1.6.0
 */
class Elementor implements Plugin {

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
		add_action( 'wp_dashboard_setup', array( __class__, 'remove_dashboard' ) );
		
	}

	/**
	 * Check if Elementor is active.
	 *
	 * @return bool True if Elementor is active, false otherwise.
	 * @since 1.6.0
	 */
	public static function is_plugin_active() {
		return class_exists( 'Elementor' );
	}

	/**
	 * Remove dashboard widget(s).
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public static function remove_dashboard() {
		remove_meta_box( 'e-dashboard-overview', 'dashboard', 'normal' );
	}

	/**
	 * Remove submenu(s).
	 *
	 * @since 1.0.0
	 * @return void
	 */ 
	public static function remove_submenus() {
		remove_submenu_page( 'elementor', 'go_elementor_pro' );
	}	
}

Elementor::init();
