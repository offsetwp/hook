<?php
/**
 * WPCacheSetLastChangedAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires after a cache group `last_changed` time is updated.
 *
 * @since 6.3.0
 */
abstract class WPCacheSetLastChangedAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_cache_set_last_changed';

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
	 * @param string $group The cache group name.
	 * @param string $time The new last changed time ( msec sec ).
	 * @param string|false $previous_time The previous last changed time. False if not previously set.
	 */
	abstract public function execute( $group, $time, $previous_time );
}
