<?php
/**
 * WPRestrictManageUsersAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires just before the closing div containing the bulk role-change controls in the Users list table.
 *
 * @since 3.5.0
 * @since 4.6.0 The `$which` parameter was added.
 */
abstract class WPRestrictManageUsersAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'restrict_manage_users';

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
	public int $hook_accepted_args = 1;


	/**
	 * The hook execution method
	 *
	 * @param string $which The location of the extra table nav markup: 'top' or 'bottom'.
	 */
	abstract public function execute( $which );
}
