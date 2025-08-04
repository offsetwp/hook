<?php
/**
 * WPRegistrationRedirectAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the registration redirect URL.
 *
 * @since 3.0.0
 * @since 5.9.0 Added the `$errors` parameter.
 */
abstract class WPRegistrationRedirectAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'registration_redirect';

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
	public int $hook_accepted_args = 2;


	/**
	 * The hook execution method
	 *
	 * @param string $registration_redirect The redirect destination URL.
	 * @param int|\WP_Error $errors User id if registration was successful, WP_Error object otherwise.
	 */
	abstract public function execute( $registration_redirect, $errors );
}
