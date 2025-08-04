<?php
/**
 * WPAutoloadValuesToAutoloadAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the autoload values that should be considered for autoloading from the options table.
 *
 * @since 6.6.0
 */
abstract class WPAutoloadValuesToAutoloadAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_autoload_values_to_autoload';

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
	public int $hook_accepted_args = 1;


	/**
	 * The hook execution method
	 *
	 * @param string[] $autoload_values Autoload values used to autoload option. Default list contains 'yes', 'on', 'auto-on', and 'auto'.
	 */
	abstract public function execute( $autoload_values );
}
