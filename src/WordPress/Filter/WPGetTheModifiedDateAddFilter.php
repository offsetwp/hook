<?php
/**
 * WPGetTheModifiedDateAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the date a post was last modified.
 *
 * @since 2.1.0
 * @since 4.6.0 Added the `$post` parameter.
 */
abstract class WPGetTheModifiedDateAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'get_the_modified_date';

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
	 * @param string|int|false $the_time The formatted date or false if no post is found.
	 * @param string $format PHP date format.
	 * @param \WP_Post|null $post WP_Post object or null if no post is found.
	 */
	abstract public function execute( $the_time, $format, $post );
}
