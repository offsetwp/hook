<?php
/**
 * WPSavePostRevisionCheckForChangesAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether the post has changed since the latest revision.
 *
 * @since 3.6.0
 */
abstract class WPSavePostRevisionCheckForChangesAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_save_post_revision_check_for_changes';

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
	 * @param bool $check_for_changes Whether to check for changes before saving a new revision. Default true.
	 * @param \WP_Post $latest_revision The latest revision post object.
	 * @param \WP_Post $post The post object.
	 */
	abstract public function execute( $check_for_changes, $latest_revision, $post );
}
