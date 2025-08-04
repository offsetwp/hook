<?php
/**
 * WPUniquePostSlugAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the unique post slug.
 *
 * @since 3.3.0
 */
abstract class WPUniquePostSlugAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_unique_post_slug';

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
	public int $hook_accepted_args = 6;


	/**
	 * The hook execution method
	 *
	 * @param string $slug The post slug.
	 * @param int $post_id Post ID.
	 * @param string $post_status The post status.
	 * @param string $post_type Post type.
	 * @param int $post_parent Post parent ID.
	 * @param string $original_slug The original post slug.
	 */
	abstract public function execute( $slug, $post_id, $post_status, $post_type, $post_parent, $original_slug );
}
