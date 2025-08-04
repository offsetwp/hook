<?php
/**
 * WPTransitionCommentStatusAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires when the comment status is in transition.
 *
 * @since 2.7.0
 */
abstract class WPTransitionCommentStatusAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'transition_comment_status';

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
	 * @param string $new_status The new comment status.
	 * @param string $old_status The old comment status.
	 * @param \WP_Comment $comment Comment object.
	 */
	abstract public function execute( $new_status, $old_status, $comment );
}
