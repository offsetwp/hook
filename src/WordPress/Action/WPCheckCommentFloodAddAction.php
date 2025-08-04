<?php
/**
 * WPCheckCommentFloodAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires immediately before a comment is marked approved.
 *
 * @since 2.3.0
 * @since 4.7.0 The `$avoid_die` parameter was added.
 * @since 5.5.0 The `$avoid_die` parameter was renamed to `$wp_error`.
 */
abstract class WPCheckCommentFloodAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'check_comment_flood';

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
	public int $hook_accepted_args = 4;


	/**
	 * The hook execution method
	 *
	 * @param string $comment_author_ip Comment author's IP address.
	 * @param string $comment_author_email Comment author's email.
	 * @param string $comment_date_gmt GMT date the comment was posted.
	 * @param bool $wp_error Whether to return a WP_Error object instead of executing wp_die() or die() if a comment flood is occurring.
	 */
	abstract public function execute( $comment_author_ip, $comment_author_email, $comment_date_gmt, $wp_error );
}
