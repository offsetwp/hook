<?php
/**
 * WPSiteStatusTestsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters which site status tests are run on a site.
 *
 * @since 5.2.0
 * @since 5.6.0 Added the `async_direct_test` array key for asynchronous tests. Added the `skip_cron` array key for all tests.
 */
abstract class WPSiteStatusTestsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'site_status_tests';

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
	 * @param array $tests An associative array of direct and asynchronous tests.
	 */
	abstract public function execute( $tests );
}
