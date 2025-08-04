<?php
/**
 * WPDeleteUserFormAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires at the end of the delete users form prior to the confirm button.
 *
 * @since 4.0.0
 * @since 4.5.0 The `$user_ids` parameter was added.
 */
abstract class WPDeleteUserFormAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'delete_user_form';

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
	 * @param \WP_User $current_user WP_User object for the current user.
	 * @param int[] $user_ids Array of IDs for users being deleted.
	 */
	abstract public function execute( $current_user, $user_ids );
}
