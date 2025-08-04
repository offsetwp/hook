<?php
/**
 * WPUserRegisterAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires immediately after a new user is registered.
 *
 * @since 1.5.0
 * @since 5.8.0 The `$userdata` parameter was added.
 */
abstract class WPUserRegisterAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'user_register';

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
	 * @param int $user_id User ID.
	 * @param array $userdata The raw array of data passed to wp_insert_user().
	 */
	abstract public function execute( $user_id, $userdata );
}
