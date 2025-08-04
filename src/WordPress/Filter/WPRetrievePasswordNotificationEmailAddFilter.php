<?php
/**
 * WPRetrievePasswordNotificationEmailAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the contents of the reset password notification email sent to the user.
 *
 * @since 6.0.0
 */
abstract class WPRetrievePasswordNotificationEmailAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'retrieve_password_notification_email';

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
	 * @param array $defaults The default notification email arguments. Used to build wp_mail().
	 * @param string $key The activation key.
	 * @param string $user_login The username for the user.
	 * @param \WP_User $user_data WP_User object.
	 */
	abstract public function execute( $defaults, $key, $user_login, $user_data );
}
