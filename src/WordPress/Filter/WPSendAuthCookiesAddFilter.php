<?php
/**
 * WPSendAuthCookiesAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Allows preventing auth cookies from actually being sent to the client.
 *
 * @since 4.7.4
 * @since 6.2.0 The `$expire`, `$expiration`, `$user_id`, `$scheme`, and `$token` parameters were added.
 */
abstract class WPSendAuthCookiesAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'send_auth_cookies';

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
	 * @param bool $send Whether to send auth cookies to the client. Default true.
	 * @param int $expire The time the login grace period expires as a UNIX timestamp. Default is 12 hours past the cookie's expiration time. Zero when clearing cookies.
	 * @param int $expiration The time when the logged-in authentication cookie expires as a UNIX timestamp. Default is 14 days from now. Zero when clearing cookies.
	 * @param int $user_id User ID. Zero when clearing cookies.
	 * @param string $scheme Authentication scheme. Values include 'auth' or 'secure_auth'. Empty string when clearing cookies.
	 * @param string $token User's session token to use for this cookie. Empty string when clearing cookies.
	 */
	abstract public function execute( $send, $expire, $expiration, $user_id, $scheme, $token );
}
