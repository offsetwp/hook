<?php
/**
 * WPSafeRedirectFallbackAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the redirect fallback URL for when the provided redirect is not safe ( local ).
 *
 * @since 4.3.0
 */
abstract class WPSafeRedirectFallbackAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_safe_redirect_fallback';

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
	 * @param string $fallback_url The fallback URL to use by default.
	 * @param int $status The HTTP response status code to use.
	 */
	abstract public function execute( $fallback_url, $status );
}
