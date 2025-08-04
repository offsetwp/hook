<?php
/**
 * WPPostUpdatedAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires once an existing post has been updated.
 *
 * @since 3.0.0
 */
abstract class WPPostUpdatedAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'post_updated';

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
	 * @param \WP_Post $post_after Post object following the update.
	 * @param \WP_Post $post_before Post object before the update.
	 */
	abstract public function execute( $post_id, $post_after, $post_before );
}
