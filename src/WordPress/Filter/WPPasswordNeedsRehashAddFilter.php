<?php
/**
 * WPPasswordNeedsRehashAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether the password hash needs to be rehashed.
 *
 * @since 6.8.0
 */
abstract class WPPasswordNeedsRehashAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'password_needs_rehash';

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
	 * @param bool $needs_rehash Whether the password hash needs to be rehashed.
	 * @param string $hash The password hash.
	 * @param string|int $user_id Optional. ID of a user associated with the password.
	 */
	abstract public function execute( $needs_rehash, $hash, $user_id );
}
