<?php
/**
 * WPSiteHealthTestRestCapabilityCheckAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the capability needed to run a given Site Health check.
 *
 * @since 5.6.0
 */
abstract class WPSiteHealthTestRestCapabilityCheckAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'site_health_test_rest_capability_{$check}';

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
	 * @param string $default_capability The default capability required for this check.
	 * @param string $check The Site Health check being performed.
	 */
	abstract public function execute( $default_capability, $check );
}
