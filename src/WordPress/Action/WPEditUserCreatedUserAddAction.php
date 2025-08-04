<?php
/**
 * WPEditUserCreatedUserAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires after a new user has been created.
 *
 * @since 4.4.0
 */
abstract class WPEditUserCreatedUserAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'edit_user_created_user';

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
	 * @param int|\WP_Error $user_id ID of the newly created user or WP_Error on failure.
	 * @param string $notify Type of notification that should happen. See wp_send_new_user_notifications() for more information.
	 */
	abstract public function execute( $user_id, $notify );
}
