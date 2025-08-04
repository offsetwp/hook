<?php
/**
 * WPCommentFormLoggedInAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the 'logged in' message for the comment form for display.
 *
 * @since 3.0.0
 */
abstract class WPCommentFormLoggedInAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'comment_form_logged_in';

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
	 * @param string $args_logged_in The HTML for the 'logged in as [user]' message, the Edit profile link, and the Log out link.
	 * @param array $commenter An array containing the comment author's username, email, and URL.
	 * @param string $user_identity If the commenter is a registered user, the display name, blank otherwise.
	 */
	abstract public function execute( $args_logged_in, $commenter, $user_identity );
}
