<?php
/**
 * AddFilter
 *
 * @package Offsetwp\Hook
 */

declare(strict_types=1);

namespace Offsetwp\Hook\Support;

/**
 * Adds a callback function to a filter hook.
 *
 * WordPress offers filter hooks to allow plugins to modify
 * various types of internal data at runtime.
 *
 * A plugin can modify data by binding a callback to a filter hook. When the filter
 * is later applied, each bound callback is run in order of priority, and given
 * the opportunity to modify a value by returning a new value.
 *
 * @package Offsetwp\Hook
 */
abstract class AddFilter {
	/**
	 * The name of the filter to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = '';

	/**
	 * The callback to be run when the filter is applied.
	 *
	 * @var string
	 */
	public string $hook_callback = 'execute';

	/**
	 * Optional. Used to specify the order in which the functions associated with a particular filter are executed. Lower numbers correspond with earlier execution, and functions with the same priority are executed in the order in which they were added to the filter. Default 10.
	 *
	 * @var int
	 */
	public int $hook_priority = 10;

	/**
	 * Optional. The number of arguments the function accepts. Default 1.
	 *
	 * @var int
	 */
	public int $hook_accepted_args = 1;

	/**
	 * Adds a callback function to a filter hook
	 *
	 * @return void
	 * @throws \ErrorException If the hook name is empty or if the callback method is invalid.
	 */
	public function __construct() {
		if ( ! $this->hook_name ) {
			throw new \ErrorException( 'The hook has no name' );
		}
		if ( ! $this->hook_callback || ! method_exists( $this, $this->hook_callback ) ) {
			throw new \ErrorException( \esc_html( "Invalid or undefined callback method '{$this->hook_callback}'" ) );
		}
		\add_filter( $this->hook_name, array( $this, $this->hook_callback ), $this->hook_priority, $this->hook_accepted_args );
	}
}
