<?php
/**
 * Handle Plugin interface.
 *
 * @package Plugin
 */

/**
 * Plugin main class.
 *
 * @since 1.6.0
 */
interface Plugin {

	/**
	 * Initialize the class.
	 *
	 * @return void
	 * @since 1.6.0
	 */
	public function __construct();

	/**
	 * Check if plugin is active.
	 *
	 * @return bool True if plugin is active, false otherwise.
	 * @since 1.6.0
	 */
	public function is_plugin_active();
}
