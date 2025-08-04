<?php
/**
 * WPSanitizeOptionOptionAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters an option value following sanitization.
 *
 * @since 2.3.0
 * @since 4.3.0 Added the `$original_value` parameter.
 */
abstract class WPSanitizeOptionOptionAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'sanitize_option_{$option}';

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
	 * @param mixed $value The sanitized option value.
	 * @param string $option The option name.
	 * @param mixed $original_value The original value passed to the function.
	 */
	abstract public function execute( $value, $option, $original_value );
}
