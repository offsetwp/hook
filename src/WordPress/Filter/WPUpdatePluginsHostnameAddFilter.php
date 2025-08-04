<?php
/**
 * WPUpdatePluginsHostnameAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the update response for a given plugin hostname.
 *
 * @since 5.8.0
 */
abstract class WPUpdatePluginsHostnameAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'update_plugins_{$hostname}';

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
	 * @param array $update The plugin update data with the latest details. Default false.
	 * @param array $plugin_data Plugin headers.
	 * @param string $plugin_file Plugin filename.
	 * @param string[] $locales Installed locales to look up translations for.
	 */
	abstract public function execute( $update, $plugin_data, $plugin_file, $locales );
}
