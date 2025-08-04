<?php
/**
 * WPPostLockedDialogAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires inside the post locked dialog before the buttons are displayed.
 *
 * @since 3.6.0
 * @since 5.4.0 The $user parameter was added.
 */
abstract class WPPostLockedDialogAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'post_locked_dialog';

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
	 * @param \WP_Post $post Post object.
	 * @param \WP_User $user The user with the lock for the post.
	 */
	abstract public function execute( $post, $user );
}
