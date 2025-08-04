<?php
/**
 * WPDeletedUserAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires immediately after a user is deleted from the site.
 *
 * @since 2.9.0
 * @since 5.5.0 Added the `$user` parameter.
 */
abstract class WPDeletedUserAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'deleted_user';

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
	 * @param int $id ID of the deleted user.
	 * @param int|null $reassign ID of the user to reassign posts and links to. Default null, for no reassignment.
	 * @param \WP_User $user WP_User object of the deleted user.
	 */
	abstract public function execute( $id, $reassign, $user );
}
