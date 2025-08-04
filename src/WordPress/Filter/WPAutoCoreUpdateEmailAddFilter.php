<?php
/**
 * WPAutoCoreUpdateEmailAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the email sent following an automatic background core update.
 *
 * @since 3.7.0
 */
abstract class WPAutoCoreUpdateEmailAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'auto_core_update_email';

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
	 * @param array $email Array of email arguments that will be passed to wp_mail().
	 * @param string $type The type of email being sent. Can be one of 'success', 'fail', 'manual', 'critical'.
	 * @param object $core_update The update offer that was attempted.
	 * @param mixed $result The result for the core update. Can be WP_Error.
	 */
	abstract public function execute( $email, $type, $core_update, $result );
}
