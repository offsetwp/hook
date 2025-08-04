<?php
/**
 * WPNextScheduledAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the timestamp of the next scheduled event for the given hook.
 *
 * @since 6.8.0
 */
abstract class WPNextScheduledAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_next_scheduled';

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
	public int $hook_accepted_args = 4;


	/**
	 * The hook execution method
	 *
	 * @param int $timestamp Unix timestamp ( UTC ) for when to next run the event.
	 * @param array $next_event An object containing an event's data.
	 * @param array $args Array containing each separate argument to pass to the hook callback function.
	 */
	abstract public function execute( $timestamp, $next_event, $args );
}
