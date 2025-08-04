<?php
/**
 * WPAfterPluginRowAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires after each row in the Plugins list table.
 *
 * @since 2.3.0
 * @since 5.5.0 Added 'auto-update-enabled' and 'auto-update-disabled' to possible values for `$status`.
 */
abstract class WPAfterPluginRowAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'after_plugin_row';

	/**
	 * The callback to be run when the action is called.
	 *
	 * @var string
	 */
	public int $hook_priority = 10;

	/**
	 * Optional. Used to specify the order in which the functions associated with a particular action are executed. Lower numbers correspond with earlier execution, and functions with the same priority are executed in the order in which they were added to the action. Default 10.
	 *
	 * @var string
	 */
	public int $hook_accepted_args = 3;


	/**
	 * The hook execution method
	 *
	 * @param string $plugin_file Path to the plugin file relative to the plugins directory.
	 * @param array $plugin_data An array of plugin data. See get_plugin_data() and the {@see 'plugin_row_meta'} filter for the list of possible values.
	 * @param string $status Status filter currently applied to the plugin list. Possible values are: 'all', 'active', 'inactive', 'recently_activated', 'upgrade', 'mustuse', 'dropins', 'search', 'paused', 'auto-update-enabled', 'auto-update-disabled'.
	 */
	abstract public function execute( $plugin_file, $plugin_data, $status );
}
