<?php
/**
 * WPGetUsernumpostsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the number of posts a user has written.
 *
 * @since 2.7.0
 * @since 4.1.0 Added `$post_type` argument.
 * @since 4.3.1 Added `$public_only` argument.
 */
abstract class WPGetUsernumpostsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'get_usernumposts';

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
	 * @param int $count The user's post count.
	 * @param int $userid User ID.
	 * @param string|array $post_type Single post type or array of post types to count the number of posts for.
	 * @param bool $public_only Whether to limit counted posts to public posts.
	 */
	abstract public function execute( $count, $userid, $post_type, $public_only );
}
