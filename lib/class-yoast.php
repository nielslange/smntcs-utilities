<?php
/**
 * Handle Yoast ads.
 *
 * @package Yoast
 */

/**
 * Yoast main class.
 *
 * @since 1.6.0
 */
class Yoast implements Plugin {

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

		add_action( 'admin_init', array( __class__, 'remove_submenus' ), 9999 );
		add_action( 'admin_head', array( __class__, 'remove_ads' ) );
		add_action( 'wp_dashboard_setup', array( __class__, 'remove_dashboard' ) );
	}

	/**
	 * Check if Yoast is active.
	 *
	 * @return bool True if Yoast is active, false otherwise.
	 * @since 1.6.0
	 */
	public static function is_plugin_active() {
		return class_exists( 'WPSEO_Admin' );
	}

	/**
	 * Remove submenu(s).
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public static function remove_submenus() {
		remove_submenu_page( 'wpseo_dashboard', 'wpseo_courses' );
		remove_submenu_page( 'wpseo_dashboard', 'wpseo_licenses' );
		remove_submenu_page( 'wpseo_dashboard', 'wpseo_redirects' );
		remove_submenu_page( 'wpseo_dashboard', 'wpseo_workouts' );

	}

	/**
	 * Remove dashboard widget(s).
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public static function remove_dashboard() {
		remove_meta_box( 'wpseo-dashboard-overview', 'dashboard', 'advanced' );
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
			.yoast_bf_sale,
			.yoast_premium_upsell,
			.yoast_premium_upsell_admin_block,
			body.toplevel_page_wpseo_dashboard #sidebar-container,
			body.seo_page_wpseo_titles #sidebar-container,
			body.seo_page_wpseo_search_console #sidebar-container,
			body.seo_page_wpseo_social #sidebar-container,
			body.seo_page_wpseo_tools #sidebar-container { display: none; }

			.wpseo_content_wrapper .paper.tab-block.search-appearance { max-width: 100%; }
		</style>
		<?php
	}
}

Yoast::init();
