<?php
/**
 * WPPreGetScheduledEventAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filter to override retrieving a scheduled event.
 *
 * @since 5.1.0
 */
abstract class WPPreGetScheduledEventAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pre_get_scheduled_event';

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
	 * @param null|false|object $pre Value to return instead. Default null to continue retrieving the event.
	 * @param string $hook Action hook of the event.
	 * @param array $args Array containing each separate argument to pass to the hook's callback function. Although not passed to a callback, these arguments are used to uniquely identify the event.
	 * @param int|null $timestamp Unix timestamp ( UTC ) of the event. Null to retrieve next scheduled event.
	 */
	abstract public function execute( $pre, $hook, $args, $timestamp );
}
