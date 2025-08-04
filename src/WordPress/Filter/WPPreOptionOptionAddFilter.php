<?php
/**
 * WPPreOptionOptionAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the value of an existing option before it is retrieved.
 *
 * @since 1.5.0
 * @since 4.4.0 The `$option` parameter was added.
 * @since 4.9.0 The `$default_value` parameter was added.
 */
abstract class WPPreOptionOptionAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pre_option_{$option}';

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
	 * @param mixed $pre_option The value to return instead of the option value. This differs from <code>$default_value</code>, which is used as the fallback value in the event the option doesn't exist elsewhere in get_option(). Default false ( to skip past the short-circuit ).
	 * @param string $option Option name.
	 * @param mixed $default_value The fallback value to return if the option does not exist. Default false.
	 */
	abstract public function execute( $pre_option, $option, $default_value );
}
