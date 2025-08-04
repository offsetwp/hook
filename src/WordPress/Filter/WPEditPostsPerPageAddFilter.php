<?php
/**
 * WPEditPostsPerPageAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the number of posts displayed per page when specifically listing "posts".
 *
 * @since 2.8.0
 */
abstract class WPEditPostsPerPageAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'edit_posts_per_page';

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
	 * @param int $posts_per_page Number of posts to be displayed. Default 20.
	 * @param string $post_type The post type.
	 */
	abstract public function execute( $posts_per_page, $post_type );
}
