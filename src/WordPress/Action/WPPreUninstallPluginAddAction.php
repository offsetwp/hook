<?php
/**
 * WPPreUninstallPluginAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires in uninstall_plugin() immediately before the plugin is uninstalled.
 *
 * @since 4.5.0
 */
abstract class WPPreUninstallPluginAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pre_uninstall_plugin';

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
	 * @param string $plugin Path to the plugin file relative to the plugins directory.
	 * @param array $uninstallable_plugins Uninstallable plugins.
	 */
	abstract public function execute( $plugin, $uninstallable_plugins );
}
