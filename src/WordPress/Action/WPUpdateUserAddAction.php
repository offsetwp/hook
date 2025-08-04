<?php
/**
 * WPUpdateUserAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires after the user has been updated and emails have been sent.
 *
 * @since 6.3.0
 */
abstract class WPUpdateUserAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_update_user';

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
	 * @param int $user_id The ID of the user that was just updated.
	 * @param array $userdata The array of user data that was updated.
	 * @param array $userdata_raw The unedited array of user data that was updated.
	 */
	abstract public function execute( $user_id, $userdata, $userdata_raw );
}
