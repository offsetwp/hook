<?php
/**
 * WPSavePostRevisionPostHasChangedAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether a post has changed.
 *
 * @since 4.1.0
 */
abstract class WPSavePostRevisionPostHasChangedAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_save_post_revision_post_has_changed';

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
	 * @param bool $post_has_changed Whether the post has changed.
	 * @param \WP_Post $latest_revision The latest revision post object.
	 * @param \WP_Post $post The post object.
	 */
	abstract public function execute( $post_has_changed, $latest_revision, $post );
}
