<?php
/**
 * WPNetworkAdminPluginActionLinksPluginFileAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the list of action links displayed for a specific plugin in the Network Admin Plugins list table.
 *
 * @since 3.1.0
 */
abstract class WPNetworkAdminPluginActionLinksPluginFileAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'network_admin_plugin_action_links_{$plugin_file}';

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
	public int $hook_accepted_args = 4;


	/**
	 * The hook execution method
	 *
	 * @param string[] $actions An array of plugin action links. By default this can include 'activate', 'deactivate', and 'delete'.
	 * @param string $plugin_file Path to the plugin file relative to the plugins directory.
	 * @param array $plugin_data An array of plugin data. See get_plugin_data() and the {@see 'plugin_row_meta'} filter for the list of possible values.
	 * @param string $context The plugin context. By default this can include 'all', 'active', 'inactive', 'recently_activated', 'upgrade', 'mustuse', 'dropins', and 'search'.
	 */
	abstract public function execute( $actions, $plugin_file, $plugin_data, $context );
}
