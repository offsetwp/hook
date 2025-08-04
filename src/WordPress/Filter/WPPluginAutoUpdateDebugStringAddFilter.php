<?php
/**
 * WPPluginAutoUpdateDebugStringAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the text string of the auto-updates setting for each plugin in the Site Health debug data.
 *
 * @since 5.5.0
 */
abstract class WPPluginAutoUpdateDebugStringAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'plugin_auto_update_debug_string';

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
	 * @param string $auto_updates_string The string output for the auto-updates column.
	 * @param string $plugin_path The path to the plugin file.
	 * @param array $plugin An array of plugin data.
	 * @param bool $enabled Whether auto-updates are enabled for this item.
	 */
	abstract public function execute( $auto_updates_string, $plugin_path, $plugin, $enabled );
}
