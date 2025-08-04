<?php
/**
 * WPPreUnscheduleEventAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filter to override unscheduling of events.
 *
 * @since 5.1.0
 * @since 5.7.0 The `$wp_error` parameter was added, and a `WP_Error` object can now be returned.
 */
abstract class WPPreUnscheduleEventAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pre_unschedule_event';

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
	public int $hook_accepted_args = 5;


	/**
	 * The hook execution method
	 *
	 * @param null|bool|\WP_Error $pre Value to return instead. Default null to continue unscheduling the event.
	 * @param int $timestamp Unix timestamp ( UTC ) for when to run the event.
	 * @param string $hook Action hook, the execution of which will be unscheduled.
	 * @param array $args Arguments to pass to the hook's callback function.
	 * @param bool $wp_error Whether to return a WP_Error on failure.
	 */
	abstract public function execute( $pre, $timestamp, $hook, $args, $wp_error );
}
