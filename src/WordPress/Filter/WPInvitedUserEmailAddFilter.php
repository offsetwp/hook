<?php
/**
 * WPInvitedUserEmailAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the contents of the email sent when an existing user is invited to join the site.
 *
 * @since 5.6.0
 */
abstract class WPInvitedUserEmailAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'invited_user_email';

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
	 * @param array $new_user_email Used to build wp_mail().
	 * @param int $user_id The invited user's ID.
	 * @param array $role Array containing role information for the invited user.
	 * @param string $newuser_key The key of the invitation.
	 */
	abstract public function execute( $new_user_email, $user_id, $role, $newuser_key );
}
