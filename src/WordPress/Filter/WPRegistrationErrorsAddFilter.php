<?php
/**
 * WPRegistrationErrorsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the errors encountered when a new user is being registered.
 *
 * @since 2.1.0
 */
abstract class WPRegistrationErrorsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'registration_errors';

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
	 * @param \WP_Error $errors A WP_Error object containing any errors encountered during registration.
	 * @param string $sanitized_user_login User's username after it has been sanitized.
	 * @param string $user_email User's email.
	 */
	abstract public function execute( $errors, $sanitized_user_login, $user_email );
}
