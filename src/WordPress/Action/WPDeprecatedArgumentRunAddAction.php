<?php
/**
 * WPDeprecatedArgumentRunAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires when a deprecated argument is called.
 *
 * @since 3.0.0
 */
abstract class WPDeprecatedArgumentRunAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'deprecated_argument_run';

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
	 * @param string $message A message regarding the change.
	 * @param string $version The version of WordPress that deprecated the argument used.
	 */
	abstract public function execute( $function_name, $message, $version );
}
