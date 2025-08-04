<?php
/**
 * AddAction
 *
 * @package Offsetwp\Hook
 */

declare(strict_types=1);

namespace Offsetwp\Hook\Support;

/**
 * Adds a callback function to a filter hook
 *
 * Actions are the hooks that the WordPress core launches at specific points
 * during execution, or when specific events occur. Plugins can specify that
 * one or more of its PHP functions are executed at these points, using the
 * Action API.
 */
abstract class AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = '';

	/**
	 * The callback to be run when the action is called.
	 *
	 * @var string
	 */
	public string $hook_callback = 'execute';

	/**
	 * Optional. Used to specify the order in which the functions associated with a particular action are executed. Lower numbers correspond with earlier execution, and functions with the same priority are executed in the order in which they were added to the action. Default 10.
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
		\add_action( $this->hook_name, array( $this, $this->hook_callback ), $this->hook_priority, $this->hook_accepted_args );
	}
}
