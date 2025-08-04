<?php
/**
 * WPUntrashPostStatusAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the status that a post gets assigned when it is restored from the trash ( untrashed ).
 *
 * @since 5.6.0
 */
abstract class WPUntrashPostStatusAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_untrash_post_status';

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
	 * @param string $new_status The new status of the post being restored.
	 * @param int $post_id The ID of the post being restored.
	 * @param string $previous_status The status of the post at the point where it was trashed.
	 */
	abstract public function execute( $new_status, $post_id, $previous_status );
}
