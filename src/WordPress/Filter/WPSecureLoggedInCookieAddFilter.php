<?php
/**
 * WPSecureLoggedInCookieAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether the logged in cookie should only be sent over HTTPS.
 *
 * @since 3.1.0
 */
abstract class WPSecureLoggedInCookieAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'secure_logged_in_cookie';

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
	 * @param bool $secure_logged_in_cookie Whether the logged in cookie should only be sent over HTTPS.
	 * @param int $user_id User ID.
	 * @param bool $secure Whether the auth cookie should only be sent over HTTPS.
	 */
	abstract public function execute( $secure_logged_in_cookie, $user_id, $secure );
}
