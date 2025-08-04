<?php
/**
 * WPRetrievePasswordMessageAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the message body of the password reset mail.
 *
 * @since 2.8.0
 * @since 4.1.0 Added `$user_login` and `$user_data` parameters.
 */
abstract class WPRetrievePasswordMessageAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'retrieve_password_message';

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
	 * @param string $message Email message.
	 * @param string $key The activation key.
	 * @param string $user_login The username for the user.
	 * @param \WP_User $user_data WP_User object.
	 */
	abstract public function execute( $message, $key, $user_login, $user_data );
}
