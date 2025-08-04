<?php
/**
 * WPPasswordChangeNotificationEmailAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the contents of the password change notification email sent to the site admin.
 *
 * @since 4.9.0
 */
abstract class WPPasswordChangeNotificationEmailAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_password_change_notification_email';

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
	 * @param array $wp_password_change_notification_email Used to build wp_mail().
	 * @param \WP_User $user User object for user whose password was changed.
	 * @param string $blogname The site title.
	 */
	abstract public function execute( $wp_password_change_notification_email, $user, $blogname );
}
