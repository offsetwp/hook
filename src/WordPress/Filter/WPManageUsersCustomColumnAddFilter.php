<?php
/**
 * WPManageUsersCustomColumnAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the display output of custom columns in the Users list table.
 *
 * @since 2.8.0
 */
abstract class WPManageUsersCustomColumnAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'manage_users_custom_column';

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
	 * @param string $output Custom column output. Default empty.
	 * @param string $column_name Column name.
	 * @param int $user_id ID of the currently-listed user.
	 */
	abstract public function execute( $output, $column_name, $user_id );
}
