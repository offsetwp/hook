<?php
/**
 * WPExpirationOfTransientTransientAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the expiration for a transient before its value is set.
 *
 * @since 4.4.0
 */
abstract class WPExpirationOfTransientTransientAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'expiration_of_transient_{$transient}';

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
	 * @param int $expiration Time until expiration in seconds. Use 0 for no expiration.
	 * @param mixed $value New value of transient.
	 * @param string $transient Transient name.
	 */
	abstract public function execute( $expiration, $value, $transient );
}
