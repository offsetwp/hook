<?php
/**
 * WPAuthenticateApplicationPasswordErrorsAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires when an application password has been successfully checked as valid.
 *
 * @since 5.6.0
 */
abstract class WPAuthenticateApplicationPasswordErrorsAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_authenticate_application_password_errors';

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
	 * @param \WP_Error $error The error object.
	 * @param \WP_User $user The user authenticating.
	 * @param array $item The details about the application password.
	 * @param string $password The raw supplied password.
	 */
	abstract public function execute( $error, $user, $item, $password );
}
