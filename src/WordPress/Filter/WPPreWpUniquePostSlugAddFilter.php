<?php
/**
 * WPPreWpUniquePostSlugAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the post slug before it is generated to be unique.
 *
 * @since 5.1.0
 */
abstract class WPPreWpUniquePostSlugAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pre_wp_unique_post_slug';

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
	 * @param string|null $override_slug Short-circuit return value.
	 * @param string $slug The desired slug ( post_name ).
	 * @param int $post_id Post ID.
	 * @param string $post_status The post status.
	 * @param string $post_type Post type.
	 * @param int $post_parent Post parent ID.
	 */
	abstract public function execute( $override_slug, $slug, $post_id, $post_status, $post_type, $post_parent );
}
