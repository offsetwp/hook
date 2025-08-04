<?php
/**
 * WPProfileUpdateAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires immediately after an existing user is updated.
 *
 * @since 2.0.0
 * @since 5.8.0 The `$userdata` parameter was added.
 */
abstract class WPProfileUpdateAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'profile_update';

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
	 * @param int $user_id User ID.
	 * @param \WP_User $old_user_data Object containing user's data prior to update.
	 * @param array $userdata The raw array of data passed to wp_insert_user().
	 */
	abstract public function execute( $user_id, $old_user_data, $userdata );
}
