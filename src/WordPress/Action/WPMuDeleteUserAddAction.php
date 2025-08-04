<?php
/**
 * WPMuDeleteUserAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires before a user is deleted from the network.
 *
 * @since MU ( 3.0.0 ) MU ( 3.0.0 )
 * @since 5.5.0 Added the `$user` parameter.
 */
abstract class WPMuDeleteUserAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wpmu_delete_user';

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
	 * @param int $id ID of the user about to be deleted from the network.
	 * @param \WP_User $user WP_User object of the user about to be deleted from the network.
	 */
	abstract public function execute( $id, $user );
}
