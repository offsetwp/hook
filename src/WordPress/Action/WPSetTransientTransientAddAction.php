<?php
/**
 * WPSetTransientTransientAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires after the value for a specific transient has been set.
 *
 * @since 3.0.0
 * @since 3.6.0 The `$value` and `$expiration` parameters were added.
 * @since 4.4.0 The `$transient` parameter was added.
 */
abstract class WPSetTransientTransientAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'set_transient_{$transient}';

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
	 * @param mixed $value Transient value.
	 * @param int $expiration Time until expiration in seconds.
	 * @param string $transient The name of the transient.
	 */
	abstract public function execute( $value, $expiration, $transient );
}
