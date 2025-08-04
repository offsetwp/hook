<?php
/**
 * WPNotifyPostAuthorAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether to send the post author new comment notification emails, overriding the site setting.
 *
 * @since 4.4.0
 */
abstract class WPNotifyPostAuthorAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'notify_post_author';

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
	 * @param bool $maybe_notify Whether to notify the post author about the new comment.
	 * @param int $comment_id The ID of the comment for the notification.
	 */
	abstract public function execute( $maybe_notify, $comment_id );
}
