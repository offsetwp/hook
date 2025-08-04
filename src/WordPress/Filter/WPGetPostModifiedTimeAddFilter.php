<?php
/**
 * WPGetPostModifiedTimeAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the localized time a post was last modified.
 *
 * @since 2.8.0
 */
abstract class WPGetPostModifiedTimeAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'get_post_modified_time';

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
	 * @param string|int $time Formatted date string or Unix timestamp if <code>$format</code> is 'U' or 'G'.
	 * @param string $format Format to use for retrieving the time the post was modified. Accepts 'G', 'U', or PHP date format. Default 'U'.
	 * @param bool $gmt Whether to retrieve the GMT time. Default false.
	 */
	abstract public function execute( $time, $format, $gmt );
}
