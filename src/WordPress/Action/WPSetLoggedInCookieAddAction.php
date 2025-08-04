<?php
/**
 * WPSetLoggedInCookieAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires immediately before the logged-in authentication cookie is set.
 *
 * @since 2.6.0
 * @since 4.9.0 The `$token` parameter was added.
 */
abstract class WPSetLoggedInCookieAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'set_logged_in_cookie';

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
	public int $hook_accepted_args = 6;


	/**
	 * The hook execution method
	 *
	 * @param string $logged_in_cookie The logged-in cookie value.
	 * @param int $expire The time the login grace period expires as a UNIX timestamp. Default is 12 hours past the cookie's expiration time.
	 * @param int $expiration The time when the logged-in authentication cookie expires as a UNIX timestamp. Default is 14 days from now.
	 * @param int $user_id User ID.
	 * @param string $scheme Authentication scheme. Default 'logged_in'.
	 * @param string $token User's session token to use for this cookie.
	 */
	abstract public function execute( $logged_in_cookie, $expire, $expiration, $user_id, $scheme, $token );
}
