<?php
/**
 * WPTrashedCommentAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires immediately after a comment is sent to Trash.
 *
 * @since 2.9.0
 * @since 4.9.0 Added the `$comment` parameter.
 */
abstract class WPTrashedCommentAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'trashed_comment';

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
	 * @param string $comment_id The comment ID as a numeric string.
	 * @param \WP_Comment $comment The trashed comment.
	 */
	abstract public function execute( $comment_id, $comment );
}
