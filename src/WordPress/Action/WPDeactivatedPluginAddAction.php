<?php
/**
 * WPDeactivatedPluginAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires after a plugin is deactivated.
 *
 * @since 2.9.0
 */
abstract class WPDeactivatedPluginAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'deactivated_plugin';

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
	 * @param bool $network_deactivating Whether the plugin is deactivated for all sites in the network or just the current site. Multisite only. Default false.
	 */
	abstract public function execute( $plugin, $network_deactivating );
}
