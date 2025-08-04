<?php
/**
 * WPPluginRowMetaAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the array of row meta for each plugin in the Plugins list table.
 *
 * @since 2.8.0
 */
abstract class WPPluginRowMetaAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'plugin_row_meta';

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
	 * @param string[] $plugin_meta An array of the plugin's metadata, including the version, author, author URI, and plugin URI.
	 * @param string $plugin_file Path to the plugin file relative to the plugins directory.
	 * @param array $plugin_data An array of plugin data.
	 * @param string $status Status filter currently applied to the plugin list. Possible values are: 'all', 'active', 'inactive', 'recently_activated', 'upgrade', 'mustuse', 'dropins', 'search', 'paused', 'auto-update-enabled', 'auto-update-disabled'.
	 */
	abstract public function execute( $plugin_meta, $plugin_file, $plugin_data, $status );
}
