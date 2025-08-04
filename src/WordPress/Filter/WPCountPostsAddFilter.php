<?php
/**
 * WPCountPostsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the post counts by status for the current post type.
 *
 * @since 3.7.0
 */
abstract class WPCountPostsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_count_posts';

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
	 * @param \stdClass $counts An object containing the current post_type's post counts by status.
	 * @param string $type Post type.
	 * @param string $perm The permission to determine if the posts are 'readable' by the current user.
	 */
	abstract public function execute( $counts, $type, $perm );
}
