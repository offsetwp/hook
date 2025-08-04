<?php
/**
 * WPNewStatusPostPostTypeAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires when a post is transitioned from one status to another.
 *
 * @since 2.3.0
 * @since 5.9.0 Added `$old_status` parameter.
 */
abstract class WPNewStatusPostPostTypeAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = '{$new_status}_{$post->post_type}';

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
	 * @param int $post_id Post ID.
	 * @param \WP_Post $post Post object.
	 * @param string $old_status Old post status.
	 */
	abstract public function execute( $post_id, $post, $old_status );
}
