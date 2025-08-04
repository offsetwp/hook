<?php
/**
 * WPDefaultOptionOptionAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the default value for an option.
 *
 * @since 3.4.0
 * @since 4.4.0 The `$option` parameter was added.
 * @since 4.7.0 The `$passed_default` parameter was added to distinguish between a `false` value and the default parameter value.
 */
abstract class WPDefaultOptionOptionAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'default_option_{$option}';

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
	 * @param mixed $default_value The default value to return if the option does not exist in the database.
	 * @param string $option Option name.
	 * @param bool $passed_default Was <code>get_option()</code> passed a default value?.
	 */
	abstract public function execute( $default_value, $option, $passed_default );
}
