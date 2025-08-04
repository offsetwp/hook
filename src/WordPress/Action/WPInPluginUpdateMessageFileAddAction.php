<?php
/**
 * WPInPluginUpdateMessageFileAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires at the end of the update message container in each row of the plugins list table.
 *
 * @since 2.8.0
 */
abstract class WPInPluginUpdateMessageFileAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'in_plugin_update_message-{$file}';

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
	public int $hook_accepted_args = 2;


	/**
	 * The hook execution method
	 *
	 * @param array $plugin_data An array of plugin metadata. See get_plugin_data() and the {@see 'plugin_row_meta'} filter for the list of possible values.
	 * @param array $response An object of metadata about the available plugin update.
	 */
	abstract public function execute( $plugin_data, $response );
}
