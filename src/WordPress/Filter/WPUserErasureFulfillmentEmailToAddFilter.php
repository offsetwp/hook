<?php
/**
 * WPUserErasureFulfillmentEmailToAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the recipient of the data erasure fulfillment notification.
 *
 * @since 4.9.6
 */
abstract class WPUserErasureFulfillmentEmailToAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'user_erasure_fulfillment_email_to';

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
	 * @param string $user_email The email address of the notification recipient.
	 * @param \WP_User_Request $request The request that is initiating the notification.
	 */
	abstract public function execute( $user_email, $request );
}
