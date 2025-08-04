<?php
/**
 * WPPluginAutoUpdateSettingHtmlAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the HTML of the auto-updates setting for each plugin in the Plugins list table.
 *
 * @since 5.5.0
 */
abstract class WPPluginAutoUpdateSettingHtmlAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'plugin_auto_update_setting_html';

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
	 * @param string $html The HTML of the plugin's auto-update column content, including toggle auto-update action links and time to next update.
	 * @param string $plugin_file Path to the plugin file relative to the plugins directory.
	 * @param array $plugin_data An array of plugin data. See get_plugin_data() and the {@see 'plugin_row_meta'} filter for the list of possible values.
	 */
	abstract public function execute( $html, $plugin_file, $plugin_data );
}
