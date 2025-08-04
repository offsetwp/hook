<?php
/**
 * WPGetScheduleAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the schedule name for a hook.
 *
 * @since 5.1.0
 */
abstract class WPGetScheduleAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'get_schedule';

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
	 * @param string|false $schedule Schedule for the hook. False if not found.
	 * @param string $hook Action hook to execute when cron is run.
	 * @param array $args Arguments to pass to the hook's callback function.
	 */
	abstract public function execute( $schedule, $hook, $args );
}
