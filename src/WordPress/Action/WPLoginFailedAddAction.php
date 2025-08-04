<?php
/**
 * WPLoginFailedAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires after a user login has failed.
 *
 * @since 2.5.0
 * @since 4.5.0 The value of `$username` can now be an email address.
 * @since 5.4.0 The `$error` parameter was added.
 */
abstract class WPLoginFailedAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_login_failed';

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
	 * @param string $username Username or email address.
	 * @param \WP_Error $error A WP_Error object with the authentication failure details.
	 */
	abstract public function execute( $username, $error );
}
