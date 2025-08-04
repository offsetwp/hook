<?php
/**
 * WPCommentReplyToUnapprovedCommentAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires when a comment reply is attempted to an unapproved comment.
 *
 * @since 6.2.0
 */
abstract class WPCommentReplyToUnapprovedCommentAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'comment_reply_to_unapproved_comment';

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
	 * @param int $comment_post_id Post ID.
	 * @param int $comment_parent Parent comment ID.
	 */
	abstract public function execute( $comment_post_id, $comment_parent );
}
