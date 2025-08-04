<?php
/**
 * WPDoFeedFeedAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires once the given feed is loaded.
 *
 * @since 2.1.0
 * @since 4.4.0 The `$feed` parameter was added.
 */
abstract class WPDoFeedFeedAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'do_feed_{$feed}';

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
	 * @param bool $is_comment_feed Whether the feed is a comment feed.
	 * @param string $feed The feed name.
	 */
	abstract public function execute( $is_comment_feed, $feed );
}
