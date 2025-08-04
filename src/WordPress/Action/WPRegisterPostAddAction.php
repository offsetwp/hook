<?php
/**
 * WPRegisterPostAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires when submitting registration form data, before the user is created.
 *
 * @since 2.1.0
 */
abstract class WPRegisterPostAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'register_post';

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
	 * @param string $sanitized_user_login The submitted username after being sanitized.
	 * @param string $user_email The submitted email.
	 * @param \WP_Error $errors Contains any errors with submitted username and email, e.g., an empty field, an invalid username or email, or an existing username or email.
	 */
	abstract public function execute( $sanitized_user_login, $user_email, $errors );
}
