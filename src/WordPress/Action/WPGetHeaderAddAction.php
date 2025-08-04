<?php
/**
 * WPGetHeaderAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires before the header template file is loaded.
 *
 * @since 2.1.0
 * @since 2.8.0 The `$name` parameter was added.
 * @since 5.5.0 The `$args` parameter was added.
 */
abstract class WPGetHeaderAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'get_header';

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
	public int $hook_accepted_args = 2;


	/**
	 * The hook execution method
	 *
	 * @param string|null $name Name of the specific header file to use. Null for the default header.
	 * @param array $args Additional arguments passed to the header template.
	 */
	abstract public function execute( $name, $args );
}
