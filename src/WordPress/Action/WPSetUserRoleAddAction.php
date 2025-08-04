<?php
/**
 * WPSetUserRoleAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires after the user's role has changed.
 *
 * @since 2.9.0
 * @since 3.6.0 Added $old_roles to include an array of the user's previous roles.
 */
abstract class WPSetUserRoleAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'set_user_role';

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
	 * @param int $user_id The user ID.
	 * @param string $role The new role.
	 * @param string[] $old_roles An array of the user's previous roles.
	 */
	abstract public function execute( $user_id, $role, $old_roles );
}
