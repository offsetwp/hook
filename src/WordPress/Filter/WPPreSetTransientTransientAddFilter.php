<?php
/**
 * WPPreSetTransientTransientAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters a specific transient before its value is set.
 *
 * @since 3.0.0
 * @since 4.2.0 The `$expiration` parameter was added.
 * @since 4.4.0 The `$transient` parameter was added.
 */
abstract class WPPreSetTransientTransientAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pre_set_transient_{$transient}';

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
	 * @param mixed $value New value of transient.
	 * @param int $expiration Time until expiration in seconds.
	 * @param string $transient Transient name.
	 */
	abstract public function execute( $value, $expiration, $transient );
}
