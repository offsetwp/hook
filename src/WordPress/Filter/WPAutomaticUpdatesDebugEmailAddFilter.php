<?php
/**
 * WPAutomaticUpdatesDebugEmailAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the debug email that can be sent following an automatic background core update.
 *
 * @since 3.8.0
 */
abstract class WPAutomaticUpdatesDebugEmailAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'automatic_updates_debug_email';

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
	 * @param array $email Array of email arguments that will be passed to wp_mail().
	 * @param int $failures The number of failures encountered while upgrading.
	 * @param mixed $results The results of all attempted updates.
	 */
	abstract public function execute( $email, $failures, $results );
}
