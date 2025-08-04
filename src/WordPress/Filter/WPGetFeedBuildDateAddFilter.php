<?php
/**
 * WPGetFeedBuildDateAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the date the last post or comment in the query was modified.
 *
 * @since 5.2.0
 */
abstract class WPGetFeedBuildDateAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'get_feed_build_date';

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
	 * @param string|false $max_modified_time Date the last post or comment was modified in the query, in UTC. False on failure.
	 * @param string $format The date format requested in get_feed_build_date().
	 */
	abstract public function execute( $max_modified_time, $format );
}
