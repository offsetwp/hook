<?php
/**
 * WPPreScheduleEventAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filter to override scheduling an event.
 *
 * @since 5.1.0
 * @since 5.7.0 The `$wp_error` parameter was added, and a `WP_Error` object can now be returned.
 */
abstract class WPPreScheduleEventAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pre_schedule_event';

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
	 * @param null|bool|\WP_Error $result The value to return instead. Default null to continue adding the event.
	 * @param array $event An object containing an event's data.
	 * @param bool $wp_error Whether to return a WP_Error on failure.
	 */
	abstract public function execute( $result, $event, $wp_error );
}
