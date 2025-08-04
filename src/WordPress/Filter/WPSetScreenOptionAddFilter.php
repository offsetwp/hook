<?php
/**
 * WPSetScreenOptionAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters a screen option value before it is set.
 *
 * @since 2.8.0
 * @since 5.4.2 Only applied to options ending with '_page', or the 'layout_columns' option.
 *
 * @see set_screen_options()
 */
abstract class WPSetScreenOptionAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'set-screen-option';

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
	 * @param mixed $screen_option The value to save instead of the option value. Default false ( to skip saving the current option ).
	 * @param string $option The option name.
	 * @param int $value The option value.
	 */
	abstract public function execute( $screen_option, $option, $value );
}
