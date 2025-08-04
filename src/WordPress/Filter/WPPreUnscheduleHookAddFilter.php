<?php
/**
 * WPPreUnscheduleHookAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filter to override clearing all events attached to the hook.
 *
 * @since 5.1.0
 * @since 5.7.0 The `$wp_error` parameter was added, and a `WP_Error` object can now be returned.
 */
abstract class WPPreUnscheduleHookAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pre_unschedule_hook';

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
	 * @param null|int|false|\WP_Error $pre Value to return instead. Default null to continue unscheduling the hook.
	 * @param string $hook Action hook, the execution of which will be unscheduled.
	 * @param bool $wp_error Whether to return a WP_Error on failure.
	 */
	abstract public function execute( $pre, $hook, $wp_error );
}
