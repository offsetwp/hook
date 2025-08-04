<?php
/**
 * WPCheckCommentDisallowedListAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires before the comment is tested for disallowed characters or words.
 *
 * @since 5.5.0
 */
abstract class WPCheckCommentDisallowedListAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_check_comment_disallowed_list';

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
	public int $hook_accepted_args = 6;


	/**
	 * The hook execution method
	 *
	 * @param string $author Comment author.
	 * @param string $email Comment author's email.
	 * @param string $url Comment author's URL.
	 * @param string $comment Comment content.
	 * @param string $user_ip Comment author's IP address.
	 * @param string $user_agent Comment author's browser user agent.
	 */
	abstract public function execute( $author, $email, $url, $comment, $user_ip, $user_agent );
}
