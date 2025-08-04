<?php
/**
 * WPErrorAddedAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires when an error is added to a WP_Error object.
 *
 * @since 5.6.0
 */
abstract class WPErrorAddedAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_error_added';

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
	 * @param string|int $code Error code.
	 * @param string $message Error message.
	 * @param mixed $data Error data. Might be empty.
	 * @param \WP_Error $wp_error The WP_Error object.
	 */
	abstract public function execute( $code, $message, $data, $wp_error );
}
