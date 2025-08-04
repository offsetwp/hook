<?php
/**
 * WPLogQueryCustomDataAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the custom data to log alongside a query.
 *
 * @since 5.3.0
 */
abstract class WPLogQueryCustomDataAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'log_query_custom_data';

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
	public int $hook_accepted_args = 5;


	/**
	 * The hook execution method
	 *
	 * @param array $query_data Custom query data.
	 * @param string $query The query's SQL.
	 * @param float $query_time Total time spent on the query, in seconds.
	 * @param string $query_callstack Comma-separated list of the calling functions.
	 * @param float $query_start Unix timestamp of the time at the start of the query.
	 */
	abstract public function execute( $query_data, $query, $query_time, $query_callstack, $query_start );
}
