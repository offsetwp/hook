<?php
/**
 * WPHumanTimeDiffAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the human-readable difference between two timestamps.
 *
 * @since 4.0.0
 */
abstract class WPHumanTimeDiffAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'human_time_diff';

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
	 * @param string $since The difference in human-readable text.
	 * @param int $diff The difference in seconds.
	 * @param int $from Unix timestamp from which the difference begins.
	 * @param int $to Unix timestamp to end the time difference.
	 */
	abstract public function execute( $since, $diff, $from, $to );
}
