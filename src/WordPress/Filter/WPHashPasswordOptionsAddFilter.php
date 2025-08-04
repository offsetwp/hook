<?php
/**
 * WPHashPasswordOptionsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the options passed to the password_hash() and password_needs_rehash() functions.
 *
 * @since 6.8.0
 */
abstract class WPHashPasswordOptionsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_hash_password_options';

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
	 * @param array $options Array of options to pass to the password hashing functions. By default this is an empty array which means the default options will be used.
	 * @param string $algorithm The hashing algorithm in use.
	 */
	abstract public function execute( $options, $algorithm );
}
