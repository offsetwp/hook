<?php
/**
 * WPPasswordResetKeyExpiredAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the return value of check_password_reset_key() when an old-style key or an expired key is used.
 *
 * @since 3.7.0 Previously plain-text keys were stored in the database.
 * @since 4.3.0 Previously key hashes were stored without an expiration time.
 */
abstract class WPPasswordResetKeyExpiredAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'password_reset_key_expired';

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
	 * @param \WP_Error $return A WP_Error object denoting an expired key. Return a WP_User object to validate the key.
	 * @param int $user_id The matched user ID.
	 */
	abstract public function execute( $return, $user_id );
}
