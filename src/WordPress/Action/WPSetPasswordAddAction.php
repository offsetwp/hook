<?php
/**
 * WPSetPasswordAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires after the user password is set.
 *
 * @since 6.2.0
 * @since 6.7.0 The `$old_user_data` parameter was added.
 */
abstract class WPSetPasswordAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_set_password';

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
	 * @param string $password The plaintext password just set.
	 * @param int $user_id The ID of the user whose password was just set.
	 * @param \WP_User $old_user_data Object containing user's data prior to update.
	 */
	abstract public function execute( $password, $user_id, $old_user_data );
}
