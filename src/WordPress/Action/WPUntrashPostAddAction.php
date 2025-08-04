<?php
/**
 * WPUntrashPostAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires before a post is restored from the Trash.
 *
 * @since 2.9.0
 * @since 5.6.0 Added the `$previous_status` parameter.
 */
abstract class WPUntrashPostAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'untrash_post';

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
	 * @param int $post_id Post ID.
	 * @param string $previous_status The status of the post at the point where it was trashed.
	 */
	abstract public function execute( $post_id, $previous_status );
}
