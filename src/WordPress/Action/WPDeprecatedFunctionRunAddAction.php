<?php
/**
 * WPDeprecatedFunctionRunAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires when a deprecated function is called.
 *
 * @since 2.5.0
 */
abstract class WPDeprecatedFunctionRunAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'deprecated_function_run';

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
	 * @param string $replacement The function that should have been called.
	 * @param string $version The version of WordPress that deprecated the function.
	 */
	abstract public function execute( $function_name, $replacement, $version );
}
