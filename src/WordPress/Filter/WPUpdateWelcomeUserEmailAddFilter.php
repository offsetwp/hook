<?php
/**
 * WPUpdateWelcomeUserEmailAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the content of the welcome email after user activation.
 *
 * @since MU ( 3.0.0 ) MU ( 3.0.0 )
 */
abstract class WPUpdateWelcomeUserEmailAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'update_welcome_user_email';

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
	 * @param string $welcome_email The message body of the account activation success email.
	 * @param int $user_id User ID.
	 * @param string $password User password.
	 * @param array $meta Signup meta data. Default empty array.
	 */
	abstract public function execute( $welcome_email, $user_id, $password, $meta );
}
