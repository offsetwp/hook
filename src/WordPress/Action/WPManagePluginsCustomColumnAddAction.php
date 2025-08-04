<?php
/**
 * WPManagePluginsCustomColumnAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires inside each custom column of the Plugins list table.
 *
 * @since 3.1.0
 */
abstract class WPManagePluginsCustomColumnAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'manage_plugins_custom_column';

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
	 * @param string $column_name Name of the column.
	 * @param string $plugin_file Path to the plugin file relative to the plugins directory.
	 * @param array $plugin_data An array of plugin data. See get_plugin_data() and the {@see 'plugin_row_meta'} filter for the list of possible values.
	 */
	abstract public function execute( $column_name, $plugin_file, $plugin_data );
}
