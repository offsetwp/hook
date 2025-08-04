<?php
/**
 * WPPreAutoUpdateAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires immediately prior to an auto-update.
 *
 * @since 4.4.0
 */
abstract class WPPreAutoUpdateAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pre_auto_update';

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
	 * @param string $type The type of update being checked: 'core', 'theme', 'plugin', or 'translation'.
	 * @param object $item The update offer.
	 * @param string $context The filesystem context ( a path ) against which filesystem access and status should be checked.
	 */
	abstract public function execute( $type, $item, $context );
}
