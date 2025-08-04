<?php
/**
 * WPHeartbeatReceivedAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the Heartbeat response received.
 *
 * @since 3.6.0
 */
abstract class WPHeartbeatReceivedAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'heartbeat_received';

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
	 * @param array $response The Heartbeat response.
	 * @param array $data The $_POST data sent.
	 * @param string $screen_id The screen ID.
	 */
	abstract public function execute( $response, $data, $screen_id );
}
