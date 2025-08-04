<?php
/**
 * WPPreUpdateOptionAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters an option before its value is ( maybe ) serialized and updated.
 *
 * @since 3.9.0
 */
abstract class WPPreUpdateOptionAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pre_update_option';

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
	 * @param mixed $value The new, unserialized option value.
	 * @param string $option Name of the option.
	 * @param mixed $old_value The old option value.
	 */
	abstract public function execute( $value, $option, $old_value );
}
