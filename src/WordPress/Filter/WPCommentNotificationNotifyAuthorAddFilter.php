<?php
/**
 * WPCommentNotificationNotifyAuthorAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether to notify comment authors of their comments on their own posts.
 *
 * @since 3.8.0
 */
abstract class WPCommentNotificationNotifyAuthorAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'comment_notification_notify_author';

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
	 * @param bool $notify Whether to notify the post author of their own comment. Default false.
	 * @param string $comment_id The comment ID as a numeric string.
	 */
	abstract public function execute( $notify, $comment_id );
}
