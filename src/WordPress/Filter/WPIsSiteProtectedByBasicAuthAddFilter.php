<?php
/**
 * WPIsSiteProtectedByBasicAuthAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether a site is protected by HTTP Basic Auth.
 *
 * @since 5.6.1
 */
abstract class WPIsSiteProtectedByBasicAuthAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_is_site_protected_by_basic_auth';

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
	 * @param bool $is_protected Whether the site is protected by Basic Auth.
	 * @param string $context The context to check for protection. One of 'login', 'admin', or 'front'.
	 */
	abstract public function execute( $is_protected, $context );
}
