<?php
/**
 * WPRandomPasswordAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the randomly-generated password.
 *
 * @since 3.0.0
 * @since 5.3.0 Added the `$length`, `$special_chars`, and `$extra_special_chars` parameters.
 */
abstract class WPRandomPasswordAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'random_password';

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
	 * @param string $password The generated password.
	 * @param int $length The length of password to generate.
	 * @param bool $special_chars Whether to include standard special characters.
	 * @param bool $extra_special_chars Whether to include other special characters.
	 */
	abstract public function execute( $password, $length, $special_chars, $extra_special_chars );
}
