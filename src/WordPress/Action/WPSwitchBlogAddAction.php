<?php
/**
 * WPSwitchBlogAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires when the blog is switched.
 *
 * @since MU ( 3.0.0 ) MU ( 3.0.0 )
 * @since 5.4.0 The `$context` parameter was added.
 */
abstract class WPSwitchBlogAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'switch_blog';

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
	 * @param int $new_blog_id New blog ID.
	 * @param int $prev_blog_id Previous blog ID.
	 * @param string $context Additional context. Accepts 'switch' when called from switch_to_blog() or 'restore' when called from restore_current_blog().
	 */
	abstract public function execute( $new_blog_id, $prev_blog_id, $context );
}
