<?php
/**
 * WPTheModifiedTimeAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the localized time a post was last modified, for display.
 *
 * @since 2.0.0
 */
abstract class WPTheModifiedTimeAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'the_modified_time';

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
	 * @param string|false $get_the_modified_time The formatted time or false if no post is found.
	 * @param string $format Format to use for retrieving the time the post was modified. Accepts 'G', 'U', or PHP date format.
	 */
	abstract public function execute( $get_the_modified_time, $format );
}
