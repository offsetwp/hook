<?php
/**
 * WPGetLastpostdateAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the most recent time that a post on the site was published.
 *
 * @since 2.3.0
 * @since 5.5.0 Added the `$post_type` parameter.
 */
abstract class WPGetLastpostdateAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'get_lastpostdate';

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
	 * @param string|false $lastpostdate The most recent time that a post was published, in 'Y-m-d H:i:s' format. False on failure.
	 * @param string $timezone Location to use for getting the post published date. See get_lastpostdate() for accepted <code>$timezone</code> values.
	 * @param string $post_type The post type to check.
	 */
	abstract public function execute( $lastpostdate, $timezone, $post_type );
}
