<?php
/**
 * WPHeartbeatNoprivSendAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters Heartbeat Ajax response in no-privilege environments when no data is passed.
 *
 * @since 3.6.0
 */
abstract class WPHeartbeatNoprivSendAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'heartbeat_nopriv_send';

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
	 * @param array $response The no-priv Heartbeat response.
	 * @param string $screen_id The screen ID.
	 */
	abstract public function execute( $response, $screen_id );
}
