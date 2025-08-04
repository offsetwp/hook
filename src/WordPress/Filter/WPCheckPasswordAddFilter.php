<?php
/**
 * WPCheckPasswordAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether the plaintext password matches the hashed password.
 *
 * @since 2.5.0
 * @since 6.8.0 Passwords are now hashed with bcrypt by default. Old passwords may still be hashed with phpass or md5.
 */
abstract class WPCheckPasswordAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'check_password';

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
	 * @param bool $check Whether the passwords match.
	 * @param string $password The plaintext password.
	 * @param string $hash The hashed password.
	 * @param string|int $user_id Optional ID of a user associated with the password. Can be empty.
	 */
	abstract public function execute( $check, $password, $hash, $user_id );
}
