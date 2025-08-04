<?php
/**
 * WPAuthenticateAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether a set of user login credentials are valid.
 *
 * @since 2.8.0
 * @since 4.5.0 `$username` now accepts an email address.
 */
abstract class WPAuthenticateAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'authenticate';

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
	 * @param null|\WP_User|\WP_Error $user WP_User if the user is authenticated. WP_Error or null otherwise.
	 * @param string $username Username or email address.
	 * @param string $password User password.
	 */
	abstract public function execute( $user, $username, $password );
}
