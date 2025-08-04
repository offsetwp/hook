<?php
/**
 * WPManageCommentsNavAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires after the Filter submit button for comment types.
 *
 * @since 2.5.0
 * @since 5.6.0 The `$which` parameter was added.
 */
abstract class WPManageCommentsNavAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'manage_comments_nav';

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
	 * @param string $comment_status The comment status name. Default 'All'.
	 * @param string $which The location of the extra table nav markup: Either 'top' or 'bottom'.
	 */
	abstract public function execute( $comment_status, $which );
}
