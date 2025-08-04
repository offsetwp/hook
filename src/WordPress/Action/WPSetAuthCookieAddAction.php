<?php
/**
 * WPSetAuthCookieAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires immediately before the authentication cookie is set.
 *
 * @since 2.5.0
 * @since 4.9.0 The `$token` parameter was added.
 */
abstract class WPSetAuthCookieAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'set_auth_cookie';

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
	 * @param string $auth_cookie Authentication cookie value.
	 * @param int $expire The time the login grace period expires as a UNIX timestamp. Default is 12 hours past the cookie's expiration time.
	 * @param int $expiration The time when the authentication cookie expires as a UNIX timestamp. Default is 14 days from now.
	 * @param int $user_id User ID.
	 * @param string $scheme Authentication scheme. Values include 'auth' or 'secure_auth'.
	 * @param string $token User's session token to use for this cookie.
	 */
	abstract public function execute( $auth_cookie, $expire, $expiration, $user_id, $scheme, $token );
}
