<?php
/**
 * WPUpdateApplicationPasswordAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires when an application password is updated.
 *
 * @since 5.6.0
 * @since 6.8.0 The password is now hashed using wp_fast_hash() instead of phpass. Existing passwords may still be hashed using phpass.
 */
abstract class WPUpdateApplicationPasswordAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_update_application_password';

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
	 * @param array $item The updated application password details.
	 * @param array $update The information to update.
	 */
	abstract public function execute( $user_id, $item, $update );
}
