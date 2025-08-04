<?php
/**
 * WPDoingItWrongRunAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires when the given function is being used incorrectly.
 *
 * @since 3.1.0
 */
abstract class WPDoingItWrongRunAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'doing_it_wrong_run';

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
	 * @param string $version The version of WordPress where the message was added.
	 */
	abstract public function execute( $function_name, $message, $version );
}
