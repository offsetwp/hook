<?php
/**
 * WPLoginRedirectAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the login redirect URL.
 *
 * @since 3.0.0
 */
abstract class WPLoginRedirectAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'login_redirect';

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
	 * @param string $redirect_to The redirect destination URL.
	 * @param string $requested_redirect_to The requested redirect destination URL passed as a parameter.
	 * @param \WP_User|\WP_Error $user WP_User object if login was successful, WP_Error object otherwise.
	 */
	abstract public function execute( $redirect_to, $requested_redirect_to, $user );
}
