<?php
/**
 * WPAdminReferrerPolicyAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the admin referrer policy header value.
 *
 * @since 4.9.0
 * @since 4.9.5 The default value was changed to 'strict-origin-when-cross-origin'.
 *
 * @link  https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Referrer-Policy
 */
abstract class WPAdminReferrerPolicyAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'admin_referrer_policy';

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
	public int $hook_accepted_args = 1;


	/**
	 * The hook execution method
	 *
	 * @param string $policy The admin referrer policy header value. Default 'strict-origin-when-cross-origin'.
	 */
	abstract public function execute( $policy );
}
