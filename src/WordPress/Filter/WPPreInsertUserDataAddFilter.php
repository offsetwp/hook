<?php
/**
 * WPPreInsertUserDataAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters user data before the record is created or updated.
 *
 * @since 4.9.0
 * @since 5.8.0 The `$userdata` parameter was added.
 * @since 6.8.0 The user's password is now hashed using bcrypt by default instead of phpass.
 */
abstract class WPPreInsertUserDataAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_pre_insert_user_data';

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
	public int $hook_accepted_args = 4;


	/**
	 * The hook execution method
	 *
	 * @param array $data Values and keys for the user.
	 * @param bool $update Whether the user is being updated rather than created.
	 * @param int|null $user_id ID of the user to be updated, or NULL if the user is being created.
	 * @param array $userdata The raw array of data passed to wp_insert_user().
	 */
	abstract public function execute( $data, $update, $user_id, $userdata );
}
