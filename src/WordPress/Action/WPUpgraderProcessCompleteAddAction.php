<?php
/**
 * WPUpgraderProcessCompleteAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires when the upgrader process is complete.
 *
 * @since 3.6.0
 * @since 3.7.0 Added to WP_Upgrader::run().
 * @since 4.6.0 `$translations` was added as a possible argument to `$hook_extra`.
 */
abstract class WPUpgraderProcessCompleteAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'upgrader_process_complete';

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
	 * @param \WP_Upgrader $upgrader WP_Upgrader instance. In other contexts this might be a Theme_Upgrader, Plugin_Upgrader, Core_Upgrade, or Language_Pack_Upgrader instance.
	 * @param array $hook_extra Array of bulk item update data.
	 */
	abstract public function execute( $upgrader, $hook_extra );
}
