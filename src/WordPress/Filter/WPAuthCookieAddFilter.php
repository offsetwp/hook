<?php
/**
 * WPAuthCookieAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the authentication cookie.
 *
 * @since 2.5.0
 * @since 4.0.0 The `$token` parameter was added.
 */
abstract class WPAuthCookieAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'auth_cookie';

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
	public int $hook_accepted_args = 5;


	/**
	 * The hook execution method
	 *
	 * @param string $cookie Authentication cookie.
	 * @param int $user_id User ID.
	 * @param int $expiration The time the cookie expires as a UNIX timestamp.
	 * @param string $scheme Cookie scheme used. Accepts 'auth', 'secure_auth', or 'logged_in'.
	 * @param string $token User's session token used.
	 */
	abstract public function execute( $cookie, $user_id, $expiration, $scheme, $token );
}
