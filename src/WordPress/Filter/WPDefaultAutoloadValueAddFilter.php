<?php
/**
 * WPDefaultAutoloadValueAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Allows to determine the default autoload value for an option where no explicit value is passed.
 *
 * @since 6.6.0
 */
abstract class WPDefaultAutoloadValueAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_default_autoload_value';

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
	 * @param bool|null $autoload The default autoload value to set. Returning true will be set as 'auto-on' in the database, false will be set as 'auto-off', and null will be set as 'auto'.
	 * @param string $option The passed option name.
	 * @param mixed $value The passed option value to be saved.
	 */
	abstract public function execute( $autoload, $option, $value );
}
