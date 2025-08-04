<?php
/**
 * WPDoingItWrongTriggerErrorAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether to trigger an error for _doing_it_wrong() calls.
 *
 * @since 3.1.0
 * @since 5.1.0 Added the $function_name, $message and $version parameters.
 */
abstract class WPDoingItWrongTriggerErrorAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'doing_it_wrong_trigger_error';

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
	public int $hook_accepted_args = 4;


	/**
	 * The hook execution method
	 *
	 * @param bool $trigger Whether to trigger the error for _doing_it_wrong() calls. Default true.
	 * @param string $function_name The function that was called.
	 * @param string $message A message explaining what has been done incorrectly.
	 * @param string $version The version of WordPress where the message was added.
	 */
	abstract public function execute( $trigger, $function_name, $message, $version );
}
