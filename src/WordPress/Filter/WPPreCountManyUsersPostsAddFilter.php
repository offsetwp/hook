<?php
/**
 * WPPreCountManyUsersPostsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether to short-circuit performing the post counts.
 *
 * @since 6.8.0
 */
abstract class WPPreCountManyUsersPostsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pre_count_many_users_posts';

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
	public int $hook_accepted_args = 4;


	/**
	 * The hook execution method
	 *
	 * @param string[]|null $count The post counts. Return a non-null value to short-circuit.
	 * @param int[] $users Array of user IDs.
	 * @param string|string[] $post_type Single post type or array of post types to check.
	 * @param bool $public_only Whether to only return counts for public posts.
	 */
	abstract public function execute( $count, $users, $post_type, $public_only );
}
