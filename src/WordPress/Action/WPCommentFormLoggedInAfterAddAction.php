<?php
/**
 * WPCommentFormLoggedInAfterAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires after the is_user_logged_in() check in the comment form.
 *
 * @since 3.0.0
 */
abstract class WPCommentFormLoggedInAfterAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'comment_form_logged_in_after';

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
	 * @param array $commenter An array containing the comment author's username, email, and URL.
	 * @param string $user_identity If the commenter is a registered user, the display name, blank otherwise.
	 */
	abstract public function execute( $commenter, $user_identity );
}
