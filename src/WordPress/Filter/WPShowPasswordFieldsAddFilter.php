<?php
/**
 * WPShowPasswordFieldsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the display of the password fields.
 *
 * @since 1.5.1
 * @since 2.8.0 Added the `$profile_user` parameter.
 * @since 4.4.0 Now evaluated only in user-edit.php.
 */
abstract class WPShowPasswordFieldsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'show_password_fields';

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
	 * @param bool $show Whether to show the password fields. Default true.
	 * @param \WP_User $profile_user User object for the current user to edit.
	 */
	abstract public function execute( $show, $profile_user );
}
