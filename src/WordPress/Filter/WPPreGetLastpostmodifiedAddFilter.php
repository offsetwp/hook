<?php
/**
 * WPPreGetLastpostmodifiedAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Pre-filter the return value of get_lastpostmodified() before the query is run.
 *
 * @since 4.4.0
 */
abstract class WPPreGetLastpostmodifiedAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pre_get_lastpostmodified';

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
	 * @param string|false $lastpostmodified The most recent time that a post was modified, in 'Y-m-d H:i:s' format, or false. Returning anything other than false will short-circuit the function.
	 * @param string $timezone Location to use for getting the post modified date. See get_lastpostdate() for accepted <code>$timezone</code> values.
	 * @param string $post_type The post type to check.
	 */
	abstract public function execute( $lastpostmodified, $timezone, $post_type );
}
