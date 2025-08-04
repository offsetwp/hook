<?php
/**
 * WPSendPasswordChangeEmailAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether to send the password change email.
 *
 * @since 4.3.0
 *
 * @see wp_insert_user() For `$user` and `$userdata` fields.
 */
abstract class WPSendPasswordChangeEmailAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'send_password_change_email';

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
	 * @param bool $send Whether to send the email.
	 * @param array $user The original user array.
	 * @param array $userdata The updated user array.
	 */
	abstract public function execute( $send, $user, $userdata );
}
