<?php
/**
 * Handle All-in-One WP Migration ads.
 *
 * @package All_in_One_WP_Migration
 */

/**
 * All_In_One_WP_Migration main class.
 *
 * @since 1.6.0
 */
class SMNTCS_All_In_One_WP_Migration implements Plugin {

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

		add_action( 'admin_head', array( $this, 'remove_ai1wm_sidebar_ads' ) );
	}

	/**
	 * Check if ai1wm is active.
	 *
	 * @return bool True if ai1wm is active, false otherwise.
	 * @since 1.6.0
	 */
	public function is_plugin_active() {
		return class_exists( 'Ai1wm_Main_Controller' );
	}

	/**
	 * Remove the ai1wm sidebar ads.
	 *
	 * @return void
	 * @since 1.0.0
	 */
	public function remove_ai1wm_sidebar_ads() {
		?>
		<style>
			.ai1wm-row { margin-right: 0; }
			.ai1wm-right { display: none; }
		</style>
		<?php
	}
}

new SMNTCS_All_in_One_WP_Migration();
