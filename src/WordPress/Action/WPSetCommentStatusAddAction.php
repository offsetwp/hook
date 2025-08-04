<?php
/**
 * WPSetCommentStatusAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires immediately after transitioning a comment's status from one to another in the database and removing the comment from the object cache, but prior to all status transition hooks.
 *
 * @since 1.5.0
 */
abstract class WPSetCommentStatusAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_set_comment_status';

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
	 * @param string $comment_id Comment ID as a numeric string.
	 * @param string $comment_status Current comment status. Possible values include 'hold', '0', 'approve', '1', 'spam', and 'trash'.
	 */
	abstract public function execute( $comment_id, $comment_status );
}
