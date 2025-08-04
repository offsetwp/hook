<?php
/**
 * WPNonceLifeAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the lifespan of nonces in seconds.
 *
 * @since 2.5.0
 * @since 6.1.0 Added `$action` argument to allow for more targeted filters.
 */
abstract class WPNonceLifeAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'nonce_life';

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
	 * @param int $lifespan Lifespan of nonces in seconds. Default 86,400 seconds, or one day.
	 * @param string|int $action The nonce action, or -1 if none was provided.
	 */
	abstract public function execute( $lifespan, $action );
}
