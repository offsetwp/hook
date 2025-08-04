<?php
/**
 * WPTriggerErrorRunAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires when the given function triggers a user-level error/warning/notice/deprecation message.
 *
 * @since 6.4.0
 */
abstract class WPTriggerErrorRunAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_trigger_error_run';

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
	 * @param string $function_name The function that was called.
	 * @param string $message A message explaining what has been done incorrectly.
	 * @param int $error_level The designated error type for this error.
	 */
	abstract public function execute( $function_name, $message, $error_level );
}
