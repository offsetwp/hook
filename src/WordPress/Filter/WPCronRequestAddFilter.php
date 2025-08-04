<?php
/**
 * WPCronRequestAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the cron request arguments.
 *
 * @since 3.5.0
 * @since 4.5.0 The `$doing_wp_cron` parameter was added.
 */
abstract class WPCronRequestAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'cron_request';

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
	 * @param array $cron_request_array An array of cron request URL arguments.
	 * @param string $doing_wp_cron The Unix timestamp ( UTC ) of the cron lock.
	 */
	abstract public function execute( $cron_request_array, $doing_wp_cron );
}
