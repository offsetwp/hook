<?php
/**
 * WPCronRescheduleEventErrorAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires if an error happens when rescheduling a cron event.
 *
 * @since 6.1.0
 */
abstract class WPCronRescheduleEventErrorAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'cron_reschedule_event_error';

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
	 * @param \WP_Error $result The WP_Error object.
	 * @param string $hook Action hook to execute when the event is run.
	 * @param array $v Event data.
	 */
	abstract public function execute( $result, $hook, $v );
}
